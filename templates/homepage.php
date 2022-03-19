<?php /* Template Name: Homepage */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="homepage">

			<?php $hero = get_field('hero'); ?>
			<section id="hero" style = "background-color: <?php echo $hero['background_color']; ?>">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<?php $logo = $hero['logo']; ?>
							<img class = "d-block mx-auto mb-3" src = "<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
							<?php if(get_field($hero['content'])) : ?>
							<div class="wysiwyg mb-3">
								<?php echo $hero['content']; ?>
							</div><!-- .wysiwyg -->
							<?php endif; ?>
							<a href = "<?php echo $hero['button_link']; ?>">
								<button role = "button" class = "btn white-button"><?php echo $hero["button_text"]; ?></button>
							</a>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #hero -->
			
			<section id="welcome">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php the_field('welcome_description'); ?>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #welcome -->

			<section id="eventsHeader">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php while(have_rows('webinars')) : the_row(); ?>
								<h2 class = "header h3"><?php the_sub_field('header'); ?></h2>
							<?php endwhile; ?>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #eventsHeader -->

			<section id="webinars">
				<div class="container">
					<div class="row">
						<?php while(have_rows('webinars')) : the_row(); ?>
							<?php $i = 1; while(have_rows('webinar_list')) : the_row(); ?>
								<div class="webinar col-xl-6">
									<div class="inner-container d-flex flex-column">
										<h5 class = "date-time mb-1"><?php the_sub_field('date'); ?> - <?php the_sub_field('time'); ?></h5>
										<h5 class = "title mb-3"><?php the_sub_field('title'); ?></h5>
										<?php if (have_rows('presenters')) : ?>
										<div class="presenter-headshots">
											<?php while(have_rows('presenters')) : the_row(); ?>
												<?php $headshot = get_sub_field('presenter_image'); ?>
													<?php if ($headshot) : ?>
													<div class="headshot-small mb-3">
														<img src = "<?php echo $headshot['sizes']['small-headshot']; ?>" alt="<?php echo $headshot['alt']; ?>">
													</div><!-- .headshot-small -->
													<?php endif ?>
											<?php endwhile; ?>
										</div><!-- .presenter-headshots -->
										<?php endif ?>

										<div class="wysiwyg mt-3 mt-sm-0">
											<?php the_sub_field('description'); ?>
										</div><!-- .wysiwyg -->
												
										<?php $sponsor = get_sub_field('sponsorship_logo'); ?>
										<?php if ($sponsor) : ?>
										<div class = "sponsorship-logo d-flex align-items-center mb-3">
											<h5 class = "mb-2">Sponsored By:</h5>
											<img src = "<?php echo $sponsor['sizes']['company-logo']; ?>" alt="<?php echo $sponsor['alt']; ?>">	
										</div><!-- .sponsorship-logo -->
										<?php endif ?>
										<div class="mt-auto">
											<a href = "<?php the_sub_field('register_link'); ?>">
													<button role = "button" class = "btn black-button mb-3">Register Now</button>
											</a>
											<a href = "#<?php echo 'presenter' . $i; ?>">
												<button role = "button" class = "btn black-button">Speaker Info</button>
											</a>	
										</div><!-- .mt-auto -->
									</div><!-- .inner-container -->
								</div><!-- .col-xl-6 -->
							<?php $i++; endwhile; ?>
						<?php endwhile; ?>
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #webinars -->

			<section id="presentersHeader">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class = "header h3">Speaker Information</h2>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #presentersHeader -->

			<section id="presenters">
				<div class="container">
					<?php while(have_rows('webinars')) : the_row(); ?>
						<?php $i = 1; while(have_rows('webinar_list')) : the_row(); ?>
							<div id = "<?php echo 'presenter' . $i; ?>" class="row">
								<div class="col-sm-12">
									<h5 class = "date fw-bold mb-3 mb-md-0"><?php the_sub_field('date'); ?></h5>
								</div><!-- .col-sm-12 -->
								<div class="presenter col-md-10">
									<div class="inner-container">
										<div class="initial-info">
										<?php $count = count(get_sub_field('presenters')); ?>
										<?php $p = 1; while(have_rows('presenters')) : the_row(); ?>
											<div class="row<?php if ($p != $count) {echo ' mb-3';} ?>">
												<div class="row-wrapper col-sm-12">
													<div class="left">
														<h3 class = "name"><?php the_sub_field('presenter'); ?></h3>
														<h5 class = "title"><?php the_sub_field('job_title'); ?></h5>
														<h6 class = "company"><?php the_sub_field('company'); ?></h6>
													</div><!-- .left -->
													<div class="right">
														<?php $company = get_sub_field('company_logo'); ?>
														<div class = "company-logo">
															<img src = "<?php echo $company['sizes']['company-logo']; ?>" alt="<?php echo $company['alt']; ?>">	
														</div>
													</div><!-- .right -->
												</div><!-- .col-sm-12 -->
											</div><!-- .row -->
										<?php $p++; endwhile; ?>
										</div><!-- .initial-info -->
										<div class="bio">
											<?php $b = 1; while(have_rows('presenters')) : the_row(); ?>
											<div class="row<?php if ($b != $count) {echo ' mb-3';} ?>">
												<div class="row-wrapper col-sm-12">
													<?php $headshot = get_sub_field('presenter_image'); ?>
													<?php if ($headshot) : ?>
													<div class="left">
														<img src = "<?php echo $headshot['sizes']['headshot']; ?>" alt="<?php echo $headshot['alt']; ?>">
													</div><!-- .left -->
													<?php endif ?>
													<div class = "right">
														<h3 class="presenter-name mb-1"><?php the_sub_field('presenter'); ?></h3>
														<?php $bio = get_sub_field('presenter_bio'); ?>
														<?php if ($bio) { ?>
															<div class="wysiwyg">
																<?php echo $bio; ?>
															</div><!-- .wysiwyg -->
														<?php } else { ?>
															<div class="title">
																<?php the_sub_field('job_title'); ?>
															</div><!-- .title -->
														<?php } ?>
													</div><!-- .right -->
												</div><!-- .col-sm-12 -->
											</div><!-- .row -->
										<?php $b++; endwhile; ?>
										</div><!-- .bio -->
										<a class = "d-inline-block d-lg-none show-bio mt-2" href="#">View Bios</a>
									</div><!-- .inner-container -->
								</div><!-- .col-md-10 -->
							</div><!-- .row -->
						<?php $i++; endwhile; ?>
					<?php endwhile; ?>
				</div><!-- .container -->
			</section><!-- #presenters -->

		</div><!-- #homepage -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>