# Module 5 cheat sheet — SEO & AI search for WordPress
*WordPress 101 for Content Creators · checked against WordPress 7.0, Yoast SEO 28.8, Redirection 5.10.1 and Google Search Central on 2026-10-31*

## How search and AI find you (M05.L01)
**Crawl → index → serve.** No index, no citation: AI answers draw on indexed, quotable pages.
| Control | Where | Note |
|---|---|---|
| Whole site hidden | **Settings → Reading → Discourage search engines** | Adds `noindex` + turns core sitemap off. Untick on live sites |
| Google Search + AI Overviews/Mode | Googlebot | No extra requirements; Google-Extended doesn't affect Search |
| ChatGPT search | OAI-SearchBot | GPTBot = training (separate) |
| Perplexity | PerplexityBot | |
| Bing / Copilot | Bingbot | AI Performance report; IndexNow |
- `site:example.com/post/` is a rough check; **URL Inspection** is definitive for one URL.

## One SEO plugin (M05.L02)
- **One only** (Yoast · Rank Math · AIOSEO). Two = duplicate titles, schema, sitemaps.
- Yoast: **First-time configuration** → **Settings**: Site basics · Site representation · Content types (title `%%title%% %%page%% %%sep%% %%sitename%%`; description = **Excerpt**) · Site features (XML sitemaps) · Advanced → Author archives (hide on one-person sites).
- Sitemap: **`/sitemap_index.xml`** (replaces `/wp-sitemap.xml`, added to `robots.txt`).
- Breadcrumbs: core **Breadcrumbs** block in **Single Posts** (Home / Blog / Category / Post); Yoast adds BreadcrumbList schema.
- Premium-only in Yoast: redirects, IndexNow (use **Redirection**; Microsoft's **IndexNow** plugin, or Rank Math's free modules).
- Google *may* rewrite titles and *may* use your description; no length limit, long titles get truncated.

## Redirects (M05.L02)
| Situation | Do |
|---|---|
| Published **post** slug changed | WordPress redirects automatically (test it) |
| **Page**, category or permalink structure changed | **301** old → new (Tools → Redirection → Add New) |
| Post deleted, close replacement | **301** to it |
| Post deleted, no match | Let it **404/410**; never all to the homepage (soft 404) |
| Temporary move | 302/307 |
- Test: `curl -I https://site/old/` → `301` + `Location:`. Keep redirects ≥ 1 year (ideally forever). No chains, no loops.

## Writing for search intent (M05.L03)
1. Search the query privately → note **intent** (Know · Do · Website · Visit-in-person), **format**, **angle**, what's missing.
2. **Answer first** (2–3 sentences), story after.
3. **H1** = title → **H2** sections → **H3** inside; check **Document Overview → Outline**.
4. **Internal links:** ≥2 out, ≥1 in from older posts; descriptive anchors (not "click here"). Ctrl+K → **Search or type URL**.
- Google has **no preferred word count**.

## Schema (M05.L04)
- Helps understanding + rich-result **eligibility**; **not** a ranking boost; **no special schema** for AI features. Must match visible content.
- Your plugin outputs Article, Person, WebPage, BreadcrumbList, WebSite. Feed it via **Users → Profile** (display name, bio, Website = About page, social fields → `sameAs`).
- **FAQ** rich results gone (2026-05-07); **How-to** gone (2023). VideoObject optional; PodcastEpisode has no Google feature.
- Test with **both**: **Rich Results Test** (Google features) + **Schema Markup Validator** (all schema.org). On Local, paste the source.

## Search Console & Bing (M05.L05)
| Step | Google Search Console | Bing Webmaster Tools |
|---|---|---|
| Verify | **Domain** (DNS TXT) or **URL prefix** (HTML tag → Yoast **Site connections → Google**) | **Import** from Search Console, or meta tag → **Site connections → Bing** |
| Sitemap | Indexing → Sitemaps → `sitemap_index.xml` → **Success** | Imported or Sitemaps → Submit |
| One URL | URL Inspection → Test live URL → **Request indexing** (once; quota) | URL Inspection / URL Submission |
- Keep verification in place (checked periodically). Only Owner/Full users can request indexing.
- **Pages** report: act only on important pages. Expected: Page with redirect · noindex (archives) · duplicates/alternates · 404 for removed posts.

## If something goes wrong
| Problem | First fix |
|---|---|
| Two `<title>` / two schema graphs | Deactivate the second SEO (or schema/social) plugin |
| No posts in Google, `noindex` in source | Untick **Discourage search engines** |
| `/sitemap_index.xml` 404 | **Settings → Permalinks → Save**; check **Site features** |
| Renamed page shows 404 | 301 in **Tools → Redirection** |
| "Too many redirects" | Find and delete the looping redirect |
| Google shows a different title | Make the `<title>` unique, descriptive, close to the H1 |
| Person schema says "admin" | **Users → Profile** → display name, bio, Website |
| Verification lost | Re-add the tag/TXT record; don't remove it after verifying |
| "Crawled/Discovered – currently not indexed" | Improve content; add internal links; wait |
