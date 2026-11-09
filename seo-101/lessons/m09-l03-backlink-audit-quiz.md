# M09.L03 Quiz — Auditing Your Backlinks for Free

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Search Console Help (Links report, Manual actions), the Bing Webmaster Tools 2020 announcement, Ahrefs Free and Ahrefs Help, and Ahrefs' unlinked mentions guide.

### Q1. What does Search Console's Links report NOT tell you about a link? *(O2 · recall)*
- a) Which site the link comes from, grouped by root domain
- b) Which of your pages the link points to on your site
- c) Whether the link is marked nofollow or not
- d) The text used in the links pointing to your site

**Answer:** c
**Explanation:** "The report doesn't specify if a link is marked as nofollow." Check `rel` on the live page, or in Ahrefs Free, which shows link types.
**Hint:** One attribute is missing.

### Q2. What's true about the free version of Ahrefs (Ahrefs Free)? *(O1 · recall)*
- a) It shows backlinks for any competitor's site at no cost
- b) It shows backlinks for your verified sites, up to 1,000 at once
- c) It's Google's own tool, renamed from Webmaster Tools in 2026
- d) It shows the exact same links as Search Console, in a new layout

**Answer:** b
**Explanation:** You'll "see up to 1000 backlinks at once" for verified sites; "subscription plans allow you to analyze competing websites". It was renamed from Ahrefs Webmaster Tools.
**Hint:** Your own sites, with a cap.

### Q3. What is an "unlinked mention"? *(O3 · recall)*
- a) A page that mentions your brand but doesn't link to your site
- b) A link to your site that has been marked as nofollow
- c) A page on your own site that no other page links to
- d) A link from a site that Google has removed from its index

**Answer:** a
**Explanation:** "online mentions (citations) of your brand … that do not link back to your site". A polite request can sometimes turn one into a link.
**Hint:** Named, not linked.

### Q4. Search Console shows 34 linking sites, Bing 21 and Ahrefs Free 47 for Nila. What should she conclude? *(O1 · scenario)*
- a) Ahrefs is right, because it shows the biggest number
- b) Search Console is right, because it's Google's own tool
- c) Two of the tools are broken and should be ignored
- d) Each is a sample from its own crawl; combine and check live

**Answer:** d
**Explanation:** Each tool crawls differently. Search Console says it shows "a sample". Combine them, one row per linking site, and check the live pages.
**Hint:** Three windows on one house.

### Q5. Tomás finds 80 links from foreign scraper sites he never asked for. How should he label them? *(O2 · scenario)*
- a) Ignore: Google typically ignores known spam links
- b) Fine, because more links always help rankings
- c) Risky, and disavow them all straight away
- d) Risky, and pay an agency to remove each one

**Answer:** a
**Explanation:** "For known spam sites, Google typically will ignore the links". He didn't arrange them, so they go in **ignore**, not **risky**.
**Hint:** Did anyone arrange them?

### Q6. Search Console shows three sites linking to Nila's old `/shop/chikmagalur` page, which now returns 404. What's the best fix? *(O3 · scenario)*
- a) Leave it, since 404s never matter for links
- b) Redirect the old URL to the current product page
- c) Disavow the three sites that link to the old page
- d) Recreate an empty page at the old URL with no content

**Answer:** b
**Explanation:** A 301 redirect to the best current page (Lesson 6.5, non-negotiable #8) reclaims the links. You can also ask the sites to update their links.
**Hint:** Reclaim, don't waste.

### Q7. Spot the error. Kavya writes in her audit: "Any link from an ugly or spammy-looking site is risky and must be dealt with." What's wrong? *(O2 · spot-the-error)*
- a) Nothing; every ugly site is risky and must be removed
- b) Only links from sites with DA under 10 are ever risky
- c) Spam links can only be removed by Google, not by owners
- d) Risky means arranged links; unasked spam is ignore

**Answer:** d
**Explanation:** The key question is whether someone arranged the link to move rankings. Spam you didn't ask for goes in **ignore**: Google "typically will ignore the links".
**Hint:** Ugly isn't the test.

### Q8. Spot the error. *(review: m09-l02)* An email says: "Your site has 312 toxic backlinks with low DA. Pay ₹25,000 for an urgent clean-up." What's wrong?
- a) Nothing; low-DA links always harm Google rankings
- b) The price is fine, but the clean-up should be done monthly
- c) "Toxic" and DA are tool labels; Google doesn't use them
- d) Toxic links can only be found in Search Console

**Answer:** c
**Explanation:** DA isn't used by Google, and Mueller called disavowing by third-party metrics "a terrible idea" (Lesson 9.2). Without a manual action, there's usually nothing to clean up (Lesson 9.5).
**Hint:** Whose labels?
