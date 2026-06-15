<?php /* Template Name: Brand Hub Index */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Brand Knowledge Hubs — Review Index</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700;9..144,800&family=Inter:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root{
  /* Neutral editorial palette — intentionally restrained so brand colors pop */
  --paper:#F2EDE2;
  --paper-deep:#EAE3D2;
  --paper-edge:#DDD3BE;
  --ink:#1A1814;
  --ink-soft:#3A3530;
  --ink-mute:#6E665B;
  --ink-faint:#9C9385;
  --rule:#C9BFA8;

  /* Brand accent colors — sampled from each hub's CSS */
  --pp-accent:#D7282F;        /* Pizza Pack red */
  --sp-accent:#708781;        /* Spark sage */
  --sm-accent:#5A7A5E;        /* SugarMD sage */
  --we-accent:#1B4332;        /* Wild Earth forest */
  --ch-accent:#1F4E2C;        /* Clean & Hit fairway */
  --db-accent:#0E5379;        /* Drain Buddy hydro */
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
    radial-gradient(ellipse at 15% 0%, rgba(215,40,47,0.025), transparent 50%),
    radial-gradient(ellipse at 85% 100%, rgba(27,67,50,0.03), transparent 55%),
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
.mark .dots span:nth-child(1){background:var(--pp-accent);}
.mark .dots span:nth-child(2){background:var(--sp-accent);}
.mark .dots span:nth-child(3){background:var(--sm-accent);}
.mark .dots span:nth-child(4){background:var(--we-accent);}
.mark .dots span:nth-child(5){background:var(--ch-accent);}
.mark .dots span:nth-child(6){background:var(--db-accent);}

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
  background:var(--pp-accent);
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
  grid-template-columns:repeat(2, 1fr);
  gap:24px;
}

@media (max-width:820px){
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

.card:nth-child(1){animation-delay:0.05s;}
.card:nth-child(2){animation-delay:0.12s;}
.card:nth-child(3){animation-delay:0.19s;}
.card:nth-child(4){animation-delay:0.26s;}
.card:nth-child(5){animation-delay:0.33s;}
.card:nth-child(6){animation-delay:0.40s;}

.card:hover{
  transform:translateY(-3px);
  box-shadow:0 24px 48px -16px rgba(40,30,15,0.18),
             0 4px 12px -4px rgba(40,30,15,0.08);
  border-color:#C0B59B;
}

.card .stripe{
  background:var(--accent);
  position:relative;
  transition:width 0.5s cubic-bezier(0.2, 0.7, 0.2, 1);
}

.card .body{
  padding:36px 36px 32px;
  display:flex;
  flex-direction:column;
  min-height:280px;
}

@media (max-width:520px){
  .card .body{padding:28px 24px 24px;min-height:240px;}
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
  margin-bottom:28px;
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
  font-size:46px;
  line-height:0.96;
  letter-spacing:-0.025em;
  color:var(--ink);
  margin-bottom:10px;
}

.card h2 .ital{
  font-style:italic;
  font-weight:400;
}

.card .kicker{
  font-family:'Inter', sans-serif;
  font-size:13px;
  font-weight:500;
  color:var(--ink-soft);
  letter-spacing:0;
  margin-bottom:20px;
}

.card .desc{
  font-family:'Inter', sans-serif;
  font-size:14.5px;
  line-height:1.55;
  color:var(--ink-soft);
  font-weight:400;
  flex:1;
}

.card .cta{
  margin-top:24px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding-top:20px;
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
.card.pp{ --accent: var(--pp-accent); }
.card.sp{ --accent: var(--sp-accent); }
.card.sm{ --accent: var(--sm-accent); }
.card.we{ --accent: var(--we-accent); }
.card.ch{ --accent: var(--ch-accent); }
.card.db{ --accent: var(--db-accent); }

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
      <span>Review Index · v2</span>
    </div>
    <div class="topbar-right">
      <?php if ( is_user_logged_in() ) : ?>
      <nav class="topnav">
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'training-hub-index' ) ) ?: home_url( '/' ) ); ?>">Training Hub</a>
        <a class="signout" href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'brand_hub_logout', '1', home_url( '/' ) ), 'brand_hub_logout' ) ); ?>">Sign Out</a>
      </nav>
      <?php endif; ?>
      <div class="status">Review Phase Open</div>
    </div>
  </header>

  <!-- MASTHEAD -->
  <section class="masthead">
    <h1>Brand Knowledge<br><span class="ital">Hubs.</span></h1>
    <p class="meta">
      <strong>Six brand reference sites, ready for review.</strong>
      Each hub is a single-page knowledge base covering positioning, voice, product, and visual identity. Click any card to open. Flag errors and additions, then return here.
    </p>
  </section>

  <!-- SECTION LABEL -->
  <div class="section-label">
    <span>The Hubs · 06</span>
  </div>

  <!-- CARDS -->
  <section class="grid">

    <a href="<?php echo get_permalink(get_page_by_path('pizza-pack-brand-hub')); ?>" class="card pp">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">01 / 06</span>
          <span class="swatch">Signal Red</span>
        </div>
        <h2>Pizza <span class="ital">Pack</span></h2>
        <div class="kicker">Brand Knowledge Hub</div>
        <p class="desc">The stackable, better-for-you frozen pizza system. Product mechanics, SKU lineup, voice, and the talking points that show up in 80% of CX calls.</p>
        <div class="cta">
          <span>Open Hub</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('spark-brand-hub')); ?>" class="card sp">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">02 / 06</span>
          <span class="swatch">Sage</span>
        </div>
        <h2>Spark</h2>
        <div class="kicker">Brand Knowledge Hub</div>
        <p class="desc">The one-piece steel firestarter. Material story, design rationale, brand voice, and the positioning that separates it from every other tool in the category.</p>
        <div class="cta">
          <span>Open Hub</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('sugar-md-brand-hub')); ?>" class="card sm">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">03 / 06</span>
          <span class="swatch">Clinical Sage</span>
        </div>
        <h2>Sugar<span class="ital">MD</span></h2>
        <div class="kicker">Brand Knowledge Hub</div>
        <p class="desc">Guided by Nature, Perfected by Science. The metabolic-health brand built around Dr. Ergin — clinical authority, supplement science, and the patient voice.</p>
        <div class="cta">
          <span>Open Hub</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('wild-earth-brand-hub')); ?>" class="card we">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">04 / 06</span>
          <span class="swatch">Forest</span>
        </div>
        <h2>Wild <span class="ital">Earth</span></h2>
        <div class="kicker">Brand Knowledge Hub</div>
        <p class="desc">Plant-based, sustainable pet food. Mission, ingredient science, founder story, and the case for transforming the pet-food industry one bowl at a time.</p>
        <div class="cta">
          <span>Open Hub</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('clean-and-hit-brand-hub')); ?>" class="card ch">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">05 / 06</span>
          <span class="swatch">Fairway</span>
        </div>
        <h2>Clean <span class="ital">&amp;</span> Hit</h2>
        <div class="kicker">Brand Knowledge Hub</div>
        <p class="desc">Hit it pure, every shot. The motorized club-face cleaner built for the course — product story, target golfer, and the on-course positioning.</p>
        <div class="cta">
          <span>Open Hub</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

    <a href="<?php echo get_permalink(get_page_by_path('drain-buddy-brand-hub')); ?>" class="card db">
      <div class="stripe"></div>
      <div class="body">
        <div class="row">
          <span class="num">06 / 06</span>
          <span class="swatch">Hydro</span>
        </div>
        <h2>Drain <span class="ital">Buddy</span></h2>
        <div class="kicker">Brand Knowledge Hub</div>
        <p class="desc">Clear drains made simple. The chemical-free unclogging tool — how it works, who it's for, and the voice that makes a plumbing problem feel solvable.</p>
        <div class="cta">
          <span>Open Hub</span>
          <span class="arrow">→</span>
        </div>
      </div>
    </a>

  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="note">
      <strong>For reviewers:</strong> these pages are a temporary review build. The URL is unguessable and pages are flagged <code style="font-family:'DM Mono',monospace;font-size:12px;">noindex</code> so they won't surface in search. Final versions will move to a password-protected subdomain.
    </div>
    <div>May 2026</div>
  </footer>

</div>

</body>
</html>

