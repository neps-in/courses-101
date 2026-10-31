# M04.L04 Quiz — Key creator pages: About, Start Here, Contact and Work With Me

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced-review question from M04.L03.
> Labels checked against WordPress 7.0 and Fluent Forms 6.2.16 on 2026-10-31.

### Q1. What should the first screen of an About page tell a new visitor?
- a) Your full life story, starting from childhood
- b) A list of every post you've published, newest first
- c) Who the site is for and what they'll get from it
- d) Your contact email address and phone number

**Answer:** c
**Explanation:** Visitors decide in seconds whether a site is for them. Lead with the reader and the outcome; proof, your story and the next step follow. Your life story belongs lower down and shorter.
**Hint:** Whose question is the About page answering?

### Q2. What does a **honeypot** do on a contact form?
- a) It adds a puzzle that every visitor must solve before sending
- b) It adds a hidden field that only bots fill in, so those are blocked
- c) It sends every message to a separate spam folder for review
- d) It hides your email address by encrypting it in the page code

**Answer:** b
**Explanation:** People can't see the hidden field, so they leave it empty; bots fill in every field and get rejected. It's invisible to readers, unlike a CAPTCHA. In Fluent Forms it's **Enable Honeypot Security**, off until you switch it on.
**Hint:** It's a trap only automated software falls into.

### Q3. Ade set up a Fluent Forms contact form from the **Contact Form** template and tested it: the thank-you message appeared, but no email arrived. What's the most likely fix?
- a) Reinstall WordPress, because its mail system is broken
- b) Switch to a second form plugin and keep both active
- c) Turn on **Admin Notification Email** in the form's notifications
- d) Add a CAPTCHA, since spam filters blocked the test

**Answer:** c
**Explanation:** The template's **Admin Notification Email** is disabled by default, so the message is stored under **Entries** but never emailed. Switch it on under **Settings & Integrations → Email Notifications**, then test again. Two form plugins break the one-plugin-per-job rule.
**Hint:** Check the form's own settings before blaming the server.

### Q4. Ivy writes about budget travel, packing and solo safety, with 40 posts. What makes the best Start Here page?
- a) Three reader goals, each with her 3 best posts and a category link
- b) All 40 posts in one long list, so nothing is left out
- c) Her About page text copied again, with a bigger photo
- d) A contact form, so new readers can ask where to begin

**Answer:** a
**Explanation:** Start Here chooses *for* the reader: a few goals (often matching categories) and a handful of the best posts for each, plus the newsletter CTA. A full list is what the Blog page is for.
**Hint:** Guided tour, not an archive.

### Q5. Rahul's media kit says "50K readers" with no date, and the number is from two years ago. What should he change?
- a) Nothing; brands expect rounded, optimistic numbers
- b) Remove all numbers so brands have to email him
- c) Replace it with his follower count from all platforms combined
- d) Use current numbers and add the date they were measured

**Answer:** d
**Explanation:** Brands check reach, and stale or inflated numbers lose trust. Use current, honest figures with an "as of" date, and update them regularly.
**Hint:** Would a brand be able to trust and check it?

### Q6. Spot the error: Joon's contact page setup says:
> 1. Install one form plugin and turn on its honeypot and token protection.
> 2. Turn on the admin email notification and set Reply To to the visitor's email.
> 3. Print my personal email address above the form too, so people have two ways to reach me.
> 4. Send a test message and check both Entries and my inbox.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** A printed address gets harvested by bots and fills with spam, which is what the form was meant to avoid. If you must show an address, use a separate one you can filter.
**Hint:** Why use a form at all?

### Q7. (review: m04-l03) Joon publishes **Start Here** and wants new readers to find it on every page. Where should it go?
- a) In the Blog page's content, above the posts list
- b) In the header's Navigation menu (Main menu)
- c) In the Single Posts template, below the post content
- d) In Settings → Reading as the posts page

**Answer:** b
**Explanation:** The header menu appears on every page, so it's the right place for Start Here. Text on the posts page isn't shown, a template placement only appears on posts, and the posts page setting would turn Start Here into the blog list.
**Hint:** Which signpost is on every page?
