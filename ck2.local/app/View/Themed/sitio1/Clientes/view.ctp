<div class="clientes view">
<h2><?php  echo __('Clientes');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientes['Clientes']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($clientes['Clientes']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($clientes['Clientes']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nacimiento'); ?></dt>
		<dd>
			<?php echo h($clientes['Clientes']['nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($clientes['Clientes']['activo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clientes'), array('action' => 'edit', $clientes['Clientes']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clientes'), array('action' => 'delete', $clientes['Clientes']['id']), null, __('Are you sure you want to delete # %s?', $clientes['Clientes']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientes'), array('action' => 'add')); ?> </li>
	</ul>
</div>
