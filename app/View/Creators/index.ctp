<div id="sidebar" class="col-sm-3">
	<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('User list'), array('controller' => 'users','action' => 'index')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('Game list'), array('controller' => 'games', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('Feature list'), array('controller' => 'features', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('Creator list'), array('controller' => 'creators', 'action' => 'index')); ?> </li>
			    <li class="list-group-item"><?php echo $this->Html->link(__('New Creator'), array('controller' => 'creators','action' => 'add'), array('class' => '')); ?></li>
			</ul>
		
		</div>
		
</div>
<div id="page-content" class="col-sm-9">
<div class="creators index">
	<h2><?php echo __('Creators'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('creator_name'); ?></th>
			<th><?php echo $this->Paginator->sort('details'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($creators as $creator): ?>
	<tr>
		<td><?php echo h($creator['Creator']['name']); ?>&nbsp;</td>
		<td><?php echo h($creator['Creator']['details']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $creator['Creator']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $creator['Creator']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $creator['Creator']['id']), array(), __('Are you sure you want to delete # %s?', $creator['Creator']['id'])); ?>
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
