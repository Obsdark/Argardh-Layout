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
			background-image: url(/ZnoteAAC-master/layout/images/vocationpaladin.png);
			
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
					<h2><a href='paladin.php'>Paladin</a></h2>
				</div>
			</div>
			<p>
				Distance fighter. The Paladin now have +50% towards the talent of a standard 'Knight' in melee fighting but also a loss in shielding(Before he had 1.1 like Knight but now 1.15 like the rest of his skills).
				<br/>
				<br/>
				The Paladin is just as the knight good in the beginning. He has high damage capabilities with his distance weapons and is now enjoying better melee fighting skills. He has +50% bonus towards the talent of a knights capability of training melee fighting weapons, but he suffers an equal drawback in shielding skill. 
				<br/>
				<br/>
				He can later promote to Warlord which gets 1.08(same as Gladiator) on all fighting skills aswell as shielding which means, he becomes a true master of all skills. 	
			</p>
"; include 'layout/overall/footer.php'; ?>