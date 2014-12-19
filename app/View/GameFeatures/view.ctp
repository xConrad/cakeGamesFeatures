
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Game Feature'), array('action' => 'edit', $gameFeature['GameFeature']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Game Feature'), array('action' => 'delete', $gameFeature['GameFeature']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $gameFeature['GameFeature']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Game Features'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Game Feature'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="gameFeatures view">

			<h2><?php  echo __('Game Feature'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($gameFeature['GameFeature']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Engine'); ?></strong></td>
		<td>
			<?php echo h($gameFeature['GameFeature']['engine']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Plateform'); ?></strong></td>
		<td>
			<?php echo h($gameFeature['GameFeature']['plateform']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Game'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($gameFeature['Game']['title'], array('controller' => 'games', 'action' => 'view', $gameFeature['Game']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Feature'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($gameFeature['Feature']['id'], array('controller' => 'features', 'action' => 'view', $gameFeature['Feature']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($gameFeature['GameFeature']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($gameFeature['GameFeature']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
