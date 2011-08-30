<?php get_header(); ?>

		<div id="wrapper" class="group">

        <div id="content" role="main">
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    
                <header class="post-header">
                
                	<?php include (TEMPLATEPATH . '/post-meta.php' ); ?>
                
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                
                </header>
    
                    <section class="post-content">
                        
                        <?php the_content(__('Read on&hellip;'));?>
                        
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