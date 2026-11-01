# M07.L02 Quiz — Backups in depth: retention, off-site storage and a tested restore

> 8 questions · 3 recall, 3 scenario, 1 spot-the-error, 1 spaced-review question from M07.L01.
> Checked against UpdraftPlus 1.26.14 and the WordPress developer handbook *Backups* page on 2026-11-01.

### Q1. In a backup plugin, what does **retention** control?
- a) How often a backup runs
- b) How many backup sets are kept before the oldest is deleted
- c) Which cloud service receives the backups
- d) Whether backups are encrypted

**Answer:** b
**Explanation:** Retention is the "and retain this many scheduled backups" number in UpdraftPlus. It decides how far back you can go. Frequency (a) decides how much you could lose between backups.
**Hint:** Think "how many old photos stay in the album".

### Q2. Why does this lesson suggest backing up the **database** more often than **files**?
- a) The database is bigger, so it needs more copies
- b) Files can't be restored without a recent database
- c) The database changes with every post, comment and sale, and it's small; files mostly change when you upload media or update plugins
- d) Cloud storage only accepts database files daily

**Answer:** c
**Explanation:** New content lives in the database, so frequent database backups keep your recovery point short at little storage cost. Uploads and plugins are big and change less often, so weekly file backups are usually enough for creator sites.
**Hint:** Which part changes when you hit Publish?

### Q3. When you restore a backup onto a site with a **different address** (Local test site, staging, new domain), what does UpdraftPlus call it, and which option must stay ticked?
- a) A clone; "Overwrite wp-config.php"
- b) A migration; "Search and replace site location in the database (migrate)"
- c) A rollback; "Restore files only"
- d) A restore; "Also delete from remote storage"

**Answer:** b
**Explanation:** UpdraftPlus warns *"This backup set is from a different site … this is not a restoration, but a migration."* Search-and-replace rewrites the old site address so links, images and logins point at the new one.
**Hint:** The site address stored in the database has to change.

### Q4. Tomás keeps **7** daily database backups. He finds spam links that a hacked plugin added **three weeks ago**. What's the problem, and what would have helped most?
- a) Nothing is wrong: restoring yesterday's database backup will remove the spam links
- b) Every backup he still has contains the spam; about a month of retention plus a monthly offline copy would reach back before it
- c) His backups run too rarely; switching files to hourly backups would have caught the spam
- d) His plugin is the problem; a second backup plugin running alongside would have kept clean copies

**Answer:** b
**Explanation:** Retention must be longer than the time it might take to notice a problem. With only 7 days kept, the clean copies were pruned long ago. A month of database backups plus a monthly offline copy covers late discoveries.
**Hint:** Compare how far back his backups go with when the problem started.

### Q5. Priya restores her backup to a fresh Local `restore-test` site. The restore says **Restore successful!**, but now her `restore-test` login doesn't work. What should she do?
- a) Restore again without the database
- b) Reinstall WordPress on the test site
- c) Log in with her original site's username, password and 2FA, because the restored database replaced the test site's users
- d) Turn off search-and-replace and restore again

**Answer:** c
**Explanation:** The database holds the user accounts. After a full restore, the test site has the source site's users, so the original login (and its 2FA or backup codes) is the one that works.
**Hint:** Where are WordPress users stored?

### Q6. Spot the error in Ola's backup plan:
> 1. Database daily, keep 30; files weekly, keep 4.
> 2. Backups go to Google Drive, which has its own password and 2FA.
> 3. To prove backups work, restore last night's backup over the **live site** every quarter.
> 4. Download one full backup set to an external drive each month; keep 3.

- a) Step 1: database backups should be weekly
- b) Step 2: Google Drive isn't off-site
- c) Step 3: test restores belong on a separate test site or staging; restoring over live overwrites anything published since the backup
- d) Step 4: offline copies are unnecessary with cloud backups

**Answer:** c
**Explanation:** A test restore should never risk the real site. Restore to a Local test site or host staging, check it and time it. Steps 1, 2 and 4 follow the lesson: frequent small database backups, off-site storage with its own 2FA, and an offline copy the dashboard can't delete.
**Hint:** Which step could lose real readers' comments?

### Q7. (review: m07-l01) Your form plugin's update broke your contact form, but the rest of the site works. Which is the more targeted fix than restoring a full backup?
- a) Delete the form plugin and all its entries
- b) Roll back just that plugin (Upload Plugin → **Replace current with uploaded**, or WP Rollback) and wait for a fixed release
- c) Restore only the database from last week
- d) Turn off all auto-updates on the site

**Answer:** b
**Explanation:** When one plugin update broke one thing, roll back that plugin. A full backup restore also undoes every post, comment and setting since the backup, so save it for when you can't tell what broke or the site is down.
**Hint:** Fix the one thing that changed.

### Q8. Kwame's host made a staging copy of his live site. A week later, his oldest live backups have vanished from Google Drive, even though live retention is 30. What's the most likely cause?
- a) Google Drive deletes files older than a week on free accounts
- b) The staging copy kept live's UpdraftPlus schedule and storage, so it ran its own backups into the same folder and pruned old sets
- c) Search-and-replace removed the old backups during the staging copy
- d) WordPress core deletes backups when a staging site is created

**Answer:** b
**Explanation:** Staging is a clone of live, including UpdraftPlus's schedule, remote storage and backup list. Left running, it backs up into the same folder and its retention deletes the oldest sets there. Set both schedules to **Manual** on any staging or test copy first.
**Hint:** What did the clone copy along with the posts?

