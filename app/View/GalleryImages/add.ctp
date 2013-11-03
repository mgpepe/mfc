<div class="galleryImages form">
<?php echo $this->Form->create('GalleryImage'); ?>
	<fieldset>
		<legend><?php echo __('Add Gallery Image'); ?></legend>
	<?php
		echo $this->Form->input('filename');
		echo $this->Form->input('original_filename');
		echo $this->Form->input('extension');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Gallery Images'), array('action' => 'index')); ?></li>
	</ul>
</div>
