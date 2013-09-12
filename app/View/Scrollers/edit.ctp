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
					
							<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Scroller.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Scroller.id'))); ?></li>
							<li><?php echo $this->Html->link(__('List Scrollers'), array('action' => 'index'));?></li>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="scrollers form">
					<?php echo $this->Form->create('Scroller');?>
						<fieldset>
							<legend><?php echo __('Edit Scroller'); ?></legend>
						<?php
							echo $this->Form->input('id');
							echo $this->Form->input('header');
							echo $this->Form->input('message');
							echo $this->Form->input('link');
							echo $this->Form->input('image');
						?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit'));?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
