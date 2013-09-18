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
                            <li><?php echo $this->Html->link(__('Edit Tryout'), array('action' => 'edit', $tryout['Tryout']['id'])); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="tryouts view">
                    <h2><?php echo __('Tryout'); ?></h2>
                        <dl>
                            <dt><?php echo __('Id'); ?></dt>
                            <dd>
                                <?php echo h($tryout['Tryout']['id']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Cost'); ?></dt>
                            <dd>
                                <?php echo h($tryout['Tryout']['cost']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Info'); ?></dt>
                            <dd>
                                <?php echo h($tryout['Tryout']['info']); ?>
                                &nbsp;
                            </dd>
                        </dl>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>