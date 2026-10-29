# M01.L01 — Choose your platform: WordPress.org vs WordPress.com vs Substack, Medium and Ghost
> After this lesson you can choose where to publish based on what you own, what it costs and how easily you can leave, and you'll have a free WordPress practice site running.

**Time:** ~15 min reading + ~20 min exercise · **Level:** beginner · **Prereqs:** none
**Verified against:** WordPress 7.1.4, WordPress Playground, and the WordPress.com, Substack, Ghost and Medium help pages on 2026-10-29

> ⚠️ **Freshness flag:** platform prices, fees and plan features change often. The numbers below were checked on 2026-10-29. Re-check each platform's pricing page before you buy anything.

## Learning objectives
1. **Compare** self-hosted WordPress.org, WordPress.com, Substack, Medium and Ghost on ownership, cost, control and export.
2. **Explain** why your own domain and email list are the audience assets no platform can take away.
3. **Choose** a platform for your practice site and justify the choice in two sentences.

## Why it matters
Priya writes a cooking newsletter. In three years she has gathered 8,000 readers on a platform that takes 10% of her paid subscriptions. She wants to sell a recipe ebook and add affiliate links to kitchen tools, but the platform doesn't allow either the way she wants. When she tries to move, she finds that her posts export cleanly, but her web address and her search traffic belong to the platform. Old links break, and Google has to discover her site from scratch. The cost of that first choice only shows up when you try to leave, so make it on purpose.

## Core concept
**Plain version:** every publishing platform is a trade between *convenience* and *ownership*. The more a platform does for you, the more it decides for you.

**Analogy:** a hosted platform is like renting a furnished flat. You move in today, but you can't knock down a wall, and the landlord sets the rent. Self-hosted WordPress is like owning a house. You handle maintenance, but you decide everything, and you can sell or move whenever you like.

**Precise definitions:**
- **Self-hosted WordPress (WordPress.org):** free, open-source software you install on a web host you pay for. You control the code, plugins, design, data and domain.
- **WordPress.com:** a company (Automattic) runs WordPress for you. Paid plans include more features, and higher plans add developer tools.
- **Substack:** a newsletter-first platform. It's free to start, and it takes a share of paid subscription revenue.
- **Ghost:** open-source publishing and newsletter software. You can self-host it for free or pay for managed Ghost(Pro).
- **Medium:** a writing platform with built-in readers. You write on Medium's site, inside its design and rules.

### The four questions that decide it
| Question | Why it matters |
|---|---|
| **Do you own the address?** (your own domain) | Links, search rankings and reputation build up on the domain. If it's `you.platform.com`, they build up for the platform. |
| **Do you own the list?** (exportable emails) | Followers on a platform aren't yours. An email list you can export is. |
| **Can you leave in a day?** (full export) | Posts, images, subscribers and redirects must all move without breaking links. |
| **What does it cost at scale?** | A small monthly fee beats a revenue share once you earn well. A revenue share beats a fee while you earn little. |

### How the platforms compare (checked 2026-10-29)
| | **WordPress.org** (self-hosted) | **WordPress.com** | **Substack** | **Ghost** | **Medium** |
|---|---|---|---|---|---|
| **Software cost** | Free | Free plan, paid plans from a few $ / month | Free | Free (self-host) or Ghost(Pro) from about $15 / month | Free; membership for extras |
| **Revenue share** | 0% | 0% on content | **10%** of paid subscriptions + card fees | 0% | Partner Program pays you |
| **Your own domain** | Yes (you buy it) | Paid plans | Yes, one-time **$50** fee | Yes | Needs a paid membership |
| **Plugins and custom features** | Any of 60,000+ | **Any paid plan** (not Free); some types blocked | No | Integrations, no plugins | No |
| **Export** | Everything (files + database) | Content export on every plan | Posts + subscriber CSV | Content + members | Posts as HTML; followers stay on Medium |
| **You maintain it** | Yes: updates, backups, security | No | No | Self-host: yes · Ghost(Pro): no | No |
| **Best for** | Creators who want full control and many income streams | Same, without server work | Newsletter-first writers | Newsletter + membership businesses | Reaching readers quickly with no setup |

*Typical self-hosted costs: domain about ₹800–1,200 ($10–15) a year; shared or managed hosting about ₹200–1,500 ($3–30) a month. Module 1, Lesson 2 covers how to choose.*

## How it works

> 🖼️ **Image placeholder: platform decision flowchart**  
> _Alt text:_ Platform decision flowchart: own domain and list first, then plugins and income needs, then how much maintenance you can handle.  
> _Image prompt:_ Clean, flat, minimal vertical decision flowchart infographic, top to bottom, rounded rectangles for steps and diamonds for questions, joined by simple labelled arrows. Start box "Where should I publish?" → diamond "Must you own your domain and email list?" (No → box "Medium: borrow an audience, but cross-post from your own site") → Yes → diamond "Need plugins, ads, affiliates, a shop or custom pages?" (No → box "Substack or Ghost: newsletter-first") → Yes → diamond "Happy to handle updates and backups?" (Yes → final box "Self-hosted WordPress.org"; No → final box "WordPress.com paid plan or managed WordPress hosting"). Questions in light sky blue #BFDDF0, steps in cream #FFF9D2 and medium blue #8CC0EB, the two WordPress end boxes in pink #F9B2D7. Dark navy #111844 text, outlines and arrows. Plain white background, modern sans-serif font, generous spacing, no icons, no extra text, no shadows, 16:9.

**In words:** start with ownership. If you need your own domain and list (most creators who want to earn do), choose by features: plugins and many income streams point to WordPress. Then choose by effort: self-hosted if you'll handle maintenance, a managed WordPress option if you won't. This course teaches self-hosted WordPress. Almost everything also works on a WordPress.com paid plan.

## Hands-on walkthrough

You'll score the platforms for *your* situation, then start a free WordPress practice site you'll use for the whole course.

**Part A: score your options (10 min)**
1. Copy the scorecard below into a note or spreadsheet.
2. Give each criterion a **weight** from 1 to 3 (3 = matters most to you).
3. Score each platform from 1 to 5 on each criterion, using the comparison table.
4. Multiply each score by its weight and add up each column.

| Criterion | Weight (1–3) | WP.org | WP.com | Substack | Ghost | Medium |
|---|---|---|---|---|---|---|
| Own domain & list | | | | | | |
| Income options (ads, affiliates, products) | | | | | | |
| Cost at your expected size | | | | | | |
| Low maintenance | | | | | | |
| Easy to leave (export) | | | | | | |
| Built-in audience | | | | | | |
| **Weighted total** | | | | | | |

**Expected output:** a total for each platform. Most creators who weight ownership and income at 3 see WordPress (either option) or Ghost come out on top. If Substack or Medium wins on your weights, that's a valid answer. Note the trade-offs you're accepting.

**Part B: start your free practice site (10 min)**
1. Open **https://playground.wordpress.net** in your browser. No account or payment needed.
   **Expected:** a full WordPress site loads in the browser, with the admin toolbar at the top.
2. Click the WordPress logo or go to `/wp-admin/`. You're logged in as `admin` automatically.
   **Expected:** the WordPress dashboard, with Posts, Pages, Media and Settings in the left menu.
3. Go to **Posts → Add New Post**, type the title "Hello from my own site" and a one-line paragraph, then click **Publish** (twice: Publish, then confirm).
   **Expected:** a "Post published" notice and a **View Post** link.
4. Go to **Tools → Export**, choose **All content**, then **Download Export File**.
   **Expected:** an `.xml` file downloads. This is your whole site's content in a portable format. You've just proved you can leave in one minute.
5. Save your Playground so it survives a browser restart. Use the **Save** option in the Playground toolbar (it saves to your browser). Or install **Local** (localwp.com, free) for a permanent local site.
   **Expected:** the site is still there when you reopen Playground.

> **Note:** Playground runs WordPress entirely in your browser. It's perfect for practice but isn't a public website. You'll move to real hosting in Lesson 1.2, or in Module 9 when you launch.

## When to use / when not to
- **Choose self-hosted WordPress** when you want many income streams (ads, affiliates, products, sponsors), full design control and the freedom to move hosts. **Trade-off:** you're responsible for updates, backups and security (Modules 1 and 7 teach all three).
- **Choose WordPress.com** when you want WordPress without server work and a paid plan fits your budget.
- **Choose Substack or Ghost** when the newsletter *is* the product and you don't need plugins or a custom site.
- **Use Medium as a satellite**, not a home. Cross-post selected articles from your own site to reach Medium's readers, linking back to the original.

Many creators combine them: a WordPress site as the home base, with a newsletter tool and Medium as distribution channels.

## Use AI for this
**Example prompt:**
> "I'm a [podcaster / newsletter writer / YouTuber] in [country] earning from [sponsors / affiliates / paid subscriptions]. I expect [X] readers and [₹/$ Y] a month in a year. Compare self-hosted WordPress, WordPress.com, Substack, Ghost and Medium for me on ownership, total yearly cost at that size, income options and export. Show the maths for revenue-share vs fixed fees."

**What AI does well here:** it applies your numbers to the trade-offs and shows the revenue-share maths (10% of ₹50,000 a month is ₹5,000 a month, more than most hosting).
**Where it gets it wrong:** prices, plan names and fees change several times a year. AI often quotes old ones. For example, many sources still say WordPress.com needs the Business plan for plugins, which was no longer true when this lesson was checked.
**How to check:** verify every price and feature claim on the platform's own pricing or help page, and note the date you checked.

## Common mistakes
- **Starting on a free subdomain** (`you.substack.com`, `you.wordpress.com`) and planning to "add a domain later". Links and rankings build up on the subdomain. Use your own domain from day one if you can.
- **Confusing WordPress.org and WordPress.com.** Same software, very different ownership and pricing.
- **Choosing on day-one cost alone.** A free platform with a 10% revenue share can cost more than hosting once you earn.
- **Treating followers as an audience you own.** Followers belong to the platform. Only an email list you can export is yours.
- **Never testing the export.** You don't know you can leave until you've downloaded the export file.

## Troubleshooting
| Symptom | Likely cause | Fix |
|---|---|---|
| Playground shows a blank page or keeps loading | Browser blocks storage or service workers (private mode, strict settings) | Use a normal (non-private) window in Chrome, Edge or Firefox, or install Local |
| Practice site disappeared after closing the tab | Playground wasn't saved | Use **Save** in the Playground toolbar next time, or switch to Local |
| No **Tools → Export** menu on WordPress.com | Wrong dashboard view or limited user role | Open the site's WP Admin view and make sure you're an Administrator |
| A guide says your plan "can't install plugins" | Out-of-date article | Check the platform's current support page and plan comparison |

## Exercise
**Task:** complete the weighted scorecard (Part A), then write **two sentences** naming your chosen platform and the main trade-off you accept. Publish those two sentences as a post on your Playground practice site.
**Expected outcome:** a scorecard with weighted totals, plus a published post on your practice site, for example: "I'm choosing self-hosted WordPress because I want affiliate income and my own domain. I accept that I'm responsible for updates and backups."
**Stretch goal:** price your setup for one year. Add domain + hosting (WordPress.org) or plan fee (WordPress.com, Ghost(Pro)) or the revenue share (Substack) at your expected income, in ₹ or $.

## Key takeaways
- Choose on **ownership first**: your own domain and an exportable email list.
- WordPress.org and WordPress.com run the same software; the difference is who maintains it and what you're allowed to change.
- Revenue shares are cheap when you earn little and expensive when you earn well. Do the maths at your target size.
- Medium and social platforms are distribution channels, not home bases.
- Prove you can leave: download an export on day one.

## Teach it back
Explain to a friend in 3 sentences why a creator with an audience on Substack or Medium might still want their own WordPress site.

## Glossary terms added
- Self-hosted WordPress (WordPress.org) — added to `wordpress-101/glossary.md`
- WordPress.com — added to `wordpress-101/glossary.md`
- Owned vs rented audience — added to `wordpress-101/glossary.md`
- Custom domain — added to `wordpress-101/glossary.md`
- Revenue share — added to `wordpress-101/glossary.md`
- WXR export file — added to `wordpress-101/glossary.md`
- WordPress Playground — added to `wordpress-101/glossary.md`

## Further reading
*All checked 2026-10-29.*
- WordPress.org — Download & releases: https://wordpress.org/download/
- WordPress.com support — Plugins (which plans can install them): https://wordpress.com/support/plugins/
- WordPress documentation — Tools Export Screen: https://wordpress.org/documentation/article/tools-export-screen/
- WordPress Playground: https://wordpress.org/playground/
- Substack support — How do I set up my custom domain?: https://support.substack.com/hc/en-us/articles/360051222571-How-do-I-set-up-my-custom-domain-on-Substack
- Substack support — How do I export my email list?: https://support.substack.com/hc/en-us/articles/6314498343700-How-do-I-export-my-email-list-on-Substack
- Ghost pricing (check current tiers and limits): https://ghost.org/pricing/
- Medium help — Export your account data: https://help.medium.com/hc/en-us/articles/115004745787-Export-your-account-data
- Medium help — Custom Domain FAQ: https://help.medium.com/hc/en-us/articles/115003053487-Custom-Domain-FAQ
