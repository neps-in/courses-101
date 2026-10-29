# M01.L05 Quiz — Your day-one safety net: backups, 2FA, passwords and user roles

> 7 questions · 3 recall, 3 scenario, 1 spot-the-error · includes 1 spaced-review question from M01.L04.
> Facts checked 2026-10-29 (WordPress 7.1.4 roles, UpdraftPlus and Two Factor listings, NIST SP 800-63B-4).

### Q1. Which two things must a WordPress backup include so you can fully restore the site?
- a) The theme and one plugin
- b) The database and the files (themes, plugins, uploads)
- c) The homepage and the sitemap
- d) The admin password and the domain

**Answer:** b
**Explanation:** The database holds posts, pages, settings, comments and users; the files hold themes, plugins and uploaded media. A restore needs both. Passwords and domains aren't part of a site backup.
**Hint:** One part is content and settings, the other is everything on disk.

### Q2. Which user role can write posts but cannot publish them or upload media?
- a) Editor
- b) Author
- c) Contributor
- d) Subscriber

**Answer:** c
**Explanation:** Contributors write and edit their own posts but submit them for review, and can't upload media. Authors can publish their own posts and upload media, Editors can publish anyone's, and Subscribers can only manage their profile.
**Hint:** Their button says "Submit for Review".

### Q3. According to current NIST guidance (SP 800-63B-4), which password policy is recommended?
- a) Change every password every 90 days
- b) Require an uppercase letter, a number and a symbol
- c) Prefer long passwords, check them against breached-password lists, and don't force scheduled changes
- d) Use 8-character passwords so they're easy to remember

**Answer:** c
**Explanation:** NIST now favours length (at least 15 characters when a password is the only factor), screening against breached passwords, no forced composition rules and no periodic rotation. Change a password when there's evidence of compromise.
**Hint:** Length, not complexity or calendar changes.

### Q4. Kabir's host says it takes "daily backups", stored on the same server as his site, kept 7 days. What should he do?
- a) Nothing; daily backups are enough
- b) Add one backup plugin that sends copies to cloud storage (or upgrade to a host with off-site backups), and run and check a first backup
- c) Install two backup plugins for extra safety
- d) Take a screenshot of his homepage each week

**Answer:** b
**Explanation:** Same-server backups vanish if the server fails or is compromised, so he needs an off-site copy. One plugin sending to cloud storage (or off-site host backups) solves it. Two backup plugins conflict and waste resources, and screenshots aren't backups.
**Hint:** What happens to those backups if the server is lost?

### Q5. Zoe hires a freelance writer to publish two posts a month on her site. The writer doesn't need to touch plugins, themes or other people's posts. Which role should Zoe give them?
- a) Administrator, so they never get stuck
- b) Editor
- c) Author
- d) Subscriber

**Answer:** c
**Explanation:** Author lets the writer publish and edit their own posts and upload images, and nothing more. That's least privilege. Editor could change anyone's posts; Administrator could change everything; Subscriber can't write at all. If Zoe wants to review first, Contributor fits.
**Hint:** Their own posts only, published by themselves.

### Q6. Spot the error: Mo's safety-net checklist says:
> 1. One backup plugin sending daily database and weekly file backups to Google Drive.
> 2. Password manager generates a 24-character unique admin password.
> 3. 2FA with an authenticator app. I'll set up backup codes later if I lose my phone.
> 4. Guest writers get the Contributor role.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Backup codes must be saved **before** you lose your phone; afterwards you can't log in to generate them. Save them in your password manager when you set up 2FA. The other steps match this lesson.
**Hint:** Can you generate backup codes once you're locked out?

### Q7. (review: m01-l04) Which permalink structure should you set before publishing your first real post on a creator site?
- a) Plain (`/?p=123`)
- b) Post name (`/easy-paella/`)
- c) Day and name (`/2026/10/29/easy-paella/`)
- d) It doesn't matter; WordPress always redirects every old URL

**Answer:** b
**Explanation:** Post name gives short, readable URLs for evergreen creator content. Set it before publishing because changing structure later changes every URL, and WordPress's redirect guessing isn't guaranteed.
**Hint:** Readable, short, and no dates.
