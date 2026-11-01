# M02.L04 Quiz — Forms for Lead Capture

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Lesson form validated live with the W3C Nu HTML Checker on 2026-11-02; GDPR Recital 32 quoted from EUR-Lex. Not legal advice.

### Q1. Why should every form field have a `name` attribute? *(O1 · recall)*
- a) It gives the field a visible caption above it on the page
- b) Without it, the field's value isn't sent when the form submits
- c) It makes the browser check that the field isn't left empty
- d) It tells the phone which on-screen keyboard to show for it

**Answer:** b
**Explanation:** `name` is the key the data is sent under (`email=amara%40…`). A field with no `name` is skipped on submit, which the lesson's break-it step shows in the address bar. A visible caption is the `label`, `required` checks for empty fields, and `type` picks the keyboard.
**Hint:** Look at the query string after you submit.

### Q2. Which attribute lets the browser offer to fill in the visitor's saved email address? *(O1 · recall)*
- a) `placeholder="you@example.com"`
- b) `required`
- c) `aria-describedby="email-hint"`
- d) `autocomplete="email"`

**Answer:** d
**Explanation:** `autocomplete` with a standard token (`email`, `given-name`, `tel`…) tells browsers what the field is for, so they can autofill it. WCAG 2.2 criterion 1.3.5 asks for this on fields about the user. A placeholder is only sample text, `required` blocks empty submits, and `aria-describedby` links a hint.
**Hint:** The attribute's name says what it does.

### Q3. Kofi's lead-magnet form asks for name, email, phone, company, job title and country, but he only ever sends the guide by email. What's the best change? *(O3 · scenario)*
- a) Keep email (required), make first name optional, and drop the rest
- b) Keep every field but mark them all as optional so nobody is forced
- c) Keep every field and add a progress bar so it feels a little shorter
- d) Move the extra fields onto a second page that appears after submit

**Answer:** a
**Explanation:** Data minimisation: ask only for what the promise needs. The guide needs an email; a first name is a nice-to-have for the greeting. Optional fields still cost attention and create data to protect, and splitting them across pages doesn't remove the problem.
**Hint:** Run each field through the lesson's flowchart.

### Q4. Lucía types `lucia` (no `@`) in the email field and presses the button. The form doesn't submit and a message asks for an `@`. Why? *(O2 · scenario)*
- a) The `name="email"` attribute checks the address format
- b) The `autocomplete` attribute rejects incomplete addresses
- c) The `type="email"` attribute triggers the browser's own check
- d) The `<label>` element validates whatever is typed in its field

**Answer:** c
**Explanation:** `type="email"` turns on built-in validation that needs an `@` (and `required` blocks an empty field). It's free, keyboard-accessible and works without JavaScript. `name` and `autocomplete` don't validate, and labels only name the field.
**Hint:** Which attribute tells the browser what *kind* of value is expected?

### Q5. A sign-up form has: `[✓] Send me offers from partner farms` already ticked. What should replace it? *(O3 · scenario)*
- a) The same box, but with smaller print explaining the offers
- b) A separate, unticked, optional box the visitor can choose to tick
- c) A required box: visitors must agree to partner offers to sign up
- d) No box at all; partner offers are mentioned in the privacy notice

**Answer:** b
**Explanation:** GDPR Recital 32 says pre-ticked boxes don't count as consent, and India's DPDP Act also needs a clear affirmative action. An extra use like partner offers needs a separate, unticked, optional choice. Forcing agreement bundles it with sign-up, and burying it in the privacy notice isn't asking at all.
**Hint:** Consent is something the visitor *does*, not something you do for them.

### Q6. Spot the error. Clicking the words "Email address" doesn't put the cursor in the field, and DevTools shows the input has no name. What's wrong? *(O1 · spot-the-error)*
```html
<label for="Email">Email address</label>
<input type="email" id="email" name="email" autocomplete="email" required>
```
- a) The `required` attribute must come before `type` in the tag
- b) Labels must wrap the input; `for` is not allowed in HTML
- c) `autocomplete="email"` hides the field's accessible name
- d) `for="Email"` doesn't match `id="email"`: ids are case-sensitive

**Answer:** d
**Explanation:** `for` must match the input's `id` exactly, including letter case. Otherwise the label isn't connected, so clicking it does nothing and screen readers announce just "edit text". Attribute order doesn't matter, `for` is the standard way to connect a label (wrapping also works), and `autocomplete` doesn't affect the name.
**Hint:** Compare the two values letter by letter, as in the M02.L02 `#signup` question.

### Q7. *(review: m02-l03)* Your sign-up form lives in `<section aria-labelledby="signup-title">`. What does `aria-labelledby` do there? *(O1 of M02.L03 · recall)*
- a) It names the section with its heading, so screen readers list it as a region
- b) It makes the section's heading bigger and bolder when the page is shown
- c) It submits the form inside the section to the address given by its `id`
- d) It sets the section's heading level so that no level is ever skipped

**Answer:** a
**Explanation:** `aria-labelledby` points to the `id` of the heading, giving the section an accessible name. Named sections appear as "region" landmarks screen-reader users can jump to. It has no effect on looks, form submission or heading levels.
**Hint:** Think of the DevTools accessibility tree in Lesson 2.3.
