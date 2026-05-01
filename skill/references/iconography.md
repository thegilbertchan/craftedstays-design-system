# Iconography — CraftedStays Design System

**Status:** DRAFT — locked together with D3 visual direction (2026-04-30).

Reference: Lovable's `/founders` use-case grid. Clean, single-color filled-glyph icons rotated across 6 brand accent hues, no background bubble, used to communicate breadth at a glance.

---

## Principles

1. **Function over decoration.** An icon earns its place when it accelerates scan-reading or anchors a card. If a card works without the icon, leave it out.
2. **One style throughout.** All icons are filled or line glyphs from a single library (Lucide, recommended) — never mix stroke with fill, never mix flat-color with gradient.
3. **Color = identity, not decoration.** Use the brand accent palette (6 colors) and rotate across grids. No invented colors. No saturation fades.
4. **No icon backgrounds.** Icons sit at the top-left of cards as floating glyphs. No circles, squares, gradient bubbles, or shadowed pills behind them. (This is the cleanest pattern from Lovable and stays out of the playful zone.)
5. **Geometry should feel "made," not stock.** Lucide and Phosphor are fine; avoid Heroicons (too generic) and Material (too heavy).

---

## Library

**Use Lucide ([lucide.dev](https://lucide.dev)).** Open-source, MIT, ~1,500 icons, line/filled variants, consistent stroke metrics, npm-installable, render-able as inline SVG. Keep style consistent across product UI and marketing.

**Allowed substitutes:** Phosphor (regular weight) for product surfaces if a needed glyph is missing in Lucide. Don't mix Phosphor and Lucide on the same surface.

**Disallowed:** Font Awesome, Material Icons, Heroicons (mixed with our visual register), generic emoji as functional icon.

---

## Sizes

| Use | Size | Stroke | Notes |
|---|---|---|---|
| Marketing icon-card | 32px | 2.0 | Top-left of card, no bg |
| Section eyebrow accent | 14px | 2.0 | Inline before eyebrow text, optional |
| Inline within body copy | 18px | 1.75 | Same color as text |
| Nav/UI affordance | 20px | 2.0 | Match font size of adjacent text |
| Button leading icon | 16px | 2.0 | gap 6–8px to label |
| Stat block decorator | 24px | 2.0 | Optional, subtle |

---

## Color rotation (6-brand-accent rule)

When laying out a grid of cards, rotate icon color across the brand-accent palette in this order:

| Slot | Hex | Name | Source |
|---|---|---|---|
| 1 | `#6B3795` | Deep Purple | Logo ring |
| 2 | `#E75A69` | Coral Red | Logo ring |
| 3 | `#FF9A3C` | Bright Orange | Brand accent |
| 4 | `#4ECDC4` | Teal Mint | Brand accent |
| 5 | `#2E86AB` | Deep Navy | Brand accent |
| 6 | `#D93A4B` | Deep Red | Brand accent |

**Rules:**
- Always start at slot 1 (deep purple, the strongest brand color) for the most important card / first card.
- Cycle through 1→6 in order. Don't shuffle — repeat predictability is the system's strength.
- For grids with fewer than 6 cards, use slots 1, 2, 3 (best 3 colors).
- For grids with more than 6 cards: the 7th card restarts at slot 1. Keep grids to ≤6 if possible.
- For *single* icons (not part of a grid): default to **deep purple** `#6B3795` unless context demands otherwise (e.g. an error icon = `#D93A4B`, a success icon = `#4ECDC4`).

---

## Card pattern (the "Lovable founders" pattern)

Use when listing categories, use cases, capabilities, audience segments, or anything else that maps to ~6 parallel options.

```
┌─────────────────────────────┐
│ [icon, color slot N]        │  ← icon, 32px, top-left, no bg
│                             │
│                             │  ← 36px space below icon
│ Card title                  │  ← Outfit 600, 24px, ink
│ One- or two-line desc that  │  ← 15px, ink-60, line-height 1.55
│ explains the card scope.    │
└─────────────────────────────┘
```

**Tokens:**
- Background: `#F2EFE6` (cream-2 — slightly darker than page cream, gives the card subtle weight)
- Border: `1px solid #ECEAE4`
- Border-radius: `24px`
- Padding: `36px 32px 32px`
- Icon-to-title gap: `36px`
- Title-to-desc gap: `12px`

**Hover:** border darkens to `#D8D4C6`. No shadow lift, no transform — keeps the page calm.

**Grid:** 3 columns × 2 rows, 20px gap. Stacks to 2 columns at tablet (768px), 1 column at mobile (480px).

---

## When NOT to use icon cards

- For 3 value-prop pillars ("why we're different"). Use the **interlocking-ring feature cards** instead — those are the most-on-brand element of the system, derived from the logo mark, and reserved for the strongest claims.
- For testimonial / proof / quote sections. Use the dedicated **quote section** pattern.
- For decoration with no information density. An icon card is a card with content — never a graphic placeholder.

---

## Custom icons (when Lucide doesn't have it)

If you need a glyph not in Lucide:
1. **First, check if a Lucide icon could be metaphorically reused.** "Owner portal" = `shield-check`, even though no icon literally says "owner portal."
2. **If no match,** use Phosphor regular weight as a fallback (no other libraries).
3. **If a custom glyph is unavoidable,** match Lucide's metrics:
   - 24×24 viewBox
   - 2.0 stroke width
   - Round line caps + joins
   - No fills (line-only) for marketing icons; filled-glyph allowed for product UI density
   - Single-color (use `currentColor`)
4. Document any custom glyph in this file's "Custom glyph registry" below so we don't redraw it next quarter.

### Custom glyph registry

*(empty — add entries as we ship them)*

---

## Validation checklist

When designing or generating an icon-card grid, confirm:

- [ ] All icons are from the same library (Lucide preferred)
- [ ] All icons render at 32px with stroke 2.0
- [ ] Icons rotate through the 6-brand-accent palette in order
- [ ] No icon has a background bubble, shadow, or gradient
- [ ] Card uses `#F2EFE6` bg, `#ECEAE4` border, 24px radius, 36/32 padding
- [ ] Title is Outfit 600, 24px; description is 15px, `#5F5F5D`
- [ ] Grid is 3-up on desktop, with 20px gap

If any item fails, you've drifted toward a generic SaaS template — fix before shipping.
