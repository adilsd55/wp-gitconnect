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
.nav-inner{display:flex;align-items:center;gap:14px;height:var(--nav-h);padding:0 20px;max-width:1200px;margin:0 auto}
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
<style>
/* ===== STANDARD QUIZ SUBMISSION BLOCK (matches Life Watch hub) ===== */
#quiz-section .submit-steps{color:#F0E8CC;font-size:14px;line-height:1.7;padding-left:22px;margin:10px 0}
#quiz-section .submit-steps li{color:#F0E8CC;margin-bottom:4px}
#quiz-section .submit-steps strong{color:#fff}
#quiz-section .submit-steps a,#quiz-section .naming-box a{color:var(--sm-gold-light);font-weight:600}
#quiz-section .naming-box{max-width:660px;margin:14px 0 0;padding:14px 18px;background:rgba(255,255,255,.10);border:1px solid rgba(201,162,74,.45);border-radius:10px;color:#F0E8CC;font-size:14px;line-height:1.7}
#quiz-section .naming-box strong{color:#fff}
#quiz-section .naming-box code{color:var(--sm-gold-light);font-family:'DM Mono',monospace;font-size:13px;word-break:break-word}
</style>
<style>
/* ===== WINNING CREATIVES · GOOGLE CHAT LINK CARD ===== */
#creatives .creatives-link-card{border:2px dashed rgba(201,162,74,.7);border-radius:12px;padding:18px 20px;margin:14px 0;display:flex;flex-wrap:wrap;align-items:center;gap:10px;background:#fff}
#creatives .creatives-link-card p{flex-basis:100%;margin:0}
#creatives .creatives-link{display:inline-block;background:#fff;border:2px solid var(--sm-link);border-radius:10px;padding:9px 16px;font-weight:700;color:var(--sm-link);text-decoration:underline}
#creatives .creatives-link:hover{background:#EEF4FF;opacity:1}
</style>
<style>
/* ===== SOURCE-OF-TRUTH PROVENANCE ===== */
.source-note{background:#EDF2F4;border:1px solid #81A5B4;border-left:4px solid #81A5B4;border-radius:8px;padding:12px 16px;margin:14px 0;font-size:13px;line-height:1.6;color:#33414A}
.source-note strong{color:#1F2520}
.source-note code{font-family:'DM Mono',monospace;font-size:12px;background:rgba(129,165,180,.20);padding:1px 5px;border-radius:3px}
.op-note{background:#F6F5F1;border:1px dashed #B5AE9C;border-radius:8px;padding:11px 15px;margin:12px 0;font-size:12.5px;line-height:1.55;color:#5A5348}
.op-note strong{color:#1F2520}
.audit-note{background:#FFF4E5;border:1px solid #D98C4A;border-left:4px solid #D98C4A;border-radius:8px;padding:12px 16px;margin:14px 0;font-size:13px;line-height:1.6;color:#5C3A18}
.audit-note strong{color:#3D2410}
.sm-sw{border-radius:10px;overflow:hidden;border:1px solid rgba(31,37,32,.12);background:#fff}
.sm-sw .bar{height:80px}
.sm-sw .meta{padding:10px 12px;font-size:12px}
.sm-sw .nm{font-weight:700;color:var(--sm-charcoal)}
.sm-sw .hx{font-family:'DM Mono',monospace;color:var(--sm-text-muted)}
.sm-sw .rl{color:var(--sm-text-muted);margin-top:4px;font-size:11px}
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
    <p style="font-size:11.5px;font-family:'DM Mono',monospace;letter-spacing:.04em;color:#F0E8CC;opacity:.85;margin:6px 0 0">Campaign copy &mdash; not an approved brand tagline. See Visual Identity.</p>
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
      <div class="source-note">
        <strong>Source of truth:</strong> <code>Sugar MD_Brand Guidlines.pdf</code>, pp.27&ndash;29. The guide defines four archetypes with these exact labels: <strong>The Caregiver (Primary)</strong> and <strong>The Sage (Primary)</strong> on p.28, then <strong>Innocent (secondary)</strong> and <strong>The Hero (supporting)</strong> on p.29.
      </div>
      <div class="audit-note">
        <strong>The audit report is incorrect on this point &mdash; no change was needed.</strong> The difference report claims the guide "contains The Caregiver (Primary) and The Innocent (Secondary)" and "does not define Sage or Hero archetypes," and asks for Sage/Hero to be demoted to an unapproved proposal. That is wrong: p.28 defines <strong>The Sage</strong> as a second <em>Primary</em> archetype, with core desire, purpose, traits and promise, and p.29 defines <strong>The Hero</strong> as supporting. This hub was already right, so its structure has been kept. Only the tier labels below were tightened to match the guide's own wording (Innocent is <em>secondary</em>, Hero is <em>supporting</em>). Flag this back to whoever produced the report.
      </div>
      <p>Per the brand guidelines doc, SugarMD operates from <strong>two primary archetypes</strong> blended together — Caregiver + Sage — with <strong>Innocent</strong> as the secondary register and <strong>Hero</strong> as a supporting one. The blend is what makes the brand work; over-indexing on any one archetype breaks the formula.</p>

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

      <div class="source-note">
        <strong>Source of truth &mdash; the brand has no approved tagline.</strong> On <code>Sugar MD_Brand Guidlines.pdf</code>, p.12, the <em>brand tagline</em> field is deliberately left blank (&ldquo;-&rdquo;). <strong>&ldquo;Guided by Nature, Perfected by Science&rdquo; is therefore campaign copy, not guideline authority.</strong> It is fine to keep using it in market, but it must not be presented as the official tagline until the Brand Lead confirms it and an approval reference is recorded here.
      </div>
      <div class="source-note">
        <strong>What p.12 <em>does</em> define:</strong> <strong>Voice</strong> &mdash; empathetic, supportive, educational, trustworthy, inspirational, relatable, science-driven. <strong>Tone</strong> &mdash; warm, reassuring, friendly, honest, encouraging, professional, uplifting. <strong>Personality</strong> &mdash; compassionate, reliable, empowering and educational. <strong>Promise</strong> &mdash; to deliver science-backed, clean and effective solutions that help individuals manage diabetes naturally, with an unwavering commitment to transparency and empathy.
      </div>

      <p>The visual system pairs a <strong>soft clinical palette</strong> &mdash; a blue-led set of muted blues, coral, mint and pale accents &mdash; with <strong>credibility cues</strong> (crisp typography, Dr. Ergin's actual portrait). The look says: <em>this is a doctor who happens to care about your whole life, not just your prescription</em>. Not Whole Foods. Not pharmaceuticals. The space in between.</p>
      <div class="op-note">
        <strong>Corrected:</strong> this paragraph previously described the system as &ldquo;natural earth tones (sage, cream, warm gold)&rdquo; with &ldquo;deep teal&rdquo; credibility cues. None of those are SugarMD colors &mdash; see the palette below.
      </div>

      <h3>Color palette</h3>
      <div class="source-note">
        <strong>Source of truth:</strong> <code>Sugar MD_Brand Guidlines.pdf</code>, p.39 (&ldquo;brand colors&rdquo;). The palette below is the guideline's, read directly off that page. The sage / cream / gold / teal / rust system this hub previously listed (#5A7A5E, #3F5A44, #C9A24A, #F5EDD8, #2D6363, #A8552E, #1F2520, #FBF5E4) does <strong>not appear anywhere in the source</strong> and was never approved &mdash; it is a website-derived invention.
      </div>
      <div class="audit-note">
        <strong>One correction to the audit report:</strong> the difference report lists <strong>seven</strong> brand colors and omits <code>#E9ECEF</code>. The guideline's palette page actually shows <strong>eight</strong>. All eight are below. Where the report and the source disagree, the source wins.
      </div>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:12px;margin-top:16px">
        <div class="sm-sw"><div class="bar" style="background:#81A5B4"></div><div class="meta"><div class="nm">Primary blue</div><div class="hx">#81A5B4</div><div class="rl">Dominant color on the guideline's palette page &mdash; it occupies roughly half the plate</div></div></div>
        <div class="sm-sw"><div class="bar" style="background:#DD947F"></div><div class="meta"><div class="nm">Coral</div><div class="hx">#DD947F</div><div class="rl">Secondary / warm counterpoint</div></div></div>
        <div class="sm-sw"><div class="bar" style="background:#B0CCBF"></div><div class="meta"><div class="nm">Mint</div><div class="hx">#B0CCBF</div><div class="rl">Secondary / calm support</div></div></div>
        <div class="sm-sw"><div class="bar" style="background:#F7D1B7"></div><div class="meta"><div class="nm">Peach</div><div class="hx">#F7D1B7</div><div class="rl">Light accent</div></div></div>
        <div class="sm-sw"><div class="bar" style="background:#DBEEBB"></div><div class="meta"><div class="nm">Pale green</div><div class="hx">#DBEEBB</div><div class="rl">Light accent</div></div></div>
        <div class="sm-sw"><div class="bar" style="background:#E9ECEF"></div><div class="meta"><div class="nm">Cool grey</div><div class="hx">#E9ECEF</div><div class="rl">Neutral ground</div></div></div>
        <div class="sm-sw"><div class="bar" style="background:#BFDFFC"></div><div class="meta"><div class="nm">Pale blue</div><div class="hx">#BFDFFC</div><div class="rl">Light accent</div></div></div>
        <div class="sm-sw"><div class="bar" style="background:#7F95D6"></div><div class="meta"><div class="nm">Periwinkle</div><div class="hx">#7F95D6</div><div class="rl">Accent / logo colorway</div></div></div>
      </div>

      <div class="team-callout creative">
        <span class="team-tag">Creative · Color hierarchy</span>
        <p>The guideline states no explicit hierarchy, but its palette page communicates one through area: <strong>#81A5B4 fills about half the plate</strong>, with <strong>#DD947F</strong> and <strong>#B0CCBF</strong> as the next largest blocks and the remainder as small accents. Read that as blue-led, with coral and mint as the supporting pair. <strong>#E9ECEF</strong> is the neutral ground.</p>
        <p style="margin-top:8px"><strong>Do not carry over the old rules.</strong> The previous guidance &mdash; "Warm Gold is the only color that should appear on a CTA", "Clinical Teal for authority moments", sage-and-cream as the workhorses &mdash; was built entirely on the unapproved palette. Gold and teal are not SugarMD colors. Any CTA, hierarchy or state-color convention needs to be rebuilt from the eight colors above and confirmed by the Brand Lead.</p>
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

      <div class="source-note">
        <strong>Source of truth &mdash; approved logo colorways:</strong> <code>Sugar MD_Brand Guidlines.pdf</code>, pp.31&ndash;35. The guide demonstrates the logo in <strong>four colorways only</strong>: on blue <code>#81A5B4</code>, on periwinkle <code>#7F95D6</code>, on mint <code>#B0CCBF</code>, and in black-or-white monochrome &mdash; each shown both reversed on a color block and as a colored mark on white. <strong>Sage and gold do not appear.</strong> The hub's previous instruction to authorize "sage, cream, gold and white variants" inherited the unapproved palette and has been corrected.
      </div>
      <div style="background:#fff;border:1px solid rgba(129,165,180,.4);border-radius:10px;padding:16px;margin:12px 0;text-align:center">
        <img src="data:image/png;base64,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BQWhJRzHvfHGGz42OdE0/eabb/rrdIcOHdLr9VOnTv3zn//s4zD+0mbXrl2ON4FhGISQ73Y6DnMgSfKdd95ZuXJlS0vLww8/fN111+Xn5xcUFDz77LNTpkzZvn27Uqnk18U6P+r+++/ftm1bSkrKCy+8MHTo0Pz8/Pz8/AkTJnz55ZcjR478+uuvXTqUGGOTyWS329euXXvffff997//ve222yZPnnz77be7d4/Onj3rGF4YOnSoe3hbsGCB42k3btx4VQMOzrRa7Y4dOxz/zcjI6JV13h577DH3/VjOli9fHpzRb4TQE0884TFJCo8giCeffNJfS3Wuv/76pKSkoqKiDRs2+DhMJBJNnz591qxZIpGIv4W/BvJRIZdvoXsu5ueee+7FF1+USCRvv/32mTNnSkpKiouL33jjjSNHjtxyyy38UKTLBdbXX389Z86cCxcuPPnkkydOnCgpKTl//vzhw4cXL1589uzZO+6449KlSy5niYiIkMvlzz333Jo1a2bOnPnll1/u3bt3+/bt7g3OyspyJOesqKg4dOiQywH86kr+3/Pmzety10Iqlc6fP9/x39bW1t9++61rT+VVJwNX4DI1LF682NtEHD/sG0wrV6709g4sW7bMv+d65plnMMZ6vX7p0qXufXZv7r//foyxo+Ps7umnn8YY33XXXc43zp07l/8jum+luu666+rq6jDGbW1tzutH+EVZGo3GY2qMd999F2PsshU0ISGhpaWFpmmr1XrPPfe4P8q5h7Rx48alS5c6/vvaa685H5mUlKRWq/m7KioqJk+e7NhHcrU9JITQ/Pnznf+US5Ys8fbudVnIe0gY4y+//NJb52/FihUcxwWzMevWrfM2//f3v//dv+f68MMPEUIikWj16tUuK1l8+OWXXxBCt9xyi7cD+Eqbr776qvONBw4c4Ac/3VcIl5aW5uXlIYRIkuSXyPJUKlVCQoJUKvW4IpQfQL711lud/0Bms7lPnz4URREEsWbNGvdHOfeQxo4d++mnnzr+u3jxYucjdTqdYzwzLi5u3759ji7d1faQMMa//vqr85/yxRdf9PbudU3oAxJCaO7cuYcPH3ZeT1VaWuo+6BQct91226lTp5w/HGfOnHFcrfuRQCB4/vnn+aV9paWlq1atKigo6PCysQsBiaIofkzgzjvv9PiQOXPmMAyj0+mcA9Jdd92F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" alt="SugarMD logo shown in four approved colorways: blue, periwinkle, mint and black/white" style="max-width:100%;width:auto;max-height:520px;height:auto">
        <div style="font-family:'DM Mono',monospace;font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--sm-text-muted);margin-top:10px">Guideline pp.31&ndash;35 &mdash; reference only, not a production asset</div>
      </div>

      <h3 style="margin-top:18px">Logo Do / Don't</h3>
      <div class="do-dont">
        <div class="do">
          <h4>✅ DO</h4>
          <ul>
            <li>Use the official SVG/PNG from the asset library</li>
            <li>Maintain clear space around the mark &mdash; see the note below, this figure is operational rather than approved</li>
            <li>Use one of the four approved colorways shown above &mdash; blue #81A5B4, periwinkle #7F95D6, mint #B0CCBF, or black/white monochrome</li>
            <li>Reverse to <strong>white</strong> when placing the mark on any of those brand colors or on black</li>
            <li>Keep the molecule mark and the &ldquo;SugarMD&rdquo; wordmark together, with <strong>MD</strong> in its heavier weight</li>
          </ul>
        </div>
        <div class="dont">
          <h4>❌ DON'T</h4>
          <ul>
            <li>Stretch, skew, or rotate the logo</li>
            <li>Recolor outside the four approved colorways &mdash; in particular, <strong>never set the logo in sage green or gold</strong>; neither is a SugarMD color</li>
            <li>Place on busy backgrounds without a solid color block behind it</li>
            <li>Add drop shadows, glows, or filter effects</li>
            <li>Crop or remove the wordmark below 60% scale</li>
            <li>Use the old/legacy logo — always pull from the latest asset library</li>
          </ul>
        </div>
      </div>

      <div class="op-note">
        <strong>Operational, pending approval:</strong> the clear-space rule ("height of the S"), the minimum sizes (155px web / 1&quot; print / 60% compact) and the 60%-scale crop limit are <em>not</em> specified in the 2024 guideline. Keep using them for internal consistency, but don't cite them as brand standards, and get them confirmed before they appear in an external spec.
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
      <div class="creatives-link-card">
        <p>Our current winning SugarMD ads are shared in the team's Google Chat space, alongside the rest of the Inventel portfolio, so they stay up to date. You'll need to be signed in to your Inventel Google account to open it.</p>
        <a id="creatives-link" class="creatives-link" href="https://chat.google.com/room/AAQAyhmFXBc?cls=7" target="_blank" rel="noopener">Open winning creatives (Google Chat) &rarr;</a>
      </div>

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
        <h3 style="color:#fff;margin:0 0 10px">Ready to test what you've learned?</h3>
        <p style="color:#F0E8CC;font-size:14px;max-width:660px">Read everything above first. You'll get a multiple-choice question one at a time, drawn from the whole hub. Select an answer and you'll see immediately whether you got it right, then click Next to continue. <strong style="color:#fff">Pass: 25 of 35 correct (70%).</strong> Retake as many times as you need — no penalty.</p>
        <p style="color:#F0E8CC;font-size:14px;max-width:660px">When you pass, enter your name and title, then capture your result — a <strong style="color:#fff">screenshot of your score card is the easiest option</strong>, or you can print or save the certificate. <strong style="color:#fff">Every quiz — this one and every brand or platform quiz — follows the same submission process:</strong></p>
        <ol class="submit-steps">
          <li><strong>Capture your result</strong> — a screenshot of your score card is easiest, or save it as a PDF.</li>
          <li><strong>Name the file</strong> using the standard convention (below) so it's easy to find and track.</li>
          <li><strong>Upload it</strong> to the <a href="https://drive.google.com/drive/folders/19vsre-bLq4zDgwEAYGcSX22SpJ7hNvIM?usp=drive_link" target="_blank" rel="noopener">InvenTel University Quiz Results</a> folder.</li>
          <li><strong>Notify the person who assigned the quiz</strong> — your onboarding manager, the Performance Team, your Department Lead, Brand Lead, or Agency Lead, depending on which quiz it was.</li>
        </ol>
        <div class="naming-box">
          <strong>📄 File naming convention</strong><br>
          <code>FirstName LastName_Team_Brand (or Platform)_Quiz_MMYYYY.pdf</code><br>
          <span style="font-size:13px">Example for this hub: <code>Jane Doe_CX_SugarMD_Quiz_092026.pdf</code></span>
        </div>
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
  {q:"Which two archetypes are PRIMARY in SugarMD's brand personality?",options:["Hero + Innocent","Caregiver + Sage","Magician + Outlaw","Ruler + Rebel"],correct:1,why:"Per the brand guidelines (pp.28-29): The Caregiver (Primary) and The Sage (Primary), with Innocent as secondary and The Hero as supporting. The Caregiver opens the conversation, the Sage delivers the substance."},
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
