# M02.L03 Quiz — Semantic HTML & Heading Structure

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Checker behaviour verified live with the W3C Nu HTML Checker 26.11.1 on 2026-11-02.

### Q1. How many `<main>` elements should a normal page have? *(O1 · recall)*
- a) One per section, so each block is marked as important
- b) None; `<main>` is optional decoration for designers
- c) Exactly one, around the page's main content
- d) Two: one for the header and one for the footer

**Answer:** c
**Explanation:** `<main>` marks the page's main content so screen-reader users can jump straight to it, and there should be one visible `main` per page. Header and footer sit *outside* it, and sections live *inside* it.
**Hint:** Think "skip to the main content".

### Q2. Since the outline algorithm was removed from the HTML spec, what decides a heading's level? *(O2 · recall)*
- a) Only the tag: `h1`, `h2`, `h3`… up to `h6`
- b) How deeply it's nested inside `section` elements
- c) The font size it's given in the page's CSS
- d) Whether it appears inside a `header` element

**Answer:** a
**Explanation:** The "document outline algorithm" that would have computed levels from nesting was never implemented by browsers or screen readers and was removed in 2022. Today the tag's number is the level. Font size is just looks, and being inside a `header` doesn't change the level.
**Hint:** Check the freshness flag at the top of the lesson.

### Q3. A designer wants the FAQ heading to look small and grey. The page's outline is `h1 → h2 (Benefits) → h2 (FAQ)`. What should the developer do? *(O2 · scenario)*
- a) Change the FAQ heading to `<h5>` so it renders smaller
- b) Replace the heading with a `<p><b>FAQ</b></p>` paragraph
- c) Wrap the FAQ heading inside an extra `<section>` element
- d) Keep it an `<h2>` and make it small and grey with CSS

**Answer:** d
**Explanation:** The FAQ is still a main section, so it stays `<h2>`. CSS controls size and colour (Module 3). Changing it to `<h5>` would skip levels and mislead screen readers and search engines, and a bold paragraph isn't a heading at all.
**Hint:** Structure from tags, looks from CSS.

### Q4. In Chrome's accessibility tree, your four `<section>` blocks don't appear as landmarks, but `main` and `navigation` do. What's the most likely reason? *(O3 · scenario)*
- a) Sections only become landmarks when they're inside an `article`
- b) The sections have no accessible name, such as `aria-labelledby`
- c) Chrome doesn't show any landmarks except `main` and `navigation`
- d) Each section needs `role="section"` added to its start tag

**Answer:** b
**Explanation:** A `section` is only exposed as a "region" landmark when it has a name, usually given by pointing `aria-labelledby` at its heading's `id`. That stops every styling wrapper from flooding the landmark list. There's no `role="section"` in ARIA, and Chrome shows banner, contentinfo and named regions too.
**Hint:** Look at what the lesson's semantic example adds to each `<section>`.

### Q5. Which structure is best for a launch page's top menu of four links? *(O1 · scenario)*
- a) `<nav aria-label="Main">` containing a `<ul>` of `<li><a>` links
- b) A `<div class="menu">` with the four links separated by spaces
- c) An `<h2>` heading for each link so each one stands out more
- d) A `<footer>` element at the top so it's easy to find in code

**Answer:** a
**Explanation:** A menu is navigation and a list of links, so `nav` (labelled, in case there's also a footer nav) with a `ul` describes it exactly. A `div` says nothing, headings aren't links, and `footer` means closing information.
**Hint:** Name the two things a menu *is*: a navigation block, and a list.

### Q6. Spot the error. The W3C checker reports an error for this FAQ. What is it? *(O2 · spot-the-error)*
```html
<h1>Fresh beans every month</h1>
<section aria-labelledby="faq">
  <h2 id="faq">Questions</h2>
  <h4>Can I pause my subscription?</h4>
  <p>Yes, any time.</p>
</section>
```
- a) `aria-labelledby` must point to an `h1` element, not an `h2`
- b) A `section` element can't contain a paragraph directly
- c) The `h4` skips a level after the `h2`; it should be `h3`
- d) Pages can only have one heading inside each section element

**Answer:** c
**Explanation:** Going down from `h2`, the next level is `h3`. The checker reports: *The heading "h4" (with computed level 4) follows the heading "h2" (with computed level 2), skipping 1 heading level.* `aria-labelledby` can point to any element with an `id`, sections can hold paragraphs, and a section can have many headings.
**Hint:** Count the steps from `h2` to `h4`.

### Q7. *(review: m02-l02)* A product photo is the only thing inside a link to the shop page. What should its `alt` say? *(O3 of M02.L02 · recall)*
- a) `alt=""`, because the link already works without text
- b) A detailed description of the photo's colours and background
- c) `alt="link"`, so screen readers know that it can be clicked
- d) Where the link goes, such as `alt="Shop the Coorg dark roast"`

**Answer:** d
**Explanation:** When an image is a link's only content, its alt *is* the link text, so it must name the destination. An empty alt leaves a nameless link, a visual description doesn't say what the link does, and screen readers already announce "link".
**Hint:** Branch two of the alt flowchart.
