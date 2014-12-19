<div id="sidebar" class="col-sm-3">
	<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('User list'), array('action' => 'index')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('Game list'), array('controller' => 'games', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('Creator list'), array('controller' => 'creators', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('Feature list'), array('controller' => 'features', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('Game feature list'), array('controller' => 'game_features', 'action' => 'index')); ?> </li>
			</ul>
		
		</div>
		
</div>
	
<div id="page-content" class="col-sm-9">
	<div class="users form">
		<?php echo $this->Form->create('User'); ?>
	<fieldset>
			<legend><?php echo __('Register an account'); ?></legend>
		<?php
			echo $this->Form->input('username', array('class' => 'form-control'));
			echo $this->Form->input('password', array('class' => 'form-control'));
			echo $this->Form->input('email', array('class' => 'form-control'));
		?>
	</fieldset>
		<?php echo $this->Form->end(__('Submit', array('class' => 'btn btn-large btn-primary'))); ?>
	</div>
</div>

