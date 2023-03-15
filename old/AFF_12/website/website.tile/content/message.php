<?php require_once('../../website.core/header.php'); ?>

<main class="container theme-light-hc flex-container d-flex-column">
    
    <div class="header-object t-48 border-small-b">
        <div class="inline-code-object">message-object</div>
        examples
    </div>
    
    <div class="flex-container section-object vm-10 o-auto">
        <div class="message-object theme-primary">I'm an important Message, designed to bring attention to something!</div>
        <div class="message-object theme-info">Maybe a basic info box, or a notification popup!</div>
        <div class="message-object theme-dark">Use themes for simple coloring!</div>
        <div class="message-object bg-lightyellow border-lightred border-small-y round-large">
            Or use various styling options to make your very own! I'm made with:<br/><br/>
            <div class="inline-code-container">bg-lightyellow border-lightred border-small-y round-large</div>
        </div>
        <div class="message-object theme-primary">
            <div class="inline-code-container">class="message-object"</div> to create me, I span the full width of my parent container
        </div>
    </div>

    <div class="header-object t-48 border-small-b">
        contextual theme examples
    </div>

    <div class="flex-container section-object vm-10 o-auto">

        <div class="message-object d-flex-row d-flex-center-items theme-primary">
            <span class="material-icons t-48 px-small">visibility</span>
            Primary
        </div>
        <div class="message-object d-flex-row d-flex-center-items theme-secondary">
            <span class="material-icons t-48 px-small">visibility</span>
            Secondary
        </div>

        <div class="flex-container d-flex-row section-object">
            <div class="message-object spaced-object d-flex-row vl-3 d-flex-center-items theme-success">
                <span class="material-icons t-48 px-small darkgreen">check_circle</span>
                Success
            </div>
            <div class="message-object spaced-object d-flex-row vl-3 d-flex-center-items theme-info">
                <span class="material-icons t-48 px-small darkcyan">campaign</span>
                Info
            </div>
            <div class="message-object spaced-object d-flex-row vl-3 d-flex-center-items theme-danger">
                <span class="material-icons t-48 px-small darkorange">priority_high</span>
                Danger
            </div>
            <div class="message-object spaced-object d-flex-row vl-3 d-flex-center-items theme-warning">
                <span class="material-icons t-48 px-small darkred">warning</span>
                Warning
            </div>
        </div>

    </div>

</main>
</body>
</html>