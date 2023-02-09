<?php get_header(); ?>
<header class="bg-blue w-full h-96">
    <div class="w-full h-full bg-right bg-contain bg-no-repeat responsive-bg" style="background-image: url('<?php the_field('bg-header'); ?>')">
        <div class="h-full w-full container flex items-center">
            <div class="md:w-1/2">
                <h1 class="text-4xl lg:text-5xl font-extrabold font-khula text-white"><?php the_field('title'); ?></h1>
                <p class="text-2xl text-white"><?= get_field('sub-title'); ?></p>
            </div>
        </div>
    </div>
</header>
<main class="flex flex-col items-center w-full">
    
    
    <section class="container flex flex-col items-center">
        <p class="uppercase text-blue font-bold py-2"><?php the_field('up-title_1'); ?></p>
        <h2 class="text-4xl text-center text-blue font-bold py-2"><?php the_field('title_section_1'); ?></h2>
        <p class="text-center text-blue py-2 text-lg"><?php the_field('desc_section_1'); ?></p>
    </section>
    
    
    <div class="bg-creamy w-full flex justify-center">
    <section class='container grid grid-cols-1 sm:grid-cols-10 gap-8'>
        <div class="md:col-span-4 col-span-5">
            <p class="uppercase text-blue font-bold py-2"><?php the_field('up_title_2'); ?></p>
            <h2 class="text-2xl md:text-4xl text-blue font-bold py-2"><?php the_field('title_section_2'); ?></h2>
            <p class="text-blue py-2 text-lg"><?php the_field('desc_section_2'); ?></p>
        </div>
        <div class="md:col-span-6 col-span-5 grid md:grid-cols-2 grid-cols-1 gap-16">
            <?php if( have_rows('repeter_2') ): ?>
                <?php while (have_rows('repeter_2')) : the_row() ?>
                    <div>
                        <img class="h-16" src="<?php the_sub_field('icon'); ?>" alt="">
                        <h3 class="text-xl text-blue font-bold"><?php the_sub_field('title'); ?></h3>
                        <p class="text-blue"><?php the_sub_field('desc'); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    </div>
    
    
    <section class="container flex flex-col items-center">
        <h2 class="uppercase text-blue font-bold py-2"><?php the_field('title_actu'); ?></h2>
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'order' => 'DESC',
                'orderby' => 'date'
            );
            $query = new WP_Query($args);
        ?>
        <?php if($query->have_posts()) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 py-8">
                <?php while($query->have_posts()) : ?>
                    <?php $query->the_post(); ?>
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
        <?php endif; ?>
        <a href="<?= get_permalink(get_option('page_for_posts')); ?>" class="btn"><?php the_field('button_actu'); ?></a>
    </section>
    
    
    <div class="bg-blue w-full flex justify-center">
        <section class="container flex flex-col items-center text-white">
            <p class="uppercase font-bold py-2"><?php the_field('up_title_3'); ?></p>
            <h2 class="text-2xl md:text-4xl font-bold py-2"><?php the_field('title_section_3'); ?></h2>
            <?php if( have_rows('repeteur_section_3') ): ?>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                    <?php while (have_rows('repeteur_section_3')) : the_row() ?>
                        <div class="grid lg:grid-cols-8 grid-cols-2">
                            <img class="lg:pr-4 pt-8 lg:pt-0" src="<?php the_sub_field('icon'); ?>" alt="">
                            <div class="col-span-7">
                                <h3 class="text-xl font-bold"><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('desc'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </section>
    </div>
    
    
</main>
<?php get_footer(); ?>
