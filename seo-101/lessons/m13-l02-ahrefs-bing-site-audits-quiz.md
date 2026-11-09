# M13.L02 Quiz — Second-Opinion Crawlers: Ahrefs Free Site Audit and Bing Site Scan

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against ahrefs.com/free, Ahrefs Site Audit, Ahrefs Academy, Ahrefs Help and Bing Webmaster blog posts (2020, 2025, 2026).

### Q1. Which pages use Ahrefs Site Audit crawl credits? *(O1 · recall)*
- a) Every URL, including images and external links
- b) Only internal HTML pages that return 200 OK
- c) Only pages that have errors or warnings on them
- d) Only pages listed in the XML sitemap file

**Answer:** b
**Explanation:** "Only internal HTML pages that return the 200 (OK) HTTP status code consume crawl credits." Redirects, errors, resources and external URLs don't.
**Hint:** Healthy internal pages.

### Q2. How does Bing describe Site Scan? *(O1 · recall)*
- a) A paid add-on for sites with over 10,000 pages
- b) A ranking tool that shows positions in Bing
- c) A backlink tool for checking competitors' links
- d) An on-demand audit that checks technical SEO issues

**Answer:** d
**Explanation:** "Site Scan is an on-demand site audit tool which crawls your site and checks for common technical SEO issues".
**Hint:** On demand.

### Q3. What does Ahrefs say about its issue classifications? *(O3 · recall)*
- a) Issues are not universal across all websites
- b) Every error must be fixed before any warning
- c) The health score matches Google's own view
- d) Notices can always be safely ignored

**Answer:** a
**Explanation:** "issues are not universal across all websites. For example, we classify orphan pages as errors, but this might not hold true for an ecommerce store that sells seasonal products".
**Hint:** Context matters.

### Q4. Nila's Ahrefs health score is 94, but her coffee-beans category is set to `noindex` (a notice). What should come first? *(O3 · scenario)*
- a) Celebrate the score and move on to new content
- b) Fix every warning in the order Ahrefs lists them
- c) Fix the `noindex` on the key category page first
- d) Run the audit again until the score reaches 100

**Answer:** c
**Explanation:** Bucket by real impact: a key page out of the index is "fix now", whatever its label. Scores are each tool's own weighting.
**Hint:** Impact, not labels.

### Q5. Screaming Frog free says Kavya's pages have no H1; Ahrefs says they do. What's the likely reason? *(O2 · scenario)*
- a) JavaScript adds the H1, and Ahrefs runs it
- b) Ahrefs invents H1s for pages without them
- c) Screaming Frog only checks H1s on mobile
- d) Kavya's H1s are in the meta description

**Answer:** a
**Explanation:** Ahrefs' Site Audit "Executes JavaScript"; Screaming Frog free reads raw HTML only. Confirm with View Source vs rendered HTML (Lesson 12.4).
**Hint:** Raw vs rendered.

### Q6. Amara wants to run Ahrefs Site Audit on a prospect's site before being hired. What's the problem? *(O1 · scenario)*
- a) Site Audit only works on sites in the US
- b) It's for verified sites, which needs owner consent
- c) It costs a fee for each site you audit with it
- d) Prospects' sites can only be audited in Bing

**Answer:** b
**Explanation:** Site Audit is "For verified websites". Verifying needs the owner's access and consent.
**Hint:** Whose site?

### Q7. Spot the error. An agency report says: "Bing found 40 duplicate titles; Ahrefs found 25. Ahrefs must be broken." What's wrong? *(O2 · spot-the-error)*
- a) Nothing; the tool with fewer results is broken
- b) Bing only counts titles on desktop pages
- c) Duplicate titles aren't a real SEO issue
- d) Each tool crawls and counts differently

**Answer:** d
**Explanation:** Crawls, rules and weights differ. Compare the URLs each tool lists and fix the template behind them.
**Hint:** Different rulers.

### Q8. Spot the error. *(review: m13-l01)* A note says: "Screaming Frog free saved yesterday's crawl, so we'll compare it with today's." What's wrong?
- a) Nothing; the free version saves every crawl
- b) Crawls can only be compared on Mondays
- c) Free can't save crawls; export before closing
- d) Comparisons need Bing Webmaster Tools

**Answer:** c
**Explanation:** "Crawls can be saved and opened in the SEO Spider with a licence." Free users export before closing.
**Hint:** Export first.
