# M05.L02 Quiz — JS Basics: Variables, Functions, Events

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against MDN (first steps, querySelector, classList, addEventListener, event bubbling, Clipboard, status role); snippets run in headless Chrome 156.

### Q1. A form field holds the text `'2'`. What does `'2' + 2` give in JavaScript? *(O1 · recall)*
- a) `4`, because JavaScript adds the two values together as numbers
- b) `'22'`, because adding to a string joins the two values as text
- c) An error, because text and numbers can never be used together
- d) `NaN`, because the text `'2'` is not a number JavaScript can read

**Answer:** b
**Explanation:** When one side of `+` is a string, JavaScript joins them as text. Form values are always strings, so convert first: `Number(field.value) + 2` gives `4`.
**Hint:** What type does a form field give you?

### Q2. Which line changes an element's visible text safely, even if the text came from a visitor? *(O2 · recall)*
- a) `el.textContent = name;` as it always treats the value as text
- b) `el.style.content = name;` because CSS can safely show any text
- c) `el.setAttribute('text', name);` since attributes are always shown
- d) `el.classList.add(name);` because classes display text on screen

**Answer:** a
**Explanation:** `textContent` puts the value in as plain text, so any HTML or script in it is shown, not run. `innerHTML` would turn it into HTML (a cross-site scripting risk). `style.content`, a `text` attribute and `classList` don't display text.
**Hint:** Which property name says "just the text"?

### Q3. Why listen on a parent `.plans` list instead of adding a listener to each plan button? *(O3 · recall)*
- a) Parent listeners run faster because they skip the page's buttons
- b) Buttons can't have listeners unless their parent has one as well
- c) Clicks bubble up, so one listener on the list sees every button
- d) Each page is allowed only one event listener in total for clicks

**Answer:** c
**Explanation:** Events bubble from the clicked element up through its ancestors, so one listener on the parent sees every click; `event.target.closest('button')` finds which button. It also works for buttons added later. There's no limit on listeners, and buttons don't need a parent listener.
**Hint:** Where does a click travel after it happens?

### Q4. A "Copy code" button works with a mouse, but keyboard users can't reach it and Enter does nothing. The HTML is `<div class="copy-button">Copy</div>`. What's the best fix? *(O3 · scenario)*
- a) Add a second listener for the keydown event on the whole page
- b) Tell keyboard users in the page footer to switch to using a mouse
- c) Add `cursor: pointer` in CSS so it's clear the element is clickable
- d) Make the `<div>` a `<button type="button">`, keeping the listener

**Answer:** d
**Explanation:** A `<button>` gets keyboard focus, Enter and Space activation, and a "button" role for screen readers, and its `click` listener fires for all of them. Page-wide key handlers are fragile, a pointer cursor only helps mice, and asking users to change devices excludes them.
**Hint:** Which element gives you keyboard support for free?

### Q5. Your header should get a shadow after the visitor scrolls past the hero, but the page stutters on cheap phones. The scroll listener recalculates every element's size. What do you change? *(O3 · scenario)*
- a) Keep the work to one comparison and a class, with `{ passive: true }`
- b) Add a second scroll listener so the work is split across two functions
- c) Move the script to the end of the stylesheet so it runs with the CSS
- d) Remove `defer` so the scroll code is ready before the page has loaded

**Answer:** a
**Explanation:** Scroll events fire many times a second, so the handler must be tiny: compare `scrollY` with the hero's height and toggle one class; CSS does the styling. `{ passive: true }` tells the browser the listener won't block scrolling. (`IntersectionObserver`, in Lesson 5.3, is lighter still.) Two listeners double the work, scripts don't go in stylesheets, and removing `defer` causes `null` errors.
**Hint:** How often does a scroll event fire?

### Q6. Spot the error. This should log only for monthly plans, but it logs for every plan. Which line is wrong? *(O1 · spot-the-error)*
```js
let plan = button.dataset.plan;       // line 1
if (plan = 'monthly') {               // line 2
  console.log('Monthly plan chosen'); // line 3
}                                     // line 4
```
- a) Line 1, because `dataset` can only read attributes that are numbers
- b) Line 3, because `console.log` can't be used inside an `if` block
- c) Line 2, because `=` assigns a value; comparing needs `===` instead
- d) Line 4, because every `if` block must end with a semicolon after it

**Answer:** c
**Explanation:** `=` assigns, so `plan = 'monthly'` sets the value and the `if` always runs (checked; with `const` it would throw `Assignment to constant variable` instead). Compare with `===`. `dataset` reads any `data-` attribute as text, `console.log` works anywhere, and `}` needs no semicolon.
**Hint:** One `=` or three?

### Q7. *(review: m05-l01)* After adding your new script, the Console shows `Cannot read properties of null (reading 'addEventListener')`. Your tag has `defer`. What do you check first? *(O2 of M05.L01 · scenario)*
- a) Whether the stylesheet link comes before the script tag in `<head>`
- b) Whether the selector matches a real element (a typo like `.buton`)
- c) Whether the page has been pushed to GitHub and deployed by Actions
- d) Whether the visitor's browser has been updated to the latest release

**Answer:** b
**Explanation:** With `defer`, the timing is right, so `null` means the selector found nothing: check it in the Console with `document.querySelector('…')`. Stylesheet order, deployment and browser version don't make `querySelector` return `null`.
**Hint:** `null` means "I looked and found nothing".
