# M15.L02 Quiz — Running the Audit in Order

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-11 against Google Search Essentials (2025-12-10), Technical requirements (2025-12-18), the SEO Starter Guide (2025-12-10) and *Do you need an SEO?* (2026-06-05).

### Q1. Which step comes first in the course's nine-step audit order? *(O1 · recall)*
- a) On-page and content
- b) Page experience and Core Web Vitals
- c) Links and anchor text
- d) Indexing

**Answer:** d
**Explanation:** Indexing first, then crawling and status. They match Google's technical requirements: if a page isn't eligible to be indexed, nothing later in the audit can help it. The order itself is a course rule; Google publishes none.
**Hint:** Can it be shown at all?

### Q2. Which of these is one of Google's three technical requirements? *(O1 · recall)*
- a) The page loads in under two seconds on mobile
- b) The page returns an HTTP 200 (success) status code
- c) The page has at least 300 words of content
- d) The page has valid structured data

**Answer:** b
**Explanation:** The three are: Googlebot isn't blocked; the page works (HTTP 200); the page has indexable content. Speed and structured data are best practices; word count isn't a requirement at all.
**Hint:** Blocked, works, content.

### Q3. Which tool flag does Google's SEO Starter Guide say not to focus on? *(O3 · recall)*
- a) Missing meta keywords tag
- b) Key pages with a `noindex` tag
- c) Redirect chains on internal links
- d) A robots.txt that blocks the shop

**Answer:** a
**Explanation:** "Google Search doesn't use the keywords meta tag." The other three can stop pages being crawled or indexed, so they're real findings, often blocking.
**Hint:** A tag Google ignores.

### Q4. A crawl shows "missing alt text" on 160 product pages and nowhere else. How should the audit record it? *(O3 · scenario)*
- a) As 160 separate rows, one per page
- b) Drop it; alt text isn't a ranking factor
- c) One product-template finding, labelled People
- d) As a blocking issue that goes above indexing

**Answer:** c
**Explanation:** The same symptom on one page type points to the template: one fix covers all 160. Missing alt text is an accessibility (People) problem (#3), so it stays in, without being treated as blocking.
**Hint:** One template, one fix.

### Q5. Kavya is sure her drop is a content problem and wants to start at step 4. What does the lesson advise? *(O1 · scenario)*
- a) Start at step 4, since she knows her own site best
- b) Run steps 1–2 first; they're quick when the site is fine
- c) Skip the audit and rewrite all posts straight away
- d) Run step 9 first, because E-E-A-T affects everything

**Answer:** b
**Explanation:** Steps 1–2 take minutes on a healthy small site, and if something is blocking, it explains more than content could. Skipping them is how Tomás's agency buried a `noindex` at row 187.
**Hint:** Quick to check, costly to skip.

### Q6. On path C, Amara needs evidence for step 7 (links). Which free tools fit? *(O2 · scenario)*
- a) A paid backlink tool's trial, logged in with the client's card
- b) Disavowing every link she doesn't recognise, then checking
- c) Asking Google support for the site's full link list
- d) Search Console's Links report and Ahrefs Free on the site

**Answer:** d
**Explanation:** Module 9's free tools: the Search Console Links report (read-only access is enough) and Ahrefs Free for a site you can verify. An audit records findings; it doesn't change anything, and disavowing is a fix, not a check.
**Hint:** Look, don't change.

### Q7. Spot the error. An audit row says: "Finding: low word count on blog posts. Evidence: tool score 42/100. Source: none." What's wrong? *(O3 · spot the error)*
- a) Only that the score should be out of 10, not 100
- b) Non-issue (no word count target) with no real source
- c) Nothing; tool scores are accepted evidence for Google
- d) It should be filed under step 1 instead of step 4

**Answer:** b
**Explanation:** Google: "there's no magical word count target". A tool score isn't Google's guidance, and Google tells owners to check tool audits "against official guidance from Google Search". Every finding needs a source.
**Hint:** Two problems: what and why.

### Q8. Spot the error. "Our audit baseline: clicks 1,240." Nothing else is recorded. What's missing? *(review: m15-l01 · spot the error)*
- a) Nothing; one headline number is enough for an audit baseline
- b) Only the competitor's click numbers for comparison
- c) Date range, filters, source, recording date, and site state
- d) A forecast of how many clicks the fixes will bring

**Answer:** c
**Explanation:** A baseline needs numbers with their date range, search type, filters and source, plus state (indexing, CWV, manual actions) and context, all dated. Otherwise it can't be reproduced or compared.
**Hint:** Could someone else measure it the same way?
