# M05.L05 Quiz — Publish, Update and Change URLs Safely (with Shopify and Wix Notes)

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against WordPress 7.1 source, Google Search Central (byline dates, helpful content, sitemaps, redirects), and the Shopify and Wix help centres.

### Q1. In WordPress 7.1, what does the main button say on a post that's already published? *(O1 · recall)*
- a) **Publish**, which republishes the post with today's date on it
- b) **Save**, and WordPress keeps a revision of the earlier version
- c) **Schedule**, because every change to a live post must be scheduled
- d) **Submit for Review**, which is shown to every user on every site

**Answer:** b
**Explanation:** In 7.1 the button on a published post is **Save**. Many older guides say "Update". Each save keeps a revision you can restore.
**Hint:** Not the word older tutorials use.

### Q2. Which WordPress content gets an automatic 301 when you change its slug? *(O3 · recall)*
- a) Every page and post, as soon as you save the changed slug
- b) Pages only, because they're permanent and posts are not
- c) Published posts, but not pages or slugs changed in drafts
- d) Nothing at all, because WordPress never redirects old URLs

**Answer:** c
**Explanation:** Core stores old slugs only for "published, non-hierarchical objects". Pages are hierarchical, and a draft's old slug was never public.
**Hint:** Hierarchical means "can have a parent".

### Q3. What does Google's helpful-content self-check ask about dates? *(O2 · recall)*
- a) Whether you change dates to seem fresh when nothing much changed
- b) Whether every page shows today's date, so it always looks current
- c) Whether your dates use the US format, which Google prefers to read
- d) Whether you've hidden all dates, since Google prefers undated pages

**Answer:** a
**Explanation:** "Are you changing the date of pages to make them seem fresh when the content has not substantially changed?" Update dates only after a significant change.
**Hint:** It's a warning, not a tip.

### Q4. Tomás changes a Shopify blog post's handle and leaves the defaults. What happens to the old address? *(O3 · scenario)*
- a) It shows "Not found", because Shopify never redirects blog posts
- b) It keeps working as a copy, so the post exists at both addresses
- c) It's deleted from Google's index the same day, with no redirect
- d) It redirects, since "Create a URL redirect" is pre-selected

**Answer:** d
**Explanation:** Shopify says "you have a pre-selected option to Create a URL redirect, and the old web address redirects to the new web address." Keep it ticked, then test.
**Hint:** What's ticked for you?

### Q5. Amara changes a Wix blog post's slug for a client. What must she do? *(O3 · scenario)*
- a) Add a 301 in the URL Redirect Manager; Wix doesn't do it for blog posts
- b) Nothing, because Wix creates a 301 for every slug change on the site
- c) Change the post's date to today, so Google finds the new address
- d) Delete the old post, so there's only one copy of it on the website

**Answer:** a
**Explanation:** "For Wix Blog pages, 301 redirects will not automatically be created." Wix pages do get one, and redirects "only work with custom domains".
**Hint:** Pages and blog posts behave differently on Wix.

### Q6. Nila fixes one typo in a 2025 brew guide. What should she do with its "Last updated" date? *(O2 · scenario)*
- a) Change it to today, so readers and Google see a fresh guide
- b) Delete all dates, so that nobody can tell how old the guide is
- c) Leave it, because a typo isn't a significant update to the guide
- d) Change the published date to today, and remove "Last updated"

**Answer:** c
**Explanation:** Google wants dates, and `lastmod`, to reflect significant updates. A typo isn't one.
**Hint:** Small or significant?

### Q7. Spot the error: "I changed my published 'Classes' page slug, and WordPress always redirects old slugs, so links are fine." *(O3 · spot the error)*
- a) WordPress redirects old slugs only for pages, not for posts
- b) Pages get no automatic redirect, so the old address shows "Not found"
- c) WordPress redirects old slugs only if the site uses Plain permalinks
- d) Links are fine, but only for visitors who use the Chrome browser

**Answer:** b
**Explanation:** The redirect code says "Do not attempt redirect for hierarchical post types." Pages are hierarchical. Add a redirect yourself (Module 6), and update your links.
**Hint:** Is a page a post?

### Q8. Spot the error: "Our new site needs a page builder, because Google measures code-to-text ratio." *(spot the error · review: m05-l04)*
- a) Google measures code-to-text ratio only for sites built on WordPress
- b) Page builders are required by Google for pages that sell products
- c) Code-to-text ratio counts only on mobile, so desktop pages are safe
- d) Google has no such ratio; start with a block theme and the editor

**Answer:** d
**Explanation:** As you saw in Lesson 5.4, Mueller said there's no "text to code ratio" in Google's systems. A new site should start with a block theme, adding a builder only if it's truly needed.
**Hint:** In Lesson 5.4, is code-to-text ratio a signal?
