<div class="creators form">
<?php echo $this->Form->create('Creator'); ?>
	<fieldset>
		<legend><?php echo __('Edit Creator'); ?></legend>
	<?php
		echo $this->Form->input('name', array('class' => 'form-control'));
		echo $this->Form->input('id', array('class' => 'form-control'));
		echo $this->Form->input('details', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Creator.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Creator.id'))); ?></li>
	</ul>
</div>
