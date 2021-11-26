<?php
	/**
	 * Contacts template
	 *
	 * @var $email
	 * @var $phone
     *
	 */
?>

<?php if ( $email ) : ?>
	<i class="icon-envelope2"></i> <?php echo esc_html( $email ); ?>
<?php endif; ?>

<span class="middot">&middot;</span>

<?php if ( $phone ) : ?>
	<i class="icon-headphones"></i> <?php echo esc_html( $phone ); ?>
<?php endif; ?>
