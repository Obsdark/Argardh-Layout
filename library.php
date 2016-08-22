<?php require_once 'engine/init.php'; include 'layout/overall/header2.php'; ?>
<center><h1>Library</h1></center>
	<?php echo'<center>
	<style media="screen" type="text/css">
				div#loreintro
				{
					position:relative;
					background-image: linear-gradient(
					  rgba(0, 0, 0, 0.5),
					  rgba(0, 0, 0, 0.5)
					), url(/ZnoteAAC-master/layout/images/libraryloreintro.png);
					background-size: 100%;
					display:block;
					z-index:999;
					width: 25em;
				    height: 17.45em;
				}
				div#loreintro:hover {
					background-size: 100%;
					width: 37.5em;
				    height: 26.18em;
					background-image: url(/ZnoteAAC-master/layout/images/libraryloreintro.png);
					
					-moz-transition: all .4s ease;
					-webkit-transition: all .4s ease;
					-ms-transition: all .4s ease;
					-o-transition: all .4s ease;
					transition: all .4s ease; 
				}
				
				div#gameintro
				{
					position:relative;
					background-image: linear-gradient(
					  rgba(0, 0, 0, 0.5),
					  rgba(0, 0, 0, 0.5)
					), url(/ZnoteAAC-master/layout/images/librarygameintro.png);
					background-size: 100%;
					display:block;
					z-index:999;
					width: 25em;
				    height: 17.45em;
				}
				div#gameintro:hover {
					background-size: 100%;
					width: 37.5em;
				    height: 26.18em;
					background-image: url(/ZnoteAAC-master/layout/images/librarygameintro.png);
					
					-moz-transition: all .4s ease;
					-webkit-transition: all .4s ease;
					-ms-transition: all .4s ease;
					-o-transition: all .4s ease;
					transition: all .4s ease; 
				}
				
				div#vocations
				{
					position:relative;
					background-image: linear-gradient(
					  rgba(0, 0, 0, 0.5),
					  rgba(0, 0, 0, 0.5)
					), url(/ZnoteAAC-master/layout/images/libraryvocations.png);
					background-size: 100%;
					display:block;
					z-index:999;
					width: 25em;
				    height: 16em;
				}
				div#vocations:hover {
					background-size: 100%;
					width: 37.5em;
				    height: 24.18em;
					background-image: url(/ZnoteAAC-master/layout/images/libraryvocations.png);
					
					-moz-transition: all .4s ease;
					-webkit-transition: all .4s ease;
					-ms-transition: all .4s ease;
					-o-transition: all .4s ease;
					transition: all .4s ease; 
				}
				
				div#screenshots
				{
					position:relative;
					background-image: linear-gradient(
					  rgba(0, 0, 0, 0.5),
					  rgba(0, 0, 0, 0.5)
					), url(/ZnoteAAC-master/layout/images/libraryscreenshots.png);
					background-size: 100%;
					display:block;
					z-index:999;
					width: 25em;
				    height: 16em;
				}
				div#screenshots:hover {
					background-size: 100%;
					width: 37.5em;
				    height: 24.18em;
					background-image: url(/ZnoteAAC-master/layout/images/libraryscreenshots.png);
					
					-moz-transition: all .4s ease;
					-webkit-transition: all .4s ease;
					-ms-transition: all .4s ease;
					-o-transition: all .4s ease;
					transition: all .4s ease; 
				}
				
				div#articles
				{
					position:relative;
					background-image: linear-gradient(
					  rgba(0, 0, 0, 0.5),
					  rgba(0, 0, 0, 0.5)
					), url(/ZnoteAAC-master/layout/images/libraryarticles.png);
					background-size: 100%;
					display:block;
					z-index:999;
					width: 25em;
				    height: 16em;
				}
				div#articles:hover {
					background-size: 100%;
					width: 37.5em;
				    height: 24.18em;
					background-image: url(/ZnoteAAC-master/layout/images/libraryarticles.png);
					
					-moz-transition: all .4s ease;
					-webkit-transition: all .4s ease;
					-ms-transition: all .4s ease;
					-o-transition: all .4s ease;
					transition: all .4s ease; 
				}
				
				div#lore
				{
					position:relative;
					background-image: linear-gradient(
					  rgba(0, 0, 0, 0.5),
					  rgba(0, 0, 0, 0.5)
					), url(/ZnoteAAC-master/layout/images/librarylore.png);
					background-size: 100%;
					display:block;
					z-index:999;
					width: 25em;
				    height: 17.4em;
				}
				div#lore:hover {
					background-size: 100%;
					width: 37.5em;
				    height: 26.18em;
					background-image: url(/ZnoteAAC-master/layout/images/librarylore.png);
					
					-moz-transition: all .4s ease;
					-webkit-transition: all .4s ease;
					-ms-transition: all .4s ease;
					-o-transition: all .4s ease;
					transition: all .4s ease; 
				}

				div.border
				{
					border-style: solid;
					border-width: .1em;
					border-color: #5C3901;
				}
				div.border:hover
				{
					border-style: solid;
					border-width: .2em;
					border-color: #E8C400;
				}

				</style>
				<ul style="list-style: none;">
					<li>
						<a href="loreintro.php">
							<div id="loreintro" class="border"></div>
						</a>
						<h2><a href="loreintro.php">Short Introduction</a></h2>
						<p>
							A short explanation of the World of Argardh in general aswell as a short description of Gameplay and Server-rules.					
						</p>
					</li>
					</br>
					</br>
					<li>
						<a href="gameintroduction.php">
							<div id="gameintro" class="border"></div>
						</a>
						<h2><a href="gameintroduction.php">Game Introduction</a></h2>
						<p>
							For Tibians and non-Tibians like: What is Argardh? Gameplay, rules, config-settings and more. 
						</p>
					</li>
					</br>
					</br>
					<li>
						<a href="vocations.php">
							<div id="vocations" class="border"></div>
						</a>
						<h2><a href="vocations.php">Vocations</a></h2>
						<p>
							General information about the 4 vocations and their changes from Tibia.
						</p>
					
					</li>
					</br>
					</br>
					<li>
						<a href="http://www.argardh.com/images/ssgallery">
							<div id="screenshots" class="border"></div>
						</a>
						<h2><a href="http://www.argardh.com/images/ssgallery">Mapping-Gallery</a></h2>
						<p>
							A gallery of screenshots taken in the Map-editor. A "behind the scenes" look at the gameworld.
						</p>
					
					</li>
					</br>
					</br>
					<li>
						<a href="http://www.argardh.com/Forum/viewforum.php?f=13">
							<div id="articles" class="border"></div>
						</a>
						<h2><a href="http://www.argardh.com/Forum/viewforum.php?f=13">Articles/Wiki</a></h2>
						<p>
							Player uploaded articles of in-game related matters. 
						</p>
						
					</li>
					</br>
					</br>
					<li>
						<a href="http://www.argardh.com/Forum/viewforum.php?f=18">
							<div id="lore" class="border"></div>
						</a>
						<h2><a href="http://www.argardh.com/Forum/viewforum.php?f=18">Lore</a></h2>
						<p>
							Lore of Argadh. The creation myth, the creation and destruction of Tibia, Argardhs birth and the promising future of Cyrawn, the world where Fardos, Uman</br> and most of the angels reside.
						</p>
					</li>
				</ul>
				</center>
			<!--<span>&copy; Copyright &copy; 2032. <a href="index.html">Argardh</a> all rights reserved</span>-->'
?>
<?php include 'layout/overall/footer2.php'; ?>