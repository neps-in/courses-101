# M07.L02 Quiz — Images, Fonts & Media Optimization

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-03 against MDN (`<img>`, `<picture>`, `fetchpriority`, `<video>`) and web.dev (Learn Images, facades, CSS size-adjust).

### Q1. What does the `sizes` attribute tell the browser? *(O1 · recall)*
- a) The real pixel width of each image file listed in the `srcset` attribute
- b) How wide the image will be displayed, so it can pick a big enough file
- c) The maximum file size in kilobytes the browser is allowed to download
- d) Which image formats the browser should try first, such as AVIF or WebP

**Answer:** b
**Explanation:** `sizes` describes the displayed width (e.g. `(min-width: 800px) 50vw, 100vw`); `srcset`'s `w` values give each file's real width (a). The browser combines them with the screen's pixel density to choose. Formats are chosen by `<source type>` in `<picture>` (d); there's no file-size limit attribute (c).
**Hint:** Files' widths are in `srcset`; what's left to describe?

### Q2. Where do `alt`, `width`, `height` and `fetchpriority` go in a `<picture>` element? *(O1 · recall)*
- a) On each `<source>` element, so every format gets its own alt text
- b) On the `<picture>` element itself, which wraps every source inside it
- c) Only in the CSS, because HTML attributes are ignored inside `<picture>`
- d) On the `<img>` element, which is the one that's actually displayed

**Answer:** d
**Explanation:** `<picture>` and `<source>` only offer file choices; the `<img>` is what's rendered and carries `alt`, `width`, `height`, `loading` and `fetchpriority`. The chosen source's file is shown through it.
**Hint:** Which element would still work if the browser ignored all the others?

### Q3. Which image should get `fetchpriority="high"`? *(O2 · recall)*
- a) Every image on the page, so that all of them load as fast as possible
- b) Only images below the fold, because they're the ones that load late
- c) The one image that is the page's LCP element, usually the hero photo
- d) The site logo in the header, since it appears on every page of the site

**Answer:** c
**Explanation:** `fetchpriority="high"` raises one resource's priority; MDN warns that overusing it can hurt performance. Give it to the LCP image (Lesson 7.1). Below-the-fold images should be lazy-loaded instead, and a small logo is rarely the LCP element.
**Hint:** If everything is important, nothing is.

### Q4. Your page embeds a 2-minute YouTube video halfway down. Network shows hundreds of kilobytes from YouTube on every page load, though few visitors press play. What's the best fix? *(O3 · scenario)*
- a) Move the YouTube embed to the very top so it loads before everything else
- b) Add `fetchpriority="high"` to the iframe so the player finishes loading sooner
- c) Replace it with a facade: a thumbnail link that loads the player on click
- d) Convert the YouTube player to AVIF so its scripts become smaller to download

**Answer:** c
**Explanation:** A facade shows a lightweight preview and loads the real player only when someone wants it (web.dev's example: ≈3 KB vs ≈540 KB). Raising priority or moving it up makes things worse, and AVIF is an image format, not a way to shrink scripts.
**Hint:** Load it only when someone asks.

### Q5. After self-hosting your heading font, the headline still jumps slightly when the font arrives, and Lighthouse lists the font under Layout shift culprits. What do you try? *(O3 · scenario)*
- a) Remove `font-display: swap` so the text stays invisible until it loads
- b) Add a fallback `@font-face` with `size-adjust` tuned to match the web font
- c) Load every weight of the font family so that one of them matches the layout
- d) Preload all your images so that the browser is too busy to swap the fonts

**Answer:** b
**Explanation:** The shift happens because the fallback and the web font take up different space. A fallback `@font-face` using `local()` and `size-adjust` makes the system font about the same size, so the swap barely moves anything (web.dev). Removing `swap` hides text, extra weights add downloads, and preloading images doesn't help.
**Hint:** Make the stand-in the same size as the star.

### Q6. Spot the error. On a phone, the hero loads late and Lighthouse says "LCP resources shouldn't use loading=lazy". Which line is wrong? *(O2 · spot-the-error)*
```html
<picture>                                                                     <!-- line 1 -->
  <source type="image/avif" srcset="hero-800.avif 800w, hero-1600.avif 1600w"> <!-- line 2 -->
  <img src="hero-800.jpg" srcset="hero-800.jpg 800w, hero-1600.jpg 1600w"      <!-- line 3 -->
       sizes="100vw" width="1600" height="900" alt="A box of Nila Coffee beans" <!-- line 4 -->
       loading="lazy">                                                        <!-- line 5 -->
</picture>                                                                    <!-- line 6 -->
```
- a) Line 2: AVIF can't be used with `srcset`; only a single `src` is allowed
- b) Line 4: `sizes="100vw"` makes every phone download the 1600 px version
- c) Line 3: the JPEG fallback must come before `<source>` inside `<picture>`
- d) Line 5: the hero is lazy-loaded; drop it and add `fetchpriority="high"`

**Answer:** d
**Explanation:** Lazy loading delays the LCP image until layout; the hero should load straight away with high priority. `<source>` supports `srcset` (a); `100vw` on a phone is small, so a 390 px-wide phone at 2× density needs only about 780 px and gets the 800 px file (b; a 3× phone would pick the 1600 px one, so it's not "every phone"); and `<img>` must come **last** in `<picture>` (c).
**Hint:** Read Lighthouse's message again.

### Q7. *(review: m07-l01)* You've converted the hero to AVIF and added `srcset`. How do you show the change actually helped? *(O3 of M07.L01 · recall)*
- a) Run Lighthouse once on desktop and report the new score as the result
- b) Ask an AI tool whether the new markup is faster than the old version was
- c) Compare file sizes in your editor and assume that the LCP has improved too
- d) Re-run mobile Lighthouse three times, same settings, and compare medians

**Answer:** d
**Explanation:** Lesson 7.1's rule: measure fairly (mobile, Incognito, median of three, same settings) before and after, and record LCP, CLS and page weight. One desktop run, an AI opinion or file sizes alone don't prove the page got faster.
**Hint:** Same conditions, more than one run.
