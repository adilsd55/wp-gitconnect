<?php /* Template Name: Life Watch Brand Hub */ ?>
<?php bh_require_login(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Life Watch — Brand Knowledge Hub | Inventel</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&family=DM+Sans:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root {
  --lw-graphite: #1E2328;
  --lw-orange-deep: #C2360B;
  --lw-orange: #F94515;
  --lw-orange-light: #FF8F66;
  --lw-peach: #FFD6C4;
  --lw-mist: #F5F4F2;
  --lw-steel: #E3E6EA;
  --lw-slate: #3C4450;
  --lw-amber: #A15C00;
  --lw-text: #1A1A1A;
  --lw-text-muted: #5A5A5A;
  --lw-link: #0055CC;
  --lw-white: #FFFFFF;
  --lw-danger: #B8391F;
  --nav-h: 60px;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'DM Sans',sans-serif;background:var(--lw-mist);color:var(--lw-text);font-size:16px;line-height:1.6;-webkit-font-smoothing:antialiased}

/* TOP HEADER (slim, brand-only) */
#top-nav{position:sticky;top:0;z-index:1000;background:var(--lw-graphite);box-shadow:0 2px 12px rgba(0,0,0,.25)}
.nav-inner{display:flex;align-items:center;justify-content:space-between;height:var(--nav-h);padding:0 20px;max-width:1200px;margin:0 auto}
.nav-brand{font-family:'Playfair Display',serif;font-size:16px;font-weight:800;color:var(--lw-peach);white-space:nowrap;letter-spacing:.02em}
.nav-top-toc-btn{background:transparent;border:1px solid var(--lw-orange-light);color:var(--lw-peach);padding:6px 14px;border-radius:20px;font-size:12px;font-weight:600;cursor:pointer;font-family:'DM Mono',monospace;letter-spacing:.05em;text-transform:uppercase;transition:all .2s}
.nav-top-toc-btn:hover{background:var(--lw-orange-light);color:var(--lw-graphite)}

/* FLOATING TOC BUTTON */
#floating-toc-btn{position:fixed;bottom:24px;right:24px;z-index:998;background:var(--lw-graphite);color:var(--lw-peach);border:2px solid var(--lw-orange-light);width:56px;height:56px;border-radius:50%;cursor:pointer;box-shadow:0 6px 20px rgba(30,35,40,.35);display:flex;align-items:center;justify-content:center;transition:all .2s;font-size:22px}
#floating-toc-btn:hover{background:var(--lw-orange-deep);transform:translateY(-2px);box-shadow:0 8px 24px rgba(30,35,40,.45)}
#floating-toc-btn svg{width:24px;height:24px;stroke:var(--lw-peach);fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* TOC DRAWER */
#toc-drawer-overlay{position:fixed;inset:0;background:rgba(30,35,40,.55);backdrop-filter:blur(4px);z-index:1500;opacity:0;pointer-events:none;transition:opacity .25s}
#toc-drawer-overlay.open{opacity:1;pointer-events:auto}
#toc-drawer{position:fixed;top:0;right:0;bottom:0;width:min(400px,92vw);background:var(--lw-mist);z-index:1501;padding:0;overflow-y:auto;transform:translateX(100%);transition:transform .3s cubic-bezier(.4,0,.2,1);box-shadow:-8px 0 30px rgba(0,0,0,.3);display:flex;flex-direction:column}
#toc-drawer.open{transform:translateX(0)}
.toc-drawer-header{display:flex;justify-content:space-between;align-items:center;padding:16px 20px;background:var(--lw-graphite);color:#fff;border-bottom:3px solid var(--lw-orange-light);position:sticky;top:0;z-index:2}
.toc-drawer-title{font-family:'Playfair Display',serif;color:#fff;font-size:1.15rem;font-weight:800;letter-spacing:.01em}
.toc-drawer-close{background:rgba(255,255,255,.12);border:1px solid rgba(255,214,196,.4);color:#fff;font-size:20px;cursor:pointer;line-height:1;width:30px;height:30px;border-radius:50%;display:flex;align-items:center;justify-content:center;transition:all .15s}
.toc-drawer-close:hover{background:var(--lw-peach);color:var(--lw-graphite);border-color:var(--lw-peach)}
#toc-drawer-nav{padding:10px 12px 14px;display:flex;flex-direction:column;gap:3px}
#toc-drawer-nav a{display:flex;align-items:center;gap:10px;background:#fff;color:var(--lw-graphite);text-decoration:none;padding:7px 12px;border-radius:7px;font-size:13px;font-family:'DM Sans',sans-serif;font-weight:600;border:1px solid rgba(255,143,102,.35);border-left:4px solid var(--lw-orange-deep);transition:all .15s;line-height:1.2}
#toc-drawer-nav a:hover{background:var(--lw-orange-deep);color:#fff;border-color:var(--lw-orange-deep);border-left-color:var(--lw-amber);transform:translateX(3px);opacity:1;box-shadow:0 2px 8px rgba(194,54,11,.25)}
#toc-drawer-nav a:hover .toc-drawer-num{background:var(--lw-amber);color:#fff}
.toc-drawer-num{display:inline-flex;align-items:center;justify-content:center;min-width:30px;height:20px;padding:0 6px;background:var(--lw-peach);color:var(--lw-graphite);border-radius:4px;font-family:'DM Mono',monospace;font-size:10.5px;font-weight:700;letter-spacing:.02em;flex-shrink:0;transition:all .15s}
.toc-drawer-label{flex:1;min-width:0}

/* TABLE OF CONTENTS SECTION */
#toc-section .toc-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:10px;margin-top:10px}
.toc-tile{background:#fff;border:1px solid rgba(255,143,102,.3);border-left:4px solid var(--lw-orange-deep);border-radius:10px;padding:14px 16px;text-decoration:none;color:var(--lw-text);display:flex;align-items:center;gap:12px;transition:all .2s;cursor:pointer}
.toc-tile:hover{background:var(--lw-mist);border-left-color:var(--lw-amber);transform:translateX(3px);opacity:1;text-decoration:none}
.toc-tile-num{font-family:'DM Mono',monospace;color:var(--lw-orange);font-size:12px;font-weight:700;min-width:24px}
.toc-tile-label{font-size:14px;font-weight:600;color:var(--lw-graphite)}

/* COLLAPSIBLE SECTIONS */
.card.collapsible{padding:0;overflow:hidden;transition:all .3s ease}
.section-header-bar{display:flex;align-items:center;justify-content:space-between;padding:22px 30px;cursor:pointer;user-select:none;background:linear-gradient(135deg,var(--lw-white) 0%,rgba(255,214,196,.12) 100%);transition:background .2s;border-bottom:1px solid transparent}
.section-header-bar:hover{background:linear-gradient(135deg,var(--lw-mist) 0%,rgba(255,214,196,.25) 100%)}
.section-header-bar .section-header-left{flex:1;min-width:0}
.section-header-bar .eyebrow{margin-bottom:4px}
.section-header-bar h2{margin:0;padding:0;border-bottom:none;font-size:1.4rem}
.section-toggle{background:transparent;border:1.5px solid var(--lw-orange);color:var(--lw-orange-deep);width:32px;height:32px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .2s;margin-left:14px}
.section-toggle:hover{background:var(--lw-orange-deep);color:#fff;border-color:var(--lw-orange-deep)}
.section-toggle svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:2.5;stroke-linecap:round;transition:transform .3s}
.collapsed .section-toggle svg{transform:rotate(-180deg)}
.section-body{padding:10px 30px 30px;max-height:20000px;overflow:hidden;transition:max-height .4s ease,padding .3s ease,opacity .3s ease;opacity:1}
.collapsed .section-body{max-height:0;padding-top:0;padding-bottom:0;opacity:0}
.collapsed .section-header-bar{border-bottom-color:transparent}

/* SECTIONS */
section{padding:48px 20px;max-width:980px;margin:0 auto;scroll-margin-top:var(--nav-h)}
h1{font-family:'Playfair Display',serif;font-size:clamp(2rem,5vw,3.6rem);font-weight:900;color:var(--lw-graphite);line-height:1.05;letter-spacing:-.01em}
h2{font-family:'Playfair Display',serif;font-size:clamp(1.6rem,3.5vw,2.4rem);font-weight:800;color:var(--lw-graphite);margin-bottom:24px;padding-bottom:12px;border-bottom:3px solid var(--lw-orange-light);letter-spacing:-.01em}
h3{font-family:'DM Sans',sans-serif;font-size:1.15rem;font-weight:700;color:var(--lw-orange-deep);margin-bottom:10px;letter-spacing:.01em}
h4{font-family:'DM Sans',sans-serif;font-size:1rem;font-weight:600;color:var(--lw-graphite);margin-bottom:8px}
p{margin-bottom:14px;color:var(--lw-text)}
a{color:var(--lw-link);text-decoration:underline}
a:hover{opacity:.75}
.eyebrow{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--lw-orange);margin-bottom:8px;display:block;font-weight:500}

/* SECTION CARD */
.card{background:var(--lw-white);border-radius:16px;padding:36px;margin-bottom:20px;box-shadow:0 2px 20px rgba(30,35,40,.06);border:1px solid rgba(255,143,102,.18)}

/* HERO */
#hero{max-width:100%;padding:0;margin:0;background:linear-gradient(135deg,var(--lw-graphite) 0%,var(--lw-orange-deep) 55%,var(--lw-orange) 100%);position:relative;overflow:hidden}
#hero::before{content:"";position:absolute;inset:0;background-image:radial-gradient(circle at 20% 20%, rgba(255,214,196,.15) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(249,69,21,.3) 0%, transparent 50%);pointer-events:none}
.hero-inner{max-width:980px;margin:0 auto;padding:64px 20px 56px;position:relative;z-index:1}
.hero-logo-wrap{display:flex;align-items:center;gap:20px;margin-bottom:28px;flex-wrap:wrap}
.hero-logo-wrap img{height:56px;object-fit:contain;background:#fff;padding:8px 14px;border-radius:8px}
.hero-brand-text-fallback{font-family:'Playfair Display',serif;font-size:2.2rem;font-weight:900;color:#fff}
.hero h1{color:#fff;margin-bottom:8px}
.hero-tagline{font-size:1.15rem;color:var(--lw-peach);margin-bottom:10px;font-weight:500}
.hero-meta{font-family:'DM Mono',monospace;font-size:13px;color:var(--lw-peach);opacity:.85;margin-bottom:28px;letter-spacing:.05em}
.hero-stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:14px;margin:28px 0}
.hero-stat{background:rgba(255,255,255,.08);border:1px solid rgba(255,214,196,.25);border-radius:12px;padding:18px;backdrop-filter:blur(4px)}
.hero-stat-num{font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:800;color:var(--lw-peach);line-height:1;margin-bottom:6px}
.hero-stat-lbl{font-size:12px;color:#fff;opacity:.85;line-height:1.35}
.chip-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:18px}
.chip{display:inline-flex;align-items:center;gap:6px;background:#fff;color:var(--lw-link)!important;text-decoration:underline;padding:7px 14px;border-radius:20px;font-size:13px;font-weight:500;transition:transform .15s}
.chip:hover{transform:translateY(-1px);opacity:1}

/* TAGS */
.tag-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:16px}
.tag{background:var(--lw-peach);color:var(--lw-graphite);padding:5px 12px;border-radius:12px;font-size:12px;font-weight:600;letter-spacing:.02em}

/* TABLES */
table{width:100%;border-collapse:collapse;margin:16px 0;background:#fff;border-radius:8px;overflow:hidden;font-size:14px}
th{background:var(--lw-graphite);color:#fff;padding:12px 14px;text-align:left;font-size:12px;text-transform:uppercase;letter-spacing:.05em;font-weight:600}
td{padding:12px 14px;border-bottom:1px solid rgba(30,35,40,.08);vertical-align:top}
tr:last-child td{border-bottom:none}
tr:nth-child(even) td{background:rgba(255,214,196,.08)}
.badge{display:inline-block;padding:3px 9px;border-radius:10px;font-size:11px;font-weight:600;letter-spacing:.03em;text-transform:uppercase}
.badge-watch{background:var(--lw-orange-deep);color:#fff}
.badge-band{background:var(--lw-slate);color:#fff}
.badge-accessory{background:var(--lw-amber);color:#fff}
.badge-kibble{background:var(--lw-orange-deep);color:#fff}
.badge-treat{background:var(--lw-amber);color:#fff}
.badge-supplement{background:var(--lw-orange);color:#fff}
.badge-bundle{background:var(--lw-slate);color:#fff}
.badge-catfood{background:#7B2CBF;color:#fff}

/* PILLAR CARDS */
.pillars{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:20px}
.pillar{background:linear-gradient(135deg,var(--lw-white) 0%,rgba(255,214,196,.25) 100%);padding:22px;border-radius:12px;border-left:4px solid var(--lw-orange-deep);transition:transform .2s}
.pillar:hover{transform:translateY(-3px)}
.pillar-icon{font-size:1.8rem;margin-bottom:10px;display:block}
.pillar h4{color:var(--lw-graphite);margin-bottom:6px;font-size:1rem}
.pillar p{font-size:13px;color:var(--lw-text-muted);margin-bottom:0;line-height:1.5}

/* TONE MODES */
.tone-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:14px;margin-top:20px}
.tone{background:var(--lw-mist);padding:20px;border-radius:10px;border-top:4px solid var(--lw-orange)}
.tone-label{font-family:'DM Sans',sans-serif;font-weight:700;color:var(--lw-graphite);font-size:14px;margin-bottom:6px}
.tone-desc{font-size:13px;color:var(--lw-text-muted);margin-bottom:10px}
.tone-ex{font-family:'Playfair Display',serif;font-style:italic;color:var(--lw-orange-deep);font-size:14px;border-left:3px solid var(--lw-orange-light);padding-left:10px;line-height:1.5}

/* DO/DONT */
.do-dont{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:16px}
.do-dont > div{padding:20px;border-radius:10px}
.do{background:rgba(249,69,21,.1);border:1px solid var(--lw-orange)}
.dont{background:rgba(184,57,31,.08);border:1px solid var(--lw-danger)}
.do h4{color:var(--lw-orange-deep)}
.dont h4{color:var(--lw-danger)}
.do ul,.dont ul{padding-left:18px;margin-top:8px}
.do li,.dont li{margin-bottom:6px;font-size:13px}
@media (max-width:640px){.do-dont{grid-template-columns:1fr}}

/* PERSONALITY ADJECTIVES */
.adj-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:12px;margin-top:18px}
.adj{background:#fff;padding:16px;border-radius:10px;border:1px solid var(--lw-peach)}
.adj-title{font-weight:700;color:var(--lw-orange-deep);font-size:14px;margin-bottom:5px;font-family:'DM Mono',monospace;text-transform:uppercase;letter-spacing:.05em}
.adj-desc{font-size:13px;color:var(--lw-text-muted);line-height:1.5}

/* COLOR PALETTE */
.palette{display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:12px;margin-top:16px}
.swatch{border-radius:10px;overflow:hidden;border:1px solid rgba(30,35,40,.12)}
.swatch-color{height:80px}
.swatch-info{padding:10px;background:#fff;font-size:12px}
.swatch-name{font-weight:700;color:var(--lw-graphite)}
.swatch-role{color:var(--lw-text-muted);margin:2px 0}
.swatch-hex{font-family:'DM Mono',monospace;color:var(--lw-orange-deep);font-size:11px}

/* TYPOGRAPHY SPECIMEN */
.type-spec{background:#fff;padding:18px;border-radius:10px;border:1px solid var(--lw-peach);margin-bottom:10px}
.type-spec-name{font-size:12px;font-family:'DM Mono',monospace;color:var(--lw-orange);text-transform:uppercase;letter-spacing:.1em;margin-bottom:6px}
.type-spec-use{font-size:12px;color:var(--lw-text-muted);margin-bottom:10px}

/* PERSONAS */
.personas{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:14px;margin-top:18px}
.persona{background:linear-gradient(135deg,var(--lw-white) 0%,var(--lw-mist) 100%);padding:22px;border-radius:12px;border:1px solid var(--lw-peach)}
.persona-name{font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:800;color:var(--lw-graphite);margin-bottom:4px}
.persona-type{font-family:'DM Mono',monospace;font-size:11px;color:var(--lw-orange);text-transform:uppercase;letter-spacing:.1em;margin-bottom:10px}
.persona-desc{font-size:13px;color:var(--lw-text-muted);margin-bottom:10px;line-height:1.55}
.persona-focus{font-size:12px;color:var(--lw-graphite)}
.persona-focus strong{color:var(--lw-orange-deep)}

/* OBJECTIONS */
.objection{background:#fff;border-radius:10px;padding:20px;margin-bottom:12px;border-left:4px solid var(--lw-amber)}
.objection-q{font-weight:700;color:var(--lw-danger);margin-bottom:8px;font-size:14px}
.objection-a{color:var(--lw-text);font-size:14px;line-height:1.6}
.objection-q::before{content:"💬 Objection: ";font-weight:800;color:var(--lw-amber)}
.objection-a::before{content:"✅ Response: ";font-weight:800;color:var(--lw-orange-deep)}

/* JOURNEY */
.journey{overflow-x:auto}

/* STATS */
.stat-boxes{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:14px;margin-top:18px}
.stat-box{background:linear-gradient(135deg,var(--lw-orange-deep) 0%,var(--lw-orange) 100%);color:#fff;padding:22px;border-radius:12px;text-align:center}
.stat-big{font-family:'Playfair Display',serif;font-size:2.4rem;font-weight:900;line-height:1;margin-bottom:6px;color:var(--lw-peach)}
.stat-lbl{font-size:12px;line-height:1.4;opacity:.95}

/* MARKETING ANGLES */
.angles{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:16px}
.angle{background:#fff;padding:20px;border-radius:10px;border-top:4px solid var(--lw-amber)}
.angle h4{color:var(--lw-graphite);margin-bottom:8px}
.angle-row{font-size:13px;margin-bottom:5px}
.angle-row strong{color:var(--lw-orange-deep);font-family:'DM Mono',monospace;text-transform:uppercase;font-size:11px;letter-spacing:.08em}

/* HOOKS */
.hooks{counter-reset:hook;list-style:none;padding:0;margin-top:14px}
.hooks li{counter-increment:hook;padding:12px 14px 12px 48px;margin-bottom:8px;background:#fff;border-radius:8px;position:relative;font-size:14px;border:1px solid var(--lw-peach)}
.hooks li::before{content:counter(hook,decimal-leading-zero);position:absolute;left:14px;top:50%;transform:translateY(-50%);font-family:'DM Mono',monospace;color:var(--lw-amber);font-weight:600;font-size:13px}

/* FAQ */
.faq-item{background:#fff;border-radius:10px;padding:20px;margin-bottom:10px;border:1px solid rgba(255,143,102,.3)}
.faq-q{font-weight:700;color:var(--lw-graphite);margin-bottom:10px;padding-left:30px;position:relative;font-size:14px}
.faq-q::before{content:"Q";position:absolute;left:0;top:-2px;width:22px;height:22px;background:var(--lw-orange-deep);color:#fff;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;font-family:'DM Mono',monospace}
.faq-a{color:var(--lw-text-muted);padding-left:30px;font-size:14px;line-height:1.6}

/* GLOSSARY */
.glossary{background:#fff;padding:24px;border-radius:10px}
.glossary dt{font-weight:700;color:var(--lw-orange-deep);font-family:'DM Mono',monospace;font-size:13px;text-transform:uppercase;letter-spacing:.05em;margin-top:14px}
.glossary dt:first-child{margin-top:0}
.glossary dd{margin-left:0;margin-top:4px;font-size:14px;color:var(--lw-text);line-height:1.55}

/* RETURN POLICY */
.policy-card{background:linear-gradient(135deg,var(--lw-mist) 0%,var(--lw-peach) 100%);border:2px solid var(--lw-orange-deep);border-radius:14px;padding:30px;margin-top:10px}
.policy-card h3{color:var(--lw-graphite);font-size:1.4rem;margin-bottom:14px;font-family:'Playfair Display',serif}
.policy-card p{font-size:14px;margin-bottom:12px;color:var(--lw-text)}
.policy-contact{background:#fff;padding:14px 18px;border-radius:8px;margin-top:10px;font-size:14px;border-left:4px solid var(--lw-orange-deep)}

/* QUIZ */
#quiz-section{background:linear-gradient(135deg,var(--lw-graphite) 0%,var(--lw-orange-deep) 100%);color:#fff;border-radius:20px;padding:0;margin-top:40px;overflow:hidden}
#quiz-section h2{color:#fff;border-bottom-color:var(--lw-orange-light);margin:0;padding:0;border:none}
#quiz-section .section-header-bar{background:transparent;padding:32px 30px 20px;border-bottom:1px solid rgba(255,214,196,.15)}
#quiz-section .section-header-bar:hover{background:rgba(255,255,255,.04)}
#quiz-section .section-toggle{border-color:var(--lw-peach);color:var(--lw-peach)}
#quiz-section .section-toggle:hover{background:var(--lw-peach);color:var(--lw-graphite)}
#quiz-section .section-body{padding:20px 30px 40px}
#quiz-section.collapsed .section-header-bar{border-bottom:none;border-color:transparent}
.quiz-container{background:rgba(255,255,255,.08);border-radius:14px;padding:28px;margin-top:20px;border:1px solid rgba(255,214,196,.3)}
.quiz-progress{font-family:'DM Mono',monospace;font-size:12px;color:var(--lw-peach);letter-spacing:.1em;margin-bottom:16px;text-transform:uppercase}
.quiz-progress-bar{height:6px;background:rgba(255,255,255,.12);border-radius:3px;overflow:hidden;margin-bottom:22px}
.quiz-progress-fill{height:100%;background:var(--lw-peach);transition:width .4s cubic-bezier(.4,0,.2,1);border-radius:3px}
.quiz-question{font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:700;margin-bottom:22px;line-height:1.35;color:#fff}
.quiz-options{display:flex;flex-direction:column;gap:10px}
.quiz-option{background:rgba(255,255,255,.06);border:2px solid rgba(255,214,196,.3);color:#fff;padding:14px 18px;border-radius:10px;text-align:left;font-size:14px;cursor:pointer;transition:all .2s;font-family:inherit;display:flex;align-items:center;gap:12px}
.quiz-option:hover{background:rgba(255,214,196,.2);border-color:var(--lw-peach);transform:translateX(4px)}
.quiz-option.correct{background:#FEF9E7;border-color:#F4C842;color:var(--lw-graphite);font-weight:700;box-shadow:0 0 0 3px rgba(244,200,66,.35);position:relative}
.quiz-option.correct::after{content:"✓ CORRECT";position:absolute;right:14px;top:50%;transform:translateY(-50%);background:#2D6A4F;color:#fff;font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.1em;padding:4px 10px;border-radius:20px}
.quiz-option.incorrect{background:rgba(184,57,31,.85);border-color:#fff;color:#fff;font-weight:700;position:relative}
.quiz-option.incorrect::after{content:"✗ YOUR PICK";position:absolute;right:14px;top:50%;transform:translateY(-50%);background:#fff;color:var(--lw-danger);font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.1em;padding:4px 10px;border-radius:20px}
.quiz-option.show-correct{background:#FEF9E7;border-color:#F4C842;color:var(--lw-graphite);font-weight:700;box-shadow:0 0 0 3px rgba(244,200,66,.35);position:relative}
.quiz-option.show-correct::after{content:"✓ CORRECT ANSWER";position:absolute;right:14px;top:50%;transform:translateY(-50%);background:#2D6A4F;color:#fff;font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.1em;padding:4px 10px;border-radius:20px}
.quiz-option.correct .quiz-option-letter,
.quiz-option.show-correct .quiz-option-letter{color:var(--lw-graphite)}
.quiz-option:disabled{cursor:default;transform:none;opacity:1}
.quiz-option:disabled:hover{transform:none}
.quiz-option:disabled:not(.correct):not(.show-correct):not(.incorrect){opacity:.35}
.quiz-feedback{margin-top:16px;padding:14px 18px;border-radius:10px;font-size:14px;font-weight:600;animation:fadeIn .3s ease}
.quiz-feedback.right{background:#FEF9E7;border-left:4px solid #F4C842;color:var(--lw-graphite)}
.quiz-feedback.wrong{background:#fff;border-left:4px solid var(--lw-danger);color:var(--lw-danger)}
@keyframes fadeIn{from{opacity:0;transform:translateY(-4px)}to{opacity:1;transform:translateY(0)}}
.quiz-next-btn{background:var(--lw-peach);color:var(--lw-graphite);border:none;padding:12px 24px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:inherit;margin-top:14px;transition:transform .15s}
.quiz-next-btn:hover{transform:translateY(-2px)}
.quiz-option-letter{font-family:'DM Mono',monospace;font-weight:700;color:var(--lw-peach);min-width:22px}
.quiz-start-btn,.quiz-submit-btn,.quiz-retry-btn{background:var(--lw-peach);color:var(--lw-graphite);border:none;padding:14px 28px;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer;font-family:inherit;margin-top:18px;transition:transform .15s,box-shadow .15s}
.quiz-start-btn:hover,.quiz-submit-btn:hover,.quiz-retry-btn:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(255,214,196,.4)}
.quiz-result-title{font-family:'Playfair Display',serif;font-size:2rem;margin-bottom:10px}
.quiz-result-pass{color:var(--lw-peach)}
.quiz-result-fail{color:#FFB4A2}
.quiz-score{font-family:'DM Mono',monospace;font-size:1.5rem;margin-bottom:16px}
.quiz-review{margin-top:20px;max-height:400px;overflow-y:auto;padding-right:6px}
.quiz-review-item{background:rgba(0,0,0,.2);padding:14px;border-radius:8px;margin-bottom:10px;font-size:13px;border-left:3px solid var(--lw-danger)}
.quiz-review-item.correct{border-left-color:var(--lw-orange-light)}
.quiz-review-q{font-weight:700;margin-bottom:6px;color:#fff}
.quiz-review-answer{font-size:12px;color:var(--lw-peach)}
.quiz-review-your{font-size:12px;color:#FFB4A2;margin-top:4px}

/* QUIZ COMPLETION CARD (PASS) */
.completion-wrap{padding:0}
.completion-header{background:linear-gradient(135deg,var(--lw-orange-light) 0%,var(--lw-peach) 50%,#FEF9E7 100%);color:var(--lw-graphite);padding:28px 24px;border-radius:14px 14px 0 0;text-align:center}
.completion-header .completion-emoji{font-size:3rem;line-height:1;margin-bottom:8px;display:block}
.completion-header h3{font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:800;color:var(--lw-graphite);margin:0;letter-spacing:.01em}
.completion-header .completion-sub{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.15em;text-transform:uppercase;color:var(--lw-orange-deep);margin-top:6px;font-weight:600}
.completion-card{background:#fff;color:var(--lw-text);border-radius:0 0 14px 14px;padding:32px 28px;box-shadow:0 4px 20px rgba(0,0,0,.08);border:1px solid rgba(255,143,102,.3);border-top:none}
.completion-brand{display:flex;align-items:center;justify-content:center;gap:14px;padding-bottom:20px;border-bottom:2px solid var(--lw-peach);margin-bottom:22px;flex-wrap:wrap}
.completion-brand img.logo-sm{height:42px;width:auto;object-fit:contain}
.completion-brand .completion-brand-text{font-family:'Playfair Display',serif;font-size:1.05rem;font-weight:700;color:var(--lw-graphite);text-align:center;line-height:1.35}
.completion-brand .completion-brand-text small{display:block;font-family:'DM Mono',monospace;font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--lw-orange);font-weight:600;margin-top:2px}
.completion-nameblock{margin-bottom:22px}
.completion-nameblock label{display:block;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--lw-orange);font-weight:700;margin-bottom:8px}
.completion-nameblock input{width:100%;padding:12px 14px;border:2px solid var(--lw-peach);border-radius:8px;font-family:'DM Sans',sans-serif;font-size:16px;color:var(--lw-graphite);background:var(--lw-mist);transition:border-color .15s}
.completion-nameblock input:focus{outline:none;border-color:var(--lw-orange-deep);background:#fff}
.completion-nameblock .name-printed{display:none;font-family:'Playfair Display',serif;font-size:1.5rem;font-weight:800;color:var(--lw-graphite);padding:8px 0;border-bottom:2px solid var(--lw-graphite)}
.completion-stats{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-bottom:22px}
.completion-stat{background:var(--lw-mist);border:1px solid rgba(255,143,102,.35);border-radius:10px;padding:14px 16px;text-align:center}
.completion-stat-label{display:block;font-family:'DM Mono',monospace;font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--lw-orange);font-weight:700;margin-bottom:4px}
.completion-stat-value{font-family:'Playfair Display',serif;font-size:1.5rem;font-weight:800;color:var(--lw-graphite);line-height:1.1}
.completion-badge{display:inline-flex;align-items:center;gap:8px;background:var(--lw-orange-deep);color:#fff;padding:10px 22px;border-radius:30px;font-family:'DM Mono',monospace;font-size:13px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;margin:0 auto 18px;box-shadow:0 4px 12px rgba(194,54,11,.25)}
.completion-track{text-align:center;font-family:'DM Mono',monospace;font-size:12px;letter-spacing:.1em;text-transform:uppercase;color:var(--lw-text-muted);padding-top:18px;border-top:1px dashed var(--lw-peach)}
.completion-track strong{display:block;font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:700;color:var(--lw-graphite);text-transform:none;letter-spacing:0;margin-top:4px}
.completion-actions{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:24px}
.completion-actions button{background:var(--lw-peach);color:var(--lw-graphite);border:none;padding:12px 22px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:inherit;transition:transform .15s,box-shadow .15s;display:inline-flex;align-items:center;gap:8px}
.completion-actions button:hover{transform:translateY(-2px);box-shadow:0 6px 16px rgba(255,214,196,.5)}
.completion-actions button.btn-print{background:var(--lw-graphite);color:var(--lw-peach)}
.completion-actions button.btn-print:hover{box-shadow:0 6px 16px rgba(30,35,40,.35)}
.completion-center{text-align:center}
.completion-center-wrap{display:flex;flex-direction:column;align-items:center}

/* FAIL SCREEN */
.fail-header{background:linear-gradient(135deg,rgba(184,57,31,.15) 0%,rgba(255,180,162,.2) 100%);padding:28px 24px;border-radius:14px;text-align:center;border:1px solid rgba(184,57,31,.2)}
.fail-header .fail-emoji{font-size:3rem;line-height:1;margin-bottom:8px;display:block}
.fail-header h3{font-family:'Playfair Display',serif;font-size:1.7rem;font-weight:800;color:#FFB4A2;margin:0 0 10px}
.fail-score{font-family:'DM Mono',monospace;font-size:1.8rem;font-weight:700;color:#FFB4A2;margin:8px 0 12px}
.fail-msg{color:#fff;font-size:14px;line-height:1.6;max-width:480px;margin:0 auto 18px}

/* PRINT / SCREENSHOT-READY CERTIFICATE */
/* Body gets .printing class while the print dialog is open — more reliable than pure @media print */
body.printing #top-nav,
body.printing #floating-toc-btn,
body.printing #toc-drawer,
body.printing #toc-drawer-overlay,
body.printing footer,
body.printing section:not(#quiz-section),
body.printing #quiz-section .section-header-bar,
body.printing #quiz-section > .section-body > p:first-of-type,
body.printing #quiz-section #quiz-start,
body.printing #quiz-section #quiz-active,
body.printing #quiz-section #quiz-results > p,
body.printing .completion-actions{display:none !important}
body.printing{background:#fff !important}
body.printing #quiz-section{background:#fff !important;box-shadow:none !important;border-radius:0 !important;margin:0 !important;padding:0 !important}
body.printing #quiz-section .section-body{padding:0 !important;background:#fff !important}
body.printing .quiz-container{background:#fff !important;border:none !important;padding:0 !important;margin:0 !important}
body.printing #quiz-results{display:block !important}
body.printing .completion-wrap{max-width:720px;margin:0 auto}
body.printing .completion-nameblock input{display:none !important}
body.printing .completion-nameblock .name-printed{display:block !important}

/* @media print takes over when the user actually prints — ensure all colors print */
@media print{
  @page{margin:0.4in}
  html,body{background:#fff !important}
  *{-webkit-print-color-adjust:exact !important;print-color-adjust:exact !important;color-adjust:exact !important}
  /* Apply the same hiding as .printing, in case the user prints without clicking our button */
  #top-nav, #floating-toc-btn, #toc-drawer, #toc-drawer-overlay, footer,
  section:not(#quiz-section),
  #quiz-section .section-header-bar,
  #quiz-section #quiz-start,
  #quiz-section #quiz-active,
  #quiz-section #quiz-results > p,
  .completion-actions{display:none !important}
  #quiz-section{background:#fff !important;box-shadow:none !important;border-radius:0 !important;color:#1E2328 !important}
  #quiz-section .section-body{padding:10px 0 !important;background:#fff !important}
  .quiz-container{background:#fff !important;border:none !important;padding:0 !important}
  .completion-nameblock input{display:none !important}
  .completion-nameblock .name-printed{display:block !important}
  .completion-header{background:linear-gradient(135deg,#FF8F66 0%,#FFD6C4 50%,#FEF9E7 100%) !important;color:#1E2328 !important}
  .completion-header h3,.completion-header .completion-sub{color:#1E2328 !important}
  .completion-stat{background:#F5F4F2 !important;border:1px solid #FF8F66 !important}
  .completion-badge{background:#2D6A4F !important;color:#fff !important}
}

/* SAMPLE WINNING CREATIVES */
.creative-intro{background:linear-gradient(135deg,var(--lw-mist) 0%,#fff 100%);border:1px solid var(--lw-peach);border-left:4px solid var(--lw-amber);border-radius:12px;padding:22px 24px;margin:14px 0 22px;font-size:14.5px;line-height:1.65;color:var(--lw-text)}
.creative-intro strong{color:var(--lw-graphite)}
.pattern-list{counter-reset:pat;list-style:none;padding:0;margin:18px 0 6px;display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:12px}
.pattern-list li{counter-increment:pat;background:#fff;border-radius:10px;padding:16px 18px 16px 56px;position:relative;border-top:4px solid var(--lw-amber);font-size:13.5px;line-height:1.55;color:var(--lw-text)}
.pattern-list li::before{content:counter(pat);position:absolute;left:14px;top:14px;width:30px;height:30px;display:flex;align-items:center;justify-content:center;background:var(--lw-orange-deep);color:#fff;border-radius:50%;font-family:'DM Mono',monospace;font-size:13px;font-weight:700}
.pattern-list .pat-title{display:block;font-family:'Playfair Display',serif;font-weight:800;color:var(--lw-graphite);font-size:15px;margin-bottom:4px}
.through-line{margin-top:18px;background:var(--lw-graphite);color:#fff;border-radius:12px;padding:20px 24px;font-size:14.5px;line-height:1.6;border-left:5px solid var(--lw-amber)}
.through-line strong{color:#F4C842;font-weight:800;letter-spacing:.02em}
.creative-gallery{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:18px;margin-top:22px}
.creative-card{background:#fff;border:1px solid var(--lw-peach);border-radius:12px;padding:14px;display:flex;flex-direction:column;gap:10px;transition:transform .15s ease,box-shadow .15s ease}
.creative-card:hover{transform:translateY(-2px);box-shadow:0 6px 18px rgba(30,35,40,.1)}
.creative-img{width:100%;height:auto;border-radius:8px;background:#F5F4F2;display:block}
.creative-meta{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--lw-orange);font-weight:700}
.creative-caption{font-size:13px;line-height:1.55;color:var(--lw-text)}
.creative-caption strong{color:var(--lw-graphite);display:block;font-family:'Playfair Display',serif;font-size:14.5px;margin-bottom:4px}
.creative-tags{display:flex;flex-wrap:wrap;gap:6px;margin-top:4px}
.creative-tag{background:rgba(255,143,102,.18);color:var(--lw-graphite);font-size:11px;padding:3px 8px;border-radius:12px;font-weight:600}

/* ADDRESS / WAREHOUSE BLOCKS */
.address-block{background:#fff;border:1px solid rgba(255,143,102,.35);border-left:4px solid var(--lw-orange-deep);border-radius:10px;padding:18px 22px;font-family:'DM Mono',monospace;font-size:14px;line-height:1.55;color:var(--lw-graphite);margin:12px 0}
.address-block .addr-label{display:block;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--lw-orange);margin-bottom:6px;font-weight:600}
.address-block strong{font-family:'DM Sans',sans-serif;font-size:15px;color:var(--lw-graphite)}

/* ALERT CALLOUT */
.alert-callout{background:rgba(161,92,0,.08);border:1px solid var(--lw-amber);border-left:5px solid var(--lw-amber);border-radius:10px;padding:18px 22px;margin:14px 0;font-size:14px;line-height:1.6;color:var(--lw-text)}
.alert-callout.critical{background:linear-gradient(135deg,#B8391F 0%,#8B2815 100%);border:3px solid #F4C842;border-radius:12px;padding:34px 26px 24px;margin:18px 0 22px;color:#fff;box-shadow:0 6px 24px rgba(184,57,31,.35);position:relative;overflow:hidden}
.alert-callout.critical::before{content:"";position:absolute;top:0;left:0;right:0;height:6px;background:repeating-linear-gradient(45deg,#F4C842 0 12px,#1E2328 12px 24px)}
.alert-callout strong{color:var(--lw-graphite)}
.alert-callout.critical strong{color:#F4C842;font-weight:800}
.alert-callout-title{display:block;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--lw-amber);font-weight:700;margin-bottom:6px}
.alert-callout.critical .alert-callout-title{color:#F4C842;font-size:15px;letter-spacing:.15em;font-weight:800;margin-bottom:12px;padding-bottom:10px;border-bottom:2px solid rgba(244,200,66,.4)}

/* CALLOUT — TEAM-SPECIFIC (CX, Creative, Marketing, etc.) */
.team-callout{border-radius:10px;padding:16px 20px 16px 56px;margin:14px 0;font-size:13px;line-height:1.6;position:relative;background:#fff;border:1px solid rgba(255,143,102,.35);border-left:5px solid var(--lw-orange-deep)}
.team-callout::before{content:"";position:absolute;left:16px;top:18px;width:28px;height:28px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700}
.team-callout .team-tag{display:inline-block;font-family:'DM Mono',monospace;font-size:10px;letter-spacing:.12em;text-transform:uppercase;font-weight:700;padding:3px 9px;border-radius:12px;margin-bottom:6px}
.team-callout.cx{border-left-color:var(--lw-orange-deep)}
.team-callout.cx::before{content:"📞";background:var(--lw-peach)}
.team-callout.cx .team-tag{background:var(--lw-orange-deep);color:#fff}
.team-callout.creative{border-left-color:var(--lw-amber);background:#FFF8F0}
.team-callout.creative::before{content:"🎨";background:#FFE4C4}
.team-callout.creative .team-tag{background:var(--lw-amber);color:#fff}
.team-callout.marketing{border-left-color:#8B4789;background:#FBF5FB}
.team-callout.marketing::before{content:"📢";background:#E9D8EC}
.team-callout.marketing .team-tag{background:#8B4789;color:#fff}
.team-callout.brand{border-left-color:var(--lw-graphite);background:#F1F8F3}
.team-callout.brand::before{content:"🌿";background:var(--lw-peach)}
.team-callout.brand .team-tag{background:var(--lw-graphite);color:#fff}
.team-callout.newhire{border-left-color:#2F6690;background:#F0F6FB}
.team-callout.newhire::before{content:"👋";background:#CDE5F3}
.team-callout.newhire .team-tag{background:#2F6690;color:#fff}
.team-callout strong{color:var(--lw-graphite)}

/* STEPS / ORDERED PROCESS */
.process-steps{counter-reset:step;list-style:none;padding:0;margin:18px 0 8px}
.process-steps > li{counter-increment:step;padding:16px 18px 16px 62px;margin-bottom:10px;background:#fff;border-radius:10px;position:relative;font-size:14px;border:1px solid rgba(255,143,102,.3);line-height:1.6}
.process-steps > li::before{content:counter(step);position:absolute;left:16px;top:14px;width:32px;height:32px;background:var(--lw-orange-deep);color:#fff;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-family:'DM Mono',monospace;font-weight:700;font-size:14px}
.process-steps > li strong{color:var(--lw-graphite)}

/* FOOTER */
footer{background:var(--lw-graphite);color:var(--lw-peach);text-align:center;padding:30px 20px;margin-top:40px;font-size:12px;font-family:'DM Mono',monospace;letter-spacing:.05em}

@media (max-width:640px){
  section{padding:36px 16px}
  .card{padding:22px}
  .card.collapsible{padding:0}
  .section-header-bar{padding:18px 20px}
  .section-header-bar h2{font-size:1.15rem}
  .section-body{padding:8px 20px 22px}
  .hero-inner{padding:48px 16px 40px}
  .nav-brand{font-size:13px}
  .nav-top-toc-btn{font-size:11px;padding:5px 10px}
  h2{font-size:1.5rem}
  table{font-size:12px}
  th,td{padding:8px 10px}
  #floating-toc-btn{bottom:16px;right:16px;width:50px;height:50px}
  .toc-tile-label{font-size:13px}
}

/* ================================
   SEARCH BAR (v6.1)
   ================================ */
.nav-search-wrap{position:relative;flex:1;max-width:420px;margin:0 14px}
.nav-search-box{display:flex;align-items:center;background:rgba(255,255,255,.08);border:1px solid rgba(255,214,196,.35);border-radius:20px;padding:5px 10px 5px 12px;transition:all .2s}
.nav-search-box:focus-within{background:rgba(255,255,255,.14);border-color:var(--lw-orange-light);box-shadow:0 0 0 3px rgba(255,143,102,.18)}
.nav-search-icon{color:var(--lw-peach);font-size:14px;margin-right:6px;pointer-events:none;display:flex;align-items:center}
.nav-search-icon svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:2.2;stroke-linecap:round;stroke-linejoin:round}
#nav-search-input{flex:1;background:transparent;border:none;outline:none;color:#fff;font-family:'DM Sans',sans-serif;font-size:13px;font-weight:500;padding:3px 4px;min-width:0}
#nav-search-input::placeholder{color:rgba(255,214,196,.6)}
.nav-search-clear{background:transparent;border:none;color:rgba(255,214,196,.7);font-size:16px;cursor:pointer;padding:0 4px;line-height:1;display:none;transition:color .15s}
.nav-search-clear:hover{color:#fff}
.nav-search-box.has-query .nav-search-clear{display:block}
.nav-search-kbd{display:inline-flex;align-items:center;gap:3px;font-family:'DM Mono',monospace;font-size:9.5px;color:rgba(255,214,196,.55);background:rgba(0,0,0,.2);padding:2px 5px;border-radius:3px;border:1px solid rgba(255,214,196,.15);letter-spacing:.04em;margin-left:4px;flex-shrink:0}
.nav-search-box:focus-within .nav-search-kbd{display:none}

/* Results dropdown */
#nav-search-results{position:absolute;top:calc(100% + 6px);left:0;right:0;background:var(--lw-mist);border:1px solid rgba(30,35,40,.15);border-radius:12px;box-shadow:0 12px 40px rgba(30,35,40,.28),0 0 0 1px rgba(255,214,196,.25);max-height:min(70vh,560px);overflow-y:auto;display:none;z-index:1100}
#nav-search-results.open{display:block}
.search-hint{padding:14px 16px;font-size:12px;color:var(--lw-text-muted);font-style:italic;text-align:center;border-bottom:1px solid rgba(30,35,40,.08)}
.search-group{padding:4px 0}
.search-group + .search-group{border-top:1px solid rgba(30,35,40,.08)}
.search-group-label{display:flex;align-items:center;justify-content:space-between;padding:8px 16px 4px;font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--lw-orange-deep);background:rgba(255,214,196,.25)}
.search-group-count{background:var(--lw-graphite);color:var(--lw-peach);padding:1px 7px;border-radius:10px;font-size:9.5px}
.search-result{display:block;padding:10px 16px;text-decoration:none;color:var(--lw-text);border-left:3px solid transparent;cursor:pointer;transition:background .12s,border-color .12s;font-family:'DM Sans',sans-serif}
.search-result:hover,.search-result.active{background:#fff;border-left-color:var(--lw-amber)}
.search-result-top{display:flex;align-items:center;gap:8px;margin-bottom:3px}
.search-result-badge{font-family:'DM Mono',monospace;font-size:9px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;padding:2px 7px;border-radius:10px;flex-shrink:0}
.search-result-badge.section{background:var(--lw-orange-deep);color:#fff}
.search-result-badge.callout-cx{background:var(--lw-orange-deep);color:#fff}
.search-result-badge.callout-creative{background:var(--lw-amber);color:#fff}
.search-result-badge.callout-marketing{background:#8B4789;color:#fff}
.search-result-badge.callout-brand{background:var(--lw-graphite);color:#fff}
.search-result-badge.callout-newhire{background:#2F6690;color:#fff}
.search-result-badge.glossary{background:var(--lw-slate);color:#fff}
.search-result-badge.faq{background:#6B7380;color:#fff}
.search-result-badge.objection{background:var(--lw-danger);color:#fff}
.search-result-title{font-size:13.5px;font-weight:700;color:var(--lw-graphite);line-height:1.3;flex:1;min-width:0}
.search-result-snippet{font-size:12px;color:var(--lw-text-muted);line-height:1.45;margin-left:0;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}
.search-result-snippet mark{background:#FEF9E7;color:var(--lw-graphite);padding:0 2px;border-radius:2px;font-weight:600}
.search-result-title mark{background:#FEF9E7;color:var(--lw-graphite);padding:0 2px;border-radius:2px}
.search-empty{padding:28px 20px;text-align:center;color:var(--lw-text-muted);font-size:13px}
.search-empty strong{color:var(--lw-graphite);display:block;margin-bottom:4px}

/* Highlight the jumped-to target briefly */
.search-target-flash{animation:searchFlash 1.8s ease-out}
@keyframes searchFlash{
  0%{box-shadow:0 0 0 4px rgba(244,200,66,0);background-color:transparent}
  15%{box-shadow:0 0 0 4px rgba(244,200,66,.7);background-color:rgba(254,249,231,.9)}
  100%{box-shadow:0 0 0 4px rgba(244,200,66,0);background-color:transparent}
}

/* Hide search when printing */
body.printing .nav-search-wrap{display:none}
@media print{.nav-search-wrap{display:none !important}}

/* Mobile: compact the search bar */
@media (max-width:700px){
  .nav-search-wrap{margin:0 8px}
  .nav-search-kbd{display:none}
  #nav-search-input{font-size:12px}
  .nav-brand{font-size:12px}
}
@media (max-width:520px){
  /* On very narrow screens hide the brand text; search + menu only */
  .nav-brand{display:none}
  .nav-search-wrap{margin:0 8px 0 0;max-width:none}
}

/* ================================
   LIFE WATCH BRAND OVERRIDES
   ================================ */
#hero{background:linear-gradient(135deg,var(--lw-graphite) 0%,#2A3037 55%,var(--lw-orange-deep) 100%)}
#hero::before{background-image:radial-gradient(circle at 20% 20%, rgba(249,69,21,.14) 0%, transparent 50%), radial-gradient(circle at 85% 85%, rgba(249,69,21,.28) 0%, transparent 50%)}
.stat-box{background:linear-gradient(135deg,var(--lw-graphite) 0%,var(--lw-orange-deep) 100%)}
.stat-big{color:#fff}
#quiz-section{background:linear-gradient(135deg,var(--lw-graphite) 0%,#2A3037 60%,var(--lw-orange-deep) 100%)}
.do{background:rgba(22,163,74,.07);border:1px solid #16a34a}
.do h4{color:#15803d}
.verify{display:inline-block;font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;background:#FEF3C7;color:#92400E;border:1px solid #F59E0B;border-radius:4px;padding:1px 6px;margin-left:4px;vertical-align:middle;font-style:normal}
.creatives-link-card{border:2px dashed rgba(255,143,102,.6);border-radius:12px;padding:18px 20px;margin:14px 0;display:flex;flex-wrap:wrap;align-items:center;gap:10px;background:#fff}
.creatives-link-card p{flex-basis:100%}
.creatives-link{display:inline-block;background:#fff;border:2px solid var(--lw-link);border-radius:10px;padding:9px 16px;font-weight:700;color:var(--lw-link);text-decoration:underline}
.creatives-link:hover{background:#EEF4FF;opacity:1}
.submit-steps{color:var(--lw-peach);font-size:14px;line-height:1.7;padding-left:22px;margin:10px 0}
.submit-steps strong{color:#fff}
.submit-steps a,.naming-box a,.submit-box a{color:#FFD27A}
.naming-box{max-width:660px;margin:14px 0 0;padding:14px 18px;background:rgba(255,255,255,.10);border:1px solid rgba(224,163,46,.45);border-radius:10px;color:var(--lw-peach);font-size:14px;line-height:1.7}
.naming-box strong{color:#fff}
.naming-box code,.submit-box code{color:#FFD27A;font-family:'DM Mono',monospace;font-size:13px;word-break:break-word}
.submit-box{max-width:560px;margin:18px auto 0;padding:16px 20px;background:rgba(255,255,255,.10);border:1px solid rgba(224,163,46,.45);border-radius:10px;color:var(--lw-peach);font-size:14px;line-height:1.7;text-align:center}
.submit-box strong{color:#fff}
.quiz-explain{margin-top:10px;padding:12px 16px;border-radius:10px;background:rgba(255,255,255,.08);color:var(--lw-peach);font-size:13.5px;line-height:1.55}
body.printing .submit-box{display:none !important}
@media print{.submit-box{display:none !important}}
</style>
<?php bh_favicon_tags(); ?>
</head>
<body>
<?php bh_back_to_index_button('brand-hub-index', 'All Hubs'); ?>

<!-- TOP HEADER -->
<nav id="top-nav">
  <div class="nav-inner">
    <span class="nav-brand">⌚ Life Watch Hub</span>
    <div class="nav-search-wrap">
      <div class="nav-search-box" id="nav-search-box">
        <span class="nav-search-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </span>
        <input id="nav-search-input" type="text" placeholder="Search sections, callouts, glossary, FAQs…" autocomplete="off" aria-label="Search the hub" />
        <button class="nav-search-clear" onclick="clearSearch()" aria-label="Clear search" type="button">×</button>
        <span class="nav-search-kbd" aria-hidden="true">/</span>
      </div>
      <div id="nav-search-results" role="listbox" aria-label="Search results"></div>
    </div>
    <button class="nav-top-toc-btn" onclick="openTocDrawer()" aria-label="Open table of contents">☰ Menu</button>
  </div>
</nav>

<!-- FLOATING TOC BUTTON -->
<button id="floating-toc-btn" onclick="openTocDrawer()" aria-label="Open table of contents">
  <svg viewBox="0 0 24 24"><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="18" x2="20" y2="18"/></svg>
</button>

<!-- TOC DRAWER -->
<div id="toc-drawer-overlay" onclick="closeTocDrawer()"></div>
<aside id="toc-drawer" aria-label="Table of contents drawer">
  <div class="toc-drawer-header">
    <div class="toc-drawer-title">Table of Contents</div>
    <button class="toc-drawer-close" onclick="closeTocDrawer()" aria-label="Close">×</button>
  </div>
  <nav id="toc-drawer-nav">
    <a href="#hero" onclick="closeTocDrawer()"><span class="toc-drawer-num">00</span><span class="toc-drawer-label">Hero</span></a>
    <a href="#toc-section" onclick="closeTocDrawer()"><span class="toc-drawer-num">TOC</span><span class="toc-drawer-label">Table of Contents</span></a>
    <a href="#overview" onclick="closeTocDrawer()"><span class="toc-drawer-num">01</span><span class="toc-drawer-label">Brand Overview</span></a>
    <a href="#why-health" onclick="closeTocDrawer()"><span class="toc-drawer-num">02</span><span class="toc-drawer-label">Why Customers Want a Health Watch</span></a>
    <a href="#products" onclick="closeTocDrawer()"><span class="toc-drawer-num">03</span><span class="toc-drawer-label">Product Line</span></a>
    <a href="#features" onclick="closeTocDrawer()"><span class="toc-drawer-num">04</span><span class="toc-drawer-label">Features &amp; How It Works</span></a>
    <a href="#vision" onclick="closeTocDrawer()"><span class="toc-drawer-num">05</span><span class="toc-drawer-label">Vision, Mission &amp; Pillars</span></a>
    <a href="#voice" onclick="closeTocDrawer()"><span class="toc-drawer-num">06</span><span class="toc-drawer-label">Brand Voice &amp; Tone</span></a>
    <a href="#personality" onclick="closeTocDrawer()"><span class="toc-drawer-num">07</span><span class="toc-drawer-label">Brand Personality</span></a>
    <a href="#visual" onclick="closeTocDrawer()"><span class="toc-drawer-num">08</span><span class="toc-drawer-label">Visual Identity</span></a>
    <a href="#audience" onclick="closeTocDrawer()"><span class="toc-drawer-num">09</span><span class="toc-drawer-label">Audience &amp; Personas</span></a>
    <a href="#competitors" onclick="closeTocDrawer()"><span class="toc-drawer-num">10</span><span class="toc-drawer-label">Competitors &amp; Positioning</span></a>
    <a href="#objections" onclick="closeTocDrawer()"><span class="toc-drawer-num">11</span><span class="toc-drawer-label">Objection Handling</span></a>
    <a href="#journey" onclick="closeTocDrawer()"><span class="toc-drawer-num">12</span><span class="toc-drawer-label">Customer Journey</span></a>
    <a href="#data" onclick="closeTocDrawer()"><span class="toc-drawer-num">13</span><span class="toc-drawer-label">Health &amp; Survey Data</span></a>
    <a href="#marketing" onclick="closeTocDrawer()"><span class="toc-drawer-num">14</span><span class="toc-drawer-label">Marketing Angles &amp; Hooks</span></a>
    <a href="#creatives" onclick="closeTocDrawer()"><span class="toc-drawer-num">15</span><span class="toc-drawer-label">Sample Winning Creatives</span></a>
    <a href="#social" onclick="closeTocDrawer()"><span class="toc-drawer-num">16</span><span class="toc-drawer-label">Social &amp; Digital</span></a>
    <a href="#partners" onclick="closeTocDrawer()"><span class="toc-drawer-num">17</span><span class="toc-drawer-label">Partnerships &amp; Influencer</span></a>
    <a href="#discounts" onclick="closeTocDrawer()"><span class="toc-drawer-num">18</span><span class="toc-drawer-label">Discounts &amp; Promo Codes</span></a>
    <a href="#seo" onclick="closeTocDrawer()"><span class="toc-drawer-num">19</span><span class="toc-drawer-label">SEO</span></a>
    <a href="#cro" onclick="closeTocDrawer()"><span class="toc-drawer-num">20</span><span class="toc-drawer-label">CRO</span></a>
    <a href="#glossary" onclick="closeTocDrawer()"><span class="toc-drawer-num">21</span><span class="toc-drawer-label">Glossary</span></a>
    <a href="#returns" onclick="closeTocDrawer()"><span class="toc-drawer-num">22</span><span class="toc-drawer-label">Return Policy</span></a>
    <a href="#fulfillment" onclick="closeTocDrawer()"><span class="toc-drawer-num">23</span><span class="toc-drawer-label">Fulfillment &amp; Shipping</span></a>
    <a href="#test-orders" onclick="closeTocDrawer()"><span class="toc-drawer-num">24</span><span class="toc-drawer-label">Test Orders</span></a>
    <a href="#shopify" onclick="closeTocDrawer()"><span class="toc-drawer-num">25</span><span class="toc-drawer-label">Shopify Platform</span></a>
    <a href="#faq" onclick="closeTocDrawer()"><span class="toc-drawer-num">26</span><span class="toc-drawer-label">FAQ</span></a>
    <a href="#resources" onclick="closeTocDrawer()"><span class="toc-drawer-num">27</span><span class="toc-drawer-label">Resources &amp; Contacts</span></a>
    <a href="#quiz-section" onclick="closeTocDrawer()"><span class="toc-drawer-num">28</span><span class="toc-drawer-label">Knowledge Check Quiz</span></a>
  </nav>
</aside>

<!-- HERO -->
<section id="hero" class="hero">
  <div class="hero-inner">
    <div class="hero-logo-wrap">
      <img src="https://getlifewatch.com/cdn/shop/files/lifewatch_logo_190x@2x.svg?v=1689840208" alt="Life Watch logo" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
      <div class="hero-brand-text-fallback" style="display:none">⌚ LIFE WATCH</div>
    </div>
    <span class="eyebrow" style="color:var(--lw-peach)">Inventel Brand Knowledge Hub · For CX &amp; new hires</span>
    <h1>Life Watch</h1>
    <div class="hero-tagline">Your Health, Simplified. A health &amp; fitness smartwatch that works with any phone.</div>
    <div class="hero-meta">Launched ~2021 · Inventel in-house brand · As Seen On TV</div>

    <div class="hero-stats">
      <div class="hero-stat"><div class="hero-stat-num">~2021</div><div class="hero-stat-lbl">Started in-house by Inventel — always an Inventel brand</div></div>
      <div class="hero-stat"><div class="hero-stat-num">Deluxe</div><div class="hero-stat-lbl">The watch that ships on every order</div></div>
      <div class="hero-stat"><div class="hero-stat-num">168 hrs</div><div class="hero-stat-lbl">Battery per charge — about a week</div></div>
      <div class="hero-stat"><div class="hero-stat-num">IP67</div><div class="hero-stat-lbl">Water resistant — fine if it gets wet</div></div>
      <div class="hero-stat"><div class="hero-stat-num">iOS + Android</div><div class="hero-stat-lbl">Calls, texts, and a free app</div></div>
      <div class="hero-stat"><div class="hero-stat-num">0</div><div class="hero-stat-lbl">Monthly fees — ever</div></div>
    </div>

    <div class="chip-row">
      <a class="chip" href="https://getlifewatch.com/" target="_blank" rel="noopener">🌐 getlifewatch.com</a>
      <a class="chip" href="https://www.facebook.com/profile.php?id=61550597544021" target="_blank" rel="noopener">📘 Facebook</a>
      <a class="chip" href="https://www.instagram.com/officiallifewatch" target="_blank" rel="noopener">📷 Instagram</a>
      <a class="chip" href="https://www.tiktok.com/@officiallifewatch?lang=en" target="_blank" rel="noopener">🎵 TikTok</a>
      <a class="chip" href="https://www.youtube.com/@InvenTelAsSeenOnTV" target="_blank" rel="noopener">▶️ YouTube</a>
      <a class="chip" href="https://twitter.com/LifeWatch_ASOT" target="_blank" rel="noopener">𝕏 Twitter/X</a>
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
    <p>Click any tile to jump to that section. Each section can be collapsed to just its header — use the circle button on the right of every section bar. You can also open the full menu anytime with the floating <strong>☰</strong> button in the bottom-right corner.</p>
    <div class="toc-grid">
      <a class="toc-tile" href="#overview"><span class="toc-tile-num">01</span><span class="toc-tile-label">Brand Overview</span></a>
      <a class="toc-tile" href="#why-health"><span class="toc-tile-num">02</span><span class="toc-tile-label">Why Customers Want a Health Watch</span></a>
      <a class="toc-tile" href="#products"><span class="toc-tile-num">03</span><span class="toc-tile-label">Product Line</span></a>
      <a class="toc-tile" href="#features"><span class="toc-tile-num">04</span><span class="toc-tile-label">Features &amp; How It Works</span></a>
      <a class="toc-tile" href="#vision"><span class="toc-tile-num">05</span><span class="toc-tile-label">Vision, Mission &amp; Pillars</span></a>
      <a class="toc-tile" href="#voice"><span class="toc-tile-num">06</span><span class="toc-tile-label">Brand Voice &amp; Tone</span></a>
      <a class="toc-tile" href="#personality"><span class="toc-tile-num">07</span><span class="toc-tile-label">Brand Personality</span></a>
      <a class="toc-tile" href="#visual"><span class="toc-tile-num">08</span><span class="toc-tile-label">Visual Identity</span></a>
      <a class="toc-tile" href="#audience"><span class="toc-tile-num">09</span><span class="toc-tile-label">Audience &amp; Personas</span></a>
      <a class="toc-tile" href="#competitors"><span class="toc-tile-num">10</span><span class="toc-tile-label">Competitors &amp; Positioning</span></a>
      <a class="toc-tile" href="#objections"><span class="toc-tile-num">11</span><span class="toc-tile-label">Objection Handling</span></a>
      <a class="toc-tile" href="#journey"><span class="toc-tile-num">12</span><span class="toc-tile-label">Customer Journey</span></a>
      <a class="toc-tile" href="#data"><span class="toc-tile-num">13</span><span class="toc-tile-label">Health &amp; Survey Data</span></a>
      <a class="toc-tile" href="#marketing"><span class="toc-tile-num">14</span><span class="toc-tile-label">Marketing Angles &amp; Hooks</span></a>
      <a class="toc-tile" href="#creatives"><span class="toc-tile-num">15</span><span class="toc-tile-label">Sample Winning Creatives</span></a>
      <a class="toc-tile" href="#social"><span class="toc-tile-num">16</span><span class="toc-tile-label">Social &amp; Digital</span></a>
      <a class="toc-tile" href="#partners"><span class="toc-tile-num">17</span><span class="toc-tile-label">Partnerships &amp; Influencer</span></a>
      <a class="toc-tile" href="#discounts"><span class="toc-tile-num">18</span><span class="toc-tile-label">Discounts &amp; Promo Codes</span></a>
      <a class="toc-tile" href="#seo"><span class="toc-tile-num">19</span><span class="toc-tile-label">SEO</span></a>
      <a class="toc-tile" href="#cro"><span class="toc-tile-num">20</span><span class="toc-tile-label">CRO</span></a>
      <a class="toc-tile" href="#glossary"><span class="toc-tile-num">21</span><span class="toc-tile-label">Glossary</span></a>
      <a class="toc-tile" href="#returns"><span class="toc-tile-num">22</span><span class="toc-tile-label">Return Policy</span></a>
      <a class="toc-tile" href="#fulfillment"><span class="toc-tile-num">23</span><span class="toc-tile-label">Fulfillment &amp; Shipping</span></a>
      <a class="toc-tile" href="#test-orders"><span class="toc-tile-num">24</span><span class="toc-tile-label">Test Orders</span></a>
      <a class="toc-tile" href="#shopify"><span class="toc-tile-num">25</span><span class="toc-tile-label">Shopify Platform</span></a>
      <a class="toc-tile" href="#faq"><span class="toc-tile-num">26</span><span class="toc-tile-label">FAQ</span></a>
      <a class="toc-tile" href="#resources"><span class="toc-tile-num">27</span><span class="toc-tile-label">Resources &amp; Contacts</span></a>
      <a class="toc-tile" href="#quiz-section"><span class="toc-tile-num">28</span><span class="toc-tile-label">Knowledge Check Quiz</span></a>
    </div>
    </div>
  </div>
</section>

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
      <span class="team-tag">New Hire — Start Here</span>
      <p style="margin:0">Welcome! This hub is the single source of truth for Life Watch across every team at Inventel — CX, Creative, Marketing, Engineering, and Brand. Work through it <strong>completely, top to bottom</strong>, before starting any Life Watch work, then take the quiz at the end and follow the standard submission process (save and name your result, upload it to the Quiz Results folder, and notify whoever assigned it). If you're role-specific, look for the colored callouts throughout: <strong>orange = CX</strong>, <strong>amber = Creative</strong>, <strong>purple = Marketing</strong>, <strong>charcoal = Brand</strong>, <strong>blue = New Hire</strong>. Most Life Watch tickets are about pairing, charging, and water — pair a demo watch yourself using the <a href="https://cdn.shopify.com/s/files/1/0780/8247/4279/files/Life_Watch_Manual.pdf" target="_blank" rel="noopener">user manual</a> before your first shift.</p>
    </div>

    <p>Life Watch is our health and fitness smartwatch. We built it for everyday adults who want to keep an eye on their health numbers without an expensive watch, a subscription, or a learning curve. One touch shows heart rate, blood pressure, blood oxygen, and body temperature, and the watch tracks steps, calories, workouts, and sleep. It works with iPhone and Android, makes and receives calls, shows texts, and never charges a monthly fee.</p>
    <p><strong>Life Watch has always been an Inventel brand.</strong> Unlike most brands in our library, it was not acquired. Our founder, Yasir Abdul, started it around 2021, and it was developed entirely in-house at Inventel (InvenTel.TV LLC). We handle product testing, quality assurance, marketing, and distribution under one roof, and Life Watch is one of the products we point to as proof of that model.</p>
    <p>Life Watch is sold As Seen On TV and direct on our Shopify store at <a href="https://getlifewatch.com/" target="_blank" rel="noopener">getlifewatch.com</a>. Every order ships from and returns to the Inventel warehouse in Pompton Plains, NJ, and is backed by our 30-day return policy.</p>
    <div class="tag-row">
      <span class="tag">Inventel Brand</span>
      <span class="tag">In-House Since ~2021</span>
      <span class="tag">As Seen On TV</span>
      <span class="tag">DTC · Shopify</span>
      <span class="tag">Health &amp; Fitness</span>
      <span class="tag">Wellness Wearable</span>
      <span class="tag">iOS + Android</span>
      <span class="tag">Calls &amp; Texts</span>
      <span class="tag">No Monthly Fee</span>
    </div>
    <div class="team-callout brand" style="margin-top:18px">
      <span class="team-tag">Brand — Wellness, Not Medical</span>
      <p style="margin:0">Life Watch is a <strong>wellness product</strong>. Every piece of copy says it helps people keep track of their numbers — never that it diagnoses, treats, or replaces a doctor or a blood-pressure cuff. If a claim would need a clinical study to back it up, it goes to Legal / Compliance first.</p>
    </div>

    </div>
  </div>
</section>

<section id="why-health">
  <div class="card collapsible" data-section="why-health">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">02 · Why Customers Buy</span>
        <h2>Why Customers Want a Health Watch</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <div class="team-callout newhire">
      <span class="team-tag">New Hire — Read This Before Anything Else</span>
      <p style="margin:0">If you're new to the team — especially if you're not based in the US — this section explains <strong>why a customer will call us about a heart-rate reading at 9 a.m.</strong> and why "no monthly fee" matters so much to them. Understanding who buys Life Watch, and why, is the difference between a CX agent who sounds scripted and one who sounds like they actually <em>get</em> the person on the line.</p>
    </div>

    <h3 style="margin-top:24px">Health Numbers Are a Daily Worry for Millions of Americans</h3>
    <p>High blood pressure is one of the most common health concerns in the United States, and many of our customers have been told by a doctor to "keep an eye on" their numbers. For them, a watch that shows a reading in one touch feels like peace of mind on the wrist. When a customer says "my doctor wants me to watch my pressure," they're telling you why they bought — treat that with care, and never interpret the numbers for them.</p>
    <div class="stat-boxes">
      <div class="stat-box"><div class="stat-big">~48%</div><div class="stat-lbl">Of US adults have high blood pressure — about 120 million people (CDC)</div></div>
      <div class="stat-box"><div class="stat-big">1 in 4</div><div class="stat-lbl">Adults with high blood pressure have it under control (CDC)</div></div>
      <div class="stat-box"><div class="stat-big">~1 in 3</div><div class="stat-lbl">Americans use a wearable to track health and fitness (NIH HINTS)</div></div>
      <div class="stat-box"><div class="stat-big">31% vs 12%</div><div class="stat-lbl">Smartwatch/tracker use in $75K+ households vs. under $30K (Pew, 2019)</div></div>
    </div>
    <p style="font-size:13px;color:var(--lw-text-muted);margin-top:10px"><em>Sources: <a href="https://www.cdc.gov/high-blood-pressure/data-research/facts-stats/index.html" target="_blank" rel="noopener">CDC High Blood Pressure Facts</a> · <a href="https://www.nhlbi.nih.gov/news/2023/study-reveals-wearable-device-trends-among-us-adults" target="_blank" rel="noopener">NIH / NHLBI (2023)</a> · <a href="https://www.pewresearch.org/short-reads/2020/01/09/about-one-in-five-americans-use-a-smart-watch-or-fitness-tracker/" target="_blank" rel="noopener">Pew Research Center</a></em></p>

    <h3 style="margin-top:24px">Price Keeps a Lot of People Out of Smartwatches</h3>
    <p>Premium smartwatches cost several times what Life Watch does, and many need charging every day. Pew's data shows smartwatch use is far lower in lower-income households. Our customers are often value-conscious, older, or buying their first smartwatch — and many are buying one for a parent. "No monthly fee," "works with the phone you already have," and "charge it about once a week" answer the three worries they walk in with.</p>

    <h3 style="margin-top:24px">What Customers Say — and What They Mean</h3>
    <ul style="margin-left:20px">
      <li><strong>"My doctor told me to watch my blood pressure."</strong> — They want reassurance and simplicity. Help with the watch; never comment on their readings.</li>
      <li><strong>"I'm not good with technology."</strong> — They need patience and one step at a time. Pairing is the moment that makes or breaks the experience.</li>
      <li><strong>"I bought this for my dad / mom."</strong> — The buyer isn't the user. Expect a second call from the parent, and be just as patient.</li>
      <li><strong>"I saw it on TV."</strong> — Trust comes from the TV spot. Match what they saw: same watch, same features.</li>
    </ul>
    <div class="team-callout cx" style="margin-top:18px">
      <span class="team-tag">CX — Read the Worry Behind the Question</span>
      <p style="margin:0">A question about a reading ("Is 145 over 90 bad?") is a health worry, not a product question. Stay kind and clear: Life Watch is a wellness watch, and their doctor is the right person to interpret any number. If they describe symptoms or say they feel unwell, tell them to contact their doctor or emergency services right away.</p>
    </div>

    </div>
  </div>
</section>

<section id="products">
  <div class="card collapsible" data-section="products">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">03 · Product Line</span>
        <h2>Product Line</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>The Life Watch catalog breaks into three categories: the watch itself, replacement bands, and accessories. All products come from <a href="https://getlifewatch.com/collections/all" target="_blank" rel="noopener">getlifewatch.com</a> as of September 2026.</p>
    <p style="background:rgba(194,54,11,.06);border-left:4px solid var(--lw-orange-deep);padding:12px 16px;border-radius:6px;margin-top:14px;font-size:14px"><strong>📌 Note on pricing:</strong> Pricing is set and updated on the Shopify storefront and changes regularly with promotions and seasonal offers. <strong>Always pull the current price from the live product page</strong> before quoting it to a customer — never quote from memory or from this hub. Click the "View product page" link on any row below to jump straight to the live page. Browse the full live catalog at <a href="https://getlifewatch.com/collections/all" target="_blank" rel="noopener">getlifewatch.com/collections/all</a>.</p>

    <h3 style="margin-top:24px">⌚ Watches — One Watch on Every Order</h3>
    <p>The store has two listings, but <strong>both ship the same unit: the Life Watch Deluxe</strong>, in a box with the Deluxe title. Every customer gets every feature, whichever listing they bought. The store's product pages still show a Standard vs. Deluxe comparison chart; that chart doesn't reflect what ships.</p>
    <table>
      <thead><tr><th>Store Listing</th><th>What Ships</th><th>Highlights</th><th>Category</th></tr></thead>
      <tbody>
        <tr><td><strong>Life Watch Smartwatch</strong> (Standard listing)<br><span style="font-size:12px;color:var(--lw-text-muted)"><a href="https://getlifewatch.com/products/life-watch" target="_blank" rel="noopener">View product page for current pricing →</a></span></td><td>The Life Watch Deluxe</td><td>All health, fitness, calling, and texting features · 56 watch faces · The TV offer listing</td><td><span class="badge badge-watch">Watch</span></td></tr>
        <tr><td><strong>Life Watch – Deluxe</strong> (Deluxe listing)<br><span style="font-size:12px;color:var(--lw-text-muted)"><a href="https://getlifewatch.com/products/life-watch-deluxe" target="_blank" rel="noopener">View product page for current pricing →</a></span></td><td>The Life Watch Deluxe</td><td>All health, fitness, calling, and texting features · 56 watch faces</td><td><span class="badge badge-watch">Watch</span></td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:24px">📦 In the Box</h3>
    <ul style="margin-left:20px">
      <li>Life Watch Deluxe in a protective case</li>
      <li>2-piece black rubber wristband (adjustable)</li>
      <li>Magnetic USB charging cable</li>
      <li>User manual and quick start guide</li>
    </ul>
    <p>No wall adapter is included. The cable works with any USB port or USB wall cube.</p>
    <div class="team-callout cx">
      <span class="team-tag">CX — Water</span>
      <p style="margin:0">Life Watch is IP67 water resistant. Getting it wet is fine, including rain, splashes, handwashing, and a swim. <strong>Just don't leave it underwater for long periods.</strong> Water-damage claims go to the CX Fulfillment Supervisor.</p>
    </div>
    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX — Charging</span>
      <p style="margin:0">If a customer says the watch won't charge, check the magnet first. <strong>The charger only connects one way</strong> — have them rotate it until it snaps into place. Then try a different USB port or wall cube.</p>
    </div>

    <h3 style="margin-top:24px">🎽 Bands</h3>
    <table>
      <thead><tr><th>Band</th><th>Material</th><th>Category</th></tr></thead>
      <tbody>
        <tr><td><strong>Brown Leather Watch Band</strong><br><span style="font-size:12px;color:var(--lw-text-muted)"><a href="https://getlifewatch.com/products/brown-leather-band" target="_blank" rel="noopener">View product page for current pricing →</a></span></td><td>Leather</td><td><span class="badge badge-band">Band</span></td></tr>
        <tr><td><strong>Black Leather Watch Band</strong><br><span style="font-size:12px;color:var(--lw-text-muted)"><a href="https://getlifewatch.com/products/black-leather-band" target="_blank" rel="noopener">View product page for current pricing →</a></span></td><td>Leather</td><td><span class="badge badge-band">Band</span></td></tr>
        <tr><td><strong>Black Stainless Steel Watch Band</strong><br><span style="font-size:12px;color:var(--lw-text-muted)"><a href="https://getlifewatch.com/products/black-stainless-steel-band" target="_blank" rel="noopener">View product page for current pricing →</a></span></td><td>Stainless steel</td><td><span class="badge badge-band">Band</span></td></tr>
        <tr><td><strong>Gold Stainless Steel Band</strong><br><span style="font-size:12px;color:var(--lw-text-muted)"><a href="https://getlifewatch.com/products/gold-stainless-steel-band" target="_blank" rel="noopener">View product page for current pricing →</a></span></td><td>Stainless steel mesh</td><td><span class="badge badge-band">Band</span></td></tr>
        <tr><td><strong>Silver Stainless Steel Band</strong><br><span style="font-size:12px;color:var(--lw-text-muted)"><a href="https://getlifewatch.com/products/silver-stainless-steel-band" target="_blank" rel="noopener">View product page for current pricing →</a></span></td><td>Stainless steel mesh</td><td><span class="badge badge-band">Band</span></td></tr>
        <tr><td><strong>Blue Silicone Watch Band</strong><br><span style="font-size:12px;color:var(--lw-text-muted)"><a href="https://getlifewatch.com/products/blue-silicone-watch-band" target="_blank" rel="noopener">View product page for current pricing →</a></span></td><td>Silicone</td><td><span class="badge badge-band">Band</span></td></tr>
        <tr><td><strong>Green Silicon Rubber Band</strong><br><span style="font-size:12px;color:var(--lw-text-muted)"><a href="https://getlifewatch.com/products/green-silicon-rubber-band" target="_blank" rel="noopener">View product page for current pricing →</a></span></td><td>Silicone rubber</td><td><span class="badge badge-band">Band</span></td></tr>
        <tr><td><strong>Pink Silicone Rubber Watch Strap</strong><br><span style="font-size:12px;color:var(--lw-text-muted)"><a href="https://getlifewatch.com/products/pink-silicone-rubber-band" target="_blank" rel="noopener">View product page for current pricing →</a></span></td><td>Silicone rubber</td><td><span class="badge badge-band">Band</span></td></tr>
      </tbody>
    </table>
    <p style="font-size:13px;color:var(--lw-text-muted)"><strong>Band swap:</strong> place the watch face down, line up the band with the spring pins facing up, squeeze the pin lever, and slide the band between the pin holes.</p>

    <h3 style="margin-top:24px">🔌 Accessories</h3>
    <table>
      <thead><tr><th>Product</th><th>Notes</th><th>Category</th></tr></thead>
      <tbody>
        <tr><td><strong>Smart Watch Screen Protector</strong><br><span style="font-size:12px;color:var(--lw-text-muted)"><a href="https://getlifewatch.com/products/screen-protector" target="_blank" rel="noopener">View product page for current pricing →</a></span></td><td>Easy add-on for any watch order.</td><td><span class="badge badge-accessory">Accessory</span></td></tr>
        <tr><td><strong>Watch Charging Cable</strong><br><span style="font-size:12px;color:var(--lw-text-muted)"><a href="https://getlifewatch.com/products/watch-charging-cable" target="_blank" rel="noopener">View product page for current pricing →</a></span></td><td>Replacement magnetic USB cable — the first thing to offer for a lost charger.</td><td><span class="badge badge-accessory">Accessory</span></td></tr>
      </tbody>
    </table>

    </div>
  </div>
</section>

<section id="features">
  <div class="card collapsible" data-section="features">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">04 · Features</span>
        <h2>Features &amp; How It Works</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>This section is for CX, Marketing, and anyone fielding the <em>"what does it actually do?"</em> and <em>"how do I set it up?"</em> questions — which we get a lot. Send customers who want the full walkthrough to the <a href="https://cdn.shopify.com/s/files/1/0780/8247/4279/files/Life_Watch_Manual.pdf" target="_blank" rel="noopener">user manual (PDF)</a> or our <a href="https://getlifewatch.com/pages/faqs" target="_blank" rel="noopener">public FAQ</a>.</p>
    <div class="team-callout cx" style="margin-top:14px">
      <span class="team-tag">CX — Where to Send Customers</span>
      <p style="margin:0">For setup questions, the official sources are the <strong><a href="https://cdn.shopify.com/s/files/1/0780/8247/4279/files/Life_Watch_Manual.pdf" target="_blank" rel="noopener">user manual</a></strong> and the <strong><a href="https://getlifewatch.com/pages/faqs" target="_blank" rel="noopener">FAQ page</a></strong>. The free app is on the <a href="https://apps.apple.com/us/app/official-lifewatch/id6445967577" target="_blank" rel="noopener">App Store</a> ("Official LifeWatch") and <a href="https://play.google.com/store/apps/details?id=com.life.watch&amp;hl=en_US&amp;gl=US" target="_blank" rel="noopener">Google Play</a> ("Life Watch"). Bookmark all four — you'll use them on almost every setup call.</p>
    </div>

    <h3 style="margin-top:24px">What Every Life Watch Does</h3>
    <table>
      <thead><tr><th>Feature</th><th>Details</th></tr></thead>
      <tbody>
        <tr><td><strong>Heart rate, blood pressure, blood oxygen, body temperature</strong></td><td>One-touch readings on the watch</td></tr>
        <tr><td><strong>ECG and stress analysis</strong></td><td>Listed in the Life Watch Deluxe product copy</td></tr>
        <tr><td><strong>Sleep patterns</strong></td><td>Tracked automatically overnight</td></tr>
        <tr><td><strong>Sports mode, steps, distance, calories</strong></td><td>Everyday activity and workouts</td></tr>
        <tr><td><strong>Make and receive calls</strong></td><td>Through a paired phone — no cellular plan</td></tr>
        <tr><td><strong>Receive text messages</strong></td><td>Shown on the wrist</td></tr>
        <tr><td><strong>Contact list and call records</strong></td><td>View on the watch</td></tr>
        <tr><td><strong>56 watch face designs</strong></td><td>Change the look anytime</td></tr>
        <tr><td><strong>Do Not Disturb and weather screen</strong></td><td>Quiet hours and a glance at the forecast</td></tr>
        <tr><td><strong>Up to 168 hours per charge</strong></td><td>About a week, depending on use</td></tr>
        <tr><td><strong>IP67 water resistance</strong></td><td>Fine if it gets wet; don't leave it underwater for long</td></tr>
        <tr><td><strong>Built-in LED flashlight</strong></td><td>For the dark driveway</td></tr>
        <tr><td><strong>Music controls, find my phone, reminders, alarms, shake to take a photo</strong></td><td>Everyday conveniences</td></tr>
        <tr><td><strong>Bluetooth; works with iPhone and Android</strong></td><td>Free companion app</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:24px">How Pairing Works</h3>
    <ol class="process-steps">
      <li><strong>Charge the watch</strong> with the magnetic cable (rotate until it snaps in).</li>
      <li><strong>Download the free app</strong> — "Official LifeWatch" on iPhone, "Life Watch" on Android.</li>
      <li>On the app's <strong>"Today"</strong> home screen, tap <strong>Bind Now</strong>, then <strong>Search Now</strong>.</li>
      <li>Tap <strong>"Life Watch"</strong> in the device list, then tap <strong>Pair</strong> on the Bluetooth request.</li>
      <li><strong>"Enjoy Now"</strong> appears when the watch is connected.</li>
    </ol>

    <h3 style="margin-top:22px">The Most Common Mix-Ups</h3>
    <ul style="margin-left:20px">
      <li><strong>"The screen keeps turning off."</strong> It's sleeping to save battery. Raise and turn the wrist, or press the power button. To keep it lit longer: Settings → Screen Display → Screen Time.</li>
      <li><strong>"Find Phone shows no Bluetooth."</strong> Find Phone doesn't connect the watch — it makes an already-paired phone vibrate. Pair through the app first.</li>
      <li><strong>"I don't have a smartphone."</strong> The health and fitness features still work on the watch alone. Phone features (calls, texts, notifications) need a paired phone.</li>
      <li><strong>"Are these readings accurate?"</strong> Life Watch is a wellness watch for everyday trends. For medical decisions, customers keep using the devices their doctor recommends.</li>
    </ul>
    <div class="team-callout marketing" style="margin-top:18px">
      <span class="team-tag">Marketing — Feature Claims</span>
      <p style="margin:0">Describe features the way this table does — <strong>tracks, shows, monitors</strong>. Never write "accurate," "medical-grade," "clinically proven," or "detects," and never pair a health reading with what it means for someone's health.</p>
    </div>

    </div>
  </div>
</section>

<section id="vision">
  <div class="card collapsible" data-section="vision">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">05 · Vision · Mission · Pillars</span>
        <h2>Vision, Mission &amp; Brand Pillars</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <div class="team-callout brand">
      <span class="team-tag">Brand Team — Governance</span>
      <p style="margin:0">Vision, Mission, and the five Pillars below are the <strong>load-bearing structure</strong> of everything Life Watch says and does. Campaigns and product pages should all ladder up to at least one pillar. If something you're making doesn't fit — <strong>pause and check with the Brand Lead</strong> before it ships. "Health awareness" is the pillar most likely to drift into medical claims; keep it about knowing your numbers, not what they mean.</p>
    </div>

    <p style="font-size:13px;color:var(--lw-text-muted)">Life Watch doesn't publish formal statements; these working statements are built from our site copy and Inventel's founder page. <span class="verify">Verify with Brand Lead</span></p>
    <h3>Vision</h3>
    <p style="font-style:italic;font-family:'Playfair Display',serif;font-size:1.15rem;color:var(--lw-graphite);border-left:4px solid var(--lw-orange-light);padding-left:16px;margin-bottom:20px">"Everyday health awareness on every wrist."</p>
    <h3>Mission</h3>
    <p style="font-style:italic;font-family:'Playfair Display',serif;font-size:1.15rem;color:var(--lw-graphite);border-left:4px solid var(--lw-orange-light);padding-left:16px;margin-bottom:24px">"Give people a simple, affordable watch that tracks the health and fitness numbers they care about — with no subscription and no learning curve."</p>
    <h3>Brand Pillars</h3>
    <div class="pillars">
      <div class="pillar"><span class="pillar-icon">❤️</span><h4>Health Awareness</h4><p>Heart rate, blood pressure, blood oxygen, temperature, and sleep in one glance. We help people notice their numbers; their doctor interprets them.</p></div>
      <div class="pillar"><span class="pillar-icon">👆</span><h4>Simplicity</h4><p>"Your Health, Simplified." One-touch readings, raise-to-wake, and pairing anyone can follow.</p></div>
      <div class="pillar"><span class="pillar-icon">💲</span><h4>Real Value</h4><p>A fraction of what premium smartwatches cost, and no monthly fee — ever.</p></div>
      <div class="pillar"><span class="pillar-icon">📱</span><h4>Stay Connected</h4><p>Works with iPhone and Android. Calls and texts on the wrist, music controls, and find my phone.</p></div>
      <div class="pillar"><span class="pillar-icon">🔋</span><h4>Built for Everyday Life</h4><p>Up to 168 hours per charge, IP67 water resistance, and a built-in flashlight.</p></div>
    </div>

    </div>
  </div>
</section>

<section id="voice">
  <div class="card collapsible" data-section="voice">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">06 · Brand Voice &amp; Tone</span>
        <h2>Brand Voice &amp; Tone</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>Life Watch sounds like a friendly TV demo host who is also patient on the phone. We lead with what the customer gets, keep sentences short, and show the watch doing something real. We never talk down, and we never sound like a medical brochure.</p>
    <div class="team-callout marketing">
      <span class="team-tag">Marketing — Voice Shortcuts</span>
      <p style="margin:0">Before anything goes out, ask: <strong>would a friendly, patient demo host say this out loud?</strong> Lead with something the customer feels ("Check your heart rate without a trip to the pharmacy") — never with the brand name or a spec list. Save specs for the second line.</p>
    </div>

    <div class="tone-grid">
      <div class="tone"><div class="tone-label">1. Demo</div><div class="tone-desc">TV spots, YouTube, product videos. Show, don't tell.</div><div class="tone-ex">"Raise your wrist. There's your heart rate."</div></div>
      <div class="tone"><div class="tone-label">2. Coach</div><div class="tone-desc">Organic social and fitness content. Encouraging, never pushy.</div><div class="tone-ex">"Close out the day with a quick look at your steps."</div></div>
      <div class="tone"><div class="tone-label">3. Reassuring</div><div class="tone-desc">CX email, chat, and phone. Calm, patient, one step at a time.</div><div class="tone-ex">"Let's get your watch paired. It takes about a minute."</div></div>
      <div class="tone"><div class="tone-label">4. Clear</div><div class="tone-desc">Product pages, FAQs, specs. Factual and scannable.</div><div class="tone-ex">"Up to 168 hours per charge. IP67 rated."</div></div>
      <div class="tone"><div class="tone-label">5. Caring</div><div class="tone-desc">Health-adjacent content. Warm, never alarmist.</div><div class="tone-ex">"Knowing your numbers is a good first step. Your doctor is the next one."</div></div>
      <div class="tone"><div class="tone-label">6. Offer</div><div class="tone-desc">Email, SMS, promo banners. Urgent but honest.</div><div class="tone-ex">"As Seen On TV — see today's offer."</div></div>
    </div>

    <h3 style="margin-top:32px">Approved Taglines &amp; Slogans</h3>
    <table>
      <thead><tr><th>Line</th><th>Use Case</th></tr></thead>
      <tbody>
        <tr><td><strong>Your Health, Simplified!</strong></td><td>Homepage hero, TV close, primary tagline</td></tr>
        <tr><td><strong>The perfect device for a healthy life.</strong></td><td>Product page intros, email headers</td></tr>
        <tr><td><strong>Everything you need, right on your wrist.</strong></td><td>Feature overviews, social captions</td></tr>
        <tr><td><strong>Never miss a call or text again.</strong></td><td>Connectivity messaging</td></tr>
        <tr><td><strong>As Seen On TV!</strong></td><td>Site banner and offer messaging (pair with the live store price, never a hardcoded one)</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:28px">Language Guidance</h3>
    <table>
      <thead><tr><th>Say</th><th>Instead of</th><th>Why</th></tr></thead>
      <tbody>
        <tr><td>tracks, monitors, helps you keep an eye on</td><td>diagnoses, detects, measures accurately</td><td>Life Watch is a wellness device, not a medical device</td></tr>
        <tr><td>blood oxygen</td><td>SpO₂ (on its own)</td><td>Plain words first; add SpO₂ in brackets if needed</td></tr>
        <tr><td>Life Watch · Life Watch Deluxe</td><td>LifeWatch, Lifewatch, LIFE WATCH</td><td>Consistent brand name</td></tr>
        <tr><td>works with iPhone and Android</td><td>iOS/Android compatible (in customer copy)</td><td>Customers know their phone, not the operating system</td></tr>
        <tr><td>no monthly fee</td><td>no subscription required (alone)</td><td>"Fee" is the worry customers actually have</td></tr>
        <tr><td>water resistant (IP67); fine if it gets wet</td><td>swim-proof, dive-ready, fully waterproof</td><td>It shouldn't stay underwater for long periods</td></tr>
        <tr><td>pair or connect your watch</td><td>bind the bracelet</td><td>"Bind" is app wording — use it only when guiding someone through the app screens</td></tr>
      </tbody>
    </table>

    <div class="do-dont">
      <div class="do"><h4>✅ Do</h4><ul>
        <li>Lead with the benefit: "See your heart rate in one touch."</li>
        <li>Use "tracks," "monitors," and "helps you keep an eye on."</li>
        <li>Say "iPhone and Android" and "no monthly fee."</li>
        <li>Write "Life Watch" as two capitalized words.</li>
        <li>Say "blood oxygen" before "SpO₂."</li>
      </ul></div>
      <div class="dont"><h4>🚫 Don't</h4><ul>
        <li>Say "diagnoses," "detects disease," "medical-grade," or "clinically accurate."</li>
        <li>Suggest the watch replaces a doctor, a cuff, or medication.</li>
        <li>Say "swim-proof," "dive-ready," or suggest it can stay underwater for long periods.</li>
        <li>Hardcode a price or a sale in copy that outlives the offer.</li>
        <li>Write "LifeWatch," "Lifewatch," or "LIFE WATCH" in body copy.</li>
      </ul></div>
    </div>

    <h3 style="margin-top:28px">Channel Tone</h3>
    <table>
      <thead><tr><th>Channel</th><th>Primary Mode</th><th>Guidance</th></tr></thead>
      <tbody>
        <tr><td>TV / YouTube</td><td>Demo</td><td>Show the screen on a real wrist. Offer and store link on screen at the close.</td></tr>
        <tr><td>Meta / TikTok ads</td><td>Demo, Coach</td><td>Native, handheld feel. Hook with a relatable moment in the first 2 seconds.</td></tr>
        <tr><td>Email</td><td>Offer, Clear</td><td>Benefit-first subject line. One product, one offer, one button.</td></tr>
        <tr><td>SMS</td><td>Offer</td><td>Under 160 characters. Offer and link; no health claims.</td></tr>
        <tr><td>Product pages</td><td>Clear</td><td>Specs in scannable lists. Lead with calling, texting, and health tracking.</td></tr>
        <tr><td>CX</td><td>Reassuring</td><td>Step by step, one action at a time. Confirm each step worked before the next.</td></tr>
      </tbody>
    </table>
    <div class="team-callout creative" style="margin-top:18px">
      <span class="team-tag">Creative — Show the Metric You Name</span>
      <p style="margin:0">Whenever copy names a metric, the visual shows that metric on the watch screen. If the headline says "blood pressure," the screen shows the blood-pressure readout — not the clock.</p>
    </div>

    </div>
  </div>
</section>

<section id="personality">
  <div class="card collapsible" data-section="personality">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">07 · Brand Personality</span>
        <h2>Brand Personality &amp; Adjectives</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p><strong>Direction:</strong> Approachable · Practical · Encouraging · Health-Aware</p>
    <p>If Life Watch were a person, it would be the neighbor who just got into walking, knows their numbers, and will happily show you how their watch works.</p>
    <div class="adj-grid">
      <div class="adj"><div class="adj-title">Approachable</div><div class="adj-desc">Nothing intimidating. Anyone can pick it up and use it.</div></div>
      <div class="adj"><div class="adj-title">Practical</div><div class="adj-desc">Features people use every day, like a flashlight and a week of battery.</div></div>
      <div class="adj"><div class="adj-title">Encouraging</div><div class="adj-desc">Celebrates small wins, like more steps and better sleep.</div></div>
      <div class="adj"><div class="adj-title">Straightforward</div><div class="adj-desc">Says what it does in plain words. No tech jargon.</div></div>
      <div class="adj"><div class="adj-title">Energetic</div><div class="adj-desc">TV-demo pace. Shows, doesn't lecture.</div></div>
      <div class="adj"><div class="adj-title">Reassuring</div><div class="adj-desc">Calm and patient, especially when someone is stuck on setup.</div></div>
      <div class="adj"><div class="adj-title">Value-Smart</div><div class="adj-desc">Proud of what you get for the price. No monthly fee, ever.</div></div>
      <div class="adj"><div class="adj-title">Connected</div><div class="adj-desc">Works with the phone you already have — calls and texts included.</div></div>
      <div class="adj"><div class="adj-title">Health-Aware</div><div class="adj-desc">Cares about wellness without playing doctor.</div></div>
      <div class="adj"><div class="adj-title">Everyday</div><div class="adj-desc">Built for errands, walks, and bedtime — not just the gym.</div></div>
    </div>

    </div>
  </div>
</section>

<section id="visual">
  <div class="card collapsible" data-section="visual">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">08 · Visual Identity</span>
        <h2>Visual Identity</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <h3>Color Palette</h3>
    <p style="font-size:13px;color:var(--lw-text-muted)">Life Watch Orange is the store's declared theme color. The rest is the working palette used across our site and this hub. <span class="verify">Verify with Creative</span></p>
    <div class="palette">
      <div class="swatch"><div class="swatch-color" style="background:#F94515"></div><div class="swatch-info"><div class="swatch-name">Life Watch Orange</div><div class="swatch-role">Primary brand</div><div class="swatch-hex">#F94515</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#C2360B"></div><div class="swatch-info"><div class="swatch-name">Deep Orange</div><div class="swatch-role">Text-safe orange</div><div class="swatch-hex">#C2360B</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#1E2328"></div><div class="swatch-info"><div class="swatch-name">Screen Graphite</div><div class="swatch-role">Primary dark</div><div class="swatch-hex">#1E2328</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#3C4450"></div><div class="swatch-info"><div class="swatch-name">Slate</div><div class="swatch-role">Body text</div><div class="swatch-hex">#3C4450</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#FF8F66"></div><div class="swatch-info"><div class="swatch-name">Coral</div><div class="swatch-role">Accent</div><div class="swatch-hex">#FF8F66</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#FFD6C4"></div><div class="swatch-info"><div class="swatch-name">Peach</div><div class="swatch-role">Soft accent</div><div class="swatch-hex">#FFD6C4</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#F5F4F2"></div><div class="swatch-info"><div class="swatch-name">Mist</div><div class="swatch-role">Background</div><div class="swatch-hex">#F5F4F2</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#A15C00"></div><div class="swatch-info"><div class="swatch-name">Amber</div><div class="swatch-role">Warm accent</div><div class="swatch-hex">#A15C00</div></div></div>
    </div>
    <div class="team-callout creative">
      <span class="team-tag">Creative Team — Color Usage</span>
      <p style="margin:0"><strong>Life Watch Orange (#F94515)</strong> is for buttons, prices, and one accent per layout. Don't set small orange text on white — use <strong>Deep Orange (#C2360B)</strong> instead. <strong>Screen Graphite (#1E2328)</strong> anchors dark backgrounds, and the watch screen stays dark in every shot so the readouts pop. Don't introduce colors outside this palette without Brand Lead approval.</p>
    </div>

    <h3 style="margin-top:28px">Typography</h3>
    <p style="font-size:13px;color:var(--lw-text-muted)">The store's brand typeface isn't documented; this hub uses the Inventel hub type system. <span class="verify">Verify brand fonts with Creative</span></p>
    <div class="type-spec">
      <div class="type-spec-name">Playfair Display · Display / Headlines</div>
      <div class="type-spec-use">Hub headlines and editorial moments</div>
      <div style="font-family:'Playfair Display',serif;font-size:2rem;font-weight:800;color:var(--lw-graphite)">Your Health, Simplified.</div>
    </div>
    <div class="type-spec">
      <div class="type-spec-name">DM Sans · Body / UI</div>
      <div class="type-spec-use">Body copy, buttons, product details</div>
      <div style="font-family:'DM Sans',sans-serif;font-size:1.1rem;color:var(--lw-text)">One touch shows your heart rate, blood pressure, and blood oxygen.</div>
    </div>
    <div class="type-spec">
      <div class="type-spec-name">DM Mono · Labels / Data</div>
      <div class="type-spec-use">Eyebrows, stats, spec labels</div>
      <div style="font-family:'DM Mono',monospace;font-size:1rem;color:var(--lw-orange-deep);letter-spacing:.08em">168 HRS · IP67 · iOS + ANDROID</div>
    </div>
    <div class="team-callout creative">
      <span class="team-tag">Creative Team — Type Pairing</span>
      <p style="margin:0">Use one bold display face for headlines and prices and one plain sans for body copy. Never stack more than two typefaces in an ad, and keep the offer text at least as large as the headline.</p>
    </div>

    <h3 style="margin-top:28px">Logo</h3>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:14px;margin-top:10px">
      <div style="background:#fff;border:1px solid rgba(255,143,102,.35);border-radius:10px;padding:26px;text-align:center"><img src="https://getlifewatch.com/cdn/shop/files/lifewatch_logo_190x@2x.svg?v=1689840208" alt="Life Watch primary logo" style="height:52px;width:auto;margin:0 auto" onerror="this.outerHTML='<strong>LIFE WATCH</strong>'"><div style="font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--lw-text-muted);margin-top:12px">Primary · Light backgrounds</div></div>
      <div style="background:var(--lw-graphite);border-radius:10px;padding:26px;text-align:center"><img src="https://getlifewatch.com/cdn/shop/files/lifewatch_logo_190x@2x.svg?v=1689840208" alt="Life Watch reversed logo" style="height:52px;width:auto;margin:0 auto;filter:brightness(0) invert(1)" onerror="this.outerHTML='<strong style=&quot;color:#fff&quot;>LIFE WATCH</strong>'"><div style="font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--lw-peach);margin-top:12px">Reversed · Dark backgrounds</div></div>
    </div>
    <p style="font-size:13px;color:var(--lw-text-muted);margin-top:8px">The reversed version above is an all-white render of the primary file. Source: <a href="https://getlifewatch.com/cdn/shop/files/lifewatch_logo_190x@2x.svg?v=1689840208" target="_blank" rel="noopener">Life Watch logo SVG</a>. <span class="verify">Need official reversed file</span></p>

    <h3 style="margin-top:28px">Photography Direction</h3>
    <div class="do-dont">
      <div class="do"><h4>✅ Do</h4><ul>
        <li>Show the watch on a real wrist in everyday moments: walking, at the beach, checking a text.</li>
        <li>Keep the screen readable with a real readout visible.</li>
        <li>Use clean white-background shots on product pages.</li>
        <li>Cast adults of all ages, including older customers — a core TV audience.</li>
      </ul></div>
      <div class="dont"><h4>🚫 Don't</h4><ul>
        <li>Show clinical settings, hospital beds, or medical equipment next to the watch.</li>
        <li>Show the watch underwater for long stretches, like laps, diving, or soaking.</li>
        <li>Use screens with glare or blank displays.</li>
        <li>Crop the watch so small the face can't be read on a phone.</li>
      </ul></div>
    </div>

    </div>
  </div>
</section>

<section id="audience">
  <div class="card collapsible" data-section="audience">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">09 · Target Audience</span>
        <h2>Target Audience &amp; Customer Personas</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <h3>General Customer Profile</h3>
    <p><strong>Age:</strong> mostly 45+, with a strong 60+ segment from TV · <strong>Motivations:</strong> keeping an eye on heart rate and blood pressure, staying active, staying connected, value for money · <strong>Tech comfort:</strong> low to moderate — setup questions (pairing, charging, screen sleep) are our most common FAQs · <strong>Phone:</strong> iPhone or Android; some have no smartphone at all · <strong>Where they find us:</strong> TV spots, Facebook, YouTube, and search after seeing the TV offer. <span class="verify">Verify with Brand Lead</span></p>
    <div class="personas">
      <div class="persona"><div class="persona-name">Number-Watching Linda</div><div class="persona-type">Health-Aware · 63 · Tampa, FL</div><div class="persona-desc">Her doctor told her to keep an eye on her blood pressure and heart rate. She wants to glance at her wrist instead of pulling out a cuff every time, and she's nervous about the setup.</div><div class="persona-focus"><strong>Focus:</strong> One-touch readings, big readable screen, patient setup help</div></div>
      <div class="persona"><div class="persona-name">Weekend-Walker Ray</div><div class="persona-type">Active Starter · 58 · Columbus, OH</div><div class="persona-desc">Started walking every morning and wants to count steps and see calories. Doesn't want to charge a watch every night or pay a monthly fee.</div><div class="persona-focus"><strong>Focus:</strong> Steps and sports mode, 168-hour battery, no monthly fee</div></div>
      <div class="persona"><div class="persona-name">Gift-Giving Denise</div><div class="persona-type">Caregiver Buyer · 42 · Charlotte, NC</div><div class="persona-desc">Buying for her dad after seeing the TV ad. She worries he won't figure it out and wants to know someone will help him.</div><div class="persona-focus"><strong>Focus:</strong> What's in the box, easy returns, CX that walks him through pairing</div></div>
      <div class="persona"><div class="persona-name">Connected Marcus</div><div class="persona-type">Value Seeker · 36 · Phoenix, AZ</div><div class="persona-desc">Wants calls and texts on his wrist without paying for a premium watch or a data plan.</div><div class="persona-focus"><strong>Focus:</strong> Bluetooth calling, texts, weather, 56 watch faces, price</div></div>
    </div>
    <h3 style="margin-top:24px">Brand Archetype</h3>
    <p><strong>The Everyman, with a Caregiver streak.</strong> Life Watch is down-to-earth and made for regular people, not athletes or tech fans. The Caregiver side shows up in how we talk about health: gentle, encouraging, and focused on looking after yourself and the people you love.</p>
    <div class="team-callout cx">
      <span class="team-tag">CX — Slow Down</span>
      <p style="margin:0">Many callers are buying for a parent or are new to smartwatches. Slow down, give one step at a time, and ask <strong>"What do you see on the screen now?"</strong> before moving on.</p>
    </div>

    </div>
  </div>
</section>

<section id="competitors">
  <div class="card collapsible" data-section="competitors">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">10 · Competitive Landscape</span>
        <h2>Competitors &amp; Positioning</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>Life Watch competes in the <strong>everyday health smartwatch</strong> space, between premium smartwatches and unbranded marketplace watches. Our wedge is the combination of <em>health readouts + calls and texts + a week of battery + no monthly fee</em>, at a budget price, from a brand people saw on TV.</p>
    <table>
      <thead><tr><th>Competitor</th><th>Type</th><th>Key Claim</th><th>Life Watch's Differentiator</th></tr></thead>
      <tbody>
        <tr><td><strong>Apple Watch</strong></td><td>Premium smartwatch</td><td>Deep Apple ecosystem</td><td>A fraction of the price, works with Android too, and a charge lasts up to a week</td></tr>
        <tr><td><strong>Samsung Galaxy Watch</strong></td><td>Premium smartwatch</td><td>Android flagship features</td><td>Simpler to use, works with iPhone and Android, much lower price</td></tr>
        <tr><td><strong>Google Pixel Watch</strong></td><td>Premium smartwatch</td><td>Google and Fitbit integration</td><td>No learning curve and no subscription upsell</td></tr>
        <tr><td><strong>Fitbit / Garmin</strong></td><td>Fitness-first trackers</td><td>Detailed fitness data</td><td>Health readouts front and center, plus calls and texts</td></tr>
        <tr><td><strong>Unbranded marketplace watches</strong></td><td>Budget watches on Amazon/Walmart</td><td>Very low prices</td><td>A known brand from TV, a dedicated app, a real CX team, and a U.S. warehouse</td></tr>
        <tr><td><strong>Other TV health watches</strong></td><td>Direct-response watches</td><td>Similar pitch</td><td>Inventel's in-house quality process, plus calling and texting at a budget price</td></tr>
      </tbody>
    </table>
    <p style="font-size:13px;color:var(--lw-text-muted)">Competitor prices and features change often. Check current details before using a comparison in an ad or on a call.</p>
    <h3 style="margin-top:22px">Positioning Statement</h3>
    <p style="font-style:italic;font-family:'Playfair Display',serif;font-size:1.1rem;color:var(--lw-graphite);border-left:4px solid var(--lw-orange-light);padding-left:16px">For everyday adults who want to keep an eye on their health without a costly, complicated watch, Life Watch is the simple smartwatch that puts heart rate, blood pressure, blood oxygen, sleep, calls, and texts on your wrist — works with any phone, and never charges a monthly fee.</p>
    <div class="team-callout marketing" style="margin-top:18px">
      <span class="team-tag">Marketing — How We Compare</span>
      <p style="margin:0">Compare on <strong>price, battery, and simplicity</strong> — never on medical accuracy. Don't name a competitor in paid ads without Legal / Compliance sign-off.</p>
    </div>

    </div>
  </div>
</section>

<section id="objections">
  <div class="card collapsible" data-section="objections">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">11 · Objection Handling</span>
        <h2>Objection Handling / Battlecards</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>Common concerns CX and sales will hear — with on-brand responses. Always lead with empathy, follow with fact.</p>
    <div class="objection">
      <div class="objection-q">"Is this a real company? TV products are cheap."</div>
      <div class="objection-a">Totally fair question. Life Watch is made by Inventel, the As Seen On TV company. It's been our own brand since around 2021, and we develop, test, and ship it ourselves from our warehouse in New Jersey. If anything's not right, our team is here to help.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"Is it as accurate as my blood pressure cuff?"</div>
      <div class="objection-a">Life Watch is a wellness watch — it helps you keep an eye on your numbers day to day. For medical decisions, keep using your cuff and the guidance your doctor gave you.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"Why not just buy an Apple Watch?"</div>
      <div class="objection-a">If you want the full Apple experience, that's a great watch. Life Watch costs a fraction of the price, works with iPhone and Android, makes calls and shows texts, and a charge lasts up to a week.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"Is there a monthly fee?"</div>
      <div class="objection-a">No. There's no monthly fee and no subscription, and the app is free.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"I don't have a smartphone."</div>
      <div class="objection-a">You can still use it. The health and fitness features work on the watch by itself — you'd only miss calls, texts, and notifications.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"I'm not good with technology."</div>
      <div class="objection-a">It's built for that. One touch shows your readings, and the screen wakes when you raise your wrist. If pairing gives you trouble, call us and we'll walk through it together.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"Can I make calls on it?"</div>
      <div class="objection-a">Yes. Life Watch makes and receives calls and shows your texts, all through your paired phone.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"Can I swim with it?"</div>
      <div class="objection-a">It's IP67 water resistant, so it's fine if it gets wet. Just try not to leave it underwater for long periods.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"Shipping costs too much."</div>
      <div class="objection-a">You'll see the shipping cost in the cart before you pay. We sometimes run free-shipping offers — let me check the website for what's running today.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"What if it doesn't work for me?"</div>
      <div class="objection-a">We have a 30-day return policy. Call or email us for a return authorization and we'll explain the steps, including any fees that apply to your order.</div>
    </div>
    <div class="team-callout cx" style="margin-top:16px">
      <span class="team-tag">CX — No Acquisition Story Here</span>
      <p style="margin:0">Some Inventel hubs cover a Chapter 11 → Inventel acquisition objection. <strong>That doesn't apply to Life Watch</strong> — it has always been ours. Use the "Is this a real company?" answer instead.</p>
    </div>

    </div>
  </div>
</section>

<section id="journey">
  <div class="card collapsible" data-section="journey">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">12 · Customer Journey</span>
        <h2>Customer Journey &amp; Lifecycle</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <div class="journey">
      <table>
        <thead><tr><th>Stage</th><th>Customer State of Mind</th><th>Channel / Touchpoint</th><th>Brand Action</th><th>CX Role</th></tr></thead>
        <tbody>
          <tr><td><strong>Awareness</strong></td><td>"That watch shows blood pressure?"</td><td>TV, Facebook, YouTube, TikTok</td><td>Demo the readouts on a real wrist; show the offer</td><td>Reply to social comments in-tone</td></tr>
          <tr><td><strong>Consideration</strong></td><td>"Will it work with my phone? Is it legit?"</td><td>Website, FAQ, testimonials, search</td><td>iPhone + Android message, no monthly fee, video testimonials</td><td>Answer pre-sale calls, chats, and emails</td></tr>
          <tr><td><strong>Purchase</strong></td><td>"Does it do calls? Is shipping free?"</td><td>getlifewatch.com product page, cart</td><td>Feature list, band and screen-protector add-ons, free-shipping nudge when an offer is running</td><td>Answer product questions; honor valid codes</td></tr>
          <tr><td><strong>Setup</strong></td><td>"How do I charge and pair this?"</td><td>Quick start guide, manual, app</td><td>Clear pairing steps, unboxing video</td><td><strong>Highest-volume stage:</strong> pairing, charging, screen sleep</td></tr>
          <tr><td><strong>First Week</strong></td><td>"Are these numbers right? Why does the screen go dark?"</td><td>Email, app, FAQ</td><td>Tips email, wellness disclaimer, settings help</td><td>Explain wellness vs. medical; adjust screen time</td></tr>
          <tr><td><strong>Ongoing Use</strong></td><td>"I'd like a nicer band."</td><td>Email, SMS, social</td><td>Band and accessory offers</td><td>Replacement cables, band swaps</td></tr>
          <tr><td><strong>Advocacy</strong></td><td>"My sister needs one."</td><td>Word of mouth, social, reviews</td><td>Review asks, gift-season campaigns</td><td>Returns inside 30 days; escalate disputes</td></tr>
        </tbody>
      </table>
    </div>
    <div class="team-callout newhire" style="margin-top:16px">
      <span class="team-tag">New Hire — Practice the Setup Stage</span>
      <p style="margin:0">Most Life Watch tickets come from the setup stage. Before your first shift, pair a watch with an iPhone <em>and</em> an Android phone using the steps in section 04.</p>
    </div>

    </div>
  </div>
</section>

<section id="data">
  <div class="card collapsible" data-section="data">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">13 · Health &amp; Survey Data</span>
        <h2>Health &amp; Survey Data</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p style="font-size:13px;color:var(--lw-text-muted)"><em>No Life Watch customer survey or clinical data is on file. This section stays in the hub so the structure matches every other brand and there's a clear home for data when we have it. Market context is in section 02.</em></p>
    <div class="stat-boxes">
      <div class="stat-box"><div class="stat-big">168 hrs</div><div class="stat-lbl">Battery per charge (product spec)</div></div>
      <div class="stat-box"><div class="stat-big">IP67</div><div class="stat-lbl">Water and dust resistance rating</div></div>
      <div class="stat-box"><div class="stat-big">56</div><div class="stat-lbl">Watch face designs on every watch</div></div>
      <div class="stat-box"><div class="stat-big">0</div><div class="stat-lbl">Monthly fees — the app is free</div></div>
    </div>
    <p style="margin-top:18px;font-size:14px"><strong>What we do have:</strong> customer video testimonials on the <a href="https://getlifewatch.com/pages/about-life-watch" target="_blank" rel="noopener">About page</a> and our TV demo on <a href="https://www.youtube.com/watch?v=rNoOE3Y7tjs" target="_blank" rel="noopener">YouTube</a>.</p>
    <div class="team-callout brand" style="margin-top:16px">
      <span class="team-tag">Brand — No Data, No Accuracy Claims</span>
      <p style="margin:0">Without accuracy or clinical data, we make <strong>no accuracy claims</strong>. "Tracks" and "monitors" are fine; "accurate," "validated," and "clinically proven" are not. If we run a customer survey, send the results to the Brand Lead to add here.</p>
    </div>

    </div>
  </div>
</section>

<section id="marketing">
  <div class="card collapsible" data-section="marketing">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">14 · Marketing Angles</span>
        <h2>Marketing Angles &amp; Hooks</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <div class="angles">
      <div class="angle">
        <h4>Know Your Numbers</h4>
        <div class="angle-row"><strong>Audience:</strong> Adults told to watch their blood pressure or heart rate</div>
        <div class="angle-row"><strong>Problem:</strong> Checking numbers means a cuff, a pharmacy trip, or guessing</div>
        <div class="angle-row"><strong>Solution:</strong> One-touch readings on the wrist — awareness, never diagnosis</div>
      </div>
      <div class="angle">
        <h4>Smartwatch Without the Price</h4>
        <div class="angle-row"><strong>Audience:</strong> Value-conscious adults priced out of premium watches</div>
        <div class="angle-row"><strong>Problem:</strong> Premium watches cost several times more, some with subscription upsells</div>
        <div class="angle-row"><strong>Solution:</strong> Health readouts, calls, and texts at a budget price, with no monthly fee</div>
      </div>
      <div class="angle">
        <h4>Charge It Once a Week</h4>
        <div class="angle-row"><strong>Audience:</strong> People who gave up on smartwatches</div>
        <div class="angle-row"><strong>Problem:</strong> Nightly charging is a chore that kills the habit</div>
        <div class="angle-row"><strong>Solution:</strong> Up to 168 hours per charge</div>
      </div>
      <div class="angle">
        <h4>Easy Enough for Dad</h4>
        <div class="angle-row"><strong>Audience:</strong> Adult children buying for parents</div>
        <div class="angle-row"><strong>Problem:</strong> Worry that a parent won't figure out the tech</div>
        <div class="angle-row"><strong>Solution:</strong> One-touch screen, simple pairing, and a CX team that helps</div>
      </div>
      <div class="angle">
        <h4>Never Miss a Call</h4>
        <div class="angle-row"><strong>Audience:</strong> People who keep their phone in a bag or another room</div>
        <div class="angle-row"><strong>Problem:</strong> Missed calls and texts from family</div>
        <div class="angle-row"><strong>Solution:</strong> Calls and texts right on the wrist</div>
      </div>
      <div class="angle">
        <h4>As Seen On TV</h4>
        <div class="angle-row"><strong>Audience:</strong> Viewers of our TV spot</div>
        <div class="angle-row"><strong>Problem:</strong> Uncertainty about buying a watch online</div>
        <div class="angle-row"><strong>Solution:</strong> Familiar brand, the TV offer, and a 30-day return policy</div>
      </div>
    </div>
    <h3 style="margin-top:28px">Proven &amp; Test-Ready Hooks</h3>
    <p style="font-size:13px;color:var(--lw-text-muted)">"Site/TV" hooks are already in our live messaging. "New" hooks haven't been tested — run them against the patterns in section 15 first.</p>
    <ol class="hooks">
      <li>"Your health, simplified." <em>(Site/TV)</em></li>
      <li>"Everything you need, right on your wrist." <em>(Site/TV)</em></li>
      <li>"Never miss a call or text again." <em>(Site/TV)</em></li>
      <li>"No monthly fees. Works with iPhone and Android." <em>(Site/TV)</em></li>
      <li>"As Seen On TV — see today's offer." <em>(Site/TV; always pair with the live store price)</em></li>
      <li>"I stopped charging my watch every night." <em>(New — test first)</em></li>
      <li>"My dad finally uses a smartwatch." <em>(New — test first)</em></li>
      <li>"One touch. There's my heart rate." <em>(New — test first)</em></li>
      <li>"Why pay premium-watch prices to check your steps?" <em>(New — test first)</em></li>
    </ol>
    <div class="team-callout marketing" style="margin-top:16px">
      <span class="team-tag">Marketing — One Benefit per Hook</span>
      <p style="margin:0">Every hook names one benefit and nothing else. If a hook mentions a health reading, the next line can't imply what that reading means for the customer's health.</p>
    </div>

    </div>
  </div>
</section>

<section id="creatives">
  <div class="card collapsible" data-section="creatives">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">15 · Sample Winning Creatives</span>
        <h2>Sample Winning Creatives</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>This section is a working reference for what's actually <em>worked</em> in paid social for our brands — the ads that went past testing, scaled, and held their ROAS. The intro patterns below are universal across the Inventel portfolio (Wild Earth, SugarMD, Pizza Pack, Spark, etc.). The Life Watch creatives themselves live behind the link underneath so they stay current.</p>
    <div class="creative-intro">
      <strong>Looking at all our winning ads across SugarMD, Wild Earth, Pizza Pack, and Spark, here's what they all have in common:</strong>
      <ol class="pattern-list">
        <li>
          <span class="pat-title">📌 Lead with a Specific, Relatable Problem</span>
          Every winner hooks with a pain point the customer already feels — not a product feature. "I switched to…" / "I don't hunt. I nap." / "Fridge fight again?" / "You're wasting your money." The customer sees themselves in the ad before they even read the offer.
        </li>
        <li>
          <span class="pat-title">⭐ Social Proof is Front and Center</span>
          Top performers across every brand lean heavily on proof — real reviews, star ratings, customer testimonials, "Trusted by thousands," Grommet features, 693 likes on the Pizza Pack video. The ads don't ask people to trust the brand; they show that others already do.
        </li>
        <li>
          <span class="pat-title">📱 Native, Authentic-Looking Creative</span>
          Winners don't look like polished corporate ads. The Pizza Pack UGC videos look like someone's home kitchen. The Wild Earth "I Don't Hunt. I Nap." ad looks like an organic post. The Spark fire-starter demo looks like a guy in his backyard. Low-production authenticity is consistently outperforming high-gloss creative.
        </li>
        <li>
          <span class="pat-title">🎯 One Clear, Simple Message</span>
          Every winning ad communicates a single idea. Not "here are 5 reasons to buy" — just one. <em>Stronger immunity, one bite at a time. The easiest fire you'll ever start.</em> The losers across your accounts tend to try to say too much.
        </li>
        <li>
          <span class="pat-title">🔁 Contrast and "Switch" Framing</span>
          Multiple winners across SugarMD and Wild Earth use a before/after or "what I switched to" structure — positioning the product as the smarter, newer alternative to what people are currently doing. This works because it validates the customer's frustration with their current solution before presenting yours.
        </li>
        <li>
          <span class="pat-title">🐾 Emotion Over Logic</span>
          The Wild Earth ads make you feel something for your dog. The Spark ads trigger the satisfying feeling of a perfect fire. The SugarMD "Real Reviews" ad leads with hope. None of your winners are making a rational argument — they're making an emotional one first.
        </li>
      </ol>
      <div class="through-line">
        <strong>The through-line:</strong> Your winning ads find a customer who already has a problem, show them someone like them who solved it, and make the product feel like the obvious next step — not a hard sell.
      </div>
    </div>

    <h3 style="margin-top:28px">Life Watch — Top-Performing Examples</h3>
    <p style="font-size:13.5px;color:var(--lw-text-muted);margin-top:6px">Use these as reference for the patterns above when briefing new ad concepts, briefing influencers, or judging variants in testing rounds.</p>
    <!-- UPDATE: replace href="#creatives" with the winning-creatives link, then add target="_blank" rel="noopener" -->
    <div class="creatives-link-card">
      <p style="margin:0">Our current winning Life Watch ads are kept in one place so they stay up to date.</p>
      <a id="creatives-link" class="creatives-link" href="#creatives">Open Life Watch winning creatives →</a>
      <span class="verify">Verify link</span>
    </div>
    <div class="team-callout creative" style="margin-top:22px">
      <span class="team-tag">Creative — Use these as briefs, not blueprints</span>
      <p style="margin:0">When briefing new variants, pull <em>the pattern</em> from a winner, not the visual. For Life Watch, the watch screen should always show the exact readout the ad is talking about. Don't ship visual copies; ship pattern matches.</p>
    </div>
    <div class="team-callout marketing" style="margin-top:10px">
      <span class="team-tag">Marketing — Test against these</span>
      <p style="margin:0">When a new concept enters testing, hold it up against the patterns above before pushing it live. If it doesn't lead with a specific problem, doesn't include social proof, looks too produced for the platform, tries to say more than one thing, or argues from logic rather than emotion — it has a known structural reason it's likely to underperform. Fix the structure before spending the budget.</p>
    </div>
    <div class="team-callout newhire" style="margin-top:10px">
      <span class="team-tag">New Hire — Spend 30 minutes with these</span>
      <p style="margin:0">Before your first ad-review meeting, open the winning creatives link and try to name the pattern(s) each ad is hitting without scrolling back to the list. Then open the brand's current Meta Ads Library and find one ad that's running well — name its pattern.</p>
    </div>

    </div>
  </div>
</section>

<section id="social">
  <div class="card collapsible" data-section="social">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">16 · Social &amp; Digital</span>
        <h2>Social Media &amp; Digital Channels</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <div class="chip-row">
      <a class="chip" href="https://www.facebook.com/profile.php?id=61550597544021" target="_blank" rel="noopener">📘 Facebook</a>
      <a class="chip" href="https://www.instagram.com/officiallifewatch" target="_blank" rel="noopener">📷 @officiallifewatch (IG)</a>
      <a class="chip" href="https://www.tiktok.com/@officiallifewatch?lang=en" target="_blank" rel="noopener">🎵 @officiallifewatch (TikTok)</a>
      <a class="chip" href="https://www.youtube.com/@InvenTelAsSeenOnTV" target="_blank" rel="noopener">▶️ YouTube (Inventel)</a>
      <a class="chip" href="https://twitter.com/LifeWatch_ASOT" target="_blank" rel="noopener">𝕏 @LifeWatch_ASOT</a>
      <a class="chip" href="https://www.pinterest.com/getlifewatch/" target="_blank" rel="noopener">📌 Pinterest</a>
      <a class="chip" href="https://getlifewatch.com/blogs/news" target="_blank" rel="noopener">📝 Blog</a>
    </div>
    <table style="margin-top:20px">
      <thead><tr><th>Platform</th><th>Primary Content Role</th><th>Posting Cadence</th></tr></thead>
      <tbody>
        <tr><td>Facebook</td><td>Core TV-age audience, ads, comment support</td><td>3–4 posts/week</td></tr>
        <tr><td>Instagram</td><td>Lifestyle wrist shots, Reels</td><td>3 posts/week + stories</td></tr>
        <tr><td>TikTok</td><td>Native demos, gifting content</td><td>3–5 videos/week</td></tr>
        <tr><td>YouTube</td><td>TV spot, unboxing, testimonials (shared Inventel channel)</td><td>As new videos are produced</td></tr>
        <tr><td>X / Twitter</td><td>Announcements, offers</td><td>1–2 posts/week</td></tr>
        <tr><td>Pinterest</td><td>Gift guides, band styling</td><td>Weekly; heavier before holidays</td></tr>
        <tr><td>Blog</td><td>SEO and wellness education</td><td>2 posts/month</td></tr>
      </tbody>
    </table>
    <p style="font-size:13px;color:var(--lw-text-muted)">Cadences are working targets, not measured history. <span class="verify">Verify with Marketing</span></p>
    <h3 style="margin-top:22px">Hashtags</h3>
    <div class="tag-row">
      <span class="tag">#LifeWatch</span><span class="tag">#AsSeenOnTV</span><span class="tag">#Smartwatch</span><span class="tag">#HealthTracker</span><span class="tag">#FitnessTracker</span><span class="tag">#StepCount</span><span class="tag">#GiftsForDad</span><span class="tag">#WellnessJourney</span>
    </div>
    <div class="team-callout marketing" style="margin-top:18px">
      <span class="team-tag">Marketing — Hashtag Governance</span>
      <p style="margin:0">Every post uses <strong>#LifeWatch</strong> plus two or three category tags. No medical hashtags like #hypertension or #heartdisease — they pull our posts into medical conversations we can't make claims in.</p>
    </div>
    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX — Public Complaints</span>
      <p style="margin:0">Social comments about a broken watch or a missing order get one public reply ("We're sorry! Please DM us your order number") and then move to DM. <strong>Never ask for addresses or payment details in public.</strong></p>
    </div>

    </div>
  </div>
</section>

<section id="partners">
  <div class="card collapsible" data-section="partners">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">17 · Partnerships</span>
        <h2>Partnerships &amp; Influencer Guidelines</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <div class="team-callout marketing">
      <span class="team-tag">Marketing — Partner Selection</span>
      <p style="margin:0">Influencer and partnership decisions are <strong>Marketing's call</strong>. Run every proposed partner through the filter below before seeding, gifting, or paid contracts. If a partner is known for medical misinformation or miracle-cure content, pass regardless of follower count.</p>
    </div>

    <h3>Ideal Brand Ambassador</h3>
    <ul style="margin-left:20px">
      <li><strong>Active 50+ creators</strong> — walking, gardening, travel, and grandparent lifestyle creators whose audiences match our core buyer.</li>
      <li><strong>Family and gifting creators</strong> — adult children sharing "what I got my parents," especially for Father's Day, Mother's Day, and the holidays.</li>
      <li><strong>Everyday fitness creators</strong> — step challenges and beginner workouts, not elite athletes.</li>
    </ul>
    <div class="do-dont">
      <div class="do"><h4>✅ Do</h4><ul>
        <li>Show the watch on their own wrist in daily life.</li>
        <li>Show the setup and pairing flow to prove it's easy.</li>
        <li>Mention "no monthly fee" and "iPhone and Android."</li>
        <li>Use approved hashtags and a clear ad disclosure.</li>
      </ul></div>
      <div class="dont"><h4>🚫 Don't</h4><ul>
        <li>Say the watch caught, diagnosed, or prevented a health problem.</li>
        <li>Compare readings to medical devices on camera.</li>
        <li>Show the watch underwater for long periods, like laps or diving.</li>
        <li>Say Life Watch appeared on Shark Tank — our founder page mentions Inventel's Shark Tank connections, not a Life Watch appearance.</li>
      </ul></div>
    </div>
    <h3 style="margin-top:22px">FTC Disclosure</h3>
    <p>Every paid or gifted partnership must be clearly disclosed with #ad, #sponsored, or the platform's paid-partnership label, placed where people see it without tapping "more." Creators can only make claims we make ourselves, and health testimonials must reflect their real experience without implying medical results.</p>
    <h3 style="margin-top:22px">Wholesale &amp; Retail</h3>
    <p>Retail and bulk inquiries come through our <a href="https://getlifewatch.com/pages/wholesale" target="_blank" rel="noopener">wholesale page</a> and route to Marketing / Partnerships.</p>
    <div class="team-callout marketing" style="margin-top:16px">
      <span class="team-tag">Marketing — Creator Briefs</span>
      <p style="margin:0">Every creator brief includes this section's Don't list, word for word. Review content for health claims <strong>before</strong> it posts, not after.</p>
    </div>

    </div>
  </div>
</section>

<section id="discounts">
  <div class="card collapsible" data-section="discounts">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">18 · Discounts &amp; Promo Codes</span>
        <h2>Discounts &amp; Promo Codes</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>Life Watch runs different discounts, and they don't all work the same way. Some are <strong>one-time promo codes</strong>, some are <strong>full-site discount flips</strong> (the site price is simply lower for the duration of the promo), and some only appear in <strong>on-site banners</strong> at the top of the page. Each department has its own dedicated codes, so the same offer might exist in several forms at the same time depending on the channel.</p>

    <div class="alert-callout critical">
      <span class="alert-callout-title">🚨 Always check the monthly discount sheet first</span>
      <p style="margin:0 0 10px;font-size:15px;line-height:1.6;color:#fff"><strong style="color:#F4C842">The monthly discount sheet</strong> (in the internal PM tool) is the single source of truth for what's active, who owns it, expiration, and usage limits.</p>
      <p style="margin:0;font-size:14px;line-height:1.55;color:#fff">Do not quote, honor, or apply a discount from memory or a past conversation — codes are rotated constantly. Before applying a code, confirm it's listed as <strong style="color:#F4C842">currently active</strong> for the correct channel. If you can't find the code on the sheet, assume it's expired or wasn't issued by us and escalate to the owning department before proceeding.</p>
    </div>

    <h3 style="margin-top:24px">Sales Change as Needed</h3>
    <p>This hub doesn't lock in any sale. Sitewide sales, banner offers, and free-shipping offers are turned on, changed, and ended as needed, so <strong>every offer below is an example, not a current offer</strong>. The <a href="https://getlifewatch.com/collections/all" target="_blank" rel="noopener">live store</a> and the monthly sheet tell you what's running today.</p>
    <p><strong>Example:</strong> if the store shows a "15% OFF Sitewide" badge, the sale prices on the store already include that 15%. A customer shouldn't get another 15% on top at checkout.</p>

    <h3 style="margin-top:22px">How Discounts Show Up</h3>
    <table>
      <thead><tr><th>Format</th><th>What It Is</th><th>How Customer Applies</th><th>Examples</th></tr></thead>
      <tbody>
        <tr><td><strong>Promo code</strong></td><td>Alphanumeric code entered at checkout</td><td>Types/pastes the code in the "Discount code" field at checkout</td><td>An email welcome code; a creator code</td></tr>
        <tr><td><strong>Full-site flip</strong></td><td>Site-wide price reduction — no code needed</td><td>Automatic; customer sees the lower price on every product page</td><td>A "15% OFF Sitewide" sale</td></tr>
        <tr><td><strong>Banner / automatic</strong></td><td>Announced in the top-of-site banner, auto-applies at cart</td><td>Nothing — the banner triggers the discount automatically</td><td>An "As Seen On TV! Now Only…" banner offer</td></tr>
        <tr><td><strong>Bundle / cart threshold</strong></td><td>Discount or perk unlocks based on cart contents or total</td><td>Auto-applies once the threshold is met</td><td>A free-shipping threshold offer; a watch + band bundle</td></tr>
        <tr><td><strong>Subscription discount</strong> <em>(evergreen at most brands)</em></td><td>Ongoing discount for subscribing</td><td>—</td><td><strong>Not applicable.</strong> Life Watch has no subscription products.</td></tr>
        <tr><td><strong>New customer discount</strong> <em>(evergreen)</em></td><td>First-order-only offer, usually email- or SMS-captured</td><td>Via welcome email, pop-up sign-up, or ad landing page; first order only</td><td>A first-order code — confirm on the sheet whether one is live <span class="verify">Check sheet</span></td></tr>
      </tbody>
    </table>
    <p style="margin-top:14px"><strong>Evergreen vs. time-bound offers.</strong> Most promo codes and site flips run on a short window and come and go with the monthly sheet. At most Inventel brands, subscription and new-customer discounts are <em>evergreen</em>. Life Watch has no subscriptions, so only a new-customer discount can be evergreen — and only if the sheet lists one. Treat everything else, including any sitewide sale and the TV offer, as time-bound.</p>

    <h3 style="margin-top:22px">Who Owns Which Codes</h3>
    <p>Every department issues its own codes for its own channels. A customer saying "I got a code in an email" isn't the same as "I got a code from support" — confirm the channel before applying.</p>
    <table>
      <thead><tr><th>Channel / Department</th><th>Typical Discount Type</th><th>How Customer Receives It</th><th>CX Notes</th></tr></thead>
      <tbody>
        <tr><td><strong>Email</strong> (owned by Marketing)</td><td>Welcome codes, win-back offers, seasonal promos</td><td>In a marketing email — single-use per customer typical</td><td>Usually tied to email address; Marketing can re-issue</td></tr>
        <tr><td><strong>SMS</strong> (owned by Marketing)</td><td>Flash sales, short-window exclusives</td><td>Text message with a code or auto-apply link</td><td>Often shorter expiration — verify the window on the sheet</td></tr>
        <tr><td><strong>Organic social</strong> (owned by Social/Creative)</td><td>Post-specific codes</td><td>Captions, bios, stories</td><td>Only codes already on the sheet; check redemption caps</td></tr>
        <tr><td><strong>Paid media</strong> (owned by Growth/Performance Marketing)</td><td>Campaign-specific offers</td><td>In the ad or landing page</td><td>May be locked to a landing page; the ad offer must match the live store</td></tr>
        <tr><td><strong>CX</strong> (owned by Customer Experience)</td><td>Goodwill codes, one-time fixes after a service issue</td><td>Issued on the call/ticket</td><td>Service recovery only, within the monthly CX budget; log every code</td></tr>
        <tr><td><strong>Influencer / Partnerships</strong></td><td>Creator-branded codes</td><td>Creator content or bio</td><td>Valid only within the contracted window</td></tr>
        <tr><td><strong>Retention</strong> (owned by Marketing)</td><td>Accessory offers for existing owners</td><td>Email or SMS</td><td>No subscription program — focus is bands, protectors, and cables</td></tr>
      </tbody>
    </table>
    <div class="team-callout cx" style="margin-top:16px">
      <span class="team-tag">CX — Discount Handling</span>
      <p style="margin:0"><strong>Always verify on the monthly discount sheet before honoring a code.</strong> If a customer's code recently expired and the ask is reasonable, use a <strong>CX-issued goodwill code</strong> from the current month's allocation — don't invent a new code or extend someone else's campaign. If a sitewide sale is running, the store's sale prices already include it, so don't add it again.</p>
    </div>
    <div class="team-callout marketing" style="margin-top:10px">
      <span class="team-tag">Marketing — Code Governance</span>
      <p style="margin:0">Every new code must land on the monthly discount sheet <strong>before</strong> it goes live — no exceptions. Include owner, channel, type (code/flip/banner/bundle), value, start/end timestamps, and single- vs. multi-use. Codes not on the sheet will not be honored by CX.</p>
    </div>
    <div class="team-callout newhire" style="margin-top:10px">
      <span class="team-tag">New Hire — Where to Find the Sheet</span>
      <p style="margin:0">The monthly discount sheet lives in the internal PM tool. If you can't find it in your first week, ask your manager or post in <code>#discounts</code>. Bookmark it — treat anything older than a week as stale.</p>
    </div>

    <p style="font-size:13px;color:var(--lw-text-muted);font-style:italic;margin-top:14px">💡 <strong>Rule of thumb:</strong> Life Watch runs on Shopify discounts only (no subscription engine). If a code didn't come from the monthly sheet, it doesn't exist for the purpose of this transaction. Escalate rather than improvise.</p>

    </div>
  </div>
</section>

<section id="seo">
  <div class="card collapsible" data-section="seo">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">19 · Search Engine Optimization</span>
        <h2>SEO</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>SEO is how Life Watch earns traffic from Google, Bing, and AI-driven answer engines <em>without</em> paying per click. It's a long game — content, links, and site health compound over months, not days — but paid traffic stops the moment we stop paying, and SEO traffic keeps coming. For Life Watch, SEO also catches the people who see our TV spot and then search for us.</p>
    <h3 style="margin-top:20px">Priority Keyword Themes for Life Watch</h3>
    <p>Each theme maps to a real customer question or shopping intent. These come from our positioning and customer questions — validate volume in Search Console and Ahrefs/Semrush before building content. <span class="verify">Verify with Marketing</span></p>
    <ul style="margin-left:20px">
      <li><strong>Blood pressure smartwatch</strong> — "smartwatch that monitors blood pressure," "watch that shows blood pressure," "blood pressure watch for seniors"</li>
      <li><strong>Affordable, no monthly fee</strong> — "smartwatch with no monthly fee," "affordable smartwatch for iPhone and Android"</li>
      <li><strong>Easy for seniors</strong> — "easy to use smartwatch for seniors," "simple smartwatch for elderly parents," "smartwatch gift for dad"</li>
      <li><strong>Long battery life</strong> — "smartwatch with 7 day battery," "smartwatch that doesn't need charging every day"</li>
      <li><strong>Calling smartwatch</strong> — "smartwatch that makes calls with Android," "Bluetooth calling smartwatch for iPhone"</li>
      <li><strong>Everyday fitness tracking</strong> — "step counter watch," "sleep tracker watch," "fitness tracker with heart rate and oxygen"</li>
      <li><strong>Brand and TV searches</strong> — "Life Watch as seen on TV," "Life Watch reviews," "is Life Watch legit," "Life Watch app"</li>
      <li><strong>Owner support and accessories</strong> — "Life Watch replacement band," "Life Watch charger," "how to pair Life Watch," "Life Watch manual"</li>
    </ul>
    <h3 style="margin-top:22px">What Each Team Owns</h3>
    <table>
      <thead><tr><th>Lever</th><th>Owner</th><th>What "Good" Looks Like</th></tr></thead>
      <tbody>
        <tr><td><strong>Product page copy</strong></td><td>Brand + Marketing</td><td>Both listings accurate on calling, texting, and water use. Benefit-led intro, feature list, FAQ block. Primary keyword in H1 and first paragraph.</td></tr>
        <tr><td><strong>Blog / editorial content</strong></td><td>Marketing / Content</td><td>Setup how-tos and wellness basics that answer real customer questions; every post links to a product page.</td></tr>
        <tr><td><strong>Meta titles &amp; descriptions</strong></td><td>Marketing</td><td>Unique per page. Title: primary keyword + brand, under ~60 characters. Description: clear benefit + CTA, 140–160 characters.</td></tr>
        <tr><td><strong>Image alt text</strong></td><td>Creative + Web Dev</td><td>Describe what's on screen: "Life Watch showing heart rate on a woman's wrist" beats "watch."</td></tr>
        <tr><td><strong>Schema / structured data</strong></td><td>Web Dev</td><td>Product, Offer, FAQ, and Breadcrumb schema on both watch pages.</td></tr>
        <tr><td><strong>Site speed &amp; Core Web Vitals</strong></td><td>Web Dev</td><td>Product pages carry up to 11 gallery images — compress and lazy-load. LCP under 2.5s.</td></tr>
        <tr><td><strong>Backlinks / PR</strong></td><td>Marketing + Partnerships</td><td>Gift guides, senior-living and wellness sites, creator posts. Quality over quantity.</td></tr>
        <tr><td><strong>Review volume</strong></td><td>CX + Marketing</td><td>Post-purchase review asks; CX flags happy customers.</td></tr>
      </tbody>
    </table>
    <h3 style="margin-top:22px">SEO Do's &amp; Don'ts</h3>
    <div class="do-dont">
      <div class="do"><h4>✅ Do</h4><ul>
        <li>Answer the questions customers already ask (pairing, charging, water) in blog posts and FAQs</li>
        <li>Use descriptive image filenames: <code>life-watch-calling-screen.webp</code></li>
        <li>Link blog posts to the right product page</li>
        <li>Keep each FAQ question on a page only once</li>
        <li>Monitor rankings monthly; investigate any drop of 5+ positions on priority terms</li>
      </ul></div>
      <div class="dont"><h4>🚫 Don't</h4><ul>
        <li>Don't target medical terms like "hypertension monitor" or "ECG device"</li>
        <li>Don't upload images with marketplace-style filenames (several current product images use names like <code>71cY18V7dcL._AC_SL1500_</code>)</li>
        <li>Don't rely on the meta keywords tag — search engines ignore it</li>
        <li>Don't publish thin pages just to rank for a keyword</li>
        <li>Don't ignore AI search — structured, answer-first writing wins there too</li>
      </ul></div>
    </div>
    <div class="team-callout marketing" style="margin-top:16px">
      <span class="team-tag">Marketing — Content Calendar</span>
      <p style="margin:0">Every piece of content must ladder to a keyword theme above and have a clear internal-link plan to a product page. Before publishing, ask: <strong>what search is this piece winning, and what action does it drive?</strong></p>
    </div>
    <div class="team-callout creative" style="margin-top:10px">
      <span class="team-tag">Creative — Image Optimization</span>
      <p style="margin:0">Compress images before handing off (WebP or compressed JPG/PNG). File names matter — <code>life-watch-heart-rate-screen.webp</code> beats <code>IMG_2847.JPG</code>. Always supply descriptive alt text with the asset, not as an afterthought.</p>
    </div>

    <p style="font-size:13px;color:var(--lw-text-muted);font-style:italic;margin-top:14px">📊 <strong>Tracking:</strong> Google Search Console is the primary truth source for impressions, clicks, and ranking changes. Ahrefs / Semrush for competitive research and backlinks. Monthly SEO review owned by Marketing, with a quarterly deep-dive.</p>

    </div>
  </div>
</section>

<section id="cro">
  <div class="card collapsible" data-section="cro">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">20 · Conversion Rate Optimization</span>
        <h2>CRO</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>CRO is the practice of turning more of the traffic we already have into customers. <strong>Converting existing traffic is cheaper than acquiring new.</strong> Life Watch gets a steady flow of visitors from TV, so small gains on the site pay off quickly.</p>
    <h3 style="margin-top:20px">The Life Watch Funnel</h3>
    <ol style="margin-left:20px">
      <li><strong>Landing / Home</strong> — <em>"Am I in the right place?"</em> Does the page match the TV offer — same watch, same "As Seen On TV" wording?</li>
      <li><strong>Product page (PDP)</strong> — <em>"Will this work for me?"</em> iPhone and Android, no monthly fee, calls and texts, and a clear feature list.</li>
      <li><strong>Add to cart</strong> — <em>"Is this worth committing to?"</em> Sale vs. compare-at price, 30-day returns, and what's in the box.</li>
      <li><strong>Cart</strong> — <em>"Did I get a fair deal?"</em> When a free-shipping offer is running, show how far the cart is from it and suggest a band or screen protector.</li>
      <li><strong>Checkout</strong> — <em>"Is this safe and fast?"</em> Shop Pay, Apple Pay, Google Pay, PayPal, and Venmo are already available.</li>
      <li><strong>Post-purchase</strong> — <em>"Did I make the right call?"</em> Setup email with pairing steps, the manual, and the app links.</li>
    </ol>
    <h3 style="margin-top:22px">High-Impact CRO Levers</h3>
    <table>
      <thead><tr><th>Lever</th><th>Why It Matters</th><th>Quick Wins to Test</th></tr></thead>
      <tbody>
        <tr><td><strong>Hero clarity</strong></td><td>The first 3 seconds decide whether a visitor stays</td><td>Show a health readout on the watch in the hero image, next to "Your Health, Simplified!"</td></tr>
        <tr><td><strong>Social proof</strong></td><td>Reviews reduce purchase anxiety, especially for TV products</td><td>Add star ratings and written reviews near the price; keep the video testimonials <span class="verify">Confirm current review app</span></td></tr>
        <tr><td><strong>Free-shipping messaging</strong></td><td>Offers run occasionally and are easy to miss</td><td>When an offer is running, show it in the banner and a cart-progress bar. Example: "Add a band to unlock free shipping."</td></tr>
        <tr><td><strong>Subscription framing</strong></td><td>Not applicable — no subscription products</td><td>Lift order value with accessory add-ons instead</td></tr>
        <tr><td><strong>Objection-busting FAQ on PDP</strong></td><td>Water, calling, and "will it work with my phone" stall purchases</td><td>Remove the duplicate charging-cable question; add the water and calling answers</td></tr>
        <tr><td><strong>Cart recovery</strong></td><td>Most carts are abandoned industry-wide</td><td>Email + SMS recovery that restates no monthly fee and 30-day returns</td></tr>
        <tr><td><strong>Checkout speed</strong></td><td>Each added step loses customers</td><td>Keep express wallet buttons above the fold on mobile</td></tr>
        <tr><td><strong>Trust signals</strong></td><td>As Seen On TV buyers want reassurance</td><td>Surface the 30-day return window and the anti-counterfeiting statement on product pages</td></tr>
        <tr><td><strong>Mobile optimization</strong></td><td>Long product pages with up to 11 gallery images</td><td>Compress images; move the feature list higher; sticky Add-to-Cart on mobile</td></tr>
      </tbody>
    </table>
    <h3 style="margin-top:22px">How to Run a CRO Test</h3>
    <ol style="margin-left:20px">
      <li><strong>Start with a hypothesis, not a hunch.</strong> "Showing a free-shipping progress bar in the cart will raise order value because customers add a band to qualify."</li>
      <li><strong>Pick one variable.</strong> Changing hero copy, image, and button at once tells you nothing.</li>
      <li><strong>Calculate sample size up front.</strong> If the test needs six months to reach significance, pick a bigger swing.</li>
      <li><strong>Run at least one full week.</strong> Never call a test on three days of data — TV airings change traffic by day.</li>
      <li><strong>Look at downstream metrics too.</strong> A lift in add-to-cart that drops checkout completion — or raises returns — is a loss.</li>
      <li><strong>Document the result.</strong> Wins, losses, and inconclusive tests all go in the CRO log.</li>
    </ol>
    <div class="team-callout marketing" style="margin-top:16px">
      <span class="team-tag">Marketing — Test Prioritization</span>
      <p style="margin:0">Use an <strong>impact-vs-effort</strong> filter and ship one quality test per month, not five mediocre ones. The free-shipping progress message is the highest-impact test on the list.</p>
    </div>
    <div class="team-callout creative" style="margin-top:10px">
      <span class="team-tag">Creative — Design for the Fold</span>
      <p style="margin:0">Everything above the fold must answer <strong>What is this?</strong> <strong>Who is it for?</strong> <strong>Why should I trust it?</strong> in a 3-second glance: a smartwatch that shows your health numbers and takes calls, for everyday adults, As Seen On TV with no monthly fee.</p>
    </div>
    <div class="team-callout newhire" style="margin-top:10px">
      <span class="team-tag">New Hire — Watch a Real Session</span>
      <p style="margin:0">Watch 10 mobile session recordings end-to-end before your first CRO meeting. Note where people stop scrolling on the product page and where they hesitate in the cart.</p>
    </div>

    <p style="font-size:13px;color:var(--lw-text-muted);font-style:italic;margin-top:14px">📈 <strong>Primary metrics:</strong> conversion rate, AOV, cart-abandonment rate, mobile conversion rate (subscription take rate doesn't apply to Life Watch). Owned by Marketing/Growth with Creative and Web Dev. Monthly review.</p>

    </div>
  </div>
</section>

<section id="glossary">
  <div class="card collapsible" data-section="glossary">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">21 · Glossary</span>
        <h2>Glossary</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <dl class="glossary">
      <dt>Evergreen Offer</dt>
      <dd>A discount that's always on, not tied to a calendar window. The two most common: the Subscribe &amp; Save discount and the New Customer first-order discount. Assume live unless the monthly discount sheet flags otherwise. Life Watch has no subscription products, so only a new-customer discount can apply.</dd>
      <dt>Standard listing</dt>
      <dd>The Life Watch Smartwatch listing on the store. Orders from this listing ship the Life Watch Deluxe watch.</dd>
      <dt>Deluxe</dt>
      <dd>The Life Watch Deluxe is the watch that ships on every order. It includes calling, texting, contacts, call records, 56 watch faces, Do Not Disturb, and weather, plus all health and fitness tracking.</dd>
      <dt>ASOT</dt>
      <dd>As Seen On TV. Used in our handles (for example @LifeWatch_ASOT) and in internal shorthand.</dd>
      <dt>DRTV</dt>
      <dd>Direct-response TV. Ads that ask viewers to buy right away — how Inventel launches products like Life Watch.</dd>
      <dt>IP67</dt>
      <dd>A water and dust resistance rating. Life Watch is IP67 rated; it's fine if it gets wet, but it shouldn't stay underwater for long periods.</dd>
      <dt>Blood Oxygen (SpO₂)</dt>
      <dd>An estimate of how much oxygen the blood is carrying, shown on the watch as a wellness reading.</dd>
      <dt>Wellness Device</dt>
      <dd>A product that helps people track general health habits. Life Watch is a wellness device, not a medical device, so we make no diagnostic or accuracy claims.</dd>
      <dt>Bind / Pairing</dt>
      <dd>Connecting the watch to a phone over Bluetooth. The app calls it "Bind Now"; the watch appears as "Life Watch."</dd>
      <dt>Find Phone</dt>
      <dd>A watch button that makes a paired phone vibrate. It does not connect the watch to the phone — a common customer mix-up.</dd>
      <dt>Screen Time</dt>
      <dd>How long the display stays lit before sleeping to save battery. Changed in Settings → Screen Display → Screen Time.</dd>
      <dt>Polarized Magnetic Charger</dt>
      <dd>The charging cable's magnets only connect one way. If it won't charge, rotate the connector until it snaps in.</dd>
      <dt>Compare-at Price</dt>
      <dd>The crossed-out price shown next to the sale price on the <a href="https://getlifewatch.com/collections/all" target="_blank" rel="noopener">store</a> during a sale.</dd>
      <dt>RA Number</dt>
      <dd>Return authorization number. Customers must get one from CX, along with the return-to address, before sending anything back.</dd>
    </dl>

    </div>
  </div>
</section>

<section id="returns">
  <div class="card collapsible" data-section="returns">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">22 · Return Policy</span>
        <h2>Return Policy / Happiness Guarantee</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>Life Watch follows the <strong>standard Inventel 30-day return policy</strong>, quoted below from <a href="https://getlifewatch.com/policies/refund-policy" target="_blank" rel="noopener">getlifewatch.com/policies/refund-policy</a>. Life Watch doesn't advertise a separate happiness guarantee — this policy is our guarantee.</p>
    <div class="policy-card">
      <h3>📦 30-Day Return Policy <em style="font-weight:400;font-size:1rem">(note: some exceptions may apply)</em></h3>
      <p>All returns are subject to processing and handling fees which vary depending on your original order. If you decide to cancel or return your order, you will be responsible for the cost of return shipping.</p>
      <p>For return information, please call customer service between <strong>8:30 a.m. and 5:30 p.m. Monday to Friday, EST</strong>, or email us to get a return authorization number &amp; return to address.</p>
      <div class="policy-contact" style="margin-top:14px">
        📞 <strong>Phone:</strong> +1 888-231-6573<br>
        ✉️ <strong>Email:</strong> <a href="mailto:support@getlifewatch.com">support@getlifewatch.com</a>
      </div>
      <p style="margin-top:14px;margin-bottom:0;font-style:italic;font-size:13px;color:var(--lw-text-muted)">Due to health and sanitary reasons, we cannot accept anything back that has been in direct contact with a human's body (i.e. apparel, masks, beauty products).</p>
    </div>

    <h3 style="margin-top:26px;margin-bottom:10px">Life Watch-Specific Return Rules</h3>
    <p style="font-size:13px;color:var(--lw-text-muted);margin-bottom:12px">CX should know all of these before quoting a refund. Where the policy is silent, confirm with the CX Fulfillment Supervisor. Count the 30 days from delivery unless the supervisor says otherwise. <span class="verify">Confirm start date</span></p>
    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX · Return Window Is 30 Days</span>
      <p style="margin:0">Our return policy is <strong>30 days</strong>. An older page, <a href="https://getlifewatch.com/pages/return-policy" target="_blank" rel="noopener">getlifewatch.com/pages/return-policy</a>, still says 60 days and lists an old phone and email. Always quote 30 days. If a customer cites the older page, escalate to the CX Fulfillment Supervisor, and ask the Web Dev Team to remove or update that page.</p>
    </div>
    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX · Fees and Return Shipping</span>
      <p style="margin:0"><strong>Every return carries a processing and handling fee that varies by order, and the customer pays return shipping.</strong> Get the exact fee from the CX Fulfillment Supervisor and quote both before issuing the RA, so the refund total is never a surprise.</p>
    </div>
    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX · Worn Watches and Bands</span>
      <p style="margin:0">Read literally, the hygiene rule could exclude any watch or band that's been worn — nearly every return. <strong>Don't deny a watch return on the call for this reason.</strong> Escalate to the CX Fulfillment Supervisor for a decision.</p>
    </div>
    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX · Try Troubleshooting First</span>
      <p style="margin:0">Most "it doesn't work" returns are pairing, charging, or screen-sleep issues. Walk through the fixes in sections 04 and 26 before starting a return, and point charging problems to the replacement cable on the store.</p>
    </div>
    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX · Outside 30 Days</span>
      <p style="margin:0">If the customer is past 30 days, <strong>don't deny on the call</strong>. Escalate to the CX Fulfillment Supervisor.</p>
    </div>
    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX · What Gets Refunded</span>
      <p style="margin:0">The policy doesn't say whether original shipping is refunded. <strong>Don't promise it either way</strong> — confirm with the CX Fulfillment Supervisor before quoting a refund total.</p>
    </div>
    <div class="team-callout newhire" style="margin-top:14px">
      <span class="team-tag">New Hire — Quick Math Example</span>
      <p style="margin:0">Customer bought a Life Watch and returns it on day 12 with an RA. Look up what they paid on the Shopify order, then get the processing fee from the CX Fulfillment Supervisor.<br>→ <strong>Refund = product price paid − processing fee.</strong> The customer covers their own return shipping. Don't promise the original shipping charge back until the supervisor confirms.</p>
    </div>

    </div>
  </div>
</section>

<section id="fulfillment">
  <div class="card collapsible" data-section="fulfillment">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">23 · Fulfillment &amp; Shipping</span>
        <h2>Fulfillment &amp; Shipping</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>All Life Watch orders — both outbound shipments and customer returns — move through the <strong>Inventel warehouse</strong>. Life Watch does not run its own fulfillment operation; the Inventel warehouse team handles picking, packing, and shipping every order, and receives every return.</p>
    <h3>Warehouse Address (Shipping &amp; Returns)</h3>
    <div class="address-block">
      <span class="addr-label">Inventel Warehouse · All outbound + return shipments</span>
      <strong>240 West Parkway</strong><br>
      Middle Door<br>
      Pompton Plains, NJ 07444
    </div>
    <h3 style="margin-top:24px">How Orders Flow</h3>
    <ol class="process-steps">
      <li><strong>Customer places order</strong> on getlifewatch.com (Shopify).</li>
      <li><strong>CX Fulfillment team prints the shipping label.</strong> There is a <strong>small window after label creation</strong> during which an order can still be cancelled or edited before it's physically released to the warehouse.</li>
      <li><strong>Label goes to the Inventel warehouse team,</strong> who pick, pack, and ship the order. Once it reaches this step, the order is generally locked — changes are no longer possible and a post-ship return/refund is the only path.</li>
      <li><strong>Ground shipping</strong> from Pompton Plains, NJ. Delivery is typically <strong>3–7 business days</strong> within the continental US, with East Coast destinations often arriving in 3–4 days and West Coast in 5–7.</li>
      <li><strong>Returns</strong> are routed back to the same warehouse address above.</li>
    </ol>
    <div class="alert-callout">
      <span class="alert-callout-title">⚠️ CX cancellation / edit window</span>
      If a customer calls or emails asking to <strong>cancel or change an order</strong> (address correction, band swap, add-on, etc.), move immediately. The window between label print and warehouse pick is short. Flag it to the CX Fulfillment team as soon as possible — the earlier in the flow, the better the chance of making the change without a return.
    </div>
    <h3 style="margin-top:22px">Shipping Coverage</h3>
    <table>
      <thead><tr><th>Service</th><th>Region</th><th>Estimated Transit Time</th><th>Notes</th></tr></thead>
      <tbody>
        <tr><td>Ground (standard)</td><td>Continental US (Lower 48)</td><td>3–7 business days</td><td>Our default service; standard shipping rates apply (see the <a href="https://getlifewatch.com/policies/shipping-policy" target="_blank" rel="noopener">shipping policy</a>)</td></tr>
        <tr><td>Ground — East Coast</td><td>NJ, NY, PA, CT, MA, MD, VA, NC, etc.</td><td>3–4 business days</td><td>Faster due to proximity to Pompton Plains, NJ</td></tr>
        <tr><td>Ground — Midwest</td><td>IL, OH, MI, MN, etc.</td><td>4–5 business days</td><td>Standard ground transit</td></tr>
        <tr><td>Ground — West Coast</td><td>CA, OR, WA, NV, AZ</td><td>5–7 business days</td><td>Longest ground transit from NJ</td></tr>
        <tr><td>Alaska / Hawaii / PR / territories</td><td>Non-contiguous US</td><td>Not currently supported by default</td><td>Escalate to CX Fulfillment Supervisor if a customer requests — case-by-case</td></tr>
        <tr><td>International</td><td>Outside the US</td><td>Not supported</td><td>Life Watch does not ship internationally at this time</td></tr>
      </tbody>
    </table>
    <div class="team-callout cx" style="margin-top:14px">
      <span class="team-tag">CX · Free Shipping Offers</span>
      <p style="margin:0">Sometimes we run a <strong>free-shipping offer with a minimum order amount</strong>. It changes as needed, so check the <a href="https://getlifewatch.com/" target="_blank" rel="noopener">website</a> for the current offer before telling a customer their order ships free.</p>
    </div>

    <p style="font-size:13px;color:var(--lw-text-muted);font-style:italic;margin-top:10px">💡 <strong>CX tip:</strong> When quoting delivery times, always give a <em>business-day</em> range and add "from the day your order ships" so customers don't confuse order date with ship date.</p>
    <h3 style="margin-top:22px">Returns Flow</h3>
    <p>When a customer is approved for a return under the 30-day return policy, the product is shipped back to the Inventel warehouse at the address above. CX issues a return authorization (RA) number and provides return-shipping instructions — return shipping and any processing/handling fees are the customer's responsibility. <strong>Do not direct customers to any other address</strong> — all Life Watch returns must land at the Pompton Plains warehouse so the ops team can process refunds correctly.</p>

    </div>
  </div>
</section>

<section id="test-orders">
  <div class="card collapsible" data-section="test-orders">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">24 · Test Orders</span>
        <h2>Test Orders</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>Anyone at Inventel who needs to place a test order on getlifewatch.com (QA, marketing, a new promo code check, etc.) must follow this procedure exactly. The rules exist for one reason: test orders that slip past get real inventory shipped to real addresses. We avoid that by making every test order visually obvious <em>and</em> routable to our own office.</p>
    <div class="alert-callout critical">
      <span class="alert-callout-title">🚨 Mandatory · Stop · Read this before you checkout</span>
      <p style="margin:0 0 10px;font-size:15px;line-height:1.6;color:#fff"><strong style="color:#F4C842">YOU MUST</strong> type <strong style="color:#F4C842">"Test Order"</strong> in the <strong style="color:#F4C842">First Name</strong> field at checkout, and your own name as the Last Name. This is non-negotiable.</p>
      <p style="margin:0;font-size:14px;line-height:1.55;color:#fff">It's the single trigger the warehouse uses to catch live test orders before they ship. An order <em>without</em> "Test Order" in the first-name field is treated as a real customer order — it will be picked, packed, and go out the door with real inventory to a real address. Every team at Inventel (CX, Marketing, Creative, Engineering, QA) follows this rule with zero exceptions.</p>
    </div>
    <h3 style="margin-top:20px">Step-by-Step</h3>
    <ol class="process-steps">
      <li><strong>First Name:</strong> <code style="background:var(--lw-mist);padding:2px 8px;border-radius:4px;font-family:'DM Mono',monospace">Test Order</code> (exactly — capital T, capital O, space between).</li>
      <li><strong>Last Name:</strong> Your own name (so the team knows who placed it).</li>
      <li><strong>Shipping address:</strong> Anything works, but the easiest option is the Inventel office — that way if the order does somehow slip through, it arrives at our own door and can be returned to the warehouse without issue.</li>
      <li><strong>Phone / email / payment:</strong> Any valid info. Use internal test cards where available.</li>
      <li><strong>Immediately after checkout:</strong> send a direct message to the <strong>CX Fulfillment Lead</strong> on Google Chat letting them know you placed a test order. (Department only — if you're new and don't know who currently holds this role, ask your manager in week one and bookmark it.)</li>
      <li>In that message, give them everything they need to act on it: order number or confirmation detail, when the order can be refunded or cancelled, and whether anything else needs to be confirmed first (e.g., a promo code was redeemed, inventory should decrement, etc.).</li>
      <li><strong>Wait for their reply</strong> confirming the order has been located, put on hold, and cancelled/refunded. Only then is the test complete.</li>
    </ol>
    <h3 style="margin-top:22px">Recommended Test Shipping Address</h3>
    <div class="address-block">
      <span class="addr-label">Inventel Office · Safe fallback address for test orders</span>
      <strong>200 Forge Way</strong><br>
      Unit 1<br>
      Rockaway, New Jersey 07866
    </div>
    <p style="font-size:13px;color:var(--lw-text-muted);font-style:italic;margin-top:8px">Using the office address means any test order that gets past the "Test Order" flag and ships anyway will arrive at our own building, where it can be intercepted and returned to the warehouse in Pompton Plains. Personal home addresses should be avoided for exactly this reason.</p>
    <div class="alert-callout">
      <span class="alert-callout-title">📋 What to include in the Google Chat message</span>
      At minimum: (1) "I just placed a test order on getlifewatch.com," (2) confirmation number or approximate timestamp, (3) what you were testing (promo code, new listing, checkout flow, etc.), (4) when the order can be cancelled or refunded — immediately, or only after a specific step is verified. The CX Fulfillment Lead will reply when the order is located and put on hold, and again when it's cancelled.
    </div>
    <h3 style="margin-top:22px">What NOT to Do</h3>
    <ul style="margin-left:20px;margin-top:8px">
      <li>Don't use a real customer-sounding first name. "Test Order" is the signal — using "John" or "Jane" defeats the whole safety net.</li>
      <li>Don't skip the Google Chat notification. Even if the name is right, a silent test order means no one knows to put it on hold, and a close-call can still ship.</li>
      <li>Don't use a personal home address as the shipping destination. The office at 200 Forge Way is the safe fallback.</li>
      <li>Don't use live loyalty or rewards accounts unless that's specifically what's being tested — they can generate real credits and email sends.</li>
      <li>Don't close out the test until you get confirmation from the Fulfillment Lead that the order is cancelled.</li>
    </ul>

    </div>
  </div>
</section>

<section id="shopify">
  <div class="card collapsible" data-section="shopify">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">25 · Shopify Platform</span>
        <h2>Shopify Platform</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p><a href="https://getlifewatch.com/" target="_blank" rel="noopener">getlifewatch.com</a> is a <strong>Shopify store</strong>. Almost every customer-facing interaction — browsing, checkout, discount codes, customer accounts, order tracking — runs on Shopify's platform. For CX agents and new hires, knowing this up front saves a lot of confusion, because a huge portion of "how do I…" questions have the same answer: "it's a standard Shopify feature."</p>
    <h3>What "Shopify" means for day-to-day CX</h3>
    <table>
      <thead><tr><th>Area</th><th>What's powered by Shopify</th><th>Why it matters for CX</th></tr></thead>
      <tbody>
        <tr><td>Storefront &amp; checkout</td><td>Every product page, cart, checkout, payment processing</td><td>Outages or checkout issues are often platform-wide — check <a href="https://www.shopifystatus.com/" target="_blank" rel="noopener">shopifystatus.com</a> before escalating</td></tr>
        <tr><td>Customer accounts</td><td>Login, password resets, order history, saved addresses</td><td>Customers reset their own password via email link — we can't read or set passwords for them</td></tr>
        <tr><td>Order management</td><td>Order numbers, fulfillment status, tracking emails</td><td>Order numbers are the universal lookup key — always ask for one first</td></tr>
        <tr><td>Discount codes</td><td>Promo codes, automatic discounts, free-shipping offers</td><td>Codes are single-use or multi-use depending on setup — Marketing owns the code list</td></tr>
        <tr><td>Subscriptions</td><td>Life Watch has no subscription products</td><td>If a customer reports a recurring charge, check the order history and escalate to the CX Supervisor</td></tr>
        <tr><td>Email notifications</td><td>Order confirmation, shipping confirmation, delivery, refund confirmation</td><td>These are automated — if a customer didn't get one, check spam first, then verify the email on file</td></tr>
        <tr><td>Refunds</td><td>Processed through the Shopify admin, return to the original payment method</td><td>Refunds typically show in the customer's account in 5–10 business days depending on bank</td></tr>
      </tbody>
    </table>
    <h3 style="margin-top:24px">URLs CX should recognize</h3>
    <ul style="margin-left:20px">
      <li><a href="https://getlifewatch.com/account" target="_blank" rel="noopener">getlifewatch.com/account</a> — customer login / order history</li>
      <li><a href="https://getlifewatch.com/account/login" target="_blank" rel="noopener">getlifewatch.com/account/login</a> — login &amp; password reset entry point</li>
      <li><a href="https://getlifewatch.com/collections/all" target="_blank" rel="noopener">getlifewatch.com/collections/all</a> — full catalog and current prices</li>
      <li><a href="https://getlifewatch.com/policies/refund-policy" target="_blank" rel="noopener">getlifewatch.com/policies/refund-policy</a> — return policy page (standard Shopify policy path)</li>
      <li><a href="https://getlifewatch.com/policies/shipping-policy" target="_blank" rel="noopener">getlifewatch.com/policies/shipping-policy</a> — shipping policy</li>
      <li><a href="https://getlifewatch.com/policies/privacy-policy" target="_blank" rel="noopener">getlifewatch.com/policies/privacy-policy</a> — privacy policy</li>
      <li><a href="https://getlifewatch.com/policies/terms-of-service" target="_blank" rel="noopener">getlifewatch.com/policies/terms-of-service</a> — terms of service</li>
    </ul>
    <div class="alert-callout">
      <span class="alert-callout-title">🔐 Security reminder</span>
      Because this is Shopify, <strong>CX never handles customer passwords or payment card info directly.</strong> Password resets are always done via the self-serve email link on the login page. Payment updates are done by the customer. If a customer asks us to change their password or enter a card for them, politely redirect them to the self-serve flow.
    </div>
    <h3 style="margin-top:22px">When to escalate a Shopify-related issue</h3>
    <ul style="margin-left:20px">
      <li><strong>Site down or checkout failing for multiple customers</strong> → escalate to the Web Dev Team and check <a href="https://www.shopifystatus.com/" target="_blank" rel="noopener">Shopify Status</a>.</li>
      <li><strong>Discount code not working as intended</strong> → check with Marketing; they own the code configuration in the Shopify admin.</li>
      <li><strong>Unexpected recurring charge</strong> → escalate to the CX Supervisor.</li>
      <li><strong>Missing order confirmation email</strong> → verify the address on file first, then check the Shopify order record for send status before escalating.</li>
      <li><strong>Refund not appearing in customer's account after 10 business days</strong> → pull the Shopify refund transaction ID and escalate to CX Fulfillment Supervisor.</li>
    </ul>

    </div>
  </div>
</section>

<section id="faq">
  <div class="card collapsible" data-section="faq">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">26 · Frequently Asked Questions</span>
        <h2>FAQ</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <div class="faq-item"><div class="faq-q">How do I connect the watch to my phone?</div><div class="faq-a">Download the free app from the <a href="https://apps.apple.com/us/app/official-lifewatch/id6445967577" target="_blank" rel="noopener">App Store</a> or <a href="https://play.google.com/store/apps/details?id=com.life.watch&amp;hl=en_US&amp;gl=US" target="_blank" rel="noopener">Google Play</a>. On the app's "Today" screen, tap <strong>Bind Now</strong>, then <strong>Search Now</strong>. Tap "Life Watch" in the list, then <strong>Pair</strong>. "Enjoy Now" appears when it's connected.</div></div>
    <div class="faq-item"><div class="faq-q">Do I have to use the app?</div><div class="faq-a">No. The watch's health and fitness features work on their own. The app is needed for calls, texts, and notifications.</div></div>
    <div class="faq-item"><div class="faq-q">I don't have a smartphone. Can I still use Life Watch?</div><div class="faq-a">Yes. Everything works except the phone features (calls, texts, notifications).</div></div>
    <div class="faq-item"><div class="faq-q">I pressed Find Phone and see a "no Bluetooth" symbol. What's wrong?</div><div class="faq-a">Find Phone doesn't connect the watch. It makes an already-paired phone vibrate so you can find it. Pair the watch through the app first.</div></div>
    <div class="faq-item"><div class="faq-q">There's no wall charger in the box. How do I charge it?</div><div class="faq-a">The cable plugs into any USB port — a computer, a USB wall cube, or a car charger.</div></div>
    <div class="faq-item"><div class="faq-q">Which way does the charging cable attach?</div><div class="faq-a">The magnets only connect one way. Turn the connector until it snaps into place.</div></div>
    <div class="faq-item"><div class="faq-q">How long does the battery last?</div><div class="faq-a">Up to 168 hours (about a week) per charge, depending on use. Keeping the screen lit longer uses more battery.</div></div>
    <div class="faq-item"><div class="faq-q">I lost my charging cable.</div><div class="faq-a">A replacement <a href="https://getlifewatch.com/products/watch-charging-cable" target="_blank" rel="noopener">Watch Charging Cable</a> is available on the store.</div></div>
    <div class="faq-item"><div class="faq-q">Why does the screen turn off after a few seconds?</div><div class="faq-a">It's sleeping to save battery. Raise and turn your wrist or press the power button to wake it. To keep it lit longer: Settings → Screen Display → Screen Time.</div></div>
    <div class="faq-item"><div class="faq-q">Can I make and answer calls?</div><div class="faq-a">Yes. Every Life Watch makes and receives calls and shows text messages through your paired phone.</div></div>
    <div class="faq-item"><div class="faq-q">Is it waterproof? Can I swim with it?</div><div class="faq-a">Life Watch is IP67 water resistant. Getting it wet is fine, including rain, splashes, handwashing, and a swim. Just don't leave it underwater for long periods.</div></div>
    <div class="faq-item"><div class="faq-q">Are the health readings accurate enough to replace my monitor?</div><div class="faq-a">No. Life Watch is a wellness watch for keeping an eye on everyday trends. Keep using the devices and guidance your doctor recommends.</div></div>
    <div class="faq-item"><div class="faq-q">How do I change the band?</div><div class="faq-a">Place the watch face down with the band's spring pins facing up. Squeeze the pin lever and slide the band between the pin holes. More bands are on the <a href="https://getlifewatch.com/collections/bands" target="_blank" rel="noopener">bands page</a>.</div></div>
    <div class="faq-item"><div class="faq-q">What's in the box?</div><div class="faq-a">The Life Watch Deluxe in a case, a 2-piece black rubber band, a magnetic charging cable, the user manual, and a quick start guide.</div></div>
    <div class="faq-item"><div class="faq-q">How much is shipping?</div><div class="faq-a">The shipping cost shows in the cart before checkout. We sometimes run a free-shipping offer, so check the <a href="https://getlifewatch.com/" target="_blank" rel="noopener">website</a> for the current offer. See also the <a href="https://getlifewatch.com/policies/shipping-policy" target="_blank" rel="noopener">shipping policy</a>.</div></div>
    <div class="faq-item"><div class="faq-q">How long will delivery take?</div><div class="faq-a">3–7 business days in the continental US once the order ships. East Coast orders often arrive sooner. See section 23 for regional times.</div></div>
    <div class="faq-item"><div class="faq-q">How do I return my watch?</div><div class="faq-a">Contact CX within 30 days for a return authorization (RA) number and the return-to address. Processing and handling fees apply, and the customer pays return shipping. See section 22.</div></div>
    <div class="faq-item"><div class="faq-q">I lost my manual.</div><div class="faq-a">The <a href="https://cdn.shopify.com/s/files/1/0780/8247/4279/files/Life_Watch_Manual.pdf" target="_blank" rel="noopener">user manual PDF</a> is on our store.</div></div>

    </div>
  </div>
</section>

<section id="resources">
  <div class="card collapsible" data-section="resources">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">27 · Resources &amp; Contacts</span>
        <h2>Additional Resources &amp; Contacts</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <table>
      <thead><tr><th>Resource</th><th>Where to Find It</th><th>Owner / Contact</th></tr></thead>
      <tbody>
        <tr><td>Store (all products and current prices)</td><td><a href="https://getlifewatch.com/collections/all" target="_blank" rel="noopener">getlifewatch.com/collections/all</a></td><td>Marketing / Web Team</td></tr>
        <tr><td>Current Promotions / Offers</td><td><a href="https://getlifewatch.com/" target="_blank" rel="noopener">getlifewatch.com homepage</a> + monthly discount sheet</td><td>Marketing</td></tr>
        <tr><td>User Manual (PDF)</td><td><a href="https://cdn.shopify.com/s/files/1/0780/8247/4279/files/Life_Watch_Manual.pdf" target="_blank" rel="noopener">Life_Watch_Manual.pdf</a></td><td>Brand Team</td></tr>
        <tr><td>iPhone App</td><td><a href="https://apps.apple.com/us/app/official-lifewatch/id6445967577" target="_blank" rel="noopener">Official LifeWatch — App Store</a></td><td>Brand Team</td></tr>
        <tr><td>Android App</td><td><a href="https://play.google.com/store/apps/details?id=com.life.watch&amp;hl=en_US&amp;gl=US" target="_blank" rel="noopener">Life Watch — Google Play</a></td><td>Brand Team</td></tr>
        <tr><td>Public FAQ</td><td><a href="https://getlifewatch.com/pages/faqs" target="_blank" rel="noopener">getlifewatch.com/pages/faqs</a></td><td>CX Team</td></tr>
        <tr><td>About Life Watch (testimonials)</td><td><a href="https://getlifewatch.com/pages/about-life-watch" target="_blank" rel="noopener">getlifewatch.com/pages/about-life-watch</a></td><td>Marketing</td></tr>
        <tr><td>Our Founder</td><td><a href="https://getlifewatch.com/pages/our-founder" target="_blank" rel="noopener">getlifewatch.com/pages/our-founder</a></td><td>Brand Team</td></tr>
        <tr><td>TV Demo Video</td><td><a href="https://www.youtube.com/watch?v=rNoOE3Y7tjs" target="_blank" rel="noopener">YouTube</a></td><td>Marketing</td></tr>
        <tr><td>Anti-Counterfeiting Statement</td><td><a href="https://getlifewatch.com/pages/anti-counterfeiting-statement" target="_blank" rel="noopener">getlifewatch.com/pages/anti-counterfeiting-statement</a></td><td>Legal / Compliance</td></tr>
        <tr><td>Wholesale</td><td><a href="https://getlifewatch.com/pages/wholesale" target="_blank" rel="noopener">getlifewatch.com/pages/wholesale</a></td><td>Marketing / Partnerships</td></tr>
        <tr><td>Blog</td><td><a href="https://getlifewatch.com/blogs/news" target="_blank" rel="noopener">getlifewatch.com/blogs/news</a></td><td>Marketing</td></tr>
        <tr><td>Contact Form</td><td><a href="https://getlifewatch.com/pages/contact-us" target="_blank" rel="noopener">getlifewatch.com/pages/contact-us</a> — topics: order help, product information, shipping and returns, billing, other</td><td>CX Team</td></tr>
        <tr><td>CX Phone</td><td><a href="tel:+18882316573">+1 888-231-6573</a> · Mon–Fri 8:30a–5:30p EST</td><td>CX Team</td></tr>
        <tr><td>CX Email</td><td><a href="mailto:support@getlifewatch.com">support@getlifewatch.com</a> · replies within 24–48 business hours</td><td>CX Team</td></tr>
      </tbody>
    </table>
    <p style="font-size:13px;color:var(--lw-text-muted)">CX contact details are from our <a href="https://getlifewatch.com/pages/contact-us" target="_blank" rel="noopener">Contact Us page</a>.</p>
    <div class="team-callout cx" style="margin-top:14px">
      <span class="team-tag">CX — Only getlifewatch.com Is Ours</span>
      <p style="margin:0">Other sites use similar names, such as the-life-watch.com and thelifewatch.net, and list different contacts. <strong>We don't operate them.</strong> If a customer's order or contact info came from another site, point them to our <a href="https://getlifewatch.com/pages/anti-counterfeiting-statement" target="_blank" rel="noopener">anti-counterfeiting statement</a> and escalate to the CX Supervisor.</p>
    </div>

    <h3 style="margin-top:24px">Escalation Contacts (by department)</h3>
    <p style="font-size:13px;color:var(--lw-text-muted);font-style:italic">Listed by department, not individual, to keep this hub evergreen as personnel changes.</p>
    <table>
      <thead><tr><th>Escalation Type</th><th>Department</th></tr></thead>
      <tbody>
        <tr><td>Customer complaint — unresolved after first contact</td><td>CX Supervisor</td></tr>
        <tr><td>Return or refund dispute</td><td>CX Fulfillment Supervisor</td></tr>
        <tr><td>Worn-item (hygiene) return decision</td><td>CX Fulfillment Supervisor</td></tr>
        <tr><td>Water-damage claim</td><td>CX Fulfillment Supervisor</td></tr>
        <tr><td>Order or contact info from a lookalike site</td><td>CX Supervisor</td></tr>
        <tr><td>Brand or product question</td><td>Brand Lead</td></tr>
        <tr><td>Product safety question (skin irritation, battery heat)</td><td>Brand Lead</td></tr>
        <tr><td>Technical or website issue</td><td>Web Dev Team</td></tr>
        <tr><td>Media, press, partnership, or wholesale inquiry</td><td>Marketing / Partnerships</td></tr>
        <tr><td>Health or medical claim question</td><td>Legal / Compliance</td></tr>
        <tr><td>Legal or compliance concern</td><td>Legal / Compliance</td></tr>
      </tbody>
    </table>

    </div>
  </div>
</section>

<!-- QUIZ -->
<section id="quiz-section" class="collapsible">
  <div class="section-header-bar" onclick="toggleSection(this)">
    <div class="section-header-left">
      <span class="eyebrow" style="color:var(--lw-peach)">28 · Knowledge Check</span>
      <h2>Life Watch Knowledge Check Quiz</h2>
    </div>
    <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
  </div>
  <div class="section-body">
    <p style="color:var(--lw-peach);margin-bottom:4px"><span id="quiz-meta-line">Loading questions…</span> · Covers every section of this hub.</p>
    <div class="quiz-container" id="quiz-container">
      <div id="quiz-start">
        <h3 style="color:#fff;margin-bottom:10px">Ready to test what you've learned?</h3>
        <p style="color:var(--lw-peach);font-size:14px">Read everything above first. You'll get a multiple-choice question one at a time, drawn from the whole hub. Select an answer and you'll see immediately whether you got it right, then click Next to continue. Retake as many times as you need — no penalty.</p>
        <p style="color:var(--lw-peach);font-size:14px">When you pass, enter your name and title, then capture your result — a <strong style="color:#fff">screenshot of your score card is the easiest option</strong>, or you can print or save the certificate. <strong style="color:#fff">Every quiz — this one and every brand or platform quiz — follows the same submission process:</strong></p>
        <ol class="submit-steps">
          <li><strong>Capture your result</strong> — a screenshot of your score card is easiest, or save it as a PDF.</li>
          <li><strong>Name the file</strong> using the standard convention (below) so it's easy to find and track.</li>
          <li><strong>Upload it</strong> to the <a href="https://drive.google.com/drive/folders/19vsre-bLq4zDgwEAYGcSX22SpJ7hNvIM?usp=drive_link" target="_blank" rel="noopener">InvenTel University Quiz Results</a> folder.</li>
          <li><strong>Notify the person who assigned the quiz</strong> — your onboarding manager, the Performance Team, your Department Lead, Brand Lead, or Agency Lead, depending on which quiz it was.</li>
        </ol>
        <div class="naming-box">
          <strong>📄 File naming convention</strong><br>
          <code>FirstName LastName_Team_Brand (or Platform)_Quiz_MMYYYY.pdf</code><br>
          <span style="font-size:13px">Example for this hub: <code>Jane Doe_CX_LifeWatch_Quiz_092026.pdf</code></span>
        </div>
        <button class="quiz-start-btn" onclick="startQuiz()">Start Quiz →</button>
      </div>
      <div id="quiz-active" style="display:none">
        <div class="quiz-progress" id="quiz-progress"></div>
        <div class="quiz-progress-bar"><div class="quiz-progress-fill" id="quiz-progress-fill"></div></div>
        <div class="quiz-question" id="quiz-question"></div>
        <div class="quiz-options" id="quiz-options"></div>
        <button class="quiz-submit-btn" id="quiz-submit-btn" style="display:none" onclick="submitQuiz()">Submit Quiz</button>
      </div>
      <div id="quiz-results" style="display:none"></div>
    </div>
  </div>
</section>

<footer>© Inventel · Life Watch Brand Knowledge Hub · For internal use only</footer>


<script>
// TOC drawer controls
function openTocDrawer(){
  document.getElementById('toc-drawer').classList.add('open');
  document.getElementById('toc-drawer-overlay').classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeTocDrawer(){
  document.getElementById('toc-drawer').classList.remove('open');
  document.getElementById('toc-drawer-overlay').classList.remove('open');
  document.body.style.overflow = '';
}
// Close drawer with Escape
document.addEventListener('keydown', (e) => {
  if(e.key === 'Escape') closeTocDrawer();
});

/* ================================
   SEARCH (v6.1)
   Build an index from the DOM so it stays in sync with the content.
   Entry types:
     - section    : the section itself (title + eyebrow)
     - callout-cx / callout-creative / callout-marketing / callout-brand / callout-newhire
     - glossary   : glossary dt/dd pair
     - faq        : faq Q + A
     - objection  : objection + response
   ================================ */
let searchIndex = [];
let searchCurrentHits = [];
let searchActiveIdx = -1;

function buildSearchIndex(){
  const idx = [];
  // 1) Sections (skip hero + toc-section wrapper itself)
  document.querySelectorAll('section[id]').forEach(sec => {
    const id = sec.id;
    if(id === 'hero' || id === 'toc-section') return;
    const eyebrow = sec.querySelector('.eyebrow');
    const h2 = sec.querySelector('h2');
    if(!h2) return;
    const title = h2.textContent.trim();
    const eyebrowText = eyebrow ? eyebrow.textContent.trim() : '';
    // Snippet: first paragraph inside section-body
    const body = sec.querySelector('.section-body') || sec;
    const firstP = body.querySelector('p');
    const snippet = firstP ? firstP.textContent.trim().slice(0, 200) : '';
    // For searchText we deliberately DON'T include the entire body — that
    // causes every section to match any common word. Include title + eyebrow
    // + intro paragraphs + any h3/h4 subheads so sections match on primary
    // content only. (Glossary / FAQ / Objections / Callouts are indexed
    // separately below, so deeper content is still discoverable.)
    const headings = [...body.querySelectorAll('h3, h4')].map(h => h.textContent).join(' ');
    const intros = [...body.querySelectorAll('p')].slice(0, 3).map(p => p.textContent).join(' ');
    const searchText = (eyebrowText + ' ' + title + ' ' + headings + ' ' + intros).toLowerCase();
    idx.push({type:'section', badge:'Section', badgeClass:'section', title:title, eyebrow:eyebrowText, snippet:snippet, anchor:'#'+id, targetId:id, searchText:searchText});
  });

  // 2) Team callouts
  const calloutTypes = {
    'cx':{badge:'CX Callout', badgeClass:'callout-cx'},
    'creative':{badge:'Creative Callout', badgeClass:'callout-creative'},
    'marketing':{badge:'Marketing Callout', badgeClass:'callout-marketing'},
    'brand':{badge:'Brand Callout', badgeClass:'callout-brand'},
    'newhire':{badge:'New Hire Callout', badgeClass:'callout-newhire'}
  };
  document.querySelectorAll('.team-callout').forEach((co, i) => {
    let team = null;
    for(const t of Object.keys(calloutTypes)){
      if(co.classList.contains(t)){team = t; break;}
    }
    if(!team) return;
    // Find the parent section to derive an anchor
    const parentSec = co.closest('section[id]');
    if(!parentSec) return;
    // Ensure the callout has an id so we can jump directly to it
    if(!co.id) co.id = 'callout-' + parentSec.id + '-' + i;
    // Title preference order:
    //   1. .team-tag span (the explicit label like "CX · Prepaid Return Labels")
    //   2. First <strong> if it's a short label (≤ 60 chars, not just numbers/math)
    //   3. First sentence up to . : — –
    const tagEl = co.querySelector('.team-tag');
    const firstStrong = co.querySelector('strong');
    // Full text excluding the tag label (so we don't duplicate it in the snippet)
    const tagText = tagEl ? tagEl.textContent.trim() : '';
    let bodyText = co.textContent.trim().replace(/\s+/g,' ');
    if(tagText) bodyText = bodyText.replace(tagText, '').trim();

    let title = '';
    if(tagText && tagText.length >= 3){
      // Strip "CX · " / "Marketing · " / "Brand — " style prefixes for cleaner titles
      title = tagText.replace(/^(cx|creative|marketing|brand|new hire)\s*[·—–\-:]\s*/i, '').trim();
      if(!title) title = tagText;
    }
    if(!title && firstStrong){
      const strongText = firstStrong.textContent.trim();
      const looksLikeNumber = /^[\d$€£¥+\-=×÷.,\s–—]+$/.test(strongText);
      if(strongText.length > 0 && strongText.length <= 80 && !looksLikeNumber){
        title = strongText.replace(/[:\-—–·•]+\s*$/,'').trim();
      }
    }
    if(!title){
      const firstBreak = bodyText.match(/^(.{8,110}?)(?:[.:—–]|$)/);
      title = firstBreak ? firstBreak[1].trim() : bodyText.slice(0, 80);
    }
    title = title.replace(/^\s*[-–—·•]\s*/,'').slice(0, 100);
    if(!title) title = calloutTypes[team].badge;
    const snippet = bodyText.slice(0, 220);
    // Parent section context
    const parentH2 = parentSec.querySelector('h2');
    const parentTitle = parentH2 ? parentH2.textContent.trim() : '';
    idx.push({
      type:'callout-'+team,
      badge:calloutTypes[team].badge,
      badgeClass:calloutTypes[team].badgeClass,
      title:title,
      eyebrow:'in '+parentTitle,
      snippet:snippet,
      anchor:'#'+co.id,
      targetId:co.id,
      searchText:(team+' '+calloutTypes[team].badge+' '+tagText+' '+bodyText).toLowerCase()
    });
  });

  // 3) Glossary (dt + dd pairs)
  const glossarySec = document.getElementById('glossary');
  if(glossarySec){
    const dts = glossarySec.querySelectorAll('dt');
    dts.forEach((dt, i) => {
      const dd = dt.nextElementSibling;
      if(!dd || dd.tagName !== 'DD') return;
      if(!dt.id) dt.id = 'glossary-' + (dt.textContent.trim().toLowerCase().replace(/[^a-z0-9]+/g,'-').replace(/^-|-$/g,'') || ('term-'+i));
      const term = dt.textContent.trim();
      const def = dd.textContent.trim();
      idx.push({
        type:'glossary',
        badge:'Glossary',
        badgeClass:'glossary',
        title:term,
        eyebrow:'in Glossary',
        snippet:def.slice(0, 220),
        anchor:'#'+dt.id,
        targetId:dt.id,
        searchText:(term+' '+def).toLowerCase()
      });
    });
  }

  // 4) FAQ — look for .faq-q / .faq-a pairs, else any dt/dd under #faq
  const faqSec = document.getElementById('faq');
  if(faqSec){
    // Try .faq-item first
    const items = faqSec.querySelectorAll('.faq-item, .faq');
    if(items.length){
      items.forEach((it, i) => {
        if(!it.id) it.id = 'faq-item-' + i;
        const qEl = it.querySelector('.faq-q, .faq-question, strong, dt, h3, h4');
        const aEl = it.querySelector('.faq-a, .faq-answer, p, dd');
        const q = qEl ? qEl.textContent.trim() : it.textContent.trim().slice(0,100);
        const a = aEl ? aEl.textContent.trim() : '';
        idx.push({
          type:'faq',
          badge:'FAQ',
          badgeClass:'faq',
          title:q,
          eyebrow:'in FAQ',
          snippet:a.slice(0, 220),
          anchor:'#'+it.id,
          targetId:it.id,
          searchText:(q+' '+a).toLowerCase()
        });
      });
    } else {
      // Fallback: scan children for question-looking blocks
      const body = faqSec.querySelector('.section-body') || faqSec;
      const qBadges = body.querySelectorAll('.q-badge, .faq-q-badge');
      qBadges.forEach((qb, i) => {
        const wrap = qb.closest('div,li,article,section') || qb.parentElement;
        if(!wrap) return;
        if(!wrap.id) wrap.id = 'faq-item-' + i;
        const text = wrap.textContent.trim().replace(/\s+/g,' ');
        const title = text.slice(0,100);
        idx.push({
          type:'faq', badge:'FAQ', badgeClass:'faq',
          title:title, eyebrow:'in FAQ',
          snippet:text.slice(0,220),
          anchor:'#'+wrap.id, targetId:wrap.id,
          searchText:text.toLowerCase()
        });
      });
    }
  }

  // 5) Objections — similar pattern under #objections
  const objSec = document.getElementById('objections');
  if(objSec){
    const cards = objSec.querySelectorAll('.objection-card, .objection, .battlecard');
    if(cards.length){
      cards.forEach((c, i) => {
        if(!c.id) c.id = 'objection-' + i;
        const text = c.textContent.trim().replace(/\s+/g,' ');
        // Try to pull the "Objection: ..." line as title
        const m = text.match(/objection\s*:\s*(.+?)(?=\s+response\s*:|\s*$)/i);
        const title = m ? m[1].trim().slice(0,100) : text.slice(0,100);
        idx.push({
          type:'objection', badge:'Objection', badgeClass:'objection',
          title:title, eyebrow:'in Objection Handling',
          snippet:text.slice(0,240),
          anchor:'#'+c.id, targetId:c.id,
          searchText:text.toLowerCase()
        });
      });
    }
  }

  return idx;
}

function escapeRegExp(s){return s.replace(/[.*+?^${}()|[\]\\]/g,'\\$&');}
function escapeHtml(s){return s.replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));}
function highlightTerm(text, term){
  if(!term) return escapeHtml(text);
  const re = new RegExp('('+escapeRegExp(term)+')','ig');
  return escapeHtml(text).replace(re, '<mark>$1</mark>');
}

function scoreHit(entry, q, tokens){
  const qLower = q.toLowerCase();
  const titleLower = entry.title.toLowerCase();
  const eyebrowLower = (entry.eyebrow || '').toLowerCase();
  let score = 0;
  // Exact / prefix / substring on title
  if(titleLower === qLower) score += 1000;
  else if(titleLower.startsWith(qLower)) score += 500;
  else if(titleLower.includes(qLower)) score += 250;
  // Eyebrow (section name/context) match
  if(eyebrowLower.includes(qLower)) score += 150;
  // Whole-phrase anywhere in body
  if(entry.searchText.includes(qLower)) score += 50;
  // Token-level boosts (helps multi-word queries)
  tokens.forEach(t => {
    if(titleLower.includes(t)) score += 40;
    if(eyebrowLower.includes(t)) score += 20;
  });
  // Boost sections slightly so the parent is usually first
  if(entry.type === 'section') score += 30;
  return score;
}

function runSearch(q){
  const resultsEl = document.getElementById('nav-search-results');
  const box = document.getElementById('nav-search-box');
  q = q.trim();
  if(!q){
    closeSearchResults();
    box.classList.remove('has-query');
    return;
  }
  box.classList.add('has-query');
  // Require at least 2 characters before running the search — single letters
  // match too much and overwhelm the dropdown.
  if(q.length < 2){
    resultsEl.innerHTML = '<div class="search-hint">Keep typing… (2+ characters)</div>';
    resultsEl.classList.add('open');
    return;
  }
  const qLower = q.toLowerCase();
  const tokens = qLower.split(/\s+/).filter(t => t.length >= 2);

  // For very short single-word queries (≤ 3 chars), require a word-boundary
  // match. This prevents "cx" from matching "complex" or "cat" matching
  // "category" while still letting acronyms like "RMA" / "SEO" / "CRO" find
  // their proper homes.
  const useBoundary = qLower.length <= 3 && !/\s/.test(qLower);
  const wbRegex = useBoundary ? new RegExp('\\b' + escapeRegExp(qLower) + '\\b', 'i') : null;

  const matches = e => {
    if(useBoundary){
      // For short queries, use the word-boundary regex on title/eyebrow/body
      if(wbRegex.test(e.searchText)) return true;
      if(wbRegex.test(e.title)) return true;
      if(e.eyebrow && wbRegex.test(e.eyebrow)) return true;
      return false;
    }
    if(e.searchText.includes(qLower)) return true;
    if(tokens.length > 1 && tokens.every(t => e.searchText.includes(t))) return true;
    return false;
  };

  const hits = searchIndex
    .filter(matches)
    .map(e => ({entry:e, score:scoreHit(e, q, tokens)}))
    .filter(h => h.score > 0)
    .sort((a,b) => b.score - a.score)
    .slice(0, 40)
    .map(h => h.entry);
  searchCurrentHits = hits;
  searchActiveIdx = -1;

  if(!hits.length){
    resultsEl.innerHTML = '<div class="search-empty"><strong>No matches for "'+escapeHtml(q)+'"</strong>Try a different term, a product name, a team, or a policy topic.</div>';
    resultsEl.classList.add('open');
    return;
  }

  // Group by type
  const groupOrder = [
    {key:'section', label:'Sections'},
    {key:'callout-cx', label:'CX Callouts'},
    {key:'callout-creative', label:'Creative Callouts'},
    {key:'callout-marketing', label:'Marketing Callouts'},
    {key:'callout-brand', label:'Brand Callouts'},
    {key:'callout-newhire', label:'New Hire Callouts'},
    {key:'glossary', label:'Glossary Terms'},
    {key:'faq', label:'FAQ'},
    {key:'objection', label:'Objections'}
  ];
  const byType = {};
  hits.forEach(h => { (byType[h.type] = byType[h.type] || []).push(h); });

  let html = '';
  let flatIdx = 0;
  const flatOrdered = [];
  groupOrder.forEach(g => {
    const bucket = byType[g.key];
    if(!bucket || !bucket.length) return;
    html += '<div class="search-group"><div class="search-group-label"><span>'+g.label+'</span><span class="search-group-count">'+bucket.length+'</span></div>';
    bucket.forEach(h => {
      flatOrdered.push(h);
      const titleHtml = highlightTerm(h.title, q);
      const snippetHtml = highlightTerm(h.snippet, q);
      html += '<a class="search-result" href="'+h.anchor+'" data-idx="'+flatIdx+'" data-target="'+h.targetId+'" onclick="return onSearchResultClick(event, this)">'
        + '<div class="search-result-top">'
        + '<span class="search-result-badge '+h.badgeClass+'">'+h.badge+'</span>'
        + '<span class="search-result-title">'+titleHtml+'</span>'
        + '</div>'
        + (h.snippet ? '<div class="search-result-snippet">'+snippetHtml+'</div>' : '')
        + '</a>';
      flatIdx++;
    });
    html += '</div>';
  });
  searchCurrentHits = flatOrdered;
  resultsEl.innerHTML = html;
  resultsEl.classList.add('open');
}

function onSearchResultClick(e, el){
  e.preventDefault();
  const targetId = el.getAttribute('data-target');
  jumpToSearchResult(targetId);
  return false;
}

function jumpToSearchResult(targetId){
  const target = document.getElementById(targetId);
  if(!target) return;
  // If target is inside a collapsed section, expand it
  let col = target.closest('.collapsible');
  while(col){
    if(col.classList.contains('collapsed')) col.classList.remove('collapsed');
    col = col.parentElement ? col.parentElement.closest('.collapsible') : null;
  }
  // Close the results dropdown and blur input
  closeSearchResults();
  // Scroll with a small offset for the sticky top nav
  setTimeout(() => {
    const y = target.getBoundingClientRect().top + window.pageYOffset - 76;
    window.scrollTo({top:y, behavior:'smooth'});
    // Flash the target
    target.classList.remove('search-target-flash');
    void target.offsetWidth; // force reflow to restart animation
    target.classList.add('search-target-flash');
    setTimeout(()=>target.classList.remove('search-target-flash'), 2000);
  }, 80);
}

function closeSearchResults(){
  document.getElementById('nav-search-results').classList.remove('open');
  searchActiveIdx = -1;
}
function clearSearch(){
  const input = document.getElementById('nav-search-input');
  input.value = '';
  document.getElementById('nav-search-box').classList.remove('has-query');
  closeSearchResults();
  input.focus();
}

function updateActiveResult(delta){
  const items = document.querySelectorAll('#nav-search-results .search-result');
  if(!items.length) return;
  if(searchActiveIdx >= 0 && items[searchActiveIdx]) items[searchActiveIdx].classList.remove('active');
  searchActiveIdx = (searchActiveIdx + delta + items.length) % items.length;
  const active = items[searchActiveIdx];
  active.classList.add('active');
  active.scrollIntoView({block:'nearest'});
}

// Wire up search events after DOM ready
document.addEventListener('DOMContentLoaded', () => {
  // Wire dynamic quiz meta line
  const metaLine = document.getElementById('quiz-meta-line');
  if(metaLine && typeof quizQuestions !== 'undefined'){
    const total = quizQuestions.length;
    const pass = Math.ceil(total * 0.7);
    metaLine.textContent = `${total} questions · 70% (${pass}/${total}) to pass`;
  }

  searchIndex = buildSearchIndex();
  const input = document.getElementById('nav-search-input');
  const resultsEl = document.getElementById('nav-search-results');
  if(!input) return;

  let debounceT = null;
  input.addEventListener('input', () => {
    clearTimeout(debounceT);
    debounceT = setTimeout(() => runSearch(input.value), 80);
  });
  input.addEventListener('focus', () => {
    if(input.value.trim()) runSearch(input.value);
  });
  input.addEventListener('keydown', (e) => {
    if(e.key === 'ArrowDown'){e.preventDefault(); updateActiveResult(1);}
    else if(e.key === 'ArrowUp'){e.preventDefault(); updateActiveResult(-1);}
    else if(e.key === 'Enter'){
      const items = document.querySelectorAll('#nav-search-results .search-result');
      if(searchActiveIdx >= 0 && items[searchActiveIdx]){
        e.preventDefault();
        const targetId = items[searchActiveIdx].getAttribute('data-target');
        jumpToSearchResult(targetId);
      } else if(items.length === 1){
        e.preventDefault();
        jumpToSearchResult(items[0].getAttribute('data-target'));
      }
    } else if(e.key === 'Escape'){
      if(resultsEl.classList.contains('open')){
        e.preventDefault();
        e.stopPropagation();
        closeSearchResults();
        input.blur();
      }
    }
  });

  // Click outside to close
  document.addEventListener('click', (e) => {
    const wrap = document.querySelector('.nav-search-wrap');
    if(wrap && !wrap.contains(e.target)) closeSearchResults();
  });

  // Global "/" shortcut focuses search
  document.addEventListener('keydown', (e) => {
    if(e.key === '/' && document.activeElement.tagName !== 'INPUT' && document.activeElement.tagName !== 'TEXTAREA'){
      e.preventDefault();
      input.focus();
    }
  });
});

// Collapsible section toggle
function toggleSection(headerEl){
  // Find the collapsible ancestor (either .card.collapsible or section.collapsible)
  let el = headerEl.parentElement;
  while(el && !el.classList.contains('collapsible')){
    el = el.parentElement;
  }
  if(el) el.classList.toggle('collapsed');
}

// Quiz state
const quizBank = [
  {t:'Products', q:'Which watch ships when a customer orders from either Life Watch listing?', o:['A basic model without calling','The Life Watch Deluxe','Whichever box is in stock','A refurbished unit'], correct:1, x:'Both listings ship the same unit: the Life Watch Deluxe.'},
  {t:'Products', q:'A customer asks whether their Life Watch can make calls and show texts. What\'s correct?', o:['Neither; it only tracks health','Texts only','Yes, both, through their paired phone','Calls only, with a cellular plan'], correct:2, x:'Every Life Watch makes and receives calls and shows texts through a paired phone. No cellular plan needed.'},
  {t:'Products', q:'How long does a Life Watch battery last on a single charge?', o:['Up to 24 hours','Up to 72 hours','Up to 168 hours','Up to 30 days'], correct:2, x:'Up to 168 hours, about a week, depending on use.'},
  {t:'Products', q:'Which of these is NOT in the Life Watch box?', o:['Magnetic charging cable','Wall charging adapter','2-piece black rubber band','User manual and quick start guide'], correct:1, x:'No wall adapter is included. The cable works with any USB port or USB wall cube.'},
  {t:'Products', q:'A customer says their watch won\'t charge. What should they try first?', o:['Rotate the magnetic connector until it snaps into place','Reset the watch to factory settings','Charge it overnight in the freezer','Start a return right away'], correct:0, x:'The charger magnets are polarized and only connect one way.'},
  {t:'Products · Bands', q:'Which band materials does the Life Watch store sell?', o:['Nylon and fabric only','Leather, stainless steel, and silicone','Titanium and ceramic','Silicone only'], correct:1, x:'Bands come in leather, stainless steel (including mesh), and silicone.'},
  {t:'Products · Accessories', q:'A customer lost their charging cable. What\'s the best answer?', o:['Any phone charger will work','They need to buy a new watch','Point them to the Watch Charging Cable on the store','Tell them to use a wireless charging pad'], correct:2, x:'A replacement magnetic cable is sold on the store.'},
  {t:'Products', q:'A customer says the screen "keeps turning off." What\'s happening?', o:['The battery is failing','The screen is sleeping to save battery; they can raise their wrist or change Screen Time in Settings','The watch is broken and needs a return','The app is closing in the background'], correct:1, x:'Settings → Screen Display → Screen Time controls how long it stays lit.'},
  {t:'Products', q:'A customer doesn\'t own a smartphone. Can they use Life Watch?', o:['No, a phone is required','Only the step counter works','Yes, everything works except phone notifications','Only if they buy the Deluxe'], correct:2, x:'Health and fitness features work on the watch alone.'},
  {t:'Products', q:'A customer pressed Find Phone and sees a "no Bluetooth" symbol. What should you explain?', o:['Find Phone makes an already-paired phone vibrate; they need to pair through the app first','Their watch is defective','Find Phone only works on iPhone','They should hold Find Phone for 10 seconds to pair'], correct:0, x:'Find Phone doesn\'t connect the watch. Pairing happens in the app.'},
  {t:'Products', q:'In the Life Watch app, which button starts pairing?', o:['Connect Watch','Sync Device','Bind Now','Add Bracelet'], correct:2, x:'Tap Bind Now, then Search Now, then pick "Life Watch" and tap Pair.'},
  {t:'Products', q:'How many watch face designs does Life Watch include?', o:['6','24','56','100'], correct:2, x:'Every Life Watch ships with 56 watch face designs.'},
  {t:'Products', q:'What water-resistance rating does Life Watch carry?', o:['IP54','IP67','IPX4','5 ATM'], correct:1, x:'Life Watch is IP67 rated. It\'s fine if it gets wet, but don\'t leave it underwater for long periods.'},
  {t:'Brand', q:'Which phrase fits how we describe Life Watch\'s health features?', o:['"Medically accurate readings"','"Detects heart disease early"','"Tracks and monitors your everyday numbers"','"Replaces your blood pressure cuff"'], correct:2, x:'Life Watch is a wellness device. We say tracks and monitors, never diagnoses.'},
  {t:'Brand · CX', q:'A customer asks if they can stop using their blood pressure cuff now. What do you say?', o:['Yes, the watch is just as good','Only if their readings look normal','No. Life Watch is a wellness watch; they should keep using the devices their doctor recommends','Ask them to compare the two for a week'], correct:2, x:'We never suggest the watch replaces a medical device or doctor\'s advice.'},
  {t:'Brand', q:'A customer asks, "Is Life Watch a real company?" Which fact answers it?', o:['It was acquired from a startup','It\'s an Inventel in-house brand that has always been ours','It\'s sold only on Amazon','It\'s licensed from a TV network'], correct:1, x:'Life Watch was developed in-house and has always been an Inventel brand.'},
  {t:'Brand', q:'How is the brand name written in body copy?', o:['LifeWatch','Lifewatch','LIFE WATCH','Life Watch'], correct:3, x:'Two words, both capitalized.'},
  {t:'Discounts', q:'What is the single source of truth for promo codes?', o:['The monthly discount sheet','The last marketing email','Your memory of recent codes','The store banner'], correct:0, x:'Always check the sheet. Codes expire, change, or get pulled mid-month.'},
  {t:'Discounts', q:'Example: the store is running a sitewide sale and a customer asks for that same discount again at checkout. What\'s correct?', o:['Apply the discount again with a manual code','The store\'s sale prices already include it, so don\'t stack it','Double the discount to be safe','Send them to Marketing'], correct:1, x:'Sales change as needed, but a running sitewide sale is already built into the store prices.'},
  {t:'Discounts', q:'Which evergreen offer does NOT apply to Life Watch?', o:['New customer discount','Subscription discount','Neither applies','Both always apply'], correct:1, x:'Life Watch has no subscription products.'},
  {t:'SEO', q:'Which keyword should Life Watch SEO avoid targeting?', o:['"smartwatch with no monthly fee"','"easy to use smartwatch for seniors"','"hypertension monitor"','"Life Watch replacement band"'], correct:2, x:'Medical terms pull us into claims we can\'t make.'},
  {t:'SEO', q:'When should Creative write image alt text?', o:['At the end of the quarter','When the asset ships','Only if Marketing asks','Never; Shopify writes it'], correct:1, x:'Compress, name descriptively, and write alt text when you ship the asset.'},
  {t:'CRO', q:'What is the minimum length for a CRO test?', o:['One day','Three days','A full week','Until the first positive result'], correct:2, x:'Run at least a full week. Don\'t call it on day 3.'},
  {t:'CRO', q:'In our 6-stage funnel, what is the customer asking at the Cart stage?', o:['"Am I in the right place?"','"Did I get a fair deal?"','"Is this safe and fast?"','"Did I make the right call?"'], correct:1, x:'Cart = fair deal. Checkout = safe and fast. Post-purchase = right call.'},
  {t:'Winning Creatives', q:'Which of these is one of the six universal winning-ad patterns?', o:['Lead with the price','Contrast and "Switch" framing','Always feature a celebrity','Fit as much text as possible'], correct:1, x:'The six: relatable problem, social proof, native creative, one message, contrast/switch, emotion over logic.'},
  {t:'Winning Creatives', q:'A Life Watch ad shows someone charging a watch every night, then switching to one charge a week. Which pattern does it use?', o:['Social proof front and center','Emotion over logic','Contrast and "Switch" framing','Native, authentic-looking creative'], correct:2, x:'Before-vs-after switching is the contrast pattern.'},
  {t:'Return Policy', q:'What should CX quote to a customer before issuing a return authorization?', o:['Nothing; fees are explained after the refund','The processing and handling fee, plus that the customer pays return shipping','Only the carrier name','A refund of their original shipping'], correct:1, x:'Every return has a processing and handling fee, and the customer pays return shipping. Say both up front.'},
  {t:'Return Policy', q:'What does a customer need from CX before sending a return?', o:['Nothing; they can mail it back anytime','A return authorization (RA) number and the return-to address','A photo of the watch','A new order number'], correct:1, x:'No RA, no return.'},
  {t:'Return Policy', q:'Who pays return shipping on a Life Watch return?', o:['Inventel','The customer','The carrier','It\'s always free'], correct:1, x:'The customer pays return shipping, and processing and handling fees apply.'},
  {t:'Return Policy', q:'A customer wants to return a watch they\'ve worn. The policy excludes items in direct contact with the body. What do you do?', o:['Deny the return on the call','Approve it without checking','Don\'t deny on the call; escalate to the CX Fulfillment Supervisor','Tell them to clean it and try again'], correct:2, x:'The hygiene rule is a supervisor decision for watches and bands.'},
  {t:'Fulfillment', q:'Where do all Inventel orders ship from?', o:['Brooklyn, NY','Pompton Plains, NJ','Rockaway, NJ','Newark, NJ'], correct:1, x:'Inventel Warehouse, 240 West Parkway, Pompton Plains, NJ. Rockaway is the office.'},
  {t:'Fulfillment', q:'A customer in Alaska wants to place an order. What\'s the rule?', o:['Ship ground standard as usual','Not supported by default; escalate to the CX Fulfillment Supervisor','Ship international','Tell them it\'s impossible'], correct:1, x:'AK, HI, PR, and territories aren\'t supported by default.'},
  {t:'Test Orders', q:'What MUST go in the First Name field of a test order?', o:['Your first name','TEST','Test Order','Do Not Ship'], correct:2, x:'Without "Test Order," the warehouse will ship it like a real order.'},
  {t:'Test Orders', q:'You just placed a test order. What do you do next?', o:['Nothing; it cancels itself','Email the Brand Lead next week','Notify the CX Fulfillment Lead on Google Chat immediately','Refund it yourself'], correct:2, x:'Include the order #, what was tested, and when it can be cancelled.'},
  {t:'Shopify', q:'A customer asks CX to update the card number on their order. What\'s correct?', o:['Take the card number over the phone','Email them a form for the card','CX never handles payment info; the customer re-enters their own card','Ask for the last 4 digits and update it'], correct:2, x:'CX never handles passwords or payment info. Anything else is an escalation.'}
];
const quizQuestions = quizBank.map(x => ({q: x.q, options: x.o, correct: x.correct, x: x.x}));

// Shuffle answer order on every attempt so the key can't be memorized
function shuffleOptions(){
  quizQuestions.forEach(q => {
    const right = q.options[q.correct];
    for(let i = q.options.length - 1; i > 0; i--){
      const j = Math.floor(Math.random() * (i + 1));
      [q.options[i], q.options[j]] = [q.options[j], q.options[i]];
    }
    q.correct = q.options.indexOf(right);
  });
}

let currentQ = 0;
let userAnswers = [];
let awaitingNext = false;

function startQuiz(){
  shuffleOptions();
  currentQ = 0;
  userAnswers = [];
  awaitingNext = false;
  document.getElementById('quiz-start').style.display = 'none';
  document.getElementById('quiz-results').style.display = 'none';
  document.getElementById('quiz-active').style.display = 'block';
  renderQuestion();
}

function renderQuestion(){
  awaitingNext = false;
  const q = quizQuestions[currentQ];
  document.getElementById('quiz-progress').textContent = `Question ${currentQ + 1} of ${quizQuestions.length}`;
  document.getElementById('quiz-progress-fill').style.width = `${((currentQ)/quizQuestions.length)*100}%`;
  document.getElementById('quiz-question').textContent = q.q;
  const optsEl = document.getElementById('quiz-options');
  optsEl.innerHTML = '';
  const letters = ['A','B','C','D'];
  q.options.forEach((opt, i) => {
    const btn = document.createElement('button');
    btn.className = 'quiz-option';
    btn.innerHTML = `<span class="quiz-option-letter">${letters[i]}</span><span>${opt}</span>`;
    btn.onclick = () => selectAnswer(i, btn);
    optsEl.appendChild(btn);
  });
  document.getElementById('quiz-submit-btn').style.display = 'none';
}

function selectAnswer(selectedIdx, clickedBtn){
  if(awaitingNext) return;
  awaitingNext = true;
  userAnswers[currentQ] = selectedIdx;
  const q = quizQuestions[currentQ];
  const isCorrect = selectedIdx === q.correct;
  const optsEl = document.getElementById('quiz-options');
  const buttons = optsEl.querySelectorAll('.quiz-option');

  buttons.forEach((b, i) => {
    b.disabled = true;
    if(i === q.correct){
      b.classList.add(isCorrect ? 'correct' : 'show-correct');
    } else if(i === selectedIdx && !isCorrect){
      b.classList.add('incorrect');
    }
  });

  // Feedback message
  const feedback = document.createElement('div');
  feedback.className = `quiz-feedback ${isCorrect ? 'right' : 'wrong'}`;
  feedback.innerHTML = isCorrect
    ? `✅ <strong>Correct!</strong>`
    : `❌ <strong>Not quite.</strong> The correct answer is <strong>${q.options[q.correct]}</strong>.`;
  optsEl.appendChild(feedback);
  if(q.x){
    const ex = document.createElement('div');
    ex.className = 'quiz-explain';
    ex.textContent = q.x;
    optsEl.appendChild(ex);
  }

  // Next / Finish button
  const nextBtn = document.createElement('button');
  nextBtn.className = 'quiz-next-btn';
  nextBtn.textContent = currentQ === quizQuestions.length - 1 ? 'See Results →' : 'Next Question →';
  nextBtn.onclick = () => {
    currentQ++;
    if(currentQ < quizQuestions.length){
      renderQuestion();
    } else {
      submitQuiz();
    }
  };
  optsEl.appendChild(nextBtn);
}

function submitQuiz(){
  let correct = 0;
  quizQuestions.forEach((q, i) => {
    if(userAnswers[i] === q.correct) correct++;
  });

  const passThreshold = Math.ceil(quizQuestions.length * 0.7);
  const passed = correct >= passThreshold;
  const scorePct = Math.round((correct/quizQuestions.length)*100);
  const today = new Date().toLocaleDateString('en-US', {year:'numeric', month:'long', day:'numeric'});

  document.getElementById('quiz-active').style.display = 'none';
  const resultsEl = document.getElementById('quiz-results');
  resultsEl.style.display = 'block';

  if(passed){
    resultsEl.innerHTML = `
      <div id="print-area" class="completion-wrap">
        <div class="completion-header">
          <span class="completion-emoji">🎉</span>
          <h3>Congratulations — You Passed!</h3>
          <div class="completion-sub">Life Watch Brand Knowledge Hub</div>
        </div>
        <div class="completion-card">
          <div class="completion-brand">
            <img class="logo-sm" src="https://getlifewatch.com/cdn/shop/files/lifewatch_logo_190x@2x.svg?v=1689840208" alt="Life Watch logo" onerror="this.style.display='none'">
            <div class="completion-brand-text">
              InvenTel Innovations
              <small>Product Knowledge Hub</small>
            </div>
          </div>

          <div class="completion-nameblock">
            <label for="trainee-name">Name · Title</label>
            <input type="text" id="trainee-name" placeholder="Jane Smith · CX Agent" oninput="syncName(this.value)" autocomplete="name">
            <div class="name-printed" id="trainee-name-print">—</div>
          </div>

          <div class="completion-center-wrap">
            <div class="completion-badge">✓ Passed</div>
          </div>

          <div class="completion-stats">
            <div class="completion-stat">
              <span class="completion-stat-label">Score</span>
              <span class="completion-stat-value">${scorePct}%</span>
            </div>
            <div class="completion-stat">
              <span class="completion-stat-label">Correct</span>
              <span class="completion-stat-value">${correct} / ${quizQuestions.length}</span>
            </div>
            <div class="completion-stat">
              <span class="completion-stat-label">Date</span>
              <span class="completion-stat-value" style="font-size:1.1rem">${today}</span>
            </div>
            <div class="completion-stat">
              <span class="completion-stat-label">Result</span>
              <span class="completion-stat-value" style="color:var(--lw-orange-deep)">PASSED ✓</span>
            </div>
          </div>

          <div class="completion-track">
            Training Track
            <strong>Life Watch — Brand Knowledge Hub</strong>
          </div>

          <div class="completion-actions">
            <button class="btn-retake" onclick="startQuiz()">↩ Retake Quiz</button>
            <button class="btn-print" onclick="printCompletion()">🖨️ Print Certificate</button>
          </div>
        </div>
      </div>
      <div class="submit-box">
        <strong style="font-size:15px">📨 Submit this as proof of completion.</strong><br>
        Use <strong>🖨️ Print Certificate</strong> above and choose <strong>"Save as PDF"</strong> (a clean screenshot also works). <strong>Name it</strong> <code>FirstName LastName_Team_Brand (or Platform)_Quiz_MMYYYY.pdf</code>, <strong>upload it</strong> to the <a href="https://drive.google.com/drive/folders/19vsre-bLq4zDgwEAYGcSX22SpJ7hNvIM?usp=drive_link" target="_blank" rel="noopener">InvenTel University Quiz Results</a> folder, then <strong>notify whoever assigned the quiz</strong> (onboarding manager, Performance Team, Department Lead, Brand Lead, or Agency Lead).
      </div>
    `;
  } else {
    resultsEl.innerHTML = `
      <div class="fail-header">
        <span class="fail-emoji">📚</span>
        <h3>Not quite — give it another shot</h3>
        <div class="fail-score">${correct} / ${quizQuestions.length} (${scorePct}%)</div>
        <p class="fail-msg">
          You need ${passThreshold} correct (70%) to pass. Review the sections above — especially the Product Line, Return Policy, Fulfillment, and Test Orders — and try again. Retake as many times as you need — no penalty. You've got this!
        </p>
        <button class="quiz-retry-btn" onclick="startQuiz()">↩ Retake Quiz</button>
      </div>
    `;
  }
}

function syncName(val){
  const out = document.getElementById('trainee-name-print');
  if(out) out.textContent = (val && val.trim()) ? val.trim() : '—';
}

function printCompletion(){
  const nameInput = document.getElementById('trainee-name');
  if(nameInput && !nameInput.value.trim()){
    nameInput.focus();
    nameInput.style.borderColor = 'var(--lw-danger)';
    nameInput.placeholder = 'Please enter your name and title before printing';
    setTimeout(() => { nameInput.style.borderColor = ''; }, 2500);
    return;
  }
  // Make sure the printed name is in sync
  if(nameInput) syncName(nameInput.value);

  // Expand the quiz section if it's collapsed
  const quizSection = document.getElementById('quiz-section');
  const wasCollapsed = quizSection.classList.contains('collapsed');
  if(wasCollapsed) quizSection.classList.remove('collapsed');

  // Apply the printing class for layout isolation
  document.body.classList.add('printing');

  // Use a small delay so the layout settles before the print dialog opens
  setTimeout(() => {
    window.print();
    // Clean up after the user cancels or finishes printing
    setTimeout(() => {
      document.body.classList.remove('printing');
      if(wasCollapsed) quizSection.classList.add('collapsed');
    }, 100);
  }, 80);
}

// Also clean up if the user hits Escape or cancels via the browser
window.addEventListener('afterprint', () => {
  document.body.classList.remove('printing');
});
</script>
</body>
</html>
