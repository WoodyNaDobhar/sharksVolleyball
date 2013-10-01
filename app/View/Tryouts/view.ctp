
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
                            <li><?php echo $this->Form->postLink(__('Delete Tryout'), array('action' => 'delete', $tryout['Tryout']['id']), null, __('Are you sure you want to delete # %s?', $tryout['Tryout']['id'])); ?> </li>
                            <li><?php echo $this->Html->link(__('List Tryouts'), array('action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Tryout'), array('action' => 'add')); ?> </li>
                            <li><?php echo $this->Html->link(__('List Divisions'), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
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
                            <dt><?php echo __('Begins'); ?></dt>
                            <dd>
                                <?php echo h($tryout['Tryout']['begins']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Ends'); ?></dt>
                            <dd>
                                <?php echo h($tryout['Tryout']['ends']); ?>
                                &nbsp;
                            </dd>
                        </dl>
                        <div class="related">
                            <h3><?php echo __('Related Divisions'); ?></h3>
                            <?php if (!empty($tryout['Division'])): ?>
                            <table cellpadding = "0" cellspacing = "0">
                            <tr>
                                <th><?php echo __('Id'); ?></th>
                                <th><?php echo __('Name'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                            <?php foreach ($tryout['Division'] as $division): ?>
                                <tr>
                                    <td><?php echo $division['id']; ?></td>
                                    <td><?php echo $division['name']; ?></td>
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('View'), array('controller' => 'divisions', 'action' => 'view', $division['id'])); ?>
                                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'divisions', 'action' => 'edit', $division['id'])); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'divisions', 'action' => 'delete', $division['id']), null, __('Are you sure you want to delete # %s?', $division['id'])); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </table>
                        <?php endif; ?>
                        
                            <div class="actions">
                                <ul>
                                    <li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
