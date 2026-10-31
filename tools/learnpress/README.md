# LearnPress sync (neps.in course 2608)

Used on 2026-10-31 to publish M01. Run on the server that hosts `/var/www/neps.in`.

1. `python3 build_m01.py m01.json`: Markdown → JSON payload (lesson HTML, durations, quizzes).
   Strips image prompts, `.webp` links and "Glossary terms added"; Mermaid becomes `<pre class="mermaid">` plus a CDN loader.
2. `wp eval-file upload_m01.php m01.json --user=118` (one-off): publishes the lessons, creates the quizzes and
   attaches all 53 lessons. Refuses to run if the course already has items.
3. `wp eval-file update_content.php m01.json --user=118`: re-push lesson content only.

For the next module, copy `build_m01.py`, then change the `LESSONS` list (WP lesson IDs: M02 = 2621–2626, …)
and the cheat-sheet path.
⚠️ Saving course 2608 in wp-admin removes every attached lesson that isn't published.
