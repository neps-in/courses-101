# WordPress 101 for Content Creators — Course Outline

**Audience:** bloggers, newsletter writers, podcasters, YouTubers and solo marketers who want to own their publishing home base. No coding required.
**Level:** beginner → confident self-publisher
**Outcome:** you launch, run and grow a fast, secure, search-ready WordPress site that you fully own — and you can publish, repurpose and monetize content on it without hiring a developer.
**Length:** 8 modules + capstone · ~30 lessons · each lesson 10–25 min

> ⚠️ **Freshness flag:** WordPress ships ~3 major releases a year. Screens, block names and Site Editor menus change. Every lesson must state the WordPress version it was checked against and link to the matching page on wordpress.org/documentation. AI features (core and plugin) and SEO/AI-search plugin settings change fastest — re-verify before publishing.

---

## Non-negotiables for content creators

If a creator skips any of these, they lose traffic, money, content or legal standing. Every one maps to a module below and is assessed in the capstone.

| # | Non-negotiable | Why it can't be skipped | Module |
|---|----------------|-------------------------|--------|
| 1 | **Own your platform** — self-hosted WordPress.org vs WordPress.com, your own domain | Your domain and content are the only audience asset no algorithm can take away | M01 |
| 2 | **Permalinks set before the first post** | Changing URL structure later breaks links and loses search equity | M01 |
| 3 | **The block editor (posts, pages, blocks, patterns)** | It's the daily publishing tool — speed here = output | M02 |
| 4 | **Categories, tags & site structure** | Drives navigation, internal linking and topical authority | M02 |
| 5 | **Media done right** — compression, modern formats, alt text | Images are the #1 cause of slow creator sites and a core accessibility requirement | M03 |
| 6 | **On-page SEO basics + one SEO plugin configured** | Titles, meta descriptions, sitemaps, schema — the difference between indexed and invisible | M05 |
| 7 | **Email list capture** | Social reach is rented; email is owned | M06 |
| 8 | **Backups (off-site) + updates** | One bad plugin update or hack without a backup = years of content gone | M07 |
| 9 | **Security basics** — strong passwords, 2FA, user roles, limited plugins | Creator sites are hacked mostly via weak logins and abandoned plugins | M07 |
| 10 | **Performance / Core Web Vitals** | Slow pages lose readers and rankings | M07 |
| 11 | **Legal pages & disclosures** — privacy policy, cookie consent where required, affiliate/sponsor disclosure | Required by law in many regions (GDPR, FTC Endorsement Guides) | M08 |
| 12 | **Analytics** — Search Console + an analytics tool | You can't grow what you don't measure | M08 |

---

## Learning path

```mermaid
flowchart LR
  M1[M01 Own your platform]:::cream --> M2[M02 Publish with blocks]:::sky
  M2 --> M3[M03 Media]:::sky
  M3 --> M4[M04 Design without code]:::blue
  M4 --> M5[M05 SEO & AI search]:::blue
  M5 --> M6[M06 Grow & monetize]:::pink
  M6 --> M7[M07 Protect & speed up]:::cream
  M7 --> M8[M08 Measure & stay legal]:::sky
  M8 --> C[M09 Capstone: launch]:::pink

  classDef cream fill:#FFF9D2,color:#000000,stroke:#111844
  classDef sky   fill:#BFDDF0,color:#1F150C,stroke:#111844
  classDef blue  fill:#8CC0EB,color:#111844,stroke:#111844
  classDef pink  fill:#F9B2D7,color:#000000,stroke:#111844
```

---

## M01 — Own Your Platform: Setup Foundations
- WordPress.org vs WordPress.com vs Substack/Medium/Ghost — ownership, cost, control trade-offs
- Domains, DNS and choosing creator-friendly managed hosting (what to look for, not brand picks)
- Installing WordPress; HTTPS/SSL; the admin dashboard tour
- First-day settings: site title/tagline, timezone, **permalinks**, discussion, reading settings
- Users & roles (Administrator, Editor, Author, Contributor) for when you hire help
- **Hands-on:** install WordPress on a staging/local site (WordPress Playground or Local) and configure permalinks + core settings

## M02 — Publishing with the Block Editor
- Posts vs pages, and when to use each
- Blocks, block toolbar, list view, keyboard shortcuts and slash commands
- Patterns and synced patterns for reusable content (CTAs, author boxes, disclaimers)
- Categories vs tags; designing a content taxonomy for your niche
- Drafts, revisions, scheduling and the editorial workflow
- Embeds: YouTube, podcasts, social posts, newsletters
- **Hands-on:** publish 3 posts using a reusable CTA pattern, a clean category structure and one scheduled post

## M03 — Media That's Fast and Accessible
- The Media Library, image sizes and what WordPress generates automatically
- Compression and modern formats (WebP/AVIF); right-sizing before upload
- Alt text, captions and file names that help both accessibility and image search
- Featured images and social share images (Open Graph)
- Video & audio: embed vs self-host (bandwidth, performance, podcast hosting)
- **Hands-on:** audit and optimise 10 images on your site; measure page weight before/after

## M04 — Design Without Code: Themes & the Site Editor
- Block themes vs classic themes; choosing a lightweight, maintained theme
- The Site Editor: templates, template parts, global styles (fonts, colours)
- Navigation menus, header/footer, homepage vs blog index
- Building key pages: About, Start Here, Contact, Work With Me / Media Kit
- Mobile-first checks and basic accessibility (contrast, headings, link text)
- **Hands-on:** brand your site with global styles and build an About + Start Here page

## M05 — SEO & AI Search for WordPress
- How search engines and AI answer engines find, index and cite WordPress content
- Configuring one SEO plugin (Yoast, Rank Math or AIOSEO): titles, meta, XML sitemap, breadcrumbs
- Writing for search intent: headings, internal links, answer-first paragraphs
- Schema basics for creators (Article, Person, FAQ/HowTo where still supported, VideoObject, PodcastEpisode)
- Connecting Google Search Console & Bing Webmaster Tools; submitting sitemaps
- ⚠️ Flag: AI-search features and schema rich-result eligibility change often — cite Google Search Central dates
- **Hands-on:** configure an SEO plugin, verify Search Console, and fully optimise one cornerstone post

## M06 — Grow & Monetize Your Audience
- Email capture: forms, lead magnets, newsletter integrations (Jetpack, MailPoet, Kit, etc.)
- Comments, community and spam control (Akismet / anti-spam)
- Repurposing workflow: one post → newsletter, social, video script; RSS feeds
- Monetization models: ads, affiliate links, sponsorships, digital products, memberships, WooCommerce basics
- Plugin evaluation checklist: ratings, last updated, active installs, support, bloat
- **Hands-on:** add an email opt-in with a lead magnet and a "Work With Me" monetization page

## M07 — Protect & Speed Up Your Site
- Updates: core, themes, plugins — auto-updates vs manual, testing on staging
- Backups: off-site, automated, and a tested restore
- Security: strong passwords, 2FA, login protection, least-privilege roles, removing unused plugins/themes
- Performance: caching, CDN, lazy loading, Core Web Vitals (LCP, INP, CLS) via PageSpeed Insights
- Content ownership: Tools → Export, migrating hosts
- **Hands-on:** set up automated off-site backups, perform a test restore, enable 2FA and hit "good" Core Web Vitals on your homepage

## M08 — Measure & Stay Legal
- Analytics options: GA4 via Site Kit, privacy-friendly alternatives (Plausible, Fathom, Jetpack Stats)
- Reading the data: top content, traffic sources, search queries, conversion to email
- Privacy policy (built-in WordPress privacy tools), cookie consent where required (GDPR/ePrivacy)
- Affiliate and sponsorship disclosures (FTC Endorsement Guides; ASA/CAP in UK)
- Copyright, image licensing and AI-generated content disclosure
- ⚠️ Flag: not legal advice; laws vary by country — link to primary regulators
- **Hands-on:** build a monthly content dashboard and publish privacy + disclosure pages

## M09 — Capstone: Launch Your Creator Site
- Pre-launch checklist covering all 12 non-negotiables
- Content plan: 10 cornerstone topics mapped to categories
- Launch: go live, submit sitemap, announce to list/socials
- 30-day maintenance routine (updates, backups, analytics review)
- **Hands-on:** launch a live site with 5 published posts, email capture, backups, SEO plugin, analytics and legal pages — graded against the non-negotiables rubric

---

## Primary sources
- WordPress documentation — https://wordpress.org/documentation/
- Learn WordPress (official tutorials) — https://learn.wordpress.org/
- WordPress Developer Resources (block editor, themes) — https://developer.wordpress.org/
- WordPress Plugin Directory — https://wordpress.org/plugins/
- Google Search Central — https://developers.google.com/search/docs
- web.dev Core Web Vitals — https://web.dev/articles/vitals
- FTC Endorsement Guides — https://www.ftc.gov/business-guidance/advertising-marketing/endorsements-influencers-reviews
- GDPR text — https://gdpr-info.eu/
- WCAG 2.2 — https://www.w3.org/TR/WCAG22/
