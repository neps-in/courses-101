# LearnPress sync (neps.in course 2608)

Run on the server that hosts `/var/www/neps.in`. Back up first:
`wp db export backup.sql --tables=wp_posts,wp_postmeta,wp_learnpress_sections,wp_learnpress_section_items,wp_learnpress_quiz_questions,wp_learnpress_question_answers,wp_learnpress_courses`

## Upload a module (used for M02 on 2026-10-31)
1. `python3 build_module.py <N> <first lesson ID> mNN.json`: Markdown → JSON (lesson HTML, durations, quizzes).
   Strips image prompts, `.webp` links and "Glossary terms added"; Mermaid becomes `<pre class="mermaid">` plus a CDN loader;
   bare URLs become links; the module cheat sheet is inlined in the capstone.
2. `wp eval-file upload_module.php mNN.json <section ID> --user=118`: publishes the lessons, creates a quiz after each
   lesson, and lays out the section in order (lesson, quiz, …, capstone). Refuses to run if a lesson is already published.
3. `wp eval-file update_content.php mNN.json --user=118`: re-push lesson content only (after edits).

| Module | Section ID | First lesson ID | Status |
|---|---|---|---|
| M01 | 32 | 2615 | live (uploaded with the one-off `upload_m01.php`) |
| M02 | 33 | 2621 | live |
| M03 | 34 | 2627 | drafts |
| M04 | 35 | 2633 | drafts |
| M05 | 36 | 2639 | drafts |
| M06 | 37 | 2645 | drafts |
| M07 | 38 | 2652 | drafts |
| M08 | 39 | 2658 | drafts |
| M09 | 40 | 2664 | drafts |

## ⚠️ Saving the course detaches drafts
Saving course 2608 in wp-admin removes every attached lesson that isn't published (it happened on 2026-10-31).
Re-attach them with `wp eval-file reattach_drafts.php --user=118`.
