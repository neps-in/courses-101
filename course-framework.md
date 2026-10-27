# Course framework

## Structure
Course → Modules (4–9) → Lessons (3–6 per module) → Quiz per lesson + capstone per module.

## Lesson template (`lessons/mNN-lNN-<slug>.md`)
```markdown
# Mxx.Lyy — <Lesson title>
> After this lesson you can <one-line promise>.

**Time:** ~<n> min · **Level:** beginner | intermediate | advanced · **Prereqs:** <lessons>

## Learning objectives
1. <measurable verb: build / explain / compare / configure>
2. ...
3. ...

## Why it matters
<real-world scenario, one paragraph>

## Core concept
<plain explanation → analogy → precise definition>

## How it works
<Mermaid flowchart in the house palette>

## Hands-on walkthrough
<numbered steps; code, commands or tool screens; expected output after each key step>

## Common mistakes
- ...

## Exercise
**Task:** ...
**Expected outcome:** ...
**Stretch goal:** ...

## Key takeaways
- (max 5)

## Further reading
- <primary sources only: Google Search Central, schema.org, official docs, papers>
```

## Quiz template (`lessons/mNN-lNN-<slug>-quiz.md`)
- 5–8 multiple-choice questions, 1 correct + 3 plausible distractors.
- Mix: ~40% recall, ~40% scenario/application, ~20% "spot the error".
- Each question: options a–d, answer, explanation, hint.

```markdown
### Q1. <question>
- a) ...
- b) ...
- c) ...
- d) ...

**Answer:** b
**Explanation:** ...
**Hint:** ...
```

## Module capstone (`capstones/mNN-capstone.md`)
- One practical project using the module's skills.
- Rubric: 4–5 criteria × 4 levels (Excellent / Good / Needs work / Missing).

## Status values (progress.md)
`todo` → `draft` → `reviewed` → `published`

## Quality bar
- Every claim about ranking/AI-search behaviour either cites a primary source or is labelled as observed practice.
- Every hands-on step is reproducible with free or common tools; note paid alternatives.
- No filler intros; lessons should be readable in one sitting (10–25 min).
