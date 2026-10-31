# M05.L05 Quiz — Connect Google Search Console and Bing Webmaster Tools

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced-review question from M05.L01.
> Checked against Search Console Help, Google Search Central and the Bing Webmaster blog on 2026-10-31.

### Q1. Which Search Console property type covers `www`, other subdomains and both http and https, and how is it verified?
- a) URL-prefix property, verified with an HTML tag on the homepage
- b) Domain property, verified only with a DNS TXT record
- c) Domain property, verified with Google Analytics
- d) URL-prefix property, verified by submitting a sitemap

**Answer:** b
**Explanation:** A Domain property (`example.com`) includes all subdomains and protocols and can only be verified with a DNS record. A URL-prefix property covers only URLs with that exact prefix and supports several methods, including the HTML tag your SEO plugin can add.
**Hint:** Which property needs access to your domain's settings?

### Q2. Your sitemap shows **Status: Success** in the Sitemaps report. What does that tell you?
- a) Every URL in the sitemap is now indexed
- b) Google could fetch and read the sitemap without errors
- c) Your posts will rank within a week
- d) Bing has also received the sitemap automatically

**Answer:** b
**Explanation:** *Success* means the sitemap was fetched and read without errors. Google says it can take time to crawl the URLs listed, and not all of them may be crawled or indexed. Bing needs its own submission (or Import).
**Hint:** It's about the file, not the pages in it.

### Q3. What's the quickest way to add a site you've already verified in Search Console to Bing Webmaster Tools?
- a) Email Bing support with a screenshot of Search Console
- b) Wait for Bing to copy your Google settings automatically
- c) Use Bing's **Import** from Google Search Console
- d) Re-submit your sitemap in Search Console with a Bing tag

**Answer:** c
**Explanation:** Bing Webmaster Tools can import sites verified in Search Console, along with their sitemaps, after you allow access to your Google account. If that isn't possible, verify manually, for example with the `msvalidate.01` meta tag in Yoast's **Site connections**.
**Hint:** Bing built a shortcut for this.

### Q4. Hira's Pages report lists 30 URLs as **Page with redirect** and 12 under **Excluded by 'noindex' tag**: her tag archives and author archive. Her 25 posts are indexed. What should she do?
- a) Request indexing for all 42 URLs
- b) Remove all her redirects so those URLs can be indexed
- c) Nothing urgent: those exclusions are expected for her setup
- d) Delete and re-add the property to reset the report

**Answer:** c
**Explanation:** Google's goal is "the canonical version of every important page indexed". Redirected old URLs and archives she deliberately set to `noindex` *should* be excluded. She'd act only if an important post appeared in a not-indexed reason.
**Hint:** Is each excluded URL a page she wants in search?

### Q5. Leo updated a key guide with new sections and wants Google to recrawl it. What should he do?
- a) Inspect the URL, click **Test live URL**, then **Request indexing** once
- b) Click **Request indexing** every day until the change appears
- c) Delete and re-submit his sitemap in the Sitemaps report
- d) Change the post's slug so Google sees it as a new page

**Answer:** a
**Explanation:** URL Inspection with **Request indexing** is meant for important new or updated pages. Google says there's a quota and repeat requests for the same URL won't speed crawling. Re-submitting the sitemap isn't needed, and changing the slug breaks links (and needs a redirect, M05.L02).
**Hint:** Once is enough.

### Q6. Spot the error: Ama's setup notes say:
> 1. Added a URL-prefix property for `https://amaplants.com/` and pasted the HTML tag code into Yoast → Site connections → Google.
> 2. Verified, so I removed the code from Yoast to keep my head section tidy.
> 3. Submitted `sitemap_index.xml`; status is Success.
> 4. Imported the site into Bing Webmaster Tools.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** b
**Explanation:** Search Console periodically checks that your verification token is still there. If it's removed, you'll be notified and, after a grace period, lose access. Keep the tag (or DNS record) in place for as long as you use the property.
**Hint:** Does verification happen just once?

### Q7. (review: m05-l01) In URL Inspection, Kemi's new post shows **URL is not on Google**. Which statement is correct?
- a) The post has been penalised and must be rewritten from scratch
- b) It isn't indexed yet; the details say why, so she can fix it or request indexing
- c) Her whole site is blocked from Google and needs a reconsideration request
- d) URL Inspection only works for sites over 100 pages, so she can ignore it

**Answer:** b
**Explanation:** URL Inspection gives the definitive status for one URL and the reason (discovery, crawl, indexing allowed?). A new post often just hasn't been crawled yet. If the reason is `noindex` or a blocked crawl, fix it first. It isn't a penalty, and it says nothing about the rest of the site.
**Hint:** One URL, one reason.
