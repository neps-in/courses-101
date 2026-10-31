# M03.L01 Quiz — The Media Library and the image sizes WordPress creates

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error · includes 1 spaced-review question from M02.L04.
> Defaults checked against WordPress 7.0 core source on 2026-10-31.

### Q1. You upload a 4000 × 3000 pixel photo. What does WordPress use as its "full" size?
- a) The 4000 × 3000 original, unchanged
- b) A `-scaled` copy with a maximum of 2560 pixels, while the original is kept on the server
- c) A 1024 × 768 copy, and the original is deleted to save space
- d) A WebP version that replaces the JPEG

**Answer:** b
**Explanation:** Since WordPress 5.3, images over 2560 pixels get a `-scaled` copy used as "full". The original stays on the server (shown as **Original image:** in Attachment details). WordPress doesn't delete it or convert to WebP by default.
**Hint:** Look for a file name ending in `-scaled`.

### Q2. Which default image size is cropped to an exact square?
- a) Thumbnail (150 × 150)
- b) Medium (300 × 300)
- c) Large (1024 × 1024)
- d) 2048 × 2048

**Answer:** a
**Explanation:** Only the thumbnail has **Crop thumbnail to exact dimensions** ticked by default. Medium, large and the other sizes are resized proportionally, so a landscape photo's "300 × 300" medium is really 300 × 225.
**Hint:** It's the one with a crop checkbox in Settings → Media.

### Q3. What does the `srcset` attribute on an image in your post do?
- a) Lists the available copies and their widths so the browser can download the smallest one that looks sharp
- b) Tells search engines which copy of the image to index
- c) Stores the image's alt text for screen readers
- d) Forces every visitor to download the 2048-pixel copy

**Answer:** a
**Explanation:** `srcset` lists the copies (e.g. 300w, 768w, 1024w…), and `sizes` says how wide the image will display. The browser combines them with the screen size to pick a file. Alt text is the separate `alt` attribute (M03.L03).
**Hint:** It's about choosing between files.

### Q4. Sam's theme has a 645 px content column. He'll publish step-by-step photos that sit inside the text (normal width, not wide). Which upload width makes most sense?
- a) 600 px, matching the column so nothing is wasted
- b) About 1300–1600 px, roughly 2× the column so photos stay sharp on high-density screens
- c) The camera's full 6000 px, so WordPress has the most to work with
- d) 150 px, because WordPress enlarges images to fit

**Answer:** b
**Explanation:** High-density (Retina) screens need about twice the display width to look sharp, so ~1300–1600 px suits a 645 px column. At 600 px the photos look soft on those screens; 6000 px wastes storage and backup space because the original is kept; and WordPress never enlarges images.
**Hint:** Think "twice the column", not "exactly the column".

### Q5. Priya deletes an old photo from **Media → Library** to tidy up. A week later a reader reports a broken image in a 2023 post. What happened, and what's the fix?
- a) WordPress moved the photo to the trash, so she can restore it from **Media → Trash**
- b) Media deletes are permanent by default; she must re-upload the photo and use **Replace** in that post's Image block
- c) The post's revision history still holds the image file, so she can restore the old revision
- d) WordPress kept the `-scaled` copy, so the post will repair itself within a day

**Answer:** b
**Explanation:** Media skips the trash by default, so **Delete permanently** removes the file and all its sizes. Revisions store text, not image files. Before deleting, check **Uploaded to** in list view and search your posts.
**Hint:** Is there a trash for media?

### Q6. Spot the error: Lena's image routine says:
> 1. Resize photos to ~2000 px wide before uploading full-width images.
> 2. After changing **Large size** to 1200 in Settings → Media, all my older images automatically get the new size.
> 3. Use **Replace** in the Image block to swap a photo in one post.
> 4. Check **Uploaded to** in list view before deleting any media.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** b
**Explanation:** Size settings only apply to images uploaded after the change. Older images keep their existing copies until they're regenerated (usually with a vetted plugin).
**Hint:** Do settings change files that already exist?

### Q7. (review: m02-l04) You restore an earlier revision of a post, then realise the newer version was better. What can you do?
- a) Nothing: restoring permanently deletes the newer revisions
- b) Open **Revisions** again and restore the newer version; restoring creates a new revision, so it can be undone
- c) Restore last night's full-site backup
- d) Switch the post to Private to bring back the newer version

**Answer:** b
**Explanation:** Restoring a revision saves the post again, which creates a new revision; the newer versions stay in the history. A full-site backup would undo every other change on the site too.
**Hint:** Restoring is itself a save.
