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
                            <li><?php echo $this->Html->link(__('New Player'), array('action' => 'add')); ?></li>
                            <li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="players index">
                        <h2><?php echo __('Players'); ?></h2>
                        <table cellpadding="0" cellspacing="0">
                        <tr>
                                <th><?php echo $this->Paginator->sort('number'); ?></th>
                                <th><?php echo $this->Paginator->sort('first_name'); ?></th>
                                <th><?php echo $this->Paginator->sort('last_name'); ?></th>
                                <th><?php echo $this->Paginator->sort('city'); ?></th>
                                <th><?php echo $this->Paginator->sort('position_id'); ?></th>
                                <th><?php echo $this->Paginator->sort('team_id'); ?></th>
                                <th><?php echo $this->Paginator->sort('tryout'); ?></th>
                                <th><?php echo $this->Paginator->sort('waiver'); ?></th>
                                <th><?php echo $this->Paginator->sort('paid'); ?></th>
                                <th><?php echo $this->Paginator->sort('approved'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        <?php foreach ($players as $player): ?>
                        <tr>
                            <td><?php echo h($player['Player']['number']); ?>&nbsp;</td>
                            <td><?php echo h($player['Player']['first_name']); ?>&nbsp;</td>
                            <td><?php echo h($player['Player']['last_name']); ?>&nbsp;</td>
                            <td><?php echo h($player['Player']['city']); ?>&nbsp;</td>
                            <td>
                                <?php echo $this->Html->link($player['Position']['abbr'], array('controller' => 'positions', 'action' => 'view', $player['Position']['id'])); ?>
                            </td>
                            <td>
                                <?php echo $this->Html->link($player['Team']['name'], array('controller' => 'teams', 'action' => 'view', $player['Team']['id'])); ?>
                            </td>
                            <td>
                                <?php echo $this->Html->link($player['Tryout']['ends'], array('controller' => 'tryouts', 'action' => 'view', $player['Tryout']['id'])); ?>
                            </td>
                            <td><?php echo ($player['Player']['waiver']==1?'yes':'no'); ?>&nbsp;</td>
                            <td><?php echo ($player['Player']['paid']==1?'yes':'no'); ?>&nbsp;</td>
                            <td><?php echo ($player['Player']['approved']==1?'yes':'no'); ?>&nbsp;</td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $player['Player']['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $player['Player']['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $player['Player']['id']), null, __('Are you sure you want to delete # %s?', $player['Player']['number'])); ?>
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
