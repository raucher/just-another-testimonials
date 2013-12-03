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
		$this->add_shortcode();
	}

	protected function add_shortcode()
	{
		$obj = $this;
		add_shortcode('jst-testimonials', function($atts) use ($obj)
		{
			ob_start();
			$obj->render('front_end');
			return ob_get_clean();
		});
	}

	public function init_settings()
	{
		register_setting('jststm_testimonials_group', 'jststm_testimonials', function($input)
		{
			foreach($input as $i => $data)
			{
				$input[$i]['message'] = sanitize_text_field($data['message']);
				$input[$i]['author'] = sanitize_text_field($data['author']);
			}

			return $input;
		});
	}

	public function create_menu()
	{
		$obj = $this; // PHP 5.3 doesn't allow $this usage in closures

		// Add main menu page
		add_menu_page(
			'Testimonials plugin', // page title
			'Testimonials', // menu title
			'manage_options', // minimal capability to see it
			'jststm_main_menu', // unique menu slug
			function() use ($obj){
				$obj->render('main_menu'); // render main menu page template
			}
		);
		// Add help page
		add_submenu_page(
			'jststm_main_menu', // parent page slug
			'Testimonials plugin help', // page title
			'What is this?', // menu title
			'manage_options', // capability
			'jststm_help', // slug
			function() use ($obj){
				$obj->render('help_page');
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
		if(get_option('jststm_testimonials') === false)
		{
			update_option('jststm_testimonials', array(
				array(
					'author' => 'Mortem germanus',
					'message' => 'Fortune, endurance, and malaria. Lord, old death!
						Aw, evil furner. you won\'t fear the pacific ocean.',
				),
			));
		}
	}
	
	/**
	 * Is called on plugin deactivation
	 */
	public static function deactivate()
	{

	}
}