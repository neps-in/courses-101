"""Convert M01 lesson/quiz/capstone Markdown into a JSON payload for the LearnPress upload."""
import html, json, re, sys
from markdown_it import MarkdownIt

MD = MarkdownIt("commonmark").enable("table")

ROOT = "/home/ubuntu/courses-101/wordpress-101"
MERMAID_JS = ('<script type="module">import mermaid from "https://cdn.jsdelivr.net/npm/mermaid@11/dist/mermaid.esm.min.mjs";'
              'mermaid.initialize({startOnLoad:true});</script>')

LESSONS = [  # (wp lesson id, lesson md, quiz md or None)
    (2615, "lessons/m01-l01-choose-your-platform.md", "lessons/m01-l01-choose-your-platform-quiz.md"),
    (2616, "lessons/m01-l02-domain-dns-hosting.md", "lessons/m01-l02-domain-dns-hosting-quiz.md"),
    (2617, "lessons/m01-l03-install-https-dashboard.md", "lessons/m01-l03-install-https-dashboard-quiz.md"),
    (2618, "lessons/m01-l04-first-day-settings.md", "lessons/m01-l04-first-day-settings-quiz.md"),
    (2619, "lessons/m01-l05-day-one-safety-net.md", "lessons/m01-l05-day-one-safety-net-quiz.md"),
    (2620, "capstones/m01-capstone.md", None),
]


def md(text):
    return MD.render(text).strip()


URL_RE = re.compile(r'(?<![="\'/\w])(https?://[^\s<>"\')]*[^\s<>"\').,;:!?])')


def linkify(out):
    parts = re.split(r"(<pre.*?</pre>|<code>.*?</code>|<a .*?</a>)", out, flags=re.S)
    return "".join(p if i % 2 else URL_RE.sub(r'<a href="\1">\1</a>', p) for i, p in enumerate(parts))


def md_inline(text):
    out = md(text)
    m = re.fullmatch(r"<p>(.*)</p>", out, re.S)
    return m.group(1) if m else out


def plain(text):
    text = re.sub(r"\*\*(.+?)\*\*", r"\1", text)
    text = re.sub(r"(?<!\w)\*(.+?)\*(?!\w)", r"\1", text)
    return re.sub(r"`([^`]+)`", r'"\1"', text).strip()


def drop_section(text, heading):
    return re.sub(rf"^## {re.escape(heading)}\n.*?(?=^## |\Z)", "", text, flags=re.S | re.M)


def lesson_html(path):
    text = open(f"{ROOT}/{path}").read()
    text = re.sub(r"^# .*\n", "", text, count=1)                               # title is the post title
    text = re.sub(r"^\s*> 🖼️ \*\*Image prompt:\*\*.*\n\s*> \*\*Alt text:\*\*.*\n", "", text, flags=re.M)
    text = re.sub(r"!\[[^\]]*\]\([^)]*\.webp\)\n?", "", text, flags=re.S)      # no images on the site
    text = drop_section(text, "Glossary terms added")                           # repo-internal
    if "## Module 1 cheat sheet" in text:                                       # inline the cheat sheet
        sheet = open(f"{ROOT}/cheatsheets/m01-own-your-platform.md").read()
        sheet = re.sub(r"^# .*\n", "", sheet, count=1)
        sheet = re.sub(r"^## ", "### ", sheet, flags=re.M)
        text = re.sub(r"^## Module 1 cheat sheet\n.*\Z", "## Module 1 cheat sheet\n" + sheet, text, flags=re.S | re.M)
    out = md(text)

    def mermaid(m):
        src = m.group(1)
        alt = re.search(r"%% alt: (.*)", html.unescape(src))
        aria = f' role="img" aria-label="{html.escape(alt.group(1).strip(), quote=True)}"' if alt else ""
        return f'<pre class="mermaid"{aria}>{src}</pre>'

    out, n = re.subn(r'<pre><code class="language-mermaid">(.*?)</code></pre>', mermaid, out, flags=re.S)
    out = linkify(out)
    if n:
        out += "\n" + MERMAID_JS
    return out


def duration(path):
    head = open(f"{ROOT}/{path}").read()[:600]
    mins = [int(x) for x in re.findall(r"~(\d+)(?:–\d+)? min", head)]
    return f"{sum(mins) or 30} minute"


def lesson_ref(m):
    mod, les = m.group(1), m.group(2)
    return f"(Review of lesson {int(mod)}.{int(les)})"


def parse_quiz(path):
    text = open(f"{ROOT}/{path}").read()
    title = re.search(r"^# (.*)", text, re.M).group(1)
    blocks = re.split(r"^### Q\d+\.\s*", text, flags=re.M)[1:]
    questions = []
    for b in blocks:
        lines = b.rstrip().split("\n")
        q_title = re.sub(r"\(review: m(\d+)-l(\d+)\)", lesson_ref, lines[0])
        opts, context, i = [], [], 1
        while i < len(lines) and not re.match(r"- [a-h]\) ", lines[i]):
            context.append(lines[i]); i += 1
        while i < len(lines) and re.match(r"- [a-h]\) ", lines[i]):
            opts.append((lines[i][2], lines[i][5:])); i += 1
        rest = "\n".join(lines[i:])
        answer = re.search(r"\*\*Answer:\*\*\s*([a-h])", rest).group(1)
        expl = re.search(r"\*\*Explanation:\*\*\s*(.*?)(?=\n\*\*Hint:\*\*|\Z)", rest, re.S).group(1).strip()
        hint = re.search(r"\*\*Hint:\*\*\s*(.*)", rest, re.S).group(1).strip()
        ctx = "\n".join(context).strip()
        assert len(opts) >= 2 and answer in [o[0] for o in opts], (path, q_title)
        questions.append({
            "title": plain(q_title),
            "content": md(ctx) if ctx else "",
            "options": [{"title": plain(t), "is_true": "yes" if k == answer else ""} for k, t in opts],
            "explanation": md_inline(expl),
            "hint": md_inline(hint),
        })
    return title, questions


payload = []
for lid, lpath, qpath in LESSONS:
    item = {"lesson_id": lid, "content": lesson_html(lpath), "duration": duration(lpath), "quiz": None}
    if qpath:
        qtitle, qs = parse_quiz(qpath)
        item["quiz"] = {"title": qtitle, "questions": qs}
    payload.append(item)

json.dump(payload, open(sys.argv[1], "w"), ensure_ascii=False, indent=1)
for p in payload:
    q = p["quiz"]
    print(p["lesson_id"], p["duration"], len(p["content"]), "chars", (q["title"], len(q["questions"])) if q else "no quiz")
