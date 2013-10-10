	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
			<div class="row">
				<div class="span2">
				</div>
				<div class="span10">
					<div class="users form">
						<?php echo $this->Session->flash('auth'); ?>
						<?php echo $this->Form->create('User'); ?>
							<fieldset>
								<legend><?php echo __('Please enter your username and password'); ?></legend>
								<?php echo $this->Form->input('username');
								echo $this->Form->input('password');
							?>
							</fieldset>
						<?php echo $this->Form->end(__('Login')); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
