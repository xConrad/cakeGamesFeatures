<div id="sidebar" class="col-sm-3">
	<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('User list'), array('controller' => 'users','action' => 'index')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('Game list'), array('controller' => 'games', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('Feature list'), array('controller' => 'features', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('Creator list'), array('controller' => 'creators', 'action' => 'index')); ?> </li>
			    <li class="list-group-item"><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features','action' => 'add'), array('class' => '')); ?></li>
			</ul>
		
		</div>
		
</div>
<div id="page-content" class="col-sm-9">
<div class="features index">
	<h2><?php echo __('Features'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('feature_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($features as $feature): ?>
	<tr>
		<td><?php echo h($feature['Feature']['title']); ?>&nbsp;</td>
		<td><?php echo h($feature['Feature']['feature_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $feature['Feature']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $feature['Feature']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $feature['Feature']['id']), array(), __('Are you sure you want to delete # %s?', $feature['Feature']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

</div>
