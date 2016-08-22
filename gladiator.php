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
			background-image: url(/ZnoteAAC-master/layout/images/classgladiator.png);
			
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
					<h2><a href='Gladiator.php'>Gladiator</a></h2>
				</div>
			</div>
			<p>
				Gladiator is based on the Knight-vocation but instead of having more hitpoints he gets +10% defense, +10% melee dmg, +10% armor.
				<br/>
				<br/>
				The Gladiator do not have the high hitpoints like the Knight, nor the fast Healing abilities like the Paladin. Instead the Gladiator focuses on being an effective warrior as his melee-damage, armor and defense is all increased by 10%. This makes the Gladiator perfect for Arena or PvP battles where it is important to make every healthpotion/UH come to good use as all Knights and Paladin battles end when you run out of healing.
				<br/>
				<br/>
				He can be promoted to Gladiator-Champion which has 1.08 on all fighting skills(same as Warlord) making him a true master of arms. 
			</p>
"; include 'layout/overall/footer.php'; ?>