<div class="paises view">
<h2><?php  echo __('Paises');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paises['Paises']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($paises['Paises']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Paises'), array('action' => 'edit', $paises['Paises']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Paises'), array('action' => 'delete', $paises['Paises']['id']), null, __('Are you sure you want to delete # %s?', $paises['Paises']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Paises'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paises'), array('action' => 'add')); ?> </li>
	</ul>
</div>
