# M06.L03 Quiz — Canonicals and Duplicate Content

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google's canonicalization, consolidate duplicate URLs and fix canonicalization pages, the Page indexing help, and WordPress 7.1 source.

### Q1. How does Google describe a `rel="canonical"` tag? *(O1 · recall)*
- a) As a rule that every search engine must obey on every page
- b) As a hint: Google may still pick a different page as canonical
- c) As a penalty signal, used only on sites with duplicate content
- d) As an instruction to remove the page from the index at once

**Answer:** b
**Explanation:** "indicating a canonical preference is a hint, not a rule." Google weighs it with other signals and may choose differently.
**Hint:** Rule or hint?

### Q2. Which list puts canonical signals in Google's order, strongest first? *(O2 · recall)*
- a) Sitemap, then `rel="canonical"`, then redirects last of all
- b) `rel="canonical"`, then sitemap, then robots.txt last of all
- c) Robots.txt, then redirects, then `noindex` tags last of all
- d) Redirects and `rel="canonical"` (strong), then sitemaps (weak)

**Answer:** d
**Explanation:** Google lists them "in order of how strongly they can influence canonicalization": redirects ("A strong signal"), `rel="canonical"` ("A strong signal"), sitemap inclusion ("A weak signal").
**Hint:** Which one is called weak?

### Q3. What does Google say about duplicate content within one site? *(O1 · recall)*
- a) Some is normal, and it isn't a violation of the spam policies
- b) It always leads to a manual action against the whole website
- c) It must be blocked in robots.txt so that Google can't find it
- d) It's allowed only if every copy has its own `noindex` tag on it

**Answer:** a
**Explanation:** "Some duplicate content on a site is normal and it's not a violation of Google's spam policies."
**Hint:** Is there a penalty?

### Q4. Tomás's category page has `?sort=price` and `?sort=newest` versions that shoppers use. What should he do? *(O2 · scenario)*
- a) Redirect both versions to the home page, so only one URL remains
- b) Add `noindex` to the main category page, and keep the sorted ones
- c) Add a `rel="canonical"` on each version pointing to the clean URL
- d) Delete the sort options, so that the category has a single address

**Answer:** c
**Explanation:** Shoppers still need the sort options, so a redirect would break them. A canonical to the clean URL tells Google which to index. `noindex` "will completely block the page from Search".
**Hint:** Visitors need both versions.

### Q5. Every page on Amara's client's site has a canonical pointing to the home page. What will Google most likely do? *(O3 · scenario)*
- a) Index only the home page and remove every other page from Search
- b) Ignore those canonicals, because the pages aren't like the home page
- c) Apply a duplicate content penalty to the entire site within a week
- d) Treat each page as a 301 redirect to the home page from now on

**Answer:** b
**Explanation:** "If the user-declared canonical is not similar to the current page, then Google won't ever choose that URL as canonical." Fix the plugin or theme so each page points to itself.
**Hint:** "A duplicate page must be similar to the canonical."

### Q6. URL Inspection shows Nila's declared canonical is `/brew/`, but Google chose `/brew-guide/`. What should she check first? *(O3 · scenario)*
- a) Whether her sitemap, internal links and redirects also point to `/brew/`
- b) Whether her robots.txt blocks `/brew/`, and if not, add a block to it
- c) Whether `/brew-guide/` has a `noindex`, and if not, add one to it now
- d) Whether her meta description on `/brew/` is under 160 characters

**Answer:** a
**Explanation:** Signals "stack", and mixed ones let Google choose differently. She should also check whether the pages are really the same, since Google picks the "most complete and useful" one.
**Hint:** Do all the signals agree?

### Q7. Spot the error: "Our printer-friendly pages are duplicates, so let's block them in robots.txt to avoid a penalty." *(O1 · spot the error)*
- a) Printer-friendly pages must be redirected to the home page instead
- b) Robots.txt is right, but only if the pages also have a canonical
- c) There's no penalty; Google says not to use robots.txt for this
- d) Printer pages must be deleted, because Google can't index them

**Answer:** c
**Explanation:** Duplicate content is "not a violation of Google's spam policies", and Google says: "Don't use the robots.txt file for canonicalization purposes." Use a canonical to the main page.
**Hint:** Two errors: the penalty, and the tool.

### Q8. Spot the error: "Our thank-you page has a `noindex`, and we've also blocked it in robots.txt to be extra safe." *(spot the error · review: m06-l02)*
- a) The robots.txt block is fine, but the `noindex` must be removed
- b) Both are fine, but the page also needs a canonical to the home page
- c) Both are fine, as long as the robots.txt is under 500 KiB in size
- d) The block stops Google seeing the `noindex`; remove the block

**Answer:** d
**Explanation:** As you saw in Lesson 6.2, "For the noindex rule to be effective, the page or resource must not be blocked by a robots.txt file".
**Hint:** In Lesson 6.2, can Google read a page it can't visit?
