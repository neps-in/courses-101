# M08.L03 Quiz — Templates, Static Site Generators & Headless CMS

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-03 against the Eleventy docs and a real Eleventy 3.1.7 build, Decap CMS docs and GitHub Docs (custom Pages workflows).

### Q1. What does a static site generator actually deliver to visitors? *(O1 · recall)*
- a) Pages assembled on a server from a database each time someone visits
- b) Plain HTML files that were built before the site went live online
- c) A JavaScript app that builds the pages inside the visitor's browser
- d) Templates that browsers combine with the data files when they load

**Answer:** b
**Explanation:** The generator runs at build time and writes finished `.html` files into `_site/`; the host serves those files as they are. Building on a server per visit is how WordPress works, and browsers never see the templates or data files.
**Hint:** When does the "merge" happen: before deploy, or during a visit?

### Q2. In Eleventy, where should the shared `<header>` that appears on every page live? *(O1 · recall)*
- a) In `_site/header.html`, so that it's copied into each built page
- b) In each page's front matter, between the `---` lines on top
- c) In `_data/header.json`, as a list of links and an image path
- d) In a partial, `_includes/header.njk`, included by the layout

**Answer:** d
**Explanation:** Repeated markup goes in one partial, included by the layout, so a change in one file updates every page. `_site/` is overwritten on each build, front matter holds per-page values, and data files hold values rather than markup.
**Hint:** Identical on every page → which kind of file?

### Q3. What is a "headless" CMS? *(O3 · recall)*
- a) A CMS that manages content and leaves its display to your site or app
- b) A CMS that has no admin screen, so all content is edited in code files
- c) A CMS that runs only on a server with no screen attached to it at all
- d) A CMS that hides its pages from search engines by adding noindex

**Answer:** a
**Explanation:** "Head" is the front-end. A headless CMS stores and edits content (Git-based like Decap, or API-based like Contentful) and your generator or app decides how it looks. Headless CMSs do have editors, and the term has nothing to do with servers' screens or indexing.
**Hint:** Which part of a website is its "head" in this sense?

### Q4. Chen's marketing team (four people, no developers) will publish two campaign pages a week on an Eleventy site. What's the best addition? *(O3 · scenario)*
- a) Teach everyone Git and Nunjucks so that they can edit the template files
- b) Switch to hand-coded HTML so there's no build step for them to worry about
- c) Add a headless CMS so they edit in a web editor and the site rebuilds itself
- d) Let them edit the files in `_site/` directly on the server after each deploy

**Answer:** c
**Explanation:** A headless CMS (Git-based like Decap, or API-based) gives non-technical editors a web form while the SSG keeps building fast static pages. Training everyone in Git is slow, hand-coding many pages brings back copy-paste problems, and `_site/` edits are overwritten by the next build.
**Hint:** Who edits, and how often?

### Q5. After converting to Eleventy, Ravi's thank-you page and home page both show the title "Fresh Coffee Beans Delivered Monthly". What's the most likely cause? *(O2 · scenario)*
- a) Eleventy always uses the home page's title for every page it builds
- b) The layout hard-codes the title instead of using `{{ title }}`
- c) The thank-you page is missing from `_data/site.json` entirely
- d) Search engines merged the two titles because the pages look alike

**Answer:** b
**Explanation:** Per-page values (title, description, canonical, `noindex`) must come from each page's front matter through variables. A fixed title in the layout gets printed on every page; `grep -rh "<title>" _site` shows it. Eleventy doesn't copy titles between pages, and pages don't need to be listed in a data file.
**Hint:** Part E, bug 1.

### Q6. Spot the error. This layout snippet is meant to keep only the thank-you page out of search. What's wrong? *(O2 · spot-the-error)*
```html
<head>
  <title>{{ title }} | {{ site.name }}</title>
  <meta name="robots" content="noindex">
  {% if noindex %}<link rel="canonical" href="{{ site.url }}{{ page.url }}">{% endif %}
</head>
```
- a) `{{ site.name }}` can't be used inside a `<title>` element
- b) The canonical tag must come before the `<title>` element
- c) `noindex` prints on every page; `{% if %}` wraps the wrong tag
- d) Nunjucks doesn't allow `{% if %}` blocks anywhere inside a page's `<head>`

**Answer:** c
**Explanation:** The robots tag is outside the condition, so every page (home included) tells search engines not to index it, while the canonical only appears on the thank-you page. Swap them: canonical always, `{% if noindex %}<meta name="robots" content="noindex">{% endif %}`. Variables and `{% if %}` work anywhere, and tag order in the head doesn't matter here.
**Hint:** Which tag should depend on `noindex`?

### Q7. *(review: m08-l02)* You rename the form's `name="email"` field to `email_address` in the new template. What breaks? *(O3 of M08.L02 · recall)*
- a) Nothing, because automation tools detect renamed fields on their own
- b) The webhook URL changes, so the form posts to a dead address
- c) The Eleventy build fails because field names are checked at build time
- d) The mapping still reads `email`, so sheet rows and replies break

**Answer:** d
**Explanation:** Field mappings use the form's `name` as the key. The webhook still receives data, but under a key the flow doesn't read, so the email column is empty and no auto-reply goes out. Templates make it easy to change markup everywhere at once, which is exactly why you must check downstream tools.
**Hint:** Renaming a field is a breaking change for…?
