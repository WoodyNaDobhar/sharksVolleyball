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
							<li><?php echo $this->Html->link(__('Users'), array('controller' => 'Users', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('Players'), array('controller' => 'Players', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('Teams'), array('controller' => 'Teams', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('Socials'), array('controller' => 'Socials', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('Edit Home'), array('controller' => 'Homes', 'action' => 'view')); ?> </li>
							<li><?php echo $this->Html->link(__('Edit About Us'), array('controller' => 'Abouts', 'action' => 'view')); ?> </li>
							<li><?php echo $this->Html->link(__('Edit Club Information'), array('controller' => 'Clubs', 'action' => 'view')); ?> </li>
							<li><?php echo $this->Html->link(__('Edit Tryout Page'), array('controller' => 'Tryouts', 'action' => 'view')); ?> </li>
							<li><?php echo $this->Html->link(__('Log Out'), array('controller' => 'Users', 'action' => 'logout')); ?> </li>
						</ul>
					</div>
				</div>
				<div class="span10">
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
