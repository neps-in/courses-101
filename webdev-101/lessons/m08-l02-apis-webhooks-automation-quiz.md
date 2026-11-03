# M08.L02 Quiz — APIs, Webhooks & No-Code Automation

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-03 against Make Help (webhooks), Formspree Help (webhooks and Zapier on paid plans), n8n docs and MDN (JSON, `URLSearchParams`). Free-plan limits from third-party pricing summaries; check the vendor.

### Q1. What is the main difference between calling an API and receiving a webhook? *(O1 · recall)*
- a) APIs only work with JSON, while webhooks only work with plain HTML forms
- b) An API needs a paid plan, while a webhook is always free on every tool
- c) An API sends emails, while a webhook stores rows in a spreadsheet
- d) With an API you ask; with a webhook the app pushes data to you instantly

**Answer:** d
**Explanation:** Calling an API is like going to a counter and asking. A webhook is a doorbell: the other app posts a payload to your endpoint the moment something happens, so you don't have to keep checking. Both commonly use JSON, neither is tied to a price or to one kind of action.
**Hint:** Counter or doorbell?

### Q2. In `{ "email": "kofi@example.com", "utm_source": "instagram" }`, what is `utm_source`? *(O1 · recall)*
- a) The endpoint address the payload is sent to
- b) A key in the payload, with the value `instagram`
- c) The API key proving that the request is genuine
- d) A filter that stops runs from Instagram visitors

**Answer:** b
**Explanation:** JSON is labelled data: each `"key": "value"` pair names a piece of information. Here the key `utm_source` holds the channel the lead came from, copied from the page URL into a hidden field. The endpoint is the URL, an API key is a secret, and filters live in the automation tool.
**Hint:** Left of the colon, or right of it?

### Q3. Which part of the lead flow should **never** appear in your page's HTML or JavaScript? *(O3 · recall)*
- a) The webhook URL the form posts its data to
- b) The hidden `utm_source` and `utm_campaign` fields
- c) An API key or token for your email or CRM service
- d) The honeypot field that bots tend to fill in

**Answer:** c
**Explanation:** Anything in front-end code can be read with View Source. A webhook URL is an address, like a postbox, and is meant to be public; you protect the flow by filtering what arrives. An API key is a password: anyone who copies it can send email or read data as you. Keep keys inside the automation tool's connections.
**Hint:** Address or password?

### Q4. Ama's flow sends each lead an auto-reply, then adds a sheet row. One day the email service is down for an hour. What's the risk, and the fix? *(O2 · scenario)*
- a) No risk, because the automation tool retries every step forever on its own
- b) Leads that hit the failed email step are never stored; save the row first
- c) The sheet gets duplicate rows; switch the scenario off when email fails
- d) Visitors see an error page; move the email step into the form's HTML

**Answer:** b
**Explanation:** If a step fails, later steps in that run usually don't happen, so with email first the lead is lost. Store first (filter → duplicate check → row), then reply and notify, and check the run history for failures to re-run. Tools don't retry forever by default, and email can't run from the form's HTML.
**Hint:** What should survive if a later step breaks?

### Q5. Kwame's lead flow worked for a month. After a redesign, new rows have an empty email column and no auto-replies go out. What most likely happened? *(O3 · scenario)*
- a) The email field was renamed, so the mapping uses an old key name
- b) Google Sheets deletes columns that stay empty for more than a month
- c) The webhook URL expires automatically after thirty days of use
- d) The free plan only allows one auto-reply per email address per month

**Answer:** a
**Explanation:** Mappings use the form field's `name` as the key. If `email` became `email_address`, the flow still runs but finds nothing under `email`. Check the payload keys in the run history, then fix the name or remap. Sheets don't delete columns, and webhook URLs and auto-replies don't expire like that.
**Hint:** Compare the payload keys in History with the mapping.

### Q6. Spot the error. This flow's order causes double emails and junk replies. What's wrong? *(O2 · spot-the-error)*
```
1. Custom webhook (form submission)
2. Gmail: send auto-reply to {email}
3. Filter: honeypot empty, email has @, not +test
4. Google Sheets: search rows for {email}
5. Google Sheets: add a row
```
- a) The webhook must come last so that the data is complete
- b) Gmail can't send to addresses taken from a webhook
- c) Google Sheets must be searched after adding the row
- d) The email runs before the filter and duplicate check

**Answer:** d
**Explanation:** Bots, tests and returning visitors all get an auto-reply before anything checks them. The order should be webhook → filter → duplicate check → add row → auto-reply → notify. The webhook is the trigger, so it's always first; mapping a webhook value to Gmail's "To" is normal; and searching after adding would always find the new row.
**Hint:** Which steps should guard the email?

### Q7. *(review: m05-l04)* Why does the launch form keep a hidden honeypot field like `_gotcha`? *(O3 of M05.L04 · recall)*
- a) It stores the visitor's consent choice without showing a checkbox
- b) It lets the form send without JavaScript on older browsers
- c) People never fill it but bots often do, so filled ones are spam
- d) It passes the UTM source to the form service automatically

**Answer:** c
**Explanation:** The field is hidden from people (and from screen readers with `aria-hidden` and `tabindex="-1"`), so real visitors leave it empty; many bots fill every field. Formspree discards those submissions, and in this lesson your Make filter stops runs where `_gotcha` has a value. Consent needs a visible choice, and UTMs use their own hidden fields.
**Hint:** Who fills in a field nobody can see?
