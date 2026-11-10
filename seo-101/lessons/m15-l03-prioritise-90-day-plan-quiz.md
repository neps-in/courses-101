# M15.L03 Quiz — Prioritising Findings and Writing the 90-Day Plan

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-11 against Google's SEO Starter Guide (2025-12-10) and *Debugging drops in Google Search traffic* (2025-12-10). Scoring and plan shape are course rules.

### Q1. Which finding is "blocking" and skips the scoring? *(O1 · recall)*
- a) Category titles that duplicate each other
- b) A booking page that sits five clicks deep
- c) A few links from low-quality directories
- d) A `noindex` tag on the whole category template

**Answer:** d
**Explanation:** Blocking means key pages can't be indexed or trusted. A template `noindex` removes every category page from the index. The others are real findings, but they get scored.
**Hint:** Can the pages be shown at all?

### Q2. In the audit version of the score, what earns Chance 3? *(O1 · recall)*
- a) A broken Google requirement, shown with evidence
- b) The crawler labels the issue "critical" in red
- c) The fix takes only a few minutes to make
- d) The affected pages earn most of the site's sales

**Answer:** a
**Explanation:** Chance is confidence the fix will help. A broken Google requirement with evidence is 3; a documented best practice is 2; a tool warning alone is 1. Option c is Effort and option d is Value.
**Hint:** Confidence comes from Google's own guidance.

### Q3. How long does Google suggest waiting before judging whether a change helped? *(O3 · recall)*
- a) About 24 hours, once the page is recrawled
- b) Exactly 90 days, the length of the plan
- c) A few weeks, though some changes take months
- d) Until the next core update has finished

**Answer:** c
**Explanation:** "In general, you likely want to wait a few weeks to assess whether your work had beneficial effects", and "Some changes might take effect in a few hours, others could take several months." The course sets after-checks about four weeks out.
**Hint:** Weeks, not days.

### Q4. A crawl shows 24 category URLs with `noindex`, 160 product images without alt text and 9 scattered 404s. How many findings is that? *(O2 · scenario)*
- a) 193, one per affected URL in the crawl
- b) Three: one blocking, one template, one page-level
- c) One, because they all come from the same crawl
- d) None until a paid tool confirms them

**Answer:** b
**Explanation:** Group by cause. The `noindex` is one blocking template finding, the alt text is one product-template finding (People), and the 9 404s are one page-level finding listing the 9 URLs.
**Hint:** Count causes, not rows.

### Q5. Amara plans new product titles and smaller images on the same template in the same week. What's the risk? *(O3 · scenario)*
- a) Google penalises sites that change two things in a week
- b) The two changes will cancel each other out in Search
- c) Titles must always be changed before any images
- d) If clicks change, she can't tell which fix caused it

**Answer:** d
**Explanation:** Space out changes to the same pages and annotate each, so the after-check can be linked to one fix. There's no penalty for changing two things; it's about measurement.
**Hint:** Which one worked?

### Q6. Tomás's developer has about 6 hours a month. What does the lesson advise for Days 1–30? *(O3 · scenario)*
- a) Blocking items, then quick wins that fit his hours
- b) Every finding scoring 5 or more, to show progress
- c) The hardest jobs first, while there's momentum
- d) Nothing until all 90 days are fully planned

**Answer:** a
**Explanation:** Blocking items go first, then the highest totals that realistically fit the time. An overloaded block doesn't get finished and pushes everything back.
**Hint:** Realistic beats ambitious.

### Q7. Spot the error. "We scored the hacked-content finding: Value 3, Chance 3, Effort 1 = 7, so it's in Days 31–60." What's wrong? *(O1 · spot the error)*
- a) Effort should be 3, making the total 9
- b) Hacked content is a non-issue for ranking
- c) It's blocking: no score, Days 1–30
- d) Security findings belong in a separate audit

**Answer:** c
**Explanation:** A hacked site can't be trusted and puts visitors at risk. It goes straight into Days 1–30, without a score. Scoring it let it slip a month.
**Hint:** Triage, not a queue number.

### Q8. Spot the error. "Our audit lists 'Meta keywords missing' as finding #1 because the tool flagged it on every page." What's wrong? *(review: m15-l02 · spot the error)*
- a) It should be finding #2, after word count
- b) It should be split into one row for each page
- c) Meta keywords only matter on the home page
- d) Google ignores the tag; drop it as a non-issue

**Answer:** d
**Explanation:** "Google Search doesn't use the keywords meta tag." It's on the Starter Guide's "shouldn't focus on" list, so it goes on the won't-do list, not at the top.
**Hint:** A tag Google ignores.
