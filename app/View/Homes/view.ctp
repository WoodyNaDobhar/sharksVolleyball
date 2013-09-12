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
							<li><?php echo $this->Html->link(__('List Scroller Items'), array('controller' => 'Scrollers', 'action' => 'index')); ?></li>
							<li><?php echo $this->Html->link(__('New Scroller Item'), array('controller' => 'Scrollers', 'action' => 'add')); ?></li>
							<li><?php echo $this->Html->link(__('Edit Home Items'), array('action' => 'edit', $home['Home']['id'])); ?></li>
							<li><?php echo $this->Html->link(__('Testimonials'), array('controller' => 'Testimonials', 'action' => 'index')); ?> </li>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="homes view">
					<h2><?php echo __('Home'); ?></h2>
						<dl>
							<dt><?php echo __('Hero Msg'); ?></dt>
							<dd>
								<?php echo h($home['Home']['hero_msg']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Hero Cta'); ?></dt>
							<dd>
								<?php echo h($home['Home']['hero_cta']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Dp1 Header'); ?></dt>
							<dd>
								<?php echo h($home['Home']['dp1_header']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Dp1 Content'); ?></dt>
							<dd>
								<?php echo h($home['Home']['dp1_content']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Dp1 Icon'); ?></dt>
							<dd>
								<?php echo h($home['Home']['dp1_icon']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Dp2 Header'); ?></dt>
							<dd>
								<?php echo h($home['Home']['dp2_header']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Dp2 Content'); ?></dt>
							<dd>
								<?php echo h($home['Home']['dp2_content']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Dp2 Icon'); ?></dt>
							<dd>
								<?php echo h($home['Home']['dp2_icon']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Dp3 Header'); ?></dt>
							<dd>
								<?php echo h($home['Home']['dp3_header']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Dp3 Content'); ?></dt>
							<dd>
								<?php echo h($home['Home']['dp3_content']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Dp3 Icon'); ?></dt>
							<dd>
								<?php echo h($home['Home']['dp3_icon']); ?>
								&nbsp;
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
