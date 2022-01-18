
<div class="entry clearfix">
	<div class="entry-image">
        <?php echo get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'image_fade') ); ?>
	</div>
	<div class="entry-title">
		<h2><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
	</div>
	<ul class="entry-meta clearfix">
		<li><i class="icon-calendar3"></i> <?php echo esc_html( get_the_date( 'j F Y' ) )?></li>
	</ul>
	<div class="entry-content">
		<p><?php the_excerpt(); ?></p>
		<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="more-link">Read More</a>
	</div>
</div>







<?php
/*
<?php $the_query = new WP_Query('cat=8&showposts=40'); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<li>
<!-- миниатюра записи -->
<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail'); ?></a>

<!-- заголовок записи -->
<h2><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h2>

<!-- количество слов в анонсе (необязательно) -->
<?php $content = get_the_content(); echo wp_trim_words( $content , '10' ); ?>

</li>
<?php endwhile; ?>
<!-- функция для правильной работы условных тегов -->
<?php wp_reset_query(); ?>
*/?>


