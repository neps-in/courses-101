# M14.L04 Quiz — Spam Policies in Depth, Manual Actions and Reconsideration

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-10 against Google's *Spam policies for Google web search* (2026-08-28), Search Central blog posts (March 2024, April 2026, August 2026), and Search Console Help's Manual actions and Security issues pages.

### Q1. According to Google, when is mass-producing pages "scaled content abuse"? *(O1 · recall)*
- a) Only when the pages were written by generative AI tools
- b) Only when more than 1,000 pages are published in a month
- c) When made mainly to manipulate rankings, however created
- d) Only when the pages are copied from a competitor's site

**Answer:** c
**Explanation:** "Scaled content abuse is when many pages are generated for the primary purpose of manipulating search rankings and not helping users", "no matter how it's created". AI, humans or a mix: the purpose and the value decide.
**Hint:** Purpose and value, not the tool.

### Q2. When did Google start enforcing the back button hijacking policy? *(O1 · recall)*
- a) 15 June 2026
- b) 5 March 2024
- c) 19 November 2024
- d) 30 August 2026

**Answer:** a
**Explanation:** Google added it on 13 April 2026 and published it "two months in advance of enforcement on June 15, 2026." 5 March 2024 brought scaled content and expired domains; 30 August 2026 is the site reputation EEA change.
**Hint:** Announced in April, with two months' notice.

### Q3. What is the main test in the 2026 site reputation policy? *(O1 · recall)*
- a) Whether the host site earns any money from the content
- b) Whether the third-party content has a named author byline
- c) Whether the page is published on a subdomain or a subfolder
- d) Whether the content is fully integrated with the main site

**Answer:** d
**Explanation:** Google looks at "sufficient input, editorial oversight, or contribution from the host site to be considered fully integrated with the main site", using presentation, quality, authorship and duplication, and "not one of these factors is either necessary or sufficient on its own".
**Hint:** Does it really belong to the host site?

### Q4. Tomás's Manual actions report shows "Thin content with little or no added value" on 40 affiliate pages. He fixes 25 and files a request. What happens? *(O3 · scenario)*
- a) His 25 fixed pages return to search results within a week
- b) No partial return; he must fix all affected pages first
- c) Google fixes the remaining 15 pages for him automatically
- d) The manual action becomes an algorithmic demotion instead

**Answer:** b
**Explanation:** "Fixing the issue on just some pages will not earn you a partial return to search results." Fix every page in the pattern, keep the fixes visible, then submit once.
**Hint:** Google doesn't give partial credit.

### Q5. Kavya's visitors see a browser warning before her site loads, but her Manual actions report is clear. Where should she look? *(O2 · scenario)*
- a) The Status Dashboard, for a spam update
- b) The Security issues report in Search Console
- c) Her Core Web Vitals report on mobile
- d) The Links report for unnatural links

**Answer:** b
**Explanation:** Warnings to users point to hacks, malware or social engineering, which appear in the Security issues report. Google says to "rely on the Security Issues report as the source of truth" for these.
**Hint:** Harm to visitors, not ranking manipulation.

### Q6. Nila wants to buy an expired domain. Which plan is fine under Google's policy? *(O2 · scenario)*
- a) A defunct charity's domain, reused for affiliate coffee-machine pages
- b) A former school's domain, redirected to her shop for its links
- c) A dead news site's domain, filled with AI pages on its old topics
- d) A short, memorable name for a new, original site for her customers

**Answer:** d
**Explanation:** "It's fine to use an old domain name for a new, original site that's designed to serve people first." The others repurpose a domain's reputation for low-value or unrelated content, which is expired domain abuse.
**Hint:** New, original, people first.

### Q7. Spot the error. After a site reputation manual action, an agency writes: "Easy fix: we'll move the sponsored section to `deals.tomashardware.pt` and keep publishing it." What's wrong? *(O3 · spot the error)*
- a) Moving it to a subdomain may count as circumvention
- b) Nothing; subdomains are always treated as separate sites
- c) Only the subdomain's name is wrong; use a subfolder
- d) It's fine as long as the request mentions the move

**Answer:** a
**Explanation:** Google warns that "Moving to a subdomain/subdirectory may be viewed as an attempt to circumvent our spam policy". Policy circumvention is its own violation, and the content's purpose hasn't changed.
**Hint:** Same practice, new address.

### Q8. Spot the error. A client says: "We don't have a manual action, so Google can't have demoted us for spam." What's wrong? *(review: m01-l06 · spot the error)*
- a) Nothing; spam is only ever handled by human reviewers
- b) Manual actions are hidden until you file a request
- c) Algorithms can demote spam without a manual action
- d) Only the Security issues report shows spam demotions

**Answer:** c
**Explanation:** Google detects spam "both through automated systems and, as needed, human review". Algorithmic demotions, including those from spam updates, show no message or report.
**Hint:** Referee versus replay system.
