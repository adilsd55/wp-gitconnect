<?php /* Template Name: Training Hub Index */ ?>
<?php
if ( ! is_user_logged_in() ) {
    $__l = get_posts(['post_type'=>'page','post_status'=>'publish','numberposts'=>1,'fields'=>'ids','meta_key'=>'_wp_page_template','meta_value'=>'page-brand-hub-login.php']);
    if ( $__l ) { wp_redirect( add_query_arg('redirect_to', rawurlencode(home_url(add_query_arg([]))), get_permalink($__l[0])), 302 ); exit; }
    $__f = get_theme_file_path('page-brand-hub-login.php');
    if ( file_exists($__f) ) { include $__f; exit; }
    wp_die('Access restricted.', 'Login Required', ['response' => 403]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inventel — Training Resource Library</title>
<meta name="description" content="The Inventel Training Resource Library. Learn every platform and tool the company uses, read each guide front to back, and pass the certification quiz.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,400;1,9..144,500&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
:root{
  --ink:#141414;
  --ink-2:#1F1F1F;
  --paper:#F6F2EE;
  --paper-2:#ECE5DF;
  --cream:#FCFAF8;
  --red:#C41E2A;
  --red-deep:#8E1219;
  --red-soft:#E8505B;
  --gold:#C41E2A;
  --gold-soft:#F2A8AE;
  --rule:rgba(20,20,20,.14);
  --muted:#5E5A57;
  --link:#0055CC;
  --shadow:0 1px 2px rgba(20,20,20,.05),0 8px 30px rgba(20,20,20,.10);
  --shadow-lg:0 30px 80px rgba(20,20,20,.34);
}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{
  font-family:'Outfit',system-ui,sans-serif;
  background:var(--paper);
  color:var(--ink);
  line-height:1.6;
  -webkit-font-smoothing:antialiased;
  overflow-x:hidden;
}
/* faint paper grain */
body::before{
  content:"";position:fixed;inset:0;z-index:0;pointer-events:none;opacity:.5;
  background-image:radial-gradient(rgba(20,20,20,.05) 1px,transparent 1px);
  background-size:4px 4px;
}
a{color:var(--link);text-decoration:none}
a:hover{text-decoration:underline}
.wrap{position:relative;z-index:1;max-width:1180px;margin:0 auto;padding:0 28px}

/* ===== TOP BAR ===== */
.topbar{
  position:sticky;top:0;z-index:50;
  background:rgba(244,238,224,.82);
  backdrop-filter:blur(12px);
  border-bottom:1px solid var(--rule);
}
.topbar-in{max-width:1180px;margin:0 auto;padding:14px 28px;display:flex;align-items:center;gap:14px}
.mark{display:flex;align-items:center;gap:11px;font-weight:700;letter-spacing:.01em;text-decoration:none;color:inherit}
.mark:hover{text-decoration:none}
.mark-badge{
  width:34px;height:34px;border-radius:9px;flex:none;
  background:linear-gradient(150deg,var(--red),var(--red-deep));
  display:grid;place-items:center;color:#fff;
  font-family:'Fraunces',serif;font-weight:600;font-size:1.15rem;
  box-shadow:inset 0 0 0 1px rgba(255,255,255,.08);
}
.mark-txt small{display:block;font-size:.66rem;letter-spacing:.22em;text-transform:uppercase;color:var(--muted);font-weight:600;line-height:1}
.mark-txt strong{font-size:1.02rem;font-weight:700}
.topbar .back{
  margin-left:auto;font-size:.72rem;letter-spacing:.1em;text-transform:uppercase;
  color:var(--red-deep);font-weight:700;border:1px solid var(--rule);
  padding:6px 14px;border-radius:999px;background:var(--cream);display:inline-flex;align-items:center;gap:6px;
}
.topbar .back:hover{text-decoration:none;border-color:var(--red);color:var(--red)}
.topnav{margin-left:auto;display:flex;align-items:center;gap:8px}
.topnav a{
  font-size:.74rem;letter-spacing:.1em;text-transform:uppercase;font-weight:700;
  color:var(--red-deep);border:1px solid var(--rule);
  padding:8px 16px;border-radius:999px;background:var(--cream);
  display:inline-flex;align-items:center;gap:7px;text-decoration:none;
  transition:background .2s,border-color .2s,color .2s,transform .2s;
}
.topnav a:hover{text-decoration:none;background:var(--red);color:#fff;border-color:var(--red);transform:translateY(-1px)}
.topnav a .ic{font-size:.95rem;line-height:1}
.topnav a.signout{color:#fff;background:var(--red-deep);border-color:var(--red-deep)}
.topnav a.signout:hover{background:#6f0e14;border-color:#6f0e14}
@media(max-width:620px){.topnav a{padding:8px 12px}.topnav a .lbl{display:none}.topnav a .ic{font-size:1.1rem}}

/* ===== HERO ===== */
.hero{position:relative;padding:84px 0 72px;overflow:hidden}
.hero-bg{
  position:absolute;inset:0;z-index:0;
  background:
    radial-gradient(120% 90% at 88% -10%,rgba(196,30,42,.16),transparent 55%),
    radial-gradient(90% 80% at 6% 110%,rgba(196,30,42,.13),transparent 60%);
}
.hero .wrap{position:relative;z-index:1}
.eyebrow{
  display:inline-flex;align-items:center;gap:9px;
  font-size:.74rem;letter-spacing:.26em;text-transform:uppercase;font-weight:700;
  color:var(--red-deep);margin-bottom:22px;
}
.eyebrow::before{content:"";width:30px;height:2px;background:var(--gold);display:inline-block}
.hero h1{
  font-family:'Fraunces',serif;font-weight:600;
  font-size:clamp(2.5rem,6.2vw,4.5rem);line-height:1.02;letter-spacing:-.01em;
  max-width:17ch;
}
.hero h1 em{font-style:italic;color:var(--red);position:relative}
.hero h1 .u{
  background:linear-gradient(transparent 64%,rgba(196,30,42,.30) 64%);
}
.lede{
  font-family:'Fraunces',serif;font-weight:400;font-style:italic;
  font-size:clamp(1.12rem,2.2vw,1.45rem);color:var(--ink-2);
  max-width:52ch;margin-top:24px;line-height:1.5;
}

/* ===== HOW IT WORKS ===== */
.guide{padding:30px 0 8px}
.guide-card{
  background:var(--cream);
  color:var(--ink);border:1px solid var(--rule);border-radius:22px;padding:46px clamp(28px,5vw,56px);
  box-shadow:var(--shadow);position:relative;overflow:hidden;
}
.guide-card::after{
  content:"";position:absolute;right:-80px;top:-80px;width:300px;height:300px;border-radius:50%;
  background:radial-gradient(circle,rgba(196,30,42,.10),transparent 70%);pointer-events:none;
}
.guide-card h2{
  font-family:'Fraunces',serif;font-weight:600;font-size:clamp(1.5rem,3.2vw,2.1rem);
  position:relative;z-index:1;margin-bottom:8px;color:var(--ink);
}
.guide-card .sub{color:var(--muted);max-width:62ch;position:relative;z-index:1;margin-bottom:34px}
.steps{display:grid;grid-template-columns:repeat(5,1fr);gap:14px;
  position:relative;z-index:1}
.step{background:var(--paper);border:1px solid var(--rule);border-radius:14px;padding:24px 20px}
.step .num{
  font-family:'Fraunces',serif;font-size:.95rem;color:#fff;font-weight:600;
  display:inline-grid;place-items:center;width:32px;height:32px;border-radius:8px;
  background:linear-gradient(150deg,var(--red),var(--red-deep));margin-bottom:13px;
}
.step h3{font-size:.98rem;font-weight:700;margin-bottom:7px;color:var(--ink)}
.step p{font-size:.88rem;color:var(--muted);line-height:1.5}
.step b{color:var(--red-deep);font-weight:700}
@media(max-width:980px){.steps{grid-template-columns:repeat(2,1fr)}}
@media(max-width:560px){.steps{grid-template-columns:1fr}}
.guide-note{
  margin-top:26px;position:relative;z-index:1;display:flex;gap:13px;align-items:flex-start;
  background:rgba(196,30,42,.07);border:1px solid rgba(196,30,42,.20);
  border-radius:12px;padding:16px 18px;font-size:.92rem;color:var(--ink-2);
}
.guide-note .ic{font-size:1.15rem;line-height:1.3;flex:none}
.guide-note b{color:var(--red-deep);font-weight:700}

/* ===== DECKS ===== */
.brands{padding:64px 0 90px}
.sec-head{display:flex;align-items:flex-end;justify-content:space-between;gap:20px;margin-bottom:34px;flex-wrap:wrap}
.sec-head h2{font-family:'Fraunces',serif;font-weight:600;font-size:clamp(1.7rem,4vw,2.5rem);letter-spacing:-.01em}
.sec-head p{color:var(--muted);font-size:.95rem;max-width:40ch}

.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(310px,1fr));gap:24px}
.card{
  position:relative;display:flex;flex-direction:column;
  border-radius:18px;overflow:hidden;text-decoration:none;color:inherit;
  background:var(--cream);border:1px solid var(--rule);
  box-shadow:var(--shadow);
  transition:transform .4s cubic-bezier(.2,.8,.2,1),box-shadow .4s,border-color .4s;
  opacity:0;transform:translateY(22px);
}
.card.in{opacity:1;transform:none}
.card:hover{transform:translateY(-8px);box-shadow:var(--shadow-lg);border-color:transparent;text-decoration:none}
.card:focus-visible{outline:3px solid var(--gold);outline-offset:3px}
.thumb{
  position:relative;aspect-ratio:16/10;display:grid;place-items:center;padding:30px;
  overflow:hidden;
}
.thumb::after{
  content:"";position:absolute;inset:0;background:linear-gradient(115deg,transparent 40%,rgba(255,255,255,.16) 50%,transparent 60%);
  transform:translateX(-120%);transition:transform .7s ease;
}
.card:hover .thumb::after{transform:translateX(120%)}
.thumb .glyph{font-size:3.4rem;position:relative;z-index:1;filter:drop-shadow(0 3px 6px rgba(0,0,0,.3));transition:transform .5s cubic-bezier(.2,.8,.2,1)}
.card:hover .thumb .glyph{transform:scale(1.07)}
.badge-corner{position:absolute;top:12px;right:12px;z-index:2;background:rgba(0,0,0,.32);color:#fff;font-size:.6rem;font-weight:700;text-transform:uppercase;letter-spacing:.09em;padding:4px 9px;border-radius:999px}
/* thumbnail color variants — shades of red */
.t-shopify{background:linear-gradient(155deg,#b81d1d,#8B0000)}
.t-gorgias{background:linear-gradient(155deg,#9c1f1f,#6D0000)}
.t-google{background:linear-gradient(155deg,#d13030,#a31515)}
.t-triple{background:linear-gradient(155deg,#8B0000,#5a0000)}
.t-recharge{background:linear-gradient(155deg,#c0392b,#991b1b)}
.t-canva{background:linear-gradient(155deg,#b02a2a,#7f1d1d)}
.t-meta-bm{background:linear-gradient(155deg,#a31515,#8B0000)}
.t-figma{background:linear-gradient(155deg,#a52a2a,#6D0000)}
.t-ship{background:linear-gradient(155deg,#c0392b,#a31515)}
.t-meta-ads{background:linear-gradient(155deg,#a31515,#7f1d1d)}
.t-claude{background:linear-gradient(155deg,#9c1f1f,#5a0000)}
.card-body{padding:22px 22px 24px;display:flex;flex-direction:column;flex:1}
.card-name{font-family:'Fraunces',serif;font-weight:600;font-size:1.32rem;line-height:1.1}
.card-tag{font-size:.86rem;color:var(--red-deep);font-weight:600;font-style:italic;font-family:'Fraunces',serif;margin-top:3px}
.card-desc{font-size:.92rem;color:var(--muted);margin-top:13px;line-height:1.55;flex:1}
.card-foot{display:flex;align-items:center;justify-content:space-between;margin-top:20px;padding-top:16px;border-top:1px solid var(--rule)}
.chip{font-size:.68rem;letter-spacing:.13em;text-transform:uppercase;font-weight:700;
  color:var(--red-deep);background:rgba(196,30,42,.08);padding:5px 10px;border-radius:999px}
.go{display:inline-flex;align-items:center;gap:7px;font-weight:600;font-size:.9rem;color:var(--ink)}
.go svg{transition:transform .3s}
.card:hover .go svg{transform:translateX(4px)}

/* ===== FOOTER ===== */
.foot{border-top:1px solid var(--rule);padding:34px 0 46px;color:var(--muted);font-size:.85rem}
.foot-in{display:flex;justify-content:space-between;gap:18px;flex-wrap:wrap;align-items:center}
.foot strong{color:var(--ink);font-weight:600}

@media(max-width:600px){
  .hero{padding:60px 0 50px}
}
</style>
<?php bh_favicon_tags(); ?>
</head>
<body>
<?php bh_back_to_index_button( 'university-landing', 'University', false ); ?>

<!-- TOP BAR -->
<header class="topbar">
  <div class="topbar-in">
    <a class="mark" href="<?php echo esc_url( bh_template_url('page-university-landing.php') ); ?>">
      <div class="mark-badge">i</div>
      <div class="mark-txt">
        <small>Inventel Innovations</small>
        <strong>Training Resource Library</strong>
      </div>
    </a>
    <?php if ( is_user_logged_in() ) : ?>
    <nav class="topnav">
      <a href="<?php echo esc_url( bh_template_url('page-university-landing.php') ); ?>"><span class="ic">🎓</span><span class="lbl">University</span></a>
      <a href="<?php echo esc_url( bh_template_url('page-brand-hub-index.php') ); ?>"><span class="ic">🏷️</span><span class="lbl">Brand Hubs</span></a>
      <a class="signout" href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'brand_hub_logout', '1', home_url( '/' ) ), 'brand_hub_logout' ) ); ?>"><span class="ic">🚪</span><span class="lbl">Sign Out</span></a>
    </nav>
    <?php endif; ?>
  </div>
</header>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="wrap">
    <span class="eyebrow">Inventel team</span>
    <h1>Master the <em class="u">tools</em> you work with.</h1>
    <p class="lede">Thank you for taking the time to learn the tools Inventel provides to you. Every platform we use has its own complete guide — written to take you from your very first login to confident, independent work. The better you know each tool, the easier your day-to-day becomes, whatever your role.</p>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="guide">
  <div class="wrap">
    <div class="guide-card">
      <h2>How to use this library</h2>
      <p class="sub">Each platform has its own complete, self-contained training guide. It's not just for onboarding — it's the reference you'll keep coming back to whenever a question comes up while you work.</p>
      <div class="steps">
        <div class="step">
          <span class="num">1</span>
          <h3>Read it start to finish</h3>
          <p>When you're <b>granted access</b> to a platform, read its guide <b>from start to finish</b> before you dive in.</p>
        </div>
        <div class="step">
          <span class="num">2</span>
          <h3>Keep it close</h3>
          <p>After your first read, use the guide as your <b>everyday reference</b> whenever a question comes up.</p>
        </div>
        <div class="step">
          <span class="num">3</span>
          <h3>New access = new quiz</h3>
          <p>Each time new access is shared with you, read that platform's training, then take the <b>mandatory quiz</b> at the end.</p>
        </div>
        <div class="step">
          <span class="num">4</span>
          <h3>Send your results</h3>
          <p>Send a copy of your completed quiz to the <b>Performance Team</b> and your <b>Department Lead</b>.</p>
        </div>
        <div class="step">
          <span class="num">5</span>
          <h3>Stay ready</h3>
          <p>Got free time between tasks? Work through the <b>intermediate</b> and <b>advanced</b> material on your own.</p>
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
  </div>
</section>

<!-- DECKS -->
<section class="brands">
  <div class="wrap">
    <div class="sec-head">
      <h2>The Training Library</h2>
      <p>Tap any guide to open it. Each one is a complete, self-contained training deck.</p>
    </div>
    <div class="grid" id="grid">

      <a class="card" href="<?php echo esc_url( bh_template_url('page-shopify-training.php') ); ?>">
        <div class="thumb t-shopify"><span class="badge-corner">Storefront</span><span class="glyph">🛒</span></div>
        <div class="card-body">
          <div class="card-name">Shopify</div>
          <div class="card-tag">Run the online store</div>
          <p class="card-desc">Run the online store end to end — products, orders, inventory, and storefront management.</p>
          <div class="card-foot"><span class="chip">Storefront</span><span class="go">Open guide <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
        </div>
      </a>

      <a class="card" href="<?php echo esc_url( bh_template_url('page-gorgias-training.php') ); ?>">
        <div class="thumb t-gorgias"><span class="badge-corner">Support</span><span class="glyph">💬</span></div>
        <div class="card-body">
          <div class="card-name">Gorgias CRM</div>
          <div class="card-tag">One shared inbox</div>
          <p class="card-desc">Handle customer support tickets, macros, and helpdesk workflows in one shared inbox.</p>
          <div class="card-foot"><span class="chip">Support</span><span class="go">Open guide <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
        </div>
      </a>

      <a class="card" href="<?php echo esc_url( bh_template_url('page-google-workspace-training.php') ); ?>">
        <div class="thumb t-google"><span class="badge-corner">Core</span><span class="glyph">📧</span></div>
        <div class="card-body">
          <div class="card-name">Google Workspace</div>
          <div class="card-tag">The daily backbone</div>
          <p class="card-desc">Gmail, Drive, Docs, Sheets, and Calendar — the daily backbone of company communication.</p>
          <div class="card-foot"><span class="chip">Core</span><span class="go">Open guide <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
        </div>
      </a>

      <a class="card" href="<?php echo esc_url( bh_template_url('page-triple-whale-training.php') ); ?>">
        <div class="thumb t-triple"><span class="badge-corner">Analytics</span><span class="glyph">📊</span></div>
        <div class="card-body">
          <div class="card-name">Triple Whale</div>
          <div class="card-tag">The numbers that drive decisions</div>
          <p class="card-desc">Track ecommerce performance, attribution, and the metrics that drive marketing decisions.</p>
          <div class="card-foot"><span class="chip">Analytics</span><span class="go">Open guide <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
        </div>
      </a>

      <a class="card" href="<?php echo esc_url( bh_template_url('page-recharge-training.php') ); ?>">
        <div class="thumb t-recharge"><span class="badge-corner">Subscriptions</span><span class="glyph">🔁</span></div>
        <div class="card-body">
          <div class="card-name">Recharge</div>
          <div class="card-tag">Recurring revenue, handled</div>
          <p class="card-desc">Manage subscriptions, recurring billing, and customer retention for repeat orders.</p>
          <div class="card-foot"><span class="chip">Subscriptions</span><span class="go">Open guide <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
        </div>
      </a>

      <a class="card" href="<?php echo esc_url( bh_template_url('page-canva-training.php') ); ?>">
        <div class="thumb t-canva"><span class="badge-corner">Design</span><span class="glyph">🎨</span></div>
        <div class="card-body">
          <div class="card-name">Canva</div>
          <div class="card-tag">On-brand, no design background</div>
          <p class="card-desc">Create on-brand graphics, social posts, and marketing assets without a design background.</p>
          <div class="card-foot"><span class="chip">Design</span><span class="go">Open guide <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
        </div>
      </a>

      <a class="card" href="<?php echo esc_url( bh_template_url('page-meta-business-manager-training.php') ); ?>">
        <div class="thumb t-meta-bm"><span class="badge-corner">Admin</span><span class="glyph">🏢</span></div>
        <div class="card-body">
          <div class="card-name">Meta Business Manager</div>
          <div class="card-tag">The Meta control room</div>
          <p class="card-desc">Manage pages, ad accounts, assets, and team permissions across the Meta ecosystem.</p>
          <div class="card-foot"><span class="chip">Admin</span><span class="go">Open guide <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
        </div>
      </a>

      <a class="card" href="<?php echo esc_url( bh_template_url('page-figma-training.php') ); ?>">
        <div class="thumb t-figma"><span class="badge-corner">Design</span><span class="glyph">✏️</span></div>
        <div class="card-body">
          <div class="card-name">Figma</div>
          <div class="card-tag">Design, together, in real time</div>
          <p class="card-desc">Collaborate on interface design, prototypes, and shared design files in real time.</p>
          <div class="card-foot"><span class="chip">Design</span><span class="go">Open guide <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
        </div>
      </a>

      <a class="card" href="<?php echo esc_url( bh_template_url('page-shipstation-training.php') ); ?>">
        <div class="thumb t-ship"><span class="badge-corner">Fulfillment</span><span class="glyph">📦</span></div>
        <div class="card-body">
          <div class="card-name">ShipStation</div>
          <div class="card-tag">Get orders out the door</div>
          <p class="card-desc">Process, batch, and label shipments — the hub for getting orders out the door.</p>
          <div class="card-foot"><span class="chip">Fulfillment</span><span class="go">Open guide <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
        </div>
      </a>

      <a class="card" href="<?php echo esc_url( bh_template_url('page-meta-ads-account-training.php') ); ?>">
        <div class="thumb t-meta-ads"><span class="badge-corner">Advertising</span><span class="glyph">📣</span></div>
        <div class="card-body">
          <div class="card-name">Meta Ads</div>
          <div class="card-tag">Campaigns that perform</div>
          <p class="card-desc">Build, launch, and optimize ad campaigns across Facebook and Instagram.</p>
          <div class="card-foot"><span class="chip">Advertising</span><span class="go">Open guide <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
        </div>
      </a>

      <a class="card" href="<?php echo esc_url( bh_template_url('page-claude-training.php') ); ?>">
        <div class="thumb t-claude"><span class="badge-corner">AI</span><span class="glyph">🤖</span></div>
        <div class="card-body">
          <div class="card-name">Claude</div>
          <div class="card-tag">AI, used the right way</div>
          <p class="card-desc">Use AI to draft, research, summarize, and speed up your everyday work the right way.</p>
          <div class="card-foot"><span class="chip">AI</span><span class="go">Open guide <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="foot">
  <div class="wrap foot-in">
    <span><strong>Inventel Innovations</strong> · Training Resource Library</span>
    <span>Internal use only · 2026</span>
  </div>
</footer>

<script>
const cards=document.querySelectorAll('.card');
const io=new IntersectionObserver((entries)=>{
  entries.forEach((e)=>{
    if(e.isIntersecting){
      const el=e.target;
      const idx=[...cards].indexOf(el);
      setTimeout(()=>el.classList.add('in'),(idx%4)*90);
      io.unobserve(el);
    }
  });
},{threshold:.12});
cards.forEach(c=>io.observe(c));
</script>
</body>
</html>
