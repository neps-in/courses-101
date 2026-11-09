# M14.L05 Quiz — AI Search Orientation: AI Overviews, AI Mode and Your Controls

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-10 against Google's *AI features and your website*, the generative AI optimisation guide, the robots meta tag page, the Google common crawlers page, and Search Console Help on the Search generative AI control, the Generative AI performance report and Performance metrics.

### Q1. What must a page have to be eligible as a supporting link in AI Overviews or AI Mode? *(O1 · recall)*
- a) An `llms.txt` file and FAQ structured data on every page
- b) Indexed and able to be shown in Search with a snippet
- c) A Google-Extended allow rule in the site's robots.txt
- d) A minimum of 1,500 words and at least 10 backlinks

**Answer:** b
**Explanation:** "a page must be indexed and eligible to be shown in Google Search with a snippet". "There are no additional technical requirements."
**Hint:** The same two things normal results need.

### Q2. What does Google-Extended control? *(O2 · recall)*
- a) Whether your pages appear in AI Overviews and AI Mode
- b) How fast Googlebot crawls the pages on your site
- c) Gemini training and grounding, not Google Search
- d) Whether your snippets appear in normal results

**Answer:** c
**Explanation:** It manages use for training future Gemini models and for grounding in Gemini Apps and Vertex AI. It "does not impact a site's inclusion in Google Search nor is it used as a ranking signal in Google Search."
**Hint:** Gemini, not Search.

### Q3. Where do clicks from links in AI Overviews appear in Search Console? *(O3 · recall)*
- a) In the Performance report, under Web
- b) Only in the Generative AI performance report
- c) Nowhere, as AI Overview clicks aren't counted
- d) Under a separate "AI" search type filter

**Answer:** a
**Explanation:** AI feature traffic is "reported on in the Performance report, within the "Web" search type", and an AI Overview link click "counts as a click". The Generative AI report shows impressions only.
**Hint:** Included in the totals you already see.

### Q4. Nila wants one line ("Wholesale prices on request") kept out of snippets and AI answers, but the rest of the page used normally. Which control? *(O2 · scenario)*
- a) `nosnippet` in the page's robots meta tag
- b) `noindex` on the page
- c) The Search generative AI control set to Exclude
- d) `data-nosnippet` on the element with that line

**Answer:** d
**Explanation:** `data-nosnippet` works on a `span`, `div` or `section` and affects only that text. `nosnippet` removes the whole page's snippet, `noindex` removes the page, and the Search Console control applies to the whole site.
**Hint:** The narrowest tool that does the job.

### Q5. Kavya is offered a "GEO package" with an `llms.txt` file, chunked content and "AI schema". What does Google's documentation say? *(O3 · scenario)*
- a) They're required for AI Mode, but not for AI Overviews
- b) They're myths; Google Search ignores llms.txt files
- c) They help only if the site also blocks Google-Extended
- d) They're spam and will cause a manual action

**Answer:** b
**Explanation:** Google's optimisation guide lists llms.txt, chunking and overfocusing on structured data as myths, and says llms.txt "will neither harm nor help" because "Google Search ignores them." They're useless for Google, not spam.
**Hint:** Neither harm nor help.

### Q6. A publisher sets the Search generative AI control to Exclude. What happens? *(O2 · scenario)*
- a) Their pages drop in normal search rankings as a penalty
- b) AI answers on their topic stop appearing for everyone
- c) Their links and content leave those features; others' remain
- d) Their content can no longer be used to train Gemini models

**Answer:** c
**Explanation:** Excluded sites get no traffic or impressions from those features, and "Content from other sites will still be available in those features, and it may appear similar to yours." The control isn't a ranking signal and "doesn't affect AI training".
**Hint:** You leave; the topic doesn't.

### Q7. Spot the error. A consultant says: "To stay out of AI Overviews, block Google-Extended. It's safe because it doesn't affect your normal snippets." What's wrong? *(O2 · spot the error)*
- a) Google-Extended doesn't affect AI Overviews at all
- b) Nothing; that is exactly what Google-Extended is for
- c) Google-Extended also removes the site from Search
- d) Blocking it is only possible in the Search Console settings

**Answer:** a
**Explanation:** Google-Extended covers Gemini training and grounding, and "does not impact a site's inclusion in Google Search". To limit AI Overviews, use snippet controls or the Search Console control.
**Hint:** Half true: snippets are safe, but nothing changes in AI Overviews.

### Q8. Spot the error. A plugin adds FAQPage markup with Q&As that aren't visible on the page, "to help us appear in AI Overviews". What's wrong? *(review: m12-l05 · spot the error)*
- a) FAQ markup must always be placed in the page footer
- b) Nothing; hidden Q&As are fine if they are accurate
- c) Only the number of Q&As is wrong; five is the limit
- d) Markup must match visible content; AI needs none

**Answer:** d
**Explanation:** Structured data must describe what's on the page, and Google says no special schema.org markup is needed for generative AI search. FAQ rich results also no longer appear in Search.
**Hint:** Honest markup, and no special AI markup.
