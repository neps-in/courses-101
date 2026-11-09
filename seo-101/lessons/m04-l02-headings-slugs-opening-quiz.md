# M04.L02 Quiz — Headings, URL Slugs and the Opening Paragraph

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Search Central (SEO Starter Guide, URL structure, redirects, title links), Google SEO office hours (July 2024), MDN and the WordPress 7.1 source.

### Q1. What does Google say about the order of headings on a page? *(O1 · recall)*
- a) Headings out of order trigger a penalty for the whole of your website
- b) Pages must use exactly one H2 for every 300 words to be well ranked
- c) It doesn't matter for Search, but semantic order helps screen readers
- d) Google reads only the H1, and it ignores all of the other heading levels

**Answer:** c
**Explanation:** The Starter Guide says "from Google Search perspective, it doesn't matter if you're using them out of order", and that semantic order "is fantastic for screen readers". The course keeps headings in order for readers.
**Hint:** Google separates what matters for Search from what helps people.

### Q2. Which slug follows Google's URL advice best? *(O2 · recall)*
- a) `/french-press-ratio/`
- b) `/French_Press_Ratio/`
- c) `/frenchpressratio/`
- d) `/?p=2291&ref=menu`

**Answer:** a
**Explanation:** Google recommends readable words, hyphens rather than underscores, the same case throughout, and as few parameters as you can. Joined-up words and IDs are harder to read.
**Hint:** Readable, hyphenated, one case, no IDs.

### Q3. What happens in WordPress when you change the slug of a published page (not a post)? *(O2 · recall)*
- a) WordPress adds a permanent redirect from the old URL automatically
- b) WordPress refuses to save the change until you remove the old page
- c) Google keeps showing the old URL forever, and it never updates it
- d) The old URL shows "Not found" unless you add a redirect yourself

**Answer:** d
**Explanation:** WordPress only redirects changed slugs on published posts. Its code skips "hierarchical" types, and pages are one, so you need to add a redirect yourself.
**Hint:** Posts and pages are treated differently.

### Q4. Kavya's class page has the title "Beginner Yoga Classes in Chennai | Kavya Yoga" and the H1 "Find Your Inner Peace". What should she change? *(O1 · scenario)*
- a) Nothing, because the H1 is free to say anything as long as it's an H1
- b) Change the H1 to make the same promise: "Beginner Yoga Classes in Chennai"
- c) Add the title's words to every H2 on the page, so the topic is clear
- d) Delete the H1 entirely, so that Google has to use the title instead

**Answer:** b
**Explanation:** The H1 should repeat the title's promise on the page, so visitors know they've found what they clicked. It doesn't need to match word for word, and stuffing the words into every H2 doesn't help.
**Hint:** What did the searcher click on, and what do they see first?

### Q5. Tomás wants to change a product URL from `/produto?id=48213` to `/martelo-de-unha-500g/`. The old URL gets visits every day. What's the safe way? *(O2 · scenario)*
- a) Change it, add a permanent redirect from the old URL, and update his links
- b) Change it and wait, since Google will find the new URL in a few days
- c) Keep both URLs live with the same content, so neither of them is lost
- d) Don't change it, because a URL with an ID ranks better than words do

**Answer:** a
**Explanation:** A new slug is a new URL. Without a redirect, visitors and Google following the old one find an error. Two live copies of the same page split signals (Lesson 3.5). Portuguese words in the URL are fine: Google suggests your "audience's language".
**Hint:** What do people following the old address see?

### Q6. Which is the best opening for Nila's guide "French Press Ratio: How Much Coffee to Use"? *(O3 · scenario)*
- a) "Coffee has a long and fascinating history, which began in Ethiopia."
- b) "French press ratio, french press coffee ratio and best ratio explained."
- c) "Use 1 g of coffee for every 15 g of water: 30 g for a 450 ml press."
- d) "In this post, we'll explore everything you need to know about it all."

**Answer:** c
**Explanation:** It answers the question straight away with the key numbers. The others delay the answer, stuff keywords or say nothing. This is a reader-first habit, not a Google rule.
**Hint:** Which one could a reader stop after and still have the answer?

### Q7. Spot the error: "Our SEO tool says we have two H1s, so Google will lower our rankings. And we must get the keyword into the first 100 words." *(O3 · spot the error)*
- a) Google requires the keyword to appear in the first 50 words, not 100
- b) A tool's warning isn't a Google rule, and no Google doc sets a 100-word rule
- c) Two H1s are banned by the HTML standard, so the page won't load at all
- d) Tools are always right about rankings, so both claims are fully correct

**Answer:** b
**Explanation:** Gary Illyes said "just because a non-Google tool tells you something is good or bad, that doesn't make it relevant for Google". No Google page sets a first-100-words rule. One H1 is still clearer for readers.
**Hint:** Who made each rule: Google, a tool, or nobody?

### Q8. Spot the error: "Our home page is titled 'Home'. That's fine, because Google always shows the title we write." *(spot the error · review: m04-l01)*
- a) Home pages don't have titles, so Google always uses the site's name
- b) "Home" is fine on the home page, but it's wrong on every other page
- c) Google always uses the H1 instead, so the title doesn't matter here
- d) "Home" is vague, and Google may rewrite titles it finds unhelpful

**Answer:** d
**Explanation:** As you saw in Lesson 4.1, Google says to avoid "vague descriptors like "Home"", and its title links are "completely automated", so it may build its own.
**Hint:** In Lesson 4.1, what did Google say about "Home"?
