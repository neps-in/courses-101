# M13.L04 Quiz — Choose ONE SEO Plugin and Configure It End to End

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against wordpress.org plugin pages, Yoast Help, Yoast Premium, Rank Math KB, AIOSEO docs and Make WordPress Core (2020).

### Q1. On 2026-11-09, which plugin's free version includes a redirect manager? *(O1 · recall)*
- a) Yoast SEO
- b) All in One SEO
- c) Rank Math
- d) None of the three

**Answer:** c
**Explanation:** Rank Math's free plugin lists a "Smart Redirection manager" and "Built-in 404 monitor". Yoast's is Premium; AIOSEO's is Pro.
**Hint:** Only one is free.

### Q2. What does Rank Math's FAQ say about other SEO plugins? *(O1 · recall)*
- a) Remove them; two can cause conflicting results
- b) Keep Yoast active for its readability checks
- c) Run two plugins for double the schema
- d) Other plugins are needed for sitemaps

**Answer:** a
**Explanation:** "It is recommended to remove other SEO plugins. Using other SEO plugins alongside Rank Math can hurt your website's performance and cause conflicting SEO results."
**Hint:** One only.

### Q3. Since WordPress 5.5, what does core's own sitemap include by default? *(O2 · recall)*
- a) Only the home page, and nothing else on the site
- b) Only pages, never blog posts
- c) Only URLs added by hand in settings
- d) Public post types, taxonomies and author archives

**Answer:** d
**Explanation:** Core makes `/wp-sitemap.xml` for public post types and taxonomies, "as well as for author archives". That's why plugin controls and `noindex` exclusions matter.
**Hint:** Including authors.

### Q4. Nila uses Yoast free and needs to redirect 40 old product URLs. What are her options? *(O1 · scenario)*
- a) Yoast free has a redirect manager built in
- b) Yoast Premium, or the free Redirection plugin
- c) Install Rank Math alongside Yoast for redirects
- d) Redirects can't be made in WordPress at all

**Answer:** b
**Explanation:** Yoast's redirect manager is Premium. The free Redirection plugin works alongside any SEO plugin. Adding a second SEO plugin would cause conflicts.
**Hint:** Don't add a second SEO plugin.

### Q5. Kavya's Rich Results Test shows `BreadcrumbList`, but no breadcrumbs appear on her posts. What's wrong? *(O3 · scenario)*
- a) Nothing; schema alone is fine
- b) Breadcrumbs only show up on mobile phones
- c) Markup without visible breadcrumbs; add them
- d) The Rich Results Test is out of date this month

**Answer:** c
**Explanation:** Markup must match visible content (Lesson 12.5). Add breadcrumbs to the theme (block, shortcode or setting) or turn the markup off.
**Hint:** Visible and marked up.

### Q6. Amara's agency uses AIOSEO, but she prefers Rank Math. What should she use on client sites? *(O1 · scenario)*
- a) The agency standard, AIOSEO
- b) Rank Math, as it ranks better
- c) Both, to compare results live
- d) No plugin; core is enough

**Answer:** a
**Explanation:** Switching costs more than any difference between them, and no source shows one plugin ranks better.
**Hint:** Keep the standard.

### Q7. Spot the error. A set-up note says: "Turned on the plugin sitemap. Done; no need to check anything else." What's missing? *(O3 · spot-the-error)*
- a) Nothing; plugin sitemaps never need checking
- b) The sitemap file also needs its own meta description
- c) Sitemaps only work on the home page
- d) Check core's sitemap and noindex items; submit one

**Answer:** d
**Explanation:** Check that core's sitemap is replaced, that `noindex` items aren't listed, and submit only the plugin's sitemap in Search Console.
**Hint:** Verify from outside.

### Q8. Spot the error. *(review: m13-l03)* A note says: "No `noindex` in View Source, so the PDF can't be noindexed." What's wrong?
- a) Nothing; View Source shows everything
- b) An X-Robots-Tag header can noindex it
- c) PDFs can't be indexed by Google anyway
- d) noindex only works in sitemaps

**Answer:** b
**Explanation:** Header rules like `X-Robots-Tag: noindex` don't appear in the HTML; read the response headers in DevTools' Network panel.
**Hint:** Not in the page.
