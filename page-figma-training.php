<?php /* Template Name: Figma Training */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>InvenTel — Figma Training (Self-Contained) v3.1</title>
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
.card{border-radius:6px;border-left:4px solid #16a34a;background:#fafaf8;padding:14px 16px;margin-bottom:12px;border:1px solid #e5e5e0;border-left:4px solid #16a34a}
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
.checklist-footer{padding:16px 24px;border-top:1px solid #e5e5e0;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px}
.progress-label{font-size:12px;font-weight:600;margin-bottom:4px}
.progress-bar-wrap{background:#e5e5e0;border-radius:10px;height:8px;width:260px}
.progress-bar{height:8px;border-radius:10px;width:0%;transition:width .3s}
.btn-row{display:flex;gap:8px}
.reset-btn{border:none;border-radius:6px;padding:8px 18px;font-size:12px;font-weight:700;cursor:pointer;color:#fff}
.quiz-start-btn{border:none;border-radius:6px;padding:8px 18px;font-size:12px;font-weight:700;cursor:pointer;background:#1a56db;color:#fff}
.quiz-start-btn:hover{background:#1340b0}
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
@media print{body>*{display:none!important}#quiz-overlay{display:block!important;position:static!important;background:none!important;padding:0!important;overflow:visible!important}.quiz-box{box-shadow:none!important;max-width:100%!important}.quiz-hd,.quiz-body,.quiz-fail-body,.quiz-result-btns{display:none!important}.quiz-result{display:block!important}.quiz-result-congrats{-webkit-print-color-adjust:exact;print-color-adjust:exact}.quiz-cert-card{border:2px solid #8B0000!important;-webkit-print-color-adjust:exact;print-color-adjust:exact}@page{size:landscape;margin:.3in}.float-nav-btn,.float-nav-panel{display:none!important}.search-bar-wrap{display:none!important}}

/* === SEARCH BAR v3.1 === */
.search-bar-wrap{position:sticky;top:0;z-index:200;background:#6D0000;padding:10px 20px;display:flex;align-items:center;gap:10px;box-shadow:0 2px 8px rgba(0,0,0,.25)}
.search-icon{font-size:16px;opacity:.85;flex-shrink:0}
.search-input{flex:1;padding:8px 14px;border-radius:6px;border:none;font-size:13px;font-family:inherit;outline:none;background:#fff;color:#1a1a1a;box-shadow:inset 0 1px 3px rgba(0,0,0,.1);max-width:600px}
.search-input::placeholder{color:#999}
.search-input:focus{box-shadow:inset 0 1px 3px rgba(0,0,0,.1),0 0 0 2px #fcd9b6}
.search-clear-btn{background:transparent;border:none;color:#fcd9b6;cursor:pointer;font-size:18px;padding:0 4px;line-height:1;opacity:.8;transition:opacity .15s;flex-shrink:0}
.search-clear-btn:hover{opacity:1}
.search-count{color:#fcd9b6;font-size:12px;min-width:90px;text-align:right;font-weight:600;flex-shrink:0}
mark.search-match{background:#fef08a;color:#1a1a1a;border-radius:2px;padding:0 2px}
</style>
</head>
<body>

<!-- HEADER -->
<div class="header-band">
  <div style="text-align:center;padding-bottom:14px"><div class="inventel-logo"><span class="logo-inven">Inven</span><span class="logo-tel">Tel</span></div></div>
  <div class="header-top">
    <div>
      <div class="header-company">InvenTel Innovations — Training Resource Library</div>
      <div class="header-h1">🎨 Figma — Self-Contained Training Guide</div>
      <div class="header-subtitle">Complete step-by-step training for the Figma editor, frames & auto layout, components & variables, prototyping, Dev Mode handoff, FigJam & Slides, and Figma AI — click any section header to collapse/expand</div>
    </div>
    <div class="header-meta">All Levels (Beginner → Advanced)<br>Platform: Figma<br>Format: Self-Contained / Standalone<br><span style="color:#fcd9b6;font-weight:700">v3.1 — Search Bar Edition</span></div>
  </div>
</div>
<div class="stat-row">
  <div class="stat-item"><span class="stat-val">7</span><span class="stat-lbl">Core Areas</span></div>
  <div class="stat-item"><span class="stat-val">16+</span><span class="stat-lbl">Training Sections</span></div>
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Skill Levels</span></div>
  <div class="stat-item"><span class="stat-val">30 Days</span><span class="stat-lbl">Mandatory Window</span></div>
  <div class="stat-item"><span class="stat-val">Figma AI</span><span class="stat-lbl">Built-in AI</span></div>
  <div class="stat-item"><span class="stat-val">Standalone</span><span class="stat-lbl">No External Links Required</span></div>
</div>
<div class="mandatory-bar">⚠️ All Beginner-level content in this deck is MANDATORY and must be completed within your first 30 days. Completion is tracked and reported to your manager.</div>

<!-- SEARCH BAR v3.1 -->
<div class="search-bar-wrap" id="search-bar-wrap">
  <span class="search-icon">🔍</span>
  <input class="search-input" id="deck-search" type="text" placeholder="Search this training guide…" oninput="deckSearch(this.value)" autocomplete="off"/>
  <button class="search-clear-btn" onclick="clearDeckSearch()" title="Clear search">✕</button>
  <span class="search-count" id="search-count"></span>
</div>

<div id="main-content">

<!-- TABLE OF CONTENTS -->
<div class="slide" id="sec-toc">
  <div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Navigation</span></div><h2>📋 Table of Contents</h2><p class="subtitle">Click any item to jump to that section. Click any section header to collapse/expand it.</p></div>
  <div class="slide-body">
    <div class="toc-grid">
      <div class="toc-item" onclick="goTo('sec-overview')">1. Platform Overview<span>What Figma is + how teams use it</span></div>
      <div class="toc-item" onclick="goTo('sec-hub')">2. Official Learning Hub<span>Figma Learn + Help Center</span></div>
      <div class="toc-item" onclick="goTo('sec-begres')">3. Beginner Training Resources<span>Mandatory — external resources</span></div>
      <div class="toc-item" onclick="goTo('sec-start')">4. Getting Started — First Day Setup<span>Sign in, team access, the editor</span></div>
      <div class="toc-item" onclick="goTo('sec-frames')">5. Frames, Shapes & Auto Layout<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-components')">6. Components, Styles & Variables<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-prototype')">7. Prototyping & Interactions<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-collab')">8. Collaboration, Dev Mode & FigJam<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-ai')">9. Figma AI & Figma Make<span>AI features across the canvas</span></div>
      <div class="toc-item" onclick="goTo('sec-intres')">10. Intermediate Resources<span>Self-paced, optional links</span></div>
      <div class="toc-item" onclick="goTo('sec-advres')">11. Advanced Resources<span>Optional deep mastery links</span></div>
      <div class="toc-item" onclick="goTo('sec-certs')">12. Certifications<span>Third-party certificates & badges</span></div>
      <div class="toc-item" onclick="goTo('cl-mandatory')">13. New Hire Checklist<span>Interactive — mandatory</span></div>
      <div class="toc-item" onclick="goTo('cl-intermediate')">14. Intermediate Checklist<span>Interactive — self-paced</span></div>
      <div class="toc-item" onclick="goTo('cl-advanced')">15. Advanced Checklist<span>Interactive — mastery</span></div>
      <div class="toc-item" onclick="goTo('sec-qr')">16. Quick Reference + Final Note<span>Platform URLs + help centers</span></div>
    </div>
  </div>
</div>

<!-- 1. PLATFORM OVERVIEW -->
<div class="slide" id="sec-overview"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Section 1</span></div><h2>🎨 What is Figma?</h2><p class="subtitle">The collaborative design platform InvenTel uses for UI/UX, brand assets, and prototypes.</p></div>
  <div class="slide-body">
    <p style="font-size:13px;color:#5c5c5c;margin-bottom:14px">Figma is a cloud-based design and whiteboarding platform. Everything lives in the browser (or the desktop app), so multiple people can work in the same file at the same time — like a document where you can watch teammates' cursors move in real time. At InvenTel, Figma is used to design interfaces, build reusable component libraries, prototype interactions, collaborate in FigJam whiteboards, and hand designs off to engineering through Dev Mode.</p>
    <div class="callout"><strong>⚠️ Team & File Access:</strong> InvenTel organizes work into a <strong>Figma organization with multiple teams, projects, and shared libraries</strong>. Your access depends on your role — you may be added to some teams and not others. <strong>On your first day, request from your direct report</strong> which teams, projects, and libraries you should be able to see, and whether you have <strong>view, edit, or admin</strong> rights. Verify everything matches. If something is missing, follow up immediately with your direct report or the HR Training Coordinator.</div>
    <div class="apps-grid"><span class="app-chip">🖼️ Figma Design</span><span class="app-chip">🧩 Components</span><span class="app-chip">🔢 Variables</span><span class="app-chip">▶️ Prototyping</span><span class="app-chip">👩‍💻 Dev Mode</span><span class="app-chip">🟨 FigJam</span><span class="app-chip">✨ Figma AI</span></div>
    <div class="platform-url"><strong>Figma (web app):</strong> <a href="https://www.figma.com" target="_blank">figma.com</a> (sign in to open your files)<br><strong>Figma Help Center:</strong> <a href="https://help.figma.com" target="_blank">help.figma.com</a><br><strong>Figma Learn:</strong> <a href="https://help.figma.com/hc/en-us/categories/360002051613-Learn" target="_blank">Figma Learn — Get started</a><br><strong>Figma Community:</strong> <a href="https://www.figma.com/community" target="_blank">figma.com/community</a></div>
    <div class="callout"><strong>💡 How it all connects:</strong> A <strong>file</strong> sits inside a <strong>project</strong>, which sits inside a <strong>team</strong>. Inside a file you work on the <strong>canvas</strong>, arranging <strong>frames</strong> (screens/artboards). The <strong>left panel</strong> shows your layers and pages; the <strong>right panel</strong> shows design properties (the <strong>Design</strong>, <strong>Prototype</strong>, and <strong>Dev Mode</strong> tabs); the <strong>toolbar</strong> sits at the top center. Reusable elements become <strong>components</strong>, published to a <strong>library</strong> the whole team can pull from.</div>
  </div>
</div>

<!-- 2. OFFICIAL LEARNING HUB -->
<div class="slide" id="sec-hub"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official Figma</span></div><h2>🎓 Official Learning Hub — Figma Learn & Help Center</h2><p class="subtitle">Beginner-level resources are MANDATORY within 30 days.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Figma Help Center <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official</span></div><div class="card-desc">Figma's primary reference — step-by-step articles for every feature, from the editor basics and auto layout to components, variables, prototyping, and Dev Mode.</div><div class="card-meta"><strong>Format:</strong> Guides + Documentation &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">All Features</span><span class="tag t2">Reference</span></div><a href="https://help.figma.com" target="_blank">→ Visit the Figma Help Center</a></div>
    <div class="card"><div class="card-title">Figma Learn — Get Started <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-academy">Figma Learn</span></div><div class="card-desc">Figma's official learning hub with beginner-friendly tours, starter projects, and self-paced courses covering both Figma Design and FigJam.</div><div class="card-meta"><strong>Format:</strong> Courses + interactive tours &nbsp;|&nbsp; <strong>Level:</strong> Beginner–Advanced</div><div class="tag-row"><span class="tag t2">Courses</span><span class="tag t1">Tours</span><span class="tag t4">Official</span></div><a href="https://help.figma.com/hc/en-us/categories/360002051613-Learn" target="_blank">→ Start learning at Figma Learn</a></div>
    <div class="card"><div class="card-title">Figma Design for Beginners — Official Course <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Figma's official hands-on course where you design a portfolio website from scratch — covering layers, shapes, text, frames, auto layout, components, and basic prototyping. Works on the free Starter plan.</div><div class="card-meta"><strong>Format:</strong> Video course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~2–3 hrs &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">Hands-on</span></div><a href="https://help.figma.com/hc/en-us/sections/30880632542743-Figma-Design-for-beginners" target="_blank">→ Open "Figma Design for beginners"</a></div>
  </div>
</div>

<!-- 3. BEGINNER TRAINING RESOURCES -->
<div class="slide" id="sec-begres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory — Complete Within 30 Days</span></div><h2>🟢 Beginner Training — Mandatory Resources</h2><p class="subtitle">Every team member must complete these before the 30-day mark.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Figma Learn — "Find your way around" Tours <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official guided tours that walk you through navigating Figma and FigJam files — the canvas, panels, toolbar, and pages.</div><div class="card-meta"><strong>Format:</strong> Interactive tour &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">Navigation</span></div><a href="https://help.figma.com/hc/en-us/categories/360002051613-Learn" target="_blank">→ Start the Figma Learn tours</a></div>
    <div class="card"><div class="card-title">Figma Design for Beginners (official course) <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Build a real portfolio site from scratch while learning frames, auto layout, components, and prototyping. Figma's recommended starting point.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~2–3 hrs &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Course</span><span class="tag t2">Foundations</span></div><a href="https://help.figma.com/hc/en-us/sections/30880632542743-Figma-Design-for-beginners" target="_blank">→ Enroll in Figma Design for beginners</a></div>
    <div class="card"><div class="card-title">YouTube: Figma Beginner Tutorial (2026) <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">A current full-length walkthrough of the Figma interface and core tools for absolute beginners.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45–60 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=figma+tutorial+for+beginners+2026" target="_blank">→ Search YouTube: "Figma tutorial for beginners 2026"</a></div>
    <div class="card"><div class="card-title">Figma Help Center — Explore the editor <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official documentation on the editor layout — toolbar, panels, pages, and the zoom/navigation controls.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Editor</span><span class="tag t4">Reference</span></div><a href="https://help.figma.com" target="_blank">→ Explore the editor on help.figma.com</a></div>
  </div>
</div>

<!-- 4. GETTING STARTED -->
<div class="slide" id="sec-start"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">⭐ Self-Contained Tutorial</span></div><h2>🟢 Getting Started — First Day Setup</h2><p class="subtitle">Sign in, confirm your team access, and learn the editor layout. Follow these steps in order.</p></div>
  <div class="slide-body">
    <div class="steps-box"><h4>🔐 Sign In & Confirm Access</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Go to <a href="https://www.figma.com" target="_blank">figma.com</a> and click <strong>Log in</strong>. Use your <strong>InvenTel work email</strong> — choose SSO / "Continue with Google" if prompted, so you land in the InvenTel organization.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Install the <strong>desktop app</strong> (optional but recommended) for better font handling and performance: <span class="step-nav">figma.com → Downloads</span>. There's also a mobile app for previewing prototypes.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Request your access list</strong> from your direct report: which <strong>teams</strong>, <strong>projects</strong>, and <strong>libraries</strong> you should see, and your role (<strong>viewer</strong>, <strong>editor</strong>, or <strong>admin</strong>).</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">In the left sidebar of the file browser, confirm each assigned <strong>team</strong> appears. Open a project and confirm you can open files. If you only see "View" but should be able to edit, flag it.</div></div>
      <div class="step"><div class="step-num green">5</div><div class="step-text">Set your profile: click your avatar → <span class="step-nav">Settings</span> → add a profile photo and confirm your name is correct (it shows on your live cursor and comments).</div></div>
      <div class="step-tip"><strong>💡</strong> If a team or library is missing, contact your direct report or the HR Training Coordinator right away — don't assume access will appear later.</div>
    </div>
    <div class="steps-box"><h4>🧭 Learn the Editor Layout</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Open any file. The big workspace in the middle is the <strong>canvas</strong>. Scroll to pan; pinch or <span class="kbd">Ctrl</span>/<span class="kbd">⌘</span> + scroll to zoom. Press <span class="kbd">Shift</span>+<span class="kbd">1</span> to zoom to fit.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Left panel:</strong> the <strong>Layers</strong> tab (everything on the canvas, nested) and the <strong>Pages</strong> list (separate canvases within one file). The <strong>Assets</strong> tab holds components and libraries.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Right panel:</strong> switches between <strong>Design</strong> (size, position, fill, text), <strong>Prototype</strong> (interactions), and <strong>Dev Mode</strong> (handoff). It updates based on what you select.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text"><strong>Toolbar (top center):</strong> Move <span class="kbd">V</span>, Frame <span class="kbd">F</span>, Rectangle <span class="kbd">R</span>, Pen <span class="kbd">P</span>, Text <span class="kbd">T</span>, Comment <span class="kbd">C</span>, and the Actions/AI search.</div></div>
      <div class="step"><div class="step-num green">5</div><div class="step-text">Press <span class="kbd">Ctrl</span>/<span class="kbd">⌘</span>+<span class="kbd">/</span> to open the <strong>quick actions</strong> search — type any command or feature name to run it without hunting through menus.</div></div>
      <div class="step-tip"><strong>💡</strong> Don't memorize everything. Learn Move (V), Frame (F), Text (T), and quick actions (⌘/) first — those four cover most of day one.</div>
    </div>
  </div>
</div>

<!-- 5. FRAMES, SHAPES & AUTO LAYOUT -->
<div class="slide" id="sec-frames"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🖼️ Core Feature Deep Dive — Frames, Shapes & Auto Layout</h2><p class="subtitle">The building blocks of every Figma design.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>The Basics</h3>
        <div class="sub-card"><strong>Creating a Frame (screen/artboard)</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Press <span class="kbd">F</span> (or click the Frame tool). The right panel shows preset sizes (iPhone, Desktop, etc.).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click a preset, or drag on the canvas to draw a custom frame.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Double-click the frame name above it to rename (e.g., "Home — Desktop").</div></div>
        </div>
        <div class="sub-card"><strong>Shapes & Text</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Rectangle <span class="kbd">R</span>, Ellipse <span class="kbd">O</span>, Line <span class="kbd">L</span>. Drag to draw; hold <span class="kbd">Shift</span> for a perfect square/circle.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Text <span class="kbd">T</span> → click and type. Set font, size, and weight in the right panel.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Set <strong>Fill</strong>, <strong>Stroke</strong>, and <strong>corner radius</strong> in the Design tab on the right.</div></div>
        </div>
        <div class="sub-card"><strong>Move, Select & Align</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Move tool <span class="kbd">V</span> to select and drag. Hold <span class="kbd">Shift</span> to select multiple.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Use the alignment buttons (top of right panel) to align/distribute selected layers.</div></div>
          <div class="step-tip"><strong>💡</strong> Undo is <span class="kbd">Ctrl</span>/<span class="kbd">⌘</span>+<span class="kbd">Z</span>. You can't break anything — experiment freely.</div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Auto Layout</h3>
        <div class="sub-card"><strong>Adding Auto Layout</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Select one or more layers → press <span class="kbd">Shift</span>+<span class="kbd">A</span>. Figma wraps them in an auto layout frame.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">In the right panel set <strong>direction</strong> (horizontal/vertical), <strong>gap</strong> between items, and <strong>padding</strong>.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Items now space themselves automatically — add or remove a layer and the frame resizes for you.</div></div>
        </div>
        <div class="sub-card"><strong>Resizing Behavior</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Per layer, set <strong>Hug</strong> (shrink to content), <strong>Fill</strong> (stretch to container), or <strong>Fixed</strong> width/height.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Combine with alignment controls to keep buttons and lists responsive.</div></div>
        </div>
        <div class="sub-card"><strong>Constraints</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">For non-auto-layout frames, set <strong>Constraints</strong> (e.g., pin right + top) so elements reposition when the frame resizes.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Layout Power Tools</h3>
        <div class="sub-card"><strong>Nested Auto Layout</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Place auto layout frames inside other auto layout frames to build full responsive screens (cards inside a row inside a section).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Use <strong>absolute position</strong> on a child to float it (e.g., a badge) without breaking the layout flow.</div></div>
        </div>
        <div class="sub-card"><strong>Grids & Layout Guides</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Select a frame → add a <strong>Layout grid</strong> (columns/rows) in the right panel for consistent alignment.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Save grid settings as a <strong>grid style</strong> so the whole team uses the same column system.</div></div>
        </div>
        <div class="sub-card"><strong>Vector & Boolean Editing</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Pen tool <span class="kbd">P</span> to draw custom vectors; double-click a shape to enter vector edit mode.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Select shapes → <strong>Union / Subtract / Intersect / Exclude</strong> to create icons from simple shapes.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Keep layers named and grouped. Messy, unnamed layers are the #1 thing engineers and teammates complain about in handoff.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 6. COMPONENTS, STYLES & VARIABLES -->
<div class="slide" id="sec-components"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🧩 Core Feature Deep Dive — Components, Styles & Variables</h2><p class="subtitle">Reusable building blocks that keep designs consistent.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Components & Styles</h3>
        <div class="sub-card"><strong>Creating a Component</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Select a layer or group (e.g., a button) → right-click → <strong>Create component</strong> (or <span class="kbd">Ctrl</span>/<span class="kbd">⌘</span>+<span class="kbd">Alt</span>+<span class="kbd">K</span>).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">The original becomes the <strong>main component</strong> (purple diamond icon). Copies you place are <strong>instances</strong>.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Edit the main component once → every instance updates automatically.</div></div>
        </div>
        <div class="sub-card"><strong>Using Instances</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Drag components from the <strong>Assets</strong> tab onto the canvas.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Override text, color, or images on an instance without affecting the main component.</div></div>
        </div>
        <div class="sub-card"><strong>Color & Text Styles</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Select a fill → click the <strong>style icon</strong> (four dots) → <strong>+</strong> to save it as a reusable color style.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Do the same for text to create text styles (heading, body, caption).</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Variants & Properties</h3>
        <div class="sub-card"><strong>Component Variants</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Select related components (Button/Default, Button/Hover) → <strong>Combine as variants</strong>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Name properties like <code>State=Default</code>, <code>State=Hover</code>. Switch states from a dropdown on the instance.</div></div>
        </div>
        <div class="sub-card"><strong>Component Properties</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Add <strong>boolean</strong> (show/hide icon), <strong>text</strong>, and <strong>instance swap</strong> properties so one component covers many cases.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">All controls then appear neatly in the right panel when an instance is selected.</div></div>
        </div>
        <div class="sub-card"><strong>Libraries</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Assets → Libraries</span> → <strong>Publish</strong> components and styles so other team files can use them.</div></div>
          <div class="step-tip"><strong>💡</strong> Always check with your direct report before publishing to a shared library — changes ripple across everyone's files.</div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Variables & Tokens</h3>
        <div class="sub-card"><strong>Figma Variables</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Open the <strong>Variables</strong> panel (right panel, with nothing selected → the four-dots / variables icon).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Create <strong>color</strong>, <strong>number</strong>, <strong>string</strong>, and <strong>boolean</strong> variables — your single source of truth for design tokens.</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text">Apply variables to fills, spacing, and radius instead of hard-coded values.</div></div>
        </div>
        <div class="sub-card"><strong>Modes (Light/Dark, Brands)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Add <strong>modes</strong> to a variable collection (e.g., Light / Dark).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Switch a frame's mode to instantly re-theme the whole design — no duplicate screens.</div></div>
        </div>
        <div class="sub-card"><strong>Code Connect (handoff)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>Code Connect</strong> links a Figma component to its real production code (React, SwiftUI, etc.).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">In Dev Mode, engineers then see your actual component code, not generic CSS.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Variables and Code Connect are usually owned by the design-systems team. Coordinate before changing shared tokens.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 7. PROTOTYPING -->
<div class="slide" id="sec-prototype"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>▶️ Core Feature Deep Dive — Prototyping & Interactions</h2><p class="subtitle">Turn static frames into clickable, testable flows.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>First Prototype</h3>
        <div class="sub-card"><strong>Connecting Screens</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Click the <strong>Prototype</strong> tab in the right panel.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Select a button → drag the blue <strong>connection node</strong> to the destination frame.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Set the trigger (<strong>On click</strong>) and action (<strong>Navigate to</strong>).</div></div>
        </div>
        <div class="sub-card"><strong>Previewing</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Click <strong>Present</strong> (the play ▶ button, top right) to test your flow.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Share the present link so teammates can click through it.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Animation & Overlays</h3>
        <div class="sub-card"><strong>Smart Animate</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Use the same layer names across two frames → set the transition to <strong>Smart Animate</strong>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Figma tweens position, size, and opacity automatically for smooth motion.</div></div>
        </div>
        <div class="sub-card"><strong>Overlays</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Set an action to <strong>Open overlay</strong> for modals, menus, and tooltips.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Choose position (centered, manual) and a background that closes on click outside.</div></div>
        </div>
        <div class="sub-card"><strong>Triggers</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Beyond On click: <strong>While hovering</strong>, <strong>While pressing</strong>, <strong>After delay</strong>, and <strong>Key/gamepad</strong>.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Interactive Components</h3>
        <div class="sub-card"><strong>Component-Level Interactions</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Inside a variant set, wire <strong>Default → Hover</strong> with While hovering, so the interaction lives in the component itself.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Every instance you place is now interactive automatically.</div></div>
        </div>
        <div class="sub-card"><strong>Conditional Logic & Variables</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Use <strong>Set variable</strong> actions plus <strong>conditionals</strong> (if/else) to build realistic prototypes — toggles, counters, logged-in states.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Great for usability testing before any code is written.</div></div>
        </div>
        <div class="sub-card"><strong>Sharing for Testing</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Share the prototype link with <strong>view</strong> access; reviewers leave comments directly on it.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Check sharing scope before sending — restrict to "Only people invited" for unreleased work.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 8. COLLABORATION, DEV MODE & FIGJAM -->
<div class="slide" id="sec-collab"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>👥 Core Feature Deep Dive — Collaboration, Dev Mode & FigJam</h2><p class="subtitle">Working with teammates, handing off to engineering, and whiteboarding.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Collaborate</h3>
        <div class="sub-card"><strong>Sharing a File</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Click <strong>Share</strong> (top right) → add people by email or copy the link.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Set access: <strong>can view</strong> or <strong>can edit</strong>. Default to view unless they need to edit.</div></div>
        </div>
        <div class="sub-card"><strong>Comments</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Press <span class="kbd">C</span> → click anywhere to leave a comment. <span class="kbd">@</span>mention teammates to notify them.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Resolve comments when addressed; reopen if needed.</div></div>
        </div>
        <div class="sub-card"><strong>Version History</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><span class="step-nav">File → Show version history</span> to see past states.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Name important versions and restore any earlier point if needed.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Dev Mode</h3>
        <div class="sub-card"><strong>Entering Dev Mode</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Toggle <strong>Dev Mode</strong> (the <span class="kbd">&lt;/&gt;</span> switch, top right) — the right panel switches to inspection.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Select any layer to see measurements, spacing, colors, and generated CSS/iOS/Android snippets.</div></div>
        </div>
        <div class="sub-card"><strong>Ready for Dev & Sections</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Mark frames as <strong>Ready for dev</strong> so engineers know what's final.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Compare versions to see exactly what changed since last handoff.</div></div>
        </div>
        <div class="sub-card"><strong>FigJam Basics</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">FigJam is Figma's whiteboard — create a FigJam file for brainstorms, flows, and retros.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Use sticky notes, connectors, sections, and templates; everyone edits live together.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Scale & Handoff</h3>
        <div class="sub-card"><strong>Branching & Merging</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Create a <strong>branch</strong> of a file to experiment safely, then <strong>merge</strong> back when approved (org/enterprise feature).</div></div>
        </div>
        <div class="sub-card"><strong>Dev Mode + Code Connect / MCP</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">With <strong>Code Connect</strong>, Dev Mode shows real component code from your repo.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">The <strong>Figma MCP server</strong> lets AI coding tools pull design context directly from a selected frame.</div></div>
        </div>
        <div class="sub-card"><strong>Plugins & Widgets</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Install plugins from the <strong>Community</strong> for content, accessibility checks, and automation.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Only install plugins approved for InvenTel use — plugins can access file contents. Check with your direct report or IT if unsure.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 9. FIGMA AI -->
<div class="slide" id="sec-ai"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>✨ Figma AI & Figma Make</h2><p class="subtitle">AI features built into the canvas to speed up everyday work.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Everyday AI</h3>
        <div class="sub-card"><strong>Quick Actions & Smart Search</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open quick actions (<span class="kbd">⌘</span>/<span class="kbd">Ctrl</span>+<span class="kbd">/</span>) and type what you want — AI helps surface the right command.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Use AI <strong>asset/visual search</strong> to find layers or assets by describing them.</div></div>
        </div>
        <div class="sub-card"><strong>Replace / Rewrite Content</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Select text or a list → use <strong>Replace content</strong> to fill realistic placeholder copy instead of "Lorem ipsum".</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Rewrite, shorten, or translate selected text with AI text tools.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Generate & Edit</h3>
        <div class="sub-card"><strong>First Draft (UI generation)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Describe a screen in plain language → <strong>First Draft</strong> generates an editable starting layout.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Treat it as a starting point, then refine with components and your real styles.</div></div>
        </div>
        <div class="sub-card"><strong>AI Image Tools</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><strong>Make an image</strong> from a prompt; <strong>Remove background</strong>, <strong>Erase object</strong>, <strong>Vectorize</strong>, and <strong>Expand image</strong> work inline.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">No more round-tripping to external editors for simple image fixes.</div></div>
        </div>
        <div class="sub-card"><strong>Auto-Rename Layers</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Use AI to rename messy layers in bulk so files are clean for handoff.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Figma Make & Add Interactions</h3>
        <div class="sub-card"><strong>Figma Make</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>Figma Make</strong> turns prompts (or a selected design) into working, interactive prototypes / code-backed experiences.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Iterate by chatting — describe changes and Make updates the result.</div></div>
        </div>
        <div class="sub-card"><strong>Add Interactions (AI prototyping)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Let AI suggest prototype connections across a flow instead of wiring each one by hand.</div></div>
        </div>
        <div class="sub-card"><strong>AI Credits & Review</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">AI features consume <strong>AI credits</strong> — they're only used when you trigger AI. Be mindful on shared plans.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Always review AI output for accuracy, accessibility, and brand voice before sharing or shipping. AI drafts are a head start, not a final deliverable.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 10. INTERMEDIATE RESOURCES -->
<div class="slide" id="sec-intres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-intermediate">Intermediate</span></div><h2>🟡 Intermediate Training — Self-Paced Resources</h2><p class="subtitle">Optional but strongly recommended.</p></div>
  <div class="slide-body">
    <div class="card intermediate"><div class="card-title">Figma Help Center — Auto Layout <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Deep documentation on auto layout direction, spacing, padding, and resizing behavior for responsive designs.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Auto Layout</span><span class="tag t4">Responsive</span></div><a href="https://help.figma.com" target="_blank">→ Auto layout docs at help.figma.com</a></div>
    <div class="card intermediate"><div class="card-title">Figma Learn — Components &amp; Variants <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Official lessons on building reusable components, combining variants, and setting component properties.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1 hr &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Components</span><span class="tag t4">Variants</span></div><a href="https://help.figma.com/hc/en-us/categories/360002051613-Learn" target="_blank">→ Components lessons on Figma Learn</a></div>
    <div class="card intermediate"><div class="card-title">Figma Help Center — Prototyping <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Learn triggers, transitions, Smart Animate, overlays, and how to present and share prototypes.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Prototyping</span><span class="tag t4">Interactions</span></div><a href="https://help.figma.com" target="_blank">→ Prototyping docs at help.figma.com</a></div>
    <div class="card intermediate"><div class="card-title">YouTube: Figma Intermediate Tips (2026) <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">In-depth video tutorials on auto layout, components, variants, and prototyping workflows.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=figma+auto+layout+components+tutorial+2026" target="_blank">→ Search YouTube: "Figma auto layout components 2026"</a></div>
    <div class="card intermediate"><div class="card-title">Figma Community — Files &amp; Templates <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Explore free community files, UI kits, and templates to learn from how others structure real projects.</div><div class="card-meta"><strong>Format:</strong> Community &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Community</span><span class="tag t4">Templates</span></div><a href="https://www.figma.com/community" target="_blank">→ Browse figma.com/community</a></div>
  </div>
</div>

<!-- 11. ADVANCED RESOURCES -->
<div class="slide" id="sec-advres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-advanced">Advanced</span></div><h2>🔴 Advanced Training — Deep Mastery Resources</h2><p class="subtitle">Optional — for design-systems depth or design-to-dev roles.</p></div>
  <div class="slide-body">
    <div class="card advanced"><div class="card-title">Figma Help Center — Variables &amp; Modes <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Reference for creating variable collections, applying tokens, and using modes for theming (light/dark, multi-brand).</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Variables</span><span class="tag t4">Tokens</span></div><a href="https://help.figma.com" target="_blank">→ Variables docs at help.figma.com</a></div>
    <div class="card advanced"><div class="card-title">Figma Dev Mode &amp; Code Connect <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Learn how Dev Mode inspection, "Ready for dev", and Code Connect bridge design and engineering.</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Dev Mode</span><span class="tag t4">Handoff</span></div><a href="https://help.figma.com" target="_blank">→ Dev Mode docs at help.figma.com</a></div>
    <div class="card advanced"><div class="card-title">Figma for Developers — figma.com/developers <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Plugin API, REST API, widgets, and the Figma MCP server for connecting design to AI/code tooling.</div><div class="card-meta"><strong>Format:</strong> Developer docs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">API</span><span class="tag t4">Plugins</span></div><a href="https://www.figma.com/developers" target="_blank">→ figma.com/developers</a></div>
    <div class="card advanced"><div class="card-title">Design Systems with Figma <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Building scalable libraries, token systems, and governance — the System-as-Product mindset.</div><div class="card-meta"><strong>Format:</strong> Guides &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Design Systems</span><span class="tag t4">Libraries</span></div><a href="https://help.figma.com/hc/en-us/categories/360002051613-Learn" target="_blank">→ Design systems lessons on Figma Learn</a></div>
    <div class="card advanced"><div class="card-title">YouTube: Figma Advanced — Variables, Dev Mode &amp; Make (2026) <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Advanced variables/modes, Dev Mode handoff, Code Connect, and Figma Make workflows.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">YouTube</span><span class="tag t4">Advanced</span></div><a href="https://www.youtube.com/results?search_query=figma+variables+dev+mode+figma+make+2026" target="_blank">→ Search YouTube: "Figma variables Dev Mode Make 2026"</a></div>
  </div>
</div>

<!-- 12. CERTIFICATIONS -->
<div class="slide" id="sec-certs"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Certifications</span></div><h2>🏅 Certifications &amp; Verified Skills</h2><p class="subtitle">Optional credentials. Shareable on LinkedIn.</p></div>
  <div class="slide-body">
    <div class="callout" style="background:#fffbeb;border-left-color:#ca8a04"><strong style="color:#854d0e">💡 Optional Personal Investment:</strong> Figma does <strong>not</strong> currently offer its own official certification exam. The credentials listed below are <strong>third-party certificates</strong> and are <strong>not covered by InvenTel</strong> — they require an out-of-pocket fee to enroll or attempt the assessment. Figma's own learning content on Figma Learn can be explored at no cost, but earning an external certificate requires paid enrollment. These are entirely optional, personal career-development tools you can pursue on your own time if you'd like to formally validate your Figma skills.</div>
    <table class="cert-table"><thead><tr><th>Certificate / Program</th><th>Provider</th><th>Skill Level</th><th>Est. Time</th></tr></thead><tbody>
      <tr><td><strong>Figma Design for Beginners (course certificate)</strong></td><td>Figma Learn (free course)</td><td><span class="badge badge-beginner">Beginner</span></td><td>~2–3 hrs</td></tr>
      <tr><td><strong>UI/UX Design with Figma — Certificate</strong></td><td>Coursera / Google (3rd party)</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~10–20 hrs</td></tr>
      <tr><td><strong>Figma for Web/UX Design — Certificate</strong></td><td>Flux Academy / Designlab (3rd party)</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~varies</td></tr>
      <tr><td><strong>Figma Course + Certificate</strong></td><td>American Graphics Institute (3rd party)</td><td><span class="badge badge-advanced">Advanced</span></td><td>~1 day workshop</td></tr>
    </tbody></table>
    <p style="font-size:12px;color:#777;margin-top:10px">Start with the free official learning at <a href="https://help.figma.com/hc/en-us/categories/360002051613-Learn" target="_blank">Figma Learn</a>. Because Figma has no first-party certification, any "Figma certification" comes from an outside provider — review provider reputation before paying.</p>
  </div>
</div>

<!-- 13. NEW HIRE CHECKLIST -->
<div class="checklist-section mandatory" id="cl-mandatory"><div class="checklist-head mandatory"><h2>✅ New Hire Onboarding Checklist</h2><div class="ch-sub">Complete all tasks within your first 30 days</div><span class="ch-badge">Mandatory · 30-Day Deadline</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">💻 App Downloads &amp; Device Setup (OPTIONAL)</div><ul class="checklist-items"><li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Install the Figma desktop app <span class="ci-est">Optional</span></div><div class="ci-desc">figma.com → Downloads → install for Mac/Windows (better fonts &amp; performance).</div></div></li></ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📱 Mobile App (OPTIONAL)</div><ul class="checklist-items"><li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Download the Figma mobile app <span class="ci-est">Optional</span></div><div class="ci-desc">iOS App Store or Google Play → Figma → sign in to preview prototypes on a device.</div></div></li></ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">⚠️ Team &amp; File Access Verification (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Request team/project/library access list from direct report <span class="ci-est">~5 min</span></div><div class="ci-desc">Get the list of which teams and libraries you should access and your role in each.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Sign in to Figma with your InvenTel email / SSO <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Verify access to all assigned teams &amp; projects <span class="ci-est">~15 min</span></div><div class="ci-desc">Check the sidebar; confirm each team and your view/edit/admin role match your access list.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Follow up on any missing access <span class="ci-est">~10 min</span></div><div class="ci-desc">If teams or permissions don't match, contact your direct report or HR Training Coordinator.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Set up profile photo and verify account name <span class="ci-est">~5 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">🧭 Editor Navigation (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Learn the editor layout — canvas, left/right panels, toolbar (Sec 4) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Practice quick actions (⌘/) and zoom/pan controls (Sec 4) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">🖼️🧩▶️👥✨ Feature Training (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Create a frame, add shapes &amp; text (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Create a component and place instances (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Build a 2-screen prototype and Present it (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Leave a comment &amp; open version history (Sec 8) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Try Figma AI: rewrite text + remove an image background (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📚 External Resources (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete the Figma Learn "Find your way around" tours (Sec 2/3) <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete the official "Figma Design for beginners" course (Sec 3) <span class="ci-est">~2–3 hrs</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Watch a YouTube Figma Beginner Tutorial (Sec 3) <span class="ci-est">~45 min</span></div></div></li>
    </ul></div>
  </div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-mandatory" style="color:#166534">0 of 17 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-mandatory" style="background:#16a34a"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#166534" onclick="resetList('mandatory')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('mandatory')">📝 Take Quiz</button></div></div>
</div>

<!-- 14. INTERMEDIATE CHECKLIST -->
<div class="checklist-section intermediate" id="cl-intermediate"><div class="checklist-head intermediate"><h2>✅ Intermediate Learner Checklist</h2><div class="ch-sub">Self-paced — after mandatory training</div><span class="ch-badge">Self-Paced · Optional</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-intermediate">All Features Intermediate</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Wrap a design in auto layout and set gap/padding (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Set Hug/Fill/Fixed resizing on layers (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Combine components into variants (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Add a component property (boolean or instance swap) (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Create color &amp; text styles (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Use Smart Animate between two frames (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Build an overlay (modal/menu) in a prototype (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Inspect a frame in Dev Mode (Sec 8) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Run First Draft and refine the result (Sec 9) <span class="ci-est">~15 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-intermediate" style="color:#854d0e">0 of 9 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-intermediate" style="background:#ca8a04"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#854d0e" onclick="resetList('intermediate')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('intermediate')">📝 Take Quiz</button></div></div>
</div>

<!-- 15. ADVANCED CHECKLIST -->
<div class="checklist-section advanced" id="cl-advanced"><div class="checklist-head advanced"><h2>✅ Advanced Learner Checklist</h2><div class="ch-sub">Optional — deep mastery</div><span class="ch-badge">Optional · Deep Mastery</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-advanced">All Features Advanced</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Build nested auto layout for a full responsive screen (Sec 5) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Create color variables and apply them (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Add Light/Dark modes to a variable collection (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Build an interactive component (Default → Hover) (Sec 7) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Use Set variable + conditional logic in a prototype (Sec 7) <span class="ci-est">~25 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Mark frames "Ready for dev" and compare versions (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Generate a prototype with Figma Make and iterate (Sec 9) <span class="ci-est">~20 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-advanced" style="color:#991b1b">0 of 7 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-advanced" style="background:#991b1b"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#991b1b" onclick="resetList('advanced')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('advanced')">📝 Take Quiz</button></div></div>
</div>

<!-- 16. QUICK REFERENCE -->
<div class="slide" id="sec-qr"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Quick Reference</span></div><h2>🔗 Quick Reference — Platform Access &amp; Help Centers</h2></div>
  <div class="slide-body"><div class="qr-grid">
    <div class="qr-card"><h4>🔐 Platform Access</h4><ul><li><a href="https://www.figma.com" target="_blank">Figma Login</a></li><li><a href="https://help.figma.com" target="_blank">Figma Help Center</a></li><li><a href="https://help.figma.com/hc/en-us/categories/360002051613-Learn" target="_blank">Figma Learn</a></li><li><a href="https://www.figma.com/community" target="_blank">Figma Community</a></li><li><a href="https://www.figma.com/developers" target="_blank">Figma for Developers</a></li></ul></div>
    <div class="qr-card"><h4>🎓 Help Center Topics</h4><ul><li><a href="https://help.figma.com/hc/en-us/categories/360002051613-Learn" target="_blank">Get Started / Editor</a></li><li><a href="https://help.figma.com" target="_blank">Auto Layout</a></li><li><a href="https://help.figma.com" target="_blank">Components &amp; Variants</a></li><li><a href="https://help.figma.com" target="_blank">Variables &amp; Modes</a></li><li><a href="https://help.figma.com" target="_blank">Prototyping</a></li><li><a href="https://help.figma.com" target="_blank">Dev Mode</a></li><li><a href="https://help.figma.com" target="_blank">FigJam</a></li></ul></div>
    <div class="qr-card"><h4>🏅 Certificates (3rd party)</h4><ul><li><a href="https://help.figma.com/hc/en-us/categories/360002051613-Learn" target="_blank">Figma Learn (free courses)</a></li><li><a href="https://www.coursera.org/search?query=figma" target="_blank">Coursera — Figma courses</a></li></ul></div>
    <div class="qr-card"><h4>🎬 YouTube</h4><ul><li><a href="https://www.youtube.com/results?search_query=figma+tutorial+for+beginners+2026" target="_blank">Beginner Tutorial</a></li><li><a href="https://www.youtube.com/results?search_query=figma+auto+layout+components+tutorial+2026" target="_blank">Intermediate Tips</a></li><li><a href="https://www.youtube.com/results?search_query=figma+variables+dev+mode+figma+make+2026" target="_blank">Advanced: Variables &amp; Dev Mode</a></li></ul></div>
  </div></div>
</div>

<!-- FINAL NOTE -->
<div class="final-note" id="sec-final">
  <p style="font-size:15px;font-weight:700;margin-bottom:10px">📌 Final Note — Figma Training</p>
  <p style="margin-bottom:10px">All <strong>Beginner-level content</strong> is <strong>mandatory</strong> within your first <strong>30 days</strong>. Intermediate and Advanced training is self-paced.</p>
  <p style="margin-bottom:10px"><strong>Team &amp; File Access:</strong> Since InvenTel organizes work across multiple teams, projects, and shared libraries, your first step is always to confirm your access list with your direct report. Do not assume which teams you need — verify, and escalate if anything is missing.</p>
  <p style="margin-bottom:10px">This deck is <strong>self-contained</strong> — every deep-dive includes complete step-by-step instructions. Click any section header to collapse it once you've completed it. External links and help centers are in the Quick Reference.</p>
  <p style="margin-bottom:10px">Use the <strong>New Hire Checklist</strong> to track progress and share with your manager.</p>
  <p style="margin-bottom:10px">For access, credentials, or training questions — reach out to the <strong>HR Training Coordinator who assisted you during onboarding</strong>.</p>
  <p style="margin-bottom:10px"><a href="https://help.figma.com" target="_blank">Figma Help Center →</a></p>
  <p style="font-size:11px;opacity:.7;margin-top:14px">Last updated: April 6, 2025</p>
</div>

<!-- FLOATING NAV -->
<button class="float-nav-btn" onclick="toggleFloatNav()" title="Jump to section">📋</button>
<div class="float-nav-panel" id="float-nav">
  <div class="float-nav-hd">📋 Jump to Section</div>
  <ul class="float-nav-list">
    <li><a class="fnl-section" href="#sec-toc" onclick="closeNav()">📋 Table of Contents</a></li>
    <li><a class="fnl-section" href="#sec-overview" onclick="closeNav()">🎨 1. Platform Overview</a></li>
    <li><a class="fnl-section" href="#sec-hub" onclick="closeNav()">🎓 2. Official Learning Hub</a></li>
    <li><a class="fnl-section" href="#sec-begres" onclick="closeNav()">🟢 3. Beginner Resources</a></li>
    <li><a class="fnl-section" href="#sec-start" onclick="closeNav()">🟢 4. Getting Started</a></li>
    <li><a class="fnl-section" href="#sec-frames" onclick="closeNav()">🖼️ 5. Frames &amp; Auto Layout</a></li>
    <li><a class="fnl-section" href="#sec-components" onclick="closeNav()">🧩 6. Components &amp; Variables</a></li>
    <li><a class="fnl-section" href="#sec-prototype" onclick="closeNav()">▶️ 7. Prototyping</a></li>
    <li><a class="fnl-section" href="#sec-collab" onclick="closeNav()">👥 8. Collaboration &amp; Dev Mode</a></li>
    <li><a class="fnl-section" href="#sec-ai" onclick="closeNav()">✨ 9. Figma AI &amp; Make</a></li>
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

</div><!-- /main-content -->

<script>
/* SECTION COLLAPSE/EXPAND */
function toggleSection(hd){hd.classList.toggle('collapsed');var body=hd.nextElementSibling;body.classList.toggle('collapsed');}
function goTo(id){var el=document.getElementById(id);if(!el)return;var hd=el.querySelector('.slide-header');if(hd&&hd.classList.contains('collapsed')){hd.classList.remove('collapsed');hd.nextElementSibling.classList.remove('collapsed');}el.scrollIntoView({behavior:'smooth',block:'start'});}

/* SEARCH BAR v3.1 */
var _searchPrevCollapsed=[];
function deckSearch(query){
  clearHighlights();
  var countEl=document.getElementById('search-count');
  query=query.trim();
  if(query.length<2){
    countEl.textContent='';
    _searchPrevCollapsed.forEach(function(hd){hd.classList.add('collapsed');hd.nextElementSibling.classList.add('collapsed');});
    _searchPrevCollapsed=[];
    return;
  }
  var searchRoot=document.getElementById('main-content');
  var matchCount=0;
  var firstMatchEl=null;
  var slides=searchRoot.querySelectorAll('.slide,.checklist-section');
  _searchPrevCollapsed=[];
  slides.forEach(function(slide){
    var hd=slide.querySelector('.slide-header');
    var body=slide.querySelector('.slide-body,.checklist-body');
    if(!body)return;
    var matches=highlightTextNodes(body,query);
    matchCount+=matches;
    if(matches>0){
      if(hd&&hd.classList.contains('collapsed')){
        _searchPrevCollapsed.push(hd);
        hd.classList.remove('collapsed');
        body.classList.remove('collapsed');
      }
      if(!firstMatchEl)firstMatchEl=body.querySelector('mark.search-match');
    }
  });
  if(matchCount===0){countEl.textContent='No matches';countEl.style.color='#fde2e2';}
  else{countEl.textContent=matchCount+(matchCount===1?' match':' matches');countEl.style.color='#fcd9b6';}
  if(firstMatchEl)firstMatchEl.scrollIntoView({behavior:'smooth',block:'center'});
}
function highlightTextNodes(root,query){
  var count=0;
  var regex=new RegExp('('+escapeRegex(query)+')','gi');
  var walker=document.createTreeWalker(root,NodeFilter.SHOW_TEXT,null,false);
  var nodes=[];var node;
  while((node=walker.nextNode())){if(node.nodeValue.trim())nodes.push(node);}
  nodes.forEach(function(n){
    if(!regex.test(n.nodeValue))return;
    regex.lastIndex=0;
    var span=document.createElement('span');
    span.innerHTML=n.nodeValue.replace(regex,'<mark class="search-match">$1</mark>');
    count+=span.querySelectorAll('mark.search-match').length;
    n.parentNode.replaceChild(span,n);
  });
  return count;
}
function clearHighlights(){
  document.querySelectorAll('mark.search-match').forEach(function(m){var p=m.parentNode;p.replaceChild(document.createTextNode(m.textContent),m);p.normalize();});
}
function clearDeckSearch(){var inp=document.getElementById('deck-search');inp.value='';deckSearch('');}
function escapeRegex(str){return str.replace(/[.*+?^${}()|[\]\\]/g,'\\$1');}
document.addEventListener('keydown',function(e){
  var inp=document.getElementById('deck-search');
  if(e.key==='/'&&document.activeElement.tagName!=='INPUT'&&document.activeElement.tagName!=='TEXTAREA'){e.preventDefault();inp.focus();inp.select();}
  if(e.key==='Escape'&&document.activeElement===inp){clearDeckSearch();inp.blur();}
});

/* FLOATING NAV */
function toggleFloatNav(){document.getElementById('float-nav').classList.toggle('open');}
function closeNav(){document.getElementById('float-nav').classList.remove('open');}

/* CHECKLISTS */
var TOTALS={mandatory:17,intermediate:9,advanced:7};
function tick(el,s){el.classList.toggle('checked');updateBar(s);}
function updateBar(s){var c=document.getElementById('cl-'+s),ck=c.querySelectorAll('.cb.checked:not([data-optional])').length,t=TOTALS[s],p=t>0?Math.round((ck/t)*100):0;document.getElementById('lbl-'+s).textContent=ck+' of '+t+' completed';document.getElementById('bar-'+s).style.width=p+'%';}
function resetList(s){document.getElementById('cl-'+s).querySelectorAll('.cb.checked').forEach(function(cb){cb.classList.remove('checked');});updateBar(s);}

/* QUIZ DATA — 20+ per level, pulls 20 */
var qSection,qIndex,qScore,qAnswered,qQuestions;
var QUIZ={
mandatory:{title:'New Hire Onboarding',sub:'Mandatory · 20 Questions · Pass = 70%',hd:'q-mandatory',track:'New Hire Onboarding — Figma',qs:20,questions:[
{q:'What is the FIRST thing you should do on your first day with Figma?',opts:['Start designing screens','Request your team/project/library access list from your direct report','Install plugins','Publish a library'],ans:1},
{q:'Which email should you use to log in so you land in the InvenTel organization?',opts:['A personal Gmail','Your InvenTel work email / SSO','Any email','A shared team email'],ans:1},
{q:'In a Figma file, what is the large central workspace called?',opts:['The board','The canvas','The stage','The grid'],ans:1},
{q:'Where are your Layers and Pages located?',opts:['The right panel','The top toolbar','The left panel','A popup window'],ans:2},
{q:'What does the right panel show?',opts:['Only colors','Design, Prototype, and Dev Mode tabs','Only layers','Chat messages'],ans:1},
{q:'What keyboard shortcut selects the Frame tool?',opts:['R','T','F','V'],ans:2},
{q:'What shortcut opens quick actions (command search)?',opts:['Ctrl/⌘ + S','Ctrl/⌘ + /','Ctrl/⌘ + Z','Alt + Tab'],ans:1},
{q:'How do you create a new frame (screen/artboard)?',opts:['File → New screen','Press F, then pick a preset or drag','Right-click → Frame only','Settings → Frames'],ans:1},
{q:'What is the Move tool shortcut?',opts:['M','V','S','G'],ans:1},
{q:'How do you add text?',opts:['Press T and click','Double-click the canvas','Right-click → Text only','Insert menu only'],ans:0},
{q:'How do you leave a comment?',opts:['Email the file','Press C and click where you want it','Settings → Comments','You cannot comment'],ans:1},
{q:'What is the difference between a main component and an instance?',opts:['They are identical','Editing the main component updates all instances','Instances cannot be changed','Main components cannot be edited'],ans:1},
{q:'How do you create a component from a selected layer?',opts:['File → Component','Right-click → Create component','Settings → New','Cannot create'],ans:1},
{q:'How do you start building a prototype?',opts:['Dev Mode tab','The Prototype tab in the right panel','Settings → Prototype','Plugins'],ans:1},
{q:'How do you connect one screen to another in a prototype?',opts:['Type the screen name','Drag the connection node from an element to the destination frame','Use the comment tool','You cannot link screens'],ans:1},
{q:'How do you test/preview a prototype?',opts:['Export it','Click Present (the play button)','Print it','Refresh the page'],ans:1},
{q:'What does the Share button control?',opts:['File color','Who can view or edit and the link','Font settings','Export format'],ans:1},
{q:'Where do you find past states of a file?',opts:['Trash','File → Show version history','Settings → Backups','You cannot'],ans:1},
{q:'What is Figma AI good for on day one?',opts:['Nothing useful','Rewriting text and removing image backgrounds inline','Only generating videos','Only writing code'],ans:1},
{q:'If a team or library is missing from your sidebar, what should you do?',opts:['Create your own','Contact your direct report or HR Training Coordinator right away','Wait a week','Ignore it'],ans:1},
{q:'How do you zoom to fit everything on the canvas?',opts:['Ctrl/⌘ + S','Shift + 1','Spacebar','Tab'],ans:1},
{q:'What lives inside a team?',opts:['Only fonts','Projects, which contain files','Only comments','Nothing'],ans:1}
]},
intermediate:{title:'Intermediate Skills',sub:'Intermediate · 20 Questions · Pass = 70%',hd:'q-intermediate',track:'Intermediate Skills — Figma',qs:20,questions:[
{q:'What shortcut adds auto layout to a selection?',opts:['Ctrl/⌘ + A','Shift + A','Ctrl/⌘ + L','Alt + A'],ans:1},
{q:'In auto layout, what does the "gap" control?',opts:['Frame border','Spacing between items','Corner radius','Opacity'],ans:1},
{q:'What does the "Hug" resizing option do?',opts:['Stretches to the container','Shrinks the frame to fit its content','Fixes a set size','Hides the layer'],ans:1},
{q:'What does "Fill container" do to a layer in auto layout?',opts:['Deletes it','Stretches it to fill the available space','Locks its size','Removes padding'],ans:1},
{q:'How do you create component variants?',opts:['Duplicate manually','Select related components → Combine as variants','Rename layers','Export them'],ans:1},
{q:'A variant property might look like which of these?',opts:['color=#fff','State=Default / State=Hover','width:100%','onClick'],ans:1},
{q:'Which is a type of component property?',opts:['Boolean (show/hide)','Stroke weight','Export scale','Zoom level'],ans:0},
{q:'How do you make components reusable across other team files?',opts:['Copy and paste each time','Publish them to a library','Email the file','Screenshot them'],ans:1},
{q:'What does Smart Animate do?',opts:['Generates code','Tweens matching layers between frames for smooth motion','Auto-saves','Adds comments'],ans:1},
{q:'For Smart Animate to work well, what must match between frames?',opts:['File names','Layer names','Colors only','Frame sizes only'],ans:1},
{q:'How do you create a modal or menu in a prototype?',opts:['Navigate to','Set the action to Open overlay','Use a comment','Export as image'],ans:1},
{q:'Which is a valid prototype trigger besides On click?',opts:['On save','While hovering','On export','On publish'],ans:1},
{q:'How do you save a reusable color style?',opts:['Right-click → Save','Select fill → style icon → +','Settings → Colors','You cannot'],ans:1},
{q:'What does Dev Mode let you do?',opts:['Edit live code','Inspect measurements, spacing, colors and view code snippets','Delete frames','Send emails'],ans:1},
{q:'How do you toggle Dev Mode?',opts:['Settings → Dev','The </> switch in the top right','File → Dev','Plugins'],ans:1},
{q:'What is FigJam?',opts:['A plugin store','Figma\'s online whiteboard for brainstorming and flows','A payment tool','A font manager'],ans:1},
{q:'What does First Draft do?',opts:['Saves a backup','Generates an editable starting UI layout from a description','Exports PDF','Locks the file'],ans:1},
{q:'After First Draft generates a layout, what should you do?',opts:['Ship it as-is','Refine it with components and your real styles','Delete it','Publish a library'],ans:1},
{q:'How can teammates respond to a shared prototype?',opts:['They cannot','Leave comments directly on it','Only by email','Edit the main component'],ans:1},
{q:'What is the safe default access when sharing a file?',opts:['Can edit','Can view','Admin','Owner'],ans:1},
{q:'What should you check before publishing to a shared library?',opts:['Nothing','Coordinate with your direct report — changes ripple to everyone','The weather','Your zoom level'],ans:1},
{q:'Constraints are mainly used for what?',opts:['Coloring layers','Controlling how elements reposition when a frame resizes','Adding comments','Exporting'],ans:1}
]},
advanced:{title:'Advanced Mastery',sub:'Advanced · 20 Questions · Pass = 70%',hd:'q-advanced',track:'Advanced Mastery — Figma',qs:20,questions:[
{q:'What are Figma Variables used for?',opts:['Only colors','A single source of truth for design tokens (color, number, string, boolean)','Exporting files','Commenting'],ans:1},
{q:'What do Modes on a variable collection enable?',opts:['Faster export','Switching themes like Light/Dark without duplicate screens','More plugins','Auto-save'],ans:1},
{q:'Which is a valid variable type?',opts:['Gradient only','Number','Animation','Shadow'],ans:1},
{q:'What does Code Connect do?',opts:['Writes the whole app','Links a Figma component to its real production code','Hosts the website','Sends emails'],ans:1},
{q:'In Dev Mode with Code Connect, engineers see what?',opts:['Generic CSS only','The actual component code from your repo','Nothing','Only screenshots'],ans:1},
{q:'What does the Figma MCP server enable?',opts:['Faster zoom','AI coding tools to pull design context from a selected frame','Bigger files','More fonts'],ans:1},
{q:'What is nested auto layout?',opts:['A bug','Auto layout frames inside other auto layout frames for responsive screens','A plugin','A font setting'],ans:1},
{q:'How do you float a child element (e.g., a badge) without breaking layout flow?',opts:['Delete auto layout','Set it to absolute position','Lock it','Group it'],ans:1},
{q:'How do you build an interactive component?',opts:['Cannot be done','Wire Default → Hover inside a variant set so the interaction lives in the component','Use a comment','Export it'],ans:1},
{q:'Which feature lets prototypes have realistic logic like toggles and counters?',opts:['Comments','Set variable actions plus conditionals (if/else)','Export presets','Grid styles'],ans:1},
{q:'What does marking frames "Ready for dev" do?',opts:['Deletes drafts','Signals to engineers which frames are final','Publishes a library','Locks the file forever'],ans:1},
{q:'What is branching in Figma?',opts:['A color mode','Creating a separate copy of a file to experiment, then merge back','A plugin','A prototype trigger'],ans:1},
{q:'Why must you be careful with plugins?',opts:['They cost money always','They can access file contents — only use approved ones','They delete fonts','They disable comments'],ans:1},
{q:'What is Figma Make?',opts:['A font tool','Turns prompts or a design into working interactive prototypes/experiences','A billing page','A comment style'],ans:1},
{q:'How do you iterate on a Figma Make result?',opts:['Start over each time','Chat / describe changes and it updates','Export and re-import','You cannot iterate'],ans:1},
{q:'What is the recommended way to handle AI output before shipping?',opts:['Ship immediately','Always review for accuracy, accessibility, and brand voice','Never use it','Only use images'],ans:1},
{q:'How are Figma AI features metered?',opts:['Unlimited always','They consume AI credits, used only when triggered','By file size','By number of pages'],ans:1},
{q:'What is a good practice for file handoff?',opts:['Leave layers unnamed','Keep layers named and grouped','Delete components','Hide all frames'],ans:1},
{q:'Boolean operations (Union, Subtract) are used to do what?',opts:['Change colors','Combine simple shapes into custom icons','Add comments','Export code'],ans:1},
{q:'What is a layout grid used for?',opts:['Coloring frames','Consistent column/row alignment across designs','Saving versions','Sharing files'],ans:1},
{q:'Who typically owns shared variables and Code Connect?',opts:['Every new hire','The design-systems team — coordinate before changing tokens','No one','The marketing team'],ans:1}
]}
};

/* QUIZ ENGINE */
function startQuiz(s){qSection=s;qIndex=0;qScore=0;qAnswered=false;var d=QUIZ[s];qQuestions=shuffle(d.questions.slice()).slice(0,d.qs);document.getElementById('quiz-hd').className='quiz-hd '+d.hd;document.getElementById('quiz-title').textContent='📝 '+d.title+' — Knowledge Check';document.getElementById('quiz-hd-sub').textContent=d.sub;document.getElementById('quiz-body').style.display='block';document.getElementById('quiz-result').style.display='none';document.getElementById('quiz-overlay').style.display='block';renderQ();}
function shuffle(a){for(var i=a.length-1;i>0;i--){var j=Math.floor(Math.random()*(i+1));var t=a[i];a[i]=a[j];a[j]=t;}return a;}
function renderQ(){var q=qQuestions[qIndex],tot=qQuestions.length,pct=Math.round((qIndex/tot)*100);document.getElementById('quiz-prog-bar').style.width=pct+'%';document.getElementById('quiz-prog-lbl').textContent='Question '+(qIndex+1)+' of '+tot;document.getElementById('quiz-q-num').textContent='Question '+(qIndex+1)+' of '+tot;document.getElementById('quiz-q-text').textContent=q.q;document.getElementById('quiz-score-live').textContent='Score: '+qScore+'/'+qIndex;document.getElementById('quiz-next-btn').disabled=true;document.getElementById('quiz-next-btn').textContent=qIndex<tot-1?'Next →':'See Results';var fb=document.getElementById('quiz-feedback');fb.style.display='none';fb.className='quiz-feedback';qAnswered=false;var c=document.getElementById('quiz-options');c.innerHTML='';q.opts.forEach(function(opt,i){var b=document.createElement('button');b.className='quiz-opt';b.textContent=opt;b.onclick=function(){selectA(i,b);};c.appendChild(b);});}
function selectA(ch,btn){if(qAnswered)return;qAnswered=true;var q=qQuestions[qIndex],co=q.ans;var opts=document.getElementById('quiz-options').querySelectorAll('.quiz-opt');var fb=document.getElementById('quiz-feedback');opts.forEach(function(o){o.onclick=null;});if(ch===co){qScore++;btn.classList.add('correct');fb.className='quiz-feedback correct';fb.textContent='✓ Correct!';fb.style.display='block';}else{btn.classList.add('wrong');opts[co].classList.add('show-correct');fb.className='quiz-feedback incorrect';fb.textContent='✗ Incorrect — correct: '+q.opts[co];fb.style.display='block';}document.getElementById('quiz-score-live').textContent='Score: '+qScore+'/'+(qIndex+1);document.getElementById('quiz-next-btn').disabled=false;}
function quizNext(){if(qIndex<qQuestions.length-1){qIndex++;renderQ();}else{showResults();}}
function showResults(){var tot=qQuestions.length,pct=Math.round((qScore/tot)*100);document.getElementById('quiz-body').style.display='none';document.getElementById('quiz-result').style.display='block';document.getElementById('quiz-prog-bar').style.width='100%';document.getElementById('quiz-prog-lbl').textContent='Complete';if(pct>=70){document.getElementById('quiz-pass-screen').style.display='block';document.getElementById('quiz-fail-screen').style.display='none';document.getElementById('qr-pass-sub').textContent='You scored '+pct+'% — '+qScore+' of '+tot+' correct';document.getElementById('qr-score-val').textContent=pct+'%';document.getElementById('qr-correct-val').textContent=qScore+'/'+tot;document.getElementById('qr-date-val').textContent=new Date().toLocaleDateString('en-US',{month:'short',day:'numeric',year:'numeric'});document.getElementById('qr-track-val').textContent=QUIZ[qSection].track;var ch=document.getElementById('qr-congrats-hd');if(qSection==='mandatory'){ch.style.background='linear-gradient(135deg,#166534,#15803d)';document.querySelector('.quiz-result-congrats-sub').style.color='#bbf7d0';}else if(qSection==='intermediate'){ch.style.background='linear-gradient(135deg,#854d0e,#a16207)';document.querySelector('.quiz-result-congrats-sub').style.color='#fef9c3';}else{ch.style.background='linear-gradient(135deg,#991b1b,#7f1d1d)';document.querySelector('.quiz-result-congrats-sub').style.color='#fde2e2';}}else{document.getElementById('quiz-pass-screen').style.display='none';document.getElementById('quiz-fail-screen').style.display='block';document.getElementById('qr-fail-score').textContent=pct+'%';document.getElementById('qr-fail-sub').textContent=qScore+' of '+tot+' correct';var ms=['Review materials and try again.','Focus on areas where you felt unsure.','No limit on retakes!'];document.getElementById('qr-fail-msg').textContent=ms[Math.floor(Math.random()*ms.length)];}}
function retakeQuiz(){startQuiz(qSection);}
function closeQuiz(){document.getElementById('quiz-overlay').style.display='none';}
function printCard(){window.print();}
</script>
<?php bh_back_to_index_button('training-hub-index', 'All Trainings'); ?>
</body>
</html>
