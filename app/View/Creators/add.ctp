<div class="creators form">
<?php echo $this->Form->create('Creator'); ?>
	<fieldset>
		<legend><?php echo __('Add Creator'); ?></legend>
	<?php
		echo $this->Form->input('name', array('class' => 'form-control'));
	?>
	<?php
		echo $this->Form->input('details', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

