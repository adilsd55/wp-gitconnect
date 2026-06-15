<?php /* Template Name: Recharge Training */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>InvenTel — Recharge Training (Self-Contained) v3.1</title>
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
      <div class="header-h1">🔁 Recharge — Self-Contained Training Guide</div>
      <div class="header-subtitle">Complete step-by-step training for the Recharge subscriptions platform — Customers, Subscriptions, Products & Plans, Customer Portal, Notifications, Analytics, Cancellation Prevention & RechargeAI — click any section header to collapse/expand</div>
    </div>
    <div class="header-meta">All Levels (Beginner → Advanced)<br>Platform: Recharge (Shopify App)<br>Format: Self-Contained / Standalone<br><span style="color:#fcd9b6;font-weight:700">v3.1 — Search Bar Edition</span></div>
  </div>
</div>
<div class="stat-row">
  <div class="stat-item"><span class="stat-val">8</span><span class="stat-lbl">Core Areas</span></div>
  <div class="stat-item"><span class="stat-val">16+</span><span class="stat-lbl">Training Sections</span></div>
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Skill Levels</span></div>
  <div class="stat-item"><span class="stat-val">30 Days</span><span class="stat-lbl">Mandatory Window</span></div>
  <div class="stat-item"><span class="stat-val">RechargeAI</span><span class="stat-lbl">Built-in AI Insights</span></div>
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
      <div class="toc-item" onclick="goTo('sec-overview')">1. Platform Overview<span>What Recharge is + multi-store context</span></div>
      <div class="toc-item" onclick="goTo('sec-hub')">2. Official Learning Hub<span>Recharge Help Center + Merchant HQ</span></div>
      <div class="toc-item" onclick="goTo('sec-begres')">3. Beginner Training Resources<span>Mandatory — external resources</span></div>
      <div class="toc-item" onclick="goTo('sec-start')">4. Getting Started — First Day Setup<span>Multi-store access verification</span></div>
      <div class="toc-item" onclick="goTo('sec-customers')">5. Customers & Subscriptions Deep Dive<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-products')">6. Products & Subscription Plans<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-portal')">7. Customer Portal & Notifications<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-analytics')">8. Analytics & Churn Prevention<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-ai')">9. RechargeAI & Automation<span>AI insights + flow templates</span></div>
      <div class="toc-item" onclick="goTo('sec-intres')">10. Intermediate Resources<span>Self-paced, optional links</span></div>
      <div class="toc-item" onclick="goTo('sec-advres')">11. Advanced Resources<span>Optional deep mastery links</span></div>
      <div class="toc-item" onclick="goTo('sec-certs')">12. Training Courses<span>Recharge in-platform courses</span></div>
      <div class="toc-item" onclick="goTo('cl-mandatory')">13. New Hire Checklist<span>Interactive — mandatory</span></div>
      <div class="toc-item" onclick="goTo('cl-intermediate')">14. Intermediate Checklist<span>Interactive — self-paced</span></div>
      <div class="toc-item" onclick="goTo('cl-advanced')">15. Advanced Checklist<span>Interactive — mastery</span></div>
      <div class="toc-item" onclick="goTo('sec-qr')">16. Quick Reference + Final Note<span>Platform URLs + help centers</span></div>
    </div>
  </div>
</div>

<!-- 1. PLATFORM OVERVIEW -->
<div class="slide" id="sec-overview"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Section 1</span></div><h2>🔁 What is Recharge?</h2><p class="subtitle">The subscriptions platform powering InvenTel's recurring revenue.</p></div>
  <div class="slide-body">
    <p style="font-size:13px;color:#5c5c5c;margin-bottom:14px">Recharge is InvenTel's subscriptions management platform. It is a Shopify app that handles every part of recurring revenue — subscription plans, customer self-service portals, recurring billing, dunning (failed-payment recovery), notifications, analytics, and cancellation prevention. Recharge installs on top of Shopify and works in tandem with the Shopify admin: products live in Shopify, subscription rules and subscriber records live in Recharge.</p>
    <div class="callout"><strong>⚠️ Multi-Store Environment:</strong> Recharge is installed per Shopify store. Since InvenTel runs <strong>multiple Shopify stores across different brands</strong>, each store has its own Recharge merchant portal. You may have access to all of them or just a few, depending on your role. <strong>On your first day, you must request a list from your direct report</strong> of which brand Recharge portals you have been added to and what permissions you should have. Verify everything matches — if not, follow up immediately with your direct report or the HR Training Coordinator.</div>
    <div class="apps-grid"><span class="app-chip">👥 Customers</span><span class="app-chip">🔁 Subscriptions</span><span class="app-chip">📦 Orders</span><span class="app-chip">🏷️ Products & Plans</span><span class="app-chip">🛒 Customer Portal</span><span class="app-chip">✉️ Notifications</span><span class="app-chip">📊 Analytics</span><span class="app-chip">🛡️ Churn Tools</span><span class="app-chip">🤖 RechargeAI</span></div>
    <div class="platform-url"><strong>Recharge Merchant Portal:</strong> <a href="https://app.rechargeapps.com" target="_blank">app.rechargeapps.com</a><br><strong>Recharge Help Center:</strong> <a href="https://support.getrecharge.com/hc/en-us" target="_blank">support.getrecharge.com</a><br><strong>Merchant HQ:</strong> <a href="https://getrecharge.com/merchant-hq/" target="_blank">getrecharge.com/merchant-hq</a><br><strong>Developer Hub:</strong> <a href="https://docs.getrecharge.com" target="_blank">docs.getrecharge.com</a></div>
    <div class="callout"><strong>💡 How it all connects:</strong> A customer subscribes on the Shopify storefront via Recharge's subscription widget. Recharge stores the subscription record, schedules the next charge, processes recurring payments, and creates a corresponding order back in Shopify on each renewal. The customer manages their subscription through the Recharge customer portal. You — as a merchant team member — manage everything from the Recharge merchant portal.</div>
  </div>
</div>

<!-- 2. OFFICIAL LEARNING HUB -->
<div class="slide" id="sec-hub"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official Recharge</span></div><h2>🎓 Official Learning Hub — Recharge Help Center & Merchant HQ</h2><p class="subtitle">Beginner-level resources are MANDATORY within 30 days.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Recharge Help Center <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official</span></div><div class="card-desc">Recharge's primary documentation hub — step-by-step articles for every feature, from installation to subscription plans, customer portal, notifications, analytics, and churn tools. The Recharge Help Center also hosts in-context training courses that you can take alongside the documentation.</div><div class="card-meta"><strong>Format:</strong> Articles + Courses &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">All Features</span><span class="tag t2">Reference</span></div><a href="https://support.getrecharge.com/hc/en-us" target="_blank">→ Visit the Recharge Help Center</a></div>
    <div class="card"><div class="card-title">Merchant HQ — Resource Hub <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-academy">Recharge Official</span></div><div class="card-desc">Recharge's curated resource hub for merchants. Contains step-by-step guidance for managing and growing a subscription business, plus quick links to the merchant portal, Help Center, Developer Hub, integrations directory, and partner agencies.</div><div class="card-meta"><strong>Format:</strong> Resource portal &nbsp;|&nbsp; <strong>Level:</strong> Beginner–Advanced</div><div class="tag-row"><span class="tag t2">Resource Hub</span><span class="tag t1">Learning Paths</span><span class="tag t4">Official</span></div><a href="https://getrecharge.com/merchant-hq/" target="_blank">→ Open Merchant HQ</a></div>
    <div class="card"><div class="card-title">Installing Recharge — Getting Started Guide <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official getting-started article walking through the in-app onboarding experience: store details, product setup, and publishing the subscription widget on your Shopify theme.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">Setup</span></div><a href="https://support.getrecharge.com/hc/en-us/articles/7292531612823-Installing-Recharge" target="_blank">→ Read "Installing Recharge"</a></div>
  </div>
</div>

<!-- 3. BEGINNER TRAINING RESOURCES -->
<div class="slide" id="sec-begres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory — Complete Within 30 Days</span></div><h2>🟢 Beginner Training — Mandatory Resources</h2><p class="subtitle">Every team member must complete these before the 30-day mark.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Help Center — Understanding the Merchant Portal <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Walkthrough of the merchant portal layout — left sidebar navigation, Home dashboard, Customers, Orders, Products, Discounts, Notifications, Analytics, Churn tools, Storefront, Tools and apps, and Settings.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">Navigation</span></div><a href="https://support.getrecharge.com/hc/en-us/articles/4420704417687-Understanding-the-merchant-portal" target="_blank">→ Read "Understanding the merchant portal"</a></div>
    <div class="card"><div class="card-title">Help Center — Subscription Management <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Core skills for adding and managing customers, processing and modifying subscription orders, skipping charges, swapping products, and updating billing or shipping details.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1 hr &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Subscriptions</span><span class="tag t4">Customers</span></div><a href="https://support.getrecharge.com/hc/en-us" target="_blank">→ Find "Subscription Management" in the Help Center</a></div>
    <div class="card"><div class="card-title">Help Center — Understanding the Customer Portal <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">How the subscriber-facing portal works, including the Affinity and Unity themes, login settings (passwordless, Multipass), and which actions customers can self-serve.</div><div class="card-meta"><strong>Format:</strong> Article + Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Customer Portal</span><span class="tag t4">Self-Service</span></div><a href="https://support.getrecharge.com/hc/en-us/articles/360008683274-Understanding-the-customer-portal" target="_blank">→ Read "Understanding the customer portal"</a></div>
    <div class="card"><div class="card-title">YouTube: Recharge Subscriptions Tutorial for Beginners <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Visual walkthrough of the merchant portal and customer portal. Best for visual learners who want to see every click.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">YouTube</span><span class="tag t4">Video</span><span class="tag t2">Walkthrough</span></div><a href="https://www.youtube.com/results?search_query=recharge+subscriptions+shopify+tutorial+for+beginners+2025" target="_blank">→ Search YouTube: "Recharge subscriptions Shopify tutorial for beginners 2025"</a></div>
    <div class="card"><div class="card-title">Help Center — Training Your Customer Support Team <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Recharge's official training checklist for support agents who handle subscriber requests — billing/shipping updates, skipping orders, swaps, refunds, cancellations, and reactivations.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Support</span><span class="tag t4">Subscribers</span></div><a href="https://support.getrecharge.com/hc/en-us/articles/9829462863767-Training-your-customer-support-team" target="_blank">→ Read "Training your customer support team"</a></div>
  </div>
</div>

<!-- 4. GETTING STARTED -->
<div class="slide" id="sec-start"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory</span></div><h2>🟢 Getting Started — Your First Day with Recharge</h2><p class="subtitle">Complete these steps in order to verify your access and learn the merchant portal layout.</p></div>
  <div class="slide-body">
    <div class="steps-box"><h4>⚠️ Step 0 — Confirm Your Recharge Access List</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Request your access list</strong> from your direct report. Ask: "Which brand Recharge portals have I been added to, and what role/permissions should I have in each?"</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">You should receive a list that includes: <strong>store names</strong>, <strong>your role</strong> (e.g., Account Owner, Manager, or specific custom permissions), and <strong>which sections</strong> you need access to (Customers, Orders, Products, Analytics, Churn tools, Settings, etc.).</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Keep this list — you will verify each store in the next steps.</div></div>
      <div class="step-warning"><strong>⚠️ Critical:</strong> If you do not have this list, stop and request it before proceeding. Do not assume which brand portals you should have access to. If your direct report is unavailable, contact the HR Training Coordinator who assisted you during onboarding.</div>
    </div>
    <div class="steps-box"><h4>🔐 Sign In to Recharge</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Open a browser and go to <a href="https://app.rechargeapps.com" target="_blank">app.rechargeapps.com</a>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Enter the <strong>email address</strong> provided by HR or your direct report → click <strong>Continue</strong>.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">If this is your first login, you should have received an invitation email — click the link in that email to set your password.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">Complete <strong>two-factor authentication</strong> if prompted (recommended: authenticator app).</div></div>
      <div class="step-tip"><strong>💡 Tip:</strong> Some teams sign in to Recharge directly through the Shopify admin → Apps → Recharge. That works too — it opens the same merchant portal in an embedded view.</div>
    </div>
    <div class="steps-box"><h4>✅ Verify Access to All Assigned Brand Portals</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">In the merchant portal, click your <strong>store name</strong> in the top-right corner → use the <strong>store switcher</strong> to see every Recharge portal you can access.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Compare what you see against the access list from your direct report. For <strong>each portal</strong>, click into it and confirm you can see the sections you need: Customers, Orders, Products, Analytics, etc.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Check your permissions: <span class="step-nav">Settings → Users and permissions</span> → find your name → review your assigned role(s).</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">If any brand portal is <strong>missing</strong> or your permissions don't match, contact your <strong>direct report</strong> immediately. If unresolved, escalate to the HR Training Coordinator.</div></div>
      <div class="step-warning"><strong>⚠️</strong> Do NOT request access yourself or ask other team members to add you. All access must be granted through your direct report or the account owner.</div>
    </div>
    <div class="steps-box"><h4>🧭 Learn the Merchant Portal Layout</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Left sidebar:</strong> Your main navigation. Contains Home, Customers, Orders, Products, Discounts, Notifications, Analytics, Churn tools, Storefront, Tools and apps, and Settings. Some sections expand to reveal sub-pages.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Home dashboard:</strong> Your landing page after login. Shows store stats (subscribers, MRR, upcoming charges) and announcement banners.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Top-right:</strong> Store switcher (if you have multiple portals), notifications bell, help menu (Get help, Browse guides, Product updates, Roadmap), and your profile.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text"><strong>Settings (bottom-left):</strong> Store settings, payments, taxes, shipping, notifications, users and permissions, integrations.</div></div>
      <div class="step-tip"><strong>💡</strong> Take Recharge's in-Help-Center course "Adjusting customer portal settings" before touching subscriber-facing settings. It's the fastest way to learn what each toggle does without breaking anything live.</div>
    </div>
    <div class="steps-box"><h4>👤 Set Up Your Profile</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Click your profile icon in the top-right → <strong>Account settings</strong>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Verify your <strong>name</strong> and <strong>email</strong> are correct. Set your <strong>preferred timezone</strong> — this controls how charge dates and analytics windows display.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Enable <strong>two-factor authentication</strong> if you haven't already.</div></div>
    </div>
  </div>
</div>

<!-- 5. CUSTOMERS & SUBSCRIPTIONS DEEP DIVE -->
<div class="slide" id="sec-customers"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>👥 Core Feature Deep Dive — Customers & Subscriptions</h2><p class="subtitle">Complete step-by-step instructions at every level.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Subscriber Basics</h3>
        <div class="sub-card"><strong>Finding a Subscriber</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Customers</strong> → <strong>Customers</strong>. The list shows every subscriber with status, MRR, and last charge date.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Use the search bar at the top to find by <strong>name</strong>, <strong>email</strong>, or <strong>order number</strong>.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Click a customer → opens <strong>Customer Details</strong> with their subscriptions, upcoming charges, payment method, addresses, and order history.</div></div>
        </div>
        <div class="sub-card"><strong>Skip a Charge</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open the customer → find the upcoming charge under <strong>Upcoming Orders</strong>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click the upcoming order → <strong>Skip</strong>. The next charge moves to the following scheduled date.</div></div>
          <div class="step-tip"><strong>💡</strong> "Skip" only moves a single charge forward. To pause indefinitely, use <strong>Pause subscription</strong> on the subscription itself.</div>
        </div>
        <div class="sub-card"><strong>Swap a Product Mid-Subscription</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open the subscription → <strong>Swap product</strong>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Pick the new product/variant from the available list → confirm.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">The new product applies starting with the next scheduled charge.</div></div>
        </div>
        <div class="sub-card"><strong>Change Frequency</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open the subscription → <strong>Edit frequency</strong> → choose a new interval (e.g., 30 days, 60 days).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Save. The next charge date recalculates from the last successful charge.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Subscriber Management</h3>
        <div class="sub-card"><strong>Update Billing & Shipping</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Open the customer → <strong>Payment methods</strong> → choose the existing card or <strong>Add new payment method</strong>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">For shipping: <strong>Addresses</strong> → edit existing or <strong>Add address</strong>. Each subscription is tied to an address — make sure the right one is assigned to each subscription.</div></div>
          <div class="step-tip"><strong>💡</strong> When the subscriber updates their card or address themselves through the customer portal, those changes sync automatically — no manual update needed.</div>
        </div>
        <div class="sub-card"><strong>Apply a One-Off Discount</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Open the customer → click the <strong>upcoming order</strong> you want to discount.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><strong>Apply discount</strong> → choose an existing discount code or create a one-off → save.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Confirm the discount appears on the order line. It will only apply to that specific upcoming charge.</div></div>
        </div>
        <div class="sub-card"><strong>View Activity & Notes</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Open the customer → <strong>Activity</strong> tab — every change to that customer is logged: charges, address updates, swaps, skips, discounts, support actions.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Add an internal <strong>Note</strong> to the customer for context (e.g., "VIP — call before cancelling"). Notes are visible to staff only.</div></div>
        </div>
        <div class="sub-card"><strong>Pause vs. Cancel</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><strong>Pause:</strong> stops billing without ending the subscription. The customer keeps their plan and history.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><strong>Cancel:</strong> ends the subscription. To re-engage, the customer must reactivate (or you can do it from their profile).</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Power Tools</h3>
        <div class="sub-card"><strong>Bulk Updater Tool</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Storefront → Bulk updates</span> → choose the update type (price, frequency, product, status, etc.).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Filter to the exact subscriptions you want to change → preview the change set → confirm.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Bulk updates apply immediately and cannot be undone in one click. Always preview against a small test segment first.</div>
        </div>
        <div class="sub-card"><strong>Quick Actions URL Builder</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Storefront → Quick Actions</span> → choose the action (skip next charge, swap product, update frequency, reactivate, etc.).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Recharge generates a unique tokenized link per subscriber. Embed these <code>{{quick_action_url}}</code> variables in Klaviyo emails or SMS so subscribers can act in one tap.</div></div>
        </div>
        <div class="sub-card"><strong>Reactivate a Cancelled Subscription</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Open the customer → find the cancelled subscription → <strong>Reactivate</strong>.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Choose the next charge date and confirm. Recharge resumes the original plan unless you change it.</div></div>
        </div>
        <div class="sub-card"><strong>Working with the API</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For headless or large-scale operations, use the Recharge API at <a href="https://docs.getrecharge.com" target="_blank">docs.getrecharge.com</a>.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">API tokens are issued under <span class="step-nav">Tools and apps → API tokens</span>. Treat tokens like passwords — never share or commit them to a repo.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 6. PRODUCTS & SUBSCRIPTION PLANS -->
<div class="slide" id="sec-products"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🏷️ Core Feature Deep Dive — Products & Subscription Plans</h2><p class="subtitle">Define which products can be subscribed to, at what frequency, and at what price.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Product Basics</h3>
        <div class="sub-card"><strong>How Products Get Into Recharge</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Products live in <strong>Shopify</strong>. When a product is created or updated in the Shopify admin, it syncs automatically to Recharge under <span class="step-nav">Products</span>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">In Recharge, the Products page shows every synced product. You don't create products in Recharge — you create <strong>subscription plans</strong> that wrap around the existing Shopify product.</div></div>
        </div>
        <div class="sub-card"><strong>Subscription Only vs. Subscription + One-Time</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Subscription only:</strong> the product can only be purchased on a recurring plan — no one-time option appears on the product page.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Subscription &amp; one-time:</strong> the product page shows both options — the subscription widget gives a percentage discount for choosing a plan.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">This setting lives on the <strong>subscription plan</strong>, not on the Shopify product itself.</div></div>
        </div>
        <div class="sub-card"><strong>Viewing Existing Plans</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><span class="step-nav">Products</span> → click any product → see all attached subscription plans, their frequencies, and discounts.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Building Subscription Plans</h3>
        <div class="sub-card"><strong>Create a Product Subscription Plan</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Products</span> → open the product → <strong>Add subscription plan</strong>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Set the <strong>order interval frequency</strong> (e.g., every 30 days), the <strong>discount percentage</strong> off the base price, and a <strong>plan name</strong> (visible on the storefront).</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Choose <strong>default frequency</strong> if multiple intervals are offered — it pre-selects in the widget.</div></div>
          <div class="step"><div class="step-num amber">4</div><div class="step-text">Save. The plan immediately becomes purchasable on the storefront.</div></div>
        </div>
        <div class="sub-card"><strong>Variant-Level Plans</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Variant-Level Plans let you set different subscription rules per <strong>variant</strong> (size, flavor, etc.) instead of one plan that applies to all variants.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Open the product → switch to <strong>Variant-level plans</strong> → configure each variant's plan separately.</div></div>
          <div class="step-tip"><strong>💡</strong> Use this when only some variants should be subscribable, or when different variants need different intervals or discounts.</div>
        </div>
        <div class="sub-card"><strong>Copy Plans Across Products</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">On any plan → <strong>Copy plan</strong> → select target products → apply.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">This is the only built-in bulk-create flow — useful when launching a new product line with the same plan structure as an existing one.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Specialty Plan Types</h3>
        <div class="sub-card"><strong>Prepaid Subscriptions</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Charge the customer once for multiple shipments up front (e.g., 3-month or 6-month prepay) — Recharge fulfills the shipments on the configured cadence.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Configure under the plan → choose <strong>Prepaid</strong> → set the number of charges and shipment cadence.</div></div>
        </div>
        <div class="sub-card"><strong>Bundles & Build-A-Box</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Recharge Bundles let customers build their own subscription box from a curated set of products at a fixed price or per-item price.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Set up under <span class="step-nav">Tools and apps → Bundles</span> → create the bundle → assign eligible products → choose pricing model.</div></div>
        </div>
        <div class="sub-card"><strong>Trials &amp; First-Order Discounts</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">On a plan, set a <strong>first-order discount</strong> (e.g., 50% off the first charge only). Subsequent charges revert to the standard plan price.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Use this for trial offers without setting up a separate trial product.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 7. CUSTOMER PORTAL & NOTIFICATIONS -->
<div class="slide" id="sec-portal"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🛒✉️ Core Feature Deep Dive — Customer Portal & Notifications</h2><p class="subtitle">The subscriber's self-service experience and the emails Recharge sends them.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Portal Basics</h3>
        <div class="sub-card"><strong>What is the Customer Portal?</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">A subscriber-facing page where customers can self-serve: skip an order, swap a product, change frequency, update billing/shipping, view order history, or cancel.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Lives at a URL on your storefront and is reachable from confirmation/upcoming-charge emails via a tokenized magic link.</div></div>
        </div>
        <div class="sub-card"><strong>Affinity vs. Unity</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Affinity</strong>: the default Recharge customer portal theme — clean, opinionated UI, hosted by Recharge.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Unity</strong>: the newer theme that lets customers manage subscriptions directly from the Shopify customer account page — fewer redirects.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text"><span class="step-nav">Storefront → Customer portal → Customize</span> to choose between them.</div></div>
        </div>
        <div class="sub-card"><strong>Share the Portal Link with a Subscriber</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open the customer → <strong>Customer portal links</strong> dropdown → copy the section link (e.g., "Subscriptions", "Billing", "Cancel").</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Send the magic link to the subscriber so they land in the right place — no login wall.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Portal Customization</h3>
        <div class="sub-card"><strong>Enable Passwordless Login</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Storefront → Customer portal → Login settings</span> → <strong>Recommended: allow passwordless login</strong> → save.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Subscribers receive a secure 4-digit code via email/SMS — no Shopify password required. Reduces support tickets dramatically.</div></div>
        </div>
        <div class="sub-card"><strong>Customize the Subscription Widget</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Storefront → Subscription widget → Customize</span>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Adjust colors, button text, frequency-selector style, and the "subscribe and save" copy. Live preview shows the change before publishing.</div></div>
        </div>
        <div class="sub-card"><strong>Edit Notification Templates</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Notifications</span> → choose a template (Subscription created, Upcoming charge, Charge failed, Subscription cancelled, etc.).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Edit subject line, preview text, and body. Use Liquid variables like <code>{{customer.first_name}}</code> and <code>{{link}}</code> to personalize.</div></div>
          <div class="step-tip"><strong>💡</strong> Always send yourself a test before saving — broken templates can affect every subscriber on the next billing run.</div>
        </div>
        <div class="sub-card"><strong>Copy &amp; Translations</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Storefront → Copy &amp; translations</span> → override default UI strings or add translations for non-English markets.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Portal Power Features</h3>
        <div class="sub-card"><strong>Theme Engine (Pro)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Recharge Pro plans include the <strong>Theme Engine</strong> — full control over customer portal HTML/CSS/JS for a fully branded experience.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Manage themes under <span class="step-nav">Storefront → Theme Editor</span>. Always work on a duplicate before publishing.</div></div>
        </div>
        <div class="sub-card"><strong>JavaScript SDK / Headless</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For headless storefronts (Hydrogen, custom React), the <strong>Recharge JavaScript SDK</strong> handles passwordless login, subscription read/write, and portal embedding.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Reference: <a href="https://docs.getrecharge.com" target="_blank">docs.getrecharge.com</a> → JavaScript SDK section.</div></div>
        </div>
        <div class="sub-card"><strong>Multipass (Shopify Plus)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Shopify Plus stores can enable <strong>Multipass</strong> so subscribers log into Shopify and the Recharge customer portal in one step using passwordless login.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Configure under <span class="step-nav">Storefront → Customer portal → Login settings → Multipass</span>. Set a redirect URL to land subscribers wherever you want post-login.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 8. ANALYTICS & CHURN PREVENTION -->
<div class="slide" id="sec-analytics"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📊🛡️ Core Feature Deep Dive — Analytics & Churn Prevention</h2><p class="subtitle">Read your subscription data, then act on it to keep subscribers.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Reading the Numbers</h3>
        <div class="sub-card"><strong>Home Dashboard</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Home</strong>. Shows store-level KPIs: <strong>active subscribers</strong>, <strong>MRR</strong> (Monthly Recurring Revenue), <strong>upcoming charges</strong>, and announcement banners.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Pin frequently-checked stats to the top by clicking the 📌 icon on any tile.</div></div>
        </div>
        <div class="sub-card"><strong>Analytics Overview</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Analytics</strong>. Switch between <strong>Subscription Performance</strong>, <strong>Churn</strong>, and <strong>Customer LTV</strong> views.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Use the date filter at the top — most charts default to the last 30 days. Always confirm the date range before reading numbers.</div></div>
        </div>
        <div class="sub-card"><strong>Common Metrics Cheat Sheet</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>MRR:</strong> total recurring revenue per month. <strong>Active subscriptions:</strong> not paused or cancelled. <strong>Churn rate:</strong> percentage of subscribers cancelling in a window. <strong>LTV:</strong> total revenue per customer over their lifetime.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Deeper Reporting</h3>
        <div class="sub-card"><strong>Enhanced Analytics</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Available on Pro plans — adds cohort analysis, retention curves, churn-by-product, and plan-level performance.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Open <span class="step-nav">Analytics → Enhanced analytics</span> → choose a report → use the global filters at the top to slice by plan, frequency, or product.</div></div>
        </div>
        <div class="sub-card"><strong>Exports</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Storefront → Exports</span> → create exports of customers, subscriptions, charges, discounts, and addresses.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Choose CSV. Exports are queued and emailed when ready — large stores may take a few minutes.</div></div>
        </div>
        <div class="sub-card"><strong>Dunning Settings</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Settings → Payments → Dunning</span> — controls retry attempts when a card fails.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Enable <strong>automatic retries</strong>, configure the retry interval, and the email template subscribers receive on failure. Pair with RechargeSMS to alert on hard declines via text.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Cancellation Prevention Flows</h3>
        <div class="sub-card"><strong>Build a Flow from a Template</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Churn tools → Cancellation Prevention</span> → <strong>Create from template</strong>.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Pick a template: <strong>Basic</strong> (survey only), <strong>Enhanced</strong> (survey + tailored incentives), <strong>A/B test</strong> (split flow into two paths), <strong>A/B with suggested offers</strong>, or <strong>Cancellation flow with rewards reminders</strong>.</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text">Click the <strong>survey node</strong> to edit the cancellation reasons and the incentive attached to each (discount, free shipping, skip next order, pause). Use the trash icon to remove answers, the pencil icon to edit offers.</div></div>
          <div class="step"><div class="step-num red">4</div><div class="step-text">Use the <strong>shuffle survey answers</strong> setting to randomize the order — prevents bias toward the first option.</div></div>
          <div class="step"><div class="step-num red">5</div><div class="step-text">Set <strong>Gaming prevention</strong> to limit how often a subscriber can claim a monetary offer. Save and activate.</div></div>
        </div>
        <div class="sub-card"><strong>Build the Onsite Experience</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Use the built-in <strong>Site Builder</strong> to customize the cancellation page — text, colors, layout, embedded video — all without code.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Preview on mobile and desktop before going live.</div></div>
        </div>
        <div class="sub-card"><strong>Review Insights & Iterate</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">After launch, the <strong>Insights</strong> tab on the Cancellation Prevention page shows save rate, top cancellation reasons, and offer-level performance.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Iterate weekly — change the offer attached to your top cancellation reason, A/B test, repeat.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 9. RECHARGEAI & AUTOMATION -->
<div class="slide" id="sec-ai"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🤖 RechargeAI & Automation Features</h2><p class="subtitle">Recharge's built-in AI insights and automated retention workflows.</p></div>
  <div class="slide-body">
    <div class="callout"><strong>💡 What is RechargeAI?</strong> RechargeAI analyzes data from 20,000+ merchants and 1.3 million daily orders to surface patterns you would miss in a spreadsheet. Today it's used in two main places: <strong>Cancellation Prevention insights</strong> (top reasons subscribers cancel and which offers save them) and <strong>passive churn / dunning intelligence</strong> (best time to retry a failed payment). Insights surface automatically — there's no separate AI app to install.</div>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Where AI Shows Up</h3>
        <div class="sub-card"><strong>Cancellation Insights</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><span class="step-nav">Churn tools → Cancellation Prevention → Insights</span>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">RechargeAI surfaces up to <strong>five AI-generated insights</strong> by cancellation reason or by product — but only if your store has 50+ unique cancellation reason notes in the past month.</div></div>
        </div>
        <div class="sub-card"><strong>Smart Payment Retries</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">When a card fails, RechargeAI picks the optimal retry time based on cross-merchant patterns — increases recovery rate vs. fixed-interval retries.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">No setup needed: enable retries under <span class="step-nav">Settings → Payments → Dunning</span> and the AI handles timing.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Reading & Acting on Insights</h3>
        <div class="sub-card"><strong>Filter Insights</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">On the Insights tab, filter by specific <strong>product</strong> or <strong>cancellation reason</strong> to drill into one segment.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Common pattern: filter on "too expensive" to see whether discount offers are saving more subscribers than free shipping.</div></div>
        </div>
        <div class="sub-card"><strong>Refine Your Flow Based on Insights</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Open the cancellation flow → adjust offers attached to each survey answer based on what AI insights say is working.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Re-run the flow for 2–4 weeks and revisit insights to confirm whether save rate improved.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Power Automation</h3>
        <div class="sub-card"><strong>A/B Test with Insights Loop</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Add the <strong>A/B test node</strong> to your Cancellation Prevention flow → split traffic across two offer paths (e.g., 20% off vs. free shipping).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Let the test run until both arms have statistically meaningful sample sizes → review which path saves more subscribers per dollar of incentive.</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text">Promote the winner to 100% of traffic and start a new test on the next biggest cancellation reason.</div></div>
        </div>
        <div class="sub-card"><strong>Connect Klaviyo & SMS via Quick Actions</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">In Klaviyo, embed Recharge Quick Action URLs (skip, swap, reactivate) directly in flow emails — subscribers act in one tap, no portal login required.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Pair with RechargeSMS to deliver the same actions over text. Together they cut subscription support tickets significantly.</div></div>
        </div>
        <div class="sub-card"><strong>Headless Custom Flows</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For maximum control, build custom retention experiences using the Recharge API + JavaScript SDK and trigger them from your own data warehouse (Segment, Snowflake) or a third-party tool like ProsperStack/Churnkey.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Always review AI-generated insights before acting — RechargeAI surfaces patterns, not decisions. Confirm the insight matches your brand voice and offer policy before changing live flows.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 10. INTERMEDIATE RESOURCES -->
<div class="slide" id="sec-intres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-intermediate">Intermediate</span></div><h2>🟡 Intermediate Training — Self-Paced Resources</h2><p class="subtitle">Optional but strongly recommended.</p></div>
  <div class="slide-body">
    <div class="card intermediate"><div class="card-title">Help Center — Configuring Product Subscription Plans <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Deep dive on Product Subscription Plans and Variant-Level Plans — how to configure intervals, discount percentages, default frequencies, and copy plans across products.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Plans</span><span class="tag t4">Products</span></div><a href="https://support.getrecharge.com/hc/en-us/articles/13618258115223-Product-Subscription-Plans" target="_blank">→ Read "Product Subscription Plans"</a></div>
    <div class="card intermediate"><div class="card-title">Help Center — Customer Portal Settings Course <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">In-Help-Center course covering every setting in the customer portal — login methods, themes, allowed customer actions, branding, and translations.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1 hr &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Customer Portal</span><span class="tag t4">Course</span></div><a href="https://support.getrecharge.com/hc/en-us/articles/360008683274-Understanding-the-customer-portal" target="_blank">→ Find "Adjusting customer portal settings"</a></div>
    <div class="card intermediate"><div class="card-title">YouTube: Recharge Intermediate Tips <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Video tutorials covering subscription plan configuration, customer portal customization, notification editing, and analytics dashboards.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=recharge+subscriptions+intermediate+tips+2025" target="_blank">→ Search YouTube: "Recharge subscriptions intermediate tips 2025"</a></div>
    <div class="card intermediate"><div class="card-title">Help Center — Notifications &amp; Email Templates <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">How to edit transactional emails (subscription created, upcoming charge, charge failed, cancelled) using Liquid variables, plus best practices for testing before going live.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Notifications</span><span class="tag t4">Email</span></div><a href="https://support.getrecharge.com/hc/en-us" target="_blank">→ Find "Notifications" in the Help Center</a></div>
    <div class="card intermediate"><div class="card-title">Help Center — Bulk Updater Tool <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Step-by-step on bulk-updating subscriptions — change frequency, swap products, adjust prices, change status — across filtered subscriber segments.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Bulk</span><span class="tag t4">Power User</span></div><a href="https://support.getrecharge.com/hc/en-us" target="_blank">→ Find "Bulk updates" in the Help Center</a></div>
  </div>
</div>

<!-- 11. ADVANCED RESOURCES -->
<div class="slide" id="sec-advres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-advanced">Advanced</span></div><h2>🔴 Advanced Training — Deep Mastery Resources</h2><p class="subtitle">Optional — for technical depth or leadership roles.</p></div>
  <div class="slide-body">
    <div class="card advanced"><div class="card-title">Help Center — Cancellation Prevention Flows <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Complete guide to building Cancellation Prevention flows — basic, enhanced, A/B test, and rewards-reminder templates — plus offer types, gaming prevention, and AI insights.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Est. Time:</strong> ~2 hrs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Churn</span><span class="tag t4">Retention</span></div><a href="https://support.getrecharge.com/hc/en-us/articles/14627290928919-Getting-started-with-Cancellation-Prevention-flows" target="_blank">→ Read "Getting started with Cancellation Prevention flows"</a></div>
    <div class="card advanced"><div class="card-title">Recharge Developer Hub <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Full developer documentation — REST API reference, JavaScript SDK, webhooks, headless integration patterns, and migration guides.</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">API</span><span class="tag t4">Developer</span></div><a href="https://docs.getrecharge.com" target="_blank">→ Recharge Developer Hub at docs.getrecharge.com</a></div>
    <div class="card advanced"><div class="card-title">Help Center — Theme Engine Documentation <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">For Recharge Pro merchants — full HTML/CSS/JS control of the customer portal via the Theme Engine.</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Theme</span><span class="tag t4">Pro</span></div><a href="https://support.getrecharge.com/hc/en-us" target="_blank">→ Find "Theme Engine" in the Help Center</a></div>
    <div class="card advanced"><div class="card-title">Help Center — Passwordless Login &amp; Multipass <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Set up passwordless login for the customer portal and integrate Multipass for Shopify Plus stores so subscribers log into Shopify and Recharge in one step.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Auth</span><span class="tag t4">Plus</span></div><a href="https://support.getrecharge.com/hc/en-us/articles/8537122240023-Passwordless-login-for-the-customer-portal" target="_blank">→ Read "Passwordless login for the customer portal"</a></div>
    <div class="card advanced"><div class="card-title">YouTube: Recharge Advanced Flows &amp; API <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Advanced Cancellation Prevention flow design, API integration patterns, headless implementations, and Bulk Updater walkthroughs.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">YouTube</span><span class="tag t4">Automation</span></div><a href="https://www.youtube.com/results?search_query=recharge+subscriptions+advanced+flows+api+2025" target="_blank">→ Search YouTube: "Recharge subscriptions advanced flows API 2025"</a></div>
  </div>
</div>

<!-- 12. TRAINING COURSES -->
<div class="slide" id="sec-certs"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Training Courses</span></div><h2>🏅 In-Platform Training Courses</h2><p class="subtitle">Recharge's free in-product courses — taken alongside Help Center documentation.</p></div>
  <div class="slide-body">
    <div class="callout" style="background:#fffbeb;border-left-color:#ca8a04"><strong style="color:#854d0e">💡 Note on Recharge Credentials:</strong> Recharge does not currently issue formal verified skill badges or proctored exam certifications the way some other platforms do. Instead, the courses listed below live inside the Recharge Help Center and the Merchant HQ — they are <strong>free</strong> learning resources accessible to any team member with portal access. Course completion is tracked locally for your own progress; there is no shareable LinkedIn badge from Recharge today. These courses are entirely optional after the mandatory beginner content is complete.</div>
    <table class="cert-table"><thead><tr><th>Course / Path</th><th>Source</th><th>Skill Level</th><th>Est. Time</th></tr></thead><tbody>
      <tr><td><strong>Understanding the Merchant Portal</strong></td><td>Recharge Help Center</td><td><span class="badge badge-beginner">Beginner</span></td><td>~30 min</td></tr>
      <tr><td><strong>Adjusting Customer Portal Settings</strong></td><td>Recharge Help Center (Course)</td><td><span class="badge badge-beginner">Beginner</span></td><td>~1 hr</td></tr>
      <tr><td><strong>Navigating Customer Details</strong></td><td>Recharge Help Center (Course)</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~45 min</td></tr>
      <tr><td><strong>Building Cancellation Prevention Flows</strong></td><td>Recharge Help Center</td><td><span class="badge badge-advanced">Advanced</span></td><td>~2 hrs</td></tr>
      <tr><td><strong>Recharge Developer Documentation</strong></td><td>Developer Hub</td><td><span class="badge badge-advanced">Advanced</span></td><td>~3–5 hrs</td></tr>
    </tbody></table>
    <p style="font-size:12px;color:#777;margin-top:10px">Browse the full Help Center at <a href="https://support.getrecharge.com/hc/en-us" target="_blank">support.getrecharge.com</a> and Merchant HQ at <a href="https://getrecharge.com/merchant-hq/" target="_blank">getrecharge.com/merchant-hq</a>.</p>
  </div>
</div>

<!-- 13. NEW HIRE CHECKLIST -->
<div class="checklist-section mandatory" id="cl-mandatory"><div class="checklist-head mandatory"><h2>✅ New Hire Onboarding Checklist</h2><div class="ch-sub">Complete all tasks within your first 30 days</div><span class="ch-badge">Mandatory · 30-Day Deadline</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📱 Mobile Browser (OPTIONAL)</div><ul class="checklist-items"><li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Bookmark <code>app.rechargeapps.com</code> on your mobile browser <span class="ci-est">Optional</span></div><div class="ci-desc">The Recharge merchant portal is fully responsive — no native app required. Bookmarking gives you quick mobile access to Customers and Orders on the go.</div></div></li></ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">⚠️ Multi-Store Access Verification (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Request Recharge access list from direct report <span class="ci-est">~5 min</span></div><div class="ci-desc">Get the list of which brand Recharge portals you should access and your role in each.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Sign in to Recharge merchant portal <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Verify access to all assigned brand portals <span class="ci-est">~15 min</span></div><div class="ci-desc">Use the store switcher, verify each portal and permissions match your access list.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Follow up on any missing access <span class="ci-est">~10 min</span></div><div class="ci-desc">If portals or permissions don't match, contact your direct report or HR Training Coordinator.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Set up profile, timezone, and 2FA <span class="ci-est">~5 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">🧭 Merchant Portal Navigation (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Learn the merchant portal layout — sidebar, Home, Settings (Sec 4) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Practice finding a subscriber by email and order number (Sec 5) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">👥🏷️🛒📊🤖 Feature Training (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Customers &amp; Subscriptions beginner tutorials (Sec 5) <span class="ci-est">~25 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Products &amp; Plans beginner tutorials (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Customer Portal &amp; Notifications basics (Sec 7) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Review Analytics dashboard and understand MRR/churn/LTV (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Open Cancellation Prevention Insights and locate AI-generated insights (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📚 External Resources (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read "Understanding the merchant portal" (Sec 3) <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read "Understanding the customer portal" (Sec 3) <span class="ci-est">~45 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Watch YouTube Beginner Tutorial (Sec 3) <span class="ci-est">~45 min</span></div></div></li>
    </ul></div>
  </div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-mandatory" style="color:#166534">0 of 16 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-mandatory" style="background:#16a34a"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#166534" onclick="resetList('mandatory')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('mandatory')">📝 Take Quiz</button></div></div>
</div>

<!-- 14. INTERMEDIATE CHECKLIST -->
<div class="checklist-section intermediate" id="cl-intermediate"><div class="checklist-head intermediate"><h2>✅ Intermediate Learner Checklist</h2><div class="ch-sub">Self-paced — after mandatory training</div><span class="ch-badge">Self-Paced · Optional</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-intermediate">All Features Intermediate</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Apply a one-off discount to an upcoming order (Sec 5) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Update a subscriber's billing/shipping address (Sec 5) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Create a Product Subscription Plan (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Configure a Variant-Level Plan (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Customize the subscription widget (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Edit a notification template and send a test (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Enable passwordless login (Sec 7) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Run an Enhanced Analytics report and export to CSV (Sec 8) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Filter Cancellation Prevention insights by reason or product (Sec 9) <span class="ci-est">~15 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-intermediate" style="color:#854d0e">0 of 9 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-intermediate" style="background:#ca8a04"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#854d0e" onclick="resetList('intermediate')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('intermediate')">📝 Take Quiz</button></div></div>
</div>

<!-- 15. ADVANCED CHECKLIST -->
<div class="checklist-section advanced" id="cl-advanced"><div class="checklist-head advanced"><h2>✅ Advanced Learner Checklist</h2><div class="ch-sub">Optional — deep mastery</div><span class="ch-badge">Optional · Deep Mastery</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-advanced">All Features Advanced</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Run a Bulk Updater Tool change against a filtered segment (Sec 5) <span class="ci-est">~25 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Build a Quick Actions URL and embed it in a test email (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Configure a prepaid subscription plan (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Customize a customer portal theme via Theme Engine (Pro only, if available) (Sec 7) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Build a full Cancellation Prevention flow from the Enhanced template (Sec 8) <span class="ci-est">~45 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Set up an A/B test cancellation flow and review insights after 1 week (Sec 9) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Generate an API token and make one read call to the Recharge API (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-advanced" style="color:#991b1b">0 of 7 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-advanced" style="background:#991b1b"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#991b1b" onclick="resetList('advanced')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('advanced')">📝 Take Quiz</button></div></div>
</div>

<!-- 16. QUICK REFERENCE -->
<div class="slide" id="sec-qr"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Quick Reference</span></div><h2>🔗 Quick Reference — Platform Access &amp; Help Centers</h2></div>
  <div class="slide-body"><div class="qr-grid">
    <div class="qr-card"><h4>🔐 Platform Access</h4><ul><li><a href="https://app.rechargeapps.com" target="_blank">Recharge Merchant Portal</a></li><li><a href="https://support.getrecharge.com/hc/en-us" target="_blank">Recharge Help Center</a></li><li><a href="https://getrecharge.com/merchant-hq/" target="_blank">Merchant HQ</a></li><li><a href="https://docs.getrecharge.com" target="_blank">Developer Hub</a></li><li><a href="https://getrecharge.com" target="_blank">Recharge.com</a></li></ul></div>
    <div class="qr-card"><h4>🎓 Help Center Sections</h4><ul><li><a href="https://support.getrecharge.com/hc/en-us/articles/4420704417687-Understanding-the-merchant-portal" target="_blank">Merchant Portal</a></li><li><a href="https://support.getrecharge.com/hc/en-us/articles/360008683274-Understanding-the-customer-portal" target="_blank">Customer Portal</a></li><li><a href="https://support.getrecharge.com/hc/en-us/articles/13618258115223-Product-Subscription-Plans" target="_blank">Product Subscription Plans</a></li><li><a href="https://support.getrecharge.com/hc/en-us/articles/14627290928919-Getting-started-with-Cancellation-Prevention-flows" target="_blank">Cancellation Prevention</a></li><li><a href="https://support.getrecharge.com/hc/en-us/articles/8537122240023-Passwordless-login-for-the-customer-portal" target="_blank">Passwordless Login</a></li><li><a href="https://support.getrecharge.com/hc/en-us/articles/9829462863767-Training-your-customer-support-team" target="_blank">Training Customer Support</a></li></ul></div>
    <div class="qr-card"><h4>🛠️ Developer &amp; Integrations</h4><ul><li><a href="https://docs.getrecharge.com" target="_blank">API Reference</a></li><li><a href="https://docs.getrecharge.com" target="_blank">JavaScript SDK</a></li><li><a href="https://getrecharge.com/integrations/" target="_blank">Integrations Directory</a></li></ul></div>
    <div class="qr-card"><h4>🎬 YouTube</h4><ul><li><a href="https://www.youtube.com/results?search_query=recharge+subscriptions+shopify+tutorial+for+beginners+2025" target="_blank">Beginner Tutorial</a></li><li><a href="https://www.youtube.com/results?search_query=recharge+subscriptions+intermediate+tips+2025" target="_blank">Intermediate Tips</a></li><li><a href="https://www.youtube.com/results?search_query=recharge+subscriptions+advanced+flows+api+2025" target="_blank">Advanced Flows &amp; API</a></li></ul></div>
  </div></div>
</div>

<!-- FINAL NOTE -->
<div class="final-note" id="sec-final">
  <p style="font-size:15px;font-weight:700;margin-bottom:10px">📌 Final Note — Recharge Training</p>
  <p style="margin-bottom:10px">All <strong>Beginner-level content</strong> is <strong>mandatory</strong> within your first <strong>30 days</strong>. Intermediate and Advanced training is self-paced.</p>
  <p style="margin-bottom:10px"><strong>Multi-Store Access:</strong> Since InvenTel manages multiple brand Shopify stores, each has its own Recharge merchant portal. Your first step is always to confirm your access list with your direct report. Do not assume which portals you need — verify, and escalate if anything is missing.</p>
  <p style="margin-bottom:10px">This deck is <strong>self-contained</strong> — every deep-dive includes complete step-by-step instructions. Click any section header to collapse it once you've completed it. External links and help centers are in the Quick Reference.</p>
  <p style="margin-bottom:10px">Use the <strong>New Hire Checklist</strong> to track progress and share with your manager.</p>
  <p style="margin-bottom:10px">For access, credentials, or training questions — reach out to the <strong>HR Training Coordinator who assisted you during onboarding</strong>.</p>
  <p style="margin-bottom:10px"><a href="https://support.getrecharge.com/hc/en-us" target="_blank">Recharge Help Center →</a></p>
  <p style="font-size:11px;opacity:.7;margin-top:14px">Last updated: April 6, 2025</p>
</div>

<!-- FLOATING NAV -->
<button class="float-nav-btn" onclick="toggleFloatNav()" title="Jump to section">📋</button>
<div class="float-nav-panel" id="float-nav">
  <div class="float-nav-hd">📋 Jump to Section</div>
  <ul class="float-nav-list">
    <li><a class="fnl-section" href="#sec-toc" onclick="closeNav()">📋 Table of Contents</a></li>
    <li><a class="fnl-section" href="#sec-overview" onclick="closeNav()">🔁 1. Platform Overview</a></li>
    <li><a class="fnl-section" href="#sec-hub" onclick="closeNav()">🎓 2. Official Learning Hub</a></li>
    <li><a class="fnl-section" href="#sec-begres" onclick="closeNav()">🟢 3. Beginner Resources</a></li>
    <li><a class="fnl-section" href="#sec-start" onclick="closeNav()">🟢 4. Getting Started</a></li>
    <li><a class="fnl-section" href="#sec-customers" onclick="closeNav()">👥 5. Customers &amp; Subscriptions</a></li>
    <li><a class="fnl-section" href="#sec-products" onclick="closeNav()">🏷️ 6. Products &amp; Plans</a></li>
    <li><a class="fnl-section" href="#sec-portal" onclick="closeNav()">🛒 7. Customer Portal &amp; Notifications</a></li>
    <li><a class="fnl-section" href="#sec-analytics" onclick="closeNav()">📊 8. Analytics &amp; Churn Prevention</a></li>
    <li><a class="fnl-section" href="#sec-ai" onclick="closeNav()">🤖 9. RechargeAI &amp; Automation</a></li>
    <li><a class="fnl-section" href="#sec-intres" onclick="closeNav()">🟡 10. Intermediate Resources</a></li>
    <li><a class="fnl-section" href="#sec-advres" onclick="closeNav()">🔴 11. Advanced Resources</a></li>
    <li><a class="fnl-section" href="#sec-certs" onclick="closeNav()">🏅 12. Training Courses</a></li>
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

/* QUIZ DATA — 22-25 per level, pulls 20 */
var qSection,qIndex,qScore,qAnswered,qQuestions;
var QUIZ={
mandatory:{title:'New Hire Onboarding',sub:'Mandatory · 20 Questions · Pass = 70%',hd:'q-mandatory',track:'New Hire Onboarding — Recharge',qs:20,questions:[
{q:'What is the FIRST thing you should do on your first day with Recharge?',opts:['Start editing subscription plans','Request your access list from your direct report','Install Recharge integrations','Cancel a test subscriber'],ans:1},
{q:'Where do you sign in to Recharge?',opts:['recharge.shopify.com','app.rechargeapps.com','rechargeadmin.com','login.recharge.io'],ans:1},
{q:'How do you switch between multiple brand Recharge portals?',opts:['Log out and log back in','Use the store switcher in the top-right of the merchant portal','Open different browsers','Reinstall the app'],ans:1},
{q:'Where is the main navigation in the Recharge merchant portal?',opts:['Top toolbar','Right panel','Left sidebar','Footer menu'],ans:2},
{q:'If a brand portal is missing from your store switcher, what should you do?',opts:['Create a new account','Contact your direct report immediately','Ask a coworker to add you','Wait a few days'],ans:1},
{q:'Where do you go to find a specific subscriber?',opts:['Orders → Customers','Sidebar → Customers → Customers','Settings → Users','Storefront → Customers'],ans:1},
{q:'What does "skip" do on an upcoming order?',opts:['Cancels the subscription','Moves the next charge forward to the following scheduled date','Refunds the customer','Deletes the subscription'],ans:1},
{q:'How do you swap a product mid-subscription?',opts:['Cancel and re-subscribe','Open the subscription → Swap product → choose new product','Edit the Shopify product','Cannot be done'],ans:1},
{q:'What does MRR stand for?',opts:['Monthly Refund Rate','Monthly Recurring Revenue','Maximum Renewal Rate','Merchant Revenue Report'],ans:1},
{q:'Where do products come from in Recharge?',opts:['You create them inside Recharge','They sync automatically from your Shopify store','From the App Store','From the Help Center'],ans:1},
{q:'What does "subscription only" mean for a product?',opts:['It can only be bought as a one-time purchase','The product can ONLY be purchased on a recurring plan — no one-time option','It is hidden from customers','It is sold in bundles only'],ans:1},
{q:'What is the customer portal?',opts:['The Recharge admin','A subscriber-facing page where customers can self-serve their subscriptions','The developer dashboard','A theme editor'],ans:1},
{q:'What are the two customer portal themes called?',opts:['Default and Pro','Affinity and Unity','Standard and Custom','Light and Dark'],ans:1},
{q:'What is the subscription widget?',opts:['An admin tool','The on-product-page selector that lets shoppers choose subscription frequency','A dashboard chart','An email template'],ans:1},
{q:'Where do you find email notification templates?',opts:['Settings → Email','Sidebar → Notifications','Storefront → Email','Customers → Notifications'],ans:1},
{q:'Where do you view dashboard stats like active subscribers and MRR?',opts:['Settings page','Sidebar → Home','Customers → Reports','Cannot view'],ans:1},
{q:'What is RechargeAI used for?',opts:['Editing themes','Surfacing AI-generated insights on cancellation reasons and dunning timing','Creating products','Customer support chat'],ans:1},
{q:'What is Cancellation Prevention?',opts:['A pricing tier','A feature that triggers automated retention flows when subscribers attempt to cancel','A theme','A payment processor'],ans:1},
{q:'How do customers access the customer portal?',opts:['Through Settings only','Via a tokenized magic link sent in Recharge notifications, or by logging in','Through Shopify support','Via SMS only'],ans:1},
{q:'What is "pause" vs "cancel" on a subscription?',opts:['They are identical','Pause stops billing but keeps the subscription; cancel ends it','Pause refunds the customer; cancel does not','Pause is permanent; cancel is temporary'],ans:1},
{q:'Who should you contact if you have access issues?',opts:['Recharge support directly','Your direct report or the HR Training Coordinator','Another team member','Shopify support'],ans:1},
{q:'How do you change a subscriber\'s frequency?',opts:['Cancel and re-create the subscription','Open the subscription → Edit frequency → choose new interval','Settings only','Through Shopify only'],ans:1},
{q:'What does the Activity tab on a customer show?',opts:['Only orders','A complete log of every change to that customer — charges, swaps, skips, address updates, support actions','Only emails','Marketing campaigns'],ans:1},
{q:'How do you share a customer portal link with a subscriber?',opts:['Email them their password','Open the customer → Customer portal links → copy the section link','Customers cannot get a link','Through Shopify only'],ans:1},
{q:'What is a "subscription only" plan setting controlled by?',opts:['Shopify','The subscription plan in Recharge','The customer portal','The theme'],ans:1}
]},
intermediate:{title:'Intermediate Path',sub:'Intermediate · 20 Questions · Pass = 70%',hd:'q-intermediate',track:'Intermediate — Recharge',qs:20,questions:[
{q:'How do you create a Product Subscription Plan?',opts:['Settings → Plans','Products → open product → Add subscription plan','Customers → Plans','Cannot create plans manually'],ans:1},
{q:'What is the difference between Product-level and Variant-Level Plans?',opts:['No difference','Variant-Level Plans let you set different rules per variant; Product-level applies one plan to all variants','Variant plans are for Shopify Plus only','Product plans are deprecated'],ans:1},
{q:'How do you apply a one-off discount to a single upcoming order?',opts:['Cannot do this','Open the customer → click upcoming order → Apply discount','Edit the plan permanently','Through Shopify only'],ans:1},
{q:'What does the Bulk Updater Tool do?',opts:['Imports new products','Bulk updates subscriptions — change frequency, swap product, adjust price, change status','Bulk emails customers','Bulk fulfills orders'],ans:1},
{q:'Where do you access the Bulk Updater Tool?',opts:['Settings → Bulk','Storefront → Bulk updates','Customers → Bulk','Cannot access in UI'],ans:1},
{q:'How do you customize the subscription widget?',opts:['Edit Shopify theme code','Storefront → Subscription widget → Customize','Cannot customize','Settings → Widget'],ans:1},
{q:'How do you edit a notification email template?',opts:['Cannot edit','Sidebar → Notifications → choose template → edit subject and body with Liquid variables','Through email provider only','Settings → Templates'],ans:1},
{q:'What\'s a Liquid variable used in notification templates?',opts:['<code>{{customer.first_name}}</code>','{{shop_name}}','Both A and B-style placeholders','None — plain text only'],ans:2},
{q:'What does enabling passwordless login do?',opts:['Removes all login security','Lets subscribers access the customer portal via a 4-digit code via email/SMS — no Shopify password needed','Disables 2FA','Locks the customer portal'],ans:1},
{q:'What does Copy & Translations let you do?',opts:['Copy plans across products','Override default UI strings or add translations for non-English markets','Translate orders only','Nothing — it\'s deprecated'],ans:1},
{q:'How do you enter the Quick Actions URL builder?',opts:['Settings → URLs','Storefront → Quick Actions','Customers → Actions','Through API only'],ans:1},
{q:'What is a use case for Quick Actions URLs?',opts:['Marketing analytics','Embedding tokenized one-tap links in Klaviyo emails so subscribers can skip/swap/reactivate without logging in','Bulk product imports','Updating themes'],ans:1},
{q:'What is Recharge\'s "Copy plan" feature for?',opts:['Renaming plans','Copying an existing plan and applying it to other products in bulk','Exporting plans','Archiving plans'],ans:1},
{q:'Where do you set up dunning (failed-payment retry)?',opts:['Customers → Dunning','Settings → Payments → Dunning','Notifications → Failed','Cannot configure'],ans:1},
{q:'Where do you view Enhanced Analytics?',opts:['Home page','Sidebar → Analytics → Enhanced analytics','Customers → Reports','Settings → Reports'],ans:1},
{q:'What format do exports come in?',opts:['PDF only','CSV','JSON only','XLS only'],ans:1},
{q:'What are Recharge Bundles?',opts:['Email templates','A feature that lets customers build their own subscription box from a curated set of products','Product images','Discount codes'],ans:1},
{q:'What does "default frequency" mean on a plan?',opts:['The only allowed frequency','The pre-selected interval shown to shoppers in the subscription widget','The fastest charge cadence','The legal default'],ans:1},
{q:'Where do you find the Insights tab for Cancellation Prevention?',opts:['Analytics page','Churn tools → Cancellation Prevention → Insights','Customers → Insights','Settings → Insights'],ans:1},
{q:'How can you filter Cancellation Prevention insights?',opts:['Cannot filter','By specific product or by cancellation reason','By customer name only','By date only'],ans:1},
{q:'What is one best practice when editing notification templates?',opts:['Save and forget','Always send yourself a test before saving — broken templates can affect every subscriber','Skip Liquid variables','Use only plain text'],ans:1},
{q:'What\'s a prepaid subscription?',opts:['A free trial','Charging the customer once for multiple shipments up front and fulfilling them on cadence','A canceled subscription','A one-time order'],ans:1},
{q:'What\'s the customer portal URL format like?',opts:['Random IDs','It lives on your storefront and is reachable via tokenized magic links from emails','A separate domain','Always logged-in only'],ans:1}
]},
advanced:{title:'Advanced Mastery',sub:'Advanced · 20 Questions · Pass = 70%',hd:'q-advanced',track:'Advanced Mastery — Recharge',qs:20,questions:[
{q:'How many unique cancellation reason notes are needed in the past month for RechargeAI insights to surface?',opts:['10','25','50','100'],ans:2},
{q:'What templates does Cancellation Prevention offer?',opts:['Only Basic','Basic, Enhanced, A/B test, A/B test with suggested offers, Cancellation flow with rewards reminders','Only Pro','Theme templates only'],ans:1},
{q:'What does the A/B test node do in a Cancellation Prevention flow?',opts:['Splits subscribers down two paths with different incentives to compare results','Doubles the discount','Cancels duplicate subscriptions','Generates two emails'],ans:0},
{q:'What does "Gaming prevention" do?',opts:['Blocks all offers','Limits how often a subscriber can repeatedly claim a monetary offer','Cancels gaming products','Prevents fraud only'],ans:1},
{q:'What is Multipass for Shopify Plus?',opts:['A pricing tier','Lets subscribers log into both Shopify and the Recharge customer portal in one step using passwordless login','Multi-currency support','A dashboard'],ans:1},
{q:'What is one-click cancellation?',opts:['A bug','A setting that bypasses the Cancellation Prevention flow — required by law in some states like Colorado','An A/B test variant','A dunning retry'],ans:1},
{q:'Recharge\'s Theme Engine is available on which plans?',opts:['Free plans','Recharge Pro and Custom','All plans equally','Starter only'],ans:1},
{q:'Where is the Recharge Developer Hub?',opts:['rechargedev.com','docs.getrecharge.com','developer.shopify.com','support.recharge.io'],ans:1},
{q:'Where do you generate a Recharge API token?',opts:['Settings → Tokens','Tools and apps → API tokens','Customers → API','Cannot generate'],ans:1},
{q:'What is the Recharge JavaScript SDK used for?',opts:['Editing themes only','Headless storefronts (Hydrogen, custom React) — passwordless login, subscription read/write, portal embedding','Shopify Liquid templates','Email templates'],ans:1},
{q:'What is RechargeSMS?',opts:['A separate company','A native Recharge feature that sends subscriber alerts via SMS, including dunning notifications and quick actions','A theme','A retired feature'],ans:1},
{q:'Why is "shuffle survey answers" recommended in cancellation flows?',opts:['Required by law','Prevents bias where customers auto-select the first option shown','Increases load time','Improves SEO'],ans:1},
{q:'What\'s the difference between active and passive churn?',opts:['No difference','Active = customer chose to cancel; Passive = involuntary, often payment failure','Active is faster','Passive only happens to free trials'],ans:1},
{q:'What does Recharge\'s built-in dunning include?',opts:['Only manual retries','Automatic retries, customizable failure emails, optional SMS alerts via RechargeSMS, customer-portal card update','Only chargebacks','Only refunds'],ans:1},
{q:'What is the ProsperStack/Churnkey/Ordergroove integration tier?',opts:['Replacements for Recharge','Third-party churn-prevention tools that integrate with Recharge for advanced retention flows','Payment processors','Theme tools'],ans:1},
{q:'What\'s the AI insight cap per cancellation reason or product?',opts:['Up to 5','Up to 10','Up to 20','Unlimited'],ans:0},
{q:'When you enable one-click cancellation in Customer portal settings, what does it apply to?',opts:['All customers globally','By default Colorado addresses; can be enabled per state/region','Only Shopify Plus','Only paid plans'],ans:1},
{q:'What\'s the recommended workflow for refining a Cancellation Prevention flow?',opts:['Set it once and forget','Run an A/B test → review insights after enough sample → promote winner → start new test on next biggest reason','Change weekly without testing','Disable insights'],ans:1},
{q:'What\'s the safest way to test bulk updates?',opts:['Apply to entire store immediately','Preview against a small filtered test segment first — bulk updates apply immediately and cannot be undone in one click','Use only on weekends','No need to test'],ans:1},
{q:'Best practice for AI-generated insights?',opts:['Always act on them automatically','Always review insights before acting — they surface patterns, not decisions; confirm against your brand voice and offer policy','Ignore them','Show them to customers'],ans:1}
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
