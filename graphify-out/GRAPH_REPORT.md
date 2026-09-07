# Graph Report - geodeta  (2026-09-07)

## Corpus Check
- 10 files · ~53,505 words
- Verdict: corpus is large enough that graph structure adds value.

## Summary
- 813 nodes · 813 edges · 12 communities (9 shown, 3 thin omitted)
- Extraction: 100% EXTRACTED · 0% INFERRED · 0% AMBIGUOUS
- Token cost: 0 input · 0 output

## Graph Freshness
- Built from commit: `f9cfc46a`
- Run `git rev-parse HEAD` and compare to check if the graph is stale.
- Run `graphify update .` after code changes (no API cost).

## Community Hubs (Navigation)
- [[_COMMUNITY_Community 0|Community 0]]
- [[_COMMUNITY_Community 1|Community 1]]
- [[_COMMUNITY_Community 2|Community 2]]
- [[_COMMUNITY_Community 3|Community 3]]
- [[_COMMUNITY_Community 5|Community 5]]
- [[_COMMUNITY_Community 6|Community 6]]
- [[_COMMUNITY_Community 9|Community 9]]
- [[_COMMUNITY_Community 10|Community 10]]
- [[_COMMUNITY_Community 11|Community 11]]

## God Nodes (most connected - your core abstractions)
1. `Research: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk` - 9 edges
2. `Product` - 8 edges
3. `Ga()` - 7 edges
4. `Site Plan: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk` - 7 edges
5. `Oa()` - 3 edges
6. `tV()` - 3 edges
7. `hooks` - 2 edges
8. `mobileBtn` - 2 edges
9. `mobileMenu` - 2 edges
10. `quoteForm` - 2 edges

## Surprising Connections (you probably didn't know these)
- None detected - all connections are within the same source files.

## Communities (12 total, 3 thin omitted)

### Community 0 - "Community 0"
Cohesion: 0.20
Nodes (9): Client-confirmed, Competitors, Raw notes, Research: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk, Review sentiment, Sources, Tone signals, Unverified / assumed (+1 more)

### Community 1 - "Community 1"
Cohesion: 0.22
Nodes (8): code:block1 (/                      Home), Facts used, Open items to confirm with client (blocks final copy), Per-page content notes, Phased roadmap (compressed — solo business, not enterprise), Schema (per page), Site architecture (9 pages — no /locations, no /blog), Site Plan: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk

### Community 6 - "Community 6"
Cohesion: 0.31
Nodes (6): formFeedback, iconClose, iconOpen, mobileBtn, mobileMenu, quoteForm

### Community 9 - "Community 9"
Cohesion: 0.00
Nodes (756): _, $0, $1, $2, $3, $4, $5, $6 (+748 more)

### Community 10 - "Community 10"
Cohesion: 0.22
Nodes (9): aV(), dV(), Ga(), hV(), Oa(), tV(), Ua(), xH() (+1 more)

### Community 11 - "Community 11"
Cohesion: 0.22
Nodes (8): Accessibility & Inclusion, Anti-references, Brand Personality, Design Principles, Product, Product Purpose, Register, Users

## Knowledge Gaps
- **782 isolated node(s):** `SessionStart`, `iconOpen`, `iconClose`, `i`, `Ea` (+777 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **3 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **What connects `SessionStart`, `iconOpen`, `iconClose` to the rest of the system?**
  _782 weakly-connected nodes found - possible documentation gaps or missing edges._
- **Should `Community 9` be split into smaller, more focused modules?**
  _Cohesion score 0.002642007926023778 - nodes in this community are weakly interconnected._