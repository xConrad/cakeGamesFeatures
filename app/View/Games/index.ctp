
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
<?php echo $this->Form->create('Game',array('role' => 'form','type'=>'get')); ?>

				<li class="list-group-item"><?php echo $this->Html->link(__('New Game'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Creators'), array('controller' => 'creators', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Game Features'), array('controller' => 'game_features', 'action' => 'index'), array('class' => '')); ?></li> 
			
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="games index">
		
			<h2><?php echo __('Games'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('creator_id'); ?></th>
							<th><?php echo $this->Paginator->sort('feature_id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('description'); ?></th>
							<th><?php echo $this->Paginator->sort('Picture'); ?></th>
							<th><?php echo $this->Paginator->sort('user_id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($games as $game): ?>
<?php if($game['Game']['comment_id'] == 0 ){   ?>
 
	<tr>
		<td>
			<?php echo $this->Html->link($game['Creator']['name'], array('controller' => 'creators', 'action' => 'view', $game['Creator']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($game['Feature']['title'], array('controller' => 'features', 'action' => 'view', $game['Feature']['id'])); ?>
		</td>
		<td><?php echo h($game['Game']['title']); //php echo $this->Html->tag($game['Game']['filename'],null,array('class' => 'welcome'));?>&nbsp;</td>
		<td><?php echo h($game['Game']['discription']); ?>&nbsp;</td>
		
				<?php $file = '/' . $game['Game']['filename']; ?>
		<td><?php echo $this->Html->image($file,array('width'=>'200' ,'height'=>'250')); // ?></td> 
		<td>
			<?php echo $this->Html->link($game['User']['username'], array('controller' => 'users', 'action' => 'view', $game['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $game['Game']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $game['Game']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $game['Game']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $game['Game']['id'])); ?>
		</td>
	</tr>
		<?php }?>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->