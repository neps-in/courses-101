# M02.L10 Quiz — Responsive Design Basics: Viewport Meta Tag & Mobile-Friendly Layouts

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-06 against Google Search Central (mobile-first indexing), MDN (viewport meta tag, media queries), W3C (reflow) and web.dev (responsive basics). Q7's retired tool is reported by third parties. Q8's contrast figure was checked for Lesson 2.9.

### Q1. What happens on a phone when a page has no viewport tag? *(O1 · recall)*
- a) The browser refuses to load any of the page's stylesheets
- b) The browser shows a shrunken version of the desktop layout
- c) The page shows a warning message in place of its content
- d) The page loads, but with all of its images hidden from view

**Answer:** b
**Explanation:** Without the tag, phone browsers can use a wider "virtual viewport", such as 980px, and then shrink the page to fit. That's why the text looks tiny.
**Hint:** What did you see in step 2 of Part A?

### Q2. What does `@media (min-width: 60rem) { … }` do? *(O2 · recall)*
- a) It sets the smallest width that a page is allowed to shrink to
- b) It loads a different HTML file for screens wider than 60rem
- c) It applies the CSS inside on screens at least 60rem wide
- d) It hides all content on the page below a width of 60rem

**Answer:** c
**Explanation:** A media query applies CSS only when its condition is true. The HTML stays the same, and narrower screens simply don't get these extra rules.
**Hint:** What does "min" tell you about the condition?

### Q3. Which version of a page does Google mainly use for indexing and ranking? *(O3 · recall)*
- a) The desktop version, with the mobile version used as a backup
- b) Whichever version of the page had the most visits last month
- c) Both versions, which are ranked as two separate pages by Google
- d) The mobile version, crawled with Google's smartphone agent

**Answer:** d
**Explanation:** Google says it "uses the mobile version of a site's content, crawled with the smartphone agent, for indexing and ranking". This is mobile-first indexing.
**Hint:** What does "mobile-first" put first?

### Q4. Kavya's class photo is 1200px wide, and it runs off the screen on phones. It has `width` and `height` attributes. What should she do? *(O2 · scenario)*
- a) Add `img { max-width: 100%; height: auto; }` to her stylesheet
- b) Delete the photo, because large images aren't allowed on phones
- c) Set `user-scalable=no`, so that the photo can't be zoomed too far
- d) Add a media query that hides the photo on any screen under 600px

**Answer:** a
**Explanation:** `max-width: 100%` stops the image growing beyond its container, and `height: auto` keeps its shape. She can keep the attributes she added.
**Hint:** Which option makes it fit without losing anything?

### Q5. Tomás's theme hides the "Delivery" section on phones to save space. What's the best recommendation? *(O3 · scenario)*
- a) Show it on phones, in an accordion if space is really a concern
- b) Move it to a new page, and link to that page from the phone menu
- c) Add the same text to the page's meta description for phones only
- d) Leave it, because Google reads the desktop version of the page

**Answer:** a
**Explanation:** Phone visitors can't read a hidden section, and Google uses the mobile version for indexing. Its advice is: "Instead of removing content, consider moving content into accordions or tabs to save space."
**Hint:** What do phone visitors lose?

### Q6. Amara's Console counts match on phone and desktop, except the word count: 900 and 620. What should she do next? *(O3 · scenario)*
- a) Report that 280 words have been removed from the phone version
- b) Scroll through at phone width to see if it's closed or gone
- c) Ignore it, as the headings and the links are matching in both
- d) Add 280 extra words to the phone version to even up the counts

**Answer:** b
**Explanation:** `innerText` skips closed accordions and hidden menus, so a lower count is a clue, not proof. She needs to look at the page before she reports anything.
**Hint:** What does a lower word count prove on its own?

### Q7. Spot the error: "Run the page through Google's Mobile-Friendly Test, and if it passes we're done." *(O3 · spot the error)*
- a) The test still works, but it only covers pages that have video
- b) Pages need to pass the test twice before Google will index them
- c) The test was reported retired in 2023, so use device mode instead
- d) The test only runs on the desktop version, not the mobile version

**Answer:** c
**Explanation:** The Mobile-Friendly Test was reported as retired in December 2023. Test in device mode and on a real phone, and compare the content with desktop. Google's page experience page points to Lighthouse for more checks.
**Hint:** Is that tool still around?

### Q8. Spot the error: "The phone layout's footer text is `#999999` on white. It's small, but it's only the footer, so contrast rules don't apply." *(spot the error · review: m02-l09)*
- a) Footers need a 7:1 ratio, as they hold a site's legal information
- b) Contrast only matters on phones, so the footer needs a media query
- c) It's fine, because footers are classed as purely decorative text
- d) Footer text is still text, and 2.85:1 is below the 4.5:1 minimum

**Answer:** d
**Explanation:** As you saw in Lesson 2.9, normal text needs at least 4.5:1, wherever it sits. Only logos, decoration and inactive controls are exempt.
**Hint:** Is footer text decoration?
