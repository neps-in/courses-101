# M02.L01 Quiz — Anatomy of an HTML Page

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Validator messages checked live against the W3C Nu HTML Checker on 2026-11-02.

### Q1. In `<a href="/subscribe" class="cta">Start now</a>`, what is `href="/subscribe"`? *(O2 · recall)*
- a) An attribute that gives the link its destination
- b) The content of the element, shown on the page
- c) The end tag that closes the link element
- d) A comment that the browser ignores completely

**Answer:** a
**Explanation:** Attributes sit inside the start tag as `name="value"` and add information to the element. Here `href` tells the link where to go. The content is "Start now", the end tag is `</a>`, and comments look like `<!-- … -->`.
**Hint:** It's written as `name="value"` inside the start tag.

### Q2. Which line makes phones show the page at their real screen width instead of a zoomed-out desktop view? *(O1 · recall)*
- a) `<meta name="description" content="Fresh coffee beans, monthly">`
- b) `<meta http-equiv="content-type" content="text/html; charset=utf-8">`
- c) `<meta name="viewport" content="width=device-width, initial-scale=1">`
- d) `<meta name="theme-color" content="#3b2414" media="(max-width: 600px)">`

**Answer:** c
**Explanation:** The viewport meta tag tells mobile browsers to use the device's width. The description is a summary for search results (Lesson 2.5), the `http-equiv` line is an older way to declare the character set, and `theme-color` tints the browser's toolbar on some phones. None of them changes the layout width. The validator won't warn you about a missing viewport tag, so you have to remember it.
**Hint:** "Port" as in the window you view the page through.

### Q3. Ama's page shows `â‚¹499` instead of `₹499`. Everything else looks fine. What's the most likely fix? *(O1 · scenario)*
- a) Add `lang="en-IN"` to the `<html>` start tag
- b) Add `<meta charset="utf-8">` and save the file as UTF-8
- c) Wrap the price in `<strong>` so the browser notices it
- d) Move the price paragraph into the page's `<head>`

**Answer:** b
**Explanation:** Garbled symbols are an encoding problem. The browser read the bytes with the wrong character set. Declaring UTF-8 (first in the head) and saving the file as UTF-8 fixes it. `lang` affects language handling, not encoding; `<strong>` only adds emphasis; and visible content never belongs in the head.
**Hint:** Which head line is about *characters*?

### Q4. You paste a page into the W3C checker and get 14 errors, the first three on the same line. What's the smartest next step? *(O3 · scenario)*
- a) Ignore them, since the page looks fine in Chrome
- b) Delete the line and all of the content on it
- c) Start fixing from the last error and work backwards
- d) Fix the first error, then check the page again

**Answer:** d
**Explanation:** One mistake, such as a crossed or unclosed tag, often triggers several messages, as you saw in Part C (one nesting error gave three messages). Fixing the first one and re-checking often clears many of the others. "It looks fine in Chrome" just means Chrome's repair worked this time.
**Hint:** How many messages did one nesting mistake cause in Part C?

### Q5. Joon's team is adding a sign-up section to a WordPress page with a **Custom HTML** block. He pastes a complete page there, starting with `<!DOCTYPE html>` and including `<head>` and `<title>`. What's the problem? *(O1 · scenario)*
- a) Custom HTML blocks can't contain any HTML tags
- b) Nothing: a full skeleton always makes a block more valid
- c) It nests a whole page inside a page that has a head
- d) WordPress needs the sign-up section written in XML instead

**Answer:** c
**Explanation:** Tools like WordPress blocks, CodePen and email builders already provide the doctype, head and body. A body-only snippet is right there. A second doctype and head inside the body is invalid, and the browser has to repair it.
**Hint:** Part A: what did CodePen write for you behind the scenes?

### Q6. Spot the error. Which part of this snippet is wrong? *(O2 · spot-the-error)*
```html
<p>Fresh beans <em>every <strong>month</em></strong>.</p>
```
- a) `</em>` closes before `</strong>`, so the tags cross
- b) `<em>` can't be used inside a paragraph
- c) The full stop must go inside the `<strong>` tag
- d) `<strong>` is a void element and needs no end tag

**Answer:** a
**Explanation:** `<strong>` was opened last, so it must close first: `<em>every <strong>month</strong></em>`. Crossed tags force the browser to guess. `<em>` belongs inside paragraphs, punctuation placement is a style choice, and `<strong>` is not a void element.
**Hint:** Last opened, first closed.

### Q7. *(review: m01-l05)* You edit your `index.html` headline in the DevTools Elements panel, then open View Source. What do you see? *(O2 of M01.L05 · recall)*
- a) The new headline, because DevTools saved the change to the file
- b) Nothing, because View Source doesn't work for local `file:///` pages
- c) Both headlines, side by side, so you can compare them
- d) The original headline, as it was loaded from the file

**Answer:** d
**Explanation:** DevTools edits change only the live DOM in that tab. View Source shows the HTML that was actually loaded, which is your unchanged file. View Source works for local files too. To make the change real, edit the file and reload.
**Hint:** Which one is the "printed brochure", and which is your tracing paper?
