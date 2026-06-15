<?php /* Template Name: Claude Training */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>InvenTel — Claude (Anthropic) Training (Self-Contained) v3.1</title>
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
.callout.gray{background:#f5f5f0;border-left-color:#999}
.callout.gray strong{color:#3a3a3a}
.platform-url{background:#f5f5f0;border:1px solid #e5e5e0;border-radius:6px;padding:12px 16px;margin:14px 0;font-size:13px;line-height:2}
.platform-url strong{color:#5c5c5c}
.badge{display:inline-block;padding:2px 9px;border-radius:12px;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.6px;vertical-align:middle;margin-right:3px}
.badge-mandatory{background:#166534;color:#fff}
.badge-beginner{background:#dcfce7;color:#166534}
.badge-intermediate{background:#fef08a;color:#854d0e}
.badge-advanced{background:#991b1b;color:#fde2e2}
.badge-official{background:#e5e5e0;color:#3a3a3a}
.badge-academy{background:#8B0000;color:#fff}
.p-text{font-size:13.5px;color:#1a1a1a;margin-bottom:12px}
.p-text strong{color:#1a1a1a}
.h3-sec{font-size:15px;font-weight:700;color:#8B0000;margin:16px 0 8px}
.ul-sec{margin:0 0 12px 20px;font-size:13px;color:#1a1a1a}
.ul-sec li{margin-bottom:5px}
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
.cb.checked::after{content:'\2713';color:#fff;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-size:14px;font-weight:700}
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
      <div class="header-h1">✴️ Claude (Anthropic) — Self-Contained Training Guide</div>
      <div class="header-subtitle">Complete step-by-step training for the Claude AI assistant — the interface &amp; models, prompting, Projects, Artifacts, document analysis, Web Search &amp; Research, Skills &amp; file creation, Connectors, and responsible use — click any section header to collapse/expand.</div>
    </div>
    <div class="header-meta">All Levels (Beginner → Advanced)<br>Platform: Claude (claude.ai)<br>Format: Self-Contained / Standalone<br><span style="color:#fcd9b6;font-weight:700">v3.1 — Search Bar Edition</span></div>
  </div>
</div>
<div class="stat-row">
  <div class="stat-item"><span class="stat-val">8</span><span class="stat-lbl">Core Areas</span></div>
  <div class="stat-item"><span class="stat-val">18+</span><span class="stat-lbl">Training Sections</span></div>
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Skill Levels</span></div>
  <div class="stat-item"><span class="stat-val">30 Days</span><span class="stat-lbl">Mandatory Window</span></div>
  <div class="stat-item"><span class="stat-val">Opus 4.8</span><span class="stat-lbl">Flagship Model</span></div>
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
      <div class="toc-item" onclick="goTo('sec-overview')">1. Platform Overview<span>What Claude is + the model lineup</span></div>
      <div class="toc-item" onclick="goTo('sec-hub')">2. Official Learning Hub<span>Anthropic docs &amp; Help Center</span></div>
      <div class="toc-item" onclick="goTo('sec-begres')">3. Beginner Training Resources<span>Mandatory — external resources</span></div>
      <div class="toc-item" onclick="goTo('sec-start')">4. Getting Started — First Day Setup<span>Get dept credentials, sign in, first chat</span></div>
      <div class="toc-item" onclick="goTo('sec-prompt')">5. Prompting &amp; Conversations Deep Dive<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-projects')">6. Projects &amp; Custom Instructions<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-artifacts')">7. Artifacts &amp; File Creation<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-docs')">8. Document Analysis &amp; Vision<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-research')">9. Web Search, Research &amp; Connectors<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-responsible')">10. Responsible &amp; Secure Use<span>Beg / Int / Adv step-by-step</span></div>
      <div class="toc-item" onclick="goTo('sec-intres')">11. Intermediate Resources<span>Self-paced, optional links</span></div>
      <div class="toc-item" onclick="goTo('sec-advres')">12. Advanced Resources<span>Optional deep mastery links</span></div>
      <div class="toc-item" onclick="goTo('sec-certs')">13. Certifications &amp; Courses<span>Anthropic Academy &amp; skills</span></div>
      <div class="toc-item" onclick="goTo('cl-mandatory')">14. New Hire Checklist<span>Interactive — mandatory</span></div>
      <div class="toc-item" onclick="goTo('cl-intermediate')">15. Intermediate Checklist<span>Interactive — self-paced</span></div>
      <div class="toc-item" onclick="goTo('cl-advanced')">16. Advanced Checklist<span>Interactive — optional</span></div>
      <div class="toc-item" onclick="goTo('sec-qr')">17. Quick Reference<span>URLs, help centers, YouTube</span></div>
    </div>
  </div>
</div>

<!-- 1. PLATFORM OVERVIEW -->
<div class="slide" id="sec-overview"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span><span class="badge badge-mandatory">Mandatory</span></div><h2>✴️ 1. Platform Overview — What Claude Is</h2><p class="subtitle">Read this first. It frames everything else in the deck.</p></div>
  <div class="slide-body">
    <p class="p-text"><strong>Claude</strong> is an AI assistant built by <strong>Anthropic</strong>. At InvenTel we use it for writing, research, summarizing documents, drafting customer replies, analyzing spreadsheets, brainstorming, and building quick tools and visuals. You talk to it in plain language in a chat window — no code required to get started.</p>
    <p class="p-text">Claude is a <strong>text-and-image-input, text-output</strong> assistant. It can read what you type, read files and images you upload, search the web when needed, and write back text, tables, code, documents, and interactive previews. It does not generate photographs, audio, or video.</p>

    <div class="h3-sec">Where you can use Claude</div>
    <ul class="ul-sec">
      <li><strong>claude.ai</strong> — the web app in your browser (the main way InvenTel staff use it).</li>
      <li><strong>Desktop apps</strong> — macOS, Windows, and Linux.</li>
      <li><strong>Mobile apps</strong> — iOS and Android, for quick questions on the go.</li>
      <li><strong>Claude Code</strong> — a terminal/agentic coding tool for developers (optional, role-dependent).</li>
    </ul>

    <div class="h3-sec">The model lineup (what "model" means)</div>
    <p class="p-text">A <strong>model</strong> is the underlying engine answering you. Claude offers several, trading off speed against depth. You pick one from a dropdown in the chat box. The current family:</p>
    <ul class="ul-sec">
      <li><strong>Claude Opus 4.8</strong> — the flagship. Best for the hardest reasoning, long writing, and complex analysis. The default choice for most InvenTel knowledge work.</li>
      <li><strong>Claude Opus 4.7 / 4.6</strong> — previous flagship versions, still strong general-purpose models.</li>
      <li><strong>Claude Sonnet 4.6</strong> — balanced: fast and very capable for everyday tasks.</li>
      <li><strong>Claude Haiku 4.5</strong> — fastest and lightest, for quick, simple questions.</li>
    </ul>
    <div class="callout"><strong>Rule of thumb:</strong> Start with the flagship (Opus 4.8) for important work. Drop to Sonnet or Haiku when you want quick answers and speed matters more than depth. You can switch models mid-conversation.</div>

    <div class="h3-sec">The signature features you'll learn in this deck</div>
    <ul class="ul-sec">
      <li><strong>Projects</strong> — persistent workspaces with their own uploaded files and custom instructions.</li>
      <li><strong>Artifacts</strong> — a live side panel that renders documents, code, diagrams, and interactive apps you can edit.</li>
      <li><strong>Document analysis</strong> — upload PDFs, Word docs, spreadsheets, and images and ask questions about them.</li>
      <li><strong>Web Search &amp; Research</strong> — pull current information with citations, or run a deeper multi-source investigation.</li>
      <li><strong>Skills &amp; file creation</strong> — generate polished Word docs, slide decks, spreadsheets, and PDFs.</li>
      <li><strong>Connectors</strong> — link tools like Google Drive, Gmail, and Calendar so Claude can work with your data.</li>
    </ul>

    <div class="callout gray"><strong>Knowledge cutoff &amp; checking facts:</strong> Each model is trained up to a point in time and may not know the very latest events. For anything current — prices, news, who holds a role today — ask Claude to <strong>search the web</strong> so the answer is grounded in live sources rather than memory.</div>
  </div>
</div>

<!-- 2. OFFICIAL LEARNING HUB -->
<div class="slide" id="sec-hub"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Official Hub</span></div><h2>🎓 2. Official Learning Hub</h2><p class="subtitle">Anthropic's own documentation and help center — the authoritative sources.</p></div>
  <div class="slide-body">
    <p class="p-text">Everything you need to operate Claude day-to-day is taught inline in this deck. The links below are the official Anthropic destinations for when you want to go deeper or confirm a detail.</p>
    <div class="platform-url">
      <strong>App login:</strong> <a href="https://claude.ai" target="_blank">claude.ai</a><br>
      <strong>Help Center:</strong> <a href="https://support.claude.com" target="_blank">support.claude.com</a><br>
      <strong>Documentation:</strong> <a href="https://docs.claude.com" target="_blank">docs.claude.com</a><br>
      <strong>Anthropic Academy:</strong> <a href="https://www.anthropic.com/learn" target="_blank">anthropic.com/learn</a><br>
      <strong>Product news:</strong> <a href="https://www.anthropic.com/news" target="_blank">anthropic.com/news</a>
    </div>
    <div class="callout"><strong>Bookmark these two:</strong> the <a href="https://support.claude.com" target="_blank">Help Center</a> for "how do I…" questions about the app, and <a href="https://docs.claude.com" target="_blank">docs.claude.com</a> for API/developer detail.</div>
  </div>
</div>

<!-- 3. BEGINNER TRAINING RESOURCES -->
<div class="slide" id="sec-begres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span><span class="badge badge-mandatory">Mandatory</span></div><h2>🟢 3. Beginner Training Resources</h2><p class="subtitle">Mandatory supplementary resources — complete alongside the inline tutorials.</p></div>
  <div class="slide-body">
    <div class="card"><div class="card-title">Anthropic Academy — Claude Fundamentals <span class="badge badge-beginner">Beginner</span></div><div class="card-desc">Official getting-started learning path covering the interface, prompting basics, and core features.</div><div class="card-meta"><strong>Format:</strong> Self-paced course &nbsp;|&nbsp; <strong>Where:</strong> <a href="https://www.anthropic.com/learn" target="_blank">anthropic.com/learn</a></div></div>
    <div class="card"><div class="card-title">Help Center — Getting Started Collection <span class="badge badge-beginner">Beginner</span></div><div class="card-desc">Short how-to articles: signing in, starting a chat, switching models, uploading files, and using Artifacts.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <strong>Where:</strong> <a href="https://support.claude.com" target="_blank">support.claude.com</a></div></div>
    <div class="card"><div class="card-title">YouTube — Claude for Beginners <span class="badge badge-beginner">Beginner</span></div><div class="card-desc">Watch a walkthrough of the interface and a first project end-to-end.</div><div class="card-meta"><strong>Format:</strong> Video &nbsp;|&nbsp; <a href="https://www.youtube.com/results?search_query=claude+ai+tutorial+for+beginners+2026" target="_blank">Search beginner tutorials →</a></div></div>
  </div>
</div>

<!-- 4. GETTING STARTED -->
<div class="slide" id="sec-start"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span><span class="badge badge-mandatory">Mandatory</span></div><h2>🟢 4. Getting Started — First Day Setup</h2><p class="subtitle">Do these steps in order on your first day.</p></div>
  <div class="slide-body">
    <div class="callout"><strong>Before you start:</strong> Each department shares <strong>one Claude account</strong> — InvenTel does not issue an individual Claude login to each person. Ask your <strong>department lead</strong> for the shared Claude credentials for your team. Do not create a personal account for work — use the shared department account your lead provides.</div>

    <div class="steps-box"><h4>🔐 Step 1 — Get your department's credentials &amp; sign in</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Ask your <strong>department lead</strong> for your team's <strong>shared Claude account credentials</strong>. Each department has its own shared account — you will not receive a personal login.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Go to <code>claude.ai</code> in your browser (or open the desktop/mobile app if InvenTel has it installed).</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Sign in using the <strong>shared department credentials</strong> your lead gave you. Keep these credentials confidential and do not share them outside your department.</div></div>
      <div class="step-tip"><strong>💡</strong> If you don't have the credentials or can't sign in, contact your <strong>department lead</strong> — don't work around it by creating a personal account.</div>
    </div>

    <div class="steps-box"><h4>🧭 Step 2 — Learn the interface</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">The <strong>message box</strong> at the bottom is where you type. Press <span class="kbd">Enter</span> to send; <span class="kbd">Shift</span>+<span class="kbd">Enter</span> for a new line.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">The <strong>model dropdown</strong> sits near the message box. Click it to choose Opus 4.8, Sonnet 4.6, etc.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">The <strong>left sidebar</strong> holds your chat history, <span class="step-nav">Projects</span>, and a <span class="step-nav">New chat</span> button.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">The <strong>＋ / paperclip</strong> in the message box lets you attach files and images. The <strong>tools/settings</strong> controls let you toggle features like web search.</div></div>
      <div class="step"><div class="step-num green">5</div><div class="step-text">Your <strong>profile menu</strong> (bottom-left) opens <span class="step-nav">Settings</span> — where you set your preferences, manage connectors, and toggle features.</div></div>
    </div>

    <div class="steps-box"><h4>💬 Step 3 — Your first chat</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Click <span class="step-nav">New chat</span>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Pick <strong>Claude Opus 4.8</strong> from the model dropdown.</div></div>
      <div class="step"><div class="step-num green">3</div><div class="step-text">Type a real task, e.g. <code>Draft a friendly 3-sentence reply thanking a customer for their order and confirming it ships in 2 days.</code> Press <span class="kbd">Enter</span>.</div></div>
      <div class="step"><div class="step-num green">4</div><div class="step-text">Read the reply, then <strong>refine it</strong>: <code>Make it warmer and add that they can reply here with any questions.</code> Claude keeps the context of the conversation.</div></div>
      <div class="step-tip"><strong>💡</strong> You don't need a perfect prompt. Start simple, read the answer, and steer with follow-ups. Conversation is the tool.</div>
    </div>

    <div class="steps-box"><h4>⚙️ Step 4 — Set your preferences (optional but recommended)</h4>
      <div class="step"><div class="step-num green">1</div><div class="step-text">Open <span class="step-nav">Settings</span> → look for <strong>Profile</strong> or <strong>Preferences</strong>.</div></div>
      <div class="step"><div class="step-num green">2</div><div class="step-text">Add brief notes about how you like responses — e.g. "Keep answers concise; use bullet points for steps; I work in e-commerce customer support." Claude applies these across chats.</div></div>
      <div class="step-warning">⚠️ Never paste customer personal data, passwords, or confidential InvenTel information into preferences or any chat unless your manager has confirmed it's approved. See Section 10.</div>
    </div>
  </div>
</div>

<!-- 5. PROMPTING & CONVERSATIONS -->
<div class="slide" id="sec-prompt"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span><span class="badge badge-intermediate">Intermediate</span><span class="badge badge-advanced">Advanced</span></div><h2>💬 5. Prompting &amp; Conversations — Deep Dive</h2><p class="subtitle">How you ask is most of the skill. Step-by-step for every level.</p></div>
  <div class="slide-body">
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>The four basics of a good prompt</h3>
        <div class="sub-card"><strong>📝 Clarity, Context, Constraints, Examples</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text"><strong>Clarity:</strong> say exactly what you want — "summarize," "rewrite," "list," "compare."</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text"><strong>Context:</strong> who it's for and why — "for a customer email," "for my manager."</div></div>
          <div class="step"><div class="step-num green">3</div><div class="step-text"><strong>Constraints:</strong> length, tone, format — "under 100 words," "friendly," "as a bulleted list."</div></div>
          <div class="step"><div class="step-num green">4</div><div class="step-text"><strong>Examples:</strong> paste a sample of the style or output you like.</div></div>
          <div class="step-tip"><strong>💡</strong> Vague in, vague out. "Write something about shipping" is weak; "Write a 2-sentence shipping-delay apology to a customer, warm tone" is strong.</div>
        </div>
        <div class="sub-card"><strong>🔁 Refine with follow-ups</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Don't restart — reply in the same chat: "shorter," "more formal," "add a bullet about returns."</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Structure &amp; roles</h3>
        <div class="sub-card"><strong>🎭 Give Claude a role</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Open with a role: <code>You are a senior CX agent at an e-commerce brand.</code> It shifts tone and judgment.</div></div>
        </div>
        <div class="sub-card"><strong>🏷️ Use sections &amp; tags</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Separate instructions from content: put the task up top, then paste the material under a clear label like <code>TEXT TO EDIT:</code>.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Ask for a specific output shape: "Return a table with columns Issue, Severity, Fix."</div></div>
        </div>
        <div class="sub-card"><strong>🧪 Show, don't just tell</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Give one good example and one bad example so Claude learns the boundary you care about.</div></div>
          <div class="step-tip"><strong>💡</strong> If output drifts, restate the constraint — recency in the chat carries weight.</div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Reasoning &amp; reuse</h3>
        <div class="sub-card"><strong>🧠 Ask for step-by-step thinking</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For complex problems, add: <code>Think through this step by step before giving your final answer.</code> It improves accuracy on multi-step logic.</div></div>
        </div>
        <div class="sub-card"><strong>♻️ Build reusable prompt templates</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Save a proven prompt (with placeholders like <code>[customer name]</code>) in a doc or in a Project's custom instructions so the whole team reuses it.</div></div>
        </div>
        <div class="sub-card"><strong>🔍 Pressure-test ideas</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Ask Claude to argue the opposite side, find weaknesses, or list assumptions — a fast way to stress-test a plan or message.</div></div>
          <div class="step-warning">⚠️ Claude can be confidently wrong. For facts, ask it to search and cite. For decisions, treat it as a smart draft, not the final word.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 6. PROJECTS & CUSTOM INSTRUCTIONS -->
<div class="slide" id="sec-projects"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span><span class="badge badge-intermediate">Intermediate</span><span class="badge badge-advanced">Advanced</span></div><h2>🗂️ 6. Projects &amp; Custom Instructions — Deep Dive</h2><p class="subtitle">Give Claude persistent context so you stop repeating yourself.</p></div>
  <div class="slide-body">
    <p class="p-text">A <strong>Project</strong> is a dedicated workspace with three parts: its own <strong>chat history</strong>, a <strong>knowledge base</strong> of files you upload, and <strong>custom instructions</strong> that shape how Claude behaves inside it. Think of it as a teammate you've briefed once who then stays on-brief for every conversation.</p>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Create your first Project</h3>
        <div class="sub-card"><strong>📁 Make a Project</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">In the left sidebar, click <span class="step-nav">Projects</span> → <span class="step-nav">+ New project</span> (or "Create project").</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Name it for its purpose, e.g. "CX Email Replies" or "Weekly Reporting."</div></div>
        </div>
        <div class="sub-card"><strong>💬 Work inside it</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Start a new chat from within the Project. Every chat there shares the same instructions and files.</div></div>
          <div class="step-tip"><strong>💡</strong> Keep one Project per purpose. Don't cram unrelated work into one — focused context gives better answers.</div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Knowledge base &amp; instructions</h3>
        <div class="sub-card"><strong>📚 Add knowledge files</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Open the Project → find <strong>Project knowledge</strong> → upload reference material: brand style guide, FAQs, policy docs, templates, past examples.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Claude can now answer from those files in any chat in the Project without you pasting them each time.</div></div>
        </div>
        <div class="sub-card"><strong>📝 Write custom instructions</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">In the Project, open <strong>custom instructions</strong> and define: role, tone, format, and what to avoid.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Be specific. Not "be helpful" but "Reply as InvenTel CX. Warm, concise. Always offer a next step. Never promise refunds without manager approval."</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Tune &amp; maintain</h3>
        <div class="sub-card"><strong>🔧 Iterate on instructions</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Notice the corrections you keep making, then add them to the instructions — explain the <em>why</em>, not just the rule.</div></div>
        </div>
        <div class="sub-card"><strong>🧹 Curate the knowledge base</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Review monthly: remove outdated docs, add new ones. Stale knowledge produces stale answers.</div></div>
        </div>
        <div class="sub-card"><strong>👥 Share (Team/Enterprise)</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">On Team/Enterprise plans, share a Project so the whole team works from the same instructions and files.</div></div>
          <div class="step-warning">⚠️ Only upload files you're authorized to use. Treat the knowledge base like any shared drive — no unapproved customer or confidential data.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 7. ARTIFACTS & FILE CREATION -->
<div class="slide" id="sec-artifacts"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span><span class="badge badge-intermediate">Intermediate</span><span class="badge badge-advanced">Advanced</span></div><h2>🧩 7. Artifacts &amp; File Creation — Deep Dive</h2><p class="subtitle">See, edit, and build work in a side panel — and export real files.</p></div>
  <div class="slide-body">
    <p class="p-text">An <strong>Artifact</strong> is a dedicated side panel that opens when Claude produces substantial standalone content — a document, a chunk of code, a diagram, an SVG, or a small interactive app. Instead of scrolling text, you get a live preview you can read, edit, and iterate on through conversation.</p>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Create &amp; iterate</h3>
        <div class="sub-card"><strong>✨ Trigger an Artifact</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Ask for something substantial: <code>Write a one-page onboarding checklist for new CX hires.</code> A side panel opens with the result.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Claude decides when to use an Artifact based on length and reusability — you don't toggle anything.</div></div>
        </div>
        <div class="sub-card"><strong>🔁 Edit by asking</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Keep chatting: "add a section on tools," "make it shorter," "change the heading." The panel updates in place.</div></div>
          <div class="step-tip"><strong>💡</strong> Copy the content out with the copy button, or download it where the option is offered.</div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Real files via Skills</h3>
        <div class="sub-card"><strong>📄 Create polished documents</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Ask for a deliverable: <code>Turn this into a formatted Word document</code> or <code>Make a slide deck of these 5 points.</code></div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">With file creation enabled, Claude can produce <strong>Word (.docx), PowerPoint (.pptx), Excel (.xlsx), and PDF</strong> files you can download.</div></div>
        </div>
        <div class="sub-card"><strong>🧰 Enable the feature</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">In <span class="step-nav">Settings</span>, ensure <strong>Code execution and file creation</strong> (and <strong>Artifacts</strong>) are toggled on. On Enterprise this may be set by an owner.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Interactive &amp; data viz</h3>
        <div class="sub-card"><strong>📊 Charts &amp; diagrams</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Paste data and ask for a chart, or ask for a flow/architecture <strong>diagram</strong> — Claude renders it live and adjusts on request.</div></div>
        </div>
        <div class="sub-card"><strong>🖥️ Interactive apps</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Claude can build small interactive tools (calculators, trackers) as HTML/React Artifacts you preview right in the panel.</div></div>
        </div>
        <div class="sub-card"><strong>⚠️ Know the limits</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Artifacts are a sandboxed preview — no hosting/deployment, no external database, and they don't persist data on their own. Treat them as prototypes; move anything production-bound into a real environment.</div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 8. DOCUMENT ANALYSIS & VISION -->
<div class="slide" id="sec-docs"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span><span class="badge badge-intermediate">Intermediate</span><span class="badge badge-advanced">Advanced</span></div><h2>📎 8. Document Analysis &amp; Vision — Deep Dive</h2><p class="subtitle">Have a conversation with your files and images.</p></div>
  <div class="slide-body">
    <p class="p-text">Claude reads what you upload. You can attach <strong>PDFs, Word docs, spreadsheets, CSVs, text files, and images</strong>, then ask questions, request summaries, or pull out structured data — without copy-pasting the contents.</p>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Upload &amp; ask</h3>
        <div class="sub-card"><strong>📤 Attach a file</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Click the <strong>＋ / paperclip</strong> in the message box and select a file (or drag-and-drop it in).</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Ask a question: <code>Summarize this in 5 bullets</code> or <code>What are the action items?</code></div></div>
        </div>
        <div class="sub-card"><strong>🖼️ Use images</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Upload a screenshot or photo of a document and ask Claude to transcribe it, describe it, or explain a chart in it.</div></div>
          <div class="step-tip"><strong>💡</strong> Clear, readable images and well-structured PDFs give the best results.</div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Extract &amp; compare</h3>
        <div class="sub-card"><strong>📋 Pull structured data</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Ask for a table: <code>Extract every order number, date, and total into a table.</code></div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Then: <code>Now give me that as a CSV I can download.</code></div></div>
        </div>
        <div class="sub-card"><strong>🔀 Compare documents</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Upload two files and ask: <code>What changed between version A and version B?</code> or <code>Which vendor quote is cheaper and why?</code></div></div>
        </div>
        <div class="sub-card"><strong>❓ Follow-up Q&amp;A</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Keep asking questions against the same upload — "what's the refund policy on page 3?" — for a back-and-forth with the document.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Spreadsheets &amp; long docs</h3>
        <div class="sub-card"><strong>📈 Analyze a spreadsheet</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Upload an .xlsx/CSV and ask for analysis: <code>Which region grew fastest last quarter? Chart it.</code> Claude can compute and visualize.</div></div>
        </div>
        <div class="sub-card"><strong>📚 Long documents &amp; Projects</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For material you'll reference repeatedly, put it in a <strong>Project knowledge base</strong> instead of re-uploading each chat.</div></div>
        </div>
        <div class="sub-card"><strong>✅ Verify the output</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">For numbers and quotes, ask Claude to point to where in the document it found them, and spot-check against the source.</div></div>
          <div class="step-warning">⚠️ Don't upload customer PII or confidential InvenTel files unless your manager has confirmed it's permitted on our plan. See Section 10.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 9. WEB SEARCH, RESEARCH & CONNECTORS -->
<div class="slide" id="sec-research"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span><span class="badge badge-intermediate">Intermediate</span><span class="badge badge-advanced">Advanced</span></div><h2>🔎 9. Web Search, Research &amp; Connectors — Deep Dive</h2><p class="subtitle">Ground answers in current sources and connect your tools.</p></div>
  <div class="slide-body">
    <p class="p-text">By default, Claude answers from what it learned in training. For anything <strong>current</strong> — news, prices, who holds a role today — turn on <strong>Web Search</strong> so it pulls live results with citations. For bigger questions, <strong>Research</strong> goes further across many sources. <strong>Connectors</strong> let Claude work with your own tools like Google Drive, Gmail, and Calendar.</p>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>Search the web</h3>
        <div class="sub-card"><strong>🌐 Turn on Web Search</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">In the message box, open the <strong>tools/settings</strong> control and toggle <strong>Web search</strong> on (or just ask Claude to "search the web for…").</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">Ask a current question: <code>What are the latest shipping carrier surcharges this month?</code></div></div>
        </div>
        <div class="sub-card"><strong>🔗 Check citations</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Claude cites its sources — click through to confirm anything important before you rely on it.</div></div>
          <div class="step-tip"><strong>💡</strong> If an answer might be out of date, just say "search for the current figure."</div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Deeper research</h3>
        <div class="sub-card"><strong>🧭 Use Research mode</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">For multi-part questions, enable <strong>Research</strong> (where available). Claude investigates across many sources and returns a structured, cited write-up.</div></div>
          <div class="step"><div class="step-num amber">2</div><div class="step-text">Good for: market scans, competitor overviews, "compare three options with pros/cons."</div></div>
        </div>
        <div class="sub-card"><strong>🧠 Extended thinking</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">For hard reasoning, turn on <strong>Extended thinking</strong> so Claude works through the problem more deliberately before answering.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Connectors &amp; integrations</h3>
        <div class="sub-card"><strong>🔌 Connect your tools</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">In <span class="step-nav">Settings → Connectors</span>, connect approved tools — e.g. <strong>Google Drive</strong>, <strong>Gmail</strong>, <strong>Google Calendar</strong>.</div></div>
          <div class="step"><div class="step-num red">2</div><div class="step-text">Then ask things like <code>Find my Q3 report in Drive and summarize it</code> or <code>What's on my calendar tomorrow?</code></div></div>
        </div>
        <div class="sub-card"><strong>🧱 MCP &amp; custom connectors</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Connectors run on the <strong>Model Context Protocol (MCP)</strong>. Admins can enable additional approved connectors for the org.</div></div>
        </div>
        <div class="sub-card"><strong>🔐 Authorize carefully</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Only connect accounts InvenTel approves, and review what each connector can access before authorizing.</div></div>
          <div class="step-warning">⚠️ A connector gives Claude access to real data in that account. Confirm with your manager before connecting any work system.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 10. RESPONSIBLE & SECURE USE -->
<div class="slide" id="sec-responsible"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-beginner">Beginner</span><span class="badge badge-mandatory">Mandatory</span><span class="badge badge-intermediate">Intermediate</span><span class="badge badge-advanced">Advanced</span></div><h2>🛡️ 10. Responsible &amp; Secure Use — Deep Dive</h2><p class="subtitle">How to use Claude safely at InvenTel. The Beginner tier here is mandatory.</p></div>
  <div class="slide-body">
    <div class="callout"><strong>This section is required for everyone.</strong> AI is a powerful drafting partner, not an authority. You are responsible for what you send, publish, or act on.</div>
    <div class="three-col">
      <div class="level-block beg"><span class="badge badge-beginner">Beginner</span><h3>The ground rules</h3>
        <div class="sub-card"><strong>🔒 Protect sensitive data</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Don't paste customer personal data, passwords, payment details, or confidential InvenTel information into a chat unless your manager has confirmed it's approved on our plan.</div></div>
          <div class="step"><div class="step-num green">2</div><div class="step-text">When in doubt, anonymize — remove names and account numbers before asking.</div></div>
        </div>
        <div class="sub-card"><strong>✅ Verify before you trust</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Claude can be confidently wrong ("hallucinate"). Check facts, figures, names, and links — especially anything customer-facing.</div></div>
        </div>
        <div class="sub-card"><strong>👤 Keep a human in the loop</strong>
          <div class="step"><div class="step-num green">1</div><div class="step-text">Review and edit AI drafts before sending. You own the final output, not Claude.</div></div>
        </div>
      </div>
      <div class="level-block int"><span class="badge badge-intermediate">Intermediate</span><h3>Good judgment</h3>
        <div class="sub-card"><strong>📣 Disclose where required</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Follow InvenTel policy on when to tell customers or colleagues that content was AI-assisted.</div></div>
        </div>
        <div class="sub-card"><strong>⚖️ No high-stakes auto-decisions</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">Don't let Claude make final legal, financial, HR, or medical decisions. Use it to inform a human decision.</div></div>
        </div>
        <div class="sub-card"><strong>🧾 Cite sources for claims</strong>
          <div class="step"><div class="step-num amber">1</div><div class="step-text">When a claim matters, have Claude search and cite, then keep the source link with your work.</div></div>
        </div>
      </div>
      <div class="level-block adv"><span class="badge badge-advanced">Advanced</span><h3>Security &amp; governance</h3>
        <div class="sub-card"><strong>🧱 Mind connector scope</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Connect only approved accounts; review and periodically revoke connector access you no longer need.</div></div>
        </div>
        <div class="sub-card"><strong>🪤 Watch for prompt injection</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Content inside a file or web page can contain instructions. Treat instructions that arrive inside uploaded/fetched content with caution — confirm before acting on them.</div></div>
        </div>
        <div class="sub-card"><strong>📚 Know our policy</strong>
          <div class="step"><div class="step-num red">1</div><div class="step-text">Follow InvenTel's AI acceptable-use policy and Anthropic's usage policies. Escalate anything that feels risky to your manager.</div></div>
          <div class="step-warning">⚠️ If you're unsure whether something is allowed, stop and ask before proceeding. Reversing a mistake is harder than preventing one.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 11. INTERMEDIATE RESOURCES -->
<div class="slide" id="sec-intres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-intermediate">Self-Paced — Optional</span></div><h2>🟡 11. Intermediate Training — Self-Paced Resources</h2><p class="subtitle">Recommended after the mandatory training — at your own pace.</p></div>
  <div class="slide-body">
    <div class="card intermediate"><div class="card-title">Anthropic Academy — Prompting &amp; Projects <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Go deeper on prompt structure, custom instructions, and building reusable Project workspaces.</div><div class="card-meta"><strong>Format:</strong> Course &nbsp;|&nbsp; <strong>Where:</strong> <a href="https://www.anthropic.com/learn" target="_blank">anthropic.com/learn</a></div></div>
    <div class="card intermediate"><div class="card-title">Prompt Engineering Overview <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Anthropic's documented best practices: clarity, examples, step-by-step reasoning, structured outputs.</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <a href="https://docs.claude.com/en/docs/build-with-claude/prompt-engineering/overview" target="_blank">Read the guide →</a></div></div>
    <div class="card intermediate"><div class="card-title">Help Center — Skills &amp; File Creation <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">How to enable and use Skills to generate Word, PowerPoint, Excel, and PDF files.</div><div class="card-meta"><strong>Format:</strong> Articles &nbsp;|&nbsp; <a href="https://support.claude.com" target="_blank">support.claude.com</a></div></div>
    <div class="card intermediate"><div class="card-title">YouTube — Claude Intermediate Tips <span class="badge badge-intermediate">Intermediate</span></div><div class="card-desc">Workflow walkthroughs for Projects, Artifacts, and document analysis.</div><div class="card-meta"><strong>Format:</strong> Video &nbsp;|&nbsp; <a href="https://www.youtube.com/results?search_query=claude+ai+projects+artifacts+tutorial+2026" target="_blank">Search intermediate tutorials →</a></div></div>
  </div>
</div>

<!-- 12. ADVANCED RESOURCES -->
<div class="slide" id="sec-advres"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-advanced">Optional — Deep Mastery</span></div><h2>🔴 12. Advanced Training — Optional Mastery Resources</h2><p class="subtitle">For power users and technical roles. Entirely optional.</p></div>
  <div class="slide-body">
    <div class="card advanced"><div class="card-title">Claude Developer Documentation <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">The full API reference — tool use, structured outputs, streaming, and model strings — for anyone building on Claude.</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <a href="https://docs.claude.com" target="_blank">docs.claude.com</a></div></div>
    <div class="card advanced"><div class="card-title">Claude Code <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Anthropic's agentic coding tool for the terminal and IDE. For engineering roles who want Claude to work directly in a codebase.</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <a href="https://docs.claude.com/en/docs/claude-code/overview" target="_blank">Claude Code overview →</a></div></div>
    <div class="card advanced"><div class="card-title">Model Context Protocol (MCP) <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">The open standard behind Connectors. Learn how custom tools and data sources plug into Claude.</div><div class="card-meta"><strong>Format:</strong> Docs &nbsp;|&nbsp; <a href="https://docs.claude.com" target="_blank">docs.claude.com</a></div></div>
    <div class="card advanced"><div class="card-title">YouTube — Advanced Claude &amp; Claude Code <span class="badge badge-advanced">Advanced</span></div><div class="card-desc">Agentic workflows, MCP connectors, and building AI-powered tools.</div><div class="card-meta"><strong>Format:</strong> Video &nbsp;|&nbsp; <a href="https://www.youtube.com/results?search_query=claude+code+mcp+advanced+tutorial+2026" target="_blank">Search advanced tutorials →</a></div></div>
  </div>
</div>

<!-- 13. CERTIFICATIONS & COURSES -->
<div class="slide" id="sec-certs"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-academy">Certifications</span></div><h2>🏅 13. Certifications &amp; Courses</h2><p class="subtitle">Optional credentials and structured learning paths.</p></div>
  <div class="slide-body">
    <p class="p-text">Anthropic offers free, self-paced learning through <strong>Anthropic Academy</strong>, and there are third-party AI-skills courses and credentials that feature Claude. These are optional career-development tools, not required for your role.</p>
    <table class="cert-table">
      <thead><tr><th>Path</th><th>Provider</th><th>Level</th></tr></thead>
      <tbody>
        <tr><td>Claude / AI Fluency learning paths</td><td>Anthropic Academy</td><td>Beginner → Intermediate</td></tr>
        <tr><td>Building with the Claude API</td><td>Anthropic Academy / Docs</td><td>Advanced</td></tr>
        <tr><td>Generative AI &amp; prompt-engineering courses featuring Claude</td><td>Third-party platforms</td><td>All levels</td></tr>
      </tbody>
    </table>
    <div class="callout gray">💡 <strong>Optional Personal Investment:</strong> The certifications and credentialed courses referenced above are not covered by InvenTel and may require an out-of-pocket fee to attempt the assessments or access proctored exams. The learning content and labs on Anthropic Academy can be explored at no cost, but earning any official badge or third-party certification may require a paid assessment. These credentials are entirely optional — they are personal career development tools you can pursue on your own time if you'd like to formally validate your Claude and AI skills.</div>
  </div>
</div>

<!-- 14. NEW HIRE CHECKLIST (MANDATORY) -->
<div class="checklist-section mandatory" id="cl-mandatory">
  <div class="checklist-head mandatory"><h2>✅ 14. New Hire Checklist</h2><div class="ch-sub">Mandatory — complete within your first 30 days. Track progress and share with your manager.</div><span class="ch-badge">Beginner / Mandatory</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">Group 1 — App Downloads &amp; Device Setup (Optional)</div><ul class="checklist-items">
      <li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Install the Claude desktop app (macOS / Windows / Linux) <span class="ci-est">~5 min</span></div><div class="ci-desc">Optional convenience for quick access from your desktop.</div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">Group 2 — Mobile App Downloads (Optional)</div><ul class="checklist-items">
      <li><div class="cb" data-optional="true" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Install the Claude mobile app (iOS / Android) <span class="ci-est">~3 min</span></div><div class="ci-desc">Optional — for quick questions on the go.</div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">Group 3 — Account Setup &amp; First Steps (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Ask your department lead for your team's shared Claude credentials (Sec 4) <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Get your department's shared Claude credentials from your lead, sign in at claude.ai, and locate the message box, model dropdown, and sidebar (Sec 4) <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Send your first chat and refine the reply with a follow-up (Sec 4) <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Switch between Opus 4.8, Sonnet 4.6, and Haiku 4.5 to feel the difference (Sec 1, 4) <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Add basic personal preferences in Settings (Sec 4) <span class="ci-est">~5 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">Group 4 — Core Skills Training (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Write a prompt using all four basics: clarity, context, constraints, example (Sec 5) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Create your first Project and start a chat inside it (Sec 6) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Trigger an Artifact and edit it with a follow-up request (Sec 7) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Upload a document and ask Claude to summarize it (Sec 8) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Turn on Web Search and ask a current question, then check the citations (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">Group 5 — Responsible Use (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Read the Responsible &amp; Secure Use ground rules in full (Sec 10) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Confirm with your manager what data is and isn't approved for Claude (Sec 10) <span class="ci-est">~5 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Practice verifying an AI answer against a primary source (Sec 9, 10) <span class="ci-est">~5 min</span></div></div></li>
    </ul></div>
    <div class="checklist-group"><div class="checklist-group-title cgt-mandatory">Group 6 — External Resources (Mandatory)</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Bookmark support.claude.com and docs.claude.com (Sec 2) <span class="ci-est">~2 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Start the Anthropic Academy Claude Fundamentals path (Sec 3) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'mandatory')"></div><div class="ci-content"><div class="ci-title">Watch one beginner Claude tutorial video (Sec 3) <span class="ci-est">~15 min</span></div></div></li>
    </ul></div>
  </div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-mandatory" style="color:#166534">0 of 16 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-mandatory" style="background:#16a34a"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#166534" onclick="resetList('mandatory')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('mandatory')">📝 Take Quiz</button></div></div>
</div>

<!-- 15. INTERMEDIATE CHECKLIST -->
<div class="checklist-section intermediate" id="cl-intermediate">
  <div class="checklist-head intermediate"><h2>✅ 15. Intermediate Checklist</h2><div class="ch-sub">Self-paced — recommended after mandatory training.</div><span class="ch-badge">Intermediate / Self-Paced</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-intermediate">Build deeper skills</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Give Claude a role and request a specific output shape (table) (Sec 5) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Add knowledge files to a Project and ask a question answered from them (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Write custom instructions for a Project (role, tone, format, avoid) (Sec 6) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Enable file creation and generate a Word doc or slide deck (Sec 7) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Extract data from a document into a downloadable CSV (Sec 8) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Compare two uploaded documents and summarize the differences (Sec 8) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Run a Research query on a multi-part question (Sec 9) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Try Extended thinking on a hard reasoning task (Sec 9) <span class="ci-est">~10 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'intermediate')"></div><div class="ci-content"><div class="ci-title">Complete an Anthropic Academy intermediate module (Sec 11) <span class="ci-est">~30 min</span></div></div></li>
    </ul></div>
  </div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-intermediate" style="color:#854d0e">0 of 9 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-intermediate" style="background:#ca8a04"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#854d0e" onclick="resetList('intermediate')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('intermediate')">📝 Take Quiz</button></div></div>
</div>

<!-- 16. ADVANCED CHECKLIST -->
<div class="checklist-section advanced" id="cl-advanced">
  <div class="checklist-head advanced"><h2>✅ 16. Advanced Checklist</h2><div class="ch-sub">Optional — for power users and technical roles.</div><span class="ch-badge">Advanced / Optional</span></div>
  <div class="checklist-body">
    <div class="checklist-group"><div class="checklist-group-title cgt-advanced">Master the platform</div><ul class="checklist-items">
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Build a reusable prompt template with placeholders and save it in a Project (Sec 5, 6) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Have Claude generate a chart or diagram Artifact from your data (Sec 7) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Analyze a spreadsheet end-to-end and produce a visualized insight (Sec 8) <span class="ci-est">~25 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Connect an approved tool (e.g. Google Drive) and run a query against it (Sec 9) <span class="ci-est">~20 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Read the prompt-engineering docs and apply one new technique (Sec 11) <span class="ci-est">~30 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Review connector permissions and revoke anything unneeded (Sec 10) <span class="ci-est">~15 min</span></div></div></li>
      <li><div class="cb" onclick="tick(this,'advanced')"></div><div class="ci-content"><div class="ci-title">Explore Claude Code or MCP docs if relevant to your role (Sec 12) <span class="ci-est">~30 min</span></div></div></li>
    </ul></div>
  </div>
  <div class="checklist-footer"><div><div class="progress-label" id="lbl-advanced" style="color:#991b1b">0 of 7 completed</div><div class="progress-bar-wrap"><div class="progress-bar" id="bar-advanced" style="background:#991b1b"></div></div></div><div class="btn-row"><button class="reset-btn" style="background:#991b1b" onclick="resetList('advanced')">Reset Checklist</button><button class="quiz-start-btn" onclick="startQuiz('advanced')">📝 Take Quiz</button></div></div>
</div>

<!-- 17. QUICK REFERENCE -->
<div class="slide" id="sec-qr"><div class="slide-header" onclick="toggleSection(this)"><span class="collapse-arrow">▼</span><div style="margin-bottom:6px"><span class="badge badge-official">Quick Reference</span></div><h2>🔗 17. Quick Reference — Platform Access &amp; Help Centers</h2></div>
  <div class="slide-body"><div class="qr-grid">
    <div class="qr-card"><h4>🔐 Platform Access</h4><ul>
      <li><a href="https://claude.ai" target="_blank">Claude App Login (claude.ai)</a></li>
      <li><a href="https://support.claude.com" target="_blank">Claude Help Center</a></li>
      <li><a href="https://docs.claude.com" target="_blank">Claude Documentation</a></li>
      <li><a href="https://www.anthropic.com" target="_blank">Anthropic.com</a></li>
      <li><a href="https://www.anthropic.com/news" target="_blank">Product News</a></li>
    </ul></div>
    <div class="qr-card"><h4>🎓 Learning &amp; Help</h4><ul>
      <li><a href="https://www.anthropic.com/learn" target="_blank">Anthropic Academy</a></li>
      <li><a href="https://support.claude.com" target="_blank">Getting Started Articles</a></li>
      <li><a href="https://docs.claude.com/en/docs/build-with-claude/prompt-engineering/overview" target="_blank">Prompt Engineering Guide</a></li>
      <li><a href="https://docs.claude.com/en/docs/claude-code/overview" target="_blank">Claude Code Overview</a></li>
    </ul></div>
    <div class="qr-card"><h4>🛠️ Developer &amp; Integrations</h4><ul>
      <li><a href="https://docs.claude.com/en/api/overview" target="_blank">API Overview</a></li>
      <li><a href="https://docs.claude.com" target="_blank">Connectors &amp; MCP</a></li>
      <li><a href="https://www.npmjs.com/package/@anthropic-ai/claude-code" target="_blank">Claude Code (npm)</a></li>
    </ul></div>
    <div class="qr-card"><h4>🎬 YouTube</h4><ul>
      <li><a href="https://www.youtube.com/results?search_query=claude+ai+tutorial+for+beginners+2026" target="_blank">Beginner Tutorial</a></li>
      <li><a href="https://www.youtube.com/results?search_query=claude+ai+projects+artifacts+tutorial+2026" target="_blank">Intermediate: Projects &amp; Artifacts</a></li>
      <li><a href="https://www.youtube.com/results?search_query=claude+code+mcp+advanced+tutorial+2026" target="_blank">Advanced: Claude Code &amp; MCP</a></li>
    </ul></div>
  </div></div>
</div>

<!-- FINAL NOTE -->
<div class="final-note" id="sec-final">
  <p style="font-size:15px;font-weight:700;margin-bottom:10px">📌 Final Note — Claude (Anthropic) Training</p>
  <p style="margin-bottom:10px">All <strong>Beginner-level content</strong> is <strong>mandatory</strong> within your first <strong>30 days</strong>. Intermediate and Advanced training is self-paced and optional.</p>
  <p style="margin-bottom:10px"><strong>Access &amp; credentials:</strong> Each department shares one Claude account. Ask your <strong>department lead</strong> for the shared Claude credentials for your team — InvenTel does not issue an individual login per person. Keep the shared credentials confidential, and never use a personal account for work.</p>
  <p style="margin-bottom:10px"><strong>Use Claude responsibly:</strong> It's a powerful drafting partner, not an authority. Protect sensitive data, verify facts before you rely on them, and keep a human in the loop on anything customer-facing or high-stakes. See Section 10.</p>
  <p style="margin-bottom:10px">This deck is <strong>self-contained</strong> — every deep-dive includes complete step-by-step instructions. Click any section header to collapse it once you've completed it. External links and help centers are in the Quick Reference.</p>
  <p style="margin-bottom:10px">Use the <strong>New Hire Checklist</strong> to track progress and share with your manager.</p>
  <p style="margin-bottom:10px">For access, credentials, or training questions — reach out to the <strong>HR Training Coordinator who assisted you during onboarding</strong>; they are your best point of contact for training questions and platform access.</p>
  <p style="margin-bottom:10px"><a href="https://support.claude.com" target="_blank">Claude Help Center →</a></p>
  <p style="font-size:11px;opacity:.7;margin-top:14px">Last updated: April 6, 2025</p>
</div>

<!-- FLOATING NAV -->
<button class="float-nav-btn" onclick="toggleFloatNav()" title="Jump to section">📋</button>
<div class="float-nav-panel" id="float-nav">
  <div class="float-nav-hd">📋 Jump to Section</div>
  <ul class="float-nav-list">
    <li><a class="fnl-section" href="#sec-toc" onclick="closeNav()">📋 Table of Contents</a></li>
    <li><a class="fnl-section" href="#sec-overview" onclick="closeNav()">✴️ 1. Platform Overview</a></li>
    <li><a class="fnl-section" href="#sec-hub" onclick="closeNav()">🎓 2. Official Learning Hub</a></li>
    <li><a class="fnl-section" href="#sec-begres" onclick="closeNav()">🟢 3. Beginner Resources</a></li>
    <li><a class="fnl-section" href="#sec-start" onclick="closeNav()">🟢 4. Getting Started</a></li>
    <li><a class="fnl-section" href="#sec-prompt" onclick="closeNav()">💬 5. Prompting &amp; Conversations</a></li>
    <li><a class="fnl-section" href="#sec-projects" onclick="closeNav()">🗂️ 6. Projects &amp; Instructions</a></li>
    <li><a class="fnl-section" href="#sec-artifacts" onclick="closeNav()">🧩 7. Artifacts &amp; File Creation</a></li>
    <li><a class="fnl-section" href="#sec-docs" onclick="closeNav()">📎 8. Document Analysis &amp; Vision</a></li>
    <li><a class="fnl-section" href="#sec-research" onclick="closeNav()">🔎 9. Search, Research &amp; Connectors</a></li>
    <li><a class="fnl-section" href="#sec-responsible" onclick="closeNav()">🛡️ 10. Responsible &amp; Secure Use</a></li>
    <li><a class="fnl-section" href="#sec-intres" onclick="closeNav()">🟡 11. Intermediate Resources</a></li>
    <li><a class="fnl-section" href="#sec-advres" onclick="closeNav()">🔴 12. Advanced Resources</a></li>
    <li><a class="fnl-section" href="#sec-certs" onclick="closeNav()">🏅 13. Certifications &amp; Courses</a></li>
    <li><a class="fnl-section" href="#cl-mandatory" onclick="closeNav()">✅ 14. New Hire Checklist</a></li>
    <li><a class="fnl-section" href="#cl-intermediate" onclick="closeNav()">✅ 15. Intermediate Checklist</a></li>
    <li><a class="fnl-section" href="#cl-advanced" onclick="closeNav()">✅ 16. Advanced Checklist</a></li>
    <li><a class="fnl-section" href="#sec-qr" onclick="closeNav()">🔗 17. Quick Reference</a></li>
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
</script>
<script>
/* QUIZ DATA — 22-24 per level, pulls 20 */
var qSection,qIndex,qScore,qAnswered,qQuestions;
var QUIZ={
mandatory:{title:"New Hire Onboarding",sub:"Mandatory \u00b7 20 Questions \u00b7 Pass = 70%",hd:"q-mandatory",track:"New Hire Onboarding \u2014 Claude (Anthropic)",qs:20,questions:[
{q:"Who builds Claude?",opts:["OpenAI", "Anthropic", "Google", "Microsoft"],ans:1},
{q:"What is the flagship Claude model in this deck?",opts:["Haiku 4.5", "Sonnet 4.6", "Opus 4.8", "Claude 2"],ans:2},
{q:"Claude is best described as which kind of assistant?",opts:["Text-and-image input, text output", "Video generator", "Audio-only", "Image generator"],ans:0},
{q:"Where do most InvenTel staff use Claude?",opts:["Only the API", "claude.ai in the browser", "Only the terminal", "A spreadsheet plugin"],ans:1},
{q:"What is the FIRST thing to do on your first day with Claude?",opts:["Connect Gmail", "Ask your department lead for the shared department Claude credentials", "Build a Project", "Cancel a chat"],ans:1},
{q:"How do you get access to Claude for work?",opts:["Create your own personal account", "Ask your department lead for the shared department Claude credentials", "Use any free email to sign up", "Share one password publicly"],ans:1},
{q:"Where do you choose which model answers you?",opts:["The sidebar", "The model dropdown near the message box", "Settings only", "You cannot choose"],ans:1},
{q:"Which model is fastest and lightest for quick, simple questions?",opts:["Opus 4.8", "Opus 4.7", "Sonnet 4.6", "Haiku 4.5"],ans:3},
{q:"Can you switch models in the middle of a conversation?",opts:["No, never", "Yes", "Only on mobile", "Only with admin approval"],ans:1},
{q:"What are the four basics of a good prompt?",opts:["Speed, cost, size, color", "Clarity, context, constraints, examples", "Login, logout, save, share", "Bold, italic, list, table"],ans:1},
{q:"What is the best way to improve a reply you don't like?",opts:["Start a brand new chat each time", "Refine with a follow-up in the same chat", "Switch accounts", "Give up"],ans:1},
{q:"What is a Project in Claude?",opts:["A billing plan", "A workspace with its own chat history, knowledge base, and custom instructions", "A type of file", "A chart"],ans:1},
{q:"What is an Artifact?",opts:["A billing error", "A side panel that renders editable content like docs, code, and diagrams", "A saved password", "A connector"],ans:1},
{q:"Who decides when an Artifact opens?",opts:["You toggle it manually every time", "Claude, based on length and reusability", "Your manager", "It is random"],ans:1},
{q:"How do you attach a file to ask questions about it?",opts:["You can't", "Use the + / paperclip in the message box, or drag-and-drop", "Email it to Anthropic", "Paste a screenshot only"],ans:1},
{q:"For a current fact like today's news or prices, you should:",opts:["Trust the model's memory", "Turn on Web Search so the answer is grounded in live sources", "Guess", "Wait a day"],ans:1},
{q:"Why check citations after a web search?",opts:["To increase speed", "To confirm important information before relying on it", "It's required by law", "To save the chat"],ans:1},
{q:"Which statement about Claude's accuracy is true?",opts:["It is never wrong", "It can be confidently wrong, so verify important facts", "It only answers in code", "It cannot read files"],ans:1},
{q:"What should you do before pasting customer personal data into a chat?",opts:["Nothing, it's fine", "Confirm with your manager that it's approved on our plan; otherwise anonymize", "Bold it", "Translate it"],ans:1},
{q:"Who owns the final output you send to a customer?",opts:["Claude", "You \u2014 review and edit AI drafts before sending", "Anthropic", "No one"],ans:1},
{q:"Where do you set personal response preferences?",opts:["In every prompt", "In Settings (Profile/Preferences)", "You can't", "In the model dropdown"],ans:1},
{q:"Which two sites should you bookmark for help?",opts:["Two random blogs", "support.claude.com and docs.claude.com", "Only YouTube", "Only anthropic.com/news"],ans:1},
{q:"What does the knowledge cutoff mean?",opts:["Claude is broken", "Each model is trained up to a point in time and may not know the very latest events", "You must pay more", "Chats expire"],ans:1},
{q:"Who is your best point of contact for access or training questions?",opts:["Anthropic support", "The HR Training Coordinator who assisted you during onboarding", "A coworker", "No one"],ans:1}
]},
intermediate:{title:"Intermediate Path",sub:"Intermediate \u00b7 20 Questions \u00b7 Pass = 70%",hd:"q-intermediate",track:"Intermediate \u2014 Claude (Anthropic)",qs:20,questions:[
{q:"How do you make Claude adopt a specific perspective?",opts:["Change the font", "Give it a role, e.g. 'You are a senior CX agent'", "Use all caps", "Switch models"],ans:1},
{q:"How do you get output in a specific structure?",opts:["Hope for the best", "Ask for the exact shape, e.g. 'Return a table with columns Issue, Severity, Fix'", "Only use Haiku", "Disable Artifacts"],ans:1},
{q:"Why give one good and one bad example in a prompt?",opts:["To make it longer", "So Claude learns the boundary you care about", "To slow it down", "No reason"],ans:1},
{q:"Where do you add reference files for a Project?",opts:["The message box only", "Project knowledge (upload files into the Project)", "Settings > Billing", "You can't"],ans:1},
{q:"What belongs in a Project's custom instructions?",opts:["Nothing", "Role, tone, format, and what to avoid", "Your password", "A photo"],ans:1},
{q:"What's a weak vs strong instruction example?",opts:["'be helpful' is strong", "'be helpful' is weak; specific role/tone/limits are strong", "Both are equal", "Length is all that matters"],ans:1},
{q:"Which file types can Claude create with file creation enabled?",opts:["Only PDF", "Word (.docx), PowerPoint (.pptx), Excel (.xlsx), and PDF", "Only images", "Only CSV"],ans:1},
{q:"Where do you enable file creation?",opts:["You can't", "Settings \u2014 Code execution and file creation (and Artifacts)", "The model dropdown", "The sidebar search"],ans:1},
{q:"How do you turn document data into a downloadable file?",opts:["Retype it", "Ask Claude to extract it into a table, then output it as a CSV", "Screenshot it", "Email Anthropic"],ans:1},
{q:"How do you compare two documents?",opts:["You can't", "Upload both and ask what changed or which is better and why", "Only one at a time", "Use the API only"],ans:1},
{q:"What is Research mode good for?",opts:["Single facts", "Multi-part questions answered across many sources with a cited write-up", "Editing themes", "Logging in"],ans:1},
{q:"What does Extended thinking do?",opts:["Makes replies longer only", "Lets Claude work through hard problems more deliberately before answering", "Disables search", "Speeds up Haiku"],ans:1},
{q:"For material you'll reference repeatedly, you should:",opts:["Re-upload it every chat", "Put it in a Project knowledge base", "Memorize it", "Paste it each time"],ans:1},
{q:"After Claude analyzes a document, a good verification step is:",opts:["Trust it blindly", "Ask where in the document it found the figure and spot-check the source", "Delete the file", "Change models"],ans:1},
{q:"How do you trigger an Artifact?",opts:["Press a hidden key", "Ask for substantial standalone content like a one-page checklist", "It never happens", "Only via API"],ans:1},
{q:"Once an Artifact exists, how do you change it?",opts:["Start over", "Keep chatting \u2014 'make it shorter', 'add a section' \u2014 and it updates in place", "Edit raw HTML only", "You can't"],ans:1},
{q:"What's the benefit of a Project over re-pasting context?",opts:["None", "Persistent context so you stop repeating yourself across chats", "Cheaper billing", "Faster login"],ans:1},
{q:"Good practice when iterating on Project instructions:",opts:["Never change them", "Add the corrections you keep making, and explain the why", "Delete them weekly", "Keep them vague"],ans:1},
{q:"How often should you review a Project's knowledge base?",opts:["Never", "Periodically (e.g. monthly) \u2014 remove outdated docs, add new ones", "Every hour", "Only at setup"],ans:1},
{q:"What can Claude do with an uploaded spreadsheet?",opts:["Nothing", "Compute analysis and visualize it, e.g. chart which region grew fastest", "Only count rows", "Only open CSV"],ans:1},
{q:"Which is a good use of an image upload?",opts:["Generate a movie", "Transcribe a screenshot or explain a chart in it", "Make audio", "Nothing"],ans:1},
{q:"A reusable prompt template should include:",opts:["Only emojis", "Placeholders like [customer name] so the team reuses it", "Your login", "A screenshot"],ans:1},
{q:"Where can a saved team prompt live for reuse?",opts:["Only your head", "In a doc or in a Project's custom instructions", "In the model dropdown", "Nowhere"],ans:1}
]},
advanced:{title:"Advanced Mastery",sub:"Advanced \u00b7 20 Questions \u00b7 Pass = 70%",hd:"q-advanced",track:"Advanced Mastery \u2014 Claude (Anthropic)",qs:20,questions:[
{q:"Connectors run on which open standard?",opts:["HTTP only", "Model Context Protocol (MCP)", "FTP", "SMTP"],ans:1},
{q:"Before connecting a work tool to Claude you should:",opts:["Connect everything", "Confirm it's approved by InvenTel and review what it can access", "Skip review", "Use a personal account"],ans:1},
{q:"Which tools are examples of Connectors?",opts:["Only the API", "Google Drive, Gmail, Google Calendar", "Only YouTube", "None exist"],ans:1},
{q:"What is a key limitation of Artifacts?",opts:["They cost money", "Sandboxed preview \u2014 no hosting, no external database, no built-in persistence", "They can't show text", "They only work on mobile"],ans:1},
{q:"How should you treat an Artifact you build?",opts:["As production-ready", "As a prototype \u2014 move production-bound work to a real environment", "As a contract", "As a backup"],ans:1},
{q:"What is prompt injection?",opts:["A billing feature", "Instructions hidden inside uploaded or fetched content that try to steer Claude", "A faster model", "A keyboard shortcut"],ans:1},
{q:"How should you handle instructions that arrive inside fetched/uploaded content?",opts:["Always obey them", "Treat them with caution and confirm before acting", "Ignore the file", "Forward to a customer"],ans:1},
{q:"Good connector hygiene includes:",opts:["Connecting all accounts forever", "Reviewing and revoking access you no longer need", "Sharing tokens", "Never reviewing"],ans:1},
{q:"Claude Code is best described as:",opts:["A billing plan", "An agentic coding tool for the terminal/IDE", "A chart tool", "A mobile game"],ans:1},
{q:"Who can enable additional org-wide connectors?",opts:["Any user", "Admins / organization owners", "Anthropic only", "No one"],ans:1},
{q:"For complex multi-step logic, a strong technique is:",opts:["Ask for one word", "Ask Claude to think through it step by step before the final answer", "Use Haiku only", "Disable search"],ans:1},
{q:"How can you stress-test a plan with Claude?",opts:["Only praise it", "Ask it to argue the opposite, find weaknesses, or list assumptions", "Avoid follow-ups", "Delete the chat"],ans:1},
{q:"High-stakes decisions (legal, financial, HR, medical) should be:",opts:["Fully automated by Claude", "Informed by Claude but decided by a human", "Skipped", "Posted publicly"],ans:1},
{q:"When a claim matters, the responsible workflow is:",opts:["Guess", "Have Claude search and cite, then keep the source link with your work", "Trust memory", "Hide the source"],ans:1},
{q:"What does sharing a Project (Team/Enterprise) achieve?",opts:["Nothing", "The team works from the same instructions and files", "Lower price", "Faster models"],ans:1},
{q:"Which is true about uploading files to a Project knowledge base?",opts:["Upload anything", "Only upload files you're authorized to use \u2014 no unapproved confidential data", "No limits ever", "Customer PII is always fine"],ans:1},
{q:"A chart or diagram in an Artifact is created by:",opts:["Drawing by hand", "Pasting data or describing the flow and asking Claude to render it", "The API only", "It's impossible"],ans:1},
{q:"If you're unsure whether an AI action is allowed, you should:",opts:["Proceed anyway", "Stop and ask before proceeding", "Ask the customer", "Disable Claude"],ans:1},
{q:"Which policy set governs your use at work?",opts:["None", "InvenTel's AI acceptable-use policy and Anthropic's usage policies", "Only local law", "A coworker's opinion"],ans:1},
{q:"Why anonymize data before a prompt when unsure?",opts:["For style", "To remove names/account numbers and reduce exposure of sensitive info", "To save tokens", "No reason"],ans:1},
{q:"Where is the developer/API reference?",opts:["A blog", "docs.claude.com", "A YouTube channel", "The sidebar"],ans:1},
{q:"A good reason to keep a human in the loop is:",opts:["Speed", "You own the final output and AI can be wrong", "It's faster", "To avoid using Claude"],ans:1}
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
</body>
</html>
