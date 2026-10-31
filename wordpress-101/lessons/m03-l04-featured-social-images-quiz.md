# M03.L04 Quiz — Featured images and social share images (Open Graph)

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error · includes 1 spaced-review question from M03.L03.
> Core behaviour checked against WordPress 7.0 and Twenty Twenty-Five; sizes from Meta's sharing documentation on 2026-10-31.

### Q1. What decides which image, title and description appear when someone shares your post link on LinkedIn or WhatsApp?
- a) The first image the platform finds in the post's text
- b) Your WordPress site icon, set in Settings → General
- c) Open Graph tags (such as `og:image`) in the page's head
- d) The image's file name and its Media Library caption

**Answer:** c
**Explanation:** Platforms read Open Graph meta tags to build the preview. Without them, they guess, often picking the logo or nothing. WordPress core doesn't add OG tags; an SEO plugin does (M05).
**Hint:** It's hidden in the page's `<head>`.

### Q2. What size does Meta recommend for link share images?
- a) 150 × 150 px, like the WordPress thumbnail
- b) At least 1200 × 630 px (about 1.91:1)
- c) Exactly 1080 × 1920 px, portrait like a Story
- d) Any size, since platforms resize everything without cropping

**Answer:** b
**Explanation:** Meta recommends at least 1200 × 630 for the best display on high-resolution screens, keeping close to 1.91:1 to avoid cropping, and files under 8 MB. Images below 600 × 315 get a small thumbnail instead of a large card.
**Hint:** It's a wide landscape shape.

### Q3. Does WordPress 7.0 add Open Graph tags to your posts by default?
- a) Yes, using the featured image, title and excerpt
- b) Only for posts in the Uncategorized category
- c) Only when the site uses a block theme
- d) No; an SEO plugin (or similar) adds them

**Answer:** d
**Explanation:** Core WordPress outputs no `og:` tags. SEO plugins such as Yoast SEO, Rank Math and AIOSEO add them, usually using the featured image unless you choose a custom social image.
**Hint:** What will you install in M05?

### Q4. Lucía changes the share image on a post, but Facebook still shows the old image when she pastes the link. What should she do?
- a) Paste the URL into Facebook's Sharing Debugger and click **Scrape Again**
- b) Delete the post and republish it with a new URL
- c) Rename the image file in the Media Library
- d) Wait 24 hours, since Facebook refreshes every preview each night

**Answer:** a
**Explanation:** Platforms cache the preview the first time they read a URL. The Sharing Debugger shows what Facebook sees and forces a fresh read. Republishing at a new URL would break existing links, and WordPress can't rename files after upload.
**Hint:** There's a tool that makes the platform look again.

### Q5. Kwame's featured images show the subject's head cut off on his blog page. His theme is Twenty Twenty-Five and his photos are portrait (tall). What's the most likely cause?
- a) His images are too small, so WordPress cropped them
- b) The theme displays featured images at a fixed 3:2 landscape shape
- c) His SEO plugin crops the featured image to 1200 × 630
- d) Portrait photos can't be used as featured images at all

**Answer:** b
**Explanation:** Twenty Twenty-Five's templates set the Post Featured Image block to a 3:2 aspect ratio, so tall photos lose their top and bottom. Use landscape photos with the subject in the middle, or change the block's aspect ratio in the template.
**Hint:** Check the shape the theme forces.

### Q6. Spot the error: Nia's social image checklist says:
> 1. Canvas 1200 × 630 px.
> 2. Title in large text, inside a 10% safe margin.
> 3. Export as AVIF so the file is as small as possible.
> 4. Test the preview in a sharing debugger on a public URL.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Some apps and email tools can't read AVIF (or WebP). Social images should be JPEG or PNG, compressed to a reasonable size. AVIF is great for images on your own pages (M03.L02), not for previews on other platforms.
**Hint:** Who has to read this image?

### Q7. (review: m03-l03) In a post list, your featured image is a link to the post. What alt text is right for it?
- a) A detailed description of the photo's colours and composition
- b) Empty alt, because all featured images are decorative
- c) Text that names the destination, such as the post's title
- d) Your main keyword, repeated so search engines notice it

**Answer:** c
**Explanation:** A linked image is functional, so its alt should say where it goes. WordPress's Post Featured Image block does exactly this: when the image is a link, it uses the post title as alt. Empty alt would leave a link with no name.
**Hint:** What happens when someone clicks it?
