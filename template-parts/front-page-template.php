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
		
		<?php echo site\Front_Page::instance()->get_section_blog_title(); ?>

		

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
