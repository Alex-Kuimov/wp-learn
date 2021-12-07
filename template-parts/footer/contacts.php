<?php
	/**
	 * Contacts template
	 *
	 * @var $email
	 * @var $phone
     *
	 */
?>

<?php if ( $args['email'] ) : ?>
	<i class="icon-envelope2"></i> <?php echo esc_html( $args['email'] ); ?>
<?php endif; ?>

<span class="middot">&middot;</span>

<?php if ( $args['phone'] ) : ?>
	<i class="icon-headphones"></i> <?php echo esc_html( $args['phone'] ); ?>
<?php endif; ?>
