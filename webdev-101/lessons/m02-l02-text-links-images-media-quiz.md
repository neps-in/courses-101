# M02.L02 Quiz — Text, Links, Images & Media

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 (MDN, W3C WAI alt decision tree, Google Search Central link attributes). Lesson code validated live with the W3C Nu HTML Checker.

### Q1. A row of small leaf graphics separates two sections of a page. They add no information. What should their `alt` be? *(O3 · recall)*
- a) Leave the `alt` attribute out completely
- b) `alt=""`, an empty alt, so screen readers skip them
- c) `alt="leaf"`, so people know what the picture shows
- d) `alt="decorative divider image of green leaves"`

**Answer:** b
**Explanation:** Decorative images get an *empty* alt. A missing alt is an error, and some screen readers then read the file name instead. Describing decoration ("leaf") adds noise for screen-reader users without adding meaning.
**Hint:** Check the first branch of the alt flowchart.

### Q2. Which link text is best for a button that opens Nila Coffee's pricing page? *(O2 · recall)*
- a) `Click here`
- b) `Read more`
- c) `https://nilacoffee.example/pricing`
- d) `See subscription prices`

**Answer:** d
**Explanation:** Link text should name the destination so it makes sense on its own, which matters for screen-reader users who jump between links and for search engines. "Click here" and "Read more" say nothing out of context, and a raw URL is hard to read aloud.
**Hint:** Imagine hearing *only* the link text, with nothing around it.

### Q3. Your company logo sits in the header and links to the homepage. It's the only thing inside the link. What alt text should it have? *(O3 · scenario)*
- a) `alt="Nila Coffee home"`, the link's destination
- b) `alt=""`, because logos are always decorative
- c) `alt="Nila Coffee logo, brown, round, 200 pixels"`
- d) `alt="best coffee subscription India buy beans"`

**Answer:** a
**Explanation:** When an image is the only content of a link, its alt is the link's text, so it should say where the link goes. An empty alt leaves a link with no name. A visual description doesn't say what the link does. Keyword stuffing is unhelpful for people and can count as spam.
**Hint:** Flowchart branch two: what does the link *do*?

### Q4. Reza's launch page jumps down by half a screen when the hero image loads on mobile, and visitors tap the wrong button. What should he add to the `<img>`? *(O3 · scenario)*
- a) `loading="lazy"`, so the image loads later
- b) A longer `alt` text that describes the whole hero image
- c) The image's real `width` and `height` attributes
- d) `target="_blank"`, so the image opens somewhere else

**Answer:** c
**Explanation:** With `width` and `height`, the browser knows the image's shape and reserves the space before the file arrives, so nothing jumps. That jump is "layout shift" (Module 7). Lazy-loading the hero would make it appear *later*, and alt text and `target` don't affect layout.
**Hint:** How can the browser know how much room to save before the file arrives?

### Q5. Priya writes a review of a grinder and links to it through an affiliate programme. Which markup follows Google's guidance *and* tells readers? *(O2 · scenario)*
- a) `<a href="…" target="_blank">Burr Grinder (opens new tab)</a>`
- b) `<a href="…" rel="sponsored">Burr Grinder (affiliate)</a>`
- c) `<a href="…">Burr Grinder</a>`, with no extra attributes
- d) `<a href="…" rel="noopener">Burr Grinder (our pick)</a>`

**Answer:** b
**Explanation:** Google asks for affiliate and paid links to be marked `rel="sponsored"` (`nofollow` is also accepted), and readers need a visible disclosure such as "(affiliate link)". `target="_blank"` and `noopener` are about tabs and security, not disclosure.
**Hint:** Two audiences: search engines (an attribute) and people (visible words).

### Q6. Spot the error. Which line in this snippet breaks the same-page link? *(O2 · spot-the-error)*
```html
<p><a href="#signup">Join the launch list</a></p>
…
<h2 id="SignUp">Join the launch list</h2>
```
- a) Same-page links need the full `https://` address
- b) `<a>` elements can't be placed inside a paragraph
- c) Headings aren't allowed to have an `id` attribute
- d) `#signup` and `id="SignUp"` differ in letter case

**Answer:** d
**Explanation:** `id` values are case-sensitive, so `#signup` doesn't match `SignUp`, and the link goes nowhere. Use exactly the same text in both places, ideally lowercase. Same-page links don't need a full address, links belong inside paragraphs, and any element can have an `id`.
**Hint:** Compare the two names letter by letter.

### Q7. *(review: m01-l03)* In the Network panel, the row for `images/bean.jpg` shows status **404**. What does that mean? *(O1 of M01.L03 · recall)*
- a) The server answered: no file exists at that address
- b) The image is too large for the browser to display
- c) Your browser blocked the image for security reasons
- d) The image moved and the browser followed a redirect

**Answer:** a
**Explanation:** 404 is "not found": the request reached the server (or your computer's file system), but nothing exists at that path, here because of a missing letter. A redirect would be 301/302, and size or security blocks show differently.
**Hint:** 4xx means a problem with the request, usually a wrong address.
