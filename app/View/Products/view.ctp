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
							<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
							<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="products view">
					<h2><?php echo __('Product'); ?></h2>
						<dl>
							<dt><?php echo __('Id'); ?></dt>
							<dd>
								<?php echo h($product['Product']['id']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Name'); ?></dt>
							<dd>
								<?php echo h($product['Product']['name']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Price'); ?></dt>
							<dd>
								<?php echo h($product['Product']['price']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Description'); ?></dt>
							<dd>
								<?php echo h($product['Product']['description']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('Img'); ?></dt>
							<dd>
								<img src="<?php echo $product['Product']['img']; ?>" />
								&nbsp;
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>