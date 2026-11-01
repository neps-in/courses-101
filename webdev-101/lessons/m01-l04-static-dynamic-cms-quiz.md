# M01.L04 Quiz — Static vs Dynamic, Code vs CMS vs No-Code

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 (MDN, W3Techs). Builder prices and export features change; re-verify before publishing.

### Q1. What makes a page **dynamic**? *(O1 · recall)*
- a) It has animations, videos or a sliding image carousel
- b) It is hosted on a paid plan instead of a free one
- c) The server builds it per request, often from a database
- d) It uses JavaScript anywhere on the page

**Answer:** c
**Explanation:** "Dynamic" is about *how the page is made*: server code builds the HTML when someone asks, often from a database. Animations and JavaScript can run on a fully static page, and the hosting plan's price has nothing to do with it.
**Hint:** Think barista (made fresh per order) versus printed leaflet.

### Q2. Which statement about lock-in is most accurate? *(O2 · recall)*
- a) Hand-coded files and WordPress are easy to move; builders vary and are often hardest
- b) All website builders let you export your full site as HTML and CSS
- c) WordPress sites can only run on WordPress.com's own servers
- d) Lock-in only matters for sites with more than 100 pages

**Answer:** a
**Explanation:** Hand-coded files are simply yours, and WordPress exports its content and runs on almost any host. Builders range from partial export (some content, or code without CMS features) to none, so leaving can mean a rebuild. Lock-in matters for a 4-page site too.
**Hint:** Which ones are "just your files"?

### Q3. Zainab runs a bakery and wants an online shop with 60 products, stock counts, discount codes and card payments, launched within two weeks. Which approach fits best? *(O2 · scenario)*
- a) A hand-coded static site with a "buy" link per product
- b) A single-page Webflow site with a contact form
- c) A Wix site with product photos and her phone number
- d) Shopify, or a similar commerce platform

**Answer:** d
**Explanation:** Stock, discounts and payments are exactly what commerce platforms are for, and she needs it fast. Hand-coding a shop is slow and risky, and a contact form or phone number isn't a shop. (WordPress with WooCommerce would also work, with more maintenance.)
**Hint:** The lesson says: don't hand-build a shop.

### Q4. You view the source of a brand site and Ctrl+F finds 180 matches for `/wp-content/` and one `<meta name="generator" content="WordPress 7.1">`. What's the best conclusion? *(O3 · scenario)*
- a) It probably uses WordPress, but you need a paid tool to be sure
- b) It runs WordPress; two independent clues agree
- c) It's a Shopify store that loads a WordPress image
- d) It's a static site, because the source code is visible

**Answer:** b
**Explanation:** Many `/wp-content/` matches plus a WordPress generator tag are strong, independent evidence. A paid tool would add nothing. One stray image might mislead you, but 180 matches won't. Every site's source is visible, static or dynamic, because the browser always receives HTML.
**Hint:** How many clues agree, and how many matches?

### Q5. Nila Coffee's launch page has one page of text and images, changes about once a month, and sends sign-ups to Formspree. Which description is most accurate? *(O1 · scenario)*
- a) Fully dynamic, because a form sends data
- b) Dynamic, because it changes once a month
- c) A static page with a dynamic part run by an outside service
- d) Neither, because pages with forms need a CMS

**Answer:** c
**Explanation:** The page itself is the same saved file for everyone, so it's static. The form posts data to Formspree, which runs its own server code. That's the common "static + dynamic parts" pattern. Changing once a month doesn't make it dynamic (you just re-upload the file), and forms don't need a CMS.
**Hint:** Where does the code that *receives* the form actually run?

### Q6. Spot the error. A consultant's advice to a client:
> "Your site is five pages that change twice a year. Put it on WordPress with shared hosting so it's dynamic, because dynamic sites are always faster and more secure than static ones." *(O2 · spot-the-error)*

What's wrong?
- a) WordPress can't be installed on shared hosting
- b) Static sites are usually faster and more secure, since no code runs per request
- c) A five-page site is too small for any kind of hosting
- d) Shared hosting can only serve sites built with a website builder

**Answer:** b
**Explanation:** The reasoning is backwards. A static site just sends saved files, so there's less to slow it down and less to attack. Dynamic sites run code and a database on every uncached request, and need updates and security work. WordPress *can* run on shared hosting, but for five rarely changing pages a static site (or a simple builder) is the better fit.
**Hint:** Which kind of site has fewer moving parts on the server?

### Q7. *(review: m01-l03)* A page has moved for good to a new URL. Which status code should the old URL return? *(O1 of M01.L03 · recall)*
- a) 302 Found
- b) 404 Not Found
- c) 500 Internal Server Error
- d) 301 Moved Permanently

**Answer:** d
**Explanation:** 301 tells browsers and search engines the move is permanent, so they go to the new URL and search signals follow. 302 is for temporary moves, 404 means nothing is there, and 500 is a server failure.
**Hint:** Permanent move.
