<div class="prospects form">
<?php echo $this->Form->create('Prospect'); ?>
	<fieldset>
		<legend><?php echo __('Edit Prospect'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('url');
		echo $this->Form->input('score');
		echo $this->Form->input('google_maps_url');
		echo $this->Form->input('state_id');
		echo $this->Form->input('search_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Prospect.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Prospect.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Prospects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Searches'), array('controller' => 'searches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Search'), array('controller' => 'searches', 'action' => 'add')); ?> </li>
	</ul>
</div>
