<?php
/**
 * Menu template
 * @var $menu_list
 */
?>

<ul>
	<?php if ( ! empty( $menu_list ) ) : ?>
		<?php foreach ( $menu_list as $item ) : ?>
			<li><a href="<?php echo esc_url( $item['url'] ); ?>" class="<?php echo esc_attr( $item['class'] ); ?>"><div><?php echo esc_html( $item['title'] ); ?></div></a></li>
		<?php endforeach; ?>
	<?php endif; ?>
</ul>
