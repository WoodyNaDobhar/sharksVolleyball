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
							<li><?php echo $this->Html->link(__('New Practice'), array('action' => 'add')); ?></li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
					<div class="practices index">
						<h2><?php echo __('Practices'); ?></h2>
						<table cellpadding="0" cellspacing="0">
						<tr>
								<th><?php echo $this->Paginator->sort('team_id'); ?></th>
								<th><?php echo $this->Paginator->sort('start'); ?></th>
								<th><?php echo $this->Paginator->sort('duration'); ?></th>
								<th><?php echo $this->Paginator->sort('location'); ?></th>
								<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($practices as $practice): ?>
						<tr>
							<td>
								<?php echo $this->Html->link($practice['Team']['name'], array('controller' => 'divisions', 'action' => 'view', $practice['Team']['id'])); ?>
							</td>
							<td><?php echo h($practice['Practice']['start']); ?>&nbsp;</td>
							<td><?php echo h($practice['Practice']['duration']); ?>&nbsp;</td>
							<td><?php echo h($practice['Practice']['location']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('action' => 'view', $practice['Practice']['id'])); ?>
								<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $practice['Practice']['id'])); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $practice['Practice']['id']), null, __('Are you sure you want to delete %s?', $practice['Practice']['start'])); ?>
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
