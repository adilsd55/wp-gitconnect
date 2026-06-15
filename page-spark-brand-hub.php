<?php /* Template Name: Spark Brand Hub */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Spark — Brand Knowledge Hub</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fraunces:wght@600;700;800;900&family=Inter:wght@300;400;500;600;700;800&family=DM+Mono:wght@400;500;700&display=swap" rel="stylesheet">
<style>
:root{
  /* SPARK PALETTE — sampled directly from sparkfirestarter.com brand assets */
  /* Signature: muted sage green + warm cream, with charcoal + ember as deep accents */
  --sp-sage:#708781;              /* signature brand sage — primary background, hero base */
  --sp-sage-deep:#5C726B;         /* darker sage, hover/active, depth */
  --sp-sage-light:#8FA39D;        /* lighter sage, secondary surface */
  --sp-cream:#E1DCC9;             /* signature cream/ivory — primary type on sage */
  --sp-cream-light:#F0EBDC;       /* lighter cream, page background */
  --sp-cream-deep:#D4CDB5;        /* deeper cream, accent */
  --sp-charcoal:#2A2A28;          /* deep charcoal — body type on light bg, deep accent */
  --sp-charcoal-soft:#3D3D3A;     /* softer charcoal */
  --sp-iron:#4A4A47;              /* mid-tone, secondary type */
  --sp-steel:#8A8580;             /* 304 stainless mid-tone */
  --sp-ember:#B86340;             /* warm ember accent — muted to harmonize with sage */
  --sp-ember-deep:#8F4D2D;        /* deep ember, hover */
  --sp-ember-bright:#C97A52;      /* bright ember, glow — softer than before */
  --sp-amber:#C49A65;             /* warm tan — subordinate to ember, not competing */
  --sp-bark:#5C4A38;              /* wood/outdoor brown */
  --sp-pine:#2F4A3A;              /* forest green for sustainability moments */
  --sp-text:#2A2A28;
  --sp-text-muted:#5C5048;
  --sp-link:#0055CC;
  --sp-white:#FFFFFF;
  --sp-danger:#B8391F;
  --sp-success:#2F4A3A;
  --nav-h:60px;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;background:var(--sp-cream-light);color:var(--sp-text);font-size:16px;line-height:1.6;-webkit-font-smoothing:antialiased}

/* TOP NAV */
#top-nav{position:sticky;top:0;z-index:1000;background:var(--sp-sage-deep);box-shadow:0 2px 12px rgba(0,0,0,.25)}
.nav-inner{display:flex;align-items:center;gap:14px;height:var(--nav-h);padding:0 20px;max-width:1200px;margin:0 auto}
.nav-brand{font-family:'Bebas Neue',sans-serif;font-size:20px;color:var(--sp-cream);white-space:nowrap;letter-spacing:.08em;flex-shrink:0}
.nav-search-wrap{flex:1;position:relative;max-width:420px}
.nav-search{width:100%;background:rgba(255,255,255,.06);border:1px solid rgba(184,99,64,.25);color:#fff;padding:7px 12px 7px 32px;border-radius:18px;font-size:13px;font-family:'Inter',sans-serif;outline:none;transition:all .15s}
.nav-search::placeholder{color:rgba(245,239,227,.5)}
.nav-search:focus{border-color:var(--sp-ember);background:rgba(255,255,255,.1)}
.nav-search-icon{position:absolute;left:10px;top:50%;transform:translateY(-50%);width:14px;height:14px;stroke:var(--sp-ember);fill:none;stroke-width:2;pointer-events:none}
.nav-top-toc-btn{background:transparent;border:1px solid var(--sp-ember);color:var(--sp-ember);padding:6px 14px;border-radius:20px;font-size:12px;font-weight:700;cursor:pointer;font-family:'DM Mono',monospace;letter-spacing:.05em;text-transform:uppercase;transition:all .2s;flex-shrink:0}
.nav-top-toc-btn:hover{background:var(--sp-ember);color:#fff}
@media (max-width:520px){.nav-brand{display:none}}
@media (max-width:700px){.nav-search-wrap{max-width:none}}

/* SEARCH RESULTS */
#search-results{position:absolute;top:100%;left:0;right:0;margin-top:6px;background:#fff;border-radius:10px;box-shadow:0 10px 32px rgba(0,0,0,.25);max-height:60vh;overflow-y:auto;display:none;z-index:1100}
#search-results.open{display:block}
.search-group{padding:8px 0;border-bottom:1px solid rgba(0,0,0,.06)}
.search-group:last-child{border-bottom:none}
.search-group-label{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--sp-ember);font-weight:700;padding:6px 14px}
.search-result{display:block;padding:8px 14px;color:var(--sp-text);text-decoration:none;font-size:13.5px;cursor:pointer;border-left:3px solid transparent;line-height:1.4}
.search-result:hover,.search-result.active{background:var(--sp-cream);border-left-color:var(--sp-ember)}
.search-result-snippet{font-size:11.5px;color:var(--sp-text-muted);margin-top:2px}
.search-empty{padding:18px 14px;color:var(--sp-text-muted);font-size:13px;font-style:italic;text-align:center}
.flash-target{animation:flashGold 1.8s ease-out}
@keyframes flashGold{0%{background:rgba(196,154,101,.45);box-shadow:0 0 0 4px rgba(196,154,101,.5)}100%{background:transparent;box-shadow:none}}

/* FLOATING TOC BUTTON */
#floating-toc-btn{position:fixed;bottom:24px;right:24px;z-index:998;background:var(--sp-ember);color:#fff;border:2px solid var(--sp-charcoal);width:56px;height:56px;border-radius:50%;cursor:pointer;box-shadow:0 6px 20px rgba(184,99,64,.5);display:flex;align-items:center;justify-content:center;transition:all .2s}
#floating-toc-btn:hover{background:var(--sp-ember-deep);transform:translateY(-2px);box-shadow:0 8px 24px rgba(184,99,64,.65)}
#floating-toc-btn svg{width:24px;height:24px;stroke:#fff;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* TOC DRAWER */
#toc-drawer-overlay{position:fixed;inset:0;background:rgba(21,17,14,.65);backdrop-filter:blur(4px);z-index:1500;opacity:0;pointer-events:none;transition:opacity .25s}
#toc-drawer-overlay.open{opacity:1;pointer-events:auto}
#toc-drawer{position:fixed;top:0;right:0;bottom:0;width:min(400px,92vw);background:var(--sp-cream);z-index:1501;padding:0;overflow-y:auto;transform:translateX(100%);transition:transform .3s cubic-bezier(.4,0,.2,1);box-shadow:-8px 0 30px rgba(0,0,0,.4);display:flex;flex-direction:column}
#toc-drawer.open{transform:translateX(0)}
.toc-drawer-header{display:flex;justify-content:space-between;align-items:center;padding:16px 20px;background:var(--sp-charcoal);color:#fff;border-bottom:3px solid var(--sp-ember);position:sticky;top:0;z-index:2}
.toc-drawer-title{font-family:'Bebas Neue',sans-serif;color:var(--sp-ember);font-size:1.4rem;letter-spacing:.06em}
.toc-drawer-close{background:rgba(255,255,255,.12);border:1px solid rgba(184,99,64,.4);color:#fff;font-size:20px;cursor:pointer;line-height:1;width:30px;height:30px;border-radius:50%;display:flex;align-items:center;justify-content:center;transition:all .15s}
.toc-drawer-close:hover{background:var(--sp-ember);color:#fff;border-color:var(--sp-ember)}
#toc-drawer-nav{padding:10px 12px 14px;display:flex;flex-direction:column;gap:3px}
#toc-drawer-nav a{display:flex;align-items:center;gap:10px;background:#fff;color:var(--sp-charcoal);text-decoration:none;padding:7px 12px;border-radius:7px;font-size:13px;font-family:'Inter',sans-serif;font-weight:600;border:1px solid rgba(184,99,64,.18);border-left:4px solid var(--sp-ember);transition:all .15s;line-height:1.2}
#toc-drawer-nav a:hover{background:var(--sp-ember);color:#fff;border-color:var(--sp-ember);border-left-color:var(--sp-amber);transform:translateX(3px);opacity:1;box-shadow:0 2px 8px rgba(184,99,64,.3)}
#toc-drawer-nav a:hover .toc-drawer-num{background:var(--sp-amber);color:var(--sp-charcoal)}
.toc-drawer-num{display:inline-flex;align-items:center;justify-content:center;min-width:30px;height:20px;padding:0 6px;background:var(--sp-ember);color:#fff;border-radius:4px;font-family:'DM Mono',monospace;font-size:10.5px;font-weight:700;letter-spacing:.02em;flex-shrink:0;transition:all .15s}
.toc-drawer-label{flex:1;min-width:0}

/* TOC SECTION (in-page) */
#toc-section .toc-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:10px;margin-top:10px}
.toc-tile{background:#fff;border:1px solid rgba(184,99,64,.18);border-left:4px solid var(--sp-ember);border-radius:10px;padding:14px 16px;text-decoration:none;color:var(--sp-text);display:flex;align-items:center;gap:12px;transition:all .2s;cursor:pointer}
.toc-tile:hover{background:var(--sp-cream-deep);border-left-color:var(--sp-amber);transform:translateX(3px);opacity:1;text-decoration:none}
.toc-tile-num{font-family:'DM Mono',monospace;color:var(--sp-ember);font-size:12px;font-weight:700;min-width:24px}
.toc-tile-label{font-size:14px;font-weight:600;color:var(--sp-charcoal)}

/* COLLAPSIBLES */
.card.collapsible{padding:0;overflow:hidden;transition:all .3s ease}
.section-header-bar{display:flex;align-items:center;justify-content:space-between;padding:22px 30px;cursor:pointer;user-select:none;background:linear-gradient(135deg,var(--sp-white) 0%,rgba(184,99,64,.08) 100%);transition:background .2s;border-bottom:1px solid transparent}
.section-header-bar:hover{background:linear-gradient(135deg,var(--sp-cream) 0%,rgba(184,99,64,.16) 100%)}
.section-header-bar .section-header-left{flex:1;min-width:0}
.section-header-bar .eyebrow{margin-bottom:4px}
.section-header-bar h2{margin:0;padding:0;border-bottom:none;font-size:1.5rem}
.section-toggle{background:transparent;border:1.5px solid var(--sp-ember);color:var(--sp-ember);width:32px;height:32px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .2s;margin-left:14px}
.section-toggle:hover{background:var(--sp-ember);color:#fff;border-color:var(--sp-ember)}
.section-toggle svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:2.5;stroke-linecap:round;transition:transform .3s}
.collapsed .section-toggle svg{transform:rotate(-180deg)}
.section-body{padding:10px 30px 30px;max-height:20000px;overflow:hidden;transition:max-height .4s ease,padding .3s ease,opacity .3s ease;opacity:1}
.collapsed .section-body{max-height:0;padding-top:0;padding-bottom:0;opacity:0}
.collapsed .section-header-bar{border-bottom-color:transparent}

/* SECTIONS */
section{padding:48px 20px;max-width:980px;margin:0 auto;scroll-margin-top:var(--nav-h)}
h1{font-family:'Bebas Neue',sans-serif;font-size:clamp(2.4rem,6.5vw,4.6rem);color:#fff;line-height:1;letter-spacing:.02em;text-transform:uppercase}
h2{font-family:'Fraunces',serif;font-size:clamp(1.6rem,3.5vw,2.4rem);font-weight:800;color:var(--sp-charcoal);margin-bottom:24px;padding-bottom:12px;border-bottom:3px solid var(--sp-ember);letter-spacing:-.01em}
h3{font-family:'Fraunces',serif;font-size:1.2rem;font-weight:700;color:var(--sp-ember);margin-bottom:10px}
h4{font-family:'Inter',sans-serif;font-size:1rem;font-weight:700;color:var(--sp-charcoal);margin-bottom:8px}
p{margin-bottom:14px;color:var(--sp-text)}
a{color:var(--sp-link);text-decoration:underline}
a:hover{opacity:.75}
.eyebrow{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--sp-ember);margin-bottom:8px;display:block;font-weight:600}
.card{background:var(--sp-white);border-radius:16px;padding:36px;margin-bottom:20px;box-shadow:0 2px 20px rgba(21,17,14,.07);border:1px solid rgba(184,99,64,.12)}

/* HERO — dark/moody charcoal with ember radial glow */
#hero{max-width:100%;padding:0;margin:0;background:linear-gradient(135deg,var(--sp-sage-deep) 0%,var(--sp-sage) 50%,var(--sp-sage-deep) 100%);position:relative;overflow:hidden}
#hero::before{content:"";position:absolute;inset:0;background-image:radial-gradient(circle at 20% 30%,rgba(225,220,201,.18) 0%,transparent 45%),radial-gradient(circle at 80% 75%,rgba(197,106,63,.22) 0%,transparent 50%),radial-gradient(circle at 50% 100%,rgba(212,167,99,.18) 0%,transparent 60%);pointer-events:none}
.hero-inner{max-width:980px;margin:0 auto;padding:64px 20px 56px;position:relative;z-index:1}
.hero-logo-wrap{display:flex;align-items:center;gap:20px;margin-bottom:28px;flex-wrap:wrap}
.hero-logo-wrap img{height:60px;object-fit:contain;background:#fff;padding:8px 16px;border-radius:8px}
.hero-logo-wrap img[data-failed="1"]{display:none}
.hero-logo-wrap img[data-failed="1"] + .hero-brand-text-fallback{display:inline-block}
.hero-brand-text-fallback{display:none;font-family:'Bebas Neue',sans-serif;font-size:2.4rem;color:#fff;letter-spacing:.06em}
.hero h1{color:#fff;margin-bottom:8px;text-shadow:0 2px 12px rgba(42,42,40,.4)}
.hero-tagline{font-size:1.2rem;color:var(--sp-cream);margin-bottom:10px;font-weight:600;font-family:'Fraunces',serif;font-style:italic}
.hero-meta{font-family:'DM Mono',monospace;font-size:13px;color:var(--sp-cream);opacity:.8;margin-bottom:28px;letter-spacing:.05em}
.hero-stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:14px;margin:28px 0}
.hero-stat{background:rgba(255,255,255,.08);border:1px solid rgba(225,220,201,.25);border-radius:12px;padding:18px;backdrop-filter:blur(4px)}
.hero-stat-num{font-family:'Bebas Neue',sans-serif;font-size:2.1rem;color:var(--sp-cream);line-height:1;margin-bottom:6px;letter-spacing:.02em}
.hero-stat-lbl{font-size:12px;color:#fff;opacity:.9;line-height:1.35}
.chip-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:18px}
.chip{display:inline-flex;align-items:center;gap:6px;background:#fff;color:var(--sp-link)!important;text-decoration:underline;padding:7px 14px;border-radius:20px;font-size:13px;font-weight:600;transition:transform .15s}
.chip:hover{transform:translateY(-1px);opacity:1}

.tag-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:16px}
.tag{background:var(--sp-ember);color:#fff;padding:5px 12px;border-radius:12px;font-size:12px;font-weight:700;letter-spacing:.02em}
.tag.tag-inventel{background:var(--sp-charcoal);color:var(--sp-ember)}

/* TABLES */
table{width:100%;border-collapse:collapse;margin:16px 0;background:#fff;border-radius:8px;overflow:hidden;font-size:14px}
th{background:var(--sp-charcoal);color:var(--sp-ember);padding:12px 14px;text-align:left;font-size:12px;text-transform:uppercase;letter-spacing:.07em;font-weight:700}
td{padding:12px 14px;border-bottom:1px solid rgba(21,17,14,.08);vertical-align:top}
tr:last-child td{border-bottom:none}
tr:nth-child(even) td{background:rgba(184,99,64,.05)}
.badge{display:inline-block;padding:3px 9px;border-radius:10px;font-size:11px;font-weight:700;letter-spacing:.03em;text-transform:uppercase}
.badge-core{background:var(--sp-ember);color:#fff}
.badge-accessory{background:var(--sp-pine);color:#fff}
.badge-discontinued{background:#888;color:#fff}

/* PRODUCT GALLERY (single hero SKU treated big) */
.product-hero{display:grid;grid-template-columns:1fr 1.3fr;gap:32px;align-items:start;background:linear-gradient(135deg,var(--sp-sage) 0%,var(--sp-sage-deep) 100%);border-radius:16px;padding:32px;margin:18px 0;color:#fff;border:1px solid rgba(225,220,201,.3)}
.product-hero-img{aspect-ratio:1/1;background:radial-gradient(circle at 50% 50%,rgba(184,99,64,.22) 0%,rgba(21,17,14,.6) 70%);border-radius:12px;display:flex;align-items:center;justify-content:center;border:1px solid rgba(184,99,64,.35);position:relative;overflow:hidden}
.product-hero-svg{width:78%;height:78%}
.product-hero-content h3{color:var(--sp-cream);font-size:1.5rem;margin-bottom:6px}
.product-hero-tagline{font-family:'Fraunces',serif;font-style:italic;color:var(--sp-cream);opacity:.85;font-size:1.05rem;margin-bottom:14px}
.product-hero-content p{color:#F5EFE3;margin-bottom:12px}
.product-hero-content strong{color:var(--sp-cream)}
.product-hero-content a{color:var(--sp-cream);text-decoration:underline}
.product-badge-row{display:flex;flex-wrap:wrap;gap:6px;margin-top:14px}
.product-badge-row .tag{background:rgba(225,220,201,.18);color:var(--sp-cream);border:1px solid rgba(225,220,201,.35);font-size:11px}
@media (max-width:720px){.product-hero{grid-template-columns:1fr;padding:24px}}

/* SPEC TABLE */
.spec-table{background:#fff;border:1px solid rgba(184,99,64,.18);border-radius:10px;padding:18px 22px;margin:14px 0;font-size:13.5px;line-height:1.6}
.spec-table dl{display:grid;grid-template-columns:max-content 1fr;gap:8px 18px}
.spec-table dt{font-family:'DM Mono',monospace;font-size:11px;text-transform:uppercase;letter-spacing:.08em;color:var(--sp-ember);font-weight:700;padding-top:2px}
.spec-table dd{color:var(--sp-text);margin:0}
.spec-table dd strong{color:var(--sp-charcoal)}
@media (max-width:560px){.spec-table dl{grid-template-columns:1fr}.spec-table dt{margin-top:8px}}

.feature-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:12px;margin:14px 0 8px}
.feature-tile{background:linear-gradient(135deg,#fff 0%,var(--sp-cream) 100%);border:1px solid rgba(184,99,64,.18);border-left:4px solid var(--sp-ember);border-radius:10px;padding:14px 16px}
.feature-tile-icon{font-size:1.4rem;margin-bottom:6px;display:block;line-height:1}
.feature-tile h4{margin-bottom:4px;font-size:13.5px;color:var(--sp-charcoal)}
.feature-tile p{margin:0;font-size:12.5px;color:var(--sp-text-muted);line-height:1.5}

/* PILLARS */
.pillars{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:20px}
.pillar{background:linear-gradient(135deg,var(--sp-white) 0%,rgba(184,99,64,.12) 100%);padding:22px;border-radius:12px;border-left:4px solid var(--sp-ember);transition:transform .2s}
.pillar:hover{transform:translateY(-3px)}
.pillar-icon{font-size:1.8rem;margin-bottom:10px;display:block}
.pillar h4{color:var(--sp-charcoal);margin-bottom:6px;font-size:1rem}
.pillar p{font-size:13px;color:var(--sp-text-muted);margin-bottom:0;line-height:1.5}

/* TONE / DO-DONT / ADJ / PERSONA / etc — full library so Stage 2+ has everything */
.tone-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:14px;margin-top:20px}
.tone{background:var(--sp-cream);padding:20px;border-radius:10px;border-top:4px solid var(--sp-ember)}
.tone-label{font-weight:700;color:var(--sp-charcoal);font-size:14px;margin-bottom:6px}
.tone-desc{font-size:13px;color:var(--sp-text-muted);margin-bottom:10px}
.tone-ex{font-family:'Fraunces',serif;font-style:italic;color:var(--sp-ember);font-size:14px;border-left:3px solid var(--sp-amber);padding-left:10px;line-height:1.5}

.do-dont{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:16px}
.do-dont > div{padding:20px;border-radius:10px}
.do{background:rgba(47,74,58,.08);border:1px solid var(--sp-pine)}
.dont{background:rgba(184,57,31,.08);border:1px solid var(--sp-danger)}
.do h4{color:var(--sp-pine)}
.dont h4{color:var(--sp-danger)}
.do ul,.dont ul{padding-left:18px;margin-top:8px}
.do li,.dont li{margin-bottom:6px;font-size:13px}
@media (max-width:640px){.do-dont{grid-template-columns:1fr}}

.adj-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:12px;margin-top:18px}
.adj{background:#fff;padding:16px;border-radius:10px;border:1px solid rgba(184,99,64,.2)}
.adj-title{font-weight:700;color:var(--sp-ember);font-size:14px;margin-bottom:5px;font-family:'DM Mono',monospace;text-transform:uppercase;letter-spacing:.05em}
.adj-desc{font-size:13px;color:var(--sp-text-muted);line-height:1.5}

.palette{display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:12px;margin-top:16px}
.swatch{border-radius:10px;overflow:hidden;border:1px solid rgba(21,17,14,.12)}
.swatch-color{height:80px}
.swatch-info{padding:10px;background:#fff;font-size:12px}
.swatch-name{font-weight:700;color:var(--sp-charcoal)}
.swatch-role{color:var(--sp-text-muted);margin:2px 0}
.swatch-hex{font-family:'DM Mono',monospace;color:var(--sp-ember);font-size:11px;font-weight:600}

.type-spec{background:#fff;padding:18px;border-radius:10px;border:1px solid rgba(184,99,64,.2);margin-bottom:10px}
.type-spec-name{font-size:12px;font-family:'DM Mono',monospace;color:var(--sp-ember);text-transform:uppercase;letter-spacing:.1em;margin-bottom:6px;font-weight:700}
.type-spec-use{font-size:12px;color:var(--sp-text-muted);margin-bottom:10px}

.personas{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:14px;margin-top:18px}
.persona{background:linear-gradient(135deg,var(--sp-white) 0%,var(--sp-cream) 100%);padding:22px;border-radius:12px;border:1px solid rgba(184,99,64,.18)}
.persona-name{font-family:'Fraunces',serif;font-size:1.3rem;font-weight:800;color:var(--sp-charcoal);margin-bottom:4px}
.persona-type{font-family:'DM Mono',monospace;font-size:11px;color:var(--sp-ember);text-transform:uppercase;letter-spacing:.1em;margin-bottom:10px;font-weight:700}
.persona-desc{font-size:13px;color:var(--sp-text-muted);margin-bottom:10px;line-height:1.55}
.persona-focus{font-size:12px;color:var(--sp-charcoal)}
.persona-focus strong{color:var(--sp-ember)}

.objection{background:#fff;border-radius:10px;padding:20px;margin-bottom:12px;border-left:4px solid var(--sp-amber)}
.objection-q{font-weight:700;color:var(--sp-danger);margin-bottom:8px;font-size:14px}
.objection-a{color:var(--sp-text);font-size:14px;line-height:1.6}
.objection-q::before{content:"💬 Objection: ";font-weight:800;color:var(--sp-ember)}
.objection-a::before{content:"✅ Response: ";font-weight:800;color:var(--sp-pine)}

.journey{overflow-x:auto}

.stat-boxes{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:14px;margin-top:18px}
.stat-box{background:linear-gradient(135deg,var(--sp-ember) 0%,var(--sp-ember-deep) 100%);color:#fff;padding:22px;border-radius:12px;text-align:center}
.stat-big{font-family:'Bebas Neue',sans-serif;font-size:2.6rem;line-height:1;margin-bottom:6px;color:#fff;letter-spacing:.02em}
.stat-lbl{font-size:12px;line-height:1.4;opacity:.95}

.angles{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:16px}
.angle{background:#fff;padding:20px;border-radius:10px;border-top:4px solid var(--sp-amber)}
.angle h4{color:var(--sp-charcoal);margin-bottom:8px}
.angle-row{font-size:13px;margin-bottom:5px}
.angle-row strong{color:var(--sp-ember);font-family:'DM Mono',monospace;text-transform:uppercase;font-size:11px;letter-spacing:.08em}

.hooks{counter-reset:hook;list-style:none;padding:0;margin-top:14px}
.hooks li{counter-increment:hook;padding:12px 14px 12px 48px;margin-bottom:8px;background:#fff;border-radius:8px;position:relative;font-size:14px;border:1px solid rgba(184,99,64,.18)}
.hooks li::before{content:counter(hook,decimal-leading-zero);position:absolute;left:14px;top:50%;transform:translateY(-50%);font-family:'DM Mono',monospace;color:var(--sp-ember);font-weight:700;font-size:13px}

.faq-item{background:#fff;border-radius:10px;padding:20px;margin-bottom:10px;border:1px solid rgba(184,99,64,.18)}
.faq-q{font-weight:700;color:var(--sp-charcoal);margin-bottom:10px;padding-left:30px;position:relative;font-size:14px}
.faq-q::before{content:"Q";position:absolute;left:0;top:-2px;width:22px;height:22px;background:var(--sp-ember);color:#fff;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;font-family:'DM Mono',monospace}
.faq-a{color:var(--sp-text-muted);padding-left:30px;font-size:14px;line-height:1.6}

.glossary{background:#fff;padding:24px;border-radius:10px;border:1px solid rgba(184,99,64,.15)}
.glossary dt{font-weight:700;color:var(--sp-ember);font-family:'DM Mono',monospace;font-size:13px;text-transform:uppercase;letter-spacing:.05em;margin-top:14px}
.glossary dt:first-child{margin-top:0}
.glossary dd{margin-left:0;margin-top:4px;font-size:14px;color:var(--sp-text);line-height:1.55}

.policy-card{background:linear-gradient(135deg,var(--sp-cream) 0%,var(--sp-cream-deep) 100%);border:2px solid var(--sp-ember);border-radius:14px;padding:30px;margin-top:10px}
.policy-card h3{color:var(--sp-charcoal);font-size:1.4rem;margin-bottom:14px;font-family:'Fraunces',serif}
.policy-card p{font-size:14px;margin-bottom:12px;color:var(--sp-text)}
.policy-contact{background:#fff;padding:14px 18px;border-radius:8px;margin-top:10px;font-size:14px;border-left:4px solid var(--sp-ember)}

/* CREATIVES */
.creative-intro{background:linear-gradient(135deg,var(--sp-cream) 0%,var(--sp-cream-deep) 100%);border-left:4px solid var(--sp-ember);padding:18px 22px;border-radius:10px;font-size:14px;line-height:1.65;margin-bottom:18px}
.creative-intro strong{color:var(--sp-ember)}
.pattern-list{counter-reset:pat;list-style:none;padding:0;margin:14px 0 6px;display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:12px}
.pattern-list li{counter-increment:pat;background:#fff;border:1px solid rgba(184,99,64,.18);border-left:4px solid var(--sp-ember);border-radius:10px;padding:16px 16px 16px 50px;position:relative;font-size:13.5px;line-height:1.55}
.pattern-list li::before{content:counter(pat,decimal-leading-zero);position:absolute;left:14px;top:14px;font-family:'DM Mono',monospace;color:var(--sp-ember);font-weight:700;font-size:13px}
.pat-title{display:block;font-family:'Fraunces',serif;font-weight:800;color:var(--sp-charcoal);font-size:14.5px;margin-bottom:4px}
.through-line{background:linear-gradient(135deg,var(--sp-pine) 0%,#1F3329 100%);color:var(--sp-amber);border:2px solid var(--sp-amber);border-radius:12px;padding:18px 22px;margin:16px 0;font-size:14px;line-height:1.6}
.through-line strong{color:#fff}
.creative-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:18px;margin-top:22px}
.creative-card{background:#fff;border:1px solid rgba(184,99,64,.2);border-radius:12px;padding:14px;display:flex;flex-direction:column;gap:10px;transition:transform .15s ease,box-shadow .15s ease}
.creative-card:hover{transform:translateY(-2px);box-shadow:0 6px 18px rgba(184,99,64,.15)}
.creative-img{width:100%;height:auto;border-radius:8px;background:#F8F4EA;display:block}
.creative-meta{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--sp-ember);font-weight:700}
.creative-caption{font-size:13px;line-height:1.55;color:var(--sp-text)}
.creative-caption strong{color:var(--sp-charcoal);display:block;font-family:'Fraunces',serif;font-size:14.5px;margin-bottom:4px}
.creative-tags{display:flex;flex-wrap:wrap;gap:6px;margin-top:4px}
.creative-tag{background:rgba(184,99,64,.15);color:var(--sp-ember-deep);font-size:11px;padding:3px 8px;border-radius:12px;font-weight:600}

/* ADDRESS / WAREHOUSE */
.address-block{background:#fff;border:1px solid rgba(184,99,64,.3);border-left:4px solid var(--sp-ember);border-radius:10px;padding:18px 22px;font-family:'DM Mono',monospace;font-size:14px;line-height:1.55;color:var(--sp-charcoal);margin:12px 0}
.address-block .addr-label{display:block;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--sp-ember);margin-bottom:6px;font-weight:600}
.address-block strong{font-family:'DM Sans',sans-serif;font-size:15px;color:var(--sp-charcoal)}

/* ALERTS */
.alert-callout{background:rgba(196,154,101,.1);border:1px solid var(--sp-amber);border-left:5px solid var(--sp-amber);border-radius:10px;padding:18px 22px;margin:14px 0;font-size:14px;line-height:1.6;color:var(--sp-text)}
.alert-callout.critical{background:linear-gradient(135deg,#B8391F 0%,#8B2815 100%);border:3px solid var(--sp-amber);border-radius:12px;padding:34px 26px 24px;margin:18px 0 22px;color:#fff;box-shadow:0 6px 24px rgba(184,57,31,.35);position:relative;overflow:hidden}
.alert-callout.critical::before{content:"";position:absolute;top:0;left:0;right:0;height:6px;background:repeating-linear-gradient(45deg,var(--sp-amber) 0 12px,var(--sp-charcoal) 12px 24px)}
.alert-callout strong{color:var(--sp-charcoal)}
.alert-callout.critical strong{color:var(--sp-amber);font-weight:800}
.alert-callout-title{display:block;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--sp-ember);font-weight:700;margin-bottom:6px}
.alert-callout.critical .alert-callout-title{color:var(--sp-amber);font-size:15px;letter-spacing:.15em;font-weight:800;margin-bottom:12px;padding-bottom:10px;border-bottom:2px solid rgba(196,154,101,.4)}

/* TEAM CALLOUTS — 5 variants per spec */
.team-callout{border-radius:10px;padding:18px 22px;margin:14px 0;font-size:14px;line-height:1.6;border-left:5px solid;background:#fff;position:relative}
.team-callout .team-tag{display:inline-block;font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;font-weight:700;padding:3px 10px;border-radius:12px;margin-bottom:10px}
.team-callout.cx{background:rgba(47,74,58,.06);border-left-color:var(--sp-pine)}
.team-callout.cx .team-tag{background:var(--sp-pine);color:#fff}
.team-callout.cx .team-tag::before{content:"📞 "}
.team-callout.creative{background:rgba(184,99,64,.06);border-left-color:var(--sp-ember)}
.team-callout.creative .team-tag{background:var(--sp-ember);color:#fff}
.team-callout.creative .team-tag::before{content:"🎨 "}
.team-callout.marketing{background:rgba(92,74,56,.08);border-left-color:var(--sp-bark)}
.team-callout.marketing .team-tag{background:var(--sp-bark);color:#fff}
.team-callout.marketing .team-tag::before{content:"📢 "}
.team-callout.brand{background:rgba(47,74,58,.06);border-left-color:var(--sp-pine)}
.team-callout.brand .team-tag{background:var(--sp-pine);color:var(--sp-amber)}
.team-callout.brand .team-tag::before{content:"🌲 "}
.team-callout.newhire{background:rgba(0,85,204,.05);border-left-color:#0055CC}
.team-callout.newhire .team-tag{background:#0055CC;color:#fff}
.team-callout.newhire .team-tag::before{content:"👋 "}

/* QUIZ (defined in foundation so Stage 2+ doesn't have to) */
#quiz-section{background:linear-gradient(135deg,var(--sp-sage-deep) 0%,var(--sp-pine) 100%);color:#fff;border-radius:20px;padding:0;margin-top:40px;overflow:hidden;box-shadow:0 8px 32px rgba(47,74,58,.25)}
#quiz-section h2{color:#fff;border-bottom-color:var(--sp-ember);margin:0;padding:0;border:none}
#quiz-section .section-header-bar{background:transparent;padding:32px 30px 20px;border-bottom:1px solid rgba(184,99,64,.18)}
#quiz-section .section-header-bar:hover{background:rgba(255,255,255,.04)}
#quiz-section .section-toggle{border-color:var(--sp-ember);color:var(--sp-ember)}
#quiz-section .section-toggle:hover{background:var(--sp-ember);color:#fff}
#quiz-section .section-body{padding:20px 30px 40px}
#quiz-section.collapsed .section-header-bar{border-bottom:none;border-color:transparent}
.quiz-container{background:rgba(255,255,255,.06);border-radius:14px;padding:28px;margin-top:20px;border:1px solid rgba(184,99,64,.3)}
.quiz-progress{font-family:'DM Mono',monospace;font-size:12px;color:var(--sp-amber);letter-spacing:.1em;margin-bottom:16px;text-transform:uppercase}
.quiz-progress-bar{height:6px;background:rgba(255,255,255,.12);border-radius:3px;overflow:hidden;margin-bottom:22px}
.quiz-progress-fill{height:100%;background:var(--sp-ember);transition:width .4s cubic-bezier(.4,0,.2,1);border-radius:3px}
.quiz-question{font-family:'Fraunces',serif;font-size:1.3rem;font-weight:700;margin-bottom:22px;line-height:1.35;color:#fff}
.quiz-options{display:flex;flex-direction:column;gap:10px}
.quiz-option{background:rgba(255,255,255,.06);border:2px solid rgba(184,99,64,.3);color:#fff;padding:14px 18px;border-radius:10px;text-align:left;font-size:14px;cursor:pointer;transition:all .2s;font-family:inherit;display:flex;align-items:center;gap:12px}
.quiz-option:hover{background:rgba(184,99,64,.18);border-color:var(--sp-ember);transform:translateX(4px)}
.quiz-option.correct{background:#FEF9E7;border-color:var(--sp-amber);color:var(--sp-charcoal);font-weight:700;box-shadow:0 0 0 3px rgba(196,154,101,.4);position:relative}
.quiz-option.correct::after{content:"✓ CORRECT";position:absolute;right:14px;top:50%;transform:translateY(-50%);background:var(--sp-pine);color:#fff;font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.1em;padding:4px 10px;border-radius:20px}
.quiz-option.incorrect{background:rgba(184,57,31,.85);border-color:#fff;color:#fff;font-weight:700;position:relative}
.quiz-option.incorrect::after{content:"✗ YOUR PICK";position:absolute;right:14px;top:50%;transform:translateY(-50%);background:#fff;color:var(--sp-danger);font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.1em;padding:4px 10px;border-radius:20px}
.quiz-option.show-correct{background:#FEF9E7;border-color:var(--sp-amber);color:var(--sp-charcoal);font-weight:700;box-shadow:0 0 0 3px rgba(196,154,101,.4);position:relative}
.quiz-option.show-correct::after{content:"✓ CORRECT ANSWER";position:absolute;right:14px;top:50%;transform:translateY(-50%);background:var(--sp-pine);color:#fff;font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.1em;padding:4px 10px;border-radius:20px}
.quiz-option.correct .quiz-option-letter,.quiz-option.show-correct .quiz-option-letter{color:var(--sp-charcoal)}
.quiz-option:disabled{cursor:default;transform:none;opacity:1}
.quiz-option:disabled:hover{transform:none}
.quiz-option:disabled:not(.correct):not(.show-correct):not(.incorrect){opacity:.35}
.quiz-feedback{margin-top:16px;padding:14px 18px;border-radius:10px;font-size:14px;font-weight:600}
.quiz-feedback.right{background:#FEF9E7;border-left:4px solid var(--sp-amber);color:var(--sp-charcoal)}
.quiz-feedback.wrong{background:#fff;border-left:4px solid var(--sp-danger);color:var(--sp-danger)}
.quiz-explain{margin-top:10px;padding:12px 14px;background:rgba(0,0,0,.03);border-radius:8px;font-size:13.5px;font-weight:400;line-height:1.6;color:var(--sp-charcoal)}

/* PRINT */
body.printing #top-nav,body.printing #floating-toc-btn,body.printing #toc-drawer,body.printing #toc-drawer-overlay,body.printing #search-results,body.printing .completion-actions,body.printing #cert-name{display:none!important}
body.printing .name-printed{display:block !important}
@media print{
  body{background:#fff}
  #top-nav,#floating-toc-btn,#toc-drawer,#toc-drawer-overlay,#search-results,.completion-actions,#cert-name{display:none!important}
  .collapsed .section-body{max-height:none!important;padding:10px 30px 30px!important;opacity:1!important}
  *{print-color-adjust:exact;-webkit-print-color-adjust:exact}
}
</style>
</head>
<body>

<!-- TOP NAV -->
<nav id="top-nav">
  <div class="nav-inner">
    <div class="nav-brand">SPARK</div>
    <div class="nav-search-wrap">
      <svg class="nav-search-icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input type="text" class="nav-search" id="hub-search" placeholder="Search the hub… ( / to focus )" autocomplete="off">
      <div id="search-results"></div>
    </div>
    <button class="nav-top-toc-btn" onclick="openTOCDrawer()">☰ Menu</button>
  </div>
</nav>

<!-- FLOATING TOC -->
<button id="floating-toc-btn" onclick="openTOCDrawer()" aria-label="Open table of contents">
  <svg viewBox="0 0 24 24"><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="18" x2="20" y2="18"/></svg>
</button>

<!-- TOC DRAWER -->
<div id="toc-drawer-overlay" onclick="closeTOCDrawer()"></div>
<aside id="toc-drawer" aria-label="Section navigation">
  <div class="toc-drawer-header">
    <div class="toc-drawer-title">Jump to Section</div>
    <button class="toc-drawer-close" onclick="closeTOCDrawer()" aria-label="Close">×</button>
  </div>
  <nav id="toc-drawer-nav">
    <a href="#overview"><span class="toc-drawer-num">01</span><span class="toc-drawer-label">Brand Overview</span></a>
    <a href="#products"><span class="toc-drawer-num">02</span><span class="toc-drawer-label">Product Line</span></a>
    <a href="#vision"><span class="toc-drawer-num">03</span><span class="toc-drawer-label">Vision, Mission &amp; Pillars</span></a>
    <a href="#voice"><span class="toc-drawer-num">04</span><span class="toc-drawer-label">Brand Voice &amp; Tone</span></a>
    <a href="#personality"><span class="toc-drawer-num">05</span><span class="toc-drawer-label">Personality &amp; Adjectives</span></a>
    <a href="#visual"><span class="toc-drawer-num">06</span><span class="toc-drawer-label">Visual Identity</span></a>
    <a href="#audience"><span class="toc-drawer-num">07</span><span class="toc-drawer-label">Audience &amp; Personas</span></a>
    <a href="#competitors"><span class="toc-drawer-num">08</span><span class="toc-drawer-label">Competitors &amp; Positioning</span></a>
    <a href="#objections"><span class="toc-drawer-num">09</span><span class="toc-drawer-label">Objection Handling</span></a>
    <a href="#journey"><span class="toc-drawer-num">10</span><span class="toc-drawer-label">Customer Journey</span></a>
    <a href="#angles"><span class="toc-drawer-num">11</span><span class="toc-drawer-label">Marketing Angles &amp; Hooks</span></a>
    <a href="#creatives"><span class="toc-drawer-num">12</span><span class="toc-drawer-label">Sample Winning Creatives</span></a>
    <a href="#social"><span class="toc-drawer-num">14</span><span class="toc-drawer-label">Social &amp; Digital Channels</span></a>
    <a href="#partnerships"><span class="toc-drawer-num">15</span><span class="toc-drawer-label">Partnerships &amp; Influencers</span></a>
    <a href="#discounts"><span class="toc-drawer-num">16</span><span class="toc-drawer-label">Discounts &amp; Promo Codes</span></a>
    <a href="#seo"><span class="toc-drawer-num">17</span><span class="toc-drawer-label">SEO</span></a>
    <a href="#cro"><span class="toc-drawer-num">18</span><span class="toc-drawer-label">CRO</span></a>
    <a href="#glossary"><span class="toc-drawer-num">19</span><span class="toc-drawer-label">Glossary</span></a>
    <a href="#returns"><span class="toc-drawer-num">20</span><span class="toc-drawer-label">Return Policy</span></a>
    <a href="#fulfillment"><span class="toc-drawer-num">21</span><span class="toc-drawer-label">Fulfillment &amp; Shipping</span></a>
    <a href="#test-orders"><span class="toc-drawer-num">22</span><span class="toc-drawer-label">Test Orders</span></a>
    <a href="#shopify"><span class="toc-drawer-num">23</span><span class="toc-drawer-label">Shopify Platform</span></a>
    <a href="#faq"><span class="toc-drawer-num">24</span><span class="toc-drawer-label">FAQ</span></a>
    <a href="#resources"><span class="toc-drawer-num">25</span><span class="toc-drawer-label">Resources &amp; Contacts</span></a>
    <a href="#quiz-section"><span class="toc-drawer-num">26</span><span class="toc-drawer-label">Knowledge Check Quiz</span></a>
    <a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'brand_hub_logout', '1', home_url( '/' ) ), 'brand_hub_logout' ) ); ?>" style="color:#B0322B;font-weight:600;"><span class="toc-drawer-num">⎋</span><span class="toc-drawer-label">Sign Out</span></a>

  </nav>
</aside>

<!-- HERO -->
<section id="hero">
  <div class="hero-inner">
    <div class="hero-logo-wrap">
      <img src="https://sparkfirestarter.com/cdn/shop/files/Spark_Logo_Black_360x.png" alt="Spark Firestarter" onerror="this.dataset.failed='1'">
      <span class="hero-brand-text-fallback">SPARK</span>
    </div>
    <span class="eyebrow" style="color:var(--sp-cream)">Inventel Brand Knowledge Hub · For every team &amp; new hires</span>
    <h1>Spark</h1>
    <div class="hero-tagline">The last firestarter you'll ever buy.</div>
    <div class="hero-meta">Reusable · Infinite · Acquired by Inventel 2025</div>

    <div class="hero-stats">
      <div class="hero-stat"><div class="hero-stat-num">304</div><div class="hero-stat-lbl">Stainless steel grade · heat &amp; corrosion resistant</div></div>
      <div class="hero-stat"><div class="hero-stat-num">16 ga</div><div class="hero-stat-lbl">Single-piece stamped construction · no welds, no moving parts</div></div>
      <div class="hero-stat"><div class="hero-stat-num">10 oz</div><div class="hero-stat-lbl">Rubbing alcohol per fire — that's all the fuel needed</div></div>
      <div class="hero-stat"><div class="hero-stat-num">10–15</div><div class="hero-stat-lbl">Minutes of burn time — long enough to ignite the toughest wood</div></div>
      <div class="hero-stat"><div class="hero-stat-num">∞</div><div class="hero-stat-lbl">Infinitely reusable · designed to outlast the fire pit</div></div>
      <div class="hero-stat"><div class="hero-stat-num">Tri-Wing</div><div class="hero-stat-lbl">Arched 3-point base · 360° airflow · self-leveling on uneven ground</div></div>
    </div>

    <div class="chip-row">
      <a class="chip" href="https://sparkfirestarter.com/" target="_blank" rel="noopener">🌐 sparkfirestarter.com</a>
      <a class="chip" href="https://sparkfirestarter.com/collections/all" target="_blank" rel="noopener">🛒 Shop All</a>
      <a class="chip" href="https://sparkfirestarter.com/pages/in-the-media" target="_blank" rel="noopener">📰 In the Media</a>
      <a class="chip" href="https://sparkfirestarter.com/pages/faq" target="_blank" rel="noopener">❓ FAQ</a>
      <a class="chip" href="https://www.instagram.com/sparkfirestarter/" target="_blank" rel="noopener">📷 @sparkfirestarter</a>
      <a class="chip" href="https://www.facebook.com/p/Spark-Infinite-Firestarter-61560491776235/" target="_blank" rel="noopener">👍 Facebook</a>
      <a class="chip" href="mailto:info@sparkfirestarter.com" target="_blank" rel="noopener">✉️ info@sparkfirestarter.com</a>
      <a class="chip" href="tel:8887033046" target="_blank" rel="noopener">📞 888-703-3046</a>
    </div>
  </div>
</section>

<!-- TABLE OF CONTENTS -->
<section id="toc-section">
  <div class="card collapsible" data-section="toc">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">Table of Contents</span>
        <h2>Jump to a Section</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
      <p>Click any tile to jump to that section. Each section can be collapsed to just its header — use the circle button on the right of every section bar. The floating <strong>☰</strong> button (bottom-right) opens a drawer with the same nav and works from anywhere on the page.</p>
      <div class="toc-grid">
        <a class="toc-tile" href="#overview"><span class="toc-tile-num">01</span><span class="toc-tile-label">Brand Overview</span></a>
        <a class="toc-tile" href="#products"><span class="toc-tile-num">02</span><span class="toc-tile-label">Product Line</span></a>
        <a class="toc-tile" href="#vision"><span class="toc-tile-num">03</span><span class="toc-tile-label">Vision &amp; Pillars</span></a>
        <a class="toc-tile" href="#voice"><span class="toc-tile-num">04</span><span class="toc-tile-label">Brand Voice &amp; Tone</span></a>
        <a class="toc-tile" href="#personality"><span class="toc-tile-num">05</span><span class="toc-tile-label">Personality &amp; Adjectives</span></a>
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
        <a class="toc-tile" href="#test-orders"><span class="toc-tile-num">22</span><span class="toc-tile-label">Test Orders</span></a>
        <a class="toc-tile" href="#shopify"><span class="toc-tile-num">23</span><span class="toc-tile-label">Shopify Platform</span></a>
        <a class="toc-tile" href="#faq"><span class="toc-tile-num">24</span><span class="toc-tile-label">FAQ</span></a>
        <a class="toc-tile" href="#resources"><span class="toc-tile-num">25</span><span class="toc-tile-label">Resources &amp; Contacts</span></a>
        <a class="toc-tile" href="#quiz-section"><span class="toc-tile-num">26</span><span class="toc-tile-label">Knowledge Check Quiz</span></a>
      </div>
    </div>
  </div>
</section>

<!-- BRAND OVERVIEW -->
<section id="overview">
  <div class="card collapsible" data-section="overview">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">01 · Brand Overview</span>
        <h2>Brand Overview</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <div class="team-callout newhire">
      <span class="team-tag">New Hire · Start Here</span>
      <p style="margin:0">Welcome to Spark. Before you do anything else, read this section and #2 (Product Line) end-to-end. Spark is a <strong>single-SKU brand</strong> — one product, one purpose, one promise: this is the last firestarter the customer will ever buy. Almost every customer question, ad angle, and CX call comes back to that single idea. If you understand <em>why</em> Spark is built the way it is (304 stainless, no welds, no moving parts, infinite reuse), you'll handle 90% of conversations correctly without checking a script. Then read the Return Policy and Test Orders sections — those are the operational rails. Plan to spend ~45 minutes on the hub before your first shift.</p>
    </div>

    <h3>Origin &amp; Founding Story</h3>
    <p>Spark started with a frustration every fire-builder already knows: the kindling never quite catches, the newspaper burns out before the logs do, and the small disposable starter cubes leave you crouched in smoke trying to coax a flame. The Spark team set out to build a fire starter that wasn't a single-use consumable but a <strong>permanent piece of fire-pit hardware</strong> — something that lives at the bottom of your pit, takes the heat fire after fire, and turns even damp wood into a roaring flame in under 15 minutes.</p>

    <p>The result is the <strong>Spark Infinite Fire Starter</strong>: a single piece of <strong>16-gauge 304 stainless steel</strong>, stamped into an arched tri-wing geometry. No welds. No moving parts. No coatings to wear off. Pour in 10 oz of rubbing alcohol, stack logs around it, and light it with a long-handled lighter. The arched legs self-level on uneven ground; the tri-wing shape pulls 360° airflow so the flame burns hot, clean, and consistently. When the fire is out, dust off the ash and leave it where it sits — Spark is happiest living in the bottom of your fire pit between uses.</p>

    <p>The brand's design philosophy is openly anti-consumable: <em>"You truly should only need one Spark to last you the rest of your life."</em> That's the entire promise.</p>

    <h3>Inventel Acquisition (2025)</h3>
    <p><strong>Spark joined the Inventel brand portfolio in 2025</strong> — operations (fulfillment, CX, marketing, web, paid media) now run through Inventel's NJ-based teams. Every Spark order ships from and returns to the Inventel warehouse in Pompton Plains, NJ. This hub is built for Inventel employees supporting Spark as an in-house brand. Customers don't need to know the corporate backstory unless they ask; if they do, the short answer is <em>"Spark is now part of Inventel, which means the brand has a parent company backing it for the long haul — same product, same quality, broader support."</em></p>

    <div class="team-callout cx">
      <span class="team-tag">CX · Single-SKU brand context</span>
      <p style="margin:0">Spark sells <strong>one product</strong>: the Spark Infinite Fire Starter. There's no smaller version, no larger version, no color variants, no &quot;pro&quot; model. When a customer asks &quot;do you have one for backpacking / a smaller one for the firepit / a 2-pack&quot; — the honest answer is no. Don't apologize or hedge. Pivot to the value: <em>&quot;Spark is built to be the only firestarter you'll need — one unit, infinite uses, lives in your pit between fires. Most customers tell us a single Spark replaces years of disposable starters.&quot;</em> That reframe wins more conversations than promising future SKUs.</p>
    </div>

    <h3 style="margin-top:22px">Brand Archetype: The Sage (with shades of The Explorer)</h3>
    <p>Spark is <strong>The Sage</strong> — the brand that knows the right way to do something and doesn't oversell it. The voice is calm, dry, occasionally tongue-in-cheek (the website jokes that the logo suggests a teepee even though log cabin is the better stack). The brand respects the customer's intelligence: it doesn't yell, doesn't beg for the click, doesn't promise miracles. Underneath the Sage sits <strong>The Explorer</strong> — fire pits, backyards, camping, van life, cabin weekends. The combination is why Spark resonates with the audience it does: the Sage gives you confidence the product is built right; the Explorer gives you the lifestyle reason to want it.</p>

    <p>Practically, that means our copy <em>under-claims and over-delivers</em>. We don't say &quot;the world's best firestarter.&quot; We say &quot;the last firestarter you'll ever buy&quot; — a quieter, more confident promise that lets the steel and the design do the talking.</p>

    <div class="tag-row">
      <span class="tag tag-inventel">Inventel Brand</span>
      <span class="tag">Acquired 2025</span>
      <span class="tag">Single-SKU</span>
      <span class="tag">DTC + Retail</span>
      <span class="tag">Outdoor / Lifestyle</span>
      <span class="tag">Reusable Hardware</span>
    </div>

    </div>
  </div>
</section>

<!-- PRODUCT LINE -->
<section id="products">
  <div class="card collapsible" data-section="products">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">02 · Product Line</span>
        <h2>Product Line</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <p>Spark sells <strong>one core product</strong>: the Spark Infinite Fire Starter. Everything in this section refers to that single SKU. There are no color variants, no size variants, no pack sizes, and no accessories at this time. If the brand expands the line, this section will be updated — until then, treat &quot;Spark&quot; and &quot;the Spark Infinite Fire Starter&quot; as interchangeable in customer conversations.</p>

    <!-- HERO PRODUCT CARD -->
    <div class="product-hero">
      <div class="product-hero-img" style="background:#fff;border-color:rgba(255,255,255,.15);overflow:hidden">
        <img src="data:image/webp;base64,UklGRthEAABXRUJQVlA4IMxEAADQCgKdASqEA4QDPsFcqVEnpLEuoXCZgiAYCWlu+/iZEigcidOMlbgfcbWGby3C31v/m/yg8zH9B/w/y//vfkg92DayY2/3/+O/ILmV+e+oX+Wf0T/U+nHE96m9zfUO9gPtX/f/NH3ZvufOj+Y9QH9a/+l/cuUl/I+oJ/Nf9X6uv+1/7/Oj9i+wd+v4ipHydF5Oi8nReTovJ0Xk6LydF5Oi8nReTovJ0YbHxaMlpgybbE+IHwZNtifED4Mm2xPiB8GTbYnxA+DJtsT4gfBXwThovFEjh/Bw/ymAYoPppm9tm6v3RA/lmyEYxEE7syMMi+xwCujovJyyINh3Sylv+TovJ0Xk6LyhsG2T2Ifx19YZ4Ez7JyU8mSeIEHGnvYYXscAOm2E8eVki+18R7+qxN3QX3cJPGXVixQA8c16WZ6MQf24hGKdzBBuDBOEAfJBQb5UXrkxdUZLrhfiCb7gxGKxSgBpc3xvjrRSRmpmfZEmK2jY1lJpSG2Lvg1OD/F77M+hzGYXFYLbfc12GjGzTH4v790UoRJa9s5E97mya4hFJ5tMjzgFzUo6S9cb19svTpxGz/PqCAmWoJybsWMOot+h2k31AC03rULI2NmXJZSqpP1zm+XWk5aJbUEz+hPxhPJogteVyv8lqCmW6ku1PlUYGUS82I7SHkAIxgxu0TEIrmB8HFpK/qJ7rHzWDsIjjfzH7aYCIiSv8uFMYRVnX857zHGCwARkBk3RIPPM7O+9x6a6NjW84PJO2ccSzMGkT7ksd8Jw6U/8zOAgmrtn4TVq0SDlL06cNF5Oi8nRAO31Zlkd9LVYZjdQSU6VPh2jbNKtDVpyCndiDMo5AcQ0njAGxN4VVwcIIvcEWOpalK4n39QF6S7Vma3hmxFpeGAUYboZ3MT2qcvh7wJ7EF3dL2ym9QSQ7MjbBEooQMydU2dpNkHJzqYTpxgT5Fv7iM9l6dOGi8nReTpDFZz4NzH5FkLIBgeYZD2yG+D69LxjQsefUEPqAao6utWY6wGxHPI2C9vHryRXymwpThSmIr74jnkbBbJZKcIIcC9vHrxlZLJTEV98VAhWIsasJGFKbmbyUrfEDGxZ8T4jA8OQh9QmSI+Tnm2pKn4fRTszbYNhaPnfcD67Pka+hTCMEunYSrFOkKX6SHYJgjtKNC5MuzXc6XNmTDJhb2qbrmc6K3Js1KnkVfrhwXD1kKGKfB2j6I6F72s8U50wW8TndcjvVJITp3m8zs+oIfUEPqCH1BD6baWwXvx1kBbV8yGhAssk/gtKpP//GvRNZ5cmA2OcF4zlvzBfQecSLGqcpl2zvI0YRtl6dOGi8nReTovJ0Xk6LydFwkzPOpv4NZTduFxU0zu/7yo+50CzR4XLx4texFBt5SNsFzTL06cNF5Oi8nReTowjbL06cNGwnl4EQOiULAlqhbDkOkJIxi1zUkGVWJw0KJIz11LNl23pTrLcJikfJ0Xk6LydF5OqSJKrjRJrmZMwhWMQifXiC78YGCC098Ysjl1D8uivUow0APwCWbW0d4gSVXGi8m2S3wtmYzb8iG5thBMn+5cOckvWNl6YNbp3phwAdrtqOHwsuGFaB1wS0W81VjOO5pbK0ESuaR8obBtm4n1BEDqWOJj4UEPqCXkt1YFu7c7u8k9hLHkqG68bvV8SKpLr1oLg/pL7bx9xovJ0Xk6LydF5SQDReS/8F7bl14Ds+oIfo7OHXwdFvCrgFxRT6Dv2afY6MqOhl64YXmDqWRK0ljd6xu9Y3esbvWN3qk7QVxgN6dOGjIwP+HN9MakoFhQbdN6xtDWnhCKryWJkuvesbvWJCBDdl0N7A/YKxj2qTX1yvtzGx1LxG/u0DN9flp1wsyKLg3WHyJdL4oC6zuVlkJ0YzzJsG2XamDjgl3g/wMyeKhNmw79J1EzVLfTFowPUQNFH3cOqFY64Fj2/v2/APLas0syILulh8l3OI9OnDReTovNtvYHNcenDRgDDqPyifHSb9W6VfO/OO6kH5vyEryS7Z9QQ+RFdqnqJsbvWN34mTN9OnDSFI2c15Z/iWN3rG9waTcDFOCz+3FFTwBllmb5YDNlSWN3qZzT68zReTpCl04aLydF5OWCOomDMnReTpSX8/f5p3VWkbDSb1tNzd/S7VTcLid13QXORsvTpr8tuB9Q9a6MvTpw0Xk5xLqkqpiOMqcZhBmn1YxEgPDNrvuzrPTwLJuMd+0WUGmuNwQq7JefS0+EmP/FIW/+EM9DSrBjV7E0a1WvPWSFudhXA0KOArExJVzGsmzkBIcSk2F0Vsvj3nB8oSygTGHua5LPTEVI+XncHv0UEislkRIQYNFnF8D+EGqPvZVn+05emBjj4VTQOEPOZRlfUlM1Ljhl45j2+dyvPPVe4nqpHOxohySOIp14w0zlvvTpw0XoIWQjoJUZcj/vGvHZqx2dTuQLKmakp2fkDxatfp295gRgP8thtOXxJW77silpmBz25oAzTCgZFU355kr8irRIRFqTiGgJLbnoCsrEafG5cso4i1TBWYTpPy3v1tOvoY/0Mpaq03lcH97NQ3aDkuqmnJQui2yJxcYkAhYb34mS696xu9Y3epx4ew7g5hogBpgI/95lMAJjuoXZxsupT6ZenUDCDESJ4f/93d0eCPvUL+ajtEP65iu+fm7Ta0oSnqDC6ljLWXW+WHb9FF+jCMAd7uENTRGhObN4idxt3T0gCRWyf7ZCuwU6KSImIOlDzQ8z6gh9Uz696xu9Y3eHFxQez/jE5l2ZT9Vcg4N0GoPzNhEKiftttT7LsHN+89q13rhbIiZ2/8wrmylRgwlzybwck3whrn99IX5cn0YffOwSvf2TL29HYQpMvEAQW+GMAf4dwFXEY/6vEwiTpw0XoIl+21dkSc6rVeutUiQv6h4CSHP90UhVdXuawgPT916YBaXW5QkBQW0WCDPUEgsM7tT1dq6bZY+J5eE6ptyYJOIMhDkuN15L+rNvSZ89GSgkqNMuKZREpGt8ccihJruedcyb41+d+YDWwc+OKtu/Ognk6LydHd26aW+UXiou2f/8Ep7bVVBlP1Vvl+Ia7k+V6OJVBfSuz83KvzNmfJGVZ3kyhlwIbvABU5BAOzC4E3NNln8LNgPxSlqp3SJU3EWsoHkMDPQFnnVhdSmXeSybuZ3h8m/sACoIfUEPqCTvvWNcBDKe1OnFdDe7f8v11WMfk/ndp1HxHgaBx6ikZhh3Ptvj7mu8i5rJ0vaWdO+oefB0VXRuKJ78tdXv8UOB5EZjD9xIAwtLvH8fNR+TdKTs3lTxJeSgCPsJA49sopRkHfXvWN3rHIl5Oi83W2IVlAYibWZyBRZZmMwQ7IwqkFfjfxPdBCaDpdJb3t4RhGCA0H+ch9d7XfAki7DdpGFnqyVGdHkSal6mFkKBo5LG71jd6xu9Y3fN50506xynkQTcFsQaksQM7C3FDyGF+wvp01wav/rz07OMpZDYBQ/2TsPP7lM3nZr3fGVdfUN2ku00dnRHfq0bQkrIczpO46sCbIto+ww8EU0zsYXW80fu5idO6RzP69hZqb2K1nH7Reb/EHCFDb5y8arC/EL3uCjywXoxHwNtXTbRuz/Pu705Jde8hWM01AmR5Ku665BZWOACoIfw1gCKrHxlM49tcJzHPEDLs+oIfUEPqCH1BD6gLEdofR9fkDkYPSQDReTovJ0XibAIisFk03t7kS5e9Y3esbvWN3rG8JozkHRqw5rOA4be5CH1BD7ux5EgzWTteprlSsbvWN3rG71jd6xu9Y3V/6ecjCWhcEq3Q4NZGuKNJ8QAgs3o274GbXNd6xu9Y3fNINwlhaRr7uy5jfrLjnKuTj5rycSqXcV5clc8L5KLVsn0BL9pQnk7bCcSRHvhX50E8jRZ2z6gh9Qly96xu9aqc2oYyAggPPRlNMPL1gY86LvWHMtrvMas227XLRD6gh93dF5Oi8pIBovJ0Xk6LydocQ1MuUACo/erQK5cqYH5zQ98w7Kyp6S9pHSY8JZ//gNyWWwt72CVDYNsvTpw0XoIl6dOmuDbL0/LXjDuE7/LQy/d6hLl71jd+JluTXeP+GxGu8f8M0A2tsUyMKFprvH/DNANrTXesbEGq13JskJNg2WQBXZ4C3bgQo2ZtlrN2c9MOqt2Z85W/6UIwSjB8EmwbLynp0xciVHwSWwyiN3rG71jd6xu8Pzs6bjRoHbnXxfNZrGoEwoaePDA49vtWpJuCCrDalCk3PUljd6y2Fveu00Xk6LzdcG3Nd6xu8cZqtyA2JQocUiV+5mYpqFhEGwWIsKdG5cZjacCjdQFaqPfx+izuF7iqxN199YXtUWN3bSuK0ejhmTuoYQehRL8NJiGQi4oi3oFLIb1joMmFyC3vWN6lgbUThiPtdhjFupIjfGofqzI5L+LnOgDQUp+i59HVlrjZNiOCR2Dykh+kC+80ANm1DB5HHmooRToe71mSa3ZCDtG1gg/j/DnzWIB9dSw/jMs/kWixOujKoZCNPhKgKyQ3mjP/gKzmDs8EmRjOCkHmo9Rb1FtoKvTzyTOiOry/elAKm9Xk74FWm5HxSDVOQFGfeoIfUEPpt/LwCAK7t67PusfdFePhq05hxvbmbOi9fAiBHrmOyBRWLJ8SkTvohBIx7+A7BqhFZwQ4+1nDsMrvMJUyzUW3l4GREs/pmOwIRCm407kpKUgh7L3jqXqktHMrWDCHHCk9U7YSOZEkngLaOA9/ZW6FaXrHIT/UjrotXpPElqcy3vyeP5NdUERsbPUURl+F6A75k+bKtdB0qYPhh38kYsMns/NFoHRunfXIANyoCogR5kt4c0kYBnLqzuRqfdXBaXGKvl4f7gduxxR7Ghfdx6HMgNE8AriNEUNfbUMaumw1YyQ71gu+T5pZFCMYqCp9JBu9UI9aW4gAKuYnhLcSU3zXHrcVc+0ngbj770WhDQuGwf5NmhH5Ck/7BdDHi3BZneX//5HcL/8l0CsTd/CgP87dWV0HrwLlAcdAvR9bvqm5vT7EngTeh9WAgcGB1HgS3KHpSwWqa7+NDIqAwCeJF5quv6DMrtTdmr9fmGjCNsvTfVS2xrUUnN0tZW3k5v5cf9UDRD+2ut60qNcSotebWlbNlgz/ofsxXy6wN+pi2U3NOflCIGgUiep8zfXyHiNxD6MjCtPRdr3V2tIo2QJ6OOWtS/Rk9+fWRTKU7h+XIkXcq/KFJHg33dKvUHk9N2/d5EY4jDfknReTovJ0XkwOrU3B5lu4EFJ9tWIvUafByRmtHsRTyzVIgBgJuP9gfEdnAYBwLnQemw26WcdLu54qaEybf1rHh+74dncSXPkYLSsRR/HUJckoMEji08xWtYlQfcHqGDp323u+bsZbKFkG/NaPXxLMAIifPlDYNsv2qSJZgKhcnfQwMJVgdqrPTYoj6k98R9bs8US6icD8Bb1GhvcGko9VURty+d5zuTQDbSEhEHWTJWcH+fWeE18tiSMSkiCa/SncGi8syl7eW1ZOGIFxt0kq49Z9dRwbo4kjo8oH1Jw6ckuvesbvWODktB0/xu9Y3l8w0Xk6LydbF69OnDReT63xsvTp76CV713zfw+c3mHlVZjoP+zFPLODkqAStRYAA/vt3m+SOse1OT8gijZPyCKNk/IIo2T8gijZPyCKNk/IIo2T8gijZPyCKNk/IIo2T8gijZPx8FAJ3bgAAAAAAchrjnuzsz6V1AV77mnzeUUF6dVWkZd/Tf8ziT8hD4r2GMr1mjM0yi3tKg5mvHsrI1qaSD+tcNWSWxYpR8KYK1VXUBnZ/2XHX58+rqFMbBNaYwntkY33LJDeFQvqAyibXMjXV/uHWOuJDHlhgShp05ugDxSdlhn1tfSxrBXvIZ5xqIkWu/9Zdlxh/LangpsMY40W65BgKuluD3TQ7sLD2EjDn2FMnoXYDN+FhjWdP6euJKmz6YfUXMgtc7KNiqI7cgBAnTDih1zvzDxRrxzSQ1ARP5CbAfVYQ8TwTCC6DOqCJZQLBUOBcN5sGGi2QpG2dOaA+fzj5RINydoJ8EtexTjc6BHlMmHZpgisXrdpkJ7XAlHmfXlNDLs8pyb4+Vy0K3NNB0EPLziN1dzS3w3nnYQnRlEYhMfSV05HbilNhSqN/6EDK4ABxWN4SoogSWEE07Cb8oLpLTmHXDSbkU/zJp0Y2QklsT5iZ7zE4+DD01A/Uq52WeXrp7n8Gn+uKnXxvPzedUW0VmkcZxSiPFkKYCVZAVTdo2hL2BQhJp9hmRhnQPwKqZRTgvnK0cgr6n57vY1MKkZv1W7M07d5psItMggndcjDBntjfyDjcLtImj3kRUSDtL3aksDa7oPJHUeFGnSecP64u6CFqCZxehOOgo1s1IoBQjEq/gamU9ASzTLephQZPldcKu7TY7eKtEOYjulRejLbdAX77iYX8SpGx0SsGAwwDcbEFbDLq3e9GAwvXV4xJjDqec6UkEs98S2tCRKLhshlGF6UHpvXtUcA3vWpLveYw+D6tGEhnT3LRvpc7SplB6Msc8G7RIt8gNGGHTejyFs4jCWmQSK8ial+OEXPoZKWT3Q9nU7DfuHvf2pdSNnHODGXg3NMAOWibNoEr5y3ix+6xhStvqHIkdvyKX6Qa3kYzC6H789odNXsJWMd2PDIdxS9y85R+ELRUDd6rgmhuWA9IQr2AG6EaGV4b/WnJJpdG5QTMJnyDmE1vnocfLP5MXvsx45zaODffff6L7rWpLZ8901jifp85Kucc5M2sh8oxL2d8GMzqQ1P6iMwoLdxEETlp6pylWCQAml7OtxkWFUNnJrUEO+HW+ziPiC3F6BNUDvX/tCvmhvd75ybgMcvFIXlH4IujAIdLSmoVor+3gKwJrHGZZhMMsU0cDTB8yTH0/j9msJQPAelsEKD75C1bCtRNH9A2cuo/OzqL+Ik9J4ZXESUCYrJUSTsKRaBFGUz7nlbyCfpmNkzdtLoTOnwnXHsZtV+BQCLEQe8wykNzZ+V2CGRC4ez66GiE3N3+4ZZXUs4blXKwOmKLw92CmSh9QpWJTXpis0n55tRbiYbl7ZR1jpH93eS2uyjZRkq5hHDkot8lTO59z8AIoCJWtxrsMGwNT5blcpVaZ9PBDi+FMtIBkZEKsBjOKYfD0sdx8Jmyt3ABkzugPlI0KABuBKAXlPCVN+IWSLXHeNprXzi0Q74wBqPy3ldVkX4K0gmfn/HNDgILQHVXZ04zTyY9aKmLysFatTrilWyYkG4K9xFt+pdajtgId+G6+1Xs46jowLWd3WMN2UF012guFJPwafkUs0f4wQZnFnGRS+UtyBXizlb0rDw0SFWEPGrDrZmU1643HsxRdmnU7xuMBwrnbLU4QtgbCa0ViDeEquJwPid6n3QonYHJaPrPKJEOkDRDG4ZxOXVKzr7F9urf60wt1Lb15TQLiZtlH6ml4etD+mK858RV9IoE6uGLboM3AmSH8H77BVhN7jdAEvm7Gh3HuY63WOvJA7DpLF2enOO2eq++K9mSbnQHOs4b/Ljm7mYBmnC/DE7v419RR0b4DkxSwB8lRloiMOvQn7KYCSJZdhAerQC3EkvXGi7q5hj0daucS+Q6XcAnWbIPU/Pp/bU5oeSoFhpG007xLlg0/otvGibP5TMivXiOKfXEIAB12ZmHHIObz1SxBRN+JWEuZiPcqIzURyAqAbX6ZHQF+8R1bnboKHQ3WnED0PrkX3eKHX40usWfnQUgDaOAY6U7i0lAoiDymTVJt0xTGlSC0iAe237wcBg+Naleww4LkEf6fbV4AJU+2Ar57KVZwTQwPvtNfbCVrBGhxA8aOyEf0PjYoiK5dbLxDJUI1jj8BUJySYzT3gHb28eWczmOv3S2KScYf6Tzw7xQFs+jJpmVz+vnvUb6zMoKDmQiT8nLUeNLgvKzruRVzKBy1P0V7BS7UTQVjQ/hJ64TcIChpPjCqqPrBU/sPuQRrtga9ycavGIkg+de3occXfuEsLlqJDRM7h/14hHO7816i8f05Oq5qDKhrCcQgWQoIxpkxzYdxPLgI9t6Pae6p/FtYixn4A/FGjT5P51X8xnH5SeM3Dd+DEYQMUVSNR1kZPHiFAqSAqDnoSy4inPIeInK4A+4XippUuaJS4ZwKFmu/LHFCF+rwCNVaOAzuTmYJmg2DNL1k9Ez9Iuxy3U1dSv8YfWBEb7v5O+p500SLvwduny/EVQ4c+/zgygjRAoHTAAAAAAAAALKp79nKr4PkfRSS9spQvCxT1qAtLEjxG4btCdys+oVYKbteZFljhsdoavazEeLgsx0ZYh0EBLhUWu/ZzAK8vCDJ4gRi9pIy7hIhZxS3QzBq0npngr8BC6LPO6TDEgtBviI8nHsTSKolMUUXMlIZJ6HHiJTxuJuCHMH447mOMuT4kjlx46yzp/uyGZQBwlxTX68oROMbdqIN9WlsASicegMsHQEosJYYRFpW4J0Djj9RluoEhLcRkc56gBuZFfokftzTC1nwTINEXi9auVrC/MzTpLjABZpO+8Nq96RMP6/en3lID8WskQWhuj/VWFfEYn15iBKt1yEocDhQEMeyUyFmzq+R3KcwThF05erCVjdZTjGI6dzwLImU6naVjyz0mvWP9xN8XhxNapinuNf4CtE8L5EMFJa8QV8UPU/2Bbn4yFKnvEaMOXP7bbBp6jYtZq/xGC0YFQ77/RweTd9ybO/SVBDDxp6DWeJvBFTWWfufSWbjc+xUwJUBDepDyIn/ruCJaou0TBK5XVucBxc1lpgT+6o8JDCxNt+1Bos7tC0BzWQty4WqceEYI749GcktegjmwzR8PVfc9vW133EaVqpErLcUVffRgnz/LVqdjgbGp7ay3kygMBZDytoWhx3Q+mqcpn/XxNVq0jqJojIDb8XRyGq6cIuwmcrobmza+k+1n8pM9+Z9lP2Z1jNGcpmP/5He48c0DpBzd3kU+w143WGoGy1ISZGTGfOK9RlXuoxIBOq2wxgfr69eQA9Sy7uVaxTYL0G731AEiMo0DoSEuC8L1SC4fBU3IKpXDNGmEgNxmgMXRfjUxePj018xFTJcBEgaote4LvpQRSnYWtGAjPIpDe7trsUfl1lwmITqMQj2bTq8tX5azT9OYimkjnurWr2pzEMx4QGF5r+Oa8SUb1SZXAnhJDqZ1Xty3RHzPrbWQbpLktSVhCvbTgMqCH6S8z63VBEvdnv7N2oJudSBZdQQELaJgNtH++r5wVROCWf751m5D61ngzTHlwF087Q7W4W8AnB+YaH4BudDu+fci/1/pZpjXNfkznTGUqBuyhaWKlYnypEDohN+CpG7JG1NQFRkJbxR5Jynz+AppFoJdSCEpV5W+6MdgF1c0GyBtK/z26+0MN3ddM9scbsam7IllB/jzg8o82aMvMCl5gVBCv2jgJucDhNhTmwRjtJ/2iCQ8A8Nc6h8Qm0C7CzfDHa8vcDEiZEKVnabDJCa3moQ12VB4N9iDQ32d9mjxg3HwvK81fj89obykdSEF/MI5cIQCAT80aaY4Rx7prjjQh394VvDWzX+bvqUlK+INMfYKGvjOr6BgC2FrO4Uzkj5SMGBOMnUFJq5D7tfKd14OYETWPlp1EPYx1lnBIgapZxAuF0fNcMHyyw3JDvnDe/XQIReM/m5b40NoqR8Uj/J3z9tVYKILzbnupfiq2+wXj8G6/xbLvssULBhVaf2IIgqZ8JZ5FErTOQdD1mg5cdI+u0P4HDxEKlrrCOuf1Mzjhptz7Jci7OqDJciZOiO3fN2cL6fJTX4IymKUlyAaSj+115R1dQ59nUh4rlMeRi8sFP0Vus91Ylu/3YCKejokQ8727TlAcXMG42KcjEicHt71ncryabasbhcOV9TqnI0/IzW4w8hhrGKcOZ+UtIZrSF5nCJeXvzWdCe59gyE+TAKacx63rj1sIFf9eir3C15iimroVvhWDLtiSzWNTiUjBvZS/hgfMDCDWl1l8psgrzDUCixM++/CR/3/Dz0eb0/GOpVLJdCXqR4FJQ08hqyVyDKUt7eVLrS5lFXHZfb+CHkevd8qtfnd7b8vxFxW+j/4ekne3C9uDire4gTF/yiXiCwj3H5xn7OiyNMBc84vITDzUxh6NPfYu5dZfczS9Nj+55nBvAloDxsrAEgRTbP36PRjOap57lnM+yd4rSaOxs8GsYRI3VYj6GvSjwaahOS1gXjlKbQIeI1rhrQHI6fIpseeKv4O1AfwCt5wAwJAfFGkJNGNXnvxtbl8R0ZgYgxiDHUT9RCC9KOkqbtJp6GguJl3kxAwlRV4fUuwhnMwplqXAfaNK6Tvh6FHtTxIuBX+4zgQFBCRLPn3GyC1vO2dG2Ey1ULHIhX5n2OVRUFVuinRJVXLxTCQdUdZdpruMwt/g3GMAtIDo7pd8YM07suzZHdI8ef1C8hLsr7Y19yY0A5rP4SRbRoObg6KL5tWoAPQtDyWUjhgkzKWtsz3eYCq077y8apcc4yAWsPxIdXLqAqf+b01RgUfKwyEHCA1rboY49xDpg11BPicARcAzaHH7V7S8QnUSnux3fWm0LUOMAzZIaPZzxuMNwcfgKajou0tebZLTBfL07pJCZAV6UETVimDPHh4PzNhZyG2uYpxPa7sITUJgBcjGGjLCJoCBp1qNTMAbnpwK0l7Ro+2CH61tdnt7dXbX6M8fw8/vIbPwmP198nLK1m3kdtommzHUscMQqdoNlIImOnh4QihMrUBTQAQ+m/fx1Cz0ITJBZeyFX2HOGcEZnvHXX9RhCpzv1Y+yPua3SuB5oJi4568pkdDHQI47SJM/IpO9mgqiEd08/EQyZ0hLnVQz4SgoKRaSbAyKVo78UtDOgOGr2J8sjA4iZlLCnuSucuVo63MHXie+rVjFydlnH5DfXsOEkopFcV89XXQxMwhRZz+gE6tJhm3elusp0q970HS7Z85NpemTW9ETrTq3yb2bQNf/JipiJ8if5OrmAkZF9tqB4uzoz5JpgvvQGkB9+GxHdBwCyz5KBwUdfxu6z9ZMm/gvJuC4tOlsBY6yTasfZMRaZPrRsBReaylxnOFxZJOOKYHjeARU6wLsaVMylNo2Z/rxrKHAGr2dIe7aoO1PACo0YIBKFJD+3Z18Yoi4jAwycA4LZr8Y6LDK8rHdRCeaEZrA6FCrKHqWhmZR/U6Shi8vADyIL4JdswmeFg7pUJmrGgybbZO6hD4/yZuFW4lCJ1lwyc8/vO4Gj3j9mKKRunaNZ0BClACGeqqY3WDcC/AoysiWrhR+HBRSh/qTzak0LuJzLqjxynW4oAKZmZMNbjSpVoqkX2LKfawD83nSQs5cMJE7TjWIcf2rv8aQXQw31oKtEc3aPUoVRjhsdppzN598fbOch9MioDv5fHQjmw99ggCpjpkdbfjRKYmgr+sgfctwyDXCI3yxBRgmtZE23z42idITm07PkNn4Gq0BPRND3HooII8IgTiHLkdvOOk1Ey7dK1hkG2E4jsy+giUp9qqagHtbUOpKnkHAnSeUuyDdpVdeWzSNnXS9VkjRqMLfbXOxv83O2p2ACsS1z/WelPEt63Sd+F3cxY1BMMBjHaTRYPiXe7tVA3QV/gvCPYfC21O2v/dkHaaIJwgj0uBdD0hoYIZEWAw9jTme4vyHEEsXU9PxiQZQWJjgGKR6Mep815dezU1RYma3ThO6VIW6lPWbw4TWbL7oiVgIi6mKG7BYn8jM4szQi1lg1eI8uCqQjSDgbF2i/0tFjLvrlGT2/JoCuwCxIciNEL6ST5FEsKogd0miatWpPjbP2HEK1Wn+5ZgJwt0OPezoiuwIjLWFYD0KrPNeuaT4pUHMjEBv9cXlRQweCt2XVuSbQWErPXFEdMTbHCy9f3j3qderWlecsbzQfgUjIlVMB4xjhSQWArUc7NK3/HO6NFYfVeLcHUTrWwxwzKw6tS53wXb6BEziLocFIhQ58XQI9D+kTSytqq9neyX3Wj3NADkl750U/vCHNSTuQnHCieYEnHb6crxMrrRWPEWaKE2IdPzLrrvbTRptiMvTXyN6B/PCaMuJn6cVw0nQwSgbSp4DXhAwHdo8k8ubLjk6GBXTJAYb1VzBG0jsmDr5E+8vnIFcnJzBO3dMazIZYlIng+fMz2bW6phvxI/Px6NHDDvybGZt4YK00NnaQ+XbT4JrnUptVIKOTlvuy2kOX4qVKV0KiFPIvWX+GerV2gjlIes5ZIoEV5zHKrvMef+OS0GV5EIt/x5DwwWHx6y6ALqwQfej+T8q3pX4qcL87zxz6kiNEjlI4D+fsSkUxxpFDXcN/a6Wxi3WSjxL16WMNP/4qu6Y3RhD0Pcj/BzC8ZR00MnLto8PeIWU1+szU0Mk8eSioPAkfk9sjhCPwwc4LnWeiCYKHpbN1NGi/CtpG9ekxIsFleF9+8JGlLa5jcurnSAlPEDTtdbVMVjGXiYQaAIdJTI9z1AnbUg8abcfalnZt9lkMhLD0/PAS7mbKP7PmRm/2C5nFoSU4ADzfMJ+8gT6AwcnMcpZYrDrO4oOG7I+6qY8OFR/Ap7U0WdwPVAKMsgUL3H7Kf9icX3t4kDjU6ttDSW/BmPZ/r99r9DyQghBthmrRsN4fgBNnvdcTpG8fpWIOQEomDFL+pW33+L5wwV4frcWDcTE7H2JZR8etWhSQCBdaoJyr+jKRtA0t1vVb6c/13akdqRoNIO260a96nA+2DoGncWTfz4ffuLESTS8GfZT/ruXmYvKt63Hw+g9GTfIfnpg/q7LXFk5VQjDJlhR0ycdaVEFAcDTC+D1dxr6Bz/jZ7DURcYmKZDtIYeBagSK2ljuHtj3R6Mh5VQxBbZSXQwsa4oVa62rm6sAY4LnOWjb2J6BEO/SZ5AUxkDv/bCG6qEfkJC9vLnTrIsmVo/Yt7E5VDEs8pLvRMNgowHwCuG037sxTNXrussLxLpB68I58S/HX7VIN8AjbL49eikbO20YThckCYJ221eLV84ZH6egYgXKDGZPrr73Lw0WoeZ8PIboiCBGaCmdf12bGxdE53gncUpbDUMSyuxqIXzNkx/JMJNkX6teayYAOxTvw2ORs4dGeUUPct9gJwHedz0ZuExmcckXiCDRoZ4b16W3pMiBDQYJvthIvi7vHc/6FA0K7sl0ZlhZY5sizOgq93R1kMpdAPRK5Y/Vl2kqvJgjAk3He3mxDGz9e6whx9RXsjW2VErdUJ8dakZ1b2vqDULLz1HcAJvta5Nv/l0sZa2ZiRiD1KV0CN6aNena5s3x5hpzY0xOXm2SqcK8I02nVyDT2FpKjbesXNjVyz1SD9H6LXeCj9erryLog5mcoN+I/STdfWluxaIeYVlZJlMkVURLyJRhZo/F6A/AAPs7MJkjHsBKvNKvPKcDEGIBkn1xVvAT15pCS3ZHV/w9CbkVV0Wsehhsevqqiz6efQtadzowkvn/9UIHGdG5K8PR87w/bAfcohVY7wfv8qw5IrzzlT/j6Lc3Rt6IwM4IQUhWJlR/0Kh01kKXXghDz/EEulayphoPe1pWGevI8czkO8ZOEb+AILm50UkjXztT5nZgDu8vEbOuHTdRwjko2cCGS7GyOsfWs9e7OI3WXx9KokgJtfthr+jC/MaYjwyr1cFKGn2BSJ9ZPMCCV+ZE+1GHsl11jC2T1TI49oy1R3hnExM0OeHjbEc/yG1DFeINwf58qRq7oGV264KI71YkwHOfQOZcudNKefQJ1aHMYQ+CKC3+pxiptj0GNHnfOvOGHvNW5NXOgfRzDhhv6y7Zm1RAvtEEPwBuSpCDV6Z0kBbInSNSZMuAA0QyJxNHUONfoMOeT41etoVYqHB7f+fB/F4rfV/+QuuP/2CVXcS2IMEMfXtCLKnVSlxJpCtW9EaA7G3S2u9rdC1cmD2QqUYvwvxwj5e4SAQGDCAnRI4JCFXIDssT7lqemGp0SPWIL9jCgFcAqaHpt4ZPRhsXQDg87sSgzpMnnXYWZIxfB6NoMcr+LCGEHn8F581yYOhGJ4sNd6UdkEIlMqtA5F/pKZKq7DAB+5PFCvjWyW8ScGmA66oEj0ajRkWVPetxOBXgmk2ZFIoFyNp1U+HA+Mhhq/SNxbt9QMomWnD4l85AcEdSSz33ei6z/oLOtjM+cYbtIuwcdXhKJO/20nZYXnoCdBOaGFFzcCn3RHtDulvCAdL+PcHwCgriCXDVaxofOwUuCjq9T8FeSCT1m1ozXqJv6B23wIw8S9W4tg+u53kieEPyojAtFZO+BcM/pzsXwYlel08MtugfvNxxqrIsDANwuscQ8njnS8/3MxRTmbd22g78Fk1O2qqeowUA2RmkKCNPyXKebRB3TlkJP7SjMWKt9lLhFfJmmnAaDkJ43oPYDAoyuplCtKp2vSFx/7s7VZkq0WdLsr+zEDIFh3e06iZxm5EOWT10zB8RuHYeIVDuC4gaWfBwJT/snytIlqM2WDTB1HK6Zt6e2ZhuBgBgU3jpQpVQbBn5qQPCaK6Z37DBehtVUt0sBWyarl3dLIfPF22M67DIhP3VZdnNZrrq2cJKnAk6dLjfrozPLY9WiQ2dJD1htRXeSCUj4NWnVtMTNGtLdet1qN1F3/zFca9Hx6Z1iQ1QOoMh2sXee8YetpuM+USvI1xLKnHC9m4819Zu8Ski/qJmKuVvKh0aNixmOU5gRJJLSuPswRWq7QqtauLJnAt8GilKrv7uctnprgF/1aLZkp13r5iP/Hg7Nn8GoytYnE9+B58VMdxvQejPpcw/lMXw/NCu46a9sV+FeCfgg95XKNay+UcuI0Z8UbOJkTHa3YV3OlBKiG3wkvusz9GEfaJBDdH5CkPZzAvdMRtUPGBwQID9nSZ7CBrl5vfW8YeN/8JFTIygVIhBEexvliSsZrWlkoNFCcc3qvoh3HUkPLZWCG+PFEBBZsyWmFhQryUVgsQaRCaBqnQlOKdwXILtmW9CQXCQUEJgfHCQk5UKI4OPEpYhq5wTcr8qPCLBKw4V2TcBFfmJc86gXsjrR48GGPIy1cqD1NHCJf2IgikPLS9ELEDrD326/egkaCcBkKSWqlyViuhYfWUsNaocKFY1Au/MkLRGR9l4XiDfPZa/6wIJOOb8607Ar9dAQyAohquk1mmgOG+Ijgxj6hBhu52NFLSKRfoblEC0LRGAgl7MgAbLly6wJN4LlBBzvsnr7F+c+sSLFetrmaXX37Eec7qY4RjKu1hAfmRovhqPnGMt21r3fFOdYrt2BLWjY1LndkEKrquus4knWOGUc4omGQT9JVPx30dyKM1aPomNcY9UfB9OaU0HHuSoROfU3tnpr1A3C0RN0cPqHyayeCq/h+Z8PeBX2wnQ9IAhnqOMr/gGd6RdM3yn0OhIkUgof6K3fu75O0n5GtKKWHROWA6SUYAkl7tZ/s/xRLYFMU/kvgcWBpqrZLjR+BDEWrqDmgiPZ9Yc+m3JL3sNi5A7neec3KO60JqPfgmVaI0KPPFBIRP/f9WvrkWHcg1QwouferI7sRV2lCJScelnDPfscDeoT7xowYVrzyf0YeJSl0naPp9wGJo/hu+GF3sjxVCLBTCMQhcZOF9AKNFY12k7tA2oiTmSUuK7QtVtXBAgt+kfhtgPS7OAu+TslSK2jRciNO8pz/Xq56H5d+GsQuXem4YwaVWRI5ZmgKNUTEAqCk8fMWi1eGqOxoUFBtC9OJ5Fzev3OJn5zsfVSYvlk2LW1eFGOsfyUmR1x8nFJWFkCBZ+K1CPu08yznOCdKYMXU6HxEQFJIg+WBvJb583emKDGoeDZ+wNhrEt0lNqaWB66z6TTqIz32oMwnI8mVyfOp3+BzapvJ2TYpvo5yzVHwtw5XCno2TrVp4rd0lTH4fWJ6+gjAgGNdDIZ7zt9KbG1IeJEYyrdSRyvAHnGTVP38WssbCjmz/DYkC1dTh4L3beOZMUdPKJgYFLAlx+xFNoz7iLPLLhtDnjJEd2kv99eGXixf8GGUQzSb6rmMfgQyh7C9PRbS4UTJ/PekbK+OiswXYOjAaDcoqRlx/TsJHPZvZCIY7srGZU9jaJziW+0FlIk8Ztd4cGa8WyCIUg3bt35d0vpnfrqF/KVO0xseIrsxvxG678EzTiaxUfd8Kb/RDoWQ8ArjgeeNbP1+rwvtm8vZg7quQzpJ8vMH3vClGMxPW+s/wXz+jdrFCw4ciNjQLUVMrZBZDmOFS9nmVHslwOoSOF93ydqKKbBfVoVM9aHkrUi2WZtCz9Cpfieui1Fyj9HpGzh86ZyVGysRjUXez6X6kFR50UDb/i/O41UxVjcJt7s9ENyFKBFOIyBEfJhdXOCq3IlqPzZS5mRrwOwIkyFqBxuGOXRhNkeSwkiPcgXfprvw12fwf5fJ+WP/FQfI/dY2ncKaJyA+JIj4+YCdpSPi6cp2bvoGEzP8/C2VY7E1hHKr08/OB8dmQcxza1U041PWkFkktXuPL0eA/+4kO/5yrHk8KOQ3EUyj2muSp2uH+WMy/8cv+q8/rJEIF+g0eSgBGzb1ZckdeZTC2l2E+FgvrvnKlRo+ut3N764EdB6SNA+ckyc3YTHbAad4MPtBeyy1+KWs3Ovut7p0180UcSFl3D3zAMqDhdEmDmxZW1+paCdNrAyjVGip9Vovtl5Q5SD9HS+djsJ1wnoV6Pkwg6wC9mExvfAii6oDSI5w19LQc7b2tkcfPkc0aXsbBPWkauWiqnsxOM1U0G3V/xkFdUyZ9YTz9IQQe3QOcv2VfqYletfvQcKMxi/BkdOY/c5sLqM4zLVuFpZXIrbU/Gy3CtKe+DnjZeoksPq7OKL2NTEme6gHeEz+YVE0188or47hFomlFX5/53BntRbeasEqmzgdzTXqi/zWOeSb23GsDclPmPxSGIPWZtKlxWx37AX0mjm7nlOhoUCTsr4+mzJdhrHEHkZ6RxZIqbXB3ol2zgj4fOA+vJCajZ2btPasurrYKYJrOGY+k1vfrYSNMV6eYNZ5OTboNyOnR6kStLCD4pkLHe5KvgDG56jnj+pZP/37dB99PJJkUGuZI51NpqqurbYODvxHepep3yPjhQ+BX7AC+MtfNMc02cD5irROFKbscDzfdP3vTpYAZQha6N6B5vkDmtBN0bUxOcXs/yeHN1kBvH2vjf2T5JeD4HI2AYfGffNmKWp/WbvDPzumaTTZMmg5BF6Y7jAn81hEvMqp1RJGEry5Ua0tnwlpKDWViEaMU3PXKobJn1MQSQC9pTvWXK7tZKha/HDy8ITfMa5Q7ZuugaRn6tMoKxcE6RtOGFU7ZUbPemGBP+AF5ufxRnvI4fCJnL57Zu+jobMI2Zl2mJkdThEPSQovYu94CYLPHJ/8Ip+PhOULMezQdOCgNU30fAdw1RMCPIDR1mWZpYizD4qoJ2IjUPnqmqsZztgaH1N6kx64o2SAjMF2j8XdehSOqHpRih8pfowoXuzDUI4EWlc5Z6fQLbLR/cUQKVwYu2bUSeArwj7RMthTMT9v9GV1mK196sSlFBtMDxE8pN7as30ugiJRduB0pUYK6LkXFm7SUKC0kLHtdM3c2LgoL60XN5/4Az/p3wsuuG6BITIICUUErTn1rnDOtJbVBDZxSpa4EradvG9TeIM3hPonPpAZ2viSGZkduI6YjfxyuLlskivRH3cKe0sSqhvNO/OZa7i46OgRa6lsfBjJFIUvnjncQOHQ6Cye6Van6X5zinBltvdXbAy/ctAIvVypKgKLR2/9g6x02M6T9sbyoKr7rALfDVhlNPzBG8iwfu9/LwJl5d19ZTkverURRt51AAuWU+xrHMHYRUCXYol4LPyZrxbb8FcS0naHC9tiYVNbGuUDGUqmlAQQU+fDtQYmeHfg08BkiD0GNILlwqp26F2EiSChcO3KU6QMqA9jFguTngjRv65/kYJiCA2hXnBJMU0UivPp7iawkTS57mP7npd1GEn6KqeEeT31O3QLLdZw6TPMk2fikGQtdKM5cM+XKrXaG9jG09YSBO1dEtzV4YnbYn3s/Lkd1yCf7q8RBgPFEI5oz3yt5/SHkEayiXZ0php3LePSgPVF3/ZLgIEZh0vVe6JOYOb2sNLFN5LouB+8dAJYydOob/pevlqqIMGFXIcGgcbpRAXPLJNQ82LHu766X2kDajM3ZOG7ePrwBs72mZen9ct2BJ/m2uh1GKvoP5RO8t/qDIcUljKr2fkZfYQCxsWP40SIA5yQdW+uKYy2kTIL3x6oRhrkeqkP29UpKiKXmPIGHE8oiigPcoiWqg48F1ficx/Doub4r2GOAsZCU3vcWdQO9kY2NoO4jBCvqhdeNoyTSK+eB8V8h0sQhxM3O8UhZXIeF25YK9cZDQlunqvp7xHkZNLnVzSySZWw1jF9roEBw8IaLXEzXqT3ujUH8sVujCUHKKiNpyJh9za+4OwsV4rR4x6oYHtjEN/McCHhayDUR66J8jamgAvpyk/gxhzVjgKFEzvpTX4qJIYOiwBE7eX6/8BwNNW+ZivAqT+3c2/heUdYPG5CsKFdH+YF1UOpv9Z07KMKQhr8vexTjIJMksIBDt1tLTQF/nQSmciqFto55+JPtW5vQ5Q5w4O4syrK0ZqJ0TZ1kEz2//t1LTTGk9rWjqynTI3NTWOh/On7wJogPQqDnOPWGmqiOkQ4dEjNxYvQP545+ALLVJOvN4duiFF6zvRP6hSJSlcBtGbKwgfo1BZrp1ZQHpF/8eWWlalhInTl+7qZt19akkSbfW50rQjRFgqb9GOU7/8H+UkMOqP3/vDHrpWT0b11rJ7sfYiImtRRtmHXgFAHr4iV+nig0PC/9yAAI2JOPCubQPIF7acr05cfIkTrzN9bemT3Zm/obahwmbrw1sDkx9j9qkea0VjHKXPKmvrUufsthkVtimVDeKzzdmjXzbN6hwhOTSKDJjimq07YWuv3J954LYXcNL35x/UUhdIV+LPQOfO2zy6e65mp2JJJejMyOSwU+iXmL5B9qD5/Q1cp4Qs7mVBYMtQBeDRNCT5LwsPWU7fP5Ow9O1uYtn7395S6+3Kj51NVb7VEncZBYuXcnOL12nVB2UknjDiLVt4HGmg9P4crvIajgeUxqy0V+chaRPTxSMS7oRQGjXwzebT4tLg2JkXsauUoB7SSNFlmKCOveCuoAb/EjlE4qAl2P+jW8goRjtlnZU1If8eltK+FFGh+wWYLgGhZ4HX7PJVpiC1flyjtMbj06aA5yDd15YrzAL5dgigSrOljuPgPSxAzzlZ1qt8miFeGZltXHYIaHpD503AEYn4CwcMvrIEoD6RdWd4qu8PsXkPH2MDh1x009xxgKjFPzwuc04y10aYErzp8O/ExCraBaRQFOCZs56pUSXpbeONlfufEvI7zU/3TpOFE2UR+Ab4GEmhPMptU+5wSdcXZTXmaUV0aWuLJfgIIWOT/U9ThvFGmu7ZCl5lCBrjxccvgD130/+0WPyCvZGMEynQfQ4hS7mycBIoRWAPgAHho/HSBkALJ7qdvJScRoswuk/RpZoOlcTgr7O47nn9IouVseVcEWf2vWNqjMnA8jIhmuBc5n9Sqo2/gLs3NcdZVk39Oudir9nsw5nbG4cTFEhfUvF9ADvD7SLWahXTYeHfd0GU+DJjuNUdt1pUKLmH44iTSusCj4/bpfoIuKaxwF//vhzX80B/fnPngCqo8upeP/eDNn8SrtWAiUviRKGmWeCZJ30D9P04QqbGP/0rRFqfX+7P6KwTMAr+MYuX2FZ9dzbUUissIVlak/7LAp2Jhdx+C6EB3DEF5Em71Wda7HPCpI5+Al9SaBdg7Yx2LrAeaSNsYk6gtnbdtNgak4NDd/py4LaUeVa2clV7J2RVP7ZHYKtsds+FPWaaAzNiTEcL69zUayDMrf55QwTDrure89rscDE8/TpJWUsMgvYaEnj23AXqlOed11SP/W+nFl67Uuio6n5xfVtKI9x/qbBDcEBlq7bj7BVOLQ/4dWw7b4whZRC6vsjq1w8xwXm1ojwFHH4L53wH+wUv2utqFXmxiBqDRtUyhTjMLUtZOURJXv28myOiJlXGaMeqSX75PPMflbl8aYzUIV3qGltOC+DDz0RZ8shrYLVlBltvYNf5ifOJ2E9G/DmHBAyiY0pv9mS9Q1a60Q3VwJKrxTRwUzTC/bxU3mBsLnthViT8B6KdULZ376rxci+lCeCJc9qRc0j34IL/M0iFdW2trLIGRA+ERb0h3nvlpy3ScUacgkb1X9G8YhwT2c6Yu6tTLrwkquT6Pst3+j/XVkAmAU8Me4hrUNWXuhGhdlRAbKIgI99wyuJUrbAQxl5HHxgTT4AGCIG2JkF7VaPLu6Pqsbg5Y3DGCR5BHdtU96EDZ7XyWPEERGlf312vNMRhq75dOicCK8l6UDQ9KeYKDYGnWaTXAWODDBUZNSUvA4JYGI8SOWYzrX3Xo/5u2M22fL5j1mVTe6hh/h0sxjwB63skzbXobSBvImR5xyXlgxBd+qaxGCju50VpkCR0TyNpKgqY/aUOlqRVCqSGGVAlu4k9Ih2z9la610y0Yl6ZDLuvpwEAIpaUcGx0YdoQHDERJNLmLq+p4tEgvpNvg1WJzwxnftHAp8B2bAj7N8gj4x9C/cd2hUUCA11IXTvqVovJsr5R5gsT8dCzXLv477muwlbAtC6fM8TFryiE0pa2QgldqAx9dJBwhA6vuKZJY+IDcXhT16zdwlkyQ93HEBauOnQs6uORQmL7AyEUzY4Gjsw6WZB2WDwMV9iGAFLhEb44FQ1n9PILec3Jc6Dk16NpJoDxY8qQre06vSJnHzTJUjWVA4WErXpC831tTWsipb438fUV5p4Lfs0Z/oae/+qAtwQjjs6bl5tntYNVaeNHhHuU2CaurZuEhqENbyvAOXA/hTpcncoHzzwc+gQGkwSdSyrjbMtFUvpm4Y+NwBV8IfsYdfzDxbwszvJJahwJGxldg5XwwWT/wh/iIg9tBJj6LEcVvxK6M8r/iMufixde9w5KaQ1C5B9W1TZN87zHS3krCQlg3KWPQCDeYlm2ggFnDoNFdbWSMkAqOIKojFZ9yUCU3IRZKKjahcvuKEmk8RhSYnkUzf7Laqm7LBz6t6x6Yni0LcDZzvUd1N4l3JfWefRCY29QReK0AghWIM4ZVTPZveDlgdU0Qo08J8lCj/Iw4B8bJxj6Dvra8i73gYQVgmvxn09TAPYVdqZB1cqqhlFOAWtQXfSFK89qHJc1HDuyACEKxgIUp4NPxjbpNwpbPJlVjEETIafkk9jLWTQW1HVK1p6510YjUNxem5jUAB0K8qVTfX5zrneYWwJpsqA+6miXlgwHbE14ri4ORw6BCKucHDWRYl85v1u0R3G1esk+XRtwAgi3dCYdEuAH7WTL2UXA/WVGlX8k+1FbjRvtNAVErGGj3e8dOiMQb1eezxIwNNYy1gXyneqbiGwBdWJZKveGjrzj3gUE/2SEtl1pZfNOe9fVnGLiQyjDC/dW9c1z+JNAyTpCL9D4X0qgICwvicxK/UPaE6TgPBUs1Oa3pcmD5nKR4rsXxzPFR9yHQnWo3Gy6m8fHJpmh95O73ijrJySk5hbdx2qoVO7cPN6eGuK635MwRZ59BMPveE2gPM4DeLVapqRonBsq14UEmxmLbcpF5S2Md8L3gMvR424j/LCZjglXk28VZ86ruJQheXzLoF6U7QFmFz8H2Tv5rmvq/CiI3OMXataJK+b4153biBzJsr7ldg+SWIwC3GsjtJ8hbvz/17paWUC+Qssn5C2DwcROX2YsHk8A7YhiQqkV/26t3fTmamuWyNrHgHjrBgZEJ4J05ywpZlFJKq+nvnoJEaIvzO5aj+5UW2jHsGO9SBRq2JQ45Cvt1oVoNty9N9+yX+MB2SeF/4Jnmn7pQSb+v97JbRj7UdCOgjR6rZSv0F9AMwylXFGDYJLIRe1niE1+JyJiSVqBBQcJ63MlXQC0YEcqKbE9wQV6RWfnhd+06TrBqq38pJlMdXOQSnqkMJX7brTnlSaxKO5BIHpWn6DbTzjnlJyBYwFN2mKMZbWL274umuLfFyRwuPI5rl7oD05+p15ThKVp7TLesYehLbGu8YTO4lPrs34cApG96q4SE2ZZgG9uDZ31fiY+uoanJyWI8xEXpWXR+V2zU7g/2xcbKr5OSABkdXVOd0D1txeMQktmwKWZ+AB5bHGcqhbi3Nkrf3vJ5L8CGXF5lq1ympjp0BT7lNtiT7zA0DzUET8ZbWf6J6Ib6Tyf5OpdNlzDq0HsaOkuMN5XQjaX8Mh6bn8kDcPckIp7rnQIKX2ofR9XMeLdm9uzoGBYqKQ76YVcq+yxviX7HRqcGmmvUNOLOXDo7hRvcHjD5SISna2dFurPWTN3EuDel53PU16Cu16TxN8cXOluWv+TKFnZgIkuOYXyf2Gur2Z4qCMv/W2/MCIpuGCy09rwUPQqP+vRIZl95VsYZnYmDbdOI0aj0MQr4sTb+u5pgsgx0qaTRWzOX3RE3hM11wdHIQficXJCjMfd7gh8909ePi9OHvwyA6Go+efy/7Lh4p81gTwQngsbXtWaTphYwojxj8oXsvS8UqFvchFUaeTBaMyqTYcSMoPlDL1G8Fn5MjurixZJv+HyNozTwshpRyzrlqBzJNvxjglYO/zpSClzWr6omW1plIOjHy5M1cYanmknaQ6xOor6Gu/0f3OQIsR4IP5pkzQ9CiBBpDnJgkXpDPtVzSjWt0M8/0xWfT6/dffsRmxYyCIyMbRrGkDixp8GufJaSFg22pzmymnpXNNSa0V4/Kp5k/Dnz7+SI7/W2SgIORKeierXpDdam035OMggj20kuO9XG4YuB1l1rRTg2BIVO8CsDZtJGbKLrVQQ2AjCMeJFbL2gUaA46Tle2dRKTtKcI2D/vEMqu3FXedFn+0E+CpGgUb7wsgDasTA02697rre721hgaHfnqRoDoiMPuPMbkTYtgyShQt/pentv9B/QXE5u1j1Yufpbjd8FQql3qZBxDOUvtwrl9oX9zDKHulZ49lGXssp7Jm9EPRQ5C9EGjC2srjaG5qI71FmN40xviWd5IcAhULfSC0p6Jx4ax8rZ3/AY7tH3Ke+NWfQALwenmFvV3SNRTvG1EJNQQ4agk4wQKP2SYHdmBgSrQryKW+ITRu3Tda4GQHvvkKDLD5zVeQYNws5ktg15ET9oGI3Jr4OTpt/T7nYCCauDpin2K2VLag1eiYm0kU6Ebtrwm4t837l1TlZMdfQnYZTGHTri1Vg01iWrkUfNlCdGmC3ctticvRj+MNQi6nca+IERIqOapHSXC6wxTr/sQdTXPNRP7GSKskVgkaZkahN78rO/FAGUT5a8hAHePPTYY6nCMpdO1Kc5+cTWpFkX4GIDcou+xFY0E3ZE9FclrFVHYOuG1j2B43q9k/X5mZ2jxNTvDtY1spNhntROc8WF+m8jqoTWxQdVXoM9K2Sug6WlFuQqJZVPrHjD8255LgQm7BbuyvW54zBf5kowrMLNwU8t309TEuMiHayVJrPLWHpwKmXXRXzt9tQjAID5fegB2DeFRGLOUiPCecOeO29C+bgAKqM/Mm5ASSsjKJJ5npQQ6GqVat0uQ+Fn0KJAL8riG47ZDG32U23AAA==" alt="Spark Infinite Fire Starter — top-down view showing 17 inch diameter tri-wing geometry, side view showing 1.75 inch height" style="width:100%;height:100%;object-fit:contain;display:block">
      </div>
      <div class="product-hero-content">
        <h3>Spark Infinite Fire Starter</h3>
        <div class="product-hero-tagline">"The last firestarter you'll ever buy."</div>
        <p>A reusable, single-piece <strong>16-gauge 304 stainless steel</strong> firestarter that lives in the bottom of your fire pit. Pour in <strong>10 oz of rubbing alcohol</strong>, build your logs around it, and light. The tri-wing geometry pulls 360° airflow and produces 3 flame fronts that ignite even wet or unseasoned wood with minimal smoke. No welds, no moving parts, no coatings — built to outlast the pit.</p>
        <p style="margin-bottom:0"><a href="https://sparkfirestarter.com/products/spark-infinite-fire-starter" target="_blank" rel="noopener">View on sparkfirestarter.com →</a></p>
        <div class="product-badge-row">
          <span class="tag">Core SKU</span>
          <span class="tag">Reusable</span>
          <span class="tag">304 SS</span>
          <span class="tag">No Welds</span>
        </div>
      </div>
    </div>

    <h3 style="margin-top:24px">Full Product Specs</h3>
    <div class="spec-table">
      <dl>
        <dt>Material</dt><dd><strong>16-gauge 304 stainless steel.</strong> Chosen for high-heat resistance, corrosion resistance, and recyclability. Won't deform, crack, or degrade under sustained wood-fire heat.</dd>
        <dt>Construction</dt><dd>Stamped from a <strong>single piece</strong> of steel. No welds, no rivets, no moving parts — nothing to wear out, fail, or warp.</dd>
        <dt>Geometry</dt><dd>Arched <strong>tri-wing design</strong> (three legs forming a stable 3-point base). The arch self-levels on uneven ground, holds airflow under the wood stack, and produces 3 distinct flame fronts.</dd>
        <dt>Dimensions</dt><dd><strong>17&quot; diameter · 1.75&quot; tall.</strong> Tip-to-tip span of the three wings is 17 inches; the arched profile sits 1¾ inches off the ground at its highest point. Sized to fit virtually any standard backyard fire pit, smokeless pit, or fire ring — confirm before quoting compatibility on unusually small pits (escalate to Brand Lead if uncertain).</dd>
        <dt>Fuel</dt><dd><strong>~10 oz of rubbing (isopropyl) alcohol</strong> per fire. Poured directly into the wings before lighting.</dd>
        <dt>Burn Time</dt><dd>Approximately <strong>10–15 minutes</strong> on a 10 oz fill — long enough to ignite even damp or unseasoned hardwood.</dd>
        <dt>Flame Height</dt><dd>~6 inches at peak.</dd>
        <dt>Use Case</dt><dd>Backyard fire pits (open and smokeless), fireplaces, camping fire rings, cabin stoves. Not for indoor use without a proper venting fireplace.</dd>
        <dt>Storage</dt><dd>Lives in the fire pit between uses. Stainless will surface-rust over long-term wet exposure — recommend bringing inside for long off-seasons or covering the pit.</dd>
        <dt>Maintenance</dt><dd>None. Tip out the ashes between fires. No cleaning, no parts replacement, no consumables (other than the alcohol fuel).</dd>
        <dt>Warranty</dt><dd>Refer to current Spark / Inventel warranty terms. The product is engineered to last indefinitely under intended use.</dd>
      </dl>
    </div>

    <h3 style="margin-top:24px">Why It's Built This Way</h3>
    <div class="feature-grid">
      <div class="feature-tile">
        <span class="feature-tile-icon">🔥</span>
        <h4>Single-Piece Stamping</h4>
        <p>Stamped from one sheet of steel. No welds means no failure points — nothing can crack, separate, or rust through at a seam.</p>
      </div>
      <div class="feature-tile">
        <span class="feature-tile-icon">⚙️</span>
        <h4>Zero Moving Parts</h4>
        <p>Nothing slides, hinges, screws, or pivots. No mechanism to wear out. The product will outlast every disposable starter the customer has ever bought.</p>
      </div>
      <div class="feature-tile">
        <span class="feature-tile-icon">🧱</span>
        <h4>304 Stainless Steel</h4>
        <p>Chosen over carbon steel and lower grades for corrosion resistance, heat tolerance, and recyclability. The same grade used in commercial cookware.</p>
      </div>
      <div class="feature-tile">
        <span class="feature-tile-icon">🌬️</span>
        <h4>Tri-Wing Airflow</h4>
        <p>The arched 3-leg shape self-levels on rocks, ash, or dirt — and pulls 360° airflow under the wood stack so the flame breathes and burns hot.</p>
      </div>
      <div class="feature-tile">
        <span class="feature-tile-icon">🪵</span>
        <h4>Wet-Wood Capable</h4>
        <p>Customers consistently report Spark lights damp, unseasoned, or hardwood that other starters can't touch — because the alcohol burns long enough and hot enough to drive the moisture out.</p>
      </div>
      <div class="feature-tile">
        <span class="feature-tile-icon">🚫</span>
        <h4>No Coatings</h4>
        <p>No paint, no powder coat, no chemical treatment. Just steel. Nothing to off-gas, flake, or wear off — which is why &quot;infinite reuse&quot; is a real claim, not marketing.</p>
      </div>
    </div>

    <div class="team-callout creative" style="margin-top:18px">
      <span class="team-tag">Creative · The product IS the credibility</span>
      <p style="margin:0">For Spark, the spec sheet is the marketing. <strong>304. 16 ga. No welds. No moving parts.</strong> Those four claims do more work in 10 seconds than any lifestyle reel. When you build creative, lead with the steel before you lead with the lifestyle. The B-roll of someone enjoying a fire is the reward; the close-up of the stamped tri-wing is the reason. Ads that open on the lifestyle and tuck the spec at the end consistently underperform Spark's category.</p>
    </div>

    <div class="team-callout cx">
      <span class="team-tag">CX · &quot;Will it rust?&quot; — the most common product question</span>
      <p style="margin:0">Yes, eventually — like every metal product exposed to weather. 304 stainless is highly corrosion-resistant but it's not magic. The honest answer: <em>&quot;Spark is built from the same stainless grade used in commercial kitchens, so it shrugs off rain and ash. For long off-seasons or persistent wet weather, we suggest bringing it inside or covering the pit. Surface oxidation is cosmetic and doesn't affect performance — but if it ever does fail under normal use, escalate to the CX Fulfillment Supervisor.&quot;</em> Don't promise &quot;never rusts&quot; — promise <strong>&quot;built to last and we stand behind it.&quot;</strong></p>
    </div>

    <h3 style="margin-top:24px">How To Use Spark (For CX Reference)</h3>
    <p>Four simple steps, the way the brand teaches it: <strong>Place. Fill. Build. Light.</strong></p>

    <img src="data:image/webp;base64,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" alt="Spark four-step how-to: Place Spark wherever you're going to be building a fire — Fill with about ten ounces of alcohol — Build the fire with logs (log cabin style recommended) — Light the alcohol using a long-handled lighter" style="width:100%;height:auto;border-radius:10px;margin:14px 0 18px;display:block;border:1px solid rgba(112,135,129,.18)">

    <p style="margin-top:6px">Customers will call asking how to use it, especially in the first weeks after a holiday gift season. Walk them through these steps:</p>
    <ol style="margin-left:22px;font-size:14px;line-height:1.75">
      <li><strong>Place Spark in the fire pit.</strong> The arched legs self-level — no need to clear a perfectly flat spot.</li>
      <li><strong>Pour ~10 oz of rubbing (isopropyl) alcohol</strong> into the wings of the unit. (70% or 91% both work; 91% lights faster.)</li>
      <li><strong>Build the wood stack around it — <em>log cabin style</em>, not teepee.</strong> The brand officially recommends log cabin: stacked, parallel rows of logs forming a square chimney. Teepee/tipi stacks (logs leaning together at the top) ignite less reliably and can collapse onto Spark mid-burn. The Spark logo intentionally evokes a teepee shape because it reads as &quot;A&quot; for branding — but the recommendation for actual fires is log cabin.</li>
      <li><strong>Light the alcohol with a long-handled lighter.</strong> Never lean over the pit with a short lighter or matches.</li>
      <li><strong>Let it burn.</strong> 10–15 minutes of flame is enough to ignite the wood. Spark stays in place during and after the fire.</li>
      <li><strong>After the fire is fully out and cool</strong>, dust off the ashes. Spark stays in the pit until next time.</li>
    </ol>

    <div class="team-callout brand">
      <span class="team-tag">Brand · Log cabin vs. teepee — important distinction</span>
      <p style="margin:0">This is one of the most important pieces of customer education the brand puts out, and it's easy to miss because the Spark <em>logo</em> looks like a teepee. <strong>The logo is a branding choice (the tri-wing shape reads as a stylized &quot;A&quot; for SPARK), not a fire-building instruction.</strong> Around here we openly tell customers: <em>&quot;We prefer log cabin style, even though our logo suggests a teepee.&quot;</em> Log cabin produces a more controlled burn, a hotter chimney effect that pulls the alcohol flame up into the wood, and far less risk of the stack collapsing. Teepee can work but is less reliable — and customers who learn fire-building from the logo alone often get a worse first fire than they should. Whenever you're explaining how Spark works in any channel — CX call, organic social, ad copy, packaging — make this distinction clear.</p>
    </div>

    <div class="alert-callout">
      <span class="alert-callout-title">⚠️ Critical safety rule (always quote to customers)</span>
      <p style="margin:0"><strong>Never refill Spark while it's in a hot pit, near coals, or near any ignition source.</strong> Pouring alcohol onto coals or ash can cause flashback. Spark is designed for <em>one fill per fire session.</em> If a fire goes out partway through, do <strong>not</strong> attempt to refill until the unit and the surrounding pit are completely cool. This is the single most important customer-safety message we deliver.</p>
    </div>

    </div>
  </div>
</section>

<!-- ============================================================ -->
<!-- STAGE 2 — SECTIONS 3 THROUGH 11                              -->
<!-- ============================================================ -->

<!-- VISION / MISSION / PILLARS -->
<section id="vision">
  <div class="card collapsible" data-section="vision">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">03 · Vision &amp; Pillars</span>
        <h2>Vision, Mission &amp; Brand Pillars</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <h3>Vision</h3>
    <p style="font-family:'Fraunces',serif;font-style:italic;font-size:1.15rem;color:var(--sp-charcoal);border-left:4px solid var(--sp-ember);padding:8px 18px;background:rgba(184,99,64,.05);border-radius:8px">A world where nobody fights with a fire again — and where the gear in your fire pit was made to outlast the pit.</p>

    <h3 style="margin-top:22px">Mission</h3>
    <p style="font-family:'Fraunces',serif;font-style:italic;font-size:1.15rem;color:var(--sp-charcoal);border-left:4px solid var(--sp-ember);padding:8px 18px;background:rgba(184,99,64,.05);border-radius:8px">Build the last firestarter our customers will ever need — engineered from materials and geometry that respect both the fire and the person tending it.</p>

    <h3 style="margin-top:22px">Brand Pillars</h3>
    <p>Every Spark conversation, ad, and product decision should ladder up to one of these five pillars. If a piece of work doesn't connect to one of them, it doesn't belong on the brand.</p>

    <div class="pillars">
      <div class="pillar">
        <span class="pillar-icon">🛠️</span>
        <h4>Built to Outlast</h4>
        <p>Single-piece 304 stainless. No welds, no moving parts, no coatings. The product is engineered as permanent fire-pit hardware — the opposite of a consumable.</p>
      </div>
      <div class="pillar">
        <span class="pillar-icon">🔥</span>
        <h4>Effortless Ignition</h4>
        <p>Pour, stack, light, walk away. 10 oz of alcohol and 10–15 minutes of flame is all it takes to start any fire. We removed the hassle so customers can enjoy the fire instead of fighting it.</p>
      </div>
      <div class="pillar">
        <span class="pillar-icon">🌬️</span>
        <h4>Engineered Geometry</h4>
        <p>The arched tri-wing isn't decorative. It self-levels on uneven ground, pulls 360° airflow, and produces three flame fronts that ignite even damp wood. Every curve has a job.</p>
      </div>
      <div class="pillar">
        <span class="pillar-icon">♻️</span>
        <h4>Anti-Consumable</h4>
        <p>Most fire starters are landfill-bound after one use. Spark is the opposite: one purchase, infinite reuses, fully recyclable steel. We're proudly building a product that <em>doesn't</em> create repeat purchases.</p>
      </div>
      <div class="pillar">
        <span class="pillar-icon">🤫</span>
        <h4>Quiet Confidence</h4>
        <p>We don't yell, oversell, or hype. The steel and the design speak first. The brand voice trusts the customer to recognize quality when they see it — and lets the product back that up fire after fire.</p>
      </div>
      <div class="pillar">
        <span class="pillar-icon">🏕️</span>
        <h4>Outdoor Lifestyle</h4>
        <p>Backyards, fire rings, cabin nights, smokeless pits, the occasional camping trip. Spark belongs in the ritual of fire — not in a gimmick aisle. We earn our place by being the right tool for people who actually use fires.</p>
      </div>
    </div>

    <div class="team-callout brand">
      <span class="team-tag">Brand · Pillar governance</span>
      <p style="margin:0">Pillars are the litmus test for every brand decision. Before greenlighting a campaign, a partnership, a new SKU concept, or a piece of CX language: <strong>ask which pillar it serves.</strong> If the answer is &quot;none,&quot; the work is off-brand. If the answer is &quot;all of them equally,&quot; the work isn't sharp enough yet — pick one, lead with it. The two pillars that drive most paid media are <em>Built to Outlast</em> and <em>Effortless Ignition</em>; the other four are organic, PR, and retention territory.</p>
    </div>

    </div>
  </div>
</section>

<!-- VOICE & TONE -->
<section id="voice">
  <div class="card collapsible" data-section="voice">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">04 · Voice &amp; Tone</span>
        <h2>Brand Voice &amp; Tone</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <p>Spark's voice is <strong>calm, dry, and quietly confident</strong> — the voice of someone who has already solved the problem and is just letting you in on how. We don't shout, we don't hype, we don't perform urgency. The product earns the customer's attention through design integrity; our copy gets out of its way.</p>

    <h3>Taglines &amp; Headline Frames</h3>
    <ul style="margin-left:20px;line-height:1.85;font-size:14.5px">
      <li><strong>Hero tagline:</strong> <em>The last firestarter you'll ever buy.</em></li>
      <li><strong>Spec-led:</strong> <em>304 stainless. No welds. Infinite reuse.</em></li>
      <li><strong>Outcome-led:</strong> <em>Pour. Light. Walk away.</em></li>
      <li><strong>Anti-consumable:</strong> <em>Buy once. Burn forever.</em></li>
      <li><strong>Story-led:</strong> <em>Built to live in the bottom of your pit.</em></li>
    </ul>

    <h3 style="margin-top:22px">Six Tone Modes</h3>
    <p>The base voice doesn't change, but the <em>tone</em> shifts depending on context. These are the six modes Spark uses across channels:</p>

    <div class="tone-grid">
      <div class="tone">
        <div class="tone-label">1 · Confident &amp; Spec-Led</div>
        <div class="tone-desc">For paid media, PDP copy, retail tags. Lead with the hard numbers — they do the selling.</div>
        <div class="tone-ex">"Stamped from a single piece of 16-gauge 304 stainless. No welds. No moving parts. Infinite reuse."</div>
      </div>
      <div class="tone">
        <div class="tone-label">2 · Dry &amp; Tongue-in-Cheek</div>
        <div class="tone-desc">For organic social, email subject lines, packaging copy. A small wink — never sarcasm.</div>
        <div class="tone-ex">"Around here we prefer log-cabin style — even though our logo suggests a teepee."</div>
      </div>
      <div class="tone">
        <div class="tone-label">3 · Warm &amp; Practical</div>
        <div class="tone-desc">For CX emails, customer support calls, first-time-user instructions. Helpful without being chirpy.</div>
        <div class="tone-ex">"Pour ten ounces of rubbing alcohol into the wings, build your wood around it, and light. That's the whole thing."</div>
      </div>
      <div class="tone">
        <div class="tone-label">4 · Direct &amp; Safety-First</div>
        <div class="tone-desc">For any safety-related copy — refilling, disposal, hot pits. No humor, no hedging, no soft language.</div>
        <div class="tone-ex">"Never refill Spark while the pit is hot. Wait until it's fully cool. One fill per fire session, every time."</div>
      </div>
      <div class="tone">
        <div class="tone-label">5 · Outdoor-Native</div>
        <div class="tone-desc">For partnerships, influencer briefs, blog content. Speaks fluent fire pit, cabin weekend, van-life. Not a costume.</div>
        <div class="tone-ex">"Built for the people who already know that wet hardwood is a problem — and that paper kindling isn't the answer."</div>
      </div>
      <div class="tone">
        <div class="tone-label">6 · Anti-Hype</div>
        <div class="tone-desc">For PR, founder content, &quot;why we built this&quot; copy. Under-claim and let the steel speak.</div>
        <div class="tone-ex">"It's not magic. It's geometry, the right grade of steel, and a fuel that burns long enough to dry the wood out."</div>
      </div>
    </div>

    <h3 style="margin-top:22px">Language Guidance</h3>
    <div class="do-dont">
      <div class="do">
        <h4>✅ Do</h4>
        <ul>
          <li>Lead with specs (<em>304, 16 ga, 10 oz, tri-wing</em>) — they do real work.</li>
          <li>Use plain, declarative sentences. Short. Confident. Earned.</li>
          <li>Trust the customer. They know what they want; we just help them recognize it.</li>
          <li>Let the dry humor land sparingly — once per piece, not every line.</li>
          <li>Treat fire as a ritual, not a chore.</li>
          <li>Use &quot;buy once&quot; and &quot;infinite reuse&quot; framing whenever the word &quot;cost&quot; comes up.</li>
        </ul>
      </div>
      <div class="dont">
        <h4>🚫 Don't</h4>
        <ul>
          <li>Don't shout — no all-caps headlines, no &quot;BEST EVER,&quot; no &quot;REVOLUTIONARY.&quot;</li>
          <li>Don't fake urgency. We don't do &quot;HURRY — only 3 left&quot; copy.</li>
          <li>Don't promise &quot;never rusts&quot; — promise <em>built to last</em>.</li>
          <li>Don't infantilize the customer (&quot;easy peasy,&quot; &quot;super simple,&quot; &quot;don't worry&quot;).</li>
          <li>Don't position Spark as a gadget or novelty — it's hardware, not a stocking stuffer.</li>
          <li>Don't compare to Insta-Fire by name (different product, different category — see Objections).</li>
        </ul>
      </div>
    </div>

    <h3 style="margin-top:22px">Tone by Channel</h3>
    <table>
      <thead><tr><th>Channel</th><th>Primary Tone</th><th>Sentence Length</th><th>Humor</th></tr></thead>
      <tbody>
        <tr><td>Paid social (Meta, TikTok)</td><td>Confident &amp; Spec-Led</td><td>Short, punchy</td><td>Rare — let the product show off</td></tr>
        <tr><td>Organic social (IG, TikTok)</td><td>Dry &amp; Tongue-in-Cheek</td><td>Medium</td><td>Light, once per post</td></tr>
        <tr><td>Email (welcome, post-purchase)</td><td>Warm &amp; Practical</td><td>Conversational</td><td>Sparing</td></tr>
        <tr><td>Email (promo)</td><td>Confident &amp; Spec-Led</td><td>Short</td><td>None</td></tr>
        <tr><td>Website / PDP</td><td>Confident &amp; Spec-Led + Outdoor-Native</td><td>Mixed</td><td>One small wink per page max</td></tr>
        <tr><td>CX / customer support</td><td>Warm &amp; Practical + Direct (on safety)</td><td>Conversational</td><td>None on safety; light otherwise</td></tr>
        <tr><td>PR / press / podcasts</td><td>Anti-Hype</td><td>Long-form OK</td><td>Dry, occasional</td></tr>
        <tr><td>Packaging &amp; inserts</td><td>Dry &amp; Tongue-in-Cheek</td><td>Very short</td><td>One memorable line</td></tr>
        <tr><td>Influencer briefs</td><td>Outdoor-Native</td><td>Brief, direct</td><td>Their tone, not ours</td></tr>
        <tr><td>Safety messaging (anywhere)</td><td>Direct &amp; Safety-First</td><td>Short, clear</td><td>None</td></tr>
      </tbody>
    </table>

    <div class="team-callout marketing">
      <span class="team-tag">Marketing · Headline shortcuts</span>
      <p style="margin:0">When you're stuck on a headline, default to one of three frames: <strong>spec list</strong> (&quot;304 stainless. No welds. Infinite reuse.&quot;), <strong>contrast</strong> (&quot;Stop buying disposable starters. Start owning a real one.&quot;), or <strong>outcome</strong> (&quot;Pour. Light. Walk away.&quot;). All three work because they reflect the brand's core promise without performing. Avoid &quot;discover,&quot; &quot;introducing,&quot; &quot;finally,&quot; and any word a luxury fragrance ad would use.</p>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative · Reading the brand voice in 10 seconds</span>
      <p style="margin:0">If you're new and want to feel the voice quickly, read the FAQ on <a href="https://sparkfirestarter.com/pages/faq" target="_blank" rel="noopener">sparkfirestarter.com/pages/faq</a>. The dry humor (&quot;he can take it,&quot; &quot;sad face,&quot; the log-cabin-vs-teepee joke) lives there — calibrate your output to that energy, not to corporate-cheerful or extreme-sports-bro. We're closer to a quietly competent woodworker than to a Mountain Dew ad.</p>
    </div>

    </div>
  </div>
</section>

<!-- PERSONALITY & ADJECTIVES -->
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

    <p>If Spark were a person, it would be the friend who built their own fire pit, knows which hardwoods burn cleanest, and corrects you gently when you're stacking logs wrong — without making you feel dumb about it. The personality below describes how the brand <em>shows up</em>, regardless of channel.</p>

    <div class="adj-grid">
      <div class="adj">
        <div class="adj-title">Confident</div>
        <div class="adj-desc">We know the product is built right. We don't need to prove it loudly — the steel does that fire after fire.</div>
      </div>
      <div class="adj">
        <div class="adj-title">Dry</div>
        <div class="adj-desc">The humor is understated. A wink, not a punchline. We never break the spell to perform a joke.</div>
      </div>
      <div class="adj">
        <div class="adj-title">Honest</div>
        <div class="adj-desc">We don't oversell. If a customer asks about rust, we tell them the truth: surface oxidation can happen, and here's how to handle it.</div>
      </div>
      <div class="adj">
        <div class="adj-title">Practical</div>
        <div class="adj-desc">No fluff. No mood lighting copy. Customers who buy Spark want to start a fire and enjoy it — we get out of the way.</div>
      </div>
      <div class="adj">
        <div class="adj-title">Engineered</div>
        <div class="adj-desc">The brand thinks like a designer who actually builds things. Geometry matters. Steel grade matters. Every choice has a reason.</div>
      </div>
      <div class="adj">
        <div class="adj-title">Anti-Hype</div>
        <div class="adj-desc">We will never be a viral &quot;life hack&quot; brand. We're a hardware brand. The audience can tell the difference.</div>
      </div>
      <div class="adj">
        <div class="adj-title">Outdoor-Native</div>
        <div class="adj-desc">The brand belongs in fire-ring conversations, not gadget-review listicles. We speak the language because we live the use case.</div>
      </div>
      <div class="adj">
        <div class="adj-title">Patient</div>
        <div class="adj-desc">Nothing about our product or our voice is rushed. Fires take time. So does building trust. We're fine with both.</div>
      </div>
      <div class="adj">
        <div class="adj-title">Self-Aware</div>
        <div class="adj-desc">We know our logo looks like a teepee. We'll point that out before you do. Awareness disarms; pretense backfires.</div>
      </div>
      <div class="adj">
        <div class="adj-title">Resilient</div>
        <div class="adj-desc">Mirrors the product. Built for weather, abuse, and time. Calm under pressure — including in CX escalations.</div>
      </div>
    </div>

    <div class="team-callout brand">
      <span class="team-tag">Brand · The personality test</span>
      <p style="margin:0">When you can't decide if a piece of copy or a creative is &quot;on-brand,&quot; run it through this test: <strong>Would a quietly competent woodworker say this?</strong> If yes — it's likely on-brand. If it sounds like a startup founder, an influencer, or a luxury catalog, it's drifting. The personality is the same person across every channel; only the situation changes.</p>
    </div>

    </div>
  </div>
</section>

<!-- VISUAL IDENTITY -->
<section id="visual">
  <div class="card collapsible" data-section="visual">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">06 · Visual Identity</span>
        <h2>Visual Identity</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <h3>Color Palette</h3>
    <p>Calm and grounded — <strong>sage green</strong> carries the brand, <strong>cream</strong> warms it up, charcoal anchors body type, and ember/amber act as warm accents for fire-related moments. This palette was sampled directly from sparkfirestarter.com brand assets. The core promise is restraint: <strong>two working colors (sage + cream) plus accents.</strong> Anything more dilutes the calm-confident feel.</p>

    <div class="palette">
      <div class="swatch"><div class="swatch-color" style="background:#708781"></div><div class="swatch-info"><div class="swatch-name">Sage</div><div class="swatch-role">Signature base · hero, nav, brand surfaces</div><div class="swatch-hex">#708781</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#5C726B"></div><div class="swatch-info"><div class="swatch-name">Sage Deep</div><div class="swatch-role">Hover, depth, gradient anchor</div><div class="swatch-hex">#5C726B</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#E1DCC9"></div><div class="swatch-info"><div class="swatch-name">Cream</div><div class="swatch-role">Signature warm tone · type on sage</div><div class="swatch-hex">#E1DCC9</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#F0EBDC"></div><div class="swatch-info"><div class="swatch-name">Cream Light</div><div class="swatch-role">Page background</div><div class="swatch-hex">#F0EBDC</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#2A2A28"></div><div class="swatch-info"><div class="swatch-name">Charcoal</div><div class="swatch-role">Body type, deep accent</div><div class="swatch-hex">#2A2A28</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#B86340"></div><div class="swatch-info"><div class="swatch-name">Ember</div><div class="swatch-role">Warm accent · fire moments, CTAs</div><div class="swatch-hex">#B86340</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#C49A65"></div><div class="swatch-info"><div class="swatch-name">Amber</div><div class="swatch-role">Warm secondary · highlights</div><div class="swatch-hex">#C49A65</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#8A8580"></div><div class="swatch-info"><div class="swatch-name">Steel</div><div class="swatch-role">304 SS mid-tone, dividers</div><div class="swatch-hex">#8A8580</div></div></div>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative · Color usage rules</span>
      <p style="margin:0"><strong>60-30-10 rule, sage-led.</strong> 60% sage or cream (whichever is the canvas), 30% supporting neutrals (charcoal type, steel, white), 10% ember/amber for warmth and fire moments. Sage is the brand color — when in doubt, sage canvas with cream type and white card surfaces. Ember and amber are <em>warm accents only</em>: use them on product/fire shots, hover states, and rare moments when the composition needs heat. Avoid bright, high-saturation orange — it fights the sage and reads as off-brand. Charcoal is for body type, not big surfaces (use sage instead). Pine green is for sustainability/1% for the Planet moments only.</p>
    </div>

    <h3 style="margin-top:24px">Typography</h3>
    <div class="type-spec">
      <div class="type-spec-name">Bebas Neue · Display / Hero</div>
      <div class="type-spec-use">All-caps headlines, brand wordmark, hero stats. Tight letterform reads as confident and industrial.</div>
      <div style="font-family:'Bebas Neue',sans-serif;font-size:2.4rem;letter-spacing:.04em;color:var(--sp-charcoal)">THE LAST FIRESTARTER YOU'LL EVER BUY</div>
    </div>
    <div class="type-spec">
      <div class="type-spec-name">Fraunces · Editorial / Section heads</div>
      <div class="type-spec-use">Section titles, pull quotes, taglines, product names. Adds warmth and personality without losing weight.</div>
      <div style="font-family:'Fraunces',serif;font-weight:800;font-size:1.6rem;color:var(--sp-charcoal)">Built to outlast the pit.</div>
    </div>
    <div class="type-spec">
      <div class="type-spec-name">Inter · Body / UI</div>
      <div class="type-spec-use">Body copy, UI, tables, descriptions. Highly legible at small sizes; neutral so personality lives in display fonts above.</div>
      <div style="font-family:'Inter',sans-serif;font-size:14.5px;color:var(--sp-text);line-height:1.55">Stamped from a single piece of 304 stainless steel, the Spark Infinite Fire Starter is engineered to live in the bottom of your fire pit and outlast every disposable starter you've ever owned.</div>
    </div>
    <div class="type-spec">
      <div class="type-spec-name">DM Mono · Spec / Eyebrow / Code</div>
      <div class="type-spec-use">Eyebrows, spec labels, technical callouts. Adds an engineered, blueprint-feel to small text.</div>
      <div style="font-family:'DM Mono',monospace;font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--sp-ember);font-weight:700">304 STAINLESS · 16 GAUGE · NO WELDS</div>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative · Type pairing rules</span>
      <p style="margin:0">Pair <strong>Bebas Neue</strong> headlines with <strong>Inter</strong> body — never Bebas + Fraunces in the same hierarchy (they fight for attention). Use <strong>Fraunces</strong> when you want warmth or quote-energy (taglines, pull quotes, product names). Use <strong>DM Mono</strong> only for short-burst spec labels and eyebrows, never for body copy. Maximum two display fonts per composition; if you're reaching for a third, the layout is the problem, not the typography.</p>
    </div>

    <h3 style="margin-top:24px">Logo</h3>
    <p>The Spark wordmark is the brand's signature. Three rules govern its use:</p>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:12px">
      <div style="background:var(--sp-cream-light);padding:30px;border-radius:10px;border:1px solid rgba(112,135,129,.2);display:flex;align-items:center;justify-content:center;flex-direction:column;gap:10px;min-height:140px">
        <span style="font-family:'Bebas Neue',sans-serif;font-size:3.6rem;color:var(--sp-sage-deep);letter-spacing:.06em;line-height:1">SPARK</span>
        <span style="font-family:'DM Mono',monospace;font-size:10px;color:var(--sp-text-muted);letter-spacing:.12em;text-transform:uppercase">Primary · light backgrounds</span>
      </div>
      <div style="background:var(--sp-sage);padding:30px;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-direction:column;gap:10px;min-height:140px;border:1px solid rgba(225,220,201,.25)">
        <span style="font-family:'Bebas Neue',sans-serif;font-size:3.6rem;color:var(--sp-cream);letter-spacing:.06em;line-height:1">SPARK</span>
        <span style="font-family:'DM Mono',monospace;font-size:10px;color:var(--sp-cream);opacity:.8;letter-spacing:.12em;text-transform:uppercase">Reversed · sage backgrounds</span>
      </div>
    </div>

    <ul style="margin-left:20px;line-height:1.85;font-size:14px;margin-top:14px">
      <li><strong>Clear space:</strong> minimum padding around the logo equal to the height of the &quot;S&quot; on every side.</li>
      <li><strong>Minimum size:</strong> 24px tall on screen, 0.4&quot; in print. Below that, legibility degrades.</li>
      <li><strong>Color rules:</strong> Sage-deep or charcoal on cream (primary). Cream on sage (reversed). Never ember as the wordmark color — ember is an accent, not the logo. Never sage on cream-light — too low contrast.</li>
    </ul>

    <h3 style="margin-top:24px">Photography &amp; Imagery</h3>
    <div class="do-dont">
      <div class="do">
        <h4>✅ Do</h4>
        <ul>
          <li>Real fire pits, real backyards, real wood. Authentic over polished.</li>
          <li>Show the steel up close — close-ups of the tri-wing geometry are core brand assets.</li>
          <li>Golden hour, dusk, and night shots. The product looks best with flame as the light source.</li>
          <li>Action over still life — pouring alcohol, lighting, the moment the flame catches.</li>
          <li>Natural environments: forests, cabins, ranches, suburban patios.</li>
          <li>People in the frame, but Spark is the hero — not them.</li>
        </ul>
      </div>
      <div class="dont">
        <h4>🚫 Don't</h4>
        <ul>
          <li>Studio-white packshots without context. The product needs the fire pit to make sense.</li>
          <li>Heavily filtered, oversaturated, or HDR-style images.</li>
          <li>Stock-photo &quot;happy family roasting marshmallows&quot; clichés.</li>
          <li>Indoor settings without a real fireplace — looks staged.</li>
          <li>Crop the steel out of focus. Spark's geometry is the brand asset.</li>
          <li>Composite or AI-generated fire — it always reads fake.</li>
        </ul>
      </div>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative · Photography brief in one line</span>
      <p style="margin:0">If your shot doesn't have <strong>(a) real fire, (b) real wood, and (c) the steel visible</strong> — reshoot. Those three elements together make any Spark image work. Without one of them, the image is a stock-photo stand-in, not a brand asset.</p>
    </div>

    </div>
  </div>
</section>

<!-- AUDIENCE & PERSONAS -->
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

    <h3>Audience Profile (High-Level)</h3>
    <p>Spark customers are <strong>people who already use fires</strong> — not curious shoppers, not trend-buyers, not first-time campers. They have a fire pit in the backyard, a smokeless pit they bought during the post-2020 boom, a fireplace they actually use, or a regular cabin/camping rotation. They've already had the frustrating fire-starting experience Spark solves. The brand doesn't need to convince them they want a fire — it needs to convince them that <em>this</em> is the firestarter that finally ends the hassle.</p>

    <p>Demographically, the core skews <strong>30–60, suburban-to-rural, slightly more male than female (60/40)</strong>, household income $75K+. Psychographically the audience is more meaningful than demographics: they value durability over disposability, prefer one well-made tool over five mediocre ones, and respond to engineering claims (&quot;304 stainless, no welds&quot;) more than lifestyle claims (&quot;cozy nights with loved ones&quot;).</p>

    <h3 style="margin-top:22px">Customer Personas</h3>
    <p>Four core personas drive the majority of Spark purchases. Use these when briefing creative, writing email segments, or framing a CX call.</p>

    <div class="personas">
      <div class="persona">
        <div class="persona-name">Backyard Bill</div>
        <div class="persona-type">Frequent Fire-Pit Owner · 48 · Charlotte, NC</div>
        <div class="persona-desc">Has a propane- or wood-burning fire pit on the back patio. Uses it 2–4 nights a week from spring through fall. Already owns a smokeless pit (Solo Stove, Breeo, or similar) and has cycled through every disposable starter brand at the hardware store. Tired of the smoke, the half-burned starter cubes, and the bag of soggy paper next to the pit.</div>
        <div class="persona-focus"><strong>Focus:</strong> Reusability, smokeless performance, &quot;one-and-done&quot; framing, pairs with Solo Stove / Breeo</div>
      </div>
      <div class="persona">
        <div class="persona-name">Cabin Carla</div>
        <div class="persona-type">Weekend Cabin Owner · 54 · Asheville, NC</div>
        <div class="persona-desc">Owns or rents a cabin/lake house. Drives up most weekends and uses the wood stove or fire ring almost every night. Wants gear that lives at the cabin and doesn't need to be packed in/out. Hates running out of newspaper. Will buy 2–3 Sparks (one per fire location).</div>
        <div class="persona-focus"><strong>Focus:</strong> &quot;Lives in the pit&quot; framing, durability under weather exposure, multi-unit households, gift-able to family</div>
      </div>
      <div class="persona">
        <div class="persona-name">Practical Pete</div>
        <div class="persona-type">Engineer-Mindset Buyer · 42 · Denver, CO</div>
        <div class="persona-desc">Software, ops, or trades professional. Reads spec sheets before reviews. Will research material grades, gauge thickness, and construction methods before buying anything in his backyard. Bought Spark because of <em>304</em>, <em>16 ga</em>, and <em>no welds</em> — not because of a lifestyle ad. Will leave a 5-star review citing materials.</div>
        <div class="persona-focus"><strong>Focus:</strong> Spec-led copy, material claims, engineering depth, &quot;buy once&quot; logic</div>
      </div>
      <div class="persona">
        <div class="persona-name">Gifting Greg</div>
        <div class="persona-type">Holiday / Father's Day Gifter · 38 · Minneapolis, MN</div>
        <div class="persona-desc">Buying for a dad, brother, or friend who has a fire pit and is &quot;impossible to shop for.&quot; Spark hits the sweet spot: useful, premium-feeling, has a story (304 stainless, infinite reuse), priced like a real gift. Discovered Spark via gift-guide press, a friend's recommendation, or holiday paid social.</div>
        <div class="persona-focus"><strong>Focus:</strong> Gift packaging, holiday seasonality, &quot;dad who has everything&quot; framing, $50–100 gift price point</div>
      </div>
    </div>

    <h3 style="margin-top:28px">Brand Archetype: The Sage (with shades of The Explorer)</h3>
    <p>Spark is <strong>The Sage</strong> — the brand that knows the right way and doesn't oversell it. Sage brands earn trust through depth of knowledge and quiet authority (think Patagonia in their early days, or any tool brand built on reputation). Underneath sits <strong>The Explorer</strong> — the lifestyle layer that makes Sage feel inviting rather than pedantic. The combination is why our audience converts: the Sage tells them the product is built right; the Explorer reminds them why they wanted a fire in the first place.</p>

    <div class="team-callout marketing">
      <span class="team-tag">Marketing · Persona-channel mapping</span>
      <p style="margin:0"><strong>Backyard Bill</strong> — Meta paid social, especially retargeting Solo Stove / Breeo / fire-pit-adjacent audiences. <strong>Cabin Carla</strong> — Pinterest, Better Homes &amp; Gardens-adjacent organic, fall/holiday seasonality. <strong>Practical Pete</strong> — Reddit (r/firepits, r/BuyItForLife), Google Search for spec keywords, engineering blog placements. <strong>Gifting Greg</strong> — gift-guide PR (Wirecutter, Esquire, Father's Day roundups), Q4 paid social, retail. Don't try to write one ad that hits all four; pick one persona per creative.</p>
    </div>

    </div>
  </div>
</section>

<!-- COMPETITORS & POSITIONING -->
<section id="competitors">
  <div class="card collapsible" data-section="competitors">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">08 · Competitors</span>
        <h2>Competitors &amp; Positioning</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <h3>The Landscape</h3>
    <p>Spark competes in the <strong>fire-starting accessories</strong> category — a fragmented space with ~$200M+ in annual US revenue spread across disposable consumables, traditional flint/steel tools, and a small but growing reusable-hardware segment. Most of the category is single-use: starter cubes, granular pouches, fire-starter sticks, fatwood. Spark sits in a different sub-category entirely: <strong>permanent, reusable fire-pit hardware</strong>. The closest peer set is small, which is both an opportunity (clear positioning) and a challenge (limited &quot;direct comparison&quot; SEO traffic).</p>

    <h3 style="margin-top:18px">Competitive Set</h3>
    <table>
      <thead><tr><th>Competitor</th><th>Category</th><th>Format</th><th>How Spark Wins</th></tr></thead>
      <tbody>
        <tr>
          <td><strong>Insta-Fire</strong></td>
          <td>Disposable granular fire starter</td>
          <td>Mylar pouches · Shark Tank brand · multi-pack</td>
          <td>Spark is reusable; Insta-Fire is consumable. Different category — but customers conflate the two by name. Position on permanence, not on burn quality.</td>
        </tr>
        <tr>
          <td><strong>Duraflame / Pine Mountain</strong></td>
          <td>Disposable starter logs / cubes</td>
          <td>Big-box retail · low price · single-use</td>
          <td>Spark is &quot;buy once vs. buy forever.&quot; Run the math: ~$8/box × 10 boxes/year × 10 years = $800. Spark is a one-time spend.</td>
        </tr>
        <tr>
          <td><strong>Fatwood / lighter pine</strong></td>
          <td>Natural / pine-resin kindling</td>
          <td>Hardware store · bundles · biodegradable</td>
          <td>Authentic feel, but unreliable on damp wood and runs out. Spark is the &quot;you only need this&quot; alternative.</td>
        </tr>
        <tr>
          <td><strong>Solo Stove / Breeo accessories</strong></td>
          <td>Smokeless pit accessories</td>
          <td>Premium brand-locked accessories</td>
          <td>Spark is brand-agnostic — works in any pit, including theirs. Position as the <em>universal</em> upgrade to whatever pit they already own.</td>
        </tr>
        <tr>
          <td><strong>Ferro rods / flint &amp; steel</strong></td>
          <td>Survival/bushcraft fire-starting</td>
          <td>Skill-based · low cost</td>
          <td>Different audience (survival/prepper). Spark isn't a survival tool; it's hardware for people who want a fire <em>now</em>, not a skill challenge.</td>
        </tr>
        <tr>
          <td><strong>Boy Scout / paper &amp; kindling</strong></td>
          <td>The default</td>
          <td>Free · DIY · unreliable</td>
          <td>Most customers are converting from this, not from another product. Spark is the upgrade from &quot;newspaper and crossed fingers.&quot;</td>
        </tr>
      </tbody>
    </table>

    <h3 style="margin-top:22px">Positioning Statement</h3>
    <div class="policy-card" style="background:linear-gradient(135deg,var(--sp-charcoal) 0%,var(--sp-iron) 100%);color:#fff;border-color:var(--sp-ember)">
      <h3 style="color:var(--sp-amber)">For people who already use fires</h3>
      <p style="color:#F5EFE3"><strong>Spark</strong> is the only firestarter built as permanent fire-pit hardware — a single piece of 304 stainless steel engineered to live in the bottom of your pit, ignite any fire with 10 oz of alcohol, and outlast every disposable starter you've ever owned.</p>
      <p style="color:#F5EFE3;margin-bottom:0">Unlike consumable cubes, pouches, or kindling, Spark is bought <strong>once</strong> and used <strong>infinitely</strong> — no reorders, no smoke, no fighting with paper. The last firestarter you'll ever buy.</p>
    </div>

    <div class="team-callout marketing">
      <span class="team-tag">Marketing · How to win each competitive battle</span>
      <p style="margin:0"><strong>vs. Insta-Fire / Duraflame:</strong> &quot;Stop reordering. Buy once.&quot; Lead with the buy-forever math. <strong>vs. fatwood:</strong> &quot;Works on wet wood. Doesn't run out.&quot; <strong>vs. Solo Stove / Breeo accessories:</strong> &quot;Works in <em>any</em> pit, including yours.&quot; <strong>vs. ferro rods:</strong> different customer — don't engage; let bushcraft Twitter have that argument. <strong>vs. paper &amp; kindling:</strong> &quot;The upgrade from newspaper and crossed fingers.&quot; That last one converts the most volume — most customers aren't switching from a competitor, they're switching from no method at all.</p>
    </div>

    </div>
  </div>
</section>

<!-- OBJECTION HANDLING -->
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

    <p>The most common pushbacks Spark faces — in CX, in ad comments, in reviews — and the scripted responses that actually work. Memorize the first three; they cover ~70% of customer hesitation.</p>

    <div class="objection">
      <div class="objection-q">It's just a piece of metal — why is it $XX?</div>
      <div class="objection-a">Spark is a single piece of <strong>16-gauge 304 stainless steel</strong> — the same grade and gauge used in commercial cookware and outdoor hardware that's expected to last decades. There are no welds, no moving parts, and no coatings to wear off. Most customers tell us a single Spark replaces the disposable starter cubes they were buying every month. Run the math: $8/box × 10 boxes/year is $80/year, and most customers do this for 10+ years. Spark is bought once.</div>
    </div>

    <div class="objection">
      <div class="objection-q">Isn't this the Shark Tank fire starter? (Insta-Fire confusion)</div>
      <div class="objection-a">That's a great question — and a common mix-up. <strong>Spark is not Insta-Fire.</strong> Insta-Fire is a granular, disposable starter sold in pouches; it appeared on Shark Tank Season 7. Spark is a different product entirely: a <em>reusable, single-piece stainless steel</em> firestarter that lives in your fire pit. We're not a consumable, and we're not on Shark Tank. The two products solve the same problem (starting a fire) but with very different approaches — disposable vs. permanent hardware.</div>
    </div>

    <div class="objection">
      <div class="objection-q">Won't it just rust like everything else outside?</div>
      <div class="objection-a">Spark is built from <strong>304 stainless steel</strong> — chosen specifically for corrosion resistance. It shrugs off rain, snow, and ash. That said, <em>any</em> metal exposed to weather long enough can develop surface oxidation; that's cosmetic and doesn't affect performance. For long off-seasons or persistent wet weather, we recommend bringing it inside or covering the pit. We've never had a Spark fail under normal use — and if one ever did, we'd make it right.</div>
    </div>

    <div class="objection">
      <div class="objection-q">Why do I need rubbing alcohol? Can't I use lighter fluid or gas?</div>
      <div class="objection-a">Rubbing (isopropyl) alcohol is the safest, cleanest fuel for Spark. It burns at a controlled rate, leaves no residue, and produces almost no smoke. Lighter fluid is petroleum-based and creates smoke and odor. Gasoline is dangerous and explosive — we strongly advise against it. Stick with rubbing alcohol; 70% or 91% both work, and a single $3 bottle lasts many fires.</div>
    </div>

    <div class="objection">
      <div class="objection-q">10 oz of alcohol per fire seems wasteful.</div>
      <div class="objection-a">It's about 30 cents per fire in fuel cost — significantly cheaper than a starter cube or a Duraflame log, and far less wasteful than throwing away a single-use starter every time. Compare 10 oz of biodegradable alcohol vs. a wax-and-paraffin starter cube that ends up in landfill: Spark's footprint per fire is smaller, not larger.</div>
    </div>

    <div class="objection">
      <div class="objection-q">My disposable starter cubes work fine. Why switch?</div>
      <div class="objection-a">If they really work fine, you don't have to. But most of our customers came to us because the cubes <em>don't</em> work fine — they burn out before the wood catches, they smoke, they fail on damp wood, and you have to keep buying them. Spark is for the moment you decide you're tired of fighting the fire and want hardware that handles it. One purchase, infinite uses, works on wood the cubes can't touch.</div>
    </div>

    <div class="objection">
      <div class="objection-q">Will it work on damp/unseasoned wood?</div>
      <div class="objection-a">Yes — that's actually one of the reasons Spark exists. The 10–15 minutes of sustained alcohol flame is long enough to drive the moisture out of damp or unseasoned wood and ignite it. Customers consistently report Spark lights wood that disposable starters can't touch. It's not magic; it's just enough sustained heat in the right airflow pattern.</div>
    </div>

    <div class="objection">
      <div class="objection-q">Can I use it in my Solo Stove / Breeo / smokeless pit?</div>
      <div class="objection-a">Yes — Spark works in any fire pit, including smokeless ones. The arched tri-wing self-levels on uneven surfaces, and the geometry actually <em>improves</em> performance in smokeless pits because it pulls the airflow pattern those pits are designed around. We have customers running Spark in Solo Stove, Breeo, Tiki, and DIY fire rings without issue.</div>
    </div>

    <div class="objection">
      <div class="objection-q">Do you have a smaller version for backpacking?</div>
      <div class="objection-a">No — Spark is currently a single product. It's designed for backyard fire pits, fireplaces, and base-camp fire rings, not ultralight backpacking. Customers who car-camp regularly love it for the campsite ring; for ultralight backcountry use, a ferro rod or pouch starter is honestly a better fit.</div>
    </div>

    <div class="objection">
      <div class="objection-q">My fire pit is small — will it fit?</div>
      <div class="objection-a">Spark measures <strong>17&quot; tip-to-tip across the wings and 1.75&quot; tall</strong>. It fits virtually every standard backyard fire pit, fire ring, and smokeless pit on the market. If a customer's pit has an opening narrower than ~17 inches (some compact patio pits, tabletop fire bowls, or specialty designs), it won't fit — be honest and tell them. For anything in the standard size range, the answer is yes. When in doubt or if the customer describes an unusual pit, escalate to the Brand Lead before quoting compatibility.</div>
    </div>

    <div class="objection">
      <div class="objection-q">Is it safe to leave outside year-round?</div>
      <div class="objection-a">Yes. 304 stainless is built for outdoor exposure. Many of our customers leave Spark in the pit through every season — that's how it's designed to be used. For long winter storage in heavy snow regions, bringing it under cover is a small step that extends its appearance over decades, but performance-wise it can stay out.</div>
    </div>

    <div class="objection">
      <div class="objection-q">Is this just a Solo Stove accessory?</div>
      <div class="objection-a">No — Spark is brand-independent and works in any fire pit. We're not affiliated with Solo Stove, Breeo, Tiki, or any other pit brand. That's actually a feature: whatever pit a customer already owns (or whatever they upgrade to next), Spark goes with them.</div>
    </div>

    <div class="team-callout cx">
      <span class="team-tag">CX · The two highest-frequency objections</span>
      <p style="margin:0">By far, the two most common objections in CX queues are <strong>(1) the Insta-Fire / Shark Tank confusion</strong> and <strong>(2) &quot;will it rust?&quot;</strong>. Memorize the scripted responses to both and you'll cut your handle time in half. The Insta-Fire one in particular: <em>don't</em> get defensive about the brand confusion. Acknowledge it warmly (&quot;great question — common mix-up&quot;), correct it cleanly, and pivot to what makes Spark different. Customers who get a confident, friendly correction often convert; customers who feel corrected sharply do not.</p>
    </div>

    </div>
  </div>
</section>

<!-- CUSTOMER JOURNEY -->
<section id="journey">
  <div class="card collapsible" data-section="journey">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">10 · Journey</span>
        <h2>Customer Journey &amp; Lifecycle</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <p>The path a typical Spark customer travels — from the moment they first realize they're tired of fighting fires, to the moment they tell a friend. Each row maps the customer's mindset, the channels they're on, what the brand should be doing there, and what CX's role is.</p>

    <div class="journey">
    <table>
      <thead><tr><th>Stage</th><th>What They're Thinking</th><th>Channel</th><th>Brand Action</th><th>CX Role</th></tr></thead>
      <tbody>
        <tr>
          <td><strong>Awareness</strong></td>
          <td>&quot;Why does starting this fire always suck?&quot;</td>
          <td>Meta / TikTok / YouTube paid social, gift-guide PR, fire-pit-adjacent retargeting</td>
          <td>Lead with the universal frustration. Show the steel in 3 seconds. No hype.</td>
          <td>None yet — but field social DMs (&quot;is this real?&quot;) with the FAQ link.</td>
        </tr>
        <tr>
          <td><strong>Consideration</strong></td>
          <td>&quot;Is this actually different from what I already buy?&quot;</td>
          <td>Website PDP, FAQ, reviews, Reddit, blog reviews (4WDTalk, Gadget Flow)</td>
          <td>Spec depth. Materials claims. UGC reviews. Comparison content (vs. cubes, vs. fatwood).</td>
          <td>Field pre-purchase questions on dimensions, fire-pit fit, and rubbing-alcohol-vs-other-fuel.</td>
        </tr>
        <tr>
          <td><strong>Purchase</strong></td>
          <td>&quot;Worth it. Adding to cart.&quot;</td>
          <td>sparkfirestarter.com (Shopify), Amazon listing, retail partners</td>
          <td>Frictionless checkout. Clear shipping promise. Subscribe &amp; Save not applicable (single-use buy). Free shipping threshold visible.</td>
          <td>Catch checkout issues. Confirm any same-day order changes within the cancellation window.</td>
        </tr>
        <tr>
          <td><strong>Post-Purchase / First Fire</strong></td>
          <td>&quot;Did I just get scammed, or is this the real deal?&quot;</td>
          <td>Confirmation email, shipping email, unboxing</td>
          <td>Send a clean &quot;here's how to use it&quot; email 1 day before delivery. Include the safety rule (never refill hot pit) prominently.</td>
          <td>Field &quot;how do I use this&quot; calls with patience. Walk through the 6 steps in #2 Product Line.</td>
        </tr>
        <tr>
          <td><strong>Use &amp; Validation</strong></td>
          <td>&quot;Holy crap, that just worked.&quot;</td>
          <td>In-the-moment social posts (TikTok / IG), product reviews</td>
          <td>Encourage UGC. Reshare the wins. Build the social proof flywheel — Sage brands compound trust.</td>
          <td>Capture moments where customers are delighted; route to Marketing for testimonial use.</td>
        </tr>
        <tr>
          <td><strong>Advocacy</strong></td>
          <td>&quot;You have to get this.&quot;</td>
          <td>Word-of-mouth, gift purchases, Reddit comments, Q4 holiday sharing</td>
          <td>Make Spark gift-able. Build a referral / friend-discount mechanic. Lean into Father's Day &amp; holiday seasonality.</td>
          <td>Handle &quot;I'm buying this as a gift, can it be sent unwrapped to a different address&quot; smoothly.</td>
        </tr>
        <tr>
          <td><strong>Repeat / Multi-Unit</strong></td>
          <td>&quot;Now I need one for the cabin.&quot;</td>
          <td>Email retention, &quot;customers who own one often buy a second&quot; messaging</td>
          <td>Email flow at 60+ days post-purchase: &quot;Many customers buy a second Spark for their cabin / second fire pit / a gift.&quot;</td>
          <td>Recognize the &quot;I love mine — buying a second&quot; signal. Don't push; just confirm and ship.</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="team-callout cx">
      <span class="team-tag">CX · The first-fire window matters most</span>
      <p style="margin:0">The single most important CX moment in the journey is the customer's <strong>first fire</strong>. If it goes well, they become advocates. If it goes badly, the refund request lands in your queue. Most first-fire issues are user error: not enough alcohol, alcohol not in the wings, wood stacked too tight, or a short lighter that didn't reach. <strong>Always troubleshoot before processing a refund.</strong> Walk them through the 6 steps in the Product Line section. Most &quot;it doesn't work&quot; calls turn into &quot;oh, I was doing it wrong — this is great&quot; with 5 minutes of patient guidance.</p>
    </div>

    </div>
  </div>
</section>

<!-- MARKETING ANGLES & HOOKS -->
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

    <p>Five proven angles for Spark creative — each a different door into the same product. Pick one per ad, don't try to combine them. Hooks (the first 1–3 seconds of a creative) are below.</p>

    <h3>Core Angles</h3>
    <div class="angles">
      <div class="angle">
        <h4>1. The Anti-Consumable</h4>
        <div class="angle-row"><strong>Pillar:</strong> Anti-Consumable / Built to Outlast</div>
        <div class="angle-row"><strong>Pain:</strong> Tired of buying disposable starters every month.</div>
        <div class="angle-row"><strong>Hook frame:</strong> &quot;Stop buying these every month. Buy this once.&quot;</div>
        <div class="angle-row"><strong>Best for:</strong> Meta, retargeting, value-conscious buyers (Practical Pete)</div>
      </div>
      <div class="angle">
        <h4>2. Engineered for the Job</h4>
        <div class="angle-row"><strong>Pillar:</strong> Engineered Geometry / Built to Outlast</div>
        <div class="angle-row"><strong>Pain:</strong> Cheap fire starters are flimsy and fail.</div>
        <div class="angle-row"><strong>Hook frame:</strong> &quot;304 stainless. No welds. No moving parts.&quot;</div>
        <div class="angle-row"><strong>Best for:</strong> Reddit, Google Search, engineer-mindset buyers</div>
      </div>
      <div class="angle">
        <h4>3. Just Light a Fire</h4>
        <div class="angle-row"><strong>Pillar:</strong> Effortless Ignition</div>
        <div class="angle-row"><strong>Pain:</strong> Crouching in smoke, blowing on kindling.</div>
        <div class="angle-row"><strong>Hook frame:</strong> &quot;Pour. Light. Walk away.&quot;</div>
        <div class="angle-row"><strong>Best for:</strong> TikTok, organic social, demo creatives</div>
      </div>
      <div class="angle">
        <h4>4. Lives in the Pit</h4>
        <div class="angle-row"><strong>Pillar:</strong> Built to Outlast / Outdoor Lifestyle</div>
        <div class="angle-row"><strong>Pain:</strong> Tired of hunting for kindling and starters every time.</div>
        <div class="angle-row"><strong>Hook frame:</strong> &quot;He lives at the bottom of your fire pit. He's happiest there.&quot;</div>
        <div class="angle-row"><strong>Best for:</strong> Cabin Carla, brand storytelling, organic IG</div>
      </div>
      <div class="angle">
        <h4>5. Gift the Last One</h4>
        <div class="angle-row"><strong>Pillar:</strong> Outdoor Lifestyle / Anti-Consumable</div>
        <div class="angle-row"><strong>Pain:</strong> The dad / friend / brother who has everything.</div>
        <div class="angle-row"><strong>Hook frame:</strong> &quot;The last firestarter he'll ever need.&quot;</div>
        <div class="angle-row"><strong>Best for:</strong> Q4 holiday, Father's Day, gift-guide PR (Gifting Greg)</div>
      </div>
      <div class="angle">
        <h4>6. The Smokeless Upgrade</h4>
        <div class="angle-row"><strong>Pillar:</strong> Engineered Geometry / Effortless Ignition</div>
        <div class="angle-row"><strong>Pain:</strong> Smokeless pits are great — but starting them is still a hassle.</div>
        <div class="angle-row"><strong>Hook frame:</strong> &quot;The accessory your Solo Stove was missing.&quot;</div>
        <div class="angle-row"><strong>Best for:</strong> Backyard Bill, paid social retargeting Solo Stove / Breeo audiences</div>
      </div>
    </div>

    <h3 style="margin-top:24px">Proven Hooks (First 1–3 Seconds)</h3>
    <ol class="hooks">
      <li>Stop buying these every month. Buy this once.</li>
      <li>304 stainless. No welds. Infinite reuse.</li>
      <li>Pour ten ounces of alcohol. Light. That's it.</li>
      <li>The accessory your Solo Stove was missing.</li>
      <li>Why is your fire still smoking?</li>
      <li>This lives at the bottom of my fire pit. Forever.</li>
      <li>How to start a fire without paper, kindling, or Boy Scout skills.</li>
      <li>The last firestarter you'll ever buy.</li>
      <li>I haven't bought a starter cube in two years.</li>
      <li>Built from a single piece of steel. No welds. No moving parts.</li>
      <li>Wet wood? Doesn't matter.</li>
      <li>If you have a fire pit and don't have one of these — watch this.</li>
    </ol>

    <div class="team-callout marketing">
      <span class="team-tag">Marketing · Hook testing rotation</span>
      <p style="margin:0">Run hooks 1, 2, and 3 against each other on cold paid social monthly — they pull different audiences (1 = value/anti-consumable, 2 = spec/engineering, 3 = effortless/lifestyle). Hook 8 (&quot;the last firestarter you'll ever buy&quot;) is the highest-CTR for retargeting and warm audiences. Hook 4 (Solo Stove) is the highest-converting cold paid hook against fire-pit owner audiences. Hook 9 (UGC-style &quot;I haven't bought a starter cube in two years&quot;) is the strongest on TikTok organic-style placements. Avoid combining hooks; one hook, one ad.</p>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative · Hook = first frame, not voice-over</span>
      <p style="margin:0">A hook isn't just the spoken/written line — it's what the viewer <em>sees</em> in the first frame. For Spark, the strongest first frames are: <strong>(1) close-up of the steel</strong> mid-stamp or in someone's hand, <strong>(2) the moment of ignition</strong> (alcohol catching), <strong>(3) the contrast shot</strong> — pile of disposable cube wrappers next to the steel Spark. Don't open on a logo, don't open on a person, don't open on a wide pit shot. Open on the product or the moment, then earn the rest.</p>
    </div>

    </div>
  </div>
</section>

<!-- ============================================================ -->
<!-- STAGE 3 — SECTIONS 12, 14, 15, 16, 17, 18, 19                -->
<!-- (Section 13 Health/Survey Data is omitted — no data exists)  -->
<!-- ============================================================ -->

<!-- SAMPLE WINNING CREATIVES -->
<section id="creatives">
  <div class="card collapsible" data-section="creatives">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">12 · Sample Creatives</span>
        <h2>Sample Winning Creatives</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <div class="creative-intro">
      <strong>Universal pattern across all Inventel brands.</strong> Looking at all our winning ads across SugarMD, Wild Earth, Pizza Pack, and Spark, here's what they all have in common — these patterns hit across very different categories (supplements, pet food, kitchen gadgets, outdoor hardware), which is why they're worth memorizing as a creative team. Brand-specific creative gets layered <em>on top of</em> these patterns; it doesn't replace them.
    </div>

    <h3>The Six Universal Patterns</h3>
    <ol class="pattern-list">
      <li>
        <span class="pat-title">📌 Lead with a Specific, Relatable Problem</span>
        The first 1–3 seconds name the universal frustration the customer is already living. <em>&quot;Tired of crouching in smoke?&quot; / &quot;You're wasting your money on starter cubes.&quot; / &quot;Why is your fire still smoking?&quot;</em> The customer sees themselves in the ad before they even read the offer.
      </li>
      <li>
        <span class="pat-title">⭐ Social Proof is Front and Center</span>
        Top performers across every brand lean heavily on proof — real reviews, star ratings, customer testimonials, &quot;I haven't bought a starter cube in two years,&quot; press mentions, demo videos with visible engagement. The ads don't ask people to trust the brand; they show that others already do.
      </li>
      <li>
        <span class="pat-title">📱 Native, Authentic-Looking Creative</span>
        Winners don't look like polished corporate ads. The Pizza Pack UGC videos look like someone's home kitchen. The Wild Earth &quot;I Don't Hunt. I Nap.&quot; ad looks like an organic post. The Spark fire-starter demo looks like a guy in his backyard. Low-production authenticity is consistently outperforming high-gloss creative.
      </li>
      <li>
        <span class="pat-title">🎯 One Clear, Simple Message</span>
        Every winning ad communicates a single idea. Not &quot;here are 5 reasons to buy&quot; — just one. <em>Stronger immunity, one bite at a time. The easiest fire you'll ever start. 304 stainless. No welds. Infinite reuse.</em> The losers across your accounts tend to try to say too much.
      </li>
      <li>
        <span class="pat-title">🔁 Contrast and &quot;Switch&quot; Framing</span>
        Multiple winners across SugarMD and Wild Earth use a before/after or &quot;what I switched to&quot; structure — positioning the product as the smarter, newer alternative to what people are currently doing. For Spark this looks like <em>pile of disposable cube wrappers next to a single Spark unit.</em> This works because it validates the customer's frustration with their current solution before presenting yours.
      </li>
      <li>
        <span class="pat-title">🐾 Emotion Over Logic</span>
        The Wild Earth ads make you feel something for your dog. The Spark ads trigger the satisfying feeling of a perfect fire. The SugarMD &quot;Real Reviews&quot; ad leads with hope. None of your winners are making a rational argument — they're making an emotional one first, then backing it up with the spec.
      </li>
    </ol>

    <div class="through-line">
      <strong>The through-line:</strong> Your winning ads find a customer who already has a problem, show them someone like them who solved it, and make the product feel like the obvious next step — not a hard sell.
    </div>

    <h3 style="margin-top:28px">Spark — In-Market Examples</h3>
    <p style="font-size:13.5px;color:var(--sp-text-muted);margin-top:6px">A few real Spark creatives that have hit, alongside one concept card awaiting in-market test. Each card shows the platform/format meta, the ad headline, the universal patterns it leans on, and 3–4 chip tags so creative briefs can reference them quickly.</p>

    <div class="creative-grid">

      <div class="creative-card">
        <img class="creative-img" src="data:image/webp;base64,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" alt="Spark Infinite Fire Starter — Facebook feed ad — The Easiest Fire You'll Ever Start" style="aspect-ratio:auto;object-fit:contain;background:#15110E;max-height:360px">
        <div class="creative-meta">META · FB FEED · COLD PAID</div>
        <div class="creative-caption">
          <strong>&quot;🔥 The Easiest Fire You'll Ever Start&quot;</strong>
          Native FB-feed video ad. Opens on the Spark with flame already inside; ad copy &quot;Fill it with regular rubbing alcohol&quot; teaches the use case in one line. Hits patterns: <em>One Clear Message, Native/Authentic Creative, Emotion Over Logic.</em>
        </div>
        <div class="creative-tags">
          <span class="creative-tag">FB feed video</span>
          <span class="creative-tag">Cold paid</span>
          <span class="creative-tag">Effortless ignition</span>
        </div>
      </div>

      <div class="creative-card">
        <img class="creative-img" src="data:image/webp;base64,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" alt="Spark Infinite Fire Starter — Instagram ad — Featured on The Grommet — five-star review with three flame fronts blazing in fire pit" style="aspect-ratio:auto;object-fit:contain;background:#15110E;max-height:360px">
        <div class="creative-meta">META · IG · COLD PAID</div>
        <div class="creative-caption">
          <strong>&quot;Featured on The Grommet — The Fire Starter Campers Trust&quot;</strong>
          IG ad leading with social proof: 5-star rating, &quot;Reliable, weatherproof fire starter,&quot; The Grommet feature badge, hero shot of Spark with all three flame fronts blazing in a real fire pit. Hits patterns: <em>Social Proof Front and Center, One Clear Message, Native/Authentic Creative.</em>
        </div>
        <div class="creative-tags">
          <span class="creative-tag">IG static</span>
          <span class="creative-tag">Social proof</span>
          <span class="creative-tag">Press feature</span>
          <span class="creative-tag">Backyard Bill</span>
        </div>
      </div>

      <div class="creative-card">
        <img class="creative-img" src="data:image/webp;base64,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" alt="Spark Infinite Fire Starter — Facebook feed video — Ever have trouble or take forever starting a fire — older man on deck demonstrating Spark with firewood" style="aspect-ratio:auto;object-fit:contain;background:#15110E;max-height:360px">
        <div class="creative-meta">META · FB FEED VIDEO · COLD PAID</div>
        <div class="creative-caption">
          <strong>&quot;Ever Have Trouble or Take Forever Starting a Fire?&quot;</strong>
          Demo video, native-feel — older man on a backyard deck with a wood pile, showing Spark in his fire pit. Headline &quot;The World's Only Smokeless Start to Every Fire&quot; · CTA &quot;Start your fires with ONE SPARK!&quot; — 35 reactions, 6 comments visible (real engagement signal). Hits patterns: <em>Lead with the Pain Point (the headline question), Native/Authentic Creative, Emotion Over Logic.</em>
        </div>
        <div class="creative-tags">
          <span class="creative-tag">FB feed video</span>
          <span class="creative-tag">Pain-led</span>
          <span class="creative-tag">UGC-style</span>
          <span class="creative-tag">Backyard Bill</span>
        </div>
      </div>

      <div class="creative-card">
        <div style="aspect-ratio:1/1;background:linear-gradient(135deg,#2F4A3A 0%,#15110E 70%);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-direction:column;color:var(--sp-amber);font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;text-align:center;padding:14px;border:1px solid rgba(184,99,64,.3)">
          <div style="font-family:'Bebas Neue',sans-serif;font-size:32px;color:var(--sp-ember-bright);letter-spacing:.06em;line-height:1">SOLO STOVE</div>
          <div style="font-family:'Fraunces',serif;font-style:italic;font-size:14px;color:#F5EFE3;margin-top:6px">+ Spark =</div>
          <div style="font-family:'Bebas Neue',sans-serif;font-size:24px;color:var(--sp-amber);letter-spacing:.06em;margin-top:6px">FINALLY SMOKELESS</div>
          <div style="margin-top:10px;color:#F5EFE3;opacity:.7;text-transform:none;letter-spacing:.04em;font-size:9px">Concept · Awaiting in-market test</div>
        </div>
        <div class="creative-meta">CONCEPT · NOT YET RUN</div>
        <div class="creative-caption">
          <strong>&quot;The Accessory Your Solo Stove Was Missing&quot;</strong>
          Retargeting concept against fire-pit-owner audiences. Positions Spark as the universal upgrade to whatever pit they already own — including Solo Stove and Breeo. Built around patterns: <em>One Clear Message, Lead with Pain (smoky starts), Switch Framing.</em> Brand team to swap this card for a real ad once tested in-market.
        </div>
        <div class="creative-tags">
          <span class="creative-tag">Concept</span>
          <span class="creative-tag">Retargeting</span>
          <span class="creative-tag">Smokeless co-position</span>
        </div>
      </div>

    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative · Use the patterns as briefs, not blueprints</span>
      <p style="margin:0">The six universal patterns above are the <strong>creative spine</strong> — every ad should hit at least 2–3 of them. But don't treat them as a checklist that produces identical work. Use them to <em>diagnose</em>: when a creative isn't performing, the answer is almost always &quot;it's missing pattern 1, 3, or 4.&quot; Use them to <em>brief</em>: every creative brief should name which 2–3 patterns the ad is built on. Don't use them to copy: the goal is original work that hits the patterns, not pattern-by-pattern remixes of last quarter's winners.</p>
    </div>

    <div class="team-callout marketing">
      <span class="team-tag">Marketing · Test new concepts against the patterns first</span>
      <p style="margin:0">Before any new Spark concept goes into paid testing, stress-test it against the six patterns. If a concept hits 4+ patterns, fast-track it. If it hits 2 or fewer, it's almost certainly going to underperform — refine before spending. The patterns are predictive: across our four-brand portfolio, ads scoring 4+ patterns out-CTR ads scoring ≤2 patterns by a wide margin. This is the cheapest creative QA filter we have.</p>
    </div>

    <div class="team-callout newhire">
      <span class="team-tag">New Hire · Pattern-naming practice (30 min)</span>
      <p style="margin:0">Before your first ad-review meeting, spend 30 minutes scrolling through Spark's <a href="https://www.instagram.com/sparkfirestarter/" target="_blank" rel="noopener">Instagram</a> and Meta Ad Library and <em>name the patterns</em> in each piece you see. Out loud or in a notebook. After 10–15 ads you'll start spotting the patterns instantly, and you'll be able to contribute substantively in your first creative review. Doing this exercise is the single fastest way to come up to speed on what &quot;on-brand creative&quot; means here.</p>
    </div>

    </div>
  </div>
</section>

<!-- SOCIAL & DIGITAL CHANNELS -->
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

    <p>Spark's digital footprint is intentionally lean. We don't try to be everywhere — we focus on channels where outdoor-lifestyle, fire-pit-owner, and engineering-mindset audiences already gather. Each platform below has a specific role; don't force the same content into all of them.</p>

    <h3>Platform Overview</h3>
    <table>
      <thead><tr><th>Platform</th><th>Handle / URL</th><th>Role</th><th>Cadence</th></tr></thead>
      <tbody>
        <tr>
          <td><strong>Instagram</strong></td>
          <td><a href="https://www.instagram.com/sparkfirestarter/" target="_blank" rel="noopener">@sparkfirestarter</a></td>
          <td>Brand storytelling, product hero shots, customer fire pit features, golden-hour aesthetics</td>
          <td>3–4 posts/week · 5–7 stories/week</td>
        </tr>
        <tr>
          <td><strong>TikTok</strong></td>
          <td>Search: Spark Firestarter</td>
          <td>UGC-style demo videos, &quot;before/after&quot; ignition, native-feel reaction content</td>
          <td>3–5 posts/week · UGC-led</td>
        </tr>
        <tr>
          <td><strong>Facebook</strong></td>
          <td><a href="https://www.facebook.com/p/Spark-Infinite-Firestarter-61560491776235/" target="_blank" rel="noopener">Spark Infinite Firestarter</a></td>
          <td>Demographics skewed slightly older — gift seasonality, customer testimonials, longer-form copy</td>
          <td>2–3 posts/week</td>
        </tr>
        <tr>
          <td><strong>YouTube</strong></td>
          <td>Cross-posted reviews from outdoor channels</td>
          <td>Long-form demo, &quot;is it worth it&quot; reviews from outdoor-lifestyle creators (4WDTalk, ShopOxbeau, etc.)</td>
          <td>Partner-driven · monthly placements</td>
        </tr>
        <tr>
          <td><strong>Reddit</strong></td>
          <td>r/firepits · r/BuyItForLife · r/camping · r/SoloStove</td>
          <td>Earned mentions, AMAs, founder/team comments — never spammy. Practical Pete lives here.</td>
          <td>Reactive · respond when mentioned, contribute genuinely</td>
        </tr>
        <tr>
          <td><strong>Pinterest</strong></td>
          <td>Search: Spark Firestarter</td>
          <td>Cabin Carla audience — fall/holiday seasonality, fire pit aesthetic boards, gift-guide pins</td>
          <td>2–3 pins/week · seasonality-led</td>
        </tr>
        <tr>
          <td><strong>Email</strong></td>
          <td>Klaviyo (assumed Inventel standard)</td>
          <td>Welcome flow, abandoned cart, post-purchase how-to, multi-unit retention, holiday promo</td>
          <td>1–2 campaign sends/week + lifecycle automations</td>
        </tr>
        <tr>
          <td><strong>SMS</strong></td>
          <td>Klaviyo / Postscript (assumed)</td>
          <td>Holiday promo, restock alerts, abandoned-cart only — high-trust, low-frequency</td>
          <td>2–3 sends/month max</td>
        </tr>
      </tbody>
    </table>

    <h3 style="margin-top:22px">Content Cadence (Weekly Rhythm)</h3>
    <p>What a normal week of Spark organic looks like across the core platforms:</p>
    <ul style="margin-left:20px;line-height:1.85;font-size:14px">
      <li><strong>Monday</strong> — Spec close-up post (Instagram + Pinterest). Lead with one of the four key claims: 304, 16 ga, no welds, infinite reuse.</li>
      <li><strong>Wednesday</strong> — UGC repost or customer fire-pit feature (Instagram + Facebook). Tag the customer, credit the photo.</li>
      <li><strong>Friday</strong> — Demo video or &quot;how to use&quot; clip (TikTok + Instagram Reels). Short, native, no over-production.</li>
      <li><strong>Weekend</strong> — Story-only content: golden hour, cabin shots, fall/winter mood. No hard pitch.</li>
    </ul>

    <h3 style="margin-top:22px">Hashtag Governance</h3>
    <p>Spark uses a <strong>tight, intentional hashtag set</strong> — 4–7 per post, not 30. Spamming hashtags reads as low-effort and undercuts the brand voice.</p>
    <ul style="margin-left:20px;line-height:1.85;font-size:14px">
      <li><strong>Brand:</strong> #spark #sparkfirestarter #infinitefirestarter</li>
      <li><strong>Use case:</strong> #firepit #firepitlife #backyardfirepit #cabinlife #firepitseason</li>
      <li><strong>Lifestyle:</strong> #outdoorliving #patiogoals #campfire #vanlife</li>
      <li><strong>Adjacent brands (use sparingly, only when relevant):</strong> #solostove #breeo</li>
      <li><strong>Avoid:</strong> generic spray-and-pray tags (#fyp #explore #viral) — they don't work for our audience and look desperate</li>
    </ul>

    <div class="team-callout marketing">
      <span class="team-tag">Marketing · Channel-content fit</span>
      <p style="margin:0">Don't cross-post identical content across all platforms. <strong>Instagram</strong> wants the polished hero shot and golden-hour aesthetic. <strong>TikTok</strong> wants the rough, UGC-style demo. <strong>Pinterest</strong> wants the lifestyle pin with seasonality. <strong>Reddit</strong> wants honest answers in product threads, not branded content. The same Spark creative on TikTok will flop on Pinterest, and vice versa. Adapt the format, not just the crop.</p>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative · Organic vs. paid feel</span>
      <p style="margin:0">A consistent rule: <strong>organic should look like a customer made it</strong> (even when we made it). <strong>Paid should look like a sharper, more deliberate version of the same.</strong> Both share the brand voice and the core patterns from Section 12 — only the polish dial moves. Highly polished organic underperforms because the algorithm and the audience both detect &quot;ad-feel&quot; instantly. Keep it native.</p>
    </div>

    </div>
  </div>
</section>

<!-- PARTNERSHIPS & INFLUENCER -->
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

    <p>Spark works with a small, carefully curated set of partners and creators. We're not trying to flood the feed — we're trying to put the product in the hands of people whose audience already cares about fire pits, outdoor living, and well-made gear.</p>

    <h3>Ideal Ambassador Profile</h3>
    <div class="feature-grid">
      <div class="feature-tile">
        <span class="feature-tile-icon">🏡</span>
        <h4>Already Lives the Use Case</h4>
        <p>Has a fire pit, a cabin, a yard, or a regular camping rotation. The Spark ad in their feed should feel like a natural fit, not a paid placement.</p>
      </div>
      <div class="feature-tile">
        <span class="feature-tile-icon">🎯</span>
        <h4>Engaged Mid-Tier Audience</h4>
        <p>10K–250K followers with strong engagement. We prefer 50K with a 5% engagement rate over 500K with 0.5%. The audience matters more than the count.</p>
      </div>
      <div class="feature-tile">
        <span class="feature-tile-icon">🔧</span>
        <h4>Aesthetic Match</h4>
        <p>Outdoor-lifestyle, cabin-life, homestead, woodworking, van-life, or design-forward home improvement. Avoid pure influencer-feed energy.</p>
      </div>
      <div class="feature-tile">
        <span class="feature-tile-icon">🤝</span>
        <h4>Honest Voice</h4>
        <p>Their audience trusts their opinions because they're not selling everything that comes through DM. We'd rather get a thoughtful &quot;here's what I think&quot; than a polished sponsored post.</p>
      </div>
    </div>

    <h3 style="margin-top:24px">Partnership Do's &amp; Don'ts</h3>
    <div class="do-dont">
      <div class="do">
        <h4>✅ Do</h4>
        <ul>
          <li>Send the product, let them use it through 5+ fires, then ask for honest content.</li>
          <li>Encourage their voice — they know their audience better than we do.</li>
          <li>Provide the spec sheet (304 SS, 16 ga, no welds) and let them riff.</li>
          <li>Disclose partnerships clearly per FTC rules — every time.</li>
          <li>Repost partner content on Spark channels with credit.</li>
          <li>Long-term relationships over one-and-done — the second post always outperforms the first.</li>
        </ul>
      </div>
      <div class="dont">
        <h4>🚫 Don't</h4>
        <ul>
          <li>Don't feed creators a script. Their audience can smell it.</li>
          <li>Don't pay for &quot;love it!&quot; posts without real product use first.</li>
          <li>Don't work with creators who haven't actually used a fire pit before.</li>
          <li>Don't over-restrict creative. Hand them the patterns from #12 and the brand voice from #4 — that's enough.</li>
          <li>Don't ghost partners after one campaign. Maintain the relationship.</li>
          <li>Don't disclose informally (&quot;thanks @sparkfirestarter for the gift!&quot; is not a disclosure — &quot;#ad&quot; or &quot;#sponsored&quot; is).</li>
        </ul>
      </div>
    </div>

    <div class="alert-callout">
      <span class="alert-callout-title">⚖️ FTC Disclosure — Required, No Exceptions</span>
      <p style="margin:0">Every paid partnership, gifted product post, or creator contract must include a clear, prominent FTC disclosure: <strong>#ad, #sponsored, or &quot;Paid partnership with Spark&quot;</strong> in the first line of the caption (not buried at the end, not in a comment, not stylized as &quot;#sp0nsored&quot;). This applies to gifted-only relationships too if there's any expectation of posting. The Marketing / Partnerships lead is responsible for confirming disclosure on every partner post — checking after the fact is too late if the partner publishes without it.</p>
    </div>

    <h3 style="margin-top:22px">How to Submit a Partnership Inquiry</h3>
    <p>Inbound partnership requests (creators reaching out to us, retailers asking about wholesale, gift-guide editors asking for product) should be routed through:</p>
    <div class="policy-contact" style="margin-top:0">
      <strong>Partnership inquiries:</strong> <a href="mailto:info@sparkfirestarter.com" target="_blank" rel="noopener">info@sparkfirestarter.com</a> — subject line: &quot;Partnership / Influencer Inquiry&quot;<br>
      <strong>Owner:</strong> Marketing / Partnerships team<br>
      <strong>Response window:</strong> within 5 business days
    </div>

    <div class="team-callout marketing">
      <span class="team-tag">Marketing · The mid-tier sweet spot</span>
      <p style="margin:0">Spark's best-converting creator partnerships have consistently been with <strong>50K–150K-follower outdoor-lifestyle accounts</strong> that already use fire pits in their content. The macro-influencer ($10K+ flat-fee) tier has not paid off for us — the audience is too broad and the &quot;is this an ad&quot; signal is too loud. The mid-tier feels native, costs less, and converts better. Keep the budget and headcount focused there.</p>
    </div>

    </div>
  </div>
</section>

<!-- DISCOUNTS & PROMO CODES -->
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
      <span class="alert-callout-title">🚨 ALWAYS CHECK THE MONTHLY DISCOUNT SHEET FIRST</span>
      <p style="margin:0;color:#fff"><strong>The monthly discount sheet is the single source of truth for what's live, at what rate, on what dates, and through which channels.</strong> Codes rotate. Rates change. What was live last month might not be live this month. <strong>Don't honor codes from memory. Don't accept a code from a customer's screenshot if it's not on this month's sheet without verifying.</strong> If you can't find the sheet, ask your manager or post in <em>#discounts</em> — never improvise. Misapplied codes are recoverable; recurring goodwill credits because someone gave away a stale code are not.</p>
    </div>

    <h3>Active Discount Formats</h3>
    <table>
      <thead><tr><th>Format</th><th>Where It Appears</th><th>Example</th><th>Notes</th></tr></thead>
      <tbody>
        <tr>
          <td><strong>Promo code</strong></td>
          <td>Email, SMS, partner content, paid ads</td>
          <td>SPARK15, FATHERSDAY, etc.</td>
          <td>Time-bound. Always on the monthly sheet. CX must verify before honoring.</td>
        </tr>
        <tr>
          <td><strong>Full-site flip</strong></td>
          <td>sparkfirestarter.com — automatic at checkout</td>
          <td>15% off site-wide for Black Friday</td>
          <td>No code needed. Marketing flips on/off via Shopify. Visible in cart automatically.</td>
        </tr>
        <tr>
          <td><strong>Banner / automatic discount</strong></td>
          <td>Site banner + checkout</td>
          <td>&quot;Free shipping over $X&quot;</td>
          <td>Threshold varies — pull the current threshold from the live site banner, not memory.</td>
        </tr>
        <tr>
          <td><strong>Bundle / cart threshold</strong></td>
          <td>Multi-unit cart pricing</td>
          <td>2nd Spark 10% off (when offered)</td>
          <td>Driven by Cabin Carla persona — &quot;buying a second for the cabin.&quot; Not always live.</td>
        </tr>
        <tr>
          <td><strong>New customer discount (evergreen)</strong></td>
          <td>Email signup popup, first-purchase flow</td>
          <td>10% off first order with email signup</td>
          <td><strong>Always on.</strong> Captured via the email signup popup. Single-use per customer.</td>
        </tr>
        <tr>
          <td><strong>Subscription discount (evergreen)</strong></td>
          <td>N/A for Spark</td>
          <td>—</td>
          <td>Spark is a one-time hardware purchase — there's no subscription product. <strong>If a customer asks about Subscribe &amp; Save, the answer is no, and pivot to: &quot;Spark is built to last — you only need to buy it once.&quot;</strong></td>
        </tr>
      </tbody>
    </table>

    <h3 style="margin-top:22px">Evergreen vs. Time-Bound</h3>
    <p>Spark's discount structure has <strong>one always-on offer</strong> and a rotating set of seasonal/promotional codes:</p>
    <ul style="margin-left:20px;line-height:1.85;font-size:14px">
      <li><strong>Always on (evergreen):</strong> The new-customer discount (~10% off first order via email signup). Assume live unless the monthly sheet flags an exception.</li>
      <li><strong>Time-bound (rotating):</strong> Father's Day, summer fire-pit season, Labor Day, fall/cabin season, Black Friday/Cyber Monday, Christmas/holiday gifting, post-holiday clearance. These rotate on the monthly discount sheet.</li>
      <li><strong>Not applicable to Spark:</strong> Subscribe &amp; Save (single-purchase product), bulk/volume pricing for DTC (handled case-by-case if a customer asks for 5+ units).</li>
    </ul>

    <h3 style="margin-top:22px">Ownership by Channel</h3>
    <table>
      <thead><tr><th>Channel</th><th>Discount Owner</th><th>Approval Path</th></tr></thead>
      <tbody>
        <tr><td>Email</td><td>Marketing — Email/Retention Lead</td><td>Marketing → monthly sheet</td></tr>
        <tr><td>SMS</td><td>Marketing — Email/Retention Lead</td><td>Marketing → monthly sheet</td></tr>
        <tr><td>Organic social</td><td>Marketing — Brand/Social Lead</td><td>Marketing → monthly sheet</td></tr>
        <tr><td>Paid media</td><td>Marketing — Growth/Paid Lead</td><td>Marketing → monthly sheet</td></tr>
        <tr><td>CX (goodwill credits)</td><td>CX Supervisor</td><td>CX uses the dedicated CX goodwill code (on the monthly sheet) — not promo codes</td></tr>
        <tr><td>Influencer / Partnerships</td><td>Marketing — Partnerships Lead</td><td>Codes co-issued with the partner; tracked separately</td></tr>
        <tr><td>Retention / Multi-unit</td><td>Marketing — Email/Retention Lead</td><td>Lifecycle email triggers, threshold-based</td></tr>
      </tbody>
    </table>

    <div class="team-callout cx">
      <span class="team-tag">CX · Verify on the sheet · use goodwill code for reasonable expired-code asks</span>
      <p style="margin:0">If a customer says &quot;I have a code from your email last week,&quot; <strong>check the monthly sheet first</strong> — most codes are still valid for a window. If the code legitimately expired but the customer has a screenshot or a believable email reference, use the <strong>CX goodwill code</strong> (on the same monthly sheet) to honor it. The goodwill code exists exactly for this. <em>What you don't do</em>: invent a percentage, type the expired code in manually, or process a partial refund to simulate a discount. Those create reconciliation problems Marketing has to clean up later. Use the goodwill code or escalate to the CX Supervisor.</p>
    </div>

    <div class="team-callout marketing">
      <span class="team-tag">Marketing · Every code on the sheet before going live</span>
      <p style="margin:0">No code goes out — email, SMS, ad, partner — without first being added to the monthly discount sheet, with start date, end date, target rate, and channel. This is non-negotiable. The sheet is what CX uses to decide whether to honor a customer's code; if a code is live in the wild but not on the sheet, every CX touchpoint with that code becomes a judgment call, and judgment calls compound into goodwill leakage. Five seconds on the sheet saves hours downstream.</p>
    </div>

    <div class="team-callout newhire">
      <span class="team-tag">New Hire · Get the discount sheet link in week 1</span>
      <p style="margin:0">In your first week, ask your manager (or post in <em>#discounts</em>) for the link to the monthly Spark discount sheet. Bookmark it. <strong>Don't try to memorize codes — they rotate.</strong> Every CX call where you need to check a code, open the sheet. After 2–3 weeks the muscle memory becomes automatic and you'll never give away a stale code by accident.</p>
    </div>

    </div>
  </div>
</section>

<!-- SEO -->
<section id="seo">
  <div class="card collapsible" data-section="seo">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">17 · SEO</span>
        <h2>Search Engine Optimization (SEO)</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <p>SEO is Spark's <strong>highest-leverage long-term growth channel</strong>. Unlike paid media — where every dollar is rented attention — earned organic traffic compounds over months and years, doesn't get more expensive when ad platforms raise prices, and isn't subject to algorithm shifts the way social organic is. For a single-SKU brand competing in a fragmented category, ranking on the right keywords is one of the most defensible moats we can build.</p>

    <h3>Priority Keyword Themes for Spark</h3>
    <ul style="margin-left:20px;line-height:1.85;font-size:14px">
      <li><strong>Reusable fire starter searches</strong> — &quot;reusable fire starter,&quot; &quot;permanent fire starter,&quot; &quot;stainless steel fire starter,&quot; &quot;infinite fire starter&quot;</li>
      <li><strong>Fire pit accessory searches</strong> — &quot;best fire pit accessories,&quot; &quot;fire pit gear,&quot; &quot;fire pit must-haves,&quot; &quot;backyard fire pit upgrades&quot;</li>
      <li><strong>Solo Stove / Breeo adjacency</strong> — &quot;solo stove accessories,&quot; &quot;breeo fire pit accessories,&quot; &quot;smokeless fire pit starter&quot; — high-intent traffic from owners of those pits</li>
      <li><strong>How-to / problem searches</strong> — &quot;how to start a fire pit,&quot; &quot;easiest way to start a fire,&quot; &quot;how to start a fire on damp wood,&quot; &quot;how to start a fire without kindling&quot;</li>
      <li><strong>Anti-consumable / value searches</strong> — &quot;alternative to fire starter cubes,&quot; &quot;reusable alternative to duraflame,&quot; &quot;no more fire starter sticks&quot;</li>
      <li><strong>Gift-intent searches</strong> — &quot;fire pit gifts for him,&quot; &quot;outdoor gifts for dad,&quot; &quot;cabin housewarming gift,&quot; &quot;unique camping gift&quot; — Q4 + Father's Day peak</li>
      <li><strong>Material / engineering searches</strong> — &quot;304 stainless fire starter,&quot; &quot;commercial grade fire starter,&quot; &quot;heavy duty fire starter&quot; — high-intent Practical Pete traffic</li>
      <li><strong>Brand recall / direct</strong> — &quot;spark firestarter,&quot; &quot;spark infinite fire starter,&quot; &quot;sparkfirestarter.com&quot; — branded traffic, must rank #1</li>
    </ul>

    <h3 style="margin-top:22px">Team Ownership</h3>
    <table>
      <thead><tr><th>SEO Element</th><th>Owner</th><th>Cadence</th></tr></thead>
      <tbody>
        <tr><td>Product page (PDP) copy &amp; structure</td><td>Marketing — Brand/Web Lead</td><td>Quarterly review</td></tr>
        <tr><td>Blog content (how-to, comparison, gift guides)</td><td>Marketing — Content Lead</td><td>2–4 posts/month</td></tr>
        <tr><td>Meta titles &amp; descriptions</td><td>Marketing — Brand/Web Lead</td><td>Quarterly review + new-page launches</td></tr>
        <tr><td>Image alt text &amp; filenames</td><td>Creative — every asset upload</td><td>Per-asset · ongoing</td></tr>
        <tr><td>Schema markup (Product, Review, FAQ)</td><td>Web Dev Team</td><td>Set once · audit quarterly</td></tr>
        <tr><td>Site speed / Core Web Vitals</td><td>Web Dev Team</td><td>Monthly audit</td></tr>
        <tr><td>Backlink building (PR, guest posts, partnerships)</td><td>Marketing — Partnerships / PR Lead</td><td>Ongoing</td></tr>
        <tr><td>Review volume on PDP &amp; Google</td><td>Marketing — Email/Retention Lead</td><td>Post-purchase email flow</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:22px">SEO Do's &amp; Don'ts</h3>
    <div class="do-dont">
      <div class="do">
        <h4>✅ Do</h4>
        <ul>
          <li>Tie every blog post to one of the 8 priority keyword themes — no random content.</li>
          <li>Write descriptive image filenames (spark-firestarter-304-stainless-tri-wing.jpg, not IMG_4582.jpg).</li>
          <li>Include alt text on every image — accessibility + SEO.</li>
          <li>Build internal links from every blog post back to the PDP.</li>
          <li>Earn backlinks through PR, partner content, and review placements — they outrank link-buying long-term.</li>
          <li>Monitor Google Search Console weekly for new query opportunities.</li>
          <li>Publish FAQ-style content — Spark's FAQ matches dozens of high-intent search queries.</li>
        </ul>
      </div>
      <div class="dont">
        <h4>🚫 Don't</h4>
        <ul>
          <li>Don't keyword-stuff. &quot;Spark firestarter spark fire starter spark stainless&quot; reads as spam to Google and to humans.</li>
          <li>Don't buy backlinks. Penalty risk + long-term harm > short-term lift.</li>
          <li>Don't duplicate content across pages — pick one canonical page per keyword theme.</li>
          <li>Don't ignore mobile. ~70% of Spark traffic is mobile; slow mobile pages tank rankings.</li>
          <li>Don't write blog posts that don't answer a search query — &quot;The Spark Story&quot; gets zero traffic; &quot;How to Start a Fire on Damp Wood&quot; gets traffic forever.</li>
          <li>Don't compete on terms we can't win — &quot;best fire starter&quot; is a battle for legacy retail brands. Pick narrower, higher-intent terms.</li>
        </ul>
      </div>
    </div>

    <div class="team-callout marketing">
      <span class="team-tag">Marketing · Every piece of content must ladder to a keyword theme</span>
      <p style="margin:0">Before any new blog post, landing page, or pillar content is briefed, name <strong>which of the 8 keyword themes it serves</strong>. If you can't name one, the content shouldn't be written — it'll get zero organic traffic and won't pay back the time. The cleanest content roadmap is: take the 8 themes, build 3–5 articles per theme over the year, internally link them all back to the PDP. That's a 24–40-piece content engine, all earning traffic, all routing to one purchase page.</p>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative · Images carry SEO weight too</span>
      <p style="margin:0">Three things every Spark image needs before it goes live: <strong>(1) compressed</strong> (WebP, &lt;200 KB for hero, &lt;100 KB for inline — page speed is a ranking factor), <strong>(2) descriptive filename</strong> (use kebab-case keywords, not camera output), <strong>(3) alt text</strong> that describes the image for both screen readers and crawlers. Skip these and the page slows down, the image is invisible to Google Image Search, and we leak rankings. Five extra seconds per asset, big compounding payoff.</p>
    </div>

    <h3 style="margin-top:22px">Tracking &amp; Tools</h3>
    <p>Spark SEO performance is tracked across these tools, with monthly review owned by Marketing:</p>
    <ul style="margin-left:20px;line-height:1.85;font-size:14px">
      <li><strong>Google Search Console</strong> — primary source of truth for impressions, clicks, query data, indexing status. Free, accurate, owned by us.</li>
      <li><strong>Ahrefs / Semrush</strong> — competitive benchmarking, backlink audits, keyword opportunity research. Use one or the other, not both (cost).</li>
      <li><strong>Google Analytics (GA4)</strong> — organic traffic attribution, on-site behavior, conversion tracking from organic sessions.</li>
      <li><strong>Monthly review</strong> — Marketing pulls keyword-rank movement, top-traffic pages, and conversion-from-organic into a one-page dashboard. Reviewed by the Brand Lead and the Marketing Lead.</li>
    </ul>

    </div>
  </div>
</section>

<!-- CRO -->
<section id="cro">
  <div class="card collapsible" data-section="cro">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">18 · CRO</span>
        <h2>Conversion Rate Optimization (CRO)</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <p>CRO is the discipline of converting <em>more</em> of the traffic we already have. It's almost always cheaper than acquiring new traffic — paid media costs scale linearly, but a 10% lift in conversion rate compounds across every marketing channel forever. For a single-SKU brand, every percentage point matters: 2.5% → 3% conversion is a 20% revenue lift without spending another dollar on ads.</p>

    <h3>The Spark Conversion Funnel</h3>
    <p>Every customer travels these six stages from first click to confirmed order. At each stage, they're asking a different question — and our job is to answer it before they bounce.</p>

    <table>
      <thead><tr><th>Stage</th><th>What They're Asking</th><th>What Wins Here</th></tr></thead>
      <tbody>
        <tr>
          <td><strong>Landing page</strong></td>
          <td>&quot;Is this what I clicked for?&quot;</td>
          <td>Above-the-fold answer in 3 seconds: hero image of steel + headline + the 4 spec claims (304 / 16 ga / no welds / infinite reuse).</td>
        </tr>
        <tr>
          <td><strong>PDP (product page)</strong></td>
          <td>&quot;Is this worth $X?&quot;</td>
          <td>Strong reviews, real photos, FAQ on-page, the buy-once math, free shipping threshold visible.</td>
        </tr>
        <tr>
          <td><strong>Add to cart</strong></td>
          <td>&quot;Am I sure I want this?&quot;</td>
          <td>Frictionless &quot;Add&quot; button, clear sticky-cart preview, no upsell pop-ups that interrupt intent.</td>
        </tr>
        <tr>
          <td><strong>Cart</strong></td>
          <td>&quot;What's the actual total going to be?&quot;</td>
          <td>Transparent shipping cost upfront, free-shipping progress bar, trust badges (secure checkout, returns).</td>
        </tr>
        <tr>
          <td><strong>Checkout</strong></td>
          <td>&quot;How fast can I finish this?&quot;</td>
          <td>Express checkout (Apple Pay, Shop Pay), guest checkout enabled, minimal form fields, single-page flow.</td>
        </tr>
        <tr>
          <td><strong>Post-purchase</strong></td>
          <td>&quot;Did this go through? When does it ship?&quot;</td>
          <td>Immediate confirmation page, confirmation email within 5 minutes, shipping email within 24 hours, &quot;here's how to use it&quot; email 1 day before delivery.</td>
        </tr>
      </tbody>
    </table>

    <h3 style="margin-top:22px">High-Impact CRO Levers for Spark</h3>
    <p>The levers below have the highest leverage on Spark's conversion rate. Don't try to test all of them at once — pick one or two per quarter and run clean tests.</p>
    <ul style="margin-left:20px;line-height:1.85;font-size:14px">
      <li><strong>Hero clarity above the fold</strong> — does the visitor know what Spark is and why it matters in 3 seconds without scrolling?</li>
      <li><strong>Social proof placement</strong> — review count and star rating visible above the fold, real customer photos, third-party press mentions (Gadget Flow, Trend Hunter, 4WDTalk).</li>
      <li><strong>Free-shipping messaging</strong> — threshold visible in nav, on PDP, and in cart with a progress bar.</li>
      <li><strong>The buy-once math</strong> — &quot;$80/year on starter cubes vs. one Spark&quot; rendered visually, not just in copy.</li>
      <li><strong>FAQ on the PDP</strong> — Spark customers ask the same 8–10 questions before buying. Answering them inline beats forcing them to navigate to /faq.</li>
      <li><strong>Cart abandonment recovery</strong> — email + SMS flow for abandoned carts. Industry standard recovery rate is 10–15%; we should hit that minimum.</li>
      <li><strong>Checkout speed</strong> — page load time, form field count, payment method options. Each second of delay drops conversion ~7%.</li>
      <li><strong>Trust signals at checkout</strong> — return policy snippet, secure-payment badges, contact info visible.</li>
      <li><strong>Mobile optimization</strong> — ~70% of Spark traffic is mobile. Test mobile-first; desktop is the bonus.</li>
    </ul>

    <h3 style="margin-top:22px">How to Run a CRO Test</h3>
    <ol style="margin-left:22px;line-height:1.85;font-size:14px">
      <li><strong>Form a hypothesis.</strong> Not &quot;let's try moving the button.&quot; Instead: <em>&quot;Adding the buy-once math above the Add to Cart button will lift PDP conversion by 8–12% because it answers the price-objection moment.&quot;</em></li>
      <li><strong>Change one variable.</strong> Multi-variable tests are unreadable — you'll never know what worked.</li>
      <li><strong>Calculate sample size before launching.</strong> Most tests need at least 1,000+ conversions per variant for statistical significance. Underpowered tests produce false signals.</li>
      <li><strong>Run a full week minimum.</strong> Weekday/weekend traffic differs. Don't call a test on Tuesday's data.</li>
      <li><strong>Watch downstream metrics.</strong> A PDP test that lifts add-to-cart but tanks completed checkout is a loss, not a win.</li>
      <li><strong>Document the result either way.</strong> Failed tests are as valuable as wins — they prevent retesting the same idea next quarter.</li>
    </ol>

    <div class="team-callout marketing">
      <span class="team-tag">Marketing · Impact-vs-effort filter</span>
      <p style="margin:0">Before greenlighting any CRO test, score it on <strong>impact × effort</strong>. High impact, low effort wins go first (e.g., adding the free-shipping progress bar — known winner, 1-day dev). Low impact, high effort tests go to the bottom of the list (e.g., a custom interactive product configurator for a single-SKU brand). One quality test per month, run cleanly, beats five rushed tests with messy data. The discipline is &quot;test less, learn more.&quot;</p>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative · Above-the-fold = 3-second test</span>
      <p style="margin:0">Open the Spark PDP on mobile. Cover everything below the fold with your hand. Can a stranger answer three questions from what's visible? <strong>(1) What is this product?</strong> <strong>(2) Who is it for?</strong> <strong>(3) Why should they trust it?</strong> If yes — the above-the-fold is doing its job. If no — that's the highest-leverage CRO fix you have. Spark's answer should be: stainless steel firestarter (visible image), for fire-pit owners (headline + tagline), built from 304 / no welds / infinite reuse (spec claims).</p>
    </div>

    <div class="team-callout newhire">
      <span class="team-tag">New Hire · Watch 10 mobile session recordings</span>
      <p style="margin:0">Before your first CRO meeting, ask Marketing for access to the session-recording tool (Hotjar, Microsoft Clarity, or Shopify equivalent) and watch <strong>10 mobile sessions of real customers landing on Spark</strong>. Watch where they pause, where they scroll back, where they bounce. You'll learn more about Spark's conversion problems in 30 minutes of session recordings than in a week of reading dashboards. CRO meetings make sense after this; before this, they sound abstract.</p>
    </div>

    <h3 style="margin-top:22px">Metrics &amp; Review</h3>
    <p>Spark CRO performance is tracked on these metrics, owned by Marketing / Growth, reviewed monthly:</p>
    <ul style="margin-left:20px;line-height:1.85;font-size:14px">
      <li><strong>Site-wide conversion rate</strong> — sessions to completed orders. Target: industry benchmark for outdoor/specialty hardware DTC.</li>
      <li><strong>Average order value (AOV)</strong> — total revenue ÷ orders. Watch for multi-unit cart movement.</li>
      <li><strong>Cart abandonment rate</strong> — % of carts that don't complete checkout. Industry average ~70%; we want to recover 10–15% of those.</li>
      <li><strong>Mobile conversion rate</strong> — tracked separately from desktop. ~70% of traffic is mobile, so mobile CR is the lever that matters most.</li>
      <li><strong>PDP add-to-cart rate</strong> — % of PDP visitors who add to cart. This is the cleanest read on whether the PDP is doing its job.</li>
      <li><strong>Checkout completion rate</strong> — % of cart visitors who finish checkout. Catches checkout friction, payment-method issues, shipping-cost shock.</li>
    </ul>

    </div>
  </div>
</section>

<!-- GLOSSARY -->
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

    <p>Definitions for the terms used throughout this hub. Refer here whenever you're unsure exactly what a term means in the Spark / Inventel context — these are operational definitions, not marketing copy.</p>

    <div class="glossary">
      <dl>
        <dt>Spark / Spark Infinite Fire Starter</dt>
        <dd>The brand's single core SKU — a reusable, single-piece 16-gauge 304 stainless steel firestarter with an arched tri-wing geometry, fueled by ~10 oz of rubbing alcohol per fire. Often called just &quot;Spark&quot; in customer conversation; the full product name is &quot;Spark Infinite Fire Starter.&quot;</dd>

        <dt>304 Stainless Steel</dt>
        <dd>The grade of steel Spark is stamped from. 304 is the most widely used austenitic stainless grade — chosen for its high heat resistance, excellent corrosion resistance, recyclability, and longevity. It's the same grade used in commercial cookware and outdoor hardware. Highly resistant to rust, but not magic — surface oxidation is possible under sustained wet conditions and is cosmetic.</dd>

        <dt>16-Gauge</dt>
        <dd>The thickness of the steel sheet Spark is stamped from. 16 ga (~0.060&quot; / 1.5 mm) is thick enough to hold its shape under high heat and weight without deforming, while still being stampable as a single-piece form. Thinner gauges warp; thicker gauges become economically prohibitive.</dd>

        <dt>Tri-Wing Geometry</dt>
        <dd>Spark's defining shape — three arched legs forming a stable 3-point base. The arch self-levels on uneven ground (rocks, ash, dirt), allows airflow under the wood stack, and produces three distinct flame fronts when the alcohol is lit. Not decorative — every angle has a function.</dd>

        <dt>17&quot; × 1.75&quot;</dt>
        <dd>Spark's product dimensions. <strong>17 inches tip-to-tip</strong> across the three wings (the diameter of the smallest fire pit Spark fits in), and <strong>1.75 inches tall</strong> at the highest point of the arch. Use these numbers when answering &quot;will it fit my pit?&quot; questions — they're the only confirmed measurements customers should rely on.</dd>

        <dt>Log Cabin Style</dt>
        <dd>The brand-recommended way to stack wood around Spark — parallel rows of logs crossed at right angles, forming a square chimney with Spark in the middle. <strong>Log cabin is officially recommended over teepee/tipi style</strong>, even though the Spark logo's tri-wing shape suggests a teepee (the logo is a stylized &quot;A&quot; for SPARK, not a fire-building diagram). Log cabin produces a more controlled, hotter chimney draft, ignites wood more reliably, and won't collapse onto Spark mid-burn the way a teepee stack can. When teaching customers in any channel, repeat the brand line: <em>&quot;Log cabin, even though our logo suggests a teepee.&quot;</em></dd>

        <dt>Single-Piece Stamping</dt>
        <dd>The manufacturing method used for Spark. The entire unit is pressed/stamped from a single sheet of 304 stainless. <strong>No welds, no rivets, no joins.</strong> This eliminates the most common failure points in metal hardware (weld cracks, rivet wear) and is the primary reason Spark can credibly claim &quot;infinite reuse.&quot;</dd>

        <dt>Rubbing Alcohol (Isopropyl)</dt>
        <dd>The fuel Spark is designed to run on. Both 70% and 91% isopropyl alcohol work; 91% lights faster and burns slightly hotter. About 10 oz per fire, poured directly into the wings of the unit. Costs roughly $0.30 per fire. <strong>Do not substitute</strong> with lighter fluid (smoky), gasoline (dangerous), or denatured alcohol (works but more expensive).</dd>

        <dt>Tri-Wing Burn / Burn Time</dt>
        <dd>The 10–15 minute window during which 10 oz of alcohol burns inside Spark, producing ~6&quot; flames from each of the three wings. This is the window in which the wood stack ignites. Not a continuous fuel source — Spark gets the fire going; the wood sustains it.</dd>

        <dt>Single-SKU Brand</dt>
        <dd>A brand that sells exactly one product. Spark is currently single-SKU — one Spark Infinite Fire Starter, no variants. Important context for CX: when a customer asks &quot;do you have a smaller / larger / different version&quot;, the honest answer is no, and the right pivot is to the value of the single unit (infinite reuse, lives in the pit).</dd>

        <dt>Smokeless Fire Pit</dt>
        <dd>A category of fire pit (Solo Stove, Breeo, Tiki, etc.) engineered with secondary combustion airflow that drastically reduces visible smoke. Spark works in any fire pit, including smokeless ones — and the tri-wing geometry actually <em>improves</em> performance in smokeless pits because it pulls the airflow pattern those pits are designed around.</dd>

        <dt>Inventel</dt>
        <dd>The parent company that owns and operates Spark. All Inventel-owned brands run fulfillment, CX, marketing, and web through Inventel's NJ-based teams. Spark joined the Inventel portfolio in 2025 and is an in-house Inventel brand, not an external client.</dd>

        <dt>Pompton Plains Warehouse</dt>
        <dd>The Inventel warehouse at 240 West Parkway, Middle Door, Pompton Plains, NJ 07444 — where every Spark outbound order is picked, packed, and shipped from, and where every Spark return is sent back to.</dd>

        <dt>Rockaway Office</dt>
        <dd>The Inventel office at 200 Forge Way, Unit 1, Rockaway, NJ 07866 — the recommended shipping address for all test orders. Ensures any test that slips through arrives at our own door, not a customer's.</dd>

        <dt>Test Order Rule</dt>
        <dd>The mandatory Inventel rule that every test order placed on sparkfirestarter.com must use <strong>&quot;Test Order&quot;</strong> as the First Name and the placer's own name as the Last Name. Zero exceptions, every team, every time. See Section 22 (Test Orders) for the full procedure.</dd>

        <dt>RA / RMA</dt>
        <dd>Return Authorization / Return Merchandise Authorization — the unique ID a customer must obtain from CX <em>before</em> returning any Spark product. Without an RA number written clearly on the outside of the return package, the warehouse cannot tie the return to an order, and it sits unprocessed.</dd>

        <dt>Insta-Fire Confusion</dt>
        <dd>The common customer mix-up where someone asks if Spark is the &quot;Shark Tank fire starter.&quot; <strong>Spark is not Insta-Fire.</strong> Insta-Fire is a different brand entirely — disposable granular fire starter in pouches, appeared on Shark Tank Season 7. Spark is reusable stainless hardware and has not been on Shark Tank. Handle warmly: acknowledge the mix-up, correct cleanly, pivot to what makes Spark different. See Objection #2 in Section 9.</dd>

        <dt>Evergreen Offer</dt>
        <dd>A discount or promotion that is <em>always on</em> — not tied to a calendar window or short-term campaign. Spark's primary evergreen offer is the <strong>New Customer discount</strong> (one-time % or dollar amount off a first order, usually captured via email signup). Evergreen offers still appear on the monthly discount sheet so everyone knows the exact rate, but unlike seasonal or flash promos, you can assume they're live unless the sheet flags otherwise. Note: Spark does not have a Subscribe &amp; Save evergreen — it's a single-purchase product.</dd>

        <dt>The Six Universal Patterns</dt>
        <dd>The shared creative framework across all Inventel brands (SugarMD, Wild Earth, Pizza Pack, Spark): (1) Lead with a Specific, Relatable Problem, (2) Social Proof Front and Center, (3) Native, Authentic-Looking Creative, (4) One Clear, Simple Message, (5) Contrast and &quot;Switch&quot; Framing, (6) Emotion Over Logic. See Section 12. Every Spark creative should hit at least 2–3 of these.</dd>

        <dt>Buy-Once Math</dt>
        <dd>The CX/marketing framing that compares Spark's one-time cost to the recurring cost of disposable fire starters. The standard version: &quot;~$8/box × 10 boxes/year × 10 years = $800 in disposable starters. Spark is a one-time spend.&quot; This is the most effective response to &quot;why is it $XX&quot; — it reframes Spark from a price comparison to a lifetime-value comparison.</dd>

        <dt>The Sage (Brand Archetype)</dt>
        <dd>Spark's primary brand archetype — the brand that knows the right way to do something and doesn't oversell it. Sage brands earn trust through depth of knowledge and quiet authority. Pairs with The Explorer (lifestyle / outdoor) underneath. The Sage tells customers the product is built right; The Explorer reminds them why they wanted a fire in the first place. See Section 7.</dd>

        <dt>Monthly Discount Sheet</dt>
        <dd>The single source of truth for every active Spark promo code, full-site flip, banner discount, partnership code, and CX goodwill code. Updated monthly by Marketing. <strong>CX must check the sheet before honoring any code</strong> — codes rotate, and stale codes given out by memory create reconciliation problems. New hires should request the link in week 1. See Section 16.</dd>
      </dl>
    </div>

    </div>
  </div>
</section>

<!-- ============================================================ -->
<!-- STAGE 4 — SECTIONS 20 THROUGH 26 (FINAL)                     -->
<!-- ============================================================ -->

<!-- RETURN POLICY -->
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
    <p>Spark follows the <strong>standard Inventel 30-day return policy</strong> with a few brand-specific operational notes called out below. Some exceptions apply.</p>

    <div class="policy-card">
      <h3>📦 30-Day Return Policy <em style="font-weight:400;font-size:1rem">(note: some exceptions may apply)</em></h3>
      <p>All returns are subject to processing and handling fees which vary depending on your original order. If you decide to cancel or return your order, you will be responsible for the cost of return shipping.</p>
      <p>For return information, please call customer service at <a href="tel:8887033046">+1 888-703-3046</a> between <strong>8:30 a.m. and 5:30 p.m. Monday to Friday, EST</strong>, or email us at <a href="mailto:info@sparkfirestarter.com" target="_blank" rel="noopener">info@sparkfirestarter.com</a> to get a return authorization number &amp; return-to address.</p>
      <p style="margin-bottom:0">Due to <strong>health and sanitary reasons</strong>, we cannot accept anything back that has been in direct contact with a human's body (i.e. apparel, masks, beauty products). For Spark, this exception is rarely relevant — but it remains the standard Inventel exclusion.</p>
    </div>

    <h3 style="margin-top:24px">How CX Should Handle Spark Returns</h3>
    <p style="font-size:14px;color:var(--sp-text-muted);margin-top:-4px">The published policy above is what we honor. The notes below are how to <em>operate</em> it on a call — what to quote up front, where the deductions come from, and how to keep the experience friendly.</p>

    <div class="team-callout cx">
      <span class="team-tag">CX · Return Authorization is mandatory</span>
      <p style="margin:0">No RA number, no refund. Period. If a customer ships product back without a Return Authorization number written clearly on the outside of the package, the warehouse can't tie it to an order — it sits unprocessed. Always issue and confirm the RA number before the customer ships anything. <strong>Repeat the RA number twice on the call</strong> and follow up with an email confirmation that also includes the return-to address.</p>
    </div>

    <div class="team-callout cx">
      <span class="team-tag">CX · Customer pays return shipping</span>
      <p style="margin:0">The published policy says it plainly: <strong>customer is responsible for the cost of return shipping</strong>. If the customer asks us to send a prepaid label as a courtesy, we can — but the cost of that label is deducted from the refund amount. Always quote this up front: <em>&quot;Sure, we can send a prepaid label, but the label cost will be deducted from your refund. Most customers prefer to ship with their own carrier.&quot;</em> The exception is confirmed defects or damage in transit — those we cover.</p>
    </div>

    <div class="team-callout cx">
      <span class="team-tag">CX · Processing &amp; handling fees apply</span>
      <p style="margin:0">Per the published policy, <strong>all returns are subject to processing and handling fees that vary by original order</strong>. Don't quote a fee from memory — pull it from the order in Shopify or escalate to the CX Fulfillment Supervisor for confirmation. Then quote it to the customer <em>before</em> they ship anything back, alongside the return shipping cost note. Customers handle the fee much better when it's stated up front than when they see a smaller-than-expected refund land days later.</p>
    </div>

    <div class="team-callout cx">
      <span class="team-tag">CX · Original shipping is not refunded</span>
      <p style="margin:0">When a customer paid for shipping on the original order, that shipping charge is <strong>not</strong> refunded — only product cost (minus any processing/handling fee and minus any prepaid-label deduction). Make this explicit before processing so the customer doesn't expect a higher refund: <em>&quot;Just to confirm, your refund will be the product cost minus the processing fee. The original shipping charge isn't refundable on returns.&quot;</em> Saves a callback later.</p>
    </div>

    <div class="team-callout cx">
      <span class="team-tag">CX · &quot;Some exceptions may apply&quot;</span>
      <p style="margin:0">The published policy hedges with &quot;some exceptions may apply.&quot; In practice for Spark, this is the <strong>health/sanitary clause</strong> (rare for a steel firestarter, but still on the books) and any <strong>visibly used / fire-damaged Spark</strong>. A new-condition Spark in original packaging is fully returnable within 30 days; a Spark that's been used in a fire and returned with ash, soot, or surface oxidation is at the CX Fulfillment Supervisor's discretion. If a customer wants to return a Spark they've used several times, escalate before promising the customer a path.</p>
    </div>

    <div class="team-callout cx">
      <span class="team-tag">CX · Spark single-SKU context</span>
      <p style="margin:0">Because Spark is a <strong>single-SKU brand</strong>, exchanges aren't really a thing — there's no &quot;different size&quot; or &quot;different color&quot; to swap to. If a customer wants to exchange, what they actually want is either (a) a refund and a re-purchase later (just process the return), or (b) a defective-unit replacement (escalate to CX Fulfillment Supervisor for warranty replacement, which is different from a return). Don't promise &quot;exchange&quot; as a path; clarify which one it is.</p>
    </div>

    <div class="team-callout newhire">
      <span class="team-tag">New Hire · Quick refund-math example</span>
      <p style="margin:0">Customer paid <em>$XX product + $YY shipping = $ZZ total</em>. They want to return the product within 30 days and ship it back themselves. The order's processing/handling fee (per Shopify) is <em>$F</em>. <strong>Refund = product cost minus the processing fee</strong>. The original shipping stays with us. If we'd also sent a prepaid return label that cost $L, the refund would be <strong>product cost − $F − $L</strong>. Always walk the customer through the math up front; surprises become callbacks. <strong>Pull the actual processing/handling fee from the order — don't estimate it.</strong> Worked example: customer paid $59 product + $8 shipping = $67. Processing fee is $4. Refund = $59 − $4 = $55. The $8 shipping stays with us. If we sent a $7 prepaid label, refund = $59 − $4 − $7 = $48.</p>
    </div>

    <h3 style="margin-top:18px">CX Contact</h3>
    <div class="policy-contact">
      <strong>Email:</strong> <a href="mailto:info@sparkfirestarter.com" target="_blank" rel="noopener">info@sparkfirestarter.com</a><br>
      <strong>Phone:</strong> <a href="tel:8887033046">888-703-3046</a><br>
      <strong>Hours:</strong> 8:30 AM – 5:30 PM ET, Mon–Fri · Response window: within 24 business hours
    </div>

    <div class="team-callout cx" style="margin-top:14px">
      <span class="team-tag">CX · Tone on returns</span>
      <p style="margin:0">Lead with empathy, not policy. The customer who's calling for a return is rarely happy in that moment — even if they're polite. Acknowledge their reason for returning before walking through the process. <em>&quot;Got it — sorry it didn't work out for you. Let me get you set up with a return authorization and walk you through what happens next.&quot;</em> Spark's brand voice is calm and confident; CX returns calls should sound the same. Never read policy at a customer; explain it as you walk them through the steps.</p>
    </div>

    </div>
  </div>
</section>

<!-- FULFILLMENT & SHIPPING -->
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

    <p>All Spark orders flow through the Inventel warehouse in Pompton Plains, NJ. The fulfillment process is <strong>identical across every Inventel-owned brand</strong> — same warehouse, same picking process, same carriers, same return-to address. The only Spark-specific variable is the free-shipping threshold (verify on the live site banner; treat it as the single source of truth).</p>

    <h3>Outbound Address (Shipping From)</h3>
    <div class="address-block">
      <span class="addr-label">Inventel Warehouse · Outbound &amp; Returns</span>
      <strong>Inventel Warehouse</strong><br>
      240 West Parkway, Middle Door<br>
      Pompton Plains, NJ 07444
    </div>

    <h3 style="margin-top:22px">The 5-Step Fulfillment Flow</h3>
    <ol style="margin-left:22px;line-height:1.85;font-size:14px">
      <li><strong>Order placed</strong> on sparkfirestarter.com (Shopify). Customer receives confirmation email within 5 minutes.</li>
      <li><strong>Label printed.</strong> Short cancellation window (typically same-day until label print). Once a label is printed, the order is committed to the warehouse and can't be intercepted.</li>
      <li><strong>Warehouse picks, packs, ships</strong> from 240 West Parkway, Pompton Plains, NJ 07444.</li>
      <li><strong>3–7 business days</strong> transit time for continental US standard ground (varies by region — see table below).</li>
      <li><strong>Returns ship back to the same warehouse address</strong> with an RA number written clearly on the outside of the package (see Section 20).</li>
    </ol>

    <h3 style="margin-top:22px">Shipping Service Table</h3>
    <table>
      <thead><tr><th>Service</th><th>Region</th><th>Transit</th><th>Notes</th></tr></thead>
      <tbody>
        <tr>
          <td><strong>Ground standard</strong></td>
          <td>Lower 48</td>
          <td>3–7 business days</td>
          <td>Free over Spark's free-shipping threshold (<em>pull current threshold from live site banner — confirm with monthly discount sheet</em>)</td>
        </tr>
        <tr>
          <td>Ground East Coast</td>
          <td>NJ / NY / PA / CT / MA / MD / VA / NC</td>
          <td>2–3 business days</td>
          <td>Proximity to NJ warehouse</td>
        </tr>
        <tr>
          <td>Ground Midwest</td>
          <td>IL / OH / MI / MN</td>
          <td>3–4 business days</td>
          <td>—</td>
        </tr>
        <tr>
          <td>Ground West Coast</td>
          <td>CA / OR / WA / NV / AZ</td>
          <td>4–6 business days</td>
          <td>Longest transit by region</td>
        </tr>
        <tr>
          <td>AK / HI / PR / territories</td>
          <td>Non-contiguous US</td>
          <td>Not supported by default</td>
          <td><strong>Escalate to CX Fulfillment Supervisor</strong> for case-by-case quote</td>
        </tr>
        <tr>
          <td>International</td>
          <td>All countries outside US</td>
          <td>Varies by destination</td>
          <td><strong>Available — customer pays shipping.</strong> Rates calculated at checkout.</td>
        </tr>
      </tbody>
    </table>

    <div class="team-callout cx">
      <span class="team-tag">CX · The label-print cancellation window</span>
      <p style="margin:0">If a customer wants to cancel an order, the window is <strong>before the label is printed</strong>. Once Shopify shows &quot;label created&quot; or &quot;ready to ship,&quot; the warehouse has already committed inventory and the order is moving. After label print, the cleanest path is to let it ship and process a return per Section 20. Don't promise &quot;I'll catch it&quot; without first confirming the order's status in Shopify — false rescue promises create the worst CX experiences.</p>
    </div>

    <div class="team-callout cx">
      <span class="team-tag">CX · Free-shipping threshold</span>
      <p style="margin:0">Spark's free-shipping threshold is set on Shopify and displayed in the site banner. <strong>Don't quote a number from memory — open sparkfirestarter.com and read the current threshold from the banner before telling a customer.</strong> If the banner has been removed or rotated for a promo, check the monthly discount sheet (Section 16). Customers ask &quot;is shipping free?&quot; constantly; getting the threshold right matters for trust.</p>
    </div>

    <div class="team-callout cx">
      <span class="team-tag">CX · Address corrections</span>
      <p style="margin:0">If a customer realizes they've entered the wrong shipping address <em>before</em> the label is printed, update it directly in Shopify and confirm with the customer via email. <em>After</em> the label is printed, the package is going to the original address — your options are (a) intercept via the carrier (rare success rate, costs extra), or (b) wait for the package to be delivered or returned-to-sender, then reship. Set expectations honestly: <em>&quot;Once the label is printed we usually can't redirect — let's see if we can intercept, but I want to be upfront that it's not always possible.&quot;</em></p>
    </div>

    </div>
  </div>
</section>

<!-- TEST ORDERS -->
<section id="test-orders">
  <div class="card collapsible" data-section="test-orders">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">22 · Test Orders</span>
        <h2>Test Orders</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <div class="alert-callout critical">
      <span class="alert-callout-title">🚨 CRITICAL · ZERO-EXCEPTION RULE</span>
      <p style="margin:0;color:#fff"><strong>YOU MUST type &quot;Test Order&quot; in the First Name field.</strong> Every team — Marketing, Web Dev, CX, Brand, Partnerships — follows this rule with <strong>zero exceptions, every time, no matter how small the test</strong>. This is the single signal the warehouse uses to flag a non-customer order before it ships to a real address. Skipping this rule has resulted in test products being shipped to customers' homes. Don't be the person who breaks it.</p>
    </div>

    <h3>The 7 Test-Order Steps</h3>
    <p>Run every test order on sparkfirestarter.com through these seven steps in order. If any step is unclear or you're not sure, <strong>stop and ask in the team Google Chat before placing the order.</strong> Recovery from a test that ships to a customer is far more painful than asking a clarifying question.</p>

    <ol style="margin-left:22px;line-height:1.95;font-size:14px">
      <li><strong>First Name = &quot;Test Order&quot;</strong> (exactly that — capital T, capital O, single space). This is the warehouse's flag.</li>
      <li><strong>Last Name = your name.</strong> Real first + last so the team knows who placed it. Example: &quot;Jane Smith&quot; → First: &quot;Test Order&quot;, Last: &quot;Jane Smith&quot;.</li>
      <li><strong>Shipping address = Inventel office</strong> at 200 Forge Way, Unit 1, Rockaway, NJ 07866 (see address block below). <em>Never</em> use a personal home address, even &quot;just to verify the customer experience.&quot;</li>
      <li><strong>Use any valid payment method</strong> — corporate card, personal card with reimbursement form filed, or a 100% off test discount code from the monthly discount sheet. All three are acceptable.</li>
      <li><strong>Notify the CX Fulfillment Lead on Google Chat immediately</strong> after placing the order — not later that day, not tomorrow. Immediately, before the label can print.</li>
      <li><strong>Include in your message:</strong> the order number, what you were testing (which page, which flow, which discount code, etc.), and a clear note about whether the order should be cancelled or shipped to confirm the test.</li>
      <li><strong>Wait for confirmation</strong> from the CX Fulfillment Lead before considering the test complete. Don't assume silence means &quot;they got it&quot; — confirm every time.</li>
    </ol>

    <h3 style="margin-top:22px">Test-Order Shipping Address</h3>
    <div class="address-block">
      <span class="addr-label">Inventel Office · Test Order Ship-To</span>
      <strong>Inventel — Test Order</strong><br>
      200 Forge Way, Unit 1<br>
      Rockaway, NJ 07866
    </div>

    <div class="team-callout cx">
      <span class="team-tag">CX · Why we ship test orders to our own office</span>
      <p style="margin:0">If a test slips through the warehouse flag (it happens — humans make mistakes, especially during high-volume periods), shipping the order to <strong>Inventel's own office at 200 Forge Way, Rockaway, NJ</strong> means the package arrives at a place where someone on the team can intercept it cleanly. If we ship test orders to home addresses, a slipped-through test becomes a stranger receiving an unexpected box — confusing at best, a brand incident at worst. The Rockaway office is the safety net.</p>
    </div>

    <div class="team-callout newhire">
      <span class="team-tag">New Hire · Practice this before your first real test</span>
      <p style="margin:0">Before you place your first real test order, walk through the 7 steps in your head twice and confirm with your manager that you understand them. Then, on your first real test, <strong>screenshot every page</strong> as you go (the cart with &quot;Test Order&quot; visible in the name field, the address page with the Rockaway address, the payment confirmation, the order confirmation email). Send the screenshots to the CX Fulfillment Lead with your Google Chat notification. After 2–3 successful tests this becomes muscle memory and you won't need the screenshots — but for the first few, they're insurance.</p>
    </div>

    </div>
  </div>
</section>

<!-- SHOPIFY PLATFORM -->
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

    <p>All Inventel storefronts run on <strong>Shopify</strong>, including sparkfirestarter.com. This means every Spark customer interaction with the storefront — checkout, account, order management, discount codes, email notifications — runs through Shopify's platform. The CX implications below are what every team member should know.</p>

    <h3>What Shopify Handles for Spark</h3>
    <table>
      <thead><tr><th>Function</th><th>What It Means for CX</th></tr></thead>
      <tbody>
        <tr><td><strong>Storefront &amp; checkout</strong></td><td>The customer-facing site. Outages affect the entire storefront — check <a href="https://www.shopifystatus.com/" target="_blank" rel="noopener">shopifystatus.com</a> if customers report issues.</td></tr>
        <tr><td><strong>Customer accounts</strong></td><td>Customers can create accounts at /account/login. CX <strong>never handles passwords</strong> — direct customers to use the &quot;Forgot password&quot; flow on the site.</td></tr>
        <tr><td><strong>Order management</strong></td><td>Every order lives in Shopify Admin. CX uses the order detail page to look up status, processing/handling fees, line items, customer history.</td></tr>
        <tr><td><strong>Discount codes</strong></td><td>All codes are configured in Shopify and validated at checkout. If a code isn't working for a customer, first check the monthly discount sheet, then check Shopify Admin → Discounts.</td></tr>
        <tr><td><strong>Subscriptions</strong></td><td>Spark does not have a subscription product (single-purchase hardware). If Inventel adds one in the future, it'll run through a Shopify subscription app like Recharge.</td></tr>
        <tr><td><strong>Email notifications</strong></td><td>Order confirmation, shipping confirmation, return notifications — all sent automatically via Shopify. Marketing emails (newsletters, promo) go through Klaviyo separately.</td></tr>
        <tr><td><strong>Refunds</strong></td><td>Processed via Shopify Admin. Refunds typically appear on the customer's statement within 5–10 business days, depending on their bank.</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:22px">Key Spark URLs (Shopify-Powered)</h3>
    <table>
      <thead><tr><th>URL</th><th>Purpose</th></tr></thead>
      <tbody>
        <tr><td><a href="https://sparkfirestarter.com/account" target="_blank" rel="noopener">sparkfirestarter.com/account</a></td><td>Customer account page · order history, account details</td></tr>
        <tr><td><a href="https://sparkfirestarter.com/account/login" target="_blank" rel="noopener">sparkfirestarter.com/account/login</a></td><td>Login + &quot;Forgot password&quot; · direct customers here for password issues</td></tr>
        <tr><td><a href="https://sparkfirestarter.com/collections/all" target="_blank" rel="noopener">sparkfirestarter.com/collections/all</a></td><td>All products · the canonical shop page</td></tr>
        <tr><td>sparkfirestarter.com/policies/refund-policy</td><td>Refund policy (if published)</td></tr>
        <tr><td>sparkfirestarter.com/policies/shipping-policy</td><td>Shipping policy</td></tr>
        <tr><td><a href="https://sparkfirestarter.com/pages/privacy-policy" target="_blank" rel="noopener">sparkfirestarter.com/pages/privacy-policy</a></td><td>Privacy policy</td></tr>
        <tr><td>sparkfirestarter.com/policies/terms-of-service</td><td>Terms of service</td></tr>
      </tbody>
    </table>

    <div class="alert-callout">
      <span class="alert-callout-title">🔒 Security Reminder</span>
      <p style="margin:0"><strong>CX never handles passwords or payment information.</strong> If a customer asks you to &quot;just reset my password for me&quot; or &quot;take my new card number,&quot; redirect them to the self-service flow on the site. Phone-shared passwords and card numbers are a security violation — there are zero exceptions, even for upset customers. The right answer is always: <em>&quot;I can't take that information by phone for your security, but I'll walk you through the password reset / payment update flow on the site right now.&quot;</em></p>
    </div>

    <h3 style="margin-top:22px">When to Escalate to Web Dev</h3>
    <p>Most CX issues with the storefront are individual customer issues (one bad cart, one stuck order). But certain patterns indicate a platform problem and need to be escalated to the Web Dev team immediately:</p>
    <ul style="margin-left:20px;line-height:1.85;font-size:14px">
      <li><strong>The site is down</strong> — multiple customers report the same load failure or checkout error in a short window. Check shopifystatus.com first; if Shopify is up but our site is down, escalate.</li>
      <li><strong>A discount code is broken</strong> — multiple customers report the same code rejecting at checkout. Check Shopify Admin → Discounts; if the code is configured correctly but failing, escalate.</li>
      <li><strong>A subscription won't cancel</strong> (future-state — currently N/A for Spark, but flagged here for portability across hubs).</li>
      <li><strong>Order confirmation emails aren't sending</strong> — customer placed order, sees order in their account, but no email after 30 minutes. This is a Shopify notification issue.</li>
      <li><strong>A refund isn't appearing in the customer's account after 10 business days</strong> — beyond normal bank-processing time, this is a Shopify or payment-processor issue, not just a slow bank.</li>
    </ul>

    <div class="team-callout cx">
      <span class="team-tag">CX · The single best diagnostic question</span>
      <p style="margin:0">When a customer reports any storefront or checkout issue, your first question is always: <strong>&quot;Is anyone else seeing the same thing?&quot;</strong> Check internal CX chat or recent ticket volume. If you're the only one, it's almost certainly a customer-side issue (browser cache, payment method, billing address mismatch). If three CX agents have the same complaint in 30 minutes, it's platform — escalate to Web Dev. This one question routes 90% of issues correctly in the first 60 seconds.</p>
    </div>

    </div>
  </div>
</section>

<!-- FAQ -->
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

    <p>The questions Spark customers ask most often, with the answers CX should reach for. These are <em>customer-facing</em> answers (not internal callouts) — phrased in plain language, calibrated to Spark's brand voice.</p>

    <div class="faq-item">
      <div class="faq-q">What is Spark made of?</div>
      <div class="faq-a">Spark is stamped from a single piece of <strong>16-gauge 304 stainless steel</strong> — the same grade and gauge used in commercial cookware and outdoor hardware that's expected to last decades. There are no welds, no rivets, no moving parts, and no coatings. Just steel.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">How does Spark actually work?</div>
      <div class="faq-a">Pour about 10 oz of rubbing (isopropyl) alcohol into the wings of the unit, build your wood stack around it, and light the alcohol with a long-handled lighter. The alcohol burns for 10–15 minutes — long enough to ignite even damp or unseasoned wood. Once the wood catches, Spark stays in the pit and isn't refilled. After the fire is fully out and cool, dust off the ashes; Spark stays in the pit until next time.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">What kind of fuel do I use?</div>
      <div class="faq-a">Standard rubbing (isopropyl) alcohol — both 70% and 91% work. 91% lights faster and burns slightly hotter. Roughly 10 oz per fire, about $0.30 of fuel cost. <strong>Don't substitute</strong> with lighter fluid (smoky), gasoline (dangerous and explosive), or denatured alcohol (works but more expensive).</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">Will Spark work with damp or unseasoned wood?</div>
      <div class="faq-a">Yes — that's actually one of the reasons Spark exists. The 10–15 minutes of sustained alcohol flame is long enough to drive the moisture out of damp or unseasoned wood and ignite it. Customers consistently report Spark lights wood that disposable starters can't touch.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">Will it work in my Solo Stove / Breeo / smokeless fire pit?</div>
      <div class="faq-a">Yes. Spark works in any fire pit, including smokeless ones (Solo Stove, Breeo, Tiki, and similar). The arched tri-wing self-levels on uneven surfaces, and the geometry actually <em>improves</em> performance in smokeless pits because it pulls the airflow pattern those pits are designed around.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">Can I use Spark with pellets?</div>
      <div class="faq-a"><strong>No.</strong> Spark is designed to ignite <strong>wood logs</strong> in an open fire pit, fireplace, or fire ring — not pellets. It isn't built for pellet grills, pellet smokers, or pellet stoves; those appliances have their own electric ignition systems and enclosed combustion chambers that Spark doesn't fit. Spark is purpose-built for one job: starting a wood fire with about 10 oz of rubbing alcohol and a log-cabin stack around it. For pellet appliances, use the ignition system the manufacturer designed.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">How big is Spark? Will it fit my fire pit?</div>
      <div class="faq-a">Spark measures <strong>17 inches tip-to-tip across the three wings and 1.75 inches tall</strong>. That sizing fits virtually every standard backyard fire pit, fire ring, and smokeless pit on the market. If your pit's opening is narrower than ~17 inches — some compact patio pits, tabletop fire bowls, or specialty designs run smaller — Spark won't fit. For anything standard size, you're set.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">How should I stack the wood — log cabin or teepee?</div>
      <div class="faq-a">We recommend <strong>log cabin style, not teepee</strong>. Stack the logs in parallel rows that cross at right angles — like a square chimney — with Spark in the middle. The log-cabin shape lets the alcohol flame draft up through the stack and ignite the wood evenly. (Yes, our logo looks like a teepee — that's a branding choice because the tri-wing shape reads as an &quot;A&quot; for SPARK. For actually starting the fire, log cabin works better.)</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">Will it rust?</div>
      <div class="faq-a">304 stainless is highly corrosion-resistant — it shrugs off rain, snow, and ash. Like any metal exposed to weather long enough, it can develop surface oxidation; that's cosmetic and doesn't affect performance. For long off-seasons or persistent wet weather, we recommend bringing it inside or covering the pit. We've never had a Spark fail under normal use.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">Can I leave Spark outside year-round?</div>
      <div class="faq-a">Yes. 304 stainless is built for outdoor exposure, and Spark is designed to live in the bottom of your fire pit between uses. Many customers leave it out through every season. For long winter storage in heavy-snow regions, bringing it under cover is a small step that extends its appearance over decades.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">Do you have a smaller version for backpacking?</div>
      <div class="faq-a">No — Spark is currently a single product, designed for backyard fire pits, fireplaces, and base-camp fire rings. For ultralight backpacking, a ferro rod or pouch starter is honestly a better fit. We'd rather tell you that honestly than sell you something that isn't right for the use.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">Is this the Shark Tank fire starter?</div>
      <div class="faq-a">Great question — and a common mix-up. Spark is <strong>not</strong> Insta-Fire. Insta-Fire is a different product: a granular, disposable fire starter sold in pouches that appeared on Shark Tank Season 7. Spark is a reusable, single-piece stainless steel firestarter that lives in your fire pit. Both products start fires, but with very different approaches — disposable vs. permanent hardware. Spark has not appeared on Shark Tank.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">What's your return policy?</div>
      <div class="faq-a">30 days from delivery (some exceptions apply). Customer is responsible for return shipping cost. All returns are subject to processing and handling fees that vary by original order. Contact <a href="mailto:info@sparkfirestarter.com" target="_blank" rel="noopener">info@sparkfirestarter.com</a> or call <a href="tel:8887033046">888-703-3046</a> for a Return Authorization (RA) number and the return-to address — do not ship returns without one.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">How long does shipping take?</div>
      <div class="faq-a">Standard ground in the continental US is 3–7 business days. East Coast addresses are faster (2–3 business days because of proximity to our NJ warehouse); West Coast addresses run 4–6 business days. We do ship internationally to all countries — the customer pays shipping, and rates are calculated at checkout. For Alaska, Hawaii, and US territories, contact CX before ordering for a case-by-case quote.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">Do you offer free shipping?</div>
      <div class="faq-a">Yes, on orders above our free-shipping threshold — the current threshold is shown in the banner at the top of <a href="https://sparkfirestarter.com/" target="_blank" rel="noopener">sparkfirestarter.com</a>. The threshold is occasionally adjusted for promotions, so check the banner for the current value.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">Do you have a warranty?</div>
      <div class="faq-a">Spark is engineered to last indefinitely under normal use — no welds, no moving parts, no coatings means there are no failure points to wear out. If a Spark ever fails under normal use, contact CX and we'll make it right. Refer to the current Spark / Inventel warranty page for the full terms.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">How do I reset my password?</div>
      <div class="faq-a">Use the &quot;Forgot password&quot; link on the <a href="https://sparkfirestarter.com/account/login" target="_blank" rel="noopener">login page</a>. CX can't reset passwords for you over the phone for security reasons, but the self-service flow is fast and we're happy to walk you through it.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">Is Spark part of a larger company?</div>
      <div class="faq-a">Yes — Spark joined the <strong>Inventel</strong> brand portfolio in 2025. That means the brand has a parent company backing it for the long haul, with operations (fulfillment, CX, marketing) running through Inventel's NJ-based teams. Same product, same quality, broader support.</div>
    </div>

    </div>
  </div>
</section>

<!-- RESOURCES & CONTACTS -->
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

    <h3>Resources &amp; Where to Find Them</h3>
    <table>
      <thead><tr><th>Resource</th><th>Where to Find It</th><th>Owner</th></tr></thead>
      <tbody>
        <tr><td>Spark website (live source of truth)</td><td><a href="https://sparkfirestarter.com/" target="_blank" rel="noopener">sparkfirestarter.com</a></td><td>Brand / Web Dev</td></tr>
        <tr><td>Shop All collection (all SKUs &amp; current pricing)</td><td><a href="https://sparkfirestarter.com/collections/all" target="_blank" rel="noopener">sparkfirestarter.com/collections/all</a></td><td>Brand</td></tr>
        <tr><td>FAQ (customer-facing)</td><td><a href="https://sparkfirestarter.com/pages/faq" target="_blank" rel="noopener">sparkfirestarter.com/pages/faq</a></td><td>Brand</td></tr>
        <tr><td>In the Media / Press</td><td><a href="https://sparkfirestarter.com/pages/in-the-media" target="_blank" rel="noopener">sparkfirestarter.com/pages/in-the-media</a></td><td>Marketing</td></tr>
        <tr><td>Brand Style Guide (full)</td><td>[ Inventel shared brand drive — request access ]</td><td>Brand Lead</td></tr>
        <tr><td>Logo &amp; asset library</td><td>[ Inventel shared brand drive — request access ]</td><td>Creative Director</td></tr>
        <tr><td>Product specs &amp; CDN images</td><td><a href="https://sparkfirestarter.com/" target="_blank" rel="noopener">sparkfirestarter.com</a> + Inventel asset library</td><td>Brand</td></tr>
        <tr><td>Monthly discount sheet</td><td>[ Internal PM tool — ask in #discounts on day one ]</td><td>Marketing</td></tr>
        <tr><td>Customer support contact</td><td><a href="mailto:info@sparkfirestarter.com" target="_blank" rel="noopener">info@sparkfirestarter.com</a> · <a href="tel:8887033046">888-703-3046</a></td><td>CX</td></tr>
        <tr><td>Customer support hours</td><td>8:30 AM – 5:30 PM ET, Mon–Fri</td><td>CX</td></tr>
        <tr><td>Influencer / partnership inquiries</td><td>info@sparkfirestarter.com (subject: &quot;Influencer / Partnership Inquiry&quot;)</td><td>Marketing / Partnerships</td></tr>
        <tr><td>Instagram</td><td><a href="https://www.instagram.com/sparkfirestarter/" target="_blank" rel="noopener">@sparkfirestarter</a></td><td>Marketing / Social</td></tr>
        <tr><td>Facebook</td><td><a href="https://www.facebook.com/p/Spark-Infinite-Firestarter-61560491776235/" target="_blank" rel="noopener">Spark Infinite Firestarter</a></td><td>Marketing / Social</td></tr>
        <tr><td>Shopify status (for outage checks)</td><td><a href="https://www.shopifystatus.com/" target="_blank" rel="noopener">shopifystatus.com</a></td><td>Web Dev</td></tr>
        <tr><td>Outbound warehouse address</td><td>240 West Parkway, Middle Door, Pompton Plains, NJ 07444</td><td>Fulfillment</td></tr>
        <tr><td>Test order ship-to address</td><td>200 Forge Way, Unit 1, Rockaway, NJ 07866</td><td>Fulfillment</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:24px">Escalation Path by Situation Type</h3>
    <p style="font-size:13px;color:var(--sp-text-muted);font-style:italic">Listed by department only — personnel and email addresses change frequently and would create stale data here. The Brand Team maintains the staff directory separately.</p>
    <table>
      <thead><tr><th>Escalation Type</th><th>Department</th></tr></thead>
      <tbody>
        <tr><td>Customer complaint — unresolved after first contact</td><td>CX Supervisor</td></tr>
        <tr><td>Return or refund dispute</td><td>CX Fulfillment Supervisor</td></tr>
        <tr><td>Brand or product question</td><td>Brand Lead</td></tr>
        <tr><td>Technical or website issue</td><td>Web Dev Team</td></tr>
        <tr><td>Media, press, or partnership inquiry</td><td>Marketing / Partnerships</td></tr>
        <tr><td>Legal or compliance concern</td><td>Legal / Compliance</td></tr>
        <tr><td>Product safety question (defective unit, customer injury claim)</td><td>Brand Lead</td></tr>
      </tbody>
    </table>

    </div>
  </div>
</section>

<!-- KNOWLEDGE CHECK QUIZ -->
<section id="quiz-section" class="collapsible">
  <div class="section-header-bar" onclick="toggleSection(this)">
    <div class="section-header-left">
      <span class="eyebrow" style="color:var(--sp-amber)">26 · Knowledge Check Quiz</span>
      <h2>Prove It · 35 Questions · 70% to Pass</h2>
    </div>
    <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
  </div>
  <div class="section-body">
    <div id="quiz-intro">
      <p style="color:var(--sp-amber);max-width:640px">Read everything above first. Then take this quiz to confirm you've internalized what matters most for handling Spark customer interactions and brand decisions. <strong style="color:#fff">Pass: 25 of 35 correct (70%).</strong> One question at a time, immediate feedback, correct answers shown when you miss. You can retake as many times as you need — no penalty.</p>
      <p style="color:var(--sp-amber);max-width:640px">When you pass, you'll be able to enter your name and title, then print or save a certificate to send to your HR onboarding trainer as proof of completion.</p>
      <button class="quiz-start-btn" onclick="startQuiz()" style="background:var(--sp-ember);color:#fff;border:none;padding:14px 28px;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer;font-family:inherit;margin-top:18px;transition:transform .15s,box-shadow .15s;letter-spacing:.02em">Start the quiz →</button>
    </div>
    <div class="quiz-container" id="quiz-container" style="display:none">

      <div id="quiz-start" style="display:none"></div>

      <div id="quiz-active" style="display:none">
        <div class="quiz-progress" id="quiz-progress-text">Question 1 of 35</div>
        <div class="quiz-progress-bar"><div class="quiz-progress-fill" id="quiz-progress-fill" style="width:0%"></div></div>
        <div class="quiz-question" id="quiz-question-text"></div>
        <div class="quiz-options" id="quiz-options-list"></div>
        <div id="quiz-feedback" style="display:none"></div>
        <button id="quiz-next-btn" class="quiz-option" style="margin-top:18px;background:var(--sp-ember);border-color:var(--sp-ember);color:#fff;font-weight:700;justify-content:center;display:none" onclick="nextQuestion()">Next Question →</button>
      </div>

      <div id="quiz-pass" style="display:none">
        <div style="background:linear-gradient(135deg,var(--sp-ember) 0%,var(--sp-ember-deep) 100%);padding:28px;border-radius:12px;text-align:center;margin-bottom:18px">
          <div style="font-size:3rem;margin-bottom:8px">🎉</div>
          <h3 style="color:#fff;font-family:'Fraunces',serif;font-size:1.8rem;margin:0">Congratulations — You Passed!</h3>
        </div>
        <div style="background:rgba(255,255,255,.06);border-radius:12px;padding:24px;border:1px solid rgba(184,99,64,.3)">
          <div style="text-align:center;margin-bottom:18px">
            <div style="font-family:'Bebas Neue',sans-serif;font-size:2.4rem;color:var(--sp-amber);letter-spacing:.06em;line-height:1">SPARK</div>
            <div style="font-family:'DM Mono',monospace;font-size:10px;letter-spacing:.18em;color:#F5EFE3;text-transform:uppercase;margin-top:4px">Inventel Innovations · Brand Knowledge Certificate</div>
          </div>
          <div style="margin-bottom:14px">
            <label style="display:block;font-family:'DM Mono',monospace;font-size:11px;color:var(--sp-amber);text-transform:uppercase;letter-spacing:.1em;margin-bottom:6px;font-weight:700">Name · Title</label>
            <input type="text" id="cert-name" placeholder="Jane Smith · CX Agent" style="width:100%;background:rgba(255,255,255,.08);border:1px solid rgba(184,99,64,.4);color:#fff;padding:10px 14px;border-radius:8px;font-size:14px;font-family:'Inter',sans-serif">
          </div>
          <div style="text-align:center;margin:18px 0">
            <span style="display:inline-block;background:var(--sp-pine);color:#fff;font-family:'DM Mono',monospace;font-size:11px;font-weight:700;letter-spacing:.12em;padding:6px 14px;border-radius:14px">✓ PASSED</span>
          </div>
          <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(120px,1fr));gap:12px;margin-bottom:18px">
            <div style="background:rgba(0,0,0,.2);border-radius:8px;padding:12px;text-align:center">
              <div id="cert-pct" style="font-family:'Bebas Neue',sans-serif;font-size:1.6rem;color:var(--sp-amber);line-height:1">—</div>
              <div style="font-family:'DM Mono',monospace;font-size:9.5px;color:#F5EFE3;letter-spacing:.1em;text-transform:uppercase;margin-top:4px">Score</div>
            </div>
            <div style="background:rgba(0,0,0,.2);border-radius:8px;padding:12px;text-align:center">
              <div id="cert-correct" style="font-family:'Bebas Neue',sans-serif;font-size:1.6rem;color:var(--sp-amber);line-height:1">—</div>
              <div style="font-family:'DM Mono',monospace;font-size:9.5px;color:#F5EFE3;letter-spacing:.1em;text-transform:uppercase;margin-top:4px">Correct</div>
            </div>
            <div style="background:rgba(0,0,0,.2);border-radius:8px;padding:12px;text-align:center">
              <div id="cert-date" style="font-family:'Bebas Neue',sans-serif;font-size:1.6rem;color:var(--sp-amber);line-height:1">—</div>
              <div style="font-family:'DM Mono',monospace;font-size:9.5px;color:#F5EFE3;letter-spacing:.1em;text-transform:uppercase;margin-top:4px">Date</div>
            </div>
            <div style="background:rgba(0,0,0,.2);border-radius:8px;padding:12px;text-align:center">
              <div style="font-family:'Bebas Neue',sans-serif;font-size:1.6rem;color:var(--sp-amber);line-height:1">PASSED</div>
              <div style="font-family:'DM Mono',monospace;font-size:9.5px;color:#F5EFE3;letter-spacing:.1em;text-transform:uppercase;margin-top:4px">Result</div>
            </div>
          </div>
          <div style="font-family:'DM Mono',monospace;font-size:10.5px;color:#F5EFE3;letter-spacing:.08em;text-transform:uppercase;text-align:center;border-top:1px solid rgba(184,99,64,.25);padding-top:12px;opacity:.85">Training Track · Spark Brand Hub · Inventel Innovations</div>
          <div class="name-printed" style="display:none;text-align:center;margin-top:14px;font-family:'Fraunces',serif;font-size:1.2rem;color:var(--sp-amber)"></div>
        </div>
        <div style="display:flex;gap:12px;flex-wrap:wrap;justify-content:center;margin-top:24px" class="completion-actions">
          <button style="background:rgba(255,255,255,.08);border:none;color:#fff;padding:12px 22px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:inherit;display:inline-flex;align-items:center;gap:8px;transition:transform .15s,box-shadow .15s" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 16px rgba(255,255,255,.12)'" onmouseout="this.style.transform='';this.style.boxShadow=''" onclick="resetQuiz()">↩ Retake Quiz</button>
          <button style="background:var(--sp-ember);border:none;color:#fff;padding:12px 22px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:inherit;display:inline-flex;align-items:center;gap:8px;transition:transform .15s,box-shadow .15s" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 16px rgba(184,99,64,.45)'" onmouseout="this.style.transform='';this.style.boxShadow=''" onclick="printCertificate()">🖨️ Print Certificate</button>
        </div>
        <div style="max-width:520px;margin:18px auto 0;padding:14px 18px;background:rgba(255,255,255,.06);border:1px solid rgba(196,154,101,.3);border-radius:10px;color:#F5EFE3;font-size:13px;line-height:1.6;text-align:center">
          <strong style="color:#fff">📨 Send to your HR onboarding trainer as proof of completion.</strong><br>
          Use <strong>🖨️ Print Certificate</strong> above — in the browser's print dialog, either send to a printer <em>or</em> choose <strong>&quot;Save as PDF&quot;</strong> as the destination. A clean screenshot of this completion card is also accepted.
        </div>
      </div>

      <div id="quiz-fail" style="display:none">
        <div style="background:linear-gradient(135deg,#B8391F 0%,#8B2815 100%);padding:28px;border-radius:12px;text-align:center;margin-bottom:18px;border:2px solid rgba(196,154,101,.3)">
          <div style="font-size:3rem;margin-bottom:8px">📚</div>
          <h3 style="color:#fff;font-family:'Fraunces',serif;font-size:1.6rem;margin:0">Not Quite There Yet</h3>
          <p style="color:#fff;margin-top:10px;margin-bottom:0;font-size:14px">You scored <strong id="fail-score">—</strong>. You need 25/35 (70%) to pass.</p>
        </div>
        <div style="background:rgba(255,255,255,.06);border-radius:12px;padding:22px;border:1px solid rgba(184,99,64,.3)">
          <h4 style="color:var(--sp-amber);margin-bottom:10px">Where to Focus Before You Retake</h4>
          <p style="color:#F5EFE3;font-size:13.5px;line-height:1.65">Most retakes pass after a focused review of the operational sections. Spend 20–30 minutes re-reading these in particular:</p>
          <ul style="color:#F5EFE3;font-size:13.5px;line-height:1.85;margin-left:20px">
            <li><strong>Section 2 — Product Line</strong> (specs, materials, how to use)</li>
            <li><strong>Section 20 — Return Policy</strong> (RA number, processing fees, refund math)</li>
            <li><strong>Section 21 — Fulfillment &amp; Shipping</strong> (warehouse address, transit times)</li>
            <li><strong>Section 22 — Test Orders</strong> (the &quot;Test Order&quot; first-name rule)</li>
          </ul>
          <p style="color:#F5EFE3;font-size:13px;margin-top:12px;margin-bottom:0;font-style:italic;opacity:.9">You've got this. The questions don't change between attempts — review the sections above and you'll pass.</p>
        </div>
        <button class="quiz-option" style="margin-top:18px;background:var(--sp-ember);border-color:var(--sp-ember);color:#fff;justify-content:center;font-weight:700;width:100%" onclick="resetQuiz()">↻ Retake Quiz</button>
      </div>

    </div>
  </div>
</section>

<script>
/* Section collapse */
function toggleSection(headerEl){
  const card = headerEl.closest('.card.collapsible') || headerEl.closest('section.collapsible');
  if(card) card.classList.toggle('collapsed');
}

/* TOC drawer */
function openTOCDrawer(){
  document.getElementById('toc-drawer').classList.add('open');
  document.getElementById('toc-drawer-overlay').classList.add('open');
}
function closeTOCDrawer(){
  document.getElementById('toc-drawer').classList.remove('open');
  document.getElementById('toc-drawer-overlay').classList.remove('open');
}
document.addEventListener('keydown',e=>{
  if(e.key==='Escape'){closeTOCDrawer();const sr=document.getElementById('search-results');if(sr)sr.classList.remove('open')}
  if(e.key==='/'&&document.activeElement.tagName!=='INPUT'){e.preventDefault();document.getElementById('hub-search').focus()}
});
document.querySelectorAll('#toc-drawer-nav a').forEach(a=>a.addEventListener('click',closeTOCDrawer));

/* Hub search — Stage 1 stub; full implementation arrives once all sections exist */
const searchInput = document.getElementById('hub-search');
const searchResults = document.getElementById('search-results');
let searchIndex = [];

function buildSearchIndex(){
  searchIndex = [];
  // Sections
  document.querySelectorAll('section[id]').forEach(s=>{
    const h = s.querySelector('h2');
    if(h){
      searchIndex.push({type:'Section', label:h.textContent.trim(), id:s.id, snippet:''});
    }
  });
  // Team callouts
  document.querySelectorAll('.team-callout').forEach((el,i)=>{
    const tag = el.querySelector('.team-tag');
    if(!tag) return;
    if(!el.id) el.id = 'callout-'+i;
    const variant = el.classList.contains('cx')?'CX':el.classList.contains('creative')?'Creative':el.classList.contains('marketing')?'Marketing':el.classList.contains('brand')?'Brand':el.classList.contains('newhire')?'NewHire':'Callout';
    searchIndex.push({type:variant+' Callout', label:tag.textContent.trim(), id:el.id, snippet:el.textContent.trim().slice(0,90)});
  });
  // Glossary terms
  document.querySelectorAll('.glossary dt').forEach((dt,i)=>{
    if(!dt.id) dt.id = 'gloss-'+i;
    const dd = dt.nextElementSibling;
    searchIndex.push({type:'Glossary', label:dt.textContent.trim(), id:dt.id, snippet:dd?dd.textContent.trim().slice(0,80):''});
  });
  // FAQ
  document.querySelectorAll('.faq-q').forEach((q,i)=>{
    if(!q.id) q.id = 'faq-'+i;
    searchIndex.push({type:'FAQ', label:q.textContent.trim(), id:q.id, snippet:''});
  });
  // Objections
  document.querySelectorAll('.objection-q').forEach((q,i)=>{
    if(!q.id) q.id = 'obj-'+i;
    searchIndex.push({type:'Objection', label:q.textContent.trim(), id:q.id, snippet:''});
  });
}

function runSearch(q){
  q = q.trim().toLowerCase();
  if(q.length<2){searchResults.classList.remove('open');return}
  let matches;
  if(q.length<=3){
    const re = new RegExp('\\b'+q.replace(/[.*+?^${}()|[\]\\]/g,'\\$&'),'i');
    matches = searchIndex.filter(x=>re.test(x.label)||re.test(x.snippet));
  } else {
    const tokens = q.split(/\s+/).filter(Boolean);
    matches = searchIndex.filter(x=>{
      const hay = (x.label+' '+x.snippet).toLowerCase();
      return tokens.every(t=>hay.includes(t));
    });
  }
  matches = matches.slice(0,30);
  if(!matches.length){
    searchResults.innerHTML='<div class="search-empty">No matches in the hub.</div>';
    searchResults.classList.add('open');
    return;
  }
  // group
  const groupOrder = ['Section','CX Callout','Creative Callout','Marketing Callout','Brand Callout','NewHire Callout','Glossary','FAQ','Objection'];
  const groups = {};
  matches.forEach(m=>{(groups[m.type]=groups[m.type]||[]).push(m)});
  let html='';
  groupOrder.forEach(g=>{
    if(!groups[g]) return;
    html += '<div class="search-group"><div class="search-group-label">'+g+'</div>';
    groups[g].forEach(m=>{
      html += '<a class="search-result" data-id="'+m.id+'">'+m.label+(m.snippet?'<div class="search-result-snippet">'+m.snippet+'…</div>':'')+'</a>';
    });
    html += '</div>';
  });
  searchResults.innerHTML = html;
  searchResults.classList.add('open');
}

searchInput.addEventListener('input',e=>runSearch(e.target.value));
searchInput.addEventListener('focus',e=>{if(e.target.value.length>=2)runSearch(e.target.value)});
searchResults.addEventListener('click',e=>{
  const r = e.target.closest('.search-result');
  if(!r) return;
  const id = r.dataset.id;
  const target = document.getElementById(id);
  if(!target) return;
  // Expand any collapsed parent
  let p = target.closest('.collapsed');
  while(p){p.classList.remove('collapsed');p = p.parentElement && p.parentElement.closest('.collapsed')}
  target.scrollIntoView({behavior:'smooth',block:'center'});
  target.classList.add('flash-target');
  setTimeout(()=>target.classList.remove('flash-target'),1800);
  searchResults.classList.remove('open');
  searchInput.value='';
});
document.addEventListener('click',e=>{
  if(!e.target.closest('.nav-search-wrap')) searchResults.classList.remove('open');
});

window.addEventListener('load',buildSearchIndex);

/* ===== QUIZ ===== */
const quizQuestions = [
  // — Brand Overview / Inventel acquisition (2)
  {q:"In what year did Spark join the Inventel brand portfolio?", o:["2022","2023","2024","2025"], a:3, e:"Spark joined the Inventel brand portfolio in 2025. All operations (fulfillment, CX, marketing, web) now run through Inventel's NJ-based teams."},
  {q:"Spark is best described as which kind of brand?", o:["A multi-SKU outdoor lifestyle brand","A single-SKU brand selling one core product","A subscription-only brand","A wholesale-only brand"], a:1, e:"Spark is a single-SKU brand — one product, the Spark Infinite Fire Starter. There are no variants, sizes, or color options."},

  // — Product specs / material (5)
  {q:"What grade of stainless steel is Spark made from?", o:["201","304","316","430"], a:1, e:"Spark is made from 304 stainless steel — chosen for its high heat resistance, corrosion resistance, and recyclability. It's the same grade used in commercial cookware."},
  {q:"How is Spark constructed?", o:["Welded from 3 steel pieces","Stamped from a single piece of steel","Cast iron with a stainless coating","3D-printed titanium"], a:1, e:"Spark is stamped from a single piece of 16-gauge 304 stainless steel. No welds, no rivets, no moving parts — nothing to wear out or fail."},
  {q:"How much rubbing alcohol does a single Spark fire use?", o:["About 2 oz","About 5 oz","About 10 oz","About 20 oz"], a:2, e:"Approximately 10 oz of rubbing (isopropyl) alcohol per fire — that's the design spec. About $0.30 of fuel cost per fire."},
  {q:"How long does Spark burn on a single 10 oz fill?", o:["1–2 minutes","3–5 minutes","10–15 minutes","30+ minutes"], a:2, e:"Roughly 10–15 minutes of sustained flame — long enough to ignite even damp or unseasoned wood."},
  {q:"What is the defining geometric feature of Spark?", o:["Flat disc","Tri-wing arch","Cylinder","Spiral coil"], a:1, e:"The arched tri-wing — three legs forming a stable 3-point base that self-levels on uneven ground and pulls 360° airflow."},

  // — How to use / safety (3)
  {q:"What's the single most important safety rule for using Spark?", o:["Always wear gloves","Never refill while the pit is hot or near coals","Use only at night","Stand at least 10 feet away while burning"], a:1, e:"Never refill Spark while it's in a hot pit, near coals, or near any ignition source. Pouring alcohol onto coals can cause flashback. One fill per fire session, every time."},
  {q:"Which fuel should customers use with Spark?", o:["Lighter fluid","Gasoline","Rubbing (isopropyl) alcohol","Kerosene"], a:2, e:"Rubbing (isopropyl) alcohol — both 70% and 91% work. Lighter fluid is smoky; gasoline is dangerous and explosive; rubbing alcohol is the safest, cleanest fuel."},
  {q:"Where does Spark live between fires?", o:["In a closet, dried and oiled","In the bottom of the fire pit","In the original packaging","Submerged in water"], a:1, e:"Spark is designed to live in the bottom of the fire pit between uses. 304 stainless can take rain, ash, and weather. Just dust off the ashes between fires."},

  // — Vision / Pillars (1)
  {q:"Which is NOT one of Spark's six brand pillars?", o:["Built to Outlast","Effortless Ignition","Anti-Consumable","Premium Lifestyle"], a:3, e:"The six pillars are Built to Outlast, Effortless Ignition, Engineered Geometry, Anti-Consumable, Quiet Confidence, and Outdoor Lifestyle. \"Premium Lifestyle\" is not one of them."},

  // — Voice / Tone (1)
  {q:"Which best describes Spark's brand voice?", o:["Loud, hype-driven, urgency-led","Calm, dry, quietly confident","Aggressive and competitive","Cute and whimsical"], a:1, e:"Spark's voice is calm, dry, and quietly confident — the voice of someone who has already solved the problem and is letting you in on how. We don't shout, hype, or perform urgency."},

  // — Personality (1)
  // (covered implicitly by voice question — trimmed to keep total at 35)

  // — Visual Identity (1)
  {q:"What color is Spark's signature brand base?", o:["Bright orange","Muted sage green","Charcoal black","Cheese yellow"], a:1, e:"Sage green (#708781) is Spark's signature brand base — sampled directly from the website. Cream is the warm tone, charcoal is for body type, and ember/amber are warm accents only. The 60-30-10 rule: 60% sage or cream, 30% supporting neutrals, 10% ember/amber for warmth."},

  // — Audience / Personas (2)
  {q:"Which persona best matches a 42-year-old engineer who reads spec sheets before reviews?", o:["Backyard Bill","Cabin Carla","Practical Pete","Gifting Greg"], a:2, e:"Practical Pete is the engineer-mindset buyer — researches material grade, gauge, and construction methods before buying. Lives on Reddit and Google Search."},
  {q:"What is Spark's primary brand archetype?", o:["The Jester","The Sage","The Hero","The Rebel"], a:1, e:"Spark is The Sage — the brand that knows the right way and doesn't oversell it. The Explorer sits underneath as the lifestyle layer."},

  // — Competitors (2)
  {q:"Which is the most common customer brand confusion Spark faces?", o:["Confusion with Solo Stove","Confusion with Insta-Fire (the Shark Tank brand)","Confusion with Duraflame","Confusion with Yeti"], a:1, e:"Customers often ask if Spark is the Shark Tank fire starter — that's Insta-Fire, a different brand entirely. Insta-Fire is disposable granular pouches; Spark is reusable stainless hardware."},
  {q:"Most Spark customers are switching from what?", o:["Other reusable firestarters","Solo Stove accessories","No method at all (newspaper / kindling) or disposable cubes","Bushcraft ferro rods"], a:2, e:"Most customers aren't switching from a competitor — they're switching from no method at all (newspaper and crossed fingers) or from disposable starter cubes. That's the highest-volume conversion path."},

  // — Objections (3 — incl Insta-Fire)
  {q:"A customer asks &quot;Isn't this the Shark Tank fire starter?&quot; What's the right response?", o:["&quot;Yes, that's us!&quot;","&quot;That's actually Insta-Fire — a different brand. Spark is reusable stainless hardware; Insta-Fire is disposable pouches.&quot;","&quot;We don't talk about that.&quot;","&quot;Hang on, let me check.&quot;"], a:1, e:"Acknowledge the mix-up warmly, correct cleanly, pivot to what makes Spark different. Don't get defensive. Insta-Fire appeared on Shark Tank S7; Spark has not been on Shark Tank."},
  {q:"A customer says &quot;Won't it just rust?&quot; What's the right response?", o:["&quot;Never. Spark is stainless — it can't rust.&quot;","&quot;Maybe. We're not sure.&quot;","&quot;304 stainless is highly corrosion-resistant; surface oxidation is possible but cosmetic. We've never had one fail under normal use.&quot;","&quot;We sell a rust-prevention spray separately.&quot;"], a:2, e:"Don't promise &quot;never rusts&quot; — promise &quot;built to last and we stand behind it.&quot; Surface oxidation is cosmetic and doesn't affect performance."},
  {q:"A customer asks for a smaller version for backpacking. What should you say?", o:["&quot;Yes, we have a backpacking model coming soon.&quot;","&quot;No — Spark is a single product. For ultralight backpacking, a ferro rod is honestly a better fit.&quot;","&quot;We can custom-cut one for you.&quot;","&quot;Let me upsell you on two regular Sparks.&quot;"], a:1, e:"Spark is single-SKU. Be honest: it's not designed for ultralight backpacking, and a ferro rod is a better fit for that use. The honest pivot wins more trust than a fake yes."},

  // — Customer Journey (removed per request)

  // — Log Cabin vs. Teepee (2 — important brand education point)
  {q:"How does Spark officially recommend stacking the wood around the unit?", o:["Teepee style — logs leaning together at the top","Log cabin style — parallel rows crossed at right angles","Whatever the customer prefers; both work equally well","Single layer flat across the top"], a:1, e:"Log cabin style is the official brand recommendation. Parallel rows of logs crossed at right angles form a square chimney that drafts the alcohol flame up into the wood evenly and reliably. Teepee can work but is less reliable and can collapse onto Spark mid-burn."},
  {q:"A customer says &quot;your logo looks like a teepee, so I built a teepee fire and it didn't light well.&quot; What's the right response?", o:["&quot;The logo is the instructions — keep trying with the teepee.&quot;","&quot;Sorry, that means Spark won't work for you.&quot;","&quot;Great question — the logo is a stylized 'A' for SPARK, not a fire-building diagram. We actually recommend log cabin style, not teepee. Try parallel rows of logs crossed at right angles next time.&quot;","&quot;Process a refund immediately.&quot;"], a:2, e:"This is the brand's signature line: &quot;We prefer log cabin style, even though our logo suggests a teepee.&quot; The logo is a branding choice (the tri-wing reads as an &quot;A&quot;), not a fire-building instruction. Customers who learn fire-building from the logo alone often get a worse first fire than they should — gentle correction + the log cabin recommendation usually solves it."},

  // — Marketing / Hooks (1)
  {q:"Which is one of Spark's proven hooks?", o:["Stop buying these every month. Buy this once.","Hurry — only 3 left in stock!","Discover the magic of fire.","The world's #1 fire starter."], a:0, e:"&quot;Stop buying these every month. Buy this once.&quot; is one of Spark's strongest hooks — it nails the anti-consumable angle. Spark voice avoids fake urgency, hype words like &quot;magic&quot;, and unsubstantiated &quot;#1&quot; claims."},

  // — Sample Winning Creatives (2 — 1 universal pattern, 1 specific gallery)
  {q:"Which is one of the six universal creative patterns shared across all Inventel brands?", o:["Lead with a Specific, Relatable Problem","Always include the founder's face","Open with the logo","Use heavy filters and HDR"], a:0, e:"&quot;Lead with a Specific, Relatable Problem&quot; is one of the six universal patterns (others: Social Proof Front and Center, Native/Authentic, One Clear Message, Contrast/Switch, Emotion Over Logic). Every winning Spark ad hits 2–3 of these."},
  {q:"The Spark &quot;before/after&quot; contrast ad hits which creative pattern most directly?", o:["Native/Authentic-Looking Creative","Contrast and &quot;Switch&quot; Framing","Social Proof Front and Center","Emotion Over Logic"], a:1, e:"Pile of disposable cube wrappers vs. single Spark unit is a textbook Contrast/Switch ad — validates the customer's frustration with their current solution before presenting yours."},

  // — Social / Hashtags (1)
  {q:"How many hashtags should a typical Spark organic social post use?", o:["Just 1","4–7, intentional","15–20","30+"], a:1, e:"Spark uses a tight, intentional hashtag set of 4–7 per post. Spamming hashtags reads as low-effort and undercuts the brand voice."},

  // — Partnerships / FTC (1)
  {q:"What's required on every paid or gifted partnership post?", o:["A 20% off code for the audience","A clear FTC disclosure (#ad, #sponsored, or &quot;Paid partnership&quot;)","A link to the Inventel website","A photo of the founder"], a:1, e:"Every paid or gifted partnership must have a clear FTC disclosure — #ad, #sponsored, or &quot;Paid partnership with Spark&quot; — in the first line of the caption. Not buried at the end, not stylized as &quot;#sp0nsored.&quot;"},

  // — Discounts (1)
  {q:"A customer presents a discount code that's not on this month's discount sheet. What should you do?", o:["Honor it from memory if it sounds familiar","Type it in manually","Check the sheet first; if legitimately expired but believable, use the CX goodwill code","Refuse and end the call"], a:2, e:"Always check the monthly discount sheet first. If the code legitimately expired but the customer has a believable reference, use the dedicated CX goodwill code (also on the sheet). Don't invent percentages or fake the discount via partial refunds."},

  // — SEO (1)
  {q:"What's the most important rule for any new Spark blog post or content piece?", o:["It must mention the founder","It must include a video","It must ladder to one of the 8 priority keyword themes","It must be at least 2,000 words"], a:2, e:"Every piece of content must ladder to one of the 8 priority keyword themes — otherwise it gets zero organic traffic. The cleanest content roadmap is 3–5 articles per theme, all internally linked back to the PDP."},

  // — CRO (1)
  {q:"What does the &quot;3-second above-the-fold test&quot; check on the Spark PDP?", o:["Whether the page loads in under 3 seconds","Whether a stranger can answer 3 questions: what is it, who is it for, why trust it","Whether there are 3 product photos","Whether the buy button has 3 colors"], a:1, e:"Cover everything below the fold and check whether a stranger can answer (1) what is this product, (2) who is it for, (3) why should they trust it. If yes — the above-the-fold is doing its job."},

  // — Glossary (1)
  {q:"What is an &quot;Evergreen Offer&quot;?", o:["A holiday-season-only promotion","A discount that's always on, not tied to a calendar window","A buy-one-get-one bundle","A discount only for VIP customers"], a:1, e:"Evergreen offers are always-on discounts — like Spark's New Customer discount captured via email signup. Unlike seasonal or flash promos, you can assume they're live unless the monthly sheet flags otherwise."},

  // — Return Policy (2)
  {q:"What's the standard Spark return window?", o:["7 days","14 days","30 days","90 days"], a:2, e:"30 days from delivery, with some exceptions. All returns are subject to processing/handling fees, and the customer is responsible for return shipping cost."},
  {q:"A customer wants to return a Spark but doesn't have a Return Authorization (RA) number. What do you tell them?", o:["&quot;Just ship it back, we'll figure it out.&quot;","&quot;You need an RA number first — without it, the warehouse can't process the return. Let me issue one now.&quot;","&quot;Returns aren't possible without the original receipt.&quot;","&quot;Email us a photo of the box.&quot;"], a:1, e:"No RA number, no refund. Period. Without an RA number written clearly on the outside of the package, the warehouse can't tie the return to an order. Always issue and confirm the RA number before the customer ships anything."},

  // — Fulfillment (1)
  {q:"Where does the Inventel warehouse ship Spark orders from?", o:["Los Angeles, CA","Pompton Plains, NJ","Dallas, TX","Atlanta, GA"], a:1, e:"All Spark orders ship from the Inventel warehouse at 240 West Parkway, Middle Door, Pompton Plains, NJ 07444. East Coast addresses get 2–3 business day transit; West Coast addresses run 4–6 business days."},

  // — Test Orders (1)
  {q:"What MUST you type in the First Name field when placing a test order on sparkfirestarter.com?", o:["Your real first name","&quot;TEST&quot; in all caps","&quot;Test Order&quot;","Anything — it doesn't matter"], a:2, e:"You MUST type &quot;Test Order&quot; (capital T, capital O) in the First Name field. Every team, every test, zero exceptions. This is the warehouse's flag to prevent the order from shipping to a real customer address."}

  // — Shopify question removed per request
];

let quizState = {idx:0, correct:0, answered:false};

function startQuiz(){
  quizState = {idx:0, correct:0, answered:false};
  const intro = document.getElementById('quiz-intro');
  if(intro) intro.style.display='none';
  document.getElementById('quiz-container').style.display='block';
  document.getElementById('quiz-start').style.display='none';
  document.getElementById('quiz-pass').style.display='none';
  document.getElementById('quiz-fail').style.display='none';
  document.getElementById('quiz-active').style.display='block';
  renderQuestion();
}

function renderQuestion(){
  const q = quizQuestions[quizState.idx];
  document.getElementById('quiz-progress-text').textContent = `Question ${quizState.idx+1} of ${quizQuestions.length}`;
  document.getElementById('quiz-progress-fill').style.width = ((quizState.idx)/quizQuestions.length*100)+'%';
  document.getElementById('quiz-question-text').innerHTML = q.q;
  const list = document.getElementById('quiz-options-list');
  list.innerHTML = '';
  q.o.forEach((opt,i)=>{
    const btn = document.createElement('button');
    btn.className = 'quiz-option';
    btn.innerHTML = `<span class="quiz-option-letter" style="font-family:'DM Mono',monospace;font-weight:700;color:var(--sp-amber);min-width:18px">${String.fromCharCode(65+i)}.</span><span>${opt}</span>`;
    btn.onclick = ()=>selectAnswer(i);
    list.appendChild(btn);
  });
  document.getElementById('quiz-feedback').style.display='none';
  document.getElementById('quiz-feedback').innerHTML='';
  document.getElementById('quiz-next-btn').style.display='none';
  // Final question — change next button label
  document.getElementById('quiz-next-btn').innerHTML = (quizState.idx === quizQuestions.length-1) ? 'See Results →' : 'Next Question →';
  quizState.answered = false;
}

function selectAnswer(i){
  if(quizState.answered) return;
  quizState.answered = true;
  const q = quizQuestions[quizState.idx];
  const buttons = document.querySelectorAll('#quiz-options-list .quiz-option');
  buttons.forEach((b,bi)=>{
    b.disabled = true;
    if(bi === q.a){
      // Correct answer always highlighted
      if(bi === i) b.classList.add('correct');
      else b.classList.add('show-correct');
    } else if(bi === i){
      b.classList.add('incorrect');
    }
  });
  const isRight = (i === q.a);
  if(isRight) quizState.correct++;
  const fb = document.getElementById('quiz-feedback');
  fb.style.display='block';
  fb.className = 'quiz-feedback ' + (isRight ? 'right' : 'wrong');
  fb.innerHTML = (isRight ? '✓ Correct.' : '✗ Not quite.') + `<div class="quiz-explain"><strong>Explanation:</strong> ${q.e}</div>`;
  document.getElementById('quiz-next-btn').style.display='flex';
}

function nextQuestion(){
  if(quizState.idx < quizQuestions.length-1){
    quizState.idx++;
    renderQuestion();
  } else {
    finishQuiz();
  }
}

function finishQuiz(){
  document.getElementById('quiz-active').style.display='none';
  const total = quizQuestions.length;
  const passing = Math.ceil(total*0.7); // 70% pass threshold (25/35)
  const passed = quizState.correct >= passing;
  if(passed){
    document.getElementById('cert-pct').textContent = Math.round(quizState.correct/total*100)+'%';
    document.getElementById('cert-correct').textContent = quizState.correct+'/'+total;
    const d = new Date();
    document.getElementById('cert-date').textContent = (d.getMonth()+1)+'/'+d.getDate()+'/'+String(d.getFullYear()).slice(-2);
    document.getElementById('quiz-pass').style.display='block';
  } else {
    document.getElementById('fail-score').textContent = quizState.correct+'/'+total;
    document.getElementById('quiz-fail').style.display='block';
  }
}

function resetQuiz(){
  startQuiz();
}

function printCertificate(){
  const nameInput = document.getElementById('cert-name');
  const name = nameInput.value.trim();
  if(!name){
    nameInput.focus();
    nameInput.style.borderColor = 'var(--sp-ember-bright)';
    nameInput.style.boxShadow = '0 0 0 3px rgba(201,122,82,.3)';
    nameInput.placeholder = '⚠ Enter your name and title first';
    setTimeout(()=>{
      nameInput.style.borderColor='';
      nameInput.style.boxShadow='';
      nameInput.placeholder='Jane Smith · CX Agent';
    },2400);
    return;
  }
  // Mirror name into print-only field
  const printed = document.querySelector('.name-printed');
  if(printed){printed.textContent = name; printed.style.display='block';}
  // Make sure quiz section is expanded
  const quizSection = document.getElementById('quiz-section');
  quizSection.classList.remove('collapsed');
  document.body.classList.add('printing');
  setTimeout(()=>window.print(), 80);
  // Cleanup after print dialog
  setTimeout(()=>{
    document.body.classList.remove('printing');
    if(printed) printed.style.display='none';
  }, 100);
  // Safety net
  window.addEventListener('afterprint', function once(){
    document.body.classList.remove('printing');
    if(printed) printed.style.display='none';
    window.removeEventListener('afterprint', once);
  });
}
</script>

<?php bh_back_to_index_button('brand-hub-index', 'All Hubs'); ?>
</body>
</html>

