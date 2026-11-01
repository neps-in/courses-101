# M01.L02 Quiz — Domains, DNS and creator-friendly hosting

> 7 questions · 3 recall, 3 scenario, 1 spot-the-error · includes 1 spaced-review question from M01.L01.
> Facts checked 2026-10-29, re-checked 2026-11-01. PHP support dates, prices and transfer rules change, so re-verify before publishing.

### Q1. Which DNS record points your domain name to your web host's IPv4 address?
- a) MX
- b) TXT
- c) A
- d) CNAME

**Answer:** c
**Explanation:** An **A** record maps a name to an IPv4 address (AAAA does the same for IPv6). MX says where email goes, TXT holds verification and email-security text, and CNAME points one name to another *name*, not to an IP address.
**Hint:** Think "A for Address".

### Q2. What does a DNS record's TTL control?
- a) How long other computers may cache the record before asking again
- b) How many visitors the site can handle at the same time without slowing
- c) How many years the domain stays registered before renewal
- d) How quickly the host's server responds to each page request

**Answer:** a
**Explanation:** TTL (time to live) is a caching time. It's why a DNS change can take a while to show everywhere: some devices keep using the old answer until the TTL runs out. It has nothing to do with traffic capacity, registration length or server speed.
**Hint:** "Time to live" is about how long an answer stays fresh.

### Q3. According to WordPress.org's requirements (checked 2026-10-29), which PHP version should a host offer for a new WordPress site?
- a) PHP 7.4, because WordPress still runs on it
- b) Any version, because WordPress updates PHP for you
- c) PHP 8.1, because it's the most widely tested
- d) PHP 8.3 or newer

**Answer:** d
**Explanation:** WordPress recommends PHP 8.3 or greater. WordPress still runs on PHP 7.4, but that version is end of life and gets no security fixes; PHP 8.1 is also end of life, and 8.2 loses security support at the end of 2026. WordPress doesn't update PHP; your host does.
**Hint:** Check which versions still get security updates.

### Q4. Neha is choosing between two hosts. Host A: ₹149 a month in year one, then ₹499 a month. Host B: ₹349 a month every year, with off-site backups and staging that Host A lacks. Over three years, which is true?
- a) Host A is cheaper by about ₹7,000 over the three years
- b) Host B is cheaper: about ₹12,600 against ₹13,800
- c) The two hosts cost exactly the same over three years
- d) You can't compare them without knowing her traffic

**Answer:** b
**Explanation:** Host A: 12 × ₹149 + 24 × ₹499 = ₹1,788 + ₹11,976 = ₹13,764. Host B: 36 × ₹349 = ₹12,564. Comparing the 3-year cost, including renewals, shows the cheaper-looking deal is more expensive and riskier.
**Hint:** Multiply each monthly price by the months it applies to, then add.

### Q5. Rohan updated his domain's A record to point to his new host an hour ago. He sees the new site, but his friend in another city still sees the old one. What's the most likely reason?
- a) The new host is blocking all visitors coming from his friend's city
- b) The domain transfer to the new host failed part-way
- c) Rohan needs to buy a second domain for other cities
- d) His friend's resolver still has the old record cached (TTL)

**Answer:** d
**Explanation:** DNS answers are cached for up to the record's TTL. Some resolvers still hold the old IP for a while, so different people see different sites. Waiting out the TTL (or lowering it before a planned change) fixes it. No transfer happened; Rohan only edited a record.
**Hint:** What did this lesson say about why DNS changes "propagate"?

### Q6. Spot the error: Fatima's hosting checklist says:
> 1. PHP 8.3 or newer available.
> 2. Free SSL certificate, auto-renewed.
> 3. Daily backups stored on the same server as my site, so restores are fast. This counts as my off-site backup.
> 4. One-click staging.

Which item is wrong?
- a) Item 1
- b) Item 2
- c) Item 3
- d) Item 4

**Answer:** c
**Explanation:** A backup on the same server is not off-site. If the server fails, is hacked or the account is closed, the site and its backups disappear together. Keep at least one copy somewhere else (another storage service). Same-server backups are fine as an *extra* for quick restores.
**Hint:** What happens to those backups if the whole server is lost?

### Q7. (review: m01-l01) A creator wants their own domain, many income streams and full design control, but doesn't want to handle updates and backups. Which option from M01.L01 fits best?
- a) A WordPress.com paid plan or managed WordPress hosting
- b) Substack, with a custom domain and paid subscriptions
- c) Medium, with a membership so it can use a custom domain
- d) A free subdomain on whichever platform has the most readers

**Answer:** a
**Explanation:** WordPress gives the income options and control. A WordPress.com paid plan or managed WordPress hosting handles maintenance for them. Medium and Substack limit plugins and custom pages, and a free subdomain means they don't own the address.
**Hint:** Follow the M01.L01 decision flowchart to its "No, I don't want maintenance" branch.
