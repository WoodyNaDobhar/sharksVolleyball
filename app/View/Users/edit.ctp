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
							<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
							<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
                            <li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="users form">
					<?php echo $this->Form->create('User');?>
						<fieldset>
							<legend><?php echo __('Edit User'); ?></legend><?php
		
							echo $this->Form->input('email');
							echo $this->Form->input('username');
							echo $this->Form->input('password');
							echo $this->Form->input('role', array('options' => Configure::read('User.roles'), 'default' => '1'));
							
		?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit'));?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
