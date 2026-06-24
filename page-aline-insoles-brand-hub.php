<?php /* Template Name: Aline Insoles Brand Hub */ ?>
<?php bh_require_login(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ALINE Insoles — Brand Knowledge Hub</title>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800;900&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
/* ═══════════════════════════════════════════
   ALINE INSOLES — BRAND HUB v6.2
   Inventel Internal · aline-insoles-brand-hub.html
═══════════════════════════════════════════ */
:root {
  --al-red:       #CC1F17;
  --al-red-dk:    #A91812;
  --al-red-lt:    #F25048;
  --al-coral:     #FF7B6E;
  --al-peach:     #FFB5AC;
  --al-soft:      #FFE4DF;
  --al-bg:        #FFF8F6;
  --al-red-bg:    #FFF0EE;
  --al-white:     #FFFFFF;
  --al-border:    #F0D9D5;
  --al-border-lt: #EFEFEF;
  --al-text:      #2A1A18;
  --al-text-dk:   #1A1A1A;
  --al-muted:     #7A6F6D;
  --al-link:      #0055CC;
  --al-success:   #2E7D32;
  --al-danger:    #A91812;
  --nav-h:        60px;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'DM Sans',sans-serif;background:var(--al-bg);color:var(--al-text);font-size:16px;line-height:1.65;-webkit-font-smoothing:antialiased}

/* ── TOP NAVIGATION ── */
#top-nav{position:sticky;top:0;z-index:1000;background:#ffffff;border-bottom:2px solid var(--al-red);box-shadow:0 2px 12px rgba(204,31,23,.08)}
.nav-inner{display:flex;align-items:center;justify-content:space-between;gap:14px;height:var(--nav-h);padding:0 18px;max-width:1200px;margin:0 auto}
.nav-brand{font-family:'Barlow Condensed',sans-serif;font-size:18px;font-weight:800;color:var(--al-red);white-space:nowrap;letter-spacing:.06em;text-transform:uppercase;flex-shrink:0}
@media(max-width:520px){.nav-brand{display:none}}
.nav-search-wrap{flex:1;max-width:560px;position:relative;margin:0 auto}
@media(max-width:700px){.nav-search-wrap{max-width:100%}}
#hub-search{width:100%;background:var(--al-bg);border:1.5px solid var(--al-border);border-radius:8px;color:var(--al-text);padding:8px 14px 8px 36px;font-size:13px;font-family:'DM Sans',sans-serif;outline:none;transition:all .2s}
#hub-search::placeholder{color:#aaaaaa}
#hub-search:focus{background:#ffffff;border-color:var(--al-red);box-shadow:0 0 0 3px rgba(204,31,23,.12)}
.search-icon{position:absolute;left:11px;top:50%;transform:translateY(-50%);opacity:.5;pointer-events:none}
.search-icon svg{width:14px;height:14px;stroke:#999999;fill:none;stroke-width:2;stroke-linecap:round}
#search-results{position:absolute;top:calc(100% + 6px);left:0;right:0;background:#fff;border:1px solid rgba(204,31,23,.25);border-radius:10px;box-shadow:0 8px 30px rgba(0,0,0,.18);max-height:420px;overflow-y:auto;z-index:2000;display:none}
.sr-group-label{font-family:'DM Mono',monospace;font-size:10px;text-transform:uppercase;letter-spacing:.15em;color:var(--al-muted);padding:10px 14px 4px;border-top:1px solid rgba(204,31,23,.1)}
.sr-group-label:first-child{border-top:none}
.sr-item{display:flex;align-items:center;gap:10px;padding:9px 14px;cursor:pointer;transition:background .12s;font-size:13px;color:var(--al-text)}
.sr-item:hover{background:var(--al-red-bg)}
.sr-item-icon{font-size:15px;flex-shrink:0}
.sr-item-text{flex:1;min-width:0}
.sr-item-text mark{background:var(--al-gold);color:#111111;border-radius:2px;padding:0 2px}
.sr-item-badge{font-size:10px;color:var(--al-muted);white-space:nowrap}
.nav-toc-btn{background:var(--al-red);border:none;color:#ffffff;padding:7px 14px;border-radius:20px;font-size:12px;font-weight:600;cursor:pointer;font-family:'DM Mono',monospace;letter-spacing:.05em;text-transform:uppercase;transition:all .2s;white-space:nowrap;flex-shrink:0}
.nav-toc-btn:hover{background:var(--al-red-dk);color:#fff}

/* ── FLOATING TOC BUTTON ── */
#floating-toc-btn{position:fixed;bottom:24px;right:24px;z-index:998;background:var(--al-red);color:#fff;border:3px solid rgba(255,255,255,.25);width:56px;height:56px;border-radius:50%;cursor:pointer;box-shadow:0 6px 22px rgba(204,31,23,.4);display:flex;align-items:center;justify-content:center;transition:all .2s;font-size:22px}
#floating-toc-btn:hover{background:var(--al-red-dark);transform:translateY(-2px);box-shadow:0 10px 28px rgba(204,31,23,.5)}
#floating-toc-btn svg{width:22px;height:22px;stroke:#fff;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* ── TOC DRAWER ── */
#toc-overlay{position:fixed;inset:0;background:rgba(0,0,0,.6);backdrop-filter:blur(4px);z-index:1500;opacity:0;pointer-events:none;transition:opacity .25s}
#toc-overlay.open{opacity:1;pointer-events:auto}
#toc-drawer{position:fixed;top:0;right:0;bottom:0;width:min(400px,92vw);background:#ffffff;z-index:1501;transform:translateX(100%);transition:transform .3s cubic-bezier(.4,0,.2,1);box-shadow:-8px 0 40px rgba(0,0,0,.3);display:flex;flex-direction:column}
#toc-drawer.open{transform:translateX(0)}
.toc-drawer-hdr{display:flex;justify-content:space-between;align-items:center;padding:16px 20px;background:linear-gradient(135deg,var(--al-coral) 0%,var(--al-red) 100%);color:#fff;border-bottom:none;position:sticky;top:0;z-index:2}
.toc-drawer-title{font-family:'Barlow Condensed',sans-serif;font-size:1.2rem;font-weight:800;letter-spacing:.06em;text-transform:uppercase;color:#ffffff}
.toc-drawer-close{background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);color:#fff;font-size:18px;cursor:pointer;width:30px;height:30px;border-radius:50%;display:flex;align-items:center;justify-content:center;transition:all .15s}
.toc-drawer-close:hover{background:var(--al-red);border-color:var(--al-red)}
#toc-drawer-nav{padding:10px 12px 14px;display:flex;flex-direction:column;gap:3px;overflow-y:auto;flex:1}
#toc-drawer-nav a{display:flex;align-items:center;gap:10px;background:#fff;color:#111111;text-decoration:none;padding:8px 12px;border-radius:7px;font-size:13px;font-family:'DM Sans',sans-serif;font-weight:600;border:1px solid var(--al-border);border-left:4px solid var(--al-red);transition:all .15s;line-height:1.2}
#toc-drawer-nav a:hover{background:var(--al-red);color:#fff;border-color:var(--al-red);transform:translateX(3px);box-shadow:0 2px 8px rgba(204,31,23,.3)}
#toc-drawer-nav a:hover .toc-num{background:var(--al-gold);color:#111111}
.toc-num{display:inline-flex;align-items:center;justify-content:center;min-width:30px;height:20px;padding:0 6px;background:var(--al-red-bg);color:var(--al-red);border-radius:4px;font-family:'DM Mono',monospace;font-size:10.5px;font-weight:700;letter-spacing:.02em;flex-shrink:0;transition:all .15s}

/* ── TOC SECTION ── */
.toc-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:10px;margin-top:12px}
.toc-tile{background:#fff;border:1px solid rgba(204,31,23,.18);border-left:4px solid var(--al-red);border-radius:10px;padding:14px 16px;text-decoration:none;color:var(--al-text);display:flex;align-items:center;gap:12px;transition:all .18s;cursor:pointer}
.toc-tile:hover{background:linear-gradient(135deg,var(--al-red-bg) 0%,var(--al-soft) 100%);border-left-color:var(--al-red);transform:translateX(3px);text-decoration:none}
.toc-tile-num{font-family:'DM Mono',monospace;color:var(--al-red);font-size:12px;font-weight:700;min-width:24px}
.toc-tile-label{font-size:13.5px;font-weight:600;color:#111111;line-height:1.3}

/* ── COLLAPSIBLE SECTIONS ── */
.card.collapsible{padding:0;overflow:hidden}
.sec-hdr{display:flex;align-items:center;justify-content:space-between;padding:22px 30px;cursor:pointer;user-select:none;background:#ffffff;transition:background .2s;border-bottom:1px solid transparent}
.sec-hdr:hover{background:linear-gradient(135deg,#fff8f6 0%,#ffeae6 100%)}
.sec-hdr-left{flex:1;min-width:0}
.sec-hdr .eyebrow{margin-bottom:4px}
.sec-hdr h2{margin:0;padding:0;border-bottom:none;font-size:1.4rem}
.sec-toggle{background:transparent;border:1.5px solid rgba(204,31,23,.4);color:var(--al-red);width:32px;height:32px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .2s;margin-left:14px}
.sec-toggle:hover{background:var(--al-red);color:#fff;border-color:var(--al-red)}
.sec-toggle svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:2.5;stroke-linecap:round;transition:transform .3s}
.collapsed .sec-toggle svg{transform:rotate(-180deg)}
.sec-body{padding:10px 30px 30px;max-height:20000px;overflow:hidden;transition:max-height .4s ease,padding .3s ease,opacity .3s ease;opacity:1}
.collapsed .sec-body{max-height:0;padding-top:0;padding-bottom:0;opacity:0}
.collapsed .sec-hdr{border-bottom-color:transparent;background:#ffffff}
@media(max-width:640px){.sec-hdr{padding:18px 18px}.sec-body{padding:8px 18px 24px}}

/* ── LAYOUT ── */
section{padding:48px 20px;max-width:980px;margin:0 auto;scroll-margin-top:var(--nav-h)}

/* ── TYPOGRAPHY ── */
h1{font-family:'Barlow Condensed',sans-serif;font-size:clamp(2.4rem,6vw,4rem);font-weight:900;color:#111111;line-height:1.0;letter-spacing:.02em;text-transform:uppercase}
h2{font-family:'Barlow Condensed',sans-serif;font-size:clamp(1.5rem,3.5vw,2.2rem);font-weight:800;color:var(--al-text-dk);margin-bottom:20px;padding-bottom:12px;border-bottom:3px solid var(--al-red);letter-spacing:.04em;text-transform:uppercase}
h3{font-family:'DM Sans',sans-serif;font-size:1.1rem;font-weight:700;color:var(--al-red-dk);margin-bottom:10px;letter-spacing:.01em}
h4{font-family:'DM Sans',sans-serif;font-size:.95rem;font-weight:700;color:#111111;margin-bottom:8px}
p{margin-bottom:14px;color:var(--al-text);line-height:1.7}
a{color:var(--al-link);text-decoration:underline}
a:hover{opacity:.8}
.eyebrow{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.18em;text-transform:uppercase;color:var(--al-red-dk);margin-bottom:8px;display:block;font-weight:700}

/* ── CARDS ── */
.card{background:#ffffff;border-radius:14px;padding:32px;margin-bottom:20px;box-shadow:0 2px 16px rgba(204,31,23,.06);border:1px solid var(--al-border-lt)}
@media(max-width:640px){.card{padding:20px;border-radius:10px}}

/* ── HERO ── */
#hero{max-width:100%;padding:0;margin:0;background:linear-gradient(135deg,var(--al-coral) 0%,var(--al-red) 55%,var(--al-red-dk) 100%);position:relative;overflow:hidden}
#hero::before{content:"";position:absolute;inset:0;background-image:radial-gradient(ellipse at 85% 10%, rgba(255,255,255,.12) 0%, transparent 50%),radial-gradient(ellipse at 10% 90%, rgba(0,0,0,.12) 0%, transparent 45%);pointer-events:none}
#hero::after{content:"";position:absolute;bottom:0;left:0;right:0;height:3px;background:rgba(255,255,255,.3)}
.hero-inner{max-width:980px;margin:0 auto;padding:64px 20px 56px;position:relative;z-index:1}
.hero-logo-wrap{display:flex;align-items:center;gap:20px;margin-bottom:32px;flex-wrap:wrap}
.hero-logo{height:60px;object-fit:contain;background:#fff;padding:8px 16px;border-radius:8px}
.hero-logo-reversed{height:60px;object-fit:contain;filter:brightness(0) invert(1);opacity:.85;padding:0 4px}
.hero-brand-fallback{font-family:'Barlow Condensed',sans-serif;font-size:3rem;font-weight:900;color:#fff;letter-spacing:.08em;text-transform:uppercase}
.hero-tagline{font-size:1.15rem;color:rgba(255,255,255,.75);margin-bottom:8px;font-weight:400;letter-spacing:.01em}
.hero-tagline strong{color:var(--al-gold);font-weight:700}
.hero-meta{font-family:'DM Mono',monospace;font-size:12px;color:rgba(255,255,255,.5);margin-bottom:30px;letter-spacing:.08em}
.hero-stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:14px;margin:28px 0}
.hero-stat{background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.25);border-radius:12px;padding:20px 18px;backdrop-filter:blur(6px);position:relative;overflow:hidden}
.hero-stat::before{content:"";position:absolute;top:0;left:0;right:0;height:2px;background:rgba(255,255,255,.5)}
.hero-stat-num{font-family:'Barlow Condensed',sans-serif;font-size:2.2rem;font-weight:900;color:#ffffff;line-height:1;margin-bottom:6px;letter-spacing:.02em}
.hero-stat-lbl{font-size:12px;color:rgba(255,255,255,.75);line-height:1.4}
.hero-chips{display:flex;flex-wrap:wrap;gap:8px;margin-top:20px}
.hero-chip{display:inline-flex;align-items:center;gap:6px;background:rgba(255,255,255,.08);color:rgba(255,255,255,.8);border:1px solid rgba(204,31,23,.3);padding:7px 14px;border-radius:20px;font-size:13px;font-weight:500;text-decoration:none;transition:all .15s}
.hero-chip:hover{background:var(--al-red);border-color:var(--al-red);color:#fff;text-decoration:none;opacity:1}
.hero-chip svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:2}
.chip-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:20px}
.chip{display:inline-flex;align-items:center;gap:6px;background:rgba(255,255,255,.2);color:#ffffff!important;text-decoration:none;padding:7px 14px;border-radius:20px;font-size:13px;font-weight:600;border:1px solid rgba(255,255,255,.4);transition:all .15s}
.chip:hover{transform:translateY(-2px);background:rgba(255,255,255,.35);border-color:rgba(255,255,255,.7);opacity:1}

/* ── TAGS ── */
.tag-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:14px}
.tag{background:var(--al-red-pale);color:var(--al-red-dark);padding:5px 12px;border-radius:12px;font-size:12px;font-weight:600;letter-spacing:.02em}
.tag-dark{background:#111111;color:var(--al-red-light);padding:5px 12px;border-radius:12px;font-size:12px;font-weight:600}

/* ── TABLES ── */
table{width:100%;border-collapse:collapse;margin:16px 0;background:#fff;border-radius:8px;overflow:hidden;font-size:14px;box-shadow:0 1px 8px rgba(0,0,0,.07)}
th{background:linear-gradient(135deg,var(--al-coral) 0%,var(--al-red) 100%);color:#fff;padding:12px 14px;text-align:left;font-size:11px;text-transform:uppercase;letter-spacing:.06em;font-weight:700;font-family:'DM Mono',monospace}
td{padding:12px 14px;border-bottom:1px solid rgba(204,31,23,.08);vertical-align:top}
tr:last-child td{border-bottom:none}
tr:nth-child(even) td{background:#fff8f6}
.badge{display:inline-block;padding:3px 9px;border-radius:10px;font-size:11px;font-weight:700;letter-spacing:.04em;text-transform:uppercase}
.badge-red{background:var(--al-red);color:#fff}
.badge-green{background:#5BA84A;color:#fff}
.badge-yellow{background:#F0B500;color:#1a1a1a}
.badge-black{background:#111111;color:#fff}
.badge-gold{background:#F0B500;color:#1a1a1a}
.badge-dark{background:#111111;color:#fff}
.badge-success{background:#2E7D32;color:#fff}
.badge-disc{background:var(--al-muted);color:#fff}

/* ── TEAM CALLOUTS ── */
.team-callout{padding:18px 20px 18px 20px;border-radius:10px;margin:18px 0;position:relative;padding-left:56px;font-size:14px;line-height:1.65}
.team-callout p{margin-bottom:8px;line-height:1.65}
.team-callout ol,.team-callout ul{padding-left:20px;margin:8px 0;font-size:13px;line-height:1.8}
.team-callout li{margin-bottom:4px}
.team-callout::before{position:absolute;left:18px;top:18px;font-size:20px}
.team-callout strong{display:block;font-size:13px;font-weight:700;margin-bottom:5px;letter-spacing:.03em;text-transform:uppercase;font-family:'DM Mono',monospace}
.team-callout.cx{background:#E8F5E9;border:1px solid #66BB6A;border-left:4px solid #2E7D32;color:#1B5E20}
.team-callout.cx::before{content:"📞"}
.team-callout.cx strong{color:#1B5E20}
.team-callout.creative{background:#FFF3E0;border:1px solid #FFA726;border-left:4px solid #E65100;color:#BF360C}
.team-callout.creative::before{content:"🎨"}
.team-callout.creative strong{color:#E65100}
.team-callout.marketing{background:#F3E5F5;border:1px solid #AB47BC;border-left:4px solid #6A1B9A;color:#4A148C}
.team-callout.marketing::before{content:"📢"}
.team-callout.marketing strong{color:#6A1B9A}
.team-callout.brand{background:#E8F5E9;border:1px solid #43A047;border-left:4px solid #1B5E20;color:#1B5E20}
.team-callout.brand::before{content:"🌿"}
.team-callout.brand strong{color:#1B5E20}
.team-callout.newhire{background:#E3F2FD;border:1px solid #42A5F5;border-left:4px solid #0D47A1;color:#0D47A1}
.team-callout.newhire::before{content:"👋"}
.team-callout.newhire strong{color:#0D47A1}

/* ── PILLAR CARDS ── */
.pillars{display:grid;grid-template-columns:repeat(auto-fit,minmax(210px,1fr));gap:14px;margin-top:18px}
.pillar{background:linear-gradient(135deg,#ffffff 0%,#fff8f6 100%);padding:22px;border-radius:12px;border-left:4px solid var(--al-red);transition:transform .2s;border:1px solid var(--al-border-lt);border-left-width:4px}
.pillar:hover{transform:translateY(-3px)}
.pillar-icon{font-size:1.9rem;margin-bottom:10px;display:block}
.pillar h4{color:#111111;margin-bottom:6px}
.pillar p{font-size:13px;color:var(--al-muted);margin-bottom:0;line-height:1.5}

/* ── OBJECTIONS ── */
.objection{background:#ffffff;border-radius:10px;padding:20px;margin-bottom:12px;border-left:4px solid var(--al-red);box-shadow:0 1px 6px rgba(0,0,0,.06)}
.obj-q{font-weight:700;color:var(--al-red);margin-bottom:10px;font-size:14px}
.obj-a{color:var(--al-text);font-size:14px;line-height:1.65}
.obj-q::before{content:"💬 ";font-weight:800;color:var(--al-red)}
.obj-a::before{content:"✅ ";font-weight:800;color:var(--al-success)}

/* ── QUIZ ── */
.quiz-container{background:#fff;border-radius:14px;padding:30px;border:1px solid rgba(204,31,23,.15);min-height:200px}
.quiz-progress-bar{height:6px;background:var(--al-red-pale);border-radius:4px;margin-bottom:20px;overflow:hidden}
.quiz-progress-fill{height:100%;background:linear-gradient(90deg,var(--al-red),var(--al-gold));border-radius:4px;transition:width .3s ease}
.quiz-q-num{font-family:'DM Mono',monospace;font-size:11px;color:var(--al-muted);margin-bottom:8px;letter-spacing:.08em;text-transform:uppercase}
.quiz-q-text{font-size:1.05rem;font-weight:600;color:#111111;margin-bottom:20px;line-height:1.5}
.quiz-opts{display:flex;flex-direction:column;gap:10px;margin-bottom:20px}
.quiz-opt{display:block;width:100%;text-align:left;background:var(--al-cream);border:2px solid rgba(204,31,23,.2);border-radius:8px;padding:13px 16px;font-size:14px;cursor:pointer;font-family:'DM Sans',sans-serif;color:var(--al-text);transition:all .15s;font-weight:500}
.quiz-opt:hover:not([disabled]){border-color:var(--al-red);background:var(--al-red-pale)}
.quiz-opt.correct{background:#E8F5E9;border-color:#2E7D32;box-shadow:0 0 0 3px rgba(46,125,50,.15)}
.quiz-opt.wrong{background:rgba(184,57,31,.12);border-color:var(--al-danger);color:var(--al-danger)}
.quiz-opt.dimmed{opacity:.35}
.quiz-badge-correct{display:inline-block;background:#2E7D32;color:#fff;font-size:10px;font-weight:700;letter-spacing:.04em;padding:2px 8px;border-radius:4px;text-transform:uppercase;margin-left:8px;font-family:'DM Mono',monospace}
.quiz-badge-pick{display:inline-block;background:var(--al-danger);color:#fff;font-size:10px;font-weight:700;letter-spacing:.04em;padding:2px 8px;border-radius:4px;text-transform:uppercase;margin-left:8px;font-family:'DM Mono',monospace}
.quiz-next-btn{background:var(--al-red);color:#fff;border:none;border-radius:8px;padding:12px 24px;font-size:14px;font-weight:700;font-family:'DM Sans',sans-serif;cursor:pointer;margin-top:8px;letter-spacing:.02em;transition:all .2s;display:none}
.quiz-next-btn:hover{background:var(--al-red-dark);transform:translateY(-1px)}
.quiz-result{text-align:center;padding:20px 0}
.quiz-score-big{font-family:'Barlow Condensed',sans-serif;font-size:4rem;font-weight:900;line-height:1;margin-bottom:6px}
.quiz-pass-screen{background:linear-gradient(135deg,#111111 0%,var(--al-dark) 100%);color:#fff;padding:30px;border-radius:12px;text-align:center}
.quiz-fail-screen{background:linear-gradient(135deg,#7B1D1D 0%,#3D0F0F 100%);color:#fff;padding:30px;border-radius:12px;text-align:center}
.quiz-stat-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin:20px 0}
.quiz-stat-box{background:rgba(255,255,255,.1);border-radius:8px;padding:14px;border:1px solid rgba(255,255,255,.15)}
.quiz-stat-val{font-family:'Barlow Condensed',sans-serif;font-size:1.8rem;font-weight:900;color:var(--al-gold)}
.quiz-stat-key{font-size:11px;opacity:.8;text-transform:uppercase;letter-spacing:.06em;font-family:'DM Mono',monospace}
.cert-name-input{width:100%;background:rgba(255,255,255,.12);border:1.5px solid rgba(255,255,255,.3);border-radius:8px;color:#fff;padding:11px 14px;font-size:14px;font-family:'DM Sans',sans-serif;outline:none;margin:10px 0}
.cert-name-input::placeholder{color:rgba(255,255,255,.45)}
.cert-name-input:focus{border-color:var(--al-gold)}
.quiz-btn-row{display:flex;flex-wrap:wrap;gap:10px;justify-content:center;margin-top:16px}
.quiz-action-btn{padding:11px 22px;border-radius:8px;font-size:14px;font-weight:700;font-family:'DM Sans',sans-serif;cursor:pointer;border:none;transition:all .18s}
.quiz-action-btn.primary{background:var(--al-red);color:#fff}
.quiz-action-btn.secondary{background:rgba(255,255,255,.12);color:#fff;border:1px solid rgba(255,255,255,.3)}
.quiz-action-btn:hover{transform:translateY(-1px);opacity:.9}
@media print{
  #top-nav,#floating-toc-btn,#toc-overlay,#toc-drawer,#search-results{display:none!important}
  .sec-body{max-height:none!important;padding:10px 30px 30px!important;opacity:1!important}
  .collapsed .sec-body{max-height:none!important;padding:10px 30px 30px!important;opacity:1!important}
  #quiz-section{display:none!important}
  .quiz-next-btn{display:none!important}
  body{background:#fff!important}
  -webkit-print-color-adjust:exact;print-color-adjust:exact
}
body.printing #top-nav,body.printing #floating-toc-btn,body.printing #toc-overlay,body.printing #toc-drawer,body.printing #search-results{display:none!important}
body.printing .sec-body{max-height:none!important;padding:10px 30px 30px!important;opacity:1!important}
body.printing .collapsed .sec-body{max-height:none!important;padding:10px 30px 30px!important;opacity:1!important}
body.printing #quiz-section{display:none!important}

/* ── HAZARD TAPE ── */
.hazard-callout{background:linear-gradient(135deg,var(--al-red-dk) 0%,var(--al-red) 100%);border-radius:10px;overflow:hidden;margin:18px 0;box-shadow:0 4px 16px rgba(204,31,23,.2)}
.hazard-stripe{height:10px;background:repeating-linear-gradient(45deg,var(--al-gold) 0px,var(--al-gold) 20px,#111111 20px,#111111 40px)}
.hazard-body{padding:18px 20px 20px;color:#fff}
.hazard-body strong{color:var(--al-gold);display:block;font-size:13px;font-family:'DM Mono',monospace;letter-spacing:.05em;margin-bottom:6px;text-transform:uppercase}

/* ── SEARCH FLASH ── */
@keyframes goldFlash{0%{outline:3px solid transparent}20%{outline:3px solid var(--al-gold);background:rgba(245,197,24,.12)}80%{outline:3px solid var(--al-gold);background:rgba(245,197,24,.12)}100%{outline:3px solid transparent;background:transparent}}
.search-flash{animation:goldFlash 1.8s ease-out}

/* ── MISC UTILITIES ── */
.note{font-size:13px;color:var(--al-muted);font-style:italic}
.divider{border:none;border-top:2px solid rgba(204,31,23,.12);margin:24px 0}
ul{padding-left:20px;margin-bottom:14px}
li{margin-bottom:5px;font-size:14px}
.tone-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:14px;margin-top:18px}
.tone{background:linear-gradient(135deg,#ffffff 0%,#fff8f6 100%);padding:20px;border-radius:10px;border:1px solid var(--al-border-lt);border-top:4px solid var(--al-red)}
.tone-label{font-weight:700;color:#111111;font-size:14px;margin-bottom:5px}
.tone-desc{font-size:13px;color:var(--al-muted);margin-bottom:10px;line-height:1.5}
.tone-ex{font-style:italic;color:var(--al-red-dark);font-size:13.5px;border-left:3px solid var(--al-red-pale);padding-left:10px;line-height:1.5}
.do-dont{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:16px}
.do-dont>div{padding:18px;border-radius:10px}
.do-box{background:rgba(26,107,46,.08);border:1px solid rgba(26,107,46,.3)}
.dont-box{background:rgba(184,57,31,.07);border:1px solid rgba(184,57,31,.3)}
.do-box h4{color:#1A6B2E}
.dont-box h4{color:var(--al-danger)}
.do-box ul,.dont-box ul{padding-left:18px;margin-top:8px}
.do-box li,.dont-box li{margin-bottom:6px;font-size:13px}
@media(max-width:640px){.do-dont{grid-template-columns:1fr}}
.adj-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:12px;margin-top:16px}
.adj{background:linear-gradient(135deg,#ffffff 0%,#fffafa 100%);padding:16px;border-radius:10px;border:1px solid var(--al-border-lt);border-top:3px solid var(--al-red)}
.adj-title{font-weight:700;color:var(--al-red-dark);font-size:13px;margin-bottom:5px;font-family:'DM Mono',monospace;text-transform:uppercase;letter-spacing:.05em}
.adj-desc{font-size:13px;color:var(--al-muted);line-height:1.5}
.palette{display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:12px;margin-top:16px}
.swatch{border-radius:10px;overflow:hidden;border:1px solid rgba(0,0,0,.1)}
.swatch-color{height:80px}
.swatch-info{padding:10px;background:#fff;font-size:12px}
.swatch-name{font-weight:700;color:#111111}
.swatch-role{color:var(--al-muted);margin:2px 0;font-size:11px}
.swatch-hex{font-family:'DM Mono',monospace;color:var(--al-red);font-size:11px}
.personas{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:14px;margin-top:16px}
.persona{background:linear-gradient(135deg,#ffffff 0%,#fff8f6 100%);padding:22px;border-radius:12px;border:1px solid var(--al-border-lt);border-top:4px solid var(--al-red)}
.persona-name{font-family:'Barlow Condensed',sans-serif;font-size:1.4rem;font-weight:800;color:#111111;margin-bottom:2px;text-transform:uppercase;letter-spacing:.04em}
.persona-type{font-family:'DM Mono',monospace;font-size:11px;color:var(--al-red);text-transform:uppercase;letter-spacing:.1em;margin-bottom:10px}
.persona-desc{font-size:13px;color:var(--al-muted);margin-bottom:10px;line-height:1.55}
.persona-focus{font-size:13px;color:#111111}
.persona-focus strong{color:var(--al-red-dark)}
.stat-boxes{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:14px;margin:18px 0}
.stat-box{background:linear-gradient(135deg,var(--al-coral) 0%,var(--al-red) 100%);color:#fff;padding:22px;border-radius:12px;text-align:center;box-shadow:0 4px 16px rgba(204,31,23,.15)}
.stat-big{font-family:'Barlow Condensed',sans-serif;font-size:2.5rem;font-weight:900;line-height:1;margin-bottom:6px;color:#ffffff}
.stat-lbl{font-size:12px;line-height:1.4;opacity:.9}
.angle-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:14px;margin-top:16px}
.angle{background:linear-gradient(135deg,#ffffff 0%,#fff8f6 100%);border-radius:12px;padding:22px;border:1px solid var(--al-border-lt);border-top:4px solid var(--al-red)}
.angle-icon{font-size:1.8rem;margin-bottom:8px}
.angle h4{color:#111111;margin-bottom:6px}
.angle p{font-size:13px;color:var(--al-muted);margin-bottom:0;line-height:1.5}
.hooks{display:flex;flex-direction:column;gap:8px;margin-top:14px}
.hook{background:var(--al-red-bg);border-left:4px solid var(--al-red);border-radius:6px;padding:12px 14px;font-size:14px;font-weight:500;color:#111111}
.hook::before{content:'"';font-size:1.3em;font-weight:900;margin-right:4px;color:var(--al-red)}
.hook::after{content:'"';font-size:1.3em;font-weight:900;margin-left:2px;color:var(--al-red)}
.creative-pattern{background:#fff;border-radius:12px;padding:20px;border:1px solid rgba(204,31,23,.15);display:flex;gap:14px;margin-bottom:10px;align-items:flex-start}
.creative-pattern-num{font-family:'Barlow Condensed',sans-serif;font-size:2rem;font-weight:900;color:var(--al-red-pale);line-height:1;flex-shrink:0;min-width:40px}
.creative-pattern h4{color:#111111;margin-bottom:4px}
.creative-pattern p{font-size:13px;color:var(--al-muted);margin-bottom:0;line-height:1.5}
.through-line{background:linear-gradient(135deg,#1B4332 0%,#2D6A4F 100%);border-radius:12px;padding:20px 24px;margin:20px 0;border-left:5px solid var(--al-gold)}
.through-line p{color:#fff;font-size:14px;font-style:italic;line-height:1.65;margin-bottom:0}
.faq-item{background:#ffffff;border-radius:10px;padding:0;margin-bottom:10px;border:1px solid var(--al-border-lt);overflow:hidden}
.faq-q{display:flex;align-items:center;justify-content:space-between;padding:16px 20px;cursor:pointer;font-weight:600;font-size:14px;user-select:none;gap:12px;color:#111111}
.faq-q:hover{background:var(--al-red-bg)}
.faq-toggle{font-size:18px;color:var(--al-red);flex-shrink:0;transition:transform .2s}
.faq-a{padding:0 20px;max-height:0;overflow:hidden;font-size:14px;color:var(--al-muted);transition:max-height .3s ease,padding .2s ease;line-height:1.65}
.faq-item.open .faq-a{max-height:600px;padding:4px 20px 16px}
.faq-item.open .faq-toggle{transform:rotate(45deg)}
.glossary-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:12px;margin-top:14px}
.gloss-item{background:#ffffff;border-radius:10px;padding:16px;border:1px solid var(--al-border-lt);border-left:4px solid var(--al-red)}
.gloss-term{font-weight:700;color:#111111;font-size:14px;margin-bottom:6px}
.gloss-def{font-size:13px;color:var(--al-muted);line-height:1.55}
.gloss-evergreen{background:linear-gradient(135deg,var(--al-coral) 0%,var(--al-red) 100%);border-left-color:#ffffff;box-shadow:0 4px 12px rgba(204,31,23,.15)}
.gloss-evergreen .gloss-term{color:#ffffff;font-weight:800}
.gloss-evergreen .gloss-def{color:rgba(255,255,255,.9)}
.shipping-table td:nth-child(1){font-weight:600}
.disc-highlight{background:var(--al-gold);color:#111111;padding:2px 6px;border-radius:4px;font-weight:700;font-size:12px;font-family:'DM Mono',monospace}
.channel-chip{display:inline-block;background:var(--al-red-pale);color:var(--al-red-dark);padding:3px 8px;border-radius:4px;font-size:11px;font-weight:600;margin:2px}
.journey-table th,.journey-table td{font-size:13px}
.journey-table th{background:var(--al-red-deep);font-size:11px}
.comp-badge-win{background:#1A6B2E;color:#fff;padding:2px 8px;border-radius:4px;font-size:11px;font-weight:700}
.comp-badge-neutral{background:var(--al-muted);color:#fff;padding:2px 8px;border-radius:4px;font-size:11px;font-weight:700}
.comp-badge-lose{background:var(--al-danger);color:#fff;padding:2px 8px;border-radius:4px;font-size:11px;font-weight:700}
.seo-kw-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:12px;margin:14px 0}
.seo-kw{background:linear-gradient(135deg,#ffffff 0%,#fff8f6 100%);border-radius:8px;padding:14px;border:1px solid var(--al-border-lt);border-left:4px solid var(--al-red)}
.seo-kw-theme{font-weight:700;color:#111111;font-size:13px;margin-bottom:6px}
.seo-kw-examples{font-size:12px;color:var(--al-muted);font-family:'DM Mono',monospace;line-height:1.7}
.cro-funnel{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:10px;margin:14px 0}
.cro-stage{background:linear-gradient(135deg,#ffffff 0%,#fff8f6 100%);border-radius:10px;padding:16px;border:1px solid var(--al-border-lt);border-top:3px solid var(--al-red);position:relative}
.cro-stage-num{font-family:'Barlow Condensed',sans-serif;font-size:1.5rem;font-weight:900;color:#eeeeee;position:absolute;top:10px;right:14px}
.cro-stage-label{font-weight:700;color:#111111;font-size:13px;margin-bottom:6px}
.cro-stage-q{font-size:12px;color:var(--al-muted);font-style:italic;line-height:1.5}
.test-order-callout{background:linear-gradient(135deg,var(--al-red-dk) 0%,var(--al-red) 100%);border-radius:10px;overflow:hidden;margin:18px 0;box-shadow:0 4px 16px rgba(204,31,23,.2)}
.test-order-stripe{height:12px;background:repeating-linear-gradient(45deg,var(--al-gold) 0px,var(--al-gold) 24px,#111111 24px,#111111 48px)}
.test-order-body{padding:20px 24px;color:#fff;font-size:14px;line-height:1.65}
.test-order-body strong{color:var(--al-gold);font-family:'DM Mono',monospace;font-size:12px;letter-spacing:.04em;text-transform:uppercase;display:block;margin-bottom:8px}
.resource-table td:nth-child(1){font-weight:600;color:var(--al-red-dark)}
.shopify-url{font-family:'DM Mono',monospace;font-size:12px;background:var(--al-red-pale);color:var(--al-red-dark);padding:2px 8px;border-radius:4px}
.product-img-slot{border-radius:10px;overflow:hidden;margin-bottom:16px;background:var(--al-tan);border:2px dashed #CC1F17;position:relative;min-height:200px;display:flex;align-items:center;justify-content:center;flex-direction:column;gap:8px;text-align:center;padding:24px}
.product-img-slot img{width:100%;max-width:100%;height:auto;border-radius:8px;display:block}
.product-img-placeholder{display:flex;flex-direction:column;align-items:center;gap:8px;pointer-events:none}
.product-img-placeholder .slot-icon{font-size:2.5rem}
.product-img-placeholder .slot-label{font-family:'Barlow Condensed',sans-serif;font-size:1.1rem;font-weight:800;color:var(--al-red-dark);letter-spacing:.04em;text-transform:uppercase}
.product-img-placeholder .slot-note{font-family:'DM Mono',monospace;font-size:11px;color:var(--al-muted);letter-spacing:.06em}
.badge-disc-red{background:var(--al-danger);color:#fff;padding:3px 10px;border-radius:10px;font-size:11px;font-weight:700;letter-spacing:.04em;text-transform:uppercase}
.print-cert-area{display:none}
body.printing .print-cert-area{display:block}
</style>
<?php bh_favicon_tags(); ?>
</head>
<body>

<!-- ════════════════════════════════════════
     TOP NAVIGATION
════════════════════════════════════════ -->
<nav id="top-nav" role="navigation" aria-label="Hub navigation">
  <div class="nav-inner">
    <span class="nav-brand">ALINE Insoles</span>
    <div class="nav-search-wrap">
      <span class="search-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></span>
      <input type="search" id="hub-search" placeholder="Search hub… (/ to focus)" autocomplete="off" aria-label="Search hub content">
      <div id="search-results" role="listbox" aria-label="Search results"></div>
    </div>
    <button class="nav-toc-btn" onclick="openTOC()" aria-label="Open table of contents">☰ Menu</button>
  </div>
</nav>

<!-- ════════════════════════════════════════
     FLOATING TOC BUTTON
════════════════════════════════════════ -->
<button id="floating-toc-btn" onclick="openTOC()" aria-label="Table of contents">
  <svg viewBox="0 0 24 24"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
</button>

<!-- ════════════════════════════════════════
     TOC DRAWER
════════════════════════════════════════ -->
<div id="toc-overlay" onclick="closeTOC()" role="presentation"></div>
<div id="toc-drawer" role="dialog" aria-label="Table of contents" aria-modal="true">
  <div class="toc-drawer-hdr">
    <span class="toc-drawer-title">ALINE · Hub Contents</span>
    <button class="toc-drawer-close" onclick="closeTOC()" aria-label="Close">✕</button>
  </div>
  <nav id="toc-drawer-nav" aria-label="Sections">
    <a href="#hero" onclick="closeTOC()"><span class="toc-num">★</span>Hero</a>
    <a href="#toc-section" onclick="closeTOC()"><span class="toc-num">TOC</span>Table of Contents</a>
    <a href="#brand-overview" onclick="closeTOC()"><span class="toc-num">01</span>Brand Overview</a>
    <a href="#product-line" onclick="closeTOC()"><span class="toc-num">02</span>Product Line</a>
    <a href="#wholesale" onclick="closeTOC()"><span class="toc-num">B2B</span>Wholesale &amp; B2B</a>
    <a href="#vision-mission" onclick="closeTOC()"><span class="toc-num">03</span>Vision, Mission &amp; Pillars</a>
    <a href="#brand-voice" onclick="closeTOC()"><span class="toc-num">04</span>Brand Voice &amp; Tone</a>
    <a href="#brand-personality" onclick="closeTOC()"><span class="toc-num">05</span>Brand Personality</a>
    <a href="#visual-identity" onclick="closeTOC()"><span class="toc-num">06</span>Visual Identity</a>
    <a href="#target-audience" onclick="closeTOC()"><span class="toc-num">07</span>Target Audience &amp; Personas</a>
    <a href="#competitors" onclick="closeTOC()"><span class="toc-num">08</span>Competitors &amp; Positioning</a>
    <a href="#objections" onclick="closeTOC()"><span class="toc-num">09</span>Objection Handling</a>
    <a href="#customer-journey" onclick="closeTOC()"><span class="toc-num">10</span>Customer Journey</a>
    <a href="#marketing-angles" onclick="closeTOC()"><span class="toc-num">11</span>Marketing Angles &amp; Hooks</a>
    <a href="#health-data" onclick="closeTOC()"><span class="toc-num">13</span>Health &amp; Survey Data</a>
    <a href="#social-media" onclick="closeTOC()"><span class="toc-num">14</span>Social Media &amp; Digital</a>
    <a href="#partnerships" onclick="closeTOC()"><span class="toc-num">15</span>Partnerships &amp; Influencers</a>
    <a href="#discounts" onclick="closeTOC()"><span class="toc-num">16</span>Discounts &amp; Promo Codes</a>
    <a href="#seo" onclick="closeTOC()"><span class="toc-num">17</span>SEO</a>
    <a href="#cro" onclick="closeTOC()"><span class="toc-num">18</span>CRO</a>
    <a href="#glossary" onclick="closeTOC()"><span class="toc-num">19</span>Glossary</a>
    <a href="#return-policy" onclick="closeTOC()"><span class="toc-num">20</span>Return Policy</a>
    <a href="#fulfillment" onclick="closeTOC()"><span class="toc-num">21</span>Fulfillment &amp; Shipping</a>
    <a href="#test-orders" onclick="closeTOC()"><span class="toc-num">22</span>Test Orders</a>
    <a href="#shopify" onclick="closeTOC()"><span class="toc-num">23</span>Shopify Platform</a>
    <a href="#faq" onclick="closeTOC()"><span class="toc-num">24</span>FAQs</a>
    <a href="#resources" onclick="closeTOC()"><span class="toc-num">25</span>Additional Resources</a>
    <a href="#quiz" onclick="closeTOC()"><span class="toc-num">26</span>Knowledge Check Quiz</a>
    <a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'brand_hub_logout', '1', home_url( '/' ) ), 'brand_hub_logout' ) ); ?>" onclick="closeTOC()" style="color:#B0322B;font-weight:600;"><span class="toc-num">⎋</span>Sign Out</a>

  </nav>
</div>

<!-- ════════════════════════════════════════
     HERO
════════════════════════════════════════ -->
<section id="hero" aria-label="Hero">
  <div class="hero-inner">
    <div class="hero-logo-wrap">
      <img class="hero-logo"
           src="https://alineinsoles.com/cdn/shop/files/ALINE-Integrated-Mark-600wi.png?v=1685992236"
           alt="ALINE Insoles logo"
           onerror="this.style.display='none';document.getElementById('hero-logo-fallback').style.display='block'">
      <span id="hero-logo-fallback" class="hero-brand-fallback" style="display:none">ALINE</span>
    </div>
    <h1 style="color:#fff;margin-bottom:10px">Brand Knowledge Hub</h1>
    <p class="hero-tagline"><strong>Move Better. Feel Better.</strong> The world's most advanced orthotic insoles — Inventel brand.</p>
    <p class="hero-meta">ALINE Insoles · alineinsoles.com · Inventel Brand · Internal Use Only · v6.2</p>
    <div class="hero-stats">
      <div class="hero-stat">
        <div class="hero-stat-num">66%</div>
        <div class="hero-stat-lbl">Ankle &amp; knee alignment improvement — patented claim</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">20+</div>
        <div class="hero-stat-lbl">Years of biomechanical innovation powering Olympic &amp; X Games athletes</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">4</div>
        <div class="hero-stat-lbl">Core insole models for every activity and season</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">60</div>
        <div class="hero-stat-lbl">Day money-back guarantee on all insoles</div>
      </div>
    </div>
    <div class="chip-row">
      <a class="chip" href="https://alineinsoles.com" target="_blank" rel="noopener">🌐 alineinsoles.com</a>
      <a class="chip" href="https://alineinsoles.com/collections/insoles" target="_blank" rel="noopener">🛒 Shop All Products</a>
      <a class="chip" href="https://alineinsoles.com/policies/refund-policy" target="_blank" rel="noopener">↩️ Return Policy</a>
      <a class="chip" href="mailto:support@alineinsoles.com">✉️ support@alineinsoles.com</a>
      <a class="chip" href="tel:+18883165658">📞 1-888-316-5658</a>
      <a class="chip" href="https://twitter.com/ALINEInsoles" target="_blank" rel="noopener">🐦 @ALINEInsoles</a>
      <a class="chip" href="https://alineinsoles.com/account" target="_blank" rel="noopener">👤 Customer Account</a>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     TABLE OF CONTENTS
════════════════════════════════════════ -->
<section id="toc-section" aria-label="Table of contents">
  <div class="card collapsible" id="toc-card">
    <div class="sec-hdr" onclick="toggleSection('toc-card')" aria-expanded="true">
      <div class="sec-hdr-left">
        <span class="eyebrow">Navigation</span>
        <h2 style="border-bottom:none;margin-bottom:0">Table of Contents</h2>
      </div>
      <button class="sec-toggle" aria-label="Toggle section">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body">
      <p class="note">Click any tile to jump to that section. All sections are collapsible — click the header to expand or collapse.</p>
      <div class="toc-grid">
        <a class="toc-tile" href="#brand-overview" onclick="expandAndJump('brand-overview')"><span class="toc-tile-num">01</span><span class="toc-tile-label">Brand Overview</span></a>
        <a class="toc-tile" href="#product-line" onclick="expandAndJump('product-line')"><span class="toc-tile-num">02</span><span class="toc-tile-label">Product Line</span></a>
        <a class="toc-tile" href="#wholesale" onclick="expandAndJump('wholesale')"><span class="toc-tile-num">B2B</span><span class="toc-tile-label">Wholesale &amp; B2B</span></a>
        <a class="toc-tile" href="#vision-mission" onclick="expandAndJump('vision-mission')"><span class="toc-tile-num">03</span><span class="toc-tile-label">Vision, Mission &amp; Pillars</span></a>
        <a class="toc-tile" href="#brand-voice" onclick="expandAndJump('brand-voice')"><span class="toc-tile-num">04</span><span class="toc-tile-label">Brand Voice &amp; Tone</span></a>
        <a class="toc-tile" href="#brand-personality" onclick="expandAndJump('brand-personality')"><span class="toc-tile-num">05</span><span class="toc-tile-label">Brand Personality</span></a>
        <a class="toc-tile" href="#visual-identity" onclick="expandAndJump('visual-identity')"><span class="toc-tile-num">06</span><span class="toc-tile-label">Visual Identity</span></a>
        <a class="toc-tile" href="#target-audience" onclick="expandAndJump('target-audience')"><span class="toc-tile-num">07</span><span class="toc-tile-label">Target Audience &amp; Personas</span></a>
        <a class="toc-tile" href="#competitors" onclick="expandAndJump('competitors')"><span class="toc-tile-num">08</span><span class="toc-tile-label">Competitors &amp; Positioning</span></a>
        <a class="toc-tile" href="#objections" onclick="expandAndJump('objections')"><span class="toc-tile-num">09</span><span class="toc-tile-label">Objection Handling</span></a>
        <a class="toc-tile" href="#customer-journey" onclick="expandAndJump('customer-journey')"><span class="toc-tile-num">10</span><span class="toc-tile-label">Customer Journey</span></a>
        <a class="toc-tile" href="#marketing-angles" onclick="expandAndJump('marketing-angles')"><span class="toc-tile-num">11</span><span class="toc-tile-label">Marketing Angles &amp; Hooks</span></a>
        <a class="toc-tile" href="#health-data" onclick="expandAndJump('health-data')"><span class="toc-tile-num">13</span><span class="toc-tile-label">Health &amp; Survey Data</span></a>
        <a class="toc-tile" href="#social-media" onclick="expandAndJump('social-media')"><span class="toc-tile-num">14</span><span class="toc-tile-label">Social Media &amp; Digital</span></a>
        <a class="toc-tile" href="#partnerships" onclick="expandAndJump('partnerships')"><span class="toc-tile-num">15</span><span class="toc-tile-label">Partnerships &amp; Influencers</span></a>
        <a class="toc-tile" href="#discounts" onclick="expandAndJump('discounts')"><span class="toc-tile-num">16</span><span class="toc-tile-label">Discounts &amp; Promo Codes</span></a>
        <a class="toc-tile" href="#seo" onclick="expandAndJump('seo')"><span class="toc-tile-num">17</span><span class="toc-tile-label">SEO</span></a>
        <a class="toc-tile" href="#cro" onclick="expandAndJump('cro')"><span class="toc-tile-num">18</span><span class="toc-tile-label">CRO</span></a>
        <a class="toc-tile" href="#glossary" onclick="expandAndJump('glossary')"><span class="toc-tile-num">19</span><span class="toc-tile-label">Glossary</span></a>
        <a class="toc-tile" href="#return-policy" onclick="expandAndJump('return-policy')"><span class="toc-tile-num">20</span><span class="toc-tile-label">Return Policy</span></a>
        <a class="toc-tile" href="#fulfillment" onclick="expandAndJump('fulfillment')"><span class="toc-tile-num">21</span><span class="toc-tile-label">Fulfillment &amp; Shipping</span></a>
        <a class="toc-tile" href="#test-orders" onclick="expandAndJump('test-orders')"><span class="toc-tile-num">22</span><span class="toc-tile-label">Test Orders</span></a>
        <a class="toc-tile" href="#shopify" onclick="expandAndJump('shopify')"><span class="toc-tile-num">23</span><span class="toc-tile-label">Shopify Platform</span></a>
        <a class="toc-tile" href="#faq" onclick="expandAndJump('faq')"><span class="toc-tile-num">24</span><span class="toc-tile-label">FAQs</span></a>
        <a class="toc-tile" href="#resources" onclick="expandAndJump('resources')"><span class="toc-tile-num">25</span><span class="toc-tile-label">Additional Resources</span></a>
        <a class="toc-tile" href="#quiz" onclick="expandAndJump('quiz')"><span class="toc-tile-num">26</span><span class="toc-tile-label">Knowledge Check Quiz</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     SECTION 1 — BRAND OVERVIEW
════════════════════════════════════════ -->
<section id="brand-overview" aria-label="Brand Overview">
  <div class="card collapsible" id="brand-overview-card">
    <div class="sec-hdr" onclick="toggleSection('brand-overview-card')" aria-expanded="true">
      <div class="sec-hdr-left">
        <span class="eyebrow">Section 01</span>
        <h2>Brand Overview</h2>
      </div>
      <button class="sec-toggle" aria-label="Toggle section">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body">

      <div class="team-callout newhire" data-search="New Hire Start Here brand overview">
        <strong>👋 New Hire — Start Here</strong>
        ALINE Insoles is one of our performance health brands, currently in inventory wind-down. Before anything else, read Brand Overview, Product Line, and Return Policy. Spend 30 minutes on the product pages at <a href="https://alineinsoles.com/collections/insoles" target="_blank" rel="noopener">alineinsoles.com/collections/insoles</a> so you can speak to each model confidently. All CX contact details are in the header above.
      </div>

      <h3>Founding Story</h3>
      <p>ALINE was born from a fundamental insight: most foot pain and lower-body injury isn't a foot problem — it's an <em>alignment</em> problem. Traditional insoles offered static cushioning; ALINE's founders engineered something entirely different. Their patented Suspension Zone technology features <strong>100+ dynamic support structures</strong> that move with the foot, actively aligning the ankle and knee with every step rather than just padding against impact.</p>
      <p>The brand spent years refining its biomechanical design alongside elite athletes — Olympians, X Games medalists, NFL players, PGA touring pros — before reaching a mass market. That athlete credibility is a core asset: real performance data from real champions, not lab theory.</p>

      <h3>Inventel Partnership &amp; Acquisition</h3>
      <p>Inventel, led by CEO Yasir Abdul, recognized ALINE as an ideal fit for its DRTV (direct response television) platform — a patented product with a dramatic, visual demonstration and strong word-of-mouth among athletes and healthcare professionals. Through the partnership (formalized 2022 with the launch of alineinsoles.com as the primary Inventel-managed Shopify storefront), Inventel brought DRTV marketing expertise, e-commerce infrastructure, and CX operations to support ALINE's scale.</p>
      <p>Today alineinsoles.com is the single source of truth for Inventel's ALINE operations. All product, pricing, and policy decisions for our team flow through this storefront.</p>

      <h3>Quick-Reference Facts</h3>
      <table>
        <tr><th>Fact</th><th>Detail</th></tr>
        <tr><td>Brand name</td><td>ALINE Insoles</td></tr>
        <tr><td>Storefront</td><td><a href="https://alineinsoles.com" target="_blank" rel="noopener">alineinsoles.com</a> (Shopify)</td></tr>
        <tr><td>CX phone</td><td><a href="tel:+18883165658">1-888-316-5658</a></td></tr>
        <tr><td>CX email</td><td><a href="mailto:support@alineinsoles.com">support@alineinsoles.com</a></td></tr>
        <tr><td>Return window</td><td>60-day money-back guarantee</td></tr>
        <tr><td>Free shipping threshold</td><td>See <a href="https://alineinsoles.com/policies/shipping-policy" target="_blank" rel="noopener">alineinsoles.com/policies/shipping-policy</a> — threshold subject to change</td></tr>
        <tr><td>Key claim</td><td>Only insoles that improve ankle &amp; knee alignment by 66%</td></tr>
        <tr><td>Core technology</td><td>Patented Suspension Zone + Activation &amp; Compression Zones</td></tr>
        <tr><td>Inventel brand since</td><td>2022</td></tr>
      </table>

      <div class="hazard-callout" data-search="wind-down inventory clearance brand status">
        <div class="hazard-stripe"></div>
        <div class="hazard-body">
          <strong>⚠️ Inventory Wind-Down Brand</strong>
          ALINE Insoles is currently in wind-down mode — we are selling through existing inventory with no new production planned. CX should process orders, returns, and inquiries normally, but do not make commitments about future product availability, restocking, or new models. When stock runs out on a model, direct customers to remaining available models or to the website. Escalate any questions about brand status to Brand Lead.
        </div>
      </div>
      <h3>Brand Tags</h3>
      <div class="tag-row">
        <span class="tag">Inventel Brand</span>
        <span class="tag">Health &amp; Wellness</span>
        <span class="tag">Performance &amp; Sports</span>
        <span class="tag">Foot Health</span>
        <span class="tag">DRTV</span>
        <span class="tag">Patented Technology</span>
        <span class="tag">As Seen On TV</span>
        <span class="tag">Shopify Storefront</span>
      </div>

    </div><!-- /sec-body -->
  </div><!-- /card -->
</section>

<!-- ════════════════════════════════════════
     SECTIONS 2–26 — COMING IN NEXT STAGES
     (Placeholder stubs so TOC anchors work)
════════════════════════════════════════ -->

<!-- ═══════════ SECTION 02 — PRODUCT LINE ═══════════ -->
<section id="product-line" aria-label="Product Line">
  <div class="card collapsible" id="product-line-card">
    <div class="sec-hdr" onclick="toggleSection('product-line-card')" aria-expanded="true">
      <div class="sec-hdr-left">
        <span class="eyebrow">Section 02</span>
        <h2>Product Line</h2>
      </div>
      <button class="sec-toggle" aria-label="Toggle section">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body">

      <div class="team-callout cx" data-search="Product Line CX insoles models Red All Day Traction Cushion Climate">
        <strong>📞 CX — Product Identification</strong>
        Always verify the exact model name before processing any exchange or return. The customer may say "the red ones" — confirm whether they mean the Red All Day Insoles or another model they've seen. Use the model table below and the <a href="https://alineinsoles.com/collections/insoles" target="_blank" rel="noopener">Shopify collections page</a> to match. All prices below are current sale prices — check live storefront before quoting.
      </div>

      <p>All products below are sourced exclusively from <a href="https://alineinsoles.com" target="_blank" rel="noopener">alineinsoles.com</a>. Do not reference Amazon, Chewy, or any third-party retailer pricing or availability.</p>

      <h3>Core Insoles — All Four Models</h3>
      <table>
        <thead>
          <tr>
            <th>Model</th>
            <th>Reviews</th>
            <th>Best For</th>
            <th>Key Differentiator</th>
            <th>Current Pricing &amp; PDP</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Red All Day Insoles</strong><br><span class="badge badge-red">Everyday</span></td>
            <td>42 ★</td>
            <td>Everyday wear, most shoes, plantar fasciitis, neuromas, bunions, general foot fatigue</td>
            <td>Original ALINE Active Alignment model — most versatile, entry-level pricing, fits athletic, casual, court &amp; work shoes</td>
            <td><a href="https://alineinsoles.com/products/aline" target="_blank" rel="noopener">View live pricing ↗</a></td>
          </tr>
          <tr>
            <td><strong>Traction Insoles</strong><br><span class="badge badge-green">Sport / Work</span></td>
            <td>96 ★</td>
            <td>Golf, cycling, basketball, lifting, cross-training, work boots — any hip-rotation or bilateral activity</td>
            <td>Textured top sheet for airflow + grip; extra spring for lateral power; breathable mesh to keepfeet cooler</td>
            <td><a href="https://alineinsoles.com/products/traction" target="_blank" rel="noopener">View live pricing ↗</a></td>
          </tr>
          <tr>
            <td><strong>Cushion Insoles</strong><br><span class="badge badge-yellow">High-Impact</span></td>
            <td>162 ★</td>
            <td>Running, tennis, volleyball, long shifts on feet, high-impact sports — anyone needing max shock absorption</td>
            <td>Memory foam top layer + antimicrobial coating; most cushioning of any ALINE model; highest review count</td>
            <td><a href="https://alineinsoles.com/products/cushion" target="_blank" rel="noopener">View live pricing ↗</a></td>
          </tr>
          <tr>
            <td><strong>Climate Insoles</strong><br><span class="badge badge-black">Cold Weather</span></td>
            <td>39 ★</td>
            <td>Skiing, snowboarding, cold-weather cycling, outdoor cold-weather work, hunting, hiking in winter</td>
            <td>Heat-reflective top sheet + memory foam; warmth + ALINE alignment tech in one; only cold-weather alignment insole</td>
            <td><a href="https://alineinsoles.com/products/climate" target="_blank" rel="noopener">View live pricing ↗</a></td>
          </tr>
        </tbody>
      </table>

      <h3 style="margin-top:28px">Detailed Product Cards</h3>

      <div class="prod-grid">
        <div class="prod-card" style="border-left:5px solid var(--al-red)">
  <div class="prod-card-hdr">
    <div>
      <span class="eyebrow">Model 01 · Everyday</span>
      <h3 class="prod-card-name">Red All Day Insoles</h3>
      <div class="prod-card-badges">
        <span class="badge badge-red">Everyday</span>
        <span class="badge badge-gold">42 Reviews</span>
      </div>
    </div>
    <a href="https://alineinsoles.com/products/aline" target="_blank" rel="noopener" class="prod-card-cta" style="background:var(--al-red);color:#fff">View &amp; Current Pricing ↗</a>
  </div>
  <div class="product-img-slot" id="slot-aline" style="background:#FFF8F6;border:1px solid var(--al-border);border-radius:10px;padding:14px;margin-bottom:16px;text-align:center"><img id="prod-img-red" src="data:image/png;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdCIFhZWiAH4AABAAEAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAAABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAAAABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAJ0ArMDASIAAhEBAxEB/8QAHAABAAEFAQEAAAAAAAAAAAAAAAMBAgQFBgcI/8QARxAAAQMDAgQDBQYEBAQFAwUAAQACAwQFERIhBjFBURMiYQcUMnGBI0JSkaHBFXKx0TM0YuEIJIKSFiVDU3OD8PEXNTaisv/EABsBAQADAQEBAQAAAAAAAAAAAAABAgMEBQYH/8QAMREBAAICAgIBBAEDAwQCAwAAAAECAxEEIRIxBRMiQVEGMmFxFIGRIzNCoUPRYrHB/9oADAMBAAIRAxEAPwD7LwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwmERAwiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgInJMoCIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiK17mtGXHAHVBco6ieKnYXzSMjaOZccLk+JeNaagldS25oq6gbFwPkafn1+i4C63C4XWUvr6iSUH7mcMHyCnSYh6LdOObPSudHAX1Uo6Rjb81z9V7QLi4/wDL0ULB01O1ELko2hoADQAOyqAAOSmITEOhdxxxAdwaYf8A0z/dXRceXxh+0ippB/KQub2JIGSfkrvd5SM6MA9TsomEzEOzovaIR/nLcQO8b8/phdDbeMbJWuDBU+DIeTZRheUmldnGuPP8wUcsTw0h7CQPTKjtXT3hkscgBje1wPUHKvC8Os17udpkDqSre1vMxuOpp+nRd/w1xvSXBzYK4CkqDtufK76oadkita4EAg5HcKpyiFUREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQERQVtXBR0z6iokEcbBkkoLbhWQUNK+pqZWxxsGS5xXmXE/FVZd3Pgpi6mo87Y2e8evZRcWXue81ZGosp2H7Nn7n1Wm6K0QtELGsDWgDorlcqOIGB1JwFG0qbKrmgNL3vDIwMlxWJd7jQWqIy1UgdJjIZ1XmvFHGVVWl0TXiOAfC0HCbHb3ji2hoGujpMSP5aiuTq+KbtWE6ZTE0nbfC88ruINOWxkF55uKzLNWmSkbM9+cyZ3UbQ6cX2obIT7/AJcPXktxaeLK5rhh7Z2jnk5K81qK+OOtl1O6rKpa1jiHxSgHpureRp7TQXyhuI0uxFMeizJYy3c40Hk5eXUFQ98LC92Hk/EOa7Dh69nAgqna4zsHKPZp6JwrxbXWgiCoLqql7E5e35Fen2e6Ul1pG1NJM2Rh545j0I7rw4xhoEsTg6M8is20XKsttUKijmMbh8Qzs4diFOkPcwi57hbialvEYYfsaoDzRHr6j0XQg55KqBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREKChOxXnPHF2NwqhSQu/5aI79nOXWcX17qK0SCM4ll8jcdM8z+S83eN880WiGGWehVpHRZ9NTPqXYA8vUrPNJTQR4A1uARLQvbpYXvIY0c3O2XOX/immomvio8SSDbX2W44opvFjJlke1uNmNXkXFxFDKTUyaG/caOZRG2PeLtUVUsjpnknGckrhbpcXzOe1ri1oP5rqmObcaRtUyMtw7wy3PRcvX0HhVT2O2Goj6ITLTve4tznOF09mB/gzHb7nmubkiLdY6d123DkDX8OQEjOXE/qq29Ffbmr0/RWPONzhW21xmcxjXEEkHZXXkeJVSP5eY7LL4LojO+aodsyMYCW9bTHcunoq58UsMThqAwVdb70I6lxa7bVktJ2IWolkdCyWpOzd2sHcrDtMRqKgPOQxp3PdRE6S9l4ev8cZY15L6eQY83QrrHNYGtkiOY3bgrxu2V+iUaHB0bBlwK7/AIOv8E0DY3P1QvGC082lXiyNOrpZXxSskic5j2HLXNOCCvR+EuKRWaKOvc2OcDDX8g//AHXm7oSx2xy07tKlikc0g55ciFZGnuDSDyOVVcfwZxJ47RQ1zx4v/pvP3h2PquvacgFVVVREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAQoqFBwvH1SX3JsAPlYzP1K5hoLnBoBJK3HFb/FvdSfwnA+i1tGWseZHD4QSFWZ70vENm0MpIRGxocT+pWFV1cMDC4O1SFQ1ta2CnfIThxGGhayORkjNT8kqIvG9S1jDeaecR0wbvJLUNIGGD0C8j9qVtc3wawguwcOJ3XsNaWGJxb2XIcTUcdfbpYXjJwcLeI2ws8w4Wnb7xLQFw0yty3+YKvE9EWObKGeVwwfQrClp5KGt1gaXxO/ourmMN0tQnb9/Zw/C9Z2jxkjuNPOKiA4JAXYcJnVw0xv4ZHt/TK1VbSPie6J7QHDYra8HgGCqo99sTMHfGx/ql/RXpyVzZ5nE88lddwtReDwu0+UOqCXOJ6NWl4goXRVcjQPKTqb8iunrW+7cKxCMlp8BrR/1c1nknqFqe3LXGR9dcGU8AOnOiNv7rbT0jaOnZSQgmXGHY5qXgqgBlnuErS7whojHdxVl5qiaz3SiAkqpHYe8dD2CrP6W9dsZxdTN9zjGud+zsHOkLbWXxKEE+IQXDDt9lBFRw22LQ4mSpdzJ33VGyuhIdUnSPut6uSJJ/T1jgi8GrphQVrsu/9J56+i6N7Cx+lwwV41w9XVba0vlzHG4+QZ3aei9W4bu8V3oAx5AqYdnDv6reLRpWYbOIua4FhIIOQR0Xf8G8RmqLaGuf9sB5Hn7w7fNeftOFPC9zHNe12lwOQRzCkmHs6LnuEL2LnAYZiBURjcfiHddCqqCIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgKhVUKDzHiEk3ir9JCtcX+HBIW89K23FbPDvVXtzdlaR0jS1zXDZwIVJjvbePTQXmpDmNDicgOx81r7bddMzmk6m4wQrrkD42D91xH0XJCrNHfvCcSGSk/Rc/wD8kvfwx48SLO7fLFKDJE4Anm1ayphBJ1dVhOkkifrjJHUqv8R6PAJXTFrUefk4uPPO6TqXF8ZWwRVJmY3Z/P5rn7bPNbKsyM88L9pI+69FvYhraORjgA4DIJ7rzGW50EVQ6OaUNLSQQVpa9Jje3HbhZ6Trx26C4ilraRtVC3xGcnY+OM9iOy1NE59DcYp4SDpOC0/eadiFkWa9WTxnMpo55ZZW+GCzuStsLV71WNpKCmkfWahsNxjrlU8omNQztitX+qNNVf54KwxtiYAT1dsQOyzJ3vnsjYZoJHNbEGl8bc40nYrt7L7M4XgVF5qXulLv8OIjA+q6ap4Ntb6URUb5aSUDAdnIPzCpNZn0RWsT3LyKiqW0PDRMLg6RjXO1DbzE4youFKIRwPuMjcyy5Eer7repW94t4crrbM5kjGtkdnS4Y0Sjsei0V1qJ6ihgt9LEWPeRG4N+76Ks99JtXXbEqq19XWmmtzTLKXeac9Pl6LLbTw0hD6iTxZzzedysqKjp7Rby0yNYSMvlPNx7Ba2OSWtcTSQFsQO80nX5JGkflmMqXyOAYwMb3K6Phm4mCua+N+ks+LoHBc033eGMGWUvd67rNpKpg0+GHfkrRKdPZ6eWKrpGVcJBY8fkVK0bBcXwRdDSkwPl10r3AOB+47ou4e3SeeQdwVrWWbIoKmWkqGVEDy17DkY6+i9MsV0iudG2Vhw8bPb2K8sbyWzsdwkttWydhJYdpG/iCmYRMPUgigo6mKqp2Twu1McNlOqqiIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIg4HjyJzLyJAMCSMZPyXHVxMbwQV6N7QafVSQVIG7H6T8j/AL4XnlfHrYSo02xOcvO0rnNOzhkfNcZxPRmWRlQzOzuY6LsbqCI84y5hyuT4jrZaGjkcG62Y3BXNmia2iX0Xxus2G2OZ1MN7YyyqomMkdmRowfVZL7VG5xJbhefWDjWkgrI2yAx74Oy9XttwoK+kZPC5pBHZdGPPE9TDi5Px2XFbdZaCeyRvaQHOGrmvK+MeDIKC7OqjKXQP3IcNmle5VUtOwE62hece0tgraKVjJC5uM4G26teaWjUQrhxcmJ/q1DiuA4KabjFnhBroYw8t22Ja3n+q919ndviht7q8x5nqXkascmhfP/ssmFLxbRxzEBshlhPzLf8AZfS3BRa/h6FrNtDnNP0K5OL1aYlf5aJi0R/ZqeK6atp45auC5VoijdqkYCAGt5Yae+VtOFqWentMdRXzOdNJ5iZHfCDyC29ZTQ1cIgnaHMBDwDyyDkLibRbq7iu4VMvE1XLFFbqrQ21U7nMYCDlrnnbXnGRzGy2rx9ZPPbny87z40YdRv96djc7dT3SkdS1LAWuHlON2noV5DxNZ5LRdfegdOl+iXbZwPJy9rjmpn1Lqdk0RlY0OdEHgvaOmRzC5P2m2oS0LatgGCPDlGOh6/Ra3p+XFS24mryI0s90qTPUginY4hkQ646KtxqqeFohJy/GBFGFfXGuzHQU7nMfjEkmeWNuarS0UFvh8R7gH/elef6LOYVmfwwaeCZxL5o2xNPIOOXLPiETGgGRrVrqmsjqJT7v41Q4n4mt2/MqeCnmcweNG1hz1dkqqYlubdKyKVzY3A6xzB6jkvSuC7l79Q+51B+3jGWk/eC8rhgLQMY+YC3VluU1A9kwmJkgeHNA546j5K1ZRL1bQ4HGFMweXCpSVEVzt0Fyp92SjzDPwu6hXs5LeFZhu+F7s+31Aimdmnecb/dPdd+x4e0Oacg8ivKBy5ZXWcI3Ygtt9S/8A+NxP6KsqzDrUVBvyVVCBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERBgcQUnvtoqYOpYS35jcfqvLalvkGB0XsDuRwvM+JKL3O7zwgeR51x/IotWe3E3ODEhOPKVyt9o2S00sLxsWkZ9F3tfBqaccwuXusLsEtGT1Cpes36epws84csX/H5eCXm01lNVOd4TtIcfMBzXb+zq9T0bPAq36IQNtXVZHF7KiCkdNT7hu5C4CbiGojcWkjI7Llrln9PocvCpeN/U6l6xdOIqbDmxkvPzXK3y7SVNK9jgImEc3HAK4WXiGvm2icck8m8ysyhopKlvjXF7nH7sfNaWy5Jjvpzf6Pj45/NpYFjqxS3lsgdgwyiRp77r6i9n9XE+B8YcDHUMFRCR1zsQvmi6w0lKzx36Y3gYa0c8L1T2MXwyUzKF8g8elOuHuWnmFljtq22fyuCbYovruPb2e407qiieyN5jlGHRuHRw5fRaW5R3O5WcwW+sitNY54bV1BjD3Bg56emexOcLoaWZtRC2RhBaRn5Fa+6+LSVArmAvgA0zRjlj8WO69GJfLzG3n1NxFQcNvpYeFrPUXY1ldFS1F1qJDiRznAYB+8flgBeq3amjrLZNA5uQ5hwuC47pL3XXzhySwW2Cop6Vz5yZXaI2P0kNJGCds5xhba0X2gtFQy03ziT3+51cnmDWEsiJ5N2yGN+aSmHmvFLfcK6YRxa5HEFoHcrRtt09TL41we6Uk+WNu2Pmu79oMEdJdRI5pDSCNhvzXFVYr6vyxAUtN68ys9Eq1MtPSR+E6Wnp29Gt5rWOrWPcRE6WX+VvNZbLVTwkeJEZXfiedlK2oZTyafFiiHoq+JEoYveXMGIKgH1GFlUj6iN2TE8+h6qKSuY92BVasdg7+yvbVvJ2ldjrsf7KNaW6eleze7iEvtz8+HUjLWk/A8LtNOCQvIuGnPFVDUtkcTG7fK9dhkE0EcmPiGVeNolfG3IU7SQQ4HBHIjoomqRvJXRLteF7s2rhFPO7FQ0dfvDut4vMoZHxStlicWvactI6LurDc2XCmGSBM0edvqomFZhs0RFCBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREA8lzHHNAZKVlZG3L4T5v5SunUc8bJo3RyNDmuGCETDyGqZvnutBcoMPO2xXYXqifR1stLIPhOWHu3oVpq6n1N5KzaltdPPL1RtLHwFgLH50kryi+WG2UVQ90xlaCSQMr3a7UgewsLc9l51xlave43Rysw7B0u/dcXJxzE+Vf930/w/KrafoZO/087jltdI0Op4ACB8R5rFnvlQ8mKlBaXbDAyVlP4eeyTNXVtawdANykb7fQOzTN8R/VxXNM1n+73vC/4iKwspba+aMy1pJ76uQH91NYb8y2cQsdQuc18GCN/jHULCrKyrr3+DCCA7oOQ9VkRUlHZqOSqlw+oI2zzTc19sYx1mJiPX5mX01wLxBT3GijqYnAsl2e3O7XLqy4SDDQDnvyXyt7NeLK21ztro43GEu+1jPJw7j1X0hw1e6S6UMVTTPDo5B9QexXZhzxrUvkfkfj549vOvdZXVNORFUWeSpmhbVseIKiM4czIxsehHRabhTgqjpaQitovBnkgdTVjQ8vFT2k1Ekh3UbrsixjwxzmNcWnLSeika5oG+V1beU829pEDYKqlj1u0xtA1O8xIxzJPMrkaiplmjLKKmOnl40owPmAu29pB13OncXNY1rM5cuUnk1ke6wuqHdXO2aqTPY04tclRvVVMs3XSzytUjbfTQH/ACsTf9Uhz/VZz6K4yx+eqbAzq2Ju/wCah/glO4kSGomJ6l2FKO0LpYGeUT0rPQaVH70CQG1dOT2y1TmyUvIUTj/9T/ZY0thpHO/y0zDnYh+f2UTBuXQ2KnqRHHO5zCyQkeUdsL1O1D/y+PPMDZcVwpDTw2mmpQHZYTnUN8lehQxtZSNwOgxsqxZeY62jiOqYRtbqdzI7fNZfgEKWipRDG5zsGR+7ipw3utoQwMY2Knt9XLQVTaiI78nD8Q7KWWDUNTOfZYrmkbEYKiUS9Dt9XDW0rJ4nZDhy7eiyAuDsFydbqsB5PgP+IdvVd1G5r2B7SC0jII6qswppciIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIg0HGNt96o/eYmZmg3AH3m9QuDlZlmemF604AjB5LguKbb7lXuMbfsJSXM/wBJ6hTC0S4m5U+RqAXL8QW0VMBcG4kbyK7mqjyCFp62nw7VjZT06qXne49vEuKrI6WEkAskZnGD+i5CmsFVJl9Q4QRt653K924gtTZo3PYzIPMd15rxVbanwSIMlzNwOjh/dedlx2xzuPT7D4/l15dYjJ/VH/tzpdRW+Ix02C7q71WvbQT3apBlcW04OXE/e9FtLbZpJB49eRFE3mD1UV0uMUbTFTjQxuwxzKxnW+noz90fd1X9MHiK4MoaWKht7Nw4DDRzPZdnwJxPWcOuiM2TBUYMsOd/mPVcpaKAMl/iVe0Z5sa7p/usCukrLrf4Y6Vzmtjdl5HJrUjuev8AlllpW1ZrkjcT6h9acPX2nulAyppZ2yxnr1aexW+hwQ0uOSV8x8N8STcOXdkFNUF+QDJCTs8dQvc+FOJKa50bZoHHSRuw82FdeHNuNS+R+Q+MnjzNq91a7j+N818h0AFrY99XJc9VPjiOPtJ3jk2PkP2W+4nm96urvDjL2gAAlaaoAieRNK1mfutG66PbyZjTCdLc5Rpip4Kdp5GRwcVjy0Nzlbh1yc0dRGHD+gWya7fVHRzSY6u2W9tc0slONNJE1w6YV4V24We01gGf4nMD6l4UEFPdqaXWyr8QAf8Auf3XoVTLWYIdRwuH8i1VTHBI7z0LWEdGkhW0jbeW8gw0Eh063tbrI7rvmtAbEPkvNqWEU3uj4nP8J41BrubTncL0mF2qnikHYFY67a7+1mYTHor2Yc0EdUc3C2hSFrdjkJLEyZpIwHj9VVAg10rC0lrh+a3/AApdNBFvnf8A/ESf0WJMyOeMNeMOHIhaiqZJBLnJa5u4KixL00HKLUcNXVlxohkgTxgCRv7/AFW2CqoqiK1zgOZAQXIoH1cDG5dKz81jvutKB5XF3yCaI7Z6LTyXyNuzYnOKidfj0hwPUonUt6mVzcvEPhtzLJTRjuXLDk4ytTCfFvNBGBzzKEnULxhyW9Vl2CLhZ/aHwzEMycRUI+UgWM72m8HtOHcR023PDgVHlX9tY4fIn1Sf+HoaLzz/APVDgzP/API6f8wr2e0vg5zgBxHSf94Tyr+1p4PJj/wn/h6Ai4en484UlcNHEdFq6ZlC2kHE1pncBDeKN5PaUFImJ/LK3HzV91n/AIdJlFq4rgyXBinjl/ldlZHvL88gFLKYmPbMRYvvR7BSMqGkZKaQmRRiVh+8rmuaeRBQXIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAsK80TK6ifCdnYy09is1Ucg8uqad7XOa5ulwJBB7rWV1OS3IC7ji2i0VIqGNw2T4v5lzM7NTeStDSJ05aeHILXBcTxbbJGROkjjG2SvSaqEFxOFqbvQNmpnMI+IbfNZ2iJjUurDntiyRkpPcPB7+181KySnLn9CxYNvtcNIz3u4OaXjdsa6G9UjrXfZaKRpDHHxGZ7Hn+q5i++8yXEU0Zc9z927bALzZp4W0+6w56Z8UZo7n/APqG51c1bN4UDSSdmMHRZUMLLNQFxwaqTdyyqWnhtMBklLXVGOvNadxqLrXeA051fG4fdCnqY1+Fp+3u3dlthoH3K9Pr5SRDHkA91637OXvHvdbE0xxwt0gdHE8guSpaSOkpoqGADJ2IbzK9FtNJ/A7bBTPbqmeRLI0cs9ArV3edvO59648f0/zPtsA501EZ5WvjmdnUwtwPmsMxyAHBbEwfRQ1dfW1FVnU/fps0f3WUzPuoEsIMvc9fzXVS2uny+Tj73aGK73bP2k73ns1pKzLdU0cM7dLJ3ajv5VjCKXUSZRGB0yApqeEvkA98YXdBrC3hxzWYdK8UDsO+1ZkZ+FY76SlmPkqiSejwthBRyGFoM8b3ae4UM9vqG4cYA7HMtWv4Zy11zZU0slPDM0eGxuYy3kQT/su1sFSKm1R927LRSR09WyGnqtURjZpGRvnOx/VZPD8r6GvdRTDS0nCylZ1dM4FnyWQMELXRv8KfSTgOWa12BnKtAq9mNwqNG6v1txuVY8tAy0jKncC3WA4DGVSdraiMtkADh8JVI25cTjcqK51tNbaR9VWSiONo69T6KsymImZ1DXQ1VTaLg2dgIc04Izs4LrRf5Jqds1PG3Q4ZznkvPoOJKW9VD6WYCEO/y8h7/hPqsuzXB9uqTR1JxE92PN91yhpkw2pOph1z7rWyAESuGeg2WkvHEltoGufcrtBDjo9+T+QWPxjBX1fDVdBaZzT1b4iIpAeTv9/3XydX1Ff75NDXPkNXDJombK4lzXD5rLNmnHHUPS+J+MpzrT5W1r8Pom7e17hWgY4U7qmukHRjdLfzJXJXb241ZBFvtFPG38Usmo/lheKzSOe9xc7IPMKEuBOkc1wzysn7fY8f+OcOnc13P93o909rnF1UMsrvdWnmIRpXO1fGXEdcT492rHs9ZiuacTkN3yjfM7Id5OyynLafcvUp8bx8cfZSIbGqudZM8ulqJXE77uJyoX1Uj3Fxe7fnkrEe4HYdFaC5zzt0HNUm23TTFER1DLM8p21joqmaTo8rFLA0gahnnzVdZwARj1VXR4dJfGkLstedQUnvBbs1w3WMcjAGCUeWNcDtnKnaPBl+8y74cQro6udpB8Ug9N1ih+H+YeXG2FR+MDGU2iaR+W6pL5cqR4NJWzwuG50PIyultftO4xoXDw71VOaOTZJC4LhQ4eGM7qmc8gQpi9o9S58vDw5Y++kT/s9itnty4mhI96ZS1LRz1DSSuts/t6tzzi6WmWHP3oHhw/XC+cS7JznJTUdsZW0cnJEa287L/HuDl901/jp9iWL2p8GXQhrLw2mkP3Z2lv8ATIXXUdwo6polpamGdp5OjeCvguSR46/PdbG08SXm2uD6C41MGOQZKQPy5LWnMn8w8blfw+k7nBfX+X3iJXdHK9tQeoz6r5T4W9uPElvYyO4Ohr4xsRI3DsfMYXqvCntm4ZurmRVsj7bK7AAk3YT8+i6cfIpf8vnuX/H+bxo3Ndx+4eusla7rhXgg8itPQ11PWQiemmjmiduHxuyPzWWyTq0reHizWazqWaix2zOzvupmva7kUQuREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERBjXGlZV0r4XfeGx7FcFVQPhlfFIMPa4hwXopXOcWUOQK1o5AB4/dTCYlxFVHhx2WBURkxn03W6qGc9lhyRggjCiWkS8s9ptBojhuLY2nTzK8+rJoWU8lXC1ricAEdAvdb/AG5lXQz0krctcDp2XhVXTe4XiS2VMfkOoNx2XLnpuvk+k+B5Xjacc+pc9JLVV8/hQ+dzti48gt9baOO2UulmHVLuZwkUNLboWtgYBI/cuK3fDFjqrrWNyH4zl7jyaO649+c6j0+jy2px6/Uv7bXgayPkkFyqQfDhdqyep/2XZC6N8OTNOHufuC48lsKGgjpqRtCYsQMGD/qVJ6Cl1ZjjwF1VpMR0+T5HJ+rebT+XM1L5ZCS0Sb9Ixj9VrJ4H+OCKcZzze8krtJYWNAAaOX4crX1tI2cFmudvcxnTn8lr4zplF9dNfboHag+ogY5mMbbfut5areX1AlZAxsYPlJGcrSutcDXjLKyQesx/ut9bvHp42siZUsaOQEmf3U4977Z5qReZ03LoJGtwWNPyOFE4zQcnSx/qFZBNWFwBfK3J+83IWWKiqj2ljZJH8sfqujyh598VqypUSMmbE8O1SBuHn6qlcHy07KuE5lgAD8dW9/osmeKOZrJ4mhpcwgtHzCx4HGGXU3BHIg8iOoU63G2Uzps6GqFdRhzT52Y1LYQVDns0PPmC5ovda6xtTFvTP3Hp3C3BkDoxVQHU07qukttFqzusqJrXcwtU64xx0ZeMGTstFJe62Kfd5Dc9EiJlG4h3EcbXA9AF4n7VOJHXK+OpYCRR050M35u6uXo1BfHyNMc24cMZyvPON+HBRye9UzRLTPJIJ30nsVneJh6nxVsUZfv9/hs+AJKK42ExPa33iLIfnmRnYrdOk99gNM8g1EI8jur2/wBwvKLPXVFnuQnic7DTgtzzHYr0IVcdXBDc6V+Gv3cG82O7FTtrzuPOG+57iXV8N3NlTEbfUHFRGNLSfvD+68+9tXs9Fxgkv1ojAuUDftI2jAnZ1B/1Dot5PJ4gZcIDomiIL2jnnv8AIrsrTXRXa3NlwBJ8MjeoPdLVreupcOHNk42WMuOfT40ec7Dn1B5g9lE52l/PC9c9vHArrZXHiK1w4pZXYq2RjZpPJ+Ox5FeTPYzSScHsvLzUmltS/TvjOfTl4YvHta9xLRg5PcKjC4f7qrgNOlgxuqDkcFYPXhdHnJzyVQ3fbO5xlOjR6YV7m4HLHVE6W9c8uwVw58xkBWuOS0joqagTuMHsi8Qka0Z3xnoFbKCXeUfPKoMBw5ZHMr072Xez63ca2e4Olr5KWupnN8IN3aQ4HcjtkK1KTe3jDk5nKx8THOXJ6h5qwZI1DYDKq4jAIxj+i3XGfDdz4WvjrVdYTHLgmGRv+HM3uD+3NaJ7S05Lh8sKLVms6lbDyMeesXxzuJXDLdhuCri4NOSc46BWseBue2ypkuO3XoobRqVwkJ3wOapqI+SowadiqY1EN1YHdE6VJzuo86QAt/w7wve7/S1L7PRe+OpGh0jQ8A49MndaaeCWGZ8M8MkM0fxxyNLXNPYgqfGdbYxnxzeccT3H4Rh3cZVTUSMc06uXJRucM4VJnasbYwobVrEy6bhTjjiLh6rbNbq58XQsJJafmF7rwL7cbbViOk4hhNNOdjUR/AT6jovmEEh2VIx5YdRdk81tTPenqXk8/wCE4vMj766n9w++bZdaWvpm1NHPHUQuGQ9jsrNEwcAWnBXxNwVxteuGqgTW2skY0nzRk5Y70I5L6M9nPtKtnFEYp6hzKO4NbuxzgGv/AJf7Lvwcit+p9vgvlP49yOFu9fur+3qUVSWjDm59crKje14y0rQsqcYBOc8llQTlu7XfRdOnzzbIseCoa/Z2xWQFUERFIIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgKOeJksTo3jLXDBUioRlBwFypHU1XJA7m07eo6LXSM35LtOKaPXA2qaPNHsfkuVlYHbhFolpbhEdOoDcLy/wBp/DMlS6O50TD4rDk4/Veu1DM6m91iU8NPK2WmqYw4O3aSORUT22w5LY7xav4eN8P8Ky3psUhZh7T5j0avVLFZKa0UrYGFpIGXP7lZ9RR0NHA6ARiGA7BrG8jzyVM2aAQtaJtRx1buuWMXjMvY5POtyq+UsSb3Vm4cXFYE9QwOwI1spZIxkE5+i18r4gTkH8ltDiiWK6obk/ZrEmmk15ijiAPV2SsqV9OHHLCfooJaymYCzwZHfysH91O5bV1LDknqgT56UHp5Tj+qvbW3Hw9MdRREjroP91h3K6Mhb5aWpdnlhjf7rX0nEcTXkS0FWAOeY27/AKqN6W1MVmzpKe6XZvlkjpJW+mQf6rNhuuXaammfG3uNwtLTXezVEQkfDLH/ADw/2WxgbbZwPArRGT01Efop3P7Z6rGotHtumPpBLG+CoyXtOIz174Vr2DcrUVkUtJNAfEEjASQ7rkgrYW6q94hDiVauXx6ljl4U3+7GnjMb43U9Rkwv5/6T3UFJNJa6s01Rkwv5HpjuFLIBqyFUlk1P7vPuB8Dz90/2WntxTWadTC6uaWkFp1NO4PdYEuH5DsLJppXUuaepGYj1HT1CVVOG4exwex3wuHVWrbSkwwYnuieAfotrTzRTQup6lokhkGCCtc4bYIVadxY7BO3RXtqyImazEw5Di+wmgq8b+DJvDJ3H4T6haiwXaoste9kv2lLJ5ZYzyI7j1XqUsUFyon0VWAWuHlJHwnoV5rxDapKOskpqhha9u7XEbOHQrivWay+p4HKx8nH9PJ7dhBKwFk8MjZaeUeR45EdWn1Wba6w2q4NqGOPusuzh+FeecNXl9qmdQVoLqKZ2XY+478QXYj7NugkSRPblrm8iOhVtvN5fGtx8k1n1L0Kthpbtbn08jGyxTsILTuHAhfKntD4al4Z4hnoHtd7u7L6Z+Pibnl9F9A8L3w0cjaKrd9lnEbz93Pf0UXtj4WHE/CsktKz/AJ2kaZ4MDdxAyW/UZ/RRmx/Up/d0fDcy3B5ERb+mXzBk6cEDPdWs5np2V0jXAjoT0PP5FRuJ045leRPt+n453G4byw8NXq+xzm0UEtWYG5eGDcBayrjmgqn0tTE6GaPyvieMOYexC732JcVw8OX10Fc/TSVrRHI/8B6OXsftL9nNt4ztDrhTCOC7RM+yqWDOvsDjm09F0Y8EZK7rPbwud8zk4PL8M1f+nPqXyzsBgqrQCT/VZNxoK21181vuVO6nq4XaZI3d+47gqCQaSM4GRuO5XPManT6DFmrkrFqzuJRt5Fdn7MuK5+FuIYK1pc6B/wBnPGDs5h/cc1x5IDBtg+iNcW7tdlItNZ3CM+GubHOO8biX2JxBZbD7Q+Ew2RsdQ2aLMEzfiYe4PcdQvljjDhy5cJ3mS0XVgyd4ZsYErM8x69wuy9jntDk4dr46Ctke+3zPGrJz4R/EP3XuXHnC1l494ZLZmtc5w8SCdg3jfjZw/wDvuvRmteRTcf1Pg63z/A8r6d+8VvT5AkaW8lQjyZDgStlxFZbhYLtVWu5s0zwO59Ht6OC1modsfJedManUvtsGaMtYtWepWF5aCT0KqDlgc08+irtvnqMKuhobtn6qHVEw7b2T8XS8KXxtWG+JTyeSZg6tK9v464GsPtI4fjvtlkihrSzMVQwbE9WvHUfqvlqNxY/Zep+xj2gy8MXL3KskL7dO7Ejc/AT94Low5Yj7benz3zXxt8k/6rjTrJH/ALedcS2W5WC8S2y7Uxp6mPp0eOjh3BWtcMjGMr7A9o3Bdn4+sDJo3R+Lo10tVGMlpPT5L5U4jsNy4eu81qu0BhqYzkHHlkb0c09QmfB9PuPS3wvzVeZXwv1ePcNOTk4G3X6IPLyH1Vzx5SeSiLnDAByud9FWNp4JCJN+S2VLVSQSNlhmfHI3cEHC04OA70wr2zN2BOCOSROpVyYfKJh9B+yv2smR0No4jeC3ZkdUTjT2Dv7r22nnDg17H6mOGWkHmF8Mw1GgtewkOyvbfYz7Ro6RsNkvU5ZTk6YpXHPh+h9F6HH5X/jZ8H89/HvtnPxo7/Mf/T6Him2G62NJU5IY4/IrnYpdgWuBBGQe6zaeXON913vhnQosWin8QaHfEFlKoIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiILJ42zROjeMtcMFcLcqY0tXJAQQGny/Jd6VouKaMy04qGDzM2PyRMOQkaHH1WBOwtflpwVnuwHYysedvNV2110sqHmooSZI8tBw9zeYWvM9G1zGETNdHyL2rLhnfA8t5seMOB7KGubTumMkswja3m3HNLRuG2C+p1KjzA/zNkjJ+axJwzrpU8NNC6E6HiQZyDnkseelJdsNlnEui1dSxZWwkHzNH1WJPFHgZeB/1BZU9ICD5eXqsGahYS7MTXf9SStSd9NfdhA1jQagDf8A9xqwWQh2A2V3pgtKsvdup3zfaUrHYG3mWpFtpC4F1IRj8Lyq7dFaxaep9OkomTQSfEXsPQsH9ls3UmvDzTwyA8jjBXGx2+lhOuN9XGT+F3JbGy1FTTymJl1nDHHYSDOCrRO1J3a3l+nQSZghbC6Msa52W5OR2/dX00op7a8NOHZ7+qpPLUVFIY55Inlp1B7W4WC7XlsXQlL9xDTjXnVpltKG6PneGPa3IHMLZhzX+UczzC01tgayQvx6LHuNRK2qL4nHbZRuYt9rScdL44tlj26UjWzwpWamdD1aogJqIAYEsDu3If2WPRVTzT65zuG5KzIKhr4/sXtcDzHQq8Zon287Pwb07r3A6BlQwSU+/dh5hYr4nDYtOVlGHUQ+BxjkG+n+xVzKkOd4dXH4b/xgc1tEuGazHtiQyEHBO4U15oKe+W0QTFrKiIZikP8AQqWWj1jMZDx3CxXwvjds4gqt/uhpitNLRarza62+SKZ8FTEWSsONws3ha6PiJtlYCYucT+eg9vkV21XGZgPEa1+OpG61s1BFnU2PBG+2yy1p7t+dXPi8MkMWpD2zN04O+D8l1fBd+a6pis9a/DntPuz3c34GSwnv27rl5dTcBwUM0QmZoOWuzlj2neNw5OHyKmf24fGLfbb0889tPC//AId4zldCwtpa4GeLbAYfvNC4FwIJyc7r2f2sXulvvBkUNzAjvttqGeVo2mYfKXA9sHK8blABdjqd8rzM+vOZh+h/CZMluNEZPcdf5VjkDXA9RyXv3/D/AMdySEcPXCcvcBimc87lv4P7L59dgP8AKcrOtVxnoK+Krp5HRyxODmEHkVGLJOO0TDX5P4+vOwzjt7/H+X0f7eOAI77av47bYh/EKZutukbys6sPc9l81SEOY1w8xPPI3avr/wBmnEkPFvC0dQC0TAaZoz9145/Q8/qvn7238JHhji19TTs/8uuTjJEcbRyE+dn57/VdXJp5V86vm/47z7YM08LP+PTzs7PBVC8aj5VJK0B27vko3DSe64H3cTC+Jw8QEbEbr3j2AcfiOVnDt0nAjf8A5Z7z1/B/b5LwRhxknnhZFLPLBKySN5a5pDmkdCN1piyWx23DzvkuDTnYJxX/ANp/UvqP24cAx8VWI1VDE1lzpxrpnjbX3Ye4P9V8sPidHI6KZr45WOLXscN2kcwV9X+xDjRnFth/h1c8G40rAD/rb0cuA/4huAfC8Tii1Q5I/wA/E1vxD8Y9R1XZnpF6/Uq+Q+I5uT4/kTw+R6/Dw7GDuP8AdNQDQc7eqq8HII3HdIGEgt2wO64JfcUtExtUsaXbOB9QqBxa7PIq/wANzSXDcK4taQM5J7YULzPXT1v2Ke011hqGWe6vc+3SnDSTkxOPUei9e9pXBFq44sYDtInDC+kq2Yy3Pr1B7L5EaXN32G+xyvc/+H/2gTRVEfDd2mLqSU6aZzucTu2exXbx80a+nf0+P+b+Lvjt/rON1aPbxTiayXGxXmaz3CEx1MXfk5vRw9Dhaot051Nw7HdfW/tp9n8HFlnNRTMay60jS6nkH3x1YfQ/1XyrVU76eZ8NRG5ksby17HDdpHMLHPinHb+z1/hPmK87F/8AlHtrnnUzG7cbq5obrAyB3yFZOSZvI3Y8lVr8Ek49crHT6OJ6ZUXh5OXHYZC2FDUwZ8ObODycCtVG7OXDHLoqsOklwG5TUsbU3Gn1V7E+KIrzYP4TLU+NVULfKScudH0J+S9Fhfh+Mr5H9kHETrHxfSVbpNMWsMlHdp2K+uPsy5sjCC1wyD3C9bi5JtXU+4flX8j+Pjicryr/AE27/wDtsaaVzHhwPJbqJ4fGHDkVz8DhqC29uflhYenJby+fZaIigEREBERAREQEREBERAREQEREBERAREQEREBERAREQERMoCKCsrKakiMtTPHEwdXHC5G++0rhy2BwbUioeOjDtlOx2qinnhhbqllZGB1c4ALw+/8Atrldqbb6cNGO37rz69+0O/3B7g6ctaT1KnxkfRt241tNEHCJ5qXjozl+Z2XHXbj2sqg6Jj4KeJ3QOBOF8/1N4uVST4tZKR2BwFhvnnccunkJ/mKnSYmH0bDIyoZFWRyamvZjAO3qpJDqC849jl+M0NTY6l5Mkf21OXHm3k4f/wCV6EJNyCsp6bRO4RVIGnngq+NkNdTNY8ZfHsfUKCY+bmoKeYwz5B2OxUwTGu2PJRlhe6CGRob8Ja7mpCypDRmok5dTlTV0NczIilLQNwDyIULK2qDA2SGOX+U4KzmNS7qX+pT+7EnfOBgPz/0rDmlqgDpmYD6xhbCerAb5qSQH0P8AssCpq2HlBL9G5RHcdQ5i5y1jp3D3mnzn70Q/ssJr7gN2zUTx2LQP2Wdd6+NlQc0lWd+kWf2Wulr6MNy9lQ09QYFV2bmK9e15mrw7akpJO+l5BUkNwqIn5mtsrAOrJAc/mVhC42ovDX1Phk8tbCP3WXFU0rvLHWwuB5aZBn9VMTH5Z2iaxEQ3tmuttuLzQSsminf/AIZfHjcdMjZSxlwqnB40ljcD1WrpKaqfKzwpM76mlzc7/MKB18Aq4qeqOiRzywu/b9FEW12Ux7yRSPUumbOIxzUTWteBkA691rfFdNUNjaeRyfktnE4DzO2DeeOyis6rNnXnj6mSuKvqPbNrP8uImnzOGMKK1U0kVQBk4aN91DDOJJwXFbOlI80ncZUxqKF4m+aIj1CWrq2QvaxwOHDc9lT+IER/at8eIbAj4grY2NnL5ZBtjAClpKeIQnLfKQSQp7rESxtFcuSa+PUKUtTBIC+kqgD+AnS78lJ76AcVMW/4gMLmbpapqd7qqkldoxqAKgpL/KIgJ9gDjLhlqt5z+XHbhxaN4Zddqp5PgkbntlWy07xybn5brmZ73TU4ElVEGxO+GVh2K2VsvFNM8GluAJx8DuaRetvyz+nnwxu1el9ZBrBy3BWuLC12CNwuvihhuNOQPLUY2wNnLQ19LpeWkEOCbbY8kXjTkuMLCLxbT4WkVcQJjP4v9JXjVUySKV8czCx7XFpa5uCCvoQZacHmuH9onC/vgfc6CMunaMyxgfGO49Vy8jFv7ofS/BfJxgt/p8s9T6n9PK9GdmhUxpdz+Hmr5WuY4gnfKjO5yeecnHJcL7b3D0D2NcXy8L8Swuc93uNQ4NmYe3f6L6L9p/DNLxhwjLSsLD4zBLTyg/C8DykFfHMcrmEEfovpD/h241bdbSeF7jJmqgaXUr3O+Jn4fouzjZf/AAn8vj/5HwL01zMUfdX2+fK2jqKOsmoKyMx1FO8xyNcMEOH7HmsSVuHgEc+S97/4geAjODxTa4XGpibprWNHxsHJ/wAx/ReDylsjQQQR0IWGXFOO2ntfE/J05mGLR7/KIDvgKrZBnng9la7OnA5tVGR+bW7A9VnD19xLqPZ3xJU8NcT0dyppHBsb/O3Ozm9R+S+w5zT3W0x1LA2SGpiDiCNiCORXw7Tx+cDzDthfZvsxjqm8BWqKuaWzCAamu5gdF28KZmZj8Phv5dhpHhmj+r0+a/a3wS/hO+66aJ38Kq3Ewu5+E4/cP7LhnnQ53XGwyvsjjbh+jv8AZKq2V0eY5mEBw5sPRw9QV8icQWessV2qbTcQWVFO7AdjZ7ejh6EKvJxeM7j8uz+O/Kf6nH9K8/dH/ths77gYGAOikIOMAYB6qFrxq0kg7KYPGMFcb6usdIg0E9tsZWxsk8tLI2WInxGPBBHpyWv6rpvZ5Yp+IuJqG104OZpPtDjZrRuSrViZmNOflWrjxWtf1EPrjhOeouPClsq5x9rLTNLz9F4h/wASHAngA8VW2HyEhtcxo3B5Nf8Asfovom20kVFQQUcLcRwxtjaPQDCwOJ7dTXG0VVDVCPwZ4nMcHeoXsXpF6eMvyrg863G5X1sfqZ9f2fA8kDtw0kZVhYYgNbc55k81v7hSsoLvWUpw/wACV0bXDkQD0WDJF4ri54OlvJeNPU6fr+LJ50i37a+JhDS8nA6eqllbsMbfXmpJ3McRFE3do3x2UDh4QbuT3UtIn9pqJ5ZO06iMFfZHswuX8X4AtNY52p4p2xPd3Ldv2XxowYIf9V9Xf8OjnP8AZmwO5NqXhvyyuzhW++YfHfy7FE8at/zEvRaY7hbagdicDuFpozgrZULsys+a9J+ctyiIqAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIdkBCsS4XGjt8JmrKmKCMfekeGj9VwfEPtYstEXR26OSueNtQGGfmpisz6Rt6KXY36LCuN5tdujMlbWwwNH4nb/AJLwbiL2lcR3NrmxVLaOB2doQMj5lcnNUVFWw1FTUSzgdZHl2T9VrGH9yrN3tfEHtZslI1zbdFLWyDYHGG5+a4S9e1riOqa5lIIqMHkWjJH1Xn76gGVsLMF7jsPTulzkjp/ISNTR5j2WkYqwpN5lk3S9XW6TOfWV08pducuK01Vsckkn1Kko6jNvdWOGQ7Zg79lqampdUVjKYc3nJI7KfGIREstwGgvyNONj3Wsnl1SeGw7lZF2qMPdG3yxxDA+fVauilPus9Y7fUdMYwqTEL1X1VQ2PXGHZwMOPcqIV8Vut8T66cASP0jPTPJa92qWsipmnIPmeoOIaWO4h7ZRqjjGlg9ep/wDvssrT2vEOx4euJtt6ortSy62RSAvwebTsR+RXvwlZKxs0TsxyND2H0Iyvk3h1r7Fw7UV1VNJIA77NjjsB0C9v9ifGNPxNwuaUOxV284ew8/DdyP0O31CytG2tZd9O4jqsKZ5yp5SSNysZ4ypr6Xt6bKCqE1DmQatOB9FAJbe2bADmHHMjZQWyZsdSYXjyu2WTU05P2bI2uc3klmmC8VnU/lSRtPIwmOoicPnhYE9MxhyZh9HhWsoZnvk94gjAztpOFDPbKZ2cxk/9RWLumsUn20N2jd71IWvJ37j+61sjKg40yY36sB/dVv1tpDWP1MqAB+F7u3oVqH2yhJGmWvac7DxH4H6qszH4aY9V+6W0f4wbh0TXnvowsOeCKXAnoYXgc+/6hYhombtivFdFjoXH91dHBcRgwXwPxz8RrDn9FW3bSka7tLLgo6WFwkgNRTPHLQ7AH5LVcVwPMT5Y3l8jdL88vQrZia6tH+UpapvUsJaf0KkubI7rby80z6acNMUjC7ORjYq2vxCKXnFbzsxODLtIKYNrHZLsNY70XVVNW0U4axwOeZC8wlrI6QlrT5YvLjKz+HLvNPWhniExt3eCeiztbyv4x6h6MYvo4ZzW9y9FoAdOT97dbM1QZG2EHfC1VFPFJEahjst5AdvRX0jzPUkkbA5Wv9U6hlEfTxza3uXSUpBhazkTzyslzmhjY25y7mtbTTAAkrKoCZagyHcNTe7eMOX/ALOG159ymuETZYTTjI1DBK0lNZ4oqd9LO1ry52r6LoWHLnyO+EcligmQyTY2BWnU2c9ImmCZ/MuG4ioaejeymaZHQzHLmc8Y6rXXS3SW+oDmUr3jQNE0b8Px6/8A5W7qNd14iY0MLGMcGAY6A5K3t7phJEcNBcBsD0CyjFTJeZmHRm5WTj4aVrPbT8JX9tLW0hfU1TXNeA9sjchy7y7RU0sz5muwxx1BcXYqcvqA17GnTy26raXq4GKExgkk7bK8x4uKlpz33EaWVMUT5D4UjSe2VA6Igbgh4Wna9zpM6jknut/4U7qWMBpe89ewUUvudS7M2Hwje3jftK4b/h9aa+ni/wCUmOTt8Duy4vHl1cvRfRN5t8dwt81JUMyx7dLgR+q8M4nss9kuMlJPl22pj+jmdCuHkYvGdx6fY/A/Jf6jH9HJP3R/7hp8rZcOXiqs13p7hRyujlgeHNIOFqHEjYAE9ikYe6QkghvQLCvT3suOt6zW3qX2twffaHjLhaK50+h0jmaKmLnpf1GOy8g9ovsZnkrZrlwvJEzxSTJRS7NBPMsPT5LkfYlxvLwnxGwVEmbdUkR1DOw6O+YX1c59FVU8VRDI18czA5jmnOoHkQvTx+PIr93t+b83Fn+F5U2wz9s+v/p8fO9nfGrZhCeH6nPUtczSf1W+4e9kHFNbJ/zsdPQRnGfEdqcPoF9K1ccdPCZ5W+FE3cySuDG4+ZXH372j8J2YlpuUdRKPu0zTJ+u4UTxcVfctqfyD5LkR4469/wBoargn2SWSyTx1Va51xqWuBb4jcMaRyOF6tT6Yog0FeC3f24YDm2u2cvvzu/YLh717T+K7k4l1ykhjP3YW6R+Y3SM+PHGqs5+F+S50+Wedf5fVFzr7dTxF1XWwQhu+XvAwvnr/AIh6/hm6T0cltq457lAS2V0Y2LD0J7ry+53m41jiaitqJdXPXIT/AFWBJI5zcucckdSscvK848Yh7vxf8bjiZYy2vMzCMu5nfbkrw4tbzPplQ7uG6uaC4Y1ctlxz6fVwvEpJxkn0BXR8G8VXLhipfXWmYRVT4yzURnY81zLMMcdtu6q52kDOcncJEzHpXJjrkrNbxuJ/D0So9qnGc8WqW91eT+GQjC0lbxXfrjrdVXWreP8AXITlcv4h0aRyO5KlfKGta0O8pHNWnJafcuenB4+P+mkR/sr4zp6jW52QDuT1U73Ajw2HpuVBLobAGho1HcYVkThAwgnJcMZVHZHpdUvZTN8u8hWFKDIQ4ZPdZMzBI5jjncDdVq3NiawNYG52ypgmdIYW5cG9cr7B9h1E6i9mdvLhg1Gqb8ycL5JslLPXV8FO1pMkjw1oxzJOAvuO0W1lq4foLbEcNpqZkf1AwV28KPumXxn8wzxGKmP9zszus62EunYB3Wv3BO62NlBNQ3Y7br05fnzfoqN5KqzBERAREQEREBERAREQEVCdlTKC5FQFVQERCgIrJpWRRukke1jGjLnOOAAvKuPPa5SW+SSh4fDayoHldOR9mw+ndTWs2nUI3D0i8Xi3WildU3Grjgjb+I7leU8Xe157w+Dh2m0t3BqZv2H+68i4m4huNymlrbnWS1MmCQXHZvyHRYlsq21XD5naAXOAd6+q2jFET2ytf9NpVcQXK+XV0ldXyTujPna87HI7LT3GonaZGHZo3AXKUF4dScYzRPcQyVgIz1IJ/uu5a2lqGeNI0O1DuVtXrpGp9tHwtdPfILpSuJLojgZ6A/8A4W9ucj4aOnhYcAs1EqOnZRw09Qynp4o9TCSWtwXEDqVjX+Y/wqmqG7/ZEKIRedsLhWqNTxDVF5yIGho/qf6LA4tr3RwPGvzyHH5lYfs1nkku1xLuZdy+hWt42mLaqBriR9s3+qb62nXcO1q9MVBSQDytDM/VaGwzCe91cuQ5sTdI9Ftb3IRQwPxsI+a5vgSQyS3I8yZDv9FE+j8yvvtSYqZ5zgu/qVWqBgtlNE08m6j81ruKXgzwwnm6QD9Vsr8dFMzIwAxVmF6tZY3F9TVVJOdPlBVtdIGQhhdu525UnDTf/JXy4/xHuP64/ZRXKjFTHjOCHZXPLSF9wLa2GKkZgwRjLsdSsr2U1kHC3tDpaqocW0tUw00m+ANRGCfkQFFbKdsEQYBq7lR3KjZMG5GCDkEKu1oh9PvxkgODh3Cxn5BK0Hs0vpvnC8Rm1e8UYEMrnH4uxXRSAEKIaz2xZMh3iA7gramSSSKKaOQtyNLsdFrJNgVk2iXOundyO4+aupE9pAy4Rkvje1w9VgV1XcQDimp/zK3bHCWA6XgOG2CcLTXJjADrLm46+IsrV1DtxZJvrbjL3U3VtY5wt9O7b8Z/stPNcLiCNNka4Z3xJ/st9dZ4DUOaK2IEADeQA8vmtQ+WLVgXaIb7AzN/usp6d9a770wJLvVMHmsE5OfuSZH9FX+M0ekePR10DurSwOA/os8OlOdNdCe32jP7qsRq8kCSJ/0af6KvpaPv9x0worjaJHgCsbCXHAD2lp/dbCsc6K0yTQVAlcwg4Dg7LVR0Ye0ioo4nn+T+6joILbDXNqBRGOQZB04IIIwRgIpaIvP9oec3yQiulaGuGs6sd8ra2aP3aEMJxJJu70Cy+IqWJtwirSAI2gjT3Odloq6v8PIDvM74iFWbePUe5ezg1ydWt/TV2Fp4hjgmFM4kxnYb9e67+2lrYWuG5eM/ReJWJkk9UJz/AIbOWepXpdgu5DW08x87h5N+Q7JW3jGmWbF9e82/EOrmnHiBrNh/VbahPh07Wg+ZwyVoKAeLU5PwjfK2cdQWOc6QEfhwVrSfCNuTNj+tbxj1DZ1E2GCIcyqkCOAMzu5YFK/xJQ9+cDfKzBI15Mjj5QNspXqNufNXzvFY9QgpKOKK4idjRr0nKV7mmbSzc9VKyTQDI4+aTkMcgoAA55Jxk7lb46+Ndy87lZJyZP8ACSliZTMMukNLhv8AJcvfKoS1REZ2HVbm9VojgLGncjGFzRa6R5OywyzuXpcDFqPKWRamvlqGgjbK76iEcNOGuZl7m4+QXLcM0hfUs8u3Vb2acic6DsNgrYa7hn8jm+6Ksqst7XUwqGbP69j6Lz/2j8Li72l0kDf+bp2kxnHMdWrt6i4GKlDpHOx0GdlSndHXQGWLmBuOoS9YmPGWfDzZMFoz1/D5Scwskex2zgcYI3VzBgfVei+1vhc0NY680zAYZn4laB8Du/yK8/YwgZcAPReXes0nUv0/icynMwxkqozLXhwOB2XbcO+0riqw2z+H0FyMcGTpa4ZLR6FcS8kagG5OcqjZWaj4nQYGyVtNe4XzcbHnr45KxMf3dFd+Kr5dXufcLpU1AP3XP2WklqHvcS7O/VQah0Ksecjkq73O5Tj49MfVY1/hPrIBIOdlENRyXEggd1QPDSBgnP6KrnYO5ym5a+EKk53JQOcQQSMdNlZkO6H1GFU/CO4TadaNW3MB3RVL8jBA+itDfNko4jZ24BUSkcM8+nXsge08uYTYsO5Hr3VjQ3ORkeqkSvOQMAKxztRyRsOio7O2DzKp1543SO0wue7UQW7YUk0RnhY5uzmndRAjc59FM0uwC0755KCZ0heZgdEgIaBzU7ZQ9rRI3UOWQpXTP8LEkZJCvp4o6qRrY2kPzyaNz9FMM75dRt6R/wAOPDn8Y42ir5Ii6lt48ZxPLI+EfmvqeoORnGFxXsV4U/8ACXBsMc7A2vqwJaj0zyb9F2b/ADENXscbH9On+X5V85zv9ZyptX1HUMUM1LcWeHQ10h67BYjIckBo3K20DRGxrByW0vEZDeSqrY+R+auVQREQEREBERARFQlAJVCVTJ6qjjhBXKtJ3VC5WE7oJwrgoWndStQVWvvt2obNb5a64VDIIIxlznH+iuvVzo7Tbpq+vmbBTwtLnPK+Y/aDxvPxjdnNdKYqKF32EPT5u9VelJvKtp0z/ab7UK2/VHulM99Fay7SGNOHSerj+y5F8YNO2VnwnY/Nc1xdDKKKRmkjbIcFDwJxWydv8PrnASt8rgT8XqunqvTHXl22V71PoZdHQELR+zS9s8eotFS7djjjP4SuovVFJG2SSF+uB4zkLyW/MqLPemXGAuBDsuHcKLddppEW6brj+lltfEUE4J06/K7u09V3VgqfHt8Z1Z2WlvLGcX8FioowHVcDNcQ6uHVq1HCd9ZSW+NlZDUQ76cvjIBI54SOp3KZiZjUPQacgTNYTs44/NY92Yf8Aw86PIcYpHNyOy1VHW3G5v/8AJ7TU1Duj3DS0fUrsuGuHLp/C2tr4WNmkOZW/EMqJvEJ+nb9PMPZrI5vFVdA46QcEf0WL7SmPieHnAMcgP5Fe2x8HyeJrEDIyeoAGFbXcJVc4IEUE2NvtOSjyjSZpZwNxf43D9PKNxpxlcr7OpQ29XGmJ5vBH1C9YfwveYmmF9HA+L8OrIXPy8Kmgr3VcNqZBM4Yc9pHmTyjUJ8J7efcXEx3OlzyEwz+a3HEjXOoGvb/7eFncTcPQ3TL3SSwStcHZaMgFStpTLRiGQgvj79VEz2VjUOU4dkkdboY8aRGXAjuScrYPCyjROp9Q8PAJ3wsaXP0WNmkL4eQHZXSAOO6sgIypxpI3zlZbWdH7KryLVxKaKZ2Ka4ARHJ+F/Np/MY+q9jftsvnGdzoiyRhw9py09jzBXu/CV2Ze+HaavB+0LdMw7PHNRuV4Z83ZRwSGGdsg6HKufnUoHE5Wte1Jb0xsNSX4+zkGoehWPXUUThpkjDh6lR0lS4UQIP8AhEfksmpq3Pw91Lnb7pSyInThL/YLQ+sc6WnjDz11H+652r4csMeS9gH8riV2fE07TOD7hO7Ld9OP7rlK7U8eSjq2H0I/uqTWJdNM9o620U1nsTSdIqAP5iAoxYrS5zZI7tVRY6CXYLIqDXsJ026eQdMkBYYutwikxPw5Uub+JsiwtR6ePk1tXwiWbFQ1mse58RyYGwa/S79ln0p4ko5myaaGtjB3LmFpP5FamK9UZ/zNrroT/wDHqH9VmUt2tMjgyOtMDjyD2lmP0VOm8xaI8Yjpg8b+JLRyuZGISzTLpHTfdefhstVKI4zkk7k9F6peKN1XTsfFUtqGSMdG8h+rTkbLgKaOCiZIx7gHtO57HsqXnX3PR+P+6Jw1bGnnbTUzGnDdI2A6lXWq6S/xdmCdWrBHZc/WVhlk2O2cNC2dmp3wEzPIDzufRRHUeUuy8R/2qQ9wtMzRSsfkElu5CmfUiWUBnLkF5taeL/Ce2mlDnQjAyOi7+zPbJGKjIc0jLcK9Zm3bzORWcP2Q30JaIGxN+I7lZBDdPnB09B3WNRt1OJ2B5k9lkSPAZqJ+S3xx5f7PJ5F/o18InuVs0mjfOXH4QsWpnZBGSTvz+qTyYaXuO65+51euQjn0V7zqGHG485LI62odPKSTtlWQgukaB9VGDlbC00zpZ2tA5nf5Lm7tL3o1Sn+HR2dnu1CZicF4LWpzdjPPmVj3SpIxDA3LYxpaO56rHrZzRUQBP2rxv6LtiK46bfOT5cnN0xeIqwSPEEZOlvPHdXcPXF1LUAuJLTs4LTTyB7tYJJ65SJ+NwuC15m230OPBFcfg7W+2ukuttlpZ2iSCdmHd/p6rwri/ga8cOB1VoNXbHE6KpjSS30eOh9V7fwjXiYe5TuG/wZXRUzI4ZvAnYH08/le0jIBWlsdc0b/LDjc/N8bkmK9x+nyITkB3QjOeijJBdqIGCMBfRvHfsbtVwfJWWV38OqneYsa37KQ+o6fNeJ8VcI3/AIclLLlb3sjOwnZ5oz9RuPqFx3w2p7fZcD5vjcyNROrfqXOjc88qxzcuJ1EKTQAAQDjurcHJ6j5rHT2azv0sZqGTqB6DIVS9xBaQCe6q4bbbEKu5GNPIZKn0v5KNccguaR2Kuc5pADeyq0gs0d1aWtYTgAd8KNo2rK77THIKjTsWu79eihf8WBzz+SAO+JrsYdsp0lI7OkYbsOSoRqAwcI3X8LtxzVCccwR2UelVwGkefl1VzMEnLQAeW6Akn4d/XqrQ0gk7AZSPaJnS5zdLs/or42kDUw5KrgO0ucOXLCupyInPIaCCOStpS99JQ9zo8nmRtt1XrP8Aw7cFG83pt/r4c0NG7I1DaSToPkFxPs84Zr+K79Bb6VjmxaszSEeWJnUlfXfDFmorFZqe12+IMhgYBsMZPUn5rp4uDznyn0+U/kPyv0Mc4Kf1W/8AUNm7KrG0k5KvY3KyKeHJy4bD9V6kvz2UlJFpGs8yskc1aFcOahVKzkrlbHs1XKoIiICIiAhRUJQUJVCUJUb3IBd6q1zla5yjc/HNBISrS7dQOf6qMyDPNBnRndTF4a0uc4AAZJJWFDJg7lcB7duLH2Ths26jfpq65pbkHdrPvH9vqprE2nSJnTzj218bScQ3R9soZibbSvxlvKV46nuF4txE6rpiKujeWyt3I6FZ1TfnUFRipY5rCdnc/wA1lxVlpu8J+2YCRzb/AGXVGtahj3M7aqw8YUVez3G5RtBOxY8439CtfxJwVUeKblw5N4uPN4erzj5d1Zf+CauV7qi26ZuuWHf8lq7dcOKbBL4ctLPJE3mC0qk7nqV4/s23DXHVRQTi23uF8bx5T4rSM/MFb7iqx0t8tTq22APJbl0QOTjuFor7eIOJrA+lqLYWVQwWSFuCzHqtHwff7hYLjHQ1Be+B7sNz0ykzqdT6IjrpvfZPSXSllqnvdoo2v0sJ56uuF6/ZeGP4pBG+5UzBTay9jCwaj6+iv4FsTK2OWukia2Bj86AMBzyMrt4QGYAxgdFS1utNKU/MlBbaOigbFTwNjY0AAALJZE3LnhxBHRWGbH3VE+sjiZI6Q6Q1pJPYBUazOmSWjqjAAMALRy8SU+rRT01TUYIDi1mwzyU0tVcqiJhpzHTDxCHl7c+ToeexUo22MrNuRIXG8bXKmoZ4GGRg2IcAckH1C2VdTsgpzWXO6ztggy+R5cAMBcpxDxBZaqxScQWmEVjAyRw2wXEE5HXG6bRtztHNJcbhLTUrJBFL5/Ec0gZ+qx7lTV9G5wmgJDfvMWJwve6u4VVFcDW0NNBVMD46OIankEdT0P0W/r7nU2+sIMInY74mnmqzMkQ5WS5GMHBz3BCx/e6SY4maI3HqF2k0NruDPtaHwy9uWuwuSvtnhiqv+UDgBvuq+1tQxjCQdULtTVc1xPosYU8rXa3SCNo9eaCsgL9Grcde6po6S1A1MXb+xi8+73Sosc7wI6pviQ5O2tu5H1GVxDnBzchY9PVy0Nwp6yH/ABIJBI35g5RMPo+QYWLJs7ZXWyujulqprhD8E8YePn1CpODglaUlFk1skb4zonnyvGCFtqWN0kBaAct2I9VzkZLJWOB5FbGZr3VhMcjmsmGoEFXntl+WuvpcKtzdDjjbktNM6XmIif8ApKyOIIKk1LmtuEjdgFop7VUHc3OfdV6WiWTJJUbn3d3/AGlRPqJWnJpSPoVh/wAIeQdV0n/NWC1SsPlutR+YVZheJZElZCBh9O4d8rGlFqnGZKdrs92A/spRRVgHlubz6OYCoJ6CsecPEEueunSf3WfhDSuTXpizso7dRVU1tgIke0ZZg4JBBBXB3B7GXSWaaHSyca9DumV3M9FWRB2lkoBBa4NdqBH6LnL7w/PWupohJ4b/ABPBa4jYavhz9cLPJhm0dPY4HyP+lyRM9tLDBQtmE8Tjk8muOwU1VNO1mGMcYsbuAzlZrLZbKlnukj3Wu5xeR8erLHEbZA7fVRvorxaw4vibUxN+/Hvj5hc98V6voeP8jxcszrqZRWOB0swqHD7Ichnmu9sF1kpJmtYS8vwAzouGp7h7zI1mpseeYxjC7z2dW6I3N9RUzskw0eAO56qImZnSufHFMVsn9UvS6KMMpo98lw1PPr2VJHA5ydgVFCJhH4RBAB3KxrlUCGJwHyG/VdsW66fGzS17bmO2Hd6staWNcCtGXZOSd1ZVTPfI46sqxrXOcAXLG9pl73HwxjrDMiBcM52XR0jhb7d7xIQ2aXyx5+6OpWotFMZTqcPsmbvPYLZSSBjvfasAYIEMfYdCVphrr7pcXOzT/wBqntO1/ucJqKnGo/A08x6laGuqX1Mxc45GdlHcLg+qmJcTjosYlw6rPLl856dPC4f0a7n2vy5wIDVdEcHBUbHOBzzVxcderThZPQ0z6aV0MrZWEgtOdl6PQVMd2tjahmNYGHgcwvMoTlq33CNz9xr9LyfCfs4LTHfxlx8zD9Wm49w9R4frY6ylNLUgGaEYyebm9Fdc7RT1ULo5I45Y3Ddj2gg/QrROMlLUR1cG+DnbqOy6eCrZPCyZm+ocuy7Y7fO3i1J3V43xp7H7VcXST2tz7bUnfS3eMn1B5fReNcU8E8Q8Ovc6uoXyQN5zwjU3Hrjl9V9jzlj2+Zq11bboKiPS8BzTzDhkFY5OLS3rp7XA/kHK4s6tPlH93xLgk7bjphWvB9RhfSXF3skslzL5qKN1BUOOdcXwn5jqvHOLvZ9xDw+6WWWD3qkB2mgGSP5h0XBk496vsuF/IOLyut+M/wB3Gv8A8TAPJC85G/Xqqvb1HPOM+ipjcE91zw92upja1/MnKrDsch2D2VCMgZ5t2QlvPOHdCpTMr3NLnh7iAVcxuofLYqzmTvj0UkZLc7beqnSlrahWdmlx3O3IhWg+QdQefor8OBz67kqxzSdmgE80Y+aRoe4ZBxhb/gzhu48SXaOioIS9xPnJ5MHUkrJ9nvBdz4puAipmFlODmWZww1g/cr6g4I4Xt3Dlujo6CEAgfayn4pD6row4Jydz6fPfLfN04cTSvd//ANLvZ5wpb+FbM2jpGB0r95pseZ5/suyhYABgblQ08bWgbLNhbvkjZenWsVjUPzzNmvmvN7zuZXxRg9duqyRgAAcgoxjoMK9WYzK4c1e1WBXNUShM3kqqjeSqqgiIgIiILVa87KpKje/KChco3ORzlC+TnhBUyDOFjyybq178ZKxpZVMQJHy781YJATzWK+U5UXiHOVbQ28MocOfJfMftrv8AJdeK6mojOuOD7ONvoF75f7l7jY6uoHxCMhvzOwXy1xPXCnrXumOQ45JxlaYo72pZoXXu21gNPcIYyTtiQD9CsSbhCiqXGpsl0dSScwwuJaT8wsqqpOHry3TLhkh5Pidg/ktYeEr3SOMljuwqB0jecH/dXnce1Y0Obx5ZX4dTGrjH3oyHZ/dSN4+vVK3FZbqlo66mEBRC98Z2Y6LhbZzjm4NOFk0ftBgmkEVyoWtY7Y62DH9FXf8AdOp/TY2XjazXN3gV9LFG52xJaAfzWNxnw9HTS0t5oD41GJW6yNzH8/RRcU8KW27Wt184fb4b2jVJCw5BH4mqL2ZXx8k01huR8QObpw7qOyj+0m9RuH0j7N3U9Rwd4LANUdRrce4c0Y/osip+xlILmgdASuD9l9/itFxqrFVSgaPsySeTebHfkcLf8ZUpuEXhMndDOw64Zmnkf3BWd4mI3EbdOGK3mItOo/bKrLtT08NVPO4sZTHEh7dlpuJuLIrLbqSrbRS1RrpmwRtGG+Z3LUTjAXESPudbeYrVcTP71JK10xzhj2NycgY5LouP7dUXbhWWkomB1VE6OWnGceZrgQufDnnNMzrUQ9DncSnGrWItuZ7/ANnSWWrussEr7rTU9JISPDZC/Vt6lcla7pc+IOA77b6ypf8AxCF89OZGeVwODp5LpaOaZ1FD47dMvhjW3scbrAstlho7rc6unlkLq9we+M/C0jsuh5zh6S8VPHtvtVhZJK2kp4GSXaTcai3lHn1PNY1vpprfXX+0GBzKL3t0lPhuGaH9B8sru6Sht9pgkhoKRlMHvLpA37x7la24Yfq2bgnO5UwidPMOGeH7pZIRBF7hCWSuLZxHqlLc5G5G2y7O+CSeSCZoJEkbSSO4GCk1TQR1HhmRr5ydmgrleNeKK+2kwNpjHpGWkjYjuFE1V8o26cV4o6Ye8ysw3doz0XN3nieJzyYhrdyGFgWe8W/ie2innfomA+IHdpVkllFJINQ1ZGzu6maxrpPlM+2umrayrfk6g3KyKCmGsPkOorJMIaOWwVYtnLKY0mJiWbgYwBssado1LIadlFO3Iyqwl6Z7FL341FUWCZw1QZmgydy08wF303wuGF888OXWSx8RUdzb8MMgMg7s6j8l9Duc2aNsjHBzJAHNcOoKlPtgykchzCz6OoYaVjncm7Z7LBnjIJKpbjrbLCTjLSQtIUsw77UUDKiQvqmjHdpyuaqrzamEtD5Zfk3H9V0NfDTys1SQte75LTyQ0zSdNE12PRJ0q1Tr9bt9NNUEfIKJ98tpP+Xqf+0LZOjxIWtoow3HooCXB5Bpov0USnylii8WxxG88fzjU8dyoXO+zuAb6HU1WyvwRmkZ+ijIppABLSD12yq6WiZbGKokePspI5R6OB/3WLeI53PGY9LpQCzA5Pact/UBYjqW3OeC1j4Xd2uLcLPooQxkh98fUBg1sa85LSOyjS25loeLrBFdrnTVcOlrqtg5jYuxyVjoPcKI1FFVSxTM8r6SYl+HDo3mQPkuonj8W3PNOQX00gmiwOmc4/ZQymhkqrhUxta5z42eCOZ1HorQtW0xLiaujreII2y09rZBK14D5iQC49h3+q6W1PZQVlPSNMzHQDGeYcTzXW2G3xU8LIdIxA3zH8TzzKyY7bBNVteYm4B3KyvGOZ7h215ealfGJb2lq5BZInSnU948uVy97qS5+gO2bz+azbpVlododhjRpYP3XL1cxkfzWM9Ozh45vbylI1wee6yWNxjGywIXtZhSST4zjkq1tG+3pZItrVfbp6S6UlJbhA9gc4O1ZxzPqtJcK+eqmL35x03WvE5f5Tv1Ugc7Tk7/ADVrZN9Qz4/GjHPlbuUjdxvzUurMelQxHI3UvMbLH06lzXOGFI0vdjorIDkHIU2saQpE0HMhZEeY5A7qCsSAkHKydWs7IPQeGq8VdCKZ5y9vLPZbi3zupKo07ziJ/InoV59Yat1JWRvJOAdx6L0GqjbU0zZmDyuAII6LrxX3Gngc7DGO24/LavkGcZVpkA3WBR1Jki0O/wARmx9VM6QYx1XREvNmvafxRjcBYFYyJ4cZA0MwSSdlK55AXEe2DiL+BcIVHhuAqaoGCHfGNQwT9BlVvPjWZb8fDbNlrjr7mXz3xtVUlZxTcJ6OJscL53FjWNwNOdjstG8Y/ZXkk5e4/NWncHfn1XhTO52/YcNIx460j8IsYGCAcqhY3VjnnrhXgEOwNyrtOrYAtUptKzSAcB2f2V7QVfHAXZ0D5rb2Dhm73ucQW6lklOrDnAeVvzVo79ObLmrSN2nUNVHl2A0E/Rei+zj2Z119cytuIfTUAOfMMPk9AOnzXdcBeyugtmmsu2Kuq20sx5Gf3K9Vo6ZsMYY1oAA2AXZi4s+7PkPk/wCQa3Tj/wDKDhyz0dot0dFQQNghYPhHM+p7lb+ijcRgBRU0e2Ss+AhuwXfWvjGofG3ta1ptadzLIiY0bnmp2kYwoGOUrSpZymar1E3lzV4KKrxyV8fNRgqaMbZUSJRyRAiqCIiAiIghcVFIQrnOwFBKfKUFsrttisaWQgKsjtt1iTSKdCk0h7rDllx1SaTnusGaXfmrCWWZReMe6x5JBkYUEkm/NBruP6h38DewcjzXzxfKY1c7g57QQTzXvPGbzJaZxnOAMfmvn/iIzx1TzG7zZ7LailnM3Xhet1OmpmgnnljlqW3LiK1ODfOdPR+QVupOIquhf9vASB95pwuql91vfDgq3xt8VoD2PxuQenqo1tXy/bj6P2i1sD2tq6Z+Opyt3xHbrXxVwu+70cLI6uNmsuYMeI3sfULTXy10xpHBsYLzsNt8rf2GmHD3CPuk78z1AIDD0LuY+itqfUom0R3DTexmuqY7hVWmodrYwAgehWFW0X8M9odMab4DUOZgdsrfcDUDbfPXXqUaAcBgPYcj9VJa6M3TiltbK0aISXud/qO6rFft0eX3bYvtFnr7VxfBdKAkZpYxKAeZBP8Asuu4F42mu9I4SjzQHzNz6ZWDcaaO+3B0cRZlw0t1HoNlz/szgNLxddre4ABpGQNxncK0xET0tS8a09Hj4jsdXVQSiZnjRkgYO++xCzpb7boXaZJgzsD1XhfFdDUWWvdWUxeBHOXFo7ZXVXunHEHDlNWwSFssLQctPxNP++FWKRG+u15y2trt6S++0T6Z8kchexgJJb0HVaY8dWxtTFDTTgyl3lz3XmPs+vU9svslorn645CdOvqOoT2icMGim9+tz3NY77SIgny+iVjraJt27fjHiy428B5hdI2UahKPhz2+a0PDvEtPxJBLR1U7oZjtkHBb6hWcCX6DiC1yWm54EgGHZ5g/iC5PjGxVdguprKPUxzDnbk4KZ37hEz+1OL7Xe7FcW1LZnTBu7Xt5OC6Hhu/W/ie1/wAOuAAkAwc82nuFm8J3qi4ptAoKwt8UDrza7+y4biyy1vD11dVUjXMdG7cN5EKJjryhHlvqUPE/D1fw1dDVUZJZ8Qc3k8d11HCXEkF4pfdqo6JG7Edc91m8MXei4ospo6nAmA682lcNxLZauxXT3ylDm6HZcByVffcJ3+JegVlN4TscweXyWA5ulyv4XvEV5tgEjgHt29QVJVRlry08ws7QvBEdlc4ZbuoY3YUrnjSs9NWDVN2IC9o9kd3F14UZSyP1T0B8I9yz7pXi1Q9dJ7Iry20cZQRzPDaat+wlydhnkfzTQ9tqht9FgU5LKgH81tqyHBIPRauqBicHBXqi8NZdKqpg8aGKJkml+wI3APJc3WVd9ftCwx5cSdDcLra8OdU+O3GZGAfULSVkwiaTPWMjx0BGVeZZNBNTcRS+Z80g+b8KEWy8kZdUgdvtFs6m6Wxjd6uaQ9gCsJ95tmfK2c/NRtKD3C8tdtVs/wC9BDfGDAdHLju7KvN4t5O8Uqp/Ere7kZmZ+aj2LXVNzjGJ7cHgcyw4WRRXe3xyD32lqYsjHw5ASGrpXOxHXuYf9R/us6ESzNxHJTVDezsOKiY6XiWbZonRVYbrDo5PIDnYg/CfzwsSgoportO8Rhzad2Rnlnor6yWelNP4kPhtGGyFo6Z2/JbFkkk17ko2tIZPIJHux90c1WZ1C1fbbxk01FEX/E/7QjrvyWWXCmt5fn7STkoHNNfWuLWHRtgdlBe6hjC6Np8sTSwfMcysbOqkTadQ1F5qC6Tw2nGFqsZPPJVtTK6WdznFWjA+9usJtt9Fgx/Trpe3G4IVXY0YCsjc0P0k9EEuTgDbO6q3XtblStd4bQCdyo2+UkLIp4HTSNA7oJqWGebaFhkc7YDoqyU9VTyeFVx+G8csHIK6GkibbaVrx/mZfLE3t6rTXmqE9c1gdqETQ0O7laWx+NYmfbkpyfqZvCsdQpEW4AxupNLVjMO6laccyVm62RG3PplXtAacDooo3YGQr9Wp2w3Q7ZtNLpOt3Rd/wZcG1lIacu5csrzmGTfTg+q3vDtYaarY4HAyr0v4y4+Vg+pV29TG6nm8RvfB+Sr45dyPNZs4bUUrZm7hwWrgicyYhxOAdl3Q+dmNSyASNyQPmvmz2y8SG/cVviikDqOjPhx4OxPUr1r2w8VDh7huSKF4FZWAxxf6R94/kvmxxklkxoc97jnYZK4uXkn+mH1/8b4URvk3/wAQpPnbBGR0VByxpOMLeWfhHiG6Fohtk/m++9ukD813Vk9kVbIGG6VzYR+CLDj+e65IxWt6h9Nm+U43Hj77w8uiidK7Zp5rf8O8J328yNFDQSaCceI8aWhe6cOez7h+04LKP3h4+/P5v05Lp2NpaZoY0Ma0cmMGB+QXRj4kz/VL5/l/yeIjWCv+8vN+FPZLR05bLeZfeH5z4LPg/Nem2q2UluphBS08UMY5NYMBW+95biJuPUqSFziQSTyXZjw1p6fK8vn5+TO8lmxpwwc9+yy4ZCBsMBYFOs2HktnFv9s6J3JZUeQsODkFmMUs5ZERUzCoYwpWKFbJmnAUgO6iCkbzRVI1TsUEfNZDdtlEi9ECKoIiICIiDCeVizPJKlldgLEmdgKYEM8hI5rBmk9VNUP6LX1Em6sI6iT1WFNJvzV079lhTPOURKr5d1E6TfmozJjmoy/fkphDBvgM1FVNHPwyR9F4RxGNNU8/6ive6ghznNPJwIK8Q4upzHcJGkYIecrSsot6cnJRQ1bh4w+zB39fRbiinD2+FHhlMwYG2xI7LVzP8WURt8kY2JWaJoYoGsBDWAb9Nlppmyoo4Gl1dVOaI4xluR+q18ZmvVyNQ5pZFyY3Pwt/uVjOllvEwYwOFO0+UYxqPc+i2VwnjtcAoqIh1RIMOd+Ed/mkIUu9SZpYrZRgGOLZ2Oru30WRVuFstbKON2amYEuI7dSo7TSR2+k99qM5wdLepJ/dYNxfIYZa2o/xpOnYdAFMyiZZnBEpNfWVcpPhxN0s+gz+4Wu4Ckc/jyul5GRocf8AuK2tFGaHhc5AEtRty6nc/pha32cx6+J6+fowNbn81SY9JrPtueKaGKrjna5uSSVh+zhmbZPb5yToLoxn9FtLxVQwiaSR2wJVlgdBFG6SnY1jnu1OdjmVe0RvaKzLh+OLHXRSi4UdNKXwuDg5jey7OyVkXEfCOnAdNGzWM+nMLoaKtlZUM0udpzhzSdiFx9lpBwvx3U2jXmlqPt6fP4TzCrM69L+47ef3iOo4ev0dfTAta1+/Yheny+BxNwxHVNAe9rN8DotXx5ZmTmeNrQQM6dui0nslu0lDXz2WoccMJ0g9R1URHjJE7jTm6tlVwxfW1tOCIS7DwvTJ/dOI7CyduHPEfPnlv+yxuMLFFUxSRBod+E9x0XNcBVk9ouctoqdQbnMWe3ZVtEx/gj7o1LR1lFU8MXkVtMT4LnYeB27rvJXUt6s8cpaH6m7nuFk3u20tbFIx8bS1w8u3Jc7YBLaKiSglyYgSYifwnmFOtek1nftoPc5uH7x7zBqFLIcSDt2K6+RzZ6ZswIJ6qO6RMlY6N4Ba4dViWwmFhp3kkDYE9lS0NKyvzhyPf5SrZCA7mo3HZZeMNEUhJcFE4lkgc1xa5pyCOilfthQvxqV4iEw+keD7oL7wrRXDXrmMQbN38QbO/XKkrI8tPovOPYRfGQ19RYqiUhlQPEhBO2ocwPmvU66IAkj4Sso/qWmNw5+4jVbmvycxuycdlytdazLIS+ZrWncEnOy7F7A5sjM+XG60NRC3UXYG2wytdsNNE20UYd9pM5w9Gqrbdb2EgQyP9S7C2rm45tVNI6AfRQRDWmhohypRn1cojQ0znb0e38y24gkduI//AOpV7aSV+cRk/wDSVG1tS0ht1A7/ANCZnyOVFLbIGuBgnmjPqF0LqSUEAsP5J7pJ1Z+ajZqWotYnErqaomE0EjSASd2nouhtU7xTRscwGYN0auuFix0bHPzjzf6d1t6KiZG1rp3aW45feKpb01pXtsLe8U1HJKSHOxhv+py57iCUsd4RcM77j1W/nLI4Pe5xojaPs4+3quFrqh09Q55O3QLmvOnr/H4fK3l+IRgkHc5yrjuQeSiyS4KQu6bLB7ukzAxxB6q90eMY75WOMgZGVkQOe86Q3PdTBrrbJihMpHpzXV8O2pkdObhWYbEwZaO6j4YsjpAKmoaWwjofvLacRXGOmpgXY0s/wo/xEcvot6ViO5ebyeRa0/Sx+5aK6VL2PfVTu/5iYEMbj/Daufb5nE5yeZKuqqyWrlM0riS45wqQAZIVMl/Kdunj8eMNNflkMeCzLdypYHBzsFYzGhjiB1UkIOScY3VHRDMfs0aRsr2ggZ5FQs1d9lJkhu5RCaI+bnkrKpnOa/OVr2vGeaz2ZDQQAcoS9L4NrBUW/wB3ecuasm4wuBLm7YXGcI3A01wYwu2dzXotSxs0Yc3k4Lsw28ofOc3FOPJ/l5zxJwjaL/cI625wPmkjbpaNXlA+SybXwxZ6E/8AK26CPbnpyVsb9PPby0RtbofnzEZOVoZa2pl+OZ+D0BwtJxxP4Vryc3hFfLpvc0lMdL5WAdmhRSXGNrtMEeeznLSNU0QOVMV0rPfctiayeU+Z5A7N2CrEcuwoIWOxuFmwQkjOFbUQpKSLqs6AEkfJR08H+lbGmgPZGVpXUzTss+JhPJUp4fLyWZDEp0pMqQsIwFmRhWxMx81kxsAUKyuaFI0KjW7qRo9EUmVQ1SAbq1Xt5ohJEFOOagYp2qsi5ERQCIiAiIg1EzsuKwqh+crKmPNYNQcBWgYlQ/Za6d/MrKqXEha6oJUjHmdkc1hynfmpZSd8rGldnZFVjnZKplWuOFZqciVs/wAa8w9pVDouJlbylbqXpk+ea5fjygdVWkzRgGSE6vp1V6ExuHjLow1znOxhvTusCZzq6paxozGNzj73+y29yhOTpGy1bi2micGN857raWTIdVmhjENMwOnds309Sp7LRsjc6trZNbidTnO6nusCjh1OdNIS4u555n/ZbCPXVnRkeC07/wCo/wBkiESyXSuuEwmOWQM/wmd/UqF0BrrhHT5JaDqesmeRsFOdOOWMBVtLnUsT58Zlfy/sp0ol4glaWmNuzIG6dvxHn+yxvZ1EWU1fWctch39AMfuse/SeDb3HOTjJ9SVsuGmim4fZC0YL8F313/skx2mPTRcdTO9xm0Egn9lncJVIqrdCWnzCMZ9U4jpBNb3kj4gcBajhKaemsFY+nDfeYWODA4bEjfdRPUprG4dw6UOcyOFp1nkfVaD2iPe2bh++tAa6mqRSzjrpdsuHvt14grYs1VU4N56YhpC3No13b2aVFG9xkmiYXAnc6mHUP6KvlHpbx1272vY2spIn8z4ekleb32gktN/gucQIaHgPx1BXcWirc+zx55YBWBe2R1dM6J7QcjCt7hWNxZuRKyooY5HEEgYJ/oubvtvjmlZVQeWeJ2ppHX0U1HVSR25tO8HLQAfpsrJJiRhJ/RrvbIbWF9M0OxqAWsrdMsgcc6gdir3OIGyge7KrLSI0TOLmNBOcKA4zlXEOdyaVY6OT8DvyVJmGkQse5RFxVX6gSXNOysJys1o2o5+6ic7fkqvOCozvuAizLs9dLbrrS18LtL4JA8Y9CvqSKWG42yKtpiHRTxiSM+hGV8pxxSSDyMcfQBe++w2tqKnhQ22qa4PpHlserqw7j8s4VL6/C3bbTwltRg7Aha6qoPtHPllaxnQDmt/fITG4HC0sMbZJSH+bsCrx6UmNMIspIT5Y3zFU8SXJEVLGz5qeoc6J5boYz+ZYkkz+Wt59G7BExVKBWO38VrPTSqhtUD/mf0WE7UTksDv5nlXsbnnBCqrxGmWG1oILZmu+bVLmrHxMjd8wsWNrSdoWD5HCz4gzT5nSMPdrtSrtaFkJqjkBkTAewWTE0Q/aykOPqpoaWZ4+wnil25Hyu/sopYJYy4TsLMb7nmqTMLaaTiysc2JsIOC45Ley5bUSST1Wbd5zPcJDnLQcBYeFx3ndn0vDx+GONrseYK86W74VjCBzV5brOeuFV1W9poGeIQ0dV1PDFk8V/vE+0LT/ANx7LX8MWd9W7xZssgb8Thzx2HzXazzU9FReI7SyGJvlb+y2x0ie5efy+VMf9OnuV1zr4LfQmSQhsYGGtGxd6LgLtXy19W6eQ4B2a3oAr71cpLlUmV5Ijb8DegWtJOVFrb9L8TiRijyt7XZ3wp4H6XgkDCxjkvBA2UoOMLN3a2l1h0x3U7HkYaeSxY9iXdVk0kctTM1jGE5UomEjXFuXOOGqSN7XsDtWSV3fD3DEVvpBW3JgfM5uWRO+4PX1XE1roJLjUOjYGMMh0ho2G6vanjG3Pi5Fcl5rX1CjGFztuSyWvdkNzssaLDHZCvDtRJyqNm0o5vDnY9p3BXrHDtU2stbXZy4BeP0vw56r0HgSscYjTuPLktsE6l53yWLdPL9NtxBQiqtr2gZf8TVwxpnA4OxXqs0YNK0hcnWW9vvb3Nwd9xjku14MXc9HTEnqsyCk3HNbeOhP4VmwUBwPKi31WqhpBnqthBSeQc1soaPB+FZsdKMDyhGdrtdT0g9VnxU4aFlx04b0U7Yz2RSbbQwwjSsmOMAZUjWYx5VK1oxyRXaNrN1I1vqrtPor2tREgZhXAY2VcbIAiAK9oVAFeOaCSNSN5qOPkpQqz7FURFAIiICIiDRz53WBUHmthPyK18/ZWr6GtqT0WuqSd1sqgbLXVA5qUMCYnBWK9ZUw2KxXjZEIXE7qgVzh1VqCyYZasCoDZInRvGWuBaR6LYv5LAnBaSVMS0h5FxNbnUFfLTPB55Ye4XMVVOC/Ud17HxZaRdaF3hge8R7xk9fReWVcL4pHRytLXA4IK6KzEwxvXTTTOeDpacN64WRT1PhN6AKSaAEZAWNLC7ThSzTNldPP4h3Y3YDuVlx1LQ9o5ho5+q1jWvZHhvRUBcNlOzS+7ze8zR04xgnJ+QW9pphBSNaOo/Jc7A0Gp1ynAAwDhZkkpLiAfL0TYyq6XxIXAHGfVanhbVHVVUBOz3Z/NZBLiOaggY6KsfKNg4Y2VbdkQluNuZIx4DQTk7LH4Iilo66qpJWOEZcHjIwCORWzlq3yNDWtazHMjqotb8k58x2yqzG/a2+tJmPdSh9M3Ia1xA+XRRPkc7mVTDnHYEnqsuktlVUkaIyAepU71C0UmWC52/NW6XPPlaSfRdZbeGKcvLq2pxjcgDmtpHT2+kYW01OCR95yynI0jHLjaSzVtQ0OMTg312WT/BGx/HINXYbroZpnEYzj5LAmOCs/OZaxSGq9yxsA1VFEcfGB9FmkqmVWbSt4sB9s18/Dd8xhWt4fhed2D5hy2rN1lQtwMc1G1tNRBwvRnBeCT/Ms+Lhu1txmEHHTJWxiaQFMxExXSKmt9DA3EdMxvyC6Pg6sjoLtFsGRy+R60zVJGS0gjmDkKsxtZ6heqYSRk43C52nhDakDkcrprVVsuvD8VS05k06X7feGxWhlGipBI+8pxzMxpneO2jvjXR1sgPP1WvGOa3nF8WKsSN++MrQnZXRC4qrThR6ldrAHNQvEshh2UzScbZWC2UA88qdsx5hRomGwZIQ4EHOFHd6tzaGQ6jnTgZKxWzyfdP6LBvtTilZE8jU45Wd41WXRxqeeSIc8xj93vPM5UmFdqy3nlWNOW5XE+niFQ3K3PDtqfW1IBy1o3cT0C1cDQXNJOASvQbDTs/geqEecu+0I6jor443bUufl5ZxY5mE0IiijZTU+0TeXr3JXKcXXJ09V7qw/Zx/F6ldcIHsLj3YcfNeb1hc6rlc8eYuOV0Z+q6h5/wAfWMmSbXGO1YABDVcQrInhrdJ2UmQVzPYmO1RjCqNiMq0Ndz6K/Y4CJnpKG7jT1Xo/s44fAJuNXH9lGfsgfvHv8gua4Nsct3uMMbWlkQw6ST8Lf7r1updT0NG2JuIoIWY+QXRix7+6XlfIcrx/6dPcuX9od390oTHG7Es48noOpXmbXYdsCRnmthxddJLrepZd/BZ5Yh2AWuY4CPHVZ5LeVnVxOP8ATxx+04dqGyuiBa7JOygbJtnCuc4mPOVnPTs8Wwp3DVjOy6nhCrEVxYcgA7HdcZTOOkd1trZOYqlj89QprOmWfH50mHuIw+kbjkQtZLC335oc0faA/mFl8OzCotsZB1eVLlEQ0SjnG4PH0Xo19PkLR4zMKtpG9G4WRFTgAZCzYWMfG14+8MqQMAGwUsmI2EdApWRLJA9FUBFULY8HmpGtV4G6vDdkFoCvDdlXCIKYCuCoqhBVVbzVFVqC5VbzVFVvNBKzkpQomclKFSQREQEREBERBpZxsVgTDzFbSdqwKhm6vHoaqpCwJ27La1DNlgzM2QamZvNYkjNls5GZJWNIzoiGA5qsLVkvjx0VhZtyQY0g8qw6kZ2K2L25GMLBqRjop2tDWv8ALsVzvE3D0NzYZ4dMdSBz6O+a6WduoYWIdTHYO6mJ0mYiXkNzt1XQSllRE5vrjZYfzGV7LURQVMZjqIWSNPQjkueruELbO4vhc+AnschaRkj8s5xfp5y5oxyVpjafuj8l2lRwRLn7GtYf5gsc8F1uf8eP81ackKzjlyXht/CqeG3suvZwXVF2HVUYWVDwXE1p8WsJPo1R5wfTs4YNadgrmxvd5WMJXodPwxbIQA4PkPqVsIqCipx9lTxjHXGVWckQ0jF+3nFLZq+pGGQOaO5GFuqPhR2kGpkwewXXuc1u3L0Ub355BZ2yTK1ccQ1dLZaGmDdMYc4dXDdZRjjYPKAFI8lQPd3WbaIiOlkjvMcBYkpWQ87LFeeZRO0Eg8qw5AS5Zsm4woXMJGEEEkOG5OxUYjzyysktwPMVZqaDtuqhFHg5KyogB81CwyF20ZIWXCyTq0BCJXMBPQqaOJ5PwlUBkG2QFKJZgCGvwifJcyCU/cKmFM8DL3NYO5cFiOdKfikcfqonA9ST9UPLbvvZvVxtqKi3Goa/W3WxoPpus67Q+FWkct157Y6t1uutPWM2Mb8n1HUL1C/NZNDDWwnMcrQ4H0KrH22R7aDitjv4fBOGZw3BK5IzuP3Ghdzd4XT8OnAzoJXDeFg7lbV7Qj1SuO+APRVMZI5qZsYwMKVkZypmEwiZFgYwsqKPHRXtjPMLKjaNICjSVI2DGQFzXFjs1jGYA0tXXxNHLGy4niR7ZbpISThpxsufkeno/G03l2wI3eRXZ8mBzVmAd28lcxce3v6ZDMBoDl03Bl593nFNI/MbuWVywOearGTG8PY4gg5Uxbxnat6RkpNZezeCx7NUYBBGQvMOK6J1BdZAW+R7tTPl2XbcB3mOspBTyO+1Z0PUKfjqyNrreZo2/as3GOq6usldvGwWni5vG3qXloLXHIbjuFe0AkDOFHK2Wnm0PZgdVV3NpGea5ntRG4ZThhuy2Fjts1bUNjjZlznDG2Vi2+jkqpWsaC4EjkOa9g4KsUVpoxVTN1SuGQCNwtceObS5eXyow0/u2fD1qgsVrZBHh0rhl225K4j2i8QmSV1tpZBpB+1cOp7Le8ccRm2wGFjh71MMD/SF5TK8vne+RxJcc5WmW8RHjDg4PHnLact1SfEOScoRjOFGDjOOSowl2clcz2qwqH5+iyGDVH6rFjH2hCyYzjkoleZ6T07XDGVsYBghYMLgQMrNjdsFKkzL1v2dVPiW9sZO4XTVMQdlpGQV597Mqj7dzcr0h4yMrvwzur5Tm08M0oLQ5xp/CfnVE7Sf2WcAtfRZir5Iydnt1D5hbELRwyYRERCoUg5KNXNJQXIiICqFRVCCqq1UVwCCquAVAFc0KJFzFKFY0K8KoqiIgIiICIiDXSt2WJM1Z7xssaVuUGsqGbrBni9FtpWZWLKxXgaaWLdY0kS20kW57LFliKDVyRKJ0a2T4vRRuhPZDTWOiWHUxei3L4duSx5YfRBzs8WDyWJK3B3Gy3lVAd8Ba+WnJBRaJaqWLPwqAh7Oa2EjC07grHm+SLMTxO6tdJ6qsw9Fiy6kEr5CDsrDI5YjpZGkgDP0VjqmX/2ifopSyy/fJKse8LDdUSn/ANB/0CtMtSdhSOUaIlkveFG6QDZWxx1Lh5oCDnupW0kp38Mfmo0tuGNJJkc1A54z1K2Zt7j1AUzLY0gahnZT4o8mjJJ5AqExyvOGRud8gunbbo27CP8AMKUUpHT9E0bcqLdVyAENDM/iKkbZzp+0mJPoF05pgrfdwFGk+Tnm2mnbzjLvmr20jG/Cxrfkt46BROp9lHib20T4Swk6Ua09ltZIMjdYroXA4wqpY7YwVXwuynbGAd9lK2MKESwzF81b4J7LYiHKuECmEw1vg52wu/4VqTXcMuo5DmSldgfyncfuuS8D0W34TqPc7u1hOI5m6H/spmsT2RZ0NCPEp5YT1acBcTWQmKqkY4YwV20gNNVvGMAH81zV+ja+qMsbQAeeFOMajThSNVwCYWkphJGcNU8fRY7OSmacdVVLJ1aWkjlhcBcniSqkd1Liu0qpfDpJXE7Bq4OV4cT3XLyZ9PY+Lju0qOc4AAcldGTqJKo0gxjfKqDscLk09dLqB2Ctxtn1UYOHgKQux8lOlos2FgrpLfc452uIbnBXs1mq4bjQhwcHBw/+wvDMt5grtPZ7eRTztppX+Vx2yeq1w5PG2nBz+P8AVp5R7hmcY8LTmd1TRQGQHctbzXMUVhu01S2Ntuqck8yAAP1XtLiHASjk5WZ0Au2wOa6bYaz283Hz8uOvjppuD+G47TGKisLXzYyAOTfRbLiW+xWyhM8rgZDtGwc1Zc7rBQUj6qYgMA8oPVeVX66z3audUSu25Nb0AVb2ikeMGDDflZPO/pbc7hNcKySqqHlz3H8vRYbnF3NROJAV7RloXLPcverWKxqFwc0c1IMDdvJQSRnTkFXxyYjwQoW/wkIbqyOavDi3pnZRs8x26qV0Tsbosvic8gELYQuyxpKw6byt33WUw5xgIrMuz4Bk8O6RjOx5hewN3ia7uF4lwjKGXaHfC9spnaqRhznZdmCftfO/K11kiWLMRHWwSdC/Sfqs8c1g1wMjTp2LBqWYw6mB3cLd5M+l+UVAqoqK9isV8fwoLkREBVCoqhBUc1eqNVUFQpGqMKRqiRe1XhWNV4VQREQEREBERBjPb6KF7fRZTm9lE5qDDljCxpI/RbBzAdiFFJFsm5gamSLcrHfEttJH2CgfGrjVviGOSidEto+I4UZiPZBqXxbKB8K3T4dvhUL4OuEGimpsgnCwZaUfhwulkgzyCxZaUn7qDmKika4HZa6WjIcdl1k1J2CxX0JcdxhExLlJaPJzhQPosnkusdQAfdVhoW5+FTEJ25L+HjPwZ+ip/D/9K6s0W/Iqw0fLYqdJ25oW/wD0q5tAPwro/cxjkU90A6FTo6aEUTcfCrm0Q/Ct57sPwlVFN6FTERCemlFGPwq73XsFufAb2KtMI7FSNR7s7sqGnI6LbmDfkrXQeibGnfBtuFYYBjktu6DPQqN0A7KNETDTvh9FE+HbYLcOhHZQSQKNJaZ8OeihdT7rcuh22CifBsqWqblpZYMHOEZGeoWzfDvuMqJ8JB2VJrpPkhZGMKQReikjZjmFlRMBaMhI6JYQg25KgiLJQ8bEbrZiIEfCrTBvurR3CIluahzaqlhqm9WgO9D1Wlr4RqORsVtbO7MMtI7ljU359Vp+JfGjgEkRILeYCpuKtcdPO2mA+lwctUMkZHRYVLfSXaZmcjuVsoK6jqBtI0HsSlctZb342SnuGOGlXZ6LKfHE4Za4fRWupgfvYWm4Y+M701N+l0WuTGxJAH5rkSGg50rqOJ2H3RseoDDwfnhcy8DGQuPkd2e98dX/AKfaxoAbsrA4l2OSua4EfJWjAJKwegvyC4N/VXOOG91FyGVUSHqhErmvBOOoWVQzPhqGyMOC05CwcgO1Ac1kMdlmQN1SYWe0cG3Vlfb2xvd5+XPkQs6tqY4I5Hzv0xx7uPdeVcM3l9slEm5b1AWZxLxFLdI/ChcWRdRnmuumXVHjZfj7Tm69I+Kb5JdavAdiFhwxo5LTuOkKGJmHbnf1UkqwtabTuXqYsdcdYrCmonmrtZaMEqInfZXhocdzyUNtJBJkc1cASOWyjazkVl0zTNKImj5orM69J7dRTVMgbE0ucTgBZd6tVztc8Da1rWxyAlpB5ctivQfZ1YWRQm41AGho8mevquP9od4/iF9c2MjwofI0DkMLaaRFNz7cNeRbLn8K+o9tNA4aVkwu6d1iCRoaN1PTPBOVi7NS6Lh46bjA7uQF7hbHaqJnyC8I4fcf4jFknAcF7lanf+Xtx2C6sHp4Xy0amExZ4hl7aSFdQHNJHvnDQFIxmmL1KxbVtFIwnlIQF0vHn0zQqqgVUUFezsrFexBciIgK4KgV7UFVUKgVwQApQo1IFEi9qqqNVVUEREBERAREQWEK1zdlIQqEIIHNVj27LILVY5uEGIWbqN0fXCzC0dla5nZBhGMHorTEM8lllnorfD9FMSMQwg9FG+DotgGY6Kjo8nkrDVOhwdgo5Ic8wtrJF1A3UZiyN2oNNLSgjYKB9Ng4IW8dEMbBQPgycYQaR9MOyjdTBbp8BA5KIwjspiRpnUwUbqYLcmH0UboemFPkNQ6nx0Vhh9FtnQjO4VjoR2Vt7Gr8H0VfC9FsDD6K3wx2VuhrjCOysMPotiY29lY6MdkGuMPorHQrYujCjdGOydDXOiKjdHvyWwdGFY6JQNbLHvyULoVs3xeijfEpNtU+HHRQviyOS2roc9FE6LoomExLVOgUToCei2b4fRRmP0VJhZrHQlpzhTQs3GVlvj23CtMWCCAqaSvbHtsrjCrouiymxghI9DBia6KZsjc5aVW7wNlhdgZa8ZWW+LA2VwZ4kLozzbuPkq3jbTHPe3kt6o5KaqeOQytYC9p1B5BXb8ZW8iMztaTjYrh/hJaei4b18Z0+n42SMlIlk09yqon4Eztuiz4uIKgACQB2FonHdUzhItML5MGO3uGfeLn7yQSMYWvLwBsMqyQgnIVhOFEzM+2mPHXHXVVXPGdhhHbqg55R5wPVQsvAy3CsOyCTHVWvc3VzRMKgnVjmpm5DSOWVEwgHkry4u5omZ2yYZAxuCcqSOVoyFr3Eg7FVje4DdFtNh4wzuD6FXSvyBgrFZI0tGdyskFrmBwCKzGlWEYUrCDnCg3wCFNARy/NEbTxHDgF0vCNqNdcmNa0kE+bbotDR04mnawAnJ2XsHCduhtNsY9zAJ3jLvRa4qeUuPm5vp01HuV3GdzisXDvu8OznN8NgHQrxqoeXyGQ75O63ntBvMlzu7oWOPgwnSB69StCHeUauajJfyt/g4OD6VN/mUrDnHyWVRjOfRY4dnACyKcEOyqS7JmW9se1xiHche5WTehjH+kLw6wEmujzzyF7lYwfco9vurp47wvlvcNg/YALCt+09Qzs7KzTzCwqQ4uNSO4C6XjSzQqqg5qqKCvbzVivaCguREQXAK4BUA2VwQVCqAqAK4IClao8FSBVkXAKqDkigEREBERAREQEwiILSFQq8qmEFmkdlYWqUhMIIS0qmk9ipsIgh0nsU0nsVMiCAtUbmBZLm5VhaVbe4GMWK10QWSW+itIUjDdF3CgkjweWy2Bb6KF7N+SDAMbVYYd1nPYCOSjdGOiDXviOeSjfGtg5ihezJUwMJzB2UZjWY5mysLFeJGGY1G6NZhYrHRk8lO0bYRYVa6M9llmMg7qjmoMF0QVrovKstzFTQoGA+L0UXhLYujUZiUwlrTGcqN8eeYWydFnoonxY6INa6PbkoXR78lsnxeiidFz2SUxLXujyo3Mws57PRQPYeSrMbW2xdwcrIhkBUUgwoTJocs5hPtsgAVZsyQHCxYqod1eahhU+1oRXilbNA5pblsg29F5VxBQmkrSCMDK9aZMxxMLjgO5HsVy/FdsE8bjp+0aubLR6XAz/TtqfUvOJNIG3NR4LnLKrYfDkILTssUuOrbbC5XvxKwjfCoCAd9wrju4lNi07bhEoXv3xhULzj1VT3KtOEFpKo86sYG6uwMElRPdp5ItCcHAUudvVYjJTjKna/XvtkKITMdpPDccE8lQnBIHJX+KSzBUR+LI+qkidpYSD5cLJhkaxuCeaw2bZPM9MK4aiQCNPXdFbTDPY44xjZSxMe5+Gc1iwOPIYXUcM2t1VUskkaRDnfbc/JWrWZUvkrSNy6TgOzsyK2paC1o8o7lbzjO8tobaWtcBLM3SwZ5DuqzVtPQURcSI4YhuB19F5jf7tLdLi+eTOgHDG55BdFpikaj28rFjtyc3nPqGOxxdI58nPO26o4hztJCi8TyasK5k2G5OCT1XLMvZivinhIad1sKZ4c1acyE7ZWwon+UDqo2taOtun4VjMl0i64cvdrY3RQsHoF4v7P4fEuzc8ua9rpW6aVjeey7MEfa+c+Utu8QmG/5LBpv/3Sf+QLMHIrEpRm5zns0LoeRLNHNVQBEVVAyVIrWjqrkBVHJMKoCC9g8quAVoCvCArmjqqAK4DbCgVABVwVoGFe0KoqOSIiAiIgIiICIiAiIgIiICYREFCNlTHorkQW49Ex6K5EFuFaW7qRMIInNVoaCpSFTGEELm7qNzVkFqjc0/RWiRA5o7KJ0ZysohWkKRgvZhyjdH2Wc5gO6hkZhBhuZ3Cs8MLLLe4UbmdkGKY1C9gWYWkHdWFoyphDDLcDCsI9FmPbjoo3NHZXiYQxSw59FaWDssojZWlqDFMajMayy3dU0ZRLDMe+yjfGVnOi7FWFhHNSMHwhjcKGSEjktg6MhWOjd2RLVSxZHJYskfQhbiSIrGmiz0Um9NLO04OVrqnO6308GVraunIyFWY2vWWifUGJ3orvfQeoVtfTO3WlqJXwuIIyqTGmsN06sG/mCzYJ47nTujBAqWDOPxNXHuqzjbGVC25TUs7Jon4ew5Czt21jpdxRbwwGWIH1AXKvbv2K9LmdT3W2tr4R5XDErBuWO7LibzQGKUuYNlyZMep6e5w+RFo8bNM5mPkrWjGThT4ycFRk/d7rJ3/ljYLsjsVdo2VzwY5tOAQequyNeAiPLfSCQbKLSHZBaVM7cqu2ndFomYYwGBjCuyQAR1R5aCQqajgNB2Rf2yWHLOSvjYS4bbKEEhnPdT007WgBwRTbIija2THL1Xe2i3UdzshjliY6SMagcDOFwbTk5HVdpwVV+FI0OPl5Eei0xzEW7c3KiZx9JKew21kgd4IPoQt7TvigjDWBrQ0c+wUNezwKpzR8J3afRctxLeGuBoqZ+P8A3CD17LqtatXnUpfLOtreLL/73P7pTk+Az1+I91oHyE7qLRh5JdkncoHZaO64bW3Pb2cNIpXUBmcDpycLIBBZgLHwMcldBnVvyVG3tkMGN8rY0bTs5Y0MYcthSxu1NaOR2VohS0xp6T7MKUOmE4GfovV2YDGj0XDezaj8Oga4jB5rtwd16GKNUfJ8+8XzTMLmnIPzWPRj/nal3yCmacMHdQ23czv/ABSH9Fo4/wAMxXMGSrVKOSKCIiCoVwVArgguCuCoFfpQVHJXAKgGyuCrMhhXIEUAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgKhCqiC0hUI2V6oRsgiLVYWqfCtIygxy3ZWPaOyyHNVjgrbGM5meShc1ZhbsrHMBUjDe3IUTmYWa6NROYVIxCFa5gPRZLmZUZaQoRpjuao3NCysKxzVKGNp9CqY9FOW7q0tUxKUWPRWkZ2UulCFbaEGjZWlinwqOClLFdHg7hQyRZ6LOLdlGWKYk21ksA7LBqabPRb50WRuseWH6ppLkq2icc4auculudgnSvRJ6cEclq6+ga8HZRMbXi7ymqgfE8gtwtfVNJyR0XeXm2astLPrhcrW0L4pHAtOFlauvTqrbbXWC8SWa4Ze0vpJvJUR9x3HqOa6O9UkelssZ8WmmGqN7eRC5itpMjkVseEroynBstzc73OV/2MjuULj69GrKe2+O017hqa2lMUhIG3QrCcwF2eRC628299LO6CYbdCuYrYHRykAHHdct6eMvZ4uaLxqWHIcn1Vjmn4gr3R43CtI8h3WbrR49FQ8uSvCo7BQY74yQSoh5XgYyslx57qIbEEotEr2uB5hSMwFE0HKq84OOiEztlxSY+S3fD9aIZ8OdjPJc81zAcAKZpONbHYx0TelZpFo1LseIeIJJIGwwvGdOC7PJcrq1EuOXOPVY3il2cu+eVeyXDdIGwVpvNvalMVadQkIJ5qukjqoHvcHAgnCv8TLcZVW0VTN5qcAOYMDBWNCfK5Txk6UhHbNosnGei39gp/eK2NoGTlaCma5rM916J7OLS6WpbM4bDfdWpXdmHIyfTxzL0/hqA09AxmOQW2B8zR3OFiwDw2NYDssiMEyudq2AwF6ERqNPkrz5WmU0pDWE5xgKG0DFDG4835d+ajuUmmkeBzcNI+ZWXTR+HCyMcmtAUqT6TKQclazmVciigOVdhUAwrggq0bq8BUCuQVV4VrRnmrwoFQrhyVBjKuVQREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQFTCqiCxw2VrhspCFQj0QQluysI9FORtyVjh6K2xCQrHMz0U+lWuapGG9hzyVhHostzVE9oQYrmdlY4dwsktVhagxiFa4KdzOytLMBEaQaVQtwpsK3CkQEbqhBUxZ1Vrm7qYlCIhWkKbSFbhW2IyFG5nop8eiEKUsOSEHosWam1LaFqsLAoTEuarbeHAg4x8lzd2s+pjiBlegywg8wsGpomuBwNuyLRaYeRV1vfE4gt2C09dbmyMJb09F6tdLO14cWtxsuUr7YYHny7Hms7U/MOjHk3DVWCrNzpRZri4e9xDFLI774/CfVa65UL4pXQSAh2eoWwrba2Ya4/LI05BGxB7hbGJ38YpvCqQG3KAfERjxh3+aytETDrpkmJ28/micHPYQQQsSVrtOQF21ztwMLpNGCDvsubqaYsYdLCQsLYnq4OXFvtn21SsKyJIC0KF7CsdO2JWYCtLMkKVsRc3KoWOGyhKJwLBuo8kn0U7s5wQo3RjoiYnSmCBsVXW5rcZ3RjvuuVjvRJNr4tySear4vmwArWghuoKow7HcqPS0JGOLnAE4V7d847qzADgT0KkjGDy2ymk9JYdY2Kzo25AWMxucHCz6eEyOY0ZypVtLa2WmNRIyMDO69o4OoRSUrPL0XE8C2TGmVzc/NemUgZGwMB5Lrw45iNy8L5Hk+U+EM4O8uRz6BZUQ0sDeeOZWDANcmro3l6lZge1oOTjqV0PHQy/a1sEPRrtbvotm3lha62jxJJagj4jhvyWxajOUjFcrWq5EKgK9qtCvCAFe1WgK9o3QXq5qtCuHJVkVAVURQCIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIURBQjZWkK9MIIyFYRupiFaRukCF4UbmrJIUbmhWGM9hUb4zzCy3Nz0Ubh6KRiFhVjmkrLLDvso3sPZBilhzyVmFkkeisc0noggIVpbkqZzT2Vun0RCItwrHBTlvorXAnorRIhwU0uUpZsmCp2hCWkKgblTEFUA9FIgfGVE6NZhCscwFSlrpqdruYWluVqbIDhucrqDGopIM7YRaLaea3C0vidqYFr5aZryCRolb1Gy9LraBsjd2hc/cLRuXMbghZzTbamVzop/f4HwnAqMbj8fy9Vy9xtk0bnHQWkHGF3Hu2iTz5a/Ozuykq6MV7TraPeBsHdH/7rKY03pm7eTVdI4k7BpPQ8lrZoCDpwQ71Gy9BudoIc5roy1w2OQtHV20/CW5CyvjiXpYeZavU9uTOWEgq07raVNtqYs6gHtycLBdHpJDwQexC55pMS9LHnrePbH3zjsrXBTBp1ZVmDnlsqtkTWg5yrTCdJweaypIhzCjcDkhBE0Dw9KpEC126mazqeap97GFEwna7AJWQ3oOiiYwucBhZ9LT5dyUxG/R+NyRxF7gByXY8J2Z00jZXMy1Y/D1mfM8Pkjw31Xodrpo4I2NaMYW+PF328zl8vxjxq2dshbTxtawAdFtqfJPlOT/Ra+A48uMk9FsKdoYARzPNdjw7zuWwh8jA0dFSpcXFsLfikOPkFb4gZHqcdgFLbIXFxqpG4c4YYOwRi2ELRGwNaMADClbuVZGN1K0IzSKoVBurmhBc1XAKjQrgEFWq8BWt5qRQAV45K1quVQREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBMIiC0jdUIV6IIy1WFqmIVpCmJEBarCFkFuyjc1W2IHMCiLd1klqsczHRBiuaqaQsktB6K1zAgxnBqswsgxhWEdkEJCtwp9PorS1FUJaqaQpseitLT0CkR47Kmn1UuFQgpuRHpPdULVKqEKYtIgkjBWPJSte3BCzsKhanl+0ubuNpbICWjf0WklgqKQ4c0uZnOeoXeFmeYWPU0McowQFE6lettOTdHTXGEMcWtlA2cevzWguVmdFLpkbg9F19dZHNf4kJwR2UAdqb7vWs9Gv7LOa6b1yuCr7Rqp929VzlZaSM+TUPVer1FvcyJ+QJGcwQtLVW6N+dI3UN6ZXltVZ37GHU3uCsSW3zhuzA/67r1KazubESGA5WqnsxB+H9FlOOJdleZePy878KRmdUTwOoIULmnVjScLvZrQcFwG/yUX8LP3m/oqfSh0Rzp/TiGt2G26lpqaR8mRC530XbQWmJzxrjbseyy/wCFCOTAGApjDpP+v/s5KjtNRNMMRloPTC6my2RglaHtDtO5WyoKURzsyMjK6Kko2tMjwBuOyvWkR25cvLtP5YtHA2MhobsOy2lOCTgNz69lEyEh2cLOgjwAB1WsOG1+9symAAz1WZCRpy7osaMaQFkUsLp3kOy1g691eGUyyqWN1TIHOz4TTjGOa3DQANlj0zA1gY0YA5LKYOSMpSNHVXt32VoGykaOSKK8hspGjZWgK9qCquCoFc3mgqwdVeqDkr2qsio5IiKAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQFQhVRBaRtyVhHopVTCCEt7qhapiFQhTEjHLVY5qyHAZVhb1U7EBAUbmYPosnSrSxTsYzmAq3Qskt3TCDG0KhbhZBYrXRoMfA7KmB2U3hnsrTGUFmkdla5vYKXThULURpCQmlS4TCCEt3VC1TYTCk0gcwELEqbfFODkALZaU0olzM1BU0jtUP2jTzBWHNS09Q7zgwSdsbFdiWA81BUUUEw87BnuFXx2vW+nG1VDIw7EFnQhYL6YfeGfouvmtr2Z8J2W9isOekP34SD3Cp4y0rfblpKSPHw/ooX0DDk4XTOpGuOGkfJRSURGwGcqJXi8uaFAwHICzJqJkjWyBuBjC2b6RwOMK+lh1QPaRu1EzeWmZSsBHkzj0W0pY/sXOA6K4QO/AVk0cTiHMwQik22xw3HMKWNp1DAWU2hceZP5LMp6Rse4yT6q8QrtBTUrnu1vJ09gtrTRAYxyHJXQQgDJ/JZUUZxsFZWbQRtA5BZDGqjGYG6lYEZqhowrmhVCqAgqArggV7RlBRuOyvGM8kaFcBuomQGFeAqNCqqgiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgKhCqiC0hUIV6HkgiLVYWnspsJhNjHLe4VC0KcgIWjCtsY+lULVPpVpBypEJCphTFqt0oIS0dla5g7KchU0oINI7KhjwFkFqtLdkEGgJpClLd00jqghATAU2kJpHRBDhUx6KbR6po9UEGk9lTww7ZwWQG+qBvqgwJqKF7s+GPmon2yJ3J7h9FtCz1TR6onctI62PB2dkeqsFulZyAW9LPVV0BRpPlLQ+4v6sUkdI4fdwt1oCaAp0jbVtpjnkp46bA3CzdATSENoI49I5KVrfRShuyrpRC0DZVAVwargEFoCuwq4VQEABXtBwqDmrwokAD1VwCoFeAqgEREBERAREQEREBERAREQEREBERBRMoiCoREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREFFQ8kRBRW9SiKYBMBEUi1wGVTARFAtwFQgdkRWFpAQgdkRAwOyYHZEQMDsmB2REAgdkcBjkiIAATA7IiBgdkwOyIgYHZMDsiIGB2TAREFQAq4REFQFUIiCqIigXMV6IokXBVRFAIiICIiAiIgIiICIiAiIgIiICIiD/2Q==" alt="ALINE Red All Day Insoles" style="max-width:100%;max-height:240px;width:auto;border-radius:6px;display:block;margin:0 auto"></div>
  <p class="prod-card-desc">Our original ALINE model. Pairs patented Active Alignment technology with responsive arch support to relieve plantar fasciitis, supination, neuromas, and bunions, while aligning the body from feet to back. Designed for everyday wear in running shoes, court shoes, work boots, or casual sneakers.</p>
  <table class="prod-card-table"><tr><th style="width:35%">Feature</th><th>Detail</th></tr><tr><td>Core Technology</td><td>Patented Activation &amp; Compression Zones + engineered ribs that flex and rebound</td></tr><tr><td>Heel Cup</td><td>Cushioned heel cup with gel pad — absorbs shock, secures heel</td></tr><tr><td>Customization</td><td>Compatible with ALINE TABs Kit (discontinued) — see Accessories</td></tr><tr><td>Sizing</td><td>By arch size (S/M/L/XL) — remove stock insole first</td></tr><tr><td>Break-in Period</td><td>Start 1–2 hrs day 1; add 30–60 min daily; most adapt within 1 week</td></tr><tr><td>Best Shoe Types</td><td>Athletic, court, work boot, casual sneaker, dress shoe (if removable insole)</td></tr></table>
</div>
        <div class="prod-card" style="border-left:5px solid #5BA84A">
  <div class="prod-card-hdr">
    <div>
      <span class="eyebrow">Model 02 · Sport / Work</span>
      <h3 class="prod-card-name">Traction Insoles</h3>
      <div class="prod-card-badges">
        <span class="badge badge-green">Sport / Work</span>
        <span class="badge badge-gold">96 Reviews</span>
      </div>
    </div>
    <a href="https://alineinsoles.com/products/traction" target="_blank" rel="noopener" class="prod-card-cta" style="background:#5BA84A;color:#fff">View &amp; Current Pricing ↗</a>
  </div>
  <div class="product-img-slot" id="slot-traction" style="background:#FFF8F6;border:1px solid var(--al-border);border-radius:10px;padding:14px;margin-bottom:16px;text-align:center"><img id="prod-img-traction" src="data:image/png;base64,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WcQ9zXlRzGZ4eRwSFBlBn+GD1KoBPox1MWRWGiAZFOiE+qNXA+NZ3h7JqY8qSstxsmg6NZE+424OPZ+KsGVmb4exMgH6QNzn28MhP4TRwZ8louAID9DJj0UZS7Oub0I7idjn+Cq2BKbJ9NSlyPC2fjHdSOwHxOPfwm2O6WTHLlYaOUzeH2UKS/Vd7Vx/rIzKTUynTqV6bOwZ1L15NAKZOO3L67WQMjhuJcS2PaaGPXR7bnD1fDpJJYwc+3RfwHOLTS6KfKKbOvp6a16y24pw/wA7hOFl1XFmVWVub85HycfIxzq2skL2ZBsGTMO0Pwq7HDjmX6q1J7n1mmjrfLdVJYytvpuVI18uVIpGxslKy6kM3+UHvNapktXz20FRvQ2esnFir6cHoOkF2Kn29AeonFl5pRUl2K+CCtmT5n00FRrRJ7H4l1k15WTwOi4+Xur6WBPXRMidCrKxPX1ljwJxbRk4RUkWr9O+4InS4Uoy56M/Gnt7rdEla6r1KvyBrm81ug6gTfVj1Vp9KAseuzNSgjoe6nQmys70pOgOuzONZX+0kpLLMYN+Pa6Iw/CD3+JJwbB96StEaxm6cqjZ3NvBuGZfEW5KaW5SfxkaE+heEvDGNwpBa1YfJP4nPXX5TtcN4Rde4Yey/Is06adj9iD4Q8ICp/v/ABMEux5ko/lTr6+5nbhdDQhFAGpnPpOj0sdNUoRO3XVGuPLE81Gp7EtEgEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBPCAe4nsQCPbh41n46lbfuJX5PhzhV++bGAPxLiJpKuMviWTHKjk8nwVhNvybrK/6iUeb9n15cvRloT7ldT6REp2cN08+sSOVUZdUfHuI+BvEdRJx1xrl9tkGQj4V8SCg+Zwliw9FbvPtvKI0PaUZfZ3RuXMlgry0Ncnk+Fr4a8SMDvg2QmvT3krhnhzxRXeticKdCO5dtT7XoTzQkVX2b0tU1OLeUYWgrT6nyevwJxzKctb93oDd+uyJ0HDPAONVynLvNxX01oTuAoHpPZbr4JpIS5uXLJI6SqLzghYXDsbErCVVhQO3STFGuk9idOuqNaxFFlLHQRESQyIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCJ5uewBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAPIiIA3PdxEAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREA//9k=" alt="ALINE Traction Insoles" style="max-width:100%;max-height:240px;width:auto;border-radius:6px;display:block;margin:0 auto"></div>
  <p class="prod-card-desc">Built for athletes and active workers who need extra grip and stability during bilateral movements and hip rotation. A gel heel and dynamic ribs absorb shock, while a textured top sheet improves airflow and keeps feet cooler and drier during intense sessions.</p>
  <table class="prod-card-table"><tr><th style="width:35%">Feature</th><th>Detail</th></tr><tr><td>Unique Feature</td><td>Textured top sheet — airflow between foot and insole; added traction grip</td></tr><tr><td>Responsiveness</td><td>Enhanced spring for power in twists and turns; extra bounce per stride</td></tr><tr><td>Heel Cup</td><td>Gel-padded, shock-absorbing; secure heel lock</td></tr><tr><td>Best Activities</td><td>Golf, cycling, basketball, weight lifting, cross-training, tennis, work boots</td></tr><tr><td>Key Claim</td><td>Same patented ALINE technology + textured top + spring responsiveness</td></tr></table>
</div>
        <div class="prod-card" style="border-left:5px solid #F0B500">
  <div class="prod-card-hdr">
    <div>
      <span class="eyebrow">Model 03 · High-Impact · Best Seller</span>
      <h3 class="prod-card-name">Cushion Insoles</h3>
      <div class="prod-card-badges">
        <span class="badge badge-yellow">High-Impact</span>
        <span class="badge badge-success">162 Reviews · Most Reviewed</span>
      </div>
    </div>
    <a href="https://alineinsoles.com/products/cushion" target="_blank" rel="noopener" class="prod-card-cta" style="background:#F0B500;color:#1a1a1a">View &amp; Current Pricing ↗</a>
  </div>
  <div class="product-img-slot" id="slot-cushion" style="background:#FFF8F6;border:1px solid var(--al-border);border-radius:10px;padding:14px;margin-bottom:16px;text-align:center"><img id="prod-img-cushion" src="data:image/png;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdCIFhZWiAH4AABAAEAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAAABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAAAABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAJ5AooDASIAAhEBAxEB/8QAHAABAAIDAQEBAAAAAAAAAAAAAAMEAgUGAQcI/8QAQxAAAgEDAgUCAwUGBQMCBgMAAAECAwQRBSEGEjFBYRNRByJxFCMyQoEzUmKRobEVJHLB0SVD4RY0CDWCkqLwFyfx/8QAHAEBAAIDAQEBAAAAAAAAAAAAAAMEAQIFBgcI/8QAQhEAAgIBAgMFBQYFAwIEBwAAAAECAwQFERIhMQYTQVFhIjJxgbEUM0KRodEjUmLB4QcV8CQlNXKCshY0U3OSovH/2gAMAwEAAhEDEQA/AP1/6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAq+h4HoeC1y+By+ACr6Hgeh4LXL4HL4AKvoeB6HgtcvgcvgAyAAAAAAAAAAAAAAAAAAAAAAAAAAAAMZzjCOZNJe7ZhvYGQKVXVdPpvE7yimv4ivLiDR08O/pZ/UrzzMeHvTS+aN1XN+BtQaZ8S6LnDv6f8AU9hxJos3hX9L9cmn+4Yr6WR/NG3c2eTNwCnb6lYXCToXdGpn2ki2nlbMswshNbxaZG011R6ADcwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA3hABvCNfqer2GnRzdXEYSfSOcyf6Gq4p4jp6fF0bb57nG/tH6+T5xf3Na4qyr1pudSTy2zxXaLthTpku4pXFZ+i+J0sTTpX+1LkjrdX47mm4WVJRXact2cnqvEmo3XM611Nxf5U8L+hq7mTbwihXb5sNnzbL7Q6jnveyxpeS5HdpwKavdiTXGpTxl4yUq+oyW6bRBXymU7jddShCtS5stbF//ABGb35mePUn3RqZSa2TInKT6smVEWYN/R1BqSlRrzpyTz8ssHR6Nx3rWmySnXdzR9p7/ANT55zSXRmcLmpBY6ouY92Rivipm18yOdMLF7S3PvPD/AMSNKv5qjdxdrV/ifys7S3r0rikqtCrCpCXSUXlH5ZhcQnjflkdFw3xRqmj1Y/Z67dPvBvKZ6/Tu2d1LUcuPEvNdTlZGkxkt6uR+ik8g43hXjrT9UUaFw1b3HTDezOwjNSSaw0+h9AwtQx86vvKJbo4ttM6XtNbGQPE8npcIgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA3g53ivXVp8fs1BqVeS3/gRe4o1SOkaPWu3vJfLBe8n0R84uqtavVnUry56snmT8niu2XaJ6Vjqqn7yf6LzOlp2Ir57y6IqXM5VJOUm25btt7tlSusrCLtRbMrzjufDe8lOTlJ7s9QlstkauvF5KNaLz0NtXhuynXp7FyqaNjVVvZlSrHwbCvTeSrWjhF6EuRqzW1o8r8EEjYVoOSKc4POC3CW6NSIxl3M5Jojm2TLmDHLT2ZPRupw2e5WZ4mZcU+pk3dpcc7jOMnGS3Tz0Po3BfG95Zzp2l45V6D2Tby4nyKnUlD8LNppeo+nXg5ySSktyfByLsPJhZVLbmt/gQ5FMba2pLc/TemX9tf0FVt6sZrul1X1LqeT4HpnEl3o2r+tbVnKlJpyg+jR9h4X4hstbtVUoVIqql88M9GfVdO7QUZd0sefszX6/A81k4U6oqa5pm7AGTvlEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHjAPn/AMVLuX+JaNpsZNepVdWa91HoaPG5P8VYzpceaNW59nRcUv8A6mYNPG58M/1CtctS2fgj0+lLhoT8yCcckM4YZakjCSPCRkdVMoVIb9CtUpp9jYVo4ZXqx+V4LEJA1deku3Qo16C9jbzhzZK0qb6MuV2bGrNRVpJdipVob5wbqvSKlSkW67TU1FWlsVZ0/BuatJPOxTqUcPoW4Wg10qZG44NjOlt0K84dydTTMlXA6PJnKO5h3wSJmTY1blqNGsn+KPK/0NroOuXWm3cLm3k04+zwaKklVsalP81N8yI6VWUOm6LOdDinG+PJtb/NEVai04s/SHBXFlrrVCNOpUULhLdP8x1KaZ+YdI1Ota1qdahNwqRfY+ycC8aUb+lC1vp8tVbKb2z9T2WgdqlY1jZj2l4S8/R+pws7Te7fHV08jvAYqSl0eTJdD3ye5xwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAeM9DAPk3xu5rbW9Evpfhi3Bv8AXJ7CUakFOLzGSymbj446c7rhaF7BLmtKqnLbdxfU5PhS7jdaNRmpxk0uV4ecYPi3+oeK45fe+aPS6VYnTt5GzkjCSJW00RyW582R1UQTWeqK9SPUuSXchqRT6E0ZGxr5xwzBwT3LVSHZkEotFiMgVK9PbZFSdKWehs5RTIpx+XGCeFmxo0auVHchrUfBsZU1jJDOJZjaYNRVp4IKlHvg3E6Sa3RWqUvGEWI2g01Wi87EU6WFujbVaSxsValNYwWoWAr6ekrrlfSacSCpB06s6eN4ssRg4VFP2eSbVaKVeNaPSrFM6kZK3EfnF/ozSPsz+JTpTcJI3ekXTjPKm1LsaTkfsS0JSpyytsHNsipolfM+3cBcWzlSp2d+3LGymfQ6dSNSClCSafRo/O3C1/8A9QpRbxv0Z9H4M4odC5lZXs16cpPkfse97NdoHRjRrzJ8nLhTfhy8TgZ2BvNyrXhufRQYwnGccxaa90ZH0Lc4gABkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGu4lsYanoV5YTWVWpSh9Nj4HwPcKxuq+l1Y8klJpr2km01/NH6Ne6wz8+/E6yWg/EOs6SSheJXVJeXtNfzTf6niu2+nfasHvI9YnU0q3ht4X4nUbp4DZW025jd2dOtHut/qWHnJ8DlFxbTPSoxkRSJpNLqRdcte5sjdEM4kUo+CzJEcoolQK0obkVWG2xbaXcinHYkTMbFKcCGdLcvNb4wRzh4JoyGxRnTz0IZ09t0XpwfsROCfQnjYas1lWljLRVqUk98G4qUtirUo43LELORho1MqS32LVWiq2kKfejLD+hJOCy9iXToKfrW7/AO5HK+qO3pNnHa6X+JNfPw/Uht3S4l4GkcWY8u5bqUmpOON0Qyi12Kb5PZk6e/Ml06coXUHF4aZuNL1HNRqcvmUnuaOg3G4pv3kkeSlKjdTaeGpMs2197hbeUv7GnW35H27gTiiM4wsb2TS/DCbfc76LTR+c9E1J4SlPDXsfW+BOJFe01ZXMm6sFiMn3R6/sl2lkpLAy3z/C/wCz/scTUsDh/iw+Z2QPEz0+lHEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADPlH/AMROkSq6DZ6/Qj97p1X5/MJdT6ua/iDTaGr6NdabcRUqdxTcGvqiHIpjdVKuXRm9c3CSkvA+B8FarGTjQUk6VVKUH7P2OwyfH9Ojd8P65d6Ldtxq2teUY57tP/dYf6n1LQ72F7Y06mfmx831Pzx2k0mWBlSjtyPX49ytgpIuVYRqU5Ql0ksbdTgtZ1PiXhm9nH0ft+n5zCc020vZtf7n0FoqVbuzzKnVr0E08OMpI5ODf3UmpQ40/A6GPZwS5x4kcZYfEfSazULyjVt593Fc0TdWXE+hXizS1Gmn7T+V/wBTQ8e6bw/eafKrSubWheU8yi4vafh4OHtLDTqljTpQjf1L5vGKOHBnpatLwcyrvIKUH5f/AN8DrV4WPdDj2cT7PTubWsk6VxSnn92SZrtc13S9JpSd5dQhPtBPMm/ofH6/rafXdJt29RdnJyn/AOD6PwPoFpLTqGqXdrOpdVVzc1aXNhe+OxDmaLRgRVts24+CXVkGTp9eNHjlLdFvhrV77V69SpLTnQssfdVZ5UpfobycP1JlDlwkkkumEe4ODddGye8I7LyObZKMnvFbIpzis7kUqe5dqQ7kMor2NYzIWVJU3nHYhrUsF9xMJwyiWNhg09Sl1MaC9K5p1OnLL/x/ubGrQKtSllYZexsh1zjNdU0zWS3i0QaxQVK8ko9JfMjXVIL2N/fU/W0+jXxlwfJJmonDZnX1SKhktx6S5r5kePLeO3kUVFerF+zR5qUHC8mn33JZweXJdiXWaf30JLdSgmS47TxLPRo2fK1FClVlTllPc6Lh/WKltWhVjJqcX2OamnFNpE9rTq/tOb04rq2VoYk8h/w1zXj5Es5RS5n6K4Q1+jrNlB88VWit453eO50ET4BwzxHHT69J29PlcZfNPPU+1cN6xR1bT4V6TXN0lHPQ+q9n9bhkJYl1ilbFdfP/AD5nls3DlU3ZFbRZtgEwepOeAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADyayj0AHwz/AOI7hZ07i34ts6eMctG75V3X4Zv+36I5Pg/V405RnKS5ZvFSK6RZ+kdc0221bSrnTrymp0bim4STXufk/WdMvOEeKrnRb7mSpy+ST6VaT/DNeez+h5DtZoiz8dyivaR1tNylB8Ej7DRmqlNSWGmsooajoGkX1V1rqwo1aj6ycd2arg/VVUpq1nPmeMweeqOp6o+DWQtxbXFPZno4ya5pmjocM6DQk50tKtVLqm4J/wBzl/iba0NMtrbVrKurS7pTSpxp7Kf6L2R9BkjmuOuG46/YwVOfJc0nmm30fhryXtKznDLhK6b4d+Zew8jgui7Jcj5XwnpNXiPiKnCpzTSl6txKTf4U8vP16fqfboQUKcYRWIxWEvZGk4D4f/wPS2q8V9rqvNVpdF2R0DSLWvanHMyOGv3I8kSall/aLdo+6uhG1seNEjXsSU7erUi5Ri2vc5NOPdc9qot/A5kpKPUqyRFOHdFqUX3I2jTo9mCtyr2Z46eehM4mSWxniBVlT2ZXqUU1ho2TjkjnTybxsaBWsqarW9e1kusXKP1NPVotNpx3WzN/bRdK6hPtnD+hDqtsqN1Lb5Zbo9LbZ9p02u1da3wv4PoV4rgta8+ZztWjs8dyS+oOrG1UIuTlSSRbq0cb9ixW+40qlUglz8vKm+yLWjd1dXdG17RST/Ji6Uk4uJpLi2oWS5qjjVrdorpE1lxOrUm5TltnouhfuYqWZPOSnKOxrbnysjwVrhh5fuS118PtS5sjoVHSqKSfQ7TgfiWtpl9GXO/TltJN7HFTRnSrODTRVjKcJqyt7SXRkkoKcXGXQ/UGk39DULSNzRkmpdV7Mu5Ph/AnFlXT7mnTlJypS2lFvofZ7C7pXltC4oSUoSX8j652c1+GqU8M+Vkeq8/VHlM3DljS9GWQED0xRAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPGcD8ZuCYcVaF9qtIJapZJzt5fvrvB+Gd+eNbGJLiWwUnF7o/H+k3d1aVqdLEqFxQqPmhJbrHWL+h9Z4f1KGoWUakZZePmXszz44/D6pV9TirQ6L9eEc3lGmvxpfnS91390fPODNdnSqRrKW34a0Eunn/98nyLtr2d4G8itcj0+n5nex4ZPmfVJGLi+qPLerCvRjWptSjJZTRJE+WxST9o6JEX7TT6VaDqSqZXdLqiCnbqrnlkub93uzC1rVLetlNr3T7noNJWPh3RtzquKuXj5epXvc5Rca3s0bH7PY2y6Jtd87kNfU4pctKGy6PB7XoU7qk7i32f5o53RrJR3eT0Gr69laf/AAcSEYVy5px57or0UQs9qbba8xVm6k3N9WROOSTASweDlZKcnKT3bOglstivKOOxiTVSPCyNzOxlBbZYcU+hkjJRyjO5gglH2LF1Rjc6ZCr1nS+WR447FnTHFVXRmvkrfK/D7He0G2M7JYs37Ni2+fg/zIL00uNeBoalBFepQx5Nxc2zo1ZU5rLXcrOms9DmzdlE3XLk1yZNF8tzn7y25U3jY1lalh7HVV7OrXXLShzGqv7CrQl88HH9Njq49GQ6e+4Hw+ZspRT4d+Zz9WLUt0YYNhVpr2yVZxxnYlUjcWtZ0aiaeE+p9F4B4pqWFeFGtUcqE3hps+aFyxrOm1FvbJJVdbjWxvpe0kR21xtg4S6M/T1rcUrmjGrRmpxktmiY+S/D7iarZ1oWleo5UJdG30Pq1CrGrTjOMlJS6M+x6DrtWrU8S5TXVf8APA8lmYksaez6EgAO8VAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADGcIzi4yWU+qPhPxe+HVfSrqrxNwzQ5qDzK9tY9l3lHx4PvD6GNSMZQcZRUk1hp9yDJx4ZFbrsW6ZvXZKuSlE/N3A+vQShQnU5qFTaDf5X7M7yLTWU8p9GaD4rcBPQqlXiDRaf+QqzzdUIr9jJv8AHFe2ephwbrP2ujGzryzVjH5W31R8G7U9np6dkNr3X0PV4mSr6+LxOjjKcJqUJOMl3Lap0KtLo+b3KrR5CbpSUo9TiaXnLHfd3LeD67+HqiWyHFzj1I26lFtJySZGuhtJyoV7f7zEPOMs11Sm4PKy452b7m2pYLp2lXPih4eny8BXLfqtmYrJmqNWUkoQlL6F7ToWHo89V5lH8SkT1NRtaeVQgse6WDtYnZrEjTHIzMqMYvnsubK88qblwwjuUv8AC6soc0pKLxlJo19SDpzlCS3RsLi/rVXs+VeCjUzKTk92+rOdrE9K2jXgp7rq34/IloV2+9jI0TR3SREu6JYHDLXgZ8p7y91sz2Jnglrbi+JdUabIlvaaubSN0vxReJo1k4G2s5ck3CePTntJe3kr3trKjWaSzHs/dHd1WH2ymOfX1fKfo/P5leluMnXL5EHpL/CqvKnGaecmojVqxg4VI+rT9pdjobDEpTozw1UjjBqbmi4TnTaw4touW599OHjZNMtkk4teG6816oyoRc5xa9TS3+nU6kHXtPwrrB9UaWrSTymjpmqlGbnBf+SG7sqV5S9WhFQrL8UFtksV9zqa46Fw2eMfB+q/Y3jKVL2nzRyc6eJPYwWUzZ1KMozcJQxJdUU6sPmeInP4mns1syyWtNu5U5pNtb7H1XgPiZxlCyvJ5hLChL2Z8bWVLY3GlXzi1CcsNdGTYmbdp2RHIofNdV5ryIcmiF9bhJH6PjPKyt0zM4vgLiFXlCNldT+9SxBt9UdmsH27SdUp1PGV9XzXk/I8ffRKibhI9AB0iEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgAEF3QpXNvUt68I1KVSLjOEltJPZo/OvGWh3PBvFEaNOUla1W52lV9HHvD6o/SLRznH3C9rxVoVXT7hRVWP3lvUf5Ki6P6dn4ORrWl16ljOuXXwZaw8iWPZxLofPNC1KnqNnGakvUS+ZGwmj5xo15dcO65OzvaTpSp1PTrQ/dafU+j0akK1ONSElKMllM/PWp6fPEvdckerjYpx4o9GYwbjP3XsTXEoSoqFNN4Xt3MGhTqTpT54Yyvcixc2VUZUy92XV7btGJRT5kHJJdTGSwbHlp3MJcrfqdW5dChJNZymjfOwnjqMoPii+j/50MwmmjxKUmlFZZct9Nq1PmqYin/MntL63pUcSp8s0sbLqQXOo1p5UXyx+m56HHw9Cw6o3ZFrsk/wrl+ZVsnkWPaEdl5suUrG3pwlHHM31bNVc01SryhFvEXtk2WipSo1Zybe6NffvN7V+p0+01eJPSMfJoqUOJ/oRYjsV0oTe55BkyWxXpdSxFng6uvM6L5GUUXKMI3VD0JP7yP4PPgrRJIylHeLw13O1p+SseTU1vCXKS9P3RDZHfmuqKsYulWz3izzVqMXy3EVtNb/AFNlcU6dzT+0QSU1+Nf7mFvThXou1ntneLfZnRpw+7jZgTe8LPag/Dfw/PoyJz22sXVdTm508lapRlGSnTlyyXQ2lajKjN05rDRDKGex5ZTsx7dukol5JTW5rrq2p39NzhFQuI/iS2Ujnrm3lCUoSi0+51E6bjU5obNGF9aQv6TmsRuIrdfvHq6b4avHyuX/AO3+Svzof9P0OKqRcGeQnv7NGwubdwlKM1h+zNfXp+nLKKK68MuTLR0Oh6nOnODjNxnHo0z7FwbxBT1S0VGrJfaILfyfn6jVlBprqdPw3rdW1uoVoSxKPXc6OjarbpGSrY84P3l/zxKmZiRya2vFdD7+ugNTw9q9DVLSM4SSnjeJtUfbsXKryqo21PeLPIzhKEuGXU9ABYNAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMIAA+XfGvhH7XQ/wDUen0W7m2g1cxiv2lP3x3a6/TJxnAGsOcpaZXl83Wl9D9A1YqcHCSTjJYaa6o/PPxO0Z8I8T07m3+7tK0ua2fnvBngO2ehLJq+01x5rr+52NMy+H+FL5HcNJojktylw/qFPUbCFam+2JZ6pmxl0bPilkHGTTO8RwlKEsxePcst07iOElFR25X3+hVe4hKVOalFtNF7B1F0LurFvB9V+xpOvi5o8rUmllUprfq0QNbG3t6kK1u3LlTzu2ULyCp1MJxkn3j0Leq6ZCmqORTJOL+X6Cq1t8MkbHQ4/wCRqPG7ka24o1at7UUISfzdkbDRLmnCDoTeG5Npk9zf29vlQ5ZPuke57jT9Q0TFV96jGHXz+GxzIysryJuMd2yCz0xRjz3Eo/REF5Tpwq/dSWH2XYiuL+tWyk+WPsium85zueW1XVNLdH2XBp22/E+pcppuUuOyXyLcGSRe3UrxkSxexxa3yLDJrabp1OdPbuvcnr0k4faKD+XvFdUyrEntKzpT33i+qOxh5MXHuLn7PVPxi/NenmQTjz4keXlCN9S9aKxWivmX7xqZ0nF4ZvJw5Gq9Ftwfb2fsRXdurmn61JfOvxRNtTwZ5m80v4sVz2/Gv5l6+Zmq5Q5Pp9DQVaeWV6lOSkpwfLKO5salN5exDOD9jy8LJ0zUovZoucpGu1CzhfUvUppRrxW6/e+hzN1bSbcZRaa6o7DllTmpx6oh1Czhd03XpRSqpfNH38nr6rY6tXxw5XR6r+Zea9Ssm6Jbfh+hw86bg/Ap1HCSaZsrm1bcljBr6tJwljBQU0+TLZ2PBHEU9Ou6bcsxbw02fatPvKN5awr0ZJxkvfofmSlUlTkmm0fSPhrxN9nrxtripmnPbDfTyeo7Ma69MuVFr/hSf/4vz+HmcrUsFXQ44dUfW0GUaur6dRTc7mG3ZGru+KKC2taE6r7N7I+q26hjVLeU0edhRZLojogn5OLueI9TnFqKpUU/GWa2pql3Ulire1H7rOxxcrtXgY/Lff8A56lqGnWy68j6BXvLahvWuKdNfxSSKU9e0uMsK6jL/TucLVq2yXNmc5PrmWTBXlKK+Shv9ThXdvcaD2jt+pbhpLa5s7efEdin8vqS+kWRPiWjnEbao/1OOV+10pR/mZrUppfs4lB/6gVt+9t8iRaR6HXf+o4vpaz/AJmUeIKb/FQkn9TkFqdTP4IhahNyy4JmI9v6k+cv0Nv9oXkdmuIKHelNE0dbs5JNuUf0OLhqUV1pf1JoX9GT3i0Xqu3eNZ0mvyIpaXt4HZw1O0n0rL9dixC4oz/BVg/pI4uFzbSWedL6k1OrTa+7qLPujrY/amq3o0/mVpac0uR2WU+56cnSu7mnjlqyWPOxdo6xcR2nGM1/JnZq1iifvcivLEmunM6BdAau31m3ntOMqb89C/Sr06qzTlGS8M6FeRVZ7styvKEo8miUHmQmTGp6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAznuPeHKHE3D9XT6qjGqvnoVGs+nUXRnQnkkmtzScIzTUujMxk4vdH5q4Vv6uj65W029jKl87p1Iv8ALNPDR9DTzHPVM1nx04YVvXjxNaJxjNqF1hdJdp/7M1vA2sq/sI29aWa9NYy/zL3PhPazRHgZLkl7L6Hq8PIV9SfidHjwePBmGjxjrLhHuujaLNGnRnSisOU23zL2K7WD2nOVOfNHqX9Oya6bNrlxR+nwI5ptcjGrSnTk8JpL3IJLLy92bWMVdW3IlmpltJGuq05U5cs1uiXU9PeLwzre9cuaf9hVPi5PqRJblm3t6lZpRhJrwWdItrevUxVlJT6xj7mzrV6NpDljFZXRI7+i9la8ihZuZao1fHn/AIKl+ZwS7utbsittNhSSlV+Z+xHe20cetb4cO6Rn6q1GhJU3KFSPSOepVs7iVtWcZ/ND80T0+oQ0qFdeMq9qpdLFz5lWqVzk5N814GMH7mSZYubZen9oovMJbmNO2qSipdmsnkL9Hyqr3Qlu1z5eK8y7G+MlxHttXdFvK5oy6p9GS4dJ+vQfNTb3XsVmsPBLb1ZUnlYafVPoZxspQSqte23R+MX+3oJLf2oivQp3cXOlFRmvxRXc1tajyvDTT9mbeVHnzWtpNNfij7GMnSuoclZclRbKS7/Ukz9MjlPd7RsfR/hl6ryZrXdwfD6HP1YNPoQtShPmhlNf1NxdWNSm8SS9013KNWi4voeZcMjBuT5xki6pRsjs+aNfqNjC5ouvbpc6WZwSObuLbq3HB16lOlNSj+vkr6lp8bmLubddvniekUoatW7qVtavej/N6r+6IYzdUuGT9nzOJrUMZwY2lepa141ItqUXk3Ve25cpxNbdUcNrlOdGxS5SLSkdvoWrU7+1/DFVl1T6styuJy6PH0Pnlhc1bK4jUhJ4ydzZXFO9to3FJ+JL2ZXzL8mMVFTfCjRQinvsTTnKX4m39WYNbGWQziynKT3ZuuR5HY9wBg1MjCPMGWAkDJ4kZroeYPTJgAABHqMoylH8MnH6MIGqm4vdcjBPSu68PzuXhss0NRXSotjXnmTqYmtZuM/Ym9vJkUqYS6o31KtSqrmjJNFmk1HDhUlTknnMXsc1GTjum0XLa8lT2luj1mm9sIuSWRHb1RStwvFHUUNVuaMsV4xqQ911NtaXtvcxzTnv+6+pydvc0qixGX6Mly3vCThNdGj6Hp+vOcVJS44nLuw4v0Z2GUe53NDp+rVKcY07qLn/ABLqbmhWp1oKdOSkn7Hp8bLryF7L5+RzrKpV9SUAFojAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAK2p2VvqFhWsrqmqlGtBwnF90z826xp95wPxhO0qOU6NN5pzf8A3aT6P6roz9Ns4f4u8K/+otAlXtqad/Zp1KLx+Nd4Pwzia9pcNQxZQ29pdC3h5Los9Gc3p93Tu7aFalLMZLKLKOC+HusOFWWmXHMovek2sfp+h3cX5Pz5lY8se6Vcl0PVxkmt0ZNIxa3MlhnrRSa5myZ5TqOnPKzusP6FmdKjWt3UhFx5PfuVZLcloVPTqJSXNT/Mvc7Om5aSePfzg/PwfmQ2xfvLqQ/NTkmsxa3T9jZ4jqNsmsKvTW69yO6pzrUcy5Y4e3RZKdGrUo1Y1IPEov8An4Z2sW5aTc8a/eVE+u/1XwK9ke+XFHlJHkZ1LevlfLOL6/7El1cKtUUuVR2MLyuq1Tm9NRb6kOTlZWdOqMsSmziq33RNGtNqclzJoznyKmpfLnoXLe6lCPK03hbP2KEGSRkaYupZGPPihLntsZnVGXVFuVR1JuTW7ESCMiWLHeO2bnJ82EtlsiaEnCXNFtSXQmj6Vx+1ShU/e7Mrxee4kti9RmSrjwSW8fJ/85MilDfmupYbrUI8kkp0/bsQ1bSjcJyoSw+8WZUq84pQeJQ7pknoQqfNQlyz/dZ0mq8qvhiuNfyv3l8H4kXOD58mae5tpwbUoMr03OjU54de69zeurOL5K8cr2aI52tlWy4t0pP3exyoaXw3KzDt4Zrwlyf7E6t5bTXI0moafTuqbubeOJdZQOeubNpvMTtoWNWlUVSjUjJr2eckd/pauYOrCDhNfihy9WdXJ0rIzYO6NfDauqXSXqtvH0MQyY1tR39n6Hzu4tWuiLeiXs7GvmWXTezRuLixeZKS5WvcpzsIw3Z5V3Lbhl1LqkpG+TjOCqU/mhLuux6UdKqOmvSb+R9UbBw5XjquzOdbDnuhvzPEj1I9wCA2bAPcDAMHgPcGNWCnTlHLXNFpP2Mg9TMo+xythqVzpWovTtTk3By+7qPuvqdVBxklKLTi1lYJL6JVPn0Ya2MuwweoFY13GBynp6DG5ikekUbilOtKjCpF1Ifij3RKg011M+B7GTjLKeC7bXri0p9PcoguYWoX4U+OqW3p4Ec4Rmtmb6nWU8ZeYvuWLatUt5KdCe3VrOzOfo3E6Wy3ibS1rRqrMX9UfS9G7RV5rS34Zr/nI512Pwr0OosNRpXPyv5J+zNgjjkk5KUZOMl3Ru9L1JTaoV3ia2Untk+i4Gqd5tC3r5+Zxr8bh9qJtgedT07JUAAMgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHk1mLXuehgH54+L2gVOGeLY6rYxcLK8l6scdIVfzR+j6/qb/QdShqOn0rhSTlJb49z6J8ROHKXE3DF1p8or1eXnoy7xmujPgHAuoVrDU6mn3cXTzOVOVOX/bqReGv6HyjtzonDL7VUup6LTMlTjwS6o+nwMivQqZis9SwnsfL9jqjcPIyercyY3MvUm6fpt5j1IpPLexkzEltvsu243vsaxil0MJLLMeXBI8ZMKj3I0bnqMosjTM4tEkWYZJFksGyBPfcziyxCfM02LMJEiZXgSwfktqRo0SGSz2eGYZ2PUbxk1zTNWkyb1srlrwVRe/dHkranUWaFXP8AC+pGxFtbxeDoxzVZHhyI8a8+j/P9yLgae8XsV6sbilLZSikR/a60VhVZbGx9eqoqMsTXtLcim7aSfPbKL/hJa64P/wCWynD0lv8AVchu/wAUdzVVX6jzLd+5Vr0k1lI3Tp2Pdzj+hg6Ont/tan/2nPn2eunJy76D38eJEyyYpdH+RoYQcWkkX7eT5PTn07P2Lv2fTuvPN/oSRdlT/DTcvqH2e/8AqZEF89/oZeSn0iyg01nPYwrV6VKUI1KkYSn+FN7s29x9nr0FGnRVOa3TX9jlOLNMV3ThVcXGrS2jNPeL/wCDk36ZGrJVXeJxfRrz8iWq3jXNbG3W56c3w5q1Z1v8Pv8A5a8PwtvZo6NPKyc/Ix50TcJk56AeMgGxQ13TKOp2UoTj95HeEl1RotA1S4067lpmpdE8Qn2Z1yeDR8VaVG+s3KltWh80Gv7Hc09wy6njWe8uhG3wv4m7hNSxj6kiOZ4O1V3FF2Vy+W4pbfN1aOli0cW+mVM3CRlmQAITBz+v2VxSuo6pY554LFSH7yNlpGoUr6gpReJr8UfZlxrKafQ5vVbavpd5G/s190395FF2pLJjwP3l0/YzuttjpgVdNvKd5bxq05J56oslKUXF7MwGZ0as6U+aDwYnhmuyVclKL2aMNJ9Tc29eNWClH8XdFiMufDXVGioVZUp8yNrb1VOKqR6Pqj6ZoWufb4d3Y/bX6+pz7qFH4HQaPqPP/l6201tF+5uU8nGt7xqQ2lF5TOl0m7VzbKTa51tJH03SNQ76PdWPmunqcTKx+B8UehdATyDuFMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPofA/jtw3LSuIKfEdnH07a9aVblW0ay6P9Vj+R98ZpONtDo8Q8NXel1tvUhmEv3ZLoyjqOFHNx5Uy8SfHudVikj5HwxqcdQ02nV5vvIrlmvZo6ChLmSPmXDFevo/EFXTLyPpVOd060H2mts/R9f1PotrU6M/O2p4UsPIlWz1tclOKki6t2ZLYwjLmMypDmjJ51PJdDJnnUzwgiZhIknsyObNWjZHnQ9TMGwpbGN9hsSp9zKLIoszTSJIsw0TxkZ05bkEZJ9CSMixGw02LClsZpkEWiSJZjI0aJkeowTM4smRqetZMJRJVueSj3MuO6MbleUdt0QSjuXHEiqwSWcFeVOxvGTKriMEjieY8FZwRvuZU5uOMElxShcU84TeMNe5D3JaUnFm8EpLhl0NWvE4rijSKjiqtDMbim+anJd0vys2HDeqRv7JZeKsNpx7nWalYwutNVfC54ySb/ANz5vqkauga9C+pwaoVniol2Z1dS0+c6lGfOaSafmn0/ySU3qa2R2SYyQWteFehGrB5jJZRLk8e009mTmTZ5Jc0Ws4z39jHIybQslXJSjyaDSa2OU4jsqlpdrVbJYlF/eJHR6Lf07+xp14Nbr5l7MluKNOvRlTnjlksSTOQsas+H9cdrUb+y1pfL7I9DlwjqGOr4e94/E0r6cLO6TGd8EVOpGSTjunujNPfJ5iUXF7MMzRjWpxrU3Tmk4sKW5kIycXujByM/V0HVMpydtUl/I6q3rQr0lUpyTTRBqlhSv7WVKpH5sfKzRcO3VSxvJ6bdNpfkbOndGOTV3seq6my6HUHpipbnvY5WxqG9iayrunVx+Vlc9LGLkTxbY2w6oxKHEtmbylLfD6MtWFw7S7VRv5HtI1VlVU6KWfmiXMqUNz6/p2croQyK36nJtr6wkdpTkpQUk8prKMsmq4eufWtPSk/mp7fobRdT6Vj3K6tTXicCUeFtM9ABMagAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwq1IUoOdSSjFdW3gAyYOK4q+JvC+gqVOpdfarlL9lQ+Z58vsfG+Mvi7r+sc1Cya021ln5acsza8y/8FW7Mqq6smhROfgfd+KeM+HuHYtalqVKFVL9lF80/wCS3PkHF/xxvriNS34ftY2tPoq9VZm/KXRfqj5Hc3VW5quVWrKpUlluU3nJrrm9p0otL55+5wsvWZLlHkXq8KK68zeW+r3d5q9a8u68q1xXlzupLq5I+v8ADd+rzS6NbPzNYl9T86q5rU68bhyfNF5wj638OtS5uWk5LkrR54eH3R847T0LIgr0ua6nZx/ZXCfSbee+CzE19vLoX4SyjxVbLLRkFsDx9CRmDCql1IJ7E1QgnLDI5MyjCT3Mcs8lu8mGSPc2JoyeDNTK6lg9U8GdzGxZjLySqRUjPLJYyNoz2ZhotU3kmgyrTlsSwl5LtdnI0aLMWZpkEZEiyizGRpsTRfkzTyiGLM4smi9zRokwiOqk4maexg9zLCIXHYjaJ2RSK1kTdMjwG8PqZy6EUiDobI2tvU/6Y87rmNPxFo9PU9Iqy5VLEcNY6ezNhTf/AEqW/wCcm0qeaNeOc/L0Pd1qNuRRVYutX9ii5OHFKPmfNODr2pb16uj3bxVpy+Tm9jqsnPcdaNWtnHXbCD5qMs1cdln+xf0bUKWoWMK9NpvHzL2Z4PVcRRkroL2ZHXjLj5o2LYctjDJ5k5GxnYkT2w+5puLNMjfWD5P2tPeLX9DbLqZOm6rSS6ppnZ0S5xyO6fSXIjt5Li8jQ8E6u7uzdpcNK4oPlaz1OlT2OC4gt6uia1T1K1TjSk8VEv7nZadeUr22hXotOMlkh1fCdFrklyZtH2lxFxMyT26kaZ7k4+xlEmd+poOK7KUqKvaC+8pbvHVo3nNuexoetGSf4VF58nV0eErMhVL8RpZLgW5q+HdTjqFnGWfvI7SXc2vM8HDqU9A4g3z9mqvH0OzhNTipR3TWUQZ+I8e3bwN+T5meWMsxyMlHYbFmzqenWXs+ptE2pYzsaOMsSTNvTmp04Pwe27K5O6nS/iijl19JG00S4dDUI5fyz+VnWROFjJx5ZrrF5O1s6nq21OovzRTPrnZ6/irlU/A4GbXtJSJgAeiKIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGRlGg4h4s0XQ4Sd9eQVRdKUHmb/Q1lNR5syk29kb/KKWqarp+mW8q9/d0beEVnNSSWfp7nyHin4sajWTpaNawtKb/71beX6LsfL9b1e71CtKtqF/Vuqj3fNLK/l0Kk8xN8Na4mTRpfWb2R9j4q+Mul2fPS0W2nfVY7epJcsM/ruz5JxZxzxNxA5u71CrToP/s0nyQ/XHU524r1JLNOmor3aKVa3ua/4pya9kQvHyrvefCjdWVV9FuR1akYr56kd9/xFaV1Ry16sf5mVfTsRbk2mai8tVT5miOWkRfWTJY5u3gbOVWONpPDKbpctV8rzB9EznK2oXNnWbpzzH92W6Nlaa3a3cFCcvSqeeh53P026rdrmdCnIhP0Nn6aTbOg4Mv6ltcxpZ+aEvUp/wBmjnbdv08pqSffJ5b3NS1vI3EZS+WSePHscCyl2wlB+JcivFH6R0+4jVt6dVP5ZxTRtqcspHzz4e6pG4sFb1K6lJvnpfT2O8tp5gvc+dZNLx7nW/Atp7ouJnrf6mMXk8bI9zB5UK9QnkV6vYjkzKIpvYrykyWqQNmhse8z8nrm8kXOeqW5tsCxCXQlhJlWMiSEsPqa7AuQlvknhJFOEsPBNGaRLCWxq0W4STJoy92VITTRJGRbrsXQ02LcWepkVN5Mk9y2pGjRKnsDDJlk34kagwktmZMxkyKbMmEiN7EkjGKUpY7sjUOJqK6s335bk9f5NNhHo5SzgaTLEa7/AIRqck5QpR/JFHmnxcaNxPxg9nCX/elFdIQa/KJQ23o383/cl0pwr1alvWgp0qkXGcWtmj5xq1lX4S1idS3jKWnVpvMevId/pkuS8i8v5pYI9VtqN1KvQuIKpTk2mmce2cZ6TW5Ldccl8nzLcJOFzS8kaCxvre9oqpQqxnnsnuWZbLfY5674TqWdzm2ualFPeLg+xlHS66a+0Xdaou/NLC/ocr/YZzacZcmWu9TNw7qgpKCqxlJ9FF5ZuNNhHkU5R65NBaWlKlOPpw5nnss/1N9GrGMYrphdDpYWFjafNW2TTZDY3YtkarimxhXtZ0pQypp426HI8E3tSw1Wro1w3hvNJvozvr6rC4oek20vddTVUtMsKNx9phbRdZbKbbbRX1bUsS6DhHmSURlHkzY53PU2RqXuZZPItEviZZeS7bVqcIfM/qUOYcxcwc2zCs7ytLfpzNZwVi2ZrOL9MlqVt6dtCDkt4ybwWNFpXNvplCjdNOrCOJYLfN5HMbZefblfebGYx4Vse5GTzIKGxtuZI21nvbQaNSjZWWfs0dz0PZptZTXoVsr3UXE08LPU67QJc2mU1nPLmJx1JfMdXwz/APL3v+dn1vs5JrJkvNHCz17CZtQAe2OSAAAAAAAAAAAAAAAAAAAAAAAAAAAAeOcVu2tupxvFvxD0TQnKjCsrq4S/BTllJ+WYbB2MpqKbk0kc3xHxnoukQcZ3Kr1V/wBulu/1fQ+N8T/EbW9bzTozdvQf5KTxt5fU5Vwu7h81SrPD89THBOXQzvGPU7rij4manqHPStan2Kg/y0n87+rOCuL64r1JTjB80us28tlilZxi/n/qW429Oms8oWHB8582He0to8jSO1ua+eZvHkyhpjX4om6t5RqVKkKeMQXzP2Kmp3cKNCc08Sfyx+r2RZhXGC2RHu31KrsaSWcLbsQVaMISUVH5pdDbXFNwpUoLebjzSNRYN3HEUqTllUKWX9WZZjc0+rJc86SeMLr7M01y6K0mNzqLpwhJ45uiazhM2XEU/ToVqy/FOT5fq+hr+OdLp3Og2+nSbUXBPZ46LqRtGyOX17R6soOraSjWptZWHuchUnKhWcJZjNeMHScC2+r0tTuLGvcSq2tCHMnL+iPL+el6ncV7aUoRq06jhzPbLXkrWVb9CeFm3U1NrqVxS/Z1ZL9TY09butk2p/VGnu9Oq2tRxpv1F5ZhTqShiM1h+TnzxapP2oJlpXSXRn1P4Y8SVHezs5y5Ki+8ofp+JH6C0W9jd2VKusfNH5se5+PNKvp2N/Qu6ec05qTx3XdH6T+HmsRuKUYcy9G4iqlJ56Puj5r210eNTWRUtkzr6fe5pxfU+jU5ZRm/wla3nlIsv8J87R0GYS7kFV7olm9iGot8kcnzMkM2Vp9CWpkhn0MIyYN9jzLR533BMlyBnCWGSqWSutjOL8mrQLcZPbwTRlkpwl5JYyxvk1DLkJbEsJblOEmTRl5NoS2Zq0XoSwSKSKlKediaMvJbjZuaNE6Zm2QxZnnyTxZq0ZN7HjZ5ncGW9zU8fQlsafPcxz0W7InusFy35aVnOs+r2R19Dx1blqcvdh7T+XMhvm41tLq+RUvJKdzKa+hOsw0qT6OTWCq45kt+rLl6nC3oUm+kdy5gWyl9qzJddmvnLkYsilwV/wDORVs1i6pf61/cyvdrqp9T20X+apf61/c8v1/m5/UrOL/2fb+v+xs5fx/kTWtvSvbarSqr5oxzCWN0zRTt6NOXK4uck/zdDf6Q8V5LOMxNbe0XKrUcVl8z6Gmoyt/2yidT2fNP5ElLUbZJlGUm3v8A0PM5Z5PMZNPqhFnjpSk37XUuo9MTMwNNjIyZRexieowZMsnjZ5k9GwGRkAA95j2MlkxA2MbEqZtbNctvFM1UFzTjH3ZuoRUYKPsj03ZelyunPyWxUyZrbY9i8Poddw3Dl02PmTZykcZwdtptP0rKlTxuon1rs7U+9lJ+COFnS9lIsAA9ecsAAAAAAAAAAAAAAAAAAAAAANmk4r4o0bhqxd1ql3Clt8tPrOb9kuoBupNRi5N4S6nG8Y/EbQOHoypuuru7XSjSffy+x8k4y+KeucROdppSlp9lLKfK8TkvL7HIWenuea9WXO28t57kka9zVyOo4m+IXEvEM5UKVR2lvL/tUe68s1FHRqr++varSbz7tlPS60I6xOEZuNSl0jnZp+DoLqU6kG29/qSKCRo2a5UaFP1pU2pRpZ+uxYtmqlpCvhJSWyyc3pt5dR4wr2LoVa1tc0+qi2otbPJ1FjSjKxhSnFRjSqOLy+3YyYNXe3cHqtnZRe9STb+iRf1WUqXO4x+WMTkteuaVp8QNNipNRcZbez2On4nuHT02vNbZht/IIFXg6q7vRbm5fWpVaz+uDXcZVI0bnTbRPercxz9FuRfCy7lV4ZrLq41JPH/1Gq45v4y4n0VLmXLcLr9GDO7O4v2lKUm8csEkcxwfW+0alrFznOG4r9Eb/WZtWk59c0zkvhnU9S11aXf1Z/7gFLieSd3p9sv+5XjlfqbDi+ClXpx6KNPBqNcm3xZpVN9qyZ0HEltOvdTUN3yLr0WxHI2RyPDkadKw1S+lhc03CL98bHyjXNLuleerbznGVWeZPO2W92fQqFtfwlO0rPkoxnJ8q7vJU1axjKjJYI2bmv1O6sdMtrSj6qqVeVJ+cLdv9SWjLTtTap0aX3qjlpbo0N1ZReVNOT92WOHrpaO60qVFylPfJC+Fkm7GrqnZagreDxiKck30Z9J+EOvVI2VS0bcqltJVaKzvKOfmR8ivXcXVxKpVblVrTy35Z12l6j/6cqWVzjHLUjTl5i/xf0OTquDHMxZVP5fEt41vdWJn650i7hdWdKtFYU4p47myi9kcR8PNRjdWroRaawqlNp5zFnaU3mKaPz7k0ui1wfgemT35ns+pFUJZ9CGb3KkupsivU6Fep+Es1itPoZiZImeNnrMHsTIGRktiFtqWUZxlky0YJovYli9iCL3wSxexGzJPCWNmSxl5K66mcH7mgLcZL3J4y2KcGsk0ZbYJIy2NWi1GWMGal5K8HuiVNFmue5q0SpmWSJMzT2J0zTYkpxc5qKe7Za1GUUoUI7KK3+pjYQjCLuZLpss9yCTc5ynLrL+h6NL7Dpv9dv8A7V+7Kr9u30X1M7an6laKx3MtQlz3UsdFsibT1yxnVa/DHb6lWUuabl7sXJUaXCHjY9/kuSMx9q1vyRnZLN1TX8SI71ZuZvyWNPw7mPjcr3LzXm/JraktHg/Ob/RBc7/kZaa/80l4Iqj5bqeO0mT6av8AM58FSs/8xUb/AHmRZEnHSaX/AFyN487pL0MtdtoOFK8praosNL3RqcHQVPvNIgsZ5ZP+5pLil6UvD7nM7S40Y5Eb61spxi/m1z/UnxLN4cMvB7EeTzqenmTzZaa2PAADIPcngAPUennYAHoAALVjBVKqfZbm1W7KdhS9OkpPrIuxi89D6b2f094+MnLrLmzl5FilIu6TbO4vKcMbJ5f0R2cVhYRpuGrR0qDryW89l9DcrqfTtKxu5o3fV8zz+VYpz5eB6ADplYAAAAAAAAAAAAAAAAAAHjZjVnGEHKclFJZbfZHwv4xfF30vV0LhepmpvCvdr8viPnyNmYfQ6f4qfFWx4bU9N0j07zVOj3zCj5ljq/B8Hvr7VuJNQqahq11Ur1Jvbm6Lwl2NTa0XKp61xKUnOWXJ7ttnVWNslSjOOHHG2CZRI3Ijo20KNrJRWHjA4WvYXmnzhFr1INpr2aL0qU6ydOksyaPnllqNbhvi+tQr/d0q8+bfobo1RZ4tvq2k8Q22owi1Tk/TqH0HhzULbUaGZvOF0z3OX+IljHVOHJXtriUXHMmvyv3Of+GWsylTpwqSxKPySQNkfV6lWhRrfd0YU2ujityspZubig0vvaaqQ+q2/wBjyUY1Iqo5LdGFflj6VaM0pU5YbfeL6owzJ8r44qyteJ9PuZN/LVxn6necQzlX0CFVP8VM5T4u6XWa57ejOpOM1UjyRb2/Q6nQYV7/AIPpqpSn6qgvlaw+nswupquZzPwcrtvULFveNSWEUPiZm21Kxr9PSuIt/wA8Frg7S9W0rjW5lU064ha1kmqmFy5ybP4q6LcXunVKltbVKk1HmSis7rcMI6GvP1+Ho1lvmkcf8J5r7fq1o3mTnJm+4GqVrvhaFK5o1KcowxKM4tM47hS6/wAK+IF1bVPlVf8ACntkw2ZJuLHG3400uTfy+rudRc3EpValWCjKMtsP2IeMdCWoXtC4jLlcJKSwuxZdFRoRilhpGNjZHO39FzqzquKTk8vBo9RoPlawjq7uns9jR6hS2exHI2Rw2o2+G2kaxx3wzp9ToPD2OfrwaqPPQglyJokdoqVO7pVaqzCEss84xuqN3fUaVq26dOLc32cn7HrRVuINp4Rp4G3Rn2T4GcQVP8KpRrVH6lpNQy3+Km+n8j9BW9RShGSxhrsflDge4/wepZVak/Tt6q5Kr7Yk8f3wfpTgy9+1adGnJ5qUtn9Ox8c7baYsbK76K5SPQ6fb3lez8DonuiCpsyddCKqk1k8JLqX0Vazy8EDXVFmolzEElujCMkDMJLcmkupG1gliwRtHsep7ynqRvuD2LwyWLIe5JTNGETo9TZij1MiBNCSJosggSRZgFiD3JYvYrxexnGTJIs1aLMWySivUnGC7vBXjLY2Onx9KjK6n0xiP1O3pGG8zIUJe6ubfkl1ILp8EdyW9kqcIWsXst5fUr9iNzc5uUnuySlFznGC6st5uTLPy949HyivToiOuKhEuzfo6bFL8VSX9Citlgt6lLNaNPO0Vgqoua5YlkKmPStKP7mmOvZ4n48y1paXr1JvtBlSr81WT8lywXLCtPtyNFJv5mxn+xp2PDz4n+ohztk/gWNO/by8RKVfetN+7L2m7TqyfaJQqPNRshzltpeOvWRtUv40n8C5av/ptVdcPYq+kq6cX17eGWNOl91cQfTlTKtOWJbe41NxlTiWTW64dn8nsZrWzml13NfVpypVJQntJbEZvdbt1XtaV9BJSxiZo2eb1bAeBkupPdcmn6Pmi5RZ3sE31PAAc0mAAAAQC6gGRNaU+er06dSKKbaSNlbU1CPTdnc0PTHl3ccl7MSvfaorZdS0o/KlE2Oj2s7q6jDHyx3kyjbqU5qEYtt7JI7HR7NWtslj5msyfk+x6VhO57v3UcHJvUFsupcpRUIKKWEuxmeg9cuhyGAAZAAAAAAAAAAAAAAZ5kA9yY1JxhFylJJJZbbMW9j4n8d/iErSjV0PS6ri47V6if4pfur6dzSc1H4mUtzV/HX4ozqynw/oFxy01mNxXg95fwp+x8e0e1ldV5VHmW5rc1rm4cpZlOby2bOm7nSqCuIU5VIJ5ko9UWIRaXPqRSlub66slOxnSimnjZ+zNfwnxOoXc9M1HEasHh525l7ov6Pr2m6nRUPWSl0edmn5RzHHfCt65f4ppmakofMpw7fVG6ZofSVTnBq6t5qpTa3Xj2Pn/AMTdNlqFP16a5a1PdNGt4L4+rWVf7FqsXCa2fMfRYPS9etHK1qwU5L8L6GdzbY4X4Y8UepCWk6hh5XJKE+6Ndr9jHg/ixzc2tMu3z0KvZN9Yvyihx1od5ourx1K2pypuMsyij6PwjUp8S8N0f8VsY1KaalFVV3XdGm+yGxWteMNJ+zQ57pSlFYcYbtsjudY1G/lRhY6fVhbSqJ1J1E03Dwjo6+kaddX7rWemUqdV4U5pbNpYz/Q3NhwxCXL683Lbolg5F+oz4nGtcvMvwxE1vI1c9bqxhywsqMMLClVkm8f3KVXXb+KfL9nWO0ISZ31vwzp8OV/Z1Jr97csXenW1tZz9O3pqTWI4j3K08q3h3cidU1roj5JdcZXS+7nV5XnGJUZntDizVJUl6SoSi/eEkdVU4Yh6jqVKam5POMd2QXOiW1vHmmoRiirXnWv8RJLHr8jQLinUI59Whatv25l/ue/4zYXdWNe70S29aP4akVHmX69TZU9Ms62pUKPoyqc00pYW2P8A/DobzhXTpW8p07ZQmllYfU6WPfbJb7kFlNa5bHP0NW0m4pKnX9aljpJwex66VhdbWmo0ZtdnJZN9ecEUqdL1LGu5NrPK49jQ3XDl1GMlUtI1F42Lf2ma6kHcRNdqOl3VODkqbkveO5zV7CTbi08rqsHRztK9vmNvdXFpNdEnmP8AJ/8AJRv7+pRg5azbUbmklj16L5ZJeUSK6L6mncyRxeoU8po5rUKWG/B9D1vTaX2CGoWjm6FTdKccNI4rVaTy9jMuaMRNCzFxyZzjyyaMSAkLeq6pKpoi0+Mfnk1zT9knlY/VI+3fBnipXdhbXNSfzQ/y9ys9+zPgFystHZfCW7+y39elVm40LhqLa7S7M4XaPS46hhSS95c0W8K/urUvBn63jKM4qUJc0WspnkkjScG36u9KjTbTnSxF7m8TPgV0XCbi/A9KitVj8xBNYeC3WWdyrUWGRIyRSS3I5LKJZMikyRGTBI9wNvcx58M32MHuCSJHzxMozWephoExkiNTTM4sj2BLEkh0IYvckjLBqwSp4M4siRmngbgs28JVKijEvXtRKMLem8Rh18si0penQqXE/pEr8/PNy92et3en6YodJ3c36RX7lPfvLfRfUmi9zYaTHmrOfaG5rUzZ0Jejp05pYlN4Xk27PQUsnvZdK05fl0/U1yntDZePIhrS56speTAJnnfJz7rJWTcpeLN4rhWxdobafWfvsUGXp7aZHzIpM62uexHHr/lgv15kWPz4n6liw6Vn/AUH1f1NhZ/srj/QUWt2aaktsDFXpL6m1P3k/kTac36lWP70cFR7Sa8luw2uF5KlfavNfxMgzXx6TRL+WUl/czDldL12NlatVtMrUevJukaO4pOnPfo+htdIqYuHTxn1Fggu6XPzwaxJPY01eKy9Px8hdUnF/Lp+htS+CyUfmas9SEk1Jp7NBHkXyOgMDB6ADzB6ll7Ibd2Z26cp4aZ0dO06zNnsuUV1ZFbYoLcntaP5mzY0orq84X9SvShyQbb/AE7nQ6Fo9WtUVzdLlh1jT/3Z9Y0bR+KKhWtoo42VkqHN9WWdA098yuZrGV8sfbydFHZYMadJU4qMexmlse/qpjTBQj0Rwpzc5bs9QCBMagAAAAAAAAAAAA8bPWyOcsJgByRhOphbEcplWrcpPABpPiRxGuHuG6txTkvtNb7qin7vq/0PyRxJfTvtTqOVSU1FtZb/ABN9X/M+qfGjiOWp6/WpUpZtdPpunDfrPrJ/1S/Q+L08yqZfd5IKNrbpS8I8kSWrggl4s2ui0our8+E/J1Ks1WoPkSkvBy8bCvWoqdtUlCoumDX1uItX0OqoX9rJwXSpHK/odAqlfinhy5tLp3umSlSqp5aTwmRaD8Qb/Sqqt9SpzjjZtrqdVpXHOh6hBULqNNtrdS2aJb7h7hLXItxuHSk/KaMGSndUeDeMKaqVoU7a5l1q0Wov9TmNfsNS4Cr295Yak76yqyaSzicce6NxL4ZUKdbn07iGNJPouT/yb58FV56X6FW6V/P3zv8AojHiZTI9E4j0njLSHYX7XqOOIyX4oM77hjSqVKyhbpJU6UFDpjJ8HtNEnoPF1KL56SlUWYdMbn6W4ZhSq6T8qfNz56dipmycKm0T46Tmtya206nRUWqcYx7YNvQo04pYjn9DCjDblkW7dxXyfmPPJcR1OpJTpwUctGg13VaLqK2tadSvVi3zKMdl+pu7++trPT693OTlCjBtpdcrscrpV5WvX9r+y0qVtOLlFt5nJvoaXpqOzMxXMwrRu7qLjLmoZw1jGfJRr6bazhKc5wqR6OTecNGM9RrUeJq1CpUl6NxRU6SfRSi91/I5y/urilO90e35ua5qKVF56KX4jWvHlJ7JmZTSOq4R+yXl1WqU4qNO3ly02uk37rwbWFSl9pmrh1JzhPaMejNZwzZytbalGhFpU/kn/LqX61KrK6danUcG1iSR06eCMfZK022+ZvaE1HNN7bYXuQVrWncSUeb05dmtmzX21dUIKcaknBZTlJ5yylrmvwoUZ1KbcFBZlPq0WqU7OhDOSiea5bW9CE6dZU68mnyppdfLPnOoWul2FSV/rNanc10+anR/JD2Sj3+rKuvccVLipUoaWpVKjf7R7nOx0q9vqvr39ac5S3abLaqiQu6TWxLq/EVzqlZ06NPlt/3UjntToddjqlZU6UOVRSxtsajV6Pg2aNEziL6nyyyVTcalSw3salxaeCvJbMli90Y8ifU2ugXULGc/V2ppOaa65W5QisoylHMcGm+xn4H3z4V8RUrmhaXyk6VOrFU6sf3ZeT63B5SaPyp8K9QVLVamlXFWSp1PvaW/5kj9M8M6jG+0qnKb+9guWf1PinbHS/smV3kekuZ6bCt7ypbmxq/hKlRtvOC9KOYleaSW540tlOrnGUQvyXJKLT2IZRS7G8WCDH6Ec4y5t+hYaMcEilsCs1L3werKTTe5M6afVmM4Y6bmykgYwq584LNKeUUuRxeMEtFSjuJJbcgXovfJIuhBSbaRKpdiu0CWLwsGUE51IwWfmIkzY6PFOpKtL8MI5z5L2lYn2zLhT4N8/gub/QjunwQbLF7NU6dK2i/wx38srQI6lR1azn7skgW9VzftmXKa5RXJfBckaV18EEmTU95JLq3g2N++SnRorZRW5TsKfqXMFno8/wAjO9qud3P2TOtiP7NpVlvjNqK+C5shn7VyXktxFoN7GEWZJ5Zx4c3sSvkXb35bShBbdyky3qkv2UP3Yop5O12jf/XOPhFJfkiDFX8Pct2f7G4/0FFvBcsXmnXX8BRe5rqct8HFa8pfUzT97P5GdrLlu6eejkYagkrqeFgxpv7+GeiZlrGY3X1imabceiz3/DNfqjbpf8UQ29V0q8JrtLJc1GXLe5xmMo8xrmy/dtTtKFaOX+V5IcOXfaVfUusGpr6M2muG2L8+RRvoJTVRdJFddC/yqpSdN9914NZdV6NtHNWaj47nm7a3NqUV1+pajLwfgSrd4I6lWEHyv5n7IqQuq1z+xTo0+8n1ZctqNKjFTqSST6tvqdzTuz87vav5Ly8TSy9R6ElrTlPeabz/AELtvGTqqlQhKrVf5Y7lzR9HvdSX3cPs9B9ZyW7Xg7TR9ItNNpKNGmubvJ7tn0zSez7lBNrhh9TjZOcoclzZrND4f9Jxub3E6z6LtE6SnBRWEeg9xVTCqChFbI4s7JTe7DPV0AJDUAAyAAAAAAAAAAeZPWRykl3APZywiCrP9D2circVUtgCCvWcW98Gg4k1Nafo97eOX7KlJr6mwvayzszgvitdyp8MuinvXqqL+ncjtnwQcjeuPFJI+K8RVJvTa1ST+epLMn9XlnK2y+c6biX/AOUz+qOYtpSjNSRDpfOrf1NstbSLVerqNnH1ran60Vu01gytONbOUlb6pRlDtKNWOUS0tdp2S/zMZRj/ABRyiab4U16HLc29GTf5qcuV5OkyqRvROB9e+8jTVpUl+ehLCf6EFX4bVo5lpHE2I9o1cr+2TCp8OLWrL1dE16rbvqqdR5X8yKfCvxAsN7W7pXUV05aqy/0MdDO4q8F8c0E/s2qUK2OijVeX/NGqp8RcWcM3qparb1klLrLo19T2917jXQKiep2dWEc7NweGdnw7rul8b6ZLTdSUJSawpNfNB+6YBYt7nS+OtMhPnhT1Cks0Ky6p+z8HffDfVqnofZLz5Lim/Sq08/hmtn+h8A9C+4F4wVBt/Z3V5Xh7Y9z6Zr2r/wCDXNhr9KP3Fzilc4fWWPll/Lb9CO2EbIcLJINxkmfabqE1D5Hyvsyk7qtvGbSkljPuarhbi6w1GzgpVFVi18rT+ZfU3j+w13zQuKfTOH2OH9lnBvkdenKr22ZU1VJ6QrWTw6qbl9GaPhGFxT0+paXEJJUKrjBv80H0wdNqMbacYYqwbUUnuVac6VNfiWFt1KsoWSbjwmJWQb6mmvdIjc3NCq5OHoVHOOO+zWGXtN4bjWuftc4U4yW0ZtbpEta8oQblzrbtkrahxV9n06U6Uk6VKL55QjzYRapw7bPe5EFl8EuRv6GnUbKnVlVqw5Zd+hptY1nT7KnNurDlinmUnhYPml/8T7Kpq1K0lVk4VJY5pv8Asa/jfQNQ12znfaRqVStRcfmo53j9Pc6NOFCC5laeQ30Oj4o17UYaU7zSLVXcMZfI/wAK98Hy7SPiJqNrr1aGrRnGFWX5umPYh4a4p1fhi7hYaopemnhTl0aOv4h4d0XjTT5XdhCFO65cyjDCUn7ryXVFIrb7m40210TVIO802lSpzqbyhHbckr2UYQajHddT49p95rPBmqqncyqOgpYTedvDPr/D2t2ev2PqUpxVfG69x0CNZdUuuEaPUqGYvKOtvaaeWo4fdGi1KnszVoycLqdLGdjQ1Y4mzrdVpddjn7u3xJtIrWE0OaKNNOXRFiFPMXtuZUabS6F2lQyuhXciZIr6M3Z65bXPRxfyv2fY/Q/w+1SM503KSjCusNP94+ExtYSjyyWPJ23AuqVFcu1nJ8yalBnme0+n/b8NpLnHmX8C11z28GfoVbownBPsU9DvFe2NKsnu1iS9mupfaPh804vn4Hf33LX2axoW1OrWhOTl2RDOvpq2VrUf8iasvW0anLvSk0/5mskj12paj9gdccemCjKMXu47t7rn+pSpq7xNyk+vmWnU07G9rNfyMHLS5bOjWXnbb+pWkRtexzP/AIhtfv1Qf/pRL9mXm/zLStdPkmoXLin2kYvSc/sa9Ga7fMVJbrDMeiytvpsSf7rgXcrsVL1i9h3Vkfdl+ZldWVxSXzUm/puVkuV4a3NlptavK6jTdWbhhuSe/Yo1589xOS6NmuoYeJHFhlYzaUm1s/TY2rnNzcJ+BnSMl+Ixp9EZ/mPPsmMs9jZyf2fSYRxiVRs11KHqVFFPdsv6xNOuqMX8tNYweh0nbFwsjL8WlBfF9f0RXuXFOMfmVabwT02V4k8Xg4dfmTNG00lJOrVf5Y7FZy5pyl7ssWsvT0ypPG85YKcXg9Tqku5xMaj0cn8WVKvanKS+BKmZ096kV5I4smtVzXEF5OZhrjyK4rxa+pLZyg2T6m83H0iio2T6nL/NyRVbLWt28efc/wCpmmOtqol3TXlVl7wKMnu15LumP7yoveJRm/nf1LOet9Lxn6yX6mlX30/kYxeJpv3J9Z3lSmu8EVpbZaLV/wDPYUKnssM1wH3mm5VT8EpfkzaxbWwZrXJroi/Rl6ulTj+5LOCg8FrSWpOtSk9pwf8A+/1KvZuSeW6JdLIuP6cjfK5Q4vJkdCcks5KV7Y0Kdz9pklip83M98P2LMPklKHtsbfh2la3F/SpXdONSMZZjzdMmmgNRz4483spPbfyZnJbVbmjVaVpV9qE+WztnyPZ1J7JHbaJwrZ2jjWuX9prrfml0X0Ogp0qdOKhThGMV2SM0vY+5YOjY+L7XWXmzzV2XZby6I8hCMViMUkZniR6dVcioAAZAAAAAAAAAAAAAAABjJkM31Mpy2IKks/QAwqTwma26qvfctXFRKL3NRd1NmAVbqrmXU+dfFus3GwoZ2bnN/wBEd3Vll7nzb4q1ebVrOl2jRbx9WylqD2x5E1C3sRwGtUvU0ytHGcRyjj6CxNI72vBSoyi901g4atT9OtOH7smjXR7N4OJtmwaaZs6GnxvKKhL039WarVeBalTNS1jUpTznMHsZerd0/moOL8MwfF17ps83FrXjFd4PKOwUjS1LLivSZ8tK4nNLonkkXGPFenwxWt5SUerTPpHBuv2PFFCVCrBTT2UpRxKL7bnt/pth9lr06sIc6b6x3fsY2QRquCeJrbi61qabqlBTU1iUZLdeV5OJrafV4S4/pU6MmqU63Il26nWfDHQfS4jv9Rj8lCnHlXl9yTX7H/HuOLNxWYKt60n/AAoxsG+Zn8ZbCFzo9C9jHFZU92vBs7GyjrfwwtqNyszcKcovvnHU8+JOK2mqxp/ixGlHHVyZuua30Xhq2tauYwo0k5fRIzsNz5fbf4hwzxDaRnVl9llNRw35Po/Gmuato8LK+sF6ltcUn6keuJLv/Jo0nHllaahwHDXKUJK4jKNRb7Y//UdJw/6WucD2k6qUmop/Nv2wxsZKvBXF1biHTrhKrGnd08xiu2e2Tl9Q4+1/T9Qp09QoulTVXkqbbEUtPnwrxhTuaXMrO8koTS6Rl2Z1nF+gW+qaVKtOis1o55sd0Y2DI+Jbe517SKWo6HezhKMc1qSeVKL/ADLyjjuE+J9T4f1aWm6xvSm/lnLo/qZfDzXLrh3XXpF25Ok38jb2wdP8SOHLfVLVXdGOE05KS35WNtguRFxdwfpOt6ZLUNPhCntztQ6xfuvByHDPEeo8KarCy1GcpUc4hN9MFz4c8UXWjan/AIPqcm4/hi5PaSOp4+4WtNTs5XNulKnUjmOOsGNhuScRaFpnFekyvbWMZTcczilv9UfNdLv9T4M1WNCrOU7Vy+WXss9zZcD6/e8L6ytLv5ydNvEJPo0fQeJ+G9P4kspVqUY/PDmwvcyClqllpfGmjevSjB3PL838R8uow1Pg3W1z+orRy2b7G14fur/g/iJ6ZdzkrZzxCb6Nex9K1nTdP4i0txrQjLMdngwzJHp2p0NW0+nWi1zOOdu5rdQivmRy3D6vOGtYemV+aVtNv0Zv+x0mpVMpTi9pkUmZRoNTprD27mjuqHU391iXU19aCy0V7CeC2NVTocvRFuhT7tGajjsZJ4KzROg47EljXlaX9C4i/wAM/m+hG2vcjlJe5HKKa2Zsm090fevh/qPNP0OZYqrm+sjt021v1PgnAOr1fSgoTxVoTWM+3Y+46Zd07u0pXEJJqccnw/tRprwsyTXuyPRY1nHWmbjTHGpTrW0vzwyvqaucXGcovs8Fuzq+jcwqez3GrUVSu5cv4ZfMv1I8l/atJrt8anwv4PmjEPYvcfB8yhjJ4yTYwnjB5zctEMluYtP2JDyWTO5gtaYlChc1n+WODVrrk2qTho9aaWOeSRqD0mq/wsTGo/p4vzb/AGK1HOc5euxYp9DNdSOm9kZnnWWS7pUee8jtlJNsiuKnPcTk+7LOjbRr1f3Y4KWMyO/mrudJx6v53KX0SK9ftWyflyJIsmis4IYImg90calcTUUTvkjZV+anp9KL6OWSrnJZ1Jvkow7KKZVTz0PSdo5L7ZwfyxivyRUxvc38zODLVhvdU15KiLem/wDu6f6/2KmjR4s+lf1L6m1/KqT9Bf73c2VZEt3LNzPfuQTe5HqcuLMtf9TNqVtWkXNLf+Ya94sqVV99NfxMn02WLyC/e2I7pct1UX8TOlkPj0ap+U39COPK9/Agl02ZZy6mktd4T3K02ixYtTtrii+65ka6BtZdZQ/xwkhkvZKXk0a5b5JbKfp3VN42zh/qQpnqlhprs8nCwb+4ya7F+FotWQU4NEt5F072on0zsWLSq6VenUi8cskzHVWpzo1oraUd/qQUZbNFvWK3h6lY4+fEvnzIqZcVSR9Vsaqr2tOqukoplhI5/gu79bT3Sk96f9joEffdJzY52FXfHxX6+J5TIrdVkogAHQIQADIAAAAAAAAAAAAAAAKlRlWtU7IlrSwmUK88LqAQ3U/Jqrqeclq5qZTNZXmAYTex80+J/wA2u2zw8/Z+vv8AMz6NKe3Q4D4o0W6+n3WUliVN+O/+5Q1Jb48ixjP+IjkXHmjscjrtD0dQnt+JKSOzpr5TRcVW7lThVSy4PDx7Mo6XYo2+jLGZFyhy8DQW7i3honubWjXt2uVyb7e5U/BMuUbinBZlnY9MclvYu8H6fS0OLdJc1atUy8e/t+hutb55tUKK5q9R8sdu5S0OaU5XVdY2+RexdhdUbarK/rvma2jHvv2+rMgkvVT0XR6en0pL1aqzUl3x3f6kXCNGnbWtxrt2vxRxSX8Pb+ZUpUK2s6jy3D5fUeazX5Y9oo2Gv3lOUvslvh0LZJNR/PPtFGDBT0+2nqOvwdfMoWz9Wp7c73SIviNcOppF1UhlRl8kPoje6ZaT0/S6dJ4+2XL5qj9m+v6LoaH4h007S3s4PLqVIwS90AWLu3//AKxo20t+anFf/iZfBmq63CToN59KUofyZs9eoKlodvaR6Rptv+WDQ/BZ8unX1Lpy3M0v5g2XM3vFumwutJuKc186XNTfs1ujY8MK41Lhu3VwlTTit5rfK2bwab4gatLTLSg4vCqycG/bp/5Nvwxeq50yMk84Sf6DY1NJxT8PLLUITvLO+rxv6EXKlFJYlJLPL+o+G+rrVdOq6deRar0k4ShLqpLsdjQqpPm3WHk+fcWRjw1x5Y6xbJRs9Vn6VXHSNVbpv67mDdml+JXC84yld2i5atJ89OS/sb74XcRQ1XTfsN006sFhxZ1t7GF5aycqfqRqRzt2Pkla3q8LcYU7mEXC2uJ8svZNsGp03xD4ThfWzq28eWrDeEkV/hjrtX05aZfPFei8ST7pH0PT50ryzUpyTzHLycVxVolK01GGs6csVYyxVivzRARt+MOG9P1uzfPHkljMZR6pmh4Rubq1U9NvdqtB8uf349mb+OoKpp0XGW+Nsmj1CUPWjWW0llPyay6G65mHEdvC7jJSxGcXmDXZo1iuOa05Kj+Zf3Jb68Ut+Y01zcrL3IWzeJnXqJtvJSrVPm6kNWs23uV51cleZPEldTyYSq+SrOph4Mef6kTN0WnV92Yeoiu5p/Uzp05zeFBshsmo82bpb8ja8Oah9j1Om5SxTm+WXjz+h904B1OLUrKTUXP54fXukfn+Fk9nJ4+nU+icGapNU6VRSbrUWv5r/k8T2nx6dQofA95I62FxQXtLkfcIPMS/eQ9bTKVbLbp/IzS2F1TubSlcU3mNSKZttKrJ+paz/DUWzfRPsfP9Cmp2WYVj2Vi2/wDUuhcuW2014FAwkixc29WhNxqRe3crs4d9FlFjhYtmiympc0YPYxyZswkt0RAu3Hy6HFfvS/3NP4fQ3F2v+iUV7s07WN30PT9oHtbVHyriV8Z7xb9WS0vqSLd7kMPYmR5ySLKRsbH7rTrmXackl/IpRlvubCk0tEnnvM1sUd7XPZqxq/KC/Vsr0dZv1J1gsWq5q8I+7wVoFzT/AJryl/qOfpkO8y6o+cl9Te57Qb9CbVM/bHFPaMUiCLwS3+93N+cEDLes295qF0v6mR462qRMmW9M3u4fr/YoxbLmly/zce/X+xb7PLfUqfijXI+6l8CvcPNeT8mDaZ7W3qSfkj7nNzHxXzfqySHuosWcsXdJ/wASMtR2vJr3ZBReKsW/fJY1ZYulLs45OzS+PRbF/LNP80QvlkL1RVku5Npf/vVDtKLTK7Yo1PTrQmvc5+k5PcZ1U/DfmSXQ44NENylG5nHGMGBc1emo3cpJbS6FJvBV1fH+y5ttXlJ/4JK5ccEzYP7zSk8LNNlSk0u5Z0uSn6lCXSccr6oqSTjJrphnQ1xLIxsfMX4o8L+Mf8bEVPsuUGdFwhe/ZtRjTk/lqvlO+i8nym1qOEozWzTyj6dplZXFnSq95RR77/TzPdmNPFl+F7r4M4+r08M1YvEsgA+jnIAAAAAAAAAAAAAAAAAANRcT6mtup7Fm4n13NbdVN+oBWr1OpQqz6ktxPd7lKpJZ6gHrkc18RLT7VoDqRTcqE1NfTudBzbEF5TjcWlWhLdTg44/Qivr7yuUfM3rnwSUj5VS3gn2IL+j61GcP3kS0OanOrbzWJ0puLX0JJrKPK403F7+R1ZLiRwVxScJST6p4ZDSjFzTnuk+hu9dtnTruoltJmmrx5HsezotVtamjiWR4JbM2kblRo5lhJbpN9PJ5Qrfaasak23BP7uPu/wB5mknKpVlGKfyt7r3NjSqxoRSzmTWH/wAIlIjoaNy7S0VvaNTua7+V917yfgsaDbUFUjcVZN0KG6cukpd5M01hUh6Um21Vk8Skuy9kbvTISvKkaC+WjDeaXR+ADdWs1cTnezTimsU1LtH/AMnO3tNalxfZ0fxQoN1J/wCx0V9JU7eTWIxSNDw2/wDNV9QkvnqyxD/StkAbnXF6lOu1vGlDk/XG5zfwgi42moza2dzNHRawnQ0qpl/Nhym/dnP/AAxbp6bPPWtVnP8A/L/wDJJ8ULH7ZoM4wTc4fPH6o13wu1irK1o0ZtOKTg89V4/odrqlCnXsKik1l7crPmvDFB6VxXc2UpfLzepBeH1BlH0TVdVjp9OVxeyp0baDy5zlhNf8nMcQXuncX8GagtJq+u7WXr0JuLTjUp/M0s+6TRpOItC9W5uKtWtWrtyco88s4XsUvhbXdhreo6bUwqc4qpFY2e+Gv5M1Zsj6NwNfq80ejOb3dNPdkHG+lWeq6XVpZSq4zCS7PsazhuEtLqXFk20qcpcv+l9CzdXUpNpvYyjDR5wre1YaSoVXicI8sk33RndXbq55n8prPUjT53F4zuynXuZPo2YYSLVW5p0afJF/KuiNVeXrlshOM5vMnheSP04x/DBzz09ilfl11L2mWqsec+iNbcTqTlsm14K1aMkllM3TVZdOWK9kiOpz7qoozT7NHMnq9fgi3HBkl1NBUfZFebZvpUaT3dJGDp010px/kVrNaqXRMkjhS8zQxo1qsvkg35wWKdhN/tJqP0NnN/K0tvoQpnMv1m2XKC2LNeHFe8R07ShFrZya92WUlthJYIlLcli9jkXX22v2nuXIQjHoj0u6Bd/ZNRi5SxTns/HkpN4Ipb+COEnF7m7W6PuXA2rQhcS06q+XnXPTz0XujtabW7T39z4Pwpqvrwp05VHGvb43/e9n/sfZ+Grxavp0bmjLM18s44xiS6nkdV0S6eTxYsd9+ZJG1KPtHRW9++VU7iCrQXv1PatnZXO9CuqLe/LNlBwr0/x05Je5j6m/0IJark1rutQp41/Utn+fUwqovnVLb4dCevpd1Btxj6kV3huinKhVTzKMlj3RZjdVofgqyj9CT/EqyWJqFT/UiLh0fI6SlX8ea/cynfHm0meXEf8Ao1Dbv3NTOmkzZXl+69uqPoqCTzlM189zGu5NF+RB0S4oqKW/TmjbHjKMfaW3MwjDyZ9jxbGSe5w2TrqX57aMvM/9ypHBcqb6HH/X/uUYPc9B2iX8Sn/7cSrjdJfFkq2Zd0xr7bS/1f7FJMtabte0/qU9D/8AEKf/ADL6m9/3cvgZ3Um7io/LIotszu3i5mvJgjXUU1l27/zP6mavcRnEvaP/AO5X0f8AYpQLelvF0vKf9jp9m/8AxKn4kWV91Iq1X95L6mDZnW/GyM5WV99L4slj7qMoyWfJc1JZp0J+9NFFJmwuvm02jLq1szt6U+90/KrfglL8mV7uVkGUGtjCS9jMxk8HnOLZpouIs6j95Y0K/XZpmuxlbmxtc1bCtRxnl+ZGvO52iirZU5a6WRW/xXJ/QrYvs8UH4Mksqjo3FOf7rJdShyXLaTxLcrGxuF9p02FRL5qbwzGAvtem3Y34oe3H6MzZ7FsZeD5Fam8RR3vBtz62m+m3vB4X0PnsG8YOq4GruN86TltKPQu9iMx4+qRXhPkQ6nDjob8jtluDxP2PT7seWAAMgAAAAAAAAAAAAAAA5m6kss1VzLOTYXL3NVcPcAp138zKlSWSavLqVJMA9bMc5PMmKluAcZxvpitb5arSjiFX5aqX73Zmii8o+kX1vSvLWpbV1zQmsfTyfPLuyradeSs66fNF5jL96PZnn9QxXVZ3sejOhjWcS4X4Gt1W2Ve1nHHzJZizk61PLcZLDR3c0mc5r+nyhN3NKPyP8a9mW9KylGXdS8ehHl0OS40c1Om4yzhkfzSqLLxj+hsMprDIalLfKR3jnbFijXjFxjjD/L/yzdafqTtliEsR/ucvKE1LOTP1KkYbPoDU6fUdancJ26eE+r9kWtGuqNGUJVMbL5U+3scpaSf45/V+SxTuJOUpy7syYOk4o1mj/h1SnFYck0v1IOEZK1tqb2xTguvv1Zzd7J3FSlFttZ3NpCv6dGNOLwurDB0N7qfqtyjyqXZ9zjLrnjxNb3b6STg/7/7F/nbeckFzFzlTklmUJZBtsdOtOqXttGopxjB7Ns5+54cjpmv2+p291TnhSjUj4a/5J1qNxG3VGNVxjnOEQSqynu5OTNWbIv6hcRncxqw6uCUn5KVWtJt9TKnSqTSbXKn3ZLC3jF5S5n7srW5VdXVk9dErHyKUYVavX5V7sy9HkjtHml7voX+TK3R5KKwcPL1ScltHkdGrEjHrzNe6Od5bs8cUti3UWEV3HBxp2uXNsuxWyK8lsyrUWHllmvnOEU7lNrKfQp2SexukRVHuytN4zue1amE8sqy9SeVBNt9kUvak+RItjOctiN9M5RctND1m7SdO0movvJYNvbcCX9xvc3UaK9o7l6rTcizpFkMsiqHWRzUpJbZWTyFV4+VOT9kss+kafwLpdKKdxKrXkuuXhHRafo+mWjXoWVGOF15cv+p06uz9r+8e36laepQXurc+T2Gka3qH/t9Pq4fea5V/U6LSfh/f14qpf3cKGesIbv8A4PpMYrZJYX0JFE6tOh41fOXMqT1C2S5cjmdN4K0mw+8pqpOvjCqSk/7F3h6+qaTqsrO4coKrLHNF4+bs19Texjnqa/X9OV3RjVpxXrUt4+8vBU13RY5WLtStpR6bcjbEzZQntPmmdjaanc0pcrmqi7qe+TYUr60rLFxbRhnvBHHcHX1HUaE7W6reldUNlnujp6dmpx+6uKb+rPm1Vet8PhZHyls/8nbksdPyLit7Gu5Ojd8j9pLBg9LrPeMlJdmpIhjp1zFZfK8ezK8pyUsKUo422bKOSseqSjm4bg5eMXt9dzKUnzrnuZXVGtQnyVI4ZC1tuX9bm3OjJ9XAoKWdjiatiQw8udFfurpv16blimx2VqTMWEZ8qbGMHO3JUX2s6I13VQox6l61+fSa6f5Zp/0KUUd7Xfajj2ecF+m5Wx1s5L1JIJFvTsO7pZ2+YpwW/UtWLxeUv9RS0d8OdS/6l9Te/wC7l8DO+io3c15IkWNSWLyZAl5JdXXDnWr+pmKudaMky3pjzeQXh/2KZZ0ttX1Ne+V/Qs9n58Oo0v8AqRHk86pfAgrftJfUwJbpctxOPsyJlTOjwZNkfJskr91HklubClmppM1j8E/6Gv7l/T8+hXjnZxydbs5LivnQ/wAcZL9CHJXsqXk0UWzCWcmS6GMnlnm31LiLGmVfTuVFvaa5WVrqEqVeVNrG+UYtuMlJdnktaulJ0rmL2nHD+p6Ctfa9HlHq6pb/ACl1/UrS9i/fzKZf0qabqW0+k4vH1KEWZU5uFSMovDUsnN0jM+xZcbH06P4PkyS6HHBoylB067hLszacP1vS1Og1LlXMslXUoKXJcw/DNf1I7GbjWhJdUyzdU9L1RKPRSTXwfNfoaL+NTz8UfV4fhXuZEFlU9W2p1P3opk5+h65qcVJeJ5BrZ7AAG5gAAAAAAAAAAAAAAA5G6e7NVcvdm0uu5qrnqwDXXD3K0uhZroqzz2AMM4POY8bMWwA5Gt1/T6ep2vJtGtDenP28fQ2OxhLBpZBWRcZLkzMZOL3R89qwqUakqNeHp1YvDT7+URSSalGSypLDXg7XV9NoahS5ai5ai/DUXVf+DkdStK9hLFdZj2mujPO5OHZjy4o80dOq9Wcn1OP1nTKlpJ1aa5qbfbsa6Evc7d4mt0pJr9GajUNIoVpOdJ+nJ+3Q6eJqkeFRt/Mq3YcusDQ4jLqjyVKL6ItXGm3VB/LF1F7xRCre4XWlP/7WdeF1c1vFlJ1yjyaMFTjy4wexhjsZenU/cl/Imt7O8qpzjQl6cdm3t/I344+Zjgb8CFQWckiLVOwrze8FBeWTU9OSf3s3j+EhllUx6yRLGicuiKce+6R6o1JPEIuTNpSs6EUvlcn7snhSUV8qx9CjbqtUfd5livBm+pqIWNapvUah/cuW9pCnh8q5vdlzlWT1pHKu1O2zkuSL0MSECL00xypdiXKI6tSEI7tZOfK3nuyfhI54yQTaz1FS5glnO5HSjd3MlGjbVGm9pcuxB7dr2itzO6jzkYV5YWxU9VzaUYynUf5YrLOjseGq1Zqd3Uyv3Id/1Oj07QKFt+ChCHnq/wCZ0KNHunzsexVszYRfs8z50tM1W7ly0bWcU/zT2Rcs+Dr+s/8AMV404/w7s+mU9OpKWWmywraK6ROjDRceL3lzK0s619ORwtnwZp9KSlVhOs/4+n8jbW+j2lt+xt6cPpE6OVHboiGVHHY6FeNVV93FIrStnLnJ7mrVOMVjBkorHQtVKPchcWngmNep5GJLGJ5GJLBYRkwZRWxnFHkeqJUAEjJLdHhlEA5/XrSrY3kNVs0085qY7P8A4Z0GlXlHULWFzTfzYxOPdMynGM4ShOKlGSw0cu3ccP6wnFyla1Ht7Nd19UfN+2XZ+VieXj9fFHd03M3/AIc38D6Nok1GncVOijTxuVIzcsvyeWten/gtS4pvas1jfsRwmnDK9jxGsSnCjEpl1Ud/zZ06NnOcvU2msb+g/emUEXtVebazl1bplKKKfaNf9wm/NR/9qGN92vn9Qnh5PW8o8YxucIsGy0z5rO7pvpjKKPNvhF3RfmqVqXaUH/Qox6/qeh1T29OxLPSS/J/5K9P3k0Sons21dUnjbmRBElpS+aOH3RycCfBk1y8mvqS2LeDRc1ZYvJZ9irEtatl3Kb6uCZUidLXo8Oo3fEjxnvVEzRNaS5bulJdpIhTMqT5akZZxh5INNn3eVXPya+pmxbwaJtSjy3s/O5Vl1Luq/wDu8+8UUZdSzrse71G6P9TNMbnXH4HqLmlyTuOR94spLGSS2n6deE0+j3NNEyO4z6p+G5m+HFW0Y3C5K0o+zIW2mW9Sgqd3Ub3zuinJ5WUQapj/AGbLsq26N/UkplxVpmLb79C7Q/zOlTpP8dKXMvoUSfTqnJd4bxCa5Wi72fvjDK7iz3bE4v59CPKi3HiXVcyBM9PbyHpXU6fs9jGL8nEyKZUWSql1i9ixCSklJGxsOWvbztpdlmBXpp05uL6pkVKtKhVjUj1W/wBfBev6SVSNxT3pzXXyd6//ALhpsbl95Tyl6x8H8ipHeu1x8H0+J9B4cqero9vJ9VHBsjTcIyb0inHOybwbk+5aRZ3mDTL+lfQ8vetrZL1AAOiRAAAAAAAAAAAAAAAHJXS3Zq7lbm5uoZzg1dzTfsAai4XUqzWxsLiHXYpVI4QBVkRyZNOJE4gEaluYt7mePBjJddgCKTyQ1qcalNwnGMotbpomkiKT7GGkwczqnD7U5VrCo1n/ALUun6M5+4dS2qOndU5UpL3Wx9Bm9ipdUKNxDkrUoVF7SWTmZGmQs9qHJ/oWq8qUXtLmcR6kWvlkmY8z8HQXfD9lPmdKMqLa25HsUpcPVYRzTvOZ+0kc/wD2/Jr6cy39pqkaxtPqjLnbio5eF0RPU0nUo1Hj05R7NMf4VqHtBP6kfcZXThZvG6vzK5jJbk8tL1Ls6f8AMxlpOpTWPVpU379TEcPJl+EO+teJE2lu+h5zxa2kl+pZpaDVcs3F9Oa/dgsIuQ0myg44oOTXdvJYhpd8l7WyNJZlcenM1PqQXSXM/CMc3NR8tG0qS8vZHUUbRJYp0Yw/0rBbpabWqYXK/wCZYWkRfvSIJZ78EcnT069n1lCHhvJJT4edZv1q9ScmsYgsHcW+jxTTktzY2+m0oYxEsx0zHj1W5C8q1+Jxen8M0I4f2dN+8tzoLXRqcFhpP9DoYW0UsYJoUIrsXYVwrW0VsQOTl1ZqaFkoYwlj6FhUH7I2Ko+0T30X7M3MGudFrsjH01jobL037MwlRW+wBrJ0NmyCdHY2rokU6PgA09Wl4KtSjk3NajlMqyo+6ANao46npZqUt3gryTTAPYkkSNGaYBmZRMUZRAM0V9TsaOoWc7erlJr5ZLrF+5YTPUzWUIzTjLozMW4vdHM6TqNfR6z0e+5lRzmE29vDOohNci5ZJxa2a7mt17SqOp2yjNJVYfNSn+7LoajRNUqWtz/hOoP06iyqbb64Pkna/QLcexZFfOH0PS4GYro8L5S+p393PNhZvP5CBSIatSX+G2fzdvY8ozysM8v2jj/1fF5xj9EW8b7v5v6k+dz0xXgyPOE5d0ifJqFPfaWUyC5ioXU4romeWk/Tuqc/3ZE+qw5L+p5Z6KS73Q4+cJ/Vf4K69m9+q+hFHqZx6bdTBGXToefg+GSZYZsNUy6VCp3lFIpl2+XqaXb1E++CjE9H2nilnca/FGL/ADRVw/u9vIzMspRefYwj1DycOuW0kyxJci/qqTjSmu6RRayX7pKWn0ZJJ42bKHY73aaKed3i/FGL/NFfDe1XD5GEg5NJYHVs8l1ODCTi00WGXdV+9o0K8e8d35Ne+hfpOVbTJ08Z9J5Rrs7Hoe0kOO2vKXSyKfzXJlfEe0XDyZi2zHncWmuqewkYs85CThJTXVcy11NhqeKlKjcxX4lhlJMt2LVa0rW8vxJc0Sktm0+qZ3O0MFbKvNh0tW7/APMuTK2K9t634Ejfk2mnTVe1nbS3l1izUk9lVdOtGSe8dynoudHEyP4nuS5S+D/Ymvrc4bLquh9B4HlL/DqkJfkng6A0HBtSFSjcShsnNPBvz73ocIwwa4we6S5P03PJZe/fS3AAOsVwAAAAAAAAAAAAAADnq8eprbmm02bu4p9yhcU3h7AGir0yhXptG7rU8Z2KNekAaicSGUcF+rT64KtWDXYArNYMWsolkiNp5AIZxIKsXkttZRHOG/QAozRDMvVKDe5BKhL2AKcjBluVvL2Zi7Vv3AKco5I5RZso2jz0JI2ngwDUelKXRGcbOo3ubunZ/wAJZp2uH0Bg0VPT5PGUy5Q0xZTaN1StvBYp23gyNjV0rGnFbIuUrbHRJF+FuvYmp2/gGSlTt+mxPCg8dC7G3fsyaFtsAUI0fBmqKNirbwZfZ17AGu9PyPT8mwduvYxdv4ANdKnt1MHT8mwlb7dCGdFp9AChOmRypPtubCdPwQypvPQA1tSjuVqlL3Rt50/dEFSl4ANNVoPdop1afU3danjsU6tDOWkAaeUXF4YTwXK1HwVJxcXgAyT2MotkUXgyyASt4MkyLJnFgEie25qOIdJhf0XVpcsbqn+CXv4NrkZWOhDfRC+t12LdM3rslXJSiaXhzXJXVBaZdJxubd4TltzL/k3sJtPllszn+JdF+1SV/ZSdO7g02o7c+P8Acm0XVft1P0q3yXVP8UcYb8nx3tdo2Rj3qx84bbJ/A9NgZMLYcuvidJSmTxeUa2hU7PqXKU8o8JKOxfJ1nmWMZNhqy5vSrfvQRrVvLb9DZ1ourpdGaf7PMX/M7+lLvsDKoXXZSXyf7MrXcrIS+RSjLDJE9tiIzXRHnF0LJsrdc+jzTeeSpn+hRWf0LmktSjWovvDK/Qpz2ePY9NrH8bExcjzjs/iirQlGc4+plnB6mYpiPU86i0zYQ+fSpe8ZZKKZd07E6daj+9BvBRllNr2PTaxHvcbGvX8u3zRUoe0px9TyW0jDO5k3kwkeb3LSRd0uWK8qbf7SOCjXi4VZRb6NntKcoVY1F1i8lnVoJVlWivlqRUkejl/1ejb/AIqpfpL/ACVo+xf6MozRiZGMn4PM7lncmsqyoXMJvpnD+jMtRoehcyx+GXzIqdzY1H9o02M3vOnt+h6LA3z9Psw/xQ9uP90V7H3dqn4PkyjFmcMqSa6kcSWmsySPM7Ftn0LgCP8A0udT96f9jpDS8HU5U9Eo8yxnLN0fpLQae506mH9KPGZUuK6T9QADrEAAAAAAAAAAAAAAABr6scxwVK1PKNjOPggqQANNcUuuxRr0flZvatLL6FK4o77IA0FSiVq1LK6G7q0N28FWpQeegBpZUSKVE29W336EUrdgGr9HY89E2f2fwefZgDVyovB4qDx0Nr9mCodsAGpdv4Ctt+ht/s/gK3fsAauFt/CSwtvBso0GSxt37AGuhb+CWNDfobGNuyxTtVtsAayFv02LFK2k+iNnSt17FiNul3ANZTtH3LMLbwX4UNyVUQCjG3JFRSLqpGSppAFP0l7D0EXeRDlXsAUXQRi6CNg4J9jzkXsAaydBEc6CNpKmmRyp+ADT1KL7oglQwzdzpZXQinQyugBo6lH3RBOng3NWh4KlW3edgDVVKSfUqVaGDcVaLXUgnS8AGjr0fBRr0E1nB0FahlFSpbPABztSm4voR4aNvXtm+xQrW8o5AIFIzUjBxaCeACWMsvqSLBAmZxnsASJ47ml17R5V60NQsnyXdF8y5XhSNupGafcr5WLXlVuqxbpklVkqpcUTX6VqNO/g4v5LqH7SGMfqbO3q5XU1Gp2E5Vfttm1TuIrfC/Ee6Vfwu3Up8rpXNJ4nSffyj4l2g7OW6Xa2lvW+jPUYmZC+PqdDTnlZNxprVTSril3XzfzOdpVenU3WhVY+rUpt7VIFHs77Ob3b6TUo/mv3JMpLu9/LmRRS6exnjuYrapJezwZHnbIcEnHyLC5os6bLkvISbwnmP8zG7goXVRJYXMRU3yyjJdnku6pBfd1k9pxyeio/6nRZx8a5b/J8iq1wXp+a+hUSEse+ApbHuTgosljSZqN7Df8AF8u/kiuoOFzUT6czwYU5clWE1+WSZa1WOK6l2ksnpIyd+iy865/oyruo3/FFJ7GPNltex6zzG+TzRb2GFsXZxdbTE1vKnL+hSzsXdKqJVnSl0qLH6noeztsXfLGs921OPz8CrlRaiprwNbhZweNFm5pqnWlHG6ZBLZnAvqlTY659U9izFqS3RhgtabUiqzpVHmnUTi1nuVZZEdsNbSTymWdLzXhZULl4dfh4mlsO8g4mdek6VecOyexnbrmrQXdvYnvI+rb07mPdYl9TPQrd3GqUKSWcyRez9M4NSVNfuzacfgyOFu9Lk+qPp2jU/S0y3h7U0XDGmlGEUuiRkfoSmtV1xgvBJHkJPibYABKYAAAAAAAAAAAAAAAIpR3IpR3LDRi4pgFOpTyVqtPc2U4bbEE6eQDW1aKa6FadDwbeVLYhnSz2ANLUtnnZEU7drsbx0V3RHO3iwDSeh4HpeDbyts9EYu0YBqfRT7Hv2fwbX7IwrVgGr+z+DKNvnsjZq2aM1QwAa2Ft4JYW/hF9UTONEApRoLPRE0KOOxajR3JFS27AFaFHfdEsaa9ixGCRnjwAV1BdMHvJ4J1Hfoe8vgAijBd0e8kfYlwMIAi5I+w5F7ErSPMMAj5F7HjgvYlwxhgEPpsxlTLGGeOLAKkqeTGVLYuOOxhysA186WX0I5UE92jZOnn2MZU9ugBpbi3jjKKVS2bWyOhdCPsQVLdJ5SAObq0JLqitVpPHQ6WraproU61l4wAc3VoZ7FOvbeDoq9q49inVoeADmLi2eehTqUpR7HT1rdPsUbi09kAaLGDzJer2rWdipOnKL9wBFmWSI9jL3AJs7Gs1ewqVsXVpJU7iG/8AqNimG+xXysavKqdVq3TJKrJVTUovZlDSdThcJ0biLo3K2eej/wCGdBpFV076lz95Yw+5odR0ynePng/Sq/vLv9SKw1OdndRsb+MoyjjkqN/390fJtR7N3aTmQyKucFJP4cz0VOXDJqa8TrrmSp3lSGe+T2M031Kt/WTuY1E1icExTq/LzLueS1zGVOfbFdN918+ZcplvWmX0+6NjGPr6SnL8dJ4NPTqxZttHl6kqlHO049PoXOzUlLIniy6WRa+fh+pple6prwe5S9j14PZrE2vZmJwpxcJOL8CZPfmerHMs9C7dtVtNo1m/misMol6yXq2VWh3W6PQaA1fG/Ef44vb4rmivkLbhn5M17PBncHm+nIudTzp+plCTjJSWU08o8xgG9Vsq5qcXzT3NZJSWzLmqRUvTuIr5Zx7e5Ql1NnaYr6fOg/xU919DWSTWfB3u0danZDMr921b/Po/1K+M2k634GMkjF+DLLB5oslvTZOpz20+k1lP2aOk4A09u4qXtSPyw+WH1OWsYVKt5Tp0VmpJ4ivc+q6NZwsbGlbxx8q3fu+59V7G0LUlVbbH7ndJ+e/RfLmcbUrO53UX7xcSwkj0A+o9DgAAGQAAAAAAAAAAAAAAADzHg9ABg0YSgn0JWYsAilAwcCwYyQBXdNexhKmvYsMwYBB6Rj6ZZHKgCt6Z6qaLHKhygEHpo9VNexNyhRAIvTXseqC9iXlPcAEaghyEqRko5AIcHuCRrB5gAxSGD0AHmAegA8DPUe8oBhgyx4MsMy5fIBHjweYJeU95X7gEPKjxwXsT8j9zzl8gEHpnnIixy+RyIArOC9iKdIu+mjGVNgFGVLbdEM6Ka2NjKCMXTWADT1bZS2wVLiwjLosG/lRyRyob9ADla9hLHQoVrRxlhxOyq26axgq1rKMuwBxVxaJ9jXXFi98I7itpieflNfc6bKP5QDhq9rJN/KVZ05Re6Ozr6f8AwP8Aka2405Nv5QDnE2jNSReuLBpvlyU6lGcX0YAUiC9taV1TUKkc46PujPLi9z3nyaThGyPDJboypOL3iaqjXu9IqOFaLubV7Qf7v/DN5YXFG5pc9tVztlwfVEEuWUcNJp9UzXVtOlTuVd2FeVGpFfg/LI+e9oexfft34j5+X7HaxNT22hb+Z0dCpFbPbcv2Nd0rmlVjLCjLf6HM22qUsqlqCdvWb2l+Vm3hnkUovmhJbSW6Pmca79Oyoysi04v6HZ3jODW/Jm81DEbltfhe6K+Ue3lWNWyt6yaz0byV1N46lrtFQqc+bj0ltJfMixnvWvyJ0y1ptT07uCeylsyhGpjqZeq1JSj1Rz9Ny3h5ddy8GSWw44OPmS3tL0bqdPsmRp4Rc1VxqKlcrbnW5RysFjXMRYmbOEeje6+D5oxRZx1psyzlA8WEMo5KJyxY1vSuIt9JbP6DUqXpV3jpL5kV3NY2Rcrz+02EZp5lTeJHptPX2/TbMR+9D2o/3RUsfdWqfg+TNejyWIwlNvCRHOol1ePJuuGdNd1dQr14t04P5Y9m/c52j6RfqmSqa18X5I3vvjRDikb7gbSIwUdRrw+9kvu0+sUzsolSyp8tJL2LkUfoHTdOq07GjRV0X6+p5O66V0nOXUyABfIgAAAAAAAAAAAAAAAAAAAAAeNHoAMWjw9keAGEkY43JceBjwAR8r9j3lZmADDlZ5yMkABHyM9UDMAGPKe8u2D0AHiSSPUAAeSRGSmHL4AMMDBny+By+ADFI9SMor3RkkAYqJ6kvYywepAGJlg9wADzB7gAAYPMHoAPMDB6ADzB5gyABg4ox5ESNHjQBC4nnL4JWkOUAgcH7GEqSe+C1ynnKgCm6S9iKpbRn1SNjyI89OIBpKthBv8ACUbjSFJ5SOmdLc8dHPYA4a60drL5cmputKcfxQwfSatsm+hXq2FOa+aKf1QB8oudKeXhGvr2NSk3tlH1ivotOecQj/I1l1w7zJ8qQB8wlGcXuj1S2O0u+G57/IzUXWg1IZSg1+gGxzt1QpXFNwqRymUaFHUNMblp9y508ZlSqLOfob6tptek9ot/UrTo1I/ig0c3UNJxNQjw3w39fEnpyraX7LM9O4ht69lG3u4/Zq/NnlfTP1LtKo5JOMoyj7pmkurehXf3tJSku+NynO2vKElKyuHFL8sn1PB6/wBj8q9RdDUlFbLz29Tr4mpVptTW251qn3MvUwjlLTW9Qtp8t7Qc456qP/BcocQWkmlPng8757Hz/J0bLxm1ZBr5HWrthP3Xudfb1VW02dOXWm3JPwympruzX6VrmnJ1PUuFBSjhppld6rYOpLluo4baSezOjqsftGHj3fjS4WvHl0f5ENKcZyi+huJVI+5j6i9zUz1O0i2lWTa8dSCprlpFLEXJ537HBji2z5RiyzujeSqpdyS3v6VuqnO8qcccq6t9jnVeX+oSjSsbWpLf8SjhP9WdRw5whf3EoVbtHtOznZnUnfG9LgXr+xzs3LpjHhfMw0mynf14zkmoZyos+jaHp6o0o7YRnpGhULOEU45fdm6p04wWEfVNM0rH02vgpXN9X5nByMid73keUqfKkSAHTK4AAAAAAAAAAAAAAAAAAAAAAAAAAAaPMHoAPGjx9DIxaAPAe4PAAAAAAAAAMAAHqR7gAxB60MAHgwZJHuADFI9SPQAAAAAAAAAAAAAAAAAAAAwADFo8wZjABgDJoY8AGIMseAkAY4GDPAwAYYPHFPqiTAwAROmvYw9FMsYGACo7SL6pFepptGX4opmzPMIA0VfQrao8+mv5FGtwrbVfy4+h1mF7DCAOAvOCYTb5F036GurcDVZRaSPqGF7HmF7AHySrwFdtrD28lSv8Oq9SWXSg/wBD7NhewwvY1nGM+UkZi3F7pnxD/wDi+729Ncj90zOl8KbuUlKrVls8ptrZn2zC9hhexVnp+NLrWvyJVkWpbcTPlFr8KaeF9ouJPHk3mmfDXRLOXM6SqP8AieTvML2BJDEoh7sEvkau2x9Waqx0PTrSKVK3iseDZQpwhFKMUkZgnXIjPMHoBkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH/9k=" alt="ALINE Cushion Insoles" style="max-width:100%;max-height:240px;width:auto;border-radius:6px;display:block;margin:0 auto"></div>
  <p class="prod-card-desc">ALINE's most cushioned model. Combines the original patented alignment technology with an extra memory foam top layer for high-impact activities. An antimicrobial coating keeps them fresh through hard use. Best-reviewed model in the lineup.</p>
  <table class="prod-card-table"><tr><th style="width:35%">Feature</th><th>Detail</th></tr><tr><td>Unique Feature</td><td>Memory foam top layer — extra cushion for high-impact &amp; all-day standing</td></tr><tr><td>Antimicrobial</td><td>Special antimicrobial coating maintains freshness during extended use</td></tr><tr><td>Heel Cup</td><td>Cushioned heel cup with gel padding; impact-absorbing at high loads</td></tr><tr><td>Best Activities</td><td>Running, tennis, volleyball, long work shifts, healthcare/hospitality workers</td></tr><tr><td>Lifespan</td><td>Replace every 6–12 months depending on wear; subscription available</td></tr></table>
</div>
        <div class="prod-card" style="border-left:5px solid #111111">
  <div class="prod-card-hdr">
    <div>
      <span class="eyebrow">Model 04 · Cold Weather</span>
      <h3 class="prod-card-name">Climate Insoles</h3>
      <div class="prod-card-badges">
        <span class="badge badge-black">Cold Weather</span>
        <span class="badge badge-gold">39 Reviews</span>
      </div>
    </div>
    <a href="https://alineinsoles.com/products/climate" target="_blank" rel="noopener" class="prod-card-cta" style="background:#111111;color:#fff">View &amp; Current Pricing ↗</a>
  </div>
  <div class="product-img-slot" id="slot-climate" style="background:#FFF8F6;border:1px solid var(--al-border);border-radius:10px;padding:14px;margin-bottom:16px;text-align:center"><img id="prod-img-climate" src="data:image/png;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdCIFhZWiAH4AABAAEAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAAABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAAAABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAJlAqADASIAAhEBAxEB/8QAHQABAAEFAQEBAAAAAAAAAAAAAAcCAwQFBggBCf/EAEgQAAEDAgQEAwUHAgQFAwIHAQEAAgMEEQUGEiEHMUFREyJhCBQycYEjQlKRobHBFdEkM2LhFkNygvBTkvElohc0RGNzg7LC/8QAGgEBAQEBAQEBAAAAAAAAAAAAAAECAwQFBv/EACcRAQEAAgIDAAEEAgMBAAAAAAABAhEhMQMSQVEEEyJhMkIFFHHB/9oADAMBAAIRAxEAPwD2WiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIhXy6D6i+L454aLuIHzQVIrYniuQZGXH+oKoPB5EH5FBUiA3RAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQLoShtzUOcauPWV+H/AIuHQPZiWMhu0EbvLEe7yP2Vkt6EtYhX0lBRvq62phpoIxd0krw1o+pUHcS/acyRleR9NhQmxyrbsfd9o2n1Jtf6LyDxL4sZvzpiE1RimLzGnk2bTRHTE0dLDr9VHM9UZH3e8g9St+siPSOb/awzvilPMMKjpMHiBsNDNb7fMhRbinGbiNWEmbOOLkE3DW1Dmj9Co1dI8yGxJP7ql0jjuU3+B2juJWdxI+Y5sxxznHU4itk5/mtlScZeI1PFGIs541qYdr1TiPrcqOnzukf4jrAkbgDZV0nur5XtqJHRN0nS4C9ndLpuo9CZR9qbiLgssLa+sp8Yp/vNnjDXf+4C6nHh77WOVMaqPdsw0M2DSab+KPPHf6XP6LwOwgscS6zh07rILZImwvDxaUXBDuW9t+ympVfrHlPOeWM10janAMao65rhfSyQax82ncfkt9cd1+TOWsYx3B8S8fB6+qppoRr108hFwOvYr0Zwk9rLG8ObFQ51omYnRt8vvkQ0zD5jkfoAp6q9touR4f8AETKWeMOiq8v4tBOZG6jCXASM9C3outBus3gfUREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBWquohpaaSoqJWQxRtLnve6waO5Kpr6qCio5qupmZDDC0vke82DQOZJXiH2lOOtdmysnwHAJZKbAYXFjpI3WdVH8RI+72HVaxxt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pIZL87sC01bkXK1Xcy4RACerRZdKivtTThKzhTlKf4aWSI/6X7fssd3CPLZ+GSqH/eP7KQ0V96mkfwcKcvRSB+uof6OcttR5EwOmcHNhLrctW66pFf3MjUYVJhVFSgCGnjb9FmNaG7AABfUWLbSTQiIiiIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiXRAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREHxERAuvqIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiIP/Z" alt="ALINE Climate Insoles" style="max-width:100%;max-height:240px;width:auto;border-radius:6px;display:block;margin:0 auto"></div>
  <p class="prod-card-desc">The only ALINE model engineered for cold-weather performance. Uses the same patented alignment tech as all ALINE insoles, but adds a heat-reflective top sheet and memory foam to keep feet warm and comfortable during skiing, snowboarding, cold-weather cycling, outdoor work, and winter sports.</p>
  <table class="prod-card-table"><tr><th style="width:35%">Feature</th><th>Detail</th></tr><tr><td>Unique Feature</td><td>Heat-reflective top sheet — reflects body heat back into the foot for warmth</td></tr><tr><td>Comfort Layer</td><td>Memory foam for superior cushioning over long cold days outdoors</td></tr><tr><td>Heel Cup</td><td>Cushioned gel-pad heel cup; shock absorption in cold, hard conditions</td></tr><tr><td>Best Activities</td><td>Skiing, snowboarding, cold-weather cycling, winter hiking, hunting, outdoor work</td></tr><tr><td>Shipping Note</td><td>Continental US only — escalate AK/HI/international to CX Fulfillment Supervisor</td></tr></table>
</div>
      </div>

      <!-- Accessory / TABs Kit -->
      <h3 style="margin-top:28px">Accessories</h3>
      <div class="card" style="border-left:5px solid var(--al-danger);padding:20px 24px;opacity:.85">
        <span class="eyebrow">Accessory</span>
        <h3 style="margin:0 0 10px;color:#111111">ALINE TABs Kit <span class="badge-disc-red">Discontinued</span></h3>
        <p style="font-size:14px;margin-bottom:12px">Small heel-clip inserts designed to snap into slots on the underside of any ALINE insole (medial or lateral edge), adjusting the tilt of the foot for personalised alignment. No longer available for purchase.</p>
        <div class="team-callout cx" style="margin:0">
          <strong>📞 CX — TABs Kit Discontinued</strong>
          The ALINE TABs Kit is discontinued and no longer sold on alineinsoles.com. If a customer asks about TABs or tries to order them: inform them the product has been discontinued and is no longer available. Do not promise restocking or future availability. If the customer has a specific alignment need that TABs would have addressed, direct them to contact us — a CX agent can suggest whether any of the four current insole models better fits their requirements, or escalate to Brand Lead for guidance.
        </div>
      </div>

      <!-- Choose-by-activity guide -->
      <h3 style="margin-top:28px">Quick-Pick Guide — Which Model to Recommend</h3>
      <table>
        <thead><tr><th>Customer Says…</th><th>Recommend</th><th>Why</th></tr></thead>
        <tbody>
          <tr><td>Plantar fasciitis / bunions / neuromas / everyday pain</td><td><strong>Red All Day</strong></td><td>Best entry point; active alignment relieves those exact conditions; most affordable model — <a href="https://alineinsoles.com/products/aline" target="_blank" rel="noopener">see pricing ↗</a></td></tr>
          <tr><td>Running, high-impact sport, long shifts on feet</td><td><strong>Cushion</strong></td><td>Memory foam + alignment = max comfort for repetitive impact</td></tr>
          <tr><td>Golf, gym, basketball, cycling, work boot</td><td><strong>Traction</strong></td><td>Grip + lateral spring for rotation and bilateral movement</td></tr>
          <tr><td>Skiing, snowboarding, winter outdoor work</td><td><strong>Climate</strong></td><td>Only model with heat-reflective insulation</td></tr>
          <tr><td>Wants multiple pairs</td><td><strong>Mix based on shoe/activity</strong></td><td>Multi-pair discount applies — check monthly discount sheet; alignment maintained all day</td></tr>
        </tbody>
      </table>

      <!-- Subscription note -->
      <h3 style="margin-top:28px">Auto-Pair Subscription</h3>
      <p style="font-size:14px">Customers can opt into automatic replacement every <strong>6 or 12 months</strong> at checkout. They can postpone, swap model, or cancel through their account at <a href="https://alineinsoles.com/account" target="_blank" rel="noopener">alineinsoles.com/account</a> or by contacting CX. This is an evergreen offer — always live unless the monthly discount sheet indicates otherwise.</p>
      <div class="team-callout cx" data-search="subscription auto-pair cancel postpone insoles">
        <strong>📞 CX — Subscription Management</strong>
        To change, pause, or cancel an Auto-Pair subscription: direct customer to their account portal first. If they can't manage it there, process via Shopify order management. Never cancel without confirmation — some customers say "cancel" when they mean "postpone." Always confirm intent. Escalate subscription billing disputes to CX Fulfillment Supervisor.
      </div>

    </div>
  </div>
</section>



<!-- ═══════════ WHOLESALE / B2B ═══════════ -->
<section id="wholesale" aria-label="Wholesale and B2B">
  <div class="card collapsible" id="wholesale-card">
    <div class="sec-hdr" onclick="toggleSection('wholesale-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Wholesale · B2B</span><h2>B2B / Wholesale</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <p>ALINE Insoles serves B2B customers including gyms, sports facilities, corporate wellness programs, healthcare providers, physical therapy clinics, athletic teams, and resellers. There is <strong>no dedicated wholesale website, phone number, or email address</strong> — all wholesale inquiries come through the standard DTC CX line and are then forwarded to the ALINE Wholesale Team by CX.</p>

      <div class="team-callout cx" data-search="wholesale B2B CX forward inquiry routing">
        <strong>📞 CX — Wholesale Inquiry Routing</strong>
        When you receive a wholesale or B2B inquiry by phone or email, do <strong>not</strong> attempt to quote pricing, minimum order quantities, lead times, or terms yourself — those are Wholesale Team decisions. Capture the following and forward to the <strong>ALINE Wholesale Team</strong> via the internal channel your manager specifies:
        <div style="background:rgba(255,255,255,.55);border-radius:7px;padding:10px 14px;margin:10px 0;font-size:13px;line-height:1.9">
          <div>① &nbsp;Caller / sender name</div>
          <div>② &nbsp;Business name and type (gym, clinic, reseller, etc.)</div>
          <div>③ &nbsp;Contact number or reply email</div>
          <div>④ &nbsp;What they're looking for — quantity, model, custom options, reseller account</div>
          <div>⑤ &nbsp;Any urgency flags</div>
        </div>
        The Wholesale Team will follow up directly. Do not promise a callback timeline beyond <em>"our team will be in touch."</em>
      </div>

      <h3 style="margin-top:20px">How to Spot a Wholesale Inquiry</h3>
      <div class="team-callout cx" data-search="wholesale spot identify B2B cues signals">
        <strong>📞 CX — Wholesale Cue Words</strong>
        Route to the Wholesale Team whenever you hear or see: "my gym," "my clinic," "my practice," "our team," "bulk order," "case pricing," "reseller," "wholesale account," "net-30," "volume discount," "distribute," "corporate wellness program," or any mention of a business purchasing more than a handful of pairs. If in doubt, route it — better to over-forward than to handle a B2B order through the DTC system.
      </div>

      <div class="team-callout newhire" data-search="wholesale new hire routing B2B">
        <strong>👋 New Hire — Wholesale Rule of Thumb</strong>
        If someone mentions a <em>business</em> or wants to buy in <em>quantity</em>, stop — you're now in wholesale territory, not DTC. Capture the details, forward to the ALINE Wholesale Team, and let them take it from there. Never quote wholesale pricing or commit to terms.
      </div>

      <h3 style="margin-top:20px">Wholesale Context — Who Buys ALINE in Bulk</h3>
      <table>
        <thead><tr><th>Buyer Type</th><th>What They Need</th><th>CX Action</th></tr></thead>
        <tbody>
          <tr><td>Gyms &amp; fitness centres</td><td>Bulk insoles for members or retail resale in their pro shop</td><td>Capture details, forward to Wholesale Team</td></tr>
          <tr><td>Physical therapy / sports clinics</td><td>Patient recommendation + resale; specific model guidance</td><td>Capture details, forward to Wholesale Team</td></tr>
          <tr><td>Corporate wellness programs</td><td>Volume purchase for employee benefit programs</td><td>Capture details, forward to Wholesale Team</td></tr>
          <tr><td>Athletic teams / coaches</td><td>Team order, single model, quick delivery</td><td>Capture details, forward to Wholesale Team</td></tr>
          <tr><td>Resellers / distributors</td><td>Reseller account, wholesale pricing, net-30</td><td>Capture details, forward to Wholesale Team</td></tr>
        </tbody>
      </table>

      <p style="font-size:13px;color:var(--al-muted);margin-top:14px"><em>Note: Given ALINE's inventory wind-down status, the Wholesale Team may have limited availability on some models. CX should not make model availability promises on wholesale orders — the Wholesale Team will confirm inventory and timelines directly with the customer.</em></p>
    </div>
  </div>
</section>

<!-- ═══════════ SECTION 03 — VISION, MISSION & PILLARS ═══════════ -->
<section id="vision-mission" aria-label="Vision Mission and Brand Pillars">
  <div class="card collapsible" id="vision-mission-card">
    <div class="sec-hdr" onclick="toggleSection('vision-mission-card')" aria-expanded="true">
      <div class="sec-hdr-left">
        <span class="eyebrow">Section 03</span>
        <h2>Vision, Mission &amp; Brand Pillars</h2>
      </div>
      <button class="sec-toggle" aria-label="Toggle section">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body">

      <div class="team-callout brand" data-search="vision mission brand pillars positioning">
        <strong>🌿 Brand — Pillar Governance</strong>
        All marketing copy, creative briefs, and campaign positioning must ladder back to one or more of the six pillars below. If a campaign concept can't be traced to a pillar, revisit it before briefing creative. The vision and mission are not taglines — they are internal compasses. Do not publish them verbatim without Brand Lead approval.
      </div>

      <!-- Vision -->
      <div class="card" style="background:linear-gradient(135deg,var(--al-text-dk) 0%,#3a1a18 100%);border:none;margin-bottom:14px">
        <span class="eyebrow" style="color:var(--al-gold)">Vision</span>
        <p style="font-family:'Barlow Condensed',sans-serif;font-size:1.6rem;font-weight:700;color:#fff;line-height:1.3;margin-bottom:0;letter-spacing:.02em">"A world where every person — from elite athletes to everyday movers — steps without pain and performs at their full potential."</p>
      </div>

      <!-- Mission -->
      <div class="card" style="background:linear-gradient(135deg,var(--al-coral) 0%,var(--al-red) 55%,var(--al-red-dk) 100%);border:none;margin-bottom:24px">
        <span class="eyebrow" style="color:var(--al-gold)">Mission</span>
        <p style="font-family:'Barlow Condensed',sans-serif;font-size:1.6rem;font-weight:700;color:#fff;line-height:1.3;margin-bottom:0;letter-spacing:.02em">"Engineer the world's most advanced alignment technology so that every step improves the body rather than wears it down."</p>
      </div>

      <!-- Pillars -->
      <h3>Brand Pillars</h3>
      <div class="pillars">
        <div class="pillar">
          <span class="pillar-icon">⚡</span>
          <h4>Active Alignment</h4>
          <p>ALINE doesn't cushion passively — it aligns dynamically. 100+ moving structures guide the foot, ankle, knee, hip, and back into correct position with every single stride. This is the core differentiator from every other insole on the market.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🔬</span>
          <h4>Proven Science</h4>
          <p>The 66% improvement in ankle and knee alignment is a patented, measured outcome — not a marketing claim. Decades of biomechanical research underpin every structural decision in our insoles. Science is our credibility.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🏅</span>
          <h4>Champion-Proven</h4>
          <p>ALINE has powered Olympic medalists, X Games champions, PGA players, and NFL athletes for 20+ years. Elite athlete endorsement isn't sponsorship — it's product validation. These athletes could use anything; they choose ALINE.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🌍</span>
          <h4>Universal Performance</h4>
          <p>From elite athletes to chronic pain patients, from delivery workers to pregnant women to the elderly — ALINE serves anyone who walks on unnatural surfaces. Performance isn't just athletic; it's the ability to move well through daily life.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">🛠️</span>
          <h4>Personalisation</h4>
          <p>Four models for different activities. TABs Kit for custom tilt. Subscription for consistent protection. Size by arch, not shoe size. ALINE recognises that no two feet — and no two lives — are identical.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">💪</span>
          <h4>Long-Term Health</h4>
          <p>Hard surfaces, modern footwear, and sedentary lives conspire against natural foot mechanics. ALINE reverses that damage with every step. The promise isn't comfort for today — it's structural health for life.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════ SECTION 04 — BRAND VOICE & TONE ═══════════ -->
<section id="brand-voice" aria-label="Brand Voice and Tone">
  <div class="card collapsible" id="brand-voice-card">
    <div class="sec-hdr" onclick="toggleSection('brand-voice-card')" aria-expanded="true">
      <div class="sec-hdr-left">
        <span class="eyebrow">Section 04</span>
        <h2>Brand Voice &amp; Tone</h2>
      </div>
      <button class="sec-toggle" aria-label="Toggle section">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body">

      <div class="team-callout marketing" data-search="brand voice tone tagline copy channel">
        <strong>📢 Marketing — Voice Shortcut</strong>
        When in doubt, ask: "Would a high-performance coach who also has a PhD in biomechanics say this?" ALINE copy is confident, direct, evidence-backed, and empathetic — never clinical and cold, never hype-y and hollow. Lead with the specific benefit; follow with the science that backs it.
      </div>

      <div class="team-callout creative" data-search="brand voice tone creative copy writing">
        <strong>🎨 Creative — Tone in Ad Copy</strong>
        The tone shifts by channel (see table below) but the voice stays the same. A TikTok hook is shorter and punchier than a landing page hero — but both use active language, real outcomes, and the same biomechanical confidence. Never write copy that sounds like it came from a generic insole brand.
      </div>

      <h3>Core Taglines</h3>
      <div class="card" style="background:var(--al-red-pale);border:none;padding:20px 24px;margin-bottom:4px">
        <p style="font-family:'Barlow Condensed',sans-serif;font-size:1.5rem;font-weight:800;color:var(--al-red-dark);margin-bottom:4px;letter-spacing:.04em">Move Better. Feel Better.</p>
        <p style="font-size:13px;color:var(--al-muted);margin-bottom:0">Primary tagline — used across all channels, all hero placements. Order matters: the motion comes first.</p>
      </div>
      <div class="card" style="background:var(--al-cream);border:none;padding:16px 24px;margin-bottom:20px">
        <p style="font-family:'Barlow Condensed',sans-serif;font-size:1.2rem;font-weight:700;color:#111111;margin-bottom:4px;letter-spacing:.04em">"The Only Insoles That Actively Align You" &nbsp;|&nbsp; "66% Better Alignment — Patented."</p>
        <p style="font-size:13px;color:var(--al-muted);margin-bottom:0">Supporting proof-point lines — use in ads, PDPs, and objection-handling scripts.</p>
      </div>

      <h3>Six Tone Modes</h3>
      <div class="tone-grid">
        <div class="tone" data-search="performance coach tone voice assertive motivating">
          <div class="tone-label">⚡ Performance Coach</div>
          <div class="tone-desc">Direct, motivating, assumes the customer can achieve more. Used in ads targeting athletes and active adults. No hedging.</div>
          <div class="tone-ex">"Your knees aren't giving up — your insoles are. ALINE puts the alignment back."</div>
        </div>
        <div class="tone" data-search="science communicator evidence proof data tone">
          <div class="tone-label">🔬 Science Communicator</div>
          <div class="tone-desc">Evidence-based, precise, specific numbers. Used in PDPs, comparison pages, objection responses. Never jargon for jargon's sake.</div>
          <div class="tone-ex">"Our patented Suspension Zone technology improves ankle and knee alignment by 66% — measured, not estimated."</div>
        </div>
        <div class="tone" data-search="empathetic listener pain suffering tone voice">
          <div class="tone-label">🤝 Empathetic Listener</div>
          <div class="tone-desc">Validates chronic pain and frustration before pivoting to solution. Used in testimonial ads, retargeting, and CX scripts. Never minimises suffering.</div>
          <div class="tone-ex">"If you've tried everything and nothing has helped your plantar fasciitis, we get it. Here's why ALINE is different."</div>
        </div>
        <div class="tone" data-search="trusted advisor recommendation product guide tone">
          <div class="tone-label">🎯 Trusted Advisor</div>
          <div class="tone-desc">Guides the customer to the right product. Not pushy — genuinely helpful. Used in choose-by-shoe content, CX, and FAQ copy.</div>
          <div class="tone-ex">"For golfers, Traction is the call — the textured top adds lateral grip exactly when you rotate through your swing."</div>
        </div>
        <div class="tone" data-search="athlete champion elite sport podium tone voice">
          <div class="tone-label">🏅 Athlete Champion</div>
          <div class="tone-desc">Bold, celebratory, podium energy. Used in awareness ads, seasonal campaigns, athlete partnership content. Strong visual language.</div>
          <div class="tone-ex">"Olympic podiums. X Games golds. PGA cuts. For 20 years, ALINE has been under the feet of the world's best."</div>
        </div>
        <div class="tone" data-search="CX customer service warm helpful friendly tone">
          <div class="tone-label">📞 CX Warm Helper</div>
          <div class="tone-desc">Friendly, patient, solution-first. For all CX communications: emails, chat, phone. Never robotic. Acknowledges the emotion before the logistics.</div>
          <div class="tone-ex">"I'm sorry to hear the insoles haven't felt right — let's figure out what's going on and find the best path forward for you."</div>
        </div>
      </div>

      <h3 style="margin-top:28px">Language Do's &amp; Don'ts</h3>
      <div class="do-dont">
        <div class="do-box">
          <h4>✅ Do Use</h4>
          <ul>
            <li>Specific numbers: "66%", "100+ dynamic structures", "60-day guarantee"</li>
            <li>Active verbs: align, activate, correct, absorb, support, power</li>
            <li>Outcome-first language: "Less pain. Better form. Every step."</li>
            <li>Real athlete names/context where licensed</li>
            <li>"Active Alignment" and "Suspension Zone" (branded terms)</li>
            <li>Inclusive language: "anyone who walks on hard surfaces"</li>
          </ul>
        </div>
        <div class="dont-box">
          <h4>❌ Don't Use</h4>
          <ul>
            <li>"Cures", "treats", "heals" — medical claim language without legal review</li>
            <li>Generic insole language: "comfortable", "soft", "cushiony" alone</li>
            <li>"Custom orthotics" to describe ALINE — they are OTC insoles with dynamic alignment</li>
            <li>Competitor brand names in ads without legal clearance</li>
            <li>Passive constructions: "pain may be reduced" → "reduces pain"</li>
            <li>Excessive qualifiers: "may potentially help possibly…"</li>
          </ul>
        </div>
      </div>

      <h3 style="margin-top:28px">Channel Tone Reference</h3>
      <table>
        <thead><tr><th>Channel</th><th>Tone Mode</th><th>Length / Format</th><th>Key Principle</th></tr></thead>
        <tbody>
          <tr><td>Paid Social (Meta/TikTok)</td><td>Performance Coach + Empathetic Listener</td><td>Hook ≤ 3 sec; body 15–30 sec</td><td>Lead with problem or bold claim; visual proof fast</td></tr>
          <tr><td>Landing Page / PDP</td><td>Science Communicator + Trusted Advisor</td><td>Long-form; bullets + proof</td><td>Every claim backed by mechanism or stat</td></tr>
          <tr><td>Email</td><td>Trusted Advisor + CX Warm Helper</td><td>Short subject; 150–300 word body</td><td>Segmented by persona; personalise product reference</td></tr>
          <tr><td>SMS</td><td>Performance Coach</td><td>≤160 chars; 1 CTA</td><td>Urgency + benefit + link only</td></tr>
          <tr><td>Organic Social</td><td>Athlete Champion + Empathetic Listener</td><td>Caption 50–150 words; carousel or video</td><td>Community-first; celebrate movement stories</td></tr>
          <tr><td>CX (phone/email/chat)</td><td>CX Warm Helper</td><td>Match customer energy</td><td>Acknowledge → solve → reassure</td></tr>
          <tr><td>Influencer Briefs</td><td>Athlete Champion + Trusted Advisor</td><td>Talking-point style; ≤5 bullets</td><td>Authentic use case; FTC disclosure required</td></tr>
        </tbody>
      </table>

    </div>
  </div>
</section>


<!-- ═══════════ SECTION 05 — BRAND PERSONALITY ═══════════ -->
<section id="brand-personality" aria-label="Brand Personality and Adjectives">
  <div class="card collapsible" id="brand-personality-card">
    <div class="sec-hdr" onclick="toggleSection('brand-personality-card')" aria-expanded="true">
      <div class="sec-hdr-left">
        <span class="eyebrow">Section 05</span>
        <h2>Brand Personality &amp; Adjectives</h2>
      </div>
      <button class="sec-toggle" aria-label="Toggle section">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body">
      <p>These ten adjectives define how ALINE should feel to anyone who encounters the brand — in an ad, on a product page, in a CX interaction, or in a piece of content. Use them as a creative litmus test: if a piece of work doesn't embody at least two or three of these, revisit it.</p>
      <div class="adj-grid">
        <div class="adj"><div class="adj-title">Dynamic</div><div class="adj-desc">ALINE moves. The insoles move. The brand moves. Nothing here is static or passive — every product feature and every piece of communication should feel alive and in motion.</div></div>
        <div class="adj"><div class="adj-title">Precision-Engineered</div><div class="adj-desc">100+ suspension structures, patented zones, biomechanical measurements — ALINE earns its premium positioning through rigour. The brand never guesses; it calculates.</div></div>
        <div class="adj"><div class="adj-title">Champion-Tested</div><div class="adj-desc">The brand's credibility is built on two decades of elite athlete proof. Olympic medals and X Games golds aren't marketing fluff — they're the performance record of the product.</div></div>
        <div class="adj"><div class="adj-title">Empowering</div><div class="adj-desc">ALINE doesn't treat customers as patients or victims. It treats them as movers who deserve better tools. The brand voice lifts people up and assumes capability.</div></div>
        <div class="adj"><div class="adj-title">Accessible</div><div class="adj-desc">Despite its elite athlete heritage, ALINE is for everyone — from the marathon runner to the retail worker to the elderly grandparent. High performance shouldn't have a price of entry beyond the insole itself.</div></div>
        <div class="adj"><div class="adj-title">Confident</div><div class="adj-desc">ALINE doesn't hedge its claims. "The only insoles that improve alignment by 66%" — not "may help improve" or "could support." Confidence backed by patent and proof is not arrogance; it's earned.</div></div>
        <div class="adj"><div class="adj-title">Authentic</div><div class="adj-desc">Real testimonials. Real athletes. Real pain solved. The brand doesn't airbrush its stories — it shows real people with real problems who found real relief. Authenticity is the antidote to insole scepticism.</div></div>
        <div class="adj"><div class="adj-title">Resilient</div><div class="adj-desc">ALINE exists for people who refuse to stop moving. The brand never talks about giving up or managing down — it talks about coming back stronger, performing longer, and refusing to be sidelined.</div></div>
        <div class="adj"><div class="adj-title">Holistic</div><div class="adj-desc">Foot alignment affects the ankle, knee, hip, and back. ALINE never sells a foot product — it sells total body alignment. The brand thinking is always full-body, not isolated.</div></div>
        <div class="adj"><div class="adj-title">Trustworthy</div><div class="adj-desc">60-day guarantee, transparent return policy, real reviews, real science. The brand earns trust the old-fashioned way — by doing what it says it does. CX is the frontline of this promise.</div></div>
      </div>
      <div class="team-callout brand" style="margin-top:20px" data-search="brand personality adjectives creative litmus test">
        <strong>🌿 Brand — Personality Application</strong>
        When reviewing creative or copy, ask: is this Dynamic? Is it Confident? Is it Authentic? If a piece of work feels passive, hedging, or generic, trace it back to the personality adjectives and rebrief. ALINE should never feel like a pharmacy brand or a generic orthopedic product.
      </div>
    </div>
  </div>
</section>


<!-- ═══════════ SECTION 06 — VISUAL IDENTITY ═══════════ -->
<section id="visual-identity" aria-label="Visual Identity">
  <div class="card collapsible" id="visual-identity-card">
    <div class="sec-hdr" onclick="toggleSection('visual-identity-card')" aria-expanded="true">
      <div class="sec-hdr-left">
        <span class="eyebrow">Section 06</span>
        <h2>Visual Identity</h2>
      </div>
      <button class="sec-toggle" aria-label="Toggle section">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body">

      <div class="team-callout creative" data-search="visual identity color palette logo misuse creative">
        <strong>🎨 Creative — Non-Negotiable Color Rules</strong>
        ALINE Red (#CC1F17) is the primary CTA and hero accent color — do not substitute it with any other red. Charcoal (#111111) is the dark text and nav background; Gold (#F5C518) is strictly an accent and reward color — never use it as a primary. Never use red text on a red background. Always maintain contrast ratios ≥ 4.5:1 for body copy.
      </div>

      <!-- Color Palette -->
      <h3>Color Palette</h3>
      <div class="palette">
        <div class="swatch"><div class="swatch-color" style="background:#CC1F17"></div><div class="swatch-info"><div class="swatch-name">ALINE Red</div><div class="swatch-role">Primary — CTAs, hero, energy</div><div class="swatch-hex">#CC1F17</div></div></div>
        <div class="swatch"><div class="swatch-color" style="background:#A31A13"></div><div class="swatch-info"><div class="swatch-name">Red Dark</div><div class="swatch-role">Hover states, deep accents</div><div class="swatch-hex">#A31A13</div></div></div>
        <div class="swatch"><div class="swatch-color" style="background:#A01000"></div><div class="swatch-info"><div class="swatch-name">Red Deep</div><div class="swatch-role">Hero gradients, rich bg</div><div class="swatch-hex">#A01000</div></div></div>
        <div class="swatch"><div class="swatch-color" style="background:#FFF0EF"></div><div class="swatch-info"><div class="swatch-name">Red Pale</div><div class="swatch-role">Callout backgrounds, tints</div><div class="swatch-hex">#FFF0EF</div></div></div>
        <div class="swatch"><div class="swatch-color" style="background:#F5C518"></div><div class="swatch-info"><div class="swatch-name">ALINE Gold</div><div class="swatch-role">Achievement accent, highlights</div><div class="swatch-hex">#F5C518</div></div></div>
        <div class="swatch"><div class="swatch-color" style="background:#111111"></div><div class="swatch-info"><div class="swatch-name">Black</div><div class="swatch-role">Nav, hero backgrounds, authority</div><div class="swatch-hex">#111111</div></div></div>
        <div class="swatch"><div class="swatch-color" style="background:#F7F7F7;border:1px solid #e0e0e0"></div><div class="swatch-info"><div class="swatch-name">Light Gray</div><div class="swatch-role">Page background</div><div class="swatch-hex">#F7F7F7</div></div></div>
        <div class="swatch"><div class="swatch-color" style="background:#6B6B6B"></div><div class="swatch-info"><div class="swatch-name">Muted Gray</div><div class="swatch-role">Secondary text, captions</div><div class="swatch-hex">#6B6B6B</div></div></div>
      </div>

      <!-- Typography -->
      <h3 style="margin-top:28px">Typography</h3>
      <div class="team-callout creative" data-search="typography fonts Barlow DM Sans pairing rules" style="margin-bottom:16px">
        <strong>🎨 Creative — Font Pairing Rule</strong>
        Barlow Condensed is the display voice — bold, athletic, condensed. DM Sans is the body — clean, readable, versatile. Never use Barlow Condensed for body paragraphs; never use DM Sans for hero headlines on marketing materials. DM Mono is labels-only — data, eyebrows, code-style annotations.
      </div>
      <div class="card" style="margin-bottom:10px;padding:20px 24px">
        <div style="font-size:11px;font-family:'DM Mono',monospace;color:var(--al-red);text-transform:uppercase;letter-spacing:.12em;margin-bottom:6px">Display — Barlow Condensed 800/900</div>
        <div style="font-family:'Barlow Condensed',sans-serif;font-size:2.5rem;font-weight:900;color:#111111;letter-spacing:.04em;text-transform:uppercase;line-height:1">MOVE BETTER. FEEL BETTER.</div>
        <div style="font-size:12px;color:var(--al-muted);margin-top:8px">Use for: hero headlines, section titles, stat callouts, ad overlays. Always uppercase or sentence case — never all-lowercase.</div>
      </div>
      <div class="card" style="margin-bottom:10px;padding:20px 24px">
        <div style="font-size:11px;font-family:'DM Mono',monospace;color:var(--al-red);text-transform:uppercase;letter-spacing:.12em;margin-bottom:6px">Body — DM Sans 400/600/700</div>
        <div style="font-family:'DM Sans',sans-serif;font-size:1rem;font-weight:400;color:var(--al-text);line-height:1.7">ALINE's patented Suspension Zone technology improves ankle and knee alignment by 66% — measured, not estimated. Dynamic structures flex with your foot and actively align your lower body with every step.</div>
        <div style="font-size:12px;color:var(--al-muted);margin-top:8px">Use for: body copy, product descriptions, emails, CX scripts. Min 16px on digital; 11pt in print.</div>
      </div>
      <div class="card" style="margin-bottom:20px;padding:20px 24px">
        <div style="font-size:11px;font-family:'DM Mono',monospace;color:var(--al-red);text-transform:uppercase;letter-spacing:.12em;margin-bottom:6px">Labels / Data — DM Mono 400/500</div>
        <div style="font-family:'DM Mono',monospace;font-size:13px;color:#111111">SKU-001 · See alineinsoles.com · CUSHION-INSOLES · SECTION 06 · 66% ALIGNMENT</div>
        <div style="font-size:12px;color:var(--al-muted);margin-top:8px">Use for: eyebrows, data labels, product codes, badge text, footer metadata. Never for headlines or body copy.</div>
      </div>

      <!-- Logo -->
      <h3>Logo Usage</h3>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:20px">
        <div class="card" style="padding:24px;text-align:center;background:#fff">
          <div style="font-size:11px;font-family:'DM Mono',monospace;color:var(--al-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:12px">Primary (light background)</div>
          <img src="https://alineinsoles.com/cdn/shop/files/ALINE-Integrated-Mark-600wi.png?v=1685992236" alt="ALINE primary logo" style="max-height:60px;max-width:100%;object-fit:contain" onerror="this.replaceWith(Object.assign(document.createElement('span'),{textContent:'[ALINE Logo]',style:'font-family:Barlow Condensed,sans-serif;font-size:1.5rem;font-weight:900;color:#CC1F17'}))">
        </div>
        <div class="card" style="padding:24px;text-align:center;background:#111111">
          <div style="font-size:11px;font-family:'DM Mono',monospace;color:rgba(255,255,255,.5);text-transform:uppercase;letter-spacing:.1em;margin-bottom:12px">Reversed (dark background)</div>
          <img src="https://alineinsoles.com/cdn/shop/files/ALINE-Integrated-Mark-600wi.png?v=1685992236" alt="ALINE reversed logo" style="max-height:60px;max-width:100%;object-fit:contain;filter:brightness(0) invert(1)" onerror="this.replaceWith(Object.assign(document.createElement('span'),{textContent:'[ALINE Logo]',style:'font-family:Barlow Condensed,sans-serif;font-size:1.5rem;font-weight:900;color:#fff'}))">
        </div>
      </div>

      <!-- Photo Do/Don't -->
      <h3>Photography Direction</h3>
      <div class="do-dont">
        <div class="do-box">
          <h4>✅ Do</h4>
          <ul>
            <li>Show feet and lower body in motion — running, pivoting, hiking, stepping</li>
            <li>Use real athletes and real people — diverse ages, activities, body types</li>
            <li>Show the product <em>in use</em> inside a shoe, not isolated on a table</li>
            <li>Authentic workout and lifestyle environments: tracks, courts, trails, kitchens, clinics</li>
            <li>High contrast, dynamic angles — ALINE is movement, not stillness</li>
            <li>Before/after pain expressions (authentic, not melodramatic) alongside relief expressions</li>
          </ul>
        </div>
        <div class="dont-box">
          <h4>❌ Don't</h4>
          <ul>
            <li>Stock-photo sterility — overly posed, generic "healthy lifestyle" imagery</li>
            <li>Insoles floating in white space as the hero of the shot (unless product grid)</li>
            <li>Exaggerated pain acting — clutching foot on a couch, face screwed up melodramatically</li>
            <li>Competitive brand products visible in frame</li>
            <li>Low-resolution or heavily filtered images that obscure product detail</li>
            <li>Imagery that implies medical treatment or clinical procedure</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════ SECTION 07 — TARGET AUDIENCE & PERSONAS ═══════════ -->
<section id="target-audience" aria-label="Target Audience and Personas">
  <div class="card collapsible" id="target-audience-card">
    <div class="sec-hdr" onclick="toggleSection('target-audience-card')" aria-expanded="true">
      <div class="sec-hdr-left">
        <span class="eyebrow">Section 07</span>
        <h2>Target Audience &amp; Customer Personas</h2>
      </div>
      <button class="sec-toggle" aria-label="Toggle section">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body">

      <!-- Audience overview -->
      <h3>Core Audience Profile</h3>
      <table>
        <tr><th>Dimension</th><th>Primary</th><th>Secondary</th></tr>
        <tr><td>Age</td><td>35–65 — active adults feeling the first signs of joint wear</td><td>25–34 athletic; 65+ pain management</td></tr>
        <tr><td>Gender</td><td>Skews male slightly (sport heritage); female growing fast via pain/wellness angle</td><td>Non-binary / all — pain has no gender</td></tr>
        <tr><td>Activity Level</td><td>Recreational to serious sport; anyone who stands 4+ hrs/day</td><td>Elite athletes (awareness/credibility)</td></tr>
        <tr><td>Pain Triggers</td><td>Plantar fasciitis, knee pain, lower back pain, bunions, general fatigue</td><td>Proactive alignment (no current pain)</td></tr>
        <tr><td>Occupation</td><td>Healthcare, retail, hospitality, trades, office workers who walk, recreational athletes</td><td>Military, firefighters, postal/delivery</td></tr>
        <tr><td>Shopping Behaviour</td><td>Researches before buying; reads reviews; responds to before/after and testimonials</td><td>Impulse via DRTV / social media ad</td></tr>
        <tr><td>Price Sensitivity</td><td>Will pay a premium for a product that solves real chronic pain (see current pricing at alineinsoles.com); compares favourably to custom orthotics (typically several hundred dollars or more)</td><td>Multi-pair buyers respond to bundles</td></tr>
      </table>

      <!-- Personas -->
      <h3 style="margin-top:28px">Customer Personas</h3>
      <div class="personas">
        <div class="persona" data-search="persona weekend warrior active adult joint pain sports">
          <div class="persona-name">Weekend Warrior</div>
          <div class="persona-type">Active Adult · Age 38–55</div>
          <div class="persona-desc">Coaches youth soccer on weekends, runs 5Ks a few times a year, hits the gym twice a week. Loves being active but lately the knees are complaining after longer sessions. Hasn't seen a doctor — it's not "that bad" — but it's holding back performance. Saw an ALINE ad before a YouTube workout video.</div>
          <div class="persona-focus"><strong>Primary Pain:</strong> Knee discomfort, occasional plantar fasciitis after weekend activity<br><strong>Best Fit:</strong> Red All Day for everyday shoes; Cushion or Traction for sport shoes<br><strong>Message Angle:</strong> Stay in the game longer. Don't let alignment steal your weekend.</div>
        </div>
        <div class="persona" data-search="persona chronic pain sufferer plantar fasciitis back pain tried everything">
          <div class="persona-name">Pain Sufferer</div>
          <div class="persona-type">Chronic Pain · Age 45–65</div>
          <div class="persona-desc">Has had plantar fasciitis for three years. Tried stretching, physical therapy, gel inserts from the pharmacy, and even considered surgery. Sceptical of new products — "nothing works" — but ALINE's 60-day guarantee and the 66% alignment claim caught her eye. A friend who's a nurse mentioned ALINE first.</div>
          <div class="persona-focus"><strong>Primary Pain:</strong> Plantar fasciitis, generalised foot fatigue, lower back pain<br><strong>Best Fit:</strong> Red All Day (start), then Cushion if high impact<br><strong>Message Angle:</strong> Empathetic Listener tone; lead with guarantee; show testimonials of long-term sufferers who found relief.</div>
        </div>
        <div class="persona" data-search="persona working professional nurse retail hospitality on feet all day">
          <div class="persona-name">On-Feet Pro</div>
          <div class="persona-type">Working Professional · Age 28–55</div>
          <div class="persona-desc">ER nurse. On her feet for 12-hour shifts on hard hospital floors. Foot and lower back pain are occupational hazards she's just accepted. A colleague showed her ALINE — she was initially sceptical of a "TV insole" but the science sold her. Now buys the Cushion model on subscription every 8 months.</div>
          <div class="persona-focus"><strong>Primary Pain:</strong> Foot fatigue, lower back pain, heel pain after long shifts<br><strong>Best Fit:</strong> Cushion Insoles; subscription Auto-Pair<br><strong>Message Angle:</strong> Trusted Advisor tone; science-backed, practical, value of subscription over time.</div>
        </div>
        <div class="persona" data-search="persona serious athlete performance sport competition elite">
          <div class="persona-name">Competitive Athlete</div>
          <div class="persona-type">Serious Athlete · Age 20–45</div>
          <div class="persona-desc">Competitive golfer who plays 4+ rounds a week. Hip alignment and power transfer through his swing are critical. Found ALINE via the PGA endorsement trail. Uses Traction for his golf shoes and Red All Day for everything else. Already owns three pairs. Will tell anyone who'll listen.</div>
          <div class="persona-focus"><strong>Primary Pain:</strong> Performance optimisation; hip rotation efficiency; knee tracking<br><strong>Best Fit:</strong> Traction (golf/sport); Red All Day (daily); multi-pair stack<br><strong>Message Angle:</strong> Performance Coach + Athlete Champion; data-led, elite-athlete peer validation.</div>
        </div>
      </div>

      <!-- Brand Archetype -->
      <h3 style="margin-top:28px">Brand Archetype</h3>
      <div class="card" style="background:linear-gradient(135deg,var(--al-text-dk) 0%,#3a1a18 100%);border:none;padding:24px 28px;display:flex;gap:20px;align-items:flex-start;flex-wrap:wrap">
        <div>
          <span style="font-size:3rem">🦸</span>
        </div>
        <div>
          <span class="eyebrow" style="color:var(--al-gold)">The Hero</span>
          <h3 style="color:#fff;margin:4px 0 10px">ALINE is a Hero brand</h3>
          <p style="color:rgba(255,255,255,.85);font-size:14px;line-height:1.65;margin-bottom:8px">The Hero archetype empowers customers to overcome adversity and perform at their potential. ALINE does not position itself as a medical device or a comfort luxury — it arms people with a tool to conquer physical challenges, whether that's finishing a 5K, completing a 12-hour shift, or getting back on the golf course after knee pain sidelined them.</p>
          <p style="color:rgba(255,255,255,.7);font-size:13px;margin-bottom:0">Hero brands communicate in terms of courage, proof, and transformation. They celebrate wins. They take the customer's side against the obstacle (pain, poor alignment, the wrong insoles). They never feel sorry for the customer — they believe in the customer's ability to overcome.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════ SECTION 08 — COMPETITORS & POSITIONING ═══════════ -->
<section id="competitors" aria-label="Competitors and Positioning">
  <div class="card collapsible" id="competitors-card">
    <div class="sec-hdr" onclick="toggleSection('competitors-card')" aria-expanded="true">
      <div class="sec-hdr-left">
        <span class="eyebrow">Section 08</span>
        <h2>Competitors &amp; Positioning</h2>
      </div>
      <button class="sec-toggle" aria-label="Toggle section">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body">

      <div class="team-callout brand" data-search="competitors positioning landscape market insoles">
        <strong>🌿 Brand — Competitive Positioning Rule</strong>
        Never mention a competitor brand by name in consumer-facing copy without Legal clearance. In CX interactions, acknowledge the competitor the customer names without disparaging it — pivot to what ALINE does differently. The comparison table below is internal only.
      </div>

      <!-- Positioning Statement -->
      <div class="card" style="background:linear-gradient(135deg,var(--al-coral) 0%,var(--al-red) 55%,var(--al-red-dk) 100%);border:none;margin-bottom:24px;padding:24px 28px">
        <span class="eyebrow" style="color:var(--al-gold)">Positioning Statement</span>
        <p style="font-family:'Barlow Condensed',sans-serif;font-size:1.25rem;font-weight:700;color:#fff;line-height:1.45;margin-bottom:0;letter-spacing:.01em">"For active people and chronic pain sufferers who need more than cushion, ALINE is the only insole with patented dynamic alignment technology that actively improves ankle and knee alignment by 66% with every step — so you don't just feel better today, you move better for life."</p>
      </div>

      <h3>Competitive Landscape</h3>
      <table>
        <thead>
          <tr><th>Brand</th><th>Price Range</th><th>Key Claim</th><th>Alignment</th><th>Dynamic Support</th><th>Guarantee</th><th>ALINE Edge</th></tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>ALINE Insoles</strong> <span class="comp-badge-win">US</span></td>
            <td><a href="https://alineinsoles.com/collections/insoles" target="_blank" rel="noopener">See alineinsoles.com ↗</a></td>
            <td>66% ankle/knee alignment improvement; only dynamic alignment insole</td>
            <td><span class="comp-badge-win">Active (patented)</span></td>
            <td><span class="comp-badge-win">100+ structures</span></td>
            <td>60-day MBG</td>
            <td>—</td>
          </tr>
          <tr>
            <td><strong>Superfeet</strong></td>
            <td>Mid-range — <a href="https://www.superfeet.com" target="_blank" rel="noopener">superfeet.com ↗</a></td>
            <td>Structured arch support; orthotics for active use</td>
            <td><span class="comp-badge-neutral">Passive / Static</span></td>
            <td><span class="comp-badge-lose">None</span></td>
            <td>60-day</td>
            <td>ALINE moves with the foot; Superfeet holds it rigid. Dynamic vs. static.</td>
          </tr>
          <tr>
            <td><strong>Powerstep</strong></td>
            <td>Mid-range — <a href="https://www.powerstep.com" target="_blank" rel="noopener">powerstep.com ↗</a></td>
            <td>OTC orthotics for plantar fasciitis; pharmacy availability</td>
            <td><span class="comp-badge-neutral">Passive</span></td>
            <td><span class="comp-badge-lose">Minimal</span></td>
            <td>Varies</td>
            <td>ALINE offers full-body alignment correction; Powerstep focuses on arch only.</td>
          </tr>
          <tr>
            <td><strong>Spenco</strong></td>
            <td>Budget–Mid — <a href="https://www.spenco.com" target="_blank" rel="noopener">spenco.com ↗</a></td>
            <td>Total support and cushioning; comfort-first positioning</td>
            <td><span class="comp-badge-lose">Comfort only</span></td>
            <td><span class="comp-badge-lose">None</span></td>
            <td>30-day</td>
            <td>ALINE aligns AND cushions. Spenco only cushions — misses the root cause.</td>
          </tr>
          <tr>
            <td><strong>Dr. Scholl's</strong></td>
            <td>Budget — pharmacy / mass retail</td>
            <td>Mass-market comfort; foot mapping kiosks</td>
            <td><span class="comp-badge-lose">None</span></td>
            <td><span class="comp-badge-lose">None</span></td>
            <td>Varies / retail</td>
            <td>ALINE is the upgrade from Dr. Scholl's — when OTC comfort isn't enough.</td>
          </tr>
          <tr>
            <td><strong>SOLE</strong></td>
            <td>Mid-range — <a href="https://www.yoursole.com" target="_blank" rel="noopener">yoursole.com ↗</a></td>
            <td>Heat-moldable custom fit; eco-friendly materials</td>
            <td><span class="comp-badge-neutral">Foot-shaped (static)</span></td>
            <td><span class="comp-badge-lose">None</span></td>
            <td>30-day</td>
            <td>ALINE doesn't just fit the foot's shape — it corrects the foot's movement.</td>
          </tr>
          <tr>
            <td><strong>Custom Orthotics (podiatrist)</strong></td>
            <td>High — prescription / insurance</td>
            <td>Prescription, individually cast; often covered by insurance</td>
            <td><span class="comp-badge-neutral">Foot-specific (rigid)</span></td>
            <td><span class="comp-badge-lose">None — rigid cast</span></td>
            <td>None typically</td>
            <td>ALINE is dynamic (moves with foot); custom orthotics are rigid. ALINE costs 10–20× less.</td>
          </tr>
        </tbody>
      </table>

      <h3 style="margin-top:24px">The Core Differentiation Framework</h3>
      <div class="pillars" style="grid-template-columns:repeat(auto-fit,minmax(240px,1fr))">
        <div class="pillar">
          <span class="pillar-icon">⚙️</span>
          <h4>Active vs. Passive</h4>
          <p>Every competitor offers passive support — foam that sits still. ALINE's structures move with the foot in real time, correcting alignment through the entire gait cycle.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">📐</span>
          <h4>Full-Body vs. Local</h4>
          <p>Competitors address foot comfort. ALINE addresses the ankle, knee, hip, and back. One product, total lower-body alignment — the only one with clinical measurement to back it up.</p>
        </div>
        <div class="pillar">
          <span class="pillar-icon">💰</span>
          <h4>Value vs. Cost</h4>
          <p>At a fraction of the cost of custom orthotics or physical therapy, ALINE delivers dynamic alignment support that rigid prescription inserts can't match — see <a href="https://alineinsoles.com/collections/insoles" target="_blank" rel="noopener">alineinsoles.com</a> for current pricing. The comparison to shift in a customer's mind is custom orthotics, not pharmacy foam.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════ SECTION 09 — OBJECTION HANDLING ═══════════ -->
<section id="objections" aria-label="Objection Handling and Battlecards">
  <div class="card collapsible" id="objections-card">
    <div class="sec-hdr" onclick="toggleSection('objections-card')" aria-expanded="true">
      <div class="sec-hdr-left">
        <span class="eyebrow">Section 09</span>
        <h2>Objection Handling / Battlecards</h2>
      </div>
      <button class="sec-toggle" aria-label="Toggle section">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body">

      <div class="team-callout cx" data-search="objections battlecards CX scripts responses handling">
        <strong>📞 CX — Using These Scripts</strong>
        These are frameworks, not verbatim scripts. Adapt tone to the customer's energy — an angry customer needs empathy first; a curious customer needs the fact. Always acknowledge the objection before pivoting. Never argue. If the customer pushes back twice, offer the 60-day guarantee and de-escalate.
      </div>

      <div class="objection" data-search="too expensive price objection cost insoles">
        <div class="obj-q">"These are too expensive. I can get insoles for $10 at the pharmacy."</div>
        <div class="obj-a">That's fair — and cheap drugstore insoles do one thing: cushion. ALINE does something completely different. Our patented technology actively aligns your ankle and knee with every step — a 66% measurable improvement. That's why Olympians and professional athletes have worn them for 20 years. Compare ALINE to what you'd actually spend on custom orthotics (typically several hundred dollars or more) or physical therapy, and ALINE is a fraction of the cost for dynamic alignment support. See current pricing at <a href="https://alineinsoles.com/collections/insoles" target="_blank" rel="noopener">alineinsoles.com</a> — and every purchase is covered by our 60-day money-back guarantee.</div>
      </div>

      <div class="objection" data-search="tried insoles before nothing worked sceptical">
        <div class="obj-q">"I've tried insoles before and they didn't work."</div>
        <div class="obj-a">Most insoles offer comfort — foam that feels soft but doesn't address why your foot hurts. ALINE is structurally different: 100+ dynamic support and suspension structures move with your foot through every step, actively correcting alignment at the ankle and knee. That's why customers who've tried every other insole for years have found relief with ALINE. And because we know this can sound like every other insole claim, we back it with a 60-day money-back guarantee. If ALINE doesn't work for you, you get your money back — no catch.</div>
      </div>

      <div class="objection" data-search="not an athlete don't need performance insoles everyday">
        <div class="obj-q">"I'm not an athlete — I don't need performance insoles."</div>
        <div class="obj-a">The irony is that alignment matters most for people who aren't athletes, because they don't have the conditioning to compensate for poor mechanics. Every time you walk on hard concrete or tile — which modern life is full of — your foot is absorbing impact without nature's intended support. ALINE helps everyone from marathon runners to people who stand in a retail store all day. The Red All Day Insoles are specifically designed for everyday wear in any shoe. Movement is movement — and your body deserves proper alignment for all of it.</div>
      </div>

      <div class="objection" data-search="doctor prescribed custom orthotics podiatrist insoles">
        <div class="obj-q">"My doctor prescribed custom orthotics."</div>
        <div class="obj-a">Custom orthotics are cast to the shape of your foot in one position — they're rigid and static. ALINE insoles are dynamic: our 100+ suspension structures move with your foot through every phase of your gait cycle. Many customers use ALINE in their casual or athletic shoes where the custom orthotics don't fit (orthotics often don't fit athletic shoes well), or transition to ALINE after finding their custom orthotics too rigid. We'd always suggest following your doctor's guidance — but it's worth noting that ALINE is used by healthcare professionals and recommended by podiatrists in clinical settings.</div>
      </div>

      <div class="objection" data-search="will they fit my shoes size slim profile">
        <div class="obj-q">"Will they fit in my shoes? They look bulky."</div>
        <div class="obj-a">ALINE insoles are specifically engineered to be low-volume. The general rule: if your shoe has a removable insole, ALINE will fit — just remove the stock insole first. Customers wear them in sneakers, dress shoes, work boots, hiking boots, and even house slippers. The choose-by-shoe guide at <a href="https://alineinsoles.com/pages/shop-by-shoe" target="_blank" rel="noopener">alineinsoles.com/pages/shop-by-shoe</a> helps match the right model to the right footwear. Sizing is by arch size (S/M/L/XL), not shoe size.</div>
      </div>

      <div class="objection" data-search="plantar fasciitis chronic pain nothing helps years">
        <div class="obj-q">"I've had plantar fasciitis for years. Nothing has helped."</div>
        <div class="obj-a">Plantar fasciitis is almost always a mechanics problem, not just a tissue problem. When the ankle and knee are misaligned, the fascia takes compensatory stress — and no amount of stretching or cushioning fixes the root cause. ALINE's Active Alignment technology directly addresses that misalignment, correcting the mechanical load pattern that stresses the fascia. We've heard from customers with multi-year plantar fasciitis who found relief within weeks. The 60-day guarantee means you have nothing to lose by trying. We'd also suggest starting with just 1–2 hours of wear on day one and building up — your feet adapt to proper alignment, and rushing it can cause soreness during adjustment.</div>
      </div>

      <div class="objection" data-search="which model choose confusing multiple types">
        <div class="obj-q">"There are multiple models — I don't know which one to choose."</div>
        <div class="obj-a">Great question — the right model really does depend on your primary activity. Quick guide: for everyday wear, running shoes, or plantar fasciitis relief → <strong>Red All Day</strong>. For running, tennis, volleyball, or long shifts on your feet → <strong>Cushion</strong> (memory foam + alignment). For golf, cycling, basketball, gym or work boots → <strong>Traction</strong> (extra grip and spring for lateral movement). For skiing, snowboarding, or cold-weather outdoor work → <strong>Climate</strong> (heat-reflective for warmth). See current pricing at <a href="https://alineinsoles.com/collections/insoles" target="_blank" rel="noopener">alineinsoles.com/collections/insoles</a>. Most customers end up with 2–3 pairs for different shoes and activities, which we support with multi-pair discounts.</div>
      </div>

      <div class="objection" data-search="Chapter 11 bankruptcy Inventel acquisition brand change ownership">
        <div class="obj-q">"I used to buy ALINE from a different website / I heard the brand went through changes. Is it the same product?"</div>
        <div class="obj-a">ALINE's patented technology and core product design are unchanged — the same biomechanical innovation that powered Olympic and X Games athletes for 20+ years is in every insole we sell today. The brand partnered with Inventel to expand its DRTV and e-commerce reach, which brought operational upgrades to fulfilment, CX, and the storefront. alineinsoles.com is now the official, Inventel-managed home for ALINE. Any concerns about product quality, the guarantee, or order history from a previous purchase should be directed to our CX team at <a href="mailto:support@alineinsoles.com">support@alineinsoles.com</a> — we'll take care of you.</div>
      </div>

      <div class="objection" data-search="subscription cancel auto-pair worried locked in">
        <div class="obj-q">"I don't want to be locked into a subscription."</div>
        <div class="obj-a">The Auto-Pair subscription is completely optional — you can choose a one-time purchase at checkout. If you do choose the subscription (6 or 12-month auto-replacement), you can pause, swap the model, or cancel anytime through your account portal or by contacting us. There's no lock-in, no cancellation fee, and no fine print. Many customers find it convenient because insoles last 6–12 months and it's easy to forget to replace them before the alignment benefit starts to degrade.</div>
      </div>

      <div class="objection" data-search="return policy can I return these if they don't work guarantee">
        <div class="obj-q">"What if they don't work for me? Can I return them?"</div>
        <div class="obj-a">Absolutely — that's exactly what our 60-day money-back guarantee is for. If you're not satisfied for any reason within 60 days of purchase, contact us and we'll initiate a refund. Note that return shipping is the customer's responsibility, and there are processing and handling fees that vary by order. For exchanges (different model or size), we ask for a request within 30 days, and the insoles should be in resellable condition. Contact support@alineinsoles.com or call 1-888-316-5658 to start the process.</div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════ SECTION 10 — CUSTOMER JOURNEY ═══════════ -->
<section id="customer-journey" aria-label="Customer Journey and Lifecycle">
  <div class="card collapsible" id="customer-journey-card">
    <div class="sec-hdr" onclick="toggleSection('customer-journey-card')" aria-expanded="true">
      <div class="sec-hdr-left">
        <span class="eyebrow">Section 10</span>
        <h2>Customer Journey &amp; Lifecycle</h2>
      </div>
      <button class="sec-toggle" aria-label="Toggle section">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body">

      <p>ALINE's customer lifecycle is driven by two distinct entry paths: <strong>pain-triggered search</strong> (organic/SEO — customer searching "plantar fasciitis insoles") and <strong>DRTV/social interruption</strong> (customer not actively looking but stops on a compelling ad). Both paths converge at the same PDP and require the same trust-building work.</p>

      <div style="overflow-x:auto">
        <table class="journey-table" style="min-width:780px">
          <thead>
            <tr>
              <th>Stage</th>
              <th>Customer Thinking</th>
              <th>Primary Channel</th>
              <th>Brand Action</th>
              <th>CX Role</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>1. Awareness</strong></td>
              <td>"My feet / knees are hurting. There must be something better out there." Or: "Interesting — I've never heard of alignment insoles."</td>
              <td>DRTV, paid social (Meta/TikTok), YouTube pre-roll, word of mouth from athletes or healthcare professionals</td>
              <td>Hook with the 66% alignment stat or athlete proof; show the pain → relief transformation; drive to PDP</td>
              <td>Not involved yet; ensure contact channels are visible on site</td>
            </tr>
            <tr>
              <td><strong>2. Consideration</strong></td>
              <td>"Is this actually different from the insoles I've tried? Is it worth the price? Does it really work?"</td>
              <td>PDP, reviews, FAQ, choose-by-shoe guide, retargeting, email (if subscribed), compare pages</td>
              <td>Science proof (66%, 100+ structures), testimonials from relatable people (chronic pain, athletes, nurses), model selection guide, guarantee visibility</td>
              <td>Live chat support for product questions; respond to email/social DM queries within 24 hrs; objection scripts</td>
            </tr>
            <tr>
              <td><strong>3. Purchase</strong></td>
              <td>"OK — 60-day guarantee removes the risk. I'll try Cushion since I run three times a week."</td>
              <td>Shopify checkout (alineinsoles.com), phone order via CX for assisted sales</td>
              <td>Guarantee visible at checkout; subscription upsell framed as "never run out, save money"; frictionless checkout; order confirmation email</td>
              <td>Assist with phone orders; guide model selection; note: insoles are sized by arch — confirm customer selects the right arch size</td>
            </tr>
            <tr>
              <td><strong>4. Onboarding</strong></td>
              <td>"These feel weird / different. Am I wearing them right? How long until I feel the difference?"</td>
              <td>Post-purchase email sequence, FAQ page, product packaging insert</td>
              <td>Break-in guide (1–2 hrs day one, +30–60 min daily, ~1 week to adapt); set expectation that initial sensation is alignment correction — not discomfort</td>
              <td>Handle early "these feel strange" contacts with reassurance and break-in guidance; do not process returns for customers who've worn them ≤ 3 days</td>
            </tr>
            <tr>
              <td><strong>5. Retention</strong></td>
              <td>"I need a second pair for my work boots." / "It's been 8 months — are these worn out?" / "Which model for cold weather?"</td>
              <td>Email (subscription reminders, multi-pair discount), paid retargeting, Shopify account portal</td>
              <td>Subscription renewal prompts; cross-sell to second model for a different shoe; seasonal campaigns (Climate in fall/winter); multi-pair discount messaging</td>
              <td>Handle subscription management (pause, swap, cancel); send replacement reminder outreach at ~8 months; cross-sell second model on service contacts</td>
            </tr>
            <tr>
              <td><strong>6. Advocacy</strong></td>
              <td>"I told my colleague / golf buddy / doctor about ALINE. They should try this."</td>
              <td>Organic social, word of mouth, product reviews, referral program (if active)</td>
              <td>Review request email at 45 days post-purchase; social share prompts; referral incentive if active; thank long-term customers</td>
              <td>Flag high-satisfaction contacts for review request follow-up; handle any review-related disputes with Brand Lead</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h3 style="margin-top:24px">Key Lifecycle Metrics to Watch</h3>
      <table>
        <tr><th>Metric</th><th>Owned By</th><th>Why It Matters for ALINE</th></tr>
        <tr><td>First-order return rate</td><td>CX / Marketing</td><td>High early returns = onboarding failure or model mismatch; check for break-in education gap</td></tr>
        <tr><td>Subscription take rate</td><td>Marketing / Growth</td><td>Subscriptions = predictable LTV; ALINE's 6–12 month replacement cycle is a natural subscription fit</td></tr>
        <tr><td>Multi-pair rate</td><td>Marketing / CX</td><td>Customers who own 2+ pairs have much higher LTV; cross-sell is a primary CX upsell opportunity</td></tr>
        <tr><td>Review volume &amp; rating</td><td>Marketing / Brand</td><td>Reviews are the primary trust signal for pain-sufferer consideration; Cushion leads at 162 reviews — protect and grow</td></tr>
        <tr><td>DRTV → website conversion</td><td>Marketing</td><td>Core acquisition channel; PDP clarity and guarantee visibility are the conversion levers</td></tr>
      </table>

    </div>
  </div>
</section>


<!-- ═══════════ SECTION 11 — MARKETING ANGLES & HOOKS ═══════════ -->
<section id="marketing-angles" aria-label="Marketing Angles and Hooks">
  <div class="card collapsible" id="marketing-angles-card">
    <div class="sec-hdr" onclick="toggleSection('marketing-angles-card')" aria-expanded="true">
      <div class="sec-hdr-left">
        <span class="eyebrow">Section 11</span>
        <h2>Marketing Angles &amp; Hooks</h2>
      </div>
      <button class="sec-toggle" aria-label="Toggle">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body">

      <div class="team-callout marketing" data-search="marketing angles hooks campaigns copy concepts">
        <strong>📢 Marketing — Angle Selection</strong>
        Match the angle to the audience segment and stage in the funnel. Pain Sufferer cold audiences respond best to angles 1 and 3. Athlete/Weekend Warrior audiences respond to angles 2 and 4. Retention and email use angles 5 and 6. Test one angle per ad set — don't blend them.
      </div>

      <h3>Core Marketing Angles</h3>
      <div class="angle-grid">
        <div class="angle" data-search="marketing angle pain problem foot knee alignment">
          <div class="angle-icon">😣</div>
          <h4>Angle 1 — The Root Cause</h4>
          <p>Your foot pain isn't a comfort problem — it's an alignment problem. Every pharmacy insole treats the symptom. ALINE corrects the cause: misaligned ankles and knees that stress the fascia, joints, and back with every step.</p>
          <div style="margin-top:10px;font-size:12px;font-family:'DM Mono',monospace;color:var(--al-red)">Best for: cold audiences · pain sufferers · plantar fasciitis search traffic</div>
        </div>
        <div class="angle" data-search="marketing angle athlete proof performance elite champion">
          <div class="angle-icon">🏅</div>
          <h4>Angle 2 — Podium Proof</h4>
          <p>Olympic medals. X Games golds. PGA cuts. NFL seasons. For 20+ years, the world's most demanding athletes have worn ALINE — not because they're sponsored, but because it works. If it performs at that level, imagine what it does for your Saturday run.</p>
          <div style="margin-top:10px;font-size:12px;font-family:'DM Mono',monospace;color:var(--al-red)">Best for: male sport audiences · golf/cycling/basketball segments · awareness</div>
        </div>
        <div class="angle" data-search="marketing angle tried everything nothing worked insoles failed">
          <div class="angle-icon">🔄</div>
          <h4>Angle 3 — The Upgrade</h4>
          <p>"I've tried every insole." We hear it constantly — and we understand. Most insoles add cushion. ALINE adds alignment. It's a fundamentally different product that works on a fundamentally different mechanism. This isn't another insole. It's the first one that actually addresses your alignment.</p>
          <div style="margin-top:10px;font-size:12px;font-family:'DM Mono',monospace;color:var(--al-red)">Best for: retargeting · pain sufferer warm audiences · comparison searchers</div>
        </div>
        <div class="angle" data-search="marketing angle science proof 66 percent patented measurement">
          <div class="angle-icon">🔬</div>
          <h4>Angle 4 — The 66% Claim</h4>
          <p>ALINE is the only insole that improves ankle and knee alignment by 66% — a measured, patented outcome, not a marketing estimate. 100+ dynamic support structures. Proven across two decades and multiple Olympics. Numbers don't lie.</p>
          <div style="margin-top:10px;font-size:12px;font-family:'DM Mono',monospace;color:var(--al-red)">Best for: analytical buyers · healthcare professionals · comparison page visitors</div>
        </div>
        <div class="angle" data-search="marketing angle subscription replace auto-pair 6 months renewal">
          <div class="angle-icon">🔁</div>
          <h4>Angle 5 — The Replacement Reminder</h4>
          <p>Insoles wear out — and most people don't notice until their feet start hurting again. ALINE's alignment structures degrade over 6–12 months of use. Auto-Pair subscription means you never slip back into misalignment without realising it.</p>
          <div style="margin-top:10px;font-size:12px;font-family:'DM Mono',monospace;color:var(--al-red)">Best for: existing customers · retention emails · 6–8 month post-purchase</div>
        </div>
        <div class="angle" data-search="marketing angle multi-pair different shoes every shoe">
          <div class="angle-icon">👟</div>
          <h4>Angle 6 — One Per Shoe</h4>
          <p>Alignment is cumulative. Wearing ALINE in your running shoes but not your work boots means you're misaligned for half your day. Most customers end up with 2–3 pairs — and the multi-pair discount makes it the smarter buy. Consistent alignment, all day, every shoe.</p>
          <div style="margin-top:10px;font-size:12px;font-family:'DM Mono',monospace;color:var(--al-red)">Best for: post-purchase upsell · email · existing customer retargeting</div>
        </div>
      </div>

      <h3 style="margin-top:28px">Proven Ad Hooks</h3>
      <p class="note">These are opening lines / on-screen text hooks proven to stop the scroll. Use verbatim or adapt with product-specific detail. Never lead with brand name — lead with problem or claim.</p>
      <div class="hooks" data-search="hooks ad copy headlines proven scroll stop">
        <div class="hook">Your foot pain isn't a cushion problem. It's an alignment problem.</div>
        <div class="hook">The only insoles that improve your knee alignment by 66% — measured, patented, proven.</div>
        <div class="hook">I tried every insole for 3 years. Then I tried ALINE.</div>
        <div class="hook">Olympians don't wear these for comfort. They wear them because it works.</div>
        <div class="hook">If your plantar fasciitis keeps coming back, this is why.</div>
        <div class="hook">Your shoes are destroying your knees. Here's what your podiatrist probably didn't tell you.</div>
        <div class="hook">100+ moving parts. One insole. Every step realigned.</div>
        <div class="hook">Stop switching insoles. Start fixing alignment.</div>
        <div class="hook">How a delivery driver eliminated 3 years of back pain in 2 weeks.</div>
      </div>

      <div class="team-callout creative" style="margin-top:20px" data-search="hooks angles creative briefs test concepts">
        <strong>🎨 Creative — Using Hooks as Briefs</strong>
        Each hook above pairs with one of the six angles. "Your foot pain isn't a cushion problem" → Angle 1. "Olympians don't wear these for comfort" → Angle 2. Use the hook as the first frame/first line of any ad. Test the hook in isolation (static with text only) before investing in full video production.
      </div>

    </div>
  </div>
</section>


<!-- ═══════════ SECTION 12 — SAMPLE WINNING CREATIVES ═══════════ -->

<!-- §13 HEALTH & SURVEY DATA -->
<section id="health-data" aria-label="Health and Survey Data">
  <div class="card collapsible" id="health-data-card">
    <div class="sec-hdr" onclick="toggleSection('health-data-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 13</span><h2>Health &amp; Survey Data</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <div class="team-callout brand" data-search="health data claims legal compliance survey statistics">
        <strong>🌿 Brand — Claims Usage Rules</strong>
        All claims below are sourced from ALINE's published product pages and patent documentation. Before deploying any health claim in advertising, confirm with Brand Lead and Legal that it meets current FTC guidelines. Never extend beyond the sourced claim.
      </div>
      <h3>Primary Patented Performance Claim</h3>
      <div class="stat-boxes">
        <div class="stat-box"><div class="stat-big">66%</div><div class="stat-lbl">Improvement in ankle &amp; knee alignment — patented, measured outcome</div></div>
        <div class="stat-box"><div class="stat-big">100+</div><div class="stat-lbl">Dynamic support &amp; suspension structures per insole</div></div>
        <div class="stat-box"><div class="stat-big">20+</div><div class="stat-lbl">Years of biomechanical innovation powering elite athletes</div></div>
        <div class="stat-box"><div class="stat-big">2M</div><div class="stat-lbl">Average steps per person per year — each one misaligning or aligning the body</div></div>
      </div>
      <h3 style="margin-top:24px">Conditions ALINE Addresses — Approved Claim Language</h3>
      <table>
        <thead><tr><th>Condition</th><th>ALINE Mechanism</th><th>Approved Marketing Language</th></tr></thead>
        <tbody>
          <tr><td><strong>Plantar Fasciitis</strong></td><td>Corrects alignment that loads excess stress on plantar fascia</td><td>"Helps relieve plantar fasciitis" ✓</td></tr>
          <tr><td><strong>Overpronation</strong></td><td>Activation &amp; compression zones counteract inward ankle roll</td><td>"Helps prevent overpronation" ✓</td></tr>
          <tr><td><strong>Neuromas</strong></td><td>Reduces forefoot pressure through alignment and arch support</td><td>"Helps relieve neuroma discomfort" ✓</td></tr>
          <tr><td><strong>Bunions</strong></td><td>Alignment correction reduces lateral forefoot pressure</td><td>"Helps relieve bunion discomfort" ✓</td></tr>
          <tr><td><strong>Knee Pain</strong></td><td>66% alignment improvement reduces compressive forces on knee joint</td><td>"Helps reduce knee strain from misalignment" ✓</td></tr>
          <tr><td><strong>Lower Back Pain</strong></td><td>Full kinetic chain correction reduces lumbar stress</td><td>"May help reduce lower back strain" — use "may" ✓</td></tr>
          <tr><td><strong>General Foot Fatigue</strong></td><td>Shock absorption + alignment reduces cumulative fatigue load</td><td>"Reduces foot fatigue" ✓</td></tr>
        </tbody>
      </table>
      <h3 style="margin-top:20px">Product Usage Data</h3>
      <table>
        <thead><tr><th>Data Point</th><th>Detail</th></tr></thead>
        <tbody>
          <tr><td>Lifespan</td><td>6–12 months depending on activity level and frequency</td></tr>
          <tr><td>Break-in protocol</td><td>Start 1–2 hrs day one; add 30–60 min daily; adapt within ~1 week</td></tr>
          <tr><td>Arch sizing</td><td>Sized by arch (S/M/L/XL) — not standard shoe size</td></tr>
          <tr><td>Fit rule</td><td>Fits any shoe with a removable insole — remove stock insole first</td></tr>
          <tr><td>Shipping restriction</td><td>Continental US only — AK, HI, PR, international: escalate to CX Fulfillment Supervisor</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- §14 SOCIAL MEDIA -->
<section id="social-media" aria-label="Social Media and Digital Channels">
  <div class="card collapsible" id="social-media-card">
    <div class="sec-hdr" onclick="toggleSection('social-media-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 14</span><h2>Social Media &amp; Digital Channels</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <div class="team-callout marketing" data-search="social media channels platforms cadence hashtags posting wind-down">
        <strong>📢 Marketing — Wind-Down Social Strategy</strong>
        ALINE is in inventory wind-down. Organic social cadence may be reduced. Prioritise selling through existing inventory over brand-building content. Maintain minimum presence on active channels to support paid traffic trust checks. Confirm current posting cadence with Brand Lead.
      </div>
      <h3>Platform Reference</h3>
      <table>
        <thead><tr><th>Platform</th><th>Handle</th><th>Role</th><th>Tone Mode</th></tr></thead>
        <tbody>
          <tr><td><strong>Twitter / X</strong></td><td><a href="https://twitter.com/ALINEInsoles" target="_blank" rel="noopener">@ALINEInsoles</a></td><td>Brand voice, athlete proof, claims</td><td>Performance Coach + Science Communicator</td></tr>
          <tr><td><strong>Instagram</strong></td><td>Verify handle with Brand Lead</td><td>Visual lifestyle, testimonials</td><td>Athlete Champion + Empathetic Listener</td></tr>
          <tr><td><strong>Facebook</strong></td><td>Verify with Brand Lead</td><td>Primary paid ad placement</td><td>Trusted Advisor + CX Warm Helper</td></tr>
          <tr><td><strong>TikTok</strong></td><td>Verify with Brand Lead</td><td>Native video, UGC amplification</td><td>Empathetic Listener + Performance Coach</td></tr>
        </tbody>
      </table>
      <h3 style="margin-top:20px">Brand Hashtags</h3>
      <table>
        <thead><tr><th>Type</th><th>Hashtag</th><th>Use</th></tr></thead>
        <tbody>
          <tr><td><span class="badge badge-red">Always</span></td><td>#ALINEInsoles</td><td>Every organic post</td></tr>
          <tr><td><span class="badge badge-red">Always</span></td><td>#MoveBetterFeelBetter</td><td>All lifestyle posts</td></tr>
          <tr><td><span class="badge badge-dark">Category</span></td><td>#FootHealth #PlantarFasciitis #FootPain</td><td>Pain/condition content</td></tr>
          <tr><td><span class="badge badge-dark">Activity</span></td><td>#GolfInsoles #RunningInsoles #WinterSports</td><td>Model-specific posts</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- §15 PARTNERSHIPS -->
<section id="partnerships" aria-label="Partnerships and Influencer Guidelines">
  <div class="card collapsible" id="partnerships-card">
    <div class="sec-hdr" onclick="toggleSection('partnerships-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 15</span><h2>Partnerships &amp; Influencer Guidelines</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <div class="team-callout marketing" data-search="influencer partnerships ambassador guidelines wind-down">
        <strong>📢 Marketing — Wind-Down Partnership Note</strong>
        Given ALINE's inventory wind-down status, no new long-term partnership commitments should be made without Brand Lead approval. Existing partnerships should be managed to conclusion. All inbound partnership inquiries: route to Marketing / Partnerships.
      </div>
      <h3>Ideal Ambassador Profile</h3>
      <table>
        <thead><tr><th>Dimension</th><th>Fit</th></tr></thead>
        <tbody>
          <tr><td>Category</td><td>Endurance athletes, golf, cycling, healthcare professionals (podiatrists, PTs), fitness creators, workplace wellness</td></tr>
          <tr><td>Audience Size</td><td>Micro (10K–100K) with high engagement preferred — authentic niche over mass reach</td></tr>
          <tr><td>Content Style</td><td>Educational and testimonial — partners who explain <em>why</em> they use the product, not just show it</td></tr>
          <tr><td>Red Flags</td><td>Partners promoting competing insole/orthotic brands; undisclosed partnership history; no evident connection to movement or physical health</td></tr>
        </tbody>
      </table>
      <h3 style="margin-top:20px">Content Do's &amp; Don'ts</h3>
      <div class="do-dont">
        <div class="do-box"><h4>✅ Do</h4><ul>
          <li>Use ALINE in your actual activity — authentic context only</li>
          <li>Include FTC disclosure: #ad or #sponsored at start of caption</li>
          <li>Direct to alineinsoles.com only — not third-party sellers</li>
          <li>Reference the money-back guarantee when applicable</li>
        </ul></div>
        <div class="dont-box"><h4>❌ Don't</h4><ul>
          <li>Say "cures" or "treats" — use "helps relieve" or "helps with"</li>
          <li>Name competitors in ads without Legal clearance</li>
          <li>Use or offer discount codes without checking the monthly sheet</li>
          <li>Make restocking or future availability promises (wind-down brand)</li>
        </ul></div>
      </div>
      <div class="hazard-callout" data-search="FTC disclosure influencer paid partnership legal required">
        <div class="hazard-stripe"></div>
        <div class="hazard-body">
          <strong>⚖️ FTC Disclosure — Required</strong>
          All partners receiving compensation (payment, product, commission) must disclose with #ad or #sponsored at the start of their caption, or use the platform's native "Paid partnership" tag. Marketing must confirm disclosure language before any partner goes live.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- §16 DISCOUNTS -->
<section id="discounts" aria-label="Discounts and Promo Codes">
  <div class="card collapsible" id="discounts-card">
    <div class="sec-hdr" onclick="toggleSection('discounts-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 16</span><h2>Discounts &amp; Promo Codes</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <div class="hazard-callout" data-search="discounts promo codes monthly sheet source of truth">
        <div class="hazard-stripe"></div>
        <div class="hazard-body">
          <strong>⚠️ Always Check the Monthly Discount Sheet First</strong>
          The monthly discount sheet is the single source of truth for all active codes. Do not honor codes from memory, from old emails, or from what a customer claims they "saw online." Expired codes must never be applied without manager approval.
        </div>
      </div>
      <div class="team-callout cx" data-search="discounts CX verify sheet goodwill code expired">
        <strong>📞 CX — Verification Rule</strong>
        Before entering any promo code on behalf of a customer, pull up the current monthly discount sheet. If a code is expired and the customer's ask is reasonable, you may use the CX goodwill code — log it and note the reason. Never honor codes you cannot verify.
      </div>
      <div class="team-callout newhire" data-search="discounts new hire first week sheet link">
        <strong>👋 New Hire — Week 1</strong>
        Ask your manager or post in #discounts for the monthly discount sheet link. Bookmark it. You will reference it on nearly every CX contact involving pricing.
      </div>
      <h3>Discount Format Reference</h3>
      <table>
        <thead><tr><th>Format</th><th>How It Works</th><th>Evergreen?</th></tr></thead>
        <tbody>
          <tr><td><strong>Promo Code</strong></td><td>Customer enters alphanumeric code at checkout</td><td>Depends — check sheet</td></tr>
          <tr><td><strong>Full-Site Flip</strong></td><td>Sitewide automatic discount, no code needed</td><td>No — time-bound only</td></tr>
          <tr><td><strong>Bundle / Cart Threshold</strong></td><td>Triggered by cart value or item count</td><td>Varies</td></tr>
          <tr><td><strong>Subscription Discount</strong></td><td>Auto-Pair subscription standing discount</td><td><strong>Yes — always on</strong></td></tr>
          <tr><td><strong>New Customer Discount</strong></td><td>First-order discount for new accounts</td><td><strong>Yes — always on</strong></td></tr>
        </tbody>
      </table>
      <h3 style="margin-top:20px">Discount Channel Ownership</h3>
      <table>
        <thead><tr><th>Channel</th><th>Owner</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Email / SMS</td><td>Marketing</td><td>Must be on sheet before send</td></tr>
          <tr><td>Paid Media</td><td>Marketing</td><td>Landing-page specific; on sheet before launch</td></tr>
          <tr><td>CX Goodwill</td><td>CX</td><td>One-time courtesy for reasonable expired-code requests; log every use</td></tr>
          <tr><td>Influencer / Partnerships</td><td>Marketing / Partnerships</td><td>Must be on sheet before partner posts</td></tr>
          <tr><td>Subscription (evergreen)</td><td>Marketing / Growth</td><td>Always active unless sheet flags otherwise</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- §17 SEO -->
<section id="seo" aria-label="SEO">
  <div class="card collapsible" id="seo-card">
    <div class="sec-hdr" onclick="toggleSection('seo-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 17</span><h2>SEO</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <p>SEO is ALINE's earned traffic channel — it compounds over months and is the highest-intent acquisition path. During wind-down, existing SEO value should be maintained but major new investment is not warranted.</p>
      <div class="team-callout creative" data-search="SEO images alt text compress filenames creative">
        <strong>🎨 Creative — Every Image Needs SEO Treatment</strong>
        Name files descriptively (aline-cushion-insoles-running.webp — not IMG_4521.jpg) and include alt text with the target keyword. Compress to WebP before upload.
      </div>
      <h3>Priority Keyword Themes</h3>
      <div class="seo-kw-grid">
        <div class="seo-kw"><div class="seo-kw-theme">🦶 Plantar Fasciitis Relief</div><div class="seo-kw-examples">best insoles for plantar fasciitis<br>plantar fasciitis insoles reviews<br>shoe inserts plantar fasciitis</div></div>
        <div class="seo-kw"><div class="seo-kw-theme">⚙️ Alignment &amp; Orthotics</div><div class="seo-kw-examples">best alignment insoles<br>insoles that improve knee alignment<br>dynamic orthotic insoles</div></div>
        <div class="seo-kw"><div class="seo-kw-theme">🏃 Sport-Specific</div><div class="seo-kw-examples">best insoles for running<br>golf insoles alignment<br>insoles for work boots</div></div>
        <div class="seo-kw"><div class="seo-kw-theme">❄️ Cold Weather</div><div class="seo-kw-examples">best insoles for skiing<br>winter boot insoles warm<br>cold weather insoles</div></div>
        <div class="seo-kw"><div class="seo-kw-theme">💰 Custom Orthotics Alternative</div><div class="seo-kw-examples">custom orthotics alternative<br>OTC orthotics vs custom<br>best over the counter orthotics</div></div>
        <div class="seo-kw"><div class="seo-kw-theme">🦵 Joint &amp; Pain Relief</div><div class="seo-kw-examples">insoles for knee pain<br>insoles for lower back pain<br>best insoles for foot fatigue</div></div>
      </div>
      <h3 style="margin-top:20px">Tracking</h3>
      <table>
        <thead><tr><th>Tool</th><th>Role</th><th>Owner</th></tr></thead>
        <tbody>
          <tr><td><strong>Google Search Console</strong></td><td>Primary — impressions, clicks, position, Core Web Vitals</td><td>Marketing</td></tr>
          <tr><td><strong>Shopify Analytics</strong></td><td>Organic traffic sessions and conversion by landing page</td><td>Marketing / Growth</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- §18 CRO -->
<section id="cro" aria-label="CRO">
  <div class="card collapsible" id="cro-card">
    <div class="sec-hdr" onclick="toggleSection('cro-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 18</span><h2>CRO</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <p>Converting existing traffic is cheaper than acquiring new traffic. During wind-down, focus CRO effort on high-impact, low-cost levers — not multi-month test programmes.</p>
      <div class="team-callout creative" data-search="CRO creative above fold what who why trust 3 seconds">
        <strong>🎨 Creative — 3-Second Rule</strong>
        Everything above the fold on the ALINE PDP must answer: <strong>What is this?</strong> · <strong>Who is it for?</strong> · <strong>Why trust it?</strong> — all within 3 seconds. If any of the three are missing above the fold, that's the first CRO fix.
      </div>
      <h3>6-Stage Conversion Funnel</h3>
      <div class="cro-funnel">
        <div class="cro-stage"><div class="cro-stage-num">1</div><div class="cro-stage-label">Landing</div><div class="cro-stage-q">"What is this and is it for me?"</div></div>
        <div class="cro-stage"><div class="cro-stage-num">2</div><div class="cro-stage-label">PDP</div><div class="cro-stage-q">"Does it solve my exact problem? Is it proven?"</div></div>
        <div class="cro-stage"><div class="cro-stage-num">3</div><div class="cro-stage-label">Add to Cart</div><div class="cro-stage-q">"Is it worth it? Am I choosing the right model?"</div></div>
        <div class="cro-stage"><div class="cro-stage-num">4</div><div class="cro-stage-label">Cart</div><div class="cro-stage-q">"Should I add more? How close am I to free shipping?"</div></div>
        <div class="cro-stage"><div class="cro-stage-num">5</div><div class="cro-stage-label">Checkout</div><div class="cro-stage-q">"Is this secure? What if it doesn't work?"</div></div>
        <div class="cro-stage"><div class="cro-stage-num">6</div><div class="cro-stage-label">Post-Purchase</div><div class="cro-stage-q">"Did I make the right choice? When does it arrive?"</div></div>
      </div>
      <h3 style="margin-top:20px">High-Impact Levers</h3>
      <table>
        <thead><tr><th>Lever</th><th>Stage</th><th>ALINE Application</th></tr></thead>
        <tbody>
          <tr><td>Hero clarity</td><td>PDP</td><td>H1 = model name + primary benefit + 66% claim above fold</td></tr>
          <tr><td>Social proof</td><td>PDP</td><td>Star rating + review count visible without scrolling</td></tr>
          <tr><td>Free-shipping progress bar</td><td>Cart</td><td>"[X] away from free shipping" — link to <a href="https://alineinsoles.com/policies/shipping-policy" target="_blank" rel="noopener">shipping policy</a> for current threshold</td></tr>
          <tr><td>Guarantee visibility</td><td>Checkout</td><td>Money-back guarantee badge prominent at checkout</td></tr>
          <tr><td>Cart recovery</td><td>Post-abandon</td><td>Email + SMS; lead with guarantee, not just "you forgot something"</td></tr>
          <tr><td>Mobile optimisation</td><td>All</td><td>DRTV traffic hits mobile first; CTA buttons must be ≥48px</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- §19 GLOSSARY -->
<section id="glossary" aria-label="Glossary">
  <div class="card collapsible" id="glossary-card">
    <div class="sec-hdr" onclick="toggleSection('glossary-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 19</span><h2>Glossary</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <div class="glossary-grid">
        <div class="gloss-item gloss-evergreen" data-search="glossary evergreen offer discount always on subscribe">
          <div class="gloss-term">⭐ Evergreen Offer</div>
          <div class="gloss-def">A discount always live — not tied to a calendar event. For ALINE: the <strong>Subscribe &amp; Save (Auto-Pair) discount</strong> and the <strong>New Customer first-order discount</strong>. Assume active unless the monthly discount sheet flags otherwise.</div>
        </div>
        <div class="gloss-item" data-search="glossary active alignment dynamic foot correction">
          <div class="gloss-term">Active Alignment</div>
          <div class="gloss-def">ALINE's core technology — structures continuously correct foot position throughout the gait cycle with every step, rather than sitting passively like foam cushioning.</div>
        </div>
        <div class="gloss-item" data-search="glossary suspension zone technology patent structures">
          <div class="gloss-term">Suspension Zone Technology</div>
          <div class="gloss-def">ALINE's patented system of 100+ dynamic support and suspension structures. These flex, rebound, and respond to foot movement to maintain alignment across variable terrain and motion.</div>
        </div>
        <div class="gloss-item" data-search="glossary auto-pair subscription 6 12 months replace">
          <div class="gloss-term">Auto-Pair Subscription</div>
          <div class="gloss-def">Optional recurring replacement program — customers receive a fresh pair every 6 or 12 months. Can be paused, swapped, or cancelled via the account portal. Always active (evergreen offer). Note: subject to inventory availability during wind-down.</div>
        </div>
        <div class="gloss-item" data-search="glossary break-in period adjustment 1-2 hours adaptation">
          <div class="gloss-term">Break-In Period</div>
          <div class="gloss-def">Start with 1–2 hours day one; add 30–60 minutes daily; most customers fully adapt within one week. Initial unfamiliar sensation is alignment correction, not discomfort. CX must communicate this before processing early returns.</div>
        </div>
        <div class="gloss-item" style="border-left-color:var(--al-danger);opacity:.85" data-search="glossary TABs kit discontinued heel clips medial lateral tilt">
          <div class="gloss-term">ALINE TABs Kit <span class="badge-disc-red" style="font-size:10px;vertical-align:middle">Discontinued</span></div>
          <div class="gloss-def">Previously sold separately — heel-slot clips to adjust foot tilt for personalised alignment. <strong>Discontinued — no longer available.</strong> Direct enquiries to CX; escalate alignment-specific needs to Brand Lead.</div>
        </div>
        <div class="gloss-item" data-search="glossary arch sizing S M L XL arch not shoe size">
          <div class="gloss-term">Arch Sizing</div>
          <div class="gloss-def">ALINE insoles are sized by arch measurement (S/M/L/XL) — not by shoe size. Confirm arch size on every assisted purchase; mismatch is the most common cause of early-return contacts.</div>
        </div>
        <div class="gloss-item" data-search="glossary DRTV direct response television infomercial as seen on TV">
          <div class="gloss-term">DRTV</div>
          <div class="gloss-def">Direct Response Television — the primary marketing format through which Inventel drives ALINE awareness. Customers who describe seeing "an ad on TV" arrived via DRTV.</div>
        </div>
        <div class="gloss-item" data-search="glossary 66 percent alignment claim patented measurement">
          <div class="gloss-term">The 66% Claim</div>
          <div class="gloss-def">ALINE's primary differentiator — a measured, patented outcome showing 66% improvement in ankle and knee alignment. Always reference with "patented" or "measured" alongside it. Never present as a marketing estimate.</div>
        </div>
        <div class="gloss-item" data-search="glossary processing handling fee return refund deducted">
          <div class="gloss-term">Processing &amp; Handling Fee</div>
          <div class="gloss-def">Fee deducted from return refunds — varies by original order. Always quote upfront before the customer ships. Do not let customers discover this after shipping the product back.</div>
        </div>
        <div class="gloss-item" data-search="glossary RMA return merchandise authorization number">
          <div class="gloss-term">RMA</div>
          <div class="gloss-def">Return Merchandise Authorisation. Issued by CX before any return is shipped. No return should be accepted without an RMA. Customers with accounts request via portal; guest customers contact CX.</div>
        </div>
        <div class="gloss-item" data-search="glossary wind-down inventory clearance status brand">
          <div class="gloss-term">Wind-Down Brand</div>
          <div class="gloss-def">ALINE is in inventory wind-down — selling existing stock with no new production planned. Process all orders and returns normally but do not promise restocking, new models, or future availability. Escalate brand-status questions to Brand Lead.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- §20 RETURN POLICY -->
<section id="return-policy" aria-label="Return Policy">
  <div class="card collapsible" id="return-policy-card">
    <div class="sec-hdr" onclick="toggleSection('return-policy-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 20</span><h2>Return Policy / Happiness Guarantee</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <div class="team-callout cx" data-search="return policy CX steps RMA process initiate refund">
        <strong>📞 CX — Return Process (Every Time)</strong>
        1) Verify purchase date — must be within 60 days for refund, 30 days for exchange. 2) If worn ≤3 days, coach through break-in before processing. 3) Quote the processing/handling fee upfront before customer ships. 4) Issue RMA number. 5) Initiate refund when carrier pickup is confirmed — not when customer says they shipped. 6) Remind that credit card refunds take up to 30 days; PayPal up to 180 days.
      </div>
      <h3>Published Policy — verbatim from <a href="https://alineinsoles.com/policies/refund-policy" target="_blank" rel="noopener">alineinsoles.com/policies/refund-policy</a></h3>
      <div class="card" style="background:var(--al-cream);border:2px solid rgba(204,31,23,.2);padding:24px 28px">
        <p style="font-size:15px;font-weight:600;color:#111111;margin-bottom:12px">100% Money-Back Guarantee — 60-Day Return Policy</p>
        <p style="font-size:14px;line-height:1.75;margin-bottom:10px">We offer a 100% money-back guarantee. Contact us within our <strong>60-Day Return Policy</strong> (Note: Some Exceptions May Apply*). All Returns Are Subject to Processing and Handling Fees Which Vary Depending on Your Original Order. If You Decide to Cancel or Return Your Order, You Will Be Responsible for The Cost of Return Shipping.</p>
        <p style="font-size:14px;line-height:1.75;margin-bottom:10px">Contact us at <a href="mailto:support@alineinsoles.com">support@alineinsoles.com</a> or <a href="tel:+18883165658">+1-888-316-5658</a>. We will initiate your refund when we receive confirmation that you delivered your return parcel to the shipping carrier.</p>
        <p style="font-size:14px;line-height:1.75;margin-bottom:0">You can exchange any product as long as we receive your exchange request within <strong>30 days</strong> of the original purchase date. Exchanges require insoles to be in resellable condition.</p>
      </div>
      <h3 style="margin-top:20px">Policy Quick-Reference</h3>
      <table>
        <thead><tr><th>Policy Point</th><th>Detail</th></tr></thead>
        <tbody>
          <tr><td>Refund window</td><td>60 days from purchase</td></tr>
          <tr><td>Exchange window</td><td>30 days; resellable condition required</td></tr>
          <tr><td>Return shipping</td><td>Customer pays — always quote upfront</td></tr>
          <tr><td>Processing &amp; handling fee</td><td>Varies by order — confirm before quoting; deducted from refund</td></tr>
          <tr><td>Refund trigger</td><td>When carrier pickup is confirmed — not when customer claims to have shipped</td></tr>
          <tr><td>Credit card refund time</td><td>Up to 30 days after authorization</td></tr>
          <tr><td>PayPal refund time</td><td>Up to 180 days after authorization</td></tr>
          <tr><td>Original shipping cost</td><td>Not refunded — product cost only</td></tr>
        </tbody>
      </table>
      <div class="team-callout cx" style="margin-top:16px" data-search="return CX upfront fee quote before shipping">
        <strong>📞 CX — Always Quote the Fee Upfront</strong>
        Before the customer ships anything: (1) they pay return shipping, and (2) a processing/handling fee will be deducted from their refund. Customers who discover these after shipping often escalate to chargebacks.
      </div>
      <div class="team-callout cx" style="margin-top:12px" data-search="return CX break-in do not process early returns 3 days">
        <strong>📞 CX — No Early Returns for Sub-3-Day Use</strong>
        If a customer says insoles feel uncomfortable and they've worn them 1–3 days, do not initiate a return. Walk them through break-in: start 1–2 hrs, add 30–60 min daily, allow ~1 week. Many early-return contacts become retained customers after break-in guidance.
      </div>
      <div class="team-callout newhire" style="margin-top:12px" data-search="return new hire refund math worked example fee calculation">
        <strong>👋 New Hire — Worked Refund Example</strong>
        Customer bought Cushion Insoles at [current price — check Shopify order] + shipping. Returns within 60 days. <strong>Refund = product price − processing/handling fee (confirm current amount) = net refund.</strong> Original shipping is not refunded. Customer also pays return shipping. Pull the actual paid amount from Shopify — never guess from memory.
      </div>
    </div>
  </div>
</section>

<!-- §21 FULFILLMENT & SHIPPING -->
<section id="fulfillment" aria-label="Fulfillment and Shipping">
  <div class="card collapsible" id="fulfillment-card">
    <div class="sec-hdr" onclick="toggleSection('fulfillment-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 21 · v4 — Identical Across All Hubs</span><h2>Fulfillment &amp; Shipping</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <div class="team-callout cx" data-search="fulfillment warehouse address Pompton Plains NJ returns ship">
        <strong>📞 CX — Warehouse Address (All Orders &amp; Returns)</strong>
        <strong>Inventel Warehouse · 240 West Parkway, Middle Door · Pompton Plains, NJ 07444</strong>
      </div>
      <h3>Order Fulfilment Flow</h3>
      <table>
        <thead><tr><th>Step</th><th>What Happens</th><th>CX Note</th></tr></thead>
        <tbody>
          <tr><td><strong>1. Order Placed</strong></td><td>Checkout complete; confirmation email sent</td><td>Not received within 30 min → check Shopify, advise spam check</td></tr>
          <tr><td><strong>2. Label Printed</strong></td><td>Shipping label generated; brief cancellation window</td><td>Cancel requests must come immediately — once picked, cannot guarantee cancellation</td></tr>
          <tr><td><strong>3. Warehouse Picks &amp; Packs</strong></td><td>240 West Parkway fulfils the order</td><td>Do not call warehouse directly — route all queries through CX Fulfillment Supervisor</td></tr>
          <tr><td><strong>4. Carrier Transit</strong></td><td>3–7 business days continental US standard ground</td><td>No tracking after 3 business days → escalate to CX Fulfillment Supervisor</td></tr>
          <tr><td><strong>5. Delivery</strong></td><td>Delivered to customer address</td><td>Lost/damaged → escalate; do not reship without supervisor sign-off</td></tr>
        </tbody>
      </table>
      <h3 style="margin-top:20px">Shipping Reference</h3>
      <table class="shipping-table">
        <thead><tr><th>Service</th><th>Region</th><th>Est. Transit</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Ground Standard</td><td>Continental US</td><td>3–7 business days</td><td>Free above current threshold — see <a href="https://alineinsoles.com/policies/shipping-policy" target="_blank" rel="noopener">shipping policy</a></td></tr>
          <tr><td>Ground East Coast</td><td>NJ/NY/PA/CT/MA/MD/VA/NC region</td><td>2–3 business days</td><td>Proximity to Pompton Plains, NJ warehouse</td></tr>
          <tr><td>Ground Midwest</td><td>IL/OH/MI/MN region</td><td>3–4 business days</td><td>Standard ground</td></tr>
          <tr><td>Ground West Coast</td><td>CA/OR/WA/NV/AZ region</td><td>4–6 business days</td><td>Standard ground</td></tr>
          <tr><td>AK / HI / PR / Territories</td><td>Non-contiguous US</td><td>Not supported by default</td><td><strong>Escalate to CX Fulfillment Supervisor</strong></td></tr>
          <tr><td>International</td><td>Outside US</td><td>Not supported</td><td>Continental US only</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- §22 TEST ORDERS -->
<section id="test-orders" aria-label="Test Orders">
  <div class="card collapsible" id="test-orders-card">
    <div class="sec-hdr" onclick="toggleSection('test-orders-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 22 · v4</span><h2>Test Orders</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <div class="test-order-callout" data-search="test orders first name field Test Order critical mandatory zero exceptions">
        <div class="test-order-stripe"></div>
        <div class="test-order-body">
          <strong>🚨 Critical — Zero Exceptions</strong>
          YOU MUST type <strong>"Test Order"</strong> in the First Name field of every test order. Failure triggers real warehouse fulfilment and wastes real resources.
        </div>
      </div>
      <table>
        <thead><tr><th>Step</th><th>Action</th><th>Detail</th></tr></thead>
        <tbody>
          <tr><td><strong>1</strong></td><td>First Name = <span class="disc-highlight">Test Order</span></td><td>Exactly this — flags the order in Shopify for the warehouse</td></tr>
          <tr><td><strong>2</strong></td><td>Last Name = Your Name</td><td>Identifies who placed the test for accountability</td></tr>
          <tr><td><strong>3</strong></td><td>Shipping = Inventel Office</td><td><strong>200 Forge Way, Unit 1, Rockaway, NJ 07866</strong></td></tr>
          <tr><td><strong>4</strong></td><td>Any valid payment</td><td>Required for Shopify to process; refunded/voided after confirmation</td></tr>
          <tr><td><strong>5</strong></td><td>Notify CX Fulfillment Lead immediately</td><td>Google Chat: order # + what was tested + when it can be cancelled</td></tr>
          <tr><td><strong>6</strong></td><td>Wait for confirmation</td><td>Test is not complete until CX Fulfillment Lead confirms</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- §23 SHOPIFY -->
<section id="shopify" aria-label="Shopify Platform">
  <div class="card collapsible" id="shopify-card">
    <div class="sec-hdr" onclick="toggleSection('shopify-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 23 · v4</span><h2>Shopify Platform</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <p>All Inventel storefronts — including alineinsoles.com — run on <strong>Shopify</strong>.</p>
      <h3>CX Implications</h3>
      <table>
        <thead><tr><th>Function</th><th>CX Implication</th></tr></thead>
        <tbody>
          <tr><td><strong>Storefront / Checkout</strong></td><td>If checkout is broken, escalate to Web Dev immediately</td></tr>
          <tr><td><strong>Customer Accounts</strong></td><td>Customers without accounts can't see order history online — CX looks up by email or order number in admin</td></tr>
          <tr><td><strong>Order Management</strong></td><td>All orders, statuses, tracking, and refunds in Shopify admin</td></tr>
          <tr><td><strong>Discount Codes</strong></td><td>If a valid sheet code doesn't work, escalate to Web Dev — may be inactive in Shopify</td></tr>
          <tr><td><strong>Subscriptions</strong></td><td>If customer can't manage via account portal, escalate to CX Fulfillment Supervisor</td></tr>
          <tr><td><strong>Refunds</strong></td><td>Up to 30 days (credit card) or 180 days (PayPal) to appear after authorisation</td></tr>
        </tbody>
      </table>
      <h3 style="margin-top:20px">Key URLs</h3>
      <table>
        <thead><tr><th>Page</th><th>URL</th></tr></thead>
        <tbody>
          <tr><td>Customer Account</td><td><span class="shopify-url">alineinsoles.com/account</span></td></tr>
          <tr><td>All Insoles</td><td><span class="shopify-url">alineinsoles.com/collections/insoles</span></td></tr>
          <tr><td>Refund Policy</td><td><span class="shopify-url">alineinsoles.com/policies/refund-policy</span></td></tr>
          <tr><td>Shipping Policy</td><td><span class="shopify-url">alineinsoles.com/policies/shipping-policy</span></td></tr>
          <tr><td>FAQ / Help</td><td><span class="shopify-url">alineinsoles.com/pages/help</span></td></tr>
          <tr><td>Choose by Shoe</td><td><span class="shopify-url">alineinsoles.com/pages/shop-by-shoe</span></td></tr>
        </tbody>
      </table>
      <h3 style="margin-top:20px">When to Escalate to Web Dev</h3>
      <table>
        <thead><tr><th>Situation</th><th>Action</th></tr></thead>
        <tbody>
          <tr><td>Site is down or checkout broken</td><td>Escalate to Web Dev immediately — log time + error messages</td></tr>
          <tr><td>Valid discount code not applying</td><td>Verify on monthly sheet; if valid, escalate to Web Dev</td></tr>
          <tr><td>Refund not appearing after 10 business days</td><td>Confirm processed in Shopify admin; if processed, advise customer to contact their bank; if not, escalate to CX Fulfillment Supervisor</td></tr>
        </tbody>
      </table>
      <div class="team-callout cx" style="margin-top:14px" data-search="Shopify security CX never password payment info">
        <strong>📞 CX — Security Rule</strong>
        CX never handles customer passwords or payment information. Direct password resets to the account portal. Never enter payment data on a customer's behalf.
      </div>
    </div>
  </div>
</section>

<!-- §24 FAQ -->
<section id="faq" aria-label="FAQs">
  <div class="card collapsible" id="faq-card">
    <div class="sec-hdr" onclick="toggleSection('faq-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 24</span><h2>FAQs</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <div class="faq-item" onclick="toggleFAQ(this)" data-search="FAQ which insole model choose recommendation">
        <div class="faq-q">How do I know which ALINE insole is right for me? <span class="faq-toggle">+</span></div>
        <div class="faq-a"><strong>Red All Day</strong> — everyday wear, plantar fasciitis, neuromas, bunions, most shoe types. <strong>Cushion</strong> — running, tennis, long shifts, high-impact sport (memory foam + alignment). <strong>Traction</strong> — golf, cycling, basketball, gym, work boots (lateral grip + spring). <strong>Climate</strong> — skiing, snowboarding, cold-weather outdoor work. See current pricing and full descriptions at <a href="https://alineinsoles.com/collections/insoles" target="_blank" rel="noopener">alineinsoles.com/collections/insoles</a> or call 1-888-316-5658.</div>
      </div>
      <div class="faq-item" onclick="toggleFAQ(this)" data-search="FAQ remove stock insoles shoe insert fit">
        <div class="faq-q">Do I need to remove the existing insoles from my shoes? <span class="faq-toggle">+</span></div>
        <div class="faq-a">Yes — with most shoes, ALINE fits best if you remove the stock insole first. General rule: if the shoe has a removable insole, ALINE will fit.</div>
      </div>
      <div class="faq-item" onclick="toggleFAQ(this)" data-search="FAQ how long do insoles last replace lifespan">
        <div class="faq-q">How long do ALINE insoles last? <span class="faq-toggle">+</span></div>
        <div class="faq-a">Typically 6–12 months depending on wear frequency and activity. The Auto-Pair subscription automatically delivers a fresh pair every 6 or 12 months. Note: availability subject to inventory wind-down status — check alineinsoles.com for current stock.</div>
      </div>
      <div class="faq-item" onclick="toggleFAQ(this)" data-search="FAQ break-in period uncomfortable weird feeling adjustment">
        <div class="faq-q">The insoles feel different / uncomfortable — is that normal? <span class="faq-toggle">+</span></div>
        <div class="faq-a">Completely normal in the first week. ALINE actively corrects your alignment, engaging muscles differently than before. Break-in protocol: 1–2 hours day one, add 30–60 min daily, most adapt within one week. If discomfort persists beyond 2 weeks, contact us.</div>
      </div>
      <div class="faq-item" onclick="toggleFAQ(this)" data-search="FAQ sizing arch size S M L XL how to measure">
        <div class="faq-q">How are ALINE insoles sized? <span class="faq-toggle">+</span></div>
        <div class="faq-a">By <strong>arch measurement</strong> (S/M/L/XL) — not by shoe size. Your arch size and shoe size are often different. See the sizing guide on each product page. Selecting the wrong arch size is the most common cause of insoles not performing as expected.</div>
      </div>
      <div class="faq-item" onclick="toggleFAQ(this)" data-search="FAQ subscription auto-pair cancel change pause">
        <div class="faq-q">How do I cancel or change my Auto-Pair subscription? <span class="faq-toggle">+</span></div>
        <div class="faq-a">Log in at <a href="https://alineinsoles.com/account" target="_blank" rel="noopener">alineinsoles.com/account</a> and manage from the account portal. You can postpone, swap model, or cancel anytime. No cancellation fee. If you need help, contact support@alineinsoles.com or 1-888-316-5658.</div>
      </div>
      <div class="faq-item" onclick="toggleFAQ(this)" data-search="FAQ return refund money back how to return steps">
        <div class="faq-q">How do I return or exchange my insoles? <span class="faq-toggle">+</span></div>
        <div class="faq-a">For a <strong>refund</strong>: contact us within 60 days — support@alineinsoles.com or 1-888-316-5658 — to receive an RMA number. You pay return shipping; a processing and handling fee is deducted from the refund. For an <strong>exchange</strong>: contact us within 30 days; insoles must be in resellable condition. See full policy at <a href="https://alineinsoles.com/policies/refund-policy" target="_blank" rel="noopener">alineinsoles.com/policies/refund-policy</a>.</div>
      </div>
      <div class="faq-item" onclick="toggleFAQ(this)" data-search="FAQ Canada international shipping not available">
        <div class="faq-q">Do you ship internationally or to Canada? <span class="faq-toggle">+</span></div>
        <div class="faq-a">alineinsoles.com ships to the continental United States only. Alaska, Hawaii, Puerto Rico, Canada, and all other international destinations are not currently supported. Contact support@alineinsoles.com and we will escalate to CX Fulfillment Supervisor for any exceptions.</div>
      </div>
      <div class="faq-item" onclick="toggleFAQ(this)" data-search="FAQ free shipping how much order threshold policy">
        <div class="faq-q">Do you offer free shipping? <span class="faq-toggle">+</span></div>
        <div class="faq-a">Yes — free standard ground shipping is available on qualifying orders to the continental US. The current threshold may change; see the site banner or <a href="https://alineinsoles.com/policies/shipping-policy" target="_blank" rel="noopener">alineinsoles.com/policies/shipping-policy</a> for the latest. Standard transit: 3–7 business days (East Coast often 2–3 business days).</div>
      </div>
      <div class="faq-item" onclick="toggleFAQ(this)" data-search="FAQ TABs kit discontinued availability">
        <div class="faq-q">Can I still buy the ALINE TABs Kit? <span class="faq-toggle">+</span></div>
        <div class="faq-a">The ALINE TABs Kit is discontinued and no longer available for purchase. If you have a specific alignment need that TABs would have addressed, contact us at support@alineinsoles.com — our CX team can help determine whether any of the current insole models better fits your requirements.</div>
      </div>
      <div class="faq-item" onclick="toggleFAQ(this)" data-search="FAQ wholesale bulk order B2B gym clinic">
        <div class="faq-q">Can I buy ALINE insoles in bulk for my gym / clinic / business? <span class="faq-toggle">+</span></div>
        <div class="faq-a">Yes — ALINE serves B2B and wholesale customers. Contact us at support@alineinsoles.com with your business name, contact details, and what you're looking for. Our team will forward your inquiry to the ALINE Wholesale Team, who will follow up directly. Note that wholesale availability may be limited during inventory wind-down.</div>
      </div>
    </div>
  </div>
</section>

<!-- §25 ADDITIONAL RESOURCES -->
<section id="resources" aria-label="Additional Resources">
  <div class="card collapsible" id="resources-card">
    <div class="sec-hdr" onclick="toggleSection('resources-card')">
      <div class="sec-hdr-left"><span class="eyebrow">Section 25</span><h2>Additional Resources &amp; Contacts</h2></div>
      <button class="sec-toggle"><svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg></button>
    </div>
    <div class="sec-body">
      <div class="team-callout cx" data-search="resources contacts escalation department CX">
        <strong>📞 CX — Escalation First Principle</strong>
        Always attempt resolution at your level first. When escalating, always include: (1) customer name + order number, (2) issue summary, (3) what you tried, (4) why you need escalation.
      </div>
      <h3>Escalation by Type</h3>
      <table class="resource-table">
        <thead><tr><th>Escalation Type</th><th>Department</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Unresolved customer complaint</td><td>CX Supervisor</td><td>After two failed resolution attempts at CX level</td></tr>
          <tr><td>Return or refund dispute</td><td>CX Fulfillment Supervisor</td><td>Chargebacks, disputed fees, refund not appearing after 10 business days</td></tr>
          <tr><td>Brand or product question</td><td>Brand Lead</td><td>Brand status, wind-down questions, new partner requests</td></tr>
          <tr><td>Technical / website issue</td><td>Web Dev Team</td><td>Site down, checkout broken, discount code not working</td></tr>
          <tr><td>Media, press, or partnership inquiry</td><td>Marketing / Partnerships</td><td>Any inbound press or partnership ask</td></tr>
          <tr><td>Wholesale / B2B inquiry</td><td>ALINE Wholesale Team (via CX)</td><td>Capture details; forward to Wholesale Team — do not handle in DTC system</td></tr>
          <tr><td>Legal or compliance</td><td>Legal / Compliance</td><td>Any threat of legal action, regulatory complaint, trademark issue</td></tr>
        </tbody>
      </table>
      <h3 style="margin-top:20px">Key External Links</h3>
      <table class="resource-table">
        <thead><tr><th>Resource</th><th>Link</th></tr></thead>
        <tbody>
          <tr><td>ALINE Storefront</td><td><a href="https://alineinsoles.com" target="_blank" rel="noopener">alineinsoles.com</a></td></tr>
          <tr><td>All Insoles</td><td><a href="https://alineinsoles.com/collections/insoles" target="_blank" rel="noopener">alineinsoles.com/collections/insoles</a></td></tr>
          <tr><td>Refund Policy</td><td><a href="https://alineinsoles.com/policies/refund-policy" target="_blank" rel="noopener">alineinsoles.com/policies/refund-policy</a></td></tr>
          <tr><td>Shipping Policy</td><td><a href="https://alineinsoles.com/policies/shipping-policy" target="_blank" rel="noopener">alineinsoles.com/policies/shipping-policy</a></td></tr>
          <tr><td>Customer Account</td><td><a href="https://alineinsoles.com/account" target="_blank" rel="noopener">alineinsoles.com/account</a></td></tr>
          <tr><td>Choose by Shoe</td><td><a href="https://alineinsoles.com/pages/shop-by-shoe" target="_blank" rel="noopener">alineinsoles.com/pages/shop-by-shoe</a></td></tr>
          <tr><td>Twitter / X</td><td><a href="https://twitter.com/ALINEInsoles" target="_blank" rel="noopener">@ALINEInsoles</a></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
<!-- §26 KNOWLEDGE CHECK QUIZ -->
<section id="quiz-section" aria-label="Knowledge Check Quiz">
  <div class="card collapsible" id="quiz-card" style="background:linear-gradient(135deg,var(--al-coral) 0%,var(--al-red) 55%,var(--al-red-dk) 100%);border-color:transparent">
    <div class="sec-hdr" onclick="toggleSection('quiz-card')" style="background:transparent;border-bottom-color:rgba(255,255,255,.15)">
      <div class="sec-hdr-left">
        <span class="eyebrow" style="color:rgba(255,255,255,.75)">Section 26 · Knowledge Check</span>
        <h2 style="color:#fff;border-bottom:none;margin-bottom:0;padding-bottom:0">Prove It &nbsp;·&nbsp; 35 Questions &nbsp;·&nbsp; 70% to Pass</h2>
      </div>
      <button class="sec-toggle" style="border-color:rgba(255,255,255,.4);color:#fff">
        <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <div class="sec-body" style="padding:20px 30px 40px">

      <!-- INTRO -->
      <div id="quiz-intro">
        <p style="color:rgba(255,255,255,.9);max-width:640px;line-height:1.7;margin-bottom:10px">Read everything above first. Then take this quiz to confirm you've internalized what matters most for ALINE CX, brand, and operational decisions. <strong style="color:#fff">Pass: 25 of 35 correct (70%).</strong> One question at a time — immediate feedback, correct answer shown if you miss. Retake as many times as you need.</p>
        <p style="color:rgba(255,255,255,.8);max-width:640px;font-size:14px;margin-bottom:24px">When you pass, enter your name and title, then print or save your certificate to send to your HR onboarding trainer or team lead as proof of completion.</p>
        <div style="text-align:center">
          <button class="quiz-start-btn" onclick="startQuiz()">Start the Quiz →</button>
        </div>
      </div>

      <!-- ACTIVE QUIZ -->
      <div id="quiz-active" style="display:none">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px">
          <span id="quiz-progress" style="font-family:'DM Mono',monospace;font-size:12px;color:rgba(255,255,255,.75);letter-spacing:.1em;text-transform:uppercase"></span>
          <span id="quiz-score-live" style="font-family:'DM Mono',monospace;font-size:12px;color:rgba(255,255,255,.6);letter-spacing:.06em"></span>
        </div>
        <div class="quiz-progress-bar" style="background:rgba(255,255,255,.15);margin-bottom:20px">
          <div id="quiz-progress-fill" class="quiz-progress-fill" style="background:#fff"></div>
        </div>
        <div style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:14px;padding:28px">
          <div id="quiz-question" style="font-family:'Barlow Condensed',sans-serif;font-size:1.4rem;font-weight:700;color:#fff;margin-bottom:22px;line-height:1.3;letter-spacing:.01em"></div>
          <div id="quiz-options" class="quiz-options-al"></div>
          <div id="quiz-feedback-wrap"></div>
        </div>
      </div>

      <!-- RESULTS -->
      <div id="quiz-results" style="display:none"></div>

    </div>
  </div>
</section>

<style>
/* ── QUIZ STYLES ───────────────────────────────────── */
.quiz-start-btn{background:#fff;color:var(--al-red);border:none;padding:14px 32px;border-radius:10px;font-size:15px;font-weight:800;cursor:pointer;font-family:'Barlow Condensed',sans-serif;letter-spacing:.06em;text-transform:uppercase;transition:all .2s;box-shadow:0 4px 16px rgba(0,0,0,.2)}
.quiz-start-btn:hover{background:#f0f0f0;transform:translateY(-2px);box-shadow:0 8px 24px rgba(0,0,0,.25)}
.quiz-options-al{display:flex;flex-direction:column;gap:10px;margin-bottom:4px}
.quiz-opt-al{background:rgba(255,255,255,.08);border:2px solid rgba(255,255,255,.25);color:#fff;padding:13px 16px;border-radius:10px;text-align:left;font-size:14px;cursor:pointer;transition:all .18s;font-family:'DM Sans',sans-serif;display:flex;align-items:center;gap:12px;width:100%}
.quiz-opt-al:hover:not(:disabled){background:rgba(255,255,255,.18);border-color:rgba(255,255,255,.6);transform:translateX(4px)}
.quiz-opt-al .opt-letter{display:inline-flex;align-items:center;justify-content:center;width:26px;height:26px;background:rgba(255,255,255,.15);border-radius:50%;font-family:'DM Mono',monospace;font-size:12px;font-weight:700;flex-shrink:0}
.quiz-opt-al.al-correct{background:#E8F5E9;border-color:#2E7D32;color:#1B4F1E;font-weight:700;box-shadow:0 0 0 3px rgba(46,125,50,.25)}
.quiz-opt-al.al-correct .opt-letter{background:#2E7D32;color:#fff}
.quiz-opt-al.al-wrong{background:rgba(255,255,255,.92);border-color:#fff;color:#A91812;font-weight:700}
.quiz-opt-al.al-wrong .opt-letter{background:#A91812;color:#fff}
.quiz-opt-al:disabled{cursor:default;transform:none}
.quiz-opt-al:disabled:not(.al-correct):not(.al-show-correct):not(.al-wrong){opacity:.3}
.quiz-opt-al.al-show-correct{background:#E8F5E9;border-color:#2E7D32;color:#1B4F1E;font-weight:700}
.quiz-opt-al.al-show-correct .opt-letter{background:#2E7D32;color:#fff}
.quiz-feedback-al{margin-top:16px;padding:14px 16px;border-radius:10px;font-size:14px;font-weight:600;line-height:1.6}
.quiz-feedback-al.fb-right{background:#E8F5E9;border-left:4px solid #2E7D32;color:#1B4F1E}
.quiz-feedback-al.fb-wrong{background:#fff;border-left:4px solid #A91812;color:#A91812}
.quiz-feedback-ref{margin-top:8px;font-size:12px;font-weight:400;color:var(--al-muted);font-family:'DM Mono',monospace}
.quiz-next-al{margin-top:14px;background:#fff;color:var(--al-red);border:none;padding:11px 24px;border-radius:8px;font-size:14px;font-weight:800;cursor:pointer;font-family:'Barlow Condensed',sans-serif;letter-spacing:.05em;text-transform:uppercase;transition:all .15s}
.quiz-next-al:hover{background:#f0f0f0;transform:translateY(-1px)}
/* completion */
.al-completion-header{background:linear-gradient(135deg,#fff8f6 0%,var(--al-soft) 100%);color:var(--al-text-dk);padding:30px 24px;border-radius:14px 14px 0 0;text-align:center;border-bottom:3px solid var(--al-red)}
.al-completion-header .ce-emoji{font-size:3rem;line-height:1;margin-bottom:8px;display:block}
.al-completion-header h3{font-family:'Barlow Condensed',sans-serif;font-size:2rem;font-weight:900;color:#111111;margin:0;letter-spacing:.04em;text-transform:uppercase}
.al-completion-header .ce-sub{font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.15em;text-transform:uppercase;color:var(--al-red);margin-top:6px;font-weight:700}
.al-completion-card{background:#fff;color:#111111;border-radius:0 0 14px 14px;padding:32px 28px;box-shadow:0 4px 20px rgba(0,0,0,.1);border:1px solid var(--al-border);border-top:none}
.al-completion-brand{display:flex;align-items:center;justify-content:center;gap:14px;padding-bottom:20px;border-bottom:2px solid var(--al-red);margin-bottom:22px;flex-wrap:wrap}
.al-completion-brand img{height:40px;object-fit:contain}
.al-completion-brand .brand-text{font-family:'Barlow Condensed',sans-serif;font-size:1.1rem;font-weight:800;color:#111111;text-align:center;letter-spacing:.04em}
.al-completion-brand .brand-text small{display:block;font-family:'DM Mono',monospace;font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--al-red);font-weight:700;margin-top:2px}
.al-nameblock{margin-bottom:22px}
.al-nameblock label{display:block;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--al-red);font-weight:700;margin-bottom:8px}
.al-nameblock input{width:100%;padding:12px 14px;border:2px solid var(--al-border);border-radius:8px;font-family:'DM Sans',sans-serif;font-size:16px;color:#111111;background:#f8f8f8;transition:border-color .15s;outline:none}
.al-nameblock input:focus{border-color:var(--al-red);background:#fff}
.al-nameblock .name-printed{display:none;font-family:'Barlow Condensed',sans-serif;font-size:1.5rem;font-weight:900;color:#111111;padding:8px 0;border-bottom:2px solid #111111;text-align:center;text-transform:uppercase;letter-spacing:.04em}
.al-badge{display:inline-flex;align-items:center;gap:8px;background:#1A6B2E;color:#fff;padding:10px 24px;border-radius:30px;font-family:'DM Mono',monospace;font-size:13px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;margin:0 auto 20px;box-shadow:0 4px 12px rgba(26,107,46,.3)}
.al-stats{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-bottom:22px}
.al-stat{background:linear-gradient(135deg,#fff8f6 0%,var(--al-red-bg) 100%);border:1px solid var(--al-border);border-radius:10px;padding:14px 16px;text-align:center}
.al-stat-label{display:block;font-family:'DM Mono',monospace;font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--al-red);font-weight:700;margin-bottom:4px}
.al-stat-value{font-family:'Barlow Condensed',sans-serif;font-size:1.6rem;font-weight:900;color:#111111;line-height:1.1}
.al-track{text-align:center;font-family:'DM Mono',monospace;font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--al-muted);padding-top:18px;border-top:1px dashed var(--al-border)}
.al-track strong{display:block;font-family:'Barlow Condensed',sans-serif;font-size:1.1rem;font-weight:800;color:#111111;text-transform:none;letter-spacing:0;margin-top:4px}
.al-actions{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:22px}
.al-btn-retake{background:#f0f0f0;color:#111111;border:none;padding:12px 22px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:'DM Sans',sans-serif;transition:all .15s;display:inline-flex;align-items:center;gap:8px}
.al-btn-print{background:var(--al-red);color:#fff;border:none;padding:12px 22px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;font-family:'DM Sans',sans-serif;transition:all .15s;display:inline-flex;align-items:center;gap:8px}
.al-btn-retake:hover,.al-btn-print:hover{transform:translateY(-2px);box-shadow:0 6px 16px rgba(0,0,0,.15)}
/* fail */
.al-fail-header{background:#fff;border-radius:14px;padding:32px;text-align:center;border:2px solid var(--al-border)}
.al-fail-score{font-family:'Barlow Condensed',sans-serif;font-size:3.5rem;font-weight:900;color:var(--al-red);line-height:1;margin:10px 0}
.al-fail-msg{color:var(--al-muted);font-size:14px;max-width:460px;margin:12px auto 22px;line-height:1.65}
.al-btn-retry{background:var(--al-red);color:#fff;border:none;padding:13px 28px;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer;font-family:'DM Sans',sans-serif;transition:all .15s}
.al-btn-retry:hover{background:var(--al-red-dk);transform:translateY(-2px)}
/* print */
@media print{
  body{background:#fff!important}
  #top-nav,#floating-toc-btn,#toc-overlay,#toc-drawer,.sec-hdr{display:none!important}
  #quiz-section{background:#fff!important;box-shadow:none!important;border-radius:0!important}
  #quiz-section .sec-body{padding:0!important}
  #quiz-intro,#quiz-active{display:none!important}
  #quiz-results{display:block!important}
  .al-completion-card,.al-completion-header{print-color-adjust:exact;-webkit-print-color-adjust:exact}
  .al-actions,.al-btn-retake,.al-btn-print,.quiz-start-btn{display:none!important}
  .al-nameblock input{display:none!important}
  .al-nameblock .name-printed{display:block!important}
}
body.printing #top-nav,body.printing #floating-toc-btn,body.printing #toc-overlay,body.printing #toc-drawer,body.printing .sec-hdr{display:none!important}
body.printing #quiz-intro,body.printing #quiz-active{display:none!important}
body.printing .al-actions,.al-nameblock input{display:none}
body.printing .al-nameblock .name-printed{display:block!important}

/* PRODUCT GRID */
.prod-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:18px;margin-top:14px}
@media(max-width:880px){.prod-grid{grid-template-columns:1fr}}
.prod-card{background:#ffffff;border-radius:14px;padding:22px 24px;box-shadow:0 2px 16px rgba(204,31,23,.06);border:1px solid var(--al-border-lt);display:flex;flex-direction:column}
.prod-card-hdr{display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:10px;margin-bottom:14px}
.prod-card-hdr > div{flex:1;min-width:0}
.prod-card-name{font-family:'DM Sans',sans-serif;font-size:1.2rem;font-weight:700;color:#111111;margin:2px 0 8px}
.prod-card-badges{display:flex;flex-wrap:wrap;gap:6px}
.prod-card-cta{text-decoration:none;padding:8px 14px;border-radius:8px;font-size:12px;font-weight:700;white-space:nowrap;align-self:flex-start;transition:transform .15s}
.prod-card-cta:hover{transform:translateY(-1px);opacity:.92}
.prod-card-desc{font-size:13.5px;color:var(--al-text);line-height:1.6;margin-bottom:14px}
.prod-card-table{font-size:12.5px;width:100%}
.prod-card-table th{font-size:10px;padding:8px 10px}
.prod-card-table td{padding:8px 10px;vertical-align:top}
</style>

<script>
/* ═══════════════════════════════════════════════════════
   ALINE BRAND HUB — KNOWLEDGE CHECK QUIZ
═══════════════════════════════════════════════════════ */
const quizQuestions=[
  {q:"Which ALINE insole model is best for golf, cycling, basketball, and other hip-rotation activities?",options:["Red All Day Insoles","Climate Insoles","Cushion Insoles","Traction Insoles"],correct:3,ref:"§02 Product Line"},
  {q:"Which ALINE insole model features a heat-reflective top sheet designed to keep feet warm in cold conditions?",options:["Red All Day Insoles","Traction Insoles","Cushion Insoles","Climate Insoles"],correct:3,ref:"§02 Product Line"},
  {q:"Which insole model has the highest review count on alineinsoles.com?",options:["Red All Day (42 reviews)","Traction (96 reviews)","Cushion (162 reviews)","Climate (39 reviews)"],correct:2,ref:"§02 Product Line"},
  {q:"What unique feature does the Cushion Insole have that no other ALINE model includes?",options:["Heat-reflective top sheet","Textured grip surface","Memory foam top layer plus antimicrobial coating","Carbon fibre frame"],correct:2,ref:"§02 Product Line"},
  {q:"A nurse on 12-hour hospital shifts asks for a recommendation. Which model do you suggest?",options:["Climate Insoles","Red All Day","Cushion Insoles","Traction Insoles"],correct:2,ref:"§02 Product Line — On-Feet Pro Persona"},
  {q:"The ALINE TABs Kit is currently:",options:["Available on alineinsoles.com as a bestseller","Available but sold separately on aline.com","Discontinued — no longer available for purchase","Coming soon in the next product launch"],correct:2,ref:"§02 Accessories — TABs Kit"},
  {q:"By what percentage does ALINE's patented technology improve ankle and knee alignment?",options:["33%","50%","66%","80%"],correct:2,ref:"§13 Health Data"},
  {q:"How many dynamic support and suspension structures does an ALINE insole contain?",options:["50+","75+","100+","200+"],correct:2,ref:"§13 Health Data"},
  {q:"ALINE insoles are sized by:",options:["Standard shoe size","Foot length in centimetres","Arch measurement (S/M/L/XL)","Body weight"],correct:2,ref:"§24 FAQs / §19 Glossary"},
  {q:"What is ALINE's refund window under its money-back guarantee?",options:["30 days","45 days","60 days","90 days"],correct:2,ref:"§20 Return Policy"},
  {q:"Within how many days must an exchange request be received?",options:["14 days","30 days","45 days","60 days"],correct:1,ref:"§20 Return Policy"},
  {q:"Who is responsible for return shipping costs on ALINE orders?",options:["ALINE covers all return shipping","The customer pays return shipping","Costs split 50/50","ALINE pays if the product is defective"],correct:1,ref:"§20 Return Policy"},
  {q:"When should a CX agent NOT immediately process a return for uncomfortable insoles?",options:["If insoles are more than 45 days old","If the customer has only worn them 1–3 days — coach them through break-in first","If the customer has a subscription","If purchased on sale"],correct:1,ref:"§20 Return Policy"},
  {q:"A credit card refund can take up to how many days to appear after ALINE authorises it?",options:["5 days","10 days","30 days","60 days"],correct:2,ref:"§20 Return Policy"},
  {q:"What is the Inventel warehouse address for all orders and returns?",options:["200 Forge Way, Unit 1, Rockaway, NJ","240 West Parkway, Middle Door, Pompton Plains, NJ 07444","100 Industrial Drive, Newark, NJ","500 Commerce Blvd, Parsippany, NJ"],correct:1,ref:"§21 Fulfillment & Shipping"},
  {q:"Where should CX and customers go to find the current free shipping threshold?",options:["Check the monthly discount sheet","Call the warehouse directly","alineinsoles.com/policies/shipping-policy","Ask the Brand Lead"],correct:2,ref:"§21 Fulfillment & Shipping"},
  {q:"What is the standard ground transit time for continental US orders?",options:["1–2 business days","3–7 business days","5–10 business days","10–14 business days"],correct:1,ref:"§21 Fulfillment & Shipping"},
  {q:"A customer in Hawaii wants to place an order. What is the correct CX action?",options:["Process normally — Hawaii is a US state","Quote the standard shipping rate","Escalate to CX Fulfillment Supervisor — not supported by default","Tell the customer international shipping is available for a fee"],correct:2,ref:"§21 Fulfillment & Shipping"},
  {q:"What text MUST be entered in the First Name field for every test order?",options:["TEST","Test Order","Sample","Your first name + TEST"],correct:1,ref:"§22 Test Orders"},
  {q:"What is the correct shipping address for all test orders?",options:["240 West Parkway, Pompton Plains, NJ","200 Forge Way, Unit 1, Rockaway, NJ 07866","Your home address","The brand manager's office"],correct:1,ref:"§22 Test Orders"},
  {q:"Where does a customer manage their Auto-Pair subscription?",options:["alineinsoles.com/cart","alineinsoles.com/account","alineinsoles.com/checkout","alineinsoles.com/collections"],correct:1,ref:"§23 Shopify Platform"},
  {q:"A valid discount code from the monthly sheet is not applying at checkout. What do you do?",options:["Tell the customer the code is expired","Apply the code manually in admin","Escalate to Web Dev — it may be inactive in Shopify","Offer a different code from memory"],correct:2,ref:"§23 Shopify Platform"},
  {q:"Which discount type is EVERGREEN — always active unless flagged otherwise?",options:["DRTV campaign code","Full-site flash sale","Subscribe & Save (Auto-Pair) discount","Email campaign promo code"],correct:2,ref:"§16 Discounts / §19 Glossary"},
  {q:"Before honoring any promo code on behalf of a customer, CX must check:",options:["The brand's Instagram for recent promos","The monthly discount sheet","The Shopify admin discount list","The customer's order history"],correct:1,ref:"§16 Discounts"},
  {q:"Which SEO keyword theme is ALINE's highest priority — tied directly to its patented claim?",options:["comfortable shoe inserts","alignment insoles / improve knee alignment","cheap custom orthotics","memory foam shoe inserts"],correct:1,ref:"§17 SEO"},
  {q:"In ALINE's CRO funnel, what question is the customer asking at the PDP stage?",options:["What is this?","Does it solve my specific problem? Is it proven? Which model?","Is checkout secure?","When will it arrive?"],correct:1,ref:"§18 CRO — Funnel"},
  {q:"According to the CRO section, how long must a test run to capture full weekly patterns?",options:["24 hours","3 days","One full week","Two weeks"],correct:2,ref:"§18 CRO — How to Run a Test"},
  {q:"What does the Evergreen Offer mean for ALINE? (Most complete answer)",options:["Any code on the monthly discount sheet","The Subscribe & Save and New Customer first-order discounts — always live unless flagged","Only the subscription discount","Only codes that don't expire"],correct:1,ref:"§19 Glossary — Evergreen Offer"},
  {q:"ALINE is described as which brand archetype?",options:["The Sage","The Caregiver","The Hero","The Explorer"],correct:2,ref:"§07 Target Audience"},
  {q:"In which year was the Inventel and ALINE partnership formally established?",options:["2019","2020","2021","2022"],correct:3,ref:"§01 Brand Overview"},
  {q:"ALINE is currently in what operational status?",options:["Rapid growth — launching new models","Stable maintenance","Inventory wind-down — selling existing stock, no new production","Rebranding to a new product line"],correct:2,ref:"§01 Brand Overview"},
  {q:"A gym owner emails CX asking about buying 50 pairs at a bulk discount. Correct action?",options:["Quote retail price and process through DTC","Negotiate a discount on their behalf","Capture their business name, contact, and inquiry — forward to the ALINE Wholesale Team","Decline — ALINE does not sell in bulk"],correct:2,ref:"§ Wholesale & B2B"},
  {q:"A customer says insoles feel uncomfortable after 2 days. What is the correct CX approach?",options:["Process a return immediately","Walk them through the break-in protocol before initiating a return","Offer a full refund, no questions asked","Transfer immediately to the Brand Lead"],correct:1,ref:"§20 Return Policy / §24 FAQ"},
  {q:"Where should customers be directed to find the current ALINE free shipping threshold?",options:["The monthly discount sheet","Call 1-888-316-5658 and ask","alineinsoles.com/policies/shipping-policy","The product page"],correct:2,ref:"§21 Fulfillment / §24 FAQ"},
  {q:"What is the CX email address for ALINE customer support?",options:["help@alineinsoles.com","info@alineinsoles.com","support@alineinsoles.com","cx@inventel.tv"],correct:2,ref:"§01 Brand Overview / §25 Resources"},
];

const PASS_THRESHOLD = Math.ceil(quizQuestions.length * 0.7143); // 25/35
let currentQuestion = 0;
let userAnswers = [];
let questionAnswered = false;
let quizSectionWasCollapsed = false;
let correctCount = 0;

function startQuiz(){
  currentQuestion = 0; userAnswers = []; correctCount = 0; questionAnswered = false;
  document.getElementById('quiz-intro').style.display = 'none';
  document.getElementById('quiz-results').style.display = 'none';
  document.getElementById('quiz-active').style.display = 'block';
  renderQuestion();
}

function renderQuestion(){
  const q = quizQuestions[currentQuestion];
  questionAnswered = false;
  document.getElementById('quiz-progress').textContent = `Question ${currentQuestion+1} of ${quizQuestions.length}`;
  document.getElementById('quiz-score-live').textContent = `${correctCount} correct so far`;
  document.getElementById('quiz-progress-fill').style.width = `${(currentQuestion/quizQuestions.length)*100}%`;
  document.getElementById('quiz-question').textContent = q.q;
  document.getElementById('quiz-options').innerHTML = q.options.map((opt,i)=>`
    <button class="quiz-opt-al" data-idx="${i}" onclick="selectAnswer(${i})">
      <span class="opt-letter">${String.fromCharCode(65+i)}</span>
      <span>${opt}</span>
    </button>`).join('');
  document.getElementById('quiz-feedback-wrap').innerHTML = '';
}

function selectAnswer(idx){
  if(questionAnswered) return;
  questionAnswered = true;
  const q = quizQuestions[currentQuestion];
  userAnswers.push(idx);
  const isCorrect = idx === q.correct;
  if(isCorrect) correctCount++;
  document.querySelectorAll('.quiz-opt-al').forEach((btn,i)=>{
    btn.disabled = true;
    if(i === q.correct){
      btn.classList.add(idx === q.correct ? 'al-correct' : 'al-show-correct');
    } else if(i === idx){
      btn.classList.add('al-wrong');
    }
  });
  const isLast = currentQuestion === quizQuestions.length - 1;
  const fb = document.createElement('div');
  fb.className = 'quiz-feedback-al ' + (isCorrect ? 'fb-right' : 'fb-wrong');
  fb.innerHTML = isCorrect
    ? `✅ Correct!<div class="quiz-feedback-ref">📌 ${q.ref}</div>`
    : `❌ Not quite — the correct answer is <strong>${String.fromCharCode(65+q.correct)}</strong>.<div class="quiz-feedback-ref">📌 Review: ${q.ref}</div>`;
  fb.innerHTML += `<br><button class="quiz-next-al" onclick="nextQuestion()">${isLast ? 'See Results →' : 'Next Question →'}</button>`;
  document.getElementById('quiz-feedback-wrap').appendChild(fb);
}

function nextQuestion(){
  currentQuestion++;
  if(currentQuestion >= quizQuestions.length){ showResults(); }
  else { renderQuestion(); }
}

function showResults(){
  document.getElementById('quiz-active').style.display = 'none';
  const pct = Math.round((correctCount/quizQuestions.length)*100);
  const passed = correctCount >= PASS_THRESHOLD;
  const today = new Date().toLocaleDateString('en-US',{year:'numeric',month:'long',day:'numeric'});
  const el = document.getElementById('quiz-results');
  if(passed){
    el.innerHTML = `
      <div style="max-width:560px;margin:0 auto">
        <div class="al-completion-header">
          <span class="ce-emoji">🎉</span>
          <h3>Congratulations — You Passed!</h3>
          <div class="ce-sub">ALINE Insoles · Brand Knowledge Hub</div>
        </div>
        <div class="al-completion-card">
          <div class="al-completion-brand">
            <img src="https://alineinsoles.com/cdn/shop/files/ALINE-Integrated-Mark-600wi.png?v=1685992236" alt="ALINE Insoles logo" onerror="this.style.display='none'">
            <div class="brand-text">Inventel Innovations<small>Product Knowledge Hub</small></div>
          </div>
          <div class="al-nameblock">
            <label for="trainee-name">Your Name &amp; Title</label>
            <input id="trainee-name" type="text" placeholder="Jane Smith · CX Agent" oninput="syncName()" onkeydown="if(event.key==='Enter') printCompletion()">
            <div class="name-printed" id="name-printed">Name · Title</div>
          </div>
          <div style="text-align:center">
            <div class="al-badge">✓ &nbsp;Passed</div>
          </div>
          <div class="al-stats">
            <div class="al-stat"><span class="al-stat-label">Score</span><span class="al-stat-value">${pct}%</span></div>
            <div class="al-stat"><span class="al-stat-label">Correct</span><span class="al-stat-value">${correctCount}/${quizQuestions.length}</span></div>
            <div class="al-stat"><span class="al-stat-label">Date</span><span class="al-stat-value" style="font-size:1rem">${today}</span></div>
            <div class="al-stat"><span class="al-stat-label">Result</span><span class="al-stat-value" style="font-size:1rem;color:#1A6B2E">PASSED ✓</span></div>
          </div>
          <div class="al-track">Training Track<strong>ALINE Insoles — Brand Knowledge Hub</strong></div>
          <div class="al-actions">
            <button class="al-btn-retake" onclick="startQuiz()">↩ Retake Quiz</button>
            <button class="al-btn-print" onclick="printCompletion()">🖨️ Print Certificate</button>
          </div>
        </div>
        <div style="margin:16px auto 0;max-width:520px;padding:14px 18px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.25);border-radius:10px;color:rgba(255,255,255,.85);font-size:13px;line-height:1.6;text-align:center">
          <strong style="color:#fff">📨 Send to your HR onboarding trainer (new hires) or team lead (existing employees).</strong><br>
          Use <strong>🖨️ Print Certificate</strong> above — in the browser print dialog, choose your printer <em>or</em> <strong>"Save as PDF"</strong>.
        </div>
      </div>`;
  } else {
    el.innerHTML = `
      <div class="al-fail-header">
        <div style="font-size:2.5rem;margin-bottom:8px">📚</div>
        <h3 style="font-family:'Barlow Condensed',sans-serif;font-size:1.8rem;font-weight:900;color:#111111;margin-bottom:6px;letter-spacing:.04em;text-transform:uppercase">Not Quite — Give It Another Shot</h3>
        <div class="al-fail-score">${correctCount}/${quizQuestions.length} &nbsp;·&nbsp; ${pct}%</div>
        <p class="al-fail-msg">You need <strong>${PASS_THRESHOLD} correct (70%)</strong> to pass. Review the highest-value sections — <strong>Product Line</strong>, <strong>Return Policy</strong>, <strong>Fulfillment &amp; Shipping</strong>, <strong>Test Orders</strong>, and <strong>Wholesale</strong> — then come back and crush it.</p>
        <button class="al-btn-retry" onclick="startQuiz()">↩ Retake Quiz</button>
      </div>`;
  }
  el.style.display = 'block';
  document.getElementById('quiz-progress-fill').style.width = '100%';
  document.getElementById('quiz-score-live').textContent = `Final: ${correctCount}/${quizQuestions.length}`;
}

function syncName(){
  const v = document.getElementById('trainee-name').value.trim();
  document.getElementById('name-printed').textContent = v || 'Name · Title';
}

function printCompletion(){
  const input = document.getElementById('trainee-name');
  if(!input || !input.value.trim()){
    if(input){ input.style.borderColor='var(--al-red)'; input.placeholder='Please enter your name and title first'; input.focus();
      setTimeout(()=>{ input.style.borderColor=''; input.placeholder='Jane Smith · CX Agent'; }, 2500); }
    return;
  }
  syncName();
  const quizSec = document.getElementById('quiz-section');
  quizSectionWasCollapsed = quizSec.querySelector('#quiz-card').classList.contains('collapsed');
  if(quizSectionWasCollapsed) quizSec.querySelector('#quiz-card').classList.remove('collapsed');
  document.body.classList.add('printing');
  setTimeout(()=>{ window.print();
    setTimeout(()=>{ document.body.classList.remove('printing');
      if(quizSectionWasCollapsed) quizSec.querySelector('#quiz-card').classList.add('collapsed');
    }, 100);
  }, 80);
}
window.addEventListener('afterprint',()=>{ document.body.classList.remove('printing'); });

function toggleFAQ(item){ item.classList.toggle('open'); }

document.addEventListener('DOMContentLoaded',function(){ buildSearchIndex(); });
</script>
<?php bh_back_to_index_button('brand-hub-index', 'All Hubs'); ?>

</body>
</html>