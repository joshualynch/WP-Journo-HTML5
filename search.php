<?php get_header(); ?>

	<div id="wrapper" class="group">

	<div id="content" role="main">

	<?php if (have_posts()) : ?>
    
    	<header class="page-header">
                    
        	<h2>Search Results for "<?php the_search_query(); ?>"<?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('');(''); _e(' ('); echo $count . ''; _e(')'); wp_reset_query(); ?></h2>
                    
        </header>


		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

                <header class="post-header">
                
                	<?php include (TEMPLATEPATH . '/post-meta.php' ); ?>
                
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                
                </header>
        
                        <section class="post-content">
                            
                            <?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')); ?>
                            
                            <?php the_excerpt(); ?>
                            
                        </section>
        
                <footer class="post-footer">  
                
                	<?php include (TEMPLATEPATH . '/share-tags.php' ); ?>
                    
                </footer>

			</article>

		<?php endwhile; ?>
        
        	<?php if (show_posts_nav()) : ?>
                
                	<?php include (TEMPLATEPATH . '/pagination.php' ); ?>
                
            <?php endif; ?>

        <?php else : ?>
    
			<?php include (TEMPLATEPATH . '/lost.php' ); ?>
    
        <?php endif; ?>

	</div>

	<?php get_sidebar(''); ?>
    
    </div>

<?php get_footer(); ?>