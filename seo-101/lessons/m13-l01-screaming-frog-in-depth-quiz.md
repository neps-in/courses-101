# M13.L01 Quiz — Screaming Frog Like a Pro (Free First)

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Screaming Frog's pricing page, product page, FAQ, user guide (General, Configuration, Tabs) and release history.

### Q1. What is the free version's crawl limit? *(O1 · recall)*
- a) 50 URLs per crawl, then a paid licence is needed
- b) 5,000 URLs per month across all of your crawls
- c) Unlimited URLs, but only for one site per day
- d) 500 URLs in a single crawl

**Answer:** d
**Explanation:** "The free version is restricted to crawling up to 500 URLs in a single crawl."
**Hint:** Five hundred.

### Q2. What happens to a crawl when you close the free version? *(O2 · recall)*
- a) It's lost: crawls can only be saved with a licence
- b) It's saved automatically to your Google Drive
- c) It's emailed to you as a CSV the next day
- d) It's stored online for 30 days for free users

**Answer:** a
**Explanation:** "Crawls can be saved and opened in the SEO Spider with a licence." Export what you need before closing.
**Hint:** Export first.

### Q3. Which feature needs a licence? *(O3 · recall)*
- a) Finding broken links and redirect chains
- b) Checking page titles and meta descriptions
- c) Custom extraction with XPath or CSS Path
- d) Seeing directives such as noindex

**Answer:** c
**Explanation:** "custom extraction" is among the restricted "advanced features". Broken links, titles, meta and directives are in the free column.
**Hint:** Collecting your own data.

### Q4. A freelancer "crawled Kavya's site as Googlebot" and says it shows what Google sees. What's the problem? *(O1 · scenario)*
- a) Googlebot crawls can only be run on weekends
- b) A fake user agent isn't Googlebot; use URL Inspection
- c) Screaming Frog has no Googlebot setting at all
- d) Kavya's site is too small to be crawled properly

**Answer:** b
**Explanation:** "It's common for sites to block a spoofed Googlebot request". Google's own view comes from URL Inspection (Lesson 12.4).
**Hint:** A name isn't an identity.

### Q5. Tomás's shop has 3,200 URLs, and he uses the free version. What's the best approach? *(O2 · scenario)*
- a) Crawl one section at a time, or consider a licence
- b) Set threads to 50 so it finishes before the limit
- c) Switch to "Ignore robots.txt" to skip the limit
- d) Give up crawling; it only works on tiny sites

**Answer:** a
**Explanation:** The free limit is 500 URLs per crawl. Crawling a section at a time works; a licence removes the limit and lets him save and compare.
**Hint:** Smaller pieces.

### Q6. Nila needs every product page's price and stock text in one sheet. What should she use? *(O3 · scenario)*
- a) The free Page Titles tab, filtered to Duplicate
- b) Custom extraction, which needs a licence
- c) A spoofed Googlebot crawl with 20 threads
- d) The Response Codes tab, filtered to 3XX

**Answer:** b
**Explanation:** Custom extraction can "collect any data from the HTML of a URL" (XPath, CSS Path, Regex); it's a licence feature.
**Hint:** Collect specific data.

### Q7. Spot the error. A colleague's audit note says: "Set 20 threads and 'Ignore robots.txt' on the competitor's shop to finish faster." What's wrong? *(O2 · spot-the-error)*
- a) Nothing; competitors' sites are fair game
- b) Threads can only be set to even numbers
- c) It ignores the owner's rules and may overload them
- d) Ignoring robots.txt is the default setting anyway

**Answer:** c
**Explanation:** The default is "Respect robots.txt"; too many threads could "overload a server and crash it". Keep defaults on sites you don't own (Lesson 10.2).
**Hint:** Someone else's server.

### Q8. Spot the error. *(review: m12-l06)* Nila's hreflang plan says: "Redirect every UK IP address to /en-gb/ so Google learns the UK version." What's wrong?
- a) Nothing; IP redirects help Google find versions
- b) UK visitors must always see the Indian page first
- c) hreflang only works with country-code domains
- d) Googlebot is US-based; use links and hreflang instead

**Answer:** d
**Explanation:** Googlebot's IPs "appear to be based in the USA", and Google says not to redirect by assumed language. Use hreflang and a banner or link.
**Hint:** Where does Googlebot crawl from?
