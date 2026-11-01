# M01.L02 Quiz — URLs, Domains & DNS

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 (MDN, ICANN RDAP announcement, Google Admin Toolbox).

### Q1. In `https://blog.nilacoffee.example/recipes/cold-brew?utm_source=email#step-3`, which part is the path? *(O1 · recall)*
- a) `blog.nilacoffee.example`
- b) `/recipes/cold-brew`
- c) `?utm_source=email`
- d) `#step-3`

**Answer:** b
**Explanation:** The path comes after the domain and before the `?`. It says which page on the site you want. `blog.nilacoffee.example` is the subdomain + domain + TLD, `?utm_source=email` is the query string, and `#step-3` is the fragment.
**Hint:** The path starts with the first `/` after the domain.

### Q2. What does a DNS **CNAME** record do? *(O2 · recall)*
- a) It sends the domain's email to a list of mail servers
- b) It stores text that proves you own the domain
- c) It points the name straight at an IPv6 address
- d) It makes one name an alias that points to another name

**Answer:** d
**Explanation:** A CNAME says "this name is another name", for example `www.nilacoffee.example` → `nilacoffee.github.io`. Email routing is MX, ownership proof is usually TXT, and IPv6 addresses are AAAA records.
**Hint:** In Part B you looked up `www.github.com`. What did it point to?

### Q3. Fatima's team changed the A record for their launch page an hour ago. Dig already shows the new IP, but on her laptop the old page still loads. What's the most likely reason? *(O2 · scenario)*
- a) Her device or resolver cached the old answer and its TTL hasn't run out
- b) The registrar rejected the change and quietly restored the old record
- c) A records only update once a day at midnight in the registry's time zone
- d) Her browser needs a new IP address for her own laptop

**Answer:** a
**Explanation:** Resolvers and devices keep a DNS answer for its TTL. Until that time runs out, some people still get the old IP. Dig asks fresh, so it sees the new value first. Waiting, switching network or flushing the cache fixes it. There's no daily update window.
**Hint:** What does "time to live" control?

### Q4. Joon is about to share this link in a newsletter: `https://nilacoffee.example/launch#offer?utm_source=newsletter&utm_campaign=launch`. Analytics later shows almost none of these clicks as "newsletter". Why? *(O1 · scenario)*
- a) Newsletters can't carry UTM tags, so analytics ignores them
- b) The `https` scheme hides UTM tags from analytics tools
- c) The UTMs sit after the `#`, so they're part of the fragment, not the query
- d) `utm_campaign` must always come before `utm_source`

**Answer:** c
**Explanation:** Everything after `#` is the fragment, which is never sent to the server and isn't read as a query string. The correct link puts the query first: `/launch?utm_source=newsletter&utm_campaign=launch#offer`. The order of the UTM pairs doesn't matter, and HTTPS doesn't hide them.
**Hint:** Which character starts the fragment, and what happens to everything after it?

### Q5. You want to know which company a brand registered its `.com` domain through, and when it expires. Which free tool gives the official answer today? *(O3 · scenario)*
- a) Google Admin Toolbox Dig, using record type MX
- b) A WHOIS website, since WHOIS is still the required source
- c) The brand's website footer and its privacy page
- d) ICANN Lookup (lookup.icann.org), which uses RDAP

**Answer:** d
**Explanation:** Since 28 January 2025, RDAP has been the authoritative source for generic TLD registration data, and ICANN Lookup uses it. Dig shows DNS records (MX = email servers), not who registered the domain. Many older guides still say WHOIS, which is outdated for gTLDs.
**Hint:** The freshness flag at the top of the lesson names the change.

### Q6. Spot the error. A marketer types `https://nilacofee.example` and sees "This site can't be reached — DNS_PROBE_FINISHED_NXDOMAIN". They conclude: "The server crashed. I'll ask the host to restart it." What's wrong with this conclusion? *(O2 · spot-the-error)*
- a) NXDOMAIN means DNS found no such domain, so no server was contacted at all
- b) NXDOMAIN always means the domain has expired and must be renewed
- c) The error proves the host's server is fine but the page was deleted
- d) The error only happens on Chrome, so it isn't a real problem

**Answer:** a
**Explanation:** NXDOMAIN = "no such domain". DNS couldn't find the name, so no request ever reached a server; here the cause is a typo (`nilacofee`). An expired domain is one possible cause, not the only one. A deleted page would give the *site's* own 404 page, and every browser shows some form of this error.
**Hint:** Read the address bar letter by letter. Then remember Lesson 1.1: who wrote this error page?

### Q7. *(review: m01-l01)* Which activity is the clearest example of the Web, rather than another Internet service? *(O1 of M01.L01 · recall)*
- a) Sending a text message from a phone's messaging app
- b) Joining a video call in a desktop meeting app
- c) Opening a news article from its URL in Firefox
- d) Downloading new game levels on a console

**Answer:** c
**Explanation:** A page with a URL, opened in a browser, is the Web. The messaging app, the meeting app and the console all use the Internet, but they aren't web pages in a browser.
**Hint:** Use Lesson 1.1's working rule: URL + browser = Web.
