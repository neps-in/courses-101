# M04.L01 Quiz — Your Toolkit: VS Code, Files & Folders

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against the VS Code docs (Workspace Trust, extension runtime security), the Microsoft Live Preview README, MDN "Dealing with files", and a headless Chrome 156 run of relative, root-relative and wrong-case paths from `file://` and from a local server.

### Q1. Why should the launch page's file be called `index.html`? *(O2 · recall)*
- a) Browsers refuse to open any HTML file that has a different name
- b) A server sends it when someone visits the folder's own address
- c) Search engines only index pages whose file name is `index.html`
- d) VS Code's Live Preview extension can't preview any other names

**Answer:** b
**Explanation:** `index.html` is the default document: a visit to `https://nila.example/` (the folder itself) gets `index.html`, so the address stays clean. Browsers open any `.html` file, search engines index any page they can reach, and Live Preview previews any HTML file.
**Hint:** What does a server send when the address ends in `/`?

### Q2. Your stylesheet is at `css/styles.css` inside the project folder. Which `href` in `index.html` works when double-clicked, on the local server and on any host? *(O2 · recall)*
- a) `href="/css/styles.css"`, starting from the root of the website
- b) `href="C:\Users\you\nila-launch\css\styles.css"`, the full location
- c) `href="css/styles.css"`, relative to the HTML file's own folder
- d) `href="styles.css"`, because the browser searches subfolders for it

**Answer:** c
**Explanation:** A relative path starts from the HTML file's folder, so it works wherever the folder goes. Root-relative `/css/…` fails from `file://` (it points to the root of your drive) and on GitHub Pages project addresses; a `C:\` path only exists on your computer; and browsers never search subfolders.
**Hint:** Which path only depends on where the files sit next to each other?

### Q3. On Leila's Mac the hero photo shows perfectly, both double-clicked and on the local server. After publishing, it's missing and Network shows 404 for `images/Hero.jpg`. The file is `images/hero.jpg`. What happened? *(O3 · scenario)*
- a) The live host doesn't support JPG images, only PNG and WebP files
- b) Her browser cached the image, so the live site never received it
- c) The local server uploaded an old copy of the photo to the live host
- d) Her Mac ignores letter case in file names; the web host doesn't

**Answer:** d
**Explanation:** Windows and Mac file systems usually treat `Hero.jpg` and `hero.jpg` as the same file, so neither double-clicking nor a local server shows the mistake. Most web hosts run on case-sensitive systems, so the request for `Hero.jpg` finds nothing. Keep names lowercase and search your paths for capitals before publishing.
**Hint:** Which part of the path differs from the real file name?

### Q4. `css/styles.css` contains `background-image: url("images/texture.jpg");` and the texture doesn't appear. The image is in the `images` folder next to `css`. What's the fix? *(O2 · scenario)*
- a) `url("../images/texture.jpg")`, going up one level out of `css` first
- b) `url("/images/texture.jpg")`, which always starts from the HTML file
- c) Move `texture.jpg` into the `css` folder and keep two copies of it
- d) `url(images/texture.jpg)` without quotes, so the path is read correctly

**Answer:** a
**Explanation:** Paths inside a CSS file start from the CSS file's own folder, so `images/…` looks for `css/images/texture.jpg`. `../` goes up to the project folder first. A leading `/` starts from the site root (not the HTML file) and breaks when opened as a file, duplicates cause confusion, and the quotes make no difference.
**Hint:** Where does a path in a CSS file start from?

### Q5. A colleague emails you a zipped website project from an agency you've never worked with. VS Code asks whether you trust the authors. What's the sensible choice? *(O1 · scenario)*
- a) Trust it, because only trusted folders can show the file list at all
- b) Don't trust it yet: Restricted Mode lets you read it safely
- c) Trust it, but uninstall all your extensions before opening any file
- d) Don't open it in VS Code at all; use Notepad for any unknown project

**Answer:** b
**Explanation:** Workspace Trust exists because project folders can contain settings and tasks that run code. In Restricted Mode you can still browse and read every file; you trust the folder later if you need to. Untrusted folders still show their files, and you don't need to remove extensions or switch editors.
**Hint:** What can you still do in Restricted Mode?

### Q6. Spot the error. The page looks right on your laptop, but this `<head>` will break for every visitor once it's live. Which line? *(O2 · spot-the-error)*
```html
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fresh Coffee Beans Delivered Monthly | Nila Coffee</title>
  <link rel="icon" href="images/logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="file:///C:/Users/leila/nila-launch/css/styles.css">
</head>
```
- a) The `charset` line, because it has to come after the `<title>` tag
- b) The viewport line, because `initial-scale=1` stops pages from zooming
- c) The `icon` line, because favicons must be `.ico` files in the root
- d) The stylesheet line, which points to a file on Leila's own computer

**Answer:** d
**Explanation:** `file:///C:/Users/leila/…` only exists on Leila's laptop, which is why it looks fine there; every visitor's browser will fail to load it. Use `css/styles.css`. The charset belongs first, `initial-scale=1` is correct and allows zoom, and SVG favicons are fine in modern browsers.
**Hint:** Which path would mean nothing on someone else's computer?

### Q7. *(review: m03-l04)* At 320 px the page scrolls sideways, but the Console overflow finder prints nothing. What's the most likely cause? *(O3 of M03.L04 · scenario)*
- a) A long URL or word spilling out of a box that is the right width
- b) The finder only works on desktop widths, never in the device toolbar
- c) The viewport meta tag is missing, so the finder can't measure the page
- d) An image with `max-width: 100%`, which always overflows on phones

**Answer:** a
**Explanation:** The finder checks element boxes. Text that spills out of a correctly sized box isn't an element sticking out, so it isn't listed; `document.documentElement.scrollWidth` bigger than 320 gives it away, and `overflow-wrap: break-word` fixes it. The finder works at any width, a missing viewport tag gives a zoomed-out page instead, and `max-width: 100%` prevents image overflow.
**Hint:** Lesson 3.4: what can the finder not see?
