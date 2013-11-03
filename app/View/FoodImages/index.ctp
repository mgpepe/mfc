<div class="foodImages index">
	<h2><?php echo __('Gallery Images'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('original_filename'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($foodImages as $foodImage): ?>
	<tr>
		<td><?php echo h($foodImage['FoodImage']['original_filename']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), '/img/foods/'.$foodImage['FoodImage']['filename'], array('target'=>'_blank') ); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $foodImage['FoodImage']['id']), null, __('Are you sure you want to delete # %s?', $foodImage['FoodImage']['id'])); ?>
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





					<?php echo $this->Form->create('FoodImage', array('type' => 'file', 'id'=>'new-resume-form', 'style'=>'', 'class'=>' form')); 
					echo $this->Form->input('filename', array('type' => 'file', 'label'=>false, 'div'=>false, 'class'=>'filestyle required input-medium')); 
					echo $this->Form->input('title', array('type' => 'text', 'label'=>false,  'class'=>' required input-medium', 'placeholder'=>'Menu Title')); 
					echo $this->Form->submit('Upload', array( 'label' => false, 'class'=>'btn btn-primary', 'div'=> false)); ?>
					 <a href="#" id="cancel-new-resume-form" >Cancel</a>
					<?php	echo $this->Form->end(); ?>



































