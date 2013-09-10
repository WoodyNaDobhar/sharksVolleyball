<div class="container">
	<div class="row">
		<div class="span14 spacer25"></div>
	</div>
	<div class="row">
		<div class="span2">
			<div class="actions">
				<h3><?php echo __('Actions'); ?></h3>
				<ul>
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'Users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'Users', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Scroller Items'), array('controller' => 'Scrollers', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('New Scroller Item'), array('controller' => 'Scrollers', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
		<div class="span10">
		</div>
	</div>
	<div class="row">
		<div class="span14 spacer25"></div>
	</div>
</div>
