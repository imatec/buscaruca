<div class="metConstrains form">
<?php echo $this->Form->create('MetConstrain'); ?>
	<fieldset>
		<legend><?php echo __('Add Met Constrain'); ?></legend>
	<?php
		echo $this->Form->input('constrain_id');
		echo $this->Form->input('prospect_id');
		echo $this->Form->input('value');
		echo $this->Form->input('score');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Met Constrains'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Constrains'), array('controller' => 'constrains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Constrain'), array('controller' => 'constrains', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prospects'), array('controller' => 'prospects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prospect'), array('controller' => 'prospects', 'action' => 'add')); ?> </li>
	</ul>
</div>
