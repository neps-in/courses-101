# M08.L05 Quiz — A Data Studio SEO Dashboard

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Data Studio documentation (welcome, release notes, Search Console and Google Analytics connectors, data freshness, Pro, comparison metrics) and Google Search Central's GA and Search Console guide.

### Q1. What is Data Studio's relationship to Looker Studio? *(O1 · recall)*
- a) Data Studio is a paid add-on that sits on top of Looker Studio
- b) They're two separate tools; Looker Studio was discontinued
- c) Looker Studio is the newer name; Data Studio is the old one
- d) It's the same tool, renamed back to Data Studio in April 2026

**Answer:** d
**Explanation:** "In April 2026, the Looker Studio product name returned to its original name: Data Studio." The old address redirects to the new one.
**Hint:** Same tool, old name back.

### Q2. In the Search Console connector, what's true about Site Impression and URL Impression? *(O1 · recall)*
- a) Each data source uses one; create two to show both
- b) Both are combined automatically in every data source
- c) URL Impression is only available in Data Studio Pro
- d) Site Impression shows pages; URL Impression shows sites

**Answer:** a
**Explanation:** "a single data source can only use one of these." Google's template uses URL Impression for page-level data.
**Hint:** One table per source.

### Q3. How often does Data Studio refresh data from Google products like Search Console, by default? *(O1 · recall)*
- a) Every minute, so the dashboard is always live
- b) About every 12 hours, and you can refresh it by hand
- c) Once a month, on the first day of each new month
- d) Only when the report's owner logs in to Data Studio

**Answer:** b
**Explanation:** Google products "refresh every 12 hours" by default (GA4 can be set to 1 or 4 hours), and "Report editors and viewers can also manually refresh the data in a report."
**Hint:** Twice a day.

### Q4. Amara's client's dashboard shows GA4 sessions from all channels next to Search Console clicks. What should she change? *(O2 · scenario)*
- a) Remove the Search Console scorecards and keep only GA4
- b) Add average position so the client can compare rankings
- c) Filter GA4 to google / organic, matching Search Console
- d) Switch the Search Console data source to Site Impression

**Answer:** c
**Explanation:** Google's template data "is already filtered to include only sessions from Session source = google and Session medium = organic", and Google says to "pick the same filter for both data sources".
**Hint:** Like for like.

### Q5. Nila's traffic jumped on 14 October. What part of her dashboard helps explain it? *(O3 · scenario)*
- a) The Changes log table, which lists dated changes to the site
- b) The date range control, which hides days with unusual traffic
- c) The impressions scorecard, which shows the cause of every jump
- d) Data Studio's built-in annotations, which Google adds itself

**Answer:** a
**Explanation:** Data Studio's docs show no native annotations feature, so a Changes log sheet (date, change, page) shown as a table is the workaround *(observed practice)*.
**Hint:** What changed that day?

### Q6. Kavya's GA4 sessions in a stacked bar chart are higher than in GA4. The chart uses ISO Year ISO Week. What should she do? *(O3 · scenario)*
- a) Trust the dashboard, because Data Studio is more accurate
- b) Upgrade to Data Studio Pro, which fixes double-counting
- c) Delete the GA4 data source and connect it all over again
- d) Switch to a standard date dimension like Date or Month

**Answer:** d
**Explanation:** It's a documented issue: sessions can be "double-counted" in stacked bar charts with ISO weeks. The workaround is to "switch to standard date dimensions (e.g., Date or Month)".
**Hint:** A known bug, a known fix.

### Q7. Spot the error. Tomás tells his team: "The dashboard is the source of truth now. We don't need to check it against Search Console or GA4." What's wrong? *(O3 · spot-the-error)*
- a) Nothing; Data Studio numbers always match the source tools
- b) Data Studio only works if you check it in Search Console daily
- c) Dashboards can lag or use different tables and filters; check them
- d) GA4 deletes data after it's been shown in a Data Studio report

**Answer:** c
**Explanation:** Data is cached (about 12 hours), Site and URL tables differ, and filters can drift. Check every number against its source once after building and after every change.
**Hint:** Built on top, not instead.

### Q8. Spot the error. *(review: m08-l04)* Nila's dashboard compares Search Console clicks for "last 28 days" with GA4 sessions for "last calendar month" and reports a 30% drop. What's wrong?
- a) Nothing; any two date ranges of about a month are fine to compare
- b) The dates differ, so the "drop" may not be real at all
- c) GA4 always reports exactly 30% fewer visits than Search Console
- d) Search Console data can only be compared with a 7-day range

**Answer:** b
**Explanation:** A fair comparison uses the same dates and the same filters in both tools (Lesson 8.4). Mismatched ranges can create a fake drop.
**Hint:** Same dates first.
