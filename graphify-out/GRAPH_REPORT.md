# Graph Report - geodeta  (2026-09-07)

## Corpus Check
- 8 files · ~8,758 words
- Verdict: corpus is large enough that graph structure adds value.

## Summary
- 36 nodes · 30 edges · 9 communities (6 shown, 3 thin omitted)
- Extraction: 100% EXTRACTED · 0% INFERRED · 0% AMBIGUOUS
- Token cost: 0 input · 0 output

## Graph Freshness
- Built from commit: `bab1766d`
- Run `git rev-parse HEAD` and compare to check if the graph is stale.
- Run `graphify update .` after code changes (no API cost).

## Community Hubs (Navigation)
- [[_COMMUNITY_Community 0|Community 0]]
- [[_COMMUNITY_Community 1|Community 1]]
- [[_COMMUNITY_Community 2|Community 2]]
- [[_COMMUNITY_Community 3|Community 3]]
- [[_COMMUNITY_Community 5|Community 5]]
- [[_COMMUNITY_Community 6|Community 6]]

## God Nodes (most connected - your core abstractions)
1. `Research: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk` - 9 edges
2. `Site Plan: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk` - 7 edges
3. `hooks` - 2 edges
4. `mobileBtn` - 2 edges
5. `mobileMenu` - 2 edges
6. `quoteForm` - 2 edges
7. `formFeedback` - 2 edges
8. `Site architecture (9 pages — no /locations, no /blog)` - 2 edges
9. `SessionStart` - 1 edges
10. `Verified facts` - 1 edges

## Surprising Connections (you probably didn't know these)
- None detected - all connections are within the same source files.

## Communities (9 total, 3 thin omitted)

### Community 0 - "Community 0"
Cohesion: 0.20
Nodes (9): Client-confirmed, Competitors, Raw notes, Research: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk, Review sentiment, Sources, Tone signals, Unverified / assumed (+1 more)

### Community 1 - "Community 1"
Cohesion: 0.22
Nodes (8): code:block1 (/                      Home), Facts used, Open items to confirm with client (blocks final copy), Per-page content notes, Phased roadmap (compressed — solo business, not enterprise), Schema (per page), Site architecture (9 pages — no /locations, no /blog), Site Plan: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk

### Community 6 - "Community 6"
Cohesion: 0.43
Nodes (4): formFeedback, mobileBtn, mobileMenu, quoteForm

## Knowledge Gaps
- **17 isolated node(s):** `SessionStart`, `Verified facts`, `Client-confirmed`, `Unverified / assumed`, `Sources` (+12 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **3 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **What connects `SessionStart`, `Verified facts`, `Client-confirmed` to the rest of the system?**
  _17 weakly-connected nodes found - possible documentation gaps or missing edges._