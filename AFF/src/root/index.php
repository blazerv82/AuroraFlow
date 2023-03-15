<?php require_once('app.core/header.php'); ?>
    
<main class="container d-flex-column">

    <div class="flex-container-full">
        
        <?php get_tile_custom('tri_banner', 'app.tile/banner', '.php', 
                [APP_NAME, LOGO, VERSION] ); ?>

        <section class="section-object">

            <div class="header-object border-thin-b">
                <p class="text-object my-none t-48">
                    code like a human, not a computer
                </p>
            </div>

            <div class="header-object py-small border-thin-b">
                <p class="text-object my-none">
                    simplicity
                </p>

                <p class="text-object t-20 my-small">
                    human readable sections and naming schemes
                </p>
            </div>

            <div class="header-object py-small border-thin-b">
                <p class="text-object my-none">
                    options
                </p>

                <p class="text-object t-20 my-small">
                    simple doesn't mean only one way to do things
                </p>
            </div>

            <div class="header-object py-small border-thin-b">
                <p class="text-object my-none">
                    stylish
                </p>

                <p class="text-object t-20 my-small">
                    many, many styling options
                </p>
            </div>

        </section>
        
    </div>

</main>