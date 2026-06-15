# Inventel Brand Hubs  WordPress Theme

## Installation

### Step 1: Upload the Theme
1. Zip the `inventel-brand-hubs` folder
2. In WordPress admin go to **Appearance → Themes → Add New  Upload Theme**
3. Upload the zip and click **Activate**

### Step 2: Create the Pages
Create 7 pages in **Pages  Add New**:

| Page Title | Slug | Template to assign |
|---|---|---|
| Brand Hub Index | `brand-hub-index` | Brand Hub Index |
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
| Training Resource Library | `resource-library` | Resource Library |
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

The **Resource Library** landing page links to every training page automatically via WordPress permalinks (`get_page_by_path`), so the slugs above must match exactly. These pages are **not** behind the brand-hub login.

## Notes
- All pages are fully self-contained  no external CSS or JS files needed
- Google Fonts are loaded via CDN in each template
- Pages are marked `noindex, nofollow`  remove that meta tag when ready to go live
- The index page links update automatically based on your WordPress page slugs
