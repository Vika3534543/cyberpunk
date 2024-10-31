<?php
$crb_background_logo = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_background_logo'), 'full');
$menu_items = carbon_get_the_post_meta('menu_items');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container flex header-block">
        <div class="logo">
            <a href="/">
                <img class="logo-image" src="<?php echo $crb_background_logo; ?>" alt="logo">
            </a>
        </div>
        <nav>
            <ul class="menu flex">
                <?php foreach ($menu_items as $menu_item) { ?>
                    <li><a href="#">
                            <img src="<?php echo wp_get_attachment_image_url($menu_item['image']); ?>" width="30"
                                 height="30" alt="youtube"></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</header>

