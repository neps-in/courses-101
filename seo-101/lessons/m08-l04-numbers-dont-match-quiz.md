# M08.L04 Quiz — Why the Numbers Don't Match (and How to Catch a Broken Tag)

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Search Central's GA and Search Console guide, Search Console Help on discrepancies, the GA4 troubleshooting guide, the Google tag install guide, Tag Assistant Help and Tag Manager Help.

### Q1. According to Google, what matters most when Search Console clicks and GA4 sessions differ? *(O1 · recall)*
- a) That the totals match within 5% every single day
- b) That GA4 is always higher, because it counts all URLs
- c) That the general trends follow the same pattern
- d) That Search Console is reset to your local time zone

**Answer:** c
**Explanation:** "Although the total counts don't match exactly, what's important is that the general trends have the same pattern."
**Hint:** Shape, not size.

### Q2. Which time zone does Search Console use for its data? *(O2 · recall)*
- a) Pacific Time, and you can't change it
- b) Your browser's time zone, set automatically
- c) The time zone you choose in GA4's settings
- d) Coordinated Universal Time (UTC), always

**Answer:** a
**Explanation:** "You can choose your timezone in Google Analytics, but you can't customize that in Search Console, where the default time zone is Pacific Time (PT)." That's why daily comparisons don't line up.
**Hint:** Google's home time.

### Q3. Which of these is one of Google's documented reasons that GA4 shows fewer visits than Search Console clicks? *(O1 · recall)*
- a) GA4 counts only visitors who are signed in to Google
- b) Visitors who opt out of tracking aren't counted by GA4
- c) Search Console counts each click twice to allow for errors
- d) GA4 ignores every visit made from a mobile phone or tablet

**Answer:** b
**Explanation:** "If your site is asking users to accept tracking, and users opt out, that can skew Google Analytics data." Missing tags, blockers, bots and PDFs are other documented reasons.
**Hint:** Who said no?

### Q4. Kavya's clicks-vs-sessions gap was 25% for months. The week she installed GTM, GA4 sessions jumped above clicks. What's the most likely cause? *(O3 · scenario)*
- a) Google started counting AI Mode clicks twice that same week
- b) The time zone in Search Console changed to match her own
- c) Her consent banner started blocking every visitor by default
- d) GA4 is now installed twice, by her plugin and by GTM

**Answer:** d
**Explanation:** A sudden jump after a tracking change points to a duplicate tag *(observed practice)*. Confirm with View Source, Tag Assistant ("Google tags found") or DevTools (two page views per load).
**Hint:** What changed that week?

### Q5. Tomás sees `collect` requests returning status 204 in DevTools, but GA4 Realtime stays empty. What should he check first? *(O3 · scenario)*
- a) The Measurement ID in the tag against Admin → Data streams
- b) Whether his robots.txt file blocks Google Analytics crawlers
- c) Whether Search Console has finished processing last month
- d) Whether the 204 status means GA4 rejected the visitor's data

**Answer:** a
**Explanation:** A 204 means the request arrived, not that the ID is right. Google: "Typos in the Measurement ID are one of the most common and easy-to-make setup mistakes".
**Hint:** Sent, but to whom?

### Q6. Nila wants to compare Search Console and GA4 fairly for her monthly report. Which set-up is best? *(O2 · scenario)*
- a) GSC last 28 days vs GA4 last calendar month, both unfiltered
- b) Daily numbers for one day, since days are the most precise
- c) Same weeks in both, same filters, GA4 limited to google / organic
- d) GSC impressions against GA4 total sessions from all channels

**Answer:** c
**Explanation:** Google calls clicks and sessions "the most comparable" pair, and says to "pick the same filter for both data sources". Weeks avoid time-zone shifts.
**Hint:** Like for like.

### Q7. Spot the error. Amara tells a client: "Our clicks-to-sessions gap is 30%, so the GA4 tag must be broken on 30% of pages." What's wrong? *(O1 · spot-the-error)*
- a) Nothing; every gap equals the share of pages missing the tag
- b) A steady gap has many normal causes, like consent and bots
- c) The gap should be measured in impressions, not in clicks
- d) GA4 tags can only break on the home page, not other pages

**Answer:** b
**Explanation:** Google lists many normal reasons (consent, blockers, time zones, canonical URLs, bots, PDFs). A steady gap is expected; a sudden change is the signal to check tags.
**Hint:** Normal causes first.

### Q8. Spot the error. *(review: m08-l03)* Tomás builds a GA4 event in GTM, sees it fire in Preview, and says "Done, it's live." What did he miss?
- a) He needs to wait 30 days for GTM to publish the change itself
- b) He must also paste the event code into every page by hand
- c) Preview only works on mobile, so desktop needs a new tag
- d) He has to Submit and publish a version before it's live

**Answer:** d
**Explanation:** Preview "is not visible to your regular website visitors". Changes go live only after **Submit → Publish and Create Version**; check **Versions** for a published date.
**Hint:** Tested isn't launched.
