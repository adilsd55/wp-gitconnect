<?php /* Template Name: Google Workspace Training */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>InvenTel — Google Workspace Training (Self-Contained)</title>
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
.float-nav-list .fnl-sub{font-weight:400;color:#5c5c5c;padding-left:28px;font-size:11.5px}

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

/* SEARCH BAR — v3.1 */
.search-bar-wrap{position:sticky;top:0;z-index:200;background:#6D0000;padding:10px 20px;display:flex;align-items:center;gap:10px;box-shadow:0 2px 8px rgba(0,0,0,.25)}
.search-icon{font-size:16px;opacity:.85;flex-shrink:0}
.search-input{flex:1;padding:8px 14px;border-radius:6px;border:none;font-size:13px;font-family:inherit;outline:none;background:#fff;color:#1a1a1a;box-shadow:inset 0 1px 3px rgba(0,0,0,.1);max-width:600px}
.search-input::placeholder{color:#999}
.search-input:focus{box-shadow:inset 0 1px 3px rgba(0,0,0,.1),0 0 0 2px #fcd9b6}
.search-clear-btn{background:transparent;border:none;color:#fcd9b6;cursor:pointer;font-size:18px;padding:0 4px;line-height:1;opacity:.8;transition:opacity .15s;flex-shrink:0}
.search-clear-btn:hover{opacity:1}
.search-count{color:#fcd9b6;font-size:12px;min-width:90px;text-align:right;font-weight:600;flex-shrink:0}
mark.search-match{background:#fef08a;color:#1a1a1a;border-radius:2px;padding:0 2px}
@media print{.search-bar-wrap{display:none!important}}
</style>
</head>
<body>

<!-- HEADER -->
<div class="header-band">
  <div style="text-align:center;padding-bottom:14px"><div class="inventel-logo"><span class="logo-inven">Inven</span><span class="logo-tel">Tel</span></div></div>
  <div class="header-top">
    <div>
      <div class="header-company">InvenTel Innovations — Training Resource Library</div>
      <div class="header-h1">🌐 Google Workspace — Self-Contained Training Guide</div>
      <div class="header-subtitle">Complete step-by-step training for Gmail, Drive, Docs, Sheets, Slides, Meet, Calendar & Gemini AI — click any section header to collapse/expand</div>
    </div>
    <div class="header-meta">All Levels (Beginner → Advanced)<br>Platform: Google Workspace<br>Format: Self-Contained / Standalone</div>
  </div>
</div>
<div class="stat-row">
  <div class="stat-item"><span class="stat-val">8</span><span class="stat-lbl">Core Apps</span></div>
  <div class="stat-item"><span class="stat-val">15+</span><span class="stat-lbl">Training Sections</span></div>
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Skill Levels</span></div>
  <div class="stat-item"><span class="stat-val">30 Days</span><span class="stat-lbl">Mandatory Window</span></div>
  <div class="stat-item"><span class="stat-val">Gemini AI</span><span class="stat-lbl">Built-in AI</span></div>
  <div class="stat-item"><span class="stat-val">Standalone</span><span class="stat-lbl">No External Links Required</span></div>
</div>
<div class="mandatory-bar">⚠️ All Beginner-level content in this deck is MANDATORY and must be completed within your first 30 days. Completion is tracked and reported to your manager.</div>

<!-- SEARCH BAR — v3.1 -->
<div class="search-bar-wrap" id="search-bar-wrap">
  <span class="search-icon">🔍</span>
  <input class="search-input" id="deck-search" type="text" placeholder="Search this training guide…" oninput="deckSearch(this.value)" autocomplete="off"/>
  <button class="search-clear-btn" onclick="clearDeckSearch()" title="Clear search">✕</button>
  <span class="search-count" id="search-count"></span>
</div>

<div id="main-content">
<div class="slide" id="sec-toc">
  <div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Navigation</span></div><h2>📋 Table of Contents</h2><p class="subtitle">Click any item to jump to that section. Click any section header to collapse/expand it.</p></div>
  <div class="slide-body">
    <div class="toc-grid">
      <div class="toc-item" onclick="goTo('sec-overview')">1. Platform Overview<span>What GWS is + access URLs</span></div>
      <div class="toc-item" onclick="goTo('sec-hub')">2. Official Learning Hub<span>Google Learning Center + resources</span></div>
      <div class="toc-item" onclick="goTo('sec-begres')">3. Beginner Training Resources<span>Mandatory — external resources</span></div>
      <div class="toc-item" onclick="goTo('sec-start')">4. Getting Started — First Day Setup<span>Step-by-step account & app setup</span></div>
      <div class="toc-item" onclick="goTo('sec-gmail')">5. Gmail Deep Dive<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-drive')">6. Google Drive Deep Dive<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-dss')">7. Docs, Sheets & Slides<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-meet')">8. Meet & Calendar<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-gemini')">9. Gemini AI<span>AI features all apps</span></div>
      <div class="toc-item" onclick="goTo('sec-intres')">10. Intermediate Resources<span>Self-paced, optional links</span></div>
      <div class="toc-item" onclick="goTo('sec-advres')">11. Advanced Resources<span>Optional deep mastery links</span></div>
      <div class="toc-item" onclick="goTo('sec-certs')">12. Certifications<span>Skill badges & paths</span></div>
      <div class="toc-item" onclick="goTo('cl-mandatory')">13. New Hire Checklist<span>Interactive — mandatory</span></div>
      <div class="toc-item" onclick="goTo('cl-intermediate')">14. Intermediate Checklist<span>Interactive — self-paced</span></div>
      <div class="toc-item" onclick="goTo('cl-advanced')">15. Advanced Checklist<span>Interactive — mastery</span></div>
      <div class="toc-item" onclick="goTo('sec-qr')">16. Quick Reference + Final Note<span>Platform URLs + help centers</span></div>
    </div>
  </div>
</div>

<!-- 1. PLATFORM OVERVIEW -->
<div class="slide" id="sec-overview"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Section 1</span></div><h2>🌐 What is Google Workspace?</h2><p class="subtitle">Google's integrated cloud-based productivity suite.</p></div>
  <div class="slide-body">
    <p style="font-size:13px;color:#5c5c5c;margin-bottom:14px">Google Workspace is InvenTel's primary productivity platform. It replaces standalone email, document, and meeting software with a fully integrated cloud suite. Every team member has access to all 8 core apps through their InvenTel Google account.</p>
    <div class="apps-grid"><span class="app-chip">📧 Gmail</span><span class="app-chip">📁 Drive</span><span class="app-chip">📝 Docs</span><span class="app-chip">📊 Sheets</span><span class="app-chip">📽️ Slides</span><span class="app-chip">🎥 Meet</span><span class="app-chip">📅 Calendar</span><span class="app-chip">✨ Gemini AI</span></div>
    <div class="platform-url"><strong>Platform URL:</strong> <a href="https://workspace.google.com" target="_blank">workspace.google.com</a><br><strong>Gmail:</strong> <a href="https://mail.google.com" target="_blank">mail.google.com</a><br><strong>Drive:</strong> <a href="https://drive.google.com" target="_blank">drive.google.com</a><br><strong>Meet:</strong> <a href="https://meet.google.com" target="_blank">meet.google.com</a><br><strong>Calendar:</strong> <a href="https://calendar.google.com" target="_blank">calendar.google.com</a><br><strong>Help Center:</strong> <a href="https://support.google.com/a/users/answer/9389764" target="_blank">Google Workspace Learning Center</a></div>
    <div class="callout"><strong>💡 How it all connects:</strong> Every Workspace app is linked to the same Google account. A file you create in Docs automatically saves to Drive. A meeting invite in Calendar generates a Meet link. An email attachment in Gmail can be saved to Drive in one click.</div>
  </div>
</div>

<!-- 2. OFFICIAL LEARNING HUB -->
<div class="slide" id="sec-hub"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official Google</span></div><h2>🎓 Official Learning Hub — Google Workspace Learning Center</h2><p class="subtitle">Beginner-level resources are MANDATORY within 30 days.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Google Workspace Learning Center <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official Google</span></div><div class="card-desc">Google's primary training hub — step-by-step guides, cheat sheets, and tutorials for every Workspace app. The single most important reference to bookmark.</div><div class="card-meta"><strong>Format:</strong> Guides + Cheat Sheets &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">All Apps</span><span class="tag t2">Reference</span></div><a href="https://support.google.com/a/users/answer/9389764" target="_blank">→ Visit the Google Workspace Learning Center</a></div>
    <div class="card"><div class="card-title">Applied Digital Skills — Google <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official Google</span></div><div class="card-desc">Free project-based lessons from Google that teach Workspace skills through real tasks — not just reading.</div><div class="card-meta"><strong>Format:</strong> Interactive lessons &nbsp;|&nbsp; <strong>Level:</strong> Beginner–Intermediate</div><div class="tag-row"><span class="tag t2">Project-Based</span><span class="tag t1">Hands-On</span><span class="tag t4">Official</span></div><a href="https://skillshop.exceedlms.com/student/catalog/list?category_ids=6272-applied-digital-skills" target="_blank">→ Start Applied Digital Skills at skillshop.exceedlms.com</a></div>
  </div>
</div>

<!-- 3. BEGINNER TRAINING RESOURCES -->
<div class="slide" id="sec-begres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory — Complete Within 30 Days</span></div><h2>🟢 Beginner Training — Mandatory Resources</h2><p class="subtitle">Every team member must complete these before the 30-day mark.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Getting Started — Google Workspace Learning Center <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Google's official getting-started guide covering all core apps. Step-by-step setup for new users.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~1–2 hrs &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">All Apps</span></div><a href="https://support.google.com/a/users/answer/9389764" target="_blank">→ Start the Getting Started guide</a></div>
    <div class="card"><div class="card-title">Google Workspace Cheat Sheets (All Apps) <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Printable one-page reference cards for every core app. Perfect to keep at your desk.</div><div class="card-meta"><strong>Format:</strong> PDFs &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Cheat Sheets</span><span class="tag t2">Printable</span><span class="tag t4">Quick Ref</span></div><a href="https://support.google.com/a/users/answer/9389764" target="_blank">→ Download Cheat Sheets from Learning Center</a></div>
    <div class="card"><div class="card-title">YouTube: Google Workspace for Beginners <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Visual walkthrough of all core apps. Best for visual learners.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">YouTube</span><span class="tag t4">Video</span><span class="tag t2">All Apps</span></div><a href="https://www.youtube.com/results?search_query=google+workspace+tutorial+for+beginners+2025" target="_blank">→ Search YouTube: "Google Workspace tutorial for beginners 2025"</a></div>
  </div>
</div>

<!-- 4. GETTING STARTED -->
<div class="slide" id="sec-start"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory</span></div><h2>🟢 Getting Started — Your First Day with Google Workspace</h2><p class="subtitle">Complete these steps in order to set up your workspace and verify access.</p></div>
  <div class="slide-body">
    <div class="steps-box"><h4>🔐 Sign In to Your InvenTel Google Account</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Open Chrome (recommended for full Workspace compatibility).</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Go to <a href="https://mail.google.com" target="_blank">mail.google.com</a>.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Enter your InvenTel email (<code><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c4a2adb6b7b0aaa5a9a1eaa8a5b7b0aaa5a9a184adaab2a1aab0a1a8eaa7aba9">[email&#160;protected]</a></code>) → <strong>Next</strong>.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">Enter your temporary password from HR. Create a new strong password when prompted.</div></div>
      <div class="step"><div class="step-num green">5</div><div class="step-text">Complete 2-factor authentication if prompted. You may need your phone.</div></div>
      <div class="step-tip"><strong>💡 Tip:</strong> Click the <strong>grid icon</strong> (⋮⋮⋮ — 9 dots) top-right corner — this is the <strong>App Launcher</strong>, your gateway to every app.</div>
    </div>
    <div class="steps-box"><h4>✅ Verify Access to All 8 Core Apps</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>📧 Gmail</strong> — Inbox loads. Send a test email to yourself.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>📁 Drive</strong> — See "My Drive." Create: <span class="step-nav">+ New → Folder</span>.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>📝 Docs</strong> — <a href="https://docs.google.com" target="_blank">docs.google.com</a> → + Blank → type text → confirm auto-save.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text"><strong>📊 Sheets</strong> — Create blank sheet → type number in A1 → confirm save.</div></div>
      <div class="step"><div class="step-num green">5</div><div class="step-text"><strong>📽️ Slides</strong> — Create blank presentation → confirm editor loads.</div></div>
      <div class="step"><div class="step-num green">6</div><div class="step-text"><strong>🎥 Meet</strong> — <a href="https://meet.google.com" target="_blank">meet.google.com</a> → New meeting → Start instant → test camera/mic → leave.</div></div>
      <div class="step"><div class="step-num green">7</div><div class="step-text"><strong>📅 Calendar</strong> — <a href="https://calendar.google.com" target="_blank">calendar.google.com</a> → create a test event.</div></div>
      <div class="step"><div class="step-num green">8</div><div class="step-text"><strong>✨ Gemini</strong> — In Gmail, open a long thread → click <strong>✨ Summarize this email</strong>.</div></div>
      <div class="step-tip"><strong>💡</strong> If any app shows "access denied," contact the HR Training Coordinator from onboarding.</div>
    </div>
    <div class="steps-box"><h4>👤 Set Up Your Profile & Photo</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Click your <strong>profile icon</strong> (top-right) → <strong>Manage your Google Account</strong>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Go to <strong>Personal info</strong> → verify name → add a profile photo (professional headshot).</div></div>
    </div>
    <div class="steps-box"><h4>✏️ Create Your Email Signature</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Gmail: ⚙️ → <strong>See all settings</strong> → scroll to <strong>Signature</strong> → <strong>+ Create new</strong>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Enter: <code>Name</code> / <code>Title | InvenTel Innovations</code> / <code>Phone</code> / <code>Email</code>.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Set as default for new emails and replies → <strong>Save Changes</strong>.</div></div>
    </div>
    <div class="steps-box"><h4>🎥 Set Up Google Meet Background</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Open Meet → ⚙️ Settings → Video → Visual effects → Upload a background.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Select the InvenTel-branded background image provided by HR.</div></div>
    </div>
  </div>
</div>

<!-- 5. GMAIL DEEP DIVE -->
<div class="slide" id="sec-gmail"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📧 Core Feature Deep Dive — Gmail</h2><p class="subtitle">Complete step-by-step instructions at every level.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Gmail Basics</h3>
        <div class="sub-card"><strong>Composing & Sending Email</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Click <strong>Compose</strong> (top-left).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Enter recipient in <strong>To</strong>. Cc for copies, Bcc for hidden.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Subject + message. Format with toolbar. 📎 to attach.</div></div>
          <div class="step"><div class="step-num green">4</div><div class="step-text"><strong>Send</strong>. Schedule: ▾ → <strong>Schedule send</strong>.</div></div>
        </div>
        <div class="sub-card"><strong>Labels, Categories, Stars & Archive</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Labels:</strong> Sidebar → + Create new label. Apply: select emails → tag icon → check label.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Categories:</strong> Primary/Social/Promotions/Updates tabs. Drag to retrain.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Star:</strong> Click ☆. <strong>Archive:</strong> 📦 removes from inbox, stays searchable.</div></div>
          <div class="step"><div class="step-num green">4</div><div class="step-text"><strong>Snooze:</strong> Hover → 🕐 → pick time. Email reappears then.</div></div>
          <div class="step-tip"><strong>💡</strong> Right-click labels to color-code them.</div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Power Features</h3>
        <div class="sub-card"><strong>Creating Filters (Auto-Sort)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Search bar → Show search options → fill criteria → <strong>Create filter</strong>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Choose: Apply label, Skip inbox, Star, Forward. Check "Also apply to existing."</div></div>
        </div>
        <div class="sub-card"><strong>Templates (Canned Responses)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">⚙️ → Settings → Advanced → enable Templates → Save.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Compose email → ⋮ → Templates → Save draft as template.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">To use: Compose → ⋮ → Templates → select.</div></div>
        </div>
        <div class="sub-card"><strong>Search Operators & Smart Compose</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><code>from:</code> <code>has:attachment</code> <code>before:</code> <code>is:unread</code> <code>larger:5M</code></div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><strong>Smart Compose:</strong> Gray suggestions as you type → <span class="kbd">Tab</span> to accept.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Automation & Delegation</h3>
        <div class="sub-card"><strong>Gmail Delegation</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">⚙️ → Settings → Accounts and Import → "Grant access" → Add account.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Delegates can read/send/delete emails but NOT change password or settings.</div>
        </div>
        <div class="sub-card"><strong>Multi-Send Mode & Advanced Filters</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Compose → 👥 Multi-send icon → add recipients → use <code>@firstname</code> merge tags.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Advanced: <code>{invoice receipt payment}</code> = OR logic. <code>-newsletter</code> = exclude.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 6. DRIVE DEEP DIVE -->
<div class="slide" id="sec-drive"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📁 Core Feature Deep Dive — Google Drive</h2><p class="subtitle">Store, organize, share, and collaborate on files.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Drive Basics</h3>
        <div class="sub-card"><strong>Upload, Folders & Sharing</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><span class="step-nav">+ New → File upload</span> or Folder upload. Create folder: + New → Folder.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Share:</strong> Right-click → Share → email → <strong>Viewer/Commenter/Editor</strong> → Send.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Link:</strong> Share dialog → General access → "Anyone with the link."</div></div>
        </div>
        <div class="sub-card"><strong>My Drive vs. Shared Drives vs. Shared with Me</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>My Drive</strong> = your personal storage. <strong>Shared Drives</strong> = team-owned. <strong>Shared with me</strong> = others' files shared to you.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Organization & Search</h3>
        <div class="sub-card"><strong>Advanced Search & Shared Drive Permissions</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Search: <code>type:spreadsheet</code> <code>owner:me</code> <code>before:2025-01-01</code></div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Shared Drive ⚙️ → Manage members (Manager/Content Manager/Contributor/Viewer).</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text"><strong>Star:</strong> Right-click → Add to Starred. <strong>Shortcut:</strong> Right-click → Organize → Add shortcut.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Governance & Sync</h3>
        <div class="sub-card"><strong>Data Governance, Version History & Desktop</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Shared Drive ⚙️ → control external sharing → "Prevent viewers from downloading/printing."</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Version history: <span class="step-nav">File → Version history → See version history</span>. Name versions for permanent checkpoints.</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text">Drive for Desktop: <a href="https://www.google.com/drive/download/" target="_blank">download</a> → Stream files (recommended) or Mirror.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 7. DOCS, SHEETS & SLIDES -->
<div class="slide" id="sec-dss"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📝📊📽️ Core Feature Deep Dive — Docs, Sheets & Slides</h2><p class="subtitle">Your three core creation tools.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Core Editing</h3>
        <div class="sub-card"><strong>📝 Docs</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><a href="https://docs.google.com" target="_blank">docs.google.com</a> → + Blank. Bold <span class="kbd">Ctrl+B</span>, headings via dropdown.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><span class="step-nav">Insert → Image</span>. Comments: <span class="kbd">Ctrl+Alt+M</span>. Assign: <code>+email</code>.</div></div>
        </div>
        <div class="sub-card"><strong>📊 Sheets</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><a href="https://sheets.google.com" target="_blank">sheets.google.com</a> → + Blank. <span class="kbd">Tab</span> = right, <span class="kbd">Enter</span> = down.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Formulas: <code>=SUM(A1:A10)</code> <code>=AVERAGE()</code> <code>=COUNT()</code>. Sort: <span class="step-nav">Data → Sort</span>.</div></div>
        </div>
        <div class="sub-card"><strong>📽️ Slides</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><a href="https://slides.google.com" target="_blank">slides.google.com</a> → + Blank. <span class="kbd">Ctrl+M</span> = new slide.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><span class="step-nav">Insert → Image/Shape</span>. Present: Slideshow button or <span class="kbd">Ctrl+F5</span>.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Productivity</h3>
        <div class="sub-card"><strong>📝 Suggesting Mode, TOC & Smart Chips</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Pencil icon → <strong>Suggesting</strong>. Edits = tracked suggestions. TOC: <span class="step-nav">Insert → Table of contents</span>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Type <code>@</code> → mention people, link files, building blocks. Pageless: <span class="step-nav">File → Page setup</span>.</div></div>
        </div>
        <div class="sub-card"><strong>📊 VLOOKUP, IF, Pivot Tables & Charts</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><code>=VLOOKUP(key,range,col,FALSE)</code> / <code>=IF(A1>100,"Over","OK")</code> / <code>=COUNTIF(B:B,"Done")</code></div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Pivot: Select data → <span class="step-nav">Insert → Pivot table</span>. Charts: <span class="step-nav">Insert → Chart</span>.</div></div>
        </div>
        <div class="sub-card"><strong>📽️ Transitions, Animations & Speaker Notes</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Slide → Transition</span>. Click element → Motion → Add animation. Notes at bottom of slide.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Linked charts: <span class="step-nav">Insert → Chart → From Sheets</span>. Click "Update" when source changes.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Power User</h3>
        <div class="sub-card"><strong>📝 Building Blocks & Dropdowns</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Type <code>@</code> → Building blocks. <span class="step-nav">Insert → Dropdown</span> for custom menus.</div></div>
        </div>
        <div class="sub-card"><strong>📊 ARRAYFORMULA, IMPORTRANGE & Apps Script</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><code>=ARRAYFORMULA(A2:A*B2:B)</code> — entire column without dragging.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text"><code>=IMPORTRANGE("url","Sheet1!A:C")</code> — live data from another spreadsheet.</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text"><span class="step-nav">Extensions → Apps Script</span> — JavaScript automation. Protected ranges: <span class="step-nav">Data → Protect</span>.</div></div>
        </div>
        <div class="sub-card"><strong>📽️ Master Slides & Import</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Slide → Edit theme</span> for master layouts. <span class="step-nav">File → Import slides</span> from other decks.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 8. MEET & CALENDAR -->
<div class="slide" id="sec-meet"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🎥📅 Core Feature Deep Dive — Meet & Calendar</h2><p class="subtitle">Video meetings and scheduling.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Meetings & Scheduling</h3>
        <div class="sub-card"><strong>🎥 Join, Start & Screen Share</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Join:</strong> Click Meet link → check camera/mic → Join now.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Start:</strong> meet.google.com → New meeting → Instant / Later / Calendar.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Share screen:</strong> Present now → Tab (best), Window, or Screen.</div></div>
        </div>
        <div class="sub-card"><strong>📅 Create Events with Meet Links</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Calendar → click time slot or + Create → title, time, guests.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click <strong>Add Google Meet video conferencing</strong> → Save.</div></div>
        </div>
        <div class="sub-card"><strong>🖊️ Annotate — Draw on Shared Screens</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">During a Meet call, have a participant share their screen or present a tab/window.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click <strong>Activities</strong> (bottom toolbar) → <strong>Annotate</strong>.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Use the pen, highlighter, or shapes to draw directly on the shared screen in real time.</div></div>
          <div class="step"><div class="step-num green">4</div><div class="step-text">All meeting participants can see your annotations live. Click <strong>Stop annotating</strong> when done.</div></div>
          <div class="step-tip"><strong>💡</strong> Annotate is great for highlighting key data points during presentations, marking up design reviews, or pointing out specific items on a shared document.</div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Power Scheduling</h3>
        <div class="sub-card"><strong>📅 Appointment Schedules & Multiple Calendars</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">+ Create → Appointment schedule → set availability → share booking link.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Sidebar + → Create new calendar → own color. Right-click events to change color.</div></div>
        </div>
        <div class="sub-card"><strong>🎥 Breakout Rooms, Polls & Backgrounds</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Activities → Breakout rooms / Polls / Q&A.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">⋮ → Apply visual effects → blur or upload InvenTel background.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Admin Features</h3>
        <div class="sub-card"><strong>🎥 Recording & Transcripts</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Activities → Recording → Start. Saves to Drive "Meet Recordings."</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Transcripts: Activities → Transcripts → Start. Saved as Google Doc.</div></div>
        </div>
        <div class="sub-card"><strong>📅 Working Hours & Location</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Calendar ⚙️ → Working hours & location → set daily times + office/home.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 9. GEMINI AI -->
<div class="slide" id="sec-gemini"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>✨ Gemini AI — AI Features Across All Apps</h2><p class="subtitle">Built-in AI assistant — no separate tool needed.</p></div>
  <div class="slide-body">
    <div class="callout"><strong>💡 What is Gemini?</strong> Google's AI assistant built into Gmail, Docs, Sheets, Slides, Meet, and Drive. Summarize emails, draft documents, generate formulas, create decks, and take meeting notes.</div>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Getting Started</h3>
        <div class="sub-card"><strong>📧 Gmail — Summarize & Draft</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open long thread → <strong>✨ Summarize this email</strong>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Reply → <strong>✨ Help me write</strong> → describe what to say → refine with Formalize/Shorten/Elaborate.</div></div>
        </div>
        <div class="sub-card"><strong>📝 Docs — Help Me Write</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Click ✨ in margin or <code>@</code> → Help me write → describe need → Insert.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Gemini Across Apps</h3>
        <div class="sub-card"><strong>📊 Sheets & 📁 Drive</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Sheets: ✨ → "Create formula for running total of column B." Verify before inserting.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Drive: Gemini side panel → "Find latest Q3 report" or "Summarize meeting notes."</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Power AI</h3>
        <div class="sub-card"><strong>📽️ Slides Generation & 🎥 Meeting Notes</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Slides: ✨ "Help me create" → describe deck → Gemini generates slides.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Meet: Activities → Take notes with Gemini → auto-summary + action items.</div></div>
        </div>
        <div class="sub-card"><strong>Prompt Engineering Tips</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>Be specific:</strong> Include audience, tone, word count, format.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text"><strong>Iterate:</strong> "Make shorter" / "Add data" / "Change tone to casual."</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text"><strong>Always review:</strong> Verify facts and add insight before sharing.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 10. INTERMEDIATE RESOURCES -->
<div class="slide" id="sec-intres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-intermediate">Intermediate</span></div><h2>🟡 Intermediate Training — Self-Paced Resources</h2><p class="subtitle">Optional but strongly recommended.</p></div>
  <div class="slide-body">
    <div class="card intermediate"><div class="card-title">Google Workspace Tips Library <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Topic-specific guides by real work scenarios — projects, remote meetings, onboarding, email at scale.</div><div class="card-meta"><strong>Format:</strong> Guides &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Use Cases</span><span class="tag t4">Workflows</span></div><a href="https://workspace.google.com/training/" target="_blank">→ Browse Tips Library at workspace.google.com/training</a></div>
    <div class="card intermediate"><div class="card-title">Hybrid Work Training — Learning Center <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Meet companion mode, async workflows, scheduling across time zones.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Hybrid</span><span class="tag t4">Remote</span></div><a href="https://support.google.com/a/users/answer/9389764" target="_blank">→ Hybrid work training on Learning Center</a></div>
    <div class="card intermediate"><div class="card-title">Computerworld — Google Workspace How-To Tutorials <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Detailed tutorials: Sheets formulas, Slides animations, Gmail search operators, Drive sharing.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t4">Deep Dives</span><span class="tag t2">All Apps</span></div><a href="https://www.computerworld.com/article/1633736/how-to-use-google-workspace-tips-tutorials-cheat-sheets.html" target="_blank">→ Computerworld Workspace tutorials</a></div>
    <div class="card intermediate"><div class="card-title">YouTube: Intermediate Google Workspace <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">In-depth video covering Sheets formulas, Drive collaboration, Meet advanced features, Calendar power tools.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=google+workspace+intermediate+tips+2025" target="_blank">→ Search YouTube: "Google Workspace intermediate tips 2025"</a></div>
  </div>
</div>

<!-- 11. ADVANCED RESOURCES -->
<div class="slide" id="sec-advres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-advanced">Advanced</span></div><h2>🔴 Advanced Training — Deep Mastery Resources</h2><p class="subtitle">Optional — for technical depth or leadership roles.</p></div>
  <div class="slide-body">
    <div class="card advanced"><div class="card-title">Google Cloud Skills Boost — Learning Paths <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Hands-on labs: automation, scripting, integrations, admin config. Earn skill badges.</div><div class="card-meta"><strong>Format:</strong> Labs &nbsp;|&nbsp; <strong>Est. Time:</strong> ~3–5 hrs/path &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Labs</span><span class="tag t4">Badges</span></div><a href="https://www.cloudskillsboost.google/paths" target="_blank">→ Browse learning paths at cloudskillsboost.google</a></div>
    <div class="card advanced"><div class="card-title">Google Apps Script — Automation <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Built-in scripting for custom workflows, automated reports, integrations across all apps.</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <strong>Est. Time:</strong> ~2–3 hrs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Automation</span><span class="tag t4">Scripts</span></div><a href="https://developers.google.com/apps-script/overview" target="_blank">→ Apps Script developer docs</a></div>
    <div class="card advanced"><div class="card-title">Google AI Essentials <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Responsible AI, effective prompting, leveraging Gemini productively.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~5 hrs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">AI</span><span class="tag t4">Prompting</span></div><a href="https://ai.google/learn-ai-skills/" target="_blank">→ Google AI Essentials</a></div>
    <div class="card advanced"><div class="card-title">YouTube: Advanced Admin & Automation <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Apps Script automation, admin controls, API integrations, custom tools.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">YouTube</span><span class="tag t4">Admin</span></div><a href="https://www.youtube.com/results?search_query=google+workspace+advanced+admin+automation+2025" target="_blank">→ Search YouTube: "Google Workspace advanced admin automation"</a></div>
  </div>
</div>

<!-- 12. CERTIFICATIONS -->
<div class="slide" id="sec-certs"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Certifications</span></div><h2>🏅 Certifications & Skill Badges</h2><p class="subtitle">Optional credentials. Shareable on LinkedIn.</p></div>
  <div class="slide-body">
    <div class="callout" style="background:#fffbeb;border-left-color:#ca8a04"><strong style="color:#854d0e">💡 Optional Personal Investment:</strong> The certifications listed below are <strong>not covered by InvenTel</strong> and require an out-of-pocket fee to attempt the assessments or access the proctored exams. The learning content and labs on Google Cloud Skills Boost can be explored at no cost, but earning the official badge or certification requires a paid assessment. These credentials are entirely optional — they are personal career development tools you can pursue on your own time if you'd like to formally validate your Workspace skills.</div>
    <table class="cert-table"><thead><tr><th>Certification / Badge</th><th>Platform</th><th>Skill Level</th><th>Est. Time</th></tr></thead><tbody>
      <tr><td><strong>Google Workspace Skill Badge</strong></td><td>Cloud Skills Boost</td><td><span class="badge badge-beginner">Beginner</span></td><td>~2–3 hrs/badge</td></tr>
      <tr><td><strong>GWS Learning Path Badge</strong></td><td>Cloud Skills Boost</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~3–5 hrs</td></tr>
      <tr><td><strong>Google AI Essentials Certificate</strong></td><td>Google (ai.google)</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~5 hrs</td></tr>
      <tr><td><strong>Workspace Admin Certification</strong></td><td>Google Cloud</td><td><span class="badge badge-advanced">Advanced</span></td><td>~2 hrs (exam)</td></tr>
    </tbody></table>
    <p style="font-size:12px;color:#777;margin-top:10px">Browse all paths at <a href="https://www.cloudskillsboost.google/paths" target="_blank">cloudskillsboost.google/paths</a>.</p>
  </div>
</div>

<!-- 13. NEW HIRE CHECKLIST -->
<div class="checklist-section mandatory" id="cl-mandatory"><div class="checklist-head mandatory"><h2>✅ New Hire Onboarding Checklist</h2><div class="ch-sub">Complete all tasks within your first 30 days</div><span class="ch-badge">Mandatory · 30-Day Deadline</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">💻 App Downloads (OPTIONAL)</div><ul class="checklist-items"><li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Pin Workspace to taskbar/dock <span class="ci-est">Optional</span></div><div class="ci-desc">Windows: Chrome → mail.google.com → ⋮ → Create shortcut → Pin. Mac: drag to Dock.</div></div></li></ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📱 Mobile Apps (OPTIONAL)</div><ul class="checklist-items"><li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Download Gmail + Drive mobile apps <span class="ci-est">Optional</span></div><div class="ci-desc">App Store or Play Store → Gmail & Google Drive → sign in with InvenTel account.</div></div></li></ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">🔐 Account Setup (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Sign in to InvenTel Google account <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Set up profile photo <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Create email signature <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Set up Meet background <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Verify access to all 8 apps <span class="ci-est">~15 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📧📁📝📊📽️🎥📅✨ App Training (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Gmail beginner tutorials (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Drive beginner tutorials (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Docs beginner tutorial (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Sheets beginner tutorial (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Slides beginner tutorial (Sec 7) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Meet & Calendar tutorials (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Practice using Annotate in a Meet call (Sec 8) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Try Gemini: Summarize + Help me write (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📚 External Resources (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Review Google Workspace Learning Center (Sec 2) <span class="ci-est">~1 hr</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Watch YouTube Beginner Tutorial (Sec 3) <span class="ci-est">~45 min</span></div></div></li>
    </ul></div>
  </div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-mandatory" style="color:#166534">0 of 15 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-mandatory" style="background:#16a34a"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#166534" onclick="resetList('mandatory')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('mandatory')">📝 Take Quiz</button></div></div>
</div>

<!-- 14. INTERMEDIATE CHECKLIST -->
<div class="checklist-section intermediate" id="cl-intermediate"><div class="checklist-head intermediate"><h2>✅ Intermediate Learner Checklist</h2><div class="ch-sub">Self-paced — after mandatory training</div><span class="ch-badge">Self-Paced · Optional</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-intermediate">All Apps Intermediate</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Set up 3 Gmail filters (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Create 2 email templates (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Master 5 search operators (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Use advanced Drive search (Sec 6) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Use Suggesting mode in Docs (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Build a pivot table in Sheets (Sec 7) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Add Slides transitions/animations (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Create Appointment Schedule (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Use Gemini for Sheets formula (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-intermediate" style="color:#854d0e">0 of 9 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-intermediate" style="background:#ca8a04"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#854d0e" onclick="resetList('intermediate')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('intermediate')">📝 Take Quiz</button></div></div>
</div>

<!-- 15. ADVANCED CHECKLIST -->
<div class="checklist-section advanced" id="cl-advanced"><div class="checklist-head advanced"><h2>✅ Advanced Learner Checklist</h2><div class="ch-sub">Optional — deep mastery</div><span class="ch-badge">Optional · Deep Mastery</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-advanced">All Apps Advanced</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Set up Gmail delegation (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Send Multi-send email (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Configure Shared Drive governance (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Write ARRAYFORMULA in Sheets (Sec 7) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Run a sample Apps Script (Sec 7) <span class="ci-est">~1 hr</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Record Meet + access transcript (Sec 8) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Gemini: generate full Slides deck (Sec 9) <span class="ci-est">~20 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-advanced" style="color:#991b1b">0 of 7 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-advanced" style="background:#991b1b"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#991b1b" onclick="resetList('advanced')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('advanced')">📝 Take Quiz</button></div></div>
</div>

<!-- 16. QUICK REFERENCE -->
<div class="slide" id="sec-qr"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Quick Reference</span></div><h2>🔗 Quick Reference — Platform Access & Help Centers</h2></div>
  <div class="slide-body"><div class="qr-grid">
    <div class="qr-card"><h4>🔐 Platform Access</h4><ul><li><a href="https://workspace.google.com" target="_blank">workspace.google.com</a></li><li><a href="https://mail.google.com" target="_blank">Gmail</a></li><li><a href="https://drive.google.com" target="_blank">Google Drive</a></li><li><a href="https://docs.google.com" target="_blank">Docs</a></li><li><a href="https://sheets.google.com" target="_blank">Sheets</a></li><li><a href="https://slides.google.com" target="_blank">Slides</a></li><li><a href="https://meet.google.com" target="_blank">Meet</a></li><li><a href="https://calendar.google.com" target="_blank">Calendar</a></li></ul></div>
    <div class="qr-card"><h4>🎓 Help Centers</h4><ul><li><a href="https://support.google.com/a/users/answer/9389764" target="_blank">Workspace Learning Center</a></li><li><a href="https://support.google.com/a/users/answer/9259748" target="_blank">Gmail</a></li><li><a href="https://support.google.com/a/users/answer/9282958" target="_blank">Drive</a></li><li><a href="https://support.google.com/a/users/answer/9299931" target="_blank">Docs</a></li><li><a href="https://support.google.com/a/users/answer/9300022" target="_blank">Sheets</a></li><li><a href="https://support.google.com/a/users/answer/9299946" target="_blank">Slides</a></li><li><a href="https://support.google.com/a/users/answer/9300131" target="_blank">Meet</a></li><li><a href="https://support.google.com/a/users/answer/9294972" target="_blank">Calendar</a></li></ul></div>
    <div class="qr-card"><h4>🏅 Certs & Learning</h4><ul><li><a href="https://workspace.google.com/training/" target="_blank">Tips Library</a></li><li><a href="https://skillshop.exceedlms.com/student/catalog/list?category_ids=6272-applied-digital-skills" target="_blank">Applied Digital Skills</a></li><li><a href="https://www.cloudskillsboost.google/paths" target="_blank">Cloud Skills Boost</a></li><li><a href="https://ai.google/learn-ai-skills/" target="_blank">AI Essentials</a></li><li><a href="https://cloud.google.com/certification" target="_blank">Admin Cert</a></li></ul></div>
    <div class="qr-card"><h4>🎬 YouTube</h4><ul><li><a href="https://www.youtube.com/results?search_query=google+workspace+tutorial+for+beginners+2025" target="_blank">Beginner Tutorial</a></li><li><a href="https://www.youtube.com/results?search_query=google+workspace+intermediate+tips+2025" target="_blank">Intermediate Tips</a></li><li><a href="https://www.youtube.com/results?search_query=google+workspace+advanced+admin+automation+2025" target="_blank">Advanced Admin</a></li></ul></div>
  </div></div>
</div>

<!-- FINAL NOTE -->
<div class="final-note" id="sec-final">
  <p style="font-size:15px;font-weight:700;margin-bottom:10px">📌 Final Note — Google Workspace Training</p>
  <p style="margin-bottom:10px">All <strong>Beginner-level content</strong> is <strong>mandatory</strong> within your first <strong>30 days</strong>. Intermediate and Advanced training is self-paced.</p>
  <p style="margin-bottom:10px">This deck is <strong>self-contained</strong> — every deep-dive includes complete step-by-step instructions. Click any section header to collapse it once you've completed it. External links and help centers are in the Quick Reference.</p>
  <p style="margin-bottom:10px">Use the <strong>New Hire Checklist</strong> to track progress and share with your manager.</p>
  <p style="margin-bottom:10px">For access, credentials, or training questions — reach out to the <strong>HR Training Coordinator who assisted you during onboarding</strong>.</p>
  <p style="margin-bottom:10px"><a href="https://support.google.com/a/users/answer/9389764" target="_blank">Google Workspace Learning Center →</a></p>
  <p style="font-size:11px;opacity:.7;margin-top:14px">Last updated: April 6, 2025</p>
</div>

</div><!-- /main-content -->

<!-- FLOATING NAV BUTTON -->
<button class="float-nav-btn" onclick="toggleFloatNav()" title="Jump to section">📋</button>
<div class="float-nav-panel" id="float-nav">
  <div class="float-nav-hd">📋 Jump to Section</div>
  <ul class="float-nav-list">
    <li><a class="fnl-section" href="#sec-toc" onclick="closeNav()">📋 Table of Contents</a></li>
    <li><a class="fnl-section" href="#sec-overview" onclick="closeNav()">🌐 1. Platform Overview</a></li>
    <li><a class="fnl-section" href="#sec-hub" onclick="closeNav()">🎓 2. Official Learning Hub</a></li>
    <li><a class="fnl-section" href="#sec-begres" onclick="closeNav()">🟢 3. Beginner Resources</a></li>
    <li><a class="fnl-section" href="#sec-start" onclick="closeNav()">🟢 4. Getting Started</a></li>
    <li><a class="fnl-section" href="#sec-gmail" onclick="closeNav()">📧 5. Gmail Deep Dive</a></li>
    <li><a class="fnl-section" href="#sec-drive" onclick="closeNav()">📁 6. Drive Deep Dive</a></li>
    <li><a class="fnl-section" href="#sec-dss" onclick="closeNav()">📝 7. Docs, Sheets & Slides</a></li>
    <li><a class="fnl-section" href="#sec-meet" onclick="closeNav()">🎥 8. Meet & Calendar</a></li>
    <li><a class="fnl-section" href="#sec-gemini" onclick="closeNav()">✨ 9. Gemini AI</a></li>
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

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
/* SECTION COLLAPSE/EXPAND */
function toggleSection(hd){hd.classList.toggle('collapsed');var body=hd.nextElementSibling;body.classList.toggle('collapsed');}
function goTo(id){var el=document.getElementById(id);if(!el)return;var hd=el.querySelector('.slide-header');if(hd&&hd.classList.contains('collapsed')){hd.classList.remove('collapsed');hd.nextElementSibling.classList.remove('collapsed');}el.scrollIntoView({behavior:'smooth',block:'start'});}

/* FLOATING NAV */
function toggleFloatNav(){document.getElementById('float-nav').classList.toggle('open');}
function closeNav(){document.getElementById('float-nav').classList.remove('open');}

/* CHECKLISTS */
var TOTALS={mandatory:15,intermediate:9,advanced:7};
function tick(el,s){el.classList.toggle('checked');updateBar(s);}
function updateBar(s){var c=document.getElementById('cl-'+s),ck=c.querySelectorAll('.cb.checked:not([data-optional])').length,t=TOTALS[s],p=t>0?Math.round((ck/t)*100):0;document.getElementById('lbl-'+s).textContent=ck+' of '+t+' completed';document.getElementById('bar-'+s).style.width=p+'%';}
function resetList(s){document.getElementById('cl-'+s).querySelectorAll('.cb.checked').forEach(function(cb){cb.classList.remove('checked');});updateBar(s);}

/* QUIZ DATA — 25 per level, pulls 20 */
var qSection,qIndex,qScore,qAnswered,qQuestions;
var QUIZ={
mandatory:{title:'New Hire Onboarding',sub:'Mandatory · 20 Questions · Pass = 70%',hd:'q-mandatory',track:'New Hire Onboarding — Google Workspace',qs:20,questions:[
{q:'How do you access the App Launcher?',opts:['Workspace logo bottom-left','Grid icon (9 dots) top-right','Ctrl+Shift+A','Type "apps" in search'],ans:1},
{q:'What does ▾ next to Send do?',opts:['Cancels email','Saves draft','Opens Schedule send','Sends to all contacts'],ans:2},
{q:'What are Gmail labels?',opts:['Colored text','Organizing tags — emails can have multiple','Spam blockers','Templates'],ans:1},
{q:'What does archiving do?',opts:['Deletes permanently','Moves to Trash','Removes from inbox, stays searchable','Forwards to manager'],ans:2},
{q:'My Drive vs. Shared Drives?',opts:['Online vs offline','Your files vs team-owned files','Personal vs external','No difference'],ans:1},
{q:'How to share a Drive file?',opts:['Email attachment only','Right-click → Share → email → permission → Send','Print it','USB drive'],ans:1},
{q:'Three Drive permission levels?',opts:['Admin/User/Guest','Owner/Manager/Contributor','Viewer/Commenter/Editor','Read/Write/Execute'],ans:2},
{q:'New slide shortcut in Slides?',opts:['Ctrl+N','Ctrl+M','Ctrl+S','Ctrl+Shift+N'],ans:1},
{q:'SUM formula in Sheets?',opts:['=ADD(A1:A10)','=TOTAL(A1:A10)','=SUM(A1:A10)','=CALC(A1:A10)'],ans:2},
{q:'How to present in Slides?',opts:['File → Print','Slideshow button or Ctrl+F5','Right-click → Present','Share file'],ans:1},
{q:'Best Meet sharing for video audio?',opts:['Entire screen','A window','A Chrome tab','Camera only'],ans:2},
{q:'Add Meet link to Calendar event?',opts:['Paste URL manually','Click "Add Google Meet video conferencing"','Auto-added to all','Cannot add'],ans:1},
{q:'What does Gemini Summarize do?',opts:['Deletes threads','Translates','AI summary of entire thread','Forwards to manager'],ans:2},
{q:'Where to set email signature?',opts:['Profile → Settings','⚙️ → See all settings → General → Signature','Compose → Format','Auto-set by IT'],ans:1},
{q:'App shows "access denied" — what to do?',opts:['Try tomorrow','New account','Contact HR Training Coordinator','Reinstall Chrome'],ans:2},
{q:'How to snooze email?',opts:['Right-click → Read','Hover → clock icon → pick time','Star + calendar','Move to label'],ans:1},
{q:'Gemini "Help me write" in Docs?',opts:['Grammar only','Generates text from your description','Translates','Formats auto'],ans:1},
{q:'Adding Calendar guests does what?',opts:['Nothing','Email invitation with RSVP','Auto-joins Meet','Shares full calendar'],ans:1},
{q:'Create Drive folder?',opts:['File → New Folder','+ New → Folder → name → Create','Right-click desktop','Auto-created'],ans:1},
{q:'What is the App Launcher?',opts:['Mobile-only','Grid icon giving access to all apps','Chrome extension','Taskbar shortcut'],ans:1},
{q:'Add comment to Doc?',opts:['File → Comment','Highlight → Ctrl+Alt+M','Insert → Comment box','Not available'],ans:1},
{q:'What does starring an email do?',opts:['Deletes it','Marks important — in Starred sidebar','Forwards to favorites','Archives it'],ans:1},
{q:'Spreadsheet app in Workspace?',opts:['Docs','Slides','Sheets','Forms'],ans:2},
{q:'Insert image in Docs?',opts:['Paste only','Insert → Image','Drag from Drive only','Cannot add images'],ans:1},
{q:'New Doc auto-saves where?',opts:['Desktop','Google Drive','Must save manually','Emails a copy'],ans:1},
{q:'How do you start Annotate in a Meet call?',opts:['Right-click the screen','Activities → Annotate','Settings → Drawing tools','⋮ → Markup mode'],ans:1}
]},
intermediate:{title:'Intermediate Path',sub:'Intermediate · 20 Questions · Pass = 70%',hd:'q-intermediate',track:'Intermediate — Google Workspace',qs:20,questions:[
{q:'What is Smart Compose?',opts:['Deletes low-priority','AI text suggestions as you type','Schedules emails','Auto-marks important'],ans:1},
{q:'Create Gmail filter?',opts:['Compose → Filter','Search bar → options → criteria → Create filter','⚙️ → Themes','Right-click → Filter'],ans:1},
{q:'What does has:attachment do?',opts:['Deletes attached emails','Shows only emails with attachments','Attaches file','Searches filename'],ans:1},
{q:'type:spreadsheet owner:me returns?',opts:['All org sheets','Only Sheets you own','Files named spreadsheet','PDFs'],ans:1},
{q:'Shared Drive Manager vs Content Manager?',opts:['Same permissions','Manager controls members+settings; CM manages files only','CM has more','Manager view-only'],ans:1},
{q:'Suggesting mode in Docs?',opts:['Auto-grammar','Tracked suggestions others accept/reject','Suggests related docs','Plain text only'],ans:1},
{q:'What does VLOOKUP do?',opts:['Validates cells','Looks up value in first column, returns from another','Visual chart','Links sheets'],ans:1},
{q:'Create pivot table?',opts:['Data → Sort','Insert → Chart → Pivot','Select data → Insert → Pivot table','Tools → Pivot'],ans:2},
{q:'Add Slides animations?',opts:['Right-click → Animate','Click element → Motion → Add animation','Insert → Animation','Format → Animate'],ans:1},
{q:'Appointment Schedule?',opts:['Meeting list','Others book your available time','Recurring template','Past appointments'],ans:1},
{q:'Meet breakout rooms?',opts:['Settings → Rooms','Activities → Breakout rooms → set count','Separate Meet links','Not available'],ans:1},
{q:'Gemini in Sheets?',opts:['Only formats','Generates formulas from natural language','Auto-creates charts','Emails summaries'],ans:1},
{q:'Speaker notes in Slides?',opts:['Visible to audience','Visible only to presenter','Auto-captions','Collaborator comments'],ans:1},
{q:'Enable Gmail Templates?',opts:['Default enabled','⚙️ → Advanced → enable Templates','Install add-on','Compose → Enable'],ans:1},
{q:'Color-code Calendar event?',opts:['Changes time','Overrides default color for that event','Sends notification','Moves to calendar'],ans:1},
{q:'Pageless mode in Docs?',opts:['Removes formatting','No page breaks — continuous wide document','Read-only','Exports text'],ans:1},
{q:'Insert Sheets chart into Slides?',opts:['Copy-paste only','Insert → Chart → From Sheets → updates when source changes','Export image','Cannot link'],ans:1},
{q:'Drive shortcut does what?',opts:['Duplicates file','Creates link without duplication','Moves permanently','Shares with all'],ans:1},
{q:'Assign Docs comment?',opts:['Assign button','In comment type +email to assign','Forward doc','Cannot assign'],ans:1},
{q:'COUNTIF does what?',opts:['Counts all cells','Counts cells matching a condition','Creates IF that counts','Counts characters'],ans:1},
{q:'Calendar: create new calendar?',opts:['Settings → Import','Sidebar + → Create new calendar','File → New','Admin only'],ans:1},
{q:'TOC in Docs based on?',opts:['Manual pages','Heading styles — auto-generates','Bookmarks','First sentences'],ans:1},
{q:'Q&A in Meet?',opts:['Host-only questions','Attendees submit, others upvote','Auto-quiz','Records for later'],ans:1},
{q:'"Also apply to matching conversations"?',opts:['Future only','Retroactively applies to existing emails','Deletes matches','Sends to spam'],ans:1},
{q:'Conditional formatting in Sheets?',opts:['Print format','Auto colors/styles based on cell values','Formula conditionals','Header format'],ans:1}
]},
advanced:{title:'Advanced Mastery',sub:'Advanced · 20 Questions · Pass = 70%',hd:'q-advanced',track:'Advanced Mastery — Google Workspace',qs:20,questions:[
{q:'Gmail delegate can?',opts:['Change password','Read/send/delete — NOT change password/settings','Only read','Access Drive too'],ans:1},
{q:'Multi-send merge tags do?',opts:['Social tag','Insert personalized data per recipient','Add to group','Profile link'],ans:1},
{q:'{invoice receipt payment} in filter?',opts:['All three together','Matches ANY (OR logic)','Excludes them','Three filters'],ans:1},
{q:'Prevent viewers downloading?',opts:['Encrypts','Browser-only — no download/print/copy','Hides from search','Deletes in 30 days'],ans:1},
{q:'Naming a version does?',opts:['Cosmetic','Permanent checkpoint that never auto-deletes','Locks doc','Notifies all'],ans:1},
{q:'Drive Desktop "Stream" mode?',opts:['Full download','Cloud files downloaded on demand — saves space','ZIP archive','VPN-only'],ans:1},
{q:'ARRAYFORMULA does?',opts:['Array of charts','Applies formula to entire column without dragging','Sorts array','API import'],ans:1},
{q:'IMPORTRANGE does?',opts:['Different tab same sheet','Pulls live data from another spreadsheet via URL','Downloads from web','Imports CSV'],ans:1},
{q:'Access Apps Script from Sheets?',opts:['File → Download','Extensions → Apps Script','Insert → Script','Share → Script'],ans:1},
{q:'Protected ranges?',opts:['Prevent deletion','Lock cells so only designated people edit','Hide data','Encrypt values'],ans:1},
{q:'Editing master slides?',opts:['Changes current only','Changes all slides using that layout','Creates backup','Locks theme'],ans:1},
{q:'Record Meet call?',opts:['Camera icon','Activities → Recording → Start — all notified','Ctrl+R','Auto-records'],ans:1},
{q:'Meet recordings saved where?',opts:['Downloads','Organizer Drive in Meet Recordings folder','Google Photos','Emailed to all'],ans:1},
{q:'Annotate in Meet?',opts:['Captions','Draw/highlight on shared screen live','Chat comments','Post-transcript'],ans:1},
{q:'Prompt engineering for Gemini?',opts:['Build custom AI','Specific structured instructions for better outputs','Manage permissions','Connect APIs'],ans:1},
{q:'Activity panel on Drive file shows?',opts:['Storage size','Who viewed/edited/shared and when','Virus scan','Link analytics'],ans:1},
{q:'Publish to web in Slides?',opts:['Editable by all','Self-advancing slideshow link — great for displays','Sends to Sites','Converts to PDF'],ans:1},
{q:'Apps Script automates Gmail?',opts:['Custom themes','Auto-label/forward/send based on triggers','Access others','Set up MFA'],ans:1},
{q:'Working Hours in Calendar?',opts:['Blocks calendar','Warning when scheduled outside your hours','Auto-declines','Sends to manager'],ans:1},
{q:'Best practice for Gemini output?',opts:['Accept first output','Always review — verify facts, refine, add insight','Only for formatting','Skip for pro docs'],ans:1}
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

/* SEARCH BAR — v3.1 */
var _searchPrevCollapsed=[];
function deckSearch(query){
  clearHighlights();
  var countEl=document.getElementById('search-count');
  if(!query||query.length<2){countEl.textContent='';
    _searchPrevCollapsed.forEach(function(hd){hd.classList.add('collapsed');hd.nextElementSibling.classList.add('collapsed');});
    _searchPrevCollapsed=[];return;}
  var root=document.getElementById('main-content');
  if(!root)return;
  _searchPrevCollapsed=[];
  root.querySelectorAll('.slide-header.collapsed').forEach(function(hd){_searchPrevCollapsed.push(hd);});
  root.querySelectorAll('.slide-header.collapsed').forEach(function(hd){hd.classList.remove('collapsed');hd.nextElementSibling.classList.remove('collapsed');});
  var count=0,firstMatchEl=null;
  root.querySelectorAll('.slide-body,.slide-header').forEach(function(el){
    var c=highlightTextNodes(el,query);
    if(c>0&&!firstMatchEl)firstMatchEl=el.querySelector('mark.search-match');
    count+=c;
  });
  if(count===0){countEl.textContent='No matches';countEl.style.color='#fca5a5';}
  else{countEl.textContent=count+(count===1?' match':' matches');countEl.style.color='#fcd9b6';}
  if(firstMatchEl)firstMatchEl.scrollIntoView({behavior:'smooth',block:'center'});
}
function highlightTextNodes(root,query){
  var count=0,regex=new RegExp('('+escapeRegex(query)+')','gi');
  var walker=document.createTreeWalker(root,NodeFilter.SHOW_TEXT,null,false);
  var nodes=[],node;
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
  document.querySelectorAll('mark.search-match').forEach(function(m){m.parentNode.replaceChild(document.createTextNode(m.textContent),m);});
}
function clearDeckSearch(){var inp=document.getElementById('deck-search');inp.value='';deckSearch('');}
function escapeRegex(str){return str.replace(/[.*+?^${}()|[\]\\]/g,'\\$1');}
document.addEventListener('keydown',function(e){
  var inp=document.getElementById('deck-search');
  if(e.key==='/'&&document.activeElement.tagName!=='INPUT'&&document.activeElement.tagName!=='TEXTAREA'){e.preventDefault();inp.focus();inp.select();}
  if(e.key==='Escape'&&document.activeElement===inp){clearDeckSearch();inp.blur();}
});
</script>
<?php bh_back_to_index_button('training-hub-index', 'All Trainings'); ?>
</body>
</html>
