# M09.L01 Quiz — Pre-launch checklist: the 13 non-negotiables

> 8 questions · 3 recall, 3 scenario, 1 spot-the-error, 1 spaced-review question from M08.L02.
> Checked against WordPress 7.1.4, UpdraftPlus 1.26.14 and the M01–M08 lessons on 2026-11-01.

### Q1. Which of these is a **launch blocker** in the lesson, with no dated plan allowed?
- a) A few older posts with images larger than your width rule
- b) A sign-up form with no privacy notice next to it
- c) A homepage LCP of 2.8 seconds in one lab test
- d) Two categories still missing their descriptions

**Answer:** b
**Explanation:** The five blockers are #1 own platform, #2 permalinks, #3 safety net, #9 email capture with a privacy notice and #12 legal pages. They protect your content, URLs, readers' data and you. Image sizes, speed and category descriptions can have a dated plan.
**Hint:** Which one involves readers' personal data?

### Q2. What counts as **evidence** for a checklist row?
- a) Your memory that you set it up in an earlier module
- b) A screenshot or link you took yourself showing it passes
- c) An AI tool's confirmation that the setting sounds correct
- d) The plugin's description on WordPress.org

**Answer:** b
**Explanation:** "No evidence, no pass." A screenshot or link proves the setting is what you think it is today, on this site. Memory, AI summaries and plugin descriptions don't.
**Hint:** Could you show it to someone else?

### Q3. After restoring your Local backup onto live hosting, why should you open **Settings → Permalinks** and click **Save Changes**?
- a) To switch the structure to Plain for the new server
- b) To refresh rewrite rules so posts don't return 404
- c) To send your new sitemap to Google Search Console
- d) To remove the old Local address from your posts

**Answer:** b
**Explanation:** Saving permalinks (without changing them) refreshes the rewrite rules on the new server. If posts 404 but the homepage works, this is usually the fix. Changing the structure would break links; the address change is done by the restore's search and replace.
**Hint:** Homepage works, posts 404.

### Q4. Dev moved his site live yesterday. Today Search Console says his pages are **"Excluded by 'noindex' tag"**. What's the most likely cause?
- a) His SEO plugin removed his sitemap during the move
- b) **Discourage search engines from indexing this site** is still ticked
- c) Google needs a full year before it indexes new domains
- d) His backup plugin deleted his posts' meta descriptions

**Answer:** b
**Explanation:** That setting adds a noindex robots tag to every page. It's easy to carry over from staging or a test setup. Untick it in **Settings → Reading** straight after moving, as step 9 says.
**Hint:** Which setting tells search engines to stay away?

### Q5. Rina's checklist has **six** dated plans for non-blocker items. What does the lesson suggest?
- a) Launch anyway; dated plans can be as long as you like
- b) Fix some now: more than three plans means she isn't ready
- c) Mark them as passing so the checklist looks complete
- d) Delete the rows she can't fix before launch day

**Answer:** b
**Explanation:** Up to three dated plans is a normal launch. Six is a backlog. She should fix enough now to get down to three, without marking anything as passing that isn't.
**Hint:** How many plans does the lesson allow?

### Q6. Omar restored his Local backup on live and can't log in with the password he set during the host's one-click install. What should he try?
- a) Reinstall WordPress from scratch and restore again
- b) His Local username, password and 2FA, which came across in the database
- c) The host control panel's password, as WordPress uses it now
- d) A new account with the same email address via Register

**Answer:** b
**Explanation:** A full restore replaces the live database, including users, with the one from Local. So the Local login (and the Two Factor settings stored with it) applies. Then he should change to a new strong password if the Local one was simple.
**Hint:** Whose database is the live site using now?

### Q7. Spot the error in Jo's first five minutes after moving live:
> 1. Check both addresses in **Settings → General** show `https://`.
> 2. Change the permalink structure from Post name to Day and name, to make URLs look more professional.
> 3. Untick **Discourage search engines**.
> 4. Check the UpdraftPlus schedules aren't still on Manual.

- a) Step 1: addresses should stay as the Local `.local` URL
- b) Step 2: changing permalinks now breaks links you've already shared
- c) Step 3: Discourage search engines should stay ticked for the first month
- d) Step 4: schedules don't matter until you have more posts

**Answer:** b
**Explanation:** Permalinks are a blocker for a reason: they should be set once, before the first post (M01.L04). In step 9 you only **save** them, without changing the structure. Steps 1, 3 and 4 follow the lesson.
**Hint:** Which non-negotiable says "set before the first post"?

### Q8. (review: m08-l02) Why does the lesson's sign-up check (#9) ask for a **confirmed** subscriber, not just a thank-you page view?
- a) Thank-you page views are never recorded once a site is live
- b) It proves the form, real list and double opt-in all work end to end
- c) Analytics tools can't count pages with "thanks" in the URL
- d) Email providers delete subscribers who never visit the thank-you page

**Answer:** b
**Explanation:** A thank-you view only proves the form submitted. A confirmed subscriber in your real list proves the connection, the double opt-in email and the list are all working, which is the number that matters.
**Hint:** Submitted vs subscribed.
