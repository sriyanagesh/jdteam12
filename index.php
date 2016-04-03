<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/def_css.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="page">
			<!-- desktop & tablet header-->
            <div id="header">
				<div id="logo"><a href="#"><img src="images/sample_logo.png" alt="Joaquina_logo"/></a>

                </div>
				<div id="side_header">
					<h1 class="big_words"><img src="images/phone_icon.png" style="height:1.25em; width:auto;" /> +1(234)567-8910</h1><br />
					<h2><a class="big_words" href="#login">Login</a>  |  <a class="big_words" href="#register">Register</a></h2><br />
					<div><form action="#" method="get">
						<input class="header_text" type="text" placeholder="search" name="input" />

					</form>
					</div>
				</div>
			</div>

			<!--mobile header & menu-->
            <div id="mobile_header" class="hidden" >
				<img src="images/sample_logo.png" alt="Joaquina_logo" id="mobile_logo" />
				<label for="check_menu"><img src="images/menu_icon.png" alt="menu_icon" id="menu_icon" /></label>

            </div>

			<!--nav menu-->
			<input id="check_menu" type="checkbox" >
			<div id="nav_menu" >
				<ul>
					<li><a class="active" href="#home">Home</a></li>
					<li><a href="#about">About Us</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#appointment">Book Appointment</a></li>
					<li><a href="#contact">Contact Us</a></li>
				</ul>
			</div>

			<div id="content">
				<!-- put your code here (area below the header)-->
				<!-- banner image-->
                <div id="banner">
				<h1 class="big_words" style:"color:#ffa834;">Welcome to <br />Joaquina Dental Care</h1><br />
				<h4>We care for your smile.</h4>
				</div>

                <!-- services grid-->
                <div id="grid">
					<div id="services">
                    	<div class="service">
                    		<div><img src="images/service_1.jpg"></div>
                    		<div><h3>Cleaning & Prevention</h3>
                            <p>Removal of dental plaque from teeth with the intention of preventing cavities</p></div>
                    	</div>
                    	<div class="service">
                    		<div><img src="images/service_2.jpg"></div>
                    		<div><h3>Consultation</h3>
                            <p>Full oral assessment to establish oral health and recommend the best treatments if needed</p></div>
                    	</div>
                        <div class="service">
                    		<div><img src="images/service_3.jpg"></div>
                    		<div><h3>Primary Care</h3>
                            <p>We treat you and your entire family and care for your overall oral health</p></div>
                    	</div>
                    </div>

                    <div id="serv_mobile">
                    	<h3>Services offered</h3>
                    	<p>Cleaning & prevention</p><p>Consultation</p>
                    	<p>Primary Care</p><p>Cosmetic Surgery</p>

                    	<p>and <a href="#"><strong>more...</strong></a></p>
                    </div>
				</div>

                <!-- About section-->
                <div id="about">
                	<div id="us_different"><div><img src="images/clinic_pic.jpg"></div>
                		<div>
                		<h2>What makes us different</h2><br />
                		<p>Here at Joaquina Dental Clinic, our focus is you! We strive for you and your family's dental health and satisfaction. From simple procedures such as teeth cleaning to complicated cases such as Gingivoplasty, we ensure you are taken care of in the best possible way. Walk in to our office to talk to our wonderful staff and to check out the modern treatment rooms and you'll know why we are the best dental clinic in the city. It is our job to make you smile because we all know that a smile is the prettiest thing you can wear.</p>
                		</div>
                	</div>
                	<div id="tip_day">
                    <h2>Tip of the day</h2><br />
                    <hr align="left" style="border-width:1px; width:70%; border-color:white; margin-bottom: 10%;" >
                    <?php



								$serverName = "joaquinateam12.database.windows.net";
								$connectionInfo = array( "Database"=>"Joaquinateam12", "UID"=>"admin12@joaquinateam12", "PWD"=>"Trotters12");
								$conn = sqlsrv_connect( $serverName, $connectionInfo);
								if( $conn ) {
								echo "connection established";
								}
								else {
								die(print_r(sqlsrv_errors(), true));
								}

								$sql = "select Tip_Desc from dbo.daily_tip";
								$stmt = sqlsrv_query($conn, $sql);
								if( !$stmt) {
								die(print_r(sqlsrv_errors(), true));
								}

								while($row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
									echo "anything";
								}
								print_r $row;
							  // $tip_num = rand(0, count($tip_arr));
								// $tip = $tip_arr[$tip_num];
							  // echo $tip;
								echo "hello mummy!";


?>



                    </div>
                </div>


			</div>
            <div id="footer">
			Developed by Team 12.
			</div>

		</div>

</body>
</html>
