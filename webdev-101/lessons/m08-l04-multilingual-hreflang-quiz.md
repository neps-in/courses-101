# M08.L04 Quiz — Going Global: Multilingual & Multi-Region Sites

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-03 against Google Search Central (localized versions; multi-regional and multilingual sites), WCAG 2.2 and MDN `Intl`; `Intl` outputs produced with Node 24.

### Q1. Which `hreflang` value correctly means "English for the United Kingdom"? *(O2 · recall)*
- a) `en-UK`, using the common short name for the United Kingdom
- b) `UK`, since the region code alone is enough for Google to use
- c) `en-GB`, with GB as the ISO 3166-1 Alpha 2 region code there
- d) `gb-en`, with the country code first and the language second

**Answer:** c
**Explanation:** `hreflang` uses an ISO 639-1 language code, optionally followed by an ISO 3166-1 Alpha 2 region code. The UK's code is `GB`; Google says `UK` has no effect, a region alone isn't valid, and the language must come first.
**Hint:** Language first, then the official two-letter country code.

### Q2. What does Google say it uses to detect the language of a page? *(O1 · recall)*
- a) The visible content of the page, not `lang` attributes or the URL
- b) The `<html lang>` attribute, because that's what it's designed for
- c) The `hreflang` links in the page's `<head>`, read on each crawl
- d) The country of the server's IP address where the page is hosted

**Answer:** a
**Explanation:** Google's international guidance says it determines language from visible content and doesn't use code-level information such as `lang` attributes or the URL. `lang` still matters for screen readers and browsers (WCAG 3.1.1), and `hreflang` tells Google which other versions exist.
**Hint:** What would a human reader use?

### Q3. Which rule about `hreflang` annotations does Google state? *(O2 · recall)*
- a) Only the main-language page needs `hreflang` links to the others
- b) Relative URLs such as `/hi/` are fine inside the `hreflang` links
- c) You must add them in the head, HTTP headers and sitemap together
- d) Each version lists itself and all others, or tags are ignored

**Answer:** d
**Explanation:** Annotations must be reciprocal and self-referencing; if two pages don't point to each other, Google ignores the tags. URLs must be fully qualified, and the three methods are equivalent, so one is enough.
**Hint:** Think "return links".

### Q4. Priya wants Indian visitors to see the Hindi page. Her developer suggests redirecting every Indian IP address to `/hi/`. What should she do instead? *(O1 · scenario)*
- a) Redirect by IP, but only for visitors arriving from search results
- b) Offer a visible language switcher so people choose their version
- c) Redirect by the browser's language setting, which is always accurate
- d) Show both languages side by side on one page for every visitor

**Answer:** b
**Explanation:** Google advises against automatic redirects between language versions and against using IP analysis to adapt content: they trap people (an English speaker in Delhi) and can hide versions from crawlers, which usually come from the US. A visible switcher (and at most a suggestion banner) lets people choose. Google also advises one language per page rather than side-by-side text.
**Hint:** Who should decide which language a person reads?

### Q5. Kofi's Spanish page shows `$1,299.00` to visitors in Mexico, typed by hand, while the English page uses US dollars. Prices should be in Mexican pesos, formatted locally. What's the best approach? *(O3 · scenario)*
- a) Keep the dollar sign, because Mexican visitors will understand it
- b) Ask an AI to rewrite each price once and paste the new text into the page
- c) Use `Intl.NumberFormat('es-MX', { style: 'currency', currency: 'MXN' })`
- d) Rely on the browser's translate feature, which also converts the currencies

**Answer:** c
**Explanation:** `Intl.NumberFormat` formats numbers and currency for a locale from one plain number (with the real peso price, which is a business decision, not a conversion the code makes). Pasting AI-written prices drifts from the source of truth, browser translation doesn't change currencies, and a `$` that means US dollars misleads.
**Hint:** Which built-in tool formats money per locale?

### Q6. Spot the error. This is the `<head>` of Nila Coffee's Hindi page. What's wrong? *(O2 · spot-the-error)*
```html
<html lang="hi">
<head>
  <link rel="canonical" href="https://nilacoffee.example/">
  <link rel="alternate" hreflang="en" href="https://nilacoffee.example/">
  <link rel="alternate" hreflang="hi" href="https://nilacoffee.example/hi/">
  <link rel="alternate" hreflang="x-default" href="https://nilacoffee.example/">
</head>
```
- a) The canonical points to the English page, not the Hindi one
- b) `x-default` must never point to the same URL as another version
- c) `lang="hi"` should be `lang="hi-HI"` to include the region too
- d) The Hindi page shouldn't list itself in its own `hreflang` set

**Answer:** a
**Explanation:** Each language version's canonical should point to itself; a Hindi page canonical to the English page asks search engines to treat the English page as the real one, so the Hindi page can drop out. `x-default` may point to the main version, `hi` alone is valid (`HI` isn't a country code), and self-reference is required.
**Hint:** Which page does this one claim is "the real one"?

### Q7. *(review: m08-l03)* In the Eleventy setup, why generate `hreflang` from `translationKey` in the layout rather than typing the links into each page? *(O2 of M08.L03 · recall)*
- a) Eleventy refuses to build pages that contain hand-typed link tags
- b) Search engines only read `hreflang` links that a generator wrote
- c) The layout makes those links load faster than links typed in each page
- d) One template prints the full set on every version, so it can't drift

**Answer:** d
**Explanation:** Shared logic in the layout is the point of Lesson 8.3: every page with the same key lists all versions, itself included, so the set stays reciprocal when you add or rename a page. Eleventy builds hand-typed tags fine, search engines don't care who wrote them, and speed isn't affected.
**Hint:** Repeated → one place.
