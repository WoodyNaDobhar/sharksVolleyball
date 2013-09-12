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
							<li><?php echo $this->Html->link(__('Edit Scroller'), array('action' => 'edit', $scroller['Scroller']['id'])); ?> </li>
							<li><?php echo $this->Form->postLink(__('Delete Scroller'), array('action' => 'delete', $scroller['Scroller']['id']), null, __('Are you sure you want to delete # %s?', $scroller['Scroller']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('List Scrollers'), array('action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Scroller'), array('action' => 'add')); ?> </li>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="scrollers view">
						<h2><?php  echo __('Scroller');?></h2>
						<dl>
							<dt><?php echo __('Id'); ?></dt>
							<dd>
								<?php echo h($scroller['Scroller']['id']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Header'); ?></dt>
							<dd>
								<?php echo h($scroller['Scroller']['header']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Message'); ?></dt>
							<dd>
								<?php echo h($scroller['Scroller']['message']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Link'); ?></dt>
							<dd>
								<?php echo h($scroller['Scroller']['link']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Image'); ?></dt>
							<dd>
								<?php echo h($scroller['Scroller']['image']); ?>
								&nbsp;
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
