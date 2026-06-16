<?php /* Template Name: Resource Library */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>InvenTel — Training Resource Library</title>
<style>
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Segoe UI',system-ui,-apple-system,sans-serif;background:#f7f7f5;color:#1a1a1a;line-height:1.6}
a{color:#1a56db;text-decoration:none}
a:hover{text-decoration:underline;color:#1340b0}

/* ── Logo ── */
.inventel-logo{display:inline-block;background:#fff;border:3px solid #b0b0b0;border-radius:28px;padding:6px 24px;font-family:'Segoe UI',Arial,sans-serif;font-size:32px;font-weight:800;letter-spacing:-.5px;line-height:1.2;box-shadow:inset 0 1px 4px rgba(0,0,0,.08)}
.logo-inven{color:#3a3a3a}.logo-tel{color:#c0392b}

/* ── Header ── */
.header-band{background:#8B0000;color:#fff;padding:34px 32px 26px;text-align:center}
.header-company{font-size:11px;letter-spacing:2px;text-transform:uppercase;opacity:.85;margin:16px 0 8px}
.header-h1{font-size:30px;font-weight:800;margin-bottom:8px}
.header-subtitle{font-size:14px;opacity:.9;max-width:680px;margin:0 auto}
.stat-row{background:#6D0000;display:flex;justify-content:space-around;flex-wrap:wrap;padding:14px 20px;gap:10px}
.stat-item{text-align:center;min-width:90px}
.stat-val{display:block;font-size:18px;font-weight:800;color:#fcd9b6}
.stat-lbl{font-size:10px;text-transform:uppercase;letter-spacing:.8px;color:#fff;opacity:.85}
.mandatory-bar{background:#2d0000;color:#fcd9b6;text-align:center;padding:10px 20px;font-size:13px;font-weight:600}

/* ── Body ── */
.wrap{max-width:1040px;margin:0 auto;padding:30px 18px 60px}

/* ── Welcome lede ── */
.welcome{margin:6px 0 30px}
.welcome .eyebrow{display:inline-flex;align-items:center;gap:9px;font-size:11px;letter-spacing:2.6px;text-transform:uppercase;font-weight:700;color:#8B0000;margin-bottom:16px}
.welcome .eyebrow::before{content:"";width:30px;height:2px;background:#c0392b;display:inline-block}
.welcome h2{font-size:30px;font-weight:800;color:#2d0000;line-height:1.15;margin-bottom:16px;letter-spacing:-.4px}
.welcome h2 em{font-style:italic;color:#c0392b;font-weight:800}
.welcome .lede{font-size:16px;color:#3a3a3a;max-width:60ch;line-height:1.6}
.welcome .lede strong{color:#2d0000}

/* ── How to use — dark guide card ── */
.guide-card{background:linear-gradient(180deg,#fff 0%,#fdf6f5 100%);border:1px solid #f0dada;border-top:6px solid #8B0000;border-radius:18px;padding:38px clamp(24px,5vw,46px);box-shadow:0 18px 44px rgba(139,0,0,.14);position:relative;overflow:hidden;margin-bottom:40px}
.guide-card::after{content:"";position:absolute;right:-90px;top:-90px;width:300px;height:300px;border-radius:50%;background:radial-gradient(circle,rgba(192,57,43,.10),transparent 70%);pointer-events:none}
.guide-card .ghead-eyebrow{display:inline-flex;align-items:center;gap:8px;font-size:10.5px;font-weight:800;letter-spacing:1.8px;text-transform:uppercase;color:#c0392b;margin-bottom:12px;position:relative;z-index:1}
.guide-card .ghead-eyebrow::before{content:"";width:24px;height:2px;background:#c0392b;display:inline-block}
.guide-card h3{font-size:clamp(22px,3vw,28px);font-weight:800;position:relative;z-index:1;margin-bottom:8px;color:#2d0000;letter-spacing:-.4px}
.guide-card .sub{color:#5c5050;max-width:64ch;position:relative;z-index:1;margin-bottom:28px;font-size:14px}
.steps{display:grid;grid-template-columns:repeat(5,1fr);gap:14px;position:relative;z-index:1}
.step{background:#fff;border:1px solid #eed7d7;border-top:3px solid #c0392b;border-radius:12px;padding:20px 18px;box-shadow:0 2px 8px rgba(45,0,0,.05);transition:transform .15s,box-shadow .15s}
.step:hover{transform:translateY(-3px);box-shadow:0 10px 22px rgba(139,0,0,.14)}
.step .num{font-size:15px;color:#fff;font-weight:800;display:inline-grid;place-items:center;width:34px;height:34px;border-radius:10px;background:linear-gradient(135deg,#c0392b,#8B0000);box-shadow:0 3px 8px rgba(139,0,0,.3);margin-bottom:14px}
.step h4{font-size:14px;font-weight:800;margin-bottom:7px;color:#2d0000}
.step p{font-size:12.5px;color:#555;line-height:1.55}
.step b{color:#8B0000;font-weight:700}
@media(max-width:980px){.steps{grid-template-columns:repeat(2,1fr)}}
@media(max-width:560px){.steps{grid-template-columns:1fr}}
.guide-note{margin-top:16px;position:relative;z-index:1;display:flex;gap:13px;align-items:flex-start;background:#fbeceb;border:1px solid #f1c9c5;border-left:4px solid #c0392b;border-radius:10px;padding:15px 18px;font-size:13.5px;color:#3a2020}
.guide-note .ic{font-size:18px;line-height:1.3;flex:none}
.guide-note b{color:#8B0000;font-weight:800}

/* ── Section label ── */
.lib-label{text-align:center;margin:10px 0 22px}
.lib-label h2{font-size:22px;font-weight:800;color:#2d0000;display:inline-block;border-bottom:3px solid #8B0000;padding-bottom:6px}
.lib-label p{font-size:13px;color:#777;margin-top:10px}

/* ── Deck cards ── */
.deck-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
@media(max-width:900px){.deck-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:600px){.deck-grid{grid-template-columns:1fr}}

.deck-card{display:block;background:#fff;border:1px solid #e5e5e0;border-radius:12px;overflow:hidden;box-shadow:0 1px 4px rgba(0,0,0,.05);transition:transform .16s,box-shadow .16s,border-color .16s;text-decoration:none;color:inherit}
.deck-card:hover{transform:translateY(-4px);box-shadow:0 10px 26px rgba(139,0,0,.18);border-color:#8B0000;text-decoration:none}

.deck-thumb{height:120px;display:flex;align-items:center;justify-content:center;position:relative;background:#8B0000}
.deck-thumb .glyph{font-size:46px;filter:drop-shadow(0 2px 4px rgba(0,0,0,.25))}
.deck-thumb .badge-corner{position:absolute;top:10px;right:10px;background:rgba(0,0,0,.35);color:#fcd9b6;font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.6px;padding:3px 8px;border-radius:4px}

/* thumbnail color variants — shades of red */
.t-shopify{background:linear-gradient(135deg,#8B0000,#b81d1d)}
.t-gorgias{background:linear-gradient(135deg,#6D0000,#9c1f1f)}
.t-google{background:linear-gradient(135deg,#a31515,#d13030)}
.t-triple{background:linear-gradient(135deg,#5a0000,#8B0000)}
.t-recharge{background:linear-gradient(135deg,#991b1b,#c0392b)}
.t-canva{background:linear-gradient(135deg,#7f1d1d,#b02a2a)}
.t-meta-bm{background:linear-gradient(135deg,#8B0000,#a31515)}
.t-figma{background:linear-gradient(135deg,#6D0000,#a52a2a)}
.t-ship{background:linear-gradient(135deg,#a31515,#c0392b)}
.t-meta-ads{background:linear-gradient(135deg,#7f1d1d,#a31515)}
.t-claude{background:linear-gradient(135deg,#5a0000,#9c1f1f)}

.deck-info{padding:18px 18px 18px}
.deck-info h3{font-size:21px;font-weight:800;color:#2d0000;margin-bottom:8px;letter-spacing:-.3px;line-height:1.15;display:inline-block;border-bottom:3px solid #c0392b;padding-bottom:5px}
.deck-card:hover .deck-info h3{color:#8B0000}
.deck-info p{font-size:12.5px;color:#5c5c5c;line-height:1.55;margin:6px 0 12px}
.deck-cta{font-size:12px;font-weight:700;color:#c0392b;text-transform:uppercase;letter-spacing:.5px}
.deck-card:hover .deck-cta{color:#8B0000}

/* ── Footer ── */
.footer-note{background:#2d0000;color:#e8d5c4;border-radius:12px;padding:24px 28px;font-size:13px;line-height:1.8;margin-top:34px;text-align:center}
.footer-note strong{color:#fff}
.footer-note a{color:#fcd9b6}
.footer-note .ft-sm{font-size:11px;opacity:.65;margin-top:12px}
</style>
<?php bh_favicon_tags(); ?>
</head>
<body>

<!-- ── HEADER ── -->
<div class="header-band">
  <div class="inventel-logo"><span class="logo-inven">Inven</span><span class="logo-tel">Tel</span></div>
  <div class="header-company">InvenTel Innovations — Training Resource Library</div>
  <div class="header-h1">Welcome to the InvenTel Resource Library</div>
  <div class="header-subtitle">Your home for learning every platform and tool the company puts in your hands — built to get you confident, fast.</div>
</div>
<div class="stat-row">
  <div class="stat-item"><span class="stat-val">3</span><span class="stat-lbl">Learning Levels</span></div>
  <div class="stat-item"><span class="stat-val">Self-Contained</span><span class="stat-lbl">No External Links Required</span></div>
  <div class="stat-item"><span class="stat-val">Quizzes</span><span class="stat-lbl">Per Platform</span></div>
</div>
<div class="mandatory-bar">⚠️ Read the full training guide for any platform you're granted access to — then keep it as your reference.</div>

<div class="wrap">

  <!-- ── WELCOME ── -->
  <div class="welcome">
    <span class="eyebrow">InvenTel team</span>
    <h2>Learn the <em>tools</em> you work with every day.</h2>
    <p class="lede">Thank you for taking the time to learn the tools InvenTel provides to you. Every platform we use has its own guide in this library, written to take you from your very first login to confident, independent work. The better you know each tool, the easier your day-to-day becomes — whatever your role. Whether you're new, picking up a platform for the first time, or just sharpening up, this library is yours to use.</p>
  </div>

  <!-- ── HOW TO USE ── -->
  <div class="guide-card">
    <span class="ghead-eyebrow">Getting Started</span>
    <h3>How to use this library</h3>
    <p class="sub">Each platform has its own complete, self-contained training guide. It's not just for onboarding — it's the reference you'll keep coming back to whenever a question comes up while you work.</p>
    <div class="steps">
      <div class="step">
        <span class="num">1</span>
        <h4>Read it start to finish</h4>
        <p>When you're <b>granted access</b> to a platform, read its guide <b>from start to finish</b> before you dive in.</p>
      </div>
      <div class="step">
        <span class="num">2</span>
        <h4>Keep it close</h4>
        <p>After your first read, use the guide as your <b>everyday reference</b> whenever a question comes up.</p>
      </div>
      <div class="step">
        <span class="num">3</span>
        <h4>New access = new quiz</h4>
        <p>Each time new access is shared with you, read that platform's training, then take the <b>mandatory quiz</b> at the end.</p>
      </div>
      <div class="step">
        <span class="num">4</span>
        <h4>Send your results</h4>
        <p>Send a copy of your completed quiz to the <b>Performance Team</b> and your <b>Department Lead</b>.</p>
      </div>
      <div class="step">
        <span class="num">5</span>
        <h4>Stay ready</h4>
        <p>Got free time between tasks? Work through the <b>intermediate</b> and <b>advanced</b> material and quizzes on your own.</p>
      </div>
    </div>
    <div class="guide-note">
      <span class="ic">📌</span>
      <span>Your <b>Department Lead</b> may also assign intermediate or advanced learning as <b>mandatory</b> — not just optional self-study.</span>
    </div>
    <div class="guide-note">
      <span class="ic">💡</span>
      <span>Every guide is packed with <b>tips and tricks</b>, shortcuts, and best practices that make the tools faster to use — worth a read even for platforms you already know well.</span>
    </div>
  </div>

  <!-- ── LIBRARY ── -->
  <div class="lib-label">
    <h2>📚 The Training Library</h2>
    <p>Click any guide to open it. Each one is a complete, self-contained training deck.</p>
  </div>

  <div class="deck-grid">

    <a class="deck-card" href="<?php echo esc_url( bh_template_url('page-shopify-training.php') ); ?>">
      <div class="deck-thumb t-shopify"><span class="glyph">🛒</span><span class="badge-corner">Storefront</span></div>
      <div class="deck-info">
        <h3>Shopify</h3>
        <p>Run the online store end to end — products, orders, inventory, and storefront management.</p>
        <span class="deck-cta">Open Guide →</span>
      </div>
    </a>

    <a class="deck-card" href="<?php echo esc_url( bh_template_url('page-gorgias-training.php') ); ?>">
      <div class="deck-thumb t-gorgias"><span class="glyph">💬</span><span class="badge-corner">Support</span></div>
      <div class="deck-info">
        <h3>Gorgias CRM</h3>
        <p>Handle customer support tickets, macros, and helpdesk workflows in one shared inbox.</p>
        <span class="deck-cta">Open Guide →</span>
      </div>
    </a>

    <a class="deck-card" href="<?php echo esc_url( bh_template_url('page-google-workspace-training.php') ); ?>">
      <div class="deck-thumb t-google"><span class="glyph">📧</span><span class="badge-corner">Core</span></div>
      <div class="deck-info">
        <h3>Google Workspace</h3>
        <p>Gmail, Drive, Docs, Sheets, and Calendar — the daily backbone of company communication.</p>
        <span class="deck-cta">Open Guide →</span>
      </div>
    </a>

    <a class="deck-card" href="<?php echo esc_url( bh_template_url('page-triple-whale-training.php') ); ?>">
      <div class="deck-thumb t-triple"><span class="glyph">📊</span><span class="badge-corner">Analytics</span></div>
      <div class="deck-info">
        <h3>Triple Whale</h3>
        <p>Track ecommerce performance, attribution, and the metrics that drive marketing decisions.</p>
        <span class="deck-cta">Open Guide →</span>
      </div>
    </a>

    <a class="deck-card" href="<?php echo esc_url( bh_template_url('page-recharge-training.php') ); ?>">
      <div class="deck-thumb t-recharge"><span class="glyph">🔁</span><span class="badge-corner">Subscriptions</span></div>
      <div class="deck-info">
        <h3>Recharge</h3>
        <p>Manage subscriptions, recurring billing, and customer retention for repeat orders.</p>
        <span class="deck-cta">Open Guide →</span>
      </div>
    </a>

    <a class="deck-card" href="<?php echo esc_url( bh_template_url('page-canva-training.php') ); ?>">
      <div class="deck-thumb t-canva"><span class="glyph">🎨</span><span class="badge-corner">Design</span></div>
      <div class="deck-info">
        <h3>Canva</h3>
        <p>Create on-brand graphics, social posts, and marketing assets without a design background.</p>
        <span class="deck-cta">Open Guide →</span>
      </div>
    </a>

    <a class="deck-card" href="<?php echo esc_url( bh_template_url('page-meta-business-manager-training.php') ); ?>">
      <div class="deck-thumb t-meta-bm"><span class="glyph">🏢</span><span class="badge-corner">Admin</span></div>
      <div class="deck-info">
        <h3>Meta Business Manager</h3>
        <p>Manage pages, ad accounts, assets, and team permissions across the Meta ecosystem.</p>
        <span class="deck-cta">Open Guide →</span>
      </div>
    </a>

    <a class="deck-card" href="<?php echo esc_url( bh_template_url('page-figma-training.php') ); ?>">
      <div class="deck-thumb t-figma"><span class="glyph">✏️</span><span class="badge-corner">Design</span></div>
      <div class="deck-info">
        <h3>Figma</h3>
        <p>Collaborate on interface design, prototypes, and shared design files in real time.</p>
        <span class="deck-cta">Open Guide →</span>
      </div>
    </a>

    <a class="deck-card" href="<?php echo esc_url( bh_template_url('page-shipstation-training.php') ); ?>">
      <div class="deck-thumb t-ship"><span class="glyph">📦</span><span class="badge-corner">Fulfillment</span></div>
      <div class="deck-info">
        <h3>ShipStation</h3>
        <p>Process, batch, and label shipments — the hub for getting orders out the door.</p>
        <span class="deck-cta">Open Guide →</span>
      </div>
    </a>

    <a class="deck-card" href="<?php echo esc_url( bh_template_url('page-meta-ads-account-training.php') ); ?>">
      <div class="deck-thumb t-meta-ads"><span class="glyph">📣</span><span class="badge-corner">Advertising</span></div>
      <div class="deck-info">
        <h3>Meta Ads</h3>
        <p>Build, launch, and optimize ad campaigns across Facebook and Instagram.</p>
        <span class="deck-cta">Open Guide →</span>
      </div>
    </a>

    <a class="deck-card" href="<?php echo esc_url( bh_template_url('page-claude-training.php') ); ?>">
      <div class="deck-thumb t-claude"><span class="glyph">🤖</span><span class="badge-corner">AI</span></div>
      <div class="deck-info">
        <h3>Claude</h3>
        <p>Use AI to draft, research, summarize, and speed up your everyday work the right way.</p>
        <span class="deck-cta">Open Guide →</span>
      </div>
    </a>

  </div>

  <!-- ── FOOTER ── -->
  <div class="footer-note">
    <p><strong>Remember:</strong> read every guide for the platforms you're given, take the mandatory quiz, and send your results to the Performance Team and your Department Lead.</p>
    <p>For training questions or platform access, reach out to the <strong>HR Training Coordinator who assisted you during onboarding</strong>.</p>
    <p class="ft-sm">InvenTel Innovations — Training Resource Library</p>
  </div>

</div>
</body>
</html>
