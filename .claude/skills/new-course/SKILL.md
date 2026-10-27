---
name: new-course
description: Scaffold a new course folder with an outline, empty syllabus and progress rows. Use when starting a new course or via /new-course <name>.
---

# Start a new course

Argument: course name (e.g. `/new-course Django for SaaS`).

1. Make a slug (`django-for-saas`) and create `<slug>/course-outline.md`, `<slug>/syllabus.md`,
   `<slug>/lessons/` and `<slug>/capstones/` (add a `.gitkeep` to empty folders).
2. Ask me (only if I'm present) for: audience, level, outcome, length. Otherwise assume
   working developers, intermediate, 6–8 modules.
3. Draft the outline: goal, 4–9 modules, each with 3–6 topic bullets and one "Hands-on" bullet.
4. Add a `## <slug>` table to `progress.md` with one "not yet planned" row per module.
5. Add the course to the Courses list in `CLAUDE.md`. Ask whether it should become the active course.
6. Commit: `<slug>: scaffold course`.
