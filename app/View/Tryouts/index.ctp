
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
							<li><?php echo $this->Html->link(__('New Tryout'), array('action' => 'add')); ?></li>
							<li><?php echo $this->Html->link(__('List Divisions'), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
						</ul>
					</div>
				</div>
				<div class="span10">
			   		<div class="tryouts index">
						<h2><?php echo __('Tryouts'); ?></h2>
						<table cellpadding="0" cellspacing="0">
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('begins'); ?></th>
							<th><?php echo $this->Paginator->sort('ends'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($tryouts as $tryout): ?>
						<tr>
							<td><?php echo h($tryout['Tryout']['id']); ?>&nbsp;</td>
							<td><?php echo h($tryout['Tryout']['begins']); ?>&nbsp;</td>
							<td><?php echo h($tryout['Tryout']['ends']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('action' => 'view', $tryout['Tryout']['id'])); ?>
								<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tryout['Tryout']['id'])); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tryout['Tryout']['id']), null, __('Are you sure you want to delete # %s?', $tryout['Tryout']['id'])); ?>
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

