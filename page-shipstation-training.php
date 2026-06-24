<?php /* Template Name: ShipStation Training */ ?>
<?php
>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>InvenTel — ShipStation Training (Self-Contained) v3.1</title>
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
.callout.red{background:#fef2f2;border-left-color:#991b1b}.callout.red strong{color:#991b1b}
.callout.green{background:#f0fdf4;border-left-color:#16a34a}.callout.green strong{color:#166534}
.callout.gray{background:#f0f0ee;border-left-color:#999}.callout.gray strong{color:#3a3a3a}
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
.sop-table{width:100%;border-collapse:collapse;font-size:12.5px;margin:12px 0}
.sop-table th{background:#2d0000;color:#fcd9b6;text-align:left;padding:8px 10px;font-weight:700;font-size:11px;text-transform:uppercase;letter-spacing:.5px}
.sop-table td{padding:8px 10px;border-bottom:1px solid #e5e5e0;color:#1a1a1a;vertical-align:top}
.sop-table tr:nth-child(even) td{background:#fafaf8}
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
      <div class="header-h1">📦 ShipStation — Self-Contained Training Guide</div>
      <div class="header-subtitle">Complete step-by-step training for the New ShipStation layout: connecting multiple Shopify stores, manual rate shopping & cheapest-carrier selection, printing labels, international shipping & customs, reports, and the InvenTel shipping SOP — click any section header to collapse/expand</div>
    </div>
    <div class="header-meta">All Levels (Beginner → Advanced)<br>Platform: ShipStation (New Layout)<br>Format: Self-Contained / Standalone<br><span style="color:#fcd9b6;font-weight:700">v3.1 — Search Bar Edition</span></div>
  </div>
</div>
<div class="stat-row">
  <div class="stat-item"><span class="stat-val">6</span><span class="stat-lbl">Core Areas</span></div>
  <div class="stat-item"><span class="stat-val">17+</span><span class="stat-lbl">Training Sections</span></div>
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Skill Levels</span></div>
  <div class="stat-item"><span class="stat-val">30 Days</span><span class="stat-lbl">Mandatory Window</span></div>
  <div class="stat-item"><span class="stat-val">InvenTel SOP</span><span class="stat-lbl">Shipping Procedure</span></div>
  <div class="stat-item"><span class="stat-val">Standalone</span><span class="stat-lbl">No External Links Required</span></div>
</div>
<div class="mandatory-bar">⚠️ All Beginner-level content AND the InvenTel Shipping SOP in this deck are MANDATORY and must be completed within your first 30 days. Completion is tracked and reported to your manager.</div>

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
      <div class="toc-item" onclick="goTo('sec-overview')">1. Platform Overview<span>What ShipStation is + which version you're on</span></div>
      <div class="toc-item" onclick="goTo('sec-hub')">2. Official Learning Hub<span>ShipStation Help Center & Community</span></div>
      <div class="toc-item" onclick="goTo('sec-begres')">3. Beginner Training Resources<span>Mandatory — external resources</span></div>
      <div class="toc-item" onclick="goTo('sec-start')">4. Getting Started — First Day Setup<span>Sign in, version check, multi-store access</span></div>
      <div class="toc-item" onclick="goTo('sec-sop')">5. ⭐ InvenTel Shipping SOP<span>MANDATORY — cheapest carrier + international checks</span></div>
      <div class="toc-item" onclick="goTo('sec-stores')">6. Stores & Order Import Deep Dive<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-rates')">7. Rates, Carriers & Label Printing<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-intl')">8. International Shipping & Customs<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-reports')">9. Reports & Insights<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-automation')">10. Automation & Rate Shopper<span>Automation rules + AI rate selection</span></div>
      <div class="toc-item" onclick="goTo('sec-intres')">11. Intermediate Resources<span>Self-paced, optional links</span></div>
      <div class="toc-item" onclick="goTo('sec-advres')">12. Advanced Resources<span>Optional deep mastery links</span></div>
      <div class="toc-item" onclick="goTo('sec-certs')">13. Certifications<span>Verified skills & learning</span></div>
      <div class="toc-item" onclick="goTo('cl-mandatory')">14. New Hire Onboarding Checklist<span>Mandatory tasks + quiz</span></div>
      <div class="toc-item" onclick="goTo('cl-intermediate')">15. Intermediate Learner Checklist<span>Self-paced tasks + quiz</span></div>
      <div class="toc-item" onclick="goTo('cl-advanced')">16. Advanced Learner Checklist<span>Deep mastery + quiz</span></div>
      <div class="toc-item" onclick="goTo('sec-qr')">17. Quick Reference<span>URLs, help center, YouTube</span></div>
    </div>
  </div>
</div>

<!-- 1. PLATFORM OVERVIEW -->
<div class="slide" id="sec-overview"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-official">Overview</span></div><h2>📦 1. Platform Overview — What ShipStation Is</h2><p class="subtitle">Where ShipStation fits in InvenTel's order flow, and how to tell which version you're using.</p></div>
  <div class="slide-body">
    <p>ShipStation is a web-based shipping platform that pulls in orders from all of InvenTel's connected sales channels (our Shopify brand stores), lets you compare carrier rates, print shipping labels and customs forms, and send tracking back to each store automatically. It is the central hub where every order becomes a printed label.</p>
    <p><strong>How ShipStation fits our workflow:</strong> Orders are placed in our Shopify stores → they import automatically into ShipStation → you select the cheapest appropriate carrier for each order → you verify and print the label (and customs form for international) → tracking flows back to Shopify and the customer is notified.</p>
    <div class="platform-url">
      <strong>New ShipStation login:</strong> <a href="https://app.shipstation.com" target="_blank">app.shipstation.com</a><br>
      <strong>Legacy login:</strong> <a href="https://ship.shipstation.com" target="_blank">ship.shipstation.com</a><br>
      <strong>Help Center:</strong> <a href="https://help.shipstation.com" target="_blank">help.shipstation.com</a>
    </div>
    <h3 style="font-size:13px;color:#2d0000;text-transform:uppercase;letter-spacing:.5px;margin:14px 0 6px">Core capabilities you'll use</h3>
    <div class="apps-grid">
      <span class="app-chip">Order import (multi-store)</span>
      <span class="app-chip">Rate comparison</span>
      <span class="app-chip">Label & customs printing</span>
      <span class="app-chip">Rate Shopper</span>
      <span class="app-chip">Automation rules</span>
      <span class="app-chip">Tracking sync</span>
      <span class="app-chip">Insights & reports</span>
      <span class="app-chip">Scan to Print / Verify</span>
    </div>
    <div class="callout"><strong>Which version am I on? (Do this first.)</strong> ShipStation has two interfaces: the <strong>New Layout</strong> (the current standard, at <code>app.shipstation.com</code>) and <strong>ShipStation Legacy</strong> (at <code>ship.shipstation.com</code>). The fastest tell is the URL after login. Visual cues: the New Layout has a clean left-hand vertical sidebar; Legacy uses a denser top tab bar. In the account menu (top-right) you'll see a toggle — if it offers "Try the new ShipStation," you're on Legacy; if it offers "Return to Legacy," you're on the New Layout.</div>
    <div class="callout green"><strong>This deck targets the New Layout.</strong> Most steps are identical in Legacy, but a few features (Rate Shopper, Scan to Verify, Checkout Rates) are New-Layout only. Where a step differs, a note calls it out. If your team is on Legacy, confirm with your direct report before following New-Layout-only steps. Note: all users on an account must use the same layout.</div>
  </div>
</div>

<!-- 2. OFFICIAL LEARNING HUB -->
<div class="slide" id="sec-hub"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official ShipStation</span></div><h2>🎓 2. Official Learning Hub — Help Center & Community</h2><p class="subtitle">Beginner-level resources are MANDATORY within 30 days.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">ShipStation Help Center <span class="badge badge-mandatory">Mandatory</span> <span class="badge badge-official">Official</span></div><div class="card-desc">ShipStation's primary reference — step-by-step guides for every feature, from connecting stores and configuring shipments to customs declarations and reports.</div><div class="card-meta"><strong>Format:</strong> Guides + Documentation &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">All Features</span><span class="tag t2">Reference</span></div><a href="https://help.shipstation.com" target="_blank">→ Visit the ShipStation Help Center</a></div>
    <div class="card"><div class="card-title">Moving from Legacy to the New Layout — Guide <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official overview of what changed in the New Layout vs Legacy: navigation, Scan to Print/Verify, Split Shipment, pinnable columns, and more. Read this to confirm where each feature lives.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">New Layout</span></div><a href="https://help.shipstation.com/hc/en-us/articles/48668385552027-Feature-Updates-in-ShipStation-s-New-Layout" target="_blank">→ Read the New Layout feature guide</a></div>
    <div class="card"><div class="card-title">ShipStation Community Forum <span class="badge badge-official">Official</span></div><div class="card-desc">Interact with and learn from other ShipStation merchants. Useful for real-world workflow tips, carrier quirks, and integration troubleshooting.</div><div class="card-meta"><strong>Format:</strong> Community &nbsp;|&nbsp; <strong>Level:</strong> All</div><div class="tag-row"><span class="tag t4">Community</span><span class="tag t2">Tips</span></div><a href="https://community.shipstation.com" target="_blank">→ Visit the ShipStation Community</a></div>
  </div>
</div>

<!-- 3. BEGINNER TRAINING RESOURCES -->
<div class="slide" id="sec-begres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory — Complete Within 30 Days</span></div><h2>🟢 3. Beginner Training — Mandatory Resources</h2><p class="subtitle">Every team member must complete these before the 30-day mark.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Help Center — Create & Print Your First Label <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Official walkthrough of selecting an order, entering weight and package details, choosing a service, and printing your first label.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Getting Started</span><span class="tag t4">Labels</span></div><a href="https://help.shipstation.com/hc/en-us/articles/360026156831-Create-Print-Your-First-Label" target="_blank">→ Read: Create & Print Your First Label</a></div>
    <div class="card"><div class="card-title">Help Center — Configure Shipping <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">How the Configure Shipment Widget works: Ship From, weight, service, package type, dimensions, and the Rate Calculator. This is the screen you'll use on every order.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">Shipping</span></div><a href="https://help.shipstation.com/hc/en-us/articles/360026157591-Configure-Shipping" target="_blank">→ Read: Configure Shipping</a></div>
    <div class="card"><div class="card-title">Help Center — Compare Rates with the Rate Browser <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">How to view rates across multiple carriers and services for a shipment so you can pick the cheapest appropriate option. Core to InvenTel's manual rate-selection SOP.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~20 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t4">Rates</span></div><a href="https://help.shipstation.com/hc/en-us/articles/360026157611-Compare-Rates" target="_blank">→ Read: Compare Rates</a></div>
    <div class="card"><div class="card-title">YouTube: ShipStation Tutorial for Beginners <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">Visual walkthrough of the ShipStation interface. Best for visual learners who want to see every click in the order-to-label flow.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Est. Time:</strong> ~45 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=shipstation+new+layout+tutorial+for+beginners+2026" target="_blank">→ Search YouTube: "ShipStation new layout tutorial for beginners 2026"</a></div>
    <div class="card"><div class="card-title">Help Center — Customs Declarations <span class="badge badge-mandatory">Mandatory</span></div><div class="card-desc">How ShipStation creates customs declarations for international orders, where to view/edit them, and the HS code requirements you must meet before printing.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Beginner</div><div class="tag-row"><span class="tag t1">Official</span><span class="tag t3">International</span></div><a href="https://help.shipstation.com/hc/en-us/articles/360025869952-Customs-Declarations" target="_blank">→ Read: Customs Declarations</a></div>
  </div>
</div>

<!-- 4. GETTING STARTED -->
<div class="slide" id="sec-start"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⚠️ Mandatory</span></div><h2>🟢 4. Getting Started — Your First Day with ShipStation</h2><p class="subtitle">Complete these steps in order to verify your access, confirm your version, and learn the layout.</p></div>
  <div class="slide-body">
    <div class="steps-box"><h4>⚠️ Step 0 — Confirm Your Access & Store List</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Request your access details</strong> from your direct report. Ask: "Which ShipStation account/login do I use, which brand stores are connected, and what permissions (user role) should I have?"</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">You should receive: the <strong>login email</strong>, confirmation of <strong>which connected stores</strong> you handle, and <strong>your user role</strong> (some roles can print labels, refund labels, edit settings, etc.).</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Keep this list — you'll verify each connected store and your permissions in the steps below.</div></div>
      <div class="step-warning"><strong>⚠️ Critical:</strong> Do not create labels or change account settings until your access is confirmed. If your direct report is unavailable, contact the HR Training Coordinator who assisted you during onboarding.</div>
    </div>
    <div class="steps-box"><h4>🔐 Sign In to ShipStation</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Open a browser and go to <a href="https://app.shipstation.com" target="_blank">app.shipstation.com</a> (New Layout). If your team uses Legacy, go to <a href="https://ship.shipstation.com" target="_blank">ship.shipstation.com</a> instead.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Enter the <strong>email</strong> and <strong>password</strong> provided. If this is your first login, use the invitation email link to set your password.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">If prompted, complete <strong>two-factor authentication</strong> (recommended: authenticator app).</div></div>
      <div class="step-tip"><strong>💡 Tip:</strong> Bookmark the login page. ShipStation is browser-based — there is no separate desktop app required, though ShipStation Connect is used for printer/scale connections (see below).</div>
    </div>
    <div class="steps-box"><h4>🔎 Confirm Which Version You're On</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Look at the URL after login: <code>app.shipstation.com</code> = <strong>New Layout</strong>; <code>ship.shipstation.com</code> = <strong>Legacy</strong>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Open the <strong>account menu</strong> (top-right). If you see <span class="step-nav">Try the new ShipStation</span> you're on Legacy; if you see an option to return to Legacy, you're on the New Layout.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Note your version and tell your direct report if it doesn't match the rest of the team — all users on one account must use the same layout.</div></div>
    </div>
    <div class="steps-box"><h4>✅ Verify Connected Stores & Your Permissions</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Go to <span class="step-nav">Settings → Selling Channels → Store Setup</span> (New Layout) to see every connected store. Compare against the list from your direct report.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Open the <span class="step-nav">Orders</span> tab. Use the <strong>store filter</strong> at the top of the grid to confirm you can see orders from each brand store you handle.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Confirm your user role under <span class="step-nav">Settings → Account → Users</span> (visibility depends on your permission level). Verify you can do what your job needs (e.g., create labels).</div></div>
      <div class="step-warning"><strong>⚠️</strong> Do NOT add yourself or other users, connect new stores, or change carrier settings. All access and configuration changes go through your direct report or account admin.</div>
    </div>
    <div class="steps-box"><h4>🧭 Learn the New Layout</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Left sidebar:</strong> main navigation — Orders, Shipments, Products, Customers, Insights/Reports, and Settings.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Orders grid:</strong> the list of imported orders. The <strong>Configure Shipment Widget</strong> (shipping sidebar) is where you set Ship From, weight, package, service, and rates.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Filters & store dropdown:</strong> filter the grid by store, tag, status, country, and more — you'll use the store and country filters constantly.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text"><strong>Settings:</strong> stores, carriers, packages, automation rules, international settings, printing. You'll mostly read these, not change them.</div></div>
      <div class="step-tip"><strong>💡</strong> Open the <span class="step-nav">Help → Hotkeys</span> menu for a full list of keyboard shortcuts that speed up the order-to-label flow.</div>
    </div>
    <div class="steps-box"><h4>🖨️ Connect Your Printer & Scale (ShipStation Connect)</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">If you print labels locally, install <strong>ShipStation Connect</strong> from <span class="step-nav">Settings → Printing → Printing Setup</span>. It links your label printer and (optionally) a connected scale.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Set your default label printer and document printer so labels and customs forms route to the right device.</div></div>
      <div class="step-tip"><strong>💡</strong> If you have a connected scale, you can pull weight directly into the shipment instead of typing it.</div>
    </div>
  </div>
</div>

<!-- 5. INVENTEL SHIPPING SOP (MANDATORY) -->
<div class="slide" id="sec-sop"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-mandatory">⭐ MANDATORY SOP</span> <span class="badge badge-advanced">Read in Full</span></div><h2>⭐ 5. InvenTel Shipping SOP — Read Before Printing Any Label</h2><p class="subtitle">This is InvenTel's required shipping procedure. It overrides any general habit. Every label you print must follow it.</p></div>
  <div class="slide-body">
    <div class="callout red"><strong>⚠️ This section is mandatory and is on the quiz.</strong> Two rules define how InvenTel ships: <strong>(1)</strong> there is <strong>no single master carrier account</strong> set as the default — you manually select the cheapest appropriate carrier on every order; and <strong>(2)</strong> every international shipment must be double-checked — confirm the customer paid for shipping and the destination country is allowed — <strong>before</strong> the label is printed.</p></div>

    <h3 style="font-size:13px;color:#2d0000;text-transform:uppercase;letter-spacing:.5px;margin:14px 0 6px">SOP Part A — Manual Cheapest-Carrier Selection (every order)</h3>
    <div class="steps-box"><h4>💰 A. Pick the cheapest appropriate carrier — manually</h4>
      <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>Why manual:</strong> InvenTel has multiple carriers connected but <strong>no default master carrier</strong>. ShipStation will not auto-pick for you, so you compare and choose on each order to control cost.</div></div>
      <div class="step"><div class="step-num red">2</div><div class="step-text">Select the order in the <span class="step-nav">Orders</span> grid. In the Configure Shipment Widget, set <strong>Weight</strong> and <strong>package dimensions</strong> first — rates are wrong without them.</div></div>
      <div class="step"><div class="step-num red">3</div><div class="step-text">Click the <strong>Rate Browser / Rate Calculator</strong> icon in the widget. ShipStation lists every available carrier and service for that shipment, lowest rate first.</div></div>
      <div class="step"><div class="step-num red">4</div><div class="step-text">Choose the <strong>cheapest service that still meets the order's requirements</strong> (delivery speed the customer paid for, package type, destination eligibility). Cheapest overall is the default goal, but never downgrade below what the customer paid for.</div></div>
      <div class="step"><div class="step-num red">5</div><div class="step-text">Click <strong>Configure Label</strong> (or select the service) to apply it. The rate appears on the Create + Print Label button and updates live as you adjust the shipment.</div></div>
      <div class="step-warning"><strong>⚠️ Do not</strong> set a carrier as a permanent default or change account-level carrier settings. If you think a default should change, raise it with your direct report — do not change it yourself.</div>
      <div class="step-tip"><strong>💡 New Layout only:</strong> <strong>Rate Shopper</strong> can compare a defined group of services and auto-apply the lowest. InvenTel's policy is still manual review — only use a Rate Shopper rule if your direct report has set one up and told you to use it. Even then, confirm the applied rate before printing.</div>
    </div>

    <h3 style="font-size:13px;color:#2d0000;text-transform:uppercase;letter-spacing:.5px;margin:14px 0 6px">SOP Part B — International Pre-Print Checks (every international order)</h3>
    <div class="steps-box"><h4>🌍 B. Verify BEFORE printing any international label</h4>
      <div class="step"><div class="step-num red">1</div><div class="step-text"><strong>Filter to international orders:</strong> in the Orders grid, filter by destination country (anything outside the US) so they're easy to review separately.</div></div>
      <div class="step"><div class="step-num red">2</div><div class="step-text"><strong>Check #1 — Did the customer pay for shipping?</strong> Open the order and confirm shipping was charged/paid on the Shopify order. If shipping shows as free or $0 and that's not expected for that destination, <strong>stop</strong> and confirm with your direct report before printing.</div></div>
      <div class="step"><div class="step-num red">3</div><div class="step-text"><strong>Check #2 — Is the destination country allowed?</strong> Confirm the country is on InvenTel's approved-destination list and isn't on any restricted/embargoed list. If you're unsure whether a country is allowed, <strong>do not print</strong> — confirm with your direct report first.</div></div>
      <div class="step"><div class="step-num red">4</div><div class="step-text"><strong>Check #3 — Customs declaration is complete:</strong> expand the <span class="step-nav">Customs Declarations</span> section. Confirm item description, value, country of origin, and <strong>HS code</strong> are present (6-digit HS codes are required for international commercial shipments and for the EU).</div></div>
      <div class="step"><div class="step-num red">5</div><div class="step-text"><strong>Only after all three checks pass</strong>, select the cheapest appropriate international service (SOP Part A) and create + print the label and customs form.</div></div>
      <div class="step-warning"><strong>⚠️ Hard stop:</strong> If shipping wasn't paid, the country isn't allowed, or the customs declaration is incomplete, the label must NOT be printed. Escalate to your direct report. Printing a non-compliant international label can mean the package is held in customs or returned at InvenTel's cost.</div>
    </div>

    <h3 style="font-size:13px;color:#2d0000;text-transform:uppercase;letter-spacing:.5px;margin:14px 0 6px">SOP Quick-Reference Card</h3>
    <table class="sop-table">
      <thead><tr><th>Step</th><th>What to do</th><th>Stop &amp; escalate if…</th></tr></thead>
      <tbody>
        <tr><td>1. Weigh &amp; size</td><td>Enter weight + dimensions in the widget</td><td>You can't get accurate weight/dimensions</td></tr>
        <tr><td>2. Compare rates</td><td>Open Rate Browser; pick cheapest appropriate service (no default master carrier)</td><td>No valid service appears for the shipment</td></tr>
        <tr><td>3. (Intl) Shipping paid?</td><td>Confirm customer was charged/paid shipping</td><td>Shipping is $0/free unexpectedly</td></tr>
        <tr><td>4. (Intl) Country allowed?</td><td>Confirm destination is on the approved list</td><td>Country is unknown, restricted, or embargoed</td></tr>
        <tr><td>5. (Intl) Customs complete?</td><td>Description, value, origin, 6-digit HS code present</td><td>Any customs field or HS code is missing</td></tr>
        <tr><td>6. Print</td><td>Create + Print label (and customs form for intl)</td><td>Any check above failed</td></tr>
      </tbody>
    </table>
    <div class="callout gray"><strong>Remember:</strong> domestic orders need Steps 1, 2, and 6. International orders need all six, in order. When in doubt on any step, escalate before printing — a held shipment costs more than a 5-minute question.</div>
  </div>
</div>

<!-- 6. STORES & ORDER IMPORT -->
<div class="slide" id="sec-stores"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🏪 6. Stores & Order Import — Deep Dive</h2><p class="subtitle">How orders from our multiple Shopify stores flow into ShipStation, and how to work the multi-store grid.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><h3>🟢 Beginner</h3>
        <div class="sub-card"><strong>See connected stores</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Go to <span class="step-nav">Settings → Selling Channels → Store Setup</span>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Each connected Shopify brand store is listed as its own store. Each pulls in its own orders, products, and tracking.</div></div>
        </div>
        <div class="sub-card"><strong>Filter the Orders grid by store</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open <span class="step-nav">Orders</span>. Use the <strong>store dropdown / filter</strong> at the top to show one store at a time, or all stores together.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Each order shows its source store, so you always know which brand it belongs to.</div></div>
        </div>
        <div class="sub-card"><strong>Refresh / import orders</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Orders import automatically on a schedule. To pull immediately, click <strong>Refresh / Update Stores</strong> (top of the Orders grid).</div></div>
          <div class="step-tip"><strong>💡</strong> If a recent Shopify order isn't showing, refresh stores before assuming something's wrong.</div>
        </div>
      </div>
      <div class="level-block int"><h3>🟡 Intermediate</h3>
        <div class="sub-card"><strong>Tags & filters across stores</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Use <strong>tags</strong> to mark orders (e.g., "Needs review", "International"). Filter the grid by tag to batch similar work.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Combine filters: store + country + status to isolate, for example, all international unshipped orders for one brand.</div></div>
        </div>
        <div class="sub-card"><strong>Pinnable columns &amp; saved views</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">In the New Layout you can pin and reorder grid columns. Pin the columns you check most (store, country, paid shipping, weight).</div></div>
        </div>
        <div class="sub-card"><strong>Combine &amp; split orders</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Combine multiple orders to one customer into a single shipment, or use <strong>Split Shipment</strong> to ship line items separately while keeping the order intact.</div></div>
        </div>
      </div>
      <div class="level-block adv"><h3>🔴 Advanced</h3>
        <div class="sub-card"><strong>Store-level settings</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Each store has its own branding, notification, and (for Shopify) HS-code import settings. These are usually configured by an admin — review, don't change, unless instructed.</div></div>
        </div>
        <div class="sub-card"><strong>HS code import from Shopify</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Shopify can pass 6-digit HS codes into ShipStation per store. Note: if account-level International Settings use <strong>pre-defined values</strong>, those can override the imported Shopify codes — know which mode each store uses.</div></div>
        </div>
        <div class="sub-card"><strong>Troubleshoot import issues</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">If a store stops importing, check <span class="step-nav">Store Setup</span> for a reconnect/auth prompt and escalate to your direct report — do not delete or re-add a store yourself.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 7. RATES, CARRIERS & LABEL PRINTING -->
<div class="slide" id="sec-rates"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>💰 7. Rates, Carriers & Label Printing — Deep Dive</h2><p class="subtitle">The core daily workflow: compare rates, pick the cheapest appropriate carrier, and print. Follows the InvenTel SOP (Sec 5).</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><h3>🟢 Beginner</h3>
        <div class="sub-card"><strong>Configure a shipment</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Select an order. In the Configure Shipment Widget set <strong>Ship From</strong>, <strong>Weight</strong>, <strong>Package type</strong>, and <strong>Dimensions</strong>.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Dimensions matter — they affect dimensional weight and the rate, and prevent carrier surcharges.</div></div>
        </div>
        <div class="sub-card"><strong>Compare rates &amp; pick cheapest</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Click the <strong>Rate Browser / Rate Calculator</strong> icon. Carriers list lowest-rate-first.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Pick the cheapest service that meets the order's needs, then <strong>Configure Label</strong> to apply it.</div></div>
        </div>
        <div class="sub-card"><strong>Create &amp; print a label</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Confirm the rate on the <strong>Create + Print Label</strong> button, then click it.</div></div>
          <div class="step-tip"><strong>💡</strong> No default master carrier is set — always compare before printing (InvenTel SOP Part A).</div>
        </div>
      </div>
      <div class="level-block int"><h3>🟡 Intermediate</h3>
        <div class="sub-card"><strong>Batch label printing</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Select multiple configured orders and create labels at once. Review the <strong>Label Batch Cost Review</strong> screen before confirming.</div></div>
        </div>
        <div class="sub-card"><strong>Cost Review &amp; surcharges</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Click <strong>Cost Review</strong> next to a rate to see surcharges and taxes itemized before you commit.</div></div>
        </div>
        <div class="sub-card"><strong>Scan to Print</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Scan an order barcode to instantly pull it up and print — speeds up high-volume days (New Layout).</div></div>
        </div>
      </div>
      <div class="level-block adv"><h3>🔴 Advanced</h3>
        <div class="sub-card"><strong>Voiding / reprinting labels</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Open the shipment in <span class="step-nav">Shipments</span> → void a label if it wasn't used (within the carrier's window) or reprint if needed. Voiding rules vary by carrier and permission level.</div></div>
        </div>
        <div class="sub-card"><strong>Product defaults &amp; service mapping</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Admins can set product-level weight/dimension defaults and map store shipping methods to ShipStation services so orders arrive pre-configured. Review only.</div></div>
        </div>
        <div class="sub-card"><strong>Scan to Verify</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Scan SKU/UPC barcodes while packing to confirm contents before printing — combine with Scan to Print for a fast, accurate workflow (New Layout).</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 8. INTERNATIONAL & CUSTOMS -->
<div class="slide" id="sec-intl"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>🌍 8. International Shipping & Customs — Deep Dive</h2><p class="subtitle">How customs declarations work in ShipStation, and the pre-print checks required by the InvenTel SOP (Sec 5, Part B).</p></div>
  <div class="slide-body">
    <div class="callout red"><strong>⚠️ Always apply SOP Part B before printing any international label:</strong> confirm shipping was paid, confirm the country is allowed, and confirm the customs declaration (incl. 6-digit HS code) is complete.</div>
    <div class="three-col">
      <div class="level-block beg"><h3>🟢 Beginner</h3>
        <div class="sub-card"><strong>How customs forms are created</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">ShipStation automatically creates a customs declaration for any order with an international destination, based on the items and your International Settings.</div></div>
        </div>
        <div class="sub-card"><strong>View / edit a declaration</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Open the order → expand the <span class="step-nav">Customs Declarations</span> section in Order Details or the sidebar.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Confirm each item has a description, value, country of origin, and HS code. Edit if anything is missing.</div></div>
        </div>
        <div class="sub-card"><strong>Print the customs form</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">When you create the international label, the customs form is sent to your account at the same time — print it with the label.</div></div>
        </div>
      </div>
      <div class="level-block int"><h3>🟡 Intermediate</h3>
        <div class="sub-card"><strong>HS codes (6-digit)</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">6-digit HS codes are required for international commercial shipments (USPS as of Sept 1, 2025) and for the EU. They can come from the product's details, Shopify import, or be added manually to the declaration.</div></div>
        </div>
        <div class="sub-card"><strong>Tax identifiers</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Tax IDs (e.g., IOSS, VAT) can be stored in International Settings and applied to shipments. Apply the correct one per destination when required.</div></div>
        </div>
        <div class="sub-card"><strong>Country-specific fields</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Some destinations need extra fields (e.g., Mexico). ShipStation prompts for these — fill them before printing.</div></div>
        </div>
      </div>
      <div class="level-block adv"><h3>🔴 Advanced</h3>
        <div class="sub-card"><strong>International Settings (account vs product)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Settings → Shipping → International Settings</span>: account-level defaults apply to all international orders; product-level settings override them. Pre-defined values can override Shopify-imported HS codes — know which is active.</div></div>
        </div>
        <div class="sub-card"><strong>Prepaid duties &amp; taxes (DDP)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For supported services, duties/taxes can be prepaid so the customer isn't charged on delivery. Use only the configuration your admin has approved.</div></div>
        </div>
        <div class="sub-card"><strong>Restricted destinations</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Maintain awareness of InvenTel's approved-country list. If a destination is unknown or restricted, do not print — escalate (SOP Part B).</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 9. REPORTS & INSIGHTS -->
<div class="slide" id="sec-reports"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span> <span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span></div><h2>📊 9. Reports & Insights — Deep Dive</h2><p class="subtitle">Running the reports InvenTel relies on across multiple stores and carriers.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><h3>🟢 Beginner</h3>
        <div class="sub-card"><strong>Open Insights / Reports</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Go to the <span class="step-nav">Insights</span> (Reports) area in the left sidebar. This is where shipping cost, volume, and product data live.</div></div>
        </div>
        <div class="sub-card"><strong>Filter a report</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Set a <strong>date range</strong>, then filter by <strong>store</strong> and/or <strong>carrier</strong> to scope the report to what you need.</div></div>
        </div>
        <div class="sub-card"><strong>Read shipping cost</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Shipping cost reports show what was spent by carrier/service — useful for confirming the cheapest-carrier SOP is working.</div></div>
        </div>
      </div>
      <div class="level-block int"><h3>🟡 Intermediate</h3>
        <div class="sub-card"><strong>Export &amp; share</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Export a report (CSV) to share with your direct report or for record-keeping.</div></div>
        </div>
        <div class="sub-card"><strong>Per-store comparisons</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Run the same report per store to compare volume and cost across brands.</div></div>
        </div>
        <div class="sub-card"><strong>International vs domestic</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Filter by destination to see international volume and cost separately — useful given the extra SOP checks they require.</div></div>
        </div>
      </div>
      <div class="level-block adv"><h3>🔴 Advanced</h3>
        <div class="sub-card"><strong>Carrier spend analysis</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Break spend down by carrier and service to spot where a cheaper option is consistently available — bring findings to your direct report.</div></div>
        </div>
        <div class="sub-card"><strong>Product / SKU reporting</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Use product reports to see what's shipping most, informing packaging and weight defaults.</div></div>
        </div>
        <div class="sub-card"><strong>Recurring reporting cadence</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Establish a regular (e.g., weekly/monthly) export routine so cost trends are tracked consistently.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 10. AUTOMATION & RATE SHOPPER -->
<div class="slide" id="sec-automation"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-intermediate">Intermediate</span> <span class="badge badge-advanced">Advanced</span> <span class="badge badge-academy">Automation</span></div><h2>⚙️ 10. Automation & Rate Shopper</h2><p class="subtitle">ShipStation's automation features — and how InvenTel's manual-review SOP interacts with them.</p></div>
  <div class="slide-body">
    <div class="callout"><strong>Policy note:</strong> Automation and Rate Shopper are powerful, but InvenTel's SOP is manual review. Only rely on an automation rule or Rate Shopper rule if your direct report has set it up and instructed you to use it — and always confirm the applied rate and international checks before printing.</div>
    <div class="three-col">
      <div class="level-block int"><h3>🟡 Intermediate</h3>
        <div class="sub-card"><strong>What Rate Shopper does</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Rate Shopper compares a defined group of services and applies the lowest rate automatically (US/CA/AU/NZ accounts). It can be applied manually per shipment or via an automation rule.</div></div>
        </div>
        <div class="sub-card"><strong>Apply a Rate Shopper rule</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">If a rule exists, select it from the Services menu on a shipment. ShipStation applies the cheapest service in that rule's comparison set.</div></div>
        </div>
      </div>
      <div class="level-block adv"><h3>🔴 Advanced</h3>
        <div class="sub-card"><strong>Build a Rate Shopper rule</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text"><span class="step-nav">Settings → Rate Shopper → Create New</span> → Start from Recommended or Build from Scratch → name it, add services to compare, optionally set a transit-time restriction → Publish. (Admin task.)</div></div>
        </div>
        <div class="sub-card"><strong>Automation rules</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Automation rules can tag, assign services, or apply a Rate Shopper rule based on order criteria (store, weight, destination). Configured by admins; review their logic before trusting output.</div></div>
        </div>
        <div class="sub-card"><strong>Checkout Rates</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Checkout Rates can send ShipStation's live/flat rates to the Shopify checkout so customers pay accurate shipping — directly supporting SOP Part B's "did they pay for shipping" check.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 11. INTERMEDIATE RESOURCES -->
<div class="slide" id="sec-intres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-intermediate">Intermediate · Self-Paced · Optional</span></div><h2>🟡 11. Intermediate Training Resources</h2><p class="subtitle">Optional, self-paced — after you've completed the mandatory beginner content and SOP.</p></div>
  <div class="slide-body">
    <div class="card intermediate"><div class="card-title">Help Center — Rate Shopper: Automate Selecting the Lowest Rate <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">How to create and apply Rate Shopper rules to compare services and auto-select the cheapest. Read to understand the feature even if InvenTel uses manual review.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~25 min &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Rates</span><span class="tag t4">Automation</span></div><a href="https://help.shipstation.com/hc/en-us/articles/4415714484123-Rate-Shopper-Automate-Selecting-the-Lowest-Rate" target="_blank">→ Read: Rate Shopper</a></div>
    <div class="card intermediate"><div class="card-title">Help Center — ShipStation's International Settings <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Account-level vs product-level international settings, default customs information, and tax identifiers.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~25 min &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t3">International</span><span class="tag t4">Settings</span></div><a href="https://help.shipstation.com/hc/en-us/articles/360035991611-ShipStation-s-International-Settings" target="_blank">→ Read: International Settings</a></div>
    <div class="card intermediate"><div class="card-title">YouTube: ShipStation Intermediate Tips <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Workflow tips for batching, tags, filters, and faster label creation in the New Layout.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">YouTube</span><span class="tag t4">Video</span></div><a href="https://www.youtube.com/results?search_query=shipstation+tips+batch+automation+2026" target="_blank">→ Search YouTube: "ShipStation tips batch automation 2026"</a></div>
    <div class="card intermediate"><div class="card-title">Help Center — Configure Shipping (Bulk &amp; Defaults) <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Bulk-updating shipments and using product defaults and service mapping to speed configuration.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~20 min &nbsp;|&nbsp; <strong>Level:</strong> Intermediate</div><div class="tag-row"><span class="tag t2">Shipping</span><span class="tag t4">Bulk</span></div><a href="https://help.shipstation.com/hc/en-us/articles/360026157591-Configure-Shipping" target="_blank">→ Read: Configure Shipping</a></div>
  </div>
</div>

<!-- 12. ADVANCED RESOURCES -->
<div class="slide" id="sec-advres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-advanced">Advanced · Optional</span></div><h2>🔴 12. Advanced Training Resources</h2><p class="subtitle">Optional deep mastery — for those who want to go further.</p></div>
  <div class="slide-body">
    <div class="card advanced"><div class="card-title">Help Center — Customs Declarations (Full) <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Deep reference on customs declaration behavior, MID codes, tax IDs, and country-specific requirements.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~30 min &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">International</span><span class="tag t4">Customs</span></div><a href="https://help.shipstation.com/hc/en-us/articles/360025869952-Customs-Declarations" target="_blank">→ Read: Customs Declarations (full)</a></div>
    <div class="card advanced"><div class="card-title">Help Center — Harmonized Tariff Codes &amp; Customs Descriptions <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Why HS/HTS codes matter, where to add them, and the 6-digit requirement for international commercial shipments.</div><div class="card-meta"><strong>Format:</strong> Guide &nbsp;|&nbsp; <strong>Est. Time:</strong> ~25 min &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">HS Codes</span><span class="tag t4">Compliance</span></div><a href="https://help.shipstation.com/hc/en-us/articles/6045472297883-Harmonized-Tariff-Codes-and-Customs-Descriptions" target="_blank">→ Read: Harmonized Tariff Codes</a></div>
    <div class="card advanced"><div class="card-title">ShipStation API Documentation <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">For developers/admins: the ShipStation API (V2) for programmatic order, rate, and label workflows. Reference only unless your role includes integration work.</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">API</span><span class="tag t4">Developer</span></div><a href="https://www.shipstation.com/docs/api/" target="_blank">→ ShipStation API Docs</a></div>
    <div class="card advanced"><div class="card-title">YouTube: ShipStation Advanced Automation <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Advanced automation rules, Rate Shopper strategies, and high-volume warehouse workflows.</div><div class="card-meta"><strong>Format:</strong> YouTube &nbsp;|&nbsp; <strong>Est. Time:</strong> ~40 min &nbsp;|&nbsp; <strong>Level:</strong> Advanced</div><div class="tag-row"><span class="tag t3">YouTube</span><span class="tag t4">Automation</span></div><a href="https://www.youtube.com/results?search_query=shipstation+advanced+automation+rules+rate+shopper+2026" target="_blank">→ Search YouTube: "ShipStation advanced automation rules 2026"</a></div>
  </div>
</div>

<!-- 13. CERTIFICATIONS -->
<div class="slide" id="sec-certs"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Certifications</span></div><h2>🏅 13. Certifications & Verified Learning</h2><p class="subtitle">Optional credentials and structured learning paths.</p></div>
  <div class="slide-body">
    <div class="callout gray">💡 <strong>Optional Personal Investment:</strong> Any certifications or paid assessments referenced below are not covered by InvenTel and require an out-of-pocket fee to attempt the assessments or access proctored exams. The learning content and help-center material can be explored at no cost, but earning an official badge or certification requires a paid assessment. These credentials are entirely optional — they are personal career development tools you can pursue on your own time if you'd like to formally validate your shipping/logistics skills.</div>
    <table class="cert-table">
      <thead><tr><th>Learning Path</th><th>Provider</th><th>Level</th></tr></thead>
      <tbody>
        <tr><td>ShipStation Help Center learning articles</td><td>ShipStation (Official)</td><td>All</td></tr>
        <tr><td>ShipStation Community Forum &amp; webinars</td><td>ShipStation (Official)</td><td>All</td></tr>
        <tr><td>General e-commerce fulfillment / logistics courses</td><td>Third-party platforms</td><td>Intermediate–Advanced</td></tr>
      </tbody>
    </table>
    <div class="callout"><strong>Note:</strong> ShipStation's primary "training" is its Help Center, Community, and webinars rather than a formal certification program. Focus your mandatory time on the Help Center guides linked throughout this deck.</div>
  </div>
</div>

<!-- 14. NEW HIRE CHECKLIST -->
<div class="checklist-section mandatory" id="cl-mandatory"><div class="checklist-head mandatory"><h2>✅ New Hire Onboarding Checklist</h2><div class="ch-sub">Mandatory — complete within your first 30 days</div><span class="ch-badge">Mandatory · 30-Day Window</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📲 App Downloads &amp; Device Setup (Optional)</div><ul class="checklist-items">
      <li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Install ShipStation Connect for your label printer &amp; scale <span class="ci-est">Optional</span></div></div></li>
      <li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Bookmark app.shipstation.com in your browser <span class="ci-est">Optional</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📱 Mobile App Downloads (Optional)</div><ul class="checklist-items">
      <li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Install the ShipStation mobile app (iOS/Android) <span class="ci-est">Optional</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">🔐 Account Setup (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Request access details &amp; store list from your direct report (Sec 4) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Sign in &amp; set up two-factor authentication (Sec 4) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Confirm which version you're on (New Layout vs Legacy) (Sec 4) <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Verify connected stores &amp; your permissions (Sec 4) <span class="ci-est">~15 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">⭐ InvenTel Shipping SOP (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read the full InvenTel Shipping SOP (Sec 5) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Understand: no default master carrier — compare rates on every order (Sec 5A) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Memorize the 3 international pre-print checks: paid shipping, allowed country, complete customs (Sec 5B) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📦 App Training (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Filter the Orders grid by store &amp; refresh imports (Sec 6) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Configure a shipment, compare rates, print a test/sample label (Sec 7) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">View a customs declaration on an international order (Sec 8) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Run a basic shipping cost report filtered by store (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">📚 External Resources (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read Help Center: Create &amp; Print Your First Label (Sec 3) <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read Help Center: Compare Rates (Sec 3) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Watch YouTube Beginner Tutorial (Sec 3) <span class="ci-est">~45 min</span></div></div></li>
    </ul></div>
  </div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-mandatory" style="color:#166534">0 of 17 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-mandatory" style="background:#16a34a"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#166534" onclick="resetList('mandatory')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('mandatory')">📝 Take Quiz</button></div></div>
</div>

<!-- 15. INTERMEDIATE CHECKLIST -->
<div class="checklist-section intermediate" id="cl-intermediate"><div class="checklist-head intermediate"><h2>✅ Intermediate Learner Checklist</h2><div class="ch-sub">Self-paced — after mandatory training</div><span class="ch-badge">Self-Paced · Optional</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-intermediate">All Features Intermediate</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Tag orders &amp; combine store + country filters (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Pin &amp; reorder Orders grid columns (Sec 6) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Create a batch of labels &amp; review the Batch Cost screen (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Use Cost Review to inspect surcharges before printing (Sec 7) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Add/verify a 6-digit HS code on a customs declaration (Sec 8) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Export a shipping report to CSV (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Read about Rate Shopper &amp; apply a rule (if one exists) (Sec 10) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Try Scan to Print on an order (Sec 7) <span class="ci-est">~10 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-intermediate" style="color:#854d0e">0 of 8 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-intermediate" style="background:#ca8a04"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#854d0e" onclick="resetList('intermediate')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('intermediate')">📝 Take Quiz</button></div></div>
</div>

<!-- 16. ADVANCED CHECKLIST -->
<div class="checklist-section advanced" id="cl-advanced"><div class="checklist-head advanced"><h2>✅ Advanced Learner Checklist</h2><div class="ch-sub">Optional — deep mastery</div><span class="ch-badge">Optional · Deep Mastery</span></div>
  <div class="checklist-body"><div class="checklist-group"><div class="checklist-group-title cgt-advanced">All Features Advanced</div><ul class="checklist-items">
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Use Split Shipment to ship line items separately (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Void &amp; reprint a label correctly (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Review account vs product International Settings &amp; HS-code override behavior (Sec 8) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Run a carrier-spend analysis report (Sec 9) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Review an existing automation rule's logic (Sec 10) <span class="ci-est">~20 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Understand a Rate Shopper rule's comparison set (Sec 10) <span class="ci-est">~15 min</span></div></div></li>
    <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Try Scan to Verify while packing (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
  </ul></div></div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-advanced" style="color:#991b1b">0 of 7 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-advanced" style="background:#991b1b"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#991b1b" onclick="resetList('advanced')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('advanced')">📝 Take Quiz</button></div></div>
</div>

<!-- 17. QUICK REFERENCE -->
<div class="slide" id="sec-qr"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Quick Reference</span></div><h2>🔗 17. Quick Reference — Platform Access & Help Centers</h2></div>
  <div class="slide-body"><div class="qr-grid">
    <div class="qr-card"><h4>🔐 Platform Access</h4><ul><li><a href="https://app.shipstation.com" target="_blank">New ShipStation Login</a></li><li><a href="https://ship.shipstation.com" target="_blank">Legacy ShipStation Login</a></li><li><a href="https://help.shipstation.com" target="_blank">ShipStation Help Center</a></li><li><a href="https://community.shipstation.com" target="_blank">ShipStation Community</a></li><li><a href="https://www.shipstation.com/docs/api/" target="_blank">ShipStation API Docs</a></li></ul></div>
    <div class="qr-card"><h4>🎓 Key Help Center Articles</h4><ul><li><a href="https://help.shipstation.com/hc/en-us/articles/360026156831-Create-Print-Your-First-Label" target="_blank">Create &amp; Print First Label</a></li><li><a href="https://help.shipstation.com/hc/en-us/articles/360026157591-Configure-Shipping" target="_blank">Configure Shipping</a></li><li><a href="https://help.shipstation.com/hc/en-us/articles/360026157611-Compare-Rates" target="_blank">Compare Rates</a></li><li><a href="https://help.shipstation.com/hc/en-us/articles/4415714484123-Rate-Shopper-Automate-Selecting-the-Lowest-Rate" target="_blank">Rate Shopper</a></li><li><a href="https://help.shipstation.com/hc/en-us/articles/360025869952-Customs-Declarations" target="_blank">Customs Declarations</a></li><li><a href="https://help.shipstation.com/hc/en-us/articles/360035991611-ShipStation-s-International-Settings" target="_blank">International Settings</a></li></ul></div>
    <div class="qr-card"><h4>🌍 International &amp; Compliance</h4><ul><li><a href="https://help.shipstation.com/hc/en-us/articles/6045472297883-Harmonized-Tariff-Codes-and-Customs-Descriptions" target="_blank">Harmonized Tariff (HS) Codes</a></li><li><a href="https://help.shipstation.com/hc/en-us/articles/48668385552027-Feature-Updates-in-ShipStation-s-New-Layout" target="_blank">New Layout Feature Updates</a></li></ul></div>
    <div class="qr-card"><h4>🎬 YouTube</h4><ul><li><a href="https://www.youtube.com/results?search_query=shipstation+new+layout+tutorial+for+beginners+2026" target="_blank">Beginner Tutorial</a></li><li><a href="https://www.youtube.com/results?search_query=shipstation+tips+batch+automation+2026" target="_blank">Intermediate Tips</a></li><li><a href="https://www.youtube.com/results?search_query=shipstation+advanced+automation+rules+rate+shopper+2026" target="_blank">Advanced Automation</a></li></ul></div>
  </div></div>
</div>

<!-- FINAL NOTE -->
<div class="final-note" id="sec-final">
  <p style="font-size:15px;font-weight:700;margin-bottom:10px">📌 Final Note — ShipStation Training</p>
  <p style="margin-bottom:10px">All <strong>Beginner-level content</strong> and the <strong>InvenTel Shipping SOP</strong> are <strong>mandatory</strong> within your first <strong>30 days</strong>. Intermediate and Advanced training is self-paced.</p>
  <p style="margin-bottom:10px"><strong>The two rules that define InvenTel shipping:</strong> (1) there is <strong>no default master carrier</strong> — you manually compare rates and pick the cheapest appropriate carrier on every order; and (2) before printing <strong>any international label</strong>, confirm the customer paid for shipping, the destination country is allowed, and the customs declaration (with 6-digit HS code) is complete. When in doubt, stop and escalate before printing.</p>
  <p style="margin-bottom:10px"><strong>Multiple stores:</strong> ShipStation pulls orders from all of InvenTel's connected Shopify brand stores. Confirm with your direct report which stores you handle — don't assume.</p>
  <p style="margin-bottom:10px">This deck is <strong>self-contained</strong> — every deep-dive includes complete step-by-step instructions. Click any section header to collapse it once you've completed it. External links and help centers are in the Quick Reference.</p>
  <p style="margin-bottom:10px">Use the <strong>New Hire Checklist</strong> to track progress and share with your manager.</p>
  <p style="margin-bottom:10px">For access, credentials, or training questions — reach out to the <strong>HR Training Coordinator who assisted you during onboarding</strong> — they are your best point of contact for training questions and platform access.</p>
  <p style="margin-bottom:10px"><a href="https://help.shipstation.com" target="_blank">ShipStation Help Center →</a></p>
  <p style="font-size:11px;opacity:.7;margin-top:14px">Last updated: April 6, 2025</p>
</div>

<!-- FLOATING NAV -->
<button class="float-nav-btn" onclick="toggleFloatNav()" title="Jump to section">📋</button>
<div class="float-nav-panel" id="float-nav">
  <div class="float-nav-hd">📋 Jump to Section</div>
  <ul class="float-nav-list">
    <li><a class="fnl-section" href="#sec-toc" onclick="closeNav()">📋 Table of Contents</a></li>
    <li><a class="fnl-section" href="#sec-overview" onclick="closeNav()">📦 1. Platform Overview</a></li>
    <li><a class="fnl-section" href="#sec-hub" onclick="closeNav()">🎓 2. Official Learning Hub</a></li>
    <li><a class="fnl-section" href="#sec-begres" onclick="closeNav()">🟢 3. Beginner Resources</a></li>
    <li><a class="fnl-section" href="#sec-start" onclick="closeNav()">🟢 4. Getting Started</a></li>
    <li><a class="fnl-section" href="#sec-sop" onclick="closeNav()">⭐ 5. InvenTel Shipping SOP</a></li>
    <li><a class="fnl-section" href="#sec-stores" onclick="closeNav()">🏪 6. Stores &amp; Order Import</a></li>
    <li><a class="fnl-section" href="#sec-rates" onclick="closeNav()">💰 7. Rates, Carriers &amp; Labels</a></li>
    <li><a class="fnl-section" href="#sec-intl" onclick="closeNav()">🌍 8. International &amp; Customs</a></li>
    <li><a class="fnl-section" href="#sec-reports" onclick="closeNav()">📊 9. Reports &amp; Insights</a></li>
    <li><a class="fnl-section" href="#sec-automation" onclick="closeNav()">⚙️ 10. Automation &amp; Rate Shopper</a></li>
    <li><a class="fnl-section" href="#sec-intres" onclick="closeNav()">🟡 11. Intermediate Resources</a></li>
    <li><a class="fnl-section" href="#sec-advres" onclick="closeNav()">🔴 12. Advanced Resources</a></li>
    <li><a class="fnl-section" href="#sec-certs" onclick="closeNav()">🏅 13. Certifications</a></li>
    <li><a class="fnl-section" href="#cl-mandatory" onclick="closeNav()">✅ 14. New Hire Checklist</a></li>
    <li><a class="fnl-section" href="#cl-intermediate" onclick="closeNav()">✅ 15. Intermediate Checklist</a></li>
    <li><a class="fnl-section" href="#cl-advanced" onclick="closeNav()">✅ 16. Advanced Checklist</a></li>
    <li><a class="fnl-section" href="#sec-qr" onclick="closeNav()">🔗 17. Quick Reference</a></li>
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
var TOTALS={mandatory:17,intermediate:8,advanced:7};
function tick(el,s){el.classList.toggle('checked');updateBar(s);}
function updateBar(s){var c=document.getElementById('cl-'+s),ck=c.querySelectorAll('.cb.checked:not([data-optional])').length,t=TOTALS[s],p=t>0?Math.round((ck/t)*100):0;document.getElementById('lbl-'+s).textContent=ck+' of '+t+' completed';document.getElementById('bar-'+s).style.width=p+'%';}
function resetList(s){document.getElementById('cl-'+s).querySelectorAll('.cb.checked').forEach(function(cb){cb.classList.remove('checked');});updateBar(s);}

/* QUIZ DATA — pulls 20 per level */
var qSection,qIndex,qScore,qAnswered,qQuestions;
var QUIZ={
mandatory:{title:'New Hire Onboarding',sub:'Mandatory · 20 Questions · Pass = 70%',hd:'q-mandatory',track:'New Hire Onboarding — ShipStation',qs:20,questions:[
{q:'What is the FIRST thing you should do on your first day with ShipStation?',opts:['Start printing labels','Request your access details and store list from your direct report','Change carrier settings','Connect a new store'],ans:1},
{q:'How can you quickly tell which ShipStation version you are on?',opts:['Ask a coworker','Check the URL: app.shipstation.com = New Layout, ship.shipstation.com = Legacy','Count the menu items','Look at the label size'],ans:1},
{q:'How does InvenTel select carriers for orders?',opts:['A default master carrier is always used','You manually compare rates and pick the cheapest appropriate carrier on every order','The customer chooses the carrier','Labels print with a random carrier'],ans:1},
{q:'Why must you compare rates manually at InvenTel?',opts:['ShipStation is broken','There is no default master carrier account set, so you control cost per order','It is faster','To avoid using the Rate Browser'],ans:1},
{q:'What must you set BEFORE comparing rates to get accurate prices?',opts:['The customer email','Weight and package dimensions','The label printer','The order tags'],ans:1},
{q:'For an international order, what are the three pre-print checks in the InvenTel SOP?',opts:['Color, size, weight','Did the customer pay for shipping; is the country allowed; is the customs declaration complete','Tracking, refund, reprint','Tags, filters, columns'],ans:1},
{q:'If shipping was NOT paid on an international order, what should you do?',opts:['Print it anyway','Stop and confirm with your direct report before printing','Refund the order','Delete the order'],ans:1},
{q:'If you are unsure whether a destination country is allowed, you should…',opts:['Print and hope','Not print — confirm with your direct report first','Pick the cheapest carrier and print','Ask the customer'],ans:1},
{q:'What customs detail is required for international commercial shipments?',opts:['A 6-digit HS code','A photo of the item','The customer phone number','A coupon code'],ans:0},
{q:'Where do you compare carrier rates for an order?',opts:['The Reports tab','The Rate Browser / Rate Calculator in the Configure Shipment Widget','Settings → Users','The customer profile'],ans:1},
{q:'How are orders from InvenTel\'s Shopify stores added to ShipStation?',opts:['Typed in by hand','They import automatically from each connected store','Faxed in','Uploaded as images'],ans:1},
{q:'How do you view only one brand store\'s orders?',opts:['Log into a different account','Use the store filter/dropdown at the top of the Orders grid','Delete the other stores','Sort alphabetically'],ans:1},
{q:'What does the Create + Print Label button show before you print?',opts:['Nothing','The rate for the selected service, updating live as you configure','The customer\'s password','A random number'],ans:1},
{q:'Should you change a carrier default or account-level carrier setting yourself?',opts:['Yes, anytime','No — raise it with your direct report; do not change it yourself','Only on Fridays','Only for international orders'],ans:1},
{q:'When does the customs form become available for an international label?',opts:['Never','It is sent to your account at the same time as the label','A week later','Only by email request'],ans:1},
{q:'What does "Standalone / Self-Contained" mean for this deck?',opts:['You must call support for each step','Every deep-dive includes complete step-by-step instructions; no external link required to learn','It only works offline','It has no images'],ans:1},
{q:'Within how many days must mandatory training and the SOP be completed?',opts:['7 days','30 days','90 days','1 year'],ans:1},
{q:'If a recent Shopify order is not showing in ShipStation, what should you try first?',opts:['Reinstall your browser','Click Refresh / Update Stores','Email the customer','Restart the computer'],ans:1},
{q:'Who is your point of contact for access or training questions?',opts:['Any random coworker','The HR Training Coordinator who assisted you during onboarding','The customer','No one'],ans:1},
{q:'For a domestic order, which SOP steps apply?',opts:['All six international checks','Weigh & size, compare rates, then print','Only print','None'],ans:1},
{q:'What should you do if an international customs field or HS code is missing?',opts:['Print anyway','Do not print — complete it or escalate to your direct report','Ignore it','Cancel the customer\'s account'],ans:1},
{q:'Why does printing a non-compliant international label matter?',opts:['It does not matter','The package can be held in customs or returned at InvenTel\'s cost','It prints in color','It voids the order'],ans:1}
]},
intermediate:{title:'Intermediate Skills',sub:'Intermediate · 20 Questions · Pass = 70%',hd:'q-intermediate',track:'Intermediate Skills — ShipStation',qs:20,questions:[
{q:'What is the purpose of order tags?',opts:['To delete orders','To mark orders (e.g., "Needs review") and filter/batch similar work','To change the carrier','To set the price'],ans:1},
{q:'How can you isolate all international unshipped orders for one brand?',opts:['You cannot','Combine filters: store + country + status','Print everything','Sort by customer name'],ans:1},
{q:'What does the Label Batch Cost Review screen do?',opts:['Hides the cost','Lets you review the cost of multiple labels before confirming creation','Deletes labels','Emails customers'],ans:1},
{q:'What does the Cost Review link next to a rate show?',opts:['The customer address','Surcharges and taxes itemized for that rate','The tracking number','A discount code'],ans:1},
{q:'What is Scan to Print?',opts:['A reporting tool','Scanning an order barcode to instantly pull it up and print','A customs form','A refund method'],ans:1},
{q:'In the New Layout, what can you do with grid columns?',opts:['Nothing','Pin and reorder them to keep key fields visible','Only hide them','Only delete them'],ans:1},
{q:'What is a 6-digit HS code used for?',opts:['Discounts','Classifying goods on customs declarations for international shipments','Login','Tracking'],ans:1},
{q:'Where can stored Tax IDs (e.g., IOSS, VAT) be applied?',opts:['Nowhere','To international shipments via International Settings','Only to domestic orders','To the customer\'s email'],ans:1},
{q:'What does Rate Shopper do?',opts:['Prints labels','Compares a defined group of services and applies the lowest rate (US/CA/AU/NZ)','Refunds orders','Connects stores'],ans:1},
{q:'How do you apply an existing Rate Shopper rule to a shipment?',opts:['Email support','Select it from the Services menu on the shipment','Delete the order','Change the password'],ans:1},
{q:'What is Split Shipment used for?',opts:['Cancelling orders','Shipping individual line items separately while keeping the order intact','Combining stores','Refunds'],ans:1},
{q:'How can you share a shipping report?',opts:['Screenshot only','Export it to CSV','Print the screen','You cannot share it'],ans:1},
{q:'Why run the same report per store?',opts:['No reason','To compare volume and cost across brands','To delete data','To change carriers'],ans:1},
{q:'Even if a Rate Shopper rule applies a rate, what must you still do per InvenTel policy?',opts:['Nothing','Confirm the applied rate (and international checks) before printing','Print twice','Skip the SOP'],ans:1},
{q:'What is Scan to Verify?',opts:['A login method','Scanning SKU/UPC barcodes while packing to confirm contents before printing','A report','A refund'],ans:1},
{q:'When should you use a Rate Shopper rule at InvenTel?',opts:['Whenever you want','Only if your direct report set it up and told you to use it','Never under any circumstances','Only for domestic'],ans:1},
{q:'What can override Shopify-imported HS codes?',opts:['Nothing','Account-level pre-defined values in International Settings','The label printer','The customer'],ans:1},
{q:'Filtering reports by destination helps you…',opts:['Hide orders','See international vs domestic volume and cost separately','Delete reports','Change the SOP'],ans:1},
{q:'What is the benefit of always entering package dimensions?',opts:['None','Accurate rates and avoiding carrier surcharges','Faster login','Larger labels'],ans:1},
{q:'Where do you see every connected store?',opts:['The customer page','Settings → Selling Channels → Store Setup','The label preview','The quiz'],ans:1},
{q:'What does combining orders do?',opts:['Splits them','Merges multiple orders to one customer into a single shipment','Deletes them','Refunds them'],ans:1},
{q:'Bulk label creation is best reviewed using…',opts:['Guesswork','The Label Batch Cost Review screen','The customer email','A phone call'],ans:1}
]},
advanced:{title:'Advanced Mastery',sub:'Advanced · 20 Questions · Pass = 70%',hd:'q-advanced',track:'Advanced Mastery — ShipStation',qs:20,questions:[
{q:'Where are account-level international defaults configured?',opts:['Orders grid','Settings → Shipping → International Settings','Reports','Customer profile'],ans:1},
{q:'How do product-level international settings relate to account-level ones?',opts:['They are ignored','Product-level settings override account-level settings','They are identical','They delete each other'],ans:1},
{q:'What happens if pre-defined customs values are active but a store imports HS codes from Shopify?',opts:['Shopify always wins','The pre-defined values can override the imported Shopify HS codes','Nothing imports','The order is cancelled'],ans:1},
{q:'What are prepaid duties and taxes (DDP) used for?',opts:['Discounts','So the customer is not charged duties/taxes on delivery, on supported services','Faster printing','Refunds'],ans:1},
{q:'Before trusting an automation rule\'s output, you should…',opts:['Ignore it','Review the rule\'s logic','Delete it','Duplicate it'],ans:1},
{q:'How do you build a Rate Shopper rule?',opts:['Orders → Build','Settings → Rate Shopper → Create New → choose services to compare → Publish','Reports → New','It cannot be built'],ans:1},
{q:'What can automation rules do based on order criteria?',opts:['Nothing','Tag, assign services, or apply a Rate Shopper rule','Refund payments','Change the customer'],ans:1},
{q:'What does Checkout Rates do?',opts:['Refunds shipping','Sends ShipStation\'s live/flat rates to the Shopify checkout so customers pay accurate shipping','Voids labels','Connects printers'],ans:1},
{q:'Which check does Checkout Rates directly support?',opts:['Weight','SOP Part B\'s "did the customer pay for shipping"','Login','Color'],ans:1},
{q:'How should you void a label?',opts:['Delete the order','Open the shipment in Shipments and void within the carrier\'s window','Reprint twice','Email the carrier'],ans:1},
{q:'What is a transit-time restriction in a Rate Shopper rule?',opts:['A login limit','It restricts eligible services to those delivering within a specified time','A refund window','A printer setting'],ans:1},
{q:'What is the ShipStation API V2 companion to?',opts:['The Legacy fax line','The ShipStation application, leveraging ShipEngine','A printer','A scale'],ans:1},
{q:'Why maintain awareness of the approved-country list?',opts:['No reason','So you don\'t print to a restricted/unknown destination (SOP Part B)','To delete countries','To change rates'],ans:1},
{q:'Product defaults and service mapping let admins…',opts:['Delete products','Pre-configure weight/dimensions and map store methods to ShipStation services','Refund orders','Hide stores'],ans:1},
{q:'A carrier-spend analysis report helps you…',opts:['Change passwords','Spot where a cheaper option is consistently available','Delete carriers','Email customers'],ans:1},
{q:'When a country requires extra fields (e.g., Mexico), ShipStation…',opts:['Blocks the order forever','Prompts for the extra fields to fill before printing','Ignores them','Cancels the order'],ans:1},
{q:'What is the recommended cadence for reporting?',opts:['Never','A regular routine (e.g., weekly/monthly) so cost trends are tracked','Only once','Hourly forever'],ans:1},
{q:'If a store stops importing, what should you do?',opts:['Delete and re-add it yourself','Check Store Setup for a reconnect prompt and escalate to your direct report','Ignore it','Refund all orders'],ans:1},
{q:'Combining Scan to Verify with Scan to Print creates…',opts:['A refund loop','A fast, accurate scan-verify-weigh-print workflow','A new store','A customs form'],ans:1},
{q:'Even with advanced automation, InvenTel\'s core policy is…',opts:['Fully automatic printing','Manual review — confirm the rate and checks before printing','No checks','Ship everything free'],ans:1},
{q:'Who configures store-level branding and notification settings?',opts:['Every new hire','Usually an admin — review, don\'t change, unless instructed','The customer','The carrier'],ans:1}
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
