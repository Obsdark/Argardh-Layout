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
			background-image: url(/ZnoteAAC-master/layout/images/vocationscout.png);
			
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
					<h2><a href='scout.php'>Scout</a></h2>
				</div>
			</div>
			<p>
				The Scout is based on Tibias paladin-vocation but with +15% damage using distance weapons. His one and only perk, but a powerful 1. This makes him able to dish out huge amounts of damage in group at characters with high armor.
				<br/>
				<br/>
				The Scout is best used in tactical PvP-battles together with 1 or several tanks and spellcasters to defend the bowmen from harm as they do not have good shielding skill.
				<br/>
				<br/>
				He can later be promoted to Ranger who has an extra +15% distance dmg(+30% total).
			</p>
"; include 'layout/overall/footer.php'; ?>