# M09.L01 Quiz — How Links Work: PageRank, Anchor Text and Link Attributes

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against the 1998 PageRank paper, Google Search Central (ranking systems guide, SEO Starter Guide, link best practices, qualify outbound links), the 2019 "Evolving nofollow" post and How Search Works.

### Q1. In the original PageRank paper, what is a page's PageRank? *(O1 · recall)*
- a) The number of words on the page that match a search query
- b) How likely a "random surfer" clicking links is to land on it
- c) The page's position in Google's results for its main keyword
- d) A score out of 100 that Google shows in Search Console

**Answer:** b
**Explanation:** "The probability that the random surfer visits a page is its PageRank." Pages linked from many well-linked pages get visited more.
**Hint:** Someone who keeps clicking.

### Q2. What does Google say about PageRank today? *(O1 · recall)*
- a) It was retired in 2016 and replaced by the Penguin system
- b) It's the single most important signal in Google's ranking
- c) It's still part of core ranking, but just one of many signals
- d) It's only used for news sites and not for business websites

**Answer:** c
**Explanation:** PageRank "continues to be part of our core ranking systems", but "there's much more to Google Search than just links … PageRank is just one of those."
**Hint:** Still used, not alone.

### Q3. Since 2019–2020, how does Google treat `sponsored`, `ugc` and `nofollow`? *(O3 · recall)*
- a) As hints about which links to consider or exclude
- b) As strict commands that Google must always obey
- c) As signals that the linked site is spam and should drop
- d) As instructions that stop the linked page being indexed

**Answer:** a
**Explanation:** "All the link attributes—sponsored, ugc, and nofollow—are treated as hints about which links to consider or exclude within Search." Ranking from September 2019; crawling and indexing from 1 March 2020.
**Hint:** Suggestions, not rules.

### Q4. A national newspaper links to Tomás's shop with `rel="nofollow"`. What's the best way to see it? *(O3 · scenario)*
- a) Worthless, since nofollow links are completely ignored by Google
- b) Harmful, since nofollow tells Google the shop can't be trusted
- c) A problem he should ask the newspaper to fix straight away
- d) Still useful: it sends visitors, and Google may use it as a hint

**Answer:** d
**Explanation:** Since 2019, `nofollow` is a hint, and such links are normal in a natural profile. Google will "generally" not use them for ranking, but readers still click.
**Hint:** Readers don't care about rel.

### Q5. Nila's blogger friend offers to link to her. Which anchor text is most natural for Nila to expect? *(O2 · scenario)*
- a) "best coffee beans online India", exactly as Nila requests
- b) Whatever the friend writes, such as "Nila's Chikmagalur beans"
- c) The same keyword phrase Nila uses on all her other links
- d) A hidden link on a single full stop in the friend's post

**Answer:** b
**Explanation:** Natural anchors are the linker's own descriptive words. Requesting keyword anchors looks manufactured; Google warns against cramming keywords into links.
**Hint:** Whose words?

### Q6. Kavya's site links to a paid yoga mat review, a blog comment section, and a government health page she trusts. Which `rel` values fit? *(O3 · scenario)*
- a) `nofollow` on all three, to keep her site's PageRank
- b) `sponsored` on all three, because all links are a kind of ad
- c) Paid: `sponsored`; comments: `ugc`; government page: none
- d) None on any, because rel values no longer matter after 2019

**Answer:** c
**Explanation:** `sponsored` for "paid placements", `ugc` for "comments and forum posts", and for regular links "you don't need to add a rel attribute".
**Hint:** Match the value to the link.

### Q7. Spot the error. Amara tells a client: "Your competitor has 2,000 backlinks and you have 150, so they'll always outrank you." What's wrong? *(O1 · spot-the-error)*
- a) Raw link counts mislead; quality and relevance matter more
- b) Nothing; Google ranks sites by their total number of backlinks
- c) Backlinks only count if they come from social media sites
- d) The client should buy 2,000 links to match the competitor

**Answer:** a
**Explanation:** PageRank weights links by the linking page's importance, many links may come from a few sites, and links are one signal among many. Illyes (2023, as reported): "It's absolutely possible to rank without links".
**Hint:** Count isn't weight.

### Q8. Spot the error. *(review: m08-l06)* Nila's monthly report headline reads: "We gained 40 backlinks this month!" What's the problem with it as a headline?
- a) Backlinks must be reported in GA4, not in a monthly report
- b) Nothing; backlinks are the best measure of SEO success
- c) Monthly reports should never mention links at all
- d) It isn't a goal KPI; lead with clicks and key events

**Answer:** d
**Explanation:** Lesson 8.6: KPIs tie to the business goal (non-branded clicks, organic key events). Links are a means, not the result; they can go in the "what we changed" section.
**Hint:** Means or result?
