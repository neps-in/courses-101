# M03.L02 Quiz — Compress, convert and right-size: WebP, AVIF and image plugins

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error · includes 1 spaced-review question from M03.L01.
> Core behaviour checked against WordPress 7.0 source and Modern Image Formats 2.7.1 on 2026-10-31.

### Q1. Which of these does core WordPress 7.0 do on its own, with no plugin?
- a) Accept WebP and AVIF uploads and make its usual size copies in that format
- b) Convert every JPEG upload into WebP copies automatically
- c) Re-compress your original upload to quality 82 to save storage
- d) Replace PNG screenshots with lossy JPEGs to shrink them

**Answer:** a
**Explanation:** WordPress supports WebP uploads (since 5.8) and AVIF (since 6.5), if the server's image library does. It doesn't convert JPEGs to modern formats; that needs a plugin such as Modern Image Formats or your host. Quality 82 applies to the copies it makes, not to your original.
**Hint:** Supporting a format isn't the same as converting to it.

### Q2. What's the difference between lossy and lossless compression?
- a) Lossy works only on JPEGs; lossless works only on PNGs
- b) Lossy keeps every pixel but strips metadata; lossless also removes colour data
- c) Lossy discards some detail to shrink the file; lossless shrinks it without changing any pixels
- d) There's no real difference; the two names come from different tools

**Answer:** c
**Explanation:** Lossy compression (JPEG, lossy WebP/AVIF) throws away detail the eye is unlikely to notice. Lossless (PNG, lossless WebP/AVIF) keeps the image identical. WebP and AVIF can do both, so the formats aren't tied to one type.
**Hint:** The clue is in "loss".

### Q3. Which format is the best fit for a screenshot of a settings screen with small text?
- a) JPEG at quality 50
- b) PNG or lossless WebP
- c) AVIF at quality 30
- d) Whatever format the camera app saved it in

**Answer:** b
**Explanation:** Sharp text and flat colours get smudged by low-quality lossy compression. PNG or lossless WebP keeps text crisp. Lossy formats suit photos.
**Hint:** Think about what happens to sharp edges.

### Q4. Amara installs Modern Image Formats on a site with 300 existing posts. A week later she sees that her old images are still JPEGs. Why?
- a) The plugin is broken and should be replaced with a second optimisation plugin
- b) Browsers convert the old JPEGs to WebP themselves, so the files never change
- c) WordPress blocks conversion of any image older than 30 days
- d) The plugin only converts new uploads; old images change only if they're regenerated

**Answer:** d
**Explanation:** The plugin's documentation says modern images are generated for new uploads only, unless you regenerate existing images (e.g. with `wp media regenerate` or a regeneration plugin, after a backup). Adding a second optimiser is a classic mistake.
**Hint:** When does a conversion plugin do its work?

### Q5. Diego exports a 1600-pixel photo from Squoosh as WebP at quality 40. The sky now shows visible bands of colour. What should he do?
- a) Open the banded WebP and save it again at quality 90 to restore the detail
- b) Re-export from the original photo at a higher quality (e.g. 70–80) and compare at 100% zoom
- c) Save the banded WebP as a PNG so the lost detail comes back
- d) Upload it anyway, because WordPress fixes banding when it makes copies

**Answer:** b
**Explanation:** Lost detail can't be recovered by re-saving or converting; each lossy save makes things worse. Always start again from the original and raise the quality until the banding disappears.
**Hint:** Can you un-throw-away detail?

### Q6. Spot the error: Tomás's image routine says:
> 1. Resize photos to 1600 px wide before upload.
> 2. Compress in Squoosh and check at 100% zoom.
> 3. Install both Modern Image Formats and EWWW Image Optimizer so every image gets optimised twice.
> 4. Keep screenshots as PNG.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Never run two image-optimisation plugins at once. They work on the same files, duplicate the work, and can break images. Choose one plugin, or your host's optimisation.
**Hint:** How many tools should do one job?

### Q7. (review: m03-l01) You upload a 1200 × 900 photo and place it full-width on a 2560-pixel-wide screen. Why does it look blurry?
- a) WordPress always crops full-width images to a 150 × 150 square
- b) The `srcset` attribute forces browsers to download the smallest copy
- c) Images under 2560 px are deleted after upload and replaced with thumbnails
- d) WordPress never enlarges images, so the largest copy available is only 1200 px wide

**Answer:** d
**Explanation:** WordPress only makes copies smaller than your original, so a 1200-pixel upload can't fill a 2560-pixel space sharply. For full-width spots, upload about 2000–2560 px.
**Hint:** Does WordPress ever make bigger copies?
