# M12.L01 Quiz — Core Web Vitals: Read Field Data First

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Search Central (Core Web Vitals, page experience), web.dev (Web Vitals, LCP, INP, CLS, lab vs field), PageSpeed Insights "About", CrUX methodology and Search Console Help.

### Q1. What is the "good" threshold for INP? *(O1 · recall)*
- a) 100 milliseconds or less, as with the old FID
- b) 2.5 seconds or less from the start of loading
- c) 0.1 or less across the whole page visit
- d) 200 milliseconds or less at the 75th percentile

**Answer:** d
**Explanation:** PSI's good range for INP is [0, 200ms], judged at the 75th percentile. 2.5 s is LCP, 0.1 is CLS, and FID was retired in March 2024.
**Hint:** Responsiveness, in milliseconds.

### Q2. Which metric can a lab tool like Lighthouse NOT measure? *(O2 · recall)*
- a) INP, because there's no real user input
- b) LCP, because the page has no real visitors
- c) CLS, because shifts only happen on phones
- d) TBT, because it needs 28 days of data

**Answer:** a
**Explanation:** Lab tools "cannot measure INP, as there is no user input". TBT "is lab-measurable and is a proxy for INP".
**Hint:** Who's tapping?

### Q3. How does Search Console set a URL group's status? *(O3 · recall)*
- a) By the average of LCP, INP and CLS together
- b) By its worst-performing metric of the three
- c) By the Lighthouse Performance score of the group
- d) By the fastest page in the group of URLs

**Answer:** b
**Explanation:** "the URL group's status is its most poorly performing metric". Good LCP and CLS with poor INP means Poor.
**Hint:** Weakest link.

### Q4. Nila's product page has field LCP 2.3 s, INP 180 ms and CLS 0.14. What's the result? *(O1 · scenario)*
- a) Pass: two of the three metrics are good
- b) Pass: LCP is under 2.5 seconds, which is all that counts
- c) Fail: CLS is over 0.1, so it needs improvement
- d) Fail: INP must be under 100 ms for product pages

**Answer:** c
**Explanation:** A page passes only when all three meet the targets at the 75th percentile. CLS 0.14 is in "needs improvement" (over 0.1 up to 0.25).
**Hint:** All three.

### Q5. Kavya's small site shows no field data in PSI or Search Console. What should her report say? *(O2 · scenario)*
- a) "Our site fails Core Web Vitals, so Google ignores it."
- b) "No field data as of <date>; lab results are one test."
- c) "Our Performance score of 72 is our Core Web Vitals."
- d) "We submitted the site to CrUX to get data next week."

**Answer:** b
**Explanation:** "No data available" is normal for small sites. Pages can't be submitted to CrUX ("you cannot manually submit pages or origins"). Label lab data as lab.
**Hint:** Say what you have.

### Q6. A developer quotes "Performance 58 on mobile" and asks for ₹60,000 to fix speed. What's the best first step? *(O3 · scenario)*
- a) Approve it at once, as 58 means Google will bury the site
- b) Ask for a score of 100 before paying anything at all
- c) Ignore speed entirely, as only content affects rankings
- d) Check field CWV for key templates before deciding

**Answer:** d
**Explanation:** The score is a lab summary, not a Core Web Vital. Check real-user data first; Google says chasing a perfect score "just for SEO reasons may not be the best use of your time".
**Hint:** Field first.

### Q7. Spot the error. A speed report says: "Our page experience is great: Lighthouse lab LCP 1.9 s beats our competitor's field LCP 2.8 s." What's wrong? *(O2 · spot-the-error)*
- a) It compares lab with field data
- b) LCP isn't a Core Web Vital any more
- c) Lighthouse only measures desktop pages
- d) Nothing; 1.9 s is lower than 2.8 s

**Answer:** a
**Explanation:** Compare lab with lab and field with field (Lesson 10.2). Lab is one simulated run; field is real users over 28 days.
**Hint:** Like with like.

### Q8. Spot the error. *(review: m11-l05)* Nila's tasting-room page markup has `"telephone": "98XXXXXXXX"` and `aggregateRating` copied from her Google reviews. What's wrong?
- a) Nothing; both help the page get star snippets
- b) Telephone must be left out of LocalBusiness markup
- c) No country code, and self-serving review stars
- d) Ratings must be updated every day to stay valid

**Answer:** c
**Explanation:** Google asks to "include the country code and area code", and `aggregateRating` "is only recommended for sites that capture reviews about other local businesses".
**Hint:** Two slips.
