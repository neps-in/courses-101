#!/usr/bin/env python3
"""Render every ```mermaid block in a Markdown file to an optimised WebP image.

Each image is saved next to the Markdown file as <stem>-diagram-<N>.webp and
linked on the line below its Mermaid block. Re-running updates the existing
image link instead of adding a second one.

Usage:
    python3 tools/mermaid_to_image.py wordpress-101/course-outline.md [more.md ...]

Needs: mermaid-cli (`mmdc`, or set MMDC="npx -y -p @mermaid-js/mermaid-cli@11.4.2 mmdc")
and ImageMagick (`convert`) with WebP support.
"""
import os
import re
import shlex
import shutil
import subprocess
import sys
import tempfile
from pathlib import Path

MMDC = shlex.split(os.environ.get("MMDC") or (
    "mmdc" if shutil.which("mmdc") else "npx -y -p @mermaid-js/mermaid-cli@11.4.2 mmdc"))
FENCE_OPEN = re.compile(r"^```mermaid\s*$")
FENCE_CLOSE = re.compile(r"^```\s*$")
IMAGE_LINE = re.compile(r"^!\[[^\]]*\]\((?P<src>[^)]+-diagram-\d+\.webp)\)\s*$")
NODE_LABEL = re.compile(r"[\[{(]+([^\[\]{}()]+?)[\]})]+")


def alt_text(source: str) -> str:
    """Alt text from a `%% alt: ...` comment, else the node labels in order."""
    for line in source.splitlines():
        m = re.match(r"\s*%%\s*alt:\s*(.+)", line)
        if m:
            return m.group(1).strip()
    labels = []
    for line in source.splitlines():
        if line.strip().startswith(("classDef", "%%", "flowchart", "graph")):
            continue
        for label in NODE_LABEL.findall(line):
            label = re.sub(r"<br\s*/?>", " ", label).strip()
            if label and label not in labels:
                labels.append(label)
    return "Flowchart: " + " → ".join(labels) if labels else "Flowchart diagram"


def render(source: str, out: Path) -> None:
    """Mermaid → 2x PNG (via mmdc) → lossless WebP (flat diagrams compress best lossless)."""
    with tempfile.TemporaryDirectory() as tmp:
        mmd, png = Path(tmp, "d.mmd"), Path(tmp, "d.png")
        mmd.write_text(source)
        subprocess.run([*MMDC, "-q", "-i", str(mmd), "-o", str(png), "-s", "2", "-b", "white"], check=True)
        subprocess.run(
            ["convert", str(png), "-strip",
             "-define", "webp:lossless=true", "-define", "webp:method=6", str(out)],
            check=True,
        )


def process(md_path: Path) -> int:
    lines = md_path.read_text().splitlines()
    out_lines, i, n = [], 0, 0
    while i < len(lines):
        out_lines.append(lines[i])
        if not FENCE_OPEN.match(lines[i]):
            i += 1
            continue
        start = i + 1
        i += 1
        while i < len(lines) and not FENCE_CLOSE.match(lines[i]):
            out_lines.append(lines[i])
            i += 1
        source = "\n".join(lines[start:i])
        out_lines.append(lines[i] if i < len(lines) else "```")
        i += 1
        # Drop an image link we generated earlier so re-runs don't duplicate it.
        j = i
        while j < len(lines) and not lines[j].strip():
            j += 1
        if j < len(lines) and IMAGE_LINE.match(lines[j]):
            i = j + 1

        n += 1
        image = md_path.with_name(f"{md_path.stem}-diagram-{n}.webp")
        render(source, image)
        out_lines += ["", f"![{alt_text(source)}]({image.name})"]
        print(f"  {image}  ({image.stat().st_size / 1024:.1f} KB)")

    md_path.write_text("\n".join(out_lines) + "\n")
    return n


if __name__ == "__main__":
    if len(sys.argv) < 2:
        sys.exit(__doc__)
    for arg in sys.argv[1:]:
        print(f"{arg}: {process(Path(arg))} diagram(s)")
