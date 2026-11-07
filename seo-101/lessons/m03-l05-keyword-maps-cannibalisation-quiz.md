# M03.L05 Quiz — Keyword Maps: Grouping Topics and Spotting Cannibalisation

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-08 against Google Search Central (SEO Starter Guide, consolidating duplicate URLs, site moves), Search Console Help and John Mueller's Bluesky posts of 20 Sep 2025.

### Q1. Two phrases share 6 of their top 10 results. What does that most likely tell you? *(O1 · recall)*
- a) Both phrases have exactly the same monthly search volume in every tool
- b) You must write a separate page for each phrase to cover both of them
- c) Google sees much the same need behind both, so one page can serve them
- d) One of the phrases is spam, and it should be removed from your list

**Answer:** c
**Explanation:** When Google shows mostly the same pages for two phrases, it probably sees the same intent behind them, so one page can answer both. Overlap says nothing about volume.
**Hint:** What does it mean if Google picks the same pages for both?

### Q2. What does each row of a keyword map record? *(O2 · recall)*
- a) One topic, its phrases and intent, and the one page that answers it
- b) One phrase, its exact search volume, and its difficulty score in a tool
- c) One competitor, the pages they rank for, and how many links they have
- d) One page on your site, its word count, and the date it was last edited

**Answer:** a
**Explanation:** A keyword map gives each topic one page, existing or planned. That's non-negotiable #5, one page per topic, written down.
**Hint:** The map connects topics to what?

### Q3. Which fix does Google's documentation support when you combine two pages into one? *(O3 · recall)*
- a) Add `noindex` to the weaker page so it no longer competes with the other
- b) Block the weaker page in `robots.txt` so that Google stops crawling it
- c) Remove the weaker page with the URL removal tool in Search Console
- d) Move the content into one page and redirect the old URL to the new page

**Answer:** d
**Explanation:** Google says that if you've "consolidated content previously hosted on multiple pages to a new single page, you can redirect the older URLs to that new, consolidated page." Google doesn't recommend `noindex` for this, and says: "Don't use the robots.txt file for canonicalization purposes" and "Don't use the URL removal tool for canonicalization."
**Hint:** Which option keeps visitors and links pointing somewhere useful?

### Q4. Kavya's posts "Yoga for Beginners" and "A Beginner's Guide to Yoga" both appear in Search Console for "beginner yoga", swapping places on page two. What should she do? *(O3 · scenario)*
- a) Write a third post on the topic, so one of the three is more likely to win
- b) Merge them into the stronger post and redirect the other one to it
- c) Add a canonical tag to each post that points to the other one instead
- d) Change the title of one post to "Home" so Google stops showing it at all

**Answer:** b
**Explanation:** Both posts are actually shown for the same search, and they serve the same intent. Merging into one stronger page and redirecting the other is the fix. Canonical tags pointing at each other send mixed signals.
**Hint:** Are these two pages doing the same job?

### Q5. Nila's product page "Nila French Press" and its guide "How to Use a French Press" both appear for "french press". What's the best response? *(O3 · scenario)*
- a) Merge the guide into the product page and redirect the guide's address
- b) Add `noindex` to the guide so that the product page can rank on its own
- c) Delete the product page, since guides are what Google prefers to show
- d) Keep both, make each page's job clear, and link the guide to the product

**Answer:** d
**Explanation:** One page is for buying and the other is for learning, so they serve different intents. Mueller notes that "pages aren't duplicates just because they happen to appear in the same search results page."
**Hint:** Do these two pages answer the same need?

### Q6. "cold brew ratio" and "cold brew coffee ratio" share 7 of their top 10 results. How should they go into the keyword map? *(O1 · scenario)*
- a) As one topic, both answered by a single page about cold brew ratios
- b) As two topics, each with its own page, so you cover both wordings
- c) As two topics, with one page set to `noindex` to avoid any competition
- d) Leave both out, because a high overlap means the phrases have no value

**Answer:** a
**Explanation:** Heavy overlap means Google treats them as the same need. One page with both phrases in the map is right. Two near-identical pages would compete, and at scale they lean towards doorway abuse.
**Hint:** Seven shared results out of ten. Same need or different?

### Q7. Spot the error: "Two of our pages appear for 'french press ratio', which is always cannibalisation. The quickest fix is to add `noindex` to the weaker one." *(O3 · spot the error)*
- a) The pages should both be blocked in `robots.txt` instead of using `noindex`
- b) Cannibalisation can only happen between two different websites, not on one site
- c) Two pages showing isn't always a problem, and Google advises against `noindex`
- d) The pages should be given identical titles so that Google sees them as one

**Answer:** c
**Explanation:** Check that the pages serve the same intent first. If they do, merge and redirect. Google says: "We don't recommend using noindex to prevent selection of a canonical page within a single site, because it will completely block the page from Search."
**Hint:** There are two claims here. Check each one.

### Q8. Spot the error: "This phrase has a difficulty score of 5 in my tool, so it will be easy to rank for. No need to look at the results." *(spot the error · review: m03-l04)*
- a) Difficulty scores are set by Google, so a score of 5 means a guaranteed rank
- b) A tool's score can't see the ranking pages, so read the results anyway
- c) A low score means the phrase is spam, so it should be dropped from the list
- d) Difficulty scores only apply to paid ads, not to the organic search results

**Answer:** b
**Explanation:** As you saw in Lesson 3.4, a difficulty score is a tool's estimate, and Ahrefs says it "doesn't take into account any on-page factors". Read who ranks before you choose a target.
**Hint:** In Lesson 3.4, what can a difficulty score not see?
