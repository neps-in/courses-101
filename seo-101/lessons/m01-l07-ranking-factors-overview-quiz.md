# M01.L07 Quiz — Overview of Google's Ranking Factors

> 8 questions · 3 recall, 4 scenario, 1 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Each question is tagged with the objective it tests (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-04 against Google's "How Search Works" and Google Search Central (ranking systems guide, helpful content, page experience, SEO Starter Guide, link best practices).

### Q1. Which list matches the key signals on Google's "How Search Works" page? *(O1 · recall)*
- a) Keywords, links, speed, domain age, content length
- b) Titles, headings, backlinks, sitemaps, social shares
- c) Meaning, relevance, quality, usability, context
- d) Authority, word count, clicks, freshness, schema

**Answer:** c
**Explanation:** Google lists meaning, relevance, quality, usability and context, and says their weight "varies depending on the nature of your query." The other lists mix real factors with myths and unproven ideas.
**Hint:** Think of a searcher's whole journey, from what they mean to where they are.

### Q2. Nila's new guide has a stray `noindex`, a slow photo and no links from other sites. What should Nila fix first? *(O3 · scenario)*
- a) Remove the `noindex`, so Google can index the page at all
- b) Replace the photo, as Core Web Vitals are used in ranking
- c) Ask a food blogger for a link, as links are a stated signal
- d) Add 1,000 more words, so the guide looks more thorough

**Answer:** a
**Explanation:** A page that isn't indexed can't rank, so nothing else counts until that's fixed (Lesson 1.4). Options b and c are worthwhile, but later. Option d relies on a myth: length alone doesn't matter.
**Hint:** Go down the priority order from the top.

### Q3. What does Google say about word count and ranking? *(O2 · recall)*
- a) Pages need at least 300 words before they can appear in results
- b) Pages of about 2,000 words get a boost in most kinds of search
- c) Longer pages always rank higher than shorter pages on a topic
- d) There's no magical target, and length alone doesn't matter

**Answer:** d
**Explanation:** Google's Starter Guide says "The length of the content alone doesn't matter for ranking purposes (there's no magical word count target, minimum or maximum...)". Write what the topic needs.
**Hint:** Check the table of things Google says not to focus on.

### Q4. A blog tells Kavya she must raise her Domain Authority above 40 to rank on Google. What's the best response? *(O2 · scenario)*
- a) Treat it as a Google rule and buy links until the score goes up
- b) Note that DA is a third-party score, and focus on her own pages
- c) Ask Google to show her site's real score inside Search Console
- d) Move her site to a new domain that already has a higher score

**Answer:** b
**Explanation:** Domain Authority comes from an SEO tool company, and Google says such tools "don't have access to Google's internal ranking data". It can be a rough comparison at best, and buying links to raise it would be link spam.
**Hint:** Who makes that score?

### Q5. Tomás in Lisbon and a friend in Porto both search `hardware shop near me` and see different results. Which signal explains this best? *(O1 · scenario)*
- a) Usability, because one of the two phones has a smaller screen
- b) Freshness, because one of them searched a little later that day
- c) Quality, because shops in each city have different link counts
- d) Context, because Google uses location to judge what's relevant

**Answer:** d
**Explanation:** Google says it uses "your location, past Search history, and Search settings" to determine what's most relevant. Its own example is `bicycle repair shops` showing different results in Paris and Hong Kong.
**Hint:** What's different about the two searchers?

### Q6. Nila Coffee is sorting its list of improvements. Which row is labelled correctly? *(O3 · scenario)*
- a) Compress slow homepage images: technical SEO, usability
- b) Earn a link from a food blogger: on-page SEO, context
- c) Rewrite a vague guide intro: off-page SEO, usability
- d) Add a cold brew guide: technical SEO, context signal

**Answer:** a
**Explanation:** Page speed work is technical SEO and supports usability. An earned link is off-page and supports quality. Improving a guide is on-page work that supports relevance and quality.
**Hint:** Recall where each kind of work happens: on the page, away from the site, or in how the site runs.

### Q7. A learner wrote these notes. Which one contains the mistake? *(O2 · spot-the-error)*
- a) "Links are a signal that Google documents."
- b) "Google doesn't use the keywords meta tag."
- c) "E-E-A-T is a single score for every page."
- d) "Good Core Web Vitals don't guarantee top spots."

**Answer:** c
**Explanation:** Google says "E-E-A-T itself isn't a specific ranking factor". Its systems use a mix of factors that can identify content with those qualities. The other notes match Google's documentation.
**Hint:** Compare each note with Google's exact words.

### Q8. Which `rel` value does Google prefer for a link you were paid to place? *(review: m01-l06 · recall)*
- a) `rel="ugc"`
- b) `rel="sponsored"`
- c) `rel="canonical"`
- d) `rel="noopener"`

**Answer:** b
**Explanation:** Google says to mark ads and paid placements with `sponsored`; `nofollow` is still acceptable. `ugc` is for user-generated links such as comments. Unmarked paid links are link spam.
**Hint:** Which word means someone paid?
