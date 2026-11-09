# M12 Cheat Sheet — Advanced Technical SEO
> One page from Module 12. Facts checked 2026-11-09; rich results and thresholds change, so recheck Google's docs before relying on them.

## Core Web Vitals
| Metric | Measures | Good | Poor | Top causes |
|---|---|---|---|---|
| **LCP** | Largest image/text/video shown | ≤2.5 s | >4 s | Lazy-loaded or late-found hero; huge image; slow server; render-blocking code |
| **INP** | Slowest click/tap/key response | ≤200 ms | >500 ms | Long tasks; third-party and builder scripts |
| **CLS** | Unexpected layout shifts | ≤0.1 | >0.25 | Images/embeds/ads without dimensions; injected content; web fonts |

- Judged at the **75th percentile**, mobile and desktop separately; pass = all three good.
- **Field** (CrUX, 28 days) decides; **lab** (Lighthouse, one run) explains. Lab has no INP; TBT is the clue.
- Small sites often have **no field data**: say so, use origin data or labelled lab data.
- Search Console: URL groups; status = worst metric; "Need improvement"; Start Tracking after fixes.
- Don't chase a perfect score; relevance comes first. FID is retired (March 2024).

**Fix brief:** template · metric (field/lab, date) · evidence · cause (source) · fix · owner · check (3 lab runs + 28-day field).

## Mobile and HTTPS
- Google indexes the **mobile version**: same content, headings, title, meta, robots, structured data. Accordions OK.
- No primary content that loads only on tap. Mobile-Friendly Test removed (2023): use URL Inspection, RRT, real phones.
- HTTPS everywhere: valid certificate, one 301 from HTTP, HTTPS canonicals/links/sitemaps, no mixed content.
- HSTS: browsers use HTTPS only; preload needs 1-year max-age + includeSubDomains; hard to undo; ask the host.

## JavaScript
- Google renders later with headless Chromium; it never clicks, scrolls or grants permissions.
- Links: `<a href="…">` only. Content: in the HTML or loaded in the viewport. Infinite scroll: paginated URLs.
- Never rely on JS to remove `noindex` or set canonicals.
- Check: View Source (source) vs RRT / URL Inspection live test (rendered + screenshot).
- Prefer SSR or static; dynamic rendering is a workaround.

## Structured data
| Type | Required | Key rule |
|---|---|---|
| Organization | none | Home/about page; same identity as listings |
| Article / BlogPosting | none | Dates and headline match the page |
| BreadcrumbList | ≥2 items | Match visible breadcrumb; desktop display only since 2025 |
| Product: merchant listing | name, image, Offer | Price > 0; ISO 4217 currency (INR, EUR); only where you sell |
| Product: product snippet | name + review/rating/offer | Pages where people can't buy |
| LocalBusiness | name, address | Matches profile; no self-serving stars |

- Only visible, true content; all required properties; no guarantee of rich results.
- Manual action removes rich results, not rankings. Not required for AI search.
- **Retired:** FAQ (7 May 2026), HowTo (2023), Course Info, Claim Review, Estimated Salary, Learning Video, Special Announcement, Vehicle Listing (2025). Book Actions kept.
- **SMV** = valid schema.org? **RRT** = eligible for Google rich results? Use both.

## International (hreflang rules)
1. One URL per language/country version (subfolders usually best; never parameters).
2. Every version lists **itself and all others**.
3. **Return links** both ways, or the pair is ignored.
4. **Fully-qualified** `https://` URLs.
5. ISO 639-1 language + optional ISO 3166-1 region (`en-GB`, not `en-UK`).
6. One method (HTML, HTTP header or sitemap).
7. `x-default` for a selector page.
8. Self-canonical on each version; never canonical across languages.
9. No IP or browser-language redirects; use links or a banner.

## Facets and crawl budget
- Unneeded filters: robots.txt disallow. Useful filters: clean, consistent URLs. Empty combinations: 404.
- Not `noindex` (still crawled); canonical/nofollow weaker; URL Parameters tool gone (2022).
- Crawl budget: only for 1M+ pages, or 10k+ pages changing daily. Everyone: fix soft 404s, chains, slow servers.
- Verify Googlebot in logs: reverse DNS, then forward DNS.

## Never
- Pay for a score instead of a real-user fix.
- Lazy-load the hero image.
- Hide content on phones.
- Build links with `<span onclick>`.
- Mark up what isn't on the page, or your own review stars.
- Redirect visitors by IP.
