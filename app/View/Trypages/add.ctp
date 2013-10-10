	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
			<div class="row">
				<div class="span2">
				</div>
				<div class="span10">
					<div class="tryouts form">
					<?php echo $this->Form->create('Trypage'); ?>
						<fieldset>
							<legend><?php echo __('Add Tryout Page'); ?></legend>
						<?php
							echo $this->Form->input('cost');
							echo $this->Form->input('info');
							echo $this->Form->input('pay');
							echo $this->Form->input('thanks');
						?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit')); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
