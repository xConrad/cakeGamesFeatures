
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Game'), array('action' => 'edit', $game['Game']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Game'), array('action' => 'delete', $game['Game']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $game['Game']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Games'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Game'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Creators'), array('controller' => 'creators', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Creator'), array('controller' => 'creators', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Game Features'), array('controller' => 'game_features', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Game Feature'), array('controller' => 'game_features', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="games view">

			<h2><?php  echo __('Game'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($game['Game']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Creator'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($game['Creator']['id'], array('controller' => 'creators', 'action' => 'view', $game['Creator']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Feature'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($game['Feature']['id'], array('controller' => 'features', 'action' => 'view', $game['Feature']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Title'); ?></strong></td>
		<td>
			<?php echo h($game['Game']['title']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Discription'); ?></strong></td>
		<td>
			<?php echo h($game['Game']['discription']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Filename'); ?></strong></td>
		<td>
			<?php echo h($game['Game']['filename']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($game['Game']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($game['Game']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($game['User']['id'], array('controller' => 'users', 'action' => 'view', $game['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Game Features'); ?></h3>
				
				<?php if (!empty($game['GameFeature'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Engine'); ?></th>
		<th><?php echo __('Plateform'); ?></th>
		<th><?php echo __('Game Id'); ?></th>
		<th><?php echo __('Feature Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($game['GameFeature'] as $gameFeature): ?>
		<tr>
			<td><?php echo $gameFeature['id']; ?></td>
			<td><?php echo $gameFeature['engine']; ?></td>
			<td><?php echo $gameFeature['plateform']; ?></td>
			<td><?php echo $gameFeature['game_id']; ?></td>
			<td><?php echo $gameFeature['feature_id']; ?></td>
			<td><?php echo $gameFeature['created']; ?></td>
			<td><?php echo $gameFeature['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'game_features', 'action' => 'view', $gameFeature['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'game_features', 'action' => 'edit', $gameFeature['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'game_features', 'action' => 'delete', $gameFeature['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $gameFeature['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Game Feature'), array('controller' => 'game_features', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
