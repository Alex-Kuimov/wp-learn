<?php
/**
 * About template
 *
 * @var $args
 */
?>

<div class="container clearfix">
	<div class="row clearfix">

		<div class="col-xl-5">
			<div class="heading-block topmargin">
				<h1><?php echo esc_html( $args['title'] ); ?></h1>
			</div>
			<p class="lead"><?php echo esc_html( $args['text'] ); ?></p>
		</div>

		<div class="col-xl-7">
			<div class="ohidden" data-height-xl="426" data-height-lg="567" data-height-md="470" data-height-md="287" data-height-xs="183">
				<?php if ( ! empty( $args['image'] ) ) : ?>
					<img src="<?php echo esc_url( $args['image'] ); ?>" alt="About">
				<?php endif; ?>
			</div>
		</div>

	</div>
</div>
