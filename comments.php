<?php

if ( ! function_exists( 'html5_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own html5_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 */
function html5_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			
			<footer>
				
				<div class="comment-author vcard">
					
					<?php echo get_avatar( $comment, 42 ); ?>
					
					<?php printf( __( '%s <span class="says">says:</span>', 'html5' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				
				</div>
				
				<?php if ( $comment->comment_approved == '0' ) : ?>
				
					<em><?php _e( 'Your comment is awaiting moderation.', 'html5' ); ?></em>
					<br />
				
				<?php endif; ?>

				<div class="comment-meta commentmetadata">
					
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
					
						<time pubdate datetime="<?php comment_time( 'c' ); ?>">
					
						<?php printf( __( '%1$s at %2$s', 'html5' ), get_comment_date(),  get_comment_time() ); ?>
					
						</time>
						
					</a>
					
					<?php edit_comment_link( __( '(Edit)', 'html5' ), ' ' );?>
					
				</div>
			
			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => 'Respond', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			
			</div>
			
		</article>

	<?php 
	
		break;
		
		case 'pingback'  :
		
		case 'trackback' :
	
	?>
	
	<li class="post pingback">
	
		<p><?php _e( 'Pingback:', 'html5' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'html5'), ' ' ); ?></p>
	
	<?php
			
		break;
	
		endswitch;

}

		endif; // ends check for html5_comment()

	?>

	<div id="comments">
	
		<?php if ( post_password_required() ) : ?>
		
			<p class="no-password"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'html5' ); ?></p>
	
	</div>
	
	<?php return;
		endif;
	?>

	<?php // You can start editing here ?>

	<?php if ( have_comments() ) : ?>
		
		<h2 id="comments-title">
			
			<?php printf( _n( 'Comments (1)', 'Comments (%1$s)', get_comments_number(), 'html5' ), number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' ); ?>
		
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		
			<nav id="pagination" role="navigation">
		
				<div class="older"><?php previous_comments_link( __( 'Older Comments', 'html5' ) ); ?></div>
				
				<div class="newer"><?php next_comments_link( __( 'Newer Comments', 'html5' ) ); ?></div>
			
			</nav>
			
		<?php endif; // check for comment navigation ?>

		<ol class="commentlist">
		
			<?php wp_list_comments( array( 'callback' => 'html5_comment' ) ); ?>
		
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		
			<nav id="pagination" role="navigation">
		
				<div class="older"><?php previous_comments_link( __( 'Older Comments', 'html5' ) ); ?></div>
				
				<div class="newer"><?php next_comments_link( __( 'Newer Comments', 'html5' ) ); ?></div>
			
			</nav>
			
		<?php endif; // check for comment navigation ?>

	<?php else : // this is displayed if there are no comments so far ?>

		<?php if ( comments_open() ) : // If comments are open, but there are no comments ?>

		<?php else : // or, if we don't have comments:

			// If no comments exist and comments are closed, leave a note
			
			if ( ! comments_open() && ! is_page() ) : ?>
			
				<h2 id="comments-title"><?php _e( 'Comments are closed.', 'html5' ); ?></h2>
			
			<?php endif; // end ! comments_open() && ! is_page() ?>

		<?php endif; ?>

	<?php endif; ?>

	<?php comment_form(array('comment_notes_after'=>'','title_reply'=>'Post a Comment')); ?>

</div>