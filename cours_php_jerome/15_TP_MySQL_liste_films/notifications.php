<!-- Ici nous ajoutons une notification lorsqu'ona une donnée 
dans le tableau $_SESSION -->

<?php if(!empty($_SESSION)) : ?>

	<?php foreach ($_SESSION as $k => $v) : ?>
		
		  <div class="toast" style="position: absolute; top: 0; right: 0;" >
		    <div class="toast-header">
		      <strong class="mr-auto"><?= $k ?></strong>
		      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		      </button>
		    </div>
		    <div class="toast-body">
		      <?= $v; ?>
		    </div>
		  </div>

	<?php endforeach; ?>
	<?php // Je vide les sessions
		unset($_SESSION['success']);
		unset($_SESSION['errors']);
	 ?>
<?php endif; ?>