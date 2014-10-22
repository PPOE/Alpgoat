		<?php get_header(); ?>

		<div id="container">
			<div id="full" role="main">
				<figure class="post-image full-image">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/404.jpg" alt="File not found" /></a>
				</figure>
				<section id="post-404">
					<hgroup class="header">
						<h2 class="post-title">Page not found</h2>
					</hgroup>
					
                    <article class="article">
                        <h3>Sitemap</h3>
                        <?php echo do_shortcode('[pagelist]'); ?>
                	</article>
                    
				</section>
			</div><!-- full -->

			<div class="clear"></div>
		</div><!-- container -->

		<?php get_footer(); ?>