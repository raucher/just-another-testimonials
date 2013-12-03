<?php
 /**
  * Front-end template
  *
  * Plugin option name: jststm_testimonials
  *
  * @package just-another-testimonials
  * @author raucher <myplace4spam@gmail.com>
  */
?>

<div class="jststm-container">
	<h3>Hi, I'm a shortcode o_0 !</h3>
	<?php foreach (get_option('jststm_testimonials') as $tstm):?>
		<blockquote>
			<p class="message"><?php echo $tstm['message'] ?></p>
			<p class="author"><small><?php echo $tstm['author'] ?></small></p>
		</blockquote>
	<?php endforeach ?>
</div>
