<div class="posts form">
<?php echo $this->Form->create('Game'); ?>
	<fieldset>
		<legend><?php echo __('Add a Game Comment'); ?></legend>
		
					<div class="form-group">
						<?php echo $this->Form->input('creator_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					<div class="form-group">
						<?php echo $this->Form->input('game_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					<div class="form-group">
						<?php echo $this->Form->input('comment_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<?php
	$this->Js->get('#GameCreatorId')->event('click', 
	$this->Js->request(array(
	'controller'=>'games',
	'action'=>'getByCreator'
	), array(
	'update'=>'#GameGameId',
	'async' => true,
	'method' => 'post',
	'dataExpression'=>true,
	'data'=> $this->Js->serializeForm(array(
	'isForm' => true,
	'inline' => true
	))
	))
	);
?>