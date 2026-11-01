# Module 8 cheat sheet — Measure & stay legal
*WordPress 101 for Content Creators · checked against Site Kit 1.190.0, Independent Analytics 2.16.2, Complianz 7.5.6, Yoast SEO 28.8, WordPress 7.1.4, Search Console/GA4 help, FTC, ASA/CAP, CMA, EDPB, ICO and CCPA guidance on 2026-11-01. Not legal advice.*

## Choose analytics (M08.L01)
| Tool | Cookies | Cost | Local? |
|---|---|---|---|
| GA4 via Site Kit | **Yes** → consent for EU/UK | Free | No |
| Jetpack Stats | Mostly no (data to Automattic) | Free non-commercial; paid commercial | No |
| Independent Analytics / Koko | No (data in your DB) | Free (IA real-time, forms = Pro) | **Yes** |
| Plausible / Fathom | No | Paid (Fathom from $15/mo) | No |
- **One tool**, reviewed monthly. **Test logged out**: Site Kit excludes all logged-in users; IA ignores Administrators. GA4: check **Reports → Realtime**; other reports take 24–48 h.
- Site Kit consent: **Settings → Admin Settings → Consent mode → Enable consent mode** (needs a WP Consent API banner plugin).

## Read the data (M08.L02)
| Question | Where |
|---|---|
| What did people search? | Search Console → **Performance → Search results → Queries** (Date → **Compare**) |
| Top content | GA4 **Reports → Engagement → Pages and screens** · IA **Pages** |
| Sources | GA4 **Reports → Acquisition → Traffic acquisition** · IA **Referrers** |
| Sign-ups | `/thanks/` views or `generate_lead` + **confirmed** subscribers in your provider |
- `/thanks/`: noindex (Yoast **Advanced → Allow search engines… → No**), no menus. Fluent Forms **Confirmation Type: To a Page**; Kit **Redirect to another page**, **Send subscriber data** **off**.
- GA4: **Admin → Data display → Events → + Create event** → `generate_lead`, **Mark as key event**, `page_location` contains `/thanks`. Never mark `page_view`.
- Search Console extras: **Branded/Non-branded** filter; **Generative AI** report (impressions, already inside Web totals).
- **30 minutes, first Monday:** 0–5 GSC · 5–15 analytics · 15–20 sign-ups · 20–30 **three actions** *"[Action] on [page] by [date]"*.
| You see | Do |
|---|---|
| High impressions, low CTR | Rewrite title + meta |
| Position 8–20 | Update the post, answer first, add links |
| Top post, few sign-ups | Add a content upgrade/form |
| Clicks fell sharply | URL Inspection, load check, refresh |

## Cookie consent (M08.L03)
- EU/UK: only **strictly necessary** storage without consent; everything else **consent first**. UK: narrow statistics exception (DUAA 2025). EU Digital Omnibus: **proposal, not law** (2026-11).
- Valid: before trackers run · **Reject as easy as Accept** on layer one · no pre-ticks · changeable later.
- US (CCPA, only above thresholds: >$25M revenue, 100,000+ CA residents, or 50% revenue from data): opt-out of sale/sharing + honour **GPC**.
- **Audit logged out** in Chrome Incognito **with third-party cookies allowed for your site** (eye icon; blocked by default): DevTools → **Application → Storage → Cookies** + local/session storage.
- No non-essential storage? → **dated rationale**. Otherwise **one** plugin (Complianz **Wizard → Website Scan → Statistics → Services/Plugins/Advertising → Documents → Finish**). **Deny test:** no `_ga`, embeds show placeholders.
- Remove before you manage: cookieless analytics, click-to-load embeds, local fonts. Re-scan quarterly and after any new embed/plugin/pixel.

## Disclosures (M08.L04)
- **Anything of value** (commission, payment, gift) = disclose, **top of the post, before the first link**.
- UK: **"Ad"** upfront; "#gifted", "aff", "sponsored", "in collaboration with" alone = not enough. CMA fines directly since 2025-04-06.
| Type | Label |
|---|---|
| Affiliate (synced pattern) | ***Ad — affiliate links.*** + each link **(ad)** / Amazon *(paid link)* + `rel="sponsored"` |
| Sponsored (unsynced template) | Title starts **"Ad:"** + ***Ad.*** box naming the brand |
| Gifted (unsynced template) | ***Ad — gifted.*** |
- Amazon: *"As an Amazon Associate I earn from qualifying purchases."* on the site.
- **How I make money** page at `/disclosure/` in the footer; it supports, never replaces, the label on each post.

## Images and AI (M08.L05)
| Type | Conditions |
|---|---|
| Public domain / CC0 | None (credit is polite) |
| CC BY / SA / NC / ND | Credit (TASL) / share alike / **no commercial** / no changes |
| Unsplash, Pexels | Free, credit optional; no reselling as-is; logos/people not covered |
| Royalty-free stock | **Paid** once; follow licence terms |
- Editor **+ → Media → Openverse**: public domain/CC0 only, auto caption. Log every image: source, licence, proof, date; note in the image's **Description**.
- AI: purely AI output isn't copyrightable in the US; label AI images in captions; EU AI Act deepfake labels from 2026-08-02; publish **How I use AI**; no fake personas.

## Your M08 logs and pages
Plugin log (P10, P11) · privacy policy (analytics, cookies) · `/thanks/` · monthly dashboard + actions · cookie table + rationale or Deny/Accept results · Cookie Policy · synced disclosure + templates · **How I make money** · image log · **How I use AI**.
