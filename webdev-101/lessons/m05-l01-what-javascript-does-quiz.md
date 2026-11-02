# M05.L01 Quiz — What JavaScript Does (and Breaks)

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against MDN (script element, troubleshooting JavaScript) and Chrome DevTools docs; error messages reproduced in headless Chrome 156.

### Q1. Which job can JavaScript do that HTML and CSS can't? *(O1 · recall)*
- a) Set the page's fonts, colours and the spacing between sections
- b) Mark up headings, paragraphs and links so screen readers follow
- c) Send a form's data in the background and show a thank-you note
- d) Make the layout switch to one column on screens below 600 px

**Answer:** c
**Explanation:** Sending data without reloading (and changing the page afterwards) is behaviour, which is JavaScript's job. Fonts, colours, spacing and responsive layout are CSS; headings, paragraphs and links are HTML.
**Hint:** Content, look, behaviour: which one is this?

### Q2. What does `defer` do on `<script src="js/main.js" defer>`? *(O1 · recall)*
- a) It runs the script once, then deletes it from the page's code
- b) It runs the script only after the visitor first clicks something
- c) It waits for a cookie banner to be accepted before running it
- d) It downloads in parallel and runs after the HTML has been parsed

**Answer:** d
**Explanation:** A deferred script downloads while the browser keeps reading the HTML, then runs after parsing, in the order the deferred scripts appear. So your elements exist when it runs. It isn't tied to clicks or consent (consent is Module 6).
**Hint:** When do the page's elements exist?

### Q3. Which DevTools tool shows how much of each downloaded script was actually used? *(O3 · recall)*
- a) The Console, which counts each script's errors and warnings
- b) Coverage, which marks used and unused code in every script file
- c) The Elements panel, which lists every script tag in the page head
- d) Lighthouse's accessibility score for each script on the page

**Answer:** b
**Explanation:** The Coverage tool (Command Menu → Show Coverage) shows used versus unused bytes per file. The Console reports errors, Elements shows the markup, and accessibility scores aren't per script.
**Hint:** Think "how much of it covered what the page needed".

### Q4. Sign-ups dropped to zero after a chat widget was added. The page looks fine. What should you check first? *(O2 · scenario)*
- a) The Console for red errors, and whether the form script still runs
- b) The page's colour contrast, in case the button became hard to read
- c) The domain's DNS records, in case the site has moved to a new host
- d) The image file sizes, in case the hero has become too heavy to load

**Answer:** a
**Explanation:** A broken or conflicting script can stop the form working while the page looks normal. The Console shows red errors with a file:line link, and testing the form shows whether its script runs. Contrast, DNS and image weight would cause other, visible symptoms.
**Hint:** The page looks fine, so the problem is behaviour.

### Q5. You turn JavaScript off on your launch page and the lead form can no longer be submitted. What does that tell you? *(O3 · scenario)*
- a) Nothing useful, since every real visitor has JavaScript switched on
- b) The form relies on JavaScript; give it a working HTML `action` too
- c) The form is fine, because forms are not meant to work without JS
- d) The page must be rebuilt with a framework so forms never break

**Answer:** b
**Explanation:** Scripts fail more often than people think (blocked, slow, a broken third-party tag). Progressive enhancement keeps the main action working with HTML alone (a real `action`), then improves it with JavaScript (Lesson 5.4). A framework adds more script, not less.
**Hint:** What should still work if every script fails?

### Q6. Spot the error. This is in `<head>`, and the Console says `Cannot read properties of null (reading 'addEventListener')`. What's the fix? *(O2 · spot-the-error)*
```html
<script src="js/main.js"></script>
```
```js
// js/main.js
const button = document.querySelector('.button');
button.addEventListener('click', () => console.log('CTA clicked'));
```
- a) Add `async` so the script loads faster than the rest of the page
- b) Move the `<link>` stylesheet below the script tag in the `<head>`
- c) Add `defer`, so the script runs after the button exists in the page
- d) Rename `main.js` to `main.html` so the browser can read it properly

**Answer:** c
**Explanation:** Without `defer`, the script runs while the browser is still in `<head>`, before the button exists, so `querySelector` returns `null`. `defer` runs it after the HTML is parsed (checked). `async` may still run too early, stylesheet order doesn't matter here, and scripts are `.js` files.
**Hint:** When did the script run, and where was the button then?

### Q7. *(review: m04-l03)* Your `main.js` works locally on your Mac but gives a 404 on the live site. The tag says `src="js/Main.js"`. Why? *(O3 of M04.L03 · scenario)*
- a) GitHub Pages can't serve JavaScript files from any free account
- b) Scripts need `async` before they can load on any live website
- c) Live servers treat `Main.js` and `main.js` as different files
- d) The script must be put in the root folder, not inside `js/` at all

**Answer:** c
**Explanation:** Macs and Windows ignore letter case; GitHub Pages doesn't, so `Main.js` is a different, missing file (404). Match the `src` to the real name. GitHub Pages serves JS normally, `async` is unrelated, and folders are fine.
**Hint:** Lesson 4.3: what's stricter live than local?
