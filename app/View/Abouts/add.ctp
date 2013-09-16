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
                            <li><?php echo $this->Html->link(__('Edit About Us'), array('action' => 'index')); ?></li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="abouts form">
                    <?php echo $this->Form->create('About'); ?>
                        <fieldset>
                            <legend><?php echo __('Add About'); ?></legend>
                        <?php
                            echo $this->Form->input('about');
                        ?>
                        </fieldset>
                    <?php echo $this->Form->end(__('Submit')); ?>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
