---
name: craftedstays-design
description: Build new UI for CraftedStays (SaaS for short-term rental operators) — homepage, marketing pages, sections, emails, dashboards — in the locked CraftedStays design system. Tokens are warm cream parchment + Outfit sans + Lucide icons + purple/coral brand identity. Use whenever the user asks to build a CraftedStays page/section/email, design with our brand system, make a feature/pricing/about page, or works inside craftedstays.co or the CraftedStays dashboard. Do NOT use for client homepages (use build-homepage), generic landing-page advice (use landing-page-optimization), or non-CraftedStays codebases. Trigger aggressively when the request mentions CraftedStays explicitly OR when the working context is clearly CraftedStays own brand surfaces (marketing site, dashboard, emails, brand collateral) — even if the user does not say the magic words.
---

# CraftedStays Design System

You are designing UI for **CraftedStays' own brand surfaces** (their marketing site, dashboard product, emails, brand collateral) — *not* for their hospitality clients. The design system is locked. Your job is to apply it accurately, not invent.

## Before you write any code

### 1. Read the canonical spec

Read `references/DESIGN.md` (~30KB, 9 sections) **in full**. This is the source of truth for tokens, components, layout, depth, do/don'ts, responsive rules, and agent prompts. Don't skim — every component the user might ask for is specified there.

### 2. Read the iconography sub-spec

Read `references/iconography.md` for icon library rules (Lucide), the 6-color rotation, and the icon-card pattern. Marketing icons are 32px Lucide line glyphs at top-left of cards, no background bubble, color rotates through the 6-accent palette in slot order.

### 3. Glance at the exemplar

Open `references/exemplar.html` to see the locked direction (D3) composed end-to-end. It exercises every primitive: nav, hero with eyebrow pill + gradient accent text + soft radial wash, stats bar, 3-up feature cards with interlocking-ring icons, 6-up icon cards with Lucide glyphs, structured 2-col quote section, gradient CTA, newsletter strip, 4-col footer + bottom legal. When unsure how a component composes, open the exemplar and match its structure.

These three files give you everything you need. If the user asks for a component not covered, follow the do/don'ts in DESIGN.md § 7 to make a principled choice rather than inventing.

## Default output format

Unless the user specifies otherwise, output a **self-contained HTML file** with embedded CSS — no build step, no framework, no external CSS files. This makes it openable in any browser, easy to iterate on, and trivially convertible to React, Astro, Wix Velo, or Elementor later.

**Always include:**
- Outfit via Google Fonts: `<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">`
- CSS custom properties at `:root` matching DESIGN.md § 2 token names (`--cream`, `--ink`, `--purple`, `--grad`, etc.)
- Lucide icons inline as SVG with `currentColor` (do not link `lucide.dev` CDN — inline keeps the file portable)
- Comments noting the lucide icon name in each SVG, e.g. `<!-- lucide: globe -->`

**If the user names a framework** (React, Vue, Astro, etc.), match it but keep the same token names and component composition.

## Quick token reference (memorize before generating)

```
Page bg:      #F7F4ED (cream)
Card bg:      #F2EFE6 (cream-2 — slightly darker)
Lightest:     #FCFBF8 (paper — for newsletter, quote, button text)
Text heading: #1C1C1C (ink — warm near-black)
Text body:    #5F5F5D (ink-60)
Border:       #ECEAE4 (line — warm hairline)
Brand purple: #6B3795 (logo)
Brand coral:  #E75A69 (logo)
Gradient:     linear-gradient(95deg, #6B3795 0%, #E75A69 100%)

Font:    Outfit only (400 / 480 hero-only / 500 / 600). No serif. No second family.
Icons:   Lucide only. 32px on cards, 14–20px elsewhere. currentColor.
Buttons: Inset shadow on dark primary — see DESIGN.md § 4.
Radius:  6 / 8 / 12 / 16 / 24 / 9999 (eyebrow pills, social icons).
Spacing: 112–128px between major sections, 32–36px inside cards.
```

The full reference is in DESIGN.md § 9 ("Agent Prompt Guide") with copy-paste prompts per component.

## Hard rules (do not violate)

These are the brand's load-bearing constraints. Violating them produces a page that *looks* like CraftedStays but isn't.

- **Page background is `#F7F4ED`. Never `#FFFFFF`.** The cream is the brand's signature warmth and is non-negotiable.
- **Outfit only.** Don't add a serif. Don't pair fonts. Hierarchy comes from size, weight (400/480/600), and color.
- **Lucide icons only.** Never Font Awesome (currently being retired from craftedstays.co), never Heroicons, never Material, never emoji as a functional icon. Phosphor regular is the only allowed substitute when Lucide lacks a glyph.
- **No dark mode.** Audience isn't tech-savvy; dark UIs alienate. Don't propose it as an option.
- **No customer/property counts in copy.** "65% conversion lift" is fine; "200 property managers trust us" is forbidden. Hard rule from existing brand voice.
- **Gradient on emphasis only.** Purple→coral text is for 2–4 word focal phrases inside a headline or CTA — never large blocks, never decorative.
- **Borders, not shadows, define cards.** The only shadow allowed on a card is the inset on dark buttons. No drop shadows on cards. Hover states change `border-color` to `#D8D4C6`, no transform, no lift.
- **Six-accent rotation is sacred.** When laying out icon-card grids, rotate `purple → coral → orange → teal → navy → red` in slot order. Slot 1 is always deep purple, always.
- **No em dashes (—) in user-facing copy** unless quoting an existing brand asset. Prefer commas, periods, or rephrase.

## Common asks → which section resolves them

| User asks for... | Read DESIGN.md § |
|---|---|
| Hero section | 4 (Component Stylings → Hero) + 9 (example prompts) |
| Feature cards (value-prop pillars, 3-up) | 4 (Cards → Feature card) — uses interlocking-ring icons |
| Use-case grid (~6 items) | 4 (Cards → Icon card) + iconography.md |
| Quote/testimonial | 4 (Quote section) — structured 2-col with curly purple quotes |
| Stats bar | 4 (Stats bar) — 4-up under hero, no scale exposure |
| CTA / closer | 4 (CTA section) — gradient on the closing phrase |
| Newsletter strip | 4 (Newsletter strip) |
| Footer | 4 (Footer) — 4-col grid + bottom legal row |
| Buttons | 4 (Buttons) — primary/ghost/inline-link |
| Eyebrow / section labels | 4 (Eyebrow pill, Section eyebrow) |
| Spacing / layout | 5 (Layout Principles) |
| Color usage | 2 (Color Palette & Roles) |
| Typography hierarchy | 3 (Typography Rules) |
| Icon usage / new icons | iconography.md (full) |
| Responsive collapse | 8 (Responsive Behavior) |
| "Is this allowed?" | 7 (Do's and Don'ts) |

## Composition heuristics

When the user asks for a *page* (not a section), default to this composition unless they specify otherwise:

1. **Nav** — sticky, cream bg, 14px Outfit links, ghost + primary CTA right-aligned
2. **Hero** — eyebrow pill, gradient-accent H1 (clamp 48–96), 19px subhead, primary + ghost CTAs, optional inline-link row, optional 280px-tall mockup container
3. **Stats bar** — 4-up, immediately below hero, 1px top + bottom borders
4. **Feature cards (3-up)** — value-prop pillars with interlocking-ring icons, 12px radius. Use only for the strongest claims.
5. **Icon cards (6-up)** — use-case taxonomy with Lucide glyphs, 24px radius. The Lovable founders pattern.
6. **Quote section** — single anchor testimonial, structured 2-col on `--paper` bg
7. **Newsletter strip** — `--paper` bg, 2-col, email input + primary button
8. **CTA closer** — centered, soft radial wash, gradient on closing phrase
9. **Footer** — 4-col grid (brand 1.6× + 3 link cols) + bottom legal row

Skip sections that don't earn their keep. A focused 5-section page is better than a forced 9-section template. Match what the user actually asked for.

## Voice and copy guidelines

The visual system pairs with a copy voice. Highlights:

- First-person founder voice when narrative; outcome metrics over feature lists; quiet confidence over hype
- Avoid: "thrilled," "excited," "leverage," "synergy," "unlock value," "disruptive," "magical"
- Avoid scale exposure (no property counts, no customer counts)
- Strong frames: "Built for the next era of short-term rentals," "Crafted for conversion, not just display," "Designed for AI-era discovery"

If the user's copy fights the design's restraint, flag it and offer alternatives. Don't just style ungrounded marketing speak.

## Validation before shipping

Run this checklist before handing back any output:

- [ ] Page bg is `#F7F4ED` (or a deliberate `--paper` / `--cream-2` variation, never white)
- [ ] Only Outfit is loaded — no serif, no Inter, no Montserrat
- [ ] All icons are Lucide line glyphs in `currentColor` — none from other libraries
- [ ] Primary buttons have the inset shadow (`inset 0 0.5px 0 0 rgba(255,255,255,.2), inset 0 0 0 0.5px rgba(0,0,0,.2), 0 1px 2px 0 rgba(0,0,0,.05)`)
- [ ] If gradient text is used, it's purple→coral only (`linear-gradient(95deg, #6B3795 0%, #E75A69 100%)`) — not 3-color rainbow
- [ ] Icon-card grids rotate accent colors in slot order (purple → coral → orange → teal → navy → red)
- [ ] No customer/property counts appear in the copy
- [ ] Cards use `1px solid #ECEAE4` border, never drop shadows
- [ ] Section padding is 112–128px between major blocks
- [ ] No em dashes in user-facing copy

If anything fails, fix before showing the user.

## When the user wants iteration

Treat the exemplar's structure as the default. When the user says "make it more X" (more energetic, more restrained, more premium), DO NOT leave the system. Adjust *within* it:

- More energetic → larger gradient phrase, slightly bigger hero, animate the gradient dot
- More restrained → tighter spacing, drop the hero mockup wrapper, single CTA instead of dual
- More premium → wider tracking on caps eyebrows, lower contrast subhead, no atmospheric wash
- More approachable → softer copy, larger button radius (8 vs 6), warmer gradient stops

The system is wide enough to absorb tone shifts without breaking. If the user wants to change a *token* (different brand color, different font), pause and explain that's a system change requiring DESIGN.md update — not a one-page improvisation.
