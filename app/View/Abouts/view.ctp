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
							<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'Employees', 'action' => 'index')); ?></li>
							<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'Employees', 'action' => 'add')); ?></li>
                            <li><?php echo $this->Html->link(__('Edit About'), array('action' => 'edit', $about['About']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('Testimonials'), array('controller' => 'Testimonials', 'action' => 'index')); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="abouts view">
                    <h2><?php echo __('About'); ?></h2>
                        <dl>
                            <dt><?php echo __('Id'); ?></dt>
                            <dd>
                                <?php echo h($about['About']['id']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('About'); ?></dt>
                            <dd>
                                <?php echo h($about['About']['about']); ?>
                                &nbsp;
                            </dd>
                        </dl>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
