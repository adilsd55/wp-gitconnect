<?php /* Template Name: Brand Hub Index */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inventel Innovations — Brand Knowledge Library</title>
<meta name="description" content="The Inventel Brand Knowledge Hub. Learn the brands you support, read the hub front to back, and pass the certification quiz.">
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
.wrap{position:relative;z-index:1;max-width:1180px;margin:0 auto;padding:0 28px}

/* ===== TOP BAR ===== */
.topbar{
  position:sticky;top:0;z-index:50;
  background:rgba(244,238,224,.82);
  backdrop-filter:blur(12px);
  border-bottom:1px solid var(--rule);
}
.topbar-in{max-width:1180px;margin:0 auto;padding:14px 28px;display:flex;align-items:center;gap:14px}
.mark{display:flex;align-items:center;gap:11px;font-weight:700;letter-spacing:.01em}
.mark-badge{
  width:34px;height:34px;border-radius:9px;flex:none;
  background:linear-gradient(150deg,var(--red),var(--red-deep));
  display:grid;place-items:center;color:#fff;
  font-family:'Fraunces',serif;font-weight:600;font-size:1.15rem;
  box-shadow:inset 0 0 0 1px rgba(255,255,255,.08);
}
.mark-txt small{display:block;font-size:.66rem;letter-spacing:.22em;text-transform:uppercase;color:var(--muted);font-weight:600;line-height:1}
.mark-txt strong{font-size:1.02rem;font-weight:700}
.topbar .tag{
  margin-left:auto;font-size:.72rem;letter-spacing:.16em;text-transform:uppercase;
  color:var(--red-deep);font-weight:700;border:1px solid var(--rule);
  padding:6px 12px;border-radius:999px;background:var(--cream);
}
@media(max-width:560px){.topbar .tag{display:none}}
.bh-topnav{margin-left:auto;display:flex;align-items:center;gap:8px}
.bh-topnav a{
  font-size:.74rem;letter-spacing:.1em;text-transform:uppercase;font-weight:700;
  color:var(--red-deep);border:1px solid var(--rule);
  padding:8px 16px;border-radius:999px;background:var(--cream);
  display:inline-flex;align-items:center;gap:7px;text-decoration:none;
  transition:background .2s,border-color .2s,color .2s,transform .2s;
}
.bh-topnav a:hover{text-decoration:none;background:var(--red);color:#fff;border-color:var(--red);transform:translateY(-1px)}
.bh-topnav a .ic{font-size:.95rem;line-height:1}
.bh-topnav a.bh-signout{color:#fff;background:var(--red-deep);border-color:var(--red-deep)}
.bh-topnav a.bh-signout:hover{background:#6f0e14;border-color:#6f0e14}
.bh-topnav + .tag{margin-left:0}
@media(max-width:620px){.bh-topnav a{padding:8px 12px}.bh-topnav a .lbl{display:none}.bh-topnav a .ic{font-size:1.1rem}}

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
  max-width:16ch;
}
.hero h1 em{font-style:italic;color:var(--red);position:relative}
.hero h1 .u{
  background:linear-gradient(transparent 64%,rgba(196,30,42,.30) 64%);
}
.lede{
  font-family:'Fraunces',serif;font-weight:400;font-style:italic;
  font-size:clamp(1.12rem,2.2vw,1.45rem);color:var(--ink-2);
  max-width:48ch;margin-top:24px;line-height:1.5;
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

/* ===== BRANDS ===== */
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
.card:hover{transform:translateY(-8px);box-shadow:var(--shadow-lg);border-color:transparent}
.card:focus-visible{outline:3px solid var(--gold);outline-offset:3px}
.thumb{
  position:relative;aspect-ratio:16/10;display:grid;place-items:center;padding:30px;
  overflow:hidden;
}
.thumb::after{ /* sheen on hover */
  content:"";position:absolute;inset:0;background:linear-gradient(115deg,transparent 40%,rgba(255,255,255,.16) 50%,transparent 60%);
  transform:translateX(-120%);transition:transform .7s ease;
}
.card:hover .thumb::after{transform:translateX(120%)}
.thumb img{max-width:74%;max-height:64%;object-fit:contain;position:relative;z-index:1;
  transition:transform .5s cubic-bezier(.2,.8,.2,1)}
.card:hover .thumb img{transform:scale(1.06)}
.logo-rev{filter:brightness(0) invert(1)}
.thumb .fallback{
  font-family:'Fraunces',serif;font-weight:600;font-size:1.7rem;color:#fff;
  text-align:center;position:relative;z-index:1;letter-spacing:.01em;
}
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

<!-- TOP BAR -->
<header class="topbar">
  <div class="topbar-in">
    <div class="mark">
      <div class="mark-badge">i</div>
      <div class="mark-txt">
        <small>Inventel Innovations</small>
        <strong>Brand Knowledge Library</strong>
      </div>
    </div>
    <?php if ( is_user_logged_in() ) : ?>
    <nav class="bh-topnav">
      <a href="<?php echo esc_url( bh_template_url('page-university-landing.php') ); ?>"><span class="ic">🎓</span><span class="lbl">University</span></a>
      <a href="<?php echo esc_url( bh_template_url('page-training-hub-index.php') ); ?>"><span class="ic">📚</span><span class="lbl">Training Hub</span></a>
      <a class="bh-signout" href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'brand_hub_logout', '1', home_url( '/' ) ), 'brand_hub_logout' ) ); ?>"><span class="ic">🚪</span><span class="lbl">Sign Out</span></a>
    </nav>
    <?php endif; ?>
  </div>
</header>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="wrap">
    <span class="eyebrow">Inventel team</span>
    <h1>Know the <em>brands</em> you bring to <span class="u">life.</span></h1>
    <p class="lede">Thank you for taking the time to learn the brands you work on. Every product here is part of the Inventel family — and the better you know each one, the stronger the work you do for it, whatever your role. Whether you're new, picking up a brand for the first time, or just sharpening up, this library is yours to use.</p>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="guide">
  <div class="wrap">
    <div class="guide-card">
      <h2>How to use this library</h2>
      <p class="sub">Each brand has its own complete Knowledge Hub. It's not just for onboarding, and it's not just for one team — everyone who works on a brand relies on these hubs as a shared source of truth, and to get ready for brands they may pick up next.</p>
      <div class="steps">
        <div class="step">
          <span class="num">1</span>
          <h3>Read it front to back</h3>
          <p>When you're assigned to a brand, read its hub <b>from start to finish</b> before you start your work — whatever your role.</p>
        </div>
        <div class="step">
          <span class="num">2</span>
          <h3>Keep it close</h3>
          <p>After your first read, use the hub as your <b>everyday reference guide</b> — products, positioning, brand voice, audience, offers, policies, and more all live here.</p>
        </div>
        <div class="step">
          <span class="num">3</span>
          <h3>New brand assigned?</h3>
          <p>Each time you pick up a new brand, read <b>that</b> brand's hub in full, then take the <b>mandatory quiz</b> at the end.</p>
        </div>
        <div class="step">
          <span class="num">4</span>
          <h3>Send your results</h3>
          <p>Print or export your completed quiz and send a copy to the <b>Performance team</b> and the brand's <b>Brand Lead</b>.</p>
        </div>
        <div class="step">
          <span class="num">5</span>
          <h3>Stay ready</h3>
          <p>Got free time? Read up on brands you're <b>not</b> assigned to. When something comes up or you're asked to cover, you'll already be ready.</p>
        </div>
      </div>
      <div class="guide-note">
        <span class="ic">📌</span>
        <span>The hubs are the single source of truth for products, policies, and brand voice. When something changes, the hub gets updated — not your memory. <b>Always check the hub first.</b></span>
      </div>
      <div class="guide-note">
        <span class="ic">🔧</span>
        <span>Spot a <b>broken link</b>, or anything <b>outdated, missing, or incorrect</b>? Let us know — notify any member of the <b>Performance Team</b> so we can fix it and keep every hub accurate.</span>
      </div>
    </div>
  </div>
</section>

<!-- BRANDS -->
<section class="brands">
  <div class="wrap">
    <div class="sec-head">
      <h2>The Brands</h2>
      <p>Tap any brand to open its full Knowledge Hub.</p>
    </div>
    <div class="grid" id="grid">

      <!-- WILD EARTH -->
      <a class="card" href="<?php echo esc_url( bh_template_url('page-wild-earth-brand-hub.php') ); ?>" style="--bp:#1B4332;--bp2:#2D6A4F">
        <div class="thumb" style="background:linear-gradient(155deg,#2D6A4F,#1B4332)">
          <img src="https://wildearth.com/cdn/shop/files/Logo_no_tag.png" alt="Wild Earth" class="logo-rev" loading="lazy"
               onerror="this.replaceWith(Object.assign(document.createElement('div'),{className:'fallback',textContent:'Wild Earth'}))">
        </div>
        <div class="card-body">
          <div class="card-name">Wild Earth</div>
          <div class="card-tag">Plant-based, vet-developed nutrition for dogs</div>
          <p class="card-desc">A full line of plant-based dog food, treats, and cat food — hypoallergenic, made in the USA, and formulated to meet or exceed AAFCO standards. Sold by subscription and one-time.</p>
          <div class="card-foot">
            <span class="chip">Pet Wellness</span>
            <span class="go">Open hub <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </div>
        </div>
      </a>

      <!-- SUGAR MD -->
      <a class="card" href="<?php echo esc_url( bh_template_url('page-sugar-md-brand-hub.php') ); ?>" style="--bp:#1F2520;--bp2:#525849">
        <div class="thumb" style="background:linear-gradient(155deg,#3A4035,#1F2520)">
          <img src="https://www.sugarmds.com/cdn/shop/files/imgi_1_Logo_Atoms_1.svg" alt="SugarMD" class="logo-rev" loading="lazy"
               onerror="this.replaceWith(Object.assign(document.createElement('div'),{className:'fallback',textContent:'SugarMD'}))">
        </div>
        <div class="card-body">
          <div class="card-name">SugarMD</div>
          <div class="card-tag">Guided by Nature, Perfected by Science</div>
          <p class="card-desc">A doctor-led wellness brand built around blood-sugar and metabolic support supplements. Dr. Ergin remains the medical authority and creative voice behind the catalog.</p>
          <div class="card-foot">
            <span class="chip">Wellness</span>
            <span class="go">Open hub <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </div>
        </div>
      </a>

      <!-- PIZZA PACK -->
      <a class="card" href="<?php echo esc_url( bh_template_url('page-pizza-pack-brand-hub.php') ); ?>" style="--bp:#1F1A17;--bp2:#D7282F">
        <div class="thumb" style="background:linear-gradient(155deg,#D7282F,#1F1A17)">
          <img src="https://pizzapack.com/cdn/shop/files/PP_Logo_White.png" alt="Pizza Pack" loading="lazy"
               onerror="this.replaceWith(Object.assign(document.createElement('div'),{className:'fallback',textContent:'Pizza Pack'}))">
        </div>
        <div class="card-body">
          <div class="card-name">Pizza Pack</div>
          <div class="card-tag">The smarter way to store leftover pizza</div>
          <p class="card-desc">The Shark Tank–famous reusable pizza container with adjustable microwavable trays. A founder-led story (Mark Cuban &amp; Lori Greiner) that's gold for PR and creative.</p>
          <div class="card-foot">
            <span class="chip">Housewares</span>
            <span class="go">Open hub <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </div>
        </div>
      </a>

      <!-- SPARK -->
      <a class="card" href="<?php echo esc_url( bh_template_url('page-spark-brand-hub.php') ); ?>" style="--bp:#2A2A28;--bp2:#B86340">
        <div class="thumb" style="background:linear-gradient(155deg,#B86340,#2A2A28)">
          <img src="https://sparkfirestarter.com/cdn/shop/files/Spark_Logo_Black_360x.png" alt="Spark" class="logo-rev" loading="lazy"
               onerror="this.replaceWith(Object.assign(document.createElement('div'),{className:'fallback',textContent:'Spark'}))">
        </div>
        <div class="card-body">
          <div class="card-name">Spark</div>
          <div class="card-tag">The last firestarter you'll ever buy</div>
          <p class="card-desc">A rugged, refillable electric firestarter built to last a lifetime. Openly anti-consumable — one Spark should be the only one a customer ever needs.</p>
          <div class="card-foot">
            <span class="chip">Outdoor</span>
            <span class="go">Open hub <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </div>
        </div>
      </a>

      <!-- CLEAN & HIT -->
      <a class="card" href="<?php echo esc_url( bh_template_url('page-clean-and-hit-brand-hub.php') ); ?>" style="--bp:#1F4E2C;--bp2:#C9A24E">
        <div class="thumb" style="background:linear-gradient(155deg,#2C6B3C,#1F4E2C)">
          <img src="https://cleanandhit.com/cdn/shop/files/clean-and-hit-logo-reversed.png" alt="Clean &amp; Hit" loading="lazy"
               onerror="this.replaceWith(Object.assign(document.createElement('div'),{className:'fallback',textContent:'Clean &amp; Hit'}))">
        </div>
        <div class="card-body">
          <div class="card-name">Clean &amp; Hit</div>
          <div class="card-tag">Hit it pure, every shot</div>
          <p class="card-desc">A motorized club-face cleaner built for the course. Dirty grooves kill spin, distance, and accuracy — Clean &amp; Hit fixes that in five seconds without breaking a round.</p>
          <div class="card-foot">
            <span class="chip">Golf</span>
            <span class="go">Open hub <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </div>
        </div>
      </a>

      <!-- DRAIN BUDDY -->
      <a class="card" href="<?php echo esc_url( bh_template_url('page-drain-buddy-brand-hub.php') ); ?>" style="--bp:#0E5379;--bp2:#2C7A7B">
        <div class="thumb" style="background:linear-gradient(155deg,#2C7A7B,#0E5379)">
          <img src="https://www.drainstrain.com/cdn/shop/files/Image20240717003911_1_1.png" alt="Drain Buddy" class="logo-rev" loading="lazy"
               onerror="this.replaceWith(Object.assign(document.createElement('div'),{className:'fallback',textContent:'Drain Buddy'}))">
        </div>
        <div class="card-body">
          <div class="card-name">Drain Buddy</div>
          <div class="card-tag">Clear drains made simple</div>
          <p class="card-desc">A drop-in, no-installation drain catcher that stops clogs before they start. The no-install evolution of Drain Strain, now the lead consumer brand in the line.</p>
          <div class="card-foot">
            <span class="chip">Home</span>
            <span class="go">Open hub <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </div>
        </div>
      </a>

      <!-- ALINE -->
      <a class="card" href="<?php echo esc_url( bh_template_url('page-aline-insoles-brand-hub.php') ); ?>" style="--bp:#111111;--bp2:#CC1F17">
        <div class="thumb" style="background:linear-gradient(155deg,#CC1F17,#111111)">
          <img src="https://alineinsoles.com/cdn/shop/files/ALINE-Integrated-Mark-600wi.png" alt="ALINE Insoles" class="logo-rev" loading="lazy"
               onerror="this.replaceWith(Object.assign(document.createElement('div'),{className:'fallback',textContent:'ALINE'}))">
        </div>
        <div class="card-body">
          <div class="card-name">ALINE Insoles</div>
          <div class="card-tag">Support that moves with you</div>
          <p class="card-desc">Performance insoles engineered to align the body from the feet up. A direct-to-consumer and B2B / wholesale brand serving athletes and everyday wearers alike.</p>
          <div class="card-foot">
            <span class="chip">Footwear</span>
            <span class="go">Open hub <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </div>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="foot">
  <div class="wrap foot-in">
    <span><strong>Inventel Innovations</strong> · Brand Knowledge Library</span>
    <span>Internal use only · v6.2 · 2026</span>
  </div>
</footer>

<script>
// Staggered reveal for cards
const cards=document.querySelectorAll('.card');
const io=new IntersectionObserver((entries)=>{
  entries.forEach((e,i)=>{
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
