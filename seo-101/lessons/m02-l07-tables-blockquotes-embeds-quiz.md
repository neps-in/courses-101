# M02.L07 Quiz — Tables, Blockquotes & Embeds

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-06 against MDN (`<caption>`, `<th>`, `<iframe>`), W3C WAI (tables), the WHATWG HTML Standard (`blockquote`, `cite`), Google Search Central (video SEO) and web.dev (third-party embeds). Q8's `<main>` rule was checked for Lesson 2.6.

### Q1. What does a table's `<caption>` do? *(O1 · recall)*
- a) It adds a small note below each column in the table
- b) It works like a heading, saying what the table is about
- c) It tells the browser how wide each of the columns should be
- d) It hides the table from search engines until a visitor clicks

**Answer:** b
**Explanation:** W3C says a caption "functions like a heading for a table". It helps people decide whether to read the table. It must come first inside `<table>`.
**Hint:** Which part names the whole table?

### Q2. Where should the credit for a `<blockquote>` go? *(O2 · recall)*
- a) In the `cite` attribute only, so that readers see it on hover
- b) Inside the `<blockquote>`, as the last line of the quotation
- c) In a `<cite>` element around the person's name, in the quote
- d) In visible text outside the `<blockquote>`, such as a `<p>`

**Answer:** d
**Explanation:** The HTML Standard says attribution "must be placed outside the `blockquote` element". The `cite` attribute is "not for readers", and `<cite>` isn't for names.
**Hint:** Is the credit part of what the person said?

### Q3. What does `<th scope="col">` tell a screen reader? *(O1 · recall)*
- a) This cell is the header for the column it sits in
- b) This cell should be read out before all of the others
- c) This cell's text is the title of the whole of the table
- d) This cell's column can be sorted by the person reading

**Answer:** a
**Explanation:** `scope="col"` means the header "relates to all cells of the column it belongs to". So a screen reader can tell people which column a cell is in.
**Hint:** What does "col" stand for?

### Q4. Kavya's class timetable is a screenshot of a spreadsheet. What should she do? *(O1 · scenario)*
- a) Keep the screenshot, and add every class time to the `alt` text
- b) Embed the live spreadsheet in an `<iframe>` on each of the pages
- c) Rebuild it as a real table, with a caption and header cells
- d) Make the screenshot larger, so that phone users can read it

**Answer:** c
**Explanation:** A timetable is data in rows and columns, so a real table suits it. Everyone can then read and search it, and a screen reader can follow its headers.
**Hint:** Is a timetable really a picture?

### Q5. Tomás has four YouTube embeds at the bottom of a product page, and the page is slow. What's the best first step? *(O3 · scenario)*
- a) Keep only those that help, then add titles and `loading="lazy"`
- b) Keep all four, and move them to the top of the page to load first
- c) Replace all four with screenshots that link to a contact form
- d) Copy each of the videos' full transcripts into `alt` attributes

**Answer:** a
**Explanation:** Every embed adds weight, so each must earn its place. web.dev says lazy-loading offscreen iframes saves data and speeds up the rest of the page. Titles help screen reader users.
**Hint:** Start with the flowchart's question: does it help this page's visitors?

### Q6. Amara quotes a Google guide and adds `cite="https://…"` to the `<blockquote>`, with nothing else. What's missing? *(O2 · scenario)*
- a) A `<q>` element around the `<blockquote>`, to add the quote marks
- b) Nothing, because browsers turn the `cite` value into a visible link
- c) A visible source, as the `cite` attribute isn't meant for readers
- d) A `rel="sponsored"` attribute, because the source is a company

**Answer:** c
**Explanation:** The HTML Standard says the `cite` attribute is "primarily intended for private use … not for readers". So show the source in visible text, with a link if you like.
**Hint:** Would a reader see where the words came from?

### Q7. Spot the error: "I embedded a YouTube video in my 1,500-word blog post, so the post will now appear in Google's video results." *(O3 · spot the error)*
- a) Google can't find videos that are embedded with an `<iframe>`
- b) Video results need a watch page, and a blog post usually isn't one
- c) Blog posts can only appear in video results at over 2,000 words
- d) The video must be uploaded to the site itself, not hosted on YouTube

**Answer:** b
**Explanation:** Google says "The video must be embedded on a watch page", whose "main purpose is to show users a single video". Google can find the `<iframe>`, and the post can still appear as a text result.
**Hint:** What's the main purpose of a blog post?

### Q8. Spot the error: "I wrapped each table in its own `<main>`, so Google knows the tables are the important part." *(spot the error · review: m02-l06)*
- a) A `<main>` can hold only text, so all tables must stay outside it
- b) It should be an `<aside>`, because tables are always side content
- c) It works, but only if every table's `<caption>` is also an `<h1>`
- d) A page can have just one visible `<main>`, for its unique content

**Answer:** d
**Explanation:** As you saw in Lesson 2.6, a page must not have more than one visible `<main>`. The tables can sit inside the one `<main>`, usually in a `<section>` with a heading.
**Hint:** What did the checker say when you added a second `<main>`?
