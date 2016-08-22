<?php include 'http://localhost/PhpBlogSystem/header.php' ?>
<div class="row">
    <h4 class="col s12">Registration</h4>
    <form action="http://localhost/PhpBlogSystem/route.php?module=Registration&method=insert" method="post" class="col s6">
        <div class="row">
            <div class="input-field col s4">
                <!-- @todo must be set values -->
                <input id="username" type="text" name="username" class="validate" value="">
              <label for="username">Username</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
              <input id="email" type="email" name="email" class="validate">
              <label for="email">E-mail</label>
            </div>
        </div>
        <div class="row">
          <div class="input-field col s4">
            <input id="password" type="password" name="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4">
            <input id="repeat_password" type="password" name="repeat_password" class="validate">
            <label for="repeat_password">Repeat password</label>
          </div>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="submit" type="submit" class="validate waves-effect waves-light btn" value="submit">
        </div>
      </div>
    </form>
</div>
<?php include 'http://localhost/PhpBlogSystem/footer.php' ?>