<?php
	/**
	 * Section TEAM
	 *
	 * @var $args;
	 */
?>
<?php if($args): ?>
<div class="section">
	<div class="container clearfix">
		
		<?php if ($args['team_title']): ?>
			<div class="heading-block topmargin-sm center">
				<h3><?php echo esc_html( $args['team_title'] );?></h3>
			</div>
		<?php endif; ?>
		
		<?php if ($args['posts']): ?>
		<div class="row">
			<?php foreach ($args['posts'] as $item):?>
			<div class="col-lg-3 col-md-6 bottommargin">
				
				<div class="team">
					<?php if ($item['image']): ?>
					<div class="team-image">
						<img src="<?php echo esc_attr($item['image']);?>" alt="<?php echo esc_attr($item['name']);?>">
					</div>
					<?php endif; ?>
					<div class="team-desc team-desc-bg">
						<div class="team-title">
							<h4><?php echo esc_html($item['name']);?></h4>
							<?php if ($item['posititon']): ?>
								<span><?php echo esc_html($item['posititon']);?></span>
							<?php endif; ?>
						</div>
					</div>
				</div>
			
			</div>
			<?php endforeach; ?>
			
		
		</div>
		<?php endif; ?>
	
	</div>
</div>
<?php endif; ?>
