<div class="features form">
<?php echo $this->Form->create('Feature'); ?>
	<fieldset>
		<legend><?php echo __('Edit Feature'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class' => 'form-control'));
		echo $this->Form->input('type', array('class' => 'form-control'));
		echo $this->Form->input('feature_name', array('class' => 'form-control'));
		echo $this->Form->input('feature_description', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Feature.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Feature.id'))); ?></li>
		
	</ul>
</div>
