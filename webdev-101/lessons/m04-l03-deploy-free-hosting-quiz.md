# M04.L03 Quiz — Deploy to Free Hosting

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against GitHub Docs (What is GitHub Pages?, limits, publishing source), Netlify's pricing page, Cloudflare Pages limits and migration guide, and live `curl` checks of a GitHub Pages project site (case, 404, redirects, cache header).

### Q1. Your GitHub username is `amara-k` and your repository is `nila-launch`. With GitHub Pages deploying from `main`, what's the free address? *(O2 · recall)*
- a) `https://nila-launch.github.com/amara-k/`, the repo first
- b) `https://github.com/amara-k/nila-launch`, the repository page
- c) `https://amara-k.github.io/nila-launch/`, user then repo folder
- d) `https://amara-k.pages.dev/nila-launch/`, on GitHub's own domain

**Answer:** c
**Explanation:** A GitHub Pages project site lives at `username.github.io/repository/`. `github.com/…` is the repository's code page, not the website, and `pages.dev` is Cloudflare's domain.
**Hint:** Which domain ends in `.io`?

### Q2. Once GitHub Pages is set to deploy from `main`, what makes the live site update? *(O2 · recall)*
- a) Pushing new commits to the `main` branch on GitHub
- b) Saving a file in VS Code with format on save turned on
- c) Uploading the changed files again with an FTP program
- d) Clicking Save on the Pages settings screen after each edit

**Answer:** a
**Explanation:** The host watches the repository: each push to `main` starts the "pages build and deployment" run, and the live site then matches the latest commit. Saving locally changes only your computer, FTP isn't used, and the Pages setting only needs saving once.
**Hint:** What does the host watch?

### Q3. A client wants a small online shop with a checkout on its static site, built from a private repository. Which free host fits best? *(O1 · scenario)*
- a) GitHub Pages, because it's free and already holds the repository
- b) None; static sites can never be connected to a checkout service
- c) GitHub Pages, as long as the repository is made public first
- d) Netlify or Cloudflare, which allow private repos and commerce

**Answer:** d
**Explanation:** GitHub Pages' terms say it isn't for online shops or sites mainly for commercial transactions, and a free account can only publish public repositories. Netlify and Cloudflare deploy from private repos and allow commercial sites (check each plan's limits). Static sites can use hosted checkouts (e.g. a payment link).
**Hint:** Two problems with GitHub Pages here: the repo and the purpose.

### Q4. Your hero image shows in the local preview on your Mac, but on the live GitHub Pages site it's missing and Network shows a 404 for `images/Beans.jpg`. The file in the repo is `images/beans.jpg`. What's the fix? *(O3 · scenario)*
- a) Turn on HTTPS in the Pages settings so that images can load
- b) Match the `src` to the lowercase file name, commit and push
- c) Wait 24 hours, because new images take a day to reach GitHub
- d) Move the image to the root folder so no path is needed for it

**Answer:** b
**Explanation:** GitHub Pages treats `Beans.jpg` and `beans.jpg` as different files (checked: wrong case = 404), while a Mac ignores the difference. Fix the path, commit, push, and the next deploy serves it. HTTPS is already on, images don't take a day, and moving files doesn't fix the case.
**Hint:** Lesson 4.1: what's invisible on Windows and Mac?

### Q5. You pushed a fix two minutes ago, but the live page still shows the old version. What should you check first? *(O3 · scenario)*
- a) Whether the repository was accidentally deleted on GitHub
- b) Whether your domain name has expired since you last looked
- c) The Actions tab, then reload with the cache disabled
- d) Whether you need to re-select `main` in the Pages settings

**Answer:** c
**Explanation:** The deploy may still be running (GitHub allows up to 10 minutes), and GitHub Pages lets browsers cache files for 10 minutes (`max-age=600`). A green run plus a reload with cache disabled shows the real live version. The other options would cause bigger, different symptoms.
**Hint:** Two things can delay what you see: the deploy and the cache.

### Q6. Spot the error. This page deploys to `https://amara-k.github.io/nila-launch/`. Which line breaks the live page? *(O3 · spot-the-error)*
```html
<link rel="stylesheet" href="/css/styles.css">
<link rel="icon" href="images/logo.svg" type="image/svg+xml">
<link rel="canonical" href="https://amara-k.github.io/nila-launch/">
<img src="images/beans.jpg" alt="A handful of dark roasted coffee beans">
```
- a) The stylesheet, since `/` starts at the domain, not the repo
- b) The icon, because favicons must be in the root folder of the website
- c) The canonical, because canonical URLs mustn't end with a slash
- d) The image, because `alt` text must be under five words to be valid

**Answer:** a
**Explanation:** A root-relative path starts from the domain root, so `/css/styles.css` asks for `https://amara-k.github.io/css/styles.css`, outside the repo folder: 404, unstyled page. Use `css/styles.css`. Favicons can live anywhere you link to, a trailing slash is fine, and alt text has no word limit.
**Hint:** Where does a path starting with `/` begin on a project address?

### Q7. *(review: m04-l02)* You want `.env` (with an API key) and `.DS_Store` never to reach your public repo, which now deploys live. When should you add them to `.gitignore`? *(O3 of M04.L02 · recall)*
- a) After the first deploy, once you know which files were published
- b) Only if GitHub push protection blocks a push and asks you to
- c) Never; deleting the files after each push removes them from history
- d) Before the first commit, because `.gitignore` doesn't untrack files

**Answer:** d
**Explanation:** `.gitignore` only stops untracked files being added; a file committed once stays in history even after it's deleted or ignored. Push protection catches many key formats but not everything. With Git-based deploys, anything committed to a public repo is public twice: in the repo and possibly on the live site.
**Hint:** Lesson 4.2: what does `.gitignore` do to files Git already tracks?
