<?php require_once 'engine/init.php'; include 'layout/overall/header.php';
 echo"
<style media='screen' type='text/css'>
		div#introduction4 {
			background-size: 100%;
			
			display:block;
			z-index:999;
			width: 42.5em;
		    height: 25.2em;
			position:relative;
			background-image: url(/ZnoteAAC-master/layout/images/vocationdruid.png);
			
			right: -.6%;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
		}
		
		h2 {
			display: block;
			position: relative;
			text-align: center;
			right: -1.2%;
			width: 27.8em;
			
			border: .15em solid;
			border-radius: 25px;
			background-image: linear-gradient(
			rgba(0, 0, 0, 0.5),
			rgba(0, 0, 0, 0.5)
			);
		}	

		p {
			top: 30em;
		}
		
</style>
			<div id='introduction4' class='tooltip4'>
				<div class='Text4'>
					<h2><a href='druid.php'>Druid</a></h2>
				</div>
			</div>
			<p>
				A druids mana and health now regenerates +100% faster making him a master of surviving in early-game PvE and PvP battles. He also makes for a perfect rune-producer and healer/support.
				<br/>
				<br/>
				Healer/Support. Can make all healing and support runes.A druids mana now regenerates mana and health +100% faster making him a master of surviving in early-game PvE and PvP battles, rune-crafting and a powerful support.. 
				<br/>
				<br/>
				He can later promote to Elder Druid which has +10% magic armor and +10% healing power.
			</p>
"; include 'layout/overall/footer.php'; ?>