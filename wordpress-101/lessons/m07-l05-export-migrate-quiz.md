# M07.L05 Quiz — Own your content: export and moving to a new host

> 8 questions · 3 recall, 3 scenario, 1 spot-the-error, 1 spaced-review question from M07.L04.
> Checked against WordPress 7.1.4, WordPress Importer 0.9.7 and Google Search Central site-move guides on 2026-11-01.

### Q1. Which of these does a **Tools → Export → All content** file include?
- a) Your theme and plugin files, so the design moves too
- b) Posts, pages, comments, categories, tags, menus and custom fields
- c) Every image and video file, packed inside the XML
- d) All user accounts with their passwords and roles

**Answer:** b
**Explanation:** The WXR file holds *"posts, pages, comments, custom fields, terms, navigation menus, and custom posts"*. Media files are only referenced by URL, and themes, plugins, settings and passwords aren't included.
**Hint:** It's your writing, not your whole site.

### Q2. When you import a WXR file, how do your images get into the new site?
- a) They're packed inside the XML file, so they arrive with the posts
- b) The importer fetches them from the old site's addresses, if that site is online and public
- c) They never come across; WordPress has no way to move images
- d) WordPress copies them from your backup plugin's latest Uploads zip

**Answer:** b
**Explanation:** The export lists each attachment's URL (`<wp:attachment_url>`), and with **Download and import file attachments** ticked the importer fetches the files from there. If the old site is offline, or on a local or private address such as a Local site, WordPress won't download them and the images fail to import.
**Hint:** Look for `attachment_url` in the file.

### Q3. You're moving to a new host but keeping the **same domain**. What does Google's guidance say about redirects?
- a) Every URL needs a 301 redirect to itself
- b) None are needed, because the URLs don't change; focus on a smooth DNS switch
- c) Use the Change of Address tool for every page
- d) Add 302 redirects for two weeks

**Answer:** b
**Explanation:** A host move without URL changes keeps every address the same, so links and search signals stay put. Redirects and Change of Address are for **domain** changes. Lower your TTL, switch DNS and monitor both servers.
**Hint:** Did any address change?

### Q4. Grace moved hosts by importing her WXR file into a fresh install on the new host. Which problem is she most likely to find?
- a) Her posts are missing
- b) Her theme design, SEO plugin settings, redirects and newsletter sign-ups are missing
- c) Her domain has changed
- d) Her comments are duplicated twice

**Answer:** b
**Explanation:** WXR carries content, not the site around it. Themes, plugin settings, redirects (kept in plugin tables) and subscriber data don't come along. For host moves, use a full-site migration (backup restore with search-and-replace, or the host's migration tool).
**Hint:** What does the export **not** include?

### Q5. Tom switched DNS to his new host this morning. When should he cancel the old host?
- a) Today, as soon as the new site loads for him, to avoid paying twice
- b) After 1–2 weeks of checks, once all traffic is reaching the new host
- c) Before he switched DNS, so visitors couldn't reach two versions
- d) Never; he should keep both hosts running as permanent mirrors

**Answer:** b
**Explanation:** DNS caches expire gradually, so some visitors (and Googlebot) may still reach the old host for a while. The old host is also your fallback if something's wrong. Google's guide says to shut it down only when no one is using it.
**Hint:** Some visitors still have the old address cached.

### Q6. Paul's 6,000 subscribers are stored in a WordPress newsletter plugin. Which step best protects them?
- a) Run Tools → Export monthly, since All content includes plugin data
- b) Export a CSV with consent fields from the plugin monthly; store it securely
- c) Take monthly screenshots of the plugin's subscriber screen as a record
- d) Nothing extra; his daily database backup already keeps them safe enough

**Answer:** b
**Explanation:** Subscriber lists in plugins live in their own tables, which Tools → Export doesn't include. A database backup does contain them, but only as part of a WordPress restore. A regular CSV export, with consent dates and sources (M06.L03), lets you email readers and prove consent even if the site is down or you change provider.
**Hint:** Where does the plugin keep its data?

### Q7. Spot the error in Ana's migration plan:
> 1. Two days before: lower the DNS TTL.
> 2. Take a fresh full backup and restore it on the new host.
> 3. Switch DNS to the new host, **then** check the new copy for the first time.
> 4. Keep the old host for two weeks and watch for 404s.

- a) Step 1: TTL should be raised, not lowered
- b) Step 2: a full backup isn't needed
- c) Step 3: check the new copy on the host's temporary URL **before** switching DNS, while the old site is still live
- d) Step 4: the old host should be cancelled straight away

**Answer:** c
**Explanation:** Checking only after the switch means readers see any problems first. Test pages, images, forms and sign-up on a temporary or preview URL, then switch. Steps 1, 2 and 4 follow the lesson.
**Hint:** When do readers start seeing the new host?

### Q8. (review: m07-l04) In a PageSpeed Insights report, which section reflects real visitors over the last 28 days?
- a) The lab Performance score
- b) The field data (Core Web Vitals Assessment) at the top
- c) The list of insights
- d) Total Blocking Time

**Answer:** b
**Explanation:** Field data comes from the Chrome UX Report: real Chrome users over a rolling 28 days. The score, insights and TBT come from one simulated Lighthouse test (lab data).
**Hint:** Real people, not a robot test.
