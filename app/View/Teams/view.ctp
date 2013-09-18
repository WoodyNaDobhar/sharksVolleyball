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
                            <li><?php echo $this->Html->link(__('Edit Team'), array('action' => 'edit', $team['Team']['id'])); ?> </li>
                            <li><?php echo $this->Form->postLink(__('Delete Team'), array('action' => 'delete', $team['Team']['id']), null, __('Are you sure you want to delete # %s?', $team['Team']['id'])); ?> </li>
                            <li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Team'), array('action' => 'add')); ?> </li>
                            <li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="teams view">
                    <h2><?php echo __('Team'); ?></h2>
                        <dl>
                            <dt><?php echo __('Id'); ?></dt>
                            <dd>
                                <?php echo h($team['Team']['id']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Name'); ?></dt>
                            <dd>
                                <?php echo h($team['Team']['name']); ?>
                                &nbsp;
                            </dd>
                        </dl>
                    </div>
                    <div class="related">
                        <h3><?php echo __('Related Players'); ?></h3>
                        <?php if (!empty($team['Player'])): ?>
                        <table cellpadding = "0" cellspacing = "0">
                        <tr>
                            <th><?php echo __('Id'); ?></th>
                            <th><?php echo __('User Id'); ?></th>
                            <th><?php echo __('First Name'); ?></th>
                            <th><?php echo __('Last Name'); ?></th>
                            <th><?php echo __('Mothers First Name'); ?></th>
                            <th><?php echo __('Mothers Last Name'); ?></th>
                            <th><?php echo __('Fathers First Name'); ?></th>
                            <th><?php echo __('Fathers Last Name'); ?></th>
                            <th><?php echo __('Address'); ?></th>
                            <th><?php echo __('City'); ?></th>
                            <th><?php echo __('State Id'); ?></th>
                            <th><?php echo __('Zip'); ?></th>
                            <th><?php echo __('Home Phone'); ?></th>
                            <th><?php echo __('Cell Phone'); ?></th>
                            <th><?php echo __('Parents Email'); ?></th>
                            <th><?php echo __('School'); ?></th>
                            <th><?php echo __('Grade'); ?></th>
                            <th><?php echo __('Birthday'); ?></th>
                            <th><?php echo __('Graduation Year'); ?></th>
                            <th><?php echo __('Play Last'); ?></th>
                            <th><?php echo __('Play Where'); ?></th>
                            <th><?php echo __('Try Other'); ?></th>
                            <th><?php echo __('Try Where'); ?></th>
                            <th><?php echo __('Team Id'); ?></th>
                            <th><?php echo __('Waiver'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        <?php foreach ($team['Player'] as $player): ?>
                            <tr>
                                <td><?php echo $player['id']; ?></td>
                                <td><?php echo $player['user_id']; ?></td>
                                <td><?php echo $player['first_name']; ?></td>
                                <td><?php echo $player['last_name']; ?></td>
                                <td><?php echo $player['mothers_first_name']; ?></td>
                                <td><?php echo $player['mothers_last_name']; ?></td>
                                <td><?php echo $player['fathers_first_name']; ?></td>
                                <td><?php echo $player['fathers_last_name']; ?></td>
                                <td><?php echo $player['address']; ?></td>
                                <td><?php echo $player['city']; ?></td>
                                <td><?php echo $player['state_id']; ?></td>
                                <td><?php echo $player['zip']; ?></td>
                                <td><?php echo $player['home_phone']; ?></td>
                                <td><?php echo $player['cell_phone']; ?></td>
                                <td><?php echo $player['parents_email']; ?></td>
                                <td><?php echo $player['school']; ?></td>
                                <td><?php echo $player['grade']; ?></td>
                                <td><?php echo $player['birthday']; ?></td>
                                <td><?php echo $player['graduation_year']; ?></td>
                                <td><?php echo $player['play_last']; ?></td>
                                <td><?php echo $player['play_where']; ?></td>
                                <td><?php echo $player['try_other']; ?></td>
                                <td><?php echo $player['try_where']; ?></td>
                                <td><?php echo $player['team_id']; ?></td>
                                <td><?php echo $player['waiver']; ?></td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__('View'), array('controller' => 'players', 'action' => 'view', $player['id'])); ?>
                                    <?php echo $this->Html->link(__('Edit'), array('controller' => 'players', 'action' => 'edit', $player['id'])); ?>
                                    <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'players', 'action' => 'delete', $player['id']), null, __('Are you sure you want to delete # %s?', $player['id'])); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                    
                        <div class="actions">
                            <ul>
                                <li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
                            </ul>
                        </div>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
