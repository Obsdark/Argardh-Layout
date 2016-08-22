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
			background-image: url(/ZnoteAAC-master/layout/images/classcrusader.png);
			
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
					<h2><a href='Knight.php'>Knight</a></h2>
				</div>
			</div>
			<p>
				The Knight vocation is the first choice for most people when creating their first character, mostly because of his simplicity and early fighting abilities. A knight is a standard melee-fighter with great talent of all melee weapon-skills aswell as shielding. A Knight now gains 5 extra hitpoints per level(+20 max hitpoints/lvl). 
				<br/>
				<br/>
				Most players first character. Melee fighter, best vocation early-game and for new players but late-game highly dependant on items. We felt the 'Knight' needed a boost on hitpoints. He now gets 5(20 total) extra hitpoints per lvl and will thus be around 2000 hitpoints at lvl 100. Perfect balance-fix for guild-wars making the knight a more shock-damage durable tank than a paladin.
				<br/>
				<br/>
				The Knight can later promote to Crusader which gets +15% armor.
			</p>
"; include 'layout/overall/footer.php'; ?>