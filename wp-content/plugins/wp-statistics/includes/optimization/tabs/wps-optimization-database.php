<div class="wrap wps-wrap">
    <table class="form-table">
        <tbody>
        <tr valign="top">
            <th scope="row" colspan="2"><h3><?php _e( 'Database Setup', 'wp-statistics' ); ?></h3></th>
        </tr>

        <tr valign="top">
            <th scope="row">
                <label for="index-submit"><?php _e( 'Re-run Install:', 'wp-statistics' ); ?></label>
            </th>

            <td>
                <input id="install-submit" class="button button-primary" type="button" value="<?php _e( 'Install Now!', 'wp-statistics' ); ?>" name="install-submit" onclick="location.href=document.URL+'&install=1&tab=database'">
                <p class="description"><?php _e( 'If for some reason your installation of WP Statistics is missing the database tables or other core items, this will re-execute the install process.', 'wp-statistics' ); ?></p>
            </td>
        </tr>

        <tr valign="top">
            <th scope="row" colspan="2"><h3><?php _e( 'Database Index', 'wp-statistics' ); ?></h3></th>
        </tr>

        <tr valign="top">
            <th scope="row">
                <label for="index-submit"><?php _e( 'Countries:', 'wp-statistics' ); ?></label>
            </th>

            <td>
				<?php
				GLOBAL $wpdb, $WP_Statistics;
				$wp_prefix = $wpdb->prefix;

				$dbupdates = $WP_Statistics->get_option( 'pending_db_updates' );

				// Check the number of index's on the visitors table, if it's only 5 we need to check for duplicate entries and remove them
				$result = $wpdb->query(
					"SHOW INDEX FROM {$wp_prefix}statistics_visitor WHERE Key_name = 'date_ip_agent'"
				);

				// Note, the result will be the number of fields contained in the index, so in our case 5.
				if ( $result != 5 ) {
					$dbupdates['date_ip_agent'] = true;
					?>
                    <input id="index-submit" class="button button-primary" type="button" value="<?php _e( 'Update Now!', 'wp-statistics' ); ?>" name="index-submit" onclick="location.href=document.URL+'&index=1&tab=database'">
                    <p class="description"><?php echo __( 'Older installs of WP Statistics allow for duplicate entries in the visitors table in a corner case.', 'wp-statistics' ) . ' ' . __( 'Newer installs protect against this with a unique index on the table.', 'wp-statistics' ) . ' ' . __( 'To create the index on the older installs duplicate entries must be deleted first.', 'wp-statistics' ) . ' ' . __( 'Clicking "Update Now" will scan the vistitors table, delete duplicate entries and add the index.', 'wp-statistics' ); ?></p>
                    <p class="description"><?php _e( 'This operation could take a long time on installs with many rows in the visitors table.', 'wp-statistics' ); ?></p>
					<?php
				} else {
					$dbupdates['date_ip_agent'] = false;
					?>
                    <p class="description"><?php echo __( 'Older installs of WP Statistics allow for duplicate entries in the visitors table in a corner case.', 'wp-statistics' ) . ' ' . __( 'Newer installs protect against this with a unique index on the table.', 'wp-statistics' ); ?></p>
                    <p class="description"><?php _e( 'Congratulations, your installation is already up to date, nothing to do.', 'wp-statistics' ); ?></p>
					<?php
				}
				?>
            </td>
        </tr>

        <tr valign="top">
            <th scope="row">
                <label for="index-submit"><?php _e( 'Visits Table:', 'wp-statistics' ); ?></label>
            </th>
            <td>
				<?php
				GLOBAL $wpdb;
				$wp_prefix = $wpdb->prefix;

				// Check the number of index's on the visits table, if it's only 5 we need to check for duplicate entries and remove them
				$result = $wpdb->query( "SHOW INDEX FROM {$wp_prefix}statistics_visit WHERE Key_name = 'unique_date'" );

				// Note, the result will be the number of fields contained in the index, so in our case 1.
				if ( $result != 1 ) {
					$dbupdates['unique_date'] = true;
					?>
                    <input id="visits-submit" class="button button-primary" type="button" value="<?php _e( 'Update Now!', 'wp-statistics' ); ?>" name="visit-submit" onclick="location.href=document.URL+'&visits=1&tab=database'">
                    <p class="description"><?php echo __( 'Older installs of WP Statistics allow for duplicate entries in the visits table in a corner case.', 'wp-statistics' ) . ' ' . __( 'Newer installs protect against this with a unique index on the table.', 'wp-statistics' ) . ' ' . __( 'To create the index on the older installs duplicate entries must be deleted first.', 'wp-statistics' ) . ' ' . __( 'Clicking "Update Now" will scan the vistits table, delete duplicate entries and add the index.', 'wp-statistics' ); ?></p>
                    <p class="description"><?php _e( 'This operation could take a long time on installs with many rows in the visits table.', 'wp-statistics' ); ?></p>
					<?php
				} else {
					$dbupdates['unique_date'] = false;
					?>
                    <p class="description"><?php echo __( 'Older installs of WP Statistics allow for duplicate entries in the visits table in a corner case.', 'wp-statistics' ) . ' ' . __( 'Newer installs protect against this with a unique index on the table.', 'wp-statistics' ); ?></p>
                    <p class="description"><?php _e( 'Congratulations, your installation is already up to date, nothing to do.', 'wp-statistics' ); ?></p>
					<?php
				}

				$WP_Statistics->update_option( 'pending_db_updates', $dbupdates );
				?>
            </td>

        </tr>

        <tr valign="top">
            <th scope="row" colspan="2"><h3><?php _e( 'Search Table', 'wp-statistics' ); ?></h3></th>
        </tr>

        <tr valign="top">
            <th scope="row">
                <label for="index-submit"><?php _e( 'Convert:', 'wp-statistics' ); ?></label>
            </th>
            <td>
				<?php
				// Note, the result will be the number of fields contained in the index, so in our case 1.
				if ( $WP_Statistics->get_option( 'search_converted' ) != 1 ) {
					?>
                    <input id="visits-submit" class="button button-primary" type="button" value="<?php _e( 'Convert Now!', 'wp-statistics' ); ?>" name="search-submit" onclick="location.href=document.URL+'&search=1&tab=database'">
                    <p class="description"><?php echo __( 'Older installs of WP Statistics store details of searches in the visitors table which can become a performance issue on large datasets.', 'wp-statistics' ) . ' ' . __( 'A new table has been created to hold this information in a more scalable fashion, however the old data must first be converted to the new format before it can be used.', 'wp-statistics' ); ?></p>
                    <p class="description"><?php _e( 'This operation could take a long time on installs with many rows in the visitors table.', 'wp-statistics' ); ?></p>
					<?php
				} else {
					?>
                    <p class="description"><?php echo __( 'Older installs of WP Statistics store details of searches in the visitors table which can become a performance issue on large datasets.', 'wp-statistics' ) . ' ' . __( 'A new table has been created to hold this information in a more scalable fashion.', 'wp-statistics' ); ?></p>
                    <p class="description"><?php _e( 'Congratulations, your installation is already up to date, nothing to do.', 'wp-statistics' ); ?></p>
					<?php
				}
				?>
            </td>

        </tr>

        </tbody>
    </table>
</div>