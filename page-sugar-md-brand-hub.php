<?php /* Template Name: SugarMD Brand Hub */ ?>
<?php bh_require_login(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SugarMD — Brand Knowledge Hub</title>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800&family=DM+Mono:wght@400;500;700&display=swap" rel="stylesheet">
<style>
:root{
  /* SUGARMD PALETTE — sampled from sugarmds.com live storefront + brand guidelines */
  /* "Guided by Nature, Perfected by Science" — warm earth + clinical sage + soft gold */
  --sm-sage:#5A7A5E;               /* signature sage green — primary surface, hero base */
  --sm-sage-deep:#3F5A44;          /* deep sage, headers, depth */
  --sm-sage-mid:#7A9580;           /* mid sage, secondary */
  --sm-sage-light:#A8BFA8;          /* light sage tint */

  --sm-teal:#2D6363;               /* deep clinical teal — authority moments */
  --sm-teal-deep:#1F4747;          /* deepest teal */

  --sm-gold:#C9A24A;               /* warm gold accent — CTAs, highlights */
  --sm-gold-deep:#9F7E22;          /* deep gold */
  --sm-gold-light:#E5C97A;         /* bright gold for glow */
  --sm-gold-pale:#F2E5B8;          /* pale gold soft accent */

  --sm-cream:#F5EDD8;              /* warm cream — page background */
  --sm-cream-deep:#E8DDB8;         /* deeper cream */
  --sm-paper:#FBF5E4;              /* lightest paper, card surfaces */
  --sm-bone:#F0E8CC;               /* bone, drawer/secondary bg */

  --sm-charcoal:#1F2520;           /* deep charcoal — body type */
  --sm-charcoal-soft:#33392E;
  --sm-iron:#525849;               /* mid type */
  --sm-stone:#7B816F;               /* muted secondary type */

  --sm-rust:#A8552E;               /* warm rust accent — health/vital moments */
  --sm-clay:#C2734D;               /* lighter clay */

  --sm-text:#1F2520;
  --sm-text-muted:#525849;
  --sm-link:#0055CC;
  --sm-white:#FFFFFF;
  --sm-danger:#A93728;
  --sm-success:#3F5A44;
  --nav-h:60px;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;background:var(--sm-cream);color:var(--sm-text);font-size:16px;line-height:1.6;-webkit-font-smoothing:antialiased}

/* TOP NAV */
#top-nav{position:sticky;top:0;z-index:1000;background:var(--sm-sage-deep);box-shadow:0 2px 12px rgba(0,0,0,.25)}
.nav-inner{display:flex;align-items:center;justify-content:space-between;gap:14px;height:var(--nav-h);padding:0 20px;max-width:1200px;margin:0 auto}
.nav-brand{font-family:'Fraunces',serif;font-weight:700;font-size:21px;color:var(--sm-gold);white-space:nowrap;letter-spacing:.02em;flex-shrink:0}
.nav-brand .nav-brand-md{color:var(--sm-cream);font-weight:500}
.nav-search-wrap{flex:1;position:relative;max-width:420px}
.nav-search{width:100%;background:rgba(255,255,255,.06);border:1px solid rgba(201,162,74,.3);color:#fff;padding:7px 12px 7px 32px;border-radius:18px;font-size:13px;font-family:'Inter',sans-serif;outline:none;transition:all .15s}
.nav-search::placeholder{color:rgba(242,229,184,.55)}
.nav-search:focus{border-color:var(--sm-gold);background:rgba(255,255,255,.1)}
.nav-search-icon{position:absolute;left:10px;top:50%;transform:translateY(-50%);width:14px;height:14px;stroke:var(--sm-gold);fill:none;stroke-width:2;pointer-events:none}
.nav-top-toc-btn{background:transparent;border:1px solid var(--sm-gold);color:var(--sm-gold);padding:6px 14px;border-radius:20px;font-size:12px;font-weight:700;cursor:pointer;font-family:'DM Mono',monospace;letter-spacing:.05em;text-transform:uppercase;transition:all .2s;flex-shrink:0}
.nav-top-toc-btn:hover{background:var(--sm-gold);color:var(--sm-sage-deep)}
@media (max-width:520px){.nav-brand{display:none}}
@media (max-width:700px){.nav-search-wrap{max-width:none}}

/* SEARCH RESULTS */
#search-results{position:absolute;top:100%;left:0;right:0;margin-top:6px;background:#fff;border-radius:10px;box-shadow:0 10px 32px rgba(0,0,0,.25);max-height:60vh;overflow-y:auto;display:none;z-index:1100}
#search-results.open{display:block}
.search-group{padding:8px 0;border-bottom:1px solid rgba(0,0,0,.06)}
.search-group:last-child{border-bottom:none}
.search-group-label{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--sm-gold-deep);font-weight:700;padding:6px 14px}
.search-result{display:block;padding:8px 14px;color:var(--sm-text);text-decoration:none;font-size:13.5px;cursor:pointer;border-left:3px solid transparent;line-height:1.4}
.search-result:hover,.search-result.active{background:var(--sm-cream);border-left-color:var(--sm-gold)}
.search-result-snippet{font-size:11.5px;color:var(--sm-text-muted);margin-top:2px}
.search-empty{padding:18px 14px;color:var(--sm-text-muted);font-size:13px;font-style:italic;text-align:center}
.flash-target{animation:flashGold 1.8s ease-out}
@keyframes flashGold{0%{background:rgba(201,162,74,.45);box-shadow:0 0 0 4px rgba(201,162,74,.5)}100%{background:transparent;box-shadow:none}}

/* FLOATING TOC BUTTON */
#floating-toc-btn{position:fixed;bottom:24px;right:24px;z-index:998;background:var(--sm-gold);color:var(--sm-sage-deep);border:2px solid var(--sm-sage-deep);width:56px;height:56px;border-radius:50%;cursor:pointer;box-shadow:0 6px 20px rgba(201,162,74,.5);display:flex;align-items:center;justify-content:center;transition:all .2s}
#floating-toc-btn:hover{background:var(--sm-gold-light);transform:translateY(-2px);box-shadow:0 8px 24px rgba(201,162,74,.65)}
#floating-toc-btn svg{width:24px;height:24px;stroke:var(--sm-sage-deep);fill:none;stroke-width:2.4;stroke-linecap:round;stroke-linejoin:round}

/* TOC DRAWER */
#toc-drawer-overlay{position:fixed;inset:0;background:rgba(31,37,32,.7);backdrop-filter:blur(4px);z-index:1500;opacity:0;pointer-events:none;transition:opacity .25s}
#toc-drawer-overlay.open{opacity:1;pointer-events:auto}
#toc-drawer{position:fixed;top:0;right:0;bottom:0;width:min(400px,92vw);background:var(--sm-bone);z-index:1501;padding:0;overflow-y:auto;transform:translateX(100%);transition:transform .3s cubic-bezier(.4,0,.2,1);box-shadow:-8px 0 30px rgba(0,0,0,.4);display:flex;flex-direction:column}
#toc-drawer.open{transform:translateX(0)}
.toc-drawer-header{display:flex;justify-content:space-between;align-items:center;padding:16px 20px;background:var(--sm-sage-deep);color:#fff;border-bottom:3px solid var(--sm-gold);position:sticky;top:0;z-index:2}
.toc-drawer-title{font-family:'Fraunces',serif;font-weight:700;color:var(--sm-gold);font-size:1.4rem;letter-spacing:.02em}
.toc-drawer-close{background:rgba(255,255,255,.12);border:1px solid rgba(201,162,74,.4);color:#fff;font-size:20px;cursor:pointer;line-height:1;width:30px;height:30px;border-radius:50%;display:flex;align-items:center;justify-content:center;transition:all .15s}
.toc-drawer-close:hover{background:var(--sm-gold);color:var(--sm-sage-deep);border-color:var(--sm-gold)}
#toc-drawer-nav{padding:10px 12px 14px;display:flex;flex-direction:column;gap:3px}
#toc-drawer-nav a{display:flex;align-items:center;gap:10px;background:#fff;color:var(--sm-charcoal);text-decoration:none;padding:7px 12px;border-radius:7px;font-size:13px;font-family:'Inter',sans-serif;font-weight:600;border:1px solid rgba(201,162,74,.18);border-left:4px solid var(--sm-gold);transition:all .15s;line-height:1.2}
#toc-drawer-nav a:hover{background:var(--sm-sage);color:#fff;border-color:var(--sm-sage);border-left-color:var(--sm-gold-light);transform:translateX(3px);opacity:1;box-shadow:0 2px 8px rgba(63,90,68,.3)}
#toc-drawer-nav a:hover .toc-drawer-num{background:var(--sm-gold-light);color:var(--sm-sage-deep)}
.toc-drawer-num{display:inline-flex;align-items:center;justify-content:center;min-width:30px;height:20px;padding:0 6px;background:var(--sm-gold);color:var(--sm-sage-deep);border-radius:4px;font-family:'DM Mono',monospace;font-size:10.5px;font-weight:700;letter-spacing:.02em;flex-shrink:0;transition:all .15s}
.toc-drawer-label{flex:1;min-width:0}

/* TOC SECTION (in-page) */
#toc-section .toc-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:10px;margin-top:10px}
.toc-tile{display:flex;align-items:center;gap:10px;background:var(--sm-paper);text-decoration:none;color:var(--sm-charcoal);padding:12px 14px;border-radius:10px;border:1px solid rgba(201,162,74,.18);border-left:4px solid var(--sm-gold);transition:all .15s;font-size:13.5px;font-weight:600}
.toc-tile:hover{background:var(--sm-sage);color:#fff;border-color:var(--sm-sage);border-left-color:var(--sm-gold-light);transform:translateX(3px);opacity:1}
.toc-tile-num{display:inline-flex;align-items:center;justify-content:center;min-width:32px;height:22px;padding:0 6px;background:var(--sm-gold);color:var(--sm-sage-deep);border-radius:4px;font-family:'DM Mono',monospace;font-size:11px;font-weight:700;flex-shrink:0;transition:all .15s}
.toc-tile:hover .toc-tile-num{background:var(--sm-gold-light);color:var(--sm-sage-deep)}
.toc-tile-label{flex:1;min-width:0}

main{max-width:1080px;margin:0 auto;padding:30px 20px 80px}

h1{font-family:'Fraunces',serif;font-weight:800;font-size:clamp(2.6rem,6.8vw,4.8rem);color:#fff;line-height:1;letter-spacing:-.01em}
h2{font-family:'Fraunces',serif;font-size:clamp(1.7rem,3.5vw,2.3rem);font-weight:800;color:var(--sm-charcoal);margin-bottom:24px;padding-bottom:12px;border-bottom:3px solid var(--sm-gold);letter-spacing:-.01em}
h3{font-family:'Fraunces',serif;font-size:1.3rem;font-weight:700;color:var(--sm-sage-deep);margin-bottom:10px}
h4{font-family:'Inter',sans-serif;font-size:1rem;font-weight:700;color:var(--sm-charcoal);margin-bottom:8px}
p{margin-bottom:14px;color:var(--sm-text)}
a{color:var(--sm-link);text-decoration:underline}
a:hover{opacity:.75}
.eyebrow{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--sm-gold-deep);margin-bottom:8px;display:block;font-weight:600}
.card{background:var(--sm-paper);border-radius:16px;padding:36px;margin-bottom:20px;box-shadow:0 2px 20px rgba(31,37,32,.07);border:1px solid rgba(201,162,74,.15)}

/* COLLAPSIBLE SECTIONS */
.collapsible .section-header-bar{display:flex;align-items:center;justify-content:space-between;cursor:pointer;gap:14px;margin-bottom:24px;padding-bottom:12px;border-bottom:3px solid var(--sm-gold)}
.collapsible .section-header-bar h2{margin-bottom:0;padding-bottom:0;border-bottom:none}
.section-header-left{flex:1;min-width:0}
.section-toggle{background:var(--sm-gold);color:var(--sm-sage-deep);border:none;width:32px;height:32px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .2s}
.section-toggle:hover{background:var(--sm-gold-light);transform:scale(1.06)}
.section-toggle svg{width:16px;height:16px;stroke:var(--sm-sage-deep);fill:none;stroke-width:2.5;transition:transform .2s}
.collapsible.collapsed .section-toggle svg{transform:rotate(-90deg)}
.collapsible.collapsed .section-body{display:none}

/* HERO — sage green with warm gold radial glow */
#hero{max-width:100%;padding:0;margin:0;background:linear-gradient(135deg,var(--sm-sage-deep) 0%,var(--sm-sage) 50%,var(--sm-sage-deep) 100%);position:relative;overflow:hidden}
#hero::before{content:"";position:absolute;inset:0;background-image:radial-gradient(circle at 18% 28%,rgba(242,229,184,.18) 0%,transparent 45%),radial-gradient(circle at 82% 75%,rgba(201,162,74,.24) 0%,transparent 50%),radial-gradient(circle at 50% 100%,rgba(229,201,122,.16) 0%,transparent 60%);pointer-events:none}
.hero-inner{max-width:980px;margin:0 auto;padding:64px 20px 56px;position:relative;z-index:1}
.hero-logo-wrap{display:flex;align-items:center;gap:20px;margin-bottom:28px;flex-wrap:wrap}
.hero-logo-wrap img{height:60px;object-fit:contain;background:var(--sm-paper);padding:8px 16px;border-radius:8px;border:1px solid rgba(201,162,74,.4)}
.hero-logo-wrap img[data-failed="1"]{display:none}
.hero-logo-wrap img[data-failed="1"] + .hero-brand-text-fallback{display:inline-block}
.hero-brand-text-fallback{display:none;font-family:'Fraunces',serif;font-weight:800;font-size:2.6rem;color:var(--sm-gold);letter-spacing:.02em}
.hero h1{color:#fff;margin-bottom:8px;text-shadow:0 2px 12px rgba(31,37,32,.4)}
.hero h1 .h1-md{color:var(--sm-gold);font-weight:600;font-style:italic}
.hero-tagline{font-size:1.3rem;color:var(--sm-cream);margin-bottom:10px;font-weight:500;font-family:'Fraunces',serif;font-style:italic}
.hero-meta{font-family:'DM Mono',monospace;font-size:13px;color:var(--sm-gold-pale);opacity:.85;margin-bottom:28px;letter-spacing:.05em}
.hero-stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:14px;margin:28px 0}
.hero-stat{background:rgba(255,255,255,.06);border:1px solid rgba(201,162,74,.3);border-radius:12px;padding:18px;backdrop-filter:blur(4px)}
.hero-stat-num{font-family:'Fraunces',serif;font-weight:800;font-size:2.2rem;color:var(--sm-gold);line-height:1;margin-bottom:6px;letter-spacing:.005em}
.hero-stat-lbl{font-size:12px;color:#fff;opacity:.92;line-height:1.35}
.chip-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:18px}
.chip{display:inline-flex;align-items:center;gap:6px;background:#fff;color:var(--sm-link)!important;text-decoration:underline;padding:7px 14px;border-radius:20px;font-size:13px;font-weight:600;transition:transform .15s}
.chip:hover{transform:translateY(-1px);opacity:1}

.tag-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:16px}
.tag{background:var(--sm-gold);color:var(--sm-sage-deep);padding:5px 12px;border-radius:12px;font-size:12px;font-weight:700;letter-spacing:.02em}
.tag.tag-inventel{background:var(--sm-sage-deep);color:var(--sm-gold)}
.tag.tag-warm{background:var(--sm-rust);color:#fff}

/* TABLES */
table{width:100%;border-collapse:collapse;margin:16px 0;background:#fff;border-radius:8px;overflow:hidden;font-size:14px}
th{background:var(--sm-sage-deep);color:var(--sm-gold);padding:12px 14px;text-align:left;font-size:12px;text-transform:uppercase;letter-spacing:.07em;font-weight:700}
td{padding:12px 14px;border-bottom:1px solid rgba(31,37,32,.08);vertical-align:top}
tr:last-child td{border-bottom:none}
tr:nth-child(even) td{background:rgba(201,162,74,.05)}
.badge{display:inline-block;padding:3px 9px;border-radius:10px;font-size:11px;font-weight:700;letter-spacing:.03em;text-transform:uppercase}
.badge-core{background:var(--sm-gold);color:var(--sm-sage-deep)}
.badge-bestseller{background:var(--sm-sage);color:#fff}
.badge-new{background:var(--sm-rust);color:#fff}
.badge-discontinued{background:#888;color:#fff}
.badge-bundle{background:var(--sm-clay);color:#fff}
.badge-soldout{background:var(--sm-stone);color:#fff}

/* FEATURE GRID */
.feature-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:12px;margin:14px 0 8px}
.feature-tile{background:linear-gradient(135deg,#fff 0%,var(--sm-cream-deep) 100%);border:1px solid rgba(201,162,74,.18);border-left:4px solid var(--sm-gold);border-radius:10px;padding:14px 16px}
.feature-tile-icon{font-size:1.4rem;margin-bottom:6px;display:block;line-height:1}
.feature-tile h4{margin-bottom:4px;font-size:13.5px;color:var(--sm-charcoal)}
.feature-tile p{margin:0;font-size:12.5px;color:var(--sm-text-muted);line-height:1.5}

/* PILLARS */
.pillars{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:20px}
.pillar{background:linear-gradient(135deg,var(--sm-paper) 0%,rgba(201,162,74,.13) 100%);padding:22px;border-radius:12px;border-left:4px solid var(--sm-gold);transition:transform .2s}
.pillar:hover{transform:translateY(-3px)}
.pillar-icon{font-size:1.8rem;margin-bottom:10px;display:block}
.pillar h4{color:var(--sm-charcoal);margin-bottom:6px;font-size:1rem}
.pillar p{font-size:13px;color:var(--sm-text-muted);margin-bottom:0;line-height:1.5}

/* TONE / DO-DONT / ADJ / PERSONA */
.tone-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:14px;margin-top:20px}
.tone{background:var(--sm-cream-deep);padding:20px;border-radius:10px;border-top:4px solid var(--sm-gold)}
.tone-label{font-weight:700;color:var(--sm-charcoal);font-size:14px;margin-bottom:6px}
.tone-desc{font-size:13px;color:var(--sm-text-muted);margin-bottom:10px}
.tone-ex{font-family:'Fraunces',serif;font-style:italic;color:var(--sm-sage-deep);font-size:14.5px;border-left:3px solid var(--sm-gold);padding-left:10px;line-height:1.5}

.do-dont{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:16px}
.do-dont > div{padding:20px;border-radius:10px}
.do{background:rgba(63,90,68,.08);border-left:4px solid var(--sm-sage-deep)}
.dont{background:rgba(169,55,40,.08);border-left:4px solid var(--sm-danger)}
.do h4{color:var(--sm-sage-deep)}
.dont h4{color:var(--sm-danger)}
.do ul,.dont ul{padding-left:18px;font-size:13.5px}
.do li,.dont li{margin-bottom:6px;line-height:1.5}
@media (max-width:600px){.do-dont{grid-template-columns:1fr}}

/* STATEMENT QUOTE */
.statement{background:linear-gradient(135deg,var(--sm-sage) 0%,var(--sm-sage-deep) 100%);color:#fff;padding:28px 32px;border-radius:14px;margin:20px 0;border-left:5px solid var(--sm-gold);position:relative}
.statement::before{content:"\201C";position:absolute;top:6px;left:18px;font-family:'Fraunces',serif;font-weight:800;font-size:5rem;color:var(--sm-gold);opacity:.3;line-height:1}
.statement-label{font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold);text-transform:uppercase;letter-spacing:.1em;margin-bottom:8px;font-weight:700}
.statement p{color:var(--sm-cream);font-family:'Fraunces',serif;font-size:1.25rem;font-style:italic;line-height:1.45;margin-bottom:0;font-weight:500}
.statement strong{color:var(--sm-gold);font-style:normal;font-weight:700}

/* TEAM CALLOUTS */
.team-callout{padding:18px 20px;border-radius:10px;margin:16px 0;border-left:5px solid;background:#fff;font-size:14px;line-height:1.55}
.team-callout p{margin:0;color:var(--sm-charcoal)}
.team-callout p + p{margin-top:10px}
.team-callout .team-tag{display:inline-block;font-family:'DM Mono',monospace;font-size:11px;font-weight:700;letter-spacing:.07em;text-transform:uppercase;padding:3px 9px;border-radius:6px;margin-bottom:8px}
.team-callout.cx{border-color:var(--sm-sage-deep);background:linear-gradient(135deg,#fff 0%,rgba(63,90,68,.06) 100%)}
.team-callout.cx .team-tag{background:var(--sm-sage-deep);color:var(--sm-gold)}
.team-callout.creative{border-color:var(--sm-rust);background:linear-gradient(135deg,#fff 0%,rgba(168,85,46,.06) 100%)}
.team-callout.creative .team-tag{background:var(--sm-rust);color:#fff}
.team-callout.marketing{border-color:#7B4F9C;background:linear-gradient(135deg,#fff 0%,rgba(123,79,156,.06) 100%)}
.team-callout.marketing .team-tag{background:#7B4F9C;color:#fff}
.team-callout.brand{border-color:var(--sm-gold-deep);background:linear-gradient(135deg,#fff 0%,rgba(159,126,34,.07) 100%)}
.team-callout.brand .team-tag{background:var(--sm-gold-deep);color:#fff}
.team-callout.newhire{border-color:#2F6FB5;background:linear-gradient(135deg,#fff 0%,rgba(47,111,181,.06) 100%)}
.team-callout.newhire .team-tag{background:#2F6FB5;color:#fff}

/* RECALL CALLOUT — special hazard treatment for #20 / #25 etc */
.recall-callout{background:linear-gradient(135deg,#FFF8E5 0%,#FBEFC8 100%);border:2px solid var(--sm-gold-deep);border-left:6px solid var(--sm-gold-deep);border-radius:10px;padding:20px 22px;margin:18px 0;position:relative}
.recall-callout::before{content:"";position:absolute;top:0;left:0;right:0;height:6px;background:repeating-linear-gradient(45deg,var(--sm-charcoal) 0 12px,var(--sm-gold-deep) 12px 24px);border-top-left-radius:8px;border-top-right-radius:8px}
.recall-callout-tag{display:inline-block;font-family:'DM Mono',monospace;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;background:var(--sm-charcoal);color:var(--sm-gold);padding:4px 10px;border-radius:5px;margin-top:8px;margin-bottom:10px}
.recall-callout h4{color:var(--sm-charcoal);font-size:15px;margin-bottom:6px}
.recall-callout p{color:var(--sm-charcoal);font-size:14px;line-height:1.55;margin-bottom:10px}
.recall-callout p:last-child{margin-bottom:0}

/* QUIZ SECTION — dark dramatic standout (Pizza Pack pattern, Sugar MD palette) */
#quiz-section{background:linear-gradient(135deg,var(--sm-sage-deep) 0%,var(--sm-teal-deep) 100%);color:#fff;border-radius:20px;padding:0;margin-top:40px;overflow:hidden;border:none;box-shadow:0 8px 32px rgba(63,90,68,.22)}
#quiz-section .card,#quiz-section > .card{background:transparent!important;border:none!important;box-shadow:none!important;padding:0!important;margin:0!important;color:#fff}
#quiz-section h2{color:#fff!important;font-family:'Fraunces',serif;border:none!important;margin:0;padding:0}
#quiz-section .eyebrow{color:var(--sm-gold)!important}
#quiz-section .section-header-bar{background:transparent;padding:32px 30px 20px;border-bottom:1px solid rgba(201,162,74,.18)}
#quiz-section .section-header-bar:hover{background:rgba(255,255,255,.04)}
#quiz-section .section-toggle{border-color:var(--sm-gold)!important;color:var(--sm-gold)!important;background:transparent!important}
#quiz-section .section-toggle:hover{background:var(--sm-gold)!important;color:var(--sm-charcoal)!important}
#quiz-section .collapsible.collapsed .section-header-bar{border-bottom:none;border-color:transparent}
#quiz-section .section-body{padding:20px 30px 40px;background:transparent;color:#fff}
#quiz-section .section-body p{color:#F0E8CC}
#quiz-section .section-body p strong{color:var(--sm-gold-light)}
#quiz-section #quiz-intro p{color:#F0E8CC;font-size:15px;line-height:1.7}
#quiz-section .quiz-container{background:rgba(255,255,255,.07);border-radius:14px;padding:28px;margin-top:20px;border:1px solid rgba(201,162,74,.3)}
#quiz-section .quiz-progress{font-family:'DM Mono',monospace;font-size:12px;color:var(--sm-gold);letter-spacing:.1em;margin-bottom:16px;text-transform:uppercase;display:flex;justify-content:space-between;align-items:center}
#quiz-section .quiz-progress-bar{height:6px;background:rgba(255,255,255,.12);border-radius:3px;overflow:hidden;margin-bottom:22px}
#quiz-section .quiz-progress-fill{height:100%;background:var(--sm-gold);transition:width .4s cubic-bezier(.4,0,.2,1);border-radius:3px}
#quiz-section .quiz-question{font-family:'Fraunces',serif;font-size:1.3rem;font-weight:700;margin-bottom:22px;line-height:1.35;color:#fff}
#quiz-section .quiz-options{display:flex;flex-direction:column;gap:10px}
#quiz-section .quiz-option{background:rgba(255,255,255,.06);border:2px solid rgba(201,162,74,.3);color:#fff;padding:14px 18px;border-radius:10px;text-align:left;font-size:14px;cursor:pointer;transition:all .2s;font-family:inherit;display:flex;align-items:center;gap:12px;width:100%}
#quiz-section .quiz-option:hover:not(:disabled){background:rgba(201,162,74,.18);border-color:var(--sm-gold);transform:translateX(4px)}
#quiz-section .quiz-option.correct,#quiz-section .quiz-option.show-correct{background:#FEF9E7;border-color:var(--sm-gold);color:var(--sm-charcoal);font-weight:700;box-shadow:0 0 0 3px rgba(201,162,74,.4)}
#quiz-section .quiz-option.incorrect{background:rgba(184,57,31,.85);border-color:#fff;color:#fff;font-weight:700}
#quiz-section .quiz-option:disabled:not(.correct):not(.show-correct):not(.incorrect){opacity:.35}
#quiz-section .quiz-start-btn,#quiz-section .quiz-submit-btn,#quiz-section .quiz-retry-btn,#quiz-section #q-next-btn{background:var(--sm-gold)!important;color:var(--sm-charcoal)!important;border:none;padding:14px 28px;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;margin-top:18px;transition:transform .15s,box-shadow .15s;letter-spacing:.02em;display:inline-block}
#quiz-section .quiz-start-btn:hover,#quiz-section .quiz-submit-btn:hover,#quiz-section .quiz-retry-btn:hover,#quiz-section #q-next-btn:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(201,162,74,.45)}

/* PRINT */
@media print{
  body.printing #top-nav, body.printing #floating-toc-btn, body.printing #toc-drawer, body.printing #toc-drawer-overlay, body.printing #search-results, body.printing .section-toggle, body.printing .completion-actions{display:none!important}
  body.printing .collapsible.collapsed .section-body{display:block!important}
  body.printing{background:#fff!important;-webkit-print-color-adjust:exact;print-color-adjust:exact}
  .card{box-shadow:none;border:1px solid #ddd;page-break-inside:avoid}
  #hero{page-break-after:always}
  *{print-color-adjust:exact;-webkit-print-color-adjust:exact}
}
body.printing #top-nav, body.printing #floating-toc-btn, body.printing #toc-drawer, body.printing #toc-drawer-overlay, body.printing #search-results{display:none!important}
body.printing .section-toggle{display:none!important}
body.printing .collapsible.collapsed .section-body{display:block!important}
</style>
<?php bh_favicon_tags(); ?>
</head>
<body>

<!-- TOP NAV -->
<nav id="top-nav">
  <div class="nav-inner">
    <div class="nav-brand">SugarMD <span class="nav-brand-md">· Brand Hub</span></div>
    <div class="nav-search-wrap">
      <svg class="nav-search-icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input type="text" class="nav-search" id="hub-search" placeholder="Search the hub… (press / to focus)" autocomplete="off">
      <div id="search-results"></div>
    </div>
    <button class="nav-top-toc-btn" onclick="openDrawer()">☰ Menu</button>
  </div>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="hero-inner">
    <div class="hero-logo-wrap">
      <img src="https://www.sugarmds.com/cdn/shop/files/imgi_1_Logo_Atoms_1.svg?v=1775143981&width=200" alt="SugarMD logo" onerror="this.dataset.failed='1'">
      <span class="hero-brand-text-fallback">SugarMD</span>
    </div>
    <h1>Sugar<span class="h1-md">MD</span></h1>
    <p class="hero-tagline">Guided by Nature, Perfected by Science.</p>
    <p class="hero-meta">Inventel-owned · Doctor-formulated · Brand Knowledge Hub v6.2</p>

    <div class="hero-stats">
      <div class="hero-stat">
        <div class="hero-stat-num">37+</div>
        <div class="hero-stat-lbl">Doctor-formulated SKUs across 13 categories</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">900K+</div>
        <div class="hero-stat-lbl">YouTube subscribers behind Dr. Ergin's authority</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">30-day</div>
        <div class="hero-stat-lbl">Return policy on unopened, sealed bottles</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">Free</div>
        <div class="hero-stat-lbl">Shipping on every U.S. order — no threshold</div>
      </div>
    </div>

    <div class="chip-row">
      <a class="chip" href="https://www.sugarmds.com/" target="_blank" rel="noopener">🌐 sugarmds.com</a>
      <a class="chip" href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener">🛒 Shop All</a>
      <a class="chip" href="https://www.instagram.com/sugarmds/" target="_blank" rel="noopener">📷 @sugarmds</a>
      <a class="chip" href="https://www.tiktok.com/@sugarmdtiktok" target="_blank" rel="noopener">🎵 TikTok</a>
      <a class="chip" href="https://www.facebook.com/sugarmdsonline/" target="_blank" rel="noopener">👍 Facebook</a>
      <a class="chip" href="https://www.youtube.com/channel/UCGGc50eoC865DeHvGHIbV0w" target="_blank" rel="noopener">▶️ YouTube</a>
      <a class="chip" href="https://x.com/sugar_mds" target="_blank" rel="noopener">𝕏 Twitter/X</a>
      <a class="chip" href="mailto:feedback@sugarmds.com" target="_blank" rel="noopener">✉️ feedback@sugarmds.com</a>
      <a class="chip" href="tel:8883743710" target="_blank" rel="noopener">📞 888-374-3710</a>
    </div>

    <div class="tag-row">
      <span class="tag tag-inventel">Inventel Brand</span>
      <span class="tag">Doctor-Formulated</span>
      <span class="tag">Endocrinologist-Led</span>
      <span class="tag">Holistic Diabetes Management</span>
    </div>
  </div>
</section>

<main>

<!-- TABLE OF CONTENTS -->
<section id="toc-section">
  <div class="card collapsible" data-section="toc">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">Table of Contents</span>
        <h2>Find Your Way Around</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
      <p>Each section below collapses to its header — click the round chevron at the right of any section bar. The floating <strong>☰</strong> button (bottom-right) opens a drawer with the same nav from anywhere on the page. <strong>Press <kbd>/</kbd></strong> to jump to search.</p>
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
        <a class="toc-tile" href="#angles"><span class="toc-tile-num">11</span><span class="toc-tile-label">Marketing Angles</span></a>
        <a class="toc-tile" href="#creatives"><span class="toc-tile-num">12</span><span class="toc-tile-label">Winning Creatives</span></a>
        <a class="toc-tile" href="#social"><span class="toc-tile-num">14</span><span class="toc-tile-label">Social &amp; Digital</span></a>
        <a class="toc-tile" href="#partnerships"><span class="toc-tile-num">15</span><span class="toc-tile-label">Partnerships</span></a>
        <a class="toc-tile" href="#discounts"><span class="toc-tile-num">16</span><span class="toc-tile-label">Discounts &amp; Codes</span></a>
        <a class="toc-tile" href="#seo"><span class="toc-tile-num">17</span><span class="toc-tile-label">SEO</span></a>
        <a class="toc-tile" href="#cro"><span class="toc-tile-num">18</span><span class="toc-tile-label">CRO</span></a>
        <a class="toc-tile" href="#glossary"><span class="toc-tile-num">19</span><span class="toc-tile-label">Glossary</span></a>
        <a class="toc-tile" href="#returns"><span class="toc-tile-num">20</span><span class="toc-tile-label">Return Policy</span></a>
        <a class="toc-tile" href="#fulfillment"><span class="toc-tile-num">21</span><span class="toc-tile-label">Fulfillment</span></a>
        <a class="toc-tile" href="#testorders"><span class="toc-tile-num">22</span><span class="toc-tile-label">Test Orders</span></a>
        <a class="toc-tile" href="#shopify"><span class="toc-tile-num">23</span><span class="toc-tile-label">Shopify Platform</span></a>
        <a class="toc-tile" href="#faq"><span class="toc-tile-num">24</span><span class="toc-tile-label">FAQ</span></a>
        <a class="toc-tile" href="#recall"><span class="toc-tile-num">25</span><span class="toc-tile-label">FDA Recall Handling</span></a>
        <a class="toc-tile" href="#resources"><span class="toc-tile-num">26</span><span class="toc-tile-label">Resources &amp; Contacts</span></a>
        <a class="toc-tile" href="#quiz-section"><span class="toc-tile-num">27</span><span class="toc-tile-label">Knowledge Check Quiz</span></a>
      </div>
    </div>
  </div>
</section>

<!-- 01 — BRAND OVERVIEW -->
<section id="overview">
  <div class="card collapsible" data-section="overview">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">01 · Brand Overview</span>
        <h2>The Trusted Brand for Holistic Diabetes Management</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p><strong>SugarMD</strong> is a doctor-formulated supplement brand built around endocrinologist <strong>Dr. Ahmet Ergin</strong>. The mission is simple: provide individuals managing diabetes — pre-diabetes, Type 2, caregivers of diabetic family members — with natural, science-backed solutions and the education they need to use them well. Every product is formulated by Dr. Ergin, lab-tested for purity, and built around a holistic approach: real food, real movement, real supplementation. Not magic pills.</p>

      <h3 style="margin-top:24px">Founding story</h3>
      <p>For Dr. Ahmet Ergin, board-certified endocrinologist, the work was personal. His mother's journey to manage her diabetes through a holistic approach — diet, lifestyle, targeted supplementation — fueled the original mission: <strong>redefine health not through pills, but through knowledge, lifestyle, and the natural world.</strong> SugarMD launched as the consumer-facing arm of that mission, paired with a YouTube channel that has grown past <strong>900,000 subscribers</strong> and 1,600+ videos translating clinical knowledge into language patients actually use.</p>

      <p>SugarMD was <strong>acquired by Inventel in 2025</strong> and continues to operate as a flagship wellness brand in the portfolio. Dr. Ergin remains the medical authority and creative voice; the catalog, manufacturing, fulfillment, and CX now run through Inventel's operational infrastructure.</p>

      <h3 style="margin-top:24px">What we do</h3>
      <div class="feature-grid">
        <div class="feature-tile"><span class="feature-tile-icon">🩺</span><h4>Doctor-Formulated Supplements</h4><p>Every SKU carries Dr. Ergin's endocrinology-led formulation, not marketing-led "trends."</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🌿</span><h4>Natural Ingredients</h4><p>Plant-based formulations. Non-GMO, GMP-certified, lab-tested for pesticides and heavy metals.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">📚</span><h4>Education First</h4><p>YouTube, books, blogs, the Diabetic Diet Guide — content does the heavy lifting before the customer ever buys.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🤝</span><h4>Compassionate Care</h4><p>The customer is a person managing a chronic condition, not a transaction. Tone, copy, and CX reflect that.</p></div>
      </div>

      <h3 style="margin-top:24px">Brand promise</h3>
      <div class="statement">
        <div class="statement-label">Brand promise</div>
        <p>SugarMD promises to deliver <strong>science-backed, clean, and effective solutions</strong> that help individuals manage diabetes naturally, with an unwavering commitment to <strong>transparency and empathy.</strong></p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">New Hire · Start Here</span>
        <p><strong>Read this section first, then jump to Product Line (#02), Return Policy (#20), and FDA Recall Handling (#25).</strong> Those four give you 80% of what you need to handle a customer call without escalating. The brand voice and positioning content (sections 3–8) is essential context — you don't need to memorize it on day one, but you do need to feel it in your tone. SugarMD customers are often dealing with a recent diabetes diagnosis or caring for someone who is. Lead with empathy, then with information. <strong>Never with a sales pitch.</strong></p>
        <p>Important context: there <em>is</em> an FDA recall in the brand's history. Don't avoid the topic, don't improvise about it — section #25 has the scripted approach. Read it before your first shift.</p>
      </div>

      <div class="tag-row">
        <span class="tag tag-inventel">Inventel Brand</span>
        <span class="tag">Founded by Dr. Ahmet Ergin, MD</span>
        <span class="tag">Endocrinologist-Led</span>
        <span class="tag">Plant-Based Formulations</span>
        <span class="tag">Lab Tested for Purity</span>
        <span class="tag">GMP Certified</span>
      </div>
    </div>
  </div>
</section>

<!-- 02 — PRODUCT LINE -->
<section id="products">
  <div class="card collapsible" data-section="products">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">02 · Product Line</span>
        <h2>The Catalog</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>SugarMD carries <strong>37 SKUs across 13 categories</strong>, sold direct-to-consumer through <a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">sugarmds.com/collections/all</a>. Most are capsule supplements; the line also includes a tea, gummies, vitamin drops, a third-party CGM biosensor, an ionic foot spa, books, and bundle "Health Pack Trio" SKUs. Subscription discounts run <strong>10–20%</strong> off depending on cadence.</p>

      <div class="team-callout cx" style="border-left:4px solid var(--sm-link)">
        <span class="team-tag">📌 Note on pricing</span>
        <p style="margin:0">Pricing is set and updated on the Shopify storefront and changes regularly with promotions, bundle deals, and seasonal sales. <strong>Don't quote prices from this hub or memory.</strong> Always pull the current price from the live product page before quoting it to a customer. Live shop link: <a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">sugarmds.com/collections/all →</a></p>
      </div>

      <h3>Categories at a glance</h3>
      <div class="feature-grid">
        <div class="feature-tile"><span class="feature-tile-icon">🩸</span><h4>Glucose Support</h4><p>Hero category. GlucoDefense, Advanced Glucose Support, Gluxion, Berberine.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🛡️</span><h4>Antioxidants</h4><p>ALA, Resveratrol, Moringa, ACV, DiaVitamin, Mushroom Miracle.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">⚡</span><h4>Metabolism</h4><p>Berberine, Mushroom Miracle, GlucoDefense — the metabolic stack.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">⚖️</span><h4>Weight</h4><p>ACV gummies and metabolism-support SKUs framed for weight goals.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🌿</span><h4>Liver Support</h4><p>DiaBtea (rosemary + olive leaf) and broader detox-adjacent SKUs.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🍯</span><h4>Sugar</h4><p>The signature category — overlaps with Glucose Support.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🌸</span><h4>Hormones</h4><p>Thyroid &amp; Adrenal Support, Men's Romance, Maca Root.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">💪</span><h4>Immunity</h4><p>D3+K2, Moringa, Mushroom Miracle, DiaVitamin multivitamin.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">⚡</span><h4>Energy</h4><p>B-12 Energy Booster, D3+K2 drops, Men's Romance.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🧘</span><h4>Calm</h4><p>Ashwagandha Extract, magnesium-led calming SKUs.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🦵</span><h4>Neuropathy Support</h4><p>Benfotiamine, Alpha Lipoic Acid — the nerve-health stack.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">📚</span><h4>Books &amp; Tools</h4><p>Diabetic Diet Guide hardcover · Stelo CGM by Dexcom · Ionic Foot Spa.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🎁</span><h4>Health Pack Trio Bundles</h4><p>Pre-built protocols. Spring Reset · Metabolic Health · Green Monday · Immune Support · NDA Month.</p></div>
      </div>

      <h3 style="margin-top:28px">Hero SKUs · Glucose Support</h3>
      <table>
        <thead><tr><th>Product</th><th>Size / Form</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td><strong>SugarMD Advanced Glucose Support</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>180 caps</td><td><span class="badge badge-bestseller">Bestseller</span> Plant-based, berberine + cinnamon blend</td></tr>
          <tr><td><strong>SugarMD GlucoDefense</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/products/glucose-defense" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>120 caps</td><td>6-week gradual formula, customer-feedback-driven</td></tr>
          <tr><td><strong>SugarMD Super Berberine (DHB + Ceylon Cinnamon)</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>30 caps</td><td>5× bioavailability vs. standard berberine</td></tr>
          <tr><td><strong>SugarMD Berberine Premium 1200mg</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>60 caps</td><td>Standalone berberine — currently <span class="badge badge-soldout">Sold out</span></td></tr>
          <tr><td><strong>SugarMD Gluxion Glucose Support</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>180 caps</td><td><span class="badge badge-new">New</span> Plant-based premium formula</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">Antioxidants &amp; Neuropathy Support</h3>
      <table>
        <thead><tr><th>Product</th><th>Size / Form</th><th>Use case</th></tr></thead>
        <tbody>
          <tr><td><strong>Alpha Lipoic Acid 600mg</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>60 caps</td><td>Antioxidant + neuropathy — <span class="badge badge-soldout">Sold out</span></td></tr>
          <tr><td><strong>Benfotiamine 300mg</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>60 caps</td><td>Glucose-related nerve damage support</td></tr>
          <tr><td><strong>Resveratrol</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>60 caps</td><td>Anti-aging, heart health</td></tr>
          <tr><td><strong>Moringa Power 1200mg</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>90 caps</td><td>Superfood — energy, immune support</td></tr>
          <tr><td><strong>Apple Cider Vinegar Gummies</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>60 gummies</td><td>Raw, unfiltered, organic</td></tr>
          <tr><td><strong>DiaVitamin Multivitamin</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>60 tabs</td><td>Diabetes-aware multi · no added iron</td></tr>
          <tr><td><strong>Mushroom Miracle</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>60 caps</td><td>6-mushroom blend (reishi, lion's mane, etc.)</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">Hormones, Heart, Energy &amp; Calm</h3>
      <table>
        <thead><tr><th>Product</th><th>Size / Form</th><th>Use case</th></tr></thead>
        <tbody>
          <tr><td><strong>Ashwagandha Extract 1000mg</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>60 caps</td><td>Stress / calm — <span class="badge badge-soldout">Out of stock</span></td></tr>
          <tr><td><strong>Maca Root 1000mg</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>60 caps</td><td>Hormonal balance — <span class="badge badge-soldout">Out of stock</span></td></tr>
          <tr><td><strong>Thyroid &amp; Adrenal Support</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>capsules</td><td>Fatigue / stress</td></tr>
          <tr><td><strong>Men's Romance</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>60 caps</td><td>Libido / energy — Horny Goat Weed, Maca, Tongkat Ali</td></tr>
          <tr><td><strong>B-12 Energy Booster</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>capsules</td><td>Energy / mid-afternoon slump</td></tr>
          <tr><td><strong>Blood Pressure Support</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>120 caps</td><td>Hibiscus, juniper, garlic, green tea blend</td></tr>
          <tr><td><strong>D3 &amp; K2 Vitamin (Capsule)</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>capsules</td><td>Bone, immune, heart</td></tr>
          <tr><td><strong>D3 &amp; K2 Vitamin (Drops)</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>liquid</td><td>Same combo, drop format</td></tr>
          <tr><td><strong>DiaBtea</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>45 tea bags</td><td>Rosemary + olive leaf, sourced from Türkiye</td></tr>
          <tr><td><strong>Kidney Support Premium</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>30 caps</td><td>Vitamins + antioxidants + probiotics</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">Bundles &amp; Tools</h3>
      <table>
        <thead><tr><th>Product</th><th>Type</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td><strong>Health Pack Trio · Spring Reset</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td><span class="badge badge-bundle">Bundle</span></td><td>Metabolism + glucose + nerve health (10 ingredients)</td></tr>
          <tr><td><strong>Health Pack Trio · Metabolic Health</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td><span class="badge badge-bundle">Bundle</span></td><td>Glucose + antioxidants stack</td></tr>
          <tr><td><strong>Health Trio Pack · Green Monday</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td><span class="badge badge-bundle">Bundle</span></td><td>Glucose + antioxidants — seasonal naming</td></tr>
          <tr><td><strong>Immune Support Pack</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td><span class="badge badge-bundle">Bundle</span></td><td>Antioxidants + immune support</td></tr>
          <tr><td><strong>NDA Month: Health Pack Trio</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td><span class="badge badge-bundle">Bundle</span></td><td>National Diabetes Awareness Month seasonal</td></tr>
          <tr><td><strong>Stelo Glucose Biosensor</strong> by Dexcom<br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>Tool · 3rd-party</td><td>Continuous glucose monitor — <span class="badge badge-soldout">Sold out</span></td></tr>
          <tr><td><strong>Professional Ionic Foot Spa</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>Tool · Super Duty</td><td>Highest-priced SKU on the line — wellness device, not a supplement</td></tr>
          <tr><td><strong>Diabetic Diet Guide</strong><br><span style="font-size:12px;color:var(--sm-text-muted)"><a href="https://www.sugarmds.com/collections/all" target="_blank" rel="noopener" style="color:var(--sm-link);text-decoration:underline">View product page for current pricing →</a></span></td><td>Hardcover Book</td><td>Dr. Ergin's compact guide, often included as a free promo bundle</td></tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">CX · Out-of-stock SKUs</span>
        <p>Several legacy SKUs ride <strong>"Notify Me When Available"</strong> rather than the cart button. As of the latest catalog pull this includes: <strong>Berberine Premium 1200mg</strong>, <strong>Alpha Lipoic Acid 600mg</strong>, <strong>Ashwagandha 1000mg</strong>, <strong>Maca Root 1000mg</strong>, and the <strong>Stelo CGM</strong>. Don't promise an in-stock date — the brand team manages restocks and timing varies. Push customers to the email-capture flow on the product page so they're notified the moment it's back. If the customer is upset about a long wait, suggest an in-stock alternative within the same category (e.g., Super Berberine is the active substitute for Berberine Premium).</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">CX · Type 2 Diabetes &amp; medication questions</span>
        <p>Customers will ask "can I take this with metformin?" or "will this replace my insulin?" or "is this safe with my prescription?" <strong>Never give medical advice.</strong> The right answer every time: "I can't make a medical recommendation — please bring this up with your doctor or pharmacist before starting any new supplement, especially if you're on prescription medication." Then offer the product page or PDF spec sheet so they have something to print and bring to the appointment. Escalate to <strong>CX Supervisor</strong> if the customer pushes back or describes a concerning symptom.</p>
      </div>

      <div class="team-callout brand">
        <span class="team-tag">Brand · Hero SKU triage</span>
        <p>If a customer doesn't know where to start, the default recommendation order is: <strong>(1) Advanced Glucose Support</strong> for newly-diagnosed pre-diabetic / early Type 2 looking for a comprehensive starter, <strong>(2) GlucoDefense</strong> for someone who tried Advanced and found it strong (gentler 6-week formula), <strong>(3) Super Berberine</strong> for the customer who specifically asked about berberine. Push toward the <strong>Health Pack Trios</strong> for anyone who wants a full protocol rather than a single bottle — higher AOV, better outcomes, fewer follow-up "is this working?" calls.</p>
      </div>

    </div>
  </div>
</section>

<!-- 03 — VISION, MISSION & PILLARS -->
<section id="vision">
  <div class="card collapsible" data-section="vision">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">03 · Vision, Mission &amp; Brand Pillars</span>
        <h2>What We Stand For</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <div class="statement">
        <div class="statement-label">Purpose · the why</div>
        <p>SugarMD exists to provide individuals with diabetes <strong>natural, science-backed solutions</strong> for managing their health, while promoting <strong>transparency, trust, and education</strong> in their journey.</p>
      </div>

      <div class="statement">
        <div class="statement-label">Vision · the how</div>
        <p>To become the <strong>most trusted brand in holistic diabetes management</strong> by combining nature and science to empower customers and transform their health, with a focus on empathy and transparency.</p>
      </div>

      <div class="statement">
        <div class="statement-label">Mission · the what</div>
        <p>SugarMD delivers <strong>clean, effective, and research-driven supplements</strong> to help individuals manage diabetes naturally. Our mission is to provide reliable, natural alternatives that instill trust, backed by science and compassion.</p>
      </div>

      <h3 style="margin-top:28px">Mission, the short copy version</h3>
      <p style="font-family:'Fraunces',serif;font-style:italic;font-size:1.2rem;color:var(--sm-sage-deep);border-left:4px solid var(--sm-gold);padding:8px 16px;margin:8px 0 22px">"Natural diabetes solutions that combine scientific rigor with compassionate care."</p>
      <p>Use the short copy version anywhere a tagline-length statement is needed: footer of an email, the bottom of a landing page, an Instagram bio. Use the full mission for press/about copy, recruiting materials, and partner decks.</p>

      <h3 style="margin-top:24px">The elevator pitch</h3>
      <p>"SugarMD offers natural, scientifically proven supplements designed specifically for diabetes management. We aim to empower our customers with trust, transparency, and reliable solutions that address their health needs naturally."</p>

      <h3 style="margin-top:24px">The six brand pillars</h3>
      <div class="pillars">
        <div class="pillar">
          <span class="pillar-icon">🧪</span>
          <h4>Doctor-Formulated, Not Trend-Driven</h4>
          <p>Every SKU is formulated by Dr. Ergin, a board-certified endocrinologist. Not by a marketing team chasing TikTok ingredients.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🌱</span>
          <h4>Natural, Plant-Based Ingredients</h4>
          <p>Plant-based formulations sourced for purity. Non-GMO, GMP-certified, third-party tested for pesticides and heavy metals.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">📜</span>
          <h4>Radical Transparency</h4>
          <p>Lab-tested for purity, ingredient lists you can actually read, claims you can trace. No proprietary blend hand-waving.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🧠</span>
          <h4>Education First</h4>
          <p>900K+ YouTube subscribers, books, the Diabetic Diet Guide, weekly blog content. We teach, then we sell — never the other way around.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">❤️</span>
          <h4>Compassionate Care</h4>
          <p>Diabetes is a chronic condition that touches every part of a person's life. Our voice meets that emotional weight, not just the metabolic numbers.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🌿</span>
          <h4>Holistic, Not Replacement</h4>
          <p>Supplements are one piece of the puzzle alongside diet, movement, sleep, and medical care. Never positioned as a replacement for prescriptions.</p>
        </div>
      </div>

      <div class="team-callout brand">
        <span class="team-tag">Brand · The "compassion test"</span>
        <p>Before publishing any campaign, product description, email, or PDP block, ask: <strong>does this sound like it was written by someone who has actually sat with a diabetic patient?</strong> If a piece feels purely transactional or clinical, it's probably wrong. The strongest SugarMD copy acknowledges the emotional weight of the diagnosis ("you've been told to manage this for the rest of your life") before delivering the science ("here's what berberine does at clinical dosages"). When in doubt, push it back to the brand lead — empathy is the moat, and it's the easiest thing to lose.</p>
      </div>

      <h3 style="margin-top:24px">What we stand against</h3>
      <table>
        <thead><tr><th>What we reject</th><th>Why we reject it</th><th>Our stand instead</th></tr></thead>
        <tbody>
          <tr><td><strong>Magic-bullet diabetes claims</strong> ("reverse diabetes in 30 days!")</td><td>Builds false hope, attracts the wrong audience, gets the brand into FTC and FDA trouble</td><td>Honest claims about <em>support</em>, <em>healthy ranges</em>, <em>complement to medical care</em>. Never "cure," never "reverse."</td></tr>
          <tr><td><strong>Generic vitamin-aisle commodities</strong> (Costco / Amazon Basics multivitamins)</td><td>Under-dosed, untested, not designed for diabetic biochemistry (e.g., iron in multis is bad for many diabetics)</td><td>Diabetes-aware formulation. DiaVitamin has no added iron specifically because of this.</td></tr>
          <tr><td><strong>Influencer-led "miracle" supplements</strong> sold without medical authority</td><td>Customers in our category have already been burned by these and are skeptical of new supplements</td><td>Doctor-formulated, with Dr. Ergin's name and credentials on every SKU. Authority is the moat.</td></tr>
          <tr><td><strong>Cold, transactional clinical-pharma tone</strong></td><td>Customers managing chronic conditions need warmth, not a doctor's-office checklist</td><td>"Compassionate, science-backed" — both halves matter equally. Empathy first, science second.</td></tr>
        </tbody>
      </table>

    </div>
  </div>
</section>

<!-- 04 — BRAND VOICE & TONE -->
<section id="voice">
  <div class="card collapsible" data-section="voice">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">04 · Brand Voice &amp; Tone</span>
        <h2>How SugarMD Sounds</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>SugarMD's voice has <strong>seven modes</strong>, all of which can show up in the same piece of copy. The brand isn't picking one — it's blending them. Empathy without science is wellness fluff. Science without empathy is a cold pharmacy aisle. <strong>Both halves, every time.</strong></p>

      <p style="font-family:'Fraunces',serif;font-style:italic;font-size:1.15rem;color:var(--sm-sage-deep);border-left:4px solid var(--sm-gold);padding:8px 16px;margin:8px 0 22px">Voice modes: <strong>Empathetic · Supportive · Educational · Trustworthy · Inspirational · Relatable · Science-Driven</strong><br>Tone words: <strong>Warm · Reassuring · Friendly · Honest · Encouraging · Professional · Uplifting</strong></p>

      <h3>The seven voice modes — when to use each</h3>
      <div class="tone-grid">
        <div class="tone">
          <div class="tone-label">❤️ Empathetic</div>
          <div class="tone-desc">Acknowledge the emotional weight of managing diabetes. The customer is not a data point.</div>
          <div class="tone-ex">"Getting a diabetes diagnosis can feel overwhelming. You're not alone, and you don't have to figure this out by yourself."</div>
        </div>
        <div class="tone">
          <div class="tone-label">🤝 Supportive</div>
          <div class="tone-desc">Be the trusted partner on the journey. Offer guidance, resources, encouragement.</div>
          <div class="tone-ex">"Small, consistent steps add up. Here's a 7-day starter plan you can actually stick with."</div>
        </div>
        <div class="tone">
          <div class="tone-label">📚 Educational</div>
          <div class="tone-desc">Break down complex topics into actionable, plain-language information.</div>
          <div class="tone-ex">"Berberine works on the same metabolic pathway as metformin — here's what that actually means for your blood sugar."</div>
        </div>
        <div class="tone">
          <div class="tone-label">🛡️ Trustworthy</div>
          <div class="tone-desc">Transparent, honest, evidence-led. Acknowledge limits where they exist.</div>
          <div class="tone-ex">"Supplements don't replace your medication. They can support what you're already doing — and here's the research behind why."</div>
        </div>
        <div class="tone">
          <div class="tone-label">✨ Inspirational</div>
          <div class="tone-desc">Hope and motivation. Real stories. Future-focused, not problem-focused.</div>
          <div class="tone-ex">"Six months ago, Maria's A1C was creeping up. Today, with her doctor and a few daily habits, it's holding steady. Progress, not perfection."</div>
        </div>
        <div class="tone">
          <div class="tone-label">💬 Relatable</div>
          <div class="tone-desc">Conversational, friendly, human. Speak like a person, not a pharmacist.</div>
          <div class="tone-ex">"Look — managing blood sugar isn't glamorous. It's reading labels, planning meals, and remembering your supplements. We're here to make all three easier."</div>
        </div>
        <div class="tone">
          <div class="tone-label">🧪 Science-Driven</div>
          <div class="tone-desc">Evidence-based, simplified. Cite the research without drowning in jargon.</div>
          <div class="tone-ex">"A 2021 randomized trial in <em>Diabetology &amp; Metabolic Syndrome</em> found GlycaCare-II reduced fasting glucose comparably to standard medication. That's why it's in our Advanced Glucose Support."</div>
        </div>
      </div>

      <h3 style="margin-top:28px">Voice Do / Don't (consolidated)</h3>
      <div class="do-dont">
        <div class="do">
          <h4>✅ DO</h4>
          <ul>
            <li>Use a warm, caring tone — even in transactional emails</li>
            <li>Validate the struggles of managing diabetes (it's a chronic, daily commitment)</li>
            <li>Simplify complex topics with relatable analogies</li>
            <li>Back claims with research and link to it where possible</li>
            <li>Use motivational language and share real success stories</li>
            <li>Speak directly to the customer — "you," not "users"</li>
            <li>Be transparent about what supplements <em>can</em> and <em>cannot</em> do</li>
            <li>Acknowledge limitations honestly</li>
          </ul>
        </div>
        <div class="dont">
          <h4>❌ DON'T</h4>
          <ul>
            <li>Use cold, clinical, or overly formal language</li>
            <li>Be dismissive or judgmental of customer concerns</li>
            <li>Make exaggerated or "magic bullet" claims</li>
            <li>Use medical jargon without explaining it</li>
            <li>Sugarcoat product information or hide caveats</li>
            <li>Be condescending or preachy</li>
            <li>Promise to "cure" or "reverse" diabetes (FDA + ethics violation)</li>
            <li>Sound like a pharmacy — sound like Dr. Ergin</li>
          </ul>
        </div>
      </div>

      <h3 style="margin-top:24px">Channel-specific tone guidance</h3>
      <table>
        <thead><tr><th>Channel</th><th>Lead voice modes</th><th>Tone</th><th>Length</th></tr></thead>
        <tbody>
          <tr><td><strong>Product pages (PDP)</strong></td><td>Science-Driven, Trustworthy, Educational</td><td>Confident, evidence-led, with empathy hooks</td><td>Medium — 4–6 benefit bullets, ingredient story, citations</td></tr>
          <tr><td><strong>Email — welcome / nurture</strong></td><td>Empathetic, Supportive, Relatable</td><td>Warm, conversational, like a knowledgeable friend</td><td>Short — 80–150 words; one CTA</td></tr>
          <tr><td><strong>Email — promo</strong></td><td>Relatable, Inspirational, Trustworthy</td><td>Encouraging, never urgent or hype-y</td><td>Short — discount + benefit + CTA</td></tr>
          <tr><td><strong>SMS</strong></td><td>Relatable, Supportive</td><td>Friendly, brief, no jargon</td><td>Very short — under 160 chars</td></tr>
          <tr><td><strong>Social — Instagram / Facebook</strong></td><td>Educational, Inspirational, Relatable</td><td>Warm, hopeful, real-talk</td><td>Caption: 2–4 sentences; carousel: more</td></tr>
          <tr><td><strong>Social — TikTok</strong></td><td>Educational, Relatable</td><td>Quick, conversational, low-production</td><td>Hook in first 3 seconds; 15–60 seconds total</td></tr>
          <tr><td><strong>YouTube (Dr. Ergin)</strong></td><td>Educational, Science-Driven, Trustworthy</td><td>Authoritative but accessible — Dr. Ergin's natural register</td><td>5–15 minutes typically; long-form for deep dives</td></tr>
          <tr><td><strong>Blog</strong></td><td>Educational, Trustworthy, Science-Driven</td><td>Helpful, comprehensive, sourced</td><td>1,200–2,500 words for SEO posts</td></tr>
          <tr><td><strong>Customer service (CX)</strong></td><td>Empathetic, Supportive, Trustworthy</td><td>Warm and patient — the customer may be in a hard moment</td><td>As long as it takes; no rushed scripts</td></tr>
        </tbody>
      </table>

      <div class="team-callout marketing">
        <span class="team-tag">Marketing · The "Dr. Ergin test"</span>
        <p>Before publishing any campaign asset, ask: <strong>could Dr. Ergin say this in his clinic?</strong> If a customer were sitting across the desk, would he use these words? If a piece of copy fails that test — too hype-y, too promise-y, too cold, too generic — rewrite it. The brand's authority lives in his voice. Diluting it is the single fastest way to erode the moat that makes SugarMD work.</p>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">Creative · Avoid "wellness brand" cliché</span>
        <p>SugarMD is not Goop. SugarMD is not a luxury crystals-and-aromatherapy aesthetic. The brand looks and sounds like <strong>a doctor's office that happens to be warm and personal</strong> — sage greens, warm cream, gold accents, Dr. Ergin's actual face on real video. Don't reach for forest-bathing imagery, white-marble countertops, or "high-vibe" copy. Every visual choice should pair "natural" with "credible." If something looks like it could sell candles, push back.</p>
      </div>

    </div>
  </div>
</section>

<!-- 05 — PERSONALITY & ADJECTIVES -->
<section id="personality">
  <div class="card collapsible" data-section="personality">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">05 · Personality &amp; Adjectives</span>
        <h2>Who SugarMD Is</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>If SugarMD were a person, they'd be the doctor everyone wishes they had — the one who sits down, makes eye contact, and explains things in language that makes sense. Knowledgeable, but not above you. Honest, but not blunt. Hopeful, but never hype-y. <strong>Compassionate · Reliable · Empowering · Educational</strong> — those four words define the personality and should be visible in every piece of brand expression.</p>

      <h3>The brand adjectives</h3>
      <div class="feature-grid">
        <div class="feature-tile"><span class="feature-tile-icon">❤️</span><h4>Compassionate</h4><p>We feel for the customer. Diabetes is hard. We treat people like patients, not orders.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🛡️</span><h4>Reliable</h4><p>Lab-tested, doctor-formulated, consistent. The customer can trust what's in the bottle.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">⚡</span><h4>Empowering</h4><p>We give customers tools and knowledge to take control of their health, not dependence on us.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">📚</span><h4>Educational</h4><p>Teaching is the brand's first job. The product is the second job. Always in that order.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🩺</span><h4>Authoritative</h4><p>Dr. Ergin's credentials. Endocrinologist-led. We earn the right to make claims.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🌿</span><h4>Natural</h4><p>Plant-based, clean, ingredient-forward. Nature meets science, not nature instead of science.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🤝</span><h4>Approachable</h4><p>Conversational, not clinical. We use words real people use, not lab vocabulary.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">✨</span><h4>Hopeful</h4><p>The diagnosis isn't the end. We focus on what's possible, not what's lost.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🧪</span><h4>Evidence-Led</h4><p>Citations matter. Research backs every claim. Skepticism is welcomed and answered.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🪨</span><h4>Steady</h4><p>No fads, no panic, no FOMO marketing. Long-term thinking, every time.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">🫶</span><h4>Personal</h4><p>Founded on Dr. Ergin's mother's story. The "we" includes the customer's family too.</p></div>
        <div class="feature-tile"><span class="feature-tile-icon">📣</span><h4>Honest</h4><p>What works. What doesn't. What's still being studied. We say all three.</p></div>
      </div>

      <h3 style="margin-top:28px">Brand archetypes</h3>
      <p>Per the brand guidelines doc, SugarMD operates from <strong>two primary archetypes</strong> blended together — Caregiver + Sage — with <strong>Innocent</strong> and <strong>Hero</strong> as supporting registers. The blend is what makes the brand work; over-indexing on any one archetype breaks the formula.</p>

      <div class="pillars">
        <div class="pillar">
          <span class="pillar-icon">❤️</span>
          <h4>The Caregiver <span style="color:var(--sm-gold-deep);font-size:.8em">· primary</span></h4>
          <p><strong>Core desire:</strong> To care for and protect others. <strong>Promise:</strong> Compassionate, holistic solutions that make managing diabetes feel less lonely. <strong>Watch for:</strong> drifting into pity or over-coddling — the customer is capable, just supported.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🦉</span>
          <h4>The Sage <span style="color:var(--sm-gold-deep);font-size:.8em">· primary</span></h4>
          <p><strong>Core desire:</strong> To guide and inspire with expertise and wisdom. <strong>Promise:</strong> Clear, science-backed information that helps customers make informed decisions. <strong>Watch for:</strong> drifting into lecture mode — the Sage teaches with humility, not from a podium.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🌱</span>
          <h4>The Innocent <span style="color:var(--sm-gold-deep);font-size:.8em">· supporting</span></h4>
          <p><strong>Core desire:</strong> Purity, simplicity, life done right. <strong>Promise:</strong> Clean, natural products that align with how the customer wants to live. <strong>Watch for:</strong> drifting into "natural is always better" simplicity that contradicts the Sage's evidence-led posture.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🏔️</span>
          <h4>The Hero <span style="color:var(--sm-gold-deep);font-size:.8em">· supporting</span></h4>
          <p><strong>Core desire:</strong> To prove oneself by overcoming a challenge. <strong>Promise:</strong> Empowering customers to take control of their health, not surrender to the diagnosis. <strong>Watch for:</strong> drifting into "fight your diabetes" militarism — empowerment isn't aggression.</p>
        </div>
      </div>

      <div class="team-callout brand">
        <span class="team-tag">Brand · How the archetypes blend</span>
        <p>The Caregiver opens the conversation ("we know this is hard"), the Sage delivers the substance ("here's what the research shows"), the Innocent describes the product ("clean, plant-based, lab-tested"), and the Hero closes with possibility ("you can do this — here's how"). When a piece of brand expression is failing, it's almost always because <strong>one archetype is missing</strong> rather than because the wrong one is present. Diagnose by archetype before rewriting from scratch.</p>
      </div>

    </div>
  </div>
</section>

<!-- 06 — VISUAL IDENTITY -->
<section id="visual">
  <div class="card collapsible" data-section="visual">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">06 · Visual Identity</span>
        <h2>Color, Type, Logo, Imagery</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>The visual system pairs <strong>natural earth tones</strong> (sage, cream, warm gold) with <strong>clinical credibility cues</strong> (deep teal, crisp typography, Dr. Ergin's actual portrait). The look says: <em>this is a doctor who happens to care about your whole life, not just your prescription</em>. Not Whole Foods. Not pharmaceuticals. The space in between.</p>

      <h3>Color palette</h3>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:12px;margin-top:16px">
        <div style="border-radius:10px;overflow:hidden;border:1px solid rgba(31,37,32,.1);background:#fff">
          <div style="height:80px;background:#5A7A5E"></div>
          <div style="padding:10px 12px;font-size:12px"><div style="font-weight:700;color:var(--sm-charcoal)">Sage Green</div><div style="font-family:'DM Mono',monospace;color:var(--sm-text-muted)">#5A7A5E</div><div style="color:var(--sm-text-muted);margin-top:4px;font-size:11px">Primary surface · hero base</div></div>
        </div>
        <div style="border-radius:10px;overflow:hidden;border:1px solid rgba(31,37,32,.1);background:#fff">
          <div style="height:80px;background:#3F5A44"></div>
          <div style="padding:10px 12px;font-size:12px"><div style="font-weight:700;color:var(--sm-charcoal)">Sage Deep</div><div style="font-family:'DM Mono',monospace;color:var(--sm-text-muted)">#3F5A44</div><div style="color:var(--sm-text-muted);margin-top:4px;font-size:11px">Headers · depth · CTAs</div></div>
        </div>
        <div style="border-radius:10px;overflow:hidden;border:1px solid rgba(31,37,32,.1);background:#fff">
          <div style="height:80px;background:#C9A24A"></div>
          <div style="padding:10px 12px;font-size:12px"><div style="font-weight:700;color:var(--sm-charcoal)">Warm Gold</div><div style="font-family:'DM Mono',monospace;color:var(--sm-text-muted)">#C9A24A</div><div style="color:var(--sm-text-muted);margin-top:4px;font-size:11px">Accent · CTAs · highlights</div></div>
        </div>
        <div style="border-radius:10px;overflow:hidden;border:1px solid rgba(31,37,32,.1);background:#fff">
          <div style="height:80px;background:#F5EDD8"></div>
          <div style="padding:10px 12px;font-size:12px"><div style="font-weight:700;color:var(--sm-charcoal)">Warm Cream</div><div style="font-family:'DM Mono',monospace;color:var(--sm-text-muted)">#F5EDD8</div><div style="color:var(--sm-text-muted);margin-top:4px;font-size:11px">Page background</div></div>
        </div>
        <div style="border-radius:10px;overflow:hidden;border:1px solid rgba(31,37,32,.1);background:#fff">
          <div style="height:80px;background:#2D6363"></div>
          <div style="padding:10px 12px;font-size:12px"><div style="font-weight:700;color:var(--sm-charcoal)">Clinical Teal</div><div style="font-family:'DM Mono',monospace;color:var(--sm-text-muted)">#2D6363</div><div style="color:var(--sm-text-muted);margin-top:4px;font-size:11px">Authority moments</div></div>
        </div>
        <div style="border-radius:10px;overflow:hidden;border:1px solid rgba(31,37,32,.1);background:#fff">
          <div style="height:80px;background:#A8552E"></div>
          <div style="padding:10px 12px;font-size:12px"><div style="font-weight:700;color:var(--sm-charcoal)">Warm Rust</div><div style="font-family:'DM Mono',monospace;color:var(--sm-text-muted)">#A8552E</div><div style="color:var(--sm-text-muted);margin-top:4px;font-size:11px">Vital · alert · "new"</div></div>
        </div>
        <div style="border-radius:10px;overflow:hidden;border:1px solid rgba(31,37,32,.1);background:#fff">
          <div style="height:80px;background:#1F2520"></div>
          <div style="padding:10px 12px;font-size:12px"><div style="font-weight:700;color:var(--sm-charcoal)">Charcoal</div><div style="font-family:'DM Mono',monospace;color:var(--sm-text-muted)">#1F2520</div><div style="color:var(--sm-text-muted);margin-top:4px;font-size:11px">Body type</div></div>
        </div>
        <div style="border-radius:10px;overflow:hidden;border:1px solid rgba(31,37,32,.1);background:#fff">
          <div style="height:80px;background:#FBF5E4"></div>
          <div style="padding:10px 12px;font-size:12px"><div style="font-weight:700;color:var(--sm-charcoal)">Paper</div><div style="font-family:'DM Mono',monospace;color:var(--sm-text-muted)">#FBF5E4</div><div style="color:var(--sm-text-muted);margin-top:4px;font-size:11px">Card surfaces</div></div>
        </div>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">Creative · Color hierarchy</span>
        <p>Sage Green and Warm Cream do most of the heavy lifting (background, surfaces). Warm Gold is the <strong>only color that should appear on a CTA</strong> — buttons, "Add to Cart," highlight bars, badge accents. Clinical Teal is reserved for authority moments (Dr. Ergin's bio band, lab-test certificates, citation blocks). Warm Rust is for "new product" badges and vital alerts only — using it broadly will make the palette feel cluttered. <strong>If a design has more than 3 colors visible at once, simplify.</strong></p>
      </div>

      <h3 style="margin-top:24px">Typography</h3>
      <table>
        <thead><tr><th>Role</th><th>Typeface</th><th>Where it shows up</th></tr></thead>
        <tbody>
          <tr><td><strong>Display / Brand wordmark</strong></td><td>Gullia (per brand guidelines)</td><td>Logo lockup, hero headlines, large brand callouts</td></tr>
          <tr><td><strong>Headlines &amp; subheads</strong></td><td>Fraunces (web fallback for Gullia in this hub)</td><td>Section titles, statement quotes, pulled-quote moments</td></tr>
          <tr><td><strong>Body copy</strong></td><td>Libre Franklin (per brand guidelines) / Inter (web)</td><td>Paragraph text, PDP descriptions, blog body</td></tr>
          <tr><td><strong>Mono / data / tags</strong></td><td>DM Mono</td><td>Eyebrows, badges, lab-result data, code numbers</td></tr>
        </tbody>
      </table>
      <p style="font-size:13px;color:var(--sm-text-muted);font-style:italic">The brand guidelines doc names <strong>Gullia (primary)</strong> and <strong>Libre Franklin (secondary)</strong>. Gullia is a paid display face used in print and packaging; Fraunces is a free Google-Fonts substitute used in this hub and on the web where Gullia licensing isn't loaded.</p>

      <h3 style="margin-top:24px">Logo</h3>
      <p>The current SugarMD logo lives at <a href="https://www.sugarmds.com/cdn/shop/files/imgi_1_Logo_Atoms_1.svg?v=1775143981" target="_blank" rel="noopener">the Shopify CDN</a>. The full asset library — including reversed (light-on-dark), monochrome, packaging variants, and lockups with Dr. Ergin — is maintained by the Brand Lead in the Inventel shared drive. <strong>Don't recreate the logo or use found copies from screenshots</strong> — request the official asset.</p>

      <h3 style="margin-top:18px">Logo Do / Don't</h3>
      <div class="do-dont">
        <div class="do">
          <h4>✅ DO</h4>
          <ul>
            <li>Use the official SVG/PNG from the asset library</li>
            <li>Maintain clear space: minimum padding equal to the height of the "S" on all sides</li>
            <li>Use the reversed (cream/gold on sage) version on dark backgrounds</li>
            <li>Use minimum sizes: 155px web, 1" print for primary; 60% scale for compact lockups</li>
            <li>Pair with sage, cream, or paper backgrounds — high contrast</li>
          </ul>
        </div>
        <div class="dont">
          <h4>❌ DON'T</h4>
          <ul>
            <li>Stretch, skew, or rotate the logo</li>
            <li>Recolor outside the approved palette (sage, cream, gold, white)</li>
            <li>Place on busy backgrounds without a solid color block behind it</li>
            <li>Add drop shadows, glows, or filter effects</li>
            <li>Crop or remove the wordmark below 60% scale</li>
            <li>Use the old/legacy logo — always pull from the latest asset library</li>
          </ul>
        </div>
      </div>

      <h3 style="margin-top:24px">Photography &amp; imagery</h3>
      <div class="do-dont">
        <div class="do">
          <h4>✅ Photography that's on-brand</h4>
          <ul>
            <li>Dr. Ergin in clinical settings — his actual face is the brand</li>
            <li>Real customers, real kitchens, real meal prep — not stock</li>
            <li>Product on natural surfaces: wood, stone, linen, fresh produce</li>
            <li>Warm natural light — golden hour, soft window light</li>
            <li>Active mid-life people doing real-life things (not athletic models)</li>
            <li>Hands holding the bottle — human scale, never floating</li>
          </ul>
        </div>
        <div class="dont">
          <h4>❌ Photography to avoid</h4>
          <ul>
            <li>White-marble-countertop "luxury wellness" aesthetic</li>
            <li>Fitness model abs, athletic transformation imagery</li>
            <li>Stock photos of "doctor with stethoscope" looking generic</li>
            <li>Cold blue clinical pharmacy lighting</li>
            <li>Crystals, sage smudge sticks, woo-woo wellness tropes</li>
            <li>Hyper-stylized, over-edited, magazine-perfect imagery</li>
          </ul>
        </div>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">Creative · The Dr. Ergin asset is the moat</span>
        <p>Dr. Ergin's actual face, voice, and story are the single most valuable visual asset the brand has. Use his image whenever credibility is on the line — PDP "Doctor-Formulated" badges, About page hero, founding-story landing pages, ad creative for new audiences. Do <strong>not</strong> use stock-photo "doctors" — customers can spot it instantly and the trust collapses. If a campaign needs a doctor figure and Dr. Ergin isn't available, escalate to the Brand Lead before defaulting to stock.</p>
      </div>

    </div>
  </div>
</section>

<!-- 07 — TARGET AUDIENCE & PERSONAS -->
<section id="audience">
  <div class="card collapsible" data-section="audience">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">07 · Target Audience &amp; Customer Personas</span>
        <h2>Who We're Talking To</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>SugarMD speaks primarily to <strong>adults aged 35–65 living with pre-diabetes, Type 2 diabetes, or caring for a family member with diabetes</strong>. They're skeptical of marketing claims (often burned before), interested in natural alternatives but not anti-medication, and overwhelmed by the volume of conflicting health advice online. They want a trustworthy guide — not another bottle.</p>

      <h3>Audience profile snapshot</h3>
      <table>
        <thead><tr><th>Attribute</th><th>Most-likely customer</th></tr></thead>
        <tbody>
          <tr><td>Age</td><td>35–65, with the core in 45–60</td></tr>
          <tr><td>Gender</td><td>Roughly even split, slight skew female (caregiver role)</td></tr>
          <tr><td>Health status</td><td>Pre-diabetic, Type 2 diabetic, or caring for a parent/spouse who is</td></tr>
          <tr><td>Income</td><td>Middle to upper-middle — willing to spend $25–$50 on a supplement that works</td></tr>
          <tr><td>Mindset</td><td>Skeptical of trends, open to natural support, respects medical authority</td></tr>
          <tr><td>Where they research</td><td>YouTube (especially Dr. Ergin's channel), Reddit, Healthline, Mayo Clinic, friends/family</td></tr>
          <tr><td>What they fear</td><td>Becoming dependent on more medication; not being there for grandkids; losing independence</td></tr>
          <tr><td>What they want</td><td>Steady control, more energy, hope, a trustworthy guide, dignity in the diagnosis</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">The four personas</h3>
      <p>Per the brand guidelines, four named personas represent the core audience. Use these in creative briefs, ad targeting decisions, and journey planning — they're not demographics, they're <strong>psychographic anchors</strong>.</p>

      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px;margin-top:18px">
        <div style="background:linear-gradient(135deg,#fff 0%,var(--sm-cream-deep) 100%);padding:22px;border-radius:12px;border-top:4px solid var(--sm-gold)">
          <div style="font-family:'Fraunces',serif;font-weight:700;font-size:1.2rem;color:var(--sm-sage-deep);margin-bottom:4px">Laura · 40s</div>
          <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;margin-bottom:10px">The newly-diagnosed multitasker</div>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px"><strong>Bio:</strong> Married, two kids (10 and 14), eighth-grade teacher. Recently diagnosed pre-diabetic after fatigue and dizziness during workdays. Skips meals, relies on processed food for convenience.</p>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px"><strong>Goal:</strong> Avoid medication. Manage diabetes naturally without adding complexity to an already packed life.</p>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:0"><strong>What she needs from us:</strong> Easy-to-follow daily protocols, no medical jargon, simple meal-plan content, supplements that fit her schedule.</p>
        </div>
        <div style="background:linear-gradient(135deg,#fff 0%,var(--sm-cream-deep) 100%);padding:22px;border-radius:12px;border-top:4px solid var(--sm-gold)">
          <div style="font-family:'Fraunces',serif;font-weight:700;font-size:1.2rem;color:var(--sm-sage-deep);margin-bottom:4px">Marie · 50s</div>
          <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;margin-bottom:10px">The caregiver in the middle</div>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px"><strong>Bio:</strong> Married, full-time office admin, caring for her 78-year-old mother who has diabetes. Stretched thin between work, caregiving, and her own health.</p>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px"><strong>Goal:</strong> Keep her mother's diabetes well-managed without complications. Reduce her own caregiving stress. Stay healthy herself.</p>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:0"><strong>What she needs from us:</strong> Easy-to-administer products, caregiver-friendly content, supplements and resources she can <em>send</em> to her mother.</p>
        </div>
        <div style="background:linear-gradient(135deg,#fff 0%,var(--sm-cream-deep) 100%);padding:22px;border-radius:12px;border-top:4px solid var(--sm-gold)">
          <div style="font-family:'Fraunces',serif;font-weight:700;font-size:1.2rem;color:var(--sm-sage-deep);margin-bottom:4px">Adam · 30s</div>
          <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;margin-bottom:10px">The clean-living skeptic</div>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px"><strong>Bio:</strong> Engaged, graphic designer for a sustainability-focused company. Type 2 diagnosis came after years of trendy high-carb diets. Active, eco-conscious, distrustful of pharma.</p>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px"><strong>Goal:</strong> Manage diabetes naturally without compromising his sustainability values. Stay off long-term medication.</p>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:0"><strong>What he needs from us:</strong> Transparent sourcing, ingredient-purity proof, alignment with holistic / clean-living values, no greenwashing.</p>
        </div>
        <div style="background:linear-gradient(135deg,#fff 0%,var(--sm-cream-deep) 100%);padding:22px;border-radius:12px;border-top:4px solid var(--sm-gold)">
          <div style="font-family:'Fraunces',serif;font-weight:700;font-size:1.2rem;color:var(--sm-sage-deep);margin-bottom:4px">David · 50s</div>
          <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;margin-bottom:10px">The medical-literate researcher</div>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px"><strong>Bio:</strong> Divorced, two adult kids, pharmacist by profession. Type 2 diagnosis came after years of overwork. Reads medical journals before buying anything. Skeptical by training.</p>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px"><strong>Goal:</strong> Find natural, evidence-backed supplementation. Avoid full pharmaceutical dependence where possible.</p>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:0"><strong>What he needs from us:</strong> Clinical research, transparent labels, no marketing fluff. Cite the studies. Show your work.</p>
        </div>
      </div>

      <h3 style="margin-top:28px">The "anti-audience" — who we don't market to</h3>
      <table>
        <thead><tr><th>Anti-audience</th><th>Why we ignore them</th></tr></thead>
        <tbody>
          <tr><td><strong>The "magic bullet" seeker</strong> looking for "lose 30lbs in 30 days" / "reverse diabetes overnight"</td><td>SugarMD is built on science, not miracles. Hype-y claims to attract this crowd would lose Adam and David instantly.</td></tr>
          <tr><td><strong>The bargain hunter</strong> shopping the Costco vitamin aisle by price</td><td>We don't compete on price. Trying to would erode the doctor-formulated premium and the Lab-Tested promise.</td></tr>
          <tr><td><strong>The anti-medicine purist</strong> who wants to "fire their doctor"</td><td>SugarMD complements medical care, never replaces it. Customers who refuse all conventional treatment are a liability.</td></tr>
          <tr><td><strong>The Type 1 diabetic</strong> seeking insulin alternatives</td><td>Type 1 is a different condition that requires insulin therapy. Our products support metabolic health but are not a substitute. We do not market to or claim benefits for Type 1.</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">Brand archetype mapped to audience</h3>
      <p>Match the archetype to the persona:</p>
      <table>
        <thead><tr><th>Persona</th><th>Lead archetype</th><th>What resonates most</th></tr></thead>
        <tbody>
          <tr><td><strong>Laura</strong> · newly-diagnosed</td><td>Caregiver</td><td>Empathy, simplicity, "you're not alone"</td></tr>
          <tr><td><strong>Marie</strong> · caregiver</td><td>Caregiver + Hero</td><td>Practical relief, products that ease her load</td></tr>
          <tr><td><strong>Adam</strong> · clean-living</td><td>Innocent + Sage</td><td>Purity, transparency, ingredient story</td></tr>
          <tr><td><strong>David</strong> · researcher</td><td>Sage</td><td>Citations, clinical data, no marketing fluff</td></tr>
        </tbody>
      </table>

      <div class="team-callout marketing">
        <span class="team-tag">Marketing · Persona-led briefs</span>
        <p>Every campaign brief should name the <strong>primary persona</strong> it's targeting. "We're talking to Laura" gives the creative team an anchor; "we're talking to women 40+" doesn't. If a brief can't pick a persona, it's probably trying to do too much — split it into two campaigns. Cross-persona campaigns (e.g., a Father's Day push targeting both David and Marie) are fine, but they need to name both anchors and explain how the message lands for each.</p>
      </div>

    </div>
  </div>
</section>

<!-- 08 — COMPETITORS & POSITIONING -->
<section id="competitors">
  <div class="card collapsible" data-section="competitors">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">08 · Competitors &amp; Positioning</span>
        <h2>Where We Sit in the Market</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>The natural-supplements-for-blood-sugar category sits at an intersection: <strong>holistic wellness brands</strong> on one side (Gaia, Cymbiotika), <strong>diabetes-specific supplements</strong> on the other (Glucocil, Sugar Defender), and <strong>generic vitamin commodities</strong> behind both (Costco, Amazon Basics). SugarMD's defensible position is the <strong>blend</strong>: doctor-formulated diabetes specificity with a holistic, education-first wellness sensibility.</p>

      <h3>The named competitors (per brand guidelines)</h3>
      <table>
        <thead><tr><th>Competitor</th><th>What they do well</th><th>Where they lose</th><th>How SugarMD wins</th></tr></thead>
        <tbody>
          <tr>
            <td><strong>Gaia Herbs</strong><br><em>Holistic herbal authority</em></td>
            <td>Full ingredient traceability seed-to-shelf, organic farming, sustainability story</td>
            <td>Niche herbal focus limits broader appeal · premium price point · not diabetes-specific</td>
            <td>We're diabetes-specific and doctor-formulated — Gaia is general-wellness. Customers managing a real diagnosis need targeted formulation, not herbal generalism.</td>
          </tr>
          <tr>
            <td><strong>Cymbiotika</strong><br><em>Premium science-backed wellness</em></td>
            <td>High-quality organic ingredients, scientific backing, clean-luxe brand</td>
            <td>Premium price ($80+) creates accessibility barrier · luxury aesthetic narrows audience · not diabetes-focused</td>
            <td>Accessible premium ($35–$50) with the same evidence-led posture, plus actual diabetes specificity. We earn David's research bar without losing Laura on price.</td>
          </tr>
          <tr>
            <td><strong>Glucocil</strong><br><em>Diabetes-specific drugstore brand</em></td>
            <td>Targeted Type 2/pre-diabetes formula, broad availability, recognized in-category</td>
            <td>Narrow diabetes-only positioning · some users report GI side effects · weak educational and brand experience</td>
            <td>We have the same diabetes specificity <em>plus</em> the broader catalog (joint, immune, energy) for the same customer's whole health, plus Dr. Ergin's authority and the YouTube education ecosystem.</td>
          </tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">The 2x2 positioning matrix</h3>
      <p>Per the brand guidelines, the category maps onto two axes:</p>
      <ul style="padding-left:24px;margin-bottom:16px">
        <li><strong>Vertical:</strong> Holistic Approach ↔ Specific Health Focus</li>
        <li><strong>Horizontal:</strong> Accessibility ↔ Premium Positioning</li>
      </ul>

      <div style="background:#fff;border:1px solid rgba(201,162,74,.25);border-radius:12px;padding:24px;margin:14px 0;font-size:14px">
        <div style="display:grid;grid-template-columns:max-content 1fr 1fr;gap:16px;align-items:center;font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;margin-bottom:8px">
          <div></div>
          <div style="text-align:center">← Accessible</div>
          <div style="text-align:center">Premium →</div>
        </div>
        <div style="display:grid;grid-template-columns:max-content 1fr 1fr;gap:16px;align-items:stretch;margin-bottom:8px">
          <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;writing-mode:vertical-rl;transform:rotate(180deg);text-align:center;padding:8px 0">↑ Holistic</div>
          <div style="background:rgba(63,90,68,.06);border:1px dashed var(--sm-sage);border-radius:8px;padding:14px;text-align:center"><strong>Gaia Herbs</strong><br><span style="font-size:12px;color:var(--sm-text-muted)">Holistic + Accessible</span></div>
          <div style="background:linear-gradient(135deg,#fff 0%,rgba(201,162,74,.18) 100%);border:2px solid var(--sm-gold);border-radius:8px;padding:14px;text-align:center"><strong style="color:var(--sm-sage-deep)">SugarMD</strong><br><span style="font-size:12px;color:var(--sm-text-muted)">Holistic + Mid-Premium</span><br><span style="display:inline-block;font-size:11px;background:var(--sm-gold);color:var(--sm-sage-deep);padding:2px 8px;border-radius:8px;font-weight:700;margin-top:6px">OUR ZONE</span></div>
        </div>
        <div style="display:grid;grid-template-columns:max-content 1fr 1fr;gap:16px;align-items:stretch">
          <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;writing-mode:vertical-rl;transform:rotate(180deg);text-align:center;padding:8px 0">Specific ↓</div>
          <div style="background:rgba(63,90,68,.06);border:1px dashed var(--sm-sage);border-radius:8px;padding:14px;text-align:center"><strong>Glucocil</strong><br><span style="font-size:12px;color:var(--sm-text-muted)">Specific + Accessible</span></div>
          <div style="background:rgba(63,90,68,.06);border:1px dashed var(--sm-sage);border-radius:8px;padding:14px;text-align:center"><strong>Cymbiotika</strong><br><span style="font-size:12px;color:var(--sm-text-muted)">Holistic-Specific + Premium-Luxury</span></div>
        </div>
      </div>

      <h3 style="margin-top:24px">Brand positioning statement</h3>
      <div class="statement">
        <div class="statement-label">Positioning statement</div>
        <p>For <strong>adults managing pre-diabetes, Type 2, or caring for someone who is</strong>, SugarMD is the <strong>doctor-formulated natural supplement brand</strong> that combines endocrinologist-led formulation with holistic, education-first care. Unlike generic vitamin-aisle commodities, luxury-priced wellness brands, or diabetes-specific drugstore SKUs, SugarMD <strong>blends real medical authority with the warmth of a trusted family doctor</strong> — at a price that lets people actually stay on the protocol.</p>
      </div>

      <div class="team-callout brand">
        <span class="team-tag">Brand · The matrix is the moat</span>
        <p>Drift in any direction loses the position. Drift up-right → we're Cymbiotika and lose accessibility. Drift down-left → we're Glucocil and lose holistic warmth. Drift up-left → we're Gaia and lose diabetes specificity. <strong>The blend is the brand.</strong> Any campaign or product decision should be checked against this matrix before it ships — if it pushes us out of the holistic-accessible-but-doctor-led quadrant, push back.</p>
      </div>

    </div>
  </div>
</section>

<!-- 09 — OBJECTION HANDLING / BATTLECARDS -->
<section id="objections">
  <div class="card collapsible" data-section="objections">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">09 · Objection Handling · Battlecards</span>
        <h2>What Customers Say · What We Say Back</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>These are the <strong>actual objections SugarMD customers raise</strong> on phone, email, social, and in PDP reviews. Each one has a scripted response written in-voice — empathetic, science-backed, never defensive. <strong>Read these before your first CX shift.</strong></p>

      <div class="team-callout cx" style="margin-top:0">
        <span class="team-tag">CX · How to use these battlecards</span>
        <p>Don't read these word-for-word like a script — that sounds robotic. Read them <em>once</em> until you understand the shape of the answer (acknowledge → educate → offer next step), then translate into your own language in the moment. The shape matters more than the exact words. <strong>If a question goes outside any of these objections, escalate.</strong></p>
      </div>

      <h3 style="margin-top:18px">1 · "Will this cure / reverse my diabetes?"</h3>
      <div style="background:#fff;border-left:4px solid var(--sm-sage-deep);padding:16px 20px;border-radius:8px;margin-bottom:18px;font-size:14px">
        <p style="margin-bottom:10px"><strong>The shape of the answer:</strong> No. Acknowledge hope. Reframe to what's possible. Defer to their doctor.</p>
        <p style="margin:0;font-style:italic;color:var(--sm-sage-deep)">"That's such a common question and I really get why you're asking. SugarMD supplements are designed to <em>support</em> healthy blood sugar levels alongside the work you and your doctor are already doing — they're not a cure for diabetes, and we'd never claim they are. What our customers tell us is that with consistent use as part of a broader plan, they often see steadier energy and better daily numbers. Always run any supplement past your doctor first, especially if you're on medication."</p>
      </div>

      <h3>2 · "I'm taking metformin / insulin / [other Rx]. Is this safe with my medication?"</h3>
      <div style="background:#fff;border-left:4px solid var(--sm-sage-deep);padding:16px 20px;border-radius:8px;margin-bottom:18px;font-size:14px">
        <p style="margin-bottom:10px"><strong>The shape of the answer:</strong> CX gives no medical advice. Period. Defer to the doctor or pharmacist every time.</p>
        <p style="margin:0;font-style:italic;color:var(--sm-sage-deep)">"Honestly, I can't make that call for you — that's a question for your doctor or pharmacist, and I'd be doing you a disservice if I tried. What I <em>can</em> send you is the full ingredient panel and supplement facts so you have something to bring to your appointment. Would that help?"</p>
        <p style="margin-top:10px;color:var(--sm-text-muted);font-size:13px"><strong>CX note:</strong> Send the PDF spec sheet from the product page. If they push for an answer, escalate to <strong>CX Supervisor</strong>.</p>
      </div>

      <h3>3 · "I tried berberine on Amazon and it didn't work — why is yours different?"</h3>
      <div style="background:#fff;border-left:4px solid var(--sm-sage-deep);padding:16px 20px;border-radius:8px;margin-bottom:18px;font-size:14px">
        <p style="margin-bottom:10px"><strong>The shape of the answer:</strong> Validate the frustration. Differentiate on bioavailability, dose, formulation. Don't trash competitors by name.</p>
        <p style="margin:0;font-style:italic;color:var(--sm-sage-deep)">"Yeah — that's a really common experience, and I wish more brands were honest about why. Two things matter with berberine: <em>dose</em> and <em>absorption</em>. A lot of cheap berberine on Amazon uses standard berberine HCl at low doses (300mg or less). Our Super Berberine uses Dihydroberberine — DHB — at clinical doses. DHB has roughly 5× the bioavailability, which means more of it actually reaches your bloodstream where it can work. Same ingredient family, very different result."</p>
      </div>

      <h3>4 · "How long until I see results?"</h3>
      <div style="background:#fff;border-left:4px solid var(--sm-sage-deep);padding:16px 20px;border-radius:8px;margin-bottom:18px;font-size:14px">
        <p style="margin-bottom:10px"><strong>The shape of the answer:</strong> Honest expectations. 6–8 weeks is realistic. Frame in terms of consistency.</p>
        <p style="margin:0;font-style:italic;color:var(--sm-sage-deep)">"Most of our customers tell us they start noticing changes around the 4–6 week mark, with more meaningful results around 8–12 weeks of consistent daily use. Supplements work gradually — they're not a quick fix. The customers who see the best outcomes are the ones who pair the supplements with steady daily habits: real food, walking, sleep. Stick with it for a full bottle before judging it."</p>
      </div>

      <h3>5 · "I saw something about an FDA recall — what happened?"</h3>
      <div class="recall-callout" style="margin:0 0 18px 0">
        <div class="recall-callout-tag">Recall objection · See section #25 for full guidance</div>
        <p style="margin-bottom:10px"><strong>The shape of the answer:</strong> Acknowledge. Don't downplay. Don't speculate. Hand off to supervisor for any specifics.</p>
        <p style="margin:0;font-style:italic;color:var(--sm-sage-deep)">"Yes — there was an FDA recall on a specific lot, and the brand took it seriously. The team complied with everything the FDA required and notified affected customers directly. If you'd like me to check whether your specific order was involved, I can do that. For anything beyond that — refund questions, ongoing concerns — I'll loop in my supervisor."</p>
        <p style="margin-top:10px;color:var(--sm-charcoal);font-size:13px"><strong>CX note:</strong> Do not improvise the timeline, the products involved, or the resolution. Section #25 covers the full handling protocol — read it carefully.</p>
      </div>

      <h3>6 · "Why is this so expensive compared to [competitor]?"</h3>
      <div style="background:#fff;border-left:4px solid var(--sm-sage-deep);padding:16px 20px;border-radius:8px;margin-bottom:18px;font-size:14px">
        <p style="margin-bottom:10px"><strong>The shape of the answer:</strong> Reframe price as cost-per-result. Highlight doctor formulation, lab testing, dose. Don't apologize.</p>
        <p style="margin:0;font-style:italic;color:var(--sm-sage-deep)">"Totally fair question. The short version: cheaper brands often skip steps that matter — proper dosing, third-party testing, formulation by an actual doctor. We pay more on the production side so customers don't end up with under-dosed pills that pass right through them. That said — if budget is tight, our subscribe-and-save takes 10–20% off, and starting with one core product (like GlucoDefense) is a smart way to test the brand without committing to a full stack."</p>
      </div>

      <h3>7 · "I'm on a fixed income — do you have a discount?"</h3>
      <div style="background:#fff;border-left:4px solid var(--sm-sage-deep);padding:16px 20px;border-radius:8px;margin-bottom:18px;font-size:14px">
        <p style="margin-bottom:10px"><strong>The shape of the answer:</strong> Offer the standing subscription discount and the new-customer offer. Use the CX goodwill code only with reason.</p>
        <p style="margin:0;font-style:italic;color:var(--sm-sage-deep)">"I hear you — I want to make sure you can stick with this without it becoming a burden. Our Subscribe &amp; Save runs 10% off for monthly, up to 20% off for every-six-months — and it's something you can cancel anytime, no penalty. We also have a first-time customer discount when you sign up for our email list. Let me see what I can put together for you."</p>
        <p style="margin-top:10px;color:var(--sm-text-muted);font-size:13px"><strong>CX note:</strong> Always check the monthly discount sheet before honoring any code. The CX goodwill code is for reasonable expired-code requests or genuine hardship — not every "got a discount?" ask. Don't volunteer it.</p>
      </div>

      <h3>8 · "Can I take this if I'm pregnant / nursing / under 18?"</h3>
      <div style="background:#fff;border-left:4px solid var(--sm-sage-deep);padding:16px 20px;border-radius:8px;margin-bottom:18px;font-size:14px">
        <p style="margin-bottom:10px"><strong>The shape of the answer:</strong> Hard no. Defer to doctor. Site disclaimer applies.</p>
        <p style="margin:0;font-style:italic;color:var(--sm-sage-deep)">"Our products aren't intended for use during pregnancy, while nursing, or by anyone under 18 — that's a firm guideline on every product page. If you're navigating gestational diabetes or any blood-sugar question during pregnancy, please work directly with your OB or endocrinologist on that — they'll be able to recommend something appropriate for your situation."</p>
      </div>

      <h3>9 · "Is this FDA approved?"</h3>
      <div style="background:#fff;border-left:4px solid var(--sm-sage-deep);padding:16px 20px;border-radius:8px;margin-bottom:18px;font-size:14px">
        <p style="margin-bottom:10px"><strong>The shape of the answer:</strong> Honest correction. Dietary supplements are regulated, not "approved." Frame the safeguards we do have.</p>
        <p style="margin:0;font-style:italic;color:var(--sm-sage-deep)">"Great question — there's a common misconception there. Dietary supplements aren't 'FDA approved' the way prescription drugs are; they're <em>regulated</em> by the FDA under different rules. What our products <em>do</em> have: GMP-certified manufacturing, third-party lab testing for purity and potency, ingredients tested for pesticides and heavy metals, and SugarMD participates in the FDA structure-and-function claim program. The label tells the truth about what's in the bottle."</p>
      </div>

      <h3>10 · "I want to cancel my subscription."</h3>
      <div style="background:#fff;border-left:4px solid var(--sm-sage-deep);padding:16px 20px;border-radius:8px;margin-bottom:0;font-size:14px">
        <p style="margin-bottom:10px"><strong>The shape of the answer:</strong> Cancel without friction. Ask once if there's a way to keep them. Never guilt-trip.</p>
        <p style="margin:0;font-style:italic;color:var(--sm-sage-deep)">"Absolutely — happy to take care of that for you. Before I do, can I ask if there's something specific that prompted the cancellation? Sometimes we can adjust the cadence, swap to a different product, or pause it for a month or two if that'd help. Either way, I'll process it right now if you'd rather just be done."</p>
        <p style="margin-top:10px;color:var(--sm-text-muted);font-size:13px"><strong>CX note:</strong> Process the cancellation immediately. Save attempts are optional, never required, never aggressive. If they say no twice, stop asking.</p>
      </div>

      <div class="team-callout cx" style="margin-top:24px">
        <span class="team-tag">CX · The empathy reflex</span>
        <p>Every objection above starts with <em>acknowledgment</em>, not with the answer. "That's such a common question," "I hear you," "Yeah — that's a really common experience." That's not filler — it's the brand voice in action. Customers feel heard before they're informed. Skip that opener and even a perfectly correct answer will land cold. <strong>Acknowledge first. Always.</strong></p>
      </div>

    </div>
  </div>
</section>

<!-- 10 — CUSTOMER JOURNEY & LIFECYCLE -->
<section id="journey">
  <div class="card collapsible" data-section="journey">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">10 · Customer Journey &amp; Lifecycle</span>
        <h2>From Diagnosis to Loyalty</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>SugarMD's customer journey doesn't start with a Google search — it usually starts with <strong>a doctor's appointment</strong>. Pre-diabetic, Type 2 diagnosis, an A1C reading that finally crossed a line. From there, the customer enters a research spiral. SugarMD's job is to be the trusted voice in that spiral, then earn the first purchase, then prove the value, then become a long-term part of their daily routine.</p>

      <h3>The seven-stage journey</h3>
      <table>
        <thead><tr><th>Stage</th><th>What they're thinking</th><th>Where they are</th><th>What we do</th><th>CX role</th></tr></thead>
        <tbody>
          <tr>
            <td><strong>1 · Trigger</strong><br><em>Doctor visit, lab result, diagnosis</em></td>
            <td>"Wait, what does pre-diabetic actually mean? Am I going to have to be on insulin?"</td>
            <td>Doctor's office. Google on the way home.</td>
            <td>SEO content for foundational queries: "what is pre-diabetes," "type 2 vs type 1," "A1C explained"</td>
            <td>Not yet — they don't know us</td>
          </tr>
          <tr>
            <td><strong>2 · Research</strong><br><em>Information-gathering spiral</em></td>
            <td>"Are there natural ways to manage this? What about supplements? Is berberine real?"</td>
            <td>YouTube, Reddit, Healthline, Mayo Clinic, friends/family</td>
            <td>Dr. Ergin's YouTube channel (900K subscribers) is the primary discovery vehicle. Blog content, books, the Diabetic Diet Guide.</td>
            <td>Not yet — but the brand voice they meet here sets the tone for every later interaction</td>
          </tr>
          <tr>
            <td><strong>3 · Consideration</strong><br><em>Picking a brand</em></td>
            <td>"Out of all these supplement brands, which one do I actually trust?"</td>
            <td>Comparing SugarMD vs. Glucocil, Gaia, Cymbiotika, Amazon</td>
            <td>Doctor-Formulated badge, real Dr. Ergin content, transparent ingredient labels, lab-test certificates, real customer reviews</td>
            <td>If they call/email pre-purchase: educate, don't sell. Send research, recommend the YouTube channel.</td>
          </tr>
          <tr>
            <td><strong>4 · First Purchase</strong><br><em>The starter SKU</em></td>
            <td>"Let me try one bottle and see what happens."</td>
            <td>sugarmds.com checkout</td>
            <td>Welcome email series (educational, not promotional). Free Diabetic Diet Guide. Easy onboarding.</td>
            <td>Order confirmation tone: warm, not boilerplate. Quick reassurance about shipping.</td>
          </tr>
          <tr>
            <td><strong>5 · First Use</strong><br><em>Weeks 1–8</em></td>
            <td>"Is this even doing anything? Should I keep going?"</td>
            <td>Daily routine, monitoring blood sugar</td>
            <td>Drip nurture: "what to expect in week 2 / 4 / 6," realistic timeline content, recipe ideas, lifestyle integration</td>
            <td>If they call: encourage consistency, manage expectations honestly, suggest pairing with simple lifestyle habits.</td>
          </tr>
          <tr>
            <td><strong>6 · Conversion to Subscriber</strong><br><em>Bottle 2 or 3</em></td>
            <td>"This actually seems to be helping. I should make this easier on myself."</td>
            <td>Email reorder reminder, subscribe-and-save offer</td>
            <td>Subscribe &amp; Save discount (10–20% depending on cadence), bundle suggestions for whole-protocol upgrades</td>
            <td>Make subscription effortless — no friction. Confirm cadence and skip-month flexibility upfront.</td>
          </tr>
          <tr>
            <td><strong>7 · Advocate</strong><br><em>The customer who stays</em></td>
            <td>"My A1C is steady. My doctor is impressed. I'm telling my brother / my mom / my friend."</td>
            <td>Anywhere — they're now a referral channel</td>
            <td>Reviews, referral program, UGC requests, ambassador opportunities</td>
            <td>Make every interaction feel personal, like they're part of the SugarMD family. They are.</td>
          </tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">The danger zones in the journey</h3>
      <table>
        <thead><tr><th>Stage</th><th>Where the customer falls off</th><th>How we prevent it</th></tr></thead>
        <tbody>
          <tr><td><strong>2 → 3</strong> Research → Consideration</td><td>They get overwhelmed by options and buy whatever's cheapest on Amazon, often disappointed</td><td>Strong PDP content, doctor-formulated badge front-and-center, customer reviews with outcomes (not just ⭐⭐⭐⭐⭐)</td></tr>
          <tr><td><strong>4 → 5</strong> First Purchase → First Use</td><td>They forget to take it consistently for the first few weeks, then judge it as "not working"</td><td>Onboarding email series with realistic expectations, "this is week 2 — here's what to look for" content</td></tr>
          <tr><td><strong>5 → 6</strong> First Use → Subscriber</td><td>Bottle runs out, they don't reorder, the protocol breaks</td><td>Reorder reminder email <em>before</em> the bottle runs out, subscribe-and-save offer at exactly that moment</td></tr>
          <tr><td><strong>6 → 7</strong> Subscriber → Advocate</td><td>They stay subscribed but never engage further; brand becomes commodity</td><td>Continued education content via email, occasional "how are you doing?" check-ins (CX-driven, not promotional), referral program asks at win moments</td></tr>
        </tbody>
      </table>

      <div class="team-callout marketing">
        <span class="team-tag">Marketing · The journey owns the spend split</span>
        <p>Stage 2 (Research) is where SugarMD's content moat lives — and it's underweighted in spend relative to its long-term value. YouTube, blog SEO, and Dr. Ergin's authority content compound over years; paid acquisition tapped into Stage 3 (Consideration) tops out fast. <strong>If you're deciding between a one-month paid push and a quarter of educational content investment, pick the content.</strong> The customer who finds us via Dr. Ergin's video on insulin resistance has 3–5× the lifetime value of the customer who comes from a Facebook ad.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">CX · The "week 4 call"</span>
        <p>The most important CX interaction is the customer calling around week 4–6 saying "I don't think this is working." Don't push them harder on the product — that's how they cancel and never come back. Instead: ask what they're tracking (fasting glucose? A1C? energy?), ask about consistency (are they actually taking it daily?), and reset expectations. Sometimes the answer is "give it another month and check in with us." Sometimes the answer is "let's swap you to GlucoDefense which works more gradually." Sometimes the honest answer is "this might not be the right product for you — let me see if there's something better in the catalog or if your doctor would have a better recommendation." That last answer builds more loyalty than any save attempt.</p>
      </div>

    </div>
  </div>
</section>

<!-- 11 — MARKETING ANGLES & HOOKS -->
<section id="angles">
  <div class="card collapsible" data-section="angles">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">11 · Marketing Angles &amp; Hooks</span>
        <h2>How We Pitch the Brand</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>SugarMD's strongest marketing angles all ladder back to the same root truth: <strong>a real endocrinologist made these, for real people managing a real condition.</strong> Every campaign should pull from one of the angles below — not invent a new one from scratch. Generic "premium supplements" angles wash out the brand's actual moat.</p>

      <h3>The six core marketing angles</h3>
      <div class="pillars">
        <div class="pillar">
          <span class="pillar-icon">🩺</span>
          <h4>The Doctor-Formulated Angle</h4>
          <p><strong>Hook frame:</strong> "Made by an endocrinologist, not a marketing team." Use Dr. Ergin's credentials, his actual face, his clinical practice. Best for: Adam, David, skeptics, first-time visitors. Channel fit: PDP, paid ads, About page, YouTube channel art.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">📚</span>
          <h4>The Education-First Angle</h4>
          <p><strong>Hook frame:</strong> "Learn first, buy later." Lead with a YouTube video, free PDF, or blog post. Convert later. Best for: top-of-funnel, organic, YouTube. Channel fit: YouTube, blog, lead magnets, IG/TikTok educational carousels.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">❤️</span>
          <h4>The Compassionate-Care Angle</h4>
          <p><strong>Hook frame:</strong> "Diabetes is hard. We get it. Here's something to make today a little easier." Lean into emotional resonance, real customer stories. Best for: Laura, Marie, newly diagnosed audiences. Channel fit: email nurture, social, retention.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🌿</span>
          <h4>The Natural-Without-Naive Angle</h4>
          <p><strong>Hook frame:</strong> "Natural ingredients, clinical-grade results." Position as the bridge between Whole-Foods-natural and pharmacy-grade. Best for: Adam, holistic-leaning audiences. Channel fit: paid social, IG, partnership content.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🧪</span>
          <h4>The Bioavailability Angle</h4>
          <p><strong>Hook frame:</strong> "Cheap supplements pass right through you. Ours don't." Specifically for berberine, ALA, curcumin, anything where dose form matters. Best for: David, label-readers, price-objection responses. Channel fit: PDP, comparison content, Reddit-style explainers.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🎯</span>
          <h4>The Protocol-Not-Pill Angle</h4>
          <p><strong>Hook frame:</strong> "One bottle is a start. A protocol is a result." Push customers toward bundles, stacks, and subscription. Best for: existing customers, week-4 follow-ups, Health Pack Trio campaigns. Channel fit: email, retention, post-purchase, AOV moments.</p>
        </div>
      </div>

      <h3 style="margin-top:28px">Proven hooks — tested headlines and openers</h3>
      <p>These are the openers that have moved customers in past campaigns. They share a structure: <strong>specific problem → unexpected reframe → calm reassurance.</strong> Use as starting points, not exact copy.</p>

      <table>
        <thead><tr><th>#</th><th>Hook</th><th>Why it works</th><th>Best for</th></tr></thead>
        <tbody>
          <tr><td>1</td><td>"I'm an endocrinologist. Here's what I tell my patients about berberine."</td><td>Authority + curiosity. Sets up an educational reveal, not a sales pitch.</td><td>YouTube, paid social, organic</td></tr>
          <tr><td>2</td><td>"Most blood sugar supplements are useless. Here's how to spot the few that aren't."</td><td>Pattern interrupt — readers expect "buy ours," get a how-to instead.</td><td>Blog SEO, paid ads, email subject lines</td></tr>
          <tr><td>3</td><td>"My mother's diabetes diagnosis changed my career. This is the brand I built for her."</td><td>Personal story + product origin. Earned trust before any product mention.</td><td>About page, founder video, brand-trust ads</td></tr>
          <tr><td>4</td><td>"What I wish I'd known when I was first diagnosed with Type 2."</td><td>Listicle structure, deeply useful, low-pressure. Wins on YouTube and blog.</td><td>YouTube, long-form content, lead magnet</td></tr>
          <tr><td>5</td><td>"You don't need to fight your diabetes. You need to work with your body."</td><td>Reframes the customer's emotional posture from anxious to capable.</td><td>Email welcome series, retention content</td></tr>
          <tr><td>6</td><td>"The 3-minute morning routine my Type 2 patients swear by."</td><td>Specific, actionable, ownable. Builds the brand as a daily companion.</td><td>YouTube Shorts, TikTok, IG Reels</td></tr>
          <tr><td>7</td><td>"Cheap berberine on Amazon is expensive urine. Here's why."</td><td>Punchy, memorable, contrarian. Earned-attention opener for the bioavailability angle.</td><td>Paid social, comparison content, PDP</td></tr>
          <tr><td>8</td><td>"Your A1C number doesn't define you. But here's what it's telling you."</td><td>Empathy + education. Acknowledges shame around numbers, reframes data as insight.</td><td>Blog, email nurture, IG carousel</td></tr>
        </tbody>
      </table>

      <div class="team-callout marketing">
        <span class="team-tag">Marketing · Hooks aren't templates</span>
        <p>The hooks above are tested <em>shapes</em>, not copy-paste templates. Plagiarizing them word-for-word makes the brand sound generic — these patterns work in the SugarMD voice precisely <em>because</em> they're specific. When briefing a new campaign, name the hook structure being used and then have creative write fresh language inside it. The goal is recognizable rhythm, not literal repetition.</p>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">Creative · The "would Dr. Ergin say this?" filter</span>
        <p>Before any hook ships, run it through one test: <strong>could Dr. Ergin say this with a straight face on YouTube?</strong> If yes, ship it. If a hook needs Dr. Ergin to suddenly sound like a sales rep — kill it and rewrite. The brand voice is anchored to a real human; copy that violates that anchor breaks more trust than it gains in click-through.</p>
      </div>

    </div>
  </div>
</section>

<!-- 12 — SAMPLE WINNING CREATIVES -->
<section id="creatives">
  <div class="card collapsible" data-section="creatives">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">12 · Sample Winning Creatives</span>
        <h2>What Actually Works in Market</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Looking at all our winning ads across SugarMD, Wild Earth, Pizza Pack, and Spark, here's what they all have in common…</p>

      <div class="pillars">
        <div class="pillar">
          <span class="pillar-icon">📌</span>
          <h4>1 · Lead with a Specific, Relatable Problem</h4>
          <p>The first three seconds name a real pain the customer already feels. Not "want to be healthier?" — "tired of your A1C creeping up every appointment?"</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">⭐</span>
          <h4>2 · Social Proof is Front and Center</h4>
          <p>Real customer faces, real numbers, real timeline. Reviews on screen. "Maria, age 58, A1C dropped 0.8 points in three months." Not stock testimonials.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">📱</span>
          <h4>3 · Native, Authentic-Looking Creative</h4>
          <p>Phone-shot, doctor-at-his-desk, real-customer-in-her-kitchen aesthetic. Polished ads die on social. The ones that work look like they belong on the feed.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🎯</span>
          <h4>4 · One Clear, Simple Message</h4>
          <p>Not "berberine + ALA + B12 + chromium + cinnamon." One claim, one product, one CTA. The cluttered ad is the dead ad.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🔁</span>
          <h4>5 · Contrast and "Switch" Framing</h4>
          <p>"What I used to do" vs "what I do now." "Before vs after." Before-state pain vs after-state ease — narratively earned, never claim-stacked.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🐾</span>
          <h4>6 · Emotion Over Logic</h4>
          <p>People don't buy supplements; they buy peace of mind for themselves and their families. The winning ads sell the emotion of <em>being there for the grandkids</em>, not the chemistry of berberine.</p>
        </div>
      </div>

      <div class="statement" style="background:linear-gradient(135deg,var(--sm-sage-deep) 0%,var(--sm-teal-deep) 100%);border-left-color:var(--sm-gold);margin-top:24px">
        <div class="statement-label">The through-line</div>
        <p>Your winning ads find a customer who already has a problem, show them someone like them who solved it, and make the product feel like the obvious next step — <strong>not a hard sell.</strong></p>
      </div>

      <h3 style="margin-top:28px">SugarMD-specific gallery — patterns we've seen work</h3>
      <p>Real campaign concepts that have moved customers across paid social, YouTube, and email. Each one names which patterns it's hitting and which persona it speaks to.</p>

      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px;margin-top:18px">

        <div style="background:#fff;border-radius:12px;border:1px solid rgba(201,162,74,.2);padding:20px">
          <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;margin-bottom:6px">Paid social · Meta · Static</div>
          <h4 style="font-size:15px;color:var(--sm-charcoal);margin-bottom:8px">"My mother's diabetes changed my career"</h4>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px">Dr. Ergin in his clinic, talking to camera. Single-claim text overlay. Sage + cream brand frame, no logo overload.</p>
          <p style="font-size:12px;color:var(--sm-text-muted);margin-bottom:8px"><strong>Patterns:</strong> Emotion Over Logic · Authentic Creative · One Clear Message</p>
          <div style="display:flex;flex-wrap:wrap;gap:6px"><span class="tag" style="font-size:11px">Founder Story</span><span class="tag" style="font-size:11px">Adam · Laura</span><span class="tag" style="font-size:11px">Top of funnel</span></div>
        </div>

        <div style="background:#fff;border-radius:12px;border:1px solid rgba(201,162,74,.2);padding:20px">
          <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;margin-bottom:6px">YouTube · Long-form · 8 min</div>
          <h4 style="font-size:15px;color:var(--sm-charcoal);margin-bottom:8px">"What an endocrinologist actually thinks of berberine"</h4>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px">Educational deep-dive. No product mention until minute 6. Dr. Ergin walks through the research, common dosing mistakes, and bioavailability.</p>
          <p style="font-size:12px;color:var(--sm-text-muted);margin-bottom:8px"><strong>Patterns:</strong> Specific Problem · Social Proof (citations) · Authentic</p>
          <div style="display:flex;flex-wrap:wrap;gap:6px"><span class="tag" style="font-size:11px">Education-First</span><span class="tag" style="font-size:11px">David</span><span class="tag" style="font-size:11px">SEO compounding</span></div>
        </div>

        <div style="background:#fff;border-radius:12px;border:1px solid rgba(201,162,74,.2);padding:20px">
          <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;margin-bottom:6px">Paid social · Reels · 22 sec</div>
          <h4 style="font-size:15px;color:var(--sm-charcoal);margin-bottom:8px">"3-minute morning routine my Type 2 patients swear by"</h4>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px">Phone-shot, low-production, native-feed feel. Numbered list overlay. Product appears at second 18, briefly, as one element among habits.</p>
          <p style="font-size:12px;color:var(--sm-text-muted);margin-bottom:8px"><strong>Patterns:</strong> Native Creative · One Clear Message · Specific Problem</p>
          <div style="display:flex;flex-wrap:wrap;gap:6px"><span class="tag" style="font-size:11px">Routine</span><span class="tag" style="font-size:11px">Laura · Marie</span><span class="tag" style="font-size:11px">Mid-funnel</span></div>
        </div>

        <div style="background:#fff;border-radius:12px;border:1px solid rgba(201,162,74,.2);padding:20px">
          <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;margin-bottom:6px">Email · Drip · Day 14</div>
          <h4 style="font-size:15px;color:var(--sm-charcoal);margin-bottom:8px">"Maria's A1C story (and what she did differently)"</h4>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px">Real customer testimonial, names + photos used with permission. Specific numbers, three-month timeline, no hype. Subscription CTA at the bottom only.</p>
          <p style="font-size:12px;color:var(--sm-text-muted);margin-bottom:8px"><strong>Patterns:</strong> Social Proof · Switch Framing · Emotion Over Logic</p>
          <div style="display:flex;flex-wrap:wrap;gap:6px"><span class="tag" style="font-size:11px">Customer Story</span><span class="tag" style="font-size:11px">All personas</span><span class="tag" style="font-size:11px">Conversion</span></div>
        </div>

        <div style="background:#fff;border-radius:12px;border:1px solid rgba(201,162,74,.2);padding:20px">
          <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;margin-bottom:6px">Paid social · Carousel · 5 slides</div>
          <h4 style="font-size:15px;color:var(--sm-charcoal);margin-bottom:8px">"What to look for on a supplement label"</h4>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px">Five slides, each with one tip + visual example. Slide 5 ties back to SugarMD's transparent labeling. Saved-to-Reels-by-default behavior.</p>
          <p style="font-size:12px;color:var(--sm-text-muted);margin-bottom:8px"><strong>Patterns:</strong> One Clear Message · Authentic · Specific Problem</p>
          <div style="display:flex;flex-wrap:wrap;gap:6px"><span class="tag" style="font-size:11px">Education</span><span class="tag" style="font-size:11px">Adam · David</span><span class="tag" style="font-size:11px">Discovery</span></div>
        </div>

        <div style="background:#fff;border-radius:12px;border:1px solid rgba(201,162,74,.2);padding:20px">
          <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);text-transform:uppercase;letter-spacing:.08em;margin-bottom:6px">YouTube Short · 45 sec</div>
          <h4 style="font-size:15px;color:var(--sm-charcoal);margin-bottom:8px">"Is cantaloupe good for diabetics? Honest answer."</h4>
          <p style="font-size:13px;color:var(--sm-text-muted);margin-bottom:10px">Direct question from a real search query, direct answer in Dr. Ergin's voice. No product mention until the description. SEO compounder.</p>
          <p style="font-size:12px;color:var(--sm-text-muted);margin-bottom:8px"><strong>Patterns:</strong> Specific Problem · One Clear Message · Authentic</p>
          <div style="display:flex;flex-wrap:wrap;gap:6px"><span class="tag" style="font-size:11px">Search-Intent</span><span class="tag" style="font-size:11px">Top of funnel</span><span class="tag" style="font-size:11px">Evergreen</span></div>
        </div>

      </div>

      <div class="team-callout creative">
        <span class="team-tag">Creative · Use patterns as briefs, not blueprints</span>
        <p>Each pattern in the gallery above is a <strong>shape</strong>, not a recipe. When briefing creative, name the pattern ("Native Creative + One Clear Message") and the persona, then let the creator riff inside the shape. Copying the gallery examples literally produces sameness — the brand wins on freshness within consistency, not exact repetition.</p>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">Marketing · Test new concepts against these patterns first</span>
        <p>Before spending real budget on a new creative concept, ask: <strong>does it hit at least 3 of the 6 universal patterns?</strong> If not, the concept is unlikely to perform — workshop it before testing. Concepts that hit 4+ patterns are the ones worth scaling. Concepts that hit 2 or fewer almost always lose to the existing winners and waste spend.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">New Hire · Spend 30 min naming patterns before your first ad-review meeting</span>
        <p>Before walking into your first creative-review meeting, pull up the brand's last 10–15 paid ads on Meta Ads Library or the YouTube channel and name which of the 6 patterns each ad is hitting. You'll start spotting the rhythm — and you'll be much more useful in the room because you'll be able to point at <em>why</em> something is working or not, not just whether you "like it." Pattern recognition is the fastest way to ramp up on creative judgment.</p>
      </div>

    </div>
  </div>
</section>

<!-- 14 — SOCIAL MEDIA & DIGITAL CHANNELS -->
<section id="social">
  <div class="card collapsible" data-section="social">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">14 · Social Media &amp; Digital Channels</span>
        <h2>Where We Show Up Online</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>SugarMD's biggest digital asset isn't paid acquisition — it's <strong>Dr. Ergin's YouTube channel</strong>, with 900K+ subscribers and 1,600+ videos accumulated over years. Everything else (Instagram, Facebook, TikTok, X, email) supports that hub or extends its reach. Treat YouTube as the trunk; the others are branches.</p>

      <h3>The platforms — at a glance</h3>
      <table>
        <thead><tr><th>Platform</th><th>Handle</th><th>Role in the mix</th><th>Posting cadence</th></tr></thead>
        <tbody>
          <tr><td><strong>YouTube</strong></td><td><a href="https://www.youtube.com/channel/UCGGc50eoC865DeHvGHIbV0w" target="_blank" rel="noopener">@SugarMD</a></td><td>Primary — Dr. Ergin's authority hub. Long-form education, SEO compounding, the moat.</td><td>1–2 long-form per week + Shorts as captured</td></tr>
          <tr><td><strong>Instagram</strong></td><td><a href="https://www.instagram.com/sugarmds/" target="_blank" rel="noopener">@sugarmds</a></td><td>Secondary — visual brand expression, customer stories, recipe content, lifestyle.</td><td>3–5 posts/week + daily Stories</td></tr>
          <tr><td><strong>Facebook</strong></td><td><a href="https://www.facebook.com/sugarmdsonline/" target="_blank" rel="noopener">SugarMDs Online</a></td><td>Audience skews older — strong fit for Marie + David. Long-form posts perform.</td><td>3–4 posts/week, often re-purposed from IG</td></tr>
          <tr><td><strong>TikTok</strong></td><td><a href="https://www.tiktok.com/@sugarmdtiktok" target="_blank" rel="noopener">@sugarmdtiktok</a></td><td>Reach play — short-form education to younger and broader audiences.</td><td>3–7 videos/week, low-production-OK</td></tr>
          <tr><td><strong>X (Twitter)</strong></td><td><a href="https://x.com/sugar_mds" target="_blank" rel="noopener">@sugar_mds</a></td><td>Lower priority — quick-hit education, news commentary, occasional thread.</td><td>2–3 posts/week minimum</td></tr>
          <tr><td><strong>Email (newsletter)</strong></td><td>via sugarmds.com signup</td><td>Highest-ROI owned channel — nurture, education, retention, promo.</td><td>1–2 sends/week</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">Content cadence by channel</h3>
      <table>
        <thead><tr><th>Channel</th><th>Lead content type</th><th>Tone register</th><th>What "good" looks like</th></tr></thead>
        <tbody>
          <tr><td>YouTube long-form</td><td>Educational deep-dives, Q&amp;A with Dr. Ergin, ingredient explainers</td><td>Educational + Trustworthy + Science-Driven</td><td>5–15 min videos · &gt;50% retention · search-intent titles</td></tr>
          <tr><td>YouTube Shorts</td><td>Single-question answers, quick myth-busts, bite-sized tips</td><td>Educational + Relatable</td><td>30–60 sec · hook in first 2 sec · one takeaway</td></tr>
          <tr><td>Instagram feed</td><td>Customer stories, ingredient highlights, Dr. Ergin moments, recipe carousels</td><td>Empathetic + Inspirational + Educational</td><td>Carousel = highest reach · save rate matters more than likes</td></tr>
          <tr><td>Instagram Stories</td><td>Behind-the-scenes, polls, daily tips, customer DMs reshared</td><td>Relatable + Supportive</td><td>Daily presence · 3–5 frames · interactive stickers</td></tr>
          <tr><td>Facebook</td><td>Long-form posts, customer stories, blog re-shares, community Q&amp;A</td><td>Empathetic + Educational + Supportive</td><td>Story-led posts · &gt;1 min average dwell · comment engagement</td></tr>
          <tr><td>TikTok</td><td>Phone-shot Dr. Ergin clips, day-in-the-life, common-question answers</td><td>Educational + Relatable</td><td>Hook in first 3 sec · captions for sound-off · trending audio when on-brand</td></tr>
          <tr><td>X</td><td>Quick takes, study citations, Dr. Ergin commentary</td><td>Science-Driven + Trustworthy</td><td>Threads outperform single tweets · cite-and-paraphrase studies</td></tr>
          <tr><td>Email</td><td>Nurture series, customer stories, education roundups, promos</td><td>Empathetic + Supportive + Educational</td><td>Personal tone · single CTA · clear subject lines · &gt;25% open</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">Hashtag and tagging governance</h3>
      <p>SugarMD uses a focused, brand-owned hashtag set rather than chasing trending tags. Branded tags drive UGC discovery; topical tags reach search intent.</p>

      <table>
        <thead><tr><th>Type</th><th>Tags</th><th>When to use</th></tr></thead>
        <tbody>
          <tr><td><strong>Branded (always)</strong></td><td>#SugarMD · #DrErgin</td><td>Every brand-owned post on every platform</td></tr>
          <tr><td><strong>Category</strong></td><td>#Type2Diabetes · #Prediabetes · #BloodSugar · #DiabetesAwareness · #InsulinResistance</td><td>Educational and product posts about diabetes management</td></tr>
          <tr><td><strong>Lifestyle</strong></td><td>#DiabeticDiet · #DiabeticRecipes · #HealthyAging · #HolisticHealth · #NaturalHealth</td><td>Recipe, lifestyle, and broader wellness content</td></tr>
          <tr><td><strong>Ingredient</strong></td><td>#Berberine · #ALA · #Resveratrol · #Ashwagandha · #ApcleCiderVinegar</td><td>Ingredient-specific PDP and education posts</td></tr>
          <tr><td><strong>Avoid</strong></td><td>#CureDiabetes · #ReverseDiabetes · #DiabetesFreedom · #BigPharma</td><td>Never — these violate FTC/FDA claim guidelines and attract the wrong audience</td></tr>
        </tbody>
      </table>

      <div class="team-callout marketing">
        <span class="team-tag">Marketing · YouTube is the trunk, not a branch</span>
        <p>If you can only invest in one digital channel, invest in YouTube. Dr. Ergin's channel is the brand's <strong>compounding asset</strong> — every video published five years ago still drives organic search traffic today, still pulls customers into the funnel, still earns subscribers. Paid social is renting attention; YouTube content is owning it. When the marketing budget gets tight, cut paid before you cut content.</p>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">Creative · Repurpose, don't regenerate</span>
        <p>Every long-form YouTube video should produce: 1 IG carousel (5 slides of key takeaways), 2–3 Shorts/Reels (best 30-sec clips), 1 X thread (key points + study citations), 1 email (write-up of the topic), and 1 blog post (transcribed + edited). One topic, six channel placements. The team that figures out the repurposing workflow wins on output velocity without losing on quality.</p>
      </div>

    </div>
  </div>
</section>

<!-- 15 — PARTNERSHIPS & INFLUENCERS -->
<section id="partnerships">
  <div class="card collapsible" data-section="partnerships">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">15 · Partnerships &amp; Influencer Guidelines</span>
        <h2>Who We Work With (And Don't)</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>SugarMD's partnership strategy is <strong>narrow and credibility-protective</strong>. The brand's moat is medical authority and trust; one bad partnership burns more equity than a dozen good ones build. Default answer to most influencer pitches is "no, thanks" unless the partner clearly fits the ambassador profile below.</p>

      <h3>The ideal ambassador profile</h3>
      <div class="pillars">
        <div class="pillar">
          <span class="pillar-icon">🩺</span>
          <h4>Medical or Allied-Health Credentials</h4>
          <p>RDs, RNs, NPs, PAs, MDs, integrative-medicine practitioners. Credentials checked, not just claimed.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">📚</span>
          <h4>Education-First Content History</h4>
          <p>Their existing content explains, doesn't just promote. Track record &gt;6 months, no recent "weight-loss tea" pivots.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">❤️</span>
          <h4>Authentic Diabetes Connection</h4>
          <p>Personal story (own diagnosis, family member), professional practice, or sustained patient-advocacy work.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🎯</span>
          <h4>Audience Alignment</h4>
          <p>35–65 demographic, U.S.-primary, organic engagement (real comments, not bot followers). Smaller and aligned beats bigger and broad.</p>
        </div>
      </div>

      <h3 style="margin-top:24px">Partnership Do / Don't</h3>
      <div class="do-dont">
        <div class="do">
          <h4>✅ DO partner with</h4>
          <ul>
            <li>Endocrinologists and integrative MDs with established practices</li>
            <li>Registered Dietitians specializing in diabetes</li>
            <li>Certified Diabetes Care &amp; Education Specialists (CDCES)</li>
            <li>Diabetes patient-advocates with authentic personal stories</li>
            <li>Peer-reviewed health publications and credible medical podcasts</li>
            <li>Diabetes nonprofits and patient-support organizations</li>
          </ul>
        </div>
        <div class="dont">
          <h4>❌ DON'T partner with</h4>
          <ul>
            <li>Generic "wellness influencers" without medical credentials</li>
            <li>Anyone who has promoted "magic bullet" diabetes claims</li>
            <li>Anti-medicine purists who tell followers to stop prescriptions</li>
            <li>Influencers with anti-vaccine or anti-pharma extremism</li>
            <li>Pure-aesthetic lifestyle accounts (food porn without education)</li>
            <li>Anyone whose audience skews under 25 (off-persona)</li>
          </ul>
        </div>
      </div>

      <h3 style="margin-top:24px">FTC compliance — non-negotiable</h3>
      <p>Every partnership post, video, or story must clearly disclose the relationship. SugarMD will not work with partners who refuse FTC compliance, regardless of audience size.</p>

      <table>
        <thead><tr><th>Required disclosure</th><th>Where it appears</th><th>Acceptable formats</th></tr></thead>
        <tbody>
          <tr><td>Sponsored relationship</td><td>Top of caption, on-screen in video first 5 sec, in podcast intro</td><td>"#ad" · "#sponsored" · "Paid partnership with @sugarmds" · "This video is sponsored by SugarMD"</td></tr>
          <tr><td>Affiliate code</td><td>Anywhere a code is mentioned</td><td>"I earn a small commission if you use my code" · "#affiliate"</td></tr>
          <tr><td>Free product received</td><td>Caption / description, even if not paid</td><td>"SugarMD sent me this product to try" · "#gifted"</td></tr>
          <tr><td>Health claims</td><td>Anywhere a benefit is mentioned</td><td>Must include "These statements have not been evaluated by the FDA. This product is not intended to diagnose, treat, cure, or prevent any disease."</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">Compensation models</h3>
      <table>
        <thead><tr><th>Model</th><th>When to use</th><th>Rate range</th></tr></thead>
        <tbody>
          <tr><td><strong>Affiliate (% of sales)</strong></td><td>Standard model for content creators with sub-100K following</td><td>10–20% of net sale, code-tracked</td></tr>
          <tr><td><strong>Flat fee + affiliate</strong></td><td>Established creators, podcasts, dedicated content commitments</td><td>$500–$5,000 flat + 10% affiliate</td></tr>
          <tr><td><strong>Long-term ambassador retainer</strong></td><td>Top-tier credentialed partners with quarterly content commitments</td><td>$2,500–$10,000/mo, contract-based</td></tr>
          <tr><td><strong>Product gifting only</strong></td><td>Small creators, organic outreach, micro-influencer seeding</td><td>Free product, no payment, no expectation of post</td></tr>
        </tbody>
      </table>

      <div class="team-callout brand">
        <span class="team-tag">Brand · The "would you trust them with your mother?" test</span>
        <p>Before any partnership goes live, ask: <strong>would you trust this person to give health information to your own mother?</strong> If you'd hesitate even a little — pass. The medical-authority equity SugarMD has earned over years can be eroded in one bad partnership post. Slower partnership growth is fine; a credibility-damaging influencer is not.</p>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">Marketing · How to handle inbound pitches</span>
        <p>SugarMD gets multiple influencer pitches per week. Default response: <strong>polite decline plus a question.</strong> "Thanks for reaching out — we work with a small group of credentialed health partners. If you're a CDCES, RD, or MD, please send your credentials and a sample of recent diabetes content and we'll review." This filters 90% of inbound to the right yes/no without ever investing review time. For partnership inquiries that <em>do</em> meet the bar, route to <strong>Marketing / Partnerships</strong> with a credentialing summary.</p>
      </div>

    </div>
  </div>
</section>

<!-- 16 — DISCOUNTS & PROMO CODES -->
<section id="discounts">
  <div class="card collapsible" data-section="discounts">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">16 · Discounts &amp; Promo Codes</span>
        <h2>How We Discount</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <div class="recall-callout" style="background:linear-gradient(135deg,#FFF8E5 0%,#FBEFC8 100%)">
        <div class="recall-callout-tag">Critical · Always check the monthly discount sheet first</div>
        <h4>The monthly discount sheet is the single source of truth</h4>
        <p>Every code, every promo, every flip — <strong>verify it on the monthly discount sheet</strong> before honoring or activating. Codes change monthly; what worked last week may not be live this week. Don't honor codes from memory, don't make up codes on the fly, don't trust customer screenshots without verifying. If a code isn't on the sheet, it isn't live.</p>
        <p><strong>Where to find the sheet:</strong> Internal PM tool (ask your manager or post in #discounts). Updated by Marketing on the first of each month.</p>
      </div>

      <h3>Discount formats SugarMD uses</h3>
      <table>
        <thead><tr><th>Format</th><th>What it is</th><th>Where it shows up</th></tr></thead>
        <tbody>
          <tr><td><strong>Promo code</strong></td><td>Code typed at checkout — applies a fixed % or $ discount</td><td>Email, SMS, partner / influencer codes, paid social CTAs</td></tr>
          <tr><td><strong>Full-site flip</strong></td><td>Site-wide automatic % off (no code) — banner-driven</td><td>Black Friday, NDA Month, big seasonal moments</td></tr>
          <tr><td><strong>Banner / automatic</strong></td><td>Discount applies automatically when condition met (e.g., free shipping over $X)</td><td>PDP banner, cart upsell, site-wide ribbon</td></tr>
          <tr><td><strong>Bundle / cart threshold</strong></td><td>Discount activates when bundle is added or cart reaches $ threshold</td><td>Health Pack Trio bundles always-on; cart upsells</td></tr>
          <tr><td><strong>Subscription discount</strong> <span class="badge badge-core">Evergreen</span></td><td>Always-on % off for subscribing — 10% / 15% / 20% by cadence</td><td>PDP subscribe-and-save selector, email, post-purchase</td></tr>
          <tr><td><strong>New customer discount</strong> <span class="badge badge-core">Evergreen</span></td><td>Always-on first-order discount, captured via email signup</td><td>Site footer popup, welcome email automation</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">Evergreen vs. time-bound</h3>
      <p>Two discounts are <strong>always live</strong> regardless of the monthly sheet — assume they're available unless the sheet flags otherwise:</p>
      <ul style="padding-left:24px;margin-bottom:16px">
        <li><strong>Subscribe &amp; Save</strong> — 10% off monthly, 15% off bi-monthly through 5-month, 20% off every 6 months. Applies to nearly every SKU.</li>
        <li><strong>New Customer first-order discount</strong> — captured via email signup popup; one-time use per customer.</li>
      </ul>
      <p>Everything else (Black Friday, NDA Month, partner codes, flash promos, holiday flips) <strong>rotates on the monthly discount sheet</strong>. If a code isn't there, it isn't live.</p>

      <h3 style="margin-top:24px">Subscription discount tiers (current)</h3>
      <table>
        <thead><tr><th>Cadence</th><th>Discount</th><th>Best for</th></tr></thead>
        <tbody>
          <tr><td>1 bottle every month</td><td>10% off</td><td>Single-product daily users; new subscribers</td></tr>
          <tr><td>2 bottles every 2 months</td><td>10% off</td><td>Couples; same product, 2-person household</td></tr>
          <tr><td>3 bottles every 3 months</td><td>15% off</td><td>Households + buffer stock; quarterly cadence</td></tr>
          <tr><td>4 bottles every 4 months</td><td>15% off</td><td>Multi-product stacks at 1/month each</td></tr>
          <tr><td>5 bottles every 5 months</td><td>15% off</td><td>Full Health Pack Trio cadences</td></tr>
          <tr><td>6 bottles every 6 months</td><td>20% off</td><td>Best-value option · highest LTV cohort</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">Channel ownership of discount communication</h3>
      <table>
        <thead><tr><th>Channel</th><th>Owner</th><th>Rule</th></tr></thead>
        <tbody>
          <tr><td>Email</td><td>Marketing / Email Lead</td><td>Every code in a campaign must be on the sheet before send</td></tr>
          <tr><td>SMS</td><td>Marketing / Retention</td><td>Same as email · check sheet before send</td></tr>
          <tr><td>Organic social</td><td>Social Lead</td><td>Reference codes only when on the sheet for that month</td></tr>
          <tr><td>Paid media</td><td>Paid Acquisition Lead</td><td>Ad copy must reference live codes only · pause ads when codes expire</td></tr>
          <tr><td>CX</td><td>CX Supervisor</td><td>Verify on sheet · use CX goodwill code for reasonable expired-code requests</td></tr>
          <tr><td>Influencer / Partnerships</td><td>Marketing / Partnerships</td><td>Each partner gets a unique tracked code · added to the sheet before going live</td></tr>
          <tr><td>Retention / Subscription</td><td>Retention Lead</td><td>Subscription discount tiers + win-back offers run continuously and are documented on the sheet</td></tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">CX · Verify before honoring · use the goodwill code wisely</span>
        <p>If a customer presents a code, <strong>check the sheet first</strong> — never honor based on customer screenshot or memory. If the code is expired and the customer's request is reasonable (saw the code in an old email, didn't realize it expired, has been a longtime subscriber), apply the <strong>CX goodwill code</strong> as a one-time courtesy. Don't volunteer the goodwill code, don't use it for every "got a discount?" ask, and don't stack it with other promos. If the request feels off — a brand-new account, a too-perfect story, a code from a sketchy source — escalate to the CX Supervisor before applying anything.</p>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">Marketing · Every code goes on the sheet before going live</span>
        <p>No exceptions. Influencer codes, partner codes, paid-ad-only codes, retention save codes, win-back codes — every single live code is added to the monthly sheet with: code text, % or $ value, eligible products, start date, expiry date, owner, intended use. CX needs visibility on every code so they can verify and honor; you can't go around them. If a campaign needs an emergency code, message the CX Supervisor directly so they can flag it before the first call comes in.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">New Hire · Ask for the sheet link in your first week</span>
        <p>Day-one task: ask your manager for the <strong>monthly discount sheet link</strong> and bookmark it. Or post in <strong>#discounts</strong> on the team chat. You'll need it on every CX shift, every campaign brief, every customer call where price comes up. Don't try to memorize codes — just open the sheet. The team that wins on discounts is the team that always checks.</p>
      </div>

    </div>
  </div>
</section>

<!-- 17 — SEO -->
<section id="seo">
  <div class="card collapsible" data-section="seo">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">17 · SEO</span>
        <h2>Search-Earned Traffic</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>SEO is the brand's most patient growth channel — and its most compounding. Diabetes-related search demand is enormous, evergreen, and only loosely contested by serious medical authority sites. SugarMD's combination of <strong>Dr. Ergin's credentials + a deep YouTube content history + transparent product pages</strong> is built to win in search. The work is slow; the payoff lasts years.</p>

      <h3>Priority keyword themes</h3>
      <p>Six themes anchor the brand's SEO strategy. Every blog post, PDP, and YouTube title should ladder back to one of these.</p>

      <table>
        <thead><tr><th>#</th><th>Theme</th><th>Example searches</th><th>Intent</th></tr></thead>
        <tbody>
          <tr><td>1</td><td><strong>Diabetes 101</strong></td><td>"what is type 2 diabetes" · "prediabetes vs type 2" · "how do you get diabetes" · "is diabetes genetic"</td><td>Awareness · top of funnel</td></tr>
          <tr><td>2</td><td><strong>Insulin resistance &amp; metabolic health</strong></td><td>"early signs of insulin resistance" · "what causes insulin resistance" · "blood pressure and insulin resistance"</td><td>Research · pre-diagnosis or newly diagnosed</td></tr>
          <tr><td>3</td><td><strong>Blood sugar lifestyle</strong></td><td>"what causes blood sugar spikes beyond sugar" · "how stress sleep hormones affect glucose" · "why blood sugar matters even if not diabetic"</td><td>Daily-management · existing customer or candidate</td></tr>
          <tr><td>4</td><td><strong>Supplement evaluation</strong></td><td>"how to choose a blood sugar supplement" · "what to look for on a supplement label" · "capsules vs powders vs gummies"</td><td>Comparison · high purchase intent</td></tr>
          <tr><td>5</td><td><strong>Specific ingredients</strong></td><td>"berberine for blood sugar" · "alpha lipoic acid neuropathy" · "ceylon vs cassia cinnamon" · "benfotiamine benefits"</td><td>Product research · ready to buy</td></tr>
          <tr><td>6</td><td><strong>Diabetes-friendly food &amp; lifestyle</strong></td><td>"is cantaloupe good for diabetics" · "are strawberries good for diabetics" · "can diabetics eat pizza" · "is gluten free good for diabetics"</td><td>Daily curiosity · long-tail compounding</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">SEO ownership by asset type</h3>
      <table>
        <thead><tr><th>Asset</th><th>Owner</th><th>Quality bar</th></tr></thead>
        <tbody>
          <tr><td>Product page copy (PDP)</td><td>Marketing / Brand · Medical reviewed</td><td>Each PDP ladders to a keyword theme · benefits + ingredients + citations · structured-data product schema</td></tr>
          <tr><td>Blog posts</td><td>Marketing / Content</td><td>1,200–2,500 words · &lt;1 ladder to a keyword theme · medical review for any health claim</td></tr>
          <tr><td>Meta titles &amp; descriptions</td><td>Marketing / Content</td><td>Filled in for every page · keyword in title · descriptive but not stuffed</td></tr>
          <tr><td>Image alt text</td><td>Creative · Web</td><td>Descriptive of subject, not just "image1.png" · keyword-relevant where appropriate</td></tr>
          <tr><td>Schema markup</td><td>Web Dev</td><td>Organization · Product · Article · FAQ · Person (for Dr. Ergin)</td></tr>
          <tr><td>Site speed</td><td>Web Dev</td><td>Core Web Vitals all green · LCP &lt; 2.5s · CLS &lt; 0.1</td></tr>
          <tr><td>Backlinks</td><td>Marketing / Partnerships · PR</td><td>Earned media, podcast appearances, partner content; no link farms</td></tr>
          <tr><td>Review volume</td><td>CX · Retention</td><td>Post-purchase email asks · third-party platform integration · respond to negative reviews</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">SEO Do / Don't</h3>
      <div class="do-dont">
        <div class="do">
          <h4>✅ DO</h4>
          <ul>
            <li>Ladder every piece of content to a priority theme</li>
            <li>Get medical review on any health-claim post before publishing</li>
            <li>Internal-link from new posts to relevant PDPs and YouTube videos</li>
            <li>Update top-performing posts every 12–18 months for freshness</li>
            <li>Target long-tail "is X good for diabetics" queries — they compound</li>
            <li>Capture and use schema markup for products, FAQs, and Dr. Ergin</li>
          </ul>
        </div>
        <div class="dont">
          <h4>❌ DON'T</h4>
          <ul>
            <li>Stuff keywords — Google now penalizes obvious manipulation</li>
            <li>Write thin "definition" posts under 800 words</li>
            <li>Buy backlinks or use private blog networks</li>
            <li>Make therapeutic claims ("cures diabetes") in titles or copy</li>
            <li>Cannibalize keywords across multiple posts (one theme, one post)</li>
            <li>Publish without checking for an existing Dr. Ergin video on the topic — embed it</li>
          </ul>
        </div>
      </div>

      <div class="team-callout marketing">
        <span class="team-tag">Marketing · Every piece of content ladders to a theme</span>
        <p>If a proposed blog post or YouTube video doesn't fit one of the six priority themes above, ask <strong>why</strong> before greenlighting. The brand's SEO equity grows by depth on a focused set of topics, not by breadth. Off-theme content cannibalizes attention without compounding. If a topic feels important but doesn't fit, propose adding a seventh theme — don't just publish off-axis content and hope.</p>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">Creative · Compress images, name files well, write real alt text</span>
        <p>Every image headed for the site or blog needs three things: <strong>compressed file size</strong> (WebP, &lt;100 KB ideally), <strong>descriptive filename</strong> ("dr-ergin-explaining-berberine.jpg," not "IMG_4823.jpg"), and <strong>real alt text</strong> describing what's in the image. These three steps cost two minutes per asset and earn site-speed and image-search wins for years. Skip them and you leak SEO value with every upload.</p>
      </div>

      <h3 style="margin-top:24px">Tracking &amp; review</h3>
      <p>SEO performance is owned by <strong>Marketing</strong> with monthly review meetings. Primary tools:</p>
      <ul style="padding-left:24px">
        <li><strong>Google Search Console</strong> — primary truth source for organic search performance, indexing, Core Web Vitals</li>
        <li><strong>Ahrefs / Semrush</strong> — competitive research, keyword tracking, backlink monitoring</li>
        <li><strong>YouTube Studio</strong> — channel-level SEO performance, search-driven views, audience retention</li>
        <li><strong>GA4</strong> — organic traffic conversion, behavior, cohort analysis</li>
      </ul>
      <p style="margin-top:8px;font-size:13px;color:var(--sm-text-muted);font-style:italic">Monthly SEO review covers: top-performing posts, keyword movement, technical issues, content roadmap for next 30 days. New hires can sit in passively for the first month before contributing.</p>

    </div>
  </div>
</section>

<!-- 18 — CRO -->
<section id="cro">
  <div class="card collapsible" data-section="cro">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">18 · CRO · Conversion Rate Optimization</span>
        <h2>Turning Traffic Into Customers</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>Acquiring traffic costs money. Converting the traffic you already have costs almost nothing — and compounds. SugarMD's conversion rate is the multiplier on every dollar of paid spend, every SEO win, every YouTube view that lands on the site. <strong>A 0.5% lift in PDP conversion is often worth more than a 30% increase in ad budget.</strong></p>

      <h3>The 6-stage funnel</h3>
      <p>The customer's question changes at every step. So should the page they're looking at.</p>

      <table>
        <thead><tr><th>#</th><th>Stage</th><th>Customer's question</th><th>What converts</th></tr></thead>
        <tbody>
          <tr><td>1</td><td><strong>Landing</strong></td><td>"Is this the brand for me?"</td><td>Hero with clear value prop in 3 sec · Dr. Ergin face · trust badges (Lab Tested, Doctor-Formulated, GMP) · social proof above the fold</td></tr>
          <tr><td>2</td><td><strong>Product Detail (PDP)</strong></td><td>"Is this the right product for my situation?"</td><td>Benefit hierarchy (top 3 benefits visible without scroll) · ingredient transparency · subscribe-and-save toggle visible · reviews + Q&amp;A near CTA</td></tr>
          <tr><td>3</td><td><strong>Add to Cart</strong></td><td>"Should I commit?"</td><td>Sticky add-to-cart on mobile · clear price + sale price · subscribe-and-save savings shown explicitly</td></tr>
          <tr><td>4</td><td><strong>Cart</strong></td><td>"Wait, what's the total going to be?"</td><td>Free-shipping banner reinforced · subscribe upsell shown again · bundle suggestion ("complete the protocol") · clear total</td></tr>
          <tr><td>5</td><td><strong>Checkout</strong></td><td>"Is this safe and fast?"</td><td>Express checkout (Apple Pay, Shop Pay, PayPal) · trust signals · short form · guest checkout · no account required</td></tr>
          <tr><td>6</td><td><strong>Post-purchase</strong></td><td>"Did this go through? When will it arrive?"</td><td>Order confirmation with realistic shipping window · welcome series first email immediate · subscribe upsell if single-purchase</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">High-impact CRO levers</h3>
      <p>Where the marginal hour of CRO work pays off most. Ranked roughly by historical impact at brands of SugarMD's size and category.</p>

      <table>
        <thead><tr><th>Lever</th><th>Why it matters</th><th>Where it lives</th></tr></thead>
        <tbody>
          <tr><td><strong>Hero clarity</strong></td><td>3 seconds to answer "what · who · why trust" — fails &gt; everything else fails</td><td>Homepage, key landing pages</td></tr>
          <tr><td><strong>Social proof placement</strong></td><td>Reviews above the fold lift PDP conversion 5–15% in this category</td><td>PDP, homepage, landing pages</td></tr>
          <tr><td><strong>Free-shipping messaging</strong></td><td>"Free shipping on every U.S. order" is a SugarMD unfair advantage — should be hard to miss</td><td>Site-wide ribbon, cart, checkout</td></tr>
          <tr><td><strong>Subscribe-and-Save framing</strong></td><td>Subscription is the LTV multiplier. Frame as "save 10–20% &amp; never run out," not as a checkbox</td><td>PDP, cart, post-purchase</td></tr>
          <tr><td><strong>FAQ on PDP</strong></td><td>Answers objections in-place; reduces bounce to research → competitor purchase</td><td>Below the fold on every PDP</td></tr>
          <tr><td><strong>Cart recovery</strong></td><td>Abandoned-cart email + SMS is the cheapest revenue lift in retention</td><td>Email + SMS automation</td></tr>
          <tr><td><strong>Checkout speed</strong></td><td>Every extra checkout field drops conversion · express checkout is table stakes</td><td>Checkout</td></tr>
          <tr><td><strong>Trust signals</strong></td><td>Lab Tested, Doctor-Formulated, GMP, third-party reviewed — repeat throughout funnel</td><td>Every page</td></tr>
          <tr><td><strong>Mobile optimization</strong></td><td>Most SugarMD traffic is mobile. Slow / janky mobile = abandoned funnel</td><td>Site-wide, especially PDP and checkout</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">How to run a CRO test</h3>
      <ol style="padding-left:24px;line-height:1.8">
        <li><strong>Form a hypothesis</strong> — "If we [change X], then [metric Y] will [move in direction Z] because [reason]." Vague hunches don't qualify.</li>
        <li><strong>Change one variable</strong> — A/B tests with multiple changes don't tell you which change moved the metric. One variable per test.</li>
        <li><strong>Calculate sample size</strong> — Underpowered tests produce false positives. Use a calculator (e.g., Optimizely sample-size tool) before launching.</li>
        <li><strong>Run for a full week minimum</strong> — Day-of-week effects matter. Weekend traffic behaves differently from weekday.</li>
        <li><strong>Track downstream metrics, not just the primary</strong> — A PDP test that lifts add-to-cart but tanks final purchase isn't a win. Watch the full funnel.</li>
        <li><strong>Document every test</strong> — Hypothesis, variants, sample size, result, learning. Even (especially) failed tests teach the next one.</li>
      </ol>

      <div class="team-callout marketing">
        <span class="team-tag">Marketing · Impact-vs-effort filter; one quality test per month</span>
        <p>SugarMD's traffic is large enough for tests to reach significance, but not so large that ten parallel tests work. Pick <strong>one high-impact, low-effort test per month</strong> and run it well. A homepage hero test that takes two days to ship and a week to read beats five poorly-instrumented PDP tweaks every time. Discipline beats velocity in CRO.</p>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">Creative · Above the fold must answer What / Who / Why-trust in 3 seconds</span>
        <p>The single highest-impact creative decision is the homepage and PDP hero. In the first 3 seconds, the customer needs to know: <strong>what</strong> the product is (blood sugar supplement, not "wellness"), <strong>who</strong> made it (Dr. Ergin, endocrinologist), <strong>why-trust</strong> (Lab Tested · Doctor-Formulated · 900K YouTube subscribers). If any of those three are missing or unclear above the fold, the hero is broken — fix it before testing anything else on the page.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">New Hire · Watch 10 mobile session recordings before your first CRO meeting</span>
        <p>Before contributing in a CRO conversation, log into Hotjar or whatever session-recording tool the team uses and watch <strong>10 real mobile sessions</strong> end-to-end. You'll learn more about why customers convert (or don't) in 30 minutes of watching than in a week of reading conversion reports. Pay attention to: where they pause, what they re-read, what they tap accidentally, what they scroll past. That's the CRO roadmap.</p>
      </div>

      <h3 style="margin-top:24px">Metrics &amp; review cadence</h3>
      <p>Owned by <strong>Marketing / Growth</strong> with a monthly review.</p>
      <ul style="padding-left:24px">
        <li><strong>Conversion rate</strong> (overall site, PDP-specific) — primary north star</li>
        <li><strong>Average order value (AOV)</strong> — shows bundle and upsell health</li>
        <li><strong>Cart abandonment rate</strong> — shows checkout friction</li>
        <li><strong>Subscription take rate</strong> — % of orders that include subscribe-and-save · LTV proxy</li>
        <li><strong>Mobile conversion rate</strong> — tracked separately from desktop · usually the biggest opportunity</li>
        <li><strong>Welcome-series open and click rates</strong> — shows post-purchase nurture health</li>
      </ul>

    </div>
  </div>
</section>

<!-- 19 — GLOSSARY -->
<section id="glossary">
  <div class="card collapsible" data-section="glossary">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">19 · Glossary</span>
        <h2>Brand &amp; Industry Terms</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>The terms below show up across CX, marketing, and brand conversations. Read them once so you can follow along in cross-team meetings.</p>

      <table>
        <thead><tr><th>Term</th><th>Definition</th></tr></thead>
        <tbody>
          <tr><td><strong>A1C (HbA1c)</strong></td><td>A blood test that measures average blood sugar over the previous 2–3 months. Normal &lt; 5.7%, prediabetic 5.7–6.4%, diabetic ≥ 6.5%. Customers often refer to "their A1C" as a single number.</td></tr>
          <tr><td><strong>Bioavailability</strong></td><td>How much of an ingredient actually reaches your bloodstream. Higher bioavailability = more of the dose reaches the cells. SugarMD's Super Berberine uses Dihydroberberine (DHB), with ~5× the bioavailability of standard berberine.</td></tr>
          <tr><td><strong>CDCES</strong></td><td>Certified Diabetes Care &amp; Education Specialist. The credentialed allied-health professionals SugarMD prioritizes for partnerships.</td></tr>
          <tr><td><strong>CGM</strong></td><td>Continuous Glucose Monitor. Wearable sensor that tracks blood sugar in real-time. SugarMD sells the Stelo by Dexcom.</td></tr>
          <tr><td><strong>Doctor-Formulated</strong></td><td>Brand language indicating Dr. Ergin personally led the formulation — dose, ingredient choice, blend ratio. Distinct from "doctor-recommended" (anyone) or "doctor-approved" (vague).</td></tr>
          <tr><td><strong>Endocrinologist</strong></td><td>A medical doctor specializing in hormonal disorders, including diabetes. Dr. Ergin is board-certified. The relevant specialty for SugarMD's authority claim.</td></tr>
          <tr><td><strong>Evergreen Offer</strong></td><td>A discount that's always on, not tied to a calendar window. The two SugarMD evergreen offers are <strong>Subscribe &amp; Save</strong> and the <strong>New Customer first-order discount</strong>. Assume live unless the monthly discount sheet flags otherwise.</td></tr>
          <tr><td><strong>FDA Structure-Function Claim</strong></td><td>The claim category dietary supplements are allowed to make ("supports healthy blood sugar"). Distinct from drug claims ("treats diabetes") which supplements cannot legally make.</td></tr>
          <tr><td><strong>Goodwill Code (CX)</strong></td><td>An internal CX-only discount code applied for reasonable expired-promo or hardship requests. Use sparingly, never volunteer, never stack with other promos.</td></tr>
          <tr><td><strong>GMP</strong></td><td>Good Manufacturing Practices. FDA-regulated standard for supplement manufacturing facilities. SugarMD products are made in GMP-certified facilities.</td></tr>
          <tr><td><strong>Glycemic Index / Load</strong></td><td>How quickly a food raises blood sugar. Customers and Dr. Ergin's content reference this often when discussing diabetes-friendly food.</td></tr>
          <tr><td><strong>Health Pack Trio</strong></td><td>SugarMD's pre-built bundle SKUs (Spring Reset, Metabolic Health, Green Monday, Immune Support, NDA Month). Higher AOV, higher retention.</td></tr>
          <tr><td><strong>Lab Tested for Purity</strong></td><td>Brand language indicating products are third-party tested for pesticides, heavy metals, and ingredient identity. Specific to the supplement category — distinct from "FDA approved."</td></tr>
          <tr><td><strong>NDA Month</strong></td><td>National Diabetes Awareness Month — November. Major seasonal campaign moment for SugarMD; dedicated bundle SKU.</td></tr>
          <tr><td><strong>Pre-diabetes</strong></td><td>Blood sugar elevated above normal but not yet diabetic. A1C 5.7–6.4%. SugarMD's biggest acquisition target — these are the customers most motivated to act.</td></tr>
          <tr><td><strong>RMA</strong></td><td>Return Merchandise Authorization. Required for every SugarMD return — customer must email to receive RMA details before sending anything back. No RMA = return won't be processed.</td></tr>
          <tr><td><strong>Subscribe &amp; Save</strong></td><td>SugarMD's recurring-shipment discount: 10% monthly, 15% bi-monthly through 5-month, 20% every 6 months. Cancel anytime.</td></tr>
          <tr><td><strong>Type 1 Diabetes</strong></td><td>Autoimmune condition where the body doesn't produce insulin. Requires insulin therapy. <strong>SugarMD does not market to or claim benefits for Type 1.</strong> Different condition than the brand's audience.</td></tr>
          <tr><td><strong>Type 2 Diabetes</strong></td><td>Metabolic condition where the body becomes resistant to insulin or doesn't make enough. Manageable with lifestyle, supplements, and (often) medication. SugarMD's primary audience.</td></tr>
        </tbody>
      </table>

    </div>
  </div>
</section>

<!-- 20 — RETURN POLICY / HAPPINESS GUARANTEE -->
<section id="returns">
  <div class="card collapsible" data-section="returns">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">20 · Return Policy</span>
        <h2>30-Day Unopened Return Policy</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>SugarMD's published return policy lives at <a href="https://sugarmds.com/return-policy" target="_blank" rel="noopener">sugarmds.com/return-policy</a>. The verbatim policy below is the source of truth — quote it back to customers when needed; do not paraphrase loosely.</p>

      <div class="statement" style="background:linear-gradient(135deg,var(--sm-sage) 0%,var(--sm-sage-deep) 100%)">
        <div class="statement-label">Return policy · verbatim</div>
        <p>"You can send back any <strong>UNOPENED and SEALED</strong> bottle to us within <strong>30 days</strong> of the purchase, for a refund. After the return is received by our warehouse we will process the refund. There will be a <strong>20% processing and handling fee</strong> deducted from the purchase price. <strong>All returns MUST have a RMA.</strong> To return an item simply email us to receive all the necessary return details. Be sure to include your order details for prompt processing. Please note that any opened bottle(s) is not eligible for a return/refund."</p>
      </div>

      <h3 style="margin-top:24px">The four moving parts CX needs to know</h3>
      <table>
        <thead><tr><th>Rule</th><th>What it means</th><th>How to communicate it</th></tr></thead>
        <tbody>
          <tr><td><strong>1 · Unopened &amp; sealed only</strong></td><td>Tamper seal must be intact. Opened bottles cannot be refunded — period, no exceptions on hygiene-sealed supplements.</td><td>Quote the policy upfront. Don't promise a refund before confirming the bottle is unopened.</td></tr>
          <tr><td><strong>2 · 30-day window from purchase date</strong></td><td>30 days from the order date, not the delivery date. Customer must initiate the return request inside that window.</td><td>Look up the order date in Shopify. If beyond 30 days, the answer is no — escalate only for genuine carrier delays.</td></tr>
          <tr><td><strong>3 · 20% processing fee</strong></td><td>20% deducted from the refund — <em>not</em> from the order total. Customer paying $40 gets back $32 (minus original shipping if any).</td><td><strong>Quote this upfront before they ship.</strong> Surprise fees on the back end create chargebacks. Be specific about the dollar amount.</td></tr>
          <tr><td><strong>4 · RMA required</strong></td><td>Customer must email <a href="mailto:feedback@sugarmds.com">feedback@sugarmds.com</a> first to receive RMA details. Returns sent without an RMA may not be processed.</td><td>Walk them through the email step. Don't let them just ship it back blind.</td></tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">CX · The four-part script</span>
        <p>Walk every return request through these four checks, in order: <strong>(1)</strong> Is the bottle unopened and sealed? (yes/no — no = no refund, period). <strong>(2)</strong> Is it within 30 days of purchase date? (look it up in Shopify, don't trust the customer's memory). <strong>(3)</strong> Have you explained the 20% fee with a specific dollar amount? ("On a $40 order you'll receive back about $32.") <strong>(4)</strong> Have you sent them the RMA email with return address and instructions? Don't skip any of the four — most return disputes come from a customer who heard "you'll get a refund" and didn't hear "minus 20% if it's unopened and you have an RMA."</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">CX · Original shipping &amp; opened bottles</span>
        <p>Two questions that come up constantly: <strong>(a)</strong> "Do I get my shipping refunded too?" — No. The refund covers the product cost minus the 20% fee. Original shipping (if any was paid) is not refunded. SugarMD's free U.S. shipping means most customers paid no shipping at all, but say it cleanly when asked. <strong>(b)</strong> "I opened it but it didn't work for me — can I get a refund?" — No, not under standard policy. Opened supplements cannot be refunded for hygiene/safety reasons. If the customer is genuinely upset and has a multi-bottle order, you can offer to apply the standard policy to <em>unopened</em> bottles in their order. For escalated quality concerns (capsule defect, contamination concern), route to <strong>CX Fulfillment Supervisor</strong>.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">CX · The recall exception</span>
        <p>Returns related to the FDA recall do <strong>not</strong> follow the standard 30-day / unopened / 20%-fee policy. Recall returns have their own protocol — see <a href="#recall">section #25</a> for full guidance. <strong>If a customer mentions the recall in connection with a return, do not improvise.</strong> Get their order number and escalate to <strong>CX Supervisor</strong> immediately. Refunds tied to the recall are handled outside the normal flow.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">New Hire · Worked refund math</span>
        <p>Customer ordered a single bottle of GlucoDefense at, say, <em>$X</em> with free shipping (U.S.). Bottle is unopened, within 30 days, RMA issued. <strong>Refund math:</strong> $X product cost × 80% (after 20% fee) = <strong>80% of $X refunded</strong> to original payment method, processed once warehouse receives the return. Original shipping not applicable (it was free). Walk the customer through this math <em>before</em> they ship — the goal is no surprise on the back end. Pull the actual amounts from Shopify when you handle a real ticket; don't memorize prices.</p>
        <p>Multi-item example: customer ordered the Metabolic Health Health Pack Trio at $Y. Two of three bottles unopened and sealed, one opened. Eligible refund: 2/3 of $Y, less 20% fee. The opened bottle is non-refundable. Quote both numbers explicitly so the customer knows exactly what they're getting back.</p>
      </div>

      <h3 style="margin-top:24px">When CX <em>can</em> offer something beyond policy</h3>
      <p>The 30-day / unopened policy is firm. But there are three CX moments where a goodwill gesture is appropriate, with supervisor approval:</p>
      <ul style="padding-left:24px;line-height:1.8">
        <li><strong>Carrier delay outside the customer's control</strong> — package took 14 days to arrive, customer received it on day 12, opened it day 12, requesting refund day 30. Standard policy says no (opened bottle), but a goodwill partial refund or store credit may be appropriate. Escalate.</li>
        <li><strong>Quality issue with the product itself</strong> — broken capsules, sealed bottle that's clearly tampered or short-filled, ingredient discrepancy. Don't apply the 20% fee to refunds for quality issues. Escalate to CX Fulfillment Supervisor immediately and document with photos.</li>
        <li><strong>Long-term subscriber with first-time complaint</strong> — customer who's been on Subscribe &amp; Save for 12+ months and has never asked for anything. Goodwill courtesy — escalate before promising anything.</li>
      </ul>

    </div>
  </div>
</section>

<!-- 21 — FULFILLMENT & SHIPPING -->
<section id="fulfillment">
  <div class="card collapsible" data-section="fulfillment">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">21 · Fulfillment &amp; Shipping</span>
        <h2>From Click to Doorstep</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>All SugarMD orders are picked, packed, and shipped from <strong>Inventel Warehouse · 240 West Parkway, Middle Door, Pompton Plains, NJ 07444</strong>. This is the same fulfillment infrastructure that supports every brand in the Inventel portfolio — known process, known transit windows, known escalation paths.</p>

      <h3>The 5-step fulfillment flow</h3>
      <ol style="padding-left:24px;line-height:1.85">
        <li><strong>Order placed</strong> — customer completes checkout on sugarmds.com. Order confirmation email sent immediately.</li>
        <li><strong>Label printed</strong> — order moves to the warehouse queue. <strong>Short cancellation window</strong> exists between order placement and label print (usually under 12 hours during business days). Once a label is printed, it's already in motion.</li>
        <li><strong>Warehouse picks &amp; packs</strong> — Inventel team pulls SKUs from the shelf, packs, and applies the shipping label. Quality check at this stage.</li>
        <li><strong>Ships out</strong> — typically <strong>3–7 business days continental U.S.</strong>, varies by zone (see table below).</li>
        <li><strong>Returns flow back</strong> — to the same Pompton Plains address, with an RMA, per section #20.</li>
      </ol>

      <h3 style="margin-top:24px">Shipping zones &amp; transit windows</h3>
      <table>
        <thead><tr><th>Service</th><th>Region</th><th>Transit</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Ground standard</td><td>Lower 48</td><td>3–7 business days</td><td><strong>Free on every U.S. order — no minimum threshold.</strong> SugarMD's standout offer.</td></tr>
          <tr><td>Ground · East Coast</td><td>NJ · NY · PA · CT · MA · MD · VA · NC</td><td>2–3 business days</td><td>Proximity to NJ warehouse — fastest transit window</td></tr>
          <tr><td>Ground · Midwest</td><td>IL · OH · MI · MN</td><td>3–4 business days</td><td>—</td></tr>
          <tr><td>Ground · West Coast</td><td>CA · OR · WA · NV · AZ</td><td>4–6 business days</td><td>—</td></tr>
          <tr><td>AK / HI / PR / U.S. territories</td><td>Non-contiguous</td><td>Not supported by default</td><td><strong>Escalate to CX Fulfillment Supervisor</strong> — case-by-case</td></tr>
          <tr><td>International</td><td>Outside U.S.</td><td>Not supported</td><td>Even though sugarmds.com mentions international shipping in marketing copy, default fulfillment does not currently ship international. Escalate.</td></tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">CX · The free-shipping line</span>
        <p>"Free shipping on every U.S. order — no minimum" is one of SugarMD's strongest unfair advantages versus competitors who gate it at $50 or $75. <strong>Lead with it</strong> when a customer is hesitating on price, and <strong>reinforce it</strong> in cart-abandonment conversations. The sentence is short on purpose: don't muddy it with "ground standard 3-7 business days" caveats unless asked.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">CX · The cancellation window</span>
        <p>If a customer wants to cancel an order, the window is short — usually under 12 hours during business days, less on weekends because of warehouse staffing. <strong>Check Shopify for label-printed status before promising a cancellation.</strong> If the label has been printed, the order is gone — it'll ship and the customer will need to refuse delivery or initiate a return per section #20. Be honest about the window so customers don't expect an impossible cancellation.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">CX · "Where is my order?" (WISMO)</span>
        <p>The bulk of CX volume is WISMO — "where's my package?" — calls. Quick triage: <strong>(1)</strong> Get the order number. <strong>(2)</strong> Pull the tracking link in Shopify. <strong>(3)</strong> If still in expected window (3–7 business days), reassure the customer and share the tracking. <strong>(4)</strong> If past expected window with no movement for 3+ business days, treat as a likely lost-package situation — escalate to <strong>CX Fulfillment Supervisor</strong>. Don't promise a replacement until the supervisor confirms the path forward.</p>
      </div>

    </div>
  </div>
</section>

<!-- 22 — TEST ORDERS -->
<section id="testorders">
  <div class="card collapsible" data-section="testorders">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">22 · Test Orders</span>
        <h2>How We Test Without Breaking Things</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <div class="recall-callout">
        <div class="recall-callout-tag">Critical · Zero exceptions</div>
        <h4>YOU MUST type "Test Order" in the First Name field</h4>
        <p>Every team — Marketing, CX, QA, Brand, Web, anyone running a test on the SugarMD storefront — follows this rule with <strong>zero exceptions</strong>. The First Name field is how the warehouse knows not to ship the order to a real address. Skip this and the warehouse picks, packs, and ships the test order to whatever address you typed, costing real product and real shipping for nothing.</p>
      </div>

      <h3 style="margin-top:18px">The 7 steps</h3>
      <ol style="padding-left:24px;line-height:1.9">
        <li><strong>First Name</strong> = "Test Order" (literally — type those two words)</li>
        <li><strong>Last Name</strong> = your name (so the team knows who ran it)</li>
        <li><strong>Shipping address</strong> = Inventel office, <strong>200 Forge Way, Unit 1, Rockaway, NJ 07866</strong> (not the warehouse — the office)</li>
        <li><strong>Payment</strong> = any valid payment method · the order will run through real payment processing</li>
        <li><strong>Notify the CX Fulfillment Lead immediately</strong> on Google Chat — don't email, don't wait, don't assume someone else will</li>
        <li><strong>Include in the Chat ping:</strong> the order number, what was being tested, and when the order can be cancelled</li>
        <li><strong>Wait for confirmation</strong> from the CX Fulfillment Lead before considering the test complete · don't close the loop on your end alone</li>
      </ol>

      <div class="team-callout cx">
        <span class="team-tag">CX · If you see a test order come in</span>
        <p>If a "Test Order" first name shows up in your queue, do <strong>not</strong> contact the customer, do <strong>not</strong> process it as a normal order. Verify the First Name field, check the chat for the heads-up from the team member who placed it, and confirm with the CX Fulfillment Lead. If you can't find a heads-up notification, ping the Lead anyway — better to over-confirm than to ship a test order to a real customer's address by mistake.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">New Hire · Watch one before placing one</span>
        <p>Before you place your first test order, ask a teammate to walk you through one of theirs. Five minutes of observation is worth an hour of trying to remember the steps. Pay attention to: how they format the chat ping, which payment method they use, and how they confirm cancellation. The shape of "good test-order hygiene" is easier to copy than to reconstruct from a checklist.</p>
      </div>

    </div>
  </div>
</section>

<!-- 23 — SHOPIFY PLATFORM -->
<section id="shopify">
  <div class="card collapsible" data-section="shopify">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">23 · Shopify Platform</span>
        <h2>The Engine Underneath</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>All Inventel storefronts — including SugarMD — run on <strong>Shopify</strong>. Knowing what Shopify does (and doesn't do) for CX shapes which problems you can solve in the moment versus which need to escalate.</p>

      <h3>What Shopify handles for SugarMD</h3>
      <table>
        <thead><tr><th>Feature</th><th>What it does</th><th>CX implication</th></tr></thead>
        <tbody>
          <tr><td><strong>Storefront / Checkout</strong></td><td>The sugarmds.com site customers actually buy on</td><td>If the site or checkout is broken, escalate to <strong>Web Dev</strong> immediately — not a CX-fixable issue</td></tr>
          <tr><td><strong>Customer accounts</strong></td><td>Customers can create an account at <a href="https://sugarmds.com/account" target="_blank" rel="noopener">sugarmds.com/account</a></td><td>Account is optional — guest checkout is supported. Don't insist customers create an account if they don't want to.</td></tr>
          <tr><td><strong>Order management</strong></td><td>Order history, status, tracking — all visible in Shopify admin</td><td>This is where you look up every order. Bookmark the admin URL.</td></tr>
          <tr><td><strong>Discount codes</strong></td><td>Codes are configured by Marketing in Shopify · validated at checkout</td><td>If a code "doesn't work" — first check the monthly discount sheet, then the Shopify admin code list before promising anything</td></tr>
          <tr><td><strong>Subscriptions</strong></td><td>Recurring orders managed via Shopify subscription app · customer can self-manage at <a href="https://sugarmds.com/account/login" target="_blank" rel="noopener">sugarmds.com/account/login</a></td><td>Try to walk customers through self-service first. Only intervene manually when self-service fails.</td></tr>
          <tr><td><strong>Email notifications</strong></td><td>Order confirmations, shipping updates, refund confirmations — automatic</td><td>If a customer says they didn't get a confirmation, check spam/promotions tab first, then the email on file in Shopify</td></tr>
          <tr><td><strong>Refunds</strong></td><td>Processed in Shopify admin · returns to original payment method</td><td>Refunds typically appear in 5–10 business days · escalate if &gt; 10 business days</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">Key URLs (CX should bookmark)</h3>
      <table>
        <thead><tr><th>Purpose</th><th>URL</th></tr></thead>
        <tbody>
          <tr><td>Customer account</td><td><a href="https://sugarmds.com/account" target="_blank" rel="noopener">sugarmds.com/account</a></td></tr>
          <tr><td>Customer login (subscription self-service)</td><td><a href="https://sugarmds.com/account/login" target="_blank" rel="noopener">sugarmds.com/account/login</a></td></tr>
          <tr><td>All products collection</td><td><a href="https://sugarmds.com/collections/all" target="_blank" rel="noopener">sugarmds.com/collections/all</a></td></tr>
          <tr><td>Return policy (verbatim)</td><td><a href="https://sugarmds.com/return-policy" target="_blank" rel="noopener">sugarmds.com/return-policy</a></td></tr>
          <tr><td>Shipping policy</td><td><a href="https://sugarmds.com/shipping-policy" target="_blank" rel="noopener">sugarmds.com/shipping-policy</a></td></tr>
          <tr><td>Privacy policy</td><td><a href="https://sugarmds.com/privacy-policy" target="_blank" rel="noopener">sugarmds.com/privacy-policy</a></td></tr>
          <tr><td>Terms of service</td><td><a href="https://sugarmds.com/terms" target="_blank" rel="noopener">sugarmds.com/terms</a></td></tr>
          <tr><td>Contact us</td><td><a href="https://sugarmds.com/contact-us/" target="_blank" rel="noopener">sugarmds.com/contact-us/</a></td></tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">CX · Security reminders</span>
        <p>You will <strong>never</strong> handle a customer's password or payment information directly. If a customer wants to update either: send them to <a href="https://sugarmds.com/account/login" target="_blank" rel="noopener">sugarmds.com/account/login</a> for password resets, and to the order-update flow in their account for payment changes. <strong>Never type a customer's credit card number into a chat, email, or notes field.</strong> If a customer is sharing payment info over chat or phone, gently redirect them to the secure self-service flow.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">CX · When to escalate to Web Dev</span>
        <p>Five clear escalation triggers: <strong>(1)</strong> Site is fully down or checkout won't load. <strong>(2)</strong> A discount code that's clearly on the monthly sheet is throwing an error at checkout for multiple customers. <strong>(3)</strong> A subscription cancellation isn't processing despite the customer trying multiple times. <strong>(4)</strong> A customer reports they never received an order confirmation email and it's not in spam. <strong>(5)</strong> A refund issued more than 10 business days ago hasn't appeared on the customer's statement. For anything else, start with normal CX troubleshooting before paging Web Dev.</p>
      </div>

    </div>
  </div>
</section>

<!-- 24 — FAQ -->
<section id="faq">
  <div class="card collapsible" data-section="faq">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">24 · Frequently Asked Questions</span>
        <h2>The Top Questions Customers Ask</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>These are the most common customer questions across phone, email, and chat. Use these as a starting point — and remember the empathy reflex from section #09: <strong>acknowledge before you answer</strong>.</p>

      <h3>1 · Will SugarMD cure my diabetes?</h3>
      <p>No. SugarMD supplements are designed to <em>support</em> healthy blood sugar levels alongside the work you and your doctor are doing — they're not a cure. We won't claim that, because no supplement can. What customers tell us, with consistent daily use as part of a broader plan, is that they often see steadier energy and better daily numbers. Always run any supplement past your doctor first, especially if you're on medication.</p>

      <h3>2 · Are SugarMD products FDA approved?</h3>
      <p>Dietary supplements aren't "FDA approved" the way prescription drugs are — they're regulated by the FDA under different rules. SugarMD products are made in <strong>GMP-certified facilities</strong>, are <strong>third-party lab tested for purity and potency</strong>, and ingredients are screened for pesticides and heavy metals. The label tells the truth about what's in the bottle.</p>

      <h3>3 · Can I take SugarMD products with my prescription medication?</h3>
      <p>That's a question for your doctor or pharmacist — we can't make a medical recommendation about your specific medications. We're happy to send you the full ingredient panel and supplement facts so you have something to bring to your appointment.</p>

      <h3>4 · How long until I see results?</h3>
      <p>Most customers tell us they start noticing changes around the <strong>4–6 week mark</strong>, with more meaningful results around <strong>8–12 weeks</strong> of consistent daily use. Supplements work gradually — they're not a quick fix. The customers who see the best outcomes are the ones who pair the supplements with steady daily habits: real food, walking, sleep.</p>

      <h3>5 · How does Subscribe &amp; Save work?</h3>
      <p>Subscribe to any product and save: <strong>10% monthly · 15% bi-monthly through 5-month · 20% every 6 months</strong>. You can adjust the cadence, skip a month, or cancel anytime — no penalty, no phone calls required. Manage everything in your account at <a href="https://sugarmds.com/account/login" target="_blank" rel="noopener">sugarmds.com/account/login</a>.</p>

      <h3>6 · What's your return policy?</h3>
      <p>30 days from purchase date, <strong>unopened and sealed bottles only</strong>, with a 20% processing fee deducted from the refund. All returns require an RMA — email <a href="mailto:feedback@sugarmds.com">feedback@sugarmds.com</a> to start the process. Full policy at <a href="https://sugarmds.com/return-policy" target="_blank" rel="noopener">sugarmds.com/return-policy</a>.</p>

      <h3>7 · Do you ship internationally?</h3>
      <p>SugarMD ships free to every U.S. order with no minimum threshold. International shipping isn't currently part of our standard fulfillment, and Alaska / Hawaii / U.S. territories are handled case-by-case. If you're outside the continental U.S., contact us at <a href="mailto:feedback@sugarmds.com">feedback@sugarmds.com</a> and we'll see what we can do.</p>

      <h3>8 · Why is the Berberine / ALA / Maca / Stelo "Sold Out"?</h3>
      <p>A handful of legacy SKUs run on a <strong>Notify Me When Available</strong> waitlist instead of being in continuous stock. As of the latest catalog: Berberine Premium 1200mg, Alpha Lipoic Acid 600mg, Ashwagandha 1000mg, Maca Root 1000mg, and the Stelo CGM. Sign up for the waitlist on the product page and you'll be notified the moment it's back. In the meantime, ask CX about an in-stock alternative — for example, Super Berberine is the active substitute for Berberine Premium.</p>

      <h3>9 · Can my child / pregnant wife / nursing partner take this?</h3>
      <p>SugarMD products are not intended for use during pregnancy, while nursing, or by anyone under 18. If you're navigating gestational diabetes or any blood-sugar question during pregnancy or nursing, please work directly with your OB or endocrinologist — they'll be able to recommend something appropriate for your situation.</p>

      <h3>10 · Where can I learn more about diabetes management?</h3>
      <p>Dr. Ergin's YouTube channel — <a href="https://www.youtube.com/channel/UCGGc50eoC865DeHvGHIbV0w" target="_blank" rel="noopener">@SugarMD</a> — has 1,600+ videos on diabetes management, including specific topics like "is X good for diabetics," ingredient deep-dives, and patient Q&amp;A. The blog at <a href="https://sugarmds.com/" target="_blank" rel="noopener">sugarmds.com</a> covers similar ground in written form, and the <strong>Diabetic Diet Guide</strong> hardcover is available on the site as a compact starting reference.</p>

      <h3>11 · What's going on with the FDA recall?</h3>
      <p>There was an FDA recall on a specific product lot. The brand complied with what the FDA required, and affected customers were notified directly. If you'd like to know whether your specific order was involved, contact us at <a href="mailto:feedback@sugarmds.com">feedback@sugarmds.com</a> with your order number — see <a href="#recall">section #25</a> in this hub for the full handling protocol.</p>

      <h3>12 · How do I cancel my subscription?</h3>
      <p>Two ways: <strong>(1)</strong> Self-service at <a href="https://sugarmds.com/account/login" target="_blank" rel="noopener">sugarmds.com/account/login</a> — log in, find your subscription, hit cancel. <strong>(2)</strong> Email <a href="mailto:feedback@sugarmds.com">feedback@sugarmds.com</a> or call <strong>561-462-5053</strong> and we'll process it for you. No phone-tree maze, no save-attempts unless you want them.</p>

    </div>
  </div>
</section>

<!-- 25 — FDA RECALL HANDLING -->
<section id="recall">
  <div class="card collapsible" data-section="recall">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">25 · FDA Recall Handling</span>
        <h2>How We Talk About the Recall</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <div class="recall-callout">
        <div class="recall-callout-tag">Internal only · Critical · Read before any CX shift</div>
        <h4>This section is the single source of truth for recall conversations</h4>
        <p>If a customer brings up the FDA recall, you handle it from this section's playbook. <strong>Do not improvise.</strong> Do not invent a timeline. Do not list affected products from memory. Do not promise refunds outside the protocol. Do not disparage the FDA or speculate about why the recall happened. The brand's reputation hinges on getting these conversations right — calm, accurate, and bounded.</p>
      </div>

      <h3 style="margin-top:18px">What CX is allowed to say (the safe-harbor script)</h3>
      <div style="background:#fff;border-left:4px solid var(--sm-sage-deep);padding:18px 22px;border-radius:8px;margin-bottom:18px;font-size:14px">
        <p style="margin:0;font-style:italic;color:var(--sm-sage-deep);font-size:15px;line-height:1.6">"Yes — there was an FDA recall on a specific lot of one of our products. The brand took it seriously, complied with everything the FDA required, and notified affected customers directly. If you'd like me to check whether your specific order was involved, I can pull that up — I'll just need your order number. For anything beyond that — refund questions, ongoing concerns, anything specific about your health — I'll loop in my supervisor so you're getting the right person."</p>
      </div>

      <h3>What CX is <em>not</em> allowed to say</h3>
      <div class="do-dont">
        <div class="dont">
          <h4>❌ Don't improvise on these</h4>
          <ul>
            <li>Specific product names beyond what your supervisor has explicitly cleared you to confirm</li>
            <li>The lot numbers involved (these are tracked in a controlled list — don't recite from memory)</li>
            <li>The cause of the recall ("contamination," "labeling issue," "manufacturing problem" — none of these without supervisor sign-off)</li>
            <li>The timeline ("it happened in [year]," "it's resolved," "it's still in process") — point to the FDA's published notice if needed, don't paraphrase the timeline yourself</li>
            <li>Any speculation about other lots, other products, or future recalls</li>
            <li>Comparative statements ("worse than the Tylenol recall," "small compared to industry," etc.)</li>
            <li>Disparaging the FDA, regulators, or the recall process</li>
            <li>Promises about refunds, replacement, compensation, or store credit beyond the standard 30-day policy</li>
          </ul>
        </div>
        <div class="do">
          <h4>✅ What you <em>can</em> do</h4>
          <ul>
            <li>Acknowledge the recall happened — it's public</li>
            <li>Confirm the brand complied with FDA requirements</li>
            <li>Look up the customer's specific order to see if it was involved</li>
            <li>Take the customer's order number, name, and concern</li>
            <li>Escalate to <strong>CX Supervisor</strong> for anything beyond a routine order lookup</li>
            <li>Apologize for the inconvenience without admitting specific fault ("I'm sorry this came up for you")</li>
            <li>Point to <a href="https://www.fda.gov/" target="_blank" rel="noopener">FDA.gov</a> as the authoritative source for the public recall notice</li>
            <li>Offer to follow up by email after the supervisor has reviewed</li>
          </ul>
        </div>
      </div>

      <h3 style="margin-top:24px">The escalation tree</h3>
      <table>
        <thead><tr><th>Customer signal</th><th>CX action</th><th>Escalate to</th></tr></thead>
        <tbody>
          <tr><td>"I just want to know if my order was affected"</td><td>Look up order in Shopify, confirm yes/no based on the supervisor-controlled affected-orders list</td><td>If yes → CX Supervisor for next-step handling. If no → reassure and close.</td></tr>
          <tr><td>"I want a refund because of the recall"</td><td>Don't promise. Take details, confirm order, explain you're routing to a supervisor</td><td>CX Supervisor immediately — recall refunds are outside the standard 30-day policy</td></tr>
          <tr><td>"I think the recalled product made me sick"</td><td><strong>Stop the routine flow.</strong> Take their name, contact, order number, brief description of what they're experiencing</td><td>CX Supervisor + <strong>Legal / Compliance</strong> immediately. Do not suggest a course of action, do not minimize, do not promise compensation. Suggest they consult a medical professional.</td></tr>
          <tr><td>"I'm a journalist / blogger / advocate writing about this"</td><td>Politely decline to comment. Take their contact info.</td><td><strong>Marketing / Partnerships</strong> for press inquiry handling — never give a quote yourself</td></tr>
          <tr><td>"I'm calling on behalf of my [parent / spouse / family member]"</td><td>Verify HIPAA-style permission ("they're aware you're calling on their behalf?"). Take details.</td><td>If they have order details, look them up. If they're upset, escalate to CX Supervisor.</td></tr>
          <tr><td>"This is a class-action lawsuit / I'm a lawyer"</td><td>Do not engage on the merits. Take contact info politely.</td><td><strong>Legal / Compliance</strong> immediately. No further conversation until Legal has weighed in.</td></tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">CX · The two-sentence rule</span>
        <p>For most recall mentions, your entire response is just <strong>two sentences plus an offer to look up the order</strong>: <em>"Yes, there was an FDA recall on a specific lot — the brand complied with everything the FDA required and affected customers were notified directly. Would you like me to check whether your specific order was involved?"</em> If the customer is satisfied with that, the conversation closes there. If they push further, escalate. Most customers who ask are just confirming the brand is operating in good faith — answer that question cleanly and they'll move on. Don't volunteer extra context they didn't ask for.</p>
      </div>

      <div class="team-callout cx">
        <span class="team-tag">CX · If you don't know, say "I don't know"</span>
        <p>The single biggest mistake on a recall call is <strong>filling silence with speculation</strong>. If a customer asks something specific you can't confirm — what was wrong with the lot, when it'll be fully resolved, why it took as long as it did — the right answer is: <em>"That's a fair question and I want to give you accurate information rather than guess. Let me get my supervisor to follow up with you on that."</em> Take their email, end the call, and notify the supervisor. <strong>"I don't know" said honestly preserves trust; "I think it was…" said inaccurately destroys it.</strong></p>
      </div>

      <div class="team-callout brand">
        <span class="team-tag">Brand · Why we don't avoid the topic</span>
        <p>A common instinct after a recall is to never mention it, never proactively explain it, and hope it fades. That's the wrong instinct. Customers who've heard about it and don't get a clean acknowledgment lose more trust than customers who get a calm, brief, accurate confirmation. <strong>Acknowledgment + boundaries is the brand's strongest posture.</strong> "Yes, this happened. We complied. Here's what we know. Here's where to ask for more." That posture, repeated consistently across CX, is how the brand rebuilds trust over time.</p>
      </div>

      <div class="team-callout newhire">
        <span class="team-tag">New Hire · Practice the two-sentence script before your first shift</span>
        <p>Before your first CX shift, <strong>say the safe-harbor script out loud three times</strong>. Get comfortable with the rhythm: acknowledge → confirm compliance → offer to look up the order. The first time a recall question lands in your queue, you don't want to be reading off a screen — you want to be saying it like a person who already knows the answer. The script is short on purpose; memorize it.</p>
      </div>

      <h3 style="margin-top:24px">Documentation requirements</h3>
      <p>Every recall-related interaction — even the ones that close in two sentences — gets <strong>logged</strong>. Required fields:</p>
      <ul style="padding-left:24px;line-height:1.7">
        <li>Customer name + order number (if applicable)</li>
        <li>Channel (phone, email, chat)</li>
        <li>Date and time</li>
        <li>Brief summary of what they asked</li>
        <li>Whether you escalated, and to whom</li>
        <li>Outcome (resolved at first contact, awaiting supervisor follow-up, escalated to Legal, etc.)</li>
      </ul>
      <p>The log is reviewed weekly by the CX Supervisor and Legal — patterns in inbound questions inform brand and Legal communications. Skipping the log breaks that feedback loop.</p>

    </div>
  </div>
</section>

<!-- 26 — RESOURCES & CONTACTS -->
<section id="resources">
  <div class="card collapsible" data-section="resources">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">26 · Resources &amp; Contacts</span>
        <h2>Where to Go for What</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <p>SugarMD escalation contacts are listed by <strong>department, not by individual name</strong> — people change roles, departments don't. When in doubt, escalate up; it's better to over-route than to leave a customer waiting on the wrong desk.</p>

      <h3>Escalation contacts</h3>
      <table>
        <thead><tr><th>Escalation type</th><th>Department</th></tr></thead>
        <tbody>
          <tr><td>Unresolved customer complaint</td><td><strong>CX Supervisor</strong></td></tr>
          <tr><td>Return or refund dispute</td><td><strong>CX Fulfillment Supervisor</strong></td></tr>
          <tr><td>Brand or product question (positioning, claims, formula)</td><td><strong>Brand Lead</strong></td></tr>
          <tr><td>Technical / website issue (Shopify, checkout, subscription)</td><td><strong>Web Dev Team</strong></td></tr>
          <tr><td>Media, press, partnership inquiry</td><td><strong>Marketing / Partnerships</strong></td></tr>
          <tr><td>Legal or compliance question</td><td><strong>Legal / Compliance</strong></td></tr>
          <tr><td>Vet / product safety / "made me sick" claim</td><td><strong>Brand Lead + Legal / Compliance</strong></td></tr>
          <tr><td>FDA recall — anything beyond routine order lookup</td><td><strong>CX Supervisor</strong> (with Legal / Compliance loop-in for serious cases)</td></tr>
          <tr><td>Discount sheet questions or missing codes</td><td><strong>Marketing</strong></td></tr>
          <tr><td>Test order coordination</td><td><strong>CX Fulfillment Lead</strong> (Google Chat, immediate)</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">Customer-facing contact channels</h3>
      <table>
        <thead><tr><th>Channel</th><th>Who answers it</th><th>When to use it</th></tr></thead>
        <tbody>
          <tr><td><strong>Phone:</strong> 561-462-5053</td><td>CX team</td><td>Order questions, returns, general support · standard business hours</td></tr>
          <tr><td><strong>Email:</strong> <a href="mailto:feedback@sugarmds.com">feedback@sugarmds.com</a></td><td>CX team</td><td>RMA requests, written records, non-urgent questions</td></tr>
          <tr><td><strong>Contact form:</strong> <a href="https://sugarmds.com/contact-us/" target="_blank" rel="noopener">sugarmds.com/contact-us</a></td><td>CX team</td><td>Customer's first-time outreach when they don't have an order yet</td></tr>
          <tr><td><strong>Subscription self-service:</strong> <a href="https://sugarmds.com/account/login" target="_blank" rel="noopener">sugarmds.com/account/login</a></td><td>Customer (self-managed)</td><td>Cancellation, cadence change, address update — point customers here first</td></tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">Internal references &amp; tools</h3>
      <table>
        <thead><tr><th>Resource</th><th>Where to find it</th><th>Owned by</th></tr></thead>
        <tbody>
          <tr><td><strong>Monthly discount sheet</strong></td><td>Internal PM tool · ask manager or post in #discounts</td><td>Marketing</td></tr>
          <tr><td><strong>Brand Guidelines doc</strong></td><td>Inventel shared drive · "SugarMD Brand Guidelines"</td><td>Brand Lead</td></tr>
          <tr><td><strong>Logo &amp; visual asset library</strong></td><td>Inventel shared drive · "SugarMD Media Assets"</td><td>Brand Lead / Creative</td></tr>
          <tr><td><strong>Shopify admin</strong> (orders, refunds, code config)</td><td>shopify.com admin login · ask manager for access</td><td>Web Dev / CX Supervisor for permissions</td></tr>
          <tr><td><strong>Recall affected-orders list</strong></td><td>Controlled spreadsheet · CX Supervisor maintains</td><td>CX Supervisor + Legal</td></tr>
          <tr><td><strong>Dr. Ergin's YouTube channel</strong> (for content reference)</td><td><a href="https://www.youtube.com/channel/UCGGc50eoC865DeHvGHIbV0w" target="_blank" rel="noopener">@SugarMD on YouTube</a></td><td>Public — Dr. Ergin / Marketing</td></tr>
          <tr><td><strong>FDA recall public notice</strong></td><td><a href="https://www.fda.gov/" target="_blank" rel="noopener">FDA.gov</a></td><td>Public — FDA</td></tr>
        </tbody>
      </table>

      <div class="team-callout cx">
        <span class="team-tag">CX · The escalation rule of thumb</span>
        <p>If a customer interaction has any of these markers, escalate before promising anything: <strong>(1)</strong> mention of the FDA recall beyond a routine question, <strong>(2)</strong> a health concern or symptom, <strong>(3)</strong> a refund request outside the standard 30-day policy, <strong>(4)</strong> media, press, or legal language, <strong>(5)</strong> a customer asking for "the manager" or "someone in charge," <strong>(6)</strong> anything you genuinely don't know how to handle. Escalation is not failure — speed and accuracy on the right desk is the goal. Better routed late than answered wrong.</p>
      </div>

    </div>
  </div>
</section>

<!-- 27 — KNOWLEDGE CHECK QUIZ -->
<section id="quiz-section">
  <div class="card collapsible" data-section="quiz">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">27 · Knowledge Check Quiz</span>
        <h2>Prove It · 35 Questions · 70% to Pass</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

      <div id="quiz-intro">
        <p>Read everything above first. Then take this quiz to confirm you've internalized what matters most for handling SugarMD customer interactions and brand decisions. <strong>Pass: 25 of 35 correct (70%).</strong> One question at a time, immediate feedback, correct answers shown when you miss. You can retake as many times as you need — no penalty.</p>
        <p style="margin-bottom:24px">When you pass, you'll be able to enter your name and title, then print or save a certificate to send to your HR onboarding trainer as proof of completion.</p>
        <button class="quiz-start-btn" onclick="startQuiz()">Start the quiz →</button>
      </div>

      <div id="quiz-active" style="display:none">
        <div class="quiz-container">
          <div class="quiz-progress">
            <span>Question <span id="q-current">1</span> of <span id="q-total">35</span></span>
            <span>Score: <span id="q-score">0</span></span>
          </div>
          <div class="quiz-progress-bar"><div id="q-progress-bar" class="quiz-progress-fill" style="width:0%"></div></div>
          <h3 id="q-text" class="quiz-question"></h3>
          <div id="q-options" class="quiz-options"></div>
          <div id="q-feedback" style="display:none;padding:14px 18px;border-radius:8px;margin-top:16px;font-size:14px;line-height:1.5"></div>
          <button id="q-next-btn" style="display:none">Next Question →</button>
        </div>
      </div>

      <div id="quiz-pass" style="display:none">
        <div style="background:linear-gradient(135deg,var(--sm-gold) 0%,var(--sm-gold-light) 100%);border-radius:14px;padding:32px;text-align:center;margin-bottom:24px;color:var(--sm-sage-deep);position:relative;overflow:hidden">
          <div style="font-size:3.5rem;margin-bottom:8px">🎉</div>
          <h2 style="color:var(--sm-sage-deep);border:none;padding:0;margin:0;font-size:2rem">Congratulations — You Passed!</h2>
          <p style="color:var(--sm-sage-deep);font-size:1.1rem;margin:10px 0 0;font-family:'Fraunces',serif;font-style:italic">You've demonstrated working knowledge of the SugarMD brand, products, and CX protocols.</p>
        </div>

        <div id="certificate" style="background:var(--sm-paper);border:3px solid var(--sm-gold);border-radius:14px;padding:36px;margin-bottom:20px">
          <div style="text-align:center;margin-bottom:24px;padding-bottom:18px;border-bottom:2px solid var(--sm-gold)">
            <div style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);letter-spacing:.18em;text-transform:uppercase;font-weight:700;margin-bottom:6px">Inventel Innovations</div>
            <div style="font-family:'Fraunces',serif;font-weight:800;font-size:2rem;color:var(--sm-sage-deep);letter-spacing:-.005em">SugarMD Brand Knowledge</div>
            <div style="font-family:'Fraunces',serif;font-style:italic;color:var(--sm-gold-deep);font-size:1.1rem;margin-top:4px">Certificate of Completion</div>
          </div>
          <div style="margin-bottom:18px">
            <label style="font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-gold-deep);letter-spacing:.08em;text-transform:uppercase;font-weight:700;display:block;margin-bottom:6px">Name · Title</label>
            <input id="cert-name-input" type="text" placeholder="Jane Smith · CX Agent" style="width:100%;background:#fff;border:1px solid rgba(201,162,74,.4);padding:12px 14px;border-radius:8px;font-size:15px;font-family:'Inter',sans-serif;color:var(--sm-charcoal);outline:none" oninput="document.querySelectorAll('.name-printed').forEach(el=>el.textContent=this.value||'________________')">
            <div class="name-printed" style="display:none;font-family:'Fraunces',serif;font-weight:700;font-size:1.6rem;color:var(--sm-sage-deep);text-align:center;padding:14px 0;border-bottom:1px solid var(--sm-gold);margin-top:10px">________________</div>
          </div>
          <div style="display:flex;justify-content:center;margin:18px 0">
            <span style="display:inline-flex;align-items:center;gap:8px;background:var(--sm-sage-deep);color:var(--sm-gold);padding:8px 16px;border-radius:20px;font-family:'DM Mono',monospace;font-size:12px;font-weight:700;letter-spacing:.08em;text-transform:uppercase">✓ Passed</span>
          </div>
          <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:12px;margin:20px 0">
            <div style="background:#fff;padding:14px;border-radius:8px;text-align:center;border:1px solid rgba(201,162,74,.2)">
              <div style="font-family:'DM Mono',monospace;font-size:10px;color:var(--sm-gold-deep);letter-spacing:.08em;text-transform:uppercase;font-weight:700;margin-bottom:4px">Score</div>
              <div style="font-family:'Fraunces',serif;font-weight:800;font-size:1.6rem;color:var(--sm-sage-deep)" id="cert-pct">—%</div>
            </div>
            <div style="background:#fff;padding:14px;border-radius:8px;text-align:center;border:1px solid rgba(201,162,74,.2)">
              <div style="font-family:'DM Mono',monospace;font-size:10px;color:var(--sm-gold-deep);letter-spacing:.08em;text-transform:uppercase;font-weight:700;margin-bottom:4px">Correct</div>
              <div style="font-family:'Fraunces',serif;font-weight:800;font-size:1.6rem;color:var(--sm-sage-deep)" id="cert-correct">—/35</div>
            </div>
            <div style="background:#fff;padding:14px;border-radius:8px;text-align:center;border:1px solid rgba(201,162,74,.2)">
              <div style="font-family:'DM Mono',monospace;font-size:10px;color:var(--sm-gold-deep);letter-spacing:.08em;text-transform:uppercase;font-weight:700;margin-bottom:4px">Date</div>
              <div style="font-family:'Fraunces',serif;font-weight:800;font-size:1rem;color:var(--sm-sage-deep);margin-top:8px" id="cert-date">—</div>
            </div>
            <div style="background:#fff;padding:14px;border-radius:8px;text-align:center;border:1px solid rgba(201,162,74,.2)">
              <div style="font-family:'DM Mono',monospace;font-size:10px;color:var(--sm-gold-deep);letter-spacing:.08em;text-transform:uppercase;font-weight:700;margin-bottom:4px">Result</div>
              <div style="font-family:'Fraunces',serif;font-weight:800;font-size:1rem;color:var(--sm-sage-deep);margin-top:8px">PASS</div>
            </div>
          </div>
          <div style="text-align:center;font-family:'DM Mono',monospace;font-size:11px;color:var(--sm-text-muted);letter-spacing:.06em;margin-top:14px;padding-top:14px;border-top:1px solid rgba(201,162,74,.25)">
            Training Track · SugarMD Brand Hub v6.2 · Inventel Internal
          </div>
        </div>

        <div class="completion-actions" style="display:flex;gap:12px;flex-wrap:wrap;justify-content:center;margin-top:24px">
          <button onclick="restartQuiz()" style="background:var(--sm-gold);color:var(--sm-sage-deep);border:none;padding:12px 22px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:inherit;display:inline-flex;align-items:center;gap:8px;transition:transform .15s,box-shadow .15s" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 16px rgba(201,162,74,.5)'" onmouseout="this.style.transform='';this.style.boxShadow=''">↩ Retake Quiz</button>
          <button onclick="printCertificate()" style="background:var(--sm-sage-deep);color:var(--sm-gold);border:none;padding:12px 22px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:inherit;display:inline-flex;align-items:center;gap:8px;transition:transform .15s,box-shadow .15s" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 16px rgba(58,90,72,.35)'" onmouseout="this.style.transform='';this.style.boxShadow=''">🖨️ Print Certificate</button>
        </div>
        <div style="max-width:520px;margin:18px auto 0;padding:14px 18px;background:var(--sm-paper);border:1px solid rgba(201,162,74,.35);border-radius:10px;color:var(--sm-charcoal);font-size:13px;line-height:1.6;text-align:center">
          <strong style="color:var(--sm-sage-deep)">📨 Send to your HR onboarding trainer as proof of completion.</strong><br>
          Use <strong>🖨️ Print Certificate</strong> above — in the browser's print dialog, either send to a printer <em>or</em> choose <strong>&quot;Save as PDF&quot;</strong> as the destination. A clean screenshot of this completion card is also accepted.
        </div>
      </div>

      <div id="quiz-fail" style="display:none">
        <div style="background:linear-gradient(135deg,#A93728 0%,#7A2519 100%);border-radius:14px;padding:32px;text-align:center;margin-bottom:24px;color:#fff">
          <div style="font-size:3.5rem;margin-bottom:8px">📚</div>
          <h2 style="color:#fff;border:none;padding:0;margin:0;font-size:2rem">Not Quite — Let's Review</h2>
          <p style="color:#FFE2D8;font-size:1.1rem;margin:10px 0 0">You scored <strong id="fail-correct">—</strong> of 35 (<strong id="fail-pct">—%</strong>). You need 25 of 35 to pass.</p>
        </div>
        <p>This is a knowledge-building exercise, not a test you can fail in any meaningful sense — go re-read the sections that tripped you up and come back when you're ready. The areas most worth re-reviewing if you missed multiple questions:</p>
        <ul style="padding-left:24px;line-height:1.8;margin-bottom:20px">
          <li><strong>Section #02 · Product Line</strong> — categories, hero SKUs, live storefront link</li>
          <li><strong>Section #20 · Return Policy</strong> — unopened-only, 20% fee, RMA, 30-day window</li>
          <li><strong>Section #21 · Fulfillment</strong> — warehouse address, shipping zones, free shipping</li>
          <li><strong>Section #22 · Test Orders</strong> — the 7-step protocol</li>
          <li><strong>Section #25 · FDA Recall Handling</strong> — the safe-harbor script + escalation tree</li>
        </ul>
        <button onclick="restartQuiz()" style="background:var(--sm-gold);color:var(--sm-sage-deep);border:2px solid var(--sm-sage-deep);padding:12px 22px;border-radius:8px;font-size:14px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif">Retake Quiz</button>
      </div>

    </div>
  </div>
</section>

</main>

<button id="floating-toc-btn" onclick="openDrawer()" aria-label="Open menu">
  <svg viewBox="0 0 24 24"><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="18" x2="20" y2="18"/></svg>
</button>

<!-- DRAWER -->
<div id="toc-drawer-overlay" onclick="closeDrawer()"></div>
<aside id="toc-drawer" aria-hidden="true">
  <div class="toc-drawer-header">
    <span class="toc-drawer-title">SugarMD · Brand Hub</span>
    <button class="toc-drawer-close" onclick="closeDrawer()" aria-label="Close menu">×</button>
  </div>
  <nav id="toc-drawer-nav">
    <a href="#overview" onclick="closeDrawer()"><span class="toc-drawer-num">01</span><span class="toc-drawer-label">Brand Overview</span></a>
    <a href="#products" onclick="closeDrawer()"><span class="toc-drawer-num">02</span><span class="toc-drawer-label">Product Line</span></a>
    <a href="#vision" onclick="closeDrawer()"><span class="toc-drawer-num">03</span><span class="toc-drawer-label">Vision &amp; Pillars</span></a>
    <a href="#voice" onclick="closeDrawer()"><span class="toc-drawer-num">04</span><span class="toc-drawer-label">Brand Voice &amp; Tone</span></a>
    <a href="#personality" onclick="closeDrawer()"><span class="toc-drawer-num">05</span><span class="toc-drawer-label">Personality &amp; Adjectives</span></a>
    <a href="#visual" onclick="closeDrawer()"><span class="toc-drawer-num">06</span><span class="toc-drawer-label">Visual Identity</span></a>
    <a href="#audience" onclick="closeDrawer()"><span class="toc-drawer-num">07</span><span class="toc-drawer-label">Audience &amp; Personas</span></a>
    <a href="#competitors" onclick="closeDrawer()"><span class="toc-drawer-num">08</span><span class="toc-drawer-label">Competitors &amp; Positioning</span></a>
    <a href="#objections" onclick="closeDrawer()"><span class="toc-drawer-num">09</span><span class="toc-drawer-label">Objection Handling</span></a>
    <a href="#journey" onclick="closeDrawer()"><span class="toc-drawer-num">10</span><span class="toc-drawer-label">Customer Journey</span></a>
    <a href="#angles" onclick="closeDrawer()"><span class="toc-drawer-num">11</span><span class="toc-drawer-label">Marketing Angles</span></a>
    <a href="#creatives" onclick="closeDrawer()"><span class="toc-drawer-num">12</span><span class="toc-drawer-label">Winning Creatives</span></a>
    <a href="#social" onclick="closeDrawer()"><span class="toc-drawer-num">14</span><span class="toc-drawer-label">Social &amp; Digital</span></a>
    <a href="#partnerships" onclick="closeDrawer()"><span class="toc-drawer-num">15</span><span class="toc-drawer-label">Partnerships</span></a>
    <a href="#discounts" onclick="closeDrawer()"><span class="toc-drawer-num">16</span><span class="toc-drawer-label">Discounts &amp; Codes</span></a>
    <a href="#seo" onclick="closeDrawer()"><span class="toc-drawer-num">17</span><span class="toc-drawer-label">SEO</span></a>
    <a href="#cro" onclick="closeDrawer()"><span class="toc-drawer-num">18</span><span class="toc-drawer-label">CRO</span></a>
    <a href="#glossary" onclick="closeDrawer()"><span class="toc-drawer-num">19</span><span class="toc-drawer-label">Glossary</span></a>
    <a href="#returns" onclick="closeDrawer()"><span class="toc-drawer-num">20</span><span class="toc-drawer-label">Return Policy</span></a>
    <a href="#fulfillment" onclick="closeDrawer()"><span class="toc-drawer-num">21</span><span class="toc-drawer-label">Fulfillment</span></a>
    <a href="#testorders" onclick="closeDrawer()"><span class="toc-drawer-num">22</span><span class="toc-drawer-label">Test Orders</span></a>
    <a href="#shopify" onclick="closeDrawer()"><span class="toc-drawer-num">23</span><span class="toc-drawer-label">Shopify Platform</span></a>
    <a href="#faq" onclick="closeDrawer()"><span class="toc-drawer-num">24</span><span class="toc-drawer-label">FAQ</span></a>
    <a href="#recall" onclick="closeDrawer()"><span class="toc-drawer-num">25</span><span class="toc-drawer-label">FDA Recall Handling</span></a>
    <a href="#resources" onclick="closeDrawer()"><span class="toc-drawer-num">26</span><span class="toc-drawer-label">Resources &amp; Contacts</span></a>
    <a href="#quiz-section" onclick="closeDrawer()"><span class="toc-drawer-num">27</span><span class="toc-drawer-label">Knowledge Check Quiz</span></a>
    <a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'brand_hub_logout', '1', home_url( '/' ) ), 'brand_hub_logout' ) ); ?>" style="color:#B0322B;font-weight:600;"><span class="toc-drawer-num">⎋</span><span class="toc-drawer-label">Sign Out</span></a>

  </nav>
</aside>

<!-- JS — minimum viable for skeleton; full search/quiz JS comes in later stages -->
<script>
/* ==================== DRAWER & COLLAPSE ==================== */
function openDrawer(){document.getElementById('toc-drawer').classList.add('open');document.getElementById('toc-drawer-overlay').classList.add('open')}
function closeDrawer(){document.getElementById('toc-drawer').classList.remove('open');document.getElementById('toc-drawer-overlay').classList.remove('open')}
function toggleSection(headerEl){headerEl.parentElement.classList.toggle('collapsed')}
function expandAncestorSections(el){
  let cur=el;
  while(cur && cur!==document.body){
    if(cur.classList && cur.classList.contains('collapsible') && cur.classList.contains('collapsed')){
      cur.classList.remove('collapsed');
    }
    cur=cur.parentElement;
  }
}
function flashTarget(el){
  el.classList.remove('flash-target');
  void el.offsetWidth;
  el.classList.add('flash-target');
  setTimeout(()=>el.classList.remove('flash-target'),1900);
}

/* ==================== HUB SEARCH ==================== */
let searchIndex=[];
function buildSearchIndex(){
  searchIndex=[];
  document.querySelectorAll('main section.collapsible, main > section > .card').forEach(()=>{});
  // Sections (the .collapsible cards inside <section> with id)
  document.querySelectorAll('main section[id], #hero, #toc-section').forEach(sec=>{
    const id=sec.id; if(!id || id==='toc-section') return;
    const h2=sec.querySelector('h2');
    if(h2) searchIndex.push({type:'Section', label:h2.textContent.trim(), targetId:id, snippet:''});
  });
  // Team callouts
  document.querySelectorAll('.team-callout').forEach((el,i)=>{
    const tag=el.querySelector('.team-tag'); const p=el.querySelector('p');
    if(!tag || !p) return;
    let group='Callouts';
    if(el.classList.contains('cx')) group='CX Callouts';
    else if(el.classList.contains('creative')) group='Creative Callouts';
    else if(el.classList.contains('marketing')) group='Marketing Callouts';
    else if(el.classList.contains('brand')) group='Brand Callouts';
    else if(el.classList.contains('newhire')) group='New Hire Callouts';
    if(!el.id) el.id='callout-'+i;
    searchIndex.push({type:group, label:tag.textContent.trim(), targetId:el.id, snippet:p.textContent.trim().slice(0,90)+'…'});
  });
  // Glossary terms
  const glossarySection=document.getElementById('glossary');
  if(glossarySection){
    glossarySection.querySelectorAll('tbody tr').forEach((tr,i)=>{
      const td=tr.querySelector('td:first-child'); const def=tr.querySelector('td:nth-child(2)');
      if(!td || !def) return;
      if(!tr.id) tr.id='glossary-'+i;
      searchIndex.push({type:'Glossary', label:td.textContent.trim(), targetId:tr.id, snippet:def.textContent.trim().slice(0,90)+'…'});
    });
  }
  // FAQ entries
  const faqSection=document.getElementById('faq');
  if(faqSection){
    faqSection.querySelectorAll('h3').forEach((h,i)=>{
      if(!h.id) h.id='faq-'+i;
      const next=h.nextElementSibling;
      const snip=next?next.textContent.trim().slice(0,90)+'…':'';
      searchIndex.push({type:'FAQ', label:h.textContent.trim(), targetId:h.id, snippet:snip});
    });
  }
  // Objections
  const obSection=document.getElementById('objections');
  if(obSection){
    obSection.querySelectorAll('h3').forEach((h,i)=>{
      if(!h.id) h.id='obj-'+i;
      searchIndex.push({type:'Objections', label:h.textContent.trim(), targetId:h.id, snippet:''});
    });
  }
}
function runSearch(q){
  const r=document.getElementById('search-results');
  if(!q || q.length<2){r.classList.remove('open'); r.innerHTML=''; return;}
  const tokens=q.toLowerCase().split(/\s+/).filter(Boolean);
  const matches=searchIndex.filter(item=>{
    const hay=(item.label+' '+item.snippet).toLowerCase();
    if(q.length<=3){
      const re=new RegExp('\\b'+q.toLowerCase().replace(/[.*+?^${}()|[\]\\]/g,'\\$&'),'i');
      return re.test(hay);
    }
    return tokens.every(t=>hay.includes(t));
  });
  if(!matches.length){r.innerHTML='<div class="search-empty">No matches. Try a shorter query or different keywords.</div>'; r.classList.add('open'); return;}
  const groups={};
  matches.forEach(m=>{(groups[m.type]=groups[m.type]||[]).push(m);});
  const order=['Section','CX Callouts','Creative Callouts','Marketing Callouts','Brand Callouts','New Hire Callouts','Glossary','FAQ','Objections'];
  let html='';
  order.forEach(g=>{
    if(!groups[g]) return;
    html+='<div class="search-group"><div class="search-group-label">'+g+'</div>';
    groups[g].slice(0,8).forEach(m=>{
      html+='<a class="search-result" data-target="'+m.targetId+'">'+escapeHtml(m.label);
      if(m.snippet) html+='<div class="search-result-snippet">'+escapeHtml(m.snippet)+'</div>';
      html+='</a>';
    });
    html+='</div>';
  });
  r.innerHTML=html;
  r.classList.add('open');
  r.querySelectorAll('.search-result').forEach(a=>{
    a.addEventListener('click',()=>{
      const id=a.dataset.target;
      const el=document.getElementById(id);
      if(!el) return;
      expandAncestorSections(el);
      r.classList.remove('open');
      document.getElementById('hub-search').value='';
      setTimeout(()=>{el.scrollIntoView({behavior:'smooth',block:'center'}); flashTarget(el);},120);
    });
  });
}
function escapeHtml(s){return s.replace(/[&<>"']/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[c]);}
document.addEventListener('DOMContentLoaded',()=>{
  buildSearchIndex();
  const inp=document.getElementById('hub-search');
  inp.addEventListener('input',e=>runSearch(e.target.value));
  inp.addEventListener('focus',e=>{if(e.target.value) runSearch(e.target.value);});
  document.addEventListener('click',e=>{
    if(!e.target.closest('.nav-search-wrap')){document.getElementById('search-results').classList.remove('open');}
  });
});
document.addEventListener('keydown',e=>{
  if(e.key==='Escape'){closeDrawer(); document.getElementById('search-results').classList.remove('open');}
  if(e.key==='/' && document.activeElement.tagName!=='INPUT' && document.activeElement.tagName!=='TEXTAREA'){
    e.preventDefault();document.getElementById('hub-search').focus();
  }
});

/* ==================== QUIZ ==================== */
const quizQuestions=[
  // BRAND OVERVIEW & FOUNDATIONS
  {q:"Who founded SugarMD and what is his medical specialty?",options:["Dr. Ahmet Ergin · cardiologist","Dr. Ahmet Ergin · board-certified endocrinologist","Dr. Mark Hyman · functional medicine","An anonymous medical advisory board"],correct:1,why:"SugarMD was founded by Dr. Ahmet Ergin, a board-certified endocrinologist. His specialty in hormonal/metabolic conditions is the brand's authority anchor."},
  {q:"In what year was SugarMD acquired by Inventel?",options:["2022","2023","2024","2025"],correct:3,why:"SugarMD was acquired by Inventel in 2025. Dr. Ergin remains the medical authority and creative voice; ops run through Inventel."},

  // PRODUCT LINE — covering multiple categories
  {q:"Which SugarMD product is positioned as the bestseller in the Glucose Support category?",options:["GlucoDefense","Super Berberine","Advanced Glucose Support","Gluxion"],correct:2,why:"Advanced Glucose Support is the flagship bestseller — plant-based, berberine + cinnamon blend, 180 caps."},
  {q:"What makes SugarMD's Super Berberine different from generic berberine?",options:["It's organic-certified","It uses Dihydroberberine (DHB) with ~5× the bioavailability","It's twice the dose","It's a powder instead of a capsule"],correct:1,why:"Super Berberine uses Dihydroberberine (DHB) with roughly 5× the bioavailability of standard berberine HCl. Bioavailability is the differentiator."},
  {q:"Which SugarMD product is for Neuropathy support specifically related to glucose-related nerve damage?",options:["Mushroom Miracle","Resveratrol","Benfotiamine 300mg","D3 & K2 Drops"],correct:2,why:"Benfotiamine 300mg is in the Neuropathy Support category — built for glucose-related nerve damage. Alpha Lipoic Acid is the other key SKU in that stack."},
  {q:"What's the highest-priced single SKU on the SugarMD storefront?",options:["Health Pack Trio · Spring Reset","Stelo Glucose Biosensor","Professional Ionic Foot Spa","Gluxion Glucose Support"],correct:2,why:"Professional Ionic Foot Spa is the highest-priced single SKU on the line. It's a wellness device, not a supplement. Always verify current pricing on sugarmds.com."},
  {q:"Which of these is a Health Pack Trio bundle?",options:["Spring Reset","Metabolic Health","Immune Support Pack","All of the above"],correct:3,why:"All three are bundle SKUs: Spring Reset, Metabolic Health, Green Monday, Immune Support, and NDA Month are all pre-built protocol bundles."},
  {q:"DiaVitamin is unique among multivitamins because:",options:["It's diabetes-aware and contains no added iron","It's the only vegan multivitamin on the site","It includes berberine","It comes in liquid form"],correct:0,why:"DiaVitamin is a diabetes-aware multi with no added iron — iron is contraindicated for many diabetics."},
  {q:"DiaBtea's two key ingredients are:",options:["Green tea + ginger","Rosemary + olive leaf","Chamomile + lavender","Hibiscus + cinnamon"],correct:1,why:"DiaBtea is a rosemary + olive leaf tea sourced from Türkiye. 45 tea bags per box."},

  // BRAND VOICE & PILLARS
  {q:"How many voice modes does SugarMD's brand voice operate in?",options:["3","5","7","10"],correct:2,why:"Seven: Empathetic, Supportive, Educational, Trustworthy, Inspirational, Relatable, Science-Driven. The brand blends them rather than picking one."},
  {q:"Which two archetypes are PRIMARY in SugarMD's brand personality?",options:["Hero + Innocent","Caregiver + Sage","Magician + Outlaw","Ruler + Rebel"],correct:1,why:"Caregiver and Sage are primary; Innocent and Hero are supporting. The Caregiver opens, the Sage delivers substance."},
  {q:"What's a core thing SugarMD's voice should NEVER do?",options:["Cite scientific studies","Use the word 'you' to address customers","Promise to 'cure' or 'reverse' diabetes","Acknowledge customer struggles"],correct:2,why:"Promising to cure or reverse diabetes is an FTC/FDA violation and breaks the brand's evidence-led posture. Always 'support,' never 'cure.'"},

  // VISUAL IDENTITY
  {q:"What are SugarMD's primary and secondary typefaces per the brand guidelines?",options:["Helvetica + Arial","Gullia + Libre Franklin","Times New Roman + Garamond","Comic Sans + Papyrus"],correct:1,why:"Gullia (primary, display) and Libre Franklin (secondary, body) per the brand guidelines doc. Fraunces and Inter are web fallbacks."},

  // AUDIENCE & PERSONAS
  {q:"Which audience does SugarMD explicitly NOT market to?",options:["Adults aged 35–65","Caregivers of diabetic family members","Type 1 diabetics seeking insulin alternatives","People with prediabetes"],correct:2,why:"Type 1 diabetes requires insulin therapy. SugarMD's products support metabolic health but are not a substitute. We don't market to or claim benefits for Type 1."},
  {q:"Which named persona is the 'caregiver in the middle' — caring for a parent with diabetes?",options:["Laura (40s, teacher)","Marie (50s, office admin)","Adam (30s, designer)","David (50s, pharmacist)"],correct:1,why:"Marie is the 50s caregiver persona — full-time office admin, caring for her 78-year-old mother with diabetes."},

  // COMPETITORS & POSITIONING
  {q:"Which competitor sits at the 'specific-health + accessible' corner of SugarMD's positioning matrix?",options:["Gaia Herbs","Cymbiotika","Glucocil","Goop"],correct:2,why:"Glucocil is specific-health (diabetes-only) and accessible (drugstore-priced). SugarMD wins the broader middle by adding holistic warmth and Dr. Ergin's authority."},

  // OBJECTION HANDLING — CX CRITICAL
  {q:"A customer asks 'Can I take SugarMD with my metformin?' What's the right CX response?",options:["'Yes, they pair well together.'","'No, never combine supplements with prescription medication.'","'I can't make that call — please ask your doctor or pharmacist; I can send you the ingredient panel to bring to the appointment.'","'Cancel your metformin first.'"],correct:2,why:"CX gives no medical advice, ever. Defer to doctor/pharmacist and offer the ingredient panel as a useful artifact."},
  {q:"What's the realistic expected timeline to communicate when a customer asks 'how long until I see results?'",options:["7–14 days","4–6 weeks for first changes, 8–12 weeks for meaningful results","6 months minimum","Immediate"],correct:1,why:"4–6 weeks for first noticeable changes, 8–12 weeks for meaningful results. Honesty manages expectations and prevents the week-4 cancellation."},

  // SAMPLE WINNING CREATIVES — universal pattern
  {q:"How many universal winning-ad patterns does the brand recognize across Inventel brands?",options:["3","4","6","8"],correct:2,why:"Six: Specific Relatable Problem · Social Proof Front and Center · Native Authentic-Looking Creative · One Clear Simple Message · Contrast/Switch Framing · Emotion Over Logic."},

  // SAMPLE WINNING CREATIVES — gallery-specific
  {q:"In the SugarMD-specific creative gallery, what makes the '3-minute morning routine' Reels concept work?",options:["High-production cinematic look","Native phone-shot feel · numbered list · product shows briefly at second 18","Heavy product placement throughout","Celebrity endorsement"],correct:1,why:"It's native phone-shot, numbered-list overlay, and the product appears briefly at second 18 as one element among habits — not a hard sell."},

  // DISCOUNTS — REQUIRED COVERAGE
  {q:"Before honoring a customer's promo code, what's the FIRST thing CX should do?",options:["Apply the code and hope it works","Ask the customer for their email","Check the monthly discount sheet to verify the code is live","Offer the CX goodwill code instead"],correct:2,why:"The monthly discount sheet is the single source of truth. Verify before honoring — codes change monthly, and customer screenshots aren't authoritative."},
  {q:"Which discounts are EVERGREEN (always live) regardless of the monthly sheet?",options:["Black Friday + NDA Month","Subscribe & Save + New Customer first-order","Influencer codes + email-only codes","None — everything rotates monthly"],correct:1,why:"Subscribe & Save (10/15/20% by cadence) and the New Customer first-order discount are evergreen. Everything else rotates."},

  // SEO — REQUIRED COVERAGE
  {q:"Which is a priority SEO keyword theme for SugarMD?",options:["Latest diet trends","Insulin resistance & metabolic health","Celebrity workout routines","Cryptocurrency & wellness"],correct:1,why:"Insulin Resistance & Metabolic Health is one of six priority themes. Others: Diabetes 101, Blood Sugar Lifestyle, Supplement Evaluation, Specific Ingredients, Diabetes-Friendly Food."},

  // CRO — REQUIRED COVERAGE
  {q:"In the 6-stage CRO funnel, what's the customer's question at the PDP (Product Detail Page) stage?",options:["'Is this brand for me?'","'Is this the right product for my situation?'","'Should I commit?'","'Did this go through?'"],correct:1,why:"PDP is where the customer asks 'is this the right product for MY situation?' — answered by benefit hierarchy, ingredient transparency, subscribe-and-save framing, and reviews near the CTA."},

  // RETURN POLICY — multiple Qs because this is CX-critical
  {q:"What's the deduction percentage on a SugarMD return refund?",options:["No fee — full refund","10%","20% processing & handling fee","Restocking fee varies by SKU"],correct:2,why:"20% processing and handling fee deducted from the purchase price. Quote the specific dollar amount upfront before the customer ships."},
  {q:"Which of these is REQUIRED for every SugarMD return?",options:["A photo of the bottle","An RMA (Return Merchandise Authorization)","A doctor's note","Payment of return shipping in advance"],correct:1,why:"All returns MUST have an RMA. Customer emails feedback@sugarmds.com to receive return details before shipping anything."},
  {q:"A customer wants to return an OPENED bottle because 'it didn't work.' What's the standard answer?",options:["Approve a full refund","Approve a partial refund","Opened bottles are not eligible for refund — explain politely and offer alternatives","Escalate to Legal immediately"],correct:2,why:"Opened bottles are not eligible. Hygiene/safety policy, no exceptions under standard handling. For multi-item orders, offer to refund any UNOPENED bottles."},

  // FULFILLMENT — REQUIRED COVERAGE
  {q:"Where is the Inventel warehouse that ships every SugarMD order?",options:["Camden, NJ","Pompton Plains, NJ (240 West Parkway)","Brooklyn, NY","Philadelphia, PA"],correct:1,why:"All Inventel orders — including SugarMD — ship from 240 West Parkway, Middle Door, Pompton Plains, NJ 07444."},
  {q:"What's SugarMD's free-shipping threshold for U.S. orders?",options:["$25 minimum","$50 minimum","$75 minimum","No minimum — free shipping on every U.S. order"],correct:3,why:"Free shipping on every U.S. order with no minimum. It's one of SugarMD's standout offers vs. competitors."},

  // TEST ORDERS — REQUIRED COVERAGE
  {q:"When placing a test order, what MUST go in the First Name field?",options:["Your real first name","'Test Order' (literally those two words)","'Internal'","Leave it blank"],correct:1,why:"'Test Order' must be typed in the First Name field — zero exceptions. That's how the warehouse knows not to ship to a real address."},
  {q:"What address do test orders ship to?",options:["The Pompton Plains warehouse","The Inventel office at 200 Forge Way, Unit 1, Rockaway, NJ 07866","The employee's home address","Whichever address you pick"],correct:1,why:"Inventel office at 200 Forge Way, Unit 1, Rockaway, NJ 07866. The OFFICE — not the warehouse, which is a different address."},

  // SHOPIFY — REQUIRED COVERAGE
  {q:"All Inventel storefronts — including SugarMD — run on which platform?",options:["WooCommerce","Magento","Shopify","Custom-built"],correct:2,why:"All Inventel storefronts run on Shopify. CX uses Shopify admin for order management, refunds, code config, and customer accounts."},

  // FDA RECALL — CRITICAL
  {q:"A customer asks about the FDA recall. What's the LAST thing CX should ever do?",options:["Acknowledge the recall happened","Offer to look up the customer's specific order","Improvise about the timeline, products involved, or cause","Escalate to CX Supervisor for anything beyond routine"],correct:2,why:"Never improvise on a recall call. Acknowledge → confirm compliance → offer to look up the order → escalate. Specifics about lots, timeline, or cause come from the supervisor, not memory."},
  {q:"A customer says 'I think the recalled product made me sick.' What's the right action?",options:["Reassure them the product is safe","Offer a refund and close the ticket","Take their info, escalate IMMEDIATELY to CX Supervisor + Legal/Compliance, suggest they consult a medical professional","Send them a replacement product"],correct:2,why:"This is a Legal escalation. Don't minimize, don't promise compensation, don't suggest a course of action — get the supervisor and Legal involved before saying anything else, and suggest they see a medical professional."},

  // GLOSSARY / EVERGREEN OFFER
  {q:"What does 'Evergreen Offer' mean in SugarMD's context?",options:["A discount tied to a calendar window","A discount that's always live, not tied to a calendar (Subscribe & Save + New Customer)","A code that only works in winter","A code only employees can use"],correct:1,why:"An evergreen offer is always on. The two SugarMD evergreen offers are Subscribe & Save and the New Customer first-order discount."}
];

let qIdx=0, qScore=0, qLocked=false;
function startQuiz(){qIdx=0;qScore=0;qLocked=false;document.getElementById('quiz-intro').style.display='none';document.getElementById('quiz-active').style.display='block';document.getElementById('quiz-pass').style.display='none';document.getElementById('quiz-fail').style.display='none';document.getElementById('q-total').textContent=quizQuestions.length;renderQ();}
function renderQ(){
  qLocked=false;
  const q=quizQuestions[qIdx];
  document.getElementById('q-current').textContent=qIdx+1;
  document.getElementById('q-score').textContent=qScore;
  document.getElementById('q-progress-bar').style.width=((qIdx)/quizQuestions.length*100)+'%';
  document.getElementById('q-text').textContent=q.q;
  const opts=document.getElementById('q-options'); opts.innerHTML='';
  q.options.forEach((opt,i)=>{
    const btn=document.createElement('button');
    btn.className='quiz-option';
    btn.textContent=opt;
    btn.dataset.idx=i;
    btn.onclick=()=>pickAnswer(i,btn);
    opts.appendChild(btn);
  });
  document.getElementById('q-feedback').style.display='none';
  const nextBtn=document.getElementById('q-next-btn');
  nextBtn.style.display='none';
  nextBtn.textContent=(qIdx===quizQuestions.length-1)?'See Results →':'Next Question →';
  nextBtn.onclick=advanceQ;
}
function pickAnswer(picked,btnEl){
  if(qLocked) return; qLocked=true;
  const q=quizQuestions[qIdx]; const correct=q.correct;
  const allBtns=document.querySelectorAll('#q-options button');
  allBtns.forEach((b,i)=>{
    b.disabled=true;
    if(i===correct){
      b.classList.add('show-correct');
      b.innerHTML=b.textContent+' <span style="display:inline-block;margin-left:8px;background:var(--sm-sage-deep);color:var(--sm-gold);padding:2px 8px;border-radius:6px;font-size:11px;font-weight:700;letter-spacing:.05em">✓ CORRECT ANSWER</span>';
    } else if(i===picked && i!==correct){
      b.classList.add('incorrect');
      b.innerHTML=b.textContent+' <span style="display:inline-block;margin-left:8px;background:#fff;color:rgba(184,57,31,.95);padding:2px 8px;border-radius:6px;font-size:11px;font-weight:700;letter-spacing:.05em">✗ YOUR PICK</span>';
    }
  });
  if(picked===correct) qScore++;
  document.getElementById('q-score').textContent=qScore;
  const fb=document.getElementById('q-feedback');
  if(picked===correct){
    fb.style.cssText="display:block;padding:14px 18px;border-radius:8px;margin-top:16px;font-size:14px;line-height:1.5;background:rgba(255,249,231,.95);border-left:4px solid var(--sm-gold);color:var(--sm-charcoal)";
    fb.innerHTML='<strong style="color:var(--sm-sage-deep)">Correct.</strong> '+q.why;
  } else {
    fb.style.cssText="display:block;padding:14px 18px;border-radius:8px;margin-top:16px;font-size:14px;line-height:1.5;background:rgba(255,255,255,.95);border-left:4px solid var(--sm-danger);color:var(--sm-charcoal)";
    fb.innerHTML='<strong style="color:var(--sm-danger)">Not quite.</strong> '+q.why;
  }
  document.getElementById('q-next-btn').style.display='inline-block';
}
function advanceQ(){
  qIdx++;
  if(qIdx>=quizQuestions.length){finishQuiz();}
  else{renderQ(); window.scrollTo({top:document.getElementById('quiz-section').offsetTop-80,behavior:'smooth'});}
}
function finishQuiz(){
  document.getElementById('quiz-active').style.display='none';
  const pct=Math.round(qScore/quizQuestions.length*100);
  const passed=qScore>=25;
  if(passed){
    document.getElementById('cert-pct').textContent=pct+'%';
    document.getElementById('cert-correct').textContent=qScore+'/'+quizQuestions.length;
    const d=new Date();
    document.getElementById('cert-date').textContent=d.toLocaleDateString('en-US',{month:'short',day:'numeric',year:'numeric'});
    document.getElementById('quiz-pass').style.display='block';
  } else {
    document.getElementById('fail-correct').textContent=qScore;
    document.getElementById('fail-pct').textContent=pct+'%';
    document.getElementById('quiz-fail').style.display='block';
  }
  window.scrollTo({top:document.getElementById('quiz-section').offsetTop-80,behavior:'smooth'});
}
function restartQuiz(){startQuiz();}

/* ==================== PRINT CERTIFICATE ==================== */
function printCertificate(){
  const nameInput=document.getElementById('cert-name-input');
  if(!nameInput.value.trim()){
    nameInput.focus();
    nameInput.style.border='2px solid var(--sm-danger)';
    setTimeout(()=>{nameInput.style.border='1px solid rgba(201,162,74,.4)';},1800);
    return;
  }
  // Sync the name into print-only display elements
  document.querySelectorAll('.name-printed').forEach(el=>{el.textContent=nameInput.value; el.style.display='block';});
  nameInput.style.display='none';
  // Expand the quiz section so it's visible during print
  const quizCard=document.querySelector('#quiz-section .collapsible');
  if(quizCard) quizCard.classList.remove('collapsed');
  document.body.classList.add('printing');
  setTimeout(()=>{
    window.print();
    setTimeout(()=>{
      document.body.classList.remove('printing');
      nameInput.style.display='block';
      document.querySelectorAll('.name-printed').forEach(el=>{el.style.display='none';});
    },100);
  },80);
  // Safety net
  window.addEventListener('afterprint',function once(){
    document.body.classList.remove('printing');
    nameInput.style.display='block';
    document.querySelectorAll('.name-printed').forEach(el=>{el.style.display='none';});
    window.removeEventListener('afterprint',once);
  });
}
</script>
<?php bh_back_to_index_button('brand-hub-index', 'All Hubs'); ?>

</body>
</html>
