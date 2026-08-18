<?php /* Template Name: Company Policy Hub */ ?>
<?php bh_require_login(); ?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>InvenTel — Company Policy &amp; Onboarding Hub</title>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500;600;700;800;900&amp;family=Inter:wght@300;400;500;600;700;800&amp;family=DM+Mono:wght@400;500;700&amp;display=swap" rel="stylesheet">
<style>
:root{
  /* INVENTEL PALETTE — corporate DRTV identity, est. 1992. Brand red + charcoal black + white, tuned for readability */
  --iv-ink:#1A1416;            /* deepest charcoal-black — hero base, headers */
  --iv-ink-soft:#241A1C;      /* softer charcoal */
  --iv-navy:#3A2225;          /* primary brand deep — warm charcoal-maroon */
  --iv-navy-deep:#2A1719;     /* darker, hover */
  --iv-navy-light:#5A363A;    /* lighter secondary surface */
  --iv-signal:#C8202A;        /* brand red — primary accent, links-as-brand */
  --iv-signal-deep:#9E1620;   /* deep red, hover */
  --iv-signal-bright:#E24049; /* bright red, glow */
  --iv-sky:#F3D9DB;           /* pale rose — type on dark */
  --iv-sky-soft:#FBEEEF;      /* lightest rose — page background panels */
  --iv-paper:#FAF7F7;         /* page background — warm off-white */
  --iv-amber:#E0A32E;         /* broadcast gold — warm accent, certificate gold */
  --iv-amber-deep:#BC841F;    /* deep gold */
  --iv-slate:#6E5F61;         /* muted warm slate — secondary type */
  --iv-text:#20181A;          /* body type — near-black warm */
  --iv-text-muted:#645557;    /* muted body */
  --iv-line:#E7DCDD;          /* hairlines */
  --iv-link:#B01820;          /* external links — brand red + underline */
  --iv-white:#FFFFFF;
  --iv-danger:#C0392B;
  --iv-danger-deep:#8E2A1F;
  --iv-success:#2E7D52;
  --iv-success-deep:#1F5C3B;
  --nav-h:60px;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;background:var(--iv-paper);color:var(--iv-text);font-size:16px;line-height:1.6;-webkit-font-smoothing:antialiased}

/* TOP NAV */
#top-nav{position:sticky;top:0;z-index:1000;background:var(--iv-ink);box-shadow:0 2px 14px rgba(14,27,42,.35)}
.nav-inner{display:flex;align-items:center;gap:14px;height:var(--nav-h);padding:0 20px;max-width:1200px;margin:0 auto}
.nav-brand{font-family:'Archivo',sans-serif;font-weight:800;font-size:18px;color:#fff;white-space:nowrap;letter-spacing:.04em;flex-shrink:0;display:flex;align-items:center;gap:9px}
.nav-brand .nav-dot{width:9px;height:9px;border-radius:50%;background:var(--iv-amber);box-shadow:0 0 0 3px rgba(232,163,61,.25);flex-shrink:0}
.nav-search-wrap{flex:1;position:relative;max-width:440px}
.nav-search{width:100%;background:rgba(255,255,255,.07);border:1px solid rgba(200,32,42,.35);color:#fff;padding:7px 12px 7px 32px;border-radius:8px;font-size:13px;font-family:'Inter',sans-serif;outline:none;transition:all .15s}
.nav-search::placeholder{color:rgba(207,226,243,.55)}
.nav-search:focus{border-color:var(--iv-signal);background:rgba(255,255,255,.11)}
.nav-search-icon{position:absolute;left:10px;top:50%;transform:translateY(-50%);width:14px;height:14px;stroke:var(--iv-signal-bright);fill:none;stroke-width:2;pointer-events:none}
.nav-top-toc-btn{background:transparent;border:1px solid var(--iv-signal);color:var(--iv-signal-bright);padding:6px 14px;border-radius:7px;font-size:12px;font-weight:700;cursor:pointer;font-family:'DM Mono',monospace;letter-spacing:.05em;text-transform:uppercase;transition:all .2s;flex-shrink:0}
.nav-top-toc-btn:hover{background:var(--iv-signal);color:#fff}
@media (max-width:520px){.nav-brand .nav-brand-full{display:none}}
@media (max-width:700px){.nav-search-wrap{max-width:none}}

/* SEARCH RESULTS */
#search-results{position:absolute;top:100%;left:0;right:0;margin-top:6px;background:#fff;border-radius:10px;box-shadow:0 12px 34px rgba(14,27,42,.28);max-height:62vh;overflow-y:auto;display:none;z-index:1100;border:1px solid var(--iv-line)}
#search-results.open{display:block}
.search-group{padding:8px 0;border-bottom:1px solid rgba(14,27,42,.06)}
.search-group:last-child{border-bottom:none}
.search-group-label{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--iv-signal-deep);font-weight:700;padding:6px 14px}
.search-result{display:block;padding:8px 14px;color:var(--iv-text);text-decoration:none;font-size:13.5px;cursor:pointer;border-left:3px solid transparent;line-height:1.4}
.search-result:hover,.search-result.active{background:var(--iv-sky-soft);border-left-color:var(--iv-signal)}
.search-result-snippet{font-size:11.5px;color:var(--iv-text-muted);margin-top:2px}
.search-empty{padding:18px 14px;color:var(--iv-text-muted);font-size:13px;font-style:italic;text-align:center}
.flash-target{animation:flashAmber 1.8s ease-out}
@keyframes flashAmber{0%{background:rgba(232,163,61,.45);box-shadow:0 0 0 4px rgba(232,163,61,.5)}100%{background:transparent;box-shadow:none}}

/* FLOATING TOC BUTTON */
#floating-toc-btn{position:fixed;bottom:24px;right:24px;z-index:998;background:var(--iv-signal);color:#fff;border:2px solid var(--iv-ink);width:56px;height:56px;border-radius:50%;cursor:pointer;box-shadow:0 6px 22px rgba(200,32,42,.5);display:flex;align-items:center;justify-content:center;transition:all .2s}
#floating-toc-btn:hover{background:var(--iv-signal-deep);transform:translateY(-2px);box-shadow:0 8px 26px rgba(200,32,42,.65)}
#floating-toc-btn svg{width:24px;height:24px;stroke:#fff;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* TOC DRAWER */
#toc-drawer-overlay{position:fixed;inset:0;background:rgba(14,27,42,.7);backdrop-filter:blur(4px);z-index:1500;opacity:0;pointer-events:none;transition:opacity .25s}
#toc-drawer-overlay.open{opacity:1;pointer-events:auto}
#toc-drawer{position:fixed;top:0;right:0;bottom:0;width:min(400px,92vw);background:var(--iv-sky-soft);z-index:1501;padding:0;overflow-y:auto;transform:translateX(100%);transition:transform .3s cubic-bezier(.4,0,.2,1);box-shadow:-8px 0 30px rgba(14,27,42,.4);display:flex;flex-direction:column}
#toc-drawer.open{transform:translateX(0)}
.toc-drawer-header{display:flex;justify-content:space-between;align-items:center;padding:16px 20px;background:var(--iv-ink);color:#fff;border-bottom:3px solid var(--iv-signal);position:sticky;top:0;z-index:2}
.toc-drawer-title{font-family:'Archivo',sans-serif;font-weight:800;color:var(--iv-signal-bright);font-size:1.2rem;letter-spacing:.02em}
.toc-drawer-close{background:rgba(255,255,255,.12);border:1px solid rgba(200,32,42,.4);color:#fff;font-size:20px;cursor:pointer;line-height:1;width:30px;height:30px;border-radius:50%;display:flex;align-items:center;justify-content:center;transition:all .15s}
.toc-drawer-close:hover{background:var(--iv-signal);color:#fff;border-color:var(--iv-signal)}
#toc-drawer-nav{padding:10px 12px 14px;display:flex;flex-direction:column;gap:3px}
#toc-drawer-nav a{display:flex;align-items:center;gap:10px;background:#fff;color:var(--iv-ink);text-decoration:none;padding:7px 12px;border-radius:7px;font-size:13px;font-family:'Inter',sans-serif;font-weight:600;border:1px solid rgba(200,32,42,.16);border-left:4px solid var(--iv-signal);transition:all .15s;line-height:1.2}
#toc-drawer-nav a:hover{background:var(--iv-signal);color:#fff;border-color:var(--iv-signal);border-left-color:var(--iv-amber);transform:translateX(3px);opacity:1;box-shadow:0 2px 8px rgba(200,32,42,.3)}
#toc-drawer-nav a:hover .toc-drawer-num{background:var(--iv-amber);color:var(--iv-ink)}
.toc-drawer-num{display:inline-flex;align-items:center;justify-content:center;min-width:30px;height:20px;padding:0 6px;background:var(--iv-signal);color:#fff;border-radius:4px;font-family:'DM Mono',monospace;font-size:10.5px;font-weight:700;letter-spacing:.02em;flex-shrink:0;transition:all .15s}
.toc-drawer-label{flex:1;min-width:0}

/* TOC SECTION (in-page) */
#toc-section .toc-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:10px;margin-top:10px}
.toc-tile{background:#fff;border:1px solid rgba(200,32,42,.16);border-left:4px solid var(--iv-signal);border-radius:10px;padding:14px 16px;text-decoration:none;color:var(--iv-text);display:flex;align-items:center;gap:12px;transition:all .2s;cursor:pointer}
.toc-tile:hover{background:var(--iv-sky-soft);border-left-color:var(--iv-amber);transform:translateX(3px);opacity:1;text-decoration:none}
.toc-tile-num{font-family:'DM Mono',monospace;color:var(--iv-signal-deep);font-size:12px;font-weight:700;min-width:24px}
.toc-tile-label{font-size:14px;font-weight:600;color:var(--iv-ink)}

/* COLLAPSIBLES */
.card.collapsible{padding:0;overflow:hidden;transition:all .3s ease}
.section-header-bar{display:flex;align-items:center;justify-content:space-between;padding:22px 30px;cursor:pointer;user-select:none;background:linear-gradient(135deg,var(--iv-white) 0%,rgba(200,32,42,.08) 100%);transition:background .2s;border-bottom:1px solid transparent}
.section-header-bar:hover{background:linear-gradient(135deg,var(--iv-sky-soft) 0%,rgba(200,32,42,.16) 100%)}
.section-header-bar .section-header-left{flex:1;min-width:0}
.section-header-bar .eyebrow{margin-bottom:4px}
.section-header-bar h2{margin:0;padding:0;border-bottom:none;font-size:1.5rem}
.section-toggle{background:transparent;border:1.5px solid var(--iv-signal);color:var(--iv-signal);width:32px;height:32px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .2s;margin-left:14px}
.section-toggle:hover{background:var(--iv-signal);color:#fff;border-color:var(--iv-signal)}
.section-toggle svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:2.5;stroke-linecap:round;transition:transform .3s}
.collapsed .section-toggle svg{transform:rotate(-180deg)}
.section-body{padding:10px 30px 30px;max-height:20000px;overflow:hidden;transition:max-height .4s ease,padding .3s ease,opacity .3s ease;opacity:1}
.collapsed .section-body{max-height:0;padding-top:0;padding-bottom:0;opacity:0}
.collapsed .section-header-bar{border-bottom-color:transparent}

/* SECTIONS */
section{padding:40px 20px;max-width:1000px;margin:0 auto;scroll-margin-top:var(--nav-h)}
h1{font-family:'Archivo',sans-serif;font-weight:900;font-size:clamp(2.2rem,6vw,4rem);color:#fff;line-height:1.02;letter-spacing:-.01em}
h2{font-family:'Archivo',sans-serif;font-size:clamp(1.5rem,3.2vw,2.2rem);font-weight:800;color:var(--iv-ink);margin-bottom:22px;padding-bottom:12px;border-bottom:3px solid var(--iv-signal);letter-spacing:-.01em}
h3{font-family:'Archivo',sans-serif;font-size:1.15rem;font-weight:700;color:var(--iv-signal-deep);margin-bottom:10px}
h4{font-family:'Inter',sans-serif;font-size:1rem;font-weight:700;color:var(--iv-ink);margin-bottom:8px}
p{margin-bottom:14px;color:var(--iv-text)}
a{color:var(--iv-link);text-decoration:underline}
a:hover{opacity:.75}
.eyebrow{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--iv-signal-deep);margin-bottom:8px;display:block;font-weight:600}
.card{background:var(--iv-white);border-radius:16px;padding:36px;margin-bottom:20px;box-shadow:0 2px 20px rgba(14,27,42,.07);border:1px solid rgba(200,32,42,.12)}
ul,ol{margin:0 0 14px 20px}
li{margin-bottom:6px}
strong{color:var(--iv-ink)}

/* HERO */
#hero{max-width:100%;padding:0;margin:0;background:linear-gradient(140deg,var(--iv-ink) 0%,var(--iv-navy) 55%,var(--iv-navy-deep) 100%);position:relative;overflow:hidden}
#hero::before{content:"";position:absolute;inset:0;background-image:radial-gradient(circle at 18% 25%,rgba(200,32,42,.28) 0%,transparent 48%),radial-gradient(circle at 82% 80%,rgba(232,163,61,.18) 0%,transparent 52%),radial-gradient(circle at 60% 0%,rgba(226,64,73,.2) 0%,transparent 55%);pointer-events:none}
/* faint broadcast scanlines — nods to DRTV heritage */
#hero::after{content:"";position:absolute;inset:0;background-image:repeating-linear-gradient(0deg,rgba(255,255,255,.025) 0px,rgba(255,255,255,.025) 1px,transparent 1px,transparent 4px);pointer-events:none;opacity:.6}
.hero-inner{max-width:1000px;margin:0 auto;padding:60px 20px 52px;position:relative;z-index:1}
.hero-kicker{font-family:'DM Mono',monospace;font-size:12px;letter-spacing:.22em;text-transform:uppercase;color:var(--iv-amber);margin-bottom:16px;display:flex;align-items:center;gap:10px}
.hero-kicker .line{height:1px;width:42px;background:var(--iv-amber);opacity:.7}
.hero h1{color:#fff;margin-bottom:14px;text-shadow:0 2px 18px rgba(14,27,42,.5)}
.hero h1 .accent{color:var(--iv-signal-bright)}
.hero-tagline{font-size:1.18rem;color:var(--iv-sky);margin-bottom:10px;font-weight:500;max-width:680px}
.hero-meta{font-family:'DM Mono',monospace;font-size:13px;color:var(--iv-sky);opacity:.85;margin-bottom:26px;letter-spacing:.04em}
.hero-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin:26px 0}
@media(max-width:680px){.hero-stats{grid-template-columns:repeat(2,1fr)}}
@media(max-width:420px){.hero-stats{grid-template-columns:1fr}}
.hero-stat{background:rgba(255,255,255,.07);border:1px solid rgba(207,226,243,.22);border-radius:12px;padding:18px;backdrop-filter:blur(4px)}
.hero-stat-num{font-family:'Archivo',sans-serif;font-weight:900;font-size:1.9rem;color:#fff;line-height:1;margin-bottom:6px;letter-spacing:-.01em}
.hero-stat-num.amber{color:var(--iv-amber)}
.hero-stat-lbl{font-size:12px;color:var(--iv-sky);opacity:.92;line-height:1.35}
.chip-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:18px}
.chip{display:inline-flex;align-items:center;gap:6px;background:#fff;color:var(--iv-link)!important;text-decoration:underline;padding:7px 14px;border-radius:8px;font-size:13px;font-weight:600;transition:transform .15s}
.chip:hover{transform:translateY(-1px);opacity:1}
.tag-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:18px}
.tag{background:var(--iv-signal);color:#fff;padding:5px 12px;border-radius:8px;font-size:12px;font-weight:700;letter-spacing:.02em}
.tag.tag-inventel{background:var(--iv-amber);color:var(--iv-ink)}

/* TABLES */
.table-wrap{overflow-x:auto;margin:16px 0;border-radius:10px;border:1px solid var(--iv-line)}
table{width:100%;border-collapse:collapse;background:#fff;font-size:14px;min-width:520px}
th{background:var(--iv-ink);color:var(--iv-sky);padding:12px 14px;text-align:left;font-size:11.5px;text-transform:uppercase;letter-spacing:.07em;font-weight:700}
td{padding:12px 14px;border-bottom:1px solid rgba(14,27,42,.08);vertical-align:top}
tr:last-child td{border-bottom:none}
tr:nth-child(even) td{background:rgba(200,32,42,.05)}
.badge{display:inline-block;padding:3px 9px;border-radius:8px;font-size:11px;font-weight:700;letter-spacing:.03em;text-transform:uppercase}
.badge-core{background:var(--iv-signal);color:#fff}
.badge-must{background:var(--iv-danger);color:#fff}
.badge-evergreen{background:var(--iv-success);color:#fff}

/* PILLARS / GRID CARDS */
.pillars{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:20px}
.pillar{background:linear-gradient(135deg,var(--iv-white) 0%,rgba(200,32,42,.10) 100%);padding:22px;border-radius:12px;border-left:4px solid var(--iv-signal);transition:transform .2s}
.pillar:hover{transform:translateY(-3px)}
.pillar-icon{font-size:1.7rem;margin-bottom:10px;display:block}
.pillar h4{color:var(--iv-ink);margin-bottom:6px;font-size:1rem}
.pillar p{font-size:13px;color:var(--iv-text-muted);margin-bottom:0;line-height:1.5}

.feature-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:12px;margin:14px 0 8px}
.feature-tile{background:linear-gradient(135deg,#fff 0%,var(--iv-sky-soft) 100%);border:1px solid rgba(200,32,42,.16);border-left:4px solid var(--iv-signal);border-radius:10px;padding:14px 16px}
.feature-tile-icon{font-size:1.4rem;margin-bottom:6px;display:block;line-height:1}
.feature-tile h4{margin-bottom:4px;font-size:13.5px;color:var(--iv-ink)}
.feature-tile p{margin:0;font-size:12.5px;color:var(--iv-text-muted);line-height:1.5}

/* DO / DONT */
.do-dont{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:16px}
.do-dont > div{padding:20px;border-radius:10px}
.do{background:rgba(46,125,82,.07);border:1px solid var(--iv-success)}
.dont{background:rgba(192,57,43,.07);border:1px solid var(--iv-danger)}
.do h4{color:var(--iv-success-deep)}
.dont h4{color:var(--iv-danger)}
.do ul,.dont ul{padding-left:18px;margin:8px 0 0}
.do li,.dont li{margin-bottom:6px;font-size:13px}
@media (max-width:640px){.do-dont{grid-template-columns:1fr}}

/* SPEC / DEFINITION TABLE */
.spec-table{background:#fff;border:1px solid rgba(200,32,42,.18);border-radius:10px;padding:18px 22px;margin:14px 0;font-size:13.5px;line-height:1.6}
.spec-table dl{display:grid;grid-template-columns:max-content 1fr;gap:8px 18px}
.spec-table dt{font-family:'DM Mono',monospace;font-size:11px;text-transform:uppercase;letter-spacing:.08em;color:var(--iv-signal-deep);font-weight:700;padding-top:2px}
.spec-table dd{color:var(--iv-text);margin:0}
.spec-table dd strong{color:var(--iv-ink)}
@media (max-width:560px){.spec-table dl{grid-template-columns:1fr}.spec-table dt{margin-top:8px}}

/* STAT BOXES */
.stat-boxes{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:14px;margin-top:18px}
.stat-box{background:linear-gradient(135deg,var(--iv-signal) 0%,var(--iv-signal-deep) 100%);color:#fff;padding:22px;border-radius:12px;text-align:center}
.stat-big{font-family:'Archivo',sans-serif;font-weight:900;font-size:2.3rem;line-height:1;margin-bottom:6px;color:#fff}
.stat-lbl{font-size:12px;line-height:1.4;opacity:.95}

/* EXECUTIVE LEADERSHIP */
.exec-feature{display:block;background:linear-gradient(150deg,var(--iv-ink) 0%,var(--iv-navy) 100%);border-radius:16px;padding:30px;margin:18px 0;color:#fff}
.exec-feature h3{color:#fff;font-size:1.5rem;margin-bottom:2px}
.exec-role{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--iv-amber);font-weight:700;margin-bottom:12px}
.exec-feature p{color:var(--iv-sky);font-size:14px;margin-bottom:10px}
.exec-quote{border-left:3px solid var(--iv-amber);padding-left:14px;font-style:italic;color:#fff;margin:14px 0 0}
.exec-stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(120px,1fr));gap:10px;margin-top:16px}
.exec-stat{background:rgba(255,255,255,.06);border:1px solid rgba(207,226,243,.18);border-radius:10px;padding:12px;text-align:center}
.exec-stat b{display:block;font-family:'Archivo',sans-serif;font-weight:900;font-size:1.3rem;color:#fff;line-height:1}
.exec-stat span{font-size:10.5px;color:var(--iv-sky);line-height:1.3;display:block;margin-top:4px}
.evp-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:14px}
.evp-card{background:linear-gradient(160deg,#fff,var(--iv-sky-soft));border:1px solid rgba(200,32,42,.18);border-top:4px solid var(--iv-amber);border-radius:12px;padding:20px}
.evp-card .evp-name{font-family:'Archivo',sans-serif;font-weight:800;font-size:1.1rem;color:var(--iv-ink)}
.evp-card .evp-role{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.08em;text-transform:uppercase;color:var(--iv-signal-deep);font-weight:700;margin-top:2px}
.evp-card p{font-size:13px;color:var(--iv-text-muted);margin:10px 0 0;line-height:1.5}
@media (max-width:600px){.exec-feature{grid-template-columns:1fr}.evp-grid{grid-template-columns:1fr}}

/* HR TEAM CARDS */
.hr-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin:18px 0}
.hr-card{background:linear-gradient(160deg,#fff 0%,var(--iv-sky-soft) 100%);border:1px solid rgba(200,32,42,.18);border-top:4px solid var(--iv-signal);border-radius:12px;padding:20px}
.hr-card.feature{border-top-color:var(--iv-amber)}
.hr-name{font-family:'Archivo',sans-serif;font-weight:800;font-size:1.05rem;color:var(--iv-ink);margin-bottom:2px}
.hr-role{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.08em;text-transform:uppercase;color:var(--iv-signal-deep);font-weight:700;margin-bottom:4px}
.hr-tagline{font-size:12px;color:var(--iv-text-muted);font-style:italic;margin-bottom:10px}
.hr-card ul{margin:0 0 0 16px;padding:0}
.hr-card li{font-size:12.5px;color:var(--iv-text);margin-bottom:4px;line-height:1.45}

/* GLOSSARY */
.glossary{background:#fff;padding:24px;border-radius:10px;border:1px solid rgba(200,32,42,.15)}
.glossary dt{font-weight:700;color:var(--iv-signal-deep);font-family:'DM Mono',monospace;font-size:13px;text-transform:uppercase;letter-spacing:.04em;margin-top:16px}
.glossary dt:first-child{margin-top:0}
.glossary dd{margin-left:0;margin-top:4px;font-size:14px;color:var(--iv-text);line-height:1.55}

/* FAQ */
.faq-item{background:#fff;border:1px solid rgba(200,32,42,.14);border-radius:10px;padding:18px 20px;margin-bottom:10px}
.faq-q{font-weight:700;color:var(--iv-ink);margin-bottom:10px;padding-left:30px;position:relative;font-size:14px}
.faq-q::before{content:"Q";position:absolute;left:0;top:-2px;width:22px;height:22px;background:var(--iv-signal);color:#fff;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;font-family:'DM Mono',monospace}
.faq-a{color:var(--iv-text-muted);padding-left:30px;font-size:14px;line-height:1.6;margin:0}

/* TEAM CALLOUTS */
.team-callout{border-radius:10px;padding:18px 22px;margin:16px 0;font-size:14px;line-height:1.6;border-left:5px solid;background:#fff;position:relative}
.team-callout .team-tag{display:inline-block;font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;font-weight:700;padding:3px 10px;border-radius:12px;margin-bottom:10px}
.team-callout p:last-child{margin-bottom:0}
.team-callout.cx{background:rgba(46,125,82,.06);border-left-color:var(--iv-success)}
.team-callout.cx .team-tag{background:var(--iv-success);color:#fff}
.team-callout.cx .team-tag::before{content:"📞 "}
.team-callout.newhire{background:rgba(200,32,42,.06);border-left-color:var(--iv-signal)}
.team-callout.newhire .team-tag{background:var(--iv-signal);color:#fff}
.team-callout.newhire .team-tag::before{content:"👋 "}
.team-callout.lead{background:rgba(58,34,37,.06);border-left-color:var(--iv-navy)}
.team-callout.lead .team-tag{background:var(--iv-navy);color:var(--iv-amber)}
.team-callout.lead .team-tag::before{content:"🧭 "}
.team-callout.finance{background:rgba(232,163,61,.09);border-left-color:var(--iv-amber-deep)}
.team-callout.finance .team-tag{background:var(--iv-amber-deep);color:#fff}
.team-callout.finance .team-tag::before{content:"💰 "}

/* HAZARD-TAPE CRITICAL CALLOUT */
.hazard{border-radius:12px;overflow:hidden;margin:18px 0;border:1px solid rgba(192,57,43,.4);background:linear-gradient(135deg,#3a1410 0%,#5e1a12 100%);color:#fff}
.hazard-bar{height:10px;background:repeating-linear-gradient(45deg,var(--iv-amber) 0,var(--iv-amber) 14px,#1a0c08 14px,#1a0c08 28px)}
.hazard-body{padding:20px 24px}
.hazard-body h4{color:var(--iv-amber);margin-bottom:8px;font-size:1rem;letter-spacing:.02em}
.hazard-body p{color:#FBE9D2;margin:0;font-size:14px;line-height:1.6}
.hazard-body strong{color:#fff}

/* DETAIL / DASHBOARD MINI-CARDS */
.mini-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:12px;margin-top:14px}
.mini{background:#fff;border:1px solid rgba(200,32,42,.16);border-radius:10px;padding:16px 18px}
.mini .mini-k{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--iv-signal-deep);font-weight:700;margin-bottom:6px}
.mini .mini-v{font-size:13.5px;color:var(--iv-text);line-height:1.5}
.mini .mini-v strong{color:var(--iv-ink)}

/* QUOTE / PRINCIPLE STRIP */
.principle-strip{display:flex;flex-wrap:wrap;gap:10px;margin-top:16px}
.principle-strip .pchip{background:var(--iv-ink);color:var(--iv-sky);padding:9px 16px;border-radius:20px;font-size:13px;font-weight:600;font-family:'DM Mono',monospace;letter-spacing:.02em}
.principle-strip .pchip span{color:var(--iv-amber);margin-right:6px}

/* NUMBERED FLOW */
.flow{counter-reset:flow;margin-top:16px;display:flex;flex-direction:column;gap:10px}
.flow-step{display:flex;gap:14px;align-items:flex-start;background:#fff;border:1px solid rgba(200,32,42,.14);border-radius:10px;padding:14px 18px}
.flow-step::before{counter-increment:flow;content:counter(flow);flex-shrink:0;width:28px;height:28px;border-radius:50%;background:var(--iv-signal);color:#fff;font-family:'Archivo',sans-serif;font-weight:800;font-size:14px;display:flex;align-items:center;justify-content:center}
.flow-step-body{font-size:13.5px;line-height:1.55}
.flow-step-body strong{color:var(--iv-ink)}

/* QUIZ */
#quiz-section{position:relative;background:linear-gradient(140deg,var(--iv-ink) 0%,var(--iv-navy) 55%,var(--iv-navy-deep) 100%);color:#fff;border-radius:20px;padding:0;margin-top:40px;overflow:hidden;box-shadow:0 8px 32px rgba(26,20,22,.3)}
#quiz-section::before{content:"";position:absolute;inset:0;background-image:radial-gradient(circle at 18% 20%,rgba(200,32,42,.28) 0%,transparent 48%),radial-gradient(circle at 85% 85%,rgba(224,163,46,.16) 0%,transparent 52%),radial-gradient(circle at 60% 0%,rgba(226,64,73,.2) 0%,transparent 55%);pointer-events:none;z-index:0}
#quiz-section>*{position:relative;z-index:1}
#quiz-section h2{color:#fff;border:none;margin:0;padding:0}
#quiz-section .section-header-bar{background:transparent;padding:32px 30px 20px;border-bottom:1px solid rgba(200,32,42,.25)}
#quiz-section .section-header-bar:hover{background:rgba(255,255,255,.04)}
#quiz-section .section-toggle{border-color:var(--iv-signal-bright);color:var(--iv-signal-bright)}
#quiz-section .section-toggle:hover{background:var(--iv-signal);color:#fff}
#quiz-section .section-body{padding:20px 30px 40px}
#quiz-section .section-body p,#quiz-section .section-body li,#quiz-section .section-body em{color:#F7EAEB}
#quiz-section .section-body p strong,#quiz-section .section-body li strong,#quiz-section .section-body h4 strong{color:#fff}
#quiz-section .section-body ul li,#quiz-section .section-body ul li strong{color:#F7EAEB}
/* keep interactive answer/feedback text dark on their light backgrounds */
#quiz-section .quiz-option,#quiz-section .quiz-option strong,#quiz-section .quiz-option em{color:#fff}
#quiz-section .quiz-option.correct,#quiz-section .quiz-option.correct strong,#quiz-section .quiz-option.show-correct,#quiz-section .quiz-option.show-correct strong{color:var(--iv-ink)}
#quiz-section .quiz-feedback.right,#quiz-section .quiz-feedback.right strong,#quiz-section .quiz-feedback.right em{color:var(--iv-ink)}
#quiz-section .quiz-feedback.wrong,#quiz-section .quiz-feedback.wrong strong,#quiz-section .quiz-feedback.wrong em{color:var(--iv-danger)}
#quiz-section .quiz-feedback .quiz-explain{color:var(--iv-ink)}
#quiz-section.collapsed .section-header-bar{border-bottom:none}
.quiz-container{background:rgba(255,255,255,.06);border-radius:14px;padding:28px;margin-top:20px;border:1px solid rgba(200,32,42,.3)}
.quiz-progress{font-family:'DM Mono',monospace;font-size:12px;color:var(--iv-amber);letter-spacing:.1em;margin-bottom:16px;text-transform:uppercase}
.quiz-progress-bar{height:6px;background:rgba(255,255,255,.12);border-radius:3px;overflow:hidden;margin-bottom:22px}
.quiz-progress-fill{height:100%;background:var(--iv-signal);transition:width .4s cubic-bezier(.4,0,.2,1);border-radius:3px}
.quiz-question{font-family:'Archivo',sans-serif;font-size:1.25rem;font-weight:700;margin-bottom:22px;line-height:1.35;color:#fff}
.quiz-options{display:flex;flex-direction:column;gap:10px}
.quiz-option{background:rgba(255,255,255,.06);border:2px solid rgba(200,32,42,.3);color:#fff;padding:14px 18px;border-radius:10px;text-align:left;font-size:14px;cursor:pointer;transition:all .2s;font-family:inherit;display:flex;align-items:center;gap:12px}
.quiz-option:hover{background:rgba(200,32,42,.18);border-color:var(--iv-signal);transform:translateX(4px)}
.quiz-option.correct{background:#FEF6E3;border-color:var(--iv-amber);color:var(--iv-ink);font-weight:700;box-shadow:0 0 0 3px rgba(232,163,61,.4);position:relative}
.quiz-option.correct::after{content:"✓ CORRECT";position:absolute;right:14px;top:50%;transform:translateY(-50%);background:var(--iv-success);color:#fff;font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.1em;padding:4px 10px;border-radius:20px}
.quiz-option.incorrect{background:rgba(192,57,43,.85);border-color:#fff;color:#fff;font-weight:700;position:relative}
.quiz-option.incorrect::after{content:"✗ YOUR PICK";position:absolute;right:14px;top:50%;transform:translateY(-50%);background:#fff;color:var(--iv-danger);font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.1em;padding:4px 10px;border-radius:20px}
.quiz-option.show-correct{background:#FEF6E3;border-color:var(--iv-amber);color:var(--iv-ink);font-weight:700;box-shadow:0 0 0 3px rgba(232,163,61,.4);position:relative}
.quiz-option.show-correct::after{content:"✓ CORRECT ANSWER";position:absolute;right:14px;top:50%;transform:translateY(-50%);background:var(--iv-success);color:#fff;font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.1em;padding:4px 10px;border-radius:20px}
.quiz-option.correct .quiz-option-letter,.quiz-option.show-correct .quiz-option-letter{color:var(--iv-ink)}
.quiz-option:disabled{cursor:default;transform:none;opacity:1}
.quiz-option:disabled:hover{transform:none}
.quiz-option:disabled:not(.correct):not(.show-correct):not(.incorrect){opacity:.35}
.quiz-feedback{margin-top:16px;padding:14px 18px;border-radius:10px;font-size:14px;font-weight:600}
.quiz-feedback.right{background:#FEF6E3;border-left:4px solid var(--iv-amber);color:var(--iv-ink)}
.quiz-feedback.wrong{background:#fff;border-left:4px solid var(--iv-danger);color:var(--iv-danger)}
.quiz-explain{margin-top:10px;padding:12px 14px;background:rgba(0,0,0,.04);border-radius:8px;font-size:13.5px;font-weight:400;line-height:1.6;color:var(--iv-ink)}

/* INTERACTIVE CHECKLIST */
.cl-progress-wrap{position:sticky;top:calc(var(--nav-h) + 4px);z-index:5;background:var(--iv-sky-soft);border:1px solid rgba(200,32,42,.2);border-radius:12px;padding:14px 18px;margin:6px 0 18px}
.cl-progress-top{display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:8px}
.cl-progress-label{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--iv-signal-deep);font-weight:700}
.cl-progress-count{font-family:'Archivo',sans-serif;font-weight:800;font-size:14px;color:var(--iv-ink)}
.cl-progress-bar{height:8px;background:rgba(58,34,37,.12);border-radius:5px;overflow:hidden}
.cl-progress-fill{height:100%;width:0;background:linear-gradient(90deg,var(--iv-signal),var(--iv-signal-bright));border-radius:5px;transition:width .35s cubic-bezier(.4,0,.2,1)}
.cl-progress-fill.done{background:linear-gradient(90deg,var(--iv-success),#3FA873)}
.cl-actions{display:flex;gap:10px;margin-top:10px;flex-wrap:wrap}
.cl-reset-btn{background:transparent;border:1px solid rgba(200,32,42,.4);color:var(--iv-signal-deep);font-family:'Inter',sans-serif;font-size:12px;font-weight:600;padding:5px 12px;border-radius:7px;cursor:pointer;transition:all .15s}
.cl-reset-btn:hover{background:var(--iv-signal);color:#fff;border-color:var(--iv-signal)}
.cl-group{margin-top:18px}
.cl-group-title{font-family:'Archivo',sans-serif;font-size:1.05rem;font-weight:700;color:var(--iv-signal-deep);margin-bottom:8px;display:flex;align-items:center;gap:8px}
ul.cl-list{list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:7px}
ul.cl-list li{margin:0}
.cl-item{display:flex;align-items:flex-start;gap:12px;background:#fff;border:1px solid rgba(200,32,42,.16);border-left:3px solid var(--iv-line);border-radius:9px;padding:12px 14px;cursor:pointer;transition:all .15s;user-select:none;text-align:left;width:100%;font-family:inherit;font-size:13.5px;line-height:1.5;color:var(--iv-text)}
.cl-item:hover{background:var(--iv-sky-soft);border-left-color:var(--iv-signal)}
.cl-checkbox{flex-shrink:0;width:20px;height:20px;border:2px solid var(--iv-signal);border-radius:6px;display:flex;align-items:center;justify-content:center;margin-top:1px;transition:all .15s;background:#fff}
.cl-checkbox svg{width:12px;height:12px;stroke:#fff;fill:none;stroke-width:3.5;stroke-linecap:round;stroke-linejoin:round;opacity:0;transition:opacity .15s}
.cl-item.checked{background:rgba(46,125,82,.07);border-left-color:var(--iv-success)}
.cl-item.checked .cl-checkbox{background:var(--iv-success);border-color:var(--iv-success)}
.cl-item.checked .cl-checkbox svg{opacity:1}
.cl-item.checked .cl-item-text{color:var(--iv-text-muted);text-decoration:line-through;text-decoration-color:rgba(84,97,110,.5)}
.cl-item-text strong{color:var(--iv-ink)}
.cl-item.checked .cl-item-text strong{color:var(--iv-text-muted)}
.cl-done-banner{display:none;margin-top:16px;background:linear-gradient(135deg,var(--iv-success) 0%,var(--iv-success-deep) 100%);color:#fff;border-radius:12px;padding:18px 22px;align-items:center;gap:12px}
.cl-done-banner.show{display:flex}
.cl-done-banner .cl-done-emoji{font-size:1.8rem;line-height:1}
.cl-done-banner b{font-family:'Archivo',sans-serif;font-size:1.05rem}

/* PRINT */
body.printing #top-nav,body.printing #floating-toc-btn,body.printing #toc-drawer,body.printing #toc-drawer-overlay,body.printing #search-results,body.printing .completion-actions,body.printing #cert-name{display:none!important}
body.printing .name-printed{display:block !important}
@media print{
  #top-nav,#floating-toc-btn,#toc-drawer,#toc-drawer-overlay,#search-results,.completion-actions,#cert-name{display:none!important}
  body{background:#fff}
  *{-webkit-print-color-adjust:exact;print-color-adjust:exact}
}

footer{background:var(--iv-ink);color:var(--iv-sky);text-align:center;padding:48px 20px;font-size:12.5px;font-family:'DM Mono',monospace;letter-spacing:.04em;margin-top:60px}
footer .fbrand{color:var(--iv-amber);font-weight:700}

/* ============ ADMIN: LOGIN OVERLAY ============ */
#iv-login-overlay{position:fixed;inset:0;background:rgba(26,20,22,.72);backdrop-filter:blur(4px);z-index:3000;display:none;align-items:center;justify-content:center;padding:20px}
#iv-login-overlay.open{display:flex}
#iv-login-modal{position:relative;background:var(--iv-white);border-radius:16px;padding:36px 32px;width:100%;max-width:360px;box-shadow:0 24px 60px rgba(14,27,42,.4);border:1px solid rgba(200,32,42,.18)}
#iv-login-close{position:absolute;top:14px;right:14px;background:transparent;border:none;font-size:22px;line-height:1;cursor:pointer;color:var(--iv-slate);width:28px;height:28px;border-radius:50%;transition:all .15s}
#iv-login-close:hover{background:var(--iv-sky-soft);color:var(--iv-signal)}
.iv-login-eyebrow{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--iv-signal-deep);margin-bottom:8px;font-weight:600}
.iv-login-title{font-family:'Archivo',sans-serif;font-weight:800;font-size:1.3rem;color:var(--iv-ink);margin-bottom:6px}
.iv-login-sub{font-size:12.5px;color:var(--iv-text-muted);margin-bottom:20px;line-height:1.5}
.iv-login-label{display:block;font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.08em;text-transform:uppercase;color:var(--iv-slate);margin-bottom:5px;margin-top:14px;font-weight:700}
.iv-login-input{width:100%;padding:9px 12px;border:1.5px solid var(--iv-line);border-radius:8px;font-family:'Inter',sans-serif;font-size:14px;color:var(--iv-text);outline:none;transition:border-color .15s}
.iv-login-input:focus{border-color:var(--iv-signal)}
#iv-login-error{display:none;color:var(--iv-danger);font-size:12.5px;margin-top:12px;font-weight:600}
#iv-login-error.show{display:block}
.iv-login-submit{width:100%;margin-top:20px;background:var(--iv-signal);color:#fff;border:none;padding:11px;border-radius:8px;font-weight:700;font-size:14px;cursor:pointer;font-family:'Inter',sans-serif;transition:background .15s}
.iv-login-submit:hover{background:var(--iv-signal-deep)}

/* ============ ADMIN: EDIT TOOLBAR ============ */
#iv-edit-toolbar{display:none;position:fixed;top:0;left:0;right:0;z-index:2000;background:var(--iv-ink);border-bottom:3px solid var(--iv-amber);padding:10px 20px;align-items:center;justify-content:space-between;gap:14px;flex-wrap:wrap;box-shadow:0 4px 18px rgba(14,27,42,.4)}
body.iv-edit-mode #iv-edit-toolbar{display:flex}
body.iv-edit-mode{padding-top:52px}
body.iv-edit-mode #top-nav{top:52px}
.iv-toolbar-label{font-family:'DM Mono',monospace;font-size:12px;letter-spacing:.04em;color:var(--iv-amber);font-weight:700;white-space:nowrap}
.iv-toolbar-actions{display:flex;gap:8px;flex-wrap:wrap}
.iv-toolbar-btn{border-radius:7px;padding:7px 14px;font-size:12.5px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;border:1px solid transparent;transition:all .15s}
.iv-btn-save{background:var(--iv-success);color:#fff}
.iv-btn-save:hover{background:var(--iv-success-deep)}
.iv-btn-reset{background:transparent;border-color:rgba(255,255,255,.3);color:#fff}
.iv-btn-reset:hover{background:rgba(255,255,255,.12)}
.iv-btn-exit{background:var(--iv-signal);color:#fff}
.iv-btn-exit:hover{background:var(--iv-signal-deep)}

/* ============ ADMIN: EDITABLE CONTENT INDICATORS ============ */
body.iv-edit-mode [data-iv-editable="true"]{outline:1px dashed rgba(200,32,42,.35);outline-offset:3px;border-radius:3px;cursor:text;transition:outline-color .12s,background-color .12s}
body.iv-edit-mode [data-iv-editable="true"]:hover{outline:1px dashed var(--iv-signal);background-color:rgba(200,32,42,.06)}
body.iv-edit-mode [data-iv-editable="true"]:focus{outline:2px solid var(--iv-amber);background-color:rgba(232,163,61,.09)}
#iv-admin-btn{margin-left:2px}
body.iv-edit-mode #iv-admin-btn{display:none}
</style>
<meta name="robots" content="noindex, nofollow">
<?php bh_favicon_tags(); ?>
</head>
<body class="">
<?php bh_back_to_index_button( 'university-landing', 'University' ); ?>

<!-- ============ TOP NAV ============ -->
<nav id="top-nav">
  <div class="nav-inner">
    <div class="nav-brand"><span class="nav-dot"></span>InvenTel<span class="nav-brand-full"> · Policy Hub</span></div>
    <div class="nav-search-wrap">
      <svg class="nav-search-icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
      <input type="text" id="hub-search" class="nav-search" placeholder="Search policies, rules, forms…  ( / )" autocomplete="off">
      <div id="search-results"></div>
    </div>
    <button class="nav-top-toc-btn" onclick="openTOCDrawer()">☰ Contents</button>
    
  </div>
</nav>

<!-- ============ ADMIN: LOGIN OVERLAY ============ -->


<!-- ============ ADMIN: EDIT MODE TOOLBAR ============ -->


<!-- ============ TOC DRAWER ============ -->
<div id="toc-drawer-overlay" onclick="closeTOCDrawer()" class=""></div>
<aside id="toc-drawer" class="">
  <div class="toc-drawer-header">
    <span class="toc-drawer-title">Jump to Section</span>
    <button class="toc-drawer-close" onclick="closeTOCDrawer()" aria-label="Close">×</button>
  </div>
  <nav id="toc-drawer-nav">
    <a href="#overview"><span class="toc-drawer-num">01</span><span class="toc-drawer-label">Welcome &amp; How to Use This Hub</span></a>
    <a href="#about"><span class="toc-drawer-num">02</span><span class="toc-drawer-label">About InvenTel &amp; TelNet</span></a>
    <a href="#leadership"><span class="toc-drawer-num">03</span><span class="toc-drawer-label">Executive Leadership</span></a>
    <a href="#orgstructure"><span class="toc-drawer-num">04</span><span class="toc-drawer-label">Organizational Structure</span></a>
    <a href="#structure"><span class="toc-drawer-num">05</span><span class="toc-drawer-label">Agency Structure &amp; Task Flow</span></a>
    <a href="#contacts"><span class="toc-drawer-num">06</span><span class="toc-drawer-label">HR Department &amp; Key Contacts</span></a>
    <a href="#accounting"><span class="toc-drawer-num">07</span><span class="toc-drawer-label">Accounting &amp; Invoicing</span></a>
    <a href="#hours"><span class="toc-drawer-num">08</span><span class="toc-drawer-label">Working Hours, Time Zone &amp; Lunch</span></a>
    <a href="#leave"><span class="toc-drawer-num">09</span><span class="toc-drawer-label">Leave &amp; Time Off</span></a>
    <a href="#tracker"><span class="toc-drawer-num">10</span><span class="toc-drawer-label">Remote Leave Tracker</span></a>
    <a href="#principles"><span class="toc-drawer-num">11</span><span class="toc-drawer-label">Core Principles &amp; Scope</span></a>
    <a href="#ownership"><span class="toc-drawer-num">12</span><span class="toc-drawer-label">Ownership, Accountability &amp; Working Together</span></a>
    <a href="#communication"><span class="toc-drawer-num">13</span><span class="toc-drawer-label">Communication Standards</span></a>
    <a href="#status"><span class="toc-drawer-num">14</span><span class="toc-drawer-label">Google Chat Status &amp; Availability</span></a>
    <a href="#meetings"><span class="toc-drawer-num">15</span><span class="toc-drawer-label">Meetings &amp; Camera Policy</span></a>
    <a href="#scheduling"><span class="toc-drawer-num">16</span><span class="toc-drawer-label">Scheduling &amp; Meeting Etiquette</span></a>
    <a href="#access"><span class="toc-drawer-num">17</span><span class="toc-drawer-label">Requesting Access to Platforms &amp; Accounts</span></a>
    <a href="#pmtool"><span class="toc-drawer-num">18</span><span class="toc-drawer-label">The InvenTel PM Tool</span></a>
    <a href="#brand"><span class="toc-drawer-num">19</span><span class="toc-drawer-label">Brand Knowledge &amp; University</span></a>
    <a href="#channels"><span class="toc-drawer-num">20</span><span class="toc-drawer-label">Company-Wide Channels</span></a>
    <a href="#mbr"><span class="toc-drawer-num">21</span><span class="toc-drawer-label">Company-Wide Meetings</span></a>
    <a href="#social"><span class="toc-drawer-num">22</span><span class="toc-drawer-label">Social Media Engagement</span></a>
    <a href="#equipment"><span class="toc-drawer-num">23</span><span class="toc-drawer-label">Equipment &amp; Connectivity</span></a>
    <a href="#disciplinary"><span class="toc-drawer-num">24</span><span class="toc-drawer-label">Contractor Disciplinary Policy</span></a>
    <a href="#ip"><span class="toc-drawer-num">25</span><span class="toc-drawer-label">Freelancing &amp; IP</span></a>
    <a href="#security"><span class="toc-drawer-num">26</span><span class="toc-drawer-label">Data Security &amp; Acceptable Use</span></a>
    <a href="#conduct"><span class="toc-drawer-num">27</span><span class="toc-drawer-label">Code of Conduct &amp; Grievances</span></a>
    <a href="#agreements"><span class="toc-drawer-num">28</span><span class="toc-drawer-label">Your Contract &amp; Handbook</span></a>
    <a href="#glossary"><span class="toc-drawer-num">29</span><span class="toc-drawer-label">Glossary</span></a>
    <a href="#faq"><span class="toc-drawer-num">30</span><span class="toc-drawer-label">FAQ</span></a>
    <a href="#checklist"><span class="toc-drawer-num">31</span><span class="toc-drawer-label">New-Hire Setup Checklist</span></a>
    <a href="#quiz-section"><span class="toc-drawer-num">32</span><span class="toc-drawer-label">Knowledge Check Quiz</span></a>
  </nav>
</aside>

<!-- ============ HERO ============ -->
<header id="hero">
  <div class="hero-inner">
    <div class="hero-kicker"><span class="line"></span>Est. 1992 · Direct Response Television</div>
    <h1>Company Policy &amp;<br><span class="accent">Onboarding Hub</span></h1>
    <p class="hero-tagline">Every standard, process, and expectation that keeps our remote, global team running — in one place, for new hires and current team members alike.</p>
    <p class="hero-meta">HQ in New Jersey, USA · The whole company runs on Eastern Time · Working hours 8:30 AM – 5:30 PM ET · This hub does not constitute a contractor agreement</p>
    <div class="hero-stats">
      <div class="hero-stat"><div class="hero-stat-num amber">8:30–5:30</div><div class="hero-stat-lbl">Standard working hours, ET — wherever you are</div></div>
      <div class="hero-stat"><div class="hero-stat-num">ET</div><div class="hero-stat-lbl">One clock — always communicate &amp; schedule in Eastern Time</div></div>
      <div class="hero-stat"><div class="hero-stat-num">10 min</div><div class="hero-stat-lbl">Reply or react to chats within 10 minutes during office hours</div></div>
      <div class="hero-stat"><div class="hero-stat-num">16 days</div><div class="hero-stat-lbl">Annual paid leave: 5 PTO + 5 sick + 6 floating holidays</div></div>
      <div class="hero-stat"><div class="hero-stat-num amber">Camera ON</div><div class="hero-stat-lbl">Cameras on for every meeting — no exceptions</div></div>
      <div class="hero-stat"><div class="hero-stat-num">Per task</div><div class="hero-stat-lbl">Time tracker runs on every task — mandatory</div></div>
    </div>
    <div class="tag-row">
      <span class="tag tag-inventel">InvenTel Internal</span>
      <span class="tag">Remote · Global Team</span>
      <span class="tag">Policy v5 · Onboarding 2026</span>
    </div>
  </div>
</header>

<!-- ============ IN-PAGE TOC ============ -->
<section id="toc-section" style="padding-top:36px">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">Table of Contents</span>
        <h2>Everything in This Hub</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p style="color:var(--iv-text-muted);font-size:14px;margin-bottom:4px">Tap any tile to jump. Use the search bar up top or the floating ☰ button (bottom-right) from anywhere on the page.</p>
      <div class="toc-grid">
        <a class="toc-tile" href="#overview"><span class="toc-tile-num">01</span><span class="toc-tile-label">Welcome &amp; How to Use This Hub</span></a>
        <a class="toc-tile" href="#about"><span class="toc-tile-num">02</span><span class="toc-tile-label">About InvenTel &amp; TelNet</span></a>
        <a class="toc-tile" href="#leadership"><span class="toc-tile-num">03</span><span class="toc-tile-label">Executive Leadership</span></a>
        <a class="toc-tile" href="#orgstructure"><span class="toc-tile-num">04</span><span class="toc-tile-label">Organizational Structure</span></a>
        <a class="toc-tile" href="#structure"><span class="toc-tile-num">05</span><span class="toc-tile-label">Agency Structure &amp; Task Flow</span></a>
        <a class="toc-tile" href="#contacts"><span class="toc-tile-num">06</span><span class="toc-tile-label">HR Department &amp; Key Contacts</span></a>
        <a class="toc-tile" href="#accounting"><span class="toc-tile-num">07</span><span class="toc-tile-label">Accounting &amp; Invoicing</span></a>
        <a class="toc-tile" href="#hours"><span class="toc-tile-num">08</span><span class="toc-tile-label">Working Hours, Time Zone &amp; Lunch</span></a>
        <a class="toc-tile" href="#leave"><span class="toc-tile-num">09</span><span class="toc-tile-label">Leave &amp; Time Off</span></a>
        <a class="toc-tile" href="#tracker"><span class="toc-tile-num">10</span><span class="toc-tile-label">Remote Leave Tracker</span></a>
        <a class="toc-tile" href="#principles"><span class="toc-tile-num">11</span><span class="toc-tile-label">Core Principles &amp; Scope</span></a>
        <a class="toc-tile" href="#ownership"><span class="toc-tile-num">12</span><span class="toc-tile-label">Ownership, Accountability &amp; Working Together</span></a>
        <a class="toc-tile" href="#communication"><span class="toc-tile-num">13</span><span class="toc-tile-label">Communication Standards</span></a>
        <a class="toc-tile" href="#status"><span class="toc-tile-num">14</span><span class="toc-tile-label">Google Chat Status &amp; Availability</span></a>
        <a class="toc-tile" href="#meetings"><span class="toc-tile-num">15</span><span class="toc-tile-label">Meetings &amp; Camera Policy</span></a>
        <a class="toc-tile" href="#scheduling"><span class="toc-tile-num">16</span><span class="toc-tile-label">Scheduling &amp; Meeting Etiquette</span></a>
        <a class="toc-tile" href="#access"><span class="toc-tile-num">17</span><span class="toc-tile-label">Requesting Access to Platforms &amp; Accounts</span></a>
        <a class="toc-tile" href="#pmtool"><span class="toc-tile-num">18</span><span class="toc-tile-label">The InvenTel PM Tool</span></a>
        <a class="toc-tile" href="#brand"><span class="toc-tile-num">19</span><span class="toc-tile-label">Brand Knowledge &amp; University</span></a>
        <a class="toc-tile" href="#channels"><span class="toc-tile-num">20</span><span class="toc-tile-label">Company-Wide Channels</span></a>
        <a class="toc-tile" href="#mbr"><span class="toc-tile-num">21</span><span class="toc-tile-label">Company-Wide Meetings</span></a>
        <a class="toc-tile" href="#social"><span class="toc-tile-num">22</span><span class="toc-tile-label">Social Media Engagement</span></a>
        <a class="toc-tile" href="#equipment"><span class="toc-tile-num">23</span><span class="toc-tile-label">Equipment &amp; Connectivity</span></a>
        <a class="toc-tile" href="#disciplinary"><span class="toc-tile-num">24</span><span class="toc-tile-label">Contractor Disciplinary Policy</span></a>
        <a class="toc-tile" href="#ip"><span class="toc-tile-num">25</span><span class="toc-tile-label">Freelancing &amp; IP</span></a>
        <a class="toc-tile" href="#security"><span class="toc-tile-num">26</span><span class="toc-tile-label">Data Security &amp; Acceptable Use</span></a>
        <a class="toc-tile" href="#conduct"><span class="toc-tile-num">27</span><span class="toc-tile-label">Code of Conduct &amp; Grievances</span></a>
        <a class="toc-tile" href="#agreements"><span class="toc-tile-num">28</span><span class="toc-tile-label">Your Contract &amp; Handbook</span></a>
        <a class="toc-tile" href="#glossary"><span class="toc-tile-num">29</span><span class="toc-tile-label">Glossary</span></a>
        <a class="toc-tile" href="#faq"><span class="toc-tile-num">30</span><span class="toc-tile-label">FAQ</span></a>
        <a class="toc-tile" href="#checklist"><span class="toc-tile-num">31</span><span class="toc-tile-label">New-Hire Setup Checklist</span></a>
        <a class="toc-tile" href="#quiz-section"><span class="toc-tile-num">32</span><span class="toc-tile-label">Knowledge Check Quiz</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ============ 01 · OVERVIEW ============ -->
<section id="overview">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">1 · Start Here</span>
        <h2>Welcome &amp; How to Use This Hub</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>This is the single home for how we work at InvenTel — a remote, global, fast-moving direct-response team with headquarters in New Jersey, USA and teammates across <strong>Egypt, India, Pakistan, the Philippines, Indonesia, Argentina, Colombia, and the United States</strong>. It pulls together the <strong>Communication, Collaboration &amp; Meeting Standards Policy</strong>, the <strong>Employee Onboarding Deck</strong>, and the <strong>New-Hire Onboarding Checklist</strong> into one searchable place. New hires read it top to bottom in week one; current team members use it as the reference whenever a question comes up.</p>

      <p style="font-size:14px;color:var(--iv-text-muted)">Two things hold a team this spread-out together, and they run through everything below: <strong>everyone works and communicates on one clock — Eastern Time</strong> — and <strong>everyone stays fast and reachable on chat.</strong> Get those two right and the rest follows.</p>

      <div class="team-callout newhire" id="callout-0">
        <span class="team-tag">New Hire · Start Here</span>
        <p><strong>Your first-week path:</strong> (1) Read this hub top to bottom. (2) Work through the <a href="#checklist">New-Hire Setup Checklist</a> — 2FA, time zone, banking, PM tool, camera test. (3) Take the <a href="#quiz-section">Knowledge Check Quiz</a> at the bottom, then follow the standard submission process — upload your result to the Quiz Results folder and notify the person who assigned it (for onboarding, that's the Performance Team). (4) Ask your Team Lead anything the hub doesn't answer.</p>
      </div>

      <h3 style="margin-top:24px">Three ways to navigate</h3>
      <div class="feature-grid">
        <div class="feature-tile"><span class="feature-tile-icon">🔍</span><h4>Search bar (top)</h4><p>Indexes every section, callout, glossary term, and FAQ. Press <strong>/</strong> to focus it from anywhere.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">☰</span><h4>Floating contents</h4><p>The round button at bottom-right opens a jump-to drawer on any screen size.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">▾</span><h4>Collapsible sections</h4><p>Click any section header to fold it away and scan the structure faster.</p></div>
      </div>

      <p style="margin-top:18px;font-size:13.5px;color:var(--iv-text-muted)"><em>This policy hub does not constitute a contractor agreement. Policy content amended August 4, 2025 (v5); onboarding content current as of June 2026. Employees are notified of any material changes.</em></p>
    </div>
  </div>
</section>

<!-- ============ 02 · ABOUT ============ -->
<section id="about">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">2 · The Company</span>
        <h2>About InvenTel &amp; TelNet</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p><strong>InvenTel</strong> was established in 1992 in the United States and has led the Direct Response Television (DRTV) sector from the start, building creative marketing strategies that forge strong bonds between brands and their audiences. Two names anchor most of the work: <strong>InvenTel</strong> (the brand portfolio and DRTV side) and <strong>TelNet</strong> (the data-fueled, expert-led marketing agency side). They operate together, and the policies in this hub apply across both. Beyond those two, you'll also see the company referred to by other names across email domains, documents, and tools — that's expected, and you don't need to track which is which. Names you may encounter include <strong>InvenTel.TV</strong>, <strong>InvenTel.net</strong>, <strong>InvenTel Innovations</strong>, and <strong>AsSeenOnTV LLC</strong>, and our agency work is sometimes presented under <strong>TelNet</strong>. You may also come across brands and ventures such as <strong>Home Inspo</strong> and <strong>Beyond Patents</strong>, with others in the portfolio and more in development.</p>
      <p style="font-size:13px;color:var(--iv-text-muted)"><em>This list isn't exhaustive and will grow over time. If you're ever unsure which name applies to something, just ask your Direct Report or HR — it's a common question.</em></p>

      <div class="pillars" style="margin-top:18px">
        <div class="pillar"><span class="pillar-icon">📺</span><h4>InvenTel · Mission</h4><p>Elevate holistic brand performance — increasing revenue, market share, and brand awareness across the InvenTel portfolio while building scalable marketing processes to grow the company through an agency model.</p></div>
        <div class="pillar"><span class="pillar-icon">💡</span><h4>InvenTel · Vision</h4><p>Develop solutions that solve real problems and bring value to people's lives — from the first spark of an idea to seeing products in stores worldwide.</p></div>
      </div>

      <h3 style="margin-top:24px">Who you connect with &amp; how we work together</h3>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">Reporting structure</div><div class="mini-v">You report directly to your <strong>Direct Report and/or your team's Project Manager</strong> — your primary points of contact for guidance, feedback, and day-to-day support.</div></div>
        <div class="mini"><div class="mini-k">Team relationships</div><div class="mini-v">Take time to get to know your teammates and build strong working relationships. Collaboration and open communication are at the heart of how we get results.</div></div>
        <div class="mini"><div class="mini-k">Teamwork &amp; culture</div><div class="mini-v">Focus on team building, support one another, and actively help create a positive, inclusive environment.</div></div>
        <div class="mini"><div class="mini-k">HR support</div><div class="mini-v">Need help, have questions, or want to discuss something confidentially? Reach out to HR anytime — especially in your first few weeks.</div></div>
      </div>

      <h3 style="margin-top:24px">The Drive HR Resources Folder</h3>
      <p>All key forms and information live in the <a href="https://drive.google.com/drive/folders/15MAcljeNEcmY7O3jr6onZMk4egGme3lk?usp=sharing" target="_blank" rel="noopener"><strong>Drive HR Resources Folder</strong></a>. It's split into two kinds of material:</p>
      <div class="do-dont">
        <div class="do">
          <h4>📚 Reference &amp; information</h4>
          <ul>
            <li><strong>Policy &amp; company reference</strong> — policy explanations, company history, and key logistics (kept current in this hub)</li>
            <li><strong>Team Structures</strong> — the visual guide to hierarchy and reporting lines for the company and your department</li>
          </ul>
        </div>
        <div class="do" style="background:rgba(200,32,42,.06);border-color:var(--iv-signal)">
          <h4 style="color:var(--iv-signal-deep)">📝 Forms &amp; templates</h4>
          <ul>
            <li><strong>Daily standup</strong> — submitted in the PM tool (Daily Scrum), no longer a Drive sheet</li>
            <li><strong>Leave requests</strong> — submitted in the PM tool (Leave Management), no longer a Drive form</li>
            <li><strong>Invoice Template</strong> — the required format for billing (see <a href="#accounting">Accounting &amp; Invoicing</a>)</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 03 · EXEC LEADERSHIP ============ -->
<section id="leadership">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">3 · Leadership</span>
        <h2>Executive Leadership</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>InvenTel is led by its founder and a small executive team. (These are the only individuals named by name in this hub — everywhere else, people are referred to by title so the document stays accurate as the team grows and changes.)</p>

      <div class="exec-feature">
        <div>
          <h3>Yasir Abdul</h3>
          <div class="exec-role">Founder &amp; Chief Executive Officer</div>
          <p>With over 32 years of experience in product innovation and direct-response television, Yasir is the driving force behind InvenTel, a powerhouse in the "As Seen On TV" space. As Founder and CEO, he's built a reputation for turning everyday problems into smart, accessible solutions through inventive product design and nationwide campaigns.</p>
          <p>His journey began with a passion for solving real-world problems in practical ways — an interest in invention and entrepreneurship that grew into a full business model, bringing consumer-focused solutions straight to television and into millions of homes. His leadership is grounded in creative thinking, analytical strategy, and a relentless focus on customer satisfaction, with a strong emphasis on collaboration, agility, and trust.</p>
          <div class="exec-stats">
            <div class="exec-stat"><b>1,000+</b><span>Products developed &amp; launched</span></div>
            <div class="exec-stat"><b>76+</b><span>Countries with product presence</span></div>
            <div class="exec-stat"><b>150K+</b><span>Retail stores worldwide</span></div>
            <div class="exec-stat"><b>100M+</b><span>Customers reached</span></div>
          </div>
          <p class="exec-quote">"When you create something that solves a real problem, people remember it. That's the power of what we do and why we keep pushing forward."</p>
        </div>
      </div>

      <p style="font-size:13px;color:var(--iv-text-muted)">Major milestones under Yasir's leadership include retail partnerships with Walmart, Home Depot, Target, Walgreens, and Bed Bath &amp; Beyond, and a global supply chain supporting international growth. More at <a href="https://inventel.tv/about-us/yasir-abdul/" target="_blank" rel="noopener">inventel.tv</a>.</p>

      <h3 style="margin-top:24px">Executive Vice Presidents</h3>
      <div class="evp-grid">
        <div class="evp-card">
          <div class="evp-name">Faiz Shaikh</div>
          <div class="evp-role">Executive Vice President · Business Development</div>
          <p>Drives InvenTel's growth through new business, strategic partnerships, and distribution expansion.</p>
        </div>
        <div class="evp-card">
          <div class="evp-name">Priscilla H.</div>
          <div class="evp-role">Executive Vice President</div>
          <p>Part of the executive team steering company strategy and operations across the portfolio.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 04 · ORG STRUCTURE ============ -->
<section id="orgstructure">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">4 · Org Structure</span>
        <h2>Organizational Structure</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <h3>How the organization fits together</h3>
      <p>Below the executive team, InvenTel runs as an agency: <strong>Department Leads</strong> own their teams' workload and quality, <strong>Brand Leads</strong> own brand strategy and knowledge, and <strong>Project Managers</strong> coordinate work across them. Day to day, your direction comes from your Department Lead, while work can also flow from a Brand Lead or PM (see <a href="#structure">Agency Structure &amp; Task Flow</a> for exactly how that works and how to keep your Dept Lead in the loop).</p>

      <h3 style="margin-top:20px">Organization chart</h3>
      <p>The CEO leads the company, with two Executive Vice Presidents over the organization. Below them sit the <strong>Business Functions</strong>, and the <strong>Digital Agency Team</strong> runs as its own set of specialist teams.</p>
      <div style="overflow-x:auto;margin:14px 0">
      <svg viewBox="-18 0 1018 612" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%;min-width:760px;aspect-ratio:1018/612;height:auto;font-family:'Inter',sans-serif" preserveAspectRatio="xMidYMid meet" role="img" aria-label="InvenTel organization chart. CEO/President Yasir Abdul leads, with EVP Business Development Faiz S. and Executive VP Priscilla H. below. Thirteen Business Functions: Biz Dev and Growth, Legal, Accounting and Finance, Production, Executive Assistants, IT, Artificial Intelligence, Customer Experience, Order Management, Warehouse, Brand Management, Agency Management, HR / Performance Team. The Digital Agency Team comprises fifteen teams: Project Managers, Paid Media, Paid Search, Email/SMS, Organic Social, UGC/Affiliate, Marketplace, SEO, CRO, Web Dev, Data and Analytics, Designers and Editors, Animation, Copywriting, Quality Assurance.">
        <defs>
          <marker id="oc-ah" markerWidth="8" markerHeight="8" refX="5" refY="3" orient="auto" markerUnits="strokeWidth"><path d="M0,0 L5,3 L0,6 Z" fill="#8A97A6"></path></marker>
        </defs>
        <!-- legend -->
        <rect x="404" y="14" width="16" height="16" rx="3" fill="#14304A" stroke="#14304A" stroke-width="1.2"></rect>
        <text x="426" y="26" font-size="12" fill="#54616E">Leadership</text>
        <rect x="516" y="14" width="16" height="16" rx="3" fill="#D8584A" stroke="#7A1F16" stroke-width="1.2"></rect>
        <text x="538" y="26" font-size="12" fill="#54616E">Business Functions</text>
        <rect x="674" y="14" width="16" height="16" rx="3" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.2"></rect>
        <text x="696" y="26" font-size="12" fill="#54616E">Digital Agency Team</text>

        <!-- CEO -->
        <rect x="395" y="46" width="210" height="56" rx="8" fill="#14304A" stroke="#14304A" stroke-width="1.5"></rect>
        <text x="500" y="70" text-anchor="middle" font-size="14" font-weight="800" fill="#fff" font-family="'Archivo',sans-serif">CEO / President</text>
        <text x="500" y="89" text-anchor="middle" font-size="13" fill="#F4D9DE">Yasir Abdul</text>

        <!-- connector CEO -> EVP row -->
        <path d="M500,102 L500,124" stroke="#8A97A6" stroke-width="1.4" fill="none"></path>
        <path d="M270,124 L730,124" stroke="#8A97A6" stroke-width="1.4" fill="none"></path>
        <path d="M270,124 L270,140" stroke="#8A97A6" stroke-width="1.4" fill="none"></path>
        <path d="M730,124 L730,140" stroke="#8A97A6" stroke-width="1.4" fill="none"></path>

        <!-- EVPs -->
        <rect x="165" y="140" width="210" height="56" rx="8" fill="#14304A" stroke="#14304A" stroke-width="1.5"></rect>
        <text x="270" y="164" text-anchor="middle" font-size="13.5" font-weight="800" fill="#fff" font-family="'Archivo',sans-serif">EVP Business Dev.</text>
        <text x="270" y="183" text-anchor="middle" font-size="13" fill="#F3D9DB">Faiz S.</text>
        <rect x="625" y="140" width="210" height="56" rx="8" fill="#14304A" stroke="#14304A" stroke-width="1.5"></rect>
        <text x="730" y="164" text-anchor="middle" font-size="13.5" font-weight="800" fill="#fff" font-family="'Archivo',sans-serif">Exec. VP</text>
        <text x="730" y="183" text-anchor="middle" font-size="13" fill="#F3D9DB">Priscilla H.</text>

        <!-- spine from CEO down to the department bus -->
        <path d="M500,102 L500,210" stroke="#8A97A6" stroke-width="1.4" fill="none"></path>
        <path d="M141,210 L841,210" stroke="#8A97A6" stroke-width="1.4" fill="none"></path>
        <path d="M141,210 L141,238" stroke="#8A97A6" stroke-width="1.4" fill="none"></path>
        <path d="M281,210 L281,238" stroke="#8A97A6" stroke-width="1.4" fill="none"></path>
        <path d="M421,210 L421,238" stroke="#8A97A6" stroke-width="1.4" fill="none"></path>
        <path d="M561,210 L561,238" stroke="#8A97A6" stroke-width="1.4" fill="none"></path>
        <path d="M701,210 L701,238" stroke="#8A97A6" stroke-width="1.4" fill="none"></path>
        <path d="M841,210 L841,238" stroke="#8A97A6" stroke-width="1.4" fill="none"></path>

        <!-- BUSINESS FUNCTIONS (red): row 1 = 6 centered, row 2 = 7 centered. box w=128, gap=12, canvas center=491 -->
        <g font-family="'Archivo',sans-serif">
        <!-- Row 1: 6 boxes centered. lefts 77,217,357,497,637,777 -> centers 141,281,421,561,701,841 -->
        <g>
          <rect x="77" y="238" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="141" y="262" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Biz Dev</text><text x="141" y="278" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">&amp; Growth</text>
        </g>
        <g>
          <rect x="217" y="238" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="281" y="269" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Legal</text>
        </g>
        <g>
          <rect x="357" y="238" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="421" y="262" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Accounting</text><text x="421" y="278" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">&amp; Finance</text>
        </g>
        <g>
          <rect x="497" y="238" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="561" y="269" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Production</text>
        </g>
        <g>
          <rect x="637" y="238" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="701" y="262" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Executive</text><text x="701" y="278" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Assistants</text>
        </g>
        <g>
          <rect x="777" y="238" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="841" y="262" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Information</text><text x="841" y="278" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Technology</text>
        </g>
        <!-- Row 2: 7 boxes centered. lefts 7,147,287,427,567,707,847 -> centers 71,211,351,491,631,771,911. Order: AI, HR, BM, AM, CX, OM, Warehouse -->
        <rect x="7" y="300" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="71" y="324" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Artificial</text><text x="71" y="340" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Intelligence</text>
        <rect x="147" y="300" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="211" y="324" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">HR /</text><text x="211" y="340" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Performance</text>
        <rect x="287" y="300" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="351" y="324" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Brand</text><text x="351" y="340" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Management</text>
        <rect x="427" y="300" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="491" y="324" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Agency</text><text x="491" y="340" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Management</text>
        <rect x="567" y="300" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="631" y="324" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Customer</text><text x="631" y="340" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Experience</text>
        <rect x="707" y="300" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="771" y="324" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Order</text><text x="771" y="340" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Management</text>
        <rect x="847" y="300" width="128" height="52" rx="7" fill="#D8584A" stroke="#7A1F16" stroke-width="1.6"></rect><text x="911" y="331" text-anchor="middle" font-size="13.5" font-weight="700" fill="#fff">Warehouse</text>
        </g>

        <!-- divider -->
        <line x1="20" y1="384" x2="940" y2="384" stroke="#9E1B32" stroke-width="2"></line>

        <!-- DIGITAL AGENCY TEAM (blue): row 1 = 7 centered, row 2 = 8 centered. box w=116, gap=11, canvas center=491 -->
        <g font-family="'Archivo',sans-serif">
        <!-- Row 1: 7 boxes centered. lefts 52,179,306,433,560,687,814 -> centers 110,237,364,491,618,745,872. Order: Project, Data, QA, Web Dev, SEO, CRO, Marketplace -->
        <rect x="52" y="406" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="110" y="430" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Project</text><text x="110" y="446" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Managers</text>
        <rect x="179" y="406" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="237" y="430" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Data &amp;</text><text x="237" y="446" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Analytics</text>
        <rect x="306" y="406" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="364" y="430" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Quality</text><text x="364" y="446" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Assurance</text>
        <rect x="433" y="406" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="491" y="437" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Web Dev</text>
        <rect x="560" y="406" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="618" y="437" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">SEO</text>
        <rect x="687" y="406" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="745" y="437" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">CRO</text>
        <rect x="814" y="406" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="872" y="437" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Marketplace</text>
        <!-- Row 2: 8 boxes centered. lefts -12,116,242,370,496,624,750,878 -> centers 46,174,300,428,554,682,808,936. Order: Paid Media, Paid Search, Organic Social, UGC, Email, Designers&Editors, Animation, Copywriting -->
        <rect x="-12" y="468" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="46" y="499" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Paid Media</text>
        <rect x="116" y="468" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="174" y="499" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Paid Search</text>
        <rect x="242" y="468" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="300" y="499" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Organic Social</text>
        <rect x="370" y="468" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="428" y="499" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">UGC / Affiliate</text>
        <rect x="496" y="468" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="554" y="499" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Email / SMS</text>
        <rect x="624" y="468" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="682" y="492" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Designers</text><text x="682" y="508" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">&amp; Editors</text>
        <rect x="750" y="468" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="808" y="499" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Animation</text>
        <rect x="878" y="468" width="116" height="52" rx="7" fill="#2E5A82" stroke="#0C1A28" stroke-width="1.6"></rect><text x="936" y="499" text-anchor="middle" font-size="13" font-weight="700" fill="#fff">Copywriting</text>
        </g>

        <line x1="20" y1="558" x2="940" y2="558" stroke="#E1E7EE" stroke-width="1"></line>
        <text x="20" y="582" font-size="11.5" fill="#54616E"><tspan font-weight="700" fill="#15212E">Structure only.</tspan> Individual team members are maintained in the separate People Roster.</text>
      </svg>
      </div>

      <div class="team-callout lead" id="callout-1">
        <span class="team-tag">Org Charts · Always Current</span>
        <p>The chart above shows the current high-level structure. Because reporting lines and team shapes change often, the <strong>detailed, always-current org charts</strong> live in a shared Google Drive rather than being pasted here. Find both the <strong>company-wide org chart</strong> and the <strong>detailed department org charts</strong> in the <a href="https://drive.google.com/drive/folders/1hzSKJ2sRkX-R_y_cHWAPwM0YxhqkWIjJ?usp=sharing" target="_blank" rel="noopener">Department Structures folder</a>. Department Leads keep their charts updated there and share revisions with the Performance Team. Check that folder for the latest detail rather than relying on a snapshot.</p>
        <p style="margin-top:10px"><strong>Other companies we've acquired that still operate separately</strong> have their own org charts, kept in the same shared Drive. The chart above covers InvenTel's structure — if you work with or across one of those companies, look for its individual org chart in the folder.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ 05 · STRUCTURE ============ -->
<section id="structure">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">5 · Who Assigns Your Work</span>
        <h2>Agency Structure &amp; Task Flow</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>Your primary direction comes from your <strong>Department Lead</strong>. But on an agency team, work can also legitimately come from a Brand Lead, another Department Lead, a Project Manager, or — on rare occasions — another team member. That's normal. The one rule that holds it all together is <strong>visibility</strong>.</p>

      <h3 style="margin-top:20px">Agency work assignment flow</h3>
      <p>Here's how work flows through the agency — who sets direction, who owns each department, and how shared creative resources support every team:</p>
      <div style="overflow-x:auto;margin:14px 0">
      <svg viewBox="0 0 980 760" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%;min-width:680px;aspect-ratio:980/760;height:auto;font-family:'Inter',sans-serif" preserveAspectRatio="xMidYMid meet" role="img" aria-label="Agency work assignment flow diagram: Agency Lead, Brand Lead, and Project Managers sit at the top; work flows down into three departments — Paid Media, Owned and Earned Media, and Digital Ops and UX — each with Department Leads and Team Members; Shared Creative Resources support all departments.">
        <defs>
          <marker id="ah" markerWidth="9" markerHeight="9" refX="6" refY="3" orient="auto" markerUnits="strokeWidth"><path d="M0,0 L6,3 L0,6 Z" fill="#3A2225"></path></marker>
        </defs>
        <!-- TIER 1: leadership -->
        <g>
          <rect x="40" y="20" width="270" height="74" rx="10" fill="#F4F7FB" stroke="#5A6B7D" stroke-width="1.5" stroke-dasharray="5 4"></rect>
          <text x="175" y="46" text-anchor="middle" font-size="16" font-weight="800" fill="#1A1416" font-family="'Archivo',sans-serif">Agency Lead</text>
          <text x="175" y="66" text-anchor="middle" font-size="11" fill="#54616E">Oversees &amp; supports the agency</text>
          <text x="175" y="82" text-anchor="middle" font-size="11" fill="#54616E">Keeps depts &amp; leads on track</text>

          <rect x="355" y="20" width="270" height="74" rx="10" fill="#3A2225" stroke="#2A1719" stroke-width="1.5"></rect>
          <text x="490" y="46" text-anchor="middle" font-size="16" font-weight="800" fill="#FFFFFF" font-family="'Archivo',sans-serif">Brand Lead</text>
          <text x="490" y="66" text-anchor="middle" font-size="11" fill="#F3D9DB">Sets strategy</text>
          <text x="490" y="82" text-anchor="middle" font-size="11" fill="#F3D9DB">Owns brand direction</text>

          <rect x="670" y="20" width="270" height="74" rx="10" fill="#F4F7FB" stroke="#5A6B7D" stroke-width="1.5" stroke-dasharray="5 4"></rect>
          <text x="805" y="46" text-anchor="middle" font-size="16" font-weight="800" fill="#1A1416" font-family="'Archivo',sans-serif">Project Managers</text>
          <text x="805" y="66" text-anchor="middle" font-size="11" fill="#54616E">Assign &amp; follow up on tasks</text>
          <text x="805" y="82" text-anchor="middle" font-size="11" fill="#54616E">Support Brand &amp; Dept Leads</text>
        </g>
        <!-- connectors: Brand Lead fans out to all three departments (Agency Lead & PMs are support, no arrows) -->
        <path d="M490,94 L490,120 L175,120 L175,150" stroke="#3A2225" stroke-width="1.5" fill="none" marker-end="url(#ah)"></path>
        <path d="M490,94 L490,150" stroke="#3A2225" stroke-width="1.5" fill="none" marker-end="url(#ah)"></path>
        <path d="M490,94 L490,120 L805,120 L805,150" stroke="#3A2225" stroke-width="1.5" fill="none" marker-end="url(#ah)"></path>
        <!-- TIER 2: department leads -->
        <g>
          <rect x="40" y="152" width="270" height="86" rx="10" fill="#C0392B" stroke="#8E2A1F" stroke-width="1.5"></rect>
          <text x="175" y="178" text-anchor="middle" font-size="15" font-weight="800" fill="#FFFFFF" font-family="'Archivo',sans-serif">Paid Media</text>
          <text x="175" y="200" text-anchor="middle" font-size="11.5" fill="#FBE9D2" font-weight="700">Department Lead(s)</text>
          <text x="175" y="222" text-anchor="middle" font-size="11" fill="#FBE9D2">Paid Social · Paid Search</text>

          <rect x="355" y="152" width="270" height="86" rx="10" fill="#C0392B" stroke="#8E2A1F" stroke-width="1.5"></rect>
          <text x="490" y="174" text-anchor="middle" font-size="15" font-weight="800" fill="#FFFFFF" font-family="'Archivo',sans-serif">Owned / Earned Media</text>
          <text x="490" y="194" text-anchor="middle" font-size="11.5" fill="#FBE9D2" font-weight="700">Department Lead(s)</text>
          <text x="490" y="212" text-anchor="middle" font-size="10.5" fill="#FBE9D2">Email/SMS · Organic Social</text>
          <text x="490" y="228" text-anchor="middle" font-size="10.5" fill="#FBE9D2">Social Commerce · Marketplace</text>

          <rect x="670" y="152" width="270" height="86" rx="10" fill="#C0392B" stroke="#8E2A1F" stroke-width="1.5"></rect>
          <text x="805" y="178" text-anchor="middle" font-size="15" font-weight="800" fill="#FFFFFF" font-family="'Archivo',sans-serif">Digital Ops &amp; UX</text>
          <text x="805" y="200" text-anchor="middle" font-size="11.5" fill="#FBE9D2" font-weight="700">Department Lead(s)</text>
          <text x="805" y="222" text-anchor="middle" font-size="11" fill="#FBE9D2">SEO · Web Design · CRO</text>
        </g>
        <!-- connectors dept -> team -->
        <path d="M175,238 L175,272" stroke="#3A2225" stroke-width="1.5" fill="none" marker-end="url(#ah)"></path>
        <path d="M490,238 L490,272" stroke="#3A2225" stroke-width="1.5" fill="none" marker-end="url(#ah)"></path>
        <path d="M805,238 L805,272" stroke="#3A2225" stroke-width="1.5" fill="none" marker-end="url(#ah)"></path>
        <!-- TIER 3: team members -->
        <g>
          <rect x="40" y="274" width="270" height="62" rx="10" fill="#FBEAEA" stroke="#C0392B" stroke-width="1.5"></rect>
          <text x="175" y="300" text-anchor="middle" font-size="14" font-weight="700" fill="#8E2A1F" font-family="'Archivo',sans-serif">Team Members</text>
          <text x="175" y="320" text-anchor="middle" font-size="11" fill="#A32D2D">Paid Media</text>

          <rect x="355" y="274" width="270" height="62" rx="10" fill="#FBEAEA" stroke="#C0392B" stroke-width="1.5"></rect>
          <text x="490" y="300" text-anchor="middle" font-size="14" font-weight="700" fill="#8E2A1F" font-family="'Archivo',sans-serif">Team Members</text>
          <text x="490" y="320" text-anchor="middle" font-size="11" fill="#A32D2D">Owned / Earned Media</text>

          <rect x="670" y="274" width="270" height="62" rx="10" fill="#FBEAEA" stroke="#C0392B" stroke-width="1.5"></rect>
          <text x="805" y="300" text-anchor="middle" font-size="14" font-weight="700" fill="#8E2A1F" font-family="'Archivo',sans-serif">Team Members</text>
          <text x="805" y="320" text-anchor="middle" font-size="11" fill="#A32D2D">Digital Ops &amp; UX</text>
        </g>
        <!-- connectors team -> shared -->
        <path d="M175,336 L175,360 L490,360 L490,386" stroke="#3A2225" stroke-width="1.5" fill="none"></path>
        <path d="M805,336 L805,360 L490,360" stroke="#3A2225" stroke-width="1.5" fill="none"></path>
        <path d="M490,336 L490,386" stroke="#3A2225" stroke-width="1.5" fill="none" marker-end="url(#ah)"></path>
        <!-- TIER 4: shared creative resources -->
        <rect x="40" y="388" width="900" height="96" rx="10" fill="#0F6E56" stroke="#085041" stroke-width="1.5"></rect>
        <text x="490" y="416" text-anchor="middle" font-size="16" font-weight="800" fill="#FFFFFF" font-family="'Archivo',sans-serif">Shared Creative Resources — Department Lead(s)</text>
        <text x="490" y="440" text-anchor="middle" font-size="11.5" fill="#E1F5EE">AI · Designers &amp; Editors · 3D Animations · Copywriting</text>
        <text x="490" y="462" text-anchor="middle" font-size="11.5" fill="#E1F5EE">Assigned by Brand Lead or any Dept Lead · Works cross-functionally with all departments</text>
        <!-- connector shared -> team -->
        <path d="M490,484 L490,512" stroke="#3A2225" stroke-width="1.5" fill="none" marker-end="url(#ah)"></path>
        <!-- TIER 5: shared team members -->
        <rect x="40" y="514" width="900" height="66" rx="10" fill="#E1F5EE" stroke="#0F6E56" stroke-width="1.5"></rect>
        <text x="490" y="542" text-anchor="middle" font-size="14" font-weight="700" fill="#085041" font-family="'Archivo',sans-serif">Team Members</text>
        <text x="490" y="562" text-anchor="middle" font-size="11" fill="#0F6E56">Shared Creative Resources · Includes overseas team members across multiple time zones</text>
        <!-- footnote rules -->
        <g>
          <rect x="40" y="606" width="440" height="130" rx="10" fill="#E6F1FB" stroke="#378ADD" stroke-width="1.5"></rect>
          <text x="62" y="632" font-size="12.5" font-weight="800" fill="#0C447C" font-family="'DM Mono',monospace">★ ASSIGNMENT RULE</text>
          <text x="62" y="656" font-size="11" fill="#15212E">Work may come from the Agency Lead, Brand Lead, Dept Leads,</text>
          <text x="62" y="672" font-size="11" fill="#15212E">PMs, or (rarely) another team member.</text>
          <text x="62" y="694" font-size="11" fill="#15212E">Team members may create their own tasks — but always</text>
          <text x="62" y="710" font-size="11" fill="#15212E">update your Dept Lead so it stays visible.</text>

          <rect x="500" y="606" width="440" height="130" rx="10" fill="#FAEEDA" stroke="#BA7517" stroke-width="1.5"></rect>
          <text x="522" y="632" font-size="12.5" font-weight="800" fill="#854F0B" font-family="'DM Mono',monospace">⚠ CHANNEL RULE</text>
          <text x="522" y="656" font-size="11" fill="#15212E">All task requests go through the proper PM channel —</text>
          <text x="522" y="672" font-size="11" fill="#15212E">NOT a private DM.</text>
          <text x="522" y="694" font-size="11" fill="#15212E">If DM'd: move it to the correct channel and notify your</text>
          <text x="522" y="710" font-size="11" fill="#15212E">Dept Lead. DMs get missed.</text>
        </g>
      </svg>
      </div>

      <h3 style="margin-top:20px">The golden rule: keep your Dept Lead informed</h3>
      <p>Whenever a task arrives from <em>anyone</em> outside your direct Department Lead, notify your Dept Lead immediately with three things:</p>
      <div class="flow">
        <div class="flow-step"><div class="flow-step-body"><strong>What</strong> the task is</div></div>
        <div class="flow-step"><div class="flow-step-body"><strong>Who</strong> sent it</div></div>
        <div class="flow-step"><div class="flow-step-body">The <strong>deadline</strong></div></div>
      </div>
      <p style="margin-top:14px">Your Dept Lead owns your full workload, quality, deadlines, and capacity. They may re-prioritize, push back on a task, or redirect it entirely — but only if they can see it. This applies even to tasks you create for yourself: self-assigned work is encouraged, but always make it visible.</p>

      <div class="hazard" id="hazard-0">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>📥 No task assignments via private DM — no exceptions</h4>
          <p>All task requests must go through the proper project-management channel, <strong>never a private DM</strong>. This holds even if the sender is senior to you. If someone DMs you a task, <strong>move it to the correct channel and notify your Dept Lead.</strong> A task sent by DM is invisible to leadership — it may be the wrong task for you, conflict with a deadline, or belong to someone else. When in doubt, put it in the channel.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 06 · HR & CONTACTS ============ -->
<section id="contacts">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">6 · Who to Ask</span>
        <h2>HR Department, Key Contacts &amp; Escalation</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <div class="team-callout newhire" id="callout-2">
        <span class="team-tag">Who this is for</span>
        <p>The HR routing below is for <strong>international team members only</strong> — it does not apply to US W2 or 1099 employees. HR is here to support you, so don't hesitate to reach out; that's what they're here for.</p>
      </div>

      <h3 style="margin-top:20px">How HR is structured</h3>
      <p>The HR department is made up of <strong>three teams that work together</strong> to support you across your whole time at InvenTel — from hiring, through onboarding, to day-to-day performance and workforce operations. Reach the team whose area matches your need; if you're not sure, start with the Performance Team and they'll point you the right way.</p>

      <div class="hr-grid">
        <div class="hr-card feature">
          <div class="hr-role">Lead Team</div>
          <div class="hr-name">Performance Team</div>
          <ul>
            <li>New-hire onboarding &amp; support</li>
            <li>Platform &amp; access management</li>
            <li>1:1 coaching, SOPs &amp; workflows</li>
            <li>Performance reviews</li>
            <li>Team-member &amp; lead concerns — handled confidentially</li>
          </ul>
        </div>
        <div class="hr-card">
          <div class="hr-role">Operations</div>
          <div class="hr-name">Workforce Analyst Team</div>
          <ul>
            <li>Leave requests, balances &amp; tracking</li>
            <li>PM tracker monitoring</li>
            <li>Manual time entries</li>
            <li>Workforce reporting &amp; support</li>
          </ul>
        </div>
        <div class="hr-card">
          <div class="hr-role">Hiring</div>
          <div class="hr-name">Talent Acquisition Team</div>
          <ul>
            <li>Full-cycle talent acquisition</li>
            <li>Candidate sourcing &amp; screening</li>
            <li>Interview coordination</li>
            <li>Offers, referrals &amp; contracts</li>
          </ul>
        </div>
      </div>

      <h3 style="margin-top:22px">Which HR team for what</h3>
      <div class="table-wrap">
        <table>
          <thead><tr><th>What you need</th><th>Which team</th></tr></thead>
          <tbody>
            <tr><td>New-hire onboarding &amp; support</td><td><strong>Performance Team</strong></td></tr>
            <tr><td>Platform access</td><td><strong>Performance Team</strong></td></tr>
            <tr><td>Performance reviews, coaching &amp; SOPs</td><td><strong>Performance Team</strong></td></tr>
            <tr><td>An issue with a team member or your lead, a tricky situation, or you're unsure who to ask</td><td><strong>Performance Team</strong> — handled with care and confidentiality</td></tr>
            <tr><td>Leave requests, balances, or time-off questions</td><td><strong>Workforce Analyst Team</strong></td></tr>
            <tr><td>PM tracker issues or manual time entries</td><td><strong>Workforce Analyst Team</strong></td></tr>
            <tr><td>Hiring, an open position, or sharing a referral / CV</td><td><strong>Talent Acquisition Team</strong></td></tr>
          </tbody>
        </table>
      </div>
      <div class="team-callout cx" id="callout-3">
        <span class="team-tag">Confidential · Performance Team</span>
        <p>For anything involving a team member or a lead — concerns, conflicts, or a situation you're unsure how to handle — reach out to the <strong>Performance Team</strong>. Everything is handled with care and confidentiality.</p>
      </div>

      <div class="team-callout finance" id="callout-4">
        <span class="team-tag">HR Does Not Handle Money</span>
        <p>HR does <strong>not</strong> handle anything money-related — pay, invoices, banking, deductions, or payment timing. All of that goes to the <strong>Accounting team</strong>. If you contact HR about a money question or issue, they'll simply point you back here: use the shared accounting inbox <a href="mailto:payroll@inventel.net">payroll@inventel.net</a>, or message any member of the Accounting team directly in Chat. You'll find the Accounting team members on the <strong>Accounting department org chart</strong> — see <a href="#orgstructure">Organizational Structure</a> for the link to the org-chart folder.</p>
      </div>

      <h3 style="margin-top:22px">Other key contacts &amp; escalation</h3>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Topic</th><th>Who / Where</th></tr></thead>
          <tbody>
            <tr><td>Money — pay, invoices, banking, deductions</td><td>Accounting team — shared inbox <a href="mailto:payroll@inventel.net">payroll@inventel.net</a>, or a team member's Chat (see the Accounting org chart). Banking setup &amp; pay questions: <a href="mailto:tanvir@inventel.net">tanvir@inventel.net</a> by private Chat.</td></tr>
            <tr><td>Day-to-day work, priorities &amp; capacity</td><td>Your Department Lead</td></tr>
            <tr><td>Brand or product questions &amp; hub quizzes</td><td>The relevant Brand Lead</td></tr>
            <tr><td>Profile image &amp; email signature</td><td>Performance Team (they request it from the Workforce Analyst Team)</td></tr>
            <tr><td>Department org-chart updates</td><td>Performance Team</td></tr>
          </tbody>
        </table>
      </div>
      <p style="font-size:13px;color:var(--iv-text-muted)">When unsure who owns something work-related, ask your Department Lead — they'll route it. For HR matters, the map above tells you exactly who to reach.</p>
    </div>
  </div>
</section>

<!-- ============ 07 · ACCOUNTING ============ -->
<section id="accounting">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">7 · Getting Paid</span>
        <h2>Accounting &amp; Invoicing</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <div class="team-callout finance" id="callout-5">
        <span class="team-tag">Day One · Don't Defer</span>
        <p>Email <a href="mailto:tanvir@inventel.net">tanvir@inventel.net</a> on your <strong>first day</strong> to set up banking details — this cannot wait until month-end. A bank letter verifying account ownership may be required, and delaying setup can cause payment-processing delays.</p>
      </div>

      <h3 style="margin-top:20px">Monthly invoice process</h3>
      <div class="spec-table">
        <dl>
          <dt>Due date</dt><dd>By the <strong>25th</strong> of each month</dd>
          <dt>Send to</dt><dd>Email to the shared accounting inbox <a href="mailto:payroll@inventel.net">payroll@inventel.net</a>. Invoices sent elsewhere may delay payment.</dd>
          <dt>File name</dt><dd><strong>FirstName LastName_Invoice_MMYYYY.pdf</strong> — e.g. John Doe_Invoice_APR2026.pdf</dd>
          <dt>Template</dt><dd>Use the official <a href="https://docs.google.com/spreadsheets/d/1PnKmY6OmiM5vXsOVT39e_Xi1MVfhAqXL/edit?usp=sharing&amp;ouid=102281127488077371367&amp;rtpof=true&amp;sd=true" target="_blank" rel="noopener">Invoice Template — Inventel.xlsx</a> only</dd>
          <dt>Payment</dt><dd>Processed by the <strong>10th</strong> of the following month</dd>
          <dt>Amount</dt><dd>Use the agreed monthly rate from your contract</dd>
          <dt>Paid for</dt><dd>The <strong>previous</strong> month's work — e.g. work done Jan 1–31 is paid in early February</dd>
          <dt>Missed days</dt><dd>List any missed workdays in the invoice <strong>Notes</strong> section — accounting cross-references attendance and will deduct them either way, so accuracy is your responsibility</dd>
        </dl>
      </div>
      <div class="hazard" id="hazard-1">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>🧾 Submit by the 25th, named correctly, or payment is delayed</h4>
          <p>Get your invoice to <a href="mailto:payroll@inventel.net">payroll@inventel.net</a> <strong>by the 25th</strong>, using the official template and the exact file name <strong>FirstName LastName_Invoice_MMYYYY.pdf</strong>. Late, misnamed, or misdirected invoices can miss the cycle, and on-time correct ones are paid by the <strong>10th</strong> of the following month.</p>
        </div>
      </div>
      <p style="font-size:13px;color:var(--iv-text-muted);margin-top:8px"><em>Banking setup is a private chat with the Accountant on day one — never share invoice or bank details with anyone except the company accountant, and only by direct email or private chat.</em></p>

      <div class="hazard" id="hazard-2">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>🔒 Your pay is confidential — an NDA obligation</h4>
          <p>Your salary and compensation details are <strong>strictly confidential</strong> under your NDA. Don't discuss or disclose them to colleagues under any circumstances. All pay questions go to the Accountant via private Google Chat only, and bank or invoice details are <strong>never shared with anyone other than the Accountant.</strong></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 08 · HOURS ============ -->
<section id="hours">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">8 · Availability</span>
        <h2>Working Hours, Time Zone &amp; Lunch</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>InvenTel's headquarters is in New Jersey, USA, and <strong>the entire company runs on one clock: Eastern Time (ET)</strong>. Standard working hours are <strong>8:30 AM – 5:30 PM ET</strong>. This is true for everyone — our teams in <strong>Egypt, India, Pakistan, the Philippines, Indonesia, Argentina, and Colombia</strong>, and our teams inside the United States. Wherever you sit, your working day, your meetings, your deadlines, and your messages all follow Eastern Time.</p>

      <h3 style="margin-top:6px">Why everyone uses ET — including when you talk to each other</h3>
      <p>When you communicate, schedule a meeting, or set a deadline, <strong>always state the time in ET — never in your own local time.</strong> This is the single rule that keeps a team spread across five countries and multiple US time zones aligned. If everyone speaks in ET, there's exactly one conversion for each person to make, in their head, instantly — and no one is ever confused about whether "3 PM" means your afternoon or someone else's. The moment people start mixing local times into messages and invites, missed meetings and blown deadlines follow.</p>

      <div class="hazard" id="hazard-3">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>🕐 One clock, no exceptions — always communicate in ET</h4>
          <p>Set your Google Calendar <strong>primary</strong> time zone to Eastern Time, and send every meeting invite, message, and deadline in ET. Don't translate to your local time for a colleague, even to be helpful — it breaks the one-clock rule and creates exactly the confusion it's meant to prevent. Add your own local zone only as a <strong>secondary</strong> clock for your personal reference.</p>
        </div>
      </div>

      <div class="team-callout newhire" id="callout-6">
        <span class="team-tag">New Hire · Setup</span>
        <p>In Google Calendar: <strong>Settings → Time zone → primary = Eastern Time (US &amp; Canada)</strong>. Then <strong>Settings → World clock → add your local time zone</strong> as a secondary display so you can see both side by side. Your primary stays ET permanently — that's what every invite you receive and send is anchored to.</p>
      </div>

      <h3 style="margin-top:20px">When the US clocks change, the whole company shifts with NJ</h3>
      <p>Twice a year the United States changes its clocks for Daylight Saving Time (roughly mid-March and early November). When New Jersey's clock moves, <strong>all company time moves with it</strong> — InvenTel always follows the current Eastern Time in NJ. Several of our overseas countries do <em>not</em> observe Daylight Saving Time, so on those two changeover dates the gap between your local time and ET shifts by an hour. That's expected, and it's on you to accommodate it.</p>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">What changes</div><div class="mini-v">For about two weeks twice a year, your local-to-ET offset is one hour different from what you're used to, until your own country (if it observes DST) catches up — or stays shifted all season if it doesn't.</div></div>
        <div class="mini"><div class="mini-k">What you do</div><div class="mini-v">Nothing in Google Calendar — because your primary zone is set to ET, every meeting automatically stays correct in ET and simply lands at a new local hour for you. Just be aware your "8:30 AM EST start" may now feel an hour earlier or later locally.</div></div>
        <div class="mini"><div class="mini-k">Why it matters</div><div class="mini-v">Missing this is the most common avoidable scheduling mistake on a global team. If you're not sure whether a change has happened, check the current time in NJ — that is the company time, always.</div></div>
      </div>

      <h3 style="margin-top:20px">Working hours &amp; lunch by location</h3>
      <p>Office hours (8:30 AM – 5:30 PM ET) and the one-hour lunch (12:30 – 1:30 PM ET) are the same for everyone — they're anchored to Eastern Time. But because the US changes its clocks twice a year and <strong>most of our other locations don't</strong>, the <em>local</em> hour those land at shifts by one hour between US summer and US winter. To save you the math, here's both, so you always know your real local hours. <strong>Only the US and Egypt observe Daylight Saving and move with the clock change</strong> — for them the local time is the same year-round; everyone else has two rows of local time depending on the US season.</p>

      <h4 style="margin-top:16px">Office hours — 8:30 AM – 5:30 PM ET</h4>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Location</th><th>US Summer (EDT) — local</th><th>US Winter (EST) — local</th></tr></thead>
          <tbody>
            <tr><td>US (ET) <span style="color:var(--iv-text-muted);font-size:12px">(EST / EDT)</span></td><td>8:30 AM – 5:30 PM</td><td>8:30 AM – 5:30 PM</td></tr>
            <tr><td>Egypt <span style="color:var(--iv-text-muted);font-size:12px">(EET / EEST)</span></td><td>3:30 PM – 12:30 AM</td><td>3:30 PM – 12:30 AM</td></tr>
            <tr><td>Pakistan <span style="color:var(--iv-text-muted);font-size:12px">(PKT)</span></td><td>5:30 PM – 2:30 AM</td><td>6:30 PM – 3:30 AM</td></tr>
            <tr><td>India <span style="color:var(--iv-text-muted);font-size:12px">(IST)</span></td><td>6:00 PM – 3:00 AM</td><td>7:00 PM – 4:00 AM</td></tr>
            <tr><td>Philippines <span style="color:var(--iv-text-muted);font-size:12px">(PHT)</span></td><td>8:30 PM – 5:30 AM</td><td>9:30 PM – 6:30 AM</td></tr>
            <tr><td>Indonesia (Jakarta) <span style="color:var(--iv-text-muted);font-size:12px">(WIB)</span></td><td>7:30 PM – 4:30 AM</td><td>8:30 PM – 5:30 AM</td></tr>
            <tr><td>Argentina <span style="color:var(--iv-text-muted);font-size:12px">(ART)</span></td><td>9:30 AM – 6:30 PM</td><td>10:30 AM – 7:30 PM</td></tr>
            <tr><td>Colombia <span style="color:var(--iv-text-muted);font-size:12px">(COT)</span></td><td>7:30 AM – 4:30 PM</td><td>8:30 AM – 5:30 PM</td></tr>
          </tbody>
        </table>
      </div>

      <h4 style="margin-top:18px">Company lunch — 12:30 – 1:30 PM ET</h4>
      <p>There's a single, company-wide lunch break. Everyone takes it at the same time so the whole company is offline and back together at once.</p>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Location</th><th>US Summer (EDT) — local</th><th>US Winter (EST) — local</th></tr></thead>
          <tbody>
            <tr><td>US (ET) <span style="color:var(--iv-text-muted);font-size:12px">(EST / EDT)</span></td><td>12:30 PM – 1:30 PM</td><td>12:30 PM – 1:30 PM</td></tr>
            <tr><td>Egypt <span style="color:var(--iv-text-muted);font-size:12px">(EET / EEST)</span></td><td>7:30 PM – 8:30 PM</td><td>7:30 PM – 8:30 PM</td></tr>
            <tr><td>Pakistan <span style="color:var(--iv-text-muted);font-size:12px">(PKT)</span></td><td>9:30 PM – 10:30 PM</td><td>10:30 PM – 11:30 PM</td></tr>
            <tr><td>India <span style="color:var(--iv-text-muted);font-size:12px">(IST)</span></td><td>10:00 PM – 11:00 PM</td><td>11:00 PM – 12:00 AM</td></tr>
            <tr><td>Philippines <span style="color:var(--iv-text-muted);font-size:12px">(PHT)</span></td><td>12:30 AM – 1:30 AM</td><td>1:30 AM – 2:30 AM</td></tr>
            <tr><td>Indonesia (Jakarta) <span style="color:var(--iv-text-muted);font-size:12px">(WIB)</span></td><td>11:30 PM – 12:30 AM</td><td>12:30 AM – 1:30 AM</td></tr>
            <tr><td>Argentina <span style="color:var(--iv-text-muted);font-size:12px">(ART)</span></td><td>1:30 PM – 2:30 PM</td><td>2:30 PM – 3:30 PM</td></tr>
            <tr><td>Colombia <span style="color:var(--iv-text-muted);font-size:12px">(COT)</span></td><td>11:30 AM – 12:30 PM</td><td>12:30 PM – 1:30 PM</td></tr>
          </tbody>
        </table>
      </div>
      <p style="font-size:13px;color:var(--iv-text-muted)"><strong>US summer</strong> runs roughly mid-March to early November (Eastern Daylight Time); <strong>US winter</strong> is the rest of the year (Eastern Standard Time). Because your Google Calendar primary zone is set to ET, every meeting stays correct automatically — these tables just tell you what your local clock will read. A lunch that runs over one hour must be logged the same day as an <a href="#leave">Incomplete Workday</a>.</p>

      <h3 style="margin-top:20px">After-hours reality</h3>
      <p>InvenTel respects personal time. Occasionally, urgent project needs may require a prompt response in the evening or on a weekend. This is not the norm — but it is a reality of working on a global, fast-moving team.</p>
    </div>
  </div>
</section>

<!-- ============ 09 · LEAVE ============ -->
<section id="leave">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">9 · Time Off</span>
        <h2>Leave &amp; Time Off</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>Your total annual paid leave allowance is <strong>16 days</strong>, made up of three buckets. Everything beyond 16 days in a year is unpaid. Days can be combined and taken as half-days, and your <strong>balance is tracked in the PM tool</strong>.</p>
      <div class="stat-boxes">
        <div class="stat-box"><div class="stat-big">5</div><div class="stat-lbl">PTO days</div></div>
        <div class="stat-box"><div class="stat-big">5</div><div class="stat-lbl">Sick days</div></div>
        <div class="stat-box"><div class="stat-big">6</div><div class="stat-lbl">Floating holidays</div></div>
      </div>

      <div class="hazard" id="hazard-4">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>📋 All leave is requested in the PM tool — effective immediately</h4>
          <p>Leave is <strong>no longer a Google Form</strong>. Every leave request now goes through <strong>Leave Management inside the InvenTel PM tool</strong> (see <a href="#pmtool">The InvenTel PM Tool</a>). Requests submitted any other way may not be considered. Your <strong>balances</strong> are updated in the tool too.</p>
        </div>
      </div>

      <h3 style="margin-top:20px">How to submit a leave request</h3>
      <div class="flow">
        <div class="flow-step"><div class="flow-step-body">Log in to your <strong>PM tool</strong> account.</div></div>
        <div class="flow-step"><div class="flow-step-body">From the left-hand menu, click <strong>Leave Management</strong>.</div></div>
        <div class="flow-step"><div class="flow-step-body">Click <strong>Submit Leave Request</strong> (top-right of the page).</div></div>
        <div class="flow-step"><div class="flow-step-body">Fill in the form: email, full name, job title, direct report/manager, <strong>request type</strong> (Planned Leave or Emergency / Day-Of call-out), <strong>leave type</strong>, leave duration, start date, end date, and reason.</div></div>
        <div class="flow-step"><div class="flow-step-body">Read and accept the <strong>acknowledgement</strong>, add your signature and today's date, then click <strong>Submit</strong> for approval.</div></div>
      </div>
      <p style="font-size:13px;color:var(--iv-text-muted)"><strong>Half day or early leave?</strong> You must state the exact time in ET — e.g. a half day as "8:30 AM ET – 1:30 PM ET", or an early leave as "Leaving at 3:00 PM ET". Requests missing the time details may be delayed or returned for clarification.</p>

      <h3 style="margin-top:20px">Advance notice required</h3>
      <p>Submit planned time off with the required advance notice. Approval or denial comes within 24 hours — do not assume approval until it's confirmed in writing.</p>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Time requested</th><th>Advance notice required</th></tr></thead>
          <tbody>
            <tr><td>1 day off</td><td>7 days</td></tr>
            <tr><td>2 consecutive days</td><td>14 days</td></tr>
            <tr><td>3 or more consecutive days</td><td>21 days</td></tr>
          </tbody>
        </table>
      </div>
      <p style="font-size:13.5px">If you can't meet these windows, <strong>submit as early as you possibly can</strong> — the timelines above are the target, not a reason to delay. The more notice your team and lead have, the better they can plan around your absence: balancing workloads, reassigning tasks, and adjusting deadlines so nothing slips while you're out. Early notice almost always means an easier approval, too.</p>

      <h3 style="margin-top:22px">What happens after you submit</h3>
      <p>Submitting isn't approval. The PM tool notifies the <strong>HR leave team member (Workforce Analyst Team)</strong>, who reviews your request and either approves or denies it. A few things shape what happens next:</p>
      <div class="flow">
        <div class="flow-step"><div class="flow-step-body"><strong>HR reviews the request.</strong> If something's off — for example, you requested <em>paid</em> leave but you're still within your first 90 days and don't have paid leave available yet — they'll <strong>deny it and reach out</strong> to ask you to resubmit correctly.</div></div>
        <div class="flow-step"><div class="flow-step-body"><strong>More than one day?</strong> HR loops in your <strong>Direct Report</strong> to approve it.</div></div>
        <div class="flow-step"><div class="flow-step-body"><strong>A longer stretch?</strong> Beyond a certain number of days, it also goes to the <strong>executive team</strong> for approval.</div></div>
      </div>
      <div class="team-callout finance" id="callout-7">
        <span class="team-tag">When It's Approved</span>
        <p>Once your request is approved, the system handles the rest: the <strong>calendar is updated</strong>, <strong>you're added to the leave event</strong> on the calendar, your <strong>balance updates</strong>, and your <strong>Direct Report is notified.</strong> (See <a href="#tracker">Remote Leave Tracker</a> for how the event appears for you and the whole team.)</p>
      </div>
      <p style="font-size:13px;color:var(--iv-text-muted)">It's still good practice to <strong>block out your own calendar</strong> and <strong>update your Chat status</strong> so the team can see you're out at a glance. If your request is denied, HR will tell you why — fix it and resubmit, or appeal by contacting HR.</p>

      <h3 style="margin-top:20px">Unexpected absences</h3>
      <p>For an emergency or unexpected issue (illness, hardware failure, an internet outage), notify <strong>both HR and your Direct Report</strong> as soon as you can — don't wait until you're back online. Submit the request in the PM tool (choose <strong>Emergency / Day-Of call-out</strong> as the request type) as soon as you're able.</p>

      <h3 style="margin-top:20px">Incomplete Workday Form</h3>
      <div class="hazard" id="hazard-5">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>⏰ Log any deviation from standard hours the SAME day</h4>
          <p>Any deviation from standard hours — a late arrival, an early departure, or a lunch break over one hour — <strong>must be documented the same day</strong> in the PM tool's Leave Management (log it as an incomplete workday / early leave with the exact ET time). <strong>Failure to report may result in disciplinary action.</strong></p>
        </div>
      </div>

      <h3 style="margin-top:20px">There are NO company holidays — every day off is requested</h3>
      <div class="hazard" id="hazard-6">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>🚫 No automatic holidays — not one, anywhere</h4>
          <p>InvenTel observes <strong>zero company holidays</strong>. No date is automatically off — not New Year's Eve or Day, and <strong>not US holidays either.</strong> A US public holiday is a normal working day here unless you have personally requested and been approved for it. The same is true for holidays in your own country: they are not days off by default. <strong>If you want a day off for any holiday — US, local, religious, or personal — you must request it in the PM tool and wait for written approval.</strong> Assuming a day is off and not showing up is treated as an unapproved absence.</p>
        </div>
      </div>
      <p>Every holiday is a <strong>floating</strong> day: you choose which dates are meaningful to you, then request them. Submit those requests in the PM tool as soon as you know your dates (honoring the same notice windows above) rather than waiting until the date is close — the earlier you ask, the more likely it's approved without conflict.</p>

      <div class="team-callout newhire" id="callout-8">
        <span class="team-tag">New Hire · Probation</span>
        <p><strong>Heads up on your first 90 days:</strong> any days taken off during the probation period are <strong>unpaid, regardless of reason</strong> — leave accrual doesn't apply yet. Plan your first three months carefully. For any leave-balance questions, contact the Workforce Analyst Team in HR.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ 10 · TRACKER ============ -->
<section id="tracker">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">10 · Visibility</span>
        <h2>Remote Leave Tracker Calendar</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>The <strong>Remote Leave Tracker</strong> is a company-wide calendar, open and visible to everyone at InvenTel. It shows every approved leave across the company, so anyone can see who's out at a glance. It works in two directions — leave you're granted shows up on it automatically, and you keep the whole calendar in view by subscribing to it once.</p>

      <h3 style="margin-top:18px">When your leave is approved, you're added to the event</h3>
      <p>Once a leave request is approved, you'll receive a Google Calendar <strong>invite to that leave "event"</strong> — it appears on your own calendar automatically, and on the shared Remote Leave Tracker that everyone can see. After approval, <strong>check that the event is showing correctly</strong> so your availability is accurate for the team.</p>

      <h3 style="margin-top:18px">Subscribe to the tracker so it's always visible</h3>
      <p>Beyond your own leave events, you need the full tracker permanently in your calendar view. Because it's a public InvenTel calendar, you just subscribe to it once:</p>
      <div class="flow">
        <div class="flow-step"><div class="flow-step-body">Open <strong>Google Calendar</strong>. In the left sidebar, find <strong>"Other calendars"</strong> and click the <strong>+</strong>.</div></div>
        <div class="flow-step"><div class="flow-step-body">Choose <strong>"Subscribe to calendar."</strong></div></div>
        <div class="flow-step"><div class="flow-step-body">In the <strong>"Add calendar"</strong> search box, type <strong>Remote Leave Tracker</strong> and select it from the results.</div></div>
        <div class="flow-step"><div class="flow-step-body">It's added to your calendar and stays <strong>permanently visible</strong> — no need to look it up again.</div></div>
      </div>
      <p style="font-size:13px;color:var(--iv-text-muted)">If it doesn't appear when you search, ask HR or your lead to confirm you have access — it's open to all of InvenTel, so it should resolve for any company account.</p>

      <h3 style="margin-top:18px">Use it before you schedule</h3>
      <ul>
        <li><strong>Check it before scheduling meetings or assigning work</strong> — see who's out before you make scheduling decisions.</li>
        <li>You can also add individual team-member calendars most relevant to your work, so you see availability at a glance.</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 11 · PRINCIPLES ============ -->
<section id="principles">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">11 · Foundations</span>
        <h2>Core Principles &amp; Scope</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>The Communication, Collaboration &amp; Meeting Standards Policy exists to create a consistent, professional working environment, improve communication across departments, and keep collaboration effective on a distributed team. Five principles sit underneath everything in this hub:</p>
      <div class="principle-strip">
        <span class="pchip"><span>·</span>Professionalism</span>
        <span class="pchip"><span>·</span>Accountability</span>
        <span class="pchip"><span>·</span>Respect for Others' Time</span>
        <span class="pchip"><span>·</span>Clear Communication</span>
        <span class="pchip"><span>·</span>Collaboration</span>
      </div>

      <h3 style="margin-top:24px">Who this applies to</h3>
      <p>All employees, contractors, Team Directors, managers, and department heads. Failure to comply may result in coaching, corrective action, or performance discussions in accordance with company policies.</p>

      <h3 style="margin-top:20px">English is the official working language</h3>
      <p>English is the official working language for company-wide meetings, cross-functional meetings, training sessions, documentation, and any written communication involving multiple teams. Avoid conversations in another language when participants in the room may not understand the discussion.</p>
    </div>
  </div>
</section>

<!-- ============ 12 · OWNERSHIP & ACCOUNTABILITY ============ -->
<section id="ownership">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">12 · Own It · Communicate · Grow</span>
        <h2>Ownership, Accountability &amp; Working Together</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>This is one of the most important sections in the hub. We're a remote team across many time zones — what holds us together isn't sitting in the same room, it's <strong>ownership, accountability, and communication.</strong> When everyone takes real responsibility for their work and communicates openly, the whole team moves faster and trusts each other more. Please read this carefully and take it to heart.</p>

      <div class="hazard" id="hazard-7">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>🎯 Take real ownership — don't just pass it along</h4>
          <p>Owning a task means more than receiving it and forwarding it on. Too often, information or a task gets passed straight through without anyone truly engaging with it. <strong>Take the time to UNDERSTAND the ask before you complete it or hand it off.</strong> If something isn't clear, ask questions until it is. Owning the work means owning the understanding of it — not just moving it to the next person's plate.</p>
        </div>
      </div>

      <h3 style="margin-top:20px">What ownership looks like</h3>
      <div class="do-dont">
        <div class="do">
          <h4>✓ Do</h4>
          <ul>
            <li><strong>Understand before you act.</strong> Read the full request, make sure you know what success looks like, and ask if anything is unclear.</li>
            <li><strong>Follow up.</strong> If you're waiting on something from someone — or you've handed something off — follow up and see it through. Don't assume it's handled.</li>
            <li><strong>Close the loop.</strong> Confirm when something's done, and flag blockers early rather than going quiet.</li>
          </ul>
        </div>
        <div class="dont">
          <h4>✗ Don't</h4>
          <ul>
            <li>Pass a task or message along without engaging with it first.</li>
            <li>Assume someone else is following up — if it's in your hands, it's yours to track.</li>
            <li>Go silent when you're stuck. Silence reads as no ownership.</li>
          </ul>
        </div>
      </div>

      <h3 style="margin-top:22px">Keep it professional — it's never personal</h3>
      <p>This is work, and feedback is part of work. When someone shares an update, a correction, or a place you could improve, <strong>please don't take offense.</strong> It's meant to help you and the team grow — not to criticize you as a person. A few things to keep in mind:</p>
      <ul>
        <li><strong>Tone doesn't travel well over text.</strong> A short message can read as blunt even when it wasn't meant that way. Assume good intent, and give people the benefit of the doubt.</li>
        <li><strong>Stay respectful — always.</strong> Even if a message upsets you, respond with respect. That's how we keep this a place where feedback flows freely and everyone can connect and grow.</li>
        <li><strong>When in doubt, ask.</strong> If a message lands wrong, a quick "did you mean X?" clears it up faster than assuming the worst.</li>
      </ul>
      <div class="team-callout cx" id="callout-9">
        <span class="team-tag">We're All on the Same Team</span>
        <p>Messages and feedback are meant to help us all connect and grow together. Treat every exchange as a teammate trying to make the work — and each other — better.</p>
      </div>

      <h3 style="margin-top:22px">Communication is everything</h3>
      <p>Because we're remote, we can't rely on hallway chats or reading the room. <strong>Working well together starts with communication.</strong> Over-communicate rather than under-communicate: share updates, ask questions early, flag risks before they become problems, and keep people informed about anything that affects their work. Strong communication is what turns a group of people in different countries into one team. For the specifics — response times, channels, and status — see <a href="#communication">Communication Standards</a> and <a href="#status">Google Chat Status &amp; Availability</a>.</p>
    </div>
  </div>
</section>

<!-- ============ 13 · COMMUNICATION ============ -->
<section id="communication">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">13 · Responsiveness</span>
        <h2>Communication Standards</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>Monitor Google Chat and company channels throughout working hours. On a remote team spread across five countries, your responsiveness on chat is the main signal that you're present and engaged — so we hold it to a firm standard.</p>

      <div class="hazard" id="hazard-8">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>⏱️ Reply or react to chats in UNDER 10 minutes — during all working hours</h4>
          <p>Every Google Chat message during the 8:30 AM – 5:30 PM ET window gets a reply <strong>or</strong> a reaction in <strong>less than 10 minutes</strong>. This is the standard, and it is not optional. <strong>If you take longer than 10 minutes, we will assume you are offline or deliberately ignoring the person who messaged you</strong> — there is no in-between. A one-second 👍 or ✓ is enough to show you've seen it; even a quick "On it" or "Calling you back shortly" counts. What's never acceptable is leaving a chat sitting with no response and no reaction.</p>
        </div>
      </div>

      <p>If you genuinely can't engage for a stretch — you're in a meeting, in focused work, in training, or on a break — that's exactly what your Chat status is for. <strong>Set your status before you go heads-down</strong>, so the under-10-minute clock is understood and no one mistakes your silence for ignoring them. Urgent matters still get a response as soon as you reasonably can.</p>

      <div class="mini-grid">
        <div class="mini"><div class="mini-k">React, always</div><div class="mini-v">If you're busy or no reply is needed, still react — a 👍 or ✓ takes one second and tells the sender you've seen it. Never leave a chat sitting unacknowledged.</div></div>
        <div class="mini"><div class="mini-k">Follow up</div><div class="mini-v">If you sent something and haven't heard back, follow up. Proactive follow-up is professionalism here, not pushiness.</div></div>
        <div class="mini"><div class="mini-k">Follow through</div><div class="mini-v"><strong>Done</strong> means the work is complete <em>and</em> the relevant person knows it. Closing the loop is part of the task — don't wait to be asked.</div></div>
        <div class="mini"><div class="mini-k">When you step away</div><div class="mini-v">In a meeting, focused session, training, or on a break? Update your Chat status so the window is understood. Urgent matters still get a response as soon as reasonably possible.</div></div>
      </div>

      <p style="margin-top:16px;font-size:13px;color:var(--iv-text-muted)"><em>One clarification:</em> the under-10-minute standard applies to live chat, where fast back-and-forth keeps the team moving. Email and longer-form requests don't need a reply inside ten minutes — but they still get acknowledged within a reasonable time the same working day. When in doubt during office hours, treat chat as the fast lane and use your status to signal whenever you genuinely can't respond.</p>

      <h3 style="margin-top:20px">Which channel for what</h3>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">Google Chat</div><div class="mini-v">Quick communication, updates, and questions. When you need someone specific to see a message, <strong>@mention</strong> them so it draws their attention.</div></div>
        <div class="mini"><div class="mini-k">Email</div><div class="mini-v">Check it often throughout the day so you don't miss important messages or meeting details.</div></div>
        <div class="mini"><div class="mini-k">Team meetings</div><div class="mini-v">Your team lead sets recurring meetings for your department. They're mandatory — notify your lead in advance if you can't attend, and schedule other work around them. Missed team meetings are reported to HR.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 14 · CHAT STATUS ============ -->
<section id="status">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">14 · Signal Your Availability</span>
        <h2>Google Chat Status &amp; Availability</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>This is a small habit that makes a big difference — and one a lot of people skip. A quick Google Chat status tells the whole team, at a glance, whether you're around, heads-down, or out, so no one's left guessing during the <a href="#communication">under-10-minute</a> response window. It takes seconds to set, and <strong>an emoji makes it read instantly.</strong> Please make this part of your daily routine.</p>

      <div class="team-callout newhire" id="callout-10">
        <span class="team-tag">Quick &amp; Easy · Do This</span>
        <p>Updating your status is fast. Keep it current as your day changes — stepping away, going into focus time, or taking time off — and add an emoji so teammates can read it at a glance.</p>
      </div>

      <h3 style="margin-top:20px">How to set your status</h3>
      <div class="flow">
        <div class="flow-step"><div class="flow-step-body">In <strong>Google Chat</strong> (or Gmail), click your <strong>profile picture / availability</strong> at the top.</div></div>
        <div class="flow-step"><div class="flow-step-body">Choose a preset like <strong>Away</strong> or <strong>Do not disturb</strong>, or click <strong>Add a status</strong> for a custom one.</div></div>
        <div class="flow-step"><div class="flow-step-body">Pick an <strong>emoji</strong> and type a short note (and an end time if it's temporary), then save.</div></div>
        <div class="flow-step"><div class="flow-step-body">For full days off, also set an <strong>Out of Office</strong> event in Google Calendar — it syncs your status across Gmail and Chat automatically.</div></div>
      </div>

      <h3 style="margin-top:20px">Status examples to borrow</h3>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Situation</th><th>Example status</th></tr></thead>
          <tbody>
            <tr><td>Stepped away briefly</td><td>🍵 Be right back · back by 2:30 ET</td></tr>
            <tr><td>Heads-down / focus work</td><td>🎧 Focused — will reply after 3 ET</td></tr>
            <tr><td>In a meeting</td><td>📅 In a meeting</td></tr>
            <tr><td>Lunch</td><td>🍽️ Lunch — back at 1:30 ET</td></tr>
            <tr><td>Off today</td><td>🌴 Off today — back tomorrow</td></tr>
            <tr><td>Multiple days off</td><td>✈️ OOO until Mon · backup: [your #2]</td></tr>
            <tr><td>Out sick</td><td>🤒 Out sick today — back tomorrow</td></tr>
            <tr><td>Personal emergency</td><td>🚨 Stepping away — personal emergency</td></tr>
            <tr><td>Upcoming time off</td><td>🗓️ OOO July 17–19</td></tr>
          </tbody>
        </table>
      </div>

      <h3 style="margin-top:20px">Call out time off — before <em>and</em> during</h3>
      <ul>
        <li><strong>Flag future time off early.</strong> If you know you're out later this week or next, put it in your status ahead of time so the team can plan around your absence.</li>
        <li><strong>Especially when you're out.</strong> On the day(s) you're off, your status should make it unmistakable that you're away and when you'll be back.</li>
        <li><strong>Name your backup.</strong> If you have a <strong>number two</strong> covering for you, add them to your status note so people know who to go to while you're out.</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 15 · MEETINGS ============ -->
<section id="meetings">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">15 · On Camera</span>
        <h2>Meetings &amp; Camera Policy</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>Attendance at all team meetings, department syncs, and 1-on-1s is mandatory. If an unavoidable conflict arises, notify your Team Lead <strong>in advance</strong>, not after. Consistent unexplained absences are reported to HR.</p>

      <div class="hazard" id="hazard-9">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>📹 Camera ON — every meeting, no exceptions</h4>
          <p>Cameras stay on for internal team meetings, external client calls, and 1-on-1s. The rule is simple: <strong>if your camera cannot be on, do not join the call.</strong> If you genuinely can't (bandwidth, traveling, not camera-ready), update your Google Chat status with a brief note <strong>before</strong> the meeting starts — not after.</p><div><p data-start="181" data-end="492" class="PDq2pG_selectionAnchorContainer"><span aria-hidden="true" class="PDq2pG_selectionAnchor"></span></p>
<p data-start="494" data-end="691" class=""><strong data-start="494" data-end="526">For your meeting background:</strong>&nbsp;Use an <strong data-start="132" data-end="171">InvenTel company virtual background</strong> when joining meetings. <span data-start="195" data-end="252">You can find the approved backgrounds here:&nbsp;</span><a href="https://drive.google.com/drive/folders/1K39EBPpd8u_hxemtkD1GfFdfyrHu-PWP?usp=sharing">Inventel - Meetings Background Folder</a>​</p>

</div>
        </div>
      </div>

      <p style="font-size:13.5px"><strong>If your connection struggles with video on:</strong> always <strong>start with your camera on</strong>. If keeping it on is clearly hurting your internet connection during the call, it's fine to turn it off — just <strong>let the group know right away</strong> that you're having connection issues and that's why your camera is off. The goal is a stable, present conversation, so lead with video and only drop it when the connection genuinely requires it.</p>

      <h3 style="margin-top:20px">Professionalism standards</h3>
      <div class="do-dont">
        <div class="do">
          <h4>✓ Expected</h4>
          <ul>
            <li>Join on time and prepared — review materials beforehand</li>
            <li>Collared or business-casual attire for client meetings</li>
            <li>A professional background; blur non-wall backgrounds, or use the&nbsp;​<a href="https://drive.google.com/drive/folders/1K39EBPpd8u_hxemtkD1GfFdfyrHu-PWP?usp=sharing" data-is-inline-chip-link="true" data-display-name="Inventel - Meetings Background" data-inline-chip-type="1" data-dlb="true" data-fdlb="true" data-mimetype="application/vnd.google-apps.folder">Inventel - Meetings Background</a>​</li>
            <li>Stay muted when not speaking; participate actively and respect speaking turns</li>
          </ul>
        </div>
        <div class="dont">
          <h4>✗ Avoid</h4>
          <ul>
            <li>Eating meals, smoking, or visible distractions on camera</li>
            <li>Multitasking or passive, partial presence</li>
            <li>Last-minute cancellations or reschedules except in emergencies (give 24 hrs notice when possible)</li>
            <li>Joining late without notifying the organizer as soon as possible</li>
          </ul>
        </div>
      </div>

      <h3 style="margin-top:20px">Google Calendar expectations</h3>
      <p>Keep your calendar accurate. Promptly accept, decline, or respond to invitations and keep your availability current. When you're out or away, set an <strong>Out of Office</strong> event in Google Calendar <em>and</em> update your Chat status to OOO — the OOO event syncs your status across Gmail and Chat automatically.</p>

      <div class="team-callout lead" id="callout-11">
        <span class="team-tag">For Team Directors</span>
        <p>Directors model these standards, encourage participation, communicate expectations clearly, and address recurring issues within their teams. Directors also own keeping their department org charts accurate (update when people join/leave, reporting changes, or responsibilities shift) and share revised charts with the Performance Team so master records stay current. The <a href="https://drive.google.com/drive/folders/1hzSKJ2sRkX-R_y_cHWAPwM0YxhqkWIjJ?usp=sharing" target="_blank" rel="noopener">Department Structures folder</a> holds the latest templates.</p>
      </div>

      <h3 style="margin-top:20px">Gemini &amp; AI notetakers</h3>
      <p>The company already has <strong>Gemini AI notes turned on</strong> for meetings. Gemini runs <strong>quietly in the background</strong> — it captures notes without joining as a participant or taking up a tile on screen. Treat anything captured as internal and handle it with the same confidentiality as any other company material.</p>
      <div class="hazard" id="hazard-10">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>🚫 No external AI notetakers in company meetings</h4>
          <p>Don't bring your own third-party AI notetaker or meeting bot into InvenTel meetings. Those agents join as extra participants and <strong>fill the screen with their own boxes</strong>, which clutters the call for everyone. Gemini already covers notes silently in the background — so if you use any of these tools personally, <strong>don't add them to company meetings.</strong></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 16 · SCHEDULING ETIQUETTE ============ -->
<section id="scheduling">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">16 · Respect People's Time</span>
        <h2>Scheduling &amp; Meeting Etiquette</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>On a remote team spread across time zones, putting an event on someone's calendar reaches into their day. A little courtesy before and after scheduling prevents surprises, double-bookings, and disrupted days. The principle underneath all of it: <strong>respect other people's time, and communicate before and after you touch their calendar.</strong> (As always, schedule everything in <a href="#hours">Eastern Time</a>.)</p>

      <h3 style="margin-top:20px">Before you schedule — connect first</h3>
      <div class="hazard" id="hazard-11">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>🗓️ Before you put a meeting on someone's calendar, check with them first</h4>
          <p>Before scheduling on someone's calendar, <strong>reach out to them in Chat first — every time</strong>, unless it's a large group (see below). One quick message that lets them know a meeting is going to happen, tells them you'll add the event based on their <strong>open availability</strong>, and asks whether there's a <strong>date or time that works best</strong> for them. This turns a surprise invite into an expected one — and usually surfaces the best slot faster than guessing.</p>
        </div>
      </div>

      <h3 style="margin-top:20px">After you schedule — follow up</h3>
      <p>Once the event is on the calendar, <strong>follow up with that person to confirm it's been scheduled.</strong> Don't assume they saw the invite — closing the loop is part of the task (the same <a href="#communication">"follow through"</a> standard as everywhere else).</p>

      <div class="team-callout newhire" id="callout-12">
        <span class="team-tag">Large or Last-Minute Meetings</span>
        <p>Sometimes you can't reach everyone first — a <strong>last-minute meeting</strong>, or simply <strong>too many attendees</strong> to message individually. In that case, look at everyone's calendars and find a time that's genuinely open for the group. <strong>Prioritize the executive team's availability and time requests</strong> when there's a conflict to resolve.</p>
      </div>

      <h3 style="margin-top:20px">Watch for conflicts &amp; double-bookings</h3>
      <p>When you schedule in Google Calendar, it will <strong>flag if anyone on the invite list already has a conflict</strong> at that time. Pay attention to those warnings so you don't double-book people.</p>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">If it's an all-hands</div><div class="mini-v">For a company-wide or all-hands meeting, or when you find yourself double-booked, try to <strong>move one of the meetings</strong> so you're free for every call on your calendar.</div></div>
        <div class="mini"><div class="mini-k">Check before you send</div><div class="mini-v">Use the conflict warnings and the <a href="#tracker">Remote Leave Tracker</a> before sending — see who's out or already booked rather than scheduling over them.</div></div>
        <div class="mini"><div class="mini-k">Don't book over lunch</div><div class="mini-v">Avoid scheduling across the company-wide lunch (12:30–1:30 PM ET) unless it's unavoidable and everyone agrees.</div></div>
        <div class="mini"><div class="mini-k">Give context</div><div class="mini-v">Add a clear title, a short agenda or purpose, and any prep links in the invite so people arrive ready.</div></div>
      </div>

      <h3 style="margin-top:20px">Rescheduling &amp; cancelling</h3>
      <div class="hazard" id="hazard-12">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>🔔 If you must move a meeting, give notice and tell people directly</h4>
          <p></p><p data-start="1391" data-end="1431" class="PDq2pG_selectionAnchorContainer"><span aria-hidden="true" class="PDq2pG_selectionAnchor"></span></p>
<blockquote data-start="1433" data-end="1838">
<p data-start="101" data-end="178" class="PDq2pG_selectionAnchorContainer"><span aria-hidden="true" class="PDq2pG_selectionAnchor"></span></p><p data-start="1435" data-end="1838">

</p><p data-start="919" data-end="992"></p><p></p><blockquote data-start="180" data-end="917">
<p data-start="182" data-end="439">If you need to reschedule or cancel a meeting, do it with <strong data-start="240" data-end="270">as much notice as possible</strong>, and <strong data-start="276" data-end="351">always&nbsp;</strong></p><strong data-start="492" data-end="587">cancel the calendar event and&nbsp;</strong><strong data-start="276" data-end="351">communicate the change directly before the original meeting time</strong>.&nbsp;</blockquote><blockquote data-start="180" data-end="917"><p data-start="677" data-end="917">A meeting should not be considered cancelled simply because the organizer, Team Lead, or Director is unavailable. If the meeting is still showing on the calendar, <strong data-start="840" data-end="872">assume it is still happening</strong> unless you receive an official cancellation.</p>
</blockquote></blockquote><p></p>
        </div>
      </div>

      <h3 style="margin-top:20px">If you're invited — respond to the invite</h3>
      <p>When you receive a meeting invite, <strong>accept, decline, or mark "maybe" (?)</strong> so the organizer knows who's actually attending. Leaving an invite unanswered makes people wait on attendees who were never coming. If the usual Team Lead, Director, or organizer is unavailable, do not assume the meeting is cancelled. <b>If the meeting remains on your calendar, assume it is still happening</b> unless an official cancellation has been communicated. (If you accept and later can't make it, update your response and give the organizer a heads-up — see camera and attendance rules in <a href="#meetings">Meetings &amp; Camera Policy</a>.)</p>

      <h3 style="margin-top:20px">If you host a meeting — Keep the guest list of any meeting public</h3>
      <p></p><div><p data-start="255" data-end="272" class="PDq2pG_selectionAnchorContainer"><span aria-hidden="true" class="PDq2pG_selectionAnchor"></span></p>
<blockquote data-start="274" data-end="441">
<p data-start="276" data-end="441" class="">Keep the guest list of every meeting public so attendees can clearly see who has been invited and who is expected to participate.</p></blockquote><h3 style="margin-top:20px"><span style="font-size: 1.15rem;">If you host a meeting — share the meeting notes with everyone</span></h3></div><p></p><p data-start="255" data-end="272" class="PDq2pG_selectionAnchorContainer"><span aria-hidden="true" class="PDq2pG_selectionAnchor"></span></p>
<blockquote data-start="274" data-end="441">
<p data-start="1347" data-end="1388" class="PDq2pG_selectionAnchorContainer"><strong data-start="1347" data-end="1386"></strong><span aria-hidden="true" class="PDq2pG_selectionAnchor"></span></p></blockquote><p></p><p data-start="276" data-end="441" class="">

</p><p data-start="1615" data-end="1704"></p><p></p><blockquote data-start="1389" data-end="1613">
<p data-start="1391" data-end="1613">Meeting organizers should share the meeting notes with everyone on the guest list, not only the organizer and co-organizer. This ensures everyone who was invited has visibility on the discussion, decisions, and next steps.</p></blockquote><h3 style="margin-top:20px"><span style="font-size: 1.15rem;">If you host a recurring meeting — keep the invite list clean</span></h3><div>Owning a recurring team meeting means <span style="color: rgb(26, 20, 22);">owning its invite list.</span> Check it periodically and keep it current:<span style="font-size: 1.15rem;"></span></div><p></p>
      <div class="do-dont">
        <div class="do">
          <h4>✓ Keep the list accurate</h4>
          <ul>
            <li>People who <strong>should be there</strong> are on it.</li>
            <li>People who <strong>need the notes but don't normally join</strong> — like the executive team — <strong>stay on</strong> the invite so they keep visibility.</li>
          </ul>
        </div>
        <div class="dont">
          <h4>✗ Don't let it go stale</h4>
          <ul>
            <li>People who <strong>no longer need to attend</strong> get removed, so the room reflects who's actually involved.</li>
            <li>Don't leave former team members or rolled-off stakeholders on a standing invite.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 17 · REQUESTING ACCESS ============ -->
<section id="access">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">17 · Getting Set Up</span>
        <h2>Requesting Access to Platforms &amp; Accounts</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>InvenTel uses a mix of shared and individual credentials, with different permission levels, access tiers, and brand assignments depending on your role. Getting the right access in place is a <strong>shared effort</strong>: the <strong>Performance Team works with your Team Lead</strong> during onboarding to line up the accesses your role needs — and you play an active part by confirming what's landed and flagging what hasn't.</p>

      <h3 style="margin-top:20px">How it works — and your part in it</h3>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">Set up with your Team Lead</div><div class="mini-v">During onboarding, the <strong>Performance Team and your Team Lead</strong> work together to request the accesses your role and brand assignments require.</div></div>
        <div class="mini"><div class="mini-k">Check what you've got</div><div class="mini-v">As access comes through, confirm you can actually get into the tools and accounts you need. You know your day-to-day better than anyone — you're the first to spot a gap.</div></div>
        <div class="mini"><div class="mini-k">Accept invites right away</div><div class="mini-v">When you receive an access or account invite, <strong>accept it as soon as you can</strong> — most are time-sensitive and can expire.</div></div>
        <div class="mini"><div class="mini-k">2FA on a shared account?</div><div class="mini-v">If access to a shared account involves a two-factor code, request it in your <strong>department channel</strong> or directly with the <strong>Performance Team</strong> — never work around it.</div></div>
      </div>

      <div class="team-callout newhire" id="callout-13">
        <span class="team-tag">Follow Up — It's Expected, Not Rude</span>
        <p>If you're <strong>missing access</strong>, <strong>lose access</strong>, or notice your <strong>permissions changed</strong>, reach out to the <strong>Performance Team</strong> and follow up as needed (see <a href="#contacts">HR Department &amp; Key Contacts</a>). Without that heads-up, the team has no way to know what to fix — so following up isn't a bother, it's how the system works. Treat it like any other <a href="#ownership">outstanding task you own</a>: check in until it's resolved. It's genuinely appreciated.</p>
      </div>

      <div class="hazard" id="hazard-13">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>🔑 Already on the team &amp; need more access?</h4>
          <p>Access needs change as your work does. If you need a <strong>new platform or tool</strong>, <strong>additional brand access</strong>, or <strong>different permissions</strong>, connect with the <strong>Performance Team</strong> to request it (see <a href="#contacts">HR Department &amp; Key Contacts</a>) — the same way onboarding access is handled. Don't wait or work around a gap; request it and follow up until it's in place.</p>
        </div>
      </div>

      <h3 style="margin-top:24px">Keeping access secure</h3>
      <p><strong>Never share account information without company approval.</strong> Don't hand your logins to another team member, and don't share access to any account without explicit company approval. Access is assigned per person on purpose (see <a href="#security">Data Security &amp; Acceptable Use</a>). If someone needs access, route the request through the <strong>Performance Team</strong> — never solve it by passing credentials around.</p>
      <p><strong>Never request or share access through personal email.</strong> All access is tied to your <strong>company account and approved company channels only.</strong> Never request or share logins, invites, or credentials using a personal email account — personal inboxes are off-limits for anything access-related, with no exceptions.</p>
    </div>
  </div>
</section>

<!-- ============ 18 · PM TOOL ============ -->
<section id="pmtool">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">18 · Daily Operations</span>
        <h2>The InvenTel PM Tool</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>InvenTel built its <strong>own</strong> project-management platform — think of it as our in-house version of ClickUp. It's the team's single source of truth: tasks and projects, your daily scrum, the time tracker, leave requests and balances, channels, and dashboards all live in one place. Keeping it accurate is a core part of your job; an empty or stale view creates blind spots and reflects poorly on your work.</p>

      <div class="team-callout newhire" id="callout-14">
        <span class="team-tag">New Hire · Get Your Account</span>
        <p></p><h4 data-start="609" data-end="641" class="PDq2pG_selectionAnchorContainer"><span aria-hidden="true" class="PDq2pG_selectionAnchor"></span></h4>&nbsp;Sign in to the PM Tool:&nbsp;<a href="https://inventelpm.automindlabinventel.com/" target="_blank" rel="noopener" style="color: rgb(176, 24, 32);">inventelpm.automindlabinventel.com</a>&nbsp;using <strong data-start="672" data-end="690" style="color: rgb(26, 20, 22);">Google Sign-In&nbsp;</strong>with your InvenTel company email (<code data-start="725" data-end="740">@inventel.net</code>) or another approved company domain. Your account will be created automatically the first time you sign in.<p data-start="850" data-end="1015"></p>The <strong>Performance Team</strong> will help you get set up and make sure your <strong>department and role are assigned correctly</strong>. Complete the platform walkthroughs below, and ask the Performance Team if anything looks off.<p></p>
      </div>

      <h3 style="margin-top:22px">Platform walkthroughs</h3>
      <p>Watch these short walkthroughs to learn your way around the PM tool:</p>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">Walkthrough · Part 1</div><div class="mini-v"><a href="https://www.loom.com/share/66c7ded5149740ba8a56a6e982250e7f" target="_blank" rel="noopener">PM Tool walkthrough (Loom)</a></div></div>
        <div class="mini"><div class="mini-k">Walkthrough · Part 2</div><div class="mini-v"><a href="https://www.loom.com/share/5cfb4836899f4323b9ed1dc70aadd8ce" target="_blank" rel="noopener">PM Tool walkthrough (Loom)</a></div></div>
      </div>
      <div class="team-callout newhire" id="callout-15">
        <span class="team-tag">PM Tool Resource Hub</span>
        <p>The <a href="https://drive.google.com/drive/folders/1ST2jUR54nmCynkkL_eNRp6SyP4B2JUVU?usp=drive_link" target="_blank" rel="noopener"><strong>InvenTel PM Dashboard folder</strong></a> holds the full Walkthrough Library and the Errors Sheet in one place. Found a bug or have feedback on the tool? Log it in the <a href="https://docs.google.com/spreadsheets/d/136ZCsJ3UROX090frY3JDfaGEs_QyDSGlFaef_AxqSUY/edit?usp=drive_link" target="_blank" rel="noopener"><strong>InvenTel Dashboard — Bugs &amp; Errors Sheet</strong></a>.</p>
      </div>

      <h3 style="margin-top:20px">What you'll use it for</h3>
      <div class="feature-grid">
        <div class="feature-tile"><span class="feature-tile-icon">📋</span><h4>Daily Scrum</h4><p>Your standup every workday — active tasks, status (In-Progress / Completed / Blocked), and any blockers.</p><div><br></div><p></p></div>
        <div class="feature-tile"><span class="feature-tile-icon">⏱️</span><h4>Time Tracker</h4><p>Per-task timer (Est vs Logged). Start it on the task you're working, stop when done. check the:&nbsp;<a href="https://drive.google.com/file/d/1TKmNfBr12UqMDapY5vU8CVNQKh5drlWr/view?usp=sharing">InvenTel Time Tracker Video Guide</a></p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🗓️</span><h4>Leave Management</h4><p>Submit leave requests and check your balances — all in the tool (see <a href="#leave">Leave &amp; Time Off</a>). New to it? Follow the <a href="https://drive.google.com/file/d/1L0lCjEv8kHsCrDuFAVt6LZRhg0pKoVtz/view?usp=drive_link" target="_blank" rel="noopener">Leave Request Guide</a>.</p><div><br></div><p></p></div>
        <div class="feature-tile"><span class="feature-tile-icon">📊</span><h4>Tasks &amp; Projects</h4><p>Your assigned work, projects, channels, and dashboards — the hub for everything you do.</p><div><br></div><div><br></div><p></p></div>
      </div>

      <h3 style="margin-top:22px">Daily Scrum — every workday</h3>
      <p>Update your standup every single workday in the <strong>Daily Scrum</strong> area: add all active tasks with current status and any blockers or risks. No exceptions. Department Leads and PMs rely on these updates to manage workload, timelines, and priorities.</p>

      <h3 style="margin-top:22px">Time Tracker — mandatory, per task</h3>
      <div class="hazard" id="hazard-14">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>⏱️ Turn the tracker ON for every task — no exceptions</h4>
          <p></p><p data-start="2429" data-end="2483" class="PDq2pG_selectionAnchorContainer"><strong data-start="2429" data-end="2483"></strong><span aria-hidden="true" class="PDq2pG_selectionAnchor"></span></p>
<p data-start="2485" data-end="2579">Using the time tracker is <strong>mandatory</strong>. The <strong data-start="2489" data-end="2539">Time Tracker is a separate desktop application</strong> and is not part of the PM Tool web app.</p>
<p data-start="2581" data-end="2612">Download the Time Tracker here:&nbsp;<a target="_blank" class="decorated-link" rel="noopener" href="https://inventelpm.automindlabinventel.com/time-tracking?utm_source=chatgpt.com">Download the Time Tracker</a></p>
<p data-start="2653" data-end="2720"></p>Start the timer on the specific task you're working on and stop it when you're done Switch the timer as you move between tasks so each task logs correctly&nbsp;— the task view shows <strong>"Timer running — click Stop when done."</strong><div>The Time Tracker will <strong data-start="2899" data-end="2963">automatically pause or stop when user inactivity is detected</strong>. Please review the&nbsp;<a href="https://drive.google.com/file/d/1TKmNfBr12UqMDapY5vU8CVNQKh5drlWr/view?usp=drive_link">Time Tracker Guide</a>&nbsp;for more details about how inactivity is handled.</div><div><p data-start="2722" data-end="2875" class="PDq2pG_selectionAnchorContainer"><span aria-hidden="true" class="PDq2pG_selectionAnchor"></span></p>

<p data-start="3057" data-end="3149"></p>Some team members have <em>not</em> been activating the tracker per task and later reported missing or inaccurate time logs. To avoid this, it's <strong>your responsibility</strong> to make sure the tracker is running correctly at all times while you work. Make sure you've installed the tracker and are actively using it. Please also review the <a href="https://www.loom.com/share/cb0ffa5db01c40c5aa50cf8edaf56fef" target="_blank" rel="noopener">time-tracker training video</a> and follow it carefully.</div><p></p>
        </div>
      </div>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">Per task, not per day</div><div class="mini-v">Start the timer on the task you're actively working — switch it as you move between tasks so each one logs correctly.</div></div>
        <div class="mini"><div class="mini-k">Pause for breaks</div><div class="mini-v">Stop or pause before any break — lunch, a short personal break, stepping away — so only real working time is logged.</div></div>
        <div class="mini"><div class="mini-k">Screenshots</div><div class="mini-v">The tracker periodically captures screenshots for context. You see them first and can delete any — but deleting one also removes the linked time from your log.</div></div>
        <div class="mini"><div class="mini-k">Why it matters</div><div class="mini-v">It's about workload at the team level, not surveillance. If the data shows you're over capacity, InvenTel acts on it — redistributing tasks, adding support, or resetting priorities.</div></div>
      </div>

      <h3 style="margin-top:22px">Notifications &amp; the latest version</h3>
      <div class="team-callout finance" id="callout-16">
        <span class="team-tag">Update Your App</span>
        <p>A <strong>notifications</strong> feature rolled out with the latest version of the PM tool. If your notifications aren't working, <strong>uninstall the old app and download the latest version.</strong> Make sure it's installed and that you're actively using it while working. If you hit <strong>any</strong> issue with installation, login, setup, or usage, contact the <strong>Workforce Analyst Team</strong> right away so they can help you get it resolved.</p>
      </div>

      <h3 style="margin-top:22px">Work faster — the AI Prompt Library</h3>
      <div class="team-callout newhire" id="callout-17">
        <span class="team-tag">Work Faster · AI Prompt Library</span>
        <p>Use the <a href="https://inventelpm.automindlabinventel.com/prompt-library" target="_blank" rel="noopener"><strong>InvenTel AI Prompt Library</strong></a> — a growing, shared collection of vetted prompts for the tools and workflows you use day to day. Check it before writing prompts from scratch, and reuse what already works.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ 18 · BRAND ============ -->
<section id="brand">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">19 · Know the Portfolio</span>
        <h2>Brand Knowledge &amp; InvenTel University</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>InvenTel University is your primary self-serve learning home — the place you go to get up to speed and to look things up while you work. It's organized into <strong>three sections</strong>:</p>

      <div class="table-wrap" style="margin-top:14px">
        <table>
          <thead><tr><th>Section</th><th>What it covers</th><th>What's inside</th></tr></thead>
          <tbody>
            <tr><td><strong>Brand Knowledge Hubs</strong><br><span style="font-size:12px;color:var(--iv-text-muted)">What we sell</span></td><td>A complete knowledge hub for every brand in the portfolio — products, positioning, brand voice, audience, offers &amp; policies.</td><td>The shared source of truth before you start work on a brand, ending in a mandatory quiz.</td></tr>
            <tr><td><strong>Resource Library</strong><br><span style="font-size:12px;color:var(--iv-text-muted)">Tools we use</span></td><td>A complete training guide for every platform and tool the company puts in your hands.</td><td>Step-by-step tutorials at beginner, intermediate &amp; advanced levels — self-contained, each ending in a mandatory quiz.</td></tr>
            <tr><td><strong>Company Policy Hub</strong><br><span style="font-size:12px;color:var(--iv-text-muted)">How we work</span></td><td>This policy hub — the policies, processes, and expectations that apply across every team.</td><td>The single reference for how InvenTel operates, kept current as policies change.</td></tr>
          </tbody>
        </table>
      </div>
      <p style="font-size:13px;color:var(--iv-text-muted);margin-top:10px">Bookmark it and make it part of your regular workflow — it's built as an everyday reference, not just onboarding. When a question comes up while you work, go back and look it up.</p>

      <div class="team-callout newhire" id="callout-18">
        <span class="team-tag">New Hire · Every New Brand or Platform</span>
        <p><strong>When a brand or platform is assigned to you:</strong> work through its hub or guide <strong>completely, top to bottom</strong> — every section, no skimming or skipping ahead — <em>before</em> starting any work on it. Then take the quiz at the bottom (it's based on the full hub) and follow the <a href="#quiz-section">standard quiz submission process</a>: save and name your result, upload it to the Quiz Results folder, and notify the person who assigned it (your <strong>Brand Lead</strong> or <strong>Department Lead</strong>). This restarts every time a new brand or platform enters your scope. After that, the hub or guide is your first point of reference for any question on it — check it before reaching out.</p>
      </div>

      <p style="font-size:13px;color:var(--iv-text-muted)"><em>All quizzes follow the same <a href="#quiz-section">submission process</a> — upload to the Quiz Results folder, then notify whoever assigned it. InvenTel University's intermediate and advanced courses are optional, strongly encouraged, and done in your own time.</em></p>

      <h3 style="margin-top:24px">Product knowledge is on everyone</h3>
      <div class="hazard" id="hazard-15">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>⚠️ "Not knowing a brand" isn't acceptable</h4>
          <p>Product knowledge is expected from <strong>every</strong> team member — not just Sales or Support. Proactively learn the features, benefits, and messaging of every brand you support, and stay current as the portfolio changes — new brands get added and existing ones shift, so keep up via the Education Channel and company announcements. If you need help, ask the Brand Lead for a deep-dive. The Brand Knowledge Hubs in InvenTel University are your starting point.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 19 · CHANNELS ============ -->
<section id="channels">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">20 · Stay Informed</span>
        <h2>Company-Wide Channels</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>InvenTel runs on a set of Google Chat channels. Each has a job — using them correctly keeps the whole team aligned.</p>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Channel</th><th>What it's for</th><th>Your obligation</th></tr></thead>
          <tbody>
            <tr><td><strong>InvenTel Team</strong></td><td>Official company-wide announcements, policy changes, critical info</td><td>Enable <strong>All</strong> notifications and read every post. Read-only — never post chatter, questions, or 1-on-1s here</td></tr>
            <tr><td><strong>Social Media Callouts</strong></td><td>Brand posts that need a reach boost</td><td>Like and engage <strong>immediately</strong> when a callout appears — mandatory, not optional (see <a href="#social">Social Media Engagement</a>)</td></tr>
            <tr><td><b>Creative Inspirations</b></td><td>Creative ideas, social media trends, and inspiring content that teams can use to test, adapt, and implement across brands</td><td>Check <b>regularly</b> and &nbsp;share creative ideas, social media trends&nbsp;, and inspiring content. Teams can use relevant ideas as inspiration for Their team's work</td></tr>
            <tr><td><strong>Company Announcements</strong></td><td>Leave policies, holidays, operational changes</td><td>Check <strong>daily</strong></td></tr>
            <tr><td><strong style="color: rgb(26, 20, 22);">Financial Updates</strong></td><td>Salaries, invoicing timelines, payment info</td><td>Check <strong>regularly</strong></td></tr>
          <tr><td><strong style="color: rgb(26, 20, 22);">Education Channel</strong></td><td>Webinars, tutorials, tool guides, role learning</td><td>Check <strong style="color: rgb(26, 20, 22);">weekly</strong> as part of your development</td></tr></tbody>
        </table>
      </div>
      <p style="font-size:13px;color:var(--iv-text-muted)">To enable notifications on a channel: click the channel name in Google Chat → Notifications → All. Missing these channels can mean missed deadlines or policy violations. Keep all discussions and questions in DMs or your department's Project Space — not the InvenTel Team hub.</p>
    </div>
  </div>
</section>

<!-- ============ 21 · COMPANY MEETINGS ============ -->
<section id="mbr">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">21 · All-Hands</span>
        <h2>Company-Wide Meetings</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>InvenTel schedules <strong>company-wide meetings</strong> — all-hands sessions for executive updates, department highlights, and company alignment. These come up regularly, and the <strong>notice varies</strong>: some are announced well in advance, and others land on your calendar the <strong>day before</strong>. Keep an eye on your Google Calendar and the company announcements channel so one doesn't slip past you.</p>

      <h3 style="margin-top:20px">If you're double-booked</h3>
      <p>Company-wide meetings are a priority. If one lands on top of another meeting you can move, <strong>reschedule the other meeting</strong> so you can attend the all-hands. If the conflict genuinely can't be moved, the session is <strong>recorded and shared</strong> in the <a href="https://drive.google.com/drive/folders/1p1WIKvKOInTIg61h5t-sY-kZ_Y4YXNdw?usp=drive_link" target="_blank" rel="noopener"><strong>Company-Wide Meeting Records</strong></a> folder — watch the recording as soon as you can to stay caught up.</p>

      <div class="hazard" id="hazard-16">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>🗓️ Attendance is tracked — don't make a habit of missing them</h4>
          <p>Treat company-wide meetings as <strong>required — cameras on, full attendance</strong>, the same as any other mandatory meeting. <strong>Attendance is tracked.</strong> Missing one for a genuine, unavoidable conflict (and catching up on the recording) is fine — but a <strong>pattern of missed company-wide meetings will be flagged by the Performance Team.</strong></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 20 · SOCIAL MEDIA ============ -->
<section id="social">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">22 · Show Up for the Brands</span>
        <h2>Social Media Engagement</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>We're a marketing agency — our own social presence matters, and every team member is part of it. <strong>Interacting with InvenTel's social pages and brand accounts is a required part of the job</strong>, not an optional extra.</p>

      <div class="hazard" id="hazard-17">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>📣 Full team participation — straight from the CEO</h4>
          <p>The CEO has asked for <strong>full team participation</strong> across our social presence: <strong>follow the pages, and like, comment, and react</strong> on posts. When our own people show up, posts perform better and the brands gain real momentum. Treat this as a standing expectation for everyone.</p>
        </div>
      </div>

      <h3 style="margin-top:20px">How it works</h3>
      <div class="flow">
        <div class="flow-step"><div class="flow-step-body"><strong>Share your handles.</strong> Complete the <a href="https://docs.google.com/forms/d/e/1FAIpQLSchAssQJjEkcDAPV66ExPgDJx3gncg8lVMDVpI5T7rLcuvaAg/viewform" target="_blank" rel="noopener">Social Media Handles form</a> with all your social media handles so we know which accounts are engaging.</div></div>
        <div class="flow-step"><div class="flow-step-body"><strong>Follow the brand pages.</strong> Follow InvenTel's social pages and the brand accounts across platforms.</div></div>
        <div class="flow-step"><div class="flow-step-body"><strong>Watch the Social Media Callouts channel.</strong> When a post needs engagement, it's shared in the <strong>Social Media Callouts</strong> Google Chat channel (see <a href="#channels">Company-Wide Channels</a>).</div></div>
        <div class="flow-step"><div class="flow-step-body"><strong>Engage right away.</strong> When a callout appears, like, comment, and react <strong>immediately</strong> — the boost matters most while a post is fresh.</div></div>
      </div>

      <h3 style="margin-top:22px">Shortform video — watch it all the way through</h3>
      <p>One important thing to keep in mind with <strong>shortform content</strong>: when you interact with the videos, it's crucial to <strong>watch them all the way through</strong>. Retention is what the algorithm rewards — just opening a video to drop a quick comment and leaving actually <strong>hurts the reach</strong>, because the algorithm reads it as people clicking away instantly.</p>
      <p>So if you're going to comment to help drive engagement, <strong>watch the full video first</strong>, then leave comments people will actually reply to or like. Funny jokes, relatable memes, or even slightly controversial or negative takes work well — they get the comment section moving, which is exactly the kind of activity that boosts a post.</p>

      <div class="do-dont">
        <div class="do">
          <h4>✓ What counts as participation</h4>
          <ul>
            <li>Following the company and brand pages.</li>
            <li>Likes, reactions, and genuine comments on posts.</li>
            <li>Watching shortform videos all the way through before commenting.</li>
            <li>Jumping on Social Media Callouts as soon as they're posted.</li>
          </ul>
        </div>
        <div class="dont">
          <h4>✗ What to avoid</h4>
          <ul>
            <li>Opening a video, dropping a comment, and clicking away — it hurts reach.</li>
            <li>Ignoring callouts or engaging days later.</li>
            <li>Skipping the handles form, so your engagement can't be counted.</li>
            <li>Posting anything that conflicts with the <a href="#conduct">Code of Conduct</a> or shares confidential info (see <a href="#security">Data Security</a>).</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 22 · EQUIPMENT ============ -->
<section id="equipment">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">23 · Your Setup</span>
        <h2>Equipment &amp; Connectivity</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>InvenTel does not provide equipment. You are personally responsible for a working setup and a stable connection throughout working hours.</p>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">Connection</div><div class="mini-v">A stable internet connection of at least <strong>15 Mbps up and down</strong>, at all times during working hours. Service quality is yours to maintain.</div></div>
        <div class="mini"><div class="mini-k">Hardware</div><div class="mini-v">A functional computer, a clear camera, and a quality microphone — all kept in working order.</div></div>
        <div class="mini"><div class="mini-k">Workspace</div><div class="mini-v">Quiet and professional, free from noise and distractions, suitable for all video calls.</div></div>
        <div class="mini"><div class="mini-k">Backup plan</div><div class="mini-v">Always have one ready — a mobile hotspot or co-working access. "My internet went down" is only acceptable <em>with</em> a backup in place.</div></div>
      </div>

      <h3 style="margin-top:20px">Connectivity &amp; performance policy</h3>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Timeline</th><th>What happens</th></tr></thead>
          <tbody>
            <tr><td>Day 1</td><td>Grace period — resolve the issue</td></tr>
            <tr><td>Day 2+</td><td>Unpaid leave until resolved</td></tr>
            <tr><td>Day 3+ / recurring</td><td>Review — potential suspension or termination</td></tr>
          </tbody>
        </table>
      </div>
      <p style="font-size:13px;color:var(--iv-text-muted)">This policy applies equally to everyone, regardless of role or tenure.</p>
    </div>
  </div>
</section>

<!-- ============ 26 · CONTRACTOR DISCIPLINARY POLICY ============ -->
<section id="disciplinary">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">24 · Important · Corrective Action</span>
        <h2>Contractor Disciplinary Policy</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <div class="hazard" id="hazard-18">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>⚠️ Important — this policy applies to everyone</h4>
          <p>The <strong>Contractor Disciplinary Policy</strong> sets out how performance and conduct issues are addressed, the steps of the corrective-action process, and the standards every contractor is held to — regardless of role or tenure. It works alongside the standards in <a href="#conduct">Code of Conduct &amp; Grievances</a> and the terms in <a href="#agreements">Your Contract &amp; Handbook</a>. Where this policy and your signed agreements ever differ, <strong>your signed agreements control.</strong></p>
        </div>
      </div>

      <h3 style="margin-top:22px">Progressive warning process</h3>
      <p>Most issues are handled through a progressive series of warnings, giving you a clear opportunity to correct course at each stage:</p>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Stage</th><th>Action</th></tr></thead>
          <tbody>
            <tr><td><strong>1st Warning</strong></td><td>Verbal / documented warning</td></tr>
            <tr><td><strong>2nd Warning</strong></td><td>Written warning</td></tr>
            <tr><td><strong>3rd Warning</strong></td><td>Final written warning</td></tr>
            <tr><td><strong>Further violation</strong></td><td>May result in termination</td></tr>
          </tbody>
        </table>
      </div>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">Warnings stay active for 6 months</div><div class="mini-v">Each warning remains active for <strong>6 months</strong> from the date it's issued.</div></div>
        <div class="mini"><div class="mini-k">Probation — first 90 days</div><div class="mini-v">During probation you may receive a <strong>maximum of 2 active warnings</strong>. A third disciplinary issue may result in termination if sufficient improvement isn't demonstrated.</div></div>
      </div>

      <h3 style="margin-top:22px">Warning-level violations</h3>
      <p>These are the kinds of issues that typically move through the progressive warning process:</p>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Category</th><th>Examples</th></tr></thead>
          <tbody>
            <tr><td><strong>Communication</strong></td><td>Unprofessional or disrespectful communication; ignoring reasonable instructions from your manager; repeated failure to attend required meetings without prior notice.</td></tr>
            <tr><td><strong>Attendance &amp; reliability</strong></td><td>Repeated lateness; repeated unapproved absences.</td></tr>
            <tr><td><strong>PM Tool &amp; company processes</strong></td><td>Repeated failure to update tasks in the <a href="#pmtool">PM Tool</a>; failure to follow the required ticket structure or workflows; failure to submit leave requests through the PM Tool; failure to accurately use the Time Tracker after coaching.</td></tr>
            <tr><td><strong>Performance</strong></td><td>Repeated missed deadlines due to negligence; failure to complete assigned work without communication; repeated disregard for company processes after coaching.</td></tr>
          </tbody>
        </table>
      </div>

      <h3 style="margin-top:22px">Immediate termination</h3>
      <div class="hazard" id="hazard-19">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>🚫 Serious violations can skip the warning process entirely</h4>
          <p>The following may result in <strong>immediate termination</strong>, depending on the severity of the incident and the outcome of any investigation.</p>
        </div>
      </div>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Category</th><th>Examples</th></tr></thead>
          <tbody>
            <tr><td><strong>Confidentiality &amp; security</strong></td><td>Sharing confidential company or client information; unauthorized access to company systems, accounts, or data; misuse of company credentials or sensitive information. (See <a href="#security">Data Security</a>.)</td></tr>
            <tr><td><strong>Workplace conduct</strong></td><td>Harassment, discrimination, bullying, or threatening behavior; serious violations of the company's <a href="#conduct">Code of Conduct</a>.</td></tr>
            <tr><td><strong>Company property</strong></td><td>Intentional destruction or misuse of company systems, equipment, or property.</td></tr>
            <tr><td><strong>Conflict of interest &amp; outside employment</strong></td><td>Working for any other company or client (full-time, part-time, freelance, consulting, or contract) in violation of the Employment Agreement; operating or participating in an outside business that violates the agreement; serious undisclosed conflicts of interest. (See <a href="#agreements">Full-time commitment</a>.)</td></tr>
            <tr><td><strong>Legal &amp; compliance</strong></td><td>Any illegal activity affecting the company, its contractors, or its clients; serious violations of applicable laws or regulatory requirements.</td></tr>
          </tbody>
        </table>
      </div>
      <p style="font-size:13px;color:var(--iv-text-muted);margin-top:8px"><em>Immediate-termination decisions are subject to management review and, where applicable, an internal investigation.</em></p>

      <h3 style="margin-top:22px">Management discretion</h3>
      <p>Depending on the nature and severity of the violation, management may:</p>
      <ul>
        <li>Provide <strong>coaching</strong> instead of issuing a warning;</li>
        <li><strong>Skip warning levels</strong> for serious misconduct; or</li>
        <li>Proceed <strong>directly to termination</strong> when warranted.</li>
      </ul>
      <p>All disciplinary actions are documented by the contractor's manager and HR.</p>

      <div class="team-callout newhire" id="callout-19">
        <span class="team-tag">Read the Full Policy</span>
        <p>See the complete <a href="https://docs.google.com/document/d/1e2M6MdYcMRYXyx1ygVyVZw8rXWF5n-edKaRCICvuGKc/edit?usp=sharing" target="_blank" rel="noopener"><strong>Contractor Disciplinary Policy</strong></a> for the authoritative version. Questions about how it applies to you? Reach out to the <strong>Performance Team</strong> (see <a href="#contacts">HR Department &amp; Key Contacts</a>).</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ 23 · IP ============ -->
<section id="ip">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">25 · Ownership</span>
        <h2>Freelancing &amp; Intellectual Property</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>Three rules from your employment agreement, in plain terms:</p>
      <div class="pillars">
        <div class="pillar"><span class="pillar-icon">🚫</span><h4>No outside work</h4><p>No freelance, part-time, consulting, advisory, or any secondary income-generating work while employed here. Full professional commitment is required across all roles and engagement types.</p></div>
        <div class="pillar"><span class="pillar-icon">🔒</span><h4>Brand assets stay internal</h4><p>InvenTel brand names, logos, product imagery, creative, copy, and ad assets may not appear in personal portfolios or be shared externally without explicit written permission — even after you leave.</p></div>
        <div class="pillar"><span class="pillar-icon">©️</span><h4>Work product belongs to InvenTel</h4><p>All creative, strategic, technical, and operational work you produce — creatives, copy, strategy, designs, code, data, processes — is assigned to the company for the duration of your engagement.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 24 · DATA SECURITY ============ -->
<section id="security">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">26 · Protect the Company</span>
        <h2>Data Security &amp; Acceptable Use</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>Working remotely means you're responsible for the security of the company accounts, tools, and data you touch every day. These are the baseline expectations for everyone — they protect you, your teammates, the brands, and our customers.</p>

      <h3 style="margin-top:20px">Accounts &amp; access</h3>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">2FA always on</div><div class="mini-v">Keep two-factor authentication enabled on your Google account and any tool that offers it. Never disable it.</div></div>
        <div class="mini"><div class="mini-k">Strong, unique passwords</div><div class="mini-v">Use a strong, unique password for every company account — never reuse personal passwords. A password manager is strongly encouraged.</div></div>
        <div class="mini"><div class="mini-k">Don't share credentials</div><div class="mini-v">Never share your logins, and never use a teammate's. Access is assigned per person on purpose; if someone needs access, route it through the Performance Team.</div></div>
        <div class="mini"><div class="mini-k">Lock your device</div><div class="mini-v">Lock your screen when you step away, keep your OS and browser updated, and run reputable anti-malware. Don't leave company accounts open on shared or public computers.</div></div>
      </div>

      <h3 style="margin-top:20px">Handling company &amp; customer data</h3>
      <ul>
        <li><strong>Keep company data in company tools.</strong> Don't copy brand assets, customer data, strategy, or creative to personal drives, personal email, or unapproved apps.</li>
        <li><strong>Share on a need-to-know basis.</strong> Only give access to people who need it for the work, and use proper sharing (named people, not "anyone with the link") for anything sensitive.</li>
        <li><strong>Treat everything internal as confidential</strong> — including meeting notes and anything captured by AI notetakers — and remember brand assets and your work product belong to InvenTel (see <a href="#ip">Freelancing &amp; IP</a>).</li>
        <li><strong>Customer and personal data</strong> gets extra care: collect only what's needed, never misuse it, and never move it outside approved systems.</li>
      </ul>

      <h3 style="margin-top:20px">Phishing &amp; suspicious activity</h3>
      <p>Be skeptical of unexpected links, login pages, payment-change requests, and urgent "do this now" messages — even if they appear to come from someone senior. Verify through a known channel before acting. <strong>Money and banking requests are a common scam target</strong>: confirm anything payment-related directly with the Accounting team (see <a href="#accounting">Accounting &amp; Invoicing</a>).</p>

      <div class="hazard" id="hazard-20">
        <div class="hazard-bar"></div>
        <div class="hazard-body">
          <h4>🔐 If something looks compromised, report it immediately</h4>
          <p>If you lose a device, click a suspicious link, suspect your account is compromised, or notice anything that looks like a breach, <strong>report it to the Performance Team right away</strong> — speed limits the damage, and you will never be in trouble for reporting a genuine mistake. Stalling or hiding it is the only wrong move.</p>
        </div>
      </div>

      <h3 style="margin-top:20px">Acceptable use</h3>
      <p>Company accounts and tools are for company work. Keep your usage lawful and professional, don't install pirated or untrusted software on a machine you use for work, and don't use company systems to harass, discriminate, or share inappropriate content (see <a href="#conduct">Code of Conduct</a>). When in doubt about whether something is okay to do, install, or share, ask the Performance Team first.</p>
    </div>
  </div>
</section>

<!-- ============ 26 · CODE OF CONDUCT ============ -->
<section id="conduct">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">27 · How We Treat Each Other</span>
        <h2>Code of Conduct &amp; Grievances</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>InvenTel is a global, remote team, and how we treat one another is what makes that work. The standard is simple: <strong>be professional, respectful, and inclusive in every interaction</strong> — in meetings, in Chat, in comments, and in DMs.</p>

      <h3 style="margin-top:20px">What's expected</h3>
      <div class="do-dont">
        <div class="do">
          <h4>✓ Expected</h4>
          <ul>
            <li>Treat everyone with respect across cultures, time zones, and backgrounds.</li>
            <li>Communicate professionally and assume good intent.</li>
            <li>Give and receive feedback constructively.</li>
            <li>Support teammates and help create a positive, inclusive environment.</li>
          </ul>
        </div>
        <div class="dont">
          <h4>✗ Not tolerated</h4>
          <ul>
            <li>Harassment, bullying, or intimidation of any kind.</li>
            <li>Discrimination based on race, gender, religion, nationality, age, disability, or any protected characteristic.</li>
            <li>Sexual harassment, offensive or inappropriate content, or hostile behavior.</li>
            <li>Retaliation against anyone who raises a concern in good faith.</li>
          </ul>
        </div>
      </div>

      <h3 style="margin-top:20px">Raising a concern or grievance</h3>
      <p>If something doesn't feel right — a conflict with a teammate or lead, behavior that crosses a line, or a situation you're unsure how to handle — you have a clear, confidential path:</p>
      <div class="flow">
        <div class="flow-step"><div class="flow-step-body"><strong>Reach out to the Performance Team</strong> (see <a href="#contacts">HR Department &amp; Key Contacts</a>). This is the dedicated channel for any people concern, and everything is handled with care and confidentiality.</div></div>
        <div class="flow-step"><div class="flow-step-body"><strong>Share what happened</strong> — what occurred, who was involved, and when. As much detail as you're comfortable giving helps them help you.</div></div>
        <div class="flow-step"><div class="flow-step-body"><strong>The Performance Team reviews it discreetly</strong> and works with you on the right resolution. Concerns raised in good faith are never held against you.</div></div>
      </div>

      <div class="team-callout cx" id="callout-20">
        <span class="team-tag">Confidential · No Retaliation</span>
        <p>You can raise a concern without fear. Good-faith reports are kept confidential and <strong>retaliation of any kind is not tolerated.</strong> If you're ever unsure whether something is worth raising — raise it. The Performance Team would rather hear it early.</p>
      </div>

      <p style="font-size:13px;color:var(--iv-text-muted)">Conduct violations are taken seriously and may lead to coaching, corrective action, or — for serious cases — suspension or termination, consistent with the standards in <a href="#principles">Core Principles &amp; Scope</a>.</p>
    </div>
  </div>
</section>

<!-- ============ 27 · CONTRACT & HANDBOOK ============ -->
<section id="agreements">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">28 · The Governing Documents</span>
        <h2>Your Contract &amp; Handbook</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>This hub is your <strong>operational guide</strong> — how we work day to day. The formal terms of your engagement live in two documents you signed when you joined: your <strong>Services Agreement (contract)</strong> and the <strong>Contractor Handbook</strong>. Those are the governing documents. Where this hub and your signed agreements ever differ, <strong>your signed agreements control.</strong> This hub does not constitute a contractor agreement.</p>

      <p>A few of those policies are summarized elsewhere in this hub for day-to-day use, but the full and binding versions are in your contract and handbook. The items below are <strong>covered there in detail</strong> — review your copies if you need specifics:</p>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">Conduct &amp; respect</div><div class="mini-v">Code of Conduct, anti-harassment and sexual-harassment policy, Equal Employment Opportunity, and Violence &amp; Threats — with the formal reporting and investigation process. (Summarized in <a href="#conduct">Code of Conduct &amp; Grievances</a>.)</div></div>
        <div class="mini"><div class="mini-k">Confidentiality &amp; IP</div><div class="mini-v">The full Confidentiality / NDA covenant and Intellectual Property assignment — all work product belongs to InvenTel, and confidentiality survives termination. (See also <a href="#ip">Freelancing &amp; IP</a> and <a href="#security">Data Security</a>.)</div></div>
        <div class="mini"><div class="mini-k">Non-compete &amp; non-solicitation</div><div class="mini-v">Post-engagement restrictions on competing and on soliciting clients, vendors, or team members, for the periods stated in your agreement.</div></div>
        <div class="mini"><div class="mini-k">Engagement terms</div><div class="mini-v">Independent-contractor status, at-will termination &amp; resignation, indemnification, taxes, and governing law (New Jersey).</div></div>
      </div>

      <p style="margin-top:18px">Two points from your agreement worth calling out here, because they affect everyday planning:</p>

      <h3 style="margin-top:8px">Busy Season — limited time off</h3>
      <p>Because of the nature of the As-Seen-On-TV business, InvenTel has a recurring high-volume <strong>Busy Season</strong> when time off is limited to keep things running. Currently that window runs from the <strong>Friday after Thanksgiving through December 20</strong>, and applies to <strong>everyone</strong>:</p>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">Window</div><div class="mini-v">Friday after Thanksgiving → December 20</div></div>
        <div class="mini"><div class="mini-k">Limit</div><div class="mini-v">Maximum 2 PTO days during this period</div></div>
        <div class="mini"><div class="mini-k">Notice</div><div class="mini-v">At least 20 days' advance notice for any time off in the window</div></div>
      </div>
      <p style="font-size:13px;color:var(--iv-text-muted);margin-top:8px">Plan year-end time off early — the Busy Season fills up and requests are limited.</p>

      <h3 style="margin-top:18px">Full-time commitment</h3>
      <p>The work at InvenTel is complex and treated as a <strong>full-time commitment.</strong> Per your agreement, while engaged with InvenTel you're expected <strong>not to take on other paid work</strong> — as an employee, contractor, or otherwise — that would compete for that commitment. If your situation changes, talk to your Direct Report or HR rather than assuming.</p>

      <div class="team-callout newhire" id="callout-21">
        <span class="team-tag">Where to Find Them</span>
        <p>Don't have your signed contract or the Contractor Handbook handy? Ask the <strong>Performance Team</strong> for a copy. For any question about what a specific clause means, HR can point you to the right section — when the hub and your agreement differ, the signed agreement is the final word.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ 27 · GLOSSARY ============ -->
<section id="glossary">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">29 · Reference</span>
        <h2>Glossary</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <dl class="glossary">
        <dt id="gloss-0">InvenTel / TelNet</dt><dd>The two sides of the company: InvenTel (the DRTV brand portfolio, est. 1992) and TelNet (the data-driven marketing agency). They operate together, and these policies apply across both.</dd>
        <dt id="gloss-1">Company Lunch Break</dt><dd>A single company-wide one-hour break, 12:30–1:30 PM ET, that everyone takes at the same time. Its local hour differs by location and shifts by an hour between US summer and winter for the locations that don't observe Daylight Saving — see the by-location tables in Working Hours.</dd>
        <dt id="gloss-2">Leave Management</dt><dd>The area inside the InvenTel PM tool where all leave — planned and emergency/day-of — is requested, and where your leave balances are tracked. It replaced the old Google Leave Form.</dd>
        <dt id="gloss-3">Drive HR Resources Folder</dt><dd>The shared Drive folder holding all key forms and reference material — the Onboarding Deck &amp; FAQs, Team Structures, and Invoice Template. (Leave is now requested in the PM tool, not here.)</dd>
        <dt id="gloss-4">The 10-Minute Rule</dt><dd>The chat responsiveness standard: react to or reply to every Google Chat message in <strong>under 10 minutes</strong> during working hours. Exceed it and you're assumed offline or ignoring the sender. A 👍 reaction counts; set your Chat status when you can't respond.</dd>
        <dt id="gloss-5">Following Through</dt><dd>Completing a task to standard <em>and</em> proactively telling the assigner it's done — without being asked. Closing the loop is part of the task.</dd>
        <dt id="gloss-6">Scheduling Etiquette</dt><dd>Connect with people before putting a meeting on their calendar, follow up after, watch Google Calendar's conflict warnings, give notice (and a Chat heads-up) before any reschedule, respond to every invite, and keep recurring invite lists current. See Scheduling &amp; Meeting Etiquette.</dd>
        <dt id="gloss-7">Company-Wide Meeting</dt><dd>An all-hands for company updates and alignment, scheduled with varying notice (sometimes the day before). Attendance is mandatory (cameras on) and tracked; if you're double-booked and can't reschedule, the session is recorded and shared.</dd>
        <dt id="gloss-8">Busy Season</dt><dd>The recurring high-volume period (currently the Friday after Thanksgiving through December 20) when time off is limited — max 2 PTO days, with at least 20 days' notice. See <a href="#agreements">Your Contract &amp; Handbook</a>.</dd>
        <dt id="gloss-9">Floating Holiday</dt><dd>A holiday day you choose for yourself rather than a fixed company-observed date. InvenTel has no mandatory holidays; all are floating and requested in the PM tool.</dd>
        <dt id="gloss-10">Incomplete Workday</dt><dd>A deviation from standard hours (late start, early finish, or a lunch over one hour). Documented the same day in the PM tool's Leave Management, with the exact ET time.</dd>
        <dt id="gloss-11">Probation Period</dt><dd>Your first 90 days. Any days off during this period are unpaid regardless of reason; leave accrual doesn't apply yet.</dd>
        <dt id="gloss-12">Daily Scrum / Standup</dt><dd>Your everyday update in the PM tool's Daily Scrum — active tasks, status, and blockers. Required every workday.</dd>
        <dt id="gloss-13">InvenTel PM Tool</dt><dd>InvenTel's in-house project-management platform (its own ClickUp) — the single source of truth for tasks, the daily scrum, the time tracker, leave requests and balances, channels, and dashboards.</dd>
        <dt id="gloss-14">Time Tracker</dt><dd>The per-task timer inside the PM tool, with periodic screenshots. Turning it on for every task is mandatory; pause it for breaks; deleting a screenshot also deletes the linked time.</dd>
        <dt id="gloss-15">Department Lead (Dept Lead)</dt><dd>Your primary point of direction, responsible for your full workload, quality, deadlines, and capacity. Keep them informed of every task you receive, whoever sent it.</dd>
        <dt id="gloss-16">Channel Rule</dt><dd>All task assignments go through the proper PM channel, never a private DM. DM'd tasks get moved to the channel and flagged to your Dept Lead.</dd>
        <dt id="gloss-17">Brand Hub</dt><dd>A standalone knowledge page in InvenTel University for a single brand, ending in a quiz. Review the full hub and pass the quiz before working on a newly assigned brand.</dd>
        <dt id="gloss-18">Remote Leave Tracker</dt><dd>The company-wide calendar of all approved leave. Subscribe to it, verify your own approved leave appears, and check it before scheduling.</dd>
        <dt id="gloss-19">OOO — Out of Office</dt><dd>Set an OOO event in Google Calendar and it syncs your Away status across Gmail and Chat automatically.</dd>
      </dl>
    </div>
  </div>
</section>

<!-- ============ 28 · FAQ ============ -->
<section id="faq">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">30 · Quick Answers</span>
        <h2>Frequently Asked Questions</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <div class="faq-item"><p class="faq-q" id="faq-q-0">What time zone do I work in if I'm in Egypt, India, Pakistan, the Philippines, or Argentina?</p><p class="faq-a">Eastern Time, always — the same as everyone, including the US teams and HQ in New Jersey. Hours are 8:30 AM – 5:30 PM ET and every meeting and deadline follows ET no matter where you live. Set your Google Calendar primary zone to Eastern Time and add your local zone only as a secondary clock.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-1">When I message or schedule with a teammate, whose time zone do I use?</p><p class="faq-a">Always Eastern Time — never your local time, even when messaging someone in another country to be helpful. One shared clock means everyone makes a single quick conversion and nobody is confused. Mixing local times into chats and invites is what causes missed meetings.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-2">The US just changed its clocks but my country didn't. What do I do?</p><p class="faq-a">Company time always follows the current time in New Jersey, so it shifts with the US change. Your local-to-ET gap moves by an hour for a while — that's expected, and accommodating it is on you. Your calendar handles the meetings automatically because your primary zone is ET; just notice that your start time now lands at a different local hour. If unsure, check the current time in NJ — that's the company time.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-3">How fast do I need to reply to chats?</p><p class="faq-a">React or reply to Google Chat messages in under 10 minutes during working hours — even a one-second 👍 counts. Go longer and we'll assume you're offline or ignoring the person. If you're heads-down (meeting, focused work, break), set your Chat status first so the silence is understood, and respond as soon as you reasonably can.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-4">Do I really have to keep my camera on?</p><p class="faq-a">Yes — for every meeting, internal or client-facing, including 1-on-1s. If you genuinely can't, post a brief Chat status (e.g. "Bandwidth issues") before the meeting. The rule: if your camera can't be on, don't join.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-5">How much notice do I need to request time off?</p><p class="faq-a">7 days for 1 day, 14 days for 2 consecutive days, 21 days for 3 or more. Submit in the PM tool (Leave Management); approval or denial comes within 24 hours. Don't assume approval until it's in writing.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-6">How much paid leave do I get?</p><p class="faq-a">16 paid days a year: 5 PTO + 5 sick + 6 floating holidays. Anything beyond that is unpaid. Days can be split into half-days, and you track your own balance (questions → the Workforce Analyst Team in HR).</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-7">Is a US holiday (or a holiday in my country) automatically a day off?</p><p class="faq-a">No. InvenTel has zero company holidays — no date is off by default, including US public holidays and your local holidays. Every holiday is floating: if you want it off, request it in the PM tool and wait for written approval. Don't assume a day is off and skip work — that's an unapproved absence.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-8">What if I get sick or my internet dies unexpectedly?</p><p class="faq-a">Immediately contact both HR and your Direct Lead — don't wait until you're back. Submit the request in the PM tool (Emergency / Day-Of call-out) as soon as you can. For connectivity issues: Day 1 is a grace period, Day 2+ is unpaid leave until resolved, and Day 3+/recurring can mean suspension or termination — so keep a backup plan ready.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-9">When are invoices due and when do I get paid?</p><p class="faq-a">Invoices are due by the 25th, sent to the shared accounting inbox payroll@inventel.net using the official template, named FirstName LastName_Invoice_MMYYYY.pdf. Payment is processed by the 10th of the following month. List any missed days in the Notes section.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-10">Someone DM'd me a task. What do I do?</p><p class="faq-a">Move it to the correct PM channel and notify your Department Lead — even if the sender is senior. Tasks never get assigned by private DM, because DMs are invisible to leadership and can't be tracked or reassigned.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-11">Can I take freelance or side work?</p><p class="faq-a">No. While employed at InvenTel you can't take freelance, part-time, consulting, advisory, or any secondary income-generating work. Full professional commitment is required.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-12">Can I put InvenTel ads or creative in my portfolio?</p><p class="faq-a">Not without explicit written permission from management — even after you leave. All brand assets and the work you produce belong to the company.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-13">A new brand was just assigned to me. What's expected before I start?</p><p class="faq-a">Review that brand's hub in InvenTel University completely, top to bottom, then pass the quiz at the bottom and follow the standard submission process — upload your named result to the Quiz Results folder and notify the person who assigned it (your Brand Lead). After that, the hub is your first reference for any question on that brand.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-14">What's the very first thing to do on day one?</p><p class="faq-a">Enable 2FA on your Google account (you'll be locked out without it), then email tanvir@inventel.net to start banking setup. From there, work down the New-Hire Setup Checklist.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-15">Who in HR do I go to for leave, onboarding, or hiring?</p><p class="faq-a">HR has three teams. Leave requests, balances, and PM tracker / time-entry issues → the Workforce Analyst Team. Onboarding, platform access, and performance reviews → the Performance Team. Hiring, referrals, or an open position → the Talent Acquisition Team. For a sensitive issue with a teammate or your lead, or if you're unsure who to ask → the Performance Team (handled confidentially). Note this HR routing is for international team members only, not US W2/1099 employees.</p></div>
      <div class="faq-item"><p class="faq-q" id="faq-q-16">I have a conflict with a teammate or my lead and don't know how to handle it. Who do I talk to?</p><p class="faq-a">Reach out to the Performance Team. Concerns, conflicts, and situations you're unsure about are all handled with care and confidentiality.</p></div>
    </div>
  </div>
</section>

<!-- ============ 29 · CHECKLIST ============ -->
<section id="checklist">
  <div class="card collapsible">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">31 · First Week</span>
        <h2>New-Hire Setup Checklist</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
    </div>
    <div class="section-body">
      <p>Work through these during your first days — tap each item to check it off as you go. <strong>Aim to have everything done by the end of Week 1.</strong></p>

      <div class="cl-progress-wrap">
        <div class="cl-progress-top">
          <span class="cl-progress-label">Setup Progress</span>
          <span class="cl-progress-count" id="cl-count">0 of 17 done</span>
        </div>
        <div class="cl-progress-bar"><div class="cl-progress-fill" id="cl-fill" style="width: 0%;"></div></div>
        <div class="cl-actions">
          <button class="cl-reset-btn" onclick="resetChecklist()">↺ Reset checklist</button>
        </div>
      </div>

      <div id="checklist-items">
        <div class="cl-group">
          <div class="cl-group-title">🔐 Google account</div>
          <ul class="cl-list">
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text"><strong>Enable 2FA first</strong> — you'll be locked out without it.</span></button></li>
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Set your <strong>primary</strong> Google Workspace time zone to ET; add your <strong>local</strong> zone as a secondary clock.</span></button></li>
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Subscribe to the <strong>Remote Leave Tracker</strong> calendar and keep it permanently visible.</span></button></li>
          </ul>
        </div>

        <div class="cl-group">
          <div class="cl-group-title">📸 Profile, signature &amp; camera</div>
          <ul class="cl-list">
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Send HR a professional photo; they return a branded image (Canva template) — set it as your Google profile photo.</span></button></li>
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Add your email signature once HR sends it (HR creates it — don't build it manually).</span></button></li>
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Set the company Google Meet virtual background; blur any non-wall real background.</span></button></li>
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Test your camera and microphone on a <a href="https://meet.google.com" target="_blank" rel="noopener">meet.google.com</a> call — camera ON is mandatory for all meetings.</span></button></li>
          </ul>
        </div>

        <div class="cl-group">
          <div class="cl-group-title">💰 Banking &amp; invoicing</div>
          <ul class="cl-list">
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Contact <a href="mailto:tanvir@inventel.net">tanvir@inventel.net</a> by private chat to set up banking — do it immediately, a bank letter may be required.</span></button></li>
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Review the Invoice Template and submission process (due the 25th; paid by the 10th of the next month).</span></button></li>
          </ul>
        </div>

        <div class="cl-group">
          <div class="cl-group-title">🛠️ PM tool, social &amp; team</div>
          <ul class="cl-list">
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Create your <a href="https://inventelpm.automindlabinventel.com/" target="_blank" rel="noopener">InvenTel PM Tool</a> account (the Performance Team helps with setup and assigns your department/role), complete the Loom walkthrough, and confirm the time tracker is installed and running.</span></button></li>
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Complete and return the Social Media Handles Sheet from your HR Performance Manager.</span></button></li>
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Review your training plan, task/deadline processes, communication norms, and the daily-scrum sheet with your Team Lead.</span></button></li>
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Complete Week-1 daily 1:1 check-ins (Week 1 daily → Weeks 2–4 weekly → Months 2–3 bi-weekly → post-probation monthly).</span></button></li>
          </ul>
        </div>

        <div class="cl-group">
          <div class="cl-group-title">🔑 Platform access</div>
          <ul class="cl-list">
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Confirm all required platform access is granted (coordinated by the Performance Team and your manager).</span></button></li>
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Test access to every platform you need before end of Week 1; platform access is handled by the Performance Team, so flag anything missing right away — missing access blocks your work.</span></button></li>
          </ul>
        </div>

        <div class="cl-group">
          <div class="cl-group-title">🎓 Finish line</div>
          <ul class="cl-list">
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Review the full Employee Onboarding Deck end to end and note your questions.</span></button></li>
            <li><button class="cl-item" onclick="toggleCheck(this)"><span class="cl-checkbox"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cl-item-text">Take the <a href="#quiz-section">Knowledge Check Quiz</a>, then follow the standard submission process — upload your named result to the Quiz Results folder and notify the Performance Team (onboarding).</span></button></li>
          </ul>
        </div>
      </div>

      <div class="cl-done-banner" id="cl-done-banner">
        <span class="cl-done-emoji">🎉</span>
        <div><b>That's the whole checklist — nice work.</b><br><span style="font-size:13px;opacity:.95">You're set up and ready to go. Keep this page handy as your reference whenever a question comes up.</span></div>
      </div>

      <p style="font-size:12.5px;color:var(--iv-text-muted);margin-top:14px"><em>Your check-offs are kept for this browser session so you can track progress as you go. They reset if you reload the page — this is a personal checklist, not a submitted form.</em></p>

      <h3 style="margin-top:24px">Your onboarding journey &amp; reviews</h3>
      <p>Everyone's path looks a little different depending on role, team, and the brands you're assigned — but a few things are the same for everyone:</p>
      <div class="mini-grid">
        <div class="mini"><div class="mini-k">Week 1</div><div class="mini-v">Have the <strong>full setup checklist complete by the end of your first week.</strong> That's the shared finish line, however your specific ramp-up is structured.</div></div>
        <div class="mini"><div class="mini-k">Every new brand or platform</div><div class="mini-v">Each time you're assigned a new brand or platform, work through its <a href="#brand">InvenTel University</a> hub, then follow the <a href="#quiz-section">standard quiz submission process</a> — upload your named result to the Quiz Results folder and notify whoever assigned it. This repeats for every new assignment.</div></div>
        <div class="mini"><div class="mini-k">1:1 cadence</div><div class="mini-v">Week 1 daily → Weeks 2–4 weekly → Months 2–3 bi-weekly → monthly after probation, with your lead.</div></div>
      </div>

      <h4 style="margin-top:16px">Performance review schedule</h4>
      <p>Your formal reviews are run with the <strong>Performance Team</strong> on this cadence:</p>
      <div class="flow">
        <div class="flow-step"><div class="flow-step-body"><strong>30 / 60 / 90-day reviews</strong> — three early check-ins with the Performance Team through your first quarter.</div></div>
        <div class="flow-step"><div class="flow-step-body"><strong>Monthly review</strong> — ongoing after the initial 90 days.</div></div>
        <div class="flow-step"><div class="flow-step-body"><strong>Annual review</strong> — your first yearly review, and <strong>annual reviews on a yearly basis</strong> from there on.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 30 · QUIZ ============ -->
<section id="quiz-section" class="collapsible">
  <div class="section-header-bar" onclick="toggleSection(this)">
    <div class="section-header-left">
      <span class="eyebrow" style="color:var(--iv-amber)">32 · Knowledge Check Quiz</span>
      <h2>Prove It · 45 Questions · 70% to Pass</h2>
    </div>
    <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
  </div>
  <div class="section-body">
    <div id="quiz-intro">
      <p style="color:#F7EAEB;max-width:660px;font-size:15px;line-height:1.65">Read everything above first, then take this quiz to confirm you've internalized the policies and processes that matter most day to day. <strong style="color:#fff">Pass: 32 of 45 correct (70%).</strong> One question at a time, immediate feedback, correct answers shown when you miss. Retake as many times as you need — no penalty.</p>
      <p style="color:#F7EAEB;max-width:660px;font-size:15px;line-height:1.65">When you pass, enter your name and title, then capture your result — a <strong style="color:#fff">screenshot of your score card is the easiest option</strong>, or you can print or save the certificate. <strong style="color:#fff">Every quiz — this one and every brand or platform quiz — follows the same submission process:</strong></p>
      <ol style="color:#F7EAEB;max-width:660px;font-size:15px;line-height:1.7;padding-left:22px;margin:10px 0">
        <li><strong style="color:#fff">Capture your result</strong> — a screenshot of your score card is easiest, or save it as a PDF.</li>
        <li><strong style="color:#fff">Name the file</strong> using the standard convention (below) so it's easy to find and track.</li>
        <li><strong style="color:#fff">Upload it</strong> to the <a href="https://drive.google.com/drive/folders/19vsre-bLq4zDgwEAYGcSX22SpJ7hNvIM?usp=drive_link" target="_blank" rel="noopener" style="color:var(--iv-amber)">InvenTel University Quiz Results</a> folder.</li>
        <li><strong style="color:#fff">Notify the person who assigned the quiz</strong> — your onboarding manager, the Performance Team, your Department Lead, Brand Lead, or Agency Lead, depending on which quiz it was.</li>
      </ol>
      <div style="max-width:660px;margin:14px 0 0;padding:14px 18px;background:rgba(255,255,255,.10);border:1px solid rgba(224,163,46,.45);border-radius:10px;color:#F7EAEB;font-size:14px;line-height:1.7">
        <strong style="color:#fff">📄 File naming convention</strong><br>
        <code style="color:var(--iv-amber);font-size:14px">FirstName LastName_Team_Brand (or Platform)_Quiz_MMYYYY.pdf</code><br>
        <span style="font-size:13px">Example: <code style="color:#F7EAEB">Jane Doe_PaidMedia_Acme_Quiz_072026.pdf</code>. For the company onboarding quiz, use your team in place of the brand/platform.</span>
      </div>
      <button class="quiz-start-btn" onclick="startQuiz()" style="background:var(--iv-signal);color:#fff;border:none;padding:14px 28px;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer;font-family:inherit;margin-top:18px;transition:transform .15s,box-shadow .15s;letter-spacing:.02em">Start the quiz →</button>
    </div>
    <div class="quiz-container" id="quiz-container" style="display:none">
      <div id="quiz-active" style="display:none">
        <div class="quiz-progress" id="quiz-progress-text">Question 1 of 45</div>
        <div class="quiz-progress-bar"><div class="quiz-progress-fill" id="quiz-progress-fill" style="width:0%"></div></div>
        <div class="quiz-question" id="quiz-question-text"></div>
        <div class="quiz-options" id="quiz-options-list"></div>
        <div id="quiz-feedback" style="display:none"></div>
        <button id="quiz-next-btn" class="quiz-option" style="margin-top:18px;background:var(--iv-signal);border-color:var(--iv-signal);color:#fff;font-weight:700;justify-content:center;display:none" onclick="nextQuestion()">Next Question →</button>
      </div>

      <div id="quiz-pass" style="display:none">
        <div style="background:linear-gradient(135deg,var(--iv-signal) 0%,var(--iv-signal-deep) 100%);padding:28px;border-radius:12px;text-align:center;margin-bottom:18px">
          <div style="font-size:3rem;margin-bottom:8px">🎉</div>
          <h3 style="color:#fff;font-family:'Archivo',sans-serif;font-size:1.7rem;margin:0">Congratulations — You Passed!</h3>
        </div>
        <div style="background:rgba(255,255,255,.06);border-radius:12px;padding:24px;border:1px solid rgba(200,32,42,.3)">
          <div style="text-align:center;margin-bottom:18px">
            <div style="font-family:'Archivo',sans-serif;font-weight:900;font-size:1.8rem;color:var(--iv-amber);letter-spacing:.02em;line-height:1">INVENTEL</div>
            <div style="font-family:'DM Mono',monospace;font-size:10px;letter-spacing:.18em;color:var(--iv-sky);text-transform:uppercase;margin-top:4px">InvenTel Innovations · Policy &amp; Onboarding Certificate</div>
          </div>
          <div style="margin-bottom:14px">
            <label style="display:block;font-family:'DM Mono',monospace;font-size:11px;color:var(--iv-amber);text-transform:uppercase;letter-spacing:.1em;margin-bottom:6px;font-weight:700">Name · Title</label>
            <input type="text" id="cert-name" placeholder="Jane Smith · Paid Social" style="width:100%;background:rgba(255,255,255,.08);border:1px solid rgba(200,32,42,.4);color:#fff;padding:10px 14px;border-radius:8px;font-size:14px;font-family:'Inter',sans-serif">
          </div>
          <div style="text-align:center;margin:18px 0">
            <span style="display:inline-block;background:var(--iv-success);color:#fff;font-family:'DM Mono',monospace;font-size:11px;font-weight:700;letter-spacing:.12em;padding:6px 14px;border-radius:14px">✓ PASSED</span>
          </div>
          <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(120px,1fr));gap:12px;margin-bottom:18px">
            <div style="background:rgba(0,0,0,.2);border-radius:8px;padding:12px;text-align:center">
              <div id="cert-pct" style="font-family:'Archivo',sans-serif;font-weight:900;font-size:1.5rem;color:var(--iv-amber);line-height:1">—</div>
              <div style="font-family:'DM Mono',monospace;font-size:9.5px;color:var(--iv-sky);letter-spacing:.1em;text-transform:uppercase;margin-top:4px">Score</div>
            </div>
            <div style="background:rgba(0,0,0,.2);border-radius:8px;padding:12px;text-align:center">
              <div id="cert-correct" style="font-family:'Archivo',sans-serif;font-weight:900;font-size:1.5rem;color:var(--iv-amber);line-height:1">—</div>
              <div style="font-family:'DM Mono',monospace;font-size:9.5px;color:var(--iv-sky);letter-spacing:.1em;text-transform:uppercase;margin-top:4px">Correct</div>
            </div>
            <div style="background:rgba(0,0,0,.2);border-radius:8px;padding:12px;text-align:center">
              <div id="cert-date" style="font-family:'Archivo',sans-serif;font-weight:900;font-size:1.5rem;color:var(--iv-amber);line-height:1">—</div>
              <div style="font-family:'DM Mono',monospace;font-size:9.5px;color:var(--iv-sky);letter-spacing:.1em;text-transform:uppercase;margin-top:4px">Date</div>
            </div>
            <div style="background:rgba(0,0,0,.2);border-radius:8px;padding:12px;text-align:center">
              <div style="font-family:'Archivo',sans-serif;font-weight:900;font-size:1.5rem;color:var(--iv-amber);line-height:1">PASSED</div>
              <div style="font-family:'DM Mono',monospace;font-size:9.5px;color:var(--iv-sky);letter-spacing:.1em;text-transform:uppercase;margin-top:4px">Result</div>
            </div>
          </div>
          <div style="font-family:'DM Mono',monospace;font-size:10.5px;color:var(--iv-sky);letter-spacing:.08em;text-transform:uppercase;text-align:center;border-top:1px solid rgba(200,32,42,.25);padding-top:12px;opacity:.85">Training Track · Company Policy &amp; Onboarding · InvenTel Innovations</div>
          <div class="name-printed" style="display:none;text-align:center;margin-top:14px;font-family:'Archivo',sans-serif;font-weight:700;font-size:1.2rem;color:var(--iv-amber)"></div>
        </div>
        <div style="display:flex;gap:12px;flex-wrap:wrap;justify-content:center;margin-top:24px" class="completion-actions">
          <button style="background:rgba(255,255,255,.08);border:none;color:#fff;padding:12px 22px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:inherit;display:inline-flex;align-items:center;gap:8px" onclick="resetQuiz()">↩ Retake Quiz</button>
          <button style="background:var(--iv-signal);border:none;color:#fff;padding:12px 22px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:inherit;display:inline-flex;align-items:center;gap:8px" onclick="printCertificate()">🖨️ Print Certificate</button>
        </div>
        <div style="max-width:560px;margin:18px auto 0;padding:16px 20px;background:rgba(255,255,255,.10);border:1px solid rgba(224,163,46,.45);border-radius:10px;color:#F7EAEB;font-size:14px;line-height:1.7;text-align:center">
          <strong style="color:#fff;font-size:15px">📨 Submit this as proof of completion.</strong><br>
          Use <strong style="color:#fff">🖨️ Print Certificate</strong> above and choose <strong style="color:#fff">"Save as PDF"</strong> (a clean screenshot also works). <strong style="color:#fff">Name it</strong> <code style="color:var(--iv-amber)">FirstName LastName_Team_Brand (or Platform)_Quiz_MMYYYY.pdf</code>, <strong style="color:#fff">upload it</strong> to the <a href="https://drive.google.com/drive/folders/19vsre-bLq4zDgwEAYGcSX22SpJ7hNvIM?usp=drive_link" target="_blank" rel="noopener" style="color:var(--iv-amber)">InvenTel University Quiz Results</a> folder, then <strong style="color:#fff">notify whoever assigned the quiz</strong> (onboarding manager, Performance Team, Department Lead, Brand Lead, or Agency Lead).
        </div>
      </div>

      <div id="quiz-fail" style="display:none">
        <div style="background:linear-gradient(135deg,#C0392B 0%,#8E2A1F 100%);padding:28px;border-radius:12px;text-align:center;margin-bottom:18px;border:2px solid rgba(232,163,61,.3)">
          <div style="font-size:3rem;margin-bottom:8px">📚</div>
          <h3 style="color:#fff;font-family:'Archivo',sans-serif;font-size:1.5rem;margin:0">Not Quite There Yet</h3>
          <p style="color:#fff;margin-top:10px;margin-bottom:0;font-size:14px">You scored <strong id="fail-score">—</strong>. You need 32/45 (70%) to pass.</p>
        </div>
        <div style="background:rgba(255,255,255,.06);border-radius:12px;padding:22px;border:1px solid rgba(200,32,42,.3)">
          <h4 style="color:var(--iv-amber);margin-bottom:10px">Where to Focus Before You Retake</h4>
          <p style="color:var(--iv-sky);font-size:13.5px;line-height:1.65">Most retakes pass after a focused 20–30 minute review of these sections:</p>
          <ul style="color:var(--iv-sky);font-size:13.5px;line-height:1.85;margin-left:20px">
            <li><strong>05 — Agency Structure</strong> (the no-DM channel rule)</li>
            <li><strong>07 — Accounting &amp; Invoicing</strong> (due dates, file naming)</li>
            <li><strong>08 — Working Hours &amp; Time Zone</strong> (ET, lunch, the under-10-min chat rule)</li>
            <li><strong>09 — Leave &amp; Time Off</strong> (notice windows, 16-day allowance, no company holidays, probation)</li>
            <li><strong>12 — Ownership &amp; Accountability</strong> (understand the ask, follow up, keep it professional)</li>
            <li><strong>15 — Meetings &amp; Camera Policy</strong></li>
          </ul>
          <p style="color:var(--iv-sky);font-size:13px;margin-top:12px;margin-bottom:0;font-style:italic;opacity:.9">You've got this. The questions don't change between attempts — review the sections above and you'll pass.</p>
        </div>
        <button class="quiz-option" style="margin-top:18px;background:var(--iv-signal);border-color:var(--iv-signal);color:#fff;justify-content:center;font-weight:700;width:100%" onclick="resetQuiz()">↻ Retake Quiz</button>
      </div>
    </div>
  </div>
</section>

<footer>
  <span class="fbrand">InvenTel Innovations</span> · Est. 1992 · Direct Response Television<br>
  Company Policy &amp; Onboarding Hub · Internal use only · This policy hub does not constitute a contractor agreement.
</footer>

<!-- ============ FLOATING TOC BUTTON ============ -->
<button id="floating-toc-btn" onclick="openTOCDrawer()" aria-label="Open contents">
  <svg viewBox="0 0 24 24"><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
</button>

<script>
/* ===== Section collapse ===== */
function toggleSection(headerEl){
  const card = headerEl.closest('.card.collapsible') || headerEl.closest('section.collapsible');
  if(card) card.classList.toggle('collapsed');
}

/* ===== Interactive checklist ===== */
function updateChecklistProgress(){
  const items = document.querySelectorAll('#checklist-items .cl-item');
  if(!items.length) return;
  const done = document.querySelectorAll('#checklist-items .cl-item.checked').length;
  const total = items.length;
  const pct = Math.round(done/total*100);
  const fill = document.getElementById('cl-fill');
  const count = document.getElementById('cl-count');
  if(fill){ fill.style.width = pct+'%'; fill.classList.toggle('done', done===total); }
  if(count) count.textContent = done+' of '+total+' done';
  const banner = document.getElementById('cl-done-banner');
  if(banner) banner.classList.toggle('show', done===total && total>0);
}
function toggleCheck(btn){
  btn.classList.toggle('checked');
  updateChecklistProgress();
}
function resetChecklist(){
  document.querySelectorAll('#checklist-items .cl-item.checked').forEach(b=>b.classList.remove('checked'));
  updateChecklistProgress();
}
window.addEventListener('load', updateChecklistProgress);

/* ===== TOC drawer ===== */
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

/* ===== Hub search ===== */
const searchInput = document.getElementById('hub-search');
const searchResults = document.getElementById('search-results');
let searchIndex = [];

function buildSearchIndex(){
  searchIndex = [];
  document.querySelectorAll('section[id]').forEach(s=>{
    const h = s.querySelector('h2');
    if(h) searchIndex.push({type:'Section', label:h.textContent.trim(), id:s.id, snippet:''});
  });
  document.querySelectorAll('.team-callout').forEach((el,i)=>{
    const tag = el.querySelector('.team-tag');
    if(!tag) return;
    if(!el.id) el.id = 'callout-'+i;
    const variant = el.classList.contains('cx')?'CX':el.classList.contains('newhire')?'New Hire':el.classList.contains('lead')?'Leadership':el.classList.contains('finance')?'Finance':'Callout';
    searchIndex.push({type:variant+' Callout', label:tag.textContent.trim(), id:el.id, snippet:el.textContent.trim().slice(0,90)});
  });
  document.querySelectorAll('.hazard').forEach((el,i)=>{
    const h = el.querySelector('h4');
    if(!h) return;
    if(!el.id) el.id = 'hazard-'+i;
    searchIndex.push({type:'Critical Rule', label:h.textContent.trim(), id:el.id, snippet:''});
  });
  document.querySelectorAll('.glossary dt').forEach((dt,i)=>{
    if(!dt.id) dt.id = 'gloss-'+i;
    const dd = dt.nextElementSibling;
    searchIndex.push({type:'Glossary', label:dt.textContent.trim(), id:dt.id, snippet:dd?dd.textContent.trim().slice(0,80):''});
  });
  document.querySelectorAll('.faq-q').forEach((q,i)=>{
    if(!q.id) q.id = 'faq-q-'+i;
    searchIndex.push({type:'FAQ', label:q.textContent.trim(), id:q.id, snippet:''});
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
  const groupOrder = ['Section','Critical Rule','New Hire Callout','CX Callout','Leadership Callout','Finance Callout','Callout','Glossary','FAQ'];
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
  // any leftover groups not in groupOrder
  Object.keys(groups).forEach(g=>{
    if(groupOrder.includes(g)) return;
    html += '<div class="search-group"><div class="search-group-label">'+g+'</div>';
    groups[g].forEach(m=>{ html += '<a class="search-result" data-id="'+m.id+'">'+m.label+'</a>'; });
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
  {q:"InvenTel was established in 1992 in the US and leads which sector?", o:["Direct Response Television (DRTV)","Software-as-a-Service","Logistics and freight","Retail banking"], a:0, e:"InvenTel has led the Direct Response Television (DRTV) sector since 1992. You'll also see TelNet — the data-driven marketing agency side of the company; the two operate together and these policies apply across both."},
  {q:"You're in Pakistan scheduling a call with a teammate in Argentina. Which time zone do you use in the invite and message?", o:["Your own local time","The teammate's local time","Eastern Time (ET) — always","UTC"], a:2, e:"Always communicate and schedule in Eastern Time, never your local time. With the whole company (HQ in NJ, plus Egypt, India, Pakistan, the Philippines, Indonesia, Argentina, Colombia, and the US) speaking one clock, everyone makes a single easy conversion and no one is confused. Mixing in local times is what causes missed meetings."},
  {q:"The US has just changed its clocks for Daylight Saving Time. Your country does not observe DST. What happens to company time?", o:["Company time stays where it was; NJ adjusts to you","All company time shifts to match the new time in NJ — you accommodate the change","Working hours are cancelled for that whole week","You switch to your own local time until it resyncs"], a:1, e:"InvenTel always follows the current Eastern Time in New Jersey. When NJ's clock changes, all company time moves with it. If your country doesn't observe DST, your local-to-ET gap shifts by an hour — that's expected, and it's on you to accommodate. Because your calendar's primary zone is ET, meetings stay correct automatically; they just land at a new local hour."},
  {q:"What are the standard working hours?", o:["9:00 AM – 6:00 PM ET","8:00 AM – 4:00 PM ET","Flexible, no set hours","8:30 AM – 5:30 PM ET"], a:3, e:"Standard working hours are 8:30 AM – 5:30 PM ET. You're expected to be available and engaged during these hours unless on approved leave, in a meeting, or on a reasonable break."},
  {q:"When is the company-wide lunch break?", o:["Whenever you like, as long as it's an hour","12:30 PM – 1:30 PM ET, taken by everyone at the same time","1:00 PM in your own local time","There is no set lunch break"], a:1, e:"Everyone takes a one-hour lunch from 12:30–1:30 PM ET. It lands at a different local hour by country (e.g. 7:30 PM in Egypt, 9:30 PM in Pakistan, 10:00 PM in India) but it's always the same Eastern Time window so the whole company breaks together. A lunch over one hour is logged as an Incomplete Workday."},
  {q:"A task or request comes to you. What does taking ownership mean?", o:["Understand the ask, follow up on what you need, and close the loop","Pass it along fast to get it off your plate","Wait for someone else to explain it fully","Only act on it once you're reminded"], a:0, e:"Ownership means engaging with the work, not just routing it. Understand the request first (ask questions if it's unclear), follow up on anything you're waiting on or have handed off, and close the loop. Passing info or tasks through without understanding them isn't ownership."},
  {q:"A teammate sends you feedback or a correction that feels blunt. What's the right response?", o:["Take offense and defend yourself firmly","Ignore it and move on","Reply back using the same blunt tone","Assume good intent and ask for clarification"], a:3, e:"It's work, not personal. Tone gets lost over text, so assume good intent and stay respectful even if a message upsets you. Feedback is meant to help us all connect and grow. If something lands wrong, a quick 'did you mean X?' clears it up."},
  {q:"You get a Google Chat message during working hours but can't fully reply right now. What's the standard?", o:["Reply whenever you're free, even hours later","Wait until end of day","React or reply in under 10 minutes — a 👍 counts","Turn off notifications and focus"], a:2, e:"Every chat during working hours gets a reply or at least a reaction in UNDER 10 minutes — a one-second 👍 or ✓ is enough. Take longer and we assume you're offline or deliberately ignoring the person. If you're going heads-down, set your Chat status first so your silence is understood."},
  {q:"What's the right way to use your Google Chat status?", o:["Keep it current with an emoji, flag time off, and note your return and backup","Leave it blank — people can ask if they need you","Only bother setting it when you're on vacation","Set it once at the start and never change it"], a:0, e:"Keep your status current — it's quick and a lot of people skip it. Add an emoji so it reads at a glance, flag future time off ahead of time, and when you're off make it clear you're away, when you'll return, and who your number-two backup is. For full days off, also set an OOO event in Calendar so it syncs to Chat and Gmail."},
  {q:"What does 'following through' mean at InvenTel?", o:["Finishing the task quietly on your own","Replying to every message within 10 minutes","Just updating your own calendar","Completing it and telling the assigner it's done"], a:3, e:"'Done' means the work is complete and the relevant person knows it. Closing the loop is part of the task — you don't wait to be asked."},
  {q:"What is the rule on cameras during meetings?", o:["Camera on only for client calls","Camera ON for every meeting, no exceptions","Camera optional for 1-on-1s","Camera on only during all-hands"], a:1, e:"Cameras stay on for internal meetings, client calls, and 1-on-1s. If your camera truly can't be on, post a brief Chat status before the meeting. The rule: if your camera can't be on, don't join."},
  {q:"If you can't have your camera on for a meeting, what must you do?", o:["Nothing — just quietly turn the camera off","Email HR about it afterward","Set your Chat status with a brief reason beforehand","Leave the meeting early to avoid it"], a:2, e:"Update your Chat status with a short note (e.g. 'Bandwidth issues', 'Traveling') before the meeting starts — not after."},
  {q:"You're about to schedule a meeting on a teammate's calendar. What should you do first?", o:["Just add it since it's their calendar anyway","Wait for them to request the meeting themselves","Only tell them once it's already scheduled","Message them first and ask what time works before adding it"], a:3, e:"Connect first, every time (unless it's a large group). Let them know a meeting will happen, that you'll add it based on their open availability, and ask if a date/time works best. Then after scheduling, follow up to confirm it's booked. For last-minute or very large meetings, find an open slot from calendars and prioritize the executive team's availability."},
  {q:"You receive a meeting invite. What's expected of you?", o:["Respond with accept, decline, or maybe","Ignore it unless you plan to attend","Only respond if you're declining","Forward the invite to your Dept Lead"], a:0, e:"Always respond to invites — accept, decline, or '?'. Leaving it blank makes people wait on attendees who were never coming. If you accept and later can't make it, update your response and tell the organizer."},
  {q:"You have to reschedule a meeting you organized. What's the right way?", o:["Just move it — the calendar update is enough","Cancel it quietly and rebook it later","Move it with as much notice as you can and message attendees first","Wait until the meeting start time to decide"], a:2, e:"Give as much notice as possible and always message invited people in Chat before the original start time. People plan their days around their schedule; minimize reschedules and never let a meeting be silently cancelled."},
  {q:"How do company-wide meetings work, and what's expected of you?", o:["They're optional unless you are a manager","Scheduled with varying notice; attend when you can, and attendance is tracked","They only happen on the first Friday of the month","There are no company-wide meetings anymore"], a:1, e:"Company-wide meetings come up regularly with varying notice — sometimes well ahead, sometimes the day before. Treat them as mandatory (cameras on). If you're double-booked and can move the other meeting, reschedule it; if not, the session is recorded and shared. Attendance is tracked, and a pattern of missed company-wide meetings will be flagged by the Performance Team."},
  {q:"How much advance notice is required to request 3 or more consecutive days off?", o:["7 days","21 days","14 days","30 days"], a:1, e:"Notice scales with length: 7 days for 1 day off, 14 days for 2 consecutive days, and 21 days for 3 or more consecutive days. Submit in the PM tool (Leave Management)."},
  {q:"What is the total annual paid leave allowance?", o:["10 days","20 days","Unlimited","16 days"], a:3, e:"16 paid days a year: 5 PTO + 5 sick + 6 floating holidays. Anything beyond 16 days is unpaid."},
  {q:"How is the 16-day paid leave allowance broken down?", o:["5 PTO + 5 sick + 6 floating holidays","10 PTO + 6 sick","8 PTO + 8 sick","6 PTO + 5 sick + 5 floating holidays"], a:0, e:"5 PTO + 5 sick + 6 floating holidays = 16. Days can be combined and taken as half-days, and you track your own balance."},
  {q:"What happens to days you take off during your first 90-day probation period?", o:["They're paid as normal","They roll over to next year","They're unpaid, regardless of reason","They count double against your allowance"], a:2, e:"Any days off during probation are unpaid regardless of reason — leave accrual doesn't apply yet. Plan your first three months carefully."},
  {q:"It's a US public holiday (or a holiday in your own country). Is it automatically a day off?", o:["Yes, all US holidays are paid days off","Yes, your local holidays are automatically off","No — there are zero company holidays; every day off must be requested","Only if your manager remembers to approve it"], a:2, e:"InvenTel observes zero company holidays. No date is automatically off — not US holidays, not your local holidays, not New Year's. Every holiday is floating: you must request it in the PM tool and get written approval. Assuming a day is off and not showing up is an unapproved absence."},
  {q:"For an unexpected absence (illness, internet outage), what's the correct first step?", o:["Wait until you're back, then explain","Immediately contact both HR and your Direct Lead","Just submit it in the PM tool later","Post in the InvenTel Team channel"], a:1, e:"Contact both HR and your Direct Lead as soon as the issue occurs — don't wait until you're back. Then submit the request in the PM tool upon return."},
  {q:"On your first day, who do you contact to set up banking, and is it deferrable?", o:["Contact HR; it can wait until month-end","Your team lead; it can be deferred","No action needed until first invoice","The Accountant at tanvir@inventel.net; do it immediately"], a:3, e:"Email tanvir@inventel.net on day one — it can't be deferred. A bank letter may be required, and delays cause payment-processing delays."},
  {q:"When are monthly invoices due, and when is payment processed?", o:["Due the 25th; paid by the 10th of the following month","Due on the 1st; paid on the 15th","Due end of month; paid same day","Due on the 10th; paid on the 25th"], a:0, e:"Invoices are due by the 25th (sent to the shared accounting inbox ap@inventel.net using the official template) and payment is processed by the 10th of the following month."},
  {q:"What's the correct invoice file-naming format?", o:["Invoice_YourFirstName.pdf","MMYYYY_InvoiceFile.pdf","Any format you choose","FirstName LastName_Invoice_MMYYYY.pdf"], a:3, e:"Use FirstName LastName_Invoice_MMYYYY.pdf — e.g. John Doe_Invoice_APR2026.pdf. List any missed workdays in the Notes section."},
  {q:"Are you allowed to take freelance or consulting work while employed at InvenTel?", o:["Yes, as long as it's unrelated","Yes, with manager approval","No — no secondary income work of any kind","Only on weekends and evenings"], a:2, e:"No freelance, part-time, consulting, advisory, or any secondary income-generating work is permitted. Full professional commitment is required."},
  {q:"Who owns the creative, strategy, and other work you produce at InvenTel?", o:["The company — all work product is InvenTel's","You keep the personal rights","Shared 50/50 with you","Whoever happened to assign the task"], a:0, e:"All creative, strategic, technical, and operational work you produce belongs to the company. Brand assets also can't go in personal portfolios without written permission, even after you leave."},
  {q:"What's the minimum internet speed you must maintain during working hours?", o:["5 Mbps","15 Mbps up and down","10 Mbps","50 Mbps"], a:1, e:"At least 15 Mbps upload and download at all times during working hours. You're personally responsible for your connection's quality and reliability."},
  {q:"Under the connectivity policy, what happens if an equipment/internet issue isn't resolved by Day 2?", o:["Unpaid leave until resolved","Nothing","Immediate termination","A written warning only"], a:0, e:"Day 1 is a grace period. Day 2+ is unpaid leave until resolved. Day 3+ or recurring issues can lead to suspension or termination — which is why a backup plan is required."},
  {q:"How often must you update your Daily Scrum in the PM tool?", o:["Weekly","Every single workday","Only when something changes","At the end of each project"], a:1, e:"Update your standup every workday in the PM tool's Daily Scrum — active tasks, status (In-Progress/Completed/Blocked), and blockers. The PM tool is the team's single source of truth."},
  {q:"What's the rule for the PM tool's time tracker?", o:["Run it once a day is fine","Only track billable client work","Run it on every task, without exception","It's optional if you log hours manually"], a:2, e:"Using the tracker is mandatory and per task — start the timer on the task you're working and stop when done. Tracking once a day or skipping it leads to missing/inaccurate logs, and it's your responsibility to keep it running correctly. If notifications or the app aren't working, uninstall the old version, install the latest, and contact the Workforce Analyst Team for any setup/login/usage issue."},
  {q:"Leave requests and balances now live where?", o:["A Google Form in the HR Drive folder","The Monitask app","An email sent to your manager","Inside the InvenTel PM tool (Leave Management)"], a:3, e:"Leave is no longer a Google Form — all requests go through Leave Management in the PM tool, and your balances are tracked there too. For a half day or early leave, state the exact ET time or the request may be returned."},
  {q:"After you submit a leave request, what happens?", o:["It is approved automatically on submission","HR reviews it, looping in your Direct Report for longer requests","Your Accountant reviews and approves it","Nothing happens until you send a reminder"], a:1, e:"The PM tool notifies the HR leave team (Workforce Analyst Team), who review and approve or deny. If there's an error — e.g. paid leave requested before you've completed 90 days — they deny it and ask you to resubmit. More than one day loops in your Direct Report; longer stretches also need executive-team approval. Once approved, the calendar updates, you're added to the leave event, your balance updates, and your Direct Report is notified."},
  {q:"What's the rule on time off during Busy Season (Fri after Thanksgiving – Dec 20)?", o:["Take as much time as you want","No time off at all during it","Only the executive team can take leave","Maximum 2 PTO days, with at least 20 days' notice"], a:3, e:"Because of the As-Seen-On-TV high-volume period, time off in the Busy Season is capped at 2 PTO days and needs at least 20 days' notice. Plan year-end time off early. Full details are in your contract and handbook (see Your Contract & Handbook)."},
  {q:"The hub and your signed contract say slightly different things about a policy. Which one governs?", o:["The hub, since it's the newer source","Whichever one happens to be stricter","Your signed Services Agreement and Handbook","Neither — go ask a teammate instead"], a:2, e:"The hub is your operational guide and does not constitute a contractor agreement. Your signed Services Agreement and Contractor Handbook are the governing documents — where they differ from the hub, the signed agreements control. They also cover conduct, confidentiality/NDA, IP, non-compete, non-solicitation, and termination in full."},
  {q:"You delete a screenshot from the Time Tracker. What else happens?", o:["The time tied to that screenshot is removed from your log too","Nothing else changes in your log","Your entire day of tracked time is deleted","HR is automatically notified of the deletion"], a:0, e:"Deleting a screenshot also removes the time associated with that period from your log. Screenshots add context to logged time; review yours at the end of each day."},
  {q:"Someone more senior DMs you a task directly. What's the correct action?", o:["Just do it right away since they are senior","Ignore the message entirely","Move it to the right PM channel and tell your Department Lead","Forward the request straight to HR"], a:2, e:"All task requests go through the proper channel, never a private DM — even from someone senior. Move it to the channel and notify your Dept Lead so your workload stays visible and trackable."},
  {q:"Which channel is for official company-wide announcements, and how should you use it?", o:["InvenTel Team; all notifications on, no chatter","Education Channel; post questions there","Social Media Callouts; discuss freely","Financial Updates; reply to announcements"], a:0, e:"The InvenTel Team channel is the read-only announcements hub. Enable All notifications, read every post, and keep discussions/questions in DMs or your department's Project Space."},
  {q:"What's expected of every team member on InvenTel's social media?", o:["Nothing — it is the social team's job","Follow the pages but don't interact","Just submit your social handles one time","Full participation — follow, engage, jump on Callouts"], a:3, e:"The CEO has asked for full team participation — follow the company and brand pages and like, comment, and react on posts. Submit your handles via the Performance Team's form, watch the Social Media Callouts channel, and engage immediately when a post is shared. Interacting with our social presence is a required part of the job."},
  {q:"When a new brand is assigned to you, what must you do before starting work on it?", o:["Skim the product page and start working","Review the full hub, pass the quiz, and submit via the standard process","Watch one intro Loom and begin","Ask the Brand Lead for a quick summary"], a:1, e:"Review the full brand hub in InvenTel University — every section, no skimming — then complete the quiz and follow the standard submission process: save and name your result, upload it to the InvenTel University Quiz Results folder, and notify the person who assigned it (your Brand Lead). This restarts every time a new brand enters your scope."},
  {q:"You have a leave-balance question and a separate PM tracker time-entry issue. Which HR team handles both?", o:["Talent Acquisition Team","Performance Team","Neither — ask your manager","Workforce Analyst Team"], a:3, e:"The Workforce Analyst Team handles leave requests, balances, and time-off questions as well as PM tracker issues and manual time entries. Onboarding, access, and performance go to the Performance Team; hiring goes to the Talent Acquisition Team. (This HR routing is for international team members, not US W2/1099.)"},
  {q:"Who founded InvenTel and serves as its CEO?", o:["Faiz Shaikh","Yasir Abdul","Priscilla H.","The Performance Team"], a:1, e:"Yasir Abdul is the Founder and CEO, with 30+ years in product innovation and direct-response TV. Faiz Shaikh and Priscilla H. are the company's Executive Vice Presidents."},
  {q:"How do you keep the company-wide Remote Leave Tracker permanently in view?", o:["Subscribe to it once in Google Calendar so it stays in view","You can't — you have to look it up each time","HR emails the tracker to you every week","It only ever shows on the PM dashboard"], a:0, e:"It's a public InvenTel calendar, so you subscribe once in Google Calendar via Other calendars → + → Subscribe to calendar → search 'Remote Leave Tracker'. After that it stays visible. Separately, when your own leave is approved you're auto-invited to that event, so it appears on your calendar and the shared tracker."},
  {q:"You think you clicked a phishing link or your account may be compromised. What do you do?", o:["Wait and see if anything happens","Only mention it if asked","Report it to the Performance Team immediately","Delete the email and move on"], a:2, e:"Report it to the Performance Team right away — speed limits the damage, and you're never in trouble for reporting a genuine mistake. Also keep 2FA on, use strong unique passwords, never share logins, and keep company data in company tools. Verify any payment/banking request directly with Accounting."},
  {q:"Where does a harassment concern or a conflict with a teammate or lead go?", o:["You just handle it yourself","The Performance Team, confidentially","Post about it in the InvenTel Team channel","Raise it with your Accountant"], a:1, e:"Raise it with the Performance Team. Concerns are handled confidentially, good-faith reports are never held against you, and retaliation is not tolerated. InvenTel expects respectful, inclusive, professional conduct from everyone."}
];

let quizState = {idx:0, correct:0, answered:false};

function startQuiz(){
  quizState = {idx:0, correct:0, answered:false};
  const intro = document.getElementById('quiz-intro');
  if(intro) intro.style.display='none';
  document.getElementById('quiz-container').style.display='block';
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
    btn.innerHTML = `<span class="quiz-option-letter" style="font-family:'DM Mono',monospace;font-weight:700;color:var(--iv-amber);min-width:18px">${String.fromCharCode(65+i)}.</span><span>${opt}</span>`;
    btn.onclick = ()=>selectAnswer(i);
    list.appendChild(btn);
  });
  document.getElementById('quiz-feedback').style.display='none';
  document.getElementById('quiz-feedback').innerHTML='';
  document.getElementById('quiz-next-btn').style.display='none';
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
  const passing = Math.ceil(total*0.7);
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

function resetQuiz(){ startQuiz(); }

function printCertificate(){
  const nameInput = document.getElementById('cert-name');
  const name = nameInput.value.trim();
  if(!name){
    nameInput.focus();
    nameInput.style.borderColor = 'var(--iv-amber)';
    nameInput.style.boxShadow = '0 0 0 3px rgba(232,163,61,.3)';
    nameInput.placeholder = '⚠ Enter your name and title first';
    setTimeout(()=>{
      nameInput.style.borderColor='';
      nameInput.style.boxShadow='';
      nameInput.placeholder='Jane Smith · Paid Social';
    },2400);
    return;
  }
  const printed = document.querySelector('.name-printed');
  if(printed){printed.textContent = name; printed.style.display='block';}
  const quizSection = document.getElementById('quiz-section');
  quizSection.classList.remove('collapsed');
  document.body.classList.add('printing');
  setTimeout(()=>window.print(), 80);
  setTimeout(()=>{
    document.body.classList.remove('printing');
    if(printed) printed.style.display='none';
  }, 100);
  window.addEventListener('afterprint', function once(){
    document.body.classList.remove('printing');
    if(printed) printed.style.display='none';
    window.removeEventListener('afterprint', once);
  });
}
</script>

<!-- ============ ADMIN: EDIT MODE ============ -->
<script>
(function(){
  /* Hardcoded admin credentials — client-side gate only, NOT real security.
     Meant to stop casual/accidental edits, not to protect sensitive data. */
  const IV_ADMIN_USER = 'admin';
  const IV_ADMIN_PASS = 'inventel2026';
  const IV_SESSION_KEY = 'iv_admin_logged_in';

  /* Selectors for human-readable text content that should become editable.
     Deliberately excludes nav chrome, buttons, svg icons, and quiz logic. */
  const IV_EDITABLE_SELECTOR = [
    'h1','h2','h3','h4','p','li','td','th','dt','dd',
    '.eyebrow','.toc-tile-label','.toc-drawer-label',
    '.hero-stat-num','.hero-stat-lbl','.stat-big','.stat-lbl','.exec-role'
  ].join(', ');

  function ivOpenLogin(){
    document.getElementById('iv-login-overlay').classList.add('open');
    document.getElementById('iv-login-error').classList.remove('show');
    setTimeout(()=>{ const u=document.getElementById('iv-login-user'); if(u) u.focus(); }, 50);
  }
  function ivCloseLogin(){
    document.getElementById('iv-login-overlay').classList.remove('open');
    document.getElementById('iv-login-form').reset();
  }
  function ivAttemptLogin(e){
    e.preventDefault();
    const u = document.getElementById('iv-login-user').value.trim();
    const p = document.getElementById('iv-login-pass').value;
    if(u === IV_ADMIN_USER && p === IV_ADMIN_PASS){
      sessionStorage.setItem(IV_SESSION_KEY, 'true');
      ivCloseLogin();
      ivEnterEditMode();
    } else {
      document.getElementById('iv-login-error').classList.add('show');
    }
    return false;
  }

  function ivEnterEditMode(){
    document.body.classList.add('iv-edit-mode');
    document.querySelectorAll(IV_EDITABLE_SELECTOR).forEach(el=>{
      el.setAttribute('contenteditable','true');
      el.setAttribute('data-iv-editable','true');
      el.setAttribute('spellcheck','false');
    });
  }

  const IV_CONTENT_KEY = 'iv_policy_hub_saved_content_v2';

  /* Save only the editable content, not the admin UI or interactive state.
     This lets the admin page reopen with the last saved version instead of
     starting over from the original HTML every time. */
  function ivGetContentSnapshot(){
    return Array.from(document.querySelectorAll(IV_EDITABLE_SELECTOR)).map(el => el.innerHTML);
  }

  function ivApplyContentSnapshot(snapshot){
    if(!Array.isArray(snapshot)) return false;
    const els = Array.from(document.querySelectorAll(IV_EDITABLE_SELECTOR));
    if(snapshot.length !== els.length) return false;

    els.forEach((el, i) => {
      el.innerHTML = snapshot[i];
    });
    return true;
  }

  function ivLoadSavedContent(){
    try{
      const raw = localStorage.getItem(IV_CONTENT_KEY);
      if(!raw) return;
      const snapshot = JSON.parse(raw);
      ivApplyContentSnapshot(snapshot);
    }catch(err){
      console.warn('Could not load saved policy content:', err);
    }
  }

  function ivExitEditMode(){
    sessionStorage.removeItem(IV_SESSION_KEY);
    document.body.classList.remove('iv-edit-mode');
    document.querySelectorAll('[data-iv-editable="true"]').forEach(el=>{
      el.removeAttribute('contenteditable');
      el.removeAttribute('data-iv-editable');
      el.removeAttribute('spellcheck');
    });
  }

  function ivDiscardChanges(){
    if(confirm('Discard unsaved changes and restore the last saved version?')){
      try{
        const raw = localStorage.getItem(IV_CONTENT_KEY);
        if(raw){
          ivApplyContentSnapshot(JSON.parse(raw));
        }else{
          location.reload();
        }
      }catch(err){
        location.reload();
      }
    }
  }

  function ivSaveChanges(){
    /* 1) Persist the edited content for the admin page itself. */
    const snapshot = ivGetContentSnapshot();
    try{
      localStorage.setItem(IV_CONTENT_KEY, JSON.stringify(snapshot));
    }catch(err){
      alert('The changes could not be stored in this browser. Please try again.');
      console.error(err);
      return;
    }

    /* 2) Build the updated admin page AND the clean public page. */
    const adminClone = document.documentElement.cloneNode(true);
    const publicClone = document.documentElement.cloneNode(true);
    const qAdmin = sel => adminClone.querySelector(sel);
    const qPublic = sel => publicClone.querySelector(sel);

    /* Embed the saved snapshot in BOTH files. This is the important part:
       the next admin file opened from disk starts from the latest saved
       content instead of the original HTML. localStorage is also kept as a
       browser-local backup when available. */
    const adminPersistenceScript = adminClone.ownerDocument.createElement('script');
    adminPersistenceScript.textContent =
      'window.__IV_SAVED_CONTENT__=' + JSON.stringify(snapshot) + ';';
    adminClone.querySelector('body').appendChild(adminPersistenceScript);

    const publicPersistenceScript = publicClone.ownerDocument.createElement('script');
    publicPersistenceScript.textContent =
      'window.__IV_SAVED_CONTENT__=' + JSON.stringify(snapshot) + ';';
    publicClone.querySelector('body').appendChild(publicPersistenceScript);

    /* Clean up the public page: no login, toolbar, edit state, or Admin button. */
    const publicLoginOverlay = qPublic('#iv-login-overlay'); if(publicLoginOverlay) publicLoginOverlay.remove();
    const publicToolbar = qPublic('#iv-edit-toolbar'); if(publicToolbar) publicToolbar.remove();
    const publicAdminButton = qPublic('#iv-admin-btn'); if(publicAdminButton) publicAdminButton.remove();
    const publicBody = publicClone.querySelector('body');
    if(publicBody) publicBody.classList.remove('iv-edit-mode');
    publicClone.querySelectorAll('[data-iv-editable="true"]').forEach(el=>{
      el.removeAttribute('contenteditable');
      el.removeAttribute('data-iv-editable');
      el.removeAttribute('spellcheck');
    });

    const publicDrawer = qPublic('#toc-drawer'); if(publicDrawer) publicDrawer.classList.remove('open');
    const publicOverlay = qPublic('#toc-drawer-overlay'); if(publicOverlay) publicOverlay.classList.remove('open');
    const publicSearchResults = qPublic('#search-results');
    if(publicSearchResults){
      publicSearchResults.classList.remove('open');
      publicSearchResults.innerHTML='';
    }

    function ivDownloadHtml(docClone, filename){
      const htmlStr = '<!DOCTYPE html>\n' + docClone.outerHTML;
      const blob = new Blob([htmlStr], {type:'text/html'});
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = filename;
      document.body.appendChild(a);
      a.click();
      a.remove();
      setTimeout(()=>URL.revokeObjectURL(url), 1000);
    }

    /* Download the public page without Admin, plus a NEW admin source file
       that contains the saved content and can be used for future edits. */
    ivDownloadHtml(publicClone, 'inventel-company-policy-hub-updated.html');
    setTimeout(()=>ivDownloadHtml(adminClone, 'inventel-company-policy-hub-admin-updated.html'), 250);

    /* Stay in edit mode so the admin can continue editing immediately. */
    alert('Saved successfully. Two files were updated: the public page (without Admin) and a new Admin page that keeps this content for future edits. Use the new Admin file for your next changes.');
  }

  /* Prevent edit-mode clicks on editable text from triggering link navigation
     or collapsing/expanding the section it lives in — without blocking normal
     caret placement / typing. */
  document.addEventListener('click', function(e){
    if(!document.body.classList.contains('iv-edit-mode')) return;
    const editable = e.target.closest('[data-iv-editable="true"]');
    if(!editable) return;
    if(editable.closest('a')) e.preventDefault();
    if(editable.closest('.section-header-bar')) e.stopPropagation();
  }, true);

  document.addEventListener('DOMContentLoaded', function(){
    /* A downloaded public page may contain its own saved snapshot. */
    if(window.__IV_SAVED_CONTENT__){
      ivApplyContentSnapshot(window.__IV_SAVED_CONTENT__);
    }else{
      /* The admin source page loads the latest saved version from this browser. */
      ivLoadSavedContent();
    }

    if(sessionStorage.getItem(IV_SESSION_KEY) === 'true'){
      ivEnterEditMode();
    }
  });

  window.ivOpenLogin = ivOpenLogin;
  window.ivCloseLogin = ivCloseLogin;
  window.ivAttemptLogin = ivAttemptLogin;
  window.ivExitEditMode = ivExitEditMode;
  window.ivDiscardChanges = ivDiscardChanges;
  window.ivSaveChanges = ivSaveChanges;
})();
</script>



<script>window.__IV_SAVED_CONTENT__=["Sign in to Edit Mode","Client-side gate only — prevents casual edits. Not a security boundary.","Welcome &amp; How to Use This Hub","About InvenTel &amp; TelNet","Executive Leadership","Organizational Structure","Agency Structure &amp; Task Flow","HR Department &amp; Key Contacts","Accounting &amp; Invoicing","Working Hours, Time Zone &amp; Lunch","Leave &amp; Time Off","Remote Leave Tracker","Core Principles &amp; Scope","Ownership, Accountability &amp; Working Together","Communication Standards","Google Chat Status &amp; Availability","Meetings &amp; Camera Policy","Scheduling &amp; Meeting Etiquette","Requesting Access to Platforms &amp; Accounts","The InvenTel PM Tool","Brand Knowledge &amp; University","Company-Wide Channels","Company-Wide Meetings","Social Media Engagement","Equipment &amp; Connectivity","Contractor Disciplinary Policy","Freelancing &amp; IP","Data Security &amp; Acceptable Use","Code of Conduct &amp; Grievances","Your Contract &amp; Handbook","Glossary","FAQ","New-Hire Setup Checklist","Knowledge Check Quiz","Company Policy &amp;<br><span class=\"accent\">Onboarding Hub</span>","Every standard, process, and expectation that keeps our remote, global team running — in one place, for new hires and current team members alike.","HQ in New Jersey, USA · The whole company runs on Eastern Time · Working hours 8:30 AM – 5:30 PM ET · This hub does not constitute a contractor agreement","8:30–5:30","Standard working hours, ET — wherever you are","ET","One clock — always communicate &amp; schedule in Eastern Time","10 min","Reply or react to chats within 10 minutes during office hours","16 days","Annual paid leave: 5 PTO + 5 sick + 6 floating holidays","Camera ON","Cameras on for every meeting — no exceptions","Per task","Time tracker runs on every task — mandatory","Table of Contents","Everything in This Hub","Tap any tile to jump. Use the search bar up top or the floating ☰ button (bottom-right) from anywhere on the page.","Welcome &amp; How to Use This Hub","About InvenTel &amp; TelNet","Executive Leadership","Organizational Structure","Agency Structure &amp; Task Flow","HR Department &amp; Key Contacts","Accounting &amp; Invoicing","Working Hours, Time Zone &amp; Lunch","Leave &amp; Time Off","Remote Leave Tracker","Core Principles &amp; Scope","Ownership, Accountability &amp; Working Together","Communication Standards","Google Chat Status &amp; Availability","Meetings &amp; Camera Policy","Scheduling &amp; Meeting Etiquette","Requesting Access to Platforms &amp; Accounts","The InvenTel PM Tool","Brand Knowledge &amp; University","Company-Wide Channels","Company-Wide Meetings","Social Media Engagement","Equipment &amp; Connectivity","Contractor Disciplinary Policy","Freelancing &amp; IP","Data Security &amp; Acceptable Use","Code of Conduct &amp; Grievances","Your Contract &amp; Handbook","Glossary","FAQ","New-Hire Setup Checklist","Knowledge Check Quiz","1 · Start Here","Welcome &amp; How to Use This Hub","This is the single home for how we work at InvenTel — a remote, global, fast-moving direct-response team with headquarters in New Jersey, USA and teammates across <strong>Egypt, India, Pakistan, the Philippines, Indonesia, Argentina, Colombia, and the United States</strong>. It pulls together the <strong>Communication, Collaboration &amp; Meeting Standards Policy</strong>, the <strong>Employee Onboarding Deck</strong>, and the <strong>New-Hire Onboarding Checklist</strong> into one searchable place. New hires read it top to bottom in week one; current team members use it as the reference whenever a question comes up.","Two things hold a team this spread-out together, and they run through everything below: <strong>everyone works and communicates on one clock — Eastern Time</strong> — and <strong>everyone stays fast and reachable on chat.</strong> Get those two right and the rest follows.","<strong>Your first-week path:</strong> (1) Read this hub top to bottom. (2) Work through the <a href=\"#checklist\">New-Hire Setup Checklist</a> — 2FA, time zone, banking, PM tool, camera test. (3) Take the <a href=\"#quiz-section\">Knowledge Check Quiz</a> at the bottom, then follow the standard submission process — upload your result to the Quiz Results folder and notify the person who assigned it (for onboarding, that's the Performance Team). (4) Ask your Team Lead anything the hub doesn't answer.","Three ways to navigate","Search bar (top)","Indexes every section, callout, glossary term, and FAQ. Press <strong>/</strong> to focus it from anywhere.","Floating contents","The round button at bottom-right opens a jump-to drawer on any screen size.","Collapsible sections","Click any section header to fold it away and scan the structure faster.","<em>This policy hub does not constitute a contractor agreement. Policy content amended August 4, 2025 (v5); onboarding content current as of June 2026. Employees are notified of any material changes.</em>","2 · The Company","About InvenTel &amp; TelNet","<strong>InvenTel</strong> was established in 1992 in the United States and has led the Direct Response Television (DRTV) sector from the start, building creative marketing strategies that forge strong bonds between brands and their audiences. Two names anchor most of the work: <strong>InvenTel</strong> (the brand portfolio and DRTV side) and <strong>TelNet</strong> (the data-fueled, expert-led marketing agency side). They operate together, and the policies in this hub apply across both. Beyond those two, you'll also see the company referred to by other names across email domains, documents, and tools — that's expected, and you don't need to track which is which. Names you may encounter include <strong>InvenTel.TV</strong>, <strong>InvenTel.net</strong>, <strong>InvenTel Innovations</strong>, and <strong>AsSeenOnTV LLC</strong>, and our agency work is sometimes presented under <strong>TelNet</strong>. You may also come across brands and ventures such as <strong>Home Inspo</strong> and <strong>Beyond Patents</strong>, with others in the portfolio and more in development.","<em>This list isn't exhaustive and will grow over time. If you're ever unsure which name applies to something, just ask your Direct Report or HR — it's a common question.</em>","InvenTel · Mission","Elevate holistic brand performance — increasing revenue, market share, and brand awareness across the InvenTel portfolio while building scalable marketing processes to grow the company through an agency model.","InvenTel · Vision","Develop solutions that solve real problems and bring value to people's lives — from the first spark of an idea to seeing products in stores worldwide.","Who you connect with &amp; how we work together","The Drive HR Resources Folder","All key forms and information live in the <a href=\"https://drive.google.com/drive/folders/15MAcljeNEcmY7O3jr6onZMk4egGme3lk?usp=sharing\" target=\"_blank\" rel=\"noopener\"><strong>Drive HR Resources Folder</strong></a>. It's split into two kinds of material:","📚 Reference &amp; information","<strong>Policy &amp; company reference</strong> — policy explanations, company history, and key logistics (kept current in this hub)","<strong>Team Structures</strong> — the visual guide to hierarchy and reporting lines for the company and your department","📝 Forms &amp; templates","<strong>Daily standup</strong> — submitted in the PM tool (Daily Scrum), no longer a Drive sheet","<strong>Leave requests</strong> — submitted in the PM tool (Leave Management), no longer a Drive form","<strong>Invoice Template</strong> — the required format for billing (see <a href=\"#accounting\">Accounting &amp; Invoicing</a>)","3 · Leadership","Executive Leadership","InvenTel is led by its founder and a small executive team. (These are the only individuals named by name in this hub — everywhere else, people are referred to by title so the document stays accurate as the team grows and changes.)","Yasir Abdul","Founder &amp; Chief Executive Officer","With over 32 years of experience in product innovation and direct-response television, Yasir is the driving force behind InvenTel, a powerhouse in the \"As Seen On TV\" space. As Founder and CEO, he's built a reputation for turning everyday problems into smart, accessible solutions through inventive product design and nationwide campaigns.","His journey began with a passion for solving real-world problems in practical ways — an interest in invention and entrepreneurship that grew into a full business model, bringing consumer-focused solutions straight to television and into millions of homes. His leadership is grounded in creative thinking, analytical strategy, and a relentless focus on customer satisfaction, with a strong emphasis on collaboration, agility, and trust.","\"When you create something that solves a real problem, people remember it. That's the power of what we do and why we keep pushing forward.\"","Major milestones under Yasir's leadership include retail partnerships with Walmart, Home Depot, Target, Walgreens, and Bed Bath &amp; Beyond, and a global supply chain supporting international growth. More at <a href=\"https://inventel.tv/about-us/yasir-abdul/\" target=\"_blank\" rel=\"noopener\">inventel.tv</a>.","Executive Vice Presidents","Drives InvenTel's growth through new business, strategic partnerships, and distribution expansion.","Part of the executive team steering company strategy and operations across the portfolio.","4 · Org Structure","Organizational Structure","How the organization fits together","Below the executive team, InvenTel runs as an agency: <strong>Department Leads</strong> own their teams' workload and quality, <strong>Brand Leads</strong> own brand strategy and knowledge, and <strong>Project Managers</strong> coordinate work across them. Day to day, your direction comes from your Department Lead, while work can also flow from a Brand Lead or PM (see <a href=\"#structure\">Agency Structure &amp; Task Flow</a> for exactly how that works and how to keep your Dept Lead in the loop).","Organization chart","The CEO leads the company, with two Executive Vice Presidents over the organization. Below them sit the <strong>Business Functions</strong>, and the <strong>Digital Agency Team</strong> runs as its own set of specialist teams.","The chart above shows the current high-level structure. Because reporting lines and team shapes change often, the <strong>detailed, always-current org charts</strong> live in a shared Google Drive rather than being pasted here. Find both the <strong>company-wide org chart</strong> and the <strong>detailed department org charts</strong> in the <a href=\"https://drive.google.com/drive/folders/1hzSKJ2sRkX-R_y_cHWAPwM0YxhqkWIjJ?usp=sharing\" target=\"_blank\" rel=\"noopener\">Department Structures folder</a>. Department Leads keep their charts updated there and share revisions with the Performance Team. Check that folder for the latest detail rather than relying on a snapshot.","<strong>Other companies we've acquired that still operate separately</strong> have their own org charts, kept in the same shared Drive. The chart above covers InvenTel's structure — if you work with or across one of those companies, look for its individual org chart in the folder.","5 · Who Assigns Your Work","Agency Structure &amp; Task Flow","Your primary direction comes from your <strong>Department Lead</strong>. But on an agency team, work can also legitimately come from a Brand Lead, another Department Lead, a Project Manager, or — on rare occasions — another team member. That's normal. The one rule that holds it all together is <strong>visibility</strong>.","Agency work assignment flow","Here's how work flows through the agency — who sets direction, who owns each department, and how shared creative resources support every team:","The golden rule: keep your Dept Lead informed","Whenever a task arrives from <em>anyone</em> outside your direct Department Lead, notify your Dept Lead immediately with three things:","Your Dept Lead owns your full workload, quality, deadlines, and capacity. They may re-prioritize, push back on a task, or redirect it entirely — but only if they can see it. This applies even to tasks you create for yourself: self-assigned work is encouraged, but always make it visible.","📥 No task assignments via private DM — no exceptions","All task requests must go through the proper project-management channel, <strong>never a private DM</strong>. This holds even if the sender is senior to you. If someone DMs you a task, <strong>move it to the correct channel and notify your Dept Lead.</strong> A task sent by DM is invisible to leadership — it may be the wrong task for you, conflict with a deadline, or belong to someone else. When in doubt, put it in the channel.","6 · Who to Ask","HR Department, Key Contacts &amp; Escalation","The HR routing below is for <strong>international team members only</strong> — it does not apply to US W2 or 1099 employees. HR is here to support you, so don't hesitate to reach out; that's what they're here for.","How HR is structured","The HR department is made up of <strong>three teams that work together</strong> to support you across your whole time at InvenTel — from hiring, through onboarding, to day-to-day performance and workforce operations. Reach the team whose area matches your need; if you're not sure, start with the Performance Team and they'll point you the right way.","New-hire onboarding &amp; support","Platform &amp; access management","1:1 coaching, SOPs &amp; workflows","Performance reviews","Team-member &amp; lead concerns — handled confidentially","Leave requests, balances &amp; tracking","PM tracker monitoring","Manual time entries","Workforce reporting &amp; support","Full-cycle talent acquisition","Candidate sourcing &amp; screening","Interview coordination","Offers, referrals &amp; contracts","Which HR team for what","What you need","Which team","New-hire onboarding &amp; support","<strong>Performance Team</strong>","Platform access","<strong>Performance Team</strong>","Performance reviews, coaching &amp; SOPs","<strong>Performance Team</strong>","An issue with a team member or your lead, a tricky situation, or you're unsure who to ask","<strong>Performance Team</strong> — handled with care and confidentiality","Leave requests, balances, or time-off questions","<strong>Workforce Analyst Team</strong>","PM tracker issues or manual time entries","<strong>Workforce Analyst Team</strong>","Hiring, an open position, or sharing a referral / CV","<strong>Talent Acquisition Team</strong>","For anything involving a team member or a lead — concerns, conflicts, or a situation you're unsure how to handle — reach out to the <strong>Performance Team</strong>. Everything is handled with care and confidentiality.","HR does <strong>not</strong> handle anything money-related — pay, invoices, banking, deductions, or payment timing. All of that goes to the <strong>Accounting team</strong>. If you contact HR about a money question or issue, they'll simply point you back here: use the shared accounting inbox <a href=\"mailto:payroll@inventel.net\">payroll@inventel.net</a>, or message any member of the Accounting team directly in Chat. You'll find the Accounting team members on the <strong>Accounting department org chart</strong> — see <a href=\"#orgstructure\">Organizational Structure</a> for the link to the org-chart folder.","Other key contacts &amp; escalation","Topic","Who / Where","Money — pay, invoices, banking, deductions","Accounting team — shared inbox <a href=\"mailto:payroll@inventel.net\">payroll@inventel.net</a>, or a team member's Chat (see the Accounting org chart). Banking setup &amp; pay questions: <a href=\"mailto:tanvir@inventel.net\">tanvir@inventel.net</a> by private Chat.","Day-to-day work, priorities &amp; capacity","Your Department Lead","Brand or product questions &amp; hub quizzes","The relevant Brand Lead","Profile image &amp; email signature","Performance Team (they request it from the Workforce Analyst Team)","Department org-chart updates","Performance Team","When unsure who owns something work-related, ask your Department Lead — they'll route it. For HR matters, the map above tells you exactly who to reach.","7 · Getting Paid","Accounting &amp; Invoicing","Email <a href=\"mailto:tanvir@inventel.net\">tanvir@inventel.net</a> on your <strong>first day</strong> to set up banking details — this cannot wait until month-end. A bank letter verifying account ownership may be required, and delaying setup can cause payment-processing delays.","Monthly invoice process","Due date","By the <strong>25th</strong> of each month","Send to","Email to the shared accounting inbox <a href=\"mailto:payroll@inventel.net\">payroll@inventel.net</a>. Invoices sent elsewhere may delay payment.","File name","<strong>FirstName LastName_Invoice_MMYYYY.pdf</strong> — e.g. John Doe_Invoice_APR2026.pdf","Template","Use the official <a href=\"https://docs.google.com/spreadsheets/d/19-Pz8S94sMH517xMDBJXHctIIFJB_U1d/edit?usp=drive_link&amp;ouid=102281127488077371367&amp;rtpof=true&amp;sd=true\" target=\"_blank\" rel=\"noopener\">Invoice Template — Inventel.xlsx</a> only","Payment","Processed by the <strong>10th</strong> of the following month","Amount","Use the agreed monthly rate from your contract","Paid for","The <strong>previous</strong> month's work — e.g. work done Jan 1–31 is paid in early February","Missed days","List any missed workdays in the invoice <strong>Notes</strong> section — accounting cross-references attendance and will deduct them either way, so accuracy is your responsibility","🧾 Submit by the 25th, named correctly, or payment is delayed","Get your invoice to <a href=\"mailto:payroll@inventel.net\">payroll@inventel.net</a> <strong>by the 25th</strong>, using the official template and the exact file name <strong>FirstName LastName_Invoice_MMYYYY.pdf</strong>. Late, misnamed, or misdirected invoices can miss the cycle, and on-time correct ones are paid by the <strong>10th</strong> of the following month.","<em>Banking setup is a private chat with the Accountant on day one — never share invoice or bank details with anyone except the company accountant, and only by direct email or private chat.</em>","🔒 Your pay is confidential — an NDA obligation","Your salary and compensation details are <strong>strictly confidential</strong> under your NDA. Don't discuss or disclose them to colleagues under any circumstances. All pay questions go to the Accountant via private Google Chat only, and bank or invoice details are <strong>never shared with anyone other than the Accountant.</strong>","8 · Availability","Working Hours, Time Zone &amp; Lunch","InvenTel's headquarters is in New Jersey, USA, and <strong>the entire company runs on one clock: Eastern Time (ET)</strong>. Standard working hours are <strong>8:30 AM – 5:30 PM ET</strong>. This is true for everyone — our teams in <strong>Egypt, India, Pakistan, the Philippines, Indonesia, Argentina, and Colombia</strong>, and our teams inside the United States. Wherever you sit, your working day, your meetings, your deadlines, and your messages all follow Eastern Time.","Why everyone uses ET — including when you talk to each other","When you communicate, schedule a meeting, or set a deadline, <strong>always state the time in ET — never in your own local time.</strong> This is the single rule that keeps a team spread across five countries and multiple US time zones aligned. If everyone speaks in ET, there's exactly one conversion for each person to make, in their head, instantly — and no one is ever confused about whether \"3 PM\" means your afternoon or someone else's. The moment people start mixing local times into messages and invites, missed meetings and blown deadlines follow.","🕐 One clock, no exceptions — always communicate in ET","Set your Google Calendar <strong>primary</strong> time zone to Eastern Time, and send every meeting invite, message, and deadline in ET. Don't translate to your local time for a colleague, even to be helpful — it breaks the one-clock rule and creates exactly the confusion it's meant to prevent. Add your own local zone only as a <strong>secondary</strong> clock for your personal reference.","In Google Calendar: <strong>Settings → Time zone → primary = Eastern Time (US &amp; Canada)</strong>. Then <strong>Settings → World clock → add your local time zone</strong> as a secondary display so you can see both side by side. Your primary stays ET permanently — that's what every invite you receive and send is anchored to.","When the US clocks change, the whole company shifts with NJ","Twice a year the United States changes its clocks for Daylight Saving Time (roughly mid-March and early November). When New Jersey's clock moves, <strong>all company time moves with it</strong> — InvenTel always follows the current Eastern Time in NJ. Several of our overseas countries do <em>not</em> observe Daylight Saving Time, so on those two changeover dates the gap between your local time and ET shifts by an hour. That's expected, and it's on you to accommodate it.","Working hours &amp; lunch by location","Office hours (8:30 AM – 5:30 PM ET) and the one-hour lunch (12:30 – 1:30 PM ET) are the same for everyone — they're anchored to Eastern Time. But because the US changes its clocks twice a year and <strong>most of our other locations don't</strong>, the <em>local</em> hour those land at shifts by one hour between US summer and US winter. To save you the math, here's both, so you always know your real local hours. <strong>Only the US and Egypt observe Daylight Saving and move with the clock change</strong> — for them the local time is the same year-round; everyone else has two rows of local time depending on the US season.","Office hours — 8:30 AM – 5:30 PM ET","Location","US Summer (EDT) — local","US Winter (EST) — local","US (ET) <span style=\"color:var(--iv-text-muted);font-size:12px\">(EST / EDT)</span>","8:30 AM – 5:30 PM","8:30 AM – 5:30 PM","Egypt <span style=\"color:var(--iv-text-muted);font-size:12px\">(EET / EEST)</span>","3:30 PM – 12:30 AM","3:30 PM – 12:30 AM","Pakistan <span style=\"color:var(--iv-text-muted);font-size:12px\">(PKT)</span>","5:30 PM – 2:30 AM","6:30 PM – 3:30 AM","India <span style=\"color:var(--iv-text-muted);font-size:12px\">(IST)</span>","6:00 PM – 3:00 AM","7:00 PM – 4:00 AM","Philippines <span style=\"color:var(--iv-text-muted);font-size:12px\">(PHT)</span>","8:30 PM – 5:30 AM","9:30 PM – 6:30 AM","Indonesia (Jakarta) <span style=\"color:var(--iv-text-muted);font-size:12px\">(WIB)</span>","7:30 PM – 4:30 AM","8:30 PM – 5:30 AM","Argentina <span style=\"color:var(--iv-text-muted);font-size:12px\">(ART)</span>","9:30 AM – 6:30 PM","10:30 AM – 7:30 PM","Colombia <span style=\"color:var(--iv-text-muted);font-size:12px\">(COT)</span>","7:30 AM – 4:30 PM","8:30 AM – 5:30 PM","Company lunch — 12:30 – 1:30 PM ET","There's a single, company-wide lunch break. Everyone takes it at the same time so the whole company is offline and back together at once.","Location","US Summer (EDT) — local","US Winter (EST) — local","US (ET) <span style=\"color:var(--iv-text-muted);font-size:12px\">(EST / EDT)</span>","12:30 PM – 1:30 PM","12:30 PM – 1:30 PM","Egypt <span style=\"color:var(--iv-text-muted);font-size:12px\">(EET / EEST)</span>","7:30 PM – 8:30 PM","7:30 PM – 8:30 PM","Pakistan <span style=\"color:var(--iv-text-muted);font-size:12px\">(PKT)</span>","9:30 PM – 10:30 PM","10:30 PM – 11:30 PM","India <span style=\"color:var(--iv-text-muted);font-size:12px\">(IST)</span>","10:00 PM – 11:00 PM","11:00 PM – 12:00 AM","Philippines <span style=\"color:var(--iv-text-muted);font-size:12px\">(PHT)</span>","12:30 AM – 1:30 AM","1:30 AM – 2:30 AM","Indonesia (Jakarta) <span style=\"color:var(--iv-text-muted);font-size:12px\">(WIB)</span>","11:30 PM – 12:30 AM","12:30 AM – 1:30 AM","Argentina <span style=\"color:var(--iv-text-muted);font-size:12px\">(ART)</span>","1:30 PM – 2:30 PM","2:30 PM – 3:30 PM","Colombia <span style=\"color:var(--iv-text-muted);font-size:12px\">(COT)</span>","11:30 AM – 12:30 PM","12:30 PM – 1:30 PM","<strong>US summer</strong> runs roughly mid-March to early November (Eastern Daylight Time); <strong>US winter</strong> is the rest of the year (Eastern Standard Time). Because your Google Calendar primary zone is set to ET, every meeting stays correct automatically — these tables just tell you what your local clock will read. A lunch that runs over one hour must be logged the same day as an <a href=\"#leave\">Incomplete Workday</a>.","After-hours reality","InvenTel respects personal time. Occasionally, urgent project needs may require a prompt response in the evening or on a weekend. This is not the norm — but it is a reality of working on a global, fast-moving team.","9 · Time Off","Leave &amp; Time Off","Your total annual paid leave allowance is <strong>16 days</strong>, made up of three buckets. Everything beyond 16 days in a year is unpaid. Days can be combined and taken as half-days, and your <strong>balance is tracked in the PM tool</strong>.","5","PTO days","5","Sick days","6","Floating holidays","📋 All leave is requested in the PM tool — effective immediately","Leave is <strong>no longer a Google Form</strong>. Every leave request now goes through <strong>Leave Management inside the InvenTel PM tool</strong> (see <a href=\"#pmtool\">The InvenTel PM Tool</a>). Requests submitted any other way may not be considered. Your <strong>balances</strong> are updated in the tool too.","How to submit a leave request","<strong>Half day or early leave?</strong> You must state the exact time in ET — e.g. a half day as \"8:30 AM ET – 1:30 PM ET\", or an early leave as \"Leaving at 3:00 PM ET\". Requests missing the time details may be delayed or returned for clarification.","Advance notice required","Submit planned time off with the required advance notice. Approval or denial comes within 24 hours — do not assume approval until it's confirmed in writing.","Time requested","Advance notice required","1 day off","7 days","2 consecutive days","14 days","3 or more consecutive days","21 days","If you can't meet these windows, <strong>submit as early as you possibly can</strong> — the timelines above are the target, not a reason to delay. The more notice your team and lead have, the better they can plan around your absence: balancing workloads, reassigning tasks, and adjusting deadlines so nothing slips while you're out. Early notice almost always means an easier approval, too.","What happens after you submit","Submitting isn't approval. The PM tool notifies the <strong>HR leave team member (Workforce Analyst Team)</strong>, who reviews your request and either approves or denies it. A few things shape what happens next:","Once your request is approved, the system handles the rest: the <strong>calendar is updated</strong>, <strong>you're added to the leave event</strong> on the calendar, your <strong>balance updates</strong>, and your <strong>Direct Report is notified.</strong> (See <a href=\"#tracker\">Remote Leave Tracker</a> for how the event appears for you and the whole team.)","It's still good practice to <strong>block out your own calendar</strong> and <strong>update your Chat status</strong> so the team can see you're out at a glance. If your request is denied, HR will tell you why — fix it and resubmit, or appeal by contacting HR.","Unexpected absences","For an emergency or unexpected issue (illness, hardware failure, an internet outage), notify <strong>both HR and your Direct Report</strong> as soon as you can — don't wait until you're back online. Submit the request in the PM tool (choose <strong>Emergency / Day-Of call-out</strong> as the request type) as soon as you're able.","Incomplete Workday Form","⏰ Log any deviation from standard hours the SAME day","Any deviation from standard hours — a late arrival, an early departure, or a lunch break over one hour — <strong>must be documented the same day</strong> in the PM tool's Leave Management (log it as an incomplete workday / early leave with the exact ET time). <strong>Failure to report may result in disciplinary action.</strong>","There are NO company holidays — every day off is requested","🚫 No automatic holidays — not one, anywhere","InvenTel observes <strong>zero company holidays</strong>. No date is automatically off — not New Year's Eve or Day, and <strong>not US holidays either.</strong> A US public holiday is a normal working day here unless you have personally requested and been approved for it. The same is true for holidays in your own country: they are not days off by default. <strong>If you want a day off for any holiday — US, local, religious, or personal — you must request it in the PM tool and wait for written approval.</strong> Assuming a day is off and not showing up is treated as an unapproved absence.","Every holiday is a <strong>floating</strong> day: you choose which dates are meaningful to you, then request them. Submit those requests in the PM tool as soon as you know your dates (honoring the same notice windows above) rather than waiting until the date is close — the earlier you ask, the more likely it's approved without conflict.","<strong>Heads up on your first 90 days:</strong> any days taken off during the probation period are <strong>unpaid, regardless of reason</strong> — leave accrual doesn't apply yet. Plan your first three months carefully. For any leave-balance questions, contact the Workforce Analyst Team in HR.","10 · Visibility","Remote Leave Tracker Calendar","The <strong>Remote Leave Tracker</strong> is a company-wide calendar, open and visible to everyone at InvenTel. It shows every approved leave across the company, so anyone can see who's out at a glance. It works in two directions — leave you're granted shows up on it automatically, and you keep the whole calendar in view by subscribing to it once.","When your leave is approved, you're added to the event","Once a leave request is approved, you'll receive a Google Calendar <strong>invite to that leave \"event\"</strong> — it appears on your own calendar automatically, and on the shared Remote Leave Tracker that everyone can see. After approval, <strong>check that the event is showing correctly</strong> so your availability is accurate for the team.","Subscribe to the tracker so it's always visible","Beyond your own leave events, you need the full tracker permanently in your calendar view. Because it's a public InvenTel calendar, you just subscribe to it once:","If it doesn't appear when you search, ask HR or your lead to confirm you have access — it's open to all of InvenTel, so it should resolve for any company account.","Use it before you schedule","<strong>Check it before scheduling meetings or assigning work</strong> — see who's out before you make scheduling decisions.","You can also add individual team-member calendars most relevant to your work, so you see availability at a glance.","11 · Foundations","Core Principles &amp; Scope","The Communication, Collaboration &amp; Meeting Standards Policy exists to create a consistent, professional working environment, improve communication across departments, and keep collaboration effective on a distributed team. Five principles sit underneath everything in this hub:","Who this applies to","All employees, contractors, Team Directors, managers, and department heads. Failure to comply may result in coaching, corrective action, or performance discussions in accordance with company policies.","English is the official working language","English is the official working language for company-wide meetings, cross-functional meetings, training sessions, documentation, and any written communication involving multiple teams. Avoid conversations in another language when participants in the room may not understand the discussion.","12 · Own It · Communicate · Grow","Ownership, Accountability &amp; Working Together","This is one of the most important sections in the hub. We're a remote team across many time zones — what holds us together isn't sitting in the same room, it's <strong>ownership, accountability, and communication.</strong> When everyone takes real responsibility for their work and communicates openly, the whole team moves faster and trusts each other more. Please read this carefully and take it to heart.","🎯 Take real ownership — don't just pass it along","Owning a task means more than receiving it and forwarding it on. Too often, information or a task gets passed straight through without anyone truly engaging with it. <strong>Take the time to UNDERSTAND the ask before you complete it or hand it off.</strong> If something isn't clear, ask questions until it is. Owning the work means owning the understanding of it — not just moving it to the next person's plate.","What ownership looks like","✓ Do","<strong>Understand before you act.</strong> Read the full request, make sure you know what success looks like, and ask if anything is unclear.","<strong>Follow up.</strong> If you're waiting on something from someone — or you've handed something off — follow up and see it through. Don't assume it's handled.","<strong>Close the loop.</strong> Confirm when something's done, and flag blockers early rather than going quiet.","✗ Don't","Pass a task or message along without engaging with it first.","Assume someone else is following up — if it's in your hands, it's yours to track.","Go silent when you're stuck. Silence reads as no ownership.","Keep it professional — it's never personal","This is work, and feedback is part of work. When someone shares an update, a correction, or a place you could improve, <strong>please don't take offense.</strong> It's meant to help you and the team grow — not to criticize you as a person. A few things to keep in mind:","<strong>Tone doesn't travel well over text.</strong> A short message can read as blunt even when it wasn't meant that way. Assume good intent, and give people the benefit of the doubt.","<strong>Stay respectful — always.</strong> Even if a message upsets you, respond with respect. That's how we keep this a place where feedback flows freely and everyone can connect and grow.","<strong>When in doubt, ask.</strong> If a message lands wrong, a quick \"did you mean X?\" clears it up faster than assuming the worst.","Messages and feedback are meant to help us all connect and grow together. Treat every exchange as a teammate trying to make the work — and each other — better.","Communication is everything","Because we're remote, we can't rely on hallway chats or reading the room. <strong>Working well together starts with communication.</strong> Over-communicate rather than under-communicate: share updates, ask questions early, flag risks before they become problems, and keep people informed about anything that affects their work. Strong communication is what turns a group of people in different countries into one team. For the specifics — response times, channels, and status — see <a href=\"#communication\">Communication Standards</a> and <a href=\"#status\">Google Chat Status &amp; Availability</a>.","13 · Responsiveness","Communication Standards","Monitor Google Chat and company channels throughout working hours. On a remote team spread across five countries, your responsiveness on chat is the main signal that you're present and engaged — so we hold it to a firm standard.","⏱️ Reply or react to chats in UNDER 10 minutes — during all working hours","Every Google Chat message during the 8:30 AM – 5:30 PM ET window gets a reply <strong>or</strong> a reaction in <strong>less than 10 minutes</strong>. This is the standard, and it is not optional. <strong>If you take longer than 10 minutes, we will assume you are offline or deliberately ignoring the person who messaged you</strong> — there is no in-between. A one-second 👍 or ✓ is enough to show you've seen it; even a quick \"On it\" or \"Calling you back shortly\" counts. What's never acceptable is leaving a chat sitting with no response and no reaction.","If you genuinely can't engage for a stretch — you're in a meeting, in focused work, in training, or on a break — that's exactly what your Chat status is for. <strong>Set your status before you go heads-down</strong>, so the under-10-minute clock is understood and no one mistakes your silence for ignoring them. Urgent matters still get a response as soon as you reasonably can.","<em>One clarification:</em> the under-10-minute standard applies to live chat, where fast back-and-forth keeps the team moving. Email and longer-form requests don't need a reply inside ten minutes — but they still get acknowledged within a reasonable time the same working day. When in doubt during office hours, treat chat as the fast lane and use your status to signal whenever you genuinely can't respond.","Which channel for what","14 · Signal Your Availability","Google Chat Status &amp; Availability","This is a small habit that makes a big difference — and one a lot of people skip. A quick Google Chat status tells the whole team, at a glance, whether you're around, heads-down, or out, so no one's left guessing during the <a href=\"#communication\">under-10-minute</a> response window. It takes seconds to set, and <strong>an emoji makes it read instantly.</strong> Please make this part of your daily routine.","Updating your status is fast. Keep it current as your day changes — stepping away, going into focus time, or taking time off — and add an emoji so teammates can read it at a glance.","How to set your status","Status examples to borrow","Situation","Example status","Stepped away briefly","🍵 Be right back · back by 2:30 ET","Heads-down / focus work","🎧 Focused — will reply after 3 ET","In a meeting","📅 In a meeting","Lunch","🍽️ Lunch — back at 1:30 ET","Off today","🌴 Off today — back tomorrow","Multiple days off","✈️ OOO until Mon · backup: [your #2]","Out sick","🤒 Out sick today — back tomorrow","Personal emergency","🚨 Stepping away — personal emergency","Upcoming time off","🗓️ OOO July 17–19","Call out time off — before <em>and</em> during","<strong>Flag future time off early.</strong> If you know you're out later this week or next, put it in your status ahead of time so the team can plan around your absence.","<strong>Especially when you're out.</strong> On the day(s) you're off, your status should make it unmistakable that you're away and when you'll be back.","<strong>Name your backup.</strong> If you have a <strong>number two</strong> covering for you, add them to your status note so people know who to go to while you're out.","15 · On Camera","Meetings &amp; Camera Policy","Attendance at all team meetings, department syncs, and 1-on-1s is mandatory. If an unavoidable conflict arises, notify your Team Lead <strong>in advance</strong>, not after. Consistent unexplained absences are reported to HR.","📹 Camera ON — every meeting, no exceptions","Cameras stay on for internal team meetings, external client calls, and 1-on-1s. The rule is simple: <strong>if your camera cannot be on, do not join the call.</strong> If you genuinely can't (bandwidth, traveling, not camera-ready), update your Google Chat status with a brief note <strong>before</strong> the meeting starts — not after.","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","<strong data-start=\"494\" data-end=\"526\">For your meeting background:</strong>&nbsp;Use an <strong data-start=\"132\" data-end=\"171\">InvenTel company virtual background</strong> when joining meetings. <span data-start=\"195\" data-end=\"252\">You can find the approved backgrounds here:&nbsp;</span><a href=\"https://drive.google.com/drive/folders/1K39EBPpd8u_hxemtkD1GfFdfyrHu-PWP?usp=sharing\">Inventel - Meetings Background Folder</a>​","","","","<strong>If your connection struggles with video on:</strong> always <strong>start with your camera on</strong>. If keeping it on is clearly hurting your internet connection during the call, it's fine to turn it off — just <strong>let the group know right away</strong> that you're having connection issues and that's why your camera is off. The goal is a stable, present conversation, so lead with video and only drop it when the connection genuinely requires it.","Professionalism standards","✓ Expected","Join on time and prepared — review materials beforehand","Collared or business-casual attire for client meetings","A professional background; blur non-wall backgrounds, or use the&nbsp;​<a href=\"https://drive.google.com/drive/folders/1K39EBPpd8u_hxemtkD1GfFdfyrHu-PWP?usp=sharing\" data-is-inline-chip-link=\"true\" data-display-name=\"Inventel - Meetings Background\" data-inline-chip-type=\"1\" data-dlb=\"true\" data-fdlb=\"true\" data-mimetype=\"application/vnd.google-apps.folder\">Inventel - Meetings Background</a>​","Stay muted when not speaking; participate actively and respect speaking turns","✗ Avoid","Eating meals, smoking, or visible distractions on camera","Multitasking or passive, partial presence","Last-minute cancellations or reschedules except in emergencies (give 24 hrs notice when possible)","Joining late without notifying the organizer as soon as possible","Google Calendar expectations","Keep your calendar accurate. Promptly accept, decline, or respond to invitations and keep your availability current. When you're out or away, set an <strong>Out of Office</strong> event in Google Calendar <em>and</em> update your Chat status to OOO — the OOO event syncs your status across Gmail and Chat automatically.","Directors model these standards, encourage participation, communicate expectations clearly, and address recurring issues within their teams. Directors also own keeping their department org charts accurate (update when people join/leave, reporting changes, or responsibilities shift) and share revised charts with the Performance Team so master records stay current. The <a href=\"https://drive.google.com/drive/folders/1hzSKJ2sRkX-R_y_cHWAPwM0YxhqkWIjJ?usp=sharing\" target=\"_blank\" rel=\"noopener\">Department Structures folder</a> holds the latest templates.","Gemini &amp; AI notetakers","The company already has <strong>Gemini AI notes turned on</strong> for meetings. Gemini runs <strong>quietly in the background</strong> — it captures notes without joining as a participant or taking up a tile on screen. Treat anything captured as internal and handle it with the same confidentiality as any other company material.","🚫 No external AI notetakers in company meetings","Don't bring your own third-party AI notetaker or meeting bot into InvenTel meetings. Those agents join as extra participants and <strong>fill the screen with their own boxes</strong>, which clutters the call for everyone. Gemini already covers notes silently in the background — so if you use any of these tools personally, <strong>don't add them to company meetings.</strong>","16 · Respect People's Time","Scheduling &amp; Meeting Etiquette","On a remote team spread across time zones, putting an event on someone's calendar reaches into their day. A little courtesy before and after scheduling prevents surprises, double-bookings, and disrupted days. The principle underneath all of it: <strong>respect other people's time, and communicate before and after you touch their calendar.</strong> (As always, schedule everything in <a href=\"#hours\">Eastern Time</a>.)","Before you schedule — connect first","🗓️ Before you put a meeting on someone's calendar, check with them first","Before scheduling on someone's calendar, <strong>reach out to them in Chat first — every time</strong>, unless it's a large group (see below). One quick message that lets them know a meeting is going to happen, tells them you'll add the event based on their <strong>open availability</strong>, and asks whether there's a <strong>date or time that works best</strong> for them. This turns a surprise invite into an expected one — and usually surfaces the best slot faster than guessing.","After you schedule — follow up","Once the event is on the calendar, <strong>follow up with that person to confirm it's been scheduled.</strong> Don't assume they saw the invite — closing the loop is part of the task (the same <a href=\"#communication\">\"follow through\"</a> standard as everywhere else).","Sometimes you can't reach everyone first — a <strong>last-minute meeting</strong>, or simply <strong>too many attendees</strong> to message individually. In that case, look at everyone's calendars and find a time that's genuinely open for the group. <strong>Prioritize the executive team's availability and time requests</strong> when there's a conflict to resolve.","Watch for conflicts &amp; double-bookings","When you schedule in Google Calendar, it will <strong>flag if anyone on the invite list already has a conflict</strong> at that time. Pay attention to those warnings so you don't double-book people.","Rescheduling &amp; cancelling","🔔 If you must move a meeting, give notice and tell people directly","","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","\n\n","","","If you need to reschedule or cancel a meeting, do it with <strong data-start=\"240\" data-end=\"270\">as much notice as possible</strong>, and <strong data-start=\"276\" data-end=\"351\">always&nbsp;</strong>","A meeting should not be considered cancelled simply because the organizer, Team Lead, or Director is unavailable. If the meeting is still showing on the calendar, <strong data-start=\"840\" data-end=\"872\">assume it is still happening</strong> unless you receive an official cancellation.","","If you're invited — respond to the invite","When you receive a meeting invite, <strong>accept, decline, or mark \"maybe\" (?)</strong> so the organizer knows who's actually attending. Leaving an invite unanswered makes people wait on attendees who were never coming. If the usual Team Lead, Director, or organizer is unavailable, do not assume the meeting is cancelled. <b>If the meeting remains on your calendar, assume it is still happening</b> unless an official cancellation has been communicated. (If you accept and later can't make it, update your response and give the organizer a heads-up — see camera and attendance rules in <a href=\"#meetings\">Meetings &amp; Camera Policy</a>.)","If you host a meeting — Keep the guest list of any meeting public","","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","Keep the guest list of every meeting public so attendees can clearly see who has been invited and who is expected to participate.","<span style=\"font-size: 1.15rem;\">If you host a meeting — share the meeting notes with everyone</span>","","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","<strong data-start=\"1347\" data-end=\"1386\"></strong><span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","","\n\n","","","Meeting organizers should share the meeting notes with everyone on the guest list, not only the organizer and co-organizer. This ensures everyone who was invited has visibility on the discussion, decisions, and next steps.","<span style=\"font-size: 1.15rem;\">If you host a recurring meeting — keep the invite list clean</span>","","✓ Keep the list accurate","People who <strong>should be there</strong> are on it.","People who <strong>need the notes but don't normally join</strong> — like the executive team — <strong>stay on</strong> the invite so they keep visibility.","✗ Don't let it go stale","People who <strong>no longer need to attend</strong> get removed, so the room reflects who's actually involved.","Don't leave former team members or rolled-off stakeholders on a standing invite.","17 · Getting Set Up","Requesting Access to Platforms &amp; Accounts","InvenTel uses a mix of shared and individual credentials, with different permission levels, access tiers, and brand assignments depending on your role. Getting the right access in place is a <strong>shared effort</strong>: the <strong>Performance Team works with your Team Lead</strong> during onboarding to line up the accesses your role needs — and you play an active part by confirming what's landed and flagging what hasn't.","How it works — and your part in it","If you're <strong>missing access</strong>, <strong>lose access</strong>, or notice your <strong>permissions changed</strong>, reach out to the <strong>Performance Team</strong> and follow up as needed (see <a href=\"#contacts\">HR Department &amp; Key Contacts</a>). Without that heads-up, the team has no way to know what to fix — so following up isn't a bother, it's how the system works. Treat it like any other <a href=\"#ownership\">outstanding task you own</a>: check in until it's resolved. It's genuinely appreciated.","🔑 Already on the team &amp; need more access?","Access needs change as your work does. If you need a <strong>new platform or tool</strong>, <strong>additional brand access</strong>, or <strong>different permissions</strong>, connect with the <strong>Performance Team</strong> to request it (see <a href=\"#contacts\">HR Department &amp; Key Contacts</a>) — the same way onboarding access is handled. Don't wait or work around a gap; request it and follow up until it's in place.","Keeping access secure","<strong>Never share account information without company approval.</strong> Don't hand your logins to another team member, and don't share access to any account without explicit company approval. Access is assigned per person on purpose (see <a href=\"#security\">Data Security &amp; Acceptable Use</a>). If someone needs access, route the request through the <strong>Performance Team</strong> — never solve it by passing credentials around.","<strong>Never request or share access through personal email.</strong> All access is tied to your <strong>company account and approved company channels only.</strong> Never request or share logins, invites, or credentials using a personal email account — personal inboxes are off-limits for anything access-related, with no exceptions.","18 · Daily Operations","The InvenTel PM Tool","InvenTel built its <strong>own</strong> project-management platform — think of it as our in-house version of ClickUp. It's the team's single source of truth: tasks and projects, your daily scrum, the time tracker, leave requests and balances, channels, and dashboards all live in one place. Keeping it accurate is a core part of your job; an empty or stale view creates blind spots and reflects poorly on your work.","","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","","","Platform walkthroughs","Watch these short walkthroughs to learn your way around the PM tool:","The <a href=\"https://drive.google.com/drive/folders/1ST2jUR54nmCynkkL_eNRp6SyP4B2JUVU?usp=drive_link\" target=\"_blank\" rel=\"noopener\"><strong>InvenTel PM Dashboard folder</strong></a> holds the full Walkthrough Library and the Errors Sheet in one place. Found a bug or have feedback on the tool? Log it in the <a href=\"https://docs.google.com/spreadsheets/d/136ZCsJ3UROX090frY3JDfaGEs_QyDSGlFaef_AxqSUY/edit?usp=drive_link\" target=\"_blank\" rel=\"noopener\"><strong>InvenTel Dashboard — Bugs &amp; Errors Sheet</strong></a>.","What you'll use it for","Daily Scrum","Your standup every workday — active tasks, status (In-Progress / Completed / Blocked), and any blockers.","","Time Tracker","Per-task timer (Est vs Logged). Start it on the task you're working, stop when done. check the:&nbsp;<a href=\"https://drive.google.com/file/d/1TKmNfBr12UqMDapY5vU8CVNQKh5drlWr/view?usp=sharing\">InvenTel Time Tracker Video Guide</a>","Leave Management","Submit leave requests and check your balances — all in the tool (see <a href=\"#leave\">Leave &amp; Time Off</a>). New to it? Follow the <a href=\"https://drive.google.com/file/d/1L0lCjEv8kHsCrDuFAVt6LZRhg0pKoVtz/view?usp=drive_link\" target=\"_blank\" rel=\"noopener\">Leave Request Guide</a>.","","Tasks &amp; Projects","Your assigned work, projects, channels, and dashboards — the hub for everything you do.","","Daily Scrum — every workday","Update your standup every single workday in the <strong>Daily Scrum</strong> area: add all active tasks with current status and any blockers or risks. No exceptions. Department Leads and PMs rely on these updates to manage workload, timelines, and priorities.","Time Tracker — mandatory, per task","⏱️ Turn the tracker ON for every task — no exceptions","","<strong data-start=\"2429\" data-end=\"2483\"></strong><span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","Using the time tracker is <strong>mandatory</strong>. The <strong data-start=\"2489\" data-end=\"2539\">Time Tracker is a separate desktop application</strong> and is not part of the PM Tool web app.","Download the Time Tracker here:&nbsp;<a target=\"_blank\" class=\"decorated-link\" rel=\"noopener\" href=\"https://inventelpm.automindlabinventel.com/time-tracking?utm_source=chatgpt.com\">Download the Time Tracker</a>","","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","","","Notifications &amp; the latest version","A <strong>notifications</strong> feature rolled out with the latest version of the PM tool. If your notifications aren't working, <strong>uninstall the old app and download the latest version.</strong> Make sure it's installed and that you're actively using it while working. If you hit <strong>any</strong> issue with installation, login, setup, or usage, contact the <strong>Workforce Analyst Team</strong> right away so they can help you get it resolved.","Work faster — the AI Prompt Library","Use the <a href=\"https://inventelpm.automindlabinventel.com/prompt-library\" target=\"_blank\" rel=\"noopener\"><strong>InvenTel AI Prompt Library</strong></a> — a growing, shared collection of vetted prompts for the tools and workflows you use day to day. Check it before writing prompts from scratch, and reuse what already works.","19 · Know the Portfolio","Brand Knowledge &amp; InvenTel University","InvenTel University is your primary self-serve learning home — the place you go to get up to speed and to look things up while you work. It's organized into <strong>three sections</strong>:","Section","What it covers","What's inside","<strong>Brand Knowledge Hubs</strong><br><span style=\"font-size:12px;color:var(--iv-text-muted)\">What we sell</span>","A complete knowledge hub for every brand in the portfolio — products, positioning, brand voice, audience, offers &amp; policies.","The shared source of truth before you start work on a brand, ending in a mandatory quiz.","<strong>Resource Library</strong><br><span style=\"font-size:12px;color:var(--iv-text-muted)\">Tools we use</span>","A complete training guide for every platform and tool the company puts in your hands.","Step-by-step tutorials at beginner, intermediate &amp; advanced levels — self-contained, each ending in a mandatory quiz.","<strong>Company Policy Hub</strong><br><span style=\"font-size:12px;color:var(--iv-text-muted)\">How we work</span>","This policy hub — the policies, processes, and expectations that apply across every team.","The single reference for how InvenTel operates, kept current as policies change.","Bookmark it and make it part of your regular workflow — it's built as an everyday reference, not just onboarding. When a question comes up while you work, go back and look it up.","<strong>When a brand or platform is assigned to you:</strong> work through its hub or guide <strong>completely, top to bottom</strong> — every section, no skimming or skipping ahead — <em>before</em> starting any work on it. Then take the quiz at the bottom (it's based on the full hub) and follow the <a href=\"#quiz-section\">standard quiz submission process</a>: save and name your result, upload it to the Quiz Results folder, and notify the person who assigned it (your <strong>Brand Lead</strong> or <strong>Department Lead</strong>). This restarts every time a new brand or platform enters your scope. After that, the hub or guide is your first point of reference for any question on it — check it before reaching out.","<em>All quizzes follow the same <a href=\"#quiz-section\">submission process</a> — upload to the Quiz Results folder, then notify whoever assigned it. InvenTel University's intermediate and advanced courses are optional, strongly encouraged, and done in your own time.</em>","Product knowledge is on everyone","⚠️ \"Not knowing a brand\" isn't acceptable","Product knowledge is expected from <strong>every</strong> team member — not just Sales or Support. Proactively learn the features, benefits, and messaging of every brand you support, and stay current as the portfolio changes — new brands get added and existing ones shift, so keep up via the Education Channel and company announcements. If you need help, ask the Brand Lead for a deep-dive. The Brand Knowledge Hubs in InvenTel University are your starting point.","20 · Stay Informed","Company-Wide Channels","InvenTel runs on a set of Google Chat channels. Each has a job — using them correctly keeps the whole team aligned.","Channel","What it's for","Your obligation","<strong>InvenTel Team</strong>","Official company-wide announcements, policy changes, critical info","Enable <strong>All</strong> notifications and read every post. Read-only — never post chatter, questions, or 1-on-1s here","<strong>Social Media Callouts</strong>","Brand posts that need a reach boost","Like and engage <strong>immediately</strong> when a callout appears — mandatory, not optional (see <a href=\"#social\">Social Media Engagement</a>)","<b>Creative Inspirations</b>","Creative ideas, social media trends, and inspiring content that teams can use to test, adapt, and implement across brands","Check <b>regularly</b> and &nbsp;share creative ideas, social media trends&nbsp;, and inspiring content. Teams can use relevant ideas as inspiration for Their team's work","<strong>Company Announcements</strong>","Leave policies, holidays, operational changes","Check <strong>daily</strong>","<strong style=\"color: rgb(26, 20, 22);\">Financial Updates</strong>","Salaries, invoicing timelines, payment info","Check <strong>regularly</strong>","<strong style=\"color: rgb(26, 20, 22);\">Education Channel</strong>","Webinars, tutorials, tool guides, role learning","Check <strong style=\"color: rgb(26, 20, 22);\">weekly</strong> as part of your development","To enable notifications on a channel: click the channel name in Google Chat → Notifications → All. Missing these channels can mean missed deadlines or policy violations. Keep all discussions and questions in DMs or your department's Project Space — not the InvenTel Team hub.","21 · All-Hands","Company-Wide Meetings","InvenTel schedules <strong>company-wide meetings</strong> — all-hands sessions for executive updates, department highlights, and company alignment. These come up regularly, and the <strong>notice varies</strong>: some are announced well in advance, and others land on your calendar the <strong>day before</strong>. Keep an eye on your Google Calendar and the company announcements channel so one doesn't slip past you.","If you're double-booked","Company-wide meetings are a priority. If one lands on top of another meeting you can move, <strong>reschedule the other meeting</strong> so you can attend the all-hands. If the conflict genuinely can't be moved, the session is <strong>recorded and shared</strong> in the <a href=\"https://drive.google.com/drive/folders/1p1WIKvKOInTIg61h5t-sY-kZ_Y4YXNdw?usp=drive_link\" target=\"_blank\" rel=\"noopener\"><strong>Company-Wide Meeting Records</strong></a> folder — watch the recording as soon as you can to stay caught up.","🗓️ Attendance is tracked — don't make a habit of missing them","Treat company-wide meetings as <strong>required — cameras on, full attendance</strong>, the same as any other mandatory meeting. <strong>Attendance is tracked.</strong> Missing one for a genuine, unavoidable conflict (and catching up on the recording) is fine — but a <strong>pattern of missed company-wide meetings will be flagged by the Performance Team.</strong>","22 · Show Up for the Brands","Social Media Engagement","We're a marketing agency — our own social presence matters, and every team member is part of it. <strong>Interacting with InvenTel's social pages and brand accounts is a required part of the job</strong>, not an optional extra.","📣 Full team participation — straight from the CEO","The CEO has asked for <strong>full team participation</strong> across our social presence: <strong>follow the pages, and like, comment, and react</strong> on posts. When our own people show up, posts perform better and the brands gain real momentum. Treat this as a standing expectation for everyone.","How it works","Shortform video — watch it all the way through","One important thing to keep in mind with <strong>shortform content</strong>: when you interact with the videos, it's crucial to <strong>watch them all the way through</strong>. Retention is what the algorithm rewards — just opening a video to drop a quick comment and leaving actually <strong>hurts the reach</strong>, because the algorithm reads it as people clicking away instantly.","So if you're going to comment to help drive engagement, <strong>watch the full video first</strong>, then leave comments people will actually reply to or like. Funny jokes, relatable memes, or even slightly controversial or negative takes work well — they get the comment section moving, which is exactly the kind of activity that boosts a post.","✓ What counts as participation","Following the company and brand pages.","Likes, reactions, and genuine comments on posts.","Watching shortform videos all the way through before commenting.","Jumping on Social Media Callouts as soon as they're posted.","✗ What to avoid","Opening a video, dropping a comment, and clicking away — it hurts reach.","Ignoring callouts or engaging days later.","Skipping the handles form, so your engagement can't be counted.","Posting anything that conflicts with the <a href=\"#conduct\">Code of Conduct</a> or shares confidential info (see <a href=\"#security\">Data Security</a>).","23 · Your Setup","Equipment &amp; Connectivity","InvenTel does not provide equipment. You are personally responsible for a working setup and a stable connection throughout working hours.","Connectivity &amp; performance policy","Timeline","What happens","Day 1","Grace period — resolve the issue","Day 2+","Unpaid leave until resolved","Day 3+ / recurring","Review — potential suspension or termination","This policy applies equally to everyone, regardless of role or tenure.","24 · Important · Corrective Action","Contractor Disciplinary Policy","⚠️ Important — this policy applies to everyone","The <strong>Contractor Disciplinary Policy</strong> sets out how performance and conduct issues are addressed, the steps of the corrective-action process, and the standards every contractor is held to — regardless of role or tenure. It works alongside the standards in <a href=\"#conduct\">Code of Conduct &amp; Grievances</a> and the terms in <a href=\"#agreements\">Your Contract &amp; Handbook</a>. Where this policy and your signed agreements ever differ, <strong>your signed agreements control.</strong>","Progressive warning process","Most issues are handled through a progressive series of warnings, giving you a clear opportunity to correct course at each stage:","Stage","Action","<strong>1st Warning</strong>","Verbal / documented warning","<strong>2nd Warning</strong>","Written warning","<strong>3rd Warning</strong>","Final written warning","<strong>Further violation</strong>","May result in termination","Warning-level violations","These are the kinds of issues that typically move through the progressive warning process:","Category","Examples","<strong>Communication</strong>","Unprofessional or disrespectful communication; ignoring reasonable instructions from your manager; repeated failure to attend required meetings without prior notice.","<strong>Attendance &amp; reliability</strong>","Repeated lateness; repeated unapproved absences.","<strong>PM Tool &amp; company processes</strong>","Repeated failure to update tasks in the <a href=\"#pmtool\">PM Tool</a>; failure to follow the required ticket structure or workflows; failure to submit leave requests through the PM Tool; failure to accurately use the Time Tracker after coaching.","<strong>Performance</strong>","Repeated missed deadlines due to negligence; failure to complete assigned work without communication; repeated disregard for company processes after coaching.","Immediate termination","🚫 Serious violations can skip the warning process entirely","The following may result in <strong>immediate termination</strong>, depending on the severity of the incident and the outcome of any investigation.","Category","Examples","<strong>Confidentiality &amp; security</strong>","Sharing confidential company or client information; unauthorized access to company systems, accounts, or data; misuse of company credentials or sensitive information. (See <a href=\"#security\">Data Security</a>.)","<strong>Workplace conduct</strong>","Harassment, discrimination, bullying, or threatening behavior; serious violations of the company's <a href=\"#conduct\">Code of Conduct</a>.","<strong>Company property</strong>","Intentional destruction or misuse of company systems, equipment, or property.","<strong>Conflict of interest &amp; outside employment</strong>","Working for any other company or client (full-time, part-time, freelance, consulting, or contract) in violation of the Employment Agreement; operating or participating in an outside business that violates the agreement; serious undisclosed conflicts of interest. (See <a href=\"#agreements\">Full-time commitment</a>.)","<strong>Legal &amp; compliance</strong>","Any illegal activity affecting the company, its contractors, or its clients; serious violations of applicable laws or regulatory requirements.","<em>Immediate-termination decisions are subject to management review and, where applicable, an internal investigation.</em>","Management discretion","Depending on the nature and severity of the violation, management may:","Provide <strong>coaching</strong> instead of issuing a warning;","<strong>Skip warning levels</strong> for serious misconduct; or","Proceed <strong>directly to termination</strong> when warranted.","All disciplinary actions are documented by the contractor's manager and HR.","See the complete <a href=\"https://docs.google.com/document/d/1e2M6MdYcMRYXyx1ygVyVZw8rXWF5n-edKaRCICvuGKc/edit?usp=sharing\" target=\"_blank\" rel=\"noopener\"><strong>Contractor Disciplinary Policy</strong></a> for the authoritative version. Questions about how it applies to you? Reach out to the <strong>Performance Team</strong> (see <a href=\"#contacts\">HR Department &amp; Key Contacts</a>).","25 · Ownership","Freelancing &amp; Intellectual Property","Three rules from your employment agreement, in plain terms:","No outside work","No freelance, part-time, consulting, advisory, or any secondary income-generating work while employed here. Full professional commitment is required across all roles and engagement types.","Brand assets stay internal","InvenTel brand names, logos, product imagery, creative, copy, and ad assets may not appear in personal portfolios or be shared externally without explicit written permission — even after you leave.","Work product belongs to InvenTel","All creative, strategic, technical, and operational work you produce — creatives, copy, strategy, designs, code, data, processes — is assigned to the company for the duration of your engagement.","26 · Protect the Company","Data Security &amp; Acceptable Use","Working remotely means you're responsible for the security of the company accounts, tools, and data you touch every day. These are the baseline expectations for everyone — they protect you, your teammates, the brands, and our customers.","Accounts &amp; access","Handling company &amp; customer data","<strong>Keep company data in company tools.</strong> Don't copy brand assets, customer data, strategy, or creative to personal drives, personal email, or unapproved apps.","<strong>Share on a need-to-know basis.</strong> Only give access to people who need it for the work, and use proper sharing (named people, not \"anyone with the link\") for anything sensitive.","<strong>Treat everything internal as confidential</strong> — including meeting notes and anything captured by AI notetakers — and remember brand assets and your work product belong to InvenTel (see <a href=\"#ip\">Freelancing &amp; IP</a>).","<strong>Customer and personal data</strong> gets extra care: collect only what's needed, never misuse it, and never move it outside approved systems.","Phishing &amp; suspicious activity","Be skeptical of unexpected links, login pages, payment-change requests, and urgent \"do this now\" messages — even if they appear to come from someone senior. Verify through a known channel before acting. <strong>Money and banking requests are a common scam target</strong>: confirm anything payment-related directly with the Accounting team (see <a href=\"#accounting\">Accounting &amp; Invoicing</a>).","🔐 If something looks compromised, report it immediately","If you lose a device, click a suspicious link, suspect your account is compromised, or notice anything that looks like a breach, <strong>report it to the Performance Team right away</strong> — speed limits the damage, and you will never be in trouble for reporting a genuine mistake. Stalling or hiding it is the only wrong move.","Acceptable use","Company accounts and tools are for company work. Keep your usage lawful and professional, don't install pirated or untrusted software on a machine you use for work, and don't use company systems to harass, discriminate, or share inappropriate content (see <a href=\"#conduct\">Code of Conduct</a>). When in doubt about whether something is okay to do, install, or share, ask the Performance Team first.","27 · How We Treat Each Other","Code of Conduct &amp; Grievances","InvenTel is a global, remote team, and how we treat one another is what makes that work. The standard is simple: <strong>be professional, respectful, and inclusive in every interaction</strong> — in meetings, in Chat, in comments, and in DMs.","What's expected","✓ Expected","Treat everyone with respect across cultures, time zones, and backgrounds.","Communicate professionally and assume good intent.","Give and receive feedback constructively.","Support teammates and help create a positive, inclusive environment.","✗ Not tolerated","Harassment, bullying, or intimidation of any kind.","Discrimination based on race, gender, religion, nationality, age, disability, or any protected characteristic.","Sexual harassment, offensive or inappropriate content, or hostile behavior.","Retaliation against anyone who raises a concern in good faith.","Raising a concern or grievance","If something doesn't feel right — a conflict with a teammate or lead, behavior that crosses a line, or a situation you're unsure how to handle — you have a clear, confidential path:","You can raise a concern without fear. Good-faith reports are kept confidential and <strong>retaliation of any kind is not tolerated.</strong> If you're ever unsure whether something is worth raising — raise it. The Performance Team would rather hear it early.","Conduct violations are taken seriously and may lead to coaching, corrective action, or — for serious cases — suspension or termination, consistent with the standards in <a href=\"#principles\">Core Principles &amp; Scope</a>.","28 · The Governing Documents","Your Contract &amp; Handbook","This hub is your <strong>operational guide</strong> — how we work day to day. The formal terms of your engagement live in two documents you signed when you joined: your <strong>Services Agreement (contract)</strong> and the <strong>Contractor Handbook</strong>. Those are the governing documents. Where this hub and your signed agreements ever differ, <strong>your signed agreements control.</strong> This hub does not constitute a contractor agreement.","A few of those policies are summarized elsewhere in this hub for day-to-day use, but the full and binding versions are in your contract and handbook. The items below are <strong>covered there in detail</strong> — review your copies if you need specifics:","Two points from your agreement worth calling out here, because they affect everyday planning:","Busy Season — limited time off","Because of the nature of the As-Seen-On-TV business, InvenTel has a recurring high-volume <strong>Busy Season</strong> when time off is limited to keep things running. Currently that window runs from the <strong>Friday after Thanksgiving through December 20</strong>, and applies to <strong>everyone</strong>:","Plan year-end time off early — the Busy Season fills up and requests are limited.","Full-time commitment","The work at InvenTel is complex and treated as a <strong>full-time commitment.</strong> Per your agreement, while engaged with InvenTel you're expected <strong>not to take on other paid work</strong> — as an employee, contractor, or otherwise — that would compete for that commitment. If your situation changes, talk to your Direct Report or HR rather than assuming.","Don't have your signed contract or the Contractor Handbook handy? Ask the <strong>Performance Team</strong> for a copy. For any question about what a specific clause means, HR can point you to the right section — when the hub and your agreement differ, the signed agreement is the final word.","29 · Reference","Glossary","InvenTel / TelNet","The two sides of the company: InvenTel (the DRTV brand portfolio, est. 1992) and TelNet (the data-driven marketing agency). They operate together, and these policies apply across both.","Company Lunch Break","A single company-wide one-hour break, 12:30–1:30 PM ET, that everyone takes at the same time. Its local hour differs by location and shifts by an hour between US summer and winter for the locations that don't observe Daylight Saving — see the by-location tables in Working Hours.","Leave Management","The area inside the InvenTel PM tool where all leave — planned and emergency/day-of — is requested, and where your leave balances are tracked. It replaced the old Google Leave Form.","Drive HR Resources Folder","The shared Drive folder holding all key forms and reference material — the Onboarding Deck &amp; FAQs, Team Structures, and Invoice Template. (Leave is now requested in the PM tool, not here.)","The 10-Minute Rule","The chat responsiveness standard: react to or reply to every Google Chat message in <strong>under 10 minutes</strong> during working hours. Exceed it and you're assumed offline or ignoring the sender. A 👍 reaction counts; set your Chat status when you can't respond.","Following Through","Completing a task to standard <em>and</em> proactively telling the assigner it's done — without being asked. Closing the loop is part of the task.","Scheduling Etiquette","Connect with people before putting a meeting on their calendar, follow up after, watch Google Calendar's conflict warnings, give notice (and a Chat heads-up) before any reschedule, respond to every invite, and keep recurring invite lists current. See Scheduling &amp; Meeting Etiquette.","Company-Wide Meeting","An all-hands for company updates and alignment, scheduled with varying notice (sometimes the day before). Attendance is mandatory (cameras on) and tracked; if you're double-booked and can't reschedule, the session is recorded and shared.","Busy Season","The recurring high-volume period (currently the Friday after Thanksgiving through December 20) when time off is limited — max 2 PTO days, with at least 20 days' notice. See <a href=\"#agreements\">Your Contract &amp; Handbook</a>.","Floating Holiday","A holiday day you choose for yourself rather than a fixed company-observed date. InvenTel has no mandatory holidays; all are floating and requested in the PM tool.","Incomplete Workday","A deviation from standard hours (late start, early finish, or a lunch over one hour). Documented the same day in the PM tool's Leave Management, with the exact ET time.","Probation Period","Your first 90 days. Any days off during this period are unpaid regardless of reason; leave accrual doesn't apply yet.","Daily Scrum / Standup","Your everyday update in the PM tool's Daily Scrum — active tasks, status, and blockers. Required every workday.","InvenTel PM Tool","InvenTel's in-house project-management platform (its own ClickUp) — the single source of truth for tasks, the daily scrum, the time tracker, leave requests and balances, channels, and dashboards.","Time Tracker","The per-task timer inside the PM tool, with periodic screenshots. Turning it on for every task is mandatory; pause it for breaks; deleting a screenshot also deletes the linked time.","Department Lead (Dept Lead)","Your primary point of direction, responsible for your full workload, quality, deadlines, and capacity. Keep them informed of every task you receive, whoever sent it.","Channel Rule","All task assignments go through the proper PM channel, never a private DM. DM'd tasks get moved to the channel and flagged to your Dept Lead.","Brand Hub","A standalone knowledge page in InvenTel University for a single brand, ending in a quiz. Review the full hub and pass the quiz before working on a newly assigned brand.","Remote Leave Tracker","The company-wide calendar of all approved leave. Subscribe to it, verify your own approved leave appears, and check it before scheduling.","OOO — Out of Office","Set an OOO event in Google Calendar and it syncs your Away status across Gmail and Chat automatically.","30 · Quick Answers","Frequently Asked Questions","What time zone do I work in if I'm in Egypt, India, Pakistan, the Philippines, or Argentina?","Eastern Time, always — the same as everyone, including the US teams and HQ in New Jersey. Hours are 8:30 AM – 5:30 PM ET and every meeting and deadline follows ET no matter where you live. Set your Google Calendar primary zone to Eastern Time and add your local zone only as a secondary clock.","When I message or schedule with a teammate, whose time zone do I use?","Always Eastern Time — never your local time, even when messaging someone in another country to be helpful. One shared clock means everyone makes a single quick conversion and nobody is confused. Mixing local times into chats and invites is what causes missed meetings.","The US just changed its clocks but my country didn't. What do I do?","Company time always follows the current time in New Jersey, so it shifts with the US change. Your local-to-ET gap moves by an hour for a while — that's expected, and accommodating it is on you. Your calendar handles the meetings automatically because your primary zone is ET; just notice that your start time now lands at a different local hour. If unsure, check the current time in NJ — that's the company time.","How fast do I need to reply to chats?","React or reply to Google Chat messages in under 10 minutes during working hours — even a one-second 👍 counts. Go longer and we'll assume you're offline or ignoring the person. If you're heads-down (meeting, focused work, break), set your Chat status first so the silence is understood, and respond as soon as you reasonably can.","Do I really have to keep my camera on?","Yes — for every meeting, internal or client-facing, including 1-on-1s. If you genuinely can't, post a brief Chat status (e.g. \"Bandwidth issues\") before the meeting. The rule: if your camera can't be on, don't join.","How much notice do I need to request time off?","7 days for 1 day, 14 days for 2 consecutive days, 21 days for 3 or more. Submit in the PM tool (Leave Management); approval or denial comes within 24 hours. Don't assume approval until it's in writing.","How much paid leave do I get?","16 paid days a year: 5 PTO + 5 sick + 6 floating holidays. Anything beyond that is unpaid. Days can be split into half-days, and you track your own balance (questions → the Workforce Analyst Team in HR).","Is a US holiday (or a holiday in my country) automatically a day off?","No. InvenTel has zero company holidays — no date is off by default, including US public holidays and your local holidays. Every holiday is floating: if you want it off, request it in the PM tool and wait for written approval. Don't assume a day is off and skip work — that's an unapproved absence.","What if I get sick or my internet dies unexpectedly?","Immediately contact both HR and your Direct Lead — don't wait until you're back. Submit the request in the PM tool (Emergency / Day-Of call-out) as soon as you can. For connectivity issues: Day 1 is a grace period, Day 2+ is unpaid leave until resolved, and Day 3+/recurring can mean suspension or termination — so keep a backup plan ready.","When are invoices due and when do I get paid?","Invoices are due by the 25th, sent to the shared accounting inbox payroll@inventel.net using the official template, named FirstName LastName_Invoice_MMYYYY.pdf. Payment is processed by the 10th of the following month. List any missed days in the Notes section.","Someone DM'd me a task. What do I do?","Move it to the correct PM channel and notify your Department Lead — even if the sender is senior. Tasks never get assigned by private DM, because DMs are invisible to leadership and can't be tracked or reassigned.","Can I take freelance or side work?","No. While employed at InvenTel you can't take freelance, part-time, consulting, advisory, or any secondary income-generating work. Full professional commitment is required.","Can I put InvenTel ads or creative in my portfolio?","Not without explicit written permission from management — even after you leave. All brand assets and the work you produce belong to the company.","A new brand was just assigned to me. What's expected before I start?","Review that brand's hub in InvenTel University completely, top to bottom, then pass the quiz at the bottom and follow the standard submission process — upload your named result to the Quiz Results folder and notify the person who assigned it (your Brand Lead). After that, the hub is your first reference for any question on that brand.","What's the very first thing to do on day one?","Enable 2FA on your Google account (you'll be locked out without it), then email tanvir@inventel.net to start banking setup. From there, work down the New-Hire Setup Checklist.","Who in HR do I go to for leave, onboarding, or hiring?","HR has three teams. Leave requests, balances, and PM tracker / time-entry issues → the Workforce Analyst Team. Onboarding, platform access, and performance reviews → the Performance Team. Hiring, referrals, or an open position → the Talent Acquisition Team. For a sensitive issue with a teammate or your lead, or if you're unsure who to ask → the Performance Team (handled confidentially). Note this HR routing is for international team members only, not US W2/1099 employees.","I have a conflict with a teammate or my lead and don't know how to handle it. Who do I talk to?","Reach out to the Performance Team. Concerns, conflicts, and situations you're unsure about are all handled with care and confidentiality.","31 · First Week","New-Hire Setup Checklist","Work through these during your first days — tap each item to check it off as you go. <strong>Aim to have everything done by the end of Week 1.</strong>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\"><strong>Enable 2FA first</strong> — you'll be locked out without it.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Set your <strong>primary</strong> Google Workspace time zone to ET; add your <strong>local</strong> zone as a secondary clock.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Subscribe to the <strong>Remote Leave Tracker</strong> calendar and keep it permanently visible.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Send HR a professional photo; they return a branded image (Canva template) — set it as your Google profile photo.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Add your email signature once HR sends it (HR creates it — don't build it manually).</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Set the company Google Meet virtual background; blur any non-wall real background.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Test your camera and microphone on a <a href=\"https://meet.google.com\" target=\"_blank\" rel=\"noopener\">meet.google.com</a> call — camera ON is mandatory for all meetings.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Contact <a href=\"mailto:tanvir@inventel.net\">tanvir@inventel.net</a> by private chat to set up banking — do it immediately, a bank letter may be required.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Review the Invoice Template and submission process (due the 25th; paid by the 10th of the next month).</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Create your <a href=\"https://inventelpm.automindlabinventel.com/\" target=\"_blank\" rel=\"noopener\">InvenTel PM Tool</a> account (the Performance Team helps with setup and assigns your department/role), complete the Loom walkthrough, and confirm the time tracker is installed and running.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Complete and return the Social Media Handles Sheet from your HR Performance Manager.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Review your training plan, task/deadline processes, communication norms, and the daily-scrum sheet with your Team Lead.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Complete Week-1 daily 1:1 check-ins (Week 1 daily → Weeks 2–4 weekly → Months 2–3 bi-weekly → post-probation monthly).</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Confirm all required platform access is granted (coordinated by the Performance Team and your manager).</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Test access to every platform you need before end of Week 1; platform access is handled by the Performance Team, so flag anything missing right away — missing access blocks your work.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Review the full Employee Onboarding Deck end to end and note your questions.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Take the <a href=\"#quiz-section\">Knowledge Check Quiz</a>, then follow the standard submission process — upload your named result to the Quiz Results folder and notify the Performance Team (onboarding).</span></button>","<em>Your check-offs are kept for this browser session so you can track progress as you go. They reset if you reload the page — this is a personal checklist, not a submitted form.</em>","Your onboarding journey &amp; reviews","Everyone's path looks a little different depending on role, team, and the brands you're assigned — but a few things are the same for everyone:","Performance review schedule","Your formal reviews are run with the <strong>Performance Team</strong> on this cadence:","32 · Knowledge Check Quiz","Prove It · 45 Questions · 70% to Pass","Read everything above first, then take this quiz to confirm you've internalized the policies and processes that matter most day to day. <strong style=\"color:#fff\">Pass: 32 of 45 correct (70%).</strong> One question at a time, immediate feedback, correct answers shown when you miss. Retake as many times as you need — no penalty.","When you pass, enter your name and title, then capture your result — a <strong style=\"color:#fff\">screenshot of your score card is the easiest option</strong>, or you can print or save the certificate. <strong style=\"color:#fff\">Every quiz — this one and every brand or platform quiz — follows the same submission process:</strong>","<strong style=\"color:#fff\">Capture your result</strong> — a screenshot of your score card is easiest, or save it as a PDF.","<strong style=\"color:#fff\">Name the file</strong> using the standard convention (below) so it's easy to find and track.","<strong style=\"color:#fff\">Upload it</strong> to the <a href=\"https://drive.google.com/drive/folders/19vsre-bLq4zDgwEAYGcSX22SpJ7hNvIM?usp=drive_link\" target=\"_blank\" rel=\"noopener\" style=\"color:var(--iv-amber)\">InvenTel University Quiz Results</a> folder.","<strong style=\"color:#fff\">Notify the person who assigned the quiz</strong> — your onboarding manager, the Performance Team, your Department Lead, Brand Lead, or Agency Lead, depending on which quiz it was.","Congratulations — You Passed!","Not Quite There Yet","You scored <strong id=\"fail-score\">—</strong>. You need 32/45 (70%) to pass.","Where to Focus Before You Retake","Most retakes pass after a focused 20–30 minute review of these sections:","<strong>05 — Agency Structure</strong> (the no-DM channel rule)","<strong>07 — Accounting &amp; Invoicing</strong> (due dates, file naming)","<strong>08 — Working Hours &amp; Time Zone</strong> (ET, lunch, the under-10-min chat rule)","<strong>09 — Leave &amp; Time Off</strong> (notice windows, 16-day allowance, no company holidays, probation)","<strong>12 — Ownership &amp; Accountability</strong> (understand the ask, follow up, keep it professional)","<strong>15 — Meetings &amp; Camera Policy</strong>","You've got this. The questions don't change between attempts — review the sections above and you'll pass."];</script><script>window.__IV_SAVED_CONTENT__=["Sign in to Edit Mode","Client-side gate only — prevents casual edits. Not a security boundary.","Welcome &amp; How to Use This Hub","About InvenTel &amp; TelNet","Executive Leadership","Organizational Structure","Agency Structure &amp; Task Flow","HR Department &amp; Key Contacts","Accounting &amp; Invoicing","Working Hours, Time Zone &amp; Lunch","Leave &amp; Time Off","Remote Leave Tracker","Core Principles &amp; Scope","Ownership, Accountability &amp; Working Together","Communication Standards","Google Chat Status &amp; Availability","Meetings &amp; Camera Policy","Scheduling &amp; Meeting Etiquette","Requesting Access to Platforms &amp; Accounts","The InvenTel PM Tool","Brand Knowledge &amp; University","Company-Wide Channels","Company-Wide Meetings","Social Media Engagement","Equipment &amp; Connectivity","Contractor Disciplinary Policy","Freelancing &amp; IP","Data Security &amp; Acceptable Use","Code of Conduct &amp; Grievances","Your Contract &amp; Handbook","Glossary","FAQ","New-Hire Setup Checklist","Knowledge Check Quiz","Company Policy &amp;<br><span class=\"accent\">Onboarding Hub</span>","Every standard, process, and expectation that keeps our remote, global team running — in one place, for new hires and current team members alike.","HQ in New Jersey, USA · The whole company runs on Eastern Time · Working hours 8:30 AM – 5:30 PM ET · This hub does not constitute a contractor agreement","8:30–5:30","Standard working hours, ET — wherever you are","ET","One clock — always communicate &amp; schedule in Eastern Time","10 min","Reply or react to chats within 10 minutes during office hours","16 days","Annual paid leave: 5 PTO + 5 sick + 6 floating holidays","Camera ON","Cameras on for every meeting — no exceptions","Per task","Time tracker runs on every task — mandatory","Table of Contents","Everything in This Hub","Tap any tile to jump. Use the search bar up top or the floating ☰ button (bottom-right) from anywhere on the page.","Welcome &amp; How to Use This Hub","About InvenTel &amp; TelNet","Executive Leadership","Organizational Structure","Agency Structure &amp; Task Flow","HR Department &amp; Key Contacts","Accounting &amp; Invoicing","Working Hours, Time Zone &amp; Lunch","Leave &amp; Time Off","Remote Leave Tracker","Core Principles &amp; Scope","Ownership, Accountability &amp; Working Together","Communication Standards","Google Chat Status &amp; Availability","Meetings &amp; Camera Policy","Scheduling &amp; Meeting Etiquette","Requesting Access to Platforms &amp; Accounts","The InvenTel PM Tool","Brand Knowledge &amp; University","Company-Wide Channels","Company-Wide Meetings","Social Media Engagement","Equipment &amp; Connectivity","Contractor Disciplinary Policy","Freelancing &amp; IP","Data Security &amp; Acceptable Use","Code of Conduct &amp; Grievances","Your Contract &amp; Handbook","Glossary","FAQ","New-Hire Setup Checklist","Knowledge Check Quiz","1 · Start Here","Welcome &amp; How to Use This Hub","This is the single home for how we work at InvenTel — a remote, global, fast-moving direct-response team with headquarters in New Jersey, USA and teammates across <strong>Egypt, India, Pakistan, the Philippines, Indonesia, Argentina, Colombia, and the United States</strong>. It pulls together the <strong>Communication, Collaboration &amp; Meeting Standards Policy</strong>, the <strong>Employee Onboarding Deck</strong>, and the <strong>New-Hire Onboarding Checklist</strong> into one searchable place. New hires read it top to bottom in week one; current team members use it as the reference whenever a question comes up.","Two things hold a team this spread-out together, and they run through everything below: <strong>everyone works and communicates on one clock — Eastern Time</strong> — and <strong>everyone stays fast and reachable on chat.</strong> Get those two right and the rest follows.","<strong>Your first-week path:</strong> (1) Read this hub top to bottom. (2) Work through the <a href=\"#checklist\">New-Hire Setup Checklist</a> — 2FA, time zone, banking, PM tool, camera test. (3) Take the <a href=\"#quiz-section\">Knowledge Check Quiz</a> at the bottom, then follow the standard submission process — upload your result to the Quiz Results folder and notify the person who assigned it (for onboarding, that's the Performance Team). (4) Ask your Team Lead anything the hub doesn't answer.","Three ways to navigate","Search bar (top)","Indexes every section, callout, glossary term, and FAQ. Press <strong>/</strong> to focus it from anywhere.","Floating contents","The round button at bottom-right opens a jump-to drawer on any screen size.","Collapsible sections","Click any section header to fold it away and scan the structure faster.","<em>This policy hub does not constitute a contractor agreement. Policy content amended August 4, 2025 (v5); onboarding content current as of June 2026. Employees are notified of any material changes.</em>","2 · The Company","About InvenTel &amp; TelNet","<strong>InvenTel</strong> was established in 1992 in the United States and has led the Direct Response Television (DRTV) sector from the start, building creative marketing strategies that forge strong bonds between brands and their audiences. Two names anchor most of the work: <strong>InvenTel</strong> (the brand portfolio and DRTV side) and <strong>TelNet</strong> (the data-fueled, expert-led marketing agency side). They operate together, and the policies in this hub apply across both. Beyond those two, you'll also see the company referred to by other names across email domains, documents, and tools — that's expected, and you don't need to track which is which. Names you may encounter include <strong>InvenTel.TV</strong>, <strong>InvenTel.net</strong>, <strong>InvenTel Innovations</strong>, and <strong>AsSeenOnTV LLC</strong>, and our agency work is sometimes presented under <strong>TelNet</strong>. You may also come across brands and ventures such as <strong>Home Inspo</strong> and <strong>Beyond Patents</strong>, with others in the portfolio and more in development.","<em>This list isn't exhaustive and will grow over time. If you're ever unsure which name applies to something, just ask your Direct Report or HR — it's a common question.</em>","InvenTel · Mission","Elevate holistic brand performance — increasing revenue, market share, and brand awareness across the InvenTel portfolio while building scalable marketing processes to grow the company through an agency model.","InvenTel · Vision","Develop solutions that solve real problems and bring value to people's lives — from the first spark of an idea to seeing products in stores worldwide.","Who you connect with &amp; how we work together","The Drive HR Resources Folder","All key forms and information live in the <a href=\"https://drive.google.com/drive/folders/15MAcljeNEcmY7O3jr6onZMk4egGme3lk?usp=sharing\" target=\"_blank\" rel=\"noopener\"><strong>Drive HR Resources Folder</strong></a>. It's split into two kinds of material:","📚 Reference &amp; information","<strong>Policy &amp; company reference</strong> — policy explanations, company history, and key logistics (kept current in this hub)","<strong>Team Structures</strong> — the visual guide to hierarchy and reporting lines for the company and your department","📝 Forms &amp; templates","<strong>Daily standup</strong> — submitted in the PM tool (Daily Scrum), no longer a Drive sheet","<strong>Leave requests</strong> — submitted in the PM tool (Leave Management), no longer a Drive form","<strong>Invoice Template</strong> — the required format for billing (see <a href=\"#accounting\">Accounting &amp; Invoicing</a>)","3 · Leadership","Executive Leadership","InvenTel is led by its founder and a small executive team. (These are the only individuals named by name in this hub — everywhere else, people are referred to by title so the document stays accurate as the team grows and changes.)","Yasir Abdul","Founder &amp; Chief Executive Officer","With over 32 years of experience in product innovation and direct-response television, Yasir is the driving force behind InvenTel, a powerhouse in the \"As Seen On TV\" space. As Founder and CEO, he's built a reputation for turning everyday problems into smart, accessible solutions through inventive product design and nationwide campaigns.","His journey began with a passion for solving real-world problems in practical ways — an interest in invention and entrepreneurship that grew into a full business model, bringing consumer-focused solutions straight to television and into millions of homes. His leadership is grounded in creative thinking, analytical strategy, and a relentless focus on customer satisfaction, with a strong emphasis on collaboration, agility, and trust.","\"When you create something that solves a real problem, people remember it. That's the power of what we do and why we keep pushing forward.\"","Major milestones under Yasir's leadership include retail partnerships with Walmart, Home Depot, Target, Walgreens, and Bed Bath &amp; Beyond, and a global supply chain supporting international growth. More at <a href=\"https://inventel.tv/about-us/yasir-abdul/\" target=\"_blank\" rel=\"noopener\">inventel.tv</a>.","Executive Vice Presidents","Drives InvenTel's growth through new business, strategic partnerships, and distribution expansion.","Part of the executive team steering company strategy and operations across the portfolio.","4 · Org Structure","Organizational Structure","How the organization fits together","Below the executive team, InvenTel runs as an agency: <strong>Department Leads</strong> own their teams' workload and quality, <strong>Brand Leads</strong> own brand strategy and knowledge, and <strong>Project Managers</strong> coordinate work across them. Day to day, your direction comes from your Department Lead, while work can also flow from a Brand Lead or PM (see <a href=\"#structure\">Agency Structure &amp; Task Flow</a> for exactly how that works and how to keep your Dept Lead in the loop).","Organization chart","The CEO leads the company, with two Executive Vice Presidents over the organization. Below them sit the <strong>Business Functions</strong>, and the <strong>Digital Agency Team</strong> runs as its own set of specialist teams.","The chart above shows the current high-level structure. Because reporting lines and team shapes change often, the <strong>detailed, always-current org charts</strong> live in a shared Google Drive rather than being pasted here. Find both the <strong>company-wide org chart</strong> and the <strong>detailed department org charts</strong> in the <a href=\"https://drive.google.com/drive/folders/1hzSKJ2sRkX-R_y_cHWAPwM0YxhqkWIjJ?usp=sharing\" target=\"_blank\" rel=\"noopener\">Department Structures folder</a>. Department Leads keep their charts updated there and share revisions with the Performance Team. Check that folder for the latest detail rather than relying on a snapshot.","<strong>Other companies we've acquired that still operate separately</strong> have their own org charts, kept in the same shared Drive. The chart above covers InvenTel's structure — if you work with or across one of those companies, look for its individual org chart in the folder.","5 · Who Assigns Your Work","Agency Structure &amp; Task Flow","Your primary direction comes from your <strong>Department Lead</strong>. But on an agency team, work can also legitimately come from a Brand Lead, another Department Lead, a Project Manager, or — on rare occasions — another team member. That's normal. The one rule that holds it all together is <strong>visibility</strong>.","Agency work assignment flow","Here's how work flows through the agency — who sets direction, who owns each department, and how shared creative resources support every team:","The golden rule: keep your Dept Lead informed","Whenever a task arrives from <em>anyone</em> outside your direct Department Lead, notify your Dept Lead immediately with three things:","Your Dept Lead owns your full workload, quality, deadlines, and capacity. They may re-prioritize, push back on a task, or redirect it entirely — but only if they can see it. This applies even to tasks you create for yourself: self-assigned work is encouraged, but always make it visible.","📥 No task assignments via private DM — no exceptions","All task requests must go through the proper project-management channel, <strong>never a private DM</strong>. This holds even if the sender is senior to you. If someone DMs you a task, <strong>move it to the correct channel and notify your Dept Lead.</strong> A task sent by DM is invisible to leadership — it may be the wrong task for you, conflict with a deadline, or belong to someone else. When in doubt, put it in the channel.","6 · Who to Ask","HR Department, Key Contacts &amp; Escalation","The HR routing below is for <strong>international team members only</strong> — it does not apply to US W2 or 1099 employees. HR is here to support you, so don't hesitate to reach out; that's what they're here for.","How HR is structured","The HR department is made up of <strong>three teams that work together</strong> to support you across your whole time at InvenTel — from hiring, through onboarding, to day-to-day performance and workforce operations. Reach the team whose area matches your need; if you're not sure, start with the Performance Team and they'll point you the right way.","New-hire onboarding &amp; support","Platform &amp; access management","1:1 coaching, SOPs &amp; workflows","Performance reviews","Team-member &amp; lead concerns — handled confidentially","Leave requests, balances &amp; tracking","PM tracker monitoring","Manual time entries","Workforce reporting &amp; support","Full-cycle talent acquisition","Candidate sourcing &amp; screening","Interview coordination","Offers, referrals &amp; contracts","Which HR team for what","What you need","Which team","New-hire onboarding &amp; support","<strong>Performance Team</strong>","Platform access","<strong>Performance Team</strong>","Performance reviews, coaching &amp; SOPs","<strong>Performance Team</strong>","An issue with a team member or your lead, a tricky situation, or you're unsure who to ask","<strong>Performance Team</strong> — handled with care and confidentiality","Leave requests, balances, or time-off questions","<strong>Workforce Analyst Team</strong>","PM tracker issues or manual time entries","<strong>Workforce Analyst Team</strong>","Hiring, an open position, or sharing a referral / CV","<strong>Talent Acquisition Team</strong>","For anything involving a team member or a lead — concerns, conflicts, or a situation you're unsure how to handle — reach out to the <strong>Performance Team</strong>. Everything is handled with care and confidentiality.","HR does <strong>not</strong> handle anything money-related — pay, invoices, banking, deductions, or payment timing. All of that goes to the <strong>Accounting team</strong>. If you contact HR about a money question or issue, they'll simply point you back here: use the shared accounting inbox <a href=\"mailto:payroll@inventel.net\">payroll@inventel.net</a>, or message any member of the Accounting team directly in Chat. You'll find the Accounting team members on the <strong>Accounting department org chart</strong> — see <a href=\"#orgstructure\">Organizational Structure</a> for the link to the org-chart folder.","Other key contacts &amp; escalation","Topic","Who / Where","Money — pay, invoices, banking, deductions","Accounting team — shared inbox <a href=\"mailto:payroll@inventel.net\">payroll@inventel.net</a>, or a team member's Chat (see the Accounting org chart). Banking setup &amp; pay questions: <a href=\"mailto:tanvir@inventel.net\">tanvir@inventel.net</a> by private Chat.","Day-to-day work, priorities &amp; capacity","Your Department Lead","Brand or product questions &amp; hub quizzes","The relevant Brand Lead","Profile image &amp; email signature","Performance Team (they request it from the Workforce Analyst Team)","Department org-chart updates","Performance Team","When unsure who owns something work-related, ask your Department Lead — they'll route it. For HR matters, the map above tells you exactly who to reach.","7 · Getting Paid","Accounting &amp; Invoicing","Email <a href=\"mailto:tanvir@inventel.net\">tanvir@inventel.net</a> on your <strong>first day</strong> to set up banking details — this cannot wait until month-end. A bank letter verifying account ownership may be required, and delaying setup can cause payment-processing delays.","Monthly invoice process","Due date","By the <strong>25th</strong> of each month","Send to","Email to the shared accounting inbox <a href=\"mailto:payroll@inventel.net\">payroll@inventel.net</a>. Invoices sent elsewhere may delay payment.","File name","<strong>FirstName LastName_Invoice_MMYYYY.pdf</strong> — e.g. John Doe_Invoice_APR2026.pdf","Template","Use the official <a href=\"https://docs.google.com/spreadsheets/d/1PnKmY6OmiM5vXsOVT39e_Xi1MVfhAqXL/edit?usp=sharing&amp;ouid=102281127488077371367&amp;rtpof=true&amp;sd=true\" target=\"_blank\" rel=\"noopener\">Invoice Template — Inventel.xlsx</a> only","Payment","Processed by the <strong>10th</strong> of the following month","Amount","Use the agreed monthly rate from your contract","Paid for","The <strong>previous</strong> month's work — e.g. work done Jan 1–31 is paid in early February","Missed days","List any missed workdays in the invoice <strong>Notes</strong> section — accounting cross-references attendance and will deduct them either way, so accuracy is your responsibility","🧾 Submit by the 25th, named correctly, or payment is delayed","Get your invoice to <a href=\"mailto:payroll@inventel.net\">payroll@inventel.net</a> <strong>by the 25th</strong>, using the official template and the exact file name <strong>FirstName LastName_Invoice_MMYYYY.pdf</strong>. Late, misnamed, or misdirected invoices can miss the cycle, and on-time correct ones are paid by the <strong>10th</strong> of the following month.","<em>Banking setup is a private chat with the Accountant on day one — never share invoice or bank details with anyone except the company accountant, and only by direct email or private chat.</em>","🔒 Your pay is confidential — an NDA obligation","Your salary and compensation details are <strong>strictly confidential</strong> under your NDA. Don't discuss or disclose them to colleagues under any circumstances. All pay questions go to the Accountant via private Google Chat only, and bank or invoice details are <strong>never shared with anyone other than the Accountant.</strong>","8 · Availability","Working Hours, Time Zone &amp; Lunch","InvenTel's headquarters is in New Jersey, USA, and <strong>the entire company runs on one clock: Eastern Time (ET)</strong>. Standard working hours are <strong>8:30 AM – 5:30 PM ET</strong>. This is true for everyone — our teams in <strong>Egypt, India, Pakistan, the Philippines, Indonesia, Argentina, and Colombia</strong>, and our teams inside the United States. Wherever you sit, your working day, your meetings, your deadlines, and your messages all follow Eastern Time.","Why everyone uses ET — including when you talk to each other","When you communicate, schedule a meeting, or set a deadline, <strong>always state the time in ET — never in your own local time.</strong> This is the single rule that keeps a team spread across five countries and multiple US time zones aligned. If everyone speaks in ET, there's exactly one conversion for each person to make, in their head, instantly — and no one is ever confused about whether \"3 PM\" means your afternoon or someone else's. The moment people start mixing local times into messages and invites, missed meetings and blown deadlines follow.","🕐 One clock, no exceptions — always communicate in ET","Set your Google Calendar <strong>primary</strong> time zone to Eastern Time, and send every meeting invite, message, and deadline in ET. Don't translate to your local time for a colleague, even to be helpful — it breaks the one-clock rule and creates exactly the confusion it's meant to prevent. Add your own local zone only as a <strong>secondary</strong> clock for your personal reference.","In Google Calendar: <strong>Settings → Time zone → primary = Eastern Time (US &amp; Canada)</strong>. Then <strong>Settings → World clock → add your local time zone</strong> as a secondary display so you can see both side by side. Your primary stays ET permanently — that's what every invite you receive and send is anchored to.","When the US clocks change, the whole company shifts with NJ","Twice a year the United States changes its clocks for Daylight Saving Time (roughly mid-March and early November). When New Jersey's clock moves, <strong>all company time moves with it</strong> — InvenTel always follows the current Eastern Time in NJ. Several of our overseas countries do <em>not</em> observe Daylight Saving Time, so on those two changeover dates the gap between your local time and ET shifts by an hour. That's expected, and it's on you to accommodate it.","Working hours &amp; lunch by location","Office hours (8:30 AM – 5:30 PM ET) and the one-hour lunch (12:30 – 1:30 PM ET) are the same for everyone — they're anchored to Eastern Time. But because the US changes its clocks twice a year and <strong>most of our other locations don't</strong>, the <em>local</em> hour those land at shifts by one hour between US summer and US winter. To save you the math, here's both, so you always know your real local hours. <strong>Only the US and Egypt observe Daylight Saving and move with the clock change</strong> — for them the local time is the same year-round; everyone else has two rows of local time depending on the US season.","Office hours — 8:30 AM – 5:30 PM ET","Location","US Summer (EDT) — local","US Winter (EST) — local","US (ET) <span style=\"color:var(--iv-text-muted);font-size:12px\">(EST / EDT)</span>","8:30 AM – 5:30 PM","8:30 AM – 5:30 PM","Egypt <span style=\"color:var(--iv-text-muted);font-size:12px\">(EET / EEST)</span>","3:30 PM – 12:30 AM","3:30 PM – 12:30 AM","Pakistan <span style=\"color:var(--iv-text-muted);font-size:12px\">(PKT)</span>","5:30 PM – 2:30 AM","6:30 PM – 3:30 AM","India <span style=\"color:var(--iv-text-muted);font-size:12px\">(IST)</span>","6:00 PM – 3:00 AM","7:00 PM – 4:00 AM","Philippines <span style=\"color:var(--iv-text-muted);font-size:12px\">(PHT)</span>","8:30 PM – 5:30 AM","9:30 PM – 6:30 AM","Indonesia (Jakarta) <span style=\"color:var(--iv-text-muted);font-size:12px\">(WIB)</span>","7:30 PM – 4:30 AM","8:30 PM – 5:30 AM","Argentina <span style=\"color:var(--iv-text-muted);font-size:12px\">(ART)</span>","9:30 AM – 6:30 PM","10:30 AM – 7:30 PM","Colombia <span style=\"color:var(--iv-text-muted);font-size:12px\">(COT)</span>","7:30 AM – 4:30 PM","8:30 AM – 5:30 PM","Company lunch — 12:30 – 1:30 PM ET","There's a single, company-wide lunch break. Everyone takes it at the same time so the whole company is offline and back together at once.","Location","US Summer (EDT) — local","US Winter (EST) — local","US (ET) <span style=\"color:var(--iv-text-muted);font-size:12px\">(EST / EDT)</span>","12:30 PM – 1:30 PM","12:30 PM – 1:30 PM","Egypt <span style=\"color:var(--iv-text-muted);font-size:12px\">(EET / EEST)</span>","7:30 PM – 8:30 PM","7:30 PM – 8:30 PM","Pakistan <span style=\"color:var(--iv-text-muted);font-size:12px\">(PKT)</span>","9:30 PM – 10:30 PM","10:30 PM – 11:30 PM","India <span style=\"color:var(--iv-text-muted);font-size:12px\">(IST)</span>","10:00 PM – 11:00 PM","11:00 PM – 12:00 AM","Philippines <span style=\"color:var(--iv-text-muted);font-size:12px\">(PHT)</span>","12:30 AM – 1:30 AM","1:30 AM – 2:30 AM","Indonesia (Jakarta) <span style=\"color:var(--iv-text-muted);font-size:12px\">(WIB)</span>","11:30 PM – 12:30 AM","12:30 AM – 1:30 AM","Argentina <span style=\"color:var(--iv-text-muted);font-size:12px\">(ART)</span>","1:30 PM – 2:30 PM","2:30 PM – 3:30 PM","Colombia <span style=\"color:var(--iv-text-muted);font-size:12px\">(COT)</span>","11:30 AM – 12:30 PM","12:30 PM – 1:30 PM","<strong>US summer</strong> runs roughly mid-March to early November (Eastern Daylight Time); <strong>US winter</strong> is the rest of the year (Eastern Standard Time). Because your Google Calendar primary zone is set to ET, every meeting stays correct automatically — these tables just tell you what your local clock will read. A lunch that runs over one hour must be logged the same day as an <a href=\"#leave\">Incomplete Workday</a>.","After-hours reality","InvenTel respects personal time. Occasionally, urgent project needs may require a prompt response in the evening or on a weekend. This is not the norm — but it is a reality of working on a global, fast-moving team.","9 · Time Off","Leave &amp; Time Off","Your total annual paid leave allowance is <strong>16 days</strong>, made up of three buckets. Everything beyond 16 days in a year is unpaid. Days can be combined and taken as half-days, and your <strong>balance is tracked in the PM tool</strong>.","5","PTO days","5","Sick days","6","Floating holidays","📋 All leave is requested in the PM tool — effective immediately","Leave is <strong>no longer a Google Form</strong>. Every leave request now goes through <strong>Leave Management inside the InvenTel PM tool</strong> (see <a href=\"#pmtool\">The InvenTel PM Tool</a>). Requests submitted any other way may not be considered. Your <strong>balances</strong> are updated in the tool too.","How to submit a leave request","<strong>Half day or early leave?</strong> You must state the exact time in ET — e.g. a half day as \"8:30 AM ET – 1:30 PM ET\", or an early leave as \"Leaving at 3:00 PM ET\". Requests missing the time details may be delayed or returned for clarification.","Advance notice required","Submit planned time off with the required advance notice. Approval or denial comes within 24 hours — do not assume approval until it's confirmed in writing.","Time requested","Advance notice required","1 day off","7 days","2 consecutive days","14 days","3 or more consecutive days","21 days","If you can't meet these windows, <strong>submit as early as you possibly can</strong> — the timelines above are the target, not a reason to delay. The more notice your team and lead have, the better they can plan around your absence: balancing workloads, reassigning tasks, and adjusting deadlines so nothing slips while you're out. Early notice almost always means an easier approval, too.","What happens after you submit","Submitting isn't approval. The PM tool notifies the <strong>HR leave team member (Workforce Analyst Team)</strong>, who reviews your request and either approves or denies it. A few things shape what happens next:","Once your request is approved, the system handles the rest: the <strong>calendar is updated</strong>, <strong>you're added to the leave event</strong> on the calendar, your <strong>balance updates</strong>, and your <strong>Direct Report is notified.</strong> (See <a href=\"#tracker\">Remote Leave Tracker</a> for how the event appears for you and the whole team.)","It's still good practice to <strong>block out your own calendar</strong> and <strong>update your Chat status</strong> so the team can see you're out at a glance. If your request is denied, HR will tell you why — fix it and resubmit, or appeal by contacting HR.","Unexpected absences","For an emergency or unexpected issue (illness, hardware failure, an internet outage), notify <strong>both HR and your Direct Report</strong> as soon as you can — don't wait until you're back online. Submit the request in the PM tool (choose <strong>Emergency / Day-Of call-out</strong> as the request type) as soon as you're able.","Incomplete Workday Form","⏰ Log any deviation from standard hours the SAME day","Any deviation from standard hours — a late arrival, an early departure, or a lunch break over one hour — <strong>must be documented the same day</strong> in the PM tool's Leave Management (log it as an incomplete workday / early leave with the exact ET time). <strong>Failure to report may result in disciplinary action.</strong>","There are NO company holidays — every day off is requested","🚫 No automatic holidays — not one, anywhere","InvenTel observes <strong>zero company holidays</strong>. No date is automatically off — not New Year's Eve or Day, and <strong>not US holidays either.</strong> A US public holiday is a normal working day here unless you have personally requested and been approved for it. The same is true for holidays in your own country: they are not days off by default. <strong>If you want a day off for any holiday — US, local, religious, or personal — you must request it in the PM tool and wait for written approval.</strong> Assuming a day is off and not showing up is treated as an unapproved absence.","Every holiday is a <strong>floating</strong> day: you choose which dates are meaningful to you, then request them. Submit those requests in the PM tool as soon as you know your dates (honoring the same notice windows above) rather than waiting until the date is close — the earlier you ask, the more likely it's approved without conflict.","<strong>Heads up on your first 90 days:</strong> any days taken off during the probation period are <strong>unpaid, regardless of reason</strong> — leave accrual doesn't apply yet. Plan your first three months carefully. For any leave-balance questions, contact the Workforce Analyst Team in HR.","10 · Visibility","Remote Leave Tracker Calendar","The <strong>Remote Leave Tracker</strong> is a company-wide calendar, open and visible to everyone at InvenTel. It shows every approved leave across the company, so anyone can see who's out at a glance. It works in two directions — leave you're granted shows up on it automatically, and you keep the whole calendar in view by subscribing to it once.","When your leave is approved, you're added to the event","Once a leave request is approved, you'll receive a Google Calendar <strong>invite to that leave \"event\"</strong> — it appears on your own calendar automatically, and on the shared Remote Leave Tracker that everyone can see. After approval, <strong>check that the event is showing correctly</strong> so your availability is accurate for the team.","Subscribe to the tracker so it's always visible","Beyond your own leave events, you need the full tracker permanently in your calendar view. Because it's a public InvenTel calendar, you just subscribe to it once:","If it doesn't appear when you search, ask HR or your lead to confirm you have access — it's open to all of InvenTel, so it should resolve for any company account.","Use it before you schedule","<strong>Check it before scheduling meetings or assigning work</strong> — see who's out before you make scheduling decisions.","You can also add individual team-member calendars most relevant to your work, so you see availability at a glance.","11 · Foundations","Core Principles &amp; Scope","The Communication, Collaboration &amp; Meeting Standards Policy exists to create a consistent, professional working environment, improve communication across departments, and keep collaboration effective on a distributed team. Five principles sit underneath everything in this hub:","Who this applies to","All employees, contractors, Team Directors, managers, and department heads. Failure to comply may result in coaching, corrective action, or performance discussions in accordance with company policies.","English is the official working language","English is the official working language for company-wide meetings, cross-functional meetings, training sessions, documentation, and any written communication involving multiple teams. Avoid conversations in another language when participants in the room may not understand the discussion.","12 · Own It · Communicate · Grow","Ownership, Accountability &amp; Working Together","This is one of the most important sections in the hub. We're a remote team across many time zones — what holds us together isn't sitting in the same room, it's <strong>ownership, accountability, and communication.</strong> When everyone takes real responsibility for their work and communicates openly, the whole team moves faster and trusts each other more. Please read this carefully and take it to heart.","🎯 Take real ownership — don't just pass it along","Owning a task means more than receiving it and forwarding it on. Too often, information or a task gets passed straight through without anyone truly engaging with it. <strong>Take the time to UNDERSTAND the ask before you complete it or hand it off.</strong> If something isn't clear, ask questions until it is. Owning the work means owning the understanding of it — not just moving it to the next person's plate.","What ownership looks like","✓ Do","<strong>Understand before you act.</strong> Read the full request, make sure you know what success looks like, and ask if anything is unclear.","<strong>Follow up.</strong> If you're waiting on something from someone — or you've handed something off — follow up and see it through. Don't assume it's handled.","<strong>Close the loop.</strong> Confirm when something's done, and flag blockers early rather than going quiet.","✗ Don't","Pass a task or message along without engaging with it first.","Assume someone else is following up — if it's in your hands, it's yours to track.","Go silent when you're stuck. Silence reads as no ownership.","Keep it professional — it's never personal","This is work, and feedback is part of work. When someone shares an update, a correction, or a place you could improve, <strong>please don't take offense.</strong> It's meant to help you and the team grow — not to criticize you as a person. A few things to keep in mind:","<strong>Tone doesn't travel well over text.</strong> A short message can read as blunt even when it wasn't meant that way. Assume good intent, and give people the benefit of the doubt.","<strong>Stay respectful — always.</strong> Even if a message upsets you, respond with respect. That's how we keep this a place where feedback flows freely and everyone can connect and grow.","<strong>When in doubt, ask.</strong> If a message lands wrong, a quick \"did you mean X?\" clears it up faster than assuming the worst.","Messages and feedback are meant to help us all connect and grow together. Treat every exchange as a teammate trying to make the work — and each other — better.","Communication is everything","Because we're remote, we can't rely on hallway chats or reading the room. <strong>Working well together starts with communication.</strong> Over-communicate rather than under-communicate: share updates, ask questions early, flag risks before they become problems, and keep people informed about anything that affects their work. Strong communication is what turns a group of people in different countries into one team. For the specifics — response times, channels, and status — see <a href=\"#communication\">Communication Standards</a> and <a href=\"#status\">Google Chat Status &amp; Availability</a>.","13 · Responsiveness","Communication Standards","Monitor Google Chat and company channels throughout working hours. On a remote team spread across five countries, your responsiveness on chat is the main signal that you're present and engaged — so we hold it to a firm standard.","⏱️ Reply or react to chats in UNDER 10 minutes — during all working hours","Every Google Chat message during the 8:30 AM – 5:30 PM ET window gets a reply <strong>or</strong> a reaction in <strong>less than 10 minutes</strong>. This is the standard, and it is not optional. <strong>If you take longer than 10 minutes, we will assume you are offline or deliberately ignoring the person who messaged you</strong> — there is no in-between. A one-second 👍 or ✓ is enough to show you've seen it; even a quick \"On it\" or \"Calling you back shortly\" counts. What's never acceptable is leaving a chat sitting with no response and no reaction.","If you genuinely can't engage for a stretch — you're in a meeting, in focused work, in training, or on a break — that's exactly what your Chat status is for. <strong>Set your status before you go heads-down</strong>, so the under-10-minute clock is understood and no one mistakes your silence for ignoring them. Urgent matters still get a response as soon as you reasonably can.","<em>One clarification:</em> the under-10-minute standard applies to live chat, where fast back-and-forth keeps the team moving. Email and longer-form requests don't need a reply inside ten minutes — but they still get acknowledged within a reasonable time the same working day. When in doubt during office hours, treat chat as the fast lane and use your status to signal whenever you genuinely can't respond.","Which channel for what","14 · Signal Your Availability","Google Chat Status &amp; Availability","This is a small habit that makes a big difference — and one a lot of people skip. A quick Google Chat status tells the whole team, at a glance, whether you're around, heads-down, or out, so no one's left guessing during the <a href=\"#communication\">under-10-minute</a> response window. It takes seconds to set, and <strong>an emoji makes it read instantly.</strong> Please make this part of your daily routine.","Updating your status is fast. Keep it current as your day changes — stepping away, going into focus time, or taking time off — and add an emoji so teammates can read it at a glance.","How to set your status","Status examples to borrow","Situation","Example status","Stepped away briefly","🍵 Be right back · back by 2:30 ET","Heads-down / focus work","🎧 Focused — will reply after 3 ET","In a meeting","📅 In a meeting","Lunch","🍽️ Lunch — back at 1:30 ET","Off today","🌴 Off today — back tomorrow","Multiple days off","✈️ OOO until Mon · backup: [your #2]","Out sick","🤒 Out sick today — back tomorrow","Personal emergency","🚨 Stepping away — personal emergency","Upcoming time off","🗓️ OOO July 17–19","Call out time off — before <em>and</em> during","<strong>Flag future time off early.</strong> If you know you're out later this week or next, put it in your status ahead of time so the team can plan around your absence.","<strong>Especially when you're out.</strong> On the day(s) you're off, your status should make it unmistakable that you're away and when you'll be back.","<strong>Name your backup.</strong> If you have a <strong>number two</strong> covering for you, add them to your status note so people know who to go to while you're out.","15 · On Camera","Meetings &amp; Camera Policy","Attendance at all team meetings, department syncs, and 1-on-1s is mandatory. If an unavoidable conflict arises, notify your Team Lead <strong>in advance</strong>, not after. Consistent unexplained absences are reported to HR.","📹 Camera ON — every meeting, no exceptions","Cameras stay on for internal team meetings, external client calls, and 1-on-1s. The rule is simple: <strong>if your camera cannot be on, do not join the call.</strong> If you genuinely can't (bandwidth, traveling, not camera-ready), update your Google Chat status with a brief note <strong>before</strong> the meeting starts — not after.","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","<strong data-start=\"494\" data-end=\"526\">For your meeting background:</strong>&nbsp;Use an <strong data-start=\"132\" data-end=\"171\">InvenTel company virtual background</strong> when joining meetings. <span data-start=\"195\" data-end=\"252\">You can find the approved backgrounds here:&nbsp;</span><a href=\"https://drive.google.com/drive/folders/1K39EBPpd8u_hxemtkD1GfFdfyrHu-PWP?usp=sharing\">Inventel - Meetings Background Folder</a>​","<strong>If your connection struggles with video on:</strong> always <strong>start with your camera on</strong>. If keeping it on is clearly hurting your internet connection during the call, it's fine to turn it off — just <strong>let the group know right away</strong> that you're having connection issues and that's why your camera is off. The goal is a stable, present conversation, so lead with video and only drop it when the connection genuinely requires it.","Professionalism standards","✓ Expected","Join on time and prepared — review materials beforehand","Collared or business-casual attire for client meetings","A professional background; blur non-wall backgrounds, or use the&nbsp;​<a href=\"https://drive.google.com/drive/folders/1K39EBPpd8u_hxemtkD1GfFdfyrHu-PWP?usp=sharing\" data-is-inline-chip-link=\"true\" data-display-name=\"Inventel - Meetings Background\" data-inline-chip-type=\"1\" data-dlb=\"true\" data-fdlb=\"true\" data-mimetype=\"application/vnd.google-apps.folder\">Inventel - Meetings Background</a>​","Stay muted when not speaking; participate actively and respect speaking turns","✗ Avoid","Eating meals, smoking, or visible distractions on camera","Multitasking or passive, partial presence","Last-minute cancellations or reschedules except in emergencies (give 24 hrs notice when possible)","Joining late without notifying the organizer as soon as possible","Google Calendar expectations","Keep your calendar accurate. Promptly accept, decline, or respond to invitations and keep your availability current. When you're out or away, set an <strong>Out of Office</strong> event in Google Calendar <em>and</em> update your Chat status to OOO — the OOO event syncs your status across Gmail and Chat automatically.","Directors model these standards, encourage participation, communicate expectations clearly, and address recurring issues within their teams. Directors also own keeping their department org charts accurate (update when people join/leave, reporting changes, or responsibilities shift) and share revised charts with the Performance Team so master records stay current. The <a href=\"https://drive.google.com/drive/folders/1hzSKJ2sRkX-R_y_cHWAPwM0YxhqkWIjJ?usp=sharing\" target=\"_blank\" rel=\"noopener\">Department Structures folder</a> holds the latest templates.","Gemini &amp; AI notetakers","The company already has <strong>Gemini AI notes turned on</strong> for meetings. Gemini runs <strong>quietly in the background</strong> — it captures notes without joining as a participant or taking up a tile on screen. Treat anything captured as internal and handle it with the same confidentiality as any other company material.","🚫 No external AI notetakers in company meetings","Don't bring your own third-party AI notetaker or meeting bot into InvenTel meetings. Those agents join as extra participants and <strong>fill the screen with their own boxes</strong>, which clutters the call for everyone. Gemini already covers notes silently in the background — so if you use any of these tools personally, <strong>don't add them to company meetings.</strong>","16 · Respect People's Time","Scheduling &amp; Meeting Etiquette","On a remote team spread across time zones, putting an event on someone's calendar reaches into their day. A little courtesy before and after scheduling prevents surprises, double-bookings, and disrupted days. The principle underneath all of it: <strong>respect other people's time, and communicate before and after you touch their calendar.</strong> (As always, schedule everything in <a href=\"#hours\">Eastern Time</a>.)","Before you schedule — connect first","🗓️ Before you put a meeting on someone's calendar, check with them first","Before scheduling on someone's calendar, <strong>reach out to them in Chat first — every time</strong>, unless it's a large group (see below). One quick message that lets them know a meeting is going to happen, tells them you'll add the event based on their <strong>open availability</strong>, and asks whether there's a <strong>date or time that works best</strong> for them. This turns a surprise invite into an expected one — and usually surfaces the best slot faster than guessing.","After you schedule — follow up","Once the event is on the calendar, <strong>follow up with that person to confirm it's been scheduled.</strong> Don't assume they saw the invite — closing the loop is part of the task (the same <a href=\"#communication\">\"follow through\"</a> standard as everywhere else).","Sometimes you can't reach everyone first — a <strong>last-minute meeting</strong>, or simply <strong>too many attendees</strong> to message individually. In that case, look at everyone's calendars and find a time that's genuinely open for the group. <strong>Prioritize the executive team's availability and time requests</strong> when there's a conflict to resolve.","Watch for conflicts &amp; double-bookings","When you schedule in Google Calendar, it will <strong>flag if anyone on the invite list already has a conflict</strong> at that time. Pay attention to those warnings so you don't double-book people.","Rescheduling &amp; cancelling","🔔 If you must move a meeting, give notice and tell people directly","","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","\n\n","","","If you need to reschedule or cancel a meeting, do it with <strong data-start=\"240\" data-end=\"270\">as much notice as possible</strong>, and <strong data-start=\"276\" data-end=\"351\">always&nbsp;</strong>","A meeting should not be considered cancelled simply because the organizer, Team Lead, or Director is unavailable. If the meeting is still showing on the calendar, <strong data-start=\"840\" data-end=\"872\">assume it is still happening</strong> unless you receive an official cancellation.","","If you're invited — respond to the invite","When you receive a meeting invite, <strong>accept, decline, or mark \"maybe\" (?)</strong> so the organizer knows who's actually attending. Leaving an invite unanswered makes people wait on attendees who were never coming. If the usual Team Lead, Director, or organizer is unavailable, do not assume the meeting is cancelled. <b>If the meeting remains on your calendar, assume it is still happening</b> unless an official cancellation has been communicated. (If you accept and later can't make it, update your response and give the organizer a heads-up — see camera and attendance rules in <a href=\"#meetings\">Meetings &amp; Camera Policy</a>.)","If you host a meeting — Keep the guest list of any meeting public","","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","Keep the guest list of every meeting public so attendees can clearly see who has been invited and who is expected to participate.","<span style=\"font-size: 1.15rem;\">If you host a meeting — share the meeting notes with everyone</span>","","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","<strong data-start=\"1347\" data-end=\"1386\"></strong><span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","","\n\n","","","Meeting organizers should share the meeting notes with everyone on the guest list, not only the organizer and co-organizer. This ensures everyone who was invited has visibility on the discussion, decisions, and next steps.","<span style=\"font-size: 1.15rem;\">If you host a recurring meeting — keep the invite list clean</span>","","✓ Keep the list accurate","People who <strong>should be there</strong> are on it.","People who <strong>need the notes but don't normally join</strong> — like the executive team — <strong>stay on</strong> the invite so they keep visibility.","✗ Don't let it go stale","People who <strong>no longer need to attend</strong> get removed, so the room reflects who's actually involved.","Don't leave former team members or rolled-off stakeholders on a standing invite.","17 · Getting Set Up","Requesting Access to Platforms &amp; Accounts","InvenTel uses a mix of shared and individual credentials, with different permission levels, access tiers, and brand assignments depending on your role. Getting the right access in place is a <strong>shared effort</strong>: the <strong>Performance Team works with your Team Lead</strong> during onboarding to line up the accesses your role needs — and you play an active part by confirming what's landed and flagging what hasn't.","How it works — and your part in it","If you're <strong>missing access</strong>, <strong>lose access</strong>, or notice your <strong>permissions changed</strong>, reach out to the <strong>Performance Team</strong> and follow up as needed (see <a href=\"#contacts\">HR Department &amp; Key Contacts</a>). Without that heads-up, the team has no way to know what to fix — so following up isn't a bother, it's how the system works. Treat it like any other <a href=\"#ownership\">outstanding task you own</a>: check in until it's resolved. It's genuinely appreciated.","🔑 Already on the team &amp; need more access?","Access needs change as your work does. If you need a <strong>new platform or tool</strong>, <strong>additional brand access</strong>, or <strong>different permissions</strong>, connect with the <strong>Performance Team</strong> to request it (see <a href=\"#contacts\">HR Department &amp; Key Contacts</a>) — the same way onboarding access is handled. Don't wait or work around a gap; request it and follow up until it's in place.","Keeping access secure","<strong>Never share account information without company approval.</strong> Don't hand your logins to another team member, and don't share access to any account without explicit company approval. Access is assigned per person on purpose (see <a href=\"#security\">Data Security &amp; Acceptable Use</a>). If someone needs access, route the request through the <strong>Performance Team</strong> — never solve it by passing credentials around.","<strong>Never request or share access through personal email.</strong> All access is tied to your <strong>company account and approved company channels only.</strong> Never request or share logins, invites, or credentials using a personal email account — personal inboxes are off-limits for anything access-related, with no exceptions.","18 · Daily Operations","The InvenTel PM Tool","InvenTel built its <strong>own</strong> project-management platform — think of it as our in-house version of ClickUp. It's the team's single source of truth: tasks and projects, your daily scrum, the time tracker, leave requests and balances, channels, and dashboards all live in one place. Keeping it accurate is a core part of your job; an empty or stale view creates blind spots and reflects poorly on your work.","","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","","","Platform walkthroughs","Watch these short walkthroughs to learn your way around the PM tool:","The <a href=\"https://drive.google.com/drive/folders/1ST2jUR54nmCynkkL_eNRp6SyP4B2JUVU?usp=drive_link\" target=\"_blank\" rel=\"noopener\"><strong>InvenTel PM Dashboard folder</strong></a> holds the full Walkthrough Library and the Errors Sheet in one place. Found a bug or have feedback on the tool? Log it in the <a href=\"https://docs.google.com/spreadsheets/d/136ZCsJ3UROX090frY3JDfaGEs_QyDSGlFaef_AxqSUY/edit?usp=drive_link\" target=\"_blank\" rel=\"noopener\"><strong>InvenTel Dashboard — Bugs &amp; Errors Sheet</strong></a>.","What you'll use it for","Daily Scrum","Your standup every workday — active tasks, status (In-Progress / Completed / Blocked), and any blockers.","","Time Tracker","Per-task timer (Est vs Logged). Start it on the task you're working, stop when done. check the:&nbsp;<a href=\"https://drive.google.com/file/d/1TKmNfBr12UqMDapY5vU8CVNQKh5drlWr/view?usp=sharing\">InvenTel Time Tracker Video Guide</a>","Leave Management","Submit leave requests and check your balances — all in the tool (see <a href=\"#leave\">Leave &amp; Time Off</a>). New to it? Follow the <a href=\"https://drive.google.com/file/d/1L0lCjEv8kHsCrDuFAVt6LZRhg0pKoVtz/view?usp=drive_link\" target=\"_blank\" rel=\"noopener\">Leave Request Guide</a>.","","Tasks &amp; Projects","Your assigned work, projects, channels, and dashboards — the hub for everything you do.","","Daily Scrum — every workday","Update your standup every single workday in the <strong>Daily Scrum</strong> area: add all active tasks with current status and any blockers or risks. No exceptions. Department Leads and PMs rely on these updates to manage workload, timelines, and priorities.","Time Tracker — mandatory, per task","⏱️ Turn the tracker ON for every task — no exceptions","","<strong data-start=\"2429\" data-end=\"2483\"></strong><span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","Using the time tracker is <strong>mandatory</strong>. The <strong data-start=\"2489\" data-end=\"2539\">Time Tracker is a separate desktop application</strong> and is not part of the PM Tool web app.","Download the Time Tracker here:&nbsp;<a target=\"_blank\" class=\"decorated-link\" rel=\"noopener\" href=\"https://inventelpm.automindlabinventel.com/time-tracking?utm_source=chatgpt.com\">Download the Time Tracker</a>","","<span aria-hidden=\"true\" class=\"PDq2pG_selectionAnchor\"></span>","","","Notifications &amp; the latest version","A <strong>notifications</strong> feature rolled out with the latest version of the PM tool. If your notifications aren't working, <strong>uninstall the old app and download the latest version.</strong> Make sure it's installed and that you're actively using it while working. If you hit <strong>any</strong> issue with installation, login, setup, or usage, contact the <strong>Workforce Analyst Team</strong> right away so they can help you get it resolved.","Work faster — the AI Prompt Library","Use the <a href=\"https://inventelpm.automindlabinventel.com/prompt-library\" target=\"_blank\" rel=\"noopener\"><strong>InvenTel AI Prompt Library</strong></a> — a growing, shared collection of vetted prompts for the tools and workflows you use day to day. Check it before writing prompts from scratch, and reuse what already works.","19 · Know the Portfolio","Brand Knowledge &amp; InvenTel University","InvenTel University is your primary self-serve learning home — the place you go to get up to speed and to look things up while you work. It's organized into <strong>three sections</strong>:","Section","What it covers","What's inside","<strong>Brand Knowledge Hubs</strong><br><span style=\"font-size:12px;color:var(--iv-text-muted)\">What we sell</span>","A complete knowledge hub for every brand in the portfolio — products, positioning, brand voice, audience, offers &amp; policies.","The shared source of truth before you start work on a brand, ending in a mandatory quiz.","<strong>Resource Library</strong><br><span style=\"font-size:12px;color:var(--iv-text-muted)\">Tools we use</span>","A complete training guide for every platform and tool the company puts in your hands.","Step-by-step tutorials at beginner, intermediate &amp; advanced levels — self-contained, each ending in a mandatory quiz.","<strong>Company Policy Hub</strong><br><span style=\"font-size:12px;color:var(--iv-text-muted)\">How we work</span>","This policy hub — the policies, processes, and expectations that apply across every team.","The single reference for how InvenTel operates, kept current as policies change.","Bookmark it and make it part of your regular workflow — it's built as an everyday reference, not just onboarding. When a question comes up while you work, go back and look it up.","<strong>When a brand or platform is assigned to you:</strong> work through its hub or guide <strong>completely, top to bottom</strong> — every section, no skimming or skipping ahead — <em>before</em> starting any work on it. Then take the quiz at the bottom (it's based on the full hub) and follow the <a href=\"#quiz-section\">standard quiz submission process</a>: save and name your result, upload it to the Quiz Results folder, and notify the person who assigned it (your <strong>Brand Lead</strong> or <strong>Department Lead</strong>). This restarts every time a new brand or platform enters your scope. After that, the hub or guide is your first point of reference for any question on it — check it before reaching out.","<em>All quizzes follow the same <a href=\"#quiz-section\">submission process</a> — upload to the Quiz Results folder, then notify whoever assigned it. InvenTel University's intermediate and advanced courses are optional, strongly encouraged, and done in your own time.</em>","Product knowledge is on everyone","⚠️ \"Not knowing a brand\" isn't acceptable","Product knowledge is expected from <strong>every</strong> team member — not just Sales or Support. Proactively learn the features, benefits, and messaging of every brand you support, and stay current as the portfolio changes — new brands get added and existing ones shift, so keep up via the Education Channel and company announcements. If you need help, ask the Brand Lead for a deep-dive. The Brand Knowledge Hubs in InvenTel University are your starting point.","20 · Stay Informed","Company-Wide Channels","InvenTel runs on a set of Google Chat channels. Each has a job — using them correctly keeps the whole team aligned.","Channel","What it's for","Your obligation","<strong>InvenTel Team</strong>","Official company-wide announcements, policy changes, critical info","Enable <strong>All</strong> notifications and read every post. Read-only — never post chatter, questions, or 1-on-1s here","<strong>Social Media Callouts</strong>","Brand posts that need a reach boost","Like and engage <strong>immediately</strong> when a callout appears — mandatory, not optional (see <a href=\"#social\">Social Media Engagement</a>)","<b>Creative Inspirations</b>","Creative ideas, social media trends, and inspiring content that teams can use to test, adapt, and implement across brands","Check <b>regularly</b> and &nbsp;share creative ideas, social media trends&nbsp;, and inspiring content. Teams can use relevant ideas as inspiration for Their team's work","<strong>Company Announcements</strong>","Leave policies, holidays, operational changes","Check <strong>daily</strong>","<strong style=\"color: rgb(26, 20, 22);\">Financial Updates</strong>","Salaries, invoicing timelines, payment info","Check <strong>regularly</strong>","<strong style=\"color: rgb(26, 20, 22);\">Education Channel</strong>","Webinars, tutorials, tool guides, role learning","Check <strong style=\"color: rgb(26, 20, 22);\">weekly</strong> as part of your development","To enable notifications on a channel: click the channel name in Google Chat → Notifications → All. Missing these channels can mean missed deadlines or policy violations. Keep all discussions and questions in DMs or your department's Project Space — not the InvenTel Team hub.","21 · All-Hands","Company-Wide Meetings","InvenTel schedules <strong>company-wide meetings</strong> — all-hands sessions for executive updates, department highlights, and company alignment. These come up regularly, and the <strong>notice varies</strong>: some are announced well in advance, and others land on your calendar the <strong>day before</strong>. Keep an eye on your Google Calendar and the company announcements channel so one doesn't slip past you.","If you're double-booked","Company-wide meetings are a priority. If one lands on top of another meeting you can move, <strong>reschedule the other meeting</strong> so you can attend the all-hands. If the conflict genuinely can't be moved, the session is <strong>recorded and shared</strong> in the <a href=\"https://drive.google.com/drive/folders/1p1WIKvKOInTIg61h5t-sY-kZ_Y4YXNdw?usp=drive_link\" target=\"_blank\" rel=\"noopener\"><strong>Company-Wide Meeting Records</strong></a> folder — watch the recording as soon as you can to stay caught up.","🗓️ Attendance is tracked — don't make a habit of missing them","Treat company-wide meetings as <strong>required — cameras on, full attendance</strong>, the same as any other mandatory meeting. <strong>Attendance is tracked.</strong> Missing one for a genuine, unavoidable conflict (and catching up on the recording) is fine — but a <strong>pattern of missed company-wide meetings will be flagged by the Performance Team.</strong>","22 · Show Up for the Brands","Social Media Engagement","We're a marketing agency — our own social presence matters, and every team member is part of it. <strong>Interacting with InvenTel's social pages and brand accounts is a required part of the job</strong>, not an optional extra.","📣 Full team participation — straight from the CEO","The CEO has asked for <strong>full team participation</strong> across our social presence: <strong>follow the pages, and like, comment, and react</strong> on posts. When our own people show up, posts perform better and the brands gain real momentum. Treat this as a standing expectation for everyone.","How it works","Shortform video — watch it all the way through","One important thing to keep in mind with <strong>shortform content</strong>: when you interact with the videos, it's crucial to <strong>watch them all the way through</strong>. Retention is what the algorithm rewards — just opening a video to drop a quick comment and leaving actually <strong>hurts the reach</strong>, because the algorithm reads it as people clicking away instantly.","So if you're going to comment to help drive engagement, <strong>watch the full video first</strong>, then leave comments people will actually reply to or like. Funny jokes, relatable memes, or even slightly controversial or negative takes work well — they get the comment section moving, which is exactly the kind of activity that boosts a post.","✓ What counts as participation","Following the company and brand pages.","Likes, reactions, and genuine comments on posts.","Watching shortform videos all the way through before commenting.","Jumping on Social Media Callouts as soon as they're posted.","✗ What to avoid","Opening a video, dropping a comment, and clicking away — it hurts reach.","Ignoring callouts or engaging days later.","Skipping the handles form, so your engagement can't be counted.","Posting anything that conflicts with the <a href=\"#conduct\">Code of Conduct</a> or shares confidential info (see <a href=\"#security\">Data Security</a>).","23 · Your Setup","Equipment &amp; Connectivity","InvenTel does not provide equipment. You are personally responsible for a working setup and a stable connection throughout working hours.","Connectivity &amp; performance policy","Timeline","What happens","Day 1","Grace period — resolve the issue","Day 2+","Unpaid leave until resolved","Day 3+ / recurring","Review — potential suspension or termination","This policy applies equally to everyone, regardless of role or tenure.","24 · Important · Corrective Action","Contractor Disciplinary Policy","⚠️ Important — this policy applies to everyone","The <strong>Contractor Disciplinary Policy</strong> sets out how performance and conduct issues are addressed, the steps of the corrective-action process, and the standards every contractor is held to — regardless of role or tenure. It works alongside the standards in <a href=\"#conduct\">Code of Conduct &amp; Grievances</a> and the terms in <a href=\"#agreements\">Your Contract &amp; Handbook</a>. Where this policy and your signed agreements ever differ, <strong>your signed agreements control.</strong>","Progressive warning process","Most issues are handled through a progressive series of warnings, giving you a clear opportunity to correct course at each stage:","Stage","Action","<strong>1st Warning</strong>","Verbal / documented warning","<strong>2nd Warning</strong>","Written warning","<strong>3rd Warning</strong>","Final written warning","<strong>Further violation</strong>","May result in termination","Warning-level violations","These are the kinds of issues that typically move through the progressive warning process:","Category","Examples","<strong>Communication</strong>","Unprofessional or disrespectful communication; ignoring reasonable instructions from your manager; repeated failure to attend required meetings without prior notice.","<strong>Attendance &amp; reliability</strong>","Repeated lateness; repeated unapproved absences.","<strong>PM Tool &amp; company processes</strong>","Repeated failure to update tasks in the <a href=\"#pmtool\">PM Tool</a>; failure to follow the required ticket structure or workflows; failure to submit leave requests through the PM Tool; failure to accurately use the Time Tracker after coaching.","<strong>Performance</strong>","Repeated missed deadlines due to negligence; failure to complete assigned work without communication; repeated disregard for company processes after coaching.","Immediate termination","🚫 Serious violations can skip the warning process entirely","The following may result in <strong>immediate termination</strong>, depending on the severity of the incident and the outcome of any investigation.","Category","Examples","<strong>Confidentiality &amp; security</strong>","Sharing confidential company or client information; unauthorized access to company systems, accounts, or data; misuse of company credentials or sensitive information. (See <a href=\"#security\">Data Security</a>.)","<strong>Workplace conduct</strong>","Harassment, discrimination, bullying, or threatening behavior; serious violations of the company's <a href=\"#conduct\">Code of Conduct</a>.","<strong>Company property</strong>","Intentional destruction or misuse of company systems, equipment, or property.","<strong>Conflict of interest &amp; outside employment</strong>","Working for any other company or client (full-time, part-time, freelance, consulting, or contract) in violation of the Employment Agreement; operating or participating in an outside business that violates the agreement; serious undisclosed conflicts of interest. (See <a href=\"#agreements\">Full-time commitment</a>.)","<strong>Legal &amp; compliance</strong>","Any illegal activity affecting the company, its contractors, or its clients; serious violations of applicable laws or regulatory requirements.","<em>Immediate-termination decisions are subject to management review and, where applicable, an internal investigation.</em>","Management discretion","Depending on the nature and severity of the violation, management may:","Provide <strong>coaching</strong> instead of issuing a warning;","<strong>Skip warning levels</strong> for serious misconduct; or","Proceed <strong>directly to termination</strong> when warranted.","All disciplinary actions are documented by the contractor's manager and HR.","See the complete <a href=\"https://docs.google.com/document/d/1e2M6MdYcMRYXyx1ygVyVZw8rXWF5n-edKaRCICvuGKc/edit?usp=sharing\" target=\"_blank\" rel=\"noopener\"><strong>Contractor Disciplinary Policy</strong></a> for the authoritative version. Questions about how it applies to you? Reach out to the <strong>Performance Team</strong> (see <a href=\"#contacts\">HR Department &amp; Key Contacts</a>).","25 · Ownership","Freelancing &amp; Intellectual Property","Three rules from your employment agreement, in plain terms:","No outside work","No freelance, part-time, consulting, advisory, or any secondary income-generating work while employed here. Full professional commitment is required across all roles and engagement types.","Brand assets stay internal","InvenTel brand names, logos, product imagery, creative, copy, and ad assets may not appear in personal portfolios or be shared externally without explicit written permission — even after you leave.","Work product belongs to InvenTel","All creative, strategic, technical, and operational work you produce — creatives, copy, strategy, designs, code, data, processes — is assigned to the company for the duration of your engagement.","26 · Protect the Company","Data Security &amp; Acceptable Use","Working remotely means you're responsible for the security of the company accounts, tools, and data you touch every day. These are the baseline expectations for everyone — they protect you, your teammates, the brands, and our customers.","Accounts &amp; access","Handling company &amp; customer data","<strong>Keep company data in company tools.</strong> Don't copy brand assets, customer data, strategy, or creative to personal drives, personal email, or unapproved apps.","<strong>Share on a need-to-know basis.</strong> Only give access to people who need it for the work, and use proper sharing (named people, not \"anyone with the link\") for anything sensitive.","<strong>Treat everything internal as confidential</strong> — including meeting notes and anything captured by AI notetakers — and remember brand assets and your work product belong to InvenTel (see <a href=\"#ip\">Freelancing &amp; IP</a>).","<strong>Customer and personal data</strong> gets extra care: collect only what's needed, never misuse it, and never move it outside approved systems.","Phishing &amp; suspicious activity","Be skeptical of unexpected links, login pages, payment-change requests, and urgent \"do this now\" messages — even if they appear to come from someone senior. Verify through a known channel before acting. <strong>Money and banking requests are a common scam target</strong>: confirm anything payment-related directly with the Accounting team (see <a href=\"#accounting\">Accounting &amp; Invoicing</a>).","🔐 If something looks compromised, report it immediately","If you lose a device, click a suspicious link, suspect your account is compromised, or notice anything that looks like a breach, <strong>report it to the Performance Team right away</strong> — speed limits the damage, and you will never be in trouble for reporting a genuine mistake. Stalling or hiding it is the only wrong move.","Acceptable use","Company accounts and tools are for company work. Keep your usage lawful and professional, don't install pirated or untrusted software on a machine you use for work, and don't use company systems to harass, discriminate, or share inappropriate content (see <a href=\"#conduct\">Code of Conduct</a>). When in doubt about whether something is okay to do, install, or share, ask the Performance Team first.","27 · How We Treat Each Other","Code of Conduct &amp; Grievances","InvenTel is a global, remote team, and how we treat one another is what makes that work. The standard is simple: <strong>be professional, respectful, and inclusive in every interaction</strong> — in meetings, in Chat, in comments, and in DMs.","What's expected","✓ Expected","Treat everyone with respect across cultures, time zones, and backgrounds.","Communicate professionally and assume good intent.","Give and receive feedback constructively.","Support teammates and help create a positive, inclusive environment.","✗ Not tolerated","Harassment, bullying, or intimidation of any kind.","Discrimination based on race, gender, religion, nationality, age, disability, or any protected characteristic.","Sexual harassment, offensive or inappropriate content, or hostile behavior.","Retaliation against anyone who raises a concern in good faith.","Raising a concern or grievance","If something doesn't feel right — a conflict with a teammate or lead, behavior that crosses a line, or a situation you're unsure how to handle — you have a clear, confidential path:","You can raise a concern without fear. Good-faith reports are kept confidential and <strong>retaliation of any kind is not tolerated.</strong> If you're ever unsure whether something is worth raising — raise it. The Performance Team would rather hear it early.","Conduct violations are taken seriously and may lead to coaching, corrective action, or — for serious cases — suspension or termination, consistent with the standards in <a href=\"#principles\">Core Principles &amp; Scope</a>.","28 · The Governing Documents","Your Contract &amp; Handbook","This hub is your <strong>operational guide</strong> — how we work day to day. The formal terms of your engagement live in two documents you signed when you joined: your <strong>Services Agreement (contract)</strong> and the <strong>Contractor Handbook</strong>. Those are the governing documents. Where this hub and your signed agreements ever differ, <strong>your signed agreements control.</strong> This hub does not constitute a contractor agreement.","A few of those policies are summarized elsewhere in this hub for day-to-day use, but the full and binding versions are in your contract and handbook. The items below are <strong>covered there in detail</strong> — review your copies if you need specifics:","Two points from your agreement worth calling out here, because they affect everyday planning:","Busy Season — limited time off","Because of the nature of the As-Seen-On-TV business, InvenTel has a recurring high-volume <strong>Busy Season</strong> when time off is limited to keep things running. Currently that window runs from the <strong>Friday after Thanksgiving through December 20</strong>, and applies to <strong>everyone</strong>:","Plan year-end time off early — the Busy Season fills up and requests are limited.","Full-time commitment","The work at InvenTel is complex and treated as a <strong>full-time commitment.</strong> Per your agreement, while engaged with InvenTel you're expected <strong>not to take on other paid work</strong> — as an employee, contractor, or otherwise — that would compete for that commitment. If your situation changes, talk to your Direct Report or HR rather than assuming.","Don't have your signed contract or the Contractor Handbook handy? Ask the <strong>Performance Team</strong> for a copy. For any question about what a specific clause means, HR can point you to the right section — when the hub and your agreement differ, the signed agreement is the final word.","29 · Reference","Glossary","InvenTel / TelNet","The two sides of the company: InvenTel (the DRTV brand portfolio, est. 1992) and TelNet (the data-driven marketing agency). They operate together, and these policies apply across both.","Company Lunch Break","A single company-wide one-hour break, 12:30–1:30 PM ET, that everyone takes at the same time. Its local hour differs by location and shifts by an hour between US summer and winter for the locations that don't observe Daylight Saving — see the by-location tables in Working Hours.","Leave Management","The area inside the InvenTel PM tool where all leave — planned and emergency/day-of — is requested, and where your leave balances are tracked. It replaced the old Google Leave Form.","Drive HR Resources Folder","The shared Drive folder holding all key forms and reference material — the Onboarding Deck &amp; FAQs, Team Structures, and Invoice Template. (Leave is now requested in the PM tool, not here.)","The 10-Minute Rule","The chat responsiveness standard: react to or reply to every Google Chat message in <strong>under 10 minutes</strong> during working hours. Exceed it and you're assumed offline or ignoring the sender. A 👍 reaction counts; set your Chat status when you can't respond.","Following Through","Completing a task to standard <em>and</em> proactively telling the assigner it's done — without being asked. Closing the loop is part of the task.","Scheduling Etiquette","Connect with people before putting a meeting on their calendar, follow up after, watch Google Calendar's conflict warnings, give notice (and a Chat heads-up) before any reschedule, respond to every invite, and keep recurring invite lists current. See Scheduling &amp; Meeting Etiquette.","Company-Wide Meeting","An all-hands for company updates and alignment, scheduled with varying notice (sometimes the day before). Attendance is mandatory (cameras on) and tracked; if you're double-booked and can't reschedule, the session is recorded and shared.","Busy Season","The recurring high-volume period (currently the Friday after Thanksgiving through December 20) when time off is limited — max 2 PTO days, with at least 20 days' notice. See <a href=\"#agreements\">Your Contract &amp; Handbook</a>.","Floating Holiday","A holiday day you choose for yourself rather than a fixed company-observed date. InvenTel has no mandatory holidays; all are floating and requested in the PM tool.","Incomplete Workday","A deviation from standard hours (late start, early finish, or a lunch over one hour). Documented the same day in the PM tool's Leave Management, with the exact ET time.","Probation Period","Your first 90 days. Any days off during this period are unpaid regardless of reason; leave accrual doesn't apply yet.","Daily Scrum / Standup","Your everyday update in the PM tool's Daily Scrum — active tasks, status, and blockers. Required every workday.","InvenTel PM Tool","InvenTel's in-house project-management platform (its own ClickUp) — the single source of truth for tasks, the daily scrum, the time tracker, leave requests and balances, channels, and dashboards.","Time Tracker","The per-task timer inside the PM tool, with periodic screenshots. Turning it on for every task is mandatory; pause it for breaks; deleting a screenshot also deletes the linked time.","Department Lead (Dept Lead)","Your primary point of direction, responsible for your full workload, quality, deadlines, and capacity. Keep them informed of every task you receive, whoever sent it.","Channel Rule","All task assignments go through the proper PM channel, never a private DM. DM'd tasks get moved to the channel and flagged to your Dept Lead.","Brand Hub","A standalone knowledge page in InvenTel University for a single brand, ending in a quiz. Review the full hub and pass the quiz before working on a newly assigned brand.","Remote Leave Tracker","The company-wide calendar of all approved leave. Subscribe to it, verify your own approved leave appears, and check it before scheduling.","OOO — Out of Office","Set an OOO event in Google Calendar and it syncs your Away status across Gmail and Chat automatically.","30 · Quick Answers","Frequently Asked Questions","What time zone do I work in if I'm in Egypt, India, Pakistan, the Philippines, or Argentina?","Eastern Time, always — the same as everyone, including the US teams and HQ in New Jersey. Hours are 8:30 AM – 5:30 PM ET and every meeting and deadline follows ET no matter where you live. Set your Google Calendar primary zone to Eastern Time and add your local zone only as a secondary clock.","When I message or schedule with a teammate, whose time zone do I use?","Always Eastern Time — never your local time, even when messaging someone in another country to be helpful. One shared clock means everyone makes a single quick conversion and nobody is confused. Mixing local times into chats and invites is what causes missed meetings.","The US just changed its clocks but my country didn't. What do I do?","Company time always follows the current time in New Jersey, so it shifts with the US change. Your local-to-ET gap moves by an hour for a while — that's expected, and accommodating it is on you. Your calendar handles the meetings automatically because your primary zone is ET; just notice that your start time now lands at a different local hour. If unsure, check the current time in NJ — that's the company time.","How fast do I need to reply to chats?","React or reply to Google Chat messages in under 10 minutes during working hours — even a one-second 👍 counts. Go longer and we'll assume you're offline or ignoring the person. If you're heads-down (meeting, focused work, break), set your Chat status first so the silence is understood, and respond as soon as you reasonably can.","Do I really have to keep my camera on?","Yes — for every meeting, internal or client-facing, including 1-on-1s. If you genuinely can't, post a brief Chat status (e.g. \"Bandwidth issues\") before the meeting. The rule: if your camera can't be on, don't join.","How much notice do I need to request time off?","7 days for 1 day, 14 days for 2 consecutive days, 21 days for 3 or more. Submit in the PM tool (Leave Management); approval or denial comes within 24 hours. Don't assume approval until it's in writing.","How much paid leave do I get?","16 paid days a year: 5 PTO + 5 sick + 6 floating holidays. Anything beyond that is unpaid. Days can be split into half-days, and you track your own balance (questions → the Workforce Analyst Team in HR).","Is a US holiday (or a holiday in my country) automatically a day off?","No. InvenTel has zero company holidays — no date is off by default, including US public holidays and your local holidays. Every holiday is floating: if you want it off, request it in the PM tool and wait for written approval. Don't assume a day is off and skip work — that's an unapproved absence.","What if I get sick or my internet dies unexpectedly?","Immediately contact both HR and your Direct Lead — don't wait until you're back. Submit the request in the PM tool (Emergency / Day-Of call-out) as soon as you can. For connectivity issues: Day 1 is a grace period, Day 2+ is unpaid leave until resolved, and Day 3+/recurring can mean suspension or termination — so keep a backup plan ready.","When are invoices due and when do I get paid?","Invoices are due by the 25th, sent to the shared accounting inbox payroll@inventel.net using the official template, named FirstName LastName_Invoice_MMYYYY.pdf. Payment is processed by the 10th of the following month. List any missed days in the Notes section.","Someone DM'd me a task. What do I do?","Move it to the correct PM channel and notify your Department Lead — even if the sender is senior. Tasks never get assigned by private DM, because DMs are invisible to leadership and can't be tracked or reassigned.","Can I take freelance or side work?","No. While employed at InvenTel you can't take freelance, part-time, consulting, advisory, or any secondary income-generating work. Full professional commitment is required.","Can I put InvenTel ads or creative in my portfolio?","Not without explicit written permission from management — even after you leave. All brand assets and the work you produce belong to the company.","A new brand was just assigned to me. What's expected before I start?","Review that brand's hub in InvenTel University completely, top to bottom, then pass the quiz at the bottom and follow the standard submission process — upload your named result to the Quiz Results folder and notify the person who assigned it (your Brand Lead). After that, the hub is your first reference for any question on that brand.","What's the very first thing to do on day one?","Enable 2FA on your Google account (you'll be locked out without it), then email tanvir@inventel.net to start banking setup. From there, work down the New-Hire Setup Checklist.","Who in HR do I go to for leave, onboarding, or hiring?","HR has three teams. Leave requests, balances, and PM tracker / time-entry issues → the Workforce Analyst Team. Onboarding, platform access, and performance reviews → the Performance Team. Hiring, referrals, or an open position → the Talent Acquisition Team. For a sensitive issue with a teammate or your lead, or if you're unsure who to ask → the Performance Team (handled confidentially). Note this HR routing is for international team members only, not US W2/1099 employees.","I have a conflict with a teammate or my lead and don't know how to handle it. Who do I talk to?","Reach out to the Performance Team. Concerns, conflicts, and situations you're unsure about are all handled with care and confidentiality.","31 · First Week","New-Hire Setup Checklist","Work through these during your first days — tap each item to check it off as you go. <strong>Aim to have everything done by the end of Week 1.</strong>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\"><strong>Enable 2FA first</strong> — you'll be locked out without it.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Set your <strong>primary</strong> Google Workspace time zone to ET; add your <strong>local</strong> zone as a secondary clock.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Subscribe to the <strong>Remote Leave Tracker</strong> calendar and keep it permanently visible.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Send HR a professional photo; they return a branded image (Canva template) — set it as your Google profile photo.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Add your email signature once HR sends it (HR creates it — don't build it manually).</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Set the company Google Meet virtual background; blur any non-wall real background.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Test your camera and microphone on a <a href=\"https://meet.google.com\" target=\"_blank\" rel=\"noopener\">meet.google.com</a> call — camera ON is mandatory for all meetings.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Contact <a href=\"mailto:tanvir@inventel.net\">tanvir@inventel.net</a> by private chat to set up banking — do it immediately, a bank letter may be required.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Review the Invoice Template and submission process (due the 25th; paid by the 10th of the next month).</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Create your <a href=\"https://inventelpm.automindlabinventel.com/\" target=\"_blank\" rel=\"noopener\">InvenTel PM Tool</a> account (the Performance Team helps with setup and assigns your department/role), complete the Loom walkthrough, and confirm the time tracker is installed and running.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Complete and return the Social Media Handles Sheet from your HR Performance Manager.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Review your training plan, task/deadline processes, communication norms, and the daily-scrum sheet with your Team Lead.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Complete Week-1 daily 1:1 check-ins (Week 1 daily → Weeks 2–4 weekly → Months 2–3 bi-weekly → post-probation monthly).</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Confirm all required platform access is granted (coordinated by the Performance Team and your manager).</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Test access to every platform you need before end of Week 1; platform access is handled by the Performance Team, so flag anything missing right away — missing access blocks your work.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Review the full Employee Onboarding Deck end to end and note your questions.</span></button>","<button class=\"cl-item\" onclick=\"toggleCheck(this)\"><span class=\"cl-checkbox\"><svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span><span class=\"cl-item-text\">Take the <a href=\"#quiz-section\">Knowledge Check Quiz</a>, then follow the standard submission process — upload your named result to the Quiz Results folder and notify the Performance Team (onboarding).</span></button>","<em>Your check-offs are kept for this browser session so you can track progress as you go. They reset if you reload the page — this is a personal checklist, not a submitted form.</em>","Your onboarding journey &amp; reviews","Everyone's path looks a little different depending on role, team, and the brands you're assigned — but a few things are the same for everyone:","Performance review schedule","Your formal reviews are run with the <strong>Performance Team</strong> on this cadence:","32 · Knowledge Check Quiz","Prove It · 45 Questions · 70% to Pass","Read everything above first, then take this quiz to confirm you've internalized the policies and processes that matter most day to day. <strong style=\"color:#fff\">Pass: 32 of 45 correct (70%).</strong> One question at a time, immediate feedback, correct answers shown when you miss. Retake as many times as you need — no penalty.","When you pass, enter your name and title, then capture your result — a <strong style=\"color:#fff\">screenshot of your score card is the easiest option</strong>, or you can print or save the certificate. <strong style=\"color:#fff\">Every quiz — this one and every brand or platform quiz — follows the same submission process:</strong>","<strong style=\"color:#fff\">Capture your result</strong> — a screenshot of your score card is easiest, or save it as a PDF.","<strong style=\"color:#fff\">Name the file</strong> using the standard convention (below) so it's easy to find and track.","<strong style=\"color:#fff\">Upload it</strong> to the <a href=\"https://drive.google.com/drive/folders/19vsre-bLq4zDgwEAYGcSX22SpJ7hNvIM?usp=drive_link\" target=\"_blank\" rel=\"noopener\" style=\"color:var(--iv-amber)\">InvenTel University Quiz Results</a> folder.","<strong style=\"color:#fff\">Notify the person who assigned the quiz</strong> — your onboarding manager, the Performance Team, your Department Lead, Brand Lead, or Agency Lead, depending on which quiz it was.","Congratulations — You Passed!","Not Quite There Yet","You scored <strong id=\"fail-score\">—</strong>. You need 32/45 (70%) to pass.","Where to Focus Before You Retake","Most retakes pass after a focused 20–30 minute review of these sections:","<strong>05 — Agency Structure</strong> (the no-DM channel rule)","<strong>07 — Accounting &amp; Invoicing</strong> (due dates, file naming)","<strong>08 — Working Hours &amp; Time Zone</strong> (ET, lunch, the under-10-min chat rule)","<strong>09 — Leave &amp; Time Off</strong> (notice windows, 16-day allowance, no company holidays, probation)","<strong>12 — Ownership &amp; Accountability</strong> (understand the ask, follow up, keep it professional)","<strong>15 — Meetings &amp; Camera Policy</strong>","You've got this. The questions don't change between attempts — review the sections above and you'll pass."];</script></body></html>