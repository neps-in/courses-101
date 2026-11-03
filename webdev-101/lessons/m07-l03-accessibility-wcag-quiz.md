# M07.L03 Quiz — Accessibility in Practice (WCAG 2.2)

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-03 against W3C WCAG 2.2 and its Understanding pages, W3C WAI's WCAG 3 status page, and Lighthouse 13.6's source code.

### Q1. What does conforming to WCAG 2.2 "level AA" mean for a page? *(O1 · recall)*
- a) It meets every level A and level AA success criterion on that one page
- b) It scores at least 90 in the Lighthouse accessibility category test
- c) It meets most AA criteria, as long as no level A criterion has failed
- d) It meets all AAA criteria, which is what most laws and contracts require

**Answer:** a
**Explanation:** AA conformance means all A **and** AA criteria are met; one failure means the page doesn't conform. A Lighthouse score is not conformance, and AAA isn't what most laws ask for.
**Hint:** All of the lower level, plus all of this one.

### Q2. Which of these can an automated tool like Lighthouse or WAVE reliably check? *(O1 · recall)*
- a) Whether the alt text actually describes the purpose of each image
- b) Whether the keyboard focus order follows the page's reading order
- c) Whether a button has an accessible name (any name at all) or none
- d) Whether your error messages explain clearly how to fix the problem

**Answer:** c
**Explanation:** Tools can detect a missing name (Lighthouse: "Buttons do not have an accessible name"), missing alt or labels, and plain-text contrast. Whether alt text is **good**, whether the order makes sense and whether errors are clear need a human.
**Hint:** Present or missing, versus good or bad.

### Q3. What does WCAG 2.2's new criterion 2.4.11 Focus Not Obscured (Minimum) require? *(O1 · recall)*
- a) Every focused element must have a 3 px outline in the brand's own colour
- b) The focused item can't be fully hidden by content such as a sticky header
- c) Focus must never move automatically when a dialog or pop-up opens on screen
- d) Focus outlines must be hidden on touch screens so they don't distract users

**Answer:** b
**Explanation:** 2.4.11 (AA) says a focused component must not be entirely hidden by author-created content such as sticky headers, footers or cookie banners. A fix is `scroll-padding-top` (W3C technique C43). It doesn't set outline styles, and moving focus into an open dialog is correct (Lesson 5.3).
**Hint:** Think about the sticky header from Module 5.

### Q4. Your page scores 100 in Lighthouse accessibility. A screen-reader user says the five "Learn more" links are confusing. What do you do? *(O2 · scenario)*
- a) Nothing, because a score of 100 proves the page is fully accessible
- b) Add an accessibility overlay widget so the links get fixed automatically
- c) Give each link text that makes sense on its own, then re-test with NVDA
- d) Remove all the links so there is nothing left for a screen reader to read

**Answer:** c
**Explanation:** Screen-reader users often list all links (NVDA: K or the elements list); five "Learn more"s are meaningless out of context (2.4.4 Link Purpose). Tools can't judge that. Rewrite the link text ("Read how we roast"), then re-test the same way. Overlays don't fix the HTML.
**Hint:** Would the link make sense in a list of links?

### Q5. Tabbing through your page, the "Join the launch list" link disappears under the sticky header. Which fix is best? *(O3 · scenario)*
- a) Remove the focus outline so that nobody notices where the focus has gone
- b) Make the header taller so it covers more of the page and looks consistent
- c) Turn off the keyboard focus for that link, so Tab skips over it completely
- d) Add `scroll-padding-top` at least as tall as the header, then re-test it

**Answer:** d
**Explanation:** `scroll-padding-top` keeps scrolled-to and focused items below the sticky header (W3C technique C43 for 2.4.11). Removing focus or skipping the link breaks keyboard access (2.4.7, 2.1.1); a taller header makes it worse.
**Hint:** Make room at the top when the browser scrolls.

### Q6. Spot the error. A screen reader announces only "button" for the pop-up's close button. Which line is the problem? *(O3 · spot-the-error)*
```html
<dialog id="launch-popup" aria-labelledby="popup-title">       <!-- line 1 -->
  <h2 id="popup-title">Get 20% off your first box</h2>         <!-- line 2 -->
  <button class="close">                                       <!-- line 3 -->
    <svg viewBox="0 0 24 24"><path d="M6 6l12 12M18 6L6 18"/></svg> <!-- line 4 -->
  </button>                                                    <!-- line 5 -->
</dialog>                                                      <!-- line 6 -->
```
- a) Line 1: `aria-labelledby` on `<dialog>` hides the close button's name
- b) Line 2: the heading must be an `<h1>` for the dialog's buttons to work
- c) Line 3: the button has no name; add `aria-label="Close"` and hide the icon
- d) Line 6: `<dialog>` can't contain any buttons, so a `<div>` is needed instead

**Answer:** c
**Explanation:** An icon-only button has no accessible name, so it's announced as "button" (4.1.2; Lighthouse: "Buttons do not have an accessible name"). Add `aria-label="Close"` (or visible text) and `aria-hidden="true"` on the SVG. The dialog's label is correct, heading level doesn't affect buttons, and `<dialog>` can contain buttons (Lesson 5.3).
**Hint:** What would a screen reader say for this button?

### Q7. *(review: m02-l04)* Why isn't a `placeholder="Email"` enough to label a form field? *(O1 of M02.L04 · recall)*
- a) Placeholders disappear when typing and aren't a reliable accessible label
- b) Placeholders are only allowed on password fields in current HTML versions
- c) A placeholder makes the field required, which blocks people from submitting
- d) Placeholders don't show on phones, so mobile visitors never get to see them

**Answer:** a
**Explanation:** Placeholder text vanishes as soon as someone types, often has low contrast, and isn't a dependable label for assistive technology. Use a visible `<label for="email">` (Lesson 2.4; WCAG 1.3.1 and 3.3.2). The other options are false.
**Hint:** What happens to it when you start typing?
