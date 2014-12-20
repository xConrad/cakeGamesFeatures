
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Game.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Game.id'))); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Games'), array('action' => 'index')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Creators'), array('controller' => 'creators', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Game Features'), array('controller' => 'game_features', 'action' => 'index')); ?> </li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Edit Game'); ?></h2>

		
		<?php $uid = $this->Session->read('Auth.User.id'); ?>
		
			<?php echo $this->Form->create('Game', array('role' => 'form','type'=>'file')); ?>

				<fieldset>

			<div class="form-group">

			  
					
					<div class="form-group">
						<?php echo $this->Form->input('creator_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('feature_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					<?php
					  //let's load jquery libs from google
					  $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array('inline' => false));
					  $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('inline' => false));

					  //load file for this view to work on 'autocomplete' field
					  $this->Html->script('View/Games/edit', array('inline' => false));

					  //form with autocomplete class field
					  echo $this->Form->create();
					  echo $this->Form->input('title', array('class' => 'ui-autocomplete',
								   'id' => 'GameTitle','class' => 'form-control'));
					  echo $this->Form->end();?>
					
					
					
					<div class="form-group">
						<?php echo $this->Form->input('discription', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					
					<?php if (!empty($this->data['Contact']['filepath'])): ?>
							<div class="input">
								<label>Edit The Current Picture</label>
								<?php
								echo $this->Form->input('filepath', array('type'=>'hidden'));
								echo $this->Html->link(basename($this->data['Contact']['filepath']), $this->data['Contact']['filepath']);
								?>
							</div>
						<?php else: ?>
							<?php echo $this->Form->input('filename',array(
								'type' => 'file'
							)); ?>
						<?php endif; ?>
					
					
					<div class="form-group">
						<?php echo $this->Form->hidden('user_id', array('class' => 'form-control','default' => $uid)); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
					</div><!-- .form-group -->

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->