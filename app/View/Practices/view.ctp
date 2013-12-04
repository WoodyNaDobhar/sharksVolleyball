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
							<li><?php echo $this->Html->link(__('Edit Practice'), array('action' => 'edit', $practice['Practice']['id'])); ?> </li>
							<li><?php echo $this->Form->postLink(__('Delete Practice'), array('action' => 'delete', $practice['Practice']['id']), null, __('Are you sure you want to delete # %s?', $practice['Practice']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('List Practices'), array('action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Practice'), array('action' => 'add')); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
					<div class="practices view">
					<h2><?php echo __('Practice'); ?></h2>
						<dl>
							<dt><?php echo __('Id'); ?></dt>
							<dd>
								<?php echo h($practice['Practice']['id']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Team'); ?></dt>
							<dd>
								<?php echo $this->Html->link($practice['Team']['name'], array('controller' => 'teams', 'action' => 'view', $practice['Team']['id'])); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Start'); ?></dt>
							<dd>
								<?php echo h($practice['Practice']['start']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Duration'); ?></dt>
							<dd>
								<?php echo h($practice['Practice']['duration']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Location'); ?></dt>
							<dd>
								<?php echo h($practice['Practice']['location']); ?>
								&nbsp;
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
