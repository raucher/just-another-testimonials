<?php
/**
 * Plugin Name: Just Another Testimonials
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A little and fast testimonial rotator
 * Version: 1.0
 * Author: Maksims Muzininkas
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: GPL2
 */
/*******************************************************************************
	Copyright 2013 Maksims Muzininkas (email : myplace4spam@gmail.com)
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
********************************************************************************/

include_once 'classes'.DIRECTORY_SEPARATOR.'JustAnotherTestimonials.php';

register_activation_hook(__FILE__, array('JustAnotherTestimonials', 'activate'));
register_deactivation_hook(__FILE__, array('JustAnotherTestimonials', 'deactivate'));

new JustAnotherTestimonials();