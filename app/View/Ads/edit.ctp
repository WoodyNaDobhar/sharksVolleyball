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
                            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ad.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Ad.id'))); ?></li>
                            <li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?></li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="ads form">
					<?php echo $this->Form->create(null, array('type' => 'file'));?>
                        <fieldset>
                            <legend><?php echo __('Edit Ad'); ?></legend>
                        <?php
                            echo $this->Form->input('id');
                            echo $this->Form->input('image', array('type' => 'file'));
                            echo $this->Form->input('link');
                        ?>
                        </fieldset>
                    <?php echo $this->Form->end(__('Submit')); ?>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
