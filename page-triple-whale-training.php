<?php /* Template Name: Triple Whale Training */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>InvenTel — Triple Whale Training (Self-Contained) v3.1</title>
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
      <div class="header-h1">🐳 Triple Whale — Self-Contained Training Guide</div>
      <div class="header-subtitle">Complete step-by-step training for Summary Dashboard, Triple Pixel, Attribution Models, Sonar, Custom Dashboards & Moby AI Agents — click any section header to collapse/expand</div>
    </div>
    <div class="header-meta">All Levels (Beginner → Advanced)<br>Platform: Triple Whale<br>Format: Self-Contained / Standalone<br><span style="color:#fcd9b6;font-weight:700">v3.1 — Search Bar Edition</span></div>
  </div>
</div>
<div class="stat-row">
  <div class="stat-item"><span class="stat-val">6</span><span class="stat-lbl">Core Areas</span></div>
  <div class="stat-item"><span class="stat-val">16+</span><span class="stat-lbl">Training Sections</span></div>
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Skill Levels</span></div>
  <div class="stat-item"><span class="stat-val">30 Days</span><span class="stat-lbl">Mandatory Window</span></div>
  <div class="stat-item"><span class="stat-val">Moby AI</span><span class="stat-lbl">Built-in AI</span></div>
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
      <div class="toc-item" onclick="goTo('sec-overview')">1. Platform Overview<span>What Triple Whale is + multi-store context</span></div>
      <div class="toc-item" onclick="goTo('sec-hub')">2. Official Learning Hub<span>Help Center + Agents Masterclass</span></div>
      <div class="toc-item" onclick="goTo('sec-begres')">3. Beginner Training Resources<span>Mandatory — external resources</span></div>
      <div class="toc-item" onclick="goTo('sec-start')">4. Getting Started — First Day Setup<span>Multi-store access verification</span></div>
      <div class="toc-item" onclick="goTo('sec-summary')">5. Summary Dashboard & KPIs<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-pixel')">6. Triple Pixel & Attribution<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-customers')">7. Customers, Sonar & Audiences<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-dashboards')">8. Custom Dashboards & Metrics<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-moby')">9. Moby AI & Moby Agents<span>AI features across the platform</span></div>
      <div class="toc-item" onclick="goTo('sec-intres')">10. Intermediate Resources<span>Self-paced, optional links</span></div>
      <div class="toc-item" onclick="goTo('sec-advres')">11. Advanced Resources<span>Optional deep mastery links</span></div>
      <div class="toc-item" onclick="goTo('sec-certs')">12. Learning Paths & Skill Validation<span>Help Center + Masterclass tracks</span></div>
      <div class="toc-item" onclick="goTo('cl-mandatory')">13. New Hire Checklist<span>Interactive — mandatory</span></div>
      <div class="toc-item" onclick="goTo('cl-intermediate')">14. Intermediate Checklist<span>Interactive — self-paced</span></div>
      <div class="toc-item" onclick="goTo('cl-advanced')">15. Advanced Checklist<span>Interactive — mastery</span></div>
      <div class="toc-item" onclick="goTo('sec-qr')">16. Quick Reference + Final Note<span>Platform URLs + help centers</span></div>
    </div>
  </div>
</div>

<!-- 1. PLATFORM OVERVIEW -->
<div class="slide" id="sec-overview"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Section 1</span></div><h2>🐳 What is Triple Whale?</h2><p class="subtitle">The AI-powered ecommerce intelligence platform sitting on top of our Shopify stores.</p></div>
  <div class="slide-body">
    <p style="font-size:13px;color:#5c5c5c;margin-bottom:14px">Triple Whale is InvenTel's primary ecommerce analytics, attribution, and AI intelligence platform. It connects to our Shopify stores, ad platforms (Meta, Google, TikTok, Pinterest), email/SMS tools (Klaviyo), and other data sources — then unifies everything into a single dashboard that shows real-time profitability, accurate attribution, and AI-driven recommendations. Where Shopify is your operational command center, Triple Whale is your <strong>data and decision-making layer</strong>.</p>
    <div class="callout"><strong>⚠️ Multi-Store Environment:</strong> InvenTel manages <strong>multiple Shopify stores across different brands</strong>, and each store has its own Triple Whale workspace (or is part of a Multi-Shop view). You may have access to all brand workspaces or just a few, depending on your role. <strong>On your first day, you must request a list from your direct report</strong> of which Triple Whale workspaces you have been added to and what permission level you should have. Verify everything matches — if not, follow up immediately with your direct report or the HR Training Coordinator.</div>
    <div class="apps-grid"><span class="app-chip">📊 Summary Dashboard</span><span class="app-chip">🎯 Triple Pixel</span><span class="app-chip">📈 Attribution</span><span class="app-chip">📡 Sonar</span><span class="app-chip">📉 Forecasting</span><span class="app-chip">🤖 Moby AI</span><span class="app-chip">⚡ Moby Agents</span><span class="app-chip">📱 Mobile App</span></div>
    <div class="platform-url"><strong>Triple Whale App:</strong> <a href="https://app.triplewhale.com" target="_blank">app.triplewhale.com</a><br><strong>Triple Whale Help Center:</strong> <a href="https://kb.triplewhale.com" target="_blank">kb.triplewhale.com</a><br><strong>Triple Whale Marketing Site:</strong> <a href="https://www.triplewhale.com" target="_blank">triplewhale.com</a><br><strong>Mobile App:</strong> Triple Whale iOS &amp; Android (free, full-featured)</div>
    <div class="callout"><strong>💡 How it all connects:</strong> The <strong>Triple Pixel</strong> sits on each storefront and captures first-party customer behavior. That data flows into <strong>Attribution</strong> dashboards (multiple models — Last Click, First Click, Triple Attribution, Total Impact, Clicks &amp; Deterministic Views). The <strong>Summary</strong> page is your daily landing pad. <strong>Sonar</strong> sends enriched first-party data back to ad and retention platforms. <strong>Moby AI</strong> answers data questions in plain English, while <strong>Moby Agents</strong> run automated analyses around the clock. Everything ties back to the same unified data layer.</div>
  </div>
</div>

<!-- 2. OFFICIAL LEARNING HUB -->
<div class="slide" id="sec-hub"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official Triple Whale</span></div><h2>🎓 Official Learning Hub — Help Center &amp; Agents Masterclass</h2><p class="subtitle">Beginner-level resources are MANDATORY within 30 days.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Triple Whale Help Center <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official</span></div><div class="card-desc">Triple Whale's primary reference — collections of articles for every feature, from Triple Pixel installation to attribution models, Sonar setup, custom dashboards, and Moby AI usage.</div><div class="card-meta"><strong>Format:</strong> Articles + Documentation &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">All Features</span><span class="tag t2">Reference</span></div><a href="https://kb.triplewhale.com" target="_blank">→ Visit the Triple Whale Help Center</a></div>
    <div class="card"><div class="card-title">Getting Started Collection <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-academy">Help Center</span></div><div class="card-desc">Activation guides and onboarding resources — Summary dashboard, custom metrics, expense tracking, integrations setup, and ecommerce metrics fundamentals (ROAS, CPM, CTR, CPC, CVR, CPA, AOV, MER).</div><div class="card-meta"><strong>Format:</strong> Article series &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">Onboarding</span></div><a href="https://kb.triplewhale.com/en/collections/3416093-getting-started" target="_blank">→ Open the Getting Started collection</a></div>
    <div class="card"><div class="card-title">Triple Whale Agents Masterclass <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official six-part hands-on series covering what Agents are, building your first Agent, media-buying optimization, product &amp; channel insights, and advanced techniques with SQL/Python/conditional logic.</div><div class="card-meta"><strong>Format:</strong> Video series &nbsp;|&nbsp; <strong>Est. Time:</strong> ~2 hrs &nbsp;|&nbsp; <strong>Level:</strong> Beginner → Advanced</div><div class="tag-row"><span class="tag t1">Masterclass</span><span class="tag t4">Moby Agents</span></div><a href="https://kb.triplewhale.com/en/articles/11407746-triple-whale-agents-masterclass" target="_blank">→ Open the Agents Masterclass</a></div>
  </div>
</div>

<!-- 3. BEGINNER TRAINING RESOURCES -->
<div class="slide" id="sec-begres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory — Complete Within 30 Days</span></div><h2>🟢 Beginner Training — Mandatory Resources</h2><p class="subtitle">Every team member must complete these before the 30-day mark.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Help Center — Track KPIs with the Summary Dashboard <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official walkthrough of the Summary dashboard and the power of pinning metrics — your daily landing page.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">Summary</span></div><a href="https://kb.triplewhale.com/en/collections/3416093-getting-started" target="_blank">→ Open in Help Center Getting Started collection</a></div>
    <div class="card"><div class="card-title">Help Center — Installing the Triple Pixel <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official guide for adding Triple Pixel tracking to a Shopify store — the foundation of all attribution data in Triple Whale.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Pixel</span><span class="tag t4">Setup</span></div><a href="https://kb.triplewhale.com/en/collections/3416093-getting-started" target="_blank">→ Find "Installing the Triple Pixel" in Getting Started</a></div>
    <div class="card"><div class="card-title">Help Center — Guide to Ecommerce Metrics <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Master the essential ecommerce metrics — ROAS, CPM, CTR, CPC, CVR, CPA, AOV, and MER — and what each tells you about marketing impact.</div><div class="card-meta"><strong>Format:</strong> Reference article &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Metrics</span><span class="tag t2">Fundamentals</span></div><a href="https://kb.triplewhale.com/en/collections/3416093-getting-started" target="_blank">→ Find "A Guide to Ecommerce Metrics" in Getting Started</a></div>
    <div class="card"><div class="card-title">Help Center — Understanding &amp; Utilizing Attribution Models <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Every attribution model available in Triple Whale: Last Click, First Click, Triple Attribution, Total Impact, Clicks &amp; Deterministic Views, Linear (All), and when to use each.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Attribution</span><span class="tag t4">Reference</span></div><a href="https://kb.triplewhale.com/en/articles/5960333-understanding-and-utilizing-attribution-models" target="_blank">→ Read Understanding Attribution Models</a></div>
    <div class="card"><div class="card-title">YouTube: How To Use Triple Whale For Beginners <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Visual walkthrough of the Triple Whale platform — features, screens, and how to use the data to drive performance. Best for visual learners who want to see every click.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=triple+whale+tutorial+beginners+2025" target="_blank">→ Search YouTube: "Triple Whale tutorial beginners 2025"</a></div>
    <div class="card"><div class="card-title">Help Center — Invite Team Members &amp; Permissions <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Understand how user roles and permissions work in Triple Whale — critical for multi-workspace access across InvenTel's brand stores.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Est. Time:</strong> ~20 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">Permissions</span></div><a href="https://kb.triplewhale.com/en/collections/3416093-getting-started" target="_blank">→ Find "Invite Team Members" in Getting Started</a></div>
  </div>
</div>

<!-- 4. GETTING STARTED -->
<div class="slide" id="sec-start"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory</span></div><h2>🟢 Getting Started — Your First Day with Triple Whale</h2><p class="subtitle">Complete these steps in order to verify your access and learn the platform layout.</p></div>
  <div class="slide-body">
    <div class="steps-box"><h4>⚠️ Step 0 — Confirm Your Workspace Access List</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Request your access list</strong> from your direct report. Ask: "Which Triple Whale workspaces (or shops) have I been added to, and what role/permission level should I have in each?"</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">You should receive a list that includes: <strong>workspace/shop names</strong>, <strong>your role</strong> (Owner, Admin, Editor, Viewer, or a custom role), and which <strong>features</strong> you need access to (Summary, Pixel, Sonar, Moby, etc.).</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Keep this list — you will verify each workspace in the next steps.</div></div>
      <div class="step-warning"><strong>⚠️ Critical:</strong> If you do not have this list, stop and request it before proceeding. Do not assume which workspaces you should have access to. If your direct report is unavailable, contact the HR Training Coordinator who assisted you during onboarding.</div>
    </div>
    <div class="steps-box"><h4>🔐 Sign In to Triple Whale</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Open a browser and go to <a href="https://app.triplewhale.com" target="_blank">app.triplewhale.com</a>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">If this is your first login, you should have received an <strong>invitation email</strong>. Click the link in that email to set your password.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Enter your <strong>email</strong> (the one HR or your direct report used for the invite) → enter your <strong>password</strong> → sign in.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">If prompted, enable <strong>two-step authentication</strong> (recommended: authenticator app).</div></div>
      <div class="step-tip"><strong>💡 Tip:</strong> If you have access to multiple workspaces, use the <strong>shop switcher</strong> in the top-left to navigate between them. Click your shop name → select a different workspace.</div>
    </div>
    <div class="steps-box"><h4>✅ Verify Access to All Assigned Workspaces</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Compare the workspaces visible in your <strong>shop switcher</strong> against the access list from your direct report.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">For <strong>each workspace</strong>, click into it and verify you can see the sections you need: Summary, Attribution, Pixel, Customers, Moby, etc.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Check your role: <span class="step-nav">Settings → Users &amp; Permissions</span> → find your name → review your assigned role.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">If any workspace is <strong>missing</strong> or your permissions don't match, contact your <strong>direct report</strong> immediately. If unresolved, escalate to the HR Training Coordinator.</div></div>
      <div class="step-warning"><strong>⚠️</strong> Do NOT request access yourself or ask other team members to add you. All access must be granted through your direct report or workspace admin.</div>
    </div>
    <div class="steps-box"><h4>🧭 Learn the Triple Whale Layout</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Left sidebar:</strong> Your main navigation. Contains Summary, Moby (AI chat), Agents, Attribution (Pixel + Channels), Customers, Creative Cockpit, Forecasting, and more.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Top bar:</strong> Shop switcher (top-left), <strong>global date range picker</strong> (extremely important — defaults to "Yesterday"), <strong>global filters</strong>, and your profile menu.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Summary page:</strong> Your default landing page — shows blended metrics (Net Profit, Total Sales, MER, ROAS, ad spend by channel) for the selected date range.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text"><strong>Settings (bottom-left):</strong> Integrations, Pixel settings, Sonar settings, Custom Expenses, Users &amp; Permissions, and Triple Whale Credits.</div></div>
      <div class="step-tip"><strong>💡</strong> The <strong>date range picker</strong> applies globally across most pages. If a number looks wrong, the <em>first</em> thing to check is the date range.</div>
    </div>
    <div class="steps-box"><h4>👤 Set Up Your Profile</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Click your <strong>profile avatar</strong> (top-right) → <strong>Account settings</strong>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Verify your <strong>name</strong> and <strong>email</strong> are correct. Upload a <strong>profile photo</strong> (professional headshot).</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Configure <strong>notification preferences</strong> — daily/weekly digest emails, anomaly alerts, etc.</div></div>
    </div>
    <div class="steps-box"><h4>📱 Install the Mobile App (Optional but Recommended)</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Search for <strong>Triple Whale</strong> in the iOS App Store or Google Play.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Sign in with your Triple Whale credentials.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">The mobile app gives you the full Summary dashboard, Moby chat, and notification alerts on the go.</div></div>
    </div>
  </div>
</div>

<!-- 5. SUMMARY DASHBOARD & KPIs -->
<div class="slide" id="sec-summary"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📊 Core Feature Deep Dive — Summary Dashboard & KPIs</h2><p class="subtitle">Your daily landing page — blended metrics across every channel.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Reading the Dashboard</h3>
        <div class="sub-card"><strong>Daily Summary Walk-Through</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Summary</strong> (default landing page). The top stat tiles show <strong>Net Profit</strong>, <strong>Total Sales</strong>, <strong>Ad Spend</strong>, <strong>ROAS</strong>, <strong>MER</strong>, and <strong>AOV</strong>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Each tile updates in real time and shows a <strong>vs. previous period</strong> arrow (green up / red down).</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">The pinned section below the tiles shows <strong>blended metrics</strong> across all integrated platforms (Meta, Google, TikTok, Klaviyo, etc.).</div></div>
        </div>
        <div class="sub-card"><strong>Setting the Date Range</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Top bar → click the <strong>date range picker</strong>. Choose a preset (Today, Yesterday, Last 7 Days, MTD, etc.) or pick a custom range.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Use the <strong>compare</strong> toggle to compare against the previous period or a year-over-year window.</div></div>
          <div class="step-tip"><strong>💡</strong> Default is <strong>Yesterday</strong> — the most accurate full-day view. Today's data is still updating live.</div>
        </div>
        <div class="sub-card"><strong>Pinning Metrics</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Hover any metric → click the <strong>📌 pin icon</strong> to lock it to the top of your Summary.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Drag pinned tiles to reorder. Right-click → <strong>Unpin</strong> to remove.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Filters &amp; Comparisons</h3>
        <div class="sub-card"><strong>Global Filters</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Top bar → <strong>Filters</strong> → add filters by <strong>customer type</strong> (new vs. returning), <strong>product</strong>, <strong>channel</strong>, <strong>UTM source</strong>, etc.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Filters apply globally across the Summary, Attribution, Customers, and Pixel pages until cleared.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Save common filter combinations as <strong>filter presets</strong> for one-click reuse.</div></div>
        </div>
        <div class="sub-card"><strong>Custom Expenses &amp; Profitability</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Settings → Custom Expenses</span> → add <strong>shipping costs</strong>, <strong>COGs</strong>, <strong>app fees</strong>, <strong>contractor costs</strong>, etc.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Choose <strong>fixed</strong> (monthly) or <strong>variable</strong> (% of revenue or per-order). These feed directly into your Net Profit calculation.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Without custom expenses, Net Profit will only reflect ad spend — set them up early for accurate P&amp;L.</div></div>
        </div>
        <div class="sub-card"><strong>Benchmarks Dashboard</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Sidebar → <strong>Benchmarks</strong> → see how your ROAS, CPA, CPC, and other metrics compare to industry peers.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Filter by <strong>industry</strong>, <strong>spend tier</strong>, and <strong>AOV</strong> to right-size the comparison.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Multi-Shop &amp; Forecasting</h3>
        <div class="sub-card"><strong>Multi-Shop Dashboard</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Sidebar → <strong>Multi-Shop Dashboard</strong> → unified portfolio view across all your brand workspaces.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Compare results across platforms and stores, drill into product &amp; shipping performance side by side without jumping workspaces.</div></div>
        </div>
        <div class="sub-card"><strong>Forecasting</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Sidebar → <strong>Forecasting</strong> → choose a metric to forecast (revenue, customers, ad spend, etc.).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Pick a model: <strong>seasonal</strong> (holiday-aware), <strong>linear</strong> (trend-based), or auto. Set a horizon (next 30 / 60 / 90 days, etc.).</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text">Review the <strong>confidence interval</strong> band — wider band = more uncertainty. Use this for planning, not for hard targets.</div></div>
        </div>
        <div class="sub-card"><strong>External Revenue Import</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Settings → Data → External Revenue</span> → upload a CSV with non-Shopify revenue (retail, wholesale, marketplace, offline).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">This data is modeled into Summary so blended metrics reflect total business performance, not just online.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 6. TRIPLE PIXEL & ATTRIBUTION -->
<div class="slide" id="sec-pixel"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🎯 Core Feature Deep Dive — Triple Pixel & Attribution</h2><p class="subtitle">First-party tracking + multiple attribution models = trustworthy data.</p></div>
  <div class="slide-body">
    <div class="callout"><strong>💡 What is the Triple Pixel?</strong> The Triple Pixel is a <strong>first-party tracking script</strong> installed on your storefront. Unlike Meta or Google pixels (which lose accuracy after iOS 14.5), the Triple Pixel creates a persistent identity layer that stitches together the customer journey across devices, ad platforms, and sessions. It is the foundation for every attribution number you see in Triple Whale.</div>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Pixel & Attribution Basics</h3>
        <div class="sub-card"><strong>Verifying the Pixel is Installed</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><span class="step-nav">Settings → Pixel Settings</span> → check the <strong>Pixel Status</strong> indicator. Green = healthy, yellow = partial events, red = action needed.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Confirm install method: <strong>Theme App Embed</strong>, <strong>Web Pixel extension</strong>, or <strong>headless snippet</strong>. For Shopify stores, Theme App Embed is preferred.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">If status is red, do not attempt to fix it yourself — escalate to your direct report or an admin.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Pixel installation/uninstallation must only be done by an authorized admin. Damaged pixel = damaged attribution.</div>
        </div>
        <div class="sub-card"><strong>Reading the Attribution Page</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Attribution</strong> (also called the Pixel page) → see every channel and campaign with attributed orders &amp; revenue.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Top filter — choose your <strong>attribution model</strong> (Last Click is the default). Choose your <strong>attribution window</strong> (e.g. 7 days click, 1 day view).</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Click into a channel (Meta, Google, TikTok) → drill down to ad set → ad → individual creative.</div></div>
        </div>
        <div class="sub-card"><strong>"Not Set" &amp; Non-Attributed Orders</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Not Set</strong> = an order Triple Whale tracked but couldn't tie to a marketing source (usually missing or malformed UTMs).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Non-attributed</strong> = an order with no tracked click event at all (direct, organic, etc. — or pixel was blocked).</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Both buckets shrink as you fix UTM tagging and add a Post-Purchase Survey or Sonar.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Choosing Attribution Models</h3>
        <div class="sub-card"><strong>The Five Core Models</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><strong>Last Click:</strong> 100% credit to the last ad click. Good for immediate-purchase products.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><strong>First Click:</strong> 100% credit to the first ad click. Good for understanding what drives discovery.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text"><strong>Triple Attribution:</strong> Each platform's last click before conversion gets full credit. Use for <strong>platform-level optimization only</strong> — not for revenue reporting (totals will exceed actual revenue).</div></div>
          <div class="step"><div class="step-num amber">4</div><div class="step-text"><strong>Total Impact:</strong> Distributes credit across all touchpoints using first-party data, zero-party survey data, and a proprietary algorithm. Best for full-funnel understanding.</div></div>
          <div class="step"><div class="step-num amber">5</div><div class="step-text"><strong>Clicks &amp; Deterministic Views (C&amp;DV):</strong> Combines clicks + verified views from Meta, TikTok, Pinterest. Reconciled to actual revenue.</div></div>
          <div class="step-tip"><strong>💡</strong> For financial reporting, use <strong>Total Impact</strong> or <strong>C&amp;DV</strong>. Never use Triple Attribution for company P&amp;L — it double-counts.</div>
        </div>
        <div class="sub-card"><strong>Customizing the Attribution Dashboard</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">On the Attribution page → click the <strong>columns icon (⚙)</strong> → check/uncheck columns to add (e.g. CPM, CTR, AOV, New Customer %).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Drag columns to reorder. Sort by any column. Save the view as a custom layout.</div></div>
        </div>
        <div class="sub-card"><strong>Exporting Attribution Data to CSV</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Top-right of any Attribution dashboard → <strong>Export → CSV</strong>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Choose which columns and the date range. The file downloads ready for Excel or Google Sheets.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Power-User Attribution</h3>
        <div class="sub-card"><strong>Traffic Rules (Custom Attribution Logic)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Pixel → Traffic Rules</span> → create rules that override default attribution logic.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Example: Force any UTM source containing "<code>klaviyo</code>" to attribute to <strong>Email</strong>. Or carve out an Influencers channel from Meta traffic.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Traffic Rules permanently affect historical attribution — coordinate with the data lead before changing.</div>
        </div>
        <div class="sub-card"><strong>Custom Expenses for Non-Integrated Channels</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Settings → Custom Expenses</span> → assign a fixed/variable expense to a UTM source or campaign tag.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Lets you measure ROI on channels that don't have a native integration (e.g. podcast sponsorships, OOH, affiliate networks).</div></div>
        </div>
        <div class="sub-card"><strong>Marketing Mix Modeling (MMM) &amp; Incrementality</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Sidebar → <strong>MMM</strong> → measures the impact of click and non-click channels (TV, Amazon, OOH) on revenue.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Sidebar → <strong>Incrementality</strong> → set up holdout tests to measure the true causal lift of a channel.</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text">Use MMM + Incrementality + multi-touch attribution together for the most defensible measurement story.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 7. CUSTOMERS, SONAR & AUDIENCES -->
<div class="slide" id="sec-customers"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>👥📡 Core Feature Deep Dive — Customers, Sonar & Audiences</h2><p class="subtitle">Customer insights, post-purchase surveys, and first-party data activation.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Customer Insights Basics</h3>
        <div class="sub-card"><strong>The Customers Page</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Customers</strong> → see lifetime value cohorts, repeat purchase rate, time between orders, and customer journey breakdowns.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Switch between <strong>New</strong> and <strong>Returning</strong> customer views to understand acquisition vs. retention performance.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Click any cohort or segment tile → drill into the orders behind the number.</div></div>
        </div>
        <div class="sub-card"><strong>LTV (Lifetime Value) Analysis</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">On the Customers page → <strong>LTV</strong> tab → choose a cohort window (30/60/90/180/365 days).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Compare LTV by acquisition channel — answers "Which channels bring our most valuable customers?"</div></div>
        </div>
        <div class="sub-card"><strong>Post-Purchase Survey (PPS)</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">If your shop has the Triple Whale PPS enabled, customers see "How did you hear about us?" after checkout.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Responses appear on the Summary page and feed the <strong>Total Impact</strong> attribution model — closing gaps where the Pixel couldn't track.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Sonar &amp; Segments</h3>
        <div class="sub-card"><strong>What Sonar Does</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><strong>Sonar</strong> sends enriched first-party data <em>back</em> to platforms like Meta and Klaviyo. Helps recover lost conversions and power better abandonment flows.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><span class="step-nav">Settings → Sonar Settings</span> → see each connected destination and the events being sent.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Sonar Send (the email/SMS recovery feature) can drive significant incremental revenue — review weekly.</div></div>
        </div>
        <div class="sub-card"><strong>Building a Customer Segment</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Customers → Segments → Create segment</span>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Build with filters: <code>orders_count &gt;= 3</code>, <code>lifetime_value &gt; 200</code>, <code>last_order_date &gt; 60 days ago</code>, etc.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Save and name (e.g. "VIPs at Risk", "First-Time Meta Buyers"). Segments stay live and refresh automatically.</div></div>
        </div>
        <div class="sub-card"><strong>Audience Syncing</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Open a saved segment → <strong>Sync to platform</strong> → choose Meta, TikTok, Pinterest, Klaviyo, or Yotpo.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">The audience pushes as a Customer List — use it as a seed audience or exclusion in your ad campaigns.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Advanced Activation</h3>
        <div class="sub-card"><strong>Sonar CAPI &amp; Meta Attribution Passback</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Sonar's CAPI integration sends server-side conversion events to Meta, restoring tracking lost to iOS privacy changes.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">The newer <strong>Meta Attribution Passback</strong> integration shares Triple Whale's first-party attribution back to Meta to fine-tune campaign optimization.</div></div>
          <div class="step-warning"><strong>⚠️</strong> If another tool already runs CAPI for your shop, do not enable standard events through Sonar — you'll send duplicates.</div>
        </div>
        <div class="sub-card"><strong>Post-Purchase Survey Mappings (Custom)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">If using a third-party PPS (Kno, Fairing), connect it under <span class="step-nav">Data → Integrations</span> and map question responses to channels (Meta, TikTok, etc.).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Triple Whale will use those responses to enhance Pixel attribution for any otherwise-unattributed orders.</div></div>
        </div>
        <div class="sub-card"><strong>Reverse ETL — Exports to Warehouse</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Settings → Data Exports</span> → configure exports to BigQuery, Snowflake, AWS S3, or Google Cloud Storage.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Monitor all exports from a single in-app page — useful for teams blending Triple Whale data with internal warehouses.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 8. CUSTOM DASHBOARDS & METRICS -->
<div class="slide" id="sec-dashboards"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📈 Core Feature Deep Dive — Custom Dashboards & Metrics</h2><p class="subtitle">Build the exact view you need — drag-and-drop or SQL.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Dashboard Basics</h3>
        <div class="sub-card"><strong>Creating Your First Dashboard</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Dashboards</strong> (or <strong>Boards</strong>) → <strong>+ New Dashboard</strong>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Add widgets via the <strong>+</strong> button: pick from preset metric tiles, charts (line, bar, pie), tables, or text blocks.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Drag widgets to reposition; resize by dragging corners. Click the gear icon on a widget to edit its data source, filters, and visualization type.</div></div>
          <div class="step"><div class="step-num green">4</div><div class="step-text">Click <strong>Save</strong> → name your dashboard (e.g. "Daily Standup", "Meta Campaign Health").</div></div>
        </div>
        <div class="sub-card"><strong>Sharing a Dashboard</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Top-right of any dashboard → <strong>Share</strong> → invite teammates by email or copy a shareable link.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Choose <strong>View</strong> or <strong>Edit</strong> permission per teammate.</div></div>
        </div>
        <div class="sub-card"><strong>Scheduled Reports</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">On a dashboard → <strong>Schedule</strong> → set frequency (daily/weekly/monthly), time, and recipients.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Recipients receive a snapshot in email — no login required to view.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Custom Metrics &amp; Tables</h3>
        <div class="sub-card"><strong>Creating Custom Metrics (No-Code)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Settings → Custom Metrics → New Metric</span>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Use the <strong>No-Code Metric Builder</strong> — pick base metrics (Revenue, Spend, Orders) and operators (+, −, ÷, ×) to compose your own. Example: <code>(Revenue − COGs − Spend) ÷ Spend</code> for True ROAS.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Save → your metric is now selectable on every dashboard, table, and chart.</div></div>
        </div>
        <div class="sub-card"><strong>Adding Custom Columns to Attribution</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">On the Attribution page → columns icon → scroll to <strong>Custom Metrics</strong> → check the metrics you built.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">They appear inline alongside default columns. Sort by them like any other column.</div></div>
        </div>
        <div class="sub-card"><strong>Building from Templates</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">When creating a new dashboard, choose <strong>From Template</strong> → pick from prebuilt templates (Daily Standup, Creative Performance, Profit P&amp;L, etc.).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Templates land prefilled — adjust filters and add your custom metrics from there.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>SQL Editor &amp; Power Tools</h3>
        <div class="sub-card"><strong>Querying with the SQL Editor</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Sidebar → <strong>SQL Editor</strong> (Power User feature, may be permission-gated).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Write SQL against Triple Whale's data warehouse — includes orders, ad spend, customer events, and Pixel data tables.</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text">Save query results as a <strong>Custom Widget</strong> and embed it on a dashboard.</div></div>
        </div>
        <div class="sub-card"><strong>Build a Dashboard with Moby (Chat)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Open Moby → ask "Build me a dashboard for tracking new vs. returning customer ROAS by channel for the last 30 days."</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Moby drafts the dashboard widgets — review, then click <strong>Save to my dashboards</strong>. Iterate by chatting further ("now add a TikTok-only filter").</div></div>
        </div>
        <div class="sub-card"><strong>Dashboards for Stakeholders</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Build a stakeholder-facing dashboard with prose text blocks ("This week's wins", "Risks to monitor") between data widgets.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Schedule a Monday-morning email delivery to leadership — reuse the dashboard rather than rebuilding slides each week.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 9. MOBY AI & MOBY AGENTS -->
<div class="slide" id="sec-moby"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🤖 Moby AI & Moby Agents</h2><p class="subtitle">Conversational AI + autonomous agents — purpose-built for ecommerce.</p></div>
  <div class="slide-body">
    <div class="callout"><strong>💡 Moby vs. Agents — what's the difference?</strong> <strong>Moby Chat</strong> is your conversational interface — ask one-off questions, get instant answers. Think of it as an analyst on demand. <strong>Moby Agents</strong> are autonomous workflows that run continuously in the background, monitoring specific KPIs (creative fatigue, anomalies, performance trackers) and surfacing insights to Slack, email, or your dashboard. Together they cover both ad-hoc questions and always-on monitoring.</div>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Getting Started with Moby</h3>
        <div class="sub-card"><strong>Opening Moby Chat</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Moby</strong> (top of the nav). Opens a chat panel.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Type a question in plain English: "What was our ROAS by channel last week?" or "Compare new vs. returning customer AOV for the last 30 days."</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Moby responds with numbers, a chart, and a short narrative. Click <strong>📌 Pin to dashboard</strong> on any answer to save it.</div></div>
        </div>
        <div class="sub-card"><strong>Good Question Patterns</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Always include a <strong>time window</strong> ("last 7 days", "MTD", "Q4 2024 vs Q4 2023").</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Specify the <strong>dimension</strong> (by channel, by product, by campaign, by customer cohort).</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Ask follow-ups conversationally — Moby remembers context within the chat thread.</div></div>
          <div class="step-tip"><strong>💡</strong> If Moby's answer feels off, ask "Show me the underlying data" or "Which attribution model are you using?"</div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Working with Agents</h3>
        <div class="sub-card"><strong>The Agent Library</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Sidebar → <strong>Agents</strong>. <strong>My Agents</strong> = Agents already running for your shop. <strong>Agent Collection</strong> = prebuilt templates ready to deploy.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Browse templates (Creative Fatigue Detector, Performance Tracker, Anomaly Detector, Budget Reallocator) → click <strong>Use template</strong> to add to your shop.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Configure delivery: where the agent posts findings (Slack, email, mobile push, or in-app dashboard) and how often.</div></div>
        </div>
        <div class="sub-card"><strong>Building Your First Agent</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Agents → <strong>Build new Agent</strong> → describe what you want it to monitor in plain English.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Pick the <strong>data sources</strong> it should analyze (Pixel, Meta, Google, Klaviyo, etc.).</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Set <strong>analysis parameters</strong> — anomaly thresholds, KPIs, channels to monitor.</div></div>
          <div class="step"><div class="step-num amber">4</div><div class="step-text">Configure <strong>delivery &amp; workflow</strong> — frequency, format, recipient. Save and activate.</div></div>
          <div class="step-tip"><strong>💡</strong> Start simple. Build, test for a week, then refine. Agents are iterative.</div>
        </div>
        <div class="sub-card"><strong>Common Agent Use Cases</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><strong>Creative Fatigue:</strong> alerts when ad CTR drops vs. its 7-day baseline.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><strong>Spend Anomaly:</strong> flags days where ad spend swings &gt;X% vs. expected.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text"><strong>Daily Standup Brief:</strong> compiles yesterday's revenue, ROAS, and top movers into a Slack post each morning.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Advanced Agents &amp; Actions</h3>
        <div class="sub-card"><strong>Custom Logic with SQL &amp; Python</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">When building an Agent, switch to <strong>Advanced mode</strong> → write custom SQL or Python steps inside the agent's analysis pipeline.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Useful for layered logic — e.g. "find creatives where spend &gt; $500/day AND ROAS &lt; 1.5 AND impressions trended down 3 days in a row."</div></div>
        </div>
        <div class="sub-card"><strong>Agents That Take Action</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Some agents can <strong>execute actions</strong>, not just report — pause underperforming ads, sync audiences, send Klaviyo flows, etc.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">When configuring, choose <strong>Recommend</strong> (review-and-approve) or <strong>Auto-execute</strong>. Always start with Recommend until you trust the agent.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Auto-execution affects live ad accounts. Only enable after multiple successful Recommend cycles and with manager approval.</div>
        </div>
        <div class="sub-card"><strong>Moby for Forecasting &amp; Deep Dives</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Ask Moby: "Forecast our revenue for the next 6 months using our trailing 12 months." Moby runs a forecasting model and returns the chart + confidence interval.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">For larger questions, use Moby's <strong>Deep Dive</strong> mode — breaks one big prompt ("How should I prepare for BFCM?") into multi-step sub-analyses (channel mix, creative, audience).</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 10. INTERMEDIATE RESOURCES -->
<div class="slide" id="sec-intres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-intermediate">Intermediate</span></div><h2>🟡 Intermediate Training — Self-Paced Resources</h2><p class="subtitle">Optional but strongly recommended.</p></div>
  <div class="slide-body">
    <div class="card intermediate"><div class="card-title">Help Center — Attribution Dashboards Collection <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Deep documentation on customizing the Attribution dashboard, traffic rules, custom expenses, post-purchase survey, multi-shop attribution, and non-attributed conversions.</div><div class="card-meta"><strong>Format:</strong> Article series &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Attribution</span><span class="tag t4">Dashboards</span></div><a href="https://kb.triplewhale.com/en/collections/9751025-attribution-dashboards" target="_blank">→ Open Attribution Dashboards collection</a></div>
    <div class="card intermediate"><div class="card-title">Help Center — Creating Custom Metrics <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Step-by-step on building your own metrics with the No-Code Metric Builder — from True ROAS to contribution margin.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Metrics</span><span class="tag t4">No-Code</span></div><a href="https://kb.triplewhale.com/en/collections/3416093-getting-started" target="_blank">→ Find "Creating Custom Metrics" in Getting Started</a></div>
    <div class="card intermediate"><div class="card-title">Help Center — FAQ Collection <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Common platform questions: Benchmarks dashboard, mobile app, subscription order tags, "Not Set" attribution, integrations troubleshooting, exporting CSVs, and more.</div><div class="card-meta"><strong>Format:</strong> Article series &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">FAQ</span><span class="tag t4">Reference</span></div><a href="https://kb.triplewhale.com/en/collections/9742763-faq" target="_blank">→ Open FAQ collection</a></div>
    <div class="card intermediate"><div class="card-title">YouTube: Triple Whale Intermediate Tips <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">In-depth video tutorials covering attribution model selection, building custom dashboards, segments, and Sonar setup.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=triple+whale+attribution+dashboard+tutorial+2025" target="_blank">→ Search YouTube: "Triple Whale attribution dashboard tutorial 2025"</a></div>
    <div class="card intermediate"><div class="card-title">Help Center — Global Filters <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">How to use global filters across the Summary, Attribution, and Customers pages to slice every dashboard the same way.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Filters</span><span class="tag t4">Power User</span></div><a href="https://kb.triplewhale.com/en/" target="_blank">→ Find "Global Filters" in the Help Center</a></div>
  </div>
</div>

<!-- 11. ADVANCED RESOURCES -->
<div class="slide" id="sec-advres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-advanced">Advanced</span></div><h2>🔴 Advanced Training — Deep Mastery Resources</h2><p class="subtitle">Optional — for technical depth or analytics leadership roles.</p></div>
  <div class="slide-body">
    <div class="card advanced"><div class="card-title">Help Center — MMM (Marketing Mix Modeling) <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Learn how to set up and utilize Triple Whale's MMM to measure click and non-click channel impact, including TV, Amazon, and offline campaigns.</div><div class="card-meta"><strong>Format:</strong> Article series &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">MMM</span><span class="tag t4">Measurement</span></div><a href="https://kb.triplewhale.com/en/" target="_blank">→ Find the MMM collection in the Help Center</a></div>
    <div class="card advanced"><div class="card-title">Help Center — Incrementality Testing <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Configure holdout-style incrementality tests to measure true causal lift of a channel or campaign — beyond multi-touch attribution.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Incrementality</span><span class="tag t4">Testing</span></div><a href="https://kb.triplewhale.com/en/" target="_blank">→ Find the Incrementality collection in the Help Center</a></div>
    <div class="card advanced"><div class="card-title">Triple Whale Agents Masterclass — Advanced Modules <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">The latter half of the six-part Agents Masterclass: media buying optimization Agents, deep product/channel insights, and combining SQL + Python + conditional logic in custom Agents.</div><div class="card-meta"><strong>Format:</strong> Video series &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1 hr &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Agents</span><span class="tag t4">SQL/Python</span></div><a href="https://kb.triplewhale.com/en/articles/11407746-triple-whale-agents-masterclass" target="_blank">→ Open the Agents Masterclass</a></div>
    <div class="card advanced"><div class="card-title">Help Center — Triple Whale Labs <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Opt-in program for early access to features still in development. Useful for advanced users who want to test bleeding-edge functionality and influence the roadmap.</div><div class="card-meta"><strong>Format:</strong> Article series &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Labs</span><span class="tag t4">Beta</span></div><a href="https://kb.triplewhale.com/en/" target="_blank">→ Find the Triple Whale Labs collection in the Help Center</a></div>
    <div class="card advanced"><div class="card-title">YouTube: Triple Whale Advanced Attribution & Agents <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Advanced workflows — Total Impact vs. Triple Attribution decision-making, MMM interpretation, building agents with custom SQL, and integrating with data warehouses.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">YouTube</span><span class="tag t4">Power User</span></div><a href="https://www.youtube.com/results?search_query=triple+whale+moby+agents+advanced+2025" target="_blank">→ Search YouTube: "Triple Whale Moby Agents advanced 2025"</a></div>
  </div>
</div>

<!-- 12. LEARNING PATHS & SKILL VALIDATION -->
<div class="slide" id="sec-certs"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Learning Paths</span></div><h2>🏅 Learning Paths & Skill Validation</h2><p class="subtitle">Triple Whale doesn't issue formal certifications — but does offer structured learning tracks.</p></div>
  <div class="slide-body">
    <div class="callout" style="background:#fffbeb;border-left-color:#ca8a04"><strong style="color:#854d0e">💡 Optional Personal Investment:</strong> Unlike some platforms, Triple Whale does <strong>not</strong> currently issue formal verified certification badges. The Help Center, Agents Masterclass, and YouTube channel are <strong>free</strong> learning resources — no out-of-pocket fee is required to access them. The structured "tracks" listed below are recommended sequences for self-directed learning. If you'd like to formally validate your ecommerce analytics skills externally, third-party programs (e.g. Common Thread Collective's training, certain Shopify Partner Education courses, or general data analytics certifications) are <strong>not covered by InvenTel</strong> and remain a personal career-development investment.</div>
    <table class="cert-table"><thead><tr><th>Learning Track</th><th>Source</th><th>Skill Level</th><th>Est. Time</th></tr></thead><tbody>
      <tr><td><strong>Getting Started Track</strong> — pixel install, summary dashboard, custom metrics, ecommerce metrics</td><td>Triple Whale Help Center</td><td><span class="badge badge-beginner">Beginner</span></td><td>~3–4 hrs</td></tr>
      <tr><td><strong>Attribution Mastery Track</strong> — every attribution model, custom dashboards, traffic rules, post-purchase survey</td><td>Help Center — Attribution Collection</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~4–5 hrs</td></tr>
      <tr><td><strong>Sonar &amp; Activation Track</strong> — Sonar setup, audience syncing, CAPI integrations, exports</td><td>Help Center — FAQ + Settings docs</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~2–3 hrs</td></tr>
      <tr><td><strong>Agents Masterclass</strong> — six-part hands-on series (Beginner → Advanced)</td><td>Help Center — Masterclass article</td><td><span class="badge badge-advanced">Advanced</span></td><td>~2 hrs</td></tr>
      <tr><td><strong>MMM &amp; Incrementality Track</strong> — Marketing Mix Modeling and incrementality testing</td><td>Help Center — MMM + Incrementality</td><td><span class="badge badge-advanced">Advanced</span></td><td>~3–4 hrs</td></tr>
    </tbody></table>
    <p style="font-size:12px;color:#777;margin-top:10px">Browse all collections at <a href="https://kb.triplewhale.com" target="_blank">kb.triplewhale.com</a>. Completing the Beginner track satisfies the InvenTel mandatory training requirement.</p>
  </div>
</div>

<!-- 13. NEW HIRE CHECKLIST -->
<div class="checklist-section mandatory" id="cl-mandatory"><div class="checklist-head mandatory"><h2>✅ New Hire Onboarding Checklist</h2><div class="ch-sub">Complete all tasks within your first 30 days</div><span class="ch-badge">Mandatory · 30-Day Deadline</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📱 Mobile App (OPTIONAL)</div><ul class="checklist-items"><li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Download the Triple Whale mobile app <span class="ci-est">Optional</span></div><div class="ci-desc">iOS App Store or Google Play → Triple Whale → sign in with your account.</div></div></li></ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">⚠️ Multi-Workspace Access Verification (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Request workspace access list from direct report <span class="ci-est">~5 min</span></div><div class="ci-desc">Get the list of which Triple Whale workspaces you should access and your role in each.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Sign in to Triple Whale at app.triplewhale.com <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Verify access to all assigned workspaces <span class="ci-est">~15 min</span></div><div class="ci-desc">Check shop switcher, verify each workspace and permissions match your access list.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Follow up on any missing access <span class="ci-est">~10 min</span></div><div class="ci-desc">If workspaces or permissions don't match, contact direct report or HR Training Coordinator.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Set up profile photo and notification preferences <span class="ci-est">~5 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">🧭 Platform Navigation (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Learn the layout — sidebar, top bar, date range picker (Sec 4) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Practice setting date ranges and reading the Summary page (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📊🎯👥📈🤖 Feature Training (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Summary dashboard beginner walkthrough (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Verify the Triple Pixel status on each assigned workspace (Sec 6) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read the Attribution page using the Last Click model (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Explore the Customers page and LTV view (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Open Moby and ask 3 data questions (Sec 9) <span class="ci-est">~15 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📚 External Resources (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read Help Center: Track KPIs with the Summary Dashboard (Sec 2) <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read Help Center: Guide to Ecommerce Metrics (Sec 3) <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read Help Center: Understanding & Utilizing Attribution Models (Sec 3) <span class="ci-est">~45 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Watch YouTube Beginner Tutorial (Sec 3) <span class="ci-est">~45 min</span></div></div></li>
    </ul></div>
  </div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-mandatory" style="color:#166534">0 of 16 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-mandatory" style="background:#16a34a"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#166534" onclick="resetList('mandatory')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('mandatory')">📝 Take Quiz</button></div></div>
</div>

<!-- 14. INTERMEDIATE CHECKLIST -->
<div class="checklist-section intermediate" id="cl-intermediate"><div class="checklist-head intermediate"><h2>✅ Intermediate Learner Checklist</h2><div class="ch-sub">Self-paced — after mandatory training</div><span class="ch-badge">Self-Paced · Optional</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-intermediate">All Features Intermediate</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Pin custom metrics to the Summary page (Sec 5) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Set up Custom Expenses for shipping and COGs (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Compare Last Click vs. Total Impact for the same week (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Customize Attribution dashboard columns and export to CSV (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Build a customer segment with filters (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Sync a saved segment to Meta or Klaviyo (Sec 7) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Create a custom metric using the No-Code Metric Builder (Sec 8) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Build a custom dashboard from a template (Sec 8) <span class="ci-est">~25 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Activate a prebuilt Agent from the Agent Collection (Sec 9) <span class="ci-est">~15 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-intermediate" style="color:#854d0e">0 of 9 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-intermediate" style="background:#ca8a04"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#854d0e" onclick="resetList('intermediate')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('intermediate')">📝 Take Quiz</button></div></div>
</div>

<!-- 15. ADVANCED CHECKLIST -->
<div class="checklist-section advanced" id="cl-advanced"><div class="checklist-head advanced"><h2>✅ Advanced Learner Checklist</h2><div class="ch-sub">Optional — deep mastery</div><span class="ch-badge">Optional · Deep Mastery</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-advanced">All Features Advanced</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Generate a forecast in the Forecasting tool with confidence intervals (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Configure a Traffic Rule to override attribution logic (Sec 6) <span class="ci-est">~25 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Review MMM &amp; Incrementality reports for a campaign (Sec 6) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Configure a data export to BigQuery, Snowflake, or S3 (Sec 7) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Build a custom widget using the SQL Editor (Sec 8) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Build a custom Agent from scratch with delivery to Slack (Sec 9) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Use Moby Deep Dive for a multi-step strategic question (Sec 9) <span class="ci-est">~20 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-advanced" style="color:#991b1b">0 of 7 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-advanced" style="background:#991b1b"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#991b1b" onclick="resetList('advanced')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('advanced')">📝 Take Quiz</button></div></div>
</div>

<!-- 16. QUICK REFERENCE -->
<div class="slide" id="sec-qr"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Quick Reference</span></div><h2>🔗 Quick Reference — Platform Access & Help Centers</h2></div>
  <div class="slide-body"><div class="qr-grid">
    <div class="qr-card"><h4>🔐 Platform Access</h4><ul><li><a href="https://app.triplewhale.com" target="_blank">Triple Whale App Login</a></li><li><a href="https://kb.triplewhale.com" target="_blank">Triple Whale Help Center</a></li><li><a href="https://www.triplewhale.com" target="_blank">Triple Whale Marketing Site</a></li><li><a href="https://www.triplewhale.com/moby-ai" target="_blank">Moby AI Page</a></li><li><a href="https://www.triplewhale.com/moby-agents" target="_blank">Moby Agents Page</a></li></ul></div>
    <div class="qr-card"><h4>🎓 Help Center Collections</h4><ul><li><a href="https://kb.triplewhale.com/en/collections/3416093-getting-started" target="_blank">Getting Started</a></li><li><a href="https://kb.triplewhale.com/en/collections/9751025-attribution-dashboards" target="_blank">Attribution Dashboards</a></li><li><a href="https://kb.triplewhale.com/en/articles/5960333-understanding-and-utilizing-attribution-models" target="_blank">Attribution Models</a></li><li><a href="https://kb.triplewhale.com/en/articles/11407746-triple-whale-agents-masterclass" target="_blank">Agents Masterclass</a></li><li><a href="https://kb.triplewhale.com/en/collections/9742763-faq" target="_blank">FAQ</a></li></ul></div>
    <div class="qr-card"><h4>🏅 Learning Paths</h4><ul><li><a href="https://kb.triplewhale.com" target="_blank">Help Center (all collections)</a></li><li><a href="https://kb.triplewhale.com/en/articles/11407746-triple-whale-agents-masterclass" target="_blank">Agents Masterclass</a></li><li><a href="https://www.triplewhale.com/blog" target="_blank">Triple Whale Blog</a></li></ul></div>
    <div class="qr-card"><h4>🎬 YouTube</h4><ul><li><a href="https://www.youtube.com/results?search_query=triple+whale+tutorial+beginners+2025" target="_blank">Beginner Tutorial</a></li><li><a href="https://www.youtube.com/results?search_query=triple+whale+attribution+dashboard+tutorial+2025" target="_blank">Intermediate Attribution</a></li><li><a href="https://www.youtube.com/results?search_query=triple+whale+moby+agents+advanced+2025" target="_blank">Advanced Agents</a></li></ul></div>
  </div></div>
</div>

<!-- FINAL NOTE -->
<div class="final-note" id="sec-final">
  <p style="font-size:15px;font-weight:700;margin-bottom:10px">📌 Final Note — Triple Whale Training</p>
  <p style="margin-bottom:10px">All <strong>Beginner-level content</strong> is <strong>mandatory</strong> within your first <strong>30 days</strong>. Intermediate and Advanced training is self-paced.</p>
  <p style="margin-bottom:10px"><strong>Multi-Workspace Access:</strong> Since InvenTel manages multiple Triple Whale workspaces (one per brand), your first step is always to confirm your access list with your direct report. Do not assume which workspaces you need — verify, and escalate if anything is missing.</p>
  <p style="margin-bottom:10px">This deck is <strong>self-contained</strong> — every deep-dive includes complete step-by-step instructions. Click any section header to collapse it once you've completed it. External links and the Help Center are in the Quick Reference.</p>
  <p style="margin-bottom:10px">Use the <strong>New Hire Checklist</strong> to track progress and share with your manager.</p>
  <p style="margin-bottom:10px">For access, credentials, or training questions — reach out to the <strong>HR Training Coordinator who assisted you during onboarding</strong>.</p>
  <p style="margin-bottom:10px"><a href="https://kb.triplewhale.com" target="_blank">Triple Whale Help Center →</a></p>
  <p style="font-size:11px;opacity:.7;margin-top:14px">Last updated: April 6, 2025</p>
</div>

<!-- FLOATING NAV -->
<button class="float-nav-btn" onclick="toggleFloatNav()" title="Jump to section">📋</button>
<div class="float-nav-panel" id="float-nav">
  <div class="float-nav-hd">📋 Jump to Section</div>
  <ul class="float-nav-list">
    <li><a class="fnl-section" href="#sec-toc" onclick="closeNav()">📋 Table of Contents</a></li>
    <li><a class="fnl-section" href="#sec-overview" onclick="closeNav()">🐳 1. Platform Overview</a></li>
    <li><a class="fnl-section" href="#sec-hub" onclick="closeNav()">🎓 2. Official Learning Hub</a></li>
    <li><a class="fnl-section" href="#sec-begres" onclick="closeNav()">🟢 3. Beginner Resources</a></li>
    <li><a class="fnl-section" href="#sec-start" onclick="closeNav()">🟢 4. Getting Started</a></li>
    <li><a class="fnl-section" href="#sec-summary" onclick="closeNav()">📊 5. Summary Dashboard & KPIs</a></li>
    <li><a class="fnl-section" href="#sec-pixel" onclick="closeNav()">🎯 6. Triple Pixel & Attribution</a></li>
    <li><a class="fnl-section" href="#sec-customers" onclick="closeNav()">👥 7. Customers & Sonar</a></li>
    <li><a class="fnl-section" href="#sec-dashboards" onclick="closeNav()">📈 8. Custom Dashboards & Metrics</a></li>
    <li><a class="fnl-section" href="#sec-moby" onclick="closeNav()">🤖 9. Moby AI & Agents</a></li>
    <li><a class="fnl-section" href="#sec-intres" onclick="closeNav()">🟡 10. Intermediate Resources</a></li>
    <li><a class="fnl-section" href="#sec-advres" onclick="closeNav()">🔴 11. Advanced Resources</a></li>
    <li><a class="fnl-section" href="#sec-certs" onclick="closeNav()">🏅 12. Learning Paths</a></li>
    <li><a class="fnl-section" href="#cl-mandatory" onclick="closeNav()">✅ 13. New Hire Checklist</a></li>
    <li><a class="fnl-section" href="#cl-intermediate" onclick="closeNav()">✅ 14. Intermediate Checklist</a></li>
    <li><a class="fnl-section" href="#cl-advanced" onclick="closeNav()">✅ 15. Advanced Checklist</a></li>
    <li><a class="fnl-section" href="#sec-qr" onclick="closeNav()">🔗 16. Quick Reference</a></li>
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
var TOTALS={mandatory:16,intermediate:9,advanced:7};
function tick(el,s){el.classList.toggle('checked');updateBar(s);}
function updateBar(s){var c=document.getElementById('cl-'+s),ck=c.querySelectorAll('.cb.checked:not([data-optional])').length,t=TOTALS[s],p=t>0?Math.round((ck/t)*100):0;document.getElementById('lbl-'+s).textContent=ck+' of '+t+' completed';document.getElementById('bar-'+s).style.width=p+'%';}
function resetList(s){document.getElementById('cl-'+s).querySelectorAll('.cb.checked').forEach(function(cb){cb.classList.remove('checked');});updateBar(s);}

/* QUIZ DATA — 25 per level, pulls 20 */
var qSection,qIndex,qScore,qAnswered,qQuestions;
var QUIZ={
mandatory:{title:'New Hire Onboarding',sub:'Mandatory · 20 Questions · Pass = 70%',hd:'q-mandatory',track:'New Hire Onboarding — Triple Whale',qs:20,questions:[
{q:'What is the FIRST thing you should do on your first day with Triple Whale?',opts:['Start building dashboards','Request your workspace access list from your direct report','Install the Triple Pixel','Train Moby AI'],ans:1},
{q:'What is the URL for the Triple Whale app?',opts:['triplewhale.com','app.triplewhale.com','login.triplewhale.com','admin.triplewhale.com'],ans:1},
{q:'How do you switch between multiple brand workspaces?',opts:['Log out and back in','Use the shop switcher in the top-left','Open different browsers','Clear cookies'],ans:1},
{q:'What does the Triple Pixel do?',opts:['Replaces Shopify checkout','Provides first-party tracking that stitches the customer journey across devices','Sends marketing emails','Manages product inventory'],ans:1},
{q:'Where is your daily landing page in Triple Whale?',opts:['Settings page','Summary page','Customers page','Pixel page'],ans:1},
{q:'Why is the date range picker so important?',opts:['It is decorative','Most pages use it globally — wrong date = wrong numbers','It only changes color schemes','It controls login sessions'],ans:1},
{q:'What is the default date range on the Summary page?',opts:['Today','Yesterday','Last 30 days','Last year'],ans:1},
{q:'What does the 📌 pin icon do on a metric tile?',opts:['Deletes the metric','Locks it to the top of your Summary for quick access','Shares the metric','Exports the metric'],ans:1},
{q:'Which attribution model is the default in Triple Whale?',opts:['Total Impact','Last Click','Triple Attribution','Linear'],ans:1},
{q:'What does "Not Set" mean on the Attribution page?',opts:['No orders happened','Triple Whale tracked the order but could not tie it to a marketing source (usually missing UTMs)','Pixel is broken','Customer cancelled'],ans:1},
{q:'What does ROAS stand for?',opts:['Rate Of Advertising Spend','Return On Ad Spend','Revenue On Ad Sales','Ratio Of Ads Sent'],ans:1},
{q:'What is MER?',opts:['Marketing Efficiency Ratio','Monthly Earnings Report','Maximum Engagement Rate','Mobile Email Rate'],ans:0},
{q:'How do you open Moby?',opts:['Settings → AI','Click Moby in the left sidebar','Right-click any chart','Top-right profile menu'],ans:1},
{q:'What is Moby?',opts:['A third-party app','The conversational AI built into Triple Whale that answers data questions','A shipping carrier','A payment method'],ans:1},
{q:'What is Sonar at a high level?',opts:['Email tool','First-party data activation that sends enriched data back to Meta, Klaviyo, and other platforms','Theme editor','Shipping API'],ans:1},
{q:'Where do you check your assigned permissions in Triple Whale?',opts:['Home dashboard','Settings → Users & Permissions → find your name','Pixel page','Moby chat'],ans:1},
{q:'What should you do if a workspace is missing from your shop switcher?',opts:['Create a new account','Contact your direct report immediately','Ask a coworker to add you','Wait several days'],ans:1},
{q:'Which of these is shown in the Summary tiles by default?',opts:['Theme code','Net Profit, Total Sales, Ad Spend, ROAS, MER, AOV','Customer phone numbers','Product inventory'],ans:1},
{q:'What does the Customers page show?',opts:['Only customer addresses','LTV cohorts, repeat purchase rate, time between orders, customer journey','Order details only','Theme settings'],ans:1},
{q:'What is the Triple Whale Help Center URL?',opts:['help.triplewhale.com','kb.triplewhale.com','docs.triplewhale.com','support.triplewhale.com'],ans:1},
{q:'How do you verify the Triple Pixel is healthy?',opts:['Customers page','Settings → Pixel Settings → check the Pixel Status indicator','Moby chat','Reset the workspace'],ans:1},
{q:'What is a Post-Purchase Survey (PPS) used for?',opts:['Customer support tickets','Asking "How did you hear about us?" to enrich attribution','Inventory tracking','Discount codes'],ans:1},
{q:'What does AOV stand for?',opts:['Average Order Value','Annual Online Volume','Aggregate Online Variance','Audit Order Verification'],ans:0},
{q:'Who should you contact if you have access issues?',opts:['Triple Whale support directly','Your direct report or the HR Training Coordinator','A coworker','Shopify support'],ans:1},
{q:'What is one good practice when asking Moby a data question?',opts:['Be vague','Always include a time window and a dimension (channel, product, etc.)','Use only one word','Type in all caps'],ans:1}
]},
intermediate:{title:'Intermediate Path',sub:'Intermediate · 20 Questions · Pass = 70%',hd:'q-intermediate',track:'Intermediate — Triple Whale',qs:20,questions:[
{q:'Why should you NOT use Triple Attribution for financial reporting?',opts:['It is too slow','Each platform receives 100% credit so total revenue exceeds actual revenue','It is broken','It costs extra'],ans:1},
{q:'Which attribution models reconcile to your actual store revenue?',opts:['Triple Attribution only','Total Impact, Linear (All), and Clicks & Deterministic Views','First Click only','None of them'],ans:1},
{q:'What is Total Impact attribution best for?',opts:['Platform-level optimization','A holistic view of every touchpoint using first-party + zero-party data','Counting refunds','Pixel installation'],ans:1},
{q:'What does Clicks & Deterministic Views (C&DV) combine?',opts:['Only clicks','First-party clicks plus verified view data from supported platforms','Only views','Email opens'],ans:1},
{q:'Which platforms participate in C&DV view-through tracking?',opts:['All platforms','Meta, TikTok (beta), and Pinterest','Google only','Klaviyo only'],ans:1},
{q:'How do you customize columns on the Attribution dashboard?',opts:['Cannot be customized','Click the columns icon → check/uncheck columns → drag to reorder','Edit the URL','Contact support'],ans:1},
{q:'How do you export Attribution data?',opts:['Cannot export','Top-right of any Attribution dashboard → Export → CSV','Email a screenshot','Print to PDF only'],ans:1},
{q:'How do you set up Custom Expenses?',opts:['Settings → Custom Expenses → add fixed or variable expenses','Cannot be done','Customers → Expenses','Pixel page'],ans:0},
{q:'Why are Custom Expenses important?',opts:['They are decorative','They feed Net Profit so the P&L reflects real costs (shipping, COGs, app fees)','They control discounts','They install the pixel'],ans:1},
{q:'What is a customer segment in Triple Whale?',opts:['A team channel','A saved customer group built with filters that auto-refreshes','A discount type','A theme section'],ans:1},
{q:'Example filter for a high-value-customer segment?',opts:['name contains a','orders_count >= 3 AND lifetime_value > 200','random','price = 0'],ans:1},
{q:'What does Audience Syncing do?',opts:['Nothing useful','Pushes a saved segment as a Customer List to Meta, TikTok, Pinterest, Klaviyo, or Yotpo','Backs up data','Logs you out'],ans:1},
{q:'What is Sonar at a deeper level?',opts:['A reporting feature only','A first-party data activation layer that powers CAPI, audience sync, and recovery flows','An attribution model','A pricing tier'],ans:1},
{q:'How do you create a custom metric without code?',opts:['You cannot','Settings → Custom Metrics → use the No-Code Metric Builder with base metrics + operators','SQL only','Edit a JSON file'],ans:1},
{q:'How do you build a dashboard in Triple Whale?',opts:['Cannot build dashboards','Sidebar → Dashboards → New Dashboard → drag-and-drop widgets','Only by ticket','Shopify only'],ans:1},
{q:'How do you schedule a dashboard email?',opts:['Cannot schedule','Open the dashboard → Schedule → set frequency and recipients','Use Outlook','Print and mail'],ans:1},
{q:'What is the Benchmarks dashboard?',opts:['Customer list','See how your metrics (ROAS, CPA, CPC) compare to industry peers','Order history','Inventory'],ans:1},
{q:'What is the Multi-Shop Dashboard for?',opts:['Single store only','A unified portfolio view across multiple brand workspaces','Theme editing','Customer service'],ans:1},
{q:'How can you see how often a metric was on/off in a date range?',opts:['Cannot','Use the compare toggle in the date range picker','Type into Moby only','Print reports'],ans:1},
{q:'What is the role of the Forecasting tool?',opts:['It is a calendar','Predicts future metrics (revenue, customers, ad spend) using seasonal/linear models with confidence intervals','Email tool','Theme tool'],ans:1},
{q:'What does the Agent Library "Agent Collection" contain?',opts:['Customer agents','Prebuilt Agent templates ready to deploy','Spam filters','Backups'],ans:1},
{q:'How do you activate a prebuilt agent?',opts:['Email support','Browse Agents → Use template → configure delivery → activate','Edit code','Cannot activate prebuilt agents'],ans:1},
{q:'How can you ask Moby to build a dashboard?',opts:['Cannot — agents only','Just chat: "Build me a dashboard for X" → Moby drafts widgets → Save','Only via SQL','Phone Triple Whale'],ans:1},
{q:'What is a "filter preset"?',opts:['A theme color','A saved combination of global filters for one-click reuse','Email signature','Discount code'],ans:1},
{q:'What does the External Revenue import allow you to add?',opts:['Only Shopify orders','Aggregate non-order revenue (retail, wholesale, marketplace, offline) via CSV','Customer reviews','Theme files'],ans:1}
]},
advanced:{title:'Advanced Mastery',sub:'Advanced · 20 Questions · Pass = 70%',hd:'q-advanced',track:'Advanced Mastery — Triple Whale',qs:20,questions:[
{q:'What is a Traffic Rule?',opts:['A spam filter','A custom rule that overrides default attribution logic for specific UTMs or sources','A pricing rule','A theme rule'],ans:1},
{q:'Why be cautious with Traffic Rules?',opts:['They are slow','They affect historical attribution — coordinate with the data lead before changing','They cost extra money','They never work'],ans:1},
{q:'What is MMM (Marketing Mix Modeling)?',opts:['A discount type','A statistical method that measures click and non-click channel impact (TV, Amazon, OOH) on revenue','An attribution dashboard','A segment type'],ans:1},
{q:'What does Incrementality testing measure?',opts:['Color contrast','True causal lift of a channel using holdout-style tests','Theme speed','Pixel install time'],ans:1},
{q:'Best measurement approach for a defensible analysis story?',opts:['Triple Attribution only','Combine MMM + Incrementality + multi-touch attribution','Last Click only','Survey only'],ans:1},
{q:'Where can you query Triple Whale data with SQL?',opts:['Cannot','Sidebar → SQL Editor (may be permission-gated)','Customers page','Pixel page'],ans:1},
{q:'What is Moby Deep Dive mode?',opts:['Theme editor','Breaks one big strategic prompt into multi-step sub-analyses','Customer chat','Image generator'],ans:1},
{q:'Sonar CAPI sends what to Meta?',opts:['Themes','Server-side conversion events to restore tracking lost to iOS privacy','Discounts','Photos'],ans:1},
{q:'What is the risk if another tool already runs Meta CAPI?',opts:['No risk','You may send duplicate standard events through Sonar — leave standard events unchecked','Pixel breaks','Account deleted'],ans:1},
{q:'What is the Meta Attribution Passback integration?',opts:['Standard CAPI','Shares Triple Whale first-party attribution back to Meta to fine-tune campaign optimization','A blog feature','Customer feedback'],ans:1},
{q:'Where do you configure data exports to BigQuery / Snowflake / S3?',opts:['Cannot export','Settings → Data Exports → centralized in-app page','Customers page','Moby chat'],ans:1},
{q:'What does Reverse ETL refer to in Triple Whale context?',opts:['Importing data','Pushing Triple Whale data out to a data warehouse','Deleting data','A theme tool'],ans:1},
{q:'When building an Agent, "Advanced mode" lets you write what?',opts:['Themes only','Custom SQL or Python steps in the analysis pipeline','Plain text only','Nothing extra'],ans:1},
{q:'Some Agents can take action — what is the safe default?',opts:['Auto-execute','Recommend (review-and-approve) until you trust the agent','Off','Random'],ans:1},
{q:'Why use Recommend before Auto-execute on an Agent?',opts:['No reason','Auto-execution affects live ad accounts — start in Recommend until proven trustworthy','It is faster','Required by law'],ans:1},
{q:'What is the role of third-party PPS tools (Kno, Fairing)?',opts:['Replace Triple Whale','Capture survey responses that map to channels and enhance Pixel attribution for unattributed orders','Theme builders','Send invoices'],ans:1},
{q:'What is Triple Whale Labs?',opts:['A pricing tier','An opt-in program for early access to features still in development','Customer support','Free trial'],ans:1},
{q:'Where does the Multi-Shop Dashboard get its value?',opts:['Single store','Compare results across platforms and stores; drill into product & shipping side-by-side','Email design','Inventory only'],ans:1},
{q:'What is the difference between Moby Chat and Moby Agents?',opts:['Same thing','Chat = on-demand conversational answers; Agents = always-on autonomous monitoring','Chat is paid; Agents are free','Agents only run on mobile'],ans:1},
{q:'When forecasting, what does the confidence interval band tell you?',opts:['Color preference','How much uncertainty exists — wider band = more uncertainty','Page speed','Customer count'],ans:1},
{q:'Which of these is NOT a Triple Whale attribution model?',opts:['Last Click','Total Impact','Random Assignment','Clicks & Deterministic Views'],ans:2},
{q:'What is a good agent example for ad creative monitoring?',opts:['None exist','Creative Fatigue Detector — alerts when CTR drops vs. its 7-day baseline','Theme picker','Refund agent'],ans:1},
{q:'Best practice for Moby AI output?',opts:['Trust everything blindly','Validate critical numbers (especially attribution model used) before acting on them','Ignore output','Only use mobile'],ans:1},
{q:'Why is the Triple Pixel a "first-party" tracker?',opts:['It is owned by Google','It runs on your own domain and is resilient to ad-platform tracking loss (e.g. iOS 14.5)','It is free','It is faster than CSS'],ans:1},
{q:'For long-consideration products, which attribution lens reveals assisted conversions ignored by last-click?',opts:['First Click only','Total Impact (or C&DV) — multi-touch models','Triple Attribution','None'],ans:1}
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
</body>
</html>
