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
							<li><?php echo $this->Html->link(__('List Testimonials'), array('action' => 'index')); ?></li>
							<li><?php echo $this->Html->link(__('Edit Home'), array('controller' => 'Homes', 'action' => 'view')); ?> </li>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="testimonialss form">
						<?php echo $this->Form->create('Testimonial'); ?>
							<fieldset>
								<legend><?php echo __('Add Testimonial'); ?></legend>
							<?php
								echo $this->Form->input('testament');
								echo $this->Form->input('testifier');
							?>
							</fieldset>
						<?php echo $this->Form->end(__('Submit')); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
