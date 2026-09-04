# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

A WordPress theme, **"Inventel Brand Hubs"** (`style.css` theme header), despite the repo name `wp-gitconnect`. It is an internal, login-gated knowledge base / onboarding portal for Inventel employees, covering per-brand wikis ("Brand Hubs") and internal-tool tutorials ("Training Hub"). There is no Shopify code here — it just documents brands Inventel runs on Shopify.

There's no build tooling (no package.json, composer.json, webpack) and no test suite. Development is: edit a `page-*.php` file, upload/sync the theme to WordPress, view the assigned page. Pages are frequently authored as full HTML documents in an external design tool and then pasted/exported into a `page-*.php` template wholesale (see recent commit history — "Update ... from HTML export").

## Repo layout

- `functions.php` — all real logic: auth guard, access control hooks, Google OAuth 2.0 (hand-rolled, no plugin), shared helper functions used by every template.
- `header.php` / `footer.php` — intentionally empty. Templates do NOT call `get_header()`/`wp_head()`/`wp_footer()`; each `page-*.php` is a fully self-contained `<html>` document with its own inline `<style>` and `<script>`.
- `index.php` — fallback template shown only if a page has no template assigned.
- `page-*.php` — ~23 page templates: brand hubs (Aline Insoles, Pizza Pack, Spark, SugarMD, Wild Earth, Clean & Hit, Drain Buddy), training pages (Canva, Claude, Figma, Google Workspace, Gorgias, Meta Ads/Business Manager, Recharge, ShipStation, Shopify, Triple Whale), the Company Policy Hub, index/landing pages, login, and privacy policy.
- `README.md` — the WP-admin setup steps (page creation, slug→template assignment, Google OAuth Cloud Console setup). Read it before changing auth-related behavior.
- `assets/favicon.png` — the only shared static asset, injected manually via `bh_favicon_tags()`.

## Architecture: how a page template works

Every `page-*.php` (except the login page and privacy policy) follows this exact recipe — preserve it when editing or adding pages:

```php
<?php /* Template Name: Some Page Name */ ?>
<?php bh_require_login(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  ...meta, <title>, Google Fonts <link>...
  <style> /* all CSS inline, scoped with a per-brand CSS variable prefix, e.g. --al-* for Aline */ </style>
  <?php bh_favicon_tags(); ?>
</head>
<body>
  <!-- sticky #top-nav with a live JS search box (#hub-search / #search-results) -->
  <!-- page content -->
  <?php bh_back_to_index_button('brand-hub-index' | 'training-hub-index' | 'university-landing', 'Label'); ?>
  <script> /* vanilla JS: search, accordions, TOC drawer, sometimes a quiz */ </script>
</body>
</html>
```

Key conventions:
- **No shared CSS/JS files.** Everything is inlined per-page on purpose (see the "Notes" section of `README.md`). Don't try to extract shared stylesheets/scripts — that would break the self-contained-page model these are built on.
- **Pages are addressed by template, not slug.** `bh_template_url( $template_file, $fallback )` in `functions.php` looks up the published page whose `_wp_page_template` meta equals the given filename and returns its permalink. This is how index pages link to hub/training pages and how login/logout redirects find their targets — slugs can be anything.
- **Auth is per-template, not per-page-type.** `bh_require_login()` must be the first line of executable PHP in any new protected template. The global `template_redirect` / `template_include` hooks in `functions.php` also enforce this site-wide as a backstop, with `page-brand-hub-login.php` and `page-privacy-policy.php` hardcoded as the only public templates — update that allowlist in both places if you add another public page.
- **Brand theming** is done via a `:root { --xx-color: ...; }` block with a short brand-specific variable prefix (e.g. `--al-*` for Aline Insoles) — match the existing brand's palette when editing a hub, don't introduce a global palette.

## Access control (functions.php)

- Two login paths, both restricted to an allowlisted set of email domains (`BH_ALLOWED_DOMAINS`, defined in `wp-config.php`, defaulting to `inventel.net,inventel.com,wildearth.com,homeinspotv.com,meati.com,amzolute.com`):
  - Standard WordPress username/password (`wp_signon`), handled by the custom `init` hook handler (not `wp-login.php`).
  - Google OAuth 2.0, implemented from scratch (`?brand_hub_google=start` → Google → `?brand_hub_google=callback`), with CSRF `state` cookie, JWT payload decoding (`bh_decode_jwt_payload`), and aud/iss/exp/domain validation. First-time Google sign-in auto-creates a `subscriber`-role WP user.
  - Google client ID/secret live only in `wp-config.php` (`BH_GOOGLE_CLIENT_ID` / `BH_GOOGLE_CLIENT_SECRET`), never in the theme — keep it that way.
- Non-editor users (`current_user_can('edit_posts')` false) are redirected away from `/wp-admin/` and never see the admin bar — this theme is not meant to expose WP admin UI to end users.
- `bh_back_to_index_button()` also renders the sign-out link (`?brand_hub_logout=1` with a nonce) — reuse it rather than hand-rolling another logout link.

## Working on this repo

- There's no local dev server config in this repo; changes are validated by deploying to the actual WordPress site (zip theme → upload, or sync files directly if you have host access) and checking pages in a browser while logged in with an allowlisted account.
- When editing a `page-*.php` file that was pasted from an HTML export, preserve the existing structure/IDs (`#top-nav`, `#hub-search`, `#search-results`, TOC drawer markup) — the inline JS at the bottom of the file queries these by ID/class.
