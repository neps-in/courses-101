# M04.L05 Quiz — Internal Links and Anchor Text

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Search Central (link best practices, ecommerce site structure, SEO Starter Guide) and Search Console Help (Links report).

### Q1. How does Google describe good anchor text? *(O1 · recall)*
- a) Exactly matching the main keyword of the page that you're linking to
- b) Descriptive, reasonably concise, and relevant to both linked pages
- c) As long as possible, so it explains everything about the other page
- d) Always the full URL, so readers can see exactly where they'll go

**Answer:** b
**Explanation:** Google says "Good anchor text is descriptive, reasonably concise, and relevant to the page that it's on and to the page it links to."
**Hint:** Three qualities, none of them "keyword".

### Q2. What does Google say about pages that nothing on your site links to? *(O2 · recall)*
- a) Every page you care about should have a link from at least one other page
- b) Google finds every page through the sitemap, so internal links aren't needed
- c) Pages with no internal links get a penalty in Google's spam policies
- d) Google ignores internal links and counts only links from other sites

**Answer:** a
**Explanation:** "Every page you care about should have a link from at least one other page on your site." Google uses links "to find new pages to crawl" and to judge relative importance.
**Hint:** It's a rule about at least one link.

### Q3. Why should you confirm a "missing" page by hand after checking the Links report? *(O2 · recall)*
- a) The report lists only external links, never links within your site
- b) The report updates only once a year, so all of its data is outdated
- c) The report is only a sample, and it groups pages by canonical URL
- d) The report shows only pages that have already been set to `noindex`

**Answer:** c
**Explanation:** Search Console says the report "isn't a comprehensive list of every link on your site. It shows a sample". So a missing page may still have links.
**Hint:** Is the report complete?

### Q4. Nila's cold brew guide says "Buy the beans here" and links to the shop's home page. What's the best fix? *(O3 · scenario)*
- a) Remove the link, since links to products make a guide look like an advert
- b) Keep "here", but link it to the cold brew category page instead
- c) Add five more links saying "here" to different pages in the shop
- d) Link to the exact product, with anchor text naming the beans

**Answer:** d
**Explanation:** The reader wants those specific beans. Link to their product page, with anchor text such as "our Chikmagalur medium roast". Google lists "here"-style anchors as too generic.
**Hint:** Specific page, specific words.

### Q5. Kavya's blog ends every post with "Related: Breathing, Balance, Flexibility, Strength, Sleep", all as links side by side. What does Google advise? *(O1 · scenario)*
- a) Don't chain links; space them out with context so each is clear
- b) It's ideal, because more links in one place pass more importance
- c) Turn each word into a heading, so that Google treats them as topics
- d) Hide the list from readers, and leave it in the code for Google only

**Answer:** a
**Explanation:** Google says "Don't chain up links next to each other; it's harder for your readers to distinguish between links, and you lose surrounding text for each link." Hiding links would be a spam risk.
**Hint:** What do the words around a link do?

### Q6. Tomás adds a new product, a cordless drill, but only lists it in the sitemap. What should he do first? *(O3 · scenario)*
- a) Nothing, because the sitemap is all Google needs to rank the page
- b) Link it from its category page and from a related guide, in context
- c) Change its URL to `/tools/drills/cordless/` so Google sees the structure
- d) Submit it in Search Console every day until it starts getting visits

**Answer:** b
**Explanation:** Every page you care about needs internal links, and Google reads structure from links, not URL folders: it "generally doesn't look at the structure of URLs to work out the structure of a site".
**Hint:** Roads, not maps.

### Q7. Spot the error: "Our 'Read more' links are fine, because Google ignores anchor text and reads only the URL." *(O1 · spot the error)*
- a) Google reads only the title attribute of each link, not its text or URL
- b) "Read more" is fine on mobile, though it's a problem on desktop pages
- c) URLs are ignored by Google, so only the anchor text is ever read by it
- d) Anchor text tells Google about the target, and "Read more" is too generic

**Answer:** d
**Explanation:** Google says anchor text "tells people and Google something about the page you're linking to", and lists "Read more" as "Bad (too generic)".
**Hint:** What does anchor text tell Google?

### Q8. Spot the error: "Our product photo's file name is `chikmagalur-medium-roast.jpg`, so it doesn't need alt text." *(spot the error · review: m04-l04)*
- a) Alt text is only needed for decorative images, not for product photos
- b) File names are ignored by Google, so the image should be renamed again
- c) File names give light clues; alt text is the most important image detail
- d) A good file name replaces alt text only if the image is above the fold

**Answer:** c
**Explanation:** As you saw in Lesson 4.4, file names give "very light clues", while alt text is "the most important attribute" for image metadata, and screen readers need it.
**Hint:** In Lesson 4.4, which detail mattered most?
