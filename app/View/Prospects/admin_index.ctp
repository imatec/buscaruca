<div class="prospects index">
	<h2><?php echo __('Prospects'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('score'); ?></th>
			<th><?php echo $this->Paginator->sort('google_maps_url'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('search_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($prospects as $prospect): ?>
	<tr>
		<td><?php echo h($prospect['Prospect']['id']); ?>&nbsp;</td>
		<td><?php echo h($prospect['Prospect']['name']); ?>&nbsp;</td>
		<td><?php echo h($prospect['Prospect']['url']); ?>&nbsp;</td>
		<td><?php echo h($prospect['Prospect']['score']); ?>&nbsp;</td>
		<td><?php echo h($prospect['Prospect']['google_maps_url']); ?>&nbsp;</td>
		<td><?php echo h($prospect['Prospect']['state_id']); ?>&nbsp;</td>
		<td><?php echo h($prospect['Prospect']['created']); ?>&nbsp;</td>
		<td><?php echo h($prospect['Prospect']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($prospect['Search']['name'], array('controller' => 'searches', 'action' => 'view', $prospect['Search']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $prospect['Prospect']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $prospect['Prospect']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $prospect['Prospect']['id']), null, __('Are you sure you want to delete # %s?', $prospect['Prospect']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Prospect'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Searches'), array('controller' => 'searches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Search'), array('controller' => 'searches', 'action' => 'add')); ?> </li>
	</ul>
</div>
