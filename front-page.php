		<?php get_header(); ?>
		
		<!-- Mobiel Detect -->
		<?php $detect = new Mobile_Detect(); ?>

		<div id="container">
			<div id="content" role="main">			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section id="post-<?php the_ID(); ?>" <?php if (is_front_page()) { post_class('front-post'); } else { post_class(); } ?>>
					<?php if(has_post_thumbnail()) : ?>
						<figure class="post-image">
							<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
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
	
					<article class="article">
							<?php the_content(); ?>
					</article><!-- .article -->
					
				</section><!-- .post -->
				
				<?php endwhile; ?>

				<?php endif; ?>
                
                <section id="frontpage-news">
                    <h2>Neuigkeiten <a href="/category/allgemein/" title="Mehr News">&raquo;</a></h2>
                    <ul>                
                    
                    <?php 
                    // Query Post for Frontpage (Category-ID 3 "News")
					wp_reset_query();
                    //query_posts( 'cat=3&posts_per_page=5' ); //hard coded category id isn't portable!
                    $news_category=get_cat_ID("News");
                    query_posts( 'cat=$news_category&posts_per_page=5' );
                    while (have_posts()) : the_post(); ?>
                            <li><span class="news-date"><?php the_time('j.m.y'); ?></span>
                                <a title="<?php echo strip_tags(get_the_excerpt()); ?>" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </li>
            
                    <?php endwhile; ?>				
                    </ul>
                </section>
                
			</div><!-- #content -->


			<?php get_sidebar(); ?>

			<div class="clear"></div>
		</div><!-- #container -->

		<?php get_footer(); ?>
