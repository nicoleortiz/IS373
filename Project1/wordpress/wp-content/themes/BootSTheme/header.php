<?php get_stylersheet_uri(); ?>
<?php wp_head(); ?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title(' | ',true,'right');?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<div class = "navbar navbar-inverse navbar-static-top">
			<div class = "container">
				
				<a href = "#" class = "navbar-brand">Bootstrap WordPress Theme</a>
				
				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>