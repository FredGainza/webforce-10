<!-- Ici nous ajoutons une notifications lorsque l'on a une donnée dans le tab $_SESSION -->

<?php if (!empty($_SESSION)) : ?>
    <?php foreach ($_SESSION as $k => $v) : ?>
    
    
        <div class="toast" style="position: absolute; top: 0; right: 0;  >
            <div class="toast-header">
                <strong class="mr-auto"><?= $k; ?></strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <?= $v; ?>
            </div>
        </div>

    <?php endforeach; ?>
    <?php // je vide les sessions
        unset ($_SESSION['errors']);
        unset ($_SESSION['success']);
    ?>
<?php endif; ?>