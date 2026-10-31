# M05.L02 Quiz — Configure one SEO plugin: titles, meta, sitemap, breadcrumbs and redirects

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced-review question from M05.L01.
> Checked against Yoast SEO 28.8, Redirection 5.10.1, WordPress 7.0 and Google Search Central on 2026-10-31.

### Q1. Why should a site run only **one** SEO plugin?
- a) WordPress allows only one plugin from each category to be active
- b) SEO plugins all write the same tags, so two give duplicate titles, schema and sitemaps
- c) Google penalises any site that has more than one SEO plugin installed
- d) The second plugin automatically deletes the first plugin's settings

**Answer:** b
**Explanation:** Yoast, Rank Math and AIOSEO all output `<title>`, meta description, Open Graph, JSON-LD schema and an XML sitemap. With two active, the page source has duplicates that confuse search engines and social platforms. WordPress doesn't block it, and there's no special "two plugins" penalty: the problem is the conflicting output.
**Hint:** Look at what each plugin writes into the page source.

### Q2. What does a **301** redirect tell browsers and Google?
- a) The page is temporarily somewhere else and will return
- b) The page has been deleted and should be removed from the index
- c) The page has moved permanently, so show and use the new URL instead
- d) The page is private, so only logged-in users may visit it

**Answer:** c
**Explanation:** 301 (and 308) means *moved permanently*. Google treats the target as the URL to show in results and passes the old URL's signals to it. A 302/307 is temporary (Google keeps the old URL); 404/410 mean not found / gone.
**Hint:** Permanent vs temporary.

### Q3. According to Google, how does it create the snippet (the text under a result's title)?
- a) It always shows your meta description, cut to about 160 characters
- b) Mainly from page content, sometimes from the meta description
- c) Only from the post's first paragraph; meta descriptions are ignored
- d) From the description your SEO plugin adds to the XML sitemap

**Answer:** b
**Explanation:** Google says snippets are created primarily from the page content, and it may use the meta description when it describes the page better than other parts of the content. That's why a good description is worth writing for key pages, but you can't force it to show.
**Hint:** Google says "may", not "will".

### Q4. Hira changes a published **post's** slug from `miso-ramen` to `easy-miso-ramen`. She hasn't installed any redirect plugin. What happens when someone visits the old URL?
- a) A 404, because WordPress only redirects when the permalink structure changes
- b) WordPress redirects them to the new URL, because it remembers old post slugs
- c) A 404 until she adds a redirect, because Yoast's free version has no redirects
- d) A 302 temporary redirect that expires after the post is crawled again

**Answer:** b
**Explanation:** For published posts (non-hierarchical post types), WordPress stores the old slug and sends a 301 to the new URL. It doesn't do this for **pages** or categories, which is why you add redirects for those. Test it with a private window or `curl -I` anyway.
**Hint:** Posts and pages behave differently here.

### Q5. Ravi deletes an old post, "My 2023 camera bag", which has no newer version or related guide on his site. What should he do with its URL?
- a) Redirect it to the homepage so no visitor sees an error
- b) Redirect it to a random popular post to keep the traffic
- c) Let it return 404 (or 410), and remove internal links to it
- d) Recreate an empty post at the same URL

**Answer:** c
**Explanation:** Redirect a deleted post only to a **close replacement**. With no match, Google's advice is to let the URL return 404 or 410 (it currently treats them the same). Redirecting to another page such as the homepage creates a soft 404, which confuses readers and search engines. An empty post is thin content.
**Hint:** Would the new page actually answer what the old link promised?

### Q6. Spot the error: Mai's SEO setup notes say:
> 1. Installed Yoast SEO only; deactivated the old "All-in-One Schema" plugin.
> 2. Posts title template: Title – Site title; description template: the Excerpt variable.
> 3. Renamed my **About** page slug from `/about-me/` to `/about/`. WordPress redirects old slugs automatically, so no redirect needed.
> 4. Checked `/sitemap_index.xml` and the `Sitemap:` line in `robots.txt`.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** WordPress's automatic old-slug redirect covers published **posts**, not **pages** (pages are hierarchical). Mai needs a 301 from `/about-me/` to `/about/` (e.g. in Redirection, or its **Monitor permalink changes** option). Steps 1, 2 and 4 are good practice.
**Hint:** Is About a post or a page?

### Q7. (review: m05-l01) After installing Yoast SEO, Kemi's `robots.txt` shows `Sitemap: …/sitemap_index.xml` instead of `/wp-sitemap.xml`. What does this tell her?
- a) Her site is now blocked from search engines
- b) Yoast has replaced WordPress's built-in sitemap with its own and pointed crawlers to it
- c) Her site has two sitemaps and she must delete one
- d) Google has already indexed every page in the sitemap

**Answer:** b
**Explanation:** Yoast turns off core's sitemap (visiting `/wp-sitemap.xml` redirects to Yoast's) and adds its sitemap index to the virtual `robots.txt`, which crawlers read (M05.L01). A sitemap helps discovery; it doesn't mean pages are indexed.
**Hint:** Which file do crawlers read first to find your sitemap?
