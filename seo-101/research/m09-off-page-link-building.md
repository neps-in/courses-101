# Research: M09 — Off-Page SEO & Link Building

**Researched:** 2026-11-08 (finished 2026-11-09)
**Scope:** primary-source facts for SEO 101 Module 9 (L2, practitioner): how links work (PageRank, anchor text, `nofollow` / `sponsored` / `ugc`); third-party "authority" scores; backlink audits (Search Console Links report, Bing Webmaster Tools, Ahrefs Webmaster Tools / "Ahrefs Free"); ethical link earning; link schemes, manual actions and penalties; disavow; social signals and brand mentions; outreach email rules. Supports non-negotiable #11 (earn links, never buy them). Running example: Nila Coffee.
**Method:** pages were downloaded with curl on 2026-11-08 and turned into text, and quotes were copied from that text. "Last updated" dates are the ones shown on each page. Quotes marked **(fetch-tool extract)** came through a summarising fetch tool and were not matched against raw text. Nothing was tested live in Search Console, Bing Webmaster Tools or Ahrefs. UI labels come from help docs only ("from help docs, not tested live").

**Labels:** **Documented** = official docs of the company that owns the product or rule (Google, Microsoft Bing, Ahrefs/Moz/Semrush for their own metrics, US FTC). **Google public comment** = a named Googler's statement (person, date, where). Most were read through Search Engine Roundtable (SER) or Search Engine Journal (SEJ) articles that embed or quote the original post. **Observed practice** = common SEO practice or third-party guidance, not official policy. **Myth/contested** = widely repeated but contradicted or unsupported.

**What earlier lessons already taught (keep terms consistent, go deeper here):**
- **M01.L06** (white/black/grey hat) quoted the link spam definition ("primarily for the purpose of manipulating search rankings"), the examples "Exchanging money for links", "Exchanging goods or services for links", "Sending someone a product in exchange for them writing about it and including a link" and "excessive link exchanges", and the line that paid links are "a normal part of the economy of the web" when they are qualified. A decision flowchart ends in "Mark it rel=sponsored, then go ahead". **M09 adds:** the full examples list (widgets, footers, directories, ToS-required links, advertorials, press-release anchors), the 2017 guest post guidance, SpamBrain (2022), manual actions, reconsideration and disavow.
- **M01.L07** (ranking factors) labelled "Domain Authority affects Google rankings" a myth, using Google's line that third-party tools "don't have access to Google's internal ranking data". A quiz item covers `sponsored` / `nofollow` / `ugc`. **M09 adds:** how DA, DR and Authority Score are actually calculated (vendors' own docs), Mueller's dated statements, and why you shouldn't disavow on tool scores.
- **M02.L05** (links and images) taught `<a href>`, anchor text, and `rel="sponsored"` for "advertisements or paid placements" (the course also marks affiliate links `sponsored`), `ugc` and `nofollow`. **M09 adds:** the 2019 "hints" change and the 1 March 2020 crawling/indexing hint, the PageRank idea, and how anchor text in *other people's* links shows up in reports.

---

## 1. PageRank and how links work

**Original paper.** Sergey Brin and Lawrence Page, "The Anatomy of a Large-Scale Hypertextual Web Search Engine" (Stanford; presented at WWW7, 1998). Google's ranking-systems guide links to http://infolab.stanford.edu/~backrub/google.html. That host refused connections on 2026-11-08, so the text was read from the Wayback Machine copy: https://web.archive.org/web/2024id_/http://infolab.stanford.edu/~backrub/google.html
- "Academic citation literature has been applied to the web, largely by counting citations or backlinks to a given page. This gives some approximation of a page's importance or quality. PageRank extends this idea by not counting links from all pages equally, and by normalizing by the number of links on a page." — **Documented** (original paper, 1998)
- Formula: "PR(A) = (1-d) + d (PR(T1)/C(T1) + ... + PR(Tn)/C(Tn))" and "We usually set d to 0.85." — **Documented** (1998). This is too deep for SEO 101. Use the random-surfer idea instead.
- "We assume there is a "random surfer" who is given a web page at random and keeps clicking on links, never hitting "back" but eventually gets bored and starts on another random page. The probability that the random surfer visits a page is its PageRank." — **Documented** (1998)
- "a page can have a high PageRank if there are many pages that point to it, or if there are some pages that point to it and have a high PageRank. Intuitively, pages that are well cited from many places around the web are worth looking at." — **Documented** (1998)
- Anchor text: "The text of links is treated in a special way in our search engine. Most search engines associate the text of a link with the page that the link is on. In addition, we associate it with the page the link points to." and "anchors often provide more accurate descriptions of web pages than the pages themselves." — **Documented** (1998)
- The patent is linked from Google's guide as https://patents.google.com/patent/US6285999 (not read).

**Google today.** "A guide to Google Search ranking systems", https://developers.google.com/search/docs/appearance/ranking-systems-guide. Last updated 2025-12-10.
- "Link analysis systems and PageRank: We have various systems that understand how pages link to each other as a way to determine what pages are about and which might be most helpful in response to a query. Among these is PageRank, one of our core ranking systems used when Google first launched. … How PageRank works has evolved a lot since then, and it continues to be part of our core ranking systems." — **Documented**
- Retired systems: "Penguin system: This was a system designed to combat link spam. Announced in 2012 and given the nickname of the "Penguin Update", it was integrated into our core ranking systems in 2016." — **Documented**
- "We employ a range of spam detection systems, including SpamBrain, to deal with content and behaviors that violate our spam policies." — **Documented**

SEO Starter Guide, https://developers.google.com/search/docs/fundamentals/seo-starter-guide. Last updated 2025-12-10.
- Under "Things we believe you shouldn't focus on": "PageRank: While PageRank uses links and is one of the fundamental algorithms at Google, there's much more to Google Search than just links. We have many ranking signals, and PageRank is just one of those." — **Documented**
- "Google primarily finds pages through links from other pages it already crawled. In many cases, these are other websites that are linking to your pages. Other sites linking to you is something that happens naturally over time, and you can also encourage people to discover your content by promoting your site." — **Documented**

How Search Works, "Ranking results", https://www.google.com/search/howsearchworks/how-search-works/ranking-results/ (no date shown)
- "one of the factors used to determine quality is understanding if other prominent websites link or refer to the content. This is generally a good sign that the information is trustworthy." — **Documented**. Note the words "link or refer". See §9 for mentions.

Link best practices, https://developers.google.com/search/docs/crawling-indexing/links-crawlable. Last updated 2025-12-10.
- "Google uses links as a signal when determining the relevancy of pages and to find new pages to crawl." — **Documented**

**Google public comments on PageRank and the weight of links (dated):**
- Gary Illyes (Google), X/Twitter, 9 February 2017: "DYK that after 18 years we're still using PageRank (and 100s of other signals) in ranking?" — **Google public comment**. Tweet embedded at https://www.seroundtable.com/google-still-using-pagerank-23392.html
- John Mueller (Google), X/Twitter, 24 February 2020: "Yes, we do use PageRank internally, among many, many other signals. It's not quite the same as the original paper, there are lots of quirks (eg, disavowed links, ignored links, etc.), and, again, we use a lot of other signals that can be much stronger." — **Google public comment**. Embedded at https://www.seroundtable.com/google-still-uses-pagerank-29056.html
- Gary Illyes, PubCon Pro Q&A, 21 September 2023, as relayed by attendees: Patrick Stox's post quoted "I think they are important but I think people overestimate their importance. I don't agree that it's the top 3 and it hasn't been for some time." — **Google public comment (reported second-hand by attendees)**. https://www.seroundtable.com/google-links-no-longer-a-top-three-ranking-factor-36094.html (SER, 2023-09-24). SER also quotes Search Engine Land: "It's absolutely possible to rank without links, Illyes said".
- Gary Illyes, SERP Conf (Bulgaria), around 19 April 2024, as reported: "We need very few links to rank pages... Over the years we've made links less important." Illyes replied on X (19 April 2024): "I shouldn't have said that... I definitely shouldn't have said that". — **Google public comment (reported second-hand; Illyes partly walked it back)**. https://www.seroundtable.com/google-very-few-links-needed-rank-pages-37267.html (SER, 2024-04-22)
- Teaching point: links still matter (Google's own docs), but they are one signal among many. Don't teach "links are the #1 factor".

## 2. Link best practices, anchor text, and qualifying outbound links

Link best practices, https://developers.google.com/search/docs/crawling-indexing/links-crawlable. Last updated 2025-12-10.
- "Generally, Google can only crawl your link if it's an `<a>` HTML element (also known as anchor element) with an `href` attribute." — **Documented**
- "Anchor text (also known as link text) is the visible text of a link. This text tells people and Google something about the page you're linking to." — **Documented**
- "Good anchor text is descriptive, reasonably concise, and relevant to the page that it's on and to the page it links to." — **Documented**
- "Write as naturally as possible, and resist the urge to cram every keyword that's related to the page that you're linking to (remember, keyword stuffing is a violation of our spam policies)." — **Documented**. This matters for outreach: don't ask others for exact-match keyword anchors (see §3, "optimized anchor text").
- "For images as links, Google uses the `alt` attribute of the `img` element as anchor text" — **Documented**
- "Linking to other sites isn't something to be scared of; in fact, using external links can help establish trustworthiness (for example, citing your sources)." — **Documented**
- "Use nofollow only when you don't trust the source, and not for every external link on your site." — **Documented**
- "If you were paid in some way for the link, qualify these links with sponsored or nofollow. If users can insert links on your site (for example, you have a forum section or Q&A site), add ugc or nofollow to these links too." — **Documented**

Qualify your outbound links, https://developers.google.com/search/docs/crawling-indexing/qualify-outbound-links. Last updated 2025-12-10.
- "For regular links that you expect Google to fetch and parse without any qualifications, you don't need to add a rel attribute." — **Documented**
- `rel="sponsored"`: "Mark links that are advertisements or paid placements (commonly called paid links) with the sponsored value." Note: "The nofollow attribute was previously recommended for these types of links and is still an acceptable way to flag them, though sponsored is preferred." — **Documented**
- `rel="ugc"`: "We recommend marking user-generated content (UGC) links, such as comments and forum posts, with the ugc value." and "If you want to recognize and reward trustworthy contributors, you might remove this attribute from links posted by members or users who have consistently made high-quality contributions over time." — **Documented**
- `rel="nofollow"`: "Use the nofollow value when other values don't apply, and you'd rather Google not associate your site with, or crawl the linked page from, your site. For links within your own site, use the robots.txt disallow rule." — **Documented**
- "You may specify multiple rel values as a space- or comma-separated list." — **Documented**
- "Links marked with these rel attributes will generally not be followed. Remember that the linked pages may be found through other means, such as sitemaps or links from other sites, and thus they may still be crawled." — **Documented**

**The 2019 "hints" change.** "Evolving "nofollow" – new ways to identify the nature of links", Google Search Central Blog, Tuesday 10 September 2019, by Danny Sullivan and Gary Illyes. https://developers.google.com/search/blog/2019/09/evolving-nofollow-new-ways-to-identify
- "rel="sponsored": Use the sponsored attribute to identify links on your site that were created as part of advertisements, sponsorships or other compensation agreements." — **Documented** (2019)
- "rel="nofollow": Use this attribute for cases where you want to link to a page but don't want to imply any type of endorsement, including passing along ranking credit to another page." — **Documented** (2019)
- "When nofollow was introduced, Google would not count any link marked this way as a signal to use within our search algorithms. This has now changed. All the link attributes—sponsored, ugc, and nofollow—are treated as hints about which links to consider or exclude within Search." — **Documented** (2019)
- "Why not completely ignore such links, as had been the case with nofollow? Links contain valuable information that can help us improve search, such as how the words within links describe content they point at." — **Documented** (2019)
- "Do I need to change my existing nofollows? No." — **Documented** (2019)
- "If you want to avoid a possible link scheme action, use rel="sponsored" or rel="nofollow" to flag these links. We prefer the use of sponsored, but either is fine and will be treated the same, for this purpose." — **Documented** (2019)
- "There's no wrong attribute except in the case of sponsored links. … Any link that is clearly an ad or sponsored should use sponsored or nofollow" — **Documented** (2019)
- "In most cases, the move to a hint model won't change the nature of how we treat such links. We'll generally treat them as we did with nofollow before and not consider them for ranking purposes." — **Documented** (2019)
- "All the link attributes, sponsored, ugc, and nofollow, now work today as hints for us to incorporate for ranking purposes. For crawling and indexing purposes, nofollow will become a hint as of March 1, 2020." — **Documented** (2019). Dates: ranking hint from 10 Sep 2019; crawling/indexing hint from 1 Mar 2020.
- Teaching point: a `nofollow` link from a popular site isn't "worthless". It can still send visitors and may be used as a hint. Teach that it's normal, not a failure.

## 3. Link spam policy and the December 2022 link spam update

Spam policies for Google web search, https://developers.google.com/search/docs/essentials/spam-policies. Last updated **2026-08-28**.
- "spam refers to techniques used to deceive users or manipulate our Search systems into featuring content prominently, such as attempting to manipulate Search systems into ranking content highly or attempting to manipulate generative AI responses in Google Search." — **Documented**. **Freshness:** the AI-responses wording is recent.
- "We detect policy-violating practices both through automated systems and, as needed, human review that can result in a manual action. Sites that violate our policies may rank lower in results or not appear in results at all." — **Documented**
- **Link spam (verbatim, full list):** "Link spam is the practice of creating links to or from a site primarily for the purpose of manipulating search rankings. The following are examples of link spam:" — **Documented**
  - "Buying or selling links for ranking purposes. This includes: Exchanging money for links, or posts that contain links; Exchanging goods or services for links; Sending someone a product in exchange for them writing about it and including a link"
  - "Excessive link exchanges ("Link to me and I'll link to you") or partner pages exclusively for the sake of cross-linking"
  - "Using automated programs or services to create links to your site"
  - "Requiring a link as part of a Terms of Service, contract, or similar arrangement without allowing a third-party content owner the choice of qualifying the outbound link"
  - "Text advertisements or text links that don't block ranking credit"
  - "Advertorials or native advertising where payment is received for articles that include links that pass ranking credit, or links with optimized anchor text in articles, guest posts, or press releases distributed on other sites."
  - "Low-quality directory or bookmark site links"
  - "Keyword-rich, hidden, or low-quality links embedded in widgets that are distributed across various sites"
  - "Widely distributed links in the footers or templates of various sites"
  - "Forum comments with optimized links in the post or signature"
  - "Creating low-value content primarily for the purposes of manipulating linking and ranking signals"
- "Google does understand that buying and selling links is a normal part of the economy of the web for advertising and sponsorship purposes. It's not a violation of our policies to have such links as long as they are qualified with a rel="nofollow" or rel="sponsored" attribute value to the `<a>` tag." — **Documented**
- Hidden link abuse example: "Hiding a link by only linking one small character (for example, a hyphen in the middle of a paragraph)" — **Documented**
- Note: the policy is about links "to or from" a site, so Nila Coffee selling links on its own blog breaks it too.

**December 2022 link spam update.** "December 2022 link spam update releasing for Google Search", Google Search Central Blog, Wednesday 14 December 2022, by Duy Nguyen, Ildar Akhmedyanov, Jacob N Scott and Karthikgeyan Elangovan. https://developers.google.com/search/blog/2022/12/december-22-link-spam-update
- "Today, we're leveraging the power of SpamBrain to neutralize the impact of unnatural links on search results." — **Documented** (2022)
- "SpamBrain is our AI-based spam-prevention system. Besides using it to detect spam directly, it can now detect both sites buying links, and sites used for the purpose of passing outgoing links." — **Documented** (2022)
- "Ranking may change as spammy links are neutralized and any credit passed by these unnatural links are lost. This launch will affect all languages." — **Documented** (2022)
- "links obtained primarily for artificial manipulation of Search rankings are link spam. Our algorithms and manual actions aim to nullify these unnatural links at scale" — **Documented** (2022)
- Teaching point: the usual result of bought links today is "neutralized" (wasted money). A manual action is the worse case. Both are reasons not to buy.

## 4. Guest posts, press releases, widgets, footers, exchanges, PBNs, expired domains

**Guest posts.** "A reminder about links in large-scale article campaigns", Google Search Central Blog, Thursday 25 May 2017, posted by the Google Webspam Team. https://developers.google.com/search/blog/2017/05/a-reminder-about-links-in-large-scale
- "Lately we've seen an increase in spammy links contained in articles referred to as contributor posts, guest posts, partner posts, or syndicated posts." — **Documented** (2017)
- "Google does not discourage these types of articles in the cases when they inform users, educate another site's audience or bring awareness to your cause or company. However, what does violate Google's guidelines on link schemes is when the main intent is to build links in a large-scale way back to the author's site." — **Documented** (2017)
- Warning factors "when taken to an extreme": "Stuffing keyword-rich links to your site in your articles"; "Having the articles published across many different sites; alternatively, having a large number of articles on a few large, different sites"; "Using or hiring article writers that aren't knowledgeable about the topics they're writing on"; "Using the same or similar content across these articles; alternatively, duplicating the full content of articles found on your own site (in which case use of rel="canonical", in addition to rel="nofollow", is advised)" — **Documented** (2017)
- For hosts: "Do I know this person? Does this person's message fit with my site's audience? Does the article contain useful content? If there are links of questionable intent in the article, has the author used rel="nofollow" on them?" — **Documented** (2017)
- "webmasters generally prefer not to receive aggressive or repeated "Post my article!" requests, and we encourage such cases to be reported to our spam report form." — **Documented** (2017). This supports the "mass outreach emails" failure point.
- "Our best advice in relation to link building is to focus on improving your site's content and everything—including links —will follow (no pun intended)." — **Documented** (2017)

**Press releases, widgets, footers, exchanges, directories, ToS links:** all named in the link spam list (§3). — **Documented** (spam policies, 2026-08-28).
- The site reputation policy lists "Wire service or press release service sites" among examples "NOT considered inconsistent with the site reputation policy" — **Documented**. So press releases are allowed as such. It's *optimized-anchor links* in them that are link spam.

**Private blog networks (PBNs):** the term "private blog network" **does not appear** in Google's spam policies page (searched the downloaded text for "network" and "PBN"). PBNs fall under the general definition ("creating links … primarily for the purpose of manipulating search rankings") and "Creating low-value content primarily for the purposes of manipulating linking and ranking signals". Teach PBNs as a *named industry term* for that policy, not as a quoted Google term. Semrush's own doc defines them: "Private Blog Networks (PBNs) are networks of fake blogs created for the sole purpose of providing backlinks for SEO value." — **Documented (Semrush's own metric doc; industry definition)**, https://www.semrush.com/kb/747-authority-score

**Expired domain abuse** (spam policies, 2026-08-28): "Expired domain abuse is where an expired domain name is purchased and repurposed primarily to manipulate search rankings by hosting content that provides little to no value to users." Examples include "Affiliate content on a site previously used by a government agency" and "Casino-related content on a former elementary school site". — **Documented**. Related to PBNs, which are often built on expired domains (**Observed practice**, no primary source read).

**Site reputation policy** (spam policies): "We have made changes applicable to the policy in the European Economic Area (EEA)." Outside the EEA, pages "may be subject to a manual action"; within the EEA, pages "may be categorized as separate from the main domain but won't be subject to the impact of manual action." — **Documented**. **Freshness flag:** an EEA-specific split, new since earlier research. It matters to M09 only for "pay to publish on a big site" pitches.

## 5. Manual actions, reconsideration and disavow

**Manual actions report**, Search Console Help, https://support.google.com/webmasters/answer/9044175 (no last-updated date shown)
- "Google issues a manual action against a site when a human reviewer at Google has determined that pages on the site are not compliant with Google's spam policies." — **Documented**
- "If your site is affected by a manual action, we will notify you in the Manual actions report and in the Search Console message center." — **Documented**
- "Our algorithms are extremely good at detecting spam, and in most cases we automatically discover it and remove it from our search results." — **Documented**
- **"Unnatural links to your site"**: "Google has detected a pattern of unnatural, artificial, deceptive, or manipulative links pointing to your site. Buying links or participating in link schemes in order to manipulate ranking in Google Search results is a violation of our spam policies. This can result in some or all of your site getting a manual action." — **Documented**
  - Recommended actions (verbatim steps): "Download a list of links to your site from Search Console. You can download your links arranged either by hostname (Top linking sites > Export) or in chronological order (Links report > Export external links > Latest links)." / "If the list is large, start by looking at the sites that link to you the most, or links that were created recently (in the last few months)." / "contact the owner of that site and ask that they either remove the links or prevent them from passing PageRank, such as by adding a rel="nofollow" or a more specific attribute." / "Use the Disavow links tool in Search Console to disavow any links that you could not get removed." — **Documented** (UI paths from help docs, not tested live)
  - "If you can get a backlink removed, make a good-faith effort to remove the link first. Blindly adding all backlinks to the disavow file is not considered a good-faith effort, and will not be enough to make your reconsideration request successful." — **Documented**
  - "Make sure that you don't disavow organic links to your site." — **Documented**
  - "Include documentation about the links you've had removed and an explanation of any links you were unable to remove" — **Documented**
- **"Unnatural links from your site"**: "Google has detected a pattern of unnatural artificial, deceptive, or manipulative outbound links on your site." Fix: "Either remove these links, or change them so that they no longer pass PageRank, for example by adding a rel="nofollow" or a more specific attribute, or by redirecting them through a page blocked by robots.txt." — **Documented**
- Reconsideration: "When all issues listed in the report are fixed in all pages, select Request Review in this report. In your reconsideration request, describe your fixes. A good request does three things: Explains the exact quality issue on your site. Describes the steps you've taken to fix the issue. Documents the outcome of your efforts." — **Documented** (button label "Request Review" from help docs, not tested live)
- "Most reconsideration reviews can take several days or weeks, although in some cases, such as link-related reconsideration requests, it may take longer than usual to review your request." — **Documented**
- "Fixing the issue on just some pages will not earn you a partial return to search results." — **Documented**
- Bought site: "If you recently bought a site that violated our spam policies before you owned it, fix the issues listed in this report, then let us know in your reconsideration request that you recently acquired the site" — **Documented**

Reconsideration requests, https://support.google.com/webmasters/answer/35843
- "A reconsideration request is a request to have Google review your site after you fix problems identified in a manual action or security issues notification." — **Documented**

**Disavow links to your site**, Search Console Help, https://support.google.com/webmasters/answer/2648487 (no last-updated date shown)
- "If you have a manual action against your site for unnatural links to your site, or if you think you're about to get such a manual action (because of paid links or other link schemes that violate our spam policies), you should try to remove the links from the other site to your site. If you can't remove those links yourself, or get them removed, then you should disavow the URLs of the questionable pages or domains that link to your website." — **Documented**
- "This is an advanced feature and should only be used with caution. If used incorrectly, this feature can potentially harm your site's performance in Google Search results." — **Documented**
- "Step 0: Decide if this is necessary. In most cases, Google can assess which links to trust without additional guidance, so most sites will not need to use this tool." — **Documented**
- "You should disavow backlinks only if: You have a considerable number of spammy, artificial, or low-quality links pointing to your site, AND The links have caused a manual action, or likely will cause a manual action, on your site." — **Documented**
- "The disavow links tool does not support Domain properties. If you have a Domain property, this page does not apply to you." — **Documented**. **Teaching gotcha:** if M01.L08 set up a Domain property, learners need a URL-prefix property to disavow.
- File format: "Specify one URL or domain to disavow per line. You cannot disavow an entire subpath, such as example.com/en/"; "To disavow a domain (or subdomain) prefix it with "domain:", for example: domain:example.com"; "The file must be a text file encoded in UTF-8 or 7-bit ASCII"; "The file name must end in .txt"; "Maximum URL length is 2,048 characters"; "Maximum file size is 100,000 lines (including blank lines and comment lines) and 2MB."; "Any lines that begin with # will be ignored by Google." — **Documented**
- "You can post one disavow list for each property that you own. Uploading a new list for a property will replace any existing list for that property." / "Disavowed links will continue to be shown in the Links report." / "it can take a few weeks for Google to incorporate your list" — **Documented**
- "Click Cancel Disavowals." to remove all — **Documented** (UI label from help docs, not tested live)

**Googler comments on disavow (dated):**
- John Mueller, X, 3 May 2023, on disavowing by third-party score: "That seems like a terrible idea. (also, none of those metrics are things Google cares about, as any SEO tool will tell you... hopefully)" — **Google public comment**. https://www.seroundtable.com/google-disavow-links-third-party-metrics-35331.html
- John Mueller, X, 4 May 2024: "In particular, the disavow links tool is not something you'd *ever* need on a regular basis. I'd consider it a big red flag if any SEO tool reported on "toxic links" and suggested you need to clean it up regularly - that's been wrong for many years now. Don't fall for it." Quoted in the same article: "Most spammy / paid / placed / swapped links are just ignored nowadays. It's rare you'd need it." and, asked about removing the tool, "At some point, I'm sure we'll remove it." — **Google public comment**. https://www.seroundtable.com/google-will-remove-its-disavow-link-tool-37336.html (SER, 2024-05-06)
- John Mueller, Reddit, around 27 May 2024: "The concept of toxic links is made up by SEO tools so that you pay them regularly." (SER notes he later edited it to "Nothing has really changed here - you can continue to save yourself the effort.") — **Google public comment**. https://www.seroundtable.com/google-again-blasts-the-concept-of-toxic-links-37453.html
- John Mueller, Bluesky, December 2024: disavowing "toxic" links is a "billable waste of time" (short phrase as quoted by SER; the full post wasn't in the downloaded text). — **Google public comment**. https://www.seroundtable.com/google-disavowing-toxic-links-38587.html (SER, 2024-12-17)
- John Mueller, Bluesky, January 2025: "my estimation is that 90%+ (probably 99%+) of the web has never used the disavow links tool. Probably none of the big sites do it. But it's in a spammer's best interest to encourage others to spend time on it." and "It's a time-sink with no directly connected value (if your site doesn't have a manual action for links, or is likely to get one based on something a previous SEO did)." — **Google public comment**. https://www.seroundtable.com/google-spammers-encourage-waste-time-disavowing-links-38797.html (SER, 2025-01-24)
- John Mueller, Search Central Live NYC (reported 8 April 2025): "So internally we don't have a notion of toxic backlinks. … if you're looking at the links to your website and you see random foreign links coming to your website, that's not bad nor are they causing a problem. For the most part, we work really hard to try to just ignore them. I would mostly use the disavow tool for situations where you've been actually buying links and you've got a manual link spam action" and "the disavow tool is not something that you need to do on a regular basis. It's not a part of normal site maintenance. I would really only use that if you have a manual spam action." — **Google public comment (transcribed by SEJ)**. https://www.searchenginejournal.com/google-says-disavow-tool-not-part-of-normal-site-maintenance/543861/
- John Mueller, around March 2026: "If you're conflicted and just want to be sure, it's totally fine to set up & use disavow files. If you notice that the bulk of the problems are from a few TLDs, you can also disavow the whole TLD. The disavow file is a tool, not a religion :-). Most sites don't need it, but that's not all sites" — **Google public comment**. https://www.searchenginejournal.com/google-says-disavow-links/568928/ (SEJ, 2026-03-06). SER (2026-03-11) adds that he called TLD-level disavow "a big hammer" and said Google probably shouldn't document it: https://www.seroundtable.com/google-disavow-tld-41061.html — **Myth/contested** for teaching: undocumented, so don't teach it.

**Bing disavow:** SER reports that Fabrice Canel (Bing) announced Bing would be "removing the disavow links feature and associated API in October 2023", saying Bing can "differentiate between natural and unnatural links, and we can ignore or discount the latter without affecting the former." — **Bing public comment (reported second-hand)**. https://www.seroundtable.com/bing-remove-disavow-links-tool-36071.html (SER, 2023-09-22). Bing's own announcement wasn't read (see Not found).

## 6. Backlink audit tools (free)

**Search Console Links report**, https://support.google.com/webmasters/answer/9049606 (no date shown). All UI labels are from help docs, not tested live.
- "What's a backlink? A backlink is a link on a page from another site that links to a page on your site." — **Documented**
- "Tables are limited to 1,000 rows, so tables may be truncated in larger or more linked-to sites." — **Documented**
- "This report isn't a comprehensive list of every link on your site. It shows a sample of internal and external links to help you understand your site's overall link profile." — **Documented**
- "data is actually grouped by root domain in the Links report; protocol (http/https), subdomain (m., www) and subdirectories are stripped and grouped together." — **Documented**
- "The report includes links that Google has found over time. These links may have since been removed, or a page may no longer exist. The report doesn't specify if a link is marked as nofollow." — **Documented**. **Key teaching point:** GSC can't tell you nofollow/sponsored. Check the live page, or use AWT ("Link type data (nofollow, UGC, sponsored)").
- Sections: "Top linked pages", "Top linking sites", "Top linking text", plus Internal links. — **Documented**
- Top linking sites use: "Confirm that you recognize the sites listed here. If you see any unknown and possibly spammy sites, you might need to ask to be removed or, if all else fails, disavow them to avoid having your ranking harmed by known spammy sites." — **Documented**. This conflicts in tone with the disavow page (see Conflicts).
- "See whether sites that are important to you point to your site. For example, if you have a restaurant website, are you mentioned in food blogs or review sites?" — **Documented**. A good Nila Coffee prompt.
- "For known spam sites, Google typically will ignore the links, but you might want to remove or disavow these links." — **Documented**
- Link text: "Links with no text (for example, image links) are shown as "(empty)"" — **Documented**
- Export: "Export up to 100,000 rows of data using the Export button." Slices: "Latest links: The most recently discovered links to your site (up to 100,000 rows), sorted by discovery date." and "More sample links: A sample of links to your site (up to 100,000 rows)". "You can export your link data as a CSV file or a Google Sheet." Single tables export "up to 1,000 rows". — **Documented**

**Bing Webmaster Tools Backlinks**
- "Backlinks lists backlinks for any site, including similar sites." — **Documented**, Bing Blog, "Announcing the new Bing Webmaster Tools (migration complete)", 29 July 2020. https://blogs.bing.com/webmaster/july-2020/Announcing-the-new-Bing-Webmaster-Tools-(migration-complete). **Freshness flag:** six years old. Useful because Bing shows backlinks for *competitor* sites free (supports M10).
- UI strings embedded in the Bing help page source (https://www.bing.com/webmasters/help/webmaster-guidelines-30fba23a), not visible article text, **not tested live**: "Backlinks For Your Site", "Referring domains", "Anchor texts", "Total referring pages", "ReferringDomainCount_Tooltip": "Count of unique domains linking to your site. This may not include domains of all the links present in the Referring Pages count", "TopAnchorTexts_Tooltip": "List of most used anchor text by pages linking to your site". The strings also still include "Disavow links" / "List of links disavowed for your site". These may be leftovers (see Conflicts).

**Ahrefs Webmaster Tools (AWT) → now "Ahrefs Free"**, https://ahrefs.com/webmaster-tools (read 2026-11-08)
- "Ahrefs Webmaster Tools is now Ahrefs Free. We moved beyond "Webmaster Tools" to reflect modern teams and give broader free access to Ahrefs' tools." — **Documented**. **Freshness flag: rename.** The course outline and syllabus say "Ahrefs Webmaster Tools". Lessons should use "Ahrefs Free (formerly Ahrefs Webmaster Tools)".
- "Free website analytics, technical audit & SEO metrics for your verified websites." — **Documented**
- "Ahrefs Webmaster Tools gives you free access to 3 Ahrefs tools: Web Analytics … Site Audit—scans your website for 170+ common technical & on-page SEO issues … Site Explorer—shows which pages and keywords bring the most organic traffic, and who links to your website." — **Documented**
- Limits: "Verified websites Unlimited"; "Site Audit 5K crawl credits/month per project"; "Site Explorer 1K backlinks & keywords visible at once". — **Documented**
- "Can I see all my website's backlinks with Ahrefs Free? Yes, you'll be able to see up to 1000 backlinks at once, and use our powerful sorting and filtering options" — **Documented**
- Comparison table rows for backlinks: "Links shown: All known links [AWT] / Top 1,000 [GSC]"; "Link type data (nofollow, UGC, sponsored)". — **Documented** (Ahrefs marketing claim; see Conflicts)
- "Ahrefs' subscription plans allow you to analyze competing websites (unverified websites)." So the free tier is your own verified sites only. — **Documented**
- Paid plan shown: "€27/mo" Starter (price as displayed on 2026-11-08; may vary by region). — **Documented**, freshness flag.
- Verification, https://help.ahrefs.com/en/articles/3275938-verifying-ownership-of-your-project-or-website (written 3 September 2026): "You can verify ownership of your website with any of these four methods: Google Search Console (recommended)" plus a DNS TXT record ("Add a verification .txt record to your domain's DNS settings"), an HTML file ("upload it to your domain's root folder") and an HTML meta tag ("Add the meta tag provided to the `<head>` section of your website's homepage"). "Your project must be added in the same mode as it is added to GSC (if you added www.example.com in GSC and example.com in Ahrefs, you'll get an error.)" DNS: "can sometimes take up to 48 hours". "The record used for site ownership verification must remain on your site." — **Documented** (method names partly inferred from section text; headings weren't in the extracted text)

## 7. Third-party "authority" metrics

**Moz Domain Authority (DA)**, https://moz.com/learn/seo/domain-authority (no date captured)
- "Domain Authority® (DA) is a search engine ranking score developed by Moz. It predicts how likely a website is to rank on search engine results pages (SERPs) compared to competitors. The score ranges from 1 to 100" — **Documented (Moz on its own metric)**
- "Moz calculates Domain Authority using a machine learning algorithm that evaluates multiple factors, primarily focusing on backlink data." and "These factors include the number of linking root domains, the quality of those links, and other signals that correlate with rankings across thousands of search results." — **Documented (Moz)**
- "Domain Authority is not a Google ranking factor and has no effect on the SERPs." — **Documented (Moz)**
- "it's easier to grow your score from 20 to 30 than it is to grow it from 70 to 80. Hence, it's important to use Domain Authority as a comparative metric rather than an absolute one." / "New websites always start with a Domain Authority of 1" — **Documented (Moz)**
- Moz also advises: "Regularly audit your link profile to identify and disavow spammy or harmful links" — **Documented (Moz)**, but it **conflicts with Google** (see Conflicts).

**Ahrefs Domain Rating (DR)**, https://help.ahrefs.com/en/articles/1409408-what-is-domain-rating-dr (written 3 September 2026)
- "Domain Rating (DR) shows the strength of a website's backlink profile compared to the others in our database on a 100-point scale." — **Documented (Ahrefs on its own metric)**
- "The source domain splits its rating equally amongst the domains it links to. So: a DR-10 domain which links to three other domains can influence your DR more than a DR-80 domain which links to a million other domains." / "The final DR value is then obtained by scaling a computed, absolute value into the 0-100 range." — **Documented (Ahrefs)**
- "I didn't lose any backlinks. Why did my DR drop? Most likely, other websites gained a lot of backlinks." — **Documented (Ahrefs)**. Good for explaining "relative score".
- "You should never judge the quality of a website on site-wide "authority" alone." — **Documented (Ahrefs)**

**Semrush Authority Score (AS)**, https://www.semrush.com/kb/747-authority-score (dateModified 2025-05-28)
- "Authority Score is our compound metric that grades the overall quality of a website or a webpage." — **Documented (Semrush on its own metric)**
- "The calculation is based on three main facets: Link Power: quality and quantity of backlinks; Organic Traffic: estimated monthly average of traffic; Spam Factors (Natural Profile): indicators of manipulation or spam in the link profile" — **Documented (Semrush)**
- Eight factors: "Link power, Organic traffic, No organic rankings on SERPs, Unnaturally high % of dofollow domains, An imbalance between links and organic traffic, Too many referring domains with the same IP address, Too many referring domains with the same IP network, Presence of another domain with an identical backlink profile" — **Documented (Semrush)**
- "We update the Authority Scores for all domains once every two weeks" — **Documented (Semrush)**

**Google on these metrics:**
- "If your SEO uses a third-party tool, keep in mind that Google doesn't evaluate or endorse third-party SEO tools, and these tools don't have access to Google's internal ranking data. Be wary of tools that claim to be "acceptable" or "approved" by Google Search." — **Documented**, "Do you need an SEO?", https://developers.google.com/search/docs/fundamentals/do-i-need-seo (last updated 2026-06-05). Already quoted in M01.L07.
- John Mueller, X, 24 February 2020: "We don't use domain authority at all in our algorithms." — **Google public comment**. https://www.seroundtable.com/google-still-uses-pagerank-29056.html
- John Mueller, Reddit (SER 1 April 2022, headed "No Joke"): "you do not need DA for Google Search. Google doesn't use it *at all*." and "if it's really just DA that you want, then I'd look into Moz's docs & forum, since they make the metric." — **Google public comment**. https://www.seroundtable.com/google-advice-on-increasing-your-da-33158.html
- John Mueller, X, 3 May 2023: "none of those metrics are things Google cares about" — **Google public comment** (see §5)
- **Myth/contested:** "High DA links rank you" / "buy DA 50+ links". Contradicted by Google above, and the purchase itself is link spam (§3).

## 8. Ethical link earning

**Google documentation that supports earning links:**
- SEO Starter Guide, "Promote your website" (last updated 2025-12-10): "Effectively promoting your new content will lead to faster discovery by those who are interested in the same subject, and also by search engines. You can do this in many ways: Social media promotion; Community engagement; Advertisement, both offline and online; Word of mouth, and many other methods" — **Documented**
- "One of the most effective and lasting ways is word of mouth: that is, people familiar with your site tell their friends about it" — **Documented**
- "if you have a business site, make sure its URL is listed on your business cards, letterhead, posters, and other materials. With their permission, you could also send out recurring newsletters to your audience" — **Documented**. Fits Nila Coffee's packaging and tasting-room cards.
- "As with everything in life, you can overdo promoting your site and actually harm it: people may get fatigued of your promotions, and search engines may perceive some of the practices as manipulation of search results." — **Documented**
- Link best practices: "using external links can help establish trustworthiness (for example, citing your sources)" — **Documented**. Supports linkable assets that others want to cite.
- 2017 guest post post: guest articles are fine "when they inform users, educate another site's audience or bring awareness to your cause or company" — **Documented**
- "Do you need an SEO?" (last updated 2026-06-05): "You should never have to link to an SEO." / "Avoid SEOs that talk about link popularity schemes or submitting your site to thousands of search engines." / "Be wary of SEO firms and web consultants or agencies that email you out of the blue." / "No one can guarantee a #1 ranking on Google." / "you are responsible for the actions of any companies you hire" — **Documented**
- Mueller (Jan 2025): "If a bunch of people are linking to your site for normal reasons (the web is not all spam, yay!), it could be useful to engage with them." — **Google public comment**, SER link in §5

**Observed practice (third-party, label as such):**
- Broken link building: "It involves finding a dead page and asking linkers to swap the links to a working page on your site." — **Observed practice**, Ahrefs blog "Broken Link Building: The Complete Guide", https://ahrefs.com/blog/broken-link-building/ (published 2022-05-23, modified 2026-08-12). It also says "Broken link building isn't easy. Sometimes, it works well. Sometimes, it doesn't." The same article cites "Aira's annual state of link building report" (not read).
- Unlinked mentions: "Unlinked brand mentions are online mentions (citations) of your brand—or anything directly related to your brand—that do not link back to your site." — **Observed practice**, Ahrefs blog, https://ahrefs.com/blog/unlinked-mentions/ (published 2018-07-24, modified 2025-12-18)
- Digital PR: "Digital PR is a promotional tactic used by marketing professionals and PR specialists. When done properly, it utilizes traditional public relations tactics in a digital space—most often to boost the awareness of a brand, company, or business." — **Observed practice**, Ahrefs blog, https://ahrefs.com/blog/digital-pr/ (modified 2026-08-12). The article says "Even Google's own John Mueller said previously that it is often even more important than technical SEO". The original Mueller statement wasn't read, so **don't quote it as a Google comment** (see Not found).
- Local and industry links for Nila Coffee (local press, coffee associations, café stockists, farm partners, event sponsorships marked `sponsored`): **Observed practice**. No primary source read; M11 (local) may cover citations.

## 9. Social signals and brand mentions

- John Mueller, Google Webmaster Hangout (SER 25 Aug 2015), asked "Do Social Signals have an impact on organic rankings in Google?": "Not directly, no." SER's transcript adds: "To a large part, social networks also have a nofollow on the links that they kind of provide when they post. So it is not the case that that would give you any kind of ranking boost there." and "social posts do show up in the search results." — **Google public comment (2015, transcribed by SER; old)**. https://www.seroundtable.com/google-social-signals-ranking-20803.html
- Brand mentions without links: John Mueller, Webmaster Hangout (SER 21 Dec 2018): "we would pick that up as a mention on on another website but it's not a link, it doesn't pass any PageRank. So it's kind of not really the same thing as a link." — **Google public comment (2018)**. https://www.seroundtable.com/google-mentions-not-links-26857.html
- John Mueller, X, 21 May 2020, on whether unlinked brand citations help trust: "The short version is "usually not, imo". The long version is somewhat hard to squeeze into tweet form" — **Google public comment**. https://www.seroundtable.com/unlinked-citations-google-rankings-29490.html
- How Search Works: quality factors include whether "other prominent websites link or refer to the content" — **Documented**. "Refer" is broader than "link", but Google doesn't explain it. Teach it as "Google says mentions *can* be a quality sign; Googlers say a mention isn't a link". **Myth/contested** zone. Don't claim mentions are a ranking factor.
- SEO Starter Guide lists "Social media promotion" under promotion, for discovery and audience. — **Documented**
- Teaching frame: social and mentions help people find you, and can lead to real links. They aren't a direct Google ranking lever. AI-search brand mentions are out of scope (Modern SEO 101).

## 10. Outreach email rules (beginner level)

**USA, CAN-SPAM**, FTC "CAN-SPAM Act: A Compliance Guide for Business", https://www.ftc.gov/business-guidance/resources/can-spam-act-compliance-guide-business. curl was blocked; read via WebFetch, so **(fetch-tool extract)**:
- "It covers all commercial messages" and "The law makes no exception for business-to-business email." — **Documented (fetch-tool extract)**
- Requirement headings: "Don't use false or misleading header information." / "Don't use deceptive subject lines." / "Identify the message as an ad." / "Tell recipients where you're located." / "Tell recipients how to opt out of receiving future marketing email from you." / "Honor opt-out requests promptly." / "Monitor what others are doing on your behalf." — **Documented (fetch-tool extract)**
- "Each separate email in violation of the CAN-SPAM Act is subject to penalties of up to $53,088" (noted as inflation-adjusted, January 2024) — **Documented (fetch-tool extract)**. **Freshness flag:** the amount is adjusted yearly. Re-check before publishing.
- **Caution:** whether a one-to-one, personalised link-request email counts as "commercial" under CAN-SPAM wasn't confirmed from the page. Teach "be honest, say who you are, include a way to say no, stop when asked" as safe practice rather than a legal ruling.

**UK, PECR/UK GDPR (ICO):** https://ico.org.uk/for-organisations/direct-marketing-and-privacy-and-electronic-communications/guide-to-pecr/electronic-and-telephone-marketing/electronic-mail-marketing/ returned a bot challenge to curl and HTTP 403 to WebFetch. legislation.gov.uk (PECR reg. 22) returned an empty response. **No quotes.** See Not found.

**India:** no primary regulator page on unsolicited *email* was read (TRAI's rules cover telecom calls/SMS, which we couldn't verify here). **No quotes.** See Not found.

**Google's own outreach-adjacent warnings** (usable now): the 2017 post on "aggressive or repeated "Post my article!" requests" (§4); "Be wary of SEO firms and web consultants or agencies that email you out of the blue." (§8). — **Documented**

---

## Freshness flags
- **Ahrefs Webmaster Tools renamed "Ahrefs Free"** (page read 2026-11-08). Limits (1K backlinks visible, 5K crawl credits) and the €27/mo Starter price can change. Re-check when writing the lesson.
- **Spam policies last updated 2026-08-28.** The definition now covers manipulating "generative AI responses", and the site reputation policy has an EEA split. Re-check the link spam list before publishing.
- **Disavow tool may be removed.** Mueller, 4 May 2024: "At some point, I'm sure we'll remove it." Bing removed its tool (announced Sept 2023, per SER). Check that the Google tool still exists when writing L5.
- **Disavow help page:** no last-updated date shown. The "does not support Domain properties" line is important; re-check it.
- **CAN-SPAM penalty ($53,088)** is inflation-adjusted every year.
- **Bing Backlinks info** comes from a 2020 blog post plus UI strings. Bing help article text couldn't be read.
- **Googler comments on link weight** (2023 "not top 3", 2024 "very few links") were relayed by attendees and partly walked back. Present them as "Google staff have said…", not as policy.
- Ahrefs DR and verification articles are dated 3 September 2026. Semrush AS page modified 2025-05-28. Moz DA page has no captured date.

## Conflicts between sources
- **Search Console Links report vs the disavow page and Googlers.** The Links help page says if you see "unknown and possibly spammy sites, you might need to ask to be removed or, if all else fails, disavow them to avoid having your ranking harmed". The disavow page says "most sites will not need to use this tool" and to disavow "only if" there is a manual action or one is likely. Mueller (2024–25) says random spammy links are ignored. **Course position:** follow the disavow page's "Step 0" test. The Links page wording is older and softer.
- **Moz vs Google on disavow.** Moz's DA page advises regularly auditing "to identify and disavow spammy or harmful links". Mueller (2023): disavowing by third-party metrics is "a terrible idea". **Course position:** Google wins for Google rankings. Tool "toxic" scores are not a reason to disavow.
- **Semrush Authority Score vs Google on nofollow.** Semrush treats ">90%" followed referring domains as a spam indicator. Google says regular links need no `rel`, and `nofollow` is for untrusted links only. A natural small-business profile may well be mostly followed links. Teach that AS's spam flags are Semrush's own heuristic.
- **Ahrefs comparison table vs Ahrefs limits.** The table says AWT shows "All known links" against GSC's "Top 1,000", but the limits and FAQ say "1K backlinks … visible at once". Teach "up to 1,000 at a time, with filters".
- **TLD-level disavow.** Mueller (2026) says it's possible, but Google's help page doesn't document it ("You cannot disavow an entire subpath" is the only scope limit stated). Don't teach it.
- **Bing disavow.** SER reports Bing removed disavow (Oct 2023), but strings for disavow still appear in the Bing Webmaster Tools page source. Probably leftovers. Not verified live.
- **"Links are less important" vs docs.** Googler comments (2023–24) play links down. Google's docs still say links are "a signal" and PageRank "continues to be part of our core ranking systems". Both are true: links matter, but aren't everything.

## Not found
- **Bing Webmaster Guidelines text on links/link schemes.** https://www.bing.com/webmasters/help/webmaster-guidelines-30fba23a renders with JavaScript. Decoding the page source gave only UI strings. No Bing link-policy quotes.
- **Bing's own disavow-removal announcement** (Fabrice Canel, Sept 2023). Only SER's report was read.
- **ICO/PECR guidance on B2B marketing email** (bot-blocked; legislation.gov.uk empty). Needs a manual read before L6 makes any UK claim.
- **India rules on unsolicited email** (IT Act / TRAI / DPDP Act 2023). Nothing primary read. Suggest the lesson keeps to general good practice plus CAN-SPAM as the worked example, with a note to check local law.
- **Google statement endorsing broken-link building, digital PR or unlinked-mention outreach by name.** None found in Google docs. Ahrefs attributes a "digital PR more important than technical SEO" remark to Mueller (around 2021), but the original wasn't read.
- **Matt Cutts 2014 social signals video** and any **2024–26 Googler statement on social signals**. Only the 2015 Mueller hangout (via SER) was read.
- **Search Console UI live check** (Links report labels, disavow tool location). Not tested.
- **The original Mueller "billable waste of time" Bluesky post** in full. Only SER's short quote was read.
- **Moz DA page date** and Moz's DA 2.0 whitepaper (linked, not read).

## Suggested lesson split (6 lessons, following the topic order)
1. **M09.L01 How links work.** Backlinks, PageRank as a "random surfer" vote (1998 paper → "continues to be part of our core ranking systems"), anchor text, `nofollow` / `sponsored` / `ugc` as hints (2019 / March 2020), and why a nofollow link is still fine.
2. **M09.L02 "Authority" scores are estimates.** How DA, DR and Authority Score are calculated (vendor docs). Google says it doesn't use them (Mueller 2020, 2022, 2023; "Do you need an SEO?"). Use them only to compare and pick prospects.
3. **M09.L03 Auditing your backlinks for free.** GSC Links report (1,000-row tables, sample, no nofollow info, 100K exports), Bing Backlinks (including competitors), Ahrefs Free (verify via GSC; 1K visible; link type data). Hands-on: Nila Coffee export and triage.
4. **M09.L04 Earning links the right way.** Linkable assets (brew guides, origin/farm data), local and industry links, digital PR basics, guest content done right (2017 post), broken-link fixing, unlinked mentions, honest outreach (Google's "Post my article!" warning, CAN-SPAM basics). Social and mentions in perspective.
5. **M09.L05 Link schemes, penalties and disavow.** The full link spam list (paid, exchanges, PBNs, widgets, footers, press-release anchors, ToS links), SpamBrain neutralising (2022), expired domain abuse, the two "Unnatural links" manual actions, reconsideration, and the disavow "Step 0" test (plus the Domain-property gotcha and the Mueller quotes against "toxic links").
6. **M09.L06 Practice and capstone prep (optional, or fold into L4/L5).** Break-it lab (sort the list below), backlink report template, and a 3-month outreach plan with 10 realistic targets.

## Break-it lab ideas: sample backlink list for Nila Coffee (fine / ignore / risky)
| # | Link | Correct label | Why |
|---|---|---|---|
| 1 | Bangalore food blogger reviews Nila's single-origin beans and links to the product page, unasked | **Fine** | Editorial link. "happens naturally over time" (Starter Guide) |
| 2 | Same blogger, but Nila sent free beans and the post links with no `rel` and no disclosure | **Risky** | "Sending someone a product in exchange for them writing about it and including a link" is link spam unless qualified (`sponsored`/`nofollow`) |
| 3 | City newspaper article on the new tasting room, linking to Nila's homepage | **Fine** | Earned press. Exactly what Links report advice looks for ("are you mentioned in food blogs or review sites?") |
| 4 | Random `.xyz` scraper sites copying Nila's blog posts with links back | **Ignore** | Google "work[s] really hard to try to just ignore them" (Mueller 2025). No action and no disavow needed |
| 5 | "Guaranteed DA 50+ guest post" bought for ₹4,000 with anchor "best coffee beans online India" | **Risky** | "Exchanging money for links" plus optimized anchor text in guest posts. DA isn't used by Google |
| 6 | Coffee Board / roasters' association member directory listing with a link | **Fine** | Relevant industry listing, not a "low-quality directory" |
| 7 | 300 "free SEO directory" submissions done by a cheap gig seller | **Risky** | "Low-quality directory or bookmark site links" and "automated programs or services" |
| 8 | Link from a café that stocks Nila's beans, on its "Our suppliers" page | **Fine** | Real business relationship, natural link (no swap required) |
| 9 | "Link to me and I'll link to you" deal with 40 unrelated sites via a partners page | **Risky** | "Excessive link exchanges … or partner pages exclusively for the sake of cross-linking" |
| 10 | A Reddit or forum thread where a customer recommends Nila (link has `rel="ugc nofollow"`) | **Fine** | Normal UGC. Nofollow is expected, and it still sends visitors |
| 11 | Nila's own forum signature spam: "best filter coffee Chennai" links on 50 forums | **Risky** | "Forum comments with optimized links in the post or signature" |
| 12 | A paid sponsorship of a coffee festival, logo link marked `rel="sponsored"` | **Fine** | Paid links are allowed "as long as they are qualified" with `sponsored`/`nofollow` |
| 13 | A free "coffee calculator" widget Nila gives away, with a hidden keyword link to the shop | **Risky** | "Keyword-rich, hidden, or low-quality links embedded in widgets" |
| 14 | Old link from a defunct blog that now 404s | **Ignore** (or reclaim) | Not harmful. The Links report "includes links … since removed". Optional: ask a live site to update |
| 15 | Links from a network of 12 coffee "blogs" on the same IP that the old agency built | **Risky** | PBN pattern ("low-value content primarily for … manipulating linking"). If there's a manual action: remove, then disavow what's left |
| 16 | Semrush flags a Blogspot recipe page as "toxic" | **Ignore** | Tool scores aren't Google's (Mueller: "terrible idea" to disavow on third-party metrics) |

Twist for discussion: after a site purchase, Nila inherits an "Unnatural links to your site" manual action. Learners then must apply the removal → disavow → reconsideration steps (§5).

## Hands-on ideas (free only)
- **GSC Links report tour:** open Top linking sites / Top linked pages / Top linking text, then export "Latest links" to Google Sheets. Add columns: Fine / Ignore / Risky, rel (checked on the live page, since GSC doesn't show nofollow), and action. (UI from help docs, not tested live.)
- **Ahrefs Free set-up:** verify via GSC import (same www/non-www mode). Compare its backlink count and link types with the GSC export. Note the differences, because every tool sees a sample.
- **Bing Backlinks competitor peek:** look up two competitor roasters' backlinks in Bing Webmaster Tools (feature exists per 2020 blog; check it's still there). Feeds the M10 competitor module.
- **Unlinked-mention hunt:** search Google for `"Nila Coffee" -site:nilacoffee.example` and Google Alerts (free). List pages that mention but don't link, then draft one polite request.
- **Broken-link fix:** run a free broken-link checker on a coffee resource page (or the Ahrefs Free Site Audit on your own site for outbound 404s). Write one helpful, non-spammy email.
- **Linkable asset brief:** plan one asset (e.g. "Indian coffee estates map" or a brew-ratio chart) and list 10 realistic people who might cite it. This seeds the capstone's 10 targets.
- **Disavow decision drill:** given 3 scenarios (no manual action and spammy links; inherited manual action; tool "toxic" score), learners apply Google's "Step 0" and justify yes or no. No real upload.
- **Outreach email check:** grade a sample email against CAN-SPAM headings (honest subject, who you are, where you're located, an easy opt-out) and Google's warning about "aggressive or repeated" requests.
