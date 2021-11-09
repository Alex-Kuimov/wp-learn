<?php
/**
 * Logo template
 * @var $logo01
 * @var $logo02
 */
?>
<div id="logo">
	<a href="<?php echo esc_url( get_home_url() ); ?>" class="standard-logo" data-dark-logo="<?php echo esc_url( $logo02 ); ?>"><img src="<?php echo esc_url( $logo01 ); ?>" alt="Logo"></a>
	<a href="<?php echo esc_url( get_home_url() ); ?>" class="retina-logo" data-dark-logo="<?php echo esc_url( $logo02 ); ?>"><img src="<?php echo esc_url( $logo01 ); ?>" alt="Logo"></a>
</div>