
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
                            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tryout.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tryout.id'))); ?></li>
                            <li><?php echo $this->Html->link(__('List Tryouts'), array('action' => 'index')); ?></li>
                            <li><?php echo $this->Html->link(__('List Divisions'), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="tryouts form">
                    <?php echo $this->Form->create('Tryout'); ?>
                        <fieldset>
                            <legend><?php echo __('Edit Tryout'); ?></legend>
                        <?php
                            echo $this->Form->input('id');
                            echo $this->Form->input('begins');
                            echo $this->Form->input('ends');
                            echo $this->Form->input('Division');
                        ?>
                        </fieldset>
                    <?php echo $this->Form->end(__('Submit')); ?>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
