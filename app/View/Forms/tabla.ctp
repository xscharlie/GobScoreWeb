<table class='table table-condensed table-striped table-hover table-bordered'>
	<thead>
		<tr>
			<th> Id </th>
			<th> Nombre </th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($registros as $institucion): ?>
			<tr>
				<td><?php echo h($institucion['Form']['id']); ?>&nbsp;</td>
				<td><?php echo h($institucion['Form']['name']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $institucion['Institucion']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $institucion['Institucion']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $institucion['Institucion']['id']), array(), __('Are you sure you want to delete # %s?', $institucion['Institucion']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>