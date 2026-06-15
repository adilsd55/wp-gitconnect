<?php /* Template Name: Training Hub Index */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Platform Training — Index</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700;9..144,800&family=Inter:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root{
  /* Neutral editorial palette — intentionally restrained so tool colors pop */
  --paper:#F2EDE2;
  --paper-deep:#EAE3D2;
  --paper-edge:#DDD3BE;
  --ink:#1A1814;
  --ink-soft:#3A3530;
  --ink-mute:#6E665B;
  --ink-faint:#9C9385;
  --rule:#C9BFA8;

  /* Per-tool accent colors */
  --shopify:#5E8E3E;
  --recharge:#1E2A78;
  --gorgias:#00A39A;
  --shipstation:#2C6EF2;
  --whale:#6B4EFF;
  --meta-bm:#0064E0;
  --meta-ads:#0866FF;
  --google:#1A73E8;
  --claude:#C8623E;
  --figma:#A259FF;
  --canva:#00B7C2;
}

*{margin:0;padding:0;box-sizing:border-box;}

html{scroll-behavior:smooth;}

body{
  font-family:'Inter', sans-serif;
  background:var(--paper);
  color:var(--ink);
  font-weight:400;
  line-height:1.5;
  min-height:100vh;
  background-image:
    radial-gradient(ellipse at 15% 0%, rgba(8,102,255,0.025), transparent 50%),
    radial-gradient(ellipse at 85% 100%, rgba(94,142,62,0.03), transparent 55%),
    radial-gradient(ellipse at 50% 50%, var(--paper) 0%, var(--paper-deep) 100%);
  position:relative;
  overflow-x:hidden;
}

/* Grain overlay */
body::before{
  content:'';
  position:fixed;
  inset:0;
  pointer-events:none;
  z-index:1;
  opacity:0.35;
  mix-blend-mode:multiply;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3CfeColorMatrix values='0 0 0 0 0.1 0 0 0 0 0.09 0 0 0 0 0.07 0 0 0 0.5 0'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
}

.page{
  position:relative;
  z-index:2;
  max-width:1280px;
  margin:0 auto;
  padding:48px 56px 80px;
}

@media (max-width:768px){
  .page{padding:32px 24px 56px;}
}

/* ===== TOP BAR ===== */
.topbar{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding-bottom:24px;
  border-bottom:1px solid var(--rule);
  margin-bottom:80px;
}

.mark{
  font-family:'DM Mono', monospace;
  font-size:11px;
  letter-spacing:0.18em;
  text-transform:uppercase;
  color:var(--ink-soft);
  display:flex;
  align-items:center;
  gap:14px;
}

.mark .dots{
  display:flex;
  gap:5px;
}
.mark .dots span{
  display:block;
  width:9px;height:9px;
  border-radius:50%;
}
.mark .dots span:nth-child(1){background:var(--shopify);}
.mark .dots span:nth-child(2){background:var(--gorgias);}
.mark .dots span:nth-child(3){background:var(--whale);}
.mark .dots span:nth-child(4){background:var(--meta-ads);}
.mark .dots span:nth-child(5){background:var(--claude);}
.mark .dots span:nth-child(6){background:var(--figma);}

.status{
  font-family:'DM Mono', monospace;
  font-size:10.5px;
  letter-spacing:0.2em;
  text-transform:uppercase;
  color:var(--ink);
  padding:6px 12px;
  border:1px solid var(--ink);
  border-radius:999px;
  display:inline-flex;
  align-items:center;
  gap:8px;
}
.status::before{
  content:'';
  width:6px;height:6px;
  background:var(--meta-ads);
  border-radius:50%;
  animation:pulse 2.4s ease-in-out infinite;
}

@keyframes pulse{
  0%,100%{opacity:1;transform:scale(1);}
  50%{opacity:0.5;transform:scale(0.85);}
}

.topbar-right{
  display:flex;
  align-items:center;
  gap:22px;
}
.topnav{
  display:flex;
  align-items:center;
  gap:18px;
}
.topnav a{
  font-family:'DM Mono', monospace;
  font-size:11px;
  letter-spacing:0.16em;
  text-transform:uppercase;
  color:var(--ink-soft);
  text-decoration:none;
  transition:color 0.2s;
}
.topnav a:hover{color:var(--ink);}
.topnav a.signout{color:#B0322B;}
.topnav a.signout:hover{color:#8A1E24;}

@media (max-width:768px){
  .topbar{margin-bottom:56px;flex-direction:column;align-items:flex-start;gap:16px;}
  .topbar-right{flex-wrap:wrap;gap:14px;}
}

/* ===== MASTHEAD ===== */
.masthead{
  margin-bottom:88px;
  display:grid;
  grid-template-columns:1fr 360px;
  gap:64px;
  align-items:end;
  animation:rise 0.8s cubic-bezier(0.2, 0.7, 0.2, 1) both;
}

@keyframes rise{
  from{opacity:0;transform:translateY(24px);}
  to{opacity:1;transform:translateY(0);}
}

.masthead h1{
  font-family:'Fraunces', serif;
  font-weight:500;
  font-size:clamp(56px, 9vw, 132px);
  line-height:0.92;
  letter-spacing:-0.035em;
  color:var(--ink);
  font-variation-settings:"opsz" 144, "SOFT" 50;
}
.masthead h1 .ital{
  font-style:italic;
  font-weight:400;
  font-variation-settings:"opsz" 144, "SOFT" 100;
}

.masthead .meta{
  font-family:'Inter', sans-serif;
  font-size:14.5px;
  line-height:1.6;
  color:var(--ink-soft);
  max-width:340px;
  padding-bottom:14px;
}
.masthead .meta strong{
  color:var(--ink);
  font-weight:500;
}

@media (max-width:900px){
  .masthead{grid-template-columns:1fr;gap:32px;margin-bottom:64px;}
  .masthead .meta{padding-bottom:0;}
}

/* ===== SECTION LABEL ===== */
.section-label{
  font-family:'DM Mono', monospace;
  font-size:11px;
  letter-spacing:0.22em;
  text-transform:uppercase;
  color:var(--ink-mute);
  display:flex;
  align-items:center;
  gap:14px;
  margin-bottom:32px;
}
.section-label::after{
  content:'';
  flex:1;
  height:1px;
  background:var(--rule);
}

/* ===== CARD GRID ===== */
.grid{
  display:grid;
  grid-template-columns:repeat(3, 1fr);
  gap:24px;
}

@media (max-width:1080px){
  .grid{grid-template-columns:repeat(2, 1fr);}
}
@media (max-width:680px){
  .grid{grid-template-columns:1fr;gap:20px;}
}

.card{
  position:relative;
  display:grid;
  grid-template-columns:8px 1fr;
  background:#FAF6EC;
  border:1px solid var(--paper-edge);
  border-radius:4px;
  text-decoration:none;
  color:inherit;
  overflow:hidden;
  transition:transform 0.5s cubic-bezier(0.2, 0.7, 0.2, 1),
             box-shadow 0.5s cubic-bezier(0.2, 0.7, 0.2, 1),
             border-color 0.4s ease;
  animation:rise 0.7s cubic-bezier(0.2, 0.7, 0.2, 1) both;
}

.card:nth-child(1){animation-delay:0.04s;}
.card:nth-child(2){animation-delay:0.08s;}
.card:nth-child(3){animation-delay:0.12s;}
.card:nth-child(4){animation-delay:0.16s;}
.card:nth-child(5){animation-delay:0.20s;}
.card:nth-child(6){animation-delay:0.24s;}
.card:nth-child(7){animation-delay:0.28s;}
.card:nth-child(8){animation-delay:0.32s;}
.card:nth-child(9){animation-delay:0.36s;}
.card:nth-child(10){animation-delay:0.40s;}
.card:nth-child(11){animation-delay:0.44s;}

.card:hover{
  transform:translateY(-3px);
  box-shadow:0 24px 48px -16px rgba(40,30,15,0.18),
             0 4px 12px -4px rgba(40,30,15,0.08);
  border-color:#C0B59B;
}

.card .stripe{
  background:var(--accent);
  position:relative;
}

.card .body{
  padding:32px 30px 28px;
  display:flex;
  flex-direction:column;
  min-height:260px;
}

@media (max-width:520px){
  .card .body{padding:28px 24px 24px;min-height:230px;}
}

.card .row{
  display:flex;
  justify-content:space-between;
  align-items:center;
  font-family:'DM Mono', monospace;
  font-size:11px;
  letter-spacing:0.18em;
  text-transform:uppercase;
  color:var(--ink-mute);
  margin-bottom:24px;
}

.card .num{
  color:var(--ink);
  font-weight:500;
}

.card .swatch{
  display:inline-flex;
  align-items:center;
  gap:8px;
}
.card .swatch::before{
  content:'';
  width:8px;height:8px;border-radius:50%;
  background:var(--accent);
  display:inline-block;
}

.card h2{
  font-family:'Fraunces', serif;
  font-weight:500;
  font-variation-settings:"opsz" 144, "SOFT" 30;
  font-size:38px;
  line-height:0.98;
  letter-spacing:-0.025em;
  color:var(--ink);
  margin-bottom:10px;
}

.card h2 .ital{
  font-style:italic;
  font-weight:400;
}

.card .kicker{
  font-family:'DM Mono', monospace;
  font-size:10.5px;
  letter-spacing:0.16em;
  text-transform:uppercase;
  font-weight:500;
  color:var(--ink-mute);
  margin-bottom:18px;
}

.card .desc{
  font-family:'Inter', sans-serif;
  font-size:14px;
  line-height:1.55;
  color:var(--ink-soft);
  font-weight:400;
  flex:1;
}

.card .cta{
  margin-top:22px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding-top:18px;
  border-top:1px solid var(--paper-edge);
  font-family:'DM Mono', monospace;
  font-size:11px;
  letter-spacing:0.2em;
  text-transform:uppercase;
  color:var(--ink);
}

.card .arrow{
  font-family:'Fraunces', serif;
  font-size:22px;
  font-weight:400;
  color:var(--ink);
  transition:transform 0.45s cubic-bezier(0.2, 0.7, 0.2, 1);
  display:inline-block;
}

.card:hover .arrow{
  transform:translateX(8px);
}

/* Per-card accent assignment */
.card.shopify{ --accent: var(--shopify); }
.card.recharge{ --accent: var(--recharge); }
.card.gorgias{ --accent: var(--gorgias); }
.card.shipstation{ --accent: var(--shipstation); }
.card.whale{ --accent: var(--whale); }
.card.meta-bm{ --accent: var(--meta-bm); }
.card.meta-ads{ --accent: var(--meta-ads); }
.card.google{ --accent: var(--google); }
.card.claude{ --accent: var(--claude); }
.card.figma{ --accent: var(--figma); }
.card.canva{ --accent: var(--canva); }

/* ===== FOOTER ===== */
.footer{
  margin-top:96px;
  padding-top:32px;
  border-top:1px solid var(--rule);
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
  gap:32px;
  font-family:'DM Mono', monospace;
  font-size:11px;
  letter-spacing:0.16em;
  text-transform:uppercase;
  color:var(--ink-mute);
}

.footer .note{
  max-width:520px;
  text-transform:none;
  letter-spacing:0;
  font-family:'Inter', sans-serif;
  font-size:13px;
  line-height:1.55;
  color:var(--ink-soft);
}
.footer .note strong{
  color:var(--ink);
  font-weight:500;
}

@media (max-width:768px){
  .footer{flex-direction:column;gap:20px;margin-top:64px;}
}

/* Selection */
::selection{background:var(--ink);color:var(--paper);}
</style>
</head>
<body>

<div class="page">

  <!-- TOP BAR -->
  <header class="topbar">
    <div class="mark">
      <span class="dots"><span></span><span></span><span></span><span></span><span></span><span></span></span>
      <span>Training Library · v1</span>
    </div>
    <div class="topbar-right">
      <?php if ( is_user_logged_in() ) : ?>
      <nav class="topnav">
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'brand-hub-index' ) ) ?: home_url( '/' ) ); ?>">Brand Hubs</a>
        <a class="signout" href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'brand_hub_logout', '1', home_url( '/' ) ), 'brand_hub_logout' ) ); ?>">Sign Out</a>
      </nav>
      <?php endif; ?>
      <div class="status">Team Access Only</div>
    </div>
  </header>

  <!-- MASTHEAD -->
  <section class="masthead">
    <h1>Platform<br><span class="ital">Training.</span></h1>
    <p class="meta">
      <strong>Eleven self-contained training guides for the tools the team uses every day.</strong>
      Each page is a single-page walkthrough covering setup, core workflows, and best practices. Click any card to open.
    </p>
  </section>

  <!-- SECTION LABEL -->
  <div class="section-label">
    <span>The Trainings · 11</span>
  </div>

  <!-- CARDS -->
  <section class="grid">

    <a href="<?php echo get_permalink(get_page_by_path('shopify-training')); ?>" class="card shopify">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">01 / 11</span>
          <span class="swatch">Storefront</span>
        </div>
        <h2>Shopify</h2>
        <div class="kicker">Platform Training</div>
        <p class="desc">The store's operating system. Catalog, orders, customers, and the daily workflows that keep the storefront running.</p>
        <div class="cta">
          <span>Open Training</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('recharge-training')); ?>" class="card recharge">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">02 / 11</span>
          <span class="swatch">Subscriptions</span>
        </div>
        <h2>Recharge</h2>
        <div class="kicker">Platform Training</div>
        <p class="desc">Subscriptions and recurring billing. How plans, churn tools, and the customer portal keep repeat revenue flowing.</p>
        <div class="cta">
          <span>Open Training</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('gorgias-training')); ?>" class="card gorgias">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">03 / 11</span>
          <span class="swatch">Helpdesk</span>
        </div>
        <h2>Gorgias</h2>
        <div class="kicker">Platform Training</div>
        <p class="desc">The CX helpdesk. Tickets, macros, automations, and the routing rules that keep response times low.</p>
        <div class="cta">
          <span>Open Training</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('shipstation-training')); ?>" class="card shipstation">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">04 / 11</span>
          <span class="swatch">Fulfilment</span>
        </div>
        <h2>Ship<span class="ital">Station</span></h2>
        <div class="kicker">Platform Training</div>
        <p class="desc">Order fulfilment and shipping. Labels, carriers, batch workflows, and the rules that get parcels out the door.</p>
        <div class="cta">
          <span>Open Training</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('triple-whale-training')); ?>" class="card whale">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">05 / 11</span>
          <span class="swatch">Analytics</span>
        </div>
        <h2>Triple <span class="ital">Whale</span></h2>
        <div class="kicker">Platform Training</div>
        <p class="desc">Ecommerce analytics and attribution. Dashboards, metrics, and reading the data that drives spend decisions.</p>
        <div class="cta">
          <span>Open Training</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('meta-business-manager-training')); ?>" class="card meta-bm">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">06 / 11</span>
          <span class="swatch">Meta</span>
        </div>
        <h2>Business <span class="ital">Manager</span></h2>
        <div class="kicker">Meta · Platform Training</div>
        <p class="desc">The control center for Meta assets. Accounts, pages, permissions, and the structure behind Meta advertising.</p>
        <div class="cta">
          <span>Open Training</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('meta-ads-account-training')); ?>" class="card meta-ads">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">07 / 11</span>
          <span class="swatch">Meta</span>
        </div>
        <h2>Ads <span class="ital">Account</span></h2>
        <div class="kicker">Meta · Platform Training</div>
        <p class="desc">Campaign setup and management on Meta. Account structure, billing, and launching ads the right way.</p>
        <div class="cta">
          <span>Open Training</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('google-workspace-training')); ?>" class="card google">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">08 / 11</span>
          <span class="swatch">Workspace</span>
        </div>
        <h2>Google <span class="ital">Workspace</span></h2>
        <div class="kicker">Platform Training</div>
        <p class="desc">Gmail, Drive, Docs, and Calendar. The everyday collaboration stack and how the team uses it well.</p>
        <div class="cta">
          <span>Open Training</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('claude-training')); ?>" class="card claude">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">09 / 11</span>
          <span class="swatch">AI</span>
        </div>
        <h2>Claude</h2>
        <div class="kicker">Platform Training</div>
        <p class="desc">AI assistance with Claude. Prompting, workflows, and using the model safely for real day-to-day tasks.</p>
        <div class="cta">
          <span>Open Training</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('figma-training')); ?>" class="card figma">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">10 / 11</span>
          <span class="swatch">Design</span>
        </div>
        <h2>Figma</h2>
        <div class="kicker">Platform Training</div>
        <p class="desc">Collaborative design. Files, frames, components, and how to work alongside the design team in Figma.</p>
        <div class="cta">
          <span>Open Training</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('canva-training')); ?>" class="card canva">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">11 / 11</span>
          <span class="swatch">Creative</span>
        </div>
        <h2>Canva</h2>
        <div class="kicker">Platform Training</div>
        <p class="desc">Fast on-brand creative. Templates, brand kit, and producing marketing assets without a designer.</p>
        <div class="cta">
          <span>Open Training</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="note">
      <strong>For the team:</strong> these training pages are internal and require sign-in. They're flagged <code style="font-family:'DM Mono',monospace;font-size:12px;">noindex</code> so they won't surface in search.
    </div>
    <div><?php echo date('F Y'); ?></div>
  </footer>

</div>

</body>
</html>
