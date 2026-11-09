# M12.L02 Quiz — Fixing Core Web Vitals: Causes and Fix Briefs

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against web.dev (Optimize LCP, INP and CLS; browser-level lazy loading) and WordPress core dev notes (5.5, 6.3).

### Q1. What does web.dev say about lazy-loading the LCP image? *(O2 · recall)*
- a) Always lazy-load it to save bandwidth for users
- b) Lazy-load it only on mobile, never on desktop
- c) Never do it: it always adds load delay to LCP
- d) Lazy-load it if the file is smaller than 100 KB

**Answer:** c
**Explanation:** "Never lazy-load your LCP image, as that will always lead to unnecessary resource load delay, and will have a negative impact on LCP."
**Hint:** The hero loads first.

### Q2. Which is one of web.dev's most common causes of poor CLS? *(O1 · recall)*
- a) Images without width and height dimensions
- b) A slow web server taking time to respond
- c) Too many internal links in the main menu
- d) Long JavaScript tasks after a user taps

**Answer:** a
**Explanation:** The list: "Images without dimensions. Ads, embeds, and iframes without dimensions. Dynamically injected content … Web fonts." A slow server hurts LCP; long tasks hurt INP.
**Hint:** Reserve the space.

### Q3. What are the three parts of an interaction, as web.dev describes INP? *(O1 · recall)*
- a) Download, decode and final display of each image
- b) Input delay, processing duration, presentation delay
- c) DNS lookup, server connection and time to first byte
- d) Crawl, render and index of the page by Googlebot

**Answer:** b
**Explanation:** "The input delay … The processing duration … The presentation delay". Long tasks already running often cause the input delay.
**Hint:** Before, during, after.

### Q4. Nila's hero is a CSS background image set by a slider script. LCP is slow. What should the brief propose? *(O2 · scenario)*
- a) Compress the background image to under 50 KB
- b) Lazy-load the slider so it doesn't block other images
- c) Install a second caching plugin to speed things up
- d) Use an `<img>` in the HTML with `fetchpriority="high"`

**Answer:** d
**Explanation:** "your LCP resource should be discoverable from the HTML source". A background set by script is found late (resource load delay).
**Hint:** Let the browser see it early.

### Q5. Her developer compressed the hero from 600 KB to 200 KB, but LCP didn't improve. What's the most likely reason? *(O1 · scenario)*
- a) The time shifted to another part, such as render delay
- b) Compression always makes LCP slower on phones
- c) LCP only measures text, so images don't count
- d) Field data updates daily, so it should have changed

**Answer:** a
**Explanation:** web.dev: compressing can "reduce the resource load duration, but it wouldn't actually improve LCP because the time would just shift to the element render delay". Find the slow part first.
**Hint:** Four parts.

### Q6. Tomás's product page: TBT 900 ms, chat widget, reviews carousel, two analytics tags. What's the best brief? *(O3 · scenario)*
- a) "Make the page faster, please, as soon as possible."
- b) "INP risk: list scripts by blocking time; cut or delay extras."
- c) "Remove all JavaScript from the site, including the cart."
- d) "Raise the Lighthouse score to 100 before next month."

**Answer:** b
**Explanation:** A fix brief names the metric, evidence (TBT, scripts), likely cause, fix, owner and check. Removing everything or chasing a score isn't a plan.
**Hint:** Evidence, cause, fix.

### Q7. Spot the error. A plugin's settings page says: "Lazy-load every image, including above the fold, to improve your LCP." What's wrong? *(O2 · spot-the-error)*
- a) Nothing; lazy loading always improves LCP
- b) Lazy loading only works on WordPress 4.x
- c) Lazy-loading the hero image makes LCP worse
- d) Above-the-fold images should be removed

**Answer:** c
**Explanation:** Lazy-load only below the fold. The LCP image should load first, ideally with `fetchpriority="high"`.
**Hint:** Which image is LCP?

### Q8. Spot the error. *(review: m12-l01)* A report says: "Our home page passes Core Web Vitals: LCP 2.1 s, CLS 0.05 (field). INP not measured." What's wrong?
- a) Nothing; two metrics are enough to pass
- b) CLS must be exactly zero to pass
- c) LCP must be under 1 second for home pages
- d) A page passes only if all three are good

**Answer:** d
**Explanation:** A page passes when it meets the targets "at the 75th percentile for all three of the Core Web Vitals metrics". Check INP in field data, or say it's unknown.
**Hint:** All three.
