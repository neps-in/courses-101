# M04.L04 Quiz — Custom Domains, DNS Records & HTTPS

> 7 questions · 2 recall, 3 scenario, 1 spot-the-error, 1 spaced review · pass mark 70% (5 of 7). Questions are tagged with the objective they test (O1–O3).
> Facts checked 2026-11-02 against GitHub Docs (managing, verifying and troubleshooting custom domains; securing with HTTPS) and live `dig`, `curl` and `openssl` checks of a GitHub Pages custom domain.

### Q1. Which record points `www.nilacoffee.in` at a GitHub Pages site? *(O2 · recall)*
- a) An MX record on `www` with the value `yourname.github.io`
- b) A TXT record on `www` with the value `yourname.github.io`
- c) An A record on `@` with the value `yourname.github.io/nila`
- d) A CNAME record on `www` with the value `yourname.github.io`

**Answer:** d
**Explanation:** A CNAME makes one name follow another: `www` → `yourname.github.io`, with no `https://` and no path. MX routes email, TXT holds text such as verification codes, and an A record holds an IP address, never a name or path.
**Hint:** Which record type points a name at another name?

### Q2. Why does GitHub ask you to add a `_github-pages-challenge-…` TXT record? *(O2 · recall)*
- a) To prove you own the domain, so nobody else can attach it
- b) To switch on HTTPS, which can't be enabled in any other way
- c) To route your email through GitHub's servers instead of yours
- d) To make DNS changes spread around the world more quickly

**Answer:** a
**Explanation:** Domain verification proves ownership and protects the domain and its immediate subdomains from takeover by another GitHub account. HTTPS comes from the certificate once DNS points at GitHub; TXT records don't touch email routing or propagation speed.
**Hint:** Think "takeover".

### Q3. Priya cleans up her DNS by deleting every record, then adds the four GitHub A records and the `www` CNAME. Her website works that evening, but customers' emails to her start bouncing. What happened? *(O2 · scenario)*
- a) GitHub Pages blocks email on custom domains by default
- b) She deleted the MX records that route her domain's email
- c) The new A records take priority over every email setting
- d) Her certificate for HTTPS hasn't been issued by GitHub yet

**Answer:** b
**Explanation:** Websites and email use separate records. A and CNAME records don't affect email; deleting MX (and email TXT) records does. Restore them from a "before" screenshot or the email provider's setup page. GitHub doesn't touch email, and certificates don't affect mail.
**Hint:** Which record type routes email?

### Q4. Ten minutes after GitHub's DNS check turned green, you visit `https://www.nilacoffee.in` and Chrome shows `NET::ERR_CERT_COMMON_NAME_INVALID`; the certificate says "Issued to: *.github.io". What should you do? *(O3 · scenario)*
- a) Buy a paid certificate and upload it to the repo's settings
- b) Delete the A records and add them all again straight away
- c) Wait for the certificate (up to an hour), then Enforce HTTPS
- d) Switch the canonical address back to the plain `http://` one

**Answer:** c
**Explanation:** Until GitHub's free Let's Encrypt certificate for your domain is issued, GitHub's servers present their own `*.github.io` certificate, which doesn't match your name. GitHub's docs allow up to an hour; if it's stuck, remove and re-add the custom domain. GitHub Pages doesn't take uploaded certificates, and recreating correct records only restarts the wait.
**Hint:** Whose certificate is showing, and why?

### Q5. A client finds a `.store` domain at ₹99 for the first year and wants to buy it today with the agency's account. What's your best advice? *(O1 · scenario)*
- a) Buy it now on the agency's account so setup is faster for everyone
- b) Avoid custom domains entirely, since free subdomains rank higher
- c) Check renewal cost and register it in the client's own account
- d) Turn off auto-renew so the client is never charged without warning

**Answer:** c
**Explanation:** Cheap first years often renew at many times the price, and a domain registered in someone else's account can be lost when the relationship ends. Keep auto-renew **on** (with 2FA and privacy) so the domain doesn't lapse. Free subdomains don't rank higher.
**Hint:** Who should own the domain, and what will year two cost?

### Q6. Spot the error. Which of these DNS records for a GitHub Pages site is wrong? *(O2 · spot-the-error)*
| Type | Name | Value |
|---|---|---|
| A | `@` | `185.199.108.153` |
| CNAME | `www` | `https://yourname.github.io/nila-launch` |
| MX | `@` | `mx1.yourmailhost.com` (priority 10) |
| TXT | `_github-pages-challenge-yourname` | `8f3c…` |

- a) The A record, because the apex needs a CNAME instead
- b) The CNAME, as its value has `https://` and a path
- c) The MX record, which must be deleted for GitHub Pages
- d) The TXT record, which must be on `@`, not a sub-name

**Answer:** b
**Explanation:** A CNAME value is only a host name: `yourname.github.io`. The repository path is handled by GitHub once the custom domain is set in the repo. The apex uses A records (you can't put a CNAME on `@` at most DNS hosts), MX must stay, and the verification TXT record lives on its own `_github-pages-challenge-` name.
**Hint:** What may a CNAME value contain?

### Q7. *(review: m04-l03)* After switching to your custom domain, your `/css/styles.css` stylesheet link (which failed on `yourname.github.io/nila-launch/`) now works. Why? *(O3 of M04.L03 · scenario)*
- a) GitHub rewrites every root-relative path once a domain is added
- b) Root-relative paths only fail when HTTPS is not enforced yet
- c) The site is now at the domain root, so `/` points to your files
- d) Custom domains turn off case sensitivity for every file path

**Answer:** c
**Explanation:** On a project address, `/` meant `yourname.github.io/`, outside the repo folder. With `www.nilacoffee.in`, the site sits at the domain root, so `/css/…` happens to resolve. Relative paths (`css/styles.css`) work in both places, which is why the course uses them. GitHub doesn't rewrite paths, HTTPS is irrelevant, and case still matters.
**Hint:** Where is "the root" now?
