	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
			<div class="row">
				<div class="span8">
					<div class="teams">
						<div class="title"><h3>Tryout Results</h3></div>
						<?php
						
						foreach($divisions as $division){
							
							?>
						<div class="title"><h3>Division <?=$division['Division']['name']?></h3></div><?
							
							foreach($division['Team'] as $team){
								
							?>
						<h4>Team <?=$team['name']?></h4>
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
					<div class="actions">
						<div class="title"><h3>Registration Info</h3></div>
						<p>Tryout fee: $<?php echo $trypage['Trypage']['cost']; ?></p>
						<p><?php echo $trypage['Trypage']['info']; ?></p>
						<p>Looking to sign up? Go <a href="/tryout">here.</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span14 spacer25"></div>
			</div>
