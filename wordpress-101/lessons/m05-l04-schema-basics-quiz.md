# M05.L04 Quiz — Schema basics for creators

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced-review question from M05.L02.
> Checked against Google Search Central (structured data guidelines, Search Gallery, AI features, documentation updates), Yoast SEO 28.8 and schema.org on 2026-10-31.

### Q1. What does Google say about structured data and rankings?
- a) Valid structured data gives a page a small ranking boost
- b) It helps Google understand pages and makes them eligible for rich results, with no guarantee
- c) Pages without structured data can't appear in AI Overviews
- d) Structured data only matters for sites with more than 500 pages

**Answer:** b
**Explanation:** Google says it doesn't guarantee your structured data will show up, even when it's correct, and a structured data manual action "doesn't affect how the page ranks in Google web search". For AI Overviews and AI Mode there's "no special schema.org structured data that you need to add".
**Hint:** Understanding and eligibility, not position.

### Q2. Which tool tells you which **Google** rich results a page qualifies for?
- a) The Schema Markup Validator at validator.schema.org
- b) The Rich Results Test
- c) WordPress's **Site Health** screen
- d) The Yoast SEO **Search appearance** preview

**Answer:** b
**Explanation:** The Rich Results Test checks markup against Google's features and shows which ones the page is eligible for. The Schema Markup Validator checks all schema.org markup, including types Google doesn't use. Site Health and the Yoast preview don't test structured data.
**Hint:** One tool is Google's; the other is schema.org's.

### Q3. What happened to FAQ rich results in 2026?
- a) They became available only to sites with ProfilePage markup
- b) Google expanded them to all websites
- c) Google stopped showing them in Search from 2026-05-07
- d) They moved from desktop to mobile only

**Answer:** c
**Explanation:** Google added a deprecation notice on 2026-05-08 saying FAQ rich results would no longer appear from 2026-05-07, then removed the documentation on 2026-06-15. (They'd been limited to authoritative government and health sites since 2023; How-to rich results were removed in 2023.)
**Hint:** Check Google's "Latest documentation updates" page.

### Q4. In the Schema Markup Validator, Hira's Person item shows `"name":"hira_admin_22"` and no `sameAs`. What should she change?
- a) Paste new Person JSON-LD into every post with her real name
- b) Set her name and **Display name publicly as** in **Users → Profile**, and fill in her Website and social profile fields
- c) Switch to a second SEO plugin with better author schema
- d) Nothing: the Person item doesn't matter as long as the Article is valid

**Answer:** b
**Explanation:** The SEO plugin builds Person schema from the user profile. Fixing the source (display name, Website, social fields, bio) updates every post at once. Hand-pasted JSON-LD duplicates the plugin's graph, and a second SEO plugin creates more duplicates.
**Hint:** Fix the setting that produces the markup, not the markup.

### Q5. Dev's travel vlog posts each embed his YouTube video as the main content. He uses Yoast SEO free. What's a sensible approach to VideoObject markup?
- a) Add PodcastEpisode markup instead, because it covers every type of media
- b) Paste one generator's VideoObject code into every post, with or without video
- c) It's optional: add it with a tool that supports it, or skip it, as Google detects videos too
- d) Add FAQ markup about the video, because Google prefers it for video posts

**Answer:** c
**Explanation:** Google "tries to automatically understand details about your video"; VideoObject (name, thumbnailUrl, uploadDate at minimum) lets you influence what's shown. It's optional, must match a video actually on the page, and is easiest with a tool built for it. PodcastEpisode isn't for video, and FAQ rich results no longer appear.
**Hint:** Optional, accurate, and only where the video is on the page.

### Q6. Spot the error: Mai's schema checklist says:
> 1. Fill in my profile's bio, Website and social fields so my Person schema is complete.
> 2. Make sure my author name is visible on posts.
> 3. Add hidden FAQ markup with extra questions to each post, so AI Overviews can quote them.
> 4. Test one post in both the Rich Results Test and the Schema Markup Validator.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Markup must describe content that's visible on the page; hidden content is against Google's structured data guidelines and can lead to a manual action. Google also says AI features need no special schema, and FAQ rich results no longer appear. Steps 1, 2 and 4 are good practice.
**Hint:** Should markup describe things readers can't see?

### Q7. (review: m05-l02) Hira's post source contains two separate JSON-LD graphs, each with an `Article` and a `Person`. What's the most likely cause?
- a) Her theme is a block theme
- b) Two plugins (or a plugin and the theme) are outputting schema
- c) She has breadcrumbs turned on
- d) Her sitemap lists the post twice

**Answer:** b
**Explanation:** Like duplicate titles and Open Graph tags (M05.L02), duplicate schema comes from more than one plugin, or a plugin and the theme, writing the same thing. Keep one SEO plugin as the single source and deactivate the extra one.
**Hint:** It's the same "only one SEO plugin" problem.
