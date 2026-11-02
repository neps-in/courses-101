# M05.L03 Quiz — Interactive Components

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against MDN (`<details>`, `<dialog>`, IntersectionObserver, sessionStorage, `<time>`), the WAI-ARIA Authoring Practices tabs and modal dialog patterns, and WCAG 2.2 SC 2.2.2 and 2.1.2; components run in headless Chrome 156.

### Q1. What's the simplest way to build an FAQ accordion that works with a keyboard and a screen reader? *(O1 · recall)*
- a) `<div>` questions with click listeners and a CSS `display` toggle
- b) `<details>` and `<summary>`, which open and close with no script
- c) A third-party accordion plugin loaded from a content delivery network
- d) Hidden `<p>` answers revealed by a `:hover` rule on each question

**Answer:** b
**Explanation:** `<details>`/`<summary>` gives keyboard support (Enter/Space), an expanded/collapsed state for screen readers and no JavaScript. `<div>`s need all of that added by hand, a plugin adds weight, and hover doesn't work for keyboard or touch.
**Hint:** Native first.

### Q2. Which call opens a `<dialog>` so focus moves inside, Tab stays inside, and Escape closes it? *(O2 · recall)*
- a) `dialog.show()`, which opens the dialog without blocking the page
- b) `dialog.hidden = false`, which reveals it like any other element
- c) `dialog.style.display = 'block'`, which forces it to be on screen
- d) `dialog.showModal()`, which opens it as a modal above the page

**Answer:** d
**Explanation:** `showModal()` puts the dialog on top, makes the page behind inert, moves focus in and lets Escape close it (checked). `show()` opens it without any of that, so Tab walks out to the page behind. Changing `hidden` or `display` gives none of the dialog behaviour.
**Hint:** Which method name says "modal"?

### Q3. In the WAI-ARIA tabs pattern, how does a keyboard user move between tabs? *(O2 · recall)*
- a) With the arrow keys; Tab moves on into the selected tab's panel
- b) With Tab only, since every tab must be its own stop in the order
- c) With the number keys, one for each tab in the order they appear
- d) With Escape, which cycles to the next tab and closes the old one

**Answer:** a
**Explanation:** The tab list is one Tab stop (the selected tab; others have `tabindex="-1"`), arrow keys move between tabs, and Tab then goes into the panel. Making every tab a Tab stop slows keyboard users; number keys and Escape aren't part of the pattern.
**Hint:** One Tab stop for the whole tab list.

### Q4. A client wants the newsletter pop-up "as soon as the page loads, on every page". What's your recommendation? *(O2 · scenario)*
- a) Agree, because the earliest pop-up always gets the most sign-ups
- b) Open it on load, but make the close button smaller so fewer leave
- c) Open it after real interest, once per visit, with a clear way out
- d) Remove the close button so visitors must enter an email address

**Answer:** c
**Explanation:** A pop-up on load hides the page before anyone reads it, especially on phones. Opening after interest (reaching pricing, or a delay) once per visit (`sessionStorage`) with Escape and a visible "No thanks" respects visitors. Shrinking or removing the close option is a dark pattern and can trap keyboard users.
**Hint:** Lesson 3.5: what makes a pop-up honest?

### Q5. A visitor reloads your page and the "Offer ends in 15:00" timer starts again from 15:00. What's wrong, and what's the fix? *(O3 · scenario)*
- a) Nothing's wrong; timers should restart so every visitor gets a turn
- b) The page is cached; set a shorter cache time on the hosting server
- c) It's fake urgency; count down to a real, fixed date for everyone
- d) The timer runs too slowly; update it every 100 ms, not every second

**Answer:** c
**Explanation:** A timer that starts from "now" for each visit is fake urgency, a dark pattern regulators act on (Lesson 3.5). Count to a fixed `datetime` with a time zone, so it's the same for everyone and survives reloads. Caching and update speed aren't the problem.
**Hint:** What would a fair deadline look like?

### Q6. Spot the error. This countdown updates every minute on the launch page. Which accessibility requirement is missing? *(O3 · spot-the-error)*
```html
<p>Boxes go on sale in <time class="countdown" datetime="2026-12-01T09:00:00+05:30">1 December 2026, 9:00 IST</time>.</p>
```
```js
setInterval(tick, 60000);
tick();
```
- a) A way to pause or stop the updates, such as a Pause button
- b) An `aria-live="assertive"` attribute so each minute is announced
- c) A `tabindex="0"` on the `<time>` so keyboard users can focus it
- d) A `role="timer"` plus a sound that plays as each minute passes

**Answer:** a
**Explanation:** WCAG 2.2 SC 2.2.2 (Pause, Stop, Hide) requires a way to pause, stop or hide content that updates by itself alongside other content. Announcing every minute or adding sound would interrupt screen-reader users, and making the time focusable adds nothing to operate.
**Hint:** Which WCAG rule covers content that changes on its own?

### Q7. *(review: m05-l02)* Your tab buttons use `document.querySelectorAll('[role="tab"]').addEventListener('click', …)` and the Console shows `… is not a function`. What's the fix? *(O3 of M05.L02 · scenario)*
- a) Change `[role="tab"]` to `.tab`, since attribute selectors don't work
- b) Loop over the list with `forEach`, or use one delegated listener
- c) Add `defer` again, because the tabs haven't loaded when it runs yet
- d) Rename the event from `click` to `onclick` so the list accepts it

**Answer:** b
**Explanation:** `querySelectorAll` returns a NodeList, which has no `addEventListener`. Add a listener to each item with `forEach`, or listen once on the tab list (delegation). Attribute selectors work fine, `defer` would give a `null` error instead, and the event name is `click`.
**Hint:** One element or a list?
