# Research: M03.L05 Keyword Maps: Grouping Topics and Spotting Cannibalisation (+ M03 Capstone)

**Researched:** 2026-11-08
**Scope:** Sources for SEO 101 M03.L05 (group keywords by results-page overlap, build a keyword map with one page per topic, spot cannibalisation with `site:` and Search Console, choose a fix) and the M03 capstone (15+ topic keyword map + break-it lab with two cannibalising pages). Running example: Nila Coffee (WordPress shop + brew-guide blog).

**How quotes were checked:** Google Search Central, Search Console Help, Google Sheets Help and the Bing blog were downloaded as raw HTML and the quotes below were matched against the page text (verbatim, including Google's own typos). Mueller's Bluesky posts were taken from the public Bluesky API (exact text + timestamp). Third-party quotes (Ahrefs, Semrush, Keyword Insights) came through a summarising fetch tool. They are marked **(fetch-tool extract)**. Re-open the page before quoting them in a lesson.

**Labels:** **Documented** = official Google/Bing/tool doc · **Google public comment** = Googler, with date and place · **Observed practice** = industry source · **Myth/contested**

---

## 1. What Google says about multiple pages competing / "keyword cannibalisation"

Google's documentation never uses the term "keyword cannibalization". It covers **duplicate** content and **doorway** pages. The only direct Google comment we could verify is John Mueller's, below.

### John Mueller on Bluesky, 20 Sep 2025 (primary, verified)
Context: someone asked how to see which pages "are being considered for a query" to avoid cannibalisation, now that Search Console shows little data past position ~20. (Root post by isaulcar.bsky.social, 2025-09-19T23:53Z: https://bsky.app/profile/isaulcar.bsky.social/post/3lza2q7udgk2i)

- "Search Console shows data for when pages were actually shown, it's not a theoretical measurement. Assuming you're looking for pages ranking for the same query, you'd see that only if they were actually shown. (IMO it's not really "cannibalization" if it's theoretical.)"
  URL: https://bsky.app/profile/johnmu.com/post/3lzars45wkc2d · posted 2025-09-20T06:45Z. **Google public comment** (John Mueller, Bluesky)
- "All that said, I don't know if this is actually a good use of time. If you have 3 different pages appearing in the same search result, that doesn't seem problematic to me just because it's "more than 1". You need to look at the details, you need to know your site, and your potential users."
  URL: https://bsky.app/profile/johnmu.com/post/3lzars4xums2d · 2025-09-20. **Google public comment**
- "Reduce unnecesary duplication and spend your energy on a fantastic page, sure. But pages aren't duplicates just because they happen to appear in the same search results page. I like cheese, and many pages could appear without being duplicates: shops, recipes, suggestions, knives, pineapple, etc."
  ("unnecesary" is Mueller's spelling.) URL: https://bsky.app/profile/johnmu.com/post/3lzars4xwlc2d · 2025-09-20. **Google public comment**
- Secondary coverage: Search Engine Journal, "Google Answers SEO Question About Keyword Cannibalization", Roger Montti, 22 Sep 2025. https://www.searchenginejournal.com/google-answers-seo-question-about-keyword-cannibalization/556472/ (**Observed practice**/news. It quotes the same posts.)

### Google documentation that sits closest to the topic
- "Some duplicate content on a site is normal and it's not a violation of Google's spam policies. However, having the same content accessible through many different URLs can be a bad user experience (for example, people might wonder which is the right page, and whether there's a difference between the two) and it may make it harder for you to track how your content p[erforms]…"
  URL: https://developers.google.com/search/docs/crawling-indexing/canonicalization · Last updated 2026-08-20 UTC. **Documented**
- "Having duplicate content on your site is not a violation of our spam policies, but it can be a bad user experience and search engines might waste crawling resources on URLs that you don't even care about."
  URL: https://developers.google.com/search/docs/fundamentals/seo-starter-guide · Last updated 2025-12-10 UTC. **Documented**
- "try to ensure that each piece of content on your site is only accessible through one individual URL; having two pages that contain the same information about your promotions can be a confusing user experience (for example, people might wonder which is the right page, and whether there's a difference between the two)."
  Same URL (SEO Starter Guide). **Documented**. This is the closest Google wording to the course's non-negotiable #5 (one page per topic). Note that it is about the *same information*, not the same keyword.
- "There's no such thing as a "duplicate content penalty." At least, not in the way most people mean when they say that."
  URL: https://developers.google.com/search/blog/2008/09/demystifying-duplicate-content-penalty · Friday, September 12, 2008, Susan Moskwa. **Documented** (old blog post; flag age).
- Same 2008 post on splitting signals: "In step 3, if we aren't able to detect all the duplicates of a particular page, we won't be able to consolidate all of their properties. This may dilute the strength of that content's ranking signals by splitting them across multiple URLs." **Documented** (2008)
- Doorways (spam policy): "Doorway abuse is when sites or pages are created to rank for specific, similar search queries." One example: "Creating substantially similar pages that are closer to search results than a clearly defined, browseable hierarchy"
  URL: https://developers.google.com/search/docs/essentials/spam-policies · Last updated 2026-08-28 UTC. **Documented**. This is the extreme end. Mass-producing near-identical pages per keyword is a spam issue, not just "cannibalisation".
- Helpful-content self-check: "Are you producing lots of content on many different topics in hopes that some of it might perform well in search results?"
  URL: https://developers.google.com/search/docs/fundamentals/creating-helpful-content · Last updated 2026-10-05 UTC. **Documented** (indirect relevance)

### Older Mueller comment ("We just rank the content we get"): NOT verified
- Widely repeated as coming from a Reddit AMA (often dated 2018). Secondary sources only (Mailchimp, Semrush FR, SEJ). We could not find the original thread. **Myth/contested until verified.** Do not quote it in the lesson.

### Bing (secondary search engine, official)
- "By reviewing content regularly, you can spot pages that unintentionally compete for the same intent and consolidate them so one stronger page carries links, engagement, and relevance signals."
  URL: https://blogs.bing.com/webmaster/December-2025/Does-Duplicate-Content-Hurt-SEO-and-AI-Search-Visibility · 19 Dec 2025. **Documented** (Bing)
- "Duplicate content doesn't trigger search penalties on its own, but it does reduce visibility by diluting authority, confusing intent, and slowing how updates reach both search engines and AI-powered discovery systems." Same URL. **Documented** (Bing)
- "Only keep separate pages when intent clearly changes, such as seasonal offers, localized pricing, or comparison-focused content. Consolidate or 301 redirect older or redundant campaign pages that no longer serve a unique purpose." Same URL. **Documented** (Bing). This supports the lesson's "split only when intent changes" rule more directly than anything Google wrote.

---

## 2. Canonicalisation and consolidating duplicate URLs (merging two competing pages)

- "To specify a canonical URL for duplicate or very similar pages to Google Search, you can indicate your preference using a number of methods. These are, in order of how strongly they can influence canonicalization: Redirects: A strong signal that the target of the redirect should become canonical. rel="canonical" link annotations: A strong signal that the specified URL should become canonical. Sitemap inclusion: A weak signal that helps the URLs that are included in a sitemap become canonical."
  URL: https://developers.google.com/search/docs/crawling-indexing/consolidate-duplicate-urls · Last updated 2026-07-10 UTC. **Documented**
- "Keep in mind that these methods can stack and thus become more effective when combined." Same URL. **Documented**
- Why: "To consolidate signals for similar or duplicate pages. It helps search engines to be able to consolidate the signals they have for the individual URLs (such as links to them) into a single, preferred URL." Same URL. **Documented**
- Noindex is NOT a canonical tool: "We don't recommend using noindex to prevent selection of a canonical page within a single site, because it will completely block the page from Search. rel="canonical" link annotations are the preferred solution." Same URL. **Documented**
- "Don't use the robots.txt file for canonicalization purposes." / "Don't use the URL removal tool for canonicalization. It hides all versions of a URL from Search." Same URL. **Documented**
- Hint, not rule: "You can indicate your preference to Google using these techniques, but Google may choose a different page as canonical than you do, for various reasons. That is, indicating a canonical preference is a hint, not a rule."
  URL: https://developers.google.com/search/docs/crawling-indexing/canonicalization · Last updated 2026-08-20 UTC. **Documented**
- How Google picks: "If Google finds multiple pages that seem to be the same or the primary content very similar, it clusters them together. Google then chooses the page that, based on the factors (or signals) the indexing process collected, is objectively the most complete and useful for search users, and marks it as the canonical." Same URL. **Documented**
- **The key Google sentence for merging two competing pages:** "Don't redirect many old URLs to one irrelevant single URL destination, such as the home page of the new site. This can confuse users and might be treated as a soft 404 error. However, if you have consolidated content previously hosted on multiple pages to a new single page, you can redirect the older URLs to that new, consolidated page."
  URL: https://developers.google.com/search/docs/crawling-indexing/site-move-with-url-changes · Last updated 2026-08-20 UTC. **Documented** (written for site moves, but it applies directly to merges)
- Same page: "Keep the redirects for as long as possible, generally at least 1 year." and "301 and other permanent redirects don't cause a loss in PageRank." **Documented**
- Redirect types: "Permanent: Googlebot follows the redirect, and the indexing pipeline uses the redirect as a signal that the redirect target should be canonical. Use permanent redirects when you're sure that the redirect won't be reverted." The list includes HTTP 301 and 308.
  URL: https://developers.google.com/search/docs/crawling-indexing/301-redirects · Last updated 2026-04-14 UTC. **Documented**
- Same page, use case: "You removed a page and you want to send users to a new page." and "If you're using a platform like Blogger or Shopify, the platform may already have built-in redirect solutions." **Documented** (WordPress isn't named. WordPress redirect plugins aren't covered here, so cite WordPress 101 instead.)
- SEO Starter Guide (plain-English version): "If you have multiple pages that have the same information, try setting up a redirect from non-preferred URLs to a URL that best represents that information. If you can't redirect, use the rel="canonical" link element instead. But again, don't worry too much about this; search engines can generally figure this out for you on their [own]…"
  URL: https://developers.google.com/search/docs/fundamentals/seo-starter-guide · Last updated 2025-12-10 UTC. **Documented**
- rel=canonical is for duplicates, not different pages: "Specifying a rel=canonical from page 2 (or any later page) to page 1 is not correct use of rel=canonical, as these are not duplicate pages." and "Avoid specifying rel=canonical from landing or category pages to featured articles as that will make the featured article the preferred URL in search results."
  URL: https://developers.google.com/search/blog/2013/04/5-common-mistakes-with-relcanonical · Monday, April 08, 2013, Allan Scott. **Documented** (2013. The page carries Google's "information may be outdated" banner.)

---

## 3. Search Console Performance report: which pages rank for one query

*UI labels below are from help docs, not tested live.*

### Menu path and tabs
- Report name in Help: "Performance report (Search results)". Help URL: https://support.google.com/webmasters/answer/7576553 (no last-updated date shown; footer ©2026).
- Default view: "The default view of the report shows click and impression data for your site in Google Search results for the past three months." **Documented**
- Dimension tabs: "select any of the Dimension tabs above the table". Tabs listed: Queries, Pages, Countries, Devices, Search appearance, Dates.
  URL: https://support.google.com/webmasters/answer/17011259 ("Performance report (Search results): Dimensions and data groupings"). **Documented**
- Search type filter options: "Web: text-based", "Web: multimodal", "Image", "Video", "News" (answer/7576553). **Documented**. "Web: text-based / multimodal" is a newer split, see Freshness flags.

### Filter by one query, then see the pages (the cannibalisation check)
- "Click the + Add filter label in the filters section at the top of the report or look for the Search type and date filters, which are always present. OR, click any row in a table to automatically filter data by that row."
  URL: https://support.google.com/webmasters/answer/17011165 ("Performance report (Search results): Advanced filtering and comparison"). **Documented**
- Text filter steps: "Click + Add filter in the filters row. Choose either Queries or Pages. Choose Queries containing or URLs containing to match your provided string. Choose Queries not containing or URLs not containing to exclude your provided string. Enter the string to match. The match is not case-sensitive, but is otherwise exact, including any spaces. Click Apply." Same URL. **Documented**
- So the documented path is: Performance → Search results → click the query row on the **Queries** tab (or + Add filter → Queries → Queries containing) → open the **Pages** tab. Help does not spell out "then open the Pages tab" as one sequence. That is our assembly of documented steps. Semrush describes the same sequence (see §6). Help names no "Exact query" option, though many users report seeing one. **Not confirmed in docs.**
- What changes after a row click: Help says only that clicking a row filters. A tab switch (Pages ↔ Queries) is reported by SEJ coverage of "sticky filters", not by Help. **Not confirmed in docs.**

### Regex filter
- "Click + Add filter in the filters row. Choose either Queries or Pages. Choose Custom (regex). Enter your regular expression. For multiple values, separate them with a vertical bar (|) and surround the whole expression with parentheses … If you want to see all values except the specified values, choose Doesn't match regex. Otherwise, use the default Matches regex. Click Apply."
  URL: https://support.google.com/webmasters/answer/17011165. **Documented**
- "Syntax: The RE2 syntax is used. Default matching: Default matching is a "partial match." … Case-sensitivity: Default regex matching is not case-sensitive. You can prepend (?-i) …" Same URL. **Documented**
- No character limit for regex is stated in Help. **Not found.**

### Compare
- "Open or add a filter by editing an existing filter, or click New to add a new one (for example, for Date or Search type). Choose Compare in the filter properties dialog box. Add the dimensions or time periods you want to compare. … Click Apply. When you compare two values, the results table will display a Difference column to compare values in each row." Same URL. **Documented**
- "Limit: You can have only one comparison at a time. Adding a new comparison filter will replace an existing one." Same URL. **Documented**
- "Keep in mind that comparing by page or search appearance, the metric calculation for CTR, impressions, and clicks might change." Same URL. **Documented**. Useful for comparing two cannibalising pages (Page A vs Page B on one query), with that caveat.

### How a site's multiple pages are counted (important when reading cannibalisation)
- "Average position: The average position of the topmost result from your site. In the chart: The value is the average position of the topmost result from your entire site. In the table: The value is the average position in Search results for the specific URL or grouping dimension shown in the table row." (answer/7576553) **Documented**
- "Data on the chart is aggregated by property. For example, if two results from the same site appear for one query, they count as a single impression in the chart total." (answer/7576553) **Documented**
- "Data grouped by Queries, Countries, Devices, or Dates is aggregated by property. Data grouped by Pages or Search appearance is aggregated by page." (answer/7576553) **Documented**. Page-tab totals can therefore be higher than the chart total when two pages show for one query.
- "Most performance data in this report is assigned to the page's canonical URL, not to a duplicate URL. Data credit: When a user clicks a duplicate URL in Search results, the click counts toward the canonical URL, not the URL the user visits." (answer/17011259) **Documented**
- "The page dimension groups data by the final URL linked by a Search result after any redirects." (answer/17011259) **Documented**

### Data limits (Google's wording)
- Anonymised queries: "Anonymized queries are those that aren't issued by more than a few dozen users over a two-to-three month period. To protect privacy, the actual queries won't be shown in the Search performance data."
  URL: https://developers.google.com/search/blog/2022/10/performance-data-deep-dive · Wednesday, October 19, 2022. **Documented**
- "Some queries are omitted from the report to protect user privacy. These are called anonymized queries. They're included in chart totals, unless a query filter is applied (for example, "queries containing" or "queries not containing" a given string)." (answer/17011259) **Documented**
- "Data truncation: Due to internal limitations, Search Console stores and shows only the most important data rows. Not all queries beyond anonymized queries are shown in the table. The most complete list of queries can be exported using bulk data exports." (answer/17011259) **Documented**
- "Filtering your data by query or URL can affect the report totals due to data truncation and the omission of anonymized queries." (answer/17011165) **Documented**
- Row limit: "The maximum you can export through the Search Console user interface is 1,000 rows of data." (2022 deep-dive blog) **Documented**. The current Help pages don't repeat the 1,000 figure.
- Freshness: "The newest data can be preliminary, meaning it's still being collected and might change in the next few hours. Preliminary data is indicated by a dotted line on the graph." (answer/7576553) **Documented**
- "Complete days: By default, only complete days are included." / "All dates are in Pacific Time Zone (PT)." (answer/17011259) **Documented**
- 16 months: "Choose the Date filter on top of the chart and select Last 16 months."
  URL: https://developers.google.com/search/docs/monitor-debug/debugging-search-traffic-drops · Last updated 2025-12-10 UTC. **Documented**. Origin: "Search Performance: with 16 months of data!" (Search Central Blog, Jan 2018: https://developers.google.com/search/blog/2018/01/introducing-new-search-console).
- Shown-only data (Mueller): "Search Console shows data for when pages were actually shown, it's not a theoretical measurement." (see §1). **Google public comment**

---

## 4. `site:` operator (with a topic word) for finding competing pages

URL: https://developers.google.com/search/docs/monitor-debug/search-operators/all-search-site · Last updated 2025-12-10 UTC

- Documented example usage: "site:https://example.com/ lemon Shows which URLs on the site can show up for the term "lemon"." **Documented**. This is the exact pattern for a cannibalisation check, e.g. `site:nilacoffee.example french press`.
- "The site: operator was designed primarily for search users and so it has some restrictions that site owners might find limiting. Specifically: The site: operator doesn't necessarily return all the URLs that are indexed under the prefix specified in the query." **Documented**
- "If a URL is indexed in Google, it can show up in search results for site: queries that are related to the URL, however it's not guaranteed. If a URL doesn't show in a site: query, use the URL Inspection tool to make sure the URL can be indexed and to submit the URL to indexing." **Documented**
- "A site: operator without a query (for example site:example.com) doesn't rank the results. It will generally show the shortest URL for the prefix at the top, but otherwise the results are relatively random." **Documented**
- "site:https://www.example.com doesn't return the same results as site:https://example.com/." **Documented**
- `intitle:` and quoted phrases: this page does not document them. **Not found** on this page (see Not found).
- Ahrefs' version: "Head to Google and search for `site:yourwebsite.com "topic"`. You'll see all the pages on your site related to that topic." **(fetch-tool extract)** https://ahrefs.com/blog/keyword-cannibalization/ (updated 10 Jan 2024). **Observed practice**. Note that "all the pages" overstates it, given Google's "doesn't necessarily return all" caveat above.
- `&filter=0`: Ahrefs says appending it "removes host clustering". **(fetch-tool extract)**, same URL. **Observed practice / undocumented by Google.** Don't teach it as reliable.

---

## 5. SERP-overlap keyword grouping (clustering)

Google publishes no clustering method or threshold. Everything here is **Observed practice**.

- Ahrefs: "Keyword mapping is the process of grouping keywords into topics and assigning them to pages." / "You do this by looking at the similarity of search results between keywords." / "If they're similar, you can infer they have the same or similar intent and should be mapped to the same page." **(fetch-tool extract)**
  URL: https://ahrefs.com/blog/keyword-mapping/ · Joshua Hardwick, published 30 Nov 2023. **Observed practice**
- Keyword Insights (a SERP-clustering tool, help doc): the setting is "The minimum number of URLs in the SERPs required to group keywords." / "By default, we use the value 3." / "It means if we see 3 common URLs for keywords, these keywords will be put into a single cluster." / "The higher the accuracy, the fewer keywords will be put into a single group." / "we look at the full ranking URL when clustering and not the root domain." **(fetch-tool extract)** Their worked example compares the top 10.
  URL: https://docs.keywordinsights.ai/learning-center/the-features/keyword-clustering/the-advanced-settings/keyword-grouping-accuracy (no date). **Observed practice**. This is the best-sourced basis for a "3+ shared URLs in the top 10" rule of thumb.
- Other thresholds seen (search snippets only, not opened): LowFruits about 40% overlap (4 of 10). Other vendor blogs say 3–5. LowFruits docs returned 403/DNS errors. **Observed practice, unverified**.
- Semrush Keyword Strategy Builder clusters "based on search intent and SERP similarity" (search snippet only). Threshold not published. **Observed practice**
- Manual free method (our synthesis, no single source documents it end to end): search each keyword in a clean/private window, paste the top 10 URLs into a sheet, count shared full URLs for each pair, and group pairs with ≥3 shared. Then sanity-check intent (L01) by eye. Label it in the lesson as a rule of thumb.
- Counter-view: Mueller says "pages aren't duplicates just because they happen to appear in the same search results page" (§1). Overlap shows shared intent. It doesn't prove two of *your* pages are duplicates. **Google public comment**

---

## 6. Fix options and when cannibalisation is NOT a problem

| Fix | Google-documented? | Source / wording |
|---|---|---|
| Merge into one page + 301 the old URL | **Documented** (for consolidated content) | "if you have consolidated content previously hosted on multiple pages to a new single page, you can redirect the older URLs to that new, consolidated page." (site-move page, §2) |
| rel=canonical | **Documented, but only for duplicates or very similar pages** | consolidate-duplicate-urls. The 2013 blog warns against canonicalising non-duplicates. |
| noindex | **Google advises against it for canonical selection** | "We don't recommend using noindex to prevent selection of a canonical page within a single site, because it will completely block the page from Search." |
| robots.txt / URL removal tool | **Google says don't** | consolidate-duplicate-urls |
| Differentiate intent (rewrite one page for a different job) | Not documented by Google as a "fix". Mueller: "Reduce unnecesary duplication and spend your energy on a fantastic page" | **Observed practice** + **Google public comment** |
| Internal links / anchor text pointing to the chosen page | Google documents that anchor text "tells users and Google something about the page you're linking to" (SEO Starter Guide). Its use as a cannibalisation fix is not documented. | **Observed practice** |
| Do nothing | Mueller: "If you have 3 different pages appearing in the same search result, that doesn't seem problematic to me just because it's "more than 1"." | **Google public comment** |

Industry sources:
- Ahrefs (updated 10 Jan 2024, https://ahrefs.com/blog/keyword-cannibalization/) **(fetch-tool extract)**, **Observed practice**:
  - "it doesn't always mean that something's wrong or needs fixing."
  - "This is fine if the keyword has mixed intent, and this usually isn't a real cannibalization issue."
  - "Canonicalization is not a way to fix keyword cannibalization."
  - "Noindexing causes search engines to drop the page from their index, meaning it won't rank for anything."
  - Delete: "This is rarely a good solution unless the page has no value for your business."
- Semrush, "Keyword cannibalization: How to find, fix, and prevent it", Carlos Silva, 14 Jul 2026, https://www.semrush.com/blog/keyword-cannibalization-guide/ **(fetch-tool extract)**, **Observed practice**:
  - GSC steps (paraphrased by the fetch tool): Performance → "Search results" → click a keyword (applies a "Query:" filter), or "+ Add filter" → "Query" → check the "Pages" tab. More than one URL with clicks and impressions *may* signal cannibalisation.
  - Fix matrix: Redirects for "Similar or duplicate pages you don't need to keep". Canonical tags for "Duplicate pages you need to keep". Differentiate for "Similar pages you need to keep". Noindex for "Similar pages you need to keep but other solutions won't work". Also: "you should only use noindex as a last resort to solving cannibalization issues".
  - Not a problem: branded keywords ("it's common to secure multiple high rankings for the same keyword") and broad topics.
- Bing: keep separate pages "only … when intent clearly changes" (§1). **Documented** (Bing)

**When it's not a problem (summary for the lesson):** (a) both pages show together and each serves a different intent (Mueller; Ahrefs "mixed intent"). (b) Branded queries (Semrush). (c) Overlap is only theoretical, so the pages aren't actually shown for that query (Mueller). (d) Each page earns its own long-tail traffic (Ahrefs, paraphrase only).

---

## 7. Keyword map formats and Google Sheets functions

### Templates (columns) from reputable sources: **Observed practice**
- Semrush, "Keyword mapping", Carlos Silva, 27 Jul 2026, https://www.semrush.com/blog/keyword-mapping/ **(fetch-tool extract)**: image caption lists columns "pillar pages, subpages, keywords, volume, KD%, target URL, status, and last updated". Defines a keyword cluster as "a group of similar search terms that can be covered on the same page."
- Ahrefs, https://ahrefs.com/blog/keyword-mapping/ (30 Nov 2023) **(fetch-tool extract)**: topic, KD, Traffic Potential, primary and secondary keywords, URL, action (Create / Optimize / No action), assignee. We couldn't see the full template headers. Ahrefs also says that creating separate pages for closely related keywords "would be a waste of time."
- Course capstone columns (from syllabus): topic → keywords → intent → page type → existing or new page → priority. These cover the union of the above, minus paid-tool metrics (KD/TP). Good fit for "free tools only".

### Google Sheets functions (verified against Google Docs Editors Help)
- **COUNTIF**: "Returns a conditional count across a range." Syntax `COUNTIF(range, criterion)`. "criterion can contain wildcards including ? to match any single character or * to match zero or more contiguous characters." "COUNTIF is not case sensitive." "COUNTIF can only perform conditional counts with a single criterion. To use multiple criteria, use COUNTIFS…"
  URL: https://support.google.com/docs/answer/3093480. **Documented**. Use: `=COUNTIF(B:B, B2)>1` flags a keyword or URL mapped twice (one-page-per-topic check). `=COUNTIF(Map!E:E,"*french press*")` counts pages for a topic.
- **COUNTIFS**: "Returns the count of a range depending on multiple criteria." Syntax `COUNTIFS(criteria_range1, criterion1, [criteria_range2, criterion2, ...])`. "Any additional ranges must contain the same number of rows and columns as criteria_range1." URL: https://support.google.com/docs/answer/3256550. **Documented**
- **FILTER**: "Returns a filtered version of the source range, returning only rows or columns that meet the specified conditions." Syntax `FILTER(range, condition1, [condition2, ...])`. "condition arguments must have exactly the same length as range." "If FILTER finds no values which satisfy the provided conditions, #N/A will be returned." URL: https://support.google.com/docs/answer/3093197. **Documented**. Use: `=FILTER(A2:A, D2:D="Commercial")`.
- **UNIQUE**: "Returns unique rows in the provided source range, discarding duplicates. Rows are returned in the order in which they first appear in the source range." Note: "If rows are returned which appear to be duplicates, ensure that cells including text do not have differing hidden text such as trailing spaces." URL: https://support.google.com/docs/answer/10522653. **Documented**
- **Dropdowns** (for Intent / Page type / Priority columns): "At the top, click Insert Dropdown." … "Dropdown from a range" / "Dropdown". Preset dropdowns exist for "Project status" or "Priority". URL: https://support.google.com/docs/answer/186103. **Documented** (UI from help docs, not tested live)

---

## Freshness flags
- **Search Console Help was reorganised.** Performance help is now split into answer/7576553 (overview), 17011259 (dimensions) and 17011165 (filtering and comparison). Old links and screenshots may differ. No last-updated dates are shown (footer ©2026).
- **"Web: text-based" vs "Web: multimodal"** search-type options are new. Older tutorials show plain "Web".
- **AI report configuration** in Performance: "Click the filter icon in the Performance report header to open the tool in the side panel. Type your request into the prompt field." "Each user is currently limited to 20 requests per day. This feature is currently only visible to a small percentage of Search Console users for testing and feedback." (answer/17011165). Experimental, so don't rely on it in the lesson.
- **Branded/non-branded queries filter**: "The filter provides a 16-month history of data, starting from when it was first introduced in March 2025." "This filter isn't available for sites with a low number of impressions." (answer/17011259). A new site like Nila's may not see it.
- **Impressions logging error**: "A logging error prevented Search Console from accurately reporting impressions from May 13, 2025 until April 27, 2026. This issue has been resolved. As a result, you may notice a decrease in impressions … Only impressions and related metrics - CTR and average position - were affected; clicks were not affected" (https://support.google.com/webmasters/answer/6211453, entry headed "April 3"). Impression and position history in that window isn't comparable with later data.
- **`&num=100` removal (Sep 2025)**: widely reported (SEL, many agencies) to have cut deep-position impressions and rank-tracker data. **No Google statement found.** This is the background to the Mueller Q&A ("positions 20 and over").
- **Generative AI performance report (Search)** exists in Search Console Help (https://support.google.com/webmasters/answer/16984139, seen in search results, not opened). It may matter for Modern SEO 101, not here.
- Google's site: doc and SEO Starter Guide were last updated 2025-12-10. Canonicalization 2026-08-20. Consolidate-duplicate-urls 2026-07-10. Redirects 2026-04-14. Site moves 2026-08-20. Spam policies 2026-08-28.
- Semrush posts are dated July 2026, Ahrefs 2023/2024. Vendor UI (Position Tracking "Cannibalization" report, Ahrefs "Multiple URLs only") changes often, and both are paid tools anyway.

## Conflicts between sources
- **Canonical as a cannibalisation fix**: Semrush lists canonical tags for "Duplicate pages you need to keep". Ahrefs says "Canonicalization is not a way to fix keyword cannibalization". Google documents canonical only for "duplicate or very similar pages" and warns against canonicalising non-duplicates (2013). → Teach: canonical only if the two pages are near-duplicates. Otherwise merge+301 or differentiate.
- **Noindex**: Semrush allows it "as a last resort". Ahrefs calls it terrible. Google says "We don't recommend using noindex to prevent selection of a canonical page within a single site". → Teach: avoid.
- **Is cannibalisation real?** Vendors frame it as a common issue. Mueller (2025) says several pages in one result "doesn't seem problematic to me just because it's "more than 1"". Bing (2025) says to consolidate pages that "unintentionally compete for the same intent". → Teach: it's a problem when two pages serve the *same intent* and split signals or confuse users. It isn't a problem just because two URLs appear for one query.
- **Clustering threshold**: Keyword Insights defaults to 3 shared URLs. Others cite 40% (4/10) or 3–5. Keyword Insights' own blog (search snippet only) reportedly mentions 70%. No Google basis. → Teach "3 or more shared top-10 URLs" as a starting rule of thumb and say it's an industry convention.
- **"Exact query" filter option**: commonly cited in tutorials. Not in current Help, which lists only "Queries containing / not containing" and "Custom (regex)".
- **`site:` completeness**: Ahrefs says you'll see "all the pages". Google says it "doesn't necessarily return all the URLs that are indexed".

## Not found
- Any Google documentation page using the words "keyword cannibalization" / "cannibalisation". None found.
- The original Reddit AMA source for Mueller's "We just rank the content we get" (date, thread). Not verified.
- A Google statement on the `&num=100` removal. Not found.
- Google documentation of `intitle:` or quoted-phrase operators for site owners (the Search Central operators section documents `site:`). Not found in this pass. Google's general "Refine searches" help wasn't checked.
- Search Console regex length limit. Not stated in Help.
- A current Help statement of the 1,000-row UI limit (only the 2022 blog has it).
- Whether clicking a Queries row switches to the Pages tab automatically. Not in Help.
- Bing Webmaster Guidelines page text (JS-only page, couldn't be read). Bing's `site:` behaviour isn't documented in what we read.
- LowFruits clustering docs (403 / DNS error). Keyword Insights' 70% figure (seen only in a search snippet).
- Full column headers of the Ahrefs and Semrush downloadable templates (articles only partly describe them).
- WordPress-specific redirect method (core has no redirect UI). Use WordPress 101 / plugin docs, not researched here.

## Hands-on ideas (free tools only)
1. **SERP overlap sheet (L05, ~15 min):** pick 4 Nila phrases (e.g. "french press ratio", "french press coffee ratio", "how to use a french press", "best french press beans"). Search each in a private window. Paste the top 10 URLs into columns. In a helper cell, use `=SUMPRODUCT(COUNTIF(B2:B11, C2:C11))` to count shared URLs between two columns (built from COUNTIF, which is documented. SUMPRODUCT wasn't checked in Help). Group pairs with ≥3 shared. *Expect:* the two ratio phrases overlap heavily. "best french press beans" shows shop/list pages and gets its own page. Results vary by country, device and date, so learners won't match the example exactly.
2. **Keyword Map tab:** columns Topic | Main keyword | Other keywords | Intent (dropdown) | Page type (dropdown) | URL | Existing/New | Priority (dropdown). Add `=COUNTIF(F:F,F2)>1` as a conditional-format rule to highlight any URL used for two topics, and the same on the Main keyword column. *Expect:* TRUE flags show where one-page-per-topic is broken.
3. **`site:` check:** `site:yourdomain.com french press` (Google documents the `site:https://example.com/ lemon` pattern). *Expect:* every page that mentions the term, not only the competing ones, in rough relevance order. Missing pages don't prove a page isn't indexed (use URL Inspection).
4. **Search Console check:** Performance → Search results → click a query on the Queries tab (or + Add filter → Queries → Queries containing) → Pages tab. *Expect:* one or more URLs with their own clicks, impressions and position. Page totals can exceed the chart total (page vs property aggregation). New sites may see few or no rows (anonymised and truncated data, shown-only data). Use Compare to put Page A vs Page B side by side for the same query.
5. **Capstone break-it lab:** plant two Nila posts, "French Press Ratio Guide" and "How Much Coffee for a French Press" (same intent). Learners must (a) prove the overlap (site: + identical SERP intent), (b) pick the keeper (better content, more links, or more clicks in GSC), (c) merge content and 301 the other, citing Google's "consolidated content … redirect the older URLs to that new, consolidated page", (d) update internal links, (e) say why canonical/noindex are wrong here. Include a decoy pair that is *not* cannibalisation (a "french press" product page + a "how to use a french press" guide, i.e. different intents), so learners practise Mueller's "pages aren't duplicates just because they happen to appear in the same search results page".
