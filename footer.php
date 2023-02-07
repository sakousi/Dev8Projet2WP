<?php wp_footer(); ?>
<footer class="">
    <div>
        <div>
            <img src="<?php the_field('logo', 'options'); ?>" alt="">
            <p>
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
    </div>
    <div>
    </div>
</footer>
</body>
</html>