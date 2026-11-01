# Module 9 cheat sheet — Launch your creator site
*WordPress 101 for Content Creators · checked against WordPress 7.1, UpdraftPlus 1.26.14, Yoast SEO 28.8, Search Console, Bing Webmaster Tools and Google Calendar help on 2026-11-01. Not legal advice.*

## Pre-launch checklist (M09.L01)
Each item gets a **check**, a **pass rule** and **evidence**. Status: ✅ pass · 🛠️ fix now · 📅 dated plan (max **3**) · ⛔ blocker (no plan allowed).

| # | Item | Pass rule (short) |
|---|---|---|
| 1 ⛔ | Own your platform | Self-hosted (or plugins + export); domain in your name; **Tools → Export** works |
| 2 ⛔ | Permalinks | **Post name**, unchanged since the first post |
| 3 ⛔ | Safety net | Schedules **not Manual**; off-site; 2FA for every admin/editor; a dated test restore |
| 4 | Block editor | One scheduled post; synced CTA + author box |
| 5 | Categories | 4–7, with descriptions; no "Uncategorized" in use; main ones in the menu |
| 6 | Media | Width rule (e.g. ≤1600 px); WebP/AVIF or compressed; no multi-MB files |
| 7 | Accessibility | Alt text, one H1, no skipped headings, contrast, link text, keyboard, captions |
| 8 | SEO | **One** SEO plugin; `/sitemap_index.xml` loads; titles + metas on key pages |
| 9 ⛔ | Email + privacy | Confirmed subscriber in the **real** list; privacy notice by the form |
| 10 | Updates + lean | Latest WordPress; no inactive plugins/themes; ≤10–12 active, one per job |
| 11 | Performance | Mobile homepage: LCP ≤2.5 s, CLS ≤0.1, TBT ≤200 ms (lab) or field "good" |
| 12 ⛔ | Legal pages | Privacy · How I make money · Cookie Policy (if banner) in the footer; disclosures under the title |
| 13 | Analytics | **One** tool; logged-out visit counted; monthly review in the calendar |
- Dated plan format: *"[Fix] on [what] by [date]. Owner: [you]."*
- Clean out practice leftovers: sample post/page, drill posts, test users, test subscribers. Empty Trash.

## Local → live (M09.L01 Part C)
1. Host + domain; install WordPress with **HTTPS**.
2. Local: UpdraftPlus **Backup Now** → download all parts.
3. Live: UpdraftPlus → **Existing backups → Upload backup files** → **Restore**, all 5 components, **Search and replace site location in the database (migrate)** ticked (free). Upload too big? Host's migration service.
4. **First five minutes:** addresses `https://` · **Permalinks → Save Changes** · **Discourage search engines** unticked · new password · reconnect email, remote storage, schedules · **Delete Cache**.

## Content plan (M09.L02)
- **Cornerstone** = best answer to a big question; **supporting posts** link to it; one cluster per category.
- Topics from real questions: readers · Search Console **Queries** · People also ask · Google Trends · communities · your own experience.
- Score 1–3 on **demand · experience · depth · business fit**; keep the top **10**, about 1–3 per category.
- Yoast: **Mark as cornerstone content**. One cluster a month, at a pace you can keep; schedule ahead.

## Launch day (M09.L03)
| Step | Do |
|---|---|
| Morning re-check | Search visible · backups not Manual · logged-out sign-up confirmed · HTTPS padlock · coming-soon **off** |
| Search engines | Search Console **Indexing → Sitemaps** → `sitemap_index.xml` (**Status: Success**) · **URL Inspection → Request indexing** for homepage + 1 cornerstone only · Bing **Import** from GSC |
| People | Launch email to **consented** subscribers only · your own socials · `?utm_source=…&utm_medium=…&utm_campaign=launch` |
| 48 hours | Morning + evening: analytics, sign-ups, comments, 404s |

## The routine (M09.L03)
| Rhythm | Time | Core tasks |
|---|---|---|
| **Weekly** (Monday) | 25 min | Backup ran? · updates (backup → staging for high-risk → one at a time → 5-min check → log) · comments · publish per plan |
| **Monthly** (first Monday) | 45 min | Dashboard row + **3 dated actions** · content plan · Site Health · GSC **Pages** · offline backup · move-out kit |
| **Quarterly** | 60 min | **Timed test restore** · user + plugin audit · cookie re-scan · image log spot-check · affiliate terms |
| **Yearly** (a month before domain renewal) | 90 min | Renewals + prices · legal pages · rebuild content plan · full 13-item checklist |
- Launch month one-offs: **day 1** sitemap still Success · **day 3** URL Inspection (crawling can take days to weeks) · **day 7** first weekly care · **day 14** scheduled posts + sign-ups · **day 30** first monthly review.

## If something goes wrong
| Problem | First fix |
|---|---|
| Not in Google after launch | **Settings → Reading**: untick **Discourage search engines**; Site Health shows *"Search engines are discouraged from indexing this site."* while it's on |
| Site still points to `yoursite.local` | Restore again with **Search and replace site location** ticked |
| Sign-ups vanish, no error | Form sends to a test list or the feed is off → fix, re-test from a phone, look for **confirmed** |
| Sitemap *Couldn't fetch* | Often clears within a day; check `/sitemap_index.xml` loads logged out |
| Backups stopped after the move | Schedules came across as **Manual**; reconnect remote storage |
| Scheduled post didn't publish | Check the Posts list status; ask your host about WP-Cron |
