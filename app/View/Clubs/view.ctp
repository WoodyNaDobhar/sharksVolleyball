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
                            <li><?php echo $this->Html->link(__('Edit Club'), array('action' => 'edit', $club['Club']['id'])); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="clubs view">
                    <h2><?php echo __('Club'); ?></h2>
                        <dl>
                            <dt><?php echo __('Id'); ?></dt>
                            <dd>
                                <?php echo h($club['Club']['id']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Club'); ?></dt>
                            <dd>
                                <?php echo h($club['Club']['club']); ?>
                                &nbsp;
                            </dd>
                        </dl>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
