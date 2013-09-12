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
							<li><?php echo $this->Html->link(__('Edit Testimonial'), array('action' => 'edit', $testimonial['Testimonial']['id'])); ?> </li>
							<li><?php echo $this->Form->postLink(__('Delete Testimonial'), array('action' => 'delete', $testimonial['Testimonial']['id']), null, __('Are you sure you want to delete # %s?', $testimonial['Testimonial']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('List Testimonials'), array('action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Testimonial'), array('action' => 'add')); ?> </li>
							<li><?php echo $this->Html->link(__('Edit Home'), array('controller' => 'Homes', 'action' => 'view')); ?> </li>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="testimonialss view">
					<h2><?php echo __('Testimonial'); ?></h2>
						<dl>
							<dt><?php echo __('Id'); ?></dt>
							<dd>
								<?php echo h($testimonial['Testimonial']['id']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Testament'); ?></dt>
							<dd>
								<?php echo h($testimonial['Testimonial']['testament']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Testifier'); ?></dt>
							<dd>
								<?php echo h($testimonial['Testimonial']['testifier']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Created'); ?></dt>
							<dd>
								<?php echo h($testimonial['Testimonial']['created']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Modified'); ?></dt>
							<dd>
								<?php echo h($testimonial['Testimonial']['modified']); ?>
								&nbsp;
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
