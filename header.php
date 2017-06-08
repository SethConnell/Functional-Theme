<div id = "header">
    <h1 id = "title"><?php bloginfo("title"); ?></h1>
    <h2 id = "desc"><?php bloginfo("description"); ?></h2>
	<nav class = "site-nav">
		<?php 
			$args = array("theme_location" => "primary");
		?>
		<?php wp_nav_menu($args); ?>
	</nav>
</div>