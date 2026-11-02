# M03.L01 Quiz — How CSS Works: Selectors, Cascade, Box Model

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against MDN (cascade, specificity, inheritance, box model, margin collapsing), CSS Cascading and Inheritance Level 4, and Chrome DevTools "CSS features reference". Lesson stylesheet validated live with the W3C CSS Validation Service.

### Q1. Which way of adding CSS should be the default for a real launch page? *(O1 · recall)*
- a) A `style` attribute on each element, so every style sits next to its content
- b) One linked stylesheet: `<link rel="stylesheet" href="styles.css">` in `<head>`
- c) A `<style>` block at the end of `<body>`, so the page text loads before the styles
- d) A separate `<style>` block in every section, so each block keeps its own styles

**Answer:** b
**Explanation:** A linked stylesheet can style many pages from one file, the browser caches it, and the HTML stays clean. Inline `style` attributes can't be reused and beat almost every rule in your stylesheet, which makes later changes painful. `<style>` blocks belong in `<head>` and are for one-off pages or tests.
**Hint:** Which option lets one edit change every page?

### Q2. Which list puts the box model's layers in order from the inside out? *(O3 · recall)*
- a) Content → margin → border → padding
- b) Padding → content → border → margin
- c) Content → padding → border → margin
- d) Margin → padding → content → border

**Answer:** c
**Explanation:** The content sits in the middle. Padding is the space inside the border (it shows the background colour), the border wraps the padding, and margin is the transparent space outside the border that separates the box from its neighbours.
**Hint:** Which layer shows the button's background colour, and which one is always transparent?

### Q3. Two rules target the same "Join" link, `<a class="button" href="#signup">`, which sits inside `<section id="signup">`. Rule 1, `#signup a { color: #fde68a; }`, comes first. Rule 2, `.button { color: #ffffff; }`, comes last. What colour is the text? *(O2 · scenario)*
- a) `#ffffff`, because the rule that comes last in the file always wins
- b) `#fde68a`, because `#signup a` (1-0-1) is more specific than `.button` (0-1-0)
- c) The browser's default link blue, because the two conflicting rules cancel out
- d) `#ffffff`, because class selectors always beat any selector that contains a type

**Answer:** b
**Explanation:** Specificity is checked before source order. `#signup a` has one ID, so it beats any selector with only classes and types, wherever it sits in the file. Source order only decides between rules of equal specificity, and conflicting rules never cancel each other out.
**Hint:** Compare the numbers left to right, IDs first.

### Q4. Leila sets `body { color: #1f2933; border: 2px solid #d9dee3; }`. Her paragraphs turn dark blue-grey, but they don't each get a border. Why? *(O2 · scenario)*
- a) `color` is inherited by child elements, but `border` isn't
- b) Paragraphs ignore every rule that's written for the `body` element
- c) The border needs `!important` before it will apply to children
- d) Borders apply only to elements that have a class attribute set

**Answer:** a
**Explanation:** Text-related properties such as `color`, `font-family` and `line-height` pass down to children. Box properties such as `border`, `margin`, `padding` and `background` don't, so `body` gets one border around the whole page. That's the right behaviour: imagine every paragraph, link and list item getting a border.
**Hint:** Which properties describe text, and which describe a box?

### Q5. Tomás links `styles.css` and reloads, but the page shows no styles at all. Which check finds the cause fastest? *(O1 · scenario)*
- a) Retype every rule in the stylesheet with `!important` added to the end of each line
- b) Move each rule into an inline `style` attribute on the matching element
- c) Run the page's HTML through the W3C HTML checker and read the warnings
- d) Open DevTools → Network, reload, and look for the CSS file in red

**Answer:** d
**Explanation:** When *nothing* applies, the file usually isn't loading: a typo in `href`, a wrong folder, or a file saved as `styles.css.txt`. The Network panel shows that request in red as failed: `net::ERR_FILE_NOT_FOUND` for a file on your computer, or status 404 on a live web server. `!important` and inline styles don't help a file the browser never received, and the HTML checker doesn't open linked files.
**Hint:** No styles at all means the browser probably never got the file.

### Q6. Spot the error. The padding on this button works, but neither the white text nor the green background shows. Which line causes it? *(O2 · spot-the-error)*
```css
.button {
  padding: 0.75rem 1.25rem;
  color: #ffffff
  background: #14532d;
}
```
- a) `padding` can't take two values on a single line in one rule
- b) `.button` must be written as `button.button` before it can style a link
- c) `#ffffff` is not valid; colours must be written as `white`
- d) The `color` line is missing its `;`, so it merges with the next

**Answer:** d
**Explanation:** Without the semicolon, the browser reads `color: #ffffff background: #14532d` as one declaration with an invalid value and drops it, so the background is lost along with the colour. The W3C CSS checker reports "Missing a semicolon before the property name". Two padding values (top/bottom, left/right) and hex colours are both valid.
**Hint:** Read the end of each line.

### Q7. *(review: m02-l03)* A designer wants the FAQ questions to look smaller, so a developer changes them from `h3` to `h5`. What's the better fix now that you know CSS? *(O2 of M02.L03 · scenario)*
- a) Keep the `h3`s, and set a smaller `font-size` for them in CSS
- b) Use `h5`, because heading levels are mainly there to set sizes
- c) Replace the headings with bold `<p>` elements set to a small size
- d) Wrap each `h3` in a `<small>` element so it becomes smaller

**Answer:** a
**Explanation:** Heading levels describe the outline (Lesson 2.3): FAQ questions under an `h2` section are `h3`s. Jumping to `h5` skips levels, which the validator flags and screen-reader users notice. Bold paragraphs drop out of the outline completely. How big a heading looks is CSS's job, e.g. `.faq h3 { font-size: 1.125rem; }`.
**Hint:** HTML says what it is; CSS says how it looks.
