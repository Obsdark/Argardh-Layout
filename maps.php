<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>
<h1>Maps</h1>
	<?php echo'
				<style media="screen" type="text/css">
				div#GameWorldmap
				{
					position:relative;
					background-image: linear-gradient(
					  rgba(0, 0, 0, 0.5),
					  rgba(0, 0, 0, 0.5)
					), url(/ZnoteAAC-master/layout/images/worldmap333.png);
					background-size: 100%;
					display:block;
					z-index:999;
					width: 25em;
				    height: 23.6em;
				}
				div#GameWorldmap:hover {
					background-size: 100%;
					width: 37.5em;
				    height: 35.5em;
					background-image: url(/ZnoteAAC-master/layout/images/worldmap333.png);
					
					-moz-transition: all .4s ease;
					-webkit-transition: all .4s ease;
					-ms-transition: all .4s ease;
					-o-transition: all .4s ease;
					transition: all .4s ease; 
				}
				@media screen and (-webkit-min-device-pixel-ratio:0) 
				{ 
					div#GameWorldmap:hover
					{
						height: 35.4em;
					}
				}
				
				div#Worldmap
				{
					position:relative;
					background-image: linear-gradient(
					  rgba(0, 0, 0, 0.5),
					  rgba(0, 0, 0, 0.5)
					), url(/ZnoteAAC-master/layout/images/worldmap4.png);
					background-size: 100%;
					display:block;
					z-index:999;
					width: 25em;
				    height: 18.75em;
				}
				div#Worldmap:hover {
					background-size: 100%;
					width: 37.5em;
				    height: 28.12em;
					background-image: url(/ZnoteAAC-master/layout/images/worldmap4.png);
					
					-moz-transition: all .4s ease;
					-webkit-transition: all .4s ease;
					-ms-transition: all .4s ease;
					-o-transition: all .4s ease;
					transition: all .4s ease; 
				}
				
				div#SiathSmall
				{
					position:relative;
					background-image: linear-gradient(
					  rgba(0, 0, 0, 0.5),
					  rgba(0, 0, 0, 0.5)
					), url(/ZnoteAAC-master/layout/images/siathsmall.png);
					background-size: 100%;
					display:block;
					z-index:999;
					width: 25em;
				    height: 15.75em;
				}
				div#SiathSmall:hover {
					background-size: 100%;
					width: 37.5em;
				    height: 23.61em;
					background-image: url(/ZnoteAAC-master/layout/images/siathsmall.png);
					
					-moz-transition: all .4s ease;
					-webkit-transition: all .4s ease;
					-ms-transition: all .4s ease;
					-o-transition: all .4s ease;
					transition: all .4s ease; 
				}
				@media screen and (-webkit-min-device-pixel-ratio:0) 
				{ 
					div#SiathSmall
					{
						height: 15.71em;
					}
				}
				
				div#Underworld
				{
					position:relative;
					background-image: linear-gradient(
					  rgba(0, 0, 0, 0.5),
					  rgba(0, 0, 0, 0.5)
					), url(/ZnoteAAC-master/layout/images/underworld.png);
					background-size: 100%;
					display:block;
					z-index:999;
					width: 25em;
				    height: 18.75em;
				}
				div#Underworld:hover {
					background-size: 100%;
					width: 37.5em;
				    height: 28.18em;
					background-image: url(/ZnoteAAC-master/layout/images/underworld.png);
					
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
						<a href="/ZnoteAAC-master/layout/images/worldmap333.png">
							<div id="GameWorldmap" class="border"></div>
						</a>
						<h2><a href="/ZnoteAAC-master/layout/images/worldmap333.png">Ingame Worldmap</a></h2>
						<p>
							The Gameworld of Argardh. Click to watch full picture.
						</p>
						<a class="readmore" href="/ZnoteAAC-master/layout/images/worldmap333.png">Read more &gt;&gt;</a>
					</li>
					</br>
					</br>
					</br>
					<li>
						<a href="/ZnoteAAC-master/layout/images/worldmap4.png">
							<div id="Worldmap" class="border"></div>
						</a>
						<h2><a href="/ZnoteAAC-master/layout/images/worldmap4.png">Worldmap</a></h2>
						<p>
							The world of Argardh. Click to watch full picture.
						</p>
						<a class="readmore" href="/ZnoteAAC-master/layout/images/worldmap4.png">Read more &gt;&gt;</a>
					</li>
					</br>
					</br>
					</br>
					<li>
						<a href="/ZnoteAAC-master/layout/images/siathsmall.png">
							<div id="SiathSmall" class="border"></div>
						</a>
						<h2><a href="/ZnoteAAC-master/layout/images/siathsmall.png">Siath-City</a></h2>
						<p>
							Click to watch 35megabyte map of Siath and surrounding areas.
						</p>
						<a class="readmore" href="/ZnoteAAC-master/layout/images/siathsmall.png">Read more &gt;&gt;</a>
					</li>
					</br>
					</br>
					</br>
					<li>
						<a href="/ZnoteAAC-master/layout/images/underworld.png">
							<div id="Underworld" class="border"></div>
						</a>
						<h2><a href="/ZnoteAAC-master/layout/images/underworld.png">Underworld</a></h2>
						<p>
							Click to watch the full picture.
						</p>
						<a class="readmore" href="/ZnoteAAC-master/layout/images/underworld.jpg">Read more &gt;&gt;</a>
					</li>
				</ul>
			<!--<span>&copy; Copyright &copy; 2032. <a href="index.html">Argardh</a> all rights reserved</span>-->
			'
?>
<?php include 'layout/overall/footer.php'; ?>