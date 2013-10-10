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
                            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Team.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Team.id'))); ?></li>
                            <li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index')); ?></li>
                            <li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
                            <li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
                            <li><?php echo $this->Html->link(__('List Divisions'), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="teams form">
                    <?php echo $this->Form->create(null, array('type' => 'file'));?>
                        <fieldset>
                            <legend><?php echo __('Edit Team'); ?></legend>
                        <?php
                            echo $this->Form->input('id');
                            echo $this->Form->input('name');
                            echo $this->Form->input('division_id');
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
