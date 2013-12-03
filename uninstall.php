<?php
 /**
  * Is called during plugin uninstall
  *
  * Plugin option name: jststm_testimonials
  *
  * @package just-another-testimonials
  * @author raucher <myplace4spam@gmail.com>
  */

// If script isn't called by WordPress then exit
if(!defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN'))
{
	wp_die('Oh, man, don\'t bother me!');
}

delete_option('jststm_testimonials');