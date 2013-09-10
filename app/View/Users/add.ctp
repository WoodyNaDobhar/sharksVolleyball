<div class="container">
	<div class="row">
		<div class="span14 spacer25"></div>
	</div>
	<div class="row">
		<div class="span2">
			<div class="actions">
				<h3><?php echo __('Actions'); ?></h3>
				<ul>
			
					<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
				</ul>
			</div>
		</div>
		<div class="span10">
			<div class="users form">
			<?php echo $this->Form->create('User');?>
				<fieldset>
					<legend><?php echo __('Add User'); ?></legend>
				<?php
					echo $this->Form->input('username');
					echo $this->Form->input('password');
					echo $this->Form->input('passwordConfirm', array('type'=>'password'));
					echo $this->Form->input('email');
					
					//admins get a role select, others get default
					if($this->Session->check('Auth.User') && $isAdmin){
						echo $this->Form->input('role', array('options' => Configure::read('User.roles'), 'default' => '1'));
					}else{
						echo $this->Form->hidden('role', array('value' => 1));
					}
				?>
				</fieldset>
			<?php echo $this->Form->end(__('Submit'));?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span14 spacer25"></div>
	</div>
</div>
	