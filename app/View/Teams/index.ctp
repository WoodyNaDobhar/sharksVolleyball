	<div id="wrapper">
    	<div class="container">
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
			<div class="row">
				<div class="span2">
                    <div class="actions">
                        <h3><?php echo __('Actions'); ?></h3>
                        <ul>
                            <li><?php echo $this->Html->link(__('New Team'), array('action' => 'add')); ?></li>
                            <li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
                            <li><?php echo $this->Html->link(__('List Divisions'), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="teams index">
                        <h2><?php echo __('Teams'); ?></h2>
                        <table cellpadding="0" cellspacing="0">
                        <tr>
                                <th><?php echo $this->Paginator->sort('id'); ?></th>
                                <th><?php echo $this->Paginator->sort('name'); ?></th>
                                <th><?php echo $this->Paginator->sort('division_id'); ?></th>
                                <th><?php echo $this->Paginator->sort('photo'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        <?php foreach ($teams as $team): ?>
                        <tr>
                            <td><?php echo h($team['Team']['id']); ?>&nbsp;</td>
                            <td><?php echo h($team['Team']['name']); ?>&nbsp;</td>
                            <td><?php echo $this->Html->link($team['Division']['name'], array('controller' => 'divisions', 'action' => 'view', $team['Division']['id'])); ?>&nbsp;</td>
                            <td><img style="max-width: 100px;" src="<?php echo h($team['Team']['photo']); ?>" /></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $team['Team']['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $team['Team']['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $team['Team']['id']), null, __('Are you sure you want to delete # %s?', $team['Team']['id'])); ?>
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
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
