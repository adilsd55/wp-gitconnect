<?php /* Template Name: Brand Hub Login */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Brand Knowledge Hubs  Login</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
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
html{scroll-behavior:smooth;height:100%;}

body{
  font-family:'Inter',sans-serif;
  background:var(--paper);
  color:var(--ink);
  min-height:100vh;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  padding:24px;
  background-image:
    radial-gradient(ellipse at 20% 10%, rgba(215,40,47,0.04), transparent 50%),
    radial-gradient(ellipse at 80% 90%, rgba(27,67,50,0.04), transparent 55%),
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
  z-index:0;
  opacity:0.3;
  mix-blend-mode:multiply;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3CfeColorMatrix values='0 0 0 0 0.1 0 0 0 0 0.09 0 0 0 0 0.07 0 0 0 0.5 0'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
}

.login-wrap{
  position:relative;
  z-index:1;
  width:100%;
  max-width:440px;
  animation:rise 0.7s cubic-bezier(0.2,0.7,0.2,1) both;
}

@keyframes rise{
  from{opacity:0;transform:translateY(20px);}
  to{opacity:1;transform:translateY(0);}
}

/* HEADER */
.login-header{
  text-align:center;
  margin-bottom:40px;
}

.login-mark{
  font-family:'DM Mono',monospace;
  font-size:11px;
  letter-spacing:0.2em;
  text-transform:uppercase;
  color:var(--ink-mute);
  display:flex;
  align-items:center;
  justify-content:center;
  gap:12px;
  margin-bottom:28px;
}

.login-dots{display:flex;gap:5px;}
.login-dots span{display:block;width:8px;height:8px;border-radius:50%;}
.login-dots span:nth-child(1){background:#D7282F;}
.login-dots span:nth-child(2){background:#708781;}
.login-dots span:nth-child(3){background:#5A7A5E;}
.login-dots span:nth-child(4){background:#1B4332;}
.login-dots span:nth-child(5){background:#1F4E2C;}
.login-dots span:nth-child(6){background:#0E5379;}

.login-header h1{
  font-family:'Fraunces',serif;
  font-weight:500;
  font-size:clamp(36px,8vw,56px);
  line-height:0.95;
  letter-spacing:-0.03em;
  color:var(--ink);
  margin-bottom:12px;
}

.login-header h1 .ital{
  font-style:italic;
  font-weight:400;
}

.login-header p{
  font-size:14px;
  color:var(--ink-mute);
  line-height:1.5;
}

/* CARD */
.login-card{
  background:#FAF6EC;
  border:1px solid var(--paper-edge);
  border-radius:6px;
  padding:40px;
  box-shadow:0 8px 32px -8px rgba(40,30,15,0.12);
}

/* ALERT */
.login-alert{
  padding:12px 16px;
  border-radius:4px;
  font-size:13.5px;
  margin-bottom:24px;
  font-family:'Inter',sans-serif;
  line-height:1.45;
}
.login-alert.error{
  background:rgba(215,40,47,0.08);
  border:1px solid rgba(215,40,47,0.3);
  color:#A01E24;
}
.login-alert.success{
  background:rgba(27,67,50,0.07);
  border:1px solid rgba(27,67,50,0.25);
  color:#1B4332;
}

/* FORM */
.login-field{
  margin-bottom:20px;
}

.login-field label{
  display:block;
  font-family:'DM Mono',monospace;
  font-size:10.5px;
  letter-spacing:0.18em;
  text-transform:uppercase;
  color:var(--ink-mute);
  margin-bottom:8px;
  font-weight:500;
}

.login-field input[type="text"],
.login-field input[type="password"]{
  width:100%;
  padding:12px 16px;
  background:#fff;
  border:1px solid var(--paper-edge);
  border-radius:4px;
  font-family:'Inter',sans-serif;
  font-size:15px;
  color:var(--ink);
  outline:none;
  transition:border-color 0.2s, box-shadow 0.2s;
  -webkit-appearance:none;
}

.login-field input:focus{
  border-color:var(--ink);
  box-shadow:0 0 0 3px rgba(26,24,20,0.08);
}

.login-remember{
  display:flex;
  align-items:center;
  gap:10px;
  margin-bottom:28px;
  cursor:pointer;
}

.login-remember input[type="checkbox"]{
  width:16px;
  height:16px;
  accent-color:var(--ink);
  cursor:pointer;
}

.login-remember span{
  font-size:13.5px;
  color:var(--ink-soft);
}

.login-btn{
  width:100%;
  padding:14px;
  background:var(--ink);
  color:var(--paper);
  border:none;
  border-radius:4px;
  font-family:'DM Mono',monospace;
  font-size:12px;
  letter-spacing:0.18em;
  text-transform:uppercase;
  font-weight:500;
  cursor:pointer;
  transition:background 0.25s, transform 0.2s;
}

.login-btn:hover{
  background:var(--ink-soft);
  transform:translateY(-1px);
}

.login-btn:active{
  transform:translateY(0);
}

/* GOOGLE BUTTON */
.login-google{
  display:flex;
  align-items:center;
  justify-content:center;
  gap:12px;
  width:100%;
  padding:13px;
  background:#fff;
  border:1px solid var(--paper-edge);
  border-radius:4px;
  font-family:'Inter',sans-serif;
  font-size:14px;
  font-weight:500;
  color:var(--ink-soft);
  text-decoration:none;
  cursor:pointer;
  transition:border-color 0.2s, box-shadow 0.2s, transform 0.2s;
}
.login-google:hover{
  border-color:var(--ink-faint);
  box-shadow:0 2px 10px -4px rgba(40,30,15,0.18);
  transform:translateY(-1px);
}
.login-google svg{flex-shrink:0;}

/* DIVIDER */
.login-divider{
  display:flex;
  align-items:center;
  gap:14px;
  margin:24px 0;
  color:var(--ink-faint);
}
.login-divider::before,
.login-divider::after{
  content:'';
  flex:1;
  height:1px;
  background:var(--rule);
}
.login-divider span{
  font-family:'DM Mono',monospace;
  font-size:10px;
  letter-spacing:0.14em;
  text-transform:uppercase;
  white-space:nowrap;
}

/* FOOTER */
.login-footer{
  text-align:center;
  margin-top:28px;
  font-family:'DM Mono',monospace;
  font-size:10.5px;
  letter-spacing:0.14em;
  text-transform:uppercase;
  color:var(--ink-faint);
}

::selection{background:var(--ink);color:var(--paper);}
</style>
<?php bh_favicon_tags(); ?>
</head>
<body>

<div class="login-wrap">

  <div class="login-header">
    <div class="login-mark">
      <span class="login-dots">
        <span></span><span></span><span></span>
        <span></span><span></span><span></span>
      </span>
      <span>Inventel  Internal</span>
    </div>
    <h1>InvenTel<br><span class="ital">University.</span></h1>
    <p>Team access only. Sign in to continue.</p>
  </div>

  <div class="login-card">

    <?php
    $login_status = $_GET['login'] ?? '';
    $redirect_to  = isset( $_GET['redirect_to'] ) ? esc_url_raw( wp_unslash( $_GET['redirect_to'] ) ) : '';
    if ( $login_status === 'failed' ) : ?>
      <div class="login-alert error">
        Incorrect username or password. Please try again.
      </div>
    <?php elseif ( $login_status === 'unauthorized' ) : ?>
      <div class="login-alert error">
        Access is restricted to Inventel team members. Please sign in with your <strong>@inventel.net</strong> Google account.
      </div>
    <?php elseif ( $login_status === 'oauth_failed' ) : ?>
      <div class="login-alert error">
        Google sign-in could not be completed. Please try again.
      </div>
    <?php elseif ( $login_status === 'oauth_unconfigured' ) : ?>
      <div class="login-alert error">
        Google sign-in is not configured yet. Please contact your administrator.
      </div>
    <?php elseif ( $login_status === 'loggedout' ) : ?>
      <div class="login-alert success">
        You have been signed out successfully.
      </div>
    <?php endif; ?>

    <?php
    $google_url = add_query_arg(
        array_filter( [
            'brand_hub_google' => 'start',
            'redirect_to'      => $redirect_to ? rawurlencode( $redirect_to ) : null,
        ] ),
        home_url( '/' )
    );
    ?>
    <a class="login-google" href="<?php echo esc_url( $google_url ); ?>">
      <svg viewBox="0 0 48 48" width="18" height="18" aria-hidden="true">
        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
      </svg>
      <span>Sign in with Google</span>
    </a>

    <div class="login-divider"><span>or sign in with a password</span></div>

    <form method="post" action="">
      <?php if ( $redirect_to ) : ?>
        <input type="hidden" name="redirect_to" value="<?php echo esc_attr( $redirect_to ); ?>">
      <?php endif; ?>
      <?php wp_nonce_field( 'brand_hub_login', 'brand_hub_login_nonce' ); ?>

      <div class="login-field">
        <label for="log">Username</label>
        <input type="text" name="log" id="log" autocomplete="username" required>
      </div>

      <div class="login-field">
        <label for="pwd">Password</label>
        <input type="password" name="pwd" id="pwd" autocomplete="current-password" required>
      </div>

      <label class="login-remember">
        <input type="checkbox" name="rememberme" value="forever">
        <span>Keep me signed in</span>
      </label>

      <button type="submit" class="login-btn">Sign In </button>
    </form>

  </div>

  <div class="login-footer">
    Brand Knowledge Hubs  <?php echo date('Y'); ?>
  </div>

</div>

</body>
</html>
