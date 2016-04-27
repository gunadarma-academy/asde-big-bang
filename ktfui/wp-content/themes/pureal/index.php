<?php get_header(); ?>
	<div id="main-content">
		<div id="post-content">
			<div class="row-container">
					<?php
						while(have_posts()) : the_post();?>
							<div class="post-container">
								<?php get_template_part('content', get_post_format()); ?>
							</div>
					<?php endwhile; ?>
			</div>
		<div id="main-content">
	</div>
<?php get_footer(); ?>