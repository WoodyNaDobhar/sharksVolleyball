	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
			<div class="row">
				<div class="span8">
					<div class="teams">
						<div class="title"><h3>Teams for <?=$year?></h3></div>
						<?php
						
						foreach($divisions as $division){
							
							?>
						<div class="title"><h3>Division <?=$division['Division']['name']?></h3></div><?
							
							foreach($division['Team'] as $team){
								
							?>
                        <h4>Team <?=$team['name']?></h4><?PHP
						
						if($team['photo'] != ''){
							
							echo '<img style="width: 100%;" src="'.$team['photo'].'">';
						}
						
						?>
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>School</th>
                                </tr>
                            </thead>
                            <tbody><?
							
							$i = 2;
							foreach($team['Player'] as $player){
								
								$i++;
								if($i%2 == 1){
									$evenOdd = 'odd';
								}else{
									$evenOdd = 'even';
								}
								
								?>
                                <tr class="<?=$evenOdd?>">
                                    <td><?=$player['number']?></td>
                                    <td><?=$player['first_name']?></td>
                                    <td><?=$player['last_name']?></td>
                                    <td><?=$player['school']?></td>
                                </tr><?php
								
							}
								
							?>
                            </tbody>
                        </table><?php
							}
						}
?>
					</div>
				</div>
				<div class="span4">
					<div class="title"><h3>Registration Info</h3></div>
					<p><?php echo $teampage['Teampage']['schedule']; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
