# M07 Cheat Sheet — Fast, Accessible & Search-Ready
*Web Development 101 · Module 7 · checked 2026-11-03*

## Performance & Core Web Vitals (L01)
| Metric | Good | Lab stand-in |
|---|---|---|
| LCP (main content shows) | ≤ 2.5 s | LCP |
| INP (responds to taps; replaced FID 12 Mar 2024) | ≤ 200 ms | TBT |
| CLS (doesn't jump) | ≤ 0.1 | CLS |
Pass = 75% of real visits good. **Field** (CrUX, 28 days; PSI top, Search Console) = verdict; **lab** (Lighthouse) = causes. Lighthouse 13.6 score weights: TBT 30 · LCP 25 · CLS 25 · FCP 10 · SI 10. Measure: mobile, Incognito, **median of 3**, same settings. Insights to read: LCP breakdown, Render-blocking requests, Layout shift culprits, 3rd parties.
Fixes: `<script src="…" defer>` · `width`/`height` on every `<img>` · `fetchpriority="high"` on the hero · overlay banners (`position: fixed`) · remove unused tags. One fix → commit → re-measure.

## Images, fonts & media (L02)
```html
<picture>
  <source type="image/avif" srcset="hero-800.avif 800w, hero-1600.avif 1600w" sizes="(min-width: 800px) 50vw, 100vw">
  <source type="image/webp" srcset="hero-800.webp 800w, hero-1600.webp 1600w" sizes="(min-width: 800px) 50vw, 100vw">
  <img src="hero-800.jpg" srcset="hero-800.jpg 800w, hero-1600.jpg 1600w" sizes="(min-width: 800px) 50vw, 100vw"
       width="1600" height="900" alt="…" fetchpriority="high">
</picture>
```
`srcset` = real file widths · `sizes` = displayed width (default `100vw`) · `alt`/`width`/`height`/`loading`/`fetchpriority` on the `<img>` · largest file ≈ 2× widest display size · hero never `lazy`; below the fold `loading="lazy"` · SVG for logos. Fonts: self-hosted WOFF2, used weights only, `font-display: swap`, fallback `@font-face { src: local("Georgia"); size-adjust: …% }`. Video: `preload="none"` + `poster`; YouTube as a facade (≈3 KB vs ≈540 KB).

## Accessibility, WCAG 2.2 AA (L03)
POUR · criteria at A/AA/AAA · AA = all A + AA · WCAG 3 still a draft. Audit three ways: **tools** (Lighthouse uses axe-core; WAVE/axe) → **keyboard** (skip link, visible focus, logical order, no traps, focus not hidden: `html { scroll-padding-top: 5rem; }`) → **screen reader** (NVDA: H headings, D landmarks, K links, B buttons, F fields, G graphics, NVDA+F7; VoiceOver: VO-U rotor).
| Failure | WCAG | Fix |
|---|---|---|
| Missing/poor alt | 1.1.1 | Purpose, or `alt=""` if decorative |
| Icon button, no name | 4.1.2 | `aria-label`; icon `aria-hidden="true"` |
| No label | 1.3.1, 3.3.2 | `<label for>` (not placeholder) |
| Error only in red | 1.4.1, 3.3.1 | Text + `aria-describedby` |
| Contrast | 1.4.3, 1.4.11 | 4.5:1 text, 3:1 large/UI |
| Focus under sticky header | 2.4.11 | `scroll-padding` |
Log → fix one → re-test the same way → `accessibility.html` with contact. No overlays.

## Technical SEO (L04)
Crawl → index → understand → show.
```
# robots.txt
User-agent: *
Allow: /
Sitemap: https://example.com/sitemap.xml
```
`robots.txt` controls **crawling, not indexing** · `noindex` meta to stay out of results (page must be crawlable) · `<link rel="canonical" href="https://…">` self-referencing, same URL as redirects and sitemap · sitemap: indexable URLs only, honest `lastmod` (priority/changefreq ignored).
JSON-LD: `Organization` (name, url, logo, sameAs) · `Product` + `Offer` only with a visible price · must match the page · eligible ≠ guaranteed · no FAQ/HowTo markup "for rich results". Test: Rich Results Test + validator.schema.org (0 errors). Search Console: Domain property (DNS TXT) → submit sitemap → URL Inspection → Test live URL. Google's AI features: no special markup, same basics.

## Before you hand over
- [ ] Lighthouse mobile 90+ in all four categories (median of 3); LCP ≤ 2.5 s, CLS ≤ 0.1.
- [ ] Phone gets a phone-sized hero; hero not lazy.
- [ ] Keyboard and screen-reader passes done by you; statement published.
- [ ] Structured data 0 errors and matches the page; robots.txt allows crawling.
- [ ] Consent and `generate_lead` from Module 6 still work.
- [ ] Report separates lab numbers from real-user data.
