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
                        
                        <?php the_content(__('<span class="read-more">Read on&hellip;</span>'));?>
                        
                    </section>

			<footer class="post-footer">  
                
            	<?php include (TEMPLATEPATH . '/share-tags.php' ); ?>
                    
			</footer>

		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
    
    </div>
	
	<?php get_sidebar('single'); ?>
    
    </div>

<?php get_footer(); ?>