# M01.L03 Quiz — Hosting & How a Page Loads

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 (MDN status codes, Google "HTTPS by default" and Chrome 154 release notes, ISRG certificate lifetimes).

### Q1. A server answers a request with status code **404**. What does that mean? *(O1 · recall)*
- a) The page has moved to a new address for good
- b) The server crashed while building the page
- c) The browser is offline and can't send requests
- d) The server is working but has no file at that URL

**Answer:** d
**Explanation:** 4xx codes mean a problem with the request, and 404 specifically means "nothing here". The server is up, because it answered. A permanent move is 301, a server crash is usually 500, and an offline browser gets no status code at all, just its own error page.
**Hint:** It's in the 4xx family. Did a server answer or not?

### Q2. Which list correctly describes what HTTPS adds over HTTP? *(O2 · recall)*
- a) Faster pages, better rankings and a guarantee the business is honest
- b) Privacy, integrity, and proof the server belongs to that domain
- c) A built-in firewall, virus scanning and automatic backups
- d) Encryption of the files stored on the server's hard drive

**Answer:** b
**Explanation:** HTTPS (HTTP over TLS) keeps the data private on the way, stops it being changed on the way, and uses a certificate to prove the server belongs to the domain. It doesn't prove the business is honest (scam sites have certificates too), it isn't a firewall or backup, and it protects data *in transit*, not files stored on the server.
**Hint:** Think "private booth + ID check" from the analogy.

### Q3. Nila Coffee is moving its subscription page from `/subscribe` to `/subscriptions/monthly` for good. The old URL is in hundreds of Instagram posts. What should the team set up? *(O1 · scenario)*
- a) A 302 redirect, so search engines keep showing the old URL
- b) A 404 page on `/subscribe` with a link to the new page
- c) A 301 redirect from `/subscribe` to `/subscriptions/monthly`
- d) Nothing, because browsers find moved pages automatically

**Answer:** c
**Explanation:** It's a permanent change, so a 301 sends every old link straight to the new page, and search engines move the old URL's signals to it. A 302 tells search engines the move is temporary. A 404 page adds a frustrating extra click for every visitor. Browsers can't guess new URLs.
**Hint:** Permanent or temporary move?

### Q4. Rahul needs a one-page product launch page: text, images, a sign-up form handled by an outside form service. No logins, no database, a tiny budget. Which hosting fits best? *(O3 · scenario)*
- a) Static hosting on a free tier, such as Netlify or Cloudflare Pages
- b) A cloud virtual server he configures himself
- c) Managed WordPress hosting at about $25 a month
- d) Shared hosting, so he can install a database later

**Answer:** a
**Explanation:** The page is the same for every visitor and needs no server code, so static hosting fits. It's free, includes HTTPS and a CDN, and needs little upkeep. A cloud server needs technical skills he doesn't need here, and managed WordPress or shared hosting pay for features (PHP, a database) the page won't use.
**Hint:** Does anything on this page change per visitor?

### Q5. Ana opens a site and her browser says "Your connection is not private" with an error starting `NET::ERR_CERT_`. Other people load the same site without problems. What should she check first? *(O2 · scenario)*
- a) Whether the site's server is down for maintenance (503)
- b) Whether her computer's date and time are set correctly
- c) Whether the page was moved without a redirect (404)
- d) Whether her browser cache needs clearing to show HTTPS

**Answer:** b
**Explanation:** Certificates are valid between two dates, so a wrong device clock makes a valid certificate look expired or not yet valid. If others load the site fine, the certificate itself is probably okay. A 503 or 404 is a server response, not a certificate warning, and clearing the cache doesn't change how the browser checks the certificate.
**Hint:** A certificate has "valid from" and "valid to" dates. What on *her* device decides "now"?

### Q6. Spot the error. A marketer reviews their site's redirects:
> `http://www.brand.example` → 301 → `https://www.brand.example` → 301 → `https://brand.example` → 302 → `https://brand.example/home`
>
> "All visitors end up on the homepage over HTTPS, so this is fine." *(O1 · spot-the-error)*

What's the main problem?
- a) Redirects only work on `http://` URLs, so the later hops are ignored
- b) HTTPS pages can never send redirects, only HTTP pages can
- c) Search engines refuse to follow more than one redirect in total
- d) It's a three-hop chain ending in a temporary 302; it should be one 301

**Answer:** d
**Explanation:** Each hop adds delay, and the last hop is a temporary 302, so search engines may keep treating `https://brand.example` as the main URL. Best practice is one permanent 301 from every variant straight to the final URL. HTTPS pages can redirect, and search engines do follow chains; they're just slower and messier.
**Hint:** Count the hops, then look at the last status code.

### Q7. *(review: m01-l02)* Which DNS record tells the world where email for `nilacoffee.example` should be delivered? *(O2 of M01.L02 · recall)*
- a) MX record
- b) CNAME record
- c) A record
- d) NS record

**Answer:** a
**Explanation:** MX records list a domain's mail servers. A points a name at an IPv4 address, CNAME makes one name an alias of another, and NS lists the nameservers that hold the domain's records.
**Hint:** M for *mail*.
