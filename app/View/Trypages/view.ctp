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
							<li><?php echo $this->Html->link(__('Edit Tryout Page'), array('action' => 'edit', $tryout['Trypage']['id'])); ?> </li>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="tryouts view">
					<h2><?php echo __('Tryout Page'); ?></h2>
						<dl>
							<dt><?php echo __('Cost'); ?></dt>
							<dd>
								<?php echo h($tryout['Trypage']['cost']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Info'); ?></dt>
							<dd>
								<?php echo h($tryout['Trypage']['info']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Payment Instructions'); ?></dt>
							<dd>
								<?php echo h($tryout['Trypage']['pay']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Thanks'); ?></dt>
							<dd>
								<?php echo h($tryout['Trypage']['thanks']); ?>
								&nbsp;
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
