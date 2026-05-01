# CraftedStays Design System

The locked visual language for CraftedStays' own brand surfaces — marketing site, dashboard product UI, emails, and brand collateral.

> ⚠️ This is the system for **CraftedStays itself**, not for hospitality clients. Client homepages have their own per-client brand systems. Don't mix.

---

## What's in this repo

| File | Purpose |
|------|---------|
| [`DESIGN.md`](DESIGN.md) | The canonical 9-section spec (visual theme, colors, typography, components, layout, depth, do/don'ts, responsive, agent prompts). The source of truth. |
| [`iconography.md`](iconography.md) | Icon library rules: Lucide only, 6-color rotation, icon-card pattern, sizing. |
| [`exemplar.html`](exemplar.html) | A finished reference page that exercises every component in the system. Open in any browser. |
| [`fonts/`](fonts) | Outfit font files (variable + static weights 400/500/600/700) under the Open Font License. |
| [`skill/`](skill) | Packaged Claude Code skill — drop into `~/.claude/skills/craftedstays-design/` to give Claude Code automatic access to the system. |

---

## How to use it

### → For Claude Design (claude.ai/design)

1. Go to **[claude.ai/design/#org](https://claude.ai/design/#org)** → **Create new design system**
2. Either:
   - **Link this GitHub repo** in the "Link code on GitHub" field, OR
   - **Drag-drop** `DESIGN.md`, `iconography.md`, `exemplar.html`, and the `fonts/` folder into "Add fonts, logos and assets"
3. Paste the brand notes from `DESIGN.md` into "Any other notes?"

Every prototype you create in Claude Design will inherit the system automatically.

### → For Claude Code (CLI)

The skill is already installed locally at `~/.claude/skills/craftedstays-design/`. To install on another machine:

```bash
git clone git@github.com:thegilbertchan/craftedstays-design-system.git
mkdir -p ~/.claude/skills/craftedstays-design
cp craftedstays-design-system/skill/SKILL.md ~/.claude/skills/craftedstays-design/
cp -R craftedstays-design-system/skill/references ~/.claude/skills/craftedstays-design/
```

Then in any Claude Code session, just describe what you need ("build a CraftedStays pricing page") and the skill auto-triggers.

### → For other AI tools (Cursor, Stitch, Lovable, etc.)

Paste `DESIGN.md` into the tool's context (system prompt, project rules, or however it accepts persistent instructions). The 9-section structure is portable across every major AI coding/design tool.

### → For human designers / agencies

Send them the URL to this repo. `DESIGN.md` is a complete brief in markdown. `exemplar.html` is the finished reference. `fonts/` is everything they need to install Outfit.

---

## The system in 30 seconds

- **Page background:** warm cream `#F7F4ED` (never white)
- **Type:** Outfit only — weights 400 / 480 (hero only) / 500 / 600 / 700
- **Brand colors:** purple `#6B3795` + coral `#E75A69` (logo)
- **Gradient:** `linear-gradient(95deg, #6B3795 0%, #E75A69 100%)` — used on emphasis text only (2–4 word focal phrases)
- **Icon palette rotation:** purple → coral → orange `#FF9A3C` → teal `#4ECDC4` → navy `#2E86AB` → red `#D93A4B`
- **Icons:** Lucide only, 32px line glyphs at top-left of cards, no background bubbles
- **Buttons:** primary uses an inset-shadow stack — see DESIGN.md § 4
- **Borders not shadows:** cards float on `#ECEAE4` hairlines, no drop shadows
- **No dark mode.** The audience isn't tech-savvy.
- **No customer/property counts in copy.** "65% lift" yes; "200 PMs trust us" no.

For the full picture, read `DESIGN.md`.

---

## Updating the system

`DESIGN.md` is the source of truth. To update:

1. Edit `DESIGN.md` (and `iconography.md` / `exemplar.html` if a component changes)
2. Append a decision to the project decisions log
3. `git commit -m "DESIGN.md: <what changed and why>"` and push
4. Re-upload to Claude Design (drag the new file into the design system settings)
5. Re-package the Claude Code skill: `cd ~/.claude/skills/craftedstays-design && rsync -a path/to/repo/{DESIGN.md,iconography.md,exemplar.html} references/`

Any AI tool reading from the GitHub URL automatically picks up the new version.

---

## Provenance

- **System direction:** D3 (locked 2026-04-30) — derived from a 4-direction divergent mood-board pass
- **Reference framework:** [getdesign.md](https://getdesign.md) / [VoltAgent's awesome-claude-design](https://github.com/VoltAgent/awesome-claude-design) — same 9-section DESIGN.md format Claude Design uses natively
- **Icon-card pattern:** adapted from Lovable's `/founders` page
- **Type:** [Outfit](https://fonts.google.com/specimen/Outfit) by Rodrigo Fuenzalida + Smich (Open Font License)

---

## License

This design system is internal CraftedStays brand IP. The Outfit font in `fonts/` is licensed under the [Open Font License](fonts/OFL.txt).
