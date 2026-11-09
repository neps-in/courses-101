# M04.L06 Quiz — Shop Pages and Sharing: Product Pages, Category Pages and Open Graph

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Search Central (ecommerce site structure, URL structure, pagination, reviews), ogp.me, Meta for Developers and LinkedIn Help.

### Q1. What does Google say about linking from category pages to products? *(O1 · recall)*
- a) Link only to best sellers, because too many links dilute the category page
- b) It's strongly recommended to link to all products that you wish indexed
- c) Links aren't needed, because Google finds products through your search box
- d) Link to products only from the sitemap, never from the category page itself

**Answer:** b
**Explanation:** Google says "It's strongly recommended to link to all products that you wish indexed", and "Googlebot generally doesn't try to submit searches into a search box".
**Hint:** Which products should be reachable?

### Q2. Which four Open Graph properties does ogp.me list as required for every page? *(O3 · recall)*
- a) `og:title`, `og:description`, `og:site_name` and `og:locale`
- b) `og:image`, `og:image:alt`, `og:video` and `og:audio`
- c) `og:title`, `og:type`, `og:image` and `og:url`
- d) `og:url`, `og:description`, `og:price` and `og:brand`

**Answer:** c
**Explanation:** ogp.me says "The four required properties for every page are" title, type, image and URL. Description and image alt are recommended extras.
**Hint:** A name, a kind, a picture and an address.

### Q3. How should paginated category pages be set up for Google? *(O1 · recall)*
- a) Each page with a unique URL such as `?page=2`, joined by real links
- b) All pages on one URL with `#page2`, so Google sees a single page
- c) Each page with `rel="next"` and `rel="prev"`, which Google needs
- d) Only page 1 indexable, with every other page set to `noindex`

**Answer:** a
**Explanation:** Google says "Give each page a unique URL. For example, include a ?page=n query parameter". It notes "Google no longer uses" `rel="next"` and `rel="prev"`.
**Hint:** Each page needs its own address.

### Q4. Nila's "Brewing Gear" page shows 8 items and a **Load more** button, with no page 2 URL. What's the risk? *(O1 · scenario)*
- a) None, because Google presses buttons to load every product on a page
- b) The page looks too short, so Google treats it as thin content
- c) Shoppers can't scroll on phones, so the products are hidden from them
- d) Google doesn't click buttons, so later products may not be found

**Answer:** d
**Explanation:** "Google's crawlers don't "click" buttons". Add numbered pages with real links, or at least list every product in the sitemap.
**Hint:** Does Google interact with the page?

### Q5. Tomás's product page opens with 300 words about his family's history. The size, price and stock are at the bottom. What should he change first? *(O2 · scenario)*
- a) Move the key facts to the top, and keep the story further down
- b) Delete the story, since Google penalises any text about the business
- c) Add another 300 words of history, so the page reaches a minimum length
- d) Hide the price, so that shoppers read the whole page before buying

**Answer:** a
**Explanation:** Buyers need what it is, who it's for, size, price and delivery first. Google has no minimum length for shop pages, and the story can stay lower down.
**Hint:** What do buyers look for first?

### Q6. When Kavya shares her new class page on WhatsApp, the preview shows her logo and the title "Home". What's the most likely fix? *(O3 · scenario)*
- a) Rename the page's file, since apps read the file name for previews
- b) Set a real `og:image` and `og:title` for that page, then recheck it
- c) Add the class name 20 times to the page text so the app picks it up
- d) Delete the logo from the site, so the apps can't fall back to using it

**Answer:** b
**Explanation:** Previews come from Open Graph tags. Without good tags, apps guess. Set them in your SEO plugin or platform, then check in a sharing debugger, and allow for app caching.
**Hint:** What do apps read when a link is shared?

### Q7. Spot the error: "Our 250 g and 1 kg bags are at `/beans#250g` and `/beans#1kg`, so Google indexes them as two pages." *(O1 · spot the error)*
- a) Google indexes only the 1 kg version, since it's the bigger product
- b) Variants must always be on separate domains for Google to index them
- c) Google treats `#` versions as the same page; use a path or parameter
- d) Google indexes `#` versions only if they're listed in an image sitemap

**Answer:** c
**Explanation:** Google says `/product/t-shirt#black` and `/product/t-shirt#white` "are considered to be the same page by Google". Use `/beans/1kg` or `?size=1kg` if each variant needs its own page.
**Hint:** What does Google do with everything after `#`?

### Q8. Spot the error: "Our new drill page is in the sitemap, so it doesn't need any internal links." *(spot the error · review: m04-l05)*
- a) Sitemaps are ignored by Google, so the page needs to be deleted and rebuilt
- b) Internal links matter only for blog posts, never for product pages in shops
- c) Only links from other sites count, so the internal links won't matter at all
- d) Every page you care about should have a link from at least one other page

**Answer:** d
**Explanation:** As you saw in Lesson 4.5, Google says "Every page you care about should have a link from at least one other page on your site." Links also signal how important a page is.
**Hint:** In Lesson 4.5, how many internal links does every important page need?
