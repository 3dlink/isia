<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('salt'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email_verified'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('ip_address'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('commentary_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ranking'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th><?php echo $this->Paginator->sort('interest_1'); ?></th>
			<th><?php echo $this->Paginator->sort('interest_2'); ?></th>
			<th><?php echo $this->Paginator->sort('interest_3'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['UserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $user['UserGroup']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['salt']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email_verified']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['active']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ip_address']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Commentary']['id'], array('controller' => 'commentaries', 'action' => 'view', $user['Commentary']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Country']['name'], array('controller' => 'countries', 'action' => 'view', $user['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['State']['name'], array('controller' => 'states', 'action' => 'view', $user['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['City']['name'], array('controller' => 'cities', 'action' => 'view', $user['City']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['ranking']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['photo']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['interest_1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['interest_2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['interest_3']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaries'), array('controller' => 'commentaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentary'), array('controller' => 'commentaries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumas'), array('controller' => 'forumas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foruma'), array('controller' => 'forumas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumqs'), array('controller' => 'forumqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forumq'), array('controller' => 'forumqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Login Tokens'), array('controller' => 'login_tokens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Login Token'), array('controller' => 'login_tokens', 'action' => 'add')); ?> </li>
	</ul>
</div>
