<?php wp_footer(); ?>
<footer class="overflow-hidden bg-creamy">
    <div class="mx-auto px-4 py-24 max-w-6xl relative w-full z-0 after:content after:absolute after:w-[200%] after:h-full after:skew-x-[-20deg] after:top-0 after:bg-white after:-z-10 after:-translate-x-[70px]">
        <div class="w-full flex justify-between">
            <div class="">
                <img src="<?php the_field('logo', 'options'); ?>" alt="">
                <p class="text-blue">
                    <?php if(have_rows('campus', 'options')): ?>
                        <?php
                            $campus_rows = count(get_field('campus', 'options'));
                            $i = 0;
                        ?>
                        <?php while(have_rows('campus', 'options')): the_row() ?>
                            <?php $i++; ?>
	    	                <?php if($i === 1): ?>
                                <?= get_sub_field('city')?>
	    	                <?php elseif ($i >= $campus_rows): ?>
                                <?= 'et '.get_sub_field('city') ?>
                            <?php else: ?>
                                <?= ', '.get_sub_field('city') ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </p>
            </div>
	        <?php if(have_rows('campus', 'options')): ?>
	    	    <?php while(have_rows('campus', 'options')): the_row() ?>
                    <div>
                        <h3><?= get_sub_field('city') ?></h3>
                        <?= get_sub_field('address') ?>
                    </div>
	    	    <?php endwhile; ?>
	        <?php endif; ?>
        </div>
        <div class="flex justify-between">
            <div>
                <h3>Nous contacter.</h3>
                <p><?= get_field('email', 'options') ?></p>
            </div>
            <div>
                <h3>Nous suivre.</h3>
                <div class="flex flex-col">
                    <?php if(have_rows('social_media', 'options')): ?>
                        <?php while(have_rows('social_media', 'options')): the_row() ?>
                            <a href="<?= get_sub_field('link') ?>" ><?= get_sub_field('media') ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <h3>En toute transparence.</h3>
            </div>
            <div>
                <h3>Faire connaissance.</h3>
                <button>Ecris-nous</button>
            </div>
        </div>
    </div>
</footer>
</body>
</html>