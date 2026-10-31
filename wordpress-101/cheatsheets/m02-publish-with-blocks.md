# Module 2 cheat sheet — Publish with the block editor
*WordPress 101 for Content Creators · checked against WordPress 7.0 core source on 2026-10-31*

## Post or page? (M02.L01)
- **Post** = dated, in the blog index, RSS feed and archives, uses categories and tags (articles, recipes, episode notes).
- **Page** = permanent, found from menus, no categories or tags (About, Start Here, Contact, Work With Me).

## Shortcuts (Windows/Linux · Mac) (M02.L01)
| Do this | Keys |
|---|---|
| Insert any block | `/` + block name at the start of an empty paragraph |
| Heading / list / quote | type `## ` · `- ` · `1. ` · `> ` at the start of a paragraph |
| Link | **Ctrl+K** · **⌘+K** |
| Save | **Ctrl+S** · **⌘+S** |
| Duplicate / remove block | **Ctrl+Shift+D** / **Shift+Alt+Z** · **⌘+Shift+D** / **Ctrl+Option+Z** |
| Move block up / down | **Ctrl+Shift+Alt+T / Y** · **⌘+Shift+Option+T / Y** |
| List view | **Shift+Alt+O** · **Ctrl+Option+O** |
| Settings sidebar | **Ctrl+Shift+,** · **⌘+Shift+,** |
| All shortcuts | **Shift+Alt+H** · **Ctrl+Option+H** |
| Find any screen | **Ctrl+K** in the dashboard · **⌘+K** |

## Patterns (M02.L02)
| | Synced | Unsynced |
|---|---|---|
| Edit once, updates everywhere | ✅ (via **Edit original**) | ❌ |
| Use for | Newsletter CTA, author box, disclaimers | Recipe card, episode notes, pros/cons |
- Create: select blocks → **⋮ Options → Create pattern** → name, category, **Synced** on/off.
- **Overrides:** per-post text in Paragraph, Heading, Image and Button blocks (**Advanced → Enable overrides**).
- **Detach** (confirm "Detach pattern?") = that copy stops updating. Manage all: **Appearance → Editor → Patterns** (block themes) or **Manage patterns** in the inserter's Patterns tab.

## Categories and tags (M02.L03)
- **Categories** = 4–7 site sections (content pillars), **one per post**, each with a description. Rename **Uncategorized** (the default can't be deleted; change it in **Settings → Writing**).
- **Tags** = optional cross-cutting topics. **Rule:** reuse first · new tag only if 3+ posts will use it · max 3 per post · singular, lowercase.
- Archives: `/category/<slug>/` · `/tag/<slug>/`. Changing a category slug changes its archive URL (no automatic redirect).

## Workflow (M02.L04)
- Statuses: **Draft** → **Pending** (Submit for Review) → **Scheduled** → **Published** · **Private** = admins/editors only.
- **Revisions:** sidebar → **Revisions** (appears at 2+) → slider → **Restore This Revision**. All kept by default. Not a backup.
- **Schedule:** sidebar → **Publish: Immediately** → pick date/time (site timezone) → **Schedule** → **Schedule**. On quiet sites WP-Cron can be late (**Missed schedule**; fix in M07).
- **Notes:** block **⋮ Options → Add note** (6.9+); resolve before publishing.
- **Pre-publish checklist:** title · slug · excerpt · one category (+ tags by rule) · featured image · links · Preview on a phone-sized window.

## Embeds (M02.L05)
- Paste a supported link **on its own line** (YouTube, Vimeo, Spotify, SoundCloud, Pocket Casts, Bluesky, Reddit, TikTok, Pinterest…). Podcasts: use the **episode** link.
- **Not in core:** Instagram, Facebook (removed 5.5.2), Apple Podcasts, `x.com` links (use `twitter.com/…/status/…`).
- **Custom HTML** embed code: Administrators and Editors only.
- One purposeful embed per post; for the rest, screenshot **your own** posts or quote a short line, plus a link.
- Measure: DevTools → **Network** → Disable cache → reload → *requests · transferred*.

## If something goes wrong
| Problem | First fix |
|---|---|
| Deleted or overwrote content | **Revisions** → restore |
| One post didn't get the CTA update | That copy was detached: delete it, re-insert the synced pattern |
| Can't delete Uncategorized | It's the default: rename it or change the default in Settings → Writing |
| `/category/…/` shows Not Found | Check the slug, then Settings → Permalinks → Save Changes |
| Scheduled post didn't go out | **Missed schedule**: publish manually; set up real cron later (M07) |
| "Sorry, this content could not be embedded." | Not a core provider or private post: **Convert to link** + screenshot/quote |
