# M15.L05 Quiz — Site Migrations and Redesigns

> 8 questions · 3 recall, 3 scenario, 2 spot-the-error (Q8 is the spaced review) · pass mark 70% (6 of 8). Q1–Q7 are tagged with the objective they test (O1–O3) so a failed answer points at the exact concept.
> Facts checked 2026-11-11 against Google's *Site moves with URL changes* (2026-08-20), *Changing your hosting* (2025-12-10) and Search Console Help *Change of Address tool*.

### Q1. Which change does NOT change any URLs? *(O1 · recall)*
- a) Moving from HTTP to HTTPS on the same domain
- b) Renaming product slugs from /products/ to /mugs/
- c) Switching from www to non-www on the same domain
- d) Moving to a new hosting provider with the same URLs

**Answer:** d
**Explanation:** Google's hosting guide covers "migrations that don't affect the user-visible URL". Protocol, host (www) and path changes all change URLs and need redirects.
**Hint:** Same address, new building.

### Q2. How long does Google's site-move guide say to keep redirects? *(O3 · recall)*
- a) For as long as possible, generally at least 1 year
- b) Exactly 180 days, then remove them all at once
- c) Until the new URLs show in Search, then remove them
- d) One month, which is enough for Googlebot to recrawl

**Answer:** a
**Explanation:** "Keep the redirects for as long as possible, generally at least 1 year", and for users "consider keeping redirects indefinitely". 180 days is the Change of Address window and a minimum on that help page.
**Hint:** Longer than the tool's window.

### Q3. Who can submit a Change of Address request? *(O3 · recall)*
- a) Any Full user on the old property
- b) A Restricted user who has written permission
- c) An owner of both old and new properties
- d) Anyone, as long as the redirects are live

**Answer:** c
**Explanation:** "You must be an owner of both the old and new properties in Search Console", using the same Google account. That's why path C auditors with read access can't do it.
**Hint:** Ownership, on both sides.

### Q4. Nila wants to move domain, switch theme and rename URLs in the same week. What does Google advise? *(O1 · scenario)*
- a) Do it all at once, so Google only recrawls the site one time
- b) Do the redesign first, because themes affect rankings most
- c) Make changes one after the other; move domain, then redesign
- d) Only rename URLs; domain moves are never worth the risk

**Answer:** c
**Explanation:** "Plan your changes to your site one after the other, not everything at the same time." Combining a move with a redesign means "you will probably see some traffic loss as Google might need to relearn" each page.
**Hint:** One kind of change at a time.

### Q5. Tomás is moving his shop from HTTP to HTTPS. Which is right? *(O3 · scenario)*
- a) Redirect every HTTP URL; no Change of Address needed
- b) Submit Change of Address first, then add redirects
- c) Redirect only the home page; Google finds the rest
- d) Add `noindex` to the HTTP pages instead of redirects

**Answer:** a
**Explanation:** For HTTP to HTTPS, Google says "don't use this tool; Google will figure out your changes for you". Every URL still needs a one-hop 301 to its HTTPS version.
**Hint:** Redirects yes, tool no.

### Q6. Two weeks after a careful domain move, clicks are down 20%. What's the best response? *(O2 · scenario)*
- a) Move back to the old domain before it gets worse
- b) Remove the redirects so Google sees the new site clearly
- c) Submit a second Change of Address to a third domain
- d) Check for real breaks, fix them, and give it a few weeks

**Answer:** d
**Explanation:** Moves take "a few weeks or more", and "a site's rankings will settle down over time". Check redirects, blocks, canonicals and Page indexing. Rolling back is a second move, and Google says "Don't chain site moves."
**Hint:** Settling is normal; breaks aren't.

### Q7. Spot the error. "Launch done: home page redirects to the new domain, and all other old URLs redirect to the new home page too." What's wrong? *(O2 · spot the error)*
- a) Only that the home page should use a 302 redirect
- b) Nothing; Google will match the old pages by itself
- c) Old pages need one-hop redirects to their best match
- d) Redirects aren't needed if Change of Address is used

**Answer:** c
**Explanation:** Map each old URL to its best new match in one hop. Google warns against redirecting "many old URLs to one irrelevant single URL destination, such as the home page"; that confuses users and can be treated as a soft 404.
**Hint:** A forwarding address for every letter.

### Q8. Spot the error. "Ticket T-02: fix the redirect. Done when it works." What's wrong? *(review: m15-l04 · spot the error)*
- a) Nothing; developers know when a redirect works
- b) No testable criteria: name the URL, tool and pass result
- c) Redirect tickets should always be merged with others
- d) Only the ticket number, which should start at T-01

**Answer:** b
**Explanation:** Completion criteria must be a test anyone can run, such as "`curl -I` on /old-menu/ shows one 301 to /menu/, which returns 200". "Works" can't be checked.
**Hint:** How would someone else check it?
