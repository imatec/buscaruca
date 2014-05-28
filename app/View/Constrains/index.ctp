<div class="constrains index">
	<h2><?php echo __('Constrains'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('search_id'); ?></th>
			<th><?php echo $this->Paginator->sort('expected_value'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($constrains as $constrain): ?>
	<tr>
		<td><?php echo h($constrain['Constrain']['id']); ?>&nbsp;</td>
		<td><?php echo h($constrain['Constrain']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($constrain['Search']['name'], array('controller' => 'searches', 'action' => 'view', $constrain['Search']['id'])); ?>
		</td>
		<td><?php echo h($constrain['Constrain']['expected_value']); ?>&nbsp;</td>
		<td><?php echo h($constrain['Constrain']['description']); ?>&nbsp;</td>
		<td><?php echo h($constrain['Constrain']['created']); ?>&nbsp;</td>
		<td><?php echo h($constrain['Constrain']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $constrain['Constrain']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $constrain['Constrain']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $constrain['Constrain']['id']), null, __('Are you sure you want to delete # %s?', $constrain['Constrain']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Constrain'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Searches'), array('controller' => 'searches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Search'), array('controller' => 'searches', 'action' => 'add')); ?> </li>
	</ul>
</div>
