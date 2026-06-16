<?php /* Template Name: Clean & Hit Brand Hub */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clean &amp; Hit — Brand Knowledge Hub</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fraunces:wght@600;700;800;900&family=Inter:wght@300;400;500;600;700;800&family=DM+Mono:wght@400;500;700&display=swap" rel="stylesheet">
<style>
:root{
  /* CLEAN & HIT PALETTE — fairway green + sand cream + trophy gold */
  /* Designed to feel like a premium golf brand: country-club polish, USGA-tournament cleanliness */
  --ch-fairway:#1F4E2C;            /* deep fairway green — primary, hero base */
  --ch-fairway-deep:#163820;       /* darker green, hover/active */
  --ch-fairway-mid:#2D6F3D;        /* mid green, accent */
  --ch-fairway-light:#5A9966;      /* lighter green, secondary */
  --ch-mint:#A4C8A8;               /* light mint accent, soft surfaces */
  --ch-cream:#F2EAD3;              /* sand-bunker cream — primary secondary surface */
  --ch-cream-light:#FAF6E9;        /* lightest cream, page background */
  --ch-cream-deep:#E5D9B8;         /* deeper cream, hover */
  --ch-sand:#D4B98A;               /* sand bunker tan — accent */
  --ch-navy:#1A2332;               /* deep navy — premium accent, contrast */
  --ch-charcoal:#2C2C2C;           /* body type */
  --ch-iron:#4A4A47;               /* mid-tone */
  --ch-gold:#C9A24E;               /* trophy gold — premium accent */
  --ch-gold-deep:#A88532;          /* deep gold, hover */
  --ch-gold-bright:#E0B85F;        /* bright gold, glow */
  --ch-text:#2C2C2C;
  --ch-text-muted:#5A5A5A;
  --ch-link:#0055CC;
  --ch-white:#FFFFFF;
  --ch-danger:#B8391F;
  --ch-success:#1F4E2C;
  --nav-h:60px;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;background:var(--ch-cream-light);color:var(--ch-text);font-size:16px;line-height:1.6;-webkit-font-smoothing:antialiased}

/* TOP NAV */
#top-nav{position:sticky;top:0;z-index:1000;background:var(--ch-fairway-deep);box-shadow:0 2px 12px rgba(0,0,0,.25)}
.nav-inner{display:flex;align-items:center;gap:14px;height:var(--nav-h);padding:0 20px;max-width:1200px;margin:0 auto}
.nav-brand{font-family:'Bebas Neue',sans-serif;font-size:20px;color:var(--ch-cream);white-space:nowrap;letter-spacing:.08em;flex-shrink:0}
.nav-search-wrap{flex:1;position:relative;max-width:420px}
.nav-search{width:100%;background:rgba(255,255,255,.06);border:1px solid rgba(201,162,78,.3);color:#fff;padding:7px 12px 7px 32px;border-radius:18px;font-size:13px;font-family:'Inter',sans-serif;outline:none;transition:all .15s}
.nav-search::placeholder{color:rgba(242,234,211,.55)}
.nav-search:focus{border-color:var(--ch-gold);background:rgba(255,255,255,.1)}
.nav-search-icon{position:absolute;left:10px;top:50%;transform:translateY(-50%);width:14px;height:14px;stroke:var(--ch-gold);fill:none;stroke-width:2;pointer-events:none}
.nav-top-toc-btn{background:transparent;border:1px solid var(--ch-gold);color:var(--ch-gold);padding:6px 14px;border-radius:20px;font-size:12px;font-weight:700;cursor:pointer;font-family:'DM Mono',monospace;letter-spacing:.05em;text-transform:uppercase;transition:all .2s;flex-shrink:0}
.nav-top-toc-btn:hover{background:var(--ch-gold);color:var(--ch-fairway-deep)}
@media (max-width:520px){.nav-brand{display:none}}
@media (max-width:700px){.nav-search-wrap{max-width:none}}

/* SEARCH RESULTS */
#search-results{position:absolute;top:100%;left:0;right:0;margin-top:6px;background:#fff;border-radius:10px;box-shadow:0 10px 32px rgba(0,0,0,.25);max-height:60vh;overflow-y:auto;display:none;z-index:1100}
#search-results.open{display:block}
.search-group{padding:8px 0;border-bottom:1px solid rgba(0,0,0,.06)}
.search-group:last-child{border-bottom:none}
.search-group-label{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--ch-fairway-mid);font-weight:700;padding:6px 14px}
.search-result{display:block;padding:8px 14px;color:var(--ch-text);text-decoration:none;font-size:13.5px;cursor:pointer;border-left:3px solid transparent;line-height:1.4}
.search-result:hover,.search-result.active{background:var(--ch-cream);border-left-color:var(--ch-gold)}
.search-result-snippet{font-size:11.5px;color:var(--ch-text-muted);margin-top:2px}
.search-empty{padding:18px 14px;color:var(--ch-text-muted);font-size:13px;font-style:italic;text-align:center}
.flash-target{animation:flashGold 1.8s ease-out}
@keyframes flashGold{0%{background:rgba(201,162,78,.45);box-shadow:0 0 0 4px rgba(201,162,78,.5)}100%{background:transparent;box-shadow:none}}

/* FLOATING TOC BUTTON */
#floating-toc-btn{position:fixed;bottom:24px;right:24px;z-index:998;background:var(--ch-gold);color:var(--ch-fairway-deep);border:2px solid var(--ch-fairway-deep);width:56px;height:56px;border-radius:50%;cursor:pointer;box-shadow:0 6px 20px rgba(31,78,44,.5);display:flex;align-items:center;justify-content:center;transition:all .2s}
#floating-toc-btn:hover{background:var(--ch-gold-bright);transform:translateY(-2px);box-shadow:0 8px 24px rgba(31,78,44,.65)}
#floating-toc-btn svg{width:24px;height:24px;stroke:var(--ch-fairway-deep);fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* TOC DRAWER */
#toc-drawer-overlay{position:fixed;inset:0;background:rgba(22,56,32,.65);backdrop-filter:blur(4px);z-index:1500;opacity:0;pointer-events:none;transition:opacity .25s}
#toc-drawer-overlay.open{opacity:1;pointer-events:auto}
#toc-drawer{position:fixed;top:0;right:0;bottom:0;width:min(400px,92vw);background:var(--ch-cream);z-index:1501;padding:0;overflow-y:auto;transform:translateX(100%);transition:transform .3s cubic-bezier(.4,0,.2,1);box-shadow:-8px 0 30px rgba(0,0,0,.4);display:flex;flex-direction:column}
#toc-drawer.open{transform:translateX(0)}
.toc-drawer-header{display:flex;justify-content:space-between;align-items:center;padding:16px 20px;background:var(--ch-fairway-deep);color:#fff;border-bottom:3px solid var(--ch-gold);position:sticky;top:0;z-index:2}
.toc-drawer-title{font-family:'Bebas Neue',sans-serif;color:var(--ch-gold);font-size:1.4rem;letter-spacing:.06em}
.toc-drawer-close{background:rgba(255,255,255,.12);border:1px solid rgba(201,162,78,.4);color:#fff;font-size:20px;cursor:pointer;line-height:1;width:30px;height:30px;border-radius:50%;display:flex;align-items:center;justify-content:center;transition:all .15s}
.toc-drawer-close:hover{background:var(--ch-gold);color:var(--ch-fairway-deep);border-color:var(--ch-gold)}
#toc-drawer-nav{padding:10px 12px 14px;display:flex;flex-direction:column;gap:3px}
#toc-drawer-nav a{display:flex;align-items:center;gap:10px;background:#fff;color:var(--ch-fairway-deep);text-decoration:none;padding:7px 12px;border-radius:7px;font-size:13px;font-family:'Inter',sans-serif;font-weight:600;border:1px solid rgba(201,162,78,.18);border-left:4px solid var(--ch-gold);transition:all .15s;line-height:1.2}
#toc-drawer-nav a:hover{background:var(--ch-fairway);color:#fff;border-color:var(--ch-fairway);border-left-color:var(--ch-gold);transform:translateX(3px);opacity:1;box-shadow:0 2px 8px rgba(31,78,44,.3)}
#toc-drawer-nav a:hover .toc-drawer-num{background:var(--ch-gold);color:var(--ch-fairway-deep)}
.toc-drawer-num{display:inline-flex;align-items:center;justify-content:center;min-width:30px;height:20px;padding:0 6px;background:var(--ch-fairway);color:#fff;border-radius:4px;font-family:'DM Mono',monospace;font-size:10.5px;font-weight:700;letter-spacing:.02em;flex-shrink:0;transition:all .15s}
.toc-drawer-label{flex:1;min-width:0}

/* TOC SECTION (in-page) */
#toc-section .toc-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:10px;margin-top:10px}
.toc-tile{background:#fff;border:1px solid rgba(201,162,78,.18);border-left:4px solid var(--ch-gold);border-radius:10px;padding:14px 16px;text-decoration:none;color:var(--ch-text);display:flex;align-items:center;gap:12px;transition:all .2s;cursor:pointer}
.toc-tile:hover{background:var(--ch-cream-deep);border-left-color:var(--ch-fairway);transform:translateX(3px);opacity:1;text-decoration:none}
.toc-tile-num{font-family:'DM Mono',monospace;color:var(--ch-fairway);font-size:12px;font-weight:700;min-width:24px}
.toc-tile-label{font-size:14px;font-weight:600;color:var(--ch-charcoal)}

/* COLLAPSIBLES */
.card.collapsible{padding:0;overflow:hidden;transition:all .3s ease}
.section-header-bar{display:flex;align-items:center;justify-content:space-between;padding:22px 30px;cursor:pointer;user-select:none;background:linear-gradient(135deg,var(--ch-white) 0%,rgba(201,162,78,.1) 100%);transition:background .2s;border-bottom:1px solid transparent}
.section-header-bar:hover{background:linear-gradient(135deg,var(--ch-cream) 0%,rgba(201,162,78,.18) 100%)}
.section-header-bar .section-header-left{flex:1;min-width:0}
.section-header-bar .eyebrow{margin-bottom:4px}
.section-header-bar h2{margin:0;padding:0;border-bottom:none;font-size:1.5rem}
.section-toggle{background:transparent;border:1.5px solid var(--ch-fairway);color:var(--ch-fairway);width:32px;height:32px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .2s;margin-left:14px}
.section-toggle:hover{background:var(--ch-fairway);color:#fff;border-color:var(--ch-fairway)}
.section-toggle svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:2.5;stroke-linecap:round;transition:transform .3s}
.collapsed .section-toggle svg{transform:rotate(-180deg)}
.section-body{padding:10px 30px 30px;max-height:20000px;overflow:hidden;transition:max-height .4s ease,padding .3s ease,opacity .3s ease;opacity:1}
.collapsed .section-body{max-height:0;padding-top:0;padding-bottom:0;opacity:0}
.collapsed .section-header-bar{border-bottom-color:transparent}

/* SECTIONS */
section{padding:48px 20px;max-width:980px;margin:0 auto;scroll-margin-top:var(--nav-h)}
h1{font-family:'Bebas Neue',sans-serif;font-size:clamp(2.4rem,6.5vw,4.6rem);color:#fff;line-height:1;letter-spacing:.02em;text-transform:uppercase}
h2{font-family:'Fraunces',serif;font-size:clamp(1.6rem,3.5vw,2.4rem);font-weight:800;color:var(--ch-fairway-deep);margin-bottom:24px;padding-bottom:12px;border-bottom:3px solid var(--ch-gold);letter-spacing:-.01em}
h3{font-family:'Fraunces',serif;font-size:1.2rem;font-weight:700;color:var(--ch-fairway);margin-bottom:10px}
h4{font-family:'Inter',sans-serif;font-size:1rem;font-weight:700;color:var(--ch-charcoal);margin-bottom:8px}
p{margin-bottom:14px;color:var(--ch-text)}
a{color:var(--ch-link);text-decoration:underline}
a:hover{opacity:.75}
.eyebrow{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--ch-fairway);margin-bottom:8px;display:block;font-weight:600}
.card{background:var(--ch-white);border-radius:16px;padding:36px;margin-bottom:20px;box-shadow:0 2px 20px rgba(31,78,44,.07);border:1px solid rgba(201,162,78,.15)}

/* HERO — fairway gradient with gold/cream radial glow */
#hero{max-width:100%;padding:0;margin:0;background:linear-gradient(135deg,var(--ch-fairway-deep) 0%,var(--ch-fairway) 50%,var(--ch-fairway-mid) 100%);position:relative;overflow:hidden}
#hero::before{content:"";position:absolute;inset:0;background-image:radial-gradient(circle at 20% 30%,rgba(242,234,211,.15) 0%,transparent 45%),radial-gradient(circle at 80% 75%,rgba(201,162,78,.25) 0%,transparent 50%),radial-gradient(circle at 50% 100%,rgba(212,185,138,.18) 0%,transparent 60%);pointer-events:none}
.hero-inner{max-width:980px;margin:0 auto;padding:64px 20px 56px;position:relative;z-index:1}
.hero-logo-wrap{display:flex;align-items:center;gap:20px;margin-bottom:28px;flex-wrap:wrap}
.hero-logo-wrap img{height:60px;object-fit:contain;background:#fff;padding:8px 16px;border-radius:8px}
.hero-logo-wrap img[data-failed="1"]{display:none}
.hero-logo-wrap img[data-failed="1"] + .hero-brand-text-fallback{display:inline-block}
.hero-brand-text-fallback{display:none;font-family:'Bebas Neue',sans-serif;font-size:2.4rem;color:#fff;letter-spacing:.06em}
.hero h1{color:#fff;margin-bottom:8px;text-shadow:0 2px 12px rgba(22,56,32,.5)}
.hero-tagline{font-size:1.2rem;color:var(--ch-cream);margin-bottom:10px;font-weight:600;font-family:'Fraunces',serif;font-style:italic}
.hero-meta{font-family:'DM Mono',monospace;font-size:13px;color:var(--ch-cream);opacity:.85;margin-bottom:28px;letter-spacing:.05em}
.hero-stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:14px;margin:28px 0}
.hero-stat{background:rgba(255,255,255,.08);border:1px solid rgba(242,234,211,.28);border-radius:12px;padding:18px;backdrop-filter:blur(4px)}
.hero-stat-num{font-family:'Bebas Neue',sans-serif;font-size:2.1rem;color:var(--ch-gold);line-height:1;margin-bottom:6px;letter-spacing:.02em}
.hero-stat-lbl{font-size:12px;color:#fff;opacity:.9;line-height:1.35}
.chip-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:18px}
.chip{display:inline-flex;align-items:center;gap:6px;background:#fff;color:var(--ch-link)!important;text-decoration:underline;padding:7px 14px;border-radius:20px;font-size:13px;font-weight:600;transition:transform .15s}
.chip:hover{transform:translateY(-1px);opacity:1}

.tag-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:16px}
.tag{background:var(--ch-fairway);color:#fff;padding:5px 12px;border-radius:12px;font-size:12px;font-weight:700;letter-spacing:.02em}
.tag.tag-inventel{background:var(--ch-gold);color:var(--ch-fairway-deep)}
.tag.tag-new{background:var(--ch-navy);color:var(--ch-gold)}

/* TABLES */
table{width:100%;border-collapse:collapse;margin:16px 0;background:#fff;border-radius:8px;overflow:hidden;font-size:14px}
th{background:var(--ch-fairway-deep);color:var(--ch-gold);padding:12px 14px;text-align:left;font-size:12px;text-transform:uppercase;letter-spacing:.07em;font-weight:700}
td{padding:12px 14px;border-bottom:1px solid rgba(31,78,44,.08);vertical-align:top}
tr:last-child td{border-bottom:none}
tr:nth-child(even) td{background:rgba(201,162,78,.05)}
.badge{display:inline-block;padding:3px 9px;border-radius:10px;font-size:11px;font-weight:700;letter-spacing:.03em;text-transform:uppercase}
.badge-core{background:var(--ch-fairway);color:#fff}
.badge-accessory{background:var(--ch-gold);color:var(--ch-fairway-deep)}
.badge-discontinued{background:#888;color:#fff}
.badge-new{background:var(--ch-navy);color:var(--ch-gold)}

/* PRODUCT HERO */
.product-hero{display:grid;grid-template-columns:1fr 1.3fr;gap:32px;align-items:start;background:linear-gradient(135deg,var(--ch-fairway) 0%,var(--ch-fairway-deep) 100%);border-radius:16px;padding:32px;margin:18px 0;color:#fff;border:1px solid rgba(201,162,78,.4)}
.product-hero-img{aspect-ratio:1/1;background:radial-gradient(circle at 50% 50%,rgba(201,162,78,.22) 0%,rgba(22,56,32,.7) 70%);border-radius:12px;display:flex;align-items:center;justify-content:center;border:1px solid rgba(201,162,78,.4);position:relative;overflow:hidden}
.product-hero-svg{width:80%;height:80%}
.product-hero-photo{width:100%;height:100%;object-fit:cover;display:block;border-radius:11px}
.product-hero-content h3{color:var(--ch-gold);font-size:1.5rem;margin-bottom:6px}
.product-hero-tagline{font-family:'Fraunces',serif;font-style:italic;color:var(--ch-cream);opacity:.9;font-size:1.05rem;margin-bottom:14px}
.product-hero-content p{color:var(--ch-cream);margin-bottom:12px}
.product-hero-content strong{color:#fff}
.product-hero-content a{color:var(--ch-gold);text-decoration:underline}
.product-badge-row{display:flex;flex-wrap:wrap;gap:6px;margin-top:14px}
.product-badge-row .tag{background:rgba(242,234,211,.18);color:var(--ch-cream);border:1px solid rgba(242,234,211,.35);font-size:11px}
@media (max-width:720px){.product-hero{grid-template-columns:1fr;padding:24px}}

/* SPEC TABLE */
.spec-table{background:#fff;border:1px solid rgba(201,162,78,.2);border-radius:10px;padding:18px 22px;margin:14px 0;font-size:13.5px;line-height:1.6}
.spec-table dl{display:grid;grid-template-columns:max-content 1fr;gap:8px 18px}
.spec-table dt{font-family:'DM Mono',monospace;font-size:11px;text-transform:uppercase;letter-spacing:.08em;color:var(--ch-fairway);font-weight:700;padding-top:2px}
.spec-table dd{color:var(--ch-text);margin:0}
.spec-table dd strong{color:var(--ch-charcoal)}
@media (max-width:560px){.spec-table dl{grid-template-columns:1fr}.spec-table dt{margin-top:8px}}

.feature-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:12px;margin:14px 0 8px}
.feature-tile{background:linear-gradient(135deg,#fff 0%,var(--ch-cream) 100%);border:1px solid rgba(201,162,78,.2);border-left:4px solid var(--ch-gold);border-radius:10px;padding:14px 16px}
.feature-tile-icon{font-size:1.4rem;margin-bottom:6px;display:block;line-height:1}
.feature-tile h4{margin-bottom:4px;font-size:13.5px;color:var(--ch-charcoal)}
.feature-tile p{margin:0;font-size:12.5px;color:var(--ch-text-muted);line-height:1.5}

/* PILLARS */
.pillars{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:20px}
.pillar{background:linear-gradient(135deg,var(--ch-white) 0%,rgba(201,162,78,.12) 100%);padding:22px;border-radius:12px;border-left:4px solid var(--ch-fairway);transition:transform .2s}
.pillar:hover{transform:translateY(-3px)}
.pillar-icon{font-size:1.8rem;margin-bottom:10px;display:block}
.pillar h4{color:var(--ch-fairway-deep);margin-bottom:6px;font-size:1rem}
.pillar p{font-size:13px;color:var(--ch-text-muted);margin-bottom:0;line-height:1.5}

/* TONE / DO-DONT / ADJ / PERSONA */
.tone-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:14px;margin-top:20px}
.tone{background:var(--ch-cream);padding:20px;border-radius:10px;border-top:4px solid var(--ch-fairway)}
.tone-label{font-weight:700;color:var(--ch-fairway-deep);font-size:14px;margin-bottom:6px}
.tone-desc{font-size:13px;color:var(--ch-text-muted);margin-bottom:10px}
.tone-ex{font-family:'Fraunces',serif;font-style:italic;color:var(--ch-fairway);font-size:14px;border-left:3px solid var(--ch-gold);padding-left:10px;line-height:1.5}

.do-dont{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:16px}
.do-dont > div{padding:20px;border-radius:10px}
.do{background:rgba(31,78,44,.08);border-left:4px solid var(--ch-fairway)}
.dont{background:rgba(184,57,31,.08);border-left:4px solid var(--ch-danger)}
.do h4{color:var(--ch-fairway)}
.dont h4{color:var(--ch-danger)}
.do ul,.dont ul{list-style:none;padding:0}
.do li,.dont li{padding:6px 0;font-size:13.5px;line-height:1.5}
.do li::before{content:"✓ ";color:var(--ch-fairway);font-weight:700}
.dont li::before{content:"✗ ";color:var(--ch-danger);font-weight:700}
@media (max-width:600px){.do-dont{grid-template-columns:1fr}}

.adj-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:12px;margin-top:18px}
.adj{background:#fff;border:1px solid rgba(201,162,78,.2);border-left:4px solid var(--ch-gold);border-radius:10px;padding:14px 16px}
.adj-word{font-family:'Fraunces',serif;font-size:1.05rem;font-weight:700;color:var(--ch-fairway-deep);margin-bottom:4px}
.adj-desc{font-size:12.5px;color:var(--ch-text-muted);line-height:1.5}

.persona-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:14px;margin-top:18px}
.persona{background:var(--ch-cream);border:1px solid rgba(201,162,78,.25);border-radius:12px;padding:20px}
.persona-name{font-family:'Fraunces',serif;font-size:1.1rem;font-weight:700;color:var(--ch-fairway-deep);margin-bottom:4px}
.persona-meta{font-family:'DM Mono',monospace;font-size:11px;color:var(--ch-fairway);text-transform:uppercase;letter-spacing:.08em;margin-bottom:10px}
.persona p{font-size:13px;line-height:1.55;margin-bottom:6px}
.persona p strong{color:var(--ch-charcoal)}

/* COLOR PALETTE */
.palette-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:12px;margin-top:16px}
.swatch{border-radius:10px;padding:18px 14px 14px;color:#fff;border:1px solid rgba(0,0,0,.08);min-height:120px;display:flex;flex-direction:column;justify-content:flex-end}
.swatch-name{font-weight:700;font-size:13px;margin-bottom:2px}
.swatch-hex{font-family:'DM Mono',monospace;font-size:11px;opacity:.85}
.swatch.dark-text{color:var(--ch-charcoal)}

/* LOGO BLOCKS */
.logo-blocks{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin:16px 0}
.logo-block{padding:32px 24px;border-radius:12px;display:flex;align-items:center;justify-content:center;min-height:140px;border:1px solid rgba(0,0,0,.08)}
.logo-block.light{background:var(--ch-cream-light)}
.logo-block.dark{background:var(--ch-fairway-deep);border-color:rgba(201,162,78,.4)}
.logo-block img{max-width:80%;max-height:70px;object-fit:contain}
.logo-block img[data-failed="1"]{display:none}
.logo-block img[data-failed="1"] + .logo-text-fallback{display:inline-block}
.logo-text-fallback{display:none;font-family:'Bebas Neue',sans-serif;font-size:1.6rem;letter-spacing:.06em}
.logo-block.light .logo-text-fallback{color:var(--ch-fairway-deep)}
.logo-block.dark .logo-text-fallback{color:var(--ch-gold)}
.logo-caption{font-family:'DM Mono',monospace;font-size:10.5px;text-transform:uppercase;letter-spacing:.1em;color:var(--ch-text-muted);margin-top:6px;text-align:center}
@media (max-width:560px){.logo-blocks{grid-template-columns:1fr}}

/* CREATIVE GALLERY */
.creative-gallery{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:18px;margin-top:22px}
.creative-card{background:#fff;border:1px solid rgba(201,162,78,.25);border-radius:12px;padding:14px;display:flex;flex-direction:column;gap:10px;transition:transform .15s ease,box-shadow .15s ease}
.creative-card:hover{transform:translateY(-2px);box-shadow:0 6px 18px rgba(31,78,44,.12)}
.creative-img{width:100%;aspect-ratio:4/5;border-radius:8px;background:var(--ch-cream);display:block;overflow:hidden}
.creative-img svg{width:100%;height:100%;display:block}
.creative-meta{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--ch-fairway);font-weight:700}
.creative-caption{font-size:13px;line-height:1.55;color:var(--ch-text)}
.creative-caption strong{color:var(--ch-fairway-deep);display:block;font-family:'Fraunces',serif;font-size:14.5px;margin-bottom:4px}
.creative-tags{display:flex;flex-wrap:wrap;gap:6px;margin-top:4px}
.creative-tag{background:rgba(201,162,78,.18);color:var(--ch-fairway-deep);font-size:11px;padding:3px 8px;border-radius:12px;font-weight:600}

/* ADDRESS / WAREHOUSE */
.address-block{background:#fff;border:1px solid rgba(201,162,78,.4);border-left:4px solid var(--ch-fairway);border-radius:10px;padding:18px 22px;font-family:'DM Mono',monospace;font-size:14px;line-height:1.55;color:var(--ch-fairway-deep);margin:12px 0}
.address-block .addr-label{display:block;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--ch-fairway);margin-bottom:6px;font-weight:600}
.address-block strong{font-family:'Inter',sans-serif;font-size:15px;color:var(--ch-fairway-deep)}

/* ALERT CALLOUT */
.alert-callout{background:rgba(201,162,78,.12);border:1px solid var(--ch-gold);border-left:5px solid var(--ch-gold);border-radius:10px;padding:18px 22px;margin:14px 0;font-size:14px;line-height:1.6;color:var(--ch-text)}
.alert-callout.critical{background:linear-gradient(135deg,#B8391F 0%,#8B2815 100%);border:3px solid var(--ch-gold);border-radius:12px;padding:34px 26px 24px;margin:18px 0 22px;color:#fff;box-shadow:0 6px 24px rgba(184,57,31,.35);position:relative;overflow:hidden}
.alert-callout.critical::before{content:"";position:absolute;top:0;left:0;right:0;height:6px;background:repeating-linear-gradient(45deg,var(--ch-gold) 0 12px,var(--ch-fairway-deep) 12px 24px)}
.alert-callout strong{color:var(--ch-fairway-deep)}
.alert-callout.critical strong{color:var(--ch-gold);font-weight:800}
.alert-callout-title{display:block;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--ch-fairway);font-weight:700;margin-bottom:6px}
.alert-callout.critical .alert-callout-title{color:var(--ch-gold);font-size:15px;letter-spacing:.15em;font-weight:800;margin-bottom:12px;padding-bottom:10px;border-bottom:2px solid rgba(201,162,78,.5)}

/* TEAM CALLOUTS */
.team-callout{border-radius:10px;padding:18px 22px;margin:14px 0;font-size:13.5px;line-height:1.6;border-left:4px solid;position:relative}
.team-callout p{margin-bottom:8px}
.team-callout p:last-child{margin-bottom:0}
.team-callout .team-tag{display:inline-block;font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;font-weight:700;margin-bottom:8px;padding:3px 10px;border-radius:10px}
.team-callout.cx{background:rgba(31,78,44,.08);border-left-color:var(--ch-fairway)}
.team-callout.cx .team-tag{background:var(--ch-fairway);color:#fff}
.team-callout.creative{background:rgba(212,185,138,.18);border-left-color:var(--ch-sand)}
.team-callout.creative .team-tag{background:var(--ch-sand);color:var(--ch-fairway-deep)}
.team-callout.marketing{background:rgba(26,35,50,.08);border-left-color:var(--ch-navy)}
.team-callout.marketing .team-tag{background:var(--ch-navy);color:var(--ch-gold)}
.team-callout.brand{background:rgba(31,78,44,.06);border-left-color:var(--ch-fairway-deep)}
.team-callout.brand .team-tag{background:var(--ch-fairway-deep);color:var(--ch-gold)}
.team-callout.newhire{background:rgba(0,85,204,.07);border-left-color:var(--ch-link)}
.team-callout.newhire .team-tag{background:var(--ch-link);color:#fff}

/* THROUGH-LINE CALLOUT (creative section) */
.through-line{background:linear-gradient(135deg,var(--ch-fairway) 0%,var(--ch-fairway-deep) 100%);border:2px solid var(--ch-gold);border-radius:14px;padding:22px 26px;margin:20px 0;color:#fff;position:relative}
.through-line-label{display:block;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.15em;text-transform:uppercase;color:var(--ch-gold);font-weight:800;margin-bottom:8px}
.through-line p{font-family:'Fraunces',serif;font-size:1.05rem;line-height:1.6;color:#fff;margin:0;font-style:italic}

/* PATTERNS GRID */
.pattern-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:18px}
.pattern{background:#fff;border:1px solid rgba(201,162,78,.25);border-top:4px solid var(--ch-gold);border-radius:10px;padding:18px}
.pattern-num{font-family:'DM Mono',monospace;font-size:11px;color:var(--ch-fairway);font-weight:700;letter-spacing:.05em}
.pattern-icon{font-size:1.5rem;margin:6px 0}
.pattern h4{color:var(--ch-fairway-deep);font-family:'Fraunces',serif;font-size:1.05rem;margin-bottom:6px}
.pattern p{font-size:13px;color:var(--ch-text-muted);margin:0;line-height:1.5}

/* FAQ */
.faq-list h3{font-size:1.1rem;color:var(--ch-fairway-deep);margin-top:18px;margin-bottom:6px;font-family:'Fraunces',serif}
.faq-list h3:first-child{margin-top:0}
.faq-list p{font-size:13.5px;line-height:1.65}

/* GLOSSARY */
.glossary{background:#fff;border:1px solid rgba(201,162,78,.2);border-radius:12px;padding:20px 24px}
.glossary dl{display:flex;flex-direction:column;gap:14px}
.glossary dt{font-family:'Fraunces',serif;font-size:1.05rem;font-weight:700;color:var(--ch-fairway-deep)}
.glossary dd{font-size:13.5px;line-height:1.6;color:var(--ch-text);margin-left:0;margin-top:2px}
.glossary dd em{color:var(--ch-fairway);font-style:italic}

/* POLICY */
.policy-card{background:var(--ch-cream);border:1px solid rgba(201,162,78,.3);border-radius:12px;padding:24px;margin:14px 0}
.policy-card h3{margin-top:0}
.policy-contact{background:#fff;border-radius:8px;padding:14px 18px;font-size:14px;line-height:1.7;border-left:3px solid var(--ch-gold)}

/* CHANNEL BADGES (social) */
.channel-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:18px}
.channel{background:#fff;border:1px solid rgba(201,162,78,.2);border-radius:10px;padding:16px;border-top:4px solid var(--ch-fairway)}
.channel-name{font-weight:700;color:var(--ch-fairway-deep);font-size:14px;margin-bottom:4px}
.channel-meta{font-family:'DM Mono',monospace;font-size:11px;color:var(--ch-fairway);margin-bottom:8px}
.channel p{font-size:12.5px;color:var(--ch-text-muted);margin:0;line-height:1.5}

/* QUIZ — pass/fail/print scaffolding */
/* Quiz styling now lives under the #quiz selector below (dark dramatic standout) */
.quiz-next-btn{background:var(--ch-gold);color:var(--ch-fairway-deep);border:none;border-radius:10px;padding:12px 24px;cursor:pointer;font-size:14px;font-weight:700;font-family:'Inter',sans-serif;display:none;margin-top:14px}
.quiz-next-btn.show{display:inline-block}
.quiz-next-btn:hover{background:var(--ch-gold-deep);color:#fff}
.quiz-rationale{margin-top:14px;background:rgba(255,255,255,.08);border-left:3px solid var(--ch-gold);padding:14px 18px;border-radius:0 10px 10px 0;font-size:13.5px;line-height:1.6;color:#E9DBB5;font-style:italic}
.quiz-rationale strong{font-style:normal;color:#fff}

/* QUIZ PASS/FAIL */
.quiz-pass{text-align:center;padding:20px 10px}
.quiz-pass-banner{background:linear-gradient(135deg,var(--ch-fairway) 0%,var(--ch-gold) 100%);color:#fff;padding:28px 22px;border-radius:14px;margin-bottom:20px}
.quiz-pass-banner h3{font-family:'Bebas Neue',sans-serif;color:#fff;font-size:2rem;letter-spacing:.04em;margin-bottom:6px}
.quiz-pass-emoji{font-size:2.4rem;display:block;margin-bottom:8px}
.quiz-cert{background:#fff;border:2px solid var(--ch-gold);border-radius:14px;padding:28px 24px;margin:18px 0;text-align:center}
.quiz-cert-lockup{font-family:'Fraunces',serif;font-size:.95rem;color:var(--ch-text-muted);letter-spacing:.04em;margin-bottom:6px}
.quiz-cert-brand{font-family:'Bebas Neue',sans-serif;font-size:2.4rem;color:var(--ch-fairway-deep);letter-spacing:.04em;margin-bottom:14px}
.quiz-cert-name-input{width:100%;max-width:380px;padding:12px 16px;font-size:1rem;border:2px solid var(--ch-gold);border-radius:8px;font-family:'Fraunces',serif;text-align:center;margin:8px auto 14px;display:block;color:var(--ch-fairway-deep);background:var(--ch-cream-light)}
.quiz-cert-passed-badge{display:inline-block;background:var(--ch-fairway);color:#fff;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;padding:4px 14px;border-radius:14px;margin:10px 0;font-weight:700}
.cert-stats{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin:16px 0}
.cert-stat{background:var(--ch-cream-light);border:1px solid rgba(201,162,78,.3);border-radius:8px;padding:10px}
.cert-stat-num{font-family:'Bebas Neue',sans-serif;font-size:1.6rem;color:var(--ch-fairway-deep);line-height:1}
.cert-stat-lbl{font-family:'DM Mono',monospace;font-size:10px;color:var(--ch-fairway);text-transform:uppercase;letter-spacing:.08em;margin-top:2px}
.cert-track{font-family:'DM Mono',monospace;font-size:11px;color:var(--ch-text-muted);text-transform:uppercase;letter-spacing:.08em;margin:10px 0}
.cert-actions{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:24px}
.cert-actions button{background:var(--ch-fairway);color:#fff;border:none;padding:12px 22px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;display:inline-flex;align-items:center;gap:8px;transition:transform .15s,box-shadow .15s}
.cert-actions button.secondary{background:var(--ch-cream-light);color:var(--ch-fairway-deep);border:none}
.cert-actions button:hover{background:var(--ch-fairway-deep);color:#fff;transform:translateY(-2px);box-shadow:0 6px 16px rgba(45,90,61,.35)}
.cert-actions button.secondary:hover{background:#fff;color:var(--ch-fairway-deep);box-shadow:0 6px 16px rgba(201,162,78,.4)}
.cert-note{font-size:11.5px;color:var(--ch-text-muted);font-style:italic;margin-top:14px}

.quiz-fail{text-align:center;padding:20px 10px;background:rgba(184,57,31,.07);border:2px solid rgba(184,57,31,.3);border-radius:14px}
.quiz-fail h3{font-family:'Bebas Neue',sans-serif;color:var(--ch-danger);font-size:1.8rem;letter-spacing:.04em;margin-bottom:8px}
.quiz-fail-emoji{font-size:2.4rem;display:block;margin-bottom:8px}
.quiz-fail-score{font-family:'Bebas Neue',sans-serif;color:var(--ch-danger);font-size:2.4rem;line-height:1;margin:8px 0 14px}
.quiz-fail p{font-size:13.5px;line-height:1.6;color:var(--ch-text)}
.quiz-fail .cert-actions button{background:var(--ch-danger)}
.quiz-fail .cert-actions button:hover{background:#8B2815}
.name-printed{display:none}

/* QUIZ SECTION — dark dramatic standout (Pizza Pack pattern, Clean & Hit palette) */
#quiz{background:linear-gradient(135deg,var(--ch-fairway) 0%,var(--ch-fairway-deep) 100%);color:#fff;border-radius:20px;padding:0;margin-top:40px;overflow:hidden;border:none;box-shadow:0 8px 32px rgba(22,56,32,.22)}
#quiz .card,#quiz > .card{background:transparent!important;border:none!important;box-shadow:none!important;padding:0!important;margin:0!important;color:#fff}
#quiz h2{color:#fff!important;font-family:'Fraunces',serif;border:none!important;margin:0;padding:0}
#quiz .eyebrow{color:var(--ch-gold)!important}
#quiz .section-header-bar{background:transparent;padding:32px 30px 20px;border-bottom:1px solid rgba(201,162,78,.18)}
#quiz .section-header-bar:hover{background:rgba(255,255,255,.04)}
#quiz .section-toggle{border-color:var(--ch-gold)!important;color:var(--ch-gold)!important;background:transparent!important}
#quiz .section-toggle:hover{background:var(--ch-gold)!important;color:var(--ch-fairway-deep)!important}
#quiz .collapsible.collapsed .section-header-bar{border-bottom:none;border-color:transparent}
#quiz .section-body{padding:20px 30px 40px;background:transparent;color:#fff}
#quiz .section-body p{color:#E9DBB5}
#quiz .section-body p strong{color:var(--ch-gold-bright)}
#quiz #quiz-intro p{color:#E9DBB5;font-size:15px;line-height:1.7}
#quiz .quiz-container{background:rgba(255,255,255,.07);border-radius:14px;padding:28px;margin-top:20px;border:1px solid rgba(201,162,78,.3)}
#quiz .quiz-progress{font-family:'DM Mono',monospace;font-size:12px;color:var(--ch-gold);letter-spacing:.1em;margin-bottom:16px;text-transform:uppercase;display:flex;justify-content:space-between;align-items:center}
#quiz .quiz-progress-bar{height:6px;background:rgba(255,255,255,.12);border-radius:3px;overflow:hidden;margin-bottom:22px}
#quiz .quiz-progress-fill{height:100%;background:var(--ch-gold);transition:width .4s cubic-bezier(.4,0,.2,1);border-radius:3px}
#quiz .quiz-question{font-family:'Fraunces',serif;font-size:1.3rem;font-weight:700;margin-bottom:22px;line-height:1.35;color:#fff}
#quiz .quiz-options{display:flex;flex-direction:column;gap:10px}
#quiz .quiz-option{background:rgba(255,255,255,.06);border:2px solid rgba(201,162,78,.3);color:#fff;padding:14px 18px;border-radius:10px;text-align:left;font-size:14px;cursor:pointer;transition:all .2s;font-family:inherit;display:flex;align-items:center;gap:12px;width:100%}
#quiz .quiz-option:hover:not(:disabled){background:rgba(201,162,78,.18);border-color:var(--ch-gold);transform:translateX(4px)}
#quiz .quiz-option.correct,#quiz .quiz-option.show-correct{background:#FEF9E7;border-color:var(--ch-gold);color:var(--ch-fairway-deep);font-weight:700;box-shadow:0 0 0 3px rgba(201,162,78,.4)}
#quiz .quiz-option.incorrect,#quiz .quiz-option.wrong{background:rgba(184,57,31,.85);border-color:#fff;color:#fff;font-weight:700}
#quiz .quiz-option.dimmed{opacity:.35}
#quiz .quiz-option.disabled{cursor:default}
#quiz .quiz-option.disabled:hover{transform:none;background:rgba(255,255,255,.06);border-color:rgba(201,162,78,.3)}
#quiz .quiz-option.correct:hover,#quiz .quiz-option.show-correct:hover,#quiz .quiz-option.wrong:hover,#quiz .quiz-option.incorrect:hover{transform:none}
#quiz .quiz-option:disabled:not(.correct):not(.show-correct):not(.incorrect):not(.wrong){opacity:.35}
#quiz .quiz-start-btn,#quiz .quiz-next-btn{background:var(--ch-gold);color:var(--ch-fairway-deep);border:none;padding:14px 28px;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;margin-top:18px;transition:transform .15s,box-shadow .15s;letter-spacing:.02em;display:none}
#quiz .quiz-start-btn{display:inline-block}
#quiz .quiz-next-btn.show{display:inline-block}
#quiz .quiz-start-btn:hover,#quiz .quiz-next-btn:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(201,162,78,.45)}
#quiz .quiz-cert,#quiz .quiz-cert *{color:var(--ch-fairway-deep)}
#quiz .quiz-cert{color:var(--ch-fairway-deep)}
#quiz .quiz-cert .quiz-cert-passed-badge{color:#fff}
#quiz .quiz-cert .cert-actions button{color:#fff}
#quiz .quiz-cert .cert-actions button.secondary{color:var(--ch-fairway-deep)}
#quiz .quiz-pass-banner{background:linear-gradient(135deg,var(--ch-fairway) 0%,var(--ch-gold) 100%);padding:28px;border-radius:12px;text-align:center;margin-bottom:18px;color:#fff}
#quiz .quiz-pass-banner h3{color:#fff;margin:8px 0 0;font-family:'Fraunces',serif;font-size:1.7rem}
#quiz .quiz-pass-emoji{font-size:3rem;display:inline-block;line-height:1}
#quiz .quiz-fail{background:rgba(255,255,255,.08);padding:28px;border-radius:12px;text-align:center;color:#fff;border:1px solid rgba(184,57,31,.4)}
#quiz .quiz-fail-emoji{font-size:3rem;display:inline-block;line-height:1}
#quiz .quiz-fail h3{color:#fff;margin:8px 0;font-family:'Fraunces',serif}
#quiz .quiz-fail p{color:#E9DBB5}
#quiz .quiz-fail-score{font-family:'Bebas Neue',sans-serif;font-size:2rem;color:var(--ch-gold)}

/* PRINTING */
body.printing #top-nav,
body.printing #floating-toc-btn,
body.printing #toc-drawer-overlay,
body.printing #toc-drawer,
body.printing .section-toggle,
body.printing #search-results,
body.printing #toc-section,
body.printing .cert-actions{display:none!important}
body.printing #quiz-container .quiz-cert-name-input{display:none!important}
body.printing #quiz-container .name-printed{display:block!important;font-family:'Fraunces',serif;font-size:1.4rem;color:var(--ch-fairway-deep);font-weight:700;margin:8px 0 14px;border-bottom:2px solid var(--ch-gold);padding-bottom:6px;display:inline-block}
body.printing section{page-break-inside:avoid}
body.printing .collapsed .section-body{max-height:none!important;padding:10px 30px 30px!important;opacity:1!important}
@media print{
  #top-nav,#floating-toc-btn,#toc-drawer-overlay,#toc-drawer,.section-toggle,#search-results,#toc-section,.cert-actions{display:none!important}
  body{background:#fff}
  .card{box-shadow:none;border:1px solid #ddd}
  .collapsed .section-body{max-height:none!important;padding:10px 30px 30px!important;opacity:1!important}
  *{print-color-adjust:exact;-webkit-print-color-adjust:exact}
}

/* MISC */
ul,ol{margin-left:22px;margin-bottom:14px}
li{margin-bottom:6px;line-height:1.55}
hr.divider{border:none;border-top:2px dashed rgba(201,162,78,.5);margin:28px 0}
.callout-row{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:14px}
.note{background:var(--ch-cream-light);border:1px dashed var(--ch-fairway-light);border-radius:8px;padding:12px 16px;font-size:13px;color:var(--ch-text-muted);font-style:italic;margin:10px 0}
</style>
<?php bh_favicon_tags(); ?>
</head>
<body>

<!-- TOP NAV -->
<div id="top-nav">
  <div class="nav-inner">
    <span class="nav-brand">Clean &amp; Hit · Hub</span>
    <div class="nav-search-wrap">
      <svg class="nav-search-icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      <input type="text" id="hub-search" class="nav-search" placeholder="Search hub… (press / )" autocomplete="off">
      <div id="search-results"></div>
    </div>
    <button class="nav-top-toc-btn" onclick="openDrawer()">☰ Menu</button>
  </div>
</div>

<!-- FLOATING TOC BUTTON -->
<button id="floating-toc-btn" onclick="openDrawer()" aria-label="Open table of contents">
  <svg viewBox="0 0 24 24"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
</button>

<!-- TOC DRAWER -->
<div id="toc-drawer-overlay" onclick="closeDrawer()"></div>
<aside id="toc-drawer" aria-label="Table of contents">
  <div class="toc-drawer-header">
    <span class="toc-drawer-title">Table of Contents</span>
    <button class="toc-drawer-close" onclick="closeDrawer()" aria-label="Close">×</button>
  </div>
  <nav id="toc-drawer-nav">
    <a href="#hero" onclick="closeDrawer()"><span class="toc-drawer-num">00</span><span class="toc-drawer-label">Brand Hub Home</span></a>
    <a href="#overview" onclick="closeDrawer()"><span class="toc-drawer-num">01</span><span class="toc-drawer-label">Brand Overview</span></a>
    <a href="#products" onclick="closeDrawer()"><span class="toc-drawer-num">02</span><span class="toc-drawer-label">Product Line</span></a>
    <a href="#mission" onclick="closeDrawer()"><span class="toc-drawer-num">03</span><span class="toc-drawer-label">Vision, Mission &amp; Pillars</span></a>
    <a href="#voice" onclick="closeDrawer()"><span class="toc-drawer-num">04</span><span class="toc-drawer-label">Brand Voice &amp; Tone</span></a>
    <a href="#personality" onclick="closeDrawer()"><span class="toc-drawer-num">05</span><span class="toc-drawer-label">Personality &amp; Adjectives</span></a>
    <a href="#visual" onclick="closeDrawer()"><span class="toc-drawer-num">06</span><span class="toc-drawer-label">Visual Identity</span></a>
    <a href="#audience" onclick="closeDrawer()"><span class="toc-drawer-num">07</span><span class="toc-drawer-label">Target Audience &amp; Personas</span></a>
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
      <img src="https://cleanandhit.com/cdn/shop/files/clean-and-hit-logo.png" alt="Clean and Hit logo" onerror="this.dataset.failed='1'">
      <span class="hero-brand-text-fallback">CLEAN &amp; HIT</span>
    </div>
    <h1>Clean &amp; Hit</h1>
    <p class="hero-tagline">Hit it pure, every shot. The motorized club-face cleaner built for the course.</p>
    <p class="hero-meta">cleanandhit.com · Inventel Partner Brand · Partnership launched 2026 · PGA Show 2025 debut</p>
    <div class="hero-stats">
      <div class="hero-stat"><div class="hero-stat-num">2</div><div class="hero-stat-lbl">Years in development before PGA Show debut</div></div>
      <div class="hero-stat"><div class="hero-stat-num">1</div><div class="hero-stat-lbl">Hero SKU — the on-course cleaning tool</div></div>
      <div class="hero-stat"><div class="hero-stat-num">USB</div><div class="hero-stat-lbl">Rechargeable, motorized reversible brush</div></div>
      <div class="hero-stat"><div class="hero-stat-num">2026</div><div class="hero-stat-lbl">Year Inventel partnered with the brand</div></div>
    </div>
    <div class="chip-row">
      <a class="chip" href="https://cleanandhit.com/" target="_blank" rel="noopener">🌐 cleanandhit.com</a>
      <a class="chip" href="https://cleanandhit.com/collections/all" target="_blank" rel="noopener">🛒 Shop All</a>
      <a class="chip" href="https://www.instagram.com/cleanandhit/" target="_blank" rel="noopener">📷 @cleanandhit</a>
      <a class="chip" href="https://www.tiktok.com/@clean.and.hit" target="_blank" rel="noopener">🎵 TikTok</a>
      <a class="chip" href="https://www.facebook.com/share/1TEpfJFSUh/" target="_blank" rel="noopener">👍 Facebook</a>
      <a class="chip" href="https://www.youtube.com/channel/UCQOO1pgAXCf8PHTeD1ZDoZA" target="_blank" rel="noopener">▶️ YouTube</a>
      <a class="chip" href="mailto:support@cleanhit.com" target="_blank" rel="noopener">✉️ support@cleanhit.com</a>
      <a class="chip" href="tel:8005551234" target="_blank" rel="noopener">📞 800-555-1234</a>
    </div>
    <div class="tag-row">
      <span class="tag tag-inventel">Inventel Partner Brand</span>
      <span class="tag tag-new">2026 Partnership</span>
      <span class="tag">Single Hero SKU</span>
      <span class="tag">Pre-Launch / Early Sales</span>
      <span class="tag">Made in USA</span>
    </div>
  </div>
</section>

<!-- TABLE OF CONTENTS -->
<section id="toc-section">
  <div class="card collapsible" data-section="toc">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">Table of Contents</span>
        <h2>What's in this Hub</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
      <p>The Clean &amp; Hit Brand Hub is the single source of truth for everyone who touches this brand — CX, Creative, Marketing, Brand, and new hires. Each section below is collapsible. Use the search bar at the top, the floating menu button at the bottom-right, or click any tile to jump.</p>
      <div class="toc-grid">
        <a href="#overview" class="toc-tile"><span class="toc-tile-num">01</span><span class="toc-tile-label">Brand Overview</span></a>
        <a href="#products" class="toc-tile"><span class="toc-tile-num">02</span><span class="toc-tile-label">Product Line</span></a>
        <a href="#mission" class="toc-tile"><span class="toc-tile-num">03</span><span class="toc-tile-label">Vision, Mission &amp; Pillars</span></a>
        <a href="#voice" class="toc-tile"><span class="toc-tile-num">04</span><span class="toc-tile-label">Brand Voice &amp; Tone</span></a>
        <a href="#personality" class="toc-tile"><span class="toc-tile-num">05</span><span class="toc-tile-label">Personality &amp; Adjectives</span></a>
        <a href="#visual" class="toc-tile"><span class="toc-tile-num">06</span><span class="toc-tile-label">Visual Identity</span></a>
        <a href="#audience" class="toc-tile"><span class="toc-tile-num">07</span><span class="toc-tile-label">Audience &amp; Personas</span></a>
        <a href="#competitors" class="toc-tile"><span class="toc-tile-num">08</span><span class="toc-tile-label">Competitors &amp; Positioning</span></a>
        <a href="#objections" class="toc-tile"><span class="toc-tile-num">09</span><span class="toc-tile-label">Objection Handling</span></a>
        <a href="#journey" class="toc-tile"><span class="toc-tile-num">10</span><span class="toc-tile-label">Customer Journey</span></a>
        <a href="#angles" class="toc-tile"><span class="toc-tile-num">11</span><span class="toc-tile-label">Marketing Angles &amp; Hooks</span></a>
        <a href="#creatives" class="toc-tile"><span class="toc-tile-num">12</span><span class="toc-tile-label">Sample Winning Creatives</span></a>
        <a href="#social" class="toc-tile"><span class="toc-tile-num">14</span><span class="toc-tile-label">Social Media &amp; Channels</span></a>
        <a href="#partnerships" class="toc-tile"><span class="toc-tile-num">15</span><span class="toc-tile-label">Partnerships &amp; Influencers</span></a>
        <a href="#discounts" class="toc-tile"><span class="toc-tile-num">16</span><span class="toc-tile-label">Discounts &amp; Promo Codes</span></a>
        <a href="#seo" class="toc-tile"><span class="toc-tile-num">17</span><span class="toc-tile-label">SEO</span></a>
        <a href="#cro" class="toc-tile"><span class="toc-tile-num">18</span><span class="toc-tile-label">CRO</span></a>
        <a href="#glossary" class="toc-tile"><span class="toc-tile-num">19</span><span class="toc-tile-label">Glossary</span></a>
        <a href="#returns" class="toc-tile"><span class="toc-tile-num">20</span><span class="toc-tile-label">Return Policy</span></a>
        <a href="#fulfillment" class="toc-tile"><span class="toc-tile-num">21</span><span class="toc-tile-label">Fulfillment &amp; Shipping</span></a>
        <a href="#testorders" class="toc-tile"><span class="toc-tile-num">22</span><span class="toc-tile-label">Test Orders</span></a>
        <a href="#shopify" class="toc-tile"><span class="toc-tile-num">23</span><span class="toc-tile-label">Shopify Platform</span></a>
        <a href="#faq" class="toc-tile"><span class="toc-tile-num">24</span><span class="toc-tile-label">FAQ</span></a>
        <a href="#resources" class="toc-tile"><span class="toc-tile-num">25</span><span class="toc-tile-label">Resources &amp; Contacts</span></a>
        <a href="#quiz" class="toc-tile"><span class="toc-tile-num">26</span><span class="toc-tile-label">Knowledge Check Quiz</span></a>
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
        <h2>Who Clean &amp; Hit Is</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <div class="team-callout newhire">
        <span class="team-tag">👋 New Hire · Start Here</span>
        <p><strong>The 60-second version:</strong> Clean &amp; Hit makes a single product — a portable, USB-rechargeable, motorized brush that cleans the face and grooves of a golf club. It either stands on the ground (anchored by spikes) or mounts to the back of a golf cart, so a golfer can clean their clubs anywhere on the course without bending over to fish a wet towel out of their bag. Founder Darrin Vaughan is a New Jersey scratch golfer who spent two years developing it. <strong>Inventel partnered with the brand in 2026</strong> — Clean &amp; Hit remains its own company; we work alongside the founder, not over him. Background on the public launch: <a href="https://www.einpresswire.com/article/775138130/clean-and-hit-debuts-at-pga-show-2025-the-revolutionary-golf-tool-for-precision-play" target="_blank" rel="noopener">PGA Show 2025 debut in Orlando</a>.</p>
        <p><strong>The single thing to remember on day one:</strong> dirty club faces ruin shots. Dirt and grass in the grooves kill spin, kill distance, and kill accuracy. Clean &amp; Hit fixes that in 5 seconds without the customer ever stopping their round. Everything else — the brand voice, the objection scripts, the creative — flows from that one promise.</p>
      </div>

      <h3>Founding story</h3>
      <p>Clean &amp; Hit was invented by <strong>Darrin Vaughan</strong>, a senior player and scratch golfer based in New Jersey. After years of watching the same problem play out on every round — golfers pulling damp, dirty towels off their bags or skipping cleaning altogether and then wondering why their wedge shot didn't bite the green — he set out to build a tool a golfer could actually use mid-round, without breaking pace of play.</p>
      <p>The product was developed in the United States over <strong>two years</strong>, working through prototypes with the help of golf-industry contacts. It debuted publicly at <strong>Booth #3815 at the 2025 PGA Show in Orlando</strong> in January 2025, alongside celebrity golf host <strong>Beau Rials</strong>, who came on as the brand's first ambassador.</p>

      <h3>What makes the brand different</h3>
      <p>The golf-cleaning category is mostly cheap brushes, towels, and squeezy water bottles that have looked roughly the same since the 1970s. Clean &amp; Hit is the first product in the category to combine a <strong>motorized reversible brush</strong> (so left- and right-handed golfers both get the right rotation), <strong>ground spikes for stability</strong> (the unit stands up on its own and won't tip when a 7-iron presses into it), and a <strong>cart-mountable, USB-rechargeable form factor</strong>. It's the difference between a brush you have to find, wet, and use both hands on, versus a tool that's already powered up and waiting on the back of your cart.</p>

      <h3>Inventel partnership</h3>
      <p>Inventel partnered with Clean &amp; Hit in <strong>2026</strong> — making it our newest partner brand at the time this hub was written. Clean &amp; Hit remains its own company, and Darrin Vaughan continues to lead it as founder; Inventel works alongside the team to bring our scale, fulfillment, marketing, and CX infrastructure to a brand that built a great product and now wants to grow it. We came in because the founder built something genuinely better in a sleepy category, the product is patented, and it has a clear B2B path (pro shops, course cart fleets) on top of the direct-to-consumer business. It's also our first partnership in the golf vertical, which sits adjacent to the outdoor-recreation positioning we already know how to operate.</p>

      <div class="team-callout brand">
        <span class="team-tag">🌿 Brand · Partner, not parent</span>
        <p>When you're talking about Clean &amp; Hit internally or externally, the right framing is <strong>"our partner brand"</strong> or <strong>"a brand we work with"</strong> — never "our brand" in a way that erases the founder, and never "our acquisition." Darrin and the original Clean &amp; Hit team are still in the driver's seat on product and brand decisions. Inventel's role is operational scale: warehouse, CX, paid media, retention, B2B sales infrastructure. Get that framing right and the founder relationship stays healthy.</p>
      </div>

      <div class="team-callout brand">
        <span class="team-tag">🌿 Brand · Two audiences, one story</span>
        <p>Clean &amp; Hit sells to <strong>two audiences with the same pitch</strong>: weekend golfers who care about their game (DTC, Shopify), and pro shops &amp; course operators who want it on cart fleets (B2B). Don't write copy that picks one and abandons the other — the lead always opens with "clean clubs hit better" and only branches into the cart-fleet angle in B2B contexts. If you're writing a paid ad, write to the golfer. If you're writing a wholesale email, lead with the cart fleet ROI.</p>
      </div>

      <div class="tag-row">
        <span class="tag tag-inventel">Inventel Partner Brand</span>
        <span class="tag tag-new">2026 Partnership</span>
        <span class="tag">Single SKU</span>
        <span class="tag">DTC + B2B</span>
        <span class="tag">Made in USA</span>
        <span class="tag">Patented</span>
        <span class="tag">PGA Show 2025 debut</span>
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

      <p>Clean &amp; Hit is currently a <strong>single-SKU brand</strong>. There is one hero product and there are no accessories, refills, or sub-variants in market as of the latest catalog snapshot. Always confirm SKU details against the live store at <a href="https://cleanandhit.com/" target="_blank" rel="noopener">cleanandhit.com</a> — do not quote pricing or specs from memory or from third-party sites like Amazon.</p>

      <div class="alert-callout">
        <span class="alert-callout-title">⚠ Don't confuse with the Australian "Clean Hit"</span>
        <p>There is an unrelated, older Australian product also branded "Clean Hit" — a manual squeeze-bottle brush sold on Amazon. <strong>It is not our product.</strong> If a customer references "Clean Hit" with a screenshot of a manual brush, they probably bought the wrong thing. Confirm by asking whether their unit is motorized, USB-rechargeable, and has ground spikes — those three features identify ours.</p>
      </div>

      <h3>Hero SKU — Clean &amp; Hit Motorized Club-Face Cleaner</h3>

      <div class="product-hero">
        <div class="product-hero-img">
          <img src="data:image/webp;base64,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" alt="Clean and Hit motorized golf club-face cleaner shown on the green next to a flagstick" class="product-hero-photo">
</div>
        <div class="product-hero-content">
          <h3>Clean &amp; Hit</h3>
          <p class="product-hero-tagline">The portable, motorized golf club-face cleaner.</p>
          <p>A USB-rechargeable, motorized brush with a reversible direction (so it works for left- and right-handed golfers without bristle wear), ground spikes for free-standing stability, and a form factor designed to mount on the back of a cart or stand on the ground next to the tee box.</p>
          <p>The customer's job is one motion: hold the dirty club face against the spinning brush for 3–5 seconds. Grooves come out clean, dirt and grass clear, and the next swing is the same shot the manufacturer engineered the club to deliver.</p>
          <div class="product-badge-row">
            <span class="tag">Motorized</span>
            <span class="tag">Reversible Brush</span>
            <span class="tag">USB Rechargeable</span>
            <span class="tag">Ground Spikes</span>
            <span class="tag">Cart-Mountable</span>
            <span class="tag">Made in USA</span>
            <span class="tag">Patented</span>
          </div>
        </div>
      </div>

      <h3>Specifications &amp; key features</h3>
      <div class="spec-table">
        <dl>
          <dt>Product type</dt>
          <dd>Portable motorized golf club-face cleaning tool</dd>
          <dt>Power</dt>
          <dd>Internal rechargeable battery, USB charging</dd>
          <dt>Brush</dt>
          <dd><strong>Motorized, reversible</strong> — direction can flip for left- and right-handed players, even bristle wear, doesn't damage the club face</dd>
          <dt>Stability</dt>
          <dd><strong>Ground spikes</strong> for free-standing use; <strong>cart-mountable</strong> on the back of a golf cart</dd>
          <dt>Build</dt>
          <dd>Designed for heavy on-course use; durable construction (manufactured in the United States)</dd>
          <dt>Use cases</dt>
          <dd>Between holes (cart-mounted) · before each shot from the bag · range warm-up · post-round full clean</dd>
          <dt>Status</dt>
          <dd>In market — launched at PGA Show 2025; current production SKU</dd>
        </dl>
      </div>

      <div class="feature-grid">
        <div class="feature-tile"><span class="feature-tile-icon">⚡</span><h4>Motorized brush</h4><p>The customer doesn't scrub — they just hold the club face to the brush. Grooves clean in 3–5 seconds.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">↔️</span><h4>Reversible direction</h4><p>Flip rotation for left- vs right-handed players. Avoids one-side bristle wear and keeps cleaning even.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🔌</span><h4>USB-rechargeable</h4><p>One charge lasts a round (or several). No batteries to replace, no proprietary adapter.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">⛳</span><h4>Ground spikes</h4><p>Stands on its own next to the tee box. Won't tip when a club presses against it.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🛺</span><h4>Cart-mountable</h4><p>Mounts to the back of a golf cart so it's available for every hole without rummaging through the bag.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🇺🇸</span><h4>Made in USA</h4><p>Two years of US-based development; manufactured domestically for quality control.</p></div>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · The 5 questions to confirm a real customer</span>
        <p>Because there's a confusingly similar Australian "Clean Hit" brush sold on Amazon, the first thing CX should confirm before processing any return, replacement, or warranty claim is: <strong>(1)</strong> Is your unit motorized? <strong>(2)</strong> Did you charge it with a USB cable? <strong>(3)</strong> Does it have ground spikes? <strong>(4)</strong> Where did you buy it — cleanandhit.com? <strong>(5)</strong> Do you have an order number? If they answer no to (1)–(3), they don't have our product and the right move is to politely explain we're a different brand and we can't process a return for a competitor's item.</p>
      </div>

    </div>
  </div>
</section>

<!-- 3 · VISION, MISSION & PILLARS -->
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
      <blockquote style="border-left:4px solid var(--ch-gold);padding:14px 22px;background:var(--ch-cream);font-family:'Fraunces',serif;font-size:1.15rem;font-style:italic;color:var(--ch-fairway-deep);margin:14px 0">"Every golfer, on every shot, with clean clubs — so the only thing standing between them and a great round is their swing."</blockquote>

      <h3>Mission</h3>
      <blockquote style="border-left:4px solid var(--ch-fairway);padding:14px 22px;background:var(--ch-cream);font-family:'Fraunces',serif;font-size:1.05rem;font-style:italic;color:var(--ch-fairway-deep);margin:14px 0">"Build a single, brilliantly engineered cleaning tool that fits in a golfer's day — on the cart, by the tee box, in the trunk — so taking care of equipment becomes effortless instead of an afterthought."</blockquote>

      <h3>Brand pillars</h3>
      <p>The four pillars below govern every decision Brand and Marketing make. If a piece of work doesn't ladder to one of these, it's off-strategy.</p>
      <div class="pillars">
        <div class="pillar"><span class="pillar-icon">🎯</span><h4>Precision is the product</h4><p>Clean grooves are the difference between a shot that bites and a shot that rolls past. Every message returns to that performance promise.</p></div>
        <div class="pillar"><span class="pillar-icon">⛳</span><h4>Made for the course, not the closet</h4><p>This is a tool a golfer uses <em>during</em> the round, not after. Portability, durability, and one-handed use are non-negotiable.</p></div>
        <div class="pillar"><span class="pillar-icon">👨‍🔧</span><h4>Built by golfers</h4><p>Founder Darrin Vaughan is a scratch player. The product was prototyped on the course, not in a marketing meeting. We sound like golfers because we are.</p></div>
        <div class="pillar"><span class="pillar-icon">🏆</span><h4>Tournament-grade in everyone's hands</h4><p>Pros have always had clean clubs because they have caddies. Clean &amp; Hit gives the same standard of equipment care to every golfer — weekend hacker to club champion.</p></div>
        <div class="pillar"><span class="pillar-icon">🇺🇸</span><h4>American-made quality</h4><p>Two years of US-based engineering. We stand behind the build because we control it. This shows up in tone — quietly proud, never jingoistic.</p></div>
      </div>

      <div class="team-callout brand">
        <span class="team-tag">🌿 Brand · The pillar test</span>
        <p>Before any campaign, ad, email, or PR pitch goes live, ask: <em>"Which pillar does this ladder to?"</em> If the answer is none, or "kind of all of them," the work isn't ready. The strongest Clean &amp; Hit communication picks <strong>one</strong> pillar and goes deep — a paid social ad about precision should not also try to be about American manufacturing. Pick a lane.</p>
      </div>

    </div>
  </div>
</section>

<!-- 4 · BRAND VOICE & TONE -->
<section id="voice">
  <div class="card collapsible" data-section="voice">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">04 · Voice &amp; Tone</span>
        <h2>How Clean &amp; Hit Sounds</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Clean &amp; Hit sounds like <strong>a knowledgeable golfer talking to another golfer</strong> — confident, precise, gear-literate, but never snobby. We respect the customer's intelligence and their time. We don't try to be funny, we don't lean into nostalgia, and we never sell the sizzle ahead of the steak. The product does serious work, and the voice reflects that.</p>

      <h3>Six tone modes</h3>
      <p>Same voice, different volume. Most copy lives in the first two modes; the others are situational.</p>
      <div class="tone-grid">
        <div class="tone"><div class="tone-label">1 · Confident performance</div><div class="tone-desc">Default for product copy, paid ads, email subject lines. Lead with the outcome, not the feature.</div><div class="tone-ex">"Clean grooves. Better spin. Lower scores."</div></div>
        <div class="tone"><div class="tone-label">2 · Knowledgeable peer</div><div class="tone-desc">For PDPs, blog content, organic social. Talk like a 12-handicap who's read every issue of Golf Digest.</div><div class="tone-ex">"Mud in your wedge grooves doesn't just look bad — it kills the spin you need to hold the green."</div></div>
        <div class="tone"><div class="tone-label">3 · Quietly proud</div><div class="tone-desc">For brand stories, founder voice, "Made in USA" moments. Never boastful, never apologetic.</div><div class="tone-ex">"Two years of prototyping in New Jersey before it ever made it to the course."</div></div>
        <div class="tone"><div class="tone-label">4 · Practical &amp; direct</div><div class="tone-desc">For CX, returns, FAQ, troubleshooting. Short sentences. Active voice. No marketing-speak.</div><div class="tone-ex">"If your unit isn't holding a charge, contact us at hello@cleanandhit.com with your order number and we'll replace it."</div></div>
        <div class="tone"><div class="tone-label">5 · Course-side conversational</div><div class="tone-desc">For organic social and influencer content. Looser, more rhythm, the way golfers actually talk.</div><div class="tone-ex">"Yeah it works. No, you don't need the towel anymore. Yes, your wedge will thank you."</div></div>
        <div class="tone"><div class="tone-label">6 · B2B / professional</div><div class="tone-desc">For pro shop and cart-fleet outreach. Outcomes-oriented, ROI-aware, no hype.</div><div class="tone-ex">"Equip your fleet with a cleaning tool that protects your cart investment and elevates the rental experience."</div></div>
      </div>

      <h3>Taglines &amp; recurring lines</h3>
      <ul>
        <li><strong>Primary tagline:</strong> "Hit it pure, every shot."</li>
        <li><strong>Performance line:</strong> "Clean grooves. Better spin. Lower scores."</li>
        <li><strong>Use-case line:</strong> "Mounted on the cart, ready every hole."</li>
        <li><strong>Founder line:</strong> "Designed by a scratch golfer. Built for every golfer."</li>
        <li><strong>B2B line:</strong> "Tournament-grade equipment care for your entire fleet."</li>
      </ul>

      <h3>Do's &amp; Don'ts</h3>
      <div class="do-dont">
        <div class="do">
          <h4>Do</h4>
          <ul>
            <li>Lead with the performance benefit (spin, distance, accuracy)</li>
            <li>Use real golf terminology (grooves, wedge, lie, bite, spin)</li>
            <li>Show the product in actual on-course situations</li>
            <li>Reference specific clubs (wedges, irons) where it changes the message</li>
            <li>Speak to the golfer, not "people who play golf"</li>
            <li>Quote the founder when it adds credibility</li>
          </ul>
        </div>
        <div class="dont">
          <h4>Don't</h4>
          <ul>
            <li>Use generic "cleaner" language that could apply to any brush</li>
            <li>Make jokes about bad golfers — our customer cares about their game</li>
            <li>Lean on stuffy country-club imagery (clubhouses, ascots, martinis)</li>
            <li>Promise the product will fix a swing — it cleans clubs, that's the promise</li>
            <li>Compare directly to specific competitors by name in paid copy</li>
            <li>Use "revolutionary" or "game-changing" without earning it — the product earns it; the words don't have to</li>
          </ul>
        </div>
      </div>

      <h3>Language guidance</h3>
      <ul>
        <li><strong>Use:</strong> club face, grooves, spin, bite, distance, accuracy, line, contact, wedge, iron, on-course, mid-round, cart-mounted, USB-rechargeable, motorized, reversible</li>
        <li><strong>Avoid:</strong> "miracle," "secret weapon," "pro-only," "revolutionary breakthrough," "game-changer," anything that sounds like a 2 AM infomercial</li>
      </ul>

      <h3>Channel tone snapshot</h3>
      <table>
        <thead><tr><th>Channel</th><th>Primary tone mode</th><th>What it sounds like</th></tr></thead>
        <tbody>
          <tr><td>Paid social (Meta, TikTok)</td><td>Confident performance + Course-side conversational</td><td>Hook + clear benefit + visible result, in 6 seconds</td></tr>
          <tr><td>Email (newsletter)</td><td>Knowledgeable peer</td><td>Useful golf content, product in service of the content, soft CTA</td></tr>
          <tr><td>SMS</td><td>Practical &amp; direct</td><td>Short, specific, time-sensitive when it earns it</td></tr>
          <tr><td>PDP / shop</td><td>Confident performance</td><td>Outcome → feature → proof, in that order</td></tr>
          <tr><td>Organic social (Instagram, TikTok)</td><td>Course-side conversational</td><td>Real golfers, real courses, no studio shots</td></tr>
          <tr><td>CX / support</td><td>Practical &amp; direct</td><td>Acknowledge → solve → confirm. No corporate apologies.</td></tr>
          <tr><td>B2B (pro shops, courses)</td><td>B2B / professional</td><td>ROI, fleet maintenance, customer experience</td></tr>
          <tr><td>PR / press</td><td>Quietly proud</td><td>Founder credibility, US manufacturing, PGA Show debut</td></tr>
        </tbody>
      </table>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · Voice trumps clever</span>
        <p>If you can't decide between a clever line and a clear line, ship the clear one. Clean &amp; Hit's customer is impatient — they're scrolling on their phone before a tee time, between shots, or in the cart between holes. Clarity converts; cleverness has to earn its way in. That said, when something genuinely funny happens organically (a famous golfer caught using it, a viral cleaning-fail video), lean in.</p>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · Match the tone to the moment</span>
        <p>The biggest tone mistake on this brand is using <strong>"Quietly proud"</strong> (founder/Made-in-USA voice) when the moment calls for <strong>"Confident performance"</strong> (lower your score). Save the heritage story for hero brand films, founder PR, and high-context email. For paid social, the customer needs to hear "this fixes the thing that's costing you strokes" — not "developed in New Jersey over two years." Both are true. Only one converts.</p>
      </div>

    </div>
  </div>
</section>

<!-- 5 · PERSONALITY & ADJECTIVES -->
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

      <p>If Clean &amp; Hit were a person, it would be a <strong>former club pro who runs a small, well-respected golf shop</strong> — knowledgeable, honest, doesn't waste your time, takes the game seriously but doesn't take themselves too seriously. They'll tell you the right wedge for your bag and they'll also tell you when your old one is fine.</p>

      <div class="adj-grid">
        <div class="adj"><div class="adj-word">Precise</div><div class="adj-desc">Specific about what the product does and doesn't do. No vague benefit claims.</div></div>
        <div class="adj"><div class="adj-word">Confident</div><div class="adj-desc">Owns its category leadership without bragging. The product is good; we don't need to oversell it.</div></div>
        <div class="adj"><div class="adj-word">Practical</div><div class="adj-desc">Designed for use, not display. Reflects in copy that's about doing, not aspiring.</div></div>
        <div class="adj"><div class="adj-word">Knowledgeable</div><div class="adj-desc">Speaks the language of golf fluently. Knows the difference between a U-groove and a V-groove.</div></div>
        <div class="adj"><div class="adj-word">Earnest</div><div class="adj-desc">No irony, no winks. We mean what we say about better play.</div></div>
        <div class="adj"><div class="adj-word">Polished</div><div class="adj-desc">Country-club presentation without country-club elitism. Looks expensive, feels accessible.</div></div>
        <div class="adj"><div class="adj-word">Resilient</div><div class="adj-desc">Built to take a beating in a golf bag, sun, and weather — and the brand voice should feel that durable too.</div></div>
        <div class="adj"><div class="adj-word">Inventive</div><div class="adj-desc">First brand in a 50-year-old category to bring real engineering to the problem.</div></div>
        <div class="adj"><div class="adj-word">Disciplined</div><div class="adj-desc">Doesn't chase trends, fads, or holiday gimmicks that don't fit the brand.</div></div>
        <div class="adj"><div class="adj-word">Welcoming</div><div class="adj-desc">For every handicap. The 30-handicap weekend hacker gets the same respect as the +2 club champion.</div></div>
      </div>

      <h3>Brand archetype</h3>
      <p>Clean &amp; Hit lands between <strong>The Sage</strong> (knowledgeable, expert, helps the customer perform better) and <strong>The Creator</strong> (engineers a thing that didn't exist; takes pride in craft). It is <em>not</em> The Hero (we're not telling the customer they're a winner) and it is <em>not</em> The Everyman (we're not pretending we're just like every other golf accessory — we built something different).</p>

    </div>
  </div>
</section>

<!-- 6 · VISUAL IDENTITY -->
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
      <p>The palette pulls from the course itself: deep fairway green as the dominant primary, sand-bunker cream as the warm secondary, and trophy gold as the premium accent. Navy and charcoal anchor type and high-contrast moments.</p>

      <div class="palette-grid">
        <div class="swatch" style="background:#1F4E2C"><div class="swatch-name">Fairway Green</div><div class="swatch-hex">#1F4E2C</div></div>
        <div class="swatch" style="background:#163820"><div class="swatch-name">Fairway Deep</div><div class="swatch-hex">#163820</div></div>
        <div class="swatch" style="background:#5A9966"><div class="swatch-name">Fairway Light</div><div class="swatch-hex">#5A9966</div></div>
        <div class="swatch dark-text" style="background:#A4C8A8"><div class="swatch-name">Mint</div><div class="swatch-hex">#A4C8A8</div></div>
        <div class="swatch dark-text" style="background:#F2EAD3"><div class="swatch-name">Sand Cream</div><div class="swatch-hex">#F2EAD3</div></div>
        <div class="swatch dark-text" style="background:#D4B98A"><div class="swatch-name">Sand Tan</div><div class="swatch-hex">#D4B98A</div></div>
        <div class="swatch dark-text" style="background:#C9A24E"><div class="swatch-name">Trophy Gold</div><div class="swatch-hex">#C9A24E</div></div>
        <div class="swatch" style="background:#1A2332"><div class="swatch-name">Navy</div><div class="swatch-hex">#1A2332</div></div>
        <div class="swatch" style="background:#2C2C2C"><div class="swatch-name">Charcoal</div><div class="swatch-hex">#2C2C2C</div></div>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · The 60-30-10 rule</span>
        <p>On every layout, aim for roughly <strong>60% one dominant brand color</strong> (usually fairway green or sand cream depending on light/dark direction), <strong>30% a secondary surface</strong> (cream when green dominates, or navy/charcoal when cream dominates), and <strong>10% trophy gold as the accent</strong>. Gold is a finishing touch — borders, badges, single-line accents, never a fill background. Used everywhere it loses its premium feel.</p>
      </div>

      <h3>Typography</h3>
      <p>Three families, each with a job. <strong>Bebas Neue</strong> for hero display and big headlines (the "tournament leaderboard" energy). <strong>Fraunces</strong> for editorial heads and pull quotes (the heritage, country-club polish). <strong>Inter</strong> for all body and UI (legibility on phones, small sizes, dense product copy). <strong>DM Mono</strong> as a small accent for eyebrows, labels, and meta data.</p>

      <table>
        <thead><tr><th>Family</th><th>Use for</th><th>Weight range</th></tr></thead>
        <tbody>
          <tr><td><strong>Bebas Neue</strong></td><td>Hero display, big numbers, tournament-style titles</td><td>Regular</td></tr>
          <tr><td><strong>Fraunces</strong></td><td>Section heads, editorial, pull quotes, certificate</td><td>700–900</td></tr>
          <tr><td><strong>Inter</strong></td><td>Body, UI, product copy, captions</td><td>300–800</td></tr>
          <tr><td><strong>DM Mono</strong></td><td>Eyebrows, meta labels, technical specs</td><td>400–700</td></tr>
        </tbody>
      </table>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · Don't pair Bebas with Fraunces in the same headline</span>
        <p>Pick one display family per layout. Bebas for tournament energy (paid ads, big numbers, leaderboards). Fraunces for editorial polish (PDPs, brand films, founder stories). Mixing them in the same hero creates visual chaos that makes the layout feel amateur. Inter and DM Mono are always safe to pair with either.</p>
      </div>

      <h3>Logo</h3>
      <p>The Clean &amp; Hit wordmark is the primary lockup. Use the full-color version on cream or white surfaces; use the reversed (white/gold) version on fairway green or charcoal surfaces. Never recolor the logo, never stretch it, never re-spaced it. Minimum clear space on all sides equals the height of the "C" in "Clean."</p>

      <div class="logo-blocks">
        <div>
          <div class="logo-block light">
            <img src="https://cleanandhit.com/cdn/shop/files/clean-and-hit-logo.png" alt="Clean and Hit primary logo" onerror="this.dataset.failed='1'">
            <span class="logo-text-fallback">CLEAN &amp; HIT</span>
          </div>
          <div class="logo-caption">Primary · Use on light surfaces</div>
        </div>
        <div>
          <div class="logo-block dark">
            <img src="https://cleanandhit.com/cdn/shop/files/clean-and-hit-logo-reversed.png" alt="Clean and Hit reversed logo" onerror="this.dataset.failed='1'">
            <span class="logo-text-fallback">CLEAN &amp; HIT</span>
          </div>
          <div class="logo-caption">Reversed · Use on dark surfaces</div>
        </div>
      </div>

      <h3>Photography direction</h3>
      <div class="do-dont">
        <div class="do">
          <h4>Do shoot</h4>
          <ul>
            <li>Real courses, real golfers, real weather (mud and grass are good — it's the problem)</li>
            <li>The product mounted on a cart, in actual use — not on a turntable</li>
            <li>Hands cleaning a club face mid-round, with motion implied</li>
            <li>Wedge grooves before and after — the visible "switch" is the conversion moment</li>
            <li>Pro shop and cart-fleet contexts for B2B</li>
            <li>Warm, golden-hour course light wherever possible</li>
          </ul>
        </div>
        <div class="dont">
          <h4>Don't shoot</h4>
          <ul>
            <li>Studio backgrounds with the product floating against white (occasionally OK for PDP only)</li>
            <li>Stock images of generic golfers — buyers can spot a stock photo instantly</li>
            <li>Pristine clubs that don't need cleaning (defeats the entire premise)</li>
            <li>Country-club caricatures (mahogany clubhouses, white-glove servers)</li>
            <li>Mid-swing action shots that don't show the product</li>
            <li>Heavy filters that make the green look cartoon-saturated</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 7 · TARGET AUDIENCE & PERSONAS -->
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
      <p>The Clean &amp; Hit core customer is a <strong>recreational golfer between roughly 35 and 70 years old</strong> who plays at least monthly, owns their own clubs, has at some point spent $400+ on a piece of equipment to get a small edge, and considers themselves "serious about the game" without necessarily being competitive. Skew is heavily male (~85%), middle-to-upper income, and concentrated in the Sun Belt, Mid-Atlantic, and Pacific coast where golf seasons are longer.</p>
      <p>The B2B customer is a <strong>head pro, pro shop manager, or course operations director</strong> at a public, semi-private, or private course who manages a cart fleet of 30–120 carts and is constantly weighing equipment-care expenditures against rental revenue and cart wear-and-tear.</p>

      <h3>Customer personas</h3>
      <div class="persona-grid">
        <div class="persona">
          <div class="persona-name">"Weekend Warrior" Mike</div>
          <div class="persona-meta">52 · 14-handicap · Plays 2x/week · DTC</div>
          <p><strong>What he wants:</strong> Lower his handicap by a stroke or two and stop losing balls to mishit wedge approaches. Already owns a $500 driver and $800 set of irons.</p>
          <p><strong>What stops him:</strong> Doesn't want another gimmick. Has a drawer full of golf gadgets that promised more than they delivered.</p>
          <p><strong>What converts him:</strong> Side-by-side spin/distance proof, a peer recommendation, or seeing it on a friend's cart. <strong>Hook:</strong> "What dirty grooves are costing you on approach shots."</p>
        </div>
        <div class="persona">
          <div class="persona-name">"Country Club Cathy"</div>
          <div class="persona-meta">61 · 22-handicap · Plays 3x/week · DTC</div>
          <p><strong>What she wants:</strong> Looks the part, takes the game seriously. Cares about her equipment because well-cared-for clubs are part of how serious players present themselves.</p>
          <p><strong>What stops her:</strong> Skeptical of cheap-looking gadgets. Won't buy something that looks like Amazon clutter.</p>
          <p><strong>What converts her:</strong> Polished brand, premium finish, founder credibility. <strong>Hook:</strong> "Tournament-grade equipment care, designed by a scratch golfer."</p>
        </div>
        <div class="persona">
          <div class="persona-name">"Gift-Giving Grace"</div>
          <div class="persona-meta">48 · Non-golfer · Buys for husband · DTC</div>
          <p><strong>What she wants:</strong> A father's day, birthday, or holiday gift that her husband (or dad) will actually use. Hates buying ties; loves the moment of "wow, this is exactly what I needed."</p>
          <p><strong>What stops her:</strong> Doesn't know enough golf to evaluate the product on her own.</p>
          <p><strong>What converts her:</strong> Clear "for the golfer in your life" framing, gift packaging, social proof. <strong>Hook:</strong> "The golf gift he won't return."</p>
        </div>
        <div class="persona">
          <div class="persona-name">"Pro Shop Paul" (B2B)</div>
          <div class="persona-meta">44 · Head pro / shop manager · Public course · B2B</div>
          <p><strong>What he wants:</strong> Equipment that improves the rental experience (so renters tip better and come back) without becoming a maintenance burden for his staff.</p>
          <p><strong>What stops him:</strong> Cart-fleet additions that break, walk off, or require staff training.</p>
          <p><strong>What converts him:</strong> Volume pricing, durability proof, low-touch maintenance, and the ability to demo before committing. <strong>Hook:</strong> "Equip your fleet, elevate the round."</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 8 · COMPETITORS & POSITIONING -->
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
      <p>Golf-club cleaning is a $50M+ accessory category that has been roughly the same product for 50 years: a brush on a clip, a squeezable water bottle, a damp towel hanging from the bag. Most competitors are sub-$30 manual products with limited brand recognition. There is no incumbent motorized, on-cart, USB-rechargeable cleaning tool — Clean &amp; Hit created that subcategory.</p>

      <h3>Direct &amp; adjacent competitors</h3>
      <table>
        <thead><tr><th>Competitor</th><th>What they sell</th><th>How we win against them</th></tr></thead>
        <tbody>
          <tr><td><strong>Frogger Brush Pro</strong></td><td>Clip-on manual brush with retractable cord, $15–25</td><td>One-handed motorized cleaning is faster and more thorough. We're a tool, they're an accessory.</td></tr>
          <tr><td><strong>"Clean Hit" (AU)</strong></td><td>Cast-aluminum manual squeeze-bottle brush, $30–50</td><td>Similar name, different product. Theirs requires water + detergent + two hands. Ours is one-handed and motorized.</td></tr>
          <tr><td><strong>Generic clip-on brushes</strong> (Amazon basics)</td><td>$5–15 plastic brushes with groove pick</td><td>Race to the bottom on price. We're the premium, performance-focused option for golfers who already spend on equipment.</td></tr>
          <tr><td><strong>Bag-mounted towels</strong></td><td>Microfiber towels with carabiners, $10–25</td><td>Towels need to be wet, get dirty, freeze in cold weather. Ours doesn't.</td></tr>
          <tr><td><strong>Pro-shop ultrasonic cleaners</strong></td><td>Countertop ultrasonic units, $200–800, professional-grade</td><td>Different use case. Theirs is post-round in the shop. Ours is mid-round on the course. Often complementary, not competitive.</td></tr>
          <tr><td><strong>Built-in cart accessories</strong></td><td>Towel holders, ball washers, divot-tool kits</td><td>We slot into the same on-cart real estate but solve a problem none of them solve.</td></tr>
        </tbody>
      </table>

      <h3>Positioning statement</h3>
      <blockquote style="border-left:4px solid var(--ch-gold);padding:14px 22px;background:var(--ch-cream);font-family:'Fraunces',serif;font-size:1.05rem;font-style:italic;color:var(--ch-fairway-deep);margin:14px 0">For serious recreational golfers who want every shot to perform the way it was engineered to, Clean &amp; Hit is the only motorized, on-cart, USB-rechargeable club-face cleaning tool — because tournament-grade equipment care shouldn't require a caddie or a clubhouse stop.</blockquote>

      <h3>What we say when asked "how is this different from a brush?"</h3>
      <p>The honest comparison: a clip-on brush requires both hands, water, a place to set the club down, and pace-of-play time most golfers won't spend. Clean &amp; Hit is a one-handed, 5-second motorized clean from the cart. The price difference reflects engineering, durability, and the fact that the customer will actually use it every round — versus a $15 brush that lives forgotten on the side of a bag.</p>

      <div class="team-callout brand">
        <span class="team-tag">🌿 Brand · We don't disparage competitors</span>
        <p>Pro shops carry Frogger and bag towels; many of our customers have one in their bag right now. <strong>Don't trash competitors</strong> in any external copy — it makes us look insecure. Make the case for what Clean &amp; Hit does that nothing else does, and let the customer reach the conclusion. The category has been the same for 50 years; we don't need to attack the incumbents, we need to make ourselves obvious.</p>
      </div>

    </div>
  </div>
</section>

<!-- 9 · OBJECTION HANDLING -->
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

      <p>Below are the most common objections CX, sales reps, and influencer partners will hear. Each comes with a script. The rule of thumb: <strong>acknowledge → reframe → offer evidence → close.</strong> Never argue, never get defensive, never overpromise.</p>

      <table>
        <thead><tr><th>Objection</th><th>Reframe</th><th>Closer</th></tr></thead>
        <tbody>
          <tr>
            <td>"It's just a brush. Why does it cost this much?"</td>
            <td>It's a USB-rechargeable, motorized tool with a reversible-direction motor and free-standing/cart-mountable design. Two years of US-based engineering went into the build. The closest comparable category — pro-shop ultrasonic cleaners — runs $200–800.</td>
            <td>"You spent $500 on the driver. This is what makes the driver perform every round."</td>
          </tr>
          <tr>
            <td>"I already have a towel and a brush on my bag."</td>
            <td>Most golfers do — and most golfers also don't actually use them mid-round because they're slow and a hassle. Clean &amp; Hit is one-handed, takes 5 seconds, and lives on the cart so it's there for every hole.</td>
            <td>"When was the last time you actually cleaned your wedge between approach shots? That's the gap this fills."</td>
          </tr>
          <tr>
            <td>"Will it damage my club face?"</td>
            <td>The brush is engineered specifically for golf-club faces — soft enough to protect the surface, firm enough to clear the grooves. The reversible direction means even bristle wear, so the brush stays effective and gentle for the life of the unit.</td>
            <td>"Designed by a scratch golfer who wasn't going to use anything that hurt his clubs. We feel the same way."</td>
          </tr>
          <tr>
            <td>"Does it really make a difference to my shots?"</td>
            <td>Clean grooves are the reason wedges have grooves in the first place — they're how the club imparts spin on the ball. Dirt and grass in the grooves measurably reduce spin, which reduces the ball's ability to bite the green. Tour pros have caddies who clean their clubs after every shot for this exact reason.</td>
            <td>"You don't need a caddie to play like one. That's the whole point of the product."</td>
          </tr>
          <tr>
            <td>"Will it work in rain or wet conditions?"</td>
            <td>The unit is designed for on-course use, including damp grass and morning dew. We don't recommend submerging it, and like any USB-rechargeable device, dry it off before charging.</td>
            <td>"Built for actual golf, not display-shelf golf."</td>
          </tr>
          <tr>
            <td>"How long does the battery last?"</td>
            <td>One full charge runs through a full round comfortably, with margin. USB-rechargeable means you top it off the same way you charge your phone.</td>
            <td>"Charge it the night before like your phone, and you're set for the round."</td>
          </tr>
          <tr>
            <td>"What if it breaks?"</td>
            <td>The unit is designed for heavy on-course use, but if anything goes wrong, contact CX with your order number and we'll make it right. We stand behind what we ship.</td>
            <td>"We sell one product. We can't afford to ship one that doesn't last."</td>
          </tr>
          <tr>
            <td>"I never see pros using one."</td>
            <td>Pros have caddies who do the cleaning manually after every shot — that's why their clubs are always pristine. Clean &amp; Hit is the version of that for golfers who don't have a caddie.</td>
            <td>"It's not for the tour. It's for the rest of us who want to play like the tour cares about us."</td>
          </tr>
          <tr>
            <td>"I bought a 'Clean Hit' on Amazon and it's not motorized."</td>
            <td>That's a different product — there's an older Australian brand with a similar name that makes a manual squeeze-bottle brush. Ours is the motorized, USB-rechargeable unit with ground spikes from <a href="https://cleanandhit.com/" target="_blank" rel="noopener">cleanandhit.com</a>.</td>
            <td>"Easy mix-up — would you like the link to ours so you can compare?"</td>
          </tr>
          <tr>
            <td>"Do you offer it for our cart fleet at a wholesale rate?"</td>
            <td>Yes — we have a B2B program for pro shops and course operators. Volume pricing and dedicated account support are available.</td>
            <td>"Let me route you to our partnerships team — they'll send the wholesale sheet."</td>
          </tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · The "I don't know" rule</span>
        <p>For any technical question you can't answer with confidence — battery cycle counts, exact decibel level, specific spin-rate uplift in numbers — the right answer is <em>"That's a fair question and I want to give you accurate information rather than guess. Let me check with the brand team and follow up by email."</em> Take the customer's email, log the question with the Brand Lead, and respond within one business day. Never make up a spec.</p>
      </div>

    </div>
  </div>
</section>

<!-- 10 · CUSTOMER JOURNEY -->
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

      <p>Most Clean &amp; Hit buyers go through a five-stage journey from "what's that thing on his cart?" to "I'm telling my foursome about this." The table below maps what the customer is thinking, where they are, what we do at each stage, and what CX needs to know.</p>

      <table>
        <thead><tr><th>Stage</th><th>What they're thinking</th><th>Channel</th><th>Brand action</th><th>CX role</th></tr></thead>
        <tbody>
          <tr>
            <td><strong>Awareness</strong></td>
            <td>"What is that motorized thing on the back of his cart?"</td>
            <td>Paid social, organic golf content, course-side sightings, PR (PGA Show, golf media)</td>
            <td>Lead with the visible problem (dirty grooves) and the visible solution (motorized clean in 5 seconds)</td>
            <td>Field DM-style questions on social. Don't sell — confirm the product exists and direct to the site.</td>
          </tr>
          <tr>
            <td><strong>Consideration</strong></td>
            <td>"Does this actually work? How is it different from a brush?"</td>
            <td>PDP, blog, email nurture, comparison content, YouTube reviews</td>
            <td>Show the product in use, side-by-side groove cleanliness, founder credibility, real golfer testimonials</td>
            <td>Answer "how it works" and "how it compares" questions. Send to PDP or comparison content.</td>
          </tr>
          <tr>
            <td><strong>Purchase</strong></td>
            <td>"Is this worth the price? What if I don't like it?"</td>
            <td>Cart, checkout, abandoned-cart email/SMS</td>
            <td>Free-shipping threshold, return policy clarity, low-friction checkout, trust signals</td>
            <td>Honor evergreen new-customer code. Recover abandoned carts. Resolve checkout friction.</td>
          </tr>
          <tr>
            <td><strong>First use</strong></td>
            <td>"How do I charge it? How do I mount it on my cart?"</td>
            <td>Unboxing email, quick-start guide, post-purchase SMS</td>
            <td>Day-1 use email with charging steps and mounting tips. Day-7 follow-up asking how the first round went.</td>
            <td>Walk customers through charging, mounting, and first use. Most "broken on arrival" calls are actually "I haven't charged it yet."</td>
          </tr>
          <tr>
            <td><strong>Loyalty &amp; advocacy</strong></td>
            <td>"My foursome keeps asking about it — should I tell them where to buy?"</td>
            <td>Review email, referral program, social UGC, repeat content</td>
            <td>Capture review at week 3. Invite to refer a friend. Showcase customer photos in organic social.</td>
            <td>Process replacements promptly when needed. A customer with a 3-week-old broken unit should never feel ignored.</td>
          </tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · The first-use call</span>
        <p>The single biggest source of "doesn't work" calls in the first week is <strong>uncharged units</strong>. Before assuming a defect, walk the customer through: <strong>(1)</strong> Plug the USB cable into the unit and a standard USB power source. <strong>(2)</strong> Wait for the indicator LED to confirm charging. <strong>(3)</strong> Charge for at least 90 minutes before first use. If the LED doesn't light at all and the cable is confirmed working, that's a real defect — process a replacement.</p>
      </div>

    </div>
  </div>
</section>

<!-- 11 · MARKETING ANGLES & HOOKS -->
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

      <p>Five proven angles to test in paid, email, and organic. Each one anchors to a different customer motivation. Mix and match across the funnel — top-of-funnel awareness ads usually lead with #1 or #2; mid-funnel consideration with #3 or #4; bottom-funnel conversion with #5.</p>

      <div class="callout-row">
        <div class="pillar">
          <span class="pillar-icon">🎯</span>
          <h4>1 · The performance angle</h4>
          <p>"Dirty grooves are costing you strokes." Lead with the measurable performance hit — spin, distance, accuracy — and frame Clean &amp; Hit as the fix. Best for serious golfers, mid-handicaps trying to improve.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">⏱️</span>
          <h4>2 · The pace-of-play angle</h4>
          <p>"Clean clubs in 5 seconds, every hole." Lead with the speed and convenience. The customer doesn't have to slow play, doesn't have to find a damp towel, doesn't have to stop. Best for casual but frequent golfers.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">👨‍🔧</span>
          <h4>3 · The founder/heritage angle</h4>
          <p>"Designed by a New Jersey scratch golfer over two years of prototyping." Best for editorial, PR, email nurture, and the more skeptical premium buyer who wants to know there's a real person behind the brand.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🏆</span>
          <h4>4 · The pro-grade angle</h4>
          <p>"Tour pros have caddies. You have Clean &amp; Hit." Frames the product as the equipment-care equivalent of having someone in your corner. Aspirational without being elitist.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🎁</span>
          <h4>5 · The gift angle</h4>
          <p>"The golf gift he won't return." Lean in for Father's Day, holiday, birthdays. Targets gift-givers (often non-golfers buying for golfers). Pairs with gift packaging and easy returns.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🛺</span>
          <h4>6 · The B2B/cart-fleet angle</h4>
          <p>"Equip your fleet. Elevate the round." For pro shops and course operators. ROI-driven: better rental experience, better tips, lower club-care liability for course-owned rental sets.</p>
        </div>
      </div>

      <h3>Proven hook lines (use as paid-ad / email-subject starting points)</h3>
      <ol>
        <li><em>"What dirty wedge grooves are actually costing you on approach shots."</em></li>
        <li><em>"The 5-second cleaning tool that lives on the back of your cart."</em></li>
        <li><em>"A scratch golfer spent two years building this so you'd stop using a damp towel."</em></li>
        <li><em>"Tour pros have caddies. You have this."</em></li>
        <li><em>"Why your $600 wedge is performing like a $50 one."</em></li>
        <li><em>"The golf gift that's actually used after Christmas morning."</em></li>
        <li><em>"Your driver is clean. Your wedges are gross. Here's why that matters."</em></li>
        <li><em>"If your foursome doesn't have one yet, they will after Saturday."</em></li>
        <li><em>"Made in USA. Designed by a golfer. Used in 5 seconds."</em></li>
      </ol>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · Test 3, scale 1</span>
        <p>Run any new campaign with at least <strong>three angle variants</strong> in market simultaneously — performance, pace-of-play, and one wildcard (gift, founder, B2B). Let real spend data tell you which angle wins for the season, the audience, and the placement. Don't assume the angle that worked for a launch campaign will keep working at Father's Day.</p>
      </div>

    </div>
  </div>
</section>

<!-- 12 · SAMPLE WINNING CREATIVES -->
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

      <p>Looking at all our winning ads across SugarMD, Wild Earth, Pizza Pack, and Spark, here's what they all have in common — six patterns that show up over and over again across categories, audiences, and platforms. Even though Clean &amp; Hit is the newest brand in the portfolio and we're still building our own ad library, the same patterns will apply. Use these as your filter when reviewing or briefing creative.</p>

      <div class="pattern-grid">
        <div class="pattern">
          <div class="pattern-num">PATTERN 01</div>
          <div class="pattern-icon">📌</div>
          <h4>Lead with a specific, relatable problem</h4>
          <p>Not "improve your golf game." Specifically: <em>"Mud in your wedge grooves is killing your approach shots."</em> The customer recognizes themselves in the first second.</p>
        </div>
        <div class="pattern">
          <div class="pattern-num">PATTERN 02</div>
          <div class="pattern-icon">⭐</div>
          <h4>Social proof front and center</h4>
          <p>Star rating, review count, real customer photos. For a new brand: founder credibility (scratch golfer, PGA Show debut, ambassador Beau Rials) does the same job until the review base builds.</p>
        </div>
        <div class="pattern">
          <div class="pattern-num">PATTERN 03</div>
          <div class="pattern-icon">📱</div>
          <h4>Native, authentic-looking creative</h4>
          <p>Phone-shot, on-course, real golfer hands, real grass. Studio-shot product on white converts worse than the same product on a real cart, because the customer can imagine it on theirs.</p>
        </div>
        <div class="pattern">
          <div class="pattern-num">PATTERN 04</div>
          <div class="pattern-icon">🎯</div>
          <h4>One clear, simple message</h4>
          <p>The ad has one job. Don't try to sell precision <em>and</em> made-in-USA <em>and</em> founder story <em>and</em> gift angle in 6 seconds. Pick one. The pillar that converts is the pillar that gets the spend.</p>
        </div>
        <div class="pattern">
          <div class="pattern-num">PATTERN 05</div>
          <div class="pattern-icon">🔁</div>
          <h4>Contrast and "switch" framing</h4>
          <p>Before/after. Dirty club face → clean club face. Five seconds with the brush, visible difference. The "switch" is the reason to scroll-stop.</p>
        </div>
        <div class="pattern">
          <div class="pattern-num">PATTERN 06</div>
          <div class="pattern-icon">⛳</div>
          <h4>Emotion over logic</h4>
          <p>The conversion isn't "the spec sheet is impressive." It's "I want to play better, and this looks like the obvious way." Lead with the feeling of a clean strike off a clean wedge — then back it up with the feature list.</p>
        </div>
      </div>

      <div class="through-line">
        <span class="through-line-label">The through-line</span>
        <p>Your winning ads find a customer who already has a problem, show them someone like them who solved it, and make the product feel like the obvious next step — not a hard sell.</p>
      </div>

      <h3>Brand-specific gallery — coming soon</h3>

      <div class="alert-callout critical">
        <span class="alert-callout-title">🏷️ Coming Soon · Real Ad Gallery</span>
        <p>Inventel partnered with Clean &amp; Hit in <strong>2026</strong>, and as of the writing of this hub <strong>we have not yet run, tested, or scaled any of our own paid creative for this brand</strong>. There are no in-market winners to feature here yet. The three concept mockups below are illustrative only — they show how the six universal patterns above translate into a Clean &amp; Hit ad. They are <strong>not real ads</strong> and have <strong>not been performance-tested</strong>. As soon as the first batch of paid concepts is in market and we have data, this section will be replaced with screenshots of the actual top performers, their creative meta, and the specific patterns that drove the win.</p>
      </div>

      <div class="creative-gallery">
        <!-- Concept 1: performance / contrast -->
        <div class="creative-card">
          <div class="creative-img">
            <svg viewBox="0 0 200 250" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="bg1" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0" stop-color="#1F4E2C"/>
                  <stop offset="1" stop-color="#163820"/>
                </linearGradient>
              </defs>
              <rect width="200" height="250" fill="url(#bg1)"/>
              <!-- top half: dirty club -->
              <rect x="20" y="20" width="160" height="90" rx="6" fill="#2C2C2C"/>
              <text x="100" y="38" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="11" fill="#C9A24E" letter-spacing="1">DIRTY GROOVES</text>
              <!-- club face dirty -->
              <rect x="60" y="48" width="80" height="50" rx="3" fill="#888"/>
              <line x1="65" y1="58" x2="135" y2="58" stroke="#3a3a3a" stroke-width="1"/>
              <line x1="65" y1="66" x2="135" y2="66" stroke="#3a3a3a" stroke-width="1"/>
              <line x1="65" y1="74" x2="135" y2="74" stroke="#3a3a3a" stroke-width="1"/>
              <line x1="65" y1="82" x2="135" y2="82" stroke="#3a3a3a" stroke-width="1"/>
              <line x1="65" y1="90" x2="135" y2="90" stroke="#3a3a3a" stroke-width="1"/>
              <!-- mud splatter -->
              <circle cx="80" cy="64" r="4" fill="#5C4A38"/>
              <circle cx="115" cy="78" r="3" fill="#5C4A38"/>
              <circle cx="98" cy="86" r="2.5" fill="#5C4A38"/>
              <text x="100" y="105" text-anchor="middle" font-family="Inter, sans-serif" font-size="8" fill="#fff">–32% spin · –12 yds carry</text>
              <!-- bottom half: clean club -->
              <rect x="20" y="125" width="160" height="90" rx="6" fill="#FAF6E9"/>
              <text x="100" y="143" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="11" fill="#1F4E2C" letter-spacing="1">5 SECONDS LATER</text>
              <rect x="60" y="153" width="80" height="50" rx="3" fill="#D4D4D4"/>
              <line x1="65" y1="163" x2="135" y2="163" stroke="#666" stroke-width="1"/>
              <line x1="65" y1="171" x2="135" y2="171" stroke="#666" stroke-width="1"/>
              <line x1="65" y1="179" x2="135" y2="179" stroke="#666" stroke-width="1"/>
              <line x1="65" y1="187" x2="135" y2="187" stroke="#666" stroke-width="1"/>
              <line x1="65" y1="195" x2="135" y2="195" stroke="#666" stroke-width="1"/>
              <text x="100" y="210" text-anchor="middle" font-family="Inter, sans-serif" font-size="8" fill="#1F4E2C" font-weight="700">Spin restored. Distance back.</text>
              <!-- cta strip -->
              <rect x="0" y="222" width="200" height="28" fill="#C9A24E"/>
              <text x="100" y="240" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="13" fill="#163820" letter-spacing="1.5">CLEAN &amp; HIT</text>
            </svg>
          </div>
          <div class="creative-meta">⚠ Concept Mockup · Not Yet Tested</div>
          <div class="creative-caption">
            <strong>Dirty grooves are costing you strokes.</strong>
            Top/bottom contrast on the same club face — the &quot;switch&quot; happens in the customer's eye before they even read the copy. Format: Meta static, 4:5, performance angle.
          </div>
          <div class="creative-tags">
            <span class="creative-tag">Pattern 01</span>
            <span class="creative-tag">Pattern 04</span>
            <span class="creative-tag">Pattern 05</span>
          </div>
        </div>

        <!-- Concept 2: native cart-mounted -->
        <div class="creative-card">
          <div class="creative-img">
            <svg viewBox="0 0 200 250" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="sky1" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0" stop-color="#A4C8A8"/>
                  <stop offset="1" stop-color="#5A9966"/>
                </linearGradient>
              </defs>
              <rect width="200" height="250" fill="url(#sky1)"/>
              <!-- fairway ground -->
              <rect x="0" y="155" width="200" height="95" fill="#1F4E2C"/>
              <!-- cart silhouette -->
              <rect x="40" y="105" width="120" height="60" rx="6" fill="#FAF6E9"/>
              <rect x="48" y="115" width="20" height="28" rx="2" fill="#1A2332"/>
              <rect x="132" y="115" width="20" height="28" rx="2" fill="#1A2332"/>
              <rect x="40" y="95" width="120" height="14" rx="2" fill="#2C2C2C"/>
              <!-- cart wheels -->
              <circle cx="58" cy="170" r="10" fill="#2C2C2C"/>
              <circle cx="142" cy="170" r="10" fill="#2C2C2C"/>
              <!-- mounted clean & hit on back -->
              <rect x="155" y="125" width="14" height="32" rx="2" fill="#2C2C2C" stroke="#C9A24E" stroke-width="1"/>
              <rect x="153" y="118" width="18" height="6" fill="#C9A24E"/>
              <!-- top text -->
              <rect x="0" y="0" width="200" height="40" fill="rgba(22,56,32,.9)"/>
              <text x="100" y="18" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="13" fill="#C9A24E" letter-spacing="1">MOUNTED ON THE CART</text>
              <text x="100" y="32" text-anchor="middle" font-family="Inter, sans-serif" font-size="9" fill="#FAF6E9">Ready every hole. No towel. No bending.</text>
              <!-- bottom CTA -->
              <rect x="0" y="218" width="200" height="32" fill="#C9A24E"/>
              <text x="100" y="232" text-anchor="middle" font-family="Bebas Neue, sans-serif" font-size="11" fill="#163820" letter-spacing="1">CLEAN &amp; HIT</text>
              <text x="100" y="244" text-anchor="middle" font-family="Inter, sans-serif" font-size="8" fill="#163820">cleanandhit.com</text>
            </svg>
          </div>
          <div class="creative-meta">⚠ Concept Mockup · Not Yet Tested</div>
          <div class="creative-caption">
            <strong>Mounted on the cart, ready every hole.</strong>
            Native, on-course feel. The product is in context — not floating against white. Customer pictures it on their cart immediately. Format: TikTok/Reels native, 4:5, pace-of-play angle.
          </div>
          <div class="creative-tags">
            <span class="creative-tag">Pattern 02</span>
            <span class="creative-tag">Pattern 03</span>
            <span class="creative-tag">Pattern 06</span>
          </div>
        </div>

        <!-- Concept 3: founder + made in USA -->
        <div class="creative-card">
          <div class="creative-img">
            <svg viewBox="0 0 200 250" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="bg3" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0" stop-color="#F2EAD3"/>
                  <stop offset="1" stop-color="#E5D9B8"/>
                </linearGradient>
              </defs>
              <rect width="200" height="250" fill="url(#bg3)"/>
              <!-- portrait silhouette -->
              <circle cx="100" cy="80" r="34" fill="#1F4E2C"/>
              <ellipse cx="100" cy="125" rx="44" ry="22" fill="#1F4E2C"/>
              <!-- name plaque -->
              <rect x="35" y="155" width="130" height="24" fill="#1A2332"/>
              <text x="100" y="170" text-anchor="middle" font-family="Fraunces, serif" font-size="10" fill="#C9A24E" font-weight="700">DARRIN VAUGHAN · FOUNDER</text>
              <text x="100" y="178" text-anchor="middle" font-family="Inter, sans-serif" font-size="7" fill="#FAF6E9">Scratch golfer · NJ · 2 years prototyping</text>
              <!-- quote -->
              <text x="100" y="198" text-anchor="middle" font-family="Fraunces, serif" font-size="9" fill="#1F4E2C" font-style="italic">"I built this because nothing</text>
              <text x="100" y="210" text-anchor="middle" font-family="Fraunces, serif" font-size="9" fill="#1F4E2C" font-style="italic">on the market actually worked."</text>
              <!-- USA tag -->
              <rect x="65" y="216" width="70" height="14" rx="7" fill="#1F4E2C"/>
              <text x="100" y="226" text-anchor="middle" font-family="DM Mono, monospace" font-size="7" fill="#C9A24E" font-weight="700">🇺🇸 MADE IN USA</text>
              <!-- gold bar -->
              <rect x="0" y="0" width="200" height="6" fill="#C9A24E"/>
              <rect x="0" y="244" width="200" height="6" fill="#C9A24E"/>
            </svg>
          </div>
          <div class="creative-meta">⚠ Concept Mockup · Not Yet Tested</div>
          <div class="creative-caption">
            <strong>Designed by a scratch golfer. Built for every golfer.</strong>
            Founder voice + Made in USA tag + a real quote. Best for editorial, PR, and email nurture — not paid social cold-traffic. Format: email hero static, 4:5, founder angle.
          </div>
          <div class="creative-tags">
            <span class="creative-tag">Pattern 02</span>
            <span class="creative-tag">Pattern 04</span>
            <span class="creative-tag">Heritage</span>
          </div>
        </div>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · Patterns are briefs, not blueprints</span>
        <p>The six patterns above are a checklist for whether a concept has the bones of a winner — not a template you fill in. The strongest Clean &amp; Hit creative will probably break one or two patterns deliberately (a longer founder cut for YouTube; a documentary-style course tour). When that happens, make sure you can articulate <em>which pattern you're trading away and why</em>.</p>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · Test against the patterns before spending</span>
        <p>Before any new concept goes into paid spend, score it against the six patterns: does it lead with a specific problem? does it have social proof or founder credibility? does it look native to the platform? does it have one clear message? does it have a contrast/switch moment? does it lead with emotion? Three or fewer "yes" answers and you're not ready to scale spend on it.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">👋 New Hire · Spend 30 minutes naming patterns</span>
        <p>Before your first creative-review meeting, pull up our top-performing ads across the portfolio (Wild Earth, Spark, Pizza Pack, SugarMD) and name the pattern in each one out loud. By the time you sit at the table, the pattern language should be second nature — that's how you contribute meaningfully instead of just nodding.</p>
      </div>

    </div>
  </div>
</section>

<!-- 14 · SOCIAL MEDIA & DIGITAL CHANNELS (skipping #13 Health/Survey since pre-launch) -->
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

      <p>Clean &amp; Hit's owned social presence is fully live: <strong>Instagram, TikTok, YouTube, and Facebook are all up and ready to use</strong>. Our customer (the recreational golfer) lives heavily on YouTube, Instagram, and increasingly TikTok, with Facebook skewing to an older paid-social audience and email being the highest-converting owned channel overall. Treat each platform as a different audience even when the message is similar — the founder content that lands on YouTube is too long for TikTok, and the polished Instagram feed shouldn't be cross-posted to TikTok unmodified.</p>

      <table>
        <thead><tr><th>Channel</th><th>Primary use</th><th>Cadence</th><th>Tone mode</th></tr></thead>
        <tbody>
          <tr><td><strong>Instagram</strong></td><td>Feed = brand polish + product hero shots; Reels = on-course UGC and pattern tests</td><td>3–5 posts/wk + 2–3 reels/wk</td><td>Course-side conversational</td></tr>
          <tr><td><strong>TikTok</strong></td><td>Native short-form, demo and "switch" content, golfer-creator partnerships</td><td>4–7 posts/wk during season</td><td>Course-side conversational</td></tr>
          <tr><td><strong>YouTube</strong></td><td>Long-form demos, founder content, course-tour collaborations with golf creators</td><td>1–2 videos/mo</td><td>Knowledgeable peer + Quietly proud</td></tr>
          <tr><td><strong>Facebook</strong></td><td>Older-skewing audience, paid social workhorse, community groups (golf-equipment groups in particular)</td><td>3–5 posts/wk</td><td>Confident performance</td></tr>
          <tr><td><strong>Email</strong></td><td>Nurture, promo, post-purchase, win-back. Highest converting owned channel.</td><td>1–2 sends/wk; transactional triggered</td><td>Knowledgeable peer</td></tr>
          <tr><td><strong>SMS</strong></td><td>Order updates + opted-in promo (use sparingly)</td><td>1–2 sends/mo max</td><td>Practical &amp; direct</td></tr>
          <tr><td><strong>Pinterest</strong></td><td>Gift-guide season (Father's Day, holiday) — high-intent gift buyers</td><td>Seasonal</td><td>Confident performance</td></tr>
          <tr><td><strong>Reddit</strong></td><td>Engagement only — never spam. r/golf, r/golfer, r/golfgear are active and skeptical communities.</td><td>Reactive only</td><td>Knowledgeable peer</td></tr>
        </tbody>
      </table>

      <h3>Hashtag governance</h3>
      <p>Hashtags are still useful on Instagram and TikTok for discovery — less so on Facebook. Use a small, consistent set so the brand becomes findable. Don't stuff posts.</p>
      <ul>
        <li><strong>Brand:</strong> #CleanAndHit · #HitItPure</li>
        <li><strong>Performance:</strong> #CleanGrooves · #BetterContact · #ApproachShot · #WedgePlay</li>
        <li><strong>Category:</strong> #GolfGear · #GolfAccessories · #GolfEquipment · #GolfTools</li>
        <li><strong>Audience:</strong> #GolfersOfInstagram · #WeekendGolfer · #GolfLife · #GolfCart</li>
        <li><strong>Avoid:</strong> Generic engagement-bait tags (#FollowForFollow), unrelated trending tags, anything that doesn't ladder back to golf or equipment care</li>
      </ul>

      <h3>Social links</h3>
      <ul>
        <li><strong>Website:</strong> <a href="https://cleanandhit.com/" target="_blank" rel="noopener">cleanandhit.com</a></li>
        <li><strong>Instagram:</strong> <a href="https://www.instagram.com/cleanandhit/" target="_blank" rel="noopener">@cleanandhit</a></li>
        <li><strong>TikTok:</strong> <a href="https://www.tiktok.com/@clean.and.hit" target="_blank" rel="noopener">@clean.and.hit</a></li>
        <li><strong>YouTube:</strong> <a href="https://www.youtube.com/channel/UCQOO1pgAXCf8PHTeD1ZDoZA" target="_blank" rel="noopener">Clean and Hit channel</a></li>
        <li><strong>Facebook:</strong> <a href="https://www.facebook.com/share/1TEpfJFSUh/" target="_blank" rel="noopener">Clean and Hit on Facebook</a></li>
      </ul>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · All four channels are live</span>
        <p><strong>Live and ready to use:</strong> Instagram (<a href="https://www.instagram.com/cleanandhit/" target="_blank" rel="noopener">@cleanandhit</a>), TikTok (<a href="https://www.tiktok.com/@clean.and.hit" target="_blank" rel="noopener">@clean.and.hit</a>), YouTube (<a href="https://www.youtube.com/channel/UCQOO1pgAXCf8PHTeD1ZDoZA" target="_blank" rel="noopener">Clean and Hit channel</a>), and <a href="https://www.facebook.com/share/1TEpfJFSUh/" target="_blank" rel="noopener">Facebook</a>. All four can be linked from email signatures, paid ad creative, partner briefs, the site footer, and printed materials.</p>
        <p><strong>One housekeeping note on Facebook:</strong> the audience there skews older than IG/TikTok, so it's the right home for the <em>Confident performance</em> tone (see channel table above) — clean product shots, results-forward copy, customer testimonials. Save the native course-side reels for IG and TikTok where they perform.</p>
      </div>

    </div>
  </div>
</section>

<!-- 15 · PARTNERSHIPS & INFLUENCERS -->
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

      <p>Clean &amp; Hit's growth depends on credibility within the golf community. The right ambassador or partner can move more units in a single round than a month of paid social. The wrong one can undo months of brand building. Use the criteria below.</p>

      <h3>Ideal ambassador profile</h3>
      <ul>
        <li><strong>Plays seriously:</strong> ideally a single-digit handicap or working professional (club pro, instructor, college player, mini-tour, senior tour)</li>
        <li><strong>Active on at least one of:</strong> YouTube, Instagram, TikTok with a golf-engaged audience &gt;10K</li>
        <li><strong>Voice fit:</strong> earnest, not gimmicky. Will not say things like "I love this product" if they don't actually use it.</li>
        <li><strong>Audience fit:</strong> recreational golfers who care about gear, not just trick-shot fans</li>
        <li><strong>Disclosure-clean:</strong> properly tags partnerships per FTC guidelines, no past disclosure controversies</li>
      </ul>

      <h3>Current confirmed partners</h3>
      <ul>
        <li><strong>Beau Rials</strong> — celebrity golf host, confirmed brand ambassador. Joined for the PGA Show 2025 launch and continues to be the primary ambassador voice for editorial and PR moments.</li>
        <li><strong>Darrin Vaughan</strong> — founder, scratch golfer, available for select PR, founder-voice content, and B2B/pro-shop demos.</li>
      </ul>

      <h3>Do's &amp; Don'ts for partner content</h3>
      <div class="do-dont">
        <div class="do">
          <h4>Do</h4>
          <ul>
            <li>Show the product in actual use on a real round</li>
            <li>Let the creator use their own voice — script the talking points, not the words</li>
            <li>Disclose the partnership clearly (#ad, #partner, "paid partnership with...")</li>
            <li>Provide brand-approved messaging on price, claims, and disclaimers</li>
            <li>Capture before/after content (groove cleanliness is the visual proof)</li>
            <li>Brief the creator on the FDA-style claim limits (no "lower your handicap by X strokes" promises)</li>
          </ul>
        </div>
        <div class="dont">
          <h4>Don't</h4>
          <ul>
            <li>Partner with creators whose audience isn't golf (general-fitness, lifestyle, prank channels)</li>
            <li>Allow uncleared performance claims ("guaranteed +20 yards")</li>
            <li>Skip FTC disclosure — even a single missed #ad is a regulatory headache</li>
            <li>Trade product-only without a written brief and deliverable schedule</li>
            <li>Compare to specific named competitors in partner content</li>
            <li>Use partner content beyond the rights window (usually 90 days unless otherwise negotiated)</li>
          </ul>
        </div>
      </div>

      <div class="alert-callout">
        <span class="alert-callout-title">⚖️ FTC disclosure note</span>
        <p>All paid, gifted, or otherwise compensated partnerships <strong>must</strong> include FTC-compliant disclosure — typically <em>"#ad"</em>, <em>"#sponsored"</em>, or <em>"paid partnership with Clean &amp; Hit"</em> at the top of the post or in the first three seconds of video. The disclosure can't be buried under a "more" tag. Marketing/Partnerships owns the brief; the creator owns the post; Inventel Legal can review on request before publishing for high-profile partnerships.</p>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · The 3-round rule</span>
        <p>Before signing a long-term ambassador deal, ship the candidate a unit, ask them to use it for <strong>three full rounds</strong>, and get an honest video reaction at the end. If they're still using it on round three, they'll be a great long-term partner. If it's already in their garage, no contract is going to fix that.</p>
      </div>

    </div>
  </div>
</section>

<!-- 16 · DISCOUNTS & PROMO CODES -->
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
        <p>The <strong>monthly discount sheet</strong> is the single source of truth for every active code, sale, and bundle across all Inventel brands including Clean &amp; Hit. <strong>Don't honor codes from memory.</strong> Don't honor codes a customer "swears was on the site last week." If it's not on the sheet, it's not active. The sheet is updated by Marketing on the first business day of every month and posted in the internal PM tool plus the #discounts Slack channel.</p>
      </div>

      <h3>Discount formats</h3>
      <table>
        <thead><tr><th>Format</th><th>How it works</th><th>Where it shows up</th></tr></thead>
        <tbody>
          <tr><td><strong>Promo code</strong></td><td>Customer enters a code at checkout for a % or $ discount</td><td>Email, SMS, partner content, paid ad copy</td></tr>
          <tr><td><strong>Full-site flip</strong></td><td>Sitewide % off with no code required, applied automatically at cart</td><td>Holiday weekends, Black Friday/Cyber Monday, Father's Day</td></tr>
          <tr><td><strong>Banner / automatic</strong></td><td>Top-of-site banner with auto-applied discount</td><td>Site-wide, all visitors during the window</td></tr>
          <tr><td><strong>Bundle / cart threshold</strong></td><td>Discount unlocks at a spend threshold (e.g. free shipping at $X)</td><td>Cart, PDP, free-shipping bar</td></tr>
          <tr><td><strong>New customer discount</strong></td><td><span class="badge badge-accessory">Evergreen</span> One-time % or $ off first order, captured via email signup popup</td><td>Email popup, footer, post-signup confirmation email</td></tr>
        </tbody>
      </table>

      <h3>Evergreen vs. time-bound</h3>
      <p>The <strong>new-customer first-order discount</strong> is the one always-on offer at Clean &amp; Hit — a customer who signs up for email gets a code, period. Clean &amp; Hit is <strong>not a subscription product</strong>, so there's no Subscribe &amp; Save discount to honor here (that's a fit for our consumable brands; this one is a durable single-SKU). Everything else — sitewide sales, holiday flips, bundle thresholds, partner codes — rotates on the monthly discount sheet. Always check the sheet, even for the evergreen new-customer code; the % rate or $ amount can change.</p>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · "Do you have a subscription option?"</span>
        <p>Customers familiar with our other brands sometimes ask if Clean &amp; Hit has a Subscribe &amp; Save plan. The answer is <strong>no — it's a one-time purchase, not a subscription product.</strong> If a customer mentions wanting auto-replacements or a refill plan, log it as product feedback and route it to the Brand Lead so we can size the demand for a future accessory or refill SKU.</p>
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
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · The expired-code playbook</span>
        <p>When a customer asks you to honor an <strong>expired</strong> or <strong>incorrect code</strong>: <strong>(1)</strong> Verify on the current monthly discount sheet whether the code was real and when it expired. <strong>(2)</strong> If it expired within the last 7 days and the customer was a reasonable email subscriber, use the <strong>CX goodwill code</strong> (capped, listed on the sheet) at parity — don't make up a new percentage. <strong>(3)</strong> If it never existed or the request is out of bounds, politely explain the current promotion and offer the new-customer code if they haven't used it. <strong>(4)</strong> Never argue. Always document the goodwill code use in the order notes.</p>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · Sheet first, then go live</span>
        <p>Every code goes on the monthly sheet <strong>before</strong> it goes live in any channel. The sheet is what CX reads when a customer calls — if the code isn't there, CX won't honor it, and that turns into a refund request that's harder to undo than a missed sheet update. Same rule for influencer codes, partner codes, and one-off recovery codes.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">👋 New Hire · Get the sheet link in week 1</span>
        <p>Ask your manager or post in the <strong>#discounts</strong> Slack channel for the link to the monthly discount sheet on day one or two. Bookmark it. Not having the sheet open while you're handling a code question is the #1 cause of "I told the customer the wrong thing" tickets in the first month.</p>
      </div>

    </div>
  </div>
</section>

<!-- 17 · SEO -->
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

      <p>SEO is the cheapest traffic Clean &amp; Hit will ever buy — earned visits compound month over month, don't disappear when paid budgets get cut, and tend to convert at higher rates because the visitor came in with intent. The trade-off is that SEO is slow. Don't expect a new piece of content to rank in week one; expect it in month three to six.</p>

      <h3>Priority keyword themes</h3>
      <ol>
        <li><strong>"Golf club cleaner" / "golf club cleaning brush"</strong> — high-intent commercial keywords. Customers shopping for the category. Protect with strong PDP, comparison content, and category pages.</li>
        <li><strong>"How to clean golf clubs"</strong> — informational, top of funnel. Long-form blog content that captures DIY-leaning searchers and converts them to "or just buy this."</li>
        <li><strong>"Why is my wedge not spinning" / "how to get more spin on wedge"</strong> — performance-problem keywords. The customer doesn't know they have an equipment-care problem yet.</li>
        <li><strong>"Best golf gifts for him" / "Father's Day golf gifts"</strong> — seasonal, gift-buyer audience. Big spike in May–June and November–December.</li>
        <li><strong>"Motorized golf brush" / "rechargeable golf cleaner"</strong> — long-tail, high-conversion. Customers searching for our exact category type.</li>
        <li><strong>"Cart accessories for golf cart"</strong> — adjacent, mid-funnel. Capture the customer who's outfitting their cart.</li>
        <li><strong>"PGA Show new products 2025"</strong> — earned PR keyword. Decays over time but worth the asset.</li>
      </ol>

      <h3>Team ownership</h3>
      <table>
        <thead><tr><th>SEO asset</th><th>Owned by</th></tr></thead>
        <tbody>
          <tr><td>Product page copy &amp; meta</td><td>Brand + Marketing</td></tr>
          <tr><td>Blog content (guides, "why" articles)</td><td>Marketing / Content</td></tr>
          <tr><td>Meta titles &amp; descriptions across the site</td><td>Marketing / Web Dev</td></tr>
          <tr><td>Image alt text</td><td>Creative (at file delivery) + Web Dev (at upload)</td></tr>
          <tr><td>Schema markup (Product, FAQ, Review)</td><td>Web Dev</td></tr>
          <tr><td>Site speed &amp; Core Web Vitals</td><td>Web Dev</td></tr>
          <tr><td>Backlinks (PR, partner content, golf media)</td><td>Marketing / Partnerships</td></tr>
          <tr><td>Review volume &amp; freshness</td><td>CX (post-purchase ask) + Marketing (review platform setup)</td></tr>
        </tbody>
      </table>

      <h3>Do's &amp; Don'ts</h3>
      <div class="do-dont">
        <div class="do">
          <h4>Do</h4>
          <ul>
            <li>Write for golfers first, search engines second — clarity wins both</li>
            <li>Use specific golf terminology (wedge grooves, U-grooves, bite, spin)</li>
            <li>Build internal links from blog content to PDPs naturally</li>
            <li>Compress and properly name every image (alt text + descriptive filename)</li>
            <li>Build backlinks from real golf media, not link farms</li>
            <li>Track Google Search Console weekly; act on impression spikes</li>
          </ul>
        </div>
        <div class="dont">
          <h4>Don't</h4>
          <ul>
            <li>Keyword-stuff PDPs — Google's been past that since 2014</li>
            <li>Buy backlinks or run any "SEO package" from outside vendors without approval</li>
            <li>Duplicate content across pages (especially a problem when copying PDP into category pages)</li>
            <li>Rely on Google to figure out poorly-named images (clean-and-hit-cart-mounted.jpg, not IMG_4823.jpg)</li>
            <li>Chase every keyword — pick a few themes and own them</li>
            <li>Skip schema markup; it's the easiest free win in the category</li>
          </ul>
        </div>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · Ladder content to a theme</span>
        <p>Every blog post, every PR placement, every guide page should ladder back to one of the priority keyword themes above. <strong>If a piece of content doesn't have a clear keyword theme, it shouldn't exist.</strong> "Five ways to enjoy your weekend round" has no theme; "Why your wedge isn't spinning (and how to fix it in 5 seconds)" has a theme and a clear path to the PDP.</p>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · Asset names are SEO</span>
        <p>When you deliver a final image or video to the web team, name the file something Google can read — <code>clean-and-hit-cart-mounted-wedge-clean.jpg</code>, not <code>final-final-v3.jpg</code>. Include alt text in your handoff doc so it doesn't get auto-generated as "image." Compress images before delivery (WebP, &lt;150KB for hero, &lt;50KB for inline) so the page actually loads.</p>
      </div>

      <h3>Tracking &amp; tools</h3>
      <ul>
        <li><strong>Google Search Console</strong> — primary source of truth for what we rank for and what gets clicked</li>
        <li><strong>Ahrefs or Semrush</strong> — competitive and backlink tracking</li>
        <li><strong>Monthly review</strong> owned by Marketing: top 20 ranking keywords, top 10 page-by-page performance, three biggest opportunities for next month</li>
      </ul>

    </div>
  </div>
</section>

<!-- 18 · CRO -->
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

      <p>Converting the traffic we already have is cheaper than buying more. A 0.5-point lift in conversion rate compounds across every dollar of paid spend — at scale, it's the difference between a profitable quarter and a break-even one. CRO is everyone's job, but most of the wins come from a small number of pages: home, PDP, cart, and checkout.</p>

      <h3>The 6-stage funnel</h3>
      <table>
        <thead><tr><th>Stage</th><th>What the customer is asking</th><th>What we need to answer</th></tr></thead>
        <tbody>
          <tr><td><strong>1 · Landing</strong></td><td>"Is this what I'm looking for?"</td><td>Hero clarity — what is it, who is it for, why trust it. In 3 seconds, no scroll required.</td></tr>
          <tr><td><strong>2 · PDP</strong></td><td>"Does this actually do what they say?"</td><td>Demo video, before/after, social proof, founder credibility, FAQ inline.</td></tr>
          <tr><td><strong>3 · Add to cart</strong></td><td>"Am I sure I want this?"</td><td>Free-shipping threshold messaging, return policy snippet, trust badges visible above the button.</td></tr>
          <tr><td><strong>4 · Cart</strong></td><td>"Did I miss a discount?"</td><td>Free-shipping progress bar, evergreen new-customer code visible (if not yet applied), no surprise charges.</td></tr>
          <tr><td><strong>5 · Checkout</strong></td><td>"Is this safe and fast?"</td><td>Few form fields, multiple payment methods (Apple Pay, Shop Pay, Google Pay), trust signals, no surprise shipping costs.</td></tr>
          <tr><td><strong>6 · Post-purchase</strong></td><td>"Did this actually work? When does it ship?"</td><td>Confirmation page, transactional email within 5 min, shipping email within 24 hr, "here's how to use it" guide 1 day before delivery.</td></tr>
        </tbody>
      </table>

      <h3>High-impact CRO levers</h3>
      <ul>
        <li><strong>Hero clarity above the fold</strong> — does the visitor know what Clean &amp; Hit is and why it matters in 3 seconds without scrolling?</li>
        <li><strong>Demo video on PDP</strong> — the product is visual; a 15-second demo of dirty-to-clean grooves does more than 500 words of copy.</li>
        <li><strong>Social proof placement</strong> — review count + star rating visible above the fold, real customer photos, third-party press (PGA Show, golf media).</li>
        <li><strong>Founder credibility</strong> — until the review base scales, "designed by a scratch golfer" carries the social-proof load.</li>
        <li><strong>Free-shipping messaging</strong> — threshold visible in nav, on PDP, and in cart with a progress bar.</li>
        <li><strong>FAQ on PDP</strong> — Clean &amp; Hit customers ask the same 8–10 questions before buying. Answering them inline beats forcing them to navigate to /faq.</li>
        <li><strong>Cart abandonment recovery</strong> — email + SMS flow for abandoned carts. Industry standard recovery rate is 10–15%; we should hit that minimum.</li>
        <li><strong>Checkout speed</strong> — page load time, form field count, payment method options. Each second of delay drops conversion ~7%.</li>
        <li><strong>Trust signals at checkout</strong> — return policy snippet, secure-payment badges, contact info visible.</li>
        <li><strong>Mobile optimization</strong> — &gt;65% of golf-accessory traffic is mobile. Test mobile-first; desktop is the bonus.</li>
      </ul>

      <h3>How to run a CRO test</h3>
      <ol>
        <li><strong>Form a hypothesis.</strong> Not "let's try moving the button." Instead: <em>"Adding a 15-second demo video above the Add-to-Cart button will lift PDP conversion by 8–12% because it answers the 'does this actually work' objection without requiring a scroll."</em></li>
        <li><strong>Change one variable.</strong> Multi-variable tests are unreadable — you'll never know what worked.</li>
        <li><strong>Calculate sample size before launching.</strong> Most tests need at least 1,000+ conversions per variant for statistical significance. Underpowered tests produce false signals.</li>
        <li><strong>Run a full week minimum.</strong> Weekday/weekend traffic differs, especially for a golf brand where Saturday/Sunday spike massively.</li>
        <li><strong>Track downstream metrics, not just CTR.</strong> A button that gets more clicks but doesn't convert at checkout is a worse button.</li>
        <li><strong>Document the result.</strong> Win, lose, or no-effect — write up what you tested, what happened, and what you learned. This is how the team gets smarter over time.</li>
      </ol>

      <div class="team-callout marketing">
        <span class="team-tag">📢 Marketing · One quality test per month beats five rushed ones</span>
        <p>The temptation is to test everything. Resist it. Pick the highest-impact lever for the quarter (usually PDP demo video, social proof placement, or checkout flow), run a clean test, learn, ship. <strong>Five rushed tests with bad sample sizes will tell you nothing</strong>; one well-designed test will give you a result you can act on.</p>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">🎨 Creative · Above the fold has 3 seconds</span>
        <p>The hero on every Clean &amp; Hit page — home, PDP, landing — needs to answer three questions in three seconds, no scroll required: <strong>What is this? Who is it for? Why trust it?</strong> If a visitor has to scroll to figure out we're a golf-club cleaner, the page is failing the basic CRO test before any other lever even matters.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">👋 New Hire · Watch 10 mobile session recordings</span>
        <p>Before your first CRO meeting, ask the Web Dev or Marketing team for access to session-recording software (Hotjar, Microsoft Clarity, or similar) and watch 10 real mobile sessions on cleanandhit.com. You'll see exactly where customers get confused, where they bounce, and what they tap when they don't mean to. Nothing in a slide deck teaches you faster.</p>
      </div>

      <h3>Metrics to watch</h3>
      <ul>
        <li><strong>Conversion rate</strong> (sessions → orders) — primary KPI, owned by Marketing/Growth</li>
        <li><strong>Average order value (AOV)</strong> — single-SKU brand so AOV is roughly unit price; future bundles will move this</li>
        <li><strong>Cart abandonment rate</strong> — review weekly; recovery flow performance reviewed monthly</li>
        <li><strong>Mobile conversion rate</strong> — tracked separately from desktop; the bigger lever</li>
        <li><strong>Monthly review</strong> owned by Marketing/Growth</li>
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
        <h2>Glossary</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Terms and acronyms that show up across this hub, the broader Inventel portfolio, and customer conversations. Worth knowing all of them — about half come up in the first 30 days on this brand.</p>

      <div class="glossary">
        <dl>
          <dt>Approach shot</dt>
          <dd>Any shot intended to land on or near the green, typically from 100–200 yards out. Usually a wedge or short iron, where clean grooves matter most. The clearest "moment of truth" for whether dirty grooves are costing the customer strokes.</dd>

          <dt>AOV (Average Order Value)</dt>
          <dd>Total revenue ÷ number of orders. Because Clean &amp; Hit is currently a single-SKU brand, AOV roughly equals the product's unit price. Future bundles (gift sets, B2B multi-packs) will move this number.</dd>

          <dt>Battlecard</dt>
          <dd>A scripted talking-point card for a specific objection or competitor. The objection table in section 9 is a battlecard set. CX, sales, and partnership reps can pull from it directly.</dd>

          <dt>Bite</dt>
          <dd>Golfer's shorthand for a ball that lands and stops quickly on the green instead of rolling out. High spin gives a ball more bite; clean grooves help the club impart that spin.</dd>

          <dt>Cart fleet</dt>
          <dd>The set of golf carts owned and rented out by a course. Sizes range from ~30 carts at small public courses to 100+ at private clubs and resorts. The B2B sale for Clean &amp; Hit centers on outfitting these fleets.</dd>

          <dt>Club face</dt>
          <dd>The flat, angled surface of a golf club that strikes the ball. The cleanliness of this surface — particularly the grooves cut into it — is the entire reason Clean &amp; Hit exists.</dd>

          <dt>CRO (Conversion Rate Optimization)</dt>
          <dd>The discipline of increasing the percentage of website visitors who complete a desired action (buying, signing up). For Clean &amp; Hit the primary CRO target is sessions → orders. See <a href="#cro">section 18</a>.</dd>

          <dt>CTA (Call to Action)</dt>
          <dd>The button or link that asks the customer to do something — &quot;Shop Now,&quot; &quot;Add to Cart,&quot; &quot;Get the Code.&quot; Clarity beats cleverness on every CTA.</dd>

          <dt>DTC (Direct-to-Consumer)</dt>
          <dd>Selling directly to the end customer through our own channels (cleanandhit.com, email, paid social) rather than through a retailer. Clean &amp; Hit's primary business model.</dd>

          <dt>Evergreen Offer</dt>
          <dd>A discount or promotion that is <em>always on</em> — not tied to a calendar window or short-term campaign. The standing example at Clean &amp; Hit is the <strong>New Customer first-order discount</strong> captured via email signup. Evergreen offers still appear on the monthly discount sheet so everyone knows the exact rate, but unlike seasonal or flash promos, you can assume they're live unless the sheet flags otherwise. Note: Clean &amp; Hit does <strong>not</strong> have a Subscribe &amp; Save evergreen — it's not a subscription product.</dd>

          <dt>FTC disclosure</dt>
          <dd>The Federal Trade Commission requires that paid, gifted, or otherwise compensated endorsements be clearly disclosed (#ad, #sponsored, "paid partnership with..."). Applies to every influencer, ambassador, and partner post. Not optional.</dd>

          <dt>Grooves</dt>
          <dd>The horizontal channels machined into the face of a wedge or iron. They impart spin on the ball; dirt and grass clogged in the grooves measurably reduce that spin. Cleaning the grooves is the central job of the Clean &amp; Hit brush.</dd>

          <dt>Handicap</dt>
          <dd>A numerical measure of a golfer's playing ability, lower is better. Scratch = 0; mid-handicap = 10–18; high-handicap = 20+. Clean &amp; Hit's core customer is roughly the 10–22 handicap recreational golfer.</dd>

          <dt>PGA Show</dt>
          <dd>The annual golf-industry trade show held in Orlando, Florida. The largest professional event in the category. Clean &amp; Hit debuted there in <strong>January 2025 at Booth #3815</strong>, with founder Darrin Vaughan and ambassador Beau Rials.</dd>

          <dt>PDP (Product Detail Page)</dt>
          <dd>The shop page for an individual product. For Clean &amp; Hit, the single PDP at cleanandhit.com is the highest-leverage page on the entire site — every CRO test should consider it first.</dd>

          <dt>Pace of play</dt>
          <dd>The speed at which a group moves through a round. Slow pace of play is one of the biggest etiquette concerns in modern golf. The pace-of-play marketing angle for Clean &amp; Hit is that the product cleans clubs without slowing the round.</dd>

          <dt>Pro shop</dt>
          <dd>The retail store at a golf course or club, run by the head pro. Sells equipment, apparel, balls, and accessories. A primary B2B channel for Clean &amp; Hit.</dd>

          <dt>RMA (Return Merchandise Authorization)</dt>
          <dd>The number issued to a customer who is approved to return a product. Required before any return is shipped back. CX issues RMAs after confirming the return falls within policy.</dd>

          <dt>Scratch golfer</dt>
          <dd>A golfer with a 0 handicap — capable of playing to par. Founder Darrin Vaughan is a scratch player; this is a credibility marker, not a customer descriptor (most customers are not scratch players).</dd>

          <dt>SKU (Stock Keeping Unit)</dt>
          <dd>A unique identifier for a sellable product or variant. Clean &amp; Hit currently has one SKU — the hero unit. Future accessories or bundles would each get their own SKU.</dd>

          <dt>Spin</dt>
          <dd>The rotation imparted on a golf ball at impact. Higher spin = more control on the green (the ball stops faster, grips firmer). Dirt in the grooves reduces spin, which is why clean clubs perform better on approach shots.</dd>

          <dt>U-groove / V-groove</dt>
          <dd>Two common groove cross-section shapes machined into wedges and irons. Different cleaning needs but the Clean &amp; Hit brush handles both.</dd>

          <dt>USGA</dt>
          <dd>United States Golf Association — the governing body for the rules of golf in the US. Regulations on equipment (including groove specifications) come from here.</dd>

          <dt>Wedge</dt>
          <dd>A short, high-loft iron designed for short approach shots, chips, and sand play. Wedges have the deepest grooves of any club in a bag and are the dirtiest after almost every shot, which makes them the #1 use case for Clean &amp; Hit.</dd>
        </dl>
      </div>

    </div>
  </div>
</section>

<!-- 20 · RETURN POLICY -->
<section id="returns">
  <div class="card collapsible" data-section="returns">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">20 · Returns</span>
        <h2>30-Day Return Policy</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Clean &amp; Hit follows the <strong>standard Inventel 30-day return policy</strong> with a few brand-specific operational notes called out below. Some exceptions apply. The same policy is published on cleanandhit.com.</p>

      <div class="policy-card">
        <h3>📦 30-Day Return Policy <em style="font-weight:400;font-size:1rem">(note: some exceptions may apply)</em></h3>
        <p>All returns are subject to processing and handling fees which vary depending on your original order. If you decide to cancel or return your order, you will be responsible for the cost of return shipping.</p>
        <p>For return information, please call customer service at <a href="tel:8885697148">+1 888-569-7148</a> between <strong>8:30 a.m. and 5:30 p.m. Monday to Friday, EST</strong>, or email us at <a href="mailto:hello@cleanandhit.com" target="_blank" rel="noopener">hello@cleanandhit.com</a> to get a return authorization number &amp; return-to address.</p>

        <div class="policy-contact" style="margin-top:14px">
          📞 <strong>Phone:</strong> 888-569-7148 · 8:30 AM – 5:30 PM ET, Mon–Fri<br>
          ✉️ <strong>Email:</strong> <a href="mailto:hello@cleanandhit.com" target="_blank" rel="noopener">hello@cleanandhit.com</a>
        </div>
      </div>

      <h3 style="margin-top:26px;margin-bottom:10px">Clean &amp; Hit-specific return rules</h3>
      <p style="font-size:13px;color:var(--ch-text-muted);margin-bottom:12px">These details go beyond the standard Inventel policy and apply only to Clean &amp; Hit orders. CX should know all four before quoting a refund total.</p>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · Resaleable condition required</span>
        <p>For non-defective returns, the unit must arrive in <strong>resaleable condition</strong> — original packaging, all included parts (charging cable, mounting hardware), no excessive on-course wear. Lightly used returns within the 30-day window are accepted; units showing significant rounds-of-use wear are evaluated case-by-case at the warehouse.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · Prepaid return labels</span>
        <p>The customer pays return shipping by default — they can use any carrier to ship back to the warehouse. If a prepaid return label is needed (customer specifically requests, or our error caused the return), <strong>the cost of the label is deducted from the refund</strong>. Always quote this up front so the refund total isn't a surprise.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · What gets refunded</span>
        <p>Only the cost of the product is refunded — <strong>original shipping the customer paid is not refunded</strong>, and the processing/handling fee (varies by order) is deducted from the product cost. The refund line is product subtotal minus processing fee minus any prepaid label cost. Make this clear in the refund explanation to avoid callbacks.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · DOA → replace, don't refund</span>
        <p>For genuinely defective-on-arrival units in the first 7 days, the default is <strong>replacement, not refund</strong>. The customer wanted the product. Send a fresh unit, arrange return of the defective one, and document. Only escalate to refund if the customer specifically asks for one or DOA replacements have already failed twice — in which case route to the CX Supervisor and flag a possible lot issue to the CX Fulfillment Supervisor.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · Verify it's actually our product</span>
        <p>Before processing any return, <strong>verify the customer actually has our product</strong>. There's an unrelated Australian "Clean Hit" — a manual squeeze-bottle brush — sold on Amazon. The five questions: motorized? USB-charged? has ground spikes? bought from cleanandhit.com? has an order number from us? If they answer no to the first three, it's not our product and we cannot process the return.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">👋 New Hire · Worked refund math example</span>
        <p>Customer ordered one Clean &amp; Hit unit. Product subtotal: $129. Outbound shipping the customer paid: $9.95. Total charged: $138.95. They contact CX on day 22 — within the 30-day window, original packaging, lightly used.</p>
        <p>You issue the RMA. Processing fee on this order is $12 (the exact amount appears on the order in Shopify). You quote the customer: <em>"Your refund will be $129 product cost minus the $12 processing fee = <strong>$117 back to your card</strong>. Your original $9.95 shipping isn't refunded. Refund posts within 5–10 business days of the unit arriving at the warehouse."</em></p>
        <p>The customer pays their own return shipping (~$10 ground). They net <strong>$117</strong> on a $138.95 purchase. Quote the math up front — don't surprise them with it.</p>
      </div>

      <p style="font-size:13px;color:var(--ch-text-muted);font-style:italic;margin-top:18px">⚠️ <strong>CX process reminder:</strong> Every return requires an RMA number before the customer ships anything back — never tell a customer to ship to the warehouse without one. Confirm the order is within 30 days, confirm the product matches what they actually have, quote the refund math including any deductions, and issue the RMA + return address (the warehouse address is in the Fulfillment &amp; Shipping section).</p>

    </div>
  </div>
</section>

<!-- 21 · FULFILLMENT & SHIPPING -->
<section id="fulfillment">
  <div class="card collapsible" data-section="fulfillment">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">21 · Fulfillment</span>
        <h2>Fulfillment &amp; Shipping</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>All Inventel orders — including every Clean &amp; Hit shipment — go through the central Inventel Warehouse in New Jersey. The flow is the same across all our brands so customers get a consistent experience regardless of which one they buy from.</p>

      <div class="address-block">
        <span class="addr-label">Outbound warehouse · all Inventel brands</span>
        <strong>Inventel Warehouse</strong><br>
        240 West Parkway, Middle Door<br>
        Pompton Plains, NJ 07444
      </div>

      <h3>The 5-step order flow</h3>
      <ol>
        <li><strong>Order placed.</strong> Customer checks out on cleanandhit.com (Shopify). Confirmation email goes out within 5 minutes.</li>
        <li><strong>Label printed.</strong> Order is pulled into the warehouse system and a shipping label is generated. <strong>This is the cancellation window</strong> — once the label prints, the order moves to picking and cancellation becomes much harder. CX has a short window (typically same-day, before the cutoff) to cancel.</li>
        <li><strong>Pick, pack, ship.</strong> Warehouse pulls the unit, packs it with mounting hardware and charging cable, applies the label, and hands off to the carrier.</li>
        <li><strong>In transit.</strong> 3–7 business days continental US (see table below). Tracking info is emailed to the customer when the label scans.</li>
        <li><strong>Returns.</strong> Returns ship back to the same warehouse address with the RMA number on the package.</li>
      </ol>

      <h3>Shipping options &amp; transit times</h3>
      <table>
        <thead><tr><th>Service</th><th>Region</th><th>Transit</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Ground standard</td><td>Lower 48</td><td>3–7 business days</td><td>Free shipping threshold per the Clean &amp; Hit cart bar — confirm current threshold on the live site</td></tr>
          <tr><td>Ground East Coast</td><td>NJ / NY / PA / CT / MA / MD / VA / NC</td><td>2–3 business days</td><td>Proximity to NJ warehouse</td></tr>
          <tr><td>Ground Midwest</td><td>IL / OH / MI / MN</td><td>3–4 business days</td><td>—</td></tr>
          <tr><td>Ground West Coast</td><td>CA / OR / WA / NV / AZ</td><td>4–6 business days</td><td>—</td></tr>
          <tr><td>AK / HI / PR / territories</td><td>Non-contiguous US</td><td>—</td><td><strong>Not supported by default.</strong> Escalate to CX Fulfillment Supervisor for case-by-case handling.</td></tr>
          <tr><td>International</td><td>Outside US</td><td>—</td><td>Not supported.</td></tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · The cancellation window</span>
        <p>Customers who want to cancel an order — for any reason, including "I changed my mind" or "I meant to use a code" — only have until the <strong>label is printed</strong>. After that, the standard answer is: <em>"We can't cancel the order at this point, but you have 30 days to return it once it arrives. I can pre-issue an RMA so you're ready to ship it back."</em> Don't promise a cancellation you can't deliver — once the label is generated, even Fulfillment can't easily reverse it.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · Free-shipping threshold</span>
        <p>Free shipping is offered above a dollar threshold that's set per brand and surfaced as a cart-bar on cleanandhit.com. <strong>Always confirm the current threshold against the live site or the monthly discount sheet</strong> before quoting it to a customer — it can shift with promotions. If a customer claims they qualified for free shipping but it didn't apply, check the cart subtotal at checkout (taxes and discounts can move them under the threshold) and file a goodwill credit if the math worked in their favor.</p>
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
        <h2>Test Orders</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Every team — Marketing, Brand, Web Dev, CX, Creative — periodically needs to place test orders to verify checkout, email flows, discount codes, or fulfillment flow. The procedure below is the same across every Inventel brand. <strong>Follow it exactly.</strong></p>

      <div class="alert-callout critical">
        <span class="alert-callout-title">⛔ Critical · Required first step</span>
        <p>You <strong>MUST</strong> type the literal phrase <strong>"Test Order"</strong> in the <strong>First Name</strong> field at checkout. This is how the warehouse identifies test orders and prevents them from being shipped to a real customer or charged for fulfillment. <strong>Every team follows this rule with zero exceptions.</strong> A test order missing the "Test Order" first name is treated as a real order and will ship to whatever address you put down — that's how mistakes turn into lost product, frustrated employees, and angry CX tickets.</p>
      </div>

      <h3>The 7-step test order procedure</h3>
      <ol>
        <li><strong>First Name field:</strong> type literally <code>Test Order</code> (capitalized, with the space). Nothing else.</li>
        <li><strong>Last Name field:</strong> your own name. This is how Fulfillment knows who placed the test.</li>
        <li><strong>Shipping address:</strong> the Inventel office, not your home, not the warehouse.
          <div class="address-block" style="margin-top:8px">
            <span class="addr-label">Test order ship-to</span>
            <strong>Inventel Office</strong><br>
            200 Forge Way, Unit 1<br>
            Rockaway, NJ 07866
          </div>
        </li>
        <li><strong>Payment method:</strong> any valid payment method you control. Test orders are charged in real money; the charge is reversed once Fulfillment confirms the test.</li>
        <li><strong>Notify CX Fulfillment Lead immediately</strong> on Google Chat. Don't email — Chat is faster and the Lead is monitoring it during business hours.</li>
        <li><strong>Include in your message:</strong> the order number, what you were testing (checkout flow, discount code, email trigger, etc.), and when the order can be cancelled (typically before label-print).</li>
        <li><strong>Wait for confirmation</strong> from the Fulfillment Lead before considering the test complete. Don't assume silence means it worked. The Lead will reply with a "got it, cancelling" or "got it, will reverse the charge."</li>
      </ol>

      <h3>Common test order scenarios</h3>
      <ul>
        <li><strong>Discount code testing</strong> — verify a new code applies correctly. Place the test, confirm the discount in the order summary, screenshot, notify Lead.</li>
        <li><strong>Free-shipping threshold</strong> — verify the cart-bar logic works at the right subtotal. Test both above and below the threshold.</li>
        <li><strong>Email trigger testing</strong> — confirm post-purchase, shipping, and follow-up emails fire correctly. Note any rendering issues across email clients.</li>
        <li><strong>Checkout UX changes</strong> — after Web Dev pushes a checkout update, place a test on mobile and desktop separately.</li>
        <li><strong>Fulfillment flow verification</strong> — periodic audits to confirm the warehouse pick-and-pack is delivering the right unit, the right cable, the right packaging.</li>
      </ul>

      <div class="team-callout cx">
        <span class="team-tag">📞 CX · If you see a "Test Order" in your queue</span>
        <p>Sometimes test-order confirmation emails reach CX inboxes through routing. <strong>Don't process them, don't reply to the customer, don't escalate</strong> — the First Name "Test Order" is your signal that this is internal. Verify with the Fulfillment Lead if you're unsure, but the default is: leave it alone, the test owner is handling it.</p>
      </div>

    </div>
  </div>
</section>

<!-- 23 · SHOPIFY PLATFORM -->
<section id="shopify">
  <div class="card collapsible" data-section="shopify">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">23 · Shopify</span>
        <h2>Shopify Platform</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>All Inventel storefronts run on Shopify, including cleanandhit.com. Knowing the platform helps CX, Marketing, and Web Dev troubleshoot faster — most "the site is broken" tickets are actually configuration questions, not platform outages.</p>

      <h3>What Shopify handles for us</h3>
      <table>
        <thead><tr><th>Function</th><th>Shopify role</th><th>CX implication</th></tr></thead>
        <tbody>
          <tr><td><strong>Storefront &amp; checkout</strong></td><td>Renders cleanandhit.com, processes the cart and checkout</td><td>If checkout breaks, check shopifystatus.com first before assuming our config is wrong</td></tr>
          <tr><td><strong>Customer accounts</strong></td><td>Login, address book, order history</td><td>CX can guide customers to /account/login — never ask them for their password</td></tr>
          <tr><td><strong>Order management</strong></td><td>Order list, fulfillment status, refund processing</td><td>CX uses Shopify admin to look up orders, issue refunds, and add notes</td></tr>
          <tr><td><strong>Discount codes</strong></td><td>Code generation, validation, expiration</td><td>If a code "isn't working," verify it's active in Shopify admin against the discount sheet</td></tr>
          <tr><td><strong>Email notifications</strong></td><td>Order confirmation, shipping, delivery emails</td><td>If a customer says "I didn't get a confirmation email," check spam first, then Shopify's email log</td></tr>
          <tr><td><strong>Refund processing</strong></td><td>Issues refunds back to the original payment method</td><td>Refunds typically post in 5–10 business days; longer for international cards. If the 10-day window passes without the refund showing, escalate to Web Dev.</td></tr>
        </tbody>
      </table>

      <h3>Key URLs</h3>
      <table>
        <thead><tr><th>Page</th><th>URL</th></tr></thead>
        <tbody>
          <tr><td>Customer account</td><td><a href="https://cleanandhit.com/account" target="_blank" rel="noopener">cleanandhit.com/account</a></td></tr>
          <tr><td>Account login</td><td><a href="https://cleanandhit.com/account/login" target="_blank" rel="noopener">cleanandhit.com/account/login</a></td></tr>
          <tr><td>All products</td><td><a href="https://cleanandhit.com/collections/all" target="_blank" rel="noopener">cleanandhit.com/collections/all</a></td></tr>
          <tr><td>Refund / return policy</td><td><a href="https://cleanandhit.com/policies/refund-policy" target="_blank" rel="noopener">cleanandhit.com/policies/refund-policy</a></td></tr>
          <tr><td>Shipping policy</td><td><a href="https://cleanandhit.com/policies/shipping-policy" target="_blank" rel="noopener">cleanandhit.com/policies/shipping-policy</a></td></tr>
          <tr><td>Privacy policy</td><td><a href="https://cleanandhit.com/policies/privacy-policy" target="_blank" rel="noopener">cleanandhit.com/policies/privacy-policy</a></td></tr>
          <tr><td>Terms of service</td><td><a href="https://cleanandhit.com/policies/terms-of-service" target="_blank" rel="noopener">cleanandhit.com/policies/terms-of-service</a></td></tr>
          <tr><td>Shopify status (for outage checks)</td><td><a href="https://www.shopifystatus.com/" target="_blank" rel="noopener">shopifystatus.com</a></td></tr>
        </tbody>
      </table>

      <div class="alert-callout">
        <span class="alert-callout-title">🔒 Security reminder</span>
        <p><strong>CX never handles passwords or payment information directly.</strong> If a customer can't log in, walk them through the password-reset flow at <a href="https://cleanandhit.com/account/login" target="_blank" rel="noopener">cleanandhit.com/account/login</a> — they reset it themselves. If a payment is failing, instruct them to update their card in their account or place a new order; never take card numbers over phone or email. This is non-negotiable across every Inventel brand.</p>
      </div>

      <h3>When to escalate to Web Dev</h3>
      <ul>
        <li>Site is fully down (confirm shopifystatus.com first — if Shopify itself is down, it's a platform issue, not ours)</li>
        <li>A discount code that's set up correctly in Shopify admin still isn't applying at checkout</li>
        <li>A customer says they're not receiving any email from us at all (could be a sender-domain issue)</li>
        <li>A subscription won't cancel — wait, scratch that, Clean &amp; Hit isn't a subscription product. If a customer thinks they have a subscription with us, route to CX Supervisor; this should not happen with this brand.</li>
        <li>A confirmation email is missing more than 30 minutes after order placement</li>
        <li>A refund hasn't appeared after 10 business days post-issuance</li>
      </ul>

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

      <p>The questions CX hears most often, with the answer in the same words a rep can speak or type. Customer-friendly, brand-on-voice, factually defensible.</p>

      <div class="faq-list">

        <h3>1 · How does Clean &amp; Hit actually work?</h3>
        <p>You hold the dirty face of your club against the motorized brush for 3–5 seconds. The brush spins, clears dirt and grass from the face and grooves, and you're done. The unit either stands on the ground next to your tee box (anchored by spikes on the bottom) or mounts to the back of your golf cart so it's always there between holes.</p>

        <h3>2 · Will the brush damage my club face?</h3>
        <p>No. The brush is engineered specifically for golf-club faces — soft enough not to scratch the surface, firm enough to clear out the grooves. The reversible rotation means even bristle wear, which keeps the brush gentle and effective for the life of the unit.</p>

        <h3>3 · How long does the battery last on one charge?</h3>
        <p>One full charge gets you through a complete round comfortably, with margin for several more rounds before recharging. It's USB-rechargeable, so you charge it the same way you charge your phone — plug it in the night before and you're set.</p>

        <h3>4 · Can left-handed golfers use it?</h3>
        <p>Yes. The brush rotation is <strong>reversible</strong> — the same unit works for left-handed and right-handed players. This was designed in deliberately so a single product fits every golfer in your group.</p>

        <h3>5 · Can I really mount it on my cart?</h3>
        <p>Yes. The unit comes with mounting hardware that attaches to the back of a standard golf cart. Once mounted, it stays there for the round and is ready every hole without rummaging through your bag for a brush or towel.</p>

        <h3>6 · What if my unit doesn't work when I get it?</h3>
        <p>First, charge it for at least 90 minutes — most "doesn't work out of the box" reports are actually un-charged units. If after a full charge the unit still doesn't power on, contact us at <a href="mailto:hello@cleanandhit.com">hello@cleanandhit.com</a> with your order number within 7 days and we'll send a replacement at no cost.</p>

        <h3>7 · How do I clean the unit itself?</h3>
        <p>The brush head is designed for the dirt of regular use; periodically tap it out and rinse the bristles with cool water (don't submerge the unit). Wipe down the body with a damp cloth as needed. Always dry it before charging.</p>

        <h3>8 · Where do you ship?</h3>
        <p>Continental US (lower 48) ships ground standard, with regional transit times running 2–7 business days depending on distance from our New Jersey warehouse. We don't currently ship to Alaska, Hawaii, US territories, or international addresses by default — for non-contiguous US, contact CX and we'll see what we can do case-by-case.</p>

        <h3>9 · What's your return policy?</h3>
        <p>30 days from delivery, in resaleable condition, with an RMA number issued by CX before you ship it back. Return shipping is the customer's responsibility, original outbound shipping is not refunded, and there's a processing fee that varies by order — we'll quote the exact deduction when we issue your RMA. Defective-on-arrival units are replaced at no cost. Full details in the <a href="#returns">Return Policy section</a>.</p>

        <h3>10 · Do you have a subscription option?</h3>
        <p>No — Clean &amp; Hit is a one-time purchase. Because the unit is built for heavy on-course use and there's no consumable to refill, it doesn't fit a Subscribe &amp; Save model. If you're interested in repeat purchases for a course pro shop or cart fleet, our B2B program offers volume pricing — contact us at <a href="mailto:hello@cleanandhit.com">hello@cleanandhit.com</a>.</p>

        <h3>11 · I bought a "Clean Hit" on Amazon and it's not motorized. What's going on?</h3>
        <p>That's a different product — there's an older Australian brand with a similar name that makes a manual squeeze-bottle brush. Our product is the motorized, USB-rechargeable unit with ground spikes, sold at <a href="https://cleanandhit.com/" target="_blank" rel="noopener">cleanandhit.com</a>. Easy mix-up; happy to point you to ours.</p>

        <h3>12 · Do you offer wholesale or bulk pricing for pro shops and courses?</h3>
        <p>Yes — we have a B2B program for pro shops, golf clubs, and course operators looking to outfit cart fleets. Volume pricing and dedicated account support are available. Email <a href="mailto:hello@cleanandhit.com">hello@cleanandhit.com</a> with subject "Wholesale Inquiry" and we'll route you to the partnerships team.</p>

      </div>

    </div>
  </div>
</section>

<!-- 25 · ADDITIONAL RESOURCES & CONTACTS -->
<section id="resources">
  <div class="card collapsible" data-section="resources">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">25 · Resources</span>
        <h2>Additional Resources &amp; Contacts</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Quick reference for everything that didn't fit elsewhere — links, contacts, internal tools, and the escalation path for when something needs a department, not a database.</p>

      <h3>Customer-facing contact channels</h3>
      <table>
        <thead><tr><th>Channel</th><th>Who answers it</th><th>When to use it</th></tr></thead>
        <tbody>
          <tr><td><strong>Phone:</strong> <a href="tel:8885697148">888-569-7148</a></td><td>CX team</td><td>Order questions, returns, general support · 8:30 AM – 5:30 PM ET, Mon–Fri</td></tr>
          <tr><td><strong>Email:</strong> <a href="mailto:hello@cleanandhit.com">hello@cleanandhit.com</a></td><td>CX team</td><td>RMA requests, written records, non-urgent questions, wholesale inquiries</td></tr>
          <tr><td><strong>Website:</strong> <a href="https://cleanandhit.com/" target="_blank" rel="noopener">cleanandhit.com</a></td><td>—</td><td>Product info, ordering, policies</td></tr>
          <tr><td><strong>Customer login:</strong> <a href="https://cleanandhit.com/account/login" target="_blank" rel="noopener">cleanandhit.com/account/login</a></td><td>Customer (self-managed)</td><td>Order history, address updates — point customers here first</td></tr>
        </tbody>
      </table>

      <h3>Internal references &amp; tools</h3>
      <table>
        <thead><tr><th>Resource</th><th>Where to find it</th><th>Owned by</th></tr></thead>
        <tbody>
          <tr><td>Shop · All collection (all SKUs &amp; current pricing)</td><td><a href="https://cleanandhit.com/collections/all" target="_blank" rel="noopener">cleanandhit.com/collections/all</a></td><td>Brand</td></tr>
          <tr><td>Refund / return policy (live, customer-facing)</td><td><a href="https://cleanandhit.com/policies/refund-policy" target="_blank" rel="noopener">cleanandhit.com/policies/refund-policy</a></td><td>Brand / Legal</td></tr>
          <tr><td>Brand Style Guide (full)</td><td>[ Inventel shared brand drive — request access ]</td><td>Brand Lead</td></tr>
          <tr><td>Logo &amp; asset library</td><td>[ Inventel shared brand drive — request access ]</td><td>Creative Director</td></tr>
          <tr><td>Product specs &amp; CDN images</td><td><a href="https://cleanandhit.com/" target="_blank" rel="noopener">cleanandhit.com</a> + Inventel asset library</td><td>Brand</td></tr>
          <tr><td>Monthly discount sheet</td><td>[ Internal PM tool — ask in #discounts on day one ]</td><td>Marketing</td></tr>
          <tr><td>Shopify admin (orders, refunds, code config)</td><td>shopify.com admin login · ask manager for access</td><td>Web Dev / CX Supervisor for permissions</td></tr>
          <tr><td>Shopify status (for outage checks)</td><td><a href="https://www.shopifystatus.com/" target="_blank" rel="noopener">shopifystatus.com</a></td><td>Web Dev</td></tr>
          <tr><td>Outbound warehouse address</td><td>240 West Parkway, Middle Door, Pompton Plains, NJ 07444</td><td>Fulfillment</td></tr>
          <tr><td>Test order ship-to address</td><td>200 Forge Way, Unit 1, Rockaway, NJ 07866</td><td>Fulfillment</td></tr>
          <tr><td>Press release (PGA Show 2025 launch)</td><td><a href="https://www.einpresswire.com/article/775138130/clean-and-hit-debuts-at-pga-show-2025-the-revolutionary-golf-tool-for-precision-play" target="_blank" rel="noopener">EIN Presswire — PGA Show 2025</a></td><td>Marketing</td></tr>
          <tr><td>Social media handles</td><td>Instagram: <a href="https://www.instagram.com/cleanandhit/" target="_blank" rel="noopener">@cleanandhit</a> · TikTok: <a href="https://www.tiktok.com/@clean.and.hit" target="_blank" rel="noopener">@clean.and.hit</a> · YouTube: <a href="https://www.youtube.com/channel/UCQOO1pgAXCf8PHTeD1ZDoZA" target="_blank" rel="noopener">Clean and Hit</a> · Facebook: <a href="https://www.facebook.com/share/1TEpfJFSUh/" target="_blank" rel="noopener">Clean and Hit</a></td><td>Brand / Marketing</td></tr>
        </tbody>
      </table>

      <h3>Escalation path by situation type</h3>
      <p style="font-size:13px;color:var(--ch-text-muted);font-style:italic">Listed by department only — personnel and individual emails change frequently and would create stale data here. The Brand Team maintains the staff directory separately.</p>

      <table>
        <thead><tr><th>Situation type</th><th>Escalate to</th></tr></thead>
        <tbody>
          <tr><td>Unresolved customer complaint</td><td><strong>CX Supervisor</strong></td></tr>
          <tr><td>Return or refund dispute</td><td><strong>CX Fulfillment Supervisor</strong></td></tr>
          <tr><td>Defective-on-arrival pattern (multiple DOAs in a short window — possible lot issue)</td><td><strong>CX Fulfillment Supervisor</strong> + Brand Lead</td></tr>
          <tr><td>Brand or product question (specs, claims, future SKU questions)</td><td><strong>Brand Lead</strong></td></tr>
          <tr><td>Wholesale / B2B / cart-fleet inquiry</td><td><strong>Marketing / Partnerships</strong></td></tr>
          <tr><td>Influencer or partnership inquiry</td><td><strong>Marketing / Partnerships</strong></td></tr>
          <tr><td>Press, media, or PR inquiry</td><td><strong>Marketing / Partnerships</strong> — never give a quote yourself</td></tr>
          <tr><td>Technical / website issue</td><td><strong>Web Dev Team</strong></td></tr>
          <tr><td>Discount sheet questions, missing or broken codes</td><td><strong>Marketing</strong></td></tr>
          <tr><td>Test order coordination</td><td><strong>CX Fulfillment Lead</strong> (Google Chat, immediate)</td></tr>
          <tr><td>Legal or compliance question (claims, FTC, IP)</td><td><strong>Legal / Compliance</strong></td></tr>
          <tr><td>Founder or ambassador appearance request</td><td><strong>Marketing / Partnerships</strong> — Darrin Vaughan and Beau Rials are gated through Partnerships</td></tr>
        </tbody>
      </table>

    </div>
  </div>
</section>

<!-- 26 · KNOWLEDGE CHECK QUIZ -->
<section id="quiz">
  <div class="card collapsible" data-section="quiz">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">26 · Knowledge Check Quiz</span>
        <h2>Prove It · 35 Questions · 70% to Pass</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <div id="quiz-intro">
        <p>Read everything above first. Then take this quiz to confirm you've internalized what matters most for handling Clean &amp; Hit customer interactions and brand decisions. <strong>Pass: 25 of 35 correct (70%).</strong> One question at a time, immediate feedback, correct answers shown when you miss. You can retake as many times as you need — no penalty.</p>
        <p>When you pass, you'll be able to enter your name and title, then print or save a certificate to send to your HR onboarding trainer as proof of completion.</p>
        <button class="quiz-start-btn" onclick="quizStart()">Start the quiz →</button>
      </div>

      <div id="quiz-container" style="display:none">
        <div id="quiz-active" class="quiz-container">
          <div class="quiz-progress">
            <span id="quiz-progress-text">Question 1 of 35</span>
            <span id="quiz-score-text">Score: 0 / 0</span>
          </div>
          <div class="quiz-progress-bar"><div id="quiz-progress-fill" class="quiz-progress-fill" style="width:2.86%"></div></div>
          <div id="quiz-question" class="quiz-question">Loading…</div>
          <div id="quiz-options" class="quiz-options"></div>
          <button id="quiz-next-btn" class="quiz-next-btn" onclick="quizNext()">Next Question →</button>
        </div>
        <div id="quiz-end" style="display:none"></div>
      </div>

    </div>
  </div>
</section>

<script>
/* ================ COLLAPSIBLE SECTIONS ================ */
function toggleSection(headerEl){
  const card = headerEl.closest('.collapsible');
  if(card) card.classList.toggle('collapsed');
}

/* ================ DRAWER ================ */
function openDrawer(){
  document.getElementById('toc-drawer').classList.add('open');
  document.getElementById('toc-drawer-overlay').classList.add('open');
}
function closeDrawer(){
  document.getElementById('toc-drawer').classList.remove('open');
  document.getElementById('toc-drawer-overlay').classList.remove('open');
}

/* ================ JUMP-TO HELPER ================ */
function expandAndScroll(targetId){
  const target = document.getElementById(targetId);
  if(!target) return;
  // Expand any collapsed parent
  const card = target.querySelector('.collapsible');
  if(card) card.classList.remove('collapsed');
  // If the target is a descendant inside a collapsible, expand that too
  const parentCollapsible = target.closest && target.closest('.collapsible');
  if(parentCollapsible) parentCollapsible.classList.remove('collapsed');
  // Scroll
  setTimeout(()=>{
    target.scrollIntoView({behavior:'smooth', block:'start'});
    // Gold flash
    target.classList.remove('flash-target');
    void target.offsetWidth;
    target.classList.add('flash-target');
    setTimeout(()=>target.classList.remove('flash-target'), 1900);
  }, 60);
}

document.querySelectorAll('#toc-drawer-nav a, .toc-tile').forEach(a => {
  a.addEventListener('click', e => {
    const href = a.getAttribute('href');
    if(href && href.startsWith('#')){
      e.preventDefault();
      const id = href.slice(1);
      closeDrawer();
      expandAndScroll(id);
    }
  });
});

/* ================ HUB SEARCH INDEX ================ */
const SEARCH_INDEX = [];

function buildSearchIndex(){
  // Sections (top-level)
  document.querySelectorAll('section[id]').forEach(s => {
    const h2 = s.querySelector('h2');
    if(h2){
      SEARCH_INDEX.push({
        type:'Section',
        title: h2.textContent.trim(),
        snippet: '',
        targetId: s.id
      });
    }
  });
  // Section h3 sub-headings
  document.querySelectorAll('section .section-body h3').forEach(h3 => {
    const sec = h3.closest('section[id]');
    if(!sec) return;
    // Give each h3 an id if it doesn't have one
    if(!h3.id){
      h3.id = sec.id + '-h-' + Math.random().toString(36).slice(2,7);
    }
    SEARCH_INDEX.push({
      type: 'Section',
      title: h3.textContent.trim(),
      snippet: 'in ' + (sec.querySelector('h2')?.textContent.trim() || sec.id),
      targetId: h3.id
    });
  });
  // Team callouts
  const calloutTypes = {cx:'CX Callout', creative:'Creative Callout', marketing:'Marketing Callout', brand:'Brand Callout', newhire:'New Hire Callout'};
  document.querySelectorAll('.team-callout').forEach(c => {
    const tag = c.querySelector('.team-tag');
    if(!tag) return;
    let type = 'Callout';
    for(const k in calloutTypes){ if(c.classList.contains(k)) type = calloutTypes[k]; }
    if(!c.id) c.id = 'callout-' + Math.random().toString(36).slice(2,8);
    const firstP = c.querySelector('p');
    SEARCH_INDEX.push({
      type: type,
      title: tag.textContent.trim(),
      snippet: firstP ? firstP.textContent.trim().slice(0,100) + '…' : '',
      targetId: c.id
    });
  });
  // Glossary terms
  document.querySelectorAll('.glossary dt').forEach(dt => {
    if(!dt.id) dt.id = 'gloss-' + dt.textContent.trim().toLowerCase().replace(/[^a-z0-9]+/g,'-');
    const dd = dt.nextElementSibling;
    SEARCH_INDEX.push({
      type: 'Glossary',
      title: dt.textContent.trim(),
      snippet: dd ? dd.textContent.trim().slice(0,100) + '…' : '',
      targetId: dt.id
    });
  });
  // FAQ entries (h3 inside .faq-list)
  document.querySelectorAll('.faq-list h3').forEach(h => {
    SEARCH_INDEX.push({
      type: 'FAQ',
      title: h.textContent.trim(),
      snippet: (h.nextElementSibling?.textContent.trim().slice(0,100) || '') + '…',
      targetId: h.id
    });
  });
  // Objection table rows (use first cell as title)
  document.querySelectorAll('#objections table tbody tr').forEach(tr => {
    const tds = tr.querySelectorAll('td');
    if(tds.length < 2) return;
    if(!tr.id) tr.id = 'obj-' + Math.random().toString(36).slice(2,7);
    SEARCH_INDEX.push({
      type: 'Objection',
      title: tds[0].textContent.trim(),
      snippet: tds[1].textContent.trim().slice(0,100) + '…',
      targetId: tr.id
    });
  });
}

/* ================ SEARCH UI ================ */
const searchInput = document.getElementById('hub-search');
const searchResults = document.getElementById('search-results');
let searchActiveIdx = -1;

function runSearch(q){
  q = q.trim().toLowerCase();
  if(q.length < 2){ searchResults.classList.remove('open'); searchResults.innerHTML = ''; return; }
  // Tokenize for multi-word AND
  const tokens = q.split(/\s+/).filter(Boolean);
  const matchFn = item => {
    const hay = (item.title + ' ' + item.snippet).toLowerCase();
    if(q.length <= 3){
      // Word-boundary regex for very short queries
      return tokens.every(t => new RegExp('\\b'+t.replace(/[.*+?^${}()|[\]\\]/g,'\\$&'),'i').test(hay));
    }
    return tokens.every(t => hay.includes(t));
  };
  const matches = SEARCH_INDEX.filter(matchFn).slice(0,40);
  if(!matches.length){
    searchResults.innerHTML = '<div class="search-empty">No matches. Try a shorter or different keyword.</div>';
    searchResults.classList.add('open');
    return;
  }
  // Group by type, in display order
  const order = ['Section','CX Callout','Creative Callout','Marketing Callout','Brand Callout','New Hire Callout','Callout','Glossary','FAQ','Objection'];
  const grouped = {};
  matches.forEach(m => { (grouped[m.type] = grouped[m.type] || []).push(m); });
  let html = '';
  order.forEach(g => {
    if(!grouped[g]) return;
    html += '<div class="search-group"><div class="search-group-label">'+g+'</div>';
    grouped[g].forEach(m => {
      html += '<a class="search-result" href="#'+m.targetId+'" data-target="'+m.targetId+'"><div>'+escapeHtml(m.title)+'</div>'+(m.snippet?'<div class="search-result-snippet">'+escapeHtml(m.snippet)+'</div>':'')+'</a>';
    });
    html += '</div>';
  });
  searchResults.innerHTML = html;
  searchResults.classList.add('open');
  searchActiveIdx = -1;
  // Wire clicks
  searchResults.querySelectorAll('.search-result').forEach(a => {
    a.addEventListener('click', e => {
      e.preventDefault();
      const id = a.dataset.target;
      searchResults.classList.remove('open');
      searchInput.value = '';
      expandAndScroll(id);
    });
  });
}

function escapeHtml(s){
  return s.replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));
}

if(searchInput){
  searchInput.addEventListener('input', e => runSearch(e.target.value));
  searchInput.addEventListener('keydown', e => {
    const items = searchResults.querySelectorAll('.search-result');
    if(e.key === 'ArrowDown'){
      e.preventDefault();
      if(!items.length) return;
      searchActiveIdx = Math.min(searchActiveIdx+1, items.length-1);
      items.forEach((el,i)=>el.classList.toggle('active', i===searchActiveIdx));
      items[searchActiveIdx].scrollIntoView({block:'nearest'});
    } else if(e.key === 'ArrowUp'){
      e.preventDefault();
      if(!items.length) return;
      searchActiveIdx = Math.max(searchActiveIdx-1, 0);
      items.forEach((el,i)=>el.classList.toggle('active', i===searchActiveIdx));
      items[searchActiveIdx].scrollIntoView({block:'nearest'});
    } else if(e.key === 'Enter'){
      e.preventDefault();
      if(searchActiveIdx >= 0 && items[searchActiveIdx]){
        items[searchActiveIdx].click();
      } else if(items.length){
        items[0].click();
      }
    } else if(e.key === 'Escape'){
      searchResults.classList.remove('open');
      searchInput.blur();
    }
  });
  // Close on outside click
  document.addEventListener('click', e => {
    if(!e.target.closest('.nav-search-wrap')) searchResults.classList.remove('open');
  });
}

/* Global keyboard shortcuts */
document.addEventListener('keydown', e => {
  if(e.key === 'Escape'){ closeDrawer(); }
  // / focuses search (when not already in an input)
  if(e.key === '/' && !['INPUT','TEXTAREA'].includes(document.activeElement.tagName)){
    e.preventDefault();
    if(searchInput){ searchInput.focus(); searchInput.select(); }
  }
});

/* ================ QUIZ ================ */
const quizQuestions = [
  {
    q: "What is Clean & Hit's hero (and currently only) product?",
    options: [
      "A motorized, USB-rechargeable, reversible-direction brush that cleans the face and grooves of golf clubs",
      "A microfiber towel and detergent kit for washing golf bags",
      "A countertop ultrasonic cleaner for clubs after the round",
      "A subscription service for replacement club grips"
    ],
    correct: 0
  },
  {
    q: "Why is the brush direction reversible?",
    options: [
      "So the brush can be used as a backup if the motor fails",
      "So the customer can adjust the speed for different clubs",
      "So the unit can also clean golf balls",
      "So one unit works equally well for left- and right-handed golfers and the bristles wear evenly"
    ],
    correct: 3
  },
  {
    q: "What stabilizes the unit when it's used on the ground next to the tee box?",
    options: [
      "Ground spikes built into the bottom of the unit",
      "A heavy steel base plate the customer fills with sand",
      "Rubber suction cups",
      "A built-in tripod"
    ],
    correct: 0
  },
  {
    q: "How is Clean & Hit powered?",
    options: [
      "It plugs directly into a golf cart's 12-volt system",
      "Two AAA batteries replaced as needed",
      "A small solar panel on the top of the unit",
      "Internal rechargeable battery, charged via USB"
    ],
    correct: 3
  },
  {
    q: "Where, in normal use, does the unit live during a round?",
    options: [
      "Clipped to the customer's belt",
      "Inside the customer's golf bag, removed before each shot",
      "Either standing on the ground next to the tee box, or mounted to the back of a golf cart",
      "On the cart's dashboard near the steering wheel"
    ],
    correct: 2
  },
  {
    q: "Roughly how long does the customer hold the dirty club face against the brush per cleaning?",
    options: [
      "30–45 seconds, with a vigorous scrubbing motion",
      "About 3–5 seconds per cleaning",
      "Until the LED turns off (about 2 minutes)",
      "As long as it takes — there's no recommended duration"
    ],
    correct: 1
  },
  {
    q: "An accessory store across town sells a manual squeeze-bottle brush also called 'Clean Hit'. Is that our product?",
    options: [
      "Sometimes — depends on the year of manufacture.",
      "Yes — it's the same product sold under different names.",
      "Yes — it's an older model of ours, still under our warranty.",
      "No — that's an unrelated, older Australian-brand manual brush. Ours is motorized, USB-rechargeable, with ground spikes."
    ],
    correct: 3
  },
  {
    q: "Who is the founder of Clean & Hit?",
    options: [
      "An anonymous engineering team at the Inventel warehouse",
      "Beau Rials, the celebrity golf host",
      "Darrin Vaughan, a New Jersey-based scratch golfer who developed the product over two years",
      "A retired PGA Tour player based in Florida"
    ],
    correct: 2
  },
  {
    q: "How long was the Clean & Hit product in development before its public debut, and where was it built?",
    options: [
      "It was an off-the-shelf product Inventel rebranded — no internal development",
      "Six months in China, launched directly on Amazon",
      "Five years in Australia, then licensed to a US distributor",
      "Two years of development in the United States, before launching at PGA Show 2025 in Orlando"
    ],
    correct: 3
  },
  {
    q: "Where did Clean & Hit publicly debut?",
    options: [
      "PGA Show 2025 in Orlando, Booth #3815, alongside ambassador Beau Rials",
      "The Masters Tournament merchandise tent",
      "An infomercial run during the 2024 Open Championship",
      "Amazon — the brand has only ever sold direct on Amazon"
    ],
    correct: 0
  },
  {
    q: "What is Clean & Hit's standard return window?",
    options: [
      "90 days, but only if the product is unopened",
      "14 days, no questions asked, prepaid label included",
      "30 days from the delivery date, in resaleable condition, with an RMA number issued by CX before shipping back",
      "There are no returns — final sale"
    ],
    correct: 2
  },
  {
    q: "Who is responsible for paying return shipping when a customer wants to send a unit back?",
    options: [
      "The carrier covers it under our shipping contract",
      "Inventel pays return shipping in all cases",
      "The customer pays return shipping; we don't issue prepaid labels by default",
      "Return shipping is split 50/50"
    ],
    correct: 2
  },
  {
    q: "When you issue an RMA, what's the most important thing to communicate up front to avoid follow-up complaints?",
    options: [
      "Quote the exact deduction (processing fee, no refund of original shipping) so the customer isn't surprised by the refund amount",
      "Promise a full refund and resolve any discrepancies later",
      "Avoid mentioning the deduction so the customer doesn't argue",
      "Tell the customer to dispute the charge with their card company"
    ],
    correct: 0
  },
  {
    q: "A customer says their Clean & Hit arrived non-functional out of the box. What's the default first move?",
    options: [
      "Tell them to dispose of the unit and order a new one at full price",
      "Issue an immediate refund without troubleshooting",
      "Walk them through charging the unit (90 minutes minimum) — most DOA reports are uncharged units. If it still won't power on, replace, don't refund.",
      "Escalate to Legal"
    ],
    correct: 2
  },
  {
    q: "A caller has a 'broken Clean Hit' and a screenshot showing a manual squeeze-bottle brush from Amazon. What do you do?",
    options: [
      "Process the return anyway as a goodwill gesture",
      "Politely explain it's a different brand (the older Australian manual product) — we cannot refund or replace a competitor's item. Offer the link to ours if they're interested.",
      "Issue a discount code on a new Clean & Hit purchase to keep the goodwill",
      "Escalate to CX Supervisor as a fraud case"
    ],
    correct: 1
  },
  {
    q: "Is original outbound shipping refunded when a customer returns a unit?",
    options: [
      "Yes — full shipping is always refunded as a courtesy",
      "No — only the product cost is refunded, minus the processing fee. Original shipping is not refunded.",
      "Only if the customer asks twice",
      "Only on orders above $200"
    ],
    correct: 1
  },
  {
    q: "Does CX ever take a customer's password or full credit card number over the phone or email?",
    options: [
      "Yes, when the customer specifically requests phone-based help",
      "Never. Walk customers through the password-reset flow themselves; for payment issues, instruct them to update their card in their account.",
      "Only the last four digits, written into order notes",
      "Only during business hours, not after hours"
    ],
    correct: 1
  },
  {
    q: "What is the default tone mode for Clean & Hit paid social ads?",
    options: [
      "Confident performance — lead with the outcome (better spin, distance, accuracy), not the feature list or founder story",
      "Quietly proud — heritage, founder, Made-in-USA every time",
      "Course-side conversational only — looser, no claims",
      "Humor-first — golf customers want to laugh"
    ],
    correct: 0
  },
  {
    q: "Which words/phrases should be AVOIDED in Clean & Hit copy?",
    options: [
      "'Miracle,' 'secret weapon,' 'revolutionary breakthrough,' 'game-changer' — anything that sounds like a 2 AM infomercial",
      "'Grooves,' 'spin,' 'wedge' — too technical for the general audience",
      "'Founder,' 'Made in USA,' 'patented' — too marketing-heavy",
      "'Performance,' 'precision,' 'durable' — too generic"
    ],
    correct: 0
  },
  {
    q: "Where do you verify whether a discount code is currently active before honoring it?",
    options: [
      "The monthly discount sheet — the single source of truth, posted in the internal PM tool and #discounts Slack channel",
      "The customer's screenshot of an old email",
      "Memory — codes generally stay active for months",
      "Whatever the website's homepage banner is currently showing"
    ],
    correct: 0
  },
  {
    q: "Is Clean & Hit a Subscribe & Save subscription product?",
    options: [
      "Yes — same Subscribe & Save discount as our other brands",
      "Yes — there's a quarterly subscription for replacement brushes",
      "No — it's a one-time purchase, durable single-SKU. There's no consumable refill, so no subscription model fits.",
      "Only for B2B cart-fleet accounts"
    ],
    correct: 2
  },
  {
    q: "What's the one always-on (evergreen) offer at Clean & Hit?",
    options: [
      "10% off every order, for any customer, forever",
      "The new-customer first-order discount, captured via email signup popup — assume live unless the discount sheet flags otherwise",
      "Free shipping with no threshold",
      "There are no evergreen offers — every code expires"
    ],
    correct: 1
  },
  {
    q: "Where does every Clean & Hit order ship from?",
    options: [
      "A drop-shipping partner in Shenzhen, China",
      "Inventel Warehouse, 240 West Parkway, Middle Door, Pompton Plains, NJ 07444",
      "Multiple regional fulfillment centers depending on the customer's zip code",
      "The founder's garage in New Jersey"
    ],
    correct: 1
  },
  {
    q: "What closes the cancellation window on a customer order?",
    options: [
      "There's no window — orders can be cancelled any time",
      "The customer receiving the shipping email",
      "Three business days after the order is placed",
      "The shipping label being printed — once it prints, the order moves to picking and cancellation becomes very difficult"
    ],
    correct: 3
  },
  {
    q: "What MUST you type in the First Name field when placing a test order?",
    options: [
      "Your real first name",
      "Literally 'Test Order' — capitalized, with the space. Every team follows this rule with zero exceptions.",
      "'Test' (one word)",
      "'Internal Order'"
    ],
    correct: 1
  },
  {
    q: "Where do test orders ship to?",
    options: [
      "The Pompton Plains warehouse",
      "Your home address",
      "The Inventel office: 200 Forge Way, Unit 1, Rockaway, NJ 07866",
      "Whatever address you want — test orders aren't shipped"
    ],
    correct: 2
  },
  {
    q: "If cleanandhit.com checkout appears to be broken, what's your first check?",
    options: [
      "Reset the customer's password",
      "shopifystatus.com — verify whether Shopify itself is having an outage before assuming our config is wrong",
      "Issue a manual order in the admin",
      "Tell the customer to clear their browser cache and try again later"
    ],
    correct: 1
  },
  {
    q: "Before any campaign, ad, email, or PR pitch goes live, what's the 'pillar test'?",
    options: [
      "Confirm the budget covers at least three platforms",
      "Ask which brand pillar it ladders to — if the answer is none or 'kind of all of them,' the work isn't ready. Pick one pillar and go deep.",
      "Get sign-off from at least four different team leads",
      "Run the copy through an AI grammar checker"
    ],
    correct: 1
  },
  {
    q: "The Clean & Hit competitive landscape is described as a category that has been roughly the same for how long?",
    options: [
      "About 50 years — most competitors are sub-$30 manual brushes, towels, and squeeze bottles",
      "About 5 years — it's a new category created by Clean & Hit",
      "About 15 years — since the launch of Frogger Brush Pro",
      "About 100 years — since the invention of golf"
    ],
    correct: 0
  },
  {
    q: "Which is a priority SEO keyword theme for Clean & Hit?",
    options: [
      "'PGA Tour leaderboard live'",
      "'Best smartwatch 2026'",
      "'Eco-friendly cleaning supplies'",
      "'Golf club cleaner' / 'how to clean golf clubs' / 'why is my wedge not spinning' — high-intent and informational golf-equipment queries"
    ],
    correct: 3
  },
  {
    q: "At the 'Landing' stage of the CRO funnel, what's the customer asking?",
    options: [
      "'Is this what I'm looking for?' — the hero must answer what it is, who it's for, and why to trust it in 3 seconds, no scroll",
      "'How does the warranty work?'",
      "'Do you have an Apple Pay option?'",
      "'What's the founder's biography?'"
    ],
    correct: 0
  },
  {
    q: "Pattern 05 from the universal winning-creative patterns is 'Contrast and switch framing.' What does it look like?",
    options: [
      "A switch from one tone of voice to another mid-ad",
      "Two competing brand logos shown side by side",
      "Before/after — dirty club face → clean club face. The visible 'switch' is the reason to scroll-stop.",
      "Switching between Reels and TikTok placements in the same campaign"
    ],
    correct: 2
  },
  {
    q: "The first concept mockup in the Sample Winning Creatives gallery uses what visual structure?",
    options: [
      "A grid of four customer testimonials with star ratings",
      "A 360-degree spinning view of the unit on a turntable",
      "A single full-bleed photo of Beau Rials holding the product",
      "Top half shows a dirty club face with mud and reduced spin/distance; bottom half shows the same face clean after 5 seconds — a vertical contrast with a gold CTA strip"
    ],
    correct: 3
  },
  {
    q: "A reporter calls asking for a quote about the Clean & Hit founder story. What do you do?",
    options: [
      "Direct them to leave a message at the customer support voicemail",
      "Give your honest take on the brand from your own experience",
      "Read the founder section of this hub aloud",
      "Politely decline to comment, take their contact info, and route to Marketing / Partnerships — never give a quote yourself"
    ],
    correct: 3
  },
  {
    q: "Which best describes Clean & Hit's core direct-to-consumer customer?",
    options: [
      "A PGA Tour professional looking for tour-only equipment",
      "A first-time golfer buying their first set of clubs at a big-box sporting store",
      "A recreational golfer roughly 35–70 years old who plays at least monthly, owns their own clubs, and has spent on equipment to gain a small edge",
      "A casual mini-golf player who plays 2–3 times per year"
    ],
    correct: 2
  }
];

// Quiz state
let quizState = {idx:0, answers:[], score:0, locked:false};

function quizStart(){
  quizState = {idx:0, answers:[], score:0, locked:false};
  const intro = document.getElementById('quiz-intro');
  if(intro) intro.style.display = 'none';
  document.getElementById('quiz-container').style.display = 'block';
  document.getElementById('quiz-active').style.display = 'block';
  document.getElementById('quiz-end').style.display = 'none';
  quizRender();
}

function quizRender(){
  const q = quizQuestions[quizState.idx];
  const total = quizQuestions.length;
  document.getElementById('quiz-progress-text').textContent = 'Question ' + (quizState.idx+1) + ' of ' + total;
  document.getElementById('quiz-score-text').textContent = 'Score: ' + quizState.score + ' / ' + quizState.idx;
  document.getElementById('quiz-progress-fill').style.width = ((quizState.idx+1)/total*100).toFixed(2) + '%';
  document.getElementById('quiz-question').textContent = q.q;
  const opts = document.getElementById('quiz-options');
  opts.innerHTML = '';
  q.options.forEach((opt, i) => {
    const b = document.createElement('button');
    b.className = 'quiz-option';
    b.textContent = opt;
    b.onclick = () => quizAnswer(i);
    opts.appendChild(b);
  });
  const nextBtn = document.getElementById('quiz-next-btn');
  nextBtn.classList.remove('show');
  nextBtn.textContent = (quizState.idx === total-1) ? 'See Results →' : 'Next Question →';
  quizState.locked = false;
}

function quizAnswer(picked){
  if(quizState.locked) return;
  quizState.locked = true;
  const q = quizQuestions[quizState.idx];
  const opts = document.querySelectorAll('#quiz-options .quiz-option');
  opts.forEach((b,i) => {
    b.classList.add('disabled');
    b.onclick = null;
    if(i === q.correct){ b.classList.add('correct'); }
    else if(i === picked){ b.classList.add('wrong'); }
    else { b.classList.add('dimmed'); }
  });
  if(picked === q.correct) quizState.score++;
  quizState.answers.push({picked, correct:q.correct});
  document.getElementById('quiz-score-text').textContent = 'Score: ' + quizState.score + ' / ' + (quizState.idx+1);
  document.getElementById('quiz-next-btn').classList.add('show');
}

function quizNext(){
  if(quizState.idx < quizQuestions.length - 1){
    quizState.idx++;
    quizRender();
  } else {
    quizFinish();
  }
}

function quizFinish(){
  const total = quizQuestions.length;
  const score = quizState.score;
  const passed = score >= 25; // 70% of 35 = 24.5, so 25
  document.getElementById('quiz-active').style.display = 'none';
  const end = document.getElementById('quiz-end');
  end.style.display = 'block';
  const today = new Date().toLocaleDateString('en-US', {year:'numeric',month:'long',day:'numeric'});
  if(passed){
    end.innerHTML = `
      <div class="quiz-pass">
        <div class="quiz-pass-banner">
          <span class="quiz-pass-emoji">🎉</span>
          <h3>Congratulations — You Passed!</h3>
          <p style="color:#FAF6E9;margin:0">You scored ${score} of ${total} on the Clean &amp; Hit Knowledge Check.</p>
        </div>
        <div class="quiz-cert">
          <div class="quiz-cert-lockup">Inventel Innovations × Clean &amp; Hit</div>
          <div class="quiz-cert-brand">CLEAN &amp; HIT</div>
          <p style="margin-bottom:6px;color:var(--ch-text-muted);font-size:13px">Knowledge Check Certificate of Completion</p>
          <label for="cert-name-input" style="display:block;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--ch-fairway);font-weight:700;margin:14px 0 6px">Name · Title</label>
          <input type="text" class="quiz-cert-name-input" id="cert-name-input" placeholder="Jane Smith · CX Agent" oninput="document.querySelector('.name-printed').textContent = this.value;">
          <span class="name-printed"></span>
          <span class="quiz-cert-passed-badge">✓ Passed</span>
          <div class="cert-stats">
            <div class="cert-stat"><div class="cert-stat-num">${Math.round(score/total*100)}%</div><div class="cert-stat-lbl">Score</div></div>
            <div class="cert-stat"><div class="cert-stat-num">${score} / ${total}</div><div class="cert-stat-lbl">Correct</div></div>
            <div class="cert-stat"><div class="cert-stat-num" style="font-size:1rem;font-family:'Inter',sans-serif;font-weight:700;line-height:1.2;padding-top:6px">${today}</div><div class="cert-stat-lbl">Date</div></div>
            <div class="cert-stat"><div class="cert-stat-num" style="font-size:1.1rem">PASS</div><div class="cert-stat-lbl">Result</div></div>
          </div>
          <div class="cert-track">Training Track · Clean &amp; Hit Brand Hub · v1.0 · April 2026</div>
          <div class="cert-actions">
            <button onclick="quizStart()" class="secondary">↩ Retake Quiz</button>
            <button onclick="printCert()">🖨️ Print Certificate</button>
          </div>
        </div>
        <div style="max-width:520px;margin:18px auto 0;padding:14px 18px;background:#fff;border:1px solid rgba(201,162,78,.35);border-radius:10px;color:var(--ch-fairway-deep);font-size:13px;line-height:1.6;text-align:center">
          <strong>📨 Send to your HR onboarding trainer as proof of completion.</strong><br>
          Use <strong>🖨️ Print Certificate</strong> above — in the browser's print dialog, either send to a printer <em>or</em> choose <strong>&quot;Save as PDF&quot;</strong> as the destination. A clean screenshot of this completion card is also accepted.
        </div>
      </div>`;
  } else {
    end.innerHTML = `
      <div class="quiz-fail">
        <span class="quiz-fail-emoji">📚</span>
        <h3>Not yet — let's review</h3>
        <div class="quiz-fail-score">${score} / ${total}</div>
        <p>You need <strong>25 of 35</strong> to pass. The good news: every question is in this hub. Before you retake, spend 15–20 minutes on the sections most likely to bridge the gap:</p>
        <ul style="text-align:left;display:inline-block;margin:14px auto;font-size:13.5px;line-height:1.8">
          <li><a href="#products" onclick="expandAndScroll('products');return false;">Section 02 · Product Line</a> — what the unit does, how it's powered, why it's reversible</li>
          <li><a href="#returns" onclick="expandAndScroll('returns');return false;">Section 20 · Return Policy</a> — the 30-day window, processing fee, and the worked refund example</li>
          <li><a href="#fulfillment" onclick="expandAndScroll('fulfillment');return false;">Section 21 · Fulfillment</a> — warehouse address, cancellation window</li>
          <li><a href="#testorders" onclick="expandAndScroll('testorders');return false;">Section 22 · Test Orders</a> — the 'Test Order' First Name rule</li>
          <li><a href="#creatives" onclick="expandAndScroll('creatives');return false;">Section 12 · Sample Winning Creatives</a> — universal patterns and the gallery</li>
        </ul>
        <div class="cert-actions">
          <button onclick="quizStart()">Retake</button>
        </div>
      </div>`;
  }
}

function printCert(){
  const nameInput = document.getElementById('cert-name-input');
  if(!nameInput || !nameInput.value.trim()){
    alert('Please type your name and title before printing.');
    if(nameInput) nameInput.focus();
    return;
  }
  // Sync name display
  document.querySelector('.name-printed').textContent = nameInput.value;
  // Make sure quiz section is expanded
  const quizCard = document.querySelector('#quiz .collapsible');
  if(quizCard) quizCard.classList.remove('collapsed');
  document.body.classList.add('printing');
  setTimeout(() => {
    window.print();
    setTimeout(() => document.body.classList.remove('printing'), 100);
  }, 80);
  window.addEventListener('afterprint', () => document.body.classList.remove('printing'), {once:true});
}

/* ================ INIT ================ */
window.addEventListener('DOMContentLoaded', () => {
  buildSearchIndex();
});
</script>
<?php bh_back_to_index_button('brand-hub-index', 'All Hubs'); ?>

</body>
</html>
