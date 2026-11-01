# M01.L05 Quiz — Your First Look at DevTools

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 (Chrome for Developers DevTools docs, MDN).

### Q1. You change a headline in the DevTools **Elements** panel. Who sees the new headline? *(O1 · recall)*
- a) Every visitor, as soon as you press Enter
- b) Only you, in this tab, until you reload
- c) Everyone, after the site's cache refreshes
- d) Only people using the same browser as you

**Answer:** b
**Explanation:** DevTools edits change only your browser's live copy of the page (the DOM). The server's files don't change, so nobody else sees it, and a reload rebuilds the page from the server's original HTML.
**Hint:** Tracing paper over *your* copy of the brochure.

### Q2. What's the difference between **View Source** and the **Elements** panel? *(O2 · recall)*
- a) View Source shows CSS only; Elements shows HTML only
- b) They always show exactly the same code, just in different colours
- c) View Source is live; Elements shows the file saved on the server
- d) View Source is the HTML as sent; Elements is the live DOM now

**Answer:** d
**Explanation:** View Source shows the original HTML the server sent, which never changes after it arrives. Elements shows the DOM, the live page, including changes made by JavaScript and by your own edits. That's why your edited headline appears in Elements but not in View Source.
**Hint:** In Part C, where could you find your *new* headline?

### Q3. Luis wants to know how much data a first-time visitor downloads on his landing page. What's the right way to measure it? *(O3 · scenario)*
- a) Open Network, tick **Disable cache**, reload, and read **transferred**
- b) Open View Source and count the number of lines of HTML
- c) Reload the page twice with the cache on and take the second figure
- d) Read the **resources** figure with the cache on

**Answer:** a
**Explanation:** First-time visitors have nothing cached, so you disable the cache, reload with the Network panel open, and use the *transferred* figure, which is what actually came over the network. A second, cached reload looks far smaller than reality. *Resources* is the uncompressed size, and counting HTML lines ignores images, scripts and fonts.
**Hint:** A first-time visitor has an empty cache.

### Q4. Priyanka's client wants to see three button colours on the live landing page before approving a change. What's the fastest suitable approach? *(O1 · scenario)*
- a) Ask the developer to publish each colour to the live site in turn
- b) Edit the site's CSS file on the server three times
- c) Change the colour in DevTools **Styles**, screenshot each, label them mock-ups
- d) Use the Network panel to swap the button image

**Answer:** c
**Explanation:** DevTools lets you try colours instantly on the real page without touching the live site, which is perfect for a quick visual comparison. Labelling the screenshots as mock-ups keeps them honest. Publishing or editing the server's files is slower and risks the live page, and the Network panel shows requests; it doesn't swap anything.
**Hint:** Safe, instant and nothing is saved.

### Q5. You sort the Network panel by **Size** on a brand homepage. The top row is `hero.png`, type **png**, 5.9 MB, out of 7.2 MB transferred in total. What should you tell the developer first? *(O3 · scenario)*
- a) The hero image alone is most of the page's weight and is worth optimising first
- b) The page has too many requests and should be split into two pages
- c) PNG files are always blocked on mobile, so the image is invisible there
- d) Nothing, because 7.2 MB is a normal size for any homepage

**Answer:** a
**Explanation:** One image making up more than 80% of the transfer is the single biggest win. Compressing it or using a modern format (Module 7) could cut the page's weight dramatically. The data says nothing about the request count, PNGs work on mobile, and 7.2 MB is heavy for a landing page.
**Hint:** 5.9 out of 7.2: what share is that?

### Q6. Spot the error. A marketer writes in a project update:
> "I fixed the typo in our pricing headline using Chrome DevTools this morning: I double-clicked the text in the Elements panel and corrected it. It's done, so we can launch the ad campaign now." *(O1 · spot-the-error)*

What's wrong?
- a) The Elements panel can only edit styles, not text
- b) DevTools edits must be saved with Ctrl+S to go live
- c) Typos can only be fixed from the Console panel
- d) The fix exists only in their browser; the real site still has the typo

**Answer:** d
**Explanation:** DevTools changes the DOM in that browser tab only. The server still sends the original HTML with the typo to everyone else, including the ad campaign's visitors. The real fix must go into the site's files or CMS. Elements can edit text, and saving in DevTools doesn't publish anything to the site.
**Hint:** Reload the page. What does it say now?

### Q7. *(review: m01-l02)* In `https://nilacoffee.example/pricing?utm_source=ads#faq`, which part is **never sent to the server**? *(O1 of M01.L02 · recall)*
- a) `/pricing`
- b) `#faq`
- c) `?utm_source=ads`
- d) `nilacoffee.example`

**Answer:** b
**Explanation:** The fragment (everything after `#`) stays in the browser and is used to jump to a spot on the page. The domain, path and query string are all part of the request the server receives. That's why UTMs must go before the `#`.
**Hint:** Which part starts with `#`?
