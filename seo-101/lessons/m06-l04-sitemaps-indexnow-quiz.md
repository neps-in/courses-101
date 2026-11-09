# M06.L04 Quiz — XML Sitemaps and IndexNow

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google's sitemap docs and 2023 ping post, the Sitemaps report help, Bing's 2025 sitemap post, indexnow.org, and WordPress 7.1 source.

### Q1. Which sitemap tags does Google say it ignores? *(O2 · recall)*
- a) `<loc>` and `<lastmod>`, because Google finds pages by links only
- b) `<priority>` and `<changefreq>`, whatever values they contain
- c) `<lastmod>` only, because every site's dates are unreliable
- d) `<loc>` only, if the sitemap also has a sitemap index file

**Answer:** b
**Explanation:** "Google ignores <priority> and <changefreq> values." It uses `<lastmod>` if it's "consistently and verifiably" accurate. Bing ignores `changefreq` and `priority` too.
**Hint:** Two optional tags.

### Q2. Which search engines does indexnow.org list as supporting IndexNow? *(O3 · recall)*
- a) Google and Bing only, because they built the protocol together
- b) Google, Bing and Yahoo, the three biggest English search engines
- c) Bing, Naver, Seznam.cz, Yandex and Yep, but not Google
- d) Every search engine, because IndexNow is now an internet standard

**Answer:** c
**Explanation:** The home page says it "has support from Microsoft Bing, Naver, Seznam.cz, Yandex, Yep". Its engine list adds the Internet Archive and Amazonbot. Google isn't listed.
**Hint:** Which big engine is missing?

### Q3. What should a sitemap contain? *(O1 · recall)*
- a) Every URL on the site, including redirects, so Google can map it all
- b) Only the home page, because Google finds every other page from there
- c) Only new posts, because older pages are already known to Google
- d) Absolute, canonical, 200 URLs that you want in search results

**Answer:** d
**Explanation:** "Include the URLs in your sitemap that you want to see in Google's search results", and "Use fully-qualified, absolute URLs". Redirects, `noindex` pages and duplicates don't belong.
**Hint:** Only pages you want shown.

### Q4. Every `lastmod` in Nila's sitemap shows today's date, but most pages haven't changed. What's the risk? *(O2 · scenario)*
- a) Google may stop trusting her dates; fix them or leave them out
- b) Google will index every page again today, which boosts rankings
- c) Google will remove the whole sitemap from Search Console at once
- d) There's no risk, because Google ignores the `lastmod` tag entirely

**Answer:** a
**Explanation:** Google uses `lastmod` only if it's accurate: "eventually we're not going to believe you anymore". "it's fine to leave out lastmod" if you can't be accurate.
**Hint:** Would you trust a clock that always says "now"?

### Q5. Tomás's sitemap lists a thank-you page that has a `noindex`. What should he do? *(O1 · scenario)*
- a) Keep it listed, because a sitemap entry overrides the `noindex` tag
- b) Remove it from the sitemap, so his signals no longer disagree
- c) Add `<priority>0.0</priority>`, so Google knows it's not important
- d) Block it in robots.txt as well, so that Google can't find it at all

**Answer:** b
**Explanation:** A sitemap says "this page should be in search"; the `noindex` says the opposite. Leave `noindex` pages out. `priority` is ignored, and blocking it would hide the `noindex` (Lesson 6.2).
**Hint:** Which signal matches what he wants?

### Q6. Kavya's IndexNow request returns 202. What does that mean? *(O3 · scenario)*
- a) The page has been indexed by Bing, Google and all other engines
- b) The page was rejected because her key is longer than 8 characters
- c) The URL was received, and her key file is still being validated
- d) The page will appear at the top of Bing's results within the hour

**Answer:** c
**Explanation:** 202 means "URL received. IndexNow key validation pending." Even a 200 only means "the search engine has received your URL", and "Submitting a URL does not guarantee immediate indexing."
**Hint:** Received isn't indexed.

### Q7. Spot the error: "Our plugin pings Google after every post, so we don't need to submit our sitemap in Search Console." *(O2 · spot the error)*
- a) Pinging works, but only if the plugin pings Bing at the same time
- b) Pinging works, but only for sites with fewer than 500 pages in total
- c) Pinging works, but only for sitemaps that have no `lastmod` dates
- d) Google's ping endpoint was retired; submit in Search Console instead

**Answer:** d
**Explanation:** Since 2023, pings to Google's endpoint "will result in a 404 error". "You can still submit your sitemaps through robots.txt and Search Console".
**Hint:** What happened in 2023?

### Q8. Spot the error: "Google picked a different canonical than ours, so our canonical tag must be broken — tags are rules Google must follow." *(spot the error · review: m06-l03)*
- a) Canonical tags are hints; check that all signals agree and pages match
- b) The tag must be moved into the page footer, where Google reads it
- c) The tag is broken, and should be replaced with a `noindex` on duplicates
- d) Google only follows canonical tags on sites with over 500 pages

**Answer:** a
**Explanation:** As you saw in Lesson 6.3, "indicating a canonical preference is a hint, not a rule." Make the canonical tag, sitemap, internal links and redirects agree, and check the pages are really similar.
**Hint:** In Lesson 6.3, hint or rule?
