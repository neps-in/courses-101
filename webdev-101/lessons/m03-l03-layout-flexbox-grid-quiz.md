# M03.L03 Quiz — Layout with Flexbox & Grid

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against MDN CSS layout (Flexbox, Grids, `order`, Grid layout and accessibility), W3C WAI Understanding SC 1.3.2 and 2.4.3 (WCAG 2.2), and Chrome DevTools flexbox/grid docs. Lesson stylesheet validated live with the W3C CSS Validation Service.

### Q1. Where do you put `display: flex` to line up three nav links in a row? *(O2 · recall)*
- a) On each `<a>` link, so that every link becomes its own flex box
- b) On the `<ul>` that directly contains the three `<li>` items
- c) On the `<body>`, so every element on the page can use Flexbox
- d) On each `<li>`, because those are the items that need to move

**Answer:** b
**Explanation:** `display: flex` turns an element into a flex **container** and arranges its **direct children**. The `<li>`s are the children of the `<ul>`, so the rule goes on the `<ul>`. Putting it on each `<li>` only arranges the single link inside it, and on `<body>` it would line up header, main and footer side by side.
**Hint:** Flexbox arranges an element's children, not the element itself.

### Q2. What does `grid-template-columns: repeat(auto-fit, minmax(min(14rem, 100%), 1fr));` do? *(O3 · recall)*
- a) Always makes exactly 14 equal columns, whatever the width of the screen
- b) Makes one column 14rem wide and gives all other columns the rest
- c) Fits as many columns as fit, each at least 14rem, sharing the space
- d) Creates columns only after a media query has turned the grid on

**Answer:** c
**Explanation:** `auto-fit` creates as many columns as fit; `minmax(…, 1fr)` makes each one at least 14rem (or 100% of the container, if that's smaller) and lets them share any leftover space equally. The column count follows the available width (1 on a phone, then 2, 3 or more as space allows), with no media query.
**Hint:** Read it aloud: "repeat, as many as fit, each between … and …".

### Q3. Elena needs to lay out six testimonial cards so they line up in neat, equal columns on every screen size. Which approach fits best? *(O1 · scenario)*
- a) Grid with `repeat(auto-fit, minmax(min(16rem, 100%), 1fr))`
- b) Normal flow, with every card given a fixed width of `400px` in CSS
- c) Flexbox with `justify-content: space-between` and no other settings
- d) Floats, with each card set to `float: left` and a percentage width

**Answer:** a
**Explanation:** Cards in rows *and* columns are a Grid job, and the `auto-fit`/`minmax` pattern adapts from one column to several on its own. Flexbox without wrapping squashes six cards into one line, fixed `400px` widths overflow a 360 px phone, and floats are a legacy layout technique.
**Hint:** One line of things, or a table of boxes?

### Q4. Chen's menu looks fine on a laptop, but on a 320 px phone the five links squash into narrow columns, with words broken over several lines. The CSS is `nav ul { display: flex; gap: 1rem; }`. What's the most likely fix? *(O2 · scenario)*
- a) Add `flex-wrap: wrap;` so links can move onto a second line
- b) Replace `gap: 1rem` with a `margin-right` on every single link
- c) Add `order: -1;` to the longest link so that it shows up first
- d) Set `width: 1200px;` on the `<ul>` so the links always have room

**Answer:** a
**Explanation:** Without `flex-wrap: wrap`, flex items stay on one line and shrink or overflow. Wrapping lets them flow onto a new line on narrow screens. Margins don't create more room, `order` only reorders (and harms keyboard order), and a 1200 px width guarantees sideways scrolling on a phone.
**Hint:** What lets a full bookshelf continue on the next shelf?

### Q5. A designer wants the "Join" link shown first in the menu, but it's the last `<li>` in the HTML. A developer suggests `flex-direction: row-reverse`. What should you do instead? *(O3 · scenario)*
- a) Accept it, because screen readers follow the visual order on screen
- b) Use `row-reverse`, and add `tabindex="1"` to the "Join" link as well
- c) Use `order: -1` on that link, since it is safer than `row-reverse`
- d) Move the "Join" `<li>` to the top of the list in the HTML itself

**Answer:** d
**Explanation:** Keyboard focus and screen readers follow the HTML, not the visual order (WCAG 2.2 SC 1.3.2 and 2.4.3). `row-reverse` and `order` both create a mismatch, so focus jumps against the reading direction, and positive `tabindex` values make focus order even harder to manage. Changing the HTML order keeps everything consistent.
**Hint:** What do the keyboard and screen readers follow?

### Q6. Spot the error. The three benefit cards should sit side by side, but they still stack in one column. Which line is wrong? *(O3 · spot-the-error)*
```html
<section class="card-grid" aria-labelledby="why-title">
  <h2 id="why-title">Why subscribe</h2>
  <ul>
    <li>Roasted this week</li><li>Pause any time</li><li>Ships worldwide</li>
  </ul>
</section>
```
```css
.card-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(14rem, 1fr)); }
```
- a) The CSS uses `minmax`, which only works inside a flex container
- b) The heading `h2` must sit below the list before the grid can work
- c) The class is on the `section`, but the cards are inside the `ul`
- d) The `aria-labelledby` attribute stops the grid from being applied

**Answer:** c
**Explanation:** Only **direct children** become grid items. Here those are the `h2` and the `ul`, so the grid places the heading and the whole list, and the `li`s inside keep stacking. Put `class="card-grid"` on the `ul`. `minmax` is a Grid function, heading order is irrelevant, and ARIA doesn't affect layout.
**Hint:** Which element are the `li`s direct children of?

### Q7. *(review: m03-l02)* A card's background is the token `--color-surface` (white). Its text uses `--color-text` (`#2b1d14`, 16.3:1 on white). A designer wants pale grey text, `#b0b0b0` (about 2.2:1), for a "classy" look. What's the right response? *(O3 of M03.L02 · scenario)*
- a) Agree, because body text inside a card counts as large text
- b) Decline: normal text needs at least 4.5:1, so keep a darker token
- c) Agree, as long as the font weight is set to bold for the cards
- d) Decline, because grey is never allowed as a text colour on the web

**Answer:** b
**Explanation:** WCAG 2.2 SC 1.4.3 requires 4.5:1 for normal-size text, so about 2.2:1 fails. Card text isn't "large" (24 px, or ~18.66 px bold), and bold at body size doesn't change that. Grey is fine when it's dark enough, like the lesson's muted token `#6b5d52` (6.3:1 on white).
**Hint:** Lesson 3.2: what's the AA minimum for normal text?
