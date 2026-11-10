# M15 Cheat Sheet — SEO Audit, Migrations and the Monthly Routine
> One page from Module 15. Facts checked 2026-11-11. Google publishes no audit order, scoring method or routine: those are course rules. Recheck Google's site-move, Change of Address and pause pages before a real move or closure.

## Scope and baseline
- **A good audit** (Google): "realistic estimates of improvement, and an estimate of the work involved". No guarantees.
- **Discovery:** what's unique · competitors · how search can help · how customers find you.
- **Scope:** goal · 3–5 KPIs · properties (all host variants) · access · date range · free tools · in scope · **out of scope** · deliverables · timeline.
- **Access:** read-only for audits ("only grant read access"). Owner > Full > Restricted.
- **Baseline before any change:** numbers (GSC, GA4; period + last year) · state (Page indexing, CWV, manual actions, security, crawl count) · context (seasons, changes, updates, anomalies). Date, filters, source on every figure.

## The audit order (course rule)
| Step | Check | Free tool |
|---|---|---|
| 1 Indexing | Key pages indexed? Why not? | Page indexing, URL Inspection |
| 2 Crawling + status | 200s, redirects, robots.txt, sitemap | Screaming Frog (500 URLs), robots.txt report |
| 3 Architecture | Click depth, orphans, internal links | Screaming Frog, Content audit |
| 4 On-page + content | Intent, titles, cannibalisation, helpfulness | Screaming Frog, Performance, keyword map |
| 5 Page experience | HTTPS, mobile, CWV | PSI, CWV report |
| 6 Structured data | Valid, eligible, matches page | Rich Results Test |
| 7 Links | Who links; risky patterns | GSC Links, Ahrefs Free |
| 8 Local + international | Profile, NAP, hreflang | Business Profile, crawl |
| 9 E-E-A-T + policies | Trust, spam policies, manual actions, security | Module 14 tabs |

**Technical requirements:** not blocked · HTTP 200 · indexable content ("most sites pass"). **Drop:** meta keywords · keyword in URL · word count · subdomain vs subfolder · duplicate "penalty". **Keep as People:** heading order, alt text, link text. **Group by template.**

## Prioritise and plan
1. **Gate:** template/sitewide `noindex`, robots block on key sections, 5xx, hacked, manual action → Days 1–30, unscored.
2. **Score 1–3, add, ties → Value:** Value (how much the pages matter) · Chance (3 Google requirement broken · 2 documented best practice · 1 tool warning) · Effort (3 setting · 2 a day/template · 1 developer/weeks).
3. **90 days:** 1–30 blocking + quick wins · 31–60 template fixes · 61–90 bigger jobs · **won't do** in writing. Each fix: owner, due, completion check, **after-check ~4 weeks** later. Space out changes to one template.

## Report and tickets
- **Page one:** headline · 3–5 findings in business language · plan in 3 lines · caveats. Then scope + baseline, findings (evidence, source + date, V/C/E), checked and fine, appendix.
- **Ticket:** one task · Background · Work to be done · How to reproduce · Completion criteria (free-tool test with a pass result) · owner · due · To do → In progress → Pending review → Done · after-check.

## Migration checklist
| Before | Launch | After |
|---|---|---|
| Baseline; crawl CSV; full old-URL list (sitemap, crawl, analytics, Links, CMS, images, PDFs) | Redirects on (1 hop, 301) | List-mode crawl of old URLs → 301 → 200, right target |
| 1:1 map tested on staging; dropped pages 404/410 | Dev `noindex`/robots blocks off | Page indexing + Crawl stats, both properties |
| Canonicals, internal links, hreflang, structured data updated | New sitemap submitted | GA4 Realtime + key events |
| GA4 tag, verification, all variants verified | Change of Address (domain moves only) | Update profiles, ads, top linking sites |

- **One kind of change at a time**, in a quiet period; small sites move all URLs together.
- **Change of Address:** domain/subdomain moves only · owner of both · each variant incl. `www` · after redirects · not for HTTPS, www or paths · 180-day window · don't chain moves.
- **Keep redirects ≥ 1 year, ideally for good; renew the old domain.** Settling takes "a few weeks or more". Don't roll back.
- **No URL change** (host/CDN): test with `noindex` on a temp hostname · don't block Googlebot · lower DNS TTL a week ahead.

## Pausing a site
Keep it online and **limit functionality** (bookings/cart off · `data-nosnippet` banner · structured data + Profile hours; "Temporarily closed" 7+ days). Urgent 1–2 days: **503 + Retry-After**, robots.txt stays **200**. Longer: **200 placeholder** home page. **Never** 403/404/410, `noindex` or Removals. Out of stock → keep the page.

## Monthly routine (course rule, ~90 min)
| When | Do |
|---|---|
| Weekly | Search Console messages; sudden Performance changes |
| Monthly | Steps 1, 2, 9 · CWV · updates + data anomalies · due after-checks · tickets · annotations · one-page report + dashboard |
| Quarterly | Content audit · re-score · links + Profile · new 90-day plan |
| Yearly | Full nine-step audit · renew domains (old ones too) · old redirects still work |

## Hiring help: ask
Previous work and success stories · follow Search Essentials? · expected results and timeframe · how success is measured · industry and local experience · time in business · will you share every change and the reasoning? · cite Google docs? · AEO/GEO advice aligned with Google's guidance? · tools aren't endorsed by Google · read-only access first · walk away from guarantees.
