<?php
/*
Template Name: Wide Content w/o Sidebar
*/
?>


<?php get_header(); ?>

	<div id="wide-content" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="page" id="post-<?php the_ID(); ?>">

			<header class="page-header">
            
                <h2><?php the_title(); ?></h2>
                
            </header>

                <section class="post-content">
                    
                    <?php the_content(__('Read on&hellip;'));?>
                    
                </section>

		</article>
		
		<?php comments_template(); ?>

		<?php endwhile; endif; ?>
        
	</div>

<?php get_footer(); ?>
