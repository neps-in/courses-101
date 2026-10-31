# WordPress 101 for Content Creators — Course Outline

**Audience:** bloggers, newsletter writers, podcasters, YouTubers and solo marketers who want to own their publishing home base. No coding required.
**Level:** beginner → confident self-publisher
**Outcome:** you launch, run and grow a fast, secure, search-ready WordPress site that you fully own — and you can publish, repurpose and monetize content on it without hiring a developer.
**Length:** 8 modules + capstone · 44 lessons (see syllabus.md) · each lesson 10–25 min · one module capstone per module

> ⚠️ **Freshness flag:** WordPress ships ~3 major releases a year. Screens, block names and Site Editor menus change. Every lesson must state the WordPress version it was checked against and link to the matching page on wordpress.org/documentation. AI features (core and plugin) and SEO/AI-search plugin settings change fastest — re-verify before publishing.

---

## Non-negotiables for content creators

If a creator skips any of these, they lose traffic, money, content or legal standing. Each one is **taught** in one module, **reinforced** later where noted, and **assessed** in the M09 capstone rubric.

| # | Non-negotiable | Why it can't be skipped | Taught | Reinforced |
|---|----------------|-------------------------|--------|------------|
| 1 | **Own your platform** — self-hosted WordPress.org (or a plan that allows plugins + export), your own domain | Your domain, content and list are the only audience assets no algorithm or platform can take away | M01 | M07 (export/migrate) |
| 2 | **Permalinks set before the first post** | Changing URL structure later breaks links and loses search equity | M01 | M05 |
| 3 | **Day-one safety net** — automated off-site backups, 2FA, strong passwords | Losing years of content to one bad update or hacked login isn't recoverable without them | M01 | M07 (restore test, hardening) |
| 4 | **The block editor** — posts vs pages, blocks, patterns, scheduling | It's the daily publishing tool — speed here = output | M02 | — |
| 5 | **Categories, tags & site structure** | Drives navigation, internal linking and topical authority | M02 | M05 |
| 6 | **Media done right** — right-sized, compressed, modern formats | Images are the #1 cause of slow creator sites | M03 | M07 |
| 7 | **Accessibility basics** — alt text, heading order, contrast, link text, captions | Readers with disabilities are part of your audience; also required by law for some sites (e.g. EU Accessibility Act for certain e-commerce services) | M03 | M04 |
| 8 | **On-page SEO + one SEO plugin configured** — titles, meta, sitemap, schema, Search Console | The difference between indexed and invisible — in classic search and AI answers | M05 | M08 |
| 9 | **Email list capture with a privacy notice** | Social reach is rented; email is owned — and collecting emails is collecting personal data | M06 | M08 |
| 10 | **Updates + lean plugin hygiene** | Creator sites are mostly hacked through outdated or abandoned plugins | M07 | — |
| 11 | **Performance / Core Web Vitals** | Slow pages lose readers and rankings | M07 | — |
| 12 | **Disclosures & legal pages** — privacy policy, cookie consent where required, affiliate/sponsor disclosure | Required by law in many regions (GDPR, FTC Endorsement Guides, UK CAP Code) | M08 | — |
| 13 | **Analytics you actually review** — Search Console + one analytics tool + a monthly routine | You can't grow what you don't measure | M08 | M09 |

### Nice-to-have (optional / advanced — covered lightly or as stretch goals)
- Page builders (Elementor, Divi) — the Site Editor covers creator needs without the lock-in
- Memberships and paid courses (MemberPress, LearnDash, etc.)
- Full WooCommerce stores (M06 covers selling a single digital product only)
- Multilingual sites (WPML, Polylang)
- AI writing/image assistants inside WordPress — shown as tools, not as a substitute for the workflow

### Deliberately out of scope
- Custom PHP, child-theme code, custom blocks — see a developer course
- Multisite, headless WordPress, server administration
- Paid ads management

---

## Non-negotiable plugin stack

Each row is a **job**, not a brand. Install **exactly one plugin per job**: two SEO plugins, two caching plugins or two security plugins conflict, duplicate output (double meta tags, double sitemaps) and slow the site. If your host or WordPress core already does the job, skip the plugin. That's lean plugin hygiene (NN #10) in practice.

| # | Job | Why it's non-negotiable | Pick one (free option first) | Skip if… | Taught |
|---|-----|-------------------------|------------------------------|----------|--------|
| P1 | **Off-site backups** | One bad update or hack without a backup = years of content gone | UpdraftPlus · Jetpack VaultPress Backup · BlogVault | Your host does daily **off-site** backups *and* you've tested a restore | M01 → M07 |
| P2 | **Login security & 2FA** | Brute-forced or reused passwords are the most common way creator sites get taken over | Two Factor (WordPress.org) + host firewall · Wordfence · Solid Security | Your host enforces 2FA and a web application firewall | M01 → M07 |
| P3 | **SEO** | Titles, meta descriptions, XML sitemap, schema, canonical URLs | Yoast SEO · Rank Math · All in One SEO (AIOSEO) | Never skip; core's built-in sitemap alone isn't enough | M05 |
| P4 | **Redirects** | Changed slugs and deleted posts turn into 404s that lose traffic and backlinks | Redirection · your SEO plugin's redirect manager | Your SEO plugin already has redirects (e.g. Rank Math free, Yoast Premium) | M05 → M07 |
| P5 | **Image optimisation** | Uncompressed images are the #1 cause of slow creator sites | Modern Image Formats (WordPress Performance Team) · ShortPixel · EWWW Image Optimizer · Imagify | You compress/convert *before* upload every time (most people don't) | M03 |
| P6 | **Caching / performance** | Page caching is the biggest single Core Web Vitals win on most hosts | Your host's cache · LiteSpeed Cache (LiteSpeed servers only) · WP Super Cache · WP Rocket (paid) | Your managed host already does page caching; adding a second cache causes conflicts | M07 |
| P7 | **Email capture** | Social reach is rented; your list is owned | Your email provider's official plugin (e.g. Kit, MailPoet) · Jetpack Forms + newsletter | Your email provider gives you an embed code and you're happy pasting it into a block | M06 |
| P8 | **Contact form** | Sponsors, brands and readers need a way to reach you without exposing your email | Jetpack Forms · WPForms Lite · Fluent Forms | P7 plugin already includes general forms | M04 / M06 |
| P9 | **Anti-spam** | Comment and form spam buries real readers and can tank trust | Akismet (free for personal sites) · Antispam Bee | Comments are off *and* your form plugin has its own spam protection | M06 |
| P10 | **Analytics** | You can't grow what you don't measure | Site Kit by Google (GA4 + Search Console) · Jetpack Stats · Independent Analytics · Plausible / Fathom (paid, privacy-friendly) | Never skip; pick one and review it monthly | M08 |
| P11 | **Cookie consent** *(where required)* | Required in the EU/UK (GDPR/ePrivacy) when you set non-essential cookies, e.g. GA4 or ad pixels | Complianz · CookieYes | You use only cookieless analytics and no ad/affiliate trackers; confirm for your region | M08 |

### Core already does these, so don't add plugins for them
- **Privacy policy page:** Settings → Privacy generates a starter page (M06)
- **Content export:** Tools → Export (M07)
- **Lazy loading images** (core since 5.5) and **responsive image sizes** (M03)
- **Basic XML sitemap** at `/wp-sitemap.xml` (core since 5.5); your SEO plugin replaces it (M05)
- **Reusable CTAs / author boxes:** synced patterns, no plugin needed (M02)

### Nice-to-have plugins (only once the stack above is in place)
Affiliate link management (Pretty Links, ThirstyAffiliates) · social sharing buttons · table of contents · broken link checker run as an occasional audit, not left always on.

### How to choose and add a plugin

```mermaid
flowchart TD
  %% alt: Plugin decision flowchart: use core or host features first, never stack two plugins for one job, vet a shortlist against the M06 checklist, test on staging, then install live.
  A[Need a feature]:::cream --> B{Does core or<br/>your host do it?}:::sky
  B -- Yes --> Z[Use that, no plugin]:::pink
  B -- No --> C{Already have a<br/>plugin for this job?}:::sky
  C -- Yes --> D[Configure the existing one<br/>or replace it, never stack]:::pink
  C -- No --> E[Shortlist 2–3 from<br/>wordpress.org/plugins]:::blue
  E --> F{Passes the M06 checklist?<br/>updated recently · tested with your WP version<br/>active installs · support replies · no bloat}:::sky
  F -- No --> E
  F -- Yes --> G[Install on staging / Playground]:::blue
  G --> H[Check speed + conflicts]:::blue
  H --> I[Install on live site<br/>and note it in your plugin log]:::cream

  classDef cream fill:#FFF9D2,color:#000000,stroke:#111844
  classDef sky   fill:#BFDDF0,color:#1F150C,stroke:#111844
  classDef blue  fill:#8CC0EB,color:#111844,stroke:#111844
  classDef pink  fill:#F9B2D7,color:#000000,stroke:#111844
```

![Plugin decision flowchart: use core or host features first, never stack two plugins for one job, vet a shortlist against the M06 checklist, test on staging, then install live.](course-outline-diagram-1.webp)

**Rule of thumb:** a creator site rarely needs more than **10–12 active plugins**. Delete deactivated ones, because they can still be exploited.

> ⚠️ **Freshness flag:** plugins change owners, pricing tiers and features, and some get closed on wordpress.org. Before teaching or recommending any name above, re-check its wordpress.org page (last updated, "tested up to", active installs, open support threads) and note the check date in the lesson. Free-tier limits (e.g. Akismet and Jetpack Stats for commercial sites) change often.

---

## Learning path

```mermaid
flowchart LR
  %% alt: Course learning path from M01 Own your platform through M08 Measure and stay legal to the M09 launch capstone.
  M1[M01 Own your platform]:::cream --> M2[M02 Publish with blocks]:::sky
  M2 --> M3[M03 Media & accessibility]:::sky
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

![Course learning path from M01 Own your platform through M08 Measure and stay legal to the M09 launch capstone.](course-outline-diagram-2.webp)

Each module adds to **one practice site** the learner builds from M01 and launches in M09. Hands-on work goes on a local or staging copy (WordPress Playground or Local) until M09.

---

## M01 — Own Your Platform: Setup Foundations
**Goal:** a correctly configured, protected WordPress install before a single post exists. · ~4 lessons · NN #1, #2, #3
- WordPress.org vs WordPress.com vs Substack/Medium/Ghost — ownership, cost, control, export trade-offs
- Domains, DNS and choosing creator-friendly managed hosting (criteria, not brand picks)
- Installing WordPress; HTTPS/SSL; the admin dashboard tour
- First-day settings: site title/tagline, timezone, **permalinks**, discussion, reading settings
- **Day-one safety net:** automated off-site backups, 2FA, strong passwords; users & roles for when you hire help
- **Module capstone:** a configured practice site with permalinks set, backups scheduled and 2FA on

## M02 — Publishing with the Block Editor
**Goal:** publish quickly and consistently with a repeatable workflow. · ~5 lessons · NN #4, #5
- Posts vs pages, and when to use each
- Blocks, block toolbar, list view, keyboard shortcuts and slash commands
- Patterns and synced patterns for reusable content (CTAs, author boxes, disclaimers)
- Categories vs tags; designing a content taxonomy for your niche
- Drafts, revisions, scheduling and the editorial workflow
- Embeds: YouTube, podcasts, social posts, newsletters
- **Module capstone:** 3 posts using a reusable CTA pattern, a clean category structure and one scheduled post

## M03 — Media That's Fast and Accessible
**Goal:** every image and video helps the page instead of slowing it down. · ~4 lessons · NN #6, #7
- The Media Library, image sizes and what WordPress generates automatically
- Compression and modern formats (WebP/AVIF); right-sizing before upload
- Alt text, captions, transcripts and file names — accessibility first, image search second
- Featured images and social share images (Open Graph)
- Video & audio: embed vs self-host (bandwidth, performance, podcast hosting)
- **Module capstone:** audit and optimise 10 images; measure page weight before/after; add alt text and one transcript

## M04 — Design Without Code: Themes & the Site Editor
**Goal:** a branded, mobile-friendly, accessible site without touching code. · ~4 lessons · NN #7
- Block themes vs classic themes; choosing a lightweight, maintained theme
- The Site Editor: templates, template parts, global styles (fonts, colours)
- Navigation menus, header/footer, homepage vs blog index
- Building key creator pages: About, Start Here, Contact, Work With Me / Media Kit
- Mobile-first and accessibility checks (contrast, heading order, link text, keyboard navigation)
- **Module capstone:** brand the site with global styles; build About + Start Here pages that pass a contrast check

## M05 — SEO & AI Search for WordPress
**Goal:** content that gets indexed, ranked and cited. · ~5 lessons · NN #8
- How search engines and AI answer engines find, index and cite WordPress content
- Configuring one SEO plugin (Yoast, Rank Math or AIOSEO): titles, meta, XML sitemap, breadcrumbs
- Writing for search intent: headings, internal links, answer-first paragraphs
- Schema basics for creators (Article, Person, VideoObject, PodcastEpisode; FAQ and HowTo rich results no longer shown: FAQ deprecated 2026-05-07, HowTo 2023)
- Connecting Google Search Console & Bing Webmaster Tools; submitting sitemaps
- ⚠️ Flag: AI-search features and rich-result eligibility change often — cite Google Search Central with dates
- **Module capstone:** configure an SEO plugin, verify Search Console, and fully optimise one cornerstone post

## M06 — Grow & Monetize Your Audience
**Goal:** turn readers into subscribers and subscribers into income. · ~5 lessons · NN #9
- Email capture: forms, lead magnets, newsletter integrations (Jetpack, MailPoet, Kit, etc.)
- **Lawful capture:** privacy policy page (built-in WordPress privacy tools), consent wording, double opt-in
- Comments, community and spam control (Akismet / anti-spam)
- Repurposing workflow: one post → newsletter, social, video script; RSS feeds
- Monetization models: ads, affiliate links, sponsorships, digital products, memberships; selling one digital product
- Plugin evaluation checklist: ratings, last updated, active installs, support, bloat
- **Module capstone:** email opt-in + lead magnet + privacy policy, and a "Work With Me" monetization page

## M07 — Protect & Speed Up Your Site
**Goal:** a site that stays up, stays fast and can survive anything. · ~4 lessons · NN #3, #6, #10, #11
- Updates: core, themes, plugins — auto-updates vs manual, testing on staging
- Backups deep dive: retention, off-site storage, and a **tested restore**
- Security hardening: login protection, least-privilege roles, removing unused plugins/themes
- Performance: caching, CDN, lazy loading, Core Web Vitals (LCP, INP, CLS) via PageSpeed Insights
- Content ownership: Tools → Export, migrating hosts
- **Module capstone:** perform a test restore, prune plugins, and hit "good" Core Web Vitals on the homepage

## M08 — Measure & Stay Legal
**Goal:** know what's working and publish with legal confidence. · ~4 lessons · NN #12, #13
- Analytics options: GA4 via Site Kit, privacy-friendly alternatives (Plausible, Fathom, Jetpack Stats)
- Reading the data: top content, traffic sources, search queries, conversion to email
- Cookie consent where required (GDPR/ePrivacy) — and how analytics choice affects it
- Affiliate and sponsorship disclosures (FTC Endorsement Guides; ASA/CAP in UK)
- Copyright, image licensing and AI-generated content disclosure
- ⚠️ Flag: not legal advice; laws vary by country — link to primary regulators
- **Module capstone:** build a monthly content dashboard and publish disclosure + cookie pages

## M09 — Capstone: Launch Your Creator Site
**Goal:** go live with every non-negotiable in place. · ~3 lessons · NN #1–#13
- Pre-launch checklist covering all 13 non-negotiables
- Content plan: 10 cornerstone topics mapped to categories
- Launch: go live, submit sitemap, announce to list/socials
- 30-day maintenance routine (updates, backups, analytics review)
- **Final capstone:** a live site with 5 published posts, email capture, backups, SEO plugin, analytics and legal pages — graded against the non-negotiables rubric

---

## Primary sources
- WordPress documentation — https://wordpress.org/documentation/
- Learn WordPress (official tutorials) — https://learn.wordpress.org/
- WordPress Developer Resources (block editor, themes) — https://developer.wordpress.org/
- WordPress Plugin Directory — https://wordpress.org/plugins/
- Google Search Central — https://developers.google.com/search/docs
- web.dev Core Web Vitals — https://web.dev/articles/vitals
- FTC Endorsement Guides — https://www.ftc.gov/business-guidance/advertising-marketing/endorsements-influencers-reviews
- UK CAP Code (ASA) — https://www.asa.org.uk/codes-and-rulings/advertising-codes.html
- GDPR text — https://gdpr-info.eu/
- WCAG 2.2 — https://www.w3.org/TR/WCAG22/
- European Accessibility Act (Directive 2019/882) — https://eur-lex.europa.eu/eli/dir/2019/882/oj
