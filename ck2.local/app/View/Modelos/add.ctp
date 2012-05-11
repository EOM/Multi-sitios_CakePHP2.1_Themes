<div class="modelos form">
<?php echo $this->Form->create('Modelos');?>
	<fieldset>
		<legend><?php echo __('Add Modelos'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Modelos'), array('action' => 'index'));?></li>
	</ul>
</div>
