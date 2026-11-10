# M15.L04 Quiz — Client-Ready Report and Fix Tickets

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-11 against Google's *Do you need an SEO?* (2026-06-05) and SEO Starter Guide (2025-12-10); ticket fields from Sitebulb and Search Engine Journal (observed practice).

### Q1. What belongs on page one of the course's audit report? *(O1 · recall)*
- a) The full crawl export, so nothing is hidden
- b) Headline, top findings, the plan and caveats
- c) A technical glossary of every term used
- d) The tool's overall site health score

**Answer:** b
**Explanation:** Page one is what the owner reads: a headline, 3–5 findings in business language, the 30/60/90 plan in three lines and the caveats. The export goes in the appendix; a tool score isn't a finding.
**Hint:** What a busy owner needs to decide.

### Q2. Which three headings does Sitebulb's ticket guide use? *(O2 · recall)*
- a) Problem, Priority and Owner
- b) Summary, Screenshot and Deadline
- c) Background, Work to be done and Completion criteria
- d) Issue, Tool score and Estimated monthly traffic gain

**Answer:** c
**Explanation:** Background (why it matters), Work to be done (what, where, before and after) and Completion criteria (the agreed definition of done). The course adds owner, due date, status and after-check.
**Hint:** Why, what, and how you'll know.

### Q3. When does a ticket move from "Pending review" to "Done"? *(O2 · recall)*
- a) When the worker says the change has been made
- b) When the invoice for the work has been paid
- c) When rankings for the page have improved
- d) When your completion test has passed

**Answer:** d
**Explanation:** Pending review means the worker says it's done. Only a passed test moves it to Done. Ranking changes come later and are measured at the after-check, not used to close a ticket.
**Hint:** Trust, but test.

### Q4. Which completion criteria could anyone check with a free tool? *(O2 · scenario)*
- a) "`curl -I` old URL: one 301 to /menu/, which returns 200"
- b) "The redirect has been set up properly and is working fine now"
- c) "Google is happy with the new menu page now"
- d) "The SEO health score for the menu page is above 90"

**Answer:** a
**Explanation:** It names a tool, a URL and a pass result. The others can't be tested ("properly", "happy") or depend on a third-party score Google doesn't use.
**Hint:** A test with a pass result.

### Q5. Nila's draft summary says "Fixes will double your traffic by spring." What should she do? *(O3 · scenario)*
- a) Keep it; confident reports win more clients
- b) Replace it with realistic estimates and caveats
- c) Move it to the appendix so it's less visible
- d) Keep it, but add "probably" before "double"

**Answer:** b
**Explanation:** Google tells owners: "If they guarantee you that their changes will give you first place in search results, find someone else." An audit should give "realistic estimates of improvement", with caveats about timing and uncertainty.
**Hint:** Google's red flag.

### Q6. A developer removed a `noindex`, but URL Inspection's indexed result still shows "Excluded by 'noindex' tag". What next? *(O2 · scenario)*
- a) Reopen the ticket and ask the developer to do it again
- b) Add a second `index` tag to force the change
- c) Run the live test; if indexing is allowed, the fix is live
- d) Submit a reconsideration request to Google

**Answer:** c
**Explanation:** The indexed result reflects Google's last crawl. The live test checks the page now. If it allows indexing, the fix passed; the indexed result updates after a recrawl. Reconsideration is only for manual actions.
**Hint:** Now vs last crawl.

### Q7. Spot the error. A ticket reads: "T-04 Fix all SEO issues on product pages. Done when the pages are better." What's wrong? *(O2 · spot the error)*
- a) Only that the ID should be T-01, not T-04
- b) Product pages shouldn't have SEO tickets at all
- c) Nothing; developers prefer short and open tickets
- d) Many tasks in one ticket, and no testable criteria

**Answer:** d
**Explanation:** One task per ticket ("It's also essential to make each request one separate ticket"), and completion criteria must be a test with a pass result. "Better" can't be checked.
**Hint:** How many tasks, and how would you test "better"?

### Q8. Spot the error. "A sitewide hacked-content finding scored 7, so we put it in Days 31–60." What's wrong? *(review: m15-l03 · spot the error)*
- a) The score should have been 9, not 7
- b) Security findings aren't part of an SEO audit
- c) It's blocking: unscored, straight into Days 1–30
- d) It should go in Days 61–90 because it's a big job

**Answer:** c
**Explanation:** Hacked content means the site can't be trusted and visitors are at risk, so it passes the gate as blocking. It goes into Days 1–30 without a score.
**Hint:** The gate comes before the score.
