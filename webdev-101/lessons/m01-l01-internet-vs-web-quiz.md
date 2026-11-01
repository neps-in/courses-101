# M01.L01 Quiz — The Internet vs the Web

> 7 questions · 3 recall, 3 scenario, 1 spot-the-error · pass mark 70% (5 of 7). Each question is tagged with the objective it tests (O1–O3) so a failed answer points at the exact concept.
> This is the course's first lesson, so there are no spaced-review questions yet; they start in M01.L02.
> Facts checked 2026-11-02 against MDN and CERN.

### Q1. Which statement best describes the difference between the Internet and the Web? *(O1 · recall)*
- a) They are two names for the same network of connected computers
- b) The Web is the cables and routers; the Internet is the pages on them
- c) The Internet is the network; the Web is one service that runs on it
- d) The Internet is for email only, and the Web is for everything else

**Answer:** c
**Explanation:** The Internet is a worldwide network of networks. The Web is one service that uses it: pages with URLs, sent over HTTP(S) and shown in browsers. Email, video calls and games are other services on the same network. Option b has the two the wrong way round.
**Hint:** Think of roads versus one kind of traffic on those roads.

### Q2. When you open a web page, what does your browser do after the server sends back the files? *(O2 · recall)*
- a) Reads the HTML, CSS and JavaScript and renders them into a page
- b) Sends the files on to a second server that draws the page for you
- c) Shows the files exactly as the server stored them, with no changes
- d) Stores the files and waits for you to open them in another app

**Answer:** a
**Explanation:** Rendering is the browser's job. It turns code into the layout, text and images you see. That's why the same page can look slightly different in two browsers, and why viewing source shows code, not a picture.
**Hint:** In Part B you typed code, and something turned it into a heading.

### Q3. Kwame is checking which of his activities today were "the Web". Which one is the clearest example of the Web, using the course's working rule? *(O1 · scenario)*
- a) A voice call with a client using the WhatsApp phone app
- b) Sending an email from the Outlook desktop app
- c) Playing an online racing game on his games console
- d) Reading his bank's help article in the Edge browser

**Answer:** d
**Explanation:** The help article has a URL and opens in a browser, so it is clearly the Web. The call, the desktop email and the console game all use the Internet, but with their own protocols, not web pages.
**Hint:** Working rule: has a URL + opens in a browser = Web.

### Q4. Lina types her company's address and gets a plain page in her browser's own style saying "This site can't be reached". A colleague in another city loads the site fine. Where should Lina look first? *(O2 · scenario)*
- a) The site's HTML, because a closing tag must be missing
- b) Her own connection or the address she typed
- c) The web server, because it must be switched off
- d) The site's 404 page, because the page was deleted

**Answer:** b
**Explanation:** A browser-style error means her request never reached a server. Her colleague loading the site proves the server is up. So the problem is on Lina's side: her Wi-Fi, network or the URL itself. A missing tag or a deleted page would only show *after* a server answered.
**Hint:** Who wrote the error page: the browser or the website?

### Q5. You visit `https://example-shop.com/summer-sale` and see a page with the shop's logo and the words "Oops, we can't find that page". What does this tell you? *(O2 · scenario)*
- a) The server was reached, but it has no page at that address
- b) Your Internet connection dropped while the page was loading
- c) Your browser blocked the page because the code is broken
- d) The shop's server is offline and showed a saved copy instead

**Answer:** a
**Explanation:** The page has the shop's own logo and design, so the shop's server sent it. The server got your request and answered "not found" (a 404). A dropped connection or an offline server would give your browser's own error page instead.
**Hint:** Whose logo is on the error page?

### Q6. Which of these was invented at CERN by Tim Berners-Lee, starting with a proposal in 1989? *(O1 · recall)*
- a) The Internet and its TCP/IP rules
- b) The first email program
- c) The first search engine
- d) The World Wide Web

**Answer:** d
**Explanation:** Berners-Lee proposed the Web at CERN in 1989, and the first website, `info.cern.ch`, went live at the end of 1990. The Internet already existed: it began as ARPANET in 1969 and adopted TCP/IP in 1983. AI tools and even some articles often mix this up.
**Hint:** He built something that *runs on* a network that already existed.

### Q7. Spot the error. A marketer tests this in the address bar: *(O3 · spot-the-error)*
```
data:text/html,<h1>Nila Coffee<p>Fresh beans every month.</p>
```
The whole page, including the sentence, shows up big and bold. What went wrong?
- a) The line must start with `https://`, not `data:`
- b) The closing `</h1>` tag is missing after "Nila Coffee"
- c) The `<p>` tag is not allowed inside a data URL
- d) The browser needs a server to render any HTML

**Answer:** b
**Explanation:** Without `</h1>`, the browser has to guess where the heading ends, and it treats the sentence as part of the heading. It doesn't show an error, because browsers are forgiving. `data:` URLs need no server and can contain any HTML tags.
**Hint:** Compare it with the line you pasted in Part B, step 1. Which tag is missing?
