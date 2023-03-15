<?php require_once('../../app.core/header.php'); ?>

<main class="container theme-light-hc flex-container d-flex-column">

    <div class="header-object t-48 border-small-b">
        <div class="inline-code-object">flex-container</div>
        and
        <div class="inline-code-object">spaced-object</div>
    </div>

    <div class="content-object w-auto px-xlarge t-font-thin">
        <div class="t-20 t-font-reg my-large my-none-b d-flex-row d-flex-center-all">
            FLEX-CONTAINER
            <span class="material-icons-round">chevron_right</span>
            SPACING
        </div>
        <hr class="border-small-t border-black">
        <div class="flex-container d-flex-row section-object t-32 py-small round-small shadow">

            <div class="spaced-object vm-3 border-thin t-center">CONTENT</div>
            <div class="spaced-object vm-3 border-thin t-center">CONTENT</div>
            <div class="spaced-object vm-3 border-thin t-center">CONTENT</div>
            <div class="spaced-object vm-3 border-thin t-center">CONTENT</div>

        </div>
    </div>

    <div class="content-object w-auto px-xlarge t-font-thin">
        <div class="t-20 t-font-reg my-large my-none-b d-flex-row d-flex-center-all">
            FLEX-CONTAINER
            <span class="material-icons-round">chevron_right</span>
            NO SPACING
        </div>
        <hr class="border-small-t border-black">
        <div class="flex-container d-flex-row section-object t-32 py-small round-small shadow">

            <div class="content-object vm-3 border-thin t-center">CONTENT</div>
            <div class="content-object vm-3 border-thin t-center">CONTENT</div>
            <div class="content-object vm-3 border-thin t-center">CONTENT</div>
            <div class="content-object vm-3 border-thin t-center">CONTENT</div>

        </div>
    </div>

    <div class="content-object w-auto px-xlarge py-xlarge t-font-thin">
        <div class="t-20 t-font-reg my-large my-none-b d-flex-row d-flex-center-all">
            HOW TO USE
            <span class="material-icons-round">chevron_right</span>
            PARENT CONTAINER
        </div>
        <hr class="border-small-t border-black">
        <div class="flex-container d-flex-row section-object t-20 py-small round-small shadow">

            <div class="py-small">
                <span class="inline-code-object">flex-container</span>
                A parent element that will hold the content <br/>
                - It is reccomended to use <span class="inline-code-object">d-flex-row</span> for proper display
            </div>
        </div>
    </div>

    <div class="content-object w-auto px-xlarge t-font-thin">
        <div class="t-20 t-font-reg my-large my-none-b d-flex-row d-flex-center-all">
            HOW TO USE
            <span class="material-icons-round">chevron_right</span>
            SPACED-OBJECT
        </div>
        <hr class="border-small-t border-black">
        <div class="flex-container d-flex-row section-object t-20 py-small round-small shadow">

            <div class="py-small">
                <span class="inline-code-object">spaced-object</span>
                Any child element that will have spacing between elements <br/>
                - Margins are set for each object at 0.25 EM on the X axis
            </div>
        </div>
    </div>

</main>
</body>
</html>