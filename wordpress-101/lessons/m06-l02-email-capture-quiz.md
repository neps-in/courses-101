# M06.L02 Quiz — Email capture: forms, lead magnets and newsletter integrations

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced-review question from M06.L01.
> Provider facts checked on each provider's pricing page or readme on 2026-10-31; they change often.

### Q1. In a WordPress blog's email setup, what does the **email service provider** (ESP) do?
- a) It hosts your WordPress site
- b) It stores subscribers, sends your emails and handles unsubscribes
- c) It only designs the sign-up form
- d) It ranks your posts in Google

**Answer:** b
**Explanation:** WordPress collects sign-ups; the ESP (Kit, MailerLite, Mailchimp, MailPoet, Jetpack Newsletter…) keeps the list, sends the emails and manages unsubscribes. MailPoet is the exception that runs inside WordPress, but it still does the ESP's job.
**Hint:** Who actually sends the Friday email?

### Q2. Why does the lesson put the sign-up form inside the **synced Newsletter CTA** pattern?
- a) Synced patterns load faster than other blocks
- b) Google only indexes forms inside patterns
- c) One edit updates the form everywhere the pattern is used
- d) Email providers require it

**Answer:** c
**Explanation:** The synced pattern (M02.L02) already appears at the end of posts, in the footer and on Start Here/About. Put the form in it once and every copy updates. Unsynced pasted copies would each need editing.
**Hint:** Think back to what "synced" meant in M02.L02.

### Q3. What does Google's Search Central guidance say about full-page promotional popups?
- a) They're required for newsletter sites
- b) Intrusive interstitials can make content hard to understand and may lead to poor search performance; small banners are preferred
- c) They have no effect on users or search
- d) They're fine as long as they appear only on mobile

**Answer:** b
**Explanation:** Google's "Avoid intrusive interstitials and dialogs" page says they frustrate users and "may lead to poor search performance", and recommends banners that use a small part of the screen. Inline and end-of-post forms avoid the problem.
**Hint:** Google's page title starts with "Avoid…".

### Q4. Maya's most popular post is *"How to repot a snake plant"*. Which lead magnet is the best fit?
- a) "My free ebook" with a mix of old posts
- b) A seasonal houseplant care calendar (1-page printable)
- c) A 60-page guide to starting a gardening business
- d) A discount code for a store she doesn't use

**Answer:** b
**Explanation:** A good lead magnet is a small, specific **next step** for readers of your best content, something you can make in an afternoon. A generic ebook or an unrelated offer doesn't match why people came.
**Hint:** What would someone who just repotted a plant want next?

### Q5. Dev uses Jetpack's **Subscribe** block on his Local site, but test sign-ups never arrive. What's the likely reason?
- a) Jetpack needs a WordPress.com connection, which a Local site doesn't have
- b) The Subscribe block only works on pages, not posts
- c) His theme blocks forms
- d) He needs a second newsletter plugin

**Answer:** a
**Explanation:** Jetpack's newsletter features run through WordPress.com, so they need a site that WordPress.com can reach. Test Jetpack on a live site, or use another route (official plugin, existing integration, embed code) on Local. Adding a second newsletter plugin breaks "one plugin per job".
**Hint:** Where does Jetpack do its work?

### Q6. Spot the error: Rosa's email-capture plan says:
> 1. Choose Kit, check today's free-plan limit and that I can export subscribers.
> 2. Connect it with the Kit plugin, after scoring the plugin with my M06.L01 checklist.
> 3. Add the Kit Form block to my synced Newsletter CTA, plus a full-screen popup on arrival for mobile visitors.
> 4. Test a sign-up with my own address, then delete the test subscriber.

Which step is the problem?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** A full-screen popup on arrival is exactly the intrusive interstitial Google warns about, and on mobile it covers everything. If she wants a popup at all, make it small, delayed and easy to close; inline forms come first.
**Hint:** Which step would annoy someone who just arrived from search on their phone?

### Q7. (review: m06-l01) Before installing a newsletter plugin, which check comes **first**?
- a) Read the newest one-star reviews
- b) Check whether core, your host or a plugin you already have (e.g. Fluent Forms' Mailchimp integration) does the job
- c) Compare version numbers
- d) Install three and keep the fastest

**Answer:** b
**Explanation:** "One plugin per job" starts with "do I need a new plugin at all?" Only if nothing you have covers the job do you shortlist and score candidates with the 16-point checklist.
**Hint:** The best plugin is sometimes no plugin.
