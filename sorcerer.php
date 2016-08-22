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
			background-image: url(/ZnoteAAC-master/layout/images/vocationsorcerer.png);
			
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
					<h2><a href='sorcerer.php'>Sorcerer</a></h2>
				</div>
			</div>
			<p>
				The sorcerer is both the most boosted and the most nerfed vocation of the 4. He remains a physical weak character but his magical powers are increased. He gains 10 more mana/lvl( now 40/lvl) but he gains 1 hitpoint less(4/lvl).
				<br/>
				<br/>
				Spellcaster, expensive to play, knowledege/skill-dependant. Can make most runes but not all healing and support(SD-rune is now available only to 'Mystic'-vocation). Powerful damage dealer but more fragile than a druid. +10 Mana more per lvl(+40 mana/lvl now). Only 4 hitpoints per level instead of 5. 
				<br/>
				<br/>
				He can later promote to Wizard which gets a +20% magic damage and an increase/decrease to 50 mana(and 3 hitpoints) per level.
			</p>
"; include 'layout/overall/footer.php'; ?>