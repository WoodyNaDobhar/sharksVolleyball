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
                            <li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
                            <li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
                            <li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="employees view">
                    <h2><?php echo __('Employee'); ?></h2>
                        <dl>
                            <dt><?php echo __('Id'); ?></dt>
                            <dd>
                                <?php echo h($employee['Employee']['id']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Name'); ?></dt>
                            <dd>
                                <?php echo h($employee['Employee']['name']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Title'); ?></dt>
                            <dd>
                                <?php echo h($employee['Employee']['title']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Blurb'); ?></dt>
                            <dd>
                                <?php echo h($employee['Employee']['blurb']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Photo'); ?></dt>
                            <dd>
                                <?php echo h($employee['Employee']['photo']); ?>
                                &nbsp;
                            </dd>
                        </dl>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
