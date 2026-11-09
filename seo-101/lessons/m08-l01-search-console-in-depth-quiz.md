# M08.L01 Quiz — Search Console in Depth: Every Report, Links and Crawl Stats

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Search Console Help (Reports at a glance, Links, Crawl Stats, annotations, branded filter, Insights, generative AI report) and Search Central blog posts from 2025–26.

### Q1. If you only check Search Console now and then, what does Google say to look at first? *(O1 · recall)*
- a) The Achievements report, to see which milestones you've reached
- b) The Links report, to count every site that links to your pages
- c) Manual actions and security issues, from the Overview page
- d) Crawl stats, to fix every 404 response that Googlebot recorded

**Answer:** c
**Explanation:** "If only checking in periodically, check for manual actions or security issues." Both can hurt a whole site, and both show on the Overview.
**Hint:** The warning lights.

### Q2. What does Google say about the Links report? *(O3 · recall)*
- a) It shows a sample of links, not every link to your site
- b) It lists every link, and marks which ones are nofollow
- c) It shows only links from sites with high authority scores
- d) It updates in real time whenever a new link is published

**Answer:** a
**Explanation:** "This report isn't a comprehensive list of every link on your site. It shows a sample". It also "doesn't specify if a link is marked as nofollow".
**Hint:** Census or sample?

### Q3. When do Search Console annotations not show on the chart? *(O2 · recall)*
- a) When the chart uses the weekly view rather than the daily one
- b) When the annotation is more than 30 days old on the chart
- c) When another user in the property has filtered by country
- d) In comparison mode or the 24-hour view, by Google's design

**Answer:** d
**Explanation:** Annotations "won't show up in comparison mode or 24-hour views". They're deleted only after 500 days.
**Hint:** Think about when two lines are drawn.

### Q4. Kavya's site has 40 pages. Crawl stats shows 120 requests that returned 404. What should she do? *(O3 · scenario)*
- a) Redirect all 120 URLs to the home page so the 404s disappear
- b) Check Host status, and that her own links don't point to 404s
- c) Ask Google to stop crawling the site until all 404s are fixed
- d) Delete the property and create a new one to reset the counts

**Answer:** b
**Explanation:** Google says sites under about a thousand pages "should not need to use this report or worry about this level of crawling detail", and that it's "not possible, worthwhile, or even desirable to fix all 404 errors". Host status matters; 404s for removed pages are normal.
**Hint:** Small site, big report.

### Q5. Nila doesn't see the branded queries filter. How can she still split branded from non-branded clicks? *(O2 · scenario)*
- a) Add a Query filter with a custom regex for her brand and its misspellings
- b) Ask Google to enable the branded filter for her site through the forum
- c) Count branded queries by hand, one row at a time, in the Pages tab
- d) Use the Links report, which shows which visitors searched for her brand

**Answer:** a
**Explanation:** The branded filter isn't available for sub-properties or "sites with a low number of impressions". A regex Query filter (Lesson 3.5) is a good fallback, though it won't match Google's AI-based filter exactly.
**Hint:** Lesson 3.5's filters.

### Q6. Tomás compares Mondays with Sundays and panics at the dips. What does Google suggest? *(O2 · scenario)*
- a) Use the 24-hour view, which shows the most accurate daily totals
- b) Ignore the Performance report and use the Links report instead
- c) Switch to the weekly or monthly view to avoid weekday mismatches
- d) Add an annotation every Sunday so the dips are hidden from view

**Answer:** c
**Explanation:** Weekly or monthly views let you "compare performance between two periods without getting distracted by day-of-the-week mismatches".
**Hint:** Zoom out.

### Q7. Spot the error. Amara tells a client: "The branded filter says 300 of your clicks are branded, so that's exactly how many people searched your name." What's wrong? *(O2 · spot-the-error)*
- a) Nothing; the branded filter counts every branded search exactly
- b) The filter is AI-assisted and may mislabel some queries
- c) Branded clicks are counted in the Links report, not Performance
- d) The branded filter only counts searches made on mobile phones

**Answer:** b
**Explanation:** It's "determined by an internal, AI-assisted system", and "Some queries might be incorrectly identified as branded or non-branded." Treat it as a good estimate, not an exact count.
**Hint:** Who decides what's branded?

### Q8. Spot the error. *(review: m06-l06)* Tomás reads his Page indexing report and says: "42 pages are not indexed, so 42 things are broken." What's wrong?
- a) Nothing; every page that isn't indexed is an error that must be fixed
- b) The report only shows pages that Google indexed during the last day
- c) Not-indexed pages can only be fixed with the Removals tool first
- d) "Not indexed is not necessarily bad"; many reasons are intended

**Answer:** d
**Explanation:** Many reasons are intended: redirects, canonical alternates, deliberate `noindex` and deleted pages. Sort each reason into intended or fix (Lesson 6.6).
**Hint:** Read the reasons.
