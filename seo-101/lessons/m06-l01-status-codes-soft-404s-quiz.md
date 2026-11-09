# M06.L01 Quiz — Status Codes, Soft 404s and the "Can It Be Indexed?" Check

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google's status-codes, crawling-errors and crawl-budget docs, and the Page indexing and URL Inspection help pages.

### Q1. What does Google say about a page that returns 200? *(O1 · recall)*
- a) It's indexed within a day, as long as it's in the sitemap
- b) It's ranked higher than a page that returns a 301 redirect
- c) It's sent on for indexing, but indexing isn't guaranteed
- d) It's always shown in Search, whatever the page contains

**Answer:** c
**Explanation:** "For Google Search, an HTTP 2xx (success) status code doesn't guarantee indexing." The page goes on to the indexing systems, which may or may not index it.
**Hint:** Success isn't a promise.

### Q2. How does Google treat a 410 compared with a 404? *(O1 · recall)*
- a) The same: all 4xx errors except 429 are treated alike
- b) A 410 removes the page within an hour; a 404 takes a year
- c) A 410 is a penalty, so it lowers the rankings of the site
- d) A 404 keeps the page indexed, while a 410 removes it from Search

**Answer:** a
**Explanation:** "All 4xx errors, except 429, are treated the same". Both mean the content doesn't exist, and indexed URLs are removed.
**Hint:** Which 4xx code is the exception?

### Q3. Which is a soft 404? *(O2 · recall)*
- a) A page that returns 404 and shows a friendly "Oops!" message
- b) A page that says "not found" but returns a 200 status code
- c) A page that returns 503 for two hours during an upgrade
- d) A page that returns 301 to a very similar product page

**Answer:** b
**Explanation:** A soft 404 is "a page telling the user that the page does not exist and also a 200 (success) status code". A friendly 404 page with a real 404 code is fine.
**Hint:** The code and the page disagree.

### Q4. Nila removes a filter-paper product. A very similar paper is still on sale. What should the old address do? *(O2 · scenario)*
- a) Redirect to the home page, so that visitors never see an error
- b) Return 200 with a short "Sorry, this is gone" message on the page
- c) Return 503, so that Google keeps the old page in its index
- d) 301 to the similar paper's page, then update internal links

**Answer:** d
**Explanation:** "If your page has moved or has a clear replacement on your site, return a 301". A home-page redirect or a 200 "gone" page would be a soft 404.
**Hint:** Is there a clear replacement?

### Q5. Tomás's shop is down for 3 hours for an upgrade. What should the server return? *(O1 · scenario)*
- a) 503, which Googlebot retries for about 2 days
- b) 404, so Google knows the pages are missing for now
- c) 200 with a blank page, so the pages stay indexed
- d) 403, so that Googlebot stops visiting until it's back

**Answer:** a
**Explanation:** Google says to return "503 or 429 … temporarily" and "Googlebot will retry these URLs for about 2 days". A 404 would remove pages, and 403 shouldn't be used to limit crawling.
**Hint:** Which code means "back soon"?

### Q6. A page returns 200, isn't blocked and has no `noindex`, but its canonical points to another URL. Which check fails? *(O3 · scenario)*
- a) Status, because a canonical changes the status code to 301
- b) None, because canonicals are only used on mobile pages
- c) Crawl allowed, because a canonical blocks Googlebot's visit
- d) The correct canonical check, covered in depth in Lesson 6.3

**Answer:** d
**Explanation:** Check 4 is "correct canonical": it should point to the page itself or the version you want indexed. A canonical doesn't change the status code or block crawling.
**Hint:** Which of the six checks mentions `canonical`?

### Q7. Spot the error: "The Page indexing report lists 30 Not found (404) pages we deleted on purpose, so we must redirect them all to fix our rankings." *(O2 · spot the error)*
- a) The 404s must be redirected, but to the home page, not elsewhere
- b) The 404s should be changed to 200, so that the pages stay listed
- c) 404s for removed pages are normal; fix only ones you link to
- d) The 404s must be deleted from Search Console with the URL tool

**Answer:** c
**Explanation:** "404 responses are not necessarily a problem, if the page has been removed without any replacement." Google recommends "fixing only 404 errors that you link to yourself or list in a sitemap."
**Hint:** Are these pages meant to exist?

### Q8. Spot the error: "I changed my published WordPress page's slug, so the old address redirects automatically." *(spot the error · review: m05-l05)*
- a) WordPress redirects old page slugs only after a 30-day wait
- b) WordPress redirects published posts, but not pages; add a 301
- c) WordPress never redirects anything, even published blog posts
- d) Pages redirect automatically, but only on Plain permalinks

**Answer:** b
**Explanation:** As you saw in Lesson 5.5, WordPress stores old slugs only for "published, non-hierarchical objects", meaning posts. A page's old address returns 404 unless you add a redirect.
**Hint:** In Lesson 5.5, is a page hierarchical?
