<?php get_header(); ?>

<?php if(have_posts()) {?>
	<?php while(have_posts()) {?>
		<?php the_post(); ?>
		<h2>
		<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
			<?php the_title() ?>
		</a>
		</h2>
		<div>
			<?php post_meta() ?>
		</div>
		<div>
			<?php the_excerpt() ?>
		</div>
		<?php readmore_link(); ?>
	<?php }?>
	<?php the_posts_pagination() ?>

<?php } else { ?>
	<p>sorry no posts were found</p>
<?php } ?>

<?php get_footer(); ?>