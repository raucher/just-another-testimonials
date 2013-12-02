<?php 
 /**
 * Class JustAnotherTestimonials
 *
 * @author raucher <myplace4spam@gmail.com>
 * created at: 12/2/13 | 6:48 PM
 */
class JustAnotherTestimonials 
{
	public function __construct()
	{

	}

	public function render($layout)
	{
		include_once plugin_dir_path(dirname(__FILE__)."/../layouts/{$layout}");
	}

	/**
	 * Is called on plugin activation
	 */
	public static function activate()
	{
		
	}
	
	/**
	 * Is called on plugin deactivation
	 */
	public static function deactivate()
	{

	}
}