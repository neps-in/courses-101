# M04.L04 Quiz — Image SEO: File Names, Alt Text, Size and Format

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Search Central (image SEO, lazy loading, image sitemaps), web.dev and WordPress.org.

### Q1. What does Google call "the most important attribute" for giving it information about an image? *(O1 · recall)*
- a) The `title` attribute, which shows a tooltip when people hover
- b) The image's file name, as long as it contains the main keyword
- c) The `alt` attribute, which gives a text replacement for the image
- d) The `loading` attribute, which tells the browser when to load it

**Answer:** c
**Explanation:** Google says "The most important attribute when it comes to providing more metadata for an image is the alt text". File names give only "very light clues".
**Hint:** Which attribute did you meet in Lesson 2.5 for screen readers?

### Q2. Which images should not be lazy-loaded? *(O3 · recall)*
- a) Images that are visible as soon as the page opens, without scrolling
- b) Images further down the page that people reach only after scrolling
- c) Images saved in the WebP format, because they load quickly anyway
- d) Images inside a blog post, since Google scrolls to find them all

**Answer:** a
**Explanation:** Google says "Don't add lazy-loading to content that is likely to be immediately visible when a user opens a page." Google doesn't scroll: "Google Search does not interact with your page."
**Hint:** What does a visitor see first?

### Q3. Which formats does Google Search support in `<img>`? *(O3 · recall)*
- a) Only JPEG and PNG, so newer formats won't appear in Google Images
- b) JPEG, PNG and GIF, but WebP only if you also add an image sitemap
- c) Any format at all, as long as the file name ends in `.jpg`
- d) BMP, GIF, JPEG, PNG, WebP, SVG and AVIF

**Answer:** d
**Explanation:** Google lists "BMP, GIF, JPEG, PNG, WebP, SVG, and AVIF", and says it's "a good idea to have the extension of your filename match with the file type".
**Hint:** The list includes the newer formats.

### Q4. DevTools shows a product photo is rendered at 400 × 400 pixels, but its intrinsic size is 4,000 × 4,000 and it weighs 3 MB. What should Tomás do? *(O2 · scenario)*
- a) Nothing, because a bigger file always looks sharper on every screen
- b) Resize it to about 800 × 800 and save it in a lighter format
- c) Add `loading="lazy"` to it, which makes the file itself smaller
- d) Stretch the display size to 4,000 pixels so nothing is wasted

**Answer:** b
**Explanation:** The file is ten times wider than it's shown. About twice the shown size covers sharp screens, and WebP or AVIF makes it lighter. Lazy loading changes when it loads, not how big it is.
**Hint:** Compare intrinsic and rendered sizes.

### Q5. Nila's guide has a thin decorative line between sections. What alt text should it have? *(O1 · scenario)*
- a) "cold brew coffee guide divider", so the line adds keywords to the page
- b) "image of a line", so screen readers know exactly what is there
- c) An empty alt (`alt=""`), so screen readers skip it as decoration
- d) No `alt` attribute at all, so the code stays as short as possible

**Answer:** c
**Explanation:** Decorative images get `alt=""`, or **Mark as decorative** in WordPress. Leaving `alt` out entirely isn't the same: screen readers may read the file name instead.
**Hint:** Does the line add any information?

### Q6. The same jar photo appears on Nila's cold brew guide and on the jar's product page. How should the alt text differ? *(O1 · scenario)*
- a) Each says what the photo adds on that page: steeping, or the product
- b) It should be identical on both pages, so that Google isn't confused
- c) The product page should have no alt, because the price is next to it
- d) The guide should list every keyword from the page in the image's alt

**Answer:** a
**Explanation:** Alt text describes what the image adds in its context. In WordPress, edit it in the image block on each page, because the Media Library only sets the default.
**Hint:** Same photo, different job on each page.

### Q7. Spot the error: "We lazy-load every image, including the top photo, because Google scrolls the page to find them all." *(O3 · spot the error)*
- a) Lazy loading is banned by Google, so no image should ever use it
- b) Google doesn't scroll, and the first images shouldn't be lazy-loaded
- c) Google scrolls only on mobile, so desktop images need no lazy loading
- d) Lazy loading works only on WebP images, so it isn't doing anything here

**Answer:** b
**Explanation:** "Google Search does not interact with your page", so lazy images must load when they're in view. Lazy-loading the top photo also makes it slower for visitors.
**Hint:** There are two claims. Check both.

### Q8. Spot the error: "Our French press guide says 'French press' 30 times, which is fine, because keyword stuffing only counts in the title tag." *(spot the error · review: m04-l03)*
- a) Stuffing counts only in headings, so the body text is safe to repeat in
- b) 30 times is the right amount for a guide of about 1,500 words in length
- c) Stuffing applies only to lists of phone numbers, not to repeated phrases
- d) Repeating a phrase so often that it sounds unnatural is stuffing, anywhere

**Answer:** d
**Explanation:** As you saw in Lesson 4.3, Google's examples of keyword stuffing include "Repeating the same words or phrases so often that it sounds unnatural". It applies to the whole page, including alt text.
**Hint:** In Lesson 4.3, where on a page does the spam policy apply?
