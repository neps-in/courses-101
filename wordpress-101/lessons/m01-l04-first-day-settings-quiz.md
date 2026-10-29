# M01.L04 Quiz — First-day settings: permalinks, reading and discussion

> 7 questions · 3 recall, 3 scenario, 1 spot-the-error · includes 1 spaced-review question from M01.L03.
> Settings labels and core defaults checked against WordPress 7.1 on 2026-10-29.

### Q1. Which permalink structure does this course recommend for most creator sites?
- a) Plain (`/?p=123`)
- b) Day and name (`/2026/10/29/easy-paella/`)
- c) Post name (`/easy-paella/`)
- d) Numeric (`/archives/123`)

**Answer:** c
**Explanation:** Post name gives short, readable URLs that don't make evergreen content look dated, in line with Google's advice to use readable words. Plain and Numeric use meaningless IDs; Day and name suits news sites where the date matters.
**Hint:** Which option contains only words that describe the post?

### Q2. Why should you choose a city (e.g. "Kolkata" or "London") rather than a "UTC+…" offset for your timezone?
- a) Cities make the site load faster
- b) Cities follow daylight-saving changes automatically; fixed offsets don't
- c) Offsets are not allowed in WordPress 7.x
- d) Cities improve search rankings

**Answer:** b
**Explanation:** A city timezone knows its local daylight-saving rules, so scheduled posts keep publishing at the right local time all year. A fixed offset stays the same when clocks change. It has no effect on speed or rankings, and offsets are still allowed.
**Hint:** What happens to clocks twice a year in many countries?

### Q3. On a live site, what does ticking **Settings → Reading → Discourage search engines from indexing this site** do?
- a) Hides the site from all visitors
- b) Asks search engines not to index the site, which can keep it out of search results
- c) Deletes the XML sitemap permanently
- d) Blocks spam comments

**Answer:** b
**Explanation:** It sends a request (not a guarantee) that search engines don't index the site. Visitors can still see it, the sitemap isn't deleted, and it has nothing to do with comments. Leaving it ticked at launch is a classic reason a new site never appears in Google.
**Hint:** The clue is in the words "search engines".

### Q4. Amara has published 60 posts with Day and name URLs and wants to switch to Post name. What's the safest approach?
- a) Switch now; WordPress always redirects every old URL perfectly
- b) Never switch under any circumstances
- c) Back up, list her most important URLs, switch, then check each old URL redirects and update links she controls
- d) Delete all 60 posts and republish them

**Answer:** c
**Explanation:** WordPress tries to redirect old URLs after a structure change, but it isn't guaranteed for every post and link. A backup, a list of key URLs and checking redirects afterwards keeps links and search equity safe. Switching is possible; deleting and republishing would lose everything.
**Hint:** Plan, change, then verify.

### Q5. Ben's site is about to launch. He doesn't have time to moderate comments on old posts and gets lots of link spam. Which Discussion settings fit best?
- a) Allow pingbacks and trackbacks, and turn off moderation
- b) Manual approval (or previously approved authors), automatically close comments on old posts after 30–90 days, and untick pingbacks and trackbacks
- c) Tick "Anyone can register" so spammers have to sign up
- d) Change the permalink structure

**Answer:** b
**Explanation:** Moderation catches spam before it's public, auto-closing limits spam on posts he can't watch, and pingbacks/trackbacks are mostly spam today. Open registration adds spam accounts, and permalinks don't affect comments.
**Hint:** Which option reduces both spam and moderation time?

### Q6. Spot the error: Lina's day-one checklist says:
> 1. Settings → General: title, tagline, city timezone.
> 2. Publish my first five posts.
> 3. Settings → Permalinks: switch to Post name.
> 4. Delete the sample post and Sample Page; keep the Privacy Policy draft.

Which step is in the wrong place?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** b
**Explanation:** Publishing before setting permalinks means those five posts change address when she switches structures. Set permalinks (Step 3) before publishing any real posts, so Step 2 belongs at the end.
**Hint:** Which step creates URLs that the next step would change?

### Q7. (review: m01-l03) After installing WordPress, where do you check that both the WordPress Address and the Site Address use `https://`?
- a) Settings → Permalinks
- b) Settings → General
- c) Settings → Reading
- d) Tools → Export

**Answer:** b
**Explanation:** Both addresses are in **Settings → General**, the same screen as the title, tagline and timezone you set in this lesson. Permalinks controls URL patterns after the domain, Reading controls the homepage and feeds, and Export downloads content.
**Hint:** It's the first Settings screen you visited in this lesson.
