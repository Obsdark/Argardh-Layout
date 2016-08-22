<?php require_once 'engine/init.php'; include 'layout/overall/header2.php'; 
echo "
		<style media='screen' type='text/css'>
		div#introduction1 {
			background-size: 100%;
			display:block;
			z-index:999;
			width: 67.5em;
		    height: 5.2em;
			position:relative;
			background-color: #000000;
			
			right: -.6%;
			top: 3.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
		}
				
		div#introduction1:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/introduction.png);
			
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;

			border: .15em solid #5C3901;
		}
		
		div#introduction1 div h2 {
			display: block;
			position: relative;
			text-align: center;
			right: -39.2%;
			width: 7.8em;
		}
		
		div.Text1{
			background-image: linear-gradient(
			rgba(0, 0, 0, 0.5),
			rgba(0, 0, 0, 0.5)
			);
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;
		}
		
		
		div.Text1 h2{
			position: relative;
			left: 0em;
		}
		
		div.tooltip1:hover .Text1{
			width: 20em;
			height: 25em;
			
			position: absolute;
			left: 38em;
			top: 4.5em;
			padding: .5em;
			border: .15em solid #5C3901;
			border-radius: 25px;
		}
		
		div.tooltip1  p{
			display:none;
		}
		
		div.tooltip1:hover{
			display:inline;
			position:absolute;
		}
				
		div.tooltip1:hover p{
			display:inline;
			position:absolute
			text-align: justify;
			font-weight: bold;
			font-family: 'MedievalSharp';
			color:#FFFFFF;
		}
		
		div.tooltip1:hover h2{
			display:inline;
			text-align: center;
			text-decoration: underline;
			left: 0em;
			position:absolute;
		}
		
		/**/
		
		div#introduction2 {
			background-size: 100%;
			display:block;
			z-index:999;
			width: 67.5em;
		    height: 5.2em;
			position:relative;
			background-color: #000000;
			
			right: -.6%;
			top: 7.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
		}
				
		div#introduction2:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/introduction2.png);
			
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;

			border: .15em solid #5C3901;
		}
		
		div#introduction2 div h2 {
			display: block;
			position: relative;
			text-align: center;
			right: -39.2%;
			width: 7.8em;
		}
		
		div.Text2{
			background-image: linear-gradient(
			rgba(0, 0, 0, 0.5),
			rgba(0, 0, 0, 0.5)
			);
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;
		}
		
		
		div.Text2 h2{
			position: relative;
			left: 0em;
		}
		
		div.tooltip2:hover .Text2{
			width: 20em;
			height: 30em;
			
			position: absolute;
			right: 38em;
			top: 4.5em;
			padding: .4em;
			border: .15em solid #5C3901;
			border-radius: 25px;
		}
		
		div.tooltip2  p{
			display:none;
		}
		
		div.tooltip2:hover{
			display:inline;
			position:absolute;
		}
				
		div.tooltip2:hover p{
			display:inline;
			position:absolute
			text-align: justify;
			font-weight: bold;
			font-family: 'MedievalSharp';
			color:#FFFFFF;
		}
		
		div.tooltip2:hover h2{
			display:inline;
			text-align: center;
			text-decoration: underline;
			left: 0em;
			position:absolute;
		}
		
		/**/
		
		div#introduction3 {
			background-size: 100%;
			display:block;
			z-index:999;
			width: 67.5em;
		    height: 5.2em;
			position:relative;
			background-color: #000000;
			
			right: -.6%;
			top: 12.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
			
			-moz-transform: scaleX(-1);
			-o-transform: scaleX(-1);
			-webkit-transform: scaleX(-1);
			transform: scaleX(-1);
			filter: FlipH;
			-ms-filter: 'FlipH';
		}
				
		div#introduction3:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/introduction3.png);
			
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;

			border: .15em solid #5C3901;
		}
		
		div#introduction3 div h2 {
			display: block;
			position: relative;
			text-align: center;
			right: -39.2%;
			width: 7.8em;
		}
		
		div.Text3{
			background-image: linear-gradient(
			rgba(0, 0, 0, 0.5),
			rgba(0, 0, 0, 0.5)
			);
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;
			
			-moz-transform: scaleX(-1);
			-o-transform: scaleX(-1);
			-webkit-transform: scaleX(-1);
			transform: scaleX(-1);
			filter: FlipH;
			-ms-filter: 'FlipH';
		}
		
		
		div.Text3 h2{
			position: relative;
			left: 0em;
		}
		
		div.tooltip3{
			-moz-transform: scaleX(-1);
			-o-transform: scaleX(-1);
			-webkit-transform: scaleX(-1);
			transform: scaleX(-1);
			filter: FlipH;
			-ms-filter: 'FlipH';
		}
		
		div.tooltip3:hover .Text3{
			width: 20em;
			height: 30em;
			
			position: absolute;
			right: 38em;
			top: 4.5em;
			padding: .4em;
			border: .15em solid #5C3901;
			border-radius: 25px;
		}
		
		div.tooltip3  p{
			display:none;
		}
		
		div.tooltip3:hover{
			display:inline;
			position:absolute;
		}
				
		div.tooltip3:hover p{
			display:inline;
			position:absolute
			text-align: justify;
			font-weight: bold;
			font-family: 'MedievalSharp';
			color:#FFFFFF;
		}
		
		div.tooltip3:hover h2{
			display:inline;
			text-align: center;
			text-decoration: underline;
			left: 0em;
			position:absolute;
		}
		
		/**/
		
		div#introduction4 {
			background-size: 100%;
			display:block;
			z-index:999;
			width: 67.5em;
		    height: 5.2em;
			position:relative;
			background-color: #000000;
			
			right: -.6%;
			top: 16.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
		}
				
		div#introduction4:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/introduction4.png);
			
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;

			border: .15em solid #5C3901;
		}
		
		div#introduction4 div h2 {
			display: block;
			position: relative;
			text-align: center;
			right: -39.2%;
			width: 7.8em;
		}
		
		div.Text4{
			background-image: linear-gradient(
			rgba(0, 0, 0, 0.5),
			rgba(0, 0, 0, 0.5)
			);
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;
		}
		
		
		div.Text4 h2{
			position: relative;
			left: 0em;
		}
		
		div.tooltip4:hover .Text4{
			width: 20em;
			height: 32.5em;
			
			position: absolute;
			right: 38em;
			top: 4.5em;
			padding: .4em;
			border: .15em solid #5C3901;
			border-radius: 25px;
		}
		
		div.tooltip4  p{
			display:none;
		}
		
		div.tooltip4:hover{
			display:inline;
			position:absolute;
		}
				
		div.tooltip4:hover p{
			display:inline;
			position:absolute
			text-align: justify;
			font-weight: bold;
			font-family: 'MedievalSharp';
			color:#FFFFFF;
		}
		
		div.tooltip4:hover h2{
			display:inline;
			text-align: center;
			text-decoration: underline;
			left: 0em;
			position:absolute;
		}
		
		/**/
		
		div#introduction5 {
			background-size: 100%;
			display:block;
			z-index:999;
			width: 67.5em;
		    height: 5.2em;
			position:relative;
			background-color: #000000;
			
			right: -.6%;
			top: 22.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
			
			-moz-transform: scaleX(-1);
			-o-transform: scaleX(-1);
			-webkit-transform: scaleX(-1);
			transform: scaleX(-1);
			filter: FlipH;
			-ms-filter: 'FlipH';
		}
				
		div#introduction5:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/introduction5.png);
			
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;

			border: .15em solid #5C3901;
		}
		
		div#introduction5 div h2 {
			display: block;
			position: relative;
			text-align: center;
			right: -39.2%;
			width: 12.8em;
		}
		
		div.Text5{
			background-image: linear-gradient(
			rgba(0, 0, 0, 0.5),
			rgba(0, 0, 0, 0.5)
			);
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;
			
			-moz-transform: scaleX(-1);
			-o-transform: scaleX(-1);
			-webkit-transform: scaleX(-1);
			transform: scaleX(-1);
			filter: FlipH;
			-ms-filter: 'FlipH';
		}
		
		
		div.Text5 h2{
			position: relative;
			left: 0em;
		}
		
		div.tooltip5{
			-moz-transform: scaleX(-1);
			-o-transform: scaleX(-1);
			-webkit-transform: scaleX(-1);
			transform: scaleX(-1);
			filter: FlipH;
			-ms-filter: 'FlipH';
		}
		
		div.tooltip5:hover .Text5{
			width: 20em;
			height: 34em;
			
			position: absolute;
			right: 38em;
			top: 2.1em;
			padding: .4em;
			border: .15em solid #5C3901;
			border-radius: 25px;
		}
		
		div.tooltip5  p{
			display:none;
		}
		
		div.tooltip5:hover{
			display:inline;
			position:absolute;
		}
				
		div.tooltip5:hover p{
			display:inline;
			position:absolute
			text-align: justify;
			font-weight: bold;
			font-family: 'MedievalSharp';
			color:#FFFFFF;
		}
		
		div.tooltip5:hover h2{
			display:inline;
			text-align: center;
			text-decoration: underline;
			left: 0em;
			position:absolute;
		}
		</style>
		<center>
		
		
		<div id='introduction1' class='tooltip1'>
			<div class='Text1'>
				<h2>The Fall of Tibia</h2>
				<p>
					Once upon a time in a land far away there was a great kingdom called Tibia. Tibia was prosperous, mighty and a wealthy nation. But slowly it started to be corrupted and more and more evil appeared in the world. The world then split into separate dimensions, and even more chaos was created. All the new dimensions was also being corrupted in the same way and it wasn't long until they were all on the brink of destruction and one day Daemon, the mightiest of demons, ceased his chance and invaded and destroyed the capital of Tibia, Thais. 		
				</p>
				</div>				
		</div>
		<div id='introduction2' class='tooltip2'>
			<div class='Text2'>
				<h2>The Last Stand</h2>
				<p>
					Most warriors stayed to fight the corruption and the decay, but eventually the demons had the last humans cornered all over the lands of Tibia. Thais was their last stand, and even though it was almost completely sacked it was almost rebuilt and it still stands today. But only legends speak of its location. The majority of Tibian warriors were slaughtered in the battle though, and the rest fled to new worlds. One of the first worlds that people fled to was Argardh, and it was founded by the Knights of Tibia. Unfortunately, the portal to Argardh was destroyed and not re-opened for over 8 years. But now, finally, after long silence: They have again announced they take in Tibian refugees.
				</p>
			</div>
		</div>
		
		
		<div id='introduction3' class='tooltip3'>
			<div class='Text3'>
				<h2>Argardh: A new Beginning</h2>
				<p style='position: relative;'>
					King Tibianus was one of the lucky few who managed to escape the invasion of Thais and with him some of his greatest knights. They founded Siath-city and gave great help to the local inhabitants of Argardh. He welcomes any Tibian to his Palace in Siath-city to join his forever loyal Knights of Tibia in the battle to defend the city from barbarians, orcs, necromancers and political foes. Rumor has it though that he is but an imposter and that the real king is locked deep inside the palaces prison. 
				</p>
			</div>
		</div>
		
		
		<div id='introduction4' class='tooltip4'>
			<div class='Text4'>
				<h2>Laws of the Gods</h2>
				<p>
					Open-Beta will launch on August 23 2016, during Open-Beta players will compete for unique items they can keep until after the end of the Open-Beta season.
				</br>
				</br>
					Experience, magic and skill-rate: x5 during Open-Beta, x2 after launch on December 19. Max level will be set at 100, but already at 50 it will be drastically harder to gain new levels.
				</br>
				</br>
					No skullsystem and a generally simplified(7.0'ified) version of Tibia 8.6 overall. Planned decreased droprates over a 2 year period to counter-act inflation, making sure items and gold don't lose value over time as much as on other Tibia-servers.
				</p>
			</div>
		</div>
		
		<div id='introduction5' class='tooltip5'>
			<div class='Text5'>
				<h2>Argardh: Gameplay and Features</h2>
				<p>
					Gameplay will be focused on a balanced mix of solo and group-play(PvE, Questing, PvP, Arena-Battles, Exploring the World and its Lore etc), trading, guildwars, alliances,diplomacy and economy. There's a new Vocation named 'Citizen' that can lawfully bot simple tasks such as fishing, farming and the new feature of 'Trading'. Trading means buying 'Goods' at Point A for 1.0 gold and selling them at point B for 1.05 gold. Making a steady profit but always risking getting robbed and murdered.
				</br>
				</br>
					Guildhalls(aswell as houses) and control of them will be of great importance. But perhaps even more important - ally with your neighbours. The guildhalls are powerful and are strategically placed for guilds to work together against other regions. 
				</p>
			</div>
		</div>
		</center>	</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
		";
 include 'layout/overall/footer2.php'; ?>