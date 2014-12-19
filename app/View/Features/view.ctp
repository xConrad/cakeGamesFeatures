<div class="features view">
<h2><?php echo __('Feature'); ?></h2>
	<dl>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feature Name'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['feature_name']); ?>
			&nbsp;
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

