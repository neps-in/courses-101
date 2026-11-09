# M07.L05 Quiz — The Publish Checklist

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google's byline dates guidance, Article structured data docs, helpful-content page, generative AI content guidance and links documentation.

### Q1. How does Google say you should label dates on a page? *(O2 · recall)*
- a) With text like "Publish" or "Last updated", shown prominently
- b) With no label at all, since Google reads only the structured data
- c) With today's date on every page, so the site always looks fresh
- d) With a future date, so the page stays current for longer in results

**Answer:** a
**Explanation:** "Add a user-visible date to the page and feature it prominently. Label your dates appropriately with text like "Publish" or "Last updated"." And: "Don't specify future dates".
**Hint:** Readers should see it and understand it.

### Q2. Which internal links does the publish checklist require for a new cluster post? *(O1 · recall)*
- a) None; the sitemap is enough for Google to find and rank a new post
- b) Only links out to other sites, so readers can check your sources
- c) At least 2 links out to your pages and 2 links in from older pages
- d) One link to the home page, added in the footer of the new post only

**Answer:** c
**Explanation:** Links in help Google and readers find the post: "Every page you care about should have a link from at least one other page on your site." Links out connect it to the pillar and related pages (Lesson 7.1). Two each is the course rule.
**Hint:** Both directions.

### Q3. Which parts of a page does Google's AI content guidance say need the same review as the body text? *(O1 · recall)*
- a) Only the H1, because it's the one heading that Google reads first
- b) Only the first 100 words, because that's what Google uses to rank
- c) Only the URL, because a bad slug can't be changed once published
- d) Titles, meta descriptions, structured data and image alt texts

**Answer:** d
**Explanation:** The review "also applies to metadata like <title> elements, meta description elements, structured data, and alternate texts for images, which can appear in Search results."
**Hint:** What can appear in search results?

### Q4. Kavya fixes one typo in a guide she published in 2025. What should happen to the visible date? *(O2 · scenario)*
- a) Change it to "Last updated" today, so Google sees a fresh page
- b) Leave it; a typo isn't a significant change to the content
- c) Remove the date entirely, so readers can't tell the post's age
- d) Change the published date to today, and remove "Last updated"

**Answer:** b
**Explanation:** Google asks: "Are you changing the date of pages to make them seem fresh when the content has not substantially changed?" Change "Last updated" only after a significant update (Lesson 5.5).
**Hint:** What changed for the reader?

### Q5. Nila's post shows "Published 2 March 2026", but View Source shows `"datePublished": "2026-03-09"`. What should she do? *(O2 · scenario)*
- a) Nothing; Google always ignores structured data dates on blog posts
- b) Delete the structured data, because two dates confuse readers
- c) Change the visible date to 9 March, whichever date is correct
- d) Find the setting that's wrong and make both show the true date

**Answer:** d
**Explanation:** "Make your dates and times consistent." The visible date and the structured data should match, and both should be the true publish date. Option c changes the page without checking which date is true.
**Hint:** One true date, shown in both places.

### Q6. Tomás's new post passed checks 1–5. A day after publishing, Test live URL in URL Inspection says **Indexing allowed? No**. What's the most likely cause? *(O3 · scenario)*
- a) A `noindex` left on from drafting, or from a plugin or Reading setting
- b) The post is too short, so Google refused to crawl it at all
- c) Google needs a week before it will run any live test on a new post
- d) The post has too many internal links pointing to it from old posts

**Answer:** a
**Explanation:** **Indexing allowed? No** means Google found a `noindex`. Check the post's SEO plugin settings, any "hide from search" option and **Settings → Reading** (Lesson 6.2). That's why checks in section 6 run after publishing.
**Hint:** What does "Indexing allowed" check for?

### Q7. Spot the error. Amara's checklist notes say: "Meta description written by the plugin's AI button: 'Includes a free downloadable checklist.' Pass, the plugin wrote it." What's wrong? *(O1 · spot-the-error)*
- a) Nothing; descriptions written by a plugin are always accurate
- b) Meta descriptions don't need checking because they aren't shown
- c) There's no checklist on the page, so it fails the fact-check too
- d) The description is fine, but it should be moved into the H1 tag

**Answer:** c
**Explanation:** A meta description must be a true pitch for this page (Lesson 4.1), and Google's AI guidance says the review covers "meta description elements". It fails 3.2 and 2.4. Fix the description, or make the checklist.
**Hint:** Is it true?

### Q8. Spot the error. *(review: m06-l01)* Tomás says: "My new post is in the sitemap, so it passes the 'can it be indexed?' check." What's missing?
- a) Nothing; being in the sitemap is the only check that matters for indexing
- b) Status 200, crawl allowed, no `noindex`, a correct canonical and internal links
- c) A link from the sitemap to the home page, so that Google reads it in order
- d) A second sitemap, because one sitemap can only list ten new posts at a time

**Answer:** b
**Explanation:** The six-point check (Lesson 6.1) needs all six: status 200, crawl allowed, no stray `noindex`, correct canonical, in the sitemap, and linked internally. A page can be in the sitemap and still be blocked or `noindex`.
**Hint:** Six points, not one.
