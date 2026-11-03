# M08 Cheat Sheet — AI, Automation & Scale
*Web Development 101 · Module 8 · checked 2026-11-03*

## Building with AI (L01)
**Prompt:** role and goal · context (stack, existing code) · constraints (accessible, `textContent`, no libraries, no tracking) · output format · acceptance checks. One component per prompt.
**Review every change:**
| Area | Quick check |
|---|---|
| Valid & semantic | W3C checker; `button` for actions, `a` for links |
| Accessible | Tab through it; names on controls; pause for anything moving > 5 s (SC 2.2.2 Pause, Stop, Hide) |
| Secure | No `innerHTML` with URL/form/API data; no keys in front-end; every package looked up on its registry |
| Fast | No new libraries for a few lines; `defer`; no layout shift |
| Private | No unrequested tracking or cookies; consent still works |
| Truthful | Copy, prices and claims are real |
Accept / fix / reject → branch → commit + `ai-log.md` row. AI still invents package names: ≥5.2% of suggested packages for commercial models, 21.7% for open-source ones (Spracklen et al., USENIX Security 2025).

## Webhooks & automation (L02)
API = you ask · webhook = the app pushes a **payload** (JSON) to your **endpoint** instantly.
```
form → webhook → filter (honeypot empty, has @, not +test)
     → duplicate check on lower(trim(email)) → add row → auto-reply → team alert
```
Webhook URL = public address; **keys stay in the tool**, never in HTML/JS. Renaming a form field breaks the mapping. Test: real, duplicate, `+test`, bot, no name; read the run history. Make default reply: 200 `Accepted`.
Free plans (check vendor + date): Make has webhooks (~1,000 credits/month, 2 active scenarios); Zapier free has no webhooks (100 tasks, two-step); n8n free if self-hosted; Formspree webhooks/Zapier = paid.

## Templates & SSGs (L03)
```
_includes/base.njk   layout: <head> from front matter, {{ content | safe }}
_includes/header.njk partials via {% include "header.njk" %}
_data/site.json      values by file name: {{ site.name }}
index.njk            front matter: layout: base.njk · title: … · description: …
eleventy.config.js   passthrough copy for images, css, js, robots.txt, sitemap.xml, icon.svg
_site/               output: don't edit, don't commit
```
```js
// eleventy.config.js ("type": "module" in package.json)
export default function (eleventyConfig) {
  for (const p of ["images", "css", "js", "robots.txt", "sitemap.xml", "icon.svg"]) {
    eleventyConfig.addPassthroughCopy(p);
  }
}
```
`npx @11ty/eleventy --serve` · keep URLs with `permalink: thank-you.html` · Nunjucks escapes by default; `| safe` only for your own HTML · `"type": "module"` for the ESM config · Pages source = GitHub Actions (or build command + `_site`).
Stack: hand-coded (1–2 pages) → SSG → SSG + headless CMS (Decap = Git-based; Contentful/Sanity = API) → WordPress / no-code. Choose by **who edits** and **how much**.

## Multilingual (L04)
```html
<html lang="hi">                                     <!-- dir="rtl" for RTL -->
<link rel="canonical" href="https://site.example/hi/">       <!-- itself -->
<link rel="alternate" hreflang="en" href="https://site.example/">
<link rel="alternate" hreflang="hi" href="https://site.example/hi/">
<link rel="alternate" hreflang="x-default" href="https://site.example/">
```
Same set on **every** version (reciprocal, self-referencing) · `x-default` = fallback for anyone matching no version · ISO 639-1 language (+ ISO 3166-1 region): `en-GB` not `en-UK`, Hindi `hi` not `in` · full `https://` URLs · one method (head, header or sitemap) · Google detects language from visible text, not `lang` (still needed for screen readers; add `lang` to passages in another language, not to brand names) · own URL per language (subdirectory for small sites; no `?lang=`) · visible switcher, names in their own language, **no IP redirects**.
Localize: `new Intl.NumberFormat('hi-IN', { style: 'currency', currency: 'INR' })` → ₹1,299.00 · `Intl.DateTimeFormat('hi-IN', { dateStyle: 'long' })` → 1 दिसंबर 2026 · forms, errors, consent, auto-reply, privacy · **fluent-speaker review**.

## Before you hand over
- [ ] Only real leads get a row, a reply and an alert; no keys in View Source.
- [ ] Templates build and deploy automatically; URLs, robots.txt and sitemap kept.
- [ ] Both languages: same `hreflang` set, self-canonicals, switcher, reviewed translation.
- [ ] Every AI change reviewed, logged and committed.
- [ ] Consent, `generate_lead` and Lighthouse 90+ still hold.
