# M04.L03 Quiz — Navigation, header and footer, homepage vs blog index

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced-review question from M04.L02.
> Labels checked against WordPress 7.0 and Twenty Twenty-Five on 2026-10-31.

### Q1. You set a static homepage. What is the **posts page** for?
- a) It stores draft posts until you are ready to publish them
- b) It's an empty page where WordPress lists your latest posts
- c) It's a backup copy of your homepage in case you break it
- d) It's the page search engines read instead of your homepage

**Answer:** b
**Explanation:** With a static homepage, your posts need somewhere to be listed. The page you pick as **Posts page** (e.g. **Blog**) becomes the blog index; WordPress fills it with your latest posts using the **Blog Home** template.
**Hint:** Where do your posts go once the homepage is a page?

### Q2. Why does a brand-new header menu often list every page on the site, including "Sample Page"?
- a) Twenty Twenty-Five hard-codes all pages into its header pattern
- b) WordPress adds every new page to all menus by default in Settings
- c) The Navigation block falls back to a Page List when it has no menu
- d) The Customizer copied all pages into the menu during installation

**Answer:** c
**Explanation:** With no menu assigned, the Navigation block creates a fallback: it imports a classic menu if one exists, otherwise it uses a **Page List** of all published pages. Create a curated menu to replace it.
**Hint:** What does the block do when it has nothing to show?

### Q3. Carmen writes about three topics and sells a printable planner. New visitors land on her latest post and leave. What should she change?
- a) Post more often so the latest post is always her best one
- b) Add every post and category to her header menu
- c) Switch to a theme with a bigger hero image on the blog
- d) Use a static Home page and move her posts to a Blog page

**Answer:** d
**Explanation:** A static homepage lets her explain what the site is, point to her best content and introduce the planner. Her posts still have a home on the **Blog** posts page. Posting more doesn't fix the first impression, and a huge menu adds confusion.
**Hint:** Shop window or shop floor?

### Q4. Arjun set **Blog** as his posts page and wrote a welcome paragraph on it, but readers never see the paragraph. Why?
- a) The paragraph needs to be published separately as a post
- b) WordPress shows the posts list there, not the page's own content
- c) The Blog page is private until he adds it to the menu
- d) Welcome text only appears on the homepage in block themes

**Answer:** b
**Explanation:** The posts page is rendered with the **Blog Home** template, which shows the posts list; the page's own content isn't displayed. To add intro text, edit the **Blog Home** template in the Site Editor (it then applies to the blog index only).
**Hint:** Which template draws the posts page?

### Q5. Olu checks his new footer in a private window. Which issue should he fix first?
- a) The social icons use the Logos Only style
- b) The footer has two columns instead of three
- c) Six footer links still point to `#`
- d) The newsletter CTA uses the accent colour

**Answer:** c
**Explanation:** Links to `#` go nowhere; Twenty Twenty-Five's footer ships with placeholder links like these. Replace them with real pages or delete them. The other points are design choices, not problems.
**Hint:** Which one is broken rather than a style choice?

### Q6. Spot the error: Beatriz's footer plan says:
> 1. Add my synced Newsletter CTA pattern.
> 2. Add Social Icons with my full Bluesky and YouTube profile URLs.
> 3. Link to my Privacy Policy page now; it's still a draft but I'll finish it in M06.
> 4. Delete the theme's placeholder "Events" and "Shop" links.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Visitors can't see draft pages, so the link would lead to "Page not found". Only link to published pages; add the Privacy Policy link once it's published (M06.L03).
**Hint:** Who can see a draft?

### Q7. (review: m04-l02) Beatriz edits the menu inside the header while she's working on the **Pages** template. Where else does the change appear?
- a) Only on pages that use the Pages template
- b) Only on the homepage, because it's a static page
- c) Nowhere until she copies it to the other templates
- d) Every template that uses the same Header template part

**Answer:** d
**Explanation:** The header is a shared template part, so editing it from any template changes it everywhere that part is used. The menu itself is also saved separately and can be reused in other Navigation blocks.
**Hint:** Is the header owned by one template?
