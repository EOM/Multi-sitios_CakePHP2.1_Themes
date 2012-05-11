<div class="clientes form">
<?php echo $this->Form->create('Clientes');?>
	<fieldset>
		<legend><?php echo __('Edit Clientes'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('nacimiento');
		echo $this->Form->input('activo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Clientes.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Clientes.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index'));?></li>
	</ul>
</div>
