<?php
 /**
  * Plugin's main menu template
  *
  * Registered settings group: jtstm_testimonials_group
  * Plugin option name: jststm_testimonials
  *
  * @package just-another-testimonials
  * @author raucher <myplace4spam@gmail.com>
  */
?>

<div class="wrap">
	<h2>Manage Testimonials</h2>

	<form method="post" action="options.php">
		<?php settings_fields('jtstm_testimonials_group') ?>
		<?php $tstm = get_option('jststm_testimonials') ?>
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
						<textarea name="" style="width: 90%" rows="7"></textarea>
					</td>
					<td style="width: 50%">
						<input type="text" style="width: 90%">
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
	</form>

</div>