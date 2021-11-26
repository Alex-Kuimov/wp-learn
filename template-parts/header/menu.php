<?php
/**
 * Menu template
 * @var $args
 */
?>

<ul>
	<?php if ( ! empty( $args ) ) : ?>
		<?php foreach ( $args as $item ) : ?>
			<li><a href="<?php echo esc_url( $item['url'] ); ?>" class="<?php echo esc_attr( $item['class'] ); ?>"><div><?php echo esc_html( $item['title'] ); ?></div></a></li>
		<?php endforeach; ?>
	<?php endif; ?>
</ul>
