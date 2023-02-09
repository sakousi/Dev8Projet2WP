<?php /* Template Name: Expertise */ ?>
<?php get_header(); ?>
<div class="bg-blue w-full">
	<header class="container text-white flex flex-col items-center md:w-1/2 text-center">
		<p class="text-lg font-bold"><?php the_field('up_title'); ?></p>
		<h1 class="py-8 text-3xl md:text-4xl font-extrabold"><?php the_field('title'); ?></h1>
		<p><?php the_field('desc'); ?></p>
	</header>
</div>
	<main>
		<section class="container text-blue">
			<h2 class="py-8 text-3xl md:text-4xl font-extrabold"><?php the_field('title_2'); ?></h2>
			<p><?php the_field('desc_2'); ?></p>
			<?php if(have_rows('repeater_2')): ?>
				<div class="grid md:grid-cols-2 grid-cols-1 gap-8">
					<?php while (have_rows('repeater_2')) : the_row() ?>
						<div>
							<img src="<?php the_sub_field('icon'); ?>" alt="">
							<h3 class="text-xl font-bold"><?php the_sub_field('title'); ?></h3>
							<p><?php the_sub_field('desc'); ?></p>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>
		<div class="bg-blue w-full">
			<section class="container text-white">
                <div class="md:w-1/2 pb-10">
				    <p class="text-lg font-bold"><?php the_field('up_title_3'); ?></p>
				    <h2 class="py-8 text-3xl md:text-4xl font-extrabold"><?php the_field('title_3'); ?></h2>
				    <p><?php the_field('desc_3'); ?></p>
                </div>
				<?php if(have_rows('repeater_3')): ?>
					<div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-16">
						<?php while (have_rows('repeater_3')) : the_row() ?>
							<div>
								<h3 class="text-xl font-bold"><?php the_sub_field('title'); ?></h3>
								<p><?php the_sub_field('desc'); ?></p>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</section>
		</div>
	</main>
<?php get_footer(); ?>