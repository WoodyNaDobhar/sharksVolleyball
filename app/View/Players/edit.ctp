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
                            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Player.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Player.number'))); ?></li>
                            <li><?php echo $this->Html->link(__('List Players'), array('action' => 'index')); ?></li>
                            <li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
                        </ul>
                    </div>
				</div>
				<div class="span10">
                    <div class="players form">
                    <?php echo $this->Form->create('Player'); ?>
                        <fieldset>
                            <legend><?php echo __('Edit Player'); ?></legend>
                        <?php
                            echo $this->Form->input('id');
                            echo $this->Form->input('number');
                            echo $this->Form->input('first_name');
                            echo $this->Form->input('last_name');
                            echo $this->Form->input('mothers_first_name');
                            echo $this->Form->input('mothers_last_name');
                            echo $this->Form->input('fathers_first_name');
                            echo $this->Form->input('fathers_last_name');
                            echo $this->Form->input('address');
                            echo $this->Form->input('city');
                            echo $this->Form->input('state_id', array('default' => 35));
                            echo $this->Form->input('zip');
                            echo $this->Form->input('home_phone');
                            echo $this->Form->input('cell_phone');
                            echo $this->Form->input('parents_email');
                            echo $this->Form->input('school');
							$grades = array_combine(range(4, 12), range(4, 12));
                            echo $this->Form->input('grade', array("type" => "select", "options" => $grades));
                            echo $this->Form->input('birthday', array('minYear' => date('Y') - 18, 'maxYear' => date('Y') - 10));
							$gradYears = array_combine(range(date("Y"), date("Y")+10), range(date("Y"), date("Y")+10));
                            echo $this->Form->input('graduation_year', array("options" => $gradYears, "type" => "select", "label" => "Graduation Year"));
                            echo $this->Form->input('play_last', array("label" => "Played Elsewhere Last Year"));
                            echo $this->Form->input('play_where', array("label" => "At:", "div" => array("style" => $playStyle, "id" => "playMore")));
                            echo $this->Form->input('try_other', array("label" => "Tried Out At Other Clubs"));
                            echo $this->Form->input('try_where', array("label" => "With:", "div" => array("style" => $tryStyle, "id" => "tryMore")));
                            echo $this->Form->input('tryout_id');
                            echo $this->Form->input('position_id', array("label" => "What position are they playing?"));
                            echo $this->Form->input('division_id');
                            echo $this->Form->input('team_id');
                            echo $this->Form->input('approved', array("label" => "The player is approved and active."));
                            echo $this->Form->input('paid', array("label" => "The player is paid up."));
                            echo $this->Form->input('waiver', array("required" => TRUE, "label" => "The player is waivered."));
                        ?>
                        </fieldset>
                    <?php echo $this->Form->end(__('Submit')); ?>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
