<?php $search_text = "Search"; ?>

<form method="get" class="searchform" action="<?php bloginfo('home'); ?>/">

	<input type="text" value="<?php echo $search_text; ?>" name="s" class="s" onblur="if (this.value == '') {this.value = '<?php echo $search_text; ?>';}" onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" />

	<input type="submit" class="searchsubmit" value="Go" />

</form>