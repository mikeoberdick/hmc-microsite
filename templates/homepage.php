<?php /* Template Name: Homepage */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="homepage">

			<?php $hero = get_field('hero'); $bg = $hero['background_image']; ?>
			<section id="hero" style = "background: url('<?php echo $bg['url']; ?>');">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php $logo = $hero['logo']; ?>
							<img class = "mb-3" src = "<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
							<div class="wysiwyg mb-3">
								<?php echo $hero['content']; ?>
							</div><!-- .wysiwyg -->
							<a href = "<?php echo $hero['button_link']; ?>">
								<button role = "button" class = "btn"><?php echo $hero["button_text"]; ?></button>
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
								<div class="webinar col-md-6">
									<div class="inner-container">
										<h5 class = "title mb-3"><?php the_sub_field('title'); ?></h5>
										<div class="row">
											<div class="col-sm-4">
												<h5 class = "date-time mb-3"><?php the_sub_field('date'); ?> - <?php the_sub_field('time'); ?></h5>
												<a href = "<?php the_sub_field('register_link'); ?>">
													<button role = "button" class = "btn mb-3">Register Now</button>
												</a>
												<a href = "#<?php echo 'presenter' . $i; ?>">
													<button role = "button" class = "btn">Speaker Info</button>
												</a>
											</div><!-- .col-sm-4 -->
											<div class="col-sm-8">
												<div class="wysiwyg">
													<?php the_sub_field('description'); ?>
												</div><!-- .wysiwyg -->
											</div><!-- .col-sm-8 -->
										</div><!-- .row -->
									</div><!-- .inner-container -->
								</div><!-- .col-md-6 -->
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
								<div class="date col-md-2">
									<h5 class = "date fw-bold"><?php the_sub_field('date'); ?></h5>
								</div><!-- .col-md-2 -->
								<div class="presenter col-md-10">
									<div class="inner-container">
										<div class="initial-info">
											<div class="left">
												<h3 class = "name"><?php the_sub_field('presenter'); ?></h3>
												<h5 class = "title"><?php the_sub_field('job_title'); ?></h5>
												<h5 class = "company"><?php the_sub_field('company'); ?></h5>
											</div><!-- .left -->
											<div class="right">
												<?php $company = get_sub_field('company_logo'); ?>
												<div class = "company-logo">
													<img src = "<?php echo $company['url']; ?>" alt="<?php echo $company['alt']; ?>">	
												</div>
											</div><!-- .right -->
										</div><!-- .initial-info -->
										<div class="bio">
											<?php $headshot = get_sub_field('presenter_image'); ?>
											<?php if ($headshot) : ?>
												<div class="headshot">
													<img src = "<?php echo $headshot['url']; ?>" alt="<?php echo $headshot['alt']; ?>">
												</div><!-- .headshot -->
											<?php endif ?>
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
										</div><!-- .bio -->
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