		<footer id="widgets">

				<?php dynamic_sidebar( 'footer-widgets' ); ?>
		
        </footer>

	</div> <!-- end #page-wrap -->

	<?php wp_footer(); ?>

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>

<!--AddThis-->
<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>

<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=joshual1"></script>
                    
<script type="text/javascript">var addthis_share = {templates: { twitter: '{{title}} {{url}} via @joshua_lynch' }}</script>

<!-- Twitter Follow Button -->

<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>

<!-- Google Analytics -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19821907-1']);
  _gaq.push(['_setDomainName', '.wpjourno.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	
</body>

</html>
