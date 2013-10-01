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
                            <li><?php echo $this->Html->link(__('Edit Player'), array('action' => 'edit', $player['Player']['id'])); ?> </li>
                            <li><?php echo $this->Form->postLink(__('Delete Player'), array('action' => 'delete', $player['Player']['id']), null, __('Are you sure you want to delete # %s?', $player['Player']['id'])); ?> </li>
                            <li><?php echo $this->Html->link(__('List Players'), array('action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Player'), array('action' => 'add')); ?> </li>
                            <li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="players view">
                    <h2><?php echo __('Player'); ?></h2>
                        <dl>
                            <dt><?php echo __('Id'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['id']); ?>
                                &nbsp;
                            </dd>
                           <dt><?php echo __('First Name'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['first_name']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Last Name'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['last_name']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Mothers First Name'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['mothers_first_name']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Mothers Last Name'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['mothers_last_name']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Fathers First Name'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['fathers_first_name']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Fathers Last Name'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['fathers_last_name']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Address'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['address']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('City'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['city']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('State'); ?></dt>
                            <dd>
                                <?php echo $this->Html->link($player['State']['name'], array('controller' => 'states', 'action' => 'view', $player['State']['id'])); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Zip'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['zip']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Home Phone'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['home_phone']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Cell Phone'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['cell_phone']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Parents Email'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['parents_email']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('School'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['school']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Grade'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['grade']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Birthday'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['birthday']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Graduation Year'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['graduation_year']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Play Last'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['play_last']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Play Where'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['play_where']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Try Other'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['try_other']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Try Where'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['try_where']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Tryout'); ?></dt>
                            <dd>
                                <?php echo $this->Html->link($player['Tryout']['ends'], array('controller' => 'tryouts', 'action' => 'view', $player['Tryout']['id'])); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Team'); ?></dt>
                            <dd>
                                <?php echo $this->Html->link($player['Team']['name'], array('controller' => 'teams', 'action' => 'view', $player['Team']['id'])); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Jersey #'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['number']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Paid'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['paid']); ?>
                                &nbsp;
                            </dd>
                            <dt><?php echo __('Waiver'); ?></dt>
                            <dd>
                                <?php echo h($player['Player']['waiver']); ?>
                                &nbsp;
                            </dd>
                        </dl>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
