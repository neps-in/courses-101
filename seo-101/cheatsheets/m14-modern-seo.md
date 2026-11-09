# M14 Cheat Sheet — E-E-A-T, Algorithms, Spam Policies and AI Search
> One page from Module 14. Facts checked 2026-11-10. The rater guidelines, spam policies, update list and AI controls all change; recheck Google's pages before relying on them.

## E-E-A-T through a rater's eyes (rater guidelines, September 11, 2025)
- Raters test Google's systems: "No single rating can directly impact how a particular webpage, website, or result appears in Google Search".
- **Trust is central.** Untrustworthy = low E-E-A-T, however expert. **No E-E-A-T score exists**; tools can't see Google's data.
- **Evidence:** what the site says about itself · what others say (`"brand" reviews -site:domain`) · what's on the page. Little reputation on a small site = neutral (§3.3.5).
- **YMYL:** not / in between / clear (health or safety, money, civics, other). "Many or most topics are not YMYL."
- **§3.4.1:** life experience can be enough if safe and consistent with expert consensus; some YMYL advice "must come from experts".

## People-first self-assessment (helpful content page, 2026-10-05)
| Do | Don't |
|---|---|
| Sample 5 pages: top, dropped, newest, AI-assisted, YMYL | Assess only your best page |
| 4 groups: content and quality (12), expertise (4), people-first (5), search engine-first (11; "yes" = warning) | Score the questions and chase 100% |
| Ask an unaffiliated reviewer | Ask staff or anyone who earns from the site |
| Judge main content: effort, originality, talent or skill, accuracy | Think credit to sources replaces original effort |
| Who/How/Why as site-wide standards + a true AI use statement | Fake authors, AI headshots, false credentials |
| Change a date only after a substantial change | Pad to word counts, re-date for "freshness", mass-delete (deletion = "last resort") |

## Ranking systems and updates
- Systems work page by page, plus site-wide signals. **Retired into core:** Panda (2015), Penguin (2016), Hummingbird, helpful content (March 2024).
- **Core update:** broad re-ranking, not targeted. **Spam update:** better spam detection (SpamBrain). Smaller core updates aren't announced (since Dec 2025).
- **Rules:** check the Status Dashboard → annotate start and end → change nothing mid-rollout → wait "at least a full week" after completion → compare a week after with the week before → small drop: hold; large: self-assess.
- **Latest (2026-11-10):** May 2026 core (21 May–2 Jun); March 2026 core (27 Mar–8 Apr); September 2026 spam (24 Sep–8 Oct).

## Spam policies (page updated 2026-08-28)
**16:** cloaking · doorway · expired domain · hacked content · hidden text and links · keyword stuffing · link spam · machine-generated traffic · malicious practices (incl. **back button hijacking**, enforced 15 June 2026) · misleading functionality · **scaled content** ("no matter how it's created") · scraping · **site reputation policy** · sneaky redirects · thin affiliation · user-generated spam. **Plus:** policy circumvention, scam and fraud, legal and personal-info removals. Spam includes manipulating "generative AI responses".
- **Site reputation (2026):** third-party content there mainly for the host's ranking signals; test = "fully integrated with the main site"; manual action impact doesn't apply in the EEA from 30 Aug 2026.
- **Manual actions** (manipulation) vs **Security issues** (hacks, malware, social engineering): different reports, different fixes.
- **Reconsideration:** fix every affected page · keep fixes visible (no login, noindex, robots block) · issue + steps + outcome (+ examples) · say if you bought the site · don't move the problem · submit once.

## AI search controls
| Goal | Control | Cost |
|---|---|---|
| Hide one passage | `data-nosnippet` (span, div, section) | Almost none |
| Limit excerpt length | `max-snippet:[n]` | Shorter normal snippets |
| No text used from a page | `nosnippet` | No snippet in normal results |
| Whole site out of Search AI features | Search Console → Settings > Search generative AI → Exclude | No links or impressions from those features; similar content from others still shows |
| Out of Gemini training only | `Google-Extended` in robots.txt | None for Search: doesn't affect AI Overviews |
| Out of Search | `noindex` | No search traffic |

Eligible for AI features = indexed + can show a snippet. **Myths:** llms.txt (ignored), chunking, AI rewrites, fake mentions, extra structured data. **Reporting:** included in Performance → Web; Generative AI report = impressions only.

## Traffic-drop playbook
1. **Real?** Data anomalies (impressions logging fix May 13, 2025–Apr 27, 2026; FAQ rich results gone 7 May 2026) · GA4 vs GSC · dates · Changes log
2. **Normal?** Last 16 months, YoY · Google Trends
3. **Technical or security?** Page indexing · Crawl stats · URL Inspection · Security issues (stray `noindex` = slow drop)
4. **Manual action?** Manual actions report
5. **Update?** Dashboard dates · complete + 1 week · small = hold, large = assess

**Shapes:** clicks ↓ impressions steady = SERP or snippet · impressions ↓ clicks steady = often reporting. **Attribute** mixed drops. **Act:** fix breaks now; one annotated change at a time; judge after a few weeks.
