<?php /* Template Name: Meta Business Manager Training */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>InvenTel — Meta Business Manager Training (Self-Contained) v3.1</title>
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
      <div class="header-h1">📘 Meta Business Manager — Self-Contained Training Guide</div>
      <div class="header-subtitle">Complete step-by-step training for Meta Business Suite &amp; Business Manager — Pages, Inbox, Planner, Insights, Ads Manager, Pixel &amp; CAPI, Advantage+ AI, Audiences, and team permissions — click any section header to collapse/expand</div>
    </div>
    <div class="header-meta">All Levels (Beginner → Advanced)<br>Platform: Meta (Facebook + Instagram + WhatsApp)<br>Format: Self-Contained / Standalone<br><span style="color:#fcd9b6;font-weight:700">v3.1 — Search Bar Edition</span></div>
  </div>
</div>
<div class="stat-row">
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Platforms Managed</span></div>
  <div class="stat-item"><span class="stat-val">16+</span><span class="stat-lbl">Training Sections</span></div>
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Skill Levels</span></div>
  <div class="stat-item"><span class="stat-val">30 Days</span><span class="stat-lbl">Mandatory Window</span></div>
  <div class="stat-item"><span class="stat-val">Advantage+</span><span class="stat-lbl">Built-in AI Optimization</span></div>
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
      <div class="toc-item" onclick="goTo('sec-overview')">1. Platform Overview<span>What Meta Business Manager &amp; Business Suite are</span></div>
      <div class="toc-item" onclick="goTo('sec-hub')">2. Official Learning Hub<span>Meta Business Help Center + Blueprint</span></div>
      <div class="toc-item" onclick="goTo('sec-begres')">3. Beginner Training Resources<span>Mandatory — external resources</span></div>
      <div class="toc-item" onclick="goTo('sec-start')">4. Getting Started — First Day Setup<span>Multi-Business access verification</span></div>
      <div class="toc-item" onclick="goTo('sec-pages')">5. Pages, Inbox &amp; Engagement<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-planner')">6. Content Planner &amp; Publishing<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-insights')">7. Insights &amp; Analytics<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-ads')">8. Ads Manager, Pixel &amp; Audiences<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-ai')">9. Advantage+ AI &amp; Automation<span>AI-powered campaigns + creative</span></div>
      <div class="toc-item" onclick="goTo('sec-intres')">10. Intermediate Resources<span>Self-paced, optional links</span></div>
      <div class="toc-item" onclick="goTo('sec-advres')">11. Advanced Resources<span>Optional deep mastery links</span></div>
      <div class="toc-item" onclick="goTo('sec-certs')">12. Certifications<span>Meta Blueprint paths</span></div>
      <div class="toc-item" onclick="goTo('cl-mandatory')">13. New Hire Checklist<span>Interactive — mandatory</span></div>
      <div class="toc-item" onclick="goTo('cl-intermediate')">14. Intermediate Checklist<span>Interactive — self-paced</span></div>
      <div class="toc-item" onclick="goTo('cl-advanced')">15. Advanced Checklist<span>Interactive — mastery</span></div>
      <div class="toc-item" onclick="goTo('sec-qr')">16. Quick Reference + Final Note<span>Platform URLs + help centers</span></div>
    </div>
  </div>
</div>

<!-- 1. PLATFORM OVERVIEW -->
<div class="slide" id="sec-overview"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Section 1</span></div><h2>📘 What is Meta Business Manager?</h2><p class="subtitle">Your central command center for everything Facebook, Instagram, and WhatsApp at InvenTel.</p></div>
  <div class="slide-body">
    <p><strong>Meta Business Manager</strong> (officially called <strong>Meta Business Portfolio</strong>, but most people still say "Business Manager") is the backend hub where you organize and control every Facebook Page, Instagram account, ad account, Pixel, catalog, domain, and team member tied to InvenTel's brands. It is the "behind-the-scenes" system of record. <strong>Meta Business Suite</strong> is the day-to-day front door — the dashboard you open every morning to post, reply to messages, schedule content, view insights, and run small ad boosts. Both live at the same URL and are tightly integrated.</p>

    <div class="callout"><strong>💡 Easy way to remember it:</strong> <strong>Business Suite</strong> = the storefront (publish, reply, view results). <strong>Business Manager</strong> = the back office (assets, permissions, billing, partners, security). For most daily work you live in Business Suite. For permissions, billing, ad accounts, Pixel, domain verification, and partner access, you click into Business Settings (the Business Manager view).</div>

    <h3 style="font-size:14px;font-weight:700;margin-top:14px;margin-bottom:8px;color:#8B0000">Core Things You'll Do Here</h3>
    <ul style="font-size:13px;padding-left:20px;line-height:1.8">
      <li><strong>Manage Pages &amp; Profiles:</strong> All InvenTel Facebook Pages and Instagram business accounts in one place.</li>
      <li><strong>Unified Inbox:</strong> Reply to comments, DMs, and Messenger conversations across Facebook and Instagram from one view.</li>
      <li><strong>Plan &amp; Schedule:</strong> Drag-and-drop calendar for posts, Reels, and Stories on Facebook + Instagram simultaneously.</li>
      <li><strong>Run Ads:</strong> Open Ads Manager for campaign creation, targeting, and budget control across the Meta family.</li>
      <li><strong>Track Performance:</strong> Insights dashboards for organic reach, engagement, audience demographics, and ad results.</li>
      <li><strong>Pixel &amp; Conversions API:</strong> Track website actions, build custom audiences, and optimize ad delivery.</li>
      <li><strong>Team Permissions:</strong> Add/remove users, partners, and agencies with granular access at the asset level.</li>
    </ul>

    <h3 style="font-size:14px;font-weight:700;margin-top:14px;margin-bottom:8px;color:#8B0000">The Meta Family of Apps You'll Touch</h3>
    <div class="apps-grid">
      <span class="app-chip">📘 Facebook Pages</span>
      <span class="app-chip">📷 Instagram Business</span>
      <span class="app-chip">💬 Messenger</span>
      <span class="app-chip">🟢 WhatsApp Business</span>
      <span class="app-chip">📊 Ads Manager</span>
      <span class="app-chip">🎯 Events Manager (Pixel)</span>
      <span class="app-chip">🛒 Commerce Manager</span>
      <span class="app-chip">👥 Audience Center</span>
    </div>

    <div class="platform-url"><strong>🔐 Where you sign in:</strong> <a href="https://business.facebook.com" target="_blank">business.facebook.com</a><br><strong>⚙️ Business Settings (Manager view):</strong> <a href="https://business.facebook.com/settings" target="_blank">business.facebook.com/settings</a><br><strong>🆘 Help Center:</strong> <a href="https://www.facebook.com/business/help" target="_blank">facebook.com/business/help</a></div>

    <div class="callout"><strong>InvenTel multi-brand context:</strong> InvenTel manages several brand Pages and Instagram accounts under one umbrella Meta Business Portfolio. You will be granted access to specific Pages and ad accounts based on your role. Your first job is to confirm with your direct report exactly which assets you should see — and verify they all appear in your account switcher before doing anything else.</div>
  </div>
</div>

<!-- 2. OFFICIAL LEARNING HUB -->
<div class="slide" id="sec-hub"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-academy">Official Hub</span></div><h2>🎓 Official Learning Hub — Meta Business Help Center &amp; Blueprint</h2><p class="subtitle">Meta's official learning resources for Business Suite, Manager, Ads, and Marketing.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Meta Business Help Center <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">The official knowledge base for everything Business Suite, Business Manager, Ads Manager, Pixel, Pages, billing, and policy. Searchable, regularly updated, and organized by topic.</div><div class="card-meta"><strong>Source:</strong> Meta &nbsp;|&nbsp; <strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t1">Beginner</span><span class="tag t2">Intermediate</span><span class="tag t3">Advanced</span><span class="tag t4">Reference</span></div><a href="https://www.facebook.com/business/help" target="_blank">→ Open Meta Business Help Center</a></div>

    <div class="card"><div class="card-title">Meta Blueprint — Free Online Training <span class="badge badge-mandatory">Mandatory Beginner Track</span></div><div class="card-desc">Meta's official free training program covering Facebook, Instagram, Messenger, and WhatsApp advertising. 100+ self-paced courses across all skill levels. Browsing and completing courses is free; only the proctored certification exams cost money.</div><div class="card-meta"><strong>Source:</strong> Meta &nbsp;|&nbsp; <strong>Format:</strong> Self-Paced Courses &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t1">Courses</span><span class="tag t2">Video</span><span class="tag t4">Skill Tracks</span></div><a href="https://www.facebookblueprint.com/" target="_blank">→ Open Meta Blueprint</a></div>

    <div class="card"><div class="card-title">Meta for Business — Resources Hub <span class="badge badge-beginner">Beginner</span></div><div class="card-desc">Marketing playbooks, campaign best practices, industry guides, creative inspiration, and case studies — useful when planning campaigns or learning what good looks like.</div><div class="card-meta"><strong>Source:</strong> Meta &nbsp;|&nbsp; <strong>Format:</strong> Articles + Videos &nbsp;|&nbsp; <strong>Level:</strong> Beginner → Intermediate</div><div class="tag-row"><span class="tag t1">Inspiration</span><span class="tag t4">Playbooks</span></div><a href="https://www.facebook.com/business/learn" target="_blank">→ Browse Meta for Business Resources</a></div>

    <div class="card"><div class="card-title">Meta for Creators <span class="badge badge-beginner">Beginner</span></div><div class="card-desc">If you handle organic content, Reels, or community engagement, this is the official creator-focused hub with growth tactics, content best practices, and monetization basics.</div><div class="card-meta"><strong>Source:</strong> Meta &nbsp;|&nbsp; <strong>Format:</strong> Articles + Videos &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Organic</span><span class="tag t4">Reels</span></div><a href="https://creators.facebook.com" target="_blank">→ Open Meta for Creators</a></div>
  </div>
</div>

<!-- 3. BEGINNER RESOURCES -->
<div class="slide" id="sec-begres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">Mandatory</span></div><h2>🟢 Beginner Training — Mandatory External Resources</h2><p class="subtitle">Complete these alongside the inline tutorials in this deck.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Help Center — Get Started with Meta Business Suite <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official walkthrough of the Business Suite home page, navigation, posting, inbox, planner, and insights tabs. Read this in your first week.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Setup</span><span class="tag t4">Onboarding</span></div><a href="https://www.facebook.com/business/help/205614130852248" target="_blank">→ Read "Get started with Meta Business Suite"</a></div>

    <div class="card"><div class="card-title">Help Center — Create a Meta Business Portfolio <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">How Business Portfolios (formerly Business Manager) work, why they exist, and how Pages/ad accounts/Pixels live inside them.</div><div class="card-meta"><strong>Format:</strong> Article &nbsp;|&nbsp; <strong>Est. Time:</strong> ~20 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Portfolio</span><span class="tag t4">Concepts</span></div><a href="https://www.facebook.com/business/help/1710077379203657" target="_blank">→ Read "Create a Meta Business Portfolio"</a></div>

    <div class="card"><div class="card-title">Blueprint — Introduction to Meta <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Free Blueprint course covering the Meta family of apps, ad ecosystem fundamentals, and how Business Suite/Manager tools fit together. The foundation for everything else.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Foundations</span><span class="tag t4">Course</span></div><a href="https://www.facebookblueprint.com/student/catalog" target="_blank">→ Find "Introduction to Meta" in the Blueprint catalog</a></div>

    <div class="card"><div class="card-title">YouTube: Meta Business Suite Beginner Tutorial <span class="badge badge-beginner">Beginner</span></div><div class="card-desc">Walkthrough videos covering Business Suite basics — posting, scheduling, inbox, insights, and switching between accounts.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=meta+business+suite+tutorial+for+beginners+2025" target="_blank">→ Search YouTube: "Meta Business Suite tutorial for beginners 2025"</a></div>
  </div>
</div>

<!-- 4. GETTING STARTED -->
<div class="slide" id="sec-start"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-mandatory">Mandatory</span></div><h2>🟢 Getting Started — First Day Setup</h2><p class="subtitle">Complete inline step-by-step. No external links required.</p></div>
  <div class="slide-body">
    <div class="callout"><strong>InvenTel Note:</strong> Because we manage multiple brand Pages and ad accounts under one Meta Business Portfolio, your first task is verifying access. Don't assume anything — confirm with your direct report.</div>

    <div class="steps-box"><h4>🔐 Sign In and Verify Your Access List</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Get the list of Pages, Instagram accounts, and ad accounts you should have access to from your direct report. Note your role on each (Admin, Editor, Advertiser, etc.).</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Open <a href="https://business.facebook.com" target="_blank">business.facebook.com</a> in Chrome (preferred). Sign in with your <strong>InvenTel work email</strong> attached to your personal Facebook profile.</div></div>
      <div class="step-warning"><strong>⚠️</strong> Meta logs you in via your personal Facebook account, but you only ever act on InvenTel's business assets through Business Suite/Manager. Your personal profile is never publicly tied to InvenTel actions. Never use a personal email for InvenTel work.</div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">If 2FA prompts, complete it. If you do not yet have 2FA on your personal Facebook account, set it up under <span class="step-nav">Account → Settings &amp; Privacy → Settings → Accounts Center → Password and Security</span>.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">Top-left of Business Suite: click the <strong>portfolio switcher</strong>. Confirm you can see InvenTel's Business Portfolio.</div></div>
      <div class="step"><div class="step-num green">5</div><div class="step-text">If a portfolio or asset is missing → contact your direct report or HR Training Coordinator immediately. Do not proceed.</div></div>
    </div>

    <div class="steps-box"><h4>🧭 Tour the Business Suite Home Layout</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Left sidebar:</strong> Home, Notifications, Inbox, Content, Planner, Insights, Ads, Audience, Apps, Commerce, All Tools.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Top-left:</strong> Account/asset switcher — toggles between connected Pages and Instagram accounts you have access to. <strong>Verify wisely:</strong> always check which account is selected before posting.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Top-right:</strong> Notifications bell, Help (?), and your profile menu. Profile menu → <strong>Business Settings</strong> takes you into the Manager view (assets, people, partners, billing, security).</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text"><strong>All Tools menu (bottom-left):</strong> Direct shortcuts to Ads Manager, Events Manager (Pixel/CAPI), Commerce Manager, Audience, Pages, Catalog, Reporting, and Brand Safety.</div></div>
      <div class="step-tip"><strong>💡</strong> Bookmark <a href="https://business.facebook.com/settings" target="_blank">business.facebook.com/settings</a> separately. That direct URL drops you straight into Business Manager (Settings) — most useful for permissions, billing, partners, Pixel, and domain verification.</div>
    </div>

    <div class="steps-box"><h4>👤 Set Up Your Profile and Security</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Top-right profile icon → <strong>Settings &amp; Privacy</strong>. Confirm your name, email, and notification preferences.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text"><span class="step-nav">Business Settings → Security Center</span>: enable <strong>two-factor authentication</strong> on your account if not already on. For most InvenTel ad-handling roles 2FA is required, not optional.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text"><span class="step-nav">Business Settings → Notifications</span>: turn on email alerts for ad account billing issues, Page mentions, and asset access changes — these are how you find out about problems before customers do.</div></div>
    </div>

    <div class="steps-box"><h4>📱 Mobile Access</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Download <strong>Meta Business Suite</strong> from the <a href="https://apps.apple.com/us/app/meta-business-suite/id514643583" target="_blank">App Store</a> or <a href="https://play.google.com/store/apps/details?id=com.facebook.pages.app" target="_blank">Google Play</a>. Sign in with the same Facebook account.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Download the <strong>Meta Ads Manager</strong> app for on-the-go campaign monitoring (iOS / Android).</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">In the app, switch between InvenTel brand Pages using the icon in the top-left.</div></div>
    </div>
  </div>
</div>

<!-- 5. PAGES, INBOX & ENGAGEMENT -->
<div class="slide" id="sec-pages"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>💬 Core Feature Deep Dive — Pages, Inbox &amp; Engagement</h2><p class="subtitle">Complete step-by-step instructions at every level.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Inbox &amp; Page Basics</h3>
        <div class="sub-card"><strong>Open the Unified Inbox</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Inbox</strong>. Messages and comments from <strong>Facebook, Messenger, and Instagram</strong> all flow into this single view.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Use the channel filter at the top to show only Facebook or only Instagram if it gets noisy.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Click any conversation → reply directly. The platform icon (📘 Facebook, 📷 Instagram, 💬 Messenger) shows which channel you are replying through.</div></div>
        </div>
        <div class="sub-card"><strong>Reply to a Comment on a Post</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Inbox</strong> → switch to the <strong>Comments</strong> tab.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Click the comment → type your reply → <strong>Send</strong>. To hide an inappropriate comment from a customer's view (without deleting it publicly), click ⋯ → <strong>Hide comment</strong>.</div></div>
          <div class="step-tip"><strong>💡</strong> Hide vs. Delete: <strong>Hide</strong> keeps the comment visible to the original commenter and their friends only — they don't know it was hidden. <strong>Delete</strong> removes it entirely. Use Hide for soft moderation, Delete for spam/abuse.</div>
        </div>
        <div class="sub-card"><strong>Find a Page or Switch Pages</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Top-left account switcher → choose the brand Page you want to work in. Always confirm the right Page is selected before posting or replying.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Sidebar → <strong>All Tools → Pages</strong> to see every Page you have access to in InvenTel's portfolio.</div></div>
        </div>
        <div class="sub-card"><strong>Mark Conversations Done / Follow Up</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open a conversation → click <strong>Mark as done</strong> (✓) once handled. The thread moves out of the active inbox view.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Use <strong>Follow up</strong> 🚩 to flag a conversation that needs to come back later — it appears in the Follow up filter.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Inbox Power Use</h3>
        <div class="sub-card"><strong>Saved Replies (Templates)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Inbox → click the lightning ⚡ <strong>Saved Replies</strong> icon in the message composer.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><strong>Create new</strong> → give it a shortcut name (e.g., "shipping_eta") and the message body. Insert with one click on any future conversation.</div></div>
          <div class="step-tip"><strong>💡</strong> Build saved replies for the 5–10 questions you answer most: shipping, returns, warranty, hours, sizing. Cuts your inbox time dramatically.</div>
        </div>
        <div class="sub-card"><strong>Labels &amp; Filters</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Open a conversation → click the <strong>Label</strong> icon → create or apply a label (e.g., "VIP", "Complaint", "Sales lead").</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Use the <strong>filter dropdown</strong> at the top of the inbox to view only labeled conversations or only specific channels.</div></div>
        </div>
        <div class="sub-card"><strong>Automated Responses (Auto-Replies)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Inbox → Automated Responses</span> (top-right gear, or sidebar toggle).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Choose a type — <strong>Instant Reply</strong> (sent on first contact), <strong>Away Message</strong> (after-hours), <strong>FAQ replies</strong> (keyword-triggered).</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">Customize the message, set the schedule (Always / During hours / Only when away), and turn it ON.</div></div>
        </div>
        <div class="sub-card"><strong>Assign &amp; Add Internal Notes</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Open a conversation → click <strong>Assignee</strong> → pick a teammate. They get notified.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Click <strong>Notes</strong> in the right panel → leave context for the next person handling this customer. Notes are internal-only.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Engagement at Scale</h3>
        <div class="sub-card"><strong>Page Roles vs. Business Manager Permissions</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">There are two layers. <strong>Business Portfolio role</strong> = Admin or Employee on the parent Business. <strong>Asset role</strong> = task-based access on the Page/ad account itself (Standard or Admin).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">For Pages owned by Business Portfolio: assign tasks like "Create content," "Messages and Community Activity," "Manage Page," "Insights," "Ads," and "Full control" via <span class="step-nav">Business Settings → Pages → [Page] → Add People</span>.</div></div>
          <div class="step-warning"><strong>⚠️</strong> <strong>Full control</strong> on a Page means the user can add/remove others and even delete the Page. Reserve it for senior owners. Use task-specific access for everyone else.</div>
        </div>
        <div class="sub-card"><strong>Moderation Tools (Profanity Filter, Block Words)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Switch into the Page → <span class="step-nav">Page Settings → Privacy → Public Posts → Moderation Tools</span>.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Add words/phrases you want to <strong>auto-hide</strong> from comments (competitor names, slurs, your old company name, etc.). Set the <strong>Profanity Filter</strong> to <code>Strong</code> or <code>Medium</code>.</div></div>
        </div>
        <div class="sub-card"><strong>WhatsApp Business in the Inbox</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">If your brand has WhatsApp Business connected, conversations appear in the unified Inbox under the WhatsApp filter.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">For WhatsApp connection setup: <span class="step-nav">Business Settings → WhatsApp Accounts → Add</span>. Templates and 24-hour-window rules apply for outbound messaging.</div></div>
        </div>
        <div class="sub-card"><strong>Branded Content &amp; Creator Collabs</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For paid creator partnerships: <span class="step-nav">Business Settings → Brand Safety → Branded Content</span> → approve the creator account.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">The creator tags your Page in their post → it gains "Paid Partnership with [Brand]" disclosure. You can boost it as an ad from your ad account.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 6. CONTENT PLANNER & PUBLISHING -->
<div class="slide" id="sec-planner"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📅 Core Feature Deep Dive — Planner &amp; Publishing</h2><p class="subtitle">Plan, publish, and schedule across Facebook + Instagram from one place.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Posting Basics</h3>
        <div class="sub-card"><strong>Create &amp; Publish a Post</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Content</strong> → blue <strong>Create post</strong> button.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Choose where to publish: toggle <strong>Facebook</strong>, <strong>Instagram</strong>, or both. Add your text, photos/videos, and a CTA if applicable.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Use the right-side <strong>Preview</strong> panel — toggle between Facebook Feed, Instagram Feed, and Mobile previews. Confirm it looks right on each surface.</div></div>
          <div class="step"><div class="step-num green">4</div><div class="step-text">Click <strong>Publish</strong> (live now) or the dropdown arrow → <strong>Schedule post</strong> → pick date/time → <strong>Schedule</strong>.</div></div>
          <div class="step-tip"><strong>💡</strong> Customize per platform before posting: click <strong>Customize for each platform</strong> to write a different caption for Facebook vs Instagram. Same image, channel-appropriate copy.</div>
        </div>
        <div class="sub-card"><strong>Create a Story</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Content → <strong>Create story</strong>. Add an image or short video, then text/stickers.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Pick Facebook, Instagram, or both → publish or schedule.</div></div>
        </div>
        <div class="sub-card"><strong>Create a Reel</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Content → <strong>Create Reel</strong>. Upload a vertical 9:16 video (under 90 seconds).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Add a caption with hashtags, choose Facebook and/or Instagram, then publish or schedule.</div></div>
        </div>
        <div class="sub-card"><strong>Edit or Delete a Published Post</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Content → <strong>Posts</strong> tab → click the post → ⋯ → <strong>Edit post</strong> (text only) or <strong>Delete post</strong> (permanent).</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Planner &amp; Scheduling</h3>
        <div class="sub-card"><strong>Open the Planner Calendar</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Sidebar → <strong>Planner</strong>. The drag-and-drop calendar shows scheduled, published, and draft content across both Facebook and Instagram.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Toggle between <strong>Week</strong> and <strong>Month</strong> views. Use channel filters at the top to focus.</div></div>
        </div>
        <div class="sub-card"><strong>Reschedule by Drag-and-Drop</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Grab any scheduled post tile and drag it to a new day/time slot. Confirm in the popup.</div></div>
          <div class="step-tip"><strong>💡</strong> Use the recommended posting times Meta surfaces in Insights to anchor your schedule. They are based on when your specific audience is online.</div>
        </div>
        <div class="sub-card"><strong>Save Drafts</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">When creating a post, click the dropdown next to Publish → <strong>Save as draft</strong>. Drafts live in Content → <strong>Drafts</strong>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">A teammate with content access can open the draft, edit, and publish or schedule it.</div></div>
        </div>
        <div class="sub-card"><strong>Boost a Post (Quick Ad)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Open any published post → <strong>Boost post</strong>. Pick a goal (Engagement, Messages, Website visits), audience (saved or new), budget, and duration.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Confirm payment method → <strong>Boost</strong>. The post becomes a paid ad and starts running.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Boosted posts are simplified ads — fewer controls, less optimization. For real campaigns (Sales, Leads, Conversions) use full <strong>Ads Manager</strong> instead.</div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Scaling Content Ops</h3>
        <div class="sub-card"><strong>Bulk Upload &amp; CSV Scheduling</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Planner → <strong>Bulk import</strong> (top-right). Download the template CSV, fill in captions, dates, media URLs, and platforms per row.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Upload back. Preview every row before publishing — Meta validates each entry and flags errors before scheduling.</div></div>
        </div>
        <div class="sub-card"><strong>Cross-Posting Videos to Multiple Pages</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For brands with multiple Pages: <span class="step-nav">Page Settings → Cross-posting</span> → add the partner Page.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">When you upload a video, toggle <strong>Allow cross-posting</strong>. Other Pages can post the same video — view counts and engagement aggregate.</div></div>
        </div>
        <div class="sub-card"><strong>A/B Test Creative</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For paid social: in Ads Manager → Create campaign → toggle <strong>A/B test</strong> at the campaign level. Duplicate an ad and change one variable (creative, audience, placement).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Set a sample size and let it run for 7+ days. Meta declares a winner with statistical confidence and a recommended action.</div></div>
        </div>
        <div class="sub-card"><strong>Media Library</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">All Tools → Media Library</span>. Reuse previously uploaded photos and videos across new posts and ads instead of re-uploading.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Tag and organize media for fast retrieval. Especially useful when running campaigns with shared brand assets across Pages.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 7. INSIGHTS & ANALYTICS -->
<div class="slide" id="sec-insights"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📊 Core Feature Deep Dive — Insights &amp; Analytics</h2><p class="subtitle">Measure organic content, ad performance, and audience behavior.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Reading the Numbers</h3>
        <div class="sub-card"><strong>Open Insights</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>Insights</strong>. Default view = the last 28 days for the selected Page.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Tabs at the top: <strong>Overview, Reach, Visits, Content, Audience, Earnings</strong> (where applicable).</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">Top-right <strong>date picker</strong> changes the window. <strong>Always check the date range first</strong> — most numbers shift dramatically with the window.</div></div>
        </div>
        <div class="sub-card"><strong>Core Metrics — What They Mean</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Reach:</strong> unique people who saw your content. <strong>Impressions:</strong> total times shown (one person can drive many impressions).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Engagement:</strong> reactions, comments, shares, saves. <strong>Visits:</strong> profile/Page visits from a post.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Followers / new followers:</strong> growth over the period. Click into Audience for demographics breakdown.</div></div>
        </div>
        <div class="sub-card"><strong>Find Your Top Posts</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Insights → <strong>Content</strong> tab → sort by Reach, Engagement, or Reactions. Click any post to see its full breakdown.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Use the top-3 posts each week as templates: same format, similar topic, slightly different angle.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Audience &amp; Comparisons</h3>
        <div class="sub-card"><strong>Audience Demographics</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Insights → <strong>Audience</strong>. View <strong>age, gender, top cities, top countries</strong>, and growth trends for both Facebook followers and Instagram followers.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Compare Page audience vs <strong>Reached audience</strong> (people who saw your content). Mismatch = your content is reaching people who don't follow you yet.</div></div>
        </div>
        <div class="sub-card"><strong>Compare Periods</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Insights date picker → toggle <strong>Compare</strong> → pick a previous window. Every metric now shows current vs previous with delta percentages.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Sanity check seasonal effects: a 30% drop in November vs October might just be normal seasonality, not a content failure.</div></div>
        </div>
        <div class="sub-card"><strong>Best Times to Post</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Insights → <strong>Audience</strong> → scroll to <strong>When your followers are online</strong>. Heatmap shows the best hour-blocks per day.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Schedule your top-priority posts in those windows for maximum organic reach.</div></div>
        </div>
        <div class="sub-card"><strong>Export an Insights Report</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Top-right of Insights → <strong>Export</strong> → choose the metrics, date range, and CSV or PDF.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Save to a shared drive folder for the team — repeatable monthly reporting.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Ads Reporting</h3>
        <div class="sub-card"><strong>Ads Manager Reporting Basics</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Sidebar → <strong>All Tools → Ads Manager</strong>. The default view shows campaigns, ad sets, and ads with columns for Reach, Impressions, CPM, CTR, Spend, Results, and Cost per Result.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Click the <strong>Columns</strong> dropdown → choose a preset (Performance, Engagement, Video, Conversions) or build a custom view.</div></div>
        </div>
        <div class="sub-card"><strong>Breakdowns</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Click <strong>Breakdown</strong> → break performance by <strong>Age, Gender, Placement, Country, Device, Time</strong>. Critical for finding where your dollars are working.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Save useful views as <strong>custom reports</strong> via <span class="step-nav">Reports → Create custom report</span>. Schedule the report to email weekly.</div></div>
        </div>
        <div class="sub-card"><strong>Attribution Settings</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Above the data table → click the <strong>Attribution setting</strong>. Default is <strong>7-day click + 1-day view</strong>. Change to test how attribution affects measured ROAS.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Different attribution windows produce different ROAS. Pick one and stick with it for consistent reporting; only change deliberately.</div>
        </div>
        <div class="sub-card"><strong>Compare to GA4 / Triple Whale</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Meta-reported conversions are usually <strong>higher</strong> than what GA4 or Triple Whale show because of platform-attribution differences.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Treat Meta as the optimization signal (let the algo learn) and Triple Whale/GA4 as truth for blended business decisions. Document the gap.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 8. ADS MANAGER, PIXEL & AUDIENCES -->
<div class="slide" id="sec-ads"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🎯 Core Feature Deep Dive — Ads Manager, Pixel &amp; Audiences</h2><p class="subtitle">Build and run paid campaigns across Facebook, Instagram, Messenger, and Audience Network.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Ads Manager Foundations</h3>
        <div class="sub-card"><strong>Open Ads Manager &amp; Pick the Account</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Sidebar → <strong>All Tools → Ads Manager</strong>. Or go directly to <a href="https://www.facebook.com/adsmanager/manage/" target="_blank">facebook.com/adsmanager/manage</a>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Top-left → <strong>ad account switcher</strong>. Always confirm which brand's ad account is active before you create or edit anything.</div></div>
        </div>
        <div class="sub-card"><strong>The 3-Tier Campaign Structure</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Campaign</strong> = your objective (Awareness, Traffic, Engagement, Leads, App Promotion, Sales).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Ad set</strong> = audience, placements, budget, schedule.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Ad</strong> = the creative the user actually sees (image/video, headline, copy, CTA, link).</div></div>
        </div>
        <div class="sub-card"><strong>Create Your First Campaign</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Green <strong>+ Create</strong> button → choose an objective (start with <strong>Sales</strong> or <strong>Leads</strong> for performance, or <strong>Engagement</strong> for community building).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Name the campaign with a clear convention: <code>[Brand]_[Objective]_[Audience]_[Date]</code>. Set a daily budget. Continue.</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text">At the ad set level: pick the conversion event (e.g., Purchase), audience, placements (default = Advantage+ Placements), and start date.</div></div>
          <div class="step"><div class="step-num green">4</div><div class="step-text">At the ad level: choose the Page and Instagram account, upload media, write the primary text and headline, set the CTA, paste the destination URL → <strong>Publish</strong>.</div></div>
        </div>
        <div class="sub-card"><strong>Pause &amp; Resume an Ad</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Toggle the on/off switch next to any campaign, ad set, or ad. <strong>Off</strong> stops delivery immediately; <strong>On</strong> resumes.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Pixel &amp; Audiences</h3>
        <div class="sub-card"><strong>Verify the Meta Pixel is Firing</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">All Tools → Events Manager</span> → pick the data source (Pixel/Dataset).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text"><strong>Overview</strong> tab → confirm events (PageView, ViewContent, AddToCart, InitiateCheckout, Purchase) are firing in the last 24 hours.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Use the <strong>Test events</strong> tab → paste your site URL → trigger actions → confirm events appear in real time.</div></div>
          <div class="step-warning"><strong>⚠️</strong> If Purchase events stop firing, ad delivery and Advantage+ optimization break almost immediately. Check Pixel health every Monday morning.</div>
        </div>
        <div class="sub-card"><strong>Conversions API (CAPI)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">CAPI sends events <strong>server-side</strong> from your store/CRM directly to Meta — bypassing browser-side blockers and iOS privacy limits. Pixel + CAPI together is now the standard.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">For Shopify: install the official <strong>Facebook &amp; Instagram</strong> sales channel app. CAPI is configured in the channel settings.</div></div>
          <div class="step"><div class="step-num amber">3</div><div class="step-text">In Events Manager → confirm events are received via <strong>Both browser and server</strong> for the highest deduplication and match quality.</div></div>
        </div>
        <div class="sub-card"><strong>Custom Audiences</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">All Tools → Audiences → Create audience → Custom audience</span>. Pick a source: Customer list, Website, App activity, Catalog, Engagement (Page, Instagram, video views, lead form opens).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Common starters: <strong>Past 180-day purchasers</strong> (for exclusion), <strong>Past 30-day site visitors</strong> (for retargeting), <strong>Cart abandoners</strong> (90-day window), <strong>Page engagers</strong>.</div></div>
        </div>
        <div class="sub-card"><strong>Lookalike Audiences</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Audiences → Create → <strong>Lookalike audience</strong>. Pick a strong source (top customers, top spenders, frequent purchasers — at least 100 people, ideally 1,000+).</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Pick country and similarity (1% = closest match, smallest pool; 10% = broader). Start with 1–3% for prospecting.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Pro Campaign Tactics</h3>
        <div class="sub-card"><strong>Budget Strategies — CBO vs ABO</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>CBO (Campaign Budget Optimization)</strong> = budget set at campaign level; Meta distributes across ad sets dynamically. Now called <strong>Advantage+ Campaign Budget</strong>.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text"><strong>ABO (Ad Set Budget Optimization)</strong> = budget per ad set. Use ABO when you need to force spend on specific audiences (e.g., top-of-funnel vs retargeting).</div></div>
        </div>
        <div class="sub-card"><strong>Manual Bidding &amp; Spend Caps</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">At the ad set level → <strong>Bid strategy</strong>. Default = <strong>Highest volume</strong> (no cap). Switch to <strong>Cost per result goal</strong> or <strong>ROAS goal</strong> when you need to enforce efficiency.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Set <strong>Spending limits</strong> at the account level: <span class="step-nav">Business Settings → Ad Accounts → [Account] → Account Spending Limit</span> protects against runaway spend.</div></div>
        </div>
        <div class="sub-card"><strong>Domain Verification &amp; Aggregated Event Measurement</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For iOS 14.5+ measurement: <span class="step-nav">Business Settings → Brand Safety → Domains → Add</span>. Verify via DNS TXT record, meta-tag, or HTML file upload.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text"><span class="step-nav">Events Manager → Aggregated Event Measurement</span> → prioritize up to <strong>8 events per domain</strong>. Purchase always slot 1.</div></div>
        </div>
        <div class="sub-card"><strong>API &amp; System Users</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For programmatic ad management or feeds: <span class="step-nav">Business Settings → Users → System Users → Add</span>. Generate access tokens scoped to specific assets.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Use the <a href="https://developers.facebook.com/docs/marketing-apis/" target="_blank">Marketing API</a> for bulk campaign creation, automated reporting, and programmatic budget shifts. Reserve for engineering-supported workflows only.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 9. ADVANTAGE+ AI & AUTOMATION -->
<div class="slide" id="sec-ai"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🤖 Advantage+ AI &amp; Automation</h2><p class="subtitle">Meta's AI-powered campaign suite — what it is, when to use it, and what to keep human.</p></div>
  <div class="slide-body">
    <div class="callout"><strong>The big shift:</strong> In 2025 Meta moved most ad delivery toward <strong>Advantage+</strong> automation. Targeting, placements, budget allocation, and creative variation are now AI-driven by default. Your job is less "manage knobs" and more "feed it good signals (Pixel + CAPI + creative variety) and steer with strategy."</div>

    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Advantage+ Basics</h3>
        <div class="sub-card"><strong>Advantage+ Sales Campaigns (ASC)</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Ads Manager → <strong>+ Create</strong> → choose <strong>Sales</strong> objective. Advantage+ is now the default sales setup.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Provide budget, conversion location (website / app), creative (multiple images/videos + headlines), and existing-customer audience to control reach split. AI handles audience, placement, and budget across ad sets automatically.</div></div>
          <div class="step-tip"><strong>💡</strong> ASC works best with <strong>healthy Pixel + CAPI signal</strong> and at least 50 weekly conversions. Below that, fall back to manual ad sets so the algorithm has something to learn from.</div>
        </div>
        <div class="sub-card"><strong>Advantage+ Audience</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">At the ad set audience step: enable <strong>Advantage+ Audience</strong>. Add age, location, and interest <strong>suggestions</strong> — Meta uses them as starting hints, not hard rules.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Use <strong>Audience Controls</strong> for hard rules you must not break (minimum age, country exclusions, language).</div></div>
        </div>
        <div class="sub-card"><strong>Advantage+ Placements</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Default at ad set level. Distributes ads automatically across Facebook Feed, Stories, Reels, Marketplace, Instagram Feed/Stories/Reels/Explore, Messenger, Audience Network — wherever each creative performs best.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Creative Automation</h3>
        <div class="sub-card"><strong>Advantage+ Creative Enhancements</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">At the ad level → <strong>Creative enhancements</strong> panel. Toggle features like <strong>Visual touch-ups, Image expansion, Music, Image animation, Text variations</strong>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">AI generates safe variations of your asset to test what resonates. Review the <strong>Preview</strong> for every placement before publishing — auto-edits sometimes look awkward on specific surfaces.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Always preview Advantage+ creative auto-edits per placement. Disable enhancements that distort logos, change product colors, or add clashing music.</div>
        </div>
        <div class="sub-card"><strong>Multiple Text Options &amp; Headlines</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">In the ad creative panel: enter up to <strong>5 primary text variations</strong> and <strong>5 headlines</strong>. Meta dynamically combines and serves the best mix per user.</div></div>
        </div>
        <div class="sub-card"><strong>Opportunity Score</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Top of Ads Manager / inside campaigns → the <strong>Opportunity Score</strong> (0–100) reflects how aligned your setup is with Meta's recommended best practices.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Click the score → see prioritized recommendations (turn on CAPI, expand creative, broaden audience). Treat them as a checklist to review, not gospel — apply what matches your strategy.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Steering the AI</h3>
        <div class="sub-card"><strong>Advantage+ vs Manual Campaigns — Strategy</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Run an <strong>Advantage+ Sales</strong> campaign for broad prospecting + scaling. Run a parallel <strong>manual</strong> campaign for tight retargeting and niche segments where you need control.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Use the <strong>existing-customer audience</strong> setting on ASC to control how much budget goes to current customers vs new customer acquisition (otherwise ASC tends to over-spend on existing customers because they convert easier).</div></div>
        </div>
        <div class="sub-card"><strong>Feeding the AI</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>Signal quality:</strong> Pixel + CAPI healthy, deduplication high (90%+ event match quality in Events Manager).</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text"><strong>Creative variety:</strong> upload at least 3–5 distinct creatives per ad set so the algorithm has options. Avoid uploading 5 near-identical assets — the AI cannot test what is the same.</div></div>
          <div class="step"><div class="step-num red">3</div><div class="step-text"><strong>Conversion volume:</strong> consolidate ad sets so each one gets at least 50 conversions per week. Below that, the algorithm cannot exit learning phase.</div></div>
        </div>
        <div class="sub-card"><strong>Generative AI in Ads Manager (Business AI)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">In the ad creation flow → <strong>Generate with AI</strong> options: rewrite copy, expand image background, generate image variations from a prompt.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Review every output for brand voice and product accuracy. Generative AI hallucinates — it might invent product features or change colors. <strong>Always</strong> human-approve before publishing.</div></div>
          <div class="step-warning"><strong>⚠️</strong> AI-generated copy and images must clear brand &amp; legal review for any regulated category (health, finance, claims). Document the prompt + the final asset for audit.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 10. INTERMEDIATE RESOURCES -->
<div class="slide" id="sec-intres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-intermediate">Intermediate</span></div><h2>🟡 Intermediate Training — Self-Paced Resources</h2><p class="subtitle">Optional but strongly recommended.</p></div>
  <div class="slide-body">
    <div class="card intermediate"><div class="card-title">Help Center — Manage People &amp; Roles in Business Portfolio <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Deep dive on Admin vs Employee, task-based asset access, partner sharing, and how Page roles map onto Business Portfolio task permissions.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Permissions</span><span class="tag t4">Roles</span></div><a href="https://www.facebook.com/business/help/442345745885606" target="_blank">→ Read "About Business Manager roles"</a></div>
    <div class="card intermediate"><div class="card-title">Blueprint — Meta Ads Manager Foundations <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Free course on the campaign / ad set / ad structure, choosing objectives, audience setup, placements, bidding, and reading reports.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~2 hrs &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Ads</span><span class="tag t4">Course</span></div><a href="https://www.facebookblueprint.com/student/catalog" target="_blank">→ Find "Ads Manager" courses in Blueprint</a></div>
    <div class="card intermediate"><div class="card-title">Help Center — Custom Audiences &amp; Lookalikes <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Step-by-step on building Custom Audiences from website, customer list, engagement, and app — plus Lookalike best practices.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Audiences</span><span class="tag t4">Targeting</span></div><a href="https://www.facebook.com/business/help/341425252616329" target="_blank">→ Read "About Custom Audiences"</a></div>
    <div class="card intermediate"><div class="card-title">YouTube: Meta Ads Manager Intermediate Tutorials <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Walkthroughs covering audience setup, creative testing, A/B tests, attribution, and reporting basics.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=meta+ads+manager+tutorial+2025" target="_blank">→ Search YouTube: "Meta Ads Manager tutorial 2025"</a></div>
    <div class="card intermediate"><div class="card-title">Help Center — Meta Pixel &amp; Conversions API Setup <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Complete guide to Pixel installation, event configuration, the Conversions API, and event match quality. Mandatory reading for anyone running Sales campaigns.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Pixel</span><span class="tag t4">CAPI</span></div><a href="https://www.facebook.com/business/help/952192354843755" target="_blank">→ Read "About Meta Pixel"</a></div>
  </div>
</div>

<!-- 11. ADVANCED RESOURCES -->
<div class="slide" id="sec-advres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-advanced">Advanced</span></div><h2>🔴 Advanced Training — Deep Mastery Resources</h2><p class="subtitle">Optional — for technical depth or campaign-leadership roles.</p></div>
  <div class="slide-body">
    <div class="card advanced"><div class="card-title">Blueprint — Advantage+ &amp; AI Marketing <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Deep dive into Advantage+ Sales, Advantage+ Audience, creative enhancements, and the Opportunity Score system.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Est. Time:</strong> ~2 hrs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Advantage+</span><span class="tag t4">AI</span></div><a href="https://www.facebookblueprint.com/student/catalog" target="_blank">→ Find "Advantage+" courses in Blueprint</a></div>
    <div class="card advanced"><div class="card-title">Meta Marketing API Documentation <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Full developer documentation — REST API for ads, audiences, reporting, and bulk campaign management. Used for programmatic ad ops.</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <strong>Level:</strong> Advanced (Developer)</div><div class="tag-row"><span class="tag t3">API</span><span class="tag t4">Developer</span></div><a href="https://developers.facebook.com/docs/marketing-apis/" target="_blank">→ Open Marketing API Docs</a></div>
    <div class="card advanced"><div class="card-title">Help Center — Domain Verification &amp; Aggregated Event Measurement <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">How to verify domains, prioritize 8 conversion events, and stay compliant with iOS privacy frameworks.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">iOS 14+</span><span class="tag t4">Privacy</span></div><a href="https://www.facebook.com/business/help/286768115176607" target="_blank">→ Read "Verify your domain"</a></div>
    <div class="card advanced"><div class="card-title">Help Center — Brand Safety, Allow Lists &amp; Block Lists <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Configure where ads can and can't appear across the Audience Network, control brand-adjacent content, and manage publisher allow/block lists.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Brand Safety</span><span class="tag t4">Compliance</span></div><a href="https://www.facebook.com/business/help/1991935806331021" target="_blank">→ Read "About Brand Safety controls"</a></div>
    <div class="card advanced"><div class="card-title">YouTube: Advanced Meta Ads Strategy &amp; Scaling <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Advanced campaign architecture, creative testing frameworks, attribution analysis, and scaling tactics from established performance marketers.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">YouTube</span><span class="tag t4">Strategy</span></div><a href="https://www.youtube.com/results?search_query=meta+ads+advanced+strategy+scaling+2025" target="_blank">→ Search YouTube: "Meta Ads advanced strategy scaling 2025"</a></div>
  </div>
</div>

<!-- 12. CERTIFICATIONS -->
<div class="slide" id="sec-certs"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Certifications</span></div><h2>🏅 Meta Blueprint Certifications</h2><p class="subtitle">Optional credentials that validate your Meta marketing expertise.</p></div>
  <div class="slide-body">
    <div class="callout" style="background:#f0f0ee;border-left-color:#5c5c5c"><strong style="color:#3a3a3a">💡 Optional Personal Investment:</strong> The certifications listed below are not covered by InvenTel and require an out-of-pocket fee to attempt the proctored exams (typically $99–$150 per exam, valid for ~1–2 years). The free <strong>Blueprint courses, study guides, and practice tests</strong> can be explored at no cost — only the official certification exam itself is paid. These credentials are entirely optional — they are personal career development tools you can pursue on your own time if you'd like to formally validate your Meta marketing skills.</div>
    <table class="cert-table"><thead><tr><th>Certification / Path</th><th>Source</th><th>Skill Level</th><th>Est. Study Time</th></tr></thead><tbody>
      <tr><td><strong>Meta Certified Digital Marketing Associate</strong></td><td>Meta Blueprint</td><td><span class="badge badge-beginner">Beginner</span></td><td>~10–15 hrs</td></tr>
      <tr><td><strong>Meta Certified Media Buying Professional</strong></td><td>Meta Blueprint</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~20–30 hrs</td></tr>
      <tr><td><strong>Meta Certified Media Planning Professional</strong></td><td>Meta Blueprint</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~20–30 hrs</td></tr>
      <tr><td><strong>Meta Certified Creative Strategy Professional</strong></td><td>Meta Blueprint</td><td><span class="badge badge-advanced">Advanced</span></td><td>~25–40 hrs</td></tr>
      <tr><td><strong>Meta Certified Marketing Science Professional</strong></td><td>Meta Blueprint</td><td><span class="badge badge-advanced">Advanced</span></td><td>~30–50 hrs</td></tr>
      <tr><td><strong>Meta Certified Community Manager</strong></td><td>Meta Blueprint</td><td><span class="badge badge-intermediate">Intermediate</span></td><td>~15–25 hrs</td></tr>
      <tr><td><strong>Meta Certified Business Marketing Strategy Professional</strong></td><td>Meta Blueprint</td><td><span class="badge badge-advanced">Advanced</span></td><td>~30–40 hrs</td></tr>
    </tbody></table>
    <p style="font-size:12px;color:#777;margin-top:10px">Browse the full certification catalog at <a href="https://www.facebookblueprint.com/student/page/289993-certifications" target="_blank">facebookblueprint.com/certifications</a>. Free courses, study guides, and practice tests at <a href="https://www.facebookblueprint.com" target="_blank">facebookblueprint.com</a>.</p>
  </div>
</div>

<!-- 13. NEW HIRE CHECKLIST -->
<div class="checklist-section mandatory" id="cl-mandatory"><div class="checklist-head mandatory"><h2>✅ New Hire Onboarding Checklist</h2><div class="ch-sub">Complete all tasks within your first 30 days</div><span class="ch-badge">Mandatory · 30-Day Deadline</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📱 Mobile Apps (OPTIONAL)</div><ul class="checklist-items">
      <li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Install <strong>Meta Business Suite</strong> mobile app (iOS / Android) <span class="ci-est">Optional</span></div><div class="ci-desc">For on-the-go inbox replies and post scheduling. Use the same Facebook account you use for desktop.</div></div></li>
      <li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Install <strong>Meta Ads Manager</strong> mobile app (iOS / Android) <span class="ci-est">Optional</span></div><div class="ci-desc">For monitoring live campaigns and pausing ads while away from desk.</div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">⚠️ Multi-Brand Access Verification (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Request Meta Business Portfolio access list from direct report <span class="ci-est">~5 min</span></div><div class="ci-desc">Get the list of which brand Pages, Instagram accounts, and ad accounts you should access and your role on each.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Sign in at <code>business.facebook.com</code> <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Verify access to all assigned Pages, Instagram accounts, and ad accounts <span class="ci-est">~15 min</span></div><div class="ci-desc">Use the account switcher (top-left). Match every asset against your access list.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Follow up on any missing access <span class="ci-est">~10 min</span></div><div class="ci-desc">If anything doesn't appear, contact your direct report or HR Training Coordinator.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Enable two-factor authentication on your Facebook account <span class="ci-est">~5 min</span></div><div class="ci-desc">Required for any role that handles ad accounts or admin permissions.</div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">🧭 Business Suite Navigation (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Tour the Business Suite layout — sidebar, account switcher, All Tools (Sec 4) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Bookmark <code>business.facebook.com/settings</code> for the Manager view (Sec 4) <span class="ci-est">~2 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">💬📅📊🎯🤖 Feature Training (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Pages, Inbox &amp; Engagement beginner tutorials (Sec 5) <span class="ci-est">~25 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete Planner &amp; Publishing beginner tutorials (Sec 6) <span class="ci-est">~25 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read Insights basics — Reach, Impressions, Engagement (Sec 7) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Open Ads Manager and review the 3-tier campaign structure (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read Advantage+ Basics overview (Sec 9) <span class="ci-est">~15 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📚 External Resources (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read "Get started with Meta Business Suite" Help Center article (Sec 3) <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete "Introduction to Meta" Blueprint course (Sec 3) <span class="ci-est">~45 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Watch a Meta Business Suite YouTube beginner tutorial (Sec 3) <span class="ci-est">~30 min</span></div></div></li>
    </ul></div>
  </div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-mandatory" style="color:#166534">0 of 17 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-mandatory" style="background:#16a34a"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#166534" onclick="resetList('mandatory')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('mandatory')">📝 Take Quiz</button></div></div>
</div>

<!-- 14. INTERMEDIATE CHECKLIST -->
<div class="checklist-section intermediate" id="cl-intermediate"><div class="checklist-head intermediate"><h2>✅ Intermediate Learner Checklist</h2><div class="ch-sub">Self-paced — after mandatory training</div><span class="ch-badge">Self-Paced · Optional</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-intermediate">All Features Intermediate</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Build 5 Saved Replies for the most common inbox questions (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Set up an Away Message and Instant Reply for one Page (Sec 5) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Schedule a week of content using the Planner drag-and-drop calendar (Sec 6) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Boost a published post and review the results after 3 days (Sec 6) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Compare Insights for two periods and export a CSV report (Sec 7) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Verify the Meta Pixel is firing in Events Manager (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Build one Custom Audience and one Lookalike (1–3%) (Sec 8) <span class="ci-est">~25 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Create a Sales campaign with Advantage+ enabled (test budget) (Sec 9) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Review your Opportunity Score and address one recommendation (Sec 9) <span class="ci-est">~15 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-intermediate" style="color:#854d0e">0 of 9 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-intermediate" style="background:#ca8a04"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#854d0e" onclick="resetList('intermediate')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('intermediate')">📝 Take Quiz</button></div></div>
</div>

<!-- 15. ADVANCED CHECKLIST -->
<div class="checklist-section advanced" id="cl-advanced"><div class="checklist-head advanced"><h2>✅ Advanced Learner Checklist</h2><div class="ch-sub">Optional — for technical depth or campaign leadership</div><span class="ch-badge">Optional · Mastery</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-advanced">All Features Advanced</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Configure Page moderation tools and add a block-words list (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Bulk-import a month of content via CSV (Sec 6) <span class="ci-est">~45 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Build a custom Ads Manager report with breakdown by Age + Placement (Sec 7) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Verify Conversions API is working (Pixel + CAPI dual-firing, 90%+ EMQ) (Sec 8) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Verify a domain and configure Aggregated Event Measurement priorities (Sec 8) <span class="ci-est">~30 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Run an Advantage+ Sales campaign vs. a manual campaign in parallel for 7 days (Sec 9) <span class="ci-est">~60 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Generate a System User access token for an API integration (Sec 8) <span class="ci-est">~20 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-advanced" style="color:#991b1b">0 of 7 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-advanced" style="background:#991b1b"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#991b1b" onclick="resetList('advanced')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('advanced')">📝 Take Quiz</button></div></div>
</div>

<!-- 16. QUICK REFERENCE -->
<div class="slide" id="sec-qr"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Quick Reference</span></div><h2>🔗 Quick Reference — Platform Access &amp; Help Centers</h2></div>
  <div class="slide-body"><div class="qr-grid">
    <div class="qr-card"><h4>🔐 Platform Access</h4><ul><li><a href="https://business.facebook.com" target="_blank">Meta Business Suite</a></li><li><a href="https://business.facebook.com/settings" target="_blank">Business Settings (Manager view)</a></li><li><a href="https://www.facebook.com/adsmanager/manage/" target="_blank">Ads Manager</a></li><li><a href="https://www.facebook.com/events_manager2/" target="_blank">Events Manager (Pixel)</a></li><li><a href="https://www.facebook.com/commerce_manager/" target="_blank">Commerce Manager</a></li></ul></div>
    <div class="qr-card"><h4>🎓 Learning &amp; Certification</h4><ul><li><a href="https://www.facebookblueprint.com/" target="_blank">Meta Blueprint (free courses)</a></li><li><a href="https://www.facebookblueprint.com/student/page/289993-certifications" target="_blank">Blueprint Certifications</a></li><li><a href="https://www.facebook.com/business/learn" target="_blank">Meta for Business Resources</a></li><li><a href="https://creators.facebook.com" target="_blank">Meta for Creators</a></li></ul></div>
    <div class="qr-card"><h4>🆘 Help &amp; Support</h4><ul><li><a href="https://www.facebook.com/business/help" target="_blank">Meta Business Help Center</a></li><li><a href="https://www.facebook.com/business/help/205614130852248" target="_blank">Get Started with Business Suite</a></li><li><a href="https://www.facebook.com/business/help/442345745885606" target="_blank">About Business Manager Roles</a></li><li><a href="https://www.facebook.com/business/help/952192354843755" target="_blank">About Meta Pixel</a></li></ul></div>
    <div class="qr-card"><h4>🛠️ Developer &amp; API</h4><ul><li><a href="https://developers.facebook.com/docs/marketing-apis/" target="_blank">Marketing API Docs</a></li><li><a href="https://developers.facebook.com/docs/meta-pixel" target="_blank">Pixel Documentation</a></li><li><a href="https://developers.facebook.com/docs/marketing-api/conversions-api" target="_blank">Conversions API Docs</a></li></ul></div>
    <div class="qr-card"><h4>🎬 YouTube</h4><ul><li><a href="https://www.youtube.com/results?search_query=meta+business+suite+tutorial+for+beginners+2025" target="_blank">Beginner Tutorial</a></li><li><a href="https://www.youtube.com/results?search_query=meta+ads+manager+tutorial+2025" target="_blank">Intermediate Tutorial</a></li><li><a href="https://www.youtube.com/results?search_query=meta+ads+advanced+strategy+scaling+2025" target="_blank">Advanced Strategy</a></li></ul></div>
    <div class="qr-card"><h4>📱 Mobile Apps</h4><ul><li><a href="https://apps.apple.com/us/app/meta-business-suite/id514643583" target="_blank">Meta Business Suite — iOS</a></li><li><a href="https://play.google.com/store/apps/details?id=com.facebook.pages.app" target="_blank">Meta Business Suite — Android</a></li><li>Meta Ads Manager — iOS / Android</li></ul></div>
  </div></div>
</div>

<!-- FINAL NOTE -->
<div class="final-note" id="sec-final">
  <p style="font-size:15px;font-weight:700;margin-bottom:10px">📌 Final Note — Meta Business Manager Training</p>
  <p style="margin-bottom:10px">All <strong>Beginner-level content</strong> is <strong>mandatory</strong> within your first <strong>30 days</strong>. Intermediate and Advanced training is self-paced.</p>
  <p style="margin-bottom:10px"><strong>Multi-Brand Access:</strong> InvenTel manages multiple brand Pages and ad accounts under one Meta Business Portfolio. Your first step is always to confirm your access list with your direct report. Do not assume which assets you need — verify, and escalate if anything is missing.</p>
  <p style="margin-bottom:10px"><strong>Two-factor authentication is required</strong> on any account that touches ad accounts or admin permissions. No exceptions.</p>
  <p style="margin-bottom:10px">This deck is <strong>self-contained</strong> — every deep-dive includes complete step-by-step instructions. Click any section header to collapse it once you've completed it. External links and help centers are in the Quick Reference.</p>
  <p style="margin-bottom:10px">Use the <strong>New Hire Checklist</strong> to track progress and share with your manager.</p>
  <p style="margin-bottom:10px">For access, credentials, or training questions — reach out to the <strong>HR Training Coordinator who assisted you during onboarding</strong>.</p>
  <p style="margin-bottom:10px"><a href="https://www.facebook.com/business/help" target="_blank">Meta Business Help Center →</a></p>
  <p style="font-size:11px;opacity:.7;margin-top:14px">Last updated: April 6, 2025</p>
</div>

<!-- FLOATING NAV -->
<button class="float-nav-btn" onclick="toggleFloatNav()" title="Jump to section">📋</button>
<div class="float-nav-panel" id="float-nav">
  <div class="float-nav-hd">📋 Jump to Section</div>
  <ul class="float-nav-list">
    <li><a class="fnl-section" href="#sec-toc" onclick="closeNav()">📋 Table of Contents</a></li>
    <li><a class="fnl-section" href="#sec-overview" onclick="closeNav()">📘 1. Platform Overview</a></li>
    <li><a class="fnl-section" href="#sec-hub" onclick="closeNav()">🎓 2. Official Learning Hub</a></li>
    <li><a class="fnl-section" href="#sec-begres" onclick="closeNav()">🟢 3. Beginner Resources</a></li>
    <li><a class="fnl-section" href="#sec-start" onclick="closeNav()">🟢 4. Getting Started</a></li>
    <li><a class="fnl-section" href="#sec-pages" onclick="closeNav()">💬 5. Pages, Inbox &amp; Engagement</a></li>
    <li><a class="fnl-section" href="#sec-planner" onclick="closeNav()">📅 6. Planner &amp; Publishing</a></li>
    <li><a class="fnl-section" href="#sec-insights" onclick="closeNav()">📊 7. Insights &amp; Analytics</a></li>
    <li><a class="fnl-section" href="#sec-ads" onclick="closeNav()">🎯 8. Ads Manager &amp; Pixel</a></li>
    <li><a class="fnl-section" href="#sec-ai" onclick="closeNav()">🤖 9. Advantage+ &amp; AI</a></li>
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

/* QUIZ DATA — 22-25 per level, pulls 20 */
var qSection,qIndex,qScore,qAnswered,qQuestions;
var QUIZ={
mandatory:{title:'New Hire Onboarding',sub:'Mandatory · 20 Questions · Pass = 70%',hd:'q-mandatory',track:'New Hire Onboarding — Meta Business Manager',qs:20,questions:[
{q:'What is the FIRST thing you should do on your first day with Meta Business Manager?',opts:['Start running a Sales campaign','Request your access list from your direct report','Install the Meta Pixel','Create a custom audience'],ans:1},
{q:'Where do you sign in to Meta Business Suite?',opts:['facebook.com/login','business.facebook.com','meta.com/business','admin.facebook.com'],ans:1},
{q:'What is the difference between Business Suite and Business Manager?',opts:['They are unrelated tools','Suite = day-to-day storefront (post, reply, view); Manager = back office (assets, permissions, billing)','Manager is for personal use only','Suite is paid; Manager is free'],ans:1},
{q:'How do you switch between multiple brand Pages or ad accounts?',opts:['Log out and log back in','Use the account switcher in the top-left','Open separate browsers','Reinstall the app'],ans:1},
{q:'Where is the unified Inbox in Business Suite?',opts:['All Tools menu','Sidebar → Inbox','Settings → Messages','Top toolbar'],ans:1},
{q:'Which platforms feed into the unified Inbox?',opts:['Only Facebook','Facebook, Instagram, Messenger (and WhatsApp if connected)','Only Instagram','Only WhatsApp'],ans:1},
{q:'What does "hide" do to a comment vs "delete"?',opts:['No difference','Hide keeps it visible to the commenter and their friends only; delete removes it entirely','Hide deletes it for everyone','Delete only archives the comment'],ans:1},
{q:'How do you create a new post in Business Suite?',opts:['Email Meta support','Sidebar → Content → Create post','Settings → New Post','Through Ads Manager'],ans:1},
{q:'How do you customize a single post for Facebook vs Instagram differently?',opts:['You cannot — same caption posts to both','Click "Customize for each platform" in the post composer','Create two separate posts','Use the API'],ans:1},
{q:'Where do you schedule posts to publish later?',opts:['Cannot schedule','Use the Publish dropdown → Schedule, or drag in the Planner','Through Ads Manager','Email Meta'],ans:1},
{q:'What is "Reach" vs "Impressions"?',opts:['They are identical','Reach = unique people; Impressions = total times shown (one person can drive many)','Reach is paid only','Impressions are organic only'],ans:1},
{q:'Where do you view organic content performance?',opts:['Ads Manager','Sidebar → Insights','Settings → Reports','Cannot view'],ans:1},
{q:'What are the three tiers of an ad campaign in Ads Manager?',opts:['Plan / Build / Launch','Campaign / Ad set / Ad','Brand / Region / Audience','Budget / Goal / Result'],ans:1},
{q:'What sets the campaign objective (Sales, Leads, Engagement, etc.)?',opts:['The Ad level','The Campaign level','The Ad set level','It is automatic'],ans:1},
{q:'Where do you set audience, placements, and budget?',opts:['Campaign level','Ad set level','Ad level','Profile settings'],ans:1},
{q:'What is the Meta Pixel?',opts:['A creative tool','A piece of tracking code on your website that measures visitor actions','A type of ad','A reporting metric'],ans:1},
{q:'Why is two-factor authentication required for InvenTel ad-handling roles?',opts:['It is optional','To protect access to ad accounts and admin permissions','For compliance only','Only for new hires'],ans:1},
{q:'What is "Boost post" in Business Suite?',opts:['A free promotion','A simplified ad created from an existing post','A new feature for organic reach','An analytics export'],ans:1},
{q:'Where do you go to manage permissions, partners, billing, and Pixel?',opts:['Sidebar → Inbox','business.facebook.com/settings (Business Settings)','Ads Manager','Insights'],ans:1},
{q:'Who should you contact if you have access issues?',opts:['Meta support directly','Your direct report or the HR Training Coordinator','Another team member','Facebook customer service'],ans:1},
{q:'What does "Advantage+" mean?',opts:['A pricing tier','Meta\'s AI-powered automation suite for targeting, placements, budget, and creative','A type of certificate','A separate app'],ans:1},
{q:'Why must you confirm which account is selected in the switcher before posting?',opts:['Just etiquette','Posting to the wrong brand Page is a major mistake — content goes live immediately','Required by law','It triggers an alert'],ans:1},
{q:'What is the role of the Planner?',opts:['Run ads','Drag-and-drop calendar showing scheduled, published, and draft content across Facebook + Instagram','Audience builder','Pixel setup'],ans:1}
]},
intermediate:{title:'Intermediate Path',sub:'Intermediate · 20 Questions · Pass = 70%',hd:'q-intermediate',track:'Intermediate — Meta Business Manager',qs:20,questions:[
{q:'How do you create a Saved Reply for the inbox?',opts:['Cannot save replies','Click the lightning ⚡ icon in the message composer → Create new','Email Meta','Buy a plugin'],ans:1},
{q:'What does the "Away Message" automated response do?',opts:['Deletes messages','Sends a custom message after-hours when you are not available','Blocks the sender','Forwards to a teammate'],ans:1},
{q:'How do you assign an inbox conversation to a teammate?',opts:['Cannot assign','Open the conversation → Assignee → pick the teammate','Through email','Forward the message'],ans:1},
{q:'Where do you view audience demographics for your followers?',opts:['Ads Manager','Insights → Audience','Settings → Users','Commerce Manager'],ans:1},
{q:'What does "When your followers are online" show you?',opts:['Their location','A heatmap of best hours per day to post for maximum organic reach','How many followers you have','Demographics breakdown'],ans:1},
{q:'How do you compare two time periods in Insights?',opts:['Cannot compare','Insights date picker → toggle Compare → pick a previous window','Export both periods to Excel','Only year-over-year'],ans:1},
{q:'Where do you verify the Meta Pixel is firing?',opts:['Ads Manager → Reports','All Tools → Events Manager → Overview tab','Settings → Pixel','Insights'],ans:1},
{q:'What does the Test Events tab in Events Manager do?',opts:['Runs an A/B test','Lets you trigger actions on your site and confirm Pixel events appear in real time','Sends test emails','Creates fake audiences'],ans:1},
{q:'What is the Conversions API (CAPI)?',opts:['A type of ad','Server-side event tracking that sends data directly to Meta — bypassing browser blockers and iOS limits','A reporting tool','A creative format'],ans:1},
{q:'Why is Pixel + CAPI dual setup recommended?',opts:['It is not — pick one','Higher event match quality, more deduplication, better optimization, resilience to browser changes','Required by law','To slow down the site'],ans:1},
{q:'What is a Custom Audience?',opts:['A purchased audience','An audience built from your own data: customer list, website visits, app, engagement, catalog','A demographic auto-segment','An A/B test'],ans:1},
{q:'Where do you build Custom Audiences?',opts:['Settings → Users','All Tools → Audiences → Create audience → Custom audience','Ads Manager → Reports','Cannot build them'],ans:1},
{q:'What is a Lookalike Audience?',opts:['Identical to Custom Audience','New audience similar to a strong source audience (e.g., top customers) — found by Meta\'s AI','A duplicate of an ad set','A boosted post audience'],ans:1},
{q:'What similarity percentage is closest match (smallest pool) for a Lookalike?',opts:['10%','5%','1%','0.1%'],ans:2},
{q:'How do you create a campaign in Ads Manager?',opts:['Through Insights','Click + Create → choose objective → set up Campaign / Ad set / Ad','Email Meta','Through Commerce Manager'],ans:1},
{q:'What naming convention is recommended for campaigns?',opts:['Random names','[Brand]_[Objective]_[Audience]_[Date] for clarity','Use timestamps only','Use only abbreviations'],ans:1},
{q:'Where do you set spending limits to protect against runaway spend?',opts:['At the ad level','Business Settings → Ad Accounts → [Account] → Account Spending Limit','Cannot set limits','Only Meta sets them'],ans:1},
{q:'What does "Boosted post" use vs full Ads Manager?',opts:['They are the same','Boost = simplified ad with fewer controls; Ads Manager = full campaign controls and optimization','Boost is more powerful','Ads Manager is for free posts only'],ans:1},
{q:'How do you label conversations in the Inbox?',opts:['Cannot label','Open conversation → click Label icon → create or apply a label','Through Settings only','Email Meta'],ans:1},
{q:'How do you save drafts of posts?',opts:['Cannot save drafts','Publish dropdown → Save as draft (lives in Content → Drafts)','Email yourself','Use a third-party tool'],ans:1},
{q:'Where do you adjust the attribution setting in Ads Manager?',opts:['Cannot adjust','Above the data table → click Attribution setting (default 7-day click + 1-day view)','Through Settings','Per ad set only'],ans:1},
{q:'What is one safe practice when boosting a post?',opts:['Set the highest budget possible','Pick a clear goal, set a modest budget, monitor for 3 days, and adjust','Boost everything you publish','Boost without setting an audience'],ans:1},
{q:'What format does Insights export to?',opts:['Only PDF','CSV or PDF','XLSX only','JSON'],ans:1}
]},
advanced:{title:'Advanced Mastery',sub:'Advanced · 20 Questions · Pass = 70%',hd:'q-advanced',track:'Advanced Mastery — Meta Business Manager',qs:20,questions:[
{q:'What is the difference between Business Portfolio role and asset role?',opts:['No difference','Portfolio = Admin or Employee on the parent business; asset role = task-based access (Standard or Admin) on each Page/ad account','Portfolio is for partners only','Asset role is deprecated'],ans:1},
{q:'What does "Full control" on a Page allow?',opts:['Only post and reply','Add/remove others, manage everything, including delete the Page — reserve for senior owners','View Insights only','Run ads only'],ans:1},
{q:'What is CBO (now called Advantage+ Campaign Budget)?',opts:['A bidding type','Budget set at the campaign level; Meta distributes across ad sets dynamically','Manual budget per ad','Cannot do this'],ans:1},
{q:'When would you use ABO (Ad Set Budget) instead of CBO?',opts:['Always','When you need to force spend on specific audiences (e.g., top-of-funnel vs retargeting)','When budget is unlimited','For brand awareness only'],ans:1},
{q:'What is the default attribution window in Ads Manager?',opts:['1-day click','7-day click + 1-day view','30-day click','28-day click + 1-day view'],ans:1},
{q:'What does Aggregated Event Measurement (AEM) do?',opts:['Reports total events','Manages up to 8 prioritized conversion events per domain to comply with iOS 14.5+ privacy','Aggregates ads','Tracks only mobile'],ans:1},
{q:'How do you verify a domain in Meta Business Manager?',opts:['Cannot verify','Business Settings → Brand Safety → Domains → Add → DNS TXT, meta-tag, or HTML file upload','Through Pixel only','Meta auto-verifies'],ans:1},
{q:'What event should always be slot 1 in AEM priorities?',opts:['PageView','Purchase (highest-value, post-purchase signal)','Add to Cart','Lead'],ans:1},
{q:'Why are Meta-reported conversions often higher than GA4 or Triple Whale numbers?',opts:['Meta is wrong','Different attribution models — Meta credits view-through and click within its window; GA4/Triple Whale apply different rules','GA4 is broken','Triple Whale only counts Shopify'],ans:1},
{q:'What is best practice for using Meta vs Triple Whale data?',opts:['Pick whichever is higher','Use Meta as the optimization signal (let the algo learn) and Triple Whale/GA4 as truth for blended business decisions','Always pick GA4','Always pick Meta'],ans:1},
{q:'What is Advantage+ Sales Campaign (ASC)?',opts:['A free trial','AI-driven Sales campaign with automated audience, placements, budget, and creative — supports e-commerce, leads, and app installs','Manual campaign type','A reporting view'],ans:1},
{q:'What is the recommended minimum weekly conversion volume for ASC to learn well?',opts:['10','25','50','500'],ans:2},
{q:'What does "existing-customer audience" setting on ASC control?',opts:['Excludes them entirely','How much of your budget goes to current customers vs new customer acquisition','Auto-blocks them','Sends them an email'],ans:1},
{q:'What is Advantage+ Audience?',opts:['Demographic targeting only','AI-driven audience that uses your inputs as suggestions and expands beyond them when better-performing users are found','Manual interest targeting','Lookalike audience'],ans:1},
{q:'What is the difference between Audience Suggestions and Audience Controls?',opts:['No difference','Suggestions = soft hints AI can ignore; Controls = hard rules (min age, country exclusions, language)','Controls are deprecated','Suggestions are paid'],ans:1},
{q:'What is a System User?',opts:['A regular employee','A non-human user for API integrations and programmatic access — token-based','An admin with full control','A partner agency'],ans:1},
{q:'Where do you create a System User?',opts:['Cannot create them','Business Settings → Users → System Users → Add','Ads Manager','Through email request'],ans:1},
{q:'What is the Marketing API used for?',opts:['Posting only','Programmatic ad management — bulk campaign creation, automated reporting, programmatic budget shifts','Customer support','Email marketing'],ans:1},
{q:'What is Opportunity Score in Ads Manager?',opts:['A pricing tier','A 0–100 rating reflecting how aligned your setup is with Meta\'s recommended best practices, with prioritized recommendations','Predicts ROAS exactly','Replaces reporting'],ans:1},
{q:'Best practice for Opportunity Score recommendations?',opts:['Auto-apply all','Treat them as a checklist to review — apply what matches your strategy, not gospel','Ignore them','Disable the feature'],ans:1},
{q:'What is the recommended creative variety per ad set for AI optimization?',opts:['1 creative is enough','At least 3–5 distinct creatives so the algorithm has options to test','50+ creatives','One per audience'],ans:1},
{q:'Why must you preview Advantage+ Creative auto-edits per placement?',opts:['Just optional','Auto-edits sometimes look awkward (distorted logos, wrong colors, clashing music) on specific surfaces','Always look perfect','Required by law'],ans:1},
{q:'What is required when using AI-generated copy or images for regulated categories (health, finance)?',opts:['No review needed','Brand &amp; legal review; document the prompt + final asset for audit','Auto-publish','Cannot use AI in those categories'],ans:1}
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
