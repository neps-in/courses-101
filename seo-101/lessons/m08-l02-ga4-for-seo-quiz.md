# M08.L02 Quiz — GA4 for SEO: Organic Traffic, Landing Pages and Key Events

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Analytics Help (traffic acquisition, channel groups, landing page, key events, internal traffic, data filters, retention, thresholds, Search Console reports, annotations) and Search Central's GA and Search Console guide.

### Q1. In GA4, which channel includes visits from Google's AI Overviews and AI Mode? *(O1 · recall)*
- a) The AI Assistant channel, together with ChatGPT and Gemini
- b) The Direct channel, because AI answers don't pass a referrer
- c) The Referral channel, because AI features count as other sites
- d) The Organic Search channel, with other non-ad Google results

**Answer:** d
**Explanation:** Organic Search covers "non-ad links in organic-search results, including Google's AI Overviews and AI Mode". The AI Assistant channel "excludes Google's AI Overviews and AI Mode".
**Hint:** Google's own AI features are still Google Search.

### Q2. What are "key events" in GA4? *(O2 · recall)*
- a) Every event GA4 collects automatically, such as page views
- b) Business-critical events you mark, formerly called conversions
- c) Events that Google Ads chooses for you based on your ad spend
- d) Events that only happen on the home page of a website or app

**Answer:** b
**Explanation:** Since March 2024, "events that measure actions that are important to the success of your business are now called 'key events.'" You mark them with the star icon in **Admin → Data display → Events**.
**Hint:** You choose them.

### Q3. What happens when you switch a GA4 data filter from Testing to Active? *(O3 · recall)*
- a) It permanently changes incoming data, and doesn't change past data
- b) It removes matching visits from all your historical data at once
- c) It can be undone later, and the filtered visits will come back
- d) It applies only to Explorations, not to the standard reports

**Answer:** a
**Explanation:** "Once you apply a data filter, the effect on the data is permanent." And: "Data filters do not affect historical data." That's why you test first.
**Hint:** Test before you commit.

### Q4. Nila's cold brew guide has 400 organic sessions and 0 key events. What should she check first? *(O2 · scenario)*
- a) Whether the guide has enough words to count as a key event
- b) Whether Search Console has indexed the guide in the last week
- c) Whether a key event exists and is marked, and the guide links on
- d) Whether GA4's retention is set to 2 months instead of 14 months

**Answer:** c
**Explanation:** Zero key events usually means none is set up (or the event isn't sent), or the page doesn't lead to the next step. Retention doesn't affect standard reports.
**Hint:** Is anything there to count?

### Q5. Kavya wants to see which pages Google searchers land on first. Which report and filter? *(O1 · scenario)*
- a) Realtime, filtered to visitors who are on the site right now
- b) Landing page, filtered to Session source / medium `google / organic`
- c) Traffic acquisition, filtered to the Direct channel only
- d) Events, filtered to the `page_view` event with no other filters

**Answer:** b
**Explanation:** Google suggests a "Landing page report with a filter to include only sessions from google organic". The landing page is "the first pageview in a session".
**Hint:** Where did the visit start, and where from?

### Q6. Tomás's GA4 Search Console report shows missing query rows. His site is small. What's the likely cause? *(O3 · scenario)*
- a) The GA4 tag is broken on every page, so no queries are recorded
- b) Search Console is blocked in robots.txt, so it can't send data
- c) The retention period is too short, so queries were deleted early
- d) Thresholding: rows may be withheld if there aren't enough users

**Answer:** d
**Explanation:** "If a report or exploration includes search query information, the row containing that data may be withheld if there aren't enough total users." Widen the date range, or use Search Console's Performance report.
**Hint:** Privacy protection on small numbers.

### Q7. Spot the error. Amara writes in a client report: "We marked page_view, scroll, click and 20 other events as key events, so we can track every result." What's wrong? *(O2 · spot-the-error)*
- a) Key events should be a few business actions, not every interaction
- b) Nothing; marking more events always makes GA4 reports more accurate
- c) Only `page_view` can be a key event on a website with a blog
- d) Key events can only be set up by Google, not by the site owner

**Answer:** a
**Explanation:** Key events measure "actions that are important to the success of your business", such as a purchase, sign-up or enquiry. Marking everything hides what matters.
**Hint:** What does the business actually need?

### Q8. Spot the error. *(review: m01-l08)* Tomás installs the GA4 tag through a plugin, then also pastes the same Google tag into his theme header "to be safe". What's the problem?
- a) Nothing; two tags make the data more reliable if one fails
- b) GA4 will refuse to load if two tags are found on one page
- c) The tag runs twice, so visits and events are counted twice
- d) The plugin version will overwrite the theme version each night

**Answer:** c
**Explanation:** Lesson 1.8's rule is "install once". Two copies of the same tag double-count page views and events. Lesson 8.4 shows how to find a duplicate.
**Hint:** One tag, one count.
