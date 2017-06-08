<!DOCTYPE HTML>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/style.css" />
	<title><?php bloginfo("title"); ?></title>
</head>

<body>
    
    <?php 
    	get_header();
    ?>
	<?php while(have_posts()) {
		the_post();
	?>
        <div class = "content">
            <h2 class = "subtitles"><?php strtoupper(the_title()); ?></h2>
            <p class = "article"><?php the_content(); ?></p>
        </div>
    <?php } ?>
</body>