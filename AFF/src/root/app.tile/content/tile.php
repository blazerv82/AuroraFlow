<?php require_once('../../app.core/header.php'); ?>

<main class="container theme-light-hc flex-container d-flex-column">

    <div class="header-object t-48 border-thin-b">
        <div class="inline-code-object border-info-classic">.tile</div>
    </div>

    <div class="content-object w-auto px-xlarge py-xlarge t-font-thin">
        <div class="t-20 t-font-reg my-large my-none-b d-flex-row d-flex-align-h">
            TILE
            <span class="material-icons-round">chevron_right</span>
            GRID EXAMPLE
        </div>
        <hr class="border-small-t border-black">
        <div class="tile-container t-32 py-small round-small shadow">

            <div class="tile -row theme-dark round-small border-thin">
                
                <div class="tile-image">
                    <img src="../../app.core/img/music_albums/rebirth.png" class=""/>
                </div>
                <div class="tile-body t-24 px-medium py-small">
                    Rebirth: The Light Awakens, an album released in 2017, is a concept album focusing on metal sounding music
                    with a cosmic twist.
                </div>

            </div>

            <div class="tile theme-primary round-medium border-thin">
                
                <div class="tile-image">
                    <img src="../../app.core/img/music_albums/TRF.png" class="-short"/>
                </div>
                <div class="tile-body px-small py-small">The [Redacted] Files</div>
                <div class="tile-footer border-thin-t px-small py-small">2016</div>

            </div>

            <div class="tile theme-warning border-thin">
                
                <div class="tile-body px-small py-small">Digital Conversion 3: Press Play</div>
                <div class="tile-image border-thin-t">
                    <img src="../../app.core/img/music_albums/DC3.png" class=""/>
                </div>

            </div>

            <div class="tile theme-success round-large border-thin">
                
                <div class="tile-image bg-green">
                    <img src="../../app.core/img/music_albums/harmonyinchaosv2.png" class="round-large"/>
                </div>
                <div class="tile-body px-small py-small border-thin-b bg-green round-large-b">Harmony://Chaos</div>
                <div class="tile-footer px-small py-small">Ongoing</div>

            </div>

            <div class="tile -row theme-rp border-thin">

                <div class="tile-image">
                    <img src="../../app.core/img/music_albums/atomos.png" class=""/>
                </div>

            </div>
        </div>
    </div>

    <div class="content-object w-auto px-xlarge py-xlarge t-font-thin">
        <div class="t-20 t-font-reg my-large my-none-b d-flex-row d-flex-align-h">
            TILE
            <span class="material-icons-round">chevron_right</span>
            IMAGES
            <span class="material-icons-round">chevron_right</span>
            CONTAIN OR CENTER?
        </div>
        <hr class="border-small-t border-black">
        <div class="tile-container -vxl t-32 py-small round-small shadow">

            <div class="tile theme-info">
                
                <div class="tile-header t-center px-small py-small"> 
                   <div class="inline-code-object border-info-classic">-center</div>
                </div>
                <div class="tile-image">
                    <img src="../../app.core/img/music_albums/v18.png" class="-center round-circle"/>
                </div>
                <div class="tile-footer t-center t-24 px-small py-small">
                    can apply
                    <div class="inline-code-object">round-*</div>
                    classes
                </div>

            </div>

            <div class="tile theme-success">
                
                <div class="tile-header t-center px-small py-small"> 
                   <div class="inline-code-object border-info-classic">-contain</div>
                </div>
                <div class="tile-image">
                    <img src="../../app.core/img/music_albums/v18.png" class="-contain -short"/>
                </div>
                <div class="tile-footer t-center t-24 px-small py-small">
                    can NOT apply
                    <div class="inline-code-object">round-*</div>
                    classes
                </div>

            </div>

            <div class="tile theme-danger">
                
                <div class="tile-header t-center px-small py-small"> 
                   <div class="inline-code-object border-info-classic">-short</div>
                </div>
                <div class="tile-image">
                    <img src="../../app.core/img/music_albums/v18.png" class="-short"/>
                </div>
                <div class="tile-footer t-center t-24 px-small py-small">
                    makes image 250px in height only
                </div>

            </div>

            <div class="tile theme-warning">
                
                <div class="tile-header t-center px-small py-small"> 
                    <div class="inline-code-object border-info-classic">nothing</div>
                </div>
                <div class="tile-image">
                    <img src="../../app.core/img/music_albums/v18.png" class=""/>
                </div>
                <div class="tile-footer t-center t-24 px-small py-small">
                    normal behavior
                </div>

            </div>

        </div>
    </div>

    <div class="content-object w-auto px-xlarge py-xlarge t-font-thin">
        
        <div class="t-font-reg my-large my-none-b d-flex-row d-flex-center-all">
            HOW TO USE
            <span class="material-icons-round">chevron_right</span>
            PARENT ELEMENT
        </div>
        <hr class="border-small-t border-black">
        <div class="flex-container d-flex-row section-object py-small round-small shadow">

            <div class="py-small">
                <span class="inline-code-object border-info-classic">.tile-container</span>
                A parent element that will hold the tiles <br/><br />
                - Use a standalone <span class="inline-code-object border-info-classic">div</span> element for the container.
                Mixing it with other classes may yield unexpected results. <br/>
                Will auto resize tiles found within based on screen size, unless an option is set to force sizing
            </div>
        </div>

        <div class="t-20 t-font-reg my-large my-none-b d-flex-row d-flex-center-all">
            PARENT ELEMENT
            <span class="material-icons-round">chevron_right</span>
            OPTIONS
        </div>
        <hr class="border-small-t border-black">
        <div class="flex-container d-flex-row section-object t-20 py-small round-small shadow">

            <div class="py-small">
                <span class="inline-code-object border-info-classic">-vs</span> Force sizing to one tile per row <br/>
                <span class="inline-code-object border-info-classic">-vm</span> Force sizing to two tiles per row <br/>
                <span class="inline-code-object border-info-classic">-vl</span> Force sizing to three tiles per row <br/>
                <span class="inline-code-object border-info-classic">-vxl</span> Force sizing to four tiles per row <br/>
                <span class="inline-code-object border-info-classic">-v2xl</span> Force sizing to five tiles per row <br/>
                <span class="inline-code-object border-info-classic">-no-gap</span> Remove all spacing between tiles <br/>
                
            </div>
        </div>
        

        <div class="t-20 t-font-reg my-large my-none-b d-flex-row d-flex-center-all">
            HOW TO USE
            <span class="material-icons-round">chevron_right</span>
            CARD
        </div>
        <hr class="border-small-t border-black">
        <div class="text-object t-20 py-small px-medium round-small shadow">

            <div class="py-small">
                <span class="inline-code-object border-info-classic">.tile</span>
                The card element itself. <br/>
                - The height of a tile is determined via content <br/>
                - Can by styled <br/>
                - Shows in a column layout by default, use the <span class="inline-code-object border-info-classic">-row</span> option to switch the layout
            </div>
        </div>

        <div class="t-20 t-font-reg my-large my-none-b d-flex-row d-flex-center-all">
            CARD
            <span class="material-icons-round">chevron_right</span>
            OPTIONS
        </div>
        <hr class="border-small-t border-black">
        <div class="flex-container d-flex-row section-object t-20 py-small round-small shadow">
    
            <div class="py-small">
                <span class="inline-code-object border-info-classic">-row</span> Show content in a row rather than column layout <br/>
                
            </div>
        </div>

    </div>

    


</main>
</body>
</html>