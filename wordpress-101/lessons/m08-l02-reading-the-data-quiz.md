# M08.L02 Quiz — Reading the data: top content, traffic sources, queries and sign-ups

> 8 questions · 3 recall, 3 scenario, 1 spot-the-error, 1 spaced-review question from M06.L03.
> Checked against Search Console Help, Google Analytics Help, Site Kit 1.190.0, Independent Analytics 2.16.2, Fluent Forms and Kit Help on 2026-11-01.

### Q1. Where do you find the **search queries** people typed before clicking through to your site?
- a) GA4 → Reports → Engagement → Pages and screens
- b) Your email provider's subscriber report
- c) WordPress → Dashboard → At a Glance
- d) Search Console → Performance → Search results → Queries

**Answer:** d
**Explanation:** Queries happen in Google Search before the visit, so Search Console reports them. Analytics shows what readers do after they arrive (pages, sources), not the words they searched.
**Hint:** Before the click, or after it?

### Q2. A page had **5,000 impressions** and **50 clicks** last month. What's its CTR?
- a) 1%
- b) 0.1%
- c) 10%
- d) 50%

**Answer:** a
**Explanation:** CTR = clicks ÷ impressions = 50 ÷ 5,000 = 0.01 = 1%. Lots of impressions with a low CTR usually means the title and meta description don't match what searchers want.
**Hint:** Clicks divided by impressions.

### Q3. Why does the lesson send sign-ups to a **thank-you page** instead of relying on Site Kit's plugin conversion tracking?
- a) Site Kit's tracking only starts once a site passes 1,000 monthly visitors
- b) GDPR requires a separate thank-you page after every sign-up form
- c) Site Kit only supports some form plugins, and Kit and Fluent Forms aren't among them
- d) Site Kit's conversion tracking is a paid add-on billed every month

**Answer:** c
**Explanation:** Site Kit 1.190.0 tracks forms from Contact Form 7, Mailchimp for WP, Ninja Forms, OptinMonster, Popup Maker and WPForms. Visits to a thank-you page can be counted by any analytics tool, whichever form you use.
**Hint:** Which form plugins did Site Kit's code list?

### Q4. Last month Marta's analytics showed **40 thank-you page views**, but her email provider shows only **26 new confirmed subscribers**. What's the most likely explanation?
- a) Her analytics tool counts every thank-you visit twice by design
- b) With double opt-in, some people submitted but never confirmed
- c) Her email provider quietly deletes a third of new subscribers
- d) Search Console filtered 14 of her visitors out as bots

**Answer:** b
**Explanation:** The thank-you page counts form submissions; the provider counts confirmed subscribers (M06.L03). The gap is unconfirmed sign-ups. Confirmed subscribers are the number that counts; if the gap is large, improve the confirmation email and "check your inbox" message. Also check the page is noindex and not in a menu.
**Hint:** What happens between submitting and subscribing?

### Q5. Diego's post on "sourdough starter troubleshooting" ranks at **average position 3** with **8,000 impressions** but a **CTR of 0.9%**. Which action fits best?
- a) Delete the post, because it isn't getting clicks
- b) Build more backlinks first, then check again next year
- c) Rewrite the title tag and meta description to match what searchers want
- d) Add the post to his main menu so Google ranks it higher

**Answer:** c
**Explanation:** He already ranks well and appears often, but few people click. That's a snippet problem, so the fastest fix is a title and description that match the query (M05). Check the CTR again next month.
**Hint:** Visibility is fine. What do searchers see before they click?

### Q6. Lena's monthly review shows Organic Search brought **92%** of her visitors. Which of the lesson's actions fits?
- a) Plan one post a month aimed at a second channel, such as email or a community
- b) Stop writing for search, since one channel is enough
- c) Turn off Search Console to see the other sources more clearly
- d) Add Plausible alongside GA4 to measure the other 8% better

**Answer:** a
**Explanation:** Depending on one channel is a risk: one algorithm change can cut most of your traffic. The lesson's move is a steady effort on a second channel, especially email, which you own. A second analytics tool wouldn't change the traffic, only give conflicting numbers.
**Hint:** What if that one channel drops?

### Q7. Spot the error in Sam's sign-up tracking setup:
> 1. Create a `/thanks/` page and set it to noindex.
> 2. In Kit's form settings, choose **Redirect to another page** and paste the `/thanks/` URL.
> 3. Turn on **Send subscriber data to thank you page** so the page can greet readers by name.
> 4. In GA4, create a `generate_lead` event for page views where `page_location` contains `/thanks` and mark it as a key event.

- a) Step 1: the thank-you page must be indexed so Google can count it
- b) Step 3: it puts the reader's email in the URL, which analytics records
- c) Step 4: you should mark `page_view` itself as the key event instead
- d) Step 2: Kit forms can only show a message, never redirect elsewhere

**Answer:** b
**Explanation:** Analytics records page URLs, so personal data in the URL ends up in your reports, and Google's terms forbid sending it to GA4. Leave that option off. Steps 1, 2 and 4 follow the lesson; marking `page_view` would count every page view as a sign-up.
**Hint:** What does analytics record about each page view?

### Q8. (review: m06-l03) Why does the lesson recommend **double opt-in** for your sign-up form?
- a) It roughly doubles the number of sign-ups each form collects
- b) WordPress won't send any newsletter emails unless it's turned on
- c) It lets you leave out the privacy notice next to the sign-up form
- d) The confirmation click proves consent and filters out fake addresses

**Answer:** d
**Explanation:** GDPR and CASL require you to be able to prove consent, and the confirmation click (with its date and source) is the most common way to do that. It also filters out typos and bots. The trade-off is that some people never confirm, which is the gap you see in Q4.
**Hint:** What does the confirmation click prove?
