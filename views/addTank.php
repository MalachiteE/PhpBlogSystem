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
<div class="Form row">
    <h4 class="Form__title col s12 center">Add tank</h4>
    
    <form class="Form__fields col push-s0 s12 push-m2 m8 push-l4 l4" action="../route.php?module=Tank&method=insert" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="Form__field input-field col s12">
                <!-- @todo must be set values -->
                <input id="name" type="text" name="name" class="Form__input validate" value="" required="required" />
                <label class="Form__label" for="name">Name</label>
            </div>
            <div class="Form__field input-field col s12">
                <textarea id="descr" name="descr" class="Form__input materialize-textarea"></textarea>
                <label class="Form__label" for="descr">Description</label>
            </div>
            <div class="Form__field input-field col s12">
                <div class="Form__label">Attach image</div>
                <input id="img" type="file" name="img" class="validate" />
            </div>
            <div class="Form__field input-field col s12">
                <input id="submit" type="submit" class="validate waves-effect waves-light btn-large width-100" value="add" />
            </div>
        </div>
    </form>
    
</div>

<?php include realpath('../footer.php') ?>