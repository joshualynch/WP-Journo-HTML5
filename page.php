<?php get_header(); ?>

	<div id="wrapper" class="group">

        <div id="content" role="main">
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
            <article class="page" id="post-<?php the_ID(); ?>">
    
                <header class="page-header">
                
                    <h2><?php the_title(); ?></h2>
                
                </header>
    
                    <section class="post-content">
                        
                        <?php the_content(__('Read on&hellip;'));?>
                        
                    </section>
    
            </article>
            
            <?php /*?>
		
				Uncomment if you do think you'll ever want comments on your static pages.
		
				<?php comments_template(); ?>
		
			<?php */?>

    
            <?php endwhile; endif; ?>
            
        </div>
    
        <?php get_sidebar(''); ?>
        
	</div>

<?php get_footer(); ?>
