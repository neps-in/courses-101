# Course framework

## Structure
Course → Modules (4–9) → Lessons (3–6 per module) → Quiz per lesson + capstone per module.

## Lesson template (`lessons/mNN-lNN-<slug>.md`)
```markdown
# Mxx.Lyy — <Lesson title>
> After this lesson you can <one-line promise>.

**Time:** ~<n> min reading + ~<n> min exercise · **Level:** beginner | intermediate | advanced · **Prereqs:** <lessons>
**Verified against:** <product / tool versions> on YYYY-MM-DD

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

## When to use / when not to
<the decision this lesson helps make, with one trade-off>

## Use AI for this
<one example prompt, what AI does well here, where it gets it wrong, and how to check its output>

## Common mistakes
- ...

## Troubleshooting
| Symptom | Likely cause | Fix |
|---|---|---|

## Exercise
**Task:** ...
**Expected outcome:** ...
**Stretch goal:** ...

## Key takeaways
- (max 5)

## Teach it back
<prompt: "Explain ___ to a friend in 3 sentences.">

## Glossary terms added
- <term> — added to `<course>/glossary.md`

## Further reading
- <primary sources only: Google Search Central, schema.org, official docs, papers>
```

## Quiz template (`lessons/mNN-lNN-<slug>-quiz.md`)
- 5–8 multiple-choice questions, 1 correct + 3 plausible distractors.
- Mix: ~40% recall, ~40% scenario/application, ~20% "spot the error".
- Each question: options a–d, answer, explanation, hint.
- Include 1–2 spaced-review questions from earlier lessons (mark them `(review: mNN-lNN)`).

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
- One practical project using the module's skills, adding a piece of the course's running example.
- Include one break-it-and-fix-it task per module (here or in a lesson exercise).
- End the module with a one-page cheat sheet: `cheatsheets/mNN-<slug>.md`.
- Rubric: 4–5 criteria × 4 levels (Excellent / Good / Needs work / Missing).

## Status values (progress.md)
`todo` → `draft` → `reviewed` → `published`

## Quality bar
- Every claim about ranking/AI-search behaviour either cites a primary source or is labelled as observed practice.
- Every hands-on step is reproducible with free or common tools; note paid alternatives.
- No filler intros; lessons should be readable in one sitting (10–25 min).
