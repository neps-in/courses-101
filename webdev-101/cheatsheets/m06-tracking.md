# M06 Cheat Sheet — Tracking, Analytics & Consent
*Web Development 101 · Module 6 · checked 2026-11-03 · not legal advice*

## Tags and UTMs (L01)
A tag sends a request to a vendor and usually sets cookies. GA4: `POST …google-analytics.com/g/collect` (`tid` = `G-…`, `en` = event, `dl` = page URL, `cid` = client ID; cookies `_ga`, `_ga_<ID>`). Meta: `facebook.com/tr/` (`id`, `ev`, `dl`; cookie `_fbp`). **Every tag sees the full URL: no personal data in URLs.**
```
https://nilacoffee.in/?utm_source=newsletter&utm_medium=email&utm_campaign=launch-2026&utm_content=header-button
```
Always `utm_source`, `utm_medium`, `utm_campaign` · values are **case sensitive** → lowercase, hyphens · one `?`, then `&` · `?…` before `#section` · never on internal links.
| `utm_medium` | GA4 default channel |
|---|---|
| `email` (or source `email`) | Email |
| `social`, `social-network`, `social-media`, `sm` | Organic Social |
| social source + `cpc` / `ppc` / `paid…` / `retargeting` | Paid Social |
| `referral`, `app`, `link` | Referral |
| `affiliate` | Affiliates |
| anything else (e.g. `newsletter`, `qr`) | Unassigned |

## GA4 and key events (L02)
Property (time zone, currency) → web data stream (Measurement ID `G-…`) → tag on every page. Retention → **14 months**. Enhanced measurement: `page_view`, `scroll`, outbound `click`, `file_download`, `form_start`/`form_submit` (**don't star form events**).
Lead: `generate_lead` (+ optional `lead_source`, `currency`, `value`) **only after `response.ok`**; star it in Admin → Data display → Events. Verify: Network `collect` → Realtime (minutes) → DebugView (Tag Assistant). Internal traffic: data stream → Configure tag settings → Define internal traffic; Data filters: **Testing** first (Active is permanent). Standard reports lag 12–48 h. Read: Acquisition → Traffic acquisition (Session source / medium; Key events column → `generate_lead`; session key event rate).

## Google Tag Manager (L03)
Head snippet as high in `<head>` as possible + `<noscript>` after `<body>`, every page; **remove gtag.js** (else double page views).
| Build | Setting |
|---|---|
| Google tag | Tag ID `G-…` · Initialization – All Pages |
| Data Layer Variable | `form_name` |
| Custom Event trigger | `generate_lead` (exact match) |
| GA4 Event tag | Event Name `generate_lead` · `lead_source` = `{{DLV – form_name}}` |
```js
// in the form's response.ok branch
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({ event: 'generate_lead', form_name: 'launch-list' });
```
**Preview** (Tag Assistant) → **Submit → Publish** a named version → roll back: Versions → Actions → **Set as Latest Version** → Publish. A mistyped container ID loads an empty container with no error.

## Consent (L04)
| | Model | Must-have |
|---|---|---|
| EU/UK | Opt-in before non-essential cookies | Accept + Reject equal on the first layer; withdraw "as easy as" give; UK 2025 Act: some statistics cookies with notice + opt-out (check ICO) |
| California | Opt-out of sale/sharing | "Do Not Sell or Share" / "Your Privacy Choices" link; honour Global Privacy Control |
| India (DPDP) | Consent with notice | Free, specific, informed, unconditional, unambiguous; duties phase in to ~May 2027 |
| Brazil (LGPD) | Consent or another basis | Free, informed, unambiguous; ANPD cookie guide |
```html
<script> /* FIRST in <head>, before GTM */
  window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);}
  gtag('consent', 'default', { ad_storage: 'denied', ad_user_data: 'denied',
    ad_personalization: 'denied', analytics_storage: 'denied', wait_for_update: 500 });
  if (localStorage.getItem('nila-consent') === 'granted') gtag('consent', 'update', { analytics_storage: 'granted' });
</script>
```
On choice: `localStorage.setItem('nila-consent', choice); gtag('consent', 'update', { analytics_storage: choice });` · Cookie settings button reopens the banner. **Basic** = tags wait for consent (GTM: Require additional consent → `analytics_storage`); **advanced** = cookieless pings while denied (`gcs=G100`). CMP from Google's partner list if you run ads to Europe.

## Before you hand over
- [ ] Private window: no `_ga` before a choice or after Reject; `_ga` after Accept.
- [ ] One `page_view` per load; one `generate_lead` per real sign-up, none for failures.
- [ ] Every posted link from the UTM sheet; nothing in Unassigned by accident.
- [ ] GTM latest version named and described; rollback practised.
- [ ] Privacy page matches the tags on the site.
- [ ] Results labelled honestly (test data, sample size, consent reduces counts).
