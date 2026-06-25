<?php /* Template Name: Privacy Policy */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Privacy Policy — Inventel Brand Knowledge Hubs</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Inter:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root{
  --paper:#F2EDE2;
  --paper-deep:#EAE3D2;
  --paper-edge:#DDD3BE;
  --ink:#1A1814;
  --ink-soft:#3A3530;
  --ink-mute:#6E665B;
  --ink-faint:#9C9385;
  --rule:#C9BFA8;
  --accent:#D7282F;
}

*{margin:0;padding:0;box-sizing:border-box;}
html{scroll-behavior:smooth;}

body{
  font-family:'Inter',sans-serif;
  background:var(--paper);
  color:var(--ink);
  min-height:100vh;
  padding:60px 24px 80px;
  background-image:
    radial-gradient(ellipse at 20% 10%, rgba(215,40,47,0.03), transparent 50%),
    radial-gradient(ellipse at 80% 90%, rgba(27,67,50,0.03), transparent 55%),
    radial-gradient(ellipse at 50% 50%, var(--paper) 0%, var(--paper-deep) 100%);
  position:relative;
}

/* Grain overlay */
body::before{
  content:'';
  position:fixed;
  inset:0;
  pointer-events:none;
  z-index:0;
  opacity:0.25;
  mix-blend-mode:multiply;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3CfeColorMatrix values='0 0 0 0 0.1 0 0 0 0 0.09 0 0 0 0 0.07 0 0 0 0.5 0'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
}

.page-wrap{
  position:relative;
  z-index:1;
  max-width:720px;
  margin:0 auto;
}

/* NAV */
.page-nav{
  display:flex;
  align-items:center;
  justify-content:space-between;
  margin-bottom:60px;
  flex-wrap:wrap;
  gap:16px;
}

.page-nav-mark{
  font-family:'DM Mono',monospace;
  font-size:10.5px;
  letter-spacing:0.2em;
  text-transform:uppercase;
  color:var(--ink-mute);
  display:flex;
  align-items:center;
  gap:10px;
}

.nav-dots{display:flex;gap:4px;}
.nav-dots span{display:block;width:7px;height:7px;border-radius:50%;}
.nav-dots span:nth-child(1){background:#D7282F;}
.nav-dots span:nth-child(2){background:#708781;}
.nav-dots span:nth-child(3){background:#5A7A5E;}
.nav-dots span:nth-child(4){background:#1B4332;}
.nav-dots span:nth-child(5){background:#1F4E2C;}
.nav-dots span:nth-child(6){background:#0E5379;}

.page-nav-back{
  font-family:'DM Mono',monospace;
  font-size:10.5px;
  letter-spacing:0.16em;
  text-transform:uppercase;
  color:var(--ink-mute);
  text-decoration:none;
  display:flex;
  align-items:center;
  gap:7px;
  transition:color 0.2s;
}
.page-nav-back:hover{color:var(--ink);}

/* HEADER */
.page-header{
  margin-bottom:56px;
  padding-bottom:32px;
  border-bottom:1px solid var(--rule);
}

.page-eyebrow{
  font-family:'DM Mono',monospace;
  font-size:10px;
  letter-spacing:0.2em;
  text-transform:uppercase;
  color:var(--ink-faint);
  margin-bottom:16px;
}

.page-header h1{
  font-family:'Fraunces',serif;
  font-weight:500;
  font-size:clamp(36px,6vw,52px);
  line-height:1;
  letter-spacing:-0.03em;
  color:var(--ink);
  margin-bottom:16px;
}

.page-header h1 .ital{
  font-style:italic;
  font-weight:400;
}

.page-meta{
  font-size:13px;
  color:var(--ink-faint);
  font-family:'DM Mono',monospace;
  letter-spacing:0.06em;
}

/* CONTENT */
.page-content{
  font-size:15px;
  line-height:1.75;
  color:var(--ink-soft);
}

.page-content h2{
  font-family:'Fraunces',serif;
  font-weight:500;
  font-size:22px;
  letter-spacing:-0.02em;
  color:var(--ink);
  margin:48px 0 14px;
  padding-top:48px;
  border-top:1px solid var(--paper-edge);
}

.page-content h2:first-of-type{
  margin-top:0;
  padding-top:0;
  border-top:none;
}

.page-content p{
  margin-bottom:16px;
}

.page-content p:last-child{
  margin-bottom:0;
}

.page-content ul{
  margin:0 0 16px 20px;
}

.page-content ul li{
  margin-bottom:8px;
}

.page-content strong{
  color:var(--ink);
  font-weight:600;
}

.page-content a{
  color:var(--ink);
  text-underline-offset:3px;
}

.page-content a:hover{
  color:var(--ink-mute);
}

/* HIGHLIGHT BOX */
.page-highlight{
  background:#FAF6EC;
  border:1px solid var(--paper-edge);
  border-radius:4px;
  padding:20px 24px;
  margin:24px 0;
  font-size:14px;
  color:var(--ink-soft);
  line-height:1.65;
}

/* FOOTER */
.page-footer{
  margin-top:64px;
  padding-top:28px;
  border-top:1px solid var(--rule);
  font-family:'DM Mono',monospace;
  font-size:10px;
  letter-spacing:0.14em;
  text-transform:uppercase;
  color:var(--ink-faint);
  display:flex;
  align-items:center;
  justify-content:space-between;
  flex-wrap:wrap;
  gap:12px;
}

.page-footer a{
  color:var(--ink-faint);
  text-decoration:underline;
  text-underline-offset:3px;
  transition:color 0.2s;
}
.page-footer a:hover{color:var(--ink);}

::selection{background:var(--ink);color:var(--paper);}

@media(max-width:600px){
  body{padding:40px 20px 60px;}
  .page-nav{margin-bottom:40px;}
  .page-header{margin-bottom:40px;}
}
</style>
<?php bh_favicon_tags(); ?>
</head>
<body>

<div class="page-wrap">

  <nav class="page-nav">
    <div class="page-nav-mark">
      <span class="nav-dots">
        <span></span><span></span><span></span>
        <span></span><span></span><span></span>
      </span>
      <span>Inventel Internal</span>
    </div>
    <a class="page-nav-back" href="<?php echo esc_url( bh_template_url( 'page-brand-hub-login.php' ) ); ?>">
      &larr; Back to login
    </a>
  </nav>

  <header class="page-header">
    <p class="page-eyebrow">Legal</p>
    <h1>Privacy <span class="ital">Policy.</span></h1>
    <p class="page-meta">Last updated: <?php echo date( 'F j, Y' ); ?></p>
  </header>

  <div class="page-content">

    <div class="page-highlight">
      This Privacy Policy applies to <strong>Inventel Brand Knowledge Hubs</strong> — a private internal portal operated by Inventel for use by authorised team members only. It explains what information we collect, how we use it, and your rights regarding that information.
    </div>

    <h2>1. Who We Are</h2>
    <p>
      Inventel Brand Knowledge Hubs is operated by <strong>Inventel</strong>. The platform provides brand guidelines, training materials, platform resources, and company policies exclusively to authorised staff across Inventel's brand portfolio, including Pizza Pack, Spark, SugarMD, Wild Earth, Clean &amp; Hit, Drain Buddy, and Aline Insoles.
    </p>
    <p>
      For privacy enquiries, contact us at: <a href="mailto:dev@inventel.net">dev@inventel.net</a>
    </p>

    <h2>2. What Information We Collect</h2>
    <p>When you sign in using Google, we receive the following information from your Google account:</p>
    <ul>
      <li><strong>Email address</strong> — used to verify you are an authorised team member (from an @inventel.net, @inventel.com, or @wildearth.com account)</li>
      <li><strong>Display name</strong> — used to identify you within the platform</li>
    </ul>
    <p>
      We do not request access to your Google Drive, Gmail, Calendar, contacts, or any other Google service. The OAuth scopes requested are limited to: <code>openid</code>, <code>email</code>, and <code>profile</code>.
    </p>
    <p>
      If you sign in using a username and password instead, we store only your WordPress login credentials (username and hashed password) as part of the standard WordPress user account system.
    </p>

    <h2>3. How We Use Your Information</h2>
    <p>The information we collect is used solely for the following purposes:</p>
    <ul>
      <li>To authenticate your identity and verify you are an authorised Inventel team member</li>
      <li>To create and maintain your user account on the platform</li>
      <li>To personalise your session (e.g. displaying your name)</li>
      <li>To maintain the security and integrity of the platform</li>
    </ul>
    <p>
      We do <strong>not</strong> use your information for marketing, advertising, profiling, or any purpose beyond granting access to this internal portal.
    </p>

    <h2>4. Data Storage and Retention</h2>
    <p>
      Your account information (email address and display name) is stored in our WordPress database hosted on our own servers. Data is retained for as long as you have an active account on the platform.
    </p>
    <p>
      If you require your account to be deleted, please contact us at <a href="mailto:dev@inventel.net">dev@inventel.net</a> and we will remove your data promptly.
    </p>

    <h2>5. Data Sharing</h2>
    <p>
      We do <strong>not</strong> sell, trade, rent, or share your personal information with any third parties. Your data is used exclusively within this internal platform and is not disclosed to any external organisations, advertisers, or data brokers.
    </p>
    <p>
      Your data may be accessible to Inventel system administrators for the purposes of managing user accounts and maintaining the platform.
    </p>

    <h2>6. Security</h2>
    <p>
      Access to this platform is restricted to authorised team members only. Authentication is handled either through Google's secure OAuth 2.0 protocol or WordPress's standard authentication system. We do not store your Google password or OAuth tokens beyond what is required to establish your session.
    </p>
    <p>
      All data is transmitted over HTTPS. We take reasonable technical and organisational measures to protect your information from unauthorised access, loss, or misuse.
    </p>

    <h2>7. Cookies</h2>
    <p>
      This platform uses cookies solely for authentication purposes — to keep you signed in during your session. We do not use tracking cookies, advertising cookies, or any third-party analytics cookies.
    </p>
    <p>
      The cookies set are standard WordPress session cookies and, if you choose "Keep me signed in", a longer-lived authentication cookie. These cookies do not leave our domain.
    </p>

    <h2>8. Your Rights</h2>
    <p>As a user of this platform, you have the right to:</p>
    <ul>
      <li>Request access to the personal data we hold about you</li>
      <li>Request correction of inaccurate data</li>
      <li>Request deletion of your account and associated data</li>
      <li>Revoke Google's access to this application at any time via your <a href="https://myaccount.google.com/permissions" target="_blank" rel="noopener">Google Account permissions page</a></li>
    </ul>
    <p>
      To exercise any of these rights, contact us at <a href="mailto:dev@inventel.net">dev@inventel.net</a>.
    </p>

    <h2>9. Changes to This Policy</h2>
    <p>
      We may update this Privacy Policy from time to time. When we do, the "Last updated" date at the top of this page will be revised. Continued use of the platform following any changes constitutes your acceptance of the updated policy.
    </p>

  </div>

  <footer class="page-footer">
    <span>Inventel Brand Knowledge Hubs &copy; <?php echo date( 'Y' ); ?></span>
    <a href="<?php echo esc_url( bh_template_url( 'page-brand-hub-login.php' ) ); ?>">Back to Login</a>
  </footer>

</div>

</body>
</html>
