# M06.L01 Quiz — Tags, Pixels & UTMs

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-03 against Google Analytics Help (campaign URLs, default channel group, cookie usage) and a live test in headless Chrome 156 (GA4 `/g/collect` and Meta `/tr/` requests, `_ga` cookies, URL parsing).

### Q1. What does a tracking tag such as GA4 or the Meta Pixel actually do when the page loads? *(O1 · recall)*
- a) It sends a request with details of the visit to the vendor's server
- b) It copies the whole page and its images to the vendor for a backup
- c) It stores the visit only in the browser, so no data leaves the device
- d) It asks the visitor's permission before running, every single time

**Answer:** a
**Explanation:** A tag sends a request (GA4: `…/g/collect` with the event name, page address and a client ID; Meta: `facebook.com/tr/`) and usually sets a cookie. It doesn't copy the page, the data does leave the device, and tags only wait for permission if you set up consent (Lesson 6.4).
**Hint:** Filter Network by `collect`: what do you see?

### Q2. Which three UTM parameters should every campaign link carry? *(O2 · recall)*
- a) `utm_term`, `utm_content` and `utm_id`, for the most detail
- b) `utm_source`, `utm_medium` and `utm_campaign` on every link
- c) `utm_page`, `utm_button` and `utm_user`, to track each click
- d) `utm_source` alone, because GA4 works the rest out by itself

**Answer:** b
**Explanation:** Google's help says to "always use utm_source, utm_medium, and utm_campaign"; missing ones show as `(not set)`. `utm_content`, `utm_term` and `utm_id` are optional extras, and `utm_page`/`utm_button`/`utm_user` aren't UTM parameters at all.
**Hint:** Who, what kind, which campaign.

### Q3. Why is anything you put in a page's URL a privacy issue once tags are installed? *(O1 · recall)*
- a) URLs are encrypted, so tags can only read the domain name itself
- b) Search engines publish every URL they find, including query strings
- c) Browsers save the URL into every cookie that the site sets for you
- d) Tags send the full page address, query string included, to vendors

**Answer:** d
**Explanation:** GA4 sends the address as `dl`, and the Meta Pixel sends it too, UTMs included (checked). So an email or name in a URL goes to every vendor on the page. HTTPS encrypts traffic in transit but the tag reads the URL inside the page; search engines and cookies aren't the issue here.
**Hint:** Look at the `dl` parameter.

### Q4. Your launch email links use `utm_source=newsletter&utm_medium=newsletter&utm_campaign=launch-2026`. In GA4 the visits show up as "Unassigned". What's the best fix for future emails? *(O2 · scenario)*
- a) Add `utm_term=email` so GA4 can see that the link came from an email
- b) Remove all UTMs, because GA4 detects email traffic automatically
- c) Use `utm_medium=email`, a value that GA4's channel rules recognise
- d) Change the campaign name to `email-launch` so it's grouped as Email

**Answer:** c
**Explanation:** GA4's default channel group puts a visit in Email when the source or medium is `email` (or `e-mail`, `e_mail`); `newsletter` matches no rule, so it's Unassigned. `utm_term` and the campaign name aren't used for this channel, and without UTMs email clicks usually show as Direct or a webmail referral.
**Hint:** Which parameter decides the channel?

### Q5. The marketing team wants to add `?utm_source=homepage&utm_medium=button` to the "Join the launch list" button that links to `#signup` on the same page. What do you advise? *(O2 · scenario)*
- a) Do it, since every link should have UTMs for complete tracking data
- b) Don't: it adds a fake campaign that can take credit for real sign-ups
- c) Do it, but write the values in capitals so they stand out in reports
- d) Don't, because UTMs only work on links in emails and paid adverts

**Answer:** b
**Explanation:** The visitor already arrived with a real source (newsletter, Instagram). An internal UTM adds a made-up campaign to your reports, and because GA4 attributes a visitor's later direct visits to the last campaign it saw, your own button can take credit for those visits and their sign-ups. Measure button clicks with an event instead (Lesson 6.2). Use UTMs only on links you place outside your site (emails, social, ads, QR codes, partners); capitals would also split the rows.
**Hint:** Where did the visitor really come from?

### Q6. Spot the error. Which of these Instagram bio links will lose its `utm_source`? *(O2 · spot-the-error)*
- a) `https://nilacoffee.in/?utm_source=instagram&utm_medium=social&utm_campaign=launch-2026`
- b) `https://nilacoffee.in/?ref=bio&utm_source=instagram&utm_medium=social&utm_campaign=launch`
- c) `https://nilacoffee.in/?utm_source=instagram&utm_medium=social&utm_campaign=launch#plans`
- d) `https://nilacoffee.in/?ref=bio?utm_source=instagram&utm_medium=social&utm_campaign=launch`

**Answer:** d
**Explanation:** Only the first separator is `?`; the second `?` makes `utm_source=instagram` part of the `ref` value (checked with `new URL(…).searchParams.get('utm_source')` → `null`). Option b uses `&` correctly, and c puts the `#plans` fragment after the query string, which is fine.
**Hint:** Count the question marks.

### Q7. *(review: m05-l04)* You'll count sign-ups in GA4 next lesson. Your form script currently shows "Thanks!" before checking the reply. Why fix that first? *(O2 of M05.L04 · scenario)*
- a) GA4 refuses to count any event sent from inside a `fetch()` call
- b) Failed submissions would count as sign-ups, inflating every report
- c) Showing "Thanks!" early makes the page load slowly on mobile phones
- d) The form service blocks forms that show text before it has replied

**Answer:** b
**Explanation:** A sign-up event should fire only in the `response.ok` branch, exactly where the real "Thanks" belongs (Lesson 5.4). Otherwise failures count as leads. GA4 doesn't care where the event is sent from, the message has no effect on speed, and the service can't see your page text.
**Hint:** When is a sign-up really a sign-up?
