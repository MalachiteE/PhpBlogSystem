<?php include 'http://localhost/PhpBlogSystem/header.php' ?>

<!-- @todo must return message for mistake -->
<div class="row">
    <h4 class="col s12">Add tank</h4>
    <form action="http://localhost/PhpBlogSystem/route.php?module=Tank&method=insert" method="post" class="col s6" enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col s4">
                <!-- @todo must be set values -->
                <input id="name" type="text" name="name" class="validate" value="" required="required">
                <label for="name">Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <textarea id="descr" name="descr" class="materialize-textarea"></textarea>
                <label for="descr">Description</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <div>Attach image</div>
                <input id="img" type="file" name="img" class="validate">
            </div>
        </div>
      <div class="row">
        <div class="input-field col s12">
            <input id="submit" type="submit" class="validate waves-effect waves-light btn" value="add">
        </div>
      </div>
    </form>
</div>

<?php include 'http://localhost/PhpBlogSystem/footer.php' ?>