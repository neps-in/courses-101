# M01.L04 Quiz — First-day settings: permalinks, reading and discussion

> 7 questions · 3 recall, 3 scenario, 1 spot-the-error · includes 1 spaced-review question from M01.L03.
> Settings labels and core defaults checked against WordPress 7.0 and 7.1 code on 2026-11-01.

### Q1. Which permalink structure does this course recommend for most creator sites?
- a) Plain (`/?p=123`)
- b) Day and name (`/2026/10/29/easy-paella/`)
- c) Post name (`/easy-paella/`)
- d) Numeric (`/archives/123`)

**Answer:** c
**Explanation:** Post name gives short, readable URLs that don't make evergreen content look dated, in line with Google's advice to use readable words. Plain and Numeric use meaningless IDs; Day and name suits news sites where the date matters.
**Hint:** Which option contains only words that describe the post?

### Q2. Why should you choose a city (e.g. "Kolkata" or "London") rather than a "UTC+…" offset for your timezone?
- a) Cities follow daylight-saving changes automatically; offsets don't
- b) Cities make every page on the site load noticeably faster
- c) Fixed UTC offsets are no longer allowed in WordPress 7.x at all
- d) Cities tell Google where you are, which improves your local rankings

**Answer:** a
**Explanation:** A city timezone knows its local daylight-saving rules, so scheduled posts keep publishing at the right local time all year. A fixed offset stays the same when clocks change. It has no effect on speed or rankings, and offsets are still allowed.
**Hint:** What happens to clocks twice a year in many countries?

### Q3. On a live site, what does ticking **Settings → Reading → Discourage search engines from indexing this site** do?
- a) Hides the whole site from every visitor until you untick the box again
- b) Deletes the site's XML sitemap permanently
- c) Blocks spam comments from search engine bots
- d) Asks search engines not to index the site, so it may not appear

**Answer:** d
**Explanation:** It sends a request (not a guarantee) that search engines don't index the site. Visitors can still see it, the sitemap isn't deleted, and it has nothing to do with comments. Leaving it ticked at launch is a classic reason a new site never appears in Google.
**Hint:** The clue is in the words "search engines".

### Q4. Amara has published 60 posts with Day and name URLs and wants to switch to Post name. What's the safest approach?
- a) Switch now; WordPress always redirects every old URL perfectly
- b) Back up, list key URLs, switch, then check each old URL redirects
- c) Never switch, under any circumstances, once posts are published
- d) Delete all 60 posts and republish them one by one under the new structure

**Answer:** b
**Explanation:** WordPress tries to redirect old URLs after a structure change, but it isn't guaranteed for every post and link. A backup, a list of key URLs and checking redirects afterwards keeps links and search equity safe. Switching is possible; deleting and republishing would lose everything.
**Hint:** Plan, change, then verify.

### Q5. Ben's site is about to launch. He doesn't have time to moderate comments on old posts and gets lots of link spam. Which Discussion settings fit best?
- a) Moderation on, auto-close old posts after 30–90 days, pingbacks off
- b) Allow pingbacks and trackbacks so other blogs can vouch for him
- c) Tick "Anyone can register" so spammers have to sign up first
- d) Change the permalink structure so that spam bots can no longer find old posts

**Answer:** a
**Explanation:** Moderation catches spam before it's public, auto-closing limits spam on posts he can't watch, and pingbacks/trackbacks are mostly spam today. Open registration adds spam accounts, and permalinks don't affect comments.
**Hint:** Which option reduces both spam and moderation time?

### Q6. Spot the error: Lina's day-one checklist says:
> 1. Settings → General: title, tagline, city timezone.
> 2. Delete the sample post and Sample Page; keep the Privacy Policy draft.
> 3. Publish my first five posts.
> 4. Settings → Permalinks: switch to Post name.

Which step is in the wrong place?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Publishing before setting permalinks means those five posts change address when she switches structures. Set permalinks (Step 4) before publishing any real posts, so Step 3 belongs at the end.
**Hint:** Which step creates URLs that the next step would change?

### Q7. (review: m01-l03) After installing WordPress, where do you check that both the WordPress Address and the Site Address use `https://`?
- a) Settings → Permalinks
- b) Settings → Reading
- c) Tools → Export
- d) Settings → General

**Answer:** d
**Explanation:** Both addresses are in **Settings → General**, the same screen as the title, tagline and timezone you set in this lesson. Permalinks controls URL patterns after the domain, Reading controls the homepage and feeds, and Export downloads content.
**Hint:** It's the first Settings screen you visited in this lesson.
