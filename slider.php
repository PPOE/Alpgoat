<?php if($options['header-option'] == 'show-slider') : ?>
	<!-- customize slider by theme-options -->
	<?php if($options['slider-num']) : $num=$options['slider-num']; else : $num=5; endif; ?>
	<?php if($options['slider-cat']) : $cat=$options['slider-cat']; else : $cat=''; endif; ?>
	<!-- filter post formats from slider query -->
	<?php $no_formats = array(array('taxonomy' => 'post_format', 'field' => 'slug', 'terms' => array('post-format-status'), 'operator' => 'NOT IN')); ?>
	<!-- all parameters for the query -->
	<?php $args = array('posts_per_page'=>$num,'cat'=>$cat,'tax_query'=>$no_formats,'post__not_in'=>get_option('sticky_posts')); ?>
	<?php query_posts($args); ?>
	<?php if(have_posts()) : ?>
	<section id="front-page-header-outside" role="complementary">
		<div id="front-page-header-inside" class="inside">
			<div id="toggling" class="toggling">
				<div id="slideshow">
					<div id="front-page-slider">
						<ul class="slides">
							<?php while (have_posts()) : the_post(); ?>
							<li>
								<section class="front-page-slide">
									<header class="slide-text">
										<h2 class="slide-text-title">
											<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</h2>
									</header><!-- slide-text -->
									<?php if(has_post_thumbnail()) : ?>
										<figure class="slide-image">
											<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail('featured'); ?>
											</a>
											<?php if(get_post(get_post_thumbnail_id())->post_excerpt) : ?>
												<span class="meta-thumbnail-caption">
													<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
												</span>
											<?php endif; ?>
										</figure><!-- slide-image -->
									<?php endif; ?>
								</section><!-- front-page-slide -->
							</li>
							<?php endwhile; ?>
						</ul>
					</div><!-- front-page-slider -->
				</div><!-- slideshow -->
				<?php if($options['featured-link-1'] && $options['featured-link-2'] && $options['featured-link-3'] && $options['featured-link-4']) : ?>
					<div id="front-page-adverts">
						<aside id="featured-links">
							<ul>
								<li>
									<a class="featured-link" href="<?php echo $options['featured-link-1']; ?>" title="<?php echo $options['featured-link-title-1']; ?>">
										<?php if($options['featured-link-title-1']) : ?>
											<?php echo $options['featured-link-title-1']; ?>
										<?php endif; ?>
									</a>
								</li>
								<li>
									<a class="featured-link" href="<?php echo $options['featured-link-2']; ?>" title="<?php echo $options['featured-link-title-2']; ?>">
										<?php if($options['featured-link-title-2']) : ?>
											<?php echo $options['featured-link-title-2']; ?>
										<?php endif; ?>
									</a>
								</li>
								<li>
									<a class="featured-link" href="<?php echo $options['featured-link-3']; ?>" title="<?php echo $options['featured-link-title-3']; ?>">
										<?php if($options['featured-link-title-3']) : ?>
											<?php echo $options['featured-link-title-3']; ?>
										<?php endif; ?>
									</a>
								</li>
								<li>
									<a class="featured-link" href="<?php echo $options['featured-link-4']; ?>" title="<?php echo $options['featured-link-title-4']; ?>">
										<?php if($options['featured-link-title-4']) : ?>
											<?php echo $options['featured-link-title-4']; ?>
										<?php endif; ?>
									</a>
								</li>
							</ul>
						</aside><!-- featured-links -->
					</div><!-- front-page-adverts -->
				<?php endif; ?>
				<div class="clear"></div>
			</div><!-- toggling -->
			<div class="clear"></div>
		</div><!-- front-page-header-inside -->
	</section><!-- front-page-header-outside -->
	<?php endif; wp_reset_query(); ?>
<?php elseif($options['header-option'] == 'show-header') : ?>
	<?php $header_image = get_header_image(); if($header_image) : ?>
		<section id="front-page-header-image-outside">
			<div id="front-page-header-image-inside" class="inside">
				<figure class="custom-header"></figure>
			</div><!-- front-page-header-image-inside -->
		</section><!-- front-page-header-image-outside --> 
	<?php endif; ?>
<?php endif; ?>
