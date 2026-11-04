# M02.L03 Quiz — HTML Fundamentals: Elements, Tags, Attributes & Page Structure

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-04 against MDN (basic HTML syntax, `lang`) and Google Search Central (title links, snippets, supported meta tags, valid page metadata).

### Q1. In `<a href="/shop">Our beans</a>`, which part is the attribute? *(O1 · recall)*
- a) `<a` is the attribute, because it comes first in the opening tag
- b) `href="/shop"` is the attribute, as it gives extra information
- c) `Our beans` is the attribute, because it's what people read
- d) `</a>` is the attribute, because it ends the whole of the link

**Answer:** b
**Explanation:** An attribute gives extra information about an element, written as `name="value"` in the opening tag. `Our beans` is the content, and `</a>` is the closing tag.
**Hint:** Look for the `name="value"` pattern.

### Q2. Why does `<meta charset="utf-8">` have no closing tag? *(O1 · recall)*
- a) The closing tag is added later by the web server automatically
- b) Closing tags are optional for every element when you write HTML
- c) Elements in the head never use closing tags, including `<title>`
- d) It's a void element, so it can't contain any content of its own

**Answer:** d
**Explanation:** Void elements "cannot contain other HTML content", so they have a single tag. `<title>` is in the head and does have a closing tag, so option c is wrong.
**Hint:** Is there anything between an opening and closing tag here?

### Q3. Which sentence describes the head and body of a page? *(O2 · recall)*
- a) The head holds information about the page; the body holds what people see
- b) The head holds the top part of the design; the body holds the bottom part
- c) The head holds what Google reads; the body holds what Google ignores
- d) The head holds the visible heading; the body holds only the paragraphs

**Answer:** a
**Explanation:** The head is for information about the page that isn't part of its visible content. The body holds everything displayed, and Google reads that too.
**Hint:** Think of the parcel: the shipping label and the box's contents.

### Q4. Kavya's source shows `<title>Home</title>` on every page of her site. What's the best next step? *(O3 · scenario)*
- a) Add `<meta name="keywords">` to each page, so Google can tell them apart
- b) Leave the titles as they are, because Google writes all title links itself
- c) Give each page a clear, unique title that describes what's on that page
- d) Delete the titles, so that Google has to use each page's meta description

**Answer:** c
**Explanation:** Google says to avoid vague titles such as "Home", and a good title "is unique to the page". Google automates title links, but your `<title>` is one of its sources, so good titles help.
**Hint:** What does Google say about vague descriptors?

### Q5. Tomás finds `<img src="pixel.gif" alt="">` in his head, above the `<title>` and a `noindex` tag. The page looks normal. What should he do? *(O2 · scenario)*
- a) Move the image out of the head, as Google stops reading at that element
- b) Leave it alone, because a page that looks normal has no errors to worry about
- c) Move the `<title>` into the body, so that it sits next to the other content
- d) Add a second copy of the `noindex` tag, in case Google missed the first one

**Answer:** a
**Explanation:** `<img>` isn't allowed in the head. Google "assumes the end of the `<head>` element" there, so it can miss the elements after it. Browsers repair the page silently, so its looks prove nothing.
**Hint:** Which elements are allowed in the head?

### Q6. Amara writes a good meta description, but Google shows a different snippet for some searches. What's the right conclusion? *(O3 · scenario)*
- a) The description is broken, and the page should be republished at once
- b) Google has penalised the page, so she should check for a manual action
- c) The description is too short, because Google needs at least 300 characters
- d) This is normal, as snippets come mainly from the content of the page itself

**Answer:** d
**Explanation:** Google says "snippets are primarily created from the page content itself", and it only sometimes uses the meta description. It's not a sign of a problem.
**Hint:** Does Google always use the meta description?

### Q7. Spot the error: "Add `<meta name="keywords">` to every page. It's in the head, so Google reads it first, and it helps you rank." *(O3 · spot the error)*
- a) Meta tags should be placed in the body of the page, not in the head
- b) Keyword tags help, but only when there are more than ten keywords in them
- c) Google doesn't use the keywords tag, for indexing or for ranking
- d) The tag only works if the page also has a `lang` attribute on `<html>`

**Answer:** c
**Explanation:** Google says the tag "is not used by Google Search, and it has no effect on indexing and ranking at all." Meta tags do belong in the head, so option a is wrong.
**Hint:** Check the table of claims in this lesson.

### Q8. Spot the error: "My site is on Wix, so I can't edit its HTML head, which means I can't change my page titles." *(spot the error · review: m02-l02)*
- a) Wix sites have no HTML head, so they don't use title elements at all
- b) Platforms write the code from settings, such as Wix's SEO basics panel
- c) Titles can only be changed on Wix by moving the site over to WordPress
- d) Google sets the title on Wix sites, so the owner has no need to do it

**Answer:** b
**Explanation:** As you saw in Lesson 2.2, a CMS often gives you a setting instead of code access. You fill in the field, and the platform writes the `<title>` for you.
**Hint:** In Lesson 2.2's fix order, what do you look for first?
