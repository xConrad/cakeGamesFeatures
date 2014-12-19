<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Game Comment'), array('action' => 'discussionadd')); ?> </li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
</div><!-- /#sidebar .col-sm-3 -->


<div id="page-content" class="col-sm-9">

		<div class="discussion index">
		
			<h2><?php echo __('Comments'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('creator_id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('comment'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($games as $game): ?>
<?php if($game['Game']['comment_id'] > 0 ){ ?>
	<tr>
		<td>
			<?php echo $this->Html->link($game['Creator']['name'], array('controller' => 'creators', 'action' => 'view', $game['Creator']['id'])); ?>
		
		</td>
		<td><?php echo $this->Html->link($game['Game']['title'], array('controller' => 'games', 'action' => 'view', $game['Game']['id'])); ?></td>
		
		<td><?php echo h($game['Comment']['title']); ?>&nbsp;</td>
		<td class="actions">
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