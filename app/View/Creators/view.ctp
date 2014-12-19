<div class="creators view">
<h2><?php echo __('Creator'); ?></h2>
	<dl>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($creator['Creator']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($creator['Creator']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($creator['Creator']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Games'); ?></h3>
	<?php if (!empty($creator['Game'])): ?>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
	<tr>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Discription'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($creator['Game'] as $game): ?>
		<tr>
			<td><?php echo $game['title']; ?></td>
			<td><?php echo $game['discription']; ?></td>
			<td><?php echo $game['created']; ?></td>
			<td><?php echo $game['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'games', 'action' => 'view', $game['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'games', 'action' => 'edit', $game['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'games', 'action' => 'delete', $game['id']), array(), __('Are you sure you want to delete # %s?', $game['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
