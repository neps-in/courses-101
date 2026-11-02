# M03.L02 Quiz — Typography, Color & Brand Tokens

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against W3C WAI Understanding SC 1.4.3 and 1.4.11 (WCAG 2.2), MDN custom properties and `font-display`, and Chrome DevTools contrast docs. Every contrast ratio below was computed with the WCAG 2.2 relative-luminance formula.

### Q1. Under WCAG 2.2 AA, what is the minimum contrast ratio for normal-size body text against its background? *(O3 · recall)*
- a) 3:1, the same minimum as for large headings and icons
- b) 7:1, the AA level required for all text on every page
- c) 2:1, as long as the text is set in a bold font weight
- d) 4.5:1, with 3:1 allowed only for large text

**Answer:** d
**Explanation:** SC 1.4.3 Contrast (Minimum) requires 4.5:1 for normal text and 3:1 for large text (at least 24 px, or about 18.66 px bold). 7:1 is the stricter AAA level, not AA. Bold only counts as "large" from about 18.66 px, and 2:1 never passes.
**Hint:** AA has two numbers for text; which one applies to ordinary paragraphs?

### Q2. Which token name follows this lesson's naming rule best? *(O1 · recall)*
- a) `--orange: #b45309;`
- b) `--color-cta: #b45309;`
- c) `--b45309: #b45309;`
- d) `--Color-Orange-2: #b45309;`

**Answer:** b
**Explanation:** Name tokens by their job, not their look. `--color-cta` still makes sense after a rebrand turns the buttons green; `--orange: green` would be misleading. A name that repeats the hex code adds nothing, and mixed capitals invite case-sensitivity mistakes (`--Color-Orange-2` and `--color-orange-2` are different tokens).
**Hint:** Imagine next year's rebrand. Which name would still be true?

### Q3. Aiko's brand button is white text on caramel `#E0A458`, which measures 2.18:1. The brand team wants to keep caramel. What's the best fix? *(O3 · scenario)*
- a) Make the button text bold, which counts as large text at any size
- b) Add a subtle drop shadow behind the white text to make it stand out
- c) Keep the caramel and change the text token to dark brown `#2b1d14`
- d) Leave it as it is, because brand colours are exempt from contrast

**Answer:** c
**Explanation:** Dark brown on caramel is 7.47:1, so it passes AA (and AAA) while keeping the brand colour. Bold text only counts as "large" from about 18.66 px, a button label is usually smaller, and even large text needs 3:1. Shadows aren't a reliable fix and are hard to measure. Only logos are exempt, not brand-coloured buttons.
**Hint:** You can change either colour in the pair.

### Q4. Rohan's heading font arrives slowly on mobile data, and for two seconds the headings are blank. Which change fixes that? *(O2 · scenario)*
- a) Set every heading's font size in `px` instead of `rem` units
- b) Load four more weights of the same font so one arrives sooner
- c) Remove the generic family `serif` from the end of the font stack
- d) Add `display=swap` to the font URL (or `font-display: swap`)

**Answer:** d
**Explanation:** `font-display: swap` tells the browser to show the text in a fallback font straight away and swap in the web font when it arrives, so text is never invisible. More weights mean more downloads, not fewer. Removing the generic family weakens the fallback, and `px` vs `rem` has nothing to do with font loading.
**Hint:** What should the browser do while it waits for the font?

### Q5. A sign-up field has a `#d9c7b0` border on a cream `#fffaf2` page (1.59:1). The label and text pass. Which WCAG 2.2 criterion does the field fail? *(O3 · scenario)*
- a) 1.4.11 Non-text Contrast: the border needs at least 3:1
- b) 1.4.3 Contrast (Minimum): every border must reach 4.5:1
- c) None, because borders are decorative and so they're exempt
- d) 1.4.4 Resize Text: borders must grow with the browser zoom

**Answer:** a
**Explanation:** The border is the only thing that shows where to type, so it's a visual part needed to identify the control. SC 1.4.11 asks for 3:1 against the colours next to it. 1.4.3 covers text, not borders. A purely decorative divider would be exempt, but a field outline isn't decorative. 1.4.4 is about text resizing.
**Hint:** Is this border decoration, or does it show users where a control is?

### Q6. Spot the error. The buttons show no burnt-orange background at all. Which line is wrong? *(O1 · spot-the-error)*
```css
:root {
  --color-cta: #b45309;
}
.button {
  background-color: var(--color-CTA);
  color: var(--color-on-cta, #ffffff);
}
```
- a) `:root` can't hold tokens; they must sit inside a `.button` rule
- b) The `var(--color-CTA)` call uses a different case from the token
- c) A fallback value such as `#ffffff` is not allowed inside `var()`
- d) Custom property names need three hyphens at the start, not two

**Answer:** b
**Explanation:** Custom property names are case-sensitive, so `--color-CTA` and `--color-cta` are two different tokens. `--color-CTA` was never defined (and there's no fallback), so the browser treats the declaration as unset and the background becomes transparent. `:root` is the usual place for tokens, `var()` accepts a fallback after a comma, and the names start with two hyphens.
**Hint:** Compare the token's spelling letter by letter.

### Q7. *(review: m03-l01)* You add `body { font-family: var(--font-body); }`. Why do paragraphs, lists and links all change font, but not your form buttons? *(O2 of M03.L01 · recall)*
- a) Buttons always ignore every rule that uses a `var()` token
- b) `font-family` doesn't inherit, so paragraphs set it themselves
- c) Fonts inherit, but form controls set their own font by default
- d) Buttons need an ID selector before any font rule can reach them

**Answer:** c
**Explanation:** `font-family` is inherited, so every element inside `body` picks it up, except form controls, whose browser styles set their own font. That's why the stylesheet adds `font: inherit` to `button` and `input`. `var()` works on buttons like anywhere else, and no ID is needed.
**Hint:** Lesson 3.1: which rule in the starter CSS has `font: inherit`, and why?
