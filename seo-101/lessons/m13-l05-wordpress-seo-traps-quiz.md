# M13.L05 Quiz — WordPress-Specific SEO Traps

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Make WordPress Core (6.4 attachment pages, 6.1 Site Health, 5.3 big images), WordPress Optimization guide, Yoast Help, Rank Math KB, AIOSEO docs and the Rank Math wordpress.org FAQ.

### Q1. What changed for attachment pages in WordPress 6.4? *(O1 · recall)*
- a) They were removed from every WordPress site
- b) They became noindex on all existing sites
- c) They now always redirect to the parent post
- d) They're disabled on new installs only

**Answer:** d
**Explanation:** "attachment pages for new WordPress installations are fully disabled". "On existing sites, the option is set to 1 on upgrade", so they keep working.
**Hint:** New installs.

### Q2. Where does Rank Math recommend redirecting attachment pages? *(O1 · recall)*
- a) To the post they're used in
- b) To the site's home page
- c) To a 404 page
- d) To the media library

**Answer:** a
**Explanation:** Rank Math "redirects the URLs of your attachment pages to the post" they're used in. Yoast and core send them to the file; either is fine if they aren't indexable.
**Hint:** The parent.

### Q3. What does WordPress's own optimisation guide link to site speed? *(O3 · recall)*
- a) Only the theme you choose for the site
- b) The number of plugins and their performance
- c) Only the total number of plugins installed
- d) The number of posts shown on each page

**Answer:** b
**Explanation:** "The number of plugins and their performance will also have a huge impact on your site's performance." Weight matters, not just count.
**Hint:** Two factors.

### Q4. Nila's site was installed in 2019 and now runs WordPress 7.1. Why does it still have attachment pages? *(O1 · scenario)*
- a) WordPress 7.1 re-enabled attachment pages
- b) Her theme overrides every core setting
- c) Upgraded sites kept them; redirect via plugin
- d) Attachment pages can never be turned off

**Answer:** c
**Explanation:** Existing sites got the option set to 1 on upgrade. Use the SEO plugin's attachment redirect.
**Hint:** Install date matters.

### Q5. Tomás's View Source shows two meta descriptions and two JSON-LD Organization nodes. What's the likely cause? *(O2 · scenario)*
- a) Google adds a second copy when crawling
- b) Two SEO plugins, or theme plus plugin
- c) The page cache doubled the `<head>`
- d) The sitemap adds tags to every page

**Answer:** b
**Explanation:** Both write to the `<head>`. Keep one; Rank Math's FAQ warns two "cause conflicting SEO results".
**Hint:** Two writers.

### Q6. Nila removed `noindex` from a category, but the live page still shows it. What do you check first? *(O3 · scenario)*
- a) Whether Google has penalised the page
- b) Whether the sitemap is too large
- c) Whether the theme needs updating
- d) The page or CDN cache; purge it

**Answer:** d
**Explanation:** A cached copy can keep serving the old `noindex`. Purge, check the `age` header, then recheck.
**Hint:** Stale copy.

### Q7. Spot the error. A plan says: "Block `/?s=` in robots.txt so search pages stay out of Google." What's wrong? *(O1 · spot-the-error)*
- a) Blocking hides core's noindex from Google
- b) Search pages should always be indexed
- c) robots.txt can't block query strings
- d) Nothing; that's the best approach

**Answer:** a
**Explanation:** Core adds `noindex` to search pages. If Google can't crawl them, it can't see the `noindex`, and linked URLs can still be indexed (Lesson 6.2).
**Hint:** Google must see the rule.

### Q8. Spot the error. *(review: m13-l04)* A note says: "Running Yoast free and Rank Math together, so we get Rank Math's free redirects." What's wrong?
- a) Nothing; two plugins work fine together
- b) Rank Math has no redirect manager
- c) Two SEO plugins conflict; keep only one
- d) Redirects only work with Yoast

**Answer:** c
**Explanation:** Two SEO plugins write the same tags. Keep one, and add the free Redirection plugin if you need redirects.
**Hint:** One SEO plugin.
