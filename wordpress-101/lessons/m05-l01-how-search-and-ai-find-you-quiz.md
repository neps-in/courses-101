# M05.L01 Quiz — How search engines and AI answer engines find, index and cite your content

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced-review question from M04.L03.
> Checked against Google Search Central, OpenAI and Perplexity crawler docs and WordPress 7.0 on 2026-10-31.

### Q1. In what order does Google Search process a page?
- a) Indexing → crawling → ranking
- b) Ranking → crawling → indexing
- c) Crawling → indexing → serving (ranking)
- d) Crawling → ranking → indexing

**Answer:** c
**Explanation:** Google first **crawls** (downloads the page), then **indexes** it (analyses and stores it), then **serves** it in results for relevant searches. A page that isn't crawled can't be indexed, and one that isn't indexed can't rank.
**Hint:** You have to find a book before you can catalogue it.

### Q2. What do you need for a page to appear as a supporting link in Google's AI Overviews or AI Mode?
- a) A special AI schema type and an llms.txt file in the site root
- b) An allow rule for Google-Extended in your robots.txt file
- c) A paid Google AI publisher account linked to Search Console
- d) The page must be indexed and eligible to show with a snippet

**Answer:** d
**Explanation:** Google says there are "no additional requirements" for AI Overviews or AI Mode: the page must be indexed and eligible to be shown with a snippet. Google-Extended doesn't affect Google Search, and no paid account or special file is required.
**Hint:** Google says the same SEO basics apply.

### Q3. Which robots.txt change would remove a site from **ChatGPT search** results?
- a) Disallowing **GPTBot**
- b) Disallowing **OAI-SearchBot**
- c) Disallowing **Google-Extended**
- d) Disallowing **PerplexityBot**

**Answer:** b
**Explanation:** OpenAI uses **OAI-SearchBot** for ChatGPT search. **GPTBot** is about training and is controlled separately; OpenAI says a site can allow OAI-SearchBot while disallowing GPTBot. Google-Extended and PerplexityBot belong to other companies.
**Hint:** Search bot vs training bot.

### Q4. Paolo launched his site a month ago. `/robots.txt` has no `Sitemap:` line, and his posts' source shows `noindex, nofollow`. What's the most likely cause?
- a) **Discourage search engines** is still ticked in Settings → Reading
- b) His theme doesn't support sitemaps, so he needs a new theme
- c) Google hasn't finished crawling yet, so he should simply wait
- d) His posts are too short, so WordPress hides them from search

**Answer:** a
**Explanation:** That setting adds `noindex, nofollow` to every page **and** turns off WordPress's sitemap, so the Sitemap line disappears from robots.txt. Untick it, then check with URL Inspection. Waiting won't help while `noindex` is there.
**Hint:** Which single setting does both things?

### Q5. Hira searches `site:hiracooks.com/miso-ramen/` and gets no results. What should she do next?
- a) Conclude the post isn't indexed and delete it
- b) Inspect the URL in Search Console's URL Inspection
- c) Repeat the `site:` search every hour until it shows
- d) Add the post's URL as a tag so Google finds it

**Answer:** b
**Explanation:** Google says `site:` doesn't necessarily return every indexed URL. URL Inspection gives the definite status for one URL (on Google or not, and why) and lets her test the live page and request indexing.
**Hint:** Which tool is definitive for one URL?

### Q6. Spot the error: Sven's "AI visibility" plan says:
> 1. Keep Googlebot and Bingbot allowed, so Google AI features and Copilot can use my pages.
> 2. Allow OAI-SearchBot and PerplexityBot, so ChatGPT search and Perplexity can cite me.
> 3. Block Google-Extended, which will remove my posts from AI Overviews but keep them in normal Google results.
> 4. Check Bing Webmaster Tools' AI Performance report to see where I'm cited.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Google-Extended doesn't affect Google Search, including AI Overviews; it controls use of content for Gemini training and grounding in other Google products. To limit what appears from a page in Search (including AI features), Google points to `nosnippet`, `data-nosnippet`, `max-snippet` or `noindex`.
**Hint:** What does Google say Google-Extended does *not* affect?

### Q7. (review: m04-l03) Aiko wants Google to find her new **Start Here** page quickly. Which of her M04 choices helps discovery most?
- a) Linking to it from the header menu that appears on every page
- b) Setting it as the posts page in Settings → Reading
- c) Saving it as a draft until it has more content
- d) Writing its title in the footer as plain text, not a link

**Answer:** a
**Explanation:** Crawlers discover pages mostly by following links (and sitemaps). A menu link on every page gives crawlers many paths to it. A posts page shows posts, not its own content; drafts can't be crawled or indexed; plain text isn't a link.
**Hint:** How do crawlers find new pages?
