# M04.L02 Quiz — Git & GitHub Without Fear

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against the Pro Git book and the `git revert`/`gitignore` reference, VS Code Source Control docs, and GitHub Docs (remote repositories, push protection, GitHub Pages plans). Commands and outputs run with Git 2.43.

### Q1. What is a Git **commit**? *(O1 · recall)*
- a) An upload of the whole project folder to the GitHub website
- b) A setting that makes VS Code save every file automatically
- c) A saved snapshot of the files, with a message, author and date
- d) A copy of one file kept beside the original, such as `-v2.html`

**Answer:** c
**Explanation:** A commit records the state of the tracked files at one moment, plus who made it, when, and why (the message). Sending commits to GitHub is a separate step (**push**), auto-save is an editor setting, and `-v2` copies are exactly what Git replaces.
**Hint:** Think "save point with a label".

### Q2. Why is `git revert` the safe way to undo a commit you've already pushed? *(O3 · recall)*
- a) It adds a new commit that undoes the old one, so history is kept
- b) It deletes the bad commit from GitHub so nobody can ever see it
- c) It rolls the whole project back to the very first commit you made
- d) It only changes your local copy and never affects GitHub at all

**Answer:** a
**Explanation:** Revert creates a new commit with the opposite changes. Nothing is removed, so anyone else's copy stays consistent and both the mistake and the fix are on record. It doesn't delete commits, it only undoes the one you name (e.g. `HEAD`), and you push the revert like any other commit.
**Hint:** Does revert remove anything from history?

### Q3. Amara pushed "Change CTA colour to caramel" an hour ago, and now the button fails contrast on the live page. What should she do? *(O3 · scenario)*
- a) Delete the GitHub repository and create a new one from her files
- b) Run `git reset --hard` and `git push --force` to erase the commit
- c) Edit the colour back by hand and commit it as "update" with no note
- d) `git revert HEAD`, then `git push`, so the undo is on the record

**Answer:** d
**Explanation:** Revert undoes exactly that commit with a new commit, and pushing it puts the fix live (once deploys are connected in Lesson 4.3). Deleting the repo loses the history, reset plus force-push rewrites history and can destroy work, and a hand edit with a vague message works but hides what happened.
**Hint:** Which option keeps history and says clearly what was undone?

### Q4. Jun committed `notes.txt`, then added `notes.txt` to `.gitignore` and edited the file again. Git still lists it as modified. Why? *(O3 · scenario)*
- a) `.gitignore` only works after the computer has been restarted
- b) It only stops untracked files; tracked ones need `git rm --cached`
- c) The file name in `.gitignore` must be written in capital letters
- d) `.gitignore` files only take effect once they're pushed to GitHub

**Answer:** b
**Explanation:** `.gitignore` tells Git which **untracked** files to leave alone. A file that's already committed stays tracked until you run `git rm --cached notes.txt` (which keeps it on disk) and commit. Its old contents stay in history, which is why secrets must never be committed in the first place.
**Hint:** What does `.gitignore` do to files Git already knows about?

### Q5. Diego finds that an API key was pushed to his public GitHub repository last week. What's the most important first step? *(O3 · scenario)*
- a) Cancel or regenerate the key at the service that issued it, today
- b) Delete the file in a new commit, since that removes it from GitHub
- c) Make the repository private, which wipes the key from all copies
- d) Add the file name to `.gitignore`, which hides it from the history

**Answer:** a
**Explanation:** Once a secret has been public, assume someone has copied it: rotate (cancel and replace) it at the source. Deleting the file, making the repo private or ignoring the file all leave the key in history and in any copies already made. Clean-up comes after rotation.
**Hint:** Can you be sure nobody copied it in the last week?

### Q6. Spot the error. Ama runs these commands in her project folder. One of them fails. Which one? *(O2 · spot-the-error)*
```
git status
git add .
git commit "Add FAQ section"
git push
```
- a) `git status`, because it must come after `git add` to show anything
- b) `git add .`, because the dot only stages files whose names begin with a dot
- c) `git commit "Add FAQ section"`, because the message needs `-m` before it
- d) `git push`, because pushing requires the GitHub password to be typed first

**Answer:** c
**Explanation:** The message must follow `-m`: `git commit -m "Add FAQ section"`. Without it, Git treats the text as a file name and stops with `error: pathspec 'Add FAQ section' did not match any file(s) known to git` (checked). `git status` works at any time, `.` means "this folder", and pushing uses VS Code's sign-in or a token, never your account password.
**Hint:** Compare the commit line with the everyday loop.

### Q7. *(review: m04-l01)* The site works on your Windows laptop, but after publishing, `css/Styles.css` gives a 404. The file is `css/styles.css`. What's the fix? *(O2 of M04.L01 · scenario)*
- a) Upload a second copy named `Styles.css` alongside the original file
- b) Change the link to the root-relative path `/css/Styles.css` instead
- c) Ask the host to switch their server to ignore upper and lower case
- d) Match the link to the real lowercase name, then search for capitals

**Answer:** d
**Explanation:** Windows ignores letter case, so the mistake was invisible locally; most web hosts don't. Fix the path to `css/styles.css` and run Lesson 4.1's capital-letter search for any others. Duplicate files cause confusion, the root-relative path still has the capital, and hosts won't change this.
**Hint:** Lesson 4.1: what's invisible on Windows and Mac?
