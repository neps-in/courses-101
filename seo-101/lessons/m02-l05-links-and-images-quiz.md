# M02.L05 Quiz — Links & Images: href, alt, title and New Tabs

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-06 against Google Search Central (link best practices, qualify outbound links, image SEO), MDN (`<a>`, `<img>`, `<ol>`) and W3C WAI (alt decision tree, decorative images).

### Q1. Which of these links can Google reliably crawl? *(O1 · recall)*
- a) `<a onclick="goto('/shop')">Shop all beans</a>`
- b) `<span onclick="go('/shop')">Shop all beans</span>`
- c) `<a href="javascript:go('shop')">Shop all beans</a>`
- d) `<a href="/shop" class="big">Shop all beans</a>`

**Answer:** d
**Explanation:** Google can generally only crawl an `<a>` with an `href` that holds a real address. A `class` makes no difference. The others rely on scripts.
**Hint:** Look for an `<a>` whose `href` is a real address.

### Q2. What does `alt=""` tell a screen reader? *(O2 · recall)*
- a) The image is missing, so it should warn the person using it
- b) The image is decoration, so it can skip over it and move on
- c) The alt text is still being written, so it should read the file name
- d) The image is important, so it should describe it automatically

**Answer:** b
**Explanation:** An empty `alt` marks an image as decoration, so assistive technology can ignore it. It's different from leaving `alt` out, when some screen readers announce the file name.
**Hint:** When would you want an image to be ignored?

### Q3. When should you use `rel="sponsored"`? *(O3 · recall)*
- a) On links that are ads or paid placements, such as affiliate links
- b) On links to any business that you'd like to thank or recommend
- c) On every external link, to protect your own site's ranking power
- d) On links in comments that visitors have posted on your blog

**Answer:** a
**Explanation:** Google says to mark "advertisements or paid placements" with `sponsored`. User-posted links get `ugc`, and regular links need no `rel` at all.
**Hint:** What does the word "sponsored" suggest about money?

### Q4. Amara wrote "To learn how long cold brew keeps, click here." What's the best link? *(O1 · scenario)*
- a) Keep "click here" as the link, and add a `title` with a description
- b) Link the whole sentence, so that the clickable area is much bigger
- c) Reword it to "See how long cold brew keeps" and link those words
- d) Add a list of keywords after it, and link all of those keywords too

**Answer:** c
**Explanation:** Good anchor text is "descriptive, reasonably concise", and it should make sense out of context. Linked words like "how long cold brew keeps" do that. A `title` doesn't fix a vague link.
**Hint:** Would the linked words make sense in a list of links?

### Q5. Tomás finds that the agency added `rel="nofollow"` to every external link, including links to the makers of his tools. What should he do? *(O3 · scenario)*
- a) Remove it from links he trusts, as they don't need any `rel`
- b) Keep it, because external links drain ranking power from a site
- c) Change them all to `rel="ugc"`, as that value suits shops better
- d) Delete all his external links, so that none of them need a `rel`

**Answer:** a
**Explanation:** Google says to use `nofollow` "only when you don't trust the source, and not for every external link on your site". External links can even help establish trust.
**Hint:** What does Google say about using `nofollow` on every external link?

### Q6. Nila Coffee's logo is the only thing inside a link to the homepage. Which alt text is best? *(O2 · scenario)*
- a) `alt="logo"`, because that's what the image is on the page
- b) `alt=""`, because a logo is only a decorative part of the design
- c) `alt="Nila Coffee home"`, as it says where the link goes
- d) `alt="Nila Coffee best coffee beans India buy coffee online"`

**Answer:** c
**Explanation:** When an image is the whole link, the alt text does the job of the link text, so it should say where the link goes. Google also uses it as anchor text.
**Hint:** If the image failed to load, what would the link need to say?

### Q7. Spot the error: "Use the same keyword-rich phrase as the alt text on all your images, because alt text is the best place for keywords." *(O2 · spot the error)*
- a) Alt text only works if the same words are in a `title` attribute too
- b) Alt text has no effect on search, so what you write there doesn't matter
- c) Keywords in alt text only work when the image's file is a PNG or a GIF
- d) Keyword stuffing in alt text is bad for users and can look like spam

**Answer:** d
**Explanation:** Google says stuffing alt attributes "results in a negative user experience and may cause your site to be seen as spam". Alt text should describe each image in context.
**Hint:** Who is alt text really for?

### Q8. Spot the error: "I put the ingredients in an `<ol>` so they get numbers, and the method in a `<ul>`." *(spot the error · review: m02-l04)*
- a) Both lists should be paragraphs, separated with `<br>` tags instead
- b) They're swapped: order matters in a method, not in the ingredients
- c) Lists aren't allowed in articles, so both should be `<h3>` headings
- d) Both are right, because the choice is only about how the list looks

**Answer:** b
**Explanation:** As you saw in Lesson 2.4, try changing the order: if the meaning changes, use `<ol>`. Shuffled ingredients still work, but shuffled steps don't.
**Hint:** What happens if you shuffle each list?
