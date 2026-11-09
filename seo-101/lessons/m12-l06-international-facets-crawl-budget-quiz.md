# M12.L06 Quiz — International Sites, Faceted Navigation and Crawl Budget

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Search Central (multi-regional sites, localized versions, locale-adaptive pages) and Google Crawling Infrastructure (faceted navigation, crawl budget, verifying Google's crawlers).

### Q1. What must each language version in an hreflang set list? *(O2 · recall)*
- a) Only the other versions, never the page itself
- b) Itself and all the other language versions
- c) Only the x-default page and the home page
- d) The top three versions by monthly traffic

**Answer:** b
**Explanation:** "Each language version must list itself as well as all other language versions."
**Hint:** Including me.

### Q2. How does Google decide what language a page is in? *(O1 · recall)*
- a) From the `lang` attribute in the HTML tag
- b) From the hreflang tags in the page's head
- c) From the server's country and IP address
- d) From the visible content of the page itself

**Answer:** d
**Explanation:** "Google uses the visible content of your page to determine its language. We don't use any code-level language information such as lang attributes, or the URL."
**Hint:** What readers see.

### Q3. Which sites does Google's crawl budget guide say it's for? *(O3 · recall)*
- a) Very large sites, or 10k+ pages changing daily
- b) Every site with more than 100 published pages
- c) Any site using WordPress or another CMS
- d) Sites that have recently moved to HTTPS

**Answer:** a
**Explanation:** "Large sites (1 million+ unique pages)" changing weekly, or "Medium or larger sites (10,000+ unique pages) with very rapidly changing content". Otherwise "you don't need to read this guide."
**Hint:** Big or fast.

### Q4. Nila's developer wants to redirect UK IP addresses to `/en-gb/` automatically. What's the problem? *(O2 · scenario)*
- a) UK visitors will see prices in rupees by mistake
- b) Redirects are only allowed for subdomains
- c) Googlebot is US-based, so it may miss versions
- d) It's fine, as long as hreflang tags are also there

**Answer:** c
**Explanation:** Googlebot's IPs "appear to be based in the USA", and Google says "don't redirect based on what you think the user's language may be". Use a banner or link.
**Hint:** Where does Googlebot come from?

### Q5. Tomás's shop filters create thousands of URLs nobody searches for. What does Google suggest? *(O3 · scenario)*
- a) Add `noindex` to every filter page to save crawling
- b) Use the URL Parameters tool in Search Console
- c) Disallow those filter URLs in robots.txt
- d) Add `rel="canonical"` to every filter link only

**Answer:** c
**Explanation:** "Use robots.txt to disallow crawling of faceted navigation URLs." `noindex` is still crawled; canonical and nofollow "are generally less effective"; the URL Parameters tool was retired in 2022.
**Hint:** Stop the crawl.

### Q6. Kavya's yoga studio site is in English only, for Chennai. What does she need for hreflang? *(O1 · scenario)*
- a) A full set for every Indian language just in case
- b) Nothing: one language and one market needs none
- c) An x-default tag on every page of the site
- d) Separate ccTLDs for each neighbourhood she serves

**Answer:** b
**Explanation:** hreflang is for localized versions of the same content. With one version, there's nothing to link. Write "No hreflang needed" in the plan.
**Hint:** One version.

### Q7. Spot the error. Nila's `/ta-in/` page has `<link rel="alternate" hreflang="en-UK" href="/en-gb/french-press/">`. What's wrong? *(O2 · spot-the-error)*
- a) Invalid region code and a relative URL
- b) Tamil pages may not link to English ones
- c) hreflang must be in the body, not the head
- d) Nothing; Google corrects small mistakes

**Answer:** a
**Explanation:** The region must be ISO 3166-1 Alpha 2 (`GB`), and "Alternate URLs must be fully-qualified, including the transport method (http/https)".
**Hint:** Two slips.

### Q8. Spot the error. *(review: m12-l05)* Kavya's LocalBusiness markup includes her Google reviews widget's 4.9 stars "so we get stars in search". What's wrong?
- a) Nothing; Google reviews are trusted, so it's fine
- b) Stars may only be added to Article markup
- c) The rating must be rounded down to 4.5 first
- d) Self-serving reviews, via a widget, are ineligible

**Answer:** d
**Explanation:** Reviews of a business on its own LocalBusiness markup, including "through an embedded third-party widget (for example, Google Business reviews …)", are "ineligible for star review feature".
**Hint:** Whose reviews, whose site?
