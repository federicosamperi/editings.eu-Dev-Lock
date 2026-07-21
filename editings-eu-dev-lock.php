<?php
/**
 * Plugin Name: editings.eu Dev Lock
 * Plugin URI: https://editings.eu
 * Description: Limita l'accesso all'ambiente di sviluppo di editings.eu ai soli utenti autenticati, reindirizzando tutti gli altri alla home page.
 * Version: 0.1.0
 * Author: Federico Samperi
 * Author URI: https://federicosamperi.com
 * Text Domain: editings-eu-dev-lock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* CONFIGURAZIONE | Formato: ID PAGINA (hover) */

$editings_eu_dev_lock_allowed_pages = array(
	10342, // Informativa Privacy
	10353, // Etica dei contenuti
	10348, // Informativa Cookie
);

/* Login check */
function editings_eu_dev_lock_redirect_guests() {

	global $editings_eu_dev_lock_allowed_pages;

	if ( is_user_logged_in() ) {
		return;
	}

	// Consente l'accesso alla home page.
	if ( is_front_page() || is_home() ) {
		return;
	}

	// Consente l'accesso alle pagine in whitelist.
	if ( ! empty( $editings_eu_dev_lock_allowed_pages ) && is_page( $editings_eu_dev_lock_allowed_pages ) ) {
		return;
	}

	// Esclude login.
	if (
		is_admin() ||
		wp_doing_ajax() ||
		( defined( 'REST_REQUEST' ) && REST_REQUEST )
	) {
		return;
	}

	wp_safe_redirect( home_url( '/' ), 302 );
	exit;
}

add_action( 'template_redirect', 'editings_eu_dev_lock_redirect_guests' );
