<?php

add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
});

// Hide admin bar on front end
add_action('wp_head', function() {
    echo '<style>body.logged-in { margin-top: 0 !important; } #wpadminbar { display: none !important; }</style>';
});

// BRAND HUB PROTECTION
// Redirect non-logged-in visitors away from brand hub pages to the login page.
add_action('template_redirect', function() {

    $protected_templates = [
        'Brand Hub Index',
        'Pizza Pack Brand Hub',
        'Spark Brand Hub',
        'SugarMD Brand Hub',
        'Wild Earth Brand Hub',
        'Clean & Hit Brand Hub',
        'Drain Buddy Brand Hub',
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
            $login_page = get_permalink( get_page_by_path( 'brand-hub-login' ) );
            if ( $login_page ) {
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

        $login_page = get_permalink( get_page_by_path( 'brand-hub-login' ) );

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

        $index = get_permalink( get_page_by_path( 'brand-hub-index' ) );
        wp_redirect( $index ?: home_url() );
        exit;
    }
});

// CUSTOM LOGOUT HANDLER
add_action('init', function() {
    if ( isset( $_GET['brand_hub_logout'] ) && isset( $_GET['_wpnonce'] ) &&
         wp_verify_nonce( $_GET['_wpnonce'], 'brand_hub_logout' ) ) {
        wp_logout();
        $login_page = get_permalink( get_page_by_path( 'brand-hub-login' ) );
        wp_redirect( add_query_arg( 'login', 'loggedout', $login_page ?: home_url() ) );
        exit;
    }
});
