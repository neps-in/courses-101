---
name: plan-module
description: Expand one module of the active course outline into 3–6 concrete lessons in syllabus.md and progress.md. Use when asked to plan, break down or syllabus a module, or via /plan-module <N>.
---

# Plan a module

Argument: module number N (e.g. `/plan-module 1`). If missing, plan the first module whose row in `progress.md` still says "not yet planned".

1. Read `progress.md` to find the active course, then `<course>/course-outline.md` and `course-framework.md`.
2. Read `<course>/syllabus.md` if it exists so lessons don't overlap with planned modules.
3. Split module N's topics into 3–6 lessons. Each lesson gets:
   - number and title (`M01.L01 — How search engines crawl, index and rank`)
   - slug for the file name
   - 3 learning objectives (measurable verbs)
   - prerequisites (earlier lessons)
   - hands-on idea and estimated time
   Make the module's "Hands-on" bullet the module capstone, not a lesson.
4. Append or update the module section in `<course>/syllabus.md`.
5. In `progress.md`, replace the module's "not yet planned" row with one `todo` row per lesson
   (file path `<course>/lessons/mNN-lNN-<slug>.md`) plus a `Capstone` row.
6. Add an image placeholder for the module's lesson sequence to the syllabus section: alt text
   plus an image prompt listing the lessons in order, using the palette in CLAUDE.md (no Mermaid).
7. Add a log line to `progress.md`, then commit: `git commit -am "<course>: plan M<NN>"` (git add new files first).
8. Reply with the lesson list and ask whether to start `/next-lesson`.
