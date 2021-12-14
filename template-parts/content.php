<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package learn
 */

?>


<div class="entry clearfix">
	<div class="entry-image">
		<img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Standard Post with Image">
	</div>
	<div class="entry-title">
		<h2><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
	</div>
	<ul class="entry-meta clearfix">
		<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
	</ul>
	<div class="entry-content">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
		<a href="blog-single.html"class="more-link">Read More</a>
	</div>
</div>
