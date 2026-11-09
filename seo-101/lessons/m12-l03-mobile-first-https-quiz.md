# M12.L03 Quiz — Mobile-First and HTTPS: The Secure, Mobile Baseline

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Search Central (mobile-first indexing, site moves, HTTPS blog posts), Search Console Help (HTTPS report), web.dev (mixed content) and MDN (Strict-Transport-Security).

### Q1. Which version of a site does Google use for indexing and ranking? *(O1 · recall)*
- a) The desktop version, crawled with a desktop agent
- b) Whichever version loads faster in the lab test
- c) The mobile version, crawled as a smartphone
- d) Both versions, averaged into one combined score

**Answer:** c
**Explanation:** "Google uses the mobile version of a site's content, crawled with the smartphone agent, for indexing and ranking."
**Hint:** Front door.

### Q2. What are the two types of mixed content? *(O2 · recall)*
- a) Active and passive
- b) Internal and external
- c) Mobile and desktop
- d) Cached and uncached

**Answer:** a
**Explanation:** "There are two types of mixed content: active and passive." Passive covers images, video and audio; active covers scripts, styles and iframes.
**Hint:** One can take over the page.

### Q3. What does the HSTS header tell browsers? *(O3 · recall)*
- a) To cache the page for one year without checking
- b) To show the mobile version on every device type
- c) To skip the certificate check for faster loading
- d) To use only HTTPS for this host from now on

**Answer:** d
**Explanation:** HSTS "informs browsers that the host should only be accessed using HTTPS", upgrading future HTTP attempts automatically.
**Hint:** Strict transport.

### Q4. Kavya's mobile pages show the FAQ in an accordion; desktop shows it open. What does Google's doc say? *(O1 · scenario)*
- a) Accordions hide content from Google on all devices
- b) Fine, if the content is equivalent to desktop
- c) She must build a separate mobile site instead
- d) Only tabs are allowed on mobile, not accordions

**Answer:** b
**Explanation:** "You can have a different design on mobile … (for example, moving content into accordions or tabs); just make sure that the content is equivalent to the desktop site".
**Hint:** Same content, different design.

### Q5. Nila's HTTPS product page loads bean photos from `http://img.nilacoffee.example`. What's the fix? *(O2 · scenario)*
- a) Serve the images over HTTPS or from the media library
- b) Add HSTS preload so browsers ignore the warning
- c) Switch the whole site back to HTTP to match them
- d) Nothing; passive content never causes problems

**Answer:** a
**Explanation:** It's passive mixed content. "Most browsers now block mixed content", so load every file over HTTPS.
**Hint:** Everything on HTTPS.

### Q6. A freelancer wants to add `max-age=63072000; includeSubDomains; preload` today. What should the owner check first? *(O3 · scenario)*
- a) Whether the header will raise the Lighthouse score
- b) Whether the freelancer has used HSTS on any site
- c) Whether the homepage title tag is over 60 characters
- d) Whether every subdomain works on HTTPS, and who owns it

**Answer:** d
**Explanation:** Preload requires `includeSubDomains`, so every subdomain must support HTTPS. It's hard to undo. Ask the host first.
**Hint:** All the subdomains.

### Q7. Spot the error. An audit guide says: "Step 3: run the page through Google's Mobile-Friendly Test and the Mobile Usability report." What's wrong? *(O1 · spot-the-error)*
- a) Nothing; both are Google's current mobile tools
- b) Both were removed in December 2023
- c) They only work for pages with field data
- d) They only test desktop pages, not mobile

**Answer:** b
**Explanation:** Google removed mentions of both in December 2023. Use URL Inspection (Crawled as, screenshot), the Rich Results Test or a real phone.
**Hint:** Retired tools.

### Q8. Spot the error. *(review: m12-l02)* A fix brief says: "Home LCP 3.4 s. Fix: compress all images and lazy-load the hero for speed." What's wrong?
- a) Nothing; compression and lazy loading always help
- b) LCP can't be improved by changing the images at all
- c) Never lazy-load the hero; find the slow LCP part
- d) Images should be uploaded at twice their display size

**Answer:** c
**Explanation:** "Never lazy-load your LCP image". Compression alone may just shift time to render delay; check the four LCP parts.
**Hint:** The hero loads first.
