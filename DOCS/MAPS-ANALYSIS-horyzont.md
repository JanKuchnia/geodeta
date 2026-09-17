# Maps Intelligence Report — Biuro Geodezyjne HORYZONT Łukasz Kowalczyk

**Date:** 2026-09-17
**Location analyzed:** Byszyce 167, 32-020 Wieliczka (49.9275185, 20.0110643)
**Capability tier detected:** **Tier 0 (Free APIs only)** — no DataForSEO MCP connection available in this session. Analysis uses Nominatim (geocoding) + Geoapify Places (competitor discovery, OSM-backed) + manual checklist against data supplied in `DOCS/brief.md`.

---

## 1. Maps Health Score: Unscored (insufficient live data)

A numeric 0–100 GBP score requires live profile data (verification status, category setup, photo count, post activity, attributes) that only Google's own dashboard or a paid API (DataForSEO Tier 1) can retrieve. At Tier 0 this cannot be estimated without guessing — guessing would misrepresent the actual GBP state. See Section 3 for what **is** knowable vs. unknown.

---

## 2. Data Available (from `DOCS/brief.md`)

| Field | Value |
|---|---|
| Business name | Biuro Geodezyjne HORYZONT Łukasz Kowalczyk |
| Phone | 515 430 240 |
| Address | Byszyce 167, 32-020 Wieliczka |
| Rating | 5.0 / 5, 23 reviews |
| Hours | Mon–Fri 07:00–17:00, Sat–Sun closed |

---

## 3. GBP Profile Audit (Tier 0 — manual checklist)

Scoring per the 25-field checklist. Only fields verifiable from supplied data or public inference are scored; the rest are marked Unknown and need a manual check in the Google Business Profile dashboard (business.google.com) or a paid API session.

### Critical Fields (16 pts possible)

| Field | Status | Points |
|---|---|---|
| Primary category | Unknown — need to confirm exact GBP category (should be "Land surveyor" / closest Polish equivalent, not generic "Office") | ? |
| Additional categories | Unknown | ? |
| Business name | Present, matches real-world name | 2/2 |
| Physical address | Present — confirm it matches website NAP exactly | 1–2/2 |
| Phone number | Present, local Polish mobile number | 2/2 |
| Website URL | Unknown — confirm GBP links to the live site, not a placeholder | ? |
| Business hours | Present and specific (incl. explicit Sat/Sun closed) | 2/2 |
| Verified status | Unknown — must confirm the blue "Verified" badge is active | ? |

### Important Fields (16 pts possible)

| Field | Status |
|---|---|
| Business description | Unknown — check 250–750 char GBP description exists and names service + Wieliczka/Kraków area |
| Services list | Unknown — GBP services module should mirror `Uslugi.dc.html` |
| Products | N/A for this business type |
| Photos | Unknown — needs 10+: office exterior, survey equipment/fieldwork, team, sample deliverables |
| Photo recency | Unknown |
| Attributes | Unknown |
| Service areas | Unknown — critical for a service-area business (SAB); should list gmina Wieliczka + neighboring gminy/Kraków districts actually served |
| Services URL | Unknown |

### Supplementary Fields (18 pts possible)

| Field | Status |
|---|---|
| Google Posts | Unknown |
| Booking link | Unknown |
| Social profiles | Unknown |
| Logo | Unknown |
| Cover photo | Unknown |
| Videos | Unknown |
| Owner responses | Unknown — with 23 reviews, response rate is checkable directly on the listing |
| Q&A engagement | Unknown |

**Bottom line:** the only fields confirmable without live GBP access are name, phone, hours, and address presence — everything else needs a manual pass through the GBP dashboard. I can audit those instantly if you paste screenshots or the dashboard export, or if DataForSEO gets connected.

---

## 4. Review Intelligence (partial)

- **Rating:** 5.0 / 5 — excellent, at/above the ≥4.5 benchmark local ranking studies associate with map-pack visibility.
- **Volume:** 23 reviews. For a single-operator geodeta business this is a reasonable base but on the low side vs. established local competitors (50–100+ reviews) — volume itself is a ranking signal independent of average rating.
- **Velocity, response rate, recency, fake-review signals:** cannot be assessed without pulling individual review timestamps/text (requires live GBP access or DataForSEO Reviews API).

**Recommendation:** target steady review acquisition (post-job review requests) rather than bursts — sudden spikes without a distinct trigger (e.g. a promotion) are a spam-detection risk flag per Google's own guidance.

---

## 5. Competitor Landscape (Tier 0 — Geoapify/OSM, 15km radius)

**Important limitation:** OpenStreetMap's `office=surveyor` tag has sparse and inconsistent coverage for small Polish businesses — this is a real, structural gap in the free data source, not a search failure. Treat this list as a lower bound, not a complete competitor set.

| Business | Location | Phone | Website | Distance |
|---|---|---|---|---|
| MT Geodezja | Szara 20, 30-820 Kraków | +48 512 225 193 | mtgeodezja.pl | ~13km |
| Geodex II | Elizy Orzeszkowej, 31-070 Kraków | — | — | ~14km |

Only 2 competitors surfaced in a 15km radius via this method — implausibly low for the Kraków metro area, confirming the OSM tagging gap. **For an accurate competitor set, a manual Google Maps search for "geodeta Wieliczka" / "geodeta Kraków" is more reliable than this free-tier method for this industry.** I can do that via a live web search if you want — say the word.

---

## 6. Cross-Platform NAP Verification

| Platform | Status |
|---|---|
| Google Maps/GBP | Not directly queryable at Tier 0 — assumed to exist given the rating/review data in the brief, but not independently confirmed here |
| Bing Places | Not checked — no reliable free API; would need manual search |
| Apple Maps/Business Connect | Not checked — no public API |
| OpenStreetMap | **Not found** — the business itself does not appear tagged as a POI in OSM within the search radius. Adding it (free, via openstreetmap.org edit) is a quick win: feeds Nominatim/Overpass/Geoapify-based tools and some Maps competitors |

---

## 7. Schema Recommendation

Schema.org has no dedicated "Surveyor" subtype. Closest fit is a generic `LocalBusiness` with `ProfessionalService` type. Draft below — replace placeholder fields (`url`, `image`) with real assets before use; do **not** add self-authored `aggregateRating` markup (Google ignores/penalizes first-party review schema — only mark up genuinely third-party-embedded reviews).

```json
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Biuro Geodezyjne HORYZONT Łukasz Kowalczyk",
  "telephone": "+48515430240",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Byszyce 167",
    "postalCode": "32-020",
    "addressLocality": "Wieliczka",
    "addressCountry": "PL"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 49.9275185,
    "longitude": 20.0110643
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "07:00",
      "closes": "17:00"
    }
  ],
  "url": "REPLACE_WITH_LIVE_DOMAIN",
  "image": "REPLACE_WITH_LOGO_OR_OFFICE_PHOTO_URL",
  "areaServed": "gmina Wieliczka"
}
```

---

## 8. Prioritized Actions

**Critical**
1. Confirm the GBP listing is claimed and Verified — if unclaimed, claim it first; nothing else matters until this is true.
2. Set the most specific available primary category (Polish GBP category equivalent to "Land surveyor" / "Surveyor") — generic "Office" categorization suppresses local-pack visibility.
3. Add the business as a POI on OpenStreetMap (free, ~10 min) — closes the cross-platform gap found in Section 6.

**High**
4. Upload 10+ real photos: office, fieldwork/equipment, team, sample deliverable pages — currently unverifiable, likely a gap for a single-operator business.
5. Define service areas explicitly in GBP (gmina Wieliczka + specific neighboring gminy actually served) — critical for a service-area business.
6. Verify owner response rate on the 23 existing reviews; reply to any unanswered ones.

**Medium**
7. Write/refresh the 250–750 character GBP description with service + location keywords, matching the site's actual (non-slop) copy style established in `index.html`.
8. Establish a light, steady review-request cadence post-job rather than bulk asks — protects against spam-detection risk.

**Low**
9. Start occasional GBP Posts (service reminders, seasonal notices — e.g. survey season timing) if bandwidth allows; not urgent for a single-operator local business.
10. Once the website is live at its final domain, cross-check NAP consistency between the GBP listing, the site footer/contact page, and any directory listings.

---

## 9. Limitations Disclaimer

This report was built at **Tier 0** (free APIs only — Overpass API was unreachable, returning HTTP 406 on all query variants; Geoapify Places API was used instead). The following could **not** be assessed and require either manual login to the Google Business Profile dashboard or a connected DataForSEO MCP session:

- Actual GBP verification status, category selection, photo count/recency, attributes, posts, Q&A, booking links
- Review velocity, sentiment, individual review text, owner response rate
- Geo-grid rank tracking (where the business ranks in the map pack from different points around Wieliczka/Kraków)
- Full competitor set (the 2 found here are a known undercount — OSM tagging coverage gap)

Next best step for a complete picture: either you share GBP dashboard screenshots/exports, or we connect a DataForSEO API key for live data.
