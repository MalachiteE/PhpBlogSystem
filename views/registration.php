<?php include 'http://localhost/PhpBlogSystem/header.php' ?>

<!-- @todo must return message for mistake -->
<div class="SubmitForm row">
    
    <h4 class="SubmitForm__title col s12 center">Registration</h4>
    
    <form class="SubmitForm__form col push-s0 s12 push-m2 m8 push-l4 l4" action="http://localhost/PhpBlogSystem/route.php?module=Registration&method=insert" method="post">
        <div class="row">
            <div class="SubmitForm__field input-field col s12">
                <!-- @todo must be set values -->
                <input id="username" type="text" name="username" class="SubmitForm__input validate" value="">
                <label class="SubmitForm__label" for="username">Username</label>
            </div>
            <div class="SubmitForm__field input-field col s12">
                <input id="email" type="email" name="email" class="SubmitForm__input validate">
                <label class="SubmitForm__label" for="email">E-mail</label>
            </div>
            <div class="SubmitForm__field input-field col s12">
                <input id="password" type="password" name="password" class="SubmitForm__input validate">
                <label class="SubmitForm__label" for="password">Password</label>
            </div>
            <div class="SubmitForm__field input-field col s12">
                <input id="repeat_password" type="password" name="repeat_password" class="SubmitForm__input validate">
                <label class="SubmitForm__label" for="repeat_password">Repeat password</label>
            </div>
            <div class="SubmitForm__field col s12">
                <div class="btn-large input-field width-100">
                    <input id="submit" type="submit" class="SubmitForm__btn validate waves-effect waves-light" value="register">
                    <i class="material-icons right">send</i>
                </div>
            </div>
        </div>
    </form>
    
</div>

<?php include 'http://localhost/PhpBlogSystem/footer.php' ?>