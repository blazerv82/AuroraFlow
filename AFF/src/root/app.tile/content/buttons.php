<?php require_once('../../app.core/header.php'); ?>

<main class="container theme-light-hc flex-container d-flex-column"> 

    <div class="header-object t-48 border-small-b">
        HTML
        <div class="inline-code-object">button</div>
    </div>
    
    <div class="flex-container section-object vm-10 o-auto">

        <div class="content-object px-large py-large my-medium t-20 round-large shadow">
            <div class="py-small">
                <span class="inline-code-object">btn</span> 
                regular looking buttons / can use 
                <span class="inline-code-object">theme-*</span>
                classes
            </div>
            <div class="py-small">
                <span class="inline-code-object">btn-outline</span>
                outlined, transparent background buttons / can use 
                <span class="inline-code-object">theme-*</span>
                classes, but text will have to be colored manually
            </div>
        </div>

        <div class="text-object t-24 py-large">
            <span class="t-20 t-font-reg">FILLED</span>
            <hr class="border-small-t border-black">

            <button class="btn theme-primary">PRIMARY</button>
            <button class="btn theme-secondary">SECONDARY</button>
            <button class="btn theme-success">SUCCESS</button>
            <button class="btn theme-info">INFO</button>
            <button class="btn theme-warning">WARNING</button>
            <button class="btn theme-danger">DANGER</button>
        </div>

        <div class="text-object t-24 py-large bg-light">
            <span class="t-20 t-font-reg">OUTLINE</span>
            <hr class="border-small-t border-black">

            <button class="btn-outline theme-primary">PRIMARY</button>
            <button class="btn-outline theme-secondary">SECONDARY</button>
            <button class="btn-outline theme-success">SUCCESS</button>
            <button class="btn-outline theme-info">INFO</button>
            <button class="btn-outline theme-warning">WARNING</button>
            <button class="btn-outline theme-danger">DANGER</button>
        </div>

        

    </div>

</main>
</body>
</html>