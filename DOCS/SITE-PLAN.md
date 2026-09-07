# Site Plan: Biuro Geodezyjne HORYZONT Łukasz Kowalczyk

Local-service template, scaled for a solo practitioner, single location. Brief (`brief.md`) overrides research.md where they conflict — phone, hours, and rating below are taken as given per the brief.

## Facts used
- Phone: 515 430 240 · Address: Byszyce 167, 32-020 Wieliczka · Hours: Mon–Fri 07:00–17:00, closed Sat/Sun
- 5.0★, 23 reviews (Google) · Sole proprietor, no existing website
- No confirmed price list or itemized services → service pages below are an **assumed standard set** for a Polish geodeta, must be confirmed with the client before writing final copy.

## Site architecture (9 pages — no /locations, no /blog)

```
/                      Home
/uslugi                Services hub
  /uslugi/mapa-do-celow-projektowych
  /uslugi/tyczenie-budynkow
  /uslugi/inwentaryzacja-powykonawcza
  /uslugi/podzial-nieruchomosci
  /uslugi/rozgraniczenie-nieruchomosci
/o-nas                 About (Łukasz Kowalczyk, credentials)
/opinie                Reviews (23 x 5★, embed/screenshot Google reviews)
/kontakt                Contact (phone, address, map, hours, form)
```

**Why no `/locations` or `/blog`:** one office, one owner, no evidence of multi-gmina branding need or content bandwidth. `areaServed` (Wieliczka + surrounding gminy: Niepołomice, Kraków, Skawina, Gdów) is handled via schema + one paragraph on the homepage/contact page, not a page-per-city — that's the GeoKing pattern and it's overkill until traffic data justifies it. Add city pages later only if a specific gmina starts converting.

Total: **9 pages** at launch (home, uslugi hub, 5 service pages, about, reviews, contact).

## Per-page content notes

| Page | Priority | Min words | Notes |
|---|---|---|---|
| Home | High | 400+ | Hero w/ phone CTA, service teaser tiles, 5★/23 reviews badge, service-area line, hours |
| /uslugi (hub) | High | 300+ | Links to 5 service pages, one-line description each |
| 5x service pages | High | 400–600 each | What it is, when a client needs it, process, "umów się" CTA. Confirm with client before publishing — these are assumed, not sourced |
| /o-nas | Medium | 250+ | Owner credentials (uprawnienia geodezyjne — get license number from client), years active if confirmed |
| /opinie | Medium | 150+ | Reviews already exist (23, 5.0) — reuse review sentiment: professionalism, speed, patient explanations, great contact |
| /kontakt | High | 150+ | Phone, address, embedded map, hours table, contact form |

## Schema (per page)

- Homepage: `LocalBusiness` (subtype `ProfessionalService` or generic) with `address`, `telephone: +48515430240`, `openingHours: Mo-Fr 07:00-17:00`, `geo`, `areaServed`, `aggregateRating` (5.0, 23 reviews)
- Service pages: `Service` nested under the `LocalBusiness`
- Contact: `ContactPage` + `LocalBusiness`
- Reviews: `AggregateRating` (already have 5.0/23 — real data, use it, don't fabricate individual review markup without permission)

## Phased roadmap (compressed — solo business, not enterprise)

**Phase 1 (weeks 1–2): confirm + build**
- Confirm at client checkpoint: phone, hours, license/uprawnienia number, actual service list, years in business
- Build 9 pages above, LocalBusiness schema, GBP claim/sync (NAP match), analytics + Search Console

**Phase 2 (weeks 3–4): local signals**
- Submit to relevant PL directories already indexing the business (GoWork, Panorama Firm, Złota Firma) — update NAP to match new site, add site link
- Request review responses on Google (owner replies to a few of the 23)
- Add 3–5 real project photos if client has them (survey maps, field work) — no stock geodesy photos

**Phase 3 (as traffic data justifies — no fixed date)**
- Only if Search Console shows demand: add a gmina-specific landing page (e.g. Niepołomice) or a 2nd service page split
- Optional 1-page FAQ if the same question keeps arriving by phone/email

No blog, no 12-month content calendar, no link-building campaign planned at launch — a solo geodeta's SEO value is 90% NAP consistency + GBP + a correct, fast, real site. Revisit scope only if the business grows past one person.

## Open items to confirm with client (blocks final copy)
1. Itemized service list + rough price ranges (or "wycena indywidualna")
2. Uprawnienia geodezyjne (license) number — required for E-E-A-T/trust on /o-nas
3. Years in business
4. Confirm phone + hours (brief says yes; independent sources couldn't verify — brief wins per instruction, but worth a quick client nod)
