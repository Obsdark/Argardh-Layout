	<div class="widget_title"><img src="layout/images/menu/top.gif">Top 5</div>
	<div class="spacer_right"></div>
		<ul>
			<?php
				$cache = new Cache('engine/cache/topPlayer');
				if ($cache->hasExpired()) {
					$players = mysql_select_multi('SELECT `name`, `level`, `experience` FROM `players` WHERE `group_id` < ' . $config['highscore']['ignoreGroupId'] . ' ORDER BY `experience` DESC LIMIT 5;');
					
					$cache->setContent($players);
					$cache->save();
				} else {
					$players = $cache->load();
				}

				if ($players) {
					$count = 1;
					foreach($players as $player) {
						echo "<li>&bull; $count - <a href='characterprofile.php?name=". $player['name']. "' class='playerlink'>". $player['name']. "</a> <span class='lvl'>(". $player['level'] .").</span></li>";
						$count++;
					}
				}
			?>
		</ul>