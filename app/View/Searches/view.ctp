<div class="searches view">
	<?php
		//debug($search);
	?>
	<h2><?php echo __('Search').' '.$search['Search']['name']; ?></h2>
	<div class="panel panel-default">
		<div class="panel-body">
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($search['Search']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($search['Search']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Creator Id'); ?></dt>
			<dd>
				<?php echo h($search['Search']['user_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($search['Search']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($search['Search']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
		</div>
	</div>
	<div class="panel panel-default">
  		<!-- Default panel contents -->
  		<div class="panel-heading">Prospects</div>
  		<div class="panel-body">
			<?php echo $this->html->link(
							$this->html->tag(
								'span',
								'',
								array(
									'class' => 'glyphicon glyphicon-plus',
									'escape' => false
									)
								).' Add new prospect',
							array(
								'controller' => 'Prospects',
								'action' => 'add',
								$search['Search']['id']
								),
							array(
								'class' => 'btn btn-primary btn-sm active',
								'role' => 'button',
								'escape' => false
								)
							); ?>
  		</div>
	<table cellpadding="0" cellspacing="0" class="table table-condensed">
	<tr>
			<th><?php echo __('name'); ?></th>
			<th><?php echo __('url'); ?></th>
			<th><?php echo __('score'); ?></th>
			<th><?php echo __('google_maps_url'); ?></th>
			<th><?php echo __('state_id'); ?></th>
			<th><?php echo __('created'); ?></th>
			<th><?php echo __('modified'); ?></th>
	</tr>
	<?php foreach ($search['Prospect'] as $prospect): ?>
	<tr>
		<td><?php echo h($prospect['name']); ?>&nbsp;</td>
		<td><?php echo $this->html->link(substr($prospect['url'], 0, 20), $prospect['url']); ?>&nbsp;</td>
		<td><?php echo h($prospect['score']); ?>&nbsp;</td>
		<td><?php echo h($prospect['google_maps_url']); ?>&nbsp;</td>
		<td><?php echo h($prospect['state_id']); ?>&nbsp;</td>
		<td><small><?php echo h($prospect['created']); ?>&nbsp;</small></td>
		<td><small><?php echo h($prospect['modified']); ?>&nbsp;</small></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>