<?php
 /**
  * Front-end template
  *	Layout assumes you are using TwitterBootstrap
  *  if not please add styling for blockquote in your CSS
  *
  * Plugin option name: jststm_testimonials
  *
  * @package just-another-testimonials
  * @author raucher <myplace4spam@gmail.com>
  */
?>

<div class="jststm-container">
	<?php $cnt=0 ?>
	<?php foreach (get_option('jststm_testimonials') as $tstm):?>
		<?php $class =  ($cnt++ > 0) ? 'hidden' : '' ?>
		<blockquote class="<?php echo $class ?>">
			<p class="message"><?php echo $tstm['message'] ?></p>
			<p class="author"><small><?php echo $tstm['author'] ?></small></p>
		</blockquote>
	<?php endforeach ?>
</div>
