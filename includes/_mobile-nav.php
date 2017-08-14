<?php
$menu = wp_get_nav_menu_object('navigation');
$items = wp_get_nav_menu_items($menu->term_id);
?>

<div class="mobile-navbar">
<button class="hamburger hamburger--spin" type="button">
    <span class="hamburger-box">
        <span class="hamburger-inner"></span>
    </span>
</button>
</div>
<div class="mobile-nav">
<ul class="mobile-nav__inner">
    <?php foreach ($items as $item): ?>
    <li><a class="nav-link" href="<?php echo $item->url ?>"><?php echo $item->title; ?></a></li>
    <?php endforeach; ?>
</ul>
</div>