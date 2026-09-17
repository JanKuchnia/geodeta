# Graph Report - geodeta  (2026-09-17)

## Corpus Check
- 12 files · ~55,141 words
- Verdict: corpus is large enough that graph structure adds value.

## Summary
- 838 nodes · 836 edges · 14 communities (12 shown, 2 thin omitted)
- Extraction: 100% EXTRACTED · 0% INFERRED · 0% AMBIGUOUS
- Token cost: 0 input · 0 output

## Graph Freshness
- Built from commit: `7a8e2a19`
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
- [[_COMMUNITY_Community 12|Community 12]]
- [[_COMMUNITY_Community 13|Community 13]]

## God Nodes (most connected - your core abstractions)
1. `Maps Intelligence Report — Biuro Geodezyjne HORYZONT Łukasz Kowalczyk` - 10 edges
2. `Research: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk` - 9 edges
3. `Product` - 8 edges
4. `Ga()` - 7 edges
5. `Site Plan: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk` - 7 edges
6. `3. GBP Profile Audit (Tier 0 — manual checklist)` - 4 edges
7. `env` - 3 edges
8. `Oa()` - 3 edges
9. `tV()` - 3 edges
10. `hooks` - 2 edges

## Surprising Connections (you probably didn't know these)
- None detected - all connections are within the same source files.

## Communities (14 total, 2 thin omitted)

### Community 0 - "Community 0"
Cohesion: 0.20
Nodes (9): Client-confirmed, Competitors, Raw notes, Research: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk, Review sentiment, Sources, Tone signals, Unverified / assumed (+1 more)

### Community 1 - "Community 1"
Cohesion: 0.22
Nodes (8): code:block1 (/                      Home), Facts used, Open items to confirm with client (blocks final copy), Per-page content notes, Phased roadmap (compressed — solo business, not enterprise), Schema (per page), Site architecture (9 pages — no /locations, no /blog), Site Plan: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk

### Community 2 - "Community 2"
Cohesion: 0.33
Nodes (5): env, ANTHROPIC_BASE_URL, ENABLE_TOOL_SEARCH, hooks, SessionStart

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

### Community 12 - "Community 12"
Cohesion: 0.13
Nodes (14): 1. Maps Health Score: Unscored (insufficient live data), 2. Data Available (from `DOCS/brief.md`), 3. GBP Profile Audit (Tier 0 — manual checklist), 4. Review Intelligence (partial), 5. Competitor Landscape (Tier 0 — Geoapify/OSM, 15km radius), 6. Cross-Platform NAP Verification, 7. Schema Recommendation, 8. Prioritized Actions (+6 more)

### Community 13 - "Community 13"
Cohesion: 0.29
Nodes (6): key, pid, port, previous, start_src, start_time

## Knowledge Gaps
- **801 isolated node(s):** `pid`, `start_src`, `start_time`, `port`, `key` (+796 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **2 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **What connects `pid`, `start_src`, `start_time` to the rest of the system?**
  _801 weakly-connected nodes found - possible documentation gaps or missing edges._
- **Should `Community 9` be split into smaller, more focused modules?**
  _Cohesion score 0.002642007926023778 - nodes in this community are weakly interconnected._
- **Should `Community 12` be split into smaller, more focused modules?**
  _Cohesion score 0.13333333333333333 - nodes in this community are weakly interconnected._