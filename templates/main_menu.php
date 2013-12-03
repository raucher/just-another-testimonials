<?php
 /**
  * Plugin's main menu template
  *
  * Registered settings group: jststm_testimonials_group
  * Plugin option name: jststm_testimonials
  *
  * @package just-another-testimonials
  * @author raucher <myplace4spam@gmail.com>
  */
?>

<script type="text/javascript">

	var confrmMsg = '<?php _e('Are you sure?', 'jststm-domain') ?>';
	/**
	 * Script to manage price list items
	 */
	jQuery(document).ready(function($)
	{
		var reName = /^(.+\[)(\d+)(\].+)$/ig; // RegExp to generate new name

		$(document).on('click', '.add-item', function(e)
		{
			e.preventDefault();

			var $lastItem = $('.testimonial-container:last');
			var $newItem = $lastItem.clone(); // Clone last item block

			$newItem.find('input, textarea').each(function(){ // Select all inputs inside the wrapper
				$(this).attr({
					'name': $(this).attr('name').replace(reName, function(str, p1, p2, p3){
						return p1+(++p2)+p3; // Increase item array index
					}),
					'value': '' // Clear item value
				});
			});

			$newItem.insertAfter($lastItem); // Insert newly created item into the DOM
		});

		$(document).on('click', '.remove-item', null, function(e)
		{
			e.preventDefault();

			// If here is only one testimonial don't delete it
			if($('.testimonial-container').size() <= 1)
			{
				return;
			}

			var $container = $(this).parents('.testimonial-container');

			// If testimonial not empty show confirmation window and don't delete if answer is negative
			if(($('textarea', $container).val() || $('input', $container).val()) && !confirm(confrmMsg))
			{
				return;
			}

			$container.remove();
		});
	});
</script>

<div class="wrap">
	<h2>Manage Testimonials</h2>

	<form method="post" action="options.php">
		<?php settings_fields('jststm_testimonials_group') ?>
		<?php $testimonials = get_option('jststm_testimonials') ?>
		<table class="widefat" style="width: 80%">
			<thead>
				<tr>
					<th><?php _e('Message', 'jststm-domain') ?></th>
					<th><?php _e('Author', 'jststm-domain') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($testimonials as $i => $testimonial): ?>
					<tr class="testimonial-container">
						<td style="width: 60%">
							<textarea name="jststm_testimonials[<?php echo $i ?>][message]" style="width: 90%;" rows="7"><?php echo esc_textarea($testimonial['message']) ?></textarea>
						</td>
						<td style="width: 50%">
							<input type="text" name="jststm_testimonials[<?php echo $i ?>][author]" value="<?php echo esc_attr($testimonial['author']) ?>" style="width: 90%">
							<div style="margin-top: 14px">
								<a class="add-item" href="#" style="padding-right: 20px;">Add new</a>
								<a class="remove-item" href="#">Delete Item</a>
							</div>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
			<tfoot>
				<tr>
					<th><?php _e('Message', 'jststm-domain') ?></th>
					<th><?php _e('Author', 'jststm-domain') ?></th>
				</tr>
			</tfoot>
		</table>
		<p class="submit">
			<input class="button-primary" type="submit" value="<?php _e('Save Testimonials', 'jststm-domain') ?>">
		</p>
	</form>
</div>