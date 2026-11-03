# M02.L05 Quiz — Meta Tags & Social Previews

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against Google Search Central (title links, snippets), Meta "Images in link shares", ogp.me and X "Cards markup". Lesson `<head>` validated live with the W3C Nu HTML Checker.

### Q1. Which share-image size does Meta recommend for the best link previews on high-resolution screens? *(O2 · recall)*
- a) 400 × 400 pixels, a square logo
- b) 1080 × 1920 pixels, a tall story image
- c) 1200 × 630 pixels, about 1.91:1
- d) 300 × 157 pixels, a small thumbnail

**Answer:** c
**Explanation:** Meta says to use images of at least 1200 × 630 pixels for the best display on high-resolution devices (600 × 315 at the minimum for large previews, files under 8 MB). LinkedIn and X display the same wide ratio well. A square logo or tiny thumbnail gives a small or cropped card, and a tall story image gets cropped badly.
**Hint:** It's the ratio of a wide feed card, not a phone screen.

### Q2. What does Google say about meta description length? *(O1 · recall)*
- a) Descriptions over 160 characters are ignored and never shown
- b) There's no limit, but snippets are truncated to fit the screen
- c) Exactly 155 characters are required for the page to be indexed
- d) Descriptions must repeat the page's main keyword three times

**Answer:** b
**Explanation:** Google's snippet documentation says there's no limit on length, but the snippet is truncated as needed, typically to fit the device width. Popular "155 characters" advice is a rule of thumb for what usually fits, not a requirement. Keyword repetition is spam, not guidance.
**Hint:** Is the number a Google rule or a habit?

### Q3. Ngozi fixed her page's `og:image` an hour ago, but LinkedIn still shows the old picture when she pastes the link. What should she do first? *(O3 · scenario)*
- a) Rename the page so it has a brand-new address for every share
- b) Wait a few minutes; LinkedIn reloads every page once an hour
- c) Delete the `og:image` tag so LinkedIn has to look for a new one
- d) Inspect the URL in LinkedIn Post Inspector to refresh its cache

**Answer:** d
**Explanation:** LinkedIn cached the card from the first share. Inspecting the URL in Post Inspector makes LinkedIn read the page again and refresh its copy. There's no hourly reload, renaming the page breaks old links and search results, and deleting the tag gives a worse card.
**Hint:** Which official tool makes the platform fetch the page again?

### Q4. Rahul's preview on Facebook shows no image. His page has `<meta property="og:image" content="images/share.jpg">`. What's the likely problem? *(O2 · scenario)*
- a) Facebook only accepts `.png` images, not `.jpg` share images
- b) The image URL is relative; platforms need the full `https://` URL
- c) The tag must use `name="og:image"` instead of `property="og:image"`
- d) Share images must be placed in `<body>` so the crawler can see them

**Answer:** b
**Explanation:** The crawler reads the tag on its own, away from your page's folders, so it needs an absolute URL like `https://site.example/images/share.jpg`. JPG is fine, `property` is the correct attribute in the Open Graph protocol, and the tags belong in `<head>`.
**Hint:** Lesson 2.2: absolute vs relative URLs.

### Q5. Which `<title>` is best for a page selling a monthly coffee subscription? *(O1 · scenario)*
- a) `Fresh Coffee Beans Delivered Monthly | Nila Coffee`
- b) `Home`
- c) `Nila Coffee — Welcome to our brand new website!`
- d) `coffee, coffee beans, buy coffee, coffee India, coffee online`

**Answer:** a
**Explanation:** A good title is specific and unique, puts what the page offers first in words people search for, and ends with the brand. "Home" says nothing in a tab or search result, a welcome message wastes the space, and a keyword list is stuffing that Google warns against.
**Hint:** Would a stranger know what the page offers from the title alone?

### Q6. Spot the error. X shows only a small card with no large image for this page. Which line explains it? *(O2 · spot-the-error)*
```html
<meta property="og:title" content="Fresh beans every month">
<meta property="og:image" content="https://nilacoffee.example/images/share-1200x630.jpg">
<meta name="twitter:card" content="summary">
```
- a) X needs its own `twitter:title` tag; it never reads `og:title`
- b) The `og:image` URL can't contain numbers such as `1200x630`
- c) `summary` is the small card style; use `summary_large_image`
- d) The `og:title` content is too short to be accepted by X at all

**Answer:** c
**Explanation:** `twitter:card` picks the card style, and `summary` is the small card with a thumbnail. `summary_large_image` asks for the big image. X falls back to the `og:` tags for title, description and image, numbers in file names are fine, and short titles are allowed.
**Hint:** Read the value of the X-specific tag.

### Q7. *(review: m02-l04)* A visitor submits a practice form that uses `method="get"`. Where does the form data end up? *(O1 of M02.L04 · recall)*
- a) Only inside the website's own database, hidden from the visitor
- b) In the page's `<head>`, as new meta tags for the next visitor
- c) In a cookie that is deleted as soon as the browser tab closes
- d) In the URL's query string, shown in the address bar and history

**Answer:** d
**Explanation:** GET sends form data in the URL (`?email=amara%40example.com`), so it's visible in the address bar, browser history, server logs and analytics. That's why real sign-up forms use POST to a form service (Lesson 5.4). It doesn't create cookies or meta tags, and the practice form has no database at all.
**Hint:** Look at the address bar after submitting in Lesson 2.4.
