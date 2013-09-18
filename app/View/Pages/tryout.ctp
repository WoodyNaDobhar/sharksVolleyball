	<div id="wrapper">
    	<div class="container">
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
			<div class="row">
				<div class="span8">
                    <div class="players form">
                    <?php echo $this->Form->create('Player'); ?>
                        <fieldset>
						<div class="title"><h3>Player Info</h3></div><?php
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
                            echo $this->Form->input('play_last', array("label" => "Did you play club vb last year?"));
                            echo $this->Form->input('play_where', array("label" => "If so, where?", "div" => array("style" => "display: none;", "id" => "playMore")));
                            echo $this->Form->input('try_other', array("label" => "Are you trying out for other clubs?"));
                            echo $this->Form->input('try_where', array("label" => "If so, where?", "div" => array("style" => "display: none;", "id" => "tryMore")));
                            echo $this->Form->input('position_id', array("label" => "What position are you trying out for?"));
                            echo $this->Form->input('team_id', array("after" => "<br>If there are not an adequate number of girls that tryout in a specific age group, the decision on whether to have the team or not will be at the discretion of the director. Also, if we have enough talented players try out at a particular age group, we may have a second team at that particular age group."));
                            echo $this->Form->input('waiver', array("required" => TRUE, "label" => "It is agreed that all risk attendant to watching and/ or participating in tryout activities, including,
								but not limited to bodily injury, are assumed by the participant and his, her parents and/or legal
								guarding as indicated by their signature hereto. It is agreed that parents and/or legal guardian
								agree to be financially responsible for any costs involved after the parent's/legal guardian's
								insurance has paid.<br>
								In consideration of CCVBC, the above is a participant for the period mentioned above:
								I hereby certify the named athlete is physically able to participate in the Volleyball activity and I
								know of no physical impairments which would in any manner limit her participation in such a
								program. I hereby grant permission for physicians, dentist, other licensed heath care providers
								and their designees to administer outpatient medical, surgical, or dental services as appropriate."));
                        ?>
                        </fieldset>
                    <?php echo $this->Form->end(__('Submit')); ?>
                    </div>
				</div>
				<div class="span4">
                    <div class="actions">
						<div class="title"><h3>Registration Info</h3></div>
                        <p>Tryout fee: $<?php echo $tryout['Tryout']['cost']; ?></p>
                        <p><?php echo $tryout['Tryout']['info']; ?></p>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>