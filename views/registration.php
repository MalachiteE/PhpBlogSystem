<?php include realpath('../header.php') ?>

<!-- @todo must return message for mistake -->
<div class="Form row">
    
    <h4 class="Form__title col s12 center">Registration</h4>
    
    <form class="Form__fields col push-s0 s12 push-m2 m8 push-l4 l4" action="../route.php?module=Registration&method=insert" method="post">
        <div class="row">
            <div class="Form__field input-field col s12">
                <!-- @todo must be set values -->
                <input id="username" type="text" name="username" class="Form__input validate" value="" />
                <label class="Form__label" for="username">Username</label>
            </div>
            <div class="Form__field input-field col s12">
                <input id="email" type="email" name="email" class="Form__input validate" />
                <label class="Form__label" for="email">E-mail</label>
            </div>
            <div class="Form__field input-field col s12">
                <input id="password" type="password" name="password" class="Form__input validate" />
                <label class="Form__label" for="password">Password</label>
            </div>
            <div class="Form__field input-field col s12">
                <input id="repeat_password" type="password" name="repeat_password" class="Form__input validate" />
                <label class="Form__label" for="repeat_password">Repeat password</label>
            </div>
            <div class="Form__field col s12">
                <div class="btn-large input-field width-100">
                    <input id="submit" type="submit" class="Form__btn validate waves-effect waves-light" value="register" />
                    <i class="material-icons right">send</i>
                </div>
            </div>
        </div>
    </form>
    
</div>

<?php include realpath('../footer.php') ?>