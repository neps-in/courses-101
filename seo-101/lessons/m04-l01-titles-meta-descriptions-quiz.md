# M04.L01 Quiz — Title Tags and Meta Descriptions: What Searchers See First

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Search Central (title links, snippets, pagination), the Search Central blog (2009, 2021) and Blogger Help.

### Q1. Where does Google's title link in the results usually come from? *(O2 · recall)*
- a) The first sentence of the page's main text, chosen fresh for every search
- b) The page's `<title>` element, unless Google finds an issue with it
- c) The meta description, which Google shortens into one clickable line
- d) A title the site owner submits to Google through Search Console

**Answer:** b
**Explanation:** Google starts from the `<title>` element and used it "around 87% of the time" in 2021. If it finds an issue, it may build one from headings or other text. You can't submit a title in Search Console.
**Hint:** Which element have you been writing all lesson?

### Q2. What does Google say about meta descriptions? *(O3 · recall)*
- a) They're a strong ranking factor, so put your main keyword in twice
- b) They're always shown as the snippet, exactly as you've written them
- c) They're no longer read by Google at all, so you can leave them out
- d) They're a pitch, and Google may use one if it fits the page better

**Answer:** d
**Explanation:** Google calls a description "like a pitch" and "primarily uses the content on the page" for the snippet, using the description "when it describes the page better". Its only statement on ranking (2009) says descriptions aren't used for it.
**Hint:** Think of a shop window, not a scoreboard.

### Q3. Which pages does Google say can share a title? *(O1 · recall)*
- a) Pages in a paginated sequence, such as page 2 and page 3 of a category
- b) All product pages in one shop, as long as the brand name comes first
- c) Any two pages with the same intent, because Google merges them anyway
- d) Blog posts in the same category, since the category name is the topic

**Answer:** a
**Explanation:** Google says "pages in a paginated sequence don't need to follow this recommendation. You can use the same titles and descriptions for all pages in the sequence." Every other indexable page needs its own title.
**Hint:** Which pages are really one list split up?

### Q4. Amara writes for a client whose 30 recipe posts are all titled "Recipe | Spice Route Kitchen". Google shows different title links for many of them. What's the best fix? *(O2 · scenario)*
- a) Leave the titles, since Google is already writing better ones for free
- b) Add the word "recipe" three times so Google keeps the titles as written
- c) Give each post its own title naming the dish, with the brand at the end
- d) Hide the recipe posts from search until Google stops rewriting titles

**Answer:** c
**Explanation:** One title across a group of pages is what Google calls micro-boilerplate. A unique title naming each dish fixes it, and Google prefers to use your title when it's good.
**Hint:** What does "boilerplate" mean, and what's the opposite?

### Q5. Kavya's yoga studio page is in Tamil, but its `<title>` is in English. Google shows a Tamil title link instead. Why? *(O2 · scenario)*
- a) Google translates every title into the searcher's language by default
- b) The title's language doesn't match the page, so Google adjusts it
- c) Tamil titles always rank higher in India, so Google swaps them in
- d) Her title is too long, so Google replaces it with a shorter version

**Answer:** b
**Explanation:** "Mismatch of writing system or language" is one of Google's seven documented reasons. Google advises writing the title in the same language and script as the page.
**Hint:** Look at Google's list of seven issues.

### Q6. Which is the best title for Nila's cold brew guide? *(O1 · scenario)*
- a) Home \| Nila Coffee
- b) Cold Brew, Cold Brew Coffee, Cold Brew Recipe, Best Cold Brew
- c) Nila Coffee \| Nila Coffee Blog \| Coffee Guides \| Cold Brew
- d) Cold Brew at Home: A Simple 12-Hour Guide \| Nila Coffee

**Answer:** d
**Explanation:** It starts with the main phrase, says what's specific about the page, and ends with the brand once. The others are vague, stuffed, or bury the topic behind repeated brand names.
**Hint:** Main phrase first, promise next, brand last.

### Q7. Spot the error: "Our snippet in Google isn't our meta description, so Google must be ignoring us. We should add the description to every page twice." *(O3 · spot the error)*
- a) The description must be in the page's footer for Google to find it
- b) Google uses your meta description only if it's under 60 characters
- c) Google often picks page text for the snippet, and two tags won't help
- d) Descriptions only work if the same text is used on every page

**Answer:** c
**Explanation:** Google "primarily uses the content on the page" for the snippet and "might show different snippets for different searches". Repeating the tag is an error, not a fix, and there's no documented character limit.
**Hint:** Where does Google mainly look for snippet text?

### Q8. Spot the error: "Our two cold brew guides both appear for 'cold brew ratio'. To fix it, we'll give them the same title so Google treats them as one page." *(spot the error · review: m03-l05)*
- a) Same-intent pages need a merge and a redirect, not a shared title
- b) Identical titles merge pages only if both use the same meta description
- c) Two guides for one topic should each be set to `noindex` straight away
- d) Titles can't affect which page Google shows, so nothing needs changing

**Answer:** a
**Explanation:** As you saw in Lesson 3.5, same-intent pages that are both shown should be merged into the stronger one, with the other redirected. Identical titles just make two pages harder to tell apart.
**Hint:** In Lesson 3.5, what was the fix for two pages doing one job?
