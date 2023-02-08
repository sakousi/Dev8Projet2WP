<?php
$logo = get_field('logo_nav', 'options');
$classes = 'text-white text-lg';
if (is_page(['contact', 'actualities'])) {
    $logo = get_field('logo_nav_dark', 'options');
    $classes ='text-blue text-lg';
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<nav class="absolute !py-0 container flex inset-x-0">
    <a class="py-2 h-16" href="<?= get_home_url() ?>">
        <img class="h-full" src="<?= $logo ?>" alt="">
    </a>
    <ul class="w-full h-16 flex justify-center items-center inset-x-0">
        <?php
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['menu_principal'];
            $menu = wp_get_nav_menu_items($menuID);
            foreach($menu as $navItem) {
                echo '<li class="px-8"><a href="'.$navItem->url.'" title="'.$navItem->title.'" class="'.$classes.'">'.$navItem->title.'</a></li>';
            }
        ?>
    </ul>
</nav>

<?php wp_body_open(); ?>