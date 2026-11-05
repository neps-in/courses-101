# M02.L08 Quiz — CSS Fundamentals: Selectors, Properties & Ways to Add CSS

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-06 against MDN (selectors, specificity, handling conflicts, getting started), Chrome for Developers (DevTools CSS reference) and Google Search Central (robots.txt, SEO Starter Guide). Q8's `<cite>` rule was checked for Lesson 2.7.

### Q1. In `h1 { color: brown; }`, which part is the property? *(O1 · recall)*
- a) `color`, the thing that you're changing on the heading
- b) `brown`, the setting that's being given to the heading
- c) `h1`, the pattern that picks out which elements to style
- d) `{ }`, the curly braces that hold all of the declarations

**Answer:** a
**Explanation:** The property comes before the colon, and the value comes after it. `h1` is the selector, and `{ }` makes the declaration block.
**Hint:** Which part comes just before the colon?

### Q2. Which CSS selector matches `<p class="tip">`? *(O1 · recall)*
- a) `#tip`, because the hash is what picks out a class name
- b) `tip`, because CSS uses the class name with no marker
- c) `.tip`, because a dot in CSS is how you select a class
- d) `class=tip`, because CSS copies the attribute from HTML

**Answer:** c
**Explanation:** A dot selects a class, and a hash selects an ID. A bare name like `tip` would look for a `<tip>` element.
**Hint:** Which character did you use in `style.css` in Part A?

### Q3. Two rules set the colour of the same paragraph: `p { color: blue; }` and `.tip { color: green; }`. The `p` rule comes last. What colour is it? *(O1 · recall)*
- a) Blue, because the rule that comes last in the file always wins
- b) Green, because a class selector beats an element selector
- c) A mix of the two, because the browser blends both of the values
- d) Neither, because the browser ignores rules that are in conflict

**Answer:** b
**Explanation:** Source order only matters in a tie. MDN says: "Source order only matters when the specificity weight of the rules is the same." A class outweighs an element.
**Hint:** What did you see in step 2 of Part B?

### Q4. Kavya wants all 20 pages of her site to use the same heading colour, and she can edit the site's files. Where should the CSS go? *(O2 · scenario)*
- a) In a `style` attribute on each of the headings, on every page
- b) In a `<style>` block in the `<head>` of each of the 20 pages
- c) In a new `<div>` around each heading, with its own colour set
- d) In one external stylesheet, linked from all of the pages

**Answer:** d
**Explanation:** MDN says you can "link a single CSS file to multiple web pages". One edit then changes all 20. The other options mean 20 or more edits.
**Hint:** How many edits would a future colour change take?

### Q5. Amara's client uses a hosted editor that blocks external CSS files, but has a custom CSS box. Amara needs to style one landing page. What's the best choice? *(O2 · scenario)*
- a) Add `style` attributes to each of the page's elements in turn
- b) Put a rule in the CSS box, using a class on that page's content
- c) Ask the client to move to a new platform before making the change
- d) Use `!important` on every rule, so that the theme can't override it

**Answer:** b
**Explanation:** When you can't edit an external file, use the next best place, which is the platform's CSS box or a `<style>` element. Inline is the last resort, and `!important` is a warning sign.
**Hint:** Follow the flowchart from "Can you edit the external stylesheet?"

### Q6. Tomás uses DevTools to change a price to 16px on his live site, and it looks great. What's true now? *(O3 · scenario)*
- a) Only his browser shows it, and a reload will remove the change
- b) All visitors now see 16px, until the next time the theme updates
- c) Google will see the new size the next time that it crawls the page
- d) The change is saved in his stylesheet, but only for his own login

**Answer:** a
**Explanation:** DevTools changes the page in his browser, not the files on the server. To keep the fix, he needs to add it to the real stylesheet or brief his developer.
**Hint:** What happened in step 7 of Part D?

### Q7. Spot the error: "Our developer blocked `/assets/css/` in robots.txt to save crawl time. CSS is only decoration, so Google doesn't need it." *(O3 · spot the error)*
- a) robots.txt can block HTML pages, but it can't block any CSS files
- b) CSS should be blocked, but only after the pages have been indexed
- c) Blocking is fine, as long as all of the CSS is in `<style>` blocks
- d) If blocking makes pages harder to understand, Google says not to

**Answer:** d
**Explanation:** Google says that if losing these files makes a page "harder for Google's crawler to understand", then "don't block them". Its Starter Guide says Google needs "the same resources as the user's browser".
**Hint:** What does Google need in order to see a page as a visitor does?

### Q8. Spot the error: "I credited the quote with `<cite>Meera Nair</cite>` below my `<blockquote>`." *(spot the error · review: m02-l07)*
- a) The credit has to go inside the `<blockquote>` to be allowed
- b) A credit can only be given by using the `cite` attribute instead
- c) `<cite>` is for titles of works, so it shouldn't wrap a name
- d) `<cite>` must go in the `<head>`, along with the page's metadata

**Answer:** c
**Explanation:** As you saw in Lesson 2.7, `<cite>` marks the title of a work, and the HTML Standard says it must not be used for people's names. The position below the quote is fine.
**Hint:** Is a person a title of a work?
