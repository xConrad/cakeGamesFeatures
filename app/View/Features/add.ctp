<div class="features form">
<?php echo $this->Form->create('Feature'); ?>
	<fieldset>
		<legend><?php echo __('Add Feature'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Features'), array('action' => 'index')); ?></li>
	</ul>
</div>
