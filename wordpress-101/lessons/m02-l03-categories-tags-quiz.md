# M02.L03 Quiz — Categories vs tags: design a content structure for your niche

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error · includes 1 spaced-review question from M01.L03.
> Labels and rules checked against WordPress 7.0 core source on 2026-10-31.

### Q1. Which statement best describes the difference between categories and tags?
- a) Categories are for pages; tags are for posts
- b) Categories are the main sections of your site (every post has at least one); tags are optional labels for specific topics that cut across sections
- c) Tags can have parent and child tags; categories can't
- d) They're identical; WordPress keeps both for historical reasons

**Answer:** b
**Explanation:** Categories are hierarchical sections, and every post has at least one. Tags are flat, optional labels. Pages don't use either by default, and it's categories (not tags) that can have parents and children.
**Hint:** Supermarket aisles vs shelf stickers.

### Q2. You try to delete the **Uncategorized** category, but there's no Delete option. Why?
- a) It still contains posts
- b) It's the default category, and the default category can't be deleted
- c) Only the site owner's first account can delete categories
- d) Categories can never be deleted in WordPress

**Answer:** b
**Explanation:** WordPress needs a default category for posts saved without one, so the default can't be deleted. Rename it to a real pillar, or pick another default in **Settings → Writing → Default Post Category**; then Uncategorized can be deleted. Categories that contain posts can be deleted: their posts move to the default.
**Hint:** Where does a post go when you don't choose a category?

### Q3. What happens to the posts in a category when you delete that category?
- a) The posts are deleted too
- b) The posts become drafts
- c) Posts that were only in that category are moved to the default category
- d) The posts lose their URLs

**Answer:** c
**Explanation:** WordPress's own help text says deleting a category doesn't delete its posts; posts that were only in that category are set to the default category. Post URLs stay the same with Post name permalinks.
**Hint:** WordPress never deletes posts just because you tidied up a category.

### Q4. Arjun runs a music-production site with these planned posts: mixing tutorials, plugin reviews, gear reviews, interviews with producers, and "my studio diary". Which category plan is best?
- a) 18 categories, one for each software plugin and instrument he reviews
- b) Four categories: *Tutorials*, *Reviews* (plugins and gear), *Interviews* and *Studio Diary*, plus tags for specific tools that appear in several posts (e.g. *ableton*)
- c) One category, *Music*, with every detail as a tag
- d) No categories, only tags

**Answer:** b
**Explanation:** Four broad pillars give readers clear menu sections, and every post fits exactly one (plugin and gear reviews share *Reviews*). Specific tools that recur across tutorials and reviews are ideal tags. Eighteen narrow categories would be thin; one category tells readers nothing, and every post must have a category anyway.
**Hint:** 4–7 sections; specifics become tags only if they recur.

### Q5. Meera is publishing her first post about Kerala houseboats. *kerala* doesn't exist as a tag yet. She plans two more Kerala posts next month. Following the lesson's tag rule, what should she do?
- a) Skip tags forever; they're bad for SEO
- b) Create the tag *kerala*, because 3+ posts will use it within a few months
- c) Create a new category called *Kerala*
- d) Add 10 tags (*kerala*, *houseboat*, *backwaters*, *india*, *travel*, …) to be found more easily

**Answer:** b
**Explanation:** The rule is: reuse an existing tag first, and create a new one only if 3+ posts will use it soon. *kerala* qualifies. A category for one destination would be too narrow (it belongs under *Destinations*), and ten tags per post creates one-off tag pages.
**Hint:** How many posts will this tag collect soon?

### Q6. Spot the error: Priya's structure plan says:
> 1. Rename Uncategorized to *Recipes* and add a one-sentence description.
> 2. Six categories in total, each with ~5+ planned posts.
> 3. Tick every category that loosely fits each post, so it shows up in more places.
> 4. Tag rule: reuse first, max 3 tags per post.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Ticking every loosely related category puts the same post in several sections, so the sections stop meaning anything. Give each post the **one** category it's mainly about (two only as an exception), and use tags for the cross-cutting topics.
**Hint:** How many aisles should one product sit in?

### Q7. (review: m01-l03) After installing WordPress with HTTPS, which check in **Settings → General** confirms the site is set up correctly?
- a) The Site Title is filled in
- b) **WordPress Address (URL)** and **Site Address (URL)** both start with `https://`
- c) The Tagline is blank
- d) "Anyone can register" is ticked

**Answer:** b
**Explanation:** Both addresses should start with `https://` so WordPress builds secure links everywhere. The title and tagline don't affect HTTPS, and open registration should stay off.
**Hint:** Which two fields contain your site's web address?
