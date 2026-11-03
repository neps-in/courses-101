# M07.L01 Quiz — Performance & Core Web Vitals

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-03 against web.dev's Web Vitals pages, Google's "About PageSpeed Insights" and the Lighthouse 13.6.0 source code.

### Q1. Which set of thresholds counts as "good" for the three Core Web Vitals? *(O1 · recall)*
- a) LCP ≤ 4 s, INP ≤ 500 ms, CLS ≤ 0.25, measured on your own laptop
- b) LCP ≤ 1 s, FID ≤ 100 ms, CLS ≤ 0.01, measured in a single lab run
- c) A Lighthouse Performance score of 90 or more, on both mobile and desktop
- d) LCP ≤ 2.5 s, INP ≤ 200 ms, CLS ≤ 0.1, for 75% of real page visits

**Answer:** d
**Explanation:** web.dev sets "good" at LCP ≤ 2.5 s, INP ≤ 200 ms and CLS ≤ 0.1, assessed at the 75th percentile of real page loads. a) lists the "poor" boundaries; b) uses FID, which INP replaced in March 2024; c) is a lab score, not the Core Web Vitals.
**Hint:** Two and a half seconds, two hundred milliseconds, one tenth.

### Q2. What's the main difference between field data and lab data in PageSpeed Insights? *(O1 · recall)*
- a) Field data is real Chrome users over 28 days; lab is one simulated visit
- b) Field data is from Google's servers; lab data is from your own laptop only
- c) Field data is only for desktop pages; lab data is only for the mobile version
- d) Field data includes TBT; lab data includes INP measured from real user taps

**Answer:** a
**Explanation:** Field data comes from the Chrome UX Report (real users, previous 28 days) and is the verdict; lab data is a single Lighthouse run used to find causes. Lab data can't tap the page, so it shows TBT, not INP (d is reversed). Both cover mobile and desktop.
**Hint:** Real people over weeks, or one robot visit?

### Q3. In Lighthouse 13.6, which lab metric carries the most weight in the Performance score? *(O2 · recall)*
- a) Speed Index, because it measures how quickly the visible page fills in
- b) Largest Contentful Paint, which accounts for half of the total score
- c) Total Blocking Time, at 30% of the score, ahead of LCP and CLS at 25%
- d) Interaction to Next Paint, since it's now one of the Core Web Vitals

**Answer:** c
**Explanation:** Lighthouse 13.6's weights: TBT 30, LCP 25, CLS 25, FCP 10, Speed Index 10, INP 0 (the lab can't interact). That's why heavy scripts drag the score down even when the page looks fast.
**Hint:** Which metric is about scripts keeping the page busy?

### Q4. Your launch page's text jumps down about a second after loading, just as people go to tap "Join the launch list". Lighthouse shows CLS 0.32. What do you check first? *(O3 · scenario)*
- a) Turn on `loading="lazy"` for every image, including the hero at the top
- b) Layout shift culprits: images without size, or a banner pushing content
- c) Move all your CSS to the end of `<body>` so it can no longer block rendering
- d) Remove Google Tag Manager entirely, as it's the cause of every layout shift

**Answer:** b
**Explanation:** CLS measures unexpected movement; the Layout shift culprits insight names the elements that moved. Typical causes: an `<img>` without `width`/`height`, or a consent banner inserted at the top of the page instead of overlaid. Lazy-loading the hero hurts LCP, CSS at the end causes a flash of unstyled content, and GTM isn't automatically the culprit.
**Hint:** Which insight is named after the problem?

### Q5. You test your page once on desktop over office Wi-Fi (score 98), then once on mobile in PSI (score 61). A colleague says "the desktop number is the real one". What do you reply? *(O2 · scenario)*
- a) Agree, since most of the visitors who buy will be on desktop computers
- b) Average them to 80 and report that number as the page's speed score
- c) Test mobile three times, keep the median, and check any field data
- d) Ignore both numbers; only a real 100 score means the page is ready yet

**Answer:** c
**Explanation:** Mobile lab tests simulate a slower phone and network, which is closer to many real visitors; lab runs vary, so take the median of three under the same settings, and use field data as the verdict when it exists. Averaging different settings means nothing, and 100 isn't required.
**Hint:** Fair comparison, same conditions, more than one run.

### Q6. Spot the error. LCP is 4.1 s and the LCP element is the hero image. Which line is the main problem? *(O3 · spot-the-error)*
```html
<head>                                                         <!-- line 1 -->
  <script src="js/main.js" defer></script>                     <!-- line 2 -->
</head>                                                        <!-- line 3 -->
<body>                                                         <!-- line 4 -->
  <h1>Fresh-roasted coffee, every month</h1>                   <!-- line 5 -->
  <img src="images/hero.jpg" alt="A box of Nila Coffee beans"
       width="1376" height="768" loading="lazy">              <!-- line 6 -->
```
- a) Line 2: `defer` makes the script block rendering until it has finished running
- b) Line 5: the `<h1>` must come after the hero image, or LCP can't be measured
- c) Line 6: `width` and `height` force the browser to download the file twice
- d) Line 6: `loading="lazy"` on the hero delays the page's largest image fetch

**Answer:** d
**Explanation:** Lazy loading tells the browser to wait until layout to fetch the image; for the LCP image that's a delay (Lighthouse: "LCP resources shouldn't use loading=lazy"). Remove it and add `fetchpriority="high"`. `defer` doesn't block rendering, heading order doesn't stop LCP measurement, and dimensions prevent layout shift without extra downloads.
**Hint:** Which attribute says "this can wait"?

### Q7. *(review: m03-l04)* Why does `img { max-width: 100%; height: auto; }` still need `width` and `height` attributes on each `<img>` to avoid layout shift? *(O2 of M03.L04 · recall)*
- a) The attributes give the aspect ratio so the browser reserves the right space
- b) The attributes override the CSS, so images stay at a fixed pixel size always
- c) Without the attributes, the CSS `max-width` rule is ignored on mobile phones
- d) The attributes are only for older browsers; modern ones never need them now

**Answer:** a
**Explanation:** Modern browsers use the `width`/`height` attributes to compute the aspect ratio and reserve space before the file loads; the CSS then scales the box responsively (Lesson 3.4). Without them the box has no height until the image arrives, so content jumps.
**Hint:** What does the browser need to know before the file arrives?
