# M05.L04 Quiz — Forms That Work: Validation & Sending Data

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against MDN (form validation, Constraint Validation, FormData, Fetch), Formspree's plans and help pages, and live tests in headless Chrome 156 (validation messages, FormData, Formspree's 404 reply).

### Q1. Why keep a real `https://` URL in the form's `action` even when JavaScript sends the data with `fetch()`? *(O2 · recall)*
- a) Browsers refuse to run `fetch()` on any form that has no `action`
- b) Search engines rank pages higher when their forms have an `action`
- c) So the form still sends if the script fails, and `fetch` reuses it
- d) Because `action` stores the visitor's data until JavaScript loads

**Answer:** c
**Explanation:** Progressive enhancement: with JavaScript off or broken, the browser submits to `action` normally; with JavaScript, `fetch(form.action, …)` sends to the same place. `fetch` doesn't need an `action`, ranking isn't affected, and `action` stores nothing.
**Hint:** What happens when the script fails?

### Q2. What does a honeypot field do? *(O3 · recall)*
- a) It encrypts the email address before it's sent to the form service
- b) It's a hidden field people skip but bots fill, so spam is dropped
- c) It sweetens the offer with a discount code once the form is complete
- d) It stores each visitor's answers so they can finish the form later

**Answer:** b
**Explanation:** A honeypot is hidden from people (and from screen readers and the Tab order), so only bots fill it in; the service (Formspree's `_gotcha`) discards those submissions. HTTPS does the encrypting; the other options aren't honeypots.
**Hint:** Who would fill in a field nobody can see?

### Q3. What is double opt-in for an email list? *(O3 · recall)*
- a) Asking people to type their email address twice to avoid any typos
- b) Signing people up to two lists at once so they get more updates
- c) Adding people from both the contact form and the newsletter form
- d) Sending a confirmation email; they join after clicking its link

**Answer:** d
**Explanation:** Double opt-in proves the address is real and that its owner agreed, keeps bots and typos off the list, and gives you a consent record. Brevo and Mailchimp both offer it. Typing twice, extra lists and merging forms aren't double opt-in.
**Hint:** "Opt in" happens twice: on your page and in their inbox.

### Q4. Your dashboard shows 400 "Thanks" messages this week, but Formspree received nothing. The script shows "Thanks" right after calling `fetch()`. What's wrong? *(O2 · scenario)*
- a) Formspree hides submissions for a week before they appear anywhere
- b) The script never checks the reply, so failures still show "Thanks"
- c) The page needs a faster web host so that the requests can complete
- d) Visitors must have been using an ad blocker that hides their emails

**Answer:** b
**Explanation:** Only show success when `response.ok` is true; otherwise show the service's error (e.g. "Form not found" from a wrong endpoint, checked). Formspree shows submissions straight away, hosting speed isn't the issue, and blaming ad blockers skips the real bug.
**Hint:** When should a form say thank you?

### Q5. Submissions arrive in Formspree, but the first name is always missing. The input is `<input id="first-name" type="text">`. What's the fix? *(O2 · scenario)*
- a) Add `required`, so the browser makes visitors fill in the field
- b) Rename the `id` to `firstName`, as Formspree can't read hyphens
- c) Add `name="first-name"`, because only named fields are submitted
- d) Move the field above the email address so that it's sent earlier

**Answer:** c
**Explanation:** Forms submit fields by their `name`; a field without one is left out with no error (checked with `FormData`). `id` links the label but isn't sent; `required` only checks that it's filled; field order doesn't matter.
**Hint:** Run `[...new FormData(form).keys()]` in the Console.

### Q6. Spot the error. This launch page is on `https://www.nilacoffee.in`. Which line should change? *(O2 · spot-the-error)*
```html
<form action="http://formspree.io/f/xyzabcd" method="post">   <!-- line 1 -->
  <label for="email">Email address</label>                 <!-- line 2 -->
  <input id="email" name="email" type="email" required>      <!-- line 3 -->
  <button type="submit">Join the launch list</button>       <!-- line 4 -->
```
- a) Line 1: the action must use `https://` so the data is encrypted
- b) Line 2: the label must come after the input it describes instead
- c) Line 3: `type="email"` stops older browsers sending the form at all
- d) Line 4: a submit button must use `type="button"` to work with forms

**Answer:** a
**Explanation:** Sending from an HTTPS page to an `http://` URL exposes the data, makes Chrome warn the visitor, and the service redirects the POST (checked: 301), which can lose it. Always `https://` (NN #7). Label order is fine, `type="email"` falls back to text in old browsers, and `type="button"` wouldn't submit.
**Hint:** NN #7.

### Q7. *(review: m02-l04)* The sign-up form asks for name, email, phone, date of birth and city, but you only send one launch email. What should you do? *(O3 of M02.L04 · scenario)*
- a) Keep every field, because more data always helps later campaigns
- b) Make every field required so that the records are always complete
- c) Pre-tick a consent box so people agree to all future marketing too
- d) Ask only for the email, plus a first name if you'll really use it

**Answer:** d
**Explanation:** Data minimisation (Lesson 2.4; GDPR Art. 5(1)(c)): collect only what you need for the stated purpose. Fewer fields also mean more sign-ups. Required extras add friction, and pre-ticked consent isn't valid consent under GDPR-style rules.
**Hint:** What does the launch email actually need?
