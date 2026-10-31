# Module 4 cheat sheet — Design without code: themes, Site Editor and accessible pages
*WordPress 101 for Content Creators · checked against WordPress 7.0, Twenty Twenty-Five 1.5 and WCAG 2.2 on 2026-10-31*

## Choose a theme (M04.L01)
| Block theme | Classic theme |
|---|---|
| **Appearance → Editor** (Site Editor) | **Appearance → Customize**, Widgets, Menus |
| Header, footer, templates edited with blocks | Customizer options, page builder or code |
| Navigation block | Appearance → Menus |
- Vet on the directory page: **Last updated** (≤ 6 months ideal), **Minimum WordPress / PHP** (both met by your site), installs, ratings, **accessibility-ready** tag (a reviewed minimum, not a WCAG AA guarantee).
- Avoid themes that **require** a page builder or several plugins. No pirated ("nulled") themes.
- **Install** changes nothing → **Live Preview** with your posts → back up → **Activate** (Local/staging first).
- Keep the active theme + **one default theme**; delete the rest.

## Site Editor layers (M04.L02)
| Change should apply to… | Use |
|---|---|
| The whole site's colours, fonts, spacing | **Styles** (global styles) |
| Header / footer everywhere | **Template part** (Patterns → Template parts) |
| Every post / every page / blog list | **Template** (Single Posts, Pages, Blog Home, All Archives, Search Results, Page: 404, Index) |
| One post only | The post itself |
- **Styles → Colors → Edit palette:** change the theme's slots (**Base**, **Contrast**, **Accent 1–6**), not individual blocks.
- **Typography → Manage fonts:** Library · Upload (.woff2/.woff/.ttf/.otf) · Install Fonts (asks to **Allow access to Google Fonts**; fonts are then stored on your site). Max 2 families.
- Most specific wins: **block setting > block-type style > element style > theme default**.
- Your edits are saved as **your copy**. **⋮ → Reset** ("Reset to default and clear all customizations?") restores the theme's version and removes **all** your changes to it. **Styles → Revisions → Apply** restores earlier styles.
- Template edits and styles belong to the theme; they don't follow you to a new one.

## Homepage, menu, footer (M04.L03)
- **Settings → Reading → A static page:** **Homepage:** Home · **Posts page:** Blog. (Site Editor shortcut: Pages → ⋮ → **Set as homepage** / **Set as posts page**.)
- The posts page shows your posts with **Blog Home**; content typed on it isn't shown.
- TT5 Home: **Template → Change template → Page No Title**, then make your headline the **H1**.
- Navigation block not set to a menu → shows your **most recently published** menu; none yet → imports a classic menu or a **Page List of all pages**. Use **Create new Menu**, name it in **Advanced → Menu name**, 4–6 items.
- **Overlay Visibility:** Mobile (default) · Off · Always.
- TT5 footer ships **8 placeholder links to `#`**: replace or delete. Link only **published** pages.
- **Social Icons:** full profile URLs; **Open links in new tab** off by default (leave it).

## Creator pages (M04.L04)
| Page | First screen / must have |
|---|---|
| **About** | Who it's for + the outcome → proof → short story → one next step |
| **Start Here** | 2–3 reader goals → 3 best posts each → category link → newsletter |
| **Contact** | What to use it for, reply time, form, one-line privacy note |
| **Work With Me** (draft) | Who you work with · audience (dated) · offers + "from" rates · partners · disclosure · next step |
- **One** form plugin. Fluent Forms: turn on **Enable Honeypot Security** + **Token Based Spam Protection** (both off by default); the Contact Form template's **Admin Notification Email is off** → turn it on, set **Reply To**; consider **Disable IP Logging**.
- Test: send a message → **Entries** + Local **Tools → Mailpit → Open Mailpit**. Live site emails missing → set up SMTP (M07).

## Accessibility checks (M04.L05) — WCAG 2.2 AA basics
| Check | Pass |
|---|---|
| Contrast (1.4.3) | Text **4.5:1**; large text (24 px / ~19 px bold) **3:1** |
| Headings (1.3.1) | One **H1**, then H2 → H3 in order (Document Overview → **Outline**) |
| Links (2.4.4) | Link words say where it goes; no "click here", no empty links |
| Keyboard (2.1.1, 2.4.7) | Tab/Shift+Tab/Enter/Space/Esc work; focus always visible |
| Focus not obscured (2.4.11) | Focused item not hidden by sticky header or banner |
| Target size (2.5.8) | Targets ≥ **24 × 24** px or well spaced |
| Reflow (1.4.10) | Works at **320 px** / 400% zoom without sideways scrolling |
- Top failures (WebAIM Million 2026): low contrast **83.9%** · missing alt **53.1%** · missing form labels **51%** · empty links **46.3%**.
- Tools: Chrome **Toggle device toolbar** · Firefox **Ctrl+Shift+M** · **WAVE** extension · Lighthouse **Accessibility** · Local **Live Link** for a real phone.
- Keyboard path: **Skip to content** → header → menu button (Enter opens, Esc closes) → content → footer → form.
- No overlay plugins. Automated scans find only some issues; always add the manual checks.

## If something goes wrong
| Problem | First fix |
|---|---|
| No **Appearance → Editor** | Classic theme active → switch to a block theme |
| One heading won't take the new brand colour | Block-level override → select it, clear its colour |
| Posts suddenly missing titles / layout broken | **Templates → Single Posts → ⋮ → Reset**, then redo good changes |
| Menu gone on every page | Header part edited → **Patterns → Template parts → Header → ⋮ → Reset** |
| Every page appears in the menu | Fallback Page List → **Create new Menu** |
| Homepage still shows latest posts | **Settings → Reading** → pick Home → **Save Changes** |
| Big "Home" title on the homepage | **Change template → Page No Title** + H1 headline |
| Form sends no email | Turn on the form's notification; check **Entries**; SMTP on live sites |
| Real messages rejected as spam | Exclude Contact page from page caching |
| WAVE contrast error | Fix the palette in Styles, or use a darker shade for text |
| "(Incorrect heading level)" | Change the level in the block toolbar (H2 → H3, not H4) |
