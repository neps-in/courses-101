# Research: M08 Analytics, Tracking & Reporting (GSC, GA4, GTM, Data Studio / Looker Studio)

**Researched:** 2026-11-08 (finished 2026-11-09)
**Scope:** M08 (L2, practitioner). Search Console in depth, GA4 in depth, Consent Mode basics, Google Tag Manager basics, why GSC and GA4 differ, a Data Studio (formerly Looker Studio) SEO dashboard with annotations, KPIs and an honest monthly report, Bing Webmaster Tools equivalents, and DevTools / Tag Assistant checks for a duplicated tag or wrong measurement ID. Running example: Nila Coffee (WordPress shop + blog).

**Builds on (don't repeat):**
- `seo-101/lessons/m01-l08-practice-gsc-ga4-setup.md` already teaches: Domain vs URL-prefix property, DNS TXT verification, sitemap submit, Bing import, GA4 property + web stream + Measurement ID, retention set to 14 months, Site Kit / Blogger / hand-coded install, "install once", Realtime check, privacy disclosure, linking GSC to GA4 (**Admin → Product links → Search Console Links**) and publishing the Search Console collection from **Library**. M01.L08 says "Cookie consent ... you'll set that up in Module 8."
- `seo-101/research/m03-l05-keyword-maps-cannibalisation.md` §3 already covers the Performance report: menu path, dimension tabs, search type filter (incl. "Web: text-based / multimodal"), + Add filter, regex (RE2, partial match, `(?-i)`), Compare (one comparison at a time; Difference column), property vs page aggregation, canonical attribution, anonymised queries, data truncation, 1,000-row UI export, preliminary data, PT time zone, 16 months. **Reference it; this file adds only what is new.**

**Method:** pages downloaded raw with curl into the scratchpad, converted to text with a local script, and quotes matched against that text. No quote below came through a summarising fetch tool unless marked **(fetch-tool extract)**; none are. Two web *searches* were used only to discover URLs, and every fact taken from them was then checked against a downloaded page. Google Help Center pages show no "last updated" date in the raw HTML; developer docs and Cloud docs do, and those dates are noted. **All UI labels and menu paths are from help docs, not tested live.**

---

## 1. Search Console: the current report list, new 2025–26 features, Links, Crawl stats

### 1.1 Official report list ("All reports and tools", 21 items)
Source: Search Console Help sidebar on every report page, e.g. https://support.google.com/webmasters/answer/9049606 (topic https://support.google.com/webmasters/topic/9456557). **Documented**

The current order and names are: "Reports at a glance", "Search Console's overview page", "Insights report", "URL Inspection tool", "Performance reports", "Page indexing report", "Video indexing report", "Sitemaps report", "Removals and SafeSearch reports tool", "Core Web Vitals report", "HTTPS report", "AMP tools and reports", "Rich results tools and reports", "Manual actions report", "Security issues report", "Links report", "Achievements in Search Console", "Property and user settings", "Change of Address tool", "Recommendations in Search Console", "Search Console annotations".

- The Performance reports topic lists: "Performance report (Search)", "Performance report (Discover)", "Performance report (Google News)", "Generative AI performance report (Search)", "Generative AI performance report (Discover)", "Search Console annotations". https://support.google.com/webmasters/topic/9384513 **Documented**
- Settings topic lists, among others: "Associations", "Search generative AI control", "Shipping and return settings", "robots.txt report", "Crawl Stats report". https://support.google.com/webmasters/topic/9456376 **Documented**
- **"Experience" heading:** no Help page in the current list uses "Experience" as a group name. Core Web Vitals and HTTPS appear as separate reports. Whether the left-hand navigation still groups them under "Experience" is **not confirmed in docs**.
- **"Enhancements":** the Help list uses "Rich results tools and reports" and "AMP tools and reports", not "Enhancements". The Overview help mentions "summaries of error/valid enhancements for your site (AMP pages, structured data found on your site)". https://support.google.com/webmasters/answer/9133276 **Documented**. The left-nav label is **not confirmed in docs**.

### 1.2 One-line descriptions from "Reports at a glance"
URL: https://support.google.com/webmasters/answer/9133276. **Documented**
- Overview: "Shows a summary of your property's health, including any manual actions or security issues applied to your site, graphs of total clicks and error/valid indexed pages, and summaries of error/valid enhancements for your site". Suggested use: "If only checking in periodically, check for manual actions or security issues."
- Insights: "A simple overview of your site's performance. The report summarizes key metrics like clicks and impressions, and highlights your top and trending content, search queries, countries, and traffic sources from Google Web Search results and other Google properties."
- Performance: "‡ Available only if your property has sufficient traffic on Discover or News" (applies to the Discover and News reports).
- URL Inspection: "See the information that the Google index has about a specific URL on your site, or test a live page."
- Page indexing: "Shows index status for all the pages in your site."
- Video indexing: "This report is generated for sites with video pages (any page containing a video)."
- Removals: "Allows you to temporarily block URLs on your site from appearing in Google Search, or to clear the search snippet until the next document crawl."
- Core Web Vitals: "Shows how your page performs in real-world usage."
- Manual actions: "Shows any manual actions against your site."
- Security issues: "Shows any security issues detected by Google on your site."
- Links: "Shows which sites link to yours, what the link text is, and internal link targets within your own site."
- Achievements: "Achievements are like milestones for your site, such as reaching your first 1,000 clicks."
- Settings items, quoted: "Associations ... Manage your property associations to enable data sharing and more between your property and Google Analytics, YouTube channels, Android apps, and other Google services." / "Bulk data export ... Export your Search Console performance data to Google BigQuery." / "Crawl stats ... This report is available only for domain-level properties (example.com, m.example.com, http://example.com) not for URL-prefix properties (example.com/somepath/)." (See the Conflicts section on Crawl stats availability.)
- Overview page: "The Performance chart includes data from both Search and Discover (if you have any data for each)." https://support.google.com/webmasters/answer/7451491 **Documented**
- HTTPS: "The HTTPS report shows how many indexed URLs on your site are HTTP vs HTTPS. The report isn't a comprehensive list of all detected items. It shows a sample of items" and "This report is available only for Domain properties and HTTPS URL-prefix properties." https://support.google.com/webmasters/answer/11396518 **Documented**
- Core Web Vitals: "The Core Web Vitals report shows how your pages perform, based on real world usage data (sometimes called field data)." and "there is not enough data available in the CrUX report to provide meaningful information for the chosen device type". https://support.google.com/webmasters/answer/9205520 **Documented**

### 1.3 Shopping (relevant to Nila Coffee's shop)
URL: https://support.google.com/webmasters/answer/12660034 ("Shopping reports and tools"). **Documented**
- "If your website has been identified by Google as an online merchant, you may see the following tools and reports ... A report titled Merchant opportunities under Shopping." and "A setting titled Shipping and returns under Settings > Shopping (if you’ve associated a Merchant Center account with your Search Console property)".
- The Shopping reports are "Product snippet rich report", "Merchant listing rich report" and "Merchant opportunities".
- Definition: "An online merchant is a site that sells physical goods or services directly to consumers (not to other businesses) on that site."
- Shipping and returns: "Add a simplified version of your site’s shipping and return details right from Search Console under Settings > Shopping > Shipping and returns." https://support.google.com/webmasters/answer/14907594 **Documented**

### 1.4 New in 2025–26 (all dated, all from the Search Central blog or Help)
| Feature | Date | Quote | URL | Label |
|---|---|---|---|---|
| Insights report moves into Search Console | Mon 30 Jun 2025 | "the new version of Search Console Insights, integrated directly into the main Search Console interface, replacing the current standalone beta experience." | https://developers.google.com/search/blog/2025/06/search-console-insights | Documented |
| Query groups (Insights) | Mon 27 Oct 2025 | "Query groups solve this problem by grouping similar queries ... The groups are computed using AI; they may evolve and change over time. They are designed for providing a better high level perspective of your queries and don't affect ranking." | https://developers.google.com/search/blog/2025/10/search-console-query-groups | Documented |
| Custom annotations | Mon 17 Nov 2025 | "You can right-click on your performance chart, select "Add annotation," and write down your note (up to 120 characters) along with a specific date." | https://developers.google.com/search/blog/2025/11/custom-chart-annotations | Documented |
| Branded queries filter | Thu 20 Nov 2025; "Update on March 11, 2026: The branded queries filter is now available to all eligible sites." | "It is determined by an internal, AI-assisted system." / "This is only available for top level properties (and not for URL path properties such as https://example.com/path or subdomain properties such as developers.google.com)." | https://developers.google.com/search/blog/2025/11/search-console-branded-filter | Documented |
| AI-powered configuration (experimental) | Thu 4 Dec 2025 | "this feature lets you describe the analysis you want to see in natural language." / "AI can sometimes misinterpret requests. Always review the suggested filters to ensure they match your intention before analyzing the data." / "rolling out ... to a limited set of websites" | https://developers.google.com/search/blog/2025/12/ai-powered-configuration | Documented |
| Weekly and monthly views | Wed 10 Dec 2025 | "Click the drop-down that says "Daily" (the default) and select your preferred view." / "By switching to weekly or monthly granularity ... compare performance between two periods without getting distracted by day-of-the-week mismatches." | https://developers.google.com/search/blog/2025/12/weekly-monthly-views-search-console | Documented |
| Hourly data in the API | Wed 9 Apr 2025 | "while the product displays hourly data only for the past 24 hours, the API will return data for up to 10 days with an hourly breakdown." | https://developers.google.com/search/blog/2025/04/san-hourly-data | Documented |
| Generative AI performance reports | Wed 3 Jun 2026; "As of August 31, 2026, we've rolled out these insights to all websites worldwide." | "dedicated views of your impressions within generative AI features on Search, such as AI Overviews and AI Mode, as well as generative AI features in Discover." | https://developers.google.com/search/blog/2026/06/gen-ai-performance-reports | Documented |
| Platform properties (social/video) | Tue 7 Jul 2026 | "a new Search Console property type to help site owners and creators understand how their social and video posts perform on Google Search and Discover." / "Select one of the four available platforms: Instagram, TikTok, X, YouTube." | https://developers.google.com/search/blog/2026/07/search-console-social-video-platforms | Documented |
| Web multimodal search type | Thu 24 Sep 2026 | "The data reported here includes searches with Lens, Circle to Search on Android, image uploads to Google Search, and the Chrome right-click "Search this image" feature." | https://developers.google.com/search/blog/2026/09/web-multimodal-in-sc | Documented |
| Search generative AI control (setting) | Help: "As of August 31, 2026, we’ve rolled out this control to all websites worldwide." | "See and manage the Search generative AI control for your property under Settings > Search generative AI in Search Console." | https://support.google.com/webmasters/answer/16908024 | Documented |

**Annotations, Help details** (https://support.google.com/webmasters/answer/16530728). **Documented**
- "There are two types of annotations: System annotations: Automatically generated by Search Console to show issues with data processing and reporting. Custom annotations: Notes you create yourself".
- "You'll see them regardless of what filters you apply, but they won't show up in comparison mode or 24-hour views."
- "You can have up to 200 annotations on a single property." / "Type your note in the text field (up to 120 characters)." / "Annotations older than 500 days are automatically deleted." / "Editing annotations isn’t currently available."
- "any owner or full user of the property can add, view, or delete any annotation. A restricted user will be able to view, but not to add or delete annotations."
- "avoid including personally identifiable information like names, phone numbers, or addresses in your annotations."

**Branded queries filter, Help details** (https://support.google.com/webmasters/answer/17011259). **Documented**
- "The branded and non-branded queries filter allows you to easily separate data based on whether or not the search term included your brand name."
- "Data history: The filter provides a 16-month history of data, starting from when it was first introduced in March 2025."
- "Some queries might be incorrectly identified as branded or non-branded."
- Insights card: "Query classification is powered by AI and may mislabel branded and non-branded queries." and "This filter isn’t available for sub-properties (for example, https://example.com/blog/) or for sites with a low number of impressions." https://support.google.com/webmasters/answer/16308503

**Generative AI performance report (Search)** (https://support.google.com/webmasters/answer/16984139). **Documented**
- Covers: "AI Overviews" and "AI Mode". "Search Console doesn't include data from experiments in Search Labs".
- Metric is impressions only: "The default view of the report shows impression data for your site in the supported features."
- Tabs: "Pages", "Countries", "Dates", "Devices". "All dates are in Pacific Time Zone (PT)."
- "The generative AI performance report includes data from the Web search type in the Performance report (Search results)." Blog: "This data is included in the overall performance report".
- "Not seeing the report? This usually happens when your site hasn't received enough impressions in generative AI features on Google Search."
- The Discover version: "Not all properties have access to the report, as we're rolling out over time." https://support.google.com/webmasters/answer/16983858

**Insights report cards** (https://support.google.com/webmasters/answer/16308503). **Documented**
- The cards are: "Clicks and impressions", "Your content", "Queries leading to your site", "Top countries", "Branded and non-branded traffic", "Additional traffic sources", plus "Social channel insights (experimental)".
- "“trending up” indicates items that have seen an increase in clicks compared to the previous period ... The order of trending items is based on an increase or decrease in the number of clicks, not the percentage change."
- "The Insights report is being gradually introduced and may not be available to everyone."

**Recommendations and Achievements.** **Documented**
- "Find recommendations in the Overview section ... Recommendations are optional and you don’t have to resolve them." https://support.google.com/webmasters/answer/15107108
- Achievements: "when your site reaches 50 clicks from Google Search in 28 days for the first time, you’ll receive an email" and "Note that it wasn't designed to reflect how Google's ranking systems work." https://support.google.com/webmasters/answer/16543604

### 1.5 Links report: what it shows and its limits
URL: https://support.google.com/webmasters/answer/9049606. **Documented**
- Definition: "A backlink is a link on a page from another site that links to a page on your site."
- Sampled: "This report isn't a comprehensive list of every link on your site. It shows a sample of internal and external links to help you understand your site’s overall link profile. Some URLs might be omitted for various reasons, such as non-indexed pages or deduped URLs."
- History and nofollow: "The report includes links that Google has found over time. These links may have since been removed, or a page may no longer exist. The report doesn’t specify if a link is marked as nofollow."
- Row limits: "Tables are limited to 1,000 rows, so tables may be truncated in larger or more linked-to sites."
- Grouping: "Pages on your site are grouped by canonical URL." and "data is actually grouped by root domain in the Links report; protocol (http/https), subdomain (m., www) and subdirectories are stripped and grouped together."
- Sections (menu paths from Help): "Links report > External links > Top linked pages", "Links report > External links > Top linking sites", "Links report > External links > Top linking text", "Links report > Top internally-linked pages table".
- Spam advice: "For known spam sites, Google typically will ignore the links, but you might want to remove or disavow these links."
- Export: "Export up to 100,000 rows of data using the Export button." The slices are "Latest links" ("sorted by discovery date") and "More sample links". "Pages containing a single table offer a download button to export the entire table (up to 1,000 rows)."

### 1.6 Crawl stats: where it is and what each section means
URL: https://support.google.com/webmasters/answer/9679690. **Documented**
- Audience: "This report is aimed at advanced users. If you have a site with fewer than a thousand pages, you should not need to use this report or worry about this level of crawling detail." (Nila Coffee is small, so teach it as "know it exists; check Host status".)
- Path: "You can reach the Crawl Stats report in Search Console by clicking (Property settings) > Crawl stats."
- Availability: "This report is available only for root-level properties. That is, the property must be either a Domain property ... or a URL-prefix property at the root level".
- No canonical grouping: "All URLs shown and counted are the actual URLs requested by Google; data is not assigned to canonical URLs as is done in some other reports."
- Redirects: "each request in the redirect chain is counted as a separate request."
- Known issue: "some requests might not be counted for various reasons ... you might see slight differences between your site's request logs and the numbers reported here."
- Sections: "Total crawl requests", "Total download size", "Average response time", "Host status", "Crawl responses", "File type", "Crawl purpose", "Googlebot type".
- Total crawl requests: "The total number of crawl requests issued for URLs on your site, whether successful or not."
- Host status categories: "robots.txt fetching", "DNS resolution", "Server connectivity". "Ideally your host status should be Green."
- robots.txt rule: "HTTP 403/404/410 (the file does not exist). Your site is not required to have a robots.txt file." is a successful response; "HTTP 429/5XX (connection issue)" is unsuccessful. "For the first 12 hours, Google will stop crawling your site".
- Crawl responses: "Data is based on total number requests, not by URL". "It's not possible, worthwhile, or even desirable to fix all 404 errors on your site".
- Crawl purpose: "Discovery: The URL requested was never crawled by Google before." / "Refresh: A recrawl of a known page."
- Googlebot type values include "Smartphone", "Desktop", "Image", "Video", "Page resource load", "AdsBot", "StoreBot", "Other agent type".
- Overload: "Be sure not to return 503 or 429 for more than two or three days, though, or it can signal Google to crawl your site less frequently in the long term."

---

## 2. GA4 in depth

### 2.1 Reports relevant to SEO
- **Traffic acquisition**: "On the left, select Acquisition > Traffic acquisition." / "to view organic Google Search traffic, search "google / organic" and press Enter." / "Session default channel grouping ... This is the default dimension for the report." https://support.google.com/analytics/answer/12923437 **Documented**
- **Session default channel group** definition: "The channels by which users arrived at your site/app when they initiated new sessions". It is session-scoped, "Paid and organic channels last click". https://support.google.com/analytics/answer/9756891 **Documented**
- **Organic Search channel**: "Organic Search is the channel by which users arrive at your site/app via non-ad links in organic-search results, including Google’s AI Overviews and AI Mode." Rule: "Source matches a list of search sites ... OR Medium exactly matches organic". Same URL. **Documented**
- **AI Assistant channel (new)**: "AI Assistant is the channel by which users arrive at your site from sources like ChatGPT, Gemini, Deepseek, Copilot, or Grok. It excludes Google’s AI Overviews and AI Mode." Same URL. Launched in "What's new", May 13, 2026: "a new AI Assistant channel in your Default Channel Group reports" and "Traffic from these sources will be identified with the "(ai-assistant)" campaign name". https://support.google.com/analytics/answer/9164320 **Documented**
- Default channel groups "can't be edited in Google Analytics. You have the option to create custom channel groups". https://support.google.com/analytics/answer/9756891 **Documented**
- **Landing page report**: "On the left, click Engagement > Landing page." / "Landing page: The page path and query string associated with the first pageview in a session." https://support.google.com/analytics/answer/12931766 **Documented**
- Search Central's suggested GA4 pairings: "Traffic acquisition report: Investigate the session sources ... "Organic Search" and the source "Google"" and "Landing page report with a filter to include only sessions from google organic". https://developers.google.com/search/docs/monitor-debug/google-analytics-search-console (Last updated 2026-01-07 UTC). **Documented**
- **Compare date ranges**: "Previous period (match day of week)", "Previous period" and "Previous year" are the options. https://support.google.com/analytics/answer/13412290 **Documented**
- **Dashboards (new, GA4)**: "Dashboards are now available in Google Analytics." (What's new, September 9, 2026) and "Consolidated, single-page KPI view" (https://support.google.com/analytics/answer/17217303). **Documented**. An in-GA alternative to Data Studio for a simple KPI page.

### 2.2 Key events (renamed from conversions)
- Date and wording: in the What's new archive entry dated "March 27, 2024", titled "Conversions and key events": "From now on, events that measure actions that are important to the success of your business are now called 'key events.'" and "A 'conversion' now refers to an important action that you want to use to measure the performance of your ad campaigns". https://support.google.com/analytics/answer/13420269 **Documented**
- How to mark one: "In Admin, under Data display, click Events." then "Mark the event as a key event by clicking the star icon next to it." https://support.google.com/analytics/answer/13128484 **Documented**
- Limits: "You can mark up to 30 events as key events for standard properties". Defaults: "Google Analytics marks these events as key events by default: purchase (web and app)". Same URL. **Documented**. For Nila Coffee's WooCommerce shop, `purchase` is a default key event only if the shop actually sends it. That depends on the plugin; **observed practice, not documented by Google for WooCommerce**.

### 2.3 Explorations
- "Explorations is a collection of advanced techniques that go beyond standard reports" / "To access Explorations, click Explore in the left navigation." https://support.google.com/analytics/answer/7579450 **Documented**

### 2.4 Data retention: 2 vs 14 months, and what it affects
URL: https://support.google.com/analytics/answer/7667196. **Documented**
- "For Google Analytics properties, you can set the retention period of user-level data to: 2 months, 14 months".
- "Keep in mind that the data retention setting does not affect standard aggregated reports ... The data retention setting only affects explorations and funnel reports."
- "When you increase the retention period it is applied to data that you have already collected. Large and XL properties are limited to 2 months." (Treat "applied to data that you have already collected" with care; see the Conflicts section.)
- "The two-month retention period is always applied to age, gender, and interest data regardless of your settings."

### 2.5 Internal traffic and data filters
- Step 1 path: "In Admin, under Data collection and modification, click Data streams." → "Configure tag settings" → "Show more" → "Define internal traffic". "internal is the default value" for `traffic_type`. https://support.google.com/analytics/answer/10104470 **Documented**
- Step 2: "In Admin, under Data collection and modification, click Data filters." → "Create Filter" → "Internal Traffic". Filter states: "Testing: Analytics identifies matching data with the "Test data filter name" dimension", "Active: Analytics applies the data filter to incoming data and makes permanent changes", "Inactive". Same URL. **Documented**
- "A data filter can take between 24 - 36 hours to apply." / "You can create up to 10 data filters per property." Same URL. **Documented**
- Permanence: "Once you apply a data filter, the effect on the data is permanent." and "Data filters do not affect historical data." https://support.google.com/analytics/answer/10108813 **Documented**
- Filter types: "Developer traffic", "Internal traffic", "Web hostname traffic". Same URL. Hostname *Include* filters were announced on September 21, 2026: "allowing you to create an allowlist of approved domains" and "Include filters will automatically block events with empty hostnames". https://support.google.com/analytics/answer/9164320 **Documented**
- "You can't filter out internal traffic from app users." https://support.google.com/analytics/answer/10104470 **Documented**

### 2.6 Search Console collection in GA4
URL: https://support.google.com/analytics/answer/10737381. **Documented** (publishing was covered in M01.L08; the caveats are new here)
- The two reports are "Google Organic Search Queries" and "Google Organic Search Traffic".
- "The Search Console collection of reports is unpublished by default. You can find the collection under Library in the left navigation and publish it from there."
- "Search Console metrics are only compatible with Search Console dimensions and the following Analytics dimensions: Landing page, Device, Country".
- "The Search Console reports currently do not support time-series charts."
- "Search Console keeps data for the last 16 months." / "48 hours after it is collected by Search Console."
- Limits: "You can link a web data stream to only one Search Console property." / "You can link a Search Console property to only one web data stream."
- "You can't edit Search Console links. If you need to make a change to a link, delete the existing link and create a new one."
- Publish steps: "In the left navigation, click Library (at the bottom of the left navigation). If you don't see Library, you don't have Edit permission." → "Click More" → "Click Publish". https://support.google.com/analytics/answer/10460557 **Documented**
- Report path: "On the left, click Search Console > Google organic search traffic." https://support.google.com/analytics/answer/13682863 **Documented**

### 2.7 Thresholding
URL: https://support.google.com/analytics/answer/9383630. **Documented**
- "Data thresholds are applied to prevent anyone viewing a report or exploration from inferring the identity or sensitive information of individual users".
- "Data thresholds are system defined. You can't adjust them."
- Message text: "Google Analytics has applied thresholding to one or more cards in this report and will only display the data in the cards when the data meets the minimum aggregation thresholds."
- "If a report or exploration includes search query information, the row containing that data may be withheld if there aren’t enough total users." / "Expanding the date range may increase the number of users who triggered an event".

### 2.8 GA4 annotations
URL: https://support.google.com/analytics/answer/15884203. **Documented**
- Launch: What's new archive, "March 20, 2025 ... Google Analytics now supports annotations on line graphs in overview and detailed reports, and the Advertising section." Permissions update, "July 1, 2025: Annotations now have Analyst+ permissions". https://support.google.com/analytics/answer/13420269
- "You must be an Analyst or above at the property level to create, edit, and delete annotations and a Viewer or above to view annotations."
- "Each property has a limit of 1000 annotations."
- "right click any data point on any line graph" → "Add annotation" → "Title: The character limit is 60 characters." / "Description: The character limit is 150 characters." / "Date or date range".
- "When an annotation is created, it’ll be visible across all reports and report cards with line graphs."
- List view: "In Google Analytics, click Admin on the left. Under "Data display", click Annotations."
- "When a significant data-impacting event occurs, Google Analytics may create an annotation ... they can’t be edited or deleted."

---

## 3. Consent Mode v2 (beginner level)

- What it is: "Consent mode lets you communicate your users’ cookie or app identifier consent status to Google. Tags adjust their behavior and respect users’ choices." and "Consent mode does not provide a consent banner or widget. Rather, it interacts with it." https://support.google.com/analytics/answer/9976101 **Documented**
- Basic vs advanced, in one line: "Consent mode offers two implementations: basic, which blocks tags until consent; and advanced, which loads tags with default settings and adjusts behavior based on consent, allowing for more detailed conversion modeling." https://developers.google.com/tag-platform/security/concepts/consent-mode (Last updated 2026-07-30 UTC). **Documented**
- Basic: "you prevent Google tags from loading until a user interacts with a consent banner." and "when the user doesn't consent, no data is transferred to Google at all – not even the consent status." Same URL. **Documented**
- Advanced: "Google tags load when a user opens the website or app." and "While consent is denied, the Google tags send measurements without cookies." Same URL. **Documented**
- Modelling: in the comparison table, basic gives a "General model (less detailed modeling)" and advanced an "Advertiser-specific model (more detailed modeling)". Same URL. **Documented**
- Consent types: "ad_storage", "ad_user_data", "ad_personalization", "analytics_storage", "functionality_storage", "personalization_storage", "security_storage". Same URL. **Documented**
- v2 date: "In November 2023, we introduced two additional consent mode parameters in the consent mode API referred to as consent mode (v2)". "From March 2024, EEA customers using consent mode (v1) will see the value of the ad_storage parameter automatically mapped to the value of the new ad_user_data parameter." https://support.google.com/tagmanager/answer/14754100 **Documented**
- What changes for EEA users: "To keep using applicable tags/SDKs for measurement, and for ad personalization, and remarketing features, you must collect consent for use of personal data from end users based in the EEA and share consent signals with Google for these use cases." https://support.google.com/tagmanager/answer/13695607 **Documented**
- When no action is needed: "If you already use consent mode and don’t engage in personalized advertising, such as remarketing, you don’t need to take any action." Same URL. **Documented**
- GA effect if no action: "only end users outside the EEA will be included in audiences used by your linked advertising products starting early March, 2024." https://support.google.com/analytics/answer/14275483 **Documented**
- Where to check in GA4: "In Admin, under Data collection and modification, click Consent settings." Same URL. **Documented**
- Policy scope: the policy covers "end users in the European Economic Area, the UK and Switzerland." https://www.google.com/about/company/user-consent-policy/ **Documented**. Note that the help pages speak of "EEA", while the policy says EEA + UK + Switzerland.
- Behavioural modelling: "Behavioral modeling for consent mode uses machine learning to model the behavior of users who decline analytics cookies based on the behavior of similar users who accept analytics cookies." Prerequisites include "advanced implementation", "at least 1,000 events per day with analytics_storage='denied' for at least 7 days" and "at least 1,000 daily users sending events with analytics_storage='granted' for at least 7 of the previous 28 days." https://support.google.com/analytics/answer/11161109 **Documented**. Beginner takeaway: a small shop like Nila Coffee will almost certainly **not** get modelled data, so consent denials simply mean fewer GA4 sessions. This is our inference from the thresholds.
- Best practice: "Load Google tags in all cases, not only if the user consents." and "configure a default state to apply to particular regions instead of to all visitors." https://support.google.com/analytics/answer/9976101 **Documented**
- Legal note: whether a non-EEA site (e.g. an India-based Nila Coffee) legally needs a banner is **not a Google question**. Flag it as "check your local law". **Not found** in Google docs.

---

## 4. Google Tag Manager basics

- **Two ways to add GA4 in GTM (2026):** "Add the Google Analytics Destination (recommended)" via "Tag Configuration > Google Analytics > Google Analytics", or "(Alternate method) Set up the Google tag" via "In Choose tag type, select Google Tag." Trigger: "In the Triggering section, select Initialization - All Initialization Events". https://support.google.com/tagmanager/answer/9442095 **Documented**. **Freshness flag:** the "Destination" tag is new; most tutorials show only the Google tag.
- "Ensure you create a unique Google tag for each website." Same URL. **Documented**
- History: "The Google tag will replace the Google Analytics: GA4 Configuration tag" and "Google tag will use Tag ID instead of Measurement ID ... GA4 Event tags will continue to use Measurement ID." https://support.google.com/tagmanager/answer/13543899 **Documented**
- **Basic event:** "configure a Google Analytics: GA4 Event tag and then create a trigger". Example trigger: "Choose All Elements. Click Some Clicks. Set the following trigger condition: "Click Text contains Sign up for the newsletter"." and "If you want the event to trigger when someone views a page (e.g., on a confirmation page), you could use a Page View trigger instead." https://support.google.com/tagmanager/answer/13034206 **Documented**. Nila Coffee example: newsletter signup or "Add to basket" click.
- **Preview:** "In the Workspace tab, click Preview (top right) to launch Google Tag Assistant in a new tab." / "Click Connect. Your site opens in a new window and displays as Connected in the bottom right." / "The debug interface ... is not visible to your regular website visitors." / "Some sites or pages might be broken by an additional debug parameter added to the URL. If so, you can uncheck the box Include debug signal in the URL." https://support.google.com/tagmanager/answer/6107056 **Documented**
- **Publishing and versions:** "Click Submit at the top right hand side of the screen." → "Select Publish and Create Version" → "Enter a Version Name and Version Description." → "Click Publish." / "A version is a snapshot of a container configuration at a particular time." / "If someone accidentally publishes a container version before it's ready for production, you can revert your workspace to an earlier version and publish it." https://support.google.com/tagmanager/answer/6107163 **Documented**
- **Duplicate tags, Google's closest wording** (we found no Help page titled "avoid duplicate tags"):
  - "If you already use Tag Manager, continue to do so. Tag Manager fully supports Google Ads and Google Marketing Platform tags, and there is no need to deploy additional code using gtag.js on your site if Tag Manager is already in use." https://support.google.com/tagmanager/answer/7582054 **Documented**
  - "Before you install new tags, assess the tags that already exist on your website or mobile app, if any, so you don't add any redundant tags." https://developers.google.com/tag-platform/devguides/existing (Last updated 2026-11-06 UTC). **Documented**
  - "If your page already loads a Google tag with one of these IDs, you can connect additional destinations in Google Tag Manager rather than adding another tag snippet to the page." Same URL. **Documented**
  - "If you already have tags on your website: Identify all the tags you have deployed ... Create a migration plan to move your tags to Tag Manager." https://support.google.com/tagmanager/answer/6103576 **Documented**
  - The explicit claim that "two installs double-count page_views" does not appear verbatim in Google docs. It is **observed practice**, widely reported. Label it so in the lesson.
- **Snippet change (big freshness flag):** the current snippet is `<script async src="https://www.googletagmanager.com/gtm.js?id=TAG_ID"></script>`, and "The gtag('config') command is deprecated and no longer included in default installation snippets. ... Existing snippets containing gtag('config') will continue to work for backward compatibility." Also: "We have upgraded all the Google tags (gtag.js) to include the capabilities of Google Tag Manager." And: "If you are installing a Google tag for the first time, we recommend using Google Tag Manager." https://developers.google.com/tag-platform/gtagjs/install (Last updated 2026-11-06 UTC). **Documented**
- ID prefixes: "GTM-XXXXXX Google Tag Manager container ID (default)", "G-XXXXXX ... Identifies a Google Analytics destination (Measurement ID).", "GT-XXXXXX Google tag ID ... Identifies a Google tag created in prior versions." https://developers.google.com/tag-platform/devguides/existing **Documented**
- Code-search keywords for finding existing tags: "gtag(", "googletagmanager.com – This domain loads both Tag Manager and gtag.js functionality", "dataLayer", "analytics.js or ga.js". Same URL. **Documented**

---

## 5. Why GSC and GA4 numbers differ (Google's documented reasons)

Primary source: "Using Search Console and Google Analytics data for SEO", https://developers.google.com/search/docs/monitor-debug/google-analytics-search-console (Last updated 2026-01-07 UTC). **Documented**
- Most comparable pair: "we recommend focusing on these two metrics, as they're the most comparable: Search Console Clicks ... Google Analytics Sessions". "Clicks and sessions are calculated differently".
- Expectation-setting: "Although the total counts don't match exactly, what's important is that the general trends have the same pattern." / "Small discrepancy: If the difference is small, you can ignore the discrepancies."
- Sources of truth: "The source of truth for Search performance will always be Search Console, while the source of truth for behavior inside your site will be Google Analytics."
- Reasons, all quoted under "Reasons for a big discrepancy in clicks and sessions":
  - Implementation: "there could be pages on your website where the Analytics tag is missing."
  - Consent: "If your site is asking users to accept tracking, and users opt out, that can skew Google Analytics data."
  - Time zone: "You can choose your timezone in Google Analytics, but you can't customize that in Search Console, where the default time zone is Pacific Time (PT)." (Very relevant for an India-based shop: IST is 12.5 or 13.5 hours ahead of PT.)
  - Attribution: "Search Console counts every click in Google Search. The closest attribution model available is the default model in Google Analytics."
  - Canonical URLs: "Search Console reports only on the Google Search canonical URL, whereas Google Analytics reports on any URL that includes the tracking code."
  - Traffic breakdowns: "Search Console breaks down the traffic by web, image, video, news and Discover. These category breakdowns are different in Google Analytics."
  - Non-HTML: "If your site has non-HTML pages (for example, PDFs), Search Console includes these pages by default".
  - Bots: "Google Analytics automatically excludes traffic from known bots and spiders automatically, while Search Console doesn't necessarily filter them out."
- Search Console Help's own list: "Privacy: To protect user privacy, the Performance report does not show all data." / "Processing: ... (for example, to eliminate duplicates)." / "Time lag: ... Collected data is usually available in 2–3 days." / "Time zones" / "JavaScript: Some tools, such as Google Analytics, track traffic only from users who have enabled JavaScript in their browser." https://support.google.com/webmasters/answer/17010575 **Documented**
- Anonymised queries and truncation: see m03-l05 research §3 (already verified).
- Our addition, **observed practice / inference**: ad blockers. Google's GA4 troubleshooting page notes that "Some browser extensions can block Google Analytics scripts from running." https://developers.google.com/analytics/devguides/collection/ga4/troubleshoot (Last updated 2026-10-14 UTC). **Documented** as a GA data gap, though not listed in the GSC-vs-GA comparison doc.

---

## 6. Data Studio (formerly Looker Studio): connectors, freshness, Pro

**Rename (major freshness flag):** "In April 2026, the Looker Studio product name returned to its original name: Data Studio." / "The product URL is https://datastudio.google.com/." / "lookerstudio.google.com will automatically redirect to the new domain." https://docs.cloud.google.com/data-studio/welcome (Last updated 2026-10-26 UTC). **Documented**. Release note dated "April 16, 2026": "We've rebranded Looker Studio as Data Studio." https://docs.cloud.google.com/data-studio/release-notes **Documented**. Help moved: `support.google.com/looker-studio/answer/...` now redirects to `docs.cloud.google.com/data-studio/...` (observed via curl redirect on 2026-11-09). The course outline says "Looker Studio": **lessons should say "Data Studio (formerly Looker Studio)".**

- **Search Console connector, site vs URL impression:** "In the Tables panel, choose either Site Impression or URL Impression." / "The Search Console connector gives you access to both these methods however a single data source can only use one of these." / "To see your site impressions and URL impressions side by side, create two data sources and add both to a single report." https://docs.cloud.google.com/data-studio/connect-to-search-console (Last updated 2026-10-26 UTC). **Documented**
- Search types: Site Impression supports "web, image, video, news"; URL Impression adds "discover, googleNews". Same URL. **Documented**
- Blank query rows: "Data Studio may aggregate these queries into a single row with a blank value." Same URL. **Documented**
- Account tip: "make sure that you are signed in to Data Studio and Search Console with the same Google Account, and that you have at least view permission on the property." Same URL. **Documented**
- Google's own dashboard template guidance: "Connect to Search Console and choose URL Impression in the Tables panel." / "the Google Analytics data is already filtered to include only sessions from Session source = google and Session medium = organic." / "To compare apples to apples, we recommend that you pick the same filter for both data sources." / "The default time range of the report is "last 28 days", but Search Console data can be delayed by a couple of days." https://developers.google.com/search/docs/monitor-debug/google-analytics-search-console **Documented**. That page still says "Looker Studio" (dated 2026-01-07, before the rename).
- **GA4 connector:** "You must have at least Read & Analyze permission to the Google Analytics 4 property". "Data Studio reports that connect to Google Analytics 4 data are subject to Google Analytics Data API (GA4) quotas. Reports that exceed these quotas may display an error message." / "Google Analytics 4 segments and comparisons are not available using the Google Analytics connector." / "Data Studio will match the data, but not the explorations, in Google Analytics reporting." https://docs.cloud.google.com/data-studio/connect-to-google-analytics (Last updated 2026-10-26 UTC). **Documented**
- Known GA4 double-count bug: "you may encounter inflated or "double-counted" session metrics in Stacked Bar charts under specific configurations. ... most commonly ISO Year ISO Week." Workaround: "switch to standard date dimensions (e.g., Date or Month)". Same URL. **Documented**. This is a good "check your dashboard" teaching point.
- **Freshness:** "Google marketing and measurement products, such as Google Ads, Google Analytics, Campaign Manager 360, Search Console, YouTube Analytics, and others, refresh every 12 hours. That rate can't be changed." But the same page's table lists Google Analytics as "Every 1 hour / Every 4 hours / Every 12 hours*" (default). "Report editors and viewers can also manually refresh the data in a report." https://docs.cloud.google.com/data-studio/manage-data-freshness **Documented**. See the Conflicts section.
- **Free vs Pro:** "Data Studio (formerly known as Looker Studio) is a no-cost tool". "Data Studio Pro is the paid version of Data Studio." Pro adds content owned by the organisation, team workspaces, "up to 200 delivery schedules to a report and deliver reports to Google Chat and Slack", alerts and personal report links. https://docs.cloud.google.com/data-studio/welcome and https://docs.cloud.google.com/data-studio/about-pro **Documented**. Beginner takeaway: free is enough for this course. No Pro price is quoted in the docs we read (**Not found**).
- **Date comparison:** "When your chart includes a comparison date range, you can apply the comparison function to either the base data or to the corresponding comparison date range." and the example "compares the current 28 days to the previous 28 days". https://docs.cloud.google.com/data-studio/add-comparison-metrics-and-running-totals **Documented**
- **Annotations in Data Studio:** we found **no native annotations feature** in Data Studio docs. The welcome page says only "Annotate and brand your reports with text and images." The release notes list a third-party connector, "GA4 Annotations by ReallyGoodData. Sources: Google Analytics". **Observed practice:** keep a "Changes log" Google Sheet (date, change, page) as a data source and show it as a table under the time-series chart, or put text boxes on the chart.

---

## 7. Annotations: current status (summary)
| Tool | Status | Limits | Source |
|---|---|---|---|
| Search Console | Live, launched 17 Nov 2025 | 200 per property; 120 chars; auto-deleted after 500 days; no edit; hidden in comparison mode and 24-hour view | https://support.google.com/webmasters/answer/16530728 |
| GA4 | Live, launched 20 Mar 2025; Analyst+ from 1 Jul 2025 | 1,000 per property; title 60 / description 150 chars; single date or date range | https://support.google.com/analytics/answer/15884203 |
| Data Studio | No native feature found | n/a | see §6 |

Teaching point: **Search Console annotations vanish in comparison mode**, which is exactly when you'd want them for a month-on-month report. Keep the change log outside the tools too. That last point is observed practice.

---

## 8. KPIs and honest reporting

- Google's success measure: "In general, you shouldn't focus too much on your absolute position. Impressions and clicks are ultimately the measure of success for your site." https://developers.google.com/search/docs/monitor-debug/debugging-search-traffic-drops (Last updated 2025-12-10 UTC). **Documented**
- Google's five-metric dashboard: "1. Sessions (Google Analytics)", "2. Engagement rate (Google Analytics)", "3. Returning users (Google Analytics)", "4. Clicks (Search Console)", "5. Click-through rate (CTR) (Search Console)". "The dashboard goal is not to dive deep into the data; it's for quickly spotting changes in traffic." On share of traffic: "There's no good or bad percentage, as this depends on your audience and your business." https://developers.google.com/search/docs/monitor-debug/google-analytics-search-console **Documented**. Use this as the default KPI set, plus **key events from organic** (GA4), which is observed practice.
- Branded vs non-branded as a KPI split: "Branded queries typically lead to higher-ranking pages from your site and result in higher click-through rates, whereas non-branded queries offer organic growth". https://developers.google.com/search/blog/2025/11/search-console-branded-filter **Documented**
- **Average position caveats (verbatim):**
  - "The position value is a complex metric that can be misleading if you don't understand the subtleties." / "a position number can mean different things in different situations, and so you should not make simple assumptions. We recommend that you monitor change in position over time, particularly sudden position changes, as well as absolute position." https://support.google.com/webmasters/answer/7042828 **Documented**
  - "A link must get an impression for its position to be recorded." Same URL. **Documented**
  - "Position value is the average position for all searches. For your specific search your position might be different than the average because of many variables, such as your search history, location, and so on." Same URL. **Documented**
  - "the click-through rate (CTR) and average position are generally higher when aggregating by property, if multiple pages from the same site appear in the Search results." https://support.google.com/webmasters/answer/17011364 **Documented**
- **Averages hide a page's loss:** Google's own method is to compare periods and sort by loss. "comparing the pages that lost a significant amount of clicks. Select Clicks Difference to order it based on pages that lost the most traffic." / "finding out if the drop happened across the whole site, a group of pages, or even just one very important page". https://developers.google.com/search/docs/monitor-debug/debugging-search-traffic-drops **Documented**
- **Comparing like with like:** "Compare last 3 months to previous period or Compare last 3 months year over year" and "Choose the Date filter on top of the chart and select Last 16 months. This will help you analyze the traffic drop in context and make sure it's not a drop that happens every year due to a festivity or a trend." Same URL. **Documented**. Weekly/monthly granularity avoids "day-of-the-week mismatches" (Dec 2025 blog, §1.4). GA4 offers "Previous period (match day of week)" (§2.1).
- **Measurement before changes (non-negotiable #2):** Google's guidance supports the idea of a baseline ("Use this as a starting point ..." in Insights; 16-month context in the drops doc), but **no Google page says "measure before you change" in those words**. The rule is our course principle. Annotations ("Infrastructure changes like updating a template or a site migration", "SEO efforts like implementing a new plugin or hiring an agency", from the Nov 2025 blog) are Google's documented way to date changes.
- Monthly one-page report structure (headline, KPIs vs previous month and vs last year, winners/losers by Clicks Difference, actions taken with dates, data caveats, next actions): **observed practice**. No Google template was found.

---

## 9. Bing Webmaster Tools equivalents

- Search Performance: "Search Performance Reporting: Track impressions, clicks, and average position across pages and keywords using up to 16 months of data." Bing Webmaster Blog, June 17, 2025. https://blogs.bing.com/webmaster/2025/6/Start-Using-Bing-Webmaster-Tools-to-Improve-Your-Site-Visibility/ **Documented**
- Other Bing reports in that post: "Backlink Insights: View referring domains, anchor text, and link profiles for both your own site and competitors.", "URL Inspection Tool", "Site Explorer", "Sitemaps Report ... Bing processes sitemaps at least once every 24 hours", "Site Scan Tool", "Robots.txt Tester", "IndexNow Integration and URL Submission". Same URL. **Documented**. Unlike Google's Links report, Bing shows *competitor* backlinks.
- **AI Performance (Public Preview):** February 10, 2026. "a new set of insights that shows how publisher content appears across Microsoft Copilot, AI-generated summaries in Bing, and select partner integrations." The metrics are "Total Citations", "Average Cited Pages", "Grounding queries" ("The data shown represents a sample of overall citation activity") and "Page-level citation activity" ("This reflects how often pages are cited, not page importance, ranking, or placement"). https://blogs.bing.com/webmaster/2026/2/Introducing-AI-Performance-in-Bing-Webmaster-Tools-Public-Preview/ **Documented**
- **Topics Portfolio (Beta) in AI Performance:** October 13, 2026. "it groups the grounding queries where your site appears into broader thematic clusters" / "If there is sufficient data for your site, you will see a new Topics Portfolio tab next to Citations & Pages." Columns: "Topic", "Topic Size", "Sites Cited", "Queries". "Top Opportunity Queries: the strongest queries across your whole portfolio where other sites appear and yours does not." https://blogs.bing.com/webmaster/2026/10/introducing-topics-portfolio-beta-in-ai-performance/ **Documented**
- Copilot in Bing Webmaster Tools: a blog post exists titled "Copilot in Bing Webmaster Tools is Now Available to All Users" (March 2025, listed on https://blogs.bing.com/webmaster). We did not download the post body, so its contents are **not verified**.
- Contrast for the lesson: Google's generative AI report counts **impressions**; Bing's AI Performance counts **citations**. They are not comparable numbers. This is our inference from the two definitions.

---

## 10. DevTools / Tag Assistant checks for a duplicated tag or wrong measurement ID

- **Tag Assistant:** "When you connect Tag Assistant to your website, check if your Google tag ID appears in the Google tags found header. A green or blue icon indicates that the tag was found and is working correctly." https://developers.google.com/tag-platform/gtagjs/install **Documented**
- Tag Assistant steps: "Go to Google Tag Assistant. Click Add domain. Enter the URL ... Click Connect." / "we add a debug parameter (_dbg) to the end of your URL. The parameter helps you view events in other debugging surfaces, such as Google Analytics' DebugView." / "Tag Assistant Legacy and Tag Assistant Companion Chrome extensions are now combined into a unified extension". https://support.google.com/tagassistant/answer/10039345 **Documented**
- "Google Tag Assistant and Tag Diagnostics will continue to show implementation warnings when an event is sent to any Google product without first firing the corresponding destination tag or Google tag." Same URL. **Documented**
- What Tag Assistant shows: "inspect which gtag.js commands have fired and in which order ... It also displays the hits (HTTP requests) and associated parameters." https://developers.google.com/tag-platform/devguides/existing **Documented**
- **DevTools Network:** "Open Chrome Developer Tools (View > Developer > Developer Tools). Open the Network tab. Refresh the page. If you see requests to googletagmanager.com, your tag is firing." / "Google Analytics: Filter for requests to google-analytics.com or analytics.google.com." https://developers.google.com/tag-platform/gtagjs/install **Documented**
- "look for network requests to google-analytics.com/g/collect or analytics.google.com/g/collect as you navigate your site. You should see these requests firing on each page load and for events. A 200 OK or 204 No Content status code indicates a successful transmission." https://developers.google.com/analytics/devguides/collection/ga4/troubleshoot (Last updated 2026-10-14 UTC). **Documented**
- **Wrong measurement ID:** "Ensure the Measurement ID in your gtag('config', 'G-XXXXXX') call exactly matches the ID from your Google Analytics web data stream settings. Typos in the Measurement ID are one of the most common and easy-to-make setup mistakes". Same URL. **Documented**
- DebugView: "Enable DebugView to see events in real-time as you interact with your website or app." / "DebugView: Events appear within seconds." Same URL. **Documented**
- **`tid` parameter:** we found **no Google documentation** of the `/g/collect` query parameters. That `tid=G-XXXX` carries the measurement ID and `en=page_view` the event name is **observed practice** (visible in the Network request's payload/query string). Teach it as "look for your G- ID in the request URL", labelled observed.
- **How a duplicate shows up** (observed practice, not documented): two `collect` requests with `en=page_view` for one page load with the same `tid` (double install), or two different `tid` values (a stray old property). Tag Assistant would list two tags in "Google tags found", or the same ID twice. The documented anchor is "Each page navigation should produce" one page view. That phrase came from search-result summaries of third-party pages, **not Google**; do not quote it.
- Where to find the real ID: "In Admin, under Property Settings, click Data streams." → "Under Stream details, copy the Measurement ID (starts with "G-" or "AW-")." https://support.google.com/analytics/answer/9539598 **Documented** (see the Conflicts section on the Admin path).

---

## Freshness flags
1. **Looker Studio is now "Data Studio"** (April 2026), at datastudio.google.com, with docs on docs.cloud.google.com. The course outline and older Google pages still say Looker Studio.
2. **Google tag snippet changed** (dev docs updated 2026-11-06): `gtm.js?id=TAG_ID`, and `gtag('config')` is deprecated. GTM now recommends a "Google Analytics Destination" tag. M01.L08's "paste the Google tag" step and any lesson code samples showing `gtag/js?id=G-...` + `gtag('config', ...)` are now the *prior version*. They still work, but they are not current.
3. **GA4 Help still shows the old snippet text** ("<!-- Global tag (gtag.js) -->") and the troubleshooting page still uses `gtag('config')`. Expect learners to see both versions.
4. **Search Console AI features** (gen-AI performance reports, Search generative AI control) went worldwide on 31 Aug 2026 and are likely to change quickly.
5. **Branded filter, Query groups, AI-powered configuration and Social channel insights** are AI-classified and partly rolling out: "may not be available to everyone".
6. **GA4 AI Assistant channel** (13 May 2026), **Dashboards** (9 Sep 2026), **Hostname include filters** (21 Sep 2026) and **Data Manager beta** (6 Nov 2026) are all recent, and their menus may move.
7. **GA4 Admin menu paths differ between pages** ("Data collection and modification" vs "Property Settings" vs "Data settings > Data filters"). Re-check them live before publishing.
8. **Bing AI Performance** is a "Public Preview", and Topics Portfolio is "Beta".
9. Consent rules and dates (EEA/UK/Switzerland) can change, and local laws (e.g. India's DPDP Act) were **not researched**.
10. Tag Assistant Companion extension: "will be deprecated in the coming months."

## Conflicts between sources
1. **Crawl stats availability:** "Reports at a glance" says "available only for domain-level properties ... not for URL-prefix properties (example.com/somepath/)". The Crawl Stats page says "either a Domain property ... or a URL-prefix property at the root level (https://example.com ...)". The second is more precise: root URL-prefix properties are fine, and path-level ones are not.
2. **Advanced consent defaults:** the developer docs say "By default, consent may be denied, unless you set your own defaults." Google Ads Help (https://support.google.com/google-ads/answer/10000067) says "The system defaults to a consented state unless a specific choice has been made, though there may be regional behavioral differences for specific areas like the EEA, Switzerland, and the UK." Teach: "set your own defaults; don't rely on the system default."
3. **EEA vs EEA + UK + Switzerland:** the consent mode help pages say "EEA". The EU user consent policy says "European Economic Area, the UK and Switzerland".
4. **`gtag('config')`:** "deprecated" on the install page (2026-11-06), but still used in the GA4 troubleshoot page (2026-10-14) and in DebugView instructions.
5. **Data Studio freshness:** the text says Google products "refresh every 12 hours. That rate can't be changed". The table offers GA at 1, 4 or 12 hours.
6. **GA4 data retention:** "When you increase the retention period it is applied to data that you have already collected". This can be read as "retroactive". Combined with "only affects explorations and funnel reports", the safe lesson line is: "set 14 months on day one; you can't recover explorations data older than your setting." The second half is our inference.
7. **GA average position example** shows "the average position would be 5 (3+7/2)". That is a typo in Google's maths: it should read (3+7)/2. https://support.google.com/analytics/answer/13682863. Don't quote the formula.
8. **GA4 Admin path to data streams:** "Data collection and modification > Data streams" (answer/10104470) vs "Property Settings > Data streams" (answer/9539598). The troubleshoot page also says "Admin > Data settings > Data filters", while answer/10104470 says "Data collection and modification".
9. **Tag ID vs Measurement ID:** GTM's Google tag uses a "Tag ID", while GA4 Event tags "continue to use Measurement ID". GA Help calls the G- value a "Google tag ID". Learners will meet all three names for the same G- string.

## Not found
- A Google Help page that explicitly warns that a gtag snippet + GTM (or a plugin + GTM) double-counts GA4 page views. Only "no need to deploy additional code using gtag.js on your site if Tag Manager is already in use" and the guidance to avoid "redundant tags" were found.
- Google documentation of `/g/collect` parameters (`tid`, `en`, etc.).
- A native annotations feature in Data Studio.
- A Data Studio Pro price, and Data Studio's own quota numbers (it defers to "Google Analytics Data API (GA4) quotas").
- A Google-published SEO KPI framework or monthly-report template, beyond the five-metric dashboard doc.
- A "last updated" date on any support.google.com Help page (they don't print one).
- Confirmation of current Search Console left-nav group names ("Experience", "Enhancements") in Help.
- The body of Bing's "Copilot in Bing Webmaster Tools" post (title only).
- Any Google statement in the exact words "measure before you change".

## Suggested lesson split (6 lessons)
1. **M08.L01 Search Console in depth:** every report in the current list, Insights, branded filter, query groups, weekly/monthly views, annotations, Links (sampled) and Crawl stats (Host status), plus the generative AI report and setting. Performance filters, regex and compare: reference M03.L05 and add one new exercise.
2. **M08.L02 GA4 for SEO:** Traffic acquisition (Organic Search, the new AI Assistant channel), Landing page, Search Console collection caveats, key events (renamed 27 Mar 2024), explorations, retention (2 vs 14 months), internal-traffic filter (Testing → Active), thresholding, GA4 annotations.
3. **M08.L03 Consent Mode v2 and Google Tag Manager basics:** basic vs advanced, EEA rules and dates, modelling thresholds (why small sites won't get modelled data); GTM install (Destination vs Google tag), one click event, Preview/Tag Assistant, Submit → Publish → versions, and the 2026 snippet change.
4. **M08.L04 Why the numbers don't match, plus the break-it lab:** Google's reasons list (clicks vs sessions, consent, PT time zone, canonical, attribution, bots, anonymised queries), then find a duplicated GA4 tag and a wrong measurement ID with View source, Tag Assistant, DevTools Network and DebugView.
5. **M08.L05 A Data Studio SEO dashboard:** Search Console connector (Site vs URL Impression), GA4 connector, same filters on both, a 12-hour freshness note, comparison ranges, a "changes log" sheet as annotations, and the ISO-week double-count trap.
6. **M08.L06 KPIs and an honest monthly report:** the five Google metrics + key events, branded vs non-branded, average-position caveats, Clicks Difference to find losing pages, like-for-like date ranges (YoY / match weekday / 16 months), a one-page report template, and a Bing Search Performance + AI Performance side-note. Capstone: dashboard + report.

## Break-it lab ideas (planted tracking errors, free tools only)
| # | Plant | Symptom | Detect with |
|---|---|---|---|
| 1 | **Duplicate GA4 tag**: Site Kit installs GA4 *and* the GTM container also fires a Google tag/Destination for the same G- ID | Two `page_view` events per page load in Realtime/DebugView; engagement looks odd | View source: search `G-`, `GTM-`, `googletagmanager.com` (Google's keyword list); Tag Assistant "Google tags found"; DevTools Network filter `collect`, then count `page_view` requests per navigation (count is observed practice) |
| 2 | **Wrong measurement ID**: a typo (`G-AB12CD34FE` vs `G-AB12CD34EF`) in the GTM tag | Realtime stays empty, but requests still fire with status 204 | DevTools: compare the G- ID in the request URL (`tid`, observed) with Admin → Data streams → Measurement ID; Google: "Typos in the Measurement ID are one of the most common" |
| 3 | GTM changes left in **Preview only** (never Submitted) | Works for you in Preview; real visitors aren't tracked | GTM Versions / publish history: "look for entries with a date in the Published column" |
| 4 | Internal-traffic filter left in **Testing** | Nila's staff visits still in reports | Explore: rows "Test data filter name" (Google's documented test) |
| 5 | Key event not marked (`purchase` / `generate_lead` missing) | "Key events" column is 0 in Landing page | Admin → Data display → Events, star icon |
| 6 | Consent banner in **basic** mode with a denied default for everyone | Organic sessions far below GSC clicks | Tag Assistant consent states; GA Admin → Consent settings; Google's discrepancy reason "users opt out" |
| 7 | GA4 time zone set to IST, GSC is PT | Daily clicks vs sessions don't line up day by day | Compare weekly/monthly instead of daily (GSC weekly view; GA4 week) |
| 8 | Mismatched date ranges (GSC "last 28 days" vs GA4 "last month") | Report shows a fake drop | Checklist: same dates, same country/device filters on both (Google: "pick the same filter for both data sources") |
| 9 | Data Studio chart using **ISO Year ISO Week** on GA4 sessions in a stacked bar | Sessions higher than in GA4 | Compare with the GA4 UI; switch to Date/Month (documented workaround) |
| 10 | Search Console collection not published in GA4 Library | "Where are the Search Console reports?" | Library → collection card → More → Publish |

## Hands-on ideas (free tools only)
- **Nila Coffee GSC tour:** open each report in the current list and write one line per report, "what would make me worry here?". Check Crawl stats Host status, then count Links report rows and note "sample, not all links".
- **Branded vs non-branded:** apply the filter, record clicks for each, and write which is the growth KPI. If the filter is unavailable (small site), use a regex `(nila|nilla|nila coffee)` and note that Google says its filter is AI-based, not regex.
- **Losing pages, not averages:** Compare last 3 months vs previous period → Pages tab → sort by Clicks Difference. List the top three losers even when site-wide clicks are up.
- **Annotate a change:** add a GSC annotation (≤120 chars) and a GA4 annotation (title ≤60) for the same date, then switch GSC to compare mode and see the annotation disappear.
- **GA4 SEO view:** Traffic acquisition, search "google / organic"; Landing page filtered to Session source/medium google / organic; mark `purchase` or `generate_lead` as a key event; set up internal traffic in Testing, verify in Explore, then set it to Active.
- **GTM one-event build:** GA4 Event tag `signup_newsletter` with a Click Text trigger → Preview → confirm in DebugView → Submit with a version name such as "2026-11 newsletter event".
- **Clicks vs sessions sheet:** export 4 weeks of GSC clicks (weekly view) and GA4 organic Google sessions (week); chart both and write which documented reasons explain the gap.
- **Data Studio dashboard (capstone):** copy Google's template, connect Search Console (URL Impression) and GA4, add a "Changes log" Google Sheet table, add a date-range control with "previous period" comparison, and check one number against each source tool.
- **One-page monthly report (capstone):** headline sentence; 5 KPIs + key events vs last month and last year; top 3 winners / losers by Clicks Difference; changes made (from the log); data caveats (PT time zone, consent, anonymised queries); 3 next actions. Optional Bing box: Search Performance clicks + AI Performance citations, labelled as not comparable to Google impressions.
