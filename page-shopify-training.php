<?php /* Template Name: Shopify Training */ ?>
<?php bh_require_login(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>InvenTel — Shopify Training (Self-Contained) v3.1</title>
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
<?php bh_favicon_tags(); ?>
</head>
<body>

<!-- HEADER -->
<div class="header-band">
  <div style="text-align:center;padding-bottom:14px"><div class="inventel-logo"><span class="logo-inven">Inven</span><span class="logo-tel">Tel</span></div></div>
  <div class="header-top">
    <div>
      <div class="header-company">InvenTel Innovations — Training Resource Library</div>
      <div class="header-h1">🛍️ Shopify — Self-Contained Training Guide</div>
      <div class="header-subtitle">Complete step-by-step training for Admin Dashboard, Orders, Products, Customers, Analytics, Marketing, Discounts & Sidekick AI — click any section header to collapse/expand</div>
    </div>
    <div class="header-meta">All Levels (Beginner → Advanced)<br>Platform: Shopify<br>Format: Self-Contained / Standalone<br><span style="color:#fcd9b6;font-weight:700">v3.1 — Search Bar Edition</span></div>
  </div>
</div>
<div class="stat-row">
  <div class="stat-item"><span class="stat-val">7</span><span class="stat-lbl">Core Areas</span></div>
  <div class="stat-item"><span class="stat-val">16+</span><span class="stat-lbl">Training Sections</span></div>
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Skill Levels</span></div>
  <div class="stat-item"><span class="stat-val">30 Days</span><span class="stat-lbl">Mandatory Window</span></div>
  <div class="stat-item"><span class="stat-val">Sidekick AI</span><span class="stat-lbl">Built-in AI</span></div>
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
      <div class="toc-item" onclick="goTo('sec-overview')">1. Platform Overview<span>What Shopify is + multi-store context</span></div>
      <div class="toc-item" onclick="goTo('sec-hub')">2. Official Learning Hub<span>Shopify Academy + Help Center</span></div>
      <div class="toc-item" onclick="goTo('sec-begres')">3. Beginner Training Resources<span>Mandatory — external resources</span></div>
      <div class="toc-item" onclick="goTo('sec-start')">4. Getting Started — First Day Setup<span>Multi-store access verification</span></div>
      <div class="toc-item" onclick="goTo('sec-orders')">5. Orders & Fulfillment Deep Dive<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-products')">6. Products & Inventory Deep Dive<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-customers')">7. Customers, Marketing & Discounts<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-storefront')">8. Online Store & Content<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-sidekick')">9. Sidekick AI & Shopify Magic<span>AI features across admin</span></div>
      <div class="toc-item" onclick="goTo('sec-intres')">10. Intermediate Resources<span>Self-paced, optional links</span></div>
      <div class="toc-item" onclick="goTo('sec-advres')">11. Advanced Resources<span>Optional deep mastery links</span></div>
      <div class="toc-item" onclick="goTo('sec-certs')">12. Certifications<span>Verified skills & badges</span></div>
      <div class="toc-item" onclick="goTo('cl-mandatory')">13. New Hire Checklist<span>Interactive — mandatory</span></div>
      <div class="toc-item" onclick="goTo('cl-intermediate')">14. Intermediate Checklist<span>Interactive — self-paced</span></div>
      <div class="toc-item" onclick="goTo('cl-advanced')">15. Advanced Checklist<span>Interactive — mastery</span></div>
      <div class="toc-item" onclick="goTo('sec-qr')">16. Quick Reference + Final Note<span>Platform URLs + help centers</span></div>
    </div>
  </div>
</div>

<!-- 1. PLATFORM OVERVIEW -->
<div class="slide" id="sec-overview"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Section 1</span></div><h2>🛍️ What is Shopify?</h2><p class="subtitle">The e-commerce platform powering InvenTel's online stores.</p></div>
  <div class="slide-body">
    <p style="font-size:13px;color:#5c5c5c;margin-bottom:14px">Shopify is InvenTel's primary e-commerce platform. It provides a complete back-end admin for managing online stores — from processing orders and managing products to analyzing sales data and running marketing campaigns. The Shopify admin is your command center for all store operations.</p>
    <div class="callout"><strong>⚠️ Multi-Store Environment:</strong> InvenTel manages <strong>multiple Shopify stores across different brands</strong>. You may have access to all stores or just a few, depending on your role. Your access levels vary based on your position. <strong>On your first day, you must request a list from your direct report</strong> of which brand stores you have been added to and what access level you should have. Verify everything matches — if not, follow up immediately with your direct report or the HR Training Coordinator.</div>
    <div class="apps-grid"><span class="app-chip">📦 Orders</span><span class="app-chip">🏷️ Products</span><span class="app-chip">👥 Customers</span><span class="app-chip">📊 Analytics</span><span class="app-chip">📣 Marketing</span><span class="app-chip">🏪 Online Store</span><span class="app-chip">✨ Sidekick AI</span></div>
    <div class="platform-url"><strong>Shopify Admin:</strong> <a href="https://shopify.com/admin" target="_blank">shopify.com/admin</a> (or <code>your-store.myshopify.com/admin</code>)<br><strong>Shopify Help Center:</strong> <a href="https://help.shopify.com" target="_blank">help.shopify.com</a><br><strong>Shopify Academy:</strong> <a href="https://www.shopifyacademy.com" target="_blank">shopifyacademy.com</a><br><strong>Shopify App Store:</strong> <a href="https://apps.shopify.com" target="_blank">apps.shopify.com</a></div>
    <div class="callout"><strong>💡 How it all connects:</strong> Every area in Shopify admin is linked. When a customer places an order, it appears in Orders with links to the customer profile and product inventory. Analytics tracks everything automatically. The sidebar on the left is your primary navigation tool — it gives you quick access to Orders, Products, Customers, Content, Analytics, Marketing, Discounts, and Settings.</div>
  </div>
</div>

<!-- 2. OFFICIAL LEARNING HUB -->
<div class="slide" id="sec-hub"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official Shopify</span></div><h2>🎓 Official Learning Hub — Shopify Academy & Help Center</h2><p class="subtitle">Beginner-level resources are MANDATORY within 30 days.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Shopify Help Center <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official</span></div><div class="card-desc">Shopify's primary reference — step-by-step guides for every admin feature, from store setup to order management, product configuration, and theme editing.</div><div class="card-meta"><strong>Format:</strong> Guides + Documentation &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">All Features</span><span class="tag t2">Reference</span></div><a href="https://help.shopify.com" target="_blank">→ Visit the Shopify Help Center</a></div>
    <div class="card"><div class="card-title">Shopify Academy <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-academy">Shopify Academy</span></div><div class="card-desc">Shopify's official training platform with structured courses, learning paths, and verified skill assessments. Courses cover everything from admin navigation to analytics and automation.</div><div class="card-meta"><strong>Format:</strong> Interactive courses &nbsp;|&nbsp; <strong>Level:</strong> Beginner–Advanced</div><div class="tag-row"><span class="tag t2">Courses</span><span class="tag t1">Learning Paths</span><span class="tag t4">Official</span></div><a href="https://www.shopifyacademy.com" target="_blank">→ Start learning at Shopify Academy</a></div>
    <div class="card"><div class="card-title">Navigating the Shopify Admin — Learning Path <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official Shopify Academy learning path covering admin dashboard navigation, sidebar sections, search, and productivity tools.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1 hr &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">Admin</span></div><a href="https://www.shopifyacademy.com" target="_blank">→ Find "Navigating the Shopify Admin" on Shopify Academy</a></div>
  </div>
</div>

<!-- 3. BEGINNER TRAINING RESOURCES -->
<div class="slide" id="sec-begres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory — Complete Within 30 Days</span></div><h2>🟢 Beginner Training — Mandatory Resources</h2><p class="subtitle">Every team member must complete these before the 30-day mark.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Shopify Help Center — Getting Started Guide <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official getting-started documentation covering admin overview, initial store setup, and navigation basics.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1–2 hrs &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">Admin</span></div><a href="https://help.shopify.com/en/manual/intro-to-shopify" target="_blank">→ Start the Getting Started guide</a></div>
    <div class="card"><div class="card-title">Shopify Academy — Foundations: Shopify 101 <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official beginner course covering core Shopify concepts, admin navigation, and essential daily workflows.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~90 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Academy</span><span class="tag t2">Foundations</span></div><a href="https://www.shopifyacademy.com" target="_blank">→ Enroll in Shopify 101 on Shopify Academy</a></div>
    <div class="card"><div class="card-title">Shopify Academy — Data & Analytics 101 <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Learn to read and interpret Shopify analytics dashboards, sales reports, and traffic data.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~3 hrs &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Academy</span><span class="tag t4">Analytics</span></div><a href="https://www.shopifyacademy.com" target="_blank">→ Enroll in Data & Analytics 101</a></div>
    <div class="card"><div class="card-title">YouTube: Shopify Admin Tutorial for Beginners <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Visual walkthrough of the Shopify admin panel. Best for visual learners who want to see every click.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">YouTube</span><span class="tag t4">Video</span><span class="tag t2">Admin</span></div><a href="https://www.youtube.com/results?search_query=shopify+admin+tutorial+for+beginners+2025" target="_blank">→ Search YouTube: "Shopify admin tutorial for beginners 2025"</a></div>
    <div class="card"><div class="card-title">Shopify Help Center — Managing Users & Permissions <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Understand how staff accounts, roles, and permissions work — critical for multi-store access.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">Permissions</span></div><a href="https://help.shopify.com/en/manual/your-account/users" target="_blank">→ Read Users & Permissions documentation</a></div>
  </div>
</div>

<!-- 4. GETTING STARTED -->
<div class="slide" id="sec-start"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory</span></div><h2>🟢 Getting Started — Your First Day with Shopify</h2><p class="subtitle">Complete these steps in order to verify your access and learn the admin layout.</p></div>
  <div class="slide-body">
    <div class="steps-box"><h4>⚠️ Step 0 — Confirm Your Store Access List</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Request your access list</strong> from your direct report. Ask: "Which brand stores have I been added to, and what role/access level should I have in each?"</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">You should receive a list that includes: <strong>store names</strong>, <strong>your role</strong> (e.g., Staff Member, specific custom role), and <strong>which permissions</strong> you need (Orders, Products, Customers, etc.).</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Keep this list — you will verify each store in the next steps.</div></div>
      <div class="step-warning"><strong>⚠️ Critical:</strong> If you do not have this list, stop and request it before proceeding. Do not assume which stores you should have access to. If your direct report is unavailable, contact the HR Training Coordinator who assisted you during onboarding.</div>
    </div>
    <div class="steps-box"><h4>🔐 Sign In to Your Shopify Account</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Open a browser and go to <a href="https://shopify.com/admin" target="_blank">shopify.com/admin</a>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Enter the <strong>email address</strong> provided by HR or your direct report → click <strong>Continue</strong>.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Enter your password. If this is your first login, you should have received an invitation email — click the link in that email to create your password.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">If prompted, complete <strong>two-step authentication</strong> setup (recommended: authenticator app).</div></div>
      <div class="step-tip"><strong>💡 Tip:</strong> If you have access to multiple stores, use the <strong>store switcher</strong> in the top bar to navigate between them. Click your store name at the top → select a different store.</div>
    </div>
    <div class="steps-box"><h4>✅ Verify Access to All Assigned Stores</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Compare the stores visible in your <strong>store switcher</strong> against the access list from your direct report.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">For <strong>each store</strong>, click into it and verify you can see the sections you need: Orders, Products, Customers, Analytics, etc.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Check your permissions: go to <span class="step-nav">Settings → Users and permissions</span> → find your name → review your assigned role(s).</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">If any store is <strong>missing</strong> or your permissions don't match, contact your <strong>direct report</strong> immediately. If unresolved, escalate to the HR Training Coordinator.</div></div>
      <div class="step-warning"><strong>⚠️</strong> Do NOT request access yourself or ask other team members to add you. All access must be granted through your direct report or admin.</div>
    </div>
    <div class="steps-box"><h4>🧭 Learn the Admin Layout</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Sidebar (left):</strong> Your main navigation. Contains Home, Orders, Products, Customers, Content, Analytics, Marketing, Discounts, and Sales Channels.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Top bar:</strong> Store switcher, search bar (search anything — orders, products, settings), Sidekick AI icon (purple glasses), and Alerts bell.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Home dashboard:</strong> Shows key metrics, recent activity, and action items. This is your landing page after login.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text"><strong>Settings (bottom-left):</strong> Store details, payments, shipping, taxes, users, permissions, and more.</div></div>
      <div class="step-tip"><strong>💡</strong> Use the <strong>search bar</strong> (<span class="kbd">Ctrl+K</span> or <span class="kbd">⌘+K</span>) to quickly jump to any page, order, product, or setting. It's the fastest way to navigate.</div>
    </div>
    <div class="steps-box"><h4>👤 Set Up Your Profile</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Click your <strong>store name</strong> in the top bar → click your <strong>profile name</strong>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Verify your <strong>name</strong> and <strong>email</strong> are correct. Upload a <strong>profile photo</strong> (professional headshot).</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Set your <strong>preferred language</strong> under account preferences.</div></div>
    </div>
  </div>
</div>

<!-- 5. ORDERS DEEP DIVE -->
<div class="slide" id="sec-orders"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📦 Core Feature Deep Dive — Orders & Fulfillment</h2><p class="subtitle">Complete step-by-step instructions at every level.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Order Basics</h3>
        <div class="sub-card"><strong>Viewing & Understanding Orders</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Orders</strong>. You'll see a list of all orders with status indicators.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Key statuses: <strong>Unfulfilled</strong> (needs shipping), <strong>Fulfilled</strong> (shipped), <strong>Paid</strong>, <strong>Pending</strong>, <strong>Refunded</strong>.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Click any order to see full details: items, customer info, shipping address, payment, and timeline.</div></div>
        </div>
        <div class="sub-card"><strong>Fulfilling an Order</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open an unfulfilled order → click <strong>Fulfill items</strong>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Enter <strong>tracking number</strong> and select <strong>shipping carrier</strong>.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Check "Send shipment details to customer" → <strong>Fulfill items</strong>.</div></div>
          <div class="step-tip"><strong>💡</strong> Shopify automatically emails the customer with tracking info when you fulfill.</div>
        </div>
        <div class="sub-card"><strong>Processing a Refund</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open order → <strong>Refund</strong> → enter quantity to refund.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Choose: refund to original payment method or store credit.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Add refund reason (optional) → <strong>Refund</strong>.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Order Management</h3>
        <div class="sub-card"><strong>Draft Orders</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Orders → Drafts → Create order</span>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Add products, set customer, apply discounts → <strong>Send invoice</strong> or <strong>Mark as paid</strong>.</div></div>
          <div class="step-tip"><strong>💡</strong> Draft orders are great for phone orders, wholesale, or custom pricing.</div>
        </div>
        <div class="sub-card"><strong>Order Filtering & Search</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Use filter bar: <strong>Payment status</strong>, <strong>Fulfillment status</strong>, <strong>Date range</strong>, <strong>Tagged with</strong>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Save custom filter views for quick access (e.g., "Unfulfilled last 7 days").</div></div>
        </div>
        <div class="sub-card"><strong>Order Editing & Tags</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><strong>Edit order:</strong> Open order → ⋮ → Edit order → add/remove items → update.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><strong>Tags:</strong> Add tags to orders for internal tracking (e.g., "VIP", "Wholesale", "Expedite").</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Advanced Fulfillment</h3>
        <div class="sub-card"><strong>Partial Fulfillment & Split Shipments</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Open order → Fulfill items → select only specific items → fulfill with separate tracking.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Remaining items stay "unfulfilled" and can be shipped later with a different carrier/tracking.</div></div>
        </div>
        <div class="sub-card"><strong>Returns & Exchanges Workflow</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Open order → <strong>Return items</strong> → select items → choose return reason.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Create return shipping label (if applicable) → track return status.</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text">On receipt: restock items (toggle on/off) → process refund or exchange.</div></div>
        </div>
        <div class="sub-card"><strong>Order Automations with Shopify Flow</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Settings → Apps → Shopify Flow</span> → Create workflow.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Example: Auto-tag high-value orders, auto-notify warehouse, auto-cancel risky orders.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 6. PRODUCTS DEEP DIVE -->
<div class="slide" id="sec-products"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🏷️ Core Feature Deep Dive — Products & Inventory</h2><p class="subtitle">Add, organize, and manage your product catalog.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Product Basics</h3>
        <div class="sub-card"><strong>Adding a Product</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><span class="step-nav">Products → Add product</span>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Fill in: <strong>Title</strong>, <strong>Description</strong> (use rich text editor for formatting).</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Upload <strong>Media</strong> — images, videos. Drag to reorder; first image = featured.</div></div>
          <div class="step"><div class="step-num green">4</div><div class="step-text">Set <strong>Price</strong> and <strong>Compare at price</strong> (for sale items). Set <strong>Cost per item</strong> for margin tracking.</div></div>
          <div class="step"><div class="step-num green">5</div><div class="step-text">Under Inventory: enter <strong>SKU</strong> and <strong>quantity</strong>. Toggle "Track quantity" on.</div></div>
          <div class="step"><div class="step-num green">6</div><div class="step-text">Set <strong>Status</strong> to Active → <strong>Save</strong>.</div></div>
        </div>
        <div class="sub-card"><strong>Collections (Product Groups)</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><span class="step-nav">Products → Collections → Create collection</span>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Manual:</strong> Hand-pick products. <strong>Automated:</strong> Set rules (e.g., tag = "summer").</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Add title, description, image → Save. Collections appear in your store navigation.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Product Organization</h3>
        <div class="sub-card"><strong>Variants (Size, Color, Material)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">On product page, scroll to <strong>Variants</strong> → Add options (e.g., Size: S, M, L; Color: Red, Blue).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Each combination becomes a variant with its own price, SKU, inventory, and image.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Click a variant to edit individually. Use bulk editor for multiple variants at once.</div></div>
        </div>
        <div class="sub-card"><strong>Inventory Management</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Products → Inventory</span> — view all SKUs and quantities across locations.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Adjust inventory: click quantity → enter adjustment → add reason.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Transfer stock between locations: <span class="step-nav">Products → Transfers → Create transfer</span>.</div></div>
        </div>
        <div class="sub-card"><strong>Product Tags & SEO</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><strong>Tags:</strong> Add tags for organization and automated collections (e.g., "bestseller", "clearance").</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><strong>SEO:</strong> Scroll to bottom of product page → edit SEO title, meta description, and URL handle.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Catalog Power Tools</h3>
        <div class="sub-card"><strong>Metafields & Metaobjects</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Settings → Custom data → Metafields</span> → add definitions for products (e.g., "Care instructions", "Material").</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Metaobjects: <span class="step-nav">Content → Metaobjects</span> → create structured data types (e.g., designer profiles, size charts).</div></div>
        </div>
        <div class="sub-card"><strong>Bulk Operations & CSV Import</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Products → Import</span> → upload CSV file following Shopify's template format.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Bulk editor: Select multiple products → <strong>Bulk edit</strong> → change prices, inventory, tags in a spreadsheet view.</div></div>
        </div>
        <div class="sub-card"><strong>Catalogs & B2B Pricing</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Products → Catalogs</span> → create catalogs with custom pricing for specific customer groups or companies.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Assign catalogs to B2B company profiles for wholesale or volume-based pricing.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 7. CUSTOMERS, MARKETING & DISCOUNTS -->
<div class="slide" id="sec-customers"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>👥📣 Core Feature Deep Dive — Customers, Marketing & Discounts</h2><p class="subtitle">Manage customer relationships, run campaigns, and create promotions.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Customer & Discount Basics</h3>
        <div class="sub-card"><strong>👥 Customer Profiles</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Customers</strong> → view list. Each profile shows order history, contact info, notes, and tags.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click a customer → view full profile with order timeline and total spent.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Add internal <strong>Notes</strong> and <strong>Tags</strong> to customer profiles for CRM tracking.</div></div>
        </div>
        <div class="sub-card"><strong>💰 Creating a Basic Discount</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><span class="step-nav">Discounts → Create discount</span>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Choose type: <strong>Amount off products</strong>, <strong>Amount off order</strong>, <strong>Free shipping</strong>, or <strong>Buy X get Y</strong>.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Set code or automatic. Configure value, minimum requirements, active dates → <strong>Save</strong>.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Segments & Campaigns</h3>
        <div class="sub-card"><strong>👥 Customer Segments</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Customers → Segments → Create segment</span>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Use filters: <code>amount_spent > 100</code>, <code>orders_count >= 3</code>, <code>tag = 'VIP'</code>.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Save segments for targeted marketing and discount campaigns.</div></div>
        </div>
        <div class="sub-card"><strong>📣 Shopify Email Marketing</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Marketing → Create campaign → Shopify Email</span>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Choose template → customize with drag-and-drop editor → add products, branding, CTAs.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Select recipients (all subscribers or specific segment) → schedule or send immediately.</div></div>
        </div>
        <div class="sub-card"><strong>📊 Marketing Analytics</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Marketing → overview</span> — see sessions attributed to campaigns, conversion rates.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Click individual campaigns → view opens, clicks, orders, and revenue generated.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Advanced Targeting</h3>
        <div class="sub-card"><strong>Automatic Discounts & Combinations</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Create discount → select <strong>Automatic</strong> → discount applies at checkout without a code.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Under Combinations: choose which discounts can stack (product + shipping, etc.).</div></div>
        </div>
        <div class="sub-card"><strong>Shopify Flow — Marketing Automations</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Use Shopify Flow to auto-tag customers after purchase, send targeted campaigns, or trigger loyalty actions.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Example workflow: Customer places 5th order → auto-tag "Loyal" → add to VIP segment.</div></div>
        </div>
        <div class="sub-card"><strong>B2B Company Profiles</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Customers → Companies</span> → create company profiles with locations, contacts, and custom catalogs.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Set payment terms (Net 30/60/90) and assign specific pricing catalogs.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 8. ONLINE STORE & CONTENT -->
<div class="slide" id="sec-storefront"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🏪 Core Feature Deep Dive — Online Store & Content</h2><p class="subtitle">Themes, pages, navigation, and storefront management.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Storefront Basics</h3>
        <div class="sub-card"><strong>Understanding the Theme Editor</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><span class="step-nav">Online Store → Themes → Customize</span>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Left panel shows <strong>sections</strong> and <strong>blocks</strong>. Click any section to edit content, images, and text.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Use the page selector dropdown (top bar) to switch between Home, Product, Collection, Cart pages.</div></div>
          <div class="step"><div class="step-num green">4</div><div class="step-text">Click <strong>Save</strong> when done. Changes are live immediately on the published theme.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Always confirm with your manager before editing a live theme. For practice, duplicate the theme first: <span class="step-nav">Actions → Duplicate</span>.</div>
        </div>
        <div class="sub-card"><strong>Pages & Navigation</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><span class="step-nav">Online Store → Pages → Add page</span> — create About, Contact, FAQ pages.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><span class="step-nav">Online Store → Navigation</span> — edit Main menu and Footer menu to add/reorder links.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Content & Blog</h3>
        <div class="sub-card"><strong>Blog Posts</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Online Store → Blog posts → Create blog post</span>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Add title, content (rich text), featured image, author, and tags.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Set visibility to <strong>Visible</strong> → Save. Blog posts can improve SEO and drive traffic.</div></div>
        </div>
        <div class="sub-card"><strong>Theme Sections & Blocks</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">In theme editor: <strong>Add section</strong> → choose from available section types (slideshow, featured collection, testimonials, etc.).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Within sections, add <strong>blocks</strong> for granular content (individual slides, text blocks, buttons).</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Drag to reorder sections and blocks. Toggle visibility eye icon to show/hide.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Theme Power Tools</h3>
        <div class="sub-card"><strong>Edit Theme Code</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Online Store → Themes → ⋮ → Edit code</span>.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Shopify uses <strong>Liquid</strong> templating language. Layout, templates, sections, snippets, and assets folders.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Only edit code if you have development experience and manager approval. Always work on a duplicate theme.</div>
        </div>
        <div class="sub-card"><strong>Checkout Customization</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Settings → Checkout</span> → configure checkout appearance, customer account options, order processing rules.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Checkout Blocks app: extend checkout with upsells, trust badges, and custom fields.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 9. SIDEKICK AI -->
<div class="slide" id="sec-sidekick"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>✨ Sidekick AI & Shopify Magic</h2><p class="subtitle">Built-in AI assistant — no separate tool needed.</p></div>
  <div class="slide-body">
    <div class="callout"><strong>💡 What is Sidekick?</strong> Shopify's AI-powered commerce assistant built directly into your admin. It understands your store data and can generate content, answer questions, analyze data, create product descriptions, build discount codes, and even make theme edits — all through natural language conversation. Click the <strong>purple glasses icon</strong> in the top bar to open it.</div>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Getting Started with AI</h3>
        <div class="sub-card"><strong>Opening Sidekick</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Click the <strong>purple glasses icon</strong> (✨) in the top bar of any admin page.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Type a question or command in natural language: "What were my sales this week?" or "Help me write a product description."</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Sidekick responds with insights, generated content, or action suggestions. Review before applying.</div></div>
        </div>
        <div class="sub-card"><strong>Shopify Magic — Product Descriptions</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">When editing a product, click the <strong>✨ icon</strong> in the description field.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Describe your product's features, audience, and tone → generate.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Always review and edit</strong> generated text before saving. Add your brand voice.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>AI Across the Admin</h3>
        <div class="sub-card"><strong>Content & Marketing AI</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Shopify Email: use AI suggestions for subject lines and email body copy.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Ask Sidekick: "Create a discount code for 20% off summer collection" — it builds the discount for you to review.</div></div>
        </div>
        <div class="sub-card"><strong>Data Analysis & Insights</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Ask Sidekick: "Why are my sales down this week?" — it analyzes trends and surfaces possible causes.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">"What are my best-selling products this month?" — instant data summary.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Power AI Features</h3>
        <div class="sub-card"><strong>AI Image Generation</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Ask Sidekick to generate product banners, marketing visuals, or hero images from text prompts.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Refine with follow-up instructions: "Make it more vibrant" or "Use a beach setting."</div></div>
        </div>
        <div class="sub-card"><strong>Sidekick Skills & Theme Editing</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Save frequently used prompts as <strong>Skills</strong> — reusable shortcuts for recurring tasks (up to 25).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Theme editing: "Make this button rounded" or "Change the header font" — Sidekick modifies theme code.</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text">Sidekick can build <strong>custom admin apps</strong> from plain-language descriptions — no coding required.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Always review AI-generated changes before publishing. Sidekick presents changes for your review — nothing goes live without approval.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 10. INTERMEDIATE RESOURCES -->
<div class="slide" id="sec-intres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-intermediate">Intermediate</span></div><h2>🟡 Intermediate Training — Self-Paced Resources</h2><p class="subtitle">Optional but strongly recommended.</p></div>
  <div class="slide-body">
    <div class="card intermediate"><div class="card-title">Shopify Help Center — Managing Orders <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Deep documentation on order processing, fulfillment workflows, returns, and exchanges.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Orders</span><span class="tag t4">Fulfillment</span></div><a href="https://help.shopify.com/en/manual/orders" target="_blank">→ Orders documentation at help.shopify.com</a></div>
    <div class="card intermediate"><div class="card-title">Shopify Academy — SEO Training <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Learn on-page SEO techniques for Shopify stores to improve search visibility and organic traffic.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1 hr &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">SEO</span><span class="tag t4">Academy</span></div><a href="https://www.shopifyacademy.com" target="_blank">→ SEO Training on Shopify Academy</a></div>
    <div class="card intermediate"><div class="card-title">Shopify Academy — Conversion Rate Optimization <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Apply testing methodologies to create data-driven improvements for your store's conversion rates.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">CRO</span><span class="tag t4">Analytics</span></div><a href="https://www.shopifyacademy.com" target="_blank">→ CRO Course on Shopify Academy</a></div>
    <div class="card intermediate"><div class="card-title">YouTube: Shopify Intermediate Tips <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">In-depth video tutorials covering product variants, inventory management, discounts, and Shopify Email.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=shopify+admin+intermediate+tips+2025" target="_blank">→ Search YouTube: "Shopify admin intermediate tips 2025"</a></div>
    <div class="card intermediate"><div class="card-title">Shopify Help Center — Analytics & Reports <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Learn to read dashboards, customize reports, and use analytics to make data-driven decisions.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Analytics</span><span class="tag t4">Reports</span></div><a href="https://help.shopify.com/en/manual/reports" target="_blank">→ Analytics documentation at help.shopify.com</a></div>
  </div>
</div>

<!-- 11. ADVANCED RESOURCES -->
<div class="slide" id="sec-advres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-advanced">Advanced</span></div><h2>🔴 Advanced Training — Deep Mastery Resources</h2><p class="subtitle">Optional — for technical depth or leadership roles.</p></div>
  <div class="slide-body">
    <div class="card advanced"><div class="card-title">Shopify Academy — Shopify Flow & Automation <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Understand ecommerce automation and Shopify Flow to streamline operations and reduce manual work.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~2 hrs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Automation</span><span class="tag t4">Flow</span></div><a href="https://www.shopifyacademy.com" target="_blank">→ Shopify Flow course on Shopify Academy</a></div>
    <div class="card advanced"><div class="card-title">Shopify Academy — Shipping Strategies <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Develop shipping strategies, configure rates, and optimize fulfillment for multi-location operations.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~2 hrs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Shipping</span><span class="tag t4">Fulfillment</span></div><a href="https://www.shopifyacademy.com" target="_blank">→ Shipping course on Shopify Academy</a></div>
    <div class="card advanced"><div class="card-title">Shopify Academy — Developing Apps for Shopify <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Learn multi-function tools, commerce-pillar extensions, and how to stay current with product changes for developers.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~3–5 hrs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Development</span><span class="tag t4">Apps</span></div><a href="https://www.shopifyacademy.com" target="_blank">→ App Development on Shopify Academy</a></div>
    <div class="card advanced"><div class="card-title">Shopify Liquid Documentation <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Reference for Shopify's Liquid templating language — for theme customization and advanced storefront development.</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Liquid</span><span class="tag t4">Themes</span></div><a href="https://shopify.dev/docs/api/liquid" target="_blank">→ Liquid documentation at shopify.dev</a></div>
    <div class="card advanced"><div class="card-title">YouTube: Shopify Advanced Admin & Automation <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Shopify Flow automations, Liquid code editing, API integrations, and multi-store management.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">YouTube</span><span class="tag t4">Automation</span></div><a href="https://www.youtube.com/results?search_query=shopify+advanced+admin+automation+flow+2025" target="_blank">→ Search YouTube: "Shopify advanced admin automation 2025"</a></div>
  </div>
</div>

<!-- 12. CERTIFICATIONS -->
<div class="slide" id="sec-certs"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Certifications</span></div><h2>🏅 Certifications & Verified Skills</h2><p class="subtitle">Optional credentials. Shareable on LinkedIn via Credly.</p></div>
  <div class="slide-body">
    <div class="callout" style="background:#fffbeb;border-left-color:#ca8a04"><strong style="color:#854d0e">💡 Optional Personal Investment:</strong> The certifications listed below are <strong>not covered by InvenTel</strong> and require an out-of-pocket fee to attempt the assessments or access the proctored exams. The learning content and courses on Shopify Academy can be explored at no cost, but earning the official verified skill badge requires a paid assessment. These credentials are entirely optional — they are personal career development tools you can pursue on your own time if you'd like to formally validate your Shopify skills.</div>
    <table class="cert-table"><thead><tr><th>Certification / Badge</th><th>Platform</th><th>Skill Level</th><th>Est. Time</th></tr></thead><tbody>
      <tr><td><strong>Navigating the Shopify Admin — Verified Skill</strong></td><td>Shopify Academy</td><td><span class="badge badge-beginner">Beginner</span></td><td>~1–2 hrs</td></tr>
      <tr><td><strong>Solution Planning Fundamentals — Verified Skill</strong></td><td>Shopify Academy</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~2–3 hrs</td></tr>
      <tr><td><strong>Shopify Development Fundamentals — Verified Skill</strong></td><td>Shopify Academy</td><td><span class="badge badge-advanced">Advanced</span></td><td>~3–5 hrs</td></tr>
      <tr><td><strong>Developing Apps for Shopify — Verified Skill</strong></td><td>Shopify Academy</td><td><span class="badge badge-advanced">Advanced</span></td><td>~2 hrs (exam)</td></tr>
    </tbody></table>
    <p style="font-size:12px;color:#777;margin-top:10px">Browse all learning paths at <a href="https://www.shopifyacademy.com" target="_blank">shopifyacademy.com</a>. Verified skill badges are valid for 2 years and shareable via Credly.</p>
  </div>
</div>

<!-- 13. NEW HIRE CHECKLIST -->
<div class="checklist-section mandatory" id="cl-mandatory"><div class="checklist-head mandatory"><h2>✅ New Hire Onboarding Checklist</h2><div class="ch-sub">Complete all tasks within your first 30 days</div><span class="ch-badge">Mandatory · 30-Day Deadline</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📱 Mobile App (OPTIONAL)</div><ul class="checklist-items"><li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Download the Shopify mobile app <span class="ci-est">Optional</span></div><div class="ci-desc">iOS App Store or Google Play → Shopify → sign in with your account.</div></div></li></ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">⚠️ Multi-Store Access Verification (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Request store access list from direct report <span class="ci-est">~5 min</span></div><div class="ci-desc">Get the list of which brand stores you should access and your role in each.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Sign in to Shopify admin <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Verify access to all assigned stores <span class="ci-est">~15 min</span></div><div class="ci-desc">Check store switcher, verify each store and permissions match your access list.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Follow up on any missing access <span class="ci-est">~10 min</span></div><div class="ci-desc">If stores or permissions don't match, contact direct report or HR Training Coordinator.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Set up profile photo and verify account details <span class="ci-est">~5 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">🧭 Admin Navigation (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Learn the admin layout — sidebar, top bar, search (Sec 4) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Practice using search bar to find orders/products (Sec 4) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📦🏷️👥🏪✨ Feature Training (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Orders beginner tutorials (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Products beginner tutorials (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Customers & Discounts tutorials (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Online Store basics (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Try Sidekick AI: ask a question + generate a product description (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📚 External Resources (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Review Shopify Help Center Getting Started guide (Sec 2) <span class="ci-est">~1 hr</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Shopify Academy — Shopify 101 course (Sec 3) <span class="ci-est">~90 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Watch YouTube Beginner Tutorial (Sec 3) <span class="ci-est">~45 min</span></div></div></li>
    </ul></div>
  </div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-mandatory" style="color:#166534">0 of 16 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-mandatory" style="background:#16a34a"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#166534" onclick="resetList('mandatory')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('mandatory')">📝 Take Quiz</button></div></div>
</div>

<!-- 14. INTERMEDIATE CHECKLIST -->
<div class="checklist-section intermediate" id="cl-intermediate"><div class="checklist-head intermediate"><h2>✅ Intermediate Learner Checklist</h2><div class="ch-sub">Self-paced — after mandatory training</div><span class="ch-badge">Self-Paced · Optional</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-intermediate">All Features Intermediate</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Create a draft order (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Set up product variants (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Create an automated collection (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Build a customer segment (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Send a Shopify Email campaign (Sec 7) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Create a blog post (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Use Sidekick for data analysis (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Edit product SEO fields (Sec 6) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Review Analytics dashboard and interpret key metrics (Sec 10) <span class="ci-est">~20 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-intermediate" style="color:#854d0e">0 of 9 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-intermediate" style="background:#ca8a04"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#854d0e" onclick="resetList('intermediate')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('intermediate')">📝 Take Quiz</button></div></div>
</div>

<!-- 15. ADVANCED CHECKLIST -->
<div class="checklist-section advanced" id="cl-advanced"><div class="checklist-head advanced"><h2>✅ Advanced Learner Checklist</h2><div class="ch-sub">Optional — deep mastery</div><span class="ch-badge">Optional · Deep Mastery</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-advanced">All Features Advanced</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Process a partial fulfillment / split shipment (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Create a Shopify Flow automation (Sec 5) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Set up metafields on a product (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Import products via CSV (Sec 6) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Configure automatic + combinable discounts (Sec 7) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Edit theme code on a duplicate theme (Sec 8) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Use Sidekick to generate images and save a Skill (Sec 9) <span class="ci-est">~15 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-advanced" style="color:#991b1b">0 of 7 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-advanced" style="background:#991b1b"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#991b1b" onclick="resetList('advanced')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('advanced')">📝 Take Quiz</button></div></div>
</div>

<!-- 16. QUICK REFERENCE -->
<div class="slide" id="sec-qr"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Quick Reference</span></div><h2>🔗 Quick Reference — Platform Access & Help Centers</h2></div>
  <div class="slide-body"><div class="qr-grid">
    <div class="qr-card"><h4>🔐 Platform Access</h4><ul><li><a href="https://shopify.com/admin" target="_blank">Shopify Admin Login</a></li><li><a href="https://help.shopify.com" target="_blank">Shopify Help Center</a></li><li><a href="https://www.shopifyacademy.com" target="_blank">Shopify Academy</a></li><li><a href="https://apps.shopify.com" target="_blank">Shopify App Store</a></li><li><a href="https://shopify.dev" target="_blank">Shopify Dev Documentation</a></li></ul></div>
    <div class="qr-card"><h4>🎓 Help Center Sections</h4><ul><li><a href="https://help.shopify.com/en/manual/shopify-admin" target="_blank">Admin Overview</a></li><li><a href="https://help.shopify.com/en/manual/orders" target="_blank">Orders</a></li><li><a href="https://help.shopify.com/en/manual/products" target="_blank">Products</a></li><li><a href="https://help.shopify.com/en/manual/customers" target="_blank">Customers</a></li><li><a href="https://help.shopify.com/en/manual/online-store" target="_blank">Online Store</a></li><li><a href="https://help.shopify.com/en/manual/reports" target="_blank">Analytics</a></li><li><a href="https://help.shopify.com/en/manual/your-account/users" target="_blank">Users & Permissions</a></li></ul></div>
    <div class="qr-card"><h4>🏅 Certifications</h4><ul><li><a href="https://www.shopifyacademy.com" target="_blank">Shopify Academy (all courses)</a></li><li><a href="https://www.shopify.com/partners/education" target="_blank">Partner Education</a></li></ul></div>
    <div class="qr-card"><h4>🎬 YouTube</h4><ul><li><a href="https://www.youtube.com/results?search_query=shopify+admin+tutorial+for+beginners+2025" target="_blank">Beginner Tutorial</a></li><li><a href="https://www.youtube.com/results?search_query=shopify+admin+intermediate+tips+2025" target="_blank">Intermediate Tips</a></li><li><a href="https://www.youtube.com/results?search_query=shopify+advanced+admin+automation+flow+2025" target="_blank">Advanced Automation</a></li></ul></div>
  </div></div>
</div>

<!-- FINAL NOTE -->
<div class="final-note" id="sec-final">
  <p style="font-size:15px;font-weight:700;margin-bottom:10px">📌 Final Note — Shopify Training</p>
  <p style="margin-bottom:10px">All <strong>Beginner-level content</strong> is <strong>mandatory</strong> within your first <strong>30 days</strong>. Intermediate and Advanced training is self-paced.</p>
  <p style="margin-bottom:10px"><strong>Multi-Store Access:</strong> Since InvenTel manages multiple brand stores, your first step is always to confirm your access list with your direct report. Do not assume which stores you need — verify, and escalate if anything is missing.</p>
  <p style="margin-bottom:10px">This deck is <strong>self-contained</strong> — every deep-dive includes complete step-by-step instructions. Click any section header to collapse it once you've completed it. External links and help centers are in the Quick Reference.</p>
  <p style="margin-bottom:10px">Use the <strong>New Hire Checklist</strong> to track progress and share with your manager.</p>
  <p style="margin-bottom:10px">For access, credentials, or training questions — reach out to the <strong>HR Training Coordinator who assisted you during onboarding</strong>.</p>
  <p style="margin-bottom:10px"><a href="https://help.shopify.com" target="_blank">Shopify Help Center →</a></p>
  <p style="font-size:11px;opacity:.7;margin-top:14px">Last updated: April 6, 2025</p>
</div>

<!-- FLOATING NAV -->
<button class="float-nav-btn" onclick="toggleFloatNav()" title="Jump to section">📋</button>
<div class="float-nav-panel" id="float-nav">
  <div class="float-nav-hd">📋 Jump to Section</div>
  <ul class="float-nav-list">
    <li><a class="fnl-section" href="#sec-toc" onclick="closeNav()">📋 Table of Contents</a></li>
    <li><a class="fnl-section" href="#sec-overview" onclick="closeNav()">🛍️ 1. Platform Overview</a></li>
    <li><a class="fnl-section" href="#sec-hub" onclick="closeNav()">🎓 2. Official Learning Hub</a></li>
    <li><a class="fnl-section" href="#sec-begres" onclick="closeNav()">🟢 3. Beginner Resources</a></li>
    <li><a class="fnl-section" href="#sec-start" onclick="closeNav()">🟢 4. Getting Started</a></li>
    <li><a class="fnl-section" href="#sec-orders" onclick="closeNav()">📦 5. Orders & Fulfillment</a></li>
    <li><a class="fnl-section" href="#sec-products" onclick="closeNav()">🏷️ 6. Products & Inventory</a></li>
    <li><a class="fnl-section" href="#sec-customers" onclick="closeNav()">👥 7. Customers & Marketing</a></li>
    <li><a class="fnl-section" href="#sec-storefront" onclick="closeNav()">🏪 8. Online Store & Content</a></li>
    <li><a class="fnl-section" href="#sec-sidekick" onclick="closeNav()">✨ 9. Sidekick AI</a></li>
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
var TOTALS={mandatory:16,intermediate:9,advanced:7};
function tick(el,s){el.classList.toggle('checked');updateBar(s);}
function updateBar(s){var c=document.getElementById('cl-'+s),ck=c.querySelectorAll('.cb.checked:not([data-optional])').length,t=TOTALS[s],p=t>0?Math.round((ck/t)*100):0;document.getElementById('lbl-'+s).textContent=ck+' of '+t+' completed';document.getElementById('bar-'+s).style.width=p+'%';}
function resetList(s){document.getElementById('cl-'+s).querySelectorAll('.cb.checked').forEach(function(cb){cb.classList.remove('checked');});updateBar(s);}

/* QUIZ DATA — 25 per level, pulls 20 */
var qSection,qIndex,qScore,qAnswered,qQuestions;
var QUIZ={
mandatory:{title:'New Hire Onboarding',sub:'Mandatory · 20 Questions · Pass = 70%',hd:'q-mandatory',track:'New Hire Onboarding — Shopify',qs:20,questions:[
{q:'What is the FIRST thing you should do on your first day with Shopify?',opts:['Start editing products','Request your store access list from your direct report','Install Shopify apps','Change the theme'],ans:1},
{q:'How do you switch between multiple brand stores?',opts:['Log out and log back in','Use the store switcher in the top bar','Open different browsers','Clear cookies'],ans:1},
{q:'What keyboard shortcut opens the Shopify admin search bar?',opts:['Ctrl+F','Ctrl+S','Ctrl+K or ⌘+K','Alt+Tab'],ans:2},
{q:'Where is the main navigation in the Shopify admin?',opts:['Top toolbar','Right panel','Sidebar on the left','Footer menu'],ans:2},
{q:'If a store is missing from your store switcher, what should you do?',opts:['Create a new store','Contact your direct report immediately','Ask a coworker to add you','Wait a few days'],ans:1},
{q:'What does "Unfulfilled" status mean on an order?',opts:['Payment failed','Items have not been shipped yet','Customer cancelled','Order is on hold'],ans:1},
{q:'How do you fulfill an order in Shopify?',opts:['Delete the order','Open order → Fulfill items → add tracking → Fulfill','Email the customer manually','Move to Drafts'],ans:1},
{q:'What happens when you fulfill an order with tracking?',opts:['Nothing','Customer is automatically emailed tracking info','Order is deleted','Product is restocked'],ans:1},
{q:'How do you process a refund?',opts:['Delete the order','Open order → Refund → enter quantity → Refund','Call Shopify support','Create a new order'],ans:1},
{q:'How do you add a new product?',opts:['Settings → Products','Products → Add product','Online Store → New','Orders → Create'],ans:1},
{q:'What is the first image on a product page called?',opts:['Hero image','Thumbnail','Featured image','Banner'],ans:2},
{q:'What does "Compare at price" do?',opts:['Shows competitor pricing','Displays a strikethrough original price to show a sale','Compares variants','Links to another product'],ans:1},
{q:'What are Collections in Shopify?',opts:['Customer groups','Groups of products organized together','Order categories','Staff roles'],ans:1},
{q:'Where do you view customer profiles?',opts:['Products section','Settings → Users','Sidebar → Customers','Analytics'],ans:2},
{q:'What can you add to a customer profile for internal tracking?',opts:['Discounts only','Notes and Tags','Product reviews','Payment methods'],ans:1},
{q:'How do you create a discount code?',opts:['Settings → Payments','Discounts → Create discount','Products → Sale','Marketing → Promote'],ans:1},
{q:'What does the theme editor let you do?',opts:['Write code only','Visually edit storefront sections, blocks, and content','Manage orders','Send emails'],ans:1},
{q:'Where do you access the theme editor?',opts:['Settings → Design','Online Store → Themes → Customize','Products → Display','Marketing → Theme'],ans:1},
{q:'What is Sidekick in Shopify?',opts:['A third-party app','An AI assistant built into the admin','A shipping carrier','A payment method'],ans:1},
{q:'How do you open Sidekick?',opts:['Settings → AI','Click the purple glasses icon in the top bar','Install from App Store','Customers → AI'],ans:1},
{q:'What should you always do before editing a live theme?',opts:['Nothing special','Duplicate the theme first','Delete the old theme','Publish a blank theme'],ans:1},
{q:'Where do you check your assigned permissions?',opts:['Home dashboard','Settings → Users and permissions → find your name','Products → Access','Sidekick'],ans:1},
{q:'What type of discount applies automatically at checkout without a code?',opts:['Manual discount','Draft discount','Automatic discount','Hidden discount'],ans:2},
{q:'What is the Home dashboard?',opts:['Customer-facing homepage','Admin landing page showing metrics and action items','Theme editor','Settings page'],ans:1},
{q:'Who should you contact if you have access issues?',opts:['Shopify support directly','Your direct report or the HR Training Coordinator','Another store owner','App developer'],ans:1}
]},
intermediate:{title:'Intermediate Path',sub:'Intermediate · 20 Questions · Pass = 70%',hd:'q-intermediate',track:'Intermediate — Shopify',qs:20,questions:[
{q:'What is a Draft Order used for?',opts:['Cancelled orders','Orders created manually for phone/wholesale/custom pricing','Saved product drafts','Test orders'],ans:1},
{q:'How do you save a custom filter view in Orders?',opts:['Cannot save filters','Set filters → save as a named view','Export to CSV','Bookmark the URL'],ans:1},
{q:'What are product Variants?',opts:['Different products','Combinations of options like size and color for one product','Customer groups','Discount types'],ans:1},
{q:'How do you adjust inventory quantities?',opts:['Delete and re-add product','Products → Inventory → click quantity → enter adjustment','Settings → Stock','Cannot adjust'],ans:1},
{q:'What do Tags on products help with?',opts:['SEO only','Organization and automated collection rules','Pricing','Shipping'],ans:1},
{q:'How do you create a Customer Segment?',opts:['Tags only','Customers → Segments → Create segment with filters','Marketing → Segment','Settings → Groups'],ans:1},
{q:'What filter syntax finds customers who spent over $100?',opts:['price > 100','amount_spent > 100','total > 100','orders > 100'],ans:1},
{q:'How do you create a Shopify Email campaign?',opts:['Settings → Email','Marketing → Create campaign → Shopify Email','Customers → Email','Products → Promote'],ans:1},
{q:'Where do you edit a product\'s SEO title and meta description?',opts:['Settings → SEO','Bottom of the product page in the SEO section','Theme editor','Cannot edit SEO'],ans:1},
{q:'What is the difference between Manual and Automated collections?',opts:['No difference','Manual = hand-pick products; Automated = products added by rules','Manual is faster','Automated requires coding'],ans:1},
{q:'How do you create a blog post?',opts:['Products → Blog','Online Store → Blog posts → Create blog post','Marketing → Content','Pages → Blog'],ans:1},
{q:'What are Sections and Blocks in the theme editor?',opts:['Code files','Sections are page areas; Blocks are content elements within sections','Product categories','Staff roles'],ans:1},
{q:'How do you edit an existing order?',opts:['Cannot edit orders','Open order → ⋮ → Edit order → add/remove items','Delete and recreate','Customers → Edit'],ans:1},
{q:'What can you ask Sidekick to analyze?',opts:['Only products','Sales trends, best sellers, and reasons for changes in performance','Only customer data','Theme code only'],ans:1},
{q:'How do you transfer stock between locations?',opts:['Manual adjustment only','Products → Transfers → Create transfer','Settings → Locations','Cannot transfer'],ans:1},
{q:'Where do you view marketing campaign performance?',opts:['Home only','Marketing → overview → click individual campaigns','Settings → Reports','Cannot view'],ans:1},
{q:'What does the Bulk Editor let you do?',opts:['Delete products in bulk','Edit multiple products\' prices, inventory, and tags in a spreadsheet view','Bulk email customers','Bulk fulfill orders'],ans:1},
{q:'How do you add sections to a theme page?',opts:['Edit code','In theme editor: Add section → choose type','Settings → Sections','Cannot add'],ans:1},
{q:'What is an Appointment Schedule?',opts:['A Shopify feature','Not a Shopify feature — that\'s Google Calendar','Staff shift planner','Discount scheduler'],ans:1},
{q:'How do you use the drag-and-drop email editor?',opts:['Install third-party app','Marketing → Shopify Email → choose template → customize','Settings → Notifications','Customers → Email'],ans:1},
{q:'What does "Compare at price" do for a sale item?',opts:['Hides the price','Shows the original price with a strikethrough next to the sale price','Sends a price alert','Compares to competitors'],ans:1},
{q:'Can Sidekick create discount codes for you?',opts:['No, discounts are manual only','Yes — ask Sidekick to create one and review before applying','Only through API','Only store owners can'],ans:1},
{q:'How do you reorder sections in the theme editor?',opts:['Edit code','Drag and drop sections to new positions','Cannot reorder','Settings → Layout'],ans:1},
{q:'What does toggling the visibility eye icon do in theme editor?',opts:['Deletes the section','Shows or hides a section without removing it','Changes permissions','Enables editing'],ans:1},
{q:'Where do you view order tags?',opts:['Analytics','Open an order → Tags section','Settings → Orders','Products page'],ans:1}
]},
advanced:{title:'Advanced Mastery',sub:'Advanced · 20 Questions · Pass = 70%',hd:'q-advanced',track:'Advanced Mastery — Shopify',qs:20,questions:[
{q:'What is a partial fulfillment?',opts:['Cancelling part of an order','Shipping only some items from an order, leaving the rest unfulfilled','A draft order','Refunding part of the payment'],ans:1},
{q:'What is Shopify Flow used for?',opts:['Theme editing','Automating workflows with triggers, conditions, and actions','Payment processing','Customer support'],ans:1},
{q:'Example Shopify Flow automation for orders?',opts:['Auto-tag high-value orders, notify warehouse, or cancel risky orders','Generate invoices only','Theme updates','Discount creation'],ans:0},
{q:'What are Metafields?',opts:['Customer fields','Custom data fields added to products, orders, or other objects','Payment methods','Theme sections'],ans:1},
{q:'Where do you configure Metafield definitions?',opts:['Products → Fields','Settings → Custom data → Metafields','Online Store → Code','Analytics → Data'],ans:1},
{q:'What are Metaobjects?',opts:['Product variants','Structured custom data types like designer profiles or size charts','Order categories','Staff accounts'],ans:1},
{q:'How do you import products in bulk?',opts:['One at a time only','Products → Import → upload CSV file','Settings → Import','Sidekick → Import'],ans:1},
{q:'What is Liquid in Shopify?',opts:['A payment method','The templating language used for themes','A product type','An analytics tool'],ans:1},
{q:'Where do you edit theme code directly?',opts:['Products → Code','Online Store → Themes → ⋮ → Edit code','Settings → Developer','Sidekick → Code'],ans:1},
{q:'What should you always do before editing theme code?',opts:['Nothing','Work on a duplicate theme, never the live theme directly','Disable the store','Export products'],ans:1},
{q:'What are Catalogs used for?',opts:['Blog categories','Custom pricing for specific customer groups or B2B companies','Product images','Theme layouts'],ans:1},
{q:'How do you set payment terms for B2B?',opts:['Cannot set terms','Create company profile → set payment terms (Net 30/60/90)','Settings → Payments','Discounts → Terms'],ans:1},
{q:'What can Sidekick Skills do?',opts:['Install apps','Save frequently used prompts as reusable shortcuts','Create staff accounts','Manage inventory'],ans:1},
{q:'How many Skills can you save in Sidekick?',opts:['5','10','25','Unlimited'],ans:2},
{q:'What can Sidekick generate besides text?',opts:['Nothing else','AI-generated images for banners and marketing visuals','Videos','Podcasts'],ans:1},
{q:'What is Checkout Blocks?',opts:['Payment methods','An app to extend checkout with upsells, trust badges, and custom fields','Order tags','Discount codes'],ans:1},
{q:'How do you configure return shipping labels?',opts:['Cannot do in Shopify','Open order → Return items → create return shipping label','Settings → Returns','Sidekick → Returns'],ans:1},
{q:'What does the activity panel on an order show?',opts:['Product details','Complete timeline of all actions taken on that order','Customer reviews','Inventory levels'],ans:1},
{q:'How do combinable discounts work?',opts:['They cannot stack','Under Combinations, choose which discounts can stack together','They auto-combine','Admin setting only'],ans:1},
{q:'Best practice for Sidekick AI output?',opts:['Accept everything immediately','Always review AI output — verify accuracy, refine, and add brand voice before publishing','Only use for images','Skip for important content'],ans:1}
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
