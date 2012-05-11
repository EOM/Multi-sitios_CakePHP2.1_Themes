<div class="modelos view">
<h2><?php  echo __('Modelos');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($modelos['Modelos']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($modelos['Modelos']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Modelos'), array('action' => 'edit', $modelos['Modelos']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Modelos'), array('action' => 'delete', $modelos['Modelos']['id']), null, __('Are you sure you want to delete # %s?', $modelos['Modelos']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modelos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modelos'), array('action' => 'add')); ?> </li>
	</ul>
</div>
