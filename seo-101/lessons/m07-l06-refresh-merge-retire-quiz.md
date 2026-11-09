# M07.L06 Quiz — Refresh, Merge or Retire: Keeping Old Content Useful

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google's core updates guidance, helpful-content page, redirects and status-code docs, removals guidance, ranking systems guide, Search Console Help, GOV.UK's retire-content guidance and a 2022 Search Engine Roundtable report.

### Q1. What does Google's core updates guidance say about deleting content? *(O2 · recall)*
- a) Delete any post with fewer than 100 visits a month to raise quality
- b) It's a last resort, only if you think the content can't be salvaged
- c) Delete old posts every January so that the whole site looks fresh
- d) Deleting is always better than updating, because it's much faster

**Answer:** b
**Explanation:** "Deleting content is a last resort, and only to be considered if you think the content can't be salvaged." Google suggests you first "improve your content in meaningful ways".
**Hint:** Improve first.

### Q2. How does Google's current documentation treat a 410 compared with a 404? *(O2 · recall)*
- a) A 410 removes the page from results the same day; a 404 takes a year
- b) A 404 is a penalty signal, so retired pages must always return a 410
- c) A 410 is only for shops; blogs must always use a 404 for old posts
- d) The same: all 4xx errors except 429 are treated in the same way

**Answer:** d
**Explanation:** "All 4xx errors, except 429, are treated the same". Google "will stop using the URL over time". Either code is fine for a retired post.
**Hint:** Check the docs, not the folklore.

### Q3. When is it honest to change a post's "Last updated" date? *(O3 · recall)*
- a) Every January, so the post always shows the current year
- b) Whenever you fix a typo or change a single word in the post
- c) After a significant change, such as new facts, steps or sections
- d) Never; once a post is published, its date must stay as it was

**Answer:** c
**Explanation:** John Mueller (2022): "When you write something new, or siginificantly [sic] change something existing, then change the date. Changing the date without doing anything else is just noise & useless."
**Hint:** What changed for the reader?

### Q4. Tomás has two posts, "How to fix a dripping tap" and "Dripping tap repair guide". Both get impressions for "fix dripping tap". What should he do? *(O2 · scenario)*
- a) Merge them into the stronger page and 301 the other one to it
- b) Keep both, and change the date on the weaker one to this year
- c) Delete both posts and write a third one on the same topic
- d) Add `noindex` to the stronger post so the other can rank instead

**Answer:** a
**Explanation:** Two pages answering one question compete (Lesson 3.5). Combine the useful parts into the stronger page, redirect the other in a single hop, and update internal links.
**Hint:** One question, one page.

### Q5. Nila's cold brew post always gets fewer clicks from June to September. Which comparison shows whether it's really decaying? *(O1 · scenario)*
- a) June to September against the four months just before it
- b) This week against last week, with no other date ranges checked
- c) June to September against the same months last year
- d) The total clicks since the post was first published

**Answer:** c
**Explanation:** Seasonal topics rise and fall every year. Comparing with the same months last year (Search Console **Date → Compare**) separates real decay from the season.
**Hint:** Compare like with like.

### Q6. Nila stops selling a gift box, and a newer gift box page exists. What should happen to the old URL? *(O2 · scenario)*
- a) Redirect it to the home page, which is the safest place to send visitors
- b) Redirect it with a 301 to the new gift box page, a close replacement
- c) Leave it live, empty, with a short note saying the product is gone
- d) Block it in robots.txt so that Google stops showing it in results

**Answer:** b
**Explanation:** Redirects suit the case "You removed a page and you want to send users to a new page." A close replacement is a good target. Home-page redirects, emptied pages (soft 404s) and robots.txt blocks ("Don't use robots.txt as a way to block your page") are all mistakes.
**Hint:** Where would the visitor be glad to land?

### Q7. Spot the error. Amara's client says: "Let's delete our 60 weakest posts and add 60 new ones this month. Google will see a fresher site." What's wrong? *(O3 · spot-the-error)*
- a) Nothing; Google rewards sites that replace old posts in bulk
- b) Only the deleting is wrong; adding 60 new posts at once would help
- c) Only the adding is wrong; deleting 60 weak posts is always fine
- d) Mass adding or removing to look "fresh" won't help, Google says

**Answer:** d
**Explanation:** Google asks: "Are you adding a lot of new content or removing a lot of older content primarily because you believe it will help your search rankings overall by somehow making your site seem "fresh?" (No, it won't)". Audit each post instead.
**Hint:** Google answers its own question.

### Q8. Spot the error. *(review: m06-l05)* Tomás merges post A into post B. Post A already redirected from an older URL, so the old URL now goes old → A → B. He says: "It ends at B, so it's fine." What should he change?
- a) Point the old URL straight at B, so every redirect is a single hop
- b) Nothing; Google follows up to ten hops for every page it crawls
- c) Remove all the redirects, so the old URLs return a 200 status
- d) Add a third redirect from B back to A to keep the chain balanced

**Answer:** a
**Explanation:** Non-negotiable #8 asks for single-hop redirects. After a merge, update older redirects to point at the final URL, and update internal links too (Lesson 6.5).
**Hint:** Count the hops.
