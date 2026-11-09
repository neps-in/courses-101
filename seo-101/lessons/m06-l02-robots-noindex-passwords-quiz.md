# M06.L02 Quiz — Controlling Crawling and Indexing: robots.txt vs `noindex` vs Passwords

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google's robots.txt intro and spec, the noindex and robots meta tag docs, "Control what you share", the robots.txt report and Page indexing help, and WordPress 7.1 source.

### Q1. What does Google say robots.txt is mainly for? *(O2 · recall)*
- a) Keeping private pages hidden from both visitors and search engines
- b) Telling Google to drop indexed pages from its results straight away
- c) Managing which URLs crawlers may visit; it doesn't keep pages out
- d) Setting how many seconds Googlebot must wait between each request

**Answer:** c
**Explanation:** robots.txt "is not a mechanism for keeping a web page out of Google. To keep a web page out of Google, block indexing with noindex or password-protect the page." Google doesn't support `crawl-delay`.
**Hint:** Crawling or indexing?

### Q2. Under `User-agent: *`, a file has `Disallow: /cart/` and `Allow: /cart/help`. Can Googlebot crawl `/cart/help`? *(O1 · recall)*
- a) No, because a disallow rule always beats an allow rule in Google
- b) Yes, because the longer matching rule, `/cart/help`, wins out
- c) No, because rules are read from the top, and the first one wins
- d) Yes, but only if the sitemap line also lists the `/cart/help` page

**Answer:** b
**Explanation:** Google uses "the most specific rule based on the length of the rule path". `/cart/help` is longer than `/cart/`, so the allow wins.
**Hint:** Count the characters.

### Q3. How can you keep a PDF out of Google's results while still letting people open it from a link? *(O2 · recall)*
- a) Send an `X-Robots-Tag: noindex` header with the PDF file itself
- b) Put a `noindex` line in robots.txt next to the PDF's file path
- c) Add a robots meta tag to the home page with the PDF's address in it
- d) Rename the PDF so its address contains the word "private" in it

**Answer:** a
**Explanation:** "A response header can be used for non-HTML resources, such as PDFs". `noindex` in robots.txt "is not supported by Google".
**Hint:** A PDF has no `<head>`.

### Q4. Tomás's thank-you page is blocked in robots.txt and has a `noindex`. It still appears in Google with no description. What should he do? *(O3 · scenario)*
- a) Add a second `noindex` tag, so that Google is more likely to see it
- b) Add `Disallow: /` so that Google can't crawl any page on the site
- c) Remove the robots.txt block and keep the `noindex` on the page
- d) Delete the `noindex` tag, because robots.txt alone is enough here

**Answer:** c
**Explanation:** "For the noindex rule to be effective, the page or resource must not be blocked by a robots.txt file". Google's fix: "remove the robots.txt block and use 'noindex'."
**Hint:** Can Google read a page it can't visit?

### Q5. Kavya's indexed pages halved after a redesign went live, with no new errors. What should she check first? *(O3 · scenario)*
- a) The robots.txt file, WordPress's Reading setting and `noindex` tags
- b) Her meta descriptions, in case they became too long in the redesign
- c) The number of words on each page, in case they fell below a limit
- d) Her Google Business Profile, in case its category has changed

**Answer:** a
**Explanation:** Google describes a "Drop in total indexed pages without corresponding errors" where "you might be blocking access to your existing pages via robots.txt, 'noindex' or a required login". A staging block is the classic cause.
**Hint:** What does a staging site often switch on?

### Q6. Amara's client needs a staging copy of their site kept out of Google. What should she use? *(O2 · scenario)*
- a) A `Disallow: /` line in the staging site's own robots.txt file
- b) A `noindex` tag on the home page of the staging site, but not others
- c) A canonical on each staging page pointing to the live site's pages
- d) Password protection, so neither people nor crawlers can get in

**Answer:** d
**Explanation:** Google says private content needs a password "to ensure only authorized users can access it". Unlike a robots.txt or `noindex` block, there's no rule to forget when the site goes live.
**Hint:** Which tool controls access?

### Q7. Spot the error: "WordPress's 'Discourage search engines' box adds `Disallow: /` to robots.txt, and Google must obey it." *(O1 · spot the error)*
- a) The box adds `Disallow: /admin/` only, so the rest of the site is fine
- b) The box has no effect at all; only an SEO plugin can block search
- c) The box blocks Bing only, because Google ignores WordPress settings
- d) Since 5.3 it adds a `noindex` meta tag, which engines may ignore

**Answer:** d
**Explanation:** WordPress replaced the `Disallow: /` with a robots meta tag in version 5.3, and warns: "It is up to search engines to honor this request."
**Hint:** Check the WordPress version note.

### Q8. Spot the error: "Our deleted products redirect to the home page, so Google won't report any problems." *(spot the error · review: m06-l01)*
- a) Home-page redirects are fine, but only if they use a 302 instead
- b) Google may treat them as soft 404s; redirect only to close matches
- c) Home-page redirects are fine, as long as the site has a sitemap
- d) Google treats them as 500 errors, which slow down site crawling

**Answer:** b
**Explanation:** As you saw in Lesson 6.1, redirecting removed pages to an unrelated page creates soft 404s. Use a 301 to a close replacement, or let the page return 404 or 410.
**Hint:** In Lesson 6.1, what's a "clear replacement"?
