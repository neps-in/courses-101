# M04 — On-Page SEO: research notes

**Researched:** 2026-11-08
**Scope:** SEO 101, Module 4 (L1, beginner). Title links and meta descriptions; headings, URL slugs and the opening paragraph; natural keyword use and keyword stuffing; people-first content and E-E-A-T basics; image SEO; internal links and anchor text; ecommerce product and category pages; Open Graph; free on-page tools. Running example: Nila Coffee (WordPress shop and brew-guide blog).
**Method:** Primary pages were downloaded and converted to text. Quotes are copied from that text, with line breaks joined. "Last updated" dates are the dates the pages showed on 2026-11-08. Secondary sources are labelled as such.
**Labels:** **Documented** = an official doc says it. **Google public comment** = a named Googler said it outside the docs. **Observed practice** = a common industry habit or tool convention that is not in the docs. **Myth/contested** = widely believed, but contradicted or unconfirmed.

**What earlier lessons already cover (don't repeat; go deeper):**
- **M02-L03 (HTML fundamentals):** what `<title>` and the meta description are; the "Title links" sources list; "no limit on how long a `<title>` element can be"; the 2009 "still don't use the description meta tag in our ranking" line; meta keywords not used; the head-parsing trap. → **M04 adds:** the full list of reasons Google rewrites titles, the 2021 change and the March 2026 AI test, title formulas, branding, the "unique descriptions" rules, and good and bad description examples.
- **M02-L05 (links and images):** the parts of `<a>` and `<img>`; Google's anchor text definition; `rel` values; "Every page you care about should have a link from at least one other page"; "no magical ideal number of links"; file name example `my-new-black-kitten.jpg`; "Google doesn't index CSS images"; alt keyword-stuffing warning; alt text used as anchor text. → **M04 adds:** anchor text writing rules (too generic, too long, chained links), orphan pages, linking from category to product pages, link-based importance, image formats (WebP/AVIF), sizing, `srcset`/`<picture>`, image sitemaps, lazy loading, and the preferred preview image (`og:image` / `primaryImageOfPage`).

---

## 1. Title links

Source: Google Search Central, "Influencing your title links in search results", https://developers.google.com/search/docs/appearance/title-link. **Last updated 2025-12-10.**

### Definition and how they're made
- **Documented:** "A title link is the title of a search result on Google Search and other properties (for example, Google News) that links to the web page."
- **Documented:** "Title links are critical to giving users a quick insight into the content of a result and why it's relevant to their query. It's often the primary piece of information people use to decide which result to click, so it's important to use high-quality title text on your web pages."
- **Documented:** "Google's generation of title links on the Google Search results page is completely automated and takes into account both the content of a page and references to it that appear on the web."
- **Documented, sources list (verbatim):** "Content in `<title>` elements" · "Main visual title shown on the page" · "Heading elements, such as `<h1>` elements" · "Content in `og:title` `meta` tags" · "Other content that's large and prominent through the use of style treatments" · "Other text contained in the page" · "Anchor text on the page" · "Text within links that point to the page" · "`WebSite` structured data"
- **Documented (timing, useful for the 4-week check):** "Keep in mind that Google has to recrawl and reprocess the page to notice updates to these sources, which may take a few days to a few weeks. If you've made changes, you can request that Google recrawl your pages."
- **Documented:** "While we can't manually change title links for individual sites, we're always working to make them as relevant as possible."

### Best practices (verbatim, in page order)
- "Make sure every page on your site has a title specified in the `<title>` element."
- "Write descriptive and concise text for your `<title>` elements. Avoid vague descriptors like "Home" for your home page, or "Profile" for a specific person's profile. Also avoid unnecessarily long or verbose text in your `<title>` elements. While there's no limit on how long a `<title>` element can be, the title link is truncated in Google Search results as needed, typically to fit the device width."
- "Avoid keyword stuffing. It's sometimes helpful to have a few descriptive terms in the `<title>` element, but there's no reason to have the same words or phrases appear multiple times. Title text like "Foobar, foo bar, foobars, foo bars" doesn't help the user, and this kind of keyword stuffing can make your results look spammy to Google and to users."
- "Avoid repeated or boilerplate text in `<title>` elements. It's important to have distinct text that describes the content of the page in the `<title>` element for each page on your site. Titling every page on a commerce site "Cheap products for sale", for example, makes it impossible for users to distinguish between two pages." It continues: "Long text in the `<title>` element that varies by only a single piece of information ("boilerplate" titles) is also bad". It also suggests: "One solution is to dynamically update the `<title>` element to better reflect the actual content of the page. For example, include the words "video" and "lyrics" only if that particular page contains video or lyrics."
- "Brand your titles concisely. The `<title>` element on your site's home page is a reasonable place to include some additional information about your site." It continues: "But displaying that text in the `<title>` element of every single page on your site will look repetitive if several pages from your site are returned for the same query. In this case, consider including just your site name at the beginning or end of each `<title>` element, separated from the rest of the text with a delimiter such as a hyphen, colon, or pipe". Example: `<title>ExampleSocialSite: Sign up for a new account.</title>`
- "Make it clear which text is the main title for the page." The page adds: "it can be confusing if multiple headings carry the same visual weight and prominence. Consider ensuring that your main title is distinctive from other text on a page and stands out as being the most prominent on the page (for example, using a larger font, putting the title text in the first visible `<h1>` element on the page, etc)."
- "Be careful about disallowing search engines from crawling your pages." The page adds: "If we don't have access to the content on your page, we will rely on off-page content to generate the title link, such as anchor text from other sites."
- "Use the same language and writing system (meaning, the script or alphabet for a given language) as the primary content on your pages. For example, if a page is written in Hindi, make sure to also write the `<title>` element in Hindi (don't write title text in English or transliterate the title into Latin characters)." *(Relevant to Indian learners.)*
- "Avoid including flight price information in `<title>` elements."

### Why Google changes titles: "Common issues and how Google manages them" (verbatim headings and key lines)
- **Documented, intro:** "Why the title link in search results might differ from the page's `<title>` element or main heading: If we've detected an issue on the page, we may try to generate an improved title link from anchors, on-page text, or other sources."
1. **Half-empty `<title>` elements:** "When part of the title text is missing. For example: `<title>| Site Name</title>`". Google then "looks at information in header elements or other large and prominent text on the page to produce a title link: Product Name | Site Name".
2. **Obsolete `<title>` elements:** "When the same page is used year-after-year for recurring information, but the `<title>` element didn't get updated to reflect the latest date." Example: `2020 admissions criteria - University of Awesome` → "2021 admissions criteria - University of Awesome".
3. **Inaccurate `<title>` elements:** "When the `<title>` elements don't accurately reflect what the page is about." Example: `Giant stuffed animals, teddy bears, polar bears - Site Name` → "Stuffed animals - Site Name". Google "might modify the title link to better help users if it determines that the page title doesn't reflect the page content."
4. **Micro-boilerplate text in `<title>` elements:** "When there are repeated boilerplate text in `<title>` elements for a subset of pages within a site." Example: three pages titled "My so-called amazing TV show" → "Season 1 - My so-called amazing TV show", and so on.
5. **No clear main title:** "When there's more than one large, prominent heading, and it isn't clear which text is the main title of the page." Google "may use the first heading as the text for the title link."
6. **Mismatch of writing system or language used in `<title>` elements:** "If Google detects a mismatch, it may generate a title link that better matches the primary content."
7. **Duplication of the site name in the `<title>` element:** "In the case of domain-level site names, Google may omit the site name from the title link, if it's repetitive with the site name that's already shown in the search result."
- **Documented, feedback:** "If you're seeing your pages appear in the search results with modified title links, check whether your page has one of the issues that Google adjusts for. If not, consider whether the title link in search results is a better fit for the query." There is no manual override. Google points to the Search Central Help Community.

### The 2021 title-link change (Search Central blog)
- **Documented:** "An update to how we generate web page titles", **Tuesday, August 24, 2021**, posted by Danny Sullivan, Search Liaison. https://developers.google.com/search/blog/2021/08/update-to-generating-page-titles
  - "Last week, we introduced a new system of generating titles for web pages. Before this, titles might change based on the query issued. This generally will no longer happen with our new system."
  - "We consider the main visual title or headline shown on a page, content that site owners often place within `<H1>` tags or other header tags, and content that's large and prominent through the use of style treatments."
  - It says title tags can sometimes be "Very long.", "'Stuffed' with keywords, because creators mistakenly think adding a bunch of words will increase the chances that a page will rank better.", or that pages "Lack title tags entirely or contain repetitive "boilerplate" language. For instance, home pages might simply be called "Home"."
  - "Focus on creating great HTML title tags. Of all the ways we generate titles, content from HTML title tags is still by far the most likely used, more than 80% of the time."
  - "when encountering an extremely long title, we might select the most relevant portion rather than starting at the beginning and truncating more useful parts."
- **Documented:** "More information on how Google generates titles for web page results", **Friday, September 17, 2021**, posted by Danny Sullivan. https://developers.google.com/search/blog/2021/09/more-info-about-titles
  - "title elements are now used around 87% of the time, rather than around 80% before."
  - "Since 2012, we've used text beyond title elements in cases where our systems determine the title element might not describe a page as well as it could."
  - "Focus on creating great HTML title elements. Those are by far what we use the most."
  - "Making changes may help ensure your title element is again used. That's really our preference, as well."

### 2026: AI-generated title-link test (secondary sources only)
- **Secondary (Search Engine Roundtable, "Google Using AI to Create Title Links on SERP", Mar 23, 2026):** https://www.seroundtable.com/google-tests-ai-to-create-title-links-on-serp-41088.html — "according to a report by The Verge ... Google is using AI to generate title links for some new articles and beyond." "Danny Goodwin, from Search Engine Land, reported that Google confirmed the test saying it was "small" and "narrow."" "Google also said that this test impacts news sites, but not exclusively news sites."
- **Secondary:** Search Engine Land, "Google confirms AI headline rewrites test", https://searchengineland.com/google-search-ai-headline-rewrites-test-472146. The page returned HTTP 403, so it was **not read**. Search snippets say Google called the test "small" and "narrow".
- **Google public comment (via SE Roundtable, Apr 24, 2026):** this was an AI Mode bug that changed title links and citations. Rajan Patel (Google) said on X on April 23, 2026: "It is a bug. Thanks for pinging, we'll fix." https://www.seroundtable.com/google-fix-ai-mode-citations-bug-41211.html
- **Status:** the title-link doc (last updated 2025-12-10) does not mention generative AI. No opt-out is documented.

### Title length
- **Documented:** "there's no limit on how long a `<title>` element can be" (title-link page). There is no character count anywhere in Google's docs.
- **Observed practice / M02 already cited MDN:** the "~55–60 characters" rule of thumb. Teach "put the important words first", because the title "is truncated ... as needed, typically to fit the device width."

---

## 2. Snippets and meta descriptions

Source: "Control your snippets in search results", https://developers.google.com/search/docs/appearance/snippet. **Last updated 2026-04-20.**

- **Documented:** "Google primarily uses the content on the page to automatically determine the appropriate snippet. We may also use descriptive information in the meta description element when it describes the page better than other parts of the content."
- **Documented:** "Snippets are designed to emphasize and preview the page content that best relates to a user's specific search. This means that Google Search might show different snippets for different searches."
- **Documented:** "A meta description tag generally informs and interests users with a short, relevant summary of what a particular page is about. They are like a pitch that convince the user that the page is exactly what they're looking for. There's no limit on how long a meta description can be, but the snippet is truncated in Google Search results as needed, typically to fit the device width."
- **Documented (CMS note):** "If you use a CMS, such as Wix, WordPress, or Blogger, you might not be able to edit your HTML directly, or you might prefer not to. Instead, your CMS might have a search engine settings page or some other mechanism to tell search engines about meta tags."
- **Documented, heading "Create unique descriptions for each page on your site":** "Identical or similar descriptions on every page of a site aren't helpful when individual pages appear in search results. Wherever possible, create descriptions that accurately describe the specific page. Use site-level descriptions on the main home page or other aggregation pages, and use page-level descriptions everywhere else. If you don't have time to create a description for every single page, try to prioritize your content; at the very least, create a description for the critical URLs like your home page and popular pages."
- **Documented, heading "Include relevant information about the content in the description":** "product pages might have the key bits of information—price, age, manufacturer—scattered throughout a page. A good meta description can bring all this data together." Example: `<meta name="description" content="Written by A.N. Author, Illustrated by V. Gogh, Price: $17.99, Length: 784 pages">`
- **Documented, heading "Programmatically generate descriptions":** "programmatic generation of the descriptions can be appropriate and are encouraged. Good descriptions are human-readable and diverse." Also: "meta descriptions comprised of long strings of keywords don't give users a clear idea of the page's content, and are less likely to be displayed as a snippet."
- **Documented, heading "Use quality descriptions":** "Because meta descriptions aren't displayed in the pages the user sees, it's easy to let this content slide. But high-quality descriptions can be displayed in Google's search results, and can go a long way to improving the quality and quantity of your search traffic."
  - Bad/better pairs (verbatim labels): "Bad (list of keywords)" / "Better (explains what the shop sells and details like opening hours and location)"; "Bad (same description used for every news article)" / "Better (uses a snippet from the specific news article)"; "Bad (doesn't summarize the page)" / "Better (summarizes the whole page)"; "Bad (too short)" `content="Mechanical pencil"` / "Better (specific and detailed)". These are good templates for Nila examples.
- **Documented, snippet controls:** "To prevent Google from displaying a snippet for your page in search results, use the nosnippet meta tag. To specify the maximum length for your snippets, use the max-snippet:[number] meta tag. You can also prevent certain parts of the page from being shown in a snippet by using the data-nosnippet attribute."
- **Documented, SEO Starter Guide:** "Occasionally the snippet may be sourced from the contents of the meta description tag, which is typically a succinct, one- or two-sentence summary of the page. A good meta description is short, unique to one particular page, and includes the most relevant points of the page." https://developers.google.com/search/docs/fundamentals/seo-starter-guide
- **Documented, meta tags page:** "Use this tag to provide a short description of the page. In some situations, this description is used in the snippet shown in search results." https://developers.google.com/search/docs/crawling-indexing/special-tags (last updated 2025-12-10)

### Ranking
- **Documented (old):** "Even though we sometimes use the description meta tag for the snippets we show, we still don't use the description meta tag in our ranking." From "Google does not use the keywords meta tag in web ranking", **Monday, September 21, 2009**, Matt Cutts. https://developers.google.com/search/blog/2009/09/google-does-not-use-keywords-meta-tag. The current banner says only: "Some of the information may be outdated ... However Google still doesn't support the keywords meta tag." It doesn't reconfirm the description point.
- **Documented by absence:** the current snippet page (2026-04-20) says nothing about ranking. The Starter Guide doesn't list the meta description under "Things we believe you shouldn't focus on" either.
- **Myth/contested:** "Meta descriptions are a ranking factor". This is the module's listed failure point. Teach that the description is "a pitch" that may influence clicks, not rankings, and that the only ranking statement dates from 2009.

---

## 3. Headings

- **Documented, SEO Starter Guide, "Things we believe you shouldn't focus on" → "Number and order of headings" (verbatim):** "Having your headings in semantic order is fantastic for screen readers, but from Google Search perspective, it doesn't matter if you're using them out of order. The web in general is not valid HTML, so Google Search can rarely depend on semantic meanings hidden in the HTML specification. There's also no magical, ideal amount of headings a given page should have. However, if you think it's too much, then it probably is." https://developers.google.com/search/docs/fundamentals/seo-starter-guide (**Last updated 2025-12-10**)
- **Documented, Starter Guide:** "Break up long content into paragraphs and sections, and provide headings to help users navigate your pages."
- **Documented, title-link page:** headings are a title-link source. The page recommends "putting the title text in the first visible `<h1>` element on the page". If headings compete, Google "may use the first heading as the text for the title link."
- **Documented, helpful-content page, "Main content":** "Page titles and headings: The visible title and headings throughout a page that summarize its topic and helps users make informed decisions about visiting."
- **Google public comment, Gary Illyes (Google), SEO office hours, July 2024 transcript (last updated 2024-07-18):** https://developers.google.com/search/help/office-hours/2024/july. A user asked whether the Starter Guide's heading-order line is correct "because an SEO tool told me otherwise." Answer: "the SEO starter guide was refreshed just a couple months back to ensure it's still relevant, so what you read in the guide is as accurate as it can get. Also, just because a non-Google tool tells you something is good or bad, that doesn't make it relevant for Google; it may still be a good idea, just not necessarily relevant to Google."
- **Google public comment, John Mueller, multiple H1s (secondary report, not verified at source):** Search Engine Land, "Multiple H1s won't get in the way of your SEO, Google says" (Oct 2019; the page returned 403, so this comes from search snippets). It reports Mueller said in an #AskGoogleWebmasters video (Oct 3, 2019): "Our systems don't have a problem when it comes to multiple H1 headings on a page." Secondary write-ups also cite a December 2017 office-hours answer. **The YouTube original was not found.** Recheck before quoting it in a lesson.
- **Documented (accessibility, not Google), MDN `<h1>–<h6>`** (modified Aug 26, 2026), https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/Heading_Elements:
  - "Do not skip heading levels: always start from `<h1>`, followed by `<h2>` and so on."
  - "While using multiple `<h1>` elements on one page is allowed by the HTML standard (as long as they are not nested), this is not considered a best practice. A page should generally have a single `<h1>` element that describes the content of the page (similar to the document's `<title>` element)."
  - "Prefer using only one `<h1>` per page and nest headings without skipping levels."
  - "A common navigation technique for users of screen reading software is to quickly jump from heading to heading in order to determine the content of the page."
  - Freshness: "Before May 2025, the HTML standard specified that `<h1>` elements in a `<section>`, `<article>`, `<aside>`, or `<nav>` element should render as an `<h2>` ... This special context-dependent default style has now been removed."
- **Observed practice:** SEO audit tools flag "multiple H1" and "missing H1". This is a tool convention, not a Google rule. Gary Illyes's comment above addresses it directly.
- **Course stance (non-negotiable #3):** one H1 and headings in order, for readers and screen readers. Be honest that Google says order "doesn't matter" for ranking.

### The opening paragraph
- **Not found:** no Google doc says to put the keyword in the first paragraph or the first 100 words. The closest documented hooks are:
  - Snippets are "primarily created from the page content itself" and "emphasize and preview the page content that best relates to a user's specific search" (snippet page).
  - Helpful-content question: "Does the main heading or page title provide a descriptive, helpful summary of the content?"
  - M01-L07 already quotes "The most basic signal that information is relevant is when content contains the same keywords as your search query." That line is from Google's How Search Works pages, not the Starter Guide, and wasn't re-fetched here. Recheck it before reusing.
- **Observed practice:** "answer first / inverted pyramid" openings. Teach it as a reader-first habit, not a ranking rule.

---

## 4. URL structure (slugs)

Source: "URL structure best practices for Google Search", https://developers.google.com/search/docs/crawling-indexing/url-structure. **Last updated 2026-10-21** (recently changed, so recheck before publishing).

- **Documented, "Use descriptive URLs":** "When possible, use readable words rather than long ID numbers in your URLs." Recommended `https://example.com/wiki/Aviation`; not recommended `https://example.com/index.php?topic=42&area=3a5ebc944f41daa6f849f730f1`.
- **Documented, "Use your audience's language":** "Use words in your audience's language in the URL (and, if applicable, transliterated words)."
- **Documented, "Use hyphens to separate words" (verbatim):** "We recommend separating words in your URLs, when possible. Specifically, we recommend using hyphens (-) instead of underscores (_) to separate words in your URLs, as it helps users and search engines better identify concepts in the URL. For historical reasons, we don't recommend using underscores, as underscores are commonly used for denoting concepts that should be kept together, for example, by various programming languages to name functions (such as format_date), whereas hyphens clearly signal a word boundary." Not recommended: `summer_clothing` (underscores) and `greendress` ("Joining words together in the URL").
- **Documented, "Use as few parameters as you can":** "Whenever possible, shorten URLs by trimming unnecessary parameters (meaning, parameters that don't change the content)."
- **Documented, "Be aware that URLs are case sensitive":** "Google treats both /APPLE and /apple as distinct URLs with their own content). If upper and lower case text in a URL is treated the same by your web server, convert all text to the same case so it's easier for Google to determine that URLs reference the same page." **Note:** Google says "same case", not "lowercase". Lowercase is **observed practice**.
- **Documented, parameters:** "use the following common encoding: an equal sign (=) to separate key-value pairs and add additional parameters with an ampersand (&)."
- **Documented, fragments:** "Don't use fragments to change the content of a page, as Google Search generally doesn't support URL fragments."
- **Documented, common issues:** "Overly complex URLs, especially those containing multiple parameters, can cause problems for crawlers by creating unnecessarily high numbers of URLs that point to identical or similar content on your site." Listed issues: "Additive filtering of a set of items", "Irrelevant parameters" (referral, sorting, session IDs), "Calendar issues", "Broken relative links". Faceted navigation is M12.
- **Documented, Starter Guide "Use descriptive URLs":** "Parts of the URL can be displayed in search results as breadcrumbs, so users can also use the URLs to understand whether a result will be useful for them." It contrasts `https://www.example.com/pets/cats.html` with "A URL that only contains random identifiers is less helpful for users".
- **Documented, Starter Guide "Keywords in the domain name or URL path":** "From a ranking perspective, the keywords in the name of the domain (or URL path) alone have hardly any effect beyond appearing in breadcrumbs."
- **Documented, ecommerce URL page:** "Add descriptive words in URL paths. The words in URLs may help Google better understand the page." Recommended `/product/black-t-shirt-with-a-white-collar`; not recommended `/product/3243`. https://developers.google.com/search/docs/specialty/ecommerce/designing-a-url-structure-for-ecommerce-sites (2025-12-10)
- **Teaching note:** changing an existing slug needs a 301 redirect (M06). In WordPress the slug sits under permalinks (M05). Warn against changing slugs on pages that already rank, unless you add a redirect.

---

## 5. Keyword use and keyword stuffing

- **Documented, Spam policies, "Keyword stuffing" (verbatim):** "Keyword stuffing refers to the practice of filling a web page with keywords or numbers in an attempt to manipulate rankings in Google Search results. Often these keywords appear in a list or group, unnaturally, or out of context. Examples of keyword stuffing include: Lists of phone numbers without substantial added value; Blocks of text that list cities and regions that a web page is trying to rank for; Repeating the same words or phrases so often that it sounds unnatural." It gives an example paragraph repeating "unlimited app store credit". https://developers.google.com/search/docs/essentials/spam-policies (**Last updated 2026-08-28**)
- **Documented, related policy, "Hidden text and link abuse":** examples include "Using white text on a white background", "Hiding text behind an image", "Using CSS to position text off-screen", "Setting the font size or opacity to 0". This is useful for the break-it lab.
- **Documented, related policy, "Scaled content abuse":** "many pages are generated for the primary purpose of manipulating search rankings and not helping users", including "Using generative AI tools or other similar tools to generate many pages without adding value for users". Mention it in passing; M07 covers it.
- **Documented, SEO Starter Guide, "Things we believe you shouldn't focus on":**
  - "Meta keywords: Google Search doesn't use the keywords meta tag."
  - "Keyword stuffing: Excessively repeating the same words over and over (even in variations) is tiring for users, and keyword stuffing is against Google's spam policies."
  - "Minimum or maximum content length: The length of the content alone doesn't matter for ranking purposes (there's no magical word count target, minimum or maximum, though you probably want to have at least one word). If you are varying the words (writing naturally to not be repetitive), you have more chances to show up in Search simply because you are using more keywords."
  - "Thinking E-E-A-T is a ranking factor: No, it's not."
- **Documented, Starter Guide, "Expect your readers' search terms" (synonyms):** "Users who know a lot about the topic might use different keywords in their search queries than someone who is new to the topic. For example, some users might search for "charcuterie", while others might search for "cheese board". Anticipating these differences in search behavior and writing with your readers in mind could produce positive effects on how your site performs in search results." It continues: "However, don't worry if you don't anticipate every variation of how someone might seek your content. Google's language matching systems are sophisticated and can understand how your page relates to many queries, even if you don't explicitly use the exact terms in them." *(Nila: "pour-over" vs "V60 method" vs "drip coffee".)*
- **Documented, title-link page:** "It's sometimes helpful to have a few descriptive terms in the `<title>` element, but there's no reason to have the same words or phrases appear multiple times."
- **Documented, link page:** "resist the urge to cram every keyword that's related to the page that you're linking to (remember, keyword stuffing is a violation of our spam policies)."
- **Not found:** Google says nothing anywhere about **keyword density** or an ideal percentage. **Myth/contested:** "aim for 1–2% keyword density" is an industry myth with no Google source. The "no magical word count" line is the nearest official statement.

---

## 6. Helpful, people-first content and E-E-A-T

Source: "Creating helpful, reliable, people-first content", https://developers.google.com/search/docs/fundamentals/creating-helpful-content. **Last updated 2026-10-05** (recently changed: it has new "Main content" and Effort/Originality sections, and a warning about fabricated authors).

- **Documented, purpose:** "Google's automated ranking systems are designed to prioritize helpful, reliable information that's created to benefit people, and not content that's created to manipulate search engine rankings."
- **Documented:** "Beyond asking yourself these questions, consider having others you trust but who are unaffiliated with your site provide an honest assessment."

### Self-assessment questions (verbatim, the most useful for Nila)
**Content and quality questions:**
- "Does the content provide original information, reporting, research, or analysis?"
- "Does the content provide a substantial, complete, or comprehensive description of the topic?"
- "Does the content provide insightful analysis or interesting information that is beyond the obvious?"
- "If the content draws on other sources, does it avoid simply copying or rewriting those sources, and instead provide substantial additional value and originality?"
- "Does the main heading or page title provide a descriptive, helpful summary of the content?"
- "Does the main heading or page title avoid exaggerating or being shocking in nature?"
- "Is this the sort of page you'd want to bookmark, share with a friend, or recommend?"
- "Does the content provide substantial value when compared to other pages in search results?"
- "Is the content produced well, or does it appear sloppy or hastily produced?"

**Expertise questions:**
- "Does the content present information in a way that makes you want to trust it, such as clear sourcing, evidence of the expertise involved, background about the author or the site that publishes it, such as through links to an author page or a site's About page?"
- "Is this content written or reviewed by an expert or enthusiast who demonstrably knows the topic well?"
- "Does the content have any easily-verified factual errors?"

**Focus on people-first content** ("Answering yes to the questions below means you're probably on the right track"):
- "Do you have an existing or intended audience for your business or site that would find the content useful if they came directly to you?"
- "Does your content clearly demonstrate first-hand expertise and a depth of knowledge (for example, expertise that comes from having actually used a product or service, or visiting a place)?"
- "Does your site have a primary purpose or focus?"
- "After reading your content, will someone leave feeling they've learned enough about a topic to help achieve their goal?"
- "Will someone reading your content leave feeling like they've had a satisfying experience?"

**Avoid creating search engine-first content** ("Answering yes to some or all ... is a warning sign"), selected:
- "Is the content primarily made to attract visits from search engines?"
- "Are you mainly summarizing what others have to say without adding much value?"
- "Does your content leave readers feeling like they need to search again to get better information from other sources?"
- "Are you writing to a particular word count because you've heard or read that Google has a preferred word count? (No, we don't.)"
- "Are you changing the date of pages to make them seem fresh when the content has not substantially changed?"

- **Documented:** "SEO can be a helpful activity when it is applied to people-first content, rather than search engine-first content."

### E-E-A-T (exact wording)
- **Documented:** "they identify a mix of factors that can help determine which content demonstrates aspects of experience, expertise, authoritativeness, and trustworthiness, or what we call E-E-A-T."
- **Documented:** "Of these aspects, trust is most important. The others contribute to trust, but content doesn't necessarily have to demonstrate all of them."
- **Documented (the key line):** "While E-E-A-T itself isn't a specific ranking factor, using a mix of factors that can identify content with good E-E-A-T is useful."
- **Documented:** "our systems give even more weight to content that aligns with strong E-E-A-T for topics that could significantly impact the health, financial stability, or safety of people, or the welfare or well-being of society. We call these "Your Money or Your Life" topics, or YMYL for short."
- **Documented:** "Search raters have no control over how pages rank. Rater data is not used directly in our ranking algorithms."
- **Documented, Starter Guide:** "Thinking E-E-A-T is a ranking factor — No, it's not."
- **Documented, blog (origin of the extra E):** "Our latest update to the quality rater guidelines: E-A-T gets an extra E for Experience", **Thursday, December 15, 2022**, Elizabeth Tucker. https://developers.google.com/search/blog/2022/12/google-raters-guidelines-e-e-a-t — "Does content also demonstrate that it was produced with some degree of experience, such as with actual use of a product, having actually visited a place or communicating what a person experienced?" Also: the guidelines "don't directly influence ranking."

### Who, How, Why (verbatim)
- "Consider evaluating your content in terms of "Who, How, and Why" as a way to stay on course with what our systems seek to reward."
- **Who:** "Is it self-evident to your visitors who authored your content?" · "Do pages carry a byline, where one might be expected?" · "Do bylines lead to further information about the author or authors involved, giving background about them and the areas they write about?" **New (2026):** "Fabricating creator profiles (such as by using AI-generated headshots, made-up names, or false credentials to make content appear as if it was written by human experts) is a form of deception."
- **How:** "with product reviews, it can build trust with readers when they understand the number of products that were tested, what the test results were, and how the tests were conducted, all accompanied by evidence of the work involved, such as photographs." For AI: "Is the use of automation, including AI-generation, self-evident to visitors through disclosures or in other ways?"
- **Why:** ""Why" is perhaps the most important question to answer about your content." "The "why" should be that you're creating content primarily to help people, content that is useful to visitors if they come to your site directly." "If you use automation, including AI-generation, to produce content for the primary purpose of manipulating search rankings, that's a violation of our spam policies."

### Main content attributes (new section; good for M14 handoff)
- "Effort: The extent to which human work went into creating the content or the systems powering it." · "Originality: The extent to which the content offers unique, original information or perspectives that aren't already available on other websites." · "Talent or skill" · "Accuracy".
- "Attribution or giving credit to other sources doesn't replace the need for original effort."

---

## 7. Image SEO

Source: "Google image SEO best practices", https://developers.google.com/search/docs/appearance/google-images. **Last updated 2026-03-02.**

- **Documented, HTML images:** "Google can find images in src attribute of `<img>` element (even when it's a child of other elements, such as the `<picture>` element). Google doesn't index CSS images." *(Already in M02-L05.)*
- **Documented, image sitemaps:** "You can provide the URL of images we might not have otherwise discovered by submitting an image sitemap." "Unlike regular sitemaps, you can include URLs from other domains in the `<image:loc>` elements of the image sitemaps. This lets you use CDNs (content delivery networks) to host images." Image sitemaps page (2025-12-10): "You can create a separate image sitemap or add image sitemap tags to your existing sitemap; either approach is equally fine for Google." https://developers.google.com/search/docs/crawling-indexing/sitemaps/image-sitemaps
- **Documented, responsive images:** "Web pages use the `<picture>` element or the `srcset` attribute of an `img` element to specify responsive images. However, some browsers and crawlers don't understand these attributes. We recommend that you always specify a fallback URL using the `src` attribute." Also: "make sure that you provide an `img` element as a fallback with a `src` attribute when using the `picture` element".
- **Documented, supported formats (verbatim):** "Google Search supports images referenced in the `src` attribute of `img` in the following file formats: BMP, GIF, JPEG, PNG, WebP, SVG, and AVIF. It's also a good idea to have the extension of your filename match with the file type."
- **Documented, speed:** "images are often the largest contributor to overall page size, which can make pages slow and expensive to load." It points to PageSpeed Insights.
- **Documented, file names:** "the filename can give Google very light clues about the subject matter of the image. When possible, use filenames that are short, but descriptive. For example, `my-new-black-kitten.jpg` is better than `IMG00023.JPG`. Avoid using generic filenames like `image1.jpg`, `pic.gif`, `1.jpg` when possible." Also: "If you localize your images, remember to also translate the filenames".
- **Documented, alt text:** "The most important attribute when it comes to providing more metadata for an image is the alt text". "Google uses alt text along with computer vision algorithms and the contents of the page to understand the subject matter of the image." "When writing alt text, focus on creating useful, information-rich content that uses keywords appropriately and is in context of the content of the page. Avoid filling `alt` attributes with keywords (also known as keyword stuffing) as it results in a negative user experience and may cause your site to be seen as spam."
  - Ladder example (verbatim labels): "Bad (missing alt text)" `<img src="puppy.jpg"/>` → "Bad (keyword stuffing)" → "Better" `alt="puppy"` → "Best" `alt="Dalmatian puppy playing fetch"`. Good for a Nila exercise (e.g. a bag of beans: missing → stuffed → "coffee beans" → "250 g bag of Nila House Blend whole beans").
- **Documented, context:** "Google extracts information about the subject matter of the image from the content of the page, including captions and image titles. Wherever possible, make sure images are placed near relevant text and on pages that are relevant to the image subject matter."
- **Documented, consistent URL:** "consistently reference the image with the same URL, so that Google can cache and reuse the image without needing to request it multiple times."
- **Documented, preferred preview image:** "You can influence which image gets selected by providing your preferred image through one of the following metadata sources": schema.org `primaryImageOfPage` (or `image` on the main entity), or "Specify the og:image meta tag." Best practices: "Choose an image that's relevant and representative of the page." "Avoid using a generic image (for example, your site logo) or an image with text in the schema.org markup or og:image meta tag." "Avoid using an image with an extreme aspect ratio". "Use a high resolution, if possible." *(This links images to Open Graph.)*

### Lazy loading
- **Documented,** "Fix lazy-loaded content", https://developers.google.com/search/docs/crawling-indexing/javascript/lazy-loading (2025-12-10): "make sure that your lazy-loading implementation loads all relevant content whenever it is visible in the viewport." Methods listed: "Browser built-in lazy-loading for images and iframes". "Google Search does not interact with your page." "Don't add lazy-loading to content that is likely to be immediately visible when a user opens a page. That might cause content to take longer to load and show up in the browser, which will be very noticeable to the user." Test: "If your image or video URLs appear in the src attribute on the `<img>` or `<video>` elements in the rendered HTML, your setup works correctly." (Use URL Inspection.)
- **Note:** Google's image SEO page (2026-03-02) **no longer has a lazy-loading section**. Lazy loading now sits on the JavaScript page above.

### web.dev: formats and sizing
Source: web.dev Learn Performance, "Image performance", https://web.dev/learn/performance/image-performance. **Last updated 2023-11-01** (older; check before citing).
- **Documented (web.dev):** "Images are often the heaviest and most prevalent resource on the web."
- **Size:** "an image displayed in a 500 pixel by 500 pixel container would be optimally sized at 500 pixels by 500 pixels. For example, using a square 1000 pixel image means that the image is twice as large as needed." On DPR: "if the device has a DPR of 2 and the image is displayed in a 500 pixel by 500 pixel container, then a square 1000 pixel image ... is now the optimal size." "In most cases, the human eye is unable to benefit from a DPR of 3."
- **Formats:** "Modern image formats like WebP and AVIF may provide better compression than PNG or JPEG, making your image file size smaller and therefore taking less time to download. By serving images in modern formats, you can reduce a resource's load time, which may result in a lower Largest Contentful Paint (LCP)." "WebP is a widely supported format that works on all modern browsers." "AVIF is a newer image format, and while it isn't as widely supported as WebP, it does enjoy reasonably decent support across browsers. AVIF supports both lossy and lossless compression, and tests have shown greater than 50% savings when compared to JPEG in some cases."
- **`<picture>`:** "A `<picture>` element requires an `<img>` element nested inside of it. The alt, width, and height attributes are defined on the `<img>` and used regardless of which `<source>` is selected."
- **Lazy:** "An attribute value of lazy tells the browser to not download the image until it is in (or near) the viewport."
- **WordPress note (observed practice, not verified here):** WordPress core generates `srcset` sizes and adds `loading="lazy"` automatically. Verify against WordPress docs in M05 before stating it.

---

## 8. Internal links and anchor text

Source: "Link best practices for Google", https://developers.google.com/search/docs/crawling-indexing/links-crawlable. **Last updated 2025-12-10.**

- **Documented:** "Google uses links as a signal when determining the relevancy of pages and to find new pages to crawl."
- **Documented, crawlable links:** "Generally, Google can only crawl your link if it's an `<a>` HTML element (also known as anchor element) with an `href` attribute." *(M02-L05 covered this.)*
- **Documented, anchor text placement:** "Anchor text (also known as link text) is the visible text of a link. This text tells people and Google something about the page you're linking to." "As a fallback, Google can use the `title` attribute as anchor text if the `<a>` element is for some reason empty." "For images as links, Google uses the `alt` attribute of the `img` element as anchor text".
- **Documented, "Write good anchor text" (verbatim):** "Good anchor text is descriptive, reasonably concise, and relevant to the page that it's on and to the page it links to. It provides context for the link, and sets the expectation for your readers. The better your anchor text, the easier it is for people to navigate your site and for Google to understand what the page you're linking to is about."
  - "Bad (too generic)": "Click here", "Read more", "website", "article".
  - "Tip: Try reading only the anchor text (out of context) and check if it's specific enough to make sense by itself. If you don't know what the page could be about, you need more descriptive anchor text."
  - "Bad (weirdly long)" → "Better (more concise)".
  - "Write as naturally as possible, and resist the urge to cram every keyword that's related to the page that you're linking to". "Ask yourself, does the reader need these keywords to understand the next page? If it feels like you're forcing keywords into the anchor text, then it's probably too much."
  - "Remember to give context to your links: the words before and after links matter, so pay attention to the sentence as a whole. Don't chain up links next to each other; it's harder for your readers to distinguish between links, and you lose surrounding text for each link." "Bad (too many links next to each other)" → "Better (links are spaced out with context)".
- **Documented, "Internal links: cross-reference your own content" (verbatim):** "paying more attention to the anchor text used for internal links can help both people and Google make sense of your site more easily and find other pages on your site. Every page you care about should have a link from at least one other page on your site. Think about what other resources on your site could help your readers understand a given page on your site, and link to those pages in context." "There's no magical ideal number of links a given page should contain. However, if you think it's too much, then it probably is."
- **Documented, link-based importance (ecommerce structure page):** "Google can use information such as the number of links it needs to follow to reach a page and the number of links to a page to infer the relative importance of a page over the rest of your site." "Google generally doesn't look at the structure of URLs to work out the structure of a site. Instead, it analyzes the linkages between pages to gain insights about the relative importance of different pages on a site. As a general rule, the more links a page has to it within a site, the higher the relative importance of the page to other pages on your site." https://developers.google.com/search/docs/specialty/ecommerce/help-google-understand-your-ecommerce-site-structure (2025-12-10)
- **Google public comment, John Mueller, July 2024 office hours:** "If you want a page to be easily discovered, make sure it's linked to from pages that are indexable and relevant within your website." "if there's an important part of your website only linked from the blocked page, then it will make search much harder." https://developers.google.com/search/help/office-hours/2024/july
- **Documented, Starter Guide:** "the vast majority of the new pages Google finds every day are through links".
- **Orphan pages:** Google's docs do **not** use the term "orphan page" (searched the link, Starter Guide and ecommerce pages). The documented equivalent is "Every page you care about should have a link from at least one other page on your site." **Observed practice:** "orphan page" is an SEO-tool term for a page with no internal links pointing to it, found by comparing a crawl with the sitemap or analytics.
- **Link placement:** **Not found.** Google says nothing about whether links in the body, nav or footer count differently. Only "link to those pages in context" and "the words before and after links matter" are documented. Any "body links are worth more" claim is **Myth/contested** and has no Google source.

---

## 9. Ecommerce: product and category pages

Hub: "Best practices for ecommerce sites in Google Search", https://developers.google.com/search/docs/specialty/ecommerce (2025-12-10). Child pages: where ecommerce content can appear; share your product data; include structured data; launch a new site; write high quality reviews; designing a URL structure; help Google understand your site structure; pagination and incremental loading.

### Site structure: category → product
- **Documented:** "add links from menus to category pages, from category pages to sub-category pages, and finally from sub-category pages to all product pages."
- **Documented:** "If category pages don't include direct links to all products in a category, Googlebot might not find all of your products by crawling alone. These products may be reachable from a search box, but not via category browsing. Googlebot generally doesn't try to submit searches into a search box as part of crawling a site. It's strongly recommended to link to all products that you wish indexed. If it's not possible to link to all pages, use a sitemap or a Google Merchant Center feed."
- **Documented:** "if you have a best selling product, consider linking to it from the home page or in other content, such as blog posts or newsletters on your site." *(Nila: link brew guides to the beans used.)*
- **Documented:** "The ultimate ecommerce SEO best practice is to create useful and interesting content that is valuable to users."

### URLs and links on shop pages
- **Documented:** "If you're using an ecommerce platform, you can most likely skip this section, as the platform has most likely already considered these issues for you." *(WooCommerce users mostly won't hand-design URLs.)*
- **Documented:** "Include meaningful text between `<a href>` and `</a>` tags where possible, such as the title of the product being linked to. Don't use generic phrases such as "click here"."
- **Documented:** "Avoid linking to, or at least indexing, pages without useful content. If a category has no items, use a noindex robots meta tag."
- **Documented, variants:** "make sure that each variant can be identified by a separate URL", for example "A path segment, such as `/t-shirt/green`" or "A query parameter, such as `/t-shirt?color=green`". Canonicals are M06; mention only.
- **Documented, fragments:** "`/product/t-shirt#black` and `/product/t-shirt#white` are considered to be the same page by Google."

### Pagination (category pages)
Source: https://developers.google.com/search/docs/specialty/ecommerce/pagination-and-incremental-page-loading (2025-12-10)
- "include links from each page to the following page using `<a href>` tags."
- **Important nuance for non-negotiable #6:** "Normally, we recommend that you give web pages distinct titles to help differentiate them. However, pages in a paginated sequence don't need to follow this recommendation. You can use the same titles and descriptions for all pages in the sequence. Google tries to recognize pages in a sequence and index them accordingly."
- "Give each page a unique URL. For example, include a `?page=n` query parameter".
- "Don't use the first page of a paginated sequence as the canonical page. Instead, give each page its own canonical URL."
- "In the past, Google used `<link rel="next" href="...">` and `<link rel="prev" href="...">` to identify next page and previous page relationships. Google no longer uses these tags, although these links may still be used by other search engines."
- "Google's crawlers don't "click" buttons and generally don't trigger JavaScript functions that require user actions to update the current page contents." *("Load more" warning.)*

### Product pages and reviews
- **Documented, reviews page:** best practices include "Evaluate from a user's perspective.", "Provide evidence such as visuals, audio, or other links of your own experience with what you are reviewing", "Share quantitative measurements about how something measures up in various categories of performance.", and "Discuss the benefits and drawbacks of something, based on your own original research." https://developers.google.com/search/docs/specialty/ecommerce/write-high-quality-reviews (2025-12-10). *(For Nila's brew-guide comparisons: grinders, kettles.)*
- **Documented, snippet page:** product descriptions can gather "price, age, manufacturer".

### Product structured data (intro only; details in M12)
- **Documented:** "When you add structured data to your product pages, your product information can appear in richer ways in Google Search results (including Google Images and Google Lens). For example, users can see price, availability, review ratings, shipping information, and more right in search results." https://developers.google.com/search/docs/appearance/structured-data/product (2025-12-10)
- **Documented:** two classes: "Product snippets: For product pages where people can't directly purchase the product." · "Merchant listings: For pages where customers can purchase products from you." "In general, adding the required product information properties for merchant listings means that your product pages can also be eligible for product snippets."
- **Documented:** "While structured data isn't required to appear in Google Search results, it can help Google understand your page better and display it as a rich result." https://developers.google.com/search/docs/specialty/ecommerce/share-your-product-data-with-google
- **Documented:** "If you are using an ecommerce platform, it may be easier to use an integrated platform extension or plugin to add structured data for you." https://developers.google.com/search/docs/specialty/ecommerce/include-structured-data-relevant-to-ecommerce
- **Documented, schema.org:** `Product`: "Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a car; a haircut; or an episode of a TV show streamed online." https://schema.org/Product
- **Not found:** Google has **no doc on category-page copy** (intro text above or below product grids, ideal length, FAQs). Any "add 300 words to category pages" advice is **Observed practice**, not documented.

---

## 10. Open Graph

- **Documented, ogp.me, "Basic Metadata":** "The four required properties for every page are:" "og:title - The title of your object as it should appear within the graph, e.g., "The Rock"." · "og:type - The type of your object, e.g., "video.movie". Depending on the type you specify, other properties may also be required." · "og:image - An image URL which should represent your object within the graph." · "og:url - The canonical URL of your object that will be used as its permanent ID in the graph". https://ogp.me/ (no date shown)
- **Documented, optional:** "og:description - A one to two sentence description of your object." · "og:site_name - If your object is part of a larger web site, the name which should be displayed for the overall site." · "og:locale - The locale these tags are marked up in. Of the format language_TERRITORY. Default is en_US."
- **Documented, alt:** "og:image:alt - A description of what is in the image (not a caption). If the page specifies an og:image it should specify og:image:alt."
- **Documented, markup format (ogp.me example):** `<meta property="og:title" content="The Rock" />` (uses `property`, not `name`).
- **Google's use of og:title:** **Documented.** The title-link page lists "Content in `og:title` `meta` tags" as one of the sources it uses. Nothing else is said about it; no weighting is documented.
- **Google's use of og:image:** **Documented.** The image SEO page lets `og:image` indicate the preferred preview image (see §7).
- **Meta for Developers, "A Guide to Sharing for Webmasters"** (Updated: Jun 30, 2026), https://developers.facebook.com/docs/sharing/webmasters/:
  - "Without these Open Graph tags, the Facebook Crawler uses internal heuristics to make a best guess about the title, description, and preview image for your content."
  - Basic tags: "og:url — The canonical URL for your page. This should be the undecorated URL, without session variables, user identifying parameters, or counters." "og:title — The title of your article without any branding such as your site name." "og:description — A brief description of the content, usually between 2 and 4 sentences." "og:type ... If you don't specify a type,the default is website."
  - "To see how your markup appears to the Facebook Crawler enter a URL into Sharing Debugger. It will show which meta tags the crawler scrapes as well as any errors or warnings." "The debugger also triggers a scrape of your page".
- **Facebook tool name and URL:** **Sharing Debugger**, https://developers.facebook.com/tools/debug/ (the URL is from the docs page link; the tool page needs a login and wasn't opened).
- **LinkedIn, "Make your website shareable on LinkedIn"** (LinkedIn Help, "Last updated: 3 years ago"), https://www.linkedin.com/help/linkedin/answer/a521928:
  - "Below are the og: tags that must exist and their correct format:" og:title, og:image, og:description, og:url.
  - "Max file size: 5 MB" · "Minimum image dimensions: 1200 (w) x 627 (h) pixels" · "Recommended ratio: 1.91:1"
  - "Images less than 401 pixels wide display as a thumbnail image."
- **LinkedIn tool name and URL:** **Post Inspector**, https://www.linkedin.com/post-inspector/ (page `<title>` is "Post Inspector"; its description says "Get insights into how your content shows up on LinkedIn with Post Inspector."). The tool needs a login; not tested live.
- **WordPress (observed practice):** SEO plugins (Yoast SEO, Rank Math, AIOSEO) output OG tags from the SEO title and description fields. Verify field names in M05; they weren't checked here.

---

## 11. Free tools for on-page checks

All UI labels are **from help docs, not tested live**.

- **Google Search Console, URL Inspection tool,** https://support.google.com/webmasters/answer/9012289:
  - Access: "Type the fully-qualified URL to inspect in the inspection search bar at the top of any Search Console screen." or "Click an Inspect link next to a page URL in most reports."
  - Labels: **Test live URL** → **View tested page** → tabs including **Screenshot** ("Click the Screenshot tab."); "click View crawled page > More info (indexed result) or View tested page > More info (live test)". **Request Indexing**. Status values: "URL is on Google", "URL is on Google, but has issues", "URL is not on Google". Fields: **Page indexing > Google-selected canonical**, "User-declared canonical", "Referring page", "Last crawl", "Crawled as".
  - "Click View tested page to see additional response data such as a screenshot of the rendered page, the raw HTML returned, the HTTP headers, JavaScript console output, and any page resources loaded." *(Use it to confirm the title, H1, alt text and lazy-loaded images are in the rendered HTML.)*
  - Caveat: "There is a daily limit of inspection requests for each property that you own." and ""URL is on Google" doesn't actually guarantee that your page will appear in Search results."
- **Search Console Performance report** (for the 4-week before/after check), https://support.google.com/webmasters/answer/7576553:
  - "The default view of the report shows click and impression data for your site in Google Search results for the past three months."
  - Metrics: Clicks, Impressions, "CTR (click-through rate): The click count divided by the impression count.", "Average position".
  - Dimension tabs include **Queries** and **Pages**. Filters: **Date range** ("click the date filter"), **Search type**. Freshness: the search type list now includes "Web: text-based". Comparison: "See advanced filtering and comparison" (Compare-mode labels weren't captured; recheck).
  - Starter Guide on timing: "In general, you likely want to wait a few weeks to assess whether your work had beneficial effects in Google Search results."
- **Bing Webmaster Tools, Site Scan** (labels from the Bing Webmaster Tools page's built-in string bundle, not from a help article and not tested live): "Site Scan", "Start new scan", "Scan name", "Scope" (website / "URL list" / sitemap: "You can specify a website, subdomain or directory."), "Max scan depth", "Advanced settings", "Ignore Robots.txt", "Pages scanned", "Issue details". Its description: "Analyze your website for common technical SEO/GEO issues and fix them to improve your performance on Bing." Limits: "Maximum of 5 scans are allowed." and "only one scan can be in progress at a time". Freshness: Bing now labels this "SEO/GEO". A help string reads: "Ensure your HTML element and alt attributes are descriptive, specific, and accurate." The **names of Site Scan's individual issues** (e.g., "Title too long") were **not found**.
- **Google Rich Results Test**: named in the URL Inspection help as the tool for testing URLs you don't own ("use the appropriate non-owner test, such as the Rich Results test"). Product markup check only; M12 goes further.
- **PageSpeed Insights**: linked from the image SEO page ("Analyze your site speed with PageSpeed Insights"). Free. Use it for image weight, but the course's no-Lighthouse-runs rule applies to *us* when we write lessons, not to learners.
- **Browser View Source / Ctrl+F**: already taught in M02-L03.
- **Browser extensions (Observed practice; Chrome Web Store listings, names checked via search 2026-11-08, not installed):**
  - "Detailed SEO Extension": https://chromewebstore.google.com/detail/detailed-seo-extension/pfjdepjjfjjahkjfpkcgfmfhmnakjfba. **Conflict:** search results list the developer as both "AHREFS PTE. LTD." and "Marketing, Inc (detailed.com)". This may be an ownership change; recheck.
  - "SEO META in 1 CLICK": https://chromewebstore.google.com/detail/seo-meta-in-1-click/bjogjfinolnhfhkbipphpdlldadpnmhc
  - "META SEO inspector": https://chromewebstore.google.com/detail/meta-seo-inspector/ibkclpciafdglkjkcibmohobjkcfkaef
  - Extensions change owners and permissions. Tell learners to check the permissions before installing, and offer View Source as the no-install path.
- **Facebook Sharing Debugger** and **LinkedIn Post Inspector**: see §10.

---

## Freshness flags

1. **AI-generated title links (March 2026 test).** Google confirmed a "small", "narrow" test (secondary reports, SE Roundtable Mar 23, 2026). The doc doesn't mention it. Recheck before publishing L1, and present it as "Google may rewrite titles, now sometimes with AI".
2. **Helpful-content page updated 2026-10-05.** It has new "Main content" and Effort/Originality/Talent/Accuracy sections and the fabricated-author warning. Older articles quoting this page will differ.
3. **URL structure page updated 2026-10-21.** Very recent. Recheck the wording of the hyphen section before quoting it.
4. **Spam policies updated 2026-08-28.** The keyword-stuffing wording was checked on 2026-11-08.
5. **Snippet page updated 2026-04-20.** It now includes a "Read more" deep links section.
6. **Image SEO page updated 2026-03-02.** The lazy-loading section isn't on this page any more. AVIF is in the supported list.
7. **Meta description and ranking** rests on a **2009** blog post. No current page restates it.
8. **2021 title figures** (80% → 87%) are five years old. Present them as historical.
9. **web.dev "Image performance"** was last updated 2023-11-01. Browser support claims for AVIF may be outdated; check caniuse or MDN before stating support.
10. **LinkedIn help page** says "Last updated: 3 years ago". Image specs may have changed.
11. **Bing Site Scan** now says "SEO/GEO", and a UI string says "Site Scan crawler is not yet using Bingbot IP addresses". The product is changing.
12. **Search Console** search type filter now includes "Web: text-based" (multimodal split). Screenshots may differ.
13. **Detailed SEO Extension** ownership is unclear (Ahrefs vs detailed.com).

## Conflicts between sources

1. **Unique titles vs pagination.** Non-negotiable #6 and the title-link page say every page needs distinct titles. The ecommerce pagination page says "pages in a paginated sequence don't need to follow this recommendation. You can use the same titles and descriptions for all pages in the sequence." → Teach #6 as applying to every *indexable page with its own topic*. Paginated category pages (`/page/2/`) are the documented exception.
2. **Headings: Google vs MDN.** Google: order "doesn't matter" for Search, and multiple H1s are no problem (Mueller, secondary report). MDN: "Prefer using only one `<h1>` per page and nest headings without skipping levels." → They answer different questions (ranking vs accessibility). The course keeps one H1 in order for readers (non-negotiable #3) and is honest that it's not a ranking rule.
3. **Keywords in URLs.** Starter Guide: "hardly any effect beyond appearing in breadcrumbs". Ecommerce URL page: "The words in URLs may help Google better understand the page." → Both say descriptive URLs are for people first and give at most a light signal. Don't promise ranking gains from slugs.
4. **Lowercase URLs.** Google says to convert to "the same case", not specifically lowercase. Lowercase is industry convention.
5. **Open Graph required tags.** ogp.me requires og:title, og:type, og:image, og:url. LinkedIn says og:title, og:image, og:description and og:url "must exist". Facebook's "basic tags" list is og:url, og:title, og:description, og:image and fb:app_id, with og:type as an extra. → Teach the union: title, type, image, url, description (+ og:image:alt).
6. **og:title branding.** Facebook: og:title "without any branding such as your site name". Google's `<title>` advice: include the site name concisely at the start or end. → The `<title>` and og:title can legitimately differ.
7. **Title length.** Google: no limit, truncated "to fit the device width". MDN / industry: ~55–60 characters (M02 already flagged this).
8. **Multiple H1 dates.** Secondary sources disagree on whether Mueller's video was 2019 or earlier (some cite December 2017 office hours). The primary video wasn't found.
9. **Extension developer** (see Freshness #13).

## Not found

- **Bing Webmaster Guidelines text.** https://www.bing.com/webmasters/help/webmaster-guidelines-30fba23a renders with JavaScript. Neither curl nor WebFetch returned the body, so **no Bing quotes on titles, descriptions, headings, alt text or keyword stuffing were captured.** Secondary sources (2012 SEW coverage) only say the guidelines cover "title tags, meta description tags, alt tags, ... internal links". Recheck in a real browser before citing Bing.
- **Primary source for Mueller's multiple-H1 statement** (YouTube #AskGoogleWebmasters video). Only Search Engine Land coverage was found (403 when fetched).
- **Search Engine Land article on the 2026 AI title test** (403). Quotes come via SE Roundtable.
- **Keyword density.** No Google doc gives a density or percentage. Searched the Starter Guide, spam policies, title-link and helpful-content pages.
- **"Keyword in the first paragraph / first 100 words".** No Google doc.
- **"Orphan page" as a Google term.** Not used in the link, Starter Guide or ecommerce docs. Only "Every page you care about should have a link from at least one other page on your site."
- **Link placement** (body vs nav vs footer weighting). No Google doc.
- **Category-page copy guidance** (intro text, length). No Google doc. The ecommerce docs cover only linking, URLs and pagination.
- **Meta description length in characters.** No Google figure, only "truncated ... to fit the device width".
- **Names of Bing Site Scan's individual issues.** Not in the captured string bundle.
- **Search Console "Compare" mode exact labels.** The help page links to "advanced filtering and comparison", which wasn't fetched.
- **web.dev "Learn Images" image-format page** (`/learn/images/image-formats` returned 404). Used Learn Performance instead.
- **Facebook Sharing Debugger page body** (needs a login). The name and URL come from Meta's docs page.

## Suggested lesson split (6 lessons, topic order)

1. **M04-L01: Title tags and meta descriptions.** Title formulas for Nila (page, product, category, home), branding, length, the 7 reasons Google rewrites titles, the 2021 change and the 2026 AI test, unique descriptions, the "pitch" not ranking factor, and the pagination exception.
2. **M04-L02: Headings, URL slugs and the opening paragraph.** One clear H1 that matches the title intent, outlines with H2/H3 (accessibility vs Google's "order doesn't matter"), hyphenated readable slugs, same case, few parameters, answer-first openings, and the "main heading ... descriptive, helpful summary" self-check.
3. **M04-L03: Writing for people: natural keywords, synonyms, people-first content and E-E-A-T basics.** The charcuterie/cheese-board synonym idea, the keyword-stuffing spam policy, "no magical word count", the self-assessment questions, Who/How/Why, "E-E-A-T itself isn't a specific ranking factor", and a handoff to M14.
4. **M04-L04: Image SEO.** File names, the alt-text ladder, near-relevant-text placement, formats (WebP/AVIF), sizing and `srcset`, `width`/`height`, lazy loading (not above the fold), image sitemaps (brief), and the preferred preview image.
5. **M04-L05: Internal linking and anchor text.** Anchor-text rules (generic, too long, chained), "every page you care about" and orphan pages, link-based importance, linking brew guides to products, and finding orphans by comparing the sitemap with a crawl or Site Scan.
6. **M04-L06: Shop pages and sharing: product and category pages and Open Graph.** Category → product links, empty-category noindex, variant URLs, pagination, review best practices for product content, a structured data teaser, OG tags, and previews in Sharing Debugger and Post Inspector.

(The capstone and break-it lab follow L06.)

## Hands-on ideas (free tools only)

- **Title-link detective:** search `site:` for the learner's site, or for Nila on a demo site. List each result whose title link differs from `<title>` (View Source). Classify each against Google's 7 issue types.
- **Title and description rewrite table:** 3 pages from the M03 keyword map, with before/after `<title>` and meta description. Check: unique? descriptive? brand at the end? no repeated words? Paste a Google "Bad/Better" pair as a model.
- **Heading outline check:** use the browser's Reader View or a headings extension (or Ctrl+F `<h` in View Source) to list headings. Does H1 ≈ title intent? Does the outline make sense read alone?
- **Slug clean-up (on a practice site only):** turn `?p=123` or `cold_brew_Guide_2024` into `/cold-brew-guide/`. Discuss the redirect requirement (M06) before touching a live page.
- **Keyword-stuffing spotter:** give learners a stuffed Nila paragraph modelled on Google's "unlimited app store credit" example, then have them rewrite it with synonyms (cold brew / cold-steeped coffee / iced coffee concentrate).
- **People-first scorecard:** run one brew guide through 8–10 of Google's self-assessment questions, plus Who/How/Why (byline? method photos? why written?).
- **Alt-text ladder:** for 3 product photos, write missing → stuffed → "better" → "best" versions, following Google's puppy example.
- **Image diet (no tooling beyond the browser):** in DevTools Network > Img, find the heaviest image, compare its intrinsic size with the displayed size, and note the format. Optionally use free Squoosh (squoosh.app; verify it's still live) to convert to WebP or AVIF. Run PageSpeed Insights if the learner wants it; we don't run it ourselves.
- **Orphan hunt:** list sitemap URLs (from `/wp-sitemap.xml` on WordPress), then for each URL search the site for a link to it. Alternatively, run a Bing Site Scan or use URL Inspection's "Referring page" field. Fix it by adding 2 contextual links with descriptive anchors.
- **Anchor-text rewrite:** fix 5 "click here"/"read more" links, and one chained-link sentence, on Nila's blog.
- **Category page audit:** does every product in "Single-Origin Beans" have a crawlable `<a href>` from the category? Are paginated pages `?page=2` or `/page/2/` (not `#2`)? Is an empty "Decaf" category noindexed?
- **Share preview:** add og:title, og:type, og:image (1200×627+), og:url, og:description and og:image:alt via the SEO plugin. Check in Facebook Sharing Debugger and LinkedIn Post Inspector (each needs a free account), then fix and re-scrape.
- **Break-it lab (as in the outline):** on a practice page, plant a duplicate title, a stuffed paragraph and an orphan. Learners find all three with View Source, Ctrl+F, a sitemap-vs-links check and URL Inspection ("Referring page"), then fix them.
- **4-week check:** in the Search Console Performance report, filter **Page** = the optimised URL. Note Clicks, Impressions, CTR and Average position for the 28 days before the change. Book a calendar reminder for 4 weeks after, and compare the same date span. (Starter Guide: "wait a few weeks to assess".)
