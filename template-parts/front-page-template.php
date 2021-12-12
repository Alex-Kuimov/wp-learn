<?php
/*
Template Name: Front Page
 */

get_header();
?>

<section id="content">

	<div class="content-wrap">

		<?php echo site\Front_Page::instance()->get_section_about(); ?>

		<?php echo site\Front_Page::instance()->get_section_2(); ?>

		<?php echo site\Front_Page::instance()->get_section_possibilities(); ?>
        
        <?php echo site\Front_Page::instance()->get_section_our_works(); ?>

		<div class="section notopmargin notopborder">
			<div class="container clearfix">
				<div class="heading-block center nomargin">
					<h3>Latest from the Blog</h3>
				</div>
			</div>
		</div>

		<div class="container clear-bottommargin clearfix">
			<div class="row">

				<div class="col-lg-3 col-md-6 bottommargin">
					<div class="ipost clearfix">
						<div class="entry-image">
							<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
						</div>
						<div class="entry-title">
							<h3><a href="blog-single.html">Bloomberg smart cities; change-makers economic security</a></h3>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 13th Jun 2014</li>
							<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li>
						</ul>
						<div class="entry-content">
							<p>Prevention effect, advocate dialogue rural development lifting people up community civil society. Catalyst, grantees leverage.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 bottommargin">
					<div class="ipost clearfix">
						<div class="entry-image">
							<a href="#"><img class="image_fade" src="images/magazine/thumb/2.jpg" alt="Image"></a>
						</div>
						<div class="entry-title">
							<h3><a href="blog-single.html">Medicine new approaches communities, outcomes partnership</a></h3>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 24th Feb 2014</li>
							<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 17</a></li>
						</ul>
						<div class="entry-content">
							<p>Cross-agency coordination clean water rural, promising development turmoil inclusive education transformative community.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 bottommargin">
					<div class="ipost clearfix">
						<div class="entry-image">
							<a href="#"><img class="image_fade" src="images/magazine/thumb/3.jpg" alt="Image"></a>
						</div>
						<div class="entry-title">
							<h3><a href="blog-single.html">Significant altruism planned giving insurmountable challenges liberal</a></h3>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 30th Dec 2014</li>
							<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
						</ul>
						<div class="entry-content">
							<p>Micro-finance; vaccines peaceful contribution citizens of change generosity. Measures design thinking accelerate progress medical initiative.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 bottommargin">
					<div class="ipost clearfix">
						<div class="entry-image">
							<a href="#"><img class="image_fade" src="images/magazine/thumb/4.jpg" alt="Image"></a>
						</div>
						<div class="entry-title">
							<h3><a href="blog-single.html">Compassion conflict resolution, progressive; tackle</a></h3>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 15th Jan 2014</li>
							<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 54</a></li>
						</ul>
						<div class="entry-content">
							<p>Community health workers best practices, effectiveness meaningful work The Elders fairness. Our ambitions local solutions globalization.</p>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="section">
			<div class="container clearfix">

				<div class="heading-block topmargin-sm center">
					<h3>Meet Our Team</h3>
				</div>

				<div class="row">

					<div class="col-lg-3 col-md-6 bottommargin">

						<div class="team">
							<div class="team-image">
								<img src="images/team/3.jpg" alt="John Doe">
							</div>
							<div class="team-desc team-desc-bg">
								<div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
							</div>
						</div>

					</div>

					<div class="col-lg-3 col-md-6 bottommargin">

						<div class="team">
							<div class="team-image">
								<img src="images/team/2.jpg" alt="Josh Clark">
							</div>
							<div class="team-desc team-desc-bg">
								<div class="team-title"><h4>Josh Clark</h4><span>Co-Founder</span></div>
							</div>
						</div>

					</div>

					<div class="col-lg-3 col-md-6 bottommargin">

						<div class="team">
							<div class="team-image">
								<img src="images/team/8.jpg" alt="Mary Jane">
							</div>
							<div class="team-desc team-desc-bg">
								<div class="team-title"><h4>Mary Jane</h4><span>Sales</span></div>
							</div>
						</div>

					</div>

					<div class="col-lg-3 col-md-6 bottommargin">

						<div class="team">
							<div class="team-image">
								<img src="images/team/4.jpg" alt="Nix Maxwell">
							</div>
							<div class="team-desc team-desc-bg">
								<div class="team-title"><h4>Nix Maxwell</h4><span>Support</span></div>
							</div>
						</div>

					</div>

				</div>

			</div>
		</div>

		<div class="container clearfix">

			<div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

				<div class="oc-item"><a href="#"><img src="images/clients/1.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/2.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/3.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/4.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/5.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/6.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/7.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/8.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/9.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/10.png" alt="Clients"></a></div>

			</div>


		</div>

	</div>

</section><!-- #content end -->

<?php get_footer();
