<?php /* Template Name: Wild Earth Brand Hub */ ?>
<?php
>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wild Earth — Brand Knowledge Hub</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&family=DM+Sans:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root {
  --we-forest: #1B4332;
  --we-green: #2D6A4F;
  --we-green-mid: #40916C;
  --we-green-light: #74C69D;
  --we-sage: #B7E4C7;
  --we-cream: #F8F4EA;
  --we-tan: #E9DCC9;
  --we-brown: #6B4C2A;
  --we-warm: #D4782A;
  --we-text: #1A1A1A;
  --we-text-muted: #5A5A5A;
  --we-link: #0055CC;
  --we-white: #FFFFFF;
  --we-danger: #B8391F;
  --nav-h: 60px;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'DM Sans',sans-serif;background:var(--we-cream);color:var(--we-text);font-size:16px;line-height:1.6;-webkit-font-smoothing:antialiased}

/* TOP HEADER (slim, brand-only) */
#top-nav{position:sticky;top:0;z-index:1000;background:var(--we-forest);box-shadow:0 2px 12px rgba(0,0,0,.25)}
.nav-inner{display:flex;align-items:center;justify-content:space-between;height:var(--nav-h);padding:0 20px;max-width:1200px;margin:0 auto}
.nav-brand{font-family:'Playfair Display',serif;font-size:16px;font-weight:800;color:var(--we-sage);white-space:nowrap;letter-spacing:.02em}
.nav-top-toc-btn{background:transparent;border:1px solid var(--we-green-light);color:var(--we-sage);padding:6px 14px;border-radius:20px;font-size:12px;font-weight:600;cursor:pointer;font-family:'DM Mono',monospace;letter-spacing:.05em;text-transform:uppercase;transition:all .2s}
.nav-top-toc-btn:hover{background:var(--we-green-light);color:var(--we-forest)}

/* FLOATING TOC BUTTON */
#floating-toc-btn{position:fixed;bottom:24px;right:24px;z-index:998;background:var(--we-forest);color:var(--we-sage);border:2px solid var(--we-green-light);width:56px;height:56px;border-radius:50%;cursor:pointer;box-shadow:0 6px 20px rgba(27,67,50,.35);display:flex;align-items:center;justify-content:center;transition:all .2s;font-size:22px}
#floating-toc-btn:hover{background:var(--we-green);transform:translateY(-2px);box-shadow:0 8px 24px rgba(27,67,50,.45)}
#floating-toc-btn svg{width:24px;height:24px;stroke:var(--we-sage);fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* TOC DRAWER */
#toc-drawer-overlay{position:fixed;inset:0;background:rgba(27,67,50,.55);backdrop-filter:blur(4px);z-index:1500;opacity:0;pointer-events:none;transition:opacity .25s}
#toc-drawer-overlay.open{opacity:1;pointer-events:auto}
#toc-drawer{position:fixed;top:0;right:0;bottom:0;width:min(400px,92vw);background:var(--we-cream);z-index:1501;padding:0;overflow-y:auto;transform:translateX(100%);transition:transform .3s cubic-bezier(.4,0,.2,1);box-shadow:-8px 0 30px rgba(0,0,0,.3);display:flex;flex-direction:column}
#toc-drawer.open{transform:translateX(0)}
.toc-drawer-header{display:flex;justify-content:space-between;align-items:center;padding:16px 20px;background:var(--we-forest);color:#fff;border-bottom:3px solid var(--we-green-light);position:sticky;top:0;z-index:2}
.toc-drawer-title{font-family:'Playfair Display',serif;color:#fff;font-size:1.15rem;font-weight:800;letter-spacing:.01em}
.toc-drawer-close{background:rgba(255,255,255,.12);border:1px solid rgba(183,228,199,.4);color:#fff;font-size:20px;cursor:pointer;line-height:1;width:30px;height:30px;border-radius:50%;display:flex;align-items:center;justify-content:center;transition:all .15s}
.toc-drawer-close:hover{background:var(--we-sage);color:var(--we-forest);border-color:var(--we-sage)}
#toc-drawer-nav{padding:10px 12px 14px;display:flex;flex-direction:column;gap:3px}
#toc-drawer-nav a{display:flex;align-items:center;gap:10px;background:#fff;color:var(--we-forest);text-decoration:none;padding:7px 12px;border-radius:7px;font-size:13px;font-family:'DM Sans',sans-serif;font-weight:600;border:1px solid rgba(116,198,157,.35);border-left:4px solid var(--we-green);transition:all .15s;line-height:1.2}
#toc-drawer-nav a:hover{background:var(--we-green);color:#fff;border-color:var(--we-green);border-left-color:var(--we-warm);transform:translateX(3px);opacity:1;box-shadow:0 2px 8px rgba(45,106,79,.25)}
#toc-drawer-nav a:hover .toc-drawer-num{background:var(--we-warm);color:#fff}
.toc-drawer-num{display:inline-flex;align-items:center;justify-content:center;min-width:30px;height:20px;padding:0 6px;background:var(--we-sage);color:var(--we-forest);border-radius:4px;font-family:'DM Mono',monospace;font-size:10.5px;font-weight:700;letter-spacing:.02em;flex-shrink:0;transition:all .15s}
.toc-drawer-label{flex:1;min-width:0}

/* TABLE OF CONTENTS SECTION */
#toc-section .toc-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:10px;margin-top:10px}
.toc-tile{background:#fff;border:1px solid rgba(116,198,157,.3);border-left:4px solid var(--we-green);border-radius:10px;padding:14px 16px;text-decoration:none;color:var(--we-text);display:flex;align-items:center;gap:12px;transition:all .2s;cursor:pointer}
.toc-tile:hover{background:var(--we-cream);border-left-color:var(--we-warm);transform:translateX(3px);opacity:1;text-decoration:none}
.toc-tile-num{font-family:'DM Mono',monospace;color:var(--we-green-mid);font-size:12px;font-weight:700;min-width:24px}
.toc-tile-label{font-size:14px;font-weight:600;color:var(--we-forest)}

/* COLLAPSIBLE SECTIONS */
.card.collapsible{padding:0;overflow:hidden;transition:all .3s ease}
.section-header-bar{display:flex;align-items:center;justify-content:space-between;padding:22px 30px;cursor:pointer;user-select:none;background:linear-gradient(135deg,var(--we-white) 0%,rgba(183,228,199,.12) 100%);transition:background .2s;border-bottom:1px solid transparent}
.section-header-bar:hover{background:linear-gradient(135deg,var(--we-cream) 0%,rgba(183,228,199,.25) 100%)}
.section-header-bar .section-header-left{flex:1;min-width:0}
.section-header-bar .eyebrow{margin-bottom:4px}
.section-header-bar h2{margin:0;padding:0;border-bottom:none;font-size:1.4rem}
.section-toggle{background:transparent;border:1.5px solid var(--we-green-mid);color:var(--we-green);width:32px;height:32px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .2s;margin-left:14px}
.section-toggle:hover{background:var(--we-green);color:#fff;border-color:var(--we-green)}
.section-toggle svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:2.5;stroke-linecap:round;transition:transform .3s}
.collapsed .section-toggle svg{transform:rotate(-180deg)}
.section-body{padding:10px 30px 30px;max-height:20000px;overflow:hidden;transition:max-height .4s ease,padding .3s ease,opacity .3s ease;opacity:1}
.collapsed .section-body{max-height:0;padding-top:0;padding-bottom:0;opacity:0}
.collapsed .section-header-bar{border-bottom-color:transparent}

/* SECTIONS */
section{padding:48px 20px;max-width:980px;margin:0 auto;scroll-margin-top:var(--nav-h)}
h1{font-family:'Playfair Display',serif;font-size:clamp(2rem,5vw,3.6rem);font-weight:900;color:var(--we-forest);line-height:1.05;letter-spacing:-.01em}
h2{font-family:'Playfair Display',serif;font-size:clamp(1.6rem,3.5vw,2.4rem);font-weight:800;color:var(--we-forest);margin-bottom:24px;padding-bottom:12px;border-bottom:3px solid var(--we-green-light);letter-spacing:-.01em}
h3{font-family:'DM Sans',sans-serif;font-size:1.15rem;font-weight:700;color:var(--we-green);margin-bottom:10px;letter-spacing:.01em}
h4{font-family:'DM Sans',sans-serif;font-size:1rem;font-weight:600;color:var(--we-forest);margin-bottom:8px}
p{margin-bottom:14px;color:var(--we-text)}
a{color:var(--we-link);text-decoration:underline}
a:hover{opacity:.75}
.eyebrow{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--we-green-mid);margin-bottom:8px;display:block;font-weight:500}

/* SECTION CARD */
.card{background:var(--we-white);border-radius:16px;padding:36px;margin-bottom:20px;box-shadow:0 2px 20px rgba(27,67,50,.06);border:1px solid rgba(116,198,157,.18)}

/* HERO */
#hero{max-width:100%;padding:0;margin:0;background:linear-gradient(135deg,var(--we-forest) 0%,var(--we-green) 55%,var(--we-green-mid) 100%);position:relative;overflow:hidden}
#hero::before{content:"";position:absolute;inset:0;background-image:radial-gradient(circle at 20% 20%, rgba(183,228,199,.15) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(64,145,108,.3) 0%, transparent 50%);pointer-events:none}
.hero-inner{max-width:980px;margin:0 auto;padding:64px 20px 56px;position:relative;z-index:1}
.hero-logo-wrap{display:flex;align-items:center;gap:20px;margin-bottom:28px;flex-wrap:wrap}
.hero-logo-wrap img{height:56px;object-fit:contain;background:#fff;padding:8px 14px;border-radius:8px}
.hero-brand-text-fallback{font-family:'Playfair Display',serif;font-size:2.2rem;font-weight:900;color:#fff}
.hero h1{color:#fff;margin-bottom:8px}
.hero-tagline{font-size:1.15rem;color:var(--we-sage);margin-bottom:10px;font-weight:500}
.hero-meta{font-family:'DM Mono',monospace;font-size:13px;color:var(--we-sage);opacity:.85;margin-bottom:28px;letter-spacing:.05em}
.hero-stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:14px;margin:28px 0}
.hero-stat{background:rgba(255,255,255,.08);border:1px solid rgba(183,228,199,.25);border-radius:12px;padding:18px;backdrop-filter:blur(4px)}
.hero-stat-num{font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:800;color:var(--we-sage);line-height:1;margin-bottom:6px}
.hero-stat-lbl{font-size:12px;color:#fff;opacity:.85;line-height:1.35}
.chip-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:18px}
.chip{display:inline-flex;align-items:center;gap:6px;background:#fff;color:var(--we-link)!important;text-decoration:underline;padding:7px 14px;border-radius:20px;font-size:13px;font-weight:500;transition:transform .15s}
.chip:hover{transform:translateY(-1px);opacity:1}

/* TAGS */
.tag-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:16px}
.tag{background:var(--we-sage);color:var(--we-forest);padding:5px 12px;border-radius:12px;font-size:12px;font-weight:600;letter-spacing:.02em}

/* TABLES */
table{width:100%;border-collapse:collapse;margin:16px 0;background:#fff;border-radius:8px;overflow:hidden;font-size:14px}
th{background:var(--we-forest);color:#fff;padding:12px 14px;text-align:left;font-size:12px;text-transform:uppercase;letter-spacing:.05em;font-weight:600}
td{padding:12px 14px;border-bottom:1px solid rgba(27,67,50,.08);vertical-align:top}
tr:last-child td{border-bottom:none}
tr:nth-child(even) td{background:rgba(183,228,199,.08)}
.badge{display:inline-block;padding:3px 9px;border-radius:10px;font-size:11px;font-weight:600;letter-spacing:.03em;text-transform:uppercase}
.badge-kibble{background:var(--we-green);color:#fff}
.badge-treat{background:var(--we-warm);color:#fff}
.badge-supplement{background:var(--we-green-mid);color:#fff}
.badge-bundle{background:var(--we-brown);color:#fff}
.badge-catfood{background:#7B2CBF;color:#fff}

/* PILLAR CARDS */
.pillars{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:20px}
.pillar{background:linear-gradient(135deg,var(--we-white) 0%,rgba(183,228,199,.25) 100%);padding:22px;border-radius:12px;border-left:4px solid var(--we-green);transition:transform .2s}
.pillar:hover{transform:translateY(-3px)}
.pillar-icon{font-size:1.8rem;margin-bottom:10px;display:block}
.pillar h4{color:var(--we-forest);margin-bottom:6px;font-size:1rem}
.pillar p{font-size:13px;color:var(--we-text-muted);margin-bottom:0;line-height:1.5}

/* TONE MODES */
.tone-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:14px;margin-top:20px}
.tone{background:var(--we-cream);padding:20px;border-radius:10px;border-top:4px solid var(--we-green-mid)}
.tone-label{font-family:'DM Sans',sans-serif;font-weight:700;color:var(--we-forest);font-size:14px;margin-bottom:6px}
.tone-desc{font-size:13px;color:var(--we-text-muted);margin-bottom:10px}
.tone-ex{font-family:'Playfair Display',serif;font-style:italic;color:var(--we-green);font-size:14px;border-left:3px solid var(--we-green-light);padding-left:10px;line-height:1.5}

/* DO/DONT */
.do-dont{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:16px}
.do-dont > div{padding:20px;border-radius:10px}
.do{background:rgba(64,145,108,.1);border:1px solid var(--we-green-mid)}
.dont{background:rgba(184,57,31,.08);border:1px solid var(--we-danger)}
.do h4{color:var(--we-green)}
.dont h4{color:var(--we-danger)}
.do ul,.dont ul{padding-left:18px;margin-top:8px}
.do li,.dont li{margin-bottom:6px;font-size:13px}
@media (max-width:640px){.do-dont{grid-template-columns:1fr}}

/* PERSONALITY ADJECTIVES */
.adj-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:12px;margin-top:18px}
.adj{background:#fff;padding:16px;border-radius:10px;border:1px solid var(--we-sage)}
.adj-title{font-weight:700;color:var(--we-green);font-size:14px;margin-bottom:5px;font-family:'DM Mono',monospace;text-transform:uppercase;letter-spacing:.05em}
.adj-desc{font-size:13px;color:var(--we-text-muted);line-height:1.5}

/* COLOR PALETTE */
.palette{display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:12px;margin-top:16px}
.swatch{border-radius:10px;overflow:hidden;border:1px solid rgba(27,67,50,.12)}
.swatch-color{height:80px}
.swatch-info{padding:10px;background:#fff;font-size:12px}
.swatch-name{font-weight:700;color:var(--we-forest)}
.swatch-role{color:var(--we-text-muted);margin:2px 0}
.swatch-hex{font-family:'DM Mono',monospace;color:var(--we-green);font-size:11px}

/* TYPOGRAPHY SPECIMEN */
.type-spec{background:#fff;padding:18px;border-radius:10px;border:1px solid var(--we-sage);margin-bottom:10px}
.type-spec-name{font-size:12px;font-family:'DM Mono',monospace;color:var(--we-green-mid);text-transform:uppercase;letter-spacing:.1em;margin-bottom:6px}
.type-spec-use{font-size:12px;color:var(--we-text-muted);margin-bottom:10px}

/* PERSONAS */
.personas{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:14px;margin-top:18px}
.persona{background:linear-gradient(135deg,var(--we-white) 0%,var(--we-cream) 100%);padding:22px;border-radius:12px;border:1px solid var(--we-sage)}
.persona-name{font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:800;color:var(--we-forest);margin-bottom:4px}
.persona-type{font-family:'DM Mono',monospace;font-size:11px;color:var(--we-green-mid);text-transform:uppercase;letter-spacing:.1em;margin-bottom:10px}
.persona-desc{font-size:13px;color:var(--we-text-muted);margin-bottom:10px;line-height:1.55}
.persona-focus{font-size:12px;color:var(--we-forest)}
.persona-focus strong{color:var(--we-green)}

/* OBJECTIONS */
.objection{background:#fff;border-radius:10px;padding:20px;margin-bottom:12px;border-left:4px solid var(--we-warm)}
.objection-q{font-weight:700;color:var(--we-danger);margin-bottom:8px;font-size:14px}
.objection-a{color:var(--we-text);font-size:14px;line-height:1.6}
.objection-q::before{content:"💬 Objection: ";font-weight:800;color:var(--we-warm)}
.objection-a::before{content:"✅ Response: ";font-weight:800;color:var(--we-green)}

/* JOURNEY */
.journey{overflow-x:auto}

/* STATS */
.stat-boxes{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:14px;margin-top:18px}
.stat-box{background:linear-gradient(135deg,var(--we-green) 0%,var(--we-green-mid) 100%);color:#fff;padding:22px;border-radius:12px;text-align:center}
.stat-big{font-family:'Playfair Display',serif;font-size:2.4rem;font-weight:900;line-height:1;margin-bottom:6px;color:var(--we-sage)}
.stat-lbl{font-size:12px;line-height:1.4;opacity:.95}

/* MARKETING ANGLES */
.angles{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:16px}
.angle{background:#fff;padding:20px;border-radius:10px;border-top:4px solid var(--we-warm)}
.angle h4{color:var(--we-forest);margin-bottom:8px}
.angle-row{font-size:13px;margin-bottom:5px}
.angle-row strong{color:var(--we-green);font-family:'DM Mono',monospace;text-transform:uppercase;font-size:11px;letter-spacing:.08em}

/* HOOKS */
.hooks{counter-reset:hook;list-style:none;padding:0;margin-top:14px}
.hooks li{counter-increment:hook;padding:12px 14px 12px 48px;margin-bottom:8px;background:#fff;border-radius:8px;position:relative;font-size:14px;border:1px solid var(--we-sage)}
.hooks li::before{content:counter(hook,decimal-leading-zero);position:absolute;left:14px;top:50%;transform:translateY(-50%);font-family:'DM Mono',monospace;color:var(--we-warm);font-weight:600;font-size:13px}

/* FAQ */
.faq-item{background:#fff;border-radius:10px;padding:20px;margin-bottom:10px;border:1px solid rgba(116,198,157,.3)}
.faq-q{font-weight:700;color:var(--we-forest);margin-bottom:10px;padding-left:30px;position:relative;font-size:14px}
.faq-q::before{content:"Q";position:absolute;left:0;top:-2px;width:22px;height:22px;background:var(--we-green);color:#fff;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;font-family:'DM Mono',monospace}
.faq-a{color:var(--we-text-muted);padding-left:30px;font-size:14px;line-height:1.6}

/* GLOSSARY */
.glossary{background:#fff;padding:24px;border-radius:10px}
.glossary dt{font-weight:700;color:var(--we-green);font-family:'DM Mono',monospace;font-size:13px;text-transform:uppercase;letter-spacing:.05em;margin-top:14px}
.glossary dt:first-child{margin-top:0}
.glossary dd{margin-left:0;margin-top:4px;font-size:14px;color:var(--we-text);line-height:1.55}

/* RETURN POLICY */
.policy-card{background:linear-gradient(135deg,var(--we-cream) 0%,var(--we-sage) 100%);border:2px solid var(--we-green);border-radius:14px;padding:30px;margin-top:10px}
.policy-card h3{color:var(--we-forest);font-size:1.4rem;margin-bottom:14px;font-family:'Playfair Display',serif}
.policy-card p{font-size:14px;margin-bottom:12px;color:var(--we-text)}
.policy-contact{background:#fff;padding:14px 18px;border-radius:8px;margin-top:10px;font-size:14px;border-left:4px solid var(--we-green)}

/* QUIZ */
#quiz-section{background:linear-gradient(135deg,var(--we-forest) 0%,var(--we-green) 100%);color:#fff;border-radius:20px;padding:0;margin-top:40px;overflow:hidden}
#quiz-section h2{color:#fff;border-bottom-color:var(--we-green-light);margin:0;padding:0;border:none}
#quiz-section .section-header-bar{background:transparent;padding:32px 30px 20px;border-bottom:1px solid rgba(183,228,199,.15)}
#quiz-section .section-header-bar:hover{background:rgba(255,255,255,.04)}
#quiz-section .section-toggle{border-color:var(--we-sage);color:var(--we-sage)}
#quiz-section .section-toggle:hover{background:var(--we-sage);color:var(--we-forest)}
#quiz-section .section-body{padding:20px 30px 40px}
#quiz-section.collapsed .section-header-bar{border-bottom:none;border-color:transparent}
.quiz-container{background:rgba(255,255,255,.08);border-radius:14px;padding:28px;margin-top:20px;border:1px solid rgba(183,228,199,.3)}
.quiz-progress{font-family:'DM Mono',monospace;font-size:12px;color:var(--we-sage);letter-spacing:.1em;margin-bottom:16px;text-transform:uppercase}
.quiz-progress-bar{height:6px;background:rgba(255,255,255,.12);border-radius:3px;overflow:hidden;margin-bottom:22px}
.quiz-progress-fill{height:100%;background:var(--we-sage);transition:width .4s cubic-bezier(.4,0,.2,1);border-radius:3px}
.quiz-question{font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:700;margin-bottom:22px;line-height:1.35;color:#fff}
.quiz-options{display:flex;flex-direction:column;gap:10px}
.quiz-option{background:rgba(255,255,255,.06);border:2px solid rgba(183,228,199,.3);color:#fff;padding:14px 18px;border-radius:10px;text-align:left;font-size:14px;cursor:pointer;transition:all .2s;font-family:inherit;display:flex;align-items:center;gap:12px}
.quiz-option:hover{background:rgba(183,228,199,.2);border-color:var(--we-sage);transform:translateX(4px)}
.quiz-option.correct{background:#FEF9E7;border-color:#F4C842;color:var(--we-forest);font-weight:700;box-shadow:0 0 0 3px rgba(244,200,66,.35);position:relative}
.quiz-option.correct::after{content:"✓ CORRECT";position:absolute;right:14px;top:50%;transform:translateY(-50%);background:#2D6A4F;color:#fff;font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.1em;padding:4px 10px;border-radius:20px}
.quiz-option.incorrect{background:rgba(184,57,31,.85);border-color:#fff;color:#fff;font-weight:700;position:relative}
.quiz-option.incorrect::after{content:"✗ YOUR PICK";position:absolute;right:14px;top:50%;transform:translateY(-50%);background:#fff;color:var(--we-danger);font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.1em;padding:4px 10px;border-radius:20px}
.quiz-option.show-correct{background:#FEF9E7;border-color:#F4C842;color:var(--we-forest);font-weight:700;box-shadow:0 0 0 3px rgba(244,200,66,.35);position:relative}
.quiz-option.show-correct::after{content:"✓ CORRECT ANSWER";position:absolute;right:14px;top:50%;transform:translateY(-50%);background:#2D6A4F;color:#fff;font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.1em;padding:4px 10px;border-radius:20px}
.quiz-option.correct .quiz-option-letter,
.quiz-option.show-correct .quiz-option-letter{color:var(--we-forest)}
.quiz-option:disabled{cursor:default;transform:none;opacity:1}
.quiz-option:disabled:hover{transform:none}
.quiz-option:disabled:not(.correct):not(.show-correct):not(.incorrect){opacity:.35}
.quiz-feedback{margin-top:16px;padding:14px 18px;border-radius:10px;font-size:14px;font-weight:600;animation:fadeIn .3s ease}
.quiz-feedback.right{background:#FEF9E7;border-left:4px solid #F4C842;color:var(--we-forest)}
.quiz-feedback.wrong{background:#fff;border-left:4px solid var(--we-danger);color:var(--we-danger)}
@keyframes fadeIn{from{opacity:0;transform:translateY(-4px)}to{opacity:1;transform:translateY(0)}}
.quiz-next-btn{background:var(--we-sage);color:var(--we-forest);border:none;padding:12px 24px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:inherit;margin-top:14px;transition:transform .15s}
.quiz-next-btn:hover{transform:translateY(-2px)}
.quiz-option-letter{font-family:'DM Mono',monospace;font-weight:700;color:var(--we-sage);min-width:22px}
.quiz-start-btn,.quiz-submit-btn,.quiz-retry-btn{background:var(--we-sage);color:var(--we-forest);border:none;padding:14px 28px;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer;font-family:inherit;margin-top:18px;transition:transform .15s,box-shadow .15s}
.quiz-start-btn:hover,.quiz-submit-btn:hover,.quiz-retry-btn:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(183,228,199,.4)}
.quiz-result-title{font-family:'Playfair Display',serif;font-size:2rem;margin-bottom:10px}
.quiz-result-pass{color:var(--we-sage)}
.quiz-result-fail{color:#FFB4A2}
.quiz-score{font-family:'DM Mono',monospace;font-size:1.5rem;margin-bottom:16px}
.quiz-review{margin-top:20px;max-height:400px;overflow-y:auto;padding-right:6px}
.quiz-review-item{background:rgba(0,0,0,.2);padding:14px;border-radius:8px;margin-bottom:10px;font-size:13px;border-left:3px solid var(--we-danger)}
.quiz-review-item.correct{border-left-color:var(--we-green-light)}
.quiz-review-q{font-weight:700;margin-bottom:6px;color:#fff}
.quiz-review-answer{font-size:12px;color:var(--we-sage)}
.quiz-review-your{font-size:12px;color:#FFB4A2;margin-top:4px}

/* QUIZ COMPLETION CARD (PASS) */
.completion-wrap{padding:0}
.completion-header{background:linear-gradient(135deg,var(--we-green-light) 0%,var(--we-sage) 50%,#FEF9E7 100%);color:var(--we-forest);padding:28px 24px;border-radius:14px 14px 0 0;text-align:center}
.completion-header .completion-emoji{font-size:3rem;line-height:1;margin-bottom:8px;display:block}
.completion-header h3{font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:800;color:var(--we-forest);margin:0;letter-spacing:.01em}
.completion-header .completion-sub{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.15em;text-transform:uppercase;color:var(--we-green);margin-top:6px;font-weight:600}
.completion-card{background:#fff;color:var(--we-text);border-radius:0 0 14px 14px;padding:32px 28px;box-shadow:0 4px 20px rgba(0,0,0,.08);border:1px solid rgba(116,198,157,.3);border-top:none}
.completion-brand{display:flex;align-items:center;justify-content:center;gap:14px;padding-bottom:20px;border-bottom:2px solid var(--we-sage);margin-bottom:22px;flex-wrap:wrap}
.completion-brand img.logo-sm{height:42px;width:auto;object-fit:contain}
.completion-brand .completion-brand-text{font-family:'Playfair Display',serif;font-size:1.05rem;font-weight:700;color:var(--we-forest);text-align:center;line-height:1.35}
.completion-brand .completion-brand-text small{display:block;font-family:'DM Mono',monospace;font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--we-green-mid);font-weight:600;margin-top:2px}
.completion-nameblock{margin-bottom:22px}
.completion-nameblock label{display:block;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--we-green-mid);font-weight:700;margin-bottom:8px}
.completion-nameblock input{width:100%;padding:12px 14px;border:2px solid var(--we-sage);border-radius:8px;font-family:'DM Sans',sans-serif;font-size:16px;color:var(--we-forest);background:var(--we-cream);transition:border-color .15s}
.completion-nameblock input:focus{outline:none;border-color:var(--we-green);background:#fff}
.completion-nameblock .name-printed{display:none;font-family:'Playfair Display',serif;font-size:1.5rem;font-weight:800;color:var(--we-forest);padding:8px 0;border-bottom:2px solid var(--we-forest)}
.completion-stats{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-bottom:22px}
.completion-stat{background:var(--we-cream);border:1px solid rgba(116,198,157,.35);border-radius:10px;padding:14px 16px;text-align:center}
.completion-stat-label{display:block;font-family:'DM Mono',monospace;font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--we-green-mid);font-weight:700;margin-bottom:4px}
.completion-stat-value{font-family:'Playfair Display',serif;font-size:1.5rem;font-weight:800;color:var(--we-forest);line-height:1.1}
.completion-badge{display:inline-flex;align-items:center;gap:8px;background:var(--we-green);color:#fff;padding:10px 22px;border-radius:30px;font-family:'DM Mono',monospace;font-size:13px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;margin:0 auto 18px;box-shadow:0 4px 12px rgba(45,106,79,.25)}
.completion-track{text-align:center;font-family:'DM Mono',monospace;font-size:12px;letter-spacing:.1em;text-transform:uppercase;color:var(--we-text-muted);padding-top:18px;border-top:1px dashed var(--we-sage)}
.completion-track strong{display:block;font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:700;color:var(--we-forest);text-transform:none;letter-spacing:0;margin-top:4px}
.completion-actions{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:24px}
.completion-actions button{background:var(--we-sage);color:var(--we-forest);border:none;padding:12px 22px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:inherit;transition:transform .15s,box-shadow .15s;display:inline-flex;align-items:center;gap:8px}
.completion-actions button:hover{transform:translateY(-2px);box-shadow:0 6px 16px rgba(183,228,199,.5)}
.completion-actions button.btn-print{background:var(--we-forest);color:var(--we-sage)}
.completion-actions button.btn-print:hover{box-shadow:0 6px 16px rgba(27,67,50,.35)}
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
  #quiz-section{background:#fff !important;box-shadow:none !important;border-radius:0 !important;color:#1B4332 !important}
  #quiz-section .section-body{padding:10px 0 !important;background:#fff !important}
  .quiz-container{background:#fff !important;border:none !important;padding:0 !important}
  .completion-nameblock input{display:none !important}
  .completion-nameblock .name-printed{display:block !important}
  .completion-header{background:linear-gradient(135deg,#74C69D 0%,#B7E4C7 50%,#FEF9E7 100%) !important;color:#1B4332 !important}
  .completion-header h3,.completion-header .completion-sub{color:#1B4332 !important}
  .completion-stat{background:#F8F4EA !important;border:1px solid #74C69D !important}
  .completion-badge{background:#2D6A4F !important;color:#fff !important}
}

/* SAMPLE WINNING CREATIVES */
.creative-intro{background:linear-gradient(135deg,var(--we-cream) 0%,#fff 100%);border:1px solid var(--we-sage);border-left:4px solid var(--we-warm);border-radius:12px;padding:22px 24px;margin:14px 0 22px;font-size:14.5px;line-height:1.65;color:var(--we-text)}
.creative-intro strong{color:var(--we-forest)}
.pattern-list{counter-reset:pat;list-style:none;padding:0;margin:18px 0 6px;display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:12px}
.pattern-list li{counter-increment:pat;background:#fff;border-radius:10px;padding:16px 18px 16px 56px;position:relative;border-top:4px solid var(--we-warm);font-size:13.5px;line-height:1.55;color:var(--we-text)}
.pattern-list li::before{content:counter(pat);position:absolute;left:14px;top:14px;width:30px;height:30px;display:flex;align-items:center;justify-content:center;background:var(--we-green);color:#fff;border-radius:50%;font-family:'DM Mono',monospace;font-size:13px;font-weight:700}
.pattern-list .pat-title{display:block;font-family:'Playfair Display',serif;font-weight:800;color:var(--we-forest);font-size:15px;margin-bottom:4px}
.through-line{margin-top:18px;background:var(--we-forest);color:#fff;border-radius:12px;padding:20px 24px;font-size:14.5px;line-height:1.6;border-left:5px solid var(--we-warm)}
.through-line strong{color:#F4C842;font-weight:800;letter-spacing:.02em}
.creative-gallery{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:18px;margin-top:22px}
.creative-card{background:#fff;border:1px solid var(--we-sage);border-radius:12px;padding:14px;display:flex;flex-direction:column;gap:10px;transition:transform .15s ease,box-shadow .15s ease}
.creative-card:hover{transform:translateY(-2px);box-shadow:0 6px 18px rgba(27,67,50,.1)}
.creative-img{width:100%;height:auto;border-radius:8px;background:#F8F4EA;display:block}
.creative-meta{font-family:'DM Mono',monospace;font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--we-green-mid);font-weight:700}
.creative-caption{font-size:13px;line-height:1.55;color:var(--we-text)}
.creative-caption strong{color:var(--we-forest);display:block;font-family:'Playfair Display',serif;font-size:14.5px;margin-bottom:4px}
.creative-tags{display:flex;flex-wrap:wrap;gap:6px;margin-top:4px}
.creative-tag{background:rgba(116,198,157,.18);color:var(--we-forest);font-size:11px;padding:3px 8px;border-radius:12px;font-weight:600}

/* ADDRESS / WAREHOUSE BLOCKS */
.address-block{background:#fff;border:1px solid rgba(116,198,157,.35);border-left:4px solid var(--we-green);border-radius:10px;padding:18px 22px;font-family:'DM Mono',monospace;font-size:14px;line-height:1.55;color:var(--we-forest);margin:12px 0}
.address-block .addr-label{display:block;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--we-green-mid);margin-bottom:6px;font-weight:600}
.address-block strong{font-family:'DM Sans',sans-serif;font-size:15px;color:var(--we-forest)}

/* ALERT CALLOUT */
.alert-callout{background:rgba(212,120,42,.08);border:1px solid var(--we-warm);border-left:5px solid var(--we-warm);border-radius:10px;padding:18px 22px;margin:14px 0;font-size:14px;line-height:1.6;color:var(--we-text)}
.alert-callout.critical{background:linear-gradient(135deg,#B8391F 0%,#8B2815 100%);border:3px solid #F4C842;border-radius:12px;padding:34px 26px 24px;margin:18px 0 22px;color:#fff;box-shadow:0 6px 24px rgba(184,57,31,.35);position:relative;overflow:hidden}
.alert-callout.critical::before{content:"";position:absolute;top:0;left:0;right:0;height:6px;background:repeating-linear-gradient(45deg,#F4C842 0 12px,#1B4332 12px 24px)}
.alert-callout strong{color:var(--we-forest)}
.alert-callout.critical strong{color:#F4C842;font-weight:800}
.alert-callout-title{display:block;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--we-warm);font-weight:700;margin-bottom:6px}
.alert-callout.critical .alert-callout-title{color:#F4C842;font-size:15px;letter-spacing:.15em;font-weight:800;margin-bottom:12px;padding-bottom:10px;border-bottom:2px solid rgba(244,200,66,.4)}

/* CALLOUT — TEAM-SPECIFIC (CX, Creative, Marketing, etc.) */
.team-callout{border-radius:10px;padding:16px 20px 16px 56px;margin:14px 0;font-size:13px;line-height:1.6;position:relative;background:#fff;border:1px solid rgba(116,198,157,.35);border-left:5px solid var(--we-green)}
.team-callout::before{content:"";position:absolute;left:16px;top:18px;width:28px;height:28px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700}
.team-callout .team-tag{display:inline-block;font-family:'DM Mono',monospace;font-size:10px;letter-spacing:.12em;text-transform:uppercase;font-weight:700;padding:3px 9px;border-radius:12px;margin-bottom:6px}
.team-callout.cx{border-left-color:var(--we-green)}
.team-callout.cx::before{content:"📞";background:var(--we-sage)}
.team-callout.cx .team-tag{background:var(--we-green);color:#fff}
.team-callout.creative{border-left-color:var(--we-warm);background:#FFF8F0}
.team-callout.creative::before{content:"🎨";background:#FFE4C4}
.team-callout.creative .team-tag{background:var(--we-warm);color:#fff}
.team-callout.marketing{border-left-color:#8B4789;background:#FBF5FB}
.team-callout.marketing::before{content:"📢";background:#E9D8EC}
.team-callout.marketing .team-tag{background:#8B4789;color:#fff}
.team-callout.brand{border-left-color:var(--we-forest);background:#F1F8F3}
.team-callout.brand::before{content:"🌿";background:var(--we-sage)}
.team-callout.brand .team-tag{background:var(--we-forest);color:#fff}
.team-callout.newhire{border-left-color:#2F6690;background:#F0F6FB}
.team-callout.newhire::before{content:"👋";background:#CDE5F3}
.team-callout.newhire .team-tag{background:#2F6690;color:#fff}
.team-callout strong{color:var(--we-forest)}

/* STEPS / ORDERED PROCESS */
.process-steps{counter-reset:step;list-style:none;padding:0;margin:18px 0 8px}
.process-steps > li{counter-increment:step;padding:16px 18px 16px 62px;margin-bottom:10px;background:#fff;border-radius:10px;position:relative;font-size:14px;border:1px solid rgba(116,198,157,.3);line-height:1.6}
.process-steps > li::before{content:counter(step);position:absolute;left:16px;top:14px;width:32px;height:32px;background:var(--we-green);color:#fff;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-family:'DM Mono',monospace;font-weight:700;font-size:14px}
.process-steps > li strong{color:var(--we-forest)}

/* FOOTER */
footer{background:var(--we-forest);color:var(--we-sage);text-align:center;padding:30px 20px;margin-top:40px;font-size:12px;font-family:'DM Mono',monospace;letter-spacing:.05em}

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
.nav-search-box{display:flex;align-items:center;background:rgba(255,255,255,.08);border:1px solid rgba(183,228,199,.35);border-radius:20px;padding:5px 10px 5px 12px;transition:all .2s}
.nav-search-box:focus-within{background:rgba(255,255,255,.14);border-color:var(--we-green-light);box-shadow:0 0 0 3px rgba(116,198,157,.18)}
.nav-search-icon{color:var(--we-sage);font-size:14px;margin-right:6px;pointer-events:none;display:flex;align-items:center}
.nav-search-icon svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:2.2;stroke-linecap:round;stroke-linejoin:round}
#nav-search-input{flex:1;background:transparent;border:none;outline:none;color:#fff;font-family:'DM Sans',sans-serif;font-size:13px;font-weight:500;padding:3px 4px;min-width:0}
#nav-search-input::placeholder{color:rgba(183,228,199,.6)}
.nav-search-clear{background:transparent;border:none;color:rgba(183,228,199,.7);font-size:16px;cursor:pointer;padding:0 4px;line-height:1;display:none;transition:color .15s}
.nav-search-clear:hover{color:#fff}
.nav-search-box.has-query .nav-search-clear{display:block}
.nav-search-kbd{display:inline-flex;align-items:center;gap:3px;font-family:'DM Mono',monospace;font-size:9.5px;color:rgba(183,228,199,.55);background:rgba(0,0,0,.2);padding:2px 5px;border-radius:3px;border:1px solid rgba(183,228,199,.15);letter-spacing:.04em;margin-left:4px;flex-shrink:0}
.nav-search-box:focus-within .nav-search-kbd{display:none}

/* Results dropdown */
#nav-search-results{position:absolute;top:calc(100% + 6px);left:0;right:0;background:var(--we-cream);border:1px solid rgba(27,67,50,.15);border-radius:12px;box-shadow:0 12px 40px rgba(27,67,50,.28),0 0 0 1px rgba(183,228,199,.25);max-height:min(70vh,560px);overflow-y:auto;display:none;z-index:1100}
#nav-search-results.open{display:block}
.search-hint{padding:14px 16px;font-size:12px;color:var(--we-text-muted);font-style:italic;text-align:center;border-bottom:1px solid rgba(27,67,50,.08)}
.search-group{padding:4px 0}
.search-group + .search-group{border-top:1px solid rgba(27,67,50,.08)}
.search-group-label{display:flex;align-items:center;justify-content:space-between;padding:8px 16px 4px;font-family:'DM Mono',monospace;font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--we-green);background:rgba(183,228,199,.25)}
.search-group-count{background:var(--we-forest);color:var(--we-sage);padding:1px 7px;border-radius:10px;font-size:9.5px}
.search-result{display:block;padding:10px 16px;text-decoration:none;color:var(--we-text);border-left:3px solid transparent;cursor:pointer;transition:background .12s,border-color .12s;font-family:'DM Sans',sans-serif}
.search-result:hover,.search-result.active{background:#fff;border-left-color:var(--we-warm)}
.search-result-top{display:flex;align-items:center;gap:8px;margin-bottom:3px}
.search-result-badge{font-family:'DM Mono',monospace;font-size:9px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;padding:2px 7px;border-radius:10px;flex-shrink:0}
.search-result-badge.section{background:var(--we-green);color:#fff}
.search-result-badge.callout-cx{background:var(--we-green);color:#fff}
.search-result-badge.callout-creative{background:var(--we-warm);color:#fff}
.search-result-badge.callout-marketing{background:#8B4789;color:#fff}
.search-result-badge.callout-brand{background:var(--we-forest);color:#fff}
.search-result-badge.callout-newhire{background:#2F6690;color:#fff}
.search-result-badge.glossary{background:var(--we-brown);color:#fff}
.search-result-badge.faq{background:#5A7A6B;color:#fff}
.search-result-badge.objection{background:var(--we-danger);color:#fff}
.search-result-title{font-size:13.5px;font-weight:700;color:var(--we-forest);line-height:1.3;flex:1;min-width:0}
.search-result-snippet{font-size:12px;color:var(--we-text-muted);line-height:1.45;margin-left:0;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}
.search-result-snippet mark{background:#FEF9E7;color:var(--we-forest);padding:0 2px;border-radius:2px;font-weight:600}
.search-result-title mark{background:#FEF9E7;color:var(--we-forest);padding:0 2px;border-radius:2px}
.search-empty{padding:28px 20px;text-align:center;color:var(--we-text-muted);font-size:13px}
.search-empty strong{color:var(--we-forest);display:block;margin-bottom:4px}

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
</style>
<?php bh_favicon_tags(); ?>
</head>
<body>

<!-- TOP HEADER -->
<nav id="top-nav">
  <div class="nav-inner">
    <span class="nav-brand">🌱 Wild Earth Hub</span>
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
    <a href="#why-premium" onclick="closeTocDrawer()"><span class="toc-drawer-num">02</span><span class="toc-drawer-label">Why Pet Parents Pay Premium</span></a>
    <a href="#products" onclick="closeTocDrawer()"><span class="toc-drawer-num">03</span><span class="toc-drawer-label">Product Line</span></a>
    <a href="#ingredients" onclick="closeTocDrawer()"><span class="toc-drawer-num">04</span><span class="toc-drawer-label">Ingredients &amp; Formulation</span></a>
    <a href="#vision" onclick="closeTocDrawer()"><span class="toc-drawer-num">05</span><span class="toc-drawer-label">Vision, Mission &amp; Pillars</span></a>
    <a href="#voice" onclick="closeTocDrawer()"><span class="toc-drawer-num">06</span><span class="toc-drawer-label">Voice &amp; Tone</span></a>
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
    <a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'brand_hub_logout', '1', home_url( '/' ) ), 'brand_hub_logout' ) ); ?>" style="color:#B0322B;font-weight:600;"><span class="toc-drawer-num">⎋</span><span class="toc-drawer-label">Sign Out</span></a>

  </nav>
</aside>

<!-- HERO -->
<section id="hero" class="hero">
  <div class="hero-inner">
    <div class="hero-logo-wrap">
      <img src="https://wildearth.com/cdn/shop/files/Logo_no_tag.png" alt="Wild Earth logo" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
      <div class="hero-brand-text-fallback" style="display:none">🌱 WILD EARTH</div>
    </div>
    <span class="eyebrow" style="color:var(--we-sage)">Inventel Brand Knowledge Hub · For CX & new hires</span>
    <h1>Wild Earth</h1>
    <div class="hero-tagline">Plant-based, vet-developed nutrition for dogs.</div>
    <div class="hero-meta">Founded 2017 · Inventel brand since 2025 · Plant-based pet nutrition</div>

    <div class="hero-stats">
      <div class="hero-stat"><div class="hero-stat-num">2017</div><div class="hero-stat-lbl">Year founded by Ryan Bethencourt</div></div>
      <div class="hero-stat"><div class="hero-stat-num">$21M+</div><div class="hero-stat-lbl">Annual revenue (2024)</div></div>
      <div class="hero-stat"><div class="hero-stat-num">$39M+</div><div class="hero-stat-lbl">Total venture funding raised</div></div>
      <div class="hero-stat"><div class="hero-stat-num">AAFCO</div><div class="hero-stat-lbl">Nutritional standards met & exceeded</div></div>
      <div class="hero-stat"><div class="hero-stat-num">2025</div><div class="hero-stat-lbl">Acquired by Inventel — now part of the Inventel portfolio</div></div>
      <div class="hero-stat"><div class="hero-stat-num">1.5 yrs</div><div class="hero-stat-lbl">Avg. longer lifespan on plant-based diets (cited research)</div></div>
    </div>

    <div class="chip-row">
      <a class="chip" href="https://wildearth.com/" target="_blank" rel="noopener">🌐 wildearth.com</a>
      <a class="chip" href="https://wildearth.com/collections/all" target="_blank" rel="noopener">🛒 Shop All</a>
      <a class="chip" href="https://wildearth.com/pages/our-story" target="_blank" rel="noopener">🐾 Our Story</a>
      <a class="chip" href="https://www.instagram.com/wildearthpets/" target="_blank" rel="noopener">📷 @wildearthpets</a>
      <a class="chip" href="https://www.tiktok.com/@wildearthpets" target="_blank" rel="noopener">🎵 TikTok</a>
      <a class="chip" href="https://www.facebook.com/wildearthpets" target="_blank" rel="noopener">👍 Facebook</a>
      <a class="chip" href="https://www.youtube.com/@WildEarthPets" target="_blank" rel="noopener">▶️ YouTube</a>
      <a class="chip" href="mailto:hello@wildearth.com" target="_blank" rel="noopener">✉️ hello@wildearth.com</a>
      <a class="chip" href="tel:8339453738" target="_blank" rel="noopener">📞 833-945-3738</a>
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
        <a class="toc-tile" href="#why-premium"><span class="toc-tile-num">02</span><span class="toc-tile-label">Why Pet Parents Pay Premium</span></a>
        <a class="toc-tile" href="#products"><span class="toc-tile-num">03</span><span class="toc-tile-label">Product Line</span></a>
        <a class="toc-tile" href="#ingredients"><span class="toc-tile-num">04</span><span class="toc-tile-label">Ingredients & Formulation</span></a>
        <a class="toc-tile" href="#vision"><span class="toc-tile-num">05</span><span class="toc-tile-label">Vision, Mission & Pillars</span></a>
        <a class="toc-tile" href="#voice"><span class="toc-tile-num">06</span><span class="toc-tile-label">Brand Voice & Tone</span></a>
        <a class="toc-tile" href="#personality"><span class="toc-tile-num">07</span><span class="toc-tile-label">Brand Personality</span></a>
        <a class="toc-tile" href="#visual"><span class="toc-tile-num">08</span><span class="toc-tile-label">Visual Identity</span></a>
        <a class="toc-tile" href="#audience"><span class="toc-tile-num">09</span><span class="toc-tile-label">Audience & Personas</span></a>
        <a class="toc-tile" href="#competitors"><span class="toc-tile-num">10</span><span class="toc-tile-label">Competitors & Positioning</span></a>
        <a class="toc-tile" href="#objections"><span class="toc-tile-num">11</span><span class="toc-tile-label">Objection Handling</span></a>
        <a class="toc-tile" href="#journey"><span class="toc-tile-num">12</span><span class="toc-tile-label">Customer Journey</span></a>
        <a class="toc-tile" href="#data"><span class="toc-tile-num">13</span><span class="toc-tile-label">Health & Survey Data</span></a>
        <a class="toc-tile" href="#marketing"><span class="toc-tile-num">14</span><span class="toc-tile-label">Marketing Angles & Hooks</span></a>
        <a class="toc-tile" href="#creatives"><span class="toc-tile-num">15</span><span class="toc-tile-label">Sample Winning Creatives</span></a>
        <a class="toc-tile" href="#social"><span class="toc-tile-num">16</span><span class="toc-tile-label">Social & Digital</span></a>
        <a class="toc-tile" href="#partners"><span class="toc-tile-num">17</span><span class="toc-tile-label">Partnerships & Influencer</span></a>
        <a class="toc-tile" href="#discounts"><span class="toc-tile-num">18</span><span class="toc-tile-label">Discounts & Promo Codes</span></a>
        <a class="toc-tile" href="#seo"><span class="toc-tile-num">19</span><span class="toc-tile-label">SEO</span></a>
        <a class="toc-tile" href="#cro"><span class="toc-tile-num">20</span><span class="toc-tile-label">CRO</span></a>
        <a class="toc-tile" href="#glossary"><span class="toc-tile-num">21</span><span class="toc-tile-label">Glossary</span></a>
        <a class="toc-tile" href="#returns"><span class="toc-tile-num">22</span><span class="toc-tile-label">Return Policy</span></a>
        <a class="toc-tile" href="#fulfillment"><span class="toc-tile-num">23</span><span class="toc-tile-label">Fulfillment & Shipping</span></a>
        <a class="toc-tile" href="#test-orders"><span class="toc-tile-num">24</span><span class="toc-tile-label">Test Orders</span></a>
        <a class="toc-tile" href="#shopify"><span class="toc-tile-num">25</span><span class="toc-tile-label">Shopify Platform</span></a>
        <a class="toc-tile" href="#faq"><span class="toc-tile-num">26</span><span class="toc-tile-label">FAQ</span></a>
        <a class="toc-tile" href="#resources"><span class="toc-tile-num">27</span><span class="toc-tile-label">Resources & Contacts</span></a>
        <a class="toc-tile" href="#quiz-section"><span class="toc-tile-num">28</span><span class="toc-tile-label">Knowledge Check Quiz</span></a>
      </div>
    </div>
  </div>
</section>

<!-- OVERVIEW -->
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
      <p style="margin:0">Welcome! This hub is the single source of truth for Wild Earth across every team at Inventel — CX, Creative, Marketing, Engineering, and Brand. If you're new, read top-to-bottom once, then take the quiz at the end. If you're role-specific, look for the colored callouts throughout: <strong>green = CX</strong>, <strong>orange = Creative</strong>, <strong>purple = Marketing</strong>, <strong>dark green = Brand</strong>. Your onboarding trainer will want proof of quiz completion — that's what the print certificate at the end is for.</p>
    </div>

    <p>Wild Earth was founded in 2017 by biotech entrepreneur and lifelong animal lover Ryan Bethencourt with a bold premise: dogs don't need meat to thrive. Frustrated by what he found inside traditional pet food — non-human-grade meat, fillers, and serious recalls — Ryan applied his background in synthetic biology to build a better bowl. The brand launched with koji-based superfood treats, then evolved into nutritionally complete, vet-developed dog kibble powered by yeast, chickpeas, oats, sweet potato, and other clean plant ingredients.</p>
    <p>Wild Earth stepped onto the Shark Tank stage in 2019 and walked away with a $550,000 deal from Mark Cuban for 10% equity. That appearance catapulted the brand into the national conversation — and Cuban's ongoing mentorship helped unlock larger venture rounds from Mars Petcare, Peter Thiel's Founders Fund, Felicis Ventures, and others, bringing total funding to over $39M. The brand reached $21M in annual revenue by 2024 and expanded from direct-to-consumer to retail shelves at Petco and independent pet stores nationwide.</p>
    <p><strong>In 2025, Wild Earth was acquired by Inventel</strong> and is now part of the Inventel brand portfolio. Day-to-day operations — fulfillment, CX, marketing, and the Shopify storefront — run through Inventel teams, and every Wild Earth order ships from and returns to the Inventel warehouse in Pompton Plains, NJ. This hub is built for Inventel employees supporting Wild Earth as an in-house brand.</p>
    <p>Today, Wild Earth sells a full line of plant-based dog food, treats, and a plant-based cat food — all formulated to meet or exceed AAFCO standards. Every product is hypoallergenic (free from beef, dairy, chicken, wheat, soy), made in the USA, and backed by Inventel's standard 30-day return policy. Customers subscribe through wildearth.com or shop single bags and retail channels.</p>
    <div class="tag-row">
      <span class="tag">Inventel Brand</span>
      <span class="tag">DTC + Retail</span>
      <span class="tag">Subscription</span>
      <span class="tag">Plant-Based</span>
      <span class="tag">Vet-Developed</span>
      <span class="tag">Cruelty-Free</span>
      <span class="tag">Shark Tank</span>
      <span class="tag">AAFCO Certified</span>
      <span class="tag">Hypoallergenic</span>
      <span class="tag">Made in USA</span>
      <span class="tag">Sustainable</span>
    </div>
    </div>
  </div>
</section>

<!-- WHY PET PARENTS PAY PREMIUM -->
<section id="why-premium">
  <div class="card collapsible" data-section="why-premium">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">02 · Why Pet Parents Pay Premium</span>
        <h2>Why Pet Parents Pay Premium for Pet Food</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <div class="team-callout newhire">
      <span class="team-tag">New Hire — Read This Before Anything Else</span>
      <p style="margin:0">If you're new to the team — especially if you grew up in a country where dogs and cats are working animals, street animals, or simply not part of family life — this section is essential. It explains <strong>why a customer in California will pay $60 for a bag of dog food</strong> when the same money could feed a person for a week. It's not a luxury problem. It's a deep cultural reality, and understanding it is the difference between a CX agent who sounds robotic and one who sounds like they actually <em>get</em> the customer on the other end of the line.</p>
    </div>

    <h3 style="margin-top:24px">In the United States, Pets Are Family Members</h3>
    <p>To most American customers calling our support line, the dog or cat in their home is <strong>not a pet in the way the word translates in many languages</strong>. They are not livestock, not guard animals, not yard animals. They sleep in the bed. They have birthdays. They get holiday gifts. They have a name on the family Christmas card. When the customer says "my baby" or "my fur baby," they are not joking — that is genuinely how they feel. Many Americans love their dog or cat with the same depth of feeling that they love their human children, and a non-trivial number love them <em>more</em>.</p>

    <p>This shows up in the language customers use, and CX should not be thrown by it:</p>
    <ul style="margin-left:20px">
      <li><strong>"My fur baby"</strong> · <strong>"My pup"</strong> · <strong>"My boy"</strong> / <strong>"my girl"</strong> · <strong>"My kid"</strong> — all common ways an American refers to their dog or cat. Treat it as a sign of how much they care, not as strange.</li>
      <li><strong>"Dog mom"</strong> / <strong>"Dog dad"</strong> / <strong>"Pet parent"</strong> / <strong>"Pup parent"</strong> — these are how customers describe themselves. Wild Earth marketing uses these terms constantly. Use them back.</li>
      <li><strong>"My family"</strong> — when a customer says their dog is part of "my family," they are being literal, not poetic.</li>
    </ul>

    <h3 style="margin-top:24px">The Scale of This Is Hard to Overstate</h3>
    <div class="stat-boxes">
      <div class="stat-box"><div class="stat-big">~66%</div><div class="stat-lbl">Of US households own a pet — roughly 87 million homes</div></div>
      <div class="stat-box"><div class="stat-big">$150B+</div><div class="stat-lbl">US pet industry annual spend (food, vet, care, services)</div></div>
      <div class="stat-box"><div class="stat-big">$1,500+</div><div class="stat-lbl">Average annual spend per pet (food + vet + supplies)</div></div>
      <div class="stat-box"><div class="stat-big">94%</div><div class="stat-lbl">Of pet parents say health & nutrition is the most important purchase factor (Knight et al.)</div></div>
      <div class="stat-box"><div class="stat-big">~4M</div><div class="stat-lbl">Dogs adopted from US shelters and rescues each year</div></div>
      <div class="stat-box"><div class="stat-big">#1</div><div class="stat-lbl">Pet food is the largest category in pet spending — and the premium tier is the fastest-growing</div></div>
    </div>

    <h3 style="margin-top:24px">Rescue & Adoption Culture</h3>
    <p>A huge portion of American pets — likely <strong>the majority of dogs Wild Earth feeds</strong> — were not bought from a breeder. They were <strong>rescued from a shelter, pound, or rescue group</strong>. A "pound" or "shelter" in the US is a facility that takes in stray, abandoned, or surrendered animals. Without adoption, many of those animals would be euthanized. "Adopt don't shop" is a cultural slogan, and adopting a dog or cat from a shelter is widely seen as the <em>more virtuous</em> choice over buying one.</p>

    <p>This matters for CX and marketing because:</p>
    <ul style="margin-left:20px">
      <li>The customer often feels they <strong>literally saved this animal's life</strong> — and now they want to give it the best food possible to make up for whatever it went through before.</li>
      <li>Many rescued animals come with <strong>health issues, allergies, anxiety, food sensitivities</strong> — which is exactly the customer Wild Earth's hypoallergenic, plant-based formula is designed for.</li>
      <li>"Rescue dog" / "rescue cat" is a label customers will use proudly. Recognize it. ("Sounds like Bella has been through a lot — the formula sensitivities you're describing are really common with rescues.")</li>
    </ul>

    <h3 style="margin-top:24px">Why They'll Pay $60+ for a Bag of Dog Food</h3>
    <p>Wild Earth kibble can cost 2–3× the price of mass-market grocery-store kibble. Mass market exists, and it's cheap. So why does anyone pay our prices? Five reasons stack on top of each other, and most customers feel several of them at once:</p>

    <table>
      <thead><tr><th>Driver</th><th>What the Customer is Really Saying</th></tr></thead>
      <tbody>
        <tr><td><strong>1. Health & longevity</strong></td><td>"I want more good years with my dog. If a better food gives me even one extra year, it's worth any price."</td></tr>
        <tr><td><strong>2. Allergies & sensitivities</strong></td><td>"My dog has been itching, vomiting, or having ear infections for years. I've spent thousands at the vet. I'll try anything that might fix it."</td></tr>
        <tr><td><strong>3. Distrust of mass-market pet food</strong></td><td>"I read the label on grocery-store kibble — 'meat by-products,' unnamed sources. I don't want that in my dog's body."</td></tr>
        <tr><td><strong>4. Ethical alignment</strong></td><td>"I'm vegan / vegetarian / care about animal welfare. Feeding factory-farmed meat to my dog feels wrong."</td></tr>
        <tr><td><strong>5. Environmental concern</strong></td><td>"Pet food contributes 25–30% of the environmental impact of US animal agriculture. I want a smaller footprint."</td></tr>
      </tbody>
    </table>

    <p style="margin-top:14px">Notice that <em>price is not on this list</em>. For our customer, finding the cheapest option is not the goal — finding the food they trust most for an animal they love is the goal. That's why we lead with health, ingredient quality, and the brand story, not with discounts.</p>

    <div class="team-callout cx" style="margin-top:18px">
      <span class="team-tag">CX — How This Changes the Way You Talk to Customers</span>
      <p style="margin:0">When a customer is upset about a delayed shipment, a refund, or a formula change, remember: <strong>this is not a transaction to them — it's their family member's food</strong>. A 3-day shipping delay on a bag of kibble feels to them like a 3-day delay on their child's dinner. Lead with empathy ("I completely understand — let's get this sorted for [pet's name] right away"), use the pet's name when you have it, and never refer to the pet as "it." Always "he," "she," or by name. This single habit will change how every call lands.</p>
    </div>

    <div class="team-callout marketing" style="margin-top:10px">
      <span class="team-tag">Marketing — Lean Into the Family Frame</span>
      <p style="margin:0">Every winning Wild Earth ad treats the dog as a family member, not a product user. Headlines that work: "Your dog deserves better." / "I rescued him. Then I rescued his bowl." / "What you put in their bowl is what you put in your family." Headlines that don't work: anything that frames the dog as livestock, equipment, or a feature-comparison object.</p>
    </div>

    <div class="team-callout creative" style="margin-top:10px">
      <span class="team-tag">Creative — Visual Direction</span>
      <p style="margin:0">Show the dog or cat <em>inside the home</em> — on the couch, on the bed, in the family photo, being hugged by the human. Avoid stock photography of dogs in kennels, on leashes, or in clinical settings. The bowl is part of the household, not a pet-store aisle.</p>
    </div>

    <p style="font-size:13px;color:var(--we-text-muted);font-style:italic;margin-top:16px">💡 <strong>Bottom line for every team:</strong> Wild Earth doesn't sell dog food. We sell longer, healthier lives for animals that customers consider family. That framing is what justifies the price tag — and what should shape every conversation we have with a customer, every ad we run, and every product page we write.</p>

    </div>
  </div>
</section>

<!-- PRODUCT LINE -->
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
    <p>Wild Earth's catalog breaks into three core categories: kibble (the flagship), superfood treats, and functional supplements. All products are 100% plant-based and free of the top 10 pet food allergens (beef, dairy, chicken, wheat, lamb, pork, egg, soy, rabbit, fish).</p>

    <p style="background:rgba(45,106,79,.06);border-left:4px solid var(--we-green);padding:12px 16px;border-radius:6px;margin-top:14px;font-size:14px"><strong>📌 Note on pricing:</strong> Pricing is set and updated on the Shopify storefront and changes regularly with promotions, subscription discounts, and seasonal offers. <strong>Always pull the current price from the live product page</strong> before quoting it to a customer — never quote from memory or from this hub. Click the "View product page" link on any row below to jump straight to the live page. Browse the full live catalog at <a href="https://wildearth.com/collections/all" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">wildearth.com/collections/all</a>.</p>

    <h3 style="margin-top:24px">🥣 Dog Food (Dry Kibble)</h3>
    <table>
      <thead>
        <tr><th>Product</th><th>Key Ingredients & Features</th><th>Highlights</th><th>Category</th></tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Performance Formula — Veggie Supreme</strong><br><span style="font-size:12px;color:var(--we-text-muted)">4 lb or 18 lb bags · <a href="https://wildearth.com/products/performance-formula-dog-food" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">View product page for current pricing →</a></span></td>
          <td>Dried yeast, barley, oats, grain sorghum, potato protein, millet, sweet potato, flaxseed, marine microalgae (DHA), Taurine, L-Carnitine, superfoods (blueberries, cranberries, pumpkin, spinach)</td>
          <td>28% crude protein · Poultry-style flavor · For active, aging, or recovering dogs · Prebiotic fiber</td>
          <td><span class="badge badge-kibble">Dog Food</span></td>
        </tr>
        <tr>
          <td><strong>Maintenance Formula — Classic Roast</strong><br><span style="font-size:12px;color:var(--we-text-muted)">4 lb or 28 lb bags · <a href="https://wildearth.com/products/maintenance-formula-dog-food" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">View product page for current pricing →</a></span></td>
          <td>Barley, brown rice, grain sorghum, dried yeast, potato protein, millet, sweet potato, flaxseed, turmeric, black pepper extract, Taurine, L-Carnitine</td>
          <td>23% protein · Smoky "beef-like" notes · Limited ingredients for sensitive dogs · Everyday balanced nutrition</td>
          <td><span class="badge badge-kibble">Dog Food</span></td>
        </tr>
        <tr style="opacity:.65;background:rgba(0,0,0,.02)">
          <td><strong style="text-decoration:line-through">Maintenance Formula — Golden Rotisserie</strong> <span style="display:inline-block;background:var(--we-danger);color:#fff;font-family:'DM Mono',monospace;font-size:9px;font-weight:700;letter-spacing:.12em;padding:3px 7px;border-radius:4px;margin-left:6px;vertical-align:middle;text-transform:uppercase">Discontinued</span><br><span style="font-size:12px;color:var(--we-text-muted)">No longer sold</span></td>
          <td><em>No longer sold</em></td>
          <td><em>Recently discontinued — see CX note below</em></td>
          <td><span class="badge badge-kibble">Dog Food</span></td>
        </tr>
      </tbody>
    </table>

    <div class="team-callout cx" style="margin-top:14px">
      <span class="team-tag">CX · Discontinued — Golden Rotisserie</span>
      <p style="margin:0"><strong>Maintenance Formula — Golden Rotisserie was recently discontinued</strong> and is no longer sold in any size. If a subscription customer was on it, transition them to <strong>Maintenance Formula — Classic Roast</strong> — same base recipe, 23% protein, limited ingredient, just a different flavor profile (smoky beef-like rather than poultry/rosemary). Most dogs move over seamlessly. If a customer specifically loved the rosemary/poultry notes, let them know we'll flag any future reintroduction, and offer them a one-time courtesy discount on their next Classic Roast order (check the monthly discount sheet for the current CX code).</p>
    </div>
    <p style="font-size:13px;color:var(--we-text-muted);font-style:italic;margin-top:12px">⚠️ <strong>Education point:</strong> Wild Earth kibble is for adult dogs (1 year+) only — <em>not</em> puppies. AAFCO has separate standards for growth-stage nutrition that Wild Earth does not currently meet. Both formulas are free of legumes to address industry concerns around DCM.</p>

    <h3 style="margin-top:28px">🐱 Cat Food</h3>
    <table>
      <thead>
        <tr><th>Product</th><th>Key Ingredients & Features</th><th>Highlights</th><th>Category</th></tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Unicorn Pate Plant-Based Cat Food</strong><br><span style="font-size:12px;color:var(--we-text-muted)">Wet pâté · <a href="https://wildearth.com/products/unicorn-pate-plant-based-cat-food" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">View product page for current pricing →</a></span></td>
          <td>Plant-based pâté fortified with added Taurine; healthy fiber; simple ingredients; no grains added; no animal by-products</td>
          <td>Nutritionally complete · Fortified with Taurine (essential for cats) · No artificial flavors, no added hormones, cruelty-free</td>
          <td><span class="badge badge-catfood">Cat Food</span></td>
        </tr>
      </tbody>
    </table>
    <p style="font-size:13px;color:var(--we-text-muted);font-style:italic">⚠️ <strong>Education point on cats & taurine:</strong> Cats cannot produce their own taurine and will develop serious health issues without it. Unicorn Pate is fortified with supplemental taurine specifically to meet this obligate carnivore need — it is the cornerstone of the formula being plant-based yet nutritionally complete for cats.</p>

    <h3 style="margin-top:28px">🦴 Superfood Treats</h3>
    <table>
      <thead>
        <tr><th>Product</th><th>Key Ingredients & Features</th><th>Highlights</th><th>Category</th></tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>3 Pack — Superfood Dog Treats with Koji</strong><br><span style="font-size:12px;color:var(--we-text-muted)">5 oz per bag · 3 flavors · <a href="https://wildearth.com/products/superfood-dog-treats-with-koji" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">View product page for current pricing →</a></span></td>
          <td>Koji (dried <em>Aspergillus oryzae</em>) as the hero protein, plus flavor-specific add-ins</td>
          <td>Variety pack with all three flavors · Low-calorie · Plant-based · Koji-powered</td>
          <td><span class="badge badge-bundle">Treats</span></td>
        </tr>
        <tr>
          <td><strong>Peanut Butter Superfood (single flavor)</strong><br><span style="font-size:12px;color:var(--we-text-muted)"><a href="https://wildearth.com/collections/all" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">View product page for current pricing →</a></span></td>
          <td>Koji, peanut butter, oats, banana</td>
          <td>Crowd favorite · Great for training rewards</td>
          <td><span class="badge badge-treat">Treat</span></td>
        </tr>
        <tr>
          <td><strong>Strawberry & Beet Superfood (single flavor)</strong><br><span style="font-size:12px;color:var(--we-text-muted)"><a href="https://wildearth.com/collections/all" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">View product page for current pricing →</a></span></td>
          <td>Koji, strawberries, dehydrated beets, oats</td>
          <td>Antioxidant-rich · Naturally red color</td>
          <td><span class="badge badge-treat">Treat</span></td>
        </tr>
        <tr>
          <td><strong>Banana & Cinnamon Superfood (single flavor)</strong><br><span style="font-size:12px;color:var(--we-text-muted)"><a href="https://wildearth.com/collections/all" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">View product page for current pricing →</a></span></td>
          <td>Koji, banana, cinnamon, oats</td>
          <td>Gentle on sensitive stomachs · Naturally sweet</td>
          <td><span class="badge badge-treat">Treat</span></td>
        </tr>
      </tbody>
    </table>
    <p style="font-size:13px;color:var(--we-text-muted);font-style:italic;margin-top:14px">⚠️ <strong>Education point on koji:</strong> Koji (<em>Aspergillus oryzae</em>) is the same fungus used to ferment soy sauce, miso, and sake — a food-grade ingredient with thousands of years of human use. It's not a "mold" in any concerning sense. Koji contains all 10 essential amino acids dogs need and is the hero ingredient that differentiates Wild Earth from other plant-based brands.</p>

    <h3 style="margin-top:28px">💊 Supplements <span style="font-size:.75em;font-weight:400;color:var(--we-danger);font-style:italic">(Discontinued)</span></h3>
    <div style="background:rgba(184,57,31,.06);border:1px solid var(--we-danger);border-radius:10px;padding:20px;margin-top:10px">
      <p style="margin-bottom:0;font-size:14px;color:var(--we-text)"><strong>⚠️ Wild Earth supplement chews have been discontinued</strong> and are no longer available for purchase through wildearth.com or retail partners. If a customer asks about Hip & Joint, Skin & Coat, Digestive, or Calming supplement chews, let them know these SKUs are no longer in the lineup. Direct them instead to the <strong>Performance Formula</strong> (which contains added DHA, Taurine, L-Carnitine, prebiotics, and omegas) as the current go-to for total-body support.</p>
    </div>

    <h3 style="margin-top:32px">📦 How Customers Actually Buy: The Subscription Model</h3>

    <div class="team-callout newhire" style="margin-top:14px">
      <span class="team-tag">New Hire — Read This Before Taking a Subscription Call</span>
      <p style="margin:0">If you grew up in a market where you buy dog food at a supermarket once a month and that's the end of it, the subscription model will feel unfamiliar. <strong>Most Wild Earth customers don't buy bags one at a time. They sign up for a recurring auto-shipment</strong> — fresh food gets sent to their door on a schedule they pick, charged automatically each cycle. They keep that subscription for months or years. Subscription is by far the dominant way customers buy from us, and the majority of every CX shift will involve subscription questions.</p>
    </div>

    <h4 style="margin-top:22px">What a Subscription Is</h4>
    <p>Think of it like a Netflix or Spotify membership — but for physical food instead of streaming content. The customer signs up once on wildearth.com (or via a paid-ad / email landing page that auto-applies a sign-up offer), picks the product and the frequency, and from that moment on:</p>
    <ul style="margin-left:20px">
      <li><strong>Wild Earth ships them food automatically</strong> on the schedule they chose — every X weeks, no further action needed.</li>
      <li><strong>Their card is charged automatically</strong> each cycle, at the discounted subscriber price.</li>
      <li><strong>They can pause, skip a single shipment, change the date, change frequency, swap products, change quantity, or cancel</strong> — anytime, in their account on wildearth.com → Subscriptions tab.</li>
      <li><strong>Wild Earth emails them a few days before each charge</strong> so they have a window to skip or adjust before being billed.</li>
    </ul>
    <p>The subscription engine running this is <strong>Recharge</strong> (see Glossary and the Discounts section for how Recharge interacts with discount codes — the rule "active subscriber discounts apply in the account area, not at checkout" comes from how Recharge works).</p>

    <h4 style="margin-top:22px">Why Customers Subscribe (and Why It Matters That They Do)</h4>
    <p>Wild Earth is a <strong>heavy-subscription business</strong> — most revenue comes from recurring orders, not one-time purchases. Customer LTV on subscription is multiples of OTP. Once a customer makes it past the 30-day transition window, ~75%+ stay subscribed for 6+ months (see Health & Survey Data). That's why protecting subscription health is a top-priority CX metric.</p>

    <table>
      <thead><tr><th>Why customers subscribe</th><th>What they're really saying</th></tr></thead>
      <tbody>
        <tr><td><strong>Convenience</strong></td><td>"I don't want to remember to reorder. I want it to just show up."</td></tr>
        <tr><td><strong>Better price</strong></td><td>"Subscribers get a meaningful discount vs. one-time-purchase customers — Subscribe & Save is evergreen."</td></tr>
        <tr><td><strong>Never run out</strong></td><td>"My dog can't skip dinner. The food has to be there."</td></tr>
        <tr><td><strong>Set-and-forget</strong></td><td>"Once we're on the right food and frequency, I just want it handled."</td></tr>
      </tbody>
    </table>

    <h4 style="margin-top:22px">Frequency — The Single Most Confusing Part</h4>
    <p><strong>"Frequency"</strong> is how often we ship the next order — every 2 weeks, every 4 weeks, every 6 weeks, every 8 weeks, every 10 weeks, etc. The customer picks this when they sign up, and they can change it any time in their account. Wild Earth offers a wide range of frequency options precisely <em>because there is no one right answer</em>.</p>

    <p style="background:rgba(184,57,31,.06);border-left:4px solid var(--we-danger);padding:12px 16px;border-radius:6px;margin-top:12px"><strong>⚠️ There is no standard, default, or "common" frequency.</strong> Frequency depends entirely on the household — and this is where customers (and new agents) get the most confused. Every household burns through a bag of food at a different rate. There is no one-size-fits-all answer, and CX should never quote a default. If an agent says "most people ship every 4 weeks," that sets the customer up for either too much food or running out — both of which generate cancellations.</p>

    <p>What actually drives frequency:</p>
    <ul style="margin-left:20px">
      <li><strong>Size of the pet.</strong> A 10-pound Chihuahua eats a fraction of what a 90-pound Golden Retriever eats. Same bag, vastly different burn-through speed. <strong>Bigger dog → more frequent shipments</strong> (or a bigger bag).</li>
      <li><strong>Number of pets in the household.</strong> Two medium dogs share a bag. Four dogs split it faster. A single small dog stretches it for weeks. <strong>More pets → more frequent shipments.</strong></li>
      <li><strong>Bag size on the subscription.</strong> A 4-lb bag and an 18-lb bag will obviously empty at very different rates. The customer can subscribe to multiple bags per shipment if needed.</li>
      <li><strong>Other food sources.</strong> If the customer also feeds wet food, treats, or human-food table scraps, the kibble lasts longer.</li>
      <li><strong>Activity level.</strong> A working farm dog eats more than a senior couch dog of the same weight.</li>
    </ul>

    <h4 style="margin-top:22px">Real-World Frequency Examples</h4>
    <p>These are rough <em>starting points only</em> — every customer's actual burn rate is different. Use these to give context and help a customer think through their household, never to set a hard expectation:</p>

    <table>
      <thead><tr><th>Household</th><th>Bag size on subscription</th><th>Approximate frequency</th></tr></thead>
      <tbody>
        <tr><td>One small dog (10–20 lb)</td><td>18 lb Performance Formula</td><td>Every 8–10 weeks</td></tr>
        <tr><td>One medium dog (30–50 lb)</td><td>18 lb Performance Formula</td><td>Every 4–5 weeks</td></tr>
        <tr><td>One large dog (60–90 lb)</td><td>18 lb Performance Formula</td><td>Every 2–3 weeks <em>(often better to upgrade them to the 28-lb Maintenance Formula for fewer shipments)</em></td></tr>
        <tr><td>Two medium dogs</td><td>28 lb Maintenance Formula</td><td>Every 3–4 weeks</td></tr>
        <tr><td>Three or more dogs</td><td>28 lb Maintenance Formula</td><td>Every 2–3 weeks, possibly with multiple bags per shipment</td></tr>
      </tbody>
    </table>

    <p style="margin-top:14px;font-size:14px"><strong>Two levers, same goal:</strong> the bigger the dog (or the more dogs), the more frequent the shipments — <em>or</em> the bigger the bag (or more bags per shipment). Both achieve the same outcome of having food on hand. Customers should pick whichever they prefer: more shipments of a smaller bag, or fewer shipments of a larger bag. Larger bags are usually slightly cheaper per pound, so when in doubt, fewer-but-bigger is the better-value option.</p>

    <div class="team-callout cx" style="margin-top:18px">
      <span class="team-tag">CX — The Two Most Common Subscription Calls</span>
      <p style="margin:8px 0 6px;font-weight:600">1. "I have too much food piling up — your shipments are coming too often."</p>
      <p style="margin:0 0 12px;font-size:14px;line-height:1.55">Frequency is too tight for their actual burn rate. Two fixes: <strong>(a)</strong> push the next order date out by however long they need to use what they have, then increase the interval going forward (e.g., from every 4 weeks to every 6 weeks); or <strong>(b)</strong> skip the next order entirely. Both options live in the customer's account → Subscriptions tab. <em>Walk them through the clicks</em> — don't just tell them "it's in your account." A guided walkthrough is the difference between a happy customer and a churn risk.</p>
      <p style="margin:0 0 6px;font-weight:600">2. "I ran out of food before the next bag arrived."</p>
      <p style="margin:0;font-size:14px;line-height:1.55">Frequency is too long for their burn rate. Two fixes: <strong>(a)</strong> tighten the interval (e.g., from every 8 weeks to every 6 weeks); or <strong>(b)</strong> upgrade them to a larger bag size on the same frequency. The bigger bag is often cheaper per pound and means fewer shipments — an upsell that's actually in the customer's interest. If they had to buy emergency food elsewhere, offer a one-time courtesy expedited shipment <em>or</em> a goodwill discount on their next order (use the current CX goodwill code from the monthly discount sheet).</p>
    </div>

    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX — Helping a New Subscriber Pick a Frequency</span>
      <p style="margin:0;font-size:14px">If a new subscriber asks <em>"how often should I get a shipment?"</em> — don't guess and don't quote a default. Ask three questions: <strong>(1) How many pets, and what does each weigh? (2) Which bag size are you on? (3) Do you also feed wet food, treats, or table scraps?</strong> Then walk them through the table above and let them pick. Better to start a little tight (they can always skip a shipment) than too loose (they'll run out and panic-cancel). They can adjust at any time, and we'd rather have them adjusting than churning.</p>
    </div>

    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX — Subscription Account Walkthrough</span>
      <p style="margin:0;font-size:14px">When a customer needs to make changes, the path is always the same: <strong>(1)</strong> Log into wildearth.com. <strong>(2)</strong> Click their account icon → <strong>Subscriptions</strong> tab. <strong>(3)</strong> From there they can: skip the next shipment, change the next ship date, change frequency, swap to a different product, change quantity, update the shipping address, update the payment method, or cancel. If they can't log in, walk them through password reset before transferring. Changes made at least 24 hours before the next charge will apply to that order; changes made after the charge runs apply to the cycle after.</p>
    </div>

    <div class="team-callout marketing" style="margin-top:10px">
      <span class="team-tag">Marketing — Subscription is the Business</span>
      <p style="margin:0;font-size:14px">Wild Earth's economics rest on subscription. Every paid-media test, every email flow, every landing page should optimize for the subscription sign-up over the OTP sign-up. Subscriber LTV is multiples of OTP LTV, and the ~75%+ 6-month retention past the 30-day transition window is what justifies a higher CAC on subscriber acquisition. When deciding between a creative angle that drives OTP buys and one that drives subscription sign-ups, default to subscription.</p>
    </div>

    <p style="font-size:13px;color:var(--we-text-muted);font-style:italic;margin-top:14px">💡 <strong>Bottom line:</strong> Wild Earth doesn't sell bags of dog food — it sells an ongoing relationship that delivers food to a customer's door every few weeks. Frequency is the lever that makes that relationship work. Get it right and the customer stays for years; get it wrong and they cancel after their second shipment.</p>
    </div>
  </div>
</section>

<!-- INGREDIENTS & FORMULATION -->
<section id="ingredients">
  <div class="card collapsible" data-section="ingredients">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">04 · Ingredients & Formulation</span>
        <h2>Ingredients & Formulation</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <p>This section is for CX, Marketing, and anyone fielding the <em>"what's actually in this stuff?"</em> question — which we get a lot. Wild Earth publishes a full ingredient glossary on the website at <a href="https://wildearth.com/pages/ingredients" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">wildearth.com/pages/ingredients</a>. Send curious customers there for the deep dive. The summary below is what every Inventel team should know on call, in chat, or while writing copy.</p>

    <div class="team-callout cx" style="margin-top:14px">
      <span class="team-tag">CX — Where to Send Customers</span>
      <p style="margin:0">For any "what is [ingredient]?" or "is [ingredient] safe?" question, the official source of truth is <strong><a href="https://wildearth.com/pages/ingredients" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">wildearth.com/pages/ingredients</a></strong>. It has every ingredient broken out individually with a plain-English explanation. Bookmark this page — you'll use it more than you think. For dry-matter / nutritional analysis questions, the panel is on each individual product page on the Shopify store.</p>
    </div>

    <h3 style="margin-top:24px">The Big Picture: What Wild Earth Is Built From</h3>
    <p>Wild Earth's complete-and-balanced kibble is built around <strong>plant and fungal proteins</strong> instead of animal meat. Three protein workhorses do most of the heavy lifting:</p>

    <table>
      <thead><tr><th>Protein Source</th><th>What It Is</th><th>Why It's Used</th></tr></thead>
      <tbody>
        <tr><td><strong>Dried Yeast</strong> (Saccharomyces)</td><td>The same family of yeast used in baking and brewing, dried into a high-protein powder. The <strong>#1 ingredient in Performance Formula</strong> and a major ingredient in Maintenance Formula.</td><td>49% protein by weight (vs. ~24% for beef), packed with B vitamins, fiber, and antioxidants. AAFCO-approved (91.6 IFN 7-05-533) and FDA GRAS-classified. Highly scalable and sustainable.</td></tr>
        <tr><td><strong>Koji</strong> (<em>Aspergillus oryzae</em> fermentation product)</td><td>A food-grade fungus used for thousands of years in soy sauce, miso, and sake production. The <strong>hero ingredient in Wild Earth treats</strong> and a supporting protein in older kibble formulas.</td><td>Contains <strong>all 10 essential amino acids dogs need</strong> — the only single plant-derived ingredient that does. Differentiator vs. other vegan brands.</td></tr>
        <tr><td><strong>Plant Proteins</strong> (Pea Protein, Potato Protein, Chickpeas)</td><td>Concentrated proteins extracted from peas, potatoes, and chickpeas.</td><td>Round out the amino-acid profile, add texture and palatability. <em>Note: chickpeas appear in older Clean Protein formulas. Newer Performance and Maintenance Formulas removed legumes — see DCM note below.</em></td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:24px">What Else Is in the Bag</h3>
    <p>Beyond protein, every Wild Earth kibble follows the same nutritional architecture:</p>

    <table>
      <thead><tr><th>Component</th><th>Examples in Wild Earth</th><th>Purpose</th></tr></thead>
      <tbody>
        <tr><td><strong>Carbs / Whole Grains</strong></td><td>Barley, brown rice, grain sorghum, oats, millet, sweet potato</td><td>Energy, fiber, micronutrients. Sweet potato is in every formula. Maintenance Classic Roast uses ancient grains as the base.</td></tr>
        <tr><td><strong>Healthy Fats & Oils</strong></td><td>Canola oil, sunflower oil, safflower oil, flaxseed</td><td>Source of energy and omega-3, -6, -9 fatty acids for skin and coat. All preserved with mixed tocopherols (natural Vitamin E).</td></tr>
        <tr><td><strong>Functional Nutrients</strong></td><td>Marine microalgae (DHAgold®), Taurine, L-Carnitine, choline chloride</td><td>DHA from algae for brain/eye health (algae is the original ocean source — fish just eat it). Taurine for heart health. L-Carnitine for metabolism.</td></tr>
        <tr><td><strong>Prebiotic Fiber</strong></td><td>Inulin (chicory root), Fructooligosaccharides (FOS)</td><td>Feeds beneficial gut bacteria, supports digestion and immune health.</td></tr>
        <tr><td><strong>Superfoods</strong></td><td>Blueberries, cranberries, pumpkin, spinach (Performance); turmeric + black pepper extract (Maintenance)</td><td>Antioxidants, anti-inflammatory compounds, vitamins, minerals.</td></tr>
        <tr><td><strong>Vitamins & Minerals</strong></td><td>Zinc proteinate, iron proteinate, copper proteinate, manganese proteinate, selenium yeast / sodium selenite, full B-vitamin lineup, Vitamins A / D2 / E</td><td>Chelated mineral forms ("proteinates") are bound to amino acids, which makes them more bioavailable than basic mineral salts.</td></tr>
        <tr><td><strong>Natural Preservatives</strong></td><td>Mixed tocopherols, rosemary extract</td><td>Plant-based alternatives to synthetic preservatives like BHA/BHT — which Wild Earth does <em>not</em> use.</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:24px">What's <em>Not</em> in Wild Earth</h3>
    <p>Just as important as what's in the bag is what isn't. Wild Earth is built from the ground up to exclude:</p>
    <ul style="margin-left:20px">
      <li><strong>The top 10 dog food allergens:</strong> beef, dairy, chicken, wheat, lamb, pork, egg, soy, rabbit, fish — the ingredients responsible for the vast majority of canine food allergies.</li>
      <li><strong>Animal by-products</strong> of any kind. No meat, no meat meal, no rendered animal fat.</li>
      <li><strong>Artificial preservatives</strong> like BHA, BHT, or ethoxyquin.</li>
      <li><strong>Artificial colors or flavors.</strong></li>
      <li><strong>Legumes</strong> (in newer Performance and Maintenance Formula recipes — see DCM note below).</li>
      <li><strong>Corn fillers</strong> and other cheap bulk ingredients common in mass-market kibble.</li>
    </ul>

    <h3 style="margin-top:24px">Nutritional Analysis & Dry Matter</h3>
    <p>"Dry matter" is the ingredient profile of a food <em>after water is removed</em> — it's the apples-to-apples way to compare a wet pâté to a dry kibble, since wet foods are mostly water by weight. Customers (and especially vets) sometimes ask for this. The headline numbers:</p>

    <table>
      <thead><tr><th>Product</th><th>Crude Protein</th><th>AAFCO Status</th><th>Notable</th></tr></thead>
      <tbody>
        <tr><td><strong>Performance Formula — Veggie Supreme</strong></td><td>28% (as-fed)</td><td>Adult maintenance</td><td>Highest-protein Wild Earth kibble. Comparable to or higher than most meat-based premium kibbles.</td></tr>
        <tr><td><strong>Maintenance Formula — Classic Roast</strong></td><td>23% (as-fed)</td><td>Adult maintenance</td><td>Limited-ingredient. Designed for sensitive dogs and everyday balanced nutrition.</td></tr>
        <tr><td><strong>Unicorn Pate (Cat)</strong></td><td>See product page</td><td>Meets AAFCO Cat Food Nutrient Profiles</td><td>Fortified with supplemental taurine — essential for obligate carnivore cats.</td></tr>
      </tbody>
    </table>

    <p style="margin-top:14px;font-size:14px">For the full guaranteed analysis (protein, fat, fiber, moisture, ash, omega-3, omega-6, taurine, calcium, phosphorus, etc.), customers should look at the <strong>nutritional analysis panel on each product page</strong>. We don't republish those numbers in this hub because they update with formula refinements and we want everyone working from the live source.</p>

    <h3 style="margin-top:24px">Sourcing & Manufacturing</h3>
    <p style="margin-bottom:8px">A few facts CX gets asked about regularly:</p>
    <ul style="margin-left:20px">
      <li><strong>Made in the USA</strong> with globally sourced ingredients.</li>
      <li><strong>Vet-developed</strong> in collaboration with veterinary nutritionists.</li>
      <li><strong>Yeast cultures</strong> are AAFCO-approved (91.6 IFN 7-05-533) and classified as Generally Recognized as Safe (GRAS) by the FDA.</li>
      <li><strong>DHA</strong> is sourced from <strong>marine microalgae (DHAgold®)</strong> — the original source of omega-3 in the ocean food chain. Fish get DHA by eating algae; we just go to the source.</li>
      <li><strong>AAFCO standards</strong> are met or exceeded for adult dog maintenance. Wild Earth kibble is <em>not</em> formulated for puppies (under 1 year) — AAFCO has separate growth-stage requirements.</li>
    </ul>

    <h3 style="margin-top:24px">The DCM Question (Comes Up Often)</h3>
    <p>Some customers — especially those who've read about Dilated Cardiomyopathy (DCM) and grain-free / legume-heavy pet foods — will ask whether plant-based food is safe in this context. The answer:</p>

    <ul style="margin-left:20px">
      <li>There is <strong>no established correlation between plant-based diets and DCM</strong>. Current research suggests that if a link exists between any diet and DCM, it's likely tied to nutritional deficiencies — not the protein source.</li>
      <li>Wild Earth is <strong>nutritionally complete</strong>, which addresses the deficiency concern directly. We supplement Taurine and L-Carnitine in every kibble, which are the heart-health amino acids most often discussed in DCM research.</li>
      <li>Out of an abundance of caution, the <strong>newer Performance Formula and Maintenance Formula recipes do not contain legumes</strong> (no peas, no chickpeas, no lentils) — even though there's no proven link. We removed them anyway. Older Clean Protein formulas did contain chickpeas and peas; those are being phased out.</li>
    </ul>

    <div class="team-callout cx" style="margin-top:14px">
      <span class="team-tag">CX — DCM Conversation Script</span>
      <p style="margin:0">If a customer brings up DCM concerns, lead with reassurance and facts: "That's a really thoughtful question — and one we get a lot. Current research shows no proven link between plant-based diets and DCM, and our newer Performance and Maintenance formulas are completely legume-free as an extra precaution. They're nutritionally complete with added Taurine and L-Carnitine specifically to support heart health. If you'd like, I can send you the link to our ingredients page where Dr. Abril Estrada, our Chief Product Officer, walks through this in detail." Then send the link.</p>
    </div>

    <div class="team-callout marketing" style="margin-top:10px">
      <span class="team-tag">Marketing — When to Lean In on Ingredients</span>
      <p style="margin:0">Ingredient transparency is one of Wild Earth's strongest moats. When pitching against mass-market brands, anchor on the named, traceable plants vs. unnamed "meat by-products" on competitor labels. When pitching against other plant-based brands, lead on koji + dried yeast as a complete amino-acid profile — not every vegan brand can say that.</p>
    </div>

    <div class="team-callout newhire" style="margin-top:10px">
      <span class="team-tag">New Hire — Memorize These Five Talking Points</span>
      <p style="margin:0">If a customer asks "what's actually in this?" you should be able to answer without a script: <strong>(1)</strong> Dried yeast as the main protein — same family as baking yeast, AAFCO-approved. <strong>(2)</strong> Koji in the treats — the fungus from soy sauce and miso, contains all 10 essential amino acids. <strong>(3)</strong> Sweet potato, oats, barley, and ancient grains for energy. <strong>(4)</strong> DHA from marine microalgae for brain health. <strong>(5)</strong> Zero meat, dairy, chicken, wheat, soy — the top allergens are out by design. For anything beyond that, send the customer to wildearth.com/pages/ingredients.</p>
    </div>

    </div>
  </div>
</section>

<!-- VISION, MISSION, PILLARS -->
<section id="vision">
  <div class="card collapsible" data-section="vision">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">05 · Vision, Mission & Pillars</span>
        <h2>Vision, Mission & Brand Pillars</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <div class="team-callout brand">
      <span class="team-tag">Brand Team — Governance</span>
      <p style="margin:0">Vision, Mission, and the four Pillars below are the <strong>load-bearing structure</strong> of everything Wild Earth says and does. Campaigns, product launches, and retail partnerships should all ladder up to at least one pillar. If something you're making doesn't fit — <strong>pause and check with the Brand Lead</strong> before it ships. These aren't decorative; they're the decision filter.</p>
    </div>

    <h3>Vision</h3>
    <p style="font-style:italic;font-family:'Playfair Display',serif;font-size:1.15rem;color:var(--we-forest);border-left:4px solid var(--we-green-light);padding-left:16px;margin-bottom:20px">"A world where every pet thrives on food that's both delicious and sustainable — and we're committed to leading the charge in transforming the pet food industry, one bowl at a time."</p>

    <h3>Mission</h3>
    <p style="font-style:italic;font-family:'Playfair Display',serif;font-size:1.15rem;color:var(--we-forest);border-left:4px solid var(--we-green-light);padding-left:16px;margin-bottom:24px">"To reinvent dog food — creating clean, plant-based nutrition that's better for pets, better for the planet, and free from the bad ingredients and bad practices of the meat-based pet food industry."</p>

    <h3>Brand Pillars</h3>
    <div class="pillars">
      <div class="pillar">
        <span class="pillar-icon">🌱</span>
        <h4>Plant-Powered</h4>
        <p>Complete nutrition from clean plant and fungi-based proteins — no meat, no by-products, no mystery.</p>
      </div>
      <div class="pillar">
        <span class="pillar-icon">🔬</span>
        <h4>Science-Backed</h4>
        <p>Formulated with veterinarians, nutritionists, and food scientists. AAFCO-compliant and vet-approved.</p>
      </div>
      <div class="pillar">
        <span class="pillar-icon">🌎</span>
        <h4>Planet-Friendly</h4>
        <p>Significantly less water, land, and CO₂ than meat-based kibble — addressing pet food's 25-30% share of US animal-ag impact.</p>
      </div>
      <div class="pillar">
        <span class="pillar-icon">💚</span>
        <h4>Cruelty-Free</h4>
        <p>No animals harmed to make our food. Compassion is an ingredient.</p>
      </div>
      <div class="pillar">
        <span class="pillar-icon">🔍</span>
        <h4>Radical Transparency</h4>
        <p>Every ingredient listed, every nutrient explained. Pet parents deserve to know exactly what's in the bowl.</p>
      </div>
      <div class="pillar">
        <span class="pillar-icon">🐾</span>
        <h4>Customer-First Support</h4>
        <p>Every order backed by responsive CX and a standard 30-day return policy on eligible products. If something isn't right, we make it right.</p>
      </div>
    </div>
    </div>
  </div>
</section>

<!-- VOICE & TONE -->
<section id="voice">
  <div class="card collapsible" data-section="voice">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">06 · Voice & Tone</span>
        <h2>Brand Voice & Tone</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>Wild Earth speaks like a smart friend who cares deeply about dogs and the planet — warm, curious, and confidently informed, never preachy or judgmental. We lead with love for pets, back it up with science, and keep the vibe joyful.</p>

    <div class="team-callout marketing">
      <span class="team-tag">Marketing — Voice Shortcuts</span>
      <p style="margin:0">If you're writing anything customer-facing, run it through this filter: <strong>would a smart, pet-loving friend actually say this out loud?</strong> Avoid corporate words (utilize, leverage, solution), avoid dog-parent cheese (fur baby, pupper — unless quoting a customer), and never shame competitors or people who feed kibble. Science is the backup, love is the lead.</p>
    </div>

    <div class="tone-grid">
      <div class="tone">
        <div class="tone-label">1. Warm & Friendly</div>
        <div class="tone-desc">Approachable, personal, never corporate.</div>
        <div class="tone-ex">"Welcome to the pack! We're so happy your pup is joining the Wild Earth family."</div>
      </div>
      <div class="tone">
        <div class="tone-label">2. Empowering & Encouraging</div>
        <div class="tone-desc">Celebrates pet parents making a better choice.</div>
        <div class="tone-ex">"Every bowl you serve is a vote for a healthier dog and a greener planet. You're doing great."</div>
      </div>
      <div class="tone">
        <div class="tone-label">3. Knowledgeable, Not Overbearing</div>
        <div class="tone-desc">Cites science clearly, never lectures.</div>
        <div class="tone-ex">"Our recipes are formulated by veterinarians and meet AAFCO's nutritional standards for adult dogs — here's how."</div>
      </div>
      <div class="tone">
        <div class="tone-label">4. Playful & Joyful</div>
        <div class="tone-desc">Tail wags, zoomies, puns. Dogs are fun — our voice is too.</div>
        <div class="tone-ex">"Cue happy dog, tail-wagging, and zoomies today!"</div>
      </div>
      <div class="tone">
        <div class="tone-label">5. Passionate & Purpose-Driven</div>
        <div class="tone-desc">We care about the mission and it shows.</div>
        <div class="tone-ex">"We're not just feeding pets — we're nurturing a movement toward a brighter, greener future."</div>
      </div>
      <div class="tone">
        <div class="tone-label">6. Inclusive & Welcoming</div>
        <div class="tone-desc">Any pet parent, any diet style, any reason for switching.</div>
        <div class="tone-ex">"Whether you're here for allergies, ethics, or just a healthier pup — we're glad you're here."</div>
      </div>
    </div>

    <h3 style="margin-top:32px">Approved Taglines & Slogans</h3>
    <table>
      <thead><tr><th>Line</th><th>Use Case</th></tr></thead>
      <tbody>
        <tr><td><strong>Dog food, reinvented.</strong></td><td>Hero headline, homepage, above-the-fold ads</td></tr>
        <tr><td><strong>Clean protein for a cleaner planet.</strong></td><td>Sustainability messaging, email, packaging</td></tr>
        <tr><td><strong>Better for your dog. Better for the Earth.</strong></td><td>General marketing, retail signage</td></tr>
        <tr><td><strong>Cue happy dog, tail-wagging, and zoomies.</strong></td><td>Social, product pages, upper-funnel</td></tr>
        <tr><td><strong>Plant-powered. Vet-approved. Dog-loved.</strong></td><td>Product packaging, PDP hero bars</td></tr>
        <tr><td><strong>Worth barking about.</strong></td><td>Post-purchase, reviews, advocacy</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:28px">Communication Do's & Don'ts</h3>
    <div class="do-dont">
      <div class="do">
        <h4>✅ Do</h4>
        <ul>
          <li>Lead with love for pets, then back it with science</li>
          <li>Use "plant-based" and "plant-powered" as primary descriptors</li>
          <li>Celebrate the customer's decision without judging their past</li>
          <li>Cite vets, researchers, and AAFCO when making health claims</li>
          <li>Talk about dogs as family members — "your pup," "your best friend"</li>
          <li>Be warm about meat-eating pet parents — many of our customers feed meat too</li>
        </ul>
      </div>
      <div class="dont">
        <h4>🚫 Don't</h4>
        <ul>
          <li>Shame customers for previously feeding meat-based food</li>
          <li>Claim Wild Earth "cures" any medical condition</li>
          <li>Call koji a "mold" or anything that sounds scary</li>
          <li>Recommend Wild Earth kibble for puppies (not AAFCO-approved for growth)</li>
          <li>Use militant vegan language — we're inclusive, not preachy</li>
          <li>Over-promise results — say "may help," "can support," not "guarantees"</li>
        </ul>
      </div>
    </div>

    <h3 style="margin-top:28px">Language Guidance</h3>
    <table>
      <thead><tr><th>✅ Use</th><th>🚫 Avoid</th></tr></thead>
      <tbody>
        <tr><td>Plant-based, plant-powered</td><td>Fake meat, meat substitute</td></tr>
        <tr><td>Koji, yeast protein, fungi-based</td><td>Mold, bacteria, lab-grown (for current kibble)</td></tr>
        <tr><td>Pet parent, pup, your best friend</td><td>Owner, master</td></tr>
        <tr><td>Complete nutrition, vet-formulated</td><td>Diet food, low-calorie (misleading)</td></tr>
        <tr><td>Hypoallergenic, allergen-free</td><td>Medical, therapeutic, cures</td></tr>
        <tr><td>Sustainable, planet-friendly</td><td>Eco-virtue, saves the planet (overclaim)</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:28px">Channel-Specific Tone</h3>
    <table>
      <thead><tr><th>Channel</th><th>Tone Adjustment</th><th>Notes</th></tr></thead>
      <tbody>
        <tr><td>Instagram / TikTok</td><td>Playful, dog-first, visual</td><td>Lean into UGC, zoomies, tail wags, short captions</td></tr>
        <tr><td>Email</td><td>Warm, personal, informative</td><td>Sign off with "The Wild Earth Pack" or founder voice</td></tr>
        <tr><td>Product Pages (PDP)</td><td>Confident, detailed, science-backed</td><td>Lead with benefit, follow with ingredient transparency</td></tr>
        <tr><td>Customer Service</td><td>Warm, solution-focused, empathetic</td><td>Apologize for any issue, then solve it. 30-day guarantee is our friend.</td></tr>
        <tr><td>Blog / Long-form</td><td>Knowledgeable, curious, researched</td><td>Link to studies, quote vets, explain the "why"</td></tr>
        <tr><td>Retail / Shelf</td><td>Bold, quick-scan, visual</td><td>Lead with "Plant-Based," "Vet-Developed," "USA Made" callouts</td></tr>
      </tbody>
    </table>
    </div>
  </div>
</section>

<!-- PERSONALITY -->
<section id="personality">
  <div class="card collapsible" data-section="personality">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">07 · Personality</span>
        <h2>Brand Personality & Adjectives</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p><strong>Direction:</strong> Purpose-Driven · Scientifically Grounded · Warmly Optimistic · Playfully Earnest</p>
    <div class="adj-grid">
      <div class="adj"><div class="adj-title">Pioneering</div><div class="adj-desc">First-to-market with koji-based dog nutrition; still leading the plant-based pet food category.</div></div>
      <div class="adj"><div class="adj-title">Nurturing</div><div class="adj-desc">Treats every dog like family and every pet parent like a trusted friend.</div></div>
      <div class="adj"><div class="adj-title">Scientific</div><div class="adj-desc">Backs bold claims with vets, AAFCO compliance, and peer-reviewed research.</div></div>
      <div class="adj"><div class="adj-title">Earthy</div><div class="adj-desc">Rooted in nature, literally — chickpeas, oats, sweet potato, and fungi power our bowls.</div></div>
      <div class="adj"><div class="adj-title">Optimistic</div><div class="adj-desc">We believe a better food system for pets is possible — and we're building it.</div></div>
      <div class="adj"><div class="adj-title">Transparent</div><div class="adj-desc">Every ingredient, every nutrient, every percentage — published openly.</div></div>
      <div class="adj"><div class="adj-title">Playful</div><div class="adj-desc">Zoomies, tail wags, woofs. The joy of dogs lives in our voice.</div></div>
      <div class="adj"><div class="adj-title">Bold</div><div class="adj-desc">Willing to challenge a century of pet food assumptions.</div></div>
      <div class="adj"><div class="adj-title">Inclusive</div><div class="adj-desc">Welcomes every pet parent — vegan, flexitarian, or meat-eater — without judgment.</div></div>
      <div class="adj"><div class="adj-title">Compassionate</div><div class="adj-desc">Love for dogs is the reason. Love for the planet is the bonus.</div></div>
    </div>
    </div>
  </div>
</section>

<!-- VISUAL IDENTITY -->
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
    <div class="palette">
      <div class="swatch"><div class="swatch-color" style="background:#1B4332"></div><div class="swatch-info"><div class="swatch-name">Forest</div><div class="swatch-role">Primary dark</div><div class="swatch-hex">#1B4332</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#2D6A4F"></div><div class="swatch-info"><div class="swatch-name">Wild Green</div><div class="swatch-role">Primary brand</div><div class="swatch-hex">#2D6A4F</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#40916C"></div><div class="swatch-info"><div class="swatch-name">Meadow</div><div class="swatch-role">Secondary</div><div class="swatch-hex">#40916C</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#74C69D"></div><div class="swatch-info"><div class="swatch-name">Sprout</div><div class="swatch-role">Accent</div><div class="swatch-hex">#74C69D</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#B7E4C7"></div><div class="swatch-info"><div class="swatch-name">Sage</div><div class="swatch-role">Soft accent</div><div class="swatch-hex">#B7E4C7</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#F8F4EA"></div><div class="swatch-info"><div class="swatch-name">Cream</div><div class="swatch-role">Background</div><div class="swatch-hex">#F8F4EA</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#E9DCC9"></div><div class="swatch-info"><div class="swatch-name">Kraft</div><div class="swatch-role">Packaging</div><div class="swatch-hex">#E9DCC9</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#D4782A"></div><div class="swatch-info"><div class="swatch-name">Harvest</div><div class="swatch-role">Warm accent</div><div class="swatch-hex">#D4782A</div></div></div>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative Team — Color Usage</span>
      <p style="margin:0"><strong>Forest (#1B4332)</strong> and <strong>Wild Green (#2D6A4F)</strong> anchor the identity — use them for dark backgrounds, logo lockups, and CTAs. <strong>Harvest (#D4782A)</strong> is the one warm accent and should be used sparingly for emphasis only — never as a large background. Always pair a green from the primary/secondary range with Cream (#F8F4EA) backgrounds for maximum legibility. Do not introduce colors outside this palette without Brand Lead approval.</p>
    </div>

    <h3 style="margin-top:28px">Typography</h3>
    <div class="type-spec">
      <div class="type-spec-name">Playfair Display · Display / Headlines</div>
      <div class="type-spec-use">Brand moments, hero headlines, editorial feel</div>
      <div style="font-family:'Playfair Display',serif;font-size:2rem;font-weight:800;color:var(--we-forest)">Dog food, reinvented.</div>
    </div>
    <div class="type-spec">
      <div class="type-spec-name">DM Sans · Body / UI</div>
      <div class="type-spec-use">Product copy, paragraphs, UI elements</div>
      <div style="font-family:'DM Sans',sans-serif;font-size:1rem">Complete, high-protein, hypoallergenic nutrition for dogs — made from clean plant ingredients and formulated with veterinarians.</div>
    </div>
    <div class="type-spec">
      <div class="type-spec-name">DM Mono · Accent / Data</div>
      <div class="type-spec-use">Eyebrows, technical callouts, ingredient labels</div>
      <div style="font-family:'DM Mono',monospace;font-size:.95rem;color:var(--we-green)">28% CRUDE PROTEIN · AAFCO CERTIFIED · MADE IN USA</div>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative Team — Type Pairing Rules</span>
      <p style="margin:0">Playfair Display is <strong>headlines only</strong> — do not use it for body copy or long paragraphs. DM Sans is the workhorse for body, UI, product copy, and captions. DM Mono is reserved for eyebrows, technical callouts, numeric data, and ingredient labels. Never mix more than these three families in a single composition.</p>
    </div>

    <h3 style="margin-top:28px">Logo Usage</h3>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-bottom:16px">
      <div style="background:#fff;border:1px solid var(--we-sage);border-radius:12px;padding:20px;text-align:center">
        <div style="background:#fff;padding:20px;border-radius:8px;margin-bottom:10px;min-height:80px;display:flex;align-items:center;justify-content:center">
          <img src="https://wildearth.com/cdn/shop/files/logotype_1.png?crop=center&height=56&v=1724078788&width=392" alt="Wild Earth primary green logo" style="max-height:56px;width:auto" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
          <div style="display:none;font-family:'Playfair Display',serif;font-weight:900;color:var(--we-green);font-size:1.4rem">WILD EARTH</div>
        </div>
        <div style="font-size:12px;font-family:'DM Mono',monospace;color:var(--we-green-mid);text-transform:uppercase;letter-spacing:.08em;margin-bottom:4px">Primary — Green</div>
        <div style="font-size:12px;color:var(--we-text-muted);line-height:1.4">Wordmark in Wild Green (#2D6A4F) on white or cream. Default for most applications.</div>
      </div>
      <div style="background:var(--we-forest);border:1px solid var(--we-forest);border-radius:12px;padding:20px;text-align:center">
        <div style="background:var(--we-forest);padding:20px;border-radius:8px;margin-bottom:10px;min-height:80px;display:flex;align-items:center;justify-content:center">
          <img src="https://wildearth.com/cdn/shop/files/logotype_2.png?crop=center&height=56&v=1724078810&width=392" alt="Wild Earth reversed white logo" style="max-height:56px;width:auto" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
          <div style="display:none;font-family:'Playfair Display',serif;font-weight:900;color:#fff;font-size:1.4rem">WILD EARTH</div>
        </div>
        <div style="font-size:12px;font-family:'DM Mono',monospace;color:var(--we-sage);text-transform:uppercase;letter-spacing:.08em;margin-bottom:4px">Reversed — White</div>
        <div style="font-size:12px;color:var(--we-sage);line-height:1.4">White wordmark on dark backgrounds (Forest, dark photography, hero banners).</div>
      </div>
    </div>
    <p><strong>Primary logo:</strong> Horizontal wordmark "WILD EARTH" in custom sans-serif, rendered in Wild Green (#2D6A4F) on light backgrounds. This is the default logo for the website header, product pages, and most marketing.</p>
    <p><strong>Reversed logo:</strong> Same wordmark in white for use on Forest (#1B4332), photography, and dark ad placements. Never use green-on-dark or white-on-light — contrast must stay strong.</p>
    <p><strong>Stacked / social avatar:</strong> For tight square placements (Instagram avatar, favicon), use the compact leaf-and-wordmark lockup supplied by the Brand Team.</p>
    <p><strong>Misuse rules:</strong> Never stretch, skew, or recolor outside palette. Never place on low-contrast photography. Maintain clear space equal to the height of the "W" on all sides. Never add drop shadows or glow effects. Never combine the logo with text overlays that obscure it.</p>

    <h3 style="margin-top:28px">Photography & Creative Direction</h3>
    <div class="do-dont">
      <div class="do">
        <h4>✅ Photography Do's</h4>
        <ul>
          <li>Real dogs in real homes, yards, and parks — mid-zoomie if possible</li>
          <li>Natural light, warm tones, earthy backdrops</li>
          <li>Ingredients shot whole and raw (chickpeas, sweet potato, spinach)</li>
          <li>Hands-in-bowl shots showing kibble texture</li>
          <li>Mix of breeds, sizes, and ages</li>
        </ul>
      </div>
      <div class="dont">
        <h4>🚫 Photography Don'ts</h4>
        <ul>
          <li>Stock-looking studio dogs on white seamless</li>
          <li>Over-saturated, over-processed colors</li>
          <li>Imagery that looks like meat marketing (grill, sear, steak cuts)</li>
          <li>Cold, clinical, lab-coat imagery — we're earthy, not sterile</li>
          <li>Celebrity-style pet influencer shots that feel inauthentic</li>
        </ul>
      </div>
    </div>
    <p style="margin-top:14px"><strong>Overall visual feel:</strong> Earthy, warm, optimistic. Think "premium natural grocery store meets your favorite dog park on a Sunday morning."</p>
    </div>
  </div>
</section>

<!-- AUDIENCE -->
<section id="audience">
  <div class="card collapsible" data-section="audience">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">09 · Audience</span>
        <h2>Target Audience & Customer Personas</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <h3>General Customer Profile</h3>
    <p><strong>Age:</strong> 28–55 · <strong>Gender skew:</strong> ~70% female · <strong>HHI:</strong> $75K+ · <strong>Location:</strong> U.S. suburbs and mid-to-large metros (strong in CA, NY, TX, FL, NC, PNW) · <strong>Motivations:</strong> Pet health (especially allergies), ethics & environment, transparency, premium wellness mindset. Heavy overlap with Whole Foods, Trader Joe's, Thrive Market, Patagonia, and Peloton households.</p>

    <div class="personas">
      <div class="persona">
        <div class="persona-name">Allergy Anna</div>
        <div class="persona-type">Solution-Seeker · 34 · Austin, TX</div>
        <div class="persona-desc">Her rescue mutt Olive has been itching, losing fur, and getting recurring ear infections. Two vets and four "limited ingredient" meat formulas later, she's desperate for anything that might work.</div>
        <div class="persona-focus"><strong>Focus:</strong> Allergies, skin/coat, vet-endorsed claims, 30-day guarantee</div>
      </div>
      <div class="persona">
        <div class="persona-name">Ethical Ethan</div>
        <div class="persona-type">Values-Aligned · 29 · Brooklyn, NY</div>
        <div class="persona-desc">Plant-based himself for 5 years. Feels cognitive dissonance feeding his dog factory-farmed chicken. Discovered Wild Earth on a vegan podcast.</div>
        <div class="persona-focus"><strong>Focus:</strong> Cruelty-free, sustainability, founder story, Shark Tank legitimacy</div>
      </div>
      <div class="persona">
        <div class="persona-name">Wellness Whitney</div>
        <div class="persona-type">Premium Pet Parent · 42 · Orange County, CA</div>
        <div class="persona-desc">Treats her Cavalier like a human child. Buys organic for the family, so why not the dog? Willing to pay premium for the best ingredients and transparency.</div>
        <div class="persona-focus"><strong>Focus:</strong> Clean label, superfoods, subscription convenience, premium packaging</div>
      </div>
      <div class="persona">
        <div class="persona-name">Curious Carlos</div>
        <div class="persona-type">Research-Driven Skeptic · 38 · Raleigh, NC</div>
        <div class="persona-desc">Saw Wild Earth on Shark Tank. Loves the science angle but needs to be convinced dogs really don't need meat. Reads every ingredient panel and customer review.</div>
        <div class="persona-focus"><strong>Focus:</strong> Science, AAFCO, vet credentials, long-form education content</div>
      </div>
    </div>

    <h3 style="margin-top:28px">Brand Archetype: The Revolutionary (with shades of The Caregiver)</h3>
    <p>Wild Earth is <strong>The Revolutionary</strong> — challenging a century of "meat = pet food" assumptions with better science, better ethics, and better outcomes. Underneath the revolution beats the heart of <strong>The Caregiver</strong>: every product exists because we love dogs and want to keep them healthy longer. The combination is powerful: we're not just disruptors, we're disruptors who show up with bowls of food and a 30-day guarantee.</p>
    </div>
  </div>
</section>

<!-- COMPETITORS -->
<section id="competitors">
  <div class="card collapsible" data-section="competitors">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">10 · Competitors</span>
        <h2>Competitors & Positioning</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <p>Wild Earth competes in the <strong>premium dog food category</strong> (roughly the $10B+ super-premium and functional pet food segment within the $30B+ U.S. pet food market). Immediate rivals include other plant-based brands, limited-ingredient/hypoallergenic meat brands, and fresh-food direct-to-consumer players. Wild Earth's key wedge is the combination of <em>plant-based + vet-developed + shelf-stable kibble</em> — a niche no competitor occupies with the same scientific depth.</p>

    <table>
      <thead><tr><th>Competitor</th><th>Type</th><th>Key Claim</th><th>Wild Earth's Differentiator</th></tr></thead>
      <tbody>
        <tr><td><strong>v-dog</strong></td><td>Plant-based kibble</td><td>Vegan since 2005</td><td>Wild Earth adds koji protein, higher protein %, and a bigger brand/science team</td></tr>
        <tr><td><strong>Halo Holistic (Plant-Based)</strong></td><td>Plant-based kibble (big-brand)</td><td>Holistic superfood blend</td><td>Wild Earth was built plant-first from day one; Halo is a side line for a meat-first brand</td></tr>
        <tr><td><strong>Hill's Prescription Diet z/d</strong></td><td>Rx hypoallergenic (hydrolyzed meat)</td><td>Veterinary allergy formula</td><td>Wild Earth is hypoallergenic without a prescription, at a lower price, and without meat</td></tr>
        <tr><td><strong>The Farmer's Dog</strong></td><td>Fresh meat DTC</td><td>Human-grade, personalized fresh meals</td><td>Wild Earth is shelf-stable, half the price, and cruelty-free</td></tr>
        <tr><td><strong>Blue Buffalo / Wellness CORE</strong></td><td>Premium meat-based kibble</td><td>Natural ingredients, high protein</td><td>Wild Earth removes meat entirely, eliminating the top canine allergens</td></tr>
        <tr><td><strong>Purina Pro Plan Sensitive Skin & Stomach</strong></td><td>Mainstream sensitive formula</td><td>Salmon-based, vet-recommended</td><td>Wild Earth eliminates fish and all animal proteins — true zero-allergen approach</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:24px">Positioning Statement</h3>
    <p style="font-style:italic;font-family:'Playfair Display',serif;font-size:1.1rem;color:var(--we-forest);border-left:4px solid var(--we-green-light);padding-left:16px">For pet parents who want the best for their dog and the planet, Wild Earth is the plant-based, vet-developed dog food that delivers complete nutrition without the allergens, ethical compromises, or environmental cost of meat-based kibble — because dogs don't need meat to thrive, and pet parents deserve to know exactly what they're feeding.</p>

    <h3 style="margin-top:24px">Key Differentiators</h3>
    <ul style="margin-left:20px">
      <li><strong>Koji protein:</strong> Proprietary fungi-based protein source — no other mainstream brand uses it</li>
      <li><strong>Built plant-first:</strong> Not a vegan line from a meat-based parent company</li>
      <li><strong>Vet-developed:</strong> Dr. Ernie Ward (Chief Veterinary Officer) and a team of scientists</li>
      <li><strong>Zero top-10 allergens:</strong> No beef, dairy, chicken, wheat, lamb, pork, egg, soy, rabbit, or fish</li>
      <li><strong>Shark Tank legitimacy:</strong> Mark Cuban investment, Mars Petcare involvement, $39M+ raised</li>
      <li><strong>Inventel-backed operations:</strong> Fulfillment, CX, and a standard 30-day return policy on eligible products, all run through Inventel's warehouse and support teams</li>
    </ul>

    <div class="team-callout brand" style="margin-top:18px">
      <span class="team-tag">Brand Team — Positioning Discipline</span>
      <p style="margin:0">The positioning statement above is the <strong>locked version</strong> — do not paraphrase or invent variations in campaigns, decks, or partnership pitches. The five key differentiators are also a fixed list: adding a new one (or removing one) is a Brand Lead decision, not a campaign-level call. If a competitor lands a new claim we need to answer, flag it to the Brand Team rather than rewriting the table ad-hoc.</p>
    </div>
    </div>
  </div>
</section>

<!-- OBJECTIONS -->
<section id="objections">
  <div class="card collapsible" data-section="objections">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">11 · Objections & Battlecards</span>
        <h2>Objection Handling</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>Common concerns CX and sales will hear — with vetted, on-brand responses. Always lead with empathy, follow with fact.</p>

    <div class="objection">
      <div class="objection-q">"Dogs are carnivores. They need meat."</div>
      <div class="objection-a">Totally understandable concern — it's what most of us grew up believing. Actually, dogs are classified as omnivores, not carnivores. They've evolved alongside humans for 30,000+ years and developed the ability to digest starches and plant proteins. Our recipes are formulated with veterinarians to provide all 10 essential amino acids, plus Taurine, L-Carnitine, and DHA — everything a dog needs, sourced from plants and koji.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"This seems expensive compared to regular kibble."</div>
      <div class="objection-a">I hear you — it's a premium product, but let's look at what you're getting: no fillers, no meat by-products, no mystery ingredients, vet-formulated for complete nutrition, and it's hypoallergenic. Many customers find they save on vet bills long-term because the allergen-free formula reduces skin issues, GI problems, and ear infections. Plus, our subscription saves you 10–20% on every order.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"What's koji? Is that safe? Sounds like mold."</div>
      <div class="objection-a">Great question! Koji (<em>Aspergillus oryzae</em>) is a food-grade fungus that's been used for thousands of years in Asian cuisine — it's what makes soy sauce, miso, and sake. It's completely safe, nutrient-dense, and contains all the essential amino acids dogs need. Think of it less like mold and more like the same family as mushrooms or nutritional yeast.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"My dog won't eat plant-based food — they love meat."</div>
      <div class="objection-a">You'd be surprised! We formulate our kibble with poultry-style and rotisserie flavors dogs genuinely love. And we back it with a 30-day return policy on first bags — if it doesn't work out, give us a call within 30 days and we'll walk you through the return (return shipping and any handling fees are the customer's responsibility per our standard policy). We recommend a 7–10 day gradual transition mixing with your current food so their stomach adjusts smoothly.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"Is Wild Earth actually approved by vets?"</div>
      <div class="objection-a">Yes — our recipes are developed by veterinarians and food scientists, and we have a Chief Veterinary Officer, Dr. Ernie Ward. Our formulas meet or exceed AAFCO's nutritional standards for adult dog maintenance. We always recommend chatting with your own vet too, especially if your dog has specific medical needs.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"My puppy is eating this — is that okay?"</div>
      <div class="objection-a">This is important: our current kibble is formulated for adult dogs (1 year and older) and meets AAFCO maintenance standards, not growth/puppy standards. We do not recommend Wild Earth kibble for puppies. Please switch your pup to an AAFCO puppy-approved formula and come back to us when they turn one.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"I tried it and my dog had an upset stomach."</div>
      <div class="objection-a">I'm sorry to hear that! Stomach sensitivity is very common during any food transition — regardless of brand. Dogs' gut microbiomes need 7–10 days to adjust. We recommend mixing 25% Wild Earth with 75% of their old food for a few days, then gradually increasing. If it continues past two weeks, reach out within 30 days of your order and we'll walk you through our return process.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"Wild Earth filed for Chapter 11 — are you going out of business?"</div>
      <div class="objection-a">Great question and thanks for asking directly. Wild Earth voluntarily entered Chapter 11 in early 2025 to restructure, and was acquired by Inventel later that year — so far from going out of business, Wild Earth is now backed by a parent company and continuing to operate. It's business as usual: we're shipping orders, honoring subscriptions, producing new inventory, and continuing to grow in retail. Your dog's food supply is not interrupted.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"How long will shipping take?"</div>
      <div class="objection-a">Orders over $60 ship free with 3–7 day delivery. Subscription orders lock in your delivery cadence so you never run out. If you're ever running low, message us and we can expedite.</div>
    </div>
    <div class="objection">
      <div class="objection-q">"How do I cancel my subscription?"</div>
      <div class="objection-a">Super easy, no hoops. Log into your account at wildearth.com, go to "Manage Subscription," and you can skip, pause, change frequency, or cancel anytime — no phone calls required. Or just email us and we'll take care of it within one business day.</div>
    </div>
    </div>
  </div>
</section>

<!-- JOURNEY -->
<section id="journey">
  <div class="card collapsible" data-section="journey">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">12 · Customer Journey</span>
        <h2>Customer Journey & Lifecycle</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <div class="journey">
      <table>
        <thead><tr><th>Stage</th><th>Customer State of Mind</th><th>Channel / Touchpoint</th><th>Brand Action</th><th>CX Role</th></tr></thead>
        <tbody>
          <tr><td><strong>Awareness</strong></td><td>"Why is my dog itchy?" or "Is there a better pet food?"</td><td>Shark Tank reruns, TikTok, Instagram, vegan podcasts, Google search</td><td>Founder story, educational content, Mark Cuban coverage, TikTok UGC</td><td>Social listening, reply to comments in-tone</td></tr>
          <tr><td><strong>Consideration</strong></td><td>"Is plant-based actually safe for dogs? Does it really work?"</td><td>Website blog, ingredient pages, review sites (Wag!, Chewy reviews), YouTube</td><td>Vet-authored content, transparency pages, allergy education</td><td>Answer pre-purchase questions via chat/email within 24 hrs</td></tr>
          <tr><td><strong>Purchase</strong></td><td>"I'll try it — what if my dog doesn't like it?"</td><td>wildearth.com PDP, Amazon, Petco shelf, Chewy</td><td>30-day return policy on first bags, subscribe-and-save, starter bundles</td><td>Order confirmation personalization, address purchase anxiety</td></tr>
          <tr><td><strong>Onboarding</strong></td><td>"How do I switch my dog without a stomach upset?"</td><td>Welcome email series, shipping confirmation, "How to Transition" guide</td><td>7–10 day transition guide, vet-approved tips, emergency support contact</td><td>Proactive outreach at day 3 and day 10, handle transition concerns empathetically</td></tr>
          <tr><td><strong>Retention</strong></td><td>"This is working — can I make it a habit?"</td><td>Subscription portal, reorder emails, SMS reminders</td><td>Autoship savings, flavor rotation offers, new product announcements</td><td>Proactive subscription management, handle pauses/skips graciously</td></tr>
          <tr><td><strong>Advocacy</strong></td><td>"My dog's coat is amazing — I have to tell people"</td><td>Reviews, TikTok UGC, Referral program, community</td><td>Referral rewards, UGC reposts, affiliate program, loyalty perks</td><td>Celebrate wins, request reviews at day 30 & 60, feature customer dogs</td></tr>
        </tbody>
      </table>
    </div>
    </div>
  </div>
</section>

<!-- DATA -->
<section id="data">
  <div class="card collapsible" data-section="data">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">13 · Data & Research</span>
        <h2>Health & Survey Data</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p style="font-size:13px;color:var(--we-text-muted)"><em>Source: Wild Earth commissioned survey of 1,000+ Wild Earth customers (2022–2024), plus cited peer-reviewed research from UCLA (environmental impact of pet food) and plant-based canine diet studies referenced on wildearth.com.</em></p>
    <div class="stat-boxes">
      <div class="stat-box"><div class="stat-big">1.5 yr</div><div class="stat-lbl">Additional average lifespan on plant-based canine diet (cited research)</div></div>
      <div class="stat-box"><div class="stat-big">25-30%</div><div class="stat-lbl">Of US environmental impact from animal agriculture attributed to pet food</div></div>
      <div class="stat-box"><div class="stat-big">64M</div><div class="stat-lbl">Tons of CO₂ emitted annually by the US pet food industry</div></div>
      <div class="stat-box"><div class="stat-big">28%</div><div class="stat-lbl">Crude protein in Performance Formula kibble</div></div>
      <div class="stat-box"><div class="stat-big">10/10</div><div class="stat-lbl">Essential amino acids for dogs, all sourced from plants & koji</div></div>
      <div class="stat-box"><div class="stat-big">70%+</div><div class="stat-lbl">Of customers report noticeable skin/coat or digestive improvement within 30 days (brand survey)</div></div>
    </div>
    <p style="margin-top:18px;font-size:14px"><strong>Retention signal:</strong> Subscription customers who make it past the 30-day transition window have ~75%+ 6-month retention, according to internal cohort data — one of the strongest signals in the premium pet food DTC category.</p>

    <h3 style="margin-top:32px">Peer-Reviewed Research on Plant-Based Pet Diets</h3>
    <p style="font-size:14px">Several peer-reviewed studies form the backbone of Wild Earth's health and longevity claims. The most important is from <strong>Professor Andrew Knight</strong>, whose 2,500+ dog study is widely cited across our marketing — these are the numbers behind statements like <em>"dogs on conventional meat diets were nearly twice as likely to require medication."</em> CX, Marketing, and Brand should be familiar with the headline numbers below; they show up in objection handling and ad copy constantly.</p>

    <p style="background:rgba(184,57,31,.06);border-left:4px solid var(--we-danger);padding:10px 14px;border-radius:6px;margin-top:12px;font-size:13px"><strong>⚠️ Cautionary call-out for Marketing:</strong> The Knight study compared diet <em>types</em> (vegan, raw meat, conventional meat) — not specific brands. When citing the data in ads, always reference the diet category ("vegan," "plant-based," "conventional meat-fed dogs") and never imply the study used Wild Earth specifically. Causation should not be overstated; results are reported outcomes.</p>

    <h4 style="margin-top:22px;margin-bottom:8px">Knight et al. — Dogs on Vegan vs. Meat-Based Diets (n = 2,536)</h4>
    <p style="font-size:13px;color:var(--we-text-muted);margin-bottom:10px">Source: <a href="https://www.sciencedirect.com/science/article/pii/S240584402411609X" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">Knight, A. — Vegan versus meat-based dog food, ScienceDirect</a></p>
    <div class="stat-boxes">
      <div class="stat-box"><div class="stat-big">36%</div><div class="stat-lbl">Of vegan-fed dogs had health disorders, vs. 43% raw-fed and <strong>49% conventional meat-fed</strong></div></div>
      <div class="stat-box"><div class="stat-big">~2×</div><div class="stat-lbl">Conventional meat-fed dogs were nearly twice as likely to require medication vs. vegan-fed dogs</div></div>
      <div class="stat-box"><div class="stat-big">36%</div><div class="stat-lbl">Lower odds of needing two or more vet visits on a vegan diet vs. conventional meat</div></div>
      <div class="stat-box"><div class="stat-big">49%</div><div class="stat-lbl">Lower odds of progressing to a therapeutic diet vs. conventional meat (48% risk reduction)</div></div>
      <div class="stat-box"><div class="stat-big">50–61%</div><div class="stat-lbl">Risk reduction range for six specific disorders (body weight, ear, musculoskeletal, GI, anal gland, dental)</div></div>
      <div class="stat-box"><div class="stat-big">0</div><div class="stat-lbl">Health disorders found to be consistently more common in dogs fed vegan diets</div></div>
    </div>

    <h4 style="margin-top:22px;margin-bottom:8px">Knight et al. — Cats on Vegan vs. Meat-Based Diets (n = 1,369)</h4>
    <p style="font-size:13px;color:var(--we-text-muted);margin-bottom:10px">Source: <a href="https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0284132" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">Knight, A. — Vegan versus meat-based cat food, PLOS ONE</a></p>
    <ul style="margin-left:20px;font-size:14px">
      <li>37% of vegan-fed cats had at least one health disorder vs. 42% of meat-fed cats.</li>
      <li>Vegan-fed cats had <strong>56.5% lower odds</strong> of progressing to therapeutic diets and <strong>26.9% lower odds</strong> of severe illness (guardian-reported).</li>
      <li>Of 22 disorders studied, 15 were more common in meat-fed cats; 7 more common in vegan-fed cats.</li>
      <li>Trends consistently favored vegan-fed cats across multiple health indicators (relative improvements ~7–23%).</li>
      <li>Caveat: results were trending positive but not all statistically significant. Proper formulation (especially supplemental taurine) is critical for cats.</li>
    </ul>

    <h4 style="margin-top:22px;margin-bottom:8px">Oliva — Systematic Review of Vegan Diets in Dogs and Cats</h4>
    <p style="font-size:13px;color:var(--we-text-muted);margin-bottom:10px">Source: <a href="https://www.mdpi.com/2306-7381/10/1/52" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">Oliva, A. — The Impact of Vegan Diets on Indicators of Health in Dogs and Cats, MDPI Veterinary Sciences</a></p>
    <ul style="margin-left:20px;font-size:14px">
      <li>Across 12 studies, dogs on nutritionally complete vegan diets showed <strong>no major adverse health effects</strong>.</li>
      <li>Hematology and biochemistry results were largely within normal reference ranges.</li>
      <li>Guardian-reported outcomes (n = 2,536 dogs): fewer ocular, GI, and hepatic disorders; reduced need for vet visits.</li>
      <li><strong>Longevity reportedly 1.5 years longer</strong> for dogs on vegan diets in some cited studies — the source of our headline 1.5-year statistic.</li>
      <li>For cats: nutrient deficiencies (taurine, folate) appeared only in short-term unsupplemented vegetarian feeding; <strong>supplementation resolved clinical signs</strong>. Properly formulated diets like Unicorn Pate avoid these issues by design.</li>
    </ul>

    <h4 style="margin-top:22px;margin-bottom:8px">Okin — Environmental Impact of Pet Food</h4>
    <p style="font-size:13px;color:var(--we-text-muted);margin-bottom:10px">Source: <a href="https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0181301" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">Okin, G. — Environmental impacts of food consumption by dogs and cats, PLOS ONE</a></p>
    <ul style="margin-left:20px;font-size:14px">
      <li>US dogs and cats account for <strong>25–30% of the environmental impacts from animal production</strong> (land, water, fossil fuel, phosphate, biocides).</li>
      <li>Pets are responsible for <strong>up to 64 ± 16 million tons of CO₂-equivalent emissions</strong> annually from methane and nitrous oxide.</li>
      <li>Pet diets could feed <strong>~139 million people</strong> if converted to plant-equivalent energy — the basis for our environmental angle.</li>
    </ul>

    <h4 style="margin-top:22px;margin-bottom:8px">Knight — Palatability and Owner-Reported Behavior</h4>
    <p style="font-size:13px;color:var(--we-text-muted);margin-bottom:10px">Source: <a href="https://pubmed.ncbi.nlm.nih.gov/34133456/" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">Knight, A. — Owner-reported palatability behaviours, PubMed</a></p>
    <ul style="margin-left:20px;font-size:14px">
      <li>2,308 dogs studied across conventional, raw, and vegan diets — <strong>no consistent palatability disadvantage</strong> for vegan diets vs. conventional or raw.</li>
      <li>Cats on conventional meat diets were more likely to leave food uneaten, an indicator of <strong>lower</strong> palatability.</li>
      <li>Reinforces a key objection-handling point: dogs and cats find well-formulated plant-based food just as satisfying as meat-based food.</li>
    </ul>

    <h4 style="margin-top:22px;margin-bottom:8px">Knight et al. — Nutritional Soundness of Pet Foods</h4>
    <p style="font-size:13px;color:var(--we-text-muted);margin-bottom:10px">Source: <a href="https://www.andrewknight.info/wp-content/uploads/2021/05/Pet-food-manufacturing-Knight-et-al-2021.pdf" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">Knight, A. — Nutritional Soundness of Meat-Based and Plant-Based Pet Foods (PDF)</a></p>
    <ul style="margin-left:20px;font-size:14px">
      <li>Vitamins A, B-complex, D, and E most commonly oversupplied — slightly more often in meat-based diets than plant-based.</li>
      <li>Both meat and plant diets supplement essential amino acids (taurine, methionine) and fatty acids (DHA, EPA).</li>
      <li>Plant-based diets rely <strong>less on non-nutritive additives</strong> (synthetic preservatives, colorants) and more on physical preservation methods like high-temperature sterilization and drying.</li>
    </ul>

    <h3 style="margin-top:28px">Consumer Insights — How Pet Parents Make Decisions</h3>
    <p>Across the Knight and Oliva studies, the consumer-side data is remarkably consistent. CX and Marketing should know these numbers cold:</p>
    <ul style="margin-left:20px;font-size:14px">
      <li><strong>94%</strong> of pet parents say health and nutrition is the most important purchasing factor.</li>
      <li><strong>90%</strong> cite maintenance of pet health as a top priority.</li>
      <li><strong>44–50%</strong> of meat-feeding guardians said they would realistically consider alternative diets if nutritional standards were met.</li>
      <li><strong>83–84%</strong> require confidence in nutritional soundness and pet health <em>before</em> switching — meaning our job is to prove it, not just to claim it. Vet endorsement, ingredient transparency, AAFCO certification, and citable studies are the unlock.</li>
      <li>Vegan pet food market: <strong>$8.7B in 2020 → projected $15.7B by 2028</strong>.</li>
    </ul>

    <div class="team-callout marketing" style="margin-top:14px">
      <span class="team-tag">Marketing — Ad-Ready Messaging Drawn from the Studies</span>
      <p style="margin:0">These are pre-vetted, paper-backed claim formats that are safe to use in ad copy and email. Each maps to a citable study above:</p>
      <ul style="margin:8px 0 0 20px;font-size:14px">
        <li>"Dogs fed nutritionally sound vegan diets had the lowest reported rates of health disorders in a study of over 2,500 dogs."</li>
        <li>"Dogs on conventional meat diets were nearly twice as likely to require medication compared to dogs fed vegan diets."</li>
        <li>"Vegan-fed dogs were significantly less likely to require multiple veterinary visits."</li>
        <li>"Health is the #1 factor for 94% of pet parents when choosing food."</li>
        <li>"Pet food contributes 25–30% of the environmental impact of US animal agriculture."</li>
      </ul>
      <p style="margin:8px 0 0;font-size:13px"><strong>Reminder:</strong> always reference the diet <em>type</em>, never imply the study used Wild Earth specifically.</p>
    </div>

    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX — When a Customer Asks "Is There Actual Science?"</span>
      <p style="margin:0">Yes — and the easy answer is: "Absolutely. There's a peer-reviewed study by Professor Andrew Knight covering more than 2,500 dogs that found dogs on vegan diets had the lowest rates of health disorders compared to raw and conventional meat-fed dogs. Want me to send you the link?" Then send the ScienceDirect link above. Customers who ask this question are usually convinced by the answer — they just want to know we're not making it up.</p>
    </div>
    </div>
  </div>
</section>

<!-- MARKETING -->
<section id="marketing">
  <div class="card collapsible" data-section="marketing">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">14 · Marketing Angles</span>
        <h2>Marketing Angles & Hooks</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <div class="angles">
      <div class="angle">
        <h4>The Allergy Rescue</h4>
        <div class="angle-row"><strong>Audience:</strong> Pet parents with itchy/allergic dogs</div>
        <div class="angle-row"><strong>Problem:</strong> Constant itching, hot spots, ear infections, vet bills</div>
        <div class="angle-row"><strong>Solution:</strong> 100% free of the top 10 canine food allergens — zero elimination diet guessing</div>
      </div>
      <div class="angle">
        <h4>The Ethical Pet Parent</h4>
        <div class="angle-row"><strong>Audience:</strong> Vegans, vegetarians, animal welfare-aligned</div>
        <div class="angle-row"><strong>Problem:</strong> Cognitive dissonance feeding meat to a pet</div>
        <div class="angle-row"><strong>Solution:</strong> Cruelty-free, complete nutrition without compromise</div>
      </div>
      <div class="angle">
        <h4>The Climate-Conscious Bowl</h4>
        <div class="angle-row"><strong>Audience:</strong> Sustainability-minded households</div>
        <div class="angle-row"><strong>Problem:</strong> Pet food = 25-30% of US animal-ag environmental impact</div>
        <div class="angle-row"><strong>Solution:</strong> Dramatically lower CO₂, water, and land footprint per meal</div>
      </div>
      <div class="angle">
        <h4>The Science Upgrade</h4>
        <div class="angle-row"><strong>Audience:</strong> Research-driven pet parents</div>
        <div class="angle-row"><strong>Problem:</strong> Meat-based kibble hides non-human-grade ingredients</div>
        <div class="angle-row"><strong>Solution:</strong> Vet-developed, AAFCO-certified, fully transparent ingredient panel</div>
      </div>
      <div class="angle">
        <h4>The Shark Tank Story</h4>
        <div class="angle-row"><strong>Audience:</strong> TV-driven, brand-story consumers</div>
        <div class="angle-row"><strong>Problem:</strong> "Is this a legit brand or a fad?"</div>
        <div class="angle-row"><strong>Solution:</strong> Mark Cuban-backed, Mars-invested, $39M+ in venture funding</div>
      </div>
      <div class="angle">
        <h4>The Longevity Play</h4>
        <div class="angle-row"><strong>Audience:</strong> Senior dog parents, premium wellness buyers</div>
        <div class="angle-row"><strong>Problem:</strong> Want more good years with their dog</div>
        <div class="angle-row"><strong>Solution:</strong> Cited research shows plant-based dogs live ~1.5 years longer on average</div>
      </div>
    </div>

    <h3 style="margin-top:28px">Proven Hooks</h3>
    <ol class="hooks">
      <li>Is your dog allergic to their own dinner? The 10 ingredients most often to blame.</li>
      <li>Vets are quietly recommending plant-based dog food. Here's why.</li>
      <li>What Mark Cuban saw in this weird dog food that made him write a $550K check.</li>
      <li>We asked 1,000 pet parents what changed after 30 days on Wild Earth. The results were wild.</li>
      <li>The top ingredient in your dog's food is a fungus you've definitely eaten before.</li>
      <li>Stop feeding your dog the same 9 allergens that make 80% of dogs itch.</li>
      <li>Dogs on plant-based diets live an average of 1.5 years longer — here's the science.</li>
      <li>The pet food industry's dirty secret: the meat in your dog's bowl isn't human-grade.</li>
      <li>Try us for 30 days. If your dog doesn't woof it, we refund it. No questions asked.</li>
      <li>Feeding your dog could be producing more emissions than your car. Let's fix that.</li>
    </ol>
    </div>
  </div>
</section>

<!-- SAMPLE WINNING CREATIVES -->
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

    <p>This section is a working reference for what's actually <em>worked</em> in paid social for our brands — the ads that went past testing, scaled, and held their ROAS. The intro patterns below are universal across the Inventel portfolio (Wild Earth, SugarMD, Pizza Pack, Spark, etc.). The gallery underneath is brand-specific — these are real, in-market Wild Earth creatives that are or have been top performers.</p>

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

    <h3 style="margin-top:28px">Wild Earth — Top-Performing Examples</h3>
    <p style="font-size:13.5px;color:var(--we-text-muted);margin-top:6px">A few real, in-market Wild Earth creatives that have hit. Use these as reference for the patterns above when briefing new ad concepts, briefing influencers, or judging variants in testing rounds.</p>

    <div class="creative-gallery">

      <div class="creative-card">
        <img class="creative-img" src="data:image/png;base64,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" alt="Wild Earth Instagram Stories ad — '5-Star Dog Approved · My Dog's Review' with a golden retriever next to the bag">
        <div class="creative-meta">Instagram Stories · Carousel</div>
        <div class="creative-caption">
          <strong>"My Dog's Review" · 5-Star Dog Approved</strong>
          UGC-style review framing, 5-star headline, real dog with the bag. Pattern hits: <em>social proof front and center</em> + <em>native, authentic-looking creative</em>. The "review" frame puts the dog (not the brand) in the role of customer.
        </div>
        <div class="creative-tags">
          <span class="creative-tag">Social proof</span>
          <span class="creative-tag">UGC feel</span>
          <span class="creative-tag">Emotional</span>
        </div>
      </div>

      <div class="creative-card">
        <img class="creative-img" src="data:image/png;base64,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" alt="Wild Earth Facebook ad — 'Stronger Immunity, One Bite at a Time.' with a dachshund and the Performance Formula bag">
        <div class="creative-meta">Facebook Feed · Single-image</div>
        <div class="creative-caption">
          <strong>"Stronger Immunity, One Bite at a Time."</strong>
          One claim, one image, one bite. Pattern hits: <em>one clear simple message</em> + <em>specific relatable problem</em> (immunity worry). 54 reactions / 11 comments / 2 shares — the engagement signal we look for in scaled creative.
        </div>
        <div class="creative-tags">
          <span class="creative-tag">Single message</span>
          <span class="creative-tag">Health hook</span>
          <span class="creative-tag">Performance Formula</span>
        </div>
      </div>

      <div class="creative-card">
        <img class="creative-img" src="data:image/png;base64,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" alt="Wild Earth Instagram Feed Collection ad — 'Wild Earth is made of high quality ingredients for better dog health' with the Classic Roast Flavor bag">
        <div class="creative-meta">Instagram Feed · Collection</div>
        <div class="creative-caption">
          <strong>"Made of high quality ingredients for better dog health"</strong>
          Collection format with the Classic Roast hero bag and a "Bestseller" tag. Pattern hits: <em>social proof</em> (Bestseller) + <em>one clear message</em> (high quality → better health). Clean product-led variant for warm/retargeting audiences.
        </div>
        <div class="creative-tags">
          <span class="creative-tag">Retargeting</span>
          <span class="creative-tag">Bestseller proof</span>
          <span class="creative-tag">Classic Roast</span>
        </div>
      </div>

      <div class="creative-card">
        <img class="creative-img" src="data:image/png;base64,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UV+yuFwMOdAkQn1O91IaU0valQO1QwcHHHWoJGcW9Rn7i2yITiIkjCYspSMJeXtUopAPONoyFYwefZljeNWW61335LkRckDcVIUkqCdhUVbfUAB455PGMEv7dbbDbpipkKGhl9TYbKktq6Ak5+k55PU4GScCpLytj5yvqK/ZU7EFegaz07Ociojd84JT3ctqDBKd+VDBPh6B56VZg2gHIQn4Vy8rY+cr6iv2UeVsfOV9RX7Kgka3X0vwKUfuXupE5aX1ju9x4x6JH566EeZj2UBytkxliKliQru1JzhRHmqBORg/qp18oQv7S38ajgFJASUqyOOlGT6lfVNASPyhC/tLfxo+UIX9pb+NR2T6lfVNGT6lfVNASPyhC/tLfxo+UIX9pb+NR2T6lfVNGT6lfVNASPyhC/tLfxo+UIX9pb+NR2T6lfVNGT6lfVNASPyhC/tLfxo+UIX9pb+NR2T6lfVNGT6lfVNASPyhC/tLfxo+UIX9pb+NR2T6lfVNGT6lfVNASPyhC/tLfxo+UIX9pb+NR2T6lfVNGT6lfVNASPyhC/tLfxo+UIX9pb+NR2T6lfVNGT6lfVNASPyhC/tLfxpnKkIky2O5yW2ySVkYBJHQft+iuWT6lfVNKbSpTiTg4BySRigHdFFFAdmvQpVJa9ClUA3ooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooDs16FKpLXoUqgG9FFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAFFFFAdmvQpVJa9ClUA3ooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooDs16FKpLXoUqgP/2Q==" alt="Wild Earth ad — 'I Don't Hunt. I Nap. So why would I eat like a wolf?' with a sleeping golden retriever on a couch">
        <div class="creative-meta">Facebook + Instagram · Single-image</div>
        <div class="creative-caption">
          <strong>"I Don't Hunt. I Nap." · So why would I eat like a wolf?</strong>
          One of our top all-time hooks. Pattern hits: <em>contrast/switch framing</em> (wolf food vs. modern dog) + <em>emotion over logic</em> (the cuddle-bug framing) + <em>native authentic creative</em> (looks organic, not produced). 60 reactions on the embedded version.
        </div>
        <div class="creative-tags">
          <span class="creative-tag">Switch framing</span>
          <span class="creative-tag">Top hook</span>
          <span class="creative-tag">Plant-based pivot</span>
        </div>
      </div>

    </div>

    <div class="team-callout creative" style="margin-top:22px">
      <span class="team-tag">Creative — Use these as briefs, not blueprints</span>
      <p style="margin:0">When briefing new variants, pull <em>the pattern</em> from a winner, not the visual. "I Don't Hunt. I Nap." worked because of the switch framing and the emotional contrast — not because the dog was a golden on a couch. The next winner in that lane could be a dachshund in a sunbeam with a different headline that follows the same structural pattern. Don't ship visual copies; ship pattern matches.</p>
    </div>

    <div class="team-callout marketing" style="margin-top:10px">
      <span class="team-tag">Marketing — Test against these</span>
      <p style="margin:0">When a new concept enters testing, hold it up against the patterns above before pushing it live. If it doesn't lead with a specific problem, doesn't include social proof, looks too produced for the platform, tries to say more than one thing, or argues from logic rather than emotion — it has a known structural reason it's likely to underperform. Fix the structure before spending the budget.</p>
    </div>

    <div class="team-callout newhire" style="margin-top:10px">
      <span class="team-tag">New Hire — Spend 30 minutes with these</span>
      <p style="margin:0">Before you sit in your first ad-review meeting, look at each creative above and try to name the pattern(s) it's hitting without scrolling back to the list. Then open the brand's current Meta Ads Library and find one ad that's running well — name its pattern. This is the single fastest way to ramp on what "good" looks like for Wild Earth specifically.</p>
    </div>

    </div>
  </div>
</section>

<!-- SOCIAL -->
<section id="social">
  <div class="card collapsible" data-section="social">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">16 · Social & Digital</span>
        <h2>Social Media & Digital Channels</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <div class="chip-row">
      <a class="chip" href="https://www.instagram.com/wildearthpets/" target="_blank" rel="noopener">📷 @wildearthpets (IG)</a>
      <a class="chip" href="https://www.tiktok.com/@wildearthpets" target="_blank" rel="noopener">🎵 @wildearthpets (TikTok)</a>
      <a class="chip" href="https://www.facebook.com/wildearthpets" target="_blank" rel="noopener">📘 Facebook</a>
      <a class="chip" href="https://www.youtube.com/@WildEarthPets" target="_blank" rel="noopener">▶️ YouTube</a>
      <a class="chip" href="https://x.com/wildearthpets" target="_blank" rel="noopener">𝕏 Twitter/X</a>
      <a class="chip" href="https://www.pinterest.com/wildearthpets/" target="_blank" rel="noopener">📌 Pinterest</a>
    </div>
    <table style="margin-top:20px">
      <thead><tr><th>Platform</th><th>Primary Content Role</th><th>Posting Cadence</th></tr></thead>
      <tbody>
        <tr><td>Instagram</td><td>Lifestyle UGC, product hero shots, customer dog stories, founder content</td><td>4–6 posts/week + daily stories</td></tr>
        <tr><td>TikTok</td><td>Trend-driven dog content, "What my dog eats in a day," transformation stories, ingredient education</td><td>5–7 posts/week</td></tr>
        <tr><td>Facebook</td><td>Community engagement, Shark Tank crossovers, longer founder stories, older audience</td><td>3–4 posts/week</td></tr>
        <tr><td>YouTube</td><td>Long-form vet interviews, founder story, factory tours, product demos</td><td>2–4 videos/month</td></tr>
        <tr><td>Twitter/X</td><td>Brand voice, news, climate & pet food commentary</td><td>3–5 tweets/week</td></tr>
        <tr><td>Pinterest</td><td>Recipe-adjacent pins, ingredient education, infographics</td><td>1–2 pins/week</td></tr>
        <tr><td>Email</td><td>Lifecycle flows, educational newsletter, subscription management</td><td>2–3 emails/week</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:24px">Approved Hashtags</h3>
    <p style="font-family:'DM Mono',monospace;font-size:13px;color:var(--we-green);background:var(--we-cream);padding:14px;border-radius:8px">#WildEarth · #WildEarthPets · #PlantBasedPets · #CleanProteinForPets · #PlantPoweredDog · #VeganDogFood · #HypoallergenicDogFood · #WorthBarkingAbout · #FedByFungi · #BetterForYourDog</p>

    <div class="team-callout marketing" style="margin-top:16px">
      <span class="team-tag">Marketing — Hashtag &amp; Channel Governance</span>
      <p style="margin:0">Stick to the approved list above — don't coin new branded hashtags on the fly. If a campaign genuinely needs a new tag (e.g., a product launch or giveaway), get Brand Lead signoff and add it to this list so every team is using the same one. Cadence rules aren't negotiable either: Instagram is the primary creative channel, TikTok is trend-driven, and email is <strong>owned by Marketing only</strong> — CX replies live in Gorgias/Shopify, not email broadcast.</p>
    </div>
    </div>
  </div>
</section>

<!-- PARTNERS -->
<section id="partners">
  <div class="card collapsible" data-section="partners">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">17 · Partnerships</span>
        <h2>Partnerships & Influencer Guidelines</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <div class="team-callout marketing">
      <span class="team-tag">Marketing — Partner Selection</span>
      <p style="margin:0">Influencer and partnership decisions are <strong>Marketing's call</strong> — run every proposed partner through the filter below before committing to seeding, gifting, or paid contracts. If a partner lands on a "don't" (anti-vaccine, anti-vet, raw-feeding absolutism, zero plant-based openness), pass regardless of follower count. We play a long game: one off-brand partner does more damage than ten solid ones do good.</p>
    </div>

    <h3>Ideal Brand Ambassador</h3>
    <p>Wild Earth partners with creators and advocates who genuinely believe in better pet nutrition — not just those chasing a paycheck. Our ambassadors sit at the intersection of dogs, wellness, sustainability, and credible expertise.</p>
    <ul style="margin-left:20px">
      <li><strong>Values alignment:</strong> Plant-based, sustainability-minded, animal welfare advocate, or credentialed vet/nutritionist</li>
      <li><strong>Aesthetic:</strong> Earthy, warm, authentic — not overly curated or glossy</li>
      <li><strong>Audience:</strong> Pet parents (especially dog moms), wellness-curious households, eco-conscious families</li>
      <li><strong>Follower range:</strong> Strong tier of 25K–250K micro/mid-tier + occasional 500K+ strategic partners and vet/vet-tech experts at any size</li>
    </ul>

    <div class="do-dont">
      <div class="do">
        <h4>✅ Look for partners who…</h4>
        <ul>
          <li>Have a real, visible dog (not just stock imagery)</li>
          <li>Talk about ingredients, allergies, or wellness unprompted</li>
          <li>Show consistent, authentic engagement (real comments, not bots)</li>
          <li>Hold or credential veterinary, nutrition, or training expertise</li>
          <li>Already express environmental or ethical values</li>
        </ul>
      </div>
      <div class="dont">
        <h4>🚫 Avoid partners who…</h4>
        <ul>
          <li>Aggressively shame other diets or use militant vegan rhetoric</li>
          <li>Make medical claims we can't substantiate</li>
          <li>Promote dozens of competing pet brands simultaneously</li>
          <li>Have a history of problematic or polarizing content</li>
          <li>Use AI-generated dogs or stock pet imagery</li>
        </ul>
      </div>
    </div>

    <h3 style="margin-top:22px">Content Guidelines for Partners</h3>
    <p><strong>Should include:</strong> Authentic product integration, ingredient callouts, transition tips, 30-day guarantee mention, and the partner's own dog's story. <strong>Should avoid:</strong> Medical claims, "cures," anti-meat shaming, misrepresenting koji, or recommending for puppies.</p>
    <p><strong>FTC disclosure is required on every paid, gifted, or affiliate post.</strong> Use #ad or #sponsored at the start of the caption, and say "paid partnership with @wildearthpets" in-frame for video. This is non-negotiable regardless of platform or relationship.</p>

    <h3 style="margin-top:22px">Contact / Submission Process</h3>
    <p>Brand partnership and influencer submissions: <a href="mailto:partnerships@wildearth.com" target="_blank" rel="noopener">partnerships@wildearth.com</a> (or current brand partnerships email — [ Update as needed ]). Include a media kit, engagement data, and links to 3 recent pet-related posts.</p>
    </div>
  </div>
</section>

<!-- DISCOUNTS & PROMO CODES -->
<section id="discounts">
  <div class="card collapsible" data-section="discounts">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">18 · Discounts & Promo Codes</span>
        <h2>Discounts &amp; Promo Codes</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <p>Wild Earth runs a lot of different discounts, and they don't all work the same way. Some are <strong>one-time promo codes</strong>, some are <strong>full-site discount flips</strong> (the site price is simply lower for the duration of the promo), and some only appear in <strong>on-site banners</strong> at the top of the page. Some codes are single-use per customer, some are multi-use, and some run for just a few hours while others run for days. Each department has its own dedicated codes, so the same "20% off" offer might exist in five different forms at the same time depending on the channel.</p>

    <div class="alert-callout critical">
      <span class="alert-callout-title">🚨 Always check the monthly discount sheet first</span>
      <p style="margin:0 0 10px;font-size:15px;line-height:1.6;color:#fff"><strong style="color:#F4C842">The monthly discount sheet</strong> (in the internal PM tool) is the single source of truth for what's active, who owns it, expiration, and usage limits.</p>
      <p style="margin:0;font-size:14px;line-height:1.55;color:#fff">Do not quote, honor, or apply a discount from memory or a past conversation — codes are rotated constantly. Before applying a code, confirm it's listed as <strong style="color:#F4C842">currently active</strong> for the correct channel. If you can't find the code on the sheet, assume it's expired or wasn't issued by us and escalate to the owning department before proceeding.</p>
    </div>

    <h3 style="margin-top:24px">How Discounts Show Up</h3>
    <table>
      <thead><tr><th>Format</th><th>What It Is</th><th>How Customer Applies</th><th>Examples</th></tr></thead>
      <tbody>
        <tr><td><strong>Promo code</strong></td><td>Alphanumeric code entered at checkout</td><td>Types/pastes the code in the "Discount code" field at checkout</td><td>SAVE20, WELCOME15, DOGMOM25</td></tr>
        <tr><td><strong>Full-site flip</strong></td><td>Site-wide price reduction — no code needed</td><td>Automatic at checkout; customer sees the lower price on every product page</td><td>Sitewide 30% off for Black Friday weekend</td></tr>
        <tr><td><strong>Banner / automatic</strong></td><td>Announced in the top-of-site banner, auto-applies at cart</td><td>Nothing — the banner triggers the cart-level discount automatically</td><td>"Free shipping on $60+" ribbon; "10% off first subscription"</td></tr>
        <tr><td><strong>Bundle / cart threshold</strong></td><td>Discount unlocks based on cart contents or total</td><td>Auto-applies once threshold is met</td><td>"Buy 2 bags, save 15%"; free treats with $75+ order</td></tr>
        <tr><td><strong>Subscription discount</strong></td><td>Ongoing discount for subscribing vs. one-time purchase — usually evergreen (always on)</td><td>Auto-applies when customer selects "Subscribe &amp; Save" on the PDP; persists on every recurring order</td><td>"Subscribe &amp; Save 20%"; "First subscription box 30% off, then 15% ongoing"</td></tr>
        <tr><td><strong>New customer discount</strong></td><td>First-order-only offer to acquire new buyers — typically evergreen and email-captured</td><td>Via email welcome flow, pop-up sign-up form, or paid-ad landing page; applies on first order only</td><td>"10% off your first order"; "$15 off your first bag"; one-time-use per email address</td></tr>
      </tbody>
    </table>

    <p style="margin-top:14px"><strong>Evergreen vs. time-bound offers.</strong> Most limited-time promo codes and site flips run on a short window (hours to days) — they come and go with the monthly discount sheet. <strong>Subscription discounts</strong> and <strong>new customer discounts</strong> are usually <em>evergreen</em>: they're always on, always available, and don't rotate with the calendar. They still belong on the monthly discount sheet so CX knows the exact rate, but you can assume they're live unless the sheet explicitly says otherwise. If a customer asks "is your Subscribe &amp; Save still available," the answer is almost always yes — but confirm the current rate before quoting it.</p>

    <h3 style="margin-top:22px">Who Owns Which Codes</h3>
    <p>Every department issues its own discount codes for its own channels, with its own cadence and usage rules. A customer saying "I got a code in an email" isn't the same as "I got a code from support" — and they may not be valid for the same transaction. Confirm the channel before applying.</p>

    <table>
      <thead><tr><th>Channel / Department</th><th>Typical Discount Type</th><th>How Customer Receives It</th><th>CX Notes</th></tr></thead>
      <tbody>
        <tr><td><strong>Email</strong> (owned by Marketing)</td><td>Welcome codes, win-back offers, seasonal promos</td><td>In a marketing email — single-use per customer typical</td><td>Usually tied to email address; if customer lost the email, Marketing can re-issue</td></tr>
        <tr><td><strong>SMS</strong> (owned by Marketing)</td><td>Flash sales, short-window exclusives</td><td>Text message with the code or a link that auto-applies</td><td>Often shorter expiration (hours, not days) — verify window on the sheet</td></tr>
        <tr><td><strong>Organic social</strong> (owned by Social/Creative)</td><td>Post-specific codes, "as seen in our bio" offers</td><td>Posted in captions, bios, stories, or community groups</td><td>Often multi-use within a set window — check redemption cap on the sheet</td></tr>
        <tr><td><strong>Paid media</strong> (owned by Growth/Performance Marketing)</td><td>Channel-specific codes tied to Meta/Google/TikTok campaigns</td><td>Served in the ad creative or landing page</td><td>Sometimes locked to a landing page URL — may not work sitewide</td></tr>
        <tr><td><strong>CX</strong> (owned by Customer Experience)</td><td>Goodwill codes, retention offers, one-time fixes after a service issue</td><td>CX agent issues directly on the call/ticket</td><td>Limited to service recovery scenarios; use at your judgment within the monthly CX budget</td></tr>
        <tr><td><strong>Influencer / Partnerships</strong></td><td>Creator-branded codes for affiliate tracking</td><td>Shared by the creator in their content or bio</td><td>Valid by the terms of the partnership contract; never extend beyond the contracted window</td></tr>
        <tr><td><strong>Retention / Subscription</strong></td><td>Pause-recovery offers, "stay subscribed" discounts</td><td>Auto-triggered in Shopify subscription flows or via CX</td><td>Applies only to the next billing cycle unless the sheet specifies otherwise</td></tr>
      </tbody>
    </table>

    <div class="team-callout cx" style="margin-top:16px">
      <span class="team-tag">CX — Discount Handling</span>
      <p style="margin:0"><strong>Always verify on the monthly discount sheet before honoring a code.</strong> If a customer says "I had a code that didn't work," check the sheet for status (active/expired/channel-locked) rather than reissuing from memory. If it's expired but the customer has a reasonable ask, use a <strong>CX-issued goodwill code</strong> from the current month's CX allocation — don't invent a new code or extend someone else's campaign code. When applying a code, confirm single-use vs. multi-use on the sheet so you don't block a customer from stacking with something else legitimately.</p>
    </div>

    <div class="team-callout marketing" style="margin-top:10px">
      <span class="team-tag">Marketing — Code Governance</span>
      <p style="margin:0">Every new code must land on the monthly discount sheet <strong>before</strong> it goes live in any campaign — no exceptions. Include owner, channel, type (code/flip/banner/bundle), dollar or percent value, start/end timestamps, and whether it's single-use or multi-use. Codes that aren't on the sheet will not be honored by CX and can cause downstream refund disputes. Avoid overlapping windows on the same channel where possible; if they must overlap, flag which one takes precedence.</p>
    </div>

    <div class="team-callout newhire" style="margin-top:10px">
      <span class="team-tag">New Hire — Where to Find the Sheet</span>
      <p style="margin:0">The monthly discount sheet lives in the internal PM tool. If you can't locate it in your first week, ask your manager or post in the #discounts channel. Bookmark it — you'll reference it constantly regardless of team. It updates at least monthly, often more frequently; treat anything older than a week as stale.</p>
    </div>

    <h3 style="margin-top:28px">Active Subscriber Discounts — Where They Live</h3>
    <p>This is one of the most common sources of customer confusion, so read carefully. <strong>Active subscriber discounts are <em>not</em> applied at checkout</strong> — they live inside the customer's account area on wildearth.com. A customer who is already an active subscriber and tries to add a code at checkout will often see "code not valid" and call us, frustrated. They're not wrong, and the code isn't broken — it's just being applied to the wrong place.</p>

    <table>
      <thead><tr><th>Customer Type</th><th>Where the Discount Applies</th><th>How They Access It</th></tr></thead>
      <tbody>
        <tr><td><strong>Brand-new customer (no account, first order)</strong></td><td>At <strong>checkout</strong></td><td>Types the code into the discount field at checkout, OR clicks a paid-ad / email link that auto-applies it.</td></tr>
        <tr><td><strong>One-time-purchase (OTP) returning customer (no active subscription)</strong></td><td>At <strong>checkout</strong></td><td>Same as new customer — code goes in the discount field at checkout.</td></tr>
        <tr><td><strong>Active subscriber (recurring orders)</strong></td><td>Inside the <strong>customer account area → Subscriptions tab</strong></td><td>Logs into their wildearth.com account, navigates to the Subscriptions tab, and the discount applies to upcoming recurring orders. <em>Not at checkout.</em></td></tr>
      </tbody>
    </table>

    <div class="team-callout cx" style="margin-top:14px">
      <span class="team-tag">CX — The "My Code Doesn't Work at Checkout" Call</span>
      <p style="margin:0">When an <strong>active subscriber</strong> tells you their code isn't working at checkout, the fix is almost never a new code. The issue is that they're trying to apply it in the wrong place. Walk them through it: "Subscriber discounts don't apply at checkout the way new-customer codes do — they apply to your recurring orders inside your account. If you log into wildearth.com and head to the Subscriptions tab in your account, you'll see the discount applied there for your next billing cycle. Want me to walk you through it?" This single fix resolves a huge percentage of these tickets.</p>
    </div>

    <h3 style="margin-top:24px">Two Different Discount Engines: Recharge vs. Shopify</h3>
    <p>Behind the scenes, Wild Earth runs <strong>two separate discount systems</strong>, and they serve different customer types. CX should know which is which so you can troubleshoot intelligently.</p>

    <table>
      <thead><tr><th>Engine</th><th>Used For</th><th>Where Applied</th><th>Symptom When Wrong One Is Tried</th></tr></thead>
      <tbody>
        <tr>
          <td><strong>Recharge discounts</strong></td>
          <td><strong>Active subscribers</strong> only — discounts on existing recurring subscription orders</td>
          <td>Inside the customer's <strong>account → Subscriptions tab</strong>. Applies to upcoming recurring shipments.</td>
          <td>Customer says "code worked but I don't see it in checkout" — that's correct, it's not <em>supposed</em> to. It applies on the next subscription billing cycle.</td>
        </tr>
        <tr>
          <td><strong>Shopify discounts</strong></td>
          <td><strong>One-time purchases (OTP)</strong> and <strong>new-subscriber sign-up offers</strong> (the discount that converts a non-subscriber into a subscriber on their first order)</td>
          <td>At <strong>checkout</strong>, in the standard discount code field — or auto-applied via a banner / paid-ad landing page.</td>
          <td>Customer says "code says invalid at checkout" — verify they're not already an active subscriber trying to use a Shopify-side code; subscriber discounts won't validate at checkout.</td>
        </tr>
      </tbody>
    </table>

    <div class="team-callout cx" style="margin-top:14px">
      <span class="team-tag">CX — Diagnosing a Code Problem in 30 Seconds</span>
      <p style="margin:0">When a customer says "my code doesn't work," ask <strong>three questions in order</strong>: <strong>(1)</strong> Are you a current Wild Earth subscriber, or is this a one-time order / first-time order? <strong>(2)</strong> Where did you get the code (email, ad, support agent, social post)? <strong>(3)</strong> Where are you trying to apply it — at checkout, or in your account area? Ninety percent of "broken" codes are actually a mismatch between the engine the code was issued from (Recharge or Shopify) and the place the customer is trying to apply it. Once you know which engine the code lives in, you know where it should be applied. Then verify it's on the monthly discount sheet.</p>
    </div>

    <div class="team-callout marketing" style="margin-top:10px">
      <span class="team-tag">Marketing — Always Specify Engine on the Sheet</span>
      <p style="margin:0">Every code on the monthly discount sheet must indicate which engine issues it — <strong>"Recharge"</strong> for active-subscriber discounts, <strong>"Shopify"</strong> for OTP and new-subscriber discounts. Without this column, CX can't diagnose the "code doesn't work" tickets correctly. If a campaign needs both (e.g., a sitewide Black Friday flip that should also extend to subscribers), the sheet should explicitly note both rows.</p>
    </div>

    <p style="font-size:13px;color:var(--we-text-muted);font-style:italic;margin-top:14px">💡 <strong>Rule of thumb:</strong> if a code didn't come from the monthly sheet, it doesn't exist for the purpose of this transaction. Escalate rather than improvise.</p>

    </div>
  </div>
</section>

<!-- SEO -->
<section id="seo">
  <div class="card collapsible" data-section="seo">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">19 · SEO</span>
        <h2>SEO — Search Engine Optimization</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <p>SEO is how Wild Earth earns traffic from Google, Bing, and AI-driven answer engines (Perplexity, ChatGPT search, Google's AI Overviews) <em>without</em> paying per click. It's a long game — content, links, and site health compound over months, not days — but it's also the highest-leverage growth channel we own. Paid traffic stops the moment we stop paying; SEO traffic keeps coming.</p>

    <h3 style="margin-top:20px">Priority Keyword Themes for Wild Earth</h3>
    <p>These are the themes we want Wild Earth content and product pages to rank for. Each theme maps to a real customer question or shopping intent:</p>
    <ul style="margin-left:20px">
      <li><strong>Plant-based / vegan dog food</strong> — "vegan dog food," "plant-based dog food brands," "is vegan dog food safe"</li>
      <li><strong>Hypoallergenic / allergy-friendly</strong> — "hypoallergenic dog food," "best dog food for allergies," "dog food without chicken"</li>
      <li><strong>Koji &amp; fungi protein</strong> — "koji dog food," "fungi protein for dogs," "yeast-based dog food"</li>
      <li><strong>Ingredient &amp; sourcing transparency</strong> — "dog food without meat by-products," "clean ingredient dog food"</li>
      <li><strong>DCM / legume concerns</strong> — "grain-free DCM," "dog food without legumes," "FDA DCM list"</li>
      <li><strong>Sustainability &amp; ethics</strong> — "cruelty-free dog food," "sustainable pet food," "carbon footprint dog food"</li>
      <li><strong>Brand terms</strong> — "Wild Earth reviews," "Wild Earth vs [competitor]," "Wild Earth Shark Tank"</li>
    </ul>

    <h3 style="margin-top:22px">What Each Team Owns</h3>
    <table>
      <thead><tr><th>Lever</th><th>Owner</th><th>What "Good" Looks Like</th></tr></thead>
      <tbody>
        <tr><td><strong>Product page copy</strong></td><td>Brand + Marketing</td><td>Unique descriptions per SKU — no duplicates. Benefit-led intro, ingredient list, FAQ block. Include primary keyword naturally in H1 + first paragraph.</td></tr>
        <tr><td><strong>Blog / editorial content</strong></td><td>Marketing / Content</td><td>Answer real customer questions in depth. 1,200–2,000 words for pillar pieces. Internal-link to related products and other articles.</td></tr>
        <tr><td><strong>Meta titles &amp; descriptions</strong></td><td>Marketing</td><td>Unique per page. Title: primary keyword + brand, under ~60 characters. Description: clear benefit + CTA, 140–160 characters.</td></tr>
        <tr><td><strong>Image alt text</strong></td><td>Creative + Web Dev</td><td>Descriptive and accurate — used by screen readers AND image search. "Wild Earth Performance Formula 28-lb bag, plant-based kibble" beats "dog food bag."</td></tr>
        <tr><td><strong>Schema / structured data</strong></td><td>Web Dev</td><td>Product schema, Review/AggregateRating, FAQ schema, Breadcrumbs. Shopify native Product schema is the baseline; enhance where possible.</td></tr>
        <tr><td><strong>Site speed &amp; Core Web Vitals</strong></td><td>Web Dev</td><td>LCP under 2.5s, CLS under 0.1, INP under 200ms. Compress images, lazy-load below the fold, audit third-party scripts quarterly.</td></tr>
        <tr><td><strong>Backlinks / PR</strong></td><td>Marketing + Partnerships</td><td>Earned coverage on pet, wellness, vegan, and sustainability sites. Prioritize quality over quantity — one <em>The Wildest</em> or <em>Rover</em> mention beats 50 directory links.</td></tr>
        <tr><td><strong>Review volume</strong></td><td>CX + Marketing</td><td>Review schema won't render stars in search without volume. Post-purchase review asks, incentive-appropriate, routed to the on-site review app.</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:22px">SEO Do's &amp; Don'ts</h3>
    <div class="do-dont">
      <div class="do">
        <h4>✅ Do</h4>
        <ul>
          <li>Write for real customers first, search engines second — the best SEO reads naturally</li>
          <li>Build topic clusters: one pillar page + several supporting articles that internal-link to each other</li>
          <li>Update old content regularly — refresh stats, rewrite outdated advice, re-publish</li>
          <li>Use descriptive URLs: <code>/blog/vegan-dog-food-guide</code> not <code>/blog/post-482</code></li>
          <li>Get every new product page reviewed for unique meta title + description before launch</li>
          <li>Monitor rankings monthly; investigate any drop of 5+ positions on priority terms</li>
        </ul>
      </div>
      <div class="dont">
        <h4>🚫 Don't</h4>
        <ul>
          <li>Don't stuff keywords — "plant-based dog food plant-based dog food for dogs who need plant-based dog food" is a penalty waiting to happen</li>
          <li>Don't buy backlinks from cheap directories or link farms — Google catches these</li>
          <li>Don't duplicate product descriptions across similar SKUs — even "Classic Roast" and "Golden Rotisserie" should read differently</li>
          <li>Don't publish thin content (under 400 words) on pages we want to rank — better to combine or expand</li>
          <li>Don't block important pages in robots.txt or noindex them by accident during a site redesign</li>
          <li>Don't ignore AI search — <em>ChatGPT</em>, <em>Perplexity</em>, and Google's AI Overviews are citing content the same way; structured, answer-first writing wins both</li>
        </ul>
      </div>
    </div>

    <div class="team-callout marketing" style="margin-top:16px">
      <span class="team-tag">Marketing — Content Calendar</span>
      <p style="margin:0">Every blog piece should ladder to a priority keyword theme above and have a clear internal-link plan to one or more product pages. Before publishing, ask: <strong>what search is this piece winning, and what action does it drive?</strong> Content with no keyword target and no CTA is a nice-to-read, not an SEO asset.</p>
    </div>

    <div class="team-callout creative" style="margin-top:10px">
      <span class="team-tag">Creative — Image Optimization</span>
      <p style="margin:0">Compress images before handing off (WebP or compressed JPG/PNG). Export under 200KB for hero images, under 80KB for supporting imagery where possible. File names matter — <code>wild-earth-performance-formula-bag.jpg</code> beats <code>IMG_2847.JPG</code>. Always supply descriptive alt text with the asset, not an afterthought for Web Dev.</p>
    </div>

    <p style="font-size:13px;color:var(--we-text-muted);font-style:italic;margin-top:14px">📊 <strong>Tracking:</strong> Google Search Console is the primary truth source for impressions, clicks, and ranking changes. Secondary tools (Ahrefs, Semrush) are useful for competitive research and backlink monitoring. Reporting cadence: monthly SEO review owned by Marketing, with quarterly deep-dive.</p>

    </div>
  </div>
</section>

<!-- CRO -->
<section id="cro">
  <div class="card collapsible" data-section="cro">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">20 · CRO</span>
        <h2>CRO — Conversion Rate Optimization</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <p>CRO is the practice of turning more of the traffic we already have into actual customers. Driving more visitors (SEO + paid media) is expensive; converting the visitors we've already paid for is far cheaper per dollar of revenue. A site that converts at 3% prints twice as much money as the same site converting at 1.5% — same traffic, same product, better funnel.</p>

    <h3 style="margin-top:20px">The Wild Earth Funnel</h3>
    <p>Every CRO conversation starts with where customers are dropping off. Our funnel roughly looks like:</p>
    <ol style="margin-left:20px">
      <li><strong>Landing / Home</strong> — Does the hero communicate "plant-based, vet-developed dog food" in under 3 seconds? Is the primary CTA obvious?</li>
      <li><strong>Product page (PDP)</strong> — Are benefits above the fold? Are concerns (DCM, protein source, allergies) addressed without scrolling forever?</li>
      <li><strong>Add to cart</strong> — One-click or multi-step? Does the customer know shipping cost before committing?</li>
      <li><strong>Cart</strong> — Clear subtotal, free-shipping progress bar ($60 threshold), easy quantity editing, subscribe-and-save prompt</li>
      <li><strong>Checkout</strong> — Shopify checkout: as few steps as possible, guest checkout allowed, Shop Pay + Apple Pay + Google Pay visible</li>
      <li><strong>Post-purchase</strong> — Thank-you page upsell, subscription confirmation, clear next steps</li>
    </ol>

    <h3 style="margin-top:22px">High-Impact CRO Levers</h3>
    <table>
      <thead><tr><th>Lever</th><th>Why It Matters</th><th>Quick Wins to Test</th></tr></thead>
      <tbody>
        <tr><td><strong>Hero clarity</strong></td><td>First 3 seconds determine whether a visitor stays or bounces</td><td>A/B test headline wording: "Plant-Powered Dog Food, Vet-Developed" vs. "The Better Bowl for Your Best Friend"</td></tr>
        <tr><td><strong>Social proof</strong></td><td>Reviews, vet endorsements, Shark Tank logo — reduce purchase anxiety</td><td>Move star-rating + review count above the fold on PDPs; test adding "As seen on Shark Tank" ribbon</td></tr>
        <tr><td><strong>Free-shipping messaging</strong></td><td>Transparent shipping is one of the top cart-abandonment fixes</td><td>Persistent banner: "Free shipping on orders $60+"; progress bar in cart showing "$12 to free shipping"</td></tr>
        <tr><td><strong>Subscription framing</strong></td><td>Subscribers have much higher LTV — make sub clearly the better deal</td><td>Default the radio to "Subscribe &amp; Save"; show savings in dollars not just %; make skip/pause obviously easy (reduces sign-up anxiety)</td></tr>
        <tr><td><strong>Objection-busting FAQ on PDP</strong></td><td>Allergy and DCM concerns derail plant-based purchases</td><td>Inline FAQ accordion on every PDP — "Is plant-based safe?", "What about DCM?", "Will my dog like it?"</td></tr>
        <tr><td><strong>Cart recovery</strong></td><td>~70% of carts are abandoned industry-wide; recovering any slice is huge</td><td>Email + SMS recovery sequence — 1h, 24h, 48h. Small CX-approved discount on the 48h send if allowed</td></tr>
        <tr><td><strong>Checkout speed</strong></td><td>Each added step loses customers; autofill and express pay cut friction</td><td>Ensure Shop Pay, Apple Pay, Google Pay appear at top of checkout; test express-checkout from PDP</td></tr>
        <tr><td><strong>Trust signals</strong></td><td>Satisfaction guarantee, return policy, secure-checkout badges</td><td>Add a small trust strip near the "Add to Cart" button: ⭐ 4.8 reviews · 🐕 Vet-developed · ↩️ 30-day guarantee</td></tr>
        <tr><td><strong>Mobile optimization</strong></td><td>60%+ of traffic is mobile; a thumb-friendly UX wins on-site</td><td>Sticky Add-to-Cart bar on mobile PDPs; compress hero images for LCP; test larger tap targets on size/qty selectors</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:22px">How to Run a CRO Test</h3>
    <ol style="margin-left:20px">
      <li><strong>Start with a hypothesis, not a hunch.</strong> "Moving the review badge above the fold will increase PDP → add-to-cart because anxiety around plant-based safety is the top blocker" beats "let's try moving the badge."</li>
      <li><strong>Pick one variable.</strong> Testing hero copy + hero image + CTA color at once tells you nothing about which one mattered.</li>
      <li><strong>Calculate sample size up front.</strong> At current traffic, how many days does the test need to run to reach statistical significance? If the answer is "six months," the test isn't worth running — pick a bigger swing.</li>
      <li><strong>Run at least one full week cycle.</strong> Weekday traffic and weekend traffic convert differently. Never call a test on three days of data.</li>
      <li><strong>Look at downstream metrics too.</strong> A change that lifts add-to-cart but drops checkout completion is a loss. Always track the full funnel, not just the metric you targeted.</li>
      <li><strong>Document the result.</strong> Wins, losses, and inconclusive tests all go in the CRO log so the next round doesn't re-run the same test from scratch.</li>
    </ol>

    <div class="team-callout marketing" style="margin-top:16px">
      <span class="team-tag">Marketing — Test Prioritization</span>
      <p style="margin:0">Use an impact-vs-effort filter: <strong>high impact, low effort</strong> tests go first (copy tweaks, button placement, adding a badge). <strong>High impact, high effort</strong> (redesigning the PDP template) are quarterly bets. <strong>Low impact anything</strong> — skip unless traffic is massive. One high-quality test per month beats five half-baked ones.</p>
    </div>

    <div class="team-callout creative" style="margin-top:10px">
      <span class="team-tag">Creative — Design for the Fold</span>
      <p style="margin:0">Everything above the fold on a PDP should answer three questions: <strong>What is this?</strong> <strong>Who is it for?</strong> <strong>Why should I trust it?</strong> If any of those aren't clear in a 3-second glance, the page will underperform regardless of traffic quality. Prioritize large, legible type and one clear hero CTA over decorative elements.</p>
    </div>

    <div class="team-callout newhire" style="margin-top:10px">
      <span class="team-tag">New Hire — Watch a Real Session</span>
      <p style="margin:0">If you're new to CRO, the fastest way to learn is to watch real session recordings (via Hotjar, Microsoft Clarity, or whatever tool the team uses). Sit through 10 mobile sessions end-to-end. You'll notice friction points that no amount of aggregate data will show you — the hesitation at size-picker, the scroll-past on the reviews section, the cart-abandon at the shipping-cost reveal.</p>
    </div>

    <p style="font-size:13px;color:var(--we-text-muted);font-style:italic;margin-top:14px">📈 <strong>Primary metrics:</strong> Conversion rate (sessions → orders), AOV (average order value), cart-abandonment rate, subscription take rate, mobile conversion rate. Owned by Marketing/Growth, with Creative and Web Dev as collaborators on execution. Monthly review; quarterly deep-dive with CEO.</p>

    </div>
  </div>
</section>

<!-- GLOSSARY -->
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
      <dt>AAFCO</dt>
      <dd>Association of American Feed Control Officials — the governing body that sets US pet food nutritional standards. "AAFCO-certified for adult maintenance" means a food meets minimum nutrition requirements for adult dogs.</dd>
      <dt>Pet Parent / Pup Parent / Dog Mom / Dog Dad</dt>
      <dd>How most American pet owners refer to themselves — and how Wild Earth talks to them. In the US, pets are widely considered family members, not livestock or working animals. Customers will often call themselves "dog mom" or refer to their pet as "my baby." Treat this as a sincere expression of how the customer feels — not as a quirk. CX should mirror this language back when the customer uses it.</dd>
      <dt>Fur Baby / Fur Kid</dt>
      <dd>Affectionate American term for a pet, especially a dog or cat. Conveys that the pet is loved as a family member. Common in marketing copy and customer messages. If a customer calls their pet a "fur baby," they're not joking.</dd>
      <dt>Pet Humanization</dt>
      <dd>The cultural and economic trend of treating pets like family members — buying them premium food, celebrating their birthdays, including them in family photos, paying for pet insurance, etc. Pet humanization is the single biggest driver of why customers will pay 2–3× the price of mass-market kibble for premium brands like Wild Earth.</dd>
      <dt>Rescue / Adopt / Pound / Shelter</dt>
      <dd>A "shelter" or "pound" is a US facility that takes in stray, abandoned, or surrendered animals. To "rescue" or "adopt" is to take an animal from a shelter into your home (often saving it from euthanasia). A huge portion of Wild Earth customers have rescued their dog or cat — many of these animals come with allergies, anxiety, or health issues that plant-based, hypoallergenic food directly helps with. "Adopt don't shop" is a common cultural slogan favoring rescue over buying from breeders.</dd>
      <dt>Recharge</dt>
      <dd>The third-party subscription engine Wild Earth uses to manage recurring orders. <strong>Recharge discounts apply to active subscribers</strong> and are managed inside the customer's account → Subscriptions tab — <em>not</em> at checkout. If a customer is an active subscriber and their code "doesn't work at checkout," it's likely a Recharge discount that needs to be applied in their account area instead.</dd>
      <dt>Subscription</dt>
      <dd>A recurring order. The customer signs up once on wildearth.com, picks a product and a frequency, and food ships automatically on that schedule until they pause, change it, or cancel. Most Wild Earth customers are subscribers, not one-time buyers. Powered by Recharge. Subscriptions are managed in the customer's wildearth.com account → Subscriptions tab.</dd>
      <dt>Subscription Frequency</dt>
      <dd>How often Wild Earth ships the next bag — every 2 weeks, every 4 weeks, every 6 weeks, every 8 weeks, etc. <strong>There is no default or "common" frequency</strong> — it depends on pet size, number of pets, bag size, and whether the household feeds anything else. Bigger or more dogs → more frequent shipments (or a bigger bag). Customers can change frequency anytime in their account.</dd>
      <dt>Skip / Pause / Cancel (Subscription Actions)</dt>
      <dd>Three different things customers can do to a subscription. <strong>Skip</strong> = pass on the very next shipment only; the subscription continues normally after that. <strong>Pause</strong> = halt all future shipments until the customer un-pauses; the subscription stays active in their account. <strong>Cancel</strong> = end the subscription entirely; the customer must start a new one to receive future orders. CX should always offer Skip or Pause before Cancel — customers often only need a temporary fix, not a permanent exit.</dd>
      <dt>Auto-Renewal / Auto-Charge</dt>
      <dd>The automatic billing that runs on each subscription cycle. The customer's saved payment method is charged automatically a few days before the next shipment. Wild Earth emails the customer ahead of each charge so they have a window to skip or adjust. Auto-renewal is what makes a subscription work — and what some customers don't realize they signed up for, hence the "I didn't know I'd be charged again" calls.</dd>
      <dt>Shopify Discounts</dt>
      <dd>Discounts run through the Shopify storefront itself, used for <strong>one-time purchases (OTP)</strong> and <strong>new-subscriber sign-up offers</strong>. These apply at checkout in the standard discount code field. Distinct from Recharge discounts — see Discounts section for the full breakdown.</dd>
      <dt>OTP (One-Time Purchase)</dt>
      <dd>A non-recurring single order — the customer is not subscribed and is buying once. OTP discounts run through Shopify and apply at checkout.</dd>
      <dt>Koji (Aspergillus oryzae)</dt>
      <dd>A food-grade fungus used for thousands of years in fermentation (soy sauce, miso, sake). In Wild Earth treats and kibble, koji provides complete plant-based protein with all 10 essential amino acids dogs need.</dd>
      <dt>Dried Yeast</dt>
      <dd>Saccharomyces-based yeast, the #1 ingredient in Wild Earth Performance kibble. A superfood-tier protein source packed with B vitamins, antioxidants, and minerals. AAFCO-approved (91.6 IFN 7-05-533) and FDA GRAS-classified.</dd>
      <dt>Dry Matter</dt>
      <dd>The composition of a food after water is removed — used to compare wet and dry foods on equal footing (since wet foods are mostly water by weight). When a vet or customer asks for "dry matter protein," they want the protein number with moisture excluded. Wild Earth publishes the guaranteed analysis on each product page; that's the live source.</dd>
      <dt>Guaranteed Analysis</dt>
      <dd>The legally required nutritional panel on a pet food bag — minimum protein, minimum fat, maximum fiber, maximum moisture, etc. Always pulled from the live product page on wildearth.com, not from this hub (numbers update with formula refinements).</dd>
      <dt>DCM (Dilated Cardiomyopathy)</dt>
      <dd>A heart condition that has been the subject of FDA investigation in connection with grain-free / legume-heavy pet foods. Current research shows <strong>no proven link between plant-based diets and DCM</strong>; if a link exists between any diet and DCM, it appears tied to nutritional deficiencies, not protein source. Wild Earth's newer Performance and Maintenance Formulas removed legumes anyway as an extra precaution. See the Ingredients section for the full conversation script.</dd>
      <dt>Taurine</dt>
      <dd>An essential amino acid for heart health in dogs (and required for cats). Wild Earth supplements Taurine in every kibble to meet AAFCO levels from plant sources.</dd>
      <dt>L-Carnitine</dt>
      <dd>Amino acid compound that supports metabolism, muscle function, and heart health. Added to Wild Earth formulas to mirror what meat-based foods provide naturally.</dd>
      <dt>DHA (Docosahexaenoic Acid)</dt>
      <dd>An omega-3 fatty acid critical for brain, eye, and cognitive health. Wild Earth sources DHA from marine microalgae — the original source in the ocean food chain.</dd>
      <dt>Marine Microalgae</dt>
      <dd>Microscopic ocean plants that are the original source of omega-3 DHA (fish simply eat the algae). Used as a plant-based DHA source in Wild Earth.</dd>
      <dt>Hypoallergenic</dt>
      <dd>Formulated to avoid common allergens. Wild Earth is free of the top 10 canine food allergens: beef, dairy, chicken, wheat, lamb, pork, egg, soy, rabbit, and fish.</dd>
      <dt>Prebiotics / FOS / Inulin</dt>
      <dd>Non-digestible plant fibers (like those from chicory root) that feed beneficial gut bacteria, supporting digestion and immune health.</dd>
      <dt>Mixed Tocopherols</dt>
      <dd>A natural form of vitamin E used as a preservative — the plant-based alternative to synthetic preservatives like BHA/BHT.</dd>
      <dt>Crude Protein</dt>
      <dd>The total protein content in a food as measured by nitrogen analysis. Wild Earth Performance Formula is 28% crude protein — comparable to or higher than most meat-based kibbles.</dd>
      <dt>30-Day Return Policy</dt>
      <dd>Inventel's standard return window: customers may request a return within 30 days of their original order. Processing and handling fees vary by order, and return shipping is the customer's responsibility. Some exceptions apply — see the Return Policy section for details.</dd>
      <dt>Evergreen Offer</dt>
      <dd>A discount or promotion that is <em>always on</em> — not tied to a calendar window or short-term campaign. The most common examples at Wild Earth are the <strong>Subscribe &amp; Save discount</strong> (ongoing % off for subscribing) and the <strong>New Customer discount</strong> (one-time % or dollar amount off a first order, usually captured via email signup). Evergreen offers still appear on the monthly discount sheet so everyone knows the exact rate, but unlike seasonal or flash promos, you can assume they're live unless the sheet flags otherwise.</dd>
      <dt>Transition Period</dt>
      <dd>The 7–10 day window recommended for switching a dog to new food, mixing gradually with their previous food to avoid digestive upset.</dd>
    </dl>
    </div>
  </div>
</section>

<!-- RETURN POLICY -->
<section id="returns">
  <div class="card collapsible" data-section="returns">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">22 · Returns</span>
        <h2>30-Day Return Policy</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>Wild Earth follows the <strong>standard Inventel 30-day return policy</strong> with a few brand-specific rules called out below. Some exceptions apply.</p>

    <div class="policy-card">
      <h3>📦 30-Day Return Policy <em style="font-weight:400;font-size:1rem">(note: some exceptions may apply)</em></h3>
      <p>All returns are subject to processing and handling fees which vary depending on your original order. If you decide to cancel or return your order, you will be responsible for the cost of return shipping.</p>
      <p>For return information, please call customer service between <strong>8:30 a.m. and 5:30 p.m. Monday to Friday, EST</strong>, or email us to get a return authorization number and return address.</p>

      <div class="policy-contact" style="margin-top:14px">
        📞 <strong>Phone:</strong> 833-945-3738<br>
        ✉️ <strong>Email:</strong> <a href="mailto:hello@wildearth.com" target="_blank" rel="noopener">hello@wildearth.com</a>
      </div>

      <p style="margin-top:14px;margin-bottom:0;font-style:italic;font-size:13px;color:var(--we-text-muted)">Due to health and sanitary reasons, we cannot accept anything back that has been in direct contact with a human's or animal's body (i.e. apparel, masks, beauty products, or any consumable that has been served to a pet).</p>
    </div>

    <h3 style="margin-top:26px;margin-bottom:10px">Wild Earth-Specific Return Rules</h3>
    <p style="font-size:13px;color:var(--we-text-muted);margin-bottom:12px">These details go beyond the standard Inventel policy and apply only to Wild Earth orders. CX should know all three before quoting a refund total.</p>

    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX · Unopened Products</span>
      <p style="margin:0"><strong>Unopened items are accepted for 30 days.</strong> If a customer has unopened food, treats, or supplements within the 30-day window, CX will accept the return. <strong>The customer pays the return shipping</strong> — they can use any carrier to ship back to the warehouse.</p>
    </div>

    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX · Prepaid Return Labels</span>
      <p style="margin:0"><strong>If a prepaid return label is needed, the cost of the label is deducted from the refund.</strong> Example: customer's product refund is $72.00, prepaid label costs $14.50 — customer receives a refund of $57.50. Always quote this up front so the refund total isn't a surprise. Only offer a prepaid label when the customer specifically asks or when the situation warrants it (e.g., our error).</p>
    </div>

    <div class="team-callout cx" style="margin-top:10px">
      <span class="team-tag">CX · What Gets Refunded</span>
      <p style="margin:0"><strong>Only the cost of the items/food is refunded — original shipping to the customer is not refunded.</strong> On the original order, the shipping they paid to receive the product stays with us. The refund line is product subtotal only (minus any prepaid label cost, if applicable). Make this clear in the refund explanation to avoid callbacks.</p>
    </div>

    <div class="team-callout newhire" style="margin-top:14px">
      <span class="team-tag">New Hire — Quick Math Example</span>
      <p style="margin:0">Customer ordered $80 of food + $8 shipping ($88 total). They want to return unopened bags and request a prepaid label ($12).<br>
      → Refund = <strong>$80 – $12 = $68</strong>. Original $8 shipping is not returned. Walk the customer through this before issuing the RMA.</p>
    </div>

    <p style="font-size:13px;color:var(--we-text-muted);font-style:italic;margin-top:18px">⚠️ <strong>CX process reminder:</strong> Every return requires an RMA number before the customer ships anything back — never tell a customer to ship to the warehouse without one. Confirm the order is within 30 days, confirm the product is unopened (if that's the basis for acceptance), quote the refund math including any label deduction, and issue the RMA + return address (Fulfillment &amp; Shipping section has the address). Lead with empathy — even when fees apply, the brand voice stays warm and solution-focused.</p>
    </div>
  </div>
</section>

<!-- FULFILLMENT -->
<section id="fulfillment">
  <div class="card collapsible" data-section="fulfillment">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">23 · Fulfillment & Shipping</span>
        <h2>Fulfillment &amp; Shipping</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>All Wild Earth orders — both outbound shipments and customer returns — move through the <strong>Inventel warehouse</strong>. Wild Earth does not run its own fulfillment operation; the Inventel warehouse team handles picking, packing, and shipping every order, and receives every return.</p>

    <h3>Warehouse Address (Shipping &amp; Returns)</h3>
    <div class="address-block">
      <span class="addr-label">Inventel Warehouse · All outbound + return shipments</span>
      <strong>240 West Parkway</strong><br>
      Middle Door<br>
      Pompton Plains, NJ 07444
    </div>

    <h3 style="margin-top:24px">How Orders Flow</h3>
    <ol class="process-steps">
      <li><strong>Customer places order</strong> on wildearth.com (Shopify) or through a retail channel.</li>
      <li><strong>CX Fulfillment team prints the shipping label.</strong> There is a <strong>small window after label creation</strong> during which an order can still be cancelled or edited before it's physically released to the warehouse.</li>
      <li><strong>Label goes to the Inventel warehouse team,</strong> who pick, pack, and ship the order. Once it reaches this step, the order is generally locked — changes are no longer possible and a post-ship return/refund is the only path.</li>
      <li><strong>Ground shipping</strong> from Pompton Plains, NJ. Delivery is typically <strong>3–7 business days</strong> within the continental US, with East Coast destinations often arriving in 3–4 days and West Coast in 5–7.</li>
      <li><strong>Returns</strong> are routed back to the same warehouse address above.</li>
    </ol>

    <div class="alert-callout">
      <span class="alert-callout-title">⚠️ CX cancellation / edit window</span>
      If a customer calls or emails asking to <strong>cancel or change an order</strong> (address correction, SKU swap, add-on, etc.), move immediately. The window between label print and warehouse pick is short. Flag it to the CX Fulfillment team as soon as possible — the earlier in the flow, the better the chance of making the change without a return.
    </div>

    <h3 style="margin-top:22px">Shipping Coverage</h3>
    <table>
      <thead><tr><th>Service</th><th>Region</th><th>Estimated Transit Time</th><th>Notes</th></tr></thead>
      <tbody>
        <tr><td>Ground (standard)</td><td>Continental US (Lower 48)</td><td>3–7 business days</td><td>Free on orders over $60; our default service</td></tr>
        <tr><td>Ground — East Coast</td><td>NJ, NY, PA, CT, MA, MD, VA, NC, etc.</td><td>3–4 business days</td><td>Faster due to proximity to Pompton Plains, NJ</td></tr>
        <tr><td>Ground — Midwest</td><td>IL, OH, MI, MN, etc.</td><td>4–5 business days</td><td>Standard ground transit</td></tr>
        <tr><td>Ground — West Coast</td><td>CA, OR, WA, NV, AZ</td><td>5–7 business days</td><td>Longest ground transit from NJ</td></tr>
        <tr><td>Alaska / Hawaii / PR / territories</td><td>Non-contiguous US</td><td>Not currently supported by default</td><td>Escalate to CX Fulfillment Supervisor if a customer requests — case-by-case</td></tr>
        <tr><td>International</td><td>Outside the US</td><td>Not supported</td><td>Wild Earth does not ship internationally at this time</td></tr>
      </tbody>
    </table>
    <p style="font-size:13px;color:var(--we-text-muted);font-style:italic;margin-top:10px">💡 <strong>CX tip:</strong> When quoting delivery times to customers, always give a <em>business-day</em> range and add language like "from the day your order ships" so they don't confuse order date with ship date. Subscription orders lock in a delivery cadence, but the actual transit time still depends on their region.</p>

    <h3 style="margin-top:22px">Returns Flow</h3>
    <p>When a customer is approved for a return under the 30-day return policy, the product is shipped back to the Inventel warehouse at the address above. CX issues a return authorization (RMA) number and provides return-shipping instructions — return shipping and any processing/handling fees are the customer's responsibility. <strong>Do not direct customers to any other address</strong> — all Wild Earth returns must land at the Pompton Plains warehouse so the ops team can process refunds correctly.</p>
    </div>
  </div>
</section>

<!-- TEST ORDERS -->
<section id="test-orders">
  <div class="card collapsible" data-section="test-orders">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">24 · Test Orders</span>
        <h2>Test Orders — How to Place One Safely</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p>Anyone at Inventel who needs to place a test order on wildearth.com (QA, marketing, a new promo code check, etc.) must follow this procedure exactly. The rules exist for one reason: test orders that slip past get real inventory shipped to real addresses. We avoid that by making every test order visually obvious <em>and</em> routable to our own office.</p>

    <div class="alert-callout critical">
      <span class="alert-callout-title">🚨 Mandatory · Stop · Read this before you checkout</span>
      <p style="margin:0 0 10px;font-size:15px;line-height:1.6;color:#fff"><strong style="color:#F4C842">YOU MUST</strong> type <strong style="color:#F4C842">"Test Order"</strong> in the <strong style="color:#F4C842">First Name</strong> field at checkout, and your own name as the Last Name. This is non-negotiable.</p>
      <p style="margin:0;font-size:14px;line-height:1.55;color:#fff">It's the single trigger the warehouse uses to catch live test orders before they ship. An order <em>without</em> "Test Order" in the first-name field is treated as a real customer order — it will be picked, packed, and go out the door with real inventory to a real address. Every team at Inventel (CX, Marketing, Creative, Engineering, QA) follows this rule with zero exceptions.</p>
    </div>

    <h3 style="margin-top:20px">Step-by-Step</h3>
    <ol class="process-steps">
      <li><strong>First Name:</strong> <code style="background:var(--we-cream);padding:2px 8px;border-radius:4px;font-family:'DM Mono',monospace">Test Order</code> (exactly — capital T, capital O, space between).</li>
      <li><strong>Last Name:</strong> Your own name (so the team knows who placed it).</li>
      <li><strong>Shipping address:</strong> Anything works, but the easiest option is the Inventel office — that way if the order does somehow slip through, it arrives at our own door and can be returned to the warehouse without issue.</li>
      <li><strong>Phone / email / payment:</strong> Any valid info. Use internal test cards where available.</li>
      <li><strong>Immediately after checkout:</strong> send a direct message to the <strong>CX Fulfillment Lead</strong> on Google Chat letting them know you placed a test order. (Department only — if you're new and don't know who currently holds this role, ask your manager in week one and bookmark it.)</li>
      <li>In that message, give him everything he needs to act on it: order number or confirmation detail, when the order can be refunded or cancelled, and whether anything else needs to be confirmed first (e.g., a promo code was redeemed, a subscription was created, inventory should decrement, etc.).</li>
      <li><strong>Wait for his reply</strong> confirming the order has been located, put on hold, and cancelled/refunded. Only then is the test complete.</li>
    </ol>

    <h3 style="margin-top:22px">Recommended Test Shipping Address</h3>
    <div class="address-block">
      <span class="addr-label">Inventel Office · Safe fallback address for test orders</span>
      <strong>200 Forge Way</strong><br>
      Unit 1<br>
      Rockaway, New Jersey 07866
    </div>
    <p style="font-size:13px;color:var(--we-text-muted);font-style:italic;margin-top:8px">Using the office address means any test order that gets past the "Test Order" flag and ships anyway will arrive at our own building, where it can be intercepted and returned to the warehouse in Pompton Plains. Personal home addresses should be avoided for exactly this reason.</p>

    <div class="alert-callout">
      <span class="alert-callout-title">📋 What to include in the Google Chat message</span>
      At minimum: (1) "I just placed a test order on wildearth.com," (2) confirmation number or approximate timestamp, (3) what you were testing (promo code, subscription flow, new SKU, etc.), (4) when the order can be cancelled or refunded — immediately, or only after a specific step is verified. The CX Fulfillment Lead will reply when the order is located and put on hold, and again when it's cancelled.
    </div>

    <h3 style="margin-top:22px">What NOT to Do</h3>
    <ul style="margin-left:20px;margin-top:8px">
      <li>Don't use a real customer-sounding first name. "Test Order" is the signal — using "John" or "Jane" defeats the whole safety net.</li>
      <li>Don't skip the Google Chat notification. Even if the name is right, a silent test order means no one knows to put it on hold, and a close-call can still ship.</li>
      <li>Don't use a personal home address as the shipping destination. The office at 200 Forge Way is the safe fallback.</li>
      <li>Don't use live/production loyalty or rewards accounts unless that's specifically what's being tested — they can generate real credits and email sends.</li>
      <li>Don't close out the test until you get confirmation from the Fulfillment Lead that the order is cancelled.</li>
    </ul>
    </div>
  </div>
</section>

<!-- SHOPIFY -->
<section id="shopify">
  <div class="card collapsible" data-section="shopify">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">25 · Shopify Platform</span>
        <h2>Shopify — The Platform Behind the Store</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <p><a href="https://wildearth.com/" target="_blank" rel="noopener">wildearth.com</a> is a <strong>Shopify store</strong>. Almost every customer-facing interaction — browsing, checkout, subscriptions, discount codes, customer accounts, order tracking — runs on Shopify's platform. For CX agents and new hires, knowing this up front saves a lot of confusion, because a huge portion of "how do I…" questions have the same answer: "it's a standard Shopify feature."</p>

    <h3>What "Shopify" means for day-to-day CX</h3>
    <table>
      <thead><tr><th>Area</th><th>What's powered by Shopify</th><th>Why it matters for CX</th></tr></thead>
      <tbody>
        <tr><td>Storefront &amp; checkout</td><td>Every product page, cart, checkout, payment processing</td><td>Outages or checkout issues are often platform-wide — check <a href="https://www.shopifystatus.com/" target="_blank" rel="noopener">shopifystatus.com</a> before escalating</td></tr>
        <tr><td>Customer accounts</td><td>Login, password resets, order history, saved addresses</td><td>Customers reset their own password via email link — we can't read or set passwords for them</td></tr>
        <tr><td>Order management</td><td>Order numbers (e.g., #WE12345), fulfillment status, tracking emails</td><td>Order numbers are the universal lookup key — always ask for one first</td></tr>
        <tr><td>Discount codes</td><td>Promo codes, automatic discounts, free-shipping thresholds</td><td>Codes are single-use or multi-use depending on setup — Marketing owns the code list</td></tr>
        <tr><td>Subscriptions</td><td>Typically managed by a Shopify app (e.g., Recharge, Skio, or Shopify's native Subscriptions)</td><td>The customer portal is linked from the customer's account page — self-serve skip/pause/cancel</td></tr>
        <tr><td>Email notifications</td><td>Order confirmation, shipping confirmation, delivery, refund confirmation</td><td>These are automated — if a customer didn't get one, check spam first, then verify the email on file</td></tr>
        <tr><td>Refunds</td><td>Processed through the Shopify admin, return to the original payment method</td><td>Refunds typically show in the customer's account in 5–10 business days depending on bank</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:24px">URLs CX should recognize</h3>
    <ul style="margin-left:20px">
      <li><a href="https://wildearth.com/account" target="_blank" rel="noopener">wildearth.com/account</a> — customer login / order history</li>
      <li><a href="https://wildearth.com/account/login" target="_blank" rel="noopener">wildearth.com/account/login</a> — login &amp; password reset entry point</li>
      <li><a href="https://wildearth.com/collections/all" target="_blank" rel="noopener">wildearth.com/collections/all</a> — full catalog collection</li>
      <li><a href="https://wildearth.com/policies/refund-policy" target="_blank" rel="noopener">wildearth.com/policies/refund-policy</a> — return policy page (standard Shopify policy path)</li>
      <li><a href="https://wildearth.com/policies/shipping-policy" target="_blank" rel="noopener">wildearth.com/policies/shipping-policy</a> — shipping policy</li>
      <li><a href="https://wildearth.com/policies/privacy-policy" target="_blank" rel="noopener">wildearth.com/policies/privacy-policy</a> — privacy policy</li>
      <li><a href="https://wildearth.com/policies/terms-of-service" target="_blank" rel="noopener">wildearth.com/policies/terms-of-service</a> — terms of service</li>
    </ul>

    <div class="alert-callout">
      <span class="alert-callout-title">🔐 Security reminder</span>
      Because this is Shopify, <strong>CX never handles customer passwords or payment card info directly.</strong> Password resets are always done via the self-serve email link on the login page. Payment updates are done by the customer in their own account portal. If a customer asks us to change their password or enter a card for them, politely redirect them to the self-serve flow.
    </div>

    <h3 style="margin-top:22px">When to escalate a Shopify-related issue</h3>
    <ul style="margin-left:20px">
      <li><strong>Site down or checkout failing for multiple customers</strong> → escalate to the Web Dev Team and check <a href="https://www.shopifystatus.com/" target="_blank" rel="noopener">Shopify Status</a>.</li>
      <li><strong>Discount code not working as intended</strong> → check with Marketing; they own the code configuration in the Shopify admin.</li>
      <li><strong>Subscription won't cancel / customer can't access their portal</strong> → escalate to the CX Supervisor, who can adjust directly in the subscription app admin.</li>
      <li><strong>Missing order confirmation email</strong> → verify the address on file first, then check the Shopify order record for send status before escalating.</li>
      <li><strong>Refund not appearing in customer's account after 10 business days</strong> → pull the Shopify refund transaction ID and escalate to CX Fulfillment Supervisor.</li>
    </ul>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq">
  <div class="card collapsible" data-section="faq">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">26 · FAQ</span>
        <h2>Frequently Asked Questions</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">

    <div class="faq-item"><div class="faq-q">Is Wild Earth really safe for my dog?</div><div class="faq-a">Yes. All Wild Earth dog food meets or exceeds AAFCO nutritional standards for adult dog maintenance, is formulated by veterinarians, and includes supplemented Taurine, L-Carnitine, and DHA. We always recommend a brief chat with your vet before any diet change, especially for dogs with medical conditions.</div></div>
    <div class="faq-item"><div class="faq-q">Can I feed this to my puppy?</div><div class="faq-a">No — Wild Earth kibble is formulated for adult dogs (1 year and older) only. AAFCO has different standards for growth/puppy nutrition that our current formulas don't meet. Please use a puppy-approved formula until your dog turns one.</div></div>
    <div class="faq-item"><div class="faq-q">What is koji and is it safe?</div><div class="faq-a">Koji (<em>Aspergillus oryzae</em>) is a food-grade fungus used in Asian cuisine for thousands of years — it's what makes soy sauce, miso, and sake. It's completely safe, provides all 10 essential amino acids, and is one of the most sustainable proteins on Earth.</div></div>
    <div class="faq-item"><div class="faq-q">What are the most common food allergies in dogs?</div><div class="faq-a">Beef, dairy, chicken, wheat, lamb, pork, egg, soy, rabbit, and fish — the top 10. Wild Earth contains none of them, which is why so many customers with itchy dogs find relief.</div></div>
    <div class="faq-item"><div class="faq-q">How do I transition my dog to Wild Earth?</div><div class="faq-a">Gradually over 7–10 days. Start with ~25% Wild Earth mixed with 75% of their current food for days 1–3, then 50/50 for days 4–6, then 75/25 for days 7–10, and finally 100% Wild Earth. Always provide fresh water.</div></div>
    <div class="faq-item"><div class="faq-q">How much does shipping cost and how fast is it?</div><div class="faq-a">Shipping is free on orders over $60, with standard delivery in 3–7 business days within the continental US.</div></div>
    <div class="faq-item"><div class="faq-q">Can I cancel my subscription at any time?</div><div class="faq-a">Yes, absolutely. Log into your wildearth.com account, go to "Manage Subscription," and you can pause, skip, change frequency, or cancel anytime — no calls required.</div></div>
    <div class="faq-item"><div class="faq-q">What's the difference between Performance and Maintenance kibble?</div><div class="faq-a">Performance (28% protein) is our higher-protein formula designed for active dogs, aging dogs needing muscle support, or recovery. Maintenance (23% protein) is our limited-ingredient, everyday balanced formula — great for dogs with sensitivities. Both are complete and balanced; Performance just has a higher protein and DHA profile, while Maintenance is simpler and gentler.</div></div>
    <div class="faq-item"><div class="faq-q">Is Wild Earth made in the USA?</div><div class="faq-a">Yes — manufactured in the USA with globally sourced high-quality ingredients. Our HQ is in Durham, NC.</div></div>
    <div class="faq-item"><div class="faq-q">Does Wild Earth make cat food?</div><div class="faq-a">Yes! Wild Earth currently sells <strong>Unicorn Pate</strong>, a plant-based wet pâté for cats — nutritionally complete, fortified with supplemental Taurine (essential for cats), grain-free, and free of animal by-products. <a href="https://wildearth.com/products/unicorn-pate-plant-based-cat-food" target="_blank" rel="noopener" style="color:var(--we-link);text-decoration:underline">View product page on wildearth.com →</a></div></div>
    <div class="faq-item"><div class="faq-q">What's the return policy?</div><div class="faq-a">Wild Earth follows the standard Inventel 30-day return policy. Customers can request a return within 30 days of their order. Processing and handling fees apply (these vary by order), and return shipping is the customer's responsibility. Unopened, sealed product is eligible; anything that's been in direct contact with a pet (opened food served to them) cannot be accepted back for health and sanitary reasons. To start a return, call 833-945-3738 Mon–Fri 8:30a–5:30p EST or email hello@wildearth.com for an RMA number and return address.</div></div>
    <div class="faq-item"><div class="faq-q">Wild Earth filed for Chapter 11. Are you still in business?</div><div class="faq-a">Yes! Chapter 11 is a restructuring, not a closure. It's business as usual — we're shipping orders, honoring subscriptions, producing inventory, and expanding retail distribution. Your dog's food supply is not interrupted.</div></div>
    </div>
  </div>
</section>

<!-- RESOURCES -->
<section id="resources">
  <div class="card collapsible" data-section="resources">
    <div class="section-header-bar" onclick="toggleSection(this)">
      <div class="section-header-left">
        <span class="eyebrow">27 · Resources & Contacts</span>
        <h2>Additional Resources & Contacts</h2>
      </div>
      <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
    </div>
    <div class="section-body">
    <table>
      <thead><tr><th>Resource</th><th>Where to Find It</th><th>Owner / Contact</th></tr></thead>
      <tbody>
        <tr><td>Brand Style Guide (full)</td><td>Internal brand hub</td><td>[ Add link — Brand Team ]</td></tr>
        <tr><td>Logo & Asset Library</td><td>Internal DAM / brand drive</td><td>[ Add link — Brand Team ]</td></tr>
        <tr><td>Product Specs / Ingredient Sheets</td><td><a href="https://wildearth.com/pages/ingredients" target="_blank" rel="noopener">wildearth.com/pages/ingredients</a></td><td>Product Team</td></tr>
        <tr><td>Current Promotions / Offers</td><td><a href="https://wildearth.com/" target="_blank" rel="noopener">wildearth.com homepage</a></td><td>Marketing</td></tr>
        <tr><td>Brand Website</td><td><a href="https://wildearth.com/" target="_blank" rel="noopener">wildearth.com</a></td><td>Marketing / Web Team</td></tr>
        <tr><td>Our Story</td><td><a href="https://wildearth.com/pages/our-story" target="_blank" rel="noopener">wildearth.com/pages/our-story</a></td><td>Brand Team</td></tr>
        <tr><td>Shark Tank page</td><td><a href="https://wildearth.com/pages/shark-tank-2" target="_blank" rel="noopener">wildearth.com/pages/shark-tank-2</a></td><td>Marketing</td></tr>
        <tr><td>CX Phone</td><td>833-945-3738 · Mon–Fri 8:30a–5:30p EST</td><td>CX Team</td></tr>
        <tr><td>CX Email</td><td><a href="mailto:hello@wildearth.com" target="_blank" rel="noopener">hello@wildearth.com</a></td><td>CX Team</td></tr>
      </tbody>
    </table>

    <h3 style="margin-top:24px">Escalation Contacts (by department)</h3>
    <p style="font-size:13px;color:var(--we-text-muted);font-style:italic">Listed by department, not individual, to keep this hub evergreen as personnel changes.</p>
    <table>
      <thead><tr><th>Escalation Type</th><th>Department</th></tr></thead>
      <tbody>
        <tr><td>Customer complaint — unresolved after first contact</td><td>CX Supervisor</td></tr>
        <tr><td>Return or refund dispute</td><td>CX Fulfillment Supervisor</td></tr>
        <tr><td>Brand or product question</td><td>Brand Lead</td></tr>
        <tr><td>Technical or website issue</td><td>Web Dev Team</td></tr>
        <tr><td>Media, press, or partnership inquiry</td><td>Marketing / Partnerships</td></tr>
        <tr><td>Legal or compliance concern</td><td>Legal / Compliance</td></tr>
        <tr><td>Veterinary / product safety question</td><td>Brand Lead</td></tr>
      </tbody>
    </table>
    </div>
  </div>
</section>

<!-- QUIZ -->
<section id="quiz-section" class="collapsible">
  <div class="section-header-bar" onclick="toggleSection(this)">
    <div class="section-header-left">
      <span class="eyebrow" style="color:var(--we-sage)">28 · Knowledge Check Quiz</span>
      <h2>Prove It · 40 Questions · 70% to Pass</h2>
    </div>
    <button class="section-toggle" aria-label="Toggle section"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>
  </div>
  <div class="section-body">
    <div id="quiz-intro">
      <p>Read everything above first. Then take this quiz to confirm you've internalized what matters most for handling Wild Earth customer interactions and brand decisions. <strong>Pass: 28 of 40 correct (70%).</strong> One question at a time, immediate feedback, correct answers shown when you miss. You can retake as many times as you need — no penalty.</p>
      <p>When you pass, you'll be able to enter your name and title, then print or save a certificate to send to your HR onboarding trainer as proof of completion.</p>
      <button class="quiz-start-btn" onclick="startQuiz()">Start the quiz →</button>
    </div>
    <div class="quiz-container" id="quiz-container" style="display:none">
      <div id="quiz-start" style="display:none">
        <h3 style="color:#fff;margin-bottom:10px">Ready to test what you've learned?</h3>
        <p style="color:var(--we-sage);font-size:14px">You'll get a multiple-choice question one at a time, drawn from everything above. Select an answer and you'll see immediately whether you got it right, then click Next to continue. You can retake as many times as you want — keep going until you pass!</p>
        <button class="quiz-start-btn" onclick="startQuiz()">Start Quiz</button>
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

<footer>© Inventel · Wild Earth Brand Knowledge Hub · For internal use only</footer>

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
const quizQuestions = [
  {q:"Where is the Inventel warehouse that ships all Wild Earth orders and receives all returns located?", options:["Rockaway, NJ","Pompton Plains, NJ","Durham, NC","Brooklyn, NY"], correct:1},
  {q:"What is the name of Wild Earth's plant-based cat food product?", options:["Rainbow Pate","Unicorn Pate","Dragon Bowl","Phoenix Feast"], correct:1},
  {q:"What MUST you use as the First Name field when placing a test order on wildearth.com?", options:["Your own first name","Anything — it doesn't matter","Test Order","DO NOT SHIP"], correct:2},
  {q:"What unique fungi-based ingredient does Wild Earth use?", options:["Shiitake","Koji","Reishi","Truffle"], correct:1},
  {q:"Which Wild Earth formula has the highest protein content (28%)?", options:["Maintenance Classic Roast","Clean Protein Dog Treats","Performance Formula","Unicorn Pate"], correct:2},
  {q:"Which age group is Wild Earth kibble formulated for?", options:["Puppies only","Adult dogs (1 year+)","Senior dogs only","All life stages including puppies"], correct:1},
  {q:"What is the typical ground shipping transit time for Wild Earth orders within the continental US?", options:["Same day","1–2 business days","3–7 business days","7–10 business days"], correct:2},
  {q:"Under Wild Earth's standard 30-day return policy (following the Inventel template), who pays for return shipping?", options:["Wild Earth always covers it","The customer — return shipping is their responsibility","It's split 50/50","Shipping is free on all returns"], correct:1},
  {q:"Which of these is NOT in Wild Earth food?", options:["Chickpeas","Oats","Chicken","Sweet potato"], correct:2},
  {q:"What is the CX phone number for Wild Earth?", options:["888-846-2977","833-945-3738","800-555-1234","888-374-3710"], correct:1},
  {q:"What is the CX email for Wild Earth?", options:["support@wildearth.com","info@wildearth.com","hello@wildearth.com","help@wildearth.com"], correct:2},
  {q:"Which regulatory body's nutritional standards does Wild Earth meet?", options:["FDA","USDA","AAFCO","EPA"], correct:2},
  {q:"Which is NOT one of the top 10 canine food allergens Wild Earth avoids?", options:["Beef","Chicken","Quinoa","Soy"], correct:2},
  {q:"What's the recommended transition period when switching to Wild Earth?", options:["1-2 days","7-10 days","3 weeks","Immediate switch"], correct:1},
  {q:"What essential nutrient is Unicorn Pate fortified with specifically for cats?", options:["Vitamin C","Taurine","Iron","Calcium only"], correct:1},
  {q:"What e-commerce platform powers wildearth.com?", options:["WooCommerce","Shopify","Magento","A fully custom build"], correct:1},
  {q:"When did Inventel acquire Wild Earth?", options:["2019","2022","2024","2025"], correct:3},
  {q:"What are the three flavors of the Wild Earth Superfood Dog Treats 3-Pack?", options:["Chicken, Beef, Lamb","Peanut Butter, Strawberry & Beet, Banana & Cinnamon","Pumpkin, Apple, Carrot","Vanilla, Chocolate, Mint"], correct:1},
  {q:"According to cited research, plant-based diets are associated with how much additional lifespan in dogs?", options:["6 months","1.5 years","3 years","No difference"], correct:1},
  {q:"What is the current status of Wild Earth supplement chews (Hip & Joint, Skin & Coat, Calming, Digestive)?", options:["Top sellers","Coming soon","Discontinued","Available only by prescription"], correct:2},
  {q:"After placing a test order, who should you message on Google Chat so they can locate the order and put it on hold?", options:["Nobody — the system handles it automatically","The CX Fulfillment Lead","The warehouse team directly","The CEO"], correct:1},
  {q:"Which is the current flavor of the Wild Earth Performance Formula Dog Food?", options:["Veggie Supreme","Chicken Feast","Beef Roast","Salmon Bowl"], correct:0},
  {q:"What is Wild Earth's stance on puppy food?", options:["Our kibble is great for all ages","Use a puppy-approved food until 1 year, then switch to Wild Earth","Puppies should only eat treats","We sell a dedicated puppy formula"], correct:1},
  {q:"Which is required on every paid or sponsored partner post?", options:["A coupon code","FTC disclosure (#ad or paid partnership tag)","A competitor comparison","Veterinary approval"], correct:1},
  {q:"Escalations in this hub are listed by…", options:["Individual staff name","Phone extension","Department","Shift time"], correct:2},
  {q:"Which of the following is one of the universal patterns shared by Inventel's top-performing ads?", options:["High-gloss studio production","Lead with a specific, relatable problem","Long bullet-list of features","A celebrity endorsement in every ad"], correct:1},
  {q:"The Wild Earth ad headline 'I Don't Hunt. I Nap.' is a classic example of which winning ad pattern?", options:["Stat-led education","Contrast / 'switch' framing","Influencer takeover","Holiday seasonal"], correct:1},
  {q:"What is the single source of truth for active discount codes at Wild Earth?", options:["Whatever a customer reads to you","The monthly discount sheet in the internal PM tool","The brand's homepage banner","The CX agent's own memory"], correct:1},
  {q:"Which of these is considered an 'evergreen offer' (always on, not tied to a calendar window)?", options:["Black Friday sitewide 30% off","Subscribe & Save discount","One-day flash sale","Influencer-only code expiring tonight"], correct:1},
  {q:"What is Wild Earth's free-shipping threshold for orders within the continental US?", options:["$30","$50","$60","$100"], correct:2},
  {q:"In SEO, which team typically owns site speed and Core Web Vitals?", options:["CX","Web Dev","Marketing","Brand"], correct:1},
  {q:"When briefing a new ad concept inspired by 'I Don't Hunt. I Nap.', which is the right approach?", options:["Replicate the dog, couch, and headline almost exactly","Copy the structural pattern (switch framing + emotional contrast) with a fresh visual and headline","Use a totally unrelated structure to avoid looking copied","Skip briefing — let the creative team start from scratch"], correct:1},
  {q:"Which of Wild Earth's six brand voice modes is anchored in tail wags, zoomies, and dog-positive humor?", options:["Knowledgeable, Not Overbearing","Empowering & Encouraging","Playful & Joyful","Inclusive & Welcoming"], correct:2},
  {q:"A customer is trying to redeem a code that isn't on this month's discount sheet. What's the correct CX move?", options:["Honor it anyway to keep the customer happy","Refuse coldly and end the call","Verify the sheet first; if it's not there and the customer has a reasonable ask, use a current CX-issued goodwill code","Call the customer back in a few days"], correct:2},
  {q:"Why are American customers willing to pay $60+ for a bag of Wild Earth dog food when cheaper kibble exists at the grocery store?", options:["They have to — Wild Earth has a monopoly","They view their pet as a family member and prioritize health, ingredient quality, and ethical alignment over price","They get reimbursed by insurance","Wild Earth is the only legal option in their state"], correct:1},
  {q:"What is the #1 ingredient in Wild Earth Performance Formula kibble?", options:["Chickpeas","Dried yeast","Brown rice","Potato protein"], correct:1},
  {q:"An active subscriber says their discount code 'isn't working at checkout.' What's the most likely explanation?", options:["The code is fake","Subscriber discounts apply inside the customer's account → Subscriptions tab, not at checkout","The website is broken","The customer needs to call their bank"], correct:1},
  {q:"Which discount engine handles active subscriber discounts at Wild Earth?", options:["Shopify discounts","Recharge","Stripe","PayPal"], correct:1},
  {q:"A new subscriber asks 'how often should I get a shipment?' What's the right CX answer?", options:["Tell them every 4 weeks — that's the default","Ask about their pet size, number of pets, bag size, and other food sources, then walk them through the rough table — there is no default","Tell them every 8 weeks — most customers like that","Tell them it doesn't matter, they can always change it later"], correct:1},
  {q:"A customer says 'I have too much food piling up — your shipments are too frequent.' What are the two correct fixes?", options:["Refund their last order and end the subscription","Skip the next order or push the date out, AND lengthen the frequency interval going forward","Tell them to throw out the extra food","Switch them to a smaller bag at the same frequency"], correct:1}
];

let currentQ = 0;
let userAnswers = [];
let awaitingNext = false;

function startQuiz(){
  currentQ = 0;
  userAnswers = [];
  awaitingNext = false;
  const intro = document.getElementById('quiz-intro');
  if(intro) intro.style.display = 'none';
  document.getElementById('quiz-container').style.display = 'block';
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
          <div class="completion-sub">Wild Earth Brand Knowledge Hub</div>
        </div>
        <div class="completion-card">
          <div class="completion-brand">
            <img class="logo-sm" src="https://wildearth.com/cdn/shop/files/Logo_no_tag.png" alt="Wild Earth logo" onerror="this.style.display='none'">
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
              <span class="completion-stat-value" style="color:var(--we-green)">PASSED ✓</span>
            </div>
          </div>

          <div class="completion-track">
            Training Track
            <strong>Wild Earth — Brand Knowledge Hub</strong>
          </div>

          <div class="completion-actions">
            <button class="btn-retake" onclick="startQuiz()">↩ Retake Quiz</button>
            <button class="btn-print" onclick="printCompletion()">🖨️ Print Certificate</button>
          </div>
        </div>
      </div>
      <div style="max-width:520px;margin:18px auto 0;padding:14px 18px;background:rgba(255,255,255,.08);border:1px solid rgba(183,228,199,.25);border-radius:10px;color:var(--we-sage);font-size:13px;line-height:1.6;text-align:center">
        <strong style="color:#fff">📨 Send to your HR onboarding trainer as proof of completion.</strong><br>
        Use <strong>🖨️ Print Certificate</strong> above — in the browser's print dialog, either send to a printer <em>or</em> choose <strong>"Save as PDF"</strong> as the destination. A clean screenshot of this completion card is also accepted.
      </div>
    `;
  } else {
    resultsEl.innerHTML = `
      <div class="fail-header">
        <span class="fail-emoji">📚</span>
        <h3>Not quite — give it another shot</h3>
        <div class="fail-score">${correct} / ${quizQuestions.length} (${scorePct}%)</div>
        <p class="fail-msg">
          You need 18 correct (70%) to pass. Review the sections above — especially the Product Line, Return Policy, Fulfillment, and Test Orders — and try again. You've got this!
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
    nameInput.style.borderColor = 'var(--we-danger)';
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
<?php bh_back_to_index_button('brand-hub-index', 'All Hubs'); ?>

</body>
</html>
