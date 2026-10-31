# M02.L04 Quiz — Drafts, revisions, scheduling and an editorial workflow

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error · includes 1 spaced-review question from M02.L02.
> Labels and defaults checked against WordPress 7.0 core source on 2026-10-31.

### Q1. Which post status means "Publish automatically on a chosen date"?
- a) Draft
- b) Pending
- c) Scheduled
- d) Private

**Answer:** c
**Explanation:** Scheduled posts go live by themselves at the date and time you set. Draft is "Not ready to publish", Pending is "Waiting for review before publishing", and Private is "Only visible to site admins and editors".
**Hint:** Which one has a date attached?

### Q2. By default, how many revisions does WordPress keep for each post?
- a) Only the last one
- b) The last 5
- c) All of them, unless your host or `wp-config.php` sets a limit
- d) The last 25

**Answer:** c
**Explanation:** `WP_POST_REVISIONS` defaults to `true`, which keeps every revision. A host or developer can set a number (e.g. 5) or `0` to turn them off. There's no built-in limit of 5 or 25.
**Hint:** The default constant is set to `true`.

### Q3. Why can a scheduled post publish late on a site with very few visitors?
- a) WordPress only publishes scheduled posts once a day
- b) WP-Cron, which publishes scheduled posts, only runs when someone loads a page on the site
- c) Search engines must approve each post first
- d) Scheduled posts wait for an administrator to log in and confirm

**Answer:** b
**Explanation:** WP-Cron checks for due tasks on each page load. If no one visits at 07:00, the post waits until the next visit, and may show **Missed schedule**. A real server cron job (M07) fixes this on live sites.
**Hint:** WP-Cron isn't a clock; it needs something to wake it up.

### Q4. Tom accidentally deleted half of a published post, clicked **Save**, and closed the tab an hour ago. What's the fastest fix?
- a) Restore last night's full-site backup from UpdraftPlus, which brings the whole post back as it was
- b) Open **Revisions**, pick the version from before the deletion, and restore it
- c) Rewrite the missing half from memory straight away, while it's still fresh, and save again
- d) Switch the post to Draft and back to Published, so WordPress reloads the last published version

**Answer:** b
**Explanation:** Every save created a revision, so the earlier version is one click away, and restoring it can itself be undone. A full-site backup restore would roll back everything else on the site too. Rewriting wastes time, and unpublishing doesn't bring content back.
**Hint:** WordPress kept a snapshot of every save.

### Q5. Aisha agreed with a sponsor that their review goes live on 12 March at 09:00 India time. She finishes it on 8 March. What should she do?
- a) Publish it on 8 March, then edit the post's date to 12 March 09:00 so it looks as if it went out on time
- b) Confirm the site timezone, set the publish date to 12 March 09:00, and schedule it
- c) Leave it as a draft and set a phone alarm for 09:00 on 12 March so she remembers to publish it by hand
- d) Publish it as Private now, then switch it to Public on the morning of 12 March

**Answer:** b
**Explanation:** Scheduling publishes it at the agreed time in the site's timezone, which must be right (M01.L04). Publishing early breaks the embargo and sends it out by RSS; the alarm works but depends on her being free at 09:00; Private hides it but she'd still have to publish it by hand.
**Hint:** Let WordPress press the button for her, at the right time.

### Q6. Spot the error: Kwame's publishing routine says:
> 1. Draft and save often with Ctrl+S.
> 2. Leave Notes on anything to check, and resolve them before publishing.
> 3. To see how the post looks on the site, click **Publish**, check it, then switch it back to draft if needed.
> 4. Run the pre-publish checklist, then schedule for Tuesday 07:00.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Use **Preview** to see the post. Publishing, even briefly, sends it to your RSS feed, and any newsletter tool that emails new posts may send it to subscribers. Switching back to draft can't recall that.
**Hint:** There's a button made for looking without publishing.

### Q7. (review: m02-l02) You change the sign-up link inside your synced *Newsletter CTA* pattern using **Edit original**. What happens to the 40 posts that use it?
- a) Nothing, until you update each post
- b) All 40 show the new link, except copies that were detached
- c) Only posts published after the change get the new link
- d) The 40 posts are switched back to drafts for review

**Answer:** b
**Explanation:** Synced patterns update everywhere they're used when you edit the original. Copies that were **detached** became ordinary blocks and no longer update.
**Hint:** That's the whole point of "synced".
