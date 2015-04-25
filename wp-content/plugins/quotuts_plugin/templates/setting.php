<div class="wrap qt-setting-page">
	<h2>Setting page</h2>

	<form action="options.php" method="post" enctype="multipart/form-data">
		<?php @settings_fields('wp_quotuts_csv-group'); ?>
        <?php @do_settings_fields('wp_quotuts_csv-group'); ?>

        <?php @do_settings_sections('wp_quotuts_csv'); ?>

        <!-- <table class="form-table">  
            <tr valign="top">
                <th scope="row"><label for="count_of_post">Count of post: </label></th>
                <td><input type="number" name="count_of_post" id="count_of_post" value="<?php echo get_option('quotuts_csv_count_of_post'); ?>" /></td>
            </tr>
        </table> -->

        <?php @submit_button(); ?>
	</form>

</div>