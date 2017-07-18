<?php use Roots\Sage\Titles; ?>

<?php if (!is_home()&&!is_page('repositorio')&&!is_page('imagenes')): ?>
	<div class="page-header">
	  <h1><?= Titles\title(); ?></h1>
	</div>
<?php endif ?>

