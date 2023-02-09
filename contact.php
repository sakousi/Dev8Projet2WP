<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<main class="container flex text-blue">
	<div class="w-1/2">
		<p class="font-bold text-lg"><?php the_field('up_title'); ?></p>
		<h1 class="font-extrabold text-4xl w-1/2 py-4"><?php the_field('title'); ?></h1>
		<p class="text-lg"><?php the_field('desc'); ?></p>
	</div>
	<div class="w-1/2">
		<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3 ) ); ?>
	</div>
</main>
<?php get_footer(); ?>