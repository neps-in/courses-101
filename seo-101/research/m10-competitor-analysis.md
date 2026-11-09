# Research: M10 — Competitor Analysis

**Researched:** 2026-11-08 (finished 2026-11-09 after a search rate limit; no pages were fetched again)
**Scope:** primary-source facts for SEO 101 Module 10 (L2, practitioner): search competitors vs business competitors; SERP analysis; keyword and content gap analysis with free tools; backlink gap; on-page and technical comparison; turning findings into priorities; ethics (learn from, don't copy). FREE tools only. Running example: Nila Coffee (small Indian coffee roaster, WordPress shop plus brew-guide blog).
**Method:** pages were downloaded with curl on 2026-11-08 and converted to text. Quotes were copied from that text unless marked otherwise. "Last updated" dates are the ones the page showed. Nothing was logged in to, so no limit was tested inside a live account. Limits behind a login (what a results screen shows) are **not** confirmed unless a public official page states them.

**Labels:** **Documented** = official docs from the company that owns the product (Google, Ahrefs, Semrush, Moz, Similarweb, Neil Patel/Ubersuggest, Screaming Frog, Internet Archive). **Google public comment** = a named Googler or official spokesperson (person, date, where). **Observed practice** = vendor blog guidance, third-party reports or common SEO practice, not product documentation. **Myth/contested** = widely repeated but unsupported or contradicted.
**Quote markers:** **(fetch-tool extract)** = came through a summarising fetch tool. **(search-tool snippet, unverified)** = only seen as a web-search summary. The official page could not be opened, so do not quote it in a lesson.

**Earlier lessons already introduced (keep terms consistent, go deeper here):**
- **M01.L05** defined **search competitors**: "your search competitors are whoever ranks for *your* searches". For Nila Coffee's `how to make cold brew` these are "food blogs, YouTube and big recipe sites, not other roasters". It also taught `site:` (Documented), quotes, `-` and `intitle:`, plus Part C "Size up your search competitors" (`site:theirdomain.com`, "roughly how many pages"). The glossary already has "Search competitor". M10 should add the **business competitor** contrast plus terms such as keyword gap, content gap and backlink gap.
- **M03.L01** said: "Match the *type* of page, then be more useful than what's there", and quoted Google: "Does the content provide original information, reporting, research, or analysis?" M10 ethics builds on this line. Don't redefine intent.
- **M03.L04** introduced reading who ranks in a private window and the **Value / Chance / Effort** score (each 1–3, total out of 9; ties go to higher Value). It also covered "Quick wins" and "Stretch targets", plus "A big brand ranks, but the page is weak → rate Chance as 2". It said: "Anyone who gives you a formula that predicts rankings is claiming more than Google does". M10 prioritisation should **reuse this score** rather than invent a new one. ICE and impact × effort can be shown as relatives of it (section 8).
- Point to M03.L04's "A difficulty score can't see on-page quality" when discussing third-party metrics (DR/DA, traffic estimates).

---

## Free tool limits (official pages, checked 2026-11-08)

| Tool | What's free | Limit (verbatim from official page) | Official URL | Checked |
|---|---|---|---|---|
| **Ahrefs Free** (formerly Ahrefs Webmaster Tools) | Site Explorer, Site Audit and Web Analytics for **verified (own) sites only**. Toolbar, Social Media Manager and AI Content Helper need no verification | "Verified websites Unlimited"; Site Explorer "1 K backlinks & keywords visible at once"; Site Audit "5 K crawl credits/month per project"; Web Analytics "Up to 1 M events per project"; AI Content Helper "1 free docs/month". "Links shown … Top 1,000", "Keywords shown … Top 1,000" | https://ahrefs.com/free and https://ahrefs.com/webmaster-tools | 2026-11-08 |
| **Ahrefs Backlink Checker** (free, any site) | Domain/URL summary (referring domains, backlinks, DR, AR) and a list of backlinks | Official page says only: "Try the free version of Ahrefs' Backlink Checker. Get a glimpse into the power of our premium tool." **The "top 100 backlinks" cap was NOT found on any official page** (see Not found) | https://ahrefs.com/backlink-checker | 2026-11-08 |
| **Ahrefs Keyword Generator** (free) | Keyword ideas for Google, Bing, YouTube, Amazon | No numeric free cap stated on the page. Title: "Find 100+ Keyword Ideas in Seconds" | https://ahrefs.com/keyword-generator | 2026-11-08 |
| **Ahrefs Website Traffic Checker** (free) | Organic traffic **estimate** for any site/URL | "See organic search traffic estimates for any website or webpage. Try the free version of Ahrefs' traffic checker." No numeric cap stated | https://ahrefs.com/traffic-checker | 2026-11-08 |
| **Semrush Free** | Domain Overview, Keyword research, Backlinks, competitor reports | KB: "Free: For trying out the platform, with no credit card required. Includes 1 demo project, 10 reports per day across all vital tools, and a limited set of AI Visibility features." | https://www.semrush.com/kb/1011-subscriptions (redirected from /kb/856-subscription-plans-comparison) | 2026-11-08 |
| Semrush Free (blog table) | Same, per tool | "Domain Overview 10 queries/day … Keyword Research 10 queries/day … Competitor Research 10 queries/day … Site Audit 100 pages … Position Tracking 10 keywords … Backlinks 10 queries/day" (blog, dated December 10, 2025). **Conflicts in framing with KB "across all vital tools"** (see Conflicts) | https://www.semrush.com/blog/what-can-i-do-with-a-free-account-from-semrush/ | 2026-11-08 |
| **Moz Link Explorer** | DA, PA, Spam Score, link counts, anchor text, top pages, "Competitor backlinks you're missing out on" | "Get 10 free queries per month." / "Get 10 queries per month with your free Moz Community account." Requires a Moz account and email verification | https://moz.com/link-explorer | 2026-11-08 |
| **Moz Domain Analysis / Competitive Research** (free tools) | Domain metrics; "a list of your top SERP competitors" | Free tools page describes them, but **no numeric limit found**. https://moz.com/domain-analysis returned HTTP 403 to curl | https://moz.com/free-seo-tools | 2026-11-08 |
| **Ubersuggest** (Neil Patel) | Free account exists ("downgrade to a free account at any time") | Pricing page lists paid "Reports Per Day 150 / 300 / 900". **Free daily limit not stated on the official page** | https://ubersuggest.com/en/pricing (redirected from app.neilpatel.com/en/pricing) | 2026-11-08 |
| **Similarweb** (free website data) | High-level traffic estimates on similarweb.com | "Free data on Similarweb.com is a high-level sample of what we offer and shows a limited set of features without deeper drill downs." No numeric cap | https://www.similarweb.com/packages/web/ | 2026-11-08 |
| **Google Keyword Planner** | "Discover new keywords → Start with a website" (any site, including a competitor's) | "Start with a website: Enter any website and Google will look for keywords related to the content on that site." Access: "You must complete your account setup by entering your billing information to access basic features like 'Get ideas for new keywords'." | https://support.google.com/google-ads/answer/7337243 | 2026-11-08 |
| **Google Trends** compare | Relative interest, 0–100 | "Compare up to 8 groups of terms at once and up to 50 terms in each group." | https://support.google.com/trends/answer/4359550 | 2026-11-08 |
| **Bing Webmaster Tools — Keyword Research** | Keyword impressions from Bing | **Official help page not found** (old URLs return 404). See Not found | https://www.bing.com/webmasters | — |
| **Wayback Machine** | Past snapshots of any archived page | Free. Not all sites are archived (robots.txt, password, owner exclusion) | https://help.archive.org/help/using-the-wayback-machine/ | 2026-11-08 |
| **Screaming Frog SEO Spider** (free) | Desktop crawler | "The Screaming Frog SEO Spider is free, however you can purchase a licence to crawl more than 500 URLs and have access to advanced features." Free column: "Crawl Limit - 500 URLs" | https://www.screamingfrog.co.uk/seo-spider/pricing/ | 2026-11-08 |
| **PageSpeed Insights** | Lab (Lighthouse) + field (CrUX) data for any public URL | Field data only if the page/origin is in CrUX (section 6) | https://developers.google.com/speed/docs/insights/v5/about (last updated 2024-10-21) | 2026-11-08 |
| **Rich Results Test** | Structured data on any public URL or code snippet | URL must be crawlable: blocked by robots.txt or noindex → "the page cannot be tested with this tool" | https://support.google.com/webmasters/answer/7445569 | 2026-11-08 |
| **Google Search Console** | Real query/page data, **own verified site only** | (Performance report) "Learn which queries are bringing traffic to your site" | https://support.google.com/webmasters/answer/7576553 | 2026-11-08 |

**Key teaching point:** for a **competitor's** site, the free options that show real (not estimated) data are your own eyes on the SERP, `site:`, view-source, PSI/CrUX (if eligible), the Rich Results Test, the Wayback Machine and a polite 500-URL crawl. Every traffic or keyword number for someone else's site is a **third-party estimate** (section 2).

---

## 1. Free competitor-research tools and current free limits

### Ahrefs
- Rename: "Ahrefs Webmaster Tools is now Ahrefs Free" / "We moved beyond "Webmaster Tools" to reflect modern teams and give broader free access to Ahrefs' tools." — https://ahrefs.com/webmaster-tools — **Documented**
- "What's the difference between Ahrefs Free and Ahrefs Webmaster Tools? … They're the same account. Ahrefs Webmaster Tools is the original name — built around SEO tools for your verified websites. … Ahrefs Free is the same plan, renamed to reflect everything it now includes." — https://ahrefs.com/free — **Documented**
- Own sites only: "Some tools — Site Explorer, Site Audit, and Web Analytics — require you to verify ownership of your website first. It's a quick process. Social Media Manager, AI Content Helper, and the Toolbar work without it." — https://ahrefs.com/free — **Documented**
- "Free website analytics, technical audit & SEO metrics for your verified websites." — https://ahrefs.com/webmaster-tools — **Documented**
- Limits table: "Verified websites Unlimited … Web Analytics Up to 1 M events per project … Site Audit 5 K crawl credits/month per project … Site Explorer 1 K backlinks & keywords visible at once … AI Content Helper 1 free docs/month" — https://ahrefs.com/webmaster-tools and https://ahrefs.com/free — **Documented**
- "Ahrefs Free allows free-forever, limited access to our core tools." — https://ahrefs.com/free — **Documented**
- Backlink Checker: "Try the free version of Ahrefs' Backlink Checker. Get a glimpse into the power of our premium tool." The page lists the metrics: "Number of referring domains / Number of backlinks / Domain Rating (DR) / Ahrefs Rank (AR)". It also says: "Our proprietary Domain Rating (DR) metric is super-useful for judging the "backlink popularity" (strength) of a target." — https://ahrefs.com/backlink-checker — **Documented** (DR is Ahrefs' own metric, not a Google one)
- Toolbar: "Unlock Domain Rating (DR) and URL Rating (UR) metrics with our browser extension and free Ahrefs account." — https://ahrefs.com/backlink-checker — **Documented**
- Keyword Generator: "Find relevant keywords from our database of over 8 billion queries. Just enter up to ten words or phrases and choose from one of six keyword ideas reports." Also: "Every keyword comes complete with local and global monthly search volume estimates and other advanced SEO metrics — all powered by clickstream data." — https://ahrefs.com/keyword-generator — **Documented**
- Traffic Checker: "See organic search traffic estimates for any website or webpage. Try the free version of Ahrefs' traffic checker." The deeper reports on the same page (Top pages, Organic keywords, Batch Analysis "up to 200 websites at once") are **Site Explorer = paid**. — https://ahrefs.com/traffic-checker — **Documented**
- "They include our own collection of free SEO tools, as well as a few select third-party tools that we trust. While limited compared to a paid Ahrefs account, they're still immensely valuable for anyone who's just starting out in SEO." — https://ahrefs.com/free-seo-tools — **Documented**

### Semrush
- "Free: For trying out the platform, with no credit card required. Includes 1 demo project, 10 reports per day across all vital tools, and a limited set of AI Visibility features." — https://www.semrush.com/kb/1011-subscriptions — **Documented**
- "Yes, you can use Semrush for free. The Free plan gives you access to a limited set of features, including 1 demo project and 10 reports per day." — same URL — **Documented**
- Pricing page row: "10 reports per day across all vital tools" — https://www.semrush.com/pricing/seo-ai-search/ (redirected from /prices/) — **Documented**
- Blog (December 10, 2025): "With the free plan, you can run 10 domain overview queries per day, which is enough to check your own domain plus several competitors." Also: "With a free plan, you can run up to 10 searches per day. This lets you analyze your own backlink profile or peek into your competitors' link building strategies." Also: "With a free account, you can set up one campaign with a limit of 10 pages or keywords." — https://www.semrush.com/blog/what-can-i-do-with-a-free-account-from-semrush/ — **Documented** (vendor blog, older than the KB page)

### Moz
- Link Explorer steps: "Enter the URL you want link data for. … Create a Moz account to access Link Explorer. … Verify your email — let's keep the robots out. … Get 10 free queries per month." — https://moz.com/link-explorer — **Documented**
- "With your free Moz Community account, you get access to Moz metrics through Link Explorer, including: Domain Authority® Page Authority Spam Score Inbound link count Linking domain count Anchor text analysis Top content by popularity Follow vs. NoFollow link counts Recently discovered and lost linking domain Competitor backlinks you're missing out on" — https://moz.com/link-explorer — **Documented**
- Free Competitive Research tool: "Enter any site in our free competitive research tool to see a list of your top SERP competitors. Plus, gain insight into content gaps and keyword opportunities you can leverage for SEO success." — https://moz.com/free-seo-tools — **Documented** (no numeric limit shown)
- Domain Authority checker: "Enter any site into our free Domain Authority checker to see instant SEO metrics like Domain Authority (a Moz proprietary metric that measures how likely a site is to rank)." — https://moz.com/free-seo-tools — **Documented** (Moz's own metric. Google does not use DA. Tie to M03.L04.)
- Moz's Keyword Gap (Pro, not free): "Enter up to 3 competitors to see how your ranking keywords overlap and identify keywords where you're ranking in the top 20 results, but your competitor is appearing higher in the SERP." — https://moz.com/competitive-research — **Documented** (paid trial feature; the free tool is a limited preview)

### Ubersuggest
- "Yes, you can cancel your account or downgrade to a free account at any time." Paid tiers: "Reports Per Day 150 300 900". Also: "We offer a one-time 7-day free trial for monthly subscriptions." — https://ubersuggest.com/en/pricing — **Documented**
- The free daily limit (widely reported as 3 per day) was **not found on an official page**. Third-party sources disagree ("3", "3–5"). — **Myth/contested** until checked in a live free account.

### Similarweb
- "How do paid packages differ from the data I can access for free on your site? Free data on Similarweb.com is a high-level sample of what we offer and shows a limited set of features without deeper drill downs." — https://www.similarweb.com/packages/web/ — **Documented**

### Google Keyword Planner
- "Start with a website: Enter any website and Google will look for keywords related to the content on that site. Note: the contents of hyperlinks aren't used to generate keyword ideas." — https://support.google.com/google-ads/answer/7337243 — **Documented**
- "Tip : Specifying a keyword and a URL can result in a larger volume of keyword ideas, as compared to just URL." — same — **Documented**
- "Note: Keywords with very low search volumes, or keywords that are considered sensitive aren't discoverable or forecastable." — same — **Documented**
- Access caveat: "You must complete your account setup by entering your billing information to access basic features like "Get ideas for new keywords"." — same — **Documented**. **Teaching flag:** it's "free to use" but needs billing details, so give learners an alternative path (Ahrefs Keyword Generator, Search Console). Check how M03.L03 framed this and stay consistent.

### Google Trends
- "Compare up to 8 groups of terms at once and up to 50 terms in each group." — https://support.google.com/trends/answer/4359550 — **Documented**
- "Each data point is divided by the total searches of the geography and time range it represents to compare relative popularity." Also: "The resulting numbers are then scaled on a range of 0 to 100 based on a topic's proportion to all searches on all topics." — https://support.google.com/trends/answer/4365533 — **Documented**
- "Searches made by very few people: Trends only shows data for popular terms, so search terms with low volume appear as "0."" — same — **Documented**
- "Google Trends data should always be considered as one data point among others before drawing conclusions." — same — **Documented**
- Use for M10: compare brand-name interest (e.g. "nila coffee" vs a rival roaster's brand). Expect "0" for small brands. That is a useful lesson in why small brands can't be benchmarked this way.

### Wayback Machine
- "Some sites may not be included because the automated crawlers were unaware of their existence at the time of the crawl. It's also possible that some sites were not archived because they were password protected, blocked by robots.txt, or otherwise inaccessible to our automated systems. Site owners might have also requested that their sites be excluded from the Wayback Machine." — https://help.archive.org/help/using-the-wayback-machine/ — **Documented**
- Google spokesperson (via Search Engine Roundtable, 2024-09-12): "We know that many people, including those in the research community, value being able to see previous versions of webpages when available. That's why we've added links to the Internet Archive's Wayback Machine to our 'About this page' feature" — https://www.seroundtable.com/google-adds-internet-archives-wayback-machine-links-38055.html — **Google public comment** (unnamed spokesperson, quoted by Barry Schwartz, 2024-09-12). **Freshness flag:** check that the link is still in "About this result" before the lesson tells learners to use it.

---

## 2. How third-party traffic estimates are made and their disclaimers

### Ahrefs
- "The Organic traffic metric in Ahrefs is an estimation of how many clicks from google your target website, subfolder or URL gets each month." — https://help.ahrefs.com/en/articles/1863206-what-is-organic-traffic-in-ahrefs-and-how-do-we-calculate-it (dated September 3, 2026) — **Documented**
- Method: "We find all the keywords for which your target ranks in organic search results. We estimate the search traffic your target gets from each of those keywords based on its ranking position, monthly search volume, and our estimated CTR for that position. We sum up the traffic estimations of each keyword" — same — **Documented**
- "NOTE : Remember to treat the organic traffic estimations in Ahrefs as precisely that: estimations." — same — **Documented**
- "While these estimates don't, and can't, show you exactly how much organic traffic a website gets, they work incredibly well for comparison ." — same — **Documented** (the comparison claim is the vendor's own)
- "The number that Ahrefs shows is an estimate, not the actual search traffic data of a website. It's not possible for all the variables in our traffic estimation formula to be 100% accurate." — same — **Documented**
- "Ahrefs doesn't track ALL the keywords that a website is ranking for in organic search results. We track the most popular ones." — https://help.ahrefs.com/en/articles/431381-why-don-t-the-organic-traffic-numbers-reported-by-ahrefs-match-those-i-see-in-google-analytics-or-gsc (September 3, 2026) — **Documented**
- "CTR model. … Only Google knows the real numbers of clicks, so what we have is an estimate, based on studies and research of how people search. That adds yet another layer of a discrepancy." — same — **Documented**
- "As such, the data that we show is just an estimate and can't be treated as the actual search traffic data of a website." — same — **Documented**
- "Tip #2: You get the most value from Ahrefs when you look at the actual keywords that your competitor is ranking for and the pages that bring them the most traffic from search. This data is much more accurate than our "big picture" traffic estimation." — same — **Documented**

### Semrush
- Traffic & Market data: "The data in our Traffic & Market toolkit comes from our panel of over 200 million real, anonymized internet users across more than 190 countries and regions. We partner with hundreds of clickstream data providers to build this panel". Also: "We then process this clickstream data through our Neural Network algorithm. This algorithm combines various data sources, including our backlink and organic position databases, to produce a realistic and accurate estimation of website traffic and user behavior." — https://www.semrush.com/kb/997-semrush-data (page title "Semrush Data & Metrics") — **Documented**
- Rankings data: "we partner with third-party data providers to collect Google's search engine results pages (SERPs) for hundreds of millions of the most popular keywords. We collect information about the websites that are listed in the top 100 positions." — same — **Documented**
- "Updates can range from once a day to once a month; in some cases, updates for smaller databases can take a little longer." — same — **Documented** (relevant to India: a smaller database may be updated less often)
- No explicit "this is not exact" disclaimer was found on this page. Semrush calls its estimate "realistic and accurate". Contrast this with Ahrefs' wording in the lesson.

### Similarweb
- "Our unique mix of digital signals obtained from a variety of unique sources". Sources listed: "Website & App Owners — Data directly measured through first party analytics (e.g. Google Analytics) of millions of websites and apps. Contributors Network — Anonymous traffic data collected from Similarweb products installed on millions of devices, worldwide. Public Data … Partnerships — Rich data pre-analyzed by global partners like DPSs, ISPs, measurement companies and corporate intelligence firms". Also: "We extrapolate the tens of billions of digital signals gathered each day" — https://www.similarweb.com/corp/ourdata/ — **Documented**
- Similarweb's own accuracy articles (https://support.similarweb.com/hc/en-us/articles/360002219177 "Similarweb's Data Accuracy" and /360002329778 "Similarweb vs. Direct Measurement") returned **HTTP 403** to both curl and the fetch tool. A web-search summary said they state estimates won't match direct measurement exactly, that users should expect "trend alignment", and that Similarweb is "more confident" for sites "with over 100K monthly visits" — **(search-tool snippet, unverified)**. Do not quote these in a lesson until someone opens the page in a browser. If confirmed, the 100K line is the strongest vendor statement that **small sites like Nila Coffee are where estimates are weakest**.

### Accuracy studies (label carefully)
- Ahrefs' own study (Tim Soulo, published 2022-05-03): "In our study, we took 1,635 random websites and compared their monthly GSC traffic in the U.S. to their monthly U.S. organic traffic estimates in Ahrefs." Also: "In our studied sample of 1,635 websites, the median deviation turned out to be 49.52% ." Also: "In other words, most of the time you can expect Ahrefs to misreport a website's U.S. traffic by up to half of its value." And: "For some websites, we are off by less than 5%. For some others, we can be off by more than 1,000%." — https://ahrefs.com/blog/traffic-estimations-accuracy/ — **Observed practice** (a **vendor study of its own tool**, not independent; US-only; 2022)
- Same study: "To put our median deviation of 49.52% in perspective, we also calculated it for SEMrush, and it turned out to be 68.36%." Also: "the monthly GSC traffic in the U.S. correlated with that of Ahrefs' at 0.76 (Pearson's)". And: "As for SEMRush, theirs was 0.74 for the same set of websites." — same — **Observed practice** (competitor-run comparison; treat as contested)
- Same study cites AuthorityHacker: "In their study, Ahrefs turned out to be the winner (with an average discrepancy of 22.5% and 0.99 correlation with GSC data)." Also: "But that study was done on a small sample of just 50 websites." — same — **Observed practice** (second-hand; original not opened)
- SparkToro's comparison study (https://sparktoro.com/blog/which-3rd-party-traffic-estimate-best-matches-google-analytics/) returned a bot-check page (HTTP 403). **Not verified.** See Not found.
- **Takeaway for the lesson:** even the most favourable vendor-run study says a typical estimate is off by about half, and some are off by more than 10×. Use estimates for **rough "bigger or smaller than us"** comparisons only. Never write "Competitor X gets 12,400 visits a month" as a fact. Write "Ahrefs estimates ~12k organic visits/month (estimate, checked <date>)".

---

## 3. Google operators for competitor checks

- `site:`: "A site: query is a search operator that allows you to request search results from the particular domain, URL, or URL prefix specified in the operator." — https://developers.google.com/search/docs/monitor-debug/search-operators/all-search-site (last updated 2025-12-10) — **Documented**
- "site:example.com Returns a list of indexed and serving URLs. The list of URLs returned is not always exhaustive. Bigger sites shouldn't expect to see all their URLs in the results. A more specific prefix in the query may yield more results than broader prefixes." — same — **Documented**
- "site:https://example.com/ lemon Shows which URLs on the site can show up for the term "lemon"." — same — **Documented** (useful M10 pattern: `site:rivalroaster.example cold brew` to see a competitor's pages on a topic)
- "The site: operator doesn't necessarily return all the URLs that are indexed under the prefix specified in the query." — same — **Documented**. Lesson rule: a `site:` count is a rough sample, never a page count (matches M01.L05 "roughly how many pages").
- "Because search operators are bound by indexing and retrieval limits, the URL Inspection tool in Search Console is more reliable for debugging purposes." — https://developers.google.com/search/docs/monitor-debug/search-operators (last updated 2025-12-10) — **Documented** (URL Inspection works on your own site only)
- Search Help lists popular operators. It says: "Do not put spaces between the operator and your search term. A search for [ site:nytimes.com ] will work, but [ site: nytimes.com ] won't." — https://support.google.com/websearch/answer/2466433 — **Documented**
- **`related:` retired:** "July 18 : Removed the related: operator from the search operators documentation , as it's no longer supported." (July 2023) — https://developers.google.com/search/updates — **Documented**
- **`cache:` retired:** "Removing the cache: search operator documentation What : Removed the cache: search operator documentation. Why : The cache: search operator no longer works in Google Search." (September 24, 2024) — https://developers.google.com/search/updates — **Documented**
- Cached link: "Why : The cached link feature is no longer available in Google Search results." (October 2, 2024, noarchive entry) — same — **Documented**
- Danny Sullivan (Google Search Liaison), X, February 1, 2024 (quoted on SER): "Yes, it's been removed. I know, it's sad. I'm sad too. It's one of our oldest features. But it was meant for helping people access pages when way back, you often couldn't depend on a page loading. These days, things have greatly improved. So, it was decided to retire it." Also: "You're going to see cache: go away in the near future, too." — https://www.seroundtable.com/google-search-drops-cache-link-from-search-results-36787.html (article 2024-01-25, update quoting the 2024-02-01 post) — **Google public comment**
- **`info:`**: no Google announcement of retirement was found in the Search Central updates log, and it is not in the current operators docs. — see Not found. Lesson: don't teach `info:`.
- **Replacement for `cache:`** in M10: use the Wayback Machine (section 1) for "what did the competitor's page look like before?".
- Not for operators: Google's spam policy forbids automated rank scraping. "Machine-generated traffic (also called automated traffic ) refers to the practice of sending automated queries to Google. This includes scraping results for rank-checking purposes or other types of automated access to Google Search conducted without express permission." — https://developers.google.com/search/docs/essentials/spam-policies (last updated 2026-08-28) — **Documented**. Lesson: do SERP checks by hand, in a private window. Don't use scripts that scrape Google.

---

## 4. Copying and scraping: what learners must not do

- Scraping policy: "Scraping refers to the practice of taking content from other sites, often through automated means, and hosting it with the purpose of manipulating search rankings. Examples of abusive scraping include: Republishing content from other sites without adding any original content or value, or even citing the original source Copying content from other sites, modify it only slightly (for example, by substituting synonyms or using automated techniques ), and republish it Reproducing content feeds from other sites without providing some type of unique benefit to the user Creating sites dedicated to embedding or compiling content, such as videos, images, or other media from other sites, without substantial added value to the user" — https://developers.google.com/search/docs/essentials/spam-policies (last updated 2026-08-28) — **Documented**
- Scaled content abuse examples include: "Scraping feeds, search results, or other content to generate many pages (including through automated transformations like synonymizing, translating, or other obfuscation techniques), where little value is provided to users" and "Stitching or combining content from different web pages without adding value" — same — **Documented** (relevant to "rewrite the top 3 results with AI")
- Legal removals: "When we receive a significant volume of valid copyright removal requests involving a given site, we are able to use that to demote other content from the site in our results." — same — **Documented**
- "It is Google's policy to comply with notices of copyright infringement pursuant to the Digital Millennium Copyright Act." — https://support.google.com/legal/answer/3110420 ("Report Content for Legal Reasons") — **Documented**
- Same page: "Note: We can restrict access to content that appears in Google products and services, but that content may still exist elsewhere on the web. This is why you may wish to contact the website owner and ask them to remove the content." — **Documented** (useful flip side: what Nila can do if a rival copies *its* brew guide)
- Helpful content self-check: "If the content draws on other sources, does it avoid simply copying or rewriting those sources, and instead provide substantial additional value and originality?" — https://developers.google.com/search/docs/fundamentals/creating-helpful-content (last updated 2026-10-05) — **Documented**
- Same: "Does the content provide substantial value when compared to other pages in search results?" (already quoted in M03.L04; reuse) — **Documented**
- Same, rater attributes: "Effort: … Conversely, automatically generating pages from feeds or using generative AI to produce large amounts of text without manual oversight or curation represents little to no effort. Attribution or giving credit to other sources doesn't replace the need for original effort." Also: "Originality: The extent to which the content offers unique, original information or perspectives that aren't already available on other websites." — same — **Documented**. **Key ethics line for the lesson:** crediting the competitor does not make copying OK.
- Moz framing (vendor guide, 2024-03-04): "Smart competitor analysis isn't about copying — it's about learning patterns of success so you can create something better." — https://moz.com/seo-competitor-analysis — **Observed practice**
- Copyright law itself (India's Copyright Act, US DMCA details) was not researched from primary legal sources. Keep the lesson to "don't copy text, photos or product descriptions; it can break copyright law and Google's policies". Add a "not legal advice" note.

---

## 5. Content gap analysis method with free tools

- Definition (Ahrefs blog, Despina Gavoyannis, 2023-11-23): "A content gap analysis is the process of finding topics your competitors have covered but you haven't." — https://ahrefs.com/blog/content-gap-analysis/ — **Observed practice**
- Ahrefs' method relies on a paid tool: "navigate to the Competitive Analysis tool in Ahrefs and check it's set to "keywords."" — same — **Observed practice**. **Conflict with free-only:** adapt the method to free inputs (below).
- Moz's 5-step guide (2024-03-04): "1. Identify your SEO competitors … 2. Run a keyword gap analysis … 3. Evaluate the SERP for user intent … 4. Analyze your competitors' content and improve upon it … 5. Perform a competitor backlink analysis" — https://moz.com/seo-competitor-analysis — **Observed practice**. This order maps well onto the M10 topic order.
- Keyword gap (Moz): "A keyword gap analysis can help you discover opportunities to improve your visibility by targeting keywords that competitors are ranking for, but your website is not." — same — **Observed practice**
- Free inputs, all Documented above:
  - **Your side (real data):** Search Console Performance report: "Learn which queries are bringing traffic to your site". The table can be grouped by "Queries" and exported ("Many reports provide an export button to download both the chart and table data"). — https://support.google.com/webmasters/answer/7576553 — **Documented**
  - **Competitor side (estimates or samples):** `site:competitor.example <topic>` (Documented sample); Keyword Planner "Start with a website" on the competitor's URL (Documented; Google's keyword ideas, not the rival's rankings); Ahrefs free Keyword Generator "Also rank for" report, described as "Keywords that the top-ranking pages also rank for" (Documented); Semrush free 10/day; Moz free competitive research.
- **Method sketch (Observed practice, course rule of thumb):** list the topics or queries each of 3 competitors covers (from `site:` + their nav/sitemap + free tools). List your Search Console queries and pages. Mark the topics they cover and you don't (gap), the ones you both cover where they outrank you (weak), and the ones only you cover (strength). Then check each gap against intent (M03.L01) and score it (M03.L04).
- Caveat to teach: a "gap" isn't automatically worth filling. It must fit Nila's audience and business (Value), and the SERP must be beatable (Chance).

---

## 6. On-page and technical comparison with free tools

### PageSpeed Insights / CrUX on competitor URLs
- "Real-user experience data in PSI is powered by the Chrome User Experience Report (CrUX) dataset. PSI reports real users' First Contentful Paint (FCP), Interaction to Next Paint (INP), Largest Contentful Paint (LCP), and Cumulative Layout Shift (CLS) experiences over the previous 28-day collection period." — https://developers.google.com/speed/docs/insights/v5/about (last updated 2024-10-21) — **Documented**
- "In order to show user experience data for a given page, there must be sufficient data for it to be included in the CrUX dataset. A page might not have sufficient data if it has been recently published or has too few samples from real users. When this happens, PSI will fall back to origin-level granularity, which encompasses all user experiences on all pages of the website. Sometimes the origin may also have insufficient data, in which case PSI will be unable to show any real-user experience data." — same — **Documented**
- CrUX eligibility: "A page must be publicly discoverable to be considered for inclusion in the CrUX dataset." Also: "A page is determined to be sufficiently popular if it has a minimum number of visitors. An origin is determined to be sufficiently popular if it has a minimum number of visitors across all of its pages. An exact number is not disclosed". And: "Pages and origins that don't meet the popularity threshold are not included in the CrUX dataset." — https://developer.chrome.com/docs/crux/methodology (last updated 2024-06-20) — **Documented**
- Discoverability exclusions: "The page is served with an HTTP status code other than 200 (after redirects)." / "The document includes a <meta name="robots" content="noindex"> meta tag or equivalent." — same — **Documented**
- **Teaching point:** small competitors (and Nila itself) may show no field data. Then compare **lab** data only, and say it's lab. Don't compare Nila's lab score against a big brand's field data.

### Rich Results Test on competitor URLs
- "For a URL Submit the full URL of the page to test." Also: "Important: All page resources must be accessible by an anonymous user accessing the code from the internet." — https://support.google.com/webmasters/answer/7445569 — **Documented**
- "If Google is prevented from crawling the page as part of its regular crawl cycle (for example, is prevented from crawling by a robots.txt rule or noindex directive), the page cannot be tested with this tool." — same — **Documented**
- "The test shows which rich result types were found on the page, as well as any errors or suggestions for your structured data." — same — **Documented**. Use: see whether a rival's product pages have Product/review markup that Nila lacks (link back to M04/M06 structured data).
- Code mode: "You can test an arbitrary code snippet using this tool." — same — **Documented**

### View-source checks
- No dedicated Google doc was fetched. Viewing source (`view-source:` in Chrome, or Ctrl+U) to read `<title>`, meta description, `<h1>`, canonical and JSON-LD is **Observed practice**. M02 already taught HTML, so reuse its terms.

### Screaming Frog free crawl of a competitor
- "The Screaming Frog SEO Spider is free, however you can purchase a licence to crawl more than 500 URLs and have access to advanced features." Free column: "Crawl Limit - 500 URLs" — https://www.screamingfrog.co.uk/seo-spider/pricing/ — **Documented**
- "By default the SEO Spider will obey robots.txt protocol and is set to 'Respect robots.txt'. This means the SEO Spider will not be able to crawl a site if its disallowed via robots.txt." — https://www.screamingfrog.co.uk/seo-spider/user-guide/configuration/ — **Documented**
- "The 'Ignore robots.txt' option allows you to ignore this protocol, which is down to the responsibility of the user." — same — **Documented**. **Ethics rule for the lesson:** never switch to Ignore robots.txt on a site you don't own.
- "We recommend approving a crawl rate and time with the webmaster first, monitoring response times and adjusting the default speed if there are any issues." Also: "By default the SEO Spider is set at 5 simultaneous requests known as 'threads', without a limit for crawl speed per second. However, the auto throttle setting automatically slows requests to a host pushing back with 429s, 503s or if they are dropping connections." — same — **Documented**
- Free version speed control: "If the 403 response occurs intermittently during a crawl, it could be due to the speed the SEO Spider is requesting pages, which is overwhelming the server. In the paid version of the SEO Spider you can reduce the speed of requests." — https://www.screamingfrog.co.uk/seo-spider/faq/ — **Documented**. **Teaching point:** the free version can't slow down below the default. That's a reason to crawl a competitor only lightly (a small list or one section), or not at all.
- Website terms of service: not researched per site. Tell learners to check a site's terms. Many forbid automated access.

---

## 7. Search competitors vs business competitors

- Moz guide (2024-03-04): "Who are your competitors? You may think you know, or you may have been operating under assumption, but they're not necessarily brands selling the same products or services as you!" — https://moz.com/seo-competitor-analysis — **Observed practice**
- Moz guide definition: "An SEO competitor analysis (sometimes referred to as competitive analysis) is the process of researching your direct search competitors to understand their target keywords, content strategy, backlink profile, and more" — same — **Observed practice**
- Dr. Peter J. Meyers, Moz blog "When Your SEO Competitors Don't Match What You Know" (2022-06-30): "As a business with physical locations, your competitors with physical locations are absolutely important, but from a search perspective, they may not represent who you're actually competing with online." — https://moz.com/blog/competitors-dont-match — **Observed practice**
- Same: "While DoorDash, Grubhub, and Uber Eats don't have traditional, physical locations, these are the places where McDonald's online customers go to order, and they represent a significant amount of organic SERP real estate." — **Observed practice**
- Same (Ford): "These are Ford's #1, #2, and #5 competitors, and they aren't automakers — they're automotive content producers." — **Observed practice** (direct parallel: Nila's brew-guide blog competes with food/recipe publishers)
- Same, limits: "SERP analysis doesn't always reflect the brick-and-mortar world. From an SEO perspective, that's fine (if they're not ranking, we're not competing with them for search share)". Also: "our SERP-based analysis is based on national results and does not reflect regional or hyperlocal competition." — **Observed practice** (Indian learners: tools' "India" database is national; local results differ)
- Same: "If the results don't match what you expect, that mismatch represents opportunity." — **Observed practice**
- Moz True Competitor (paid): "Explore a thorough list of your true market competitors based on the SERPs where your site is ranking." — https://moz.com/competitive-research — **Documented** (product description)
- No Google definition of "search competitor" exists (see Not found). Keep M01.L05's course definition.

---

## 8. Prioritisation frameworks

- ICE (ProductPlan glossary): "The ICE Scoring Model helps prioritize features and ideas by multiplying three numerical values assigned to each project: Impact, Confidence and Ease. Each item being evaluated gets a ranking from one to ten for each of the three values, those three numbers are multiplied, and the product is that item's ICE Score." — https://www.productplan.com/glossary/ice-scoring-model — **Observed practice**
- "Impact looks at how much the project will move the needle on the key metric being targeted. Confidence is the certainty that the project will actually have the predicted Impact. Ease looks at the level of effort to complete the project." — same — **Observed practice**
- Origin: "The fact that ICE is so speedy is in no small part due to the person who created it, Sean Ellis." — same — **Observed practice** (attribution is common but second-hand; a web-search summary showed one source crediting McKinsey; treat the origin as **contested**, and don't state it as fact)
- Weakness: "Solely relying on ICE scores could lead a team to keep going for "low hanging fruit" instead of making a larger investment in a project that could make a much bigger difference in the long run." — same — **Observed practice** (mirrors M03.L04's "choose a mix" of quick wins and stretch targets)
- Consistency: "It's also important to have a consistent definition of the 1-10 scale for ranking each of the ICE elements." — same — **Observed practice** (M03.L04 already gives written 1/2/3 definitions)
- RICE: "it uses Reach * Impact * Confidence / Effort for the formula" — same — **Observed practice**
- Impact × effort matrix: no reputable primary source was fetched. Describe it as common practice only.
- **Tie-back (course rule of thumb):** Value ≈ Impact, Chance ≈ Confidence, Effort ≈ inverse of Ease. M03.L04 **adds** (total /9) where ICE **multiplies**. Recommend keeping the M03.L04 score for the M10 capstone's 10 opportunities, so learners use one system. Add an "Evidence" column (what competitor finding supports this?) and a "Source/date" column, because the evidence is often an estimate.

---

## 9. Backlink gap with free tools

- Moz Link Explorer free data includes "Competitor backlinks you're missing out on" within "10 free queries per month". — https://moz.com/link-explorer — **Documented**. Budget: 3 competitors + Nila = 4 queries. Learners must plan their queries.
- Ahrefs free Backlink Checker: works on any site and shows DR, referring domains and a backlink list, with a "free version" cap that isn't stated publicly — https://ahrefs.com/backlink-checker — **Documented** (cap: see Not found; third-party sources say top 100)
- Ahrefs Free on **your own** verified site: "Site Explorer 1 K backlinks & keywords visible at once" — **Documented**. So Nila's side of the gap can come from Ahrefs Free (verified) plus Search Console Links report (M09). The competitors' side comes from the free checkers.
- Semrush free: "With a free plan, you can run up to 10 searches per day. This lets you analyze your own backlink profile or peek into your competitors' link building strategies." — https://www.semrush.com/blog/what-can-i-do-with-a-free-account-from-semrush/ — **Documented** (vendor blog)
- Each vendor uses its own crawler and index (Ahrefs: "Our backlink index is updated with fresh data every 15 minutes"; Semrush: "Our backlink data comes from our own proprietary backlink crawler"). Counts **will differ between tools** — **Documented** (each claim is the vendor's own).
- Tie to M09: a backlink gap shows *where* competitors earned links (directories, press, roundups, suppliers). It is not a list to copy or buy. Link spam rules from M09 apply.

---

## 10. AI tools for competitor summaries: risks

- Google Gemini Apps Privacy Hub: "LLM experiences (Gemini Apps included) can hallucinate and present inaccurate information as factual." Also: "Gemini Apps are continuously evolving and may produce inaccurate or offensive information (including about people) that doesn't represent Google's views." — https://support.google.com/gemini/answer/13594961 — **Documented**
- OpenAI "Does ChatGPT tell the truth?" (https://help.openai.com/en/articles/8313428-does-chatgpt-tell-the-truth) returned **HTTP 403**. **Not verified**, so don't quote it.
- Risk to teach (**Observed practice**, course rule): if you ask an AI chatbot "how much traffic does rivalroaster.in get?", it may give a confident number that no tool produced. Only paste in data you collected yourself (as M03.L04's AI prompt does: "Use only my notes"). Ask it to summarise or spot patterns, never to supply metrics. Tie to Google's "using generative AI to produce large amounts of text without manual oversight … represents little to no effort" (section 4) for the "AI rewrites the competitor's page" trap.

---

## Freshness flags

- **Ahrefs Webmaster Tools → "Ahrefs Free"** rename (2026). Older tutorials and screenshots say AWT. Use the new name, with "(formerly Ahrefs Webmaster Tools)". Limits checked 2026-11-08.
- **Semrush free limits** changed wording: the KB says "10 reports per day across all vital tools", while the blog (Dec 2025) gives per-tool "10 queries/day". Re-check before publishing.
- **Moz**: "10 free queries per month" (Link Explorer page, 2026-11-08). A web-search summary mentioned a 2026 review claiming "per day". Re-check.
- **Ubersuggest** free limit not published officially. Expect it to change.
- **Google operators:** `related:` removed July 2023; `cache:` removed September 2024; Wayback link in "About this page" added September 2024. Re-check the Wayback link still exists.
- **Keyword Planner** requires billing info for keyword ideas (current help page). This changes from time to time.
- **CrUX methodology** last updated 2024-06-20; **PSI about** 2024-10-21. INP is the current responsiveness metric.
- **Spam policies** last updated 2026-08-28; **helpful content** page 2026-10-05.
- AI/LLM disclaimers change often. Gemini wording checked 2026-11-08.
- Third-party traffic estimates and accuracy studies age fast. The Ahrefs study is from 2022 (US only).

## Conflicts between sources

- **Semrush free limit:** KB = "10 reports per day across all vital tools" (pooled) vs blog table = "10 queries/day" per tool (Domain Overview, Keyword Research, Competitor Research, Backlinks). The KB is the product documentation and is the more conservative reading. Teach "about 10 reports a day in total; plan them".
- **Ahrefs vs Semrush on estimates:** Ahrefs says its estimates "can't, show you exactly". Semrush calls its estimate "realistic and accurate". Ahrefs' own study puts Semrush's median deviation (68.36%) above Ahrefs' (49.52%). A vendor measuring a rival is not neutral.
- **Ahrefs on its own estimates:** "work incredibly well for comparison" vs the study's "can be off by more than 1,000%" for some sites. Both are Ahrefs. The lesson can show the tension directly.
- **Ahrefs content-gap method** uses a paid tool, which clashes with the course's free-only rule. Adapt it with Search Console, `site:` and free tools.
- **ICE origin:** commonly credited to Sean Ellis (ProductPlan). A web-search summary also showed a McKinsey attribution. Contested; don't teach the origin as fact.
- **Ahrefs free Backlink Checker cap:** third-party sources say "top 100". The official page states no number. Separately, some say no account is needed and others say an account is required.

## Not found

- **Official statement of the Ahrefs free Backlink Checker cap** ("top 100 backlinks") and of any daily check limit. Not on https://ahrefs.com/backlink-checker (static HTML searched). Confirm by running one check in a browser and record what the results screen says.
- **Ahrefs free Keyword Generator and Traffic Checker numeric caps:** not on the official pages.
- **Ubersuggest free daily limit:** not on the official pricing page. https://neilpatel.com/ubersuggest/ returned 403.
- **Moz Domain Analysis free limit:** https://moz.com/domain-analysis returned 403.
- **Similarweb accuracy support articles** (360002219177, 360002329778): 403 to curl and the fetch tool. Statements known only from a web-search summary.
- **Bing Webmaster Tools Keyword Research official help page:** old URLs return 404, and a search found only third-party guides. Whether it needs a verified site, and its current filters, are unconfirmed.
- **`info:` operator:** no Google retirement announcement found in the Search Central updates log, and it's absent from current docs. Don't teach it.
- **OpenAI accuracy help page:** 403.
- **SparkToro / AuthorityHacker independent accuracy studies:** not opened (bot check / not fetched). Only the Ahrefs-run study was read.
- **Any Google definition of "search competitor"** or any Google guidance on competitor analysis. Google doesn't publish one. Keep the course definition and label it.
- **Impact × effort matrix** from a reputable primary source: not fetched.
- **Primary copyright law sources** (Indian Copyright Act, US DMCA text): not researched.
- **Web search hit a rate limit** on 2026-11-08 partway through, so some secondary checks (Moz per-day claim, Bing docs) were not repeated.

## Suggested lesson split (5 lessons, in topic order)

1. **M10.L01 — Who are your real search competitors?** Search vs business competitors (deepens M01.L05). Pick 3 search competitors per topic cluster. Rule out unrealistic giants (link to M03.L04 Chance). Free tools: private-window SERPs, Moz free competitive research, `site:`.
2. **M10.L02 — Reading the SERP and the pages that win.** Page types, formats and features per query (deepens M03.L01). On-page comparison via view-source, the Rich Results Test, PSI lab vs field (CrUX eligibility), and the Wayback Machine for history. Ethics of a light, robots-respecting Screaming Frog crawl (500 URLs).
3. **M10.L03 — Keyword and content gaps with free tools.** Search Console queries (yours, real) vs competitor topics (`site:`, Keyword Planner "Start with a website", Ahrefs Keyword Generator, Semrush free 10/day). Treat estimates as estimates. Learn from them; don't copy (spam policy, helpful-content originality, copyright basics).
4. **M10.L04 — Backlink gap.** Moz Link Explorer (10 queries/month: budget them), Ahrefs free checker, Ahrefs Free for your own site. Why counts differ between tools. What a gap can and can't tell you (links to M09; no buying).
5. **M10.L05 — Turning findings into priorities.** Reuse Value/Chance/Effort with Evidence and Source/date columns. Compare it with ICE and impact × effort. Write findings as hedged statements. AI summary risks. Capstone: 3 competitors and 10 prioritised opportunities.

## Break-it lab ideas

**Planted report: "Nila Coffee competitor analysis" (draft by an intern). Learners find and correct each error.**

1. *"Our main competitor for 'how to make cold brew' is BigRoaster India, the biggest coffee brand."* → Wrong competitor type. The SERP shows food blogs and YouTube (M01.L05; Moz "they aren't automakers — they're automotive content producers"). BigRoaster is a business competitor, not the search competitor here.
2. *"Reddit's r/IndianCoffee ranks #2 for 'best coffee beans india', so we should copy its format and build a forum."* → Comparing a forum to a shop. The forum ranks for discussion intent, and Nila can't serve that page type as a shop. The right move is to match intent with a buying guide or review-style page, or to accept that Chance is low.
3. *"RivalRoaster gets 48,213 visits a month (Ahrefs), so their blog strategy works."* → An estimate stated as fact, with false precision. Quote Ahrefs: "can't be treated as the actual search traffic data of a website". Rewrite as "Ahrefs estimates roughly 50k (estimate, checked <date>); likely off by a wide margin for small sites".
4. *"ChatGPT says RivalRoaster's DA is 54 and they get 30% of traffic from Instagram."* → Made-up metrics from AI. Gemini docs: "can hallucinate and present inaccurate information as factual". Only use numbers taken from a tool, with source and date.
5. *"Opportunity #1: copy RivalRoaster's French press guide, change the wording with a paraphraser and add our product links."* → Scraping/spam. Quote the policy: "Copying content from other sites, modify it only slightly (for example, by substituting synonyms…)". Also copyright risk. Fix: write from Nila's own brewing tests, photos and ratios (originality).
6. *"`site:rivalroaster.in` shows 312 results, so they have exactly 312 pages."* → `site:` is a sample: "The list of URLs returned is not always exhaustive."
7. *"Use `cache:rivalroaster.in` to see their old homepage and `related:` to find more competitors."* → Both retired (2024 / 2023). Use the Wayback Machine, and SERPs or Moz free competitive research instead.
8. *"RivalRoaster has better Core Web Vitals: PSI field data 'Good' vs our lab score 62."* → Field vs lab mismatch. Compare like with like, and note when CrUX has insufficient data.
9. *"I crawled their whole site with Screaming Frog set to Ignore robots.txt."* → Ethics breach. Respect robots.txt ("down to the responsibility of the user"), keep crawls small, and check site terms.
10. *"Priority list: 1) outrank Amazon for 'coffee'…"* → Unrealistic target (M03.L04 Chance = 1, Value low for a broad term). Re-score.
11. *"Competitor X has 1,200 backlinks (Moz) but Ahrefs says 3,400, so one tool is broken."* → Different indexes give different counts. Compare within one tool only.

## Hands-on ideas (free only)

- **Competitor finder:** for 5 Nila queries (2 shop, 2 blog, 1 local), record the top 5 results in a private window. Label each as business competitor, search-only competitor, or giant. Pick 3 realistic search competitors.
- **`site:` + topic sweep:** `site:competitor.example cold brew`, `… french press`, `… filter coffee`. Build a topic list per competitor (a sample, not a count).
- **Gap sheet:** columns Topic | Nila (Search Console query/page) | Comp A | Comp B | Comp C | Gap type (missing/weak/strength) | Intent | Value | Chance | Effort | Total | Evidence | Source + date.
- **Query budgeting:** plan 4 Moz Link Explorer queries (of 10/month) and up to 10 Semrush reports/day. Write down which domain each query is for before you start.
- **Page teardown:** for one competitor page that outranks Nila, check `<title>`, `<h1>`, headings, schema (Rich Results Test), images, PSI lab plus field (if any), and the Wayback snapshot from a year ago (what changed?).
- **Estimate reality check (Path A/C):** compare Nila's real Search Console clicks with the Ahrefs free traffic checker estimate for Nila. That shows learners how far off the estimate is for *their* site before they trust one for a competitor.
- **Keyword Planner "Start with a website"** on a competitor's category page, if the learner has a Google Ads account with billing set up. Otherwise use the Ahrefs Keyword Generator "Also rank for" report.
- **Trends brand check:** compare "nila coffee" with two competitor brand names in India. Discuss why small brands show "0".
- **Capstone:** 3 search competitors and 10 opportunities scored with Value/Chance/Effort, each with evidence and a dated source, plus one "we won't do this" item explaining an ethical or unrealistic rejection.
