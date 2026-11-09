# M08.L06 Quiz — KPIs and an Honest Monthly SEO Report

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Search Central (debugging traffic drops; GA and Search Console guide), Search Console Help (Performance report, data aggregation) and the Search Central blog (branded filter; weekly and monthly views).

### Q1. According to Google, what is "ultimately the measure of success" for your site in Search? *(O1 · recall)*
- a) Your average position across all of the site's queries
- b) The number of keywords you rank for in the top ten
- c) Impressions and clicks, rather than absolute position
- d) The share of your traffic that comes from organic search

**Answer:** c
**Explanation:** "you shouldn't focus too much on your absolute position. Impressions and clicks are ultimately the measure of success for your site."
**Hint:** Not where you rank.

### Q2. Why is non-branded clicks usually a better SEO growth KPI than total clicks? *(O1 · recall)*
- a) Branded clicks are not counted in Search Console at all
- b) Non-branded searches reach people who don't know you yet
- c) Google ranks non-branded pages higher than branded ones
- d) Non-branded clicks are always more than branded clicks

**Answer:** b
**Explanation:** Branded queries get "higher click-through rates, whereas non-branded queries offer organic growth". Branded growth often comes from other marketing.
**Hint:** New customers.

### Q3. How does Google suggest you find the pages that lost the most traffic? *(O2 · recall)*
- a) Compare two periods and sort pages by clicks difference
- b) Look at the average position chart for the whole site
- c) Check the Links report for pages with the fewest links
- d) Sort GA4 pages by engagement rate from low to high

**Answer:** a
**Explanation:** Google recommends "comparing the pages that lost a significant amount of clicks. Select Clicks Difference to order it based on pages that lost the most traffic."
**Hint:** Compare, then sort.

### Q4. Kavya's yoga studio always gets more searches in January. Her clicks rose 60% from December to January. How should she report it? *(O2 · scenario)*
- a) As a 60% SEO win, since clicks are the main measure
- b) As a loss, because December was the stronger month
- c) Leave it out of the report, as seasonal data is unusable
- d) Compare January with last January to remove seasonality

**Answer:** d
**Explanation:** Google suggests looking at a longer range to "make sure it's not a drop that happens every year due to a festivity or a trend". The same applies to rises: compare year over year.
**Hint:** Same month, last year.

### Q5. Tomás's average position got worse this month, but clicks to his key product pages rose. What's the likely explanation? *(O1 · scenario)*
- a) Search Console made an error, so both numbers are wrong
- b) His pages now show for many new searches at low positions
- c) Google penalised the site, but clicks haven't fallen yet
- d) Average position only counts searches made on mobile

**Answer:** b
**Explanation:** "A link must get an impression for its position to be recorded." New impressions at deep positions pull the average down, even when key pages improve. Report clicks per page instead.
**Hint:** What pulls an average down?

### Q6. A page lost 80 clicks, and nothing in Nila's changes log explains it. What should her report say? *(O3 · scenario)*
- a) "Cause unknown; checking seasonality, updates and tracking"
- b) "Google's algorithm penalised the page this month"
- c) Nothing; leave the page out so the report stays positive
- d) "A competitor copied the page," as that's the usual cause

**Answer:** a
**Explanation:** An honest report says "unknown" rather than inventing a cause, and adds a next action with a date. Check seasonality, Google updates and the tag health check (Lesson 8.4).
**Hint:** Honest beats confident.

### Q7. Spot the error. Amara's report headline reads: "Great month! Average position improved from 18.4 to 16.9." What's wrong? *(O3 · spot-the-error)*
- a) Nothing; a better average position always means more sales
- b) The numbers should be rounded to whole positions first
- c) Position is misleading; lead with clicks and key events
- d) Average position should be reported in GA4, not Search Console

**Answer:** c
**Explanation:** Google calls position "a complex metric that can be misleading". The headline should say whether SEO helped the goal, using KPIs like non-branded clicks and organic key events.
**Hint:** Does it tell the client if SEO worked?

### Q8. Spot the error. *(review: m08-l05)* Tomás shares his Data Studio dashboard with his whole team, giving everyone edit access "so they can look at it". What's wrong?
- a) Nothing; edit access is needed just to view a dashboard
- b) Data Studio dashboards can't be shared with other people
- c) Viewers with edit access will see different numbers to him
- d) View access is enough; edit access risks broken filters

**Answer:** d
**Explanation:** Lesson 8.5: share view-only. Someone with edit access can move a filter or date range by accident, and the numbers silently change.
**Hint:** Look, don't touch.
