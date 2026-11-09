# M05.L01 Quiz — Your WordPress Practice Site: Set-up, Permalinks and Moving from Blogger

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against the WordPress Playground Handbook, WordPress 7.1 source and docs, Google Search Central (SEO Starter Guide, URL structure) and the Blogger Importer plugin page.

### Q1. Why can't Search Console inspect a WordPress Playground site? *(O1 · recall)*
- a) It runs in your own browser, so it has no public address for Google
- b) Playground blocks Google with a `noindex` tag that you can't turn off
- c) Search Console only works with sites that use the Blogger platform
- d) Playground sites are indexed, but only after you pay for a domain

**Answer:** a
**Explanation:** Playground "runs locally in your browser. It does not upload your site unless you choose an action such as Export to GitHub." With no public address, Google can't reach it.
**Hint:** Where does a Playground site live?

### Q2. What does Google say about keywords in URLs? *(O2 · recall)*
- a) They're one of the strongest ranking signals for any small site
- b) They help only when the URL also includes the year and month
- c) They alone have hardly any effect beyond appearing in breadcrumbs
- d) They hurt rankings, so URLs should use ID numbers instead of words

**Answer:** c
**Explanation:** The Starter Guide says URL keywords "alone have hardly any effect beyond appearing in breadcrumbs". Google still recommends "readable words rather than long ID numbers".
**Hint:** "Hardly any…"

### Q3. What does the Playground Handbook say about autosaves? *(O3 · recall)*
- a) They're recovery points, not long-term backups, and only five are kept
- b) They're kept for ever on WordPress.org's servers, at no extra cost
- c) They replace the need for a ZIP, as long as you never close the tab
- d) They're sent to Google Drive each night, so you can't lose a site

**Answer:** a
**Explanation:** "Autosaves are recovery points, not long-term backups." and "Playground keeps up to five recent autosaves." Use **Store permanently** and **Download as .zip**.
**Hint:** How many does it keep?

### Q4. Kavya's new WordPress site has no posts yet. Its permalinks are set to **Day and name**. What should she do? *(O2 · scenario)*
- a) Leave it, because dates in addresses help posts rank higher
- b) Wait until she has 20 posts, then switch, so Google sees the change
- c) Switch to **Plain**, so every address ends in a short number
- d) Switch to **Post name** now, before she publishes anything

**Answer:** d
**Explanation:** With no posts, changing costs nothing. Post name gives short, readable addresses. Changing after publishing would break existing links.
**Hint:** When is a change free?

### Q5. Tomás moves two Blogger posts into his Local site. What's the best approach? *(O3 · scenario)*
- a) Use the Blogger Importer, because it moves pages and posts together
- b) Recreate them by hand, re-upload the images, and keep a Blogger backup
- c) Delete his Blogger blog first, so there's only one copy of each post
- d) Paste the posts in, leaving images loading from Blogger to save space

**Answer:** b
**Explanation:** The importer "hasn't been tested with the latest 3 major releases" and "does not handle blogger pages". Two posts by hand is quick, and **Back up content** keeps a safe copy.
**Hint:** Which option keeps everything safe and working?

### Q6. Amara needs her WordPress practice site to show real data in Search Console. Which option fits? *(O1 · scenario)*
- a) Playground, as long as she uses **Store permanently** first
- b) Local, as long as she turns on the SSL option in its settings
- c) Hosting with her own domain, so the site is public
- d) Playground with `?storage=temp`, so Google sees a fresh copy

**Answer:** c
**Explanation:** Only a public site can be verified and crawled. Local and Playground are private, however they're saved.
**Hint:** Which one can Google reach?

### Q7. Spot the error: "Our client's 200 posts use date-based URLs. Let's switch to Post name today, since URL keywords are a big ranking boost." *(O2 · spot the error)*
- a) Post name is only allowed on sites with fewer than 100 published posts
- b) The gain is close to none, and changing live URLs risks broken links
- c) Date-based URLs rank higher, so the client should add the time as well
- d) Switching is safe, because WordPress always redirects every old address

**Answer:** b
**Explanation:** Google says URL keywords have "hardly any effect". WordPress only guesses old addresses when it can read a post name in them, so a live change needs planned redirects (Module 6).
**Hint:** Two claims: the benefit, and the risk.

### Q8. Spot the error: "Our category page uses a **Load more** button, and Google clicks it, so all 60 products are found." *(spot the error · review: m04-l06)*
- a) Google clicks the button only on mobile, so desktop products are missed
- b) Google finds products only through the site search box, not categories
- c) Category pages are ignored by Google, so the button doesn't matter here
- d) Google doesn't click buttons, so link every product or use real pages

**Answer:** d
**Explanation:** As you saw in Lesson 4.6, "Google's crawlers don't "click" buttons". Use numbered pages with real links, or list every product in the sitemap.
**Hint:** In Lesson 4.6, does Google interact with the page?
