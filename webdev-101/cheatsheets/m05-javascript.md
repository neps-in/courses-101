# M05 Cheat Sheet — JavaScript for Marketers
*Web Development 101 · Module 5 · checked 2026-11-02*

## Loading and debugging (L01)
`<script src="js/main.js" defer></script>` in `<head>`: downloads in parallel, runs after the HTML, in order. `async` = runs when it arrives (independent tags only). Plain `<script>` in `<head>` = blocks the page and can't find elements yet.
| Message | Means | Fix |
|---|---|---|
| `Cannot read properties of null (reading '…')` | Element not found | Check the selector in the Console; add `defer` |
| `… is not a function` | Wrong thing (NodeList, typo) | `console.log` it; `forEach` or delegation |
| `ReferenceError: x is not defined` | Typo or load order | Spelling; `defer` keeps order |
| `SyntaxError` | Broken code: the **whole file** stops | Click file:line; VS Code underlines it |
| `Failed to load resource: … 404` for `.js` | Wrong path or case | Network → read the red URL |
**DevTools:** Console (red = error, file:line link) · Network → **JS** filter, **More filters → 3rd-party requests** · **Show Coverage** (grey = unused) · **Disable JavaScript** (stays off in that tab while DevTools is open) · right-click → **Block request** (Request conditions).

## Basics and events (L02)
```js
const button = document.querySelector('.copy-button');   // find (null if none)
button.addEventListener('click', () => {                 // listen
  if (button.dataset.code === 'NILA10') {                // decide (=== not =)
    status.textContent = 'Copied NILA10';                // change text safely
    button.classList.add('is-done');                     // change looks via CSS
  }
});
```
`const` by default, `let` if it changes · `'2' + 2` = `'22'` → `Number(value)` · `querySelectorAll` returns a list (no `addEventListener`) · `textContent`, never user input into `innerHTML` · `<button type="button">`, never clickable `<div>`s · announce changes with `role="status"` · scroll: tiny work + `{ passive: true }` · **delegation:** one listener on the parent + `event.target.closest('button')`.

## Components (L03)
| Component | Build | Must |
|---|---|---|
| FAQ | `<details name="faq"><summary>Q</summary><p>A</p></details>` | No JS; one open at a time; focus ring on `summary` |
| Pop-up | `<dialog>` + `dialog.showModal()`; close with `<form method="dialog"><button>No thanks</button></form>` | After interest (`IntersectionObserver`/delay), once per visit (`sessionStorage`), Escape closes, never on load, no confirmshaming |
| Tabs | Buttons `role="tab"`, `aria-selected`, `aria-controls`; panels `role="tabpanel"` + `hidden` | One Tab stop (`tabindex="-1"` on others), ← → arrows |
| Countdown | `<time datetime="2026-12-01T09:00:00+05:30">` | Fixed real date + time zone, Pause button (WCAG 2.2.2), end state, never reset, no `aria-live` ticking |
`show()` ≠ `showModal()`: only `showModal()` keeps focus inside and closes on Escape.

## Forms that deliver (L04)
```html
<form action="https://formspree.io/f/<id>" method="post" novalidate>  <!-- works without JS -->
  <input id="email" name="email" type="email" required aria-describedby="email-error">
  <input type="text" name="_gotcha" tabindex="-1" autocomplete="off" class="visually-hidden" aria-hidden="true">
```
```js
form.addEventListener('submit', async (event) => {
  event.preventDefault();
  if (!email.checkValidity()) { /* message in #email-error, aria-invalid, focus */ return; }
  button.disabled = true;
  try {
    const res = await fetch(form.action, { method: 'POST', body: new FormData(form),
                                           headers: { Accept: 'application/json' } });
    status.textContent = res.ok ? 'Thanks! Check your inbox.' : 'Error: …';  // service's errors
  } catch { status.textContent = 'No connection. Try again.'; }
  finally { button.disabled = false; }
});
```
**Every field needs `name`** · `https://` only · thanks **only** on `response.ok` · honeypot · newsletter in Brevo/Mailchimp with **double opt-in** + consent line · Formspree Free: 50 submissions/month · nothing secret in `main.js`.

## Before you hand over
- [ ] One deferred `js/main.js`; Console clean live.
- [ ] Keyboard and screen-reader check of every component.
- [ ] JavaScript off: content readable, form submits.
- [ ] Real test submission arrived; double opt-in confirmed.
- [ ] No pop-up on load; no fake timers; plain "No thanks".
- [ ] Script audit done (own and third-party scripts, size, owner).
