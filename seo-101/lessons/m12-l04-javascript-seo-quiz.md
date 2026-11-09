# M12.L04 Quiz — JavaScript SEO: What Google Renders

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Search Central (JavaScript SEO basics, lazy loading, crawlable links, dynamic rendering), Search Console Help (URL Inspection) and web.dev (Rendering on the Web).

### Q1. Which kind of link can Google generally crawl? *(O2 · recall)*
- a) A `<span>` with an onclick handler and a URL
- b) An `<a>` element with an `href` attribute
- c) A `<div>` styled to look like a button
- d) An `<a>` with only a `routerLink` attribute

**Answer:** b
**Explanation:** "Generally, Google can only crawl your link if it's an <a> HTML element … with an href attribute." The others are "Not recommended".
**Hint:** Anchor plus address.

### Q2. What does Google do with content that loads only after a click or scroll? *(O2 · recall)*
- a) Clicks every button to load all of the content
- b) Scrolls to the bottom of every page it renders
- c) Asks the site owner to submit it separately
- d) Misses it, as Google doesn't interact with pages

**Answer:** d
**Explanation:** Lazy-loaded content should load "whenever it is visible in the viewport", because "Google Search does not interact with your page".
**Hint:** No clicks.

### Q3. How does Google describe dynamic rendering today? *(O3 · recall)*
- a) A workaround, not a long-term solution
- b) The recommended way to build new sites
- c) A form of cloaking that leads to penalties
- d) Required for all JavaScript frameworks

**Answer:** a
**Explanation:** "Dynamic rendering was a workaround and not a long-term solution". Google recommends "server-side rendering, static rendering, or hydration".
**Hint:** A stopgap.

### Q4. Nila's brew-guide phrase isn't in View Source. What's the next check? *(O1 · scenario)*
- a) Assume Google can't see it and delete the section
- b) Look in your own browser's DevTools Elements panel
- c) Check the rendered HTML in a Google testing tool
- d) Add the phrase to the meta description instead

**Answer:** c
**Explanation:** Use the Rich Results Test's or URL Inspection live test's tested page to see Google's rendered HTML. Your own browser isn't Google's renderer.
**Hint:** Google's view.

### Q5. Tomás's template has `noindex` in the source, and a script removes it on live pages. What's the risk? *(O2 · scenario)*
- a) Google may skip rendering, so the pages stay out
- b) None; Google always reads the final rendered tag
- c) The pages will rank twice, once with each version
- d) The script will slow down LCP by a few seconds

**Answer:** a
**Explanation:** "When Google encounters the noindex tag, it may skip rendering and JavaScript execution". "If you do want the page indexed, don't use a noindex tag in the original page code."
**Hint:** It may never run the script.

### Q6. An agency wants to rebuild Amara's client's simple blog as a client-side app. What should she ask for? *(O3 · scenario)*
- a) Dynamic rendering for every page from launch day
- b) URL fragments like `#/post` for each article
- c) Content loaded only after the user scrolls down
- d) Server-side or static rendering, with real URLs

**Answer:** d
**Explanation:** Google recommends server-side or static rendering; "don't use fragments to load different page content"; and Google won't scroll to load content.
**Hint:** HTML first.

### Q7. Spot the error. A developer's note says: "Our menu uses `<a onclick=\"goto('/shop')\">`. Google runs JavaScript, so it'll follow the link." What's wrong? *(O2 · spot-the-error)*
- a) Nothing; Google follows any clickable element
- b) Without an `href`, it isn't a reliably crawlable link
- c) Menus must never contain links to the shop page
- d) The `onclick` must be written in capital letters

**Answer:** b
**Explanation:** `<a onclick="goto(…)">` is listed as "Not recommended (but Google may still attempt to parse this)". Add `href="/shop/"`.
**Hint:** Where's the href?

### Q8. Spot the error. *(review: m12-l03)* A theme setting says: "Hide the ingredients table on mobile for a cleaner look; it's still on desktop for Google." What's wrong?
- a) Nothing; Google indexes the desktop version first
- b) Tables are never indexed on any version of a page
- c) Google indexes the mobile version, so it may miss it
- d) Hidden content is only a problem on HTTP pages

**Answer:** c
**Explanation:** "Google uses the mobile version of a site's content … for indexing and ranking." Show it on phones (an accordion is fine).
**Hint:** Which door does Google use?
