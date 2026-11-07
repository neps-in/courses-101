# Research: M06 — Technical SEO Fundamentals

**Researched:** 2026-11-08
**Scope:** primary-source facts for SEO 101 Module 6 (L2): HTTP status codes and soft 404s; robots.txt vs meta robots / `X-Robots-Tag` vs password protection; canonicals and duplicate content; XML sitemaps and IndexNow; redirects; site structure, URL design and crawl depth; Search Console Page indexing report and URL Inspection; staging sites; Screaming Frog; Bing specifics. Supports non-negotiables #7 (indexable before optimised) and #8 (redirect every changed or removed URL).
**Method:** pages were downloaded and converted to text on 2026-11-08, and quotes were copied from that text. "Last updated" dates are the ones shown on each page. Nothing was tested live in Search Console, Bing Webmaster Tools or Screaming Frog. UI labels come from help docs only.

**Labels:** **Documented** = official docs of the company that owns the product (Google, Microsoft Bing, IETF, IndexNow.org, Screaming Frog). **Google public comment** = a named Googler's statement (person, date, where). **Observed practice** = common SEO practice or a third-party report, not official guidance. **Myth/contested** = widely repeated but contradicted or unsupported.

**Earlier lessons already introduced (keep terms consistent, go deeper here):**
- M01.L04 brought in discovery (links, sitemap), the status-code table (200, 301/302, 404, 500-range), the canonical, and the soft 404 ("a real problem you'll fix in Module 6"). It also flagged a made-up URL that redirects to the homepage ("Google may treat these as soft 404s (Module 6)").
- M01.L08 covered submitting a sitemap and the Sitemaps report statuses **Success / Couldn't fetch / Has errors**, plus WordPress "Discourage search engines" adding `noindex`.
- M02.L01 quoted the host move ("the traffic to the old provider reaches zero") and said "changing URLs does [need redirects] (Module 6)".
- M02.L02 said you can't always edit robots.txt on a CMS, a CMS probably already has a sitemap, "Hide a page: a `noindex` rule … (Module 6)", and "Redirect … A **301** means the move is permanent and a **302** means it's temporary."
- Glossary entries already exist for: Canonical URL, Crawlable link, Crawler/Googlebot, Crawling, Discovery, Indexing, Redirect, Request/response, `robots.txt`, Sitemap, Slug, Soft 404, Status code, User agent. **Not yet in the glossary:** `noindex`, meta robots, `X-Robots-Tag`, redirect chain/loop, 410, IndexNow, crawl depth, orphan page, duplicate content, Page indexing report, URL Inspection. M06 should add these.
- Keep the M01.L04 soft 404 definition ("says 'not found' (or is nearly empty) but returns status 200"). It matches Google's wording below.

---

## 1. HTTP status codes and soft 404s

Source: "How HTTP status codes affect Google's crawlers", Google Crawling Infrastructure. https://developers.google.com/crawling/docs/troubleshooting/http-status-codes. Last updated 2026-02-04. The old Search Central URL `/search/docs/crawling-indexing/http-network-errors` now redirects here.

- "For Google Search, an HTTP 2xx (success) status code doesn't guarantee indexing." — **Documented**
- 2xx: "Google considers the content for processing (for example, in the case of Google Search, for indexing). If the content suggests an error for Google Search, an empty page or an error message, Search Console will show a soft 404 error." — **Documented**
- 200: "Google passes on whatever it received to the next processing step (which is product specific). For Google Search, the next system is the indexing pipeline. The indexing systems may index the content, but that's not guaranteed." — **Documented**
- 204: "Google wasn't able to receive any content and therefore can't process it." — **Documented**
- **Redirect hops:** "By default, Google's crawlers follow up to 10 redirect hops. However, specific products' crawlers may have different limits. For example, Googlebot generally follows 10 redirect hops when crawling for general web content, but Google Inspection Tools doesn't follow redirects." — **Documented**
- "Any content Google receives from the redirecting URL is ignored, and the final target URL's content is processed instead." — **Documented**
- 301: "Google follows the redirect, and Google systems use the redirect as a strong signal that the redirect target should be processed." — **Documented**
- 302: "By default, Google's crawlers follow the redirect, and Google systems use the redirect as a weak signal that the redirect target should be processed." — **Documented**
- 307: "Equivalent to 302." 308: "Equivalent to 301." — **Documented**
- "While Google treats these status codes the same way, keep in mind that they're semantically different. Use the status code that's appropriate for the redirect so other clients (for example, e-readers, other search engines) may benefit from it." — **Documented**
- 304: "Google crawlers signal the next processing system that the content is the same as last time it was crawled." — **Documented**
- 4xx: "In the case of Google Search, Google doesn't index URLs that return a 4xx status code, and URLs that are already indexed and return a 4xx status code are removed from the index." — **Documented**
- "All 4xx errors, except 429, are treated the same: Google crawlers inform the next processing system that the content doesn't exist. … Newly encountered 404 pages aren't processed. The crawling frequency gradually decreases." — **Documented**. Teaching point: 404 and 410 are treated the same by Google.
- "Don't use 401 and 403 status codes for limiting the crawl rate. The 4xx status codes, except 429, have no effect on crawl rate." — **Documented**
- 429: "Google's crawlers treat the 429 status code as a signal that the server is overloaded, and it's considered a server error." — **Documented**
- 5xx: "5xx and 429 server errors prompt Google's crawlers to temporarily slow down with crawling. For Google Search, already indexed URLs are preserved in the index, but eventually dropped." — **Documented** (no timeframe is given).
- 500: "Google decreases the crawl rate for the site. The decrease in crawl rate is proportionate to the number of individual URLs that are returning a server error. For Google Search, Google's indexing pipeline removes from the index URLs that persistently return a server error." — **Documented**
- "Once the server starts responding with a 2xx status code, Google gradually increases the crawl rate for the site." — **Documented**
- The page covers "the top 20 status codes that Google encounters on the web." — **Documented**

### Soft 404
Source: "Troubleshoot Google Search crawling errors". https://developers.google.com/search/docs/crawling-indexing/troubleshoot-crawling-errors. Last updated 2025-12-18.

- "A soft 404 error is when a URL that returns a page telling the user that the page does not exist and also a 200 (success) status code. In some cases, it might be a page with no main content or empty page." — **Documented**
- Causes listed: "A missing server-side include file." "A broken connection to the database." "An empty internal search result page." "An unloaded or otherwise missing JavaScript file." — **Documented**
- "Such pages are excluded from Search." — **Documented**
- Fix, page gone: "If you removed the page and there's no replacement page on your site with similar content, return a 404 (not found) or 410 (gone) response (status) code for the page." — **Documented**
- "Custom 404 pages are created solely for users. Since these pages are useless from a search engine's perspective, make sure the server returns a 404 HTTP status code to prevent having the pages indexed." — **Documented**
- Fix, page moved: "If your page has moved or has a clear replacement on your site, return a 301 (permanent redirect) to redirect the user." — **Documented**
- Fix, page still exists: "If an otherwise good page was flagged with a soft 404 error, it's likely it didn't load properly for Googlebot, it was missing critical resources, or it displayed a prominent error message during rendering." — **Documented**
- Overload emergency: "Return 503 or 429 HTTP response status codes temporarily for Googlebot requests when your server is overloaded. Googlebot will retry these URLs for about 2 days. Note that returning "no availability" codes for more than a few days will cause Google to permanently slow or stop crawling URLs on your site" — **Documented**
- Crawl budget guide (https://developers.google.com/crawling/docs/crawl-budget, last updated 2026-07-22): "soft 404 pages will continue to be crawled, and waste your budget." — **Documented**
- Same guide: "Return a 404 or 410 status code for permanently removed pages. Google won't forget a URL that it knows about, but a 404 status code is a strong signal not to crawl that URL again." — **Documented**

---

## 2. robots.txt

### Introduction to robots.txt
https://developers.google.com/search/docs/crawling-indexing/robots/intro. Last updated 2025-12-10.

- "A robots.txt file tells search engine crawlers which URLs the crawler can access on your site. This is used mainly to avoid overloading your site with requests; it is not a mechanism for keeping a web page out of Google. To keep a web page out of Google, block indexing with noindex or password-protect the page." — **Documented** (key quote for the failure point)
- "Warning: Don't use a robots.txt file as a means to hide your web pages (including PDFs and other text-based formats supported by Google) from Google Search results." — **Documented**
- "If other pages point to your page with descriptive text, Google could still index the URL without visiting the page." — **Documented**
- "If your web page is blocked with a robots.txt file, its URL can still appear in search results, but the search result won't have a description." — **Documented**
- Media files: "Use a robots.txt file to manage crawl traffic, and also to prevent image, video, and audio files from appearing in Google Search results." — **Documented**
- Resource files: "if the absence of these resources make the page harder for Google's crawler to understand the page, don't block them" — **Documented**
- Limitations (bold headings on the page): "robots.txt rules may not be supported by all search engines." / "Different crawlers interpret syntax differently." / "A page that's disallowed in robots.txt can still be indexed if linked to from other sites." — **Documented**
- "While Googlebot and other respectable web crawlers obey the instructions in a robots.txt file, other crawlers might not. Therefore, if you want to keep information secure from web crawlers, it's better to use other blocking methods, such as password-protecting private files on your server." — **Documented**
- "To properly prevent your URL from appearing in Google Search results, password-protect the files on your server, use the noindex meta tag or response header, or remove the page entirely." — **Documented**
- CMS note (already used in M02.L02): "If you use a CMS, such as Wix or Blogger, you might not need to (or be able to) edit your robots.txt file directly." — **Documented**

### How Google interprets the robots.txt specification
https://developers.google.com/crawling/docs/robots-txt/robots-txt-spec. Last updated 2026-10-23. ⚠️ The old URL `/search/docs/crawling-indexing/robots/robots_txt` now redirects to the Crawling Infrastructure site. Cite the new URL.

- "This page describes Google's interpretation of the REP. For the original standard, check RFC 9309." — **Documented**
- "The URL for the robots.txt file is (like other URLs) case-sensitive." — **Documented**
- "A robots.txt on a subdomain is only valid for that subdomain." — **Documented**
- Size: "Google enforces a robots.txt file size limit of 500 kibibytes (KiB). Content which is after the maximum file size is ignored." — **Documented**
- Supported fields: "Google supports the following fields (other fields such as crawl-delay aren't supported): user-agent … allow … disallow … sitemap" — **Documented**
- "The field name (disallow) is case-insensitive, but its value is case-sensitive." — **Documented**
- Groups: "Only one group is valid for a particular crawler. Google's crawlers determine the correct group of rules by finding in the robots.txt file the group with the most specific user agent that matches the crawler's user agent. Other groups are ignored." — **Documented**
- Precedence: "When matching robots.txt rules to URLs, crawlers use the most specific rule based on the length of the rule path. In case of conflicting rules, including those with wildcards, Google uses the least restrictive rule." — **Documented**
- robots.txt redirects: "Google follows at least five redirect hops as defined by RFC 1945 and then stops and treats it as a 404 for the robots.txt file." — **Documented** (this is different from the 10-hop limit for normal pages)
- robots.txt 4xx: "Google's crawlers treat all 4xx errors, except 429, as if a valid robots.txt file didn't exist. This means that Google assumes that there are no crawl restrictions." — **Documented**
- robots.txt 5xx: "For the first 12 hours, Google stops crawling the site but keeps trying to fetch the robots.txt file." / "If Google can't fetch a new version, for the next 30 days Google will use the last good version, while still trying to fetch a new version." — **Documented**. Teaching point: a robots.txt that returns 5xx can halt crawling of the whole site.
- Caching: "Google generally caches the contents of robots.txt file for up to 24 hours, but may cache it longer in situations where refreshing the cached version isn't possible (for example, due to timeouts or 5xx errors)." — **Documented**
- Site-move doc (see §6): "It's fine if you don't have a robots.txt file on your site, but be sure to return a proper 404 HTTP status code if the robots.txt file doesn't exist." — **Documented**

### RFC 9309 status
https://www.rfc-editor.org/rfc/rfc9309 and https://datatracker.ietf.org/doc/rfc9309/

- Datatracker: "RFC - Proposed Standard (September 2022)". Authors are M. Koster, G. Illyes, H. Zeller and L. Sassman (the last three from Google LLC). — **Documented**
- "This is an Internet Standards Track document." — **Documented**
- "These rules are not a form of access authorization." — **Documented**
- "The Robots Exclusion Protocol is not a substitute for valid content security measures. Listing paths in the robots.txt file exposes them publicly and thus makes the paths discoverable." — **Documented** (good for the "don't list secret folders in robots.txt" point)
- "Crawlers SHOULD NOT use the cached version for more than 24 hours, unless the robots.txt file is unreachable." / "The parsing limit MUST be at least 500 kibibytes [KiB]." / "The crawlers SHOULD follow at least five consecutive redirects" — **Documented**

### robots.txt report in Search Console (current name)
https://support.google.com/webmasters/answer/6062598 (help docs, not tested live)

- Current name: **"robots.txt report"**. "The robots.txt report shows which robots.txt files Google found for the top 20 hosts on your site, the last time they were crawled, and any warnings or errors encountered. The report also enables you to request a recrawl of a robots.txt file for emergency situations." — **Documented**
- "A robots.txt file is used to prevent search engines from crawling your site. Use noindex if you want to prevent content from appearing in search results." — **Documented**
- "This report is available only for properties at the domain level." — **Documented**
- Fetch statuses: "Not Fetched - Not found (404)", "Not Fetched - Any other reason", "Fetched" (from help docs, not tested live). "Not having a robots.txt file is fine, and means that Google can crawl all URLs on your site" — **Documented**
- Testing a URL now: "If you want to test whether a specific URL is blocked by a robots.txt file, you can test the availability of the URL with the URL inspection tool." — **Documented**
- "Request a recrawl" (UI label from help docs): "select the more settings icon next to a file in the robots file list and click Request a recrawl." — **Documented**
- **Old robots.txt Tester retirement:** Google Search Central on X, 2023-11-15/16: "we're sunsetting the robots.txt tester." (https://twitter.com/googlesearchc/status/1724826012796461324, as reported by Search Engine Roundtable, 2023-11-16, https://www.seroundtable.com/google-search-console-robots-txt-report-36400.html). — **Google public comment** (relayed by a secondary source; the tweet itself was not fetched). **Exact retirement date: not found** (see "Not found").

---

## 3. Meta robots, `X-Robots-Tag` and `noindex`

### Block Search indexing with noindex
https://developers.google.com/search/docs/crawling-indexing/block-indexing. Last updated 2025-12-10.

- "noindex is a rule set with either a <meta> tag or HTTP response header and is used to prevent indexing content by search engines that support the noindex rule, such as Google. When Googlebot crawls that page and extracts the tag or header, Google will drop that page entirely from Google Search results, regardless of whether other sites link to it." — **Documented**
- **Must be crawlable:** "Important: For the noindex rule to be effective, the page or resource must not be blocked by a robots.txt file, and it has to be otherwise accessible to the crawler. If the page is blocked by a robots.txt file or the crawler can't access the page, the crawler will never see the noindex rule, and the page can still appear in search results, for example if other pages link to it." — **Documented**
- **Not in robots.txt:** "Specifying the noindex rule in the robots.txt file is not supported by Google." — **Documented**
- Two methods: "There are two ways to implement noindex: as a <meta> tag and as an HTTP response header. They have the same effect" — **Documented**
- `<meta name="robots" content="noindex">` and Google-only `<meta name="googlebot" content="noindex">`. — **Documented**
- "Be aware that some search engines might interpret the noindex rule differently." — **Documented**
- Header: "Instead of a <meta> tag, you can return an X-Robots-Tag HTTP header with a value of either noindex or none in your response. A response header can be used for non-HTML resources, such as PDFs, video files, and image files." — **Documented**
- Debugging: "We have to crawl your page in order to see <meta> tags and HTTP headers. If a page is still appearing in results, it's probably because we haven't crawled the page since you added the noindex rule. Depending on the importance of the page on the internet, it may take months for Googlebot to revisit a page." — **Documented**
- "Another reason could also be that the robots.txt file is blocking the URL from Google web crawlers, so they can't see the tag. To unblock your page from Google, you must edit your robots.txt file." — **Documented**

### Robots meta tag, data-nosnippet, and X-Robots-Tag specifications
https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag. Last updated 2026-03-24.

- Rules list as written on the page: `all`, `noindex`, `nofollow`, `none`, `nosnippet`, `indexifembedded`, `max-snippet: [number]`, `max-image-preview: [setting]`, `max-video-preview: [number]`, `notranslate`, `noimageindex`, `unavailable_after: [date/time]`. — **Documented**
- "Multiple rules may be combined in a comma-separated list or in separate meta tags. These rules are case-insensitive. It is possible that these rules may not be treated the same by all other search engines." — **Documented**
- `all`: "There are no restrictions for indexing or serving. This rule is the default value and has no effect if explicitly listed." — **Documented**
- `noindex`: "Do not show this page, media, or resource in search results." — **Documented**
- `nofollow`: "Do not follow the links on this page. If you don't specify this rule, Google may use the links on the page to discover those linked pages." — **Documented**
- `none`: "Equivalent to noindex, nofollow." — **Documented**
- `nosnippet`: "…This applies to all forms of search results (at Google: web search, Google Images, Discover, AI Overviews, AI Mode) and will also prevent the content from being used as a direct input for AI Overviews and AI Mode." — **Documented** (⚠️ AI wording is recent; see Freshness flags)
- `noimageindex`: "Do not index images on this page." — **Documented**
- `unavailable_after`: "Do not show this page in search results after the specified date/time." — **Documented**
- Conflicts: "In the case of conflicting robots rules, the more restrictive rule applies." — **Documented**
- Header examples: `X-Robots-Tag: noindex`, and per-crawler `X-Robots-Tag: googlebot: nofollow` — **Documented**
- Apache/NGINX examples on the page: `Header set X-Robots-Tag "noindex, nofollow"` / `add_header X-Robots-Tag "noindex, nofollow";` — **Documented**
- **Combining with robots.txt:** "robots meta tags and X-Robots-Tag HTTP headers are discovered when a URL is crawled. If a page is disallowed from crawling through the robots.txt file, then any information about indexing or serving rules will not be found and will therefore be ignored. If indexing or serving rules must be followed, the URLs containing those rules cannot be disallowed from crawling." — **Documented**

### Password protection and the "which tool when" table
"Control what you share with Google Search". https://developers.google.com/search/docs/crawling-indexing/control-what-you-share. Last updated 2026-10-21.

- "Remove the content from your site … Removing content from your site is the best way to ensure that it won't appear in Google Search and anywhere else on the Internet." — **Documented**
- "Password-protect your files … If you have confidential or private content on your site, you need to password protect it to ensure only authorized users can access it. This will also prevent that content from appearing in Google Search, or if it already appears, it will eventually remove that content from our search results." — **Documented**
- "Use the noindex rule … Your content can still be linked to and visited through other web pages, or directly visited by users with a link, but the content won't appear in Google Search results." — **Documented**
- "Disallow crawling with robots.txt … Applicable: images and video" — **Documented**. Note that Google lists robots.txt here as a blocking method for **images and video**, not for web pages.
- New row: "Use the Search generative AI control … You can manage your site's inclusion in generative AI features on Google Search, including AI Overviews and AI Mode, by using the Search generative AI control in Search Console." — **Documented** ⚠️ new; out of scope for M06 beyond a mention (belongs to M14/Modern SEO).
- Page indexing help FAQ: "If you want your page to be blocked from Google Search results, you can either require some kind of login for the page, or you can use a noindex directive on the page. Using a robots.txt rule is not recommended for blocking a page, and will actually prevent noindex from being seen by Google." — **Documented** (https://support.google.com/webmasters/answer/7440203)
- Crawl budget guide: "Don't use noindex, as Google will still request, but then drop the page when it sees a noindex meta tag or header in the HTTP response, wasting crawling time." (said about URLs you don't want crawled at all, on very large sites) — **Documented**. Teaching point: robots.txt controls crawling, `noindex` controls indexing, and a login controls access.

---

## 4. Canonicalization and duplicate content

### What is canonicalization
https://developers.google.com/search/docs/crawling-indexing/canonicalization. Last updated 2026-08-20.

- "Canonicalization is the process of selecting the representative –canonical– URL of a piece of content." — **Documented**
- Reasons for duplicates: "Region variants", "Device variants", "Protocol variants: for example, the HTTP and HTTPS versions of a site", "Site functions: for example, the results of sorting and filtering functions of a category page", "Accidental variants: for example, the demo version of the site is accidentally left accessible to crawlers" — **Documented** (the last one links to the staging point)
- "Some duplicate content on a site is normal and it's not a violation of Google's spam policies." — **Documented** (counters the "duplicate content penalty" myth)
- How Google picks: "If Google finds multiple pages that seem to be the same or the primary content very similar, it clusters them together. Google then chooses the page that, based on the factors (or signals) the indexing process collected, is objectively the most complete and useful for search users, and marks it as the canonical." — **Documented**
- "The canonical page will be crawled most regularly; duplicates are crawled less frequently in order to reduce the crawling load on sites." — **Documented**
- Signals: "whether the page is served over HTTP or HTTPS, redirects, presence of the URL in a sitemap, and rel="canonical" link annotations. You can indicate your preference to Google using these techniques, but Google may choose a different page as canonical than you do, for various reasons. That is, indicating a canonical preference is a hint, not a rule." — **Documented**

### How to specify a canonical URL (methods ranked)
https://developers.google.com/search/docs/crawling-indexing/consolidate-duplicate-urls. Last updated 2026-07-10.

- "These are, in order of how strongly they can influence canonicalization: Redirects: A strong signal that the target of the redirect should become canonical. rel="canonical" link annotations: A strong signal that the specified URL should become canonical. Sitemap inclusion: A weak signal that helps the URLs that are included in a sitemap become canonical." — **Documented**
- "Keep in mind that these methods can stack and thus become more effective when combined." — **Documented**
- "While we encourage you to use these methods, none of them are required; your site will likely do just fine without specifying a canonical preference." — **Documented**
- **Best practices / common mistakes** (as listed):
  - "Don't use the robots.txt file for canonicalization purposes. Google may still index URLs that are disallowed in robots.txt without their content."
  - "Don't use the URL removal tool for canonicalization. It hides all versions of a URL from Search."
  - "Don't specify different URLs as canonical for the same page using different canonicalization techniques (for example, don't specify one URL in a sitemap, but a different URL for that same page using rel="canonical")."
  - "Don't specify a URL fragment as canonical, as Google generally doesn't support URL fragments."
  - "Do include a rel="canonical" link on the canonical page itself (also known as a self-referential canonical)."
  - "We don't recommend using noindex to prevent selection of a canonical page within a single site, because it will completely block the page from Search. rel="canonical" link annotations are the preferred solution."
  - "When linking within your site, link to the canonical URL rather than a duplicate URL." — all **Documented**
- "Use absolute paths rather than relative paths with the rel="canonical" link element. Even though relative paths are supported by Google, they can cause problems in the long run (for example, if you unintentionally allow your testing site to be crawled) and thus we don't recommend them." — **Documented**
- "The rel="canonical" link element is only accepted if it appears in the <head> section of the HTML" — **Documented**
- HTTP header option: `Link: <https://www.example.com/downloads/white-paper.pdf>; rel="canonical"` "Google supports this method for web search results only." — **Documented**
- Sitemap: "All pages listed in a sitemap are suggested as canonicals; Google will decide which pages (if any) are duplicates, based on similarity of content." — **Documented**
- Redirect method: "Use this method when you want to get rid of existing duplicate pages. … For the quickest effect, use HTTP (also known as server-side) redirects." — **Documented**
- HTTPS: "Avoid bad TLS/SSL certificates and HTTPS-to-HTTP redirects because they cause Google to prefer HTTP very strongly." — **Documented**
- **Canonicals pointing to redirected pages:** Google's docs do not name this mistake directly. The nearest Google wording is the "Incorrect canonical elements" row below. Screaming Frog's "Non-Indexable Canonical" filter flags it (see §10). — **Observed practice** (as a named rule)

### Fix canonicalization issues
https://developers.google.com/search/docs/crawling-indexing/canonicalization-troubleshooting. Last updated 2026-08-21.

- "Even if you explicitly designate a canonical page, Google might choose a different canonical for various reasons, such as the quality of the content or technical signals." — **Documented**
- "Re-evaluation takes time: Even after fixing content issues, Google might hold pages in a duplicate cluster for up to two weeks." — **Documented**
- Common issues table rows: "Language variants without localized annotations", "Incorrect canonical elements", "Misconfigured servers", "Malicious hacking", "Syndicated content", "A copycat website". — **Documented**
- "Incorrect canonical elements … Some content management systems (CMS) or CMS plugins can make incorrect use of canonicalization techniques to point to undesired URLs. Check your HTML with your browser's developer tools to see if so." — **Documented**
- Request indexing "is subject to quotas, reserve it for your most important URLs." — **Documented**

### "Duplicate, Google chose different canonical than user" (Page indexing reason)
https://support.google.com/webmasters/answer/7440203 (help docs, not tested live)

- "This page is marked as canonical for a set of pages, but Google thinks another URL makes a better canonical. Google has indexed the page that we consider canonical rather than this one." — **Documented**
- "If the user-declared canonical is not similar to the current page, then Google won't ever choose that URL as canonical. A duplicate page must be similar to the canonical. (That's what duplicate means.)" — **Documented**
- URL Inspection fields used: "Page indexing > Google-selected canonical" and "Page indexing > User-declared canonical" (UI labels from help docs, not tested live).

---

## 5. XML sitemaps and IndexNow

### Google: build and submit a sitemap
https://developers.google.com/search/docs/crawling-indexing/sitemaps/build-sitemap. Last updated 2026-07-08.

- "All formats limit a single sitemap to 50MB (uncompressed) or 50,000 URLs. If you have a larger file or more URLs, you must break your sitemap into multiple sitemaps. You can optionally create a sitemap index file and submit that single index file to Google." — **Documented**
- "Use fully-qualified, absolute URLs in your sitemaps." — **Documented**
- "Include the URLs in your sitemap that you want to see in Google's search results." — **Documented**
- "Google ignores <priority> and <changefreq> values." — **Documented**
- "Google uses the <lastmod> value if it's consistently and verifiably (for example by comparing to the last modification of the page) accurate." — **Documented**
- "The <lastmod> value should reflect the date and time of the last significant update to the page. For example, an update to the main content, the structured data, or links on the page is generally considered significant, however an update to the copyright date is not." — **Documented**
- "You don't have to worry about the order of the URLs in your sitemap, it doesn't matter to Google." — **Documented**
- "Keep in mind that submitting a sitemap is merely a hint: it doesn't guarantee that Google will download the sitemap or use the sitemap for crawling URLs on the site." — **Documented**
- robots.txt line: "Sitemap: https://example.com/my_sitemap.xml" "You can specify multiple sitemap lines, and there's no limit to the number of sitemaps you can include in your robots.txt file." — **Documented**
- sitemaps.org protocol (https://www.sitemaps.org/protocol.html): "have no more than 50,000 URLs and must be no larger than 50MB (52,428,800 bytes)." — **Documented**

### Do I need a sitemap?
https://developers.google.com/search/docs/crawling-indexing/sitemaps/overview. Last updated 2025-12-10.

- "If your site's pages are properly linked, Google can usually discover most of your site." — **Documented**
- "A sitemap helps search engines discover URLs on your site, but it doesn't guarantee that all the items in your sitemap will be crawled and indexed. However, in most cases, your site will benefit from having a sitemap." — **Documented**
- "You might not need a sitemap if: Your site is "small". By small, we mean about 500 pages or fewer on your site." — **Documented**

### Sitemap ping deprecation and lastmod (Google blog)
https://developers.google.com/search/blog/2023/06/sitemaps-lastmod-ping. 2023-06-26. The page banner reads: "The sitemaps ping endpoint deprecation is complete."

- "we're deprecating our support for sitemaps ping and the endpoint will stop functioning in 6 months. You can still submit your sitemaps through robots.txt and Search Console, but the HTTP requests ("pings") to the deprecated REST endpoint will result in a 404 error." — **Documented**
- "if your page changed 7 years ago, but you're telling us in the lastmod element that it changed yesterday, eventually we're not going to believe you anymore when it comes to the last modified date of your pages." — **Documented**
- "In these cases it's fine to leave out lastmod for those pages." — **Documented**

### Sitemaps report (Search Console)
https://support.google.com/webmasters/answer/7451001 (help docs, not tested live)

- Statuses: "Success: The sitemap was loaded and processed successfully with no errors. All URLs will be queued for crawling." / "Has errors: The sitemap could be fetched, but has one or more errors. Any URLs that could be parsed without errors from the sitemap will be queued for crawling." / "Couldn't fetch: The sitemap could not be fetched for some reason." — **Documented** (matches M01.L08)
- "This report shows only sitemaps that were submitted using this report or the API. It does not show any sitemaps discovered through a robots.txt reference or other discovery methods." — **Documented**
- "If Google was able to read a sitemap, it will remember that information. A later failure or success to read a sitemap will not cause Google to "forget" the information from previous reads." — **Documented**
- Page indexing sitemap filter options: "All known pages", "All submitted pages", "Unsubmitted pages only", "Specific sitemap URL" (UI labels from help docs, not tested live). — **Documented**
- Crawl budget guide: "Keep your sitemaps up to date. Google reads your sitemap regularly … If your site includes updated content, we recommend including the <lastmod> tag." — **Documented**

### Bing on sitemaps
"Keeping Content Discoverable with Sitemaps in AI Powered Search", Bing Webmaster Blog, 2025-07-31. https://blogs.bing.com/webmaster/2025/7/Keeping-Content-Discoverable-with-Sitemaps-in-AI-Powered-Search/

- "Up to 50,000 URLs per individual sitemap file." / "Up to 50,000 child sitemap files referenced within a single sitemap index file." — **Documented**
- "The lastmod field in your sitemap remains a key signal, helping Bing prioritize URLs for recrawling and reindexing, or skip them entirely if the content hasn't changed since the last crawl." — **Documented**
- "use standard ISO 8601 date formatting for lastmod values, including both the date and time." — **Documented**
- "Optional sitemap tags like changefreq and priority are ignored by Bing and do not influence how your content is crawled or ranked." — **Documented**
- "Avoid setting lastmod to the time your sitemap was generated unless the content on that URL was actually updated." — **Documented**
- "Once your sitemap is referenced in your robots.txt file or submitted through Bing Webmaster Tools, Bing will attempt to fetch it immediately upon submission. After that, it will revisit your sitemap on a regular basis, typically at least once per day" — **Documented**

### IndexNow
indexnow.org home (https://www.indexnow.org/), FAQ (https://www.indexnow.org/faq), documentation (https://www.indexnow.org/documentation), engine list (https://www.indexnow.org/searchengines.json). No dates are shown on these pages.

- "IndexNow is an easy way for websites owners to instantly inform search engines and web crawlers used for information retrieval ("search engines") about latest content changes on their website. In its simplest form, IndexNow is a simple ping so that search engines know that a URL and its content has been added, updated, or deleted" — **Documented**
- "IndexNow is offered under the terms of the Attribution-ShareAlike Creative Commons License and has support from Microsoft Bing, Naver, Seznam.cz, Yandex, Yep." — **Documented** (home page)
- `searchengines.json` lists: bing, yandex, seznam, naver, yep, internetarchive, amazonbot. — **Documented**. The FAQ's endpoint list adds "Amazon". The home-page sentence lists only five, so the sources don't fully agree (see Conflicts).
- Sharing: "your submission will be shared across all IndexNow-enabled search engines" — **Documented** (FAQ)
- "IndexNow supports bulk submission of up to 10,000 URLs per POST request." — **Documented**
- "Submitting a URL does not guarantee immediate indexing." — **Documented**
- "Should I use IndexNow and sitemaps together? Yes. Using both IndexNow and sitemaps improves content visibility and ensures broader search engine coverage." — **Documented**
- Key: "Your-key should have a minimum of 8 and a maximum of 128 hexadecimal characters." and "You must host a UTF-8 encoded text key file {your-key}.txt listing the key in the file at the root directory of your website." — **Documented**
- "The HTTP 200 response code only indicates that the search engine has received your URL." / 202: "URL received. IndexNow key validation pending." — **Documented**
- Bing (https://www.bing.com/indexnow): "IndexNow is a free, open-source protocol empowering website owners with unprecedented control over how quickly their content is discovered and displayed in search results" — **Documented**
- **Google and IndexNow:** Google is **not** listed on indexnow.org's home page or in `searchengines.json` (checked 2026-11-08). — **Documented** (by absence)
- Google spokesperson statement, reported by Search Engine Journal (Roger Montti, 2021-11-09, https://www.searchenginejournal.com/google-will-be-testing-indexnow/426602/): "We're encouraged by work to make web crawling more efficient, and we will be testing the potential benefits of this protocol." — **Google public comment** (unnamed spokesperson, via a secondary source)
- No Google documentation page mentioning IndexNow was found. — see "Not found". Safe wording for the lesson: "Google doesn't list IndexNow support; use a sitemap and Search Console for Google."

---

## 6. Redirects

### Redirects and Google Search
https://developers.google.com/search/docs/crawling-indexing/301-redirects. Last updated 2026-04-14.

- "Permanent redirects: Show the new redirect target in search results." / "Temporary redirects: Show the source page in search results." — **Documented**
- The table is "ordered by how likely Google is able to interpret correctly (for example, a server side redirect has the highest chance of being interpreted correctly by Google)". — **Documented**
- Permanent: "Googlebot follows the redirect, and the indexing pipeline uses the redirect as a signal that the redirect target should be canonical. Use permanent redirects when you're sure that the redirect won't be reverted." Types: "HTTP 301 (moved permanently)", "HTTP 308 (moved permanently)", "meta refresh (0 seconds)", "HTTP refresh (0 seconds)", "JavaScript location", "Crypto redirect". — **Documented**
- Temporary: "Googlebot follows the redirect, but the indexing pipeline doesn't use the redirect as a signal that the redirect target should be canonical. The target page might still be indexed if other canonicalization signals are present." Types: "HTTP 302 (found)", "HTTP 303 (see other)", "HTTP 307 (temporary redirect)", "meta refresh (more than 0 seconds)", "HTTP refresh (more than 0 seconds)". — **Documented**
- "If you need to change the URL of a page as it is shown in search engine results, we recommend that you use a permanent server-side redirect whenever possible." — **Documented**
- Temporary use case: "if a service your site offers is temporarily unavailable, you can set up a temporary redirect to send users to a page that explains what's happening, without compromising the original URL in search results." — **Documented**
- Meta refresh: "Instant meta refresh redirect: Triggers as soon as the page is loaded in a browser. Google Search interprets instant meta refresh redirects as permanent redirects." / "Delayed meta refresh redirect … Google Search interprets delayed meta refresh redirects as temporary redirects." — **Documented**
- JavaScript: "Only use JavaScript redirects if you can't do server-side or meta refresh redirects." / "if you set a JavaScript redirect, Google might never see it if rendering of the content failed." — **Documented**
- Platforms: "If you're using a platform like Blogger or Shopify, the platform may already have built-in redirect solutions." — **Documented**
- Apache example: `Redirect permanent "/old" "https://example.com/new"`. NGINX: `return 301 $scheme://example.com/about/service`. — **Documented**
- Alternate names: "When you redirect a URL, Google keeps track of both the redirect source (the old URL) and the redirect target (the new URL). One of the URLs will be the canonical; which one, depends on signals such as whether the redirect was temporary or permanent." — **Documented**
- This page has **no** chain guidance; that guidance is in the site-move doc below.

### Site moves with URL changes (chains, homepage redirects, duration, redirect maps)
https://developers.google.com/search/docs/crawling-indexing/site-move-with-url-changes. Last updated 2026-08-20.

- Redirect map: "Prepare a URL mapping from the current URLs to their corresponding new format." / "Once you have the listing of old URLs, decide where each one should redirect to." — **Documented**
- "We recommend server side permanent redirects from the old URLs to the new URLs as you indicated in your mapping." — **Documented**
- **Chains:** "Avoid chaining redirects. While Googlebot can follow up to 10 hops in a "chain" of multiple redirects (for example, Page 1 > Page 2 > Page 3), we advise redirecting to the final destination directly. If this is not possible, keep the number of redirects in the chain low, ideally no more than 3 and fewer than 5. Chaining redirects adds latency for users, and not all user agents and browsers support long redirect chains." — **Documented**
- **Homepage redirects → soft 404:** "Avoid irrelevant redirects: Don't redirect many old URLs to one irrelevant single URL destination, such as the home page of the new site. This can confuse users and might be treated as a soft 404 error." — **Documented**
- "However, if you have consolidated content previously hosted on multiple pages to a new single page, you can redirect the older URLs to that new, consolidated page." — **Documented**
- **How long:** "Keep the redirects for as long as possible, generally at least 1 year. This timeframe allows Google to transfer all signals to the new URLs, including recrawling and reassigning links on other sites that point to your old URLs." / "From users' perspective, consider keeping redirects indefinitely." — **Documented**
- Deleted content: "make sure those URLs correctly return an HTTP 404 or 410 error response code on the new site." — **Documented**
- After the move: "Internal links: based on the URL mapping you previously created, replace all URLs that pointed to your own pages." — **Documented**
- Crawl budget guide: "Avoid long redirect chains, which have a negative effect on crawling." — **Documented**
- Page indexing **Redirect error** reasons: "A redirect chain that was too long", "A redirect loop", "A redirect URL that eventually exceeded the max URL length", "A bad or empty URL in the redirect chain" — **Documented** (help docs)
- "The URL redirects to another URL. Redirect URLs are not indexed, only the redirect target." — **Documented** (Page indexing FAQ)
- Course rule #8 ("single-hop 301s") is stricter than Google's "ideally no more than 3". Teach single-hop as the course's own best-practice target and quote Google's wording. — **Observed practice** (course standard)

---

## 7. Site structure, URL structure and crawl depth

### URL structure best practices for Google Search
https://developers.google.com/search/docs/crawling-indexing/url-structure. Last updated 2026-10-21.

- "If your URLs don't meet the following criteria, Google Search will likely crawl your site inefficiently — including but not limited to extremely high crawl rates, or not at all." — **Documented**
- "Don't use fragments to change the content of a page, as Google Search generally doesn't support URL fragments." — **Documented**
- "When possible, use readable words rather than long ID numbers in your URLs." — **Documented**
- "Use words in your audience's language in the URL" — **Documented**
- "we recommend using hyphens (-) instead of underscores (_) to separate words in your URLs" — **Documented**
- "Whenever possible, shorten URLs by trimming unnecessary parameters (meaning, parameters that don't change the content)." — **Documented**
- "Google treats both /APPLE and /apple as distinct URLs with their own content" — **Documented**
- Common issues: "Additive filtering of a set of items", "Irrelevant parameters" (referral, sorting, session IDs), "Calendar issues", "Broken relative links". "Wherever possible, avoid the use of session IDs in URLs and consider using cookies instead." "To fix, use root-relative URLs in your links (instead of parent-relative)." — **Documented**

### SEO Starter Guide (organize your site)
https://developers.google.com/search/docs/fundamentals/seo-starter-guide. Last updated 2025-12-10.

- "Google primarily finds pages through links from other pages it already crawled." — **Documented**
- "search engines will likely understand your pages as they are right now, regardless of how your site is organized." — **Documented** (don't reorganise just for SEO)
- "If you have more than a few thousand URLs on your site, how you organize your content may have effects on how Google crawls and indexes your site. Specifically, using directories (or folders) to group similar topics can help Google learn how often the URLs in individual directories change." — **Documented**
- "Subdomains versus subdirectories: From a business point of view, do whatever makes sense for your business." — **Documented**

### Link best practices
https://developers.google.com/search/docs/crawling-indexing/links-crawlable. Last updated 2025-12-10.

- "Generally, Google can only crawl your link if it's an <a> HTML element (also known as anchor element) with an href attribute." — **Documented** (already in M02.L05; reuse)
- "Every page you care about should have a link from at least one other page on your site." — **Documented** (the orphan-page rule)
- "There's no magical ideal number of links a given page should contain. However, if you think it's too much, then it probably is." — **Documented**

### Ecommerce site structure (crawl depth is documented here)
https://developers.google.com/search/docs/specialty/ecommerce/help-google-understand-your-ecommerce-site-structure. Last updated 2025-12-10.

- "Google can use information such as the number of links it needs to follow to reach a page and the number of links to a page to infer the relative importance of a page over the rest of your site." — **Documented** (closest Google statement on crawl/click depth)
- "add links from menus to category pages, from category pages to sub-category pages, and finally from sub-category pages to all product pages." — **Documented**
- "Googlebot generally doesn't try to submit searches into a search box as part of crawling a site." — **Documented**
- "Google generally doesn't look at the structure of URLs to work out the structure of a site. Instead, it analyzes the linkages between pages to gain insights about the relative importance of different pages on a site." — **Documented**
- "if you have a best selling product, consider linking to it from the home page" — **Documented**

### Public comment and practice on depth
- John Mueller, Google Webmaster Central hangout (about the 31:09 mark), as reported by Matt G. Southern, Search Engine Journal, 2018-06-09 (https://www.searchenginejournal.com/google-click-depth-matters-more-than-url-structure-for-seo/256779/): "From our point of view we don't count slashes in the URLs." / "What does matter for us a little bit is how easy it is to actually find the content." / "So it's more a matter of how many links you have to click through to actually get to that content" — **Google public comment** (secondary report; hangout date not given)
- "Important pages within about 3 clicks of the homepage", "flat beats deep" — **Observed practice**. No Google doc gives a number. Vendor thresholds vary (for example, Botify says depth ≤5 per a secondary search summary; not verified).
- Screaming Frog defines crawl depth as "Depth of the page from the start page (number of 'clicks' away from the start page). Please note, redirects are counted as a level currently in our page depth calculations." — **Documented** (Screaming Frog user guide, §10)

---

## 8. Search Console Page indexing report, URL Inspection and Validate fix

Source: Page indexing report help, https://support.google.com/webmasters/answer/7440203 (no date shown; help docs, not tested live).

### Framing quotes
- "If your site has fewer than 500 pages, you probably don't need to use this report." (non-experts guide; it suggests `site:` searches instead) — **Documented**
- "Remember that Not indexed is not necessarily bad." — **Documented**
- "Your goal is to get the canonical version of every important page indexed. Duplicate or alternate pages shouldn't be indexed." — **Documented**
- "100% coverage: You should not expect all URLs on your site to be indexed, only the canonical pages" — **Documented**
- "Source … In general, you can fix only issues where the source is listed as "Website"." — **Documented**
- "Drop in total indexed pages without corresponding errors: … you might be blocking access to your existing pages via robots.txt, 'noindex' or a required login." — **Documented** (the "production left blocked" symptom)
- "Error spikes … you might have submitted a sitemap that includes URLs that are blocked for crawling by robots.txt, noindex, or a login requirement." — **Documented**
- 404s: "In general, we recommend fixing only 404 errors that you link to yourself or list in a sitemap." — **Documented**
- "the Page indexing report shows only URLs that have shown 404 errors in the past month." — **Documented**
- Example list "is limited to 1,000 rows". — **Documented**

### Reason names and Google's explanations (exact names as written in the help doc)
Under **Not indexed**:
- **Server error (5xx)** — "Your server returned a 500-level error when the page was requested."
- **Redirect error** — "A redirect chain that was too long / A redirect loop / A redirect URL that eventually exceeded the max URL length / A bad or empty URL in the redirect chain"
- **URL blocked by robots.txt** — "This page was blocked by your site's robots.txt file. … Note that this does not guarantee that the page won't be indexed through some other means. … To ensure that a page is not indexed by Google, remove the robots.txt block and use a 'noindex' directive."
- **URL marked 'noindex'** — "When Google tried to index the page it encountered a 'noindex' directive and therefore did not index it. If you do not want this page indexed, congratulations!" The check path is "Coverage > Indexing > Indexing allowed?".
- **Soft 404** — "it returns a user-friendly "not found" message but not a 404 HTTP response code. We recommend returning a 404 response code for truly "not found" pages".
- **Blocked due to unauthorized request (401)** — "You can verify this error by visiting the page in incognito mode."
- **Not found (404)** — "Google discovered this URL without any explicit request or sitemap. … there is no way to tell Googlebot to permanently forget a URL, although it will crawl it less and less often. 404 responses are not necessarily a problem, if the page has been removed without any replacement. If your page has moved, use a 301 redirect to the new location."
- **Blocked due to access forbidden (403)** — "Googlebot never provides credentials, so your server is returning this error incorrectly."
- **URL blocked due to other 4xx issue**
- **Crawled - currently not indexed** — "The page was crawled by Google but not indexed. Google doesn't index all pages across the web, so this is a common message for many sites and doesn't necessarily indicate an issue that needs attention."
- **Discovered - currently not indexed** — "The page was found by Google, but not crawled yet. Typically, Google wanted to crawl the URL but this was expected to overload the site; therefore Google rescheduled the crawl. This is why the last crawl date is empty on the report."
- **Alternate page with proper canonical tag** — "This page correctly points to the canonical page, which is indexed, so there is nothing you need to do."
- **Duplicate without user-selected canonical** — "This page is a duplicate of another page, although it doesn't indicate a preferred canonical page. Google has chosen the other page as the canonical for this page, and so will not serve this page in Search. … This is not an error, but is working as intended".
- **Duplicate, Google chose different canonical than user** — see §4.
- **Page with redirect** — "This is a non-canonical URL that redirects to another page. As such, this URL will not be indexed. The target URL of the redirect might or might not be indexed". "A canonical URL with a redirect can be indexed." "The live URL Inspection test follows redirects and then tests the final URL, although the live test doesn't indicate that it is following a redirect."

Under **Improve page experience** (warnings):
- **Indexed, though blocked by robots.txt** — "Google always respects robots.txt, but this doesn't necessarily prevent indexing if someone else links to your page. … If you do want to block this page from Google Search, robots.txt is not the correct mechanism to avoid being indexed. To avoid being indexed, remove the robots.txt block and use 'noindex'."
- **Page indexed without content** — "This is not a case of robots.txt blocking."

All **Documented** (help docs). ⚠️ The brief's names "Blocked by robots.txt" and "Excluded by 'noindex' tag" do **not** appear in the current help doc. The doc says "URL blocked by robots.txt" and "URL marked 'noindex'". The live UI may differ from the help doc; check in a real property before writing exact labels (see Conflicts).

### URL Inspection (incl. live test)
https://support.google.com/webmasters/answer/9012289 (help docs, not tested live)

- "This is not a live test. The results shown are from most recently indexed version of a page, not the live version on the web. … To test the current version of the page as Google would see it, select the Live Test button on the page." — **Documented**
- "Important: "URL is on Google" doesn't guarantee that your page is appearing in Search results." — **Documented**
- "You can determine the canonical version only in the indexed data; the live test cannot predict whether or not the tested version will be considered canonical." — **Documented**
- "Important: If your page is blocked by robots.txt (see Crawl allowed?), then Indexing allowed? will always be "Yes" because Google can't see and respect any noindex directives." — **Documented** (great break-it-lab clue)
- Fields (UI labels from help docs): "Referring page", "Crawl allowed?", "Page fetch", "Indexing allowed?", "User-declared canonical", "Google-selected canonical". — **Documented**
- "Referring page … If this value is absent it doesn't mean that no referring page exists" — **Documented**
- "A screenshot of the rendered page is available only in a live test." — **Documented**
- Live test limits: "The live test does not check for the presence of the URL in any sitemaps or any referring pages." / "The live test does not test for all possible indexing issues, including whether this is a duplicate or alternate page." — **Documented**
- "The live URL test only confirms if Google-InspectionTool can access your page for indexing. There is no definitive test that can guarantee whether your page will be included in the Google index." — **Documented**
- UI labels "Test live URL", "Request Indexing", "View tested page" (help docs). — **Documented**

### Validate fix
- "Click Validate fix. Do not click Validate fix again until validation has succeeded or failed." — **Documented**
- "Validation typically takes up to about two weeks, but in some cases can take much longer" — **Documented**
- "If you missed a fix, validation will stop when Google finds a single remaining instance of that issue." — **Documented**
- Validation states: "Not started", "Started", "Looking good", "Passed", "N/A", "Failed". Instance states: "Pending", "Passed", "Failed", "Other". — **Documented**
- "It might not always make sense to fix and validate a specific issue on your website: for example, URLs blocked by robots.txt are probably intentionally blocked." — **Documented**
- Pro tip: "create and submit a sitemap containing only your most important pages, then filter the report by that sitemap before requesting a fix validation." — **Documented**
- "Issue lifetime … until 90 days after the last instance was marked as gone from your site." — **Documented**

---

## 9. Staging sites and accidentally blocked production

- Google doc on "Accidental variants": "the demo version of the site is accidentally left accessible to crawlers" is listed as a cause of duplicate content. — **Documented** (https://developers.google.com/search/docs/crawling-indexing/canonicalization)
- Relative canonical risk: "they can cause problems in the long run (for example, if you unintentionally allow your testing site to be crawled)". — **Documented** (consolidate-duplicate-urls)
- Password protection as the access-control method (control-what-you-share, quoted in §3). — **Documented**
- RFC 9309 says to use "HTTP Authentication as defined in [RFC9110]" to control access, not robots.txt. — **Documented**
- John Mueller on X, 2021-04-05 (https://twitter.com/JohnMu/status/1379099696707334152, reported by Search Engine Roundtable 2021-04-07, https://www.seroundtable.com/staging-sites-authenticated-user-passwords-block-google-31209.html): "Using authentication (username/password) makes it so that you don't accidentally upload a blocking robots.txt" / "That's the best long-term solution for staging sites." — **Google public comment** (relayed by a secondary source; tweet not fetched directly)
- **Production left blocked (site-move doc):** "Note that some site owners block all crawling while in development. If you follow this strategy, make sure you prepare what the robots.txt file should look like once the site move starts. Likewise, if you use noindex rules during development, prepare a list of URLs from which you'll remove the noindex rules when you start the site move." — **Documented**
- Common mistake row "noindex or robots.txt blocks": "Don't forget to remove any noindex or robots.txt blocks that were only needed for the migration." — **Documented**
- Detection: Page indexing "Drop in total indexed pages without corresponding errors" (quoted in §8). — **Documented**
- WordPress "Discourage search engines from indexing this site" was already covered in M01.L08. Reuse it as the most common real-world "production left blocked" cause. — **Observed practice** (the M01.L08 claim was already sourced there)

---

## 10. Screaming Frog SEO Spider (and free alternatives)

Pages checked 2026-11-08: https://www.screamingfrog.co.uk/seo-spider/, https://www.screamingfrog.co.uk/seo-spider/pricing/, https://www.screamingfrog.co.uk/seo-spider/release-history/, https://www.screamingfrog.co.uk/seo-spider/faq/, https://www.screamingfrog.co.uk/seo-spider/user-guide/tabs/

- **500 URL limit verified 2026-11-08:** "The free version is restricted to crawling up to 500 URLs in a single crawl. The crawl configuration, saving of crawls, and advanced features such as JavaScript rendering, custom extraction, and API integrations are also restricted." — **Documented** (seo-spider page). The outline's "⚠️ verify limit" can be cleared, dated 2026-11-08.
- "The 'lite' version of the tool is free to download and use – without any sign up or email capture." — **Documented**
- Pricing: "The Screaming Frog SEO Spider is free, however you can purchase a licence to crawl more than 500 URLs and have access to advanced features." / "buy a licence for £199 Per Year". — **Documented** ⚠️ the price may change.
- **Free-version ticks on the pricing table** (from the page HTML, `class="tick"`): "Find Broken Links, Errors & Redirects", "Analyse Page Titles & Meta Data", "Review Meta Robots & Directives", "Audit hreflang Attributes", "Discover Exact Duplicate Pages", "Generate XML Sitemaps", "Site Visualisations"; "Crawl Limit - 500 URLs". **Crossed** (paid only) items include "Scheduling", "Crawl Configuration", "Save & Open Crawls", "JavaScript Rendering", "Crawl Comparison", "Near Duplicate Content", "Custom robots.txt", "Search Console Integration" and "Free Technical Support". — **Documented**
- FAQ: on licence expiry "the SEO Spider's configuration options are unavailable, there is a 500 URL maximum crawl limit and previously saved crawls cannot be opened." — **Documented** (confirms that the free version can't save crawls, so learners must export to CSV)
- **Current version:** release history shows "4th November 2026 | 25.1 | Bug fixes." and "3rd November 2026 | 25.0 | JSON Config, MCP Debugging Tooling, Custom Dashboard, Configurable Issues, …". The download panel reads "SEO Spider v25.1". — **Documented** ⚠️ updates often
- **OS support:** "The industry leading website crawler for Windows, macOS and Linux". Downloads listed: Windows; macOS (Apple Silicon), macOS (Intel); Ubuntu amd64/arm64; Fedora x86_64/aarch64. — **Documented**
- **Filters useful for M06** (user guide "tabs", quoted):
  - Response Codes: "Blocked by Robots.txt – All URLs blocked by the site's robots.txt. This means they cannot be crawled and is a critical issue if you want the page content to be crawled and indexed by search engines."
  - "Redirection (3XX) – … Ideally all internal links would be to canonical resolving URLs, and avoid linking to URLs that redirect."
  - "Redirect Chain – Internal URLs that redirect to another URL, which also then redirects. … Full redirect chains can be viewed and exported via 'Reports > Redirects > Redirect Chains'."
  - "Redirect Loop – … This filter will only populate if a URL redirects to a previous URL within the redirect chain."
  - Directives: "Noindex – This instructs the search engines not to index the page. The page will still be crawled (to see the directive), but it will then be dropped from the index."
  - Canonicals: "Non-Indexable Canonical – The canonical URL is a non-indexable page. This will include canonicals which are blocked by robots.txt, no response, redirect (3XX), client error (4XX), server error (5XX) or are 'noindex'. Canonical versions of URLs should always be indexable, '200' response pages."
  - "Indexability Status – The reason why a URL is Non-Indexable. For example, if it's canonicalised to another URL."
  - "Crawl Depth – Depth of the page from the start page (number of 'clicks' away from the start page). Please note, redirects are counted as a level currently in our page depth calculations."
  - Links: "Pages With High Crawl Depth" (depth threshold set under "Config > Spider > Preferences", which is paid config).
  - Sitemaps tab: "URLs Not In Sitemap", "Orphan URLs", "Non-Indexable URLs in Sitemap" — all **Documented** (Screaming Frog). ⚠️ Whether the Sitemaps tab filters work in the free version was **not verified**, because adding sitemaps to a crawl is a crawl-configuration feature (crossed for free). List mode ("Mode > List") is described in the FAQ, but its free-version availability wasn't confirmed. Test before teaching.
- Screaming Frog's "Canonicalised" filter text says "This means the search engines are being instructed to not index the page". Google calls canonicals "a hint, not a rule". — see Conflicts.

**Free alternatives (notable):**
- **Bing Webmaster Tools Site Scan.** Free, on-demand crawl audit for verified sites (see §11). — **Documented**
- **Greenflare.** "Open-Source Python Based SEO Web Crawler", GPL-3.0, https://greenflare.io / https://github.com/beb7/gflare-tk. The last repo push was 2023-07-07, so it looks unmaintained. — **Documented** (GitHub metadata). Not recommended as a main tool.
- Ahrefs Webmaster Tools (site audit for verified sites) is often recommended but was **not checked** in this pass. See "Not found".

---

## 11. Bing specifics

- Bing Webmaster Tools relaunch post, 2020-07 ("Announcing the new Bing Webmaster Tools (migration complete)", https://blogs.bing.com/webmaster/july-2020/Announcing-the-new-Bing-Webmaster-Tools-(migration-complete)):
  - "Site Scan is an on-demand site audit tool which crawls your site and checks for common technical SEO issues allowing to improve your website performance at Bing and other search engines as well." — **Documented**
  - "URL inspection is an exciting BETA feature allowing to inspect Bing indexed version of your URLs allowing to detect potential indexing issues due to crawl or not following Bing Webmaster guidelines." — **Documented** (2020; "BETA" is likely stale)
  - "Robots.txt tester allows to check your robots.txt file using the same parser we use in production and verify that your URLs are allowed or disallowed as you want." — **Documented**
- URL Inspection post, 2020-09 (https://blogs.bing.com/webmaster/september-2020/Introducing-the-Bing-Webmaster-Tools-URL-Inspection-Tool): "The Bing Webmaster Tools URL inspection tool is a powerful tool that allows you to check and take necessary actions on URLs under the domain selected; this includes crawling, indexing, SEO and MarkUp details and errors." — **Documented**
- robots.txt tester post, 2020-09 (https://blogs.bing.com/webmaster/september-2020/Bing-Webmaster-Tools-makes-it-easy-to-edit-and-verify-your-robots-txt): "Webmasters can submit a URL to the robots.txt Tester tool and it operates as Bingbot and BingAdsBot would, to check the robots.txt file and verifies if the URL has been allowed or blocked accordingly." — **Documented**. Teaching point: Bing still has a URL-level robots.txt tester; Google retired its tester.
- Bing blog, 2025-06 ("Start Using Bing Webmaster Tools to Improve Your Site Visibility", https://blogs.bing.com/webmaster/2025/6/Start-Using-Bing-Webmaster-Tools-to-Improve-Your-Site-Visibility/):
  - "URL Inspection Tool: Analyze indexing status, crawlability, HTTP response codes, and blocked resources for specific URLs." — **Documented**
  - "Site Scan Tool: Run technical SEO audits to detect broken links, duplicate tags, and missing metadata—no third-party tools required." — **Documented**
  - "Robots.txt Tester: Validate your robots.txt file and confirm that Bingbot can access key content." — **Documented**
  - "Bing Webmaster Tools supports IndexNow, a protocol that instantly alerts Bing and other IndexNow Search Engines when you add, update, or delete content." — **Documented**
- Bing blog, 2024-08 ("Bing Webmaster Tools or Google Search Console: A Comparison", https://blogs.bing.com/webmaster/2024/8/Bing-Webmaster-Tools-or-Google-Search-Console-A-Comparison/): URL Inspection tools in both "share several similarities, including showing crawl status, index status, live URL testing, structured data checks, and error reporting." — **Documented**
- UI strings embedded in the Bing Webmaster Tools help app (2026-11-08) include "Site Scan crawler is not yet using Bingbot IP addresses, we plan to switch to Bingbot IP addresses later this year." — **Documented**, but weak: it's a UI string with no date, so don't teach it. Practical note: a firewall may treat Site Scan differently from Bingbot.
- Bing sitemaps and lastmod: see §5.
- Bing's own help articles (bing.com/webmasters/help/...) load through JavaScript and could not be read as text. See "Not found".

---

## Freshness flags

- ⚠️ **Google moved crawling docs** to a new "Crawling infrastructure" site (`developers.google.com/crawling/docs/...`). The HTTP status codes page and the robots.txt spec and create pages now redirect there. The URLs in earlier lessons (M02.L02 cites "Update your robots.txt file", "Introduction to robots.txt") should be rechecked and the new URLs cited.
- ⚠️ robots.txt spec last updated **2026-10-23**, url-structure and control-what-you-share **2026-10-21**. Both changed within the last 3 weeks; recheck before publishing.
- ⚠️ The robots meta tag page now mentions **AI Overviews and AI Mode** under `nosnippet`/`max-snippet`, and control-what-you-share lists a new **"Search generative AI control"** in Search Console. Mention only, flag as new, and defer to M14 / Modern SEO 101.
- ⚠️ Page indexing help still says "You can verify this using the robots.txt tester" and "use the robots.txt tester", although that tool was sunset (announced Nov 2023). The help doc is stale in places.
- ⚠️ Page indexing help suggests "Use a web debugging tool such as Lighthouse" for redirect errors. The course memory rule says no Lighthouse runs. Use DevTools Network or Screaming Frog instead.
- ⚠️ Screaming Frog is at **v25.1 (4 Nov 2026)**, with v25.0 just one day earlier. Menus and filter names may shift. The price (£199/year) can change.
- ⚠️ IndexNow participant lists differ between pages (5 on the home page, 7 in `searchengines.json`). Date-stamp any list.
- ⚠️ Google's "testing" IndexNow comment is from **2021**. No later Google statement was found.
- ⚠️ Bing's URL Inspection was "BETA" in 2020; the 2025 posts no longer call it beta.
- ⚠️ Sitemap ping: Google's endpoint has returned 404 since about the end of 2023 (6 months after 2023-06-26). Old plugins may still "ping" uselessly.

## Conflicts between sources

1. **Redirect following by inspection tools.** The HTTP status codes page says "Google Inspection Tools doesn't follow redirects". Page indexing help says "The live URL Inspection test follows redirects and then tests the final URL, although the live test doesn't indicate that it is following a redirect." These can't both be literally true for the live test. Teach "check the URL you actually care about (the final one)" and don't rely on the live test to report the redirect.
2. **Hop counts.** Pages: Googlebot "follows 10 redirect hops". robots.txt files: "at least five redirect hops … then stops and treats it as a 404". RFC 9309: "SHOULD follow at least five". This isn't a contradiction (different files), but learners will mix them up.
3. **Chain length.** Google: "ideally no more than 3 and fewer than 5" hops. Course non-negotiable #8: single-hop. The course is stricter on purpose; say so.
4. **Page indexing reason names.** The brief and common SEO usage say "Blocked by robots.txt" and "Excluded by 'noindex' tag". The current help doc says "URL blocked by robots.txt" and "URL marked 'noindex'". The live UI wasn't checked, so the lesson should say "labels may differ slightly" or be verified in a property first.
5. **Canonical as instruction vs hint.** Screaming Frog says canonicalised pages mean "search engines are being instructed to not index the page". Google says "indicating a canonical preference is a hint, not a rule". Use Google's wording.
6. **URL structure vs directories.** The ecommerce doc says "Google generally doesn't look at the structure of URLs to work out the structure of a site". The SEO Starter Guide says directories "can help Google learn how often the URLs in individual directories change" (for sites with "more than a few thousand URLs"). Reconcile: links define structure; folders help crawl scheduling on big sites.
7. **Need a sitemap?** Google: a site of "about 500 pages or fewer" that is well linked "might not need" one. IndexNow/Bing: use sitemaps plus IndexNow. The course already says "submit one anyway (cheap, helps monitoring)". Fine if framed as a choice.
8. **lastmod format.** Google: a supported format per sitemaps.org (date only is valid). Bing: "including both the date and time". Recommend full ISO 8601 date-time; it satisfies both.
9. **IndexNow participants.** Home page: "Microsoft Bing, Naver, Seznam.cz, Yandex, Yep". `searchengines.json` adds Internet Archive and Amazonbot.
10. **5xx timing.** The HTTP page says indexed URLs are "eventually dropped" (no time). The troubleshooting page says Googlebot retries 503/429 "for about 2 days" and warns that "more than a few days" causes slowed or stopped crawling. Teach "hours are fine, days are risky".

## Not found

- **Exact date the Google robots.txt Tester was retired.** The announcement (Nov 2023) is relayed by Search Engine Roundtable; a "December 12, 2023" date could not be confirmed from any Google page. Say "retired in late 2023 (announced November 2023)".
- **Any Google documentation page about IndexNow.** Only the 2021 spokesperson quote via SEJ was found. Google is absent from IndexNow's lists.
- **Google doc naming "canonical points to a redirected URL" as a mistake.** Only Screaming Frog states it (Non-Indexable Canonical). Label it observed practice / tool guidance.
- **A Google-stated maximum click depth.** No number exists in Google docs; "3 clicks" is observed practice.
- **Bing Webmaster help articles verbatim** (Site Scan, URL Inspection, Bing webmaster guidelines on robots.txt and noindex). bing.com/webmasters/help pages are JS-rendered and returned no article text. The Site Scan help URL tried (`site-scan-3b8c4e9a`) returned 404. Bing quotes in this file come from blogs.bing.com.
- **Bing's statement on whether robots.txt-blocked URLs can still be indexed.** Not found in a readable Bing source.
- **The live Search Console UI labels.** Not tested, per instructions.
- **Screaming Frog free-version availability of List mode and of the Sitemaps tab filters.** Not confirmed.
- **Ahrefs Webmaster Tools / other free crawlers** (licence, limits). Not researched in this pass.
- **The original Mueller hangout (2018) and tweet (2021).** Only secondary reports were fetched.

## Suggested lesson split (6 lessons, topic order)

1. **M06.L01 — Status codes, soft 404s and the "can it be indexed?" check.** 2xx/3xx/4xx/5xx through Google's eyes, 404 vs 410, soft 404 causes and fixes. Introduce the non-negotiable #7 checklist and the cheat-sheet decision tree.
2. **M06.L02 — Controlling crawling and indexing: robots.txt vs `noindex`/`X-Robots-Tag` vs passwords.** Google's robots.txt rules (precedence, 500 KiB, 5xx behaviour), meta robots rules, "noindex must be crawlable", the robots.txt report, and staging vs production blocking.
3. **M06.L03 — Canonicals and duplicate content.** How Google clusters and chooses, signal strength (redirect > rel=canonical > sitemap), the mistakes list, "Google chose different canonical", and canonicals that point to redirects or `noindex` pages.
4. **M06.L04 — XML sitemaps and IndexNow.** Limits, lastmod rules (Google and Bing), ignored tags, Sitemaps report statuses, ping deprecation, IndexNow setup (key file, 200/202) and the fact that Google doesn't list support.
5. **M06.L05 — Redirects and site structure.** 301/308 vs 302/307, meta refresh and JS, chains, loops, homepage dumping → soft 404, redirect maps, keeping redirects ≥1 year, URL design rules, internal links, crawl depth and orphan pages. Non-negotiable #8.
6. **M06.L06 — Practice: crawl and indexing audit (Screaming Frog + Page indexing + URL Inspection + Bing Site Scan).** Run a 500-URL crawl, read Page indexing reasons, use URL Inspection and Validate fix, then build the prioritised fix list that feeds the capstone and break-it lab.

(If a 5-lesson split is preferred, merge L04 into L03 as "Canonicals and sitemaps: telling Google which URLs matter".)

## Break-it lab ideas (planted bugs and how to find them with free tools)

1. **Planted `noindex`** in `<head>` of a key page (or as `X-Robots-Tag: noindex` on a PDF). Detect it with View Source / DevTools → Network → response headers; Screaming Frog Directives → "Noindex"; URL Inspection "Indexing allowed?" = No; Page indexing "URL marked 'noindex'". The header version tests whether learners check headers as well as HTML.
2. **robots.txt block plus `noindex` on the same page** (the classic failure). Detect: Screaming Frog Response Codes → "Blocked by Robots.txt"; URL Inspection "Crawl allowed?" = No while "Indexing allowed?" shows "Yes" (Google can't see the noindex); possibly "Indexed, though blocked by robots.txt". Fix: remove the Disallow and keep the `noindex`.
3. **Redirect chain**: `/old-page` → `/old-page/` → `http://` → `https://new-page` (3 hops). Detect: DevTools Network with "Preserve log"; Screaming Frog "Redirect Chain" filter and Reports > Redirects > Redirect Chains (check this works in the free version). Fix: a single 301 straight to the final URL, then update internal links.
4. **Redirect loop**: `/a` → `/b` → `/a`. Detect: the browser's "too many redirects" error; Screaming Frog "Redirect Loop"; Page indexing "Redirect error".
5. **Canonical pointing to a redirected URL** (for example `rel="canonical" href="http://…"` that 301s to https). Detect: Screaming Frog Canonicals → "Non-Indexable Canonical"; URL Inspection "User-declared canonical" vs "Google-selected canonical".
6. **Soft 404**: a "Sorry, not found" page returning 200, or a deleted product redirected to the homepage. Detect: DevTools status column; a made-up URL test (as in M01.L04); Page indexing "Soft 404".
7. **Staging leak / production blocked**: `Disallow: /` copied to the live robots.txt, or WordPress "Discourage search engines" left on. Detect: open `/robots.txt`; Screaming Frog crawl stops at the start URL; robots.txt report; Page indexing drop "without corresponding errors".
8. **Sitemap hygiene**: the sitemap lists a 404, a redirected URL and a `noindex` URL, and has a lastmod that equals the generation time for every row. Detect: the Sitemaps report ("Has errors" for format issues only); Screaming Frog "Non-Indexable URLs in Sitemap" (if available free); a manual check of lastmod values.
9. **Orphan page**: a published page with no internal links, present only in the sitemap. Detect: Screaming Frog crawl vs sitemap ("Orphan URLs" if available); URL Inspection "Referring page" empty; possibly "Discovered - currently not indexed".

## Hands-on ideas

- **Status code safari (5 min):** DevTools → Network on the learner's site: the home page (200), a made-up URL (expect 404), an old slug (expect one 301), and `/robots.txt`. Record the results in a status-code table (extends the M01.L04 exercise).
- **robots.txt reading drill:** give 6 URLs and a robots.txt with overlapping `allow`/`disallow` and wildcards. Learners apply "most specific rule wins, least restrictive on ties", then confirm in Bing's robots.txt Tester (Google no longer has a URL tester; use URL Inspection "Crawl allowed?").
- **Choose the tool:** 8 scenarios (private client area, thank-you page, faceted filter URLs, a PDF, staging site, retired product, image folder, duplicate print view). Learners pick login, `noindex`, `X-Robots-Tag`, robots.txt, 301, 404/410 or canonical, quoting Google's table.
- **Canonical detective:** inspect 3 pages in URL Inspection and compare user-declared vs Google-selected canonical; explain any mismatch using the troubleshooting table.
- **Sitemap audit:** open `/wp-sitemap.xml` (or the plugin's sitemap), count URLs, check that 3 random lastmod values match the real edit dates, confirm the `Sitemap:` line in robots.txt, then check the Sitemaps report status.
- **Redirect map spreadsheet:** columns Old URL | New URL | Type (301/410) | Reason | Tested status | Date. Learners map 10 URLs from a pretend slug change and test each with DevTools for exactly one hop.
- **First crawl:** Screaming Frog free (≤500 URLs). Export the Internal, Response Codes, Directives and Canonicals tabs to CSV (the free version can't save crawls), sort by Indexability Status, and note the crawl-depth distribution.
- **Page indexing triage:** list every "Why pages aren't indexed" reason in the learner's property, mark each as "intended" or "fix", and filter the Source column to "Website". Fix one issue, click Validate fix, and log the date (it takes about 2 weeks).
- **Bing cross-check:** run Site Scan in Bing Webmaster Tools and compare its errors with the Screaming Frog crawl. Set up IndexNow through a CMS plugin or the BWT dashboard and record the first 200/202 response.
- **Optional IndexNow by hand:** create a key file at the site root and submit one URL with `https://api.indexnow.org/indexnow?url=…&key=…` in a browser. Expect 202 the first time, then 200.
