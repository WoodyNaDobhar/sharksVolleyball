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
                            <li><?php echo $this->Html->link(__('Edit About Us'), array('action' => 'view')); ?></li>
							<li><?php echo $this->Html->link(__('List Coaches'), array('controller' => 'Employees', 'action' => 'index')); ?></li>
							<li><?php echo $this->Html->link(__('New Coach'), array('controller' => 'Employees', 'action' => 'add')); ?></li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="abouts form">
                    <?php echo $this->Form->create('About'); ?>
                        <fieldset>
                            <legend><?php echo __('Edit About'); ?></legend>
                        <?php
                            echo $this->Form->input('id');
                            echo $this->Form->input('about', array('class' => 'ckeditor'));
                            echo $this->Form->input('about_short', array('class' => 'ckeditor'));
                        ?>
                        </fieldset>
                    <?php echo $this->Form->end(__('Submit')); ?>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
