# M13 Cheat Sheet — SEO Tools and WordPress SEO
> One page from Module 13. Facts and prices checked 2026-11-09; tools, plugins and prices change often, so recheck vendors' pages before relying on them.

## Screaming Frog settings by task
| Task | Free (500 URLs/crawl) | Licence (£199/yr per user) |
|---|---|---|
| Broken links, redirects, chains | ✅ Response Codes | ✅ |
| Titles, meta, H1, alt text, directives, canonicals, hreflang, sitemaps | ✅ tabs + filters | ✅ |
| Export | ✅ per filter + Bulk Export (export before closing) | ✅ + saved crawls |
| Speed, user agent, robots.txt handling | ❌ defaults (Respect robots.txt, 5 threads, auto throttle in v25) | ✅ (use responsibly) |
| JavaScript rendering | ❌ text only | ✅ |
| Custom search / extraction (XPath, CSS, Regex) | ❌ | ✅ |
| Search Console, GA4, PSI data | ❌ | ✅ (APIs free; connector licensed) |
| Crawl > 500 URLs, compare crawls, schedule | ❌ crawl by section | ✅ |

- Own site or permission only. A Googlebot user agent ≠ Googlebot; use URL Inspection.

## Second-opinion audits
| | Ahrefs Free Site Audit | Bing Site Scan |
|---|---|---|
| Access | Verified sites | Verified in Bing Webmaster Tools |
| Limit | 5,000 credits/month per project (only internal 200 HTML pages count) | Not published |
| Extras | Executes JavaScript; errors/warnings/notices; bulk export | Robots.txt tester, URL inspection, recommendations, AI Performance (preview) |

**Prioritise:** merge tools into one Issues tab → bucket **now** (hurts visitors or key-page indexing) / **soon** / **note** → ignore health scores; check notices too.

## One-page check (DevTools)
View Source (server HTML) → Elements (after JavaScript) → Disable JavaScript → Network with **Preserve log** (status, every hop) → Response headers (`x-robots-tag`, `link rel=canonical`, `cache-control`, `age`). Web Vitals extension retired (Chrome 132): use Performance panel and PSI. Few, trusted extensions.

## SEO plugin set-up checklist
- [ ] **One** SEO plugin (Yoast, Rank Math or AIOSEO): keep current → agency standard → free redirects needed (Rank Math) → clearest.
- [ ] Title and meta templates per post type and taxonomy; key pages written by hand.
- [ ] Sitemap on; only indexable types; `/wp-sitemap.xml` replaced; one submitted.
- [ ] Schema: Organization or Person, name, logo; one graph.
- [ ] Breadcrumbs on **and visible**; match `BreadcrumbList`.
- [ ] Archive `noindex` per Lesson 5.2; excluded from sitemap.
- [ ] Redirect tool: Rank Math free, Yoast Premium, AIOSEO Pro, or free Redirection plugin.
- [ ] Verified outside WordPress: View Source, RRT, sitemap URL, DevTools 301 → 200.

## WordPress traps
1. Attachment pages: off for new installs since 6.4; upgraded sites keep them → redirect (file or parent).
2. Thin archives → Lesson 5.2 decisions.
3. `/?s=` search pages: core `noindex`; don't block in robots.txt.
4. Two SEO plugins → doubled tags; keep one.
5. Two sitemaps → submit one.
6. Stale cache → purge after SEO changes.
7. Bloat → "number of plugins and their performance": measure on staging.

## Tool comparison (2026-11-09, US prices)
| Tool | Entry price | Buy when |
|---|---|---|
| Screaming Frog licence | £199/yr | Sites > 500 URLs, JS, migrations, saved comparisons |
| Ahrefs | Starter $29/mo; Lite $129/mo | Weekly competitor and link research |
| Semrush SEO | $139/mo ($117.33 annual) | Weekly keyword/competitor work, tracking |
| Moz Pro | $49/mo entry; Standard $99/mo | Single-site research and tracking |
| Yoast Premium | $118.80/yr ex VAT | Need its redirect manager or extras |

**Four questions:** what job? how often? value > price? cheapest tool that does it? Rare job → trial or one month.

## Never
- Run two SEO plugins.
- Report a health score as site health.
- Ignore robots.txt or raise threads on others' sites.
- Block search pages in robots.txt.
- Delete plugins by count.
- Quote a price without currency and date.
