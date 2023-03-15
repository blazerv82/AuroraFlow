<?php require_once('website.core/header.php'); ?>
    
<?php get_tile_custom('tri_banner', 'website.tile/banner', '.php', 
        [APP_NAME, LOGO, 'Documentation'] ); ?>

<div class="flex-container d-flex-row">

    <div class="section-object vl-auto px-xlarge">
        <div id="viewport" class="section"><?php get_tile('viewport'); ?></div>

        <div id="containers" class="section"><?php get_tile('containers'); ?></div>

        <div id="padding" class="section"><?php get_tile('padding'); ?></div>

        <div id="margin" class="section"><?php get_tile('margin'); ?></div>

        <div id="offset" class="section"><?php get_tile('offset'); ?></div>

        <div id="display" class="section"><?php get_tile('display'); ?></div>

        <div id="themes" class="section"><?php get_tile('themes'); ?></div>

        <div id="colors" class="section"><?php get_tile('colors'); ?></div>

        <div id="text" class="section"><?php get_tile('text'); ?></div>

        <div id="border" class="section"><?php get_tile('border'); ?></div>
        
        <div id="round" class="section"><?php get_tile('round'); ?></div>

        <div id="other" class="section"><?php get_tile('other'); ?></div>
    </div>


</div>

<div id="navbar_documentation">
    <?php get_tile('nav_documentation', WEBSITE_CORE.'navigation', '.php'); ?>
</div>

</body>
</html>