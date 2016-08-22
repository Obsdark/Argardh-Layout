	<div class="widget_title"><img src="layout/images/menu/icon-forum.gif">Server Info</div>
	<div class="spacer_right"></div>
		<ul>
			<?php
			$status = true;
			if ($config['status']['status_check']) {
				@$sock = fsockopen ($config['status']['status_ip'], $config['status']['status_port'], $errno, $errstr, 1);
				if(!$sock) {
					echo "<li>Status: <span style='color:red;font-weight:bold;'>Server Offline!</span></li>";
					$status = false;
				}
				else {
					$info = chr(6).chr(0).chr(255).chr(255).'info';
					fwrite($sock, $info);
					$data='';
					while (!feof($sock))$data .= fgets($sock, 1024);
					fclose($sock);
					echo "<li>Status: <span style='color:green;font-weight:bold;'>Server Online!</span></li>";
				}
			}
			if ($status) {
				?>
				<li><a href="onlinelist.php">Players online: 
					<?php echo user_count_online(); ?></a></li>
				<?php
			}
			?>
			<li>Registered accounts: <?php echo user_count_accounts();?></li>
			<li>Client: <span><?php echo ($config['client'] / 100); ?></span></li>
		</ul>