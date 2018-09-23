<?php
/*
Plugin Name:    LidiaLAB Custom
Plugin URI:     https://devindev.lidialab.it
Description:    Personalizzazioni: pagina di login, custom field, disattiva bozza veloce dalla bacheca
Author:         Lidia (LAB) Pellizzaro
Version:        0.1
Author URI:     https://devindev.lidialab.it
License:        GPLv2+
Text Domain:    lldd
Domain Path:    /languages
*/

/*
This plugin  is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this plugin. If not, see {URI to Plugin License}.
*/

/*
=======================================
 The rule: don’t touch WordPress core
=======================================
*/


/* Verifica di sicurezza */
if ( ! defined( 'ABSPATH' ) ) { die; }

/* Logo */
function lldd_custom_logo () { ?>

<style type="text/css">

   body.login, #loginform {
      background-color: #222!important;
   }

   body.login * {
      font-size: 18px!important;
   }

   .login h1 a {
      background-image: url(<?php echo plugins_url( 'img/custom-logo.png', __FILE__ ) ?>)!important;
      background-size: 341px!important;
      width: 341px!important;
      height: 75px!important;
   }

   .login label, .login #backtoblog a, .login #nav a {
      color: #FFF!important;
   }

</style>

<?php }

add_action( 'login_enqueue_scripts', 'lldd_custom_logo' );

/* Custom Dashboard Widget */
function lldd_remove_quick_draft () {

   remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );

}

add_action( 'wp_dashboard_setup', 'lldd_remove_quick_draft' );
