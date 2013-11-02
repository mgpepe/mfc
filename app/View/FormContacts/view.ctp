<div class="formContacts view">
<h2><?php echo __('Form Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formContact['FormContact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($formContact['FormContact']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($formContact['FormContact']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($formContact['FormContact']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form Contact'), array('action' => 'edit', $formContact['FormContact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Form Contact'), array('action' => 'delete', $formContact['FormContact']['id']), null, __('Are you sure you want to delete # %s?', $formContact['FormContact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Contact'), array('action' => 'add')); ?> </li>
	</ul>
</div>
