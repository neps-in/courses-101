# M12.L05 Quiz — Structured Data That's Valid and Honest

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-09 against Google Search Central (structured data intro, general guidelines, Product, Merchant listing, Review snippet, Breadcrumb, AI optimization guide, documentation updates), the 2020 testing-tool post and Search Console Help (Rich Results Test).

### Q1. What does a structured data manual action do? *(O3 · recall)*
- a) Removes the whole site from Google's index
- b) Lowers the page's ranking in web search
- c) Blocks the page from Google Images only
- d) Makes the page ineligible for rich results

**Answer:** d
**Explanation:** A page "loses eligibility for appearance as a rich result; it doesn't affect how the page ranks in Google web search."
**Hint:** Rich results, not rankings.

### Q2. What is the Schema Markup Validator's main purpose? *(O2 · recall)*
- a) To check Google rich-result eligibility only
- b) To measure Core Web Vitals for marked-up pages
- c) To check syntax and schema.org compliance
- d) To submit markup to Google for indexing

**Answer:** c
**Explanation:** Its purpose is "to check syntax and compliance of markup with schema.org standards". For Google rich results, use the Rich Results Test.
**Hint:** schema.org, not Google.

### Q3. Which rich result stopped appearing in Google Search on 7 May 2026? *(O3 · recall)*
- a) FAQ
- b) Product
- c) Breadcrumb
- d) Article

**Answer:** a
**Explanation:** "This feature will no longer appear in Google Search starting May 7, 2026" (FAQ). Its docs were removed in June 2026.
**Hint:** Questions and answers.

### Q4. Nila's product markup has `"price": "0"` and `"priceCurrency": "Rs"`. What should it be? *(O1 · scenario)*
- a) Leave price at zero; Google fills in the price
- b) A price above zero and `INR` as the currency
- c) Remove the Offer and add a rating instead
- d) Use `"₹650"` as the price, with no currency

**Answer:** b
**Explanation:** "merchant listing experiences require a price greater than zero", and currency must be in "three-letter ISO 4217 format" (`INR`).
**Hint:** Real price, standard code.

### Q5. Kavya's studio markup includes `aggregateRating` from her Google reviews widget. Is it eligible for stars? *(O3 · scenario)*
- a) Yes, because the reviews come from Google itself
- b) Yes, if the rating is shown on every page of the site
- c) No: reviews of itself, even via a widget, are ineligible
- d) No, because only products can ever have ratings

**Answer:** c
**Explanation:** Self-serving reviews on LocalBusiness or Organization markup, including those "through an embedded third-party widget (for example, Google Business reviews …)", are "ineligible for star review feature".
**Hint:** Whose reviews, on whose site?

### Q6. Tomás's markup passes the SMV, but the RRT says "No items detected". What's the most likely reason? *(O2 · scenario)*
- a) The type isn't a Google rich result, though valid
- b) The SMV must be wrong, so the markup is broken
- c) The RRT only works on desktop pages, not mobile
- d) Google has applied a manual action to the site

**Answer:** a
**Explanation:** SMV checks schema.org validity; the RRT shows Google rich-result types. Valid schema.org can still have no Google feature.
**Hint:** Two different questions.

### Q7. Spot the error. An "AI SEO" plugin adds FAQPage markup with six Q&As that aren't on the page, "to help us appear in AI Overviews". What's wrong? *(O1 · spot-the-error)*
- a) FAQPage markup must have at least ten questions
- b) Nothing; AI Overviews read hidden FAQ markup first
- c) The answers must be marked up in Microdata instead
- d) Hidden content, a retired feature, not needed for AI

**Answer:** d
**Explanation:** "Don't mark up content that is not visible"; FAQ rich results ended in May 2026; and "Structured data isn't required for generative AI search".
**Hint:** Three problems.

### Q8. Spot the error. *(review: m12-l04)* A brief says: "Steps 4–9 load after a 'Show more' click. Google runs JavaScript, so it indexes them." What's wrong?
- a) Nothing; Google renders and clicks every button
- b) Google doesn't click; load the steps without a tap
- c) Steps must be in a PDF for Google to index them
- d) Only the first three steps of any guide are indexed

**Answer:** b
**Explanation:** "Google Search does not interact with your page". Put the content in the HTML, or load it when it's visible in the viewport.
**Hint:** No clicks.
