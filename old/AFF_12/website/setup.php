<?php require_once('website.core/header.php'); ?>

<main class="flex-container-full theme-light-hc d-flex-column">

    <?php get_tile_custom('tri_banner', 'website.tile/banner', '.php', 
            [APP_NAME, LOGO, 'Setup'] ); ?>

    <div class="flex-container-full t-24 t-font-thin vl-8 o-auto my-large px-large">

        <div id="rbo"><?php get_tile('rbo'); ?></div>
        <div id="disclaimer"><?php get_tile('disclaimer'); ?></div>
        <div id="version"><?php get_tile_custom('version', null, '.php', [VERSION_NAME]); ?></div>
        <div id="dau"><?php get_tile('dau'); ?></div>
        
    </div>

</main>
</body>
</html>