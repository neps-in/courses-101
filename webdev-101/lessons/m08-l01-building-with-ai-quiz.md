# M08.L01 Quiz — Building with AI Assistants

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-03 against MDN (`innerHTML`, `textContent`), OWASP DOM XSS cheat sheet, WCAG 2.2 (2.2.2, 4.1.2) and summaries of Spracklen et al. (USENIX Security 2025).

### Q1. Which prompt is most likely to give you code you can review and use? *(O1 · recall)*
- a) "Make my landing page look a lot more modern and professional, please."
- b) "Write a countdown banner. Make it really cool and add some animations."
- c) "Countdown banner: vanilla JS, a named button, textContent, no libraries."
- d) "Build the whole landing page again, with every single feature you think it needs."

**Answer:** c
**Explanation:** It gives context and constraints the code can be checked against: no frameworks, an accessible button, safe text handling, no third-party scripts. Vague asks ("modern", "cool") or "build everything" produce large, unpredictable output that's slow to review.
**Hint:** Which one could you turn into a checklist?

### Q2. An AI suggests `<script src="https://cdn.jsdelivr.net/npm/easy-countdown-timer-pro@2/…">`. What should you do before using it? *(O2 · recall)*
- a) Look it up on the official registry and check it's real and maintained
- b) Trust it, since jsDelivr is a well-known CDN for safe packages
- c) Add `defer` to the tag, which makes any third-party script safe to load
- d) Ask the same AI whether the package exists, and accept whatever it answers

**Answer:** a
**Explanation:** AI tools sometimes invent package names (a 2025 study found at least 5.2% of packages suggested by commercial models, and 21.7% by open-source models, didn't exist), and attackers can register those names ("slopsquatting"). A CDN serves whatever is published under the name, `defer` only changes *when* a script runs, and the AI that invented the name may confirm it again.
**Hint:** Who is the authority on whether a package exists?

### Q3. Why is `el.innerHTML = 'Hi ' + nameFromUrl` dangerous? *(O2 · recall)*
- a) `innerHTML` is deprecated and will stop working in browsers soon
- b) Text from the URL is parsed as HTML, so a crafted link runs script
- c) `innerHTML` is slower than `textContent` and hurts the LCP score
- d) Names with accents can't be shown with `innerHTML` in most browsers

**Answer:** b
**Explanation:** Anyone can put markup such as `<img src=x onerror=…>` in a link's query string. `innerHTML` turns it into real elements, and the `onerror` code runs: DOM-based cross-site scripting. `textContent` shows the same text safely. `innerHTML` isn't deprecated and handles accents fine; speed isn't the problem here.
**Hint:** Who controls what's in the URL?

### Q4. Amara's AI-built testimonial carousel rotates every 4 seconds forever, with no controls. Which change fixes the WCAG problem? *(O2 · scenario)*
- a) Slow the rotation down to every 10 seconds so people have time to read
- b) Add `aria-live="assertive"` so screen readers announce every new slide
- c) Add a visible Pause button, or don't rotate automatically at all
- d) Hide the carousel from screen readers with `aria-hidden="true"`

**Answer:** c
**Explanation:** WCAG 2.2.2 (Pause, Stop, Hide) says content that moves automatically for more than 5 seconds needs a way to pause, stop or hide it. Slower rotation still never stops, assertive announcements would interrupt users constantly, and hiding it removes the testimonials for screen-reader users.
**Hint:** What does criterion 2.2.2's name tell you to provide?

### Q5. You paste AI code into a branch. It works, but the Network panel now shows a request to an analytics service you never asked for. What's the right call? *(O3 · scenario)*
- a) Keep it, since extra analytics data is useful for the launch later on
- b) Merge it, and mention the request in the privacy notice next month
- c) Keep it, but only on pages that don't have the consent banner on them
- d) Remove it, log why in `ai-log.md`, then re-check consent and merge

**Answer:** d
**Explanation:** Unrequested tracking bypasses the consent setup from Module 6 and may break the law where consent is required. Reject that part, record the decision, and confirm the consent banner still blocks tracking until Accept. Adding it "for later" or excusing it in the notice doesn't fix tracking before consent.
**Hint:** Checklist area: private and consistent.

### Q6. Spot the error. This AI-written close control looks fine with a mouse. What's wrong? *(O2 · spot-the-error)*
```html
<div class="close" onclick="this.parentNode.remove()">
  <svg width="16" height="16" viewBox="0 0 16 16"><path d="M2 2l12 12M14 2L2 14"/></svg>
</div>
```
- a) The SVG must be replaced with a PNG image so screen readers can see it
- b) It's a `div`: keyboard users can't reach it and it has no name at all
- c) `onclick` handlers must always be written in a separate `.js` file
- d) `parentNode.remove()` only works in Chrome, so other browsers fail

**Answer:** b
**Explanation:** A `div` isn't focusable and has no role or name, so keyboard and screen-reader users can't close the banner (WCAG 4.1.2). Use `<button type="button" aria-label="Close launch banner">` with `aria-hidden="true"` on the SVG. An image format change doesn't add a name, inline handlers aren't the core problem, and `remove()` works in all modern browsers.
**Hint:** Press Tab. Does focus ever land on it?

### Q7. *(review: m07-l03)* After the AI change, which test finds a control that is focusable but hidden under your sticky header? *(O2 of M07.L03 · recall)*
- a) The W3C HTML validator, which reports any hidden focus problems
- b) The Lighthouse Performance score on a mobile test run
- c) Tabbing through the page yourself, watching where focus lands
- d) Reading the page's source with View Source in the browser

**Answer:** c
**Explanation:** Focus Not Obscured (WCAG 2.4.11) depends on layout and scrolling, so you find it by tabbing and looking. The validator checks markup, Performance doesn't measure focus, and View Source can't show where things appear on screen.
**Hint:** Lesson 7.3's second audit pass.
