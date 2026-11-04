# M02.L01 Quiz — How Websites Work: Browsers, Servers, Hosting, Domains and IP Addresses

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Each question is tagged with the objective it tests (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-04 against MDN (how the web works, domain names, web servers), ICANN's glossary and Google Search Central (HTTP status codes, hosting changes, multi-regional sites).

### Q1. What does DNS do when a page loads? *(O1 · recall)*
- a) It stores the site's files and sends them to the browser
- b) It encrypts the connection between browser and web server
- c) It finds the IP address that belongs to a domain name
- d) It builds the page on screen from the HTML and CSS files

**Answer:** c
**Explanation:** MDN calls DNS "an address book for websites": the browser uses it to find the server's IP address. Option a describes a web server, b describes HTTPS and d describes the browser.
**Hint:** Think of the shop analogy. Which part is the address book?

### Q2. Which statement about a domain name is correct? *(O1 · recall)*
- a) You pay for the right to use it for a set period
- b) You own it for life after the first payment is made
- c) Your web host owns it and lends it to you with hosting
- d) It's free to use as long as the website stays online

**Answer:** a
**Explanation:** MDN says "you pay for the right to use a domain name for one or more years", and that you never own it. It has to be renewed through a registrar.
**Hint:** Is a domain more like buying a house or renting one?

### Q3. What does a registrar do? *(O1 · recall)*
- a) It stores your site's files on a server that's always online
- b) It lets you register a domain and passes it to the registry
- c) It keeps your pages in Google's index and checks their quality
- d) It assigns a new IP address to each visitor who loads your page

**Answer:** b
**Explanation:** ICANN describes a registrar as an organisation through which people register domain names, and which submits the name to the registry operator. Option a describes a host.
**Hint:** The name comes from the word "register".

### Q4. Kavya's site works, but a designer says, "Add this TXT record at your DNS provider." Which lookup tells her where to go? *(O2 · scenario)*
- a) The Remote Address in DevTools, as it shows the server that answered
- b) The status code of her homepage, as it shows the server is running
- c) The IP owner in ARIN's search, as it shows the network the site uses
- d) The NS records for her domain, as they show who runs her DNS records

**Answer:** d
**Explanation:** NS records list the nameservers, which hold the DNS records. Their names often show the provider. The other tools tell her about the server, which may be with a different company.
**Hint:** Which record type names the computers that hold the DNS records?

### Q5. Tomás's site has returned `503` errors for four days. Dig shows the correct A record. What's the most likely effect on Google Search, and whom should he contact? *(O3 · scenario)*
- a) Google slows crawling and may eventually drop pages; contact the host
- b) Google removes all pages on the first error; contact the domain registrar
- c) Google ignores the errors as long as the site has a sitemap; contact no one
- d) Google lowers the rank of every other site on the same IP; contact Google

**Answer:** a
**Explanation:** DNS works, so the problem is at the server: contact the host. Google says server errors make its crawlers slow down, and that indexed URLs are preserved "but eventually dropped" if errors persist. Nothing is removed on the first error.
**Hint:** The name resolves. So which layer comes next?

### Q6. Amara's client is told, "Move to a dedicated server with its own IP or your rankings will suffer." The site is fast and has had no outages. What should Amara advise? *(O3 · scenario)*
- a) Move now, since a dedicated IP is a confirmed ranking factor
- b) Move only the images, since those are what Google crawls first
- c) Stay for now, since there's no evidence of a problem to fix
- d) Stay, but change the IP address every month to stay safe

**Answer:** c
**Explanation:** Change hosts when you have evidence, such as downtime, errors or slow server responses. Google's John Mueller has said publicly that shared hosting and shared IPs are fine. A move adds risk and a short crawl dip with no benefit here.
**Hint:** The lesson's rule for moving hosts starts with "when you have evidence".

### Q7. Spot the error in this advice: "Your domain renewed last month, so your site can't go offline. Your registrar, your DNS and your host are always the same company, so one login covers it all." *(O1 · spot the error)*
- a) Domains don't need renewing if the hosting has already been paid for
- b) Those three can be different companies, and each one can fail on its own
- c) A registrar can't be the same company as the one that runs your DNS
- d) Sites can only go offline if the domain name registration has expired

**Answer:** b
**Explanation:** Registrar, DNS provider and host can be one company or three. A renewed domain doesn't protect you from a hosting failure, so you need to know who runs each part. Option c is wrong because one company can provide both.
**Hint:** How many companies could be involved in one website?

### Q8. Spot the error: "Our server returned a `200` status when Googlebot asked for the page, so the page is guaranteed to be indexed." *(O3 · spot the error · review: m01-l04)*
- a) A `200` status means that the page wasn't found on the server
- b) Googlebot doesn't request pages, so it can't get a status code
- c) Only `301` responses can be indexed by Google, and not `200`
- d) A `200` allows indexing, but Google still decides what to keep

**Answer:** d
**Explanation:** Google says a 2xx status "doesn't guarantee indexing". As you saw in Lesson 1.4, a crawled page must still pass the index step, where Google decides whether to keep it.
**Hint:** In Lesson 1.4, what comes after crawling?
