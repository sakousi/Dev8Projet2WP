<?php
$logo = get_field('logo_nav', 'options');
$classes = 'text-white text-lg';
if (is_page('contact') || is_home()) {
    $logo = get_field('logo_nav_dark', 'options');
    $classes ='text-blue text-lg';
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Khula:wght@300;400;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script src="https://kit.fontawesome.com/6f97fb590a.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<nav class="absolute !py-0 container flex justify-between items-center inset-x-0">
    <a class="py-2 h-16" href="<?= get_home_url() ?>">
        <img class="h-full" src="<?= $logo ?>" alt="">
    </a>
    <div class="flex lg:hidden">
        <button class="hamburger" type="button">
            <i class="fa-solid fa-bars text-xl text-blue"></i>
        </button>
    </div>
    <ul class="hidden w-full h-16 lg:flex justify-center items-center inset-x-0">
        <?php
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['menu_principal'];
            $menu = wp_get_nav_menu_items($menuID);
            foreach($menu as $navItem) {
                echo '<li class="px-6"><a href="'.$navItem->url.'" title="'.$navItem->title.'" class="'.$classes.'">'.$navItem->title.'</a></li>';
            }
        ?>
    </ul>
</nav>

<?php wp_body_open(); ?>