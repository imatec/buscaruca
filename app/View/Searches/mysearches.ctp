<div class="searches index">
	<h2><?php echo __('My Searches'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-condensed">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($searches as $search): ?>
	<tr>
		<td><?php echo h($search['Search']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(h($search['Search']['name']), '/searches/view/'.$search['Search']['id']); ?>&nbsp;</td>
		<td><?php echo h($search['Search']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $search['Search']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $search['Search']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $search['Search']['id']), null, __('Are you sure you want to delete # %s?', $search['Search']['id'])); ?>
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
	<ul class="pagination">
	<?php
		echo $this->Paginator->prev('&laquo;', array(), null, array('tag' => 'li'));
		echo $this->Paginator->numbers(array('before' => '<li>', 'after' => '</li>'));
		echo $this->Paginator->next('&raquo;', array(), null, array('tag' => 'li'));
	?>
	</ul>
</div>