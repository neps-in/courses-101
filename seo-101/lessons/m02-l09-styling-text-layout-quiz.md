# M02.L09 Quiz — Styling Text & Layout: Fonts, Colours, Spacing and the Box Model

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-06 against MDN (`line-height`, the box model), W3C (Understanding SC 1.4.3), Google Search Central (spam policies, mobile-first indexing) and WebAIM (screen reader content). Q8's specificity order was checked for Lesson 2.8.

### Q1. What's the minimum contrast ratio for normal text at WCAG level AA? *(O1 · recall)*
- a) 2:1, which is what most brand colours are designed to reach
- b) 3:1, which applies to every piece of text on the whole page
- c) 7:1, which is the level that all websites are required to hit
- d) 4.5:1, with a lower minimum of 3:1 allowed for large text

**Answer:** d
**Explanation:** WCAG level AA asks for "at least 4.5:1" for normal text and 3:1 for large text. 7:1 is the stricter AAA level.
**Hint:** What did the checker test the tip against in Part B?

### Q2. In the box model, what's padding? *(O2 · recall)*
- a) The space between this box and the boxes next to it on the page
- b) The space inside the border, between it and the box's content
- c) The line that's drawn around the outside of the box's content
- d) The total width of the box, once all of its layers are added up

**Answer:** b
**Explanation:** Padding sits around the content, inside the border, and the background colour shows through it. The space between boxes is margin, and the line is the border.
**Hint:** Think of the card mount inside a picture frame.

### Q3. Which of these does Google say doesn't violate its hidden text policy? *(O3 · recall)*
- a) Accordion content that visitors can open to read more
- b) White keywords on a white background, placed in a site's footer
- c) A list of city names with its font size set to 0 by a stylesheet
- d) Keywords moved off-screen with CSS for the search engines to read

**Answer:** a
**Explanation:** Google says accordions and tabs "don't violate our policies". The other three are its own examples of hidden text abuse when they're done to manipulate search engines.
**Hint:** Which one is there to help the visitor?

### Q4. Amara's client wants pale grey body text, `#999999` on white, because it "looks elegant". What should she do? *(O1 · scenario)*
- a) Agree to it, as Google doesn't name contrast on its page experience page
- b) Make the grey text bold, as bold body text doesn't need to be measured
- c) Show that it's about 2.85:1, and suggest a darker grey that reaches 4.5:1
- d) Keep the colour, and add a note at the top of the page about the contrast

**Answer:** c
**Explanation:** `#999999` on white fails the 4.5:1 minimum. Measuring it gives the client a fact to discuss, and a darker grey such as `#767676` still looks soft and passes.
**Hint:** What do you do before judging a colour?

### Q5. Tomás's product panel has a coloured background, and its text touches the edges. Which change fixes it? *(O2 · scenario)*
- a) Add `padding` to the panel, to make space inside its background
- b) Add `margin` to the panel, to move the text away from the edges
- c) Add `<br>` tags before and after the text inside the coloured panel
- d) Add `line-height` to the panel, to spread out the edges of the text

**Answer:** a
**Explanation:** Padding adds space inside a box, and the background colour shows through it. Margin only adds space outside the box, so the text would still touch the edges.
**Hint:** Is the missing space inside the box or outside it?

### Q6. Kavya's audit finds "(opens in a new tab)" in a screen reader only class on her links. A colleague says it's hidden text and must go. What's right? *(O3 · scenario)*
- a) It must go, as all text moved off-screen breaks Google's policies
- b) It can stay, as long as it's also repeated in the page's meta tags
- c) It should become white text, as that's safer than moving it off-screen
- d) It can stay, as it's meant to help people using screen readers

**Answer:** d
**Explanation:** Google lists text that's "intended to improve the experience for those using screen readers" as fine. Off-screen text only breaks the policy when it's solely there to manipulate search engines.
**Hint:** Who's the text for?

### Q7. Spot the error: "We load the specifications only when a visitor clicks the tab, so the page stays light, and Google will read them the same way." *(O3 · spot the error)*
- a) Tabs aren't allowed, because they're on Google's hidden text list
- b) Google won't load content on a click, so keep it in the HTML
- c) Specifications can't be indexed unless they're on a separate page
- d) Google only reads tab content when the page has a `<details>` tag

**Answer:** b
**Explanation:** Tabs are fine, but Google says it "won't load content that requires user interactions". Content that's in the HTML and only visually closed is a different case.
**Hint:** Does Google click on things?

### Q8. Spot the error: "My `.price` rule sets the colour, but `#main p` still wins, so class selectors must not work on paragraphs." *(spot the error · review: m02-l08)*
- a) Classes only work on `<div>` elements, so wrap the price in one
- b) Only the last rule in a stylesheet can ever set a colour on a page
- c) An ID selector outweighs a class, so `#main p` wins the conflict
- d) `p` is in the rule, so it counts as an inline style on the element

**Answer:** c
**Explanation:** As you saw in Lesson 2.8, an ID beats a class, whatever the order. The class works fine. It's just outweighed here.
**Hint:** Which is stronger, an ID or a class?
