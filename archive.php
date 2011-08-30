<?php get_header(); ?>

	<div id="wrapper" class="group">

	<div id="content" role="main">
    
    	<header class="page-header">
        
        <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2>Posts categorized in <?php single_cat_title(); ?></h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts tagged with <?php single_tag_title(); ?></h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2>Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2>Posts by <a href="<?php echo $curauth->user_google_profile; ?>" rel="me"><?php echo $curauth->display_name; ?></a></h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2>Blog Archives</h2>
			
			<?php } ?>
            
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