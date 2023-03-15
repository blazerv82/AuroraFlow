<?php require_once('../../app.core/header.php'); ?>

<main class="container theme-light-hc flex-container d-flex-column">

    <div class="header-object t-48 border-small-b">
        <div class="inline-code-object">badge</div>
        examples
    </div>

    <div class="flex-container section-object vm-10 o-auto">
        <div class="message-object t-48 theme-primary">
            <div class="badge-container">
                I have a badge!
                <div class="badge bg-cyan">Im the badge</div>
            </div>
        </div>
        
        <div class="message-object badge-container theme-dark">
            <div class="badge-container">
                Aint that neat?
                <span class="badge">I think so!</span>
            </div>
        </div>
        
        <div class="message-object badge-container theme-dark">
            <div class="badge-container">
                Im a long long long long long long long long long long long long long long
                long long long long long long long long long long long long long long
                long long long long long long long long long long long message
                <span class="badge">44</span>
            </div>
        </div>

        <div class="text-object d-flex-row py-large">
            <button class="btn t-32 d-flex-row d-flex-center-items badge-container vl-3">
                Use me in
                <div class="badge bg-red">most</div>
            </button>
            <button class="btn d-flex-row d-flex-center-items badge-container">
                elements,
                <div class="badge-small bg-lightblue">buttons,</div>
            </button>
            <button class="btn t-32 d-flex-row d-flex-center-items badge-container vl-auto">
                And 
                <div class="badge theme-success">more!</div>
            </button>
        </div>
        <div class="text-object d-flex-row py-large">
            <button class="btn theme-danger d-flex-row d-flex-center-items badge-container">
                OH NO
                <div class="badge-small theme-danger-heavy">DANGER</div>
            </button>
            <button class="btn theme-success d-flex-row d-flex-center-items badge-container">
                YAY
                <div class="badge-small theme-success-heavy">SUCCESS</div>
            </button>
            <button class="btn theme-info d-flex-row d-flex-center-items badge-container">
                HERE YA GO CAP'N
                <div class="badge-small theme-info-heavy">INFO</div>
            </button>
            <button class="btn theme-warning d-flex-row d-flex-center-items badge-container">
                AHHHH
                <div class="badge-small theme-warning-heavy">WARNING</div>
            </button>
        </div>
    </div>

    <div class="content-object w-auto px-xlarge py-xlarge t-font-thin">
        <div class="t-20 t-font-reg my-large my-none-b d-flex-row d-flex-center-all">
            HOW TO USE
            <span class="material-icons-round">chevron_right</span>
            PARENT ELEMENT
        </div>
        <hr class="border-small-t border-black">
        <div class="flex-container d-flex-row section-object t-20 py-small round-small shadow">

            <div class="py-small">
                <span class="inline-code-object">badge-container</span>
                A parent element that will hold the badge <br/>
                - Use a standalone <span class="inline-code-object">div</span> element for the container.
                Mixing it with other classes may yield unexpected results.
            </div>
        </div>

        <div class="t-20 t-font-reg my-large my-none-b d-flex-row d-flex-center-all">
            HOW TO USE
            <span class="material-icons-round">chevron_right</span>
            BADGE
        </div>
        <hr class="border-small-t border-black">
        <div class="text-object t-20 py-small px-medium round-small shadow">

            <div class="py-small">
                <span class="inline-code-object">badge</span>
                The badge element itself. <br/>
                - Font sizing is smaller than the parent <br/>
                - Height of the badge will cover the top to bottom of the parent element <br/>
                - Displays to the rightmost side of the parent element
            </div>

            <div class="py-small">
                <span class="inline-code-object">badge-small</span>
                The badge element itself, but for smaller parent elements <br/>
                - Font sizing is smaller than the parent <br/>
                - Height of the badge will cover the top to bottom of the parent element <br/>
                - Displays to the right of the content preceding itself
            </div>
        </div>
    </div>

</div>
</body>
</html>