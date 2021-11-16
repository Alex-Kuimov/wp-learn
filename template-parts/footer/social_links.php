<?php
	/**
	 * Logo template
	 * @var $fb
	 * @var $tw
	 * @var $gp
	 */
?>

<div class="fright clearfix">
	<?php if($fb):?>
		<a href="<? echo esc_url($fb); ?>" class="social-icon si-small si-borderless si-facebook">
			<i class="icon-facebook"></i>
			<i class="icon-facebook"></i>
		</a>
	<? endif; ?>
	
	<?php if($tw):?>
		<a href="<? echo esc_url($tw); ?>" class="social-icon si-small si-borderless si-twitter">
			<i class="icon-twitter"></i>
			<i class="icon-twitter"></i>
		</a>
	<? endif; ?>
	
	<?php if($gp):?>
		<a href="<? echo esc_url($gp); ?>" class="social-icon si-small si-borderless si-gplus">
			<i class="icon-gplus"></i>
			<i class="icon-gplus"></i>
		</a>
	<? endif; ?>
</div>