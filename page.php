		<?php get_header(); ?>

		<!-- Mobiel Detect -->
		<?php $detect = new Mobile_Detect(); ?>

		<div id="container">
			
			<div id="content" role="main">

				<!-- Mobile Query -->
				<?php if(!$detect->isMobile() || $detect->isTablet()) : ?>
					<?php if(has_post_thumbnail()) : ?>
						<figure class="post-image">
							<?php $image_id = get_post_thumbnail_id();$image_url = wp_get_attachment_image_src($image_id,'full', true); ?>
								<?php the_post_thumbnail('featured'); ?>
							<?php if(get_post(get_post_thumbnail_id())->post_excerpt) : ?>
								<span class="meta-thumbnail-caption">
									<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
								</span>
							<?php endif; ?>
						</figure>
					<?php endif; ?>
			
					<?php if(function_exists('breadcrumb')) : ?>
						<?php breadcrumb(); ?> 
					<?php endif; ?>
				<?php endif; ?>
				<!-- Mobile Query -->
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="header">
						<h2 class="post-title"><?php the_title(); ?></h2>
					</header>
	
					<article class="article">
							<!--<div class="excerpt"><?php the_excerpt(); ?></div>-->
							<?php the_content(); ?>
					</article>
					
				</section>
				
				<?php endwhile; ?>
		
				<?php endif; ?>
			</div><!-- content -->
			
			<?php get_sidebar(); ?>

			<div class="clear"></div>
		</div><!-- container -->

		<?php get_footer(); ?>