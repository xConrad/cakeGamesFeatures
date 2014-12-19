
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('List Games'), array('action' => 'index')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Creators'), array('controller' => 'creators', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Creator'), array('controller' => 'creators', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Game Features'), array('controller' => 'game_features', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Game Feature'), array('controller' => 'game_features', 'action' => 'add')); ?> </li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add Game'); ?></h2>

		<div class="games form">
		
		<?php $uid = $this->Session->read('Auth.User.id'); ?>
		
			<?php echo $this->Form->create('Game', array('role' => 'form','type'=>'file')); ?>

				<fieldset>
				
					
			  <?php
			  $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array('inline' => false));
			  $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('inline' => false));
			  
			   $this->Html->script('View/Games/add', array('inline' => false));
			   
			  
			  ?>
					
										<div class="form-group">
						<?php echo $this->Form->input('creator_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					<div class="form-group">
						<?php echo $this->Form->input('feature_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
						<div class="form-group">
						<?php			  
						echo $this->Form->input('title', array('class' => 'ui-autocomplete',
						   'id' => 'GameTitle','class' => 'form-control'));
						   ?>
						  </div><!-- .form-group --
					<div class="form-group">
						<?php echo $this->Form->input('discription', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					<?php if (!empty($this->data['Game']['filepath'])): ?>
							<div class="input">
								<label>Uploaded File</label>
								<?php
								echo $this->Form->input('filepath', array('type'=>'hidden'));
								echo $this->Html->link(basename($this->data['Game']['filepath']), $this->data['Game']['filepath']);
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

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->