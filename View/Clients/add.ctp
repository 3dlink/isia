<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('service_id');
		echo $this->Form->input('schedule');
		echo $this->Form->input('price');
		echo $this->Form->input('lat');
		echo $this->Form->input('long');
		echo $this->Form->input('photo_1');
		echo $this->Form->input('photo_2');
		echo $this->Form->input('payment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Promotions'), array('controller' => 'promotions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promotion'), array('controller' => 'promotions', 'action' => 'add')); ?> </li>
	</ul>
</div>