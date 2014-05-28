<div class="constrains form">
<?php echo $this->Form->create('Constrain'); ?>
	<fieldset>
		<legend><?php echo __('Edit Constrain'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Constrain.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Constrain.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Constrains'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Searches'), array('controller' => 'searches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Search'), array('controller' => 'searches', 'action' => 'add')); ?> </li>
	</ul>
</div>
