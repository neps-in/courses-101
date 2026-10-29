# courses-101

Course content (lessons, quizzes, capstones) built with Claude Code.

## Use it
```bash
git clone git@github.com:neps-in/courses-101.git
cd courses-101
claude
```
Then in Claude Code:
```
/plan-module 1     # break Module 1 into lessons
/next-lesson       # draft the next todo lesson + quiz
/review-lesson     # critique and fix the latest draft
/new-course <name> # start another course
```
Resume your last session in this folder with `claude --continue`.

## Files
- `CLAUDE.md` — instructions Claude reads every session
- `templates/course-outline-template.md` — what every course must contain
- `course-design-guide.md` — course formats, what most courses miss, what makes ours different
- `course-framework.md` — lesson, quiz and capstone templates
- `progress.md` — status of every lesson (the course's memory)
- `.claude/skills/` — the slash commands above
- `modern-seo/` — Modern SEO: SEO, AEO, GEO and Content Automation
- `routines/next-lesson.md` — prompt for a scheduled lesson-drafting routine

## Optional: save to Google Drive
Add a Google Drive MCP server to Claude Code; lessons will also be saved to
`Neps-in-blog/<Course name>`.
