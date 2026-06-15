<?php /* Template Name: Drain Buddy Brand Hub */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Drain Buddy — Brand Knowledge Hub</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fraunces:wght@600;700;800;900&family=Inter:wght@300;400;500;600;700;800&family=DM+Mono:wght@400;500;700&display=swap" rel="stylesheet">
<style>
:root{
  /* DRAIN BUDDY PALETTE — clean water + chrome bathroom hardware */
  --db-hydro:#0E5379;
  --db-hydro-deep:#07334D;
  --db-hydro-mid:#176B98;
  --db-splash:#2BB3D9;
  --db-splash-light:#5DCBE3;
  --db-mist:#E8F0F4;
  --db-porcelain:#FAFBFC;
  --db-cream:#F5EFE0;
  --db-cream-deep:#E5D9B8;
  --db-brass:#C49A4D;
  --db-brass-deep:#A37F35;
  --db-brass-bright:#E0B85F;
  --db-slate:#1F2937;
  --db-slate-mid:#3F4C5C;
  --db-slate-muted:#5A6470;
  --db-forest:#2C7A7B;
  --db-link:#0055CC;
  --db-white:#FFFFFF;
  --db-danger:#B8391F;
  --db-success:#2C7A7B;
  --nav-h:60px;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;background:var(--db-porcelain);color:var(--db-slate);font-size:16px;line-height:1.6;-webkit-font-smoothing:antialiased}

/* TOP NAV */
#top-nav{position:sticky;top:0;z-index:1000;background:var(--db-hydro-deep);box-shadow:0 2px 12px rgba(0,0,0,.25)}
.nav-inner{display:flex;align-items:center;gap:14px;height:var(--nav-h);padding:0 20px;max-width:1200px;margin:0 auto}
.nav-brand{font-family:'Bebas Neue',sans-serif;font-size:20px;color:var(--db-mist);white-space:nowrap;letter-spacing:.08em;flex-shrink:0}
.nav-brand .nav-brand-accent{color:var(--db-brass-bright)}
.nav-search-wrap{flex:1;position:relative;max-width:420px}
.nav-search{width:100%;background:rgba(255,255,255,.08);border:1px solid rgba(196,154,77,.35);color:#fff;padding:7px 12px 7px 32px;border-radius:18px;font-size:13px;font-family:'Inter',sans-serif;outline:none;transition:all .15s}
.nav-search::placeholder{color:rgba(232,240,244,.55)}
.nav-search:focus{border-color:var(--db-brass-bright);background:rgba(255,255,255,.12)}
.nav-search-icon{position:absolute;left:10px;top:50%;transform:translateY(-50%);width:14px;height:14px;stroke:var(--db-brass-bright);fill:none;stroke-width:2;pointer-events:none}
.nav-top-toc-btn{background:transparent;border:1px solid var(--db-brass-bright);color:var(--db-brass-bright);padding:6px 14px;border-radius:20px;font-size:12px;font-weight:700;cursor:pointer;font-family:'DM Mono',monospace;letter-spacing:.05em;text-transform:uppercase;transition:all .2s;flex-shrink:0}
.nav-top-toc-btn:hover{background:var(--db-brass-bright);color:var(--db-hydro-deep)}
@media (max-width:520px){.nav-brand{display:none}}
@media (max-width:700px){.nav-search-wrap{max-width:none}}

/* SEARCH RESULTS */
#search-results{position:absolute;top:100%;left:0;right:0;margin-top:6px;background:#fff;border-radius:10px;box-shadow:0 10px 32px rgba(0,0,0,.25);max-height:60vh;overflow-y:auto;display:none;z-index:1100}
#search-results.open{display:block}
.search-group{padding:8px 0;border-bottom:1px solid rgba(0,0,0,.06)}
.search-group:last-child{border-bottom:none}
.search-group-label{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--db-hydro);font-weight:700;padding:6px 14px}
.search-result{display:block;padding:8px 14px;color:var(--db-slate);text-decoration:none;font-size:13.5px;cursor:pointer;border-left:3px solid transparent;line-height:1.4}
.search-result:hover,.search-result.active{background:var(--db-mist);border-left-color:var(--db-brass)}
.search-result-snippet{font-size:11.5px;color:var(--db-slate-muted);margin-top:2px}
.search-empty{padding:18px 14px;color:var(--db-slate-muted);font-size:13px;font-style:italic;text-align:center}
.flash-target{animation:flashGold 1.8s ease-out}
@keyframes flashGold{0%{background:rgba(196,154,77,.45);box-shadow:0 0 0 4px rgba(196,154,77,.5)}100%{background:transparent;box-shadow:none}}

/* FLOATING TOC BUTTON */
#floating-toc-btn{position:fixed;bottom:24px;right:24px;z-index:998;background:var(--db-brass);color:var(--db-hydro-deep);border:2px solid var(--db-hydro-deep);width:56px;height:56px;border-radius:50%;cursor:pointer;box-shadow:0 6px 20px rgba(14,83,121,.5);display:flex;align-items:center;justify-content:center;transition:all .2s}
#floating-toc-btn:hover{background:var(--db-brass-bright);transform:translateY(-2px);box-shadow:0 8px 24px rgba(14,83,121,.65)}
#floating-toc-btn svg{width:24px;height:24px;stroke:var(--db-hydro-deep);fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* TOC DRAWER */
#toc-drawer-overlay{position:fixed;inset:0;background:rgba(7,51,77,.65);backdrop-filter:blur(4px);z-index:1500;opacity:0;pointer-events:none;transition:opacity .25s}
#toc-drawer-overlay.open{opacity:1;pointer-events:auto}
#toc-drawer{position:fixed;top:0;right:0;bottom:0;width:min(400px,92vw);background:var(--db-mist);z-index:1501;padding:0;overflow-y:auto;transform:translateX(100%);transition:transform .3s cubic-bezier(.4,0,.2,1);box-shadow:-8px 0 30px rgba(0,0,0,.4);display:flex;flex-direction:column}
#toc-drawer.open{transform:translateX(0)}
.toc-drawer-header{display:flex;justify-content:space-between;align-items:center;padding:16px 20px;background:var(--db-hydro-deep);color:#fff;border-bottom:3px solid var(--db-brass);position:sticky;top:0;z-index:2}
.toc-drawer-title{font-family:'Bebas Neue',sans-serif;color:var(--db-brass-bright);font-size:1.4rem;letter-spacing:.06em}
.toc-drawer-close{background:rgba(255,255,255,.12);border:1px solid rgba(196,154,77,.4);color:#fff;font-size:20px;cursor:pointer;line-height:1;width:30px;height:30px;border-radius:50%;display:flex;align-items:center;justify-content:center;transition:all .15s}
.toc-drawer-close:hover{background:var(--db-brass);color:var(--db-hydro-deep);border-color:var(--db-brass)}
#toc-drawer-nav{padding:10px 12px 14px;display:flex;flex-direction:column;gap:3px}
#toc-drawer-nav a{display:flex;align-items:center;gap:10px;background:#fff;color:var(--db-hydro-deep);text-decoration:none;padding:7px 12px;border-radius:7px;font-size:13px;font-family:'Inter',sans-serif;font-weight:600;border:1px solid rgba(196,154,77,.2);border-left:4px solid var(--db-brass);transition:all .15s;line-height:1.2}
#toc-drawer-nav a:hover{background:var(--db-hydro);color:#fff;border-color:var(--db-hydro);border-left-color:var(--db-brass-bright);transform:translateX(3px);opacity:1;box-shadow:0 2px 8px rgba(14,83,121,.3)}
#toc-drawer-nav a:hover .toc-drawer-num{background:var(--db-brass-bright);color:var(--db-hydro-deep)}
.toc-drawer-num{display:inline-flex;align-items:center;justify-content:center;min-width:30px;height:20px;padding:0 6px;background:var(--db-hydro);color:#fff;border-radius:4px;font-family:'DM Mono',monospace;font-size:10.5px;font-weight:700;letter-spacing:.02em;flex-shrink:0;transition:all .15s}
.toc-drawer-label{flex:1;min-width:0}

/* IN-PAGE TOC */
#toc-section .toc-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:10px;margin-top:10px}
.toc-tile{background:#fff;border:1px solid rgba(196,154,77,.2);border-left:4px solid var(--db-brass);border-radius:10px;padding:14px 16px;text-decoration:none;color:var(--db-slate);display:flex;align-items:center;gap:12px;transition:all .2s;cursor:pointer}
.toc-tile:hover{background:var(--db-mist);border-left-color:var(--db-hydro);transform:translateX(3px);opacity:1;text-decoration:none}
.toc-tile-num{font-family:'DM Mono',monospace;color:var(--db-hydro);font-size:12px;font-weight:700;min-width:24px}
.toc-tile-label{font-size:14px;font-weight:600;color:var(--db-slate)}

/* COLLAPSIBLES */
.card.collapsible{padding:0;overflow:hidden;transition:all .3s ease}
.section-header-bar{display:flex;align-items:center;justify-content:space-between;padding:22px 30px;cursor:pointer;user-select:none;background:linear-gradient(135deg,var(--db-white) 0%,rgba(196,154,77,.1) 100%);transition:background .2s;border-bottom:1px solid transparent}
.section-header-bar:hover{background:linear-gradient(135deg,var(--db-mist) 0%,rgba(196,154,77,.18) 100%)}
.section-header-bar .section-header-left{flex:1;min-width:0}
.section-header-bar .eyebrow{margin-bottom:4px}
.section-header-bar h2{margin:0;padding:0;border-bottom:none;font-size:1.5rem}
.section-toggle{background:transparent;border:none;cursor:pointer;padding:6px;display:flex;align-items:center;justify-content:center;transition:transform .25s ease;flex-shrink:0;margin-left:14px}
.section-toggle svg{width:22px;height:22px;stroke:var(--db-hydro);fill:none;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round}
.collapsible.collapsed .section-toggle{transform:rotate(-90deg)}
.collapsible.collapsed .section-header-bar{border-bottom-color:rgba(196,154,77,.18)}
.section-body{padding:8px 30px 30px;max-height:none;overflow:visible;transition:max-height .35s ease,padding .25s ease,opacity .2s ease}
.collapsible.collapsed .section-body{max-height:0;padding-top:0;padding-bottom:0;overflow:hidden;opacity:0}
@media (max-width:600px){.section-header-bar{padding:18px 20px}.section-body{padding:6px 20px 22px}}

/* HERO */
#hero{background:linear-gradient(135deg,var(--db-hydro) 0%,var(--db-hydro-deep) 100%);padding:48px 20px 56px;color:#fff;text-align:center;position:relative;overflow:hidden}
#hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at top,rgba(43,179,217,.18) 0%,transparent 60%);pointer-events:none}
#hero::after{content:"";position:absolute;bottom:-1px;left:0;right:0;height:30px;background:linear-gradient(180deg,transparent 0%,var(--db-porcelain) 100%);pointer-events:none}
.hero-inner{max-width:780px;margin:0 auto;position:relative;z-index:1}
.hero-logo-wrap{display:flex;justify-content:center;align-items:center;margin-bottom:20px;height:90px}
.hero-logo-wrap img{max-height:90px;max-width:100%;width:auto;height:auto;background:rgba(255,255,255,.92);padding:12px 22px;border-radius:14px;box-shadow:0 6px 24px rgba(0,0,0,.3)}
.hero-logo-wrap img[data-failed="1"]{display:none}
.hero-logo-wrap img[data-failed="1"]+.hero-brand-text-fallback{display:inline-block}
.hero-brand-text-fallback{display:none;font-family:'Bebas Neue',sans-serif;font-size:3.5rem;letter-spacing:.06em;color:var(--db-brass-bright);text-shadow:0 2px 12px rgba(0,0,0,.3)}
#hero h1{font-family:'Fraunces',serif;font-weight:800;font-size:clamp(2.2rem,5vw,3.6rem);color:#fff;margin-bottom:10px;letter-spacing:-.01em;line-height:1.05}
#hero h1 .hero-strain{color:var(--db-brass-bright);font-style:italic;font-weight:700;font-size:.45em;letter-spacing:.02em;display:block;margin-top:8px}
.hero-tagline{font-family:'Fraunces',serif;font-style:italic;font-weight:600;font-size:clamp(1.1rem,2.4vw,1.4rem);color:var(--db-mist);margin-bottom:24px}
.hero-stats{display:flex;justify-content:center;gap:18px;flex-wrap:wrap;margin-bottom:22px}
.hero-stat{background:rgba(255,255,255,.08);border:1px solid rgba(196,154,77,.4);border-radius:10px;padding:10px 16px;min-width:130px;backdrop-filter:blur(6px)}
.hero-stat-num{display:block;font-family:'Fraunces',serif;font-weight:800;color:var(--db-brass-bright);font-size:1.45rem;line-height:1}
.hero-stat-label{display:block;font-family:'DM Mono',monospace;color:var(--db-mist);font-size:10.5px;letter-spacing:.08em;text-transform:uppercase;margin-top:5px}
.hero-social{display:flex;justify-content:center;gap:10px;flex-wrap:wrap}
.hero-social a{background:rgba(255,255,255,.1);border:1px solid rgba(196,154,77,.4);color:#fff;padding:7px 14px;border-radius:18px;font-size:12px;font-weight:600;text-decoration:none;font-family:'DM Mono',monospace;letter-spacing:.04em;text-transform:uppercase;transition:all .15s}
.hero-social a:hover{background:var(--db-brass);color:var(--db-hydro-deep);border-color:var(--db-brass)}
.chip-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:18px;justify-content:center}
.chip{display:inline-flex;align-items:center;gap:6px;background:#fff;color:var(--db-link)!important;text-decoration:underline;padding:7px 14px;border-radius:20px;font-size:13px;font-weight:600;transition:transform .15s}
.chip:hover{transform:translateY(-1px);opacity:1}

/* SECTIONS */
section{padding:36px 20px}
section:not(#hero){max-width:1100px;margin:0 auto}
.eyebrow{font-family:'DM Mono',monospace;color:var(--db-hydro);font-size:11px;letter-spacing:.14em;text-transform:uppercase;font-weight:700;display:block;margin-bottom:8px}
h2{font-family:'Fraunces',serif;font-weight:700;color:var(--db-hydro-deep);font-size:clamp(1.5rem,3vw,2rem);letter-spacing:-.01em;line-height:1.15;margin-bottom:14px;padding-bottom:10px;border-bottom:2px solid var(--db-brass)}
h3{font-family:'Fraunces',serif;font-weight:700;color:var(--db-hydro-deep);font-size:1.15rem;margin:22px 0 10px;letter-spacing:-.005em}
h4{font-family:'Inter',sans-serif;font-weight:700;color:var(--db-hydro);font-size:.96rem;margin:16px 0 6px;text-transform:uppercase;letter-spacing:.06em}
p{margin-bottom:14px;color:var(--db-slate)}
strong{color:var(--db-hydro-deep);font-weight:700}
a{color:var(--db-link);text-decoration:underline}
a:hover{opacity:.8}
.card{background:#fff;border-radius:14px;padding:30px;box-shadow:0 2px 14px rgba(14,83,121,.08);border:1px solid rgba(196,154,77,.16);margin-bottom:22px}

/* TAGS */
.tag-row{display:flex;flex-wrap:wrap;gap:6px;margin:14px 0}
.tag{display:inline-block;background:var(--db-mist);color:var(--db-hydro-deep);padding:4px 11px;border-radius:14px;font-size:11.5px;font-weight:600;letter-spacing:.02em;border:1px solid rgba(14,83,121,.2)}
.tag-inventel{background:var(--db-hydro-deep);color:var(--db-brass-bright);border-color:var(--db-brass)}
.tag-new{background:var(--db-brass);color:var(--db-hydro-deep);border-color:var(--db-brass-deep)}

/* TABLES */
table{width:100%;border-collapse:collapse;margin:16px 0;background:#fff;border-radius:8px;overflow:hidden;font-size:14px}
th{background:var(--db-hydro-deep);color:var(--db-brass-bright);padding:12px 14px;text-align:left;font-size:12px;text-transform:uppercase;letter-spacing:.07em;font-weight:700}
td{padding:12px 14px;border-bottom:1px solid rgba(14,83,121,.08);vertical-align:top}
tr:last-child td{border-bottom:none}
tr:nth-child(even) td{background:rgba(196,154,77,.05)}
.badge{display:inline-block;padding:3px 9px;border-radius:10px;font-size:11px;font-weight:700;letter-spacing:.03em;text-transform:uppercase}
.badge-core{background:var(--db-hydro);color:#fff}
.badge-accessory{background:var(--db-brass);color:var(--db-hydro-deep)}
.badge-discontinued{background:#888;color:#fff}
.badge-new{background:var(--db-splash);color:var(--db-hydro-deep)}
.badge-retail{background:var(--db-forest);color:#fff}

/* PRODUCT HERO CARD */
.product-hero{display:grid;grid-template-columns:1fr 1.3fr;gap:32px;align-items:start;background:linear-gradient(135deg,var(--db-hydro) 0%,var(--db-hydro-deep) 100%);border-radius:16px;padding:32px;margin:18px 0;color:#fff;border:1px solid rgba(196,154,77,.4)}
.product-hero-left{display:flex;flex-direction:column;gap:14px}.product-hero-img{aspect-ratio:1/1;background:radial-gradient(circle at 50% 50%,rgba(43,179,217,.22) 0%,rgba(7,51,77,.7) 70%);border-radius:12px;display:flex;align-items:center;justify-content:center;border:1px solid rgba(196,154,77,.4);position:relative;overflow:hidden}.product-hero-finishes{background:rgba(255,255,255,.06);border:1px solid rgba(196,154,77,.4);border-radius:12px;padding:16px 18px}.product-hero-finishes-label{font-family:"DM Mono",monospace;font-size:10.5px;letter-spacing:.14em;text-transform:uppercase;color:var(--db-brass-bright);font-weight:700;margin-bottom:10px;display:block}.finish-row{display:flex;align-items:center;gap:10px;padding:7px 0;border-bottom:1px solid rgba(196,154,77,.18);font-size:14px;color:#fff;line-height:1.3}.finish-row:last-child{border-bottom:none}.finish-swatch{width:18px;height:18px;border-radius:50%;flex-shrink:0;border:2px solid rgba(255,255,255,.3);box-shadow:inset 0 1px 2px rgba(0,0,0,.3)}.finish-name{font-weight:600;flex-grow:1}.finish-tag{font-family:"DM Mono",monospace;font-size:10px;letter-spacing:.06em;color:var(--db-brass-bright);text-transform:uppercase;font-weight:700;opacity:.9}
.product-hero-photo{width:100%;height:100%;object-fit:cover;display:block;border-radius:11px}
.product-hero .product-hero-content h3{color:var(--db-brass-bright);font-size:1.5rem;margin-bottom:6px;font-family:'Fraunces',serif;font-weight:800;letter-spacing:-.005em}
.product-hero-tagline{font-family:'Fraunces',serif;font-style:italic;color:var(--db-mist);opacity:.9;font-size:1.05rem;margin-bottom:14px}
.product-hero-content p{color:var(--db-mist);margin-bottom:12px}
.product-hero-content strong{color:#fff}
.product-hero-content a{color:var(--db-brass-bright);text-decoration:underline}
.product-badge-row{display:flex;flex-wrap:wrap;gap:6px;margin-top:14px}
.product-badge-row .tag{background:rgba(232,240,244,.18);color:var(--db-mist);border:1px solid rgba(232,240,244,.35);font-size:11px}
@media (max-width:720px){.product-hero{grid-template-columns:1fr;padding:24px}}

/* PRODUCT GRID */
.product-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:18px;margin:18px 0}
.product-card{background:#fff;border:1px solid rgba(196,154,77,.2);border-top:4px solid var(--db-brass);border-radius:12px;overflow:hidden;display:flex;flex-direction:column;transition:transform .15s,box-shadow .15s}
.product-card:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(14,83,121,.15)}
.product-card.discontinued{opacity:.78;border-top-color:#888}
.product-card-img{aspect-ratio:1/1;background:var(--db-mist);display:flex;align-items:center;justify-content:center;overflow:hidden;border-bottom:1px solid rgba(196,154,77,.18)}
.product-card-img img{width:100%;height:100%;object-fit:cover;display:block}
.product-card-body{padding:16px 18px;display:flex;flex-direction:column;flex:1}
.product-card-title{font-family:'Fraunces',serif;font-weight:700;color:var(--db-hydro-deep);font-size:1.05rem;line-height:1.25;margin-bottom:6px}
.product-card-meta{font-family:'DM Mono',monospace;font-size:11px;color:var(--db-slate-muted);text-transform:uppercase;letter-spacing:.05em;margin-bottom:8px}
.product-card-desc{font-size:13.5px;color:var(--db-slate-mid);line-height:1.5;margin-bottom:12px}
.product-card-foot{margin-top:auto;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px}
.product-card-link{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.05em;text-transform:uppercase;font-weight:700}

/* SPEC TABLE */
.spec-table{background:#fff;border:1px solid rgba(196,154,77,.2);border-radius:10px;padding:18px 22px;margin:14px 0;font-size:13.5px;line-height:1.6}
.spec-table dl{display:grid;grid-template-columns:max-content 1fr;gap:8px 18px}
.spec-table dt{font-family:'DM Mono',monospace;font-size:11px;text-transform:uppercase;letter-spacing:.08em;color:var(--db-hydro);font-weight:700;padding-top:2px}
.spec-table dd{color:var(--db-slate);margin:0}
@media (max-width:560px){.spec-table dl{grid-template-columns:1fr}.spec-table dt{margin-top:6px}}

/* TEAM CALLOUTS */
.team-callout{border-radius:10px;padding:14px 18px;margin:14px 0;border-left:5px solid;background:#fff;font-size:14px;line-height:1.55}
.team-callout p{margin:0;color:var(--db-slate)}
.team-callout p+p{margin-top:8px}
.team-callout strong{color:var(--db-hydro-deep)}
.team-tag{display:inline-block;font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.08em;text-transform:uppercase;font-weight:700;margin-bottom:6px;padding:2px 8px;border-radius:4px}
.team-callout.cx{background:#EAF5EE;border-left-color:#2C7A2C}
.team-callout.cx .team-tag{background:#2C7A2C;color:#fff}
.team-callout.creative{background:#FBEFD9;border-left-color:#B26D00}
.team-callout.creative .team-tag{background:#B26D00;color:#fff}
.team-callout.marketing{background:#EEE6FA;border-left-color:#5A3B9D}
.team-callout.marketing .team-tag{background:#5A3B9D;color:#fff}
.team-callout.brand{background:#E6F1EE;border-left-color:var(--db-forest)}
.team-callout.brand .team-tag{background:var(--db-forest);color:#fff}
.team-callout.newhire{background:#E0EDF9;border-left-color:#1E5BAE}
.team-callout.newhire .team-tag{background:#1E5BAE;color:#fff}

/* ALERT/HAZARD CALLOUTS */
.alert-callout{background:linear-gradient(135deg,#fff6e8 0%,#fae5c2 100%);border:2px solid var(--db-brass);border-radius:12px;padding:18px 22px;margin:16px 0;position:relative}
.alert-callout-title{display:block;font-family:'Fraunces',serif;font-weight:700;color:#8B5A00;font-size:1.05rem;margin-bottom:6px}
.alert-callout p{margin:0;color:#5C3F00;font-size:14px}
.alert-callout p+p{margin-top:6px}
.hazard-callout{background:linear-gradient(135deg,#5a1212 0%,#8b1c1c 100%);border:2px solid var(--db-brass-bright);border-radius:12px;padding:0;margin:18px 0;color:#fff;overflow:hidden;position:relative}
.hazard-callout::before{content:"";display:block;height:8px;background:repeating-linear-gradient(45deg,var(--db-brass-bright) 0 12px,#000 12px 24px)}
.hazard-callout .hazard-body{padding:18px 22px}
.hazard-callout-title{display:block;font-family:'Fraunces',serif;font-weight:800;color:var(--db-brass-bright);font-size:1.15rem;margin-bottom:8px;text-transform:uppercase;letter-spacing:.04em}
.hazard-callout p{color:#fff;margin-bottom:6px;font-size:14px}
.hazard-callout strong{color:var(--db-brass-bright)}

/* RETAIL STRIP */
.retail-strip{background:linear-gradient(135deg,var(--db-cream) 0%,var(--db-cream-deep) 100%);border:1px solid var(--db-brass);border-radius:14px;padding:22px 26px;margin:22px 0;text-align:center}
.retail-strip-eyebrow{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;text-transform:uppercase;font-weight:700;color:var(--db-brass-deep);margin-bottom:10px}
.retail-strip h4{margin:0 0 14px;color:var(--db-hydro-deep);text-transform:none;font-family:'Fraunces',serif;letter-spacing:0;font-size:1.15rem}
.retail-row{display:flex;justify-content:center;align-items:center;gap:22px;flex-wrap:wrap}
.retail-pill{display:inline-flex;align-items:center;gap:6px;background:#fff;border:1px solid rgba(14,83,121,.2);color:var(--db-hydro-deep);padding:8px 16px;border-radius:24px;font-weight:700;font-size:13.5px;font-family:'Fraunces',serif;letter-spacing:.01em}
.retail-pill::before{content:"";display:inline-block;width:8px;height:8px;border-radius:50%;background:var(--db-forest)}

/* VISION & MISSION QUOTES */
.brand-quote{border-left:4px solid var(--db-brass);padding:14px 22px;background:var(--db-cream);font-family:'Fraunces',serif;font-size:1.15rem;font-style:italic;color:var(--db-hydro-deep);margin:14px 0;border-radius:0 8px 8px 0}
.brand-quote.mission{border-left-color:var(--db-splash);font-size:1.05rem;background:var(--db-mist)}

/* PILLARS GRID */
.pillars{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:14px;margin:18px 0}
.pillar{background:#fff;border:1px solid rgba(14,83,121,.18);border-radius:12px;padding:18px 18px 16px;display:flex;flex-direction:column;gap:8px;transition:all .2s}
.pillar:hover{border-color:var(--db-splash);box-shadow:0 4px 14px rgba(14,83,121,.08);transform:translateY(-2px)}
.pillar-icon{font-size:1.7rem;line-height:1}
.pillar h4{font-family:'Fraunces',serif;font-size:1.05rem;color:var(--db-hydro-deep);margin:2px 0 4px;letter-spacing:.005em;font-weight:700}
.pillar p{margin:0;font-size:14px;color:var(--db-slate-mid);line-height:1.55}

/* TONE GRID */
.tone-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:12px;margin:14px 0 18px}
.tone{background:var(--db-mist);border:1px solid rgba(14,83,121,.15);border-radius:10px;padding:14px 16px;display:flex;flex-direction:column;gap:6px}
.tone-label{font-family:'DM Mono',monospace;font-size:11.5px;font-weight:700;color:var(--db-hydro-deep);letter-spacing:.08em;text-transform:uppercase}
.tone-desc{font-size:13.5px;color:var(--db-slate-mid);line-height:1.5}
.tone-ex{margin-top:auto;font-family:'Fraunces',serif;font-style:italic;font-size:14px;color:var(--db-hydro-deep);background:#fff;border-left:3px solid var(--db-splash);padding:8px 12px;border-radius:0 6px 6px 0;line-height:1.45}

/* DO / DON'T */
.do-dont{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin:14px 0}
.do,.dont{border-radius:10px;padding:16px 18px;border:1px solid}
.do{background:rgba(44,122,123,.08);border-color:rgba(44,122,123,.3)}
.dont{background:rgba(180,46,46,.06);border-color:rgba(180,46,46,.3)}
.do h4{margin:0 0 8px;font-family:'Fraunces',serif;color:var(--db-forest);font-size:1.05rem}
.dont h4{margin:0 0 8px;font-family:'Fraunces',serif;color:#9a2727;font-size:1.05rem}
.do ul,.dont ul{margin:0;padding-left:18px}
.do li,.dont li{margin-bottom:5px;font-size:14px;line-height:1.55;color:var(--db-slate-mid)}
@media(max-width:720px){.do-dont{grid-template-columns:1fr}}

/* ADJECTIVE GRID */
.adj-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(190px,1fr));gap:10px;margin:16px 0}
.adj{background:#fff;border:1px solid rgba(14,83,121,.15);border-left:4px solid var(--db-splash);border-radius:8px;padding:12px 14px}
.adj-word{font-family:'Fraunces',serif;font-weight:700;color:var(--db-hydro-deep);font-size:1rem;margin-bottom:3px}
.adj-desc{font-size:13px;color:var(--db-slate-mid);line-height:1.5}

/* PALETTE GRID */
.palette-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:10px;margin:14px 0 18px}
.swatch{border-radius:10px;padding:46px 14px 14px;color:#fff;display:flex;flex-direction:column;justify-content:flex-end;min-height:130px;box-shadow:0 2px 8px rgba(7,51,77,.1)}
.swatch.dark-text{color:var(--db-slate)}
.swatch-name{font-family:'Fraunces',serif;font-weight:700;font-size:14px;margin-bottom:2px}
.swatch-hex{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.05em;opacity:.85}

/* LOGO BLOCKS */
.logo-blocks{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin:14px 0}
.logo-block{border-radius:12px;padding:38px 24px;display:flex;align-items:center;justify-content:center;min-height:130px;border:1px solid}
.logo-block.light{background:#fff;border-color:rgba(14,83,121,.2)}
.logo-block.dark{background:var(--db-hydro-deep);border-color:var(--db-hydro-deep)}
.logo-block img{max-width:180px;max-height:80px;object-fit:contain}
.logo-block.dark img{filter:brightness(0) invert(1)}
.logo-caption{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.08em;text-transform:uppercase;color:var(--db-slate-muted);margin-top:8px;text-align:center;font-weight:700}
@media(max-width:720px){.logo-blocks{grid-template-columns:1fr}}

/* SECONDARY HEADINGS */
.section-body h3{font-family:'Fraunces',serif;color:var(--db-hydro-deep);font-size:1.25rem;margin:22px 0 8px;letter-spacing:.005em;font-weight:700}
.section-body h3:first-child{margin-top:6px}

/* SECTION TABLES */
.section-body table{width:100%;border-collapse:collapse;margin:14px 0;font-size:14px}
.section-body table th{background:var(--db-mist);color:var(--db-hydro-deep);text-align:left;padding:10px 12px;border-bottom:2px solid var(--db-splash);font-family:'DM Mono',monospace;font-size:12px;letter-spacing:.06em;text-transform:uppercase;font-weight:700}
.section-body table td{padding:10px 12px;border-bottom:1px solid rgba(14,83,121,.1);color:var(--db-slate-mid);line-height:1.5;vertical-align:top}
.section-body table tr:last-child td{border-bottom:none}
.section-body table tr:hover td{background:rgba(232,240,244,.5)}

/* PERSONAS */
.persona-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:14px;margin-top:18px}
.persona{background:var(--db-cream);border:1px solid rgba(196,154,77,.3);border-radius:12px;padding:18px 20px}
.persona-name{font-family:'Fraunces',serif;font-size:1.1rem;font-weight:700;color:var(--db-hydro-deep);margin-bottom:4px}
.persona-meta{font-family:'DM Mono',monospace;font-size:11px;color:var(--db-brass-deep);text-transform:uppercase;letter-spacing:.08em;margin-bottom:10px;font-weight:700}
.persona p{font-size:13px;line-height:1.55;margin-bottom:6px;color:var(--db-slate-mid)}
.persona p strong{color:var(--db-slate)}

/* CALLOUT ROW (for marketing angles) */
.callout-row{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:14px;margin:14px 0}

/* PATTERN GRID */
.pattern-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:18px}
.pattern{background:#fff;border:1px solid rgba(14,83,121,.15);border-top:4px solid var(--db-brass);border-radius:10px;padding:18px;transition:all .2s}
.pattern:hover{border-top-color:var(--db-splash);box-shadow:0 4px 14px rgba(14,83,121,.08);transform:translateY(-2px)}
.pattern-num{font-family:'DM Mono',monospace;font-size:11px;color:var(--db-brass-deep);font-weight:700;letter-spacing:.05em}
.pattern-icon{font-size:1.5rem;margin:6px 0;line-height:1}
.pattern h4{color:var(--db-hydro-deep);font-family:'Fraunces',serif;font-size:1.05rem;margin:0 0 6px}
.pattern p{font-size:13px;color:var(--db-slate-mid);margin:0;line-height:1.5}

/* THROUGH-LINE */
.through-line{background:linear-gradient(135deg,var(--db-hydro) 0%,var(--db-hydro-deep) 100%);border:2px solid var(--db-brass);border-radius:14px;padding:22px 26px;margin:20px 0;color:#fff;position:relative}
.through-line-label{display:block;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.15em;text-transform:uppercase;color:var(--db-brass-bright);font-weight:800;margin-bottom:8px}
.through-line p{font-family:'Fraunces',serif;font-size:1.05rem;line-height:1.6;color:#fff;margin:0;font-style:italic}

/* CRITICAL ALERT VARIANT */
.alert-callout.critical{background:linear-gradient(135deg,#7a1818 0%,#5a0e0e 100%);border:3px solid var(--db-brass-bright);border-radius:12px;padding:34px 26px 24px;margin:18px 0 22px;color:#fff;box-shadow:0 6px 24px rgba(122,24,24,.35);position:relative;overflow:hidden}
.alert-callout.critical::before{content:"";position:absolute;top:0;left:0;right:0;height:6px;background:repeating-linear-gradient(45deg,var(--db-brass-bright) 0 12px,#000 12px 24px)}
.alert-callout.critical .alert-callout-title{color:var(--db-brass-bright);font-family:'DM Mono',monospace;font-size:15px;letter-spacing:.15em;font-weight:800;margin-bottom:12px;padding-bottom:10px;border-bottom:2px solid rgba(224,184,95,.5);text-transform:uppercase}
.alert-callout.critical p{color:#fff}
.alert-callout.critical strong{color:var(--db-brass-bright);font-weight:800}

/* CREATIVE GALLERY */
.creative-gallery{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:18px;margin-top:22px}
.creative-card{background:#fff;border:1px solid rgba(14,83,121,.18);border-radius:12px;padding:14px;display:flex;flex-direction:column;gap:10px;transition:transform .15s ease,box-shadow .15s ease}
.creative-card:hover{transform:translateY(-2px);box-shadow:0 6px 18px rgba(14,83,121,.12)}
.creative-img{width:100%;aspect-ratio:4/5;border-radius:8px;background:var(--db-mist);display:block;overflow:hidden}
.creative-img svg{width:100%;height:100%;display:block}
.creative-meta{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--db-brass-deep);font-weight:700}
.creative-caption{font-size:13px;line-height:1.55;color:var(--db-slate-mid)}
.creative-caption strong{color:var(--db-hydro-deep);display:block;font-family:'Fraunces',serif;font-size:14.5px;margin-bottom:4px}
.creative-tags{display:flex;flex-wrap:wrap;gap:6px;margin-top:4px}
.creative-tag{background:rgba(43,179,217,.18);color:var(--db-hydro-deep);font-size:11px;padding:3px 8px;border-radius:12px;font-weight:600}

/* GLOSSARY */
.glossary{background:#fff;border:1px solid rgba(14,83,121,.15);border-radius:12px;padding:20px 24px}
.glossary dl{display:flex;flex-direction:column;gap:14px;margin:0}
.glossary dt{font-family:'Fraunces',serif;font-size:1.05rem;font-weight:700;color:var(--db-hydro-deep);margin-bottom:2px}
.glossary dd{margin:0;font-size:14px;color:var(--db-slate-mid);line-height:1.55}

/* POLICY CARDS (returns / fulfillment / shopify) */
.policy-card{background:#fff;border:1px solid rgba(14,83,121,.18);border-radius:12px;padding:20px 24px;margin:14px 0}
.policy-card h3{margin-top:0}
.policy-card.warning{background:rgba(196,154,77,.07);border-color:rgba(196,154,77,.45);border-left:4px solid var(--db-brass)}
.policy-card.success{background:rgba(44,122,123,.06);border-color:rgba(44,122,123,.35);border-left:4px solid var(--db-forest)}
.policy-contact{background:var(--db-mist);border-radius:8px;padding:14px 18px;font-size:14px;line-height:1.65;border-left:3px solid var(--db-splash);margin-top:10px}

/* FAQ */
.faq-list{margin-top:14px}
.faq-list h3{font-family:'Fraunces',serif;font-size:1.1rem;color:var(--db-hydro-deep);margin:18px 0 6px;font-weight:700}
.faq-list h3:first-child{margin-top:6px}
.faq-list p{font-size:13.5px;line-height:1.65;color:var(--db-slate-mid);margin-bottom:10px}

/* ADDRESS / WAREHOUSE */
.address-block{background:#fff;border:1px solid rgba(14,83,121,.2);border-left:4px solid var(--db-hydro);border-radius:10px;padding:18px 22px;font-family:'DM Mono',monospace;font-size:14px;line-height:1.6;color:var(--db-hydro-deep);margin:12px 0}
.address-block .addr-label{display:block;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--db-brass-deep);margin-bottom:6px;font-weight:700}
.address-block strong{font-family:'Inter',sans-serif;font-size:15px;color:var(--db-hydro-deep)}

/* RESOURCE LINK CARDS */
.resource-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:12px;margin:14px 0}
.resource-card{background:#fff;border:1px solid rgba(14,83,121,.18);border-radius:10px;padding:14px 16px;text-decoration:none;color:var(--db-slate);display:block;transition:all .15s}
.resource-card:hover{border-color:var(--db-splash);transform:translateY(-2px);box-shadow:0 4px 12px rgba(14,83,121,.1);opacity:1}
.resource-card-tag{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--db-brass-deep);font-weight:700}
.resource-card-name{font-family:'Fraunces',serif;font-weight:700;color:var(--db-hydro-deep);font-size:1rem;margin:4px 0}
.resource-card-desc{font-size:12.5px;color:var(--db-slate-muted);line-height:1.5}

/* QUIZ — styling lives under #quiz selector below (dark dramatic standout) */
.quiz-rationale{margin-top:14px;background:rgba(255,255,255,.08);border-left:3px solid var(--db-brass-bright);padding:14px 18px;border-radius:0 10px 10px 0;font-size:13.5px;line-height:1.6;color:#DCE5EC;font-style:italic}
.quiz-rationale strong{font-style:normal;color:#fff}

/* QUIZ PASS/FAIL */
.quiz-pass{text-align:center;padding:20px 10px}
.quiz-pass-banner{background:linear-gradient(135deg,var(--db-hydro) 0%,var(--db-splash) 100%);color:#fff;padding:28px 22px;border-radius:14px;margin-bottom:20px}
.quiz-pass-banner h3{font-family:'Bebas Neue',sans-serif;color:#fff;font-size:2rem;letter-spacing:.04em;margin-bottom:6px}
.quiz-pass-emoji{font-size:2.4rem;display:block;margin-bottom:8px}
.quiz-cert{background:var(--db-cream);border:2px solid var(--db-brass);border-radius:14px;padding:28px 24px;margin:18px 0;text-align:center}
.quiz-cert-lockup{font-family:'Fraunces',serif;font-size:.95rem;color:var(--db-slate-muted);letter-spacing:.04em;margin-bottom:6px}
.quiz-cert-brand{font-family:'Bebas Neue',sans-serif;font-size:2.4rem;color:var(--db-hydro-deep);letter-spacing:.04em;margin-bottom:14px}
.quiz-cert-name-input{width:100%;max-width:380px;padding:12px 16px;font-size:1rem;border:2px solid var(--db-brass);border-radius:8px;font-family:'Fraunces',serif;text-align:center;margin:8px auto 14px;display:block;color:var(--db-hydro-deep);background:#fff}
.quiz-cert-passed-badge{display:inline-block;background:var(--db-hydro);color:#fff;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;padding:4px 14px;border-radius:14px;margin:10px 0;font-weight:700}
.cert-stats{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin:16px 0}
.cert-stat{background:#fff;border:1px solid rgba(196,154,77,.4);border-radius:8px;padding:10px}
.cert-stat-num{font-family:'Bebas Neue',sans-serif;font-size:1.6rem;color:var(--db-hydro-deep);line-height:1}
.cert-stat-lbl{font-family:'DM Mono',monospace;font-size:10px;color:var(--db-brass-deep);text-transform:uppercase;letter-spacing:.08em;margin-top:2px}
.cert-track{font-family:'DM Mono',monospace;font-size:11px;color:var(--db-slate-muted);text-transform:uppercase;letter-spacing:.08em;margin:10px 0}
.cert-actions{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:24px}
.cert-actions button{background:var(--db-hydro);color:#fff;border:none;padding:12px 22px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;display:inline-flex;align-items:center;gap:8px;transition:transform .15s,box-shadow .15s}
.cert-actions button.secondary{background:var(--db-brass);color:#fff;border:none}
.cert-actions button:hover{background:var(--db-hydro-deep);color:#fff;transform:translateY(-2px);box-shadow:0 6px 16px rgba(13,71,98,.35)}
.cert-actions button.secondary:hover{background:var(--db-brass-deep);color:#fff;box-shadow:0 6px 16px rgba(196,154,77,.45)}
.cert-note{font-size:11.5px;color:var(--db-slate-muted);font-style:italic;margin-top:14px}

.quiz-fail{text-align:center;padding:20px 10px;background:rgba(184,57,31,.07);border:2px solid rgba(184,57,31,.3);border-radius:14px}
.quiz-fail h3{font-family:'Bebas Neue',sans-serif;color:var(--db-danger);font-size:1.8rem;letter-spacing:.04em;margin-bottom:8px}
.quiz-fail-emoji{font-size:2.4rem;display:block;margin-bottom:8px}
.quiz-fail-score{font-family:'Bebas Neue',sans-serif;color:var(--db-danger);font-size:2.4rem;line-height:1;margin:8px 0 14px}
.quiz-fail p{font-size:13.5px;line-height:1.6;color:var(--db-slate-mid)}
.quiz-fail .cert-actions button{background:var(--db-danger)}
.quiz-fail .cert-actions button:hover{background:#8B2815}
.name-printed{display:none}

/* QUIZ SECTION — dark dramatic standout (Pizza Pack pattern, Drain Buddy palette) */
#quiz{background:linear-gradient(135deg,var(--db-hydro-deep) 0%,var(--db-hydro) 100%);color:#fff;border-radius:20px;padding:0;margin-top:40px;overflow:hidden;border:none;box-shadow:0 8px 32px rgba(7,51,77,.25)}
#quiz .card,#quiz > .card{background:transparent!important;border:none!important;box-shadow:none!important;padding:0!important;margin:0!important;color:#fff}
#quiz h2{color:#fff!important;font-family:'Fraunces',serif;border:none!important;margin:0;padding:0}
#quiz .eyebrow{color:var(--db-brass-bright)!important}
#quiz .section-header-bar{background:transparent;padding:32px 30px 20px;border-bottom:1px solid rgba(196,154,77,.18)}
#quiz .section-header-bar:hover{background:rgba(255,255,255,.04)}
#quiz .section-toggle{border-color:var(--db-brass-bright)!important;color:var(--db-brass-bright)!important;background:transparent!important}
#quiz .section-toggle:hover{background:var(--db-brass-bright)!important;color:var(--db-hydro-deep)!important}
#quiz .collapsible.collapsed .section-header-bar{border-bottom:none;border-color:transparent}
#quiz .section-body{padding:20px 30px 40px;background:transparent;color:#fff}
#quiz .section-body p{color:#DCE5EC}
#quiz .section-body p strong{color:var(--db-brass-bright)}
#quiz #quiz-intro p{color:#DCE5EC;font-size:15px;line-height:1.7}
#quiz .quiz-container{background:rgba(255,255,255,.07);border-radius:14px;padding:28px;margin-top:20px;border:1px solid rgba(196,154,77,.3)}
#quiz .quiz-progress{font-family:'DM Mono',monospace;font-size:12px;color:var(--db-brass-bright);letter-spacing:.1em;margin-bottom:16px;text-transform:uppercase;display:flex;justify-content:space-between;align-items:center}
#quiz .quiz-progress-bar{height:6px;background:rgba(255,255,255,.12);border-radius:3px;overflow:hidden;margin-bottom:22px}
#quiz .quiz-progress-fill{height:100%;background:var(--db-brass-bright);transition:width .4s cubic-bezier(.4,0,.2,1);border-radius:3px}
#quiz .quiz-question{font-family:'Fraunces',serif;font-size:1.3rem;font-weight:700;margin-bottom:22px;line-height:1.35;color:#fff}
#quiz .quiz-options{display:flex;flex-direction:column;gap:10px}
#quiz .quiz-option{background:rgba(255,255,255,.06);border:2px solid rgba(196,154,77,.3);color:#fff;padding:14px 18px;border-radius:10px;text-align:left;font-size:14px;cursor:pointer;transition:all .2s;font-family:inherit;display:flex;align-items:center;gap:12px;width:100%}
#quiz .quiz-option:hover:not(:disabled){background:rgba(196,154,77,.18);border-color:var(--db-brass-bright);transform:translateX(4px)}
#quiz .quiz-option.correct,#quiz .quiz-option.show-correct{background:#FEF9E7;border-color:var(--db-brass-bright);color:var(--db-hydro-deep);font-weight:700;box-shadow:0 0 0 3px rgba(196,154,77,.4)}
#quiz .quiz-option.incorrect,#quiz .quiz-option.wrong{background:rgba(184,57,31,.85);border-color:#fff;color:#fff;font-weight:700}
#quiz .quiz-option.dimmed{opacity:.35}
#quiz .quiz-option.disabled{cursor:default}
#quiz .quiz-option.disabled:hover{transform:none;background:rgba(255,255,255,.06);border-color:rgba(196,154,77,.3)}
#quiz .quiz-option.correct:hover,#quiz .quiz-option.show-correct:hover,#quiz .quiz-option.wrong:hover,#quiz .quiz-option.incorrect:hover{transform:none}
#quiz .quiz-option:disabled:not(.correct):not(.show-correct):not(.incorrect):not(.wrong){opacity:.35}
#quiz .quiz-start-btn{background:var(--db-brass-bright);color:var(--db-hydro-deep);border:none;padding:14px 28px;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;margin-top:18px;transition:transform .15s,box-shadow .15s;letter-spacing:.02em;display:inline-block}
#quiz .quiz-start-btn:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(196,154,77,.45)}
#quiz .quiz-next-btn,#quiz #quiz-next{background:var(--db-brass-bright);color:var(--db-hydro-deep);border:none;padding:12px 24px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;margin-top:14px;transition:transform .15s,box-shadow .15s;display:none}
#quiz .quiz-next-btn.show,#quiz #quiz-next.show{display:inline-block}
#quiz .quiz-next-btn:hover,#quiz #quiz-next:hover{transform:translateY(-2px);box-shadow:0 6px 16px rgba(196,154,77,.45)}
#quiz .quiz-cert,#quiz .quiz-cert *{color:var(--db-hydro-deep)}
#quiz .quiz-cert .quiz-cert-passed-badge{color:#fff}
#quiz .quiz-cert .cert-actions button{color:#fff}
#quiz .quiz-cert .cert-actions button.secondary{color:#fff}
#quiz .quiz-pass-banner{background:linear-gradient(135deg,var(--db-hydro) 0%,var(--db-splash) 100%);padding:28px;border-radius:12px;text-align:center;margin-bottom:18px;color:#fff}
#quiz .quiz-pass-banner h3{color:#fff;margin:8px 0 0;font-family:'Fraunces',serif;font-size:1.7rem}
#quiz .quiz-pass-emoji{font-size:3rem;display:inline-block;line-height:1}
#quiz .quiz-fail{background:rgba(255,255,255,.08);padding:28px;border-radius:12px;text-align:center;color:#fff;border:1px solid rgba(184,57,31,.4)}
#quiz .quiz-fail-emoji{font-size:3rem;display:inline-block;line-height:1}
#quiz .quiz-fail h3{color:#fff;margin:8px 0;font-family:'Fraunces',serif}
#quiz .quiz-fail p{color:#DCE5EC}
#quiz .quiz-fail-score{font-family:'Bebas Neue',sans-serif;font-size:2rem;color:var(--db-brass-bright)}

/* MISC */
hr.divider{border:none;border-top:2px dashed rgba(196,154,77,.5);margin:24px 0}
.note{background:var(--db-mist);border:1px dashed var(--db-splash);border-radius:8px;padding:12px 16px;font-size:13px;color:var(--db-slate-muted);font-style:italic;margin:10px 0}

/* PRINT HELPERS */
@media print{
  body.printing #top-nav,body.printing #floating-toc-btn,body.printing #toc-drawer,body.printing #toc-drawer-overlay,body.printing .cert-actions{display:none !important}
  body.printing #quiz-container .quiz-cert-name-input{display:none !important}
  body.printing #quiz-container .name-printed{display:block !important;font-family:'Fraunces',serif;font-size:1.4rem;color:var(--db-hydro-deep);font-weight:700;margin:8px 0 14px;border-bottom:2px solid var(--db-brass);padding-bottom:6px;display:inline-block}
  body.printing{background:#fff !important}
  body.printing .card{box-shadow:none;border:1px solid #ccc}
  body.printing .collapsible.collapsed .section-body{max-height:none;overflow:visible;padding:8px 30px 30px;opacity:1}
  body.printing .collapsible.collapsed{display:block}
  *{print-color-adjust:exact;-webkit-print-color-adjust:exact}
}
</style>
</head>
<body>

<!-- TOP NAV -->
<nav id="top-nav">
  <div class="nav-inner">
    <div class="nav-brand">DRAIN <span class="nav-brand-accent">BUDDY</span></div>
    <div class="nav-search-wrap">
      <svg class="nav-search-icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><line x1="20" y1="20" x2="16.5" y2="16.5"/></svg>
      <input id="hub-search" class="nav-search" type="search" placeholder="Search this hub  ( press / )" autocomplete="off">
      <div id="search-results"></div>
    </div>
    <button class="nav-top-toc-btn" onclick="openDrawer()">☰ Menu</button>
  </div>
</nav>

<button id="floating-toc-btn" onclick="openDrawer()" aria-label="Open table of contents">
  <svg viewBox="0 0 24 24"><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="18" x2="20" y2="18"/></svg>
</button>

<div id="toc-drawer-overlay" onclick="closeDrawer()"></div>
<aside id="toc-drawer" aria-label="Table of contents">
  <div class="toc-drawer-header">
    <div class="toc-drawer-title">Drain Buddy Hub</div>
    <button class="toc-drawer-close" onclick="closeDrawer()" aria-label="Close menu">×</button>
  </div>
  <nav id="toc-drawer-nav">
    <a href="#hero" onclick="closeDrawer()"><span class="toc-drawer-num">00</span><span class="toc-drawer-label">Top of Hub</span></a>
    <a href="#toc-section" onclick="closeDrawer()"><span class="toc-drawer-num">TOC</span><span class="toc-drawer-label">Table of Contents</span></a>
    <a href="#overview" onclick="closeDrawer()"><span class="toc-drawer-num">01</span><span class="toc-drawer-label">Brand Overview</span></a>
    <a href="#products" onclick="closeDrawer()"><span class="toc-drawer-num">02</span><span class="toc-drawer-label">Product Line</span></a>
    <a href="#mission" onclick="closeDrawer()"><span class="toc-drawer-num">03</span><span class="toc-drawer-label">Vision, Mission &amp; Pillars</span></a>
    <a href="#voice" onclick="closeDrawer()"><span class="toc-drawer-num">04</span><span class="toc-drawer-label">Brand Voice &amp; Tone</span></a>
    <a href="#personality" onclick="closeDrawer()"><span class="toc-drawer-num">05</span><span class="toc-drawer-label">Brand Personality</span></a>
    <a href="#visual" onclick="closeDrawer()"><span class="toc-drawer-num">06</span><span class="toc-drawer-label">Visual Identity</span></a>
    <a href="#audience" onclick="closeDrawer()"><span class="toc-drawer-num">07</span><span class="toc-drawer-label">Audience &amp; Personas</span></a>
    <a href="#competitors" onclick="closeDrawer()"><span class="toc-drawer-num">08</span><span class="toc-drawer-label">Competitors &amp; Positioning</span></a>
    <a href="#objections" onclick="closeDrawer()"><span class="toc-drawer-num">09</span><span class="toc-drawer-label">Objection Handling</span></a>
    <a href="#journey" onclick="closeDrawer()"><span class="toc-drawer-num">10</span><span class="toc-drawer-label">Customer Journey</span></a>
    <a href="#angles" onclick="closeDrawer()"><span class="toc-drawer-num">11</span><span class="toc-drawer-label">Marketing Angles &amp; Hooks</span></a>
    <a href="#creatives" onclick="closeDrawer()"><span class="toc-drawer-num">12</span><span class="toc-drawer-label">Sample Winning Creatives</span></a>
    <a href="#social" onclick="closeDrawer()"><span class="toc-drawer-num">14</span><span class="toc-drawer-label">Social Media &amp; Channels</span></a>
    <a href="#partnerships" onclick="closeDrawer()"><span class="toc-drawer-num">15</span><span class="toc-drawer-label">Partnerships &amp; Influencers</span></a>
    <a href="#discounts" onclick="closeDrawer()"><span class="toc-drawer-num">16</span><span class="toc-drawer-label">Discounts &amp; Promo Codes</span></a>
    <a href="#seo" onclick="closeDrawer()"><span class="toc-drawer-num">17</span><span class="toc-drawer-label">SEO</span></a>
    <a href="#cro" onclick="closeDrawer()"><span class="toc-drawer-num">18</span><span class="toc-drawer-label">CRO</span></a>
    <a href="#glossary" onclick="closeDrawer()"><span class="toc-drawer-num">19</span><span class="toc-drawer-label">Glossary</span></a>
    <a href="#returns" onclick="closeDrawer()"><span class="toc-drawer-num">20</span><span class="toc-drawer-label">Return Policy</span></a>
    <a href="#fulfillment" onclick="closeDrawer()"><span class="toc-drawer-num">21</span><span class="toc-drawer-label">Fulfillment &amp; Shipping</span></a>
    <a href="#testorders" onclick="closeDrawer()"><span class="toc-drawer-num">22</span><span class="toc-drawer-label">Test Orders</span></a>
    <a href="#shopify" onclick="closeDrawer()"><span class="toc-drawer-num">23</span><span class="toc-drawer-label">Shopify Platform</span></a>
    <a href="#faq" onclick="closeDrawer()"><span class="toc-drawer-num">24</span><span class="toc-drawer-label">FAQ</span></a>
    <a href="#resources" onclick="closeDrawer()"><span class="toc-drawer-num">25</span><span class="toc-drawer-label">Resources &amp; Contacts</span></a>
    <a href="#quiz" onclick="closeDrawer()"><span class="toc-drawer-num">26</span><span class="toc-drawer-label">Knowledge Check Quiz</span></a>
    <a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'brand_hub_logout', '1', home_url( '/' ) ), 'brand_hub_logout' ) ); ?>" style="color:#B0322B;font-weight:600;"><span class="toc-drawer-num">⎋</span><span class="toc-drawer-label">Sign Out</span></a>

  </nav>
</aside>

<!-- HERO -->
<section id="hero">
  <div class="hero-inner">
    <div class="hero-logo-wrap">
      <img src="https://www.drainstrain.com/cdn/shop/files/Image20240717003911_1_1.png?v=1721626068" alt="Drain Buddy / Drain Strain logo" onerror="this.dataset.failed='1'">
      <span class="hero-brand-text-fallback">DRAIN BUDDY</span>
    </div>
    <h1>Drain Buddy<span class="hero-strain">a Drain Strain® brand · as seen on Shark Tank</span></h1>
    <p class="hero-tagline">Clear drains made simple.</p>
    <div class="hero-stats">
      <div class="hero-stat"><span class="hero-stat-num">2015</span><span class="hero-stat-label">Shark Tank Debut</span></div>
      <div class="hero-stat"><span class="hero-stat-num">2,900+</span><span class="hero-stat-label">5-Star Reviews</span></div>
      <div class="hero-stat"><span class="hero-stat-num">5 SKUs</span><span class="hero-stat-label">DTC Catalog</span></div>
      <div class="hero-stat"><span class="hero-stat-num">4</span><span class="hero-stat-label">Major Retail Partners</span></div>
    </div>
    <div class="chip-row">
      <a class="chip" href="https://www.drainstrain.com/" target="_blank" rel="noopener">🌐 drainstrain.com</a>
      <a class="chip" href="https://www.drainstrain.com/collections/all" target="_blank" rel="noopener">🛒 Shop All</a>
      <a class="chip" href="https://www.drainstrain.com/pages/shark-tank-update" target="_blank" rel="noopener">🦈 Shark Tank Update</a>
      <a class="chip" href="https://www.drainstrain.com/pages/in-retail-stores" target="_blank" rel="noopener">🏪 Where to Buy</a>
      <a class="chip" href="https://www.instagram.com/drain.buddy/" target="_blank" rel="noopener">📷 @drain.buddy</a>
      <a class="chip" href="https://www.facebook.com/people/Drain-Buddy/61551007854737/" target="_blank" rel="noopener">👍 Facebook</a>
      <a class="chip" href="https://www.youtube.com/channel/UC3hftsAarfdE1pxsVyHieSw" target="_blank" rel="noopener">▶️ YouTube</a>
      <a class="chip" href="mailto:drainbuddy.cx@inventel.net" target="_blank" rel="noopener">✉️ drainbuddy.cx@inventel.net</a>
      <a class="chip" href="tel:8885104278" target="_blank" rel="noopener">📞 888-510-4278</a>
    </div>
  </div>
</section>

<!-- TABLE OF CONTENTS -->
<section id="toc-section">
  <div class="card collapsible" data-section="toc">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">Quick Navigation</span>
        <h2>Table of Contents</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
      <p>Tap any tile to jump to that section. The floating ☰ button (bottom right) opens the same menu from anywhere on the page.</p>
      <div class="toc-grid">
        <a class="toc-tile" href="#overview"><span class="toc-tile-num">01</span><span class="toc-tile-label">Brand Overview</span></a>
        <a class="toc-tile" href="#products"><span class="toc-tile-num">02</span><span class="toc-tile-label">Product Line</span></a>
        <a class="toc-tile" href="#mission"><span class="toc-tile-num">03</span><span class="toc-tile-label">Vision, Mission &amp; Pillars</span></a>
        <a class="toc-tile" href="#voice"><span class="toc-tile-num">04</span><span class="toc-tile-label">Brand Voice &amp; Tone</span></a>
        <a class="toc-tile" href="#personality"><span class="toc-tile-num">05</span><span class="toc-tile-label">Brand Personality</span></a>
        <a class="toc-tile" href="#visual"><span class="toc-tile-num">06</span><span class="toc-tile-label">Visual Identity</span></a>
        <a class="toc-tile" href="#audience"><span class="toc-tile-num">07</span><span class="toc-tile-label">Audience &amp; Personas</span></a>
        <a class="toc-tile" href="#competitors"><span class="toc-tile-num">08</span><span class="toc-tile-label">Competitors &amp; Positioning</span></a>
        <a class="toc-tile" href="#objections"><span class="toc-tile-num">09</span><span class="toc-tile-label">Objection Handling</span></a>
        <a class="toc-tile" href="#journey"><span class="toc-tile-num">10</span><span class="toc-tile-label">Customer Journey</span></a>
        <a class="toc-tile" href="#angles"><span class="toc-tile-num">11</span><span class="toc-tile-label">Marketing Angles &amp; Hooks</span></a>
        <a class="toc-tile" href="#creatives"><span class="toc-tile-num">12</span><span class="toc-tile-label">Sample Winning Creatives</span></a>
        <a class="toc-tile" href="#social"><span class="toc-tile-num">14</span><span class="toc-tile-label">Social &amp; Digital Channels</span></a>
        <a class="toc-tile" href="#partnerships"><span class="toc-tile-num">15</span><span class="toc-tile-label">Partnerships &amp; Influencers</span></a>
        <a class="toc-tile" href="#discounts"><span class="toc-tile-num">16</span><span class="toc-tile-label">Discounts &amp; Promo Codes</span></a>
        <a class="toc-tile" href="#seo"><span class="toc-tile-num">17</span><span class="toc-tile-label">SEO</span></a>
        <a class="toc-tile" href="#cro"><span class="toc-tile-num">18</span><span class="toc-tile-label">CRO</span></a>
        <a class="toc-tile" href="#glossary"><span class="toc-tile-num">19</span><span class="toc-tile-label">Glossary</span></a>
        <a class="toc-tile" href="#returns"><span class="toc-tile-num">20</span><span class="toc-tile-label">Return Policy</span></a>
        <a class="toc-tile" href="#fulfillment"><span class="toc-tile-num">21</span><span class="toc-tile-label">Fulfillment &amp; Shipping</span></a>
        <a class="toc-tile" href="#testorders"><span class="toc-tile-num">22</span><span class="toc-tile-label">Test Orders</span></a>
        <a class="toc-tile" href="#shopify"><span class="toc-tile-num">23</span><span class="toc-tile-label">Shopify Platform</span></a>
        <a class="toc-tile" href="#faq"><span class="toc-tile-num">24</span><span class="toc-tile-label">FAQ</span></a>
        <a class="toc-tile" href="#resources"><span class="toc-tile-num">25</span><span class="toc-tile-label">Resources &amp; Contacts</span></a>
        <a class="toc-tile" href="#quiz"><span class="toc-tile-num">26</span><span class="toc-tile-label">Knowledge Check Quiz</span></a>
      </div>
    </div>
  </div>
</section>

<!-- 1 · BRAND OVERVIEW -->
<section id="overview">
  <div class="card collapsible" data-section="overview">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">01 · Brand Overview</span>
        <h2>Who We Are</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <div class="team-callout newhire">
        <span class="team-tag">👋 New Hire · Start here</span>
        <p><strong>Read this first.</strong> The company is called <strong>Drain Strain</strong> (the legal entity, the website domain, and the original 2015 Shark Tank brand). The product line is called <strong>Drain Buddy</strong> (specifically the <em>Drain Buddy Ultra Flo</em> family — what's on the packaging, on retail shelves, and in current marketing). When a customer says "my Drain Buddy" or "my Drain Strain," they're talking about the same company — answer the question, don't correct them.</p>
      </div>

      <h3>What we make</h3>
      <p>Drain Buddy makes <strong>2-in-1 drain stoppers and hair catchers</strong> for bathroom sinks and bathtubs. The hero product, <strong>Drain Buddy Ultra Flo</strong>, drops into an existing drain in seconds with no tools — it works as a stopper when you push down on the metal cap, and as a hair-catcher basket the rest of the time, with a removable cylindrical basket that catches hair, jewelry, contact lenses, and small debris before they cause clogs. The basket is replaceable, which is where our refill / subscription business lives.</p>

      <h3>Founding story</h3>
      <p>The original <strong>Drain Strain®</strong> was invented by <strong>Naushad Ali</strong> and pitched on <strong>ABC's Shark Tank in 2015 (Season 8, Episode 12)</strong>. Drain Strain was a lever-actuated never-clog stopper — a clever replacement for the standard pop-up stopper that put the catch-basket inside the drain instead of on top of it. The Shark Tank appearance built brand recognition and got the product into Home Depot, Walmart, and Ace Hardware shelves under the original Drain Strain name.</p>

      <p>Years later, the team launched <strong>Drain Buddy Ultra Flo</strong> as the no-installation evolution of the same idea — same in-drain basket, but a <em>drop-in</em> design that doesn't require unscrewing the existing stopper. Drain Buddy is now the lead consumer brand; the original lever-actuated Drain Strain still ships through retail channels but is being phased out of DTC.</p>

      <h3>Inventel partnership</h3>
      <p>Inventel partnered with Drain Strain in <strong>2023</strong> and now operates the brand end to end — fulfillment, CX, marketing, paid media, web, and retail/wholesale account management all run through Inventel's NJ-based teams. The Drain Buddy Ultra Flo line was developed and launched under Inventel's leadership; <strong>Yasir Abdul</strong>, CEO of InvenTel TV, is the operational lead on the brand. Naushad Ali remains the original Drain Strain inventor; the Drain Buddy product family is the team's joint evolution of his patent. Internal partnership inquiries route to <a href="mailto:drainbuddy@inventel.net" target="_blank" rel="noopener">drainbuddy@inventel.net</a>.</p>

      <h3>Retail presence — important</h3>
      <p>Drain Buddy is <strong>not a DTC-only brand</strong>. Unlike most Inventel storefronts, our products sit on physical shelves at four major retailers, plus Amazon. This shapes a lot of CX and marketing decisions: customers may have purchased through Home Depot or Walmart and not from us directly, which changes how returns work; product packaging has to read at retail shelf distance; and we invest in retail-friendly SKU design (clear blister packs, aisle-shelf hangers).</p>

      <div class="retail-strip">
        <div class="retail-strip-eyebrow">Where Drain Buddy Lives at Retail</div>
        <h4>Find us on the shelf at</h4>
        <div class="retail-row">
          <span class="retail-pill">Home Depot</span>
          <span class="retail-pill">Walmart</span>
          <span class="retail-pill">Ace Hardware</span>
          <span class="retail-pill">Amazon</span>
        </div>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · Retail-purchase customers</span>
        <p>If a customer calls or contacts us about a Drain Buddy they bought at <strong>Home Depot, Walmart, Ace Hardware, or Amazon</strong>, the return goes through that retailer — not through us. Politely direct them to the original retailer's return desk with their receipt: Home Depot is 90 days, Walmart is 90 days, Ace varies by store, Amazon is typically 30 days. We can still help them with <em>product</em> questions (does it fit my drain, how do I clean the basket, can I get a replacement basket) — but refunds for retail purchases are not ours to issue. Use this script: <em>"For a refund I'd send you back to Home Depot since that's where the purchase lives — but I can absolutely help you get the product working, or set you up with replacement baskets through us."</em></p>
      </div>

      <p><strong>Distribution &amp; wholesale inquiries</strong> for new retail accounts route to <a href="mailto:drainbuddy@inventel.net" target="_blank" rel="noopener">drainbuddy@inventel.net</a>. Hospitality (hotels &amp; motels) and bulk B2B inquiries have their own intake page at <a href="https://www.drainstrain.com/pages/hotels-motels" target="_blank" rel="noopener">drainstrain.com/pages/hotels-motels</a>.</p>

      <h3>How we go to market</h3>
      <p>The brand operates across three lanes: (1) <strong>DTC e-commerce</strong> on drainstrain.com (Shopify), where we control merchandising, subscriptions, and CRM; (2) <strong>retail</strong> through Home Depot, Walmart, Ace, and Amazon, which is the volume channel; and (3) <strong>wholesale / hospitality</strong> for hotels, motels, property managers, and apartment buildings buying in bulk. Drain Buddy is <em>not</em> on TV / DRTV — there's no infomercial, no As-Seen-On-TV media buy, and no broadcast spend. Don't reference TV creative when briefing ads; the equivalent assets here are the social-first, problem-demo-style videos used in paid social and the retail-shelf packaging.</p>

      <div class="tag-row">
        <span class="tag tag-inventel">Inventel Brand</span>
        <span class="tag tag-new">2023 Partnership</span>
        <span class="tag">Shark Tank 2015</span>
        <span class="tag">DTC + Retail + Amazon</span>
        <span class="tag">5 SKUs Live</span>
        <span class="tag">Patented Design</span>
        <span class="tag">No TV / No DRTV</span>
      </div>
    </div>
  </div>
</section>

<!-- 2 · PRODUCT LINE -->
<section id="products">
  <div class="card collapsible" data-section="products">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">02 · Product Line</span>
        <h2>What We Sell</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Drain Buddy ships <strong>five live SKUs</strong> on drainstrain.com today, but two of them — the sink and tub <strong>Ultra Flo</strong> stoppers — drive the overwhelming majority of revenue. Everything else is a refill, an accessory, or a heritage retail SKU. Spend your time learning the two heroes cold; the rest is upsell and lookup.</p>

      <p>Always confirm SKU details and pricing against the live store at <a href="https://www.drainstrain.com/collections/all" target="_blank" rel="noopener">drainstrain.com/collections/all</a> — never quote pricing from memory or third-party sites like Amazon (Amazon listings can lag DTC by weeks).</p>

      <hr class="divider">

      <!-- ===== HERO SKU 1 · SINK ULTRA FLO ===== -->
      <h3 style="font-size:1.45rem;color:var(--db-hydro-deep);margin-top:8px">⭐ Hero SKU 1 · Drain Buddy Ultra Flo for Sinks</h3>
      <p style="font-size:14px;color:var(--db-slate-mid);margin-top:-4px;margin-bottom:14px">The single highest-volume product in the catalog. If a customer says "Drain Buddy" without specifying, default-assume they mean this.</p>

      <div class="product-hero">
        <div class="product-hero-left"><div class="product-hero-img" style="background:#fff;padding:0;overflow:hidden">
          <img class="product-hero-photo" src="data:image/webp;base64,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" alt="Drain Buddy Ultra Flo Deluxe — 2-in-1 Sink Stopper and Hair Catcher in Chrome, with replacement basket. As Seen on Shark Tank." style="width:100%;height:100%;object-fit:cover;display:block">
        </div><div class="product-hero-finishes">
          <span class="product-hero-finishes-label">Available in 4 metal finishes</span>
          <div class="finish-row"><span class="finish-swatch" style="background:linear-gradient(135deg,#D9D9D6 0%,#A8A8A4 100%)"></span><span class="finish-name">Brushed Nickel</span><span class="finish-tag">+ spare basket</span></div>
          <div class="finish-row"><span class="finish-swatch" style="background:linear-gradient(135deg,#5C3A1E 0%,#2E1A0E 100%)"></span><span class="finish-name">Oil Rubbed Bronze</span><span class="finish-tag">+ spare basket</span></div>
          <div class="finish-row"><span class="finish-swatch" style="background:linear-gradient(135deg,#F0F0F0 0%,#B8B8B8 100%)"></span><span class="finish-name">Chrome (metal)</span><span class="finish-tag">+ spare basket</span></div>
          <div class="finish-row"><span class="finish-swatch" style="background:linear-gradient(135deg,#3A3A3A 0%,#0F0F0F 100%)"></span><span class="finish-name">Matte Black</span><span class="finish-tag">+ spare basket</span></div>
          <div class="finish-row" style="margin-top:6px;padding-top:10px;border-top:1px dashed rgba(196,154,77,.3)"><span class="finish-swatch" style="background:linear-gradient(135deg,#F0F0F0 0%,#B8B8B8 100%);opacity:.6"></span><span class="finish-name" style="opacity:.8;font-style:italic">Chrome (plastic cap, value SKU)</span><span class="finish-tag" style="color:#FFB347;background:rgba(255,179,71,.12);padding:2px 8px;border-radius:10px;border:1px solid rgba(255,179,71,.4)">no spare</span></div>
        </div></div>
        <div class="product-hero-content">
          <h3>Drain Buddy Ultra Flo Deluxe<br>2-in-1 Sink Stopper &amp; Hair Catcher</h3>
          <p class="product-hero-tagline">Drop it in. Catch the gunk. Done.</p>
          <p>The flagship. Drops into any standard <strong>1.25" bathroom sink drain</strong> — no tools, no plumber. Acts as a sink stopper when you push down on the metal cap, and as a hair-catcher basket the rest of the time. The Deluxe ships in <strong>4 metal finishes</strong> and <strong>includes one replacement basket</strong> in the box.</p>
          <p><strong>1,456+ verified reviews</strong> on the DTC site. Customers buy it because clogs cost <strong>$150–$300+ per plumber visit</strong> and a Drain Buddy is a fraction of that.</p>
          <div class="product-badge-row">
            <span class="tag">Hero SKU</span>
            <span class="tag">Fits 1.25" sink drains</span>
            <span class="tag">Includes spare basket (Deluxe)</span>
            <a class="tag" href="https://www.drainstrain.com/products/drain-buddy-ultra-flo-bathroom-sink-stopper-hair-catcher" target="_blank" rel="noopener" style="text-decoration:none;background:var(--db-brass);color:#082848;font-weight:700">View on drainstrain.com →</a>
          </div>
        </div>
      </div>

      <div class="spec-table">
        <dl>
          <dt>SKU type</dt><dd>Hero · 2-in-1 stopper + hair catcher · drop-in</dd>
          <dt>Drain fit</dt><dd>1.25" bathroom sink drains (over 90% of US household sinks). <em>Always have the customer measure the drain opening before ordering.</em></dd>
          <dt>Finishes (Deluxe — metal cap, includes replacement basket)</dt><dd>Brushed Nickel · Oil Rubbed Bronze · Chrome · Matte Black — <strong>all four are metal cap and ship with one extra basket</strong></dd>
          <dt>Value variant (Chrome plastic cap)</dt><dd>A separate listing at a lower price point with a <strong>plastic chrome cap</strong> instead of metal. <em>Does NOT include the extra replacement basket.</em> Treat as a budget option, not a finish choice — it's a different SKU.</dd>
          <dt>Includes (Deluxe)</dt><dd>1 stopper assembly with metal cap · 1 installed Ultra Flo basket · 1 spare replacement basket</dd>
          <dt>Live pricing</dt><dd>Always check current price on the <a href="https://www.drainstrain.com/" target="_blank" rel="noopener">drainstrain.com</a> PDP — pricing rotates with sales and is intentionally not duplicated in this hub.</dd>
          <dt>Reviews</dt><dd>1,456+ on drainstrain.com (chrome &amp; brushed nickel skew highest)</dd>
          <dt>Refill cycle</dt><dd>Replace basket roughly every 30–90 days depending on household; basket is the consumable</dd>
          <dt>Compatibility</dt><dd>Replaces lever-actuated <em>and</em> push-pop sink stoppers — does NOT fit kitchen sinks (3.5" drains — see Kitchen Sink Super Strainer below)</dd>
          <dt>PDP</dt><dd><a href="https://www.drainstrain.com/products/drain-buddy-ultra-flo-bathroom-sink-stopper-hair-catcher" target="_blank" rel="noopener">drainstrain.com/products/drain-buddy-ultra-flo-bathroom-sink-stopper-hair-catcher</a></dd>
        </dl>
      </div>

      <div style="margin:18px 0 8px">
        <p style="font-family:'DM Mono',monospace;font-size:11px;text-transform:uppercase;letter-spacing:.1em;color:var(--db-brass-deep);font-weight:700;margin-bottom:8px">How the sink Ultra Flo cleans — Pull Clean Technology</p>
        <img src="data:image/webp;base64,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" alt="Sink Ultra Flo cleaning steps: pull out of drain, push side buttons to release stem so all the gunk comes out with it, basket is 100% clean. New basket design allows for improved drain flow, easy removal, and Pull Clean Technology." style="width:100%;max-width:560px;display:block;border-radius:10px;border:1px solid rgba(14,83,121,.15)">
      </div>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · Sink finish &amp; basket-included confusion</span>
        <p>Three things customers regularly get wrong on this SKU. <strong>(1)</strong> The four metal-cap finishes (Brushed Nickel, Oil Rubbed Bronze, Chrome, Matte Black) are the <em>same Deluxe SKU</em> in different finishes — all include a spare basket. <strong>(2)</strong> The Chrome <em>plastic-cap</em> variant is a different, cheaper SKU and does <em>not</em> include the spare basket. If a customer ordered the plastic version expecting two baskets, that's a UX failure on the listing — comp them a 6-pack at cost or send a single replacement and document it. <strong>(3)</strong> If a customer wants the Drain Buddy in their kitchen sink, redirect to the Kitchen Sink Super Strainer — Ultra Flo does not fit 3.5" kitchen drains.</p>
      </div>

      <hr class="divider">

      <!-- ===== HERO SKU 2 · TUB ULTRA FLO ===== -->
      <h3 style="font-size:1.45rem;color:var(--db-hydro-deep);margin-top:8px">⭐ Hero SKU 2 · Drain Buddy Ultra Flo for Bathtubs</h3>
      <p style="font-size:14px;color:var(--db-slate-mid);margin-top:-4px;margin-bottom:14px">The other half of the Ultra Flo line. Same idea, sized for the wider tub drain.</p>

      <div class="product-hero">
        <div class="product-hero-left"><div class="product-hero-img" style="background:#fff;padding:0;overflow:hidden">
          <img class="product-hero-photo" src="data:image/webp;base64,UklGRuphAABXRUJQVlA4IN5hAACwBwKdASq8ArwCPu1ysVKppqU7pnOaI3AdiWVu/ELZUEbmYk0x37De7X1vzA9vTlvy3jrYAvS+XHZl/73rH/sn+89hnnveZn9z/Vm9OP9s9RLzl/V9/y/q0ect60/+MyULz7/tP8f65PIj+j/jvIvzy/S/4r8h/c/y59seqb88/HX9T/Lejf/k/z3+c8w/mtqC/nP9o3gPh/ML9yPwv7P+oF9N5vfaf/1f5z4BO/e8QL2P2BP6B/qP2v92z/b8tn6P/zfYZ/P0kLYS5bCXLYS5bCXLYS5bCXLYS5bCXLYS5a8BsoNP4Vkn806vCaxjTWMaaxjTWMaaxjTWMaaxjTPRWlK5OZXMGSJ5vGAMl7tUvuMvEnb9XXssVqic7RBBnPsbSRehdBApPv4eRfnKJgJRMBKJgJRMBKJgJRMBKGWEe7qprCYMN+tFjm3YZdDaZ1ByPZukmlEnyHsMGmT0DNH5LnKXzhoH/qimgvp20v031oGXJB2tgJRMBKJgJRMBKJgJRMBKJgJXyelPba7lRKfqWRsSTfLGRrkE3NR+ypIFSWpCqbpXAJte8XEnOqbGQwRmtY8F6LNbHbASiYCUTASiYCUTASiYCUMr9Rl4uln4eIa2kwsfz2auV9sQlbxBxvgM1qDfZZuAiHiK+cystg1jRwK8t53CqxvjpJgdJMDpJgdJMDpEqYDyY7ah1rGxQvmpwecGU6OuRo3iojeIYZLe4s4QbALCRXf2J8o5kdJGL2nQQLDkZB0kwOkmB0kwOkmB0kwNT9DlThQgYCGTaT7YU66DsrS5WnVNQ0JKtjYMhOU+a9FGVr8fM9iItBRC+HE10+qaio5COBg56a4oc9CWTIiumzZMJcthLlsJcthLlsJYAVEAbg2UNut2rhLrRmfskFPnsICUtG01UYjSwmjauVFUMS9ZXnqZuat8OEoAV6NRjCesTOHls8sUyDWoJY49T3o2PNDf4/oLEFXoCHaUNZB1jfHSTA6SYHSTA6SYHTGA9cFJcOaZJNFQreSJcthLlsJcthLlsJcthLlsLdbAPK6Qa46vf88KAz+B9wS1Ht4SxYU0+JgJRL9OYOjqrWVXwGAA6SYHOyoGLs+DvpCU9F0r4PcoZrgEarqijWqzEzyWsr8Uv10o9bTkjSkPVOgdad7t9reid09M0qCX0GRbLzDGHLXWuMnS5n8zoGDqBosDNcj4SSFeLyDAQizou2EszpTRT85Q5Fhp/UfIC7UAdG6olA8ry0KVTJZQ7PyyYSyO2DYaI8JWRhz7bewVoE9UoTSKnlZqgLmGnkUGpruZ8Wtj9xmw9WhmmOwKYTfdSZEm1tBLAIyaFKxxIuUJiJ7EoSD9JG4LZQvFfP/eAaXCJe2PyapP/b+Mu8ehXViKHfXOqOIQU0X0uzjGho1bMM9FxJjOehmxa9F+coeF5CObQ5jh1MnS5UHTnqu39AaaOf8y65QEb68X9ImucyMK3+Q4ApzK5wNw8Nvm7esedydo22/1GXvUwpUrrlGOwKWh2hofQu6vibVULscBg+9F0ecDqFG8E6/ISgvC/pOv7D8HGol2akfnKHhV4/EUhdDorW5neinbDTE9uc3NGt/InK9RYmqeV4KTXucwa7g/6H3vxxbFbMsONujYim1Lvq+2MgXPd3PWAksmPikHaldkYhz7R5pIR2ElzDKJKIz7w6RgF0AxXVoQmqvSe1KVhPfjy/zb957ovIlNDCwZRMmYUJT8x+2UpDlIr0ZXXawaJCiImbaxHhFNjTGYZhRJ6zCYwBeKHJfhCxqiLZJL8KMaQ26s/YTI0ouih7m1CGmnaO9H6Wz+KqR+2eEsCuitY6ckEiRx5J+w9kwgt9mA2MAdusehiNPqKhh9jjOHYUaUlMXVNXrPIiOwW61esP9zutgJQ4IDozLCD+RayO/AeWHwRLIvwVocfuVcdECpLNECzRpMiLQP2gtaI1hLlsJccoB30T5WEHI5zl0fDuIkBZOgA6feHpd+trwbAN+ATKIgfg82K8DO8oH4yhwmz4cUeIX1ST0MgOkDs0/4JFU1MDnTjA44z/q3lzttHWBje3oN9/JCbIRaCFTOcNvOvnglbCy1JNXfz1bsSom9DyvBhrdT4xXN8SW0JHjA2OEBfzq/+K9gfCTb5hHlpcwMz/9kt+1XqqnuCHZb+s9vdghehw8VLnPp+kI/zZKGTv/BHpHrnX+K+f+8BMc9RyA8wikLq+5sWTCXLYTHaBDzG1Lt2Pj83lY+GWw0cREIhZhYUQzmUeCeE4mWUiXXgyPsJK88+VGpT+dAk4zTrxamsCMplA8vY6XSmu2FcO3C4R+kOkj6BvhOWTmgRSxfFlG8mAlEwEocjAkMH2odPifa/7Y3PrHTjsJ+nSW8pTEilppJQwQQ+osa76jVm+LWR+iJTZyRAUJfl8kuXXcWKS/S2R6sWSbQQWOZAYroheLGso8pzchGf4V9s8wNPDjDdyXoGEdsBKJgHeK5yzmB/FycIOFwI9be4nvnz3lVqi+R/Ykl2h8JBOxdo/yqbOyEKwgY8AoyMI/y3wB/sGNR/0KMo8TCGe8kDcbuenYxw4/3gJkbUoAoalr9+YMGaO2AlEwEoZXWQ4J2FvKGBC7Af+dUYTqm/pVSchOQZbSHtnTb+TjgE7gemuFstruZ6oKWkA/Unf0nhevCO0p+XHrNoFrnPr2BBzlp922+jjr5d06YzgDiXEes1ZVCO2AlEwEob+GPgVsVlEp7tKLu/wasywb9rX1vo8o4ENwY6ic1cXERB8uaTljcIfsFUuNUvW1IXx7r82nfCvPYt/ciM8fnKJgJRMBKJgJRMA7NGqB1uTJfbTpu1c90NkM5tNZ+Ktua/lJ+gM5GdlSnCbczg9y1OyvBB6gn1e9380MOG70L7S15hqZhKuuZ/sqLHmjtwjlDY7YCUTASiYCUTAPVQGDsQh2D+lAECbrAMRlEiY4SfFYbcRnaCViMAViQqzHUTVTghX9Sf4CP/Ub1wDhXYTu6J+RojQrNTep/3P3lqbAwJU/oV7cA4ou76ZCJLObzlo3bASiYCUTASiYCUSuG3IDad6zUUJTeX8pewv+lcHDSs34PHta2rU/zsTmhL2NqMCYZt3EWqgnVRVLerUtmg2WQkfthyOS0wPq98XxI+lkzy36xvjpJgdJMDpJgdJMDpJfmPW93CF0aSM8KtzAT27J2ep7EeT+4L6+K6Fm8sOzF9TUxjQRL19O8tS4Bgknv7K81NcUNXQMszPKDAIb5TfM9STsBKJfpDKoKIStn7ASh9zGmsYqRYrovMfGocj5p6+rnQsOPYnJWnCxx2/vJHo5+maHVoz+eGW2HWDmbjbh4qpeyEFCWQFdTXmDwPit0xsyjtgJQyilRDzB0m4wOj9rjDli9Acci8o9ZMgEtVf3T68XyvEpKuNIIpDeeiojZib4i+sYteXZysI+3u26iViB9j6XQNu60rukf9po67meq1912eYbwelH7kxDktqsckgJRK9Z9FCFlU7xofWmIDxt0OepfsNwPFW3Y4eBB8UUO0dWftJdxGeCetCxk3CraJCitZcMWqfJVv6wSpY9jZb3l20ySYHSS+7+umUOaQjJs+pLQV0oFxQIIRKdGwxGaa0RuAf3b3GyPVzzeWO1gqX4PWYSWOtY3M3euxZzQ5DegPVO7vYV4F4uhjuVb3anRHmbe/3yHE6A8aQGkyO73es5P9O+XVyzfZV5Blr13jFFalpvjpJfVJtlVUREEllUAr1v4BcSqE7evUUA1b9CNO7cz5Vyr9PgPn+SxGhaWWcfKNSGM1MAgWIEIHr8om+spSaz8qmLxDV3b2ttz1FrbsZFZScQufvwQbeEw2sZ9EntudJL9PC2CBUJrW7iN7woI8DQPOXi4v5RHQV7ak2uvfpQMCFXaT/3reB3H58/3cuiE4B7WwNNtB7k4wmf8QehnJOAROwEol+k+fC9qphXBmIfHBF9zBqyN84dIcPCl88P3M4ywy6T6cOPb7YhdeQAoUl0I7YCbA4o4VD52YGxRKtjnPPR+HI029e6MV0oGb5Gpii7HbAShyURKGtxBwRSJXM96DfhRbv9wJA3AsvvyQe6ofzJGX5eds8ogi0WpXtwrsEo5JcNPc1MEOEM9WO2hRjTWLb78AJ2XGsuff1Ey/Si7+3GQFApAdWwJRMBKJgJQyLZw/bsdHoFI0mITgRY2fh3D4n/zGpiDZEBegay4hV5wu+IzuoHDelyzKpDiNx89RM3DI4f6mLsVx/nkbkyjr2uEL0D0+B8xGUOL8jHdbjj+z+EV9oKJgHrBUgaRhar6MYt9KyOaxpvjpJgdJMDHgkvAIO0kvyOPdh+CN4yN8q7/QTplrMNj9R0e8PHa6ZDtbnWlHEPW00UpxcoFea3qjqV08jaTQngg6Ze5rKJGWGxjTV4qj16lD+Iere8nJKSYHSTA6SYHfHTa63NBBWB6DlMDpEn7MapfXNZJJ61K62YR/T5Nqbq9NP1kql5gcpgdIx/av1+gjA18vLGVwcM7rePXevnCJRZL5N/fvtNWROPjdEfxfMbUO97bvDKK4EAXs7x0KPKIZeYbOVFzvbPOomAlDflLvetHWq9KETZpAtYCUF6XhSKKWyn1ywXICaxWXKhmisDkbhUvdCWrpiEp2HfBdmEoRUrEi7eUBYjWlnaTr3HXbymSrSmSEVIb8PvrMOsJuujPUkAVzpMPqxP1ayWntEz24TyTvBf9jU4ZqM2s6mCGRBZ+lFcl3cMf3BCdDqAnFgZPUJKxZKjQ4NxREk2U8TxxTSypjMKHuvzjeakRNHxvWMaaxjTWLChpjhBWDCz2WZWOV+ZO8peoqUWugLOkvHMREtmKe2LA9lPSE9BUTVH4jqFWIdVmxwUMqY9vNKE/F7TQdpN5qS49kyZBiXTAdB1WNFPx1MYHQDNiu9jmr8fEvwlPv32kQRMBKJgJRKj9vZrLHW578eT9Ap5cMOl6OD/nussJ4HPZaXRZkn00W4tW9BmTiKN+U81dpn0Xhtz9H8SejgN0ZGETHECuSw18HKkmuBukDHQIG04g7kyiYsHuA6SYHSTA6RjWsLD+6i26I+/iTmts++J/dpTIF7kJYakU5YPsRERLmxAAKal+6iKcMlYDIn9MYrtb7bZmVlFKiRBP+KY93dmRY6J6M5lmHInX+vracVGvGAOPsiq6YBu5hKF91+bI4b86F2wj5Ksh9yHal1/8pzvp5kwlx6DtEhviTp2UnifDsZ3VHSelHiaenSWufb0fInV/3bfxvsXdDQfb9FMBzqcZxsT/MUGdASaZ9OIOv7TPnqCIafXuYPSOBg+uhUmVDPFYoYl8tGujNP9JOjKy4+OcAOQDaFvFl9IiZKj/A5iVDqIZxr/H2qFh92C0E5YB8jkceCEV8dcwBZ3Nu6rRn4WSTFI9ytn1tf9K7AShrndOZO3DhjUxjkAy1OKmszwINfdPiI4gOiej5MCShOHAMn+zF4P9njUpn5yiYCUS/BBjxx5BqqnmW4BqJKRdDPyheGsQ0YEW+FCK2TCXLYS5bCXLYS5bCXLYS5bCWBsSEY0TlgDsRXH2wAD+/nAAAAAABfHMNffGUiC59TZcNsKDJqe4CJJ3Osx0RIt0C/jI9WatUdk/hN5kvEzJY99Xv2f97EawjgYWx/AeDrCdLmIAAAJ9T/hyHep/vFrz1YJYYuY3qL8jCOTAKrq7xrr3D9NFI6Z5LNEGPMTxEe0iFpfHK4wrHyFaMv+Ph3oH3RKzuocywq0PYuoW3ySOeDlNo6aJsXONpDfxhZjw1qhTKnadmfkMI7tbBRQ7//zjpfGF0luO3TshagjdoX9yExTebm0+gir8JBO29xjZGevIDMf1yujDvBmHEhHTt3ofv0gubaflMLult8IXrdl/MzBEy+HZtsjbDhcj2QcqgsAdimg8zFA98bE3Xu8Zm/pa30f+pvp+l82oPwoUa9+P4X8YO8Dd6Vtk9iIFZjF+5ZetuhUq6f6B0tkWGN+lSTsn/8pt5yEYy8cpoEC6PLoZzHJs0pV2Y+/YLyHr0kk2ikvXaZaaC1zYjA4YMjCIa/doACShRTGeojPMck8M51IAAAEbFdOSw6y+hCWP/WPR867wXwUvOsqL60S7wVXfdLGJhsOy8i8zF9qdPejlCj6ZqHGcDNUzLygre69C3rHd296seg3Def3T10S1Ka9KJ6Yo1vwdoKG6bA+rnfLvRMb/0zeP9ROWT2s3wpfHaBpl4jttLhSU2yPbtMwxq5LO5s66sEtWgoHrL6uBtIyTeBamGrVxcebgclBI4lykuzLAp0QOrcHUt47iRrXochaPckpwn0xWf+YSXWamda7ZmA6TCE8xCpmO21zH+FFY0lslCZ/mIk1fkRoqILdpig41/1ZJdDF34Oua28K3VSFmmSD0HTkRp1JrXyERQ6CBFiCuCql9fdK+2wHZck4uR/LMKazUCtuDHFntnTSSO9KzzwafxnBHus9obYUKyhuNr8fyNeZZHDCvrb/bQ7HiobebML0YfcDQrpE8sXtVL6Teqg8c8CziI9vd6NUsBdltI3aq481lINzXjHvMUQSlPyIU1PlTFeQCAAAACljaRINuXD5JVmbpexTskzTw8o+PnKkVR8CQhVSam760OV3YEM4aF/aRHwxBIYpWFaAfnVpfJ7x6jQyZrPNPJMZjesXoZS1DRZfl1V1qZ/frgeOkWKw1j1fcKaxNNIbAMiJz1VJDAW/pDpHDZC2/gZm/m5ThDf1/aQnzNyL8A1oy0Ev1cIqlZxZgEkXxh+PAODJ1fdFbHMdX+fxxzzVg86DrrR8/bE7vT0TNM0Rw69Em35l9C3MKgLwMMfn5B8SUoNFQw3SGWUTQrHNkTEvWcLZLi6+dhhxzRytlECuWvA/N9W4YdJ8u6jkhtDp7EdZnuqGe12cD9zsyrItfnKdLwV3cQ60HYgEYXwdT65mnJjb665eJZ+wvsHCxHUUb/z1tHGoVNDRiFrTG92ycDL+D98Lx4xu9uw8EnbeUxVyojVytg+ybz4qBOqgAs/QtBrkowLWgqi36miGgfDROGXZcEg/LwGAWebeXEuX+L1uCGlH8YrJerkv3MUMfJr6wuqRSaf9I5wriiBXniYyPWabZGsl/p+bIuiinCEQHmlDZqvISlSTf+gAABQtXR2p89/8pjhpMaqjM3M46dp/NBhw08dEc0rZaYaFmFIZv91ToOb5aph7/VKXuzpBGGINlERTcnA9Qbj6J4uWOPvFSRqnOH2zisBbxDXloLySNBDIqaFuL8+8C8jlolKrm8vcGBmD3467dQqmcx2CINBXUOSAJTEeyMy34WyJGOBEo7N/OR8F+RwBdEN2SCxYHRD6olLGy+zWAweWJBMqyFHSbi3+qOa54/rRSWXdz96oHLz5Rz1ezvNNxtaXJxl+gcOecGIgS6yubHhOlVE/K0EVc1lufxkMEeOGKHPu/9YaV9cq4+3mQiuZ18F0AESH5RtfMbf7SPe9/8JR8Wbv6zeAdE0qgq797ZawPoJljLfSxwHMSXeW+QCCHATjFnD241/UobXekr/OIwbb9Pj+kwy4Q9sQgfQu0F4kazsPMF6bRmgL8xWTCECDNa9oy2xZuMfrmXS2ePlwRpnRHg0SAAAIC5l+h/0BwB6vHlDidWH/KLM6SduX58fVSWbZ9fMKUL0eTXn5O3WXK+l3Oox7EB1WPfjfi/eN90v7Ub42uvqT6jIWufK+18l7AfhS+aXRHmWzZRj4SYU6E06GkdTdErkpA4zAX4OADubmLCG2WpAVxXlgFD2h4qGt73/u7j4JKvwA5CTQ5mmDHxGlfo9gKo83KVWCuVj8lING9o3bheYTVF25h/pK65JPSL0L6raR79sV5isS+s2zLtD0Kf/rWvLRdWJ6a1wIyJqVsZa+PP9o6khh/HzmWhkHUKKGgzmTVH+bGCdxM2tX438+Q/Xo7xTWL69ESsigvah1vGS43ETTy85tSyzBIn+x2UhJJra61HOtOiaOqB3rBT7TKqrjn5PJbmGSzyYOt3ZTlqAM9VWnnzpBesxWwoR3hCAAS8wTF0bjfVNq5aoFwjq7ervzcyIhW1mi766ba15RfozHY04IEIEaASauDoViJabc+qHkCpPMpYsXcW08n/s8KRIhjgRD6AAW4CuODV7jFao5925whASJ6HF3vudH8UIQ+eRpkiJcexYWIq55zh1/HX46qrhRW8F68RrKaX+26nyqJq9yfCXRKCTKvKtylwGF9yIR6dfYmBfV2PbxDDS5LlYVScTyp22R2GO5s0beN/5l9evjCeAXpuGoHkk8eisgdKOZSaKgm8m6+rngopTX4C71ooI+X14bD5lgp7JLXf1oU48PQCZ2vXi/SJ6/j9biIodTXzLdPlkIwCGCpu2v7KvdybdIw9VTyQWsOM4wH5nEhOg3IK7DrwuaTI09UnQOAwhc7pGpfaYxx8Bo+oDdus99Dh7HMDids7+kQl7O78kIO8Qpuxn4imq/RIgMnuJeMCPQ9+aEPSdCUFwj3IvRkVYq1PldTPc7immiDaEyEKnBNyL7vvphbS0rsDzDYdTRsD2OpY96AAQC16bvpHSGq3aeWVaYu6/lbc82QTnsalSDfqELe9cejUxal94fF0QJltLvhQw+SFVYUN9k4uRGKcm/uk8n6lbcHSWqulrvbNB1h8JaB4s1OdvHizBKAtmFB6OcbPpgsp0rmfBrc62g2hxmyFF/j/EZ4UCevwFU9DC++yqfJfl0NPfjzanHvKjgjK35Z/L6qlIM7h3lLV1Rq0idU8hqdO5iQ/Rz12+C9KyGYCdeTAHlwlEsuN5PdWPC9BrGBuaf1szVGuUtVuxxF2n0LL4Ow1FtiLdqJZqD0LTitiBiojPwTTMObWZxMhaV2JzqqPJRCAqOZnIupubp7Jm4PkaBwPbbc3Kw8+EPqFPbnaNVwnegTWl1C/JSAnKYKNH9F2VSc+vTyarKT0aIdVAFszE3RLjCyZlFWbhCIqc0QCrCgOg9sq0N8NS0QM75uqDFvE8rK4Rf4gy4kOtQF/Ox61OUpQBNxBCdiud6r0mAxB1zquZhcLrxsLmznjfA08kuyrbL3gDqnfWsEA9+EM77PdElqybSOl8Q4aXM+j2xiyVRgnwmAAABaEjJapAoSAAAAEJFd9fLTx3FzjNUqbDEhpC8IrO9p4gkODUeOs172ap7umd27C+X+H2S+vXO28DC223IVFHrQQNdUoduRdYDH0AC74qz+gAr5E/Q1bao3l7aLgC2pvOCmInSefyqoK87f4UTQYt3paiimKlPYMeFKm7ii66qQLmarTkls/xg9QqFYARKKXlwsVhAx8YLATE0wACC6lvBTAqV2vKqczQAaq99J5+HQgfZXHpgveqBH3IQREsWH0MgpuvIqtDf9q0xmyQTFqVccvHQpoqkqu0fWxdWBgHJFqGSsItkyFIcdiiKYJYRxUbD/s4v6HcY9EiBpFp75/KYf5nwt4RAI7NctjsA5zcjvycbAJtRdckG1yw95mKRTzbLkU54SX/3pZQhamEJYpvD7WxFMWplJaSlBp5X1S7pIPgTFMWcrN376tDWkSiwS8mBNO2rKwTfUwssKksKp4Xc4wmGoh/jSSCKWB9P2bsQ+1Z/igHEdIKRF8Le6NiqJl+cxyZ9ya7Xos0Nx6nPdhQgBzvGE1aeuv3RAlhmqCNUAv/pE6taK7L0HdnmHv+RDZx7ilAEh3FwK6LmihHfeNtCIQUNn+3HqpWqY3XHEcpUwYrCM8NgB0QPOSDAPGmGmnJvI48sIj4qBnOsB6DOErlC4oGCSCmhtssa2EAGAvZg5hy+qEniUsCQ5IrHCVhPoyeix3nEeT+4GUomFuOZfFTcjjSXAchXe6blbNsHtKoiuWd40Tx648YpVej5I0qbriXThrEOCBLvfLHqLQMfcp7voXtiSWimRvcNtNVEpUOX5S/myq3PA4rRyXIZECDUY7NjiJxE4ia/fmzSGJrQw8GkQYZ2SShUETxKoUtBTO5v9tmsrS/Hsz+r9e2EbV2f50xHcD/P4cdWBwB+Hkkv4dWbXgJZHGtfSPKA/bfDqTAvl/xLYPP0aYIT84Uq95stY4fFT272my6wP6OV2TzZD3i9noUitXAj+pnqcqflZhRpkMDolMDe8fTypa1zwcTJQ2kiq21ljTKzb0ErX3tnAXpWWLJGAaQAQ73sYNCxSQKBYuQLR7H0S2Lls77IX3+VaZhysHmffOQS1u+PHvykHb3qravQ8SptrdPx5D15AhRtA2RCKC0FTz3EzVtLbXULbXDTk3NSZE82GSG9GI/47ZtEnmL5CLxA+5rIhTT+mgXAkzhnT/XBfRU5Z5w9FP2bZKvgeM/Wo5LIO6xTejTG7Hi34QfPkLZiwRaEl286893VO9z5n1KEBwqYDGsVODGNLUGyk6kiDf02NU4J4fCEcFK7RPRwWJExk0R0qJMQARdoPtBiqgWQyRoL89oXKb2kf5W54r1oAgwqMkkEJs2Alho55sSyw+LJjwHJ315eiRGDf84evZAkDJzq/Eum/FRCJjQc56uAEE7FfDr5mDe7O9x2GQtdZsJKKY43UktZqOZaDdhU7MXS7nDgEb4TUh6XsJb6+psPVzEc589iiCv2z/KaqBwAyDjuiwvPa46NnycBRHv/yHlffCkHXub5CjG/tanALtXj/flPAKBRw6/wr2v6NuX3gVz0ymf3EXX9NOQ55xbLF9zG2lJl7EKr7reh0mdnEnfOGPS58Modd1jcsUCOjqe47Nz9KzFm9Ruc6UBKtOiTtOkt6Ah+hAdTBbiKZxJC2hsSJITkzgDEGXvet33ip+XlS39HTctNdLTXlFzRoz4CsgiCofb6ho+pqcUXalNOI42phSjwYlk6bqgmampFyxHl34RTqiuWY3csS5/8/1n1o7lQQ8A8sGWoYWO2IPxpGt/peCFNTqzDrKVbHryNwsI+H244mOYoug+DiX+zqQ3+tp3w69JWTWnKuJNTWsPreNagYVISV5nuM62Cw11Ks3PF8sQWIpGrWpb4z0sdamSmMflhmieOQbdhxIorBaatFejAe3+dQLYKQcZqvGEb2HgkIfj6M6nAPdqZ7q/DXoxG2pt7sLRxhDyi3t90Y7LXTQ2XKnriG+K8k0MQ93cexQBdwsmSpecrZFj94m8rXgrIps+XzHUqfQCo5HdgWhr4TVmZlOdYBzuLEbYk3pUEss8iUN+y0c1184NIYprcV7eHc/nR7mUdXCLngGVo9m2ckb+KZBVYJovSvtdmoCuXkM+VW34HJ3BS/7AIB4ic7ZWhsZF0cwibc/4e4yeC6Rd+pQhxknKM2JAv45U0VNATUDiB7y13Fr+r6CoQPksEkd77KApvV4vTWRL+0vJTV/tf/VziktBkqHwgy0MCyz2oconZJmOGMa9wiLHpUMoYtywYyTE+RSKc5BYYkZJD/hBINrGgl5CHqEoyEeY9MXLRux+p5Idef649Mq+rM/1c21CeYLs3sdzQQDugLWE68Q2tqxEFADauOypvX9o/9q+lkNYw9t0aXcVOaF7IQkSnExPxr9El7VVhnUIBQ+IUaKsP/ZR9q7Ls8miK6UyRE9UZcTnLjzXZS0vdomx567NkIq4pXpBpNqCNP79CPCC/IF0JYo5fJyWzxMLsy7rHKmF9Pf8NuRr5QW9GKm+1R+GgxcQLq+D/fbMRWjv/Vy701P9DDuu1uiNNO9Z9jskCIcWSPtpvl9ZjnL4B46gxcovCEDzZOSjp9aH6d2WOIIqLRcWqR9Y8IO33VwzWadcaEcN8fBySVvaJzzXyWb3FW/x+iAjaSqIQh38EtbGeiRUe11cjfTxFTru6NQsOwsVcQrZo7HhfC8oeTDnxNWt/HM4h6u8kmLq+y3BFBNc5PzdLqni5EKu7LXlf+1zNuIjsKCaOaidph1+5QxFLb1c7qnSG1RIyq3NFFrKBcBQYJpeDv2EqJNDkpwaqRaNV6I+MfMgi8QAa97sCREWaOfTYYr8qObMfNJHHar7A0MDK/tW/GBkDofellYjPYPrloyFkKmxutjhAb1u8kAUIiH41I2zkmtk+Pek2R+l+f6uvegUPp2gYQYwgZeGGUvNbcguerARjfLyo/wwpFL0/EzYFQ5aZRaH+TB2wfhzPuNjuNlskDfRebgANf6IJGqUL0wXSXO71BU8l4VmV46gP/2CWye2tolGptmjwKp+0uQfCzZhzJM2jkgLC+uECXBMtoWviXRhrsSmtkigWXJO76W4a1MkKCcqKBtuEhD5lBSWanuDAh09vspZddu8cw3e5VoG963jADzZk37mMtzIjczD0TT4CgP0yVFm173zyQb8nSLUSof2Q7K9m1GbgJb8/r0hx1S/L6lUkHp95BEOujRhEkNsd1pUv1ZPQ53Mq33b9Y8g2JgLWasRhDU3TQSD8sVF+H0V0QhiIPFJdB6kUBIgKHX1nNdZV/dWZDjVcZOX3KlYMMDmJBtc7zqI5V7lmn3g+9BFg8/E1OyWzur4wGKcdOvMMxOcFcxhj9Q6FOKuTUmvU0qtpwoCRciI660Es5xxjax9r4QN7DMCGppepEJYsu8J6d72w4h4E3snjQlNZBEXYnkYU8fZGwh/pWwJxvcLTFy9xQNWzDVpgA7T5R2IGuSIxggzWoi3EnOtF+osSMuCPPmMT+7WKylne3im/4ORottkQ4f6Gk/JYRFsADCJKBxZd1V5Iwm1lU/yTEI7OHr84B3EAn+FVA1F9UQK1YO19qSkVOO8XHIhXxEQApVM/dbpSJaYGEksUtkK64U1u8S57HU1jnVGuZl9o1yZP0q6zLClw6JiJr5Is+SdS5WXuTw7di3SXrTfmMu4yHTmd9lhoLSPyWAwqMa5dEbxDaUQbHPbcaoUpXh3/1lzeIs39PeNLXNZekqDM+JadEQXZl4UE4v2/faUpfig+GYnk89kmDsV6GzpeBdRLzUAawo+yT5Bt5+knlaw19TZ/Oy+8hE7XqS5BcY7iqgZ8EjaqYBcFaUtJEc2VO/ulAzbG62ShmOSvyrS3caoWUx+331Q1ilnhqAE7Ff+UYy2UVj+OHc1j1fv6zrQz57QZC5wCNuv5qNehhhbsLUDpYhEsJKIWQekzAxYtwS58W+YuimZ209tfhO90z44iFYaSJNvnGRPBWGkiTb09A/Mk2kq7qwTCYRfKKKWtxj7HhNvstCeivNjwm32WguWTtwjzzJoSnT+6Y95PKBl5/iO78EzW0eF0eX7RdhIcadwyv0pQHsgTk7aYJ8r77Cxm09c59TzqSBMllgKYx1HIlEMWIe0Tx0TFQdkNGOg0mOhFtzZOYu62RcvzXZos0bW72sqeScp8uzvmQkukdaYueWr8ygViN0Ngkxd4qYgm09yZXkJxN8CCOjkvMRwEcEqqHUyYhcQnI+ED2yfUtzAsbHDdPXiYgg8Q3UPf6+Pf/fkwlIlADm+jSoEpmRa+SncEVOHM82lxZCF/7H87YpGCd+OkOhuH7p531hUzbDhs/YRnqOYk0LmNV3m4zBDUOyq+tgvdjwp0imSBXjS2hr6ZCo2QeZ3azlaQKMTspJ7UbxWuXzvUNuiAqLhLngGWmoUeJgyMMzmtzMTktorFKBBFh60FeFLh16IlnT3h7PpxoA1hRemuiZ3DhtY/uQwhrY3DySqkeGjYmN45U+etskorNEsv0f8dEYAWIL3s/AjYRy+V3VJ7iB/4VFXKsWfoHClqwqr07d1+Rbtz5WOr0M6V4ZPIgK54bcmrIgdD+U6zR68ro6ik2L9a/PTMH46xhVaxJGjAy5wonf1Tv/wPAfnzMjEcwYZZgWjE08RuF1pPMdDCVL2bb/pyi2TqOXGVTrhdf+6QoW70n2Y8rTmOVHSiZTEaSr001IHTwY8I06AzRLI7SAj9vT9ReJYhpE/1iI/m98xH8udrlud1IrSyN7NzDbmAAfc3C9s0Q7vGbNl+Pts5P9xQa2KsaiGSX18d3SCxx3s/VPh/0//Y4ksnXp0KcdzRmc5P7+VAgIcCcXejQKIJkou8sTURMgWN5MTMD9LboAQN6J9scktzsHWLyIo+esPQFVhAyt3IuwScM/pcVL+eRBSZFglVj+e0M7iGqmZwa/QYnsGNZ3VG+ZkkfwndO/hNUfRYGPqjuX4wJwm4/kk+esq8tTWmbSHG/U9QGoTZ9pzlL2UxMr1TX4Fa3osumfq1qcoFGtSKJGUvdJkAnWiRrbRgS3HkckfjzB+VFLzgDUSssQWm+XVRlUSt1klfoMwfRobAh4Z3IlL59LN8HW0++RPQJUca6KvUEMfF/avyvVvJIJi8XCi044/56SUiS4YhQSCtYBW7JnoxdTodiR4T48C2sjIMAYWVTVqYEvmEuh+0ovx8Bj/mF8Q4xrVl9BCvM7ulf1D+GcJBAHwXVrbaCWJJqAAHmKJzsdmdECuHoisRrJKgSuAF1Ml+Ie/DiKb9NXinNNTvVvay48GuOlkBzfEcAZkWxYqRg3V6ZuTvTVtj4cxd4rwOFMyCnHffUMXvmmcm0wX6vqmXQ8ftJUMeCiWHkYZlabSwYwS2QuIbzBFvT+3qM29+0VPpAgtI2dhP9i0vVFtX1+dmoznuEm7IBy8bWtMgAs9kIRj35r2i3/owGyVXTN4QXfaJRR1O8twKwNvNCX1kqbVslXfOhstkXbbxw4cOGVKLEcW2SYbtV+K1/jNIgnwt5RpcTH6wLfJtPxPPAPJg0qfuhvQFMziDag+vArnMob0JteN/+TB/R5AXBIYNvHgp1bcqfurX93nDL8hwYl3kc9ZzPh4ntJgG7cxOGmwD9UD9/uOfdmQcVQZGomIrkeXTsVP2L7tqdDlxuYGZ/L+lXymqW3DF6/nPg7E8iwcrTxHcr2Nm4/P+BPr3Zg5kGsG4VtgWStq7b8m6e/hm5h4Ve3+rk6LyuuBX55+ZOP7brwJRaYUWL0KxQ9M/UtUjZPHKpRQyMuXjWCjS9j1h9EB16eJGK2AeE/PRkYHu7/a7gtGXz3PdQWV6HtwYuDU52UmTvLkYWMGM2qYn+rqFhBr10jFPd4AC0IkfQdhyrNMv2o+G5Y5U9g2lwyNvTryOtSAOM9raSt96iHq2/pUf/vQdUGUiTkaYAH0OTLnazXeSLHac9SjHzkP2Goyd7LeROgwHzhiPuEr9EFmz0ufHQo4Z77Ua7TQADl3cRsCf3U+RpXF7ySFecd1CaNwvvln+Lqp3KabHIkkiHR/hHJtojsPAVbHnLU3DaGnuNQUdOtSuuERbELNi2NQKdJwVKGUF8lg6XGEVVne+O665z5jHz6gDaIU31NVY77+MonZQk55mO2KueXayksp9h34P7d6k/NoNAX+FxO5qj5yqkJaWjpflu2IOHxiEZFP9uPtxPT5bapQu4/gc3hCnsP0CEQhNa0fOlWM+JqWqFlnsdgkt+1Txg6w7SJNFCXVspg9kr19JBCQSbL7Wl8Kyy3bbe3QCfVI2uKax8j3hH7If7avBpCECLqlGB5WXuuwpkLFUy/wyODF/L/7Bcbe3DLmNGvDHWmytG2GEJep7bwkYGnuMOhohRyLvlWnLY4Gy3B4cJdIc/bLNg+25Y4PekdM7V488MmiK3oMsQdgNsqEiLzJgdiwuk69U/TqmfvQMAETRBvBLAbMWhJFr3TtOkSsEwh74hI1Ulk+Q97MZA6hxYnNsYIKSE0TrrzRSECayJVUHdkYcAAwpzsyb3lDKpdOf/473ZH4QsUFr1/wxFsTmKLv/QBUaOy+bZRnQdYoBDLC3ZTTfWhZhpmo7Q9CiMp09Kd6YN+ZX6NzjyYIgXsIMh+axttRIBUn+QOwBITfxzYVnoXT9UzGtV4XEdyOiaHmI8X8U3xS8HncfMgOiZDyob/4L5cbyZrSP8lagZ4IpKKAqK3xOc6+YqXVpHT/Bswfb66OifzIrSVsKg0ohOjRSt7qAZC7m6PM0CeV9h+cErtVNvp9vU+tiHRFS73fpQ3kWoyqfMt8kckAPMeiT/wKfnAJo4llE153Yy+F1Fu2Px5btkJrkDCMEFVaPsNwWt4FRV1FHxPE8Azw81PDBUJMZgJ/F3nqjv2NGcekA0TV26ZOfrKR5gAgr67/XZRFFFWV7w6Wm+DrIZbGAD1AtcCUYBn+l9OY03y1oZgTl7LILPHfnwKa448HiedutgLJ5JZviXwYQUjh+y3J8cse7x7wZu5pScmF1r/iKN7XexpwQDklOTb2AflWcV9y6nEgaRaptZxnuhLVC361p8OBNVO/qlduEamE+cSo07+tiQUfK7oNAfucqb2oX6BKOTnUp+9fv22IkH8ZO+ccx4HiIcQbPpR3jkzgbs87lHRYVc0Uus2G+LFhWqoy3gjO7FKY+OaXp6usFcey2HeJrPHxMUiHiSFmxDe5JcNMnJZmM9k78QtOFrgPqxo+WbU0t4wd/0se7hHcpCiTC1GplLQtIHV9H4DW1Xst0KN07Sn2Rv9gxDBh6LUarECubhs2u+aTkwKi3qCGZ8nrb8ra45sbnoKbIMi9H++NDdquV3HCvWPqysRPVO7rDY1Dpg5sZC6e/7ITBOoL5wAAAk3WQS5WhLF7N0mrh4TnJbIe6WDVl0DQFzvwrAx+qsTJtNoDNpyKv1upqDbZ+aASOyZTQH640nFXNKz+yqj3ywnjsNf765NEuF6DMPQviMHTOMlEDmQ1afeKijJDamMr66YUbSN3KNnfE8AbiMHo2avhHUcSYldAsJkMelb8qEx0M3WvjbJXqrnXrYnM6yDllIftpsKSbOJo89q5m8/vebRmqtYgkqYkTGCcqzPKrwOdSQ4kr+fWJbnsXC/szvHZJinnPGY78WuRxH2F9UerR1zlY3bg+FZknEmaisrZoOCunNBLbvsVqGyYQbuuCM2CAAA4EoO9zEcG+ppxwswUKeGzPIHTpEnLYhJRedEo810CEkE9XmFToSfAvsSug9YT2f6ONo3SHQUYlH3HrmTyCnf8ZzAxDkFuNz3va2yw8opK29uI8yvJ+Syzk0rbz37lOaW3dzoG67KNxB449yD1UIyRYsivXZgqX/dipWTRp8GzF2JsougSbKc+SZqlNx6c99kOG2T/8eIs3s24UpTRD6diJzTpbce8M6rxY0pyUnDLbjtMwduV1UjtPL1Lr8y7RQvnKRaMa2GP01WVh+C9gwGwI+jqZpqq1wjjxD9gHLWDt/auxzZ5Np+1lQmAt6FA8YA9eluuiXZyciKh+OHrB8LZNF8j1deLwjso7rUB49TnOK5Ec1BAAF0OV2pGQ9NeUiuAxredDlPJJTDZ51C/8zeII3eHZqQ+d1Exm73PDzusInjl9PkXsuohhg+ReODDTBr7IJ5cEVG822O07zCYRXU8zJbGmcZSP13BxDb38jD/WOjBA7BwiyVXZHK+2wEeTtNX1auR3qnr411NZBvHzINhpdvFQ0JD2rs6CGkHCaE+zqFKJjHPtprRdV7UZJQITbURtbbJm3DdxatehwSxhIHYpU6s7JqQSHag5b/OXJERPhV6wVbeh7bVldbRjdzbtZ2l5GLc8WzdBOAvzkhvuePyMG7NqMgxkjuuxn0tb9beLI70wG7kJGprN7r4SZEKQe8YcmT18zLbrQnNhGKSeKFDq3dW3uCAXLeRRIphPrfPheFnXMhiD0QEJ2sI1NA+jvNnZRDy2GkFX2MxMQK9+OJKbNJcYfGUL+P80EU6O5T7DXYy7evDJDt36VlEIGtjdsByo1acEI39Ni1h/kqKB+IOfTGUU6xYHzQAAFjjG9WaHInNMr1BKtXAWJYOlPEWxxUXuiIFr2/hFmANOj6wbQNyvcU71mjryql4bb7YEC5mGsEG1aWnUlTGbixjejLL6gSO8QVeK8ln8V9JG0FgoSDcQtPjylRMgp3dQNPeWUIh2IgtzD2eOH/7Lx3JvFeYNzbZsQpjDJqceh5+jkes015iqZnLHyE0fTD+Km6qOkZ8QI/ShO5QnJkrls2Uvmx27e3AhcWxUXpI5CSGdNoKoydDzo9fHitSnBvzStZMiD6EkReIxVE6O/dIXkD54HOE6it0PsDm8h/vHRx4JwbRg5lki9UWB94m3sdHRprekJ4X3ARBUfvSnzJb7euM7NX0B+QrI0xePJV+N2eacSwK3I7B4Q9M/0PRIVKgFjd/Dd2S1fZbPGglRCdw4h1gSRw+xy708TmcETafuTg0CJyyWXf8tOoBU20YXDmFr4eViRV0ah2tSpnHUZ1dFe2ay0KcnPAAAADzb6koBbG1oMsFgPprkGZpUdLDsuERbuk09E/O1+5kTriRQlusTP3YfQrgsYKM09/VWdeoKAh6bcS+D2U8EtlEW0QPrVVUFyMqNv1EzAePjDx9KDJKAc2DEh6fmQmciRYeBE6nYT9s+Tus+j9dPbPmr7xFDCrOCXnPFKlHkANHV300B7OnQNpjy19BkmvCRGP3xSdkWOKLvkXK1/lSyccNX6GQ72nwWJvcSEYjH0x173DSR7RCsSq0ji5g/QxS9yEqtwmfA7udX86ZuBQps9gTAN9xrTOdINzxbkmrltcpcBKK5oRiK/UY7G8JwAW/wGQTGR1dQ6yTBj+XwHIY4H5shfeaBQJTRp/jCUXSxGdAZNMZtPMH0ss5h2c3npeXe7xo5ui+0VhQdvy3FZq1enzArBWxb8xojtb0VXSv+LlQWaLmE4pn5nRPT4R0bRuSYaY787DGYfOZinTeJP1nFEmyHxCHH0CMMMfKX5NF2YmSuqnJIGxNy2de4koxo/hyeaGIdVvj/nPLMfexNYotAyUdT+cFUkiYs5e8CAvBVq3fvP9+xqFCqaIPZz7bUV7OuDCnsfRxRyypYba5OznzlrJzgoyx5UntAjp2gS5CwBEZa/xlvNphsg8zveAVmoLtPIHZZd3W7xHD/m2HYy2WZQRqMCkkkTr8ZpVVBM3ptwi912Q2xO8zmlx3HPRblz7KwFae2mtSaErSB/9mLBln3NgqZEyj8aPL/8yXPmz1WDs+d8O/AYi10CwtZgV1VkW+RydvMgbH945COz8rO6fB1OT2cs00kz1O7bEGIj8WLlV5omOzxxlDr0nehmg3SQ1Yn0IhWHor1SntJP2oqkku00vOV0i3Dg3nEx86/pozhvgnNfx5mlXkV0zGqgs8v0WucXtby7s+P6+54Xwa02c/5nlzqNLoBsksmvdGXfYsL3UV/lkjye0DfKpTipnEtvs2DA8XrDE35xhaXA0nXqDrgOUvTsugfAJRZn0z+HCTT3lUiP+Z9MF3VbNRCSZk90GDpuAxI8HLj3YGnfcLE1bcGMpapQGDeQzZBd5dlztUVRxMO36WhCnmIypEaEMZ9ftU5xBAO5HvelIuV+cgvAXCZHqUrtGMQYDLbF15lM6bxyTnz6VP2Ftq2sDXtMQmUV+lKoYkSJkwFqD0bFqpoExiYo5layd+3iWH1pnW9rZ/7XpkZeTqxH0xYGipmh8BRbDWHxXBkYMf1jij4iVZ0iNI9D4tdDjKWUNI++ln7CDItUOIFKV7H9jDbjV5wbik/ao/zTLM52ejNKkUxub4h4xJF4xM5BbfKq3FXo+ShrC1rtWdW1CPWHHWUBdvjJdZOE1ytffRQW8TGEAZfj0e+z19Aea9LZ22x2iW80FrO/QtSot8HwoQLgG7HRES+vck+JcxAFpWctjuyU7N6A3gDijOPEv/yhNgjhzPb9KDWmwctdgpe/7HtxwIMZKyItDBH7VdKZVWxf1GkZKGaB8zzktjteWS5QE90nM9jcGkENBj/M7kMeBW7nQ9kOI/uhwBpBx9fROCxdUpZjC4HqsYtPicAPy9KJUcUrODQ/24uYtK5V2FDdFKILLlX3RCPycFKKF7KJqnuh8jCCc0Rvy4VBdD65Tf/ojWYZzjYRtiUYx0jZ1eG9Va/rVBo+z2j3aK4sHeK1h4QI3qcvjnm7fnl3xORtnRZ2bA6YZYkBvURfSc2NWfGYzh6JMyaHNyNNbnaCS/s0xwhpapvUPcAwaYdikossMfOXTTcdVlKyJoe2v+WCd2iZh5zS5BpxqSdFzKWx0VS78KBsVbr4S9+tuQyJ5Yu6ARlxmeN06Fayd3vcPib5TUK+NCkMRtwW2xez0YzLuQcA0VH/7vLQj0SqqwvBeqirNNSednS2rduuEJumIaZ2x3MAHSbMSg2D7J58HQiaqPbyO9Qwr9t7Enor+hLQzDzOMRj5MwQpBgUJmuRswDLJDyeaHuw4oOTEDno0lBb4OT9vyoUAObLewLzBkyXXxwvgsyzrBXFmyA4u4tAnrm6Y53ognAPAWTUCpLY9VqeIFNH4/in8wWItiFTzBsZCjA4hUO5KWF46dnWBLBhoTbMZGTpLq4GS9Q964ZVZ0oR3oF9AuSIciKpuNHOWvUZXgDpiX4t8PXYtVv1h8ovGUA7uwxcG9NfEcaliyYhCSGzYTAI2H1K2hyQkmvZ6EVdEZkpbxvTn61WJAJmBVByEeBx0l4o2ULu1dmJaeaEkirmNiL67IqdlPqT3qZtfEqXj8VO/WhdDLgggEXRYaPhsQ2u2LWraGQfXjmr1kdjj6rpS2SryoS2RJ7b3qLQvc41H4IWBXBH8Qx0sptEX+CyMQ3F3Ht7vjR5SbbT4uIGniIA97G6XV+32kSK1AU8IwA0K0Qvhi3AUlyT7HABmM67ZBTYRMajUZZx3Qgie1KHqGLuUKMD/ZA+iUmJkF0QtqXxHACWabaxOgr15ApOA9Qvrsh2ynCuLNHPRlX014z7/bldfKIVgpBQCZ2TNNmHaGuGiwwavo8/V9pd2SjnnVQntwvHZSTpE1JHN198sxi9un9FdgHe7FMV57jJIvQohvRhRZbY1T6DTarxfMhOwGWEvD0KDQbPf23HjqxJqCgPCCD9H7JDaHzt0TtSXMEC0GPtwgrVrGRwHOmrzNF86+DtCRwjJLBAuwqQdst6RkK/THMZr8STQNik907oOGnDAzrbsN0h4uLpb+qK/tu+SoAQzE6UMLeIfZ5s5TbClvz3OtqKRp+RoM4G2c8rm5X1Mw+D/WDqMN4k9lnNnuuyABvqOZ3PEFoVsBwmTca69pI3Tq5eGIh4cXHq83HFnP698zf9HA9QNavQKib61XIL9o4NVvCLpCaasKwh6EKy6w4But+cWtAaIOlq6hgc9acN2Fhm855Vr4+65XlBnRlz2dL/PW084GQX4Kff7VYnZM7VqWKZne4eydjvvo9fN/ThsZP7ZgI9cFy+OHk+Z7M1cVxbvAGwpSk2F63eq+89zYfaA0apGpc/iyWsvf5NeYRoTPEAf7XKYfxyM/42eYMxFcLIvx73kbtsssrlat6uQzcoJWAMbef8avhXOhDceSzJoT80sDS+du8F+mCbBWwu4m6WHY/okO6PhT6am6z2BKdOA87OLuIVQ/hwtVnJ9eGEF85CIJgrtpJyZJDQmpAVzyGHcnGICm1LqJYuBdon8Hz9EOV6jRFdvOuqzs/9PDkrqVVgH1l2OzOrudjH9h5v8aIglywqNo11F0rWO0TeAFc+Qidtf/VMd8b8pM86M0wcXFxcmsQPE8PYLYg1CbN303c8tTLM1wTP1WCHZ4czAYbEvYXeFiOatDkOMS60+9wqapi8SpPhf3qK6dG27rVG+7i/Gi7Sam5hye8abFzVgUt+Yup9kGWRUWkgOxMqxJLDsd1fBzwKggfJbOmufj4uL4jdWvE+PXX1Yl9GpLelYIRCQ6+ERHw7DEtMicFszQIyDBW3JlVBUVijGGKv+jUQ9y1zHVs2hfXG4+dABtiwJkO5JhJe52GugOmMBJMFmIz9QrlYjy8qm4K/G9ekAjTA8CxjYcw78ARWtjE7tWdQdoqTJ1L1bDxXmaUhskZWPmXrhPd62L8MPZDtX2Yi8J6VSUOW3ALb0Kg+NZO1dVXqWBu0Qe2nMk2g5aHayOFpmR6Xg9BGPRsPaNPt8HDWeMkGCZDU5E9tUmBdsI8BhaN2cgyxAGsqQuToZ4DBf7tR3SVsf1M13vGnNzrYHDDFOQacWdeTSxrS9SiNOWwnNUg7YDeR01se4pELqsxP4nskQb+6IGhz4sj4jtwR1lVFYm+kR0SPgmvqoSIaRNLxTsRpTvPzgbvALDuMGpsPLocRNroM9+BCPkCdqzfaacuwcjQMqbZfv8ILNjPxe+UpUXVJTGWacZQ0OGdZdPfjThZZaVPXhszUGhw9XXfZVoGzGq7uzp7dA308g7hL3yfC6x+DAh7hToFXlehIMJ6wcxvxyvftftagZXkY1/52B5S6JvLX5MeTYgTaazPSrhWVT/zmyow24QvXIEUyPoxDI00rwxOx3lxvMPDojHUW7T2Tqh8E43pTj5Lbw9y+iRoGf6Ko6udGlD5HxGvhV66u9HS9A+FzS5nGyaiCFEZRa8cQCnz6ofRigbLSnzb9Q8Dr8DMpKs+7yWSxi05z4Kk4Hc0E9Jq3xBGp1jY8a+BHdEDpadRccodrW5JNBm6Pv9hlu6is9rudZ2STzfQFAGY+DF2qydFlUI37S6WiDC7tLG5auQzZ2xNJ7VTxa6N7PCuxyrWa+nj0mr9N3Zuv6LEUN6epoFQ3xWgWl2ZoM9J0ND2BJB0J80egvCUIH/uvhNYZ5BE0Jsv9EFP/CvL6WWr5d9q8aVS0gIbh9DwR8Ep/QYTgHJngqED1b13SlZFbiQV5TELkNj4KfPdbPXGPCc0Su/mowmc+tw1ndaPYy8ymAi8gLTBRsTjVxTNsgBylHrhH47JNBfAbdmWipY37MMrV0571UW8yQoHdfMbq20XsNQ0V1uOC3ubLELs2yTmXJCUGKgQibP24aruSu+hGokWj4QzNkgXy4jjaqvSC7NVZDtlweFGWUeNapY2vhUTox55G58zIWEwWCAE0NslTVugPagXgWI7Qg5odQf3A2hJ5j/2myTq/NSK56HOR/0ZASGjKTAwa8iC9Fx6A+HfjfSZS1zemeF85nXIwq/EZj5vXyFGwcvCL9EclHPs6op55/BLXjtw1b2qae17s40clQnVMG+FU81C2o+jPHI+xeLmtc/Z8gxZMBVECGorhIat7CZJWuxKZjgoilzv+DCRI3XbvhY9+mHipp6ZWCHLGk/g/jVkZL4mylWtMt27xbY7Zn1iUW55OxfZblM/2PNRKrRgw+daIH7+r7HJ8NTbhrUYfnsATaM/6Zm/5UiufxYz02kPHXQxCLi283iS95uzkrYR+tm3Pzpm7DgG0q0CkGOxEGqaLMWyXIvXiQANz9L1Eq1esOlliAREZPIvLOmjyBF7LhxO/4jcqadAUTc0mcLX+GSyfW/6Lsmwt+oULzKL/QKhjt2F1Xu5vhd9UnRDkBz8wP7AmG6ETDV4+Lmb0oAGIujRLUQ6dDUAAZZjEm1j5J91c6Of25DFF8uaae/yDhxkGPCHTnPvyaofSs9dl2enqLHTpkpf2chT6+Oq9cb6HTa1LALaTmY+JL6SoL7beSF+Uz+5N9TVbotL7cqF22aK78a93fHh77f1OVvIC/fNMyr4TJxWboK0JPTzs5GzqMtFKG0W94sbtfNKzHRNs7wQ29S7XcoDDp7ixaFjmFb3EKGbxjbUQtBtL2+JYmZGsjUU2CJsB19kjishoRpgxziMBBaCNC70/JiMsYAoeJDWhqGQqvkrWATiqEsJfJL8lco+ksNNIadAVvaf+xDCFpkOUk02h0oL0AR8DQ8mLFSNn3aDoicqRJ6PTc4nAi29omPr3yu4/AJxYgTpLt+cNIpW3yU6F2d5ceSgmLta3k9EjkgJ7kaznUgjqyFgEIU7xFGFgDfrP7h3CcGolM8FgBqu24IfooN3PRvbF9fMFDpuG+fJrfxOAOIKSYQ5Yap7Ojhidej+SBWM9mn7FTDzQrSVyMP3G1vs7ELD35tF1yPbE8lFsFWURKu3fECdmoSHiPs/fv8PseDwXIkkq51WW7ouWh5/WTRVX04j6I1nBLnwj6zqKJ4u1mp8WVy7njEZ3yrtYflL9N2AQOTKmREGjuGdxHLkHQZTXfV//fMOljh9B/m3FsfyD/kBoPreqzhook2vdoHWMq+7t0hw8ouZqfjH+EUp5cAADFl4Wu6n8nBLIhakAmV/Hu7uXwoYLV+/CTmkF2Fg/CI7HSOqzCnHFlXDAeqjxnYgis6ZdepDpRXUxX7fVOn7M60BiCy3SA7z21DsezaSVAkgtDNKrd5ryf4aN0x/3kArasfxV9MOmUbhcv5mehTpb7gnwz2UlM5VWWoo08xOp7RtP51O4TKW49NpoWGJVzg0BbHLziNXkLwgXgfCdSr/RAYG758xGdT0MW88eS3hzHX5NZbt051zFQjGVvGavAVE53BWRRTc1rHoj9VzF82uWNvRGQXNYhmIfsj+NcidVk8NDPT2Q1cmkOyhyVSC/xOg8zF2dAZ/wIdXhyvvrFxOhXmPRqFvI9vbXHoauZa5mR0AOsHV7zXcy8jz1pY8jobFkXWy9CU+6i/7dkMHSPNxXn7AvP4R+KW9PTfrOmaJyly5uZn3f0Y5+4+VmaAjCEdm8Q6hoLd+tym2XphNmbpOiJwB1KxqyMBn517G8IvQP5lgwBOMmNEtNLEHzlYxPl70n7v4l8UikZGmcA+epNSYhP+Om5FXF4JTao0/sTiXqHYQ12UmneYU83wjMaXYm8hpua0CR3EwhhRzzwjbkBqdtLd+7c7+SjAylDl37hHMcpSJnKDzvN2qhKdpIasHO+0FgzrWU+PTcIbo/Jaju4fkQMGNP1SjJdRF+MbyhRmQivIfp/YTB/qTqHLNZWTCC9fTn60/tcKJcPm4FOyiCWAtq/RfdwmD00nSHePBTmMBFRc/4sMzCP1C0Al3+7kOAS2kIcU55vSkpHWoBah1ctdmoHOwWDtD+LoW1jJfOOifwKVnT4D0332FOsf2kCz3eSGrKlUBulKxR3glMnRt4jz1u+ZJUeT87FDie36Sh2MsOax2HW9rn56cV6HjJ8QD8/XVK1QnHh7OIHMvJ/UQgHHJNUY/nn1T/n5VDv+AGnLQw3Q3g0leGTmiqofacaG+fon6QWch7nqpPEdf7JFdaWBNbdtntdi15rkro4vauL/tofUf1H1BP5naZi+pM3NUVaCES6HzX5J8P4asEz4DuZV4GBgNk/AsTCkJjVpycUgERDxqAmTYMkOAJy4i1GkWVJKh9PWn2qfiFmZThspyG6dZ/1hprQQl0qenS6VaIbPBMAwkEWMzApjkXdzF4rI1uq2TUqOEoeh29AViEPE9Yi4hf6A7JGeLQ8OdhxrzDcarnOv5qBq8TksXQSMCKTXgvdQqG2SCeflPXGSIpyrlQRsBPw6vkUNFlNqB6dawZMiFwV6xZlfQ9ZgCw3B7xh/gphSMjV67buNjNdH8sj4qVNPCLQfycGOphm89g8YSCUdr9EsJVp8Onc90cCucdAv+QMZzr6NUnC0QONlW9GzALtn00m6eOIdV1xe5SW76YyFH4ETsApCCSXbIAgBTrMFtET4+DLonfe9vqadtlYo7gCp2GekPOle4SpZvEQ0xSS/Cs7VfnKsGYZqzCgfwcKypzKvD0L0QT+4/jkcSnhCWVgJccBvO7n5w420Y4XJlDIAAAAACrDBkG1pYxXDX4so8xr3m/+D4+yKQWpidj0tdiyh2XLgZDoFw/o5SIZiB4mWVVuipSn92SHJs3sLr3KHiSSgcr3Wt8HFv88o1nIllQYG0jhk7p2+GKMi9Hj2jDOPchGu9Vmb+YGPFleAjs6n5GVmrXmdTZGyZCpPZyoAXmWP6LFVNUoq/wysg+swMhw721lgJtFvUB6yUPxgQUJ8AUKWa0ep9R5iIzxY6sncogzIUvmQzSRVFoOCfISGhwpjfzsLIuAjtpCeqzytqXzUNwIcnbiDOr8raXdayldmP7gdlyMxXj2VgjJa13aB+Fy2GOUH81qImZ6T/3HaIJSCmU/da+Pb0rMjHZ3N+EWuxGZTUVc5EsUP/YSMbLDezfvbiq7oqHMGg0jWhysJItkYucHHy6WTmYOmS2vubb0pCxx69kF3XVoQDZR9z0ytFm5FcyiSTmhYir+f5mN5wI8vue0KY48wg4+6JD4pG7kfqcXl2UVtrUp6uOEnvqEMdT7yESS/AdCHMhFfyus8vgK/DYZqPIQM+Iod2vUoVWCKR3kSbTa3b/flT4raKnCUjzxIPeQiQQa9TqQACyLhGXx0QGpVBERnt9bEAPWV/EaLYOPkHpdhQ1/iGnCi8qB9771jKRsG+BHpWe9Du+Cm3mk9FoF//bG3Tu0tBz5YPRGQ8IdC/cXf8WMup8tCVGMDrzuREmv36cf7XPJOSblFhinFV3W84bS105kzU5Kxjlb+x0rgnX/PLKifMt54yfX5z9bICtoavENgHfQ5uFVKFA56wbETTIA1ZL+1209IATOu4yJF52KG1ItcGW9YKQ/PH6UsXECYJeETjQIvPs2dfRkfTQYdXUdiVQR3NFjRF/JhHvhM9tDXGjzFw4G5hGI+WVR5Z7URbvChIyXOWmRV8V3IOh6N9dwC96q9yNcXNN9freAVjGy6SQK1TDwAMYs4onwOvQlM2W3KVwEVm4b1sjTyUmorJyTbkAJo8MoU9ZqOrz131VIeSL3k13vIvq9HOfvelJ1R1M6+pKgrrME8/68a/7IYKdX90ejo/9KEHU0x+Dr+sAFttRUbI6LUPY59ad0aa8EDnW2qqspi29mCAMFQnvpyOSfKjhP5NGQEn+tPxlha5xswqY79Tjz2FOcPkn1dqIEjGak+OKW/rRQUmAfvBu3nYa/PBxgFV7Xjy6lRl6xtNr7M+sgEXnUhBolt86oyLGHvtV8VspYbQRMlUEY8ISrvAv4r9/22rzRAFtmD0wLzQqaVWYZGqIf3HKb3w1yBQw70KcLMgMzX7jlla6WcxlPSgO0tOBUG2K6dCIOXsQ5/UOvfawUb94vDXPzcjlzlsd4IZbYXVb+70SADNsrRX24ibEKAcz+SkRMS9mHKeXbkC6ZwWicfrUO47BasUHsh4PGh07Zx7UFk3dPPDf5wDbr6tSAqMBGbidUHgraPcWoMnRgNyprO7joa0QCoZ6f8ge3SwsGFyWZ3CHb+2qBbUvYhXUcs/MBOCOFcmLg37WuXJrjL+Wh3JylFWgxN+JovpcAJPbMkEU66DV7P378mQHkYKCwHdPBeE60dBaG5UeTZlfZA1yTsWjPQjMyA1a/ufmPBwULPUvoCUuLq0jnOKZr7tFf13WFVpujjQWsNxojlPCvji/hdU5XZkbEt7jbze05JtYpepswnVoxgV72Qe0/gOdIGGHKu5frFDEGy2VuOaJweJ9BKkT0Xk84bX7HahjEgXGqqY3rDWg8CTHmsG3XYXlY9O62JoWQ2mGLrRoCwB2rAQB43gns68EvxX1xuuO0LJw3m3SnXTdPELXz2d8xG5bT3KBjjPzk+HZdNo2+apEKTLCgh1b7RG8SEKQA8LsOjwuy8SjzHwcxRI1YnKbx73l8B6UcUixAmmv9i7OZNXChPojqB9070RfR4IifUsYJjyF6MaHJ+LG5yxIMDudtAqUF65UtoXpJAxw6e4pRbyRgby2GkU2nO4PpsNIWOnJstAG+nGIfd9MTAQYhnDxtIytVK3BBr+OImYzMvzcq4ocR5VDvaW7iP3NOCS9Fi5Rhn/wwi3PKFNWGfvLOp40tL5ODgpNrNEDnEwEEaivBJXdAcXUjESooCOFhmTKbYAEgdPNo2sSmYS7STPhpc8A32qqLTzxWvM3/FwUvXJ1RUFw/IxuURw2dlWQD07TpNq9oKzZ6hskRyeER0nZQOLfUiARWPiJPu0E6UQiSkQZsl6fCuxhWEQVd4y0gOG0WK1xuRmgX2FaYQ/qpUZIP2QeYLngKA2PyliIshEcYN6C20jgSkQm9zfKZdVr5Lv+A99AbtdMNcw45EGM2etCKvAW1GWS2ypSpoX9bf0lKO0tk7qFrzCb+ZZMEuJtkCEw93X60VOc8PG0C4b6xv/QJ+uM/hryW+aIaa9I4r2Ogk2ZwYwH3TNORsaeciqdZJQB63/lIAEZq72DRq8OuUprVZJbWq++cQpnznptBN4CNzLmatuyDkTrnyqhcs6hmfN1Rc6Rd7IErI/NgZihr8kRQAuglT8syEOTvCm7By/9HIKsVqqheSG7xf2to9LDj+a8wl+5ShKpw68l1HkfQRAubWmLenbcdhD2PmIa8sg+ZCZlPK4NN4Ir1UK8EkkMA8mrrWTVBCn0P8EoPJwM24hLpo7avyKVCh3Q9jofRhx7tHhtFUmbcjMigH1ercGZe8u8rFkdV/COB68KjlIvkgyxvBD5blu4rZSya0Bqn1nMpXJBTRSSmD7uxaByhTmhZ+H5JoPH7R53AkVlMxqr+gWHC4M43SCOsfWeAWu6rFPlyyYkcRyzskISG2ozmDolbxtvCwtkaOx9xS7T1b9wOsqbUOZhoDobbBVMQ9DTCXqsDRMPffP5k83GK8M/hRfhrtErqwTSYtS2pfVOYyf+YVjCdeInOZPXzjyAYdj/uLG1H7qcYM4A9p8P6joJzcufXmLUGer4EasjEel5SBVkPmBpuUsTA1q3dC/7ePzshyfbysLLp2nF/dzXLoWacRbu0zB2GEstP/FETQuQ02gtcJJfHBG3JVXd6JQqtNuTfcX4dNv8qgPbPdTugum2vh5T5+t4nOe43Ne7NQkY0uJLEg9LW7I6gEia3EDqmrMbANTrr9rzMQLZlDLSLCb5cub9jT2l+I6rFxE6E53+8NPML/XmJqVyCzD4JZw5JIILkCNMLiJAK3OHoMBMcD0zvZZy28bsqLJ7U3TXaAlMPfGrNNJKGLzCpT5fgCBknUHH3K9pj0QZt2luHsBoNVER6hHOpMxYK/bvNCtFRpRhLFbGUWKbOVfsi6gNJwnoF/lRcFdvnafd5CbF05JSkpHOBmwcbSw6C4Iu6u2JB1roVZ/fRmJf+ivvTPAXzzo0hRc8NsvdbDfaNglRsK4oC58rH9yWLdv8mtnG3TpehhrqS5DXm/TC64vXKcrFXr5g1+37yLmG0axxAioE+whEAKLlzKY1XdcsM67nr9IhsBrqLfzPWYWwjIqAoxqtqQchmWeLQaA1d6z0IO9JN6BNNrugPEDXZ3fTIHBuvYaGyaEudUd7Vxy2bFkBfzseINYGX0OMbZlnOEqBB0JSWlRDuhu9QD+JGUQAAB/w8kVDHRuHf7FE8f+TPEcV5/in3EqoKtFs9vlchPIyBamzv/9I+EQaWtZTtQKiQMFkiQM43uTb0aHklYd5agBQbWLpwwCfw2IKnOnJvE569lObd3273W4yKwrXMPlpBEAleY6kFzILMe8zCNmCAUCffBX/ciaYO6ovvzbHoyreRR7TuiCFXLzghjhKm+JfUxuYoZFMNfqyxjyLgawB5mwAuz3fUpy4iXYhKDR0ADHzu9wqGuctA57V+lLuSOgOfMl9kwixg/gfRUHizIrLPFIhLQVvcJSnjHyA3nkX8HuFMLKI9LiGN5cAe8v3Qn6suK0kKzfxDZNWy9bN+eJOzNrZWI1Q4LrzHZkEol+koCycoJBIfDztx5sOyyaTNgETj+YwVEKk2WSzOadQnXnqpPgC4xooo2wVl46yJ47DNPu8xwmmdf534ZPGWaZw5SM5O5gfbu/nI22w/cLidRQhJj3QEOd1AMiAkFBcdQ1YAuQgx/fD31xdMK0T7JgoaplI9j2c5pK/c2SseBRnaC5DTE0qyzVZSgnqmQneuKP2Thg65XGvCvBY6KEW/fltHwsEE/LMRjolhMcmIbPmHu/H+sHRW4vjaOPKboSGkH3ZTlOH1hmUdC1g1/u2s5EhQtEnK7z61NqjvK9JdHHiB6FawVmnjk632JYO+zCsHyBE1tMiQfj5tsoKc/OP+jon8r/hbda8A+J9HfIFIBCaTUkyg5J6luQQwPHEpir+b9b9slEJ4qsFDQip6hw0UYDErwHj9YLv4PCpIgXTIPHXWhAvv9iTwGgVbPaB9hgCQUG5Q5mZN0PXfnBe/EJmxrEjaWDHeav7BTc6/APwzxRHeSVSV5s3kd7xffOsbelbVTSsAmUe52ctqxavatWG/sa+S4seSWK/saBNizyXf8xN8aholDHDbV3EiQMWFWtr/4ICk9JgZI3NaAFuhLCjEeYTsNyYsCa0BT6uh/RGG5U/ChgdpZIjz9Z0di5Lkeo/Qgx/zynymBZuvoRCQ6Yxjz2HoySjUJznFaWh01hfaP63JtoYUARnlkw/lzg0kVxCp37y6k4FqUWBLzgFP1tB9jBy7RhhntAjxCP18NtehrDRbZRCCwE6y+J9Qkg8dJJ2I3b7mYR3aMhqbY4tc6gqCV6Nlj5pf01o0Ried4DkgQ/1dSB+r9rz0+Ms3qjU+vTkJXhBAWOE5YCwcN/ztH+PXA74rTovI8zH2aQoa730Z6CKwoNdUfqND7korTG5tqpVW8TJ8HWvbgPGOtcZRD5SGRmMlqRP6KeLjUjR3Q23JmL4DQCz6F/RUnvhHSjvz7ZTk9Eewr45+8AZlOj89YJvQje0R0qwvFlhJ1FhYNvXC6VPn9uSwHNDb6RLx0BIz1ISzNqEDjUYHpW5YH8m6o+1K8zs8uC+EtcHzT5SHvctiRxrLLUq1SF3CfyWsFt4RTgImfzThYcH4JrVvPkFC6f3RFUMIu7Oqi6En3GcaOE5gQ2YOq13IdYsfjZJ7z8evhH5GqOJzjk+4EISSforfl+l15N5g5njjR/6KX7cmZC3CKvSzsFpVRQFQMVJnZu/zUwr8i1OaXY6Krpz4PYadKVjROywREmqNki4p3klvz015u2zZJq/k7zcS32w/xge0nX2gB8ywI7eSZzpbtDsGGzKLXnf8tNWf23SWrs2PwotCAp2V5x1hzjtJUhPY6FrngDv1V944B2I/Xi8AtdeqFu6QtQr1Khpdwkq/xBTTlLIdHTTgXmdTkpVZTjLxKle35fVACwBV7QazVISBfJzm6I1dxPDhO2r1/gnMoYeZtRSjG7PPjyxoftGPqAun2NOkumSwofLiTnwENcWjXu43J5krqW1I6Hp/5aayaSWktMbUIlvJokFVHDxtFe3MDdIZIzCCsUBDtMXi3HjtTCeuWUh+EVlbW2XBKS9Iclzbj3wdFNv3d87GLk+x6d5TlvuEUTCAflD1zyYNrddLDPRijV+REl8VRvMdoolzeaxDpKkVQFb0kHeketeYBmuZZGP02pLVfJpjpDVnAGF94DCrwaII7wgCxsXlovVXlGF5O/rAyDybQlEYaFxIFht+wioKfk+L0sUy2YwXPtvTd1TwzjMQfNvxlIGC+eGZgED+GQFfryGpXQsEcnZxA2pQFlVs+jch6egBALs28jOpilkiGDLrtxzp+eqGwxR22nDfF++uZrajIzc0vFNtdk0uUtytsx/N5fDep1C0PYxoH7PDC93JXUlv9b2wdTJMN8zViimn1XeVg2R+0hK4mqCD1hUJVsaGcGSi7VgRAyGNnRUEmWbpZE6xmcuSfpi/KC+nNkmx9L2J1RX8tLf/bZ0SgP+fi80CuOdRTOD0rNLNL6U3RudtCMmK4f0VCcg5gDu1TFDn+66mgbJKDcdl1l2n7u1GEqoXuAyPObTAHoDkHPCxQ7peDJWarlI8NLqLdrgpmb9dTB5p487j7edK7DVI8YakXDZCLWDPBF7P8Fm4cxEPj3Tly32DUE4wSLVifHOBu0/p9Hw0ghZE5ov4f0x01R0GmgsHRiZP6ullzmQ1TPcBem6vrAnhuBWFSgPKgzI86j8KWMSUxzniuRFUtBxd6R5Q9zvOQ4OFbF8VTRmvqooVNa+/BfybXvyFgZX5O7R3liO0rC2kcJ6Y13bU0XfyVC9D0ZdrdeAAGs4d76aqwNr+4OyNi9TccllmET78KALm/2vbVyWPodNtUSqq5r6Va4LVDCPFc5STM9MVY0C+5K0nRg2HRwQ93qw/MX+fjdmJpcdrsaX+5D9LlERw/MkeZaMgp1yETas0JbVOwv1WlXtJRe0bQ6GzWiO9Gny9dG3K76BFya32xwqDVKRv6uDFuhRjKTIVZ9pbGsIhAC0OQW6vpjtewy4VkUckKVdJw/94ZHBS/xJ+4kLHWCYjmLTk29iTj5MTWzkVJM3545loQiXpyxhNxLMZEPUVHEbycMAzkrWUC7vL1qmDalmLLitX6Bc4HQ5cBVlOR3Jkm87Pvxvebe/sTUPhmIN/FmNIFTPea39EH5O3zS6eF4y86v6NxaziWTnxOGK2AfiuLkfnkk/1b263NVgPgNA9hAZHJHG1b52o4rgmoUqmMhIygWDK1Rr9VVoGM3FBBx/pOBOcmUsNcVwJ+RkKxSVxgf4qLz1NSGtaIF2fIK3RP4Tafn5AACsu6KpBvJ8PAVQT5ztEndyu2bGMXJwlCY1zvJpopXrC5P8emVsmsDuxSXNnNjTXNzJy4qdVtIujleFr+Z+44AEhV6rC7MSrlK6NgzDl6rMI5geo8hnJxYj1I0/TAaDypSbzi7uFGVLkXvxproQYD2/JSIX0kDyv8q7kGX0od0q3K8vAUf6ee02j8j8kcEFdv1mEM91ANAvsePjsVrveot4y1QQVBFAFzx3hsvmUw3TfwXl47uBT+No3dxUtLiVOjcsFXD/TJ+2Oo4h/60DO+11pVyiFRTO03HZyy/cOyxx7aFbhGJE7ZRrztoVFO4eWFk1plnea8wPTHFIFNllrXo7LOZkjb3WiBcFnIaXjZH1NydDeB2yBaGV1OiF9GOSepcbSrpuRhFQd940gjt8UR533MwZ66W5hCESg+7lTbG2re+jukZIvCo3zqDxt2tw4EchkOXOhVt/1/s/8JvFE/T+XlwXVYnm1Y/T256v51DWV5UehVI9FM1zU4zdATnaaxkXS7PQnqaZog4FEYebCHvVg9RK0i/NiCwXNt6/af3+f0rAMkCgRfGwKffXBVpL0QSKgoUI5UzUfeQC3xYAE5PUtm29KtrkHtNzsPySQRB+L3Pc+Ie+OPTsB+XClntXE9udWC/tYZWx0y8Cx6xEymImN/XnBtcfuZ+aRjH5ATjUCoaLwNda72BqMpF9bx3UlLn/fq5LaPEfCivLnJrGjAxBnzFFNERTp4Hcj9gkR0twyf5udy8CZ+BcqXfVwH2JWu3FrjbPzKnJQjlBZUNg3cziiIwwC2aG/Zs7p3z/AuFQwoyOdhvNEe5nsCG8lZ5vbeMT1ByIcn1Ev5Ht89MsIGln7aHbfDTkrp49x4IAAAAAAE0OxknoRGggFdpwHhXI1JkmcGhPJpdJLRjZ5uRkOvAM5L8lHnKIUerJpb/Pun292n2XuUPFTBLePGH5kIckENW33yH9ZMmsefV7QSKerFoU38hjl57oo251n5TRJnMMXykQ3cS7WX4qzv4niMCh6imRsa4dSaIeGafsHwb0C1ExL7jKjrlSiGPdROi+MhFZpc3hltT76kMwDri7jU76NWxGhU999Xw0iCWKAulfMyfSLjSQUKKWk3JWy5xyRCVgAAAhqfTKBnnUpq+9yROy0XiutDK3nIYmz8Oculls445Tl4wAAAAAA" alt="Drain Buddy Ultra Flo Tub Stopper and Hair Catcher in Chrome — 2-in-1 stopper and strainer for 1-3/8 to 1-1/2 inch tub drains. As Seen on Shark Tank." style="width:100%;height:100%;object-fit:cover;display:block">
        </div><div class="product-hero-finishes">
          <span class="product-hero-finishes-label">Available in 4 finishes</span>
          <div class="finish-row"><span class="finish-swatch" style="background:linear-gradient(135deg,#D9D9D6 0%,#A8A8A4 100%)"></span><span class="finish-name">Brushed Nickel</span></div>
          <div class="finish-row"><span class="finish-swatch" style="background:linear-gradient(135deg,#5C3A1E 0%,#2E1A0E 100%)"></span><span class="finish-name">Oil Rubbed Bronze</span></div>
          <div class="finish-row"><span class="finish-swatch" style="background:linear-gradient(135deg,#F0F0F0 0%,#B8B8B8 100%)"></span><span class="finish-name">Chrome</span></div>
          <div class="finish-row"><span class="finish-swatch" style="background:linear-gradient(135deg,#3A3A3A 0%,#0F0F0F 100%)"></span><span class="finish-name">Matte Black</span></div>
        </div></div>
        <div class="product-hero-content">
          <h3>Drain Buddy Ultra Flo<br>2-in-1 Tub Stopper &amp; Hair Catcher</h3>
          <p class="product-hero-tagline">No more coat-hanger fishing.</p>
          <p>Same idea as the sink Ultra Flo, sized for the standard <strong>1-3/8" to 1-1/2" tub drain</strong>. Drop it in, twist to lock, done. Push the cap down to fill the tub; pull up to drain. The filter skirt around the basket catches the long hair, soap scum, and small toys (real customer pain) that turn into the four-month-old hairball you find when the tub stops draining.</p>
          <p><strong>1,518+ verified reviews</strong> — actually our highest-reviewed SKU by volume. Pet households over-index here; long-haired women's households over-index here.</p>
          <div class="product-badge-row">
            <span class="tag">Hero SKU</span>
            <span class="tag">Fits 1-3/8" to 1-1/2" tub drains</span>
            <span class="tag">Twist-to-lock install</span>
            <a class="tag" href="https://www.drainstrain.com/products/drain-buddy-ultra-flo-tub-drain-stopper-and-hair-catcher" target="_blank" rel="noopener" style="text-decoration:none;background:var(--db-brass);color:#082848;font-weight:700">View on drainstrain.com →</a>
          </div>
        </div>
      </div>

      <div class="spec-table">
        <dl>
          <dt>SKU type</dt><dd>Hero · 2-in-1 tub stopper + hair catcher · drop-in &amp; twist-to-lock</dd>
          <dt>Drain fit</dt><dd>Most 1-3/8" to 1-1/2" wide residential tub drains. <em>Have the customer measure the drain opening before ordering — escalate any "doesn't fit" report to CX so we can track exceptions.</em></dd>
          <dt>Finishes</dt><dd>Brushed Nickel · Oil Rubbed Bronze · Chrome · Matte Black</dd>
          <dt>Includes</dt><dd>1 tub stopper assembly with integrated basket and filter skirt</dd>
          <dt>Live pricing</dt><dd>Always check current price on the <a href="https://www.drainstrain.com/" target="_blank" rel="noopener">drainstrain.com</a> PDP — pricing rotates with sales and is intentionally not duplicated in this hub.</dd>
          <dt>Reviews</dt><dd>1,518+ on drainstrain.com — highest-volume reviewed SKU</dd>
          <dt>Install</dt><dd>Remove existing stopper, drop Drain Buddy in, twist clockwise to lock onto the drain bar — no tools</dd>
          <dt>Compatibility</dt><dd>Replaces most standard tub stoppers including push-push and lift-and-turn types — does <em>not</em> fit toe-touch trip-lever assemblies in some older homes, Bath Fitter-style inserts, or contoured Moen tub drains. Escalate any incompatibility report to CX.</dd>
          <dt>PDP</dt><dd><a href="https://www.drainstrain.com/products/drain-buddy-ultra-flo-tub-drain-stopper-and-hair-catcher" target="_blank" rel="noopener">drainstrain.com/products/drain-buddy-ultra-flo-tub-drain-stopper-and-hair-catcher</a></dd>
        </dl>
      </div>

      <div style="margin:18px 0 8px">
        <p style="font-family:'DM Mono',monospace;font-size:11px;text-transform:uppercase;letter-spacing:.1em;color:var(--db-brass-deep);font-weight:700;margin-bottom:8px">How the tub Ultra Flo cleans — Filter Skirt Design</p>
        <img src="data:image/webp;base64,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" alt="Tub Ultra Flo cleaning steps: turn cap counter clockwise and lift out of the drain, all the gunk has collected around the filter skirt, simply wipe clean and place it back in drain — it's 100% reusable. New filter skirt design allows for improved drain flow and easy removal." style="width:100%;max-width:560px;display:block;border-radius:10px;border:1px solid rgba(14,83,121,.15)">
      </div>

      <hr class="divider">

      <!-- ===== SUPPORTING SKUs (compact) ===== -->
      <h3 style="margin-top:8px">Supporting SKUs</h3>
      <p style="font-size:14px;color:var(--db-slate-mid);margin-top:-4px">These move at a fraction of the volume of the two hero SKUs above. Know they exist so you can route a question or upsell — don't lead with them. The basket refill is the only one with subscription potential.</p>

      <div class="product-grid" style="margin-top:14px">

        <!-- Refill 6-Pack -->
        <div class="product-card">
          <div class="product-card-img" style="background:#fff;padding:0;overflow:hidden"><img src="data:image/webp;base64,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" alt="Drain Buddy Ultra Flo 6-Pack Hair Catcher Replacement Baskets — Pack of 6 recyclable baskets for the Sink Ultra Flo. As Seen on Shark Tank." style="width:100%;height:100%;object-fit:cover;display:block"></div>
          <div class="product-card-body">
            <div class="product-card-title">6-Pack Replacement Baskets (Sink)</div>
            <div class="product-card-meta">Refill · Subscription target · Sink only</div>
            <p class="product-card-desc"><strong>Sink Ultra Flo only</strong> — does NOT fit the tub Drain Buddy. The single repeat-purchase SKU in the catalog and the only candidate for Subscribe &amp; Save. Roughly one basket every 30–90 days per household.</p>
            <div class="product-card-foot">
              <span class="badge badge-accessory">Refill</span>
              <a class="product-card-link" href="https://www.drainstrain.com/products/6-pack-replacement-baskets-for-sink-drain-buddy" target="_blank" rel="noopener">View PDP →</a>
            </div>
          </div>
        </div>

        <!-- Push n Pop -->
        <div class="product-card">
          <div class="product-card-img" style="background:#fff;padding:0;overflow:hidden"><img src="data:image/webp;base64,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" alt="Drain Buddy Essentials — Silicone Bathtub Stopper and Kitchen Sink Drain Strainer, 2-pack. Serves as both a drain plug and a hair strainer." style="width:100%;height:100%;object-fit:cover;display:block"></div>
          <div class="product-card-body">
            <div class="product-card-title">Push n Pop 2-in-1 Drain Stopper &amp; Hair Catcher</div>
            <div class="product-card-meta">Silicone · 2-Pack · Tub + Kitchen</div>
            <p class="product-card-desc">Soft silicone universal stopper — ships as a 2-pack, the budget entry SKU. Works on flat tub drains and kitchen sinks (different fit from Ultra Flo). Push down to seal, pop up to release. Common in apartment / renter use where customers can't swap any hardware.</p>
            <div class="product-card-foot">
              <span class="badge badge-accessory">Accessory</span>
              <a class="product-card-link" href="https://www.drainstrain.com/products/push-n-pop-2-in-1-drain-stopper-hair-catcher" target="_blank" rel="noopener">View PDP →</a>
            </div>
          </div>
        </div>

        <!-- Kitchen Sink Strainer -->
        <div class="product-card">
          <div class="product-card-img" style="background:#fff;padding:0;overflow:hidden"><img src="data:image/webp;base64,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" alt="Drain Buddy Ultra Flo Kitchen Sink Super Strainer — chrome metal strainer for kitchen sink drains. As Seen on TV." style="width:100%;height:100%;object-fit:cover;display:block"></div>
          <div class="product-card-body">
            <div class="product-card-title">Kitchen Sink Super Strainer</div>
            <div class="product-card-meta">Mesh basket · Kitchen 3.5" drain</div>
            <p class="product-card-desc">Traditional <strong>kitchen-sink</strong> mesh strainer for the larger 3.5" kitchen drain. The <em>only</em> SKU we sell that fits a kitchen sink — Drain Buddy Ultra Flo does not. Catches food particles, coffee grounds, grease debris before they hit the disposal or trap.</p>
            <div class="product-card-foot">
              <span class="badge badge-accessory">Accessory</span>
              <a class="product-card-link" href="https://www.drainstrain.com/products/kitchen-sink-super-strainer" target="_blank" rel="noopener">View PDP →</a>
            </div>
          </div>
        </div>

        <!-- Heritage Drain Strain -->
        <div class="product-card discontinued">
          <div class="product-card-img" style="background:#fff;padding:0;overflow:hidden"><img src="data:image/webp;base64,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" alt="Drain Strain® Never-Clog Universal Pop-Up Stopper in Chrome — original 2015 Shark Tank product, lever-actuated bathroom sink stopper." style="width:100%;height:100%;object-fit:cover;display:block"></div>
          <div class="product-card-body">
            <div class="product-card-title">Drain Strain® Never-Clog Universal Pop-Up Stopper</div>
            <div class="product-card-meta">Lever-actuated · Bathroom sink · Retail-only</div>
            <p class="product-card-desc">The original 2015 Shark Tank product. Permanent screw-in replacement. Stocked at Home Depot, Walmart, Ace; not actively merchandised on DTC. If a customer asks for "the original Drain Strain from Shark Tank," this is what they mean.</p>
            <div class="product-card-foot">
              <span class="badge badge-retail">Retail Channel</span>
              <a class="product-card-link" href="https://www.homedepot.com/p/Drain-Strain-Never-Clog-Universal-Pop-Up-Stopper-in-Chrome-CHR-001/309403711" target="_blank" rel="noopener">Home Depot →</a>
            </div>
          </div>
        </div>

      </div>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · The single biggest refill mistake</span>
        <p>The 6-Pack Replacement Baskets <strong>only fit the sink Drain Buddy</strong>, not the tub. Roughly once a week we get a "the baskets don't fit my Drain Buddy" call — almost always a tub-Drain-Buddy customer who ordered sink baskets. Confirm which Drain Buddy they own before recommending baskets, and if they've already bought the wrong ones, refund the basket pack and add a note for Brand: tub-basket refill is a known catalog gap and we should be tracking how often this happens.</p>
      </div>

      <h3 style="margin-top:24px">What's NOT in the catalog (common asks)</h3>
      <p>So you don't have to guess on calls — these are the most common products customers ask for that <strong>we don't make</strong>: a tub-only refill basket multipack (sink only); a colored / decorative basket (chrome metal only); a shower-floor drain cover (we don't fit shower-floor center drains); a kitchen Drain Buddy Ultra Flo (kitchen drains are 3.5" — point them to the Kitchen Sink Super Strainer instead); and any chemical drain cleaner (intentionally — our brand is the alternative to chemical drain cleaners). When asked, name the gap honestly and offer the closest substitute.</p>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · Lead with the heroes, period</span>
        <p>The two Ultra Flo SKUs (sink and tub) are the entire revenue story. Don't pad the merch grid by featuring four finishes of the same SKU as if they're four products — the customer is not fooled and it muddies the subscription messaging. The repeating buy is the <strong>basket refill</strong>; everything else is a one-time purchase. Lead acquisition with a hero stopper, then convert to subscription on the basket. That's the entire funnel — keep it focused.</p>
      </div>

    </div>
  </div>
</section>
<!-- ================================================================ -->
<!-- 3 · VISION, MISSION & BRAND PILLARS                              -->
<!-- ================================================================ -->
<section id="mission">
  <div class="card collapsible" data-section="mission">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">03 · Mission</span>
        <h2>Vision, Mission &amp; Brand Pillars</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <h3>Vision</h3>
      <blockquote class="brand-quote">"A bathroom drain you never have to think about — clean, clog-free, and good-looking enough to belong in the room it lives in."</blockquote>

      <h3>Mission</h3>
      <blockquote class="brand-quote mission">"Replace the cheap mesh hair catcher and the plumber visit with one elegant, finish-matched stopper that catches every hair, drains at full speed, and installs in 30 seconds."</blockquote>

      <h3>Brand pillars</h3>
      <p>Five pillars govern every Brand and Marketing decision. If a piece of work doesn't ladder to one of these, it's off-strategy. Pick one — going wide on all five at once is how copy ends up generic.</p>
      <div class="pillars">
        <div class="pillar"><span class="pillar-icon">💧</span><h4>Full-flow, full-stop</h4><p>The Ultra Flo design catches every hair without slowing the drain. Most competitors trade one for the other — we engineered around the trade-off. This is the headline product claim.</p></div>
        <div class="pillar"><span class="pillar-icon">✨</span><h4>Bathroom-aware design</h4><p>Four finishes — Brushed Nickel, Oil Rubbed Bronze, Chrome, Matte Black — because a stopper that fits a 1990s rental shouldn't be the same one that fits a 2024 renovation. We're the only brand in this category that takes finish seriously.</p></div>
        <div class="pillar"><span class="pillar-icon">🔧</span><h4>30-second install, no tools</h4><p>Push it in, twist to lock. No plumber, no putty, no parts. The install promise is as important as the catch promise — friction here is the whole reason customers tolerate clogged drains for years.</p></div>
        <div class="pillar"><span class="pillar-icon">🦈</span><h4>Inventor-built, Tank-tested</h4><p>Naushad Ali invented Drain Strain and brought it to ABC's Shark Tank in 2015 (Season 8, Episode 12). The brand carries that heritage forward — a household-fix product that proved itself on the biggest pitch stage on TV.</p></div>
        <div class="pillar"><span class="pillar-icon">🔁</span><h4>One stopper, then a refill habit</h4><p>The hero stopper is a one-time win. The replacement basket 6-pack is the relationship. Every campaign should make the customer aware that the consumable exists and that we sell it directly — that's where retention and LTV live.</p></div>
      </div>

      <div class="team-callout brand">
        <span class="team-tag">🌿 Brand · The pillar test</span>
        <p>Before any ad, email, PDP rewrite, or PR pitch ships, ask: <em>"Which pillar does this ladder to?"</em> If the answer is "kind of all of them," it's not ready. The strongest Drain Buddy work picks <strong>one</strong> pillar and goes deep — a paid-social ad about Full-Flow, Full-Stop should not <em>also</em> try to be about finish selection. Pick the lane.</p>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · Don't sell the gross-out</span>
        <p>The temptation in this category is to lean hard on the disgusting before — hair clumps, gunk, biohazard imagery. Don't. Our customer already knows their drain is gross; they don't need to be reminded with a horror-show. We sell the <strong>elegant fix</strong>, not the gross problem. That's what differentiates us from the $5 mesh-catcher Amazon listings that all look the same.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 4 · BRAND VOICE & TONE                                            -->
<!-- ================================================================ -->
<section id="voice">
  <div class="card collapsible" data-section="voice">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">04 · Voice &amp; Tone</span>
        <h2>How Drain Buddy Sounds</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Drain Buddy sounds like <strong>a handy neighbor explaining a household upgrade</strong> — practical, specific, plain-spoken. We respect the customer's time and their bathroom. We don't lean on shock-value gross imagery, we don't overpromise, and we don't make jokes at the customer's expense for having a clogged drain. The product fixes a small but real annoyance, and the voice reflects that proportionate confidence.</p>

      <h3>Six tone modes</h3>
      <p>Same voice, different volume. Most copy lives in the first two; the rest are situational.</p>
      <div class="tone-grid">
        <div class="tone"><div class="tone-label">1 · Confident performance</div><div class="tone-desc">Default for product copy, paid ads, email subject lines. Lead with the outcome (no hair, no clogs, fast drain) before the feature.</div><div class="tone-ex">"Catches every hair. Drains at full speed. Installs in 30 seconds."</div></div>
        <div class="tone"><div class="tone-label">2 · Practical neighbor</div><div class="tone-desc">For PDPs, blog posts, organic social. Talk like the person across the street who just installed one and is telling you about it over the fence.</div><div class="tone-ex">"Honestly, I should've bought one years ago. Push it in, twist, done. Haven't snaked the drain since."</div></div>
        <div class="tone"><div class="tone-label">3 · Quietly proud</div><div class="tone-desc">For brand history, founder voice, Shark-Tank moments. Heritage reference earns its way in, never bragged about.</div><div class="tone-ex">"Naushad Ali pitched the original Drain Strain on Shark Tank in 2015. Ten years later, we're still solving the same problem better than anyone else."</div></div>
        <div class="tone"><div class="tone-label">4 · Practical &amp; direct</div><div class="tone-desc">For CX, returns, FAQ, troubleshooting. Short sentences. Active voice. No marketing-speak, no apologies-as-hedge.</div><div class="tone-ex">"The 6-pack baskets fit the sink Drain Buddy only — not the tub. If you got the wrong one, reply to this email and we'll swap it."</div></div>
        <div class="tone"><div class="tone-label">5 · Visually satisfying</div><div class="tone-desc">For UGC, organic social, before/after captions. Lets the visual do the heavy lifting; copy stays short and punchy.</div><div class="tone-ex">"This is six weeks of hair. Six weeks. And the sink still drains in three seconds."</div></div>
        <div class="tone"><div class="tone-label">6 · B2B / wholesale</div><div class="tone-desc">For retail buyer outreach, partner emails, distribution decks. Outcomes-oriented, margin-aware, no consumer hype.</div><div class="tone-ex">"5 SKUs, 11 finish/size variants, sub-$20 price point, proven 1,400+ review velocity at retail. Ready for endcap or peg-hook merchandising."</div></div>
      </div>

      <h3>Taglines &amp; recurring lines</h3>
      <ul>
        <li><strong>Primary tagline:</strong> "Clear drains made simple."</li>
        <li><strong>Performance line:</strong> "Catches every hair. Drains at full speed."</li>
        <li><strong>Install line:</strong> "30 seconds. No tools. No plumber."</li>
        <li><strong>Finish line:</strong> "Finally, a drain stopper that matches your bathroom."</li>
        <li><strong>Heritage line:</strong> "Invented on Shark Tank. Refined for every bathroom since."</li>
        <li><strong>Refill line:</strong> "Pop the basket out. Drop a fresh one in. Done."</li>
      </ul>

      <h3>Do's &amp; Don'ts</h3>
      <div class="do-dont">
        <div class="do">
          <h4>Do</h4>
          <ul>
            <li>Lead with the outcome (no clog, full flow, easy install)</li>
            <li>Show the product <em>in</em> the drain — finish visible, in real bathrooms</li>
            <li>Use specific numbers (30 seconds, 1.25" sink, 4 finishes, 1,400+ reviews)</li>
            <li>Reference the Ultra Flo design when explaining why we drain faster than competitors</li>
            <li>Bring up the basket subscription naturally — "next refill in 90 days"</li>
            <li>Quote real customer reviews where they earn it (verified, on-brand, specific)</li>
          </ul>
        </div>
        <div class="dont">
          <h4>Don't</h4>
          <ul>
            <li>Use gross-out hair imagery or biohazard framing — we're not a horror film</li>
            <li>Say "miracle," "magic," "secret," or "as seen on TV" — we are not on TV anymore</li>
            <li>Promise the product fixes existing clogs (it prevents them)</li>
            <li>Forget to specify which Drain Buddy in copy — sink and tub are different products with different baskets</li>
            <li>Stretch the heritage — Shark Tank was 2015; don't imply we're still pitching</li>
            <li>Default to chrome in hero imagery — the matte black and brushed nickel finishes are the differentiated SKU; chrome is the fallback</li>
          </ul>
        </div>
      </div>

      <h3>Language guidance</h3>
      <ul>
        <li><strong>Use:</strong> stopper, hair catcher, basket, drain, sink, tub, install, twist-to-lock, push-in, finish, brushed nickel, oil rubbed bronze, matte black, chrome, full-flow, refill, Ultra Flo</li>
        <li><strong>Avoid:</strong> "miracle," "secret weapon," "as seen on TV," "revolutionary," "game-changer," "gross," "disgusting," "nightmare," "horror," anything that sounds like a 2 AM infomercial</li>
        <li><strong>Heritage hedge:</strong> Reference "Shark Tank 2015" sparingly — it's a credibility anchor, not the headline. Most customers don't remember the episode and shouldn't have to.</li>
      </ul>

      <h3>Channel tone snapshot</h3>
      <table>
        <thead><tr><th>Channel</th><th>Primary tone mode</th><th>What it sounds like</th></tr></thead>
        <tbody>
          <tr><td>Paid social (Meta, TikTok)</td><td>Confident performance + Visually satisfying</td><td>Hook + outcome + visual proof in 6 seconds</td></tr>
          <tr><td>Email (newsletter, lifecycle)</td><td>Practical neighbor</td><td>One useful tip, product in service of the tip, soft CTA</td></tr>
          <tr><td>SMS</td><td>Practical &amp; direct</td><td>Short, specific, time-bound only when there's a real reason</td></tr>
          <tr><td>PDP / shop</td><td>Confident performance</td><td>Outcome → install → finish options → reviews, in that order</td></tr>
          <tr><td>Organic social (IG, TikTok, Pinterest)</td><td>Visually satisfying + Practical neighbor</td><td>Real bathrooms, real install moments, no studio shots</td></tr>
          <tr><td>Amazon listing copy</td><td>Confident performance</td><td>Bullets first, lifestyle language second, all keywords earned</td></tr>
          <tr><td>CX / support</td><td>Practical &amp; direct</td><td>Acknowledge → solve → confirm. No corporate hedging.</td></tr>
          <tr><td>B2B (retail buyers, distributors)</td><td>B2B / wholesale</td><td>Margin, velocity, fit on the shelf, end-cap potential</td></tr>
          <tr><td>PR / press</td><td>Quietly proud</td><td>Founder credibility, Shark Tank heritage, Inventel partnership</td></tr>
        </tbody>
      </table>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · Clarity beats clever</span>
        <p>If you're stuck between a clever line and a clear line, ship the clear one. Drain Buddy's customer is solving a small irritating problem — they're not looking for entertainment, they're looking for a fix. Clarity converts; cleverness has to earn its way in. The one exception: when a real customer organically posts a brilliant line about the product, lean in and amplify it. Authentic > witty-from-Marketing.</p>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · Don't confuse the two products</span>
        <p>The single most common copy mistake is writing an ad that <em>looks</em> like the sink Drain Buddy and <em>links</em> to the tub Drain Buddy (or vice versa). They have different sizes, different basket SKUs, and different install mechanics. If your ad creative shows a tub drain, the link goes to the tub PDP. If it shows a sink, sink PDP. Mismatched ad-to-PDP routing tanks conversion rate <em>and</em> drives the wrong-basket return that's our #1 CX issue.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 5 · BRAND PERSONALITY & ADJECTIVES                                -->
<!-- ================================================================ -->
<section id="personality">
  <div class="card collapsible" data-section="personality">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">05 · Personality</span>
        <h2>Brand Personality &amp; Adjectives</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>If Drain Buddy were a person, it would be the <strong>handy neighbor who renovated their own bathroom and quietly knows the right answer to every household question you ask</strong> — practical, specific, doesn't oversell, and won't talk down to you about why your drain is clogged. They've already fixed it at their own house. They'll show you how, hand you the part, and move on.</p>

      <div class="adj-grid">
        <div class="adj"><div class="adj-word">Practical</div><div class="adj-desc">The product solves a problem; the brand voice does too. No fluff, no aspirational lifestyle copy.</div></div>
        <div class="adj"><div class="adj-word">Specific</div><div class="adj-desc">Real numbers, real finishes, real install times. Vague benefit language is the enemy.</div></div>
        <div class="adj"><div class="adj-word">Confident</div><div class="adj-desc">Owns the category quietly. The product is the best in its class; we don't need to scream it.</div></div>
        <div class="adj"><div class="adj-word">Bathroom-aware</div><div class="adj-desc">Treats the bathroom as a designed room, not a utility closet. Finish, fit, and look matter.</div></div>
        <div class="adj"><div class="adj-word">Friendly</div><div class="adj-desc">Approachable like a neighbor, not like a brand-mascot. No forced humor, no winks.</div></div>
        <div class="adj"><div class="adj-word">Resourceful</div><div class="adj-desc">Inventor-founded, Shark-Tank-proven, retail-tested. We've earned our shelf space.</div></div>
        <div class="adj"><div class="adj-word">Honest</div><div class="adj-desc">We tell you what fits and what doesn't. Sink basket doesn't fit the tub — we say so up front.</div></div>
        <div class="adj"><div class="adj-word">Clean</div><div class="adj-desc">Visually and verbally. White space, simple sentences, no clutter — same standard as the bathroom we belong in.</div></div>
        <div class="adj"><div class="adj-word">Polite</div><div class="adj-desc">No gross-out shock content. The customer's drain is their business; we're here to fix it, not embarrass them.</div></div>
        <div class="adj"><div class="adj-word">Patient</div><div class="adj-desc">Re-explains the install in every channel because there's always a first-time buyer who needs it.</div></div>
      </div>

      <h3>Brand archetype</h3>
      <p>Drain Buddy lands between <strong>The Caregiver</strong> (solves a daily annoyance for the customer's home) and <strong>The Sage</strong> (knows the technical answer and shares it without showing off). It is <em>not</em> The Hero (we're not telling the customer they conquered anything), it is <em>not</em> The Jester (we don't make jokes about hair clogs), and it is <em>not</em> The Magician ("transform your bathroom!" overstates a sub-$20 stopper). Caregiver-Sage is the lane.</p>

      <div class="team-callout brand">
        <span class="team-tag">🌿 Brand · The neighbor test</span>
        <p>When you're not sure if a piece of copy is on-brand, read it out loud and ask: <em>"Would my actual handy neighbor say this?"</em> If it sounds like a marketing person trying to sound like a neighbor, rewrite it. If it sounds like a corporate brand voice, rewrite it. The neighbor test catches almost everything.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 6 · VISUAL IDENTITY                                               -->
<!-- ================================================================ -->
<section id="visual">
  <div class="card collapsible" data-section="visual">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">06 · Visual Identity</span>
        <h2>Logo, Color, Type, Photography</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <h3>Color palette</h3>
      <p>The palette comes from the bathroom itself: <strong>deep water blue</strong> as the dominant primary (the brand's hydro-engineering anchor), <strong>porcelain mist</strong> as the airy secondary, <strong>brass</strong> as the premium hardware accent, and <strong>cream</strong> as the warm callout surface. Slate text and a clean white page complete the system.</p>

      <div class="palette-grid">
        <div class="swatch" style="background:#0E5379"><div class="swatch-name">Hydro Blue</div><div class="swatch-hex">#0E5379</div></div>
        <div class="swatch" style="background:#07334D"><div class="swatch-name">Hydro Deep</div><div class="swatch-hex">#07334D</div></div>
        <div class="swatch" style="background:#176B98"><div class="swatch-name">Hydro Mid</div><div class="swatch-hex">#176B98</div></div>
        <div class="swatch" style="background:#2BB3D9"><div class="swatch-name">Splash Cyan</div><div class="swatch-hex">#2BB3D9</div></div>
        <div class="swatch dark-text" style="background:#E8F0F4"><div class="swatch-name">Mist</div><div class="swatch-hex">#E8F0F4</div></div>
        <div class="swatch dark-text" style="background:#F5EFE0"><div class="swatch-name">Cream</div><div class="swatch-hex">#F5EFE0</div></div>
        <div class="swatch" style="background:#C49A4D"><div class="swatch-name">Brass</div><div class="swatch-hex">#C49A4D</div></div>
        <div class="swatch" style="background:#2C7A7B"><div class="swatch-name">Forest (success)</div><div class="swatch-hex">#2C7A7B</div></div>
        <div class="swatch" style="background:#1F2937"><div class="swatch-name">Slate</div><div class="swatch-hex">#1F2937</div></div>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · The 60-30-10 rule</span>
        <p>On every layout, aim for roughly <strong>60% one dominant brand color</strong> (usually Hydro Blue or Mist depending on dark/light direction), <strong>30% a secondary surface</strong> (Cream when Hydro dominates, or white when Mist dominates), and <strong>10% Brass or Splash Cyan as the accent</strong>. Brass is a finishing touch — borders, badges, single-line accents — never a fill background. Used everywhere it loses the premium feel that justifies the bathroom-aware positioning.</p>
      </div>

      <div class="team-callout brand">
        <span class="team-tag">🌿 Brand · Color by use case</span>
        <p>Default to <strong>Hydro Blue</strong> for hero brand surfaces and trust moments (PDP backgrounds, email headers, packaging spine). Use <strong>Brass</strong> sparingly for premium-feel callouts (subscription, founder story, retail badges). Reserve <strong>Splash Cyan</strong> for action — buttons, links, "in stock" indicators, anywhere we want the eye to land. <strong>Cream</strong> warms up otherwise-clinical layouts; use it on heritage, founder, and Shark Tank moments. Never use Hydro Deep as a large fill — it's a text/anchor color, not a wall color.</p>
      </div>

      <h3>Typography</h3>
      <p>Four families, each with a job. <strong>Bebas Neue</strong> for the brand wordmark and big leaderboard numbers. <strong>Fraunces</strong> for editorial heads, pull quotes, and product names — the warm, slightly upscale serif that lets the brand feel bathroom-renovation-grade rather than utility-aisle-grade. <strong>Inter</strong> for all body and UI. <strong>DM Mono</strong> for eyebrows, labels, and technical specs.</p>

      <table>
        <thead><tr><th>Family</th><th>Use for</th><th>Weight range</th></tr></thead>
        <tbody>
          <tr><td><strong>Bebas Neue</strong></td><td>Wordmark, big stat numbers, retail-shelf headers</td><td>Regular</td></tr>
          <tr><td><strong>Fraunces</strong></td><td>Section heads, editorial, pull quotes, taglines</td><td>700–900</td></tr>
          <tr><td><strong>Inter</strong></td><td>Body, UI, product copy, captions</td><td>300–800</td></tr>
          <tr><td><strong>DM Mono</strong></td><td>Eyebrows, meta labels, technical specs, SKU codes</td><td>400–700</td></tr>
        </tbody>
      </table>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · One display family per layout</span>
        <p>Pick Bebas <em>or</em> Fraunces per hero — never both in the same headline stack. Bebas for retail-shelf and big-number energy (paid social with stat-led hooks, packaging fronts). Fraunces for editorial polish (PDPs, brand films, founder stories, lifecycle email). Mixing display fonts in a single hero creates the visual chaos that makes the layout feel amateur. Inter and DM Mono pair safely with either.</p>
      </div>

      <h3>Logo</h3>
      <p>The Drain Buddy wordmark is the primary lockup. Use the full-color version on Cream, Mist, or white surfaces; use the reversed (white) version on Hydro Blue or Slate surfaces. Never recolor the logo, never stretch, never re-space the letters. Minimum clear space on all sides equals the height of the "D" in "Drain."</p>

      <div class="logo-blocks">
        <div>
          <div class="logo-block light">
            <img src="https://www.drainstrain.com/cdn/shop/files/Image20240717003911_1_1.png?v=1721626068" alt="Drain Buddy primary logo" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
            <span style="display:none;font-family:'Bebas Neue',sans-serif;font-size:2rem;color:var(--db-hydro-deep);letter-spacing:.04em">DRAIN BUDDY</span>
          </div>
          <div class="logo-caption">Primary · Use on light surfaces</div>
        </div>
        <div>
          <div class="logo-block dark">
            <img src="https://www.drainstrain.com/cdn/shop/files/Image20240717003911_1_1.png?v=1721626068" alt="Drain Buddy reversed logo" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
            <span style="display:none;font-family:'Bebas Neue',sans-serif;font-size:2rem;color:#fff;letter-spacing:.04em">DRAIN BUDDY</span>
          </div>
          <div class="logo-caption">Reversed · Use on dark surfaces</div>
        </div>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">💚 CX · Two names, one wordmark</span>
        <p>The current site uses the "Drain Buddy" wordmark across all consumer surfaces. The legacy "Drain Strain" wordmark only appears on the heritage screw-in stopper still selling at Home Depot under the "CHR 001" SKU. If a customer references the Drain Strain wordmark in a CX ticket, they're either a long-time customer or they bought from retail — confirm which product they have before troubleshooting.</p>
      </div>

      <h3>Photography direction</h3>
      <div class="do-dont">
        <div class="do">
          <h4>Do shoot</h4>
          <ul>
            <li>Real bathrooms with the product visible in the actual drain — finish coordinated to the room (matte black on a black-fixture bathroom, brass on a warm-toned bathroom, etc.)</li>
            <li>The 30-second install: hand on the stopper, pushing it in, twist motion implied</li>
            <li>The basket pop-out moment — clean satisfaction, hair contained but not center-frame</li>
            <li>Side-by-side finish lineup — all 4 finishes in a row to make the choice visual</li>
            <li>Bright, clean, daytime bathroom light — natural window light wherever possible</li>
            <li>Real reno-grade bathrooms (renters and homeowners), not magazine showrooms</li>
          </ul>
        </div>
        <div class="dont">
          <h4>Don't shoot</h4>
          <ul>
            <li>Close-up hair clumps, drain gunk, biohazard "before" shots — we sell the elegant fix, not the gross problem</li>
            <li>Stock images of generic bathrooms — buyers can spot a stock photo instantly</li>
            <li>The product floating against a pure white studio background (occasionally OK for PDP only, never for paid social)</li>
            <li>Mid-renovation bathroom shots with construction debris — feels like the wrong moment</li>
            <li>Magazine-spread "aspirational" bathrooms that don't look like the customer's house — alienates the renter and the practical homeowner</li>
            <li>Heavy filters, weird color casts — the drain stopper is the hero; let the bathroom be neutral</li>
          </ul>
        </div>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · Lead with the differentiated finish</span>
        <p>Every brand in this category defaults to chrome in their hero shots. We win by leading with <strong>matte black</strong> or <strong>oil rubbed bronze</strong> in 70% of paid creative — that's the visual signal that we're the bathroom-aware brand. Chrome is the "they all have one" finish; matte black is the "wait, is that an actual designed product?" finish. Save chrome for the SKU lineup shot, not the hero.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 7 · TARGET AUDIENCE & PERSONAS                                    -->
<!-- ================================================================ -->
<section id="audience">
  <div class="card collapsible" data-section="audience">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">07 · Audience</span>
        <h2>Target Audience &amp; Customer Personas</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <h3>Audience profile</h3>
      <p>The Drain Buddy core customer is an <strong>adult homeowner or renter between roughly 28 and 65</strong> who has at least one long-hair-shedding person in the household and has personally dealt with at least one slow drain in the past year. Skew is moderately female (~60–65%) — household-maintenance purchasing decisions trend that way — but not overwhelmingly so; a meaningful chunk of buyers are men frustrated enough to buy the fix themselves. Income range is broad ($45K–$200K+); the sub-$20 price point puts the product within reach of nearly any homeowner, and the "fits any bathroom" finish range pulls in design-conscious buyers as well as utility-first ones.</p>

      <p>The B2B/wholesale customer is a <strong>property manager, hospitality buyer, multi-family operator, or independent hardware-store owner</strong> looking for a low-cost preventive fix that reduces plumber callouts on units and rooms they manage at scale.</p>

      <h3>Customer personas</h3>
      <div class="persona-grid">
        <div class="persona">
          <div class="persona-name">"Long-Hair Lauren"</div>
          <div class="persona-meta">34 · Homeowner · Married · DTC</div>
          <p><strong>What she wants:</strong> Stop pulling hair out of the drain with a coat hanger every six weeks. Has tried the cheap mesh ones; they slip, look ugly, and still let hair through.</p>
          <p><strong>What stops her:</strong> Skeptical that another drain product will actually work. Has been disappointed before.</p>
          <p><strong>What converts her:</strong> Real reviews from other long-hair customers, before/after photos of the basket pop-out, and a finish that doesn't make her bathroom look worse. <strong>Hook:</strong> "Catches every hair. Drains at full speed."</p>
        </div>
        <div class="persona">
          <div class="persona-name">"Renovation Ryan &amp; Rachel"</div>
          <div class="persona-meta">42 · Mid-renovation · Homeowners · DTC</div>
          <p><strong>What they want:</strong> Finish-coordinated bathroom hardware. Just spent $4,000 on a new vanity and matte-black faucet — the chrome stopper that came with the sink looks wrong.</p>
          <p><strong>What stops them:</strong> Most drain stoppers only come in chrome or "antiqued brass" that doesn't match anything modern.</p>
          <p><strong>What converts them:</strong> The 5-finish lineup, especially Matte Black and Oil Rubbed Bronze, photographed in real renovated bathrooms. <strong>Hook:</strong> "Finally, a drain stopper that matches your bathroom."</p>
        </div>
        <div class="persona">
          <div class="persona-name">"Renter Reagan"</div>
          <div class="persona-meta">28 · Apartment renter · DTC</div>
          <p><strong>What they want:</strong> A no-tools, non-permanent fix for a clogged tub drain in their rental. Can't (or won't) call the landlord again, can't damage the fixtures.</p>
          <p><strong>What stops them:</strong> Worried they'll need a plumber or a tool kit. Doesn't want to install anything that needs to come back out at move-out.</p>
          <p><strong>What converts them:</strong> The 30-second push-and-twist install, no-tools messaging, and the fact that the unit drops out cleanly when they move. <strong>Hook:</strong> "30 seconds. No tools. No plumber."</p>
        </div>
        <div class="persona">
          <div class="persona-name">"Gift-Giving Gail"</div>
          <div class="persona-meta">58 · Buys for adult kids &amp; in-laws · DTC + retail</div>
          <p><strong>What she wants:</strong> A useful housewarming, holiday, or "thinking of you" gift that her grown kids or new-homeowner friends will actually use.</p>
          <p><strong>What stops her:</strong> Doesn't know which sink/tub the recipient has. Worried about giving "the wrong size."</p>
          <p><strong>What converts her:</strong> Clear sink-vs-tub differentiation, return-friendly policy, and gift-able finishes (matte black is the safe-bet design choice). <strong>Hook:</strong> "The housewarming gift they'll actually use."</p>
        </div>
        <div class="persona">
          <div class="persona-name">"Subscriber-Skeptic Steve"</div>
          <div class="persona-meta">46 · Repeat buyer · DTC</div>
          <p><strong>What he wants:</strong> A reliable replacement basket without committing to a recurring shipment. Hates surprise renewals.</p>
          <p><strong>What stops him:</strong> Doesn't want auto-ship; doesn't want to remember to come back; worried he'll buy the wrong basket (sink vs tub).</p>
          <p><strong>What converts him:</strong> The 6-pack format (one purchase = ~12–18 months of refills), clear sink-vs-tub labeling on the listing, and reorder reminders that don't auto-charge. <strong>Hook:</strong> "Pop the basket. Drop a fresh one in. Six come in the pack."</p>
        </div>
        <div class="persona">
          <div class="persona-name">"Property Manager Pat" (B2B)</div>
          <div class="persona-meta">51 · Multi-unit operator · 80–400 units · B2B</div>
          <p><strong>What they want:</strong> Reduce plumber callouts on hair-clog tickets across a portfolio of rental units. The math: one hair-clog plumber visit ≈ $120–$200; one Drain Buddy is a fraction of that. Even at half conversion, the unit pays back in one prevented visit.</p>
          <p><strong>What stops them:</strong> Worried about install time across many units, durability, and tenant tampering.</p>
          <p><strong>What converts them:</strong> Volume pricing, the 30-second install (no plumber needed for rollout), and proof of durability. <strong>Hook:</strong> "Prevent the plumber call — sub-$20 vs $200."</p>
        </div>
      </div>

      <div class="team-callout brand">
        <span class="team-tag">🌿 Brand · Don't over-segment in creative</span>
        <p>It's tempting to make six different ads for six personas. Don't. Lauren and Renovation Rachel respond to the <em>same</em> creative — a real bathroom, a real drain, a real install moment, with a finish-aware hero shot. The persona work is for <strong>targeting and copy nuance</strong> (which finish leads, which hook lands), not for spinning up six entirely different campaigns. Test angles, not personas.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 8 · COMPETITORS & POSITIONING                                     -->
<!-- ================================================================ -->
<section id="competitors">
  <div class="card collapsible" data-section="competitors">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">08 · Competitors</span>
        <h2>Competitive Landscape &amp; Positioning</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <h3>The category</h3>
      <p>Drain stoppers and hair catchers are a quiet, fragmented category. The default is a $5 mesh disc on Amazon — disposable, ugly, and only marginally effective. The mid-tier is the silicone "shroom" form factor pioneered by TubShroom (~$13–18). The premium tier doesn't really exist yet — most "premium" drain stoppers are just OEM-finish replacements for hardware brands. Drain Buddy is intentionally positioned in the <strong>mid-premium tier</strong> — same price as a Shroom, but with a finish-coordinated metal cap, twist-to-lock install, and the Ultra Flo basket design.</p>

      <h3>Direct &amp; adjacent competitors</h3>
      <table>
        <thead><tr><th>Competitor</th><th>What they sell</th><th>How we win against them</th></tr></thead>
        <tbody>
          <tr><td><strong>TubShroom / SinkShroom</strong></td><td>Silicone "mushroom" stopper that sits in the drain, $13–18</td><td>Theirs is silicone-only with a visible black/grey rubber top — doesn't match a finished bathroom. Ours has 5 metal/finish-coordinated caps and twist-locks instead of just sitting loose.</td></tr>
          <tr><td><strong>DrainWig</strong></td><td>Chain-down-the-drain hair grabber, ~$10</td><td>Theirs disappears down the drain (out of sight, out of mind, hard to clean). Ours is a visible, removable basket the customer pops out and rinses.</td></tr>
          <tr><td><strong>OXO Good Grips</strong></td><td>Mesh disc strainer, $7–10</td><td>OXO sits on top of the drain — kicks off easily, slows the drain, looks like a kitchen accessory in a bathroom. Ours installs <em>into</em> the drain, doesn't slow flow, and matches the bathroom.</td></tr>
          <tr><td><strong>Generic Amazon mesh catchers</strong></td><td>$3–8 bulk packs of mesh discs</td><td>Race-to-the-bottom commodity; they all look the same and they all clog. We're the design-aware option for buyers who've been through one or two of those.</td></tr>
          <tr><td><strong>Drano / Liquid-Plumr</strong></td><td>$5–10 chemical clog dissolver, treats existing clogs</td><td>Different use case. They're reactive (clog already exists). We're preventive (no clog forms in the first place). Often complementary — a customer might keep both on hand.</td></tr>
          <tr><td><strong>Plumber visit</strong></td><td>$120–250 service call to snake the drain</td><td>The economic case writes itself: prevent one plumber visit and Drain Buddy has paid for itself ~10 times over. Lifetime ROI vs a single emergency call is the strongest B2B pitch.</td></tr>
          <tr><td><strong>Original screw-in pop-up stoppers</strong></td><td>OEM lever-actuated stoppers that came with the sink</td><td>The thing the customer is replacing. Theirs catches nothing — hair slips right past the lever rod and clogs the trap downstream.</td></tr>
          <tr><td><strong>Heritage Drain Strain (our own)</strong></td><td>Original screw-in stopper at Home Depot, $19.97 (CHR 001)</td><td>Not a competitor — it's a sister product. Different mechanism (screws into existing drain assembly), targets DIY shoppers and plumbers at retail. We don't actively merchandise it on DTC.</td></tr>
        </tbody>
      </table>

      <h3>Positioning statement</h3>
      <blockquote class="brand-quote">For homeowners and renters tired of hair-clogged drains and ugly mesh hair catchers, Drain Buddy is the only finish-coordinated, twist-to-lock stopper that catches every hair without slowing the drain — because the fix for a daily annoyance shouldn't itself be ugly, slow, or a maintenance project.</blockquote>

      <h3>What we say when asked "how is this different from a TubShroom?"</h3>
      <p>Honest comparison: TubShroom popularized the silicone-stopper-in-the-drain form factor and they did it well. The differences that matter — Drain Buddy has a <strong>finish-matched metal cap</strong> (TubShroom is silicone-rubber on top, which is fine for utility but wrong for a finished bathroom), a <strong>twist-to-lock install</strong> (TubShroom relies on friction fit, which can pop when bumped), and the <strong>Ultra Flo basket design</strong> that drains noticeably faster on full-tub release. Same price tier, more thoughtful execution.</p>

      <div class="team-callout brand">
        <span class="team-tag">🌿 Brand · We don't disparage competitors</span>
        <p>TubShroom and DrainWig are good products that helped create the category. <strong>Don't trash competitors</strong> in any external copy — it makes us look insecure. Make the case for what Drain Buddy does that nothing else does (finish, lock, flow), and let the customer reach the conclusion. The category is fragmented; we don't need to attack the incumbents, we need to make ourselves obviously better.</p>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · The plumber-visit math</span>
        <p>The strongest single-line value prop in this brand is the math: <strong>one plumber call ≈ $150 minimum. One Drain Buddy is a fraction of that.</strong> Frame this in B2B pitches, in property-manager-targeted ads, and in any "is it worth it?" objection-handling content. The unit pays for itself the first time it prevents a callout — and most households will get there inside 12 months.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 9 · OBJECTION HANDLING                                            -->
<!-- ================================================================ -->
<section id="objections">
  <div class="card collapsible" data-section="objections">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">09 · Objections</span>
        <h2>Objection Handling / Battlecards</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Below are the most common objections CX, sales reps, and partner reps will hear. Each comes with a script. The rule of thumb: <strong>acknowledge → reframe → offer evidence → close.</strong> Never argue, never get defensive, never overpromise.</p>

      <table>
        <thead><tr><th>Objection</th><th>Reframe</th><th>Closer</th></tr></thead>
        <tbody>
          <tr>
            <td>"It's just a drain stopper. Why does it cost $14?"</td>
            <td>It's a finish-coordinated, twist-to-lock stopper with the Ultra Flo basket design — engineered to catch every hair without slowing the drain. Ten years of refinement since the original Shark Tank pitch went into the catch-vs-flow trade-off.</td>
            <td>"You'll prevent at least one $150 plumber visit. The math is in your favor on the first clog you don't have."</td>
          </tr>
          <tr>
            <td>"I already have a mesh hair catcher from Amazon."</td>
            <td>Most customers have tried one — and most customers tell us those slip out of the drain, slow the water down, and let hair through anyway. Drain Buddy locks in, drains at full speed, and the basket pops out for cleaning.</td>
            <td>"How long has yours actually stayed put? If the answer is 'not long,' that's the problem we fixed."</td>
          </tr>
          <tr>
            <td>"Will it fit my sink/tub?"</td>
            <td>The sink Drain Buddy fits a standard <strong>1.25" bathroom sink drain</strong> (the most common US residential size). The tub Drain Buddy fits a standard tub drain. Measure across the drain opening to confirm before ordering.</td>
            <td>"If you measure 1.25" across, the sink one fits. If it's bigger, that's the tub product."</td>
          </tr>
          <tr>
            <td>"Will it slow my drain?"</td>
            <td>That's the whole reason we engineered the Ultra Flo basket. Most hair catchers trade flow for catch — we don't. Even at full release, water moves through at near-stock speed.</td>
            <td>"This is the trade-off the category never solved before. It's our actual differentiator."</td>
          </tr>
          <tr>
            <td>"Why do I need 4 finishes?"</td>
            <td>You don't need 4 — you need the one that matches your bathroom. Most customers replace the chrome stopper that came with the sink because it doesn't match the rest of their fixtures. We offer Brushed Nickel, Oil Rubbed Bronze, Chrome, and Matte Black so the stopper isn't the ugliest thing in the room.</td>
            <td>"Pick the finish that matches your faucet. Most renovated bathrooms aren't chrome anymore."</td>
          </tr>
          <tr>
            <td>"Do I need tools? A plumber?"</td>
            <td>No tools. No plumber. Push it into the drain, twist to lock. About 30 seconds. If you can install a battery in a remote, you can install Drain Buddy.</td>
            <td>"Watch the install video — it's literally one motion."</td>
          </tr>
          <tr>
            <td>"Will it work with my garbage disposal?"</td>
            <td>The bathroom Drain Buddy is designed for bathroom sinks (no disposal). For kitchen sinks, the <strong>Kitchen Sink Super Strainer</strong> is the right product — it fits a 3.5" kitchen drain and works with disposals. Don't put the bathroom unit on a kitchen drain.</td>
            <td>"You want the Kitchen Super Strainer for that — different SKU. Let me link you."</td>
          </tr>
          <tr>
            <td>"How often do I replace the basket?"</td>
            <td>Most customers get 3–6 months out of a basket depending on hair volume in the household. The 6-pack covers roughly 1.5 to 3 years of refills, so it's a buy-once, replace-as-needed product — not a subscription.</td>
            <td>"Buy the 6-pack and forget about it for a year and a half."</td>
          </tr>
          <tr>
            <td>"I bought the 6-pack and it doesn't fit my Drain Buddy!"</td>
            <td>The 6-pack of replacement baskets fits the <strong>sink</strong> Drain Buddy only — not the tub product. The tub baskets are larger. This is a real mismatch we see; if it happened to you, reply with your order number and we'll swap it for the right one.</td>
            <td>"Fully on us — keep the wrong pack and we'll send the right one out today."</td>
          </tr>
          <tr>
            <td>"Will my dog/kid be able to remove it?"</td>
            <td>The twist-to-lock keeps it secure under normal use; a determined toddler or a curious dog can sometimes pry it out. It's a stopper, not a child-lock — if pet/child safety is the priority, supervise tub time as you would normally.</td>
            <td>"It's secure for everyday use; it's not a tamper-proof lock."</td>
          </tr>
          <tr>
            <td>"What if it doesn't work for me?"</td>
            <td>Ship it back to us within the return window for a full refund of purchase price. No questions asked.</td>
            <td>"Worst case, you mail it back and you're whole. We'd rather have a happy non-customer than an unhappy one."</td>
          </tr>
          <tr>
            <td>"Do you offer wholesale pricing for property management / hardware retail?"</td>
            <td>Yes — we have a B2B program for property managers, hospitality buyers, and independent retailers. Volume pricing and dedicated account support are available.</td>
            <td>"Email drainbuddy@inventel.net — they'll send the wholesale sheet and pricing."</td>
          </tr>
          <tr>
            <td>"I saw it on Shark Tank — is it still the same company?"</td>
            <td>The original Drain Strain pitch was 2015 (Season 8, Episode 12) by inventor Naushad Ali. The brand is now operated by Inventel under the consumer-facing name Drain Buddy, with the same Ultra Flo design refined and expanded into 4 finishes and 5 SKUs.</td>
            <td>"Same product family, broader catalog, and the original inventor is still part of the heritage."</td>
          </tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · The "I don't know" rule</span>
        <p>For any question you can't answer with confidence — exact basket cycle counts, lab-verified flow rate numbers, plumbing-code certifications — the right answer is <em>"That's a fair question and I want to give you accurate information rather than guess. Let me check with the brand team and follow up by email."</em> Take the customer's email, log the question with the Brand Lead, and respond within one business day. Never make up a spec.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · The wrong-basket return is the #1 ticket</span>
        <p>By volume, the most common CX issue is: <strong>customer buys the 6-pack of replacement baskets for the wrong Drain Buddy</strong> (most often, they have the tub product and they buy the sink-only 6-pack because it's the only basket SKU listed). Don't make the customer pay for our PDP-clarity problem. Default to: keep the wrong pack, we ship the right one (when one exists), full refund if not. Log every instance — Brand needs the volume data to fix the listing.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 10 · CUSTOMER JOURNEY & LIFECYCLE                                 -->
<!-- ================================================================ -->
<section id="journey">
  <div class="card collapsible" data-section="journey">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">10 · Customer Journey</span>
        <h2>Customer Journey &amp; Lifecycle</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Most Drain Buddy buyers move through a five-stage journey from "ugh, my drain is slow again" to "I bought one for my mom too." The table below maps what the customer is thinking, where they are, what we do, and what CX needs to know.</p>

      <table>
        <thead><tr><th>Stage</th><th>What they're thinking</th><th>Channel</th><th>Brand action</th><th>CX role</th></tr></thead>
        <tbody>
          <tr>
            <td><strong>Awareness</strong></td>
            <td>"My drain is clogged again. There has to be something better than mesh."</td>
            <td>Paid social (Meta, TikTok), Pinterest renovation boards, organic before/after content, Amazon search, Shark Tank rerun nostalgia</td>
            <td>Lead with the visible problem (slow drain) and the visible solution (basket pop-out moment + finish lineup)</td>
            <td>Field DM-style questions on social. Don't sell — confirm the product exists and direct to the site.</td>
          </tr>
          <tr>
            <td><strong>Consideration</strong></td>
            <td>"Will it fit? Will it actually work? How is it different from the $5 one?"</td>
            <td>PDP, blog, email nurture, comparison content (vs TubShroom, vs mesh), reviews</td>
            <td>Show the product in real bathrooms, side-by-side with finish options. 1,400+ reviews per hero SKU is the trust anchor.</td>
            <td>Answer "will it fit" with specific drain dimensions (1.25" sink). Answer "how is it different" with the 3-line case: finish, lock, flow.</td>
          </tr>
          <tr>
            <td><strong>Purchase</strong></td>
            <td>"Which finish? Sink or tub? Should I get the basket pack now or later?"</td>
            <td>Cart, checkout, abandoned-cart email/SMS</td>
            <td>Default-on cross-sell: stopper PDP recommends the matching basket pack. Free-shipping threshold (TBD — confirm with CX) nudges to add the pack at checkout.</td>
            <td>Honor any active code. Recover abandoned carts with a "still thinking it over?" reminder + finish-decision helper.</td>
          </tr>
          <tr>
            <td><strong>First use</strong></td>
            <td>"Where does this go? How do I install it without screwing it up?"</td>
            <td>Order confirmation, unboxing email, install video link, day-3 SMS</td>
            <td>Day-0 confirmation with install video link. Day-3 follow-up SMS asking how the install went and offering CX support if needed.</td>
            <td>The most common "doesn't work" call in the first week is <strong>install confusion</strong> — almost always solved by walking the customer through "push it in, then twist clockwise to lock."</td>
          </tr>
          <tr>
            <td><strong>Loyalty &amp; refill</strong></td>
            <td>"The basket is full again. Where's that 6-pack we bought?"</td>
            <td>Day-90 refill reminder email, review request, gift-the-friend referral</td>
            <td>Day-30 review request. Day-90 "time to swap the basket?" reminder with link to the matching 6-pack. Day-180 "buy one for someone else" referral push.</td>
            <td>Match the basket pack to the original purchase (sink vs tub) automatically — don't make the customer remember.</td>
          </tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · The first-week call</span>
        <p>The single biggest source of "doesn't work" tickets in week one is <strong>install confusion</strong>. Before assuming a defect, walk the customer through: <strong>(1)</strong> Make sure the existing pop-up stopper is removed (some sinks have a built-in lever stopper that has to come out first). <strong>(2)</strong> Push Drain Buddy straight down into the open drain. <strong>(3)</strong> Twist clockwise about a quarter-turn to lock. If they confirm all three steps and it's still not seating, that's a real fitment issue — get the drain measurement and route to a replacement or refund.</p>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · The Day-90 reminder is the LTV moment</span>
        <p>The basket-refill reminder at Day 90 is the single highest-leverage lifecycle email in the brand. Customers don't typically remember to come back on their own — they live with a slowing drain for weeks before realizing the basket is full. A well-timed "ready to swap?" email with a one-click link to the right basket pack drives the bulk of repeat revenue. Do <strong>not</strong> let this email lapse during platform migrations or template redesigns — it's the LTV engine.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 11 · MARKETING ANGLES & HOOKS                                     -->
<!-- ================================================================ -->
<section id="angles">
  <div class="card collapsible" data-section="angles">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">11 · Angles &amp; Hooks</span>
        <h2>Marketing Angles &amp; Hooks</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Six proven angles to test in paid, email, and organic. Each anchors to a different motivation. Mix across the funnel — top-of-funnel awareness usually leads with #1 or #2; mid-funnel with #3 or #4; bottom-funnel conversion with #5 or #6.</p>

      <div class="callout-row">
        <div class="pillar">
          <span class="pillar-icon">💧</span>
          <h4>1 · The "no more clogs" angle</h4>
          <p>"Catches every hair. Drains at full speed." Lead with the daily annoyance and the clean fix. The most universal hook — works for almost every persona.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">✨</span>
          <h4>2 · The bathroom-aware angle</h4>
          <p>"Finally, a drain stopper that matches your bathroom." Lead with the 4 finishes — Brushed Nickel, Oil Rubbed Bronze, Matte Black, Chrome — in a real renovated bathroom. Best for design-conscious renovators and aesthetic-driven shoppers.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">⏱️</span>
          <h4>3 · The "30-second install" angle</h4>
          <p>"No tools. No plumber. 30 seconds." Lead with the install moment — push, twist, done. Best for renters and anyone gun-shy about plumbing projects.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">💰</span>
          <h4>4 · The plumber-visit math angle</h4>
          <p>"~$15 vs the $200 plumber visit." Lead with the economic case. Best for property managers, multi-bath households, and skeptical-buyer creative.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🦈</span>
          <h4>5 · The Shark Tank heritage angle</h4>
          <p>"Invented on Shark Tank in 2015. Refined ever since." Lead with the founder credibility and the brand's TV pedigree. Best for editorial, PR, and email nurture.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🎁</span>
          <h4>6 · The housewarming gift angle</h4>
          <p>"The housewarming gift they'll actually use." Lean in for new-homeowner moments, holiday, "for the renter in your life." Pairs with gift-friendly finishes (matte black is the safe-bet design choice).</p>
        </div>
      </div>

      <h3>Proven hook lines (use as paid-ad / email-subject starting points)</h3>
      <ol>
        <li><em>"What hair-clogged drains are actually doing to your pipes."</em></li>
        <li><em>"This is six weeks of hair. The sink still drains in 3 seconds."</em></li>
        <li><em>"The drain stopper that doesn't slow your drain."</em></li>
        <li><em>"Your bathroom finally has a drain stopper that matches it."</em></li>
        <li><em>"$14 today, or $150 to the plumber later."</em></li>
        <li><em>"Push it in. Twist. Done. No tools. No plumber."</em></li>
        <li><em>"As seen on Shark Tank — refined for every bathroom since."</em></li>
        <li><em>"The renter-friendly drain fix that pops right out at move-out."</em></li>
      </ol>

      <h3>Angle-to-channel mapping</h3>
      <table>
        <thead><tr><th>Angle</th><th>Best channel</th><th>Best persona</th></tr></thead>
        <tbody>
          <tr><td>1 · No more clogs</td><td>Meta paid, TikTok organic, Pinterest</td><td>Long-Hair Lauren, Renter Reagan</td></tr>
          <tr><td>2 · Bathroom-aware</td><td>Pinterest, IG feed, design blogs, email</td><td>Renovation Ryan &amp; Rachel</td></tr>
          <tr><td>3 · 30-second install</td><td>TikTok, IG Reels, YouTube Shorts</td><td>Renter Reagan, Gift-Giving Gail</td></tr>
          <tr><td>4 · Plumber math</td><td>B2B email, LinkedIn, retail buyer decks</td><td>Property Manager Pat</td></tr>
          <tr><td>5 · Shark Tank heritage</td><td>PR, email nurture, founder content</td><td>Subscriber-Skeptic Steve, all DTC</td></tr>
          <tr><td>6 · Housewarming gift</td><td>Pinterest, IG holiday content, gift-guide PR</td><td>Gift-Giving Gail</td></tr>
        </tbody>
      </table>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · Test angles, not personas</span>
        <p>Each angle deserves its own creative variant in paid testing. <strong>Don't bundle two angles into one ad</strong> — an ad that's 50% bathroom-aware and 50% plumber-math is unreadable. Pick one. Run it clean. Compare angle-by-angle CPMs and CACs over a 2–3 week window before deciding which to scale. The performance gap between the best and worst angle is usually 2–3x; that's the entire game.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 12 · SAMPLE WINNING CREATIVES                                     -->
<!-- ================================================================ -->
<section id="creatives">
  <div class="card collapsible" data-section="creatives">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">12 · Winning Creatives</span>
        <h2>Sample Winning Creatives</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Looking at all our winning ads across SugarMD, Wild Earth, Pizza Pack, Spark, and Clean &amp; Hit, here's what they have in common — six patterns that show up across categories, audiences, and platforms. Use these as your filter when reviewing or briefing creative.</p>

      <div class="pattern-grid">
        <div class="pattern">
          <div class="pattern-num">PATTERN 01</div>
          <div class="pattern-icon">📌</div>
          <h4>Lead with a specific, relatable problem</h4>
          <p>Not "improve your bathroom." Specifically: <em>"The hair clog that comes back every six weeks no matter what you do."</em> The customer recognizes themselves in the first second.</p>
        </div>
        <div class="pattern">
          <div class="pattern-num">PATTERN 02</div>
          <div class="pattern-icon">⭐</div>
          <h4>Social proof front and center</h4>
          <p>Star rating, review count (we're at 1,400+ per hero SKU), real customer photos. For hero ads, the count itself is the proof — "1,500+ reviews" beats one line of testimonial copy.</p>
        </div>
        <div class="pattern">
          <div class="pattern-num">PATTERN 03</div>
          <div class="pattern-icon">📱</div>
          <h4>Native, authentic-looking creative</h4>
          <p>Phone-shot, real bathroom, real hands installing the product. Studio-shot product floating on white converts worse than the same product in a real bathroom — the customer can't imagine it in theirs.</p>
        </div>
        <div class="pattern">
          <div class="pattern-num">PATTERN 04</div>
          <div class="pattern-icon">🎯</div>
          <h4>One clear, simple message</h4>
          <p>The ad has one job. Don't try to sell finish <em>and</em> install <em>and</em> Shark Tank <em>and</em> plumber-math in 6 seconds. Pick one angle. Test it clean. Scale the winner.</p>
        </div>
        <div class="pattern">
          <div class="pattern-num">PATTERN 05</div>
          <div class="pattern-icon">🔁</div>
          <h4>Contrast and "switch" framing</h4>
          <p>Before/after. Slow draining sink → 3-second drain. Hair-stuffed basket → clean basket. The "switch" is the reason to scroll-stop. Visual proof beats any copy claim.</p>
        </div>
        <div class="pattern">
          <div class="pattern-num">PATTERN 06</div>
          <div class="pattern-icon">😌</div>
          <h4>Emotion over logic</h4>
          <p>The conversion isn't "the spec sheet is impressive." It's "I want this small daily annoyance to go away, and this looks like the obvious fix." Lead with the relief — then back it up with the feature list.</p>
        </div>
      </div>

      <div class="through-line">
        <span class="through-line-label">The through-line</span>
        <p>Your winning ads find a customer who already has a problem, show them someone like them who solved it, and make the product feel like the obvious next step — not a hard sell.</p>
      </div>

      <h3>Brand-specific gallery — concept stage</h3>

      <div class="alert-callout critical">
        <span class="alert-callout-title">🏷️ Concept Mockups · Not Real Ads</span>
        <p>Inventel took over Drain Buddy operations in <strong>2023</strong> and the brand has run paid social before, but as of the writing of this hub <strong>no in-market winners are featured here yet</strong>. The three concept mockups below are illustrative — they show how the six universal patterns translate into a Drain Buddy ad. They are <strong>not real ads</strong> and have <strong>not been performance-tested</strong>. As the next batch of paid concepts goes in market, this section will be replaced with screenshots of the actual top performers, their meta, and the patterns that drove the win.</p>
      </div>

      <div class="creative-gallery">

        <!-- Concept 1: Bathroom-aware finish lineup -->
        <div class="creative-card">
          <div class="creative-img">
            <svg viewBox="0 0 200 250" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="db-bg1" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0" stop-color="#F5EFE0"/>
                  <stop offset="1" stop-color="#E5D9B8"/>
                </linearGradient>
                <radialGradient id="db-mb" cx=".4" cy=".35" r=".7"><stop offset="0" stop-color="#3a3a3a"/><stop offset="1" stop-color="#0a0a0a"/></radialGradient>
                <radialGradient id="db-bn" cx=".4" cy=".35" r=".7"><stop offset="0" stop-color="#bdbcb6"/><stop offset="1" stop-color="#7a7a72"/></radialGradient>
                <radialGradient id="db-orb" cx=".4" cy=".35" r=".7"><stop offset="0" stop-color="#6a4f2d"/><stop offset="1" stop-color="#2d1f10"/></radialGradient>
                <radialGradient id="db-cr" cx=".4" cy=".35" r=".7"><stop offset="0" stop-color="#f8f8f8"/><stop offset="1" stop-color="#a8a8a8"/></radialGradient>
              </defs>
              <rect width="200" height="250" fill="url(#db-bg1)"/>
              <text x="100" y="32" text-anchor="middle" font-family="Fraunces, serif" font-size="13" font-weight="700" fill="#07334D">Match your bathroom.</text>
              <text x="100" y="48" text-anchor="middle" font-family="Inter, sans-serif" font-size="9" fill="#3F4C5C">4 finishes. One stopper.</text>
              <!-- Finish lineup, 4 circles -->
              <circle cx="50" cy="100" r="22" fill="url(#db-mb)" stroke="#2BB3D9" stroke-width="0"/>
              <circle cx="105" cy="100" r="22" fill="url(#db-bn)"/>
              <circle cx="160" cy="100" r="22" fill="url(#db-orb)"/>
              <circle cx="78" cy="150" r="22" fill="url(#db-cr)"/>
              <circle cx="133" cy="150" r="22" fill="url(#db-mb)" opacity=".55"/>
              <text x="50" y="135" text-anchor="middle" font-family="DM Mono, monospace" font-size="6" fill="#3F4C5C">MATTE</text>
              <text x="105" y="135" text-anchor="middle" font-family="DM Mono, monospace" font-size="6" fill="#3F4C5C">NICKEL</text>
              <text x="160" y="135" text-anchor="middle" font-family="DM Mono, monospace" font-size="6" fill="#3F4C5C">BRONZE</text>
              <text x="78" y="185" text-anchor="middle" font-family="DM Mono, monospace" font-size="6" fill="#3F4C5C">CHROME</text>
              <text x="133" y="185" text-anchor="middle" font-family="DM Mono, monospace" font-size="6" fill="#3F4C5C">+ MORE</text>
              <!-- bottom CTA -->
              <rect x="0" y="210" width="200" height="40" fill="#0E5379"/>
              <text x="100" y="227" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="13" fill="#fff" letter-spacing="1.5">DRAIN BUDDY</text>
              <text x="100" y="241" text-anchor="middle" font-family="Inter, sans-serif" font-size="8" fill="#E0B85F" font-weight="700">CLEAR DRAINS MADE SIMPLE</text>
            </svg>
          </div>
          <div class="creative-meta">⚠ Concept Mockup · Not Yet Tested</div>
          <div class="creative-caption">
            <strong>Match your bathroom — 4 finishes.</strong>
            Finish lineup hero. Lead with bathroom-aware angle, lets the visual do the work. Format: Meta static, 4:5, design-conscious renovator audience.
          </div>
          <div class="creative-tags">
            <span class="creative-tag">Pattern 03</span>
            <span class="creative-tag">Pattern 04</span>
            <span class="creative-tag">Angle 02</span>
          </div>
        </div>

        <!-- Concept 2: Switch / before-after -->
        <div class="creative-card">
          <div class="creative-img">
            <svg viewBox="0 0 200 250" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="db-bg2" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0" stop-color="#07334D"/>
                  <stop offset="1" stop-color="#0E5379"/>
                </linearGradient>
              </defs>
              <rect width="200" height="250" fill="url(#db-bg2)"/>
              <!-- top half: clogged drain -->
              <rect x="20" y="20" width="160" height="90" rx="6" fill="#1F2937"/>
              <text x="100" y="38" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="11" fill="#E0B85F" letter-spacing="1">BEFORE</text>
              <!-- clogged drain illustration -->
              <ellipse cx="100" cy="80" rx="38" ry="16" fill="#0a0a0a"/>
              <ellipse cx="100" cy="78" rx="34" ry="13" fill="#1a1a1a"/>
              <!-- hair tangles -->
              <path d="M 70 75 Q 80 70 90 78 Q 100 65 110 76 Q 120 72 130 80" stroke="#3a2820" stroke-width="1.2" fill="none"/>
              <path d="M 75 82 Q 85 78 95 84 Q 105 78 115 84 Q 125 80 130 86" stroke="#2a1810" stroke-width="1" fill="none"/>
              <text x="100" y="105" text-anchor="middle" font-family="Inter, sans-serif" font-size="8" fill="#fff">Slow drain. Recurring clog.</text>
              <!-- bottom half: clean drain with Drain Buddy -->
              <rect x="20" y="125" width="160" height="90" rx="6" fill="#E8F0F4"/>
              <text x="100" y="143" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="11" fill="#07334D" letter-spacing="1">AFTER</text>
              <!-- drain with Drain Buddy installed -->
              <ellipse cx="100" cy="180" rx="38" ry="16" fill="#a8a8a8"/>
              <circle cx="100" cy="178" r="22" fill="url(#db-mb)" stroke="#0E5379" stroke-width="1"/>
              <text x="100" y="208" text-anchor="middle" font-family="Inter, sans-serif" font-size="8" fill="#07334D" font-weight="700">3-second drain. No more clog.</text>
              <!-- cta strip -->
              <rect x="0" y="222" width="200" height="28" fill="#C49A4D"/>
              <text x="100" y="240" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="13" fill="#07334D" letter-spacing="1.5">DRAIN BUDDY</text>
            </svg>
          </div>
          <div class="creative-meta">⚠ Concept Mockup · Not Yet Tested</div>
          <div class="creative-caption">
            <strong>Hair-clogged drain → clean Drain Buddy.</strong>
            Top/bottom contrast on the same drain — the "switch" happens in the customer's eye before they read the copy. Format: Meta static, 4:5, no-more-clogs angle.
          </div>
          <div class="creative-tags">
            <span class="creative-tag">Pattern 01</span>
            <span class="creative-tag">Pattern 05</span>
            <span class="creative-tag">Angle 01</span>
          </div>
        </div>

        <!-- Concept 3: 30-second install -->
        <div class="creative-card">
          <div class="creative-img">
            <svg viewBox="0 0 200 250" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="db-bg3" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0" stop-color="#E8F0F4"/>
                  <stop offset="1" stop-color="#FAFBFC"/>
                </linearGradient>
              </defs>
              <rect width="200" height="250" fill="url(#db-bg3)"/>
              <text x="100" y="30" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="22" fill="#0E5379" letter-spacing="1.5">30 SECONDS.</text>
              <text x="100" y="50" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="14" fill="#176B98" letter-spacing="1">NO TOOLS. NO PLUMBER.</text>
              <!-- 3-step illustration -->
              <!-- step 1 -->
              <circle cx="40" cy="115" r="22" fill="#fff" stroke="#0E5379" stroke-width="2"/>
              <text x="40" y="120" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="20" fill="#0E5379">1</text>
              <text x="40" y="150" text-anchor="middle" font-family="Inter, sans-serif" font-size="8" fill="#1F2937">PUSH IN</text>
              <!-- arrow -->
              <path d="M 65 115 L 80 115" stroke="#2BB3D9" stroke-width="2" marker-end="url(#arr)"/>
              <!-- step 2 -->
              <circle cx="100" cy="115" r="22" fill="#fff" stroke="#0E5379" stroke-width="2"/>
              <text x="100" y="120" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="20" fill="#0E5379">2</text>
              <text x="100" y="150" text-anchor="middle" font-family="Inter, sans-serif" font-size="8" fill="#1F2937">TWIST</text>
              <!-- arrow -->
              <path d="M 125 115 L 140 115" stroke="#2BB3D9" stroke-width="2"/>
              <!-- step 3 -->
              <circle cx="160" cy="115" r="22" fill="#2BB3D9"/>
              <text x="160" y="120" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="20" fill="#fff">3</text>
              <text x="160" y="150" text-anchor="middle" font-family="Inter, sans-serif" font-size="8" fill="#1F2937">DONE</text>
              <!-- proof -->
              <text x="100" y="185" text-anchor="middle" font-family="Fraunces, serif" font-size="10" fill="#07334D" font-style="italic">"Easier than installing a battery."</text>
              <text x="100" y="200" text-anchor="middle" font-family="Inter, sans-serif" font-size="8" fill="#3F4C5C">— Verified review · 1,500+ reviews</text>
              <!-- cta -->
              <rect x="0" y="215" width="200" height="35" fill="#0E5379"/>
              <text x="100" y="237" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="13" fill="#E0B85F" letter-spacing="1.5">SHOP DRAIN BUDDY</text>
            </svg>
          </div>
          <div class="creative-meta">⚠ Concept Mockup · Not Yet Tested</div>
          <div class="creative-caption">
            <strong>30 seconds · Push, twist, done.</strong>
            Three-step demo. Best for renter-targeted creative and skeptical-buyer ads. Format: Meta static or animated, 4:5, install-anxiety audience.
          </div>
          <div class="creative-tags">
            <span class="creative-tag">Pattern 02</span>
            <span class="creative-tag">Pattern 04</span>
            <span class="creative-tag">Angle 03</span>
          </div>
        </div>

      </div>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · The "real bathroom" rule</span>
        <p>Every paid hero should be shot in a real bathroom — not a staging set, not a white-cyc, not a render. The single highest-leverage thing Creative can do for this brand is build a library of <strong>15–20 real customer-bathroom photos</strong> across all 4 sink finishes. UGC works because the customer's brain reads it as "people like me have this." A render in a fake bathroom never does that work.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 14 · SOCIAL MEDIA & DIGITAL CHANNELS                              -->
<!-- ================================================================ -->
<section id="social">
  <div class="card collapsible" data-section="social">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">14 · Social &amp; Digital</span>
        <h2>Social Media &amp; Digital Channels</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Drain Buddy's social presence is built around <strong>visual proof of the install moment and the basket-pop satisfaction</strong>. Our customer (homeowners and renters dealing with hair clogs) skews more Pinterest, Facebook, and Instagram than TikTok — but TikTok satisfaction-content is rapidly becoming the single best top-of-funnel channel for the basket-pop visual. Treat each platform as a different audience even when the underlying message is similar.</p>

      <table>
        <thead><tr><th>Channel</th><th>Primary use</th><th>Cadence</th><th>Tone mode</th></tr></thead>
        <tbody>
          <tr><td><strong>Instagram</strong></td><td>Feed = polished bathroom flat-lays, finish lineup, founder/heritage; Reels = install demos, basket-pop satisfaction, UGC</td><td>3–5 posts/wk + 2–3 reels/wk</td><td>Practical neighbor + Visually satisfying</td></tr>
          <tr><td><strong>TikTok</strong></td><td>Native short-form satisfaction content (basket pop-out moment), creator partnerships with home/cleaning niche</td><td>3–5 posts/wk</td><td>Visually satisfying</td></tr>
          <tr><td><strong>Facebook</strong></td><td>Older-skewing audience, paid social workhorse, household-tips groups, product reviews</td><td>3–5 posts/wk</td><td>Practical neighbor</td></tr>
          <tr><td><strong>Pinterest</strong></td><td>Bathroom renovation boards, "before/after" pins, gift guides — high-intent home-renovation traffic</td><td>5–10 pins/wk during renovation season</td><td>Practical neighbor</td></tr>
          <tr><td><strong>YouTube</strong></td><td>Long-form install demos, founder content, plumber-credentialed reviews</td><td>1–2 videos/mo</td><td>Practical neighbor + Quietly proud</td></tr>
          <tr><td><strong>Email</strong></td><td>Nurture, promo, post-purchase, basket-refill reminders. Highest converting owned channel.</td><td>1–2 sends/wk; transactional triggered</td><td>Practical neighbor</td></tr>
          <tr><td><strong>SMS</strong></td><td>Order updates + opted-in promo (use sparingly)</td><td>1–2 sends/mo max</td><td>Practical &amp; direct</td></tr>
          <tr><td><strong>Reddit</strong></td><td>Engagement only, never spam. r/HomeImprovement, r/HomeMaintenance, r/declutter are active and skeptical.</td><td>Reactive only</td><td>Practical neighbor</td></tr>
          <tr><td><strong>Amazon</strong></td><td>Listing optimization, A+ content, Vine reviews, Sponsored Products. Big channel for this category.</td><td>Continuous optimization</td><td>Confident performance</td></tr>
        </tbody>
      </table>

      <h3>Hashtag governance</h3>
      <p>Hashtags still help discoverability on Instagram and TikTok — less so elsewhere. Use a small, consistent set so the brand becomes findable.</p>
      <ul>
        <li><strong>Brand:</strong> #DrainBuddy · #DrainStrain · #ClearDrainsMadeSimple</li>
        <li><strong>Performance:</strong> #HairCatcher · #DrainStopper · #CloggedDrain · #BathroomHack</li>
        <li><strong>Category:</strong> #BathroomEssentials · #BathroomUpgrade · #HomeMaintenance · #PlumbingHack</li>
        <li><strong>Audience:</strong> #Homeowners · #RenterFriendly · #BathroomReno · #SatisfyingClean</li>
        <li><strong>Heritage:</strong> #SharkTank · #AsSeenOnSharkTank (use sparingly, never as the lead tag)</li>
        <li><strong>Avoid:</strong> generic engagement-bait tags, gross-out tags (#Disgusting, #Gross), unrelated trending tags, anything that doesn't ladder back to bathroom or drain content</li>
      </ul>

      <h3>Owned channels</h3>
      <ul>
        <li><strong>Website:</strong> <a href="https://www.drainstrain.com/" target="_blank" rel="noopener">drainstrain.com</a> (legal/operational domain — note that the consumer brand on the site is Drain Buddy)</li>
        <li><strong>Instagram:</strong> <a href="https://www.instagram.com/drain.buddy/" target="_blank" rel="noopener">@drain.buddy</a></li>
        <li><strong>Facebook:</strong> <a href="https://www.facebook.com/people/Drain-Buddy/61551007854737/" target="_blank" rel="noopener">Drain Buddy on Facebook</a></li>
        <li><strong>YouTube:</strong> <a href="https://www.youtube.com/channel/UC3hftsAarfdE1pxsVyHieSw" target="_blank" rel="noopener">Drain Buddy YouTube channel</a></li>
        <li><strong>Phone:</strong> 888-510-4278</li>
        <li><strong>CX email:</strong> <a href="mailto:drainbuddy.cx@inventel.net">drainbuddy.cx@inventel.net</a></li>
        <li><strong>CX intake (web form):</strong> contact form at <a href="https://www.drainstrain.com/pages/contact-us" target="_blank" rel="noopener">drainstrain.com/pages/contact-us</a></li>
        <li><strong>Wholesale/distribution:</strong> drainbuddy@inventel.net</li>
        <li><strong>Internal partnership/Inventel:</strong> drainbuddy@inventel.net</li>
      </ul>

      <div class="alert-callout">
        <span class="alert-callout-title">📌 Channel handles · TikTok and Pinterest still unclaimed</span>
        <p>Drain Buddy's <strong>Instagram (@drain.buddy), Facebook (/people/Drain-Buddy/), and YouTube channel</strong> are confirmed and live — link freely from email signatures, paid creative, footer, and partner briefs. <strong>TikTok and Pinterest are not yet locked</strong> for the brand; confirm with the Brand Lead and the Inventel Social team before claiming a handle. Don't assume "@drainbuddy" is ours on those platforms — some may be unclaimed or held by squatters.</p>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · The basket-pop is the single best clip</span>
        <p>If Marketing only ships one organic clip per quarter, make it the <strong>basket pop-out moment</strong> — slow-motion, real bathroom, soft lighting, 6–10 seconds. It's the satisfying-cleaning-content format TikTok and IG Reels reward, it shows what the product actually does, and it's reusable as B-roll across paid, email, PDP, and B2B. Build a library of these in 4–5 finish/lighting variations and the brand has organic momentum for a year.</p>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · No close-up clog content</span>
        <p>Avoid the temptation to shoot the disgusting "before" — extreme close-ups of hair clumps, drain gunk, biohazard imagery. It performs short-term on TikTok shock-content, but it tanks brand equity and gets us reported on Meta. <strong>The clean basket pop-out is the satisfying moment</strong>; the gross "before" is a separate creative sub-genre we deliberately don't compete in.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 15 · PARTNERSHIPS & INFLUENCER GUIDELINES                         -->
<!-- ================================================================ -->
<section id="partnerships">
  <div class="card collapsible" data-section="partnerships">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">15 · Partnerships</span>
        <h2>Partnerships &amp; Influencer Guidelines</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Drain Buddy's growth in 2026 leans heavily on creator partnerships in the home, cleaning, and renovation niches. The right partner can move 200+ units in a single satisfying-content video; the wrong one can produce content that looks like the gross-out shock genre we deliberately stay out of. Use the criteria below.</p>

      <h3>Ideal partner profile</h3>
      <ul>
        <li><strong>Niche fit:</strong> home maintenance, cleaning satisfaction, renter hacks, bathroom renovation, parenting/household, or property-management content</li>
        <li><strong>Active on at least one of:</strong> TikTok, Instagram, YouTube, or Pinterest with a household-engaged audience &gt;10K</li>
        <li><strong>Voice fit:</strong> earnest, demonstrative, doesn't oversell. Will happily film install + basket-pop without melodrama.</li>
        <li><strong>Audience fit:</strong> homeowners, renters, parents — not pure shock-content audiences</li>
        <li><strong>Disclosure-clean:</strong> properly tags partnerships per FTC guidelines, no past disclosure controversies</li>
      </ul>

      <h3>Heritage &amp; founder partnerships</h3>
      <ul>
        <li><strong>Naushad Ali</strong> — original Drain Strain inventor, 2015 Shark Tank pitch (S8E12). Available for select PR moments and founder-voice content; the heritage anchor for the brand. Coordinate through Inventel.</li>
        <li><strong>Yasir Abdul</strong> (CEO of InvenTel TV) — operational lead on the brand under Inventel. Available for B2B/wholesale conversations and high-context media (e.g., Authority Magazine-style founder profiles).</li>
      </ul>

      <h3>Do's &amp; Don'ts for partner content</h3>
      <div class="do-dont">
        <div class="do">
          <h4>Do</h4>
          <ul>
            <li>Show the install in real time, in a real bathroom — push, twist, done</li>
            <li>Show the basket pop-out at week 4–6 (the satisfying moment)</li>
            <li>Let the creator use their own voice — script the talking points, not the words</li>
            <li>Disclose the partnership clearly (#ad, #partner, "paid partnership with Drain Buddy")</li>
            <li>Specify which Drain Buddy (sink vs tub) clearly in copy and link</li>
            <li>Reference Shark Tank heritage if the creator brings it up naturally</li>
          </ul>
        </div>
        <div class="dont">
          <h4>Don't</h4>
          <ul>
            <li>Allow gross-out / horror-show "before" content — it's off-brand and tanks Meta delivery</li>
            <li>Partner with creators whose audience isn't household-relevant (gaming, finance, sports)</li>
            <li>Allow uncleared performance claims ("guaranteed never to clog again")</li>
            <li>Skip FTC disclosure — even a single missed #ad is a regulatory headache</li>
            <li>Compare to specific named competitors (TubShroom, etc.) in partner content</li>
            <li>Use partner content beyond the rights window (usually 90 days unless otherwise negotiated)</li>
          </ul>
        </div>
      </div>

      <div class="alert-callout">
        <span class="alert-callout-title">⚖️ FTC disclosure note</span>
        <p>All paid, gifted, or otherwise compensated partnerships <strong>must</strong> include FTC-compliant disclosure — typically <em>"#ad"</em>, <em>"#sponsored"</em>, or <em>"paid partnership with Drain Buddy"</em> at the top of the post or in the first three seconds of video. The disclosure can't be buried under a "more" tag. Marketing/Partnerships owns the brief; the creator owns the post; Inventel Legal can review on request before publishing for high-profile partnerships.</p>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · The 6-week test</span>
        <p>Before signing a long-term partnership, ship the candidate a unit and ask them to film: <strong>(1)</strong> the install on day one, <strong>(2)</strong> the first basket pop-out at week 4–6. If they actually use it and the basket-pop video is on-brand (no shock-content framing, real bathroom, satisfying not gross), they're a great long-term partner. If the basket video never materializes, no contract will fix that.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 16 · DISCOUNTS & PROMO CODES                                      -->
<!-- ================================================================ -->
<section id="discounts">
  <div class="card collapsible" data-section="discounts">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">16 · Discounts</span>
        <h2>Discounts &amp; Promo Codes</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <div class="alert-callout critical">
        <span class="alert-callout-title">⛔ Always check the monthly discount sheet first</span>
        <p>The <strong>monthly discount sheet</strong> is the single source of truth for every active code, sale, and bundle across all Inventel brands including Drain Buddy. <strong>Don't honor codes from memory.</strong> Don't honor codes a customer "swears was on the site last week." If it's not on the sheet, it's not active. The sheet is updated by Marketing on the first business day of every month and posted in the internal PM tool plus the #discounts Slack channel.</p>
      </div>

      <h3>Discount formats</h3>
      <table>
        <thead><tr><th>Format</th><th>How it works</th><th>Where it shows up</th></tr></thead>
        <tbody>
          <tr><td><strong>Promo code</strong></td><td>Customer enters a code at checkout for a % or $ discount</td><td>Email, SMS, partner content, paid ad copy</td></tr>
          <tr><td><strong>Full-site flip</strong></td><td>Sitewide % off with no code required, applied automatically at cart</td><td>Holiday weekends, Black Friday/Cyber Monday, Mother's/Father's Day</td></tr>
          <tr><td><strong>Banner / automatic</strong></td><td>Top-of-site banner with auto-applied discount</td><td>Site-wide, all visitors during the window</td></tr>
          <tr><td><strong>Bundle / cart threshold</strong></td><td>Discount or free shipping unlocks at a spend threshold</td><td>Cart, PDP, free-shipping bar</td></tr>
          <tr><td><strong>Standing on-page sale</strong></td><td><span class="badge badge-accessory">Always-on</span> Hero SKUs typically run at a standing sale price (with a compare-at MSRP shown alongside) — not a flash promo</td><td>PDP price block, listing pages</td></tr>
          <tr><td><strong>New customer discount</strong></td><td><span class="badge badge-accessory">Evergreen</span> One-time % or $ off first order, captured via email signup popup</td><td>Email popup, footer, post-signup confirmation email</td></tr>
        </tbody>
      </table>

      <h3>Standing prices vs. promotional discounts</h3>
      <p>Drain Buddy's hero SKUs (Sink Ultra Flo, Tub Ultra Flo) carry a <strong>standing on-page sale price (with a compare-at MSRP shown alongside)</strong> — not a time-limited promotion. The 6-pack baskets follow the same standing-sale framing. CX should not honor "the higher MSRP was the promo, can I get a discount off the sale price?" — the listed sale price is already the working price. Use the monthly sheet for any further discounting on top of this.</p>

      <h3>Evergreen vs. time-bound</h3>
      <p>The <strong>new-customer first-order discount</strong> is the always-on offer at Drain Buddy — a customer who signs up for email gets a code, period. Drain Buddy is <strong>not currently a subscription product</strong> — the basket 6-pack is a one-time purchase, not auto-ship — so there's no Subscribe &amp; Save discount to honor. Everything else (sitewide sales, holiday flips, bundle thresholds, partner codes) rotates on the monthly discount sheet. Always check the sheet, even for the evergreen new-customer code; the % rate or $ amount can change.</p>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · "Do you have a subscription option?"</span>
        <p>Some customers ask whether the basket refills can auto-ship. The current answer is <strong>no — the 6-pack basket is a one-time purchase</strong>, not a subscription. If a customer mentions wanting auto-replacements, log it as product feedback and route to the Brand Lead. There's a real demand signal here that may turn into a future subscription SKU.</p>
      </div>

      <h3>Ownership</h3>
      <table>
        <thead><tr><th>Channel</th><th>Owns the code rollout</th></tr></thead>
        <tbody>
          <tr><td>Email</td><td>Email/CRM Marketing</td></tr>
          <tr><td>SMS</td><td>Email/CRM Marketing</td></tr>
          <tr><td>Organic social</td><td>Social Marketing</td></tr>
          <tr><td>Paid media</td><td>Performance Marketing</td></tr>
          <tr><td>CX (goodwill / expired-code grace)</td><td>CX Supervisor (with Marketing approval on % off &gt; standard)</td></tr>
          <tr><td>Influencer / Partnerships</td><td>Partnerships team</td></tr>
          <tr><td>Retention / Win-back</td><td>Retention / Lifecycle Marketing</td></tr>
          <tr><td>Retail (Home Depot, Walmart, Ace, Amazon)</td><td>Wholesale / Retail team — retail markdowns are negotiated with the buyer, not run on the DTC sheet</td></tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · The expired-code playbook</span>
        <p>When a customer asks you to honor an <strong>expired</strong> or <strong>incorrect code</strong>: <strong>(1)</strong> Verify on the current monthly discount sheet whether the code was real and when it expired. <strong>(2)</strong> If it expired within the last 7 days and the customer was a reasonable email subscriber, use the <strong>CX goodwill code</strong> (capped, listed on the sheet) at parity — don't make up a new percentage. <strong>(3)</strong> If it never existed or is out of bounds, politely explain the current promotion and offer the new-customer code if they haven't used it. <strong>(4)</strong> Never argue. Always document goodwill code use in the order notes.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · Retail-purchase price match</span>
        <p>If a customer bought from <strong>Home Depot, Walmart, Ace, or Amazon</strong> and asks about price-matching to a DTC sale, the answer is: we don't price-match retail purchases, but the retailer they bought from has their own price-adjustment window (typically 14–30 days). Route them to the retailer's customer service — that's the right path. We can't refund the difference on a unit we didn't sell directly.</p>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · Every code on the sheet before going live</span>
        <p>Before any new promo code, sitewide flip, or partner discount goes live in the wild — email, SMS, paid ad, influencer link, retailer co-marketing — it must be on the <strong>monthly discount sheet first</strong>. The sheet is the single contract between Marketing and CX: if the code's on the sheet, CX honors it; if it's not on the sheet, CX has license to politely decline. Skipping the sheet creates the "I told the customer the wrong thing" tickets that cost the team trust and goodwill codes both. Sheet first, send second.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">👋 New Hire · Get the sheet link in week 1</span>
        <p>Ask your manager or post in the <strong>#discounts</strong> Slack channel for the link to the monthly discount sheet on day one or two. Bookmark it. Not having the sheet open while you're handling a code question is the #1 cause of "I told the customer the wrong thing" tickets in the first month.</p>
      </div>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 17 · SEO STRATEGY                                                 -->
<!-- ================================================================ -->
<section id="seo">
  <div class="card collapsible" data-section="seo">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">17 · SEO</span>
        <h2>SEO Strategy</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>SEO is the cheapest traffic Drain Buddy will ever buy — earned visits compound month over month, don't disappear when paid budgets get cut, and tend to convert at higher rates because the visitor came in with intent. The trade-off is that SEO is slow. Don't expect a new piece of content to rank in week one; expect it in month three to six.</p>

      <h3>Priority keyword themes</h3>
      <ol>
        <li><strong>"Hair catcher" / "drain hair catcher" / "shower hair catcher"</strong> — high-intent commercial keywords. Customers shopping for the category. Protect with strong PDP, comparison content, and category pages.</li>
        <li><strong>"Drain stopper" / "bathroom sink stopper" / "tub drain stopper"</strong> — the second core commercial cluster. Slightly different intent (stopping vs catching) but heavy crossover.</li>
        <li><strong>"How to unclog a drain" / "how to clean a sink drain"</strong> — informational, top of funnel. Long-form blog content that captures DIY-leaning searchers and converts them to "or just buy this."</li>
        <li><strong>"TubShroom alternative" / "TubShroom vs"</strong> — direct-competitor comparison searches. Customers actively comparing — high conversion. Cover with comparison content, never disparaging.</li>
        <li><strong>"Best hair catcher for long hair"</strong> — long-tail, persona-aligned. Captures Lauren-persona searches.</li>
        <li><strong>"Matte black drain stopper" / "oil rubbed bronze sink stopper"</strong> — finish-led long-tail. High conversion, low competition. The renovation-buyer audience.</li>
        <li><strong>"Drain Strain Shark Tank" / "drain stopper as seen on TV"</strong> — heritage and brand-name keywords. Decays slowly; protect the SERP for branded searches.</li>
      </ol>

      <h3>Team ownership</h3>
      <table>
        <thead><tr><th>SEO asset</th><th>Owned by</th></tr></thead>
        <tbody>
          <tr><td>Product page copy &amp; meta</td><td>Brand + Marketing</td></tr>
          <tr><td>Blog content (guides, "how-to" articles)</td><td>Marketing / Content</td></tr>
          <tr><td>Meta titles &amp; descriptions across the site</td><td>Marketing / Web Dev</td></tr>
          <tr><td>Image alt text</td><td>Creative (at file delivery) + Web Dev (at upload)</td></tr>
          <tr><td>Schema markup (Product, FAQ, Review)</td><td>Web Dev</td></tr>
          <tr><td>Site speed &amp; Core Web Vitals</td><td>Web Dev</td></tr>
          <tr><td>Backlinks (PR, partner content, home/reno media)</td><td>Marketing / Partnerships</td></tr>
          <tr><td>Review volume &amp; freshness</td><td>CX (post-purchase ask) + Marketing (review platform setup)</td></tr>
          <tr><td>Amazon listing SEO (separate ecosystem)</td><td>Marketplace / Amazon Marketing</td></tr>
        </tbody>
      </table>

      <h3>Do's &amp; Don'ts</h3>
      <div class="do-dont">
        <div class="do">
          <h4>Do</h4>
          <ul>
            <li>Write for homeowners and renters first, search engines second — clarity wins both</li>
            <li>Use specific terms (1.25" bathroom sink drain, twist-to-lock, Ultra Flo basket)</li>
            <li>Build internal links from blog content to PDPs naturally</li>
            <li>Compress and properly name every image (alt text + descriptive filename)</li>
            <li>Build backlinks from real home/reno media, plumbing pros, property-manager blogs</li>
            <li>Track Google Search Console weekly; act on impression spikes</li>
            <li>Cover the sink-vs-tub distinction inside every relevant piece of content</li>
          </ul>
        </div>
        <div class="dont">
          <h4>Don't</h4>
          <ul>
            <li>Keyword-stuff PDPs — Google's been past that since 2014</li>
            <li>Buy backlinks or run any "SEO package" from outside vendors without approval</li>
            <li>Duplicate content across pages (especially when copying PDP into category pages)</li>
            <li>Rely on Google to figure out poorly-named images (drain-buddy-matte-black-tub.jpg, not IMG_4823.jpg)</li>
            <li>Chase every keyword — pick a few themes and own them</li>
            <li>Skip schema markup; it's the easiest free win in this category</li>
            <li>Use "as seen on TV" in title tags — we are not currently on TV and the phrase tanks credibility</li>
          </ul>
        </div>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · Ladder content to a theme</span>
        <p>Every blog post, every PR placement, every guide page should ladder back to one of the priority keyword themes above. <strong>If a piece of content doesn't have a clear keyword theme, it shouldn't exist.</strong> "Five tips for a clean bathroom" has no theme; "How to fix a hair-clogged sink drain (without calling a plumber)" has a theme, a clear path to the PDP, and matches a real high-volume search.</p>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · Asset names are SEO</span>
        <p>When you deliver a final image to the web team, name the file something Google can read — <code>drain-buddy-ultra-flo-matte-black-bathroom-sink.jpg</code>, not <code>final-final-v3.jpg</code>. Include alt text in your handoff doc so it doesn't get auto-generated as "image." Compress images before delivery (WebP, &lt;150KB for hero, &lt;50KB for inline) so the page loads fast — Core Web Vitals affects ranking directly.</p>
      </div>

      <h3>Tracking &amp; tools</h3>
      <ul>
        <li><strong>Google Search Console</strong> — primary source of truth for what we rank for and what gets clicked</li>
        <li><strong>Ahrefs or Semrush</strong> — competitive and backlink tracking</li>
        <li><strong>Amazon Brand Analytics</strong> — separate ecosystem, but the search-term data is gold for ranking improvement on listings</li>
        <li><strong>Monthly review</strong> owned by Marketing: top 20 ranking keywords, top 10 page-by-page performance, three biggest opportunities for next month</li>
      </ul>

    </div>
  </div>
</section>

<!-- ================================================================ -->
<!-- 18 · CONVERSION RATE OPTIMIZATION                                 -->
<!-- ================================================================ -->
<section id="cro">
  <div class="card collapsible" data-section="cro">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">18 · CRO</span>
        <h2>Conversion Rate Optimization</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Converting the traffic we already have is cheaper than buying more. A 0.5-point lift in conversion rate compounds across every dollar of paid spend. CRO is everyone's job, but most of the wins on Drain Buddy come from a small set of pages: home, the two hero PDPs (sink and tub), the basket-refill PDP, cart, and checkout.</p>

      <h3>The 6-stage funnel</h3>
      <table>
        <thead><tr><th>Stage</th><th>What the customer is asking</th><th>What we need to answer</th></tr></thead>
        <tbody>
          <tr><td><strong>1 · Landing</strong></td><td>"Is this what I'm looking for?"</td><td>Hero clarity — what is it, who is it for, why trust it. In 3 seconds, no scroll required.</td></tr>
          <tr><td><strong>2 · PDP</strong></td><td>"Will it fit? Does it actually work?"</td><td>Drain-size specs (1.25" sink), install demo video, basket-pop GIF, real-bathroom photos in all 4 sink finishes, reviews count above the fold.</td></tr>
          <tr><td><strong>3 · Add to cart</strong></td><td>"Sink or tub? Should I add baskets too?"</td><td>Sink/tub clearly differentiated, basket cross-sell with explicit "fits the SINK" or "fits the TUB" labeling, return policy snippet.</td></tr>
          <tr><td><strong>4 · Cart</strong></td><td>"Did I miss a discount? Free shipping?"</td><td>Free-shipping progress bar, evergreen new-customer code visible (if not yet applied), no surprise charges.</td></tr>
          <tr><td><strong>5 · Checkout</strong></td><td>"Is this safe and fast?"</td><td>Few form fields, multiple payment methods (Apple Pay, Shop Pay, Google Pay), trust signals, no surprise shipping costs.</td></tr>
          <tr><td><strong>6 · Post-purchase</strong></td><td>"When does it ship? How do I install it?"</td><td>Confirmation page with install link, transactional email within 5 min, shipping email within 24 hr, install reminder 1 day before delivery.</td></tr>
        </tbody>
      </table>

      <h3>High-impact CRO levers</h3>
      <ul>
        <li><strong>Hero clarity above the fold</strong> — does the visitor know what Drain Buddy is and why it matters in 3 seconds without scrolling?</li>
        <li><strong>Install demo on PDP</strong> — the product is visual; a 15-second push-twist-done demo does more than 500 words of copy.</li>
        <li><strong>Sink-vs-tub clarity</strong> — the single biggest source of refunds is wrong-product purchases. A clear "Sink (1.25" drain)" vs "Tub" toggle on the PDP and a "which one do I need?" mini-page would prevent meaningful return volume.</li>
        <li><strong>Basket cross-sell with explicit fitment</strong> — "Replacement baskets for THIS Drain Buddy" — not just "replacement baskets." The current baskets-mismatch return is half a CRO problem and half a copy problem.</li>
        <li><strong>Social proof placement</strong> — review count + star rating visible above the fold (1,400+ reviews on the hero SKU is the trust anchor).</li>
        <li><strong>Finish lineup carousel</strong> — show all 4 sink finishes in real bathrooms, not on a white background. Renovation-buyer conversion comes from being able to imagine the product in their room.</li>
        <li><strong>Free-shipping messaging</strong> — threshold visible in nav, on PDP, and in cart with a progress bar (confirm current threshold with CX/Brand before publishing).</li>
        <li><strong>FAQ on PDP</strong> — Drain Buddy customers ask the same 6–8 questions before buying (will it fit, does it slow drainage, is it permanent). Answering inline beats forcing them to navigate to /faq.</li>
        <li><strong>Cart abandonment recovery</strong> — email + SMS flow for abandoned carts. Industry standard recovery rate is 10–15%; we should hit that minimum.</li>
        <li><strong>Mobile optimization</strong> — &gt;70% of household-goods traffic is mobile. Test mobile-first; desktop is the bonus.</li>
      </ul>

      <h3>How to run a CRO test</h3>
      <ol>
        <li><strong>Form a hypothesis.</strong> Not "let's try a new image." Instead: <em>"Adding a 'fits 1.25" sink drain' badge above the Add-to-Cart button will lift PDP conversion by 6–10% because it answers the 'will it fit?' objection without requiring a scroll."</em></li>
        <li><strong>Change one variable.</strong> Multi-variable tests are unreadable — you'll never know what worked.</li>
        <li><strong>Calculate sample size before launching.</strong> Most tests need at least 1,000+ conversions per variant for statistical significance.</li>
        <li><strong>Run a full week minimum.</strong> Weekday/weekend traffic differs.</li>
        <li><strong>Track downstream metrics.</strong> A button that gets more clicks but doesn't convert at checkout is a worse button. Watch all the way to "first basket refill order at day 90."</li>
        <li><strong>Document the result.</strong> Win, lose, or no-effect — write up what you tested, what happened, and what you learned. This is how the team gets smarter.</li>
      </ol>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · The wrong-basket return is a CRO problem</span>
        <p>Customer Service flagged the basket-pack mismatch (sink baskets bought for tub Drain Buddy) as the highest-volume return driver. That's not a CX problem to absorb — it's a CRO problem on the PDP and the baskets listing. A clear "fits the SINK Drain Buddy ONLY" badge above the Add-to-Cart on the basket page would cut these returns in half. Easiest CRO win in the brand right now.</p>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · Above the fold has 3 seconds</span>
        <p>The hero on every Drain Buddy page — home, PDP, landing — needs to answer three questions in three seconds, no scroll: <strong>What is this? Will it fit my drain? Why trust it?</strong> If a visitor has to scroll to figure out we're a hair-catcher drain stopper that fits a 1.25" sink, the page is failing the basic CRO test before any other lever even matters.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">👋 New Hire · Watch 10 mobile session recordings</span>
        <p>Before your first CRO meeting, ask the Web Dev or Marketing team for access to session-recording software (Hotjar, Microsoft Clarity, or similar) and watch 10 real mobile sessions on drainstrain.com. You'll see exactly where customers get confused (almost always at the sink-vs-tub decision), where they bounce, and what they tap. Nothing in a slide deck teaches you faster.</p>
      </div>

      <h3>Metrics to watch</h3>
      <ul>
        <li><strong>Conversion rate</strong> (sessions → orders) — primary KPI, owned by Marketing/Growth</li>
        <li><strong>Average order value (AOV)</strong> — basket-attach rate is the lever; pulling AOV up via baskets-with-stopper bundles is the highest-leverage growth move</li>
        <li><strong>Cart abandonment rate</strong> — review weekly; recovery flow performance reviewed monthly</li>
        <li><strong>Mobile conversion rate</strong> — tracked separately; the bigger lever</li>
        <li><strong>Return rate by reason</strong> — wrong product (sink vs tub) is the #1 root cause; a falling number here proves CRO/copy fixes are working</li>
        <li><strong>Day-90 refill rate</strong> — % of stopper buyers who buy a basket pack within 90 days. This is the LTV anchor — if it's flat, the lifecycle email is broken.</li>
      </ul>

    </div>
  </div>
</section>

<!-- 19 · GLOSSARY -->
<section id="glossary">
  <div class="card collapsible" data-section="glossary">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">19 · Glossary</span>
        <h2>Drain Buddy Glossary &amp; Acronyms</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>The terms you'll hear most often around Drain Buddy — internally, in CX calls, on retailer paperwork, and in marketing briefs. If you've heard a term used three different ways in three different meetings, this is the place to settle it.</p>

      <div class="glossary">
        <dl>
          <dt>Drain Strain®</dt>
          <dd>The legal entity, the URL (drainstrain.com), and the historical brand name that came out of the 2015 Shark Tank pitch. Still appears on the site header and in legal copy. Internally we mostly say "Drain Buddy" because that's what's on the shelf.</dd>

          <dt>Drain Buddy</dt>
          <dd>The consumer-facing product line and brand name on packaging, retail-shelf labels, and current marketing. Same brand as Drain Strain — just the name that customers, retailers, and our team use day-to-day.</dd>

          <dt>Ultra Flo</dt>
          <dd>The flagship product family inside Drain Buddy — the 2-in-1 stopper-and-hair-catcher line for sinks and tubs. When someone says "the Ultra Flo," they almost always mean the bathroom sink unit.</dd>

          <dt>The basket</dt>
          <dd>The removable hair-catcher cylinder that sits below the cap. The basket is the only consumable in the system; customers either rinse it or swap it for a fresh one from the 6-pack.</dd>

          <dt>The cap</dt>
          <dd>The polished metal stopper at the top — the part the customer sees. Ships in four metal finishes for the sink unit (Brushed Nickel, Oil Rubbed Bronze, Chrome, Matte Black) and four for the tub. The sink also has a chrome plastic-cap value variant as a separate, lower-priced SKU.</dd>

          <dt>Push/push (push-pop, click-clack)</dt>
          <dd>A drain-stopper mechanism that pops up when you push it down and pops closed when you push it again — common in newer construction and hotels. <em>Drain Buddy does not currently fit push/push drains.</em> The first diagnostic question on a "doesn't fit" call.</dd>

          <dt>Drop-in</dt>
          <dd>The install method. The whole product gets dropped into the existing drain — no tools, no disassembly, no replumbing on most household drains.</dd>

          <dt>1.25" drain</dt>
          <dd>The standard US bathroom-sink drain opening size. Drain Buddy Ultra Flo for Sinks fits this size. Tub drains are larger and use the tub-specific SKU.</dd>

          <dt>The 6-pack</dt>
          <dd>Replacement basket 6-pack — a low-cost reorder SKU for customers who'd rather swap baskets than rinse them. Sink-only; the tub product uses a different basket size.</dd>

          <dt>DTC</dt>
          <dd>Direct-to-consumer — drainstrain.com sales. Distinct from retail sales (Home Depot, Ace, Walmart) and Amazon sales, both of which have different return paths.</dd>

          <dt>The retail footprint</dt>
          <dd>Shorthand for our brick-and-mortar partners: <strong>Home Depot, Ace Hardware, Walmart</strong>. Plus Amazon for e-commerce non-DTC. Plus the hotel B2B channel (Holiday Inn Express, Hampton Inn, La Quinta).</dd>

          <dt>Inventel</dt>
          <dd>The parent company that acquired the Drain Strain brand in <strong>2023</strong>. Operates fulfillment, CX, marketing, and retailer relationships from the New Jersey warehouse.</dd>

          <dt>Disrupt by Design, LLC</dt>
          <dd>The original Drain Strain entity founded by Naushad Ali. Subject of the Shark Tank deal. Predates the Inventel acquisition.</dd>

          <dt>Naushad Ali</dt>
          <dd>The brand's founder and inventor. Pitched on Shark Tank S6E17 (Feb 3, 2015). Closed a deal with Robert Herjavec; Kevin Harrington joined the team after.</dd>

          <dt>The Shark Tank story</dt>
          <dd>Internal shorthand for the credibility narrative — pitched on Shark Tank, deal with Robert Herjavec, became a real retail brand. Used for first-time customer trust-building and PR. Avoid using it as the only proof point; pair with current retail presence.</dd>

          <dt>The plumber math</dt>
          <dd>The marketing angle that compares the $15 cost of Drain Buddy to the $200+ cost of an avoided plumber visit. The highest-converting angle for the homeowner-over-40 audience.</dd>

          <dt>The basket-pull moment</dt>
          <dd>The visual beat of pulling the basket out, looking at the trapped hair, and tapping it into the trash. The "wow" moment in nearly every winning ad creative.</dd>

          <dt>Sink-vs-tub mismatch</dt>
          <dd>The most common return reason: a customer orders the sink Ultra Flo when they meant the tub one (or vice versa), or buys sink replacement baskets for a tub unit. Addressed via clearer PDP labeling + CX exchange-not-refund handling.</dd>

          <dt>"Where did you buy it?"</dt>
          <dd>The first diagnostic question on every CX call. Routes the customer to the right return path (DTC, Amazon, Home Depot, Ace, or Walmart) before any other policy gets quoted.</dd>

          <dt>Wholesale / B2B</dt>
          <dd>Bulk orders for property management, hotel maintenance, and contractor accounts. Goes through <a href="https://www.drainstrain.com/pages/buy-in-bulk" target="_blank" rel="noopener">drainstrain.com/pages/buy-in-bulk</a> or directly via <em>drainbuddy@inventel.net</em>.</dd>

          <dt>Hotel B2B</dt>
          <dd>The hotel-supply portion of the wholesale channel. Active accounts include Holiday Inn Express, Hampton Inn, and La Quinta. Lives at <a href="https://www.drainstrain.com/pages/hotels-motels" target="_blank" rel="noopener">drainstrain.com/pages/hotels-motels</a>.</dd>

          <dt>drainbuddy.cx@inventel.net</dt>
          <dd><strong>Customer Service email.</strong> The published CX inbox for customer-facing questions: refunds, returns, product fit, replacement basket help, install support. Pair with the 888-510-4278 phone line and the on-site contact form as the three ways customers reach CX.</dd>

          <dt>drainbuddy@inventel.net</dt>
          <dd><strong>Partnerships only — not CX.</strong> The address (without the .cx) is for wholesale, retail, and hotel-supply inquiries. Customers asking about returns or product issues belong on <a href="mailto:drainbuddy.cx@inventel.net">drainbuddy.cx@inventel.net</a>, the <a href="https://www.drainstrain.com/pages/contact-us" target="_blank" rel="noopener">contact form</a>, or 888-510-4278 — never route a CX issue to the partnerships inbox.</dd>

          <dt>The hub</dt>
          <dd>This document. The single source of truth for the brand, used by CX, Creative, Marketing, Brand, Web, and new hires. If you find a contradiction between the hub and another doc, the hub wins until the Brand Lead says otherwise.</dd>
        </dl>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">👋 New Hire · The 10 terms that matter most in your first week</span>
        <p>If you remember <strong>Drain Strain®, Drain Buddy, Ultra Flo, the basket, push/push, the 1.25" drain, drop-in, the retail footprint, "where did you buy it?", and the Inventel-2023 acquisition</strong> — you'll understand 90% of internal conversations in your first month. The rest you'll pick up by reading the policy and CX sections of this hub when they come up.</p>
      </div>

    </div>
  </div>
</section>

<!-- 20 · RETURN POLICY -->
<section id="returns">
  <div class="card collapsible" data-section="returns">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">20 · Return Policy</span>
        <h2>Returns &amp; Refunds</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>This is the section of the hub that's most different from every other Inventel brand. Because Drain Buddy is sold across <strong>five distinct channels</strong> — DTC, Amazon, Home Depot, Ace, and Walmart — there are five different return paths, and CX has to know which one to point a customer to before quoting any policy.</p>

      <div class="alert-callout critical">
        <span class="alert-callout-title">⚠️ Critical · The Drain Buddy CX rule</span>
        <p>Before you say a single word about a refund, exchange, or warranty: <strong>ask "Where did you buy it?"</strong> The right answer to that question routes the entire rest of the call. Quoting our DTC policy to a Home Depot customer creates an angry customer with two retailers' policies in their head. It's the #1 avoidable CX mistake on this brand.</p>
      </div>

      <h3>The five return paths at a glance</h3>
      <table>
        <thead><tr><th>Where they bought it</th><th>Return path</th><th>Time window</th><th>Who refunds</th></tr></thead>
        <tbody>
          <tr><td><strong>drainstrain.com (DTC)</strong></td><td>We process the return — refund or replacement</td><td>30 days from delivery</td><td>Inventel via Shopify</td></tr>
          <tr><td><strong>Amazon</strong></td><td>Through the customer's Amazon account → "Return or replace items"</td><td>Per Amazon's standard policy (typically 30 days)</td><td>Amazon, then reconciled with us</td></tr>
          <tr><td><strong>Home Depot (in-store or online)</strong></td><td>Bring to any Home Depot location with receipt</td><td>Per Home Depot's policy (typically 90 days)</td><td>Home Depot directly</td></tr>
          <tr><td><strong>Ace Hardware</strong></td><td>Bring to the original Ace store with receipt</td><td>Per individual store / Ace policy</td><td>Ace store directly</td></tr>
          <tr><td><strong>Walmart (in-store or online)</strong></td><td>Walmart store or Walmart.com return process</td><td>Per Walmart's standard policy (typically 90 days)</td><td>Walmart directly</td></tr>
        </tbody>
      </table>

      <h3>Path 1 · drainstrain.com (DTC) returns — what we control</h3>
      <div class="policy-card">
        <h3>Eligibility window</h3>
        <p>Refunds are accepted within <strong>30 days from the delivery date</strong> for unopened or defective product. Used product is handled case-by-case — see "Used product" below.</p>

        <h3>What's eligible</h3>
        <ul>
          <li><strong>Unopened product</strong> — full refund within 30 days, customer pays return shipping unless the order was wrong on our side.</li>
          <li><strong>Defective product</strong> — full refund or free replacement, even if opened. Photo evidence speeds up the process; we don't always require the unit back.</li>
          <li><strong>Wrong product shipped</strong> — fully on us. Free replacement, no return required for the original. Don't make the customer ship back our mistake.</li>
          <li><strong>Doesn't fit (push/push or unusual drain)</strong> — full refund within window. This is on us for not catching it pre-purchase; treat as a wrong-product situation.</li>
        </ul>

        <h3>Used product</h3>
        <p>Drain Buddy is a hardware product that touches drain water once installed. We <strong>don't restock used product</strong> for resale. If a customer wants to return a used unit (not defective, just "didn't like it"), the right move is usually a partial refund or store credit; CX has discretion up to the unit price. Don't ask the customer to ship back a used drain stopper.</p>

        <h3>How to process a DTC return</h3>
        <ol>
          <li>Verify the order in Shopify by email or order number.</li>
          <li>Confirm the delivery date is within the 30-day window (for non-defective returns).</li>
          <li>If they're returning unopened: issue a return label, refund on receipt of return.</li>
          <li>If they're reporting a defect: ask for a photo, refund or replace at your discretion.</li>
          <li>If wrong product was shipped or the unit doesn't fit: refund or replace immediately, no return needed.</li>
          <li>Document the reason in the order notes — this feeds the return-rate report and the CRO team's wrong-SKU work.</li>
        </ol>
      </div>

      <h3>Path 2 · Amazon returns — what they control</h3>
      <div class="policy-card warning">
        <p>Amazon-purchased Drain Buddy goes through <strong>Amazon's return system, not ours</strong>. The customer should:</p>
        <ol>
          <li>Open Amazon → "Your Orders" → find the Drain Buddy order → "Return or replace items."</li>
          <li>Select a reason and follow Amazon's prompts. Amazon issues the refund.</li>
        </ol>
        <p>If the customer calls us about an Amazon return: walk them through the Amazon path. <strong>Don't refund them out of Shopify</strong> — we'll get double-charged when Amazon also refunds them.</p>
        <p>Exception: if the customer is reporting a real defect or safety issue and Amazon won't help, escalate to the CX Lead. We can sometimes ship a replacement out of our warehouse as a goodwill gesture; that's a Lead-approval call, not a default action.</p>
      </div>

      <h3>Paths 3, 4, 5 · Home Depot, Ace, and Walmart returns — they handle it</h3>
      <div class="policy-card warning">
        <p>For all three big-box retailers, the customer's <strong>fastest path to a refund is the original retailer, not us</strong>. Each retailer has its own policy and timeline, and they handle our product the same way they handle any other vendor's product on their shelf.</p>

        <p><strong>The script:</strong> <em>"Because that was a Home Depot purchase, the fastest way to get your refund is to bring it back to any Home Depot location with the receipt — they handle returns of our product directly, and you'll typically get the refund the same day. If you have a defect or warranty question that goes beyond a refund, I can absolutely help with that here."</em></p>

        <p>Same script logic for Ace and Walmart — substitute the retailer name. <strong>Don't promise a same-day refund</strong> on our end for a retail purchase; we don't process those.</p>

        <p>If the customer doesn't have the receipt or is past the retailer's window: we can sometimes help with a defect-only resolution at our discretion. Escalate to the CX Lead for anything beyond standard receipt-and-window cases.</p>
      </div>

      <h3>Special cases</h3>
      <div class="policy-card">
        <h4>Sink-vs-tub mismatch (the #1 return reason)</h4>
        <p>Customer ordered the sink Ultra Flo when they meant the tub (or vice versa), or bought the sink replacement basket 6-pack for a tub unit. <strong>Default to exchange, not refund.</strong> Ship the correct product, let them keep the wrong one (or send a label if it's clean and unopened). The cost of the exchange is far less than the cost of losing the customer to a refund.</p>

        <h4>Pre-Inventel (pre-2023) orders</h4>
        <p>If a customer has an order from before the Inventel acquisition and is still within a reasonable warranty window for a defect, we generally honor it as a goodwill gesture. The customer doesn't care about the corporate history; they just want a working drain stopper. Use CX-Lead discretion for anything older than 12 months.</p>

        <h4>Gift returns (Gina-the-gift-giver scenario)</h4>
        <p>"My mother bought me one and it doesn't fit." If we shipped it (DTC), exchange it for the right SKU using the original order — no proof of gift required. If it came from Amazon or retail, walk them through that retailer's gift-return process.</p>

        <h4>Bulk / wholesale returns</h4>
        <p>B2B orders (hotels, property managers, contractors) are handled separately — defects only, case-by-case, with the partner team copied. Don't process a bulk return out of standard CX without looping in <em>drainbuddy@inventel.net</em> first.</p>
      </div>

      <div class="policy-contact">
        <strong>Customer-facing contact:</strong>
        Phone: <a href="tel:8885104278">888-510-4278</a> · 
        Email: <a href="mailto:drainbuddy.cx@inventel.net">drainbuddy.cx@inventel.net</a> · 
        <a href="https://www.drainstrain.com/pages/contact-us" target="_blank" rel="noopener">Contact form</a><br>
        <em>Note: <a href="mailto:drainbuddy@inventel.net">drainbuddy@inventel.net</a> (without the .cx) is partnerships only — never route a customer there.</em>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · Two-line opening on every return call</span>
        <p>Line 1: <em>"Happy to help. Where did you buy your Drain Buddy?"</em><br>
        Line 2: <em>"Got it — and is this for a refund, an exchange, or a defect?"</em><br>
        With those two lines you've routed the call correctly 95% of the time and you can quote the right policy with confidence. <strong>Get those two questions in before you quote a single number.</strong></p>
      </div>

    </div>
  </div>
</section>

<!-- 21 · FULFILLMENT & SHIPPING -->
<section id="fulfillment">
  <div class="card collapsible" data-section="fulfillment">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">21 · Fulfillment &amp; Shipping</span>
        <h2>How Drain Buddy Gets to the Customer</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>All Drain Buddy DTC and B2B orders ship from a single Inventel warehouse in New Jersey. Amazon orders go through Amazon FBA. Retail orders (Home Depot, Ace, Walmart) ship from us into each retailer's distribution centers. Most CX shipping calls are about DTC orders out of the warehouse below.</p>

      <h3>Inventel warehouse</h3>
      <div class="address-block">
        <span class="addr-label">DTC + B2B Fulfillment</span>
        <strong>Inventel Warehouse</strong><br>
        240 West Parkway, Middle Door<br>
        Pompton Plains, NJ 07444<br>
        <em style="font-style:italic;color:var(--db-slate-muted)">Operations: Mon–Fri · Returns ship back to this same address</em>
      </div>

      <h3>The 5-step DTC flow</h3>
      <ol>
        <li><strong>Order placed</strong> on drainstrain.com — Shopify confirmation email goes out within ~2 minutes.</li>
        <li><strong>Label printed</strong> by the warehouse — there's a short cancellation window between placement and label print. Once the label is printed, cancellation gets harder (carrier intercept may be required).</li>
        <li><strong>Warehouse picks, packs, and ships</strong> — typically 1 business day for orders placed before noon ET; next business day otherwise.</li>
        <li><strong>3–7 business days transit</strong> via standard ground in the continental US — varies by region (table below).</li>
        <li><strong>Returns ship back to the same Pompton Plains address</strong> — included on the packing slip or sent on request via the contact form.</li>
      </ol>

      <h3>Shipping table</h3>
      <table>
        <thead><tr><th>Service</th><th>Region</th><th>Transit</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Ground standard</td><td>Lower 48</td><td>3–7 business days</td><td>Free-shipping threshold may be active sitewide or above an order value — confirm with the homepage banner before quoting.</td></tr>
          <tr><td>Ground · East Coast</td><td>NJ, NY, PA, CT, MA, MD, VA, NC…</td><td>2–3 business days</td><td>Proximity to NJ warehouse — fastest region.</td></tr>
          <tr><td>Ground · Midwest</td><td>IL, OH, MI, MN…</td><td>3–4 business days</td><td>—</td></tr>
          <tr><td>Ground · West Coast</td><td>CA, OR, WA, NV, AZ</td><td>4–6 business days</td><td>—</td></tr>
          <tr><td>AK / HI / PR / territories</td><td>Non-contiguous</td><td>Not supported by default</td><td><strong>Escalate to the CX Fulfillment Supervisor</strong> for case-by-case quotes.</td></tr>
          <tr><td>International</td><td>Outside US</td><td>Not supported</td><td>For non-US customers, point to the country's Amazon listing if one exists.</td></tr>
        </tbody>
      </table>

      <h3>Amazon, retail, and B2B paths</h3>
      <ul>
        <li><strong>Amazon FBA</strong> — we ship inventory to Amazon's warehouses; Amazon picks, packs, and ships to end customers. Customer shipping issues go through Amazon, not us.</li>
        <li><strong>Retail (Home Depot, Ace, Walmart)</strong> — we ship cases/pallets into each retailer's distribution centers. Customer takes possession at the store. No customer shipping involved.</li>
        <li><strong>B2B / wholesale</strong> — bulk orders ship from the same Pompton Plains warehouse via freight carrier (typically 5–10 business days), bulk-cased without retail packaging unless retail-ready is specified. Tracking goes through the partner team's account manager, not Shopify automated emails. Contact: <a href="https://www.drainstrain.com/pages/buy-in-bulk" target="_blank" rel="noopener">drainstrain.com/pages/buy-in-bulk</a> · Hotels: <a href="https://www.drainstrain.com/pages/hotels-motels" target="_blank" rel="noopener">drainstrain.com/pages/hotels-motels</a> · Email: <a href="mailto:drainbuddy@inventel.net">drainbuddy@inventel.net</a>.</li>
      </ul>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · The "where's my order" call</span>
        <p>Most "where's my order" calls resolve in under 60 seconds: <strong>(1)</strong> get the order number or email, <strong>(2)</strong> open Shopify, <strong>(3)</strong> read the tracking status to the customer in plain English, <strong>(4)</strong> if it's actually past the promise window with no movement in 7+ business days, ship a replacement at no charge and file the carrier claim — don't make the customer wait for the claim to resolve. <em>You</em> read the status, <em>you</em> tell them what's happening, <em>you</em> own the resolution.</p>
      </div>

    </div>
  </div>
</section>

<!-- 22 · TEST ORDERS -->
<section id="testorders">
  <div class="card collapsible" data-section="testorders">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">22 · Test Orders</span>
        <h2>How to Place a Test Order</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Test orders are how Marketing, Web, CX, and Brand sanity-check the checkout flow, the order confirmation email, the shipping label, the post-purchase email series, and any new SKU or variant. The Inventel-wide rule for placing one is dead simple — and breaking it costs the team real money in product that ships to a customer who didn't actually order it.</p>

      <div class="alert-callout critical">
        <span class="alert-callout-title">⛔ Critical · The single rule for every test order</span>
        <p><strong>YOU MUST type "Test Order" in the First Name field.</strong> Every team follows this rule with zero exceptions. The warehouse pick team filters by First Name = "Test Order" before pulling product to ship. Skip this and a real Drain Buddy unit gets boxed and shipped to whatever address you used — and the test "order" becomes a real cost.</p>
      </div>

      <h3>The 7-step procedure</h3>
      <ol>
        <li><strong>First Name = <code>Test Order</code></strong> — exactly that, with the space, in the First Name field at checkout. This is the warehouse's filter.</li>
        <li><strong>Last Name = your name</strong> — so the Ops/CX team knows whose test it is when they see it in Shopify.</li>
        <li><strong>Shipping address = the Inventel office</strong>, not the warehouse, not your home:
          <div class="address-block" style="margin-top:8px">
            <span class="addr-label">Test-Order Shipping Address</span>
            <strong>Inventel</strong><br>
            200 Forge Way, Unit 1<br>
            Rockaway, NJ 07866
          </div>
        </li>
        <li><strong>Use any valid payment method</strong> — a real card is fine; the order will be cancelled before it charges.</li>
        <li><strong>Notify the CX Fulfillment Lead immediately on Google Chat</strong> — within minutes of placing the order. Don't wait until the end of the day.</li>
        <li><strong>Include in the chat message:</strong> the Shopify order #, what specifically was being tested (new SKU, new variant, a flow change, a discount code, etc.), and when it can safely be cancelled.</li>
        <li><strong>Wait for confirmation</strong> from the CX Fulfillment Lead before considering the test complete. The order is only "tested" once it's been verified, cancelled, and refunded — not when you placed it.</li>
      </ol>

      <h3>What to verify in a test order</h3>
      <ul>
        <li>Correct product, correct quantity, correct finish/variant displayed in cart and on the confirmation email.</li>
        <li>Free-shipping threshold rendering correctly (free vs. paid based on order value).</li>
        <li>Discount codes applying to the right line items at the right percentage.</li>
        <li>Confirmation email lands in inbox within ~2 minutes of order placement, with the right product images and the right price.</li>
        <li>Order tagged correctly in Shopify (First Name = "Test Order" makes it instantly filterable).</li>
        <li>For new SKU launches: shipping rate calculates correctly, weight is right, and the order routes to the correct fulfillment workflow.</li>
      </ul>

      <h3>What NOT to do</h3>
      <ul>
        <li>Don't put your real name in the First Name field. The warehouse filter is on that field exactly.</li>
        <li>Don't ship a test order to your home or to the Pompton Plains warehouse — use the Rockaway office address above.</li>
        <li>Don't run paid-ad conversion tests against test orders without flagging the Growth team — fake conversions corrupt attribution data.</li>
        <li>Don't leave a test order sitting un-cancelled overnight. If you placed it and walked away, the warehouse may pull it the next morning before your "Test Order" tag gets caught.</li>
        <li>Don't skip the Google Chat ping to the CX Fulfillment Lead, even if the order is small. The notification is what closes the loop.</li>
      </ul>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · If you spot a real "Test Order" in the live queue</span>
        <p>If you're working a CX shift and you see an order with First Name = "Test Order" that the Ops Lead hasn't flagged yet, ping the CX Fulfillment Lead on Google Chat with the order number. <strong>Don't refund or cancel it yourself</strong> — the team running the test may need it to stay open until they verify a downstream behavior (post-purchase email, abandoned cart trigger, etc.). Your job is the heads-up, not the action.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">👋 New Hire · Run one test order in your first week</span>
        <p>Spend 20 minutes placing a real test order following all 7 steps — a sink Ultra Flo with a basket 6-pack add-on is the standard practice cart. <strong>First Name = "Test Order", Last Name = your name, ship to Rockaway, ping the CX Fulfillment Lead on Google Chat.</strong> Walk through every step the customer walks through. Notice every friction point. That single exercise teaches you Shopify, the warehouse filter rule, and the test-order escalation channel — three things you'll use for the rest of your time on this brand.</p>
      </div>

    </div>
  </div>
</section>

<!-- 23 · SHOPIFY PLATFORM -->
<section id="shopify">
  <div class="card collapsible" data-section="shopify">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">23 · Shopify Platform</span>
        <h2>The drainstrain.com Tech Stack</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>drainstrain.com runs on <strong>Shopify</strong> — the same platform that powers most other Inventel brands. That gives the team a familiar dashboard, predictable feature set, and a known integration surface for email, SMS, paid-ad pixels, reviews, and analytics. This section covers what's in the stack, who owns each piece, and where to file a bug or request.</p>

      <h3>Core platform</h3>
      <table>
        <thead><tr><th>Layer</th><th>Tool</th><th>What it does</th><th>Owner</th></tr></thead>
        <tbody>
          <tr><td>Storefront</td><td>Shopify (theme: customized)</td><td>The drainstrain.com site customers see — homepage, PDPs, cart, checkout</td><td>Web team</td></tr>
          <tr><td>Checkout</td><td>Shopify Checkout</td><td>Cart, payment, shipping selection, order confirmation</td><td>Web team / Shopify-hosted</td></tr>
          <tr><td>Order management</td><td>Shopify Admin</td><td>Order lookup, refunds, manual orders, shipping label generation, inventory tracking</td><td>CX + Ops</td></tr>
          <tr><td>Inventory</td><td>Shopify Inventory + warehouse system</td><td>Stock counts, reorder thresholds, syncs with NJ warehouse</td><td>Ops</td></tr>
          <tr><td>Customer accounts</td><td>Shopify Customer Accounts</td><td>Order history, reorder, address management</td><td>Web team</td></tr>
        </tbody>
      </table>

      <h3>Key integrations</h3>
      <p>The exact app stack changes over time as the team optimizes — confirm any specific app name with the Web Lead before quoting it externally. The functional categories are consistent:</p>
      <table>
        <thead><tr><th>Function</th><th>Typical app type</th><th>What it does for Drain Buddy</th><th>Owner</th></tr></thead>
        <tbody>
          <tr><td>Reviews</td><td>Reviews app (Yotpo, Judge.me, or similar)</td><td>Powers the 1,456+ / 1,518+ review counts on the flagship SKUs; review request emails post-purchase</td><td>Marketing / Web</td></tr>
          <tr><td>Email + SMS</td><td>Klaviyo or comparable</td><td>Welcome flow, abandoned cart, post-purchase, basket-replacement reminder series</td><td>Marketing</td></tr>
          <tr><td>Paid-ad pixels</td><td>Meta, Google, TikTok, Pinterest pixels</td><td>Conversion tracking for paid social and search; attribution reporting</td><td>Growth / Marketing</td></tr>
          <tr><td>Analytics</td><td>Shopify Analytics + Google Analytics 4</td><td>Conversion rate, AOV, traffic sources, funnel drop-offs</td><td>Marketing / Growth</td></tr>
          <tr><td>Session recording</td><td>Hotjar, Microsoft Clarity, or similar</td><td>Mobile session replay for CRO insights — the "watch real users" tool</td><td>Web / CRO</td></tr>
          <tr><td>Shipping labels</td><td>Shopify Shipping (built-in)</td><td>Label generation for DTC orders out of the NJ warehouse</td><td>Ops</td></tr>
          <tr><td>Subscriptions</td><td>Subscription app (if active)</td><td>Auto-ship for replacement basket 6-pack — <em>confirm with Web Lead whether currently live</em></td><td>Marketing / Web</td></tr>
        </tbody>
      </table>

      <h3>Where to file requests</h3>
      <div class="policy-card">
        <ul>
          <li><strong>Bug on the live site</strong> (broken page, checkout error, image missing) → Web team via the team's standard ticket channel. Include the URL, the device/browser, and a screenshot.</li>
          <li><strong>Inventory mismatch</strong> (Shopify says in stock but warehouse doesn't have it) → Ops Lead. Time-sensitive — affects fulfillment promises.</li>
          <li><strong>Refund or order edit beyond CX permissions</strong> → CX Lead.</li>
          <li><strong>Email or SMS flow change</strong> (new flow, copy update, send-time tweak) → Marketing — file a brief, don't make changes directly without sign-off.</li>
          <li><strong>New SKU launch / new variant</strong> (e.g., a new finish, a new bundle) → Brand Lead → Web team. Coordinate with Ops on inventory and packaging.</li>
          <li><strong>Pixel or analytics issue</strong> (conversions not tracking, attribution off) → Growth team. These are easy to misdiagnose — get the Growth team's read before changing anything.</li>
        </ul>
      </div>

      <h3>Key Shopify URLs (drainstrain.com)</h3>
      <p>Standard Shopify paths every CX agent should know — these are the same path patterns used on every Inventel-brand storefront, just with the brand domain swapped in:</p>
      <table>
        <thead><tr><th>Path</th><th>What it is</th><th>When CX uses it</th></tr></thead>
        <tbody>
          <tr><td><a href="https://www.drainstrain.com/account" target="_blank" rel="noopener">/account</a></td><td>Customer account dashboard — order history, addresses, reorder</td><td>"How do I see my orders?" / reorder requests</td></tr>
          <tr><td><a href="https://www.drainstrain.com/account/login" target="_blank" rel="noopener">/account/login</a></td><td>Customer login page</td><td>Customer can't access their account — point them here, never handle their password</td></tr>
          <tr><td><a href="https://www.drainstrain.com/collections/all" target="_blank" rel="noopener">/collections/all</a></td><td>The full Drain Buddy catalog (every active SKU)</td><td>Customer wants to see "everything you sell"</td></tr>
          <tr><td>/policies/refund-policy</td><td>Published refund policy</td><td>When quoting return policy — link the customer to the canonical version</td></tr>
          <tr><td>/policies/shipping-policy</td><td>Published shipping policy</td><td>Shipping-time and free-shipping-threshold disputes</td></tr>
          <tr><td>/policies/privacy-policy</td><td>Privacy policy</td><td>Customer requests about data, GDPR/CCPA</td></tr>
          <tr><td>/policies/terms-of-service</td><td>Site terms of service</td><td>Rare — escalate any legal-flavored question to Legal/Compliance</td></tr>
        </tbody>
      </table>

      <div class="alert-callout">
        <span class="alert-callout-title">🔒 Security · CX never handles passwords or payment info</span>
        <p>If a customer asks for help logging in, <strong>send them to <a href="https://www.drainstrain.com/account/login" target="_blank" rel="noopener">/account/login</a></strong> and point them to the "Forgot password?" link. Never ask for a password, never ask for full credit card numbers, never ask for CVVs. CX has the access we need through Shopify Admin to look up orders by email or order number — that's all we need.</p>
      </div>

      <h3>When to escalate (Shopify-specific)</h3>
      <ul>
        <li><strong>Site is down</strong> or returning errors site-wide → Web team immediately, plus a heads-up to CX Lead so the rest of the team can deflect new tickets.</li>
        <li><strong>Discount code says "expired" or "invalid"</strong> when the customer should be able to use it → Marketing (the code may have been mis-configured) — verify against the monthly discount sheet first.</li>
        <li><strong>Subscription won't cancel</strong> from the customer's account → Web team (subscription app issue) and Marketing (lifecycle owner). <em>Note: Drain Buddy is not currently a subscription product, so this should be rare.</em></li>
        <li><strong>Missing confirmation email</strong> after order placement (more than 30 minutes) → Web team. Common causes: customer email typo, spam folder, or Klaviyo flow issue.</li>
        <li><strong>Refund not appearing on customer's card after 10 business days</strong> → CX Lead, then Ops if Lead can't resolve. Past 10 days, it's almost always a bank-side timing issue but worth a paper trail.</li>
      </ul>

      <h3>What CX needs to know about the platform</h3>
      <ul>
        <li>You can search orders by <strong>email, name, order number, or last 4 of card</strong> — the email is the fastest in 95% of cases.</li>
        <li>You can <strong>edit a customer's shipping address</strong> within Shopify <em>before</em> the label is generated. After the label is generated, contact the carrier directly or wait for the package to come back as undeliverable.</li>
        <li>You can <strong>issue partial refunds</strong> for shipping-only or per-line-item — useful for "the basket pack didn't fit but I'm keeping the stopper" scenarios.</li>
        <li>You can <strong>add a note to any order</strong> visible to the rest of CX. Use this for repeat-customer context, gift-flag situations, or wholesale-overlap warnings.</li>
      </ul>

      <div class="team-callout newhire">
        <span class="team-tag">👋 New Hire · Three-day Shopify ramp</span>
        <p>Day 1: read this section + spend an hour clicking around Shopify Admin in read-only mode. Day 2: shadow a CX Lead through 5 real customer calls in the Shopify dashboard. Day 3: process your first 3 returns or refunds with a Lead reviewing each one before submission. <strong>By the end of week one you'll be Shopify-fluent enough to handle 80% of CX calls without help.</strong></p>
      </div>

    </div>
  </div>
</section>

<!-- 24 · FAQ -->
<section id="faq">
  <div class="card collapsible" data-section="faq">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">24 · FAQ</span>
        <h2>Frequently Asked Questions</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>The questions Drain Buddy customers actually ask — pulled from CX call logs, Amazon Q&amp;A, and the inbox. Use this as the source of truth for the FAQ on drainstrain.com, on retailer SKU pages, and as the answer template when CX, Marketing, or new hires get the same question for the third time in a row.</p>

      <div class="faq-list">

        <h3>Will Drain Buddy fit my sink?</h3>
        <p>The flagship sink Ultra Flo fits a <strong>standard 1.25" wide bathroom sink drain</strong>, which is the size in over 90% of US households. The simplest test: your existing drain stopper either lifts out, twists out, or is held in by a rod under the sink. If yours is none of those — specifically, if you push it down and it pops back up by itself — that's a push/push (push-pop) drain, and Drain Buddy doesn't currently fit that style. The kitchen and tub products use different sizes and SKUs.</p>

        <h3>Will Drain Buddy fit my tub?</h3>
        <p>The tub Ultra Flo fits standard US bathtub drains. Same caveat as the sink: it doesn't fit push/push tub drains. If your tub stopper pops up and down by being pressed, that's push/push and we don't currently fit it.</p>

        <h3>What's a push/push drain and how do I know if I have one?</h3>
        <p>A push/push (also called push-pop or click-clack) drain has a stopper that pops up when you press it down, and pops closed when you press it again. Common in newer construction and hotel renovations. To check: press your existing stopper down. If it stays down on its own and you have to pull or twist to open it — you have a standard drain and Drain Buddy fits. If it pops back up on its own — you have a push/push and Drain Buddy doesn't fit.</p>

        <h3>How do I install Drain Buddy?</h3>
        <p>Pull out your existing drain stopper (most lift right out; some twist counterclockwise). Drop the Drain Buddy unit into the drain in its place. Done. There's no second step. No tools, no plumber, no removing anything below the sink.</p>

        <h3>Will it slow down how my sink drains?</h3>
        <p>The Ultra Flo basket is engineered specifically to keep water moving while still catching hair and debris. Most customers report no perceptible drain-speed change. If your sink is draining slowly with Drain Buddy installed, the most common cause is a basket that needs emptying — pull, tap, drop back in.</p>

        <h3>How often do I need to clean it?</h3>
        <p>Depends entirely on hair volume in your household. Heavy households (multiple long-haired residents) empty the basket monthly. Light households go 6–12 months between cleanings. The rule of thumb: clean it before you notice it's slowing the drain.</p>

        <h3>How do I clean the basket?</h3>
        <p>Pull the unit out by twisting the stem counterclockwise and lifting. The basket either rinses (warm water, into the trash) or — if you'd rather not deal with wet hair — pops out and gets replaced with a fresh one from the 6-pack. Drop the cleaned or fresh unit back in. Total time: under a minute.</p>

        <h3>What's the difference between Drain Strain and Drain Buddy?</h3>
        <p>Same brand, two names. <strong>Drain Strain®</strong> is the legal entity, the URL (drainstrain.com), and the original Shark Tank brand from 2015. <strong>Drain Buddy</strong> is the consumer-facing product line — what's on the packaging, on the retail shelves at Home Depot/Ace/Walmart, and in current marketing. Inventel acquired the brand in 2023 and operates it under both names.</p>

        <h3>Was this on Shark Tank?</h3>
        <p>Yes — inventor <strong>Naushad Ali</strong> pitched on Shark Tank Season 6, Episode 17 (Feb 3, 2015) and walked out with a deal from <strong>Robert Herjavec</strong>. <strong>Kevin Harrington</strong> joined the team after the episode aired. The original Drain Strain brand grew from that pitch into the Drain Buddy product line we ship today.</p>

        <h3>Is the brand still active? I heard the original company had financial trouble.</h3>
        <p>Yes, fully active. The original Drain Strain entity (Disrupt by Design, LLC) faced financial difficulty several years after the Shark Tank deal. <strong>Inventel acquired the brand in 2023</strong>, and now operates fulfillment, customer support, marketing, and the retail relationships from a New Jersey warehouse. Current orders, warranties, and CX support are all real and staffed.</p>

        <h3>Where can I buy Drain Buddy?</h3>
        <p>drainstrain.com (DTC), Amazon, Home Depot (in-store and online), Ace Hardware, and Walmart. We're also stocked in select hotels (Holiday Inn Express, Hampton Inn, La Quinta) for B2B/property-management buyers via the wholesale channel.</p>

        <h3>What finishes does it come in?</h3>
        <p>The bathroom sink Ultra Flo Deluxe comes in four metal finishes: Brushed Nickel, Oil Rubbed Bronze, Chrome, and Matte Black — all of which include a spare replacement basket. There is also a Chrome plastic-cap value variant sold as a separate, lower-priced SKU (which does not include the spare basket). The bathtub Ultra Flo comes in four finishes: Brushed Nickel, Oil Rubbed Bronze, Chrome, and Matte Black. Pick the finish that matches your faucet and other bathroom hardware.</p>

        <h3>How long does the unit last?</h3>
        <p>The cap and stem last indefinitely under normal use — they're solid hardware, not a consumable. The basket inside is the only consumable, and it lasts months to years depending on usage before needing a rinse or replacement. Most customers replace the basket once a year and never replace the unit itself.</p>

        <h3>Can I use Drain Buddy with a garbage disposal?</h3>
        <p>The current Drain Buddy lineup is designed for bathroom sinks and bathtubs — not for kitchen sinks with a disposal. For kitchen drains, the Kitchen Sink Super Strainer is the right product when it's in stock. Don't use the bathroom Ultra Flo on a kitchen sink with a disposal.</p>

        <h3>Do you ship internationally?</h3>
        <p>drainstrain.com ships within the continental US. For international customers, check whether Drain Buddy is listed on your country's Amazon — international Amazon listings exist for some markets.</p>

        <h3>I bought it at Home Depot — can I return it to you?</h3>
        <p>The fastest refund path for a Home Depot purchase is back to any Home Depot location with the receipt. Same for Ace and Walmart purchases — return to the original retailer with the receipt. We can still help with defects or warranty questions on those products, but for refunds, the retailer is your fastest path.</p>

        <h3>How do I contact customer service?</h3>
        <p>Three ways: phone <a href="tel:8885104278">888-510-4278</a> (Mon–Fri), email <a href="mailto:drainbuddy.cx@inventel.net">drainbuddy.cx@inventel.net</a>, or use the <a href="https://www.drainstrain.com/pages/contact-us" target="_blank" rel="noopener">contact form on drainstrain.com</a>. <em>Note: <a href="mailto:drainbuddy@inventel.net">drainbuddy@inventel.net</a> (without the .cx) is for partnership and wholesale inquiries only — for refunds, returns, or product questions, use one of the three customer-facing channels above.</em></p>

        <h3>Do you offer bulk pricing for property managers, hotels, or contractors?</h3>
        <p>Yes — we have an active wholesale and hotel-supply program. Holiday Inn Express, Hampton Inn, and La Quinta are existing accounts. Start at <a href="https://www.drainstrain.com/pages/buy-in-bulk" target="_blank" rel="noopener">drainstrain.com/pages/buy-in-bulk</a> or for hotels specifically, <a href="https://www.drainstrain.com/pages/hotels-motels" target="_blank" rel="noopener">drainstrain.com/pages/hotels-motels</a>.</p>

      </div>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · The PDP-FAQ accordion is the highest-leverage content lift</span>
        <p>The single biggest CRO move on the Drain Buddy PDP is putting an FAQ accordion <em>directly on the product page</em>, with the top 6 questions visible by default: fit, install, push/push, drain speed, basket cleaning, and Shark Tank/brand history. Customers who scroll through the FAQ on the PDP convert at noticeably higher rates than customers who don't — answering the question removes the consideration friction in the same place the buy decision happens.</p>
      </div>

    </div>
  </div>
</section>

<!-- 25 · RESOURCES & CONTACTS -->
<section id="resources">
  <div class="card collapsible" data-section="resources">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">25 · Resources &amp; Contacts</span>
        <h2>Where to Find Everything</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Bookmark this section. Every link, page, and key contact for Drain Buddy / Drain Strain lives here. If you find something missing, add it — this section is meant to grow.</p>

      <h3>Customer-facing channels</h3>
      <div class="address-block">
        <span class="addr-label">Phone (CX)</span>
        <strong><a href="tel:8885104278">888-510-4278</a></strong> · Monday–Friday business hours<br>
        <span class="addr-label" style="margin-top:10px">Customer Service email</span>
        <a href="mailto:drainbuddy.cx@inventel.net">drainbuddy.cx@inventel.net</a> — for refunds, returns, product questions, replacement basket help<br>
        <span class="addr-label" style="margin-top:10px">Contact form</span>
        <a href="https://www.drainstrain.com/pages/contact-us" target="_blank" rel="noopener">drainstrain.com/pages/contact-us</a><br>
        <span class="addr-label" style="margin-top:10px">Partnerships inbox (separate from CX)</span>
        <a href="mailto:drainbuddy@inventel.net">drainbuddy@inventel.net</a> — wholesale, retail, hotel-supply inquiries only
      </div>

      <h3>Drain Buddy on the web</h3>
      <div class="resource-grid">
        <a href="https://www.drainstrain.com/" target="_blank" rel="noopener" class="resource-card">
          <div class="resource-card-tag">DTC · OWNED</div>
          <div class="resource-card-name">drainstrain.com</div>
          <div class="resource-card-desc">The brand homepage and DTC store. Shopify-powered. The single source of truth for current SKUs, pricing, and stock.</div>
        </a>
        <a href="https://www.drainstrain.com/pages/contact-us" target="_blank" rel="noopener" class="resource-card">
          <div class="resource-card-tag">CX · CUSTOMER FACING</div>
          <div class="resource-card-name">Contact Us page</div>
          <div class="resource-card-desc">Customer contact form. The first place to point a customer who doesn't want to call.</div>
        </a>
        <a href="https://www.drainstrain.com/pages/in-retail-stores" target="_blank" rel="noopener" class="resource-card">
          <div class="resource-card-tag">RETAIL · WHERE TO BUY</div>
          <div class="resource-card-name">"In Retail Stores" page</div>
          <div class="resource-card-desc">Lists current retail-shelf availability. Useful link for customers asking "where can I buy this in person?"</div>
        </a>
        <a href="https://www.drainstrain.com/pages/buy-in-bulk" target="_blank" rel="noopener" class="resource-card">
          <div class="resource-card-tag">B2B · WHOLESALE</div>
          <div class="resource-card-name">Buy in Bulk</div>
          <div class="resource-card-desc">Wholesale and bulk-order landing page. Where Mike-the-property-manager starts.</div>
        </a>
        <a href="https://www.drainstrain.com/pages/hotels-motels" target="_blank" rel="noopener" class="resource-card">
          <div class="resource-card-tag">B2B · HOTELS</div>
          <div class="resource-card-name">Hotels &amp; Motels page</div>
          <div class="resource-card-desc">Hotel-supply specific landing page. Holiday Inn Express, Hampton Inn, La Quinta are active accounts.</div>
        </a>
      </div>

      <h3>Retail partner pages</h3>
      <div class="resource-grid">
        <a href="https://www.homedepot.com/b/Plumbing-Plumbing-Parts-Drain-Parts-Sink-Strainers/DRAIN-BUDDY/N-5yc1vZc6ahZtxo" target="_blank" rel="noopener" class="resource-card">
          <div class="resource-card-tag">RETAIL · BIG BOX</div>
          <div class="resource-card-name">Home Depot — Drain Buddy</div>
          <div class="resource-card-desc">The Home Depot brand page. Customer's fastest path to in-store purchase or online order with store pickup.</div>
        </a>
        <a href="https://www.amazon.com/Drain-Installation-Preventing-Bathroom-Strainer/dp/B07W5PNSFW" target="_blank" rel="noopener" class="resource-card">
          <div class="resource-card-tag">E-COMMERCE</div>
          <div class="resource-card-name">Amazon — Drain Buddy</div>
          <div class="resource-card-desc">The flagship Amazon listing. High-volume channel; Amazon-fulfilled (FBA).</div>
        </a>
        <div class="resource-card" style="cursor:default">
          <div class="resource-card-tag">RETAIL · BIG BOX</div>
          <div class="resource-card-name">Walmart</div>
          <div class="resource-card-desc">Drain Buddy is stocked at Walmart in-store and on walmart.com. Search "Drain Buddy" or "Drain Strain" to find current SKUs.</div>
        </div>
        <div class="resource-card" style="cursor:default">
          <div class="resource-card-tag">RETAIL · HARDWARE</div>
          <div class="resource-card-name">Ace Hardware</div>
          <div class="resource-card-desc">Drain Buddy is stocked at participating Ace Hardware locations. Availability varies by store.</div>
        </div>
      </div>

      <h3>Press &amp; founder story</h3>
      <ul>
        <li><strong>Shark Tank S6E17</strong> — Feb 3, 2015 — Naushad Ali pitches Drain Strain. Deal closed with Robert Herjavec; Kevin Harrington joined after.</li>
        <li><strong>Original company:</strong> Disrupt by Design, LLC — the founder's company, predates the 2023 Inventel acquisition.</li>
        <li><strong>Inventor:</strong> Naushad Ali — referenced in older press as the Drain Strain inventor.</li>
        <li><strong>2023 acquisition</strong> — Inventel acquired the Drain Strain brand and product line. Now operates the brand under both Drain Strain (legal) and Drain Buddy (consumer-facing) names.</li>
      </ul>

      <h3>Internal contacts (request from the team)</h3>
      <p>The following internal contacts aren't published in the hub by name — request the current owner from Slack or your manager:</p>
      <ul>
        <li><strong>Brand Lead</strong> — owner of voice, positioning, retailer relationships. Final word on naming, packaging, and brand-tone questions.</li>
        <li><strong>CX Lead</strong> — escalations beyond standard refund/return permissions; multi-retailer special cases; pre-Inventel order goodwill calls.</li>
        <li><strong>Marketing Lead</strong> — paid social, email/SMS, influencer briefs, holiday calendar, retailer co-marketing.</li>
        <li><strong>Web Lead</strong> — drainstrain.com bugs, Shopify configuration, app-stack changes, pixel/analytics issues.</li>
        <li><strong>Ops Lead</strong> — NJ warehouse, fulfillment timing, inventory reconciliation, retailer DC shipments.</li>
        <li><strong>Growth Lead</strong> — paid acquisition, attribution, conversion tracking, Amazon Sponsored Products.</li>
        <li><strong>Partner Lead</strong> — wholesale, hotel B2B, contractor accounts, retailer chain relationships.</li>
      </ul>

      <div class="team-callout newhire">
        <span class="team-tag">👋 New Hire · The five links to bookmark today</span>
        <p>Bookmark these five right now: <strong>(1)</strong> drainstrain.com (the homepage — see what customers see), <strong>(2)</strong> the Home Depot brand page (so you can quickly verify retail SKUs), <strong>(3)</strong> the Amazon listing (so you can spot-check what Amazon customers see), <strong>(4)</strong> the Buy in Bulk page (the B2B funnel), and <strong>(5)</strong> this hub. With those five links and the CX phone number memorized, you can answer 80% of any-team questions on day one.</p>
      </div>

    </div>
  </div>
</section>

<!-- 26 · KNOWLEDGE CHECK QUIZ -->
<section id="quiz">
  <div class="card collapsible" data-section="quiz">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">26 · Knowledge Check Quiz</span>
        <h2>Prove It · 30 Questions · 70% to Pass</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <div id="quiz-intro">
        <p>Read everything above first. Then take this quiz to confirm you've internalized what matters most for handling Drain Buddy customer interactions and brand decisions. <strong>Pass: 21 of 30 correct (70%).</strong> One question at a time, immediate feedback, correct answers shown when you miss. You can retake as many times as you need — no penalty.</p>
        <p>When you pass, you'll be able to enter your name and title, then print or save a certificate to send to your HR onboarding trainer as proof of completion.</p>
        <button class="quiz-start-btn" onclick="initQuiz()">Start the quiz →</button>
      </div>

      <div id="quiz-container" class="quiz-container" style="display:none">
        <!-- Quiz content rendered by JS -->
      </div>

    </div>
  </div>
</section>

<script>
/* ================ NAV / TOC / SECTION TOGGLE ================ */
function toggleSection(headerEl){
  const card = headerEl.closest('.collapsible');
  if(!card) return;
  card.classList.toggle('collapsed');
}
function openDrawer(){
  document.getElementById('toc-drawer').classList.add('open');
  document.getElementById('toc-drawer-overlay').classList.add('open');
  document.body.style.overflow='hidden';
}
function closeDrawer(){
  document.getElementById('toc-drawer').classList.remove('open');
  document.getElementById('toc-drawer-overlay').classList.remove('open');
  document.body.style.overflow='';
}
document.addEventListener('keydown',e=>{
  if(e.key==='Escape'){
    closeDrawer();
    const sr = document.getElementById('search-results');
    if(sr) sr.classList.remove('open');
  }
  if(e.key==='/' && document.activeElement.tagName!=='INPUT' && document.activeElement.tagName!=='TEXTAREA'){
    e.preventDefault();
    document.getElementById('hub-search').focus();
  }
});

/* ================ SEARCH ================ */
const SEARCH_INDEX = [
  {id:'hero', title:'Brand Hub Home', group:'Top'},
  {id:'overview', title:'01 · Brand Overview', group:'Foundation', keywords:'drain buddy drain strain shark tank robert herjavec naushad ali inventel 2023 acquisition retail home depot ace walmart amazon hotel'},
  {id:'products', title:'02 · Product Line', group:'Foundation', keywords:'ultra flo sink tub bathtub bathroom 1.25 inch finish brushed nickel oil rubbed bronze chrome matte black basket replacement 6-pack kitchen super strainer silicone push n pop'},
  {id:'mission', title:'03 · Vision, Mission & Pillars', group:'Foundation', keywords:'vision mission pillars drop-in catches looks belongs pays itself available retail'},
  {id:'voice', title:'04 · Brand Voice & Tone', group:'Foundation', keywords:'voice tone practical friendly confident wryly funny specific helpful tagline drop it in no plumber drain strain naming'},
  {id:'personality', title:'05 · Personality & Adjectives', group:'Foundation', keywords:'personality adjectives everyperson magician archetype neighbor flannel handy'},
  {id:'visual', title:'06 · Visual Identity', group:'Foundation', keywords:'visual identity color palette hydro splash brass mist navy aqua yellow typography bebas neue fraunces inter dm mono logo photography'},
  {id:'audience', title:'07 · Target Audience & Personas', group:'Strategy', keywords:'audience personas long-hair lauren plumber-avoiding pete maintenance manager mike gift-giver gina renter homeowner property manager'},
  {id:'competitors', title:'08 · Competitors & Positioning', group:'Strategy', keywords:'competitors positioning tubshroom mesh strainer drano liquid plumr kohler moen plumber roto-rooter'},
  {id:'objections', title:'09 · Objection Handling', group:'Strategy', keywords:'objections battlecards refund return doesnt fit push push tubshroom plumber gimmick chapter 11 disrupt by design renter'},
  {id:'journey', title:'10 · Customer Journey', group:'Strategy', keywords:'journey lifecycle trigger search discovery consideration purchase install reorder advocate'},
  {id:'angles', title:'11 · Marketing Angles & Hooks', group:'Strategy', keywords:'angles hooks plumber bill hair reveal shark tank aisle find drop-in b2b math'},
  {id:'creatives', title:'12 · Sample Winning Creatives', group:'Strategy', keywords:'creatives ads patterns problem proof native message contrast emotion through-line'},
  {id:'social', title:'14 · Social Media & Channels', group:'Activation', keywords:'social media instagram tiktok facebook youtube pinterest linkedin'},
  {id:'partnerships', title:'15 · Partnerships & Influencers', group:'Activation', keywords:'partnerships influencers creators retail co-marketing'},
  {id:'discounts', title:'16 · Discounts & Promo Codes', group:'Activation', keywords:'discounts promo codes welcome bundle sitewide sale'},
  {id:'seo', title:'17 · SEO', group:'Activation', keywords:'seo keywords search engine organic'},
  {id:'cro', title:'18 · CRO', group:'Activation', keywords:'cro conversion rate optimization pdp test sample size mobile'},
  {id:'glossary', title:'19 · Glossary', group:'Operations', keywords:'glossary terms drain strain ultra flo basket cap push push 1.25 dtc retail footprint inventel'},
  {id:'returns', title:'20 · Return Policy', group:'Operations', keywords:'returns refunds where did you buy it home depot amazon ace walmart dtc shopify exchange'},
  {id:'fulfillment', title:'21 · Fulfillment & Shipping', group:'Operations', keywords:'fulfillment shipping warehouse new jersey nj amazon fba retail distribution wholesale b2b international'},
  {id:'testorders', title:'22 · Test Orders', group:'Operations', keywords:'test orders bogus gateway shopify discount code staff verify'},
  {id:'shopify', title:'23 · Shopify Platform', group:'Operations', keywords:'shopify platform tech stack reviews klaviyo pixel analytics hotjar'},
  {id:'faq', title:'24 · FAQ', group:'Operations', keywords:'faq frequently asked questions fit install push push clean basket shark tank international'},
  {id:'resources', title:'25 · Resources & Contacts', group:'Operations', keywords:'resources contacts phone 888 510 4278 contact form drainbuddy cx email inventel partnerships home depot amazon walmart ace'},
  {id:'quiz', title:'26 · Knowledge Check Quiz', group:'Operations', keywords:'quiz knowledge check certificate brand certified test'}
];

function buildSearchSnippet(item, query){
  const q = query.toLowerCase();
  const blob = ((item.title||'') + ' ' + (item.keywords||'')).toLowerCase();
  const idx = blob.indexOf(q);
  if(idx === -1) return item.keywords ? item.keywords.split(' ').slice(0,8).join(' ') : '';
  const start = Math.max(0, idx-30);
  const end = Math.min(blob.length, idx + q.length + 50);
  return (start>0?'…':'') + blob.slice(start,end) + (end<blob.length?'…':'');
}

function runSearch(query){
  const out = document.getElementById('search-results');
  if(!query || query.length < 2){
    out.classList.remove('open');
    out.innerHTML = '';
    return;
  }
  const q = query.toLowerCase();
  const hits = SEARCH_INDEX.filter(it => {
    const blob = ((it.title||'') + ' ' + (it.keywords||'') + ' ' + (it.group||'')).toLowerCase();
    return blob.includes(q);
  });
  if(hits.length === 0){
    out.innerHTML = '<div class="search-empty">No matches. Try fewer or simpler words — or browse via the menu.</div>';
    out.classList.add('open');
    return;
  }
  // Group by section
  const groups = {};
  hits.forEach(h => {
    const g = h.group || 'Other';
    if(!groups[g]) groups[g] = [];
    groups[g].push(h);
  });
  let html = '';
  Object.keys(groups).forEach(g => {
    html += '<div class="search-group"><div class="search-group-label">' + g + '</div>';
    groups[g].forEach(h => {
      html += '<a class="search-result" href="#'+h.id+'" onclick="flashSection(\''+h.id+'\')">';
      html += '<div>'+h.title+'</div>';
      const snip = buildSearchSnippet(h, query);
      if(snip) html += '<div class="search-result-snippet">'+snip+'</div>';
      html += '</a>';
    });
    html += '</div>';
  });
  out.innerHTML = html;
  out.classList.add('open');
}

function flashSection(id){
  const out = document.getElementById('search-results');
  if(out){ out.classList.remove('open'); }
  const inp = document.getElementById('hub-search');
  if(inp){ inp.value = ''; }
  setTimeout(() => {
    const el = document.getElementById(id);
    if(!el) return;
    // Auto-expand if collapsed
    const card = el.querySelector('.collapsible');
    if(card && card.classList.contains('collapsed')){
      card.classList.remove('collapsed');
    }
    el.classList.add('flash-target');
    setTimeout(() => el.classList.remove('flash-target'), 1900);
  }, 80);
}

document.addEventListener('DOMContentLoaded', () => {
  const inp = document.getElementById('hub-search');
  if(inp){
    inp.addEventListener('input', e => runSearch(e.target.value));
    inp.addEventListener('focus', e => { if(e.target.value) runSearch(e.target.value); });
    document.addEventListener('click', e => {
      if(!e.target.closest('.nav-search-wrap')){
        const out = document.getElementById('search-results');
        if(out) out.classList.remove('open');
      }
    });
  }
  // Quiz initializes on user click (Start the quiz button), not on page load
});

/* ================ QUIZ ================ */
const QUIZ_QUESTIONS = [
  // ---- CX-CRITICAL DIAGNOSTICS ----
  {
    q: "A customer calls saying their Drain Buddy 'doesn't fit.' What's your first diagnostic question?",
    options: [
      "What size is your drain — 1.25 inches or larger?",
      "Does your existing stopper pop up when you push it down, then pop closed when you push it again?",
      "Where did you buy your Drain Buddy?",
      "Is this for a sink or a tub?"
    ],
    correct: 1,
    rationale: "The push/push (push-pop) drain question is the single most common reason a Drain Buddy 'doesn't fit' — and it takes 5 seconds to confirm. Drain Buddy doesn't currently fit push/push drains."
  },
  {
    q: "A customer wants a refund for a Drain Buddy they bought at Home Depot. What's the right move?",
    options: [
      "Process the refund through Shopify out of goodwill.",
      "Tell them returns are not your problem — Home Depot handles their own customers.",
      "Direct them back to any Home Depot location with the receipt — that's their fastest refund path. Offer to help with defects or warranty separately.",
      "Tell them only DTC orders are refundable, period."
    ],
    correct: 2,
    rationale: "Refunds happen at the retailer of purchase. Don't refund a Home Depot order out of Shopify (we'll get double-charged), and don't make the customer feel abandoned — offer real help with defect/warranty separately."
  },
  {
    q: "A customer ordered the bathroom-sink Ultra Flo when they actually needed the bathtub one. What should you do?",
    options: [
      "Refund the order — they have to reorder the right product themselves.",
      "Tell them to figure out the difference and call back with the right SKU.",
      "Default to an exchange.",
      "Send them to Home Depot to pick up the right one in person."
    ],
    correct: 2,
    rationale: "Sink-vs-tub mismatch is the #1 return reason on this brand. Default to exchange, not refund — the cost of an exchange is far less than the cost of losing the customer. Document it because it feeds the CRO/copy work to prevent the next mismatch."
  },

  // ---- BRAND HISTORY & FOUNDER ----
  {
    q: "What year did Inventel acquire the Drain Strain / Drain Buddy brand?",
    options: ["2018","2020","2023","2024"],
    correct: 2,
    rationale: "Inventel acquired the brand in 2023. Important context for the Chapter-11 / 'is the brand still real?' question — anything before 2023 was the original Drain Strain (Disrupt by Design, LLC) era."
  },
  {
    q: "Who is the inventor of Drain Strain / Drain Buddy?",
    options: ["Robert Herjavec","Kevin Harrington","Naushad Ali","An Inventel design team"],
    correct: 2,
    rationale: "Naushad Ali invented the original Drain Strain and pitched it on Shark Tank S6E17 (Feb 3, 2015). Robert Herjavec was the Shark who closed the deal; Kevin Harrington joined the team after."
  },
  {
    q: "Which Shark closed the original Drain Strain deal on Shark Tank?",
    options: ["Mark Cuban","Robert Herjavec","Lori Greiner","Kevin O'Leary"],
    correct: 1,
    rationale: "Robert Herjavec closed the deal on S6E17 (Feb 3, 2015). Kevin Harrington joined the team after the episode aired."
  },
  {
    q: "What's the difference between 'Drain Strain' and 'Drain Buddy'?",
    options: [
      "Drain Strain is the original product; Drain Buddy is a separate, lower-cost knockoff product line.",
      "Drain Strain is the legal entity, URL, and Shark Tank brand. Drain Buddy is the consumer-facing product line — same brand, different name.",
      "Drain Strain is the new name; Drain Buddy is the old name being phased out.",
      "Drain Strain is for kitchens; Drain Buddy is for bathrooms."
    ],
    correct: 1,
    rationale: "Same brand, two names. Drain Strain® is the legal/URL/Shark Tank name. Drain Buddy is what's on the packaging, the retail shelf, and current marketing. Internally we mostly say 'Drain Buddy.'"
  },

  // ---- PRODUCT LINE ----
  {
    q: "How many SKUs does Drain Buddy currently have on drainstrain.com?",
    options: ["3 (all in stock)","5 SKUs (3 in stock, 2 currently sold out)","8","12"],
    correct: 1,
    rationale: "Five active SKUs: sink Ultra Flo, tub Ultra Flo, 6-pack replacement baskets (in stock); plus Kitchen Sink Super Strainer and Silicone 2-Pack (currently sold out — not discontinued)."
  },
  {
    q: "Which Drain Buddy SKU is the 'reorder / evergreen LTV' product?",
    options: [
      "Drain Buddy Ultra Flo for Sinks",
      "Drain Buddy Ultra Flo for Bathtubs",
      "The 6-Pack Replacement Baskets",
      "The Silicone 2-Pack"
    ],
    correct: 2,
    rationale: "The 6-pack baskets are the high-LTV repeat-purchase SKU — Ultra Flo customers come back for them 1–2× per year on average."
  },
  {
    q: "What's the standard sink-drain size that the bathroom Ultra Flo fits?",
    options: ["1.0 inch", "1.25 inches (over 90% of US bathroom sinks)", "1.5 inches", "2.0 inches"],
    correct: 1,
    rationale: "1.25\" is the standard US bathroom sink drain size — over 90% of US households. Plus the push/push exception. Both facts belong in any sizing answer."
  },
  {
    q: "How many METAL finishes does the bathroom-sink Ultra Flo Deluxe come in (the version that includes a spare replacement basket)?",
    options: ["2 finishes","3 finishes","4 finishes","6 finishes"],
    correct: 2,
    rationale: "Four metal finishes — Brushed Nickel, Oil Rubbed Bronze, Chrome, and Matte Black — all of which include a spare replacement basket. There's also a Chrome plastic-cap variant sold as a separate, lower-priced SKU (no spare basket included). The tub Ultra Flo also comes in four finishes."
  },
  {
    q: "A customer asks 'will the 6-pack of replacement baskets fit my Drain Buddy?' — what's the catch?",
    options: [
      "The baskets only fit if the unit is less than 6 months old.",
      "The 6-pack fits the SINK Ultra Flo only — the tub product uses a different basket size. This mismatch is a real return driver.",
      "The 6-pack fits any Drain Buddy unit, no exceptions.",
      "The baskets only fit the chrome finish."
    ],
    correct: 1,
    rationale: "Sink baskets only fit the sink Ultra Flo. Customers buying the 6-pack for a tub unit is a documented return reason — fix is a clearer 'fits the SINK Drain Buddy ONLY' badge above the Add-to-Cart on the basket page."
  },
  {
    q: "A customer asks if Drain Buddy works with their kitchen garbage disposal. What do you say?",
    options: [
      "Yes — it works with all sink configurations.",
      "No — the bathroom Ultra Flo is for bathroom sinks. The Kitchen Sink Super Strainer is the right product for a kitchen sink with a disposal (when in stock).",
      "Only with a specific adapter.",
      "Only the chrome finish works with disposals."
    ],
    correct: 1,
    rationale: "The bathroom Ultra Flo is sized for bathroom sinks (no disposal). The Kitchen Sink Super Strainer is the right SKU for kitchen drains — fits a 3.5\" kitchen drain and works with disposals."
  },

  // ---- RETAIL & DISTRIBUTION ----
  {
    q: "Which retailers does Drain Buddy currently have brick-and-mortar shelf presence in?",
    options: [
      "Home Depot only",
      "Home Depot, Lowe's, and Bed Bath & Beyond",
      "Home Depot, Ace Hardware, and Walmart",
      "Target and CVS"
    ],
    correct: 2,
    rationale: "Home Depot, Ace Hardware, and Walmart are the active brick-and-mortar partners (plus Amazon for e-commerce, plus hotel B2B accounts like Holiday Inn Express, Hampton Inn, La Quinta)."
  },
  {
    q: "Which hotel chains are existing Drain Buddy B2B accounts?",
    options: [
      "Marriott, Hilton, Hyatt",
      "Holiday Inn Express, Hampton Inn, La Quinta",
      "Four Seasons, Ritz-Carlton",
      "Airbnb host network only"
    ],
    correct: 1,
    rationale: "Holiday Inn Express, Hampton Inn, and La Quinta are the named hotel-supply accounts. Used as a trust signal in the B2B / Mike-the-property-manager creative."
  },
  {
    q: "Where do DTC Drain Buddy orders ship from?",
    options: [
      "A drop-shipper in California",
      "Amazon's FBA network",
      "The Inventel warehouse in New Jersey",
      "Direct from the manufacturer in Asia"
    ],
    correct: 2,
    rationale: "All DTC and B2B orders ship from the Inventel warehouse in New Jersey (Mon–Fri operations). Amazon orders are FBA. Retail orders ship to each retailer's distribution centers."
  },
  {
    q: "What's the standard DTC shipping window from order to delivery?",
    options: ["Same day","1–2 business days","5–10 business days (1 day processing + 3–7 days transit)","2–4 weeks"],
    correct: 2,
    rationale: "1 business day for processing (orders before noon ET) + 3–7 business days standard ground = 5–10 business days total promised window."
  },

  // ---- TEST ORDERS ----
  {
    q: "What's the recommended way to run an end-to-end test order without charging a real card?",
    options: [
      "Use a friend's credit card temporarily.",
      "Use Shopify's Bogus Gateway with the test card numbers Shopify provides — the order tags as TEST in the dashboard and inventory doesn't deduct.",
      "Manually edit the order in the database after placing it.",
      "Place a real order and immediately request a refund."
    ],
    correct: 1,
    rationale: "Bogus Gateway is Shopify's built-in test payment processor — simulates a transaction without charging, tags the order TEST, and bypasses real inventory deduction. Method 2 (100% discount code) is for full-flow real-card-not-charged tests like staff orders."
  },

  // ---- SHOPIFY PLATFORM ----
  {
    q: "What's the right escalation path when a CX agent encounters an inventory mismatch (Shopify shows in stock, warehouse doesn't have it)?",
    options: [
      "Process the refund and move on.",
      "Email the CEO directly.",
      "Escalate to the Ops Lead immediately — it's time-sensitive and affects fulfillment promises.",
      "Wait until next week's all-hands meeting to bring it up."
    ],
    correct: 2,
    rationale: "Inventory mismatches go to the Ops Lead and are time-sensitive — they affect what we promise customers right now. Other escalation paths: Web Lead for site bugs, CX Lead for refund disputes, Marketing for email/SMS flow changes."
  },

  // ---- DISCOUNTS ----
  {
    q: "A customer found an expired promo code online and is asking us to honor it. What's the right move?",
    options: [
      "Always honor any code the customer mentions — the customer is always right.",
      "Refuse outright and end the call.",
      "Check the monthly discount sheet first — it's the single source of truth. For reasonable expired-code asks, use a CX goodwill code at your discretion. Don't honor codes from memory.",
      "Make up a new discount on the spot."
    ],
    correct: 2,
    rationale: "Always check the monthly discount sheet first — it's the single source of truth, and don't honor codes from memory. CX has a goodwill code for reasonable expired-code asks; document the use."
  },

  // ---- SEO ----
  {
    q: "Which of these is part of a healthy Drain Buddy SEO strategy?",
    options: [
      "Buying backlinks in bulk from any site that will sell them.",
      "Writing keyword-themed content around real customer questions (drain compatibility, install steps, push/push), with descriptive image filenames and alt text.",
      "Hiding keywords in white text on a white background.",
      "Cloaking different content to Google vs. real users."
    ],
    correct: 1,
    rationale: "SEO is earned traffic that compounds over months — content laddered to real keyword themes (fit, install, hair-clog prevention), descriptive image filenames, and alt text are the durable plays. Black-hat tactics get the site penalized."
  },

  // ---- CRO ----
  {
    q: "A new CRO test on the PDP changes both the hero image AND the Add-to-Cart copy at the same time. What's wrong with that?",
    options: [
      "Nothing — testing two changes at once is twice as fast.",
      "Multi-variable tests are unreadable — if conversion changes, you can't tell which variable did it. Change one variable per test.",
      "The hero image is fine to change, but the Add-to-Cart copy is sacred and can't be touched.",
      "You should change three or four things at once for a bigger lift."
    ],
    correct: 1,
    rationale: "One variable per test. Multi-variable tests can't be diagnosed — you'll never know what worked. Plus the rest of the CRO discipline: real hypothesis, sample size before launch, full week minimum, downstream metrics, and document the result."
  },

  // ---- CREATIVES & PATTERNS ----
  {
    q: "Which of these is one of the six universal patterns in winning Drain Buddy creative?",
    options: [
      "Lead with brand history before the product.",
      "Lead with a Specific, Relatable Problem — open on the moment of frustration the customer already knows.",
      "Use exclusively professional, polished commercial-style footage.",
      "Avoid mentioning Shark Tank to keep the creative modern."
    ],
    correct: 1,
    rationale: "The six patterns are: Lead with a Specific Problem, Social Proof Front and Center, Native/Authentic-Looking Creative, One Clear Simple Message, Contrast/Switch Framing, and Emotion Over Logic."
  },
  {
    q: "Which gallery creative pairs the founder's Shark Tank moment with current retail proof to close the 'is this brand real?' question?",
    options: [
      "The $15-vs-$200 Plumber Math",
      "The Hair Reveal Carousel",
      "The Shark Tank Trust Stamp",
      "The Property-Manager Math"
    ],
    correct: 2,
    rationale: "The Shark Tank Trust Stamp is the credibility play — pairs Robert Herjavec's 'I'm in.' moment with current retail presence (Home Depot, Ace, Walmart) to close the credibility question in one frame. Best for Gina-style gift-givers and skeptics."
  },

  // ---- VOICE & LANGUAGE ----
  {
    q: "Which of these is the brand's 'magic phrase' that should appear in nearly every piece of consumer copy?",
    options: [
      "'Revolutionary patented technology.'",
      "'Drop it in. No tools. No plumber.'",
      "'Take back your drains.'",
      "'The world's #1 drain solution.'"
    ],
    correct: 1,
    rationale: "'Drop it in,' 'no tools,' and 'no plumber' are the three magic phrases. They map directly to the brand pillars. The other options are infomercial speak the brand explicitly avoids."
  },

  // ---- PERSONAS / ANGLES ----
  {
    q: "Which persona is most likely to convert on the 'Plumber Bill / $15 vs $200' marketing angle?",
    options: [
      "Long-Hair Lauren (32, renter)",
      "Plumber-Avoiding Pete (47, homeowner)",
      "Maintenance Manager Mike (54, property manager)",
      "Gift-Giver Gina (60, gifting on Amazon)"
    ],
    correct: 1,
    rationale: "Pete has personally seen a recent plumber bill. The math is the entire purchase justification. Lauren responds to the hair-reveal angle, Mike to operational ROI math, Gina to the Shark Tank credibility stamp."
  },
  {
    q: "Which persona is most likely to convert on the 'Hair Reveal' marketing angle?",
    options: [
      "Long-Hair Lauren — younger renter, long hair, already knows she has the problem and wants the fix to be visible.",
      "Plumber-Avoiding Pete — homeowner whose plumber recommended a hair catcher.",
      "Maintenance Manager Mike — property manager buying in bulk.",
      "Gift-Giver Gina — buying as a gift on Amazon."
    ],
    correct: 0,
    rationale: "The basket-pull moment IS the ad for Lauren. She already knows she has the problem; she wants the satisfying visual proof of the fix."
  },

  // ---- PILLARS / POSITIONING ----
  {
    q: "Which of these is one of Drain Buddy's five brand pillars?",
    options: [
      "'Cheapest drain solution on the market'",
      "'Drop-in simple — no tools, no plumber, no swap-out of existing hardware'",
      "'Lifetime warranty with zero questions asked'",
      "'Available exclusively on drainstrain.com'"
    ],
    correct: 1,
    rationale: "The five pillars: Drop-in simple · Catches it all · Looks like it belongs · Pays for itself fast · Available where you shop. The product is explicitly NOT exclusive to DTC — multi-channel availability is itself a pillar."
  },
  {
    q: "What's the brand's single-sentence positioning?",
    options: [
      "The cheapest drain solution available on Amazon.",
      "A patented, Shark-Tank-backed 2-in-1 stopper-and-hair-catcher that drops into 90%+ of household drains with no tools and no plumber — so a $15 fixture replaces a $200 service call.",
      "The luxury choice for premium-design bathrooms.",
      "A subscription-based monthly drain-cleaning service."
    ],
    correct: 1,
    rationale: "The positioning is built around: the obvious middle-of-the-road choice — better-looking and longer-lasting than $3 mesh, dramatically more affordable than premium hardware, and provably real (Shark Tank, retail presence, 2,900+ reviews)."
  },

  // ---- CONTACTS / RESOURCES ----

  // ---- GLOSSARY ----
  {
    q: "What is 'Evergreen Offer' in Inventel-brand language?",
    options: [
      "A holiday-only promotion.",
      "A discount that's always on, not tied to a calendar window — most commonly Subscribe & Save and New Customer first-order discounts.",
      "A discount only available to influencers.",
      "An expired promo code that gets accidentally honored."
    ],
    correct: 1,
    rationale: "Evergreen Offer = always-on, not calendar-bound. Subscribe & Save and New Customer first-order discounts are the most common. Assume live unless the monthly discount sheet flags otherwise."
  }
];

let quizState = { current: 0, score: 0, answered: [] };

function initQuiz(){
  // Shuffle a fresh question order each time the quiz loads
  quizState = { current: 0, score: 0, answered: [], order: shuffleIndices(QUIZ_QUESTIONS.length) };
  const intro = document.getElementById('quiz-intro');
  if(intro) intro.style.display = 'none';
  const c = document.getElementById('quiz-container');
  if(c) c.style.display = 'block';
  renderQuestion();
}

function shuffleIndices(n){
  const arr = Array.from({length:n}, (_,i)=>i);
  for(let i=arr.length-1;i>0;i--){
    const j = Math.floor(Math.random()*(i+1));
    [arr[i], arr[j]] = [arr[j], arr[i]];
  }
  return arr;
}

function renderQuestion(){
  const c = document.getElementById('quiz-container');
  if(!c) return;
  const total = QUIZ_QUESTIONS.length;
  const idx = quizState.current;
  if(idx >= total){ renderResult(); return; }
  const qIdx = quizState.order[idx];
  const q = QUIZ_QUESTIONS[qIdx];
  const pct = Math.round((idx/total)*100);
  let html = '';
  html += '<div class="quiz-progress">';
  html += '<span>Question '+(idx+1)+' of '+total+'</span>';
  html += '<span>Score: '+quizState.score+'/'+idx+'</span>';
  html += '</div>';
  html += '<div class="quiz-progress-bar"><div class="quiz-progress-fill" style="width:'+pct+'%"></div></div>';
  html += '<div class="quiz-question">'+q.q+'</div>';
  html += '<div class="quiz-options">';
  q.options.forEach((opt, i) => {
    html += '<button class="quiz-option" data-idx="'+i+'" onclick="answerQuestion('+i+')">'+opt+'</button>';
  });
  html += '</div>';
  html += '<button class="quiz-next-btn" id="quiz-next" onclick="nextQuestion()">Next →</button>';
  c.innerHTML = html;
}

function answerQuestion(picked){
  const idx = quizState.current;
  const qIdx = quizState.order[idx];
  const q = QUIZ_QUESTIONS[qIdx];
  const correct = q.correct;
  const buttons = document.querySelectorAll('#quiz-container .quiz-option');
  buttons.forEach((b,i) => {
    b.classList.add('disabled');
    b.onclick = null;
    if(i === correct) b.classList.add('correct');
    else if(i === picked) b.classList.add('wrong');
    else b.classList.add('dimmed');
  });
  // Show rationale + Next
  const isCorrect = (picked === correct);
  if(isCorrect) quizState.score++;
  quizState.answered.push({qIdx, picked, correct: isCorrect});
  // Inject rationale
  const c = document.getElementById('quiz-container');
  const rationale = document.createElement('div');
  rationale.className = 'note';
  rationale.style.marginTop = '14px';
  rationale.innerHTML = '<strong style="color:'+(isCorrect?'var(--db-forest)':'var(--db-danger)')+';font-style:normal">'+(isCorrect?'✓ Correct.':'✗ Not quite.')+'</strong> ' + q.rationale;
  c.appendChild(rationale);
  document.getElementById('quiz-next').classList.add('show');
}

function nextQuestion(){
  quizState.current++;
  renderQuestion();
}

function renderResult(){
  const c = document.getElementById('quiz-container');
  const total = QUIZ_QUESTIONS.length;
  const passingScore = 21;
  const passed = quizState.score >= passingScore;
  const pct = Math.round((quizState.score/total)*100);
  let html = '';
  if(passed){
    const today = new Date().toLocaleDateString('en-US', {year:'numeric', month:'long', day:'numeric'});
    html += '<div class="quiz-pass">';
    html += '<div class="quiz-pass-banner">';
    html += '<span class="quiz-pass-emoji">🎉</span>';
    html += '<h3>Congratulations — You Passed!</h3>';
    html += '<div>Score: '+quizState.score+' / '+total+' &middot; '+pct+'%</div>';
    html += '</div>';
    html += '<div class="quiz-cert">';
    html += '<div class="quiz-cert-lockup">Inventel Innovations · This certifies that</div>';
    html += '<label for="cert-name-input" style="display:block;font-family:\'DM Mono\',monospace;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--db-brass-deep);font-weight:700;margin:6px 0">Name · Title</label>';
    html += '<input type="text" class="quiz-cert-name-input" id="cert-name-input" placeholder="Jane Smith · CX Agent" maxlength="80" oninput="document.getElementById(\'cert-name-printed\').textContent=this.value||\'Your Name · Title\'">';
    html += '<div class="name-printed" id="cert-name-printed">Your Name · Title</div>';
    html += '<div class="quiz-cert-passed-badge">✓ Drain Buddy · Brand Certified</div>';
    html += '<div class="quiz-cert-brand">DRAIN BUDDY</div>';
    html += '<img src="https://www.drainstrain.com/cdn/shop/files/Image20240717003911_1_1.png?v=1721626068" alt="Drain Buddy logo" style="max-width:140px;max-height:50px;margin:4px auto 14px;display:block" onerror="this.style.display=\'none\'">';
    html += '<div class="cert-stats" style="grid-template-columns:repeat(4,1fr)">';
    html += '<div class="cert-stat"><div class="cert-stat-num">'+pct+'%</div><div class="cert-stat-lbl">Score</div></div>';
    html += '<div class="cert-stat"><div class="cert-stat-num">'+quizState.score+'/'+total+'</div><div class="cert-stat-lbl">Correct</div></div>';
    html += '<div class="cert-stat"><div class="cert-stat-num" style="font-size:1rem;letter-spacing:0">'+today+'</div><div class="cert-stat-lbl">Date</div></div>';
    html += '<div class="cert-stat"><div class="cert-stat-num">PASSED</div><div class="cert-stat-lbl">Result</div></div>';
    html += '</div>';
    html += '<div class="cert-track">Training Track · Drain Buddy / Drain Strain® · Inventel Brand Hub v6.2</div>';
    html += '<div class="cert-actions">';
    html += '<button class="secondary" onclick="restartQuiz()">↩ Retake Quiz</button>';
    html += '<button onclick="printCert()">🖨️ Print Certificate</button>';
    html += '</div>';
    html += '</div>';
    html += '<div style="max-width:520px;margin:18px auto 0;padding:14px 18px;background:var(--db-cream);border:1px solid rgba(196,154,77,.4);border-radius:10px;color:var(--db-hydro-deep);font-size:13px;line-height:1.6;text-align:center">';
    html += '<strong>📨 Send to your HR onboarding trainer as proof of completion.</strong><br>';
    html += 'Use <strong>🖨️ Print Certificate</strong> above — in the browser\'s print dialog, either send to a printer <em>or</em> choose <strong>&quot;Save as PDF&quot;</strong> as the destination. A clean screenshot of this completion card is also accepted.';
    html += '</div>';
    html += '</div>';
  } else {
    html += '<div class="quiz-fail">';
    html += '<span class="quiz-fail-emoji">📚</span>';
    html += '<h3>Almost there.</h3>';
    html += '<div class="quiz-fail-score">'+quizState.score+' / '+total+'</div>';
    html += '<p>You need <strong>21 out of 30</strong> to pass (70%). Take another look at the sections you weren\'t sure on — Brand Overview, Product Line, Returns, Objections, and Fulfillment are the highest-leverage refresh — and come back when you\'re ready.</p>';
    html += '<div class="cert-actions">';
    html += '<button onclick="restartQuiz()">↩ Retake Quiz</button>';
    html += '</div>';
    html += '</div>';
  }
  c.innerHTML = html;
}

function restartQuiz(){
  initQuiz();
  // Scroll quiz back into view
  const sec = document.getElementById('quiz');
  if(sec) sec.scrollIntoView({behavior:'smooth', block:'start'});
}

function printCert(){
  const nameInput = document.getElementById('cert-name-input');
  const namePrinted = document.getElementById('cert-name-printed');
  if(!nameInput || !nameInput.value.trim()){
    if(nameInput){
      nameInput.focus();
      nameInput.style.borderColor = 'var(--db-danger)';
      const placeholderOriginal = nameInput.placeholder;
      nameInput.placeholder = '⚠ Enter your name and title before printing';
      setTimeout(()=>{
        nameInput.style.borderColor = '';
        nameInput.placeholder = placeholderOriginal;
      }, 2400);
    }
    return;
  }
  if(namePrinted){
    namePrinted.textContent = nameInput.value;
  }
  // Make sure quiz section is expanded
  const quizSection = document.getElementById('quiz');
  if(quizSection) quizSection.classList.remove('collapsed');
  document.body.classList.add('printing');
  setTimeout(() => {
    window.print();
    setTimeout(() => document.body.classList.remove('printing'), 500);
  }, 100);
  // Safety net
  window.addEventListener('afterprint', function once(){
    document.body.classList.remove('printing');
    window.removeEventListener('afterprint', once);
  });
}
</script>
<?php bh_back_to_index_button('brand-hub-index', 'All Hubs'); ?>
</body>
</html>

