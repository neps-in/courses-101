# M07 — Content Strategy, SEO Writing & AI Content: research notes

**Researched:** 2026-11-08 (finished 2026-11-09)
**Scope:** SEO 101, Module 7 (L2, practitioner). Content strategy (goals, audience, topics from the keyword map, pillar pages and topic clusters, a realistic calendar); the content brief; post formats by intent; SEO writing (structure, readability, examples, sources, first-hand experience); AI-assisted content (where it helps and where it fails, the human edit and fact-check pass, disclosure, Google's guidance on AI content and scaled content abuse); the publish checklist; refreshing, merging and retiring content. Non-negotiables #9 and #10. Running example: Nila Coffee (WordPress shop and brew-guide blog).
**Method:** Primary pages were downloaded with curl and converted to text locally, and quotes were matched against that text. Line breaks are joined, and the original spelling is kept, typos included. "Last updated" dates are the ones the pages showed on 2026-11-08. Older versions came from Wayback Machine snapshots (raw `id_` captures) and were diffed against the live pages. The Search Quality Rater Guidelines PDF was converted with `pdftotext`, and page numbers are the PDF's printed page numbers. Where a quote came through a search or summarising tool, it is marked **(fetch-tool extract)** or **(search-tool summary, not verbatim)**.
**Labels:** **Documented** = an official doc or official blog says it. **Google public comment** = a named Googler said it outside the docs. **Observed practice** = a common industry habit or tool convention that is not in the docs. **Myth/contested** = widely believed, but contradicted or unconfirmed.

**What earlier research already covers (don't repeat; reference it):**
- **M04 research §6** (`seo-101/research/m04-on-page-seo.md`) covers the helpful-content self-assessment questions, E-E-A-T wording, "E-E-A-T itself isn't a specific ranking factor", YMYL, Who/How/Why, the new "Main content" attributes (Effort, Originality, Talent or skill, Accuracy), the fabricated-creator-profile warning, "Search raters have no control over how pages rank", the Starter Guide's "Thinking E-E-A-T is a ranking factor — No, it's not", and the word-count question "(No, we don't.)". **M07 should link back to M04-L03 for these and not re-teach them.** Below are only the M07-specific angles: AI, scale, dates, freshness and removal, plus a verified diff of what actually changed in October 2026.
- **M04 research §8** covers internal links, anchor text and "Every page you care about should have a link from at least one other page on your site." M07 reuses it for cluster linking.
- **M03-L05** (`seo-101/lessons/m03-l05-keyword-maps-cannibalisation.md`) covers the keyword map (one row per topic, one URL per topic) and the merge-and-redirect fix, including the quote "if you have consolidated content previously hosted on multiple pages to a new single page, you can redirect the older URLs to that new, consolidated page." It also defers "merging content" to Module 7. **M07 picks this up as the merge/retire workflow** and needs no new keyword-map theory.

---

## 1. Google's guidance on AI-generated content

### 1a. Search Central blog, 8 February 2023
Source: "Google Search's guidance about AI-generated content", **Wednesday, February 8, 2023**, posted by Danny Sullivan and Chris Nelson. https://developers.google.com/search/blog/2023/02/google-search-and-ai-content

- **Documented:** "Our focus on the quality of content, rather than how content is produced, is a useful guide that has helped us deliver reliable, high quality results to users for years."
- **Documented:** "Using automation—including AI—to generate content with the primary purpose of manipulating ranking in search results is a violation of our spam policies."
- **Documented:** "it's important to recognize that not all use of automation, including AI generation, is spam. Automation has long been used to generate helpful content, such as sports scores, weather forecasts, and transcripts."
- **Documented (FAQ):** "Appropriate use of AI or automation is not against our guidelines. This means that it is not used to generate content primarily to manipulate search rankings, which is against our spam policies."
- **Documented (FAQ, "Will AI content rank highly on Search?"):** "Using AI doesn't give content any special gains. It's just content. If it is useful, helpful, original, and satisfies aspects of E-E-A-T, it might do well in Search. If it doesn't, it might not."
- **Documented (FAQ):** "If you see AI as an essential way to help you produce content that is helpful and original, it might be useful to consider. If you see AI as an inexpensive, easy way to game search engine rankings, then no."
- **Documented (FAQ, bylines):** "You should consider having accurate author bylines when readers would reasonably expect it, such as to any content where someone might think, "Who wrote this?""
- **Documented (FAQ, disclosure):** "AI or automation disclosures are useful for content where someone might think "How was this created?". Consider adding these when it would be reasonably expected."
- **Documented (FAQ, AI as author):** "Giving AI an author byline is probably not the best way to follow our recommendation to make clear to readers when AI is part of the content creation process."
- **Documented (FAQ, misinformation):** "On topics where information quality is critically important—like health, civic, or financial information—our systems place an even greater emphasis on signals of reliability."
- No "Updates" section appears on the post, so the 2023 text is unchanged.

### 1b. "Google Search's guidance on using generative AI content on your website" (doc)
Source: https://developers.google.com/search/docs/fundamentals/using-gen-ai-content. **Last updated 2026-10-01.** The doc was added in May 2025 (docs update log: "May 21 … Added new documentation on AI features and your site and Google Search's guidance on using generative AI content on your website").

- **Documented:** "Generative AI can be particularly useful when researching a topic, and to add structure to original content. However, using generative AI tools or other similar tools to generate many pages without adding value for users may violate Google's spam policy on scaled content abuse."
- **Documented (points to the rater guidelines):** "You might find value in looking at the Search Quality Raters guidelines on how to evaluate both scaled content abuse (section 4.6.5) and main content created with little to no effort, little to no originality, and little to no added value (section 4.6.6). These guidelines are not a guide to ranking first in Google; they're used by our search raters to help evaluate the performance of our various search ranking systems, and their ratings don't directly influence ranking."
- **Documented, "Focus on accuracy, quality, and relevance" (the key quote for non-negotiable #10):** "When creating content for the web, focus on accuracy, quality, and relevance, especially when automatically generating the content. Keep in mind that generative models don't retrieve facts, but predict a likely sequence of words based on their training data. Because of this, generative AI outputs may contain inaccuracies (also known as hallucinations). It is critical to manually factcheck and review all AI-generated content for accuracy and trustworthiness before publishing. This review also applies to metadata like <title> elements, meta description elements, structured data, and alternate texts for images, which can appear in Search results."
  - **New on 2026-10-01 (verified by diff against the Wayback capture of 2026-08-02):** the sentences "Keep in mind that generative models don't retrieve facts … (also known as hallucinations). It is critical to manually factcheck and review all AI-generated content …" were added. The old text went straight to "This includes metadata like <title> elements…". The docs update log describes the change as: "Updated the using generative AI content guide with information from the Search Quality Raters guidelines. Why: To get our documentation in sync with our presentations we use at our developer events." (https://developers.google.com/search/updates, October 1 entry).
- **Documented, "Give users context" (disclosure):** "Sharing information about how a piece of content was created can help give your readers more context. If you're automatically generating content, consider adding information on how your content was created in a way that makes sense for your audience, such as by providing more background information on how automation was used and adding image metadata."
- **Documented (shops; relevant to Nila's WooCommerce feed):** "For ecommerce sites, Google Merchant Center has policies for AI-generated content. In particular, AI-generated images must contain metadata using the IPTC DigitalSourceType TrainedAlgorithmicMedia metadata. AI-generated product data such as title and description attributes must be specified separately and labeled as AI-generated."

### 1c. Who / How / Why disclosure wording (helpful-content page)
Source: https://developers.google.com/search/docs/fundamentals/creating-helpful-content. **Last updated 2026-10-05.** M04 already quotes the Who/Why lines; these are the AI-specific "How" lines in full.
- **Documented:** "Many types of content may have a "How" component to them. That can include automated, AI-generated, and AI-assisted content. Sharing details about the processes involved can help readers and visitors better understand any unique and useful role automation may have served."
- **Documented:** "If automation is used to substantially generate content, here are some questions to ask yourself:" "Is the use of automation, including AI-generation, self-evident to visitors through disclosures or in other ways?" · "Are you providing background about how automation or AI-generation was used to create content?" · "Are you explaining why automation or AI was seen as useful to produce content?"
- **Documented:** "Overall, AI or automation disclosures are useful for content where someone might think "How was this created?" Consider adding these when it would be reasonably expected."
- **Teaching note:** Google's disclosure wording is "consider" and "when it would be reasonably expected". It is a recommendation, not a requirement, for Search. (Merchant Center product data is the exception: there the label is a "must".)

### 1d. AI optimisation guide (May 2026): the AI angle on "commodity" content
Source: "Optimizing your website for generative AI features on Google Search", https://developers.google.com/search/docs/fundamentals/ai-optimization-guide. **Last updated 2026-07-10** (added 2026-05-15 per the docs update log). Mainly for Modern SEO 101, but these lines support M07 writing.
- **Documented:** "Don't just recycle what others on the internet have already said, or could easily be produced by a generative AI model."
- **Documented:** "Commodity content (for example, something like "7 Tips for First-Time Homebuyers") is often based on common knowledge, which could originate from anyone, and typically adds little unique insight for readers. In contrast, non-commodity content (such as "Why We Waived the Inspection & Saved Money: A Look Inside the Sewer Line") provides unique expert or experienced takes that go beyond common knowledge and the ordinary."
- **Documented (scale warning for cluster planning):** "While it might be tempting to create separate content for every possible variation of how people might search (for example, by focusing on other queries that people have asked, or fan-out queries), doing so primarily to manipulate rankings or generative AI responses in Google Search violates Google's scaled content abuse spam policy." It continues: "a high quantity of pages doesn't make a website higher quality or more relevant to users."
- **Documented:** "If you're using generative AI tools to assist in content creation, be sure that your work meets the standards of the Search Essentials and our spam policies."

---

## 2. Scaled content abuse, site reputation and related spam policies

Source: "Spam policies for Google web search", https://developers.google.com/search/docs/essentials/spam-policies. **Last updated 2026-08-28.**

- **Documented (definition of spam, now includes AI responses):** "spam refers to techniques used to deceive users or manipulate our Search systems into featuring content prominently, such as attempting to manipulate Search systems into ranking content highly or attempting to manipulate generative AI responses in Google Search." (The AI-responses clause was added in May 2026. Docs update log: "Clarified that our spam policies also apply to generative AI responses in Google Search.")
- **Documented:** "We detect policy-violating practices both through automated systems and, as needed, human review that can result in a manual action. Sites that violate our policies may rank lower in results or not appear in results at all."

### Scaled content abuse (verbatim, the whole section)
- "Scaled content abuse is when many pages are generated for the primary purpose of manipulating search rankings and not helping users. This abusive practice is typically focused on creating large amounts of unoriginal content that provides little to no value to users, no matter how it's created."
- "Examples of scaled content abuse include, but aren't limited to:" "Using generative AI tools or other similar tools to generate many pages without adding value for users" · "Scraping feeds, search results, or other content to generate many pages (including through automated transformations like synonymizing, translating, or other obfuscation techniques), where little value is provided to users" · "Stitching or combining content from different web pages without adding value" · "Creating multiple sites with the intent of hiding the scaled nature of the content" · "Creating many pages where the content makes little or no sense to a reader but contains search keywords"
- "If you're hosting such content on your site, exclude it from Search."

### Other policies relevant to content teams
- **Documented, Scraping:** "Republishing content from other sites without adding any original content or value, or even citing the original source" · "Copying content from other sites, modify it only slightly (for example, by substituting synonyms or using automated techniques), and republish it". (The grammar is Google's own.)
- **Documented, Thin affiliation:** "Thin affiliation is the practice of publishing content with product affiliate links where the product descriptions and reviews are copied directly from the original merchant without any original content or added value." Also: "Good affiliate sites add value by offering meaningful content or features."
- **Documented, Expired domain abuse:** "Expired domain abuse is where an expired domain name is purchased and repurposed primarily to manipulate search rankings by hosting content that provides little to no value to users."
- **Documented, Site reputation policy (current name; the March 2024 name was "site reputation abuse"):** "The site reputation policy applies where third-party content is published on a host site mainly because of that host's already-established ranking signals, which it has earned primarily from its first-party content." And: "Having third-party content alone isn't inconsistent with the site reputation policy; it's only inconsistent if the third-party content is published on a host site mainly because of that host site's already-established ranking signals." Its "NOT considered inconsistent" examples include "Columns, opinion pieces, articles, and other work of an editorial nature" and "Using affiliate links throughout a page, with links treated appropriately". Relevance to Nila: guest posts or sponsored "best grinders" pages written by others.
- **Documented, Policy circumvention:** "Using existing or creating new subdomains, subdirectories, or sites with the intention of continuing to violate our policies".

### Dates the policies were introduced or changed
- **Documented: introduced 5 March 2024.** "What web creators should know about our March 2024 core update and new spam policies", **Tuesday, March 5, 2024**, Chris Nelson. https://developers.google.com/search/blog/2024/03/core-update-spam-policies
  - "Today, we're announcing three new spam policies against bad practices we've seen grow in popularity: expired domain abuse, scaled content abuse, and site reputation abuse."
  - "This new policy builds on our previous spam policy about automatically-generated content, ensuring that we can take action on scaled content abuse as needed, no matter whether content is produced through automation, human efforts, or some combination of human and automated processes."
  - "Our new policy is meant to help people focus more clearly on the idea that producing content at scale is abusive if done for the purpose of manipulating search rankings and that this applies whether automation or humans are involved."
  - Site reputation abuse: "To allow time for site owners to prepare for this change, this new policy will take effect starting May 5, 2024."
  - Also in that post: "some third-party services provide "reputation" or "authority" scores for sites. These don't correspond to any of Google's own signals nor come from Google." (Useful for the M07 "tool metrics aren't Google" aside.)
  - Helpful content: the same post says the core update "marks an evolution in how we identify the helpfulness of content". The ranking systems guide (https://developers.google.com/search/docs/appearance/ranking-systems-guide, last updated 2025-12-10) lists the helpful content system under "Retired systems": "In March 2024, it evolved and became part of our core ranking systems".
- **Documented: 19 November 2024 clarification.** "Updating our site reputation abuse policy", **Tuesday, November 19, 2024.** https://developers.google.com/search/blog/2024/11/site-reputation-abuse — "no amount of first-party involvement alters the fundamental third-party nature of the content". The policy text was then: "Site reputation abuse is the practice of publishing third-party pages on a site in an attempt to abuse search rankings by taking advantage of the host site's ranking signals."
- **Documented: 28 August 2026 EEA change.** "Update to the Site Reputation Policy", **Friday, August 28, 2026.** https://developers.google.com/search/blog/2026/08/update-site-reputation-policy — "Beginning August 30, manual actions applied under our site reputation policy will have a different effect for those searching in the EEA than outside of it." "For users inside the EEA, the impact of the manual action won't apply. The affected section of the site may be separated in our systems so that, over time, it ranks independently from the rest of the site."

---

## 3. Search Quality Rater Guidelines (SQRG)

Source PDF: https://static.googleusercontent.com/media/guidelines.raterhub.com/en//searchqualityevaluatorguidelines.pdf. **Current version: "General Guidelines … September 11, 2025"** (cover page; PDF CreationDate 10 Sep 2025). As of 2026-11-08, no newer version is at this URL. 182 pages.

### Raters don't directly affect rankings (exact wording)
- **Documented (SQRG §0.1, p. 6):** "No single rating can directly impact how a particular webpage, website, or result appears in Google Search, nor can it cause specific webpages, websites, or results to move up or down on the search results page. Using ratings to position results on the search results page would not be feasible, as humans could never individually rate each page on the open web."
- **Documented (SQRG §0.1, p. 6):** "Instead, ratings are used to measure how effectively search engines are working to deliver helpful content to people around the world."
- **Documented (helpful-content page):** "Search raters have no control over how pages rank. Rater data is not used directly in our ranking algorithms. Rather, we use them as a restaurant might get feedback cards from diners."
- **Documented (gen-AI doc):** "their ratings don't directly influence ranking."

### Generative AI definition
- **Documented (SQRG §2.1, p. 10):** "Generative AI is a type of machine learning (ML) model that can take what it has learned from the examples it has been provided to create new content, such as text, images, music, and code. … Generative AI can be a helpful tool for content creation, but like any tool, it can also be misused."

### Effort (the rater definition that the helpful-content page now echoes)
- **Documented (SQRG §3.2, p. 21):** "Effort: Consider the extent to which a human being actively worked to create satisfying content." … "the automatic creation of thousands of pages by running existing freely available content through existing translation software without any oversight, manual curation, etc., would not be considered to have effort."
- **Documented (SQRG §3.2, p. 21):** "For informational pages and pages on YMYL topics, accuracy and consistency with well established expert consensus is important."

### Lowest: scaled content abuse (§4.6.5, p. 42)
- **Documented:** "Creating an abundance of content with little effort or originality with no editing or manual curation is often the defining attribute of spammy websites."
- **Documented (example):** "Using automated tools (generative AI or otherwise) as a low-effort way to produce many pages that add little-to-no value for website visitors as compared to other pages on the web on the same topic."
- **Documented:** "Pages and websites made up of content created at scale with no original content or added value for users, should be rated Lowest, no matter how they are created. Even if you are unsure of the method of creation, e.g. whether or not the page is created using generative AI tools, you should still use the Lowest rating when you strongly suspect scaled content abuse after looking at several pages on the website."

### Lowest: little effort, originality or added value (§4.6.6, pp. 42–43)
- **Documented:** "The Lowest rating applies if all or almost all of the MC on the page (including text, images, audio, videos, etc) is copied, paraphrased, embedded, auto or AI generated, or reposted from other sources with little to no effort, little to no originality, and little to no added value for visitors to the website. Such pages should be rated Lowest, even if the page assigns credit for the content to another source."
- **Documented (p. 43, the balanced line to teach):** "the use of Generative AI tools alone does not determine the level of effort or Page Quality rating. Generative AI tools may be used for high quality and low quality content creation." It continues: "it's also possible to use Generative AI tools to create Lowest quality content with little to no effort, little to no originality, and little to no added value for website visitors."
- **Documented (p. 43):** "Paraphrasing may be valuable, for example when an expert paraphrases the contents of a government policy in easy-to-understand language."

### How raters spot copied or AI-paraphrased text (§4.6.7, pp. 43–44): free method for the break-it lab
- **Documented:** "Copy a sentence or phrase in the text." … "Search on Google by pasting the sentence or phrase (surrounded by quotation marks to search for an exact match)". Then: "Does one source appear to have the earliest publication date, verified by sources like the Wayback Machine?"
- **Documented (signs of paraphrased content, p. 44):** "Only contain commonly known information or generally known facts" · "Have high overlap with webpages on well established sources such as Wikipedia, reference websites, etc." · "Have words or other indications of summarizing or paraphrasing generative AI tools, such as words like "As an AI language model""
- **Documented (worked examples):** p. 55 shows a YMYL medical article rated "Lowest: Scaled content abuse", whose text begins "As a language model, I don't have real-time data and my knowledge cutoff date is September 2021." p. 58 says of a Q&A page: "the sentences may make sense individually, but not as a whole" and "The text does not appear to have been written or edited by a human editor."

### Fake authors (SQRG §4.5, p. 37)
- **Documented:** "A webpage or website with "fake" owner or content creator profiles. For example, AI generated content with made up "author" profiles (AI generated images or deceptive creator descriptions) in order to make it appear that the content is written by people."
- **Documented:** "Factually inaccurate and deceptive information about creator expertise. For example, an author or creator profile inaccurately claims to have credentials or expertise (e.g. the content creator claims falsely to be a medical professional) to make the content appear more trustworthy than it is."

### Filler (§5.2.2, p. 62): ties to "padding to a word count"
- **Documented:** "Sometimes, MC includes "filler" - low-effort content that adds little value and doesn't directly support the purpose of the page. Filler can artificially inflate content, creating a page that appears rich but lacks content website visitors find valuable."
- **Documented:** "Web site owners and content creators should place the most helpful and essential MC near the top of the page so that visitors can immediately access it." The recipe example: "on recipe pages, the recipe itself and important supporting content directly related to the recipe should be prominently displayed near the top of the webpage." (This applies directly to Nila's brew guides: the recipe or ratio goes first, the story after.)
- **Documented:** "A Low rating is appropriate if the page … Contains a large amount of low quality and unhelpful filler, causing a poor experience for people visiting the page".

---

## 4. Helpful content: what actually changed on 2026-10-05

Source: https://developers.google.com/search/docs/fundamentals/creating-helpful-content. **Last updated 2026-10-05.** Compared with the Wayback capture of **2026-09-02** (which showed "Last updated 2025-12-10").

**Verified diff (sentence-level):** this was an **addition, not a rewrite.** Nothing was removed or reworded. Three blocks were added:
1. A bridge paragraph after the raters section: "Beyond E-E-A-T, the Search Quality Evaluator Guidelines emphasize that one of the most critical factors for assessing page quality is the quality of the main content, specifically how effectively it allows the page to achieve its purpose and provide a satisfying user experience."
2. A new **"Main content"** section. It starts "Google Search defines "main content" as any part of the web page that directly helps the page achieve its purpose." It lists "Primary text and media", "Interactive features", "User-generated contributions", "Tabbed or expanded sections" and "Page titles and headings", then the four attributes (Effort, Originality, Talent or skill, Accuracy), which M04 already quotes.
3. In "Who", a deception paragraph: "However, avoid using deceptive authorship information. Fabricating creator profiles (such as by using AI-generated headshots, made-up names, or false credentials to make content appear as if it was written by human experts) is a form of deception. Any form of deception makes a page untrustworthy to both users and our automated quality systems, and is a signal of a low-quality page."

**The parts M07 needs most (new or not quoted in M04):**
- **Documented (Effort, the AI line):** "Conversely, automatically generating pages from feeds or using generative AI to produce large amounts of text without manual oversight or curation represents little to no effort. Attribution or giving credit to other sources doesn't replace the need for original effort."
- **Documented (Accuracy):** "For informational pages, the content should be factually accurate. For topics that could significantly impact people's lives or well-being (YMYL topics), the content must be highly accurate and consistent with established expert consensus."
- **Documented (Talent or skill, which reassures small creators):** "Keep in mind that not all content requires specialized expertise. For example, a person sharing their experience about finding a new way to clear their driveway of snow generally doesn't necessarily require specialized expertise."
- **Documented, older self-assessment lines M04 did not quote but M07 needs (unchanged, pre-2026):**
  - "Is the content mass-produced by or outsourced to a large number of creators, or spread across a large network of sites, so that individual pages or sites don't get as much attention or care?"
  - "Are you producing lots of content on many different topics in hopes that some of it might perform well in search results?"
  - "Are you using extensive automation to produce content on many topics?"
  - "Are you writing about things simply because they seem trending and not because you'd write about them otherwise for your existing audience?"
  - "Does your content promise to answer a question that actually has no answer, such as suggesting there's a release date for a product, movie, or TV show when one isn't confirmed?"
  - "Are you adding a lot of new content or removing a lot of older content primarily because you believe it will help your search rankings overall by somehow making your site seem "fresh?" (No, it won't)"
  - "Does the content have any spelling or stylistic issues?"
  - "Would you expect to see this content in or referenced by a printed magazine, encyclopedia, or book?"
- **Not in the docs update log.** The 2026-10-05 change has no entry on https://developers.google.com/search/updates (October 2026 lists only Oct 1 gen-AI, Oct 8, 16, 21, 23 and 26). No blog post announced it either. See "Freshness flags".

---

## 5. Topic clusters and pillar pages

### What Google documents (site structure and internal links, with no "cluster" or "pillar" wording)
- **Documented:** Google's docs don't use the terms "topic cluster", "pillar page" or "hub page" in any page fetched for this research (Starter Guide, links, ecommerce site structure, helpful content, ranking systems, AI optimisation guide).
- **Documented (Starter Guide, "Group topically similar pages in directories"):** "If you have more than a few thousand URLs on your site, how you organize your content may have effects on how Google crawls and indexes your site. Specifically, using directories (or folders) to group similar topics can help Google learn how often the URLs in individual directories change." https://developers.google.com/search/docs/fundamentals/seo-starter-guide (last updated 2025-12-10). → For a small site like Nila's, folder structure is a crawl-scheduling convenience, not a ranking lever.
- **Documented (ecommerce site structure):** "Google tries to find the best content on your site by analyzing the relationship between pages based on their linkages." And: "Google generally doesn't look at the structure of URLs to work out the structure of a site. Instead, it analyzes the linkages between pages to gain insights about the relative importance of different pages on a site. As a general rule, the more links a page has to it within a site, the higher the relative importance of the page to other pages on your site." https://developers.google.com/search/docs/specialty/ecommerce/help-google-understand-your-ecommerce-site-structure (last updated 2025-12-10)
- **Documented (same page, cluster-like advice in Google's words):** "if you have a best selling product, consider linking to it from the home page or in other content, such as blog posts or newsletters on your site."
- **Documented (links doc):** "Think about what other resources on your site could help your readers understand a given page on your site, and link to those pages in context." https://developers.google.com/search/docs/crawling-indexing/links-crawlable (last updated 2025-12-10). (M04 covers the rest.)
- **Documented (Starter Guide):** "links can also add value by connecting users (and Google) to another resource that corroborates what you're writing about."

### Industry origin (HubSpot). Label as Observed practice
- **Observed practice (origin and date):** HubSpot, "Topic Clusters: The Next Evolution of SEO" by Mimi An. A Wayback capture from 2019-12-12 shows "**Originally published May 10, 2017** 9:00:00 AM, updated December 11 2019". https://blog.hubspot.com/marketing/topic-clusters-seo (capture: http://web.archive.org/web/20191212091256/https://blog.hubspot.com/marketing/topic-clusters-seo). The live page shows "Updated: 06/17/26".
- **Observed practice (2019 capture, definition):** "SEO is now shifting to a topic cluster model, where a single "pillar" page acts as the main hub of content for a overarching topic and multiple content pages that are related to that same topic link back to the pillar page and to each other."
- **Observed practice (2019 capture):** "HubSpot's Anum Hussain and Cambria Davies launched topic cluster experiments for a select group of topics in 2016." That is HubSpot's own experiment, not independent research.
- **Observed practice (pillar sniff test, Leslie Ye, quoted in both versions):** "Would this page answer every question the reader who searched X keyword had, AND is it broad enough to be an umbrella for 20-30 posts?" and "if you're trying to get the page you're working on to rank for a long-tail keyword, it's not a pillar page."
- **Observed practice (live 2026 page):** "Topic clusters are also known as "content clusters" or the "hub and spoke" model."
- **Myth/contested:** The 2019 capture says "Algorithms like Google's RankBrain reward this orderly linking with higher search placement." The live page says the structure "signals to search engines and answer engines that your site covers a subject thoroughly" and talks of "topical authority". Google has published no doc that confirms a "pillar" signal or "topical authority" score. Teach clusters as a **planning and internal-linking method** that fits Google's documented link guidance, not as a ranking factor.
- **Teaching tension:** HubSpot's "20 to 30 supporting articles" per pillar (live page) is far too many for a small shop on a 3-month plan, and it rubs against Google's scale warnings (§1d and §2). For Nila, suggest 1 pillar and 4–6 cluster posts.

---

## 6. Content briefs, publish checklists, dates, bylines and sources

### Briefs and checklists (Observed practice)
- **Observed practice:** Google has no "content brief" doc. Brief templates are an industry convention. The usual fields are target keyword and intent, audience, the angle or unique value, an outline (H2s), questions to answer, sources, internal links in and out, CTA, word range and deadline. (Ahrefs's /blog/content-brief/ returned 404 on 2026-11-08. No reputable template page was captured verbatim; see "Not found".)
- **Documented, the closest Google gets to a brief and checklist (to anchor each field):**
  - User need first. GOV.UK: "Before you start writing, identify a user need." "Publish only what's needed to meet that user need and nothing more." https://guidance.publishing.service.gov.uk/writing-to-gov-uk-standards/writing-guidelines/meet-user-needs/
  - Audience. Helpful content: "Do you have an existing or intended audience for your business or site that would find the content useful if they came directly to you?"
  - Unique angle. Starter Guide: "create the content yourself based on what you know about the topic. Don't just rehash what others already published."
  - Sources. Starter Guide: "providing expert or experienced sources can help people understand your articles' expertise." Helpful content: "clear sourcing, evidence of the expertise involved".
  - Facts. Gen-AI doc: "It is critical to manually factcheck and review all AI-generated content for accuracy and trustworthiness before publishing." Helpful content: "Does the content have any easily-verified factual errors?"
  - Metadata check. Gen-AI doc: the review "also applies to metadata like <title> elements, meta description elements, structured data, and alternate texts for images".
  - Links. Links doc: "Every page you care about should have a link from at least one other page on your site." (M04.)
  - Outbound trust. Starter Guide: "when you're linking to pages outside of your control, for example content on other sites, make sure you trust the resource you're linking to."

### Byline dates
Source: "Influence your byline dates in Google Search", https://developers.google.com/search/docs/appearance/publication-dates. **Last updated 2025-12-10.**
- **Documented:** "A byline date is the date that Google estimates that the web page was updated or published."
- **Documented:** "Google doesn't depend on a single date factor because all factors can be prone to issues. That's why our systems look at several factors to determine our best estimate of when a page was published or significantly updated."
- **Documented:** "Add a user-visible date to the page and feature it prominently. Label your dates appropriately with text like "Publish" or "Last updated"." Examples given: "Posted Feb 4, 2019" · "Published February 4, 2019" · "Last updated: Feb 14, 2018" · "Updated Feb 14, 2019 8pm ET".
- **Documented:** "add a subtype of CreativeWork (such as Article, BlogPosting, or VideoObject), and specify the datePublished and/or dateModified fields."
- **Documented:** "Make your dates and times consistent. Ensure that the date (and optional time and timezone) match between the equivalent user-visible and structured values."
- **Documented:** "Don't specify future dates, or the date of the action described on the page."
- **Documented:** "While Google doesn't guarantee that a byline date, whether visible or in structured data, will be shown in search results, following these guidelines does help our algorithms find and process the information."

### Author bylines and markup
- **Documented (helpful content):** "We strongly encourage adding accurate authorship information, such as bylines to content where readers might expect it." (The fabricated-profile warning is in §4.)
- **Documented (Article structured data, https://developers.google.com/search/docs/appearance/structured-data/article, last updated 2026-09-08):** `author.url` is "A link to a web page that uniquely identifies the author of the article. For example, the author's social media page, an "about me" page, or a bio page." And: "Make sure that all the authors that are presented as authors on the web page are also included in markup." (Markup details go to M12; M07 needs only "byline → author page".)

### Citing sources
- **Documented:** no Google doc sets a citation format. Google's lines are: "clear sourcing" (helpful content); "Attribution or giving credit to other sources doesn't replace the need for original effort" (helpful content, 2026); "Such pages should be rated Lowest, even if the page assigns credit for the content to another source" (SQRG §4.6.6); and the Original content systems "help ensure we are showing original content prominently in search results, including original reporting, ahead of those who merely cite it" (ranking systems guide).
- **Observed practice:** link to the primary source (study, manufacturer spec, government page), not to a blog that repeats it. Name the source in the sentence, and record each claim → URL → date checked in the fact-check log.

---

## 7. Refreshing, merging and retiring content

### Updating and dates
- **Documented (Starter Guide):** "The content is up-to-date: Check in on previously published content and update it as needed, or even delete it if it's not relevant anymore."
- **Documented (helpful content, warning signs):** "Are you changing the date of pages to make them seem fresh when the content has not substantially changed?" and "Are you adding a lot of new content or removing a lot of older content primarily because you believe it will help your search rankings overall by somehow making your site seem "fresh?" (No, it won't)". The docs update log dates these lines to **September 14, 2023**: "Added new points about removing content or changing dates to the help page on how to create helpful, reliable people-first content."
- **Google public comment (John Mueller, Twitter/X, 5 Feb 2022, via Search Engine Roundtable 7 Feb 2022):** "When you write something new, or siginificantly change something existing, then change the date. Changing the date without doing anything else is just noise & useless." (Typo as in the source.) https://www.seroundtable.com/google-update-content-date-32878.html. The original tweet wasn't fetched.
- **Google public comment (Mueller, 2023, search-tool summary, not verbatim):** a search tool reported that Mueller said "just tweaking, and saying 'oh, still valid in 2023' is not a significant update". No primary source was captured, so **don't quote it**.

### Freshness / "QDF": documented vs myth
- **Documented (ranking systems guide):** "We have various "query deserves freshness" systems designed to show fresher content for queries where it would be expected. For example, if someone is searching about a movie that's just been released, they probably want recent reviews rather than older articles from when production began." https://developers.google.com/search/docs/appearance/ranking-systems-guide (last updated 2025-12-10)
- **Documented (history):** Official Google Blog, "Giving you fresher, more recent search results", **November 3, 2011**, Amit Singhal. https://googleblog.blogspot.com/2011/11/giving-you-fresher-more-recent-search.html — "today we're making a significant improvement to our ranking algorithm that impacts roughly 35 percent of searches". It names three kinds of search: "Recent events or hot topics", "Regularly recurring events", "Frequent updates" (example: "[best slr cameras]"). "Different searches have different freshness needs."
- **Myth/contested:** "Google rewards sites that publish often" or "fresh dates rank higher". Freshness applies **per query** where recency is expected. Google says outright that adding or removing content to look "fresh" won't help ("No, it won't"). For Nila, freshness matters for "best coffee grinder 2026"-style queries, not for "French press ratio".

### Improve first, delete last
- **Documented (core updates doc, https://developers.google.com/search/updates/core-updates, last updated 2025-12-10):** "Consider how you can improve your content in meaningful ways. For example, it could be that rewriting or restructuring your content makes it easier for your audience to read and navigate the page." And: "Deleting content is a last resort, and only to be considered if you think the content can't be salvaged. In fact, if you're considering deleting entire sections of your site, that's likely a sign those sections were created for search engines first, and not people."
- **Documented (same page):** "Avoid doing "quick fix" changes (like removing some page element because you heard it was bad for SEO)."

### Merging (redirect)
- **Documented (redirects doc, https://developers.google.com/search/docs/crawling-indexing/301-redirects, last updated 2026-04-14):** the use cases include "You removed a page and you want to send users to a new page." And: "If you need to change the URL of a page as it is shown in search engine results, we recommend that you use a permanent server-side redirect whenever possible." "Permanent redirects: Show the new redirect target in search results." "Use permanent redirects when you're sure that the redirect won't be reverted."
- M03-L05 already quotes the "consolidated content … redirect the older URLs" line, so reuse it.

### Retiring (404/410 vs redirect)
- **Documented (HTTP status codes doc, https://developers.google.com/search/docs/crawling-indexing/http-network-errors, last updated 2026-02-04):** "All 4xx errors, except 429, are treated the same: Google crawlers inform the next processing system that the content doesn't exist. In the case of Google Search, the indexing pipeline removes the URL from the index if it was previously indexed." Both "404 (not found)" and "410 (gone)" sit in that group.
- **Documented (same doc):** "If a URL was previously used but is now returning 4xx status code, Google systems will stop using the URL over time."
- **Documented (soft 404):** "If the content suggests an error for Google Search, an empty page or an error message, Search Console will show a soft 404 error." → Don't "retire" a post by emptying it and leaving it at 200.
- **Documented (remove-a-page doc, https://developers.google.com/search/docs/crawling-indexing/remove-information, last updated 2025-12-10):** "Requests made in the Removals tool last for about 6 months." Permanent options: "Remove or update the content on your page", "Password-protect your page", "Add a noindex tag". Also: "Don't use robots.txt as a way to block your page."
- **Myth/contested:** "410 removes pages much faster than 404." The current doc treats all 4xx (except 429) "the same". Any speed difference comes from older Googler comments, which weren't captured (see "Not found"). Teach: redirect when a close replacement exists, and 404/410 when nothing replaces it. Either code is fine.
- **Observed practice (GOV.UK retire options, a clean model):** "withdraw the content - this keeps the content on the site, but it does not appear in internal search results and there'll be a banner to it to explain that the content is no longer current" · "unpublish the content - this removes the content from the site completely and lets you set up a redirect to current content". "Guidance should usually be updated rather than withdrawn." Test: "'will leaving it as it is get in the way of a non-specialist user?'" https://guidance.publishing.service.gov.uk/writing-to-gov-uk-standards/plan-manage-content/retire-content/

---

## 8. AI fact-checking: vendor statements and verification methods

### Vendor statements that models can be wrong
- **Documented (Google, gen-AI content doc):** "generative models don't retrieve facts, but predict a likely sequence of words based on their training data. Because of this, generative AI outputs may contain inaccuracies (also known as hallucinations)." (§1b)
- **Documented (Anthropic, help article "Claude is providing incorrect or misleading responses. What's going on?", dated March 16, 2026):** "Claude can occasionally produce responses that are incorrect or misleading. This is known as "hallucinating" information". It goes on: "Claude can display quotes that may look authoritative or sound convincing, but are not grounded in fact. In other words, Claude can write things that might look correct but are very mistaken." Then: "Users should not rely on Claude as a singular source of truth and should carefully scrutinize any high-stakes advice given by Claude." And: "When working with web search results, users should review Claude's cited sources. Original websites may contain important context or details not included in Claude's synthesis." https://support.claude.com/en/articles/8525154-claude-is-providing-incorrect-or-misleading-responses-what-s-going-on
- **Documented (Google Gemini Apps Help, "Learn about responses from Gemini Apps"):** "Gemini Apps are continuously evolving and may sometimes produce inaccurate, offensive, or inappropriate information that doesn't represent Google's views." "Gemini Apps may provide inaccurate or inappropriate responses about people, so double-check its responses." "Gemini can hallucinate and present inaccurate information as factual. One example is that Gemini can misrepresent how it works, including in response to prompts asking how it was trained or how it carries out various functions (like citing sources, or providing fresh information)." https://support.google.com/gemini/answer/16279220?hl=en
- **Documented, feature (Gemini "Double-check response"), search-tool summary, not verbatim:** the help page https://support.google.com/gemini/answer/14143489 describes a Google button that uses Search to find content "likely similar to or different from" Gemini's statements. The page body is JavaScript-rendered and was not captured verbatim. UI path "More > Double-check response" is from a search summary, not tested live.
- **OpenAI:** the help article "Does ChatGPT tell the truth?" (https://help.openai.com/en/articles/8313428-does-chatgpt-tell-the-truth) and the research post https://openai.com/index/why-language-models-hallucinate/ both returned **HTTP 403** to curl and WebFetch. **No OpenAI wording was captured.** Secondary blogs claim OpenAI help text mentions "fabricated quotes, studies, citations or references to non-existent sources", but that is **unverified, so don't quote it.**
- **Hallucination rates:** no vendor-published rate was captured. A search tool cited a Columbia Tow Center study (153 of 200 quote-attribution tests incorrect or partly incorrect) via secondary posts only. **Unverified; don't use the figures** unless the Tow Center primary report is fetched. Teach "models make things up, often" without a number.

### Practical verification methods (Observed practice unless labelled)
- **Documented (SQRG §4.6.7), the exact-phrase search:** paste a sentence in quotation marks into Google to find its source. Use the Wayback Machine to see which copy came first. The same method checks a "quote" the AI gave you: if the exact words appear nowhere, treat the quote as invented.
- **Documented (Anthropic):** "review Claude's cited sources" and open the original page.
- **Observed practice: the claim-by-claim log.** List every number, name, quote, date and product spec in the draft. For each, record the primary source URL, the exact supporting sentence, the date checked, and a verdict (keep / fix / cut). This is the edit/fact-check log the capstone asks for.
- **Observed practice: check that links resolve.** Open every AI-supplied URL. Fabricated links often 404 or point to an unrelated page. Anthropic's help centre has a related article titled "Claude is producing links that don't work…" (title only, seen in Related Articles).
- **Observed practice: check statistics at the source.** Find the original study or survey. Check the sample, the year and who funded it, and that the number really says what the draft claims.
- **Observed practice: get first-hand checks from the business.** For Nila, brew ratios, roast dates, grind settings and prices are checked against the roaster's own notes or tests, not against the AI or other blogs.
- **Free tools (Observed practice):** Google exact-phrase search; Wayback Machine (web.archive.org); Google Fact Check Explorer (toolbox.google.com/factcheck/explorer; not fetched in this research, so recheck the URL); Gemini Double-check (from docs, not tested live).

---

## 9. Readability: plain language and what Google says

### Plain language guidance (reputable bodies)
- **Documented (U.S. government):** plainlanguage.gov now redirects to digital.gov. "This content is adapted from PlainLanguage.gov … All of the original content from the PlainLanguage.gov website is archived in the PlainLanguage.gov GitHub repository." https://digital.gov/guides/plain-language (plainlanguage.gov/guidelines/ → redirect)
- **Documented (digital.gov, "Writing for understanding"):** "Research shows that content is easier to understand when you use language made up of, among other things," "Shorter words" · "Short sections" · "Active voice" · "Present tense". Also: "Active voice makes it clear who should do what." Hidden-verb example: "We analyze data." instead of "We conduct an analysis of the data." https://digital.gov/guides/plain-language/writing
- **Documented (GOV.UK, "Use clear language"):** "Paragraphs should have no more than 5 sentences each." "Try to split up sentences that are over 25 words long." "There's no maximum or minimum overall page length. It's most important that you write well. If you write only a single paragraph but it's full of jargon, then it's too long." "Use 'buy' instead of 'purchase', 'help' instead of 'assist', and 'about' instead of 'approximately'." On specialists: "the more educated the person and the more specialist their knowledge, the greater their preference for plain English". https://guidance.publishing.service.gov.uk/writing-to-gov-uk-standards/writing-guidelines/clear-language/
- **Documented (GOV.UK, "Create a clear structure"):** "only read 20 to 28% of text on a webpage, and can skim even more out of impatience". "Put the most important information first. … This is sometimes called an 'inverted pyramid' approach." On headings: "descriptive – avoid generic headings like 'Introduction'" and "removable – the content should still make sense with the headings removed". https://guidance.publishing.service.gov.uk/writing-to-gov-uk-standards/writing-guidelines/clear-structure/
  - **Conflict:** GOV.UK says headings should not "be questions". Many SEO and AEO guides use question headings. See "Conflicts".
- **Documented (GOV.UK, user's words):** "You might want to look at common search terms to find what words are more commonly used. For example, you can look at whether more users search for 'heavy goods vehicle' or 'lorry'." This matches Google's charcuterie / cheese board example in the Starter Guide.
- Note: GOV.UK's content design guidance moved from gov.uk/guidance/content-design/… to **guidance.publishing.service.gov.uk/writing-to-gov-uk-standards/…** (the old URLs redirect).

### What Google says
- **Documented (Starter Guide):** "The text is easy-to-read and well organized: Write content naturally and make sure the content is well written, easy to follow, and free of spelling and grammatical mistakes. Break up long content into paragraphs and sections, and provide headings to help users navigate your pages."
- **Documented (AI optimisation guide):** "Write content for your human audience and make sure the content is well written and easy to follow."
- **Documented (SQRG §3.2 / helpful content):** "Talent or skill … (such as clear writing, well-produced video, or functional page tools)".
- **Google public comment (John Mueller, Webmaster Office Hours, reported as 23 January 2018), search-tool summary, not verbatim:** secondary sites report Mueller saying Google doesn't use basic reading-level formulas, e.g. "As far as I know, we don't have these basic algorithms that just count words and try to figure out what the reading level is." The original video was **not** fetched. Present it as "Mueller has said (2018, reported)", and recheck the video before quoting.
- **Myth/contested:** "Flesch score / Yoast readability light is a ranking factor." No Google doc mentions readability scores. Treat plugin readability scores as a writing aid for people, not a ranking signal. Correlation studies (e.g. a Semrush study cited secondarily) don't show causation.

---

## 10. Word count

- **Documented (Starter Guide, "Minimum or maximum content length"):** "The length of the content alone doesn't matter for ranking purposes (there's no magical word count target, minimum or maximum, though you probably want to have at least one word). If you are varying the words (writing naturally to not be repetitive), you have more chances to show up in Search simply because you are using more keywords." https://developers.google.com/search/docs/fundamentals/seo-starter-guide (last updated 2025-12-10)
- **Documented (helpful content, already in M04):** "Are you writing to a particular word count because you've heard or read that Google has a preferred word count? (No, we don't.)"
- **Documented (AI optimisation guide, 2026):** "sometimes shorter (or longer!) pages can work well depending on your audience and subject matter. There's no ideal page length, and in the end, make pages for your audience, not just for generative AI search."
- **Documented (GOV.UK):** "There's no maximum or minimum overall page length."
- **Documented (SQRG §5.2.2):** filler "can artificially inflate content".
- **Observed practice:** briefs often carry a word range taken from competitor length. Teach it as a scope estimate ("this needs about 1,200 words to cover the steps"), never a target to pad to.
- **Google public comments with dates on word count:** not captured beyond the docs (search was rate-limited). The docs are enough.

---

## Freshness flags

1. **Gen-AI content doc updated 2026-10-01** with the new "hallucinations … critical to manually factcheck" sentences. Older articles quoting this page won't have them. Recheck before L4 is published.
2. **Helpful-content page updated 2026-10-05** (Main content section and fabricated-creator paragraph), with **no entry in the docs update log and no blog post**. It may be revised again quietly, so recheck the wording before quoting.
3. **Spam policies updated 2026-08-28:** "Site reputation abuse" is now titled **"Site reputation policy"**, with EEA-specific enforcement from 30 Aug 2026. The EEA arrangement follows "discussion with the European Commission" (DMA) and may change again.
4. **Spam definition now covers "generative AI responses in Google Search"** (May 2026).
5. **SQRG version is September 11, 2025.** Raters' guidelines are revised about once a year. Check the cover date before quoting section numbers (4.6.5 and 4.6.6 are cited by number in Google's own gen-AI doc).
6. **AI optimisation guide (2026-05-15, last updated 2026-07-10)** is new and may change fast.
7. **HubSpot topic-cluster page** was rewritten in 2026 (AEO framing). Quote the 2017/2019 wording only with the Wayback link.
8. **Anthropic help article** is dated March 16, 2026. Vendor help pages change often.
9. **Mueller's date comment is from 2022**, and the readability comment (reported) is from 2018. Both are old. Present them as dated public comments.
10. **The freshness algorithm blog post is from 2011** ("35 percent of searches"). The figure is historical; don't present it as current.
11. **plainlanguage.gov no longer exists as a standalone site**; it redirects to digital.gov. Cite digital.gov.
12. **GOV.UK content-design URLs moved** to guidance.publishing.service.gov.uk.
13. Danny Sullivan **left the Search Liaison role on August 1, 2025** (search-tool summary of a ppc.land report, not verified). The 2023 blog post he co-wrote is still valid as an official post.

## Conflicts between sources

1. **Question headings.** GOV.UK: headings should not "be questions – they're hard to frontload and users want answers, not questions." SEO/AEO practice (and Google's FAQ-style examples elsewhere) often uses question H2s. → Teach either style. Use a question H2 when it mirrors the searcher's question, and answer it in the first sentence underneath (GOV.UK's frontloading still applies).
2. **"Topical authority" / pillar ranking boost (HubSpot) vs Google's docs.** Google documents only links, anchor text and link-based importance; there's no pillar signal. → Teach clusters as planning plus internal linking.
3. **Cluster size.** HubSpot: an umbrella "for 20-30 posts". Google's helpful-content and AI guide warn against "producing lots of content on many different topics" and "separate content for every possible variation". → Small, deliberate clusters for small sites.
4. **Disclosure: "should" vs "consider".** Google Search: disclosures are useful "when it would be reasonably expected" (recommendation). Merchant Center: AI-generated product title and description data "must be specified separately and labeled" (requirement). → Different products, different rules.
5. **Crediting sources vs effort.** Learners may think "I cited it, so it's fine." Google (2026): "Attribution or giving credit to other sources doesn't replace the need for original effort"; SQRG: Lowest "even if the page assigns credit". → Citing is required (#9) but is not enough on its own.
6. **Paraphrase.** SQRG calls paraphrased MC a Lowest-quality sign, but also says "Paraphrasing may be valuable, for example when an expert paraphrases the contents of a government policy in easy-to-understand language." → What matters is the added value.
7. **404 vs 410.** The current doc treats all 4xx the same. Folklore says 410 is faster. → Follow the doc.
8. **Freshness.** QDF systems do favour fresh content for some queries, but the helpful-content page says making a site seem "fresh" won't help. → Freshness depends on the query; it isn't a site-wide boost.

## Not found

- **OpenAI help article and research post** (403 to curl and WebFetch). No OpenAI wording on hallucinations was captured.
- **A published hallucination rate** from any vendor. The Columbia Tow Center figures were seen only in secondary posts.
- **Gemini "Double-check response" help page body** (JS-rendered). The feature is described only via a search summary.
- **Bing Webmaster Guidelines on AI or content quality.** The page (https://www.bing.com/webmasters/help/webmaster-guidelines-30fba23a) renders with JavaScript, and curl returned an empty shell (as in M04). **No Bing quotes.**
- **A reputable, verbatim content-brief template** (Ahrefs /blog/content-brief/ returned 404). Briefs are labelled Observed practice only.
- **Google statement on "hub" or "pillar" pages.** Not in any fetched doc.
- **Primary source for Mueller's 2018 readability comment** (office-hours video) and his 2023 "still valid in 2023" date comment. Secondary only.
- **The original Mueller tweet** (5 Feb 2022). Quoted via Search Engine Roundtable.
- **A Googler comment that 410 is processed faster than 404.** Not captured.
- **GOV.UK "reading age 9" guidance** (often quoted). Not on the clear-language page fetched. Don't use it without finding it.
- **A Google doc defining "publish checklist" or editorial review.** None. The checklist items are assembled from the docs quoted in §6.
- **Docs-update-log entry or blog post for the 2026-10-05 helpful-content change.** None exists. The change was confirmed only by diffing Wayback.

## Suggested lesson split (6 lessons, topic order)

1. **M07-L01: Content strategy and topic clusters.** Goals and audience, topics from the M03 keyword map, a pillar with 4–6 cluster posts for Nila, cluster internal links (Google's link-importance wording; HubSpot 2017 origin labelled as industry), and a realistic 3-month calendar (no scale-for-scale's-sake; §1d/§2 warnings).
2. **M07-L02: The content brief and post formats by intent.** Brief fields, each tied to a Google or GOV.UK line (§6). Formats by intent: how-to/brew guide, comparison, "best X" (freshness-sensitive), product-led. Commodity vs non-commodity angles, and word range as scope, not a target.
3. **M07-L03: SEO writing that ranks and reads well.** Frontload the answer (GOV.UK, SQRG recipe rule), headings, short sentences and paragraphs, plain words, examples and first-hand experience, citing primary sources, filler vs substance, word-count and readability-score myths.
4. **M07-L04: AI as a helper: where it helps, where it fails, and the human edit and fact-check pass.** Google's 2023 post and the 2026 gen-AI doc ("don't retrieve facts"), vendor hallucination statements, the claim-by-claim fact-check log, disclosure (Who/How/Why, no AI bylines, no fake authors), and scaled content abuse plus SQRG Lowest examples.
5. **M07-L05: The publish checklist.** One keyword and intent, facts checked, sources cited, internal links in and out, title/meta/alt reviewed (gen-AI doc includes metadata), byline and author page, visible date plus datePublished, and the people-first self-check. Non-negotiable #9 in practice.
6. **M07-L06: Refresh, merge or retire.** Search Console signals for decaying posts, what counts as a real update (date rules, Mueller 2022, "No, it won't"), QDF, merge plus 301 (from M03-L05), retire with 404/410 vs redirect, soft-404 trap, the GOV.UK withdraw/unpublish model, and "deleting content is a last resort".

(Capstone and break-it lab follow L06.)

## Break-it lab ideas (planted errors and how to find each with free tools)

The lab uses an "AI draft" of a Nila brew-guide post, e.g. "How to make cold brew at home", targeted at a how-to intent.
1. **Invented statistic.** "73% of coffee drinkers now prefer cold brew (National Coffee Institute, 2025)." The institute doesn't exist. **Find it:** search the exact phrase and the organisation name in quotes in Google, and search the claim. No primary source means cut it or replace it with a real, linked one. Log it in the fact-check log.
2. **Fake quote.** A quote attributed to a real-sounding barista or a famous roaster. **Find it:** search the quote in quotation marks (the SQRG §4.6.7 method). If no original exists, it's invented. Anthropic's help page warns that quotes "may look authoritative … but are not grounded in fact".
3. **Wrong intent.** The draft is a "Top 10 cold brew makers to buy" listicle (commercial) for a how-to query. **Find it:** Google the target keyword and classify the top 10 results (M03-L01). They're recipes and step-by-step guides, so restructure the draft as steps with the ratio first.
4. **Wrong fact (bonus).** A wrong steep time or ratio, such as "steep for 2 hours". **Find it:** check against Nila's own tested recipe or a reputable primary source. Record the correction.
5. **Dead or fabricated source link (bonus).** **Find it:** click every link. Fabricated links 404 or point to an unrelated page.
6. **AI leftovers (bonus).** "As an AI language model…" or "In today's fast-paced world…" filler at the top. **Find it:** read-through and Ctrl+F. SQRG p. 44 lists "As an AI language model" as a sign, and §5.2.2 covers filler.
7. **Fake byline (bonus).** "By Dr. Maya Brew, PhD Coffee Science" with an AI headshot. **Find it:** reverse-image search the headshot (Google Lens) and search the name. Fix it with the real author and a real bio (helpful content 2026: "Fabricating creator profiles … is a form of deception").
8. **Date trick (bonus).** "Updated today" with no changes since last year. **Find it:** compare with the Wayback Machine capture. Rule: change the date only for a substantial update (Mueller 2022; helpful-content warning).

## Hands-on ideas (free tools only)

- **Cluster map for Nila:** from the M03 keyword map, choose 1 pillar ("Brewing coffee at home") and 4–6 clusters (French press, pour-over, cold brew, grind size, water ratio). Draw the links: pillar ↔ each cluster, plus cluster ↔ product page. Check that each cluster has one keyword and intent and no cannibalisation (M03-L05).
- **3-month calendar in a free spreadsheet** (Google Sheets / LibreOffice): one post per 1–2 weeks. Columns: URL, keyword, intent, format, brief link, draft, fact-check, publish date, 4-week check. Keep it realistic for one person.
- **Brief from template:** fill the brief for one cluster post, citing the Google/GOV.UK line behind each field.
- **SERP format check:** for 3 target keywords, Google them in a private window and record the dominant format (guide, list, product, video) before choosing the post format.
- **AI-assisted outline, human draft:** use a free AI assistant for 10 title ideas and an outline only. The learner writes the body from first-hand experience, then marks the AI's contributions in the log (supports the How disclosure).
- **Edit and fact-check log:** a table with the columns claim · source URL · exact supporting sentence · checked on · verdict. Run it on both capstone posts.
- **Plain-language pass:** split sentences over 25 words, keep paragraphs to 5 sentences or fewer, swap long words (GOV.UK list), move the answer or ratio to the top. Optionally note the WordPress plugin readability score as a writing aid, not a ranking factor.
- **Publish checklist run-through** in WordPress: title and meta reviewed, alt text, author box links to the author page, visible "Published / Last updated" date, 2+ internal links in and 2+ out, sources linked.
- **Refresh triage:** in Search Console, open Performance > Search results, filter by page, and compare the last 3 months with the previous period (from docs, not tested live). Label each older post refresh, merge (301), or retire (404/410). Write one line of reasoning per decision.
- **Disclosure line:** write a one-sentence "How we made this" note for an AI-assisted post (e.g. "Outline drafted with an AI assistant; recipe tested and written by our head roaster"). Discuss when readers would "reasonably expect" one.
