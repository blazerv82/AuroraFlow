<?php require_once('website.core/header.php'); ?>

<main class="container d-flex-column">

    <div class="flex-container-full">

        <?php get_tile_custom('tri_banner', 'website.tile/banner', '.php', 
                [APP_NAME, LOGO, 'Features'] ); ?>

        <div class="flex-container-full theme-light-hc vl-8 o-auto my-large px-large">
        
            <div class="header-object t-48 border-thin-b">
                <div class="d-flex-row d-flex-center px-medium">
                    <span class="material-icons-round t-48 px-small">menu</span>
                    AFF Features
                </div>
            </div>

            <div class="section-object d-flex-column py-medium">

                <a class="nav-item w-auto mb-small" href="<?php core_link('website.tile/content/message'); ?>">
                    <div class="badge-container py-small t-32">
                        <div class="inline-code-object border-info-classic">.message-object</div>
                        <div class="badge">
                            <span class="material-icons-round px-small">help</span>
                            10.0
                        </div>
                    </div>
                </a>

                <a class="nav-item w-auto mb-small" href="<?php core_link('website.tile/content/badges'); ?>">
                    <div class="badge-container py-small t-32">
                        <div class="inline-code-object border-info-classic">.badge-container</div>
                        <div class="px-medium">and</div>
                        <div class="inline-code-object border-info-classic">.badge</div>
                        <div class="badge">
                            <span class="material-icons-round px-small">help</span>
                            10.0
                        </div>
                    </div>
                </a>

                <a class="nav-item w-auto mb-small" href="<?php core_link('website.tile/content/tile'); ?>">
                    <div class="badge-container py-small t-32">
                        <div class="inline-code-object border-info-classic">.tile</div>
                        <div class="badge">
                            <span class="material-icons-round px-small">new_releases</span>
                            12.0
                        </div>
                    </div>
                </a>

            </div>

            <div class="header-object t-48 border-thin-b">
                <div class="d-flex-row d-flex-center px-medium">
                    <span class="material-icons-round t-48 px-small">code</span>
                    HTML, CSS, JS Elements
                </div>
            </div>

            <div class="section-object d-flex-column py-medium">

                <a class="nav-item w-auto mb-small"  href="<?php core_link('website.tile/content/buttons'); ?>">
                    <div class="badge-container py-small t-32">
                        <div class="px-medium">HTML</div>
                        <div class="inline-code-object border-info-classic">button</div>
                        <div class="badge">
                            <span class="material-icons-round px-small">help</span>
                            10.0
                        </div>
                    </div>
                </a>

                <a class="nav-item w-auto mb-small" href="<?php core_link('website.tile/content/forms'); ?>">
                    <div class="badge-container py-small t-32">
                        <div class="px-medium">HTML</div>
                        <div class="inline-code-object border-info-classic">form</div>
                        <div class="badge">
                            <span class="material-icons-round px-small">help</span>
                            10.0
                        </div>
                    </div>
                </a>

                <a class="nav-item w-auto mb-small" href="<?php core_link('website.tile/content/animations'); ?>">
                    <div class="badge-container py-small t-32">
                        <div class="px-medium">CSS</div>
                        <div class="inline-code-object border-info-classic">animations</div>
                        <div class="badge">
                            <span class="material-icons-round px-small">help</span>
                            10.0
                        </div>
                    </div>
                </a>
                
            </div>

            <div class="header-object t-48 border-thin-b">
                <div class="d-flex-row d-flex-center px-medium">
                    <span class="material-icons-round t-48 px-small">brightness_5</span>
                    Sunset Features
                </div>
            </div>

            <div class="section-object d-flex-column py-medium">

                <a class="nav-item w-auto mb-small" href="<?php core_link('website.tile/content/flex'); ?>">
                    <div class="badge-container py-small t-32">
                        <div class="inline-code-object border-info-classic">.flex-container</div>
                        <div class="px-medium">and</div>
                        <div class="inline-code-object border-info-classic">.spaced-object</div>
                        <div class="badge">
                            10.0 - 12.0
                        </div>
                    </div>
                </a>

            </div>

        </div>

    </div>
</div>

</body>
</html>