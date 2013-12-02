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

<div class="wrap">
	<h2>Manage Testimonials</h2>

	<form method="post" action="options.php">
		<?php settings_fields('jststm_testimonials_group') ?>
		<?php $data = get_option('jststm_testimonials') ?>
		<table class="widefat" style="width: 80%">
			<thead>
				<tr>
					<th>Message</th>
					<th>Author</th>
				</tr>
			</thead>
			<tbody>
				<tr class="item-conatiner">
					<td style="width: 60%">
						<textarea name="jststm_testimonials[0][message]" style="width: 90%" rows="7">
							<?php echo esc_textarea($data[0]['message']) ?>
						</textarea>
					</td>
					<td style="width: 50%">
						<input type="text" name="jststm_testimonials[0][author]" value="<?php echo esc_attr($data[0]['author']) ?>" style="width: 90%">
						<a href="#" style="display: block;">Delete Item</a>
						<a href="#" style="display: block;">Add new</a>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th>Message</th>
					<th>Author</th>
				</tr>
			</tfoot>
		</table>
		<p class="submit">
			<input class="button-primary" type="submit" value="Save Testimonials">
		</p>
	</form>
</div>