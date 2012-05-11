<div class="clientes index" style="background: blue;">
    <h2><?php echo __('Clientes Sitio 1'); ?></h2>
    <h3><?php echo $sitio; ?></h3>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('nombre'); ?></th>
            <th><?php echo $this->Paginator->sort('apellido'); ?></th>
            <th><?php echo $this->Paginator->sort('nacimiento'); ?></th>
            <th><?php echo $this->Paginator->sort('activo'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($clientes as $clientes): ?>
            <tr>
                <td><?php echo h($clientes['Clientes']['id']); ?>&nbsp;</td>
                <td><?php echo h($clientes['Clientes']['nombre']); ?>&nbsp;</td>
                <td><?php echo h($clientes['Clientes']['apellido']); ?>&nbsp;</td>
                <td><?php echo h($clientes['Clientes']['nacimiento']); ?>&nbsp;</td>
                <td><?php echo h($clientes['Clientes']['activo']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $clientes['Clientes']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientes['Clientes']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clientes['Clientes']['id']), null, __('Are you sure you want to delete # %s?', $clientes['Clientes']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Clientes'), array('action' => 'add')); ?></li>
    </ul>
</div>
