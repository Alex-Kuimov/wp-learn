<?php
	/**
	 * Menu template footer
	 * @var $menu_list
	 */
?>

<div class="copyright-links">
	<?php if ( ! empty( $menu_list ) ) : ?>
        <?php
		$key = 0;
        ?>
		<?php foreach ( $menu_list as $item ) : ?>
            <?php if ($key > 0){
               echo esc_html( '/' );
            }?>
            <a href="<?php echo esc_url( $item['url'] ); ?>" class="<?php echo esc_attr( $item['class'] ); ?>">
                <?php echo esc_html( $item['title'] ); ?>
            </a>
            <?php
            $key++;
            ?>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
