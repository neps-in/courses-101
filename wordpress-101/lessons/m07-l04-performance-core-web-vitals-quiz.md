# M07.L04 Quiz — Performance: caching, CDN, lazy loading and Core Web Vitals

> 8 questions · 3 recall, 3 scenario, 1 spot-the-error, 1 spaced-review question from M07.L03.
> Checked against web.dev, Lighthouse 13 documentation, WordPress 7.1.4 and WP Super Cache 3.1.4 on 2026-11-01.

### Q1. Which pairing of Core Web Vital and "good" threshold is correct?
- a) LCP ≤ 4 seconds
- b) INP ≤ 200 milliseconds
- c) CLS ≤ 0.25
- d) FID ≤ 100 milliseconds

**Answer:** b
**Explanation:** Good is LCP ≤ 2.5 s, INP ≤ 200 ms and CLS ≤ 0.1. The other numbers in a) and c) are the "poor" boundaries. FID was replaced by INP in March 2024.
**Hint:** Two of the wrong options are where "poor" starts.

### Q2. In a PageSpeed Insights report, what's the difference between **field data** and **lab data**?
- a) Field data is for mobile and lab data is for desktop
- b) Field data comes from real Chrome users over 28 days; lab data is a single simulated Lighthouse test
- c) Field data is a paid feature; lab data is free
- d) They're the same numbers shown twice

**Answer:** b
**Explanation:** Field data (the Chrome UX Report) shows how real visitors experienced the page, and it's what Google uses. Lab data is one controlled test, useful for finding and checking fixes. Both have mobile and desktop tabs.
**Hint:** One is real people; one is a robot test.

### Q3. Why does Lighthouse show **Total Blocking Time (TBT)** instead of INP?
- a) INP was removed from Core Web Vitals
- b) A lab test doesn't tap or click the page, so it measures how long scripts block the page instead; high TBT usually means poor INP
- c) TBT is the new name for INP since Lighthouse 13
- d) INP only applies to desktop pages

**Answer:** b
**Explanation:** INP needs real interactions, which only real users provide. TBT measures how long the main thread was too busy to respond during loading, so it's the lab's stand-in.
**Hint:** What can't a robot do on your page?

### Q4. Dana's PSI lab report shows LCP 5.8 s on mobile. **LCP breakdown** points at her 3.2 MB, 4000-pixel featured image. What should she fix first?
- a) Add a CDN, because the image is far from readers
- b) Install a second caching plugin
- c) Resize and compress the featured image (e.g. about 1600–2000 px, WebP), then re-measure
- d) Lazy-load the featured image so it loads later

**Answer:** c
**Explanation:** The LCP element is an oversized image, so shrinking it is the biggest win. Lazy-loading it would make LCP *worse*: it's the main thing on screen. A CDN helps distance, not a file that's ten times too big.
**Hint:** Fix the thing the report names.

### Q5. Raj turned on WP Super Cache, but his homepage looks exactly as slow as before when he tests it. He's logged in to WordPress in that browser. What's going on?
- a) WP Super Cache doesn't work on WordPress 7
- b) Logged-in users get fresh, uncached pages, so he needs to test in a logged-out private window
- c) He needs a CDN before caching works
- d) Caching only works on posts, not the homepage

**Answer:** b
**Explanation:** WP Super Cache skips logged-in visitors (*"Caching disabled for logged in visitors."*) so you always see your latest edits. Readers are logged out, so test as they would, and use **Test Cache**.
**Hint:** Who is the cache for?

### Q6. Most of Mia's readers are in Canada, her host's data centre is in Toronto, and page caching is on. Her host offers a free CDN toggle. What's a reasonable decision?
- a) A CDN is optional for her; caching matters more, though turning on the host's free CDN does no harm
- b) She must add two CDNs for redundancy
- c) She must move to a host in another country
- d) She should turn caching off and use only the CDN

**Answer:** a
**Explanation:** A CDN mostly helps readers far from the server. With a local audience and caching on, it's a nice-to-have. A built-in host CDN is the easy route if she wants it; never stack two.
**Hint:** Where are her readers compared with her server?

### Q7. Spot the error in Leo's speed plan:
> 1. Measure homepage and one post with PSI, three runs each, use the middle result.
> 2. Turn on the host's built-in page cache.
> 3. Also install WP Super Cache and LiteSpeed Cache, so pages are cached twice as well.
> 4. Swap the video embed at the top of posts for a facade, then re-measure.

- a) Step 1: one run is enough
- b) Step 2: host caches don't work with WordPress
- c) Step 3: run only one page cache; extra caching plugins conflict with the host cache and with each other
- d) Step 4: facades make pages slower

**Answer:** c
**Explanation:** One page cache per site: two or three layers of the same job cause stale pages, broken forms and confusing results. LiteSpeed Cache is only for LiteSpeed servers anyway. Steps 1, 2 and 4 follow the lesson.
**Hint:** One plugin per job.

### Q8. (review: m07-l03) Why should you **delete** plugins you don't use, rather than just deactivate them?
- a) Deactivated plugins still run on every page and slow the site
- b) Their files stay on the server and can still be attacked, and they drop out of your update routine
- c) WordPress charges for deactivated plugins
- d) Deactivated plugins block page caching

**Answer:** b
**Explanation:** Deactivating stops WordPress from loading the plugin, so it doesn't slow pages, but its code is still on the server. Site Health warns that *"Inactive plugins are tempting targets for attackers."*
**Hint:** It's a security problem, not a speed one.
