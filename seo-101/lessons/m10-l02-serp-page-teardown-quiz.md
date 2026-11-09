# M10.L02 Quiz — Reading the SERP and the Pages That Win

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google's spam policies and helpful content guidance, PageSpeed Insights "About", CrUX methodology, Rich Results Test help, Wayback Machine help and Screaming Frog's docs.

### Q1. What period does PageSpeed Insights' real-user (field) data cover? *(O2 · recall)*
- a) The single test run you just started in your browser
- b) The previous 28-day collection period from CrUX
- c) Every visit since the website was first published
- d) The last 24 hours of visits from Google's own crawler

**Answer:** b
**Explanation:** PSI reports real users' experiences "over the previous 28-day collection period", from the Chrome UX Report.
**Hint:** About a month.

### Q2. According to Google's spam policy, which of these counts as scraping? *(O3 · recall)*
- a) Reading a rival's guide to see which questions it answers
- b) Recording the page types in the top five search results
- c) Running a rival's page through the Rich Results Test
- d) Copying a rival's page and swapping in synonyms

**Answer:** d
**Explanation:** "Copying content from other sites, modify it only slightly (for example, by substituting synonyms or using automated techniques ), and republish it" is abusive scraping.
**Hint:** Small changes don't make it yours.

### Q3. When can't the Rich Results Test check a page? *(O2 · recall)*
- a) When it's blocked by robots.txt or noindex
- b) When the page belongs to a competitor's site
- c) When the page has fewer than 500 words of text
- d) When the page loads in more than three seconds

**Answer:** a
**Explanation:** If Google is prevented from crawling it "by a robots.txt rule or noindex directive", "the page cannot be tested with this tool". Any public page, including a competitor's, can be tested.
**Hint:** Can Google crawl it?

### Q4. Nila's page and her rival's both show no field data in PSI. What should she compare? *(O2 · scenario)*
- a) Her lab score with the rival's field score
- b) Nothing, because the test has clearly failed
- c) Lab data with lab data, and say it's lab data
- d) Her Search Console clicks with their lab score

**Answer:** c
**Explanation:** Small sites often fall below CrUX's undisclosed popularity threshold. Compare like with like: lab vs lab.
**Hint:** Like with like.

### Q5. Every top result for Kavya's search is a numbered guide with photos. What's the best response? *(O1 · scenario)*
- a) Write numbered steps with her own class photos
- b) Copy the #1 guide's steps and photos with credit
- c) Ignore the format and write one long paragraph
- d) Run the #1 guide through an AI paraphrasing tool

**Answer:** a
**Explanation:** The results show the format searchers want. Match it with her own content. "Attribution or giving credit to other sources doesn't replace the need for original effort."
**Hint:** Same shape, her own substance.

### Q6. Amara wants to crawl a competitor with Screaming Frog's free version. What's the ethical approach? *(O3 · scenario)*
- a) Ignore robots.txt so that the crawl covers every page
- b) Keep it small, respect robots.txt and check their terms
- c) Run the crawl at night so the site owner won't notice
- d) Use several computers to get past the 500-URL limit

**Answer:** b
**Explanation:** It respects robots.txt by default; ignoring it is "down to the responsibility of the user". The free version can't slow down, so keep crawls small, or skip them.
**Hint:** Light touch.

### Q7. Spot the error. Tomás's teardown says: "Their Wayback Machine history is empty, so the page must be brand new." What's wrong? *(O2 · spot-the-error)*
- a) Nothing; the Wayback Machine archives every page
- b) The Wayback Machine only stores pages from news sites
- c) Empty history means the page was penalised by Google
- d) Pages can be missing if blocked, private or excluded

**Answer:** d
**Explanation:** Pages may not be archived if "blocked by robots.txt", password-protected or excluded by the owner. Empty history doesn't prove the page is new.
**Hint:** Gaps happen.

### Q8. Spot the error. *(review: m10-l01)* Nila's teardown starts: "`site:brewathome.example` shows 312 results, so they have exactly 312 pages, 3× ours." What's wrong?
- a) `site:` only counts the pages that have backlinks
- b) `site:` was retired by Google in September 2024
- c) `site:` is a sample: "not always exhaustive"
- d) `site:` only counts pages updated this year

**Answer:** c
**Explanation:** "The list of URLs returned is not always exhaustive." Use "roughly", never exact counts or ratios (Lesson 10.1). It was `cache:` that was retired.
**Hint:** A sample, not a count.
