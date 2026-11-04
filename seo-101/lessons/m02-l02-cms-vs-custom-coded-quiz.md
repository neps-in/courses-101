# M02.L02 Quiz — CMS vs Custom-Coded Websites

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Each question is tagged with the objective it tests (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-04 against Google Search Central, Shopify Help Center, Squarespace Help (through excerpts) and WordPress.com support. Google's comments on platforms reach us through news reports.

### Q1. What is a CMS? *(O1 · recall)*
- a) A file that tells search crawlers which of your URLs not to request
- b) A company that registers domain names and renews them every year
- c) Software for editing content in a browser while it builds the pages
- d) A network of servers that keeps copies of your files around the world

**Answer:** c
**Explanation:** A content management system lets people create and edit content in a browser, and the system builds the pages. Option a describes `robots.txt`, b a registrar and d a CDN.
**Hint:** Look at what the three letters stand for.

### Q2. What's the main difference between WordPress.org and WordPress.com? *(O1 · recall)*
- a) WordPress.org is software you host; WordPress.com is a hosted service
- b) WordPress.org is for shops only; WordPress.com is for blogs and writers
- c) WordPress.org is a paid service; WordPress.com is always free to use
- d) WordPress.org ranks higher in Google than WordPress.com sites can rank

**Answer:** a
**Explanation:** WordPress.org gives you free software to run on hosting you choose. WordPress.com runs WordPress for you, and its plans decide what you can do, such as installing plugins.
**Hint:** Which one needs you to find your own hosting?

### Q3. You open View Source on a site and find many matches for `/wp-content/`. What does that strongly suggest? *(O2 · recall)*
- a) The site is built with Shopify and sells products through a theme
- b) The site is hand-coded and has no content management system at all
- c) The site is hidden from search engines by a setting in its dashboard
- d) The site runs on WordPress, where themes and uploads sit in that folder

**Answer:** d
**Explanation:** `/wp-content/` is a strong WordPress clue. Shopify sites usually show `cdn.shopify.com`, and a clue about the platform says nothing about whether the site is hidden from search.
**Hint:** The clue starts with two letters. What might "wp" stand for?

### Q4. Amara's client runs on Squarespace and wants one page kept out of Google. A guide says to edit `robots.txt`. What should Amara do? *(O3 · scenario)*
- a) Ask Squarespace Support to change the shared robots.txt file by hand
- b) Use the page's Hide page from search results toggle in page settings
- c) Move the whole site to WordPress so that the file can be edited directly
- d) Delete the site's sitemap so that search engines can't find this page

**Answer:** b
**Explanation:** All Squarespace sites use the same `robots.txt`, and users can't edit it. A built-in setting does the job, and the lesson's fix order starts with built-in settings. A platform move would be far too big for this job.
**Hint:** In the lesson's fix order, what do you try first?

### Q5. Tomás adds a redirect on Shopify from an old product URL to a new one, but the old page still loads as before. What's the likely reason? *(O3 · scenario)*
- a) Redirects on Shopify take about a month to reach all of your visitors
- b) Shopify doesn't support any redirects, so a developer must build them
- c) Redirects work on Shopify only when the shop is switched to private mode
- d) Shopify redirects work only from broken URLs, and this one still loads

**Answer:** d
**Explanation:** Shopify says "You can redirect only from broken URLs." If the old URL still loads a valid page, the redirect won't work. Squarespace has a similar rule.
**Hint:** What has to be true of the old URL first?

### Q6. An agency tells Kavya, "WordPress can't rank. You need a custom-coded site." Her pages load well, and she can change every setting she needs. What should she do? *(O1 · scenario)*
- a) Stay, and ask the agency which specific fix WordPress stops her making
- b) Rebuild now, because custom code gets a ranking boost from Google
- c) Rebuild only the homepage, because that's the page that Google reads
- d) Stay, but delete her plugins, because Google penalises sites that use them

**Answer:** a
**Explanation:** Google says it doesn't prioritise ranking by platform, and Kavya has recorded no real limit. A rebuild adds cost and risk, so a specific reason should come first.
**Hint:** When is changing platform worth it?

### Q7. Spot the error: "We chose WordPress, so Google ranks us above competitors on Wix. We also don't need to check our settings, because all platforms offer the same SEO access." *(O1 · spot the error)*
- a) Wix is the only platform that Google will index without a paid plan
- b) No platform gets a ranking boost, and SEO access differs between them
- c) WordPress sites can't have a sitemap, so Google can't find their pages
- d) Competitors on Wix always rank higher, as Wix has a built-in SEO bonus

**Answer:** b
**Explanation:** Google's John Mueller has said "There's no ranking-boost for using WP". Access does differ, though: for example, Wix has a robots.txt editor, and Squarespace users can't edit that file.
**Hint:** There are two claims here. Check each one.

### Q8. Spot the error: "Our Wix plan is paid for this year, so our domain name can't expire." *(O3 · spot the error · review: m02-l01)*
- a) Domains on Wix expire every month, whatever the plan you're paying for
- b) Wix sites have no domain names, so there's nothing that could expire
- c) A domain is renewed on its own, even if one company sells you both
- d) Paid plans make a domain permanent only for sites that sell products

**Answer:** c
**Explanation:** As you saw in Lesson 2.1, the domain and the hosting are separate things, even if they're bought from one company. Check the domain's own expiry date and renewal settings.
**Hint:** In Lesson 2.1, does renewing your hosting renew your domain?
