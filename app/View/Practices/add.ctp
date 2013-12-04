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
							<li><?php echo $this->Html->link(__('List Practices'), array('action' => 'index')); ?></li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
					<div class="practices form">
					<?php echo $this->Form->create('Practice'); ?>
						<fieldset>
							<legend><?php echo __('Add Practice'); ?></legend>
						<?php
							echo $this->Form->input('team_id', array('value' => isset($defaults['team_id'])?$defaults['team_id']:null));
						?>
						<div class="control-group">
						        <div class="input-append date controls" id="dp">
						            <?php echo $this->Form->input('start', array('type' => 'text','div' => false, 'wrapInput' => false, 'value' => isset($defaults['start'])?$defaults['start']:null));?>
						        <span class="add-on"><i class="icon-calendar"></i></span>
						    </div>
						</div><?php 
							$durations = array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5');
							echo $this->Form->input('duration', array('options' => $durations, 'default' => isset($defaults['duration'])?$defaults['duration']:'2', 'label' => 'Duration (in hours)'));
							echo $this->Form->input('location', array('size' => '4', 'value' => isset($defaults['location'])?$defaults['location']:'TBA'));
						?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit')); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
