# M02.L02 Quiz — Patterns and synced patterns for reusable content

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error · includes 1 spaced-review question from M01.L04.
> Labels (**Create pattern**, **Synced**, **Add**, **Edit original**, **Detach**, **Enable overrides**) checked against the WordPress 7.1 block editor code on 2026-11-01.

### Q1. What is the key difference between a synced and an unsynced pattern?
- a) Synced patterns can contain images and buttons; unsynced ones hold only text
- b) Unsynced patterns only work in pages, not posts
- c) Synced patterns come from themes; unsynced ones are yours
- d) Editing a synced original updates every copy; unsynced copies don't change

**Answer:** d
**Explanation:** A synced pattern stays linked to its original, so one edit changes every post that uses it. An unsynced pattern is copied in as ordinary blocks you can change freely. Both can contain any blocks and work in posts and pages, and you can make either kind yourself.
**Hint:** Think "shared noticeboard" vs "photocopy".

### Q2. Which content blocks inside a synced pattern can have **overrides** enabled in WordPress 7.0?
- a) Any block at all, including Columns
- b) Only Group and Columns blocks
- c) Paragraph, Heading, Image and Button
- d) None; synced copies can never differ

**Answer:** c
**Explanation:** Overrides (added in WordPress 6.6) let Paragraph, Heading, Image and Button blocks hold different content in each copy, while the layout and design stay synced. WordPress 7.1 adds **List item**, and a few site-building blocks (such as Navigation links) also support them. Layout blocks like Group and Columns stay locked to the original.
**Hint:** The most common "content" blocks.

### Q3. What happens when you **Detach** a copy of a synced pattern?
- a) That copy becomes ordinary blocks and stops getting updates
- b) The original pattern is deleted from your library and from every post
- c) Every copy on the site turns into ordinary blocks
- d) The copy is saved as a new unsynced pattern

**Answer:** a
**Explanation:** Detach only affects the copy you selected: it becomes normal blocks, cut off from the original. The original and every other copy stay synced, and nothing is added to your pattern library.
**Hint:** It only affects the one copy you selected.

### Q4. Priya writes a travel blog. Which should she save as a **synced** pattern?
- a) A day-by-day itinerary layout she fills in differently for every trip
- b) An affiliate disclosure that must read the same everywhere
- c) A photo gallery layout she uses for each destination
- d) A packing-list table she customises for every trip

**Answer:** b
**Explanation:** The disclosure must be identical and kept up to date everywhere, which is exactly what synced patterns are for. If the wording ever has to change (M08), one edit fixes every post. The itinerary, gallery and packing list are fill-in layouts, so they should be unsynced.
**Hint:** Which one must never differ between posts?

### Q5. Marco's synced *Newsletter CTA* appears on 80 posts. He wants each headline to mention the post's topic, but the button, link and design must stay the same everywhere. What should he do?
- a) Detach the CTA on all 80 posts and edit each headline
- b) Create 80 separate synced patterns, one per post
- c) Switch the pattern to unsynced and edit each copy
- d) Enable overrides on the Heading via **Edit original**

**Answer:** d
**Explanation:** Overrides on just the Heading let each post have its own headline while the button, link and design stay synced, so a future link change is still a single edit. Detaching or switching to unsynced loses that, and 80 separate patterns defeats the purpose.
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
- a) Every post moves to a new URL, so old links and rankings can break
- b) None; WordPress automatically redirects every old URL to the new one for good
- c) His published posts will be deleted
- d) Only his images will stop loading

**Answer:** a
**Explanation:** The permalink structure decides every post's URL. Changing it on a live site moves every post to a new address. Search equity is tied to the exact URL, and WordPress doesn't reliably redirect every old link, so set this once on day one, or add 301 redirects (M05) if you must change it.
**Hint:** Search equity is tied to the exact address.
