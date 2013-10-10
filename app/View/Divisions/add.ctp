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
							<li><?php echo $this->Html->link(__('List Divisions'), array('action' => 'index')); ?></li>
							<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Teams'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
							<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="teams form">
					<?php echo $this->Form->create('Division'); ?>
						<fieldset>
							<legend><?php echo __('Add Division'); ?></legend>
						<?php
							echo $this->Form->input('name');
						?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit')); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
