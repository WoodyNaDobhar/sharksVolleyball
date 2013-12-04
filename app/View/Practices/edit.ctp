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
							<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Practice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Practice.id'))); ?></li>
							<li><?php echo $this->Html->link(__('List Practices'), array('action' => 'index')); ?></li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
					<div class="practices form">
					<?php echo $this->Form->create('Practice'); ?>
						<fieldset>
							<legend><?php echo __('Edit Practice'); ?></legend>
						<?php
							echo $this->Form->input('id');
							echo $this->Form->input('team_id');
						?>
						<div class="control-group">
						        <div class="input-append date controls" id="dp">
						            <?php echo $this->Form->input('start', array('type' => 'text','div' => false, 'wrapInput' => false));?>
						        <span class="add-on"><i class="icon-calendar"></i></span>
						    </div>
						</div><?php 
							$durations = array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5');
							echo $this->Form->input('duration', array('options' => $durations, 'label' => 'Duration (in hours)'));
							echo $this->Form->input('location');
						?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit')); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
