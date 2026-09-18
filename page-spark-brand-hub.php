<?php /* Template Name: Spark Brand Hub */ ?>
<?php bh_require_login(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Spark — Brand Knowledge Hub</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fraunces:wght@600;700;800;900&family=Inter:wght@300;400;500;600;700;800&family=DM+Mono:wght@400;500;700&display=swap" rel="stylesheet">
<style>
:root{
  /* SPARK PALETTE — sage + cream are the two BRAND colors (Spark Brand Guidline.pdf, p.4). */
  /* Everything else below is unapproved hub chrome only — never cite it as a Spark brand color. */
  --sp-sage:#708680;              /* BRAND COLOR 1 (guideline p.4) — RGB 112,134,128 */
  --sp-sage-deep:#5C726B;         /* darker sage, hover/active, depth */
  --sp-sage-light:#8FA39D;        /* lighter sage, secondary surface */
  --sp-cream:#E2DAC4;             /* BRAND COLOR 2 (guideline p.4) — RGB 226,218,196 */
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
<style>
/* ===== STANDARD QUIZ SUBMISSION BLOCK (matches Life Watch hub) ===== */
#quiz-section .submit-steps{color:var(--sp-cream);font-size:14px;line-height:1.7;padding-left:22px;margin:10px 0}
#quiz-section .submit-steps li{color:var(--sp-cream);margin-bottom:4px}
#quiz-section .submit-steps strong{color:#fff}
#quiz-section .submit-steps a,#quiz-section .naming-box a{color:#E0B87A;font-weight:600}
#quiz-section .naming-box{max-width:660px;margin:14px 0 0;padding:14px 18px;background:rgba(255,255,255,.10);border:1px solid rgba(224,184,122,.45);border-radius:10px;color:var(--sp-cream);font-size:14px;line-height:1.7}
#quiz-section .naming-box strong{color:#fff}
#quiz-section .naming-box code{color:#E0B87A;font-family:'DM Mono',monospace;font-size:13px;word-break:break-word}
</style>
<style>
/* ===== WINNING CREATIVES · GOOGLE CHAT LINK CARD ===== */
#creatives .creatives-link-card{border:2px dashed rgba(184,99,64,.6);border-radius:12px;padding:18px 20px;margin:14px 0;display:flex;flex-wrap:wrap;align-items:center;gap:10px;background:#fff}
#creatives .creatives-link-card p{flex-basis:100%;margin:0}
#creatives .creatives-link{display:inline-block;background:#fff;border:2px solid var(--sp-link);border-radius:10px;padding:9px 16px;font-weight:700;color:var(--sp-link);text-decoration:underline}
#creatives .creatives-link:hover{background:#EEF4FF;opacity:1}
</style>
<style>
/* ===== SOURCE-OF-TRUTH PROVENANCE ===== */
.source-note{background:#F3F0E4;border:1px solid var(--sp-sage);border-left:4px solid var(--sp-sage);border-radius:8px;padding:12px 16px;margin:14px 0;font-size:13px;line-height:1.6;color:#3A3F3B}
.source-note strong{color:var(--sp-charcoal)}
.source-note code{font-family:'DM Mono',monospace;font-size:12px;background:rgba(112,134,128,.16);padding:1px 5px;border-radius:3px}
.op-note{background:#F6F5F1;border:1px dashed #B3AEA2;border-radius:8px;padding:11px 15px;margin:12px 0;font-size:12.5px;line-height:1.55;color:#5C5750}
.op-note strong{color:var(--sp-charcoal)}
</style>
<?php bh_favicon_tags(); ?>
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
      <div class="hero-stat"><div class="hero-stat-num">~10</div><div class="hero-stat-lbl">Minutes of flame per 10 oz fill — long enough to ignite the wood stack</div></div>
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
        <img src="data:image/webp;base64,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" alt="Spark Infinite Fire Starter — top-down view showing 17 inch diameter tri-wing geometry, side view showing 1.75 inch height" style="width:100%;height:100%;object-fit:contain;display:block">
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
        <dt>Burn Time</dt><dd>Approximately <strong>10 minutes</strong> on a 10 oz fill. The brand book states that 10 ounces of any alcohol-based fuel gives <strong>+/- 10 minutes of flame</strong> — long enough to ignite even damp or unseasoned hardwood.</dd>
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

    <img src="data:image/webp;base64,UklGRn4kAABXRUJQVlA4IHIkAAAwrwCdASqEA+EAPsFap1AnpKQiotO6oPAYCWlu+F+8Hd6dch1mW/sKAE7LeQP9/20/7bwp8sHx7QVxt9iupT8y/D/9by57z/jnqBe6fAV2IO3eYF7i/fvIX9//Z/1D/Uf8V7AH65eon9+8Fr8d/y/YD/nf+U9W7/M8kP6P/xvYWXk+XiMfKCAUw7l4jHyggFMO5eIx8oIBTDuXiMfKCAUEGUJ38pwxxz6UW+KQFRjDETT+qeRHm0zThjYnuynLhxr4qrH3fcilA+hKe/AgBTrocGsvJIYGJe32nmXJCBktgVZwRuNaCWMjjIxSfVF0KXETEH2vJBwPMH1/PU0nlAYWFky8HUcqvUTJEFV0y1dBsKQHUhMHSHI14ZNFwPTRYEygi9hFLmNs/7vxgrky5fQVHAKRxXVYlaylJTIiXzYO0Ny4MkwXdC4UvEXjrUr1V3iAUNjBtHS1+Ek1Px7uUMAKrR3drFwUhEnhmGZ7vVPxWtNgs7DQ9QHTqdkD2/cJlfbcodqVoRj40I0hpWPl7IGMRtn5YX5ykqUxgdhu5xZMb0YZJPcvhyENHSnydVHWvuouii9qwR4sz9wJgmUBya32y02vAVVXboZ/VTntoaLnqftiqzKAbC2sGj6ijKVYBMfVVQyQkT5T5QKOy7eOGvpMIQ1ue2S3GgkdKPM8CeHlp7/RAKXeshiBYpOk4YG2+DfgjQ55J3gmfDRM4k5H5Hyo14YvGoyiP+Io71ZGgOSMFKhAYl8zWfDRdTQ1q5MUVDDtAIGtloEeIdQUxGHGKDIvq+XcZSUD4O8+1Hjwldjc8Qym9YUw7LehIdXu2CAPlH03K1P5FcCYtXmkeR3+I73csneYAsFqHu76RB1Owg9cMmEaRPHa3bKipusU+Gi/ome62tbPgLHRAEp5+Amq2poEuK7VCrwxetmy1Yo5yEVULeHTgm4/sT/mw2jj76oeIwcY4iDhxW0QsC6kLJF2UEAoILHpMChbcFtELAu9tAnl3iFvls+rJpoWM4iQzqzRbXuGZcj269Yy5wqq2mo/cnAscaTYt3LxCuEGHdA05F34xm+FKCFTFqCCHvDn+adZ+kh8oIF81Z4/dl4jIQRuHXAJjHygfLjEI8cLJuYVx96JgABBiCxJaUs+FKCAUD8hDoP8bsqoIYZnw7l4EaTU4hhSdNVEeNwJ/OozadAjYh+YBTDuXAxbisRI1f1aVbUgswmWJXgMrww0uukBPc8R53RrNztSMyPYHySbxuKjINgNimyDzR5CD4rrWZ2YmVQZcoYRq/wimIahkjNUpZTFIuHUEJjif5jek/ZKV+OgAhEMiVpvod7Em13qUhIEUpOgXhGfWaVydmQD/ycYhRb6XLcByXW14/CQQ6ObmFtFLC4vcO2znx4ekneO361c5K9/mGE0wb9mtIgkXb/nColtrM/CwibwSuOoePRlo7KdfY728fW4ZfAanMwiKe1bNIGKxftvT9WpUOvHoNwNZo4nKPtPON9YIU6ms8pJjqMxcuoLiB1L9lgj8Uza9OLdtn0vGoPopCayVJ+N+7ZTkN/9tnI80HJSi8zdmrZhhCKj+IUZ4g7hZocI609FQk7gmA3kiQl3ZC8lWqc3SHDSR7zKFw4mc/sen4TpBDhkQuFj5QhLnRH0Zw7a6RMralzMo50QB4LhFc97M8c/YxTTsvlfXp7P6/XGGamJUTros+4YcH4jU91e8QmMYBLPmFxxzLdaP6RSP3oytGeIyZhmXeGu0OT/KBdVt1ZhC4YnCzVYGvDTpg5Oh8JreVMzB2f8/0x0YGtQrqpzFVTscrhTfcdD4agoqRjP4gQ/puBumKUBsBHwYYx8oIBTDuXiMfKCAUw7l4jIPQK9fj0v2GGXiMfKCAUw64AA/HfsNNQacAAAAAADx3fuUlFMyxtzZ/T+cZZEr8GxSfjI3uSiSTKwvO3scu8UsCeflAucXYzR6HPdnFOQEYSlZqJKbl/yoebN4+oLtxlvm8J0SbJr4dGjkPKOA/aPnBWBt/JZdrvLJtoaBstN5vd2830xQmmy1NtQiBt7QXZDz41eb2QbULdhhqmBS4pNHe7/NLRr3rNBraOwg61h5vf2UuZDMyrjKHpI0uDleOoa+8YIcGpVHT0b0k97155NcUjgFCVPXISLRdmwyoygoknj3WKD21445/FXIbZpjIraJPejtLFkaawmyH0tZSr3gWE46hjiNHv3YrgWodwMYjEs3gLIJYRsdafSi9u1H4P1TjNnGdb5SpbeWIqzUEfMKhChQhv2MhfAiGqUdZhYasEyzNCpYbxPVyOhC13SDj+slLVD63MONXavQGFTZlLYOTNIHB+/M8XOfM82yO75ws5kMtQBuZ19TVN2yXbboKsTpLw6BF/kjQEsXjtzmPsKM8WSPOIEJX7yJijWIRzzxDNOQko9Gjk5hP3W/xD0gYW9J9p7Xyle4t5RZj8ezzFY2YuKdipS+fOD9+JQxn/YK/aLFJjCZPp9PmyAH+b5rqW6suhx2Qbpmuj3y1gzNEp9M4MOV3yf9lkd7s5UikwW0Vtdz+lUNRznOIT6fELRdIEmEA4Chon7ljSw5q3mP/iskE8gjOQ0+Mu6+s+7D9G6Ynm3GN7KBQghtffju5Ykzyq9gpGjSOky7ZaTdMxAg6/ySyBuhkiA2I92kijrwJj+Vz6qUATpEHRDW4yBtbpgZpG8/JLTkXBNVyHZ1Mj9PAOLKxF2I5b0Rt/n31+k+s2ncPE34i/PI56EjLymePaDP9+KbzgGw5dNGlSQD65VpN0pj4cIF27dA8NbG3hllvJy2OPK3nauFDEOgjv9BYY10kfJAsWeG2uuxhdECOBBIfoDLHzBB0BrcDT8D3YDI7WVP3mrbHvpeUtXBLWlV0DDEHniE2QDs965m7vbO5+W3Ljlcr1H+8b3IU+OUGeGmit7+oRaIOdib3H6itIcA5rexb4VchDGVGc+SriEEpI2egofrUc0J1eGKKCaBWot6aFdX12A/HM+cgKnkcO8EbzzLxMeslfyj5LM4o1A6hdDVzn0+OkMOOdVsbpLQBiGqnxVhyEJ/io+VGKpTTMYa/3qpwqgdL6WFMx+CWuF7FUxPvFOEyRgvcjzRlz3HNG+I0iDb8AaV+8YxwzdZm/ciEj/aE8nXryrXPdYJPQd5c+X9kJ8WY3WUGQdC9RlqnTjD9G1skU8aR8pcrIV4GxwJKfq0kB703uQk52//d/uHowFLfSEMMxgUbU+n/ohRXoPxx/CapOoMr0MSz7DVrprRR9+bSa1VJxm2UTzMy/fT4iJXIjrXxYaHRNg9wA6O5qD3pfA+2UHmM67dG6xWBX/TzrxyZjm++7WoH/xW3tmu3sA3DCNDq0hsvTt/c+LqGC2YKJ+aq+zPIVFyFbyGylKjWNkBQZHo7Q5vAp+ZJjdIFQT13ShEIuFIRUSGgJVzP9BtelgyJVixmbCwpBsHJ6kUa2Tq0WEstKnMW9NC6/TOKHHwHacvXm4wCCHUC6BlUCx++LNvKFfkVYfkfD1R94zab8HJd1ZCf7Uk+VEN2CzQsSUAXpezeC76qhfWFQRqul9ANmqWAXY9PisaqX5SA4PsTXscCLTCZix9tu7orRgpGmi+fnr/Bg0RvQNNSY5FOw2o+qhAgoW+14/JO/wLf31JjNVFQwK1UOT0h29okiyQhbtuVnzV9FTYa6c3ogntkVQDWtN+W6JYxj1oYChFodyMEkYxqI6sNE2lYwDTeoPbsCkHkQDLHjt4JHtDGfHQltdCHFsqE7X6gZsdbIE/ndihv6fdN9F7Y6iG7sbe2Xh7CwznLQx3+Syk9sOdtsSJ63+IQ0wJ/G6LyY/wwggOctgOYwKeW66KxkU4r7AA3Rn6GboT6HV3M00mhAbwyvWnAi9iC/DvfmxbNZDYM4EiaRLfKi3vHuiGg0Mv+wcXt7Ze9eIcydGz+0L9HJaEvY+HeU1RXXAnMMa95+bdSUvMfaTnb8JT+kvfXXHI97XJWpQPxfH1JBTVoI9I6G8hMehS0+zdHlNUzOfLstHEb881K3CN3DzS2R2gMsdqnLOMFHEZNFnKEiKZjwNzYycYF56nb2bYHdcPCvRD0RyXQ9kwIBF2jzIwY7WeDXQfmO1+ktgl8jJ1e/0VbHoZQrJHnNPZekPCtjefuPS8QHUdM1sAp9MT3oXxGLvPOWgokImP8P9CFoZ3uJjG//P4r+z6+YcSbi+K07h37/U4nBss/u8l5Weo32GjRXWj+kCRquJsXuqHB6tD5PApvSDk8iaMjkhpwq7wGpxvei7Dhw6l4BZ6EzOM2Slwqi92vvWjSaN6xOwintps7gHxNZuvgcfdzEto8XcCnDXr+OeVGTwhO6tI6U2A7rgdv9Ztn8Hhkkp1uyo4eUg0spr/ixX+hac7NGypM/CGJMql1Pd+9lYZlOUNaA7iG8j2Z1MD0eUSYiZ0a11UcGQ7fz+VcRW45Tb2UBGNGf/JfZtHuPp/uZc58dex0Z3lsczJ5gjty643oASmjfmjqo8tycPIltHLSAc9KzRxmu5OpVCmM9b3CA9nmo5bhs6CK/zD7rhC20PtNfEt8eMio6Vl981eMjg7ZxTBKhrB1MQ1ydn2NQsIXxybcVl7ni5PuHgvdQEHb05rOIcNqGRKTH48ZLgVc73J/xgYg4R+kq32usr+6Sb5F1qn20R9CMbL/dgduoYcGwwk+DswNtFFiWWOTZeK/tw4M1PKmsOL0et9rZnurRdGYRwsZlgTJz/bKWH2TkDAlnZBMPBUpSScr5yTeFMuuqFC32rGwuteWXFJJdGQRyrVr72ROFLqkmpBa8NjX7o6hhAxqAPDX1ntLbxn/osrvLRcSpoj3iQrp6PrTmlLSbEvw6ADHQyXFBMuYnUuMD2qV142/0EL+dZh+B05mmcPcfhsxwrJYrciRhn69T1l+quNIb984ekd/oKUylCWsTiKieoODBgm7r8M1tlf20xohVw4lSG3msY+x/UBApz3R70dcpByRL7WRXUUyOxs2MUqJARJKGYfKjjtnpMdhxzxXlsLYKWp2AjNMtkQPm8bBX6zGI0k4KVzwJ/sVX0wI2m9InpnczMujaAYKhhhlHdro+e1fi9I5HTVWDLe7V/KxlMJLNCin+Vma7sgOdg0kq3lrprCAgMPANNYc7MLYr/KV7+NKG38RDicifd5q55mkO+meyQy9cCLUR0VT7VGf4NsWljrckicxmdl/AvSdfIFUtnoAIpcCDZkTpvLHeIIy+/J6/qnSQq3cylC7OP2we+tk4lH8NOSWcH2CaEO3+mUxRn47ibA1IYUFM7rTZv1uajNnpitVLo6LZoaPXTXZ8Os87DgbOWLcYCLTQAtFdnkUSHw3CN60KGMhwo/tw0OjdUejzg7zxa0xi2+8nMTieQtXJg+czcTTTBJqkX8QvnFKlHQ5goltPJdgx1vPOjASVImzmBtOAfaVmBcMCPB35v2Gy+Sdf7OWHHG+U8jM/qQl95yEzfpPnUcaLphdwrTZlMVPc4hGf1xLvXApz3hsww5qnNexsLSrfSF3nlGks7qTpKhllTGpajXfA9hftSMf8t0mhwdjk+MTwgVZzBnZF3JNkCu1CQ6xRp4ZF/ZqhI7tzB4udhvq1aOa6JlG6oH9LOBmLnN2r8Qy8bRf8fwYZJF87PFAzfn0qi7G4YYb8qDvMkg2wTYgJ7iKk8g1048cINQFHV9QMrWXCwV3rEiw8QNgx12hFX6Rdzwx6wKwzZ78Td2vI4ep+/xBpssPumjD7I85+8Lm0GCW6SrRU5WuVyQEDzBUw/PgmrjC0wXnG2sI9G4YGCfqPjFSWcbbl7lR9T/r4A++QH4bEgRULhaKzdjLsvsgtc4g+Upajg8xrjaNEtCNiyp8b8R7mubRjkmZG8o/0wJzTMiypVBq1LA6tiD3dyn2qKsX1HI5ScquHZ1phEV0a3tPT4KjE5YCUKAJOCB0btkDqo5h1cBp9YTVi9O2vR2u9ai1KF9tuaHsdsksWLwwv3Fi6Pd6705rGrSblY6dn3XTk4gN1mrqe2bp66O89dt6I1OIz4S/oDdrk2VjqafmmUX0CLnl1rOxW7qDxves/zJtg45qmEAE5Ju48XGPhjeKrAdJFAPGWeM6ASv3VPfTT3vvKkXVNax9aIVYcsBx+P4qE1N94nR7lz9kF2wNfFojLNis/LcFrZD7PkT7H2PXHtciKPtIE5G8oI1/Hikrai1kW7KZ3+88chdYttGC0NQGy0IOvKzn4hguBgpUJggtQJyP6p5ChbLmcuIDO056KZpqb5RUrc4h+SC/yg9AhgK6MYZqnBFk+C05B5QMt6TOOuklN/5/JNGrQs3Pm0TD0b8AU9JG3Y8P4Zv+g6neFBx8KyPMvUEspCNflKzguN6yuO5qFixUtKY4lTaH4kUDUzrnm/ZAWCZVp6g7pv/KDfavlNukZigqOfDGkdA7jaNvghBUIewh2UM9m21ZJFR8fCMtwAnGMOpxeI3m+6TSi2h2Zti+M4uRPFOfJf8zuqzTA3+Eu3tk72RjYvrbDrTtYPF1fnrhjDEKx5IqTSwjro50aEvlp7RwckWLEH6QsKK3OcBwnl8GklGcb4B0yBFQkwCp8PfgwsbM8dw6pgDEhCujYvVzGBfq+owrWhRo9eYML5Fk5D6G+wJZtIsClOzVg/ihbH3cE6OqUy5Qh0ZUBRXYxyZyAzY0iQpcWM5Md5O7wDHLKfRIpvc1EqHPTB1Y1H2U/Be9LiYbzF8OHett0Mg3599AyBDNtVLJFKv+ubT+A/3BGytC5kHIoeFzOcUWe85THQ1ff2fsGoCsw9W3fR7m9HFInUb2/QEPIDNUYwAtCnOVQPQabbvgYgH3sMZ6Ym4IvcPA8i5KYqVeVsMqfzf8YNC9s2wDTuyLQQLsAaiAAWDCz1p5pWbOExmhvoV70Xh8TQirvfQYK2CunF1ET0eg8325PKGyNlWFNndTMPPZxTZZMYznY9ei2gU2I9IHnmDXdde352tQ+LV90mnqKi3IyNcs+VZ3p3XITESDHjuT+s0ifoR9XCMi/K0W0i7iZ0XDhvXjkf2MubZq0oIyOgWUIUbtNV0GPNP21RHiyd4WZSFCwFzsXOh5hEEwU6WfrcGuVZ/y/1+TiRTz7rgBrr4/6aG7lEXBeCEx4YllxEh7VRKupud7Psq6XwDSkP55+ihsUnltlZTjxnASeVkKTTBF/hIRdhO6RjTjhzF3c69O7Tw9b/zEv6VENjkmhWs6n9L6AVO5AS9VZ8rbNH9QmqqaG7GL7MkK4Vhb+Vdf68W1fVvAzdfD8sCqZEZi+cy72eTVhxKsbe0eols3jfaoVezbdyznuMa3h+i+oa37EAMFky8J6Bqc16o0pDzHfQPgRWtcifPYBUp0DZxZ481GijVEgbjghvJuSTUfDcxAYvaUK3P7p1LI9GbWdzU0zWuMDRW0bCTNq6qYq+fOGb68veMB9n/euCEEk1Q8R5kWpGpFv6eLsojACvj1J/bc5/3+k8GzgCSGzX2F/ZoJCdtTZyBOv2C8ZD0Gu4fNshoQ3iKctWptw2znMgmADLdSbD9NvFaNxTrGwoy/I7aq3iWliU8CCRPnRTnY1FE8KS1mK3gqFn0XDj/HqAfJ7xrF1+yU3/0LMhnAg8fOMuaYaW4iz7mpeadhh8LGfbyzmDR3e5rD38sGKToX50MDpHCNVYgY370QGCDUU/1V0YJxIgPzljrObd9jex9eHyDbAGDpBYgABZVauDEhcJmZmsPDQSb0aKdIKHpYgopY8B19RuX6aDE2K1+EqOC3sU18DHje1I3BUxj5KA/Rub9/u+MVU9QiXnYK6HaaPgXRdKwlAblE8Vz6BY7R7YkbXvMwma3nFwChyeu+5XVPzQjxEOWwWBWf4ksN0vgfzE477hvoaW+J6gCdWnKhtOWIYqHztnv6nam1x2lsSRXM7ngPkybkGjxBi39j19CcNfYmJPMlsLJZNO2VNAQpnBRix4egDTS4b03MAso8BLgRiNTrOjt9ydyeQ7wzUvstNNqo3UUoCcjQ7iciVe6+Gnv7K7nLnOWRGrFnTE+nelcytRGAwO263J48IKEOdT2bIETag75zZGy5vtK0uOA29HJbx2gxdch+SDU1j6pcaKwgdvjmMjRB5gEsH24xFhxQjR2ldiDoVitkq7lg+OtqSRBMd2LelnaWa/CI0Fasra44n4pVA5VFLD3Erp+q2cMYiiCil76R0/qHFZb02hq0QqhW5U38V6EorcWxqoa2DrjxsAYnqit6AsjZQG3SkV8fNYhfqJmJxBBoN1PfTuxyVRR0qaUaTNxjnd7mNCXd+SqgASKW4SGIgGgxqhiBkTBTkn4JflqiXtFAWVBk21Wp6YdrltUyIe5TKltpA5qcytNVYZzItKRLDTBClcF5sMID2xwvLBe4jgwVfpR4ag0Zehi7IvkWUuKpBQpocWguqCm9fmTHpaLGm576bmLB3/+ji+29KG57fVIEElpifKIQyXLz9EV+NNn6LFRBVFVuBUDfnNBI6SDggfZ8Nw+7rkKTUn2nVVJ+WR++vY5JRavriMlRs1OABkVGu+bNM+v8umk6F7jqB4oN9mGni2KqWRAH64BhtW/VRhdcWHWOlGYr/eNKdY4ka9kwsKk3Ey+qbMT4Ynvw5R42G/CDT4nFTPaF7JBuSgG6DyGSw3pMIBNsSMKZsHzT2VSXDcb3quQxHZgLJzvEml98v4Txx9yKPuRqeaah/tEDQooco1jkxHxsZe5/jEmpQjpddxWPMoSvQSqIuSngp/i9rQc0eHT7nn//22RIwwplXo0zFs08zfg9Cfu2/XcXIUlLwY0P3ma/ol/6ZHukBs+YDc2zCN+fwN9QD7n/466rEhW7K8WQnBsHrDRAIJIynZl7NPsGCUobOHzHWDAoKUylX12GS21fMr+dCOfieZlTDzWtR27abZGALdjVB9fhEJYfAAa2ZsfPBZLhYd4GJL8GtejidcVn+RGzXcKXgl7wqpl9jYh7eo/rvFNccOePPMp+rhHqivKDSyIIT/3/fdymytnCPxTG7FiaaqMznn4fonAp4o3STBVEDVEohueIClxe4g7h0NuKVk+dXSCdWv2ZDlJvolhteTnbHUcMZ9Q7Tnhsu6kxVh1SBV4iPBejqyqL/aERjuojLnKAUZ3bRRp6MPisG7KzIQIGDyMrUP6w2C79HFEwDSUKvD4LDm/OeOCbfS61ssMmtyOD9kkmODQdYlSyACYnxsrujEV3Gev3N9vyJ/BhVwf5B2p69DIaSWjukaOqgccl+2MG2UoEXqncj9j1UHEUt+4Ehuoc++pvDGksmeu+yPyuNyA/lsgfngZFuNnfxKKvPngBPqbfP9g4iEAnPYrlmCngQxRPHYbCC6poPt4nx1Yf7q7Cir2L6aivQb3QpbZEeJcMvryeY6hw3p+zbTGdVwvTulHuqmcUDU68RrTOErCOfaYfZ9dI5RBj8WnVAvc5AnI1d+s5ayB3p2Q7r4dfx0M3kzdMTH8ac4t6sJaNTrdW5r22InjOqSB1Q+xqJ++Y++bSpDDv5v17wfncB/J+8/e6zMO4JuYPPMxFrE+Ou3YBKEqovJLEYpejzXMcvWJOMWgMJnrRpBWwDDmHr21HZyMF1X2NeCgAE0bvckXmEoAu2QCCFy2bNc0abJRiRmaeId3i3S8WfNkFzlRccjZXPohoxm5PJRJXgRlX+Rjg23CNlkv3KpOHj1dTtHfljPLQy/t7f8uZfjkNrR8y8js5Gipphj7GBtDDrLgWTLPsdyhZG5+2Jznr/fTlPRPQf9H7Sppz5flWwIHDCVoNbXZi53kXzPl2uAzgrm6YaEG3vE9ycVZXFjo4mXLVRQyFILc2bpaDJsozNv7nKdlgOhD4BgrqcxSUtVLOp3mm+5+vM4cGtTopAQ/LXSBuc0VATqxJLDvfHaSbLo+hd+JxcrmLUlj12QvtSnFwZevUM5ElSOOtbk/QS/DN/dm2v4+MJSPzcAbvG06cW7FHt7sbDr1kFth12KuKoao5yOEUNOaokhXGX+Orx4Q4gsyw/1gF9Gy7F/rRdXqCwhoLZcMtP4d14bbkFLygceV76n5CfEeU1v2bxf8DtsjmD6sYiHMOc3vRTGGkR/H8IGJ3sRL2l2dVZppAKwKD9A3bMO08tlyFfe7+aam6ySGSEy2kjsXPKGmFxXYerbzZ/es/M1E82YSETpHRIDuvLctbKthrykGH1AbT9/EBBsjd3QQOxliSKPs1EF3xM4ga8n5i0CGAzBnsff1C1iAPCTQElGDXG9aKcez3y6zzj/dVmqLpsU8lIwCDTIRzvHnDoW5kvm2MASv7Vb3GJrkRIob+zINAQeqpWzpbiwmi/agew5Sl40/IbqfP3q3Ysfpq0tuv/o9zGELYxnsSrRlCIeFk3baoHept92BG2QXDiP/UQ4t4GP43CHqm1Owyv4VW9Q5a+VwI6evYQ6ULMWf3pnkh45iAAfNDKawQ8vQwoYfhJSQM1voSK7UNKfV46LxsewJXU+mgAkvQqTQIY3erFEodfzQvnlLOPZ3ez6tE2uzSoVIl2g1yE+kgz8GufH6Wp4rfWQB3N0gq/WYBygIqp0nlexG9SghhN/PZlidafEH5iKNDSTxRayUvfghK3KZYUXQ4bNGebGH7sce/HxaDx3wI89UL1tO51Vv1kvIkHoyONBNlQ5rO51ADuyB3//no50oyCfuRHjUNBUfyb3cu5+DtL9oOpozM5XMR4dIKt+rtTMst/lEABwgeiosOfMvxTRK0Ns0I5k1Bvb/aUudAPRpuuT0NMPUBRVAud6ZbH8a7vukpwwpYOMN7mkg9pL4DrI++w+XvsB62XY2j5FMg/pbgGW5qhngOZMPY0BH6lId0zL9l45zSOfDfpTJKJCQhKAEuTL9QGgM3RK/THCuHA3xtV+y0fJUGbP75j31UxxM3fmcBg/2S1K8W10y+dAZu6YBxKMfxKpX1U8X3f/nyNqvJNLdagLi2aYy3+OR228nEfWweYxyerx5aYWlmQDz6XK3u3MkAOPe/SB9NY4fyzNXFyuT/vxvvdMtX6Xn3cFBNAOprfK6mp3vCL2Nt20DDuQpVzuR4+y8CYYDirUOFeu/Vblu1kmzohzx5JcIetPUOWsD/DzH4KYIqQPpiwyNnuTnLPtirSBXq2f4eIAVqRdq9iQhHJ8m3TrKgm6epmCUq8KwQeLzv8Nk7xgNAMdF6N4RhvYzbfKEns56hwg+O0vxXtJyKzdeTYbe9aJ4CiwUVhz/hdniQb9N3A3ysZYRadrejUQ2oLB2ZCkDk6FRmnWwBsB1APczJcUBBVOtfb2Gjwv8b8KaVE9gIYiPKjTovbSZal+63yjF/cMKWzoORXiD4rERnRM+ROp3TaCMJtAXtkE+oUCF47vi3FT1EsCiFoi4mLQiCOfgnmlbp/W2I0OhfibmcYWv5fxS7GofpxU8iGiYM5fw6a/MxocNBjTyKBIZGFNKzwQO26ueg01/4KanrQPilDFvcpnZTnwdVnD1NzZoI6vdXnt6fWfuOYbn4KJLbd5TEZ/8/FvVb9gWdKuAU7GmhUGBJI4GKLsRji7xSwhRqlwgxb10GaW6Ruo4XM6Azjs3NWdYn+yco6oPymSb57QP7+ikZL2GbE9kQdqv22GVPQxgF6HwDOWJwjU9IQUqd6ShsnpteGMLE9+uG5oQCUo7Cn+jloaZZPJuhWzVBGA5decsCgWEq8Hrfyzj6Pr6d3HMRWiIlaBePJ5r0KMkwCsVcGty+4AsKoIJyUEfXrjTaoydzJj+VsVazPtea298G1p81SpgisQBiltBAhQBoFHwbjDZ9H8yNvYfmrVGOTOaPglcun2lejkpRvuJAAAC604mSwQyGB0G6a5ci9a//dk/pfCzsAQQxAGunnn0Ye00YBgUNiAjseyIvEmDqMvLLIMEjg3+hVGsBIMVMRPufDPyY7g9neZ9OvZIhwQbL+rd5jhCfMugpTZkVtoOMHaWp9GmkfMi2UN2vdMFC4NYDWzF1+hlVZ307Z3AM8uw09IJvn1hfb8c3p5GUVvA0hiCEB6Fg8pKFVVQPknvqg0cMl1G8gXbtFBe0ASdMXtHK5HFKDdyTU7NGuL0IK79NF0kNXmKKJlzMyZKQA3sueBGIgOtCjblZ4YW527gZIQ4ijhgA45ksgL6bvI06IGoIdB0e8qWDyPj75nUM3IXN7HogJaLBGC0m9N6ro/G3VOGJ4yBA4cwDWWcAGsbqq0ufcfiDDjGXRn6C05oUw4ctVZ24Lml8TQZzv4v7kedwLsJh+Xhll+z8+figXif1Cy+487ZntTohs0NXvPCrnA0Y3z8emPg3aCcDSR/Rz2JCKMtcYHKw1CFtDIAjfBI0R5nLTUReauficN0JR/g/IVJUX22zpiqTGWjoHC4cKZw9zuBcLz6FiJPYgWVROq3c4i0Pah+R0MWDXot588STHgRs6GNVD9GIcwgAAAACJo0wOKq4AAAAA=" alt="Spark four-step how-to: Place Spark wherever you're going to be building a fire — Fill with about ten ounces of alcohol — Build the fire with logs (log cabin style recommended) — Light the alcohol using a long-handled lighter" style="width:100%;height:auto;border-radius:10px;margin:14px 0 18px;display:block;border:1px solid rgba(112,135,129,.18)">

    <p style="margin-top:6px">Customers will call asking how to use it, especially in the first weeks after a holiday gift season. Walk them through these steps:</p>
    <ol style="margin-left:22px;font-size:14px;line-height:1.75">
      <li><strong>Place Spark in the fire pit.</strong> The arched legs self-level — no need to clear a perfectly flat spot.</li>
      <li><strong>Pour ~10 oz of rubbing (isopropyl) alcohol</strong> into the wings of the unit. (70% or 91% both work; 91% lights faster.)</li>
      <li><strong>Build the wood stack around it — <em>log cabin style</em>, not teepee.</strong> The brand officially recommends log cabin: stacked, parallel rows of logs forming a square chimney. Teepee/tipi stacks (logs leaning together at the top) ignite less reliably and can collapse onto Spark mid-burn. The Spark logo intentionally evokes a teepee shape because it reads as &quot;A&quot; for branding — but the recommendation for actual fires is log cabin.</li>
      <li><strong>Light the alcohol with a long-handled lighter.</strong> Never lean over the pit with a short lighter or matches.</li>
      <li><strong>Let it burn.</strong> Around 10 minutes of flame is enough to ignite the wood. Spark stays in place during and after the fire.</li>
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
        <p>Pour, stack, light, walk away. 10 oz of alcohol and about 10 minutes of flame is all it takes to start any fire. We removed the hassle so customers can enjoy the fire instead of fighting it.</p>
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
    <div class="source-note">
      <strong>Source of truth:</strong> <code>Spark Brand Guidline.pdf</code>, p.4. The guide specifies <strong>exactly two brand colors</strong> and gives RGB and HSB for each. Note the correction: this hub previously listed sage as <strong>#708781</strong> and cream as <strong>#E1DCC9</strong> &mdash; both were slightly off. The correct values are below. The six additional colors the hub listed (Sage Deep, Cream Light, Charcoal, Ember, Amber, Steel) are <strong>not brand colors</strong> and were never approved.
    </div>

    <div class="palette">
      <div class="swatch"><div class="swatch-color" style="background:#708680"></div><div class="swatch-info"><div class="swatch-name">Sage</div><div class="swatch-role">RGB 112, 134, 128<br>HSB 164, 16, 53</div><div class="swatch-hex">#708680</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#E2DAC4;border:1px solid rgba(0,0,0,.14)"></div><div class="swatch-info"><div class="swatch-name">Cream</div><div class="swatch-role">RGB 226, 218, 196<br>HSB 44, 13, 89</div><div class="swatch-hex">#E2DAC4</div></div></div>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative · Color usage rules</span>
      <p style="margin:0">Two colors, and that is the whole brand palette. The guide's own pages demonstrate the intended use: <strong>sage as the canvas with cream type</strong>, or <strong>cream as the canvas with sage type</strong>. Black is used as a third ground for the logo (see the logo colorways below) but is not listed as a brand color. Restraint is the point &mdash; the calm, grounded feel comes from the narrowness of this palette, so don't widen it.</p>
      <p style="margin:8px 0 0"><strong>If you need more range</strong> for web UI &mdash; hover states, dividers, warning colors &mdash; raise it with the Brand Lead and get an extended digital palette approved <em>as such</em>. Don't quietly add colors and present them as brand colors, which is how the previous eight-color list came about.</p>
    </div>

    <div class="op-note">
      <strong>About this page's own styling:</strong> the hub's chrome (nav, cards, accents) still uses the wider unapproved set, including ember and amber. That's a styling debt in this internal site, not a brand permission &mdash; do not sample colors off this page for Spark work. Use the two values above.
    </div>

    <h3 style="margin-top:24px">Typography</h3>
    <div class="source-note">
      <strong>Source of truth:</strong> <code>Spark Brand Guidline.pdf</code>, p.8. The brand uses <strong>Gotham and Futura</strong>, each shown in Light, Regular and Bold. The guide's own specimen block sets out the hierarchy explicitly: <strong>Gotham Bold for headlines, Gotham Regular for subheadlines, Futura Light for body copy</strong>. The four-font stack this hub previously listed (Bebas Neue, Fraunces, Inter, DM Mono) is the generic hub template and was never approved for Spark.
    </div>
    <div class="type-spec">
      <div class="type-spec-name">Gotham Bold · Headlines</div>
      <div class="type-spec-use">Headlines and hero type</div>
      <div style="font-size:2rem;font-weight:700;color:var(--sp-charcoal);letter-spacing:-.01em">The last firestarter you'll ever buy</div>
    </div>
    <div class="type-spec">
      <div class="type-spec-name">Gotham Regular · Subheadlines</div>
      <div class="type-spec-use">Subheads and secondary headings</div>
      <div style="font-size:1.15rem;font-weight:400;color:var(--sp-charcoal)">Built to outlast the pit.</div>
    </div>
    <div class="type-spec">
      <div class="type-spec-name">Futura Light · Body Copy</div>
      <div class="type-spec-use">Body copy, paragraphs, product detail, UI</div>
      <div style="font-size:14.5px;font-weight:300;color:var(--sp-text);line-height:1.6">Stamped from a single piece of 304 stainless steel, the Spark Infinite Fire Starter is engineered to live in the bottom of your fire pit and outlast every disposable starter you've ever owned.</div>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative · Type pairing rules</span>
      <p style="margin:0">Two families, three roles: <strong>Gotham Bold</strong> headline, <strong>Gotham Regular</strong> subhead, <strong>Futura Light</strong> body. Both families also carry Light, Regular and Bold weights if you need them, but the documented hierarchy above is what the guide demonstrates &mdash; follow it before improvising. There is no approved serif and no approved monospace in this brand, so spec labels and eyebrows should be set in Gotham, not a mono face.</p>
    </div>
    <div class="op-note">
      <strong>Licensing and rendering:</strong> Gotham and Futura are both commercial families and are not loaded on this internal site, so the specimens above approximate weight and role rather than letterform. Request licensed files from the Brand Lead; do not substitute Montserrat, Jost, or another lookalike in brand work without approval.
    </div>

    <h3 style="margin-top:24px">Logo</h3>
    <div class="source-note">
      <strong>Source of truth:</strong> <code>Spark Brand Guidline.pdf</code>, p.3 (&ldquo;Brand Expression&rdquo;). The mark is the wordmark <strong>SPARK</strong> with the descriptor <strong>INFINITE FIRESTARTER&trade;</strong> set beneath it, and a <strong>flame brandmark</strong> standing in for the apex of the &ldquo;A&rdquo;. The guide states the logo's proportions are <strong>built from the brandmark height</strong>, with the full lockup running roughly <strong>6.2&times; that height in width</strong>.
    </div>

    <p style="margin-top:14px"><strong>Approved colorways.</strong> The guide shows the lockup three ways: cream on sage, sage on cream, and cream on black.</p>
    <div style="background:#fff;border:1px solid rgba(112,134,128,.3);border-radius:10px;padding:16px;margin:10px 0">
      <img src="data:image/png;base64,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nz+fiA4fPnzhwoXNmzc3NjbsfObZ/oH+2traG2/cduDAgdbW87feuuPEiZNnz7Zs2XJ9XV3N008/45y7447b29vaACgMA2vjF154aeGCpmXLlsVx3Nraeup0S7FLxph169Y1Njb29fWp6vPPPz+nsXHz5s3Nzc3HmpsbGxo2bdpUKOQHBgYPHjxYiKKG+robbrihp6enUCgcOnQoiuJlS5fOnTtnYGBg3/4DK5YvW7J0cXt7JxFVV1UdPHSovb0jm82uWbNm//59zomq1tXVXX/9luHh4aGh4X379lrrNm26rra2tq2tvaGh/vz5C0ePHtuyZXNdXV1/f79z8vzzzxPhDTfcUJbNOJGjR4+2tXU0zZ/77ne/68iRI48++uj73vf+559//s47X/X2n3vHwMAAjPZ6XF1QLdI4FsvWXIFmfUl054goDMNCoeCcjI41TB68a/f1S5j7UVSsXbl82dve+tb5c+a4OF65YvlPvulNi5qa5jY2PnD/fZUVFbkwvOO22x64776btt+49fotIG7jhg0333QTIYq1123Y8DM/9VP1dbWNDfWvuffeskymtrr6x1/3upu3b7dRYcXyZTtuvummG2+8+Zabb7vz9gULmlD11ptvef0D99+0bdtNN21HAutiv3Ksqa563QMP3H7rjrtuv33F0qXg3KYNG376TW+pKi8DkevWr/uJN7zhpu3bt9+4DUQybNauXv1Tb3nLlk2b7rzj9vKyMhdH69euufOO2+fNnUugO26+acvmTfe86lXXb9l82y23lGUyztrNmzbevH27inNxHEeFGzZtfvMb3rh9yw137Nhh47i6pvquu+7cduPWe1519+aNG7fdcAOp3n3nnbfdcsttt926YtlSm48aauve8uY377j55rvvvKu6qtpZ6evpXbt2XUdHZ3m2/LrrNm7avGX+/CZfU24Wk6Co6RPi0PDwsePHFRHZ9A0OvfDSSwcOHUI2F9rbTRBmy8qPHjve09uXj6JCHHMYHj56dGh4mIwh5ti67z/1zJFjzZmy3Nlz5zgIgzBz5OjRfBQjme7e3orqqv2HDvb29QaZoL2zM1tWdvZ8a29/34WOdlVg8gWwAJGCMHxp794gk42dGxgaDsKwt7//2ImT2VzOZDKnz5zt6x8YGBp6ad/+QmwpCDq7e863tQvgwNAQEL+0d19f/6AVHRgcjJ11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" alt="Spark logo lockup in three approved colorways: cream on sage, sage on cream, cream on black" style="width:100%;max-width:680px;height:auto;display:block;margin:0 auto">
    </div>

    <p style="margin-top:14px"><strong>Demonstrated sizes.</strong> Rather than stating a minimum, the guide shows the lockup rendered at four sizes &mdash; 90px, 70px, 50px and 30px &mdash; with the descriptor progressively simplifying as it shrinks.</p>
    <div style="background:#fff;border:1px solid rgba(112,134,128,.3);border-radius:10px;padding:16px;margin:10px 0">
      <img src="data:image/png;base64,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" alt="Spark logo shown at 90px, 70px, 50px and 30px widths" style="width:100%;max-width:680px;height:auto;display:block;margin:0 auto">
    </div>

    <div class="op-note">
      <strong>Corrected &mdash; the minimum-size rule was unsupported.</strong> This hub previously stated a minimum of <strong>24px on screen and 0.4&quot; in print</strong>, and a clear-space rule of &ldquo;the height of the S&rdquo;. Neither appears anywhere in the guide. Use the guide's <strong>demonstrated 30px as the smallest documented rendition</strong> and construct clear space from the brandmark height as the guide's construction diagram shows. Treat any tighter minimum as pending brand-owner approval.
    </div>
    <div class="op-note">
      <strong>Also corrected:</strong> the previous colorway rule named &ldquo;sage-deep or charcoal on cream&rdquo; and forbade &ldquo;sage on cream-light&rdquo;. Those referenced the unapproved palette. The approved combinations are the three shown above, using <strong>#708680</strong> and <strong>#E2DAC4</strong>. Ember is not a brand color, so the old &ldquo;never ember as the wordmark color&rdquo; rule is moot &mdash; but the underlying point stands: don't recolor the wordmark.
    </div>
    <div class="op-note">
      <strong>Reference images only.</strong> Both images above are screen captures from the guideline PDF, included so you can confirm this hub describes the right mark. They are <strong>not production assets</strong> &mdash; request vector files from the Brand Lead.
    </div>

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
      <div class="objection-a">Yes — that's actually one of the reasons Spark exists. The roughly 10 minutes of sustained alcohol flame is long enough to drive the moisture out of damp or unseasoned wood and ignite it. Customers consistently report Spark lights wood that disposable starters can't touch. It's not magic; it's just enough sustained heat in the right airflow pattern.</div>
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

    <h3 style="margin-top:28px">Spark — Top-Performing Examples</h3>
    <p style="font-size:13.5px;color:var(--sp-text-muted);margin-top:6px">Use these as reference for the patterns above when briefing new ad concepts, briefing influencers, or judging variants in testing rounds.</p>

    <div class="creatives-link-card">
        <p>Our current winning Spark ads are shared in the team's Google Chat space, alongside the rest of the Inventel portfolio, so they stay up to date. You'll need to be signed in to your Inventel Google account to open it.</p>
        <a id="creatives-link" class="creatives-link" href="https://chat.google.com/room/AAQAyhmFXBc?cls=7" target="_blank" rel="noopener">Open winning creatives (Google Chat) &rarr;</a>
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
        <dd>The approximately 10-minute window during which 10 oz of alcohol burns inside Spark, producing ~6&quot; flames from each of the three wings. This is the window in which the wood stack ignites. Not a continuous fuel source — Spark gets the fire going; the wood sustains it.</dd>

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
      <div class="faq-a">Pour about 10 oz of rubbing (isopropyl) alcohol into the wings of the unit, build your wood stack around it, and light the alcohol with a long-handled lighter. The alcohol burns for about 10 minutes — long enough to ignite even damp or unseasoned wood. Once the wood catches, Spark stays in the pit and isn't refilled. After the fire is fully out and cool, dust off the ashes; Spark stays in the pit until next time.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">What kind of fuel do I use?</div>
      <div class="faq-a">Standard rubbing (isopropyl) alcohol — both 70% and 91% work. 91% lights faster and burns slightly hotter. Roughly 10 oz per fire, about $0.30 of fuel cost. <strong>Don't substitute</strong> with lighter fluid (smoky), gasoline (dangerous and explosive), or denatured alcohol (works but more expensive).</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">Will Spark work with damp or unseasoned wood?</div>
      <div class="faq-a">Yes — that's actually one of the reasons Spark exists. The roughly 10 minutes of sustained alcohol flame is long enough to drive the moisture out of damp or unseasoned wood and ignite it. Customers consistently report Spark lights wood that disposable starters can't touch.</div>
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
        <h3 style="color:#fff;margin:0 0 10px">Ready to test what you've learned?</h3>
        <p style="color:var(--sp-cream);font-size:14px;max-width:660px">Read everything above first. You'll get a multiple-choice question one at a time, drawn from the whole hub. Select an answer and you'll see immediately whether you got it right, then click Next to continue. <strong style="color:#fff">Pass: 25 of 35 correct (70%).</strong> Retake as many times as you need — no penalty.</p>
        <p style="color:var(--sp-cream);font-size:14px;max-width:660px">When you pass, enter your name and title, then capture your result — a <strong style="color:#fff">screenshot of your score card is the easiest option</strong>, or you can print or save the certificate. <strong style="color:#fff">Every quiz — this one and every brand or platform quiz — follows the same submission process:</strong></p>
        <ol class="submit-steps">
          <li><strong>Capture your result</strong> — a screenshot of your score card is easiest, or save it as a PDF.</li>
          <li><strong>Name the file</strong> using the standard convention (below) so it's easy to find and track.</li>
          <li><strong>Upload it</strong> to the <a href="https://drive.google.com/drive/folders/19vsre-bLq4zDgwEAYGcSX22SpJ7hNvIM?usp=drive_link" target="_blank" rel="noopener">InvenTel University Quiz Results</a> folder.</li>
          <li><strong>Notify the person who assigned the quiz</strong> — your onboarding manager, the Performance Team, your Department Lead, Brand Lead, or Agency Lead, depending on which quiz it was.</li>
        </ol>
        <div class="naming-box">
          <strong>📄 File naming convention</strong><br>
          <code>FirstName LastName_Team_Brand (or Platform)_Quiz_MMYYYY.pdf</code><br>
          <span style="font-size:13px">Example for this hub: <code>Jane Doe_CX_Spark_Quiz_092026.pdf</code></span>
        </div>
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
  {q:"How long does Spark burn on a single 10 oz fill?", o:["About 2 minutes","About 5 minutes","About 10 minutes","30+ minutes"], a:2, e:"The brand book states that 10 ounces of alcohol-based fuel gives +/- 10 minutes of flame. That is the approved figure &mdash; do not quote 10&ndash;15 minutes."},
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
  {q:"What color is Spark's signature brand base?", o:["Bright orange","Muted sage green","Charcoal black","Cheese yellow"], a:1, e:"Sage #708680 is one of Spark's two brand colors, per the brand guideline (p.4); cream #E2DAC4 is the other. Those two are the entire palette — charcoal, ember, amber and steel are not brand colors and were never approved. Use sage as the canvas with cream type, or cream as the canvas with sage type. Warmth."},

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

  // — Sample Winning Creatives (2 — 1 universal pattern, 1 brand-specific)
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
