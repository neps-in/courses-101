# M05.L03 Quiz — Clean Structure in the Block Editor

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against WordPress.org block docs, the WordPress 7.1 editor scripts and Google's SEO Starter Guide.

### Q1. When does the 7.1 Outline show "(Incorrect heading level)"? *(O1 · recall)*
- a) When a heading has more than ten words in it, on any page
- b) When a heading jumps more than one level deeper, like H2 to H4
- c) When an H3 comes straight after an H2 anywhere in the content
- d) When a page has more than five headings of any level in total

**Answer:** b
**Explanation:** The editor flags a heading whose level is more than one deeper than the one before it. Going back up, such as H3 to H2, isn't flagged.
**Hint:** Think about skipping a step.

### Q2. What does Google's Starter Guide say about heading order? *(O1 · recall)*
- a) Out-of-order headings get a ranking penalty from Google's systems
- b) Headings must go H1, H2, H3 or Google won't index the page at all
- c) Each page needs exactly one H2 for every 300 words of its text
- d) Order helps screen readers, but doesn't matter for Google Search

**Answer:** d
**Explanation:** "Having your headings in semantic order is fantastic for screen readers, but from Google Search perspective, it doesn't matter if you're using them out of order." The course keeps order for readers.
**Hint:** Two audiences, two answers.

### Q3. What does WordPress's Table block documentation say tables are best for? *(O2 · recall)*
- a) Tabulated data rather than page design; use Columns for layout
- b) Page design, such as putting a photo next to a block of text
- c) Headings, because table cells are bigger and easier to read
- d) Anything at all, because tables are always mobile-friendly

**Answer:** a
**Explanation:** "Remember that tables are best used for tabulated data rather than page design. For example, if you want columns, you can use the Columns block."
**Hint:** Rows and columns of what?

### Q4. Amara wants a heading to look smaller, so she sets it to H5 under an H2. What should she do instead? *(O1 · scenario)*
- a) Keep H5, because smaller levels help Google find the important words
- b) Turn it into a bold paragraph, which keeps the size and drops the level
- c) Use H3, and change its font size in the block's Typography settings
- d) Use an H1, and change its colour so that it looks like the body text

**Answer:** c
**Explanation:** Pick the level for the outline, then style it. H5 under H2 skips levels and shows **(Incorrect heading level)**. A bold paragraph isn't a heading at all.
**Hint:** Level for structure, style for looks.

### Q5. Tomás adds a product photo in an Image block. Which settings should he check? *(O3 · scenario)*
- a) None, because WordPress writes the alt text from the file name itself
- b) Only the caption, since Google reads captions instead of alt text
- c) Mark as decorative, so the photo loads faster on mobile devices
- d) **Alternative text** describing the product, and a fitting **Resolution**

**Answer:** d
**Explanation:** A product photo adds information, so it needs alt text (Lesson 4.4). **Resolution** picks a size that looks sharp without being oversized. **Mark as decorative** is only for images that add nothing.
**Hint:** Is the photo information or decoration?

### Q6. Kavya's synced "Book a class" pattern is on 30 pages. Its link points to an old class. What's the quickest fix? *(O2 · scenario)*
- a) Edit the synced pattern once, so every page that uses it updates
- b) Edit each of the 30 pages one at a time, so nothing else changes
- c) Delete the pattern, then add a new link by hand on all 30 pages
- d) Turn the pattern into a table, so the link can be updated faster

**Answer:** a
**Explanation:** "Editing the synced pattern will update it anywhere it is used." That's also why every link in a synced pattern must make sense on every page.
**Hint:** What does "synced" mean?

### Q7. Spot the error: "Our draft's section titles are bold, so they're headings for Google and screen readers." *(O1 · spot the error)*
- a) Bold text counts as a heading only if it's also in a larger font size
- b) Bold text in a paragraph is still a paragraph; use a Heading block
- c) Bold text is a heading only when it starts with two hash characters
- d) Bold text is fine for Google, and only screen readers need H2s

**Answer:** b
**Explanation:** `<p><strong>…</strong></p>` isn't a heading. It doesn't appear in the Outline, and screen-reader users can't jump to it.
**Hint:** Check the Outline.

### Q8. Spot the error: "We have 40 tags used once each, but WordPress hides tag pages from Google, so it's fine." *(spot the error · review: m05-l02)*
- a) Tag pages are hidden from Google, but they're shown to Bing instead
- b) WordPress hides tag pages only on sites with fewer than 50 posts
- c) Core adds no `noindex` to tag archives, and lists them in the sitemap
- d) WordPress deletes tags used once, so there are no tag pages at all

**Answer:** c
**Explanation:** As you saw in Lesson 5.2, core adds `noindex` only to search results and non-public sites. Forty one-post tags mean forty thin archives in your sitemap.
**Hint:** In Lesson 5.2, what did a tag archive's source show?
