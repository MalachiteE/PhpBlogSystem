<?php
function breadcrumbs($navs){ ?>
    <nav class="Breadcrumbs">
        <div class="col s12">
            <?php
            foreach ($navs as $nav): ?>
                <a href="<?= $nav['url'] ?>" class="breadcrumb"><?= $nav['name'] ?></a>
            <?php 
            endforeach; ?>
        </div>
    </nav>
<?php 
} ?>
