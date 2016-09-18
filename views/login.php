
<div class="Login SubmitForm row">
    
    <h4 class="SubmitForm__title col s12 center">Login</h4>
    
    <form class="SubmitForm__form col push-s0 s12 push-m2 m8 push-l4 l4" action="route.php?module=Login&method=authenticate" method="post">
        <div class="row">
            <div class="SubmitForm__field input-field col s12">
              <input id="email" type="text" name="email" class="SubmitForm__input validate" />
              <label class="SubmitForm__label" for="email">Email</label>
            </div>
            <div class="SubmitForm__field input-field col s12">
              <input id="password" type="password" name="password" class="SubmitForm__input validate" />
              <label class="SubmitForm__label" for="password">Password</label>
            </div>
            <div class="SubmitForm__field col s12">
                <div class="btn-large input-field width-100">
                    <input id="submit" type="submit" class="SubmitForm__btn validate waves-effect waves-light" value="login" />
                    <i class="material-icons right">send</i>
                </div>
            </div>
        </div>
    </form>
    
    <div class="col s12">
        <div class="col push-s0 s12 push-m2 m8 push-l4 l4">
            <a class="Login__registration-link right" href="views/registration.php">Do you have a registration?</a>
        </div>
    </div>
    
</div>

