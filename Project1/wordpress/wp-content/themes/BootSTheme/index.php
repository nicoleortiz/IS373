<?php get_header(); ?>

<?php get_footer(); ?>

<!--Displaying the Features Posts-->
<?php

query_posts('posts_per_page=1');

while(have_posts()) : the_post(); ?>
<div>
<h2><a href="<?php the_permalink(); ?><?php the_title(); ?></a>
</h2>
<p><?php the_except(); ?></p>
</div>

<?php endwhile; wp_reset_query(); ?>

<!--Listing Your Categories-->
<div class="panel panel-default panel-body">
	<div>
		<div>
			<ul>
				<?php wp_list_categories('orderby=name&title_li='); ?>
			</ul>
		</div>
	</div>
</div>

<!--Display the Latest Posts and Authors-->
<div>
	<?php while(have_posts()) : the_post(); ?>
	<h3>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h3>
	<p><?php the_excerpt(); ?></p>
	<p> posted by <?php the_author(); ?>
	<?php endwhile; wp_reset_query(); ?>
</div>