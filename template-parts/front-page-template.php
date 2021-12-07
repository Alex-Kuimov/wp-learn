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

		<div class="container clearfix">

			<div class="col_one_third">
				<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
					<div class="fbox-icon">
						<a href="#"><i class="icon-line-monitor"></i></a>
					</div>
					<h3>Responsive Layout</h3>
					<p>Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
				</div>
			</div>

			<div class="col_one_third">
				<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="200">
					<div class="fbox-icon">
						<a href="#"><i class="icon-line-eye"></i></a>
					</div>
					<h3>Retina Ready Graphics</h3>
					<p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts &amp; Images.</p>
				</div>
			</div>

			<div class="col_one_third col_last">
				<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="400">
					<div class="fbox-icon">
						<a href="#"><i class="icon-line-star"></i></a>
					</div>
					<h3>Powerful Performance</h3>
					<p>Optimized code that are completely customizable and deliver unmatched fast performance.</p>
				</div>
			</div>

			<div class="clear"></div>

			<div class="col_one_third">
				<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
					<div class="fbox-icon">
						<a href="#"><i class="icon-line-play"></i></a>
					</div>
					<h3>HTML5 Video</h3>
					<p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width Background.</p>
				</div>
			</div>

			<div class="col_one_third">
				<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="800">
					<div class="fbox-icon">
						<a href="#"><i class="icon-params"></i></a>
					</div>
					<h3>Parallax Support</h3>
					<p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
				</div>
			</div>

			<div class="col_one_third col_last">
				<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1000">
					<div class="fbox-icon">
						<a href="#"><i class="icon-line-circle-check"></i></a>
					</div>
					<h3>Endless Possibilities</h3>
					<p>Complete control on each &amp; every element that provides endless customization possibilities.</p>
				</div>
			</div>

			<div class="clear"></div>

			<div class="col_one_third bottommargin-sm">
				<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
					<div class="fbox-icon">
						<a href="#"><i class="icon-bulb"></i></a>
					</div>
					<h3>Light &amp; Dark Color Schemes</h3>
					<p>Change your Website's Primary Scheme instantly by simply adding the dark class to the body.</p>
				</div>
			</div>

			<div class="col_one_third bottommargin-sm">
				<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="800">
					<div class="fbox-icon">
						<a href="#"><i class="icon-heart2"></i></a>
					</div>
					<h3>Boxed &amp; Wide Layouts</h3>
					<p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
				</div>
			</div>

			<div class="col_one_third bottommargin-sm col_last">
				<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1000">
					<div class="fbox-icon">
						<a href="#"><i class="icon-note"></i></a>
					</div>
					<h3>Extensive Documentation</h3>
					<p>We have covered each &amp; everything in our Documentation including Videos &amp; Screenshots.</p>
				</div>
			</div>

			<div class="clear"></div>

		</div>

		<div class="section topmargin nobottommargin nobottomborder">
			<div class="container clearfix">
				<div class="heading-block center nomargin">
					<h3>Our Latest Works</h3>
				</div>
			</div>
		</div>

		<div id="portfolio" class="portfolio portfolio-nomargin grid-container portfolio-notitle portfolio-full grid-container clearfix">

			<article class="portfolio-item pf-media pf-icons">
				<div class="portfolio-image">
					<a href="portfolio-single.html">
						<img src="images/portfolio/4/1.jpg" alt="Open Imagination">
					</a>
					<div class="portfolio-overlay"></div>
				</div>
				<div class="portfolio-desc">
					<h3><a href="portfolio-single.html">Open Imagination</a></h3>
					<span><a href="#">Media</a>, <a href="#">Icons</a></span>
				</div>
			</article>

			<article class="portfolio-item pf-illustrations">
				<div class="portfolio-image">
					<a href="portfolio-single.html">
						<img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
					</a>
					<div class="portfolio-overlay"></div>
				</div>
				<div class="portfolio-desc">
					<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
					<span><a href="#">Illustrations</a></span>
				</div>
			</article>

			<article class="portfolio-item pf-media pf-icons">
				<div class="portfolio-image">
					<a href="portfolio-single.html">
						<img src="images/portfolio/4/3.jpg" alt="Open Imagination">
					</a>
					<div class="portfolio-overlay"></div>
				</div>
				<div class="portfolio-desc">
					<h3><a href="portfolio-single.html">Open Imagination</a></h3>
					<span><a href="#">Media</a>, <a href="#">Icons</a></span>
				</div>
			</article>

			<article class="portfolio-item pf-illustrations">
				<div class="portfolio-image">
					<a href="portfolio-single.html">
						<img src="images/portfolio/4/4.jpg" alt="Locked Steel Gate">
					</a>
					<div class="portfolio-overlay"></div>
				</div>
				<div class="portfolio-desc">
					<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
					<span><a href="#">Illustrations</a></span>
				</div>
			</article>

			<article class="portfolio-item pf-media pf-icons">
				<div class="portfolio-image">
					<a href="portfolio-single.html">
						<img src="images/portfolio/4/5.jpg" alt="Open Imagination">
					</a>
					<div class="portfolio-overlay"></div>
				</div>
				<div class="portfolio-desc">
					<h3><a href="portfolio-single.html">Open Imagination</a></h3>
					<span><a href="#">Media</a>, <a href="#">Icons</a></span>
				</div>
			</article>

			<article class="portfolio-item pf-illustrations">
				<div class="portfolio-image">
					<a href="portfolio-single.html">
						<img src="images/portfolio/4/6.jpg" alt="Locked Steel Gate">
					</a>
					<div class="portfolio-overlay"></div>
				</div>
				<div class="portfolio-desc">
					<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
					<span><a href="#">Illustrations</a></span>
				</div>
			</article>

			<article class="portfolio-item pf-media pf-icons">
				<div class="portfolio-image">
					<a href="portfolio-single.html">
						<img src="images/portfolio/4/7.jpg" alt="Open Imagination">
					</a>
					<div class="portfolio-overlay"></div>
				</div>
				<div class="portfolio-desc">
					<h3><a href="portfolio-single.html">Open Imagination</a></h3>
					<span><a href="#">Media</a>, <a href="#">Icons</a></span>
				</div>
			</article>

			<article class="portfolio-item pf-illustrations">
				<div class="portfolio-image">
					<a href="portfolio-single.html">
						<img src="images/portfolio/4/8.jpg" alt="Locked Steel Gate">
					</a>
					<div class="portfolio-overlay"></div>
				</div>
				<div class="portfolio-desc">
					<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
					<span><a href="#">Illustrations</a></span>
				</div>
			</article>



		</div>

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
