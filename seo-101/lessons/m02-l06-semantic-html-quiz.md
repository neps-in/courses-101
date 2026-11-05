# M02.L06 Quiz — Semantic HTML for Content: article, header, nav, section, footer

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-06 against MDN (`<article>`, `<section>`, `<nav>`, `<main>`, `<div>`), W3C ARIA Authoring Practices (landmark regions), the WHATWG HTML Standard and Google Search Central (link best practices). Q5 rests on John Mueller's public comments, as reported by third parties.

### Q1. Which element suits a blog post that would make sense on its own? *(O1 · recall)*
- a) `<aside>`, because a post sits to one side of the site's menu
- b) `<nav>`, because the post is what readers came to the site for
- c) `<article>`, because it's a self-contained piece of content
- d) `<footer>`, because the post closes the page for the reader

**Answer:** c
**Explanation:** MDN describes `<article>` as "a self-contained composition", and a blog entry is one of its examples.
**Hint:** Would it still work if it appeared somewhere else?

### Q2. How many visible `<main>` elements can a page have? *(O1 · recall)*
- a) One, holding the content that's unique to that page
- b) Two, one for the content and one for the page's sidebar
- c) One for each `<section>` element that's used on the page
- d) As many as you like, as long as each one has a heading

**Answer:** a
**Explanation:** "A document mustn't have more than one `<main>` element" that isn't hidden. The checker reports a second one as an error.
**Hint:** What did the checker say in Part C?

### Q3. What do landmarks let screen reader users do? *(O2 · recall)*
- a) Hear every link on the page read out first, in order
- b) Hear the page's meta description before its content
- c) Turn off the page's images, so it loads more quickly
- d) Jump straight to the important parts of a page

**Answer:** d
**Explanation:** W3C says screen readers use landmark roles "to provide keyboard navigation to important sections of a page". So a reader can skip a long menu.
**Hint:** Think of Kavya's student and the 30 menu links.

### Q4. Amara has three paragraphs in a grey box. The box has no heading and is only there for looks. What should wrap them? *(O1 · scenario)*
- a) A `<section>`, as every group of content on a page needs one
- b) A `<div>`, as the box is only for styling and has no heading
- c) An `<article>`, since paragraphs must be inside an article
- d) A `<main>`, so that the box stands out from the other content

**Answer:** b
**Explanation:** MDN says: "If you are only using the element as a styling wrapper, use a `<div>` instead." A `<div>` is the right tool here.
**Hint:** What did the checker suggest for a section with no heading?

### Q5. A client asks, "If we switch to semantic HTML, will we rank higher?" What's the honest answer? *(O2 · scenario)*
- a) Yes, semantic elements are one of Google's top ranking factors
- b) Yes, but only if all of the `<div>`s on the site are removed
- c) No, and it's bad for SEO, so the site should keep using `<div>`s
- d) Don't expect that: it helps people, and may aid understanding

**Answer:** d
**Explanation:** John Mueller has said: "It's not a ranking factor, but it can help our systems to understand your content better." The clear benefit is for readers, especially screen reader users.
**Hint:** Check the claims table in this lesson.

### Q6. Tomás's Console list shows `NAV` three times, none with a label. What should he recommend? *(O3 · scenario)*
- a) Delete two of them, as a page may have only one `<nav>` element
- b) Give each a unique label, such as `aria-label="Footer links"`
- c) Change them all to `<div>`, because they can't be told apart
- d) Merge all three into a single `<nav>` at the top of the page

**Answer:** b
**Explanation:** A page can have several `<nav>` elements. W3C says that with more than one, "each should have a unique label", so screen reader users can tell them apart.
**Hint:** Is more than one `<nav>` allowed?

### Q7. Spot the error: "Each `<section>` resets the headings, so start every section with its own `<h1>`." *(O1 · spot the error)*
- a) Sections don't change levels; the number in the tag sets the level
- b) That only works inside `<article>`, where levels restart at `<h1>`
- c) Headings aren't allowed inside a `<section>` element in any case
- d) This only works if every `<section>` also has an `aria-label` on it

**Answer:** a
**Explanation:** Headings "have a heading level given by the number in their name". So keep the outline you built in Lesson 2.4, and let `<section>` wrap it.
**Hint:** What sets a heading's level?

### Q8. Spot the error: "Our menu items are `<span onclick="…">` elements, but they're inside a `<nav>`, so Google can follow them." *(spot the error · review: m02-l05)*
- a) A `<nav>` needs an `aria-label` before Google can follow its links
- b) A `<span>` needs a `title` attribute before Google can read it
- c) Only an `<a>` with an `href` is reliably crawlable, `<nav>` or not
- d) Google can't follow any links that are placed inside of a `<nav>`

**Answer:** c
**Explanation:** As you saw in Lesson 2.5, Google can generally only crawl an `<a>` with an `href`. Wrapping a script in a `<nav>` doesn't turn it into a link.
**Hint:** What makes a link crawlable?
