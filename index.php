<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SR_Restaurant
 */

get_header(); ?>

<section class="rd-parallax main-slider" data-type="anchor" id="features">
		<div class="rd-parallax-layer text-center" data-speed="0" data-type="html">
			<div class="forcefullwidth_wrapper_tp_banner" style="position:relative;width:100%;height:auto;margin-top:0px;margin-bottom:0px">
				<div class="tp-banner-container" style="left: 0px; position: absolute; width: 1663px; overflow: visible;">
					<div class="tp-banner revslider-initialised tp-simpleresponsive hovered" id="revslider-222" style="max-height: 680px; background-color: rgba(0, 0, 0, 0); background-image: none; height: 680px;">
						<ul class="tp-revslider-mainul" style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">
							<li class="tp-revslider-slidesli active-revslide" data-masterspeed="1000" data-saveperformance="off" data-slotamount="1" data-thumb="<?php echo get_template_directory_uri().'/assets/images/1.jpg'; ?>" data-title="Awesome Title Here" data-transition="fade" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
								<div class="slotholder" data-bgfit="cover" data-bgfitend="undefined" data-bgposition="center top" data-bgpositionend="undefined" data-duration="undefined" data-ease="undefined" data-easeme="undefined" data-kenburns="undefined" data-oheight="undefined" data-owidth="undefined" data-rotationend="undefined" data-rotationstart="undefined" data-zoomend="undefined" data-zoomstart="undefined" style="width:100%;height:100%;">
									<div class="tp-bgimg defaultimg" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazydone="undefined" data-lazyload="undefined" data-src="<?php echo get_template_directory_uri().'/assets/images/1.jpg'; ?>" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;<?php echo get_template_directory_uri().'/assets/images/1.jpg'; ?>&quot;); background-size: cover; background-position: center top; width: 100%; height: 100%; opacity: 1; visibility: inherit;"></div>
									<div class="tp-dottedoverlay yes"></div>
								</div>
								<div class="tp-caption sft sfb tp-resizeme start" data-easing="easeOutExpo" data-elementdelay="0.01" data-endeasing="Power4.easeIn" data-endelementdelay="0.3" data-endspeed="1200" data-hoffset="15" data-speed="1500" data-splitin="none" data-splitout="none" data-start="500" data-voffset="-30" data-x="left" data-y="center" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 23px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px; left: 246.5px; top: 144.5px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00166, 0, -50, 0, 1);">
									<div class="content-box" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 23px; border-width: 0px; margin: 0px; padding: 50px; letter-spacing: 0px; font-size: 13px; max-width: 450px;">
										<h2 style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 50px; border-width: 0px; margin: 0px 0px 15px; padding: 0px; letter-spacing: 0px; font-size: 36px;">Good food and great<br style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 50px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 36px;">
										<span class="theme_color" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 50px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 36px;">service with each visit</span></h2>
										<div class="text" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 25px; border-width: 0px; margin: 0px 0px 20px; padding: 0px; letter-spacing: 0px; font-size: 14px;">
											Responsive Multi-purpose HTML Template<br style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 25px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 14px;">
											Good Food is Good Mood
										</div>
										<div class="btn-box" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 23px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px;">
											<a class="theme-btn btn-style-one" href="#" style="transition: all 0.2s ease-out 0s; min-height: 0px; min-width: 0px; line-height: 24px; border-width: 2px; margin: 0px; padding: 9px 25px; letter-spacing: 0px; font-size: 13px;">Learn More <span class="fa fa-long-arrow-right" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 24px; border-width: 0px; margin: 0px; padding: 0px 0px 0px 7px; letter-spacing: 0px; font-size: 12px;"></span></a>
										</div>
									</div>
								</div>
							</li>
							<li class="tp-revslider-slidesli active-revslide current-sr-slide-visible" data-masterspeed="1000" data-saveperformance="off" data-slotamount="1" data-thumb="<?php echo get_template_directory_uri().'/assets/images/2.jpg'; ?>" data-title="Awesome Title Here" data-transition="fade" style="width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1;">
								<div class="slotholder" data-bgfit="cover" data-bgfitend="undefined" data-bgposition="center top" data-bgpositionend="undefined" data-duration="undefined" data-ease="undefined" data-easeme="undefined" data-kenburns="undefined" data-oheight="undefined" data-owidth="undefined" data-rotationend="undefined" data-rotationstart="undefined" data-zoomend="undefined" data-zoomstart="undefined" style="width:100%;height:100%;">
									<div class="tp-bgimg defaultimg" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazydone="undefined" data-lazyload="undefined" data-src="<?php echo get_template_directory_uri().'/assets/images/2.jpg'; ?>" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;<?php echo get_template_directory_uri().'/assets/images/2.jpg'; ?>&quot;); background-size: cover; background-position: center top; width: 100%; height: 100%; opacity: 1; visibility: inherit;"></div>
									<div class="tp-dottedoverlay yes"></div>
								</div>
								<div class="tp-caption sfl sfb tp-resizeme start" data-easing="easeOutExpo" data-elementdelay="0.01" data-endeasing="Power4.easeIn" data-endelementdelay="0.3" data-endspeed="1200" data-hoffset="15" data-speed="1500" data-splitin="none" data-splitout="none" data-start="500" data-voffset="-30" data-x="left" data-y="center" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 23px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px; left: 246.5px; top: 144.5px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">
									<div class="content-box" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 23px; border-width: 0px; margin: 0px; padding: 50px; letter-spacing: 0px; font-size: 13px; max-width: 450px;">
										<h2 style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 50px; border-width: 0px; margin: 0px 0px 15px; padding: 0px; letter-spacing: 0px; font-size: 36px;">Good food and great<br style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 50px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 36px;">
										<span class="theme_color" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 50px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 36px;">service with each visit</span></h2>
										<div class="text" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 25px; border-width: 0px; margin: 0px 0px 20px; padding: 0px; letter-spacing: 0px; font-size: 14px;">
											Responsive Multi-purpose HTML Template<br style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 25px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 14px;">
											Good Food is Good Mood
										</div>
										<div class="btn-box" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 23px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px;">
											<a class="theme-btn btn-style-one" href="#" style="transition: all 0.2s ease-out 0s; min-height: 0px; min-width: 0px; line-height: 24px; border-width: 2px; margin: 0px; padding: 9px 25px; letter-spacing: 0px; font-size: 13px;">Learn More <span class="fa fa-long-arrow-right" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 24px; border-width: 0px; margin: 0px; padding: 0px 0px 0px 7px; letter-spacing: 0px; font-size: 12px;"></span></a>
										</div>
									</div>
								</div>
							</li>
							<li class="tp-revslider-slidesli active-revslide" data-masterspeed="1000" data-saveperformance="off" data-slotamount="1" data-thumb="<?php echo get_template_directory_uri().'/assets/images/3.jpg'; ?>" data-title="Awesome Title Here" data-transition="fade" style="width: 100%; height: 100%; overflow: hidden; visibility: hidden; opacity: 0; z-index: 18;">
								<div class="slotholder" data-bgfit="cover" data-bgfitend="undefined" data-bgposition="center top" data-bgpositionend="undefined" data-duration="undefined" data-ease="undefined" data-easeme="undefined" data-kenburns="undefined" data-oheight="undefined" data-owidth="undefined" data-rotationend="undefined" data-rotationstart="undefined" data-zoomend="undefined" data-zoomstart="undefined" style="width:100%;height:100%;">
									<div class="tp-bgimg defaultimg" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazydone="undefined" data-lazyload="undefined" data-src="<?php echo get_template_directory_uri().'/assets/images/3.jpg'; ?>" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;<?php echo get_template_directory_uri().'/assets/images/3.jpg'; ?>&quot;); background-size: cover; background-position: center top; width: 100%; height: 100%; opacity: 1; visibility: inherit;"></div>
									<div class="tp-dottedoverlay yes"></div>
								</div>
								<div class="tp-caption sfr sfb tp-resizeme start" data-easing="easeOutExpo" data-elementdelay="0.01" data-endeasing="Power4.easeIn" data-endelementdelay="0.3" data-endspeed="1200" data-hoffset="15" data-speed="1500" data-splitin="none" data-splitout="none" data-start="500" data-voffset="-30" data-x="left" data-y="center" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 23px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px; left: 246.5px; top: 144.5px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00166, 50, 0, 0, 1);">
									<div class="content-box" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 23px; border-width: 0px; margin: 0px; padding: 50px; letter-spacing: 0px; font-size: 13px; max-width: 450px;">
										<h2 style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 50px; border-width: 0px; margin: 0px 0px 15px; padding: 0px; letter-spacing: 0px; font-size: 36px;">Good food and great<br style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 50px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 36px;">
										<span class="theme_color" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 50px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 36px;">service with each visit</span></h2>
										<div class="text" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 25px; border-width: 0px; margin: 0px 0px 20px; padding: 0px; letter-spacing: 0px; font-size: 14px;">
											Responsive Multi-purpose HTML Template<br style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 25px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 14px;">
											Good Food is Good Mood
										</div>
										<div class="btn-box" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 23px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px;">
											<a class="theme-btn btn-style-one" href="#" style="transition: all 0.2s ease-out 0s; min-height: 0px; min-width: 0px; line-height: 24px; border-width: 2px; margin: 0px; padding: 9px 25px; letter-spacing: 0px; font-size: 13px;">Learn More <span class="fa fa-long-arrow-right" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 24px; border-width: 0px; margin: 0px; padding: 0px 0px 0px 7px; letter-spacing: 0px; font-size: 12px;"></span></a>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<div class="tp-bannertimer" style="width: 70.21%; visibility: visible; transform: translate3d(0px, 0px, 0px);"></div>
						<div class="tp-loader spinner4" style="display: none;">
							<div class="dot1"></div>
							<div class="dot2"></div>
							<div class="bounce1"></div>
							<div class="bounce2"></div>
							<div class="bounce3"></div>
						</div>
					</div>
					<div class="tp-bullets simplebullets preview3" style="bottom: 40px; left: 50%; margin-left: -48px;">
						<div class="bullet first"></div>
						<div class="bullet selected"></div>
						<div class="bullet last"></div>
						<div class="tpclear"></div>
					</div>
					<div class="tp-leftarrow tparrows default preview3" style="position: absolute; top: 340px; margin-top: -35px; left: 0px;">
						<div class="tp-arr-allwrapper">
							<div class="tp-arr-iwrapper">
								<div class="tp-arr-imgholder" style="visibility: inherit; opacity: 1; background-image: url(&quot;<?php echo get_template_directory_uri().'/assets/images/1.jpg'; ?>&quot;);"></div>
								<div class="tp-arr-imgholder2"></div>
								<div class="tp-arr-titleholder">
									Awesome Title Here
								</div>
								<div class="tp-arr-subtitleholder"></div>
							</div>
						</div>
					</div>
					<div class="tp-rightarrow tparrows default preview3" style="position: absolute; top: 340px; margin-top: -35px; right: 0px;">
						<div class="tp-arr-allwrapper">
							<div class="tp-arr-iwrapper">
								<div class="tp-arr-imgholder" style="visibility: inherit; opacity: 1; background-image: url(&quot;<?php echo get_template_directory_uri().'/assets/images/3.jpg'; ?>&quot;);"></div>
								<div class="tp-arr-imgholder2"></div>
								<div class="tp-arr-titleholder">
									Awesome Title Here
								</div>
								<div class="tp-arr-subtitleholder"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="tp-fullwidth-forcer" style="width:100%;height:680px"></div>
			</div>
		</div>
	</section>


<section class="content" id="content">
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="row">
					<div class="col-sm-6">
						<div class="welcome-about">
							<h2 class="title">About Fida Restaurant</h2>
							<div class="excerpt">
								Vestibulum quis elit eget neque porttitor no amet dolor. Proin pretiumss.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor no amet dolor. Proin pretium purus a lorem ornare.
								Sed lobortis pulvinar. Integer laoreet mi id eros porta euismod. Suspendisse potenti. Nulla eros dost mauris, convallis et sem tempus, viverra hendrerit sapien Lorem amet, consectetur adipiscing elit. Donec aliquet dolor libero,
							</div>
							<div class="read-more"><a href="#">Read More</a></div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="media">	
							<div class="media-image">
								<img src="http://wphash.com/wp/resta/wp-content/uploads/2017/03/home-about.jpg">
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>
</section>

<section id="popular-dishes"  class="well-sm text-center" data-type="anchor">
    <div class="container section-title">
        <h5 class="heading">Our Popular Dishes</h5>


        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
           et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
           aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
    </div>
    <div class="container">
		<div class="row slick-slider-auto">		
				
				<div class="col-sm-4">
					<div class="single-disesh">
						<div class="disesh-img">
							<img src="http://wphash.com/wp/resta/wp-content/uploads/2017/03/3-1.png">
						</div>
						<div class="disesh-desc pt-50">
							<h3>Dish Name Here 01</h3>
							<p class="price">$350</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="single-disesh">
						<div class="disesh-img">
							<img src="http://wphash.com/wp/resta/wp-content/uploads/2017/03/3-1.png">
						</div>
						<div class="disesh-desc pt-50">
							<h3>Dish Name Here 01</h3>
							<p class="price">$350</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="single-disesh">
						<div class="disesh-img">
							<img src="http://wphash.com/wp/resta/wp-content/uploads/2017/03/3-1.png">
						</div>
						<div class="disesh-desc pt-50">
							<h3>Dish Name Here 01</h3>
							<p class="price">$350</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="single-disesh">
						<div class="disesh-img">
							<img src="http://wphash.com/wp/resta/wp-content/uploads/2017/03/3-1.png">
						</div>
						<div class="disesh-desc pt-50">
							<h3>Dish Name Here 01</h3>
							<p class="price">$350</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="single-disesh">
						<div class="disesh-img">
							<img src="http://wphash.com/wp/resta/wp-content/uploads/2017/03/3-1.png">
						</div>
						<div class="disesh-desc pt-50">
							<h3>Dish Name Here 01</h3>
							<p class="price">$350</p>
						</div>
					</div>
				</div>

		</div>
	</div>
</section>


			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</section>

<?php get_footer(); ?>

