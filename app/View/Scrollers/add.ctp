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
							<li><?php echo $this->Html->link(__('List Scrollers'), array('action' => 'index'));?></li>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="scrollers form">
					<?php echo $this->Form->create(null, array('type' => 'file'));?>
						<fieldset>
							<legend><?php echo __('Add Scroller'); ?></legend>
						<?php
							echo $this->Form->input('header');
							echo $this->Form->input('message', array('type' => 'textarea'));
							echo $this->Form->input('link', array('default' => 'http://'));
							echo $this->Form->input('image', array('type' => 'file'));
						?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit'));?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
