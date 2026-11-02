# M06.L03 Quiz — Google Tag Manager

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-03 against Google Tag Manager Help (install, GA4 set-up and events, page view, custom event and form submission triggers, variables, preview, publishing) and Google's data layer guide; live check of `gtm.js` with a made-up container ID.

### Q1. In GTM, what does a trigger do? *(O1 · recall)*
- a) It stores a value, such as the form name, for tags to read later
- b) It decides when a tag fires, such as on every page or on an event
- c) It saves the container as a numbered version that you can restore
- d) It is the code that sends data to a vendor, such as GA4 or Meta

**Answer:** b
**Explanation:** Tags are what runs, triggers are when, variables are the details. Storing a value is a variable, saving a version is publishing, and the code that sends data is the tag.
**Hint:** Tags = what, triggers = ?, variables = details.

### Q2. How does your site tell GTM that a real sign-up just happened? *(O2 · recall)*
- a) It renames the page's `<title>` to "Lead" so that GTM notices it
- b) It reloads the page with `?lead=1` added so a page view trigger fires
- c) It calls `gtag('config', …)` again with the Measurement ID as before
- d) It runs `dataLayer.push({ event: 'generate_lead' })` after success

**Answer:** d
**Explanation:** The data layer is the message list between your site and GTM; a pushed `event` can fire a Custom Event trigger. Changing the title or reloading are hacks that break other things, and calling `config` again isn't how events are sent (Google: call `config` once per tag).
**Hint:** What's the message list called?

### Q3. How do you undo a published GTM change that broke tracking? *(O3 · recall)*
- a) Delete the container and build every tag again from scratch in a new one
- b) Revert the last Git commit, because GTM changes are saved in your repo
- c) Versions → the last good version → Set as Latest Version, then publish
- d) Turn Preview mode off, which automatically restores the previous version

**Answer:** c
**Explanation:** "Set as Latest Version" replaces the draft with the chosen version; publishing it makes it live (or use "Publish To…" on that version). GTM versions live in GTM, not your repo; deleting the container loses history; Preview doesn't affect live visitors.
**Hint:** Where does GTM keep its history?

### Q4. After moving to GTM, GA4 shows exactly twice as many page views as before. What's the most likely cause? *(O1 · scenario)*
- a) GTM counts each page view twice by design, so halve all of the numbers
- b) The old gtag.js snippet is still on the page next to the GTM Google tag
- c) The Custom Event trigger also fires on every page view by default now
- d) Preview mode was left connected, which adds extra visits from real users

**Answer:** b
**Explanation:** Two GA4 installations send two `page_view` hits per load (checked with the Google tag installed twice): check Network → `collect` and View Source for both `gtag/js` and `gtm.js`, and keep one. GTM doesn't double-count by design, a Custom Event trigger only fires on its event, and Preview only affects your own debug browser.
**Hint:** How many GA4 installations are on the page?

### Q5. Your form uses `fetch()` and `event.preventDefault()`. A colleague suggests GTM's built-in Form Submission trigger for `generate_lead`. What do you recommend? *(O2 · scenario)*
- a) Use it, with "Check Validation" off, so that every attempt is counted
- b) Use a Custom Event trigger on a push from the form's `response.ok` branch
- c) Use a Click trigger on the Join button, since buttons are easier to track
- d) Use the Page View trigger on the launch page, as it fires for every visit

**Answer:** b
**Explanation:** Your code knows when a sign-up succeeded, so push the event there; Google's help suggests a Custom Event when "the default behavior for the form has been altered". "Check Validation" off fires on every attempt (Google's wording), a click trigger counts failures too, and a page view isn't a lead.
**Hint:** Who knows when the lead really exists?

### Q6. Spot the error. The tag never fires, although Preview shows the event arriving. Which line is wrong? *(O2 · spot-the-error)*
```text
Site code:  dataLayer.push({ event: 'generate_lead', form_name: 'launch-list' });   // line 1
Variable:   Data Layer Variable, name: form_name                                    // line 2
Trigger:    Custom Event, event name: generateLead                                  // line 3
Tag:        GA4 Event, Event Name: generate_lead, trigger: the trigger above       // line 4
```
- a) Line 1, because a data layer push can't carry more than one key at once
- b) Line 2, because a variable name can never contain an underscore in GTM
- c) Line 4, because a GA4 Event tag must use an event name in capital letters
- d) Line 3, because `generateLead` doesn't match the pushed `generate_lead`

**Answer:** d
**Explanation:** The Custom Event trigger's event name must match the pushed `event` exactly (case and underscores), so `generateLead` never matches. A push can carry many keys, underscores are fine in variable names, and GA4 event names are conventionally lowercase.
**Hint:** Compare the names letter by letter.

### Q7. *(review: m05-l01)* A teammate wants to add five more tags to GTM "because it's free and easy". What should you check first, using Module 5's audit? *(O3 of M05.L01 · scenario)*
- a) Nothing, because tags added through GTM never slow down a website at all
- b) Whether each tag's vendor has a logo that matches your brand's colours
- c) Each tag's weight, what it collects and who owns it, before adding it
- d) Whether GTM allows more than five tags in a single free container

**Answer:** c
**Explanation:** Every tag in GTM is still third-party code on your page: it adds weight, collects data and may need consent (Lesson 5.1's script audit, Lesson 6.1's tag inventory, Lesson 6.4). GTM tags do affect speed, logos are irrelevant, and the free container has no five-tag limit.
**Hint:** GTM changes how tags are added, not what they cost.
