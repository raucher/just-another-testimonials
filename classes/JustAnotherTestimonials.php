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
		add_action('admin_init', array($this, 'init_settings'));
		add_action('admin_menu', array($this, 'create_menu'));
	}

	public function init_settings()
	{
		register_setting('jtstm_testimonials_group', 'jtstm_testimonials', function($input)
		{
			$input['message'] = sanitize_text_field($input['message']);
			$input['author'] = sanitize_text_field($input['author']);
			
			return $input;
		});
	}

	public function create_menu()
	{
		$obj = $this; // PHP 5.3 doesn't allow $this usage in closures
		add_menu_page(
			'Just Another Testimonials plugin', // Page title
			'Testimonials', // Menu title
			'manage_options', // Minimal capability to see it in menu
			'jtstm_main_menu', // Unique menu slug
			function() use ($obj){
				$obj->render('main_menu'); // Render main menu page template
			}
		);
	}

	/**
	 * Renders HTML layout
	 * All layouts must be in plugin-dir/templates
	 *
	 * @param string $template Layout file name without an extension
	 */
	public function render($template)
	{
		$path = plugin_dir_path(dirname(__FILE__))."templates/{$template}.php";

		include_once $path;
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