<div class="galleryImages view">
<h2><?php echo __('Gallery Image'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($galleryImage['GalleryImage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($galleryImage['GalleryImage']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Original Filename'); ?></dt>
		<dd>
			<?php echo h($galleryImage['GalleryImage']['original_filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extension'); ?></dt>
		<dd>
			<?php echo h($galleryImage['GalleryImage']['extension']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($galleryImage['GalleryImage']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($galleryImage['GalleryImage']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gallery Image'), array('action' => 'edit', $galleryImage['GalleryImage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gallery Image'), array('action' => 'delete', $galleryImage['GalleryImage']['id']), null, __('Are you sure you want to delete # %s?', $galleryImage['GalleryImage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Gallery Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery Image'), array('action' => 'add')); ?> </li>
	</ul>
</div>
