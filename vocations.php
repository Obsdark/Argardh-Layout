<?php require_once 'engine/init.php'; include 'layout/overall/header2.php'; 
echo"
		<style media='screen' type='text/css'>
		div#introduction1 {
			background-size: 100%;
			display:block;
			z-index:999;
			width: 27.5em;
		    height: 5.2em;
			position:relative;
			background-image: url(/ZnoteAAC-master/layout/images/knight.png);
			
			right: -.6%;
			top: 3.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
		}
				
		div#introduction1:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/classcrusader.png);
			
			
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
			right: 42em;
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
			width: 27.5em;
		    height: 5.2em;
			position:relative;
			background-image: url(/ZnoteAAC-master/layout/images/paladin.png);
			
			right: -.6%;
			top: 3.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
		}
				
		div#introduction2:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/vocationpaladin.png);
			
			
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
			height: 25em;
			
			position: absolute;
			right: 42em;
			top: 4.5em;
			padding: .5em;
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
			width: 27.5em;
		    height: 5.2em;
			position:relative;
			background-image: url(/ZnoteAAC-master/layout/images/druid.png);
			
			right: -.6%;
			top: 3.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
		}
				
		div#introduction3:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/vocationdruid.png);
			
			
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
		}
		
		
		div.Text3 h2{
			position: relative;
			left: 0em;
		}
		
		div.tooltip3:hover .Text3{
			width: 20em;
			height: 25em;
			
			position: absolute;
			right: 42em;
			top: 4.5em;
			padding: .5em;
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
			width: 27.5em;
		    height: 5.2em;
			position:relative;
			background-image: url(/ZnoteAAC-master/layout/images/sorcerer.png);
			
			right: -.6%;
			top: 3.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
		}
				
		div#introduction4:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/vocationsorcerer.png);
			
			
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
			height: 25em;
			
			position: absolute;
			right: 42em;
			top: 4.5em;
			padding: .5em;
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
			width: 27.5em;
		    height: 5.2em;
			position:relative;
			background-image: url(/ZnoteAAC-master/layout/images/mystic.png);
			
			right: -.6%;
			top: 3.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
		}
				
		div#introduction5:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/vocationmystic.png);
			
			
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
			width: 7.8em;
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
		}
		
		
		div.Text5 h2{
			position: relative;
			left: 0em;
		}
		
		div.tooltip5:hover .Text5{
			width: 20em;
			height: 25em;
			
			position: absolute;
			right: 42em;
			top: 4.5em;
			padding: .5em;
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
		
		/**/
		
		div#introduction6 {
			background-size: 100%;
			display:block;
			z-index:999;
			width: 27.5em;
		    height: 5.2em;
			position:relative;
			background-image: url(/ZnoteAAC-master/layout/images/gladiator.png);
			
			right: -.6%;
			top: 3.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
		}
				
		div#introduction6:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/classgladiator.png);
			
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;

			border: .15em solid #5C3901;
		}
		
		div#introduction6 div h2 {
			display: block;
			position: relative;
			text-align: center;
			right: -39.2%;
			width: 7.8em;
		}
		
		div.Text6{
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
		
		
		div.Text6 h2{
			position: relative;
			left: 0em;
		}
		
		div.tooltip6:hover .Text6{
			width: 20em;
			height: 25em;
			
			position: absolute;
			right: 42em;
			top: 4.5em;
			padding: .5em;
			border: .15em solid #5C3901;
			border-radius: 25px;
		}
		
		div.tooltip6  p{
			display:none;
		}
		
		div.tooltip6:hover{
			display:inline;
			position:absolute;
		}
				
		div.tooltip6:hover p{
			display:inline;
			position:absolute
			text-align: justify;
			font-weight: bold;
			font-family: 'MedievalSharp';
			color:#FFFFFF;
		}
		
		div.tooltip6:hover h2{
			display:inline;
			text-align: center;
			text-decoration: underline;
			left: 0em;
			position:absolute;
		}
		
		/**/
		
		div#introduction7 {
			background-size: 100%;
			display:block;
			z-index:999;
			width: 27.5em;
		    height: 5.2em;
			position:relative;
			background-image: url(/ZnoteAAC-master/layout/images/scout.png);
			
			right: -.6%;
			top: 3.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
		}
				
		div#introduction7:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/vocationscout.png);
			
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;

			border: .15em solid #5C3901;
		}
		
		div#introduction7 div h2 {
			display: block;
			position: relative;
			text-align: center;
			right: -39.2%;
			width: 7.8em;
		}
		
		div.Text7{
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
		
		
		div.Text7 h2{
			position: relative;
			left: 0em;
		}
		
		div.tooltip7:hover .Text7{
			width: 20em;
			height: 25em;
			
			position: absolute;
			right: 42em;
			top: 4.5em;
			padding: .5em;
			border: .15em solid #5C3901;
			border-radius: 25px;
		}
		
		div.tooltip7  p{
			display:none;
		}
		
		div.tooltip7:hover{
			display:inline;
			position:absolute;
		}
				
		div.tooltip7:hover p{
			display:inline;
			position:absolute
			text-align: justify;
			font-weight: bold;
			font-family: 'MedievalSharp';
			color:#FFFFFF;
		}
		
		div.tooltip7:hover h2{
			display:inline;
			text-align: center;
			text-decoration: underline;
			left: 0em;
			position:absolute;
		}
		
		/**/
		
		div#introduction8 {
			background-size: 100%;
			display:block;
			z-index:999;
			width: 27.5em;
		    height: 5.2em;
			position:relative;
			background-image: url(/ZnoteAAC-master/layout/images/citizen.png);
			
			right: -.6%;
			top: 3.5em;
			
			border: .15em solid #E8C400;
			border-radius: 25px;
		}
				
		div#introduction8:hover {
			background-size: 100%;
			width: 67.5em;
		    height: 39.8em;
			background-image: url(/ZnoteAAC-master/layout/images/vocationcitizen.png);
			
			
			-moz-transition: all .6s ease;
			-webkit-transition: all .6s ease;
			-ms-transition: all .6s ease;
			-o-transition: all .6s ease;
			transition: all .6s ease;

			border: .15em solid #5C3901;
		}
		
		div#introduction8 div h2 {
			display: block;
			position: relative;
			text-align: center;
			right: -39.2%;
			width: 7.8em;
		}
		
		div.Text8{
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
		
		
		div.Text8 h2{
			position: relative;
			left: 0em;
		}
		
		div.tooltip8:hover .Text8{
			width: 20em;
			height: 25em;
			
			position: absolute;
			right: 42em;
			top: 4.5em;
			padding: .5em;
			border: .15em solid #5C3901;
			border-radius: 25px;
		}
		
		div.tooltip8  p{
			display:none;
		}
		
		div.tooltip8:hover{
			display:inline;
			position:absolute;
		}
				
		div.tooltip8:hover p{
			display:inline;
			position:absolute
			text-align: justify;
			font-weight: bold;
			font-family: 'MedievalSharp';
			color:#FFFFFF;
		}
		
		div.tooltip8:hover h2{
			display:inline;
			text-align: center;
			text-decoration: underline;
			left: 0em;
			position:absolute;
		}
		</style>
		<ul style='list-style: none;'>
		<li>
			<div id='introduction1' class='tooltip1'>
				<div class='Text1'>
					<h2><a href='knight.php'>Knight<a></h2>
					<p>
						The Knight vocation is the first choice for most people when creating their first character, mostly because of his simplicity and early fighting abilities. A knight is a standard melee-fighter with great talent of all melee weapon-skills aswell as shielding. A Knight now gains 5 extra hitpoints per level(+20 max hitpoints/lvl). 
						<br/>
						<br/>
						The Knight can later promote to Crusader which gets +15% armor.
					</p>
				</div>				
			</div>
		</li>
		<li>
			<div id='introduction2' class='tooltip2'>
				<div class='Text2'>
					<h2><a href='paladin.php'>Paladin</a></h2>
					<p>
						Distance fighter. The Paladin now have +50% towards the talent of a standard 'Knight' in melee fighting but also a loss in shielding(Before he had 1.1 like Knight but now 1.15 like the rest of his skills).
						<br/>
						<br/>
						He can later promote to Warlord which has 1.08 on all fighting skills aswell as shielding(making him a true master of all skills).
					</p>
				</div>
			</div>
		</li>
		<li>
			<div id='introduction3' class='tooltip3'>
				<div class='Text3'>
					<h2><a href='druid.php'>Druid</a></h2>
					<p>
						Healer/Support. Can make all healing and support runes.A druids mana now regenerates mana and health +100% faster making him a master of surviving in early-game PvE and PvP battles, rune-crafting and a powerful support.. 
						<br/>
						<br/>
						He can later promote to Elder Druid which has +10% magic armor and +10% healing power.
					</p>
				</div>
			</div>
		</li>
		<li>
			<div id='introduction4' class='tooltip4'>
				<div class='Text4'>
					<h2><a href='sorcerer.php'>Sorcerer</a></h2>
					<p>
						The sorcerer is both the most boosted and the most nerfed vocation of the 4. He remains a physical weak character but his magical powers are increased. He gains 10 more mana/lvl( now 40/lvl) but he gains 1 hitpoint less(4/lvl).
						<br/>
						<br/>
						He can later promote to Wizard which has +20% magic damage aswell as an increase/decrease to 50 mana and 3 hp /level.
					</p>
				</div>
			</div>
		</li>
		<li>
			<div id='introduction5' class='tooltip5'>
				<div class='Text5'>
					<h2><a href='mystic.php'>Mystic</a></h2>
					<p>
						The mystic is based on the Sorcerer-vocation but instead of having only more max-mana he has half the druids faster regeneration(+50%) and half of the sorcerers increased max-mana(+5 mana extra/lvl)
						<br/>
						<br/>
						He can later promote to Necromancer which has +40% wand damage making him a great damage-over-time dealer but not as great at shock/instant-damage like the Wizard.
					</p>
				</div>
			</div>
		</li>
		<li>
			<div id='introduction6' class='tooltip6'>
				<div class='Text6'>
					<h2><a href='Gladiator.php'>Gladiator</a></h2>
					<p>
						Gladiator is based on the Knight-vocation but instead of having more hitpoints he gets +10% defense, +10% melee dmg, +10% armor.
						<br/>
						<br/>
						He can later promote to Gladiator-Champion which has 1.08 on all fightskills, making him a true master of battle.
					</p>
				</div>
			</div>
		</li>
		<li>
			<div id='introduction7' class='tooltip7'>
				<div class='Text7'>
					<h2><a href='scout.php'>Scout</a></h2>
					<p>
						Scout is based on the Paladin-vocation but gets +15% distance damage.
						<br/>
						<br/>
						He can later promote to Ranger which has a total of +30% distance damage.
					</p>
				</div>
			</div>
		</li>
		<li>
			<div id='introduction8' class='tooltip8'>
				<div class='Text8'>
					<h2><a href='citizen.php'>Citizen</a></h2>
					<p>
						The new Vocation 'Citizen' can lawfully bot simple tasks such as fishing, farming and the new money-making feature of 'Trading'.
						<br/>
						<br/>
						Trading means buying 'Goods' at Point A for 1.0 gold and selling them at point B for 1.05 gold. Making a small but steady profit but always risking getting obbed and murdered. 
					</p>
				</div>
			</div>
		</li>
		</ul>
		<br/><br/><br/><br/><br/>
		";
include 'layout/overall/footer2.php'; ?>