# M01.L08 Quiz — Practice: Set Up Google Search Console + GA4 on a Test Site

> 8 questions · 3 recall, 4 scenario, 1 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Each question is tagged with the objective it tests (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-04 against Search Console Help (add a property, verify ownership, Sitemaps report) and Google Analytics Help (set-up, Realtime, connect Search Console).

### Q1. What does a Search Console **Domain property** cover? *(O1 · recall)*
- a) Only the exact prefix you type, such as `https://example.com/blog/`
- b) Only the homepage and any pages listed in your submitted sitemap
- c) Only the `www` version of the site, on the secure `https` protocol
- d) All subdomains, protocols and subpaths of the domain you entered

**Answer:** d
**Explanation:** Google says a Domain property "aggregates data for all subdomains, protocols, and subpaths of the property." Option a describes a URL-prefix property.
**Hint:** Think about why it's called "Domain".

### Q2. How do you verify a Domain property on your own domain? *(O1 · recall)*
- a) Upload an HTML file to the site
- b) Add a DNS record for the domain
- c) Paste the GA4 tag into your pages
- d) Add an HTML tag to the homepage

**Answer:** b
**Explanation:** Domain name provider verification is "the only way to verify a Domain property". The HTML file, HTML tag and Analytics methods are for URL-prefix properties. Blogger and Google Sites addresses are the exception, as they're Google's own products.
**Hint:** It has to prove you control the whole domain, not one page.

### Q3. What does a GA4 web stream's Measurement ID normally start with? *(O2 · recall)*
- a) `G-`
- b) `UA-`
- c) `GTM-`
- d) `ca-pub-`

**Answer:** a
**Explanation:** The Measurement ID usually starts with `G-`. `UA-` belonged to the old Universal Analytics, `GTM-` is a Google Tag Manager container, and `ca-pub-` is used by AdSense.
**Hint:** Find it in Admin → Data streams.

### Q4. Kavya has just added Site Kit and visited her site, but Realtime shows 0 users. What should she do first? *(O2 · scenario)*
- a) Add the tag by hand too, so that one of the two installs works
- b) Delete the GA4 property and create a new one with a new stream
- c) Wait up to 30 minutes, visit again with no blocker, then re-check
- d) Assume GA4 is broken and rely on Search Console for all her data

**Answer:** c
**Explanation:** Google says "Data collection may take up to 30 minutes to begin", and ad blockers can stop the tag. Adding a second tag would double her numbers later.
**Hint:** A new tag needs a little time.

### Q5. Tomás's domain already has a TXT record used for email. Search Console gives him a new TXT value. What should he do? *(O1 · scenario)*
- a) Replace the old value, since a domain can only have one TXT value
- b) Add the new value as well, and leave the existing record in place
- c) Delete both, because Search Console will create the record for him
- d) Skip DNS and enter the value in his website's homepage text instead

**Answer:** b
**Explanation:** A domain can have several TXT values. Replacing the old one could break the email set-up it supports, and the new one must stay in place for him to stay verified.
**Hint:** Each TXT value can be doing a different job.

### Q6. Amara linked Search Console to GA4, but she can't find the Search Console reports in the left menu. What's the likely cause? *(O3 · scenario)*
- a) The link only works on the paid Google Analytics 360 properties
- b) Search Console reports stay inside Search Console and never show
- c) Her site's sitemap has to be deleted and submitted a second time
- d) The collection stays unpublished until she publishes it in Library

**Answer:** d
**Explanation:** Google says "The Search Console collection of reports is unpublished by default." Publish it from **Library**. Even then, data can take time to arrive.
**Hint:** Some GA4 reports exist but aren't shown yet.

### Q7. A learner writes this plan. Which step contains the mistake? *(O1, O2 · spot-the-error)*
- a) "Once verified, delete the TXT record to keep my DNS tidy."
- b) "Check View Source for an existing tag before adding GA4."
- c) "Confirm my own visit in Realtime before moving to links."
- d) "Add a line about Analytics to the site's privacy policy."

**Answer:** a
**Explanation:** Google says "To stay verified, don't remove the DNS record from your provider, even after verification succeeds." If verification can't be confirmed, your permissions can expire after a grace period.
**Hint:** Does Google check ownership only once?

### Q8. A client's site is missing from Google, and View Source shows a `noindex` robots tag on its pages. At which stage is it being stopped? *(review: m01-l04 · scenario)*
- a) Discovery
- b) Rendering
- c) Indexing
- d) Serving

**Answer:** c
**Explanation:** `noindex` tells search engines not to keep the page in their index, so it can't be shown in results. In WordPress, ticking **Discourage search engines from indexing this site** adds this rule.
**Hint:** The clue is in the word itself.
