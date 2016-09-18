<?php session_start() ?>

<?php
if(!$_SESSION){
    header("Location: ../index.php");
}
?>

<?php include realpath('../header.php') ?>

<?php
include '_breadcrumbs.php';
$nav = [[ 'url'=>'tanks.php', 'name'=>'Tanks' ], [ 'url'=>'addTank.php', 'name'=>'Add tank' ]];
breadcrumbs($nav); 
?>

<!-- @todo must return message for mistake -->
<div class="SubmitForm row">
    <h4 class="SubmitForm__title col s12 center">Add tank</h4>
    
    <form class="SubmitForm__form col push-s0 s12 push-m2 m8 push-l4 l4" action="../route.php?module=Tank&method=insert" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="SubmitForm__field input-field col s12">
                <!-- @todo must be set values -->
                <input id="name" type="text" name="name" class="SubmitForm__input validate" value="" required="required">
                <label class="SubmitForm__label" for="name">Name</label>
            </div>
            <div class="SubmitForm__field input-field col s12">
                <textarea id="descr" name="descr" class="SubmitForm__input materialize-textarea"></textarea>
                <label class="SubmitForm__label" for="descr">Description</label>
            </div>
            <div class="SubmitForm__field input-field col s12">
                <div class="SubmitForm__label">Attach image</div>
                <input id="img" type="file" name="img" class="validate">
            </div>
            <div class="SubmitForm__field input-field col s12">
                <input id="submit" type="submit" class="validate waves-effect waves-light btn-large width-100" value="add">
            </div>
        </div>
    </form>
    
</div>

<?php include realpath('../footer.php') ?>