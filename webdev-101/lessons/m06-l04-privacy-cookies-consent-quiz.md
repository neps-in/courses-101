# M06.L04 Quiz — Privacy, Cookies & Consent Around the World

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-03 against GDPR Art. 4(11) and 7(3), the EDPB Cookie Banner Taskforce report, the CPPA FAQ and CA Attorney General's CCPA page, and Google's consent mode guides; consent behaviour tested in headless Chrome 156. Not legal advice.

### Q1. Which statement best describes the difference between the EU and California approaches to analytics and ad tracking on a website? *(O1 · recall)*
- a) Both require prior consent, but California's fines are much smaller
- b) The EU asks first (opt-in); California lets people opt out of sharing
- c) The EU only regulates apps, while California only regulates websites
- d) California asks first (opt-in); the EU lets people opt out afterwards

**Answer:** b
**Explanation:** EU/UK rules require consent before non-essential cookies; California's CCPA/CPRA gives people the right to opt out of "sale or sharing" (with a "Do Not Sell or Share" or "Your Privacy Choices" link and honouring Global Privacy Control). Both cover websites; d has them reversed.
**Hint:** Knock first, or leave when asked?

### Q2. According to GDPR Art. 7(3), how easy must it be to withdraw consent? *(O1 · recall)*
- a) As easy as giving it, e.g. a Cookie settings link to change the choice
- b) Withdrawing needs a written request by post, answered within a month
- c) Consent can't be withdrawn once given, only for the next new visitor
- d) It's enough to explain in the privacy policy how to clear your cookies

**Answer:** a
**Explanation:** "It shall be as easy to withdraw as to give consent." If consent took one click, withdrawing should be about one click too: a footer button that reopens the banner. Post, "can't withdraw" and "clear your own cookies" all fail that test.
**Hint:** Compare the effort in both directions.

### Q3. In Google Consent Mode, what's the difference between basic and advanced mode when a visitor declines? *(O3 · recall)*
- a) Basic stores cookies for 7 days; advanced stores them for 2 full years
- b) Basic sends everything to Google; advanced sends nothing until consent
- c) Basic sends no data to Google; advanced sends cookieless pings instead
- d) There's no difference: both modes block every Google tag permanently

**Answer:** c
**Explanation:** Basic: tags don't load until the visitor agrees; on decline "no data is transferred to Google at all". Advanced: tags load and, while denied, send pings without cookies (checked: `gcs=G100`, no `_ga`), used for modelling. Neither stores analytics cookies when denied.
**Hint:** Which mode loads the tags straight away?

### Q4. A client's banner shows "Accept all" as a big green button and "Manage settings" as small grey text; rejecting needs three more clicks. EU visitors make up a third of the traffic. What do you advise? *(O2 · scenario)*
- a) Keep it, because any banner at all is enough for EU cookie rules
- b) Remove the banner and rely on the privacy policy instead of it
- c) Add Reject next to Accept on the first layer, styled the same
- d) Make "Accept all" flash, so visitors notice it and decide faster

**Answer:** c
**Explanation:** The EDPB taskforce found "a vast majority of authorities" treat a missing reject option on a layer with a consent button as an infringement, and also flags deceptive colours and contrast. Equal first-layer choices fix both. Removing the banner or making Accept flash makes it worse.
**Hint:** Two handles on the door, same size.

### Q5. In a private window, before clicking anything on the banner, you find `_ga` cookies already set. Your consent default code is in `<head>` just below the GTM snippet. What's wrong? *(O3 · scenario)*
- a) Private windows always set `_ga` cookies; test in a normal window instead
- b) The consent default runs too late; it must come before any Google tag
- c) The banner needs a `<dialog>` element so that cookies are blocked properly
- d) GA4 ignores consent signals unless the property is in an EU time zone

**Answer:** b
**Explanation:** Google: the default must be set "before any commands that send measurement data", and "if your consent code is called out of order, consent defaults won't work". Tested: with the default after the tag, `_ga` was set on first load. Private windows don't create cookies by themselves, `<dialog>` doesn't block cookies, and time zones don't matter.
**Hint:** Which code runs first?

### Q6. Spot the error. After clicking Accept, analytics works on that page but every new page is treated as "denied" again. Which line is missing or wrong? *(O3 · spot-the-error)*
```js
// In <head>, before GTM:                                                      // line 1
gtag('consent', 'default', { analytics_storage: 'denied', ad_storage: 'denied' }); // line 2
// (nothing else in <head>)                                                    // line 3
// In main.js, on Accept:                                                      // line 4
localStorage.setItem('nila-consent', 'granted');                               // line 5
gtag('consent', 'update', { analytics_storage: 'granted' });                   // line 6
```
- a) Line 2: the default must be `'granted'` so that analytics always works
- b) Line 5: `localStorage` is wiped on each page, so the choice is lost there
- c) Line 6: `update` must use `'yes'` instead of `'granted'` to switch it on
- d) Line 3: the saved choice isn't re-applied in `<head>` on the next page

**Answer:** d
**Explanation:** The choice is saved (line 5) but never read back: each page needs `if (localStorage.getItem('nila-consent') === 'granted') gtag('consent', 'update', …)` right after the default. Defaulting to granted ignores the visitor, `localStorage` persists across pages, and the values are `'granted'`/`'denied'`.
**Hint:** Saved where, and read back when?

### Q7. *(review: m02-l04)* Your privacy page says "We don't use cookies", but your tag inventory lists GA4's `_ga` cookies and a Formspree form. What should you do? *(O2 of M02.L04 · scenario)*
- a) Leave it, because only the banner matters to visitors and regulators
- b) Update it to list each tag, cookie, purpose and how to opt out
- c) Delete the privacy page, so there's nothing on the site to be wrong
- d) Add "this page may be out of date" at the top and leave the content

**Answer:** b
**Explanation:** The privacy notice must match what the site actually does (Lesson 2.4): what you collect, why, which tools receive it, how long you keep it, and how to change consent. A wrong notice misleads people; deleting it or disclaiming it doesn't fix that.
**Hint:** Does your page tell the truth?
