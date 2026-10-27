---
name: review-lesson
description: Critically review a drafted lesson and quiz for accuracy, depth, currency and template compliance, then apply fixes and mark it reviewed. Use when asked to review, critique or polish a lesson, or via /review-lesson <file>.
---

# Review a lesson

Argument: lesson file path. If missing, review the most recent `draft` row in `progress.md`.

1. Read the lesson, its quiz, `course-framework.md` and the lesson's objectives in `syllabus.md`.
2. Check and list findings under these headings (be blunt):
   - **Accuracy:** wrong or unsupported claims; verify time-sensitive claims with web search.
   - **Currency:** guidance that may be outdated (SEO / AI search changes fast).
   - **Depth:** does every objective get taught and practised? Missing steps in the walkthrough?
   - **Template:** missing sections, flowchart not in house palette, quiz mix off.
   - **Quiz quality:** ambiguous questions, weak distractors, answers given away.
   - **Readability:** filler, jargon without definition, too long (>25 min).
3. Show the findings to me (or, when unattended, apply them directly).
4. Apply the fixes to the lesson and quiz files.
5. Set the row in `progress.md` to `reviewed` with today's date, add a log line, commit:
   `<course>: mNN-lNN reviewed`.
