<?php

/*
 * GOOGLE SIGN-IN CONFIG
 * For security, define these in wp-config.php instead of editing them here, e.g.:
 *
 *   define('BH_GOOGLE_CLIENT_ID',     '1234567890-abcdef.apps.googleusercontent.com');
 *   define('BH_GOOGLE_CLIENT_SECRET', 'GOCSPX-xxxxxxxxxxxxxxxxxxxx');
 *
 * The OAuth client's "Authorized redirect URI" in Google Cloud must be exactly:
 *   <your-site-url>/?brand_hub_google=callback
 */
if ( ! defined( 'BH_GOOGLE_CLIENT_ID' ) )     define( 'BH_GOOGLE_CLIENT_ID', '' );
if ( ! defined( 'BH_GOOGLE_CLIENT_SECRET' ) ) define( 'BH_GOOGLE_CLIENT_SECRET', '' );
// Only Google accounts on this domain may sign in.
if ( ! defined( 'BH_ALLOWED_DOMAIN' ) )       define( 'BH_ALLOWED_DOMAIN', 'inventel.net' );

add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
});

// NOTE: The admin toolbar is intentionally NOT injected into these self-contained
// templates. They don't call wp_head()/wp_footer(), and attempting to splice the
// toolbar in via output buffering proved unreliable on some hosts (blank pages).
// Editors should manage content from the dashboard at /wp-admin/ instead.

// Resolve a page's URL by the THEME TEMPLATE it is assigned, not by slug. This is
// robust: the template file is fixed by this theme, while the page slug is chosen
// freely in WordPress (e.g. the Training Hub may live at /traning-hub/). Falls back
// to the site home (or a provided fallback) when no page uses that template yet.
function bh_template_url( $template_file, $fallback = '' ) {
    $ids = get_posts( array(
        'post_type'   => 'page',
        'post_status' => 'publish',
        'numberposts' => 1,
        'fields'      => 'ids',
        'meta_key'    => '_wp_page_template',
        'meta_value'  => $template_file,
    ) );
    if ( ! empty( $ids ) ) {
        return get_permalink( $ids[0] );
    }
    return $fallback !== '' ? $fallback : home_url( '/' );
}

// FAVICON
// These templates don't call wp_head(), so the favicon must be printed manually.
// Call bh_favicon_tags() right before </head> in each template.
function bh_favicon_tags() {
    $url = get_template_directory_uri() . '/assets/favicon.png';
    echo '<link rel="icon" type="image/png" href="' . esc_url( $url ) . '">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url( $url ) . '">' . "\n";
}

// FLOATING "BACK TO INDEX" BUTTON
// Self-contained button printed inside a template (call it right before </body>).
// Links back to the relevant index by its template (robust to whatever slug the
// page uses). Inline styles keep it independent of each template's own CSS / fonts.
function bh_back_to_index_button( $target = 'training-hub-index', $label = 'All Trainings' ) {

    $template_file = ( strpos( $target, 'brand' ) !== false )
        ? 'page-brand-hub-index.php'
        : 'page-training-hub-index.php';
    $url = bh_template_url( $template_file );
    if ( ! $url ) {
        return;
    }

    $logout_url = wp_nonce_url(
        add_query_arg( 'brand_hub_logout', '1', home_url( '/' ) ),
        'brand_hub_logout'
    );
    ?>
    <style>
      .bh-fab-wrap{
        position:fixed; left:20px; bottom:20px; z-index:99999;
        display:flex; align-items:center; gap:10px; flex-wrap:wrap;
      }
      .bh-back-btn, .bh-signout-btn{
        display:inline-flex; align-items:center; gap:9px;
        padding:11px 18px; text-decoration:none; border-radius:999px;
        font-family:'DM Mono', ui-monospace, SFMono-Regular, Menlo, monospace;
        font-size:11px; letter-spacing:0.14em; text-transform:uppercase; font-weight:500;
        box-shadow:0 8px 24px -8px rgba(0,0,0,0.45);
        transition:transform .25s ease, background .25s ease, box-shadow .25s ease, color .25s ease;
      }
      .bh-back-btn{ background:#1A1814; color:#F2EDE2; padding-left:14px; }
      .bh-back-btn:hover{ background:#3A3530; transform:translateY(-2px); box-shadow:0 12px 28px -8px rgba(0,0,0,0.55); }
      .bh-back-btn .bh-arrow{ font-size:15px; line-height:1; transition:transform .25s ease; }
      .bh-back-btn:hover .bh-arrow{ transform:translateX(-3px); }
      .bh-signout-btn{ background:#FAF6EC; color:#B0322B; border:1px solid rgba(176,50,43,0.35); }
      .bh-signout-btn:hover{ background:#fff; color:#8A1E24; transform:translateY(-2px); box-shadow:0 12px 28px -8px rgba(0,0,0,0.3); }
      @media print{ .bh-fab-wrap{ display:none; } }
    </style>
    <div class="bh-fab-wrap">
      <a href="<?php echo esc_url( $url ); ?>" class="bh-back-btn" aria-label="<?php echo esc_attr( $label ); ?>">
        <span class="bh-arrow" aria-hidden="true">&larr;</span>
        <span><?php echo esc_html( $label ); ?></span>
      </a>
      <?php if ( is_user_logged_in() ) : ?>
      <a href="<?php echo esc_url( $logout_url ); ?>" class="bh-signout-btn">Sign Out</a>
      <?php endif; ?>
    </div>
    <?php
}

// BRAND HUB PROTECTION
// Redirect non-logged-in visitors away from brand hub pages to the login page.
add_action('template_redirect', function() {

    $protected_templates = [
        // Brand hubs
        'Brand Hub Index',
        'Aline Insoles Brand Hub',
        'Pizza Pack Brand Hub',
        'Spark Brand Hub',
        'SugarMD Brand Hub',
        'Wild Earth Brand Hub',
        'Clean & Hit Brand Hub',
        'Drain Buddy Brand Hub',
        // Platform training pages
        'Training Hub Index',
        'Resource Library',
        'Canva Training',
        'Claude Training',
        'Figma Training',
        'Google Workspace Training',
        'Gorgias Training',
        'Meta Ads Account Training',
        'Meta Business Manager Training',
        'Recharge Training',
        'ShipStation Training',
        'Shopify Training',
        'Triple Whale Training',
    ];

    if ( is_page() ) {
        $template = get_post_meta( get_the_ID(), '_wp_page_template', true );
        $template_file = get_theme_file_path( $template );
        $template_name = '';
        if ( $template && file_exists( $template_file ) ) {
            $data = get_file_data( $template_file, [ 'Template Name' => 'Template Name' ] );
            $template_name = $data['Template Name'] ?? '';
        }

        if ( in_array( $template_name, $protected_templates ) && ! is_user_logged_in() ) {
            $login_page = bh_template_url('page-brand-hub-login.php');
            if ( $login_page ) {
                // Remember where they were headed so we can return them after login.
                $login_page = add_query_arg(
                    'redirect_to',
                    rawurlencode( home_url( add_query_arg( [] ) ) ),
                    $login_page
                );
                wp_redirect( $login_page );
                exit;
            }
        }
    }
});

// CUSTOM LOGIN HANDLER
add_action('init', function() {
    if ( isset( $_POST['brand_hub_login_nonce'] ) &&
         wp_verify_nonce( $_POST['brand_hub_login_nonce'], 'brand_hub_login' ) ) {

        $username = sanitize_user( $_POST['log'] ?? '' );
        $password = $_POST['pwd'] ?? '';
        $remember = isset( $_POST['rememberme'] );

        $user = wp_signon([
            'user_login'    => $username,
            'user_password' => $password,
            'remember'      => $remember,
        ], false );

        $login_page = bh_template_url('page-brand-hub-login.php');

        if ( is_wp_error( $user ) ) {
            wp_redirect( add_query_arg( 'login', 'failed', $login_page ) );
            exit;
        }

        // Restrict access to @inventel.net email addresses only
        if ( ! str_ends_with( strtolower( $user->user_email ), '@inventel.net' ) ) {
            wp_logout();
            wp_redirect( add_query_arg( 'login', 'unauthorized', $login_page ) );
            exit;
        }

        $redirect = isset( $_POST['redirect_to'] )
            ? wp_validate_redirect( esc_url_raw( wp_unslash( $_POST['redirect_to'] ) ), '' )
            : '';
        if ( ! $redirect ) {
            $redirect = bh_template_url('page-brand-hub-index.php') ?: home_url();
        }
        wp_redirect( $redirect );
        exit;
    }
});

// CUSTOM LOGOUT HANDLER
add_action('init', function() {
    if ( isset( $_GET['brand_hub_logout'] ) && isset( $_GET['_wpnonce'] ) &&
         wp_verify_nonce( $_GET['_wpnonce'], 'brand_hub_logout' ) ) {
        wp_logout();
        $login_page = bh_template_url('page-brand-hub-login.php');
        wp_redirect( add_query_arg( 'login', 'loggedout', $login_page ?: home_url() ) );
        exit;
    }
});

// ----------------------------------------------------------------------------
// GOOGLE SIGN-IN (custom OAuth 2.0, no plugin)
// ----------------------------------------------------------------------------

/** The fixed redirect URI Google calls back to. Must match Google Cloud config. */
function bh_google_redirect_uri() {
    return home_url( '/?brand_hub_google=callback' );
}

/** URL of the login page (with optional ?login= status). */
function bh_login_page_url( $status = '' ) {
    $url = bh_template_url('page-brand-hub-login.php') ?: home_url();
    return $status ? add_query_arg( 'login', $status, $url ) : $url;
}

// STEP 1 — Kick off the OAuth flow: redirect the user to Google.
add_action('init', function() {
    if ( ( $_GET['brand_hub_google'] ?? '' ) !== 'start' ) {
        return;
    }

    if ( ! BH_GOOGLE_CLIENT_ID || ! BH_GOOGLE_CLIENT_SECRET ) {
        wp_redirect( bh_login_page_url( 'oauth_unconfigured' ) );
        exit;
    }

    // CSRF protection: random state echoed back by Google and matched to a cookie.
    $state    = wp_generate_password( 32, false );
    $redirect = isset( $_GET['redirect_to'] ) ? esc_url_raw( wp_unslash( $_GET['redirect_to'] ) ) : '';

    $secure = is_ssl();
    setcookie( 'bh_oauth_state', $state, time() + 600, COOKIEPATH ?: '/', COOKIE_DOMAIN, $secure, true );
    setcookie( 'bh_oauth_redirect', $redirect, time() + 600, COOKIEPATH ?: '/', COOKIE_DOMAIN, $secure, true );

    $auth_url = 'https://accounts.google.com/o/oauth2/v2/auth?' . http_build_query( [
        'client_id'     => BH_GOOGLE_CLIENT_ID,
        'redirect_uri'  => bh_google_redirect_uri(),
        'response_type' => 'code',
        'scope'         => 'openid email profile',
        'state'         => $state,
        'hd'            => BH_ALLOWED_DOMAIN, // hint Google to the Workspace domain
        'prompt'        => 'select_account',
        'access_type'   => 'online',
    ] );

    wp_redirect( $auth_url );
    exit;
});

// STEP 2 — Handle Google's callback: verify, enforce domain, log in.
add_action('init', function() {
    if ( ( $_GET['brand_hub_google'] ?? '' ) !== 'callback' ) {
        return;
    }

    // User denied consent or Google returned an error.
    if ( isset( $_GET['error'] ) || ! isset( $_GET['code'] ) ) {
        wp_redirect( bh_login_page_url( 'oauth_failed' ) );
        exit;
    }

    // Validate state against the cookie we set in step 1.
    $state_cookie = $_COOKIE['bh_oauth_state'] ?? '';
    $state_param  = $_GET['state'] ?? '';
    if ( ! $state_cookie || ! hash_equals( $state_cookie, $state_param ) ) {
        wp_redirect( bh_login_page_url( 'oauth_failed' ) );
        exit;
    }

    // Exchange the authorization code for tokens.
    $response = wp_remote_post( 'https://oauth2.googleapis.com/token', [
        'timeout' => 15,
        'body'    => [
            'code'          => sanitize_text_field( wp_unslash( $_GET['code'] ) ),
            'client_id'     => BH_GOOGLE_CLIENT_ID,
            'client_secret' => BH_GOOGLE_CLIENT_SECRET,
            'redirect_uri'  => bh_google_redirect_uri(),
            'grant_type'    => 'authorization_code',
        ],
    ] );

    if ( is_wp_error( $response ) ) {
        wp_redirect( bh_login_page_url( 'oauth_failed' ) );
        exit;
    }

    $token = json_decode( wp_remote_retrieve_body( $response ), true );
    if ( empty( $token['id_token'] ) ) {
        wp_redirect( bh_login_page_url( 'oauth_failed' ) );
        exit;
    }

    // Decode the ID token. It came directly from Google's token endpoint over
    // TLS, so per Google's guidance the signature need not be re-verified here;
    // we still check the audience, issuer, and expiry.
    $claims = bh_decode_jwt_payload( $token['id_token'] );
    if ( ! $claims ) {
        wp_redirect( bh_login_page_url( 'oauth_failed' ) );
        exit;
    }

    $aud_ok = ( ( $claims['aud'] ?? '' ) === BH_GOOGLE_CLIENT_ID );
    $iss_ok = in_array( $claims['iss'] ?? '', [ 'accounts.google.com', 'https://accounts.google.com' ], true );
    $exp_ok = ( (int) ( $claims['exp'] ?? 0 ) > time() );
    if ( ! $aud_ok || ! $iss_ok || ! $exp_ok ) {
        wp_redirect( bh_login_page_url( 'oauth_failed' ) );
        exit;
    }

    $email          = strtolower( $claims['email'] ?? '' );
    $email_verified = ! empty( $claims['email_verified'] ) &&
                      ( $claims['email_verified'] === true || $claims['email_verified'] === 'true' );
    $hd             = strtolower( $claims['hd'] ?? '' );
    $domain         = strtolower( BH_ALLOWED_DOMAIN );

    // Enforce the allowed Google Workspace domain.
    $domain_ok = $email_verified
        && substr( $email, -strlen( '@' . $domain ) ) === '@' . $domain
        && ( $hd === '' || $hd === $domain );

    if ( ! $email || ! $domain_ok ) {
        wp_redirect( bh_login_page_url( 'unauthorized' ) );
        exit;
    }

    // Find or create the matching WordPress user, then log them in.
    $user = get_user_by( 'email', $email );
    if ( ! $user ) {
        $base     = sanitize_user( current( explode( '@', $email ) ), true );
        $username = $base ?: 'user_' . wp_generate_password( 6, false );
        $suffix   = 1;
        while ( username_exists( $username ) ) {
            $username = $base . $suffix++;
        }
        $user_id = wp_insert_user( [
            'user_login'   => $username,
            'user_email'   => $email,
            'user_pass'    => wp_generate_password( 24 ),
            'display_name' => $claims['name'] ?? $username,
            'first_name'   => $claims['given_name'] ?? '',
            'last_name'    => $claims['family_name'] ?? '',
            'role'         => 'subscriber',
        ] );
        if ( is_wp_error( $user_id ) ) {
            wp_redirect( bh_login_page_url( 'oauth_failed' ) );
            exit;
        }
        $user = get_user_by( 'id', $user_id );
    }

    wp_set_current_user( $user->ID );
    wp_set_auth_cookie( $user->ID, true );

    // Return them to where they were headed (validated to this site).
    $redirect = $_COOKIE['bh_oauth_redirect'] ?? '';
    $redirect = $redirect ? wp_validate_redirect( $redirect, '' ) : '';
    if ( ! $redirect ) {
        $redirect = bh_template_url('page-brand-hub-index.php') ?: home_url();
    }

    // Clear the short-lived OAuth cookies.
    $secure = is_ssl();
    setcookie( 'bh_oauth_state', '', time() - 3600, COOKIEPATH ?: '/', COOKIE_DOMAIN, $secure, true );
    setcookie( 'bh_oauth_redirect', '', time() - 3600, COOKIEPATH ?: '/', COOKIE_DOMAIN, $secure, true );

    wp_redirect( $redirect );
    exit;
});

/** Decode (without signature verification) the payload of a JWT. */
function bh_decode_jwt_payload( $jwt ) {
    $parts = explode( '.', $jwt );
    if ( count( $parts ) !== 3 ) {
        return null;
    }
    $payload = strtr( $parts[1], '-_', '+/' );
    $payload = base64_decode( $payload . str_repeat( '=', ( 4 - strlen( $payload ) % 4 ) % 4 ) );
    $data    = json_decode( $payload, true );
    return is_array( $data ) ? $data : null;
}
