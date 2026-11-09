# M08.L03 Quiz — Consent Mode and Google Tag Manager Basics

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Analytics Help (consent mode, behavioural modelling), the Google tag platform docs (consent mode overview, install the Google tag, existing tags), Tag Manager Help (EEA consent, GA4 set-up, events, Preview, publishing) and Google's EU user consent policy.

### Q1. What does Google's consent mode do? *(O1 · recall)*
- a) It shows a cookie banner to visitors in Europe automatically
- b) It passes each visitor's consent choice to Google's tags
- c) It removes the need for a privacy policy on small websites
- d) It blocks all Google tags worldwide until someone consents

**Answer:** b
**Explanation:** Consent mode lets tags "adjust their behavior and respect users' choices". It "does not provide a consent banner or widget. Rather, it interacts with it."
**Hint:** Banner asks; consent mode passes it on.

### Q2. In basic consent mode, what happens when a visitor declines? *(O1 · recall)*
- a) Google tags send cookieless pings that are later modelled
- b) Google tags load anyway, but only for page views
- c) No data is sent to Google at all, not even the consent status
- d) The visitor is shown the banner again on every single page

**Answer:** c
**Explanation:** In basic mode, "when the user doesn't consent, no data is transferred to Google at all – not even the consent status". Cookieless pings are advanced mode.
**Hint:** Basic blocks.

### Q3. In Google Tag Manager, what is a "version"? *(O3 · recall)*
- a) A snapshot of the container's set-up at a point in time
- b) A copy of your website saved before each new tag is added
- c) The number of times a tag has fired since it was published
- d) A test copy of GA4 used only inside Tag Assistant's Preview

**Answer:** a
**Explanation:** "A version is a snapshot of a container configuration at a particular time." Publishing creates one, and you can revert to an earlier one.
**Hint:** What you can roll back to.

### Q4. Kavya's site has Site Kit's GA4 switched on. She adds GTM with a GA4 tag for the same ID. What should she do? *(O2 · scenario)*
- a) Keep both, because two installs make GA4 data more reliable
- b) Add a third copy in her theme header in case both of them fail
- c) Use a different GA4 property for each of the two installs
- d) Keep one: switch off GA4 in Site Kit, or remove it from GTM

**Answer:** d
**Explanation:** Two installs of the same ID can count visits twice *(observed practice)*. Google says there's "no need to deploy additional code using gtag.js on your site if Tag Manager is already in use".
**Hint:** One tag, one count.

### Q5. Nila's site gets about 80 visitors a day. Will advanced consent mode give her modelled data for visitors who decline? *(O1 · scenario)*
- a) Yes; modelling switches on for every site with advanced mode
- b) Almost certainly not; modelling needs 1,000+ consenting users a day
- c) Yes, but only for visitors outside the EEA, UK and Switzerland
- d) Only if she also installs a second copy of GA4 through GTM

**Answer:** b
**Explanation:** Behavioural modelling needs "at least 1,000 daily users sending events with analytics_storage='granted' for at least 7 of the previous 28 days", plus 1,000 denied events a day. Small sites simply lose data from people who decline.
**Hint:** Check the thresholds.

### Q6. Amara's sign-up event fired in Preview. A week later, GA4 shows no `sign_up` events from real visitors. Most likely cause? *(O3 · scenario)*
- a) GA4 deletes events that were first seen in Preview mode
- b) The trigger only works for visitors who use Google Chrome
- c) She never clicked Submit to publish a new container version
- d) Sign-up events take at least a month to appear in reports

**Answer:** c
**Explanation:** Preview isn't live; the debug panel "is not visible to your regular website visitors". Changes reach visitors only after **Submit → Publish and Create Version**.
**Hint:** Tested, but launched?

### Q7. Spot the error. Tomás reads that `gtag('config')` is deprecated and says: "I'll delete the Google tag from my theme today, before it stops working." What's wrong? *(O2 · spot-the-error)*
- a) Nothing; deprecated snippets stop working within 24 hours
- b) `gtag('config')` was never part of any Google tag snippet
- c) Deprecation means Google will move it into GTM automatically
- d) Existing `gtag('config')` snippets still work; plan any change

**Answer:** d
**Explanation:** "Existing snippets containing gtag('config') will continue to work for backward compatibility." Deleting the tag in a hurry would stop all tracking. Plan the change, and never add a second copy.
**Hint:** Deprecated isn't the same as broken.

### Q8. Spot the error. *(review: m08-l02)* Nila sets up an internal-traffic filter and switches it straight to Active "to save time". What's wrong?
- a) Active filters are permanent, so test the filter first
- b) Internal traffic filters only work in the Explore section
- c) Filters must stay in Testing for a year before going Active
- d) Nothing; Active filters can be undone, restoring the data

**Answer:** a
**Explanation:** "Once you apply a data filter, the effect on the data is permanent." Leave it in Testing, check the "Test data filter name" dimension in Explore, then activate.
**Hint:** Test before you commit.
