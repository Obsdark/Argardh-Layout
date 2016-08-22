	<div class="container_mid_foot"></div>
			</div>
			
			<!--<div class="container_right">
				<div class="top"></div>
				<div class="mid">
					<div class="spacer_right"></div>
						<?php 
						/*
							if (user_logged_in() === true) {
								include 'layout/widgets/loggedin.php'; 
							} else {
								include 'layout/widgets/login.php'; 
							}
							echo '<div class="spacer_right"></div>';
							if (user_logged_in() && is_admin($user_data)) include 'layout/widgets/Wadmin.php'; */
						?>
					<div class="spacer_right"></div>
						<?php //include 'layout/widgets/serverinfo.php'; ?>
					<div class="spacer_right"></div>
						<?php //include 'layout/widgets/top5.php'; ?>
				</div>-->
				<div class="bot"></div>
			</div>
			<div class="footer">
				<p>Copyright &copy; <?php echo $config['site_title']; ?>.<br/>
				<?php 
					echo 'Server date and clock is: '. getClock(false, true) .' Page generated in '. elapsedTime() .' seconds. Q: '.$aacQueries.'<br/>';
				?>
				Coded and Design by <a href='https://otland.net/members/hemrenus321.88336/' class='playerlink'>Hemrenus321</a>. | Converted to ZnoteAAC by <a href="https://otland.net/members/halfaway.142275/" class="playerlink">HalfAway</a> | Adapted to Argardh proyect and somewhat "modernized" by <a href="https://otland.net/members/obsdark.143595/" class="playerlink">Obsdark</a>.<br/>  Engine: <a href="credits.php" class="playerlink">Znote AAC</a></p>
				<br/>
			</div>
		</div>
	</div>
</body>
</html>