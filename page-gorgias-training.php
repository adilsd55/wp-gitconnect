<?php /* Template Name: Gorgias Training */ ?>
<?php bh_require_login(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>InvenTel — Gorgias CRM Training (Self-Contained) v3.1</title>
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
      <div class="header-h1">💬 Gorgias CRM — Self-Contained Training Guide</div>
      <div class="header-subtitle">Complete step-by-step training for Inbox, Tickets, Macros, Rules, Customer Sidebar, Channels, AI Agent &amp; Auto-Respond — click any section header to collapse/expand</div>
    </div>
    <div class="header-meta">All Levels (Beginner → Advanced)<br>Platform: Gorgias<br>Format: Self-Contained / Standalone<br><span style="color:#fcd9b6;font-weight:700">v3.1 — Search Bar Edition</span></div>
  </div>
</div>
<div class="stat-row">
  <div class="stat-item"><span class="stat-val">8</span><span class="stat-lbl">Core Areas</span></div>
  <div class="stat-item"><span class="stat-val">16+</span><span class="stat-lbl">Training Sections</span></div>
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Skill Levels</span></div>
  <div class="stat-item"><span class="stat-val">30 Days</span><span class="stat-lbl">Mandatory Window</span></div>
  <div class="stat-item"><span class="stat-val">AI Agent</span><span class="stat-lbl">Built-in AI</span></div>
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
      <div class="toc-item" onclick="goTo('sec-overview')">1. Platform Overview<span>What Gorgias is + multi-brand context</span></div>
      <div class="toc-item" onclick="goTo('sec-hub')">2. Official Learning Hub<span>Gorgias Academy + Help Docs</span></div>
      <div class="toc-item" onclick="goTo('sec-begres')">3. Beginner Training Resources<span>Mandatory — external resources</span></div>
      <div class="toc-item" onclick="goTo('sec-start')">4. Getting Started — First Day Setup<span>Multi-brand access verification</span></div>
      <div class="toc-item" onclick="goTo('sec-inbox')">5. Inbox &amp; Tickets Deep Dive<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-macros')">6. Macros &amp; Rules Deep Dive<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-customer')">7. Customer Sidebar &amp; Integrations<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-channels')">8. Channels — Chat, Voice, SMS, Social<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-ai')">9. AI Agent &amp; Auto-Respond<span>AI features across the platform</span></div>
      <div class="toc-item" onclick="goTo('sec-intres')">10. Intermediate Resources<span>Self-paced, optional links</span></div>
      <div class="toc-item" onclick="goTo('sec-advres')">11. Advanced Resources<span>Optional deep mastery links</span></div>
      <div class="toc-item" onclick="goTo('sec-certs')">12. Certifications<span>Gorgias Academy badges</span></div>
      <div class="toc-item" onclick="goTo('cl-mandatory')">13. New Hire Checklist<span>Interactive — mandatory</span></div>
      <div class="toc-item" onclick="goTo('cl-intermediate')">14. Intermediate Checklist<span>Interactive — self-paced</span></div>
      <div class="toc-item" onclick="goTo('cl-advanced')">15. Advanced Checklist<span>Interactive — mastery</span></div>
      <div class="toc-item" onclick="goTo('sec-qr')">16. Quick Reference + Final Note<span>Platform URLs + help centers</span></div>
    </div>
  </div>
</div>

<!-- 1. PLATFORM OVERVIEW -->
<div class="slide" id="sec-overview"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Section 1</span></div><h2>💬 What is Gorgias?</h2><p class="subtitle">The all-in-one customer service helpdesk built for e-commerce.</p></div>
  <div class="slide-body">
    <p style="font-size:13px;color:#5c5c5c;margin-bottom:14px">Gorgias is InvenTel's primary customer service CRM. It unifies every customer conversation — email, live chat, SMS, voice, Facebook, Instagram, WhatsApp, and contact forms — into a single inbox. Every ticket is enriched with full Shopify context: order history, tracking, refund actions, and customer lifetime value all sit right beside the message. Macros, Rules, and AI Agent automate repetitive work so agents can focus on the conversations that actually need a human.</p>
    <div class="callout"><strong>⚠️ Multi-Brand Environment:</strong> InvenTel runs <strong>multiple Gorgias accounts across different brands</strong> (one helpdesk per brand store). You may be added to all of them or just a few, depending on your role. Each account has its own URL, login, macros, rules, and tags. <strong>On your first day, you must request a list from your direct report</strong> of which brand helpdesks you have been added to and what role/permissions you should have. Verify everything matches — if not, follow up immediately with your direct report or the HR Training Coordinator.</div>
    <div class="apps-grid"><span class="app-chip">📥 Inbox</span><span class="app-chip">🎫 Tickets</span><span class="app-chip">⚡ Macros</span><span class="app-chip">🤖 Rules</span><span class="app-chip">👤 Customer Sidebar</span><span class="app-chip">💬 Chat</span><span class="app-chip">📞 Voice</span><span class="app-chip">📱 SMS</span><span class="app-chip">✨ AI Agent</span></div>
    <div class="platform-url"><strong>Gorgias App:</strong> <a href="https://app.gorgias.com" target="_blank">app.gorgias.com</a> (or <code>your-brand.gorgias.com</code>)<br><strong>Gorgias Help Docs:</strong> <a href="https://docs.gorgias.com" target="_blank">docs.gorgias.com</a><br><strong>Gorgias Academy:</strong> <a href="https://academy.gorgias.com" target="_blank">academy.gorgias.com</a><br><strong>Gorgias Status:</strong> <a href="https://status.gorgias.com" target="_blank">status.gorgias.com</a></div>
    <div class="callout"><strong>💡 How it all connects:</strong> When a customer emails, chats, or texts, Gorgias creates a <strong>ticket</strong>. The customer sidebar automatically pulls Shopify data — recent orders, tracking, total spent. Agents reply using <strong>Macros</strong> (saved templates with variables) for speed and consistency. <strong>Rules</strong> auto-tag, auto-assign, and auto-respond before a human even sees the ticket. <strong>Views</strong> are saved filters that let you focus on a specific subset of tickets (e.g., "My open tickets" or "Urgent — VIP customers"). <strong>AI Agent</strong> can fully resolve common questions on its own.</div>
  </div>
</div>


<!-- 2. OFFICIAL LEARNING HUB -->
<div class="slide" id="sec-hub"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official Gorgias</span></div><h2>🎓 Official Learning Hub — Gorgias Academy &amp; Help Docs</h2><p class="subtitle">Beginner-level resources are MANDATORY within 30 days.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Gorgias Help Docs <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official</span></div><div class="card-desc">The primary product reference — how-to articles for every feature in the helpdesk, from inbox setup to advanced rule logic, integrations, and reporting.</div><div class="card-meta"><strong>Format:</strong> Documentation &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">All Features</span><span class="tag t2">Reference</span></div><a href="https://docs.gorgias.com" target="_blank">→ Visit the Gorgias Help Docs</a></div>
    <div class="card"><div class="card-title">Gorgias Academy <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-academy">Gorgias Academy</span></div><div class="card-desc">Gorgias's official training platform with structured courses and certification tracks for agents, admins, and AI specialists. Learning paths cover everything from the fundamentals to advanced automation and AI Agent setup.</div><div class="card-meta"><strong>Format:</strong> Interactive courses &nbsp;|&nbsp; <strong>Level:</strong> Beginner–Advanced</div><div class="tag-row"><span class="tag t2">Courses</span><span class="tag t1">Learning Paths</span><span class="tag t4">Official</span></div><a href="https://academy.gorgias.com" target="_blank">→ Start learning at Gorgias Academy</a></div>
    <div class="card"><div class="card-title">Gorgias for Agents — Learning Path <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official Gorgias Academy learning path covering the day-to-day agent workflow: navigating the inbox, replying to tickets, using macros and views, and the customer sidebar.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1–2 hrs &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">Inbox</span></div><a href="https://academy.gorgias.com" target="_blank">→ Find "Gorgias for Agents" on Gorgias Academy</a></div>
  </div>
</div>

<!-- 3. BEGINNER TRAINING RESOURCES -->
<div class="slide" id="sec-begres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory — Complete Within 30 Days</span></div><h2>🟢 Beginner Training — Mandatory Resources</h2><p class="subtitle">Every team member must complete these before the 30-day mark.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Gorgias Help Docs — Getting Started <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official getting-started documentation covering inbox basics, ticket lifecycle, and core navigation.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1 hr &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">Inbox</span></div><a href="https://docs.gorgias.com" target="_blank">→ Start the Getting Started guide on docs.gorgias.com</a></div>
    <div class="card"><div class="card-title">Gorgias Academy — Agent Fundamentals <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Beginner course covering core agent concepts: ticket statuses, channels, replying, macros, tags, and views.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~90 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Academy</span><span class="tag t2">Foundations</span></div><a href="https://academy.gorgias.com" target="_blank">→ Enroll in Agent Fundamentals on Gorgias Academy</a></div>
    <div class="card"><div class="card-title">Gorgias Help Docs — Shopify Integration <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">How the Gorgias customer sidebar pulls Shopify data — orders, tracking, refunds, and customer info — and how to use those actions inside a ticket.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">Integrations</span></div><a href="https://docs.gorgias.com" target="_blank">→ Read the Shopify Integration article on docs.gorgias.com</a></div>
    <div class="card"><div class="card-title">YouTube: Gorgias Helpdesk Tutorial for Beginners <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Visual walkthrough of the Gorgias inbox and core agent workflow. Best for visual learners who want to see every click.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">YouTube</span><span class="tag t4">Video</span><span class="tag t2">Inbox</span></div><a href="https://www.youtube.com/results?search_query=gorgias+helpdesk+tutorial+for+beginners+2025" target="_blank">→ Search YouTube: "Gorgias helpdesk tutorial for beginners 2025"</a></div>
    <div class="card"><div class="card-title">Gorgias Help Docs — Users, Roles &amp; Permissions <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Understand how user accounts, roles, and team permissions work — critical for multi-brand access.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">Permissions</span></div><a href="https://docs.gorgias.com" target="_blank">→ Read Users &amp; Permissions on docs.gorgias.com</a></div>
  </div>
</div>

<!-- 4. GETTING STARTED -->
<div class="slide" id="sec-start"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory</span></div><h2>🟢 Getting Started — Your First Day with Gorgias</h2><p class="subtitle">Complete these steps in order to verify your access and learn the inbox.</p></div>
  <div class="slide-body">
    <div class="steps-box"><h4>⚠️ Step 0 — Confirm Your Brand Helpdesk Access List</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Request your access list</strong> from your direct report. Ask: "Which brand Gorgias helpdesks have I been added to, and what role/permissions should I have in each?"</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">You should receive a list that includes: <strong>helpdesk URLs</strong> (e.g., <code>brand-a.gorgias.com</code>), <strong>your role</strong> (Agent, Lead Agent, Admin, etc.), and <strong>which channels and views</strong> you should have access to.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Keep this list — you will verify each helpdesk in the next steps.</div></div>
      <div class="step-warning"><strong>⚠️ Critical:</strong> Each brand has a separate Gorgias account with its own URL, macros, and rules. Do not assume access. If you do not have this list, stop and request it before proceeding. If your direct report is unavailable, contact the HR Training Coordinator who assisted you during onboarding.</div>
    </div>
    <div class="steps-box"><h4>🔐 Sign In to Your Gorgias Account</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Open the helpdesk URL provided by your direct report (e.g., <code>your-brand.gorgias.com</code>) — or go to <a href="https://app.gorgias.com" target="_blank">app.gorgias.com</a> and enter your account name.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Enter the <strong>email address</strong> provided by HR or your direct report → click <strong>Continue</strong>.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">If this is your first login, you should have received an invitation email — click the link to set your password.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">If prompted, complete <strong>two-factor authentication</strong> setup. Authenticator app is recommended.</div></div>
      <div class="step-tip"><strong>💡 Tip:</strong> Bookmark each brand helpdesk URL separately — there is no central "switcher" between accounts. You'll log in to each one independently. Many agents keep separate browser windows or profiles per brand to stay organized.</div>
    </div>
    <div class="steps-box"><h4>✅ Verify Access to All Assigned Helpdesks</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">For <strong>each helpdesk URL</strong> on your access list, log in and confirm you can see the <strong>Inbox</strong> (left sidebar).</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Check <span class="step-nav">Settings → Users &amp; Teams → Users</span> → find your name → confirm your <strong>role</strong> matches what your direct report indicated.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Verify you can open a ticket and see the <strong>customer sidebar</strong> on the right with Shopify order data — this confirms the integration is working for your account.</div></div>
      <div class="step-warning"><strong>⚠️ If anything is missing or your role looks wrong:</strong> contact your direct report or the HR Training Coordinator immediately. Do not edit your own permissions.</div>
    </div>
    <div class="steps-box"><h4>👤 Set Up Your Profile</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Click your <strong>profile avatar</strong> (bottom-left corner) → <strong>My profile</strong>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Add a professional <strong>profile photo</strong>. This appears on internal mentions and customer-facing chat replies.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Set your <strong>display name</strong> — exactly as you want customers to see it (e.g., "Sam from Brand A").</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">Configure <strong>email signature</strong> under <span class="step-nav">My profile → Signature</span> — keep it brand-aligned and short.</div></div>
    </div>
    <div class="steps-box"><h4>🧭 Tour the Inbox Layout</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Left sidebar:</strong> Views (Open, Unassigned, Mentions, your custom views), Channels (Email, Chat, SMS, Voice, etc.), and the New ticket button.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Middle column:</strong> The ticket list for the selected view. Tap a ticket to open it.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Main panel:</strong> Conversation thread with customer messages, internal notes, and the reply composer at the bottom.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text"><strong>Right sidebar:</strong> Customer sidebar — name, contact info, Shopify orders, total spent, tags, and integration data.</div></div>
      <div class="step-tip"><strong>💡 Keyboard shortcuts:</strong> Press <span class="kbd">?</span> anywhere to open the shortcut cheat sheet. Common ones: <span class="kbd">C</span> compose, <span class="kbd">R</span> reply, <span class="kbd">N</span> internal note, <span class="kbd">E</span> close, <span class="kbd">/</span> search.</div>
    </div>
    <div class="steps-box"><h4>🎯 Send a Test Reply</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Open any open ticket (or ask your trainer to send a test message to your support address).</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Click the <strong>Reply</strong> field at the bottom → type a short message → click <strong>Send</strong>.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Try an <strong>Internal Note</strong> — switch the composer toggle from "Reply" to "Note", type, and send. Notes are visible only to your team, never to the customer.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">Close the ticket: click <strong>Close</strong> at the top, or press <span class="kbd">E</span>.</div></div>
      <div class="step-tip"><strong>💡 Tip:</strong> If you ever close a ticket by mistake, click <strong>Reopen</strong> from the same button or filter your <strong>Closed</strong> view to find it.</div>
    </div>
  </div>
</div>


<!-- 5. INBOX & TICKETS DEEP DIVE -->
<div class="slide" id="sec-inbox"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📥 Core Feature Deep Dive — Inbox &amp; Tickets</h2><p class="subtitle">Read, reply, organize, and resolve every customer conversation.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Ticket Basics</h3>
        <div class="sub-card"><strong>📥 Reading &amp; Replying</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">From the left sidebar, click <strong>Open</strong> to see all unresolved tickets assigned to your team.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click any ticket to open it. The conversation thread appears in the main panel.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Click <strong>Reply</strong> at the bottom → type your response → click <strong>Send</strong> (or <span class="kbd">Ctrl/⌘ + Enter</span>).</div></div>
          <div class="step"><div class="step-num green">4</div><div class="step-text">If the answer is in a saved template, click the <strong>⚡ Macro</strong> button → search by name → select to insert.</div></div>
        </div>
        <div class="sub-card"><strong>🎫 Ticket Statuses</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Open</strong> — needs a reply or action.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Pending</strong> — waiting on the customer or another team. Reopens automatically when they reply.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Closed</strong> — resolved. Reopens automatically if the customer replies again.</div></div>
          <div class="step"><div class="step-num green">4</div><div class="step-text">Set status using the buttons at the top of the ticket, or press <span class="kbd">E</span> to close.</div></div>
        </div>
        <div class="sub-card"><strong>📝 Internal Notes</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">In the composer, toggle from <strong>Reply</strong> to <strong>Note</strong> (or press <span class="kbd">N</span>).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Type your note → use <code>@name</code> to mention a teammate (they get notified).</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Customers <strong>never</strong> see notes. Use them for context, escalation, and handoffs.</div></div>
        </div>
        <div class="sub-card"><strong>🏷️ Tagging Tickets</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">In the right sidebar, find the <strong>Tags</strong> field on the ticket.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Type a tag name → select from suggestions or create new (e.g., <code>refund</code>, <code>vip</code>, <code>shipping-issue</code>).</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Tags drive views, rules, and reporting — be consistent with the team's tag taxonomy.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Views, Search &amp; Assignment</h3>
        <div class="sub-card"><strong>👁️ Views (Saved Filters)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Left sidebar → + New view</span> (or <span class="step-nav">Settings → Views</span>).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Add filter conditions: status, channel, tag, assignee, customer field, intent, etc. Combine with AND/OR logic.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Name the view (e.g., "My VIP open tickets") → choose visibility (Personal vs Shared) → Save.</div></div>
          <div class="step"><div class="step-num amber">4</div><div class="step-text">Pin the view to the sidebar so you can jump to it quickly.</div></div>
        </div>
        <div class="sub-card"><strong>🔍 Searching Tickets</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Press <span class="kbd">/</span> or click the search bar at the top.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Search by ticket ID, customer name, email, or message text. Use filters in the search to narrow by date or channel.</div></div>
        </div>
        <div class="sub-card"><strong>🤝 Assigning &amp; Reassigning</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">In the ticket header, click the <strong>Assignee</strong> field → pick a user or team.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Use <strong>@mention</strong> in an internal note to loop someone in without reassigning.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">When you take over a ticket from a teammate, leave a note with the handoff context first.</div></div>
        </div>
        <div class="sub-card"><strong>🔀 Merge &amp; Split</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><strong>Merge:</strong> Open one of the duplicate tickets → click <strong>⋯ → Merge</strong> → search for the other ticket → confirm.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><strong>Split:</strong> If a single thread covers two issues, open <strong>⋯ → Split</strong> → select the messages to move into a new ticket.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Power-User Workflows</h3>
        <div class="sub-card"><strong>🎯 Intent Detection &amp; Smart Tags</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Gorgias auto-classifies incoming tickets by <strong>Intent</strong> (e.g., "Where is my order?", "Return request"). View the intent in the right sidebar.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Build views that filter by intent — e.g., a queue dedicated to <code>intent = where-is-my-order</code> for fastest response.</div></div>
        </div>
        <div class="sub-card"><strong>📋 Bulk Actions</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">In any ticket list, hover a ticket and click the checkbox. Select multiple → use the bulk bar at the top.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Bulk close, tag, assign, or apply a macro to many tickets at once. Useful for cleanup or mass outreach replies.</div></div>
          <div class="step-warning">⚠️ Bulk send applies the same reply to every selected ticket — double-check the macro renders correctly with each customer's variables before confirming.</div>
        </div>
        <div class="sub-card"><strong>🔁 Custom Ticket Fields</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Settings → Tickets → Ticket fields</span> (admin only) → add fields like "Order issue type" or "Refund reason".</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Use those fields in views, rules, and reporting to drive deeper analytics.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 6. MACROS & RULES DEEP DIVE -->
<div class="slide" id="sec-macros"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>⚡🤖 Core Feature Deep Dive — Macros &amp; Rules</h2><p class="subtitle">Templated replies + workflow automation — the two biggest productivity unlocks in Gorgias.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Using Macros &amp; Rules</h3>
        <div class="sub-card"><strong>⚡ Inserting a Macro</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">In the reply composer, click the <strong>⚡ Macro</strong> button (or press <span class="kbd">M</span>).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Search by macro name or keyword → click to insert.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Variables (e.g., <code>{{customer.firstname}}</code>, <code>{{ticket.last_order.tracking_number}}</code>) auto-fill with that ticket's data — verify they rendered correctly before sending.</div></div>
          <div class="step-tip">💡 If a variable shows blank or shows the literal <code>{{...}}</code>, the data is missing on this ticket. Either fill it in manually or pick a different macro.</div>
        </div>
        <div class="sub-card"><strong>📋 Common Macro Categories</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Order status</strong> — "Where is my order?" replies with tracking pulled from Shopify.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Returns &amp; refunds</strong> — return policy explanations, refund confirmations.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Product info</strong> — sizing, materials, restock dates.</div></div>
          <div class="step"><div class="step-num green">4</div><div class="step-text"><strong>Closings</strong> — sign-offs and follow-up checks.</div></div>
        </div>
        <div class="sub-card"><strong>🤖 What Rules Do (For You)</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Rules run <strong>before</strong> a ticket reaches you — they auto-tag, auto-assign, auto-prioritize, or even auto-reply.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">As an agent, you'll mostly experience the result: a ticket arrives already tagged <code>vip</code> and assigned to your queue.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">If a rule misfires (wrong tag, wrong assignment), let your team lead know — don't edit rules unless you're an admin.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Building Macros &amp; Simple Rules</h3>
        <div class="sub-card"><strong>✏️ Creating a Macro</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Settings → Tickets → Macros → + Create macro</span>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Add a clear <strong>Name</strong> (e.g., "Refund — Order Damaged") and optional <strong>Description</strong>.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Write the message body. Insert variables from the <strong>Variables</strong> menu — start with <code>{{customer.firstname}}</code> for personalization.</div></div>
          <div class="step"><div class="step-num amber">4</div><div class="step-text">Optionally add <strong>Actions</strong> the macro performs on send: add tag, change status, assign, set custom field.</div></div>
          <div class="step"><div class="step-num amber">5</div><div class="step-text">Save → Test the macro on a real (or test) ticket before sharing widely.</div></div>
          <div class="step-tip">💡 Name macros consistently: <code>[Topic] — [Specific Case]</code>. Makes search instant.</div>
        </div>
        <div class="sub-card"><strong>🤖 Building a Simple Rule</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Settings → Automation → Rules → + Create rule</span>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Set the <strong>Trigger</strong>: when ticket is created, updated, or message received.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Add <strong>Conditions</strong> (all must match): channel = email, subject contains "refund", customer tag = vip, etc.</div></div>
          <div class="step"><div class="step-num amber">4</div><div class="step-text">Add <strong>Actions</strong>: add tag, assign user/team, change status, send macro.</div></div>
          <div class="step"><div class="step-num amber">5</div><div class="step-text">Save → toggle <strong>Active</strong>. Watch the next few hours of tickets to confirm the rule fires correctly.</div></div>
        </div>
        <div class="sub-card"><strong>🔁 Rule Order Matters</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Rules run top-to-bottom. The first matching rule with "stop processing" halts further rules from running.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Drag rules to reorder. Put more specific rules above general ones.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Advanced Automation</h3>
        <div class="sub-card"><strong>🧪 Variables &amp; Conditional Content</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Use <strong>conditional Liquid logic</strong> in macros: <code>{% if ticket.last_order.fulfillment_status == 'fulfilled' %}…{% else %}…{% endif %}</code> to branch based on order state.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Reference Shopify data deeply: <code>{{ticket.last_order.tracking_url}}</code>, <code>{{customer.total_spent}}</code>, <code>{{ticket.last_order.line_items}}</code>.</div></div>
        </div>
        <div class="sub-card"><strong>🤖 Auto-Reply Rules</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Build a rule that detects an intent (e.g., <code>where-is-my-order</code>) and auto-sends a macro pulling the latest tracking — fully resolving the ticket without an agent.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Combine with a <strong>condition</strong> like "tracking_number is not empty" so the auto-reply only sends when the data is there.</div></div>
          <div class="step-warning">⚠️ Always pair an auto-reply rule with monitoring. Track close-rate and CSAT for that rule's tickets so you catch regressions fast.</div>
        </div>
        <div class="sub-card"><strong>📊 Rule Performance Reporting</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Statistics → Automation</span> → see how many tickets each rule has touched and how many were auto-resolved.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Use this to prune dead rules and double-down on the ones saving the most time.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 7. CUSTOMER SIDEBAR & INTEGRATIONS -->
<div class="slide" id="sec-customer"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>👤🔌 Core Feature Deep Dive — Customer Sidebar &amp; Integrations</h2><p class="subtitle">Every customer's full Shopify history — and refund/cancel actions — sit right next to the conversation.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Reading the Sidebar</h3>
        <div class="sub-card"><strong>👤 Customer Card</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">When you open a ticket, the right sidebar shows the customer's name, email, phone, location, and total spent.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click the customer name to open their <strong>full profile</strong> — every past ticket, every order, every tag.</div></div>
        </div>
        <div class="sub-card"><strong>📦 Shopify Orders Block</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">The sidebar lists the customer's most recent Shopify orders with status, date, total, and items.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click an order to expand: line items, fulfillment status, tracking number, and tracking link.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Click <strong>Open in Shopify</strong> to jump straight to the order in the Shopify admin.</div></div>
          <div class="step-tip">💡 Always check the order's fulfillment + tracking status before replying to "where is my order" tickets — the answer is usually right there.</div>
        </div>
        <div class="sub-card"><strong>🛠️ Quick Actions</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">From an order in the sidebar, you can <strong>Refund</strong>, <strong>Cancel</strong>, or <strong>Duplicate</strong> directly — no need to leave Gorgias.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Refunds: choose full or partial, select line items, restock toggle, optional reason → confirm.</div></div>
          <div class="step-warning">⚠️ Refunds and cancellations are <strong>real</strong> — they execute against Shopify immediately. Confirm the order number, amount, and customer before clicking. Many brands require manager approval for refunds above a certain threshold — check your team's policy first.</div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Multi-Integration Sidebar</h3>
        <div class="sub-card"><strong>🔌 Active Integrations</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Beyond Shopify, your sidebar may include: <strong>Recharge</strong> (subscriptions), <strong>Loop / Returnly</strong> (returns), <strong>Klaviyo</strong> (email), <strong>Yotpo</strong> (reviews/loyalty), <strong>ShipBob / ShipStation</strong> (fulfillment).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Each integration appears as its own collapsible block. Expand to see relevant data without leaving the ticket.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Most integrations expose actions too — e.g., pause/resume a Recharge subscription, issue a Loop return, look up a Klaviyo profile.</div></div>
        </div>
        <div class="sub-card"><strong>🏷️ Customer Tags &amp; Custom Fields</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><strong>Customer tags</strong> persist across every ticket from that customer (e.g., <code>vip</code>, <code>wholesale</code>, <code>do-not-discount</code>).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Click <strong>+ Tag</strong> in the customer card to add one. Use the same tag taxonomy as on tickets.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Custom fields (set by admins) capture structured data per customer — e.g., "Loyalty tier" or "Account manager".</div></div>
        </div>
        <div class="sub-card"><strong>🔍 Cross-Ticket Customer History</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">In the sidebar, expand <strong>Past tickets</strong> to see every prior conversation with this customer.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Use this to avoid asking questions they've already answered or to spot a pattern (e.g., third complaint this month).</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>HTTP Integrations &amp; APIs</h3>
        <div class="sub-card"><strong>⚙️ HTTP Integrations</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Settings → Integrations → HTTP integration</span> — connect any service that exposes a REST API.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Define the request: URL, method, headers, body. Use ticket/customer variables in the URL or body.</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text">Display the response in the sidebar as a custom widget — e.g., pull a loyalty score from your data warehouse.</div></div>
        </div>
        <div class="sub-card"><strong>🪝 Webhooks &amp; Gorgias API</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>Webhooks:</strong> <span class="step-nav">Settings → REST API → Webhooks</span> → push every ticket event to your warehouse for analytics.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text"><strong>Gorgias REST API:</strong> programmatically create tickets, push customer data, sync tags from external systems. Docs at <a href="https://developers.gorgias.com" target="_blank">developers.gorgias.com</a>.</div></div>
        </div>
        <div class="sub-card"><strong>📊 Customer Lifetime Value</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Build views and rules that branch on <code>customer.total_spent</code> — e.g., auto-tag <code>vip</code> when total &gt; $500.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Combine with macros that reference total_spent for white-glove personalization on top customers.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 8. CHANNELS DEEP DIVE -->
<div class="slide" id="sec-channels"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📡 Core Feature Deep Dive — Channels (Email, Chat, Voice, SMS, Social)</h2><p class="subtitle">Every channel lands in the same inbox. The reply experience varies — here's how each one works.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Channel Basics</h3>
        <div class="sub-card"><strong>📧 Email</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">The largest channel for most brands. Reply from inside the ticket — Gorgias sends from the brand's support address.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Add CC/BCC by clicking the recipient row at the top of the composer.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Attach files with the paperclip icon — images, PDFs, etc.</div></div>
        </div>
        <div class="sub-card"><strong>💬 Live Chat</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Chat tickets show a <strong>live</strong> indicator. The customer is on the site right now — respond as quickly as possible.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Replies are casual and short. Use shorter macros or quick custom responses.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">If the customer leaves, the chat becomes an offline ticket and converts to email — they'll get your reply via email.</div></div>
          <div class="step-tip">💡 Set yourself as <strong>Available</strong> for chat in the bottom-left status toggle when you're ready to take live conversations.</div>
        </div>
        <div class="sub-card"><strong>📱 SMS</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">SMS tickets work like chat — short, fast, conversational.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Keep replies under 160 characters when possible. Avoid links unless necessary.</div></div>
        </div>
        <div class="sub-card"><strong>📞 Voice</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Inbound calls ring inside Gorgias. Click <strong>Accept</strong> to take the call from your browser (or the desktop/mobile app).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">After the call, the recording, duration, and transcript (if enabled) attach to the ticket automatically.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Add an internal note summarizing the call so future agents have context.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Social &amp; Outbound</h3>
        <div class="sub-card"><strong>📘 Facebook &amp; Instagram</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Comments, DMs, and ad replies on connected accounts come into Gorgias as tickets.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Reply directly from the ticket — Gorgias posts back through the Meta API.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Use <strong>Hide</strong> on inappropriate public comments instead of replying — keeps the brand image clean.</div></div>
        </div>
        <div class="sub-card"><strong>💚 WhatsApp</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">WhatsApp tickets behave like chat. Reply within the 24-hour window for free-form messages.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Outside the window, you can only send pre-approved <strong>WhatsApp templates</strong>.</div></div>
        </div>
        <div class="sub-card"><strong>📤 Outbound (Proactive Outreach)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Click <strong>+ New ticket</strong> (top-left) → choose channel → enter recipient → compose → Send.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Useful for follow-ups, escalations, or proactively reaching out about an order issue.</div></div>
        </div>
        <div class="sub-card"><strong>💬 Chat Campaigns</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Settings → Chat → Campaigns → + Create campaign</span> — trigger a chat message based on URL, time on page, or visitor attributes.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Common uses: greet shoppers on the cart page, offer help on FAQ pages, surface a discount on a product page.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Voice &amp; Channel Strategy</h3>
        <div class="sub-card"><strong>📞 Voice Configuration (Admin)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Settings → Channels → Voice</span> → configure phone numbers, business hours, IVR menus, and voicemail.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Set up <strong>routing rules</strong> — e.g., wholesale callers to one queue, retail to another.</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text">Enable <strong>call transcription</strong> so the audio becomes searchable text on each ticket.</div></div>
        </div>
        <div class="sub-card"><strong>🎯 Channel-Based SLAs</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Settings → SLAs → + Create SLA</span> — set first-response and resolution targets per channel.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Tighter SLAs on chat/SMS (minutes), looser on email (hours). Track compliance in the SLA report.</div></div>
        </div>
        <div class="sub-card"><strong>🔁 Channel-to-Macro Routing</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Build rules that fire a different macro depending on the channel — chat gets a short greeting, email gets a longer template.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Pair with intent detection so the right answer goes out on the right channel automatically.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 9. AI AGENT & AUTO-RESPOND -->
<div class="slide" id="sec-ai"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>✨ AI Agent &amp; Auto-Respond — Gorgias AI Across the Platform</h2><p class="subtitle">Gorgias's AI tools answer common tickets autonomously, suggest replies, and surface help articles.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>What AI Does for Agents</h3>
        <div class="sub-card"><strong>🤖 AI Agent (Autonomous)</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>AI Agent</strong> reads incoming tickets, identifies the intent, and replies on its own when it has high confidence — fully resolving the ticket without an agent.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">When AI Agent handles a ticket, you'll see it in the conversation thread tagged as the AI replier. The customer sees a normal-looking response from the brand.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">If the customer pushes back or asks something AI can't handle, AI Agent <strong>hands off</strong> to a human and the ticket appears in the standard queue.</div></div>
        </div>
        <div class="sub-card"><strong>💡 Reply Suggestions</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">In the composer, AI may show a suggested reply at the top. Click to insert, then edit before sending.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Always read the suggestion carefully — it's a starting point, not a finished reply.</div></div>
          <div class="step-warning">⚠️ Never send an AI suggestion without reading it. AI can confidently get product details, policy specifics, and order facts wrong. You are responsible for what goes out under the brand's name.</div>
        </div>
        <div class="sub-card"><strong>📚 Article Recommendations</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">As you read a ticket, the sidebar may surface relevant Help Center articles for that intent.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Insert a link to the article in your reply with one click — saves typing and points the customer to a fuller answer.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Configuring AI Behavior</h3>
        <div class="sub-card"><strong>⚙️ Auto-Respond Setup</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Settings → Automate → Auto-Respond</span> (or AI Agent settings, depending on your plan).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Choose which intents AI should handle autonomously (e.g., "Where is my order?", "Return policy") and which to escalate.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Set a <strong>confidence threshold</strong> — higher = safer (fewer auto-replies, fewer mistakes).</div></div>
        </div>
        <div class="sub-card"><strong>🎓 Training the AI on Your Brand</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Connect your <strong>Help Center articles</strong> — AI uses them as the source of truth for policy and product info.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Add <strong>Guidance</strong> rules: tone of voice, do/don't say, escalation triggers, brand-specific vocabulary.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Review AI replies regularly — flag bad ones to improve future suggestions.</div></div>
        </div>
        <div class="sub-card"><strong>📈 Measuring AI Impact</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Statistics → Automate</span> (or AI dashboard) — see auto-resolution rate, CSAT on AI tickets, and time saved.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Compare CSAT for AI-handled tickets vs human-handled. If AI CSAT is meaningfully lower, tighten the threshold or remove that intent.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Custom AI Workflows</h3>
        <div class="sub-card"><strong>🧩 AI + Rules Combos</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Use rules to <strong>narrow</strong> what AI sees: e.g., only auto-respond to non-VIP customers on the email channel after business hours.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Use rules to <strong>flag</strong> AI replies for review on the first 100 conversations of a new intent before fully trusting it.</div></div>
        </div>
        <div class="sub-card"><strong>🎯 Per-Intent Quality Loops</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Build a view filtered to "AI-handled, last 7 days, intent = X" and review CSAT and reopens daily.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Refine the Help Center articles or Guidance whenever you spot a pattern — that's where AI learns from.</div></div>
        </div>
        <div class="sub-card"><strong>🔌 AI + Custom Data</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Combine AI Agent with HTTP integrations so it can pull live data — e.g., real-time inventory, loyalty points, subscription status — into its responses.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">This unlocks AI handling of nuanced questions ("when's my next subscription charge?", "is X back in stock?") with accurate, real-time answers.</div></div>
          <div class="step-warning">⚠️ Best practice: always review AI output. Verify accuracy, refine prompts/guidance, and add brand voice before letting it run autonomously on a new intent.</div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- 10. INTERMEDIATE RESOURCES -->
<div class="slide" id="sec-intres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-intermediate">Self-Paced — Optional</span></div><h2>🟡 Intermediate Training — Self-Paced Resources</h2><p class="subtitle">Recommended after mandatory training — at your own pace.</p></div>
  <div class="slide-body">
    <div class="card intermediate"><div class="card-title">Gorgias Academy — Macros &amp; Rules Mastery <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Build templated replies with variables, structure macro libraries, and design rules that auto-tag, route, and prioritize tickets.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~2 hrs &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Academy</span><span class="tag t4">Automation</span></div><a href="https://academy.gorgias.com" target="_blank">→ Macros &amp; Rules course on Gorgias Academy</a></div>
    <div class="card intermediate"><div class="card-title">Gorgias Help Docs — Views &amp; Filters <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Master saved filters: condition logic, sharing, pinning, and using views to drive team workflows.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Official</span><span class="tag t4">Views</span></div><a href="https://docs.gorgias.com" target="_blank">→ Read the Views &amp; Filters article</a></div>
    <div class="card intermediate"><div class="card-title">Gorgias Academy — Reporting &amp; Statistics <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Read agent, ticket, and CSAT reports. Build custom dashboards and interpret trends to improve team performance.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~90 min &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Academy</span><span class="tag t4">Reporting</span></div><a href="https://academy.gorgias.com" target="_blank">→ Reporting course on Gorgias Academy</a></div>
    <div class="card intermediate"><div class="card-title">Gorgias Help Docs — Integrations Catalog <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Reference for every native integration: Shopify, Recharge, Loop, Klaviyo, Yotpo, ShipStation, and more.</div><div class="card-meta"><strong>Format:</strong> Reference &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Integrations</span><span class="tag t4">Reference</span></div><a href="https://docs.gorgias.com" target="_blank">→ Browse the Integrations catalog</a></div>
    <div class="card intermediate"><div class="card-title">YouTube: Gorgias Macros, Rules &amp; Automation Tips <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Practical walkthroughs of common automation patterns: auto-tagging, intent routing, conditional macros.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">YouTube</span><span class="tag t4">Automation</span></div><a href="https://www.youtube.com/results?search_query=gorgias+macros+rules+automation+2025" target="_blank">→ Search YouTube: "Gorgias macros rules automation 2025"</a></div>
  </div>
</div>

<!-- 11. ADVANCED RESOURCES -->
<div class="slide" id="sec-advres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-advanced">Optional — Mastery</span></div><h2>🔴 Advanced Training — Optional Mastery Resources</h2><p class="subtitle">Deep mastery for admins, automation specialists, and AI program owners.</p></div>
  <div class="slide-body">
    <div class="card advanced"><div class="card-title">Gorgias Academy — AI Agent Specialist <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Configure, train, and operate AI Agent at scale: intent design, Help Center sourcing, Guidance writing, quality monitoring.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~3 hrs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">AI Agent</span><span class="tag t4">Academy</span></div><a href="https://academy.gorgias.com" target="_blank">→ AI Agent course on Gorgias Academy</a></div>
    <div class="card advanced"><div class="card-title">Gorgias Academy — Helpdesk Admin Mastery <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">User management, role design, business hours, SLAs, and channel configuration for multi-team helpdesks.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~3 hrs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Admin</span><span class="tag t4">Configuration</span></div><a href="https://academy.gorgias.com" target="_blank">→ Helpdesk Admin course on Gorgias Academy</a></div>
    <div class="card advanced"><div class="card-title">Gorgias Developer Docs — REST API &amp; Webhooks <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Reference for the Gorgias REST API, webhook events, and HTTP integration patterns. For technical builds and custom integrations.</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Developer</span><span class="tag t4">API</span></div><a href="https://developers.gorgias.com" target="_blank">→ developers.gorgias.com</a></div>
    <div class="card advanced"><div class="card-title">Gorgias Help Docs — Liquid &amp; Variables Reference <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">The full reference for Liquid templating in macros and rules: variables, conditionals, filters.</div><div class="card-meta"><strong>Format:</strong> Reference &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Liquid</span><span class="tag t4">Templates</span></div><a href="https://docs.gorgias.com" target="_blank">→ Liquid &amp; Variables on docs.gorgias.com</a></div>
    <div class="card advanced"><div class="card-title">YouTube: Advanced Gorgias — AI, API &amp; Multi-Brand <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Deep dives into AI Agent tuning, API integrations, and managing multiple brand helpdesks at scale.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">YouTube</span><span class="tag t4">Advanced</span></div><a href="https://www.youtube.com/results?search_query=gorgias+ai+agent+api+advanced+2025" target="_blank">→ Search YouTube: "Gorgias AI Agent API advanced 2025"</a></div>
  </div>
</div>

<!-- 12. CERTIFICATIONS -->
<div class="slide" id="sec-certs"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Certifications</span></div><h2>🏅 Certifications &amp; Verified Skills</h2><p class="subtitle">Optional credentials. Earned through Gorgias Academy.</p></div>
  <div class="slide-body">
    <div class="callout" style="background:#fffbeb;border-left-color:#ca8a04"><strong style="color:#854d0e">💡 Optional Personal Investment:</strong> The certifications listed below are <strong>not covered by InvenTel</strong> and may require an out-of-pocket fee to attempt the assessments or access proctored exams. The learning content and courses on Gorgias Academy can be explored at no cost, but earning the official verified badge or certification may require a paid assessment depending on the track. These credentials are entirely optional — they are personal career development tools you can pursue on your own time if you'd like to formally validate your Gorgias skills.</div>
    <table class="cert-table"><thead><tr><th>Certification / Badge</th><th>Platform</th><th>Skill Level</th><th>Est. Time</th></tr></thead><tbody>
      <tr><td><strong>Gorgias Agent Fundamentals — Verified Skill</strong></td><td>Gorgias Academy</td><td><span class="badge badge-beginner">Beginner</span></td><td>~1–2 hrs</td></tr>
      <tr><td><strong>Macros &amp; Rules Specialist — Verified Skill</strong></td><td>Gorgias Academy</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~2–3 hrs</td></tr>
      <tr><td><strong>Helpdesk Admin Certification</strong></td><td>Gorgias Academy</td><td><span class="badge badge-advanced">Advanced</span></td><td>~3–4 hrs</td></tr>
      <tr><td><strong>AI Agent Specialist — Verified Skill</strong></td><td>Gorgias Academy</td><td><span class="badge badge-advanced">Advanced</span></td><td>~3 hrs</td></tr>
    </tbody></table>
    <p style="font-size:12px;color:#777;margin-top:10px">Browse all learning paths at <a href="https://academy.gorgias.com" target="_blank">academy.gorgias.com</a>. Specific certifications, badge names, and assessment requirements may change — check Gorgias Academy directly for the current catalog.</p>
  </div>
</div>

<!-- 13. NEW HIRE CHECKLIST -->
<div class="checklist-section mandatory" id="cl-mandatory"><div class="checklist-head mandatory"><h2>✅ New Hire Onboarding Checklist</h2><div class="ch-sub">Complete all tasks within your first 30 days</div><span class="ch-badge">Mandatory · 30-Day Deadline</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📱 Apps &amp; Mobile (OPTIONAL)</div><ul class="checklist-items">
      <li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Install the Gorgias desktop app <span class="ci-est">Optional</span></div><div class="ci-desc">Download from gorgias.com → Apps. Faster than browser, native notifications.</div></div></li>
      <li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Install the Gorgias mobile app <span class="ci-est">Optional</span></div><div class="ci-desc">iOS App Store or Google Play → Gorgias → sign in with your account.</div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">⚠️ Multi-Brand Access Verification (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Request brand helpdesk access list from direct report <span class="ci-est">~5 min</span></div><div class="ci-desc">Get the list of which brand Gorgias accounts you should access and your role in each.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Sign in to each assigned helpdesk and complete 2FA <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Verify your role &amp; permissions in each helpdesk <span class="ci-est">~10 min</span></div><div class="ci-desc">Settings → Users &amp; Teams → confirm role matches what your direct report indicated.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Confirm Shopify integration loads in customer sidebar <span class="ci-est">~5 min</span></div><div class="ci-desc">Open any ticket and check the right sidebar shows recent orders.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Follow up on any missing access <span class="ci-est">~10 min</span></div><div class="ci-desc">If helpdesks or roles don't match, contact direct report or HR Training Coordinator.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Set up profile photo, display name, signature <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">🧭 Inbox Navigation (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Tour the inbox layout — sidebar, ticket list, conversation, customer sidebar (Sec 4) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Send a test reply and an internal note (Sec 4) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📥⚡👤📡✨ Feature Training (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Inbox &amp; Tickets beginner tutorials (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Insert a macro into a reply and verify variables (Sec 6) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read the customer sidebar and open an order (Sec 7) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Reply across at least 2 channels — email + chat or SMS (Sec 8) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Review one AI-suggested reply and one AI-handled ticket (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📚 External Resources (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read Gorgias Help Docs — Getting Started (Sec 3) <span class="ci-est">~1 hr</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Gorgias Academy — Agent Fundamentals (Sec 3) <span class="ci-est">~90 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Watch YouTube Beginner Tutorial (Sec 3) <span class="ci-est">~45 min</span></div></div></li>
    </ul></div>
  </div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-mandatory" style="color:#166534">0 of 16 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-mandatory" style="background:#16a34a"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#166534" onclick="resetList('mandatory')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('mandatory')">📝 Take Quiz</button></div></div>
</div>

<!-- 14. INTERMEDIATE CHECKLIST -->
<div class="checklist-section intermediate" id="cl-intermediate"><div class="checklist-head intermediate"><h2>✅ Intermediate Learner Checklist</h2><div class="ch-sub">Self-paced — after mandatory training</div><span class="ch-badge">Self-Paced · Optional</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-intermediate">All Features Intermediate</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Build a personal saved view (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Create a macro with variables and an action (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Build a simple rule (auto-tag a channel or intent) (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Merge two duplicate tickets (Sec 5) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Issue a partial refund from the customer sidebar (Sec 7) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Take a chat conversation while marked Available (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Review your Statistics — agent activity report (Sec 10) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Configure Auto-Respond for one safe intent (Sec 9) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Complete Macros &amp; Rules Mastery course (Sec 10) <span class="ci-est">~2 hrs</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-intermediate" style="color:#854d0e">0 of 9 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-intermediate" style="background:#ca8a04"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#854d0e" onclick="resetList('intermediate')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('intermediate')">📝 Take Quiz</button></div></div>
</div>

<!-- 15. ADVANCED CHECKLIST -->
<div class="checklist-section advanced" id="cl-advanced"><div class="checklist-head advanced"><h2>✅ Advanced Learner Checklist</h2><div class="ch-sub">Deep mastery — for admins and automation specialists</div><span class="ch-badge">Optional · Mastery</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-advanced">All Features Advanced</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Write a macro using conditional Liquid logic (Sec 6) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Build an HTTP integration to a custom data source (Sec 7) <span class="ci-est">~45 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Configure SLAs per channel (Sec 8) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Train AI Agent on a new intent with Help Center articles (Sec 9) <span class="ci-est">~60 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Set up a webhook to push ticket events to your data warehouse (Sec 7) <span class="ci-est">~45 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Complete the AI Agent Specialist course (Sec 11) <span class="ci-est">~3 hrs</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Complete the Helpdesk Admin course (Sec 11) <span class="ci-est">~3 hrs</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-advanced" style="color:#991b1b">0 of 7 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-advanced" style="background:#991b1b"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#991b1b" onclick="resetList('advanced')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('advanced')">📝 Take Quiz</button></div></div>
</div>

<!-- 16. QUICK REFERENCE -->
<div class="slide" id="sec-qr"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Quick Reference</span></div><h2>🔗 Quick Reference — Platform Access &amp; Help Centers</h2></div>
  <div class="slide-body"><div class="qr-grid">
    <div class="qr-card"><h4>🔐 Platform Access</h4><ul><li><a href="https://app.gorgias.com" target="_blank">Gorgias Login (app.gorgias.com)</a></li><li><a href="https://docs.gorgias.com" target="_blank">Gorgias Help Docs</a></li><li><a href="https://academy.gorgias.com" target="_blank">Gorgias Academy</a></li><li><a href="https://developers.gorgias.com" target="_blank">Gorgias Developer Docs</a></li><li><a href="https://status.gorgias.com" target="_blank">Gorgias Status Page</a></li></ul></div>
    <div class="qr-card"><h4>🎓 Help Doc Sections</h4><ul><li><a href="https://docs.gorgias.com" target="_blank">Inbox &amp; Tickets</a></li><li><a href="https://docs.gorgias.com" target="_blank">Macros</a></li><li><a href="https://docs.gorgias.com" target="_blank">Rules &amp; Automation</a></li><li><a href="https://docs.gorgias.com" target="_blank">Channels (Email, Chat, Voice, SMS)</a></li><li><a href="https://docs.gorgias.com" target="_blank">Integrations</a></li><li><a href="https://docs.gorgias.com" target="_blank">AI Agent &amp; Auto-Respond</a></li><li><a href="https://docs.gorgias.com" target="_blank">Users &amp; Permissions</a></li><li><a href="https://docs.gorgias.com" target="_blank">Statistics &amp; Reporting</a></li></ul></div>
    <div class="qr-card"><h4>🏅 Certifications</h4><ul><li><a href="https://academy.gorgias.com" target="_blank">Gorgias Academy (all courses)</a></li><li><a href="https://academy.gorgias.com" target="_blank">Agent Fundamentals</a></li><li><a href="https://academy.gorgias.com" target="_blank">Macros &amp; Rules Mastery</a></li><li><a href="https://academy.gorgias.com" target="_blank">AI Agent Specialist</a></li><li><a href="https://academy.gorgias.com" target="_blank">Helpdesk Admin</a></li></ul></div>
    <div class="qr-card"><h4>🎬 YouTube</h4><ul><li><a href="https://www.youtube.com/results?search_query=gorgias+helpdesk+tutorial+for+beginners+2025" target="_blank">Beginner Tutorial</a></li><li><a href="https://www.youtube.com/results?search_query=gorgias+macros+rules+automation+2025" target="_blank">Macros &amp; Rules</a></li><li><a href="https://www.youtube.com/results?search_query=gorgias+ai+agent+api+advanced+2025" target="_blank">AI Agent &amp; Advanced</a></li></ul></div>
  </div></div>
</div>

<!-- FINAL NOTE -->
<div class="final-note" id="sec-final">
  <p style="font-size:15px;font-weight:700;margin-bottom:10px">📌 Final Note — Gorgias Training</p>
  <p style="margin-bottom:10px">All <strong>Beginner-level content</strong> is <strong>mandatory</strong> within your first <strong>30 days</strong>. Intermediate and Advanced training is self-paced.</p>
  <p style="margin-bottom:10px"><strong>Multi-Brand Access:</strong> InvenTel runs separate Gorgias accounts per brand. Your first step is always to confirm the access list with your direct report — there is no central switcher between brand helpdesks. Bookmark each one.</p>
  <p style="margin-bottom:10px">This deck is <strong>self-contained</strong> — every deep-dive includes complete step-by-step instructions. Click any section header to collapse it once you've completed it. External links and help centers are in the Quick Reference.</p>
  <p style="margin-bottom:10px">Use the <strong>New Hire Checklist</strong> to track progress and share with your manager.</p>
  <p style="margin-bottom:10px">For access, credentials, or training questions — reach out to the <strong>HR Training Coordinator who assisted you during onboarding</strong>.</p>
  <p style="margin-bottom:10px"><a href="https://docs.gorgias.com" target="_blank">Gorgias Help Docs →</a> &nbsp;|&nbsp; <a href="https://status.gorgias.com" target="_blank">Status Page →</a></p>
  <p style="font-size:11px;opacity:.7;margin-top:14px">Last updated: April 6, 2025</p>
</div>

<!-- FLOATING NAV -->
<button class="float-nav-btn" onclick="toggleFloatNav()" title="Jump to section">📋</button>
<div class="float-nav-panel" id="float-nav">
  <div class="float-nav-hd">📋 Jump to Section</div>
  <ul class="float-nav-list">
    <li><a class="fnl-section" href="#sec-toc" onclick="closeNav()">📋 Table of Contents</a></li>
    <li><a class="fnl-section" href="#sec-overview" onclick="closeNav()">💬 1. Platform Overview</a></li>
    <li><a class="fnl-section" href="#sec-hub" onclick="closeNav()">🎓 2. Official Learning Hub</a></li>
    <li><a class="fnl-section" href="#sec-begres" onclick="closeNav()">🟢 3. Beginner Resources</a></li>
    <li><a class="fnl-section" href="#sec-start" onclick="closeNav()">🟢 4. Getting Started</a></li>
    <li><a class="fnl-section" href="#sec-inbox" onclick="closeNav()">📥 5. Inbox &amp; Tickets</a></li>
    <li><a class="fnl-section" href="#sec-macros" onclick="closeNav()">⚡ 6. Macros &amp; Rules</a></li>
    <li><a class="fnl-section" href="#sec-customer" onclick="closeNav()">👤 7. Customer Sidebar</a></li>
    <li><a class="fnl-section" href="#sec-channels" onclick="closeNav()">📡 8. Channels</a></li>
    <li><a class="fnl-section" href="#sec-ai" onclick="closeNav()">✨ 9. AI Agent &amp; Auto-Respond</a></li>
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
mandatory:{title:'New Hire Onboarding',sub:'Mandatory · 20 Questions · Pass = 70%',hd:'q-mandatory',track:'New Hire Onboarding — Gorgias',qs:20,questions:[
{q:'What is the FIRST thing you should do on your first day with Gorgias?',opts:['Start replying to tickets','Request your brand helpdesk access list from your direct report','Build a macro','Configure AI Agent'],ans:1},
{q:'How does InvenTel\'s Gorgias setup work across brands?',opts:['One global Gorgias account','One Gorgias account per brand, each with its own URL','Brands share one inbox','Gorgias is brand-agnostic'],ans:1},
{q:'How do you switch between brand helpdesks?',opts:['Built-in switcher in the top bar','Bookmark each brand\'s URL and log in to each independently','Settings → Switch brand','Click the brand name'],ans:1},
{q:'What is a "ticket" in Gorgias?',opts:['A discount code','A single customer conversation across any channel','An order','A staff account'],ans:1},
{q:'Which channels does Gorgias unify into one inbox?',opts:['Only email','Email, chat, SMS, voice, Facebook, Instagram, WhatsApp, contact forms','Only chat','Only social'],ans:1},
{q:'What does the "Open" status mean on a ticket?',opts:['Customer cancelled','Needs a reply or action','Already resolved','Pending refund'],ans:1},
{q:'What does "Pending" mean?',opts:['Refund pending','Waiting on the customer or another team — reopens when they reply','Always closed','New ticket'],ans:1},
{q:'How do you send an internal note instead of a customer reply?',opts:['You can\'t','Toggle Reply → Note in the composer (or press N)','Use a macro','Email your manager'],ans:1},
{q:'Are internal notes visible to the customer?',opts:['Yes','No — only your team sees them','Sometimes','Only if tagged'],ans:1},
{q:'What does the customer sidebar show?',opts:['Only the email','Customer info, Shopify orders, total spent, tags, integration data','Just tags','Nothing important'],ans:1},
{q:'What is a Macro?',opts:['A keyboard shortcut','A saved reply template, often with variables and actions','A type of report','A user role'],ans:1},
{q:'How do you insert a macro into a reply?',opts:['Type the full text','Click the ⚡ Macro button (or press M) → search → select','Copy from a doc','Macros auto-insert'],ans:1},
{q:'What should you always do before sending a macro?',opts:['Nothing','Verify variables rendered correctly with that ticket\'s data','Add CC','Delete the original message'],ans:1},
{q:'What is a Rule in Gorgias?',opts:['A user permission','Automation that fires before a ticket reaches an agent — auto-tag, auto-assign, auto-reply','A keyboard shortcut','A type of macro'],ans:1},
{q:'What is a View?',opts:['A user dashboard','A saved filter for tickets (e.g., "My open VIP tickets")','A reply','A channel'],ans:1},
{q:'How do you tag a ticket?',opts:['Edit the customer','In the right sidebar, find Tags → type → select or create','Tags can\'t be added','Settings only'],ans:1},
{q:'What does the Shopify integration in the sidebar let you do directly?',opts:['Nothing — view only','Refund, cancel, or duplicate orders without leaving Gorgias','Edit products','Change passwords'],ans:1},
{q:'What should you do before issuing a refund from Gorgias?',opts:['Just click','Confirm order number, amount, and customer; check your team\'s approval policy','Email Shopify','Cancel the order first'],ans:1},
{q:'What is AI Agent?',opts:['A third-party app','Built-in AI that reads tickets, identifies intent, and replies autonomously when confident','A staff role','A reporting tool'],ans:1},
{q:'When AI can\'t handle a ticket, what happens?',opts:['Ticket is deleted','It hands off to a human and appears in the standard queue','Customer is ignored','Ticket auto-closes'],ans:1},
{q:'Should you send AI suggestions without reading them?',opts:['Yes — they\'re always right','No — always read; AI can confidently get details wrong','Only on chat','Only on email'],ans:1},
{q:'What is the keyboard shortcut to open the search bar?',opts:['Ctrl+F','/','Ctrl+K','Alt+S'],ans:1},
{q:'What is the difference between live chat and SMS in Gorgias?',opts:['Both are identical','Both are short and conversational, but chat is web-based and SMS goes via text','Chat is offline only','SMS is admin-only'],ans:1},
{q:'How do you set yourself Available for live chat?',opts:['Settings → Online','Toggle your status in the bottom-left of the inbox','You\'re always online','Email IT'],ans:1},
{q:'Who do you contact if you have access issues?',opts:['Gorgias support directly','Your direct report or the HR Training Coordinator','Another agent','Shopify support'],ans:1}
]},
intermediate:{title:'Intermediate Path',sub:'Intermediate · 20 Questions · Pass = 70%',hd:'q-intermediate',track:'Intermediate — Gorgias',qs:20,questions:[
{q:'How do you create a new View?',opts:['Settings → Views or + New view in the sidebar','Type into search','Create a tag','Cannot create'],ans:0},
{q:'What logic can View filters combine with?',opts:['Only AND','AND/OR logic across multiple conditions (status, channel, tag, assignee, etc.)','Only OR','No logic'],ans:1},
{q:'How do you create a Macro?',opts:['Settings → Tickets → Macros → + Create macro','Right-click in inbox','Edit a ticket','Cannot create'],ans:0},
{q:'What can a Macro do beyond inserting text?',opts:['Nothing','Optionally add tags, change status, assign, set custom fields when sent','Only text','Edit users'],ans:1},
{q:'Best practice for macro names?',opts:['Random','[Topic] — [Specific Case] for instant search','Numbers only','Single words'],ans:1},
{q:'How do you create a Rule?',opts:['Settings → Automation → Rules → + Create rule','Just type','Edit a macro','Settings → Users'],ans:0},
{q:'A Rule has three parts — what are they?',opts:['Title, body, footer','Trigger, conditions, actions','User, role, team','Tag, channel, status'],ans:1},
{q:'What does "Stop processing" do on a rule?',opts:['Disables the rule','Halts further rules from running on that ticket','Deletes the rule','Closes the ticket'],ans:1},
{q:'How do you reorder rules?',opts:['Cannot reorder','Drag and drop in Settings → Rules','Rename them','Delete and recreate'],ans:1},
{q:'How do you merge two duplicate tickets?',opts:['Cannot merge','Open one → ⋯ → Merge → search → confirm','Manually copy','Email customer'],ans:1},
{q:'What is intent detection?',opts:['Manual tagging','Gorgias auto-classifies tickets by intent (e.g., "where is my order")','User preference','Channel routing'],ans:1},
{q:'How do you reply across multiple tickets at once?',opts:['Cannot','Select tickets in the list → use bulk action bar','One at a time always','Settings → Bulk'],ans:1},
{q:'What integration data appears in the sidebar besides Shopify?',opts:['None','Recharge, Loop/Returnly, Klaviyo, Yotpo, ShipStation, etc., depending on what is connected','Only Klaviyo','Only fulfillment'],ans:1},
{q:'What are customer-level tags used for?',opts:['Single tickets only','Persistent tags across every ticket from that customer (e.g., vip, wholesale)','Channel routing','User permissions'],ans:1},
{q:'How do you proactively send an outbound message?',opts:['Cannot','+ New ticket → choose channel → recipient → compose → Send','Email customer outside Gorgias','Settings → Outbound'],ans:1},
{q:'What is a Chat Campaign?',opts:['Email blast','Triggered chat message based on URL, time on page, or visitor attributes','Discount code','Customer survey'],ans:1},
{q:'How do you configure Auto-Respond?',opts:['Cannot configure','Settings → Automate → choose intents and confidence threshold','Edit each ticket','Email AI'],ans:1},
{q:'What does AI Agent use as its source of truth?',opts:['Random text','Connected Help Center articles + Guidance rules','Past tickets only','Macros only'],ans:1},
{q:'Where do you measure AI impact?',opts:['Cannot measure','Statistics → Automate / AI dashboard — auto-resolution rate, CSAT, time saved','Customer surveys only','Email reports'],ans:1},
{q:'What confidence threshold setting is "safer"?',opts:['Lower threshold','Higher threshold = fewer auto-replies, fewer mistakes','Doesn\'t matter','Random'],ans:1},
{q:'What does the Statistics > Automation report show?',opts:['Just users','How many tickets each rule touched and auto-resolution counts','Only revenue','Refund totals'],ans:1},
{q:'How do you split a single ticket that covers two issues?',opts:['Cannot split','⋯ → Split → select messages to move into a new ticket','Delete and recreate','Bulk action'],ans:1},
{q:'What does merging duplicate tickets do?',opts:['Deletes both','Combines them into one thread, preserving messages','Creates a third ticket','Closes them'],ans:1},
{q:'Best practice when taking over a teammate\'s ticket?',opts:['Just reply','Leave an internal note with the handoff context first','Reassign quietly','Close it'],ans:1},
{q:'How do you assign a ticket?',opts:['Cannot assign','Click the Assignee field in the ticket header → pick a user or team','Email IT','Auto only'],ans:1}
]},
advanced:{title:'Advanced Mastery',sub:'Advanced · 20 Questions · Pass = 70%',hd:'q-advanced',track:'Advanced Mastery — Gorgias',qs:20,questions:[
{q:'What templating language is used in macros and rules?',opts:['HTML','Liquid','Markdown','JSON'],ans:1},
{q:'Example of conditional logic in a macro?',opts:['Plain text only','{% if ticket.last_order.fulfillment_status == "fulfilled" %}…{% else %}…{% endif %}','SQL queries','Random'],ans:1},
{q:'How do you reference a customer\'s lifetime spend in a macro?',opts:['Hardcode it','{{customer.total_spent}}','Manual lookup','Cannot reference'],ans:1},
{q:'What is an HTTP integration?',opts:['Email service','Custom integration that calls any REST API and shows the response in the sidebar','Phone system','User permission'],ans:1},
{q:'Where do you set up HTTP integrations?',opts:['Settings → Email','Settings → Integrations → HTTP integration','Settings → Channels','Cannot configure'],ans:1},
{q:'What is the Gorgias REST API used for?',opts:['Cannot use','Programmatically create tickets, push customer data, sync tags from external systems','Only sending email','Only chat'],ans:1},
{q:'What are webhooks used for?',opts:['Sending email','Pushing every ticket event to your warehouse for analytics or external systems','Receiving spam','Customer surveys'],ans:1},
{q:'Where do you configure webhooks?',opts:['Settings → Email','Settings → REST API → Webhooks','Settings → Macros','Cannot configure'],ans:1},
{q:'What is an SLA?',opts:['Discount level','First-response and resolution time targets, often per channel','User role','Tag type'],ans:1},
{q:'Best practice for channel SLAs?',opts:['Same for all','Tighter on chat/SMS (minutes), looser on email (hours)','Email tightest','Voice has no SLA'],ans:1},
{q:'What is a custom ticket field?',opts:['A reply template','Admin-defined structured field on tickets (e.g., "Refund reason") used in views, rules, and reporting','User profile','Channel'],ans:1},
{q:'Best practice when launching a new auto-reply rule?',opts:['Trust it instantly','Pair it with monitoring — track close rate and CSAT to catch regressions','Disable monitoring','No review needed'],ans:1},
{q:'How can you make AI Agent answer subscription questions accurately?',opts:['Cannot','Combine AI with HTTP integrations to pull live data (subscription status, renewal dates)','Only ask Recharge','Manual replies only'],ans:1},
{q:'What is a "per-intent quality loop"?',opts:['Random review','A view filtered to AI-handled tickets for a specific intent, reviewed daily for CSAT and reopens','Manager-only','Email digest'],ans:1},
{q:'How do you train AI Agent on brand voice?',opts:['Cannot train','Connect Help Center articles + add Guidance rules (tone, do/don\'t say, escalation triggers)','Random replies','Edit each reply'],ans:1},
{q:'What does the AI dashboard let you compare?',opts:['Only volume','CSAT for AI-handled vs human-handled tickets, auto-resolution rate, time saved','Just revenue','User salaries'],ans:1},
{q:'What should you do if AI CSAT is meaningfully lower for an intent?',opts:['Ignore it','Tighten the confidence threshold or remove that intent from auto-respond','Promote the AI','Delete the customer'],ans:1},
{q:'What does the "Hide" action on a Facebook/Instagram comment do?',opts:['Deletes the post','Hides the comment from public view without replying — useful for inappropriate comments','Reports to Meta','Bans the user'],ans:1},
{q:'WhatsApp 24-hour window restriction?',opts:['No restrictions','Free-form replies only within 24h of last customer message; outside, only pre-approved templates','One reply per day','None ever allowed'],ans:1},
{q:'Where do you configure Voice routing rules?',opts:['Cannot configure','Settings → Channels → Voice — phone numbers, business hours, IVR menus, routing','Email only','Settings → Users'],ans:1},
{q:'What does call transcription do?',opts:['Plays audio','Converts call audio to searchable text on the ticket','Charges customers','Sends to legal'],ans:1},
{q:'Best practice for the rule order?',opts:['Random','Specific rules above general ones; first match with stop-processing wins','General first','Alphabetical'],ans:1},
{q:'How would you build a rule that auto-tags VIPs?',opts:['Cannot','Trigger on ticket created → condition customer.total_spent > $500 → action add tag "vip"','Manual only','Edit each ticket'],ans:1},
{q:'Why duplicate a Help Center article before changing it for AI training?',opts:['No reason','To preserve the original; AI uses live articles as the source of truth — bad edits affect AI replies','Wastes space','To delete it'],ans:1},
{q:'Best practice for AI Agent output?',opts:['Trust everything immediately','Always review AI output — verify accuracy, refine, add brand voice before letting it run autonomously','Skip review','Only use for chat'],ans:1}
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
