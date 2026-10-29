# WordPress 101 for Content Creators — Syllabus

_Lessons are added per module by `/plan-module <N>`. Source of truth for topics: `course-outline.md`._

**At a glance:** 9 modules · 44 lessons · each lesson 10–25 min reading + a hands-on exercise and a 5–8 question quiz · one module capstone per module · one practice site built from M01 and launched in M09.

Times below are **hands-on** estimates (on top of reading time). Every lesson states the WordPress version it was checked against.

| Module | Lessons | Non-negotiables taught |
|--------|---------|------------------------|
| M01 Own Your Platform | 5 | #1, #2, #3 |
| M02 Publishing with the Block Editor | 5 | #4, #5 |
| M03 Media That's Fast and Accessible | 5 | #6, #7 |
| M04 Design Without Code | 5 | #7 (reinforced) |
| M05 SEO & AI Search | 5 | #8 |
| M06 Grow & Monetize | 6 | #9 |
| M07 Protect & Speed Up | 5 | #3, #6, #10, #11 |
| M08 Measure & Stay Legal | 5 | #12, #13 |
| M09 Capstone: Launch | 3 | #1–#13 |

---

## M01 — Own Your Platform: Setup Foundations

**Goal:** a correctly configured, protected WordPress install before a single post exists. · NN #1, #2, #3

> 🖼️ **Image placeholder: M01 lesson path**  
> _Alt text:_ M01 lesson path: choose a platform, get a domain and host, install WordPress, set first-day settings, add the safety net, then the module capstone.  
> _Image prompt:_ Clean, flat, minimal horizontal flowchart infographic reading left to right, 6 rounded rectangles joined by simple arrows, labelled exactly: "L01 Choose your platform" → "L02 Domain, DNS & hosting" → "L03 Install & HTTPS" → "L04 First-day settings" → "L05 Day-one safety net" → "M01 Capstone". Fill the boxes in a soft palette of cream #FFF9D2, light sky blue #BFDDF0 and medium blue #8CC0EB; make the last box (the capstone) pink #F9B2D7 so it stands out. Dark navy #111844 text, outlines and arrows. Plain white background, modern sans-serif font, generous spacing, no icons, no extra text, no shadows, 16:9.

### M01.L01 — Choose your platform: WordPress.org vs WordPress.com vs Substack, Medium and Ghost
- **File:** `lessons/m01-l01-choose-your-platform.md`
- **Objectives:**
  1. Compare self-hosted WordPress.org, WordPress.com plans, Substack, Medium and Ghost on ownership, cost, control and export.
  2. Explain why your own domain and email list are the audience assets no platform can take away.
  3. Choose a platform for your practice site and justify the choice in two sentences.
- **Prerequisites:** none
- **Hands-on:** fill in a platform-comparison scorecard for your own situation and set up a free practice site in WordPress Playground or Local. (~20 min)

### M01.L02 — Domains, DNS and creator-friendly hosting
- **File:** `lessons/m01-l02-domain-dns-hosting.md`
- **Objectives:**
  1. Describe how a domain, DNS records and a web host work together to serve your site.
  2. Evaluate a hosting plan against creator criteria: managed updates, off-site backups, staging, PHP version, support and price after renewal.
  3. Shortlist a domain name and two hosting plans that meet the criteria.
- **Prerequisites:** M01.L01
- **Hands-on:** brainstorm and check domain availability; score two hosts on the criteria checklist. (~25 min)

### M01.L03 — Install WordPress, turn on HTTPS and tour the dashboard
- **File:** `lessons/m01-l03-install-https-dashboard.md`
- **Objectives:**
  1. Install WordPress using a host's one-click installer, Local or Playground.
  2. Confirm HTTPS works and the site address uses `https://`.
  3. Locate the main dashboard areas: Posts, Pages, Media, Appearance, Plugins, Users, Tools and Settings.
- **Prerequisites:** M01.L02
- **Hands-on:** install WordPress on your practice site, verify the padlock, and complete a dashboard scavenger hunt. (~25 min)

### M01.L04 — First-day settings: permalinks, reading and discussion
- **File:** `lessons/m01-l04-first-day-settings.md`
- **Objectives:**
  1. Set the site title, tagline, timezone and language correctly.
  2. Choose a permalink structure before the first post and explain why changing it later loses links and search equity.
  3. Configure reading and discussion settings to match your publishing plan.
- **Prerequisites:** M01.L03
- **Hands-on:** apply the first-day settings checklist and delete the sample post, page and comment. (~15 min)

### M01.L05 — Your day-one safety net: backups, 2FA, passwords and user roles
- **File:** `lessons/m01-l05-day-one-safety-net.md`
- **Objectives:**
  1. Schedule automated off-site backups with one backup plugin (or confirm your host does it off-site).
  2. Turn on two-factor authentication and use a password manager for a strong, unique admin password.
  3. Assign the least-privilege user role (Editor, Author, Contributor) when you bring in help.
- **Prerequisites:** M01.L04
- **Hands-on:** install a backup plugin and connect off-site storage, enable 2FA, and create a test Author account. (~25 min)

**Module capstone (`capstones/m01-capstone.md`):** a configured practice site with permalinks set, backups scheduled and 2FA on.

---

## M02 — Publishing with the Block Editor

**Goal:** publish quickly and consistently with a repeatable workflow. · NN #4, #5

> 🖼️ **Image placeholder: M02 lesson path**  
> _Alt text:_ M02 lesson path: posts vs pages and blocks, patterns, categories and tags, editorial workflow, embeds, then the module capstone.  
> _Image prompt:_ Clean, flat, minimal horizontal flowchart infographic reading left to right, 6 rounded rectangles joined by simple arrows, labelled exactly: "L01 Posts, pages & blocks" → "L02 Patterns" → "L03 Categories & tags" → "L04 Editorial workflow" → "L05 Embeds" → "M02 Capstone". Fill the boxes in a soft palette of cream #FFF9D2, light sky blue #BFDDF0 and medium blue #8CC0EB; make the last box (the capstone) pink #F9B2D7 so it stands out. Dark navy #111844 text, outlines and arrows. Plain white background, modern sans-serif font, generous spacing, no icons, no extra text, no shadows, 16:9.

### M02.L01 — Posts vs pages, and getting fast in the block editor
- **File:** `lessons/m02-l01-posts-pages-blocks.md`
- **Objectives:**
  1. Decide whether a piece of content belongs in a post or a page.
  2. Build a post with paragraph, heading, list, image, quote and button blocks using the block toolbar and list view.
  3. Use slash commands and at least five keyboard shortcuts to write without reaching for the mouse.
- **Prerequisites:** M01
- **Hands-on:** write and publish your first post using only the keyboard for block insertion. (~20 min)

### M02.L02 — Patterns and synced patterns for reusable content
- **File:** `lessons/m02-l02-patterns-synced-patterns.md`
- **Objectives:**
  1. Insert and customise patterns from the pattern library.
  2. Create a synced pattern (CTA, author box or disclaimer) and update it everywhere at once.
  3. Explain when to use a synced vs an unsynced pattern.
- **Prerequisites:** M02.L01
- **Hands-on:** build a synced newsletter CTA and an author box, then add both to your first post. (~20 min)

### M02.L03 — Categories vs tags: design a content structure for your niche
- **File:** `lessons/m02-l03-categories-tags.md`
- **Objectives:**
  1. Distinguish categories (site sections) from tags (cross-cutting topics).
  2. Design 4–7 categories for your niche that map to your main content pillars.
  3. Avoid thin tag archives by setting a simple tagging rule.
- **Prerequisites:** M02.L01
- **Hands-on:** sketch your category map, create the categories with descriptions, and rename "Uncategorized". (~20 min)

### M02.L04 — Drafts, revisions, scheduling and an editorial workflow
- **File:** `lessons/m02-l04-editorial-workflow.md`
- **Objectives:**
  1. Restore an earlier version of a post from revisions.
  2. Schedule a post for a future date and time in your site's timezone.
  3. Run a repeatable pre-publish checklist (title, slug, excerpt, category, featured image, links).
- **Prerequisites:** M02.L03
- **Hands-on:** draft, revise, restore and schedule a post using the pre-publish checklist. (~15 min)

### M02.L05 — Embeds: YouTube, podcasts, social posts and newsletters
- **File:** `lessons/m02-l05-embeds.md`
- **Objectives:**
  1. Embed a YouTube video, a podcast episode and a social post using embed blocks.
  2. Explain the privacy and performance cost of third-party embeds.
  3. Choose between an embed and a linked screenshot for heavy or tracking-heavy content.
- **Prerequisites:** M02.L01
- **Hands-on:** add three embeds to a post and compare page weight with and without them. (~15 min)

**Module capstone (`capstones/m02-capstone.md`):** three posts using a reusable CTA pattern, a clean category structure and one scheduled post.

---

## M03 — Media That's Fast and Accessible

**Goal:** every image and video helps the page instead of slowing it down. · NN #6, #7

> 🖼️ **Image placeholder: M03 lesson path**  
> _Alt text:_ M03 lesson path: media library and image sizes, compression and formats, accessible media, featured and social images, video and audio, then the capstone.  
> _Image prompt:_ Clean, flat, minimal horizontal flowchart infographic reading left to right, 6 rounded rectangles joined by simple arrows, labelled exactly: "L01 Media Library & sizes" → "L02 Compress & convert" → "L03 Accessible media" → "L04 Featured & social images" → "L05 Video & audio" → "M03 Capstone". Fill the boxes in a soft palette of cream #FFF9D2, light sky blue #BFDDF0 and medium blue #8CC0EB; make the last box (the capstone) pink #F9B2D7 so it stands out. Dark navy #111844 text, outlines and arrows. Plain white background, modern sans-serif font, generous spacing, no icons, no extra text, no shadows, 16:9.

### M03.L01 — The Media Library and the image sizes WordPress creates
- **File:** `lessons/m03-l01-media-library-image-sizes.md`
- **Objectives:**
  1. Upload, find, edit and replace files in the Media Library.
  2. Describe the image sizes WordPress generates and how responsive `srcset` uses them.
  3. Pick the right upload dimensions for full-width, content-width and thumbnail images.
- **Prerequisites:** M02
- **Hands-on:** upload one large photo and inspect the generated sizes and the `srcset` in the page source. (~15 min)

### M03.L02 — Compress, convert and right-size: WebP, AVIF and image plugins
- **File:** `lessons/m03-l02-compress-convert-images.md`
- **Objectives:**
  1. Resize and compress an image before upload with a free tool.
  2. Compare JPEG, PNG, WebP and AVIF for size and browser support.
  3. Configure one image-optimisation plugin (or confirm your host handles it).
- **Prerequisites:** M03.L01
- **Hands-on:** optimise the same image three ways and record file size and visible quality. (~20 min)

### M03.L03 — Accessible media: alt text, captions, transcripts and file names
- **File:** `lessons/m03-l03-accessible-media.md`
- **Objectives:**
  1. Write useful alt text — and recognise when an image should be decorative (empty alt).
  2. Add captions to video and a transcript to audio content.
  3. Name files descriptively for accessibility and image search.
- **Prerequisites:** M03.L01
- **Hands-on:** rewrite alt text for five images and create one transcript. (~20 min)

### M03.L04 — Featured images and social share images (Open Graph)
- **File:** `lessons/m03-l04-featured-social-images.md`
- **Objectives:**
  1. Set featured images that work in your theme's layouts and archives.
  2. Explain how Open Graph tags control the preview on social platforms and messaging apps.
  3. Create a reusable social image template at the recommended size.
- **Prerequisites:** M03.L02
- **Hands-on:** design a social image template and test a post's preview in a sharing debugger. (~20 min)

### M03.L05 — Video and audio: embed vs self-host
- **File:** `lessons/m03-l05-video-audio-hosting.md`
- **Objectives:**
  1. Compare embedding (YouTube, Vimeo, podcast hosts) with self-hosting on bandwidth, performance and control.
  2. Explain why podcasts belong on a podcast host, not in the Media Library.
  3. Use lazy-loading or facade techniques to keep embeds from slowing the page.
- **Prerequisites:** M02.L05, M03.L02
- **Hands-on:** compare page load of a self-hosted clip vs an embedded one in PageSpeed Insights. (~15 min)

**Module capstone (`capstones/m03-capstone.md`):** audit and optimise 10 images; measure page weight before/after; add alt text and one transcript.

---

## M04 — Design Without Code: Themes & the Site Editor

**Goal:** a branded, mobile-friendly, accessible site without touching code. · NN #7 (reinforced)

> 🖼️ **Image placeholder: M04 lesson path**  
> _Alt text:_ M04 lesson path: choose a block theme, use the Site Editor, set navigation, build creator pages, run mobile and accessibility checks, then the capstone.  
> _Image prompt:_ Clean, flat, minimal horizontal flowchart infographic reading left to right, 6 rounded rectangles joined by simple arrows, labelled exactly: "L01 Choose a theme" → "L02 Site Editor & styles" → "L03 Navigation & layout" → "L04 Creator pages" → "L05 Mobile & a11y checks" → "M04 Capstone". Fill the boxes in a soft palette of cream #FFF9D2, light sky blue #BFDDF0 and medium blue #8CC0EB; make the last box (the capstone) pink #F9B2D7 so it stands out. Dark navy #111844 text, outlines and arrows. Plain white background, modern sans-serif font, generous spacing, no icons, no extra text, no shadows, 16:9.

### M04.L01 — Block themes vs classic themes: choosing a lightweight, maintained theme
- **File:** `lessons/m04-l01-choose-a-theme.md`
- **Objectives:**
  1. Distinguish block themes from classic themes and explain why block themes suit creators.
  2. Vet a theme on the directory: last updated, tested-up-to version, active installs, accessibility-ready tag.
  3. Install and preview a theme without breaking the live site.
- **Prerequisites:** M01–M03
- **Hands-on:** shortlist three block themes, score them and activate one. (~20 min)

### M04.L02 — The Site Editor: templates, template parts and global styles
- **File:** `lessons/m04-l02-site-editor-global-styles.md`
- **Objectives:**
  1. Edit a template and a template part (header, footer) in the Site Editor.
  2. Set brand fonts and colours once in global styles.
  3. Reset a template to its theme default when an edit goes wrong.
- **Prerequisites:** M04.L01
- **Hands-on:** apply your brand colours and fonts and customise the single-post template. (~25 min)

### M04.L03 — Navigation, header and footer, homepage vs blog index
- **File:** `lessons/m04-l03-navigation-homepage.md`
- **Objectives:**
  1. Build a primary navigation menu with the Navigation block.
  2. Choose between a static homepage and a latest-posts homepage.
  3. Add useful footer content: newsletter CTA, legal links, social links.
- **Prerequisites:** M04.L02
- **Hands-on:** set up navigation, a static homepage and a blog index page. (~20 min)

### M04.L04 — Key creator pages: About, Start Here, Contact and Work With Me
- **File:** `lessons/m04-l04-creator-pages.md`
- **Objectives:**
  1. Write an About page that speaks to the reader, not just your bio.
  2. Build a Start Here page that routes new readers to your best content.
  3. Add a spam-protected contact form and a Work With Me / media kit page outline.
- **Prerequisites:** M04.L03, M02.L02
- **Hands-on:** draft About and Start Here pages and add a contact form with one form plugin. (~25 min)

### M04.L05 — Mobile-first and accessibility checks
- **File:** `lessons/m04-l05-mobile-accessibility-checks.md`
- **Objectives:**
  1. Test pages on a phone and in browser device mode.
  2. Check colour contrast, heading order, link text and keyboard navigation against WCAG 2.2 basics.
  3. Fix the three most common accessibility failures on creator sites.
- **Prerequisites:** M04.L04, M03.L03
- **Hands-on:** run a contrast checker and a keyboard-only walk-through on your homepage, then fix what fails. (~20 min)

**Module capstone (`capstones/m04-capstone.md`):** brand the site with global styles; build About + Start Here pages that pass a contrast check.

---

## M05 — SEO & AI Search for WordPress

**Goal:** content that gets indexed, ranked and cited. · NN #8

> ⚠️ Freshness flag: AI-search features and rich-result eligibility change often — cite Google Search Central with check dates.

> 🖼️ **Image placeholder: M05 lesson path**  
> _Alt text:_ M05 lesson path: how search and AI find content, set up an SEO plugin, write for intent, add schema, connect Search Console, then the capstone.  
> _Image prompt:_ Clean, flat, minimal horizontal flowchart infographic reading left to right, 6 rounded rectangles joined by simple arrows, labelled exactly: "L01 How search & AI find you" → "L02 SEO plugin setup" → "L03 Write for intent" → "L04 Schema basics" → "L05 Search Console & Bing" → "M05 Capstone". Fill the boxes in a soft palette of cream #FFF9D2, light sky blue #BFDDF0 and medium blue #8CC0EB; make the last box (the capstone) pink #F9B2D7 so it stands out. Dark navy #111844 text, outlines and arrows. Plain white background, modern sans-serif font, generous spacing, no icons, no extra text, no shadows, 16:9.

### M05.L01 — How search engines and AI answer engines find, index and cite your content
- **File:** `lessons/m05-l01-how-search-and-ai-find-you.md`
- **Objectives:**
  1. Describe crawling, indexing and ranking in plain language.
  2. Explain how AI answer engines (Google AI Overviews, ChatGPT search, Perplexity) select and cite sources.
  3. Check whether a page on your site is indexed.
- **Prerequisites:** M02
- **Hands-on:** run `site:` searches and the URL Inspection tool on two of your posts. (~15 min)

### M05.L02 — Configure one SEO plugin: titles, meta, sitemap, breadcrumbs and redirects
- **File:** `lessons/m05-l02-seo-plugin-setup.md`
- **Objectives:**
  1. Install and configure one SEO plugin (Yoast, Rank Math or AIOSEO) — and only one.
  2. Set title and meta description templates, XML sitemap and breadcrumbs.
  3. Set up redirects for changed slugs and deleted posts.
- **Prerequisites:** M05.L01, M01.L04
- **Hands-on:** complete the SEO plugin setup wizard and create one 301 redirect. (~25 min)

### M05.L03 — Writing for search intent: headings, internal links and answer-first paragraphs
- **File:** `lessons/m05-l03-write-for-search-intent.md`
- **Objectives:**
  1. Identify the search intent behind a query from its results page.
  2. Structure a post with a clear H2/H3 outline and an answer-first opening.
  3. Add internal links with descriptive anchor text to and from related posts.
- **Prerequisites:** M05.L02, M02.L03
- **Hands-on:** rewrite one post's intro and headings for its target query and add three internal links. (~25 min)

### M05.L04 — Schema basics for creators
- **File:** `lessons/m05-l04-schema-basics.md`
- **Objectives:**
  1. Explain what structured data does — and doesn't — do for rankings and AI citations.
  2. Configure Article and Person schema through your SEO plugin; add VideoObject or PodcastEpisode where relevant.
  3. Validate schema with the Rich Results Test and Schema Markup Validator.
- **Prerequisites:** M05.L02
- **Hands-on:** set up author/Person schema and validate one post. (~20 min)

### M05.L05 — Connect Google Search Console and Bing Webmaster Tools
- **File:** `lessons/m05-l05-search-console-bing.md`
- **Objectives:**
  1. Verify your site in Google Search Console and Bing Webmaster Tools.
  2. Submit your XML sitemap and read the Pages (indexing) report.
  3. Request indexing for a new or updated post.
- **Prerequisites:** M05.L02
- **Hands-on:** verify both tools, submit the sitemap and screenshot the first indexing report. (~20 min)

**Module capstone (`capstones/m05-capstone.md`):** configure an SEO plugin, verify Search Console, and fully optimise one cornerstone post.

---

## M06 — Grow & Monetize Your Audience

**Goal:** turn readers into subscribers and subscribers into income. · NN #9

> 🖼️ **Image placeholder: M06 lesson path**  
> _Alt text:_ M06 lesson path: plugin checklist, email capture, lawful capture, comments and spam, repurposing, monetization, then the capstone.  
> _Image prompt:_ Clean, flat, minimal horizontal flowchart infographic reading left to right, 7 rounded rectangles joined by simple arrows, labelled exactly: "L01 Plugin checklist" → "L02 Email capture" → "L03 Lawful capture" → "L04 Comments & spam" → "L05 Repurposing & RSS" → "L06 Monetization" → "M06 Capstone". Fill the boxes in a soft palette of cream #FFF9D2, light sky blue #BFDDF0 and medium blue #8CC0EB; make the last box (the capstone) pink #F9B2D7 so it stands out. Dark navy #111844 text, outlines and arrows. Plain white background, modern sans-serif font, generous spacing, no icons, no extra text, no shadows, 16:9.

### M06.L01 — Choose plugins you can trust: the evaluation checklist
- **File:** `lessons/m06-l01-plugin-evaluation-checklist.md`
- **Objectives:**
  1. Evaluate a plugin on last updated, tested-up-to version, active installs, ratings, support replies and bloat.
  2. Apply the "one plugin per job" rule and check whether core or your host already does the job.
  3. Keep a plugin log of what you installed, why and when.
- **Prerequisites:** M01–M05
- **Hands-on:** score two email-capture plugins with the checklist and start your plugin log. (~20 min)

### M06.L02 — Email capture: forms, lead magnets and newsletter integrations
- **File:** `lessons/m06-l02-email-capture.md`
- **Objectives:**
  1. Connect your email provider to WordPress (official plugin, Jetpack, MailPoet or embed code).
  2. Place opt-in forms where readers are most likely to subscribe.
  3. Plan a simple lead magnet that matches your best content.
- **Prerequisites:** M06.L01
- **Hands-on:** add an inline opt-in to your synced CTA pattern and draft a lead magnet outline. (~25 min)

### M06.L03 — Lawful capture: privacy policy, consent wording and double opt-in
- **File:** `lessons/m06-l03-lawful-email-capture.md`
- **Objectives:**
  1. Generate and customise a privacy policy page with WordPress's built-in privacy tools.
  2. Write clear consent wording next to every form.
  3. Explain when double opt-in is required or recommended (GDPR and similar laws).
- **Prerequisites:** M06.L02
- **Hands-on:** publish your privacy policy, link it in the footer and turn on double opt-in. (~20 min)

### M06.L04 — Comments, community and spam control
- **File:** `lessons/m06-l04-comments-community-spam.md`
- **Objectives:**
  1. Decide whether to enable comments based on your goals and moderation time.
  2. Configure discussion settings and moderation rules.
  3. Set up one anti-spam solution for comments and forms.
- **Prerequisites:** M01.L04, M06.L01
- **Hands-on:** configure moderation and anti-spam, then test with a sample comment. (~15 min)

### M06.L05 — Repurposing workflow: one post into newsletter, social and video
- **File:** `lessons/m06-l05-repurposing-rss.md`
- **Objectives:**
  1. Turn one post into a newsletter issue, three social posts and a short video script.
  2. Use your RSS feeds (site, category) to power newsletters and aggregators.
  3. Use AI as a drafting assistant while keeping your voice and checking facts.
- **Prerequisites:** M06.L02
- **Hands-on:** repurpose one cornerstone post into three formats using a checklist. (~25 min)

### M06.L06 — Monetization models and selling one digital product
- **File:** `lessons/m06-l06-monetization.md`
- **Objectives:**
  1. Compare ads, affiliate links, sponsorships, digital products and memberships for your audience size.
  2. Build a Work With Me page with offers, rates or an inquiry form.
  3. Sell one simple digital product without installing a full store.
- **Prerequisites:** M04.L04, M06.L02
- **Hands-on:** pick one monetization model and publish your Work With Me page. (~25 min)

**Module capstone (`capstones/m06-capstone.md`):** email opt-in + lead magnet + privacy policy, and a "Work With Me" monetization page.

---

## M07 — Protect & Speed Up Your Site

**Goal:** a site that stays up, stays fast and can survive anything. · NN #3, #6, #10, #11

> 🖼️ **Image placeholder: M07 lesson path**  
> _Alt text:_ M07 lesson path: updates and staging, backups and restore, security hardening, performance, content ownership, then the capstone.  
> _Image prompt:_ Clean, flat, minimal horizontal flowchart infographic reading left to right, 6 rounded rectangles joined by simple arrows, labelled exactly: "L01 Updates & staging" → "L02 Backups & restore" → "L03 Security hardening" → "L04 Performance & CWV" → "L05 Export & migrate" → "M07 Capstone". Fill the boxes in a soft palette of cream #FFF9D2, light sky blue #BFDDF0 and medium blue #8CC0EB; make the last box (the capstone) pink #F9B2D7 so it stands out. Dark navy #111844 text, outlines and arrows. Plain white background, modern sans-serif font, generous spacing, no icons, no extra text, no shadows, 16:9.

### M07.L01 — Updates: core, themes and plugins, auto vs manual, testing on staging
- **File:** `lessons/m07-l01-updates-staging.md`
- **Objectives:**
  1. Decide which components to auto-update and which to update manually.
  2. Test updates on a staging copy before applying them live.
  3. Roll back a plugin update that breaks the site.
- **Prerequisites:** M01.L05
- **Hands-on:** create a staging copy, run updates there, then apply them live. (~25 min)

### M07.L02 — Backups in depth: retention, off-site storage and a tested restore
- **File:** `lessons/m07-l02-backups-tested-restore.md`
- **Objectives:**
  1. Set backup frequency and retention to match how often you publish.
  2. Store backups off-site, separate from your host.
  3. Perform and document a full test restore.
- **Prerequisites:** M01.L05, M07.L01
- **Hands-on:** restore your latest backup to staging and record how long it took. (~30 min)

### M07.L03 — Security hardening: login protection, least privilege and pruning
- **File:** `lessons/m07-l03-security-hardening.md`
- **Objectives:**
  1. Add login protection (2FA for all admins, rate limiting or a firewall).
  2. Audit user accounts and downgrade roles to the least privilege needed.
  3. Delete unused plugins and themes, and explain why deactivated plugins are still a risk.
- **Prerequisites:** M01.L05, M06.L01
- **Hands-on:** run a security audit checklist and prune to 10–12 active plugins or fewer. (~20 min)

### M07.L04 — Performance: caching, CDN, lazy loading and Core Web Vitals
- **File:** `lessons/m07-l04-performance-core-web-vitals.md`
- **Objectives:**
  1. Read a PageSpeed Insights report and explain LCP, INP and CLS.
  2. Turn on page caching with one tool (host cache or a single plugin) and decide whether you need a CDN.
  3. Fix the most common causes of slow creator pages: oversized images, heavy embeds, too many plugins.
- **Prerequisites:** M03, M07.L03
- **Hands-on:** measure your homepage, apply two fixes and re-measure. (~25 min)

### M07.L05 — Own your content: export and moving to a new host
- **File:** `lessons/m07-l05-export-migrate.md`
- **Objectives:**
  1. Export all content with Tools → Export and explain what it does and doesn't include.
  2. Plan a host migration with minimal downtime and no broken links.
  3. Keep a copy of your email list and media outside WordPress.
- **Prerequisites:** M07.L02
- **Hands-on:** export your site and import it into a fresh Playground or Local site. (~20 min)

**Module capstone (`capstones/m07-capstone.md`):** perform a test restore, prune plugins, and hit "good" Core Web Vitals on the homepage.

---

## M08 — Measure & Stay Legal

**Goal:** know what's working and publish with legal confidence. · NN #12, #13

> ⚠️ Not legal advice; laws vary by country — every legal lesson links to primary regulators.

> 🖼️ **Image placeholder: M08 lesson path**  
> _Alt text:_ M08 lesson path: choose analytics, read the data, cookie consent, disclosures, copyright and AI content, then the capstone.  
> _Image prompt:_ Clean, flat, minimal horizontal flowchart infographic reading left to right, 6 rounded rectangles joined by simple arrows, labelled exactly: "L01 Choose analytics" → "L02 Read the data" → "L03 Cookie consent" → "L04 Disclosures" → "L05 Copyright & AI" → "M08 Capstone". Fill the boxes in a soft palette of cream #FFF9D2, light sky blue #BFDDF0 and medium blue #8CC0EB; make the last box (the capstone) pink #F9B2D7 so it stands out. Dark navy #111844 text, outlines and arrows. Plain white background, modern sans-serif font, generous spacing, no icons, no extra text, no shadows, 16:9.

### M08.L01 — Choose your analytics: GA4 via Site Kit or a privacy-friendly alternative
- **File:** `lessons/m08-l01-choose-analytics.md`
- **Objectives:**
  1. Compare GA4 (via Site Kit), Jetpack Stats, Independent Analytics, Plausible and Fathom on privacy, cost and depth.
  2. Explain how your analytics choice affects cookie-consent requirements.
  3. Install one analytics tool and confirm it records visits.
- **Prerequisites:** M05.L05
- **Hands-on:** install your chosen analytics and verify a real-time visit. (~20 min)

### M08.L02 — Reading the data: top content, traffic sources, queries and sign-ups
- **File:** `lessons/m08-l02-reading-the-data.md`
- **Objectives:**
  1. Find your top content, traffic sources and search queries.
  2. Track email sign-ups as a conversion.
  3. Run a 30-minute monthly review and turn it into three actions.
- **Prerequisites:** M08.L01, M06.L02
- **Hands-on:** build a one-page monthly dashboard from Search Console and your analytics. (~30 min)

### M08.L03 — Cookie consent where required
- **File:** `lessons/m08-l03-cookie-consent.md`
- **Objectives:**
  1. Explain when GDPR/ePrivacy (and similar laws) require cookie consent.
  2. Audit which cookies your site sets.
  3. Configure one consent plugin, or document why you don't need one.
- **Prerequisites:** M08.L01
- **Hands-on:** scan your site's cookies and set up consent or record your no-consent rationale. (~20 min)

### M08.L04 — Affiliate and sponsorship disclosures
- **File:** `lessons/m08-l04-affiliate-sponsor-disclosures.md`
- **Objectives:**
  1. Apply the FTC Endorsement Guides and UK CAP Code to affiliate links and sponsored posts.
  2. Place clear disclosures where readers see them before the link.
  3. Build a synced disclosure pattern and a site-wide disclosure page.
- **Prerequisites:** M02.L02, M06.L06
- **Hands-on:** create a synced disclosure pattern and publish your disclosure page. (~15 min)

### M08.L05 — Copyright, image licensing and AI-generated content
- **File:** `lessons/m08-l05-copyright-licensing-ai.md`
- **Objectives:**
  1. Distinguish public domain, Creative Commons, royalty-free and licensed images.
  2. Record image sources and licences for every image you publish.
  3. Decide and state how you disclose AI-assisted text and images.
- **Prerequisites:** M03
- **Hands-on:** audit the licences of images on five posts and write your AI-use statement. (~20 min)

**Module capstone (`capstones/m08-capstone.md`):** build a monthly content dashboard and publish disclosure + cookie pages.

---

## M09 — Capstone: Launch Your Creator Site

**Goal:** go live with every non-negotiable in place. · NN #1–#13

> 🖼️ **Image placeholder: M09 lesson path**  
> _Alt text:_ M09 lesson path: run the pre-launch checklist, build a content plan, launch and start the 30-day routine, then the final capstone.  
> _Image prompt:_ Clean, flat, minimal horizontal flowchart infographic reading left to right, 4 rounded rectangles joined by simple arrows, labelled exactly: "L01 Pre-launch checklist" → "L02 Content plan" → "L03 Launch & 30-day routine" → "Final capstone". Fill the boxes in a soft palette of cream #FFF9D2, light sky blue #BFDDF0 and medium blue #8CC0EB; make the last box (the capstone) pink #F9B2D7 so it stands out. Dark navy #111844 text, outlines and arrows. Plain white background, modern sans-serif font, generous spacing, no icons, no extra text, no shadows, 16:9.

### M09.L01 — Pre-launch checklist: the 13 non-negotiables
- **File:** `lessons/m09-l01-pre-launch-checklist.md`
- **Objectives:**
  1. Audit your site against all 13 non-negotiables.
  2. Fix every failing item or record a dated plan to fix it.
  3. Move the practice site to live hosting if you built it locally.
- **Prerequisites:** M01–M08
- **Hands-on:** complete the pre-launch checklist with evidence (screenshots or links) for each item. (~45 min)

### M09.L02 — Content plan: 10 cornerstone topics mapped to categories
- **File:** `lessons/m09-l02-content-plan.md`
- **Objectives:**
  1. Choose 10 cornerstone topics from audience questions and search data.
  2. Map each topic to a category and to supporting posts.
  3. Schedule the first month of publishing.
- **Prerequisites:** M02.L03, M05.L03
- **Hands-on:** fill in the content plan template and schedule two posts. (~30 min)

### M09.L03 — Launch day and your 30-day maintenance routine
- **File:** `lessons/m09-l03-launch-maintenance-routine.md`
- **Objectives:**
  1. Go live, submit the sitemap and announce to your list and socials.
  2. Follow a weekly and monthly maintenance routine (updates, backups, analytics review).
  3. Set calendar reminders so the routine actually happens.
- **Prerequisites:** M09.L01, M09.L02
- **Hands-on:** launch, announce, and set up your 30-day maintenance calendar. (~30 min)

**Final capstone (`capstones/m09-capstone.md`):** a live site with 5 published posts, email capture, backups, SEO plugin, analytics and legal pages — graded against the non-negotiables rubric.
