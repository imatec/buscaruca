<div class="constrains form">
<?php echo $this->Form->create('Constrain'); ?>
	<fieldset>
		<legend><?php echo __('Add Constrain'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('search_id');
		echo $this->Form->input('expected_value');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Constrains'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Searches'), array('controller' => 'searches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Search'), array('controller' => 'searches', 'action' => 'add')); ?> </li>
	</ul>
</div>
