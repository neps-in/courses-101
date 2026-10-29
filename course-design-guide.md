# Course design guide

How we design every course in this repo: which format to choose, what most courses get wrong,
and the features that make ours different. Use it with
`templates/course-outline-template.md` (what a course must contain) and
`course-framework.md` (lesson, quiz and capstone templates).

---

## 1. Course formats

### By delivery style
| Format | What it is | Best for | Watch out for |
|---|---|---|---|
| **Self-paced written** (our default) | Lessons as text + diagrams + exercises, learn any time | Technical, step-by-step skills; searchable reference | Low completion without motivation design |
| **Self-paced video** | Recorded lessons (MOOC style) | Visual/UI-heavy topics, showing a screen | Expensive to update; goes stale fast |
| **Cohort-based** | Fixed start date, group moves together, live sessions | Accountability, community, higher completion | Needs instructor time; fixed schedule |
| **Live workshop / bootcamp** | Intensive hours or days, live | One focused skill, fast results | Hard to revisit; schedule-bound |
| **Blended** | Self-paced content + live office hours or reviews | Best of both: flexible + support | Needs a support rota |
| **Drip / email course** | One short lesson per day or week by email | Habits, beginners, lead generation | Shallow depth per lesson |
| **Micro-learning** | 3–7 min units, mobile-first | Busy learners, refreshers | Fragmented for complex topics |
| **Challenge** | "30 days of X", one task a day | Habit forming, momentum, community | Needs tight scoping |
| **Project-based / build-along** | Whole course builds one real project | Portfolio, applied skills | Learners stuck if one step breaks |
| **Interactive labs** | In-browser sandboxes, auto-checked tasks | Coding, data, tools | Platform cost/lock-in |
| **Mentored / 1:1** | Personal guidance and feedback | Career change, high-stakes skills | Doesn't scale; premium price |
| **Audio / podcast course** | Listen-and-learn episodes | Concepts, commute learning | Can't show steps |
| **Scenario / game-based** | Decisions in simulated situations | Judgement, soft skills, security | Costly to build well |
| **Certification prep** | Mapped to an exam's objectives | Exam takers | Tied to exam changes |
| **Handbook + workbook** | Reference guide plus exercises | Practitioners who return often | Needs strong structure |

### By length
| Length | Typical size | Use when |
|---|---|---|
| Mini course | 3–6 lessons, 1–2 h | One task ("Set up Search Console") |
| Short course | 2–4 modules, 4–8 h | One skill area |
| Full course | 6–9 modules, 15–40 h | A role-level capability (our "101" courses) |
| Program / track | Several courses in sequence | Career path (e.g. Creator → SEO → Automation) |

### By output (what we can produce from the same Markdown source)
Website (MkDocs / Docusaurus / Astro), PDF or ebook, slide decks, video scripts, email sequences,
Notion pages, or LMS packages (SCORM / xAPI) for platforms like Moodle, Teachable or Thinkific.

**Our default:** self-paced written + exercises + project-based capstones, written once in Markdown
and published in several formats. Add a cohort or live layer (blended) when a course needs community
or accountability.

---

## 2. What most courses miss

| Gap | What goes wrong | Our fix (where in template) |
|---|---|---|
| Vague audience, no "not for" | Wrong learners join, get lost, drop out | Ideal for / Not for + personas (§2) |
| Hidden prerequisites and tool costs | Learners stall at Lesson 3 needing a paid tool | Prereqs (§3) + Tools & costs with a free path (§7) |
| "Understand X" outcomes | Can't be tested; learners don't know when they're done | Measurable outcomes (§5) |
| No time estimates | Learners can't plan; unrealistic expectations | Format & duration table (§6) |
| Slow start | Hours of theory before anything works | Time to first win in under 30 min (§6) |
| Toy examples | Skills don't transfer to messy real life | Running example from real scenarios (§12) |
| Happy path only | Learner hits an error and quits | Troubleshooting in every lesson; failure points per module (§13) |
| Recall-only quizzes | Passing ≠ able to do it | Scenario + spot-the-error questions; capstones with rubrics (§14) |
| No review of earlier material | Learners forget by Module 4 | Spaced-review questions in every quiz (§14) |
| Everyone starts at zero | Experienced learners get bored | Diagnostic quiz with skip rules (§11) |
| Out-of-date content, no date | Learners follow broken steps | Freshness flag, "verified on" stamps, review cadence (§17) |
| Teaches tools, not decisions | Learners can't choose when not to use something | "When to use / when not to" in lessons |
| No artifact at the end | Nothing to show employers or clients | Module capstones build one portfolio project (§12, §14) |
| Accessibility ignored | Excludes learners; legal risk | Accessibility checklist (§15) |
| No completion definition | Learners never feel finished | Completion criteria (§14) |
| Learners alone, no feedback | Questions go unanswered; course never improves | Support + survey + errata (§16) |
| No "what next" | Momentum is lost after the last lesson | What next (§19) |
| No reference to come back to | Learners redo lessons to find one setting | Cheat sheet per module + glossary (§18) |
| AI ignored or overhyped | Learners either avoid AI or trust it blindly | "Use AI for this" sections showing limits (below) |

---

## 3. What makes our courses different

1. **Non-negotiables, traced end to end.** Every course lists the skills a learner can't skip and
   shows where each is taught, reinforced and assessed. Nothing critical is left to chance.
2. **Freshness built in.** Every lesson states the product version and date it was checked against.
   Fast-moving courses carry a freshness flag and a scheduled review.
3. **A flowchart for every process.** Each process is drawn as a diagram in the house palette, so
   learners see how it works before they read the steps.
4. **Break-it-and-fix-it labs.** At least one exercise per module deliberately breaks something
   (a wrong canonical, a failed restore, a 404) and has the learner diagnose it.
5. **Decisions, not just steps.** Every lesson has a "when to use / when not to" note and a
   trade-off, so learners can make their own choices later.
6. **One running project, a real portfolio.** Each module capstone adds a piece of the same project.
   The final capstone is something a learner can show a client or employer.
7. **A free path always.** Every course can be finished at zero cost; paid tools are optional upgrades.
8. **Honest AI co-pilot sections.** Lessons show how to use AI for the task, give example prompts,
   and show where AI gets it wrong and how to check it.
9. **Skip what you know.** A diagnostic quiz with clear skip rules respects learners' time.
10. **Learning that sticks.** Spaced-review quiz questions, a teach-back prompt ("explain this to a
    friend in 3 sentences") and a cheat sheet at the end of each module.
11. **Open and versioned.** CC BY-SA licence, a public changelog, errata through GitHub issues, and
    Markdown source that publishes to web, PDF, slides or email.
12. **Written for real people.** Personas guide every example. Plain language, a glossary, an
    accessibility checklist, and examples that work outside the US (₹ and $, Indian and global tools).

---

## 4. Checklist before a course goes live
- [ ] Every required section of the outline template is filled
- [ ] Each non-negotiable has taught / reinforced / assessed entries
- [ ] Lesson 1 gives a visible win in under 30 min
- [ ] A free path exists for every tool
- [ ] Every lesson has troubleshooting, an exercise, a quiz and a "verified on" stamp
- [ ] Each module has a capstone, a cheat sheet and at least one break-it lab
- [ ] Diagnostic quiz written with skip rules
- [ ] Glossary covers every term used without explanation
- [ ] Accessibility checklist passed (alt text, headings, contrast, captions)
- [ ] Feedback survey and errata link in place
- [ ] Changelog entry and licence line added
