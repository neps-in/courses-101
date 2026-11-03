# M01.L05 Quiz — SERP Features (Featured Snippets, People Also Ask, Local Pack, etc.)

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Each question is tagged with the objective it tests (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-03 against Google Search Central (visual elements gallery, title links, snippets, featured snippets, sitelinks, search operators) and Google Search Help ("Refine Google searches").

### Q1. Where does Google say it **primarily** gets a result's snippet from? *(O1 · recall)*
- a) Only from the meta description, which every page is required to have
- b) From the first sentence of the page, whatever the search was about
- c) From the content on the page, using the meta description only sometimes
- d) From a summary that the site owner submits in Search Console

**Answer:** c
**Explanation:** Google says it "primarily uses the content on the page to automatically determine the appropriate snippet", and uses the meta description only sometimes, when it describes the page better. That's why the same page can show different snippets for different searches.
**Hint:** The meta description is an input, not an order.

### Q2. What is a **featured snippet**? *(O2 · recall)*
- a) A box that reverses the usual format, showing the answer before the link
- b) A paid placement at the top of the page, labelled as sponsored
- c) A list of related questions that expands when you click on one
- d) A set of extra links to other pages on the same site under a result

**Answer:** a
**Explanation:** Google describes featured snippets as "special boxes where the format of a regular search result is reversed, showing the descriptive snippet first." Option c describes People also ask, option d describes sitelinks, and option b is an ad.
**Hint:** It's still an organic result, just displayed differently.

### Q3. How can a site owner get sitelinks under their result? *(O1, O2 · recall)*
- a) Request them in Search Console's sitelinks settings
- b) Add a special sitelinks tag to the homepage's code
- c) Buy them as an add-on with a Google Ads campaign
- d) They can't: sitelinks are automated by Google

**Answer:** d
**Explanation:** Google says "at the moment, sitelinks are automated." Clear site structure, informative headings and concise link text help Google pick good ones, but there's no way to request or buy them. To remove one, Google suggests removing the page or using `noindex`.
**Hint:** Check Google's own sitelinks page: is there any setting?

### Q4. Kavya searches `yoga classes adyar` and sees a map with three studios above the text results. Her studio isn't in it. Which feature is this, and what mainly influences it? *(O2 · scenario)*
- a) A featured snippet, influenced by answer-style paragraphs on her pages
- b) The local pack, influenced by a Google Business Profile and its reviews
- c) A rich result, influenced by adding star-rating markup to her homepage
- d) Sitelinks, influenced by the number of pages in her site's main menu

**Answer:** b
**Explanation:** A map with a few local businesses for a search with a place name is the local pack. It's mainly driven by local signals such as a Google Business Profile, reviews and location details, which you'll work on in Module 11. Rich results with stars rely on structured data and appear in text results, not the map.
**Hint:** A map plus businesses plus a place name.

### Q5. Amara's client wrote `<title>Home</title>` on their bakery homepage, but Google shows the title link "Ada's Bakery – Fresh Cakes in Lagos". What's the most likely explanation? *(O1 · scenario)*
- a) Google built the title link from other text, such as the main heading
- b) Someone hacked the site and changed the title without the owner knowing
- c) Google shows a different title to every searcher, chosen at random each time
- d) The client paid Google to show a better title, which replaced the old one

**Answer:** a
**Explanation:** Google's title links are "completely automated". It uses the `<title>` element, but also the main visual title, headings such as `<h1>`, `og:title`, and link text pointing to the page. A vague title like "Home" makes it more likely Google picks something more descriptive. You'll write better titles in Module 4.
**Hint:** The `<title>` is one of several ingredients.

### Q6. A learner plans these steps. Which one contains the mistake? *(O2, O3 · spot-the-error)*
- a) "Search my topic in a private window and list the features I see."
- b) "Check which page types rank, because that shows what Google expects."
- c) "Add featured-snippet markup to my guide so Google shows it on top."
- d) "Use quotes and minus to find smaller sites I can realistically beat."

**Answer:** c
**Explanation:** Google says you can't mark up a page to get a featured snippet: its systems decide whether a page would make a good one. Clear, direct answers on the page help. The other steps match the lesson.
**Hint:** Is there any markup that requests a featured snippet?

### Q7. In Lesson 1.4 you checked a page in DevTools and it returned status 200, but it says "Page not found". What is this called? *(review: m01-l04 · recall)*
- a) A redirect chain
- b) A canonical
- c) A server error
- d) A soft 404

**Answer:** d
**Explanation:** A page that says "not found" but returns 200 is a soft 404. A missing page should return 404 (or 410) so search engines know it's gone. A server error is in the 500 range, and a redirect returns 301 or 302.
**Hint:** The message and the status code disagree.
