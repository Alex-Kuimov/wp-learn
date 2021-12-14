<?php
/**
 * Possibilities section template
 *
 * @var $args
 */
?>

<?php if ( $args ) : ?>

<div class="container clearfix">
	<?php foreach ( $args as $key => $post ) : ?>

		<div class="col_one_third <?php echo esc_attr( $this->get_start_class( $key ) ); ?>">

			<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">

				<?php if ( get_field( 'possibilities_icon', $post->ID ) ) : ?>
					<div class="fbox-icon">
						<a href="#"><i class="<?php echo esc_attr( get_field( 'possibilities_icon', $post->ID ) ); ?>"></i></a>
					</div>
				<?php endif; ?>

				<h3><?php echo esc_html( get_the_title( $post->ID ) ); ?></h3>


				<?php if ( get_field( 'possibilities_text', $post->ID ) ) : ?>
					<p><?php echo esc_html( get_field( 'possibilities_text', $post->ID ) ); ?></p>
				<?php endif; ?>

			</div>
		</div>

		<?php if ( $this->get_end_row( $key ) ) : ?>
			<div class="clear"></div>
		<?php endif; ?>

	<?php endforeach; ?>
</div>

<?php endif; ?>
