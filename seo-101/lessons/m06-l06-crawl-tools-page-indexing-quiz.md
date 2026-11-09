# M06.L06 Quiz — Crawl Your Site: Screaming Frog, Page Indexing and URL Inspection

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against the Page indexing and URL Inspection help pages, Screaming Frog's product, pricing and user guide pages, and the Bing Webmaster Blog.

### Q1. What's the limit of Screaming Frog's free version? *(O1 · recall)*
- a) It can crawl only the home page and the pages linked from it
- b) It can crawl 5,000 URLs, but only on sites built with WordPress
- c) It can crawl unlimited URLs, but only once a month per website
- d) Up to 500 URLs per crawl, and crawls can't be saved to reopen

**Answer:** d
**Explanation:** "The free version is restricted to crawling up to 500 URLs in a single crawl." Saving and opening crawls is a paid feature, so export what you need.
**Hint:** A three-digit number.

### Q2. According to Google, what does "Not indexed" in the Page indexing report mean? *(O2 · recall)*
- a) It's not necessarily bad; many reasons are intended
- b) The site has a penalty, which must be fixed at once
- c) Every one of those pages must be fixed and validated
- d) The pages were deleted from the site by Google itself

**Answer:** a
**Explanation:** "Remember that Not indexed is not necessarily bad." Google's goal is "the canonical version of every important page indexed".
**Hint:** Read the reasons first.

### Q3. How long does Validate fix typically take, and how often should you click it? *(O2 · recall)*
- a) A few minutes; click it again each hour until it says Passed
- b) Up to about two weeks; click it once, then wait for the result
- c) Exactly 90 days; click it every week to keep the check active
- d) One day; click it once for every example URL in the issue list

**Answer:** b
**Explanation:** "Validation typically takes up to about two weeks". "Do not click Validate fix again until validation has succeeded or failed."
**Hint:** Patience.

### Q4. Kavya's report shows 40 pages as **Alternate page with proper canonical tag**. What should she do? *(O2 · scenario)*
- a) Remove the canonical tags, so that all 40 pages can be indexed
- b) Add `noindex` to all 40 pages, so they leave the report quickly
- c) Nothing: Google says there's nothing you need to do for these
- d) Click Request Indexing for each of the 40 pages, one at a time

**Answer:** c
**Explanation:** Google's help: "This page correctly points to the canonical page, which is indexed, so there is nothing you need to do."
**Hint:** Is it working as intended?

### Q5. Tomás's crawl shows 25 internal links pointing to URLs that return 301. What should he do? *(O1 · scenario)*
- a) Nothing, because redirects pass visitors along, so links are fine
- b) Change the redirects to 302s, so the old URLs stay indexed instead
- c) Delete the 25 pages that the redirected links are pointing towards
- d) Update the links to point straight at the final URLs instead

**Answer:** d
**Explanation:** Screaming Frog's guidance: "Ideally all internal links would be to canonical resolving URLs, and avoid linking to URLs that redirect." Google also says to replace internal links after URL changes (Lesson 6.5).
**Hint:** Skip the hop.

### Q6. Nila's crawl shows no problems, but Search Console reports **Duplicate, Google chose different canonical than user**. Why can both be true? *(O3 · scenario)*
- a) Google weighs signals the crawler can't see, like outside links
- b) Screaming Frog is broken, and must be reinstalled before trusting
- c) Search Console is wrong, and the reason will vanish by tomorrow
- d) Canonicals only count on sites with more than 500 crawled pages

**Answer:** a
**Explanation:** A crawler sees only your site's own signals. Google also weighs links from other sites, the sitemap and content similarity, and treats canonicals as "a hint, not a rule" (Lesson 6.3).
**Hint:** Two views of the same site.

### Q7. Spot the error: "Our report lists 12 **Not found (404)** pages for products we removed last year, so we must fix all 12." *(O2 · spot the error)*
- a) 404s must all be redirected to the home page within a month
- b) 404s must be fixed only if the products had over 100 sales
- c) They're fine unless you link to them or list them in a sitemap
- d) 404s must be changed to 200 pages saying the product is gone

**Answer:** c
**Explanation:** Google recommends "fixing only 404 errors that you link to yourself or list in a sitemap." A 200 "gone" page would be a soft 404 (Lesson 6.1).
**Hint:** Did they remove them on purpose?

### Q8. Spot the error: "We redirect `/old-a/` to `/old-b/`, which redirects to `/new/`. That's fine, because Google follows 10 hops." *(spot the error · review: m06-l05)*
- a) Chains are fine, but only if every hop in the chain uses a 302
- b) Point `/old-a/` straight at `/new/`; the course aims for one hop
- c) Chains are fine, but only on sites that have fewer than 500 pages
- d) Delete `/new/`, so the chain ends at `/old-b/` with a single hop

**Answer:** b
**Explanation:** As you saw in Lesson 6.5, Google says "Avoid chaining redirects" and advises "redirecting to the final destination directly". The course's #8 asks for a single hop.
**Hint:** In Lesson 6.5, where should the first URL point?
