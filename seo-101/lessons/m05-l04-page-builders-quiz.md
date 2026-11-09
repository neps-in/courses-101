# M05.L04 Quiz — Page Builders vs the Block Editor: When Each Makes Sense

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against the Web Almanac 2024 and 2025 CMS chapters, Google Search Central (page experience, Core Web Vitals) and reported Google comments.

### Q1. What does the Web Almanac 2025 say about page builders and performance? *(O1 · recall)*
- a) They make every page exactly 70% slower than the block editor does
- b) They often add complex markup and larger CSS and JavaScript bundles
- c) They have no effect on speed, because browsers ignore unused code
- d) They are penalised by Google, so pages built with them can't rank

**Answer:** b
**Explanation:** The chapter says builders "often generate more complex DOM structures and larger CSS and JavaScript bundles, raising performance risks at scale". It gives no per-builder percentage.
**Hint:** It's a general statement, not a number.

### Q2. What does Google say about page experience and relevance? *(O1 · recall)*
- a) Page experience matters more than relevance for every single query
- b) Pages with poor Core Web Vitals are removed from Google's index
- c) Relevance comes first; good page experience helps when content is close
- d) Page experience is ignored, so speed has no effect on Google Search

**Answer:** c
**Explanation:** "Google Search always seeks to show the most relevant content, even if the page experience is sub-par." When there's lots of helpful content, "a great page experience can contribute to success".
**Hint:** Which comes first?

### Q3. Which is the course's advice for a brand-new WordPress site? *(O2 · recall)*
- a) Install two page builders, so you can switch if one is slow
- b) Use a page builder, because Google prefers builder-made pages
- c) Avoid WordPress, since every theme is too slow for Google Search
- d) A block theme and the editor first; a builder only if needed

**Answer:** d
**Explanation:** The block editor is built in and usually lighter. Consider a builder only for a layout the editor truly can't make, and test one page's weight first.
**Hint:** Start simple.

### Q4. Kavya's builder page has three H1s, all slogans in big type. What should she do? *(O3 · scenario)*
- a) Keep one H1 for the page's topic, and style the slogans as paragraphs
- b) Make all three H2s, so that the page has no H1 heading at all
- c) Add three more H1s, so that every slogan gets the same weight
- d) Change them to H6, because smaller headings carry more SEO value

**Answer:** a
**Explanation:** One H1 names the page (non-negotiable #3). Slogans aren't section titles, so they're paragraphs with a large font size, or H2s only where they start a real section.
**Hint:** Level for structure, style for size.

### Q5. Tomás's product pages load a builder's slider files, but no page has a slider. What should he check first? *(O2 · scenario)*
- a) Whether Google penalises sliders, so he can delete the whole builder
- b) The builder's settings for loading its files only where they're used
- c) Whether a second builder could load the slider files more quickly
- d) Nothing, because files that aren't used have no effect on loading

**Answer:** b
**Explanation:** Loading files everywhere is a known cost. The Almanac notes builders that "avoid global asset loading" limit performance costs. Adding a second builder makes it worse.
**Hint:** Where do the extra files come from?

### Q6. Amara compares a heavy page and a clean page in DevTools. Which check shows the difference in page weight? *(O3 · scenario)*
- a) The **Network** panel's total transferred, after a reload with cache off
- b) The number of words in the page's meta description tag
- c) The colour of the headings in the block editor's style settings panel
- d) The page's position in Google, checked once on the same afternoon

**Answer:** a
**Explanation:** The Network total shows how much the page downloads. Ticking **Disable cache** and reloading gives a fair comparison.
**Hint:** Which panel counts downloads?

### Q7. Spot the error: "Google measures code-to-text ratio, so pages with lots of builder code get penalised." *(O1 · spot the error)*
- a) Google measures it only on mobile, so desktop pages are safe
- b) Google penalises only pages with more than 1,000 `<div>` elements
- c) Code-to-text ratio counts only for pages built with Elementor
- d) Mueller said there's no such ratio; the risk is slower pages

**Answer:** d
**Explanation:** Asked about "text to code ratio", Mueller said "no", calling it "a design thing, not a content thing". Heavy code matters only because it can slow the page.
**Hint:** Is the ratio itself a signal?

### Q8. Spot the error: "Our steps are lines starting with dashes in a paragraph, so they're a real list." *(spot the error · review: m05-l03)*
- a) Dashes count as a list only if each line also starts in bold text
- b) A list is real only if it's inside a table with a header section
- c) Dashed lines are still a paragraph; use a List block for a real list
- d) Google turns dashed lines into lists, so no change is ever needed

**Answer:** c
**Explanation:** As you saw in Lesson 5.3, each block becomes an HTML element. Typing `- ` at the start of a new block makes a List block, which becomes `<ul>`.
**Hint:** In Lesson 5.3, what does each block become?
