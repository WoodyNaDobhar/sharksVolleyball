	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
			<div class="row">
				<div class="span8">
					<div class="teams">
						<div class="title"><h3>Teams for Division <?=$division?></h3></div>
						<?php
						
						foreach($divisions as $division){
							
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
				</div><?php 
				if($teampage['Teampage']['additional'] && $teampage['Teampage']['additional'] != ''){
				?>
				<div class="span4">
					<div class="title"><h3>Additional Info</h3></div>
					<p><?php echo $teampage['Teampage']['additional']; ?></p>
				</div><?php 
				}
				?>
				<div class="span4">
					<div class="title"><h3>Schedule</h3></div>
					<?php 
					
					foreach($practices as $practice){
						
						//make sure there are results
						if(count($practice['Practice']) > 0){
						?>
						<table border="1" cellpadding="1" cellspacing="1" style="width:400px">
							<caption>
								<p>&nbsp;</p>
								<div style="background:rgb(238, 238, 238); border:1px solid rgb(204, 204, 204); padding:5px 10px"><strong><?php echo $practice['name']?></strong></div>
							</caption>
							<tbody><?php 
							
							$i = 2;
							foreach($practice['Practice'] as $p){
							
								$i++;
								if($i%2 == 1){
									echo '
								<tr>
									<td>';
								}else{
									echo '</td>
									<td>';
								}
								$t = strtotime($p['start']);
								echo date('l n/j',$t).' - '.date('g', $t).'-'.(date('g', $t)+$p['duration']).date('a', $t).' '.$p['location'];
								if($i%2 != 1){
									echo '</td>
								</tr>';
								}
							}
							if($i%2 == 1){
								echo '</td>
									<td>&nbsp;</td>
								</tr>';
							}else{
								echo '
								</tr>';
							}
							
							?>
							</tbody>
						</table><?php 
						}
					}
					
					?>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
