<?php
	/**
	 * Menu template footer
	 *
	 * @var $menu_list
     *
	 */
?>

<div class="copyright-links">
	
	<?php if ( ! empty( $args ) ) : ?>
		<?php foreach ( $args as $key => $item ) : ?>
			<?php
			if ( $key > 0 ) {
				echo esc_html( '/' );
			}
			?>
            <a href="<?php echo esc_url( $item['url'] ); ?>" class="<?php echo esc_attr( $item['class'] ); ?>">
                <?php echo esc_html( $item['title'] ); ?>
            </a>
		<?php endforeach; ?>
	<?php endif; ?>
 
</div>
