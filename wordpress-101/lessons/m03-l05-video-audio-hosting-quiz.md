# M03.L05 Quiz — Video and audio: embed vs self-host

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error · includes 1 spaced-review question from M03.L04.
> Core behaviour checked against WordPress 7.0 source; facade guidance from Chrome's Lighthouse docs on 2026-10-31.

### Q1. What is a "facade" for a YouTube embed?
- a) A preview image that loads the real player only on click
- b) A WordPress setting that stops YouTube collecting any data
- c) A smaller, lower-quality copy of the video in the Media Library
- d) A browser feature that pauses videos when the tab is hidden

**Answer:** a
**Explanation:** Lighthouse defines a facade as a static element that looks like the embed but doesn't load it until the user interacts. WordPress core doesn't include one; use a linked thumbnail or an option in your performance plugin.
**Hint:** It looks like the player, but it isn't one yet.

### Q2. How does WordPress 7.0 handle embedded iframes (such as YouTube) by default?
- a) It never lazy-loads them, because iframes must load first
- b) It replaces them with facades automatically
- c) It adds `loading="lazy"`, except for the first three images or iframes in the content
- d) It downloads the video into the Media Library to speed it up

**Answer:** c
**Explanation:** Since WordPress 5.7, iframes get `loading="lazy"`. The first few elements in the content (the default threshold is 3) load straight away, because they're likely to be visible on screen. An embed at the top of the page therefore still loads with the page.
**Hint:** WordPress treats content near the top differently.

### Q3. What's the default **Preload** setting for WordPress's Video block?
- a) Auto: the whole video downloads with the page
- b) Metadata: only enough to know the video's length and size
- c) None: nothing downloads until the reader presses play
- d) Stream: the video plays in the background without sound

**Answer:** b
**Explanation:** The Video block defaults to `preload="metadata"`, which fetches only the first bytes. **None** is lighter still; **Auto** can download the whole file even if nobody watches.
**Hint:** It's the middle option.

### Q4. Gita publishes a 45-minute podcast every week and plans to upload the MP3s to her Media Library to save money. What's the strongest reason to use a podcast host instead?
- a) WordPress's Audio block can't play MP3 files at all
- b) Podcast apps need a proper feed and streaming-ready file hosting
- c) Google penalises sites that host their own audio files
- d) The Media Library deletes audio files after 30 days

**Answer:** b
**Explanation:** Apple Podcasts and other apps need a valid RSS feed with an enclosure per episode, served from hosting that supports byte-range requests. Podcast hosts provide this plus distribution and download stats, and absorb the bandwidth. WordPress can play MP3s, and there's no search penalty, but it's the wrong job for a typical web host.
**Hint:** Think about thousands of people downloading every episode.

### Q5. Omar's landing page has four YouTube embeds at the top. Lighthouse flags heavy third-party code. What's the best fix?
- a) Upload all four videos to the Media Library and set **Autoplay** on
- b) Replace the embeds with facades (linked preview images, or a facade option in his performance plugin)
- c) Install a second caching plugin alongside the first
- d) Set each embed's alignment to **Wide** so it loads faster

**Answer:** b
**Explanation:** Embeds near the top aren't lazy-loaded, so all four players load immediately. Facades defer that cost until someone clicks. Self-hosting would move the bandwidth to his host, and autoplay with sound is usually blocked; a second caching plugin conflicts (one plugin per job).
**Hint:** Load the player only when it's wanted.

### Q6. Spot the error: Fatima's media plan says:
> 1. 8-minute tutorials → YouTube, embedded in posts.
> 2. Weekly podcast → podcast host, player embedded with a transcript.
> 3. 10-second product loop → self-hosted Video block, muted, Preload: None, poster image.
> 4. The 60-minute workshop recording → upload to the Media Library and set **Autoplay** with sound so visitors don't miss it.

Which line is wrong?
- a) Line 1
- b) Line 2
- c) Line 3
- d) Line 4

**Answer:** d
**Explanation:** A 60-minute video is far too large to self-host well (bandwidth, no adaptive streaming), and browsers usually block autoplay with sound. Put it on YouTube or Vimeo and embed it, ideally with a facade.
**Hint:** Two problems in one line.

### Q7. (review: m03-l04) You changed a post's share image, but LinkedIn still shows the old preview. What should you do?
- a) Delete the post and republish it at a new URL
- b) Change the image's file name in the Media Library
- c) Turn off the featured image for that post
- d) Re-check the URL in LinkedIn Post Inspector so LinkedIn fetches it again

**Answer:** d
**Explanation:** Platforms cache link previews. LinkedIn Post Inspector (like Facebook's Sharing Debugger) shows what the platform sees and refreshes its copy. A new URL would break existing links.
**Hint:** There's an inspector for that.
