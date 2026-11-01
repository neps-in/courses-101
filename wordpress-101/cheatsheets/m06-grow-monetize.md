# Module 6 cheat sheet — Grow & monetize your audience
*WordPress 101 for Content Creators · checked against WordPress 7.0, Fluent Forms 6.2.16, Kit 3.4.8, MailPoet 5.44.0, MC4WP 4.14.1, Akismet 5.7.2 and providers' pages on 2026-10-31 to 2026-11-01. Not legal or tax advice.*

## Choosing plugins (M06.L01)
1. **Need it at all?** Core, your host or a plugin you have may do the job (e.g. Fluent Forms → Mailchimp).
2. **Red flags = no:** closed · nulled · known unpatched hole · your WP/PHP below its minimum.
3. **Score 0–2 × 8 = /16:** last updated · tested up to · installs · ratings · support · bloat (DevTools Network on a page that doesn't use it) · security history · exit plan. **12+ good.**
4. **Log it:** job · score · version · date · source · auto-updates · last reviewed · exit plan. Delete inactive plugins.
- Redirection: deleting it deletes your redirects; **Export redirects** first.

## Email capture (M06.L02)
| Route | Use when |
|---|---|
| Provider's plugin/block (Kit Form, MailPoet Subscription Form, Mailchimp for WordPress Form) | ESP has a well-scored plugin |
| Existing integration (Fluent Forms → **Mailchimp Feed**) | You already run the form plugin |
| Embed code in **Custom HTML** (Admins/Editors only) | No plugin wanted |
- Form goes in the **synced Newsletter CTA**: end of posts, Start Here, About, footer.
- Promise = what + how often + for whom. Inline > popups (Google: intrusive interstitials may hurt search).
- Lead magnet = a small next step from your best post, delivered by the **welcome email**.

## Lawful capture (M06.L03)
- **Settings → Privacy → Create** makes a **draft**: customise (name every service) → **Publish** → footer link.
- Consent line: *what · how often · unsubscribe any time · Privacy Policy link*. Separate, **unticked** boxes per purpose.
- **Double opt-in:** Fluent Forms feed **Enable Double Opt-in** · MC4WP **Use double opt-in?** (on by default) · MailPoet **Enable sign-up confirmation**.
| Law | Consent for newsletter? | Must-haves |
|---|---|---|
| EU GDPR / UK PECR | Yes (UK/EU existing-customer "soft opt-in" exception) | Prove consent; easy withdrawal; no pre-ticked boxes |
| US CAN-SPAM | No prior consent | Honest sender/subject, postal address, unsubscribe within 10 business days |
| Canada CASL | Yes | Provable consent; unsubscribe within 10 business days |
- Data requests: **Tools → Export / Erase Personal Data** + your provider's tools.

## Comments & spam (M06.L04)
- Only open comments you'll check **weekly**. Discussion changes affect **new posts only**; bulk edit → **Comments: Do not allow**.
- Pingbacks off · name + email · cookies opt-in · **previously approved commenter** · hold **2+ links**.
- **Comment Moderation** = hold for review. **Disallowed Comment Keys** = straight to Trash, matches **inside words** (`ass` → *class*).
- One anti-spam tool: **Akismet** (global, third party, free personal / paid commercial; auto-deletes spam after 15 days) or **Antispam Bee** (local). Forms: **Enable Honeypot Security**.
- WordPress adds `rel="nofollow ugc"` to comment links automatically.

## Repurposing & RSS (M06.L05)
- One **repurposing sheet** (key points, story, sourced fact, question) → newsletter (your take + link) · 3 social (tip, story, question) · 30–60 s video (hook, one point, CTA).
- Feeds: `/feed/` · `/category/<slug>/feed/` · `/tag/<slug>/feed/`. **Settings → Reading → For each post in a feed, include.**
- RSS-to-email: MailPoet **Post Notifications** · Kit (Single/digest; **Send automatically** = 30 min) · MailerLite RSS (paid) · Mailchimp RSS (check plan).
- Full copies elsewhere: Google prefers the copy is **noindexed**; easier: summary + link.

## Monetization (M06.L06)
| Audience | Start with |
|---|---|
| Small (< ~10k visits/mo) | Affiliates · one digital product · sponsorships |
| Larger, search-led | Add display ads (Raptive minimum 25,000 pageviews/mo as of 2026-11-01) |
- **Work With Me:** who · dated numbers · 2–4 offers with "from" prices · real partners only · disclosure · contact button.
- One product, no store: hosted checkout (merchant of record handles VAT, e.g. Gumroad 10% + 50¢) + **Buttons** block.
- Affiliates: disclose **before** the link; `nofollow` (or `sponsored` via **Edit as HTML**). Amazon: 3 sales in 180 days.
- Every new service → privacy policy + plugin log.

## If something goes wrong
| Problem | First fix |
|---|---|
| Privacy link 404, or footer link vanished | Page is a draft or trashed (Navigation links to unpublished pages are hidden) → **Publish** / restore |
| Sign-ups don't appear | Wrong list, not connected, or **pending** confirmation |
| Real comment vanished | Check **Trash** → Disallowed Comment Keys too broad |
| Real comment in Spam | **Not Spam** (trains Akismet) |
| Form spam | Honeypot on → then Turnstile/hCaptcha (add to policy) |
| Kit RSS email never sent | **Send automatically** off → draft waiting |
| Affiliate account closed | Below programme's sales minimum → reapply later |
