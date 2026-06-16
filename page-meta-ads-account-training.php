<?php /* Template Name: Meta Ads Account Training */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>InvenTel — Meta Ads Account Training (Self-Contained) v3.1</title>
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
.callout.gray{background:#f0f0ee;border-left-color:#999}.callout.gray strong{color:#3a3a3a}
.callout.green{background:#dcfce7;border-left-color:#16a34a}.callout.green strong{color:#166534}
.callout.red{background:#fef2f2;border-left-color:#991b1b}.callout.red strong{color:#991b1b}
.platform-url{background:#f5f5f0;border:1px solid #e5e5e0;border-radius:6px;padding:12px 16px;margin:14px 0;font-size:13px;line-height:2}
.platform-url strong{color:#5c5c5c}
.badge{display:inline-block;padding:2px 9px;border-radius:12px;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.6px;vertical-align:middle;margin-right:3px}
.badge-mandatory{background:#166534;color:#fff}
.badge-beginner{background:#dcfce7;color:#166534}
.badge-intermediate{background:#fef08a;color:#854d0e}
.badge-advanced{background:#991b1b;color:#fde2e2}
.badge-official{background:#e5e5e0;color:#3a3a3a}
.badge-academy{background:#8B0000;color:#fff}
.badge-new{background:#8B0000;color:#fff}
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
.checklist-section.mandatory .progress-bar{background:#16a34a}
.checklist-section.intermediate .progress-bar{background:#ca8a04}
.checklist-section.advanced .progress-bar{background:#991b1b}
.btn-row{display:flex;gap:8px}
.reset-btn{border:none;border-radius:6px;padding:8px 18px;font-size:12px;font-weight:700;cursor:pointer;color:#fff;background:#777}
.reset-btn:hover{opacity:.87}
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
      <div class="header-h1">🎯 Meta Ads Account — Self-Contained Training Guide</div>
      <div class="header-subtitle">Complete step-by-step training for the Meta Ads account &amp; Ads Manager — account setup &amp; access, campaign structure &amp; objectives, the Meta Pixel &amp; Conversions API, Custom &amp; Lookalike Audiences, Advantage+ AI campaigns, budgets, bidding, attribution, reporting, and billing safeguards — click any section header to collapse/expand</div>
    </div>
    <div class="header-meta">All Levels (Beginner → Advanced)<br>Platform: Meta Ads Manager (Facebook + Instagram)<br>Format: Self-Contained / Standalone<br><span style="color:#fcd9b6;font-weight:700">v3.1 — Search Bar Edition</span></div>
  </div>
</div>
<div class="stat-row">
  <div class="stat-item"><span class="stat-val">16</span><span class="stat-lbl">Training Sections</span></div>
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Skill Levels</span></div>
  <div class="stat-item"><span class="stat-val">60</span><span class="stat-lbl">Quiz Questions</span></div>
  <div class="stat-item"><span class="stat-val">30 Days</span><span class="stat-lbl">Mandatory Window</span></div>
  <div class="stat-item"><span class="stat-val">Standalone</span><span class="stat-lbl">No External Links Required</span></div>
</div>
<div class="mandatory-bar">⚠️ Beginner-level content is MANDATORY within your first 30 days. Two-factor authentication is required on any account that touches an ad account.</div>

<!-- SEARCH BAR -->
<div class="search-bar-wrap">
  <span class="search-icon">🔍</span>
  <input class="search-input" id="deck-search" type="text" placeholder="Search this training deck — try “Pixel”, “budget”, “Advantage+”…" oninput="deckSearch(this.value)"/>
  <button class="search-clear-btn" onclick="clearDeckSearch()" title="Clear search">✕</button>
  <span class="search-count" id="search-count"></span>
</div>

<div id="main-content">

<!-- 1. TABLE OF CONTENTS -->
<div class="slide" id="sec-toc"><div class="slide-header" onclick="toggleSection(this)"><h2>📋 Table of Contents</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <div class="toc-grid">
      <div class="toc-item" onclick="goTo('sec-overview')">1. Ads Account Overview<span>What it is, how it sits under the Business Portfolio</span></div>
      <div class="toc-item" onclick="goTo('sec-hub')">2. Official Learning Hub<span>Meta Blueprint &amp; Help Center</span></div>
      <div class="toc-item" onclick="goTo('sec-begres')">3. Beginner Resources<span>Guides, cheat sheets, YouTube</span></div>
      <div class="toc-item" onclick="goTo('sec-start')">4. Getting Started — Account Setup<span>Access, 2FA, spend limits, payment</span></div>
      <div class="toc-item" onclick="goTo('sec-structure')">5. Campaign Structure &amp; Objectives<span>Campaign / Ad set / Ad, the 6 objectives</span></div>
      <div class="toc-item" onclick="goTo('sec-pixel')">6. Meta Pixel &amp; Conversions API<span>Tracking, Events Manager, CAPI</span></div>
      <div class="toc-item" onclick="goTo('sec-audiences')">7. Audiences<span>Custom, Lookalike, Advantage+ Audience</span></div>
      <div class="toc-item" onclick="goTo('sec-reporting')">8. Reporting &amp; Attribution<span>Columns, breakdowns, attribution windows</span></div>
      <div class="toc-item" onclick="goTo('sec-ai')">9. Advantage+ &amp; AI<span>ASC, Advantage+ Audience &amp; Creative</span></div>
      <div class="toc-item" onclick="goTo('sec-intres')">10. Intermediate Resources<span>Self-paced, optional</span></div>
      <div class="toc-item" onclick="goTo('sec-advres')">11. Advanced Resources<span>Optional deep mastery</span></div>
      <div class="toc-item" onclick="goTo('sec-certs')">12. Certifications<span>Meta Blueprint credentials</span></div>
      <div class="toc-item" onclick="goTo('cl-mandatory')">13. New Hire Checklist<span>Mandatory · 30-day deadline</span></div>
      <div class="toc-item" onclick="goTo('cl-intermediate')">14. Intermediate Checklist<span>Self-paced</span></div>
      <div class="toc-item" onclick="goTo('cl-advanced')">15. Advanced Checklist<span>Deep mastery</span></div>
      <div class="toc-item" onclick="goTo('sec-qr')">16. Quick Reference<span>URLs, help centers, YouTube</span></div>
    </div>
  </div>
</div>

<!-- 1. OVERVIEW -->
<div class="slide" id="sec-overview"><div class="slide-header" onclick="toggleSection(this)"><h2>📘 1. Ads Account Overview</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">What the Meta ads account is, how it fits under the Business Portfolio, and where you go to work.</p>
    <p>A <strong>Meta ad account</strong> is the container that holds your paid campaigns, billing details, spending limits, the Meta Pixel, and saved audiences. Each brand InvenTel runs has its own ad account, and all of them live inside the company <strong>Meta Business Portfolio</strong> (Business Manager). You will be granted a role on the specific ad accounts your job requires — never assume which ones; verify your access list with your direct report first.</p>
    <p>You manage everything in <strong>Ads Manager</strong>, the dashboard where campaigns are built, launched, monitored, and reported on across Facebook, Instagram, Messenger, and the Audience Network.</p>
    <div class="platform-url">
      <strong>Ads Manager:</strong> <a href="https://www.facebook.com/adsmanager/manage/" target="_blank">facebook.com/adsmanager/manage</a><br>
      <strong>Business Settings (access, billing, Pixel):</strong> <a href="https://business.facebook.com/settings" target="_blank">business.facebook.com/settings</a><br>
      <strong>Events Manager (Pixel &amp; CAPI):</strong> <a href="https://www.facebook.com/events_manager2" target="_blank">facebook.com/events_manager2</a>
    </div>
    <h3 style="font-size:13px;font-weight:700;color:#2d0000;margin:14px 0 6px;text-transform:uppercase;letter-spacing:.5px">Core Building Blocks</h3>
    <p>Every paid campaign is built from three nested levels: the <strong>Campaign</strong> (sets the objective), the <strong>Ad set</strong> (sets audience, placements, budget, and schedule), and the <strong>Ad</strong> (the actual creative people see). Understanding this three-level hierarchy is the foundation for everything else in this deck.</p>
    <div class="callout green"><strong>Your first step is always access verification.</strong> InvenTel manages multiple brand ad accounts under one Business Portfolio. Confirm with your direct report exactly which ad accounts you should see and your role on each — then verify they all appear in the account switcher before touching anything. Escalate if something is missing.</div>
  </div>
</div>

<!-- 2. OFFICIAL LEARNING HUB -->
<div class="slide" id="sec-hub"><div class="slide-header" onclick="toggleSection(this)"><div style="margin-bottom:6px"><span class="badge badge-academy">Official Hub</span></div><h2>🎓 2. Official Learning Hub — Meta Blueprint &amp; Help Center</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">Meta's official learning resources for Ads Manager, Pixel, and campaign strategy. Supplementary — the core training below is self-contained.</p>
    <div class="card"><div class="card-title">Meta Business Help Center <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official knowledge base for Ads Manager, billing, Pixel, the Conversions API, audiences, and policy. Searchable and regularly updated.</div><div class="card-meta"><strong>Source:</strong> Meta &nbsp;|&nbsp; <strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t1">Beginner</span><span class="tag t2">Intermediate</span><span class="tag t3">Advanced</span><span class="tag t4">Reference</span></div><a href="https://www.facebook.com/business/help" target="_blank">→ Open Meta Business Help Center</a></div>
    <div class="card"><div class="card-title">Meta Blueprint — Free Online Training <span class="badge badge-mandatory">Mandatory Beginner Track</span></div><div class="card-desc">Meta's official self-paced training program covering Facebook and Instagram advertising, Ads Manager, measurement, and creative. The beginner Ads Manager track is mandatory in your first 30 days.</div><div class="card-meta"><strong>Source:</strong> Meta &nbsp;|&nbsp; <strong>Format:</strong> Courses &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t1">Courses</span><span class="tag t4">Self-paced</span></div><a href="https://www.facebookblueprint.com" target="_blank">→ Open Meta Blueprint</a></div>
    <div class="card"><div class="card-title">Help Center — About Ads Manager <span class="badge badge-beginner">Beginner</span></div><div class="card-desc">Orientation to the Ads Manager interface: where campaigns, ad sets, and ads live, and how to navigate the table view.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Interface</span><span class="tag t4">Navigation</span></div><a href="https://www.facebook.com/business/help/200000840044554" target="_blank">→ Read "About Ads Manager"</a></div>
  </div>
</div>

<!-- 3. BEGINNER RESOURCES -->
<div class="slide" id="sec-begres"><div class="slide-header" onclick="toggleSection(this)"><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span></div><h2>🟢 3. Beginner Training Resources</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">Supplementary external resources for foundational Ads Manager skills.</p>
    <div class="card"><div class="card-title">Help Center — Create an Ad from Ads Manager <span class="badge badge-beginner">Beginner</span></div><div class="card-desc">Step-by-step on building your first campaign, ad set, and ad from scratch.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">First campaign</span><span class="tag t4">Setup</span></div><a href="https://www.facebook.com/business/help/1185237678472504" target="_blank">→ Read "Create an ad"</a></div>
    <div class="card"><div class="card-title">YouTube: Meta Ads Manager for Beginners <span class="badge badge-beginner">Beginner</span></div><div class="card-desc">Walkthroughs covering account setup, the campaign/ad set/ad structure, and launching a first campaign.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t2">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=meta+ads+manager+tutorial+for+beginners+2026" target="_blank">→ Search YouTube: "Meta Ads Manager for beginners 2026"</a></div>
    <div class="card"><div class="card-title">Help Center — About Campaign Objectives <span class="badge badge-beginner">Beginner</span></div><div class="card-desc">Plain-language guide to the six campaign objectives and which one to pick for your goal.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Objectives</span><span class="tag t4">Strategy</span></div><a href="https://www.facebook.com/business/help/1438417719786914" target="_blank">→ Read "About ad objectives"</a></div>
  </div>
</div>

<!-- 4. GETTING STARTED -->
<div class="slide" id="sec-start"><div class="slide-header" onclick="toggleSection(this)"><div style="margin-bottom:6px"><span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-beginner">Beginner</span></div><h2>🚀 4. Getting Started — Ads Account First-Day Setup</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">Self-contained, step-by-step. Complete every step before you build a single campaign.</p>

    <div class="steps-box"><h4>🔐 Secure Your Account &amp; Confirm Access</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Request your Meta Business Portfolio access list from your direct report: which ad accounts you should have, and your role on each (typically <strong>Advertiser</strong> or <strong>Admin</strong>).</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Sign in at <a href="https://business.facebook.com/settings" target="_blank">business.facebook.com/settings</a> with your work Facebook login.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Turn on <strong>two-factor authentication</strong>: <span class="step-nav">Business Settings → Security Center → Two-factor authentication → Require</span>. This is mandatory for any account that touches an ad account.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">Open <span class="step-nav">Business Settings → Accounts → Ad Accounts</span> and confirm every ad account from your access list appears with the correct role.</div></div>
      <div class="step-warning"><strong>⚠️</strong> If any assigned ad account is missing, stop and escalate to your direct report. Do not build campaigns in an account you are unsure you should be in.</div>
    </div>

    <div class="steps-box"><h4>🧭 Open Ads Manager &amp; Pick the Right Account</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Go to <a href="https://www.facebook.com/adsmanager/manage/" target="_blank">facebook.com/adsmanager/manage</a>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Top-left → use the <strong>ad account switcher</strong> to select the correct brand account. The account ID appears beside the name — confirm it matches the brand you intend to work on.</div></div>
      <div class="step-tip"><strong>💡</strong> Working in the wrong ad account is one of the most common and costly mistakes. Always confirm the account name and ID before clicking Create.</div>
    </div>

    <div class="steps-box"><h4>💳 Verify Billing &amp; Set a Spending Limit</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Open <span class="step-nav">Business Settings → Ad Accounts → [Account] → Payment settings</span> (or Billing &amp; payments in Ads Manager) and confirm a valid payment method is attached. Do not add or change payment methods unless your role explicitly covers billing — escalate instead.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Set an <strong>account spending limit</strong>: <span class="step-nav">Billing &amp; payments → Account spending limit → Set limit</span>. This caps total spend across the account and protects against runaway costs.</div></div>
      <div class="step-tip"><strong>💡</strong> The account spending limit is a hard ceiling for the whole account; campaign and ad-set budgets sit underneath it. Use it as a safety net, especially while you are still learning.</div>
    </div>
  </div>
</div>

<!-- 5. CAMPAIGN STRUCTURE & OBJECTIVES -->
<div class="slide" id="sec-structure"><div class="slide-header" onclick="toggleSection(this)"><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🏗️ 5. Core Deep Dive — Campaign Structure &amp; Objectives</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">The three-level hierarchy, the six objectives, budgets, and bidding.</p>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>The Three Levels</h3>
        <div class="sub-card"><strong>Create a Campaign</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">In Ads Manager → click <strong>+ Create</strong>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Choose an <strong>objective</strong> (Campaign level). Name it with the convention <code>[Brand]_[Objective]_[Audience]_[Date]</code>.</div></div>
        </div>
        <div class="sub-card"><strong>Set Up the Ad Set</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">The <strong>Ad set</strong> controls audience, placements, budget, and schedule — the "who, where, and how much."</div></div>
        </div>
        <div class="sub-card"><strong>Build the Ad</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">The <strong>Ad</strong> is the creative people see — image/video, primary text, headline, and link. Multiple ads can live in one ad set.</div></div>
        </div>
        <div class="step-tip"><strong>💡</strong> Memorize it: Campaign = goal, Ad set = targeting + money, Ad = creative.</div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Objectives &amp; Budgets</h3>
        <div class="sub-card"><strong>The Six Objectives</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Awareness, Traffic, Engagement, Leads, App promotion, and <strong>Sales</strong>. Pick the one that matches the real business goal.</div></div>
          <div class="step-warning"><strong>⚠️</strong> The most common mistake is choosing Traffic when you actually want purchases. For revenue, use <strong>Sales</strong> with the Purchase event — clicks may cost more but cost-per-customer is lower.</div>
        </div>
        <div class="sub-card"><strong>Daily vs Lifetime Budget</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Daily = average spend per day; Lifetime = total across the schedule (enables dayparting). Set budget at the ad-set level (ABO) or campaign level (CBO / Advantage+ Campaign Budget).</div></div>
        </div>
        <div class="sub-card"><strong>The Learning Phase</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">After launch or a major edit, an ad set enters the <strong>learning phase</strong> and stabilizes after roughly 50 optimization events in a week. Avoid frequent edits that reset it.</div></div>
          <div class="step-warning"><strong>⚠️</strong> "Learning Limited" usually means the budget or audience is too small to gather 50 weekly events. Consolidate or raise budget rather than editing repeatedly.</div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>CBO, ABO &amp; Bidding</h3>
        <div class="sub-card"><strong>CBO vs ABO</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>CBO</strong> (Advantage+ Campaign Budget) sets one budget at the campaign level and lets Meta distribute it across ad sets dynamically.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Use <strong>ABO</strong> (Ad Set Budget) when you must force spend onto specific audiences — e.g., guaranteeing prospecting vs retargeting split, or fair budget for an audience test.</div></div>
        </div>
        <div class="sub-card"><strong>Bid Strategies</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>Highest volume</strong> (default) spends the budget for max results. <strong>Cost per result goal</strong> and <strong>ROAS goal</strong> let you steer toward an efficiency target; <strong>bid cap</strong> gives the most manual control.</div></div>
        </div>
        <div class="sub-card"><strong>A/B Testing</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Use the built-in <strong>A/B test</strong> tool (under Create or the Experiments section) to test one variable — creative, audience, or placement — with a clean, non-overlapping split.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 6. PIXEL & CAPI -->
<div class="slide" id="sec-pixel"><div class="slide-header" onclick="toggleSection(this)"><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🎯 6. Core Deep Dive — Meta Pixel &amp; Conversions API</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">Tracking conversions accurately is what makes Sales campaigns work. Mandatory reading for anyone running paid media.</p>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Pixel Basics</h3>
        <div class="sub-card"><strong>What the Pixel Is</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">The <strong>Meta Pixel</strong> is a piece of tracking code on the website that records visitor actions (page views, add-to-cart, purchases) and feeds them back to Meta for optimization and reporting.</div></div>
        </div>
        <div class="sub-card"><strong>Find It in Events Manager</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open <span class="step-nav">All Tools → Events Manager</span> or <a href="https://www.facebook.com/events_manager2" target="_blank">facebook.com/events_manager2</a>. Select your data source to see the <strong>Overview</strong> tab.</div></div>
        </div>
        <div class="sub-card"><strong>Verify It's Firing</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Use the <strong>Test Events</strong> tab: trigger an action on the site (e.g., a test add-to-cart) and confirm the event appears in real time.</div></div>
        </div>
        <div class="step-tip"><strong>💡</strong> No events firing = no conversion data = Sales campaigns can't optimize. Check this before launching anything.</div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Conversions API (CAPI)</h3>
        <div class="sub-card"><strong>What CAPI Is</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">The <strong>Conversions API</strong> sends events server-side, directly to Meta — bypassing browser ad blockers and iOS tracking limits that drop browser-Pixel events.</div></div>
        </div>
        <div class="sub-card"><strong>Why Run Pixel + CAPI Together</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">The dual setup gives higher <strong>event match quality</strong>, proper <strong>deduplication</strong>, better optimization, and resilience to browser changes. Run both, not one.</div></div>
        </div>
        <div class="sub-card"><strong>Event Match Quality</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">In Events Manager, each event shows an <strong>EMQ score</strong>. Passing more customer parameters (hashed email, phone, name) raises the score and improves attribution.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Privacy &amp; AEM</h3>
        <div class="sub-card"><strong>Aggregated Event Measurement</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>AEM</strong> lets you configure up to <strong>8 prioritized conversion events</strong> per verified domain, to comply with iOS 14.5+ privacy rules.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Set the highest-value, post-purchase event (usually <strong>Purchase</strong>) as priority 1, since only the highest-priority completed event is counted per user.</div></div>
        </div>
        <div class="sub-card"><strong>Verify Your Domain</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Business Settings → Brand Safety → Domains → Add</span>, then verify with a DNS TXT record, meta-tag, or HTML file upload. Domain verification is required to configure AEM events.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 7. AUDIENCES -->
<div class="slide" id="sec-audiences"><div class="slide-header" onclick="toggleSection(this)"><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>👥 7. Core Deep Dive — Audiences</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">Custom Audiences, Lookalikes, and how targeting has shifted to AI suggestions.</p>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Custom Audiences</h3>
        <div class="sub-card"><strong>What It Is</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">A <strong>Custom Audience</strong> is built from your own data: a customer list, website visitors (via Pixel), app activity, or engagement with your Page/posts/ads.</div></div>
        </div>
        <div class="sub-card"><strong>Build One</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><span class="step-nav">All Tools → Audiences → Create audience → Custom audience</span> → pick a source → follow the prompts.</div></div>
        </div>
        <div class="step-tip"><strong>💡</strong> Website and customer-list Custom Audiences are the backbone of retargeting — they re-reach people who already know the brand.</div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Lookalike Audiences</h3>
        <div class="sub-card"><strong>What It Is</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">A <strong>Lookalike Audience</strong> finds new people similar to a strong source (e.g., top customers), using Meta's modeling.</div></div>
        </div>
        <div class="sub-card"><strong>Similarity Percentage</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><strong>1%</strong> is the closest match (smallest, most similar pool); higher percentages (5%, 10%) widen reach but loosen similarity.</div></div>
        </div>
        <div class="sub-card"><strong>Build One</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Audiences → Create audience → Lookalike audience</span> → choose source, country, and size.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Advantage+ Audience</h3>
        <div class="sub-card"><strong>The Targeting Shift</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">In 2026, detailed-targeting inputs are <strong>suggestions, not hard filters</strong> for most objectives. <strong>Advantage+ Audience</strong> uses your inputs as a starting hint, then expands when it finds better-converting people.</div></div>
        </div>
        <div class="sub-card"><strong>Suggestions vs Controls</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>Audience suggestions</strong> are soft hints the AI can ignore. <strong>Audience controls</strong> are hard rules it must obey: minimum age, country exclusions, and excluded Custom Audiences.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Use controls (not suggestions) to enforce non-negotiables — e.g., a minimum age for regulated products, or excluding existing customers from prospecting.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 8. REPORTING & ATTRIBUTION -->
<div class="slide" id="sec-reporting"><div class="slide-header" onclick="toggleSection(this)"><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📊 8. Core Deep Dive — Reporting &amp; Attribution</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">Reading results, customizing columns, and understanding why Meta's numbers differ from other tools.</p>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Reading the Table</h3>
        <div class="sub-card"><strong>Key Metrics</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Reach</strong> = unique people; <strong>Impressions</strong> = total times shown; <strong>CTR</strong> = click rate; <strong>CPR</strong> = cost per result; <strong>ROAS</strong> = revenue ÷ ad spend.</div></div>
        </div>
        <div class="sub-card"><strong>Customize Columns</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Above the table → <span class="step-nav">Columns → Customize columns</span> to add ROAS, CPR, and the metrics you care about. Save it as a preset.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Breakdowns &amp; Exports</h3>
        <div class="sub-card"><strong>Breakdowns</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><span class="step-nav">Breakdown</span> splits results by age, gender, placement, platform, or time to reveal where performance is coming from.</div></div>
        </div>
        <div class="sub-card"><strong>Export &amp; Schedule</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Export to <strong>CSV</strong>, or build a saved report in Ads Reporting and schedule it to email on a recurring basis.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Attribution</h3>
        <div class="sub-card"><strong>Attribution Setting</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Above the table → <strong>Attribution setting</strong>. Default is <strong>7-day click + 1-day view</strong>. Different windows produce different measured ROAS — pick one and stay consistent.</div></div>
        </div>
        <div class="sub-card"><strong>Why Meta &gt; GA4 / Triple Whale</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Meta-reported conversions are usually <strong>higher</strong> because Meta credits view-through and clicks within its own window, while GA4 and Triple Whale apply different attribution rules.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Treat Meta as the <strong>optimization signal</strong> (let the algorithm learn) and Triple Whale / GA4 as <strong>truth</strong> for blended business decisions. Document the gap.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 9. ADVANTAGE+ & AI -->
<div class="slide" id="sec-ai"><div class="slide-header" onclick="toggleSection(this)"><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🤖 9. Core Deep Dive — Advantage+ &amp; AI</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">Meta's automation suite is the default in 2026. Know what it controls and how to steer it.</p>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>What Advantage+ Is</h3>
        <div class="sub-card"><strong>AI by Default</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Advantage+</strong> is Meta's AI automation suite for targeting, placements, budget, and creative. As of 2026 the manual and Advantage+ flows are unified, and AI recommendations are on by default for new campaigns.</div></div>
        </div>
        <div class="sub-card"><strong>Advantage+ Placements</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Lets Meta place your ad across all eligible surfaces (Feed, Stories, Reels, etc.) for the most efficient delivery — the recommended default for most ad sets.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Advantage+ Sales Campaign</h3>
        <div class="sub-card"><strong>What ASC Is</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text"><strong>Advantage+ Sales Campaign (ASC)</strong> — formerly Advantage+ Shopping — is an AI-driven campaign with automated audience, placements, budget, and creative. It now supports Sales, Leads, and App Install objectives.</div></div>
        </div>
        <div class="sub-card"><strong>Set It Up</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Click <strong>+ Create</strong> → choose <strong>Sales</strong> → keep Advantage+ enabled. You won't see detailed audience targeting — that's by design. Name it clearly and set a daily or lifetime budget.</div></div>
        </div>
        <div class="sub-card"><strong>Existing-Customer Setting</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">ASC's existing-customer setting controls how much budget goes to current customers vs new-customer acquisition. Add exclusions to keep prospecting focused on new people.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Steering the AI</h3>
        <div class="sub-card"><strong>Feed It Creative Variety</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Give each ad set at least <strong>3–5 distinct creatives</strong> so the algorithm has options to test. One creative starves the system.</div></div>
        </div>
        <div class="sub-card"><strong>Review Advantage+ Creative</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Advantage+ Creative auto-edits (text, music, crops) per placement. <strong>Preview every placement</strong> — auto-edits sometimes look awkward (distorted logos, clashing music).</div></div>
        </div>
        <div class="sub-card"><strong>Regulated Categories</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For AI-generated copy or imagery in regulated categories (health, finance), require <strong>brand &amp; legal review</strong> and document the prompt plus the final asset for audit.</div></div>
          <div class="step-warning"><strong>⚠️</strong> Scale budget gradually — roughly 10–20% at a time, waiting several days between changes. Aggressive jumps disrupt the learning phase and spike costs.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 10. INTERMEDIATE RESOURCES -->
<div class="slide" id="sec-intres"><div class="slide-header" onclick="toggleSection(this)"><div style="margin-bottom:6px"><span class="badge badge-intermediate">Intermediate</span></div><h2>🟡 10. Intermediate Training Resources</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">Self-paced, optional. Build on the fundamentals above.</p>
    <div class="card intermediate"><div class="card-title">Help Center — Custom Audiences &amp; Lookalikes <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Step-by-step on building Custom Audiences from website, customer list, engagement, and app — plus Lookalike best practices.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Audiences</span><span class="tag t4">Targeting</span></div><a href="https://www.facebook.com/business/help/341425252616329" target="_blank">→ Read "About Custom Audiences"</a></div>
    <div class="card intermediate"><div class="card-title">Help Center — Meta Pixel &amp; Conversions API Setup <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Complete guide to Pixel installation, event configuration, the Conversions API, and event match quality.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Pixel</span><span class="tag t4">CAPI</span></div><a href="https://www.facebook.com/business/help/952192354843755" target="_blank">→ Read "About Meta Pixel"</a></div>
    <div class="card intermediate"><div class="card-title">YouTube: Meta Ads Manager Intermediate Tutorials <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Walkthroughs covering audience setup, creative testing, A/B tests, attribution, and reporting.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=meta+ads+manager+tutorial+2026" target="_blank">→ Search YouTube: "Meta Ads Manager tutorial 2026"</a></div>
  </div>
</div>

<!-- 11. ADVANCED RESOURCES -->
<div class="slide" id="sec-advres"><div class="slide-header" onclick="toggleSection(this)"><div style="margin-bottom:6px"><span class="badge badge-advanced">Advanced</span></div><h2>🔴 11. Advanced Training Resources</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">Optional deep mastery — scaling, measurement, and automation.</p>
    <div class="card advanced"><div class="card-title">Help Center — About Advantage+ Sales Campaigns <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Official guidance on ASC setup, the existing-customer budget control, and measurement.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">Advantage+</span><span class="tag t4">Scaling</span></div><a href="https://www.facebook.com/business/help" target="_blank">→ Search "Advantage+ shopping" in Help Center</a></div>
    <div class="card advanced"><div class="card-title">Help Center — Aggregated Event Measurement <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">How to configure the 8 prioritized events per domain and verify your domain for iOS-era measurement.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">AEM</span><span class="tag t4">Privacy</span></div><a href="https://www.facebook.com/business/help/721422165168355" target="_blank">→ Read "About Aggregated Event Measurement"</a></div>
    <div class="card advanced"><div class="card-title">YouTube: Meta Ads Advanced Scaling Strategy <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Strategies for scaling spend, CBO vs ABO, bid strategies, and blended measurement.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=meta+ads+advanced+scaling+strategy+2026" target="_blank">→ Search YouTube: "Meta ads advanced scaling 2026"</a></div>
  </div>
</div>

<!-- 12. CERTIFICATIONS -->
<div class="slide" id="sec-certs"><div class="slide-header" onclick="toggleSection(this)"><h2>🏅 12. Certifications</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">Optional Meta Blueprint credentials that formally validate your media-buying skills.</p>
    <table class="cert-table">
      <thead><tr><th>Certification</th><th>Focus</th><th>Level</th></tr></thead>
      <tbody>
        <tr><td>Meta Certified Digital Marketing Associate</td><td>Core ads, campaign setup, measurement fundamentals</td><td>Beginner</td></tr>
        <tr><td>Meta Certified Media Buying Professional</td><td>Campaign structure, audiences, optimization, scaling</td><td>Intermediate / Advanced</td></tr>
        <tr><td>Meta Certified Marketing Science Professional</td><td>Measurement, attribution, experiments, data strategy</td><td>Advanced</td></tr>
      </tbody>
    </table>
    <div class="callout gray" style="margin-top:14px">💡 <strong>Optional Personal Investment:</strong> The certifications listed above are not covered by InvenTel and require an out-of-pocket fee to attempt the assessments or access the proctored exams. The learning content and study guides on Meta Blueprint can be explored at no cost, but earning the official badge or certification requires a paid assessment. These credentials are entirely optional — they are personal career development tools you can pursue on your own time if you'd like to formally validate your Meta Ads skills.</div>
    <p style="margin-top:10px">Free courses, study guides, and practice paths are at <a href="https://www.facebookblueprint.com" target="_blank">facebookblueprint.com</a>.</p>
  </div>
</div>

<!-- 13. NEW HIRE CHECKLIST -->
<div class="checklist-section mandatory" id="cl-mandatory"><div class="checklist-head mandatory"><h2>✅ New Hire Onboarding Checklist</h2><div class="ch-sub">Complete all mandatory tasks within your first 30 days</div><span class="ch-badge">Mandatory · 30-Day Deadline</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📱 Mobile App (OPTIONAL)</div><ul class="checklist-items">
      <li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Install <strong>Meta Ads Manager</strong> mobile app (iOS / Android) <span class="ci-est">Optional</span></div><div class="ci-desc">For monitoring live campaigns and pausing ads while away from your desk. Use the same Facebook account you use on desktop.</div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">⚠️ Access &amp; Security (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Request your ad account access list from your direct report <span class="ci-est">~5 min</span></div><div class="ci-desc">Which ad accounts you should have and your role on each.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Sign in at <code>business.facebook.com/settings</code> <span class="ci-est">~3 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Turn on <strong>two-factor authentication</strong> <span class="ci-est">~5 min</span></div><div class="ci-desc">Required for any account that touches an ad account — no exceptions.</div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Verify all assigned ad accounts appear with the correct role <span class="ci-est">~10 min</span></div><div class="ci-desc">Use the account switcher; escalate anything missing.</div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">🎯 Core Training (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete the <strong>Getting Started</strong> section, including setting an account spending limit <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Learn the <strong>Campaign / Ad set / Ad</strong> structure and the six objectives <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Verify the <strong>Meta Pixel</strong> is firing in Events Manager (Test Events) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Complete the beginner Ads Manager track on <strong>Meta Blueprint</strong> <span class="ci-est">~2 hrs</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Pass the <strong>New Hire Knowledge Check</strong> (70%+) <span class="ci-est">~15 min</span></div></div></li>
    </ul></div>
    <div class="checklist-footer">
      <div><div class="progress-label" id="lbl-mandatory">0 of 8 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-mandatory"></div></div></div>
      <div class="btn-row"><button class="reset-btn" onclick="resetList('mandatory')">Reset</button><button class="quiz-start-btn" onclick="startQuiz('mandatory')">📝 Take Quiz</button></div>
    </div>
  </div>
</div>

<!-- 14. INTERMEDIATE CHECKLIST -->
<div class="checklist-section intermediate" id="cl-intermediate"><div class="checklist-head intermediate"><h2>✅ Intermediate Learner Checklist</h2><div class="ch-sub">Self-paced — build on the fundamentals</div><span class="ch-badge">Self-Paced · Optional</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-intermediate">🟡 Skills</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Build a <strong>Custom Audience</strong> from website traffic and a customer list <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Create a <strong>1% Lookalike</strong> from your best source audience <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Set up <strong>Pixel + Conversions API</strong> and check event match quality <span class="ci-est">~45 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Customize reporting <strong>columns</strong> and save a preset with ROAS &amp; CPR <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Launch an <strong>Advantage+ Sales Campaign</strong> with proper exclusions <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Pass the <strong>Intermediate Knowledge Check</strong> (70%+) <span class="ci-est">~15 min</span></div></div></li>
    </ul></div>
    <div class="checklist-footer">
      <div><div class="progress-label" id="lbl-intermediate">0 of 6 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-intermediate"></div></div></div>
      <div class="btn-row"><button class="reset-btn" onclick="resetList('intermediate')">Reset</button><button class="quiz-start-btn" onclick="startQuiz('intermediate')">📝 Take Quiz</button></div>
    </div>
  </div>
</div>

<!-- 15. ADVANCED CHECKLIST -->
<div class="checklist-section advanced" id="cl-advanced"><div class="checklist-head advanced"><h2>✅ Advanced Learner Checklist</h2><div class="ch-sub">Deep mastery — scaling, measurement, automation</div><span class="ch-badge">Optional · Deep Mastery</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-advanced">🔴 Mastery</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Run a campaign with <strong>CBO</strong> and explain when you'd switch to <strong>ABO</strong> <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Configure <strong>Aggregated Event Measurement</strong> with Purchase as priority 1 <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Verify a <strong>domain</strong> in Business Settings <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Compare Meta-reported ROAS vs <strong>Triple Whale / GA4</strong> and document the gap <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Run a clean <strong>A/B test</strong> on a single variable <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Pass the <strong>Advanced Knowledge Check</strong> (70%+) <span class="ci-est">~15 min</span></div></div></li>
    </ul></div>
    <div class="checklist-footer">
      <div><div class="progress-label" id="lbl-advanced">0 of 6 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-advanced"></div></div></div>
      <div class="btn-row"><button class="reset-btn" onclick="resetList('advanced')">Reset</button><button class="quiz-start-btn" onclick="startQuiz('advanced')">📝 Take Quiz</button></div>
    </div>
  </div>
</div>

<!-- 16. QUICK REFERENCE -->
<div class="slide" id="sec-qr"><div class="slide-header" onclick="toggleSection(this)"><h2>🔗 16. Quick Reference</h2><span class="collapse-arrow">▼</span></div>
  <div class="slide-body">
    <p class="subtitle">Key URLs, help centers, and tutorial searches in one place.</p>
    <div class="qr-grid">
      <div class="qr-card"><h4>🌐 Platform URLs</h4><ul>
        <li><a href="https://www.facebook.com/adsmanager/manage/" target="_blank">Ads Manager</a></li>
        <li><a href="https://business.facebook.com/settings" target="_blank">Business Settings</a></li>
        <li><a href="https://www.facebook.com/events_manager2" target="_blank">Events Manager (Pixel/CAPI)</a></li>
        <li><a href="https://www.facebook.com/business/help" target="_blank">Business Help Center</a></li>
      </ul></div>
      <div class="qr-card"><h4>🎬 YouTube</h4><ul>
        <li><a href="https://www.youtube.com/results?search_query=meta+ads+manager+tutorial+for+beginners+2026" target="_blank">Beginner Tutorial</a></li>
        <li><a href="https://www.youtube.com/results?search_query=meta+ads+manager+tutorial+2026" target="_blank">Intermediate Tutorial</a></li>
        <li><a href="https://www.youtube.com/results?search_query=meta+ads+advanced+scaling+strategy+2026" target="_blank">Advanced Strategy</a></li>
      </ul></div>
      <div class="qr-card"><h4>📱 Mobile App</h4><ul>
        <li><a href="https://apps.apple.com/us/app/meta-ads-manager/id964397083" target="_blank">Meta Ads Manager — iOS</a></li>
        <li><a href="https://play.google.com/store/apps/details?id=com.facebook.adsmanager" target="_blank">Meta Ads Manager — Android</a></li>
      </ul></div>
    </div>
  </div>
</div>

<!-- FINAL NOTE -->
<div class="final-note" id="sec-final">
  <p style="font-size:15px;font-weight:700;margin-bottom:10px">📌 Final Note — Meta Ads Account Training</p>
  <p style="margin-bottom:10px">All <strong>Beginner-level content</strong> is <strong>mandatory</strong> within your first <strong>30 days</strong>. Intermediate and Advanced training is self-paced.</p>
  <p style="margin-bottom:10px"><strong>Multi-Brand Access:</strong> InvenTel manages multiple brand ad accounts under one Meta Business Portfolio. Your first step is always to confirm your access list with your direct report. Do not assume which accounts you need — verify, and escalate if anything is missing.</p>
  <p style="margin-bottom:10px"><strong>Two-factor authentication is required</strong> on any account that touches an ad account or admin permissions. No exceptions.</p>
  <p style="margin-bottom:10px"><strong>Spend safety:</strong> set an account spending limit, scale budgets gradually (10–20% at a time), and never change payment methods unless your role explicitly covers billing.</p>
  <p style="margin-bottom:10px">This deck is <strong>self-contained</strong> — every deep-dive includes complete step-by-step instructions. Click any section header to collapse it once you've completed it. External links and help centers are in the Quick Reference.</p>
  <p style="margin-bottom:10px">For access, credentials, or training questions — reach out to the <strong>HR Training Coordinator who assisted you during onboarding</strong>. They are your best point of contact for training questions and platform access.</p>
  <p style="margin-bottom:10px"><a href="https://www.facebook.com/business/help" target="_blank">Meta Business Help Center →</a></p>
  <p style="font-size:11px;opacity:.7;margin-top:14px">Last updated: April 6, 2025</p>
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

<!-- FLOATING NAV -->
<button class="float-nav-btn" onclick="toggleFloatNav()" title="Jump to section">📋</button>
<div class="float-nav-panel" id="float-nav">
  <div class="float-nav-hd">📋 Jump to Section</div>
  <ul class="float-nav-list">
    <li><a class="fnl-section" href="#sec-toc" onclick="closeNav()">📋 Table of Contents</a></li>
    <li><a class="fnl-section" href="#sec-overview" onclick="closeNav()">📘 1. Ads Account Overview</a></li>
    <li><a class="fnl-section" href="#sec-hub" onclick="closeNav()">🎓 2. Official Learning Hub</a></li>
    <li><a class="fnl-section" href="#sec-begres" onclick="closeNav()">🟢 3. Beginner Resources</a></li>
    <li><a class="fnl-section" href="#sec-start" onclick="closeNav()">🚀 4. Getting Started</a></li>
    <li><a class="fnl-section" href="#sec-structure" onclick="closeNav()">🏗️ 5. Campaign Structure</a></li>
    <li><a class="fnl-section" href="#sec-pixel" onclick="closeNav()">🎯 6. Pixel &amp; CAPI</a></li>
    <li><a class="fnl-section" href="#sec-audiences" onclick="closeNav()">👥 7. Audiences</a></li>
    <li><a class="fnl-section" href="#sec-reporting" onclick="closeNav()">📊 8. Reporting &amp; Attribution</a></li>
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

<script>
/* SECTION COLLAPSE/EXPAND */
function toggleSection(hd){hd.classList.toggle('collapsed');hd.nextElementSibling.classList.toggle('collapsed');}
function goTo(id){var el=document.getElementById(id);if(!el)return;var hd=el.querySelector('.slide-header');if(hd&&hd.classList.contains('collapsed')){hd.classList.remove('collapsed');hd.nextElementSibling.classList.remove('collapsed');}el.scrollIntoView({behavior:'smooth',block:'start'});}

/* FLOATING NAV */
function toggleFloatNav(){document.getElementById('float-nav').classList.toggle('open');}
function closeNav(){document.getElementById('float-nav').classList.remove('open');}

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
  var matchCount=0,firstMatchEl=null;
  var slides=searchRoot.querySelectorAll('.slide, .checklist-section');
  _searchPrevCollapsed=[];
  slides.forEach(function(slide){
    var hd=slide.querySelector('.slide-header');
    var body=slide.querySelector('.slide-body')||slide.querySelector('.checklist-body');
    if(!body)return;
    var matches=highlightTextNodes(body,query);
    matchCount+=matches;
    if(matches>0){
      if(hd&&hd.classList.contains('collapsed')){_searchPrevCollapsed.push(hd);hd.classList.remove('collapsed');body.classList.remove('collapsed');}
      if(!firstMatchEl)firstMatchEl=body.querySelector('mark.search-match');
    }
  });
  if(matchCount===0){countEl.textContent='No matches';countEl.style.color='#fde2e2';}
  else{countEl.textContent=matchCount+(matchCount===1?' match':' matches');countEl.style.color='#fcd9b6';}
  if(firstMatchEl)firstMatchEl.scrollIntoView({behavior:'smooth',block:'center'});
}
function highlightTextNodes(root,query){
  var count=0;var regex=new RegExp('('+escapeRegex(query)+')','gi');
  var walker=document.createTreeWalker(root,NodeFilter.SHOW_TEXT,null,false);
  var nodes=[],node;
  while((node=walker.nextNode())){if(node.nodeValue.trim())nodes.push(node);}
  nodes.forEach(function(n){
    if(!regex.test(n.nodeValue))return;regex.lastIndex=0;
    var span=document.createElement('span');
    span.innerHTML=n.nodeValue.replace(regex,'<mark class="search-match">$1</mark>');
    count+=span.querySelectorAll('mark.search-match').length;
    n.parentNode.replaceChild(span,n);
  });
  return count;
}
function clearHighlights(){
  document.querySelectorAll('mark.search-match').forEach(function(m){
    var p=m.parentNode;p.replaceChild(document.createTextNode(m.textContent),m);p.normalize();
  });
}
function clearDeckSearch(){document.getElementById('deck-search').value='';deckSearch('');}
function escapeRegex(str){return str.replace(/[.*+?^${}()|[\]\\]/g,'\\$1');}
document.addEventListener('keydown',function(e){
  var inp=document.getElementById('deck-search');
  if(e.key==='/'&&document.activeElement.tagName!=='INPUT'&&document.activeElement.tagName!=='TEXTAREA'){e.preventDefault();inp.focus();}
  if(e.key==='Escape'&&document.activeElement===inp){clearDeckSearch();inp.blur();}
});

/* CHECKLIST */
var TOTALS={mandatory:8,intermediate:6,advanced:6};
function tick(el,section){el.classList.toggle('checked');updateBar(section);}
function updateBar(section){
  var container=document.getElementById('cl-'+section);
  var checked=container.querySelectorAll('.cb.checked:not([data-optional])').length;
  var total=TOTALS[section];
  var pct=total>0?Math.round((checked/total)*100):0;
  document.getElementById('lbl-'+section).textContent=checked+' of '+total+' completed';
  document.getElementById('bar-'+section).style.width=pct+'%';
}
function resetList(section){
  var container=document.getElementById('cl-'+section);
  container.querySelectorAll('.cb.checked').forEach(function(cb){cb.classList.remove('checked');});
  updateBar(section);
}

/* QUIZ STATE */
var qSection,qIndex,qScore,qAnswered,qQuestions;

/* QUIZ BANKS */
var QUIZ={
mandatory:{title:'New Hire Path',sub:'Beginner · 20 Questions · Pass = 70%',hd:'q-mandatory',track:'New Hire — Meta Ads Account',qs:20,questions:[
{q:'What is a Meta ad account?',opts:['A type of ad','The container holding your campaigns, billing, spending limits, Pixel, and saved audiences','A Facebook Page','A reporting dashboard only'],ans:1},
{q:'Where do all of InvenTel\'s brand ad accounts live?',opts:['In separate logins','Inside one Meta Business Portfolio (Business Manager)','In Ads Manager only','On each brand\'s website'],ans:1},
{q:'What is your first step on day one?',opts:['Build a campaign','Confirm your ad account access list with your direct report','Set a budget','Install the Pixel'],ans:1},
{q:'Where do you build, launch, and monitor paid campaigns?',opts:['Events Manager','Ads Manager','Business Settings','Commerce Manager'],ans:1},
{q:'What are the three nested levels of a campaign?',opts:['Plan / Build / Launch','Campaign / Ad set / Ad','Brand / Region / Audience','Goal / Budget / Result'],ans:1},
{q:'Which level sets the objective?',opts:['Ad set','Campaign','Ad','Account'],ans:1},
{q:'Which level controls audience, placements, budget, and schedule?',opts:['Campaign','Ad set','Ad','Pixel'],ans:1},
{q:'Which level is the creative people actually see?',opts:['Campaign','Ad set','Ad','Audience'],ans:2},
{q:'What is required on any account that touches an ad account?',opts:['Nothing','Two-factor authentication','A second email','A mobile app'],ans:1},
{q:'Where do you turn on two-factor authentication?',opts:['Ads Manager → Reports','Business Settings → Security Center → Two-factor authentication','Events Manager','The mobile app only'],ans:1},
{q:'Why confirm the ad account name and ID before clicking Create?',opts:['Just etiquette','Working in the wrong ad account is a common and costly mistake','It is required by law','It triggers an alert'],ans:1},
{q:'What protects against runaway spend across the whole account?',opts:['Per-ad budget','The account spending limit','Pausing ads','Nothing'],ans:1},
{q:'What is the Meta Pixel?',opts:['A creative format','Tracking code on your website that records visitor actions and feeds them to Meta','A reporting metric','A type of audience'],ans:1},
{q:'Where do you verify the Pixel is firing?',opts:['Ads Manager → Reports','Events Manager → Test Events','Business Settings','Insights'],ans:1},
{q:'What is a recommended campaign naming convention?',opts:['Random names','[Brand]_[Objective]_[Audience]_[Date]','Timestamps only','Abbreviations only'],ans:1},
{q:'Which objective should you use when the goal is purchases/revenue?',opts:['Traffic','Sales (with the Purchase event)','Awareness','Engagement'],ans:1},
{q:'What is the most common objective mistake?',opts:['Using Sales','Choosing Traffic when you actually want purchases','Using Leads','Using Awareness'],ans:1},
{q:'What is "Reach" vs "Impressions"?',opts:['They are identical','Reach = unique people; Impressions = total times shown','Reach is paid only','Impressions are organic only'],ans:1},
{q:'Who do you contact for access or training questions?',opts:['Meta support directly','The HR Training Coordinator who assisted you during onboarding','Another team member','Facebook customer service'],ans:1},
{q:'When is mandatory (beginner) training due?',opts:['Within 90 days','Within your first 30 days','No deadline','Within 7 days'],ans:1},
{q:'What does ROAS measure?',opts:['Reach over ad spend','Revenue divided by ad spend','Rate of ad starts','Reach of all surfaces'],ans:1},
{q:'What should you do if an assigned ad account is missing from the switcher?',opts:['Build anyway','Stop and escalate to your direct report','Create a new account','Ignore it'],ans:1},
{q:'Where do you open Ads Manager?',opts:['business.facebook.com/settings','facebook.com/adsmanager/manage','events_manager2','Commerce Manager'],ans:1}
]},
intermediate:{title:'Intermediate Path',sub:'Intermediate · 20 Questions · Pass = 70%',hd:'q-intermediate',track:'Intermediate — Meta Ads Account',qs:20,questions:[
{q:'What is a Custom Audience?',opts:['A purchased audience','An audience built from your own data: customer list, website visits, app, or engagement','A demographic auto-segment','An A/B test'],ans:1},
{q:'Where do you build Custom Audiences?',opts:['Settings → Users','All Tools → Audiences → Create audience → Custom audience','Ads Manager → Reports','You cannot build them'],ans:1},
{q:'What is a Lookalike Audience?',opts:['Identical to a Custom Audience','A new audience similar to a strong source audience, found by Meta\'s modeling','A duplicate ad set','A boosted-post audience'],ans:1},
{q:'Which Lookalike percentage is the closest match (smallest pool)?',opts:['10%','5%','1%','0.1%'],ans:2},
{q:'What are the six campaign objectives?',opts:['Plan, Build, Launch, Test, Scale, Report','Awareness, Traffic, Engagement, Leads, App promotion, Sales','Reach, Clicks, Likes, Sales, Leads, Video','Brand, Direct, Retarget, Prospect, Scale, Test'],ans:1},
{q:'What is the difference between daily and lifetime budgets?',opts:['No difference','Daily = average per day; Lifetime = total across the schedule (enables dayparting)','Lifetime is per ad','Daily is campaign-only'],ans:1},
{q:'What is the learning phase?',opts:['A free trial','A period after launch/major edit where an ad set stabilizes after ~50 weekly optimization events','A reporting view','A bidding type'],ans:1},
{q:'What usually causes "Learning Limited"?',opts:['Too much budget','Budget or audience too small to gather ~50 weekly events','A creative error','A billing issue'],ans:1},
{q:'What is the Conversions API (CAPI)?',opts:['A type of ad','Server-side event tracking that sends data directly to Meta, bypassing browser blockers and iOS limits','A reporting tool','A creative format'],ans:1},
{q:'Why run Pixel + CAPI together?',opts:['It is not recommended','Higher event match quality, deduplication, better optimization, and resilience to browser changes','Required by law','To slow the site'],ans:1},
{q:'What does event match quality (EMQ) reflect?',opts:['Ad relevance','How well events are matched to people; raised by passing more customer parameters','Budget efficiency','Creative score'],ans:1},
{q:'In 2026, how are detailed-targeting inputs treated for most objectives?',opts:['Hard filters','Suggestions/hints the algorithm can expand beyond','Disabled','Required'],ans:1},
{q:'What does Advantage+ Audience do?',opts:['Demographic targeting only','Uses your inputs as a starting hint, then expands to better-converting people','Manual interest targeting','A Lookalike only'],ans:1},
{q:'How do you customize reporting columns?',opts:['Cannot customize','Above the table → Columns → Customize columns (save as a preset)','Through Settings','Export only'],ans:1},
{q:'What does a Breakdown do in reporting?',opts:['Deletes data','Splits results by age, gender, placement, platform, or time','Exports to CSV','Resets attribution'],ans:1},
{q:'What format can Ads reporting export to?',opts:['JSON only','CSV (and scheduled email reports)','XLSX only','PDF only'],ans:1},
{q:'What is Advantage+ Placements?',opts:['A manual placement picker','Letting Meta place your ad across all eligible surfaces for efficient delivery','A reporting metric','A bidding strategy'],ans:1},
{q:'What does the ASC existing-customer setting control?',opts:['Blocks them entirely','How much budget goes to current customers vs new-customer acquisition','Sends them email','Auto-excludes them'],ans:1},
{q:'When setting up an Advantage+ Sales Campaign, why won\'t you see detailed audience targeting?',opts:['It\'s a bug','By design — the AI handles audience automatically','You lack permission','It was removed entirely'],ans:1},
{q:'What is a good practice when launching a prospecting ASC?',opts:['Include all customers','Add exclusions so prospecting focuses on new people','Use one creative','Skip the Pixel'],ans:1},
{q:'What is the backbone of retargeting?',opts:['Lookalikes','Website and customer-list Custom Audiences','Broad targeting','Awareness campaigns'],ans:1},
{q:'Where do you create a Lookalike Audience?',opts:['Reports','Audiences → Create audience → Lookalike audience','Events Manager','Billing'],ans:1}
]},
advanced:{title:'Advanced Mastery',sub:'Advanced · 20 Questions · Pass = 70%',hd:'q-advanced',track:'Advanced Mastery — Meta Ads Account',qs:20,questions:[
{q:'What is CBO (Advantage+ Campaign Budget)?',opts:['A bidding type','A budget set at the campaign level that Meta distributes across ad sets dynamically','A manual per-ad budget','Not possible'],ans:1},
{q:'When would you use ABO instead of CBO?',opts:['Always','When you must force spend onto specific audiences (e.g., prospecting vs retargeting split)','When budget is unlimited','For awareness only'],ans:1},
{q:'What is the default attribution window in Ads Manager?',opts:['1-day click','7-day click + 1-day view','30-day click','28-day click + 1-day view'],ans:1},
{q:'Why pick one attribution window and stay consistent?',opts:['It is required','Different windows produce different measured ROAS','It speeds up reporting','It changes bidding'],ans:1},
{q:'What does Aggregated Event Measurement (AEM) do?',opts:['Reports totals','Manages up to 8 prioritized conversion events per verified domain for iOS 14.5+ privacy','Aggregates ads','Tracks mobile only'],ans:1},
{q:'What event should be priority 1 in AEM?',opts:['PageView','Purchase (highest-value, post-purchase signal)','Add to Cart','Lead'],ans:1},
{q:'How do you verify a domain?',opts:['Cannot verify','Business Settings → Brand Safety → Domains → Add, then DNS TXT, meta-tag, or HTML file upload','Through the Pixel only','Meta auto-verifies'],ans:1},
{q:'Why are Meta-reported conversions often higher than GA4 or Triple Whale?',opts:['Meta is wrong','Different attribution models — Meta credits view-through and clicks within its window','GA4 is broken','Triple Whale counts Shopify only'],ans:1},
{q:'What is best practice for using Meta vs Triple Whale/GA4 data?',opts:['Pick whichever is higher','Use Meta as the optimization signal and Triple Whale/GA4 as truth for blended decisions','Always pick GA4','Always pick Meta'],ans:1},
{q:'What is Advantage+ Sales Campaign (ASC)?',opts:['A free trial','An AI-driven campaign automating audience, placements, budget, and creative — supports Sales, Leads, and App Installs','A manual campaign type','A reporting view'],ans:1},
{q:'How should you scale spend on a learning campaign?',opts:['Double it overnight','Gradually, ~10–20% at a time, waiting several days between changes','Set the max possible','Never change it'],ans:1},
{q:'What is Advantage+ Audience expansion based on?',opts:['Random selection','Your inputs as suggestions, expanding when better-performing users are found','Only Lookalikes','Manual interests only'],ans:1},
{q:'What is the difference between Audience Suggestions and Audience Controls?',opts:['No difference','Suggestions = soft hints the AI can ignore; Controls = hard rules (min age, country exclusions, excluded audiences)','Controls are deprecated','Suggestions are paid'],ans:1},
{q:'What bid strategy gives the most manual control?',opts:['Highest volume','Bid cap','Cost per result goal','ROAS goal'],ans:1},
{q:'What does the Highest Volume bid strategy do?',opts:['Caps spend','Spends the budget to get the maximum results','Targets a fixed CPA','Targets a fixed ROAS'],ans:1},
{q:'What is the recommended creative variety per ad set for AI optimization?',opts:['1 is enough','At least 3–5 distinct creatives','50+ creatives','One per audience'],ans:1},
{q:'Why preview Advantage+ Creative auto-edits per placement?',opts:['Just optional','Auto-edits sometimes look awkward (distorted logos, clashing music) on specific surfaces','They always look perfect','Required by law'],ans:1},
{q:'What is required for AI-generated copy/images in regulated categories (health, finance)?',opts:['No review','Brand & legal review; document the prompt and final asset for audit','Auto-publish','Cannot use AI at all'],ans:1},
{q:'What is the purpose of the built-in A/B test tool?',opts:['To duplicate ads','To test one variable (creative, audience, placement) with a clean, non-overlapping split','To set budgets','To verify the Pixel'],ans:1},
{q:'As of 2026, how are the manual and Advantage+ campaign flows arranged?',opts:['Two separate systems','Unified into one flow, with AI recommendations on by default','Advantage+ removed','Manual removed'],ans:1},
{q:'Roughly how many weekly optimization events stabilize an ad set\'s learning phase?',opts:['10','25','50','500'],ans:2},
{q:'What does ROAS goal bidding do?',opts:['Caps impressions','Steers delivery toward a target return on ad spend','Sets a daily cap','Disables optimization'],ans:1}
]}
};

/* QUIZ ENGINE */
function startQuiz(s){qSection=s;qIndex=0;qScore=0;qAnswered=false;var d=QUIZ[s];qQuestions=shuffle(d.questions.slice()).slice(0,d.qs);document.getElementById('quiz-hd').className='quiz-hd '+d.hd;document.getElementById('quiz-title').textContent='📝 '+d.title+' — Knowledge Check';document.getElementById('quiz-hd-sub').textContent=d.sub;document.getElementById('quiz-body').style.display='block';document.getElementById('quiz-result').style.display='none';document.getElementById('quiz-overlay').style.display='block';renderQ();}
function shuffle(a){for(var i=a.length-1;i>0;i--){var j=Math.floor(Math.random()*(i+1));var t=a[i];a[i]=a[j];a[j]=t;}return a;}
function renderQ(){var q=qQuestions[qIndex],tot=qQuestions.length,pct=Math.round((qIndex/tot)*100);document.getElementById('quiz-prog-bar').style.width=pct+'%';document.getElementById('quiz-prog-lbl').textContent='Question '+(qIndex+1)+' of '+tot;document.getElementById('quiz-q-num').textContent='Question '+(qIndex+1)+' of '+tot;document.getElementById('quiz-q-text').textContent=q.q;document.getElementById('quiz-score-live').textContent='Score: '+qScore+'/'+qIndex;document.getElementById('quiz-next-btn').disabled=true;document.getElementById('quiz-next-btn').textContent=qIndex<tot-1?'Next →':'See Results';var fb=document.getElementById('quiz-feedback');fb.style.display='none';fb.className='quiz-feedback';qAnswered=false;var c=document.getElementById('quiz-options');c.innerHTML='';q.opts.forEach(function(opt,i){var b=document.createElement('button');b.className='quiz-opt';b.textContent=opt;b.onclick=function(){selectA(i,b);};c.appendChild(b);});}
function selectA(ch,btn){if(qAnswered)return;qAnswered=true;var q=qQuestions[qIndex],co=q.ans;var opts=document.getElementById('quiz-options').querySelectorAll('.quiz-opt');var fb=document.getElementById('quiz-feedback');opts.forEach(function(o){o.onclick=null;});if(ch===co){qScore++;btn.classList.add('correct');fb.className='quiz-feedback correct';fb.textContent='✓ Correct!';fb.style.display='block';}else{btn.classList.add('wrong');opts[co].classList.add('show-correct');fb.className='quiz-feedback incorrect';fb.textContent='✗ Incorrect — correct: '+q.opts[co];fb.style.display='block';}document.getElementById('quiz-score-live').textContent='Score: '+qScore+'/'+(qIndex+1);document.getElementById('quiz-next-btn').disabled=false;}
function quizNext(){if(qIndex<qQuestions.length-1){qIndex++;renderQ();}else{showResults();}}
function showResults(){var tot=qQuestions.length,pct=Math.round((qScore/tot)*100);document.getElementById('quiz-body').style.display='none';document.getElementById('quiz-result').style.display='block';document.getElementById('quiz-prog-bar').style.width='100%';document.getElementById('quiz-prog-lbl').textContent='Complete';if(pct>=70){document.getElementById('quiz-pass-screen').style.display='block';document.getElementById('quiz-fail-screen').style.display='none';document.getElementById('qr-pass-sub').textContent='You scored '+pct+'% — '+qScore+' of '+tot+' correct';document.getElementById('qr-score-val').textContent=pct+'%';document.getElementById('qr-correct-val').textContent=qScore+'/'+tot;document.getElementById('qr-date-val').textContent=new Date().toLocaleDateString('en-US',{month:'short',day:'numeric',year:'numeric'});document.getElementById('qr-track-val').textContent=QUIZ[qSection].track;var ch=document.getElementById('qr-congrats-hd');if(qSection==='mandatory'){ch.style.background='linear-gradient(135deg,#166534,#15803d)';document.querySelector('.quiz-result-congrats-sub').style.color='#bbf7d0';}else if(qSection==='intermediate'){ch.style.background='linear-gradient(135deg,#854d0e,#a16207)';document.querySelector('.quiz-result-congrats-sub').style.color='#fef9c3';}else{ch.style.background='linear-gradient(135deg,#991b1b,#7f1d1d)';document.querySelector('.quiz-result-congrats-sub').style.color='#fde2e2';}}else{document.getElementById('quiz-pass-screen').style.display='none';document.getElementById('quiz-fail-screen').style.display='block';document.getElementById('qr-fail-score').textContent=pct+'%';document.getElementById('qr-fail-sub').textContent=qScore+' of '+tot+' correct';var ms=['Review the materials and try again.','Focus on areas where you felt unsure.','No limit on retakes!'];document.getElementById('qr-fail-msg').textContent=ms[Math.floor(Math.random()*ms.length)];}}
function retakeQuiz(){startQuiz(qSection);}
function closeQuiz(){document.getElementById('quiz-overlay').style.display='none';}
function printCard(){window.print();}
</script>
<?php bh_back_to_index_button('training-hub-index', 'All Trainings'); ?>
</body>
</html>
