# M08.L01 Quiz — Choose your analytics: GA4 via Site Kit or a privacy-friendly alternative

> 8 questions · 3 recall, 3 scenario, 1 spot-the-error, 1 spaced-review question from M07.L05.
> Checked against Site Kit 1.190.0, Independent Analytics 2.16.2, provider pricing pages and ICO/CNIL guidance on 2026-11-01. Not legal advice.

### Q1. What's the main difference between Search Console and an analytics tool?
- a) Search Console is paid; analytics tools are free
- b) They measure exactly the same thing in different layouts
- c) Analytics replaces Search Console once it's installed
- d) Search Console shows what happens in Google Search before the click; analytics shows what visitors do on your site

**Answer:** d
**Explanation:** Search Console reports queries, impressions and clicks in Google Search; analytics reports visits, sources and pages on your site. You use both, and M08.L02 combines them.
**Hint:** Before the click vs after it.

### Q2. Which tool on this lesson's list stores its data in **your own WordPress database** and works on a Local site?
- a) GA4 via Site Kit
- b) Fathom
- c) Independent Analytics
- d) Jetpack Stats

**Answer:** c
**Explanation:** Independent Analytics (like Koko Analytics) runs inside WordPress, uses no cookies and keeps data in your database, so it works on Local. GA4, Fathom and Jetpack Stats send data to outside services and need a live site.
**Hint:** Which one doesn't need an account elsewhere?

### Q3. Why might choosing GA4 mean you need a cookie banner, when a tool like Plausible usually doesn't?
- a) GA4 stores cookies on readers' devices, which EU/UK rules generally need consent for
- b) GA4 loads more slowly, and the law requires banners for slow scripts
- c) Plausible holds a licence that collects readers' consent on your behalf
- d) Banners are only required when you pay for your analytics tool

**Answer:** a
**Explanation:** Consent rules attach to storing or reading information on the reader's device. GA4 sets cookies; cookieless tools don't, so they usually need no analytics banner. You still name every tool in your privacy policy. Details are in M08.L03.
**Hint:** It's about what's stored on the reader's device.

### Q4. Hannah writes a craft blog. Most readers are in Germany and the Netherlands, she has no ads, a small budget and wants one simple page to check monthly. Which choice fits best?
- a) GA4 via Site Kit, without any consent banner
- b) A cookieless tool such as Independent Analytics (free) or Plausible (paid)
- c) GA4, Jetpack Stats and Independent Analytics together, to compare numbers
- d) No analytics, because European readers can't be counted

**Answer:** b
**Explanation:** With European readers and no need for Google's ad features, a cookieless tool avoids an analytics consent banner and gives a simple dashboard. GA4 without consent would be risky; three tools would give conflicting numbers.
**Hint:** Simple, cookieless, one tool.

### Q5. Omar installed Site Kit and connected GA4 an hour ago. He's browsing his own site while logged in, and GA4 shows **0 users**. What's the most likely reason?
- a) Site Kit ignores all logged-in users by default, so his visits aren't counted
- b) GA4 needs at least a week before it records its first visit
- c) Site Kit only tracks pages, so his posts are never recorded
- d) He must turn on consent mode before GA4 can count anyone

**Answer:** a
**Explanation:** Site Kit's default **Exclude Analytics** setting is **All logged-in users**. He should test from a logged-out private window or his phone and check **Reports → Realtime**, since standard reports take a day or two.
**Hint:** Who is Site Kit ignoring?

### Q6. Priya's site earns from affiliate links and sponsored posts. She wants free, simple stats and already uses Jetpack. What should she check before relying on Jetpack Stats?
- a) Nothing, because Jetpack Stats is free for every kind of site
- b) Whether Jetpack Stats needs a cookie banner in every country
- c) Whether her theme supports Jetpack before Stats can count visits
- d) Whether her commercial site needs a paid plan, as free is non-commercial

**Answer:** d
**Explanation:** Jetpack says its core features, including Stats, are free for **non-commercial** sites; commercial sites need a paid plan. Affiliate and sponsored income makes a site commercial. Alternatively she could use a free cookieless plugin.
**Hint:** Is her site commercial?

### Q7. Spot the error in Ben's analytics plan:
> 1. Install Independent Analytics on the live site.
> 2. Also keep GA4 and Jetpack Stats running, so I can compare all three every month.
> 3. Test with a logged-out private window.
> 4. Add the tool to my privacy policy and plugin log.

- a) Step 1: Independent Analytics only works on Local
- b) Step 3: you should test while logged in as admin
- c) Step 2: run **one** analytics tool; three tools give conflicting numbers, slow pages and longer privacy notices (and GA4 brings consent work)
- d) Step 4: cookieless tools don't need to be in the privacy policy

**Answer:** c
**Explanation:** Analytics is one job: one tool, reviewed monthly. Each tool counts differently (bots, ad blockers, consent refusals), so comparing them causes confusion, not insight. Steps 1, 3 and 4 follow the lesson, including naming cookieless tools in the policy.
**Hint:** One plugin per job.

### Q8. (review: m07-l05) Which of these does **Tools → Export → All content** *not* include?
- a) Posts and pages
- b) The media files themselves (only their addresses), themes, plugins and settings
- c) Comments and categories
- d) Navigation menus

**Answer:** b
**Explanation:** WXR carries content (posts, pages, comments, terms, menus, custom fields) but only references media by URL, and leaves out themes, plugins, settings and plugin tables. That's why moving hosts uses a full-site migration.
**Hint:** It's your writing, not your whole site.
