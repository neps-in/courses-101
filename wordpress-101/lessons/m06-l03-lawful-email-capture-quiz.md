# M06.L03 Quiz — Lawful capture: privacy policy, consent wording and double opt-in

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced-review question from M06.L02.
> Checked against WordPress 7.0, GDPR Art. 7, ICO, FTC and CRTC/ISED guidance on 2026-10-31. Not legal advice.

### Q1. You click **Create** on **Settings → Privacy**. What do you get?
- a) A published Privacy Policy page that's legally complete
- b) A draft Privacy Policy page with suggested headings that you must customise and publish
- c) A cookie banner on every page
- d) A link to a paid privacy policy generator

**Answer:** b
**Explanation:** WordPress creates a **draft** page titled Privacy Policy with suggested headings and notes. It's your responsibility to fill in your real details and publish it; until then, visitors can't see it and footer links return a 404.
**Hint:** Check the page's status right after you click Create.

### Q2. What does **double opt-in** mean?
- a) Readers must fill in two forms to subscribe
- b) A new subscriber gets an email and must click to confirm before they're added
- c) You ask for consent twice a year
- d) Two different email providers store each subscriber

**Answer:** b
**Explanation:** Double (confirmed) opt-in sends a confirmation email after sign-up; only people who click are added. It proves the address is real and belongs to the person, which helps you **demonstrate consent** as GDPR Art. 7 and CASL require.
**Hint:** It's the RSVP to your guest list.

### Q3. Which statement about US law (**CAN-SPAM**) is correct?
- a) It requires double opt-in for every new subscriber
- b) It needs no prior consent, but does need a postal address and an unsubscribe
- c) It applies only to companies with more than 50 staff
- d) It requires consent but lets you pre-tick the box

**Answer:** b
**Explanation:** CAN-SPAM is an opt-out law: no prior consent, but the FTC guide requires accurate sender details, honest subject lines, a valid postal address and an unsubscribe honoured within 10 business days. EU, UK and Canadian law go further and require consent.
**Hint:** Is the US an opt-in or opt-out country for email?

### Q4. Omar's form says *"Download the free checklist"*. In small print below: *"By downloading you also agree to receive our newsletter and partner offers."* What's wrong?
- a) Nothing; small print counts as consent
- b) Consent is bundled and hidden; newsletter and partner offers need clear, separate, unticked choices
- c) He should remove the checklist
- d) Only the font size is wrong

**Answer:** b
**Explanation:** Consent must be a clear, informed choice. The ICO and GDPR say it should be distinguishable from other matters, with no pre-ticked boxes. Say plainly that the checklist comes with the newsletter, and put "partner offers" behind its own unticked checkbox (or drop it).
**Hint:** Would a reader know what they're agreeing to?

### Q5. After turning on double opt-in, Priya's test address shows as **pending** in Mailchimp. What should she do?
- a) Add the address manually as subscribed
- b) Turn double opt-in off
- c) Open the confirmation email (check spam) and click the link; it will then show as subscribed
- d) Delete the form and start again

**Answer:** c
**Explanation:** "Pending" means the confirmation email was sent but not clicked. That's the system working. Manually subscribing people defeats the point, because you lose the proof of consent.
**Hint:** What step is the subscriber waiting on?

### Q6. Spot the error: Sam's launch checklist says:
> 1. Create the privacy policy in Settings → Privacy and fill in every section, naming my email provider.
> 2. Link the Privacy Policy page in my footer.
> 3. Add consent wording and the policy link under my sign-up form.
> 4. Import my 400 old work contacts so the first newsletter has an audience.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** d
**Explanation:** Those contacts never signed up. In the EU, UK and Canada that usually means no valid consent; everywhere it causes spam complaints and can get your ESP account paused. (Steps 1–3 also need the page **published**, but they aren't wrong.)
**Hint:** Who agreed to receive this newsletter?

### Q7. (review: m06-l02) Where should the consent line go so that one edit updates it on every post, the footer and Start Here?
- a) In each post's first paragraph
- b) In the synced **Newsletter CTA** pattern, under the button
- c) In the theme's functions.php
- d) In the email provider's welcome email only

**Answer:** b
**Explanation:** The synced Newsletter CTA (M02.L02, used in M06.L02) appears everywhere you placed it; editing the original updates every copy. Text pasted into individual posts would need editing one by one.
**Hint:** "Synced" is the key word.
