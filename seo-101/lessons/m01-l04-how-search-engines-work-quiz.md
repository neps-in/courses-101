# M01.L04 Quiz — How Search Engines Work: Crawling, Indexing and Ranking

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Each question is tagged with the objective it tests (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-03 against Google Search Central ("In-depth guide to how Google Search works", "Googlebot").

### Q1. Google's own guide says Search works in three stages. What are they? *(O1 · recall)*
- a) Submitting, approving and publishing
- b) Discovering, linking and ranking
- c) Rendering, caching and advertising
- d) Crawling, indexing and serving results

**Answer:** d
**Explanation:** Google describes three stages: crawling (downloading pages), indexing (analysing and storing them) and serving search results (returning the most relevant ones). This course splits them into five steps (discover, crawl, render, index, rank & serve) so you can check each one separately.
**Hint:** Fetch, store, show.

### Q2. How does Google discover most new pages? *(O2 · recall)*
- a) Site owners must submit every new page by hand before it can appear
- b) By following links from pages it already knows, plus sitemaps
- c) Web hosts send Google a list of every new page they publish
- d) Google checks every possible web address on the internet daily

**Answer:** b
**Explanation:** Google's guide says there's no central registry of web pages. Google finds most new pages by following links from pages it already knows, and also from sitemaps that site owners submit. Submitting by hand isn't required, which is why internal links matter so much.
**Hint:** There's no central list of all web pages.

### Q3. You open DevTools' Network tab, reload your blog post and see status **200** on the first "document" row. What does that tell you? *(O2 · recall)*
- a) The server returned the page successfully, so it can be crawled
- b) The page is indexed in Google and will appear in search results
- c) The page has moved, so browsers are sent to a different address
- d) The page ranks on the first page of Google for its main keyword

**Answer:** a
**Explanation:** 200 means "OK, here's the page". It's what a page needs before it can be indexed, but it doesn't prove the page *is* indexed or ranks. Google doesn't index every page it crawls. A redirect would show 301 or 302.
**Hint:** A status code describes the server's reply, not Google's decision.

### Q4. Nila Coffee publishes a "Cold brew guide". It returns 200 and has great content, but no page links to it and it isn't in the sitemap. Where is it most likely stuck? *(O3 · scenario)*
- a) At indexing, because Google thinks the content is low quality
- b) At rendering, because Google can't run the page's JavaScript
- c) At discovery, because Google has no way to learn the URL exists
- d) At serving, because the guide doesn't match what people search for

**Answer:** c
**Explanation:** Google finds pages mainly through links and sitemaps. With neither, it may never learn the URL exists, so later steps never happen. The fix is to link to it from related pages (and the menu or blog index) and make sure it's in the sitemap. Rewriting the content wouldn't help yet.
**Hint:** Always check the earliest step first.

### Q5. Kavya's "Workshops" page shows a big "Page not found" message, but DevTools shows status **200**. What is this, and why is it a problem? *(O2, O3 · scenario)*
- a) A redirect: Google will move the page to a new address automatically
- b) A soft 404: the server says "OK" for a page that doesn't really exist
- c) A server error: Google will stop crawling the whole site until it's fixed
- d) A canonical: Google will choose this page over the real workshop page

**Answer:** b
**Explanation:** When a page says "not found" but the server answers 200, Google may treat it as a real page or flag it as a soft 404. A missing page should return 404 (or 410) so search engines know it's gone. You'll fix these in Module 6.
**Hint:** The message and the status code disagree.

### Q6. A learner writes these notes after this lesson. Which line contains the mistake? *(O1 · spot-the-error)*
- a) "Google renders pages with a recent version of Chrome, so it can run JavaScript."
- b) "Results can differ by person, because location, language and device matter."
- c) "If two URLs show the same content, Google groups them and picks a canonical."
- d) "If my page follows Google's guidelines, Google guarantees it will be indexed."

**Answer:** d
**Explanation:** Google says it "doesn't guarantee that it will crawl, index, or serve your page, even if your page follows the Google Search Essentials." Following the guidelines improves your chances; it doesn't guarantee anything. The other lines match Google's guide.
**Hint:** Does Google guarantee anything at all?

### Q7. In Lesson 1.3, Tomás's `site:` search showed 40 pages. Why shouldn't he report "exactly 40 pages are indexed" to his manager? *(review: m01-l03 · recall)*
- a) `site:` is a sample of the index, not a full count; Search Console gives exact data
- b) `site:` only counts pages that have ads, so it misses all of the organic pages
- c) `site:` shows the pages Google plans to crawl next, not the pages it has stored
- d) `site:` results are always out of date by about one year, so the count is too old

**Answer:** a
**Explanation:** Google's documentation says the `site:` operator doesn't necessarily return all indexed URLs. It's a quick sample. For exact indexing numbers, use Search Console's Page indexing report, which you'll set up in Lesson 1.8.
**Hint:** Quick sample versus exact report.
