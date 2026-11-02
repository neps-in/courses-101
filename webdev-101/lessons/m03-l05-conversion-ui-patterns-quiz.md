# M03.L05 Quiz — Conversion-Focused UI Patterns

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against MDN (`:focus-visible`, Subresource Integrity), W3C WAI Understanding SC 2.4.7, 2.4.11 and 1.4.11 (WCAG 2.2), India's CCPA dark-pattern guidelines (PIB, 2023), EU DSA Art. 25 and the FTC's 2022 dark-patterns report. Pico CSS 2.1.1 version, licence and SRI hash checked on npm/jsDelivr. Contrast ratios computed with the WCAG 2.2 formula.

### Q1. Why use `:focus-visible` rather than `:focus` for the visible focus ring? *(O1 · recall)*
- a) `:focus-visible` works on links, while `:focus` only works on buttons
- b) `:focus-visible` hides the ring from screen readers but not sighted users
- c) It shows the ring for keyboard users but usually not on a mouse click
- d) `:focus` was removed from CSS, and `:focus-visible` replaced it fully

**Answer:** c
**Explanation:** Browsers apply `:focus-visible` when focus should be shown, typically after keyboard navigation, and usually not after a mouse click on a button. That removes the old excuse for `outline: none`. `:focus` still exists and works on all focusable elements, and focus rings are visual, not something screen readers read.
**Hint:** Who needs to see where focus is?

### Q2. Which is an example of the dark pattern "drip pricing"? *(O2 · recall)*
- a) A countdown timer that restarts every time the page is reloaded
- b) A decline link that reads "No thanks, I don't like saving money"
- c) A marketing checkbox that is already ticked when the form loads
- d) Platform and handling fees that only appear at checkout

**Answer:** d
**Explanation:** Drip pricing reveals parts of the price late, so the real total only shows at checkout. India's CCPA guidelines name it among the 13 specified dark patterns. The others are also dark patterns, but different ones: false urgency (a), confirmshaming (b) and a pre-ticked box (c, basket sneaking or invalid consent).
**Hint:** "Drip": the price arrives drop by drop.

### Q3. A course page shows four filled orange buttons of equal size: "Enrol", "Download syllabus", "Watch trailer" and "Contact us". What's the best change? *(O1 · scenario)*
- a) Make all four buttons bigger so that each one is easier to notice
- b) Keep "Enrol" filled; make one other an outline and the rest links
- c) Give each of the four buttons its own different bright brand colour
- d) Add a countdown timer above the buttons to make visitors act faster

**Answer:** b
**Explanation:** One primary action per view gives visitors a clear next step. A secondary outline button and plain links keep the other options available without competing. Bigger or multicoloured buttons keep them all competing, and a countdown adds false urgency unless there's a real deadline.
**Hint:** How many "most important" actions can one screen have?

### Q4. Tomás adds Pico CSS from a CDN using a URL ending in `@latest` with no `integrity` attribute. What's the main risk? *(O3 · scenario)*
- a) A new release or a changed file could alter the page without warning
- b) Pico CSS isn't licensed for use on any commercial or business website
- c) Classless libraries stop working once the page uses any CSS classes
- d) CDN-hosted stylesheets can't be cached by the visitor's web browser

**Answer:** a
**Explanation:** "latest" follows every new release, so an update can change your design overnight, and without an `integrity` hash the browser will load a tampered file. Pin an exact version (`@2.1.1`) and add the SRI hash. Pico is MIT-licensed (commercial use allowed), classless styles still apply alongside your classes, and CDN files are cached normally.
**Hint:** What happens when the library's authors publish version 3?

### Q5. On Ruth's featured pricing card she overrides `--color-text` to cream, but the card's paragraph text stays dark brown. Her other overrides work. What's missing? *(O2 · scenario)*
- a) The new token needs `!important` before it can win against `:root`
- b) Tokens can only be overridden inside `:root`, never in a class rule
- c) `color: var(--color-text);` on the card, since `body` already set it
- d) A separate `.plan-featured p` rule with the hex code `#fffaf2` in it

**Answer:** c
**Explanation:** `body { color: var(--color-text); }` was resolved on `body`, and paragraphs inherit that **computed** colour, not the token. Re-declaring `color: var(--color-text)` on the card makes it use the card's overridden token, and everything inside inherits it. Custom properties can be overridden in any rule without `!important`, and a raw hex code breaks the "tokens only" rule.
**Hint:** Headings changed because their own rule uses `var()`. Which element set the paragraph colour?

### Q6. Spot the error. Keyboard users say they can't tell which button is selected. Which rule causes it? *(O1 · spot-the-error)*
```css
.button { background-color: var(--color-cta); color: var(--color-on-cta); }
.button:hover { background-color: var(--color-cta-hover); }
.button:focus { outline: none; }
.button-secondary { background-color: transparent; }
```
- a) `.button:hover` has to come before the base `.button` rule
- b) `.button:focus { outline: none; }` removes the focus indicator
- c) `.button-secondary` needs its own focus outline colour set
- d) `background-color: transparent` hides the button from keyboards

**Answer:** b
**Explanation:** `outline: none` on focus, with nothing in its place, removes the visual focus indicator and fails WCAG 2.2 SC 2.4.7 Focus Visible. Delete it and add a `:focus-visible` outline with at least 3:1 contrast. Rule order for hover is fine here, the secondary button inherits whatever focus style you set, and a transparent background doesn't affect keyboard access.
**Hint:** Which line mentions focus?

### Q7. *(review: m03-l04)* Your page scrolls sideways on phones. An AI assistant suggests adding `body { overflow-x: hidden; }`. Why should you reject that fix? *(O3 of M03.L04 · scenario)*
- a) It hides the overflow instead of fixing the element causing it
- b) `overflow-x` is not valid CSS, so the W3C checker will report an error
- c) It only works on desktop browsers, never on any phone browser at all
- d) It removes the vertical scrollbar too, so the page can't scroll at all

**Answer:** a
**Explanation:** `overflow-x: hidden` crops whatever sticks out (part of a video, a button, a form field) and can leave keyboard focus on content nobody can see. The right fix is to find the culprit with the Console one-liner and make it flexible (`max-width: 100%`, `flex-wrap`, no fixed widths). The property is valid, works on phones, and only affects horizontal overflow.
**Hint:** Lesson 3.4: find, don't hide.
