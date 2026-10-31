# Module 3 cheat sheet — Media that's fast and accessible
*WordPress 101 for Content Creators · checked against WordPress 7.0 core source on 2026-10-31*

## What WordPress makes from one upload (M03.L01)
| Size | Max | Notes |
|---|---|---|
| Thumbnail | 150 × 150 | Cropped square |
| Medium | 300 × 300 | Proportional |
| Medium large | 768 wide | Hidden setting |
| Large | 1024 × 1024 | Usual choice for content images |
| 1536, 2048 | max | Hidden; used in `srcset` |
| Full | original, or `-scaled` (max 2560) | Original always kept on the server |
- Sizes in **Settings → Media** apply to **new** uploads only. WordPress never enlarges images.
- `srcset` lists same-shape copies up to 2048 px; the browser picks the smallest sharp one.
- Media deletes are **permanent**: check **Uploaded to** (list view) first. Swap per post with the Image block's **Replace**.

## Upload widths (observed practice; check your theme's content width)
| Use | Width | Format |
|---|---|---|
| Full-width / hero | 2000–2560 px | JPEG/WebP |
| Content-width (645 px column in Twenty Twenty-Five) | 1300–1600 px | JPEG/WebP |
| Thumbnail source | 600+ px | JPEG/WebP |
| Screenshot, logo, text | as displayed ×2 | PNG or lossless WebP |
| Social share image | 1200 × 630 | JPEG or PNG |

## Compress and convert (M03.L02)
- **Right-size → compress → convert.** Start from the original every time.
- Squoosh: Resize → Compress (MozJPEG/WebP ~75, AVIF ~55) → compare at 100% zoom.
- Core: accepts WebP (5.8+) and AVIF (6.5+); copies at quality 82 JPEG / 86 WebP; **doesn't convert** JPEG → WebP.
- **One** route only: Modern Image Formats (new uploads only; **Output fallback images** option) **or** a full optimiser **or** your host.
- Server support: **Tools → Site Health → Info → Media Handling**. SVG uploads blocked by default.

## Alt text, captions, transcripts (M03.L03)
- **Informative image:** its purpose in this post, one short sentence, no "Image of…".
- **Decorative:** leave **Alternative text** empty → `alt=""` (not the same as missing alt).
- **Link/button:** where it goes ("Rosa's Garden home"). **Chart:** short alt + the data in the text.
- Block alt is copied from the Media Library **on insert**; later library edits don't update posts.
- Video → edited **captions** (YouTube Studio → Subtitles, or Video block → **Text tracks** → `.vtt`, **Kind: Captions**). Audio → **transcript** on the page (Audio block has no tracks).
- File names: `sourdough-first-rise.jpg`, renamed **before** upload ("very light clues" for Google).

## Featured and social images (M03.L04)
- Sidebar → **Featured image** → **Set featured image**. Twenty Twenty-Five crops to **3:2**; keep the subject central.
- Linked featured images in post lists use the **post title** as alt.
- Link previews come from **Open Graph** tags, added by an SEO plugin (M05), not core. 1200 × 630, ~1.91:1, < 8 MB.
- Old preview still showing? Facebook **Sharing Debugger → Scrape Again**; **LinkedIn Post Inspector**. Needs a public URL.

## Video and audio (M03.L05)
| Media | Home |
|---|---|
| Most video | YouTube / Vimeo embed |
| Podcast | Podcast host (feed, apps, stats) + embedded player + transcript |
| Short clip (< ~1 min, a few MB) | Video block: **Preload** Metadata/None, **Poster image**, Muted if autoplay |
- WordPress lazy-loads iframes except the **first 3** images/iframes in the content.
- Embed near the top, or several per page → **facade** (linked thumbnail, or your performance plugin's option). Core has none.
- Measure: DevTools **Lighthouse** (works on Local) · **PageSpeed Insights** (live sites only).

## If something goes wrong
| Problem | First fix |
|---|---|
| "exceeds the maximum upload size for this site" | Resize/compress first, or ask your host to raise the limit |
| Image blurry | Upload a bigger original; **Resolution: Large/Full Size** |
| Page heavy despite resizing | **Resolution: Full Size** on content images → set **Large** |
| No WebP after installing a plugin | Only new uploads convert; upload a fresh image to test |
| Post shows old alt | Edit **Alternative text** in that post's block |
| Broken image | File was deleted: re-upload and **Replace** |
| `.vtt` rejected / captions missing | First line must be `WEBVTT`; set **Kind: Captions**; turn on **CC** |
| Share shows the logo or old image | Set featured image; SEO plugin (M05); re-scrape in the debugger |
| Autoplay doesn't start | Turn on **Muted** (+ **Play inline**) or don't autoplay |
