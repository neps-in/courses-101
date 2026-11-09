# Research: M14 — Modern SEO: E-E-A-T, Algorithms, Spam Policies & AI Search

**Researched:** 2026-11-09
**Scope:** primary-source facts for SEO 101 Module 14 (L3, advanced). It covers E-E-A-T in depth and the Search Quality Rater Guidelines; Google's "Creating helpful, reliable, people-first content"; the ranking systems guide (including retired systems); core updates, spam updates and the Google Search Status Dashboard; the spam policies in depth with 2024–2026 changes; manual actions and reconsideration beyond links; AI search orientation (AI Overviews, AI Mode, the controls site owners have, Search Console reporting); and traffic-drop diagnosis for non-negotiable #14 "Diagnose before you act". FREE tools only. Running examples: Nila Coffee (Indian coffee roaster, WordPress shop plus brew-guide blog), Kavya (yoga studio), Tomás (hardware shop), Amara (agency).
**Method:** pages were downloaded with curl (browser user agent) on 2026-11-09 and converted to text. The rater guidelines PDF was converted with `pdftotext`. Quotes were copied from that text unless marked otherwise. "Last updated" dates are the ones the page showed. Search Console help pages show no date, so they are marked "no date shown". Nothing was logged in to, so no Search Console screen was checked in a live account.

**Labels:** **Documented** = official Google documentation (Search Central docs and blog, Search Console Help, the Status Dashboard, the rater guidelines PDF, How Search Works). **Google public comment** = a named Googler (person, date, where), usually reported by a third party. **Observed practice** = common SEO practice, third-party reports or course guidance, not Google documentation. **Myth/contested** = widely repeated but unsupported or contradicted.
**Quote markers:** **(fetch-tool extract)** = came through a summarising fetch tool. **(search-tool snippet, unverified)** = only seen as a web-search summary. The original page could not be opened, so do not quote it in a lesson. **(reported by …)** = the Googler's words as quoted in a third-party article. The original post or recording was not checked.

**Earlier lessons already introduced (keep terms consistent, go deeper here):**
- **M01.L05** lists **AI Overviews** as a SERP feature *(observed)*: "The page must be indexed and able to show a snippet; Google says no special markup or files are needed. Introduced in M14; in depth in Modern SEO 101". AI Overview is already in the glossary. Its freshness note mentions "Google's controls for generative AI features (documentation updated October 2026)". M14 adds **AI Mode**, the **Search generative AI control** and how traffic is counted.
- **M01.L06** gave a plain-words grouping of the spam policies ("Lots of pages, little value", "Borrowing someone else's reputation": "Expired domain abuse · Site reputation policy"), quoted "attempting to manipulate generative AI responses", and named **SpamBrain**. It has a **manual action vs algorithmic change** table, where the Status Dashboard "Ranking" history is the way to check an algorithmic drop, and the three things a good reconsideration request does ("Explains the exact quality issue" …). It says "You'll work with them in Module 14." **Don't repeat that table. Build the update timeline and the policy detail on top of it.**
- **M01.L07** covered "E-E-A-T is a ranking factor" → "No, it's not.", "a mix of factors", "trust is most important", YMYL "even more weight", and the line about AI search: SEO best practices "continue to be relevant" because generative AI features "are rooted in our core Search ranking and quality systems." The glossary already has E-E-A-T and YMYL.
- **M04.L03** quoted "Search raters have no control over how pages rank." It has an "E-E-A-T isn't a score" box, the "Main content" section and the fake-author-profile warning (October 2026 freshness flag), and it says "Module 14 covers E-E-A-T, quality raters and AI content in depth." **M14 must not re-teach these basics. Go to the rater guidelines themselves (sections 0.1, 2.3, 3.4, 3.4.1, 4.6.x).**
- **M07.L04** covered Google's AI-content position, scaled content abuse, fake authors, the rater line "the use of Generative AI tools alone does not determine the level of effort or Page Quality rating", and cited the rater guidelines "(September 2025; §4.5, §4.6.5–4.6.7)". The glossary already has Scaled content abuse, Spam policies, E-E-A-T, Byline and YMYL. M14 reinforces #10 through policy and manual-action risk only.
- **M07.L06** quoted the core updates page on deleting content as "a last resort", and covered comparing seasonal posts with the same months last year (the cold brew monsoon dip).
- **M08.L01** listed the **Generative AI performance** report ("Impressions (only) in AI Overviews and AI Mode", "Module 14 covers it"), the **Search generative AI control** ("Don't change it on a whim"), the Manual actions report and **annotations**.
- **M08.L04** covered the tag health check (duplicate GA4 tag, GSC clicks ≠ GA4 sessions) and "annotate the date". **M08.L06** covered YoY comparison, Google's "16 months" seasonality line, "A loser with no clear reason → Seasonality, a Google update, a tag fault, or competitors", and "Cause unknown; checking seasonality, Google updates and tracking". **M14's traffic-drop playbook should formalise these into one decision tree, not re-explain them.**
- **M09.L05** covered link spam, the two "Unnatural links" manual actions, reconsideration for links, disavow, PBNs and expired domains. **M14 goes wider:** thin content, major spam problems, site reputation, back button hijacking, user-generated spam and security issues.

---

## Key pages and dates (checked 2026-11-09)

| Page | Last updated (as shown) | URL |
|---|---|---|
| Creating helpful, reliable, people-first content | 2026-10-05 | https://developers.google.com/search/docs/fundamentals/creating-helpful-content |
| A guide to Google Search ranking systems | 2025-12-10 | https://developers.google.com/search/docs/appearance/ranking-systems-guide |
| Google Search's core updates and your website | 2025-12-10 | https://developers.google.com/search/docs/appearance/core-updates (also served at /search/updates/core-updates) |
| Google Search spam updates and your site | 2025-12-10 | https://developers.google.com/search/docs/appearance/spam-updates |
| Debugging drops in Google Search traffic | 2025-12-10 | https://developers.google.com/search/docs/monitor-debug/debugging-search-traffic-drops |
| Spam policies for Google web search | 2026-08-28 | https://developers.google.com/search/docs/essentials/spam-policies |
| Google Search's guidance on using generative AI content | 2026-10-01 | https://developers.google.com/search/docs/fundamentals/using-gen-ai-content |
| AI features and your website | 2025-12-10 | https://developers.google.com/search/docs/appearance/ai-features |
| Optimizing your website for generative AI features on Google Search | 2026-07-10 (added 2026-05-15) | https://developers.google.com/search/docs/fundamentals/ai-optimization-guide |
| Control what you share with Google Search | 2026-10-21 | https://developers.google.com/search/docs/crawling-indexing/control-what-you-share |
| Robots meta tag, data-nosnippet, and X-Robots-Tag | 2026-03-24 | https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag |
| Google common crawlers (Google-Extended) | 2026-10-30 | https://developers.google.com/crawling/docs/crawlers-fetchers/google-common-crawlers |
| Third-party SEO tools, services and advice | 2026-06-05 | https://developers.google.com/search/docs/fundamentals/third-party-seo |
| Report spam, phishing, or malware | 2026-04-23 | https://developers.google.com/search/help/report-quality-issues |
| Using the Google Search Status Dashboard | 2025-12-10 | https://developers.google.com/search/help/status-dashboard |
| Latest documentation updates | 2026-11-09 | https://developers.google.com/search/updates |
| Google Search Status Dashboard (Ranking history) | live, 9 Nov 2026 | https://status.search.google.com/products/rGHU1u87FJnkP6W2GwMi/history |
| Search Quality Rater Guidelines (PDF) | cover date **September 11, 2025** (PDF created 2025-09-10, 182 pages) | https://static.googleusercontent.com/media/guidelines.raterhub.com/en//searchqualityevaluatorguidelines.pdf |
| Search Console Help: Manual actions report | no date shown | https://support.google.com/webmasters/answer/9044175 |
| Search Console Help: Security issues report | no date shown | https://support.google.com/webmasters/answer/9044101 |
| Search Console Help: Reconsideration requests | no date shown | https://support.google.com/webmasters/answer/35843 |
| Search Console Help: Search generative AI control | no date shown ("As of August 31, 2026 … all websites worldwide") | https://support.google.com/webmasters/answer/16908024 |
| Search Console Help: Generative AI performance report (Search) | no date shown (same Aug 31, 2026 note) | https://support.google.com/webmasters/answer/16984139 |
| Search Console Help: Performance report metrics (AI Overviews / AI Mode counting) | no date shown | https://support.google.com/webmasters/answer/7042828 |
| Search Console Help: Data anomalies | no date shown (entries to Aug 2026) | https://support.google.com/webmasters/answer/6211453 |

Note: many Search Central pages show "Last updated 2025-12-10". That date appears on pages with very different content, so it looks like a site-wide re-date (*observed*). Don't read it as "the guidance changed on 10 December 2025" unless the updates log says so. For two of these pages it does: the core updates page ("smaller core updates", 9 Dec 2025) and the crawling docs move.

---

## 1. E-E-A-T in depth and the Search Quality Rater Guidelines

### Version and what raters are
- The current PDF cover reads "General Guidelines" / "September 11, 2025". Pages are footed "Copyright 2025". — https://static.googleusercontent.com/media/guidelines.raterhub.com/en//searchqualityevaluatorguidelines.pdf — **Documented**. (M07.L04 already cites "September 2025", which is consistent.)
- E-E-A-T history: "Now to better assess our results, E-A-T is gaining an E: experience. Does content also demonstrate that it was produced with some degree of experience, such as with actual use of a product, having actually visited a place or communicating what a person experienced?" — https://developers.google.com/search/blog/2022/12/google-raters-guidelines-e-e-a-t (Thursday, December 15, 2022) — **Documented**
- Same post: "E-E-A-T — or "Double-E-A-T," if you prefer, is now part of the updated search rater guidelines we've just released." — **Documented**

### What raters do and don't do
- §0.1 "The Purpose of Search Quality Rating": "No single rating can directly impact how a particular webpage, website, or result appears in Google Search, nor can it cause specific webpages, websites, or results to move up or down on the search results page. Using ratings to position results on the search results page would not be feasible, as humans could never individually rate each page on the open web." — rater guidelines PDF p. 6 — **Documented**
- Same: "Instead, ratings are used to measure how effectively search engines are working to deliver helpful content to people around the world. Ratings are also used to improve search engines by providing examples of helpful and unhelpful results for different searches." — **Documented**
- Helpful content page: "Search raters have no control over how pages rank. Rater data is not used directly in our ranking algorithms. Rather, we use them as a restaurant might get feedback cards from diners. The feedback helps us know if our systems seem to be working." — https://developers.google.com/search/docs/fundamentals/creating-helpful-content (2026-10-05) — **Documented**. M04.L03 used only the first sentence. The "feedback cards" analogy is new for M14.
- Gen AI guide: "These guidelines are not a guide to ranking first in Google; they're used by our search raters to help evaluate the performance of our various search ranking systems, and their ratings don't directly influence ranking." — https://developers.google.com/search/docs/fundamentals/using-gen-ai-content (2026-10-01) — **Documented**
- How Search Works: "We work with external Search Quality Raters to measure the quality of Search results on an ongoing basis. … These ratings do not directly impact ranking, but they do help us benchmark the quality of our results and make sure these meet a high bar all around the world." Also: "In a side-by-side experiment, we show Raters two different sets of Search results: one with the proposed change already implemented and one without. We ask them which results they prefer and why." The page gives 2023 figures: "In 2023, we ran: - 4,781 launches"; plus "7,19,326 search quality tests" and "1,24,942 side-by-side experiments" (the page was served in Indian number format: 719,326 and 124,942). — https://www.google.com/search/howsearchworks/how-search-works/rigorous-testing/ — **Documented** (2023 data, may be updated)
- Helpful content page: "Reading the guidelines may help you self-assess how your content is doing from an E-E-A-T perspective, improvements to consider, and help align it conceptually with the different signals that our automated systems use to rank content." — **Documented**. Lesson framing: the guidelines are a **self-assessment lens**, not a ranking checklist.

### E-E-A-T as the raters define it (§3.4, PDF pp. 26–27)
- "Experience, Expertise, Authoritativeness and Trust (E-E-A-T) are all important considerations in PQ rating. The most important member at the center of the E-E-A-T family is Trust." — **Documented**
- "Trust: Consider the extent to which the page is accurate, honest, safe, and reliable." Examples: "Online stores need secure online payment systems and reliable customer service." / "Product reviews should be honest and written to help others make informed purchasing decisions (rather than solely to sell the product)." — **Documented** (Nila's shop and Tomás's shop)
- "Experience: Consider the extent to which the content creator has the necessary first-hand or life experience for the topic. … For example, which would you trust: a product review from someone who has personally used the product or a "review" by someone who has not?" — **Documented**
- "Expertise: … For example, which would you trust: home electrical rewiring advice from a skilled electrician or from an antique homes enthusiast who has no knowledge of electrical wiring?" — **Documented** (a perfect Tomás example: wiring how-tos on a hardware shop blog)
- "Authoritativeness: Consider the extent to which the content creator or the website is known as a go-to source for the topic. … For example, a local business profile page on social media may be the authoritative and trusted source for what is on sale now." — **Documented** (Kavya's class schedule; links to #12, one consistent identity)
- "Trust is the most important member of the E-E-A-T family because untrustworthy pages have low E-E-A-T no matter how Experienced, Expert, or Authoritative they may seem. For example, a financial scam is untrustworthy, even if the content creator is a highly experienced and expert scammer who is considered the go-to on running scams!" — p. 27 — **Documented**
- Three evidence sources for raters: "What the website or content creators say about themselves" / "What others say about the website or content creators" / "What is visible on the page, including the Main Content and sections such as reviews and comments". — p. 27 — **Documented** (good structure for the capstone's E-E-A-T review: *About page → independent reputation → the page itself*)
- Conflict of interest: ""reviews" by the product manufacturer ("Our product is great!") or "reviews" from an influencer who is paid to promote the product are not as trustworthy due to the conflict of interest." — p. 27 — **Documented** (Nila's own "best coffee beans" list ranking its own beans first)

### YMYL (§2.3, p. 11; §3.4.1, p. 28)
- "Some topics have a high risk of harm because content about these topics could significantly impact the health, financial stability, or safety of people, or the welfare or well-being of society. We call these topics "Your Money or Your Life" or YMYL." — **Documented**
- Four harm types: "YMYL Health or Safety", "YMYL Financial Security", "YMYL Government, Civics & Society", "YMYL Other". — **Documented**
- "Many or most topics are not YMYL and do not require a high level of accuracy or trust to prevent harm. Because YMYL assessment is a spectrum, it may be helpful to think of topics as clear YMYL, definitely not YMYL or something in between." — **Documented** (Nila's brew guide = not YMYL; "coffee and blood pressure" post = in between or clear YMYL health; Kavya's "yoga for back pain" = YMYL health; Tomás's electrical wiring how-to = YMYL safety)
- "Pages that share first-hand life experience on clear YMYL topics may be considered to have high E-E-A-T as long as the content is trustworthy, safe, and consistent with well-established expert consensus. In contrast, some types of YMYL information and advice must come from experts." — p. 28 — **Documented**. Table example: "Sleep challenges when pregnant": life experience = "Safe and non-medical tips and tricks …" vs experts = "Sleep medications that are safe during pregnancy". — **Documented** (Kavya: sharing her own practice is fine; medical claims need an expert reviewer)
- Helpful content page on accuracy: "For topics that could significantly impact people's lives or well-being (YMYL topics), the content must be highly accurate and consistent with established expert consensus." — **Documented**

### AI-related rater sections (for #10 reinforcement)
- §4.6.5: "Pages and websites made up of content created at scale with no original content or added value for users, should be rated Lowest, no matter how they are created. Even if you are unsure of the method of creation, e.g. whether or not the page is created using generative AI tools, you should still use the Lowest rating when you strongly suspect scaled content abuse after looking at several pages on the website." — PDF p. 42 — **Documented**
- §4.6.6: "The Lowest rating applies if all or almost all of the MC on the page (including text, images, audio, videos, etc) is copied, paraphrased, embedded, auto or AI generated, or reposted from other sources with little to no effort, little to no originality, and little to no added value for visitors to the website. Such pages should be rated Lowest, even if the page assigns credit for the content to another source." — **Documented**
- "Important: Licensed or syndicated content should not be considered as "copied"" — §4.6.6 — **Documented**
- The table of contents also has §4.6.3 "Expired Domain Abuse" and §4.6.4 "Site Reputation Abuse" (pp. 40–41). The rater guidelines still use the old name "Site Reputation Abuse", while the spam policy page now says "Site reputation policy" (see Conflicts). — **Documented**

---

## 2. "Creating helpful, reliable, people-first content" (2026-10-05)

URL: https://developers.google.com/search/docs/fundamentals/creating-helpful-content — all **Documented**.

- Opening: "Google's automated ranking systems are designed to prioritize helpful, reliable information that's created to benefit people, and not content that's created to manipulate search engine rankings."
- Self-assessment advice: "Beyond asking yourself these questions, consider having others you trust but who are unaffiliated with your site provide an honest assessment." and "Also consider an audit of the drops you may have experienced. What pages were most impacted and for what types of searches?" (This is the bridge to the traffic-drop lesson.)
- Question groups: "Content and quality questions" (12), "Expertise questions" (4), "Focus on people-first content" (5), "Avoid creating search engine-first content" (11). Selected verbatim items for the capstone checklist:
  - "Does the content provide original information, reporting, research, or analysis?"
  - "Does the main heading or page title avoid exaggerating or being shocking in nature?"
  - "Is the content mass-produced by or outsourced to a large number of creators, or spread across a large network of sites, so that individual pages or sites don't get as much attention or care?"
  - "Does the content present information in a way that makes you want to trust it, such as clear sourcing, evidence of the expertise involved, background about the author or the site that publishes it, such as through links to an author page or a site's About page?"
  - "Does the content have any easily-verified factual errors?"
  - "Does your content clearly demonstrate first-hand expertise and a depth of knowledge (for example, expertise that comes from having actually used a product or service, or visiting a place)?"
  - "Are you writing to a particular word count because you've heard or read that Google has a preferred word count? (No, we don't.)"
  - "Are you changing the date of pages to make them seem fresh when the content has not substantially changed?"
  - "Are you adding a lot of new content or removing a lot of older content primarily because you believe it will help your search rankings overall by somehow making your site seem "fresh?" (No, it won't)"
  - "Did you decide to enter some niche topic area without any real expertise, but instead mainly because you thought you'd get search traffic?"
- SEO is fine: "SEO can be a helpful activity when it is applied to people-first content, rather than search engine-first content."
- E-E-A-T: "While E-E-A-T itself isn't a specific ranking factor, using a mix of factors that can identify content with good E-E-A-T is useful." Also: "Of these aspects, trust is most important. The others contribute to trust, but content doesn't necessarily have to demonstrate all of them." (M01.L07 and M04.L03 already used these. Reuse, don't re-teach.)
- Main content attributes raters judge: "Effort", "Originality", "Talent or skill", "Accuracy". Effort: "automatically generating pages from feeds or using generative AI to produce large amounts of text without manual oversight or curation represents little to no effort. Attribution or giving credit to other sources doesn't replace the need for original effort."
- **Who, How, Why:**
  - Who: "Is it self-evident to your visitors who authored your content?" / "Do pages carry a byline, where one might be expected?" / "Do bylines lead to further information about the author or authors involved, giving background about them and the areas they write about?" Also: "Fabricating creator profiles (such as by using AI-generated headshots, made-up names, or false credentials to make content appear as if it was written by human experts) is a form of deception. Any form of deception makes a page untrustworthy to both users and our automated quality systems, and is a signal of a low-quality page."
  - How: "with product reviews, it can build trust with readers when they understand the number of products that were tested, what the test results were, and how the tests were conducted, all accompanied by evidence of the work involved, such as photographs." AI questions: "Is the use of automation, including AI-generation, self-evident to visitors through disclosures or in other ways?" / "Are you providing background about how automation or AI-generation was used to create content?" / "Are you explaining why automation or AI was seen as useful to produce content?" Also: "AI or automation disclosures are useful for content where someone might think "How was this created?" Consider adding these when it would be reasonably expected."
  - Why: ""Why" is perhaps the most important question to answer about your content." Also: "If you use automation, including AI-generation, to produce content for the primary purpose of manipulating search rankings, that's a violation of our spam policies."
- The page no longer says "helpful content system" anywhere (string not found, 2026-11-09). The system is described only in the ranking systems guide as retired (section 3).

### AI-generated content guidance (2026-10-01)
URL: https://developers.google.com/search/docs/fundamentals/using-gen-ai-content — **Documented**
- "Generative AI can be particularly useful when researching a topic, and to add structure to original content. However, using generative AI tools or other similar tools to generate many pages without adding value for users may violate Google's spam policy on scaled content abuse."
- It points to the rater guidelines: "scaled content abuse (section 4.6.5) and main content created with little to no effort, little to no originality, and little to no added value (section 4.6.6)".
- "It is critical to manually factcheck and review all AI-generated content for accuracy and trustworthiness before publishing. This review also applies to metadata like <title> elements, meta description elements, structured data, and alternate texts for images" (M07.L04 already uses this. Reuse it for #10.)
- Ecommerce: "AI-generated images must contain metadata using the IPTC DigitalSourceType TrainedAlgorithmicMedia metadata. AI-generated product data such as title and description attributes must be specified separately and labeled as AI-generated." (Merchant Center policy, relevant to Nila's and Tomás's shops) — **Documented**
- Updates log, October 1, 2026: "Updated the using generative AI content guide with information from the Search Quality Raters guidelines." — https://developers.google.com/search/updates — **Documented**

---

## 3. Ranking systems guide (2025-12-10)

URL: https://developers.google.com/search/docs/appearance/ranking-systems-guide — all **Documented**
- "Our ranking systems are designed to work on the page level, using a variety of signals and systems to understand how to rank individual pages. Site-wide signals and classifiers are also used and contribute to our understanding of pages. Having some good site-wide signals does not mean that all content from a site will always rank highly, just as having some poor site-wide signals does not mean all the content from a site will rank poorly."
- **Current systems listed (in page order):** BERT; Crisis information systems; Deduplication systems; Exact match domain system; Freshness systems; Link analysis systems and PageRank; Local news systems; MUM; Neural matching; Original content systems; Removal-based demotion systems; Passage ranking system; RankBrain; Reliable information systems; Reviews system; Site diversity system; Spam detection systems.
- Selected lines:
  - Exact match domain: "our exact match domain system works to ensure we don't give too much credit for content hosted under domains designed to exactly match particular queries."
  - Freshness: "We have various "query deserves freshness" systems designed to show fresher content for queries where it would be expected."
  - MUM: "It's not currently used for general ranking in Search but rather for some specific applications".
  - Reviews system: "aims to better reward high quality reviews, content that provides insightful analysis and original research, and is written by experts or enthusiasts who know the topic well."
  - Site diversity: "we generally won't show more than two web page listings from the same site in our top results".
  - Spam detection: "We employ a range of spam detection systems, including SpamBrain, to deal with content and behaviors that violate our spam policies."
- **Retired systems:** "The following systems are noted for historical purposes. They've either been incorporated into successor systems or made part of our core ranking systems." Listed: **Helpful content system**, **Hummingbird**, **Panda system**, **Penguin system**.
  - Helpful content: "Announced in 2022 as the "Helpful Content Update", this was a system designed to better ensure people see original, helpful content written by people, for people, in search results, rather than content made primarily to gain search engine traffic. In March 2024, it evolved and became part of our core ranking systems, as our systems use a variety of signals and systems to present helpful results to users."
  - Panda: "it evolved and became part of our core ranking systems in 2015." Penguin: "integrated into our core ranking systems in 2016." Hummingbird: "a major improvement to our overall ranking systems made in August 2013."
- March 2024 blog: "There's no longer one signal or system used to do this, and we've also added a new FAQ page to help explain this change." — https://developers.google.com/search/blog/2024/03/core-update-spam-policies (Tuesday, March 5, 2024) — **Documented**
- **Freshness note:** the current guide does not list page experience, mobile-friendly or "secure sites" as systems (current or retired). Older copies of the guide (as SEOs remember them) listed "page experience system" and others. The helpful content page still says "Google's core ranking systems look to reward content that provides a good page experience." Teach page experience as something the core systems reward, not as a separately named system. — **Documented** (absence checked 2026-11-09)
- **Myth/contested:** "the helpful content update still hits sites separately". Since March 2024 it is part of core. The Dashboard has no "helpful content update" after September 2023 (section 4).

---

## 4. Core updates, spam updates, the Status Dashboard

### Core updates (2025-12-10)
URL: https://developers.google.com/search/docs/appearance/core-updates — all **Documented**
- "Several times a year, Google makes significant, broad changes to our search algorithms and systems. We refer to these as core updates".
- "In general, most sites don't need to worry about core updates and may not even realize one has happened."
- "These changes are broad in nature, and don't target specific sites or individual web pages."
- Restaurant analogy: "The list will change, and restaurants that move down aren't necessarily "bad"; there are just other restaurants that make your top 20."
- Steps: "Confirm that the core update has finished rolling out. Check the Search Status Dashboard and take note of the start and end date of the core update." / "We recommend waiting at least a full week after a core update completes before analyzing your site in Search Console. After a week, try comparing this week with a week before the core update started rolling out".
- "Small drop in position (dropping from position 2 to 4): There's no need to take drastic action (in fact, we recommend avoiding making changes to content that's already performing well)." / "Large drop in position (dropping from position 4 to 29): Do a deeper assessment."
- "Avoid doing "quick fix" changes (like removing some page element because you heard it was bad for SEO)."
- "Deleting content is a last resort" (already used in M07.L06).
- Timing: "some changes can take effect in a few days, but it could take several months for our systems to learn and confirm that the site as a whole is now producing helpful, reliable, people-first content in the long term. If it's been a few months and you still haven't seen any effect, that could mean waiting until the next core update."
- **New (9 Dec 2025):** "you don't necessarily have to wait for a major core update to see the effect of your improvements. We're continually making updates to our search algorithms, including smaller core updates. These updates are not announced because they aren't widely noticeable".
- "Keep in mind that there's no guarantee that changes you make to your website will result in noticeable impact in search results".

### Spam updates (2025-12-10)
URL: https://developers.google.com/search/docs/appearance/spam-updates — **Documented**
- "While Google's automated systems to detect search spam are constantly operating, we occasionally make notable improvements to how they work. When we do, we refer to this as a spam update".
- "SpamBrain is our AI-based spam-prevention system."
- "Making changes may help a site improve if our automated systems learn over a period of months that the site complies with our spam policies."
- Link spam: "when our systems remove the effects spammy links may have, any ranking benefit the links may have previously generated for your site is lost. Any potential ranking benefits generated by those links cannot be regained." (ties to M09)

### Google Search Status Dashboard
- Docs: "The dashboard shows issues that affect many sites or users, so if you see an annotation in the dashboard, it may be related to the change in your site's performance." Also: "When a ranking system update is noted, follow the link (when provided) to learn more about the update and any guidance to consider. Often, there's no action needed." Also: "Issues and updates reported on the dashboard are available on the Summary and History page for 5 years." — https://developers.google.com/search/help/status-dashboard (2025-12-10) — **Documented**
- Not listed means local: "The issue may be isolated to your web pages, or it may be impacting a limited number of searchers or websites." — same — **Documented**
- Status definitions: "Available", "System information" ("a ranking update started rolling out"), "System disruption", "System outage". — same — **Documented**
- Subscriptions: RSS feed and "JSON History" (https://status.search.google.com/incidents.json). Useful for a learner's annotation sheet. — **Documented**
- **Ranking history, 2024–2026** (from https://status.search.google.com/products/rGHU1u87FJnkP6W2GwMi/history and incidents.json, checked 2026-11-09) — **Documented**:

| Update | Start | Rollout complete / duration |
|---|---|---|
| September 2026 spam update | 24 Sep 2026 | "The rollout was complete as of October 8, 2026." (13 days, 16 hours) |
| August 2026 spam update | 18 Aug 2026 | complete August 21, 2026 (2 days, 16 hours) |
| June 2026 spam update | 24 Jun 2026 | complete June 26, 2026 |
| May 2026 core update | 21 May 2026 | "The rollout was complete as of June 2, 2026." (11 days, 21 hours) |
| March 2026 core update | 27 Mar 2026 | complete April 8, 2026 |
| March 2026 spam update | 24 Mar 2026 | complete March 25, 2026 (19 hours, 30 minutes) |
| February 2026 Discover update | 5 Feb 2026 | complete February 27, 2026 ("for English language users in the US") |
| December 2025 core update | 11 Dec 2025 | complete December 29, 2025 |
| August 2025 spam update | 26 Aug 2025 | 26 days, 15 hours |
| June 2025 core update | 30 Jun 2025 | 16 days, 18 hours |
| March 2025 core update | 13 Mar 2025 | 13 days, 21 hours |
| December 2024 spam update / core update | 19 Dec / 12 Dec 2024 | 7 days / 6 days |
| November 2024 core update | 11 Nov 2024 | 23 days, 13 hours |
| August 2024 core update | 15 Aug 2024 | 19 days, 4 hours |
| June 2024 spam update | 20 Jun 2024 | 7 days |
| March 2024 core update / spam update | 5 Mar 2024 | 45 days / 14 days, 21 hours |

- Spam update wording: "Released the September 2026 spam update …, which applies globally and to all languages. The rollout may take up to two weeks to complete." Core: "Released the May 2026 core update …. The rollout may take up to 2 weeks to complete." — incidents.json — **Documented**
- The last "helpful content update" on the Dashboard is "September 2023 helpful content update" (14 Sep 2023), and the last reviews update is "November 2023 reviews update". — **Documented**. Lesson: a 2026 article blaming "the helpful content update" is out of date.
- **Observed practice:** keep a "Google updates" tab in the Changes log (M08), with start date, end date and a link, and annotate Search Console on both dates.

---

## 5. Spam policies in depth (page last updated 2026-08-28)

URL: https://developers.google.com/search/docs/essentials/spam-policies — all **Documented** unless marked.

- Definition now includes AI: "In the context of Google Search, spam refers to techniques used to deceive users or manipulate our Search systems into featuring content prominently, such as attempting to manipulate Search systems into ranking content highly or attempting to manipulate generative AI responses in Google Search." Also: "These policies apply to all web search results, including those from Google's own properties."
- Detection: "We detect policy-violating practices both through automated systems and, as needed, human review that can result in a manual action. Sites that violate our policies may rank lower in results or not appear in results at all."
- "Our policies cover common spam practices, but Google may act against any type of spam practices we detect."
- **Current policy list (page order):** Cloaking; Doorway abuse; Expired domain abuse; Hacked content; Hidden text and link abuse; Keyword stuffing; Link spam; Machine-generated traffic; Malicious practices; Misleading functionality; Scaled content abuse; Scraping; Site reputation policy; Sneaky redirects; Thin affiliation; User-generated spam. Plus "Other practices that can lead to demotion or removal": Legal removals; Personal information removals; Policy circumvention; Scam and fraud.

### Expired domain abuse (new March 2024)
- Policy: "Expired domain abuse is where an expired domain name is purchased and repurposed primarily to manipulate search rankings by hosting content that provides little to no value to users." Examples: "Affiliate content on a site previously used by a government agency" / "Commercial medical products being sold on a site previously used by a non-profit medical charity" / "Casino-related content on a former elementary school site".
- Blog (March 5, 2024): "Expired domain abuse isn't something people accidentally do." and "It's fine to use an old domain name for a new, original site that's designed to serve people first." — https://developers.google.com/search/blog/2024/03/core-update-spam-policies — **Documented** (Amara's client wants to "buy an old domain with links")

### Scaled content abuse (new March 2024)
- "Scaled content abuse is when many pages are generated for the primary purpose of manipulating search rankings and not helping users. This abusive practice is typically focused on creating large amounts of unoriginal content that provides little to no value to users, no matter how it's created." Examples include "Using generative AI tools or other similar tools to generate many pages without adding value for users", "Stitching or combining content from different web pages without adding value", "Creating multiple sites with the intent of hiding the scaled nature of the content". Also: "If you're hosting such content on your site, exclude it from Search."
- Blog (2024): "this applies whether automation or humans are involved." Also: "Our long-standing spam policy has been that use of automation, including generative AI, is spam if the primary purpose is manipulating ranking in Search results." — **Documented**

### Site reputation policy (formerly "site reputation abuse") — FRESHNESS
- **Timeline (Documented):**
  - **5 Mar 2024**, announced: "Site reputation abuse is when third-party pages are published with little or no first-party oversight or involvement, where the purpose is to manipulate Search rankings by taking advantage of the first-party site's ranking signals." Enforcement: "this new policy will take effect starting May 5, 2024." — 2024/03 blog.
  - **19 Nov 2024** clarification: "Our evaluation of numerous cases has shown that no amount of first-party involvement alters the fundamental third-party nature of the content or the unfair, exploitative nature of attempting to take advantage of the host's sites ranking signals." Also: "using third-party content on a site in an attempt to exploit the site's ranking signals is a violation of this policy — regardless of whether there is first-party involvement or oversight of the content." New wording: "Site reputation abuse is the practice of publishing third-party pages on a site in an attempt to abuse search rankings by taking advantage of the host site's ranking signals." — https://developers.google.com/search/blog/2024/11/site-reputation-abuse (Tuesday, November 19, 2024)
  - Same Nov 2024 post, on sections of sites: "we also have systems and methods designed to understand if a section of a site is independent or starkly different from the main content of the site. By treating these areas as if they are standalone sites, it better ensures a level playing field". And: "This doesn't mean that these sub-sections have somehow been demoted or are in violation of our spam policies. It means we're measuring them independently". — **Documented**
  - Nov 2024 FAQ: "Does freelance content violate the site reputation abuse policy? No, while freelance content is third-party content, freelance content alone is not a violation of the site reputation abuse policy." — **Documented**
  - **28 Aug 2026** EEA change: "Following discussion with the European Commission, we are adjusting our enforcement approach within the European Economic Area (EEA) and clarifying the criteria we consider when applying the policy." / "Beginning August 30, manual actions applied under our site reputation policy will have a different effect for those searching in the EEA than outside of it." / "For users inside the EEA, the impact of the manual action won't apply. The affected section of the site may be separated in our systems so that, over time, it ranks independently from the rest of the site." / "Eligible sites will, following the reconsideration request, also have the opportunity to bring disputes to mediation." — https://developers.google.com/search/blog/2026/08/update-site-reputation-policy (Friday, August 28, 2026; "Posted by the Google Search Quality team")
- **Current policy text (2026-08-28):** "The site reputation policy applies where third-party content is published on a host site mainly because of that host's already-established ranking signals, which it has earned primarily from its first-party content." / "Having third-party content alone isn't inconsistent with the site reputation policy; it's only inconsistent if the third-party content is published on a host site mainly because of that host site's already-established ranking signals."
- Not a violation: "Wire service or press release service sites", "Sites designed to allow user-generated content", "Columns, opinion pieces, articles, and other work of an editorial nature", "Using affiliate links throughout a page, with links treated appropriately, or embedding third-party ad units throughout a page".
- New review criteria: "our overarching goal is to determine whether content on the relevant portion of the site is created with sufficient input, editorial oversight, or contribution from the host site to be considered fully integrated with the main site." The factors are presentation ("graphic design, formatting, typography and UX features"), quality, "stated or implied authorship" and "Does the content appear on multiple other sites in identical or near-identical form". Also: "not one of these factors is either necessary or sufficient on its own".
- "Google generally applies a presumption that individual pages (including new pages) match the overall quality of other pages on the domain."
- Worked examples on the page: "Not likely to take action: integrated coupons' deals section"; "Likely to take action: unauthored affiliate article not integrated in publication" (CBD oils); "Unlikely to take action: authored, original, affiliate article from freelancer".
- **Course relevance:** Amara (agency) gets offers to "publish sponsored casino or loan articles" on client sites. Nila's blog hosts a guest post from a coffee-machine affiliate. Use the four factors as a checklist.

### Generative AI responses (May 2026)
- Updates log, May 15, 2026: "Clarified that our spam policies also apply to generative AI responses in Google Search." Why: "To make it clear that the spam policies apply to all of Google Search, including generative AI responses." — https://developers.google.com/search/updates — **Documented**
- AI optimization guide (myth list): "Seeking inauthentic "mentions": … seeking inauthentic "mentions" across the web isn't as helpful as it might seem. Our core ranking systems focus on high-quality content while other systems block spam; our generative AI features depend on both." — https://developers.google.com/search/docs/fundamentals/ai-optimization-guide (2026-07-10) — **Documented**
- **Correction to the brief:** the "generative AI responses" wording dates from **15 May 2026**, not 28 Aug 2026. The **2026-08-28** page update was the **site reputation policy EEA change** (updates log: "Updated the site reputation policy … We've adjusted our enforcement approach within the European Economic Area (EEA)").

### Other 2026 additions
- **Back button hijacking** (Malicious practices), announced April 13, 2026: "Back button hijacking is when a site interferes with user browser navigation by manipulating the browser history or other functionalities, preventing them from using their back button to immediately get back to the page they came from." Enforcement: "we're publishing this policy two months in advance of enforcement on June 15, 2026." Also: "some instances of back button hijacking may originate from the site's included libraries or advertising platform." — https://developers.google.com/search/blog/2026/04/back-button-hijacking ("Posted by Chris Nelson on behalf of the Google Search Quality team") — **Documented** (WordPress angle: an ad plugin or popup script could cause it)
- **Spam reports can trigger manual actions** (April 14 and April 23, 2026): "Google may use your report to take manual action against violations." Also: "we must send the submission text to the site owner to help them understand the context of a manual action, if one is issued." — https://developers.google.com/search/help/report-quality-issues (2026-04-23) — **Documented**. **Conflict:** the spam policies page still says "We're focused on developing scalable and automated solutions to problems, and we'll use these reports to further improve our spam detection systems." (see Conflicts)
- **Policy circumvention:** "Using existing or creating new subdomains, subdirectories, or sites with the intention of continuing to violate our policies". — **Documented**
- **User-generated spam guide** updated October 26, 2026 "with guidance on blocking indexing of link-shared content and monitoring abuse in Search Console." — updates log — **Documented** (relevant to Kavya's class-review comments and Nila's blog comments)

---

## 6. Manual actions and reconsideration (wider than links)

URL: https://support.google.com/webmasters/answer/9044175 (no date shown) — all **Documented**
- "If a site has a manual action, some or all of that site will not be shown in Google search results."
- "Most issues reported here will result in pages or sites being ranked lower or omitted from search results without any visual indication to the user."
- "Our algorithms are extremely good at detecting spam, and in most cases we automatically discover it and remove it from our search results. However, to protect the quality of our index, we're also willing to take manual action to remove spam from our search results."
- Bought a site: "If you recently bought a site that violated our spam policies before you owned it, fix the issues listed in this report, then let us know in your reconsideration request that you recently acquired the site".
- Scope: "Not all of the pages matching the pattern are necessarily affected." / "Affects all pages – Manual actions with this description affect the entire site."
- Fix rules: "Fix the issue on all affected pages. Fixing the issue on just some pages will not earn you a partial return to search results." / "affected pages should not require a login, be behind a paywall, or be blocked by robots.txt or a noindex directive." / "don't resubmit your request before you get a final decision on your outstanding request."
- Timing: "Most reconsideration reviews can take several days or weeks, although in some cases, such as link-related reconsideration requests, it may take longer than usual".
- **Manual action types listed (2026-11-09):** Back button hijacking; Site abused with third-party spam; User-generated spam; Spammy free host; Structured data issue; Unnatural links to your site; Unnatural links from your site; Thin content with little or no added value; Cloaking and/or sneaky redirects; Major spam problems; Cloaked images; Hidden text and/or keyword stuffing; AMP content mismatch; Sneaky mobile redirects; News and Discover policy violations (several sub-types); Site reputation policy.
  - Thin content: "Google has detected low-quality pages or shallow pages on your site." Examples: "Thin affiliate pages", "Content from other sources. For example: scraped content or low-quality guest blog posts", "Doorways".
  - Major spam problems: "The site appears to use aggressive spam techniques such as scaled content abuse, cloaking, and/or other repeated or egregious violations of Google's spam policies." Fix: "Provide examples of bad content that you removed and good content that you added."
  - Site reputation fixes: "Move the inconsistent content to a new domain. If you link from the old site to the new site, use the nofollow attribute in those links. Avoid redirecting URLs from the old site to the new site". Or "Use noindex …", "Redo the inconsistent content as first-party content", "Remove the inconsistent content". Caution: "Moving to a subdomain/subdirectory may be viewed as an attempt to circumvent our spam policy". Also: "The impact of the manual action doesn't apply to search results shown to users in the European Economic Area (EEA)."
- Manual actions vs Security issues: "The Manual Actions report lists manually detected issues with a page or site that are mostly attempts to manipulate our search index, but are not necessarily dangerous for users." / "The Security Issues report lists indications that your site was hacked, or behavior on your site that could potentially harm a visitor or their computer". — same page — **Documented**
- Security issues report: categories "Hacked content", "Malware and unwanted software", "Social engineering". "Pages or sites affected by a security issue can appear with a warning label in search results or an interstitial warning page in the browser". Also: "you should rely on the Security Issues report as the source of truth to verify whether any security issues exist for your site". — https://support.google.com/webmasters/answer/9044101 — **Documented** (a hacked WordPress plugin is a likely real-world cause of a sudden drop for Tomás)
- Reconsideration requests: "A reconsideration request is a request to have Google review your site after you fix problems identified in a manual action or security issues notification." — https://support.google.com/webmasters/answer/35843 — **Documented** (the page's other text was not in the static HTML)
- Three-part request (already in M01.L06 and M09.L05): "Explains the exact quality issue on your site." / "Describes the steps you've taken to fix the issue." / "Documents the outcome of your efforts." — **Documented**

---

## 7. AI search orientation: AI Overviews and AI Mode — FRESHNESS

### What Google documents
- "The best practices for SEO remain relevant for AI features in Google Search (such as AI Overviews and AI Mode). There are no additional requirements to appear in AI Overviews or AI Mode, nor other special optimizations necessary." — https://developers.google.com/search/docs/appearance/ai-features (2025-12-10) — **Documented**
- "Both AI Overviews and AI Mode may use a "query fan-out" technique — issuing multiple related searches across subtopics and data sources — to develop a response." / "AI Overviews are only shown when our systems determine that it is additive to classic Search, and as such, often don't trigger." — same — **Documented**
- Eligibility: "To be eligible to be shown as a supporting link in AI Overviews or AI Mode, a page must be indexed and eligible to be shown in Google Search with a snippet, fulfilling the Search technical requirements. There are no additional technical requirements." — same — **Documented**
- "You don't need to create new machine readable files, AI text files, or markup to appear in these features. There's also no special schema.org structured data that you need to add." — same — **Documented**
- AI optimization guide: "In short, yes! The best practices for SEO continue to be relevant because our generative AI features on Google Search are rooted in our core Search ranking and quality systems." Also: "From Google Search's perspective, optimizing for generative AI search is optimizing for the search experience, and thus still SEO." — https://developers.google.com/search/docs/fundamentals/ai-optimization-guide (2026-07-10) — **Documented**
- Same guide on non-commodity content: "Commodity content (for example, something like "7 Tips for First-Time Homebuyers") is often based on common knowledge … In contrast, non-commodity content (such as "Why We Waived the Inspection & Saved Money: A Look Inside the Sewer Line") provides unique expert or experienced takes that go beyond common knowledge and the ordinary." — **Documented** (Nila: "5 tips for better coffee" vs "We brewed our Chikmagalur beans 40 ways: what changed")
- Myths you can ignore: "LLMS.txt files and other "special" markup", ""Chunking" content", "Rewriting content just for AI systems", "Seeking inauthentic "mentions"", "Overfocusing on structured data". On llms.txt: "Doing so will neither harm nor help your site's visibility or rankings in Google Search, as Google Search ignores them." — **Documented**
- Third-party tools: "No third-party tool has access to our internal ranking or AI systems." — ai-optimization-guide — **Documented**. Also: "Third-party tools don't have access to our internal ranking data. They can't guarantee performance." — https://developers.google.com/search/docs/fundamentals/third-party-seo (2026-06-05) — **Documented**
- RAG and grounding: "Retrieval-augmented generation (RAG): A technique (also known as grounding) used to improve the quality, accuracy, and freshness of AI responses by relying on our core Search ranking systems to retrieve relevant, up-to-date web pages from our Search index." — ai-optimization-guide — **Documented**
- Click quality claim: "We've seen that when people click from search results pages with AI Overviews, these clicks are higher quality (meaning, users are more likely to spend more time on the site)." — ai-features page and the May 21, 2025 blog — **Documented** as Google's claim. Google publishes no data for it. Present it as Google's statement, not a measured fact for the learner's site.

### Controls — FRESHNESS
- **nosnippet:** "This applies to all forms of search results (at Google: web search, Google Images, Discover, AI Overviews, AI Mode) and will also prevent the content from being used as a direct input for AI Overviews and AI Mode." — https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag (2026-03-24) — **Documented**
- **max-snippet:[number]:** "This applies to all forms of search results (such as Google web search, Google Images, Discover, Assistant, AI Overviews, AI Mode) and will also limit how much of the content may be used as a direct input for AI Overviews and AI Mode." — same — **Documented**
- **data-nosnippet:** "You can designate textual parts of an HTML page not to be used as a snippet. This can be done on an HTML-element level with the data-nosnippet HTML attribute on span, div, and section elements." — same — **Documented** (example use: hide Nila's wholesale price note)
- ai-features page: "AI is built into Search and integral to how Search functions, which is why robots.txt directives for Googlebot is the control for site owners to manage access to how their sites are crawled for Search. To limit the information shown from your pages in Search, use nosnippet, data-nosnippet, max-snippet, or noindex controls." — **Documented**
- **Search generative AI control (Search Console, new 2026):** "Note: As of August 31, 2026, we've rolled out this control to all websites worldwide." Covers "AI Overviews", "AI Mode", "Generative AI features in Google Discover". Location: "Settings > Search generative AI in Search Console." Options: "Include my site's links and content …" ("This is the default control for all properties"), "Exclude my site's links and content …" ("You won't receive any traffic or impressions from these features"), and "Inherit control from parent". — https://support.google.com/webmasters/answer/16908024 — **Documented**
  - "this control isn't used as a ranking or inclusion signal affecting other parts of Search." — **Documented**
  - "If you exclude your site, links to your site and your site's content won't appear in Search generative AI features. Content from other sites will still be available in those features, and it may appear similar to yours." — **Documented** (key trade-off for a small shop: you lose the link, not the topic)
  - "This control doesn't affect AI training; to limit training of the models used to generate responses in Search generative AI features, use Google-Extended. To block your content from appearing in Google Search completely, use noindex." — **Documented**
  - Timing: "it generally takes a few days for your site's content to be excluded … Content will be excluded within 1-2 days after the control goes live, but some content may take longer". — **Documented**
- Control-what-you-share page now lists it: "You can manage your site's inclusion in generative AI features on Google Search, including AI Overviews and AI Mode, by using the Search generative AI control in Search Console." — https://developers.google.com/search/docs/crawling-indexing/control-what-you-share (2026-10-21) — **Documented**
- **Google-Extended scope:** "Google-Extended is a standalone product token that web publishers can use to manage whether content Google crawls from their sites may be used for training future generations of Gemini models that power Gemini Apps and Vertex AI API for Gemini and for grounding … in Gemini Apps and Grounding with Google Search on Vertex AI." Also: "Google-Extended does not impact a site's inclusion in Google Search nor is it used as a ranking signal in Google Search." And: "Google-Extended doesn't have a separate HTTP request user agent string." — https://developers.google.com/crawling/docs/crawlers-fetchers/google-common-crawlers (2026-10-30) — **Documented**
  - New note: "Google intends to support the AIPREF shared machine-readable training preference signal (with "user-agent: __usage_ai-training") in early 2027." — same — **Documented**, FRESHNESS (future plan)
  - **Myth/contested:** "Blocking Google-Extended keeps you out of AI Overviews." Wrong. Google-Extended covers Gemini Apps and Vertex AI training and grounding. AI Overviews and AI Mode are controlled by snippet rules or the Search Console control.

### How traffic is reported in Search Console
- "sites appearing in AI features (such as AI Overviews and AI Mode) are included in the overall search traffic in Search Console. In particular, they're reported on in the Performance report, within the "Web" search type." — ai-features page — **Documented**
- Counting rules: AI Overviews: "Click: Clicking a link to an external page in the AI Overview counts as a click." / "Position: An AI Overview occupies a single position in search results, and all links in the AI Overview are assigned that same position." AI Mode: "Position in AI Mode follows the same methodology as a Google Search results page." / "If a user asks a follow-up question within AI Mode, they are essentially performing a new query." Also: "Search Console doesn't include data from experiments in Search Labs". — https://support.google.com/webmasters/answer/7042828 — **Documented**
- Updates log, June 16, 2025: "Data from AI Mode is now counting towards the totals in the Search Console Performance report." — **Documented**
- **Generative AI performance report:** "Note: As of August 31, 2026, we've rolled out these insights to all websites worldwide." It shows impressions only ("Impressions are how many times links to your site were shown to a user in a generative AI feature on Google Search"), with dimensions Pages, Countries, Dates, Devices, and search types "Web: text-based" and "Web: multimodal". Missing report: "This usually happens when your site hasn't received enough impressions in generative AI features on Google Search." It also notes: "This may be because you've excluded your site from Search generative AI features." — https://support.google.com/webmasters/answer/16984139 — **Documented**. (M08.L01 cited a Search Central blog post dated 3 June 2026 for this report. It was not re-fetched here.)
- Preferred sources now reach AI features. Updates log, May 27, 2026: "The preferred sources feature is starting to roll out to AI Overviews and AI Mode." — **Documented**

### Googlers' statements that SEO basics still apply
- Gary Illyes (Google), Search Central Live Deep Dive (APAC), July 2025, as posted by Kenichi Suzuki: "To get your content to appear in AI Overview, simply use normal SEO practices. You don't need GEO, LLMO or anything else." — reported in https://www.seroundtable.com/google-ai-overviews-normal-seo-39817.html (Jul 24, 2025) — **Google public comment** (reported by SER via LinkedIn)
- John Mueller (Bluesky, July 29, 2025), quoting Illyes: "Simply use normal SEO practices. You don't need GEO, LLMO or anything else." — same SER article (embed) — **Google public comment**
- Danny Sullivan and John Mueller, *Search Off the Record* podcast, "Thoughts on SEO & SEO for AI" part 1 (December 2025). Barry Schwartz's summary: "In short, they both said SEO for AI is the same as SEO for traditional search" and "Danny Sullivan said he feels that AI for SEO, GEO or whatever you want to call it, should be under SEO, as a subset of SEO." His notes include ""it is still SEO" but the format is different". — https://www.seroundtable.com/google-danny-sullivan-john-mueller-seo-ai-40620.html (Dec 18, 2025) — **Google public comment** (reported. These are a journalist's notes, not a transcript. Quote only "it is still SEO" as Sullivan's words, and check the episode before using it in a lesson.)
- "Good SEO is good GEO" (Danny Sullivan, Search Central Live Toronto): Search Engine Land returned 403 to curl and the fetch tool. — **(search-tool snippet, unverified)**. Don't quote it.
- Official equivalent to use instead (May 21, 2025 blog): "The underpinnings of what Google has long advised carries across to these new experiences. Focus on your visitors and provide them with unique, satisfying content." — https://developers.google.com/search/blog/2025/05/succeeding-in-ai-search — **Documented**. Same post: "More restrictive permissions will limit how your content is featured in our AI experiences." — **Documented**

---

## 8. Traffic-drop diagnosis (non-negotiable #14)

### Google's causes list
URL: https://developers.google.com/search/docs/monitor-debug/debugging-search-traffic-drops (2025-12-10) — all **Documented**
- Causes covered: "Algorithmic update", "Technical issues", "Security issues", "Spam issues", "Seasonality and changing interests", "Site moves and migrations". It also says: "make sure to check the Search Console Data Anomalies page to see if there is anything applicable to your site. The drop might be related to a change in the data processing or a logging error."
- Algorithmic: "If you suspect a drop in traffic is due to an algorithmic update, it's important to understand that there might not be anything fundamentally wrong with your content."
- Small drop: "In Search Console, you might see a noticeable drop in traffic without a big change in impressions. Small fluctuations in position can happen at any time (including moving back up in position, without you needing to do anything). In fact, we recommend avoiding making radical changes if your page is already performing well."
- Technical: "the issues can be site-wide (for example, your website is down) or page-wide (for example, a misplaced noindex tag, which would depend on Google crawling the page, meaning there would be a slower drop in traffic)." Check: "the Crawl stats report and Page indexing report".
- Pattern reading: "If both impressions and clicks dropped, check the list of the most common reasons that could have caused it. If your impressions remain the same but your clicks drop, you might not be generating the best page title and snippet that you could, … or perhaps other sites had a more appealing rich result."
- "Choose the Date filter on top of the chart and select Last 16 months. This will help you analyze the traffic drop in context and make sure it's not a drop that happens every year due to a festivity or a trend." (M08.L06 already quoted part of this.)
- "Compare last 3 months to previous period or Compare last 3 months year over year … Make sure to click all tabs to find out if the change happened only for specific queries, URLs, countries, devices, or search appearances".
- "Impressions and clicks are ultimately the measure of success for your site." (already in M08.L06)
- "one important factor is finding out if the drop happened across the whole site, a group of pages, or even just one very important page in your site." / "If it's a site-wide issue, check the Page indexing report. If the drop only affects a group of pages, use the URL inspection tool to investigate a few pages."
- Trends: "check them on Google Trends to understand if the drop was only for your website or throughout the web." The page's example: "Turkey has a strong seasonality, peaking every year in November." / "Coffee is significantly more stable; it looks like people need it throughout the year." (Gift for Nila: the head term "coffee" is stable, but "cold brew" or "iced coffee" may be seasonal. Learners should check in Trends rather than assume.)
- Migrations: "a medium-sized website can take a few weeks for Google to notice the change; larger sites can take longer."
- The page shows "sketches in the image" of graph shapes per cause (image only; not reproducible as a quote). Learners can view them on the page.

### Data anomalies (tracking-side causes)
URL: https://support.google.com/webmasters/answer/6211453 — **Documented**
- "On rare occasions, there might be an event in Search Console that could affect your report data. For example, if we change our data aggregation methods or there is a logging error, you might see a dip or bump in your chart."
- **Big one:** "A logging error prevented Search Console from accurately reporting impressions from May 13, 2025 until April 27, 2026. This issue has been resolved. As a result, you may notice a decrease in impressions in the Search Console Performance report. Only impressions and related metrics - CTR and average position - were affected; clicks were not affected by the error". — **Documented**. Perfect break-it-lab material: an impressions "drop" around late April 2026 with flat clicks is a reporting change, not a ranking loss.
- "As of May 7, 2026, FAQ rich results are no longer appearing in Google Search. As a result, you will see a drop in the number of reported impressions for FAQ in the performance report." — **Documented**. Also, updates log, May 8, 2026: "This feature will no longer appear in Google Search starting May 7, 2026."
- "August 13 - August 17 (Generative AI in Search): A logging error caused a decrease in impressions on the Generative AI performance report in Search for data from August 13 - August 17, 2026." It was later restored ("Update (August 21)"). — **Documented**
- "Due to a technical issue, two days (February 28th and March 1st, 2026) are missing from the Bulk data exports for some properties. This data won't be recovered." — **Documented**

### Drop-diagnosis order for the course (Observed practice, built from Google's list plus M08)
1. **Is it real?** Data anomalies page; the GA4 tag health check (M08.L04); compare clicks vs sessions; date range and time zone (GSC = PT).
2. **Is it normal?** 16 months and YoY; Google Trends for the top queries (seasonality, changing interest).
3. **Is it technical or security?** Page indexing, Crawl stats, URL Inspection, Security issues, recent site changes (plugin update, theme, migration, `noindex`), checked against the Changes log.
4. **Is it a penalty?** The Manual actions report (and messages).
5. **Is it an update?** Dashboard dates (start and end). Wait a week after the end. Small vs large position drop. Which pages and queries.
6. **Only then act.** Change one thing at a time, annotate it, and recheck in weeks, not days.
- Google supports the "wait" part: "In general, you'll likely want to wait a few weeks to analyze your site in Search Console again to see if your efforts had a beneficial effect on ranking position." — debugging page — **Documented**

---

## Freshness flags

- **Spam policies** page updated **2026-08-28** (site reputation EEA). "Generative AI responses" was added to the spam definition on **2026-05-15**. Back button hijacking was added **2026-04-13** (enforced **2026-06-15**). Spam reports can lead to manual actions (April 2026). Spam policies change several times a year.
- **Site reputation:** renamed in docs from "site reputation abuse" to "site reputation policy", with EEA-specific enforcement from **30 Aug 2026**. The criteria now centre on "fully integrated with the main site". Expect further EU-driven changes.
- **Search generative AI control** and **Generative AI performance report**: "rolled out … to all websites worldwide" as of **31 Aug 2026**. Both are new, and menus may move.
- **AI features and your website** (2025-12-10) predates the Search Console control and doesn't mention it. Re-check whether Google updates that page.
- **Google-Extended:** Google plans AIPREF support "in early 2027". Re-check before publishing.
- **Rater guidelines:** current PDF dated **September 11, 2025**. Google revises them every year or two; check the PDF cover date.
- **Status Dashboard:** latest core update **May 2026** (21 May–2 Jun); latest spam update **September 2026** (24 Sep–8 Oct). Any newer update after 2026-11-09 must be added.
- **Ranking systems guide** (2025-12-10): page experience, mobile-friendly and secure sites are no longer listed as named systems. Older third-party lists still show them.
- **FAQ rich results** were removed from Search on 7 May 2026. This causes an impressions dip, not a penalty.
- **Smaller, unannounced core updates** were documented on 9 Dec 2025.
- **How Search Works** testing figures are for 2023.
- **Googler comments** on AEO/GEO (2025) are reported second-hand. The official AI optimization guide (May 2026) is the safer source.
- Many docs show "Last updated 2025-12-10", which looks like a bulk re-date (see note above).

## Conflicts between sources

- **Site reputation: Nov 2024 vs 2026 wording.** In Nov 2024 the policy was violated "regardless of whether there is first-party involvement or oversight of the content". The 2026 page asks whether content has "sufficient input, editorial oversight, or contribution from the host site to be considered fully integrated with the main site". It also gives an "Unlikely to take action" freelancer example with "evidence of editorial oversight". The 2026 page is current, and the Nov 2024 hard line has softened. Teach the 2026 criteria and show the Nov 2024 quote only as history.
- **Rater guidelines vs spam policy name:** the PDF (Sep 2025) says "4.6.4 Site Reputation Abuse", while the spam page says "Site reputation policy". Same concept, different names.
- **Spam reports:** the spam policies page says reports are used "to further improve our spam detection systems" (focus on automation), while the report-quality page (2026-04-23) says "Google may use your report to take manual action against violations." The newer page plus the updates log win.
- **AI controls:** ai-features (2025-12-10) lists only robots.txt for Googlebot, snippet rules, noindex and Google-Extended. The control-what-you-share page (2026-10-21) and Search Console Help add the Search generative AI control. Teach both, and say the Search Console control is newer and site-wide.
- **"No special optimizations necessary"** (ai-features) vs a whole "Optimizing your website for generative AI features" guide (2026). They don't really conflict: the guide reframes SEO basics and says "thus still SEO". Point this out so learners don't read the guide's title as "AEO is separate".
- **Click quality:** Google says AI Overview clicks are "higher quality" but publishes no data. Third-party click-through studies were not researched here. Treat it as Google's claim (contested by many publishers *(observed, not sourced here)*).
- **EEA vs rest of world:** the same page can carry a manual action outside the EEA and none inside it. A learner in India and a client in Germany may see different results for the same site.

## Not found

- **"Good SEO is good GEO"** (Danny Sullivan, Search Central Live Toronto): Search Engine Land returned 403 to curl and the fetch tool. Only a search summary was seen. Don't quote it.
- **Podcast transcript** of *Search Off the Record* "Thoughts on SEO & SEO for AI": not opened. Only SER's notes were read.
- **Reconsideration requests help page** full text: only the definition is in the static HTML (the rest is likely in collapsed sections). The three-part request is quoted from the Manual actions page instead.
- **The page experience system** in the current ranking systems guide: not present (see Freshness).
- **A Google statement on how long a site reputation EEA mediation takes**: not found.
- **Independent data on AI Overview click-through rates**: not researched (out of scope; Modern SEO 101).
- **The Search Central blog post on the generative AI performance report** (cited in M08.L01 as 3 June 2026): not re-fetched. The help page was used.
- **Search Console "Search generative AI control" exact screen wording**: not checked in a live account (no login).
- **Bing equivalents** (Bing Webmaster Guidelines spam list, Copilot controls): not researched. The module outline is Google-focused.

## Suggested lesson split (6 lessons, in topic order)

1. **M14.L01 — E-E-A-T through a rater's eyes.** What raters are and aren't (§0.1 "No single rating can directly impact…", "feedback cards from diners"). Trust at the centre, the three evidence sources (about / others / on page), YMYL as a spectrum (§2.3), and experience vs expertise for YMYL (§3.4.1). Cases: Nila (not YMYL), Kavya (yoga for back pain, YMYL health), Tomás (wiring how-to, YMYL safety: the electrician example). Exercise: score three pages on Who/How/Why. Builds on M01.L07 and M04.L03, so skip "E-E-A-T isn't a factor" basics.
2. **M14.L02 — People-first content as a self-assessment.** The full question set, main content attributes (effort, originality, skill, accuracy), Who/How/Why including AI disclosure, fake author profiles, and the date-changing and word-count myths. Gen AI guidance with the rater §4.6.5/4.6.6 lines (#10). Output: a site self-assessment sheet with an unaffiliated reviewer column.
3. **M14.L03 — How Google ranks and updates: systems, core updates, spam updates.** The ranking systems list and retired systems (helpful content → core, March 2024). Page-level and site-wide signals. Core updates (restaurant analogy, wait a week, small vs large drop, smaller unannounced updates). Spam updates and SpamBrain. Reading the Status Dashboard and its RSS/JSON. Building an "updates" tab and annotations.
4. **M14.L04 — Spam policies in depth and what changed (2024–2026).** The full policy list. Deep dives: scaled content abuse, expired domain abuse, the site reputation policy (timeline 2024 → Nov 2024 → Aug 2026 EEA, the four factors, worked examples), back button hijacking, spam in generative AI responses, policy circumvention, UGC spam. Amara's "offers we refuse" list. (#1, #11, #12)
5. **M14.L05 — Manual actions, security issues and reconsideration.** The full manual action list (beyond links), reading affected-page patterns, "bought this site", fix-all-pages, the site reputation fix options and circumvention cautions, Manual actions vs Security issues, and writing a non-link reconsideration request (e.g. thin content or UGC spam on Kavya's forum).
6. **M14.L06 — AI search orientation and diagnosing traffic drops.** Part A: AI Overviews and AI Mode (eligibility = indexed with a snippet; fan-out; myths: llms.txt, chunking, mentions). Controls: nosnippet, max-snippet, data-nosnippet, the Search generative AI control, Google-Extended scope. Reporting: the Web search type, the gen AI report (impressions only). Googlers say "normal SEO". Part B: the drop decision tree (real? normal? technical/security? penalty? update? then act), using data anomalies, 16 months, Trends, Dashboard dates. Capstone: E-E-A-T and policy review plus a traffic-drop playbook. Break-it lab here. *(If L06 is too long, split it into L06 AI search and L07 drop diagnosis.)*

## Break-it lab ideas

**Lab A: "Nila Coffee lost 40% of clicks". Learners get a dataset and diagnose the real cause.** Sample dataset idea: a CSV of **weekly** rows for 70 weeks (Jan 2025 to Apr 2026, so YoY is possible) with the columns `week_start, gsc_clicks, gsc_impressions, gsc_avg_position, ga4_organic_sessions, top_query_clicks_cold_brew, top_query_clicks_coffee_beans, pages_indexed, crawl_errors_5xx, manual_actions, changes_log_note`, plus a separate tab of Status Dashboard dates (real ones from section 4) and a Google Trends export (illustrative) for "cold brew" and "coffee". Build four or five variants (each learner or group gets one; all numbers clearly illustrative):
1. **Tracking error:** GA4 sessions fall 45% on one date while GSC clicks stay flat. The Changes log says "switched cookie banner plugin". → Consent or tag break (M08.L04). Fix the tag; no SEO change.
2. **Seasonality:** cold brew clicks fall July–September in both years (monsoon), and Trends shows the same curve. Overall "coffee" queries are flat ("Coffee is significantly more stable"). → Seasonal, so do nothing and compare YoY.
3. **Technical break:** pages_indexed drops over 3 weeks after a theme update, and the shop category pages carry `noindex` (a slow drop: "would depend on Google crawling the page"). → Fix, request indexing, annotate.
4. **Core update:** the drop starts within the May 2026 core update window (21 May–2 Jun). Brew-guide posts slip from position 3 to 5 (small), and one thin "best beans" listicle goes from 4 to 29 (large). → Wait a week after 2 Jun; self-assess the large losers only; don't touch the stable pages.
5. **Red herring (reporting change):** impressions and average position shift around late April 2026 while clicks stay flat. → The documented Search Console logging fix (impressions May 13, 2025–April 27, 2026). Not a ranking change.
6. *(Optional)* **FAQ impressions vanish** after 7 May 2026 → FAQ rich results were retired. Not a penalty.
Deliverable: the decision tree filled in, the evidence for each step, the cause, one action (or "no action"), and an annotation text.

**Lab B: planted policy review "Amara's agency proposal for Tomás's hardware shop". Learners flag each problem.**
1. "Buy tomashardware-old.in (expired, 300 links) and redirect it" → expired domain abuse risk; "It's fine to use an old domain name for a new, original site" only if it's for people, not for its links.
2. "Publish 500 AI city pages: 'Best plumber tools in <city>'" → scaled content abuse (+ doorway). Quote the generative AI example.
3. "Host a sponsored 'best online casinos' page under /deals/ for a fee" → site reputation policy (unrelated, not integrated, third-party).
4. "Author bio: 'Dr. R. Mehta, master electrician' (AI headshot)" → fabricated creator profile: "a form of deception".
5. "Add an llms.txt and 'AI schema' so we show in AI Overviews" → not needed; Google ignores llms.txt; "no special schema.org structured data".
6. "Block Google-Extended so AI Overviews stop using our content" → wrong control. Google-Extended covers Gemini Apps and Vertex AI training and grounding. Use nosnippet, max-snippet or the Search generative AI control, and weigh the cost.
7. "Install 'exit-intent redirect' ad script that loads an offers page when users press Back" → back button hijacking (enforced since 15 June 2026).
8. "We got a thin content manual action, so let's move the guides to guides.tomashardware.in" → policy circumvention, and it doesn't fix the issue.
9. "Rankings dipped during the September 2026 spam update, so rewrite every page this week" → diagnose first. Is it a spam issue at all? Check the Manual actions report and the policies; don't make mass changes.
10. "Our E-E-A-T score is 62/100 (tool), so add more author badges" → E-E-A-T is not a score; third-party tools "don't have access to our internal ranking data".

## Hands-on ideas (free only)

- **Rater lens on your own site:** open the rater PDF §3.4 and §2.3. For three pages, note "what we say about ourselves", "what others say" (search `"brand name" reviews -site:yoursite`, as the raters' reputation research does) and "what's on the page". Rate YMYL as clear / between / not.
- **Who/How/Why audit table:** one row per key page, with columns Byline? Author page? How it was made (tests, photos)? AI used and disclosed? Why does this page exist (for the audience, or for search)?
- **Status Dashboard timeline:** subscribe to the RSS feed, copy the 2025–2026 ranking updates into the Changes log, and add Search Console annotations for update start and end dates (M08.L01).
- **Spam policy self-check:** go through each policy name on the official page with a yes/no for "could anything on my site look like this?", including UGC (comments, reviews), plugins (redirects, back button) and any sponsored pages.
- **Manual actions and Security issues check:** open both reports and screenshot the green check (or the issue). Write a draft reconsideration request for a fictional thin-content action using the three-part structure.
- **AI feature check:** search 5 of your queries in a private window and note which show an AI Overview and whether your site is linked. Open the Generative AI performance report (or note "not enough impressions"). Read, but don't change, the Search generative AI control.
- **Snippet controls in practice:** on a practice page, wrap one paragraph in `data-nosnippet` and check in URL Inspection that Googlebot sees it. Discuss what nosnippet would cost.
- **Trends seasonality:** compare "cold brew", "filter coffee" and "coffee" in India over 5 years (or Kavya: "yoga" around 21 June, International Yoga Day). Mark your own seasonal months.
- **Capstone:** (1) an E-E-A-T and policy review of the project site (the rater evidence sources, Who/How/Why, a YMYL rating, the spam-policy checklist, manual action and security status), and (2) a one-page traffic-drop playbook: the decision tree, where each check lives (Data anomalies, GA4 tag check, 16 months/YoY, Trends, Page indexing, Crawl stats, Security issues, Manual actions, Status Dashboard), the "wait a week after rollout" rule, and the annotation template.
