---
name: new-course
description: Scaffold a new course from templates/course-outline-template.md, with folders, glossary and progress rows. Use when starting a new course or via /new-course <name>.
---

# Start a new course

Argument: course name (e.g. `/new-course Django for SaaS`).

1. Read `templates/course-outline-template.md` and `course-design-guide.md`.
2. Make a slug (`django-for-saas`) and create `<slug>/course-outline.md`, `<slug>/syllabus.md`,
   `<slug>/glossary.md`, and `<slug>/lessons/`, `<slug>/capstones/`, `<slug>/cheatsheets/`
   (add a `.gitkeep` to empty folders).
3. If I'm present, ask in one go for: audience (and who it's not for), level, outcome, format,
   and time per week. Otherwise assume a self-paced written course for beginners, 6–8 modules,
   2 lessons a week, and note those assumptions in the outline.
4. Fill `course-outline.md` from the template: every (required) section, plus personas,
   non-negotiables (taught / reinforced / assessed), running example, diagnostic quiz plan,
   tools with a free path, freshness flag and review cadence. Delete the guidance lines.
5. Check the outline against the "What most courses miss" table in `course-design-guide.md`
   and fix any gap before saving.
6. Add a `## <slug>` table to `progress.md` with one "not yet planned" row per module, plus a log line.
7. Add the course to the Courses list in `CLAUDE.md`. Ask whether it should become the active course.
8. Commit: `<slug>: scaffold course`.
