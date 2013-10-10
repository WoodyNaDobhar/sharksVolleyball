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
                            <li><?php echo $this->Html->link(__('Edit Ad'), array('action' => 'edit', $ad['Ad']['id'])); ?> </li>
                            <li><?php echo $this->Form->postLink(__('Delete Ad'), array('action' => 'delete', $ad['Ad']['id']), null, __('Are you sure you want to delete # %s?', $ad['Ad']['id'])); ?> </li>
                            <li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Ad'), array('action' => 'add')); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="ads view">
                    <h2><?php echo __('Ad'); ?></h2>
                        <dl>
                            <dt><?php echo __('Id'); ?></dt>
                            <dd>
                                <?php echo h($ad['Ad']['id']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Image'); ?></dt>
                            <dd>
                                <?php echo h($ad['Ad']['image']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Link'); ?></dt>
                            <dd>
                                <?php echo h($ad['Ad']['link']); ?>
                                &nbsp;
                            </dd>
                        </dl>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
