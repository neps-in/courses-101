# M13.L03 Quiz — Chrome DevTools and Extensions for SEO

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Chrome for Developers docs, the Web Vitals extension post (2025-01-13), Chrome Web Store Help and program policies.

### Q1. What's the difference between View Source and the Elements panel? *(O1 · recall)*
- a) They always show exactly the same code
- b) Elements shows only the page's CSS styles
- c) Source is the server's HTML; Elements is the live DOM
- d) View Source runs JavaScript, but Elements never does

**Answer:** c
**Explanation:** "HTML represents initial page content and the DOM represents active, current page content." When JavaScript edits nodes, "the DOM becomes different than the HTML".
**Hint:** Recipe vs finished dish.

### Q2. Why tick Preserve log in the Network panel? *(O2 · recall)*
- a) To keep requests across loads and see each redirect hop
- b) To save the whole page as a PDF file for your records
- c) To stop the page from using any cookies
- d) To make the page load faster for visitors

**Answer:** a
**Explanation:** "To save requests across page loads, check the Preserve log checkbox". Without it, a redirect chain can look like one jump.
**Hint:** Keep the history.

### Q3. What happened to the Web Vitals Chrome extension? *(O3 · recall)*
- a) It became a paid extension in 2025
- b) It now only works in the Firefox browser
- c) It was renamed the Lighthouse extension
- d) It merged into DevTools' Performance panel

**Answer:** d
**Explanation:** With Chrome 132, it "has officially merged with the Performance panel in DevTools", and Google planned to revoke its CrUX API key.
**Hint:** Chrome 132.

### Q4. A crawler says Nila's PDF brew guide is `noindex`, but a PDF has no meta tags. Where should she look? *(O2 · scenario)*
- a) In the PDF's document title field
- b) The response headers, for an X-Robots-Tag
- c) The site's XML sitemap file
- d) The Google Business Profile settings

**Answer:** b
**Explanation:** Rules can be sent as an `X-Robots-Tag` HTTP header, which never appears in the HTML. Read Network → Headers.
**Hint:** Not in the page.

### Q5. Amara removed `noindex`, but tools still report it. The headers show `age: 86400`. What's likely? *(O2 · scenario)*
- a) Google has penalised the page for exactly one day
- b) The page is 86,400 words too long
- c) A cached copy about a day old is being served
- d) The page has 86,400 internal links

**Answer:** c
**Explanation:** `age` is in seconds; 86,400 is one day. Purge the site and CDN cache, then recheck.
**Hint:** Seconds in a day.

### Q6. Kavya's class schedule is in Elements but not in View Source. What does that tell you? *(O1 · scenario)*
- a) JavaScript adds it; check Google's rendered HTML
- b) The schedule is hidden from all visitors
- c) View Source is broken in Kavya's browser
- d) The schedule is sent in an HTTP response header

**Answer:** a
**Explanation:** Present in the live DOM but not the server HTML means JavaScript added it. Check rendered HTML in URL Inspection or the Rich Results Test (Lesson 12.4).
**Hint:** Added after loading.

### Q7. Spot the error. A colleague writes: "I set DevTools' user agent to Googlebot, so I've seen exactly what Google sees." What's wrong? *(O3 · spot-the-error)*
- a) Nothing; the override makes Chrome act as Googlebot
- b) DevTools has no user agent setting at all
- c) Googlebot can only be chosen on mobile
- d) It only changes what you're served; use URL Inspection

**Answer:** d
**Explanation:** Overriding the user agent "does not change how Chrome browser functions internally, it changes content that Chrome is served." Google's view comes from URL Inspection.
**Hint:** A name isn't an identity.

### Q8. Spot the error. *(review: m13-l02)* A report says: "Ahrefs health score is 94, so there's nothing urgent." What's wrong?
- a) Nothing; a score of 94 means there are no urgent issues
- b) A score can hide a key-page noindex; read the issues
- c) Scores are only valid above 95
- d) Health scores come from Google

**Answer:** b
**Explanation:** Scores are each tool's own weighting; Ahrefs says "issues are not universal". Bucket issues by impact.
**Hint:** Read the list.
