# M02.L05 Quiz — Embeds: YouTube, podcasts, social posts and newsletters

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error · includes 1 spaced-review question from M02.L03.
> Provider list and labels checked against WordPress 7.0 core source on 2026-10-31.

### Q1. What's the simplest way to embed a YouTube video in the block editor?
- a) Upload the video file to the Media Library
- b) Paste the video's link on its own empty line and press Enter
- c) Type the link in the middle of a sentence and make it bold
- d) Install a YouTube plugin, then use its shortcode

**Answer:** b
**Explanation:** WordPress recognises supported links pasted on their own line and turns them into an embed block, with no plugin needed. A link inside a sentence stays a normal link, and uploading the video yourself makes your own site host a heavy file (M03.L05).
**Hint:** One link, one line.

### Q2. Which of these can you **no longer** embed just by pasting a link in core WordPress?
- a) A Spotify podcast episode
- b) A Bluesky post
- c) An Instagram post
- d) A Vimeo video

**Answer:** c
**Explanation:** Instagram and Facebook were removed from core's oEmbed providers in WordPress 5.5.2, because Meta began requiring an access token for its embed service. Spotify, Bluesky (added in 6.6) and Vimeo still embed by pasting the link.
**Hint:** It's owned by Meta.

### Q3. What does YouTube's Privacy Enhanced Mode (`youtube-nocookie.com`) do?
- a) Makes the video load from your own server instead of Google's
- b) Stops views of the embedded video being used to personalise the viewer's YouTube experience and ads
- c) Removes every request to Google, so no cookie notice is ever needed
- d) Hides the video from search engines

**Answer:** b
**Explanation:** Per YouTube, views in Privacy Enhanced Mode aren't used to personalise the viewer's YouTube browsing or ads. The player still loads from Google's servers, so it reduces third-party data but doesn't remove it, and you may still need to mention it in your cookie notice (M08).
**Hint:** "Enhanced", not "eliminated".

### Q4. Ravi's phone review embeds his YouTube video, two X posts, an Instagram reel and a podcast clip. The page is slow on mobile. What's the best first change?
- a) Keep all five embeds and add a caching plugin to speed things up
- b) Keep the YouTube video, and replace the social posts with screenshots linking to the originals
- c) Remove the YouTube video, since videos are always heavier than social posts
- d) Move all five embeds to the very top of the post so they load first

**Answer:** b
**Explanation:** The video is his own content that readers will play; the social posts are supporting evidence that a screenshot with a link covers just as well, without loading several other companies' scripts. Caching speeds up *your* pages but not third-party players; moving embeds to the top makes them all load immediately instead of lazily.
**Hint:** Which embeds do readers actually need to play?

### Q5. Mei pastes `https://x.com/brand/status/123…` on its own line and gets "Sorry, this content could not be embedded." What's the most likely reason, and a good fix?
- a) X no longer allows its posts to be shown on other websites, so she should remove the reference
- b) Core only recognises `twitter.com` links, so she should swap the domain and retry, or convert it to a link
- c) Embeds only work on sites served over HTTPS, so her Local site needs SSL turned on first
- d) Only Administrators can embed social posts, so she should ask an Administrator to paste the link

**Answer:** b
**Explanation:** Core's X/Twitter provider matches `twitter.com` addresses, not `x.com`. Changing the domain often works; if not, a screenshot with a link is the reliable choice. Embeds don't depend on HTTPS or on the Administrator role (only Custom HTML code does).
**Hint:** Look at the domain in the link.

### Q6. Spot the error: Zara's embed policy says:
> 1. One main video or podcast embed per post, using the episode link.
> 2. Social posts that are just evidence → screenshot with alt text, linked to the original.
> 3. Newsletter sign-up: paste Kit's embed code into a Custom HTML block (as an Author, that's fine).
> 4. Measure page weight in the Network tab before publishing a post with embeds.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** On a single site only Administrators and Editors can save unfiltered code like embed scripts and iframes; when an Author saves it, WordPress strips it. Zara needs an Administrator or Editor to add it, or a plain button linking to her sign-up page.
**Hint:** Which roles can save raw HTML code?

### Q7. (review: m02-l03) Which is the best tagging decision for a new post about a one-off visit to a small local café?
- a) Create five new tags for the café name, street, city, "coffee" and "visit"
- b) Reuse an existing tag that already fits (e.g. *coffee*) and create no new tags for one-off details
- c) Create a new category named after the café
- d) Tag it with every category name as well, so it appears everywhere

**Answer:** b
**Explanation:** The tag rule is: reuse first, and create a new tag only if 3+ posts will use it soon. A one-off café visit doesn't justify new tags or a new category. Tags that repeat category names just duplicate archive pages.
**Hint:** Reuse first; new tags need 3+ posts.
