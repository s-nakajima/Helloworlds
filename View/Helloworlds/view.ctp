<?php
/**
 * Todo: ここは先生に書いてもらう
 *
 * view template
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

<div class="helloworlds view">
<h2><?php echo __('Helloworld'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($helloworld['Helloworld']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Block'); ?></dt>
		<dd>
			<?php echo $this->Html->link($helloworld['Block']['id'], array('controller' => 'blocks', 'action' => 'view', $helloworld['Block']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($helloworld['Helloworld']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($helloworld['Helloworld']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($helloworld['Helloworld']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($helloworld['Helloworld']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Helloworld'), array('action' => 'edit', $helloworld['Helloworld']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Helloworld'), array('action' => 'delete', $helloworld['Helloworld']['id']), null, __('Are you sure you want to delete # %s?', $helloworld['Helloworld']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Helloworlds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Helloworld'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
