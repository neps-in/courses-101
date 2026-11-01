# M07.L03 Quiz — Security hardening: login protection, least privilege and pruning

> 8 questions · 3 recall, 3 scenario, 1 spot-the-error, 1 spaced-review question from M07.L02.
> Checked against WordPress 7.1.4 core, Two Factor 0.17.0 and Limit Login Attempts Reloaded 3.3.10 on 2026-11-01.

### Q1. How many failed login attempts does WordPress core allow before it blocks someone?
- a) 3, then a 15-minute lockout
- b) 5, then an email to the admin
- c) Unlimited; you need a plugin, your host or a firewall to add rate limiting
- d) 10, then the account is disabled

**Answer:** c
**Explanation:** Core has no login rate limiting, so bots can keep guessing. A plugin such as Limit Login Attempts Reloaded (defaults: 4 retries, 20-minute lockout), a security plugin's login protection, or your host's firewall adds it.
**Hint:** That's why this lesson adds something.

### Q2. Why is a **deactivated** plugin still a security risk?
- a) WordPress still runs its code on every page load
- b) Its files stay on the server and can still be requested directly, and forgotten plugins tend to miss updates
- c) Deactivating a plugin makes its settings public
- d) It isn't; deactivated plugins are completely safe

**Answer:** b
**Explanation:** Deactivating stops WordPress from loading the plugin, but the code is still there for attackers to call directly. Site Health warns: *"Inactive plugins are tempting targets for attackers."* Delete what you don't use.
**Hint:** Is the code still on the server?

### Q3. What does an **application password** let someone do, and why should you revoke unused ones?
- a) Change your main password; it's the same as password reset
- b) Log in to the dashboard with 2FA turned off for good
- c) Let an app use your account through the REST API without your 2FA, so a forgotten one is an open side door
- d) Nothing; they only work on Local

**Answer:** c
**Explanation:** Application passwords are for apps and automations. They authenticate API requests without the 2FA prompt (with the Two Factor plugin, they're the only way API logins are allowed). Revoke any you don't recognise in **Users → Profile → Application Passwords**.
**Hint:** It's built for apps, not people.

### Q4. Sam's virtual assistant schedules posts and edits other writers' drafts. She currently has the **Administrator** role. What should Sam do?
- a) Leave it; admins are easier to manage
- b) Downgrade her to **Subscriber**
- c) Downgrade her to **Editor**, the lowest role that can edit and publish anyone's posts, and ask her to turn on 2FA
- d) Downgrade her to **Contributor** so Sam reviews every post

**Answer:** c
**Explanation:** Least privilege means the lowest role that still does the job. Editors can publish and edit anyone's posts but can't install plugins or change settings. Contributor or Subscriber would stop her working; Administrator gives far more than she needs.
**Hint:** Which role can edit other people's posts but not plugins?

### Q5. A guest writer who left a year ago still has an **Author** account with 14 published posts. What's the right clean-up?
- a) Delete the user and choose **Delete all content.**
- b) Delete the user and choose **Attribute all content to another user.**, picking yourself
- c) Change their password and keep the account
- d) Leave it; Authors can't do any harm

**Answer:** b
**Explanation:** Leavers' accounts are keys nobody is watching. Deleting removes the key; attributing the content keeps the 14 posts live under your name. **Delete all content.** would delete the posts too.
**Hint:** You want the posts, not the login.

### Q6. Lina wants stronger login security. She already uses **Wordfence** with its firewall and login protection turned on. What's the best next step?
- a) Add Kadence Security and Limit Login Attempts Reloaded as extra layers
- b) Make sure every admin and editor has 2FA set up, and don't add another security plugin
- c) Deactivate Wordfence but keep it installed as a backup
- d) Turn off 2FA because the firewall is enough

**Answer:** b
**Explanation:** One tool per job: Wordfence already covers firewall and login limiting (and offers 2FA). Stacking security plugins causes conflicts and lockouts. The real gap is usually accounts without 2FA.
**Hint:** One plugin per job.

### Q7. Spot the error in Omar's quarterly security routine:
> 1. Check the Users list's Two-Factor column; every admin and editor must show a method.
> 2. Remove leavers; downgrade everyone to the lowest role that works.
> 3. Deactivate plugins he isn't using, so they're ready if he needs them again.
> 4. Keep his active theme plus one default theme; delete the others.

- a) Step 1: the Two-Factor column doesn't exist
- b) Step 2: you should never change a user's role
- c) Step 3: unused plugins should be **deleted**, not deactivated; their files stay on the server and can still be attacked
- d) Step 4: you should delete the default theme too

**Answer:** c
**Explanation:** Deactivated plugins are still attack surface and drift out of your update routine. Delete them (after exporting any data you need) and reinstall later if you really need them. Keeping one default theme is right: Site Health checks for it as a fallback.
**Hint:** Which step leaves code on the server?

### Q8. (review: m07-l02) You restore a backup onto a fresh Local test site. Which option must stay ticked so the copy works at the test address?
- a) **Also delete from remote storage**
- b) **Search and replace site location in the database (migrate)**
- c) **Delete local backup**
- d) **Anyone can register**

**Answer:** b
**Explanation:** Restoring onto a different address is a migration. Search-and-replace rewrites the old site address in the database so links, images and logins point at the test site.
**Hint:** The address has to change.
