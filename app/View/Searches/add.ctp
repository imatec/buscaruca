<div class="searches form">
<?php echo $this->Form->create('Search', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Add Search'); ?></legend>
	<?php
		echo $this->Form->input('name', array('class' => 'form-control'));
		echo $this->Form->input('creator_id', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-default'));?>
<?php echo $this->Form->end(); ?>
</div>