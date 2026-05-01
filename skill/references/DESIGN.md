# Design System: CraftedStays

> Direct booking infrastructure for serious short-term rental operators.
> Crafted, considered, inspirational. Warm without being playful, modern without being clinical.

**Reference implementation:** `mockups/D3-locked.html`
**Iconography sub-spec:** `03_iconography.md`
**Source mood-boards:** `mockups/A-editorial-premium.html`, `B-precision-saas.html`, `D-lovable-adapted.html`, `D2-lovable-tightened.html`, `E-inspirational-hybrid.html`

---

## 1. Visual Theme & Atmosphere

CraftedStays' visual system reads as *crafted*, not assembled. The page sits on a warm parchment cream (`#F7F4ED`) — never pure white — that signals "made with care" before a single word is read. This isn't decorative warmth; it's a deliberate rejection of the cold-white SaaS template register, and the foundation of the entire system.

The system runs on a single typeface (**Outfit**, a humanist geometric sans) used at three weights — 400 for body, 480 for display lightness, 600 for confident headings. There are no serifs. The display weight 480 (a non-standard intermediary the variable font allows) gives hero headlines a softer, more confident presence than 600 — strong enough to lead, light enough to feel inviting. Headlines use compressed letter-spacing (-0.025em) at large sizes for editorial weight.

Color is **opacity-driven and restrained**. All neutrals derive from a single ink color (`#1C1C1C`) at varying opacities — no arbitrary gray hexes. The brand identity (deep purple `#6B3795` and coral `#E75A69` from the logo's interlocking rings) appears as a *gradient on emphasis* (hero accent text, CTA accent, eyebrow dots) — never as solid background fills. Six brand-accent colors rotate across icon-card grids, mapped 1:1 to the brand palette.

Depth is **shallow and warm**. No dramatic drop shadows. Borders define cards (`#ECEAE4` hairline). The signature button uses Lovable's inset-shadow technique — a multi-layer treatment that creates a tactile, *pressed-into-the-surface* feeling rather than a hovering-above-surface feeling. Soft radial-gradient washes (purple + coral at very low opacity) animate the hero and CTA backgrounds without weight. The whole system is **flat with intent**.

**Key Characteristics:**
- Warm parchment foundation: `#F7F4ED` page, `#F2EFE6` card, `#FCFBF8` paper — a 3-step cream ladder
- Single-typeface system (Outfit) with 400/480/600 weight discipline
- Opacity-derived neutral scale — every gray comes from `#1C1C1C` at a defined opacity
- Purple→coral gradient (`linear-gradient(95deg, #6B3795 0%, #E75A69 100%)`) reserved for emphasis text and accent dots
- Six-color icon-card rotation: purple → coral → orange → teal → navy → red
- Lovable inset-shadow buttons: `inset 0 0.5px 0 0 rgba(255,255,255,.2), inset 0 0 0 0.5px rgba(0,0,0,.2), 0 1px 2px 0 rgba(0,0,0,.05)`
- Lucide icons exclusively, single-color line glyphs at top-left of cards (no background bubbles)
- Soft radial-gradient washes (≤10% opacity) instead of solid color blocks for atmospheric depth
- Pill-shaped eyebrow tags (`9999px` radius), rounded buttons (6–8px), card radius scale (12px → 16px → 24px)
- No dark mode. No serifs. No Font Awesome. No customer/property counts in copy.

---

## 2. Color Palette & Roles

### Page surfaces (the cream ladder)
| Name | Hex | Role |
|------|-----|------|
| **Cream** | `#F7F4ED` | Page background, nav bg. The brand signature — warm parchment. |
| **Cream-2** | `#F2EFE6` | Footer bg, icon-card bg, secondary-section fill. Slightly darker than page; gives cards subtle weight. |
| **Paper** | `#FCFBF8` | Lightest cream — newsletter strip bg, quote section bg, button text on dark, eyebrow pill bg. Off-white, never `#FFFFFF`. |

### Ink (text + interactive)
| Name | Hex | Role |
|------|-----|------|
| **Ink** | `#1C1C1C` | Primary text, headings, dark surfaces, primary buttons. Warm near-black, not pure black. |
| **Ink-83** | `rgba(28,28,28,0.83)` | Strong secondary text. Rarely used; favor `--ink-60` for body. |
| **Ink-60** | `#5F5F5D` | Secondary text, descriptions, captions. The default body-text gray. |
| **Ink-40** | `rgba(28,28,28,0.40)` | Interactive borders (ghost buttons), placeholder text, link underlines. |
| **Ink-12** | `rgba(28,28,28,0.12)` | Divider lines (rare — prefer `--line`). |
| **Ink-04** | `rgba(28,28,28,0.04)` | Subtle hover backgrounds, decorative grid patterns. |

### Borders
| Name | Hex | Role |
|------|-----|------|
| **Line** | `#ECEAE4` | Standard card border, divider line, input border. The warm divider — never gray. |
| **Line-strong** | `#D8D4C6` | Card hover state, stronger dividers. |

### Brand identity
| Name | Hex | Role |
|------|-----|------|
| **Purple** | `#6B3795` | Logo ring 1. Primary brand color. Most important icon-card slot, eyebrow dot start, gradient start. |
| **Coral** | `#E75A69` | Logo ring 2. Secondary brand color. Gradient end, second icon-card slot. |

### Accent palette (icon-card rotation)
Rotate in this exact order across grids of cards. Slot 1 always goes to the most important card.
| Slot | Hex | Name |
|------|-----|------|
| 1 | `#6B3795` | Deep Purple |
| 2 | `#E75A69` | Coral |
| 3 | `#FF9A3C` | Bright Orange |
| 4 | `#4ECDC4` | Teal Mint |
| 5 | `#2E86AB` | Deep Navy |
| 6 | `#D93A4B` | Deep Red |

### The signature gradient
| Token | Value | Use |
|-------|-------|-----|
| **Grad** | `linear-gradient(95deg, #6B3795 0%, #E75A69 100%)` | Hero accent text, CTA accent text, eyebrow pill dot, primary button alt. Always purple→coral, never includes orange. The 95deg angle is intentional — slightly off horizontal. |

### Inset button shadow
The system's signature interaction surface. Apply to dark primary buttons, branded eyebrow pills, and the dev tag overlay.
```
box-shadow:
  inset 0 0.5px 0 0 rgba(255,255,255,.2),
  inset 0 0 0 0.5px rgba(0,0,0,.2),
  0 1px 2px 0 rgba(0,0,0,.05);
```

---

## 3. Typography Rules

### Font family
- **Primary:** `Outfit` (Google Fonts, variable). Fallbacks: `ui-sans-serif, system-ui, sans-serif`.
- **Weights loaded:** 400, 500, 600, 700.
- **Special weight:** 480 (intermediary; available because Outfit is variable). Used only for hero H1.
- **No serif.** No second family. Outfit handles every type role.
- Load via `<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">`.

### Hierarchy

| Role | Size | Weight | Line Height | Letter Spacing | Notes |
|------|------|--------|-------------|----------------|-------|
| **Hero H1** | `clamp(48px, 7.2vw, 96px)` | 480 | 1.0 | -0.025em | Display weight 480, max 18ch, accent span = weight 600 with gradient |
| **Section title** | `clamp(34px, 4.6vw, 56px)` | 600 | 1.05 | -0.025em | Used for `.section-title` |
| **CTA H2** | `clamp(36px, 5vw, 68px)` | 600 | 1.0 | -0.025em | Closer headline; can take accent gradient on a single phrase |
| **Newsletter / quote h3** | 24–28px | 500–600 | 1.15–1.4 | -0.015 to -0.02em | Mid-weight headers |
| **Icon-card title** | 24px | 600 | 1.2 | -0.02em | The Lovable founders pattern |
| **Feature card h3** | 20px | 500 | 1.25 | -0.01em | Smaller, paired with ring-icon |
| **Footer column h4** | 13px | 600 | normal | 0.06em + uppercase | Column headers |
| **Hero subhead** | 19px | 400 | 1.55 | normal | Max 58ch; ink-60 |
| **Body — large** | 18px | 400 | 1.55 | normal | Section ledes |
| **Body — default** | 15px | 400 | 1.55–1.6 | normal | Card descriptions, footer |
| **Body — small** | 14px | 400 | 1.5 | normal | Footer links, nav links |
| **Stat number** | 44px | 600 | 1.0 | -0.025em | Big number, paired with 13px label |
| **Eyebrow** | 12–13px | 600 | normal | 0.06–0.18em + uppercase | Section labels, with leading 14px line accent |
| **Button** | 14–15px | 400 (primary) / 600 (other) | 1.4–1.5 | normal | See § 4 |
| **Caption** | 13px | 400 | 1.5 | normal | Stat labels, footer bottom |

### Principles
- **One family does it all.** Hierarchy comes from size, weight, and color — not type pairing. Resist the urge to add a serif.
- **Weight 480 is the system's quiet flex.** Used only for hero H1. It creates a "lighter than 600 but more confident than regular" register. Don't use 480 elsewhere.
- **Compression scales with size.** Letter-spacing is `-0.025em` at display sizes (>34px), `-0.015em` to `-0.02em` at sub-display, normal at body. Never positive.
- **Accent text uses the gradient + bumped weight.** Pattern: base headline at weight 480, `<span class="accent">` at weight 600 with gradient — creates visual focus inside the headline.
- **Eyebrows always lead with a 14px line.** Pattern: `--- THE PLATFORM`. The leading dash is part of the editorial register.

---

## 4. Component Stylings

### Buttons

**Primary (dark with inset shadow) — the signature button**
```css
background: #1C1C1C;
color: #FCFBF8;
padding: 8px 16px;     /* default */
border-radius: 6px;
font-weight: 400;
font-size: 15px;
border: none;
box-shadow:
  inset 0 0.5px 0 0 rgba(255,255,255,.2),
  inset 0 0 0 0.5px rgba(0,0,0,.2),
  0 1px 2px 0 rgba(0,0,0,.05);
```
- Hero size: padding `10px 20px`. CTA size: padding `12px 24px`.
- Active state: `opacity: 0.8`. No hover transform, no color shift.
- Optional: append arrow `→` via `.btn-arrow::after`; arrow translates 2px on hover.
- **Use:** Primary CTA on every section ("Start building", "Get started", "Subscribe", "Book a demo").

**Ghost (outlined)**
```css
background: transparent;
color: #1C1C1C;
border: 1px solid rgba(28,28,28,0.40);
padding: 8px 16px;
border-radius: 6px;
```
- Active: `opacity: 0.8`. **Use:** Secondary CTA paired with primary ("See it in action", "Sign in").

**Inline link (with underline)**
```css
color: #1C1C1C;
text-decoration: underline;
text-underline-offset: 3px;
text-decoration-color: rgba(28,28,28,0.40);
text-decoration-thickness: 1px;
font-size: 14px;
font-weight: 400;
```
- Hover: `text-decoration-color: #1C1C1C`.
- **Use:** Tertiary actions in hero, footer links. Replaces "playful pill" links — never use pills for tertiary actions.

**Tertiary action separator pattern**
For "Watch the demo · Read the playbook" style links: render as two `.link-inline` separated by a 3px ink-40 dot (`<span class="dot"></span>`).

### Eyebrow pill (hero)
```css
display: inline-flex;
gap: 8px;
padding: 6px 14px;
border-radius: 999px;
background: #FCFBF8;
border: 1px solid #ECEAE4;
font-size: 13px;
font-weight: 400;
color: #1C1C1C;
box-shadow: 0 1px 2px rgba(0,0,0,.03);
```
- Leading 6px dot filled with the brand gradient: `background: var(--grad)`.
- **Use:** Above the H1 in hero. Holds positioning copy.

### Section eyebrow (mid-page)
```
[14px line accent] EYEBROW TEXT
```
- 12px font, weight 600, ink-60, uppercase, letter-spacing `0.14em`.
- `::before` pseudo-element renders a 14px × 1px line in `--ink-40`, with `10px` right margin.
- **Use:** Above section titles. Don't combine with the pill eyebrow.

### Cards

**Feature card (3-up, ring icon) — for value-prop pillars**
```css
background: #F7F4ED;       /* same as page — borders define */
border: 1px solid #ECEAE4;
border-radius: 12px;
padding: 32px;
```
- Hover: `border-color: #D8D4C6`. No transform, no shadow lift.
- **Icon:** A 40px circular pill (`#FCFBF8` bg, hairline border, inset shadow) containing a 16px circle outline in the rotating brand color (purple → coral → orange across the 3 cards). This is the *interlocking ring* motif from the logo.
- Title: 20px, weight 500. Body: 15px, ink-60.
- **Use:** Reserve for the 3 strongest claims / value-prop pillars only. The ring icon is the most-on-brand element of the system.

**Icon card (6-up, Lucide glyph) — for use-case taxonomy**
```css
background: #F2EFE6;       /* cream-2 — slightly darker than page */
border: 1px solid #ECEAE4;
border-radius: 24px;
padding: 36px 32px 32px;
```
- Hover: `border-color: #D8D4C6`.
- **Icon:** 32px Lucide line glyph at top-left, no background bubble, color rotates through the 6-accent palette in slot order.
- Icon-to-title gap: 36px. Title-to-desc gap: 12px.
- Title: 24px, weight 600. Body: 15px, ink-60, line-height 1.55.
- Grid: 3 columns × 2 rows, 20px gap.
- **Use:** Use-case grids, capability lists, audience segments — anything that maps to ~6 parallel options. Full rules in `03_iconography.md`.

**Card radius scale:** 12px (feature), 16px (hero mockup, newsletter input), 24px (icon card). Never mix radii within the same row.

### Inputs
```css
flex: 1;
padding: 11px 16px;
border: 1px solid #ECEAE4;
border-radius: 8px;
background: #FCFBF8;
font-family: 'Outfit';
font-size: 15px;
color: #1C1C1C;
outline: none;
```
- Placeholder: `--ink-40`.
- Focus: `border-color: rgba(28,28,28,0.40)`, `box-shadow: 0 0 0 3px rgba(28,28,28,.05)` — subtle ring, not a colored highlight.

### Navigation
- Padding: `20px 0`. Background: `--cream` (matches page; no border by default).
- Logo: `.logo-mark` (24px interlocking circles, purple + coral) + wordmark "CraftedStays" in Outfit 600 18px.
- Links: 14px, weight 400, ink. Hover = underline.
- Right side: ghost "Sign in" + primary "Get started".

### Quote section
- Background: `--paper` (`#FCFBF8`). Border-top + border-bottom: `1px solid --line`.
- 2-column grid: `1fr 1.4fr`, 64px gap, align-items `start`.
- **Left col:** small eyebrow ("FROM THE FIELD") + h3 ("Why operators switch.")
- **Right col:** quote-body (24px, weight 400, ink) wrapped in colored curly quotes (`\201C` / `\201D` in `--purple`). Then attribution row: 32px circular pill mark + role/portfolio descriptor.
- Padding: `120px 0`.
- **Use:** Customer testimonials, social proof. Replaces centered-italic-quote patterns.

### Stats bar
- Padding: `48px 0`. Top + bottom 1px borders. Background: `--cream`.
- 4-column grid, equal flex.
- Each stat: bold number (44px, weight 600, -0.025em tracking) + 13px caption (ink-60).
- **Use:** Right after hero, or after CTA. Don't include customer/property counts (see do/don'ts).

### CTA section (closer)
- Padding: `128px 0`, text-align center.
- Background: page cream + radial-gradient wash overlay (coral 8% + purple 5%, both centered).
- H2: 36–68px clamp, weight 600. Single phrase wrapped in `<span class="accent">` for gradient color (e.g. "finally crafted.").
- Subhead: 18px, ink-60, max 50ch.
- Single primary button.

### Newsletter strip
- Padding: `64px 0`. Background: `--paper`. Border-top: `1px solid --line`.
- 2-column grid: `1.2fr 1fr`, 48px gap, align-items center.
- Left: h3 + 1-line description.
- Right: input + primary button, 8px gap.

### Footer
- Padding: `64px 0 32px`. Background: `--cream-2`. Border-top: `1px solid --line`.
- **Top: 4-column grid** `1.6fr 1fr 1fr 1fr`, 48px gap, 48px bottom margin.
  - Col 1 (brand, 1.6×): logo + tagline + contact block (email, phone) + address block + social row.
  - Col 2–4 (link cols): h4 (13px uppercase) + ul of 14px ink-60 links, 11px row gap.
- **Bottom row:** 1px top border, 28px top padding. Logo mark + © line on the left, legal links pushed right (24px gap).
- **Social icons:** 32px circular pill, hairline border, paper bg, 14px Lucide glyph in ink-60 (LinkedIn, X, YouTube).

### Atmospheric backgrounds
The system uses **soft radial-gradient washes** at low opacity to give certain sections atmospheric depth without weight.
- **Hero:** `radial-gradient(55% 45% at 82% 18%, rgba(231,90,105,0.10), transparent 60%), radial-gradient(50% 40% at 12% 30%, rgba(107,55,149,0.08), transparent 65%)`. Diagonal corners, very subtle.
- **CTA:** Centered washes for symmetry: `radial-gradient(50% 50% at 50% 50%, rgba(231,90,105,0.08), transparent 70%), radial-gradient(60% 60% at 50% 50%, rgba(107,55,149,0.05), transparent 70%)`.
- **Never exceed 10% opacity.** This is atmosphere, not decoration.

---

## 5. Layout Principles

### Spacing system
- Base unit: 8px.
- Scale: `8, 10, 12, 16, 20, 24, 28, 32, 40, 48, 56, 64, 80, 96, 112, 120, 128`.
- Section vertical padding ranges 64px (newsletter) → 128px (CTA), with 96–120px the typical default.
- Dense areas (cards, button paddings): 8–16px.

### Grid & container
- **Max content width:** 1240px (`--max`).
- **Container padding:** 32px left/right (`.wrap`).
- **Section internal grid:** 3 cols (features, icon cards), 4 cols (stats, footer link cols), 2 cols (newsletter, quote).

### Whitespace philosophy
- **Hero:** `96px 0 128px` — generous opening room.
- **Sections:** 112–128px vertical between major content blocks.
- **Inside cards:** 32–36px padding; tighter than section spacing for content density contrast.
- **Tight components** (buttons, inputs, eyebrows): 6–16px padding.

### Border radius scale
| Level | Radius | Use |
|-------|--------|-----|
| Pill | `9999px` | Eyebrow tags, social icons, logo-mark accent rings, attribution marks |
| Sharp | `6px` | Buttons (default), inputs (small variant) |
| Comfortable | `8px` | Inputs (large), proof cards |
| Card | `12px` | Feature cards (3-up) |
| Container | `16px` | Hero mockup wrapper, large surfaces |
| Generous | `24px` | Icon cards (6-up) — the Lovable founders pattern |

### Logo mark (interlocking rings)
The system's signature decorative element. Render as two overlapping circle outlines:
```css
.logo-mark { width: 24px; height: 24px; position: relative; }
.logo-mark::before, .logo-mark::after {
  content: ""; position: absolute;
  width: 16px; height: 16px;
  border: 2.5px solid var(--purple);
  border-radius: 50%;
}
.logo-mark::before { left: 0; top: 4px; }
.logo-mark::after { right: 0; top: 4px; border-color: var(--coral); }
```
- Scale by adjusting the wrapper size; ring sizes scale proportionally (0.66× wrapper).
- 18px wrapper → 12px rings (footer bottom, small UI). 24px wrapper → 16px rings (default).

---

## 6. Depth & Elevation

| Level | Treatment | Use |
|-------|-----------|-----|
| **0 — Flat** | No shadow, sits on cream | Default for all sections, page surface |
| **1 — Bordered** | `1px solid #ECEAE4` | Cards, inputs, eyebrow pill, dividers |
| **2 — Inset** | The signature 3-layer inset shadow | Primary buttons, branded pills, dev tag |
| **3 — Atmospheric** | Soft radial-gradient washes ≤10% opacity | Hero, CTA, decorative-only |
| **4 — Focus** | `box-shadow: 0 0 0 3px rgba(28,28,28,.05)` + `border-color: ink-40` | Input focus state |

### Shadow philosophy
The depth system is **intentionally shallow**. The brand says "crafted, considered" — so we don't pile up drop shadows. Cards float on cream because of warm hairline borders, not lift. The only "real" shadow is the **inset on dark buttons**, which signals tactility (pressed-into-surface) rather than altitude. The atmospheric washes give compositional depth without box-shadow weight.

### Decorative depth
- Hero / CTA backgrounds: soft 2-color radial wash (purple + coral) at low opacity. Atmospheric, not foregrounded.
- No section dividers as bold lines — section transitions handled by background color shifts and spacing.

---

## 7. Do's and Don'ts

### Do
- ✅ Use the cream ladder (`#F7F4ED` page → `#F2EFE6` cards → `#FCFBF8` paper). Three values, three roles.
- ✅ Derive every gray from `#1C1C1C` at opacity. Never invent gray hexes.
- ✅ Use Outfit 480 only for hero H1. Everything else is 400 / 500 / 600.
- ✅ Apply the inset shadow to every primary dark button. It's the system's tactile signature.
- ✅ Use Lucide icons exclusively (Phosphor regular only as fallback). Always `currentColor`.
- ✅ Rotate the 6-accent palette in slot order across icon-card grids. Slot 1 always = deep purple, always.
- ✅ Use the purple→coral gradient for emphasis spans only — short phrases, ≤4 words ideally.
- ✅ Leave generous whitespace at section boundaries (112–128px). The brand earns its space.
- ✅ Use warm `#ECEAE4` borders to define cards instead of drop shadows.
- ✅ Set `text-underline-offset: 3px` on every text link for editorial polish.
- ✅ Use the `.link-inline` pattern with dot separator for tertiary actions ("Watch demo · Read playbook").

### Don't
- ❌ **Don't use `#FFFFFF` as a page background.** The cream is intentional and load-bearing.
- ❌ **Don't introduce a serif typeface.** Outfit alone carries every role.
- ❌ **Don't use weight 700 or higher** (Outfit 700 is loaded but reserved for emergencies). 600 is the system maximum for confident headings.
- ❌ **Don't put icons in colored circles or squares.** Lucide glyph + accent color, no background bubble. (Exception: the feature card's interlocking ring is *its own* mark, not a generic icon container.)
- ❌ **Don't ship dark mode.** The audience isn't tech-savvy; dark UIs alienate. Deferred indefinitely.
- ❌ **Don't use Font Awesome, Heroicons, Material Icons, or emoji** as functional icons. (Font Awesome is being retired from the existing site.)
- ❌ **Don't use the 3-color rainbow gradient** (purple→coral→orange) — only the 2-color `--grad`. Orange enters the system through the icon-card slot rotation only.
- ❌ **Don't apply box-shadows to cards.** Borders + warmth do the containment work.
- ❌ **Don't expose customer or property counts in copy.** "65% conversion lift" is fine; "200 property managers trust us" is not. (Hard rule.)
- ❌ **Don't use em dashes (—) in user-facing copy** unless replicating an existing brand asset. Prefer commas, periods, or rephrase. (Reuse the existing brand voice rule.)
- ❌ **Don't pair the hero pill eyebrow with a section eyebrow.** Pill is for hero only; line-prefix eyebrow is for sections.
- ❌ **Don't use saturated accent colors as backgrounds.** Brand colors live in icons, gradient text, and tiny accent dots — never as fill.
- ❌ **Don't increase letter-spacing on headlines.** Outfit is designed to compress at scale. Always negative or normal, never positive.

---

## 8. Responsive Behavior

### Breakpoints
| Name | Width | Key Changes |
|------|-------|-------------|
| Mobile small | <480px | Single column. Hero `clamp` collapses to 48px. 64px section padding. |
| Mobile | 480–640px | Single column. CTA buttons full-width. |
| Tablet | 640–1024px | 2-col grids (icon cards: 2-up; features: stack). Newsletter stacks. |
| Desktop small | 1024–1280px | Full 3-col grids. 32px container padding. |
| Desktop | ≥1280px | Max 1240px container with auto margins. |

### Hero scaling
The hero H1 uses `clamp(48px, 7.2vw, 96px)`. The fluid middle handles 90% of screens; clamps protect the extremes. Subheads stay at 19px; subhead max-width tightens to ~52ch on tablet.

### Touch targets
- Primary buttons: 8–12px vertical padding × 16–24px horizontal → 36–48px touch height.
- Footer links: 14px font, 11px row gap → ~36px tap height.
- Social pills: 32px diameter (acceptable for secondary nav, not for primary CTA).

### Collapse strategy
- **Hero:** Stays single-column across breakpoints; only the H1 size and padding scale.
- **3-col features:** 3 → 2 (tablet) → 1 (mobile).
- **6-col icon-card grid:** 3 → 2 (tablet) → 1 (mobile).
- **Stats bar:** 4 → 2 (tablet) → 1 (mobile).
- **Footer link cols:** 4 → 2 (tablet) → 1 (mobile, brand col stays at top).
- **Newsletter:** 2-col → stacked at <768px.
- **Quote section:** 2-col → stacked at <900px.
- **Section padding:** 128px → 80px → 56px as viewport narrows.

### Image / mockup behavior
- Hero mockup wrapper: 16px radius preserved at all sizes; height collapses from 280px to ~160px on mobile.
- All borders preserved at all sizes (`#ECEAE4` doesn't change).

---

## 9. Agent Prompt Guide

### Quick color reference
- **Page bg:** `#F7F4ED` (cream)
- **Card bg:** `#F2EFE6` (cream-2)
- **Lightest surface:** `#FCFBF8` (paper)
- **Text — heading:** `#1C1C1C` (ink)
- **Text — body:** `#5F5F5D` (ink-60)
- **Border:** `#ECEAE4` (line)
- **Brand purple:** `#6B3795`
- **Brand coral:** `#E75A69`
- **Gradient:** `linear-gradient(95deg, #6B3795 0%, #E75A69 100%)`
- **Inset button shadow:** `inset 0 0.5px 0 0 rgba(255,255,255,.2), inset 0 0 0 0.5px rgba(0,0,0,.2), 0 1px 2px 0 rgba(0,0,0,.05)`

### Type cheat sheet
- **Font:** Outfit only (load 400, 500, 600; 480 for hero only)
- **Hero H1:** clamp(48px, 7.2vw, 96px) / weight 480 / line-height 1 / letter-spacing -0.025em / max 18ch
- **Section title:** clamp(34px, 4.6vw, 56px) / weight 600 / -0.025em
- **Body:** 15–19px / weight 400 / line-height 1.5–1.55 / ink-60

### Example component prompts

> "Build a hero section. Background: warm cream `#F7F4ED` with a subtle 2-color radial-gradient wash (coral 10% top-right at 82%/18%, purple 8% top-left at 12%/30%). Eyebrow: pill on `#FCFBF8` with hairline border, 6px gradient dot leading, 13px Outfit weight 400. H1: Outfit weight 480, clamp(48px, 7.2vw, 96px), letter-spacing -0.025em, max 18ch. Wrap a 3-word phrase in `<span class='accent'>` with weight 600 and the purple→coral gradient. Subhead: 19px ink-60, max 58ch. CTAs: primary dark button with inset shadow + ghost button with ink-40 border. Below CTAs: two underlined inline links separated by a 3px dot. No image — leave room for a 16px-radius hero-mockup wrapper below."

> "Build a 3-up feature card row for value-prop pillars. Each card: `#F7F4ED` bg, 1px `#ECEAE4` border, 12px radius, 32px padding. Top of card: 40px circular pill (`#FCFBF8` bg, hairline border, inset shadow) containing a 16px circle outline. Rotate the outline color across cards: purple `#6B3795`, coral `#E75A69`, orange `#FF9A3C`. Title: 20px Outfit weight 500, letter-spacing -0.01em. Body: 15px `#5F5F5D` line-height 1.6. Hover: border darkens to `#D8D4C6`."

> "Build a 6-up icon-card grid. Each card: `#F2EFE6` bg, 1px `#ECEAE4` border, 24px radius, 36/32 padding. Lucide icon at top-left, 32px, no background bubble. Rotate icon color across cards in this exact slot order: deep purple `#6B3795`, coral `#E75A69`, orange `#FF9A3C`, teal mint `#4ECDC4`, deep navy `#2E86AB`, deep red `#D93A4B`. Icon-to-title gap: 36px. Title: 24px Outfit weight 600. Body: 15px `#5F5F5D`. Grid: 3 columns × 2 rows, 20px gap. Reference: see `03_iconography.md`."

> "Build a quote section. Background: `#FCFBF8` (paper) with 1px top + bottom borders. 2-column grid: 1fr 1.4fr, 64px gap, align items start. Left: small eyebrow with leading 14px line accent ('FROM THE FIELD'), then h3 24px Outfit weight 500 ('Why operators switch.'). Right: quote body 24px Outfit weight 400 line-height 1.4, wrapped in colored curly quotes (purple `#6B3795`). Attribution row: 32px circular pill mark + role/portfolio text in `#5F5F5D` 14px. Padding: 120px 0."

> "Build a CTA closer. Centered, 128px 0 padding. Background: page cream with a centered radial-gradient wash (coral 8% + purple 5%). H2: clamp(36px, 5vw, 68px) Outfit weight 600. Wrap a 2-word phrase like 'finally crafted.' in `<span class='accent'>` with the purple→coral gradient. Subhead: 18px ink-60 max 50ch. Single primary dark button with arrow."

> "Build a newsletter strip. Background: `#FCFBF8` (paper), 1px top border, 64px 0 padding. 2-column grid: 1.2fr 1fr, 48px gap, align center. Left: h3 28px Outfit weight 600 + 15px ink-60 description. Right: email input (1px line border, 8px radius, 11/16 padding, focus ring 3px ink/05) + primary dark button with inset shadow."

> "Build a 4-column footer. Background: `#F2EFE6` (cream-2), 64/0/32 padding. Grid: 1.6fr 1fr 1fr 1fr, 48px gap. Col 1 (brand): logo-mark (24px interlocking purple+coral rings) + wordmark + 32ch tagline + contact block (label + email + phone) + address block + social row (32px circular pills, Lucide glyphs, ink-60). Cols 2–4: h4 13px uppercase + ul of 14px ink-60 links with 11px row gap. Bottom row: 1px top border, 28px top padding, logo-mark + copyright line on left, legal links pushed right."

### Iteration guide
1. **Always start with the cream.** `#F7F4ED` is non-negotiable as the page background.
2. **Outfit only.** Resist the urge to add a serif. Hierarchy comes from size, weight (400/480/600), and color.
3. **Borders, not shadows.** Cards float on warm `#ECEAE4` hairlines. The only shadow is the inset on dark buttons.
4. **Gradient on emphasis only.** Purple→coral text is a 2–4 word focal point per page section, not a decorative motif.
5. **Six-color rotation is sacred.** When laying out icon cards, the 6-accent rotation in slot order is the system. Don't shuffle; don't substitute.
6. **Lucide for every icon.** Inline SVG with `currentColor`, 32px on cards, 14–20px elsewhere.
7. **Spacing is editorial.** 112–128px vertical between sections, 32–36px inside cards. The brand earns its breathing room.
8. **Never expose scale numbers.** "65% lift" yes; "200 property managers" no. (Strict.)

---

## Voice and copy guidelines (cross-reference)

The visual system pairs with a copy system. Highlights:
- First-person founder voice; specific outcome metrics; quiet confidence; explicit disqualification of wrong-fit prospects.
- Avoid: hype words, corporate buzzwords, mission statements, hobbyist signaling.
- Strong frames: "Crafted for conversion, not just display"; "Built for the next era of short-term rentals."

Always layer on top of the visual system; don't let copy fight the design's restraint.

---

## Versioning

**v1.0 — 2026-04-30** — Initial spec, derived from `mockups/D3-locked.html`. Locked direction: D3 (D2 base + D's interlocking-ring icons restored, Lucide icon-card pattern adopted from Lovable's `/founders` page, multi-column footer pattern).

When updating: append decisions to `decisions.md`, update version number above, and re-run the skill eval suite.
