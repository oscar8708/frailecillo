<?php
/**
 * Lost password form
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<?php wc_print_notices(); ?>

<div class="lobo-tabs">

	<div class="contents clearfix">

		<form method="post" class="lost_reset_password">

			<?php if( 'lost_password' == $args['form'] ) : ?>

				<h3 class="wcp-title"><?php _e( 'Lost Password', 'lobo' ); ?></h3>

		        <p class="wcp-subtitle"><?php echo apply_filters( 'woocommerce_lost_password_message', __( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'lobo' ) ); ?></p>

		        <div class="p-form clearfix">

		        	<p class="form-row form-row-wide"><label for="user_login"><?php _e( 'Username or email', 'lobo' ); ?></label> <input class="input-text" type="text" name="user_login" id="user_login" /></p>

		        </div>

			<?php else : ?>

				<h3 class="wcp-title"><?php _e( 'Reset Password', 'lobo' ); ?></h3>

		        <p class="wcp-subtitle"><?php echo apply_filters( 'woocommerce_reset_password_message', __( 'Enter a new password below.', 'lobo') ); ?></p>

		        <div class="p-form clearfix">

			        <p class="form-row form-row-first">
			            <label for="password_1"><?php _e( 'New password', 'lobo' ); ?> <span class="required">*</span></label>
			            <input type="password" class="input-text" name="password_1" id="password_1" />
			        </p>
			        <p class="form-row form-row-last">
			            <label for="password_2"><?php _e( 'Re-enter new password', 'lobo' ); ?> <span class="required">*</span></label>
			            <input type="password" class="input-text" name="password_2" id="password_2" />
			        </p>

			        <input type="hidden" name="reset_key" value="<?php echo isset( $args['key'] ) ? $args['key'] : ''; ?>" />
			        <input type="hidden" name="reset_login" value="<?php echo isset( $args['login'] ) ? $args['login'] : ''; ?>" />

			    </div>

		    <?php endif; ?>

		    <div class="clear"></div>

		    <p class="form-row"><input type="submit" class="button" name="wc_reset_password" value="<?php echo 'lost_password' == $args['form'] ? __( 'Reset Password', 'lobo' ) : __( 'Save', 'lobo' ); ?>" /></p>
			<?php wp_nonce_field( $args['form'] ); ?>

		</form>

	</div>

</div>