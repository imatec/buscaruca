<div class="metConstrains view">
<h2><?php echo __('Met Constrain'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($metConstrain['MetConstrain']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Constrain'); ?></dt>
		<dd>
			<?php echo $this->Html->link($metConstrain['Constrain']['name'], array('controller' => 'constrains', 'action' => 'view', $metConstrain['Constrain']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prospect'); ?></dt>
		<dd>
			<?php echo $this->Html->link($metConstrain['Prospect']['name'], array('controller' => 'prospects', 'action' => 'view', $metConstrain['Prospect']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($metConstrain['MetConstrain']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score'); ?></dt>
		<dd>
			<?php echo h($metConstrain['MetConstrain']['score']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($metConstrain['MetConstrain']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($metConstrain['MetConstrain']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Met Constrain'), array('action' => 'edit', $metConstrain['MetConstrain']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Met Constrain'), array('action' => 'delete', $metConstrain['MetConstrain']['id']), null, __('Are you sure you want to delete # %s?', $metConstrain['MetConstrain']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Met Constrains'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Met Constrain'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Constrains'), array('controller' => 'constrains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Constrain'), array('controller' => 'constrains', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prospects'), array('controller' => 'prospects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prospect'), array('controller' => 'prospects', 'action' => 'add')); ?> </li>
	</ul>
</div>
