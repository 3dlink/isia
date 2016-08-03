<div class="destinations index">
	<h2><?php echo __('Destinations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('lat'); ?></th>
			<th><?php echo $this->Paginator->sort('long'); ?></th>
			<th><?php echo $this->Paginator->sort('photo1'); ?></th>
			<th><?php echo $this->Paginator->sort('ranking'); ?></th>
			<th><?php echo $this->Paginator->sort('security'); ?></th>
			<th><?php echo $this->Paginator->sort('environment'); ?></th>
			<th><?php echo $this->Paginator->sort('budget'); ?></th>
			<th><?php echo $this->Paginator->sort('affluence'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($destinations as $destination): ?>
	<tr>
		<td><?php echo h($destination['Destination']['id']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['name']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['description']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['state']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['city']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['country']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['lat']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['long']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['photo1']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['ranking']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['security']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['environment']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['budget']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['affluence']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($destination['Category']['name'], array('controller' => 'categories', 'action' => 'view', $destination['Category']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $destination['Destination']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $destination['Destination']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $destination['Destination']['id']), array(), __('Are you sure you want to delete # %s?', $destination['Destination']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Destination'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumqs'), array('controller' => 'forumqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forumq'), array('controller' => 'forumqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Points'), array('controller' => 'points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add')); ?> </li>
	</ul>
</div>
