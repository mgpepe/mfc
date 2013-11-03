<div class="galleryImages index">
	<h2><?php echo __('Gallery Images'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('original_filename'); ?></th>
			<th><?php echo $this->Paginator->sort('extension'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($galleryImages as $galleryImage): ?>
	<tr>
		<td><?php echo h($galleryImage['GalleryImage']['filename']); ?>&nbsp;</td>
		<td><?php echo h($galleryImage['GalleryImage']['original_filename']); ?>&nbsp;</td>
		<td><?php echo h($galleryImage['GalleryImage']['extension']); ?>&nbsp;</td>
		<td><?php echo h($galleryImage['GalleryImage']['modified']); ?>&nbsp;</td>
		<td><?php echo h($galleryImage['GalleryImage']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), '/img/hearts/'.$galleryImage['GalleryImage']['filename'], array('target'=>'_blank') ); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $galleryImage['GalleryImage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $galleryImage['GalleryImage']['id']), null, __('Are you sure you want to delete # %s?', $galleryImage['GalleryImage']['id'])); ?>
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





					<?php echo $this->Form->create('GalleryImage', array('type' => 'file', 'id'=>'new-resume-form', 'style'=>'', 'class'=>' form')); 
					echo $this->Form->input('filename', array('type' => 'file', 'label'=>false, 'div'=>false, 'class'=>'filestyle required input-medium')); ?>
					<?php echo $this->Form->submit('Upload', array( 'label' => false, 'class'=>'btn btn-primary', 'div'=> false)); ?>
					 <a href="#" id="cancel-new-resume-form" >Cancel</a>
					<?php	echo $this->Form->end(); ?>



































