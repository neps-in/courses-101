# M08.L03 Quiz — Cookie consent where required

> 8 questions · 3 recall, 3 scenario, 1 spot-the-error, 1 spaced-review question from M08.L02.
> Checked against the ePrivacy Directive, EDPB and ICO guidance, WordPress 7.1.4 and Complianz 7.5.6 on 2026-11-01. Not legal advice.

### Q1. Under the EU ePrivacy rule (Art. 5(3)), when can a site store a cookie **without** consent?
- a) Whenever the cookie expires within 24 hours of being set
- b) When it's strictly necessary for a service the visitor asked for
- c) Whenever the site owner names the cookie in a privacy policy
- d) When the cookie is set by Google rather than by your own site

**Answer:** b
**Explanation:** The exceptions are transmitting the communication and things strictly necessary for a service the visitor requested (login, cart, remembering their consent choice). How long it lasts, who sets it and whether it's in your policy don't make a cookie exempt.
**Hint:** Would the service break without it?

### Q2. Which banner design do EU regulators most clearly treat as **invalid** consent?
- a) Accept, Reject and Preferences buttons of equal size on the first layer
- b) An "Accept" button with rejection only possible via a text link in the settings
- c) A bottom overlay that leaves the page content in place
- d) A "Manage consent" link kept in the footer of every page

**Answer:** b
**Explanation:** The EDPB Cookie Banner Taskforce found most authorities consider a banner with no equivalent reject option invalid, including a reject link without enough visual weight. The others are good practice.
**Hint:** Is saying no as easy as saying yes?

### Q3. Why does the lesson tell you to audit cookies in a **private window, logged out, before clicking anything**?
- a) DevTools only shows cookies in private windows
- b) That's what a new visitor's browser stores, without your login cookies or past choices
- c) Logged-out visitors never receive any third-party cookies at all
- d) WordPress deletes all cookies whenever an admin is logged in

**Answer:** b
**Explanation:** You want to see what a first-time visitor gets before making a choice. Logged-in sessions add `wordpress_logged_in_…` cookies and may already hold your earlier consent choice, which hides the problem.
**Hint:** Whose experience are you testing?

### Q4. Ravi's site uses Independent Analytics, no ads and no embeds. His logged-out DevTools audit shows no cookies or storage at all. What should he do?
- a) Install a consent banner anyway, just to be on the safe side
- b) Write and file a dated no-consent rationale and summarise it in his privacy policy
- c) Switch to GA4 so his consent banner has something to manage
- d) Remove his privacy policy, since a cookieless site doesn't need one

**Answer:** b
**Explanation:** With only necessary cookies (or none), no consent banner is needed. A written rationale records what he checked and when, and he re-checks quarterly. He still needs a privacy policy for analytics, comments and email sign-ups.
**Hint:** Document the evidence, don't add clutter.

### Q5. Emma set up Complianz. She clicks **Deny**, reloads, and DevTools still shows a `_ga` cookie. What's the most likely cause?
- a) `_ga` is strictly necessary, so Complianz is right to leave it
- b) GA4 is also being inserted outside the consent plugin, e.g. by her theme or another plugin
- c) Deny only takes effect after 24 hours have passed
- d) DevTools always shows cookies from earlier visits to other sites

**Answer:** b
**Explanation:** If GA4 is added in a way the consent plugin doesn't control (theme header code, a second analytics plugin), it runs regardless of the choice. Remove duplicates, let one plugin insert GA4, and test Deny again in a new private window.
**Hint:** Who else is adding the GA4 script?

### Q6. Tom's readers are mostly in the US. He runs a Meta pixel for ad retargeting. Which requirement is he most likely to face under California's CCPA?
- a) Prior opt-in consent before any cookie, exactly as under EU law
- b) An opt-out of "sale or sharing", such as a "Do Not Sell or Share" link, honouring Global Privacy Control
- c) No requirements at all, because US law never covers cookies
- d) A ban on all advertising pixels on sites with California readers

**Answer:** b
**Explanation:** The US generally has no prior-consent rule for cookies, but CCPA gives Californians the right to opt out of their data being sold or shared for cross-context advertising, and businesses must honour GPC signals. Other states have similar laws. If he also has EU/UK readers, their opt-in rules apply to them.
**Hint:** Opt-in vs opt-out.

### Q7. Spot the error in Lucy's consent setup:
> 1. Audit cookies logged out in DevTools.
> 2. Install Complianz and run the Wizard, ticking YouTube and GA4.
> 3. Style the banner with a big **Accept** button and put **Deny** as small grey text under "Settings".
> 4. Test with Deny and Accept in new private windows.

- a) Step 1: audits should be done while logged in as admin
- b) Step 3: Deny must be as easy and visible as Accept on the first layer
- c) Step 2: YouTube embeds never need consent in the EU
- d) Step 4: you only need to test the Accept button

**Answer:** b
**Explanation:** Making refusal harder than acceptance undermines valid consent; regulators expect equal prominence on the first layer. Steps 1, 2 and 4 follow the lesson.
**Hint:** Which step nudges people to say yes?

### Q8. (review: m08-l02) After adding a correctly set up consent banner, Mia's GA4 visitor count dropped 30%, but Search Console clicks are flat. What's the most likely explanation?
- a) Her site lost a third of its Google rankings overnight
- b) Visitors who click Deny are no longer counted by GA4
- c) Search Console has started counting GA4's visitors for it
- d) Her thank-you page has been indexed by Google

**Answer:** b
**Explanation:** Analytics only counts people who accept, while Search Console counts clicks in Google regardless. Flat clicks mean real traffic is unchanged. Compare trends, not exact totals (M08.L02), or use cookieless analytics.
**Hint:** Which tool depends on the visitor's choice?
