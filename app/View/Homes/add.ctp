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
							<li><?php echo $this->Html->link(__('Edit Home'), array('controller' => 'Homes', 'action' => 'view')); ?></li>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="homes form">
					<?php echo $this->Form->create('Home'); ?>
						<fieldset>
							<legend><?php echo __('Add Home'); ?></legend>
						<?php
							echo $this->Form->input('hero_msg', array('class' => 'ckeditor'));
							echo $this->Form->input('hero_cta');
							echo $this->Form->input('hero_link', array('default' => 'http://'));
							echo $this->Form->input('dp1_header');
							echo $this->Form->input('dp1_content');
							echo $this->Form->input('dp1_icon', array('options' => Configure::read('icons')));
							echo $this->Form->input('dp2_header');
							echo $this->Form->input('dp2_content');
							echo $this->Form->input('dp2_icon', array('options' => Configure::read('icons')));
							echo $this->Form->input('dp3_header');
							echo $this->Form->input('dp3_content');
							echo $this->Form->input('dp3_icon', array('options' => Configure::read('icons')));
						?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit')); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
			
