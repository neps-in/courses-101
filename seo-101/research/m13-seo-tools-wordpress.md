# Research: M13 — SEO Tools Mastery & WordPress SEO

**Researched:** 2026-11-09 (one session; resumed after a search rate limit, no pages fetched again)
**Scope:** primary-source facts for SEO 101 Module 13 (L3): Screaming Frog SEO Spider in depth (free vs licence, configuration, custom extraction, JavaScript rendering, API connections, list mode, exports, saving crawls); Ahrefs Free (formerly Ahrefs Webmaster Tools) Site Audit; Bing Webmaster Tools Site Scan and other tools; Chrome DevTools and extensions for SEO; choosing and configuring ONE WordPress SEO plugin (Yoast SEO, Rank Math, AIOSEO); why two SEO plugins clash; WordPress-specific issues (attachment pages, archives, search pages, plugin bloat, caching, image sizes); paid tools (Ahrefs, Semrush, Moz) and when they're worth it. Free tools first. Running examples: Nila Coffee (WordPress/WooCommerce coffee shop, India), Kavya (yoga), Tomás (hardware), Amara (agency).
**Method:** pages were downloaded with curl (browser user agent) on 2026-11-09 and converted to text. Quotes were copied from that text unless marked otherwise. Plugin versions and install counts come from the wordpress.org Plugins API (`api.wordpress.org/plugins/info/1.2`) on 2026-11-09. "Last updated" dates are the ones the page showed (or its `dateModified` metadata, marked "(metadata)"). Nothing was logged in to, no crawl was run and no plugin was installed, so no setting was tested in a live install. Labels inside apps may differ slightly from the docs.

**Labels:** **Documented** = official docs from the company that owns the product (Screaming Frog, Ahrefs, Microsoft Bing, Google/Chrome, WordPress.org, Yoast, Rank Math, AIOSEO, Semrush, Moz). **Google public comment** = a named Googler or official spokesperson (person, date, where). **Observed practice** = vendor blog/marketing guidance, third-party reports or common SEO practice, not product documentation. **Myth/contested** = widely repeated but unsupported or contradicted.
**Quote markers:** **(fetch-tool extract)** = came through a summarising fetch tool, not curl. **(search-tool snippet, unverified)** = only seen as a web-search summary. The official page could not be opened, so do not quote it in a lesson.

**Earlier lessons already introduced (keep terms consistent, go deeper here):**
- **M06.L06** (Crawl your site) already taught the Screaming Frog free download (no sign-up), the **500-URL** limit, "previously saved crawls cannot be opened" without a licence (so **export before closing**), the £199/year licence, the tabs/filters Response Codes (4xx/5xx/3xx, Blocked by Robots.txt, Redirect Chain), Directives (Noindex), Canonicals, Internal → **Indexability Status**, Site Structure (Crawl Depth); and Bing **Site Scan** as a second opinion ("detect broken links, duplicate tags, and missing metadata"). It flagged v25.0/25.1 (3–4 Nov 2026). M13 should NOT re-teach these; go deeper into configuration, rendering, extraction, APIs, list mode and exports.
- **M10.L02** taught crawl ethics: Screaming Frog "will obey robots.txt protocol and is set to 'Respect robots.txt'" and ignoring it is "down to the responsibility of the user". Reuse, don't repeat.
- **M09.L03** and **M10.L03/L04** introduced **Ahrefs Free (formerly Ahrefs Webmaster Tools)**: verified sites only, import from Search Console, "1 K backlinks & keywords visible at once", Site Audit "5 K crawl credits/month per project". M13 adds how crawl credits are counted and what Site Audit checks.
- **M01.L08, M03.L03, M06.L02, M06.L04** introduced Bing Webmaster Tools (verification, Keyword Research, robots.txt, sitemaps, IndexNow).
- **M02 (all), M04.L02/L04, M06.L01–L05** used Chrome DevTools (Elements, view-source, Network status codes and headers, device toolbar). **M02.L10, M06.L01, M06.L06** mentioned Lighthouse. M13 should frame these as an "SEO DevTools kit", not re-teach basics.
- **M01.L04, M01.L08, M04.L05, M05.L02, M06.L04**: WordPress core sitemap `/wp-sitemap.xml`; an SEO plugin "may use `/sitemap_index.xml` instead"; "Use only one sitemap system, and submit the one that's in use" (M06.L04).
- **M05.L02** "Under the hood": in WP 7.1 core adds `noindex` only when **Search engine visibility** is ticked and on search-results pages (`/?s=`); category, tag, author and date archives get none from core; core sitemap skips empty terms. To `noindex` an archive you keep, you need an SEO plugin.
- **M06.L03**: core adds a self-referencing canonical to single posts/pages only; SEO plugins usually add the rest; failure row "Two canonical tags in the source → The theme and an SEO plugin both add one".
- **M06.L04**: Amara's client sitemap with "attachment pages for every image"; troubleshooting "Far more URLs than real pages → Turn off unwanted sitemap types in your SEO plugin; use one system". This is the only lesson that mentions **attachment pages**; M13 owns the full explanation (WP 6.4 change).
- **M04.L06**: WordPress core adds no Open Graph tags; the SEO plugin does.
- **M02.L02**: WordPress needs an SEO plugin for meta descriptions, per-page `noindex`, redirects (Module 13 promised).
- **M07.L03** mentions Yoast once; **M01.L07**: "Don't chase a perfect score … The same goes for an SEO plugin's green light." M13 should reuse this line for tool "scores".
- **Cross-course:** WordPress 101 M05.L02 (`wordpress-101/lessons/m05-l02-seo-plugin-setup.md`) already walks through **Yoast SEO free** set-up (verified against Yoast 28.8, Rank Math 1.0.280, AIOSEO 5.0.4) and has the "Ines installed Yoast SEO and Rank Math 'to be safe'" story. SEO 101 M13 should link to it rather than repeat the click-path, and go deeper on *what to check* and *why*.

---

## Tool limits and prices at a glance (official pages, checked 2026-11-09)

| Tool | Free | Paid (as shown on 2026-11-09) | Official URL | Label |
|---|---|---|---|---|
| **Screaming Frog SEO Spider** | "Crawl Limit - 500 URLs"; free column ticks only: broken links/errors/redirects, titles & meta, meta robots & directives, hreflang, exact duplicates, XML sitemaps, site visualisations. **Crosses** for Scheduling, **Crawl Configuration**, **Save & Open Crawls**, password-protected sites, **JavaScript Rendering**, Crawl Comparison, near duplicates, semantic similarity, mobile usability, structured data & validation, spelling/grammar, **Custom Search & Extraction**, Custom JavaScript, **GA, Search Console and PageSpeed Insights integration**, AI integration, accessibility, segmentation, Data Studio report, email/exports, CLI, MCP server, support | "£199 Per Year" per user (1–4 licences); £189 (5–9), £179 (10–19), £169 (20+). "Crawl Limit - Unlimited*" ("dependent on allocated memory and storage") | https://www.screamingfrog.co.uk/seo-spider/pricing/ (metadata 2024-01-18; prices current on page) | Documented |
| **Ahrefs Free** (formerly AWT) | Verified sites only for Site Audit: "Identify & fix 170+ technical and on-page SEO issues"; "5 K crawl credits/month per project" | Starter "$29 /mo", Lite "$129 /mo" (100,000 crawl credits), Standard "$249 /mo" (500,000), Advanced "$449 /mo" (1,500,000), Enterprise "Talk to sales" **(fetch-tool extract)**. The ahrefs.com/free page fetched by curl showed "Get Started €27/mo" for Starter (currency follows location) | https://ahrefs.com/free ; https://ahrefs.com/pricing | Documented |
| **Bing Webmaster Tools** (Site Scan, URL Inspection, Robots.txt tester, AI Performance) | Free; "Free and full of powerful features" | — | https://blogs.bing.com/webmaster/2025/6/Start-Using-Bing-Webmaster-Tools-to-Improve-Your-Site-Visibility/ (17 June 2025) | Documented |
| **Chrome DevTools + Lighthouse** | Free, built into Chrome | — | https://developer.chrome.com/docs/devtools | Documented |
| **Yoast SEO** 28.8 (10M+ installs, updated 2026-10-27) | Titles/meta, XML sitemaps, schema graph, breadcrumbs, media pages setting | Premium "$ 118.80 / year (ex VAT)"; redirect manager is Premium | https://wordpress.org/plugins/wordpress-seo/ ; https://yoast.com/product/yoast-seo-premium-wordpress/ | Documented |
| **Rank Math** 1.0.281 (4M+ installs, updated 2026-11-03) | Free includes "Smart Redirection manager", "Built-in 404 monitor", breadcrumbs, attachment redirect | Renewal "PRO: $ 107.88 + taxes per year, Business: $ 335.88 … Agency: $ 779.88" (pricing URL redirected to a sale page /offer/) | https://wordpress.org/plugins/seo-by-rank-math/ ; https://rankmath.com/pricing/ | Documented |
| **All in One SEO (AIOSEO)** 5.0.5 (2M+ installs, updated 2026-11-04) | Free: "SEO titles and meta descriptions, an XML sitemap, schema markup, Google Search Console integration, and TruSEO content analysis"; attachment redirect | "AIOSEO Pro adds advanced features like the redirection manager…"; pricing FAQ: "Basic renews at $99/year versus its $49.50 regular price" | https://wordpress.org/plugins/all-in-one-seo-pack/ ; https://aioseo.com/pricing/ | Documented |
| **Semrush** (SEO toolkit) | Free account (see M10 research: "10 reports per day across all vital tools") | "SEO" plan "$ 139 monthly" or "$ 117 . 33 /mo billed annually"; "Starter" (SEO + AI Search) $199 monthly / $165.17 annually; "Pro+" $299 monthly / $248.17 annually; extra users "Starting at $ 45 /mo" | https://www.semrush.com/pricing/seo-ai-search/ (redirected from /prices/) | Documented |
| **Moz Pro** | Free trial ("Start My Free Trial"); Link Explorer 10 free queries/month (M10 research) | Standard $99/mo ($79/mo yearly), Medium $179 ($143 yearly), Large $299 ($239 yearly); "Our entry-level plan is available for $49/month … for individuals managing a single website" | https://moz.com/products/pro/pricing | Documented |

**Key teaching point:** everything a learner needs for the M13 capstone is free: Screaming Frog free (≤500 URLs, default settings), one free SEO plugin, Ahrefs Free Site Audit (verified site) or Bing Site Scan, and DevTools. Most Screaming Frog *configuration* (speed, user agent, JS rendering, extraction, APIs) is **licence-only**, so for free learners those sections are "know it exists, see it demonstrated" content.

---

## 1. Screaming Frog SEO Spider in depth

### Free vs licence
- "The Screaming Frog SEO Spider is free, however you can purchase a licence to crawl more than 500 URLs and have access to advanced features." — https://www.screamingfrog.co.uk/seo-spider/pricing/ — **Documented**
- "The free version is restricted to crawling up to 500 URLs in a single crawl. The crawl configuration, saving of crawls, and advanced features such as JavaScript rendering, custom extraction, and API integrations are also restricted." / "For just £199 per year you can purchase a licence, which removes the 500 URL crawl limit, allows you to save crawls, and opens up the spider's configuration options and advanced features." — https://www.screamingfrog.co.uk/seo-spider/ — **Documented**
- "A licence also provides access to the configuration , saving & opening crawls , and advanced features such as – JavaScript rendering , custom search , custom extraction , Google Analytics integration , Google Search Console integration , PageSpeed Insights integration , scheduling and much more!" — https://www.screamingfrog.co.uk/seo-spider/user-guide/general/ — **Documented**
- FAQ: "without a licence the SEO Spider is limited to crawling a maximum of 500 URLs each crawl, crawls can't be saved, and advanced features and the configuration are restricted." — https://www.screamingfrog.co.uk/seo-spider/faq/ — **Documented**
- "Licences are annual. The SEO Spider returns to the restricted free version upon expiry of the licence." / "Licences are per user. 2 users will require 2 individual licences." — FAQ and pricing — **Documented**
- Free version "does not require any form of email capture, or sign up." — FAQ — **Documented**
- Crawl limit configuration: "The free version of the software has a 500 URL crawl limit. If you have a licensed version of the tool this will be replaced with 5 million URLs, but you can include any number here for greater control" — https://www.screamingfrog.co.uk/seo-spider/user-guide/configuration/ — **Documented**
- Current version: release history lists "4th November 2026 25.1 Bug fixes." and "3rd November 2026 25.0 JSON Config, MCP Debugging Tooling, Custom Dashboard , Configurable Issues, Exclude Links Based Upon Link Path, Auto Throttle Crawl Rate, Filename Patterns and Social Meta Tags ." — https://www.screamingfrog.co.uk/seo-spider/release-history/ — **Documented**

### Spider settings and robots.txt (licence for changes; defaults apply in free)
- "By default the SEO Spider will obey robots.txt protocol and is set to 'Respect robots.txt'. This means the SEO Spider will not be able to crawl a site if its disallowed via robots.txt." Options: "'Ignore robots.txt', or 'Ignore robots.xt but report status'" [sic]. — configuration guide — **Documented**
- "The 'Ignore robots.txt, but report status' configuration means the robots.txt of websites is downloaded and reported in the SEO Spider. However, the directives within it are ignored. This allows you to crawl the website, but still see which pages should be blocked from crawling." — **Documented**
- "By default internal URLs blocked by robots.txt will be shown in the 'Internal' tab with Status Code of '0' and Status 'Blocked by Robots.txt'." The Response Codes > Blocked by Robots.txt filter "will also show the robots.txt directive ('matched robots.txt line' column)". — **Documented**
- Custom robots: "You can download, edit and test a site's robots.txt using the custom robots.txt feature which will override the live version on the site for the crawl. It will not update the live robots.txt on the site." — **Documented** (useful for testing a Disallow before publishing it; ties to M06.L02)

### User agent
- "The user-agent configuration allows you to switch the user-agent of the HTTP requests made by the SEO Spider and which robots.txt directives are followed. By default the SEO Spider makes requests using its own 'Screaming Frog SEO Spider user-agent string." It has "inbuilt preset user-agents for Googlebot, Bingbot, various browsers and more" and separate "HTTP Request User-Agent" and "Robots User-Agent". — configuration guide — **Documented**
- Warning: "It's common for sites to block a spoofed Googlebot request, as CDNs such as Cloudflare check to see whether the request has been made from the known Google IP range" — FAQ — **Documented**. Teach: switching to Googlebot UA does not make you Googlebot.

### Crawl speed
- "By default the SEO Spider is set at 5 simultaneous requests known as 'threads', without a limit for crawl speed per second. However, the auto throttle setting automatically slows requests to a host pushing back with 429s, 503s or if they are dropping connections." — configuration guide — **Documented** (auto throttle is new in v25.0)
- "We recommend approving a crawl rate and time with the webmaster first, monitoring response times and adjusting the default speed if there are any issues." — **Documented**
- "Please use the threads configuration responsibly … In very extreme cases, you could overload a server and crash it." — **Documented**
- Free users can't slow it down: "In the paid version of the SEO Spider you can reduce the speed of requests. If you are running the free version you may find that right clicking the URL and choosing re-spider will help." — FAQ — **Documented**

### JavaScript rendering mode (licence)
- Configuration > Spider > Rendering: "Text Only: The SEO Spider will crawl and extract from the raw HTML only." … "JavaScript: The SEO Spider will execute client-side JavaScript by rendering the page in its headless Chrome browser, crawling and extracting from the rendered HTML for content and links. Like Google, it will also discover any links in the raw HTML." — configuration guide — **Documented**
- "To crawl a JavaScript website, open up the SEO Spider, click 'Config > Spider > Rendering' and change 'Rendering' to 'JavaScript'." — https://www.screamingfrog.co.uk/seo-spider/tutorials/crawl-javascript-seo/ — **Documented**
- Free alternative for a single page (**Observed practice**, course inference): compare view-source (raw) with DevTools Elements (rendered DOM), or the Ahrefs SEO Toolbar ("Compare raw vs rendered HTML", https://ahrefs.com/free), or URL Inspection's crawled page (M12).

### Custom search and custom extraction (licence)
- Custom search: "By default custom search checks the raw HTML source code of a website … You can switch to JavaScript rendering mode to search the rendered HTML." "You're able to configure up to 100 search filters". Example: "When searching for something like Google Analytics code, it would make more sense to choose the 'does not contain' filter". — configuration guide — **Documented**
- Custom extraction: "Custom extraction allows you to collect any data from the HTML of a URL. Extraction is performed on the static HTML returned by internal HTML pages with a 2XX response code." Modes: "XPath", "CSS Path", "Regex". "Up to 100 separate extractors can be configured … with a limit of up to 1,000 extractions across all extractors." Function example: "count(//h1) to find the number of h1 tags on a page." A "visual custom extraction feature" picks elements in a built-in browser. — **Documented**
- Paid confirmation: "you'll need to download & install the SEO Spider software and have a licence to access the custom extraction feature necessary for scraping." — https://www.screamingfrog.co.uk/seo-spider/tutorials/web-scraping/ — **Documented**
- Nila example (**Observed practice**): extract the author name, `article:modified_time`, product price or "Out of stock" text across all product pages; ethics from M10 (own site, or a polite, robots-respecting crawl only).

### API connections: GSC, GA4, PSI (licence)
- All three are crossed out for the free version on the pricing page (Google Analytics Integration, Search Console Integration, PageSpeed Insights Integration). — **Documented**
- GSC: "You can connect to the Google Search Analytics and URL Inspection APIs and pull in data directly during a crawl." "By default the SEO Spider will fetch impressions, clicks, CTR and position metrics". "'Enable URL Inspection' … provides Google index status data for up to 2,000 URLs per property a day." Orphan URLs filter needs "'Crawl New URLs Discovered In Google Search Console'" enabled. — configuration guide — **Documented**
- GA4: "The SEO Spider can fetch user and session metrics, as well as key events and ecommerce (transactions and revenue) data for landing pages". "Using the Google Analytics 4 API is subject to their standard property quotas for core tokens." "the data provided via Google Analytics and other APIs is only accessible locally on your machine. We cannot view and do not store that data ourselves." — **Documented**
- PSI: "PageSpeed Insights uses Lighthouse … and gather real-world data from the Chrome User Experience Report (CrUX)". "Remote" vs "Local" ("CrUX data is not available by running Lighthouse locally"). "enter a free PageSpeed Insights API key if necessary". "The API is limited to 25,000 queries a day at 60 queries per 100 seconds per user … best case is the SEO Spider can request 36 URLs a minute." — **Documented**
- So the answer to "free or paid?": **the APIs themselves are free Google APIs; the Screaming Frog connector needs a licence.**

### List mode
- "As well as crawling a website by entering a URL and clicking 'Start', you can switch to list mode and either paste or upload a list of specific URLs to crawl." "If you wish to export data in list mode in the same order it was uploaded, then use the 'Export' button … The data in the export will be in the same order and include all of the exact URLs in the original upload". — https://www.screamingfrog.co.uk/seo-spider/user-guide/general/ — **Documented**
- Whether list mode works in the free version: **not stated** on the pricing page (it lists "Crawl Configuration" as paid, but list mode is a *mode*, not a configuration item). Not found; test in the app. Uses: checking a redirect map after a migration (non-negotiable #8), checking sitemap URLs.

### Exports and saving crawls
- "Simply click the 'export' button in the top left hand corner to export data from the top window tabs and filters." "if you are using a filter and click 'export' it will only export the data contained within the filtered option." Lower-window data (Inlinks, Outlinks, Image Details …) by right-click. — general guide — **Documented**
- "Crawls can be saved and opened in the SEO Spider with a licence ." Database storage mode auto-saves; files `.dbseospider` and `.seospider`. — general guide — **Documented**
- Export to Google Sheets: "switching the 'format' to gsheet. This will save a Google Sheet within your Google Drive account". — **Documented** (pricing lists "Email Notifications & Exports" as paid; plain CSV/XLSX export of tabs works in free, as M06.L06 taught)
- "In the licensed version of the tool you can save a default crawl configuration, and save configuration profiles". — **Documented**

---

## 2. Ahrefs Free Site Audit

- "Site Audit — Identify & fix 170+ technical and on-page SEO issues — Monitor your website's Health Score over time — Visualize data with charts and graphs" — "For verified websites". — https://ahrefs.com/free — **Documented**
- Limits: "Site Audit 5 K crawl credits/month per project". "Is this actually free — no credit card? Yes. No credit card, no trial period, no hidden charges." — https://ahrefs.com/free — **Documented**
- Rename: "What's the difference between Ahrefs Free and Ahrefs Webmaster Tools? They're the same account." — https://ahrefs.com/free — **Documented**
- What a credit is: "Only internal HTML pages that return the 200 (OK) HTTP status code consume crawl credits." Not consumed: "Redirects (3XX)", "Broken pages (4XX) or server errors (5XX)", "Resources (images, CSS files, and JS files)", "Any external URLs linked from your website". "For each verified project, the first 5,000 crawl credits per month spent to crawl this project is free. This is available for users on all plans." To cap usage: "specify the Max number of internal pages." — https://ahrefs.com/academy/how-to-use-ahrefs/site-audit/introduction — **Documented**
- "Additional 5,000 crawl credits per month that can be spent for each verified project in Site Audit" — https://help.ahrefs.com/en/articles/4321336-what-is-a-verified-project (last updated 2026-09-03) — **Documented**
- What it checks: "Site Audit crawls all your website's pages. It flags all possible technical and on-page SEO issues, provides recommendations on how to fix them, visualizes key data in a chart, and delivers an overall SEO health score." Categories shown: "Slow Pages, Core Web Vitals, Heavy CSS or HTML, Meta Descriptions, H1 Tags, Social Tags, JS, CSS, Structured Data". "Executes JavaScript." "Site Audit segments issues into errors, warnings, and notices". "Export all issues in bulk … in a ZIP or CSV file". "Search the raw HTML, rendered HTML, and text of a crawled page". — https://ahrefs.com/site-audit — **Documented** (marketing page; which of these are limited on Free is not stated)
- Health score caveat: "issues are not universal across all websites. For example, we classify orphan pages as errors, but this might not hold true for an ecommerce store that sells seasonal products". Issue importance can be changed in "Issue settings". — Ahrefs Academy — **Documented**. Great quote for "trusting tool scores over real issues" (common failure point).
- Practical consequence (course inference): Nila's ~300-page shop fits easily inside 5,000 credits/month; redirects and 404s don't count, so a messy site isn't penalised in credits.

---

## 3. Bing Webmaster Tools: Site Scan and other tools

- "Site Scan is an on-demand site audit tool which crawls your site and checks for common technical SEO issues allowing to improve your website performance at Bing and other search engines as well." — https://blogs.bing.com/webmaster/2020/7/Announcing-the-new-Bing-Webmaster-Tools-(migration-complete)/ (29 July 2020) — **Documented**
- Same post: "Robots.txt tester allows to check your robots.txt file using the same parser we use in production". "URL inspection is an exciting BETA feature allowing to inspect Bing indexed version of your URLs". — **Documented** (2020; check menus still match)
- June 2025 feature list: "Site Scan Tool : Run technical SEO audits to detect broken links, duplicate tags, and missing metadata—no third-party tools required." "Sitemaps Report : … Bing processes sitemaps at least once every 24 hours for indexing updates." "Crawl Control : Schedule when Bingbot visits your site". "Search Performance Reporting : … using up to 16 months of data." "Top Recommendations : Get prioritized, actionable suggestions". "Backlink Insights : View referring domains, anchor text, and link profiles for both your own site and competitors." "Copilot in Bing Webmaster Tools". Sign-in "using your Microsoft, Google, or Facebook account". — https://blogs.bing.com/webmaster/2025/6/Start-Using-Bing-Webmaster-Tools-to-Improve-Your-Site-Visibility/ (17 June 2025) — **Documented**
- AI Performance (public preview, 10 Feb 2026): "a new set of insights that shows how publisher content appears across Microsoft Copilot, AI-generated summaries in Bing, and select partner integrations." Metrics "Total Citations", "Average Cited Pages", "Grounding queries" ("represents a sample of overall citation activity"). "Bing respects all content owner preferences expressed through robots.txt and other supported control mechanisms." — https://blogs.bing.com/webmaster/2026/2/Introducing-AI-Performance-in-Bing-Webmaster-Tools-Public-Preview/ — **Documented** (link forward to M14)
- Topics Portfolio (beta) inside AI Performance, 13 Oct 2026: "Treat the numbers as directional signals for planning, not as a precise ledger." "smaller sites may see a shorter list or may not even see this feature." — https://blogs.bing.com/webmaster/2026/10/introducing-topics-portfolio-beta-in-ai-performance/ (via RSS feed text) — **Documented**
- Site Scan page limits, scan-by-sitemap/URL-list options and scan duration: only third-party sources (SERoundtable, Search Engine Land 2020) **(search-tool snippet, unverified)**. See Not found.

---

## 4. Chrome DevTools and extensions for SEO

- **Elements vs view-source:** "HTML represents initial page content and the DOM represents active, current page content. When JavaScript adds, removes, or edits nodes, the DOM becomes different than the HTML." — https://developer.chrome.com/docs/devtools/dom (last updated 2019-03-01) — **Documented**. Teach: view-source = what the server sent (raw); Elements = rendered DOM (after JS, browser fix-ups, extensions).
- **Disable JavaScript:** Command Menu, "Start typing javascript , select Disable JavaScript , and then press Enter" — https://developer.chrome.com/docs/devtools/javascript/disable (2019-01-31) — **Documented**. Quick check for JS-dependent content/links (ties to M12).
- **Network panel:** "To save requests across page loads, check the Preserve log checkbox" (needed to see redirect hops); "To emulate how a first-time user experiences your site, check the Disable cache checkbox." — https://developer.chrome.com/docs/devtools/network/reference (2024-07-16) — **Documented**. Also throttling: "Click the Throttling drop-down, which is set to No throttling by default." — https://developer.chrome.com/docs/devtools/network (2024-10-14) — **Documented**. SEO use: status codes, redirect chains, `X-Robots-Tag` and `Link: rel=canonical` headers, cache headers (page caching, section 7).
- **User agent override:** "Use the Network conditions panel to override the user agent string". "overriding the user agent string does not change how Chrome browser functions internally, it changes content that Chrome is served." — https://developer.chrome.com/docs/devtools/device-mode/override-user-agent (2024-05-24) — **Documented**
- **Device toolbar:** "Think of device mode as a first-order approximation of how your page looks and feels on a mobile device. With device mode you don't actually run your code on a mobile device. You simulate the mobile user experience from your laptop or desktop." — https://developer.chrome.com/docs/devtools/device-mode (2024-02-20) — **Documented**
- **Lighthouse panel:** "Lighthouse is an open-source, automated tool to help you improve the quality of web pages. You can run it on any web page, public or requiring authentication. It has audits for performance, accessibility, SEO, and more." "Lighthouse has its own panel in Chrome DevTools." — https://developer.chrome.com/docs/lighthouse/overview (2025-06-02) — **Documented**. Lab data only; link to M12 field vs lab; M01.L07 "don't chase a perfect score".
- **Rendering tab:** "Discover rendering performance issues . Spot repainting, layout shifts, layers and tiles, scrolling issues, see rendering statistics and Core Web Vitals." "Emulate CSS media features". "emulate vision deficiencies". — https://developer.chrome.com/docs/devtools/rendering (2022-04-13) — **Documented**
- **Web Vitals extension retired:** "With the release of Chrome 132 this month, the Web Vitals extension has officially merged with the Performance panel in DevTools." "We also plan to revoke its CrUX API key in the near future, which will break the field data integration." — https://developer.chrome.com/blog/web-vitals-extension-merged (published January 13, 2025) — **Documented**. Older tutorials still recommend the extension: don't.
- **Choosing extensions safely:** "Important: Make sure you only approve extensions that you trust." "Extensions are considered trusted when they're built by a developer who follows the Chrome Web Store Developer Program Policies ." Enhanced protection warns: "This extension is not trusted by Enhanced Safe Browsing." — https://support.google.com/chrome_webstore/answer/2664769 — **Documented**. Developer policy: "Request access to the narrowest permissions necessary" — https://developer.chrome.com/docs/webstore/program-policies/policies (2025-05-22) — **Documented**
- Reputable SEO extensions to name (**Observed practice**, vendor pages only): Ahrefs SEO Toolbar ("Access Domain Rating and URL Rating for any site / Compare raw vs rendered HTML / Get keyword ideas in the SERP", "No verification needed" — https://ahrefs.com/free). Others commonly recommended (Detailed SEO Extension, SEO Minion, Redirect Path, Moz Bar) were **not researched**; check permissions and Chrome Web Store "trusted" status before naming.

---

## 5. WordPress SEO plugins: choosing ONE and what each configures

### Versions and reach (wordpress.org Plugins API, 2026-11-09) — Documented
| Plugin | Version | Last updated | Active installs | Requires WP | Tested up to |
|---|---|---|---|---|---|
| Yoast SEO | 28.8 | 2026-10-27 | 10,000,000+ | 7.0 | 7.1.4 |
| Rank Math SEO | 1.0.281 | 2026-11-03 | 4,000,000+ | 6.7 | 7.1.4 |
| All in One SEO | 5.0.5 | 2026-11-04 | 2,000,000+ | 5.7 | 7.1.4 |

(WordPress 101 M05.L02 used Rank Math 1.0.280 and AIOSEO 5.0.4; both have since updated.)

### What each configures (free vs premium)
| Job | Yoast SEO (free) | Rank Math (free) | AIOSEO (free "Lite") |
|---|---|---|---|
| Title/meta templates | Yes (Settings → Content types; WP 101 M05.L02) | Yes ("Titles & Meta", WP 101 M05.L02) | Yes: "SEO titles and meta descriptions" (wp.org) |
| XML sitemap | Yes: "Under Technical SEO , slide the XML sitemaps toggle to On" (https://yoast.com/help/xml-sitemaps-in-the-wordpress-seo-plugin/, metadata 2026-02-24). "Post types marked as noindex will not appear in the sitemap." | Yes (KB "Configure sitemaps", metadata 2025-07-10) | Yes: "it's enabled by default" (https://aioseo.com/docs/how-to-create-an-xml-sitemap/, metadata 2026-08-14) |
| Schema graph | "Schema.org structured data"; Schema API to "modify or extend Schema.org graph pieces, including Article, Organization, Person, Breadcrumb, and WebPage entities"; "Premium outputs significantly more schema types" | "16+ Schema types" (wp.org list) | "Smart Schema Markup"; "Every plan, including the entry-level Basic plan, includes … Smart Schema Markup" |
| Breadcrumbs | "Enable breadcrumbs for your theme" toggle, breadcrumbs block, shortcode `[wpseo_breadcrumb]` or theme code (https://yoast.com/help/how-to-implement-yoast-seo-breadcrumbs/, 2026-02-24) | "SEO optimized breadcrumbs with theme support" | "Smart Breadcrumbs … with full JSON-LD schema support" |
| Redirects | **Premium**: "Redirect manager with bulk tools, CSV import and export, and automatic prompts when you move or delete content." (wp.org) | **Free**: "Smart Redirection manager to create redirects at scale ✔ Built-in 404 monitor" (wp.org); Pro adds "Advanced Redirections Module", "Import Redirections Data via CSV File", "Sync Redirections to .htaccess" (https://rankmath.com/free-vs-pro/, metadata 2022-02-26) | **Pro**: "AIOSEO Pro adds advanced features like the redirection manager" (wp.org FAQ); pricing grid ticks "Redirection Manager" for Elite and Pro, crosses for Plus and Basic |
| Attachment pages | Media pages **disabled by default** (redirect to file) | "Redirect Attachments" to parent post, recommended | "Redirect Attachment URLs" default = Attachment (the file) |
| `noindex` controls | Per post type/taxonomy and per post | Per type and per post; Pro: "Noindex Password Protected Pages" | Per type and per post (not quoted) |

Supporting quotes:
- Rank Math redirect caveats: "ensure your Redirections module is enabled under WordPress Dashboard → Rank Math SEO → Dashboard → Modules" and "For the Redirections module to appear, ensure you switch to the Advanced mode in Rank Math ." "Rank Math's Redirection module does not allow redirection of the homepage." — https://rankmath.com/kb/setting-up-redirections/ (metadata 2023-08-04) — **Documented**
- Yoast Premium price: "Only $ 118.80 / year (ex VAT)"; "Move or delete a page and Yoast prompts you to set up the redirect … You can manage redirects in bulk by CSV." — https://yoast.com/product/yoast-seo-premium-wordpress/ — **Documented**
- AIOSEO plan logic: "Local SEO and Author SEO start on Plus, Internal Link Assistant and deeper redirect tools start on Pro, and Search Statistics with keyword rank tracking are Elite-only." — https://aioseo.com/pricing/ (metadata 2025-08-26) — **Documented**. Note the FAQ says "deeper redirect tools start on Pro", consistent with the grid.
- All three import from each other: Rank Math "import SEO settings from popular SEO plugins like Yoast SEO, Yoast SEO Premium, AIO SEO Pack, SEOPress … and Redirection"; AIOSEO "imports from: Yoast SEO & Yoast SEO Premium Rank Math (RankMath) SEOPress". — wp.org — **Documented** (switching = import, then deactivate the old one)
- **Choosing one (Observed practice, course rule):** any of the three covers the course's needs for free. Pick by: free redirects (Rank Math only; otherwise use the free Redirection plugin as WP 101 M05.L02 does), what your host/agency already uses (Amara), and WooCommerce needs (Nila: Yoast's WooCommerce SEO is a paid add-on: "Yoast WooCommerce SEO builds on Yoast SEO Premium"). No source shows one ranks better.

### XML sitemaps: plugin vs WordPress core `wp-sitemap.xml`
- "With version 5.5., WordPress will expose a sitemap index at /wp-sitemap.xml ." "By default, sitemaps are created for all public and publicly queryable post types and taxonomies, as well as for author archives and of course the homepage of the site." "If you update the Site Visibility settings … to discourage search engines from indexing your site, sitemaps will be disabled." "If you are developing a plugin that allows setting specific posts or pages to noindex, it's a good idea to exclude those from the sitemap too." — https://make.wordpress.org/core/2020/07/22/new-xml-sitemaps-functionality-in-wordpress-5-5/ (22 July 2020) — **Documented**
- "a single sitemap can hold a (filterable) maximum of 2000 entries." — same post — **Documented**
- Note: core sitemap includes **author archives** and **all public taxonomies** (tags), which is why plugins' extra controls matter.
- AIOSEO: "Once you enable AIOSEO, our XML sitemaps will override the default WordPress sitemaps" — wp.org FAQ — **Documented**. Same FAQ claims "Yes, AIOSEO smart sitemaps are a lot more optimized than the default WordPress sitemaps" and that a sitemap "can help you to improve your domain authority" — **Myth/contested** (vendor claim; "domain authority" is a third-party metric, not a Google signal). Use as a "spot the marketing claim" example.
- Yoast and Rank Math: no official statement found that they disable `wp-sitemap.xml` (see Not found). Observed practice and M01.L08/M06.L04: the plugin's `/sitemap_index.xml` replaces it.

### Attachment pages (plugin settings)
- Yoast: "The Media pages section exists for one solid reason: attachment URLs ." "These attachment URLs are not useful in 99.5% of the settings, because Google may index these pages and regard them as low-quality content since they only contain a single image. In addition, if users find these pages, they may leave your site because they only find a single image, leading to a higher bounce rate. Because these attachment URLs are not useful, we disable the media pages by default". "If you do use these attachment URLs, for example for a photography site or image bank, you can manually enable media pages." — https://yoast.com/help/yoast-seo-settings-media-pages/ (metadata 2026-04-21) — **Documented** (the "99.5%" and "bounce rate" parts are vendor opinion → treat as **Observed practice**)
- Yoast: "Disabling media pages will cause all attachment URLs to redirect to the media itself." "Versions earlier than Yoast SEO 7.0 offered the option to redirect to a post or page. This method, however, was not always reliable and caused a lot of issues, especially when an image was added to multiple parts of your site." — https://yoast.com/help/redirect-image-attachment-urls/ (metadata 2026-02-18) — **Documented**
- Rank Math: "Redirect Attachments … redirects the URLs of your attachment pages to the post that are used in." "we recommend enabling this setting." Also "Redirect Orphan Attachments" for media "not associated with any post". — https://rankmath.com/kb/general-settings/ (metadata 2025-12-30) — **Documented**. Rank Math sitemap KB: "Attachment pages are thin content pages and should not be indexed in most cases". — https://rankmath.com/kb/configure-sitemaps/ — **Documented**
- AIOSEO: three options: "Disabled", "Attachment" ("This is our recommendation and the default setting"), "Attachment Parent". "if an image is not attached to any post or page, and you select the last option, then when you go to an attachment page you'll see the attachment page." — https://aioseo.com/docs/redirecting-attachment-pages/ (metadata 2026-08-14) — **Documented**

### Why two SEO plugins at once break things
- Rank Math (official FAQ on wp.org): "Using another SEO plugin alongside Rank Math can cause conflicts if they perform similar functions." "For best results, disable or delete any other SEO plugins." "Do I have to remove other SEO plugins if I install Rank Math? It is recommended to remove other SEO plugins. Using other SEO plugins alongside Rank Math can hurt your website's performance and cause conflicting SEO results." — https://wordpress.org/plugins/seo-by-rank-math/ (FAQ, v1.0.281) — **Documented** (the clearest vendor warning found)
- Yoast conflict-checking method: "In some cases, you'll need to review the source code as you deactivate plugins, to check if certain tags have been removed." Recommends the "Health Check & Troubleshooting plugin" or a staging site. — https://yoast.com/help/how-to-check-for-plugin-conflicts/ (metadata 2026-05-20) — **Documented** (method, not a two-SEO-plugin warning)
- What actually duplicates (**Observed practice**, consistent with M06.L03 "Two canonical tags … theme and an SEO plugin" and WP 101 "two sets of social tags, two sitemaps"): two `<title>` rewrites (one wins), two meta descriptions, two canonicals, two sets of Open Graph tags, two JSON-LD graphs (two Organization/WebSite nodes), two sitemap indexes (`/sitemap_index.xml` from both Yoast and Rank Math; AIOSEO also uses `/sitemap.xml`), conflicting robots meta. Google on two canonicals: covered in M06.L03 (Google may ignore conflicting signals) — reuse that quote.
- AIOSEO: no official two-plugin warning found (docs URL 404). See Not found.

---

## 6. WordPress-specific SEO issues

### Attachment pages: WordPress 6.4 change
- "As of WordPress 6.4, attachment pages for new WordPress installations are fully disabled." "Until WordPress 6.4 was released, WordPress created attachment pages by default for every attachment uploaded. On the vast majority of sites, these attachment pages don't add any meaningful information. They do, however, exist, get indexed by search engines, and sometimes even rank in search results, leading to bad results for users and site owners." — https://make.wordpress.org/core/2023/10/16/changes-to-attachment-pages/ (16 Oct 2023, dev note by Joost de Valk) — **Documented**
- "This change introduces a wp_attachment_pages_enabled database option". "On existing sites, the option is set to 1 on upgrade, so that attachment pages continue to work as is." "For new sites, the option is set to 0 by default, which means attachment pages are redirected to the attachment URL". "When attachment pages are disabled, the admin link 'View attachment page' changes to 'View Media File'." Change via "wp option set wp_attachment_pages_enabled 0|1" or `wp-admin/options.php` ("not usually recommended"). — same — **Documented**
- Comment by Joost de Valk (same page, 16 Oct 2023): "No, you don't have to do anything. The site keeps on working as it did before." — **Documented** (author of the dev note)
- **Teaching point:** a site installed before 6.4 (Nila, if old; Amara's clients) still has attachment pages unless the SEO plugin redirects them; a new practice site (WP 7.x) does not. Check by opening a Media item → "View attachment page" vs "View Media File".

### Tag/category, author and date archives; search pages
- Reuse M05.L02 (core adds no `noindex` to archives; `noindex` on `/?s=` search results; tag decision flowchart) and M06.L04.
- Core robots API: "WP 5.7 introduces a wp_robots() function which outputs a robots meta tag." "The max-image-preview:large directive … is now added by default to sites that wish to be indexed by search engines." — https://make.wordpress.org/core/2021/02/19/robots-api-and-max-image-preview-directive-in-wordpress-5-7/ — **Documented**
- Author archives on a single-author site (Kavya) duplicate the blog archive (**Observed practice**); plugins offer an author-archive switch. AIOSEO sitemap doc: "The last two settings are for date archives and author archives … We normally don't include these in the sitemap because they have little value in search results." — https://aioseo.com/docs/how-to-create-an-xml-sitemap/ — **Documented** (vendor view)
- Core sitemap includes author archives by default (WP 5.5 note above) — **Documented**.

### Plugin bloat
- "The number of plugins and their performance will also have a huge impact on your site's performance. Deactivating and deleting unnecessary plugins is a significant way to improve performance." "The first and easiest way to improve WordPress performance is by looking at the plugins. Deactivate and delete any unnecessary plugins. Try selectively disabling plugins to measure server performance." — https://developer.wordpress.org/advanced-administration/performance/optimization/ (last updated 2026-10-14) — **Documented**
- "Plugin count itself is the problem" is **Myth/contested**: the WordPress text says "number of plugins *and their performance*". One heavy plugin can cost more than ten light ones (course inference). Rank Math's claim "Fastest SEO plugin with barely any impact on site speed" is vendor marketing (**Observed practice**, unverified).

### Caching plugins and page caching
- "WordPress caching is the fastest way to improve performance. If your site is getting hit right now install W3 Total Cache , WP Super Cache or Cache Enabler ." — https://developer.wordpress.org/advanced-administration/performance/cache/ (last updated 2023-03-28) — **Documented** (older page; plugin names may be dated)
- "if you don't use a caching solution, performance will slow to a halt as additional page requests come in and stack up, often crashing your web or database server." — optimization page — **Documented**
- WordPress 6.1 Site Health: "Full Page Cache — This new check determines whether the site is using a full page cache solution and if the response time is acceptable." Plus "Persistent Object Cache". — https://make.wordpress.org/core/2022/10/06/new-cache-site-health-checks-in-wordpress-6-1/ — **Documented**. Free check: **Tools → Site Health**.
- SEO pitfalls of caching (**Observed practice**, not from a primary source): stale cached pages keep an old `noindex`/title after you change it; cached sitemaps (M05.L02 troubleshooting "Your SEO plugin caches its sitemap"); WooCommerce cart/checkout must be excluded from page cache (Nila; verify against WooCommerce docs before teaching — not fetched). Fix: purge cache after SEO changes, then re-check with view-source and URL Inspection.

### Image sizes
- "WordPress will detect if it is a 'big' image by checking if its height or its width is above a big_image threshold . The default threshold value is 2560px". "If an image height or width is above this threshold, it will be scaled down … The scaled-down image will be used as the largest available size." — https://make.wordpress.org/core/2019/10/09/introducing-handling-of-big-images-in-wordpress-5-3/ (9 Oct 2019, WP 5.3) — **Documented**
- Teaching point (course inference + M04.L04): WordPress creates several sizes per upload and outputs `srcset`, so upload sensibly sized images; every extra theme/plugin image size adds files (bloat) but isn't an SEO issue in itself. Attachment pages (above) are the SEO issue.

---

## 7. Paid tools: when worth paying (FRESHNESS)

- Prices: see the table at the top (Ahrefs from **(fetch-tool extract)**; Semrush, Moz, Screaming Frog, Yoast, Rank Math, AIOSEO from curl text, 2026-11-09).
- Ahrefs Free upgrade nudge: "Need more? Try Ahrefs' Starter plan. Get extended access to Site Explorer, Site Audit, Keywords Explorer, and more tools". — https://ahrefs.com/free — **Documented**
- Ahrefs Lite: "1 user included / Add 2 more users at $40/mo each / 20 non-verified, unlimited verified projects / 2 years of historical data". — https://ahrefs.com/pricing — **Documented**
- Semrush SEO plan: "For freelancers and small businesses looking to grow their online visibility with SEO … 5 websites to monitor / 500 keywords to track". — https://www.semrush.com/pricing/seo-ai-search/ — **Documented**
- Moz: Standard "For small businesses that just need the basics of SEO"; entry plan "$49/month … designed specifically for individuals managing a single website." "Pay yearly (🚨 Save 20%)". — https://moz.com/products/pro/pricing — **Documented**
- When to pay (**Observed practice**, course rule; no neutral source): pay only when a free limit blocks a real, repeated job: Screaming Frog licence (£199/yr) once sites exceed 500 URLs or you need JS rendering, scheduled crawls, GSC/GA4/PSI joins (Amara's agency, Tomás's 2,000-product store); a backlink/keyword suite (Ahrefs/Semrush/Moz, ~$99–$249/mo) when you research **competitors** weekly (free tools only show your own verified site well — M10). Kavya (small yoga site) and Nila (≈300 URLs) can stay free. Rupee equivalents not published on vendor pages; convert at time of writing and flag.

---

## Freshness flags

- **Screaming Frog** v25.0/25.1 (3–4 Nov 2026) added auto throttle, JSON config, MCP debugging; menus may shift. £199/yr unchanged since M06.L06. Pricing page metadata 2024-01-18 but features list includes 2026 items (AI integration, MCP server).
- **Ahrefs** prices differ by location/currency ($29 vs €27 Starter) and change often; Ahrefs Free renamed in 2026. Site Audit "170+ issues" figure is marketing.
- **Semrush** restructured plans into "SEO + AI Search" (SEO / Starter / Pro+); older articles say Pro/Guru/Business. Re-check.
- **Moz** prices and plan names (Standard/Medium/Large; $49 entry plan). Re-check.
- **SEO plugins** update every 1–3 weeks (Yoast 28.8, Rank Math 1.0.281, AIOSEO 5.0.5 on 2026-11-09). Rank Math pricing URL currently redirects to a sale page; renewal prices quoted from its FAQ.
- **Web Vitals extension** retired Jan 2025 (Chrome 132); many tutorials still recommend it.
- **Bing**: Site Scan's only official description is 2020 + a June 2025 feature list; AI Performance (Feb 2026) and Topics Portfolio beta (Oct 2026) are new and labelled preview/beta.
- **WordPress**: attachment-page default changed in 6.4 (Oct 2023); core sitemap since 5.5 (2020); Site Health cache checks since 6.1 (2022). WordPress caching handbook page last updated 2023-03-28 (plugin recommendations may be dated).
- **DevTools** docs dates range 2019–2025; Elements and Disable JavaScript pages are old but still valid in principle. Chrome changes panels often.

## Conflicts between sources

- **Attachment redirect target:** WordPress 6.4 core and Yoast redirect to the **media file**; Rank Math recommends redirecting to the **parent post**; AIOSEO defaults to the file but offers parent. Yoast says parent redirects were "not always reliable". Teach: either is fine; just don't leave attachment pages indexable.
- **Free redirects:** Rank Math free has a redirect manager; Yoast (Premium) and AIOSEO (Pro) don't in their free versions. WP 101 M05.L02 uses the separate free Redirection plugin.
- **Screaming Frog free "configuration":** pricing page crosses out "Crawl Configuration" entirely, yet the free version clearly obeys robots.txt and has modes (Spider/List). Which individual settings a free user can change (e.g. user agent, list mode, max URLs) isn't itemised. Test in the app before stating it.
- **"Plugin count hurts performance":** WordPress handbook ties it to "number of plugins and their performance"; popular advice says "fewer than N plugins". No number is supported.
- **AIOSEO sitemap claims** ("improve your SEO rankings", "domain authority") vs Google's neutral sitemap docs (M06.L04) — vendor marketing.
- **Ahrefs Starter price** $29/mo (pricing page via fetch tool) vs €27/mo (ahrefs.com/free via curl) — currency/location, not a real conflict, but quote with currency and date.
- **Yoast "99.5%" and "higher bounce rate"** are Yoast opinion; the WordPress dev note gives the neutral reason ("get indexed … sometimes even rank").

## Not found

- **Yoast official "don't run two SEO plugins" help page:** not found (several guessed URLs 404; search found only the general plugin-conflict guide). Yoast's statement that it disables core `wp-sitemap.xml` also not found.
- **AIOSEO official two-plugin conflict doc and redirection manager getting-started doc:** URLs 404.
- **Rank Math KB plugin-conflicts page:** 404 (but the wp.org FAQ warning is quoted).
- **Bing Site Scan official help page** (page limits, scan options, duration): old help URLs 404; only 2020/2025 blog descriptions found.
- **Whether Screaming Frog list mode / user-agent switching works in the free version:** not itemised on any official page.
- **Ahrefs Site Audit features limited on Free vs paid** (e.g. JS execution, scheduling frequency on Free): not stated on ahrefs.com/free or /site-audit.
- **Google public comment** on SEO plugins, attachment pages, plugin bloat or tool health scores: not searched/fetched this session. M05.L02 already flags the 2015 tag-page comment.
- **Google current guidance on internal search-results pages** (old guideline "use robots.txt to prevent crawling of search results pages"): not found in current spam policies or crawl-budget page. Use WordPress core's own `noindex` on search pages (M05.L02) instead.
- **WooCommerce caching exclusions** (cart/checkout): not fetched.
- **Lighthouse SEO audit list** (which checks the SEO category runs): not fetched.
- **Independent (non-vendor) comparison** of Yoast vs Rank Math vs AIOSEO output quality: not found; don't claim one ranks better.
- **Rupee pricing** for any paid tool: not on vendor pages fetched.

## Suggested lesson split (6 lessons, in topic order)

1. **M13.L01 — Screaming Frog like a pro (free first).** Free vs licence map (pricing ticks/crosses); defaults you can rely on (Respect robots.txt, 5 threads, auto throttle); exporting the right tabs before closing; list mode for redirect maps (#8, verify free availability); what a licence adds (JS rendering, custom search/extraction, GSC/GA4/PSI APIs, saved crawls, scheduling) shown as a demo. Ethics recap (M10.L02). Builds the cheat sheet "Screaming Frog settings by task".
2. **M13.L02 — Second-opinion crawlers: Ahrefs Free Site Audit and Bing Site Scan.** Verify, crawl credits (only 200 HTML pages count), errors/warnings/notices, health score caveat ("orphan pages … might not hold true for an ecommerce store"), bulk CSV export; Bing Site Scan, URL Inspection, Robots.txt tester, Recommendations; AI Performance teaser (M14). Comparing findings across tools; "trust issues, not scores" (M01.L07).
3. **M13.L03 — Chrome DevTools and extensions for SEO.** View-source vs Elements (rendered DOM), Disable JavaScript, Network (Preserve log for redirect chains, status, `X-Robots-Tag`, cache headers), user-agent override, device toolbar ("first-order approximation"), Lighthouse panel (lab only), Rendering tab (layout shifts). Web Vitals extension retired. Picking safe extensions (trusted, narrow permissions); Ahrefs SEO Toolbar raw vs rendered.
4. **M13.L04 — Choose ONE SEO plugin and configure it end to end.** Comparison table (free vs premium, redirects), titles/meta templates, sitemap (plugin replaces `wp-sitemap.xml`; submit one), schema graph (Organization/WebSite/Breadcrumb; check with Rich Results Test, #13), breadcrumbs, `noindex` for thin archives (#7), redirects (#8), per-post checks tied to the publish checklist (#9). Link to WP 101 M05.L02 for click-paths. Builds "SEO plugin set-up checklist".
5. **M13.L05 — WordPress-specific SEO traps.** Attachment pages (6.4 change; old vs new sites; plugin redirect options), tag/category/author/date archives and search pages (reuse M05.L02), two SEO plugins (Rank Math FAQ warning; how to spot duplicates in view-source), plugin bloat (WordPress handbook), page caching (Site Health Full Page Cache check; purge after SEO changes), image sizes (2560px big-image threshold, `-scaled`).
6. **M13.L06 — Paid tools: when they're worth it + capstone.** Ahrefs/Semrush/Moz/Screaming Frog prices (dated, flagged), what free can't do (competitor data, >500 URLs, JS crawls, scheduled monitoring), persona decisions (Kavya stays free; Tomás/Amara may pay). Capstone: configured plugin + Screaming Frog export + Ahrefs Free or Bing Site Scan export. Builds the "tool comparison table" cheat sheet.

## Break-it lab ideas

**Planted site: "Nila Coffee staging" with Yoast SEO and Rank Math both active (plus a few other traps). Learners find and fix each one using free tools.**

1. **Two SEO plugins active.** View-source shows two `<meta name="description">`, two `rel="canonical"`, two `og:title`, two JSON-LD blocks with two `Organization` nodes. `/sitemap_index.xml` is served by one plugin while Search Console has the other plugin's sitemap submitted. Fix: pick one, import settings, deactivate and delete the other, resubmit one sitemap. Quote Rank Math: "Using other SEO plugins alongside Rank Math can hurt your website's performance and cause conflicting SEO results."
2. **Three sitemaps:** `/wp-sitemap.xml`, `/sitemap_index.xml` and `/sitemap.xml` all respond (e.g. AIOSEO was installed once and its rewrite rules linger, or a plugin's sitemap is off). Learners record which one each tool lists and why "use only one sitemap system" (M06.L04).
3. **Attachment pages indexed:** an old (pre-6.4) site with media pages enabled; Screaming Frog crawl shows dozens of thin `/product-name/bag-photo/` URLs with 200 status and in the sitemap. Fix: plugin attachment redirect (or `wp_attachment_pages_enabled 0`), re-crawl to see 301s.
4. **Stale cache:** a page was set to `noindex` and back, but the page cache still serves the `noindex` version. DevTools Network shows a cache-hit header and the old robots meta. Fix: purge cache, re-check view-source.
5. **Screaming Frog set to "Ignore robots.txt" with 20 threads on a client's shop** (licensed copy). Ethics and server-load breach (Screaming Frog: "you could overload a server and crash it"; "approving a crawl rate and time with the webmaster first").
6. **"Crawl with Googlebot user agent to see what Google sees"** → Cloudflare returns 403 to spoofed Googlebot; a UA switch is not Googlebot. Use URL Inspection instead.
7. **"Screaming Frog found no missing H1s"** but the theme injects the H1 with JavaScript and the crawl was Text Only (or free). Check with DevTools Elements vs view-source / Disable JavaScript.
8. **"Health score 98, so the site is fine"** while the shop's best category is `noindex` (one notice among hundreds). Tool scores vs real issues (Ahrefs: issues "are not universal"; M01.L07).
9. **"Install the Web Vitals extension to check INP"** → retired in Chrome 132; use DevTools Performance panel / PSI field data.
10. **"We need Ahrefs Standard ($249/mo) to audit Kavya's 40-page yoga site"** → free Ahrefs Site Audit (5,000 credits/month per verified project) and Screaming Frog free (500 URLs) cover it.
11. **"Removed 15 plugins, so the site is now fast"** while the one heavy page builder/slider remains. Measure (Site Health, Lighthouse/PSI) instead of counting.

## Hands-on ideas (free only)

- **Screaming Frog free crawl → export pack:** crawl the practice site (or Nila's) with defaults; export Internal (HTML), Response Codes 3xx/4xx, Directives Noindex, Canonicals, Page Titles Duplicate, plus the "Crawl Overview" report, as CSV before closing (no saving in free). Name files `YYYY-MM-DD-site-tab.csv`.
- **List-mode redirect check:** paste 10 old URLs from a redirect map into list mode (if available in free; otherwise use DevTools Network with Preserve log, URL by URL) and confirm single-hop 301s (#8).
- **Second opinion:** verify the site in Ahrefs Free (import from Search Console) and/or Bing Webmaster Tools; run Site Audit and Site Scan; build a sheet: Issue | Screaming Frog | Ahrefs | Bing | Real issue? (Y/N) | Fix | Owner.
- **DevTools SEO kit drill (10 min per page):** view-source title/meta/canonical/robots → Elements for rendered changes → Disable JavaScript → Network status + headers (Preserve log) → device toolbar → Lighthouse SEO + Performance (lab) → note one difference between raw and rendered.
- **Plugin set-up checklist run:** with ONE plugin: title/meta templates per post type, sitemap URL submitted to GSC and Bing, Organization/Person + logo, breadcrumbs on, attachment redirect on, tag/author/date archive decisions recorded (M05.L02 flowchart), redirects path (Rank Math free or Redirection plugin), Rich Results Test on 2 URLs (#13).
- **Attachment page check:** Media → open an image → is it "View attachment page" or "View Media File"? Open the attachment URL and record the status (200 page / 301 to file / 301 to parent).
- **Two-plugin lab on WordPress Playground or local install** (safe, disposable): activate a second SEO plugin, record the duplicate tags in view-source, then remove it and confirm they're gone. Never on a live site.
- **Site Health cache check:** Tools → Site Health → note the Full Page Cache result; purge cache after an SEO change and confirm in view-source.
- **Paid-or-not decision memo:** for one persona, list jobs per month, which free limit blocks each, and the cheapest paid option with dated price; default answer "stay free" unless a limit blocks a recurring job.
- **Capstone:** configured SEO plugin (screenshot-free checklist + view-source evidence of single tags) + Screaming Frog CSV export + Ahrefs Free or Bing Site Scan export, merged into one prioritised issue list (reuse M10's Value/Chance/Effort or a simple Impact/Effort), each fix tied to a non-negotiable (#7, #8, #9, #13).
