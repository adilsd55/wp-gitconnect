# Inventel Brand Hubs  WordPress Theme

## Installation

### Step 1: Upload the Theme
1. Zip the `inventel-brand-hubs` folder
2. In WordPress admin go to **Appearance → Themes → Add New  Upload Theme**
3. Upload the zip and click **Activate**

### Step 2: Create the Pages
Create these pages in **Pages  Add New**:

| Page Title | Slug | Template to assign |
|---|---|---|
| Brand Hub Index | `brand-hub-index` | Brand Hub Index |
| Aline Insoles Brand Hub | `aline-insoles-brand-hub` | Aline Insoles Brand Hub |
| Pizza Pack Brand Hub | `pizza-pack-brand-hub` | Pizza Pack Brand Hub |
| Spark Brand Hub | `spark-brand-hub` | Spark Brand Hub |
| SugarMD Brand Hub | `sugar-md-brand-hub` | SugarMD Brand Hub |
| Wild Earth Brand Hub | `wild-earth-brand-hub` | Wild Earth Brand Hub |
| Clean & Hit Brand Hub | `clean-and-hit-brand-hub` | Clean & Hit Brand Hub |
| Drain Buddy Brand Hub | `drain-buddy-brand-hub` | Drain Buddy Brand Hub |

### Step 3: Assign Templates
For each page, in the **Page Attributes** panel on the right, set the **Template** dropdown to the matching template listed above.

### Step 4: Publish
Publish all 7 pages. The Brand Hub Index page will automatically link to all the brand hub pages.

## Platform Training Pages

These 12 self-contained training templates were added from the Platform Trainings set. Create a page for each (**Pages → Add New**) using the exact slug below, then assign the matching **Template** in **Page Attributes**.

| Page Title | Slug | Template to assign |
|---|---|---|
| Inventel University | `university` | University Landing |
| Training Hub (Resource Library) | `training-hub-index` | Training Hub Index |
| Canva Training | `canva-training` | Canva Training |
| Claude Training | `claude-training` | Claude Training |
| Figma Training | `figma-training` | Figma Training |
| Google Workspace Training | `google-workspace-training` | Google Workspace Training |
| Gorgias Training | `gorgias-training` | Gorgias Training |
| Meta Ads Account Training | `meta-ads-account-training` | Meta Ads Account Training |
| Meta Business Manager Training | `meta-business-manager-training` | Meta Business Manager Training |
| Recharge Training | `recharge-training` | Recharge Training |
| ShipStation Training | `shipstation-training` | ShipStation Training |
| Shopify Training | `shopify-training` | Shopify Training |
| Triple Whale Training | `triple-whale-training` | Triple Whale Training |

The **Training Hub** (Resource Library) links to every training page automatically, resolved by each page's assigned **template** (`bh_template_url()`), so slugs can be anything you like. These pages **are** behind the login (see below).

## Login & Access Control

All brand hub pages **and** all 12 training pages require login. Non-logged-in visitors are redirected to the **Brand Hub Login** page (`brand-hub-login`) and returned to the page they wanted after signing in.

Two sign-in methods are offered on the login page:
- **Sign in with Google** (recommended) — restricted to `@inventel.net` Google Workspace accounts.
- **Username / password** — the existing WordPress login, also restricted to `@inventel.net` users.

### Google Sign-In setup

1. **Create an OAuth client** in [Google Cloud Console](https://console.cloud.google.com/) → *APIs & Services → Credentials → Create Credentials → OAuth client ID → Web application*.
2. Under **Authorized redirect URIs**, add exactly:
   ```
   https://YOUR-SITE.com/?brand_hub_google=callback
   ```
   (use your real site URL; it must match character-for-character).
3. Copy the **Client ID** and **Client Secret**, then add them to `wp-config.php` (above the `/* That's all */` line):
   ```php
   define('BH_GOOGLE_CLIENT_ID',     'xxxxxxxx.apps.googleusercontent.com');
   define('BH_GOOGLE_CLIENT_SECRET', 'GOCSPX-xxxxxxxxxxxxxxxx');
   // Optional — defaults to inventel.net:
   define('BH_ALLOWED_DOMAIN', 'inventel.net');
   ```
   Keeping the secret in `wp-config.php` (not in the theme) keeps it out of version control.
4. That's it. The "Sign in with Google" button appears automatically. First-time users get a WordPress account created on the fly (role: *subscriber*); only verified `@inventel.net` addresses are allowed in — anyone else is rejected with an "access restricted" message.

> The OAuth Client ID/Secret are **not** stored in the theme. Until they are defined, the Google button shows a "not configured" message and the password login keeps working.

## Notes
- All pages are fully self-contained  no external CSS or JS files needed
- Google Fonts are loaded via CDN in each template
- Pages are marked `noindex, nofollow`  remove that meta tag when ready to go live
- The index page links update automatically based on your WordPress page slugs
