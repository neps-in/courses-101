# LearnPress sync (neps.in: wordpress-101 = course 2608, webdev-101 = course 2606)

Run on the server that hosts `/var/www/neps.in`. Back up first:
`wp db export backup.sql --tables=wp_posts,wp_postmeta,wp_learnpress_sections,wp_learnpress_section_items,wp_learnpress_quiz_questions,wp_learnpress_question_answers,wp_learnpress_courses`

## Upload a module (used for M02 and M03 on 2026-10-31)
1. `python3 build_module.py <N> <first lesson ID> mNN.json`: Markdown → JSON (lesson HTML, durations, quizzes).
   Strips image prompts, `.webp` links and "Glossary terms added"; Mermaid becomes `<pre class="mermaid">` plus a CDN loader;
   bare URLs become links; the module cheat sheet is inlined in the capstone.
2. `wp eval-file upload_module.php mNN.json <section ID> --user=118`: publishes the lessons, creates a quiz after each
   lesson, and lays out the section in order (lesson, quiz, …, capstone). Refuses to run if a lesson is already published.
3. `wp eval-file update_content.php mNN.json --user=118`: re-push lesson content only (after edits).
4. `wp eval-file refresh_quizzes.php mNN.json [apply] --user=118`: update published quizzes in place (question text, hint, explanation, answers, correct answer). Dry run without `apply`; keeps all IDs; skips quizzes whose question or option count changed.

| Module | Section ID | First lesson ID | Status |
|---|---|---|---|
| M01 | 32 | 2615 | live (uploaded with the one-off `upload_m01.php`) |
| M02 | 33 | 2621 | live |
| M03 | 34 | 2627 | live |
| M04 | 35 | 2633 | live |
| M05 | 36 | 2639 | live |
| M06 | 37 | 2645 | live |
| M07 | 38 | 2652 | live |
| M08 | 39 | 2658 | live |
| M09 | 40 | 2664 | live |

## ⚠️ Saving the course detaches drafts
Saving course 2608 in wp-admin removes every attached lesson that isn't published (it happened on 2026-10-31).
Re-attach them with `wp eval-file reattach_drafts.php --user=118`.

## Checking a live lesson
Lesson URLs work only inside the course: `https://neps.in/courses/wordpress-101-for-content-creators/lessons/<slug>/` (the bare `/lessons/<slug>/` returns 404). Logged-out visitors see the enrol prompt, so check content with
`wp eval 'echo apply_filters("the_content", get_post(<ID>)->post_content);' --user=118`.

## webdev-101 → course 2606 (new posts, created from scratch)
Course 2606 had no lesson posts, so `create_module.php` creates the section, lessons and quizzes itself.
1. Back up: `wp db export /home/ubuntu/backups/neps-in/<date>-<reason>/full.sql`.
2. `COURSE=webdev-101 python3 build_module.py <N> 0 mNN.json` (first ID 0 = new posts; titles "1.1 …", "1.1 Quiz: …", "1.6 Module capstone: …").
3. Dry run: `wp eval-file create_module.php mNN.json 2606 <order> "M0N — Name" "<goal from syllabus.md>" --user=118`, then add `apply`.
   Refuses a duplicate section name, a used section order, or an existing lesson/quiz title.
4. Check: section items in order, one `is_true` per question, live answer letters = the Markdown `**Answer:**` keys, content identical to the payload.

| Section | Order | Section ID | Status |
|---|---|---|---|
| Start here (diagnostic quiz) | 1 | — | not yet |
| M01 — How the Web Works | 2 | 41 | live 2026-11-03 (lessons 3181/3190/3199/3208/3217, capstone 3226; quizzes 3182/3191/3200/3209/3218) |
| M02–M08 | 3–9 | — | not yet |
| Final capstone (Launch Week) | 10 | — | not yet |

## ⚠️ Slashing
`wp_insert_post`, `wp_update_post` and `update_post_meta` unslash their input, and LearnPress `PostModel::save()` calls `wp_insert_post` unslashed.
Every script now wraps content in `wp_slash()`. Before this fix, wordpress-101 lesson 2.1 (ID 2621) lost the backslash in "Ctrl+Shift+\\" (re-pushed and fixed on 2026-11-03).
