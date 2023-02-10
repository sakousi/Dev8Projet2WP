<?php get_header(); ?>
<main class="container">
	<p></p>
	<h1></h1>
	<?php
	if(have_posts()):
		$previousPage = get_previous_posts_page_link();
		$nextPage = get_next_posts_page_link();
	?>
        <div class="w-full flex justify-center">
            <a href="<?= $previousPage ?>"><i class="fa-solid fa-arrow-left"></i></a>
            <div class="px-4">
				<?php the_posts_pagination(
					array(
						'screen_reader_text' => '',
						'mid_size' => 2,
						'prev_next' => false,
					)
				); ?>
            </div>
            <a href="<?= $nextPage ?>"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
		<div class="grid md:grid-cols-2 grid-cols-1 gap-8 py-8">
			<?php while(have_posts()) : the_post()?>
				<div class="bg-white shadow-md rounded grid grid-rows-2 h-[30rem] overflow-hidden">
					<div class="w-full h-full overflow-hidden">
						<img class="w-full object-cover -translate-y-1/4" src="<?php the_post_thumbnail_url(); ?>" alt="">
					</div>
					<div class="p-4">
						<h3 class="text-xl text-blue font-bold"><?php the_title(); ?></h3>
						<p class="text-blue"><?= get_the_excerpt(); ?></p>
						<a class="text-blue underline decoration-blue" href="<?php the_permalink(); ?>">Lire la suite</a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<div class="w-full flex justify-center">
			<a href="<?= $previousPage ?>"><i class="fa-solid fa-arrow-left"></i></a>
            <div class="px-4">
                <?php the_posts_pagination(
                    array(
                        'screen_reader_text' => '',
                        'mid_size' => 2,
                        'prev_next' => false,
                    )
                ); ?>
            </div>
			<a href="<?= $nextPage ?>"><i class="fa-solid fa-arrow-right"></i></a>
		</div>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
