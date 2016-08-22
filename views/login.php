<?php 
include 'http://localhost/PhpBlogSystem/header.php' ?>
<div class="row">
    <h4 class="col s12">Login</h4>
    <form action="http://localhost/PhpBlogSystem/route.php?module=Login&method=authentication" method="post" class="col s6">
        <div class="row">
            <div class="input-field col s6">
              <input id="email" type="text" name="email" class="validate">
              <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
              <input id="password" type="password" name="password" class="validate">
              <label for="password">Password</label>
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

