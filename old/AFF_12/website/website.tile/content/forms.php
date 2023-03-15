<?php require_once('../../website.core/header.php'); ?>

<main class="container theme-light-hc flex-container d-flex-column">

    <div class="header-object t-48 border-small-b">
        HTML
        <div class="inline-code-object">form</div>
    </div>

    <div class="content-object w-auto px-xlarge t-font-thin">
        <div class="t-20 t-font-reg my-large my-none-b d-flex-row d-flex-center-all">
            FORM
            <span class="material-icons-round">chevron_right</span>
            ELEMENTS SHOWOFF
        </div>
        <hr class="border-small-t border-black">
        <div class="flex-container section-object py-small round-small shadow">

            <form class="form-container py-small" action="" method="" autocomplete="off">

                <div class="form-object">
                    <input type="text" name="task_input" id="task_input" placeholder="input field" 
                        class="form-input" />
                </div>

                <div class="form-object form-option">
                    <select name="task_type" id="task_type" class="">
                        <option value="3">Dropdown</option>
                        <option value="2">Options</option>
                        <option value="1">Even more options</option>
                    </select>
                </div>

                <div class="form-object">
                    <textarea type="text" name="task_input" id="task_input" 
                        placeholder="textarea" class="form-input"></textarea>
                </div>

                <div class="form-object">
                    <div class="form-input">
                        Radio
                        <hr class="border-thin border-black">
                        <input type="radio" name="num" value="1" checked> 1<br>
                        <input type="radio" name="num" value="2"> 2<br>
                        <input type="radio" name="num" value="3"> 3
                    </div>
                </div>

                <div class="form-object">
                    <div class="form-input">
                        Checkbox
                        <hr class="border-thin border-black">
                        <input type="checkbox" name="color" value="1" checked> red<br>
                        <input type="checkbox" name="color" value="2"> green<br>
                        <input type="checkbox" name="color" value="3"> blue
                    </div>
                </div>

                <div class="form-object">
                    <button name="new_task" class="btn-outline">Button</button>
                </div>
            </form>

        </div>
    </div>

</div>
</body>
</html>