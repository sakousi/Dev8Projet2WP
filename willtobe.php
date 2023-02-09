<?php /* Template Name: WillToBe */ ?>
<?php get_header(); ?>
	<div class="bg-blue w-full">
		<header class="container flex justify-center items-center flex-col !py-48 w-2/3">
				<p class="text-lg text-white font-bold text-center"><?= get_field('up_title'); ?></p>
				<h1 class="text-5xl font-extrabold font-khula text-white text-center py-12"><?php the_field('title'); ?></h1>
		</header>
	</div>
	<section class="container text-blue">
		<p class="font-bold text-lg"><?php the_field('up_title_2'); ?></p>
		<h2 class="font-extrabold text-4xl w-1/2 py-12"><?php the_field('title_2'); ?></h2>
		<?php if(have_rows('repeater_2')): ?>
			<div class="grid grid-cols-2 gap-8">
				<?php while(have_rows('repeater_2')): the_row(); ?>
					<div class="">
						<h3 class="font-bold text-lg"><?php the_sub_field('title'); ?></h3>
						<p><?php the_sub_field('desc'); ?></p>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</section>
	<div class="bg-blue w-full">
		<section class="container flex flex-col text-white">
			<p class="font-bold text-lg"><?php the_field('up_title_3'); ?></p>
			<h2 class="font-extrabold text-4xl w-1/2 py-12"><?php the_field('title_3'); ?></h2>
			<?= get_field('desc_3') ?>
		</section>
	</div>
    <div class="bg-creamy w-full">
	    <section class="container text-blue">
            <div class="flex flex-col items-center">
                <p class="font-bold text-lg text-center"><?php the_field('up_title_4'); ?></p>
                <h2 class="font-extrabold text-4xl w-1/2 py-12 text-center"><?php the_field('title_4'); ?></h2>
	    	    <?php if(have_rows('repeater_4')): ?>
                    <div class="flex justify-center flex-wrap">
	    	    		<?php while(have_rows('repeater_4')): the_row(); ?>
                            <div class="basis-1/3">
                                <h3 class="font-bold text-lg"><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('desc'); ?></p>
                            </div>
	    	    		<?php endwhile; ?>
                    </div>
	    	    <?php endif; ?>
            </div>
            <div class="w-full flex justify-center py-24">
                <img class="w-32" src="<?php the_field('separator_4'); ?>" alt="">
            </div>
            <div class="flex flex-col items-center">
                <h3 class="font-extrabold text-4xl w-1/2 text-center py-12"><?php the_field('2_title_4'); ?></h3>
                <?php if(have_rows('2_repeater_4')): ?>
                    <div class="flex justify-center pt-12">
                        <?php while(have_rows('2_repeater_4')): the_row(); ?>
                            <div class="flex flex-col items-center basis-1/4 px-8 text-center">
                                <img src="<?php the_sub_field('icon'); ?>" alt="">
                                <h4 class="font-bold text-lg text-center"><?php the_sub_field('title'); ?></h4>
                                <?= get_sub_field('desc'); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
	    </section>
    </div>
    <section class="container text-blue flex flex-col items-center text-center">
        <p class="font-bold text-lg"><?php the_field('up_title_5'); ?></p>
        <h2 class="font-extrabold text-4xl w-1/2 py-12"><?php the_field('title_5'); ?></h2>
            <?php if(have_rows('repeater_5')): ?>
                <div class="grid grid-cols-4 gap-8">
                    <?php while(have_rows('repeater_5')): the_row(); ?>
                        <div class="">
                            <div class="h-74 w-full">
                                <img class="object-contain h-full w-full" src="<?php the_sub_field('image'); ?>" alt="">
                            </div>
                            <p class="font-bold text-lg text-center capitalize"><?php the_sub_field('name'); ?>.</p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
    </section>
<?php get_footer(); ?>