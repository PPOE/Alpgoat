		<?php get_header(); ?>

		<!-- Mobiel Detect -->
		<?php $detect = new Mobile_Detect(); ?>

		<div id="container">
			
			<div id="content">

				<?php if(has_post_thumbnail()) : ?>
					<figure class="page-image">
						<?php $image_id = get_post_thumbnail_id();$image_url = wp_get_attachment_image_src($image_id,'full', true); ?>
						<a title="<?php the_title(); ?>" href="<?php echo $image_url[0]; ?>">
							<!-- Mobile Query -->
							<?php if($detect->isMobile() && !$detect->isTablet()) : ?>
								<?php the_post_thumbnail('medium'); ?>
							<?php else : ?>
								<?php the_post_thumbnail('teaser'); ?>
							<?php endif; ?>
						</a>
						<?php if(get_post(get_post_thumbnail_id())->post_excerpt) : ?>
							<span class="meta-thumbnail-caption">
								<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
							</span>
						<?php endif; ?>
					</figure>
				<?php endif; ?>
			
				<!-- Mobile Query -->
				<?php if(!$detect->isMobile() || $detect->isTablet()) : ?>
					<?php if($options['breadcrumb-show']) : ?>
						<?php if(function_exists('breadcrumb')) : ?>
							<?php breadcrumb(); ?> 
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
				<!-- Mobile Query -->
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!--<?php edit_post_link( __( 'Edit', 'scapegoat' ), '<span class="edit-link">', '</span>' ); ?>-->
					<header class="header">
						<h1 class="post-title"><?php the_title(); ?></h1>
					</header>
	
					<article class="article">
						<?php wp_link_pages('before=<nav class="pagination_post">'. __("Pages:","scapegoat") .'&after=</nav>'); ?>
						<?php the_content(); ?>
						<?php wp_link_pages('before=<nav class="pagination_post">'. __("Pages:","scapegoat") .'&after=</nav>'); ?>
					</article>
					
				</section>
				
				<?php endwhile; ?>
				
					<section id="replys">
						<?php comments_template(); ?>
					</section>
				
				<?php endif; ?>
			</div><!-- content -->
			
			<?php get_sidebar(); ?>

			<div class="clear"></div>
		</div><!-- container -->

		<?php get_footer(); ?>