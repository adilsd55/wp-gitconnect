<?php /* Template Name: Canva Training */ ?>
<?php
>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>InvenTel — Canva Training (Self-Contained)</title>
<style>
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Segoe UI',system-ui,-apple-system,sans-serif;background:#f7f7f5;color:#1a1a1a;line-height:1.6}
a{color:#1a56db;text-decoration:none}
a:hover{text-decoration:underline;color:#1340b0}
.inventel-logo{display:inline-block;background:#fff;border:3px solid #b0b0b0;border-radius:28px;padding:6px 24px;font-family:'Segoe UI',Arial,sans-serif;font-size:30px;font-weight:800;letter-spacing:-.5px;line-height:1.2;box-shadow:inset 0 1px 4px rgba(0,0,0,.08)}
.inventel-logo.logo-sm{font-size:22px;padding:4px 18px;border-radius:22px;border-width:2px}
.logo-inven{color:#3a3a3a}.logo-tel{color:#c0392b}
.header-band{background:#8B0000;color:#fff;padding:28px 32px 20px}
.header-top{display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:16px}
.header-company{font-size:11px;letter-spacing:2px;text-transform:uppercase;opacity:.85;margin-bottom:6px}
.header-h1{font-size:28px;font-weight:800;margin-bottom:4px}
.header-subtitle{font-size:14px;opacity:.88;max-width:620px}
.header-meta{text-align:right;font-size:12px;opacity:.8;line-height:1.7}
.stat-row{background:#6D0000;display:flex;justify-content:space-around;flex-wrap:wrap;padding:14px 20px;gap:10px}
.stat-item{text-align:center;min-width:90px}
.stat-val{display:block;font-size:18px;font-weight:800;color:#fcd9b6}
.stat-lbl{font-size:10px;text-transform:uppercase;letter-spacing:.8px;color:#fff;opacity:.85}
.mandatory-bar{background:#2d0000;color:#fcd9b6;text-align:center;padding:10px 20px;font-size:13px;font-weight:600}

/* SLIDES / SECTIONS */
.slide{background:#fff;border-radius:10px;margin:20px auto;max-width:960px;overflow:hidden;border:1px solid #e5e5e0;box-shadow:0 1px 4px rgba(0,0,0,.04)}
.slide-header{padding:20px 24px 12px;border-bottom:1px solid #e5e5e0;cursor:pointer;user-select:none;position:relative}
.slide-header:hover{background:#fafaf8}
.slide-header h2{font-size:19px;font-weight:700;color:#8B0000;margin-bottom:2px;padding-right:30px}
.slide-header .collapse-arrow{position:absolute;right:20px;top:22px;font-size:14px;color:#999;transition:transform .2s}
.slide-header.collapsed .collapse-arrow{transform:rotate(-90deg)}
.subtitle{font-size:14px;color:#5c5c5c;margin-top:5px}
.slide-body{padding:18px 24px 22px;transition:max-height .3s ease}
.slide-body.collapsed{display:none}

.callout{background:#fffbeb;border-left:4px solid #ca8a04;border-radius:4px;padding:12px 16px;margin-bottom:14px;font-size:13px;color:#1a1a1a}
.callout strong{color:#854d0e}
.platform-url{background:#f5f5f0;border:1px solid #e5e5e0;border-radius:6px;padding:12px 16px;margin:14px 0;font-size:13px;line-height:2}
.platform-url strong{color:#5c5c5c}
.badge{display:inline-block;padding:2px 9px;border-radius:12px;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.6px;vertical-align:middle;margin-right:3px}
.badge-mandatory{background:#166534;color:#fff}
.badge-beginner{background:#dcfce7;color:#166534}
.badge-intermediate{background:#fef08a;color:#854d0e}
.badge-advanced{background:#991b1b;color:#fde2e2}
.badge-official{background:#e5e5e0;color:#3a3a3a}
.badge-academy{background:#8B0000;color:#fff}
.tag-row{margin-top:8px;display:flex;flex-wrap:wrap;gap:5px}
.tag{display:inline-block;padding:2px 8px;border-radius:10px;font-size:10px;font-weight:600}
.t1{background:#dcfce7;color:#166534}.t2{background:#fef9c3;color:#854d0e}.t3{background:#fde2e2;color:#991b1b}.t4{background:#f0f0ee;color:#3a3a3a}
.card{border-radius:6px;background:#fafaf8;padding:14px 16px;margin-bottom:12px;border:1px solid #e5e5e0;border-left:4px solid #16a34a}
.card.intermediate{border-left-color:#ca8a04}.card.advanced{border-left-color:#991b1b}
.card-title{font-size:14px;font-weight:700;color:#1a1a1a;margin-bottom:4px}
.card-desc{font-size:13px;color:#5c5c5c;margin-bottom:6px}
.card-meta{font-size:11px;color:#777;margin-bottom:4px}
.three-col{display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px}
@media(max-width:800px){.three-col{grid-template-columns:1fr}}
.level-block{border-radius:6px;padding:14px;border:1px solid #e5e5e0}
.level-block.beg{border-top:3px solid #16a34a;background:#f0fdf4}
.level-block.int{border-top:3px solid #ca8a04;background:#fefce8}
.level-block.adv{border-top:3px solid #991b1b;background:#fef2f2}
.level-block h3{font-size:13px;font-weight:700;margin-bottom:8px;color:#166534}
.level-block.int h3{color:#854d0e}.level-block.adv h3{color:#991b1b}
.sub-card{background:#fff;border-radius:4px;padding:10px 12px;margin-bottom:8px;border-left:3px solid #16a34a;font-size:12px}
.level-block.int .sub-card{border-left-color:#ca8a04}
.level-block.adv .sub-card{border-left-color:#991b1b}
.sub-card strong{display:block;font-size:12px;font-weight:700;margin-bottom:2px;color:#1a1a1a}
.sub-card p{color:#5c5c5c;margin-bottom:4px}

/* STEPS */
.steps-box{background:#fff;border:1px solid #e5e5e0;border-radius:8px;padding:16px 18px;margin-top:10px;margin-bottom:10px}
.steps-box h4{font-size:13px;font-weight:700;color:#8B0000;margin-bottom:10px;padding-bottom:6px;border-bottom:1px dashed #e5e5e0}
.step{display:flex;gap:10px;margin-bottom:8px;align-items:flex-start}
.step-num{min-width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:10px;font-weight:800;flex-shrink:0;margin-top:1px;color:#fff}
.step-num.green{background:#166534}.step-num.amber{background:#854d0e}.step-num.red{background:#991b1b}
.step-text{font-size:12.5px;color:#1a1a1a;line-height:1.55}
.step-text code{background:#f0f0ee;padding:1px 5px;border-radius:3px;font-size:11.5px;font-family:'Consolas','Courier New',monospace;color:#8B0000}
.step-nav{display:inline-block;background:#f0f0ee;padding:1px 7px;border-radius:4px;font-size:11px;font-weight:600;color:#3a3a3a;white-space:nowrap}
.step-tip{background:#fffbeb;border-left:3px solid #ca8a04;border-radius:4px;padding:8px 12px;margin:6px 0 8px;font-size:11.5px;color:#854d0e;line-height:1.5}
.step-warning{background:#fef2f2;border-left:3px solid #991b1b;border-radius:4px;padding:8px 12px;margin:6px 0 8px;font-size:11.5px;color:#991b1b;line-height:1.5}
.kbd{display:inline-block;background:#f7f7f5;border:1px solid #d0d0d0;border-radius:3px;padding:0 5px;font-size:11px;font-family:'Consolas','Courier New',monospace;color:#3a3a3a;box-shadow:0 1px 0 #b0b0b0;line-height:1.6}

/* TOC */
.toc-grid{display:grid;grid-template-columns:1fr 1fr;gap:8px}
.toc-item{background:#f7f7f5;border-radius:6px;padding:10px 14px;font-size:13px;font-weight:600;color:#1a1a1a;border:1px solid #e5e5e0;cursor:pointer;transition:background .15s,border-color .15s}
.toc-item:hover{background:#e8e8e5;border-color:#ccc}
.toc-item span{display:block;font-size:11px;font-weight:400;color:#777;margin-top:2px}
.apps-grid{display:flex;flex-wrap:wrap;gap:8px;margin:12px 0}
.app-chip{background:#f0f0ee;border-radius:20px;padding:5px 14px;font-size:12px;font-weight:600;color:#3a3a3a}
.cert-table{width:100%;border-collapse:collapse;font-size:13px;margin-top:12px}
.cert-table th{background:#f0f0ee;text-align:left;padding:8px 10px;font-weight:700;color:#3a3a3a;font-size:11px;text-transform:uppercase;letter-spacing:.5px}
.cert-table td{padding:8px 10px;border-bottom:1px solid #e5e5e0;color:#1a1a1a}
.qr-grid{display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px}
@media(max-width:800px){.qr-grid{grid-template-columns:1fr}}
.qr-card{background:#f7f7f5;border:1px solid #e5e5e0;border-radius:8px;padding:14px 16px}
.qr-card h4{font-size:13px;font-weight:700;color:#1a1a1a;margin-bottom:8px}
.qr-card ul{list-style:none;padding:0}.qr-card li{margin-bottom:5px;font-size:12px}
.final-note{background:#2d0000;color:#e8d5c4;border-radius:10px;margin:20px auto;max-width:960px;padding:24px 28px;font-size:13px;line-height:1.8}
.final-note a{color:#fcd9b6}.final-note strong{color:#fff}

/* FLOATING NAV */
.float-nav-btn{position:fixed;bottom:24px;right:24px;width:48px;height:48px;border-radius:50%;background:#8B0000;color:#fff;border:none;cursor:pointer;box-shadow:0 4px 16px rgba(0,0,0,.3);font-size:20px;z-index:9500;display:flex;align-items:center;justify-content:center;transition:transform .15s,background .15s}
.float-nav-btn:hover{background:#a81c1c;transform:scale(1.08)}
.float-nav-panel{position:fixed;bottom:80px;right:24px;width:300px;max-height:70vh;background:#fff;border-radius:12px;box-shadow:0 8px 40px rgba(0,0,0,.25);border:1px solid #e5e5e0;z-index:9500;display:none;overflow-y:auto;padding:0}
.float-nav-panel.open{display:block}
.float-nav-hd{background:#8B0000;color:#fff;padding:14px 18px;font-size:14px;font-weight:700;border-radius:12px 12px 0 0;position:sticky;top:0;z-index:1}
.float-nav-list{padding:8px 0;list-style:none}
.float-nav-list li{padding:0}
.float-nav-list a{display:block;padding:8px 18px;font-size:12.5px;color:#1a1a1a;text-decoration:none;border-bottom:1px solid #f0f0ee;transition:background .1s}
.float-nav-list a:hover{background:#f7f7f5;color:#8B0000;text-decoration:none}
.float-nav-list .fnl-section{font-weight:700;color:#8B0000}

/* CHECKLISTS */
.checklist-section{border-radius:10px;margin:20px auto;max-width:960px;overflow:hidden;border:1px solid #e5e5e0;background:#fff}
.checklist-section.mandatory{border-top:4px solid #16a34a}
.checklist-section.intermediate{border-top:4px solid #ca8a04}
.checklist-section.advanced{border-top:4px solid #991b1b}
.checklist-head{padding:20px 24px;color:#fff}
.checklist-head.mandatory{background:linear-gradient(135deg,#166534,#15803d)}
.checklist-head.intermediate{background:linear-gradient(135deg,#854d0e,#a16207)}
.checklist-head.advanced{background:linear-gradient(135deg,#991b1b,#7f1d1d)}
.checklist-head h2{font-size:18px;font-weight:800;color:#fff}
.checklist-head .ch-sub{font-size:13px;opacity:.88;margin-top:4px}
.ch-badge{display:inline-block;margin-top:8px;background:rgba(255,255,255,.2);padding:3px 12px;border-radius:12px;font-size:11px;font-weight:600}
.checklist-body{padding:18px 24px}
.checklist-group{margin-bottom:18px}
.checklist-group-title{font-size:13px;font-weight:700;padding:6px 12px;border-radius:6px;margin-bottom:10px}
.cgt-mandatory{background:#dcfce7;color:#166534}
.cgt-intermediate{background:#fef9c3;color:#854d0e}
.cgt-advanced{background:#fde2e2;color:#991b1b}
.checklist-items{list-style:none;padding:0}
.checklist-items li{display:flex;align-items:flex-start;gap:12px;padding:10px 0;border-bottom:1px solid #f0f0ee}
.cb{width:22px;height:22px;min-width:22px;border:2px solid #16a34a;border-radius:4px;cursor:pointer;margin-top:2px;position:relative;transition:all .15s}
.checklist-section.intermediate .cb{border-color:#ca8a04}
.checklist-section.advanced .cb{border-color:#991b1b}
.cb.checked{background:#16a34a;border-color:#16a34a}
.cb.checked::after{content:'✓';color:#fff;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-size:14px;font-weight:700}
.checklist-section.intermediate .cb.checked{background:#ca8a04;border-color:#ca8a04}
.checklist-section.advanced .cb.checked{background:#991b1b;border-color:#991b1b}
.ci-content{flex:1}.ci-title{font-size:13px;font-weight:700;color:#1a1a1a;margin-bottom:3px}
.ci-est{font-size:11px;font-weight:600;color:#166534;background:#dcfce7;padding:1px 8px;border-radius:10px;margin-left:6px}
.checklist-section.intermediate .ci-est{color:#854d0e;background:#fef9c3}
.checklist-section.advanced .ci-est{color:#991b1b;background:#fde2e2}
.ci-desc{font-size:12px;color:#5c5c5c;margin-bottom:4px}
.ci-link{color:#1a56db;font-size:12px;font-weight:600}
.checklist-footer{padding:16px 24px;border-top:1px solid #e5e5e0;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px}
.progress-label{font-size:12px;font-weight:600;margin-bottom:4px}
.progress-bar-wrap{background:#e5e5e0;border-radius:10px;height:8px;width:260px}
.progress-bar{height:8px;border-radius:10px;width:0%;transition:width .3s}
.btn-row{display:flex;gap:8px}
.reset-btn{border:none;border-radius:6px;padding:8px 18px;font-size:12px;font-weight:700;cursor:pointer;color:#fff}
.quiz-start-btn{border:none;border-radius:6px;padding:8px 18px;font-size:12px;font-weight:700;cursor:pointer;background:#1a56db;color:#fff}
.quiz-start-btn:hover{background:#1340b0}

/* QUIZ */
.quiz-overlay{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.75);z-index:9800;overflow-y:auto;padding:24px 16px}
.quiz-box{max-width:680px;margin:0 auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 12px 50px rgba(0,0,0,.4)}
.quiz-hd{padding:18px 26px 14px;color:#fff}
.quiz-hd.q-mandatory{background:linear-gradient(135deg,#166534,#15803d)}
.quiz-hd.q-intermediate{background:linear-gradient(135deg,#854d0e,#a16207)}
.quiz-hd.q-advanced{background:linear-gradient(135deg,#991b1b,#7f1d1d)}
.quiz-hd-top{display:flex;justify-content:space-between;align-items:flex-start}
.quiz-hd h3{font-size:16px;font-weight:800;margin-bottom:2px}
.quiz-hd-sub{font-size:11px;opacity:.8}
.quiz-progress-wrap{background:rgba(255,255,255,.2);border-radius:10px;height:6px;margin-top:12px}
.quiz-progress-bar{background:#fff;border-radius:10px;height:6px;transition:width .3s}
.quiz-progress-lbl{font-size:11px;opacity:.8;margin-top:5px}
.quiz-body{padding:26px}
.quiz-q-num{font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;color:#777;margin-bottom:8px}
.quiz-q-text{font-size:16px;font-weight:700;color:#1a1a1a;margin-bottom:18px;line-height:1.5}
.quiz-options{display:flex;flex-direction:column;gap:10px;margin-bottom:22px}
.quiz-opt{border:1.5px solid #e5e5e0;border-radius:8px;padding:12px 16px;font-size:14px;cursor:pointer;color:#1a1a1a;background:#fff;text-align:left;transition:border-color .15s,background .15s;line-height:1.4}
.quiz-opt:hover{border-color:#8B0000;background:#fdf8f8}
.quiz-opt.correct{border-color:#2e7d32;background:#e8f5e9;color:#1b5e20;font-weight:600}
.quiz-opt.wrong{border-color:#c62828;background:#ffebee;color:#b71c1c;font-weight:600}
.quiz-opt.show-correct{border-color:#2e7d32;background:#e8f5e9;color:#1b5e20}
.quiz-feedback{padding:12px 16px;border-radius:8px;font-size:13px;margin-bottom:16px;display:none}
.quiz-feedback.correct{background:#e8f5e9;border:1px solid #a5d6a7;color:#1b5e20}
.quiz-feedback.incorrect{background:#ffebee;border:1px solid #ef9a9a;color:#b71c1c}
.quiz-nav{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px}
.quiz-nav-btn{background:#8B0000;color:#fff;border:none;border-radius:6px;padding:10px 22px;font-size:13px;font-weight:700;cursor:pointer}
.quiz-nav-btn:hover{opacity:.87}.quiz-nav-btn:disabled{opacity:.4;cursor:default}
.quiz-close-btn{background:rgba(255,255,255,.2);border:none;color:#fff;border-radius:50%;width:28px;height:28px;font-size:16px;cursor:pointer;line-height:28px;text-align:center;flex-shrink:0}
.quiz-result{padding:0;text-align:center}
.quiz-result-congrats{padding:28px 26px 20px}
.quiz-result-congrats h3{font-size:22px;font-weight:800;color:#fff;margin-bottom:4px}
.quiz-result-congrats-sub{font-size:13px;opacity:.9}
.quiz-result-body{padding:24px 28px}
.quiz-cert-card{border:2px solid #dcfce7;border-radius:10px;padding:20px 24px;background:linear-gradient(135deg,#f0fdf4,#fff);margin-bottom:20px}
.quiz-cert-card-header{font-size:9px;letter-spacing:3px;text-transform:uppercase;color:#8B0000;margin-bottom:16px;font-weight:700}
.quiz-cert-name-row{display:flex;flex-direction:column;align-items:center;margin-bottom:18px}
.quiz-cert-name-label{font-size:10px;letter-spacing:2px;text-transform:uppercase;color:#777;margin-bottom:6px}
.quiz-cert-name-input{border:none;border-bottom:2px solid #8B0000;font-size:22px;font-weight:700;color:#8B0000;text-align:center;width:100%;max-width:400px;outline:none;background:transparent;padding:4px 0;font-family:Georgia,serif}
.quiz-cert-name-input::placeholder{color:#ccc;font-weight:400;font-size:18px}
.quiz-cert-stats{display:flex;justify-content:space-around;flex-wrap:wrap;gap:12px;margin-bottom:4px}
.quiz-cert-stat{text-align:center;min-width:80px}
.quiz-cert-stat-val{font-size:20px;font-weight:800;color:#8B0000;line-height:1.2}
.quiz-cert-stat-val.pass-green{color:#2e7d32}
.quiz-cert-stat-lbl{font-size:9px;letter-spacing:1.5px;text-transform:uppercase;color:#777;margin-top:3px}
.quiz-cert-divider{border:none;border-top:1px dashed #e5e5e0;margin:16px 0}
.quiz-cert-track{font-size:13px;color:#5c5c5c;text-align:center}
.quiz-cert-track strong{color:#8B0000;display:block;font-size:15px;margin-top:2px}
.quiz-result-btns{display:flex;gap:10px;justify-content:center;flex-wrap:wrap}
.qrb{border:none;border-radius:6px;padding:11px 24px;font-size:13px;font-weight:700;cursor:pointer}
.qrb-print{background:#8B0000;color:#fff}.qrb-print:hover{background:#C0392B}
.qrb-retry{background:#fff;color:#8B0000;border:1.5px solid #8B0000}.qrb-retry:hover{background:#fef2f2}
.quiz-fail-body{padding:30px 26px;text-align:center}
.quiz-fail-score{font-size:44px;font-weight:900;color:#c62828;margin:12px 0 4px}
.quiz-fail-msg{font-size:14px;color:#5c5c5c;background:#f7f7f5;border:1px solid #e5e5e0;border-radius:8px;padding:14px;margin:16px 0;line-height:1.7}
@media print{body>*{display:none!important}#quiz-overlay{display:block!important;position:static!important;background:none!important;padding:0!important;overflow:visible!important}.quiz-box{box-shadow:none!important;max-width:100%!important}.quiz-hd,.quiz-body,.quiz-fail-body,.quiz-result-btns{display:none!important}.quiz-result{display:block!important}.quiz-result-congrats{-webkit-print-color-adjust:exact;print-color-adjust:exact}.quiz-cert-card{border:2px solid #8B0000!important;-webkit-print-color-adjust:exact;print-color-adjust:exact}@page{size:landscape;margin:.3in}.float-nav-btn,.float-nav-panel{display:none!important}}
</style>
<?php bh_favicon_tags(); ?>
</head>
<body>

<!-- HEADER -->
<div class="header-band">
  <div style="text-align:center;padding-bottom:14px"><div class="inventel-logo"><span class="logo-inven">Inven</span><span class="logo-tel">Tel</span></div></div>
  <div class="header-top">
    <div>
      <div class="header-company">InvenTel Innovations — Training Resource Library</div>
      <div class="header-h1">🎨 Canva — Self-Contained Training Guide</div>
      <div class="header-subtitle">Complete step-by-step training for the Canva editor, templates, Brand Kit, presentations, video, and Magic Studio AI — click any section header to collapse/expand</div>
    </div>
    <div class="header-meta">All Levels (Beginner → Advanced)<br>Platform: Canva<br>Format: Self-Contained / Standalone</div>
  </div>
</div>
<div class="stat-row">
  <div class="stat-item"><span class="stat-val">1</span><span class="stat-lbl">Design Platform</span></div>
  <div class="stat-item"><span class="stat-val">18+</span><span class="stat-lbl">Training Sections</span></div>
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Skill Levels</span></div>
  <div class="stat-item"><span class="stat-val">30 Days</span><span class="stat-lbl">Mandatory Window</span></div>
  <div class="stat-item"><span class="stat-val">Magic Studio</span><span class="stat-lbl">Built-in AI</span></div>
  <div class="stat-item"><span class="stat-val">Standalone</span><span class="stat-lbl">No External Links Required</span></div>
</div>
<div class="mandatory-bar">⚠️ All Beginner-level content in this deck is MANDATORY and must be completed within your first 30 days. Completion is tracked and reported to your manager.</div>

<!-- TABLE OF CONTENTS -->
<div class="slide" id="sec-toc">
  <div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Navigation</span></div><h2>📋 Table of Contents</h2><p class="subtitle">Click any item to jump to that section. Click any section header to collapse/expand it.</p></div>
  <div class="slide-body">
    <div class="toc-grid">
      <div class="toc-item" onclick="goTo('sec-overview')">1. Platform Overview<span>What Canva is + access URLs</span></div>
      <div class="toc-item" onclick="goTo('sec-hub')">2. Official Learning Hub<span>Canva Design School + courses</span></div>
      <div class="toc-item" onclick="goTo('sec-begres')">3. Beginner Training Resources<span>Mandatory — external resources</span></div>
      <div class="toc-item" onclick="goTo('sec-start')">4. Getting Started — First Day Setup<span>Step-by-step account & app setup</span></div>
      <div class="toc-item" onclick="goTo('sec-editor')">5. The Canva Editor Deep Dive<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-templates')">6. Templates, Elements & Photos<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-brand')">7. Brand Kit & Collaboration<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-content')">8. Presentations, Video & Docs<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-ai')">9. Magic Studio AI<span>AI features across Canva</span></div>
      <div class="toc-item" onclick="goTo('sec-intres')">10. Intermediate Resources<span>Self-paced, optional links</span></div>
      <div class="toc-item" onclick="goTo('sec-advres')">11. Advanced Resources<span>Optional deep mastery links</span></div>
      <div class="toc-item" onclick="goTo('sec-certs')">12. Certifications<span>Design School certificates</span></div>
      <div class="toc-item" onclick="goTo('cl-mandatory')">13. New Hire Checklist<span>Interactive — mandatory</span></div>
      <div class="toc-item" onclick="goTo('cl-intermediate')">14. Intermediate Checklist<span>Interactive — self-paced</span></div>
      <div class="toc-item" onclick="goTo('cl-advanced')">15. Advanced Checklist<span>Interactive — mastery</span></div>
      <div class="toc-item" onclick="goTo('sec-qr')">16. Quick Reference + Final Note<span>Platform URLs + help centers</span></div>
    </div>
  </div>
</div>

<!-- 1. PLATFORM OVERVIEW -->
<div class="slide" id="sec-overview"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Section 1</span></div><h2>🎨 What is Canva?</h2><p class="subtitle">An all-in-one visual design and content creation platform.</p></div>
  <div class="slide-body">
    <p style="font-size:13px;color:#5c5c5c;margin-bottom:14px">Canva is InvenTel's primary design platform. It is a browser-based (and app-based) tool for creating presentations, social media graphics, documents, videos, flyers, and more — all from a drag-and-drop editor with thousands of ready-made templates. Every team member has access through their InvenTel Canva account. You do not need any prior design experience to use it.</p>
    <div class="apps-grid"><span class="app-chip">🖼️ Editor</span><span class="app-chip">📐 Templates</span><span class="app-chip">🧩 Elements</span><span class="app-chip">🎨 Brand Kit</span><span class="app-chip">📊 Presentations</span><span class="app-chip">🎬 Video</span><span class="app-chip">📄 Docs</span><span class="app-chip">✨ Magic Studio AI</span></div>
    <div class="platform-url"><strong>Platform URL:</strong> <a href="https://www.canva.com" target="_blank">canva.com</a><br><strong>Your designs (home):</strong> <a href="https://www.canva.com/folder/all-designs" target="_blank">canva.com — Home</a><br><strong>Design School (learning):</strong> <a href="https://www.canva.com/design-school/" target="_blank">canva.com/design-school</a><br><strong>Help Center:</strong> <a href="https://www.canva.com/help/" target="_blank">canva.com/help</a><br><strong>Account settings:</strong> <a href="https://www.canva.com/settings/" target="_blank">canva.com/settings</a></div>
    <div class="callout"><strong>💡 How it all connects:</strong> Everything you create lives in one place. A template you customize becomes a saved design in your Projects. Your Brand Kit (logos, colors, fonts) is available in every design. The same editor builds a social post, a slide deck, or a video — so once you learn the editor, you can make almost anything.</div>
  </div>
</div>

<!-- 2. OFFICIAL LEARNING HUB -->
<div class="slide" id="sec-hub"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-academy">Canva Design School</span></div><h2>🎓 Official Learning Hub — Canva Design School</h2><p class="subtitle">Beginner-level courses are MANDATORY within 30 days.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Canva Design School <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-academy">Official Canva</span></div><div class="card-desc">Canva's official learning hub — self-paced courses, lessons, and tutorials embedded directly inside Canva. Each beginner course ends with a short test that awards a shareable certificate. This is the single most important resource to bookmark.</div><div class="card-meta"><strong>Format:</strong> Courses + Lessons &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">All Features</span><span class="tag t2">Certified</span></div><a href="https://www.canva.com/design-school/" target="_blank">→ Visit Canva Design School</a></div>
    <div class="card"><div class="card-title">Canva Essentials Course <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-beginner">Beginner</span></div><div class="card-desc">A 10-lesson, ~1-hour beginner course covering navigation, customizing templates, elements, text, and sharing. Ends with a 25-question test for an official certificate. The recommended starting point for every new hire.</div><div class="card-meta"><strong>Format:</strong> Video lessons + Test &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1 hr &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t2">Certificate</span><span class="tag t4">Editor</span></div><a href="https://www.canva.com/design-school/courses/canva-essentials/" target="_blank">→ Start the Canva Essentials course</a></div>
    <div class="card"><div class="card-title">Canva for Work Course <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-beginner">Beginner</span></div><div class="card-desc">Focused on workplace use — better brainstorms, clearer documents, standout presentations, and staying on-brand and in sync with your team. Highly relevant for day-to-day InvenTel work.</div><div class="card-meta"><strong>Format:</strong> Video lessons &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1 hr &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Workplace</span><span class="tag t4">Collaboration</span><span class="tag t2">On-Brand</span></div><a href="https://www.canva.com/design-school/courses/canva-for-work/" target="_blank">→ Start the Canva for Work course</a></div>
  </div>
</div>

<!-- 3. BEGINNER TRAINING RESOURCES -->
<div class="slide" id="sec-begres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory — Complete Within 30 Days</span></div><h2>🟢 Beginner Training — Mandatory Resources</h2><p class="subtitle">Every team member must complete these before the 30-day mark.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Graphic Design Essentials — Design School <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Canva's official beginner guide to core design principles — layout, color, and typography — applied directly in Canva. A great companion to the Canva Essentials course.</div><div class="card-meta"><strong>Format:</strong> Course (~53 min) &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1 hr &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Design Basics</span><span class="tag t4">All Features</span></div><a href="https://www.canva.com/design-school/courses/graphic-design-essentials/" target="_blank">→ Start Graphic Design Essentials</a></div>
    <div class="card"><div class="card-title">Canva Help Center — Getting Started <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Searchable step-by-step articles for every Canva feature. Perfect for quick how-to lookups while you work. Bookmark it at your desk.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min browse &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Reference</span><span class="tag t2">How-To</span><span class="tag t4">Quick Ref</span></div><a href="https://www.canva.com/help/" target="_blank">→ Visit the Canva Help Center</a></div>
    <div class="card"><div class="card-title">YouTube: Canva for Beginners <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Visual walkthrough of the editor and core features. Best for visual learners who want to watch before they build.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">YouTube</span><span class="tag t4">Video</span><span class="tag t2">Editor</span></div><a href="https://www.youtube.com/results?search_query=canva+tutorial+for+beginners+2026" target="_blank">→ Search YouTube: "Canva tutorial for beginners 2026"</a></div>
  </div>
</div>

<!-- 4. GETTING STARTED -->
<div class="slide" id="sec-start"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory</span></div><h2>🟢 Getting Started — Your First Day with Canva</h2><p class="subtitle">Complete these steps in order to set up your account and verify access.</p></div>
  <div class="slide-body">
    <div class="steps-box"><h4>🔐 Sign In to Your InvenTel Canva Account</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Open Chrome or your preferred browser (Canva also has desktop and mobile apps).</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Go to <a href="https://www.canva.com" target="_blank">canva.com</a> and click <strong>Log in</strong> (top-right).</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Sign in using the method HR set up for you — typically your InvenTel work email (<code>firstname.lastname@inventel.com</code>) or single sign-on.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">If prompted, accept the invitation to join the <strong>InvenTel team</strong> so you see shared brand assets and team folders.</div></div>
      <div class="step"><div class="step-num green">5</div><div class="step-text">You'll land on the Canva <strong>Home</strong> page — your hub for creating and finding designs.</div></div>
      <div class="step-warning"><strong>⚠️</strong> If you see "access denied" or can't join the InvenTel team, do not create a personal account. Contact the HR Training Coordinator instead.</div>
    </div>
    <div class="steps-box"><h4>🖼️ Set Up Your Profile</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Click your profile picture (top-right) → <span class="step-nav">Settings</span>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Under <strong>Your account</strong>, confirm your display name is correct — this name appears on any Design School certificates you earn.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Upload a profile photo so teammates can recognize you in shared designs and comments.</div></div>
      <div class="step-tip"><strong>💡</strong> To change the name on a certificate later, edit the name field at <a href="https://www.canva.com/settings/your-account" target="_blank">canva.com/settings/your-account</a>.</div>
    </div>
    <div class="steps-box"><h4>📁 Find Your Way Around the Home Page</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Create a design</strong> button (top-right) — starts a new design of any type.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Projects</strong> (left sidebar) — every design you've created or that's been shared with you.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Templates</strong> and <strong>Brand</strong> (left sidebar) — browse ready-made layouts and your team's Brand Kit.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">Use the <strong>search bar</strong> at the top to find templates, your own designs, photos, or elements.</div></div>
    </div>
    <div class="steps-box"><h4>✅ Verify Access to Key Features</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Click <strong>Create a design</strong> → <strong>Presentation</strong>. Confirm the editor opens.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Open the <strong>Brand</strong> tab in the left sidebar and confirm you can see InvenTel logos, colors, and fonts.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Open <strong>Apps</strong> in the editor sidebar and confirm <strong>Magic Studio</strong> AI tools appear.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">If anything is missing, note it and contact the HR Training Coordinator.</div></div>
    </div>
  </div>
</div>

<!-- 5. CANVA EDITOR DEEP DIVE -->
<div class="slide" id="sec-editor"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🖼️ Core Feature Deep Dive — The Canva Editor</h2><p class="subtitle">Complete step-by-step instructions at every level.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Editor Basics</h3>
        <div class="sub-card"><strong>Creating & Navigating a Design</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Click <strong>Create a design</strong> → pick a type (e.g. Instagram Post, Presentation) or enter custom dimensions.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">The <strong>left sidebar</strong> holds Templates, Elements, Text, Uploads, and more. The <strong>canvas</strong> is in the center.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Designs auto-save. Rename via the title field at the top.</div></div>
        </div>
        <div class="sub-card"><strong>Adding & Editing Elements</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Click any item in the sidebar to add it to the canvas, or drag it on.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click an element to select it. Drag corner handles to resize; drag the middle to move.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Text:</strong> click <strong>Text</strong> → "Add a text box," then type. Change font, size, and color in the top toolbar.</div></div>
          <div class="step-tip"><strong>💡</strong> Undo with <span class="kbd">Ctrl+Z</span>, redo with <span class="kbd">Ctrl+Y</span>. Duplicate a selected element with <span class="kbd">Ctrl+D</span>.</div>
        </div>
        <div class="sub-card"><strong>Downloading & Sharing</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Share</strong> (top-right) → invite teammates by name/email, or copy a link.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Download:</strong> Share → Download → pick a format (PNG, JPG, PDF, MP4) → <strong>Download</strong>.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Layout & Precision</h3>
        <div class="sub-card"><strong>Alignment, Layers & Grouping</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Drag elements — pink <strong>smart guides</strong> appear to align and center automatically.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Select multiple elements (<span class="kbd">Shift</span>+click) → <strong>Group</strong> (or <span class="kbd">Ctrl+G</span>) to move them as one.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Right-click → <span class="step-nav">Layers</span> to bring elements forward or send them back.</div></div>
        </div>
        <div class="sub-card"><strong>Position, Spacing & Grids</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">With items selected, open the <strong>Position</strong> tab (toolbar) → Align, distribute spacing, or tidy a layout.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Add a <strong>Grid</strong> or <strong>Frame</strong> from Elements to snap photos neatly into place.</div></div>
        </div>
        <div class="sub-card"><strong>Multi-Page Designs</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Click <strong>+ Add page</strong> below the canvas, or duplicate a page to keep consistent layouts.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Open the <strong>Grid view</strong> (bottom toolbar) to reorder pages by dragging.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Power Editing</h3>
        <div class="sub-card"><strong>Magic Resize & Bulk Workflows</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Resize a design for other formats: <span class="step-nav">Resize & Magic Switch</span> → choose new sizes → <strong>Copy & resize</strong>.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Always review a resized design — text and elements may need repositioning to fit the new dimensions.</div>
        </div>
        <div class="sub-card"><strong>Keyboard Shortcuts for Speed</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="kbd">T</span> = text box, <span class="kbd">R</span> = rectangle, <span class="kbd">L</span> = line, <span class="kbd">C</span> = circle.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text"><span class="kbd">Ctrl+Shift+K</span> = uppercase text; <span class="kbd">Alt</span>+drag = duplicate; arrow keys nudge.</div></div>
        </div>
        <div class="sub-card"><strong>Styles & Apply to All</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Copy an element's style: select it → <span class="step-nav">copy style</span> (paint roller) → click the target element.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Use <strong>Apply to all pages</strong> for backgrounds and shared elements to keep a deck consistent.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 6. TEMPLATES, ELEMENTS & PHOTOS -->
<div class="slide" id="sec-templates"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📐 Core Feature Deep Dive — Templates, Elements & Photos</h2><p class="subtitle">Start fast with templates, then make them your own.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Templates & Media Basics</h3>
        <div class="sub-card"><strong>Using a Template</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open <strong>Templates</strong> in the sidebar (or search by keyword, e.g. <code>quarterly report</code>).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click a template to apply it. Replace text and images with your own — the layout stays intact.</div></div>
        </div>
        <div class="sub-card"><strong>Elements & Stock Photos</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Elements</strong> tab → search shapes, icons, illustrations, stickers, charts.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Photos:</strong> search the Photos section → click to add. Drag a photo onto a frame to crop it to shape.</div></div>
        </div>
        <div class="sub-card"><strong>Uploading Your Own Files</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Uploads</strong> tab → <strong>Upload files</strong> → choose images, video, or audio from your computer.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Uploaded files stay in your account for reuse across designs.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Editing & Search</h3>
        <div class="sub-card"><strong>Photo Editing Tools</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Select a photo → <strong>Edit photo</strong> → adjust brightness, contrast, filters, and effects.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><strong>Crop</strong> and <strong>Flip</strong> live in the top toolbar; <strong>Transparency</strong> sits beside them.</div></div>
        </div>
        <div class="sub-card"><strong>Smart Search & Filters</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">In Elements, use filters (color, orientation, animated/static) to narrow results.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Use <strong>Styles</strong> to recolor a whole template palette in one click.</div></div>
        </div>
        <div class="sub-card"><strong>Frames & Grids for Layouts</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Search <code>frames</code> in Elements → drag onto canvas → drop a photo inside to mask it to that shape.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Reusable Assets</h3>
        <div class="sub-card"><strong>Creating Your Own Templates</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Build a design → <span class="step-nav">Share → Template link</span> to let teammates copy it as a starting point.</div></div>
          <div class="step-tip"><strong>💡</strong> Save common InvenTel layouts (reports, decks, social posts) as templates so the team never starts from scratch.</div>
        </div>
        <div class="sub-card"><strong>Background Remover & Effects</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Select a photo → <strong>Edit photo</strong> → <strong>BG Remover</strong> to isolate a subject instantly.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Add <strong>Shadows</strong>, <strong>Duotone</strong>, or <strong>Blur</strong> effects from the same panel.</div></div>
        </div>
        <div class="sub-card"><strong>Charts from Data</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Elements → <strong>Charts</strong> → pick a chart → open the <strong>data table</strong> and enter or paste values.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 7. BRAND KIT & COLLABORATION -->
<div class="slide" id="sec-brand"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🎨 Core Feature Deep Dive — Brand Kit & Collaboration</h2><p class="subtitle">Stay on-brand and work together in real time.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Brand & Sharing Basics</h3>
        <div class="sub-card"><strong>Using the InvenTel Brand Kit</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">In the editor sidebar, open <strong>Brand</strong> (or <strong>Brand Kit</strong>) to see InvenTel logos, brand colors, and fonts.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click a brand color or font to apply it instantly to a selected element.</div></div>
        </div>
        <div class="sub-card"><strong>Sharing & Permissions</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Share</strong> (top-right) → add people → set them as <strong>Can edit</strong>, <strong>Can comment</strong>, or <strong>Can view</strong>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Or copy a link and set link access to anyone in the InvenTel team.</div></div>
        </div>
        <div class="sub-card"><strong>Comments</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Click the <strong>comment</strong> icon, click on the canvas, type, and <strong>Comment</strong>. Mention someone with <code>@name</code>.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Team Workflows</h3>
        <div class="sub-card"><strong>Real-Time Collaboration</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Multiple people can edit the same design at once — you'll see their cursors live.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Use <strong>Present and record</strong> or comments to give feedback without editing.</div></div>
        </div>
        <div class="sub-card"><strong>Folders & Projects</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Projects → Add new → Folder</span> to organize team designs by campaign or department.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Share a folder so the whole team can access everything inside it.</div></div>
        </div>
        <div class="sub-card"><strong>Version History</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">File → Version history</span> → restore or copy any earlier version of a design.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Brand Governance</h3>
        <div class="sub-card"><strong>Brand Templates & Locking</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Publish approved layouts as <strong>Brand Templates</strong> so teammates customize without breaking the design.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text"><strong>Lock</strong> an element (lock icon) so it can't be moved or edited accidentally.</div></div>
        </div>
        <div class="sub-card"><strong>Approvals & Workflows</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Request <strong>Approval</strong> from the Share menu so a reviewer signs off before a design is published.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Always route external-facing designs through the InvenTel brand approval process before sharing publicly.</div>
        </div>
        <div class="sub-card"><strong>Brand Voice & Consistency</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Use the Brand Kit's saved fonts and colors everywhere; avoid off-brand fonts so all InvenTel assets look unified.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 8. PRESENTATIONS, VIDEO & DOCS -->
<div class="slide" id="sec-content"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📊🎬📄 Core Feature Deep Dive — Presentations, Video & Docs</h2><p class="subtitle">Three of Canva's most-used content formats.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Core Creation</h3>
        <div class="sub-card"><strong>📊 Presentations</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Create a design → <strong>Presentation</strong>. Add slides with <strong>+ Add page</strong> and a template per slide.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click <strong>Present</strong> (top-right) to enter full-screen. Use arrow keys to advance.</div></div>
        </div>
        <div class="sub-card"><strong>🎬 Video</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Create a design → <strong>Video</strong>. Drag clips to the timeline at the bottom; trim by dragging clip edges.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Add music from the <strong>Audio</strong> tab and text overlays from <strong>Text</strong>.</div></div>
        </div>
        <div class="sub-card"><strong>📄 Docs</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Create a design → <strong>Doc</strong>. Type as you would in any document; use <code>/</code> to insert images, charts, or tables.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Polish & Motion</h3>
        <div class="sub-card"><strong>Transitions & Animations</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Presentations: hover between page thumbnails → <strong>Add transition</strong> → pick a style and speed.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Select an element → <strong>Animate</strong> → choose an entrance/exit effect.</div></div>
        </div>
        <div class="sub-card"><strong>Speaker Notes & Presenter View</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Open <strong>Notes</strong> below the canvas to add talking points (visible only to you).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Use <strong>Present → Presenter view</strong> to see notes and a timer on your screen.</div></div>
        </div>
        <div class="sub-card"><strong>Video Timeline Editing</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Split a clip: position the playhead → click the clip → <strong>Split</strong> (scissors).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Adjust clip timing and add transitions between clips on the timeline.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Pro Output</h3>
        <div class="sub-card"><strong>Interactive & Self-Running Presentations</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Add clickable links to elements (<span class="kbd">Ctrl+K</span>) for navigation within a deck.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Use <strong>Present → Autoplay</strong> for kiosk/display loops, or share a view link for self-paced viewing.</div></div>
        </div>
        <div class="sub-card"><strong>Talking Presentations & Recording</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>Present and record</strong> → record your camera + voice over each slide → share the link.</div></div>
        </div>
        <div class="sub-card"><strong>Advanced Export</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Download as <strong>PDF Print</strong> (with crop marks/bleed) for professional printing, or <strong>MP4</strong> for video.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Use <strong>Magic Switch</strong> to turn a deck into a doc, summary, or another format.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 9. MAGIC STUDIO AI -->
<div class="slide" id="sec-ai"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>✨ Core Feature Deep Dive — Magic Studio AI</h2><p class="subtitle">Canva's built-in suite of AI tools for design, text, and media.</p></div>
  <div class="slide-body">
    <div class="callout"><strong>💡 Where to find it:</strong> Most AI tools live in the editor sidebar under <strong>Apps</strong> / <strong>Magic Studio</strong>, in the toolbar when an element is selected, or as suggestions while you type. Always review AI output before using it — verify facts, refine wording, and make sure it matches the InvenTel brand.</div>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>AI Basics</h3>
        <div class="sub-card"><strong>Magic Design</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">On Home or in a new design, describe what you want (e.g. <code>product launch social post</code>) → Magic Design generates ready-to-edit templates.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click a result to open and customize it like any template.</div></div>
        </div>
        <div class="sub-card"><strong>Magic Write</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">In a Doc or text box, open <strong>Magic Write</strong> → type a prompt (e.g. <code>three taglines for a webinar</code>) → generate.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Edit the result directly; it goes right where you need it.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>AI Media</h3>
        <div class="sub-card"><strong>Magic Media (Text to Image/Video)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Apps → <strong>Magic Media</strong> → enter a descriptive prompt and pick a style → <strong>Generate</strong>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Click a generated image/video to add it to your canvas.</div></div>
          <div class="step-tip"><strong>💡</strong> Specific prompts work best: subject, style, lighting, and mood (e.g. <code>modern office, soft daylight, photorealistic</code>).</div>
        </div>
        <div class="sub-card"><strong>Magic Edit & Magic Eraser</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Select a photo → <strong>Edit photo</strong> → <strong>Magic Edit</strong> → brush over an area → describe what to replace it with.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><strong>Magic Eraser:</strong> brush over an unwanted object to remove it.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>AI Power Tools</h3>
        <div class="sub-card"><strong>Magic Expand & Magic Grab</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>Magic Expand:</strong> select a photo → Edit photo → Magic Expand → extend the image beyond its original borders to fit a new size.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text"><strong>Magic Grab:</strong> pull a subject out of a photo to move or edit it separately from the background.</div></div>
        </div>
        <div class="sub-card"><strong>Magic Switch (Translate & Repurpose)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Resize & Magic Switch</span> → transform a design into another format, or translate it into other languages.</div></div>
        </div>
        <div class="sub-card"><strong>Prompt Best Practice</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Give clear, structured prompts and iterate. Never accept the first output for professional work — always review, fact-check, and refine.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Do not put confidential InvenTel data into AI prompts unless approved. When in doubt, ask the HR Training Coordinator.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 10. INTERMEDIATE TRAINING RESOURCES -->
<div class="slide" id="sec-intres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-intermediate">Self-Paced · Optional</span></div><h2>🟡 Intermediate Training Resources</h2><p class="subtitle">Build on the basics — self-paced, optional.</p></div>
  <div class="slide-body">
    <div class="card intermediate"><div class="card-title">Meet Canva's Visual Suite — Design School <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Tour the full set of Canva formats — Docs, Whiteboards, Presentations, and more — and learn how they fit together for real workplace projects.</div><div class="card-meta"><strong>Format:</strong> Course (~1 hr) &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Visual Suite</span><span class="tag t4">Docs & Whiteboards</span></div><a href="https://www.canva.com/design-school/courses/" target="_blank">→ Browse Design School courses</a></div>
    <div class="card intermediate"><div class="card-title">Branding Your Business — Design School <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">A deeper dive into building and applying a brand identity in Canva — logos, color systems, and consistent assets across formats.</div><div class="card-meta"><strong>Format:</strong> Course (~2.5 hrs) &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Branding</span><span class="tag t1">Brand Kit</span></div><a href="https://www.canva.com/design-school/courses/" target="_blank">→ Find "Branding your business" in Design School</a></div>
    <div class="card intermediate"><div class="card-title">YouTube: Canva Intermediate Tips <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Workflow tips, layout tricks, and time-savers for people comfortable with the basics.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">YouTube</span><span class="tag t4">Tips</span></div><a href="https://www.youtube.com/results?search_query=canva+intermediate+tips+and+tricks+2026" target="_blank">→ Search YouTube: "Canva intermediate tips and tricks 2026"</a></div>
  </div>
</div>

<!-- 11. ADVANCED TRAINING RESOURCES -->
<div class="slide" id="sec-advres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-advanced">Optional · Deep Mastery</span></div><h2>🔴 Advanced Training Resources</h2><p class="subtitle">For deep mastery — entirely optional.</p></div>
  <div class="slide-body">
    <div class="card advanced"><div class="card-title">Marketing with Canva — Design School <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Scale campaigns, build reusable templates, and create workflows that let a whole team contribute while staying on-brand. Strong fit for marketing-adjacent roles.</div><div class="card-meta"><strong>Format:</strong> Course (~1 hr) &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Marketing</span><span class="tag t4">Campaigns</span></div><a href="https://www.canva.com/design-school/courses/" target="_blank">→ Find "Marketing with Canva" in Design School</a></div>
    <div class="card advanced"><div class="card-title">Master Canva's AI Tools — Magic Studio <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Go deep on Magic Studio — advanced prompting, AI-powered workflows, and combining tools to cut design time dramatically.</div><div class="card-meta"><strong>Format:</strong> Course / Resources &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Magic Studio</span><span class="tag t4">AI Workflows</span></div><a href="https://www.canva.com/magic/" target="_blank">→ Explore Magic Studio</a></div>
    <div class="card advanced"><div class="card-title">YouTube: Advanced Canva & Magic Studio <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Advanced tutorials covering AI workflows, video editing, and power-user techniques.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">YouTube</span><span class="tag t4">Advanced</span></div><a href="https://www.youtube.com/results?search_query=canva+magic+studio+advanced+tutorial+2026" target="_blank">→ Search YouTube: "Canva Magic Studio advanced tutorial 2026"</a></div>
  </div>
</div>

<!-- 12. CERTIFICATIONS -->
<div class="slide" id="sec-certs"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Certifications</span></div><h2>🏅 Certifications & Design School Certificates</h2><p class="subtitle">Optional credentials. Shareable on LinkedIn.</p></div>
  <div class="slide-body">
    <div class="callout" style="background:#fffbeb;border-left-color:#ca8a04"><strong style="color:#854d0e">💡 Optional Personal Investment:</strong> The credentials listed below are <strong>not covered by InvenTel</strong> and are pursued at your own discretion. Canva's own Design School courses and end-of-course tests can be explored to earn shareable certificates, and any third-party programs (such as Coursera's Canva Essentials Professional Certificate) may involve separate enrollment requirements or out-of-pocket fees to access the full program or formal assessment. These credentials are entirely optional — they are personal career development tools you can pursue on your own time if you'd like to formally validate your Canva skills.</div>
    <p style="font-size:12px;color:#777;margin-bottom:10px">Note: Canva's Design School certificates are earned by completing a course and passing its short end-of-course test, then added to your LinkedIn profile from the award page.</p>
    <table class="cert-table"><thead><tr><th>Certification / Course</th><th>Provider</th><th>Skill Level</th><th>Est. Time</th></tr></thead><tbody>
      <tr><td><strong>Canva Essentials Certificate</strong></td><td>Canva Design School</td><td><span class="badge badge-beginner">Beginner</span></td><td>~1 hr + 25-q test</td></tr>
      <tr><td><strong>Canva for Work Certificate</strong></td><td>Canva Design School</td><td><span class="badge badge-beginner">Beginner</span></td><td>~1 hr</td></tr>
      <tr><td><strong>Graphic Design Essentials Certificate</strong></td><td>Canva Design School</td><td><span class="badge badge-beginner">Beginner</span></td><td>~53 min</td></tr>
      <tr><td><strong>Marketing with Canva Certificate</strong></td><td>Canva Design School</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~1 hr</td></tr>
      <tr><td><strong>Scale Creative Campaigns Certificate</strong></td><td>Canva Design School</td><td><span class="badge badge-advanced">Advanced</span></td><td>~1.5 hrs</td></tr>
    </tbody></table>
    <p style="font-size:12px;color:#777;margin-top:10px">Browse all certified courses at <a href="https://www.canva.com/design-school/explore/?hasCertification=true" target="_blank">canva.com/design-school/explore</a>.</p>
  </div>
</div>

<!-- 13. NEW HIRE CHECKLIST -->
<div class="checklist-section mandatory" id="cl-mandatory"><div class="checklist-head mandatory"><h2>✅ New Hire Onboarding Checklist</h2><div class="ch-sub">Complete all tasks within your first 30 days</div><span class="ch-badge">Mandatory · 30-Day Deadline</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">💻 App Downloads & Device Setup (OPTIONAL)</div><ul class="checklist-items"><li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Install the Canva desktop app <span class="ci-est">Optional</span></div><div class="ci-desc">Download from canva.com/download → sign in with your InvenTel account for a dedicated desktop window.</div></div></li></ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📱 Mobile App Downloads (OPTIONAL)</div><ul class="checklist-items"><li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Download the Canva mobile app <span class="ci-est">Optional</span></div><div class="ci-desc">App Store or Play Store → Canva → sign in with your InvenTel account.</div></div></li></ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">🔐 Account Setup (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Sign in to InvenTel Canva account <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Join the InvenTel team & confirm display name <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Add a profile photo <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Verify access to Brand Kit & Magic Studio <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">🖼️📐🎨📊✨ Feature Training (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Canva Editor beginner tutorials (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Templates & Photos beginner tutorials (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Brand Kit & sharing tutorials (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Build a simple Presentation (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Download a design as PNG and PDF (Sec 5) <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Try Magic Design + Magic Write (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📚 External Resources (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete the Canva Essentials course (Sec 2) <span class="ci-est">~1 hr</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete the Canva for Work course (Sec 2) <span class="ci-est">~1 hr</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Watch a YouTube Beginner Tutorial (Sec 3) <span class="ci-est">~45 min</span></div></div></li>
    </ul></div>
  </div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-mandatory" style="color:#166534">0 of 15 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-mandatory" style="background:#16a34a"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#166534" onclick="resetList('mandatory')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('mandatory')">📝 Take Quiz</button></div></div>
</div>

<!-- 14. INTERMEDIATE CHECKLIST -->
<div class="checklist-section intermediate" id="cl-intermediate"><div class="checklist-head intermediate"><h2>✅ Intermediate Learner Checklist</h2><div class="ch-sub">Self-paced — after mandatory training</div><span class="ch-badge">Self-Paced · Optional</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-intermediate">All Features Intermediate</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Align, group & layer elements in a design (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Edit a photo: filters, crop, transparency (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Use a Frame to mask a photo to a shape (Sec 6) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Organize designs into a shared Folder (Sec 7) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Add transitions & animations to a deck (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Add speaker notes + use Presenter view (Sec 8) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Split and trim clips on the video timeline (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Generate an image with Magic Media (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-intermediate" style="color:#854d0e">0 of 8 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-intermediate" style="background:#ca8a04"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#854d0e" onclick="resetList('intermediate')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('intermediate')">📝 Take Quiz</button></div></div>
</div>

<!-- 15. ADVANCED CHECKLIST -->
<div class="checklist-section advanced" id="cl-advanced"><div class="checklist-head advanced"><h2>✅ Advanced Learner Checklist</h2><div class="ch-sub">Optional — deep mastery</div><span class="ch-badge">Optional · Deep Mastery</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-advanced">All Features Advanced</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Use Magic Resize to repurpose one design (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Save a reusable Brand/Template for the team (Sec 6/7) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Use BG Remover + photo effects (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Lock an element + request an Approval (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Record a talking presentation (Sec 8) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Use Magic Edit + Magic Expand on a photo (Sec 9) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Use Magic Switch to repurpose/translate a design (Sec 9) <span class="ci-est">~15 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-advanced" style="color:#991b1b">0 of 7 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-advanced" style="background:#991b1b"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#991b1b" onclick="resetList('advanced')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('advanced')">📝 Take Quiz</button></div></div>
</div>

<!-- 16. QUICK REFERENCE -->
<div class="slide" id="sec-qr"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Quick Reference</span></div><h2>🔗 Quick Reference — Platform Access & Help Centers</h2></div>
  <div class="slide-body"><div class="qr-grid">
    <div class="qr-card"><h4>🔐 Platform Access</h4><ul><li><a href="https://www.canva.com" target="_blank">canva.com</a></li><li><a href="https://www.canva.com/folder/all-designs" target="_blank">Home / Your designs</a></li><li><a href="https://www.canva.com/settings/" target="_blank">Account settings</a></li><li><a href="https://www.canva.com/download/" target="_blank">Desktop & mobile apps</a></li><li><a href="https://www.canva.com/brand/" target="_blank">Brand Kit</a></li><li><a href="https://www.canva.com/magic/" target="_blank">Magic Studio</a></li></ul></div>
    <div class="qr-card"><h4>🎓 Help & Learning</h4><ul><li><a href="https://www.canva.com/help/" target="_blank">Canva Help Center</a></li><li><a href="https://www.canva.com/design-school/" target="_blank">Design School</a></li><li><a href="https://www.canva.com/design-school/courses/" target="_blank">All Courses</a></li><li><a href="https://www.canva.com/help/design-school-accreditation/" target="_blank">How certificates work</a></li></ul></div>
    <div class="qr-card"><h4>🏅 Certs & Courses</h4><ul><li><a href="https://www.canva.com/design-school/courses/canva-essentials/" target="_blank">Canva Essentials</a></li><li><a href="https://www.canva.com/design-school/courses/canva-for-work/" target="_blank">Canva for Work</a></li><li><a href="https://www.canva.com/design-school/courses/graphic-design-essentials/" target="_blank">Graphic Design Essentials</a></li><li><a href="https://www.canva.com/design-school/explore/?hasCertification=true" target="_blank">All certified courses</a></li></ul></div>
    <div class="qr-card"><h4>🎬 YouTube</h4><ul><li><a href="https://www.youtube.com/results?search_query=canva+tutorial+for+beginners+2026" target="_blank">Beginner Tutorial</a></li><li><a href="https://www.youtube.com/results?search_query=canva+intermediate+tips+and+tricks+2026" target="_blank">Intermediate Tips</a></li><li><a href="https://www.youtube.com/results?search_query=canva+magic+studio+advanced+tutorial+2026" target="_blank">Advanced & Magic Studio</a></li></ul></div>
  </div></div>
</div>

<!-- FINAL NOTE -->
<div class="final-note" id="sec-final">
  <p style="font-size:15px;font-weight:700;margin-bottom:10px">📌 Final Note — Canva Training</p>
  <p style="margin-bottom:10px">All <strong>Beginner-level content</strong> is <strong>mandatory</strong> within your first <strong>30 days</strong>. Intermediate and Advanced training is self-paced.</p>
  <p style="margin-bottom:10px">This deck is <strong>self-contained</strong> — every deep-dive includes complete step-by-step instructions. Click any section header to collapse it once you've completed it. External links and help centers are in the Quick Reference.</p>
  <p style="margin-bottom:10px">Use the <strong>New Hire Checklist</strong> to track progress and share with your manager.</p>
  <p style="margin-bottom:10px">For access, credentials, or training questions — reach out to the <strong>HR Training Coordinator who assisted you during onboarding</strong> — they are your best point of contact for training questions and platform access.</p>
  <p style="margin-bottom:10px"><a href="https://www.canva.com/help/" target="_blank">Canva Help Center →</a></p>
  <p style="font-size:11px;opacity:.7;margin-top:14px">Last updated: April 6, 2025</p>
</div>

<!-- FLOATING NAV BUTTON -->
<button class="float-nav-btn" onclick="toggleFloatNav()" title="Jump to section">📋</button>
<div class="float-nav-panel" id="float-nav">
  <div class="float-nav-hd">📋 Jump to Section</div>
  <ul class="float-nav-list">
    <li><a class="fnl-section" href="#sec-toc" onclick="closeNav()">📋 Table of Contents</a></li>
    <li><a class="fnl-section" href="#sec-overview" onclick="closeNav()">🎨 1. Platform Overview</a></li>
    <li><a class="fnl-section" href="#sec-hub" onclick="closeNav()">🎓 2. Official Learning Hub</a></li>
    <li><a class="fnl-section" href="#sec-begres" onclick="closeNav()">🟢 3. Beginner Resources</a></li>
    <li><a class="fnl-section" href="#sec-start" onclick="closeNav()">🟢 4. Getting Started</a></li>
    <li><a class="fnl-section" href="#sec-editor" onclick="closeNav()">🖼️ 5. The Canva Editor</a></li>
    <li><a class="fnl-section" href="#sec-templates" onclick="closeNav()">📐 6. Templates & Photos</a></li>
    <li><a class="fnl-section" href="#sec-brand" onclick="closeNav()">🎨 7. Brand Kit & Collaboration</a></li>
    <li><a class="fnl-section" href="#sec-content" onclick="closeNav()">📊 8. Presentations, Video & Docs</a></li>
    <li><a class="fnl-section" href="#sec-ai" onclick="closeNav()">✨ 9. Magic Studio AI</a></li>
    <li><a class="fnl-section" href="#sec-intres" onclick="closeNav()">🟡 10. Intermediate Resources</a></li>
    <li><a class="fnl-section" href="#sec-advres" onclick="closeNav()">🔴 11. Advanced Resources</a></li>
    <li><a class="fnl-section" href="#sec-certs" onclick="closeNav()">🏅 12. Certifications</a></li>
    <li><a class="fnl-section" href="#cl-mandatory" onclick="closeNav()">✅ 13. New Hire Checklist</a></li>
    <li><a class="fnl-section" href="#cl-intermediate" onclick="closeNav()">✅ 14. Intermediate Checklist</a></li>
    <li><a class="fnl-section" href="#cl-advanced" onclick="closeNav()">✅ 15. Advanced Checklist</a></li>
    <li><a class="fnl-section" href="#sec-qr" onclick="closeNav()">🔗 16. Quick Reference</a></li>
    <li><a class="fnl-section" style="color:#B0322B;font-weight:600;" href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'brand_hub_logout', '1', home_url( '/' ) ), 'brand_hub_logout' ) ); ?>">🚪 Sign Out</a></li>

  </ul>
</div>

<!-- QUIZ OVERLAY -->
<div class="quiz-overlay" id="quiz-overlay"><div class="quiz-box">
  <div class="quiz-hd" id="quiz-hd"><div class="quiz-hd-top"><div><h3 id="quiz-title"></h3><div class="quiz-hd-sub" id="quiz-hd-sub"></div></div><button class="quiz-close-btn" onclick="closeQuiz()">✕</button></div><div class="quiz-progress-wrap"><div class="quiz-progress-bar" id="quiz-prog-bar" style="width:0%"></div></div><div class="quiz-progress-lbl" id="quiz-prog-lbl"></div></div>
  <div class="quiz-body" id="quiz-body"><div class="quiz-q-num" id="quiz-q-num"></div><div class="quiz-q-text" id="quiz-q-text"></div><div class="quiz-options" id="quiz-options"></div><div class="quiz-feedback" id="quiz-feedback"></div><div class="quiz-nav"><div id="quiz-score-live" style="font-size:12px;color:#777"></div><button class="quiz-nav-btn" id="quiz-next-btn" disabled onclick="quizNext()">Next →</button></div></div>
  <div class="quiz-result" id="quiz-result" style="display:none">
    <div id="quiz-pass-screen" style="display:none"><div class="quiz-result-congrats" id="qr-congrats-hd"><h3>🎉 Congratulations!</h3><div class="quiz-result-congrats-sub" id="qr-pass-sub"></div></div><div class="quiz-result-body"><div class="quiz-cert-card"><div style="text-align:center;margin-bottom:12px"><div class="inventel-logo logo-sm"><span class="logo-inven">Inven</span><span class="logo-tel">Tel</span></div></div><div class="quiz-cert-card-header">InvenTel Innovations — Training Resource Library</div><div class="quiz-cert-name-row"><div class="quiz-cert-name-label">Name</div><input type="text" class="quiz-cert-name-input" id="cert-name-field" placeholder="Type your full name here"></div><div class="quiz-cert-stats"><div class="quiz-cert-stat"><div class="quiz-cert-stat-val pass-green" id="qr-score-val"></div><div class="quiz-cert-stat-lbl">Score</div></div><div class="quiz-cert-stat"><div class="quiz-cert-stat-val" id="qr-correct-val"></div><div class="quiz-cert-stat-lbl">Correct</div></div><div class="quiz-cert-stat"><div class="quiz-cert-stat-val" id="qr-date-val"></div><div class="quiz-cert-stat-lbl">Date</div></div><div class="quiz-cert-stat"><div class="quiz-cert-stat-val pass-green">PASSED ✓</div><div class="quiz-cert-stat-lbl">Status</div></div></div><hr class="quiz-cert-divider"><div class="quiz-cert-track">Training Track<strong id="qr-track-val"></strong></div></div><div class="quiz-result-btns"><button class="qrb qrb-retry" onclick="retakeQuiz()">↩ Retake Quiz</button><button class="qrb qrb-print" onclick="printCard()">🖨️ Print / Save as PDF</button></div></div></div>
    <div id="quiz-fail-screen" style="display:none"><div class="quiz-fail-body"><div style="font-size:36px;margin-bottom:8px">📚</div><div style="font-size:16px;font-weight:700">Not quite yet — keep studying!</div><div class="quiz-fail-score" id="qr-fail-score"></div><div style="font-size:12px;color:#777;margin-bottom:4px" id="qr-fail-sub"></div><div class="quiz-fail-msg" id="qr-fail-msg"></div><button class="qrb qrb-retry" onclick="retakeQuiz()">↩ Retake Quiz</button></div></div>
  </div>
</div></div>

<script>
/* SECTION COLLAPSE/EXPAND */
function toggleSection(hd){hd.classList.toggle('collapsed');var body=hd.nextElementSibling;body.classList.toggle('collapsed');}
function goTo(id){var el=document.getElementById(id);if(!el)return;var hd=el.querySelector('.slide-header');if(hd&&hd.classList.contains('collapsed')){hd.classList.remove('collapsed');hd.nextElementSibling.classList.remove('collapsed');}el.scrollIntoView({behavior:'smooth',block:'start'});}

/* FLOATING NAV */
function toggleFloatNav(){document.getElementById('float-nav').classList.toggle('open');}
function closeNav(){document.getElementById('float-nav').classList.remove('open');}

/* CHECKLISTS */
var TOTALS={mandatory:15,intermediate:8,advanced:7};
function tick(el,s){el.classList.toggle('checked');updateBar(s);}
function updateBar(s){var c=document.getElementById('cl-'+s),ck=c.querySelectorAll('.cb.checked:not([data-optional])').length,t=TOTALS[s],p=t>0?Math.round((ck/t)*100):0;document.getElementById('lbl-'+s).textContent=ck+' of '+t+' completed';document.getElementById('bar-'+s).style.width=p+'%';}
function resetList(s){document.getElementById('cl-'+s).querySelectorAll('.cb.checked').forEach(function(cb){cb.classList.remove('checked');});updateBar(s);}

/* QUIZ DATA — 25+ per level, pulls 20 */
var qSection,qIndex,qScore,qAnswered,qQuestions;
var QUIZ={
mandatory:{title:'New Hire Onboarding',sub:'Mandatory · 20 Questions · Pass = 50%',hd:'q-mandatory',track:'New Hire Onboarding — Canva',qs:20,questions:[
{q:'How do you start a brand-new design?',opts:['File → Open','Click "Create a design" and pick a type','Right-click the canvas','Settings → New'],ans:1},
{q:'Where do designs get saved?',opts:['You must save manually','They auto-save to your account / Projects','Only when downloaded','To your desktop'],ans:1},
{q:'Which sidebar tab adds shapes, icons, and illustrations?',opts:['Uploads','Text','Elements','Brand'],ans:2},
{q:'How do you add editable text?',opts:['Double-click the canvas','Text tab → "Add a text box" → type','Elements → Text','Paste only'],ans:1},
{q:'What does the Share button (top-right) let you do?',opts:['Only delete the design','Invite people and download the design','Change your password','Print to PDF only'],ans:1},
{q:'Which formats can you download a design as?',opts:['Only PNG','PNG, JPG, PDF, MP4 and more','Only PDF','Only Canva files'],ans:1},
{q:'How do you resize an element on the canvas?',opts:['Type a number only','Drag its corner handles','Right-click → Resize only','You cannot resize'],ans:1},
{q:'Keyboard shortcut to undo?',opts:['Ctrl+U','Ctrl+Z','Ctrl+B','Ctrl+S'],ans:1},
{q:'Where do you find InvenTel logos, colors, and fonts?',opts:['Elements tab','The Brand / Brand Kit tab','Uploads tab','Settings'],ans:1},
{q:'How do you apply a template to your design?',opts:['Download it first','Open Templates → click a template','Email it to yourself','Copy-paste images'],ans:1},
{q:'How do you upload your own photo?',opts:['Drag onto Elements','Uploads tab → Upload files','Paste into Text','Photos tab only'],ans:1},
{q:'How do you crop a photo into a shape?',opts:['Use Magic Write','Drag the photo onto a Frame','Download then re-upload','Right-click → Mask only'],ans:1},
{q:'How do you leave a comment for a teammate?',opts:['Edit their text','Click the comment icon, click canvas, type, mention with @name','Email them','Add a sticker'],ans:1},
{q:'What does Magic Design do?',opts:['Deletes elements','Generates ready-to-edit templates from your description','Locks the design','Prints the design'],ans:1},
{q:'What does Magic Write do?',opts:['Removes backgrounds','Generates and edits text from a prompt','Resizes designs','Adds music'],ans:1},
{q:'How do you present a slide deck full-screen?',opts:['Download as MP4','Click Present and use arrow keys','File → Slideshow only','Share a link only'],ans:1},
{q:'How do you add another page/slide?',opts:['Ctrl+N','Click "+ Add page" below the canvas','Settings → Pages','Duplicate the file'],ans:1},
{q:'If you see "access denied" and can\'t join the team, you should:',opts:['Make a personal account','Contact the HR Training Coordinator','Try a different browser forever','Ignore it'],ans:1},
{q:'Where does your display name come from on a certificate?',opts:['Random','Your Canva account name (editable in settings)','Your manager sets it','The course picks it'],ans:1},
{q:'Which tab holds files you have uploaded?',opts:['Elements','Uploads','Brand','Text'],ans:1},
{q:'Shortcut to duplicate a selected element?',opts:['Ctrl+C','Ctrl+D','Ctrl+V','Ctrl+P'],ans:1},
{q:'Where is Magic Studio usually accessed in the editor?',opts:['Settings menu','The Apps / Magic Studio area of the sidebar','The download menu','Account page'],ans:1},
{q:'What is the InvenTel official learning hub for Canva?',opts:['YouTube','Canva Design School','Coursera only','LinkedIn Learning'],ans:1},
{q:'Best first course for a new hire?',opts:['Marketing with Canva','Canva Essentials','Scale Creative Campaigns','Implementing Canva for Admins'],ans:1},
{q:'How do you set someone to view-only when sharing?',opts:['Lock the design','Set their access to "Can view"','Delete edit rights manually','Not possible'],ans:1}
]},
intermediate:{title:'Intermediate Path',sub:'Intermediate · 20 Questions · Pass = 50%',hd:'q-intermediate',track:'Intermediate — Canva',qs:20,questions:[
{q:'What appears when you drag elements to help you align them?',opts:['Red dots','Pink smart guides','A ruler popup','Nothing'],ans:1},
{q:'Shortcut to group selected elements?',opts:['Ctrl+G','Ctrl+J','Ctrl+L','Ctrl+E'],ans:0},
{q:'How do you change which element sits on top?',opts:['Resize it','Right-click → Layers (forward/back)','Delete others','Change color'],ans:1},
{q:'Where do you adjust brightness, contrast, and filters?',opts:['Brand tab','Select photo → Edit photo','Uploads tab','Settings'],ans:1},
{q:'What is a Frame used for?',opts:['Adding borders only','Masking a photo into a shape','Locking elements','Grouping text'],ans:1},
{q:'How do you organize team designs?',opts:['Tag each file','Projects → create a Folder and share it','Email them','Download all'],ans:1},
{q:'How do you restore an earlier version of a design?',opts:['Re-create it','File → Version history','Undo 50 times','Not possible'],ans:1},
{q:'How do you add a transition between slides?',opts:['Animate the text','Hover between page thumbnails → Add transition','Download as MP4','Settings → Motion'],ans:1},
{q:'How do you animate a single element?',opts:['Resize it','Select it → Animate → pick an effect','Right-click → Move','Group it'],ans:1},
{q:'Speaker notes are visible to:',opts:['The whole audience','Only the presenter','Everyone editing','No one'],ans:1},
{q:'How do you split a video clip on the timeline?',opts:['Delete and re-add','Position playhead → select clip → Split','Drag it off','Right-click → Cut only'],ans:1},
{q:'What does Magic Media generate?',opts:['Only text','Images and video from a text prompt','Charts only','Fonts'],ans:1},
{q:'Best practice for a Magic Media prompt?',opts:['One vague word','Specific subject, style, lighting, mood','Only emojis','Leave it blank'],ans:1},
{q:'How do you recolor a whole template palette quickly?',opts:['Edit each element','Use Styles to apply a palette','Re-upload it','Magic Eraser'],ans:1},
{q:'Where do speaker tools like a timer appear?',opts:['Download menu','Present → Presenter view','Brand tab','Comments'],ans:1},
{q:'Real-time collaboration means:',opts:['One editor at a time','Multiple people edit at once and see live cursors','Email round-trips','View only'],ans:1},
{q:'How do you add music to a video?',opts:['Text tab','Audio tab → add a track','Elements → Sound','Uploads only'],ans:1},
{q:'What does the Position tab help with?',opts:['Changing fonts','Aligning and distributing elements','Adding pages','Sharing'],ans:1},
{q:'How do you reorder pages in a multi-page design?',opts:['Delete and re-add','Open Grid view and drag thumbnails','Rename pages','Not possible'],ans:1},
{q:'A shared Folder lets the team:',opts:['See your password','Access everything inside it','Edit your account','Nothing'],ans:1},
{q:'How do you insert a chart, image, or table inside a Doc?',opts:['Copy-paste only','Type "/" to open the insert menu','Download first','Use Brand tab'],ans:1},
{q:'What does the Animate option apply to?',opts:['Only whole pages','A selected element or page','Only photos','Only text'],ans:1},
{q:'How do you mask a photo to a circle?',opts:['Crop manually','Drop it into a circular Frame','Recolor it','Use Layers'],ans:1},
{q:'Filters in the Elements search help you:',opts:['Delete results','Narrow by color, orientation, animated/static','Download all','Lock results'],ans:1},
{q:'Transparency of an element is changed via:',opts:['Brand tab','The toolbar transparency control','Settings','Comments'],ans:1}
]},
advanced:{title:'Advanced Mastery',sub:'Advanced · 20 Questions · Pass = 50%',hd:'q-advanced',track:'Advanced Mastery — Canva',qs:20,questions:[
{q:'What does Magic Resize / Magic Switch do?',opts:['Deletes pages','Resizes a design into other formats in a click','Locks the design','Adds music'],ans:1},
{q:'After a Magic Resize you should always:',opts:['Download immediately','Review and reposition text/elements','Delete the original','Share publicly'],ans:1},
{q:'What does BG Remover do?',opts:['Blurs the photo','Removes a photo\'s background to isolate the subject','Adds a border','Crops to square'],ans:1},
{q:'What does Magic Expand do?',opts:['Zooms the editor','Extends an image beyond its original borders','Splits a clip','Groups elements'],ans:1},
{q:'What does Magic Grab do?',opts:['Downloads a photo','Pulls a subject out of a photo to edit separately','Locks an element','Adds a frame'],ans:1},
{q:'How do you make an approved layout reusable for the team?',opts:['Email screenshots','Publish it as a Brand Template / share a Template link','Keep it private','Lock the account'],ans:1},
{q:'Why lock an element?',opts:['To delete it','So it can\'t be moved or edited accidentally','To recolor it','To animate it'],ans:1},
{q:'What does requesting an Approval do?',opts:['Auto-publishes','Sends the design to a reviewer to sign off','Deletes the design','Adds a watermark'],ans:1},
{q:'How do you record a talking presentation?',opts:['Download as PDF','Present and record (camera + voice per slide)','Add audio track only','Share a view link'],ans:1},
{q:'How do you build a self-running display loop?',opts:['Email it','Present → Autoplay','Lock all pages','Magic Eraser'],ans:1},
{q:'How do you add a clickable link to an element?',opts:['Ctrl+L','Ctrl+K','Ctrl+M','Right-click → URL only'],ans:1},
{q:'For professional printing you export as:',opts:['JPG only','PDF Print (with crop marks/bleed)','PNG only','GIF'],ans:1},
{q:'How do you copy one element\'s style to another?',opts:['Re-create it','Copy style (paint roller) → click target','Group them','Download both'],ans:1},
{q:'Magic Switch can also:',opts:['Only resize','Translate a design into other languages','Delete pages','Lock the brand'],ans:1},
{q:'How do you build a chart from data in Canva?',opts:['Upload an image','Elements → Charts → open data table → enter values','Magic Write','Use Frames'],ans:1},
{q:'Best practice with AI output for professional work?',opts:['Accept the first result','Always review, fact-check, and refine','Skip it','Only for fonts'],ans:1},
{q:'Should you put confidential InvenTel data into AI prompts?',opts:['Always','Not unless approved — ask if unsure','Only on Fridays','Yes, encrypted'],ans:1},
{q:'Apply a background to every slide at once using:',opts:['Magic Eraser','Apply to all pages','Lock','Version history'],ans:1},
{q:'Magic Edit lets you:',opts:['Resize the canvas','Brush an area and describe a replacement','Add transitions','Group elements'],ans:1},
{q:'A view link to a presentation lets recipients:',opts:['Edit it','View it at their own pace without editing','Delete it','Change the brand'],ans:1},
{q:'Saving common InvenTel layouts as templates helps because:',opts:['It hides them','The team never starts from scratch and stays on-brand','It deletes old files','It locks the account'],ans:1},
{q:'Magic Eraser is used to:',opts:['Erase the whole photo','Brush over and remove an unwanted object','Add objects','Change colors'],ans:1}
]}
};

/* QUIZ ENGINE */
function startQuiz(s){qSection=s;qIndex=0;qScore=0;qAnswered=false;var d=QUIZ[s];qQuestions=shuffle(d.questions.slice()).slice(0,d.qs);document.getElementById('quiz-hd').className='quiz-hd '+d.hd;document.getElementById('quiz-title').textContent='📝 '+d.title+' — Knowledge Check';document.getElementById('quiz-hd-sub').textContent=d.sub;document.getElementById('quiz-body').style.display='block';document.getElementById('quiz-result').style.display='none';document.getElementById('quiz-overlay').style.display='block';renderQ();}
function shuffle(a){for(var i=a.length-1;i>0;i--){var j=Math.floor(Math.random()*(i+1));var t=a[i];a[i]=a[j];a[j]=t;}return a;}
function renderQ(){var q=qQuestions[qIndex],tot=qQuestions.length,pct=Math.round((qIndex/tot)*100);document.getElementById('quiz-prog-bar').style.width=pct+'%';document.getElementById('quiz-prog-lbl').textContent='Question '+(qIndex+1)+' of '+tot;document.getElementById('quiz-q-num').textContent='Question '+(qIndex+1)+' of '+tot;document.getElementById('quiz-q-text').textContent=q.q;document.getElementById('quiz-score-live').textContent='Score: '+qScore+'/'+qIndex;document.getElementById('quiz-next-btn').disabled=true;document.getElementById('quiz-next-btn').textContent=qIndex<tot-1?'Next →':'See Results';var fb=document.getElementById('quiz-feedback');fb.style.display='none';fb.className='quiz-feedback';qAnswered=false;var c=document.getElementById('quiz-options');c.innerHTML='';q.opts.forEach(function(opt,i){var b=document.createElement('button');b.className='quiz-opt';b.textContent=opt;b.onclick=function(){selectA(i,b);};c.appendChild(b);});}
function selectA(ch,btn){if(qAnswered)return;qAnswered=true;var q=qQuestions[qIndex],co=q.ans;var opts=document.getElementById('quiz-options').querySelectorAll('.quiz-opt');var fb=document.getElementById('quiz-feedback');opts.forEach(function(o){o.onclick=null;});if(ch===co){qScore++;btn.classList.add('correct');fb.className='quiz-feedback correct';fb.textContent='✓ Correct!';fb.style.display='block';}else{btn.classList.add('wrong');opts[co].classList.add('show-correct');fb.className='quiz-feedback incorrect';fb.textContent='✗ Incorrect — correct: '+q.opts[co];fb.style.display='block';}document.getElementById('quiz-score-live').textContent='Score: '+qScore+'/'+(qIndex+1);document.getElementById('quiz-next-btn').disabled=false;}
function quizNext(){if(qIndex<qQuestions.length-1){qIndex++;renderQ();}else{showResults();}}
function showResults(){var tot=qQuestions.length,pct=Math.round((qScore/tot)*100);document.getElementById('quiz-body').style.display='none';document.getElementById('quiz-result').style.display='block';document.getElementById('quiz-prog-bar').style.width='100%';document.getElementById('quiz-prog-lbl').textContent='Complete';if(pct>=50){document.getElementById('quiz-pass-screen').style.display='block';document.getElementById('quiz-fail-screen').style.display='none';document.getElementById('qr-pass-sub').textContent='You scored '+pct+'% — '+qScore+' of '+tot+' correct';document.getElementById('qr-score-val').textContent=pct+'%';document.getElementById('qr-correct-val').textContent=qScore+'/'+tot;document.getElementById('qr-date-val').textContent=new Date().toLocaleDateString('en-US',{month:'short',day:'numeric',year:'numeric'});document.getElementById('qr-track-val').textContent=QUIZ[qSection].track;var ch=document.getElementById('qr-congrats-hd');if(qSection==='mandatory'){ch.style.background='linear-gradient(135deg,#166534,#15803d)';document.querySelector('.quiz-result-congrats-sub').style.color='#bbf7d0';}else if(qSection==='intermediate'){ch.style.background='linear-gradient(135deg,#854d0e,#a16207)';document.querySelector('.quiz-result-congrats-sub').style.color='#fef9c3';}else{ch.style.background='linear-gradient(135deg,#991b1b,#7f1d1d)';document.querySelector('.quiz-result-congrats-sub').style.color='#fde2e2';}}else{document.getElementById('quiz-pass-screen').style.display='none';document.getElementById('quiz-fail-screen').style.display='block';document.getElementById('qr-fail-score').textContent=pct+'%';document.getElementById('qr-fail-sub').textContent=qScore+' of '+tot+' correct';var ms=['Review materials and try again.','Focus on areas where you felt unsure.','No limit on retakes!'];document.getElementById('qr-fail-msg').textContent=ms[Math.floor(Math.random()*ms.length)];}}
function retakeQuiz(){startQuiz(qSection);}
function closeQuiz(){document.getElementById('quiz-overlay').style.display='none';}
function printCard(){var n=document.getElementById('cert-name-field').value.trim();if(!n){alert('Please enter your name first.');document.getElementById('cert-name-field').focus();return;}window.print();}
</script>
<?php bh_back_to_index_button('training-hub-index', 'All Trainings'); ?>
</body>
</html>
