					<div class="addthis_toolbox addthis_default_style" addthis:title="<?php the_title(); ?>" addthis:url="<?php the_permalink() ?>">
                    
                    	<a class="addthis_button_google_plusone g:plusone:size="small" g:plusone:count="false" "></a>
    
    					<a class="addthis_button_twitter"></a>
                        
                        <a class="addthis_button_linkedin"></a>
                        
                        <a class="addthis_button_facebook"></a>
    
    					<a class="addthis_button_email"></a>
                        
                        <?php if (comments_open()) { ?>
                                    
                    		<?php comments_popup_link('<span class="count">Comment</span>', '<span class="count">1</span>', '<span class="count">%</span>', 'comment-bubble'); ?>
                    
                    	<?php } ?>

					</div>
                    
                    <span class="tags"><?php the_tags(); ?></span>