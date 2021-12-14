<?php
/**
 * Possibilities section template
 *
 * @var $args
 */
?>

<?php if ( $args ) : ?>

<div class="container clearfix">
	<?php foreach ( $args as $item ) : ?>
		<div class="col_one_third <?php echo esc_attr( $item['row_end'] ); ?>">
			<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">

				<?php if ( $item['icon'] ) : ?>
					<div class="fbox-icon">
						<a href="#"><i class="<?php echo esc_attr( $item['icon'] ); ?>"></i></a>
					</div>
				<?php endif; ?>

				<?php if ( $item['title'] ) : ?>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
				<?php endif; ?>

				<?php if ( $item['text'] ) : ?>
					<p><?php echo esc_html( $item['text'] ); ?></p>
				<?php endif; ?>

			</div>
		</div>
		
		<?php if ( $item['clear'] ) : ?>
			<div class="clear"></div>
		<?php endif; ?>
	<?php endforeach; ?>
</div>

<?php endif; ?>
