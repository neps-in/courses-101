# M05.L02 Quiz — Posts, Pages, Categories and Tags Without Thin Archives

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against WordPress 7.1 source, Google Search Central (canonicalization) and a 2015 Google Hangout report.

### Q1. In WordPress 7.1, which pages does core add `noindex` to by itself? *(O3 · recall)*
- a) Every tag archive, because tag pages are thin by default
- b) Category and tag archives, but never author or date archives
- c) Search results, and all pages if search engines are discouraged
- d) None at all, because `noindex` is only added by SEO plugins

**Answer:** c
**Explanation:** Core's robots functions add `noindex` when `is_search()` is true, and on a site with **Search engine visibility** ticked. Archives get none.
**Hint:** One kind of page, plus one setting.

### Q2. Which category and tag archives does WordPress's core sitemap list? *(O3 · recall)*
- a) Only categories, because tags are never included in the sitemap
- b) Every public category and tag that has at least one post
- c) Only the categories and tags you pick in Settings → Reading
- d) Every category and tag, including empty ones with no posts at all

**Answer:** b
**Explanation:** The taxonomy sitemap "Returns all public, registered taxonomies", with `hide_empty` set to true. Deleting a one-post tag removes its archive from the sitemap.
**Hint:** What does `hide_empty` do?

### Q3. What's the course's tag rule, from WordPress 101? *(O2 · recall)*
- a) A tag for every keyword in the post, so each one gets its own page
- b) Exactly ten tags per post, chosen from the keyword map's phrases
- c) Tags only on pages, since posts already have a category for this
- d) Reuse first, new tags only for 3+ posts, max 3 tags per post

**Answer:** d
**Explanation:** This rule keeps tag archives as real collections, not one-post pages. It's a course rule, not a Google rule.
**Hint:** Three appears twice.

### Q4. Nila has a "Wholesale for cafés" offer published as a blog post. What should it be? *(O1 · scenario)*
- a) A page, linked from the menu, since it's a permanent service
- b) A post in every category, so that it appears on all archive pages
- c) A tag, so that every wholesale post links back to the same offer
- d) A post with today's date, re-saved weekly so it stays at the top

**Answer:** a
**Explanation:** Services are permanent information, so they're pages. As a post, it slides down the blog and shows an old date. Re-saving to look fresh misleads readers.
**Hint:** Does it belong in a stream of dated articles?

### Q5. Kavya has the tags *breathing* (7 posts) and *breath* (1 post). What should she do? *(O3 · scenario)*
- a) Keep both, because two tags mean twice the chances to be found
- b) Merge *breath* into *breathing*, so one archive holds all 8 posts
- c) Set both to `noindex`, because any two similar tags cause a penalty
- d) Turn both tags into categories, so each post has two main sections

**Answer:** b
**Explanation:** Duplicate wordings split one collection in two. Merging leaves one useful archive, and the one-post archive drops out of the sitemap.
**Hint:** Same idea, two names.

### Q6. Tomás's tag *power tools* has 12 posts, and its archive got 30 search clicks in 3 months. What should he do? *(O3 · scenario)*
- a) Delete it, because tag pages are always thin and should be removed
- b) Set it to `noindex` at once, so that the posts get the clicks instead
- c) Keep it indexable, and add a short description for the archive
- d) Rename it with today's date so Google sees that it has been updated

**Answer:** c
**Explanation:** It's a real collection that searchers use. Mueller described some tag pages as "almost like category pages" that you may want indexed. Deleting or hiding it would throw away working traffic.
**Hint:** It has posts and clicks.

### Q7. Spot the error: "WordPress hides tag pages from Google by default, so we never need to think about them." *(O3 · spot the error)*
- a) WordPress hides category pages by default, but not tag pages
- b) WordPress deletes tag pages after 30 days if no one visits them
- c) Tag pages are hidden only on sites using the Post name setting
- d) Core adds no `noindex` to archives, and lists them in the sitemap

**Answer:** d
**Explanation:** In 7.1, core adds `noindex` only to search results and non-public sites. Tag archives with posts are indexable and in `wp-sitemap.xml`.
**Hint:** What did you see when you viewed a tag archive's source?

### Q8. Spot the error: "I'll build my course site in Playground with `?storage=temp`, so it's saved automatically." *(spot the error · review: m05-l01)*
- a) Temporary Playgrounds are lost when the tab is closed or refreshed
- b) Temporary Playgrounds are saved only if the site uses Post name
- c) Playground saves every site to WordPress.org's servers for a year
- d) Temporary Playgrounds are fine, as long as you stay logged in

**Answer:** a
**Explanation:** As you saw in Lesson 5.1, "Temporary Playgrounds, including ?storage=temp, are lost when the tab is closed or refreshed." Use Local, or **Store permanently** and download a ZIP.
**Hint:** In Lesson 5.1, what does "temp" mean for a Playground?
