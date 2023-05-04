<?php

use function PHPSTORM_META\type;

get_header();


$menus = wp_get_nav_menu_items("sitemenu");


echo apply_filters("returnjson", $menus);

foreach ($menus as $menu => $value) {

    $post = get_post($menu);
?>

    <p><?php print_r($value->title) ?></p>

<?php
}

get_footer();
