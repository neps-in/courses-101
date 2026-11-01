# M07.L01 Quiz — Updates: core, themes and plugins, auto vs manual, testing on staging

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced-review question from M06.L01.
> Checked against WordPress 7.0 code and the WordPress.org version API on 2026-11-01.

### Q1. Which WordPress core updates install automatically by default?
- a) None; every core update needs a click
- b) Maintenance and security releases, such as 7.1.3 → 7.1.4
- c) Only major releases, such as 7.0 → 7.1
- d) Every release, and this can't be changed

**Answer:** b
**Explanation:** WordPress applies maintenance and security releases in the background. Major versions also auto-update by default on sites installed since WordPress 5.6 (not on older upgraded sites), and you can switch either way in **Dashboard → Updates** ("…each new version" vs "…maintenance and security releases of WordPress only").
**Hint:** The small, urgent ones.

### Q2. A plugin auto-update causes a fatal error. What does WordPress 7.0 do?
- a) Nothing; the site stays down until you notice
- b) Deletes the plugin and all its settings
- c) Restores the previous version and emails you
- d) Disables all plugins on the site

**Answer:** c
**Explanation:** After a plugin auto-update, WordPress checks the site; if it finds a fatal error it restores the previous version and reports *"The update for '…' contained a fatal error. The previously installed version has been restored."* It can't catch layout or feature problems, which is why staging still matters.
**Hint:** WordPress keeps a temporary backup while it updates.

### Q3. What's a **staging** site for?
- a) A faster copy of your site for visitors
- b) A private copy where you test updates and changes before doing them live
- c) A backup stored on a different server
- d) A second site that shares your posts in search

**Answer:** b
**Explanation:** Staging lets you see what an update does to your real content and plugins without risking the live site. It should be hidden from search (Discourage search engines ticked on staging only), and it isn't a backup.
**Hint:** It's where you rehearse.

### Q4. Kim's site uses a page builder, a checkout plugin and Akismet. Which update should she test on staging first?
- a) Akismet, because it handles comments
- b) The page builder, because a bad update breaks visible layouts
- c) None; auto-updates catch every problem
- d) Only WordPress security releases

**Answer:** b
**Explanation:** Plugins that shape the front end or take money (builders, forms, checkout, caching) are high-risk: a bad release may not crash the site but can break layouts or payments. Small, trusted plugins like Akismet are fine to auto-update, and security releases should never wait.
**Hint:** Which one changes what visitors see?

### Q5. After updating a form plugin live, Raj's contact form stops sending messages. The rest of the site works. What's the quickest targeted fix?
- a) Restore last week's full-site backup
- b) Reinstall WordPress
- c) Upload the previous version and click **Replace current with uploaded**
- d) Delete the plugin and all its form entries

**Answer:** c
**Explanation:** One plugin broke one feature, so roll back just that plugin: download the previous version from its WordPress.org **Advanced View → Previous Versions**, then **Upload Plugin** and **Replace current with uploaded** (or use WP Rollback). A full backup restore would also undo content added since the backup.
**Hint:** Undo the smallest thing that broke.

### Q6. Spot the error: Lucy's weekly update routine says:
> 1. Take a backup.
> 2. Let security releases and small trusted plugins auto-update.
> 3. Turn off WordPress maintenance and security auto-updates, so nothing changes without me.
> 4. Test the page builder update on staging, then update live and run my 5-minute check.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Security releases fix holes attackers already know about; delaying them is riskier than applying them. Keep maintenance/security auto-updates on and save manual testing for majors and high-risk plugins. Step 3 also contradicts step 2.
**Hint:** Which updates are the most urgent?

### Q7. (review: m06-l01) Why should you delete **inactive** plugins rather than just leave them deactivated?
- a) Their files stay on the server and can still be attacked
- b) WordPress deletes inactive plugins automatically
- c) Inactive plugins are automatically patched by your host
- d) There's no difference between them

**Answer:** a
**Explanation:** Deactivating doesn't remove the files; Site Health warns *"You should remove inactive plugins."* Delete what you don't use and log it, so your update list only contains plugins with a job.
**Hint:** Where do the plugin's files go when you deactivate it?
