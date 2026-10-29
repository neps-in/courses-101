# Module 1 cheat sheet — Own your platform
*WordPress 101 for Content Creators · checked against WordPress 7.1.4 on 2026-10-29*

## Choose (M01.L01–L02)
- **Ownership first:** your own domain + an email list you can export. Followers on platforms aren't yours.
- **WordPress.org** = you host and control it · **WordPress.com** = same software, they run it · **Substack/Ghost** = newsletter-first · **Medium** = distribution, not a home.
- **Domain:** short, sayable, no hyphens or numbers, auto-renew on. Compare **renewal** prices. New registrations and transfers are usually locked for **60 days** (ICANN has approved 30; check).
- **Host checklist:** PHP **8.3+** · MySQL 8.0+/MariaDB 10.6+ · free auto-renewing SSL · daily **off-site** backups · staging · server caching · WordPress-savvy support · clear **renewal** price · full backup download.
- **Compare 3-year cost** = first year + 2 × renewal.

## DNS in one line each (M01.L02)
| Record | Does | Check with |
|---|---|---|
| A / AAAA | name → server IP | `nslookup yourdomain.com` |
| CNAME | name → another name (`www`) | `nslookup www.yourdomain.com` |
| MX | where email goes | `nslookup -type=MX yourdomain.com` |
| TXT | verification, SPF/DKIM | `nslookup -type=TXT yourdomain.com` |
| TTL | how long answers are cached | why changes "propagate" |

## Install and HTTPS (M01.L03)
- Practice site: **Local** (localwp.com, free). Real site: host's one-click installer. Experiments: Playground.
- Username **not** `admin`; password from a password manager.
- HTTPS done = padlock ✅ + **Settings → General** both addresses `https://` ✅ + **Tools → Site Health** clean ✅ + `http://` redirects ✅.
- Lost in the dashboard? **Ctrl+K / ⌘+K**.

## First-day settings (M01.L04)
| Screen | Set |
|---|---|
| Settings → General | Title, tagline, language, **city** timezone; "Anyone can register" **off**; default role Subscriber |
| Settings → Permalinks | **Post name** before the first real post |
| Settings → Reading | Feed: full text or excerpt (on purpose); "Discourage search engines" **off** on a live site |
| Settings → Discussion | Moderation on; close comments on old posts (30–90 days); pingbacks/trackbacks **off** |
| Clean-up | Trash Hello world! and Sample Page; **keep** the Privacy Policy draft |

## Safety net (M01.L05)
- **Backups:** one plugin (e.g. UpdraftPlus) **or** host off-site backups. Database daily (keep 14), files weekly (keep 4). Check the first one **arrived**. 3-2-1 rule.
- **Logins:** 20+ character unique password · 2FA with an authenticator app or passkey · **backup codes saved before you need them**.
- **Roles:** Administrator = you · Editor = trusted managing editor · Author = regular writer (own posts) · Contributor = submits for review · Subscriber = profile only.

## If something goes wrong
| Problem | First fix |
|---|---|
| "Not secure" | Turn on host SSL, then set both addresses to `https://` |
| Posts show "Not Found" after permalinks change | Settings → Permalinks → Save Changes again |
| Scheduled posts at the wrong hour | Timezone → choose a city |
| Site not in Google after launch | Untick "Discourage search engines" |
| Locked out of 2FA | Use a saved backup code; otherwise host disables the Two Factor plugin |
| Backups missing from cloud | Re-authenticate remote storage, run Backup Now, check the folder |
