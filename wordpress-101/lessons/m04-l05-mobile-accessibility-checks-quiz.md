# M04.L05 Quiz — Mobile-first and accessibility checks

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced-review question from M03.L03.
> WCAG 2.2 criteria from W3C; failure data from The WebAIM Million 2026; labels checked against WordPress 7.0 on 2026-10-31.

### Q1. According to The WebAIM Million 2026, what is the most common accessibility failure on home pages?
- a) Missing alternative text for images
- b) Missing form input labels
- c) Low-contrast text
- d) Empty buttons

**Answer:** c
**Explanation:** Low-contrast text appeared on 83.9% of the top million home pages, ahead of missing alt text (53.1%), missing form labels (51%), empty links (46.3%) and empty buttons (30.6%).
**Hint:** It's about colours.

### Q2. What does WCAG 2.2's **Target Size (Minimum)** criterion (2.5.8) ask for?
- a) Tap targets of at least 24 × 24 CSS pixels, or enough spacing
- b) Body text of at least 16 px on every screen size
- c) Buttons that are at least 44 px tall on phones only
- d) Images no wider than the screen on mobile devices

**Answer:** a
**Explanation:** 2.5.8 (new in WCAG 2.2, Level AA) asks for targets of at least 24 × 24 CSS pixels, or spacing so a 24 px circle around each target doesn't overlap another. 44 px is the stricter AAA criterion (2.5.5), not the AA minimum.
**Hint:** It's new in 2.2 and smaller than you might think.

### Q3. Which link text best meets **Link Purpose**?
- a) "Click here" after a sentence about the checklist
- b) "Download the packing checklist (PDF)"
- c) "https://example.com/files/packing-checklist-v3.pdf"
- d) A small download icon with no text or label

**Answer:** b
**Explanation:** The link text says where it goes and what you'll get. "Click here" is meaningless when screen-reader users list links out of context, raw URLs are read character by character, and an icon with no label is an empty link.
**Hint:** Read only the link words. Do they make sense alone?

### Q4. Lars set his homepage to **Page No Title** and starts it with a big Heading block he left at H2. WAVE and the editor's Outline flag a problem. What should he do?
- a) Change the heading to H1, since the page now has no other H1
- b) Change the heading to a Paragraph block with a large font size
- c) Switch the page back to the Pages template and keep the H2
- d) Ignore it; heading levels only matter for blog posts, not pages

**Answer:** a
**Explanation:** Twenty Twenty-Five normally prints the page title as the H1. With **Page No Title** there's no title, so his headline should become the page's single H1. Turning it into a paragraph removes structure screen-reader users rely on.
**Hint:** Every page needs one main heading.

### Q5. Mina tests her site with only the keyboard. She can Tab to the mobile menu button, but pressing Enter does nothing. What's the most likely cause and fix?
- a) Keyboards can't open mobile menus; that's expected behaviour
- b) Her contrast is too low; darken the menu button's colour
- c) A plugin replaced the core menu button; remove it and retest
- d) Her Skip to content link is missing; add one to the header

**Answer:** c
**Explanation:** The core Navigation block's menu button opens with Enter or Space and closes with Esc. If it doesn't, something has replaced or broken it, usually a plugin or custom code. Contrast and skip links are separate checks.
**Hint:** What does the core block do by default?

### Q6. Spot the error: Tariq's accessibility plan says:
> 1. Test Home, a post and Contact at 320 px wide and at 200% zoom.
> 2. Run WAVE on each page and fix the Errors and Contrast Errors.
> 3. Install an accessibility overlay plugin so the site becomes compliant automatically.
> 4. Do a keyboard-only walk-through and check every link has a visible focus outline.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Overlay plugins don't fix the underlying problems, and many disabled users and accessibility specialists report that they get in the way. Fix the contrast, alt text, headings and links on the site itself.
**Hint:** Is there a one-click fix for accessibility?

### Q7. (review: m03-l03) Elena's logo in the header links to her homepage. What alt text should the logo image have?
- a) An empty alt, because logos are decorative
- b) "Logo.png", the original file name
- c) A description of the logo's colours and shape
- d) The link's destination, such as "Elena Cooks home"

**Answer:** d
**Explanation:** A linked image is a functional image: its alt text should say where the link goes. Empty alt here creates an **empty link**, one of the most common failures. File names and visual descriptions don't tell screen-reader users what the link does.
**Hint:** What does the image *do*?
