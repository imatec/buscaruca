<div class="constrains view">
<h2><?php echo __('Constrain'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($constrain['Constrain']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($constrain['Constrain']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Search'); ?></dt>
		<dd>
			<?php echo $this->Html->link($constrain['Search']['name'], array('controller' => 'searches', 'action' => 'view', $constrain['Search']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expected Value'); ?></dt>
		<dd>
			<?php echo h($constrain['Constrain']['expected_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($constrain['Constrain']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($constrain['Constrain']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($constrain['Constrain']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Constrain'), array('action' => 'edit', $constrain['Constrain']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Constrain'), array('action' => 'delete', $constrain['Constrain']['id']), null, __('Are you sure you want to delete # %s?', $constrain['Constrain']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Constrains'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Constrain'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Searches'), array('controller' => 'searches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Search'), array('controller' => 'searches', 'action' => 'add')); ?> </li>
	</ul>
</div>
