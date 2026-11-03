# M07.L04 Quiz — Technical SEO Foundations

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-03 against Google Search Central (robots.txt, noindex, canonical, Organization and Product structured data, AI features and your website).

### Q1. What does `robots.txt` actually control? *(O2 · recall)*
- a) Which pages appear in Google's results and which ones are removed
- b) Which URLs crawlers may fetch, not whether that page can be indexed
- c) How high each page ranks for the keywords listed in the sitemap file
- d) Which visitors are allowed to open the page in an ordinary browser

**Answer:** b
**Explanation:** Google: robots.txt "is not a mechanism for keeping a web page out of Google". It manages crawling; a blocked URL can still appear if it's linked elsewhere. To stay out of results, use `noindex` on a crawlable page (or a password). It doesn't affect ranking or human visitors.
**Hint:** Fetching versus listing.

### Q2. Which statement about structured data is correct? *(O1 · recall)*
- a) Adding valid Product markup guarantees a rich result with the price
- b) Markup can list a lower price than the page shows, to attract clicks
- c) It must match visible content; it makes pages eligible, not certain
- d) FAQ markup is the best way to get rich results for a launch page now

**Answer:** c
**Explanation:** Google's guidelines require markup to reflect what's visible on the page, and Google decides whether to show any rich result. Mismatched prices mislead people and search/AI systems. Google cut FAQ rich results back to government and health sites in 2023, and they're reportedly gone for all sites since May 2026.
**Hint:** Truthful and eligible, not guaranteed.

### Q3. What does a self-referencing canonical tag tell Google? *(O2 · recall)*
- a) That this page should never be crawled or stored in Google's index
- b) That Google must show this page first for searches about your brand
- c) That the page has been verified in Search Console by the site owner
- d) That this exact URL is the preferred address for the page's content

**Answer:** d
**Explanation:** `<link rel="canonical" href="https://…">` names the preferred URL among duplicates (`http://`, `www`, URLs with parameters). It's a strong hint, not a ranking promise, and has nothing to do with crawling permission or verification.
**Hint:** "The original copy is here."

### Q4. Two weeks after launch, your page isn't in Google. URL Inspection says "Blocked by robots.txt". What do you do? *(O3 · scenario)*
- a) Add a `noindex` tag so that Google recrawls the page sooner than before
- b) Change the rule to allow crawling, deploy, then test the live URL again
- c) Submit the sitemap again every day until Google eventually indexes it
- d) Add more structured data so Google decides the page is worth crawling

**Answer:** b
**Explanation:** The page can't be crawled, so nothing else matters yet. Fix `robots.txt` (often a `Disallow: /` copied from staging), deploy, use **Test live URL** and **Request indexing**. `noindex` would keep it out of results, resubmitting doesn't override robots.txt, and markup can't be read on an uncrawlable page.
**Hint:** Unlock the door first.

### Q5. Your thank-you page appears in Google results, and people land there without signing up. What's the best fix? *(O2 · scenario)*
- a) Block it in robots.txt so that Google can never fetch that page again
- b) Delete the thank-you page and show no confirmation after sign-up at all
- c) Add `noindex` to it, keep it crawlable, and remove it from the sitemap
- d) Add a canonical tag on it that points to Google's own home page instead

**Answer:** c
**Explanation:** `noindex` keeps it out of results, but only if Google can fetch the page and see the tag; also don't list it in the sitemap. Blocking in robots.txt hides the `noindex`; deleting it hurts the sign-up experience; a canonical to another site is wrong.
**Hint:** Google has to see the tag to obey it.

### Q6. Spot the error. Google Search Console says "Duplicate, Google chose different canonical than user" for your home page. Which line causes it? *(O2 · spot-the-error)*
```html
<!-- Site is served at https://nilacoffee.in/ ; http:// and www redirect there -->  <!-- line 1 -->
<link rel="canonical" href="http://www.nilacoffee.in/">                            <!-- line 2 -->
<meta name="robots" content="index, follow">                                       <!-- line 3 -->
<script type="application/ld+json">{ "@type": "Organization", "url": "https://nilacoffee.in/" }</script> <!-- line 4 -->
```
- a) Line 3: `index, follow` stops Google from choosing any canonical at all
- b) Line 4: JSON-LD `url` overrides the canonical tag and must be removed
- c) Line 1: redirects to `https://` always confuse Google's canonical choice
- d) Line 2: it names the `http://www` URL, which redirects; use the real one

**Answer:** d
**Explanation:** The canonical points to a URL that redirects elsewhere, so it disagrees with the redirects and the sitemap; Google picks its own canonical. Make it `https://nilacoffee.in/`. `index, follow` is the default, the JSON-LD `url` agrees with the real address, and consistent redirects help.
**Hint:** Which address does the site actually end up on?

### Q7. *(review: m04-l04)* To verify a **Domain** property in Search Console, Google gives you a value to add. Where does it go? *(O2 of M04.L04 · recall)*
- a) In a DNS TXT record for your domain, at your DNS provider or registrar
- b) In the page's `<title>` tag, so that Google can read it on every visit
- c) In `robots.txt` as a `Verify:` line, next to the `Sitemap:` line there
- d) In the GA4 property settings, which Search Console then reads directly

**Answer:** a
**Explanation:** A Domain property is verified with a DNS TXT record (Lesson 4.4 taught DNS records), which covers all protocols and subdomains. URL-prefix properties can use an HTML file or meta tag instead. Titles, robots.txt and GA4 aren't used for Domain verification.
**Hint:** Proving you control the domain, not just one page.
