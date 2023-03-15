<?php require_once('app.core/header.php'); ?>
    
<main class="flex-container-full theme-light-hc d-flex-column">

    <?php get_tile_custom('tri_banner', 'app.tile/banner', '.php', 
            [APP_NAME, LOGO, 'Roadmap'] ); ?>

    <div class="container theme-light-hc flex-container d-flex-column">

        <div class="container vl-10 o-auto">
            <p class="text-object" id="near"><?php get_tile('near'); ?></p>
            <p class="text-object" id="far"><?php get_tile('far'); ?></p>
        </div>

    </div>

</main>

</div>
</body>
</html>