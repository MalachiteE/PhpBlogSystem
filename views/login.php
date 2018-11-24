
<div class="Login Form row">
    
    <h4 class="Form__title col s12 center">Login</h4>
    
    <form class="Form__fields col push-s0 s12 push-m2 m8 push-l4 l4" action="route.php?module=Login&method=authenticate" method="post">
        <div class="row">
            <div class="Form__field input-field col s12">
              <input id="email" type="text" name="email" class="Form__input validate" />
              <label class="Form__label" for="email">Email</label>
            </div>
            <div class="Form__field input-field col s12">
              <input id="password" type="password" name="password" class="Form__input validate" />
              <label class="Form__label" for="password">Password</label>
            </div>
            <div class="Form__field col s12">
                <div class="btn-large input-field width-100">
                    <input id="submit" type="submit" class="Form__btn validate waves-effect waves-light" value="login" />
                    <i class="material-icons right">send</i>
                </div>
            </div>
        </div>
        <?= @$_SESSION['error'] ? $_SESSION['error']:'' ?>
    </form>
    
    <div class="col s12">
        <div class="col push-s0 s12 push-m2 m8 push-l4 l4">
            <a class="Form__back-link right" href="views/registration.php">Do you have a registration?</a>
        </div>
    </div>
    
</div>

