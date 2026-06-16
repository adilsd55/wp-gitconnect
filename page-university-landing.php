<?php /* Template Name: University Landing */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inventel University — Learning Home</title>
<meta name="description" content="InvenTel University. Two sections: Brand Knowledge Hubs and the Resource Library. Learn the brands you support and the platforms you work in.">
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
.topnav{margin-left:auto;display:flex;align-items:center;gap:8px}
.topnav a{
  font-size:.74rem;letter-spacing:.1em;text-transform:uppercase;font-weight:700;
  color:var(--red-deep);border:1px solid var(--rule);
  padding:8px 16px;border-radius:999px;background:var(--cream);
  display:inline-flex;align-items:center;gap:7px;transition:background .2s,border-color .2s,color .2s,transform .2s;
}
.topnav a:hover{text-decoration:none;background:var(--red);color:#fff;border-color:var(--red);transform:translateY(-1px)}
.topnav a .ic{font-size:.95rem;line-height:1}
@media(max-width:620px){
  .topnav a{padding:8px 12px}
  .topnav a .lbl{display:none}
  .topnav a .ic{font-size:1.1rem}
}

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
  max-width:18ch;
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
.guide-card .sub{color:var(--muted);max-width:64ch;position:relative;z-index:1;margin-bottom:34px}
.steps{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;
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
@media(max-width:760px){.steps{grid-template-columns:1fr}}
.guide-note{
  margin-top:26px;position:relative;z-index:1;display:flex;gap:13px;align-items:flex-start;
  background:rgba(196,30,42,.07);border:1px solid rgba(196,30,42,.20);
  border-radius:12px;padding:16px 18px;font-size:.92rem;color:var(--ink-2);
}
.guide-note .ic{font-size:1.15rem;line-height:1.3;flex:none}
.guide-note b{color:var(--red-deep);font-weight:700}

/* ===== SECTIONS ===== */
.brands{padding:64px 0 90px}
.sec-head{display:flex;align-items:flex-end;justify-content:space-between;gap:20px;margin-bottom:34px;flex-wrap:wrap}
.sec-head h2{font-family:'Fraunces',serif;font-weight:600;font-size:clamp(1.7rem,4vw,2.5rem);letter-spacing:-.01em}
.sec-head p{color:var(--muted);font-size:.95rem;max-width:40ch}

.grid{display:grid;grid-template-columns:repeat(2,1fr);gap:24px}
@media(max-width:760px){.grid{grid-template-columns:1fr}}
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
  position:relative;aspect-ratio:16/9;display:grid;place-items:center;padding:30px;
  overflow:hidden;
}
.thumb::after{
  content:"";position:absolute;inset:0;background:linear-gradient(115deg,transparent 40%,rgba(255,255,255,.16) 50%,transparent 60%);
  transform:translateX(-120%);transition:transform .7s ease;
}
.card:hover .thumb::after{transform:translateX(120%)}
.thumb .glyph{font-size:4.4rem;position:relative;z-index:1;filter:drop-shadow(0 3px 6px rgba(0,0,0,.3));transition:transform .5s cubic-bezier(.2,.8,.2,1)}
.card:hover .thumb .glyph{transform:scale(1.07)}
.t-brand{background:linear-gradient(155deg,#A52A2A,#6D0000)}
.t-library{background:linear-gradient(155deg,#D13030,#8E1219)}
.card-body{padding:24px 24px 26px;display:flex;flex-direction:column;flex:1}
.card-name{font-family:'Fraunces',serif;font-weight:600;font-size:1.5rem;line-height:1.1}
.card-tag{font-size:.9rem;color:var(--red-deep);font-weight:600;font-style:italic;font-family:'Fraunces',serif;margin-top:4px}
.card-desc{font-size:.93rem;color:var(--muted);margin-top:14px;line-height:1.55}
.card-list{list-style:none;margin:16px 0 0;padding:0}
.card-list li{font-size:.86rem;color:var(--muted);line-height:1.5;padding-left:20px;position:relative;margin-bottom:7px}
.card-list li::before{content:"";position:absolute;left:2px;top:.5em;width:7px;height:7px;border-radius:50%;background:var(--red);opacity:.7}
.card-foot{display:flex;align-items:center;justify-content:space-between;margin-top:22px;padding-top:18px;border-top:1px solid var(--rule)}
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
        <strong>University</strong>
      </div>
    </div>
    <nav class="topnav">
      <a href="<?php echo esc_url( bh_template_url('page-brand-hub-index.php') ); ?>"><span class="ic">🏷️</span><span class="lbl">Brand Hubs</span></a>
      <a href="<?php echo esc_url( bh_template_url('page-resource-library.php') ); ?>"><span class="ic">📚</span><span class="lbl">Resource Library</span></a>
    </nav>
  </div>
</header>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="wrap">
    <span class="eyebrow">Inventel team</span>
    <h1>One home for everything you <em class="u">learn</em> here.</h1>
    <p class="lede">Welcome to Inventel University. Everything is organized into two sections — the brands you support, and the platforms you work in. Whether you're brand new or just sharpening up, start with whichever one fits what you need today.</p>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="guide">
  <div class="wrap">
    <div class="guide-card">
      <h2>How Inventel University works</h2>
      <p class="sub">Two sections, one simple idea: know the brands you work on, and master the tools you work with. Each section is a full library of complete, self-contained guides you'll keep coming back to.</p>
      <div class="steps">
        <div class="step">
          <span class="num">1</span>
          <h3>Choose your section</h3>
          <p>Head into the <b>Brand Knowledge Hubs</b> to learn a brand, or the <b>Resource Library</b> to learn a platform or tool.</p>
        </div>
        <div class="step">
          <span class="num">2</span>
          <h3>Read it in full</h3>
          <p>Open the hub or guide you've been assigned and read it <b>start to finish</b> before you dive into the work.</p>
        </div>
        <div class="step">
          <span class="num">3</span>
          <h3>Quiz &amp; stay ready</h3>
          <p>Finish with the <b>mandatory quiz</b>, send your results to your lead, then explore other hubs and guides on your own time.</p>
        </div>
      </div>
      <div class="guide-note">
        <span class="ic">📌</span>
        <span>Not sure which section you need? <b>Brands</b> = what we sell. <b>Library</b> = the tools we use to sell it. Most people will use both over time.</span>
      </div>
      <div class="guide-note">
        <span class="ic">💡</span>
        <span>Both sections are built as your <b>everyday reference</b> — not just onboarding. When a question comes up while you work, come back and look it up.</span>
      </div>
    </div>
  </div>
</section>

<!-- SECTIONS -->
<section class="brands">
  <div class="wrap">
    <div class="sec-head">
      <h2>Choose Your Section</h2>
      <p>Tap either section to open its full library of guides.</p>
    </div>
    <div class="grid" id="grid">

      <!-- BRAND HUBS -->
      <a class="card" href="<?php echo esc_url( bh_template_url('page-brand-hub-index.php') ); ?>">
        <div class="thumb t-brand"><span class="glyph">🏷️</span></div>
        <div class="card-body">
          <div class="card-name">Brand Knowledge Hubs</div>
          <div class="card-tag">Know the brands you bring to life</div>
          <p class="card-desc">Get to know every brand in the Inventel family — the products, the positioning, the voice, and the customers behind each one.</p>
          <ul class="card-list">
            <li>A complete Knowledge Hub for every brand we work on</li>
            <li>Products, positioning, brand voice, audience, offers &amp; policies</li>
            <li>The shared source of truth before you start work on a brand</li>
            <li>Mandatory quiz at the end of each hub</li>
          </ul>
          <div class="card-foot">
            <span class="chip">What We Sell</span>
            <span class="go">Open hubs <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </div>
        </div>
      </a>

      <!-- RESOURCE LIBRARY -->
      <a class="card" href="<?php echo esc_url( bh_template_url('page-resource-library.php') ); ?>">
        <div class="thumb t-library"><span class="glyph">📚</span></div>
        <div class="card-body">
          <div class="card-name">Resource Library</div>
          <div class="card-tag">Master the tools you work with</div>
          <p class="card-desc">Master every platform and tool the company puts in your hands — built to take you from your first login to confident, independent work.</p>
          <ul class="card-list">
            <li>A complete training guide for every platform we use</li>
            <li>Step-by-step tutorials at beginner, intermediate &amp; advanced levels</li>
            <li>Self-contained — no external links needed for the core material</li>
            <li>Mandatory quiz at the end of each platform guide</li>
          </ul>
          <div class="card-foot">
            <span class="chip">Tools We Use</span>
            <span class="go">Open library <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </div>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="foot">
  <div class="wrap foot-in">
    <span><strong>Inventel Innovations</strong> · University</span>
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
