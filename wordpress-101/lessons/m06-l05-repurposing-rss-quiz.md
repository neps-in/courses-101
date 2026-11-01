# M06.L05 Quiz — Repurposing workflow: one post into newsletter, social and video

> 7 questions · 3 recall, 2 scenario, 1 spot-the-error, 1 spaced-review question from M06.L02.
> Checked against WordPress 7.0, provider help pages, YouTube Help and Google Search Central on 2026-11-01.

### Q1. What's the main difference between **repurposing** and copy-pasting a post everywhere?
- a) Repurposing only works for video creators
- b) Repurposing reshapes the same key points for each format's job
- c) Repurposing means rewriting the post from scratch each time
- d) Repurposing means posting the same link on more platforms

**Answer:** b
**Explanation:** You pull 3–5 key points once, then shape them: a personal newsletter, one-idea social posts, a 30–60 second video. Each stands on its own and links back to the full post. Copy-pasting the same text ignores how each platform is read.
**Hint:** Same chicken, different meals.

### Q2. Which URL is the RSS feed for just your *Recipes* category (Post name permalinks)?
- a) `yoursite.com/recipes.xml`
- b) `yoursite.com/feed/recipes/`
- c) `yoursite.com/category/recipes/feed/`
- d) `yoursite.com/wp-admin/feed/`

**Answer:** c
**Explanation:** WordPress adds `/feed/` to archive URLs: `/feed/` for the whole site, `/category/<slug>/feed/` for a category, `/tag/<slug>/feed/` for a tag. A category feed lets RSS-to-email send only some posts.
**Hint:** Start from the category archive's address.

### Q3. According to Google's current guidance, what's the most effective way to stop a full copy of your post on another site from competing with your original?
- a) Ask the other site to add `rel="canonical"` pointing to you
- b) Ask the other site to block indexing (noindex) of its copy
- c) Block the copy in your own robots.txt
- d) Post it on more sites so yours looks more popular

**Answer:** b
**Explanation:** Google's canonicalization troubleshooting page says canonical isn't recommended for syndication partners, because copies are often very different pages; the most effective solution is for partners to block indexing. Your robots.txt can't control another site. Simplest of all: share a summary and link back.
**Hint:** Google changed its advice on canonical for syndication in 2023.

### Q4. Jo publishes recipes and travel posts, but her newsletter is only about recipes. She wants new recipe posts emailed automatically. What should she do?
- a) Point her provider's RSS-to-email at `yoursite.com/category/recipes/feed/`
- b) Point it at `yoursite.com/feed/` and delete the travel posts
- c) Turn the feed setting to Full text
- d) Copy each recipe into the newsletter by hand forever

**Answer:** a
**Explanation:** A category feed contains only that category's posts, so travel posts never reach recipe subscribers. Start in review-first mode (or a weekly digest) so she can add a personal line.
**Hint:** Which feed contains only recipes?

### Q5. Ben asks AI to turn his post into social posts. One draft says *"78% of home cooks say this changed their life!"* The number isn't in his post. What should he do?
- a) Keep it; AI usually knows the statistics
- b) Add "according to studies" to make it safer
- c) Remove it, or verify it and cite it in the post first
- d) Use it only on platforms without fact-checking

**Answer:** c
**Explanation:** AI often invents numbers. Derivatives should only use facts from your repurposing sheet; if a claim is worth making, verify it, cite it in the post, then reuse it.
**Hint:** Where should every fact in a derivative come from?

### Q6. Spot the error: Ava's repurposing checklist says:
> 1. Fill in a repurposing sheet: key points, one story, one sourced fact.
> 2. Newsletter: personal opening, one key idea, link to the post.
> 3. Social: paste the full post text on every platform, so nothing is lost.
> 4. Video: 45-second script with hook, one point and call to action.

Which step is wrong?
- a) Step 1
- b) Step 2
- c) Step 3
- d) Step 4

**Answer:** c
**Explanation:** Social posts should carry one idea each (a tip, a story, a question) and link back. Pasting the whole post ignores how people scroll, and it buries your key point. Each format has its own job.
**Hint:** How many ideas fit in one social post?

### Q7. (review: m06-l02) Why does the newsletter issue open with 2–3 personal sentences instead of the post's first paragraph?
- a) Email providers block copied text
- b) Subscribers already trust you; they want your take, not a repeat
- c) Personal sentences avoid the need for a link
- d) Google indexes newsletters and penalises duplicates

**Answer:** b
**Explanation:** Your email list is the audience you own (M06.L02). Searchers get the full answer on the post; subscribers get something extra: why you wrote it and what surprised you. The link still goes to the post.
**Hint:** What does a subscriber get that a searcher doesn't?
