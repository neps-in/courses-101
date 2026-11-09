# M14.L06 Quiz — Diagnosing a Traffic Drop

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-10 against Google's *Debugging drops in Google Search traffic*, Search Console Help *Data anomalies*, and the Status Dashboard ranking history.

### Q1. What's the first question in the course's traffic-drop order? *(O1 · recall)*
- a) Which Google update caused this drop in traffic?
- b) Is the drop real, or a reporting issue?
- c) Which competitor has overtaken the site lately?
- d) Which pages should be rewritten or deleted first?

**Answer:** b
**Explanation:** Real → normal → technical or security → manual action → update. Google's page says to check the Data anomalies page first, because "The drop might be related to a change in the data processing or a logging error."
**Hint:** Check the thermometer before the patient.

### Q2. Which date range does Google suggest for spotting a yearly pattern in the Performance report? *(O2 · recall)*
- a) Last 7 days
- b) Last 28 days
- c) Last 3 months
- d) Last 16 months

**Answer:** d
**Explanation:** Google: select "Last 16 months" to "make sure it's not a drop that happens every year due to a festivity or a trend." Shorter ranges can't show last year.
**Hint:** The longest range Search Console offers.

### Q3. Why does a misplaced `noindex` usually cause a slow drop rather than an instant one? *(O2 · recall)*
- a) It takes effect only as Google recrawls each page
- b) Google waits 30 days before applying any noindex tag
- c) `noindex` only affects images, which load more slowly
- d) Search Console reports noindex only once a month

**Answer:** a
**Explanation:** A misplaced noindex "would depend on Google crawling the page, meaning there would be a slower drop in traffic". Pages fall out one by one as they're recrawled.
**Hint:** Google has to see the tag first.

### Q4. Tomás's impressions dropped and average position improved in late April 2026, but clicks stayed flat. What's the most likely explanation? *(O1 · scenario)*
- a) A manual action on part of his shop
- b) A seasonal dip in hardware searches
- c) Search Console's impressions logging fix
- d) A stray `noindex` from a plugin update

**Answer:** c
**Explanation:** A logging error affected impressions "from May 13, 2025 until April 27, 2026"; "Only impressions and related metrics - CTR and average position - were affected; clicks were not affected". Real problems would also cut clicks.
**Hint:** Clicks didn't move.

### Q5. Kavya's GA4 organic sessions fell 45% overnight, but Search Console clicks are flat. What should she check first? *(O1 · scenario)*
- a) The Status Dashboard for a core update
- b) Her GA4 tag and consent banner setup
- c) The Manual actions report in Search Console
- d) Google Trends for seasonal yoga searches

**Answer:** b
**Explanation:** If Google still sends the same clicks but GA4 records fewer sessions, the problem is tracking (Module 8), not rankings. An update, penalty or season would reduce clicks too.
**Hint:** Which number stayed the same?

### Q6. Nila's clicks fell 270 a week. Cold brew queries lost 90 (the same dip as last year) and one listicle lost 165 after the May core update. What's the best finding? *(O3 · scenario)*
- a) The core update caused the whole drop, so rewrite every post
- b) It's all seasonal, so nothing needs to be checked or done
- c) The site has a manual action that affects every page
- d) Split it: a third seasonal, 60% one listicle after the update

**Answer:** d
**Explanation:** Mixed drops need attribution. Seasonality needs no action; the listicle had a large drop, so self-assess and improve it after the update finished, with one annotated change.
**Hint:** Give each slice its own cause.

### Q7. Spot the error. A report says: "Clicks fell on 27 March 2026. We rewrote 30 pages, changed the theme and removed 40 old posts the same day. Traffic recovered in May, so the rewrites worked." What's wrong? *(O3 · spot the error)*
- a) Nothing; fast action is what Google recommends after a drop
- b) Many changes at once, mid-update, so no cause can be shown
- c) Only that old posts should have been redirected, not deleted
- d) The theme should have been changed first, then the content

**Answer:** b
**Explanation:** The March 2026 core update ran 27 March – 8 April. Changing many things at once mid-rollout means no one can tell what (if anything) helped. Rankings can also move "back up in position, without you needing to do anything".
**Hint:** Three changes, one update, zero proof.

### Q8. Spot the error. A consultant says: "The May 2026 core update started on 21 May, so analyse Search Console on 22 May and fix the losers." What's wrong? *(review: m14-l03 · spot the error)*
- a) Core updates only affect sites with manual actions
- b) It should be analysed only after the next core update
- c) Wait until it's complete, plus a week, before analysing
- d) Search Console doesn't show data during core updates

**Answer:** c
**Explanation:** Google: confirm the update "has finished rolling out", then wait "at least a full week after a core update completes before analyzing your site in Search Console." The May 2026 update finished on 2 June.
**Hint:** Complete, then one more week.
