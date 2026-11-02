# M04 Cheat Sheet — Tools, Version Control & Publishing
*Web Development 101 · Module 4 · checked 2026-11-02*

## Folders, files and paths (L01)
```
nila-launch/          ← open this folder in VS Code (the site root)
├── index.html        ← home page: the file a server sends for the folder
├── css/styles.css
└── images/beans.jpg  ← lowercase, hyphens, no spaces
```
| Path in `index.html` | Works from a double-click | Local server | GitHub Pages project address |
|---|---|---|---|
| `css/styles.css` (relative) | ✅ | ✅ | ✅ |
| `/css/styles.css` (root-relative) | ❌ | ✅ | ❌ (`/` = `username.github.io/`) |
| `C:\Users\…\styles.css` (absolute file) | Only on your computer | ❌ | ❌ |
**Case:** `Beans.jpg` ≠ `beans.jpg` live (Windows/Mac hide it). Find capitals in paths: VS Code search, regex on: `(src="|href="|url\(["']?)[^"')]*[A-Z]`.
**Live Preview:** Command Palette → **Live Preview: Start Server** (port 3000, next free one if busy). Missing file = 404.
**Trust:** File → Open Folder; trust only your own folders (Restricted Mode blocks terminal, tasks, extensions…).

## Git and GitHub (L02)
| Do | VS Code | Terminal |
|---|---|---|
| See changes | Source Control (M = modified, U = untracked) | `git status` |
| Stage | `+` | `git add <file>` |
| Commit | message → ✓ Commit | `git commit -m "Add pricing section"` |
| Send to GitHub | Sync / Publish Branch | `git push` |
| Get changes | Sync | `git pull` |
| Discard uncommitted edits | ↶ Discard Changes | `git restore <file>` |
| Undo a pushed commit | — | `git revert HEAD --no-edit` then `git push` |
| History | Timeline / Graph | `git log --oneline` |
**Messages:** imperative, specific, ≤ 50 chars: "Fix hero image case". **First commit:** `.gitignore` (`.DS_Store`, `Thumbs.db`, `.env`, `*.zip`, `.vscode/`).
**Never commit** passwords, API keys, `.env`, client data. `.gitignore` doesn't untrack committed files (`git rm --cached`), and history keeps them: **rotate** any leaked key.
**GitHub account:** 2FA on; push with a token or Git Credential Manager (no passwords); Settings → Emails → keep email private (no-reply address).
**Revert vs reset:** revert = a new commit that undoes (safe once pushed); don't rewrite shared history.

## Deploy (L03)
**GitHub Pages:** repo **Settings → Pages → Deploy from a branch → main · /(root) → Save** → Actions tab "pages build and deployment" ✓ → `https://username.github.io/repo/`. Up to 10 min; cache `max-age=600`.
| Host (Free) | Repo | Limits | Notes |
|---|---|---|---|
| GitHub Pages | Public (private needs paid plan) | 1 GB site, soft 100 GB/month, 10 builds/hour | Not for shops or SaaS |
| Netlify | Public or private | 300 credits/month; deploy 15, 20 per GB; site pauses | Deploy previews |
| Cloudflare | Public or private | Pages: 500 builds/month, 20,000 files, 25 MiB/file | New projects steered to Workers |
**Test live:** Network + Disable cache (all 200) · `http://` → 301 → `https://` · `/nope.html` → 404 · a real phone · check Actions before judging a fix.

## Domain, DNS and HTTPS (L04)
| Type | Name | Value |
|---|---|---|
| A ×4 | `@` | `185.199.108.153` · `.109.153` · `.110.153` · `.111.153` |
| AAAA ×4 (optional) | `@` | `2606:50c0:8000::153` … `8003::153` |
| CNAME | `www` | `username.github.io` (no `https://`, no path) |
| TXT | `_github-pages-challenge-username` | code from GitHub (verify first) |
| MX, email TXT | — | **leave alone** |
**Order:** screenshot DNS → verify domain (profile Settings → Pages) → repo Settings → Pages → Custom domain → records → Dig → green DNS check → wait for certificate (≤ 1 h) → **Enforce HTTPS** → test `http`/`https` × apex/`www` → one canonical. DNS can take up to 24 h.
**Never:** wildcard `*` records, deleting MX, old IPs from blogs, buying on first-year price, someone else's account.
| Error | Means |
|---|---|
| "Site not found · GitHub Pages" (404) | CNAME points at the wrong `*.github.io`, or no custom domain set in the repo |
| `DNS_PROBE_FINISHED_NXDOMAIN` | No record for that name (typo) or domain lapsed |
| `NET::ERR_CERT_COMMON_NAME_INVALID` | Your certificate isn't issued yet (`*.github.io` cert showing) |
| HTTPS never provisions | CAA record not allowing `letsencrypt.org` |

## Choosing how to build (L05)
**Seven questions:** who edits ×2 · how often ×2 · features · budget · skills · ownership · exit.
| Fits | When |
|---|---|
| Hand-coded static | Rare changes, someone codes, near-zero cost |
| WordPress | Blog, several editors, own and move your site → **WordPress 101** |
| No-code builder | Non-technical owner, no maintenance, monthly fee, limited exit |
| Shop platform | Real products, stock, cart, shipping |
**Three-year cost** = platform + domain (renewal) + themes/plugins/apps + hours × value + exit cost. Write it down with a "revisit when" trigger.

## Before you hand over
- [ ] One `https://` canonical address; all variants 301 there; tags (`canonical`, `og:url`, `og:image`) match.
- [ ] No red requests live (desktop and phone), cache disabled.
- [ ] ≥ 5 clear commits incl. a revert; no secrets in history.
- [ ] Domain in the owner's account, auto-renew + 2FA on, MX intact.
- [ ] Build decision written and pushed.
