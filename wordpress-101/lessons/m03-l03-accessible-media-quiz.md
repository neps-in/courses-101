# M03.L03 Quiz — Accessible media: alt text, captions, transcripts and file names

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error · includes 1 spaced-review question from M03.L02.
> Labels checked against WordPress 7.0; guidance from W3C WAI, WCAG 2.2 and Google Search Central on 2026-10-31.

### Q1. What's the best alt text for a photo in a sourdough recipe step showing dough that has doubled in size?
- a) "Image of dough in a bowl on a kitchen counter"
- b) "sourdough bread recipe easy sourdough best homemade bread"
- c) "Dough after the first rise, doubled in size and puffy"
- d) "IMG_4471.jpg"

**Answer:** c
**Explanation:** Good alt text explains what the image adds to this post, in one short sentence. "Image of…" is redundant (screen readers already say "image"), keyword lists are stuffing that Google warns against, and a file name tells a listener nothing.
**Hint:** Why is this photo in this step?

### Q2. What's the difference between empty alt (`alt=""`) and missing alt?
- a) None: browsers and screen readers treat both in exactly the same way
- b) Empty alt says "skip this"; missing alt may get the file name read aloud
- c) Empty alt hides the image from sighted visitors; missing alt shows it
- d) Missing alt is the recommended way to mark an image as decorative

**Answer:** b
**Explanation:** An empty alt is a deliberate signal: "this is decoration, skip it". With no alt attribute at all, some screen readers fall back to announcing the file name. In the Image block, leaving **Alternative text** empty outputs `alt=""`.
**Hint:** One is a choice, the other is an omission.

### Q3. Which does WCAG 2.2 require for a prerecorded podcast episode (audio only)?
- a) Captions burned into the audio file
- b) Alt text on the podcast's cover art only
- c) A WebVTT file attached to the Audio block
- d) A transcript (a text alternative for the audio)

**Answer:** d
**Explanation:** WCAG 1.2.1 requires a text alternative, in practice a transcript, for prerecorded audio-only content. Captions (1.2.2) are for video with sound. The Audio block has no caption-track option, so put the transcript on the page.
**Hint:** There's nothing to watch, so what does a deaf listener need?

### Q4. Your site logo in the header links to your home page. What alt text should it have?
- a) "Logo"
- b) "Rosa's Garden home"
- c) "Green leaf logo with a curved brown stem and serif lettering"
- d) Empty alt, because logos are decorative

**Answer:** b
**Explanation:** A linked image is functional: its alt should say where the link goes. Describing the design doesn't help someone navigate, and empty alt would leave a link with no name.
**Hint:** What happens when someone clicks it?

### Q5. Malik updates the **Alternative Text** of a photo in **Media → Library**. The three posts that already use that photo still show the old alt text. Why?
- a) WordPress caches alt text for 30 days before refreshing it
- b) Alt text can only be changed by re-uploading the image
- c) The block copies the alt text when the image is inserted, so each post must be edited in its block
- d) He needs to clear his browser cache to see the change

**Answer:** c
**Explanation:** The Media Library alt is a default copied into the Image block at insert time. After that, each block keeps its own copy. That's a good thing, because the best alt depends on the post the image is in.
**Hint:** Where does the post's image get its alt text from?

### Q6. Spot the error: Hana's media checklist says:
> 1. Rename files before upload (`tomato-seedlings-week-two.jpg`).
> 2. Leave alt empty for the decorative divider image.
> 3. YouTube auto-captions are finished captions; publish them as they are.
> 4. Paste an edited transcript below each podcast episode.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Auto-captions are a starting point. They often get names, numbers and jargon wrong, so edit them in **YouTube Studio → Subtitles** before relying on them.
**Hint:** Can a machine spell your guests' names?

### Q7. (review: m03-l02) Which change shrinks a 4032-pixel phone photo the most before it goes into a 645-pixel content column?
- a) Converting it from JPEG to PNG
- b) Uploading it as-is and letting WordPress make copies
- c) Saving it again at the same quality
- d) Resizing it to about 1300–1600 px, then compressing it

**Answer:** d
**Explanation:** Right-sizing removes most of the pixels, and compression then removes invisible detail. PNG makes photos bigger, re-saving at the same quality only loses detail, and WordPress keeps your huge original on the server.
**Hint:** Start with the step that removes the most pixels.
