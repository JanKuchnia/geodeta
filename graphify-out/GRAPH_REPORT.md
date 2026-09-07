# Graph Report - geodeta  (2026-09-07)

## Corpus Check
- 4 files · ~7,130 words
- Verdict: corpus is large enough that graph structure adds value.

## Summary
- 23 nodes · 19 edges · 5 communities (3 shown, 2 thin omitted)
- Extraction: 100% EXTRACTED · 0% INFERRED · 0% AMBIGUOUS
- Token cost: 0 input · 0 output

## Graph Freshness
- Built from commit: `51642b64`
- Run `git rev-parse HEAD` and compare to check if the graph is stale.
- Run `graphify update .` after code changes (no API cost).

## Community Hubs (Navigation)
- [[_COMMUNITY_Community 0|Community 0]]
- [[_COMMUNITY_Community 1|Community 1]]
- [[_COMMUNITY_Community 2|Community 2]]
- [[_COMMUNITY_Community 3|Community 3]]

## God Nodes (most connected - your core abstractions)
1. `Research: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk` - 9 edges
2. `Site Plan: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk` - 7 edges
3. `hooks` - 2 edges
4. `Site architecture (9 pages — no /locations, no /blog)` - 2 edges
5. `SessionStart` - 1 edges
6. `Verified facts` - 1 edges
7. `Client-confirmed` - 1 edges
8. `Unverified / assumed` - 1 edges
9. `Sources` - 1 edges
10. `Review sentiment` - 1 edges

## Surprising Connections (you probably didn't know these)
- None detected - all connections are within the same source files.

## Communities (5 total, 2 thin omitted)

### Community 0 - "Community 0"
Cohesion: 0.20
Nodes (9): Client-confirmed, Competitors, Raw notes, Research: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk, Review sentiment, Sources, Tone signals, Unverified / assumed (+1 more)

### Community 1 - "Community 1"
Cohesion: 0.29
Nodes (6): Facts used, Open items to confirm with client (blocks final copy), Per-page content notes, Phased roadmap (compressed — solo business, not enterprise), Schema (per page), Site Plan: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk

## Knowledge Gaps
- **15 isolated node(s):** `SessionStart`, `Verified facts`, `Client-confirmed`, `Unverified / assumed`, `Sources` (+10 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **2 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **Why does `Site Plan: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk` connect `Community 1` to `Community 3`?**
  _High betweenness centrality (0.117) - this node is a cross-community bridge._
- **Why does `Site architecture (9 pages — no /locations, no /blog)` connect `Community 3` to `Community 1`?**
  _High betweenness centrality (0.030) - this node is a cross-community bridge._
- **What connects `SessionStart`, `Verified facts`, `Client-confirmed` to the rest of the system?**
  _15 weakly-connected nodes found - possible documentation gaps or missing edges._