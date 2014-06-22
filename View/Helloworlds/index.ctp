<?php
/**
 * Todo: ここは先生に書いてもらう
 *
 * index template
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @since       NetCommons 3.0.0.0
 * @package     app.Plugin.Helloworlds.View
 */
?>

<div class="helloworlds-index">
	<h2><?php echo __('Helloworlds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('block_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($helloworlds as $helloworld): ?>
	<tr>
		<td><?php echo h($helloworld['Helloworld']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($helloworld['Block']['id'], array('controller' => 'blocks', 'action' => 'view', $helloworld['Block']['id'])); ?>
		</td>
		<td><?php echo h($helloworld['Helloworld']['title']); ?>&nbsp;</td>
		<td><?php echo h($helloworld['Helloworld']['body']); ?>&nbsp;</td>
		<td><?php echo h($helloworld['Helloworld']['created']); ?>&nbsp;</td>
		<td><?php echo h($helloworld['Helloworld']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $helloworld['Helloworld']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $helloworld['Helloworld']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $helloworld['Helloworld']['id']), null, __('Are you sure you want to delete # %s?', $helloworld['Helloworld']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Helloworld'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
