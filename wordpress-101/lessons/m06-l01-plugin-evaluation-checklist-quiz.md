# M06.L01 Quiz — Choose plugins you can trust: the evaluation checklist

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced-review question from M05.L02.
> Checked against the WordPress.org plugin directory (current WordPress 7.1.4) and WordPress 7.0 on 2026-10-31.

### Q1. What's the first question to ask before installing a new plugin?
- a) Which plugin has the most five-star reviews?
- b) Does WordPress core, my host or a plugin I already have do this job?
- c) Is there a premium version with more features?
- d) Which plugin has the newest version number?

**Answer:** b
**Explanation:** The "one plugin per job" rule starts with checking whether the job is already covered (e.g. core's Breadcrumbs block, your host's backups, Fluent Forms' free Mailchimp integration). The fewer plugins you run, the less there is to update, slow your site or break.
**Hint:** The best plugin is sometimes no plugin.

### Q2. A plugin's WordPress.org page shows *"This plugin hasn't been tested with the latest 3 major releases of WordPress."* What does that suggest?
- a) The plugin is closed and can't be downloaded
- b) It may no longer be maintained and may have compatibility issues
- c) It works only on WordPress.com sites
- d) It has a known security vulnerability

**Answer:** b
**Explanation:** The directory adds this warning when **Tested up to** is three or more major releases behind. It says the plugin "may no longer be maintained or supported and may have compatibility issues". It's not the same as being closed, and it doesn't by itself mean there's a vulnerability.
**Hint:** It's about testing and maintenance, not a ban.

### Q3. Which of these is a **red flag** that means you shouldn't use a plugin, whatever its score?
- a) It has 8,000 active installations instead of 10,000+
- b) It was last updated seven months ago
- c) Its page says it has been closed for a security issue
- d) Some support threads are still open from this week

**Answer:** c
**Explanation:** A closed plugin isn't available for download and gets no updates through WordPress.org; when the reason is a security issue, replace it. The other three lower a score slightly but aren't automatic rejections. Other red flags: nulled copies, known unpatched vulnerabilities, and minimum WordPress/PHP versions your site doesn't meet.
**Hint:** Which one can't be fixed by "being careful"?

### Q4. Priya's newsletter is on Mailchimp, and she already uses Fluent Forms for her contact page (M04.L04). She wants a sign-up form. What's the best first step?
- a) Install MC4WP and two popup plugins to compare them
- b) Check whether Fluent Forms' free Mailchimp integration does the job
- c) Switch to a new email provider that has a WordPress plugin
- d) Install Jetpack, because it does everything

**Answer:** b
**Explanation:** Fluent Forms free includes a Mailchimp integration, so she may need no new plugin at all. Only if it doesn't fit her needs should she shortlist and score dedicated plugins. Installing several to "compare" on a live site, or an all-in-one plugin for one job, adds code she doesn't need.
**Hint:** Look at what you already have.

### Q5. After installing a sign-up plugin on Local, Tom opens a post that has no form, filters DevTools **Network** by the plugin's folder name, and sees four CSS and JS files. What does this tell him?
- a) The plugin is closed and must be removed
- b) The plugin loads files even where it isn't used, so it scores lower on bloat
- c) His theme is broken
- d) Nothing: every plugin must load files on every page

**Answer:** b
**Explanation:** Well-built plugins load their files only where they're needed. Files on pages that don't use the plugin add weight to every visit. That lowers its **Bloat** score: look for a "load only where used" option or consider an alternative. It doesn't make the plugin unsafe or closed.
**Hint:** Should a page without a form load form code?

### Q6. Spot the error: Leo's plugin routine says:
> 1. Check core, my host and my existing plugins first.
> 2. Score candidates on last updated, tested up to, installs, ratings, support, bloat, security history and exit plan.
> 3. Keep two or three inactive plugins installed, in case I need them again.
> 4. Log every plugin I install with its job, version, date and exit plan.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Inactive plugins are still code on your server and can still contain vulnerabilities; Site Health warns *"You should remove inactive plugins."* Delete them; reinstalling takes a minute, and your log records what you used.
**Hint:** What does Site Health say about inactive plugins?

### Q7. (review: m05-l02) Why does the course say to run only **one** SEO plugin?
- a) WordPress allows only one plugin per category
- b) Two would both write titles, meta, schema and sitemaps, creating duplicates and conflicts
- c) SEO plugins are paid, so two cost twice as much
- d) Google blocks sites that use more than one SEO plugin

**Answer:** b
**Explanation:** It's the same "one plugin per job" rule: SEO plugins all write the same tags, so two produce duplicate `<title>`, Open Graph and JSON-LD, plus competing sitemaps. WordPress doesn't block it and there's no Google penalty for it; the conflicting output is the problem.
**Hint:** Same job, same output.
