# Module 7 cheat sheet — Protect & speed up your site
*WordPress 101 for Content Creators · checked against WordPress 7.1.4, UpdraftPlus 1.26.14, Two Factor 0.17.0, Limit Login Attempts Reloaded 3.3.10, WP Super Cache 3.1.4, WordPress Importer 0.9.7, web.dev and Lighthouse 13 on 2026-11-01.*

## Updates (M07.L01)
| Component | Auto-update? |
|---|---|
| Core maintenance/security (7.1.3 → 7.1.4) | **Yes** (default) |
| Core major (7.0 → 7.1) | Manual within 1–2 weeks, after a staging test (on by default for sites installed since 5.6) |
| Small trusted plugins (anti-spam, redirects, SEO) | **Yes** |
| Builders, forms, checkout, caching | **Manual**, test on staging |
| Inactive plugins/themes | **Delete** (keep one default theme) |
- Status check: **Dashboard → Updates** or `api.wordpress.org/core/stable-check/1.0/` (latest / outdated / insecure).
- Routine: **backup → staging for high-risk → live one at a time → 5-minute check** (homepage, post, forms, editor, dashboard) **→ log it**.
- Roll back one plugin: WordPress.org **Advanced View → Previous Versions** zip → **Upload Plugin → Replace current with uploaded** (or WP Rollback). Can't tell what broke? Restore a backup.
- Staging: **Discourage search engines** ticked on staging only. Stuck on *"Briefly unavailable for scheduled maintenance"*? Delete `.maintenance`.

## Backups and restore (M07.L02)
| You publish | Database | Keep | Files | Keep |
|---|---|---|---|---|
| Weekly or less | Daily | 14 | Weekly | 4 |
| Several times a week | Daily | 30 | Weekly | 4–5 |
| Daily / busy comments / sales | Every 12 h | 60 | Daily | 14 |
| **Everyone** | Monthly offline download of a full set, keep 3 | | | |
- **Frequency = how much you can lose (RPO). Retention = how far back you can go**, which must outlast the time you'd take to notice a problem.
- Off-site = different company and login from your host, **with 2FA**. Space needed ≈ set size × retention (free Google: 15 GB shared).
- **Test restore** (every 3 months, after changing host/tool): fresh Local site → UpdraftPlus, schedules **Manual** → same storage → **Rescan remote storage** (or **Upload backup files**) → **Restore**, all 5 components → keep **Search and replace site location in the database (migrate)** ticked → log in with the **original** login → check pages → **restore log** (RTO, RPO, surprises, next date).
- Staging clones carry live's UpdraftPlus schedule: set **Manual** first, or staging prunes live backups. Never **Delete this backup set** on a test site.

## Security hardening (M07.L03)
- Core allows **unlimited** login attempts. Add **2FA for every admin and editor** + **one** rate-limit/firewall layer.
| Job | Free option | Notes |
|---|---|---|
| 2FA | Two Factor | No enforcement setting: check the **Two-Factor** column on **Users**. Need to require it by role? Swap to WP 2FA |
| Rate limiting | Limit Login Attempts Reloaded | Defaults: 4 retries · 20 min · after 4 lockouts → 24 h. Pop-up: **Skip** (free Local App) |
| Firewall | Host/CDN firewall · Wordfence | Wordfence covers login limiting too: don't add LLAR |
- Users: **Change role to…** → lowest that works. Leavers: **Delete** → **Attribute all content to another user.** (never *Delete all content.* by accident).
- Revoke unused **Application Passwords** (they skip 2FA). **Log Out Everywhere Else** after a lost device.
- **Settings → General:** **Anyone can register** off; **New User Default Role** Subscriber (7.0+ hides Admin/Editor unless already set).
- **Deactivated ≠ deleted:** files stay on the server. Target **≤ 10–12 active plugins**, one per job. Site Health: no *"You should remove inactive plugins/themes"*.

## Performance (M07.L04)
| Metric | Measures | Good | Poor |
|---|---|---|---|
| **LCP** | Main content appears | ≤ 2.5 s | > 4 s |
| **INP** | Reacts to taps/clicks | ≤ 200 ms | > 500 ms |
| **CLS** | Doesn't jump | ≤ 0.1 | > 0.25 |
- Pass = 75% of real visits good on all three. **Field** (top of PSI, real Chrome users, 28 days) vs **lab** (Lighthouse; **TBT** stands in for INP).
- Measure: Mobile, **3 runs, middle result**, same tool before and after. Local → Lighthouse (DevTools, Incognito); live → pagespeed.web.dev.
- Core already: lazy-loads all but the first 3 images/iframes · `fetchpriority="high"` on the first large image · prefetches links for logged-out visitors (6.8+).
- **One page cache:** host's → LiteSpeed Cache (LiteSpeed servers only) → WP Super Cache (**Easy → Caching On → Update Status**, **Test Cache** → *"The timestamps on both pages match!"*). Test **logged out**. **Delete Cache** after site-wide changes it doesn't detect (Settings → General, global styles, widgets) and after a restore; post edits, comments, classic menus and theme switches clear it automatically.
| Insight | Usual fix |
|---|---|
| Improve image delivery / slow LCP image | Resize + compress to your M03 rule (e.g. 1600 px WebP) |
| LCP request discovery (lazy-loaded) | Turn off plugin lazy-load for the hero |
| Third parties / high TBT | Facade for top embeds; drop social feeds |
| Render-blocking requests | Delete plugins; load scripts only where used |
| Layout shift culprits | Reserve space for ads/embeds; overlay cookie banner |
- CDN: readers far from your server or image-heavy → host CDN or one CDN. Local audience + caching → optional.

## Export and moving (M07.L05)
- **Tools → Export → All content** (WXR): posts, pages, comments, terms, menus, custom fields, patterns, templates. **Not:** media files (URLs only), themes, plugins, settings, passwords, plugin tables (redirects, form entries, MailPoet lists).
- Import: **Tools → Import → WordPress → Install Now → Run Importer** → **Assign Authors** → **Download and import file attachments**. Local/private addresses can't be downloaded from (*"A valid URL was not provided."*).
- **Move hosts with a full-site migration**, not WXR. Same domain = no redirects; new domain = 301 every URL + Search Console **Change of Address**.
- Move order: lower TTL → full backup → restore on new host → check on **temporary URL** → freeze + switch DNS + HTTPS → watch 1–2 weeks → cancel old host.
- **Move-out kit:** full backup · WXR · subscriber CSV with consent · media originals · accounts list (logins in password manager) · refresh monthly.

## Your M07 logs
Plugin log (+ Auto-updates) · weekly update routine · restore log · security log · performance before/after · CDN decision · move-out kit · migration checklist.
