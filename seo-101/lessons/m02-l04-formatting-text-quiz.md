# M02.L04 Quiz — Formatting Text: Headings, Paragraphs, Lists, Bold & Italic

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-06 against MDN (heading elements, `<br>`, `<ol>`, `<strong>`, `<em>`), W3C WAI (headings) and Google Search Central (SEO Starter Guide, title links). The valid page metadata fact in Q8 was checked 2026-11-04 for Lesson 2.3.

### Q1. What should a page's `<h1>` do? *(O1 · recall)*
- a) Hold the largest text on the page, whatever that text happens to say
- b) Repeat the site's name, so that every page starts with the same words
- c) Name the main topic of the page, much like the page's own title does
- d) List the page's target keywords, so that Google can read them first

**Answer:** c
**Explanation:** MDN says a page should generally have a single `<h1>` that "describes the content of the page". Size comes from CSS, so being large isn't what makes text an `<h1>`.
**Hint:** Think of the title on the cover of a recipe book.

### Q2. How do you decide between `<ol>` and `<ul>`? *(O2 · recall)*
- a) Change the order of the items: if the meaning changes, use `<ol>`
- b) Count the items: use `<ol>` for lists that have more than five items
- c) Look at the design: use `<ol>` if you'd like to show numbers, not dots
- d) Check the length: use `<ul>` for items of only one or two short words

**Answer:** a
**Explanation:** MDN's test is to try changing the order of the items. Recipe steps break if you shuffle them, so they're an `<ol>`. Ingredients don't, so they're a `<ul>`.
**Hint:** What happens if you shuffle the steps of a recipe?

### Q3. What's the difference between `<strong>` and `<em>`? *(O2 · recall)*
- a) `<strong>` is for headings, while `<em>` is for the text in paragraphs
- b) `<strong>` is the old form of the tag, and `<em>` is the modern version
- c) `<strong>` helps a page to rank, while `<em>` only changes how the text looks
- d) `<strong>` marks importance, while `<em>` marks stress that changes meaning

**Answer:** d
**Explanation:** `<strong>` is for "strong importance, seriousness, or urgency". `<em>` marks stress emphasis, which can change a sentence's meaning. Neither one should be used only for looks.
**Hint:** Which one would you hear if you read the sentence aloud?

### Q4. Amara uses `<h4>` for her main sections because `<h2>` looks too big in the client's theme. What should she do? *(O1 · scenario)*
- a) Keep the `<h4>`, because Google says that heading order doesn't matter
- b) Use `<h2>` for the sections, and resize it with CSS or a theme setting
- c) Replace the headings with bold paragraphs, which keep the size she wants
- d) Change the `<h1>` to an `<h3>`, so the levels are closer to each other

**Answer:** b
**Explanation:** Choose the level by structure and the size with CSS. MDN says: "Do not use heading elements to resize text." Order may not matter to Google Search, but it matters to screen reader users.
**Hint:** Which job belongs to HTML, and which one belongs to CSS?

### Q5. Tomás's product page outline reads `H1 Free delivery this week` then `H1 Claw Hammer 500 g`. What's the best fix? *(O3 · scenario)*
- a) Keep both, because the checker reports no errors for this page at all
- b) Swap the two headings, and leave the delivery promo as a second `<h1>`
- c) Change the promo to `<h6>`, because it's the least important heading
- d) Make the promo a paragraph, and keep the product as the only `<h1>`

**Answer:** d
**Explanation:** The promo doesn't name a section, so it isn't a heading at all. With several large headings, Google "may use the first heading as the text for the title link", so it could also pick the promo.
**Hint:** Does "Free delivery this week" name the section below it?

### Q6. Kavya types her class rules as lines split with `<br>` tags, with an empty `<p></p>` below for spacing. What should she change? *(O2 · scenario)*
- a) Put the rules in a list, and leave the spacing to CSS, not an empty `<p>`
- b) Keep the `<br>` tags, and add more empty paragraphs to make it look neater
- c) Make each rule an `<h3>` heading, so that all of the rules stand out well
- d) Wrap all the rules in one `<strong>`, so they're marked as important text

**Answer:** a
**Explanation:** MDN keeps `<br>` for breaks that belong to the content, such as a poem or an address. A group of rules is a list. Empty paragraphs cause problems for screen reader users, and CSS should handle spacing.
**Hint:** What is this text: a poem, or a group of similar items?

### Q7. Spot the error in this audit note: "The H3 comes before the H2 here, so this page can't rank until we fix it." *(O3 · spot the error)*
- a) Headings have no effect on people, so there's no need to fix it at all
- b) An H3 is allowed to come first, since the heading levels are only sizes
- c) Google says order doesn't matter for Search; the fix is for readers
- d) The page can't rank for a different reason: it needs a second H1 tag

**Answer:** c
**Explanation:** Google says semantic order is "fantastic for screen readers", but for Search "it doesn't matter". It's still worth fixing, for the right reason. Don't promise a client a ranking gain from it.
**Hint:** Check the table of claims in this lesson.

### Q8. Spot the error: "I put my `<h1>` at the top of the `<head>`, so Google will read it first." *(spot the error · review: m02-l03)*
- a) The `<h1>` needs to go after the `<title>`, but it can stay in the head
- b) An `<h1>` isn't allowed in the head, so Google stops reading there
- c) Google never reads headings at all, wherever they appear on the page
- d) The head is fine, but the `<h1>` also needs a closing tag to work there

**Answer:** b
**Explanation:** As you saw in Lesson 2.3, only elements such as `title`, `meta` and `link` belong in the head. At anything else, Google "assumes the end of the `<head>` element", so it can miss the tags after it. Headings belong in the body.
**Hint:** Which elements are allowed in the head?
