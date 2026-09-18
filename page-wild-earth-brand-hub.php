<?php /* Template Name: Wild Earth Brand Hub */ ?>
<?php bh_require_login(); ?>
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
<style>
/* ===== STANDARD QUIZ SUBMISSION BLOCK (matches Life Watch hub) ===== */
#quiz-section .submit-steps{color:var(--we-sage);font-size:14px;line-height:1.7;padding-left:22px;margin:10px 0}
#quiz-section .submit-steps li{color:var(--we-sage);margin-bottom:4px}
#quiz-section .submit-steps strong{color:#fff}
#quiz-section .submit-steps a,#quiz-section .naming-box a{color:#FFD27A;font-weight:600}
#quiz-section .naming-box{max-width:660px;margin:14px 0 0;padding:14px 18px;background:rgba(255,255,255,.10);border:1px solid rgba(255,210,122,.45);border-radius:10px;color:var(--we-sage);font-size:14px;line-height:1.7}
#quiz-section .naming-box strong{color:#fff}
#quiz-section .naming-box code{color:#FFD27A;font-family:'DM Mono',monospace;font-size:13px;word-break:break-word}
</style>
<style>
/* ===== WINNING CREATIVES · GOOGLE CHAT LINK CARD ===== */
#creatives .creatives-link-card{border:2px dashed rgba(212,120,42,.6);border-radius:12px;padding:18px 20px;margin:14px 0;display:flex;flex-wrap:wrap;align-items:center;gap:10px;background:#fff}
#creatives .creatives-link-card p{flex-basis:100%;margin:0}
#creatives .creatives-link{display:inline-block;background:#fff;border:2px solid var(--we-link);border-radius:10px;padding:9px 16px;font-weight:700;color:var(--we-link);text-decoration:underline}
#creatives .creatives-link:hover{background:#EEF4FF;opacity:1}
</style>
<style>
/* ===== SOURCE-OF-TRUTH PROVENANCE ===== */
.source-note{background:#FFFAEB;border:1px solid #AFBF36;border-left:4px solid #AFBF36;border-radius:8px;padding:12px 16px;margin:14px 0;font-size:13px;line-height:1.6;color:#3A3A22}
.source-note strong{color:#212121}
.source-note code{font-family:'DM Mono',monospace;font-size:12px;background:rgba(175,191,54,.16);padding:1px 5px;border-radius:3px}
.op-note{background:#F6F6F4;border:1px dashed #B5B5A8;border-radius:8px;padding:11px 15px;margin:12px 0;font-size:12.5px;line-height:1.55;color:#55554A}
.op-note strong{color:#2A2A22}
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

    <div class="source-note">
      <strong>Source of truth:</strong> the Vision, Mission and Goals below are quoted from <code>Wild_Earth Brand Guidelines.pdf</code>, p.4 (2024 brand guideline, DarkRoast Design). Do not reword them. Any proposed rewrite must be approved by the brand owner before it appears here or in any campaign.
    </div>

    <h3>Vision</h3>
    <p style="font-size:1.05rem;color:var(--we-forest);border-left:4px solid var(--we-green-light);padding-left:16px;margin-bottom:20px">Humanity's food system is on the brink of a profound transformation. At Wild Earth, we harness cutting-edge technology to create superior, functional foods that nourish all beings. <strong>Our vision is a thriving, rewilded planet for future generations.</strong></p>

    <h3>Mission</h3>
    <p style="font-size:1.05rem;color:var(--we-forest);border-left:4px solid var(--we-green-light);padding-left:16px;margin-bottom:20px">Our mission at Wild Earth is to harness new technologies to create innovative, plant-based foods that enhance health and wellness for all beings. We are committed to promoting better nutrition while actively contributing to the rewilding of our planet, restoring ecosystems, and fostering a sustainable future.</p>

    <h3>Goals</h3>
    <p style="font-size:1.05rem;color:var(--we-forest);border-left:4px solid var(--we-green-light);padding-left:16px;margin-bottom:24px">To become the leading innovator in plant-based, functional foods, transforming global nutrition and actively contributing to the rewilding and restoration of natural ecosystems. We aim to set new benchmarks in sustainability, health, and technology, ensuring a thriving, nourished planet for all beings.</p>

    <h3>Brand Pillars</h3>
    <div class="op-note">
      <strong>Operational, not from the brand guideline.</strong> The six pillars below are hub-authored working structure for CX, Creative and Marketing. They are a useful decision filter, but the 2024 guideline does not define pillars — where the two ever conflict, the Vision, Mission and Goals above win.
    </div>
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
    <div class="source-note">
      <strong>Source of truth:</strong> the five personality words are the official set from <code>Wild_Earth Brand Guidelines.pdf</code>, p.6. The creative direction and its four keywords are from p.8. Keep them in mind while creating any piece of communication for the brand.
    </div>

    <p><strong>Creative direction:</strong> a retro aesthetic blended with modern vibrancy — nostalgic yet fresh and relevant for today's market. The goal is a <strong>premium feel that stays approachable</strong>, connecting with a diverse audience and using color and design to make products pop on the shelf and foster a sense of community.</p>
    <p><strong>Direction keywords:</strong> Retro · Avant-Garde · Bold · Colorful</p>

    <h3 style="margin-top:22px">The Five Official Personality Words</h3>
    <div class="adj-grid">
      <div class="adj"><div class="adj-title">Bright</div><div class="adj-desc">Light, vivid and energetic — in color, in copy and in outlook. Never muted or grim, even when the subject is the food system.</div></div>
      <div class="adj"><div class="adj-title">Expressive</div><div class="adj-desc">The brand has a voice and uses it. Big type, strong statements, real personality — not neutral corporate register.</div></div>
      <div class="adj"><div class="adj-title">Wild</div><div class="adj-desc">Untamed and unafraid. This is the word the brand is named for: re-wilding the earth, and refusing to look like conventional pet food.</div></div>
      <div class="adj"><div class="adj-title">Nostalgic</div><div class="adj-desc">Retro reference points — heritage packaging, vintage type, familiar warmth — repurposed for a modern product.</div></div>
      <div class="adj"><div class="adj-title">Avant-Garde</div><div class="adj-desc">Forward-leaning and design-led. Willing to do the unexpected thing, and to look like nothing else on the shelf.</div></div>
    </div>

    <div class="op-note">
      <strong>Retired from this hub:</strong> the previous list (Pioneering, Nurturing, Scientific, Earthy, Optimistic, Transparent, Playful, Bold, Inclusive, Compassionate) and the direction line "Purpose-Driven · Scientifically Grounded · Warmly Optimistic · Playfully Earnest" were not from any approved source and have been removed. Do not reintroduce them into briefs.
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

    <h3>Main Color Palette</h3>
    <div class="source-note">
      <strong>Source of truth:</strong> <code>Wild_Earth Brand Guidelines.pdf</code>, pp.19&ndash;21. These six are the entire main palette. When exporting, use the color profile in the brand AI folder. The forest-green set this hub previously listed (Forest #1B4332, Wild Green #2D6A4F, Meadow, Sprout, Sage, Cream, Kraft, Harvest) was <strong>never approved</strong> &mdash; do not treat it as official or use it in new work.
    </div>
    <div class="palette">
      <div class="swatch"><div class="swatch-color" style="background:#E3ECAA;border:1px solid rgba(0,0,0,.12)"></div><div class="swatch-info"><div class="swatch-name">Daydream</div><div class="swatch-role">RGB 227, 236, 170 · CMYK 4/0/26/7</div><div class="swatch-hex">#E3ECAA</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#AFBF36"></div><div class="swatch-info"><div class="swatch-name">Lush Bamboo</div><div class="swatch-role">RGB 175, 191, 54 · CMYK 6/0/54/25</div><div class="swatch-hex">#AFBF36</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#212121"></div><div class="swatch-info"><div class="swatch-name">Pepper</div><div class="swatch-role">RGB 33, 33, 33 · CMYK 0/0/0/87</div><div class="swatch-hex">#212121</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#FFFFFF;border:1px solid rgba(0,0,0,.18)"></div><div class="swatch-info"><div class="swatch-name">White</div><div class="swatch-role">RGB 255, 255, 255 · CMYK 0/0/0/0</div><div class="swatch-hex">#FFFFFF</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#18181B"></div><div class="swatch-info"><div class="swatch-name">Near-black</div><div class="swatch-role">RGB 24, 24, 27 · CMYK 1/1/0/89</div><div class="swatch-hex">#18181B</div></div></div>
      <div class="swatch"><div class="swatch-color" style="background:#FFFAEB;border:1px solid rgba(0,0,0,.12)"></div><div class="swatch-info"><div class="swatch-name">Warm white</div><div class="swatch-role">RGB 255, 250, 235 · CMYK 0/2/8/0</div><div class="swatch-hex">#FFFAEB</div></div></div>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative Team — Color Usage</span>
      <p style="margin:0"><strong>Lush Bamboo (#AFBF36)</strong> is the signature brand green and <strong>Daydream (#E3ECAA)</strong> its light companion — this pair carries the identity. <strong>Pepper (#212121)</strong> and <strong>#18181B</strong> are the dark anchors for type and logo. <strong>#FFFFFF</strong> and <strong>#FFFAEB</strong> are the two approved grounds. Packaging uses a <strong>separate set of color variations</strong> (guideline pp.21&ndash;24) — for those hex codes refer to the color-packaging AI file, not this page. Do not introduce colors outside the main palette without brand-owner approval.</p>
    </div>

    <h3 style="margin-top:28px">Brand Fonts</h3>
    <div class="source-note">
      <strong>Source of truth:</strong> <code>Wild_Earth Brand Guidelines.pdf</code>, pp.16&ndash;18. <strong>Labil Grotesk is the single brand font family</strong> and extends to all platforms. A grotesk keeps the brand modern. The stack this hub previously listed (Playfair Display, DM Sans, DM Mono) was never approved. Labil Grotesk is a licensed custom family — request the approved font assets from the Brand Lead rather than sourcing a lookalike, and never substitute a Google font in brand work.
    </div>
    <div class="type-spec">
      <div class="type-spec-name">Labil Grotesk Bold · Headlines</div>
      <div class="type-spec-use">Headlines and hero type</div>
      <div style="font-size:1.8rem;font-weight:800;color:var(--we-forest);letter-spacing:-.01em">Re-wild the earth.</div>
    </div>
    <div class="type-spec">
      <div class="type-spec-name">Labil Grotesk Medium · Stand-Out Text</div>
      <div class="type-spec-use">Subheads, callouts, emphasis and stand-out lines</div>
      <div style="font-size:1.1rem;font-weight:600">Plant-based nutrition, formulated with veterinarians.</div>
    </div>
    <div class="type-spec">
      <div class="type-spec-name">Labil Grotesk Regular · Body Copy</div>
      <div class="type-spec-use">Body copy, paragraphs, product detail, UI</div>
      <div style="font-size:1rem">Complete, high-protein, hypoallergenic nutrition for dogs — made from clean plant ingredients and formulated with veterinarians.</div>
    </div>

    <div class="team-callout creative">
      <span class="team-tag">Creative Team — Type Rules</span>
      <p style="margin:0">Three weights, three jobs: <strong>Bold for headlines</strong>, <strong>Medium for stand-out text</strong>, <strong>Regular for body copy</strong>. That is the whole system — there is no approved serif and no approved mono in this brand. The guideline's "Fonts in Action" layout (p.18) shows the weights working together on a real page; follow it when building templates.</p>
    </div>
    <div class="op-note">
      <strong>Note on this page:</strong> the hub itself is rendered in web fonts because Labil Grotesk is not licensed for this internal site. The specimens above are therefore approximations of weight and role, not of letterforms. Judge letterforms from the approved font files, not from this screen.
    </div>

    <h3 style="margin-top:28px">Logo Usage</h3>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:14px;margin-bottom:16px">
      <div style="background:#fff;border:1px solid #AFBF36;border-radius:12px;padding:20px;text-align:center">
        <div style="background:#FFFFFF;padding:18px;border-radius:8px;margin-bottom:10px;min-height:96px;display:flex;align-items:center;justify-content:center">
          <img src="data:image/png;base64,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" alt="Wild Earth primary stacked wordmark in black" style="max-height:82px;width:auto;max-width:100%">
        </div>
        <div style="font-size:12px;font-family:'DM Mono',monospace;color:#6E7A1E;text-transform:uppercase;letter-spacing:.08em;margin-bottom:4px">Primary — Stacked Wordmark</div>
        <div style="font-size:12px;color:var(--we-text-muted);line-height:1.4">Black (Pepper #212121). Kibble bags, business cards, brochures, presentation decks. A variant adds the &ldquo;Plant-Based Nutrition&rdquo; descriptor above the mark.</div>
      </div>
      <div style="background:#fff;border:1px solid #AFBF36;border-radius:12px;padding:20px;text-align:center">
        <div style="background:#FFFFFF;padding:18px;border-radius:8px;margin-bottom:10px;min-height:96px;display:flex;align-items:center;justify-content:center">
          <img src="data:image/png;base64,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" alt="Wild Earth circular W submark in three approved colorways" style="max-height:76px;width:auto;max-width:100%">
        </div>
        <div style="font-size:12px;font-family:'DM Mono',monospace;color:#6E7A1E;text-transform:uppercase;letter-spacing:.08em;margin-bottom:4px">Submark — Three Colorways</div>
        <div style="font-size:12px;color:var(--we-text-muted);line-height:1.4">Circular &ldquo;W&rdquo; emblem in Daydream, Lush Bamboo and Pepper combinations. Social icons, stickers, emblems, favicon.</div>
      </div>
    </div>
    <div class="op-note">
      <strong>Reference images only.</strong> Both marks above are screen captures from <code>Wild_Earth Brand Guidelines.pdf</code> (pp.11 and 13), included so you can confirm this hub describes the right logo system. They are <strong>not production assets</strong> &mdash; pull vector files from the brand AI folder for any real use.
    </div>
    <div class="source-note">
      <strong>Source of truth:</strong> <code>Wild_Earth Brand Guidelines.pdf</code>, pp.10&ndash;15. The guideline defines a <strong>three-part logo suite</strong> — primary, secondary and submark — plus a favicon and a misuse page. The green-wordmark / white-reverse / leaf-lockup description this hub previously carried did not match the guideline and has been replaced.
    </div>

    <h4>Primary Logo</h4>
    <p>The stacked <strong>WILD EARTH</strong> wordmark in a custom display face, set in black (Pepper). A variant adds the descriptor <strong>"Plant-Based Nutrition"</strong> above the mark. This is the main logo for <strong>kibble bags and main brand collateral</strong>.</p>
    <p style="margin-top:4px"><strong>Use on:</strong> kibble bags · business cards · brochures · presentation decks</p>

    <h4 style="margin-top:18px">Secondary Logo</h4>
    <p>The long horizontal lockup, for wide or "long-use" placements where the stacked mark would sit too small.</p>
    <p style="margin-top:4px"><strong>Use on:</strong> web design · merch · banners · brochures</p>

    <h4 style="margin-top:18px">Submark</h4>
    <p>A circular <strong>"W"</strong> submark for emblem use, built in Daydream / Lush Bamboo / Pepper combinations.</p>
    <p style="margin-top:4px"><strong>Use on:</strong> social media icons · stickers · emblems · keys</p>

    <h4 style="margin-top:18px">Favicon</h4>
    <p>A dedicated favicon version of the submark, for the website and profile images (guideline p.15).</p>

    <h4 style="margin-top:18px">Misuse — from the guideline's misusage page</h4>
    <ul>
      <li><strong>No backdrop</strong> — do not place the logo on a filled shape or badge behind it.</li>
      <li><strong>No vivid color combos</strong> — keep the mark green and black; don't recolor it into bright or clashing pairs.</li>
      <li><strong>No stretching</strong> — never scale the mark non-proportionally.</li>
      <li><strong>Don't tilt the main logo</strong>, and don't tilt any version excessively.</li>
    </ul>
    <div class="op-note">
      <strong>Operational, pending approval:</strong> clear-space and minimum-size rules are <em>not</em> specified in the 2024 guideline. Until they are, treat "clear space equal to the height of the W" as a working convention rather than an approved standard, and route any published spec through the Brand Lead.
    </div>

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
    <p style="margin-top:14px"><strong>Overall visual feel (guideline p.8):</strong> a retro aesthetic blended with modern vibrancy — nostalgic, but fresh and relevant for today's market. Premium yet approachable, using color and design to make products pop on the shelf and foster a sense of community. Direction keywords: <strong>Retro · Avant-Garde · Bold · Colorful</strong>.</p>
    <div class="op-note">
      <strong>Corrected:</strong> this hub previously described the visual feel as "earthy, warm, optimistic &mdash; premium natural grocery store meets your favorite dog park." That framing came from the website, not the guideline, and pulls the brand away from its approved retro/avant-garde direction.
    </div>
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

    <div class="source-note">
      <strong>Source of truth — the approved audience statement:</strong> <code>Wild_Earth Brand Guidelines.pdf</code>, p.7 defines the audience in one line: <strong>"Happy animal lovers that care about the earth!"</strong> That is the brand-level answer to "who is this for," and it is what belongs in brand work, decks and briefs.
    </div>
    <div class="op-note">
      <strong>Everything below is operational, not brand-approved.</strong> The demographic profile, the four personas and the archetype are hub-authored tools for CX routing, ad targeting and persona-based briefing. They are useful and can stay in use — but they are <em>supplemental</em>. They must not be presented as the brand's official audience definition, and where they conflict with the approved line above, the approved line wins.
    </div>

    <h3>General Customer Profile <span style="font-size:12px;font-family:'DM Mono',monospace;color:var(--we-text-muted);text-transform:uppercase;letter-spacing:.06em">· operational</span></h3>
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

    <h3 style="margin-top:28px">Brand Archetype: The Revolutionary (with shades of The Caregiver) <span style="font-size:12px;font-family:'DM Mono',monospace;color:var(--we-text-muted);text-transform:uppercase;letter-spacing:.06em">· operational</span></h3>
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

    <p>This section is a working reference for what's actually <em>worked</em> in paid social for our brands — the ads that went past testing, scaled, and held their ROAS. The intro patterns below are universal across the Inventel portfolio (Wild Earth, SugarMD, Pizza Pack, Spark, etc.). The Wild Earth creatives themselves live behind the link underneath so they stay current.</p>

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

    <div class="creatives-link-card">
        <p>Our current winning Wild Earth ads are shared in the team's Google Chat space, alongside the rest of the Inventel portfolio, so they stay up to date. You'll need to be signed in to your Inventel Google account to open it.</p>
        <a id="creatives-link" class="creatives-link" href="https://chat.google.com/room/AAQAyhmFXBc?cls=7" target="_blank" rel="noopener">Open winning creatives (Google Chat) &rarr;</a>
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
      <p style="margin:0">Before you sit in your first ad-review meeting, open the winning creatives link above and try to name the pattern(s) each ad is hitting without scrolling back to the list. Then open the brand's current Meta Ads Library and find one ad that's running well — name its pattern. This is the single fastest way to ramp on what "good" looks like for Wild Earth specifically.</p>
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
        <h3 style="color:#fff;margin:0 0 10px">Ready to test what you've learned?</h3>
        <p style="color:var(--we-sage);font-size:14px;max-width:660px">Read everything above first. You'll get a multiple-choice question one at a time, drawn from the whole hub. Select an answer and you'll see immediately whether you got it right, then click Next to continue. <strong style="color:#fff">Pass: 28 of 40 correct (70%).</strong> Retake as many times as you need — no penalty.</p>
        <p style="color:var(--we-sage);font-size:14px;max-width:660px">When you pass, enter your name and title, then capture your result — a <strong style="color:#fff">screenshot of your score card is the easiest option</strong>, or you can print or save the certificate. <strong style="color:#fff">Every quiz — this one and every brand or platform quiz — follows the same submission process:</strong></p>
        <ol class="submit-steps">
          <li><strong>Capture your result</strong> — a screenshot of your score card is easiest, or save it as a PDF.</li>
          <li><strong>Name the file</strong> using the standard convention (below) so it's easy to find and track.</li>
          <li><strong>Upload it</strong> to the <a href="https://drive.google.com/drive/folders/19vsre-bLq4zDgwEAYGcSX22SpJ7hNvIM?usp=drive_link" target="_blank" rel="noopener">InvenTel University Quiz Results</a> folder.</li>
          <li><strong>Notify the person who assigned the quiz</strong> — your onboarding manager, the Performance Team, your Department Lead, Brand Lead, or Agency Lead, depending on which quiz it was.</li>
        </ol>
        <div class="naming-box">
          <strong>📄 File naming convention</strong><br>
          <code>FirstName LastName_Team_Brand (or Platform)_Quiz_MMYYYY.pdf</code><br>
          <span style="font-size:13px">Example for this hub: <code>Jane Doe_CX_WildEarth_Quiz_092026.pdf</code></span>
        </div>
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
