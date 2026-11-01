# M06.L04 Quiz — Comments, community and spam control

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced-review question from M06.L03.
> Checked against WordPress 7.0, Akismet 5.7.2, Antispam Bee 2.11.13 and Fluent Forms 6.2.16 on 2026-11-01.

### Q1. What does **Comment author must have a previously approved comment** do?
- a) Blocks everyone who hasn't registered an account
- b) Holds first-time commenters for review; approved commenters post directly
- c) Approves every comment that has a name and email
- d) Sends every comment to Akismet before anyone sees it

**Answer:** b
**Explanation:** First-timers wait in the queue; once you've approved someone, their later comments appear straight away. It's the low-effort middle ground between approving everything by hand and letting anything through.
**Hint:** "Previously approved" is about the person, not the comment.

### Q2. You change **Allow people to submit comments on new posts** to off. What happens to your existing posts?
- a) Comments close on every post immediately
- b) All existing comments are deleted
- c) Nothing; you need to bulk edit them or change each post's Discussion panel
- d) They close automatically after 30 days

**Answer:** c
**Explanation:** WordPress says "Changes here will only be applied to new posts." To close comments on existing posts, use **Posts → All Posts → Bulk actions → Edit → Comments: Do not allow**, or each post's **Discussion** panel.
**Hint:** Read the small print under the Default post settings.

### Q3. How is **Antispam Bee** different from **Akismet**?
- a) It checks comments on your own server and sends nothing to an outside service
- b) It only works on WordPress.com sites
- c) It requires a paid key for every site
- d) It replaces the need to moderate comments at all

**Answer:** a
**Explanation:** Antispam Bee works "without sending personal information to third party services". Akismet checks comments against its global database on Automattic's servers (free for personal blogs, paid for commercial sites), so it belongs in your privacy policy. Neither removes the need to glance at your queue.
**Hint:** Where does each one do its checking?

### Q4. Nadia added `ass` to **Disallowed Comment Keys** to block rude comments. Now a reader says their comment about "my cooking class" vanished. Why?
- a) Akismet deleted it
- b) WordPress matches disallowed words inside other words, and matches go straight to Trash
- c) The comment had too many links
- d) Comments on that post were closed

**Answer:** b
**Explanation:** WordPress checks each listed word anywhere in the comment, name, email, URL, IP and browser string, so `ass` matches *class*. Disallowed matches go to Trash without telling anyone. Use only words that are never legitimate, and use the **Comment Moderation** list (hold for review) for anything borderline.
**Hint:** Look closely at the letters in "class".

### Q5. Leo turned comments off on his whole site but still gets dozens of junk messages a day through his contact form. What's the best next step?
- a) Turn comments back on so Akismet can run
- b) Delete the contact form
- c) Turn on his form plugin's honeypot, adding a CAPTCHA only if spam continues
- d) Add more words to Disallowed Comment Keys

**Answer:** c
**Explanation:** Comment settings don't protect forms. Fluent Forms has **Enable Honeypot Security**, which catches most bots with no extra step for humans; Turnstile, hCaptcha or reCAPTCHA can be added if needed (and named in the privacy policy). Disallowed Comment Keys only apply to comments.
**Hint:** Forms and comments are protected separately.

### Q6. Spot the error: Maria's comment setup says:
> 1. Pingbacks and trackbacks off.
> 2. Previously approved commenter required; hold comments with 2 or more links.
> 3. Install Akismet and Antispam Bee together, for double protection.
> 4. Check the queue every Monday and reply to real questions.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Two anti-spam plugins for comments do the same job twice and can conflict, so it's one plugin per job (M06.L01). Pick Akismet or Antispam Bee, and protect forms with the form plugin's own honeypot.
**Hint:** Remember the rule from the plugin checklist lesson.

### Q7. (review: m06-l03) You add Akismet to your site. What should you change in your privacy policy?
- a) Nothing; spam filters don't handle personal data
- b) Name Akismet under "Who we share your data with", since comment data is sent to it
- c) Remove the comments section
- d) Add a cookie banner

**Answer:** b
**Explanation:** Akismet sends commenters' data (name, email, IP, comment) to its servers for checking, so readers should be told. Akismet adds suggested wording to **Settings → Privacy → Policy Guide**, and its **Privacy** setting can show a notice under comment forms.
**Hint:** Who else sees the comment before you do?
