<div class="prospects form">
<?php echo $this->Form->create('Prospect', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Add Prospect'); ?></legend>
	<?php
		echo $this->Form->input('name', array('class' => 'form-control'));
		echo $this->Form->input('url', array('class' => 'form-control'));
		echo $this->Form->input('score', array('class' => 'form-control'));
		echo $this->Form->input('google_maps_url', array('class' => 'form-control'));
		echo $this->Form->input('state_id', array('class' => 'form-control'));
		echo $this->Form->input('search_id', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-default'));?>
<?php echo $this->Form->end(); ?>
</div>