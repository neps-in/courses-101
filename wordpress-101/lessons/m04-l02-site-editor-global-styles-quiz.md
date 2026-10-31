# M04.L02 Quiz — The Site Editor: templates, template parts and global styles

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error · includes 1 spaced-review question from M02.L02.
> Labels checked against WordPress 7.0 and Twenty Twenty-Five on 2026-10-31.

### Q1. You want every heading on your site to use your brand font. Where is the best place to set it?
- a) In each post, by selecting each Heading block and changing its font
- b) In **Styles → Typography**, under **Elements → Headings**
- c) In the **Single Posts** template, by styling its Title block
- d) In the **Header** template part, so it applies to the whole site

**Answer:** b
**Explanation:** Global styles apply to every heading on every page, and a rebrand is one change. Styling blocks one by one creates overrides; styling the template's Title only affects post titles; the header part only contains the header.
**Hint:** Which tool controls looks "everywhere"?

### Q2. What is a **template part**?
- a) A single post that has been saved as a draft layout
- b) A block style that only applies to one template
- c) A shared block area, such as the header, used inside templates
- d) A theme file you must edit with code to change

**Answer:** c
**Explanation:** Template parts such as **Header** and **Footer** are reused by many templates. Edit one once and every template that includes it updates. You edit them visually in the Site Editor, under **Patterns → Template parts**.
**Hint:** Think of a magazine's masthead.

### Q3. Nour customised the **Single Posts** template, and now every post is missing its title. She chooses **Reset** from the template's ⋮ menu. What happens?
- a) Only her most recent change is undone; earlier edits stay
- b) WordPress reinstalls the theme from the theme directory
- c) The template is deleted and posts fall back to the Index template
- d) Her copy is removed and the theme's original template returns

**Answer:** d
**Explanation:** Your edits are saved as your own copy; **Reset** ("Reset to default and clear all customizations?") deletes it, so the theme's original is used again. It removes **all** her changes to that template, not just the last one, so she'll need to redo the good ones.
**Hint:** Reset is all-or-nothing.

### Q4. Tomás wants a newsletter sign-up box at the end of every blog post, including future ones. What should he do?
- a) Paste the sign-up form at the bottom of each post as he writes it
- b) Add the sign-up form below the **Content** block in **Single Posts**
- c) Add the sign-up form to the **Footer** template part only
- d) Add the sign-up box as a new colour in **Styles → Colors**

**Answer:** b
**Explanation:** The **Single Posts** template wraps every post, so a block added below **Content** appears at the end of every post, including future ones. Pasting it into posts means editing them all later. The footer would also show it on pages, the home page and archives, not just at the end of posts.
**Hint:** Which layer controls "every post of one type"?

### Q5. Mei picks terracotta `#E07A5F` for links on a white background. A contrast checker shows **2.95:1**. What should she do?
- a) Keep it; any ratio above 2:1 passes WCAG AA for links
- b) Keep it for links but make the link text bold so it passes
- c) Use a darker shade (e.g. `#B5442A`, 5.5:1) for link text
- d) Switch the site to the dark style variation to avoid the check

**Answer:** c
**Explanation:** Normal-size text, including links, needs at least **4.5:1** under WCAG 2.2 AA. A darker shade of the same colour keeps the brand and passes. Bold text only gets the 3:1 rule when it's large (about 19 px bold or bigger), and changing variation doesn't remove the need to check.
**Hint:** What's the minimum for body-size text?

### Q6. Spot the error: Leila's rebrand plan says:
> 1. In **Styles → Colors → Palette**, change the theme's **Base** and **Contrast** colours to my new brand colours.
> 2. Install my two brand fonts from **Manage fonts**, then set them under **Typography → Elements**.
> 3. Change the header in the **Single Posts** template; the other templates' headers will stay as they are.
> 4. Save, then check a post and a page on desktop and mobile.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** The header is a shared template part. Editing it from **Single Posts** changes it on every template that uses it, not just single posts. If she truly needs a different header for posts, she'd pick another header part for that template.
**Hint:** Is the header owned by one template?

### Q7. (review: m02-l02) Template parts and synced patterns both update everywhere when you edit them. When should you use a **synced pattern** instead of a template part?
- a) When the block group lives inside post or page content, like a CTA
- b) When the block group must appear in the header on every page
- c) When you want each copy to be edited separately without linking
- d) When you need the block group to change your site's global fonts

**Answer:** a
**Explanation:** Synced patterns are for reusable content you place inside posts and pages (a CTA, an author box you add by hand). Template parts are for site structure inside templates (header, footer). Copies edited separately are *unsynced* patterns, and fonts belong in Styles.
**Hint:** Content inside posts vs structure around them.
