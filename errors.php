<?php  if (count($errors) > 0) : ?>
	<div class="error alert alert-warning col-md-4 col-centered padding-bottom-md">
		<?php foreach ($errors as $error) : ?>
			<p align="center"><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
