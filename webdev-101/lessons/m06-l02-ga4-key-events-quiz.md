# M06.L02 Quiz — Google Analytics 4 & Key Events

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-03 against Google Analytics Help (set-up, enhanced measurement, key events, DebugView, internal traffic, data retention, data freshness), the Google tag install guide and the GA4 events reference; live test in headless Chrome 156 (made-up Measurement ID, `generate_lead` parameters).

### Q1. In GA4, what is a key event? *(O2 · recall)*
- a) Any event that GA4 collects automatically through enhanced measurement
- b) An event that you mark as especially important to your business's success
- c) The first event in each session, which GA4 uses to set the traffic source
- d) An event sent with a `value`, which GA4 then counts as money from sales

**Answer:** b
**Explanation:** Google defines a key event as "an event that measures an action that's particularly important to the success of your business"; you choose it by starring the event (older tutorials call these "conversions"). Enhanced measurement events aren't key events by default, session start sets the source, and `value` is optional.
**Hint:** Which events get the gold star?

### Q2. Where do you see your own test events within a few minutes, event by event, with their parameters? *(O1 · recall)*
- a) Reports → Acquisition → Traffic acquisition, after the next morning
- b) Admin → Data retention, which lists every event you have sent so far
- c) DebugView, with debug mode on through Tag Assistant or `debug_mode`
- d) The Pages and screens report, which shows events next to every page

**Answer:** c
**Explanation:** DebugView (Admin → Data display → DebugView) shows a live timeline of events from devices in debug mode, with their parameters. Standard reports lag hours (Google: 24–48 h for processing), Data retention is a setting, and Pages and screens is aggregated.
**Hint:** It has "debug" in its name.

### Q3. Why change GA4's data retention setting from 2 months to 14 months straight away? *(O1 · recall)*
- a) So that you can compare this launch with later ones in explorations
- b) Because GA4 deletes the whole property after 2 months unless you do
- c) So that standard reports appear in minutes instead of after a day
- d) Because key events stop being counted after the first two months

**Answer:** a
**Explanation:** Retention controls how long event- and user-level data stays available for explorations; 14 months is the maximum for standard properties. Google: it "does not affect standard aggregated reports", only explorations and funnel reports. It doesn't delete the property, doesn't speed up processing, and standard reports keep counting key events.
**Hint:** How far back will you want to look?

### Q4. GA4 shows 212 key events this month but your email list grew by 61. The key event is `form_submit`. What's the most likely explanation and fix? *(O2 · scenario)*
- a) GA4 counts each visitor several times; switch to a paid GA4 360 plan
- b) The email tool is losing subscribers; move the list to a new provider
- c) `form_submit` counts every try; star a `generate_lead` sent after OK
- d) The time zones differ; set GA4 to the email tool's time zone to match

**Answer:** c
**Explanation:** Enhanced measurement's `form_submit` fires "when the user submits a form", including attempts that fail. Send `generate_lead` only in the success branch and make that the key event; also filter your team's test visits. GA4 360, a new email tool and time zones don't explain a 3× gap.
**Hint:** Which event only happens when the lead really exists?

### Q5. Your new tag is live but Realtime has shown 0 users for an hour. Network shows `collect` requests with status 204 and `tid=G-AB12CD34FE`; your stream's ID is `G-AB12CD34EF`. What now? *(O1 · scenario)*
- a) Wait 48 hours, because Realtime always lags well behind real visits
- b) Correct the Measurement ID, because hits are reaching another stream
- c) Turn off the ad blocker, since a 204 status means the hit was blocked
- d) Delete the property and create a new one, as this one is now broken

**Answer:** b
**Explanation:** The last two characters are swapped, so hits go to an ID that isn't yours. GA4 gives no error for this (checked: the script loads and requests return 204 for a made-up ID). Realtime updates within minutes, 204 is GA4's normal "received" reply, and the property is fine.
**Hint:** Compare `tid` letter by letter.

### Q6. Spot the error. This should count only real sign-ups. Which line is wrong? *(O2 · spot-the-error)*
```js
form.addEventListener('submit', async (event) => {                 // line 1
  event.preventDefault();                                            // line 2
  gtag('event', 'generate_lead', { lead_source: 'launch-list' });    // line 3
  const response = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } }); // line 4
```
- a) Line 1, because GA4 events can only be sent from a `click` listener
- b) Line 2, because `preventDefault` stops gtag from sending its events
- c) Line 4, because `fetch` cancels any GA4 event sent just before it
- d) Line 3, because it fires before the reply, so failures count as leads

**Answer:** d
**Explanation:** The lead event fires on every submit, before anyone knows whether the service accepted it. Move it into `if (response.ok)`. Events can come from any listener, `preventDefault` only stops the page from navigating, and `fetch` doesn't cancel gtag hits.
**Hint:** When do you know the lead exists?

### Q7. *(review: m04-l03)* You pushed the Google tag to GitHub, but the live page's Network panel shows no `collect` request a minute later. What do you check first? *(O3 of M04.L03 · scenario)*
- a) Whether the deploy has finished, as Pages can take up to 10 minutes
- b) Whether GA4 needs a paid plan before it accepts tags from GitHub sites
- c) Whether the repository is private, since Pages blocks analytics tags
- d) Whether `index.html` needs renaming to `home.html` for the tag to run

**Answer:** a
**Explanation:** GitHub Pages builds and publishes in the "pages build and deployment" run, and changes can take up to 10 minutes (plus the browser cache, `max-age=600`). Check the Actions tab, then hard-reload. GA4 is free, Pages doesn't block tags, and `index.html` is the right name.
**Hint:** Is the new version live yet?
