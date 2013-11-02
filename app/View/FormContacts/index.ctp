<div class="formContacts index">
	<h2><?php echo __('Form Contacts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($formContacts as $formContact): ?>
	<tr>
		<td><?php echo h($formContact['FormContact']['id']); ?>&nbsp;</td>
		<td><?php echo h($formContact['FormContact']['email']); ?>&nbsp;</td>
		<td><?php echo h($formContact['FormContact']['message']); ?>&nbsp;</td>
		<td><?php echo h($formContact['FormContact']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formContact['FormContact']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formContact['FormContact']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formContact['FormContact']['id']), null, __('Are you sure you want to delete # %s?', $formContact['FormContact']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Form Contact'), array('action' => 'add')); ?></li>
	</ul>
</div>
