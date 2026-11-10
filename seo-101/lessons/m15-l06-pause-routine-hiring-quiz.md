# M15.L06 Quiz — Pausing a Site, the Monthly Routine and Hiring Help

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-11 against Google's *Temporarily pause or disable a website* (2025-12-10), *Reduce the Google crawl rate* (2026-10-06) and *Do you need an SEO?* (2026-06-05). The monthly routine is a course rule.

### Q1. What does Google recommend for a business that will reopen after a temporary closure? *(O1 · recall)*
- a) Return 404 for every page until the business reopens
- b) Keep the site online and limit its functionality
- c) Use the Removals tool to hide the site for now
- d) Add `noindex` to every page until reopening

**Answer:** b
**Explanation:** "we recommend that you keep your site online and limit the functionality", for example by disabling the cart. 404s, `noindex` and Removals all take pages out of Search.
**Hint:** The shop sign stays on the door.

### Q2. A server upgrade will take the site down for a few hours. What should robots.txt return? *(O1 · recall)*
- a) 503, the same status as every other page on the site
- b) 404, so Google skips robots.txt for the day
- c) 200, so crawling isn't blocked during the outage
- d) 410, to show the closure is only temporary

**Answer:** c
**Explanation:** Pages can return 503 with Retry-After for a short outage, but "Don't return a 503 HTTP response status code for the robots.txt file because this blocks all crawling."
**Hint:** One file must keep working.

### Q3. Which audit steps does the monthly routine keep? *(O2 · recall)*
- a) Steps 1, 2 and 9: indexing, crawling, policies
- b) All nine steps, every month, on a fixed day
- c) None; the monthly report replaces any checks
- d) 4 (on-page), 6 (structured data) and 7 (links)

**Answer:** a
**Explanation:** Steps 1, 2 and 9 catch silent breakage (a stray `noindex`, new 404s, hacked pages, manual actions) that can remove pages fast. The rest move to quarterly or yearly checks.
**Hint:** What can break without anyone noticing?

### Q4. Kavya closes her studio for three weeks. Which plan fits Google's guidance? *(O1 · scenario)*
- a) `noindex` on every class page, removed when she reopens
- b) A maintenance plugin showing a 503 page for the full three weeks
- c) Bookings off, banner, Profile set to Temporarily closed
- d) Take the site offline and resubmit the sitemap on her return

**Answer:** c
**Explanation:** Limit functionality and keep pages online. Three weeks of 503s risks URLs being "dropped from Google's index"; `noindex` and taking the site down remove pages, and recovery has "no mechanism to speed that up".
**Hint:** Doors closed, lights on.

### Q5. A provider says their AI audit tool is "approved by Google". What does Google say? *(O3 · scenario)*
- a) Approved tools are listed on Google's official partner page
- b) Google endorses no SEO tools; none see its ranking data
- c) Tools are approved once they pass Search Essentials
- d) Only Google-approved tools may run AEO or GEO audits

**Answer:** b
**Explanation:** "Google doesn't evaluate or endorse third-party SEO tools, and these tools don't have access to Google's internal ranking data." Google also warns about tools claiming to be "approved".
**Hint:** No such approval exists.

### Q6. Amara is interviewing an agency for a client. Which question is one Google suggests? *(O3 · scenario)*
- a) "Can you guarantee us the first position in Google Search?"
- b) "Do you have a special contact inside Google Search?"
- c) "How many backlinks can you buy for us each month?"
- d) "What results do you expect, and in what timeframe?"

**Answer:** d
**Explanation:** Google lists "What kind of results do you expect to see, and in what timeframe?" The others invite red flags: guarantees, a "special relationship" with Google, and link buying.
**Hint:** A fair question with no promises in it.

### Q7. Spot the error. "Our beans are sold out for a month, so we've deleted the product pages and will recreate them later." What's wrong? *(O1 · spot the error)*
- a) The pages should have been redirected to the home page
- b) Nothing; empty product pages hurt the rest of the site
- c) They should use a 410 status so Google knows it's temporary
- d) Keep the pages and mark them out of stock instead

**Answer:** d
**Explanation:** Google: "It's better to still allow that page, and mark it out of stock." Deleting them loses their indexing and links, and a 410 means "gone", not "temporary".
**Hint:** Sold out isn't gone.

### Q8. Spot the error. "We moved domain in March and removed all the old redirects in September, since the Change of Address window was 180 days." What's wrong? *(review: m15-l05 · spot the error)*
- a) Keep redirects at least a year, ideally for good
- b) Nothing; 180 days is exactly what Google requires
- c) They should have kept the redirects for 90 more days only
- d) Redirects aren't needed once Change of Address is used

**Answer:** a
**Explanation:** 180 days is the tool's window and a minimum. The site-move guide says "generally at least 1 year" and, for users, "consider keeping redirects indefinitely". Renew the old domain too.
**Hint:** The tool's window isn't the redirect's lifetime.
