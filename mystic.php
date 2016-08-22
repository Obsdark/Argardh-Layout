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
			background-image: url(/ZnoteAAC-master/layout/images/vocationmystic.png);
			
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
					<h2><a href='mystic.php'>Mystic</a></h2>
				</div>
			</div>
			<p>
				The mystic is based on the Sorcerer-vocation but instead of having only more max-mana he has half the druids faster regeneration(+50%) and half of the sorcerers increased max-mana(+5 mana extra/lvl)
				<br/>
				<br/>
				Not much is known about the mystics, they are highly secretive and are students of black magic. The Mystic-vocation is based on Tibias sorcerer but gets +50% mana regeneration aswell as +5(35 toal) extra mana /lvl. The Mystic can learn almost all spells including many of the druids healing and support-spells and is the only one able to craft the powerful 'Sudden Death'-rune.
				<br/>
				<br/>
				He can later promote to Necromancer which has +40% wand damage making him a great damage-over-time dealer but not as great at shock/instant-damage like the Wizard.	
			</p>
"; include 'layout/overall/footer.php'; ?>