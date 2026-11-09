# M06.L05 Quiz — Redirects, Site Structure and Crawl Depth

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google's redirects, site-move, URL structure, link and ecommerce structure docs.

### Q1. How does Google treat a 302 redirect, compared with a 301? *(O1 · recall)*
- a) The same: both make the target the canonical straight away
- b) As temporary: the old URL usually stays in search results
- c) As an error: 302s are reported as soft 404s in Search Console
- d) As stronger: a 302 moves links faster than a 301 does

**Answer:** b
**Explanation:** Temporary redirects "Show the source page in search results". Permanent ones "Show the new redirect target in search results".
**Hint:** Which one says "moved for now"?

### Q2. What does Google say about how long to keep redirects after a move? *(O2 · recall)*
- a) Remove them after a week, once Googlebot has seen them once
- b) Keep them only until the new URLs appear in Search Console
- c) Keep them for exactly 90 days, then switch them all to 404s
- d) Keep them as long as possible, generally at least a year

**Answer:** d
**Explanation:** "Keep the redirects for as long as possible, generally at least 1 year." For users, "consider keeping redirects indefinitely."
**Hint:** Think about old links on other sites.

### Q3. How does Google work out the structure of a site? *(O3 · recall)*
- a) From the links between pages, not from the folders in URLs
- b) From the number of slashes in each URL, fewer being better
- c) From the order of URLs in the sitemap, top ones counting most
- d) From the menu labels only, ignoring links inside the content

**Answer:** a
**Explanation:** "Google generally doesn't look at the structure of URLs to work out the structure of a site. Instead, it analyzes the linkages between pages". Order in the sitemap doesn't matter either (Lesson 6.4).
**Hint:** Links or folders?

### Q4. Kavya's old URL goes `/class-schedule/` → `/schedule/` → `/timetable/`. What should she do? *(O2 · scenario)*
- a) Leave it, because Googlebot can follow up to 10 redirect hops
- b) Change both redirects to 302s, so Google keeps the old URL
- c) Point `/class-schedule/` straight at `/timetable/`, in one hop
- d) Delete `/timetable/`, so that the chain stops at `/schedule/`

**Answer:** c
**Explanation:** Google says "Avoid chaining redirects" and advises "redirecting to the final destination directly". The course's #8 asks for one hop.
**Hint:** Point at the final destination.

### Q5. Amara's client deletes 60 posts with no replacements. Where should those URLs go? *(O1 · scenario)*
- a) All to the home page, so visitors always land somewhere useful
- b) Nowhere: let them return 404 or 410, unless one has a close match
- c) All to the blog's main page, with a temporary 302 for each URL
- d) All to a single "Archive" page that lists the site's newest posts

**Answer:** b
**Explanation:** "Don't redirect many old URLs to one irrelevant single URL destination, such as the home page … might be treated as a soft 404 error." Removed content should "return an HTTP 404 or 410".
**Hint:** Is there a close replacement?

### Q6. Tomás's best-selling hammer is five clicks from his home page. What's the quickest useful fix? *(O3 · scenario)*
- a) Move it into a shorter URL folder, such as `/h/`, to lift it
- b) Add it to the sitemap twice, so that Google sees it more often
- c) Add a `noindex` to the category pages between, to cut the clicks
- d) Link to it from the home page and the main tools category page

**Answer:** d
**Explanation:** Google suggests, "if you have a best selling product, consider linking to it from the home page". It uses click depth to judge importance; URL folders and sitemap order don't change it.
**Hint:** Google's own tip for best-sellers.

### Q7. Spot the error: "We added JavaScript redirects for all our changed URLs, because Google treats them exactly like 301s." *(O1 · spot the error)*
- a) JavaScript redirects are fine, but only for sites built with WordPress
- b) JavaScript redirects are fine, but only if they wait five seconds
- c) Google prefers server-side 301s; JavaScript ones may be missed
- d) JavaScript redirects are treated as 404s, so the pages vanish

**Answer:** c
**Explanation:** "Only use JavaScript redirects if you can't do server-side or meta refresh redirects." Google "might never see it if rendering of the content failed."
**Hint:** What's Google's first choice?

### Q8. Spot the error: "We set every sitemap entry's `<priority>` to 1.0, so Google crawls our pages first." *(spot the error · review: m06-l04)*
- a) Google ignores `<priority>`; an honest `lastmod` is what helps
- b) Priority works, but only if every page uses a different value
- c) Priority works, but only when the sitemap is pinged to Google
- d) Priority works, but only for sitemaps with under 500 URLs listed

**Answer:** a
**Explanation:** As you saw in Lesson 6.4, "Google ignores <priority> and <changefreq> values." It uses `lastmod` when it's "consistently and verifiably" accurate.
**Hint:** In Lesson 6.4, which tags are ignored?
