# M03.L04 Quiz — Responsive, Mobile-First Design

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against MDN (responsive design, media queries, viewport meta, `clamp()`, `aspect-ratio`), W3C WAI Understanding SC 1.4.10, 2.5.8 and 1.4.4 (WCAG 2.2) and Google Search Central mobile-first indexing. Lesson stylesheet validated live with the W3C CSS Validation Service.

### Q1. In a mobile-first stylesheet, which media query adds styles for tablets and larger screens? *(O1 · recall)*
- a) `@media (max-width: 48rem) { … }` placed at the very top of the file
- b) `@media (min-width: 48rem) { … }` placed after the base phone styles
- c) `@media (device: tablet) { … }` placed in a separate tablet stylesheet
- d) `@media (min-width: 48rem) { … }` placed before the base phone styles

**Answer:** b
**Explanation:** Mobile-first means the base CSS (no query) is the phone layout, and `min-width` queries add to it for wider screens. They go **after** the base rules so they win on equal specificity (later wins, Lesson 3.1). `max-width` queries are the desktop-first approach, and there's no `device: tablet` media feature.
**Hint:** "This wide or wider", and where does a rule need to be to win a tie?

### Q2. What does WCAG 2.2 SC 1.4.10 Reflow require? *(O3 · recall)*
- a) Content works at 320 CSS px wide without scrolling sideways
- b) Every page offers a separate mobile version at its own address
- c) Text reflows into exactly two columns on screens of 768 px or more
- d) Pages reload automatically whenever a phone is rotated sideways

**Answer:** a
**Explanation:** Reflow asks that content can be read and used at a width of 320 CSS pixels (the same as a 1280 px screen zoomed to 400%) with scrolling in one direction only. Maps, data tables and similar two-dimensional content are exceptions. It doesn't ask for separate mobile sites, columns or reloads.
**Hint:** Which width is the course's smallest test size?

### Q3. Kemal's page scrolls sideways at 320 px. The overflow finder in the Console prints `<iframe width="560" height="315" …>`. What's the best fix? *(O2 · scenario)*
- a) Add `overflow-x: hidden;` to `body` so the scrollbar disappears
- b) Change the iframe's width attribute to 320 so it fits the phone
- c) Remove the video on phones with a `display: none` media query
- d) `iframe { width: 100%; height: auto; aspect-ratio: 16 / 9; }`

**Answer:** d
**Explanation:** This makes the embed fill its column at any width while keeping the 16:9 shape. `overflow-x: hidden` hides content instead of fixing it, a fixed 320 is still too wide once the page has padding (and too small on laptops), and hiding the video removes content from phone visitors and from Google's mobile-first indexing.
**Hint:** Make it flexible, don't hide it.

### Q4. A designer sets `h1 { font-size: 6vw; }`. Why is that a problem? *(O2 · scenario)*
- a) `vw` units aren't supported by any phone browsers in use today
- b) The heading never changes size, whatever the width of the screen
- c) It follows screen width, so zooming barely makes it bigger
- d) `vw` units can only be used for setting widths, not font sizes

**Answer:** c
**Explanation:** `vw` is a percentage of the viewport width, so a `vw`-only size follows the screen, not the visitor's zoom or text-size setting (WCAG 1.4.4 Resize Text). It's also tiny on phones (about 19 px at 320 px wide). Use `clamp()` with a `rem` part and keep the `vw` part small. All browsers support `vw`, it changes with width, and it works for font sizes.
**Hint:** What happens when someone zooms the page to 200%?

### Q5. Footer links on a phone are 16 px tall and touching each other, and people keep tapping the wrong one. Which change meets WCAG 2.2 SC 2.5.8 Target Size (Minimum)? *(O3 · scenario)*
- a) Make the link text bold so it is easier for people to see
- b) Add padding so each link is ≥ 24 px tall, with space between
- c) Change the link colour to a darker shade with higher contrast
- d) Add a `title` attribute to every link with its full description

**Answer:** b
**Explanation:** SC 2.5.8 asks for targets of at least 24 × 24 CSS px, or enough spacing that a 24 px circle centred on each doesn't touch its neighbours. Padding (plus `display: inline-block` on links) and a `gap` achieve that. Bold text, colour and `title` attributes don't change the size of the tap area.
**Hint:** It's about the size of the area a finger can hit.

### Q6. Spot the error. The page shows tiny, zoomed-out text on phones even though the CSS is mobile-first. Which line is the problem? *(O1 · spot-the-error)*
```html
<head>
  <meta charset="utf-8">
  <meta name="view-port" content="width=device-width, initial-scale=1">
  <title>Fresh Coffee Beans Delivered Monthly | Nila Coffee</title>
  <link rel="stylesheet" href="styles.css">
</head>
```
- a) The `charset` must come after the `<title>`, or the page won't load
- b) `initial-scale=1` should be `initial-scale=0` to scale on phones
- c) The stylesheet link has to sit at the bottom of the `<body>` instead
- d) The meta name is `view-port`; browsers only recognise `viewport`

**Answer:** d
**Explanation:** Browsers look for `name="viewport"` exactly. With the hyphen, the tag is ignored, so phones fall back to a ~980 px desktop width and shrink the page. `charset` belongs first in `<head>`, `initial-scale=1` is correct, and the stylesheet belongs in `<head>`.
**Hint:** Read the attribute values character by character.

### Q7. *(review: m03-l03)* At 320 px, Grace's three benefit cards stay squeezed side by side instead of stacking. Her CSS is `.cards { display: grid; grid-template-columns: 1fr 1fr 1fr; }`. What change makes them stack on phones without a media query? *(O3 of M03.L03 · scenario)*
- a) `repeat(auto-fit, minmax(min(14rem, 100%), 1fr))` as the columns
- b) Add `flex-wrap: wrap;` to the existing `.cards` grid container rule
- c) Add `order: 1;` to the first card so it moves to a row on its own
- d) Change the `1fr` columns to fixed `300px` columns so they can't shrink

**Answer:** a
**Explanation:** The `auto-fit`/`minmax` pattern fits as many columns as there's room for, each at least 14rem, so a phone gets one column and a laptop three. `flex-wrap` does nothing on a grid container, `order` only reorders (and harms keyboard order), and three fixed 300 px columns overflow a phone.
**Hint:** Lesson 3.3's "no media queries" card pattern.
