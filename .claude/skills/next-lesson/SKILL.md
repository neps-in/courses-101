---
name: next-lesson
description: Draft the next todo lesson and its quiz for the active course, following course-framework.md, then update progress.md and commit. Use when asked for the next lesson, to continue the course, or via /next-lesson.
---

# Draft the next lesson

1. Read `progress.md`. Find the first row with status `todo` in the active course.
   - If that row is a module still "not yet planned", run the `plan-module` skill for it first, then continue.
   - If the row is a `Capstone`, write `<course>/capstones/mNN-capstone.md` with the capstone
     format from `course-framework.md` instead of a lesson.
2. Read `<course>/course-outline.md`, `<course>/syllabus.md` (objectives for this lesson) and
   `course-framework.md` (templates). Skim the previous lesson so this one builds on it.
3. Research anything that changes over time (Google guidance, AI search behaviour, tool
   features, APIs) with web search and prefer primary sources. Note the check date in Further reading.
4. Write the lesson to the file path in `progress.md` using the lesson template exactly:
   objectives, why it matters, core concept, Mermaid flowchart in the house palette,
   hands-on walkthrough with expected outputs, common mistakes, exercise, takeaways, further reading.
5. Write the quiz to `...-quiz.md`: 5–8 questions, ~40% recall / ~40% scenario / ~20% spot-the-error,
   each with answer, explanation and hint.
   Then run `python3 tools/mermaid_to_image.py <lesson.md>` so each Mermaid block gets a WebP image
   below it (see CLAUDE.md).
6. Self-check against the framework's quality bar; fix gaps before saving.
7. Update the row in `progress.md` to `draft` with today's date, add a log line.
8. `git add` the new files and commit: `<course>: mNN-lNN draft`.
9. If the Google Drive MCP is connected, upload both files to `Neps-in-blog/<Course name>`.
10. Reply with a 3-line summary and suggest `/review-lesson <file>`.

When running unattended (scheduled), do not ask questions: make the reasonable choice and
note it at the top of the lesson in a `> Note:` line.
