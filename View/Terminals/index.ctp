<div class="terminals index">
	<h2><?php echo __('Terminals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lat'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th><?php echo $this->Paginator->sort('schedule'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('contact'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($terminals as $terminal): ?>
	<tr>
		<td><?php echo h($terminal['Terminal']['id']); ?>&nbsp;</td>
		<td><?php echo h($terminal['Terminal']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($terminal['Country']['name'], array('controller' => 'countries', 'action' => 'view', $terminal['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($terminal['City']['name'], array('controller' => 'cities', 'action' => 'view', $terminal['City']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($terminal['State']['name'], array('controller' => 'states', 'action' => 'view', $terminal['State']['id'])); ?>
		</td>
		<td><?php echo h($terminal['Terminal']['lat']); ?>&nbsp;</td>
		<td><?php echo h($terminal['Terminal']['longitude']); ?>&nbsp;</td>
		<td><?php echo h($terminal['Terminal']['schedule']); ?>&nbsp;</td>
		<td><?php echo h($terminal['Terminal']['description']); ?>&nbsp;</td>
		<td><?php echo h($terminal['Terminal']['phone']); ?>&nbsp;</td>
		<td><?php echo h($terminal['Terminal']['contact']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $terminal['Terminal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $terminal['Terminal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $terminal['Terminal']['id']), array(), __('Are you sure you want to delete # %s?', $terminal['Terminal']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Terminal'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
	</ul>
</div>
