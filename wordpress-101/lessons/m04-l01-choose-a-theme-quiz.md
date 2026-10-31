# M04.L01 Quiz — Block themes vs classic themes: choosing a lightweight, maintained theme

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error · includes 1 spaced-review question from M03.L05.
> Labels checked against WordPress 7.0; theme data from the WordPress.org directory on 2026-10-31.

### Q1. How can you tell from the dashboard that your active theme is a block theme?
- a) The Appearance menu shows **Editor**, which opens the Site Editor
- b) The Appearance menu shows **Customize**, **Widgets** and **Menus**
- c) The theme's name ends in "Block" or "FSE"
- d) Block themes always show a "Block" badge next to the site title

**Answer:** a
**Explanation:** WordPress adds **Appearance → Editor** when a block theme is active. Classic themes get **Customize** (and usually Widgets and Menus); some classic themes with `theme.json` get a limited **Design** screen instead.
**Hint:** Look at the Appearance menu.

### Q2. Which of these does a WordPress.org theme page show?
- a) A "Tested up to" WordPress version, exactly like plugin pages show
- b) A security score based on known vulnerabilities in past versions
- c) The theme demo's Performance score from PageSpeed Insights
- d) Last updated, active installs and minimum WordPress/PHP

**Answer:** d
**Explanation:** Theme pages list Version, Last updated, Active installations, Minimum WordPress version and Minimum PHP version, plus ratings and tags. Unlike plugin pages, they don't show "Tested up to", so **Last updated** is your best sign of active maintenance.
**Hint:** Plugins and themes show slightly different details.

### Q3. What does the **accessibility-ready** tag on a theme mean?
- a) The theme is certified to meet WCAG 2.2 AA on any site that uses it
- b) It passed a manual review against minimum accessibility requirements
- c) The theme automatically writes alt text for every image you upload
- d) The developer filled in a self-assessment accessibility questionnaire

**Answer:** b
**Explanation:** Themes get the tag only after a manual review against requirements such as keyboard navigation, skip links and contrast. The Themes Team says it doesn't mean the theme meets WCAG AA, and your content and colour choices can still create problems.
**Hint:** It's a reviewed minimum, not a guarantee.

### Q4. Dev finds a free block theme with a gorgeous demo. Its page says "Last updated: 2 years ago" and "Minimum PHP version: 8.3"; his site runs PHP 8.2. What should he do?
- a) Install it anyway; themes don't need updates once they work
- b) Install it and ask his host to downgrade WordPress to match
- c) Skip it: it's not maintained and needs a newer PHP than his site has
- d) Install it, but turn off automatic updates so nothing changes

**Answer:** c
**Explanation:** Two red flags: no updates for two years (risk of breaking with new WordPress versions and unpatched issues), and a minimum PHP version above his server's. Choose a maintained theme that his site meets the requirements for.
**Hint:** Count the red flags.

### Q5. Ines installs a new block theme and wants to see how her real posts look before visitors see any change. What should she click?
- a) **Activate**, then switch back quickly if she doesn't like it
- b) **Live Preview**, which shows her content without activating
- c) **Delete** on her current theme so the new one loads automatically
- d) **Appearance → Customize**, which previews all installed themes

**Answer:** b
**Explanation:** For block themes, **Live Preview** opens the Site Editor with her own content in the new theme; nothing changes for visitors until she clicks **Activate**. Activating to "test" changes the live site, and she can't delete the active theme anyway.
**Hint:** Preview before you commit.

### Q6. Spot the error: Theo's theme-switch plan says:
> 1. Shortlist three block themes and score them.
> 2. Live Preview the winner with my own posts.
> 3. Activate it on the live site straight away; backups are only for plugin updates.
> 4. Keep one default theme as a fallback and delete the rest.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Back up before any theme switch, and test on Local or staging first. Menus, widgets and design settings may not carry over, and a fresh backup is your undo button.
**Hint:** When do you need a backup?

### Q7. (review: m03-l05) Why should a weekly podcast live on a podcast host rather than in the WordPress Media Library?
- a) WordPress's Audio block can't play MP3 files at all
- b) Search engines penalise sites that host their own audio files
- c) The Media Library deletes audio files after 30 days
- d) Podcast apps need a proper feed and streaming-ready file hosting

**Answer:** d
**Explanation:** Apple Podcasts and other apps need an RSS feed with an enclosure for each episode, served from hosting that supports byte-range requests. Podcast hosts provide that plus distribution and stats, and absorb the bandwidth.
**Hint:** Think about thousands of downloads per episode.
