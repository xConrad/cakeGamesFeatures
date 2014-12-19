
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('Game list'), array('controller' => 'games', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index'), array('class' => '')); ?></li> 
			    <li class="list-group-item"><?php echo $this->Html->link(__('New Game Feature'), array('action' => 'add'), array('class' => '')); ?></li>

			</ul>
			
		</div>
		
	</div>
	
	<div id="page-content" class="col-sm-9">

		<div class="gameFeatures index">
		
			<h2><?php echo __('Game Features'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('engine'); ?></th>
							<th><?php echo $this->Paginator->sort('plateform'); ?></th>
							<th><?php echo $this->Paginator->sort('game_id'); ?></th>
							<th><?php echo $this->Paginator->sort('feature_id'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($gameFeatures as $gameFeature): ?>
	<tr>
		<td><?php echo h($gameFeature['GameFeature']['engine']); ?>&nbsp;</td>
		<td><?php echo h($gameFeature['GameFeature']['plateform']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($gameFeature['Game']['title'], array('controller' => 'games', 'action' => 'view', $gameFeature['Game']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($gameFeature['Feature']['title'], array('controller' => 'features', 'action' => 'view', $gameFeature['Feature']['id'])); ?>
		</td>
		<td><?php echo h($gameFeature['GameFeature']['created']); ?>&nbsp;</td>
		<td><?php echo h($gameFeature['GameFeature']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gameFeature['GameFeature']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gameFeature['GameFeature']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gameFeature['GameFeature']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $gameFeature['GameFeature']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>
			
		</div>
	
	</div>

</div>