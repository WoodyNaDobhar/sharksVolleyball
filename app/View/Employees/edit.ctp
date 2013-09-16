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
                            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employee.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Employee.id'))); ?></li>
                            <li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="employees form">
					<?php echo $this->Form->create(null, array('type' => 'file'));?>
                        <fieldset>
                            <legend><?php echo __('Edit Employee'); ?></legend>
                        <?php
                            echo $this->Form->input('id');
                            echo $this->Form->input('name');
                            echo $this->Form->input('title');
                            echo $this->Form->input('blurb', array('type' => 'textarea'));
                            echo $this->Form->input('photo', array('type' => 'file'));
                        ?>
                        </fieldset>
                    <?php echo $this->Form->end(__('Submit')); ?>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
