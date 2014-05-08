<div class="collaborations view">
<h2><?php echo __('Collaboration'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($collaboration['Collaboration']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($collaboration['User']['username'], array('controller' => 'users', 'action' => 'view', $collaboration['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Search'); ?></dt>
		<dd>
			<?php echo $this->Html->link($collaboration['Search']['name'], array('controller' => 'searches', 'action' => 'view', $collaboration['Search']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($collaboration['Collaboration']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($collaboration['Collaboration']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($collaboration['Collaboration']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Collaboration'), array('action' => 'edit', $collaboration['Collaboration']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Collaboration'), array('action' => 'delete', $collaboration['Collaboration']['id']), null, __('Are you sure you want to delete # %s?', $collaboration['Collaboration']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Collaborations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collaboration'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Searches'), array('controller' => 'searches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Search'), array('controller' => 'searches', 'action' => 'add')); ?> </li>
	</ul>
</div>
