<div class="clientes form">
<?php echo $this->Form->create('Clientes');?>
	<fieldset>
		<legend><?php echo __('Add Clientes'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index'));?></li>
	</ul>
</div>
