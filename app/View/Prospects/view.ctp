<div class="prospects view">
<h2><?php echo __('Prospect'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($prospect['Prospect']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($prospect['Prospect']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($prospect['Prospect']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score'); ?></dt>
		<dd>
			<?php echo h($prospect['Prospect']['score']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Google Maps Url'); ?></dt>
		<dd>
			<?php echo h($prospect['Prospect']['google_maps_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State Id'); ?></dt>
		<dd>
			<?php echo h($prospect['Prospect']['state_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($prospect['Prospect']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($prospect['Prospect']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Search'); ?></dt>
		<dd>
			<?php echo $this->Html->link($prospect['Search']['name'], array('controller' => 'searches', 'action' => 'view', $prospect['Search']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prospect'), array('action' => 'edit', $prospect['Prospect']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Prospect'), array('action' => 'delete', $prospect['Prospect']['id']), null, __('Are you sure you want to delete # %s?', $prospect['Prospect']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Prospects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prospect'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Searches'), array('controller' => 'searches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Search'), array('controller' => 'searches', 'action' => 'add')); ?> </li>
	</ul>
</div>
