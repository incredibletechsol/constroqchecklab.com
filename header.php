

  <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <a href="index.php" id="divSiteTitle"><img src="images/logo.png"></a><br />
                   </div>

                     <br>
                    <div id="divMenuRight" class="pull-right">
                   						<div class="navbar">
							<button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
								NAVIGATION <span class="icon-chevron-down icon-white"></span>
							</button>
							<div class="nav-collapse collapse">
								<ul class="nav nav-pills ddmenu">
									<?php 
									$pageName = basename($_SERVER['PHP_SELF']);
								
									if($pageName == "index.php")
										{
										echo "<li class='active'><a href='index.php'>Home</a></li>";
										echo "<li class='dropdown'>";
										echo "<a href='#' class='dropdown-toggle'>About <b class='caret'></b></a>";
											echo  "<ul class='dropdown-menu'>";
											echo  "<li><a href='aboutus.php'>About ConstroQcheck</a></li>";
											echo  "<li><a href='qualitypolicy.php'>Quality Policy</a></li>";
											echo  "<li><a href='missionvisionmotto.php#mission'>Our Mission</a></li>";
											echo  "<li><a href='missionvisionmotto.php#vision'>Our Vision</a></li>";
											echo  "<li><a href='missionvisionmotto.php#motto'>Our Motto</a></li>";
											echo  "</ul>";
										echo  "</li>";
										echo  "<li><a href='services.php'>Services</a></li>";
										echo  "<li><a href='gallery.php'>Gallery</a></li>";
										echo  "<li><a href='clients.php'>Clients</a></li>";
										echo  "<li><a href='contactus.php'>Contact Us</a></li>";
										}	
									if($pageName == "aboutus.php")
										{
										echo "<li><a href='index.php'>Home</a></li>";
										echo "<li class='dropdown'>";
										echo "<a href='#' class='dropdown-toggle' class='active'>About <b class='caret'></b></a>";
											echo  "<ul class='dropdown-menu'>";
											echo  "<li><a href='aboutus.php'>About ConstroQcheck</a></li>";
											echo  "<li><a href='qualitypolicy.php'>Quality Policy</a></li>";
											echo  "<li><a href='missionvisionmotto.php#mission'>Our Mission</a></li>";
											echo  "<li><a href='missionvisionmotto.php#vision'>Our Vision</a></li>";
											echo  "<li><a href='missionvisionmotto.php#motto'>Our Motto</a></li>";
											echo  "</ul>";
										echo  "</li>";
										echo  "<li><a href='services.php'>Services</a></li>";
										echo  "<li><a href='gallery.php'>Gallery</a></li>";
										echo  "<li><a href='clients.php'>Clients</a></li>";
										echo  "<li><a href='contactus.php'>Contact Us</a></li>";
										}	
									if($pageName == "qualitypolicy.php")
										{
										echo "<li><a href='index.php'>Home</a></li>";
										echo "<li class='dropdown'>";
										echo "<a href='#' class='dropdown-toggle' class='active'>About <b class='caret'></b></a>";
											echo  "<ul class='dropdown-menu'>";
											echo  "<li><a href='aboutus.php'>About ConstroQcheck</a></li>";
											echo  "<li><a href='qualitypolicy.php'>Quality Policy</a></li>";
											echo  "<li><a href='missionvisionmotto.php#mission'>Our Mission</a></li>";
											echo  "<li><a href='missionvisionmotto.php#vision'>Our Vision</a></li>";
											echo  "<li><a href='missionvisionmotto.php#motto'>Our Motto</a></li>";
											echo  "</ul>";
										echo  "</li>";
										echo  "<li><a href='services.php'>Services</a></li>";
										echo  "<li><a href='gallery.php'>Gallery</a></li>";
										echo  "<li><a href='clients.php'>Clients</a></li>";
										echo  "<li><a href='contactus.php'>Contact Us</a></li>";
										}
									if($pageName == "missionvisionmotto.php")
										{
										echo "<li><a href='index.php'>Home</a></li>";
										echo "<li class='dropdown'>";
										echo "<a href='#' class='dropdown-toggle' class='active'>About <b class='caret'></b></a>";
											echo  "<ul class='dropdown-menu'>";
											echo  "<li><a href='aboutus.php'>About ConstroQcheck</a></li>";
											echo  "<li><a href='qualitypolicy.php'>Quality Policy</a></li>";
											echo  "<li><a href='missionvisionmotto.php#mission'>Our Mission</a></li>";
											echo  "<li><a href='missionvisionmotto.php#vision'>Our Vision</a></li>";
											echo  "<li><a href='missionvisionmotto.php#motto'>Our Motto</a></li>";
											echo  "</ul>";
										echo  "</li>";
										echo  "<li><a href='services.php'>Services</a></li>";
										echo  "<li><a href='gallery.php'>Gallery</a></li>";
										echo  "<li><a href='clients.php'>Clients</a></li>";
										echo  "<li><a href='contactus.php'>Contact Us</a></li>";
										}	
										
									if($pageName == "services.php")
										{
										echo "<li><a href='index.php'>Home</a></li>";
										echo "<li class='dropdown'>";
										echo "<a href='#' class='dropdown-toggle'>About <b class='caret'></b></a>";
											echo  "<ul class='dropdown-menu'>";
											echo  "<li><a href='aboutus.php'>About ConstroQcheck</a></li>";
											echo  "<li><a href='qualitypolicy.php'>Quality Policy</a></li>";
											echo  "<li><a href='missionvisionmotto.php#mission'>Our Mission</a></li>";
											echo  "<li><a href='missionvisionmotto.php#vision'>Our Vision</a></li>";
											echo  "<li><a href='missionvisionmotto.php#motto'>Our Motto</a></li>";
											echo  "</ul>";
										echo  "</li>";
										echo  "<li class='active'><a href='services.php'>Services</a></li>";
										echo  "<li><a href='gallery.php'>Gallery</a></li>";
										echo  "<li><a href='clients.php'>Clients</a></li>";
										echo  "<li><a href='contactus.php'>Contact Us</a></li>";
										}
									if($pageName == "gallery.php")
										{
										echo "<li><a href='index.php'>Home</a></li>";
										echo "<li class='dropdown'>";
										echo "<a href='#' class='dropdown-toggle'>About <b class='caret'></b></a>";
											echo  "<ul class='dropdown-menu'>";
											echo  "<li><a href='aboutus.php'>About ConstroQcheck</a></li>";
											echo  "<li><a href='qualitypolicy.php'>Quality Policy</a></li>";
											echo  "<li><a href='missionvisionmotto.php#mission'>Our Mission</a></li>";
											echo  "<li><a href='missionvisionmotto.php#vision'>Our Vision</a></li>";
											echo  "<li><a href='missionvisionmotto.php#motto'>Our Motto</a></li>";
											echo  "</ul>";
										echo  "</li>";
										echo  "<li><a href='services.php'>Services</a></li>";
										echo  "<li class='active'><a href='gallery.php'>Gallery</a></li>";
										echo  "<li><a href='clients.php'>Clients</a></li>";
										echo  "<li><a href='contactus.php'>Contact Us</a></li>";
										}		
									if($pageName == "clients.php")
										{
										echo "<li><a href='index.php'>Home</a></li>";
										echo "<li class='dropdown'>";
										echo "<a href='#' class='dropdown-toggle'>About <b class='caret'></b></a>";
											echo  "<ul class='dropdown-menu'>";
											echo  "<li><a href='aboutus.php'>About ConstroQcheck</a></li>";
											echo  "<li><a href='qualitypolicy.php'>Quality Policy</a></li>";
											echo  "<li><a href='missionvisionmotto.php#mission'>Our Mission</a></li>";
											echo  "<li><a href='missionvisionmotto.php#vision'>Our Vision</a></li>";
											echo  "<li><a href='missionvisionmotto.php#motto'>Our Motto</a></li>";
											echo  "</ul>";
										echo  "</li>";
										echo  "<li><a href='services.php'>Services</a></li>";
										echo  "<li><a href='gallery.php'>Gallery</a></li>";
										echo  "<li class='active'><a href='clients.php'>Clients</a></li>";
										echo  "<li><a href='contactus.php'>Contact Us</a></li>";
										}	
									if($pageName == "contactus.php")
										{
										echo "<li><a href='index.php'>Home</a></li>";
										echo "<li class='dropdown'>";
										echo "<a href='#' class='dropdown-toggle'>About <b class='caret'></b></a>";
											echo  "<ul class='dropdown-menu'>";
											echo  "<li><a href='aboutus.php'>About ConstroQcheck</a></li>";
											echo  "<li><a href='qualitypolicy.php'>Quality Policy</a></li>";
											echo  "<li><a href='missionvisionmotto.php#mission'>Our Mission</a></li>";
											echo  "<li><a href='missionvisionmotto.php#vision'>Our Vision</a></li>";
											echo  "<li><a href='missionvisionmotto.php#motto'>Our Motto</a></li>";
											echo  "</ul>";
										echo  "</li>";
										echo  "<li><a href='services.php'>Services</a></li>";
										echo  "<li><a href='gallery.php'>Gallery</a></li>";
										echo  "<li><a href='clients.php'>Clients</a></li>";
										echo  "<li class='active'><a href='contactus.php'>Contact Us</a></li>";
										}			
									if($pageName == "contact2.php")
										{
										echo "<li><a href='index.php'>Home</a></li>";
										echo "<li class='dropdown'>";
										echo "<a href='#' class='dropdown-toggle'>About <b class='caret'></b></a>";
											echo  "<ul class='dropdown-menu'>";
											echo  "<li><a href='aboutus.php'>About ConstroQcheck</a></li>";
											echo  "<li><a href='qualitypolicy.php'>Quality Policy</a></li>";
											echo  "<li><a href='missionvisionmotto.php#mission'>Our Mission</a></li>";
											echo  "<li><a href='missionvisionmotto.php#vision'>Our Vision</a></li>";
											echo  "<li><a href='missionvisionmotto.php#motto'>Our Motto</a></li>";
											echo  "</ul>";
										echo  "</li>";
										echo  "<li><a href='services.php'>Services</a></li>";
										echo  "<li><a href='gallery.php'>Gallery</a></li>";
										echo  "<li><a href='clients.php'>Clients</a></li>";
										echo  "<li class='active'><a href='contactus.php'>Contact Us</a></li>";
										}						
									?>
								</ul>
							</div>
						</div>
					</div>
                </div>
            </div>

            <div class="row-fluid">
            <div class="span12">

                <div id="headerSeparator"></div>

                <div class="camera_full_width">
                    <div id="camera_wrap">
                  		<div data-src="images/header/1.jpg" ></div>
						<div data-src="images/header/2.jpg" ></div>
						<div data-src="images/header/3.jpg" ></div>
						<div data-src="images/header/4.jpg" ></div>
						<div data-src="images/header/5.jpg" ></div>
					

				
                    </div>
					<p>
                    <br style="clear:both"/></p>
					<div style="margin-bottom:40px"></div>
                </div>               

                <div id="headerSeparator2"></div>

            </div>
        </div>
    </div>