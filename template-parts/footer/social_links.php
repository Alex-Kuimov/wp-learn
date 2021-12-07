<?php
	/**
	 * Logo template
	 *
	 * @var $fb
	 * @var $tw
	 * @var $gp
     *
	 */
?>

<div class="fright clearfix">
	<?php if ( $args['facebook'] ) : ?>
		<a href="<?php echo esc_url( $args['facebook'] ); ?>" class="social-icon si-small si-borderless si-facebook">
			<i class="icon-facebook"></i>
			<i class="icon-facebook"></i>
		</a>
	<?php endif; ?>

	<?php if ( $args['twitter'] ) : ?>
		<a href="<?php echo esc_url( $args['twitter'] ); ?>" class="social-icon si-small si-borderless si-twitter">
			<i class="icon-twitter"></i>
			<i class="icon-twitter"></i>
		</a>
	<?php endif; ?>

	<?php if ( $args['google'] ) : ?>
		<a href="<?php echo esc_url( $args['google'] ); ?>" class="social-icon si-small si-borderless si-gplus">
			<i class="icon-gplus"></i>
			<i class="icon-gplus"></i>
		</a>
	<?php endif; ?>
</div>
