<div class="index">
	<!--  --
	<h2 class="text-align-right"><?php echo __($modelo); ?></h2>
	<!--  -->
	<?php echo $this->Html->crearBuscar($controller, 'pagination', $mensaje, $band); ?>
	<div id="pagination">
		<?php if ($registros): ?>
			<?php include ROOT.'/app/View/App/tabla.ctp'; ?>
			<?php echo $this->Html->limitePaginador($controller, 'pagination', $pagina, $total, $limit); ?>
		<?php endif; ?>
	</div>
</div>
