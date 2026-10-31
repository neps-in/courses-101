# M02.L02 Quiz — Patterns and synced patterns for reusable content

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error · includes 1 spaced-review question from M01.L04.
> Labels (**Create pattern**, **Synced**, **Edit original**, **Detach**, **Enable overrides**) checked against the WordPress 7.1 block editor on 2026-10-29.

### Q1. What is the key difference between a synced and an unsynced pattern?
- a) Synced patterns can contain images; unsynced patterns can't
- b) Editing a synced pattern's original updates every copy; unsynced copies are independent once inserted
- c) Unsynced patterns only work in pages
- d) Synced patterns come from themes; unsynced patterns are ones you make

**Answer:** b
**Explanation:** A synced pattern stays linked to its original, so one edit changes every post that uses it. An unsynced pattern is copied in as ordinary blocks you can change freely. Both can contain any blocks and work in posts and pages, and you can make either kind yourself.
**Hint:** Think "shared noticeboard" vs "photocopy".

### Q2. Which blocks inside a synced pattern can have **overrides** enabled in WordPress core?
- a) Any block at all
- b) Only Group and Columns blocks
- c) Paragraph, Heading, Image and Button
- d) None: synced patterns can never differ between posts

**Answer:** c
**Explanation:** Overrides (added in WordPress 6.6) let Paragraph, Heading, Image and Button blocks hold different content in each copy, while the layout and design stay synced. Other blocks stay locked to the original. Plugins may add support for more blocks in future, so check your own editor.
**Hint:** The four most common "content" blocks.

### Q3. What happens when you **Detach** a copy of a synced pattern?
- a) The original pattern is deleted
- b) Every copy on the site turns into ordinary blocks
- c) That one copy becomes ordinary blocks and stops receiving updates from the original
- d) The copy becomes an unsynced pattern in your library

**Answer:** c
**Explanation:** Detach only affects the copy you selected: it becomes normal blocks, cut off from the original. The original and every other copy stay synced, and nothing is added to your pattern library.
**Hint:** It only affects the one copy you selected.

### Q4. Priya writes a travel blog. Which should she save as a **synced** pattern?
- a) A "Day-by-day itinerary" layout she fills in differently for each trip
- b) An affiliate disclosure that must read exactly the same on every post that has affiliate links
- c) A photo gallery layout for each destination
- d) A packing-list table she customises per trip

**Answer:** b
**Explanation:** The disclosure must be identical and kept up to date everywhere, which is exactly what synced patterns are for. If the wording ever has to change (M08), one edit fixes every post. The itinerary, gallery and packing list are fill-in layouts, so they should be unsynced.
**Hint:** Which one must never differ between posts?

### Q5. Marco's synced *Newsletter CTA* appears on 80 posts. He wants the headline to mention each post's topic, e.g. "Love pasta? Get a recipe every Friday", but the button, link and design must stay the same everywhere. What should he do?
- a) Detach the CTA on all 80 posts and edit each headline
- b) Use **Edit original**, select the Heading, and choose **Enable overrides** in its Advanced settings; then change the headline in each post
- c) Create 80 separate synced patterns
- d) Change the pattern to unsynced

**Answer:** b
**Explanation:** Overrides on just the Heading let each post have its own headline while the button, link and design stay synced, so a future link change is still a single edit. Detaching or using unsynced copies loses that, and 80 separate patterns defeats the purpose.
**Hint:** Keep the link synced, free the headline.

### Q6. Spot the error: Aisha's pattern plan says:
> 1. *Author box* → synced, so a new bio updates every post.
> 2. *Recipe card* (ingredients, steps, times) → synced, so all recipes look the same.
> 3. *Sponsor thank-you* → synced, with overrides on the sponsor's name.
> 4. Before saving changes with **Edit original**, preview a post that uses the pattern.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** b
**Explanation:** A recipe card is filled in differently for every recipe, so it should be **unsynced**. If it were synced, editing the ingredients in one recipe would change every recipe on the site. A consistent look comes from the pattern's design and your theme styles, not from syncing.
**Hint:** Which pattern holds content that differs in every post?

### Q7. (review: m01-l04) Six months after launch, Ben changes **Settings → Permalinks** from *Post name* to *Day and name*. What's the main risk?
- a) None: WordPress keeps old URLs working forever
- b) Every post gets a new URL, so links from other sites, social posts and search results can break, and search equity can be lost unless he sets up redirects
- c) His posts will be deleted
- d) Only his images will break

**Answer:** b
**Explanation:** The permalink structure decides every post's URL. Changing it on a live site moves every post to a new address. Search equity is tied to the exact URL, and WordPress doesn't reliably redirect every old link, so set this once on day one, or add 301 redirects (M05) if you must change it.
**Hint:** Search equity is tied to the exact address.
