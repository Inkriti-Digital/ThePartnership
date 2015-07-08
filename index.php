<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>The Partnership</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=640, initial-scale=1">
		<link rel="stylesheet" href="css/styles.css">


		<link rel="icon" type="image/png" href="img/favicon.png">
	</head>
	<body>

		<!-- Content -->
		<div class="container">
			<?php include ("includes/mainnav.php"); ?>
			
			<div class="header">
				<div class="head-title">
					<h1>
						Diverse leadership<br/>
						is a competitive<br/>
						imperative.
					</h1>
					<div class="head-cta">
						are you ready? <img src="img/header-arrow-red.png"/>
					</div>
				</div>
				<div class="head-image">
					<img src="img/home-header.jpg"/>
				</div>
			</div>
			<div class="seperator-red"></div>
			<div class="inner-container">
				<div class="biz-block">
					<h2>We Work with Businesses to Develop a Diverse Pool of Professional Leaders at All Levels of Experience.</h2>
					<p>
						In industries that range from finance, high tech, legal, and medical, we lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>

					<div class="graphic-row">
						<span class="biz-ico"><img src="img/ico-financial.png"/></span>
						<span class="biz-ico"><img src="img/ico-tech.png"/></span>
						<span class="biz-ico"><img src="img/ico-health.png"/></span>
						<span class="biz-ico"><img src="img/ico-science.png"/></span>
						<span class="biz-ico"><img src="img/ico-legal.png"/></span>
					</div>
					<span class="section-cta biz-cta">
						How we benefit business
						<img src="img/arrow-aqua.png"/>
					</span>

				</div>
			</div>
			<div class="seperator-blue"></div>
			<div class="inner-container">
				<div class="personal-block">
					<h2>Professionals Become Even Higher Performers After Our Leadership Programs.</h2>

					<p>
						From recent graduates to experienced executives, our participants are proven high performers that are even stronger. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut commodo. 
					</p>

					<div class="graphic-row">
						<div class="quote-block">
							<span class="headshot">
								<img src="img/home-headshot1.png"/>
							</span>
							<span class="quote">
								<p>
									<b>Quote from a professional who participated in the program.</b><br/>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br/>
									Firstname Last, Position, Company
								</p>
							</span>
						</div>
						<div class="quote-block">
							<span class="headshot">
								<img src="img/home-headshot2.png"/>
							</span>
							<span class="quote">
								<p>
									<b>Quote from a professional who participated in the program.</b><br/>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br/>
									Firstname Last, Position, Company
								</p>
							</span>
						</div>
					</div>

					<span class="section-cta personal-cta">
						How we work with professionals <img src="img/arrow-red.png"/>
					</span>
				</div>
			</div>
			<div class="seperator-aqua"></div>
			<div class="inner-container">
				<div class="alumni-block">
					<h2>Our Alumni Network Is a Connected Community That Stays in Touch.</h2>
					<p>
						Having a network matters. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo tempor consequat.
					</p>

					<div class="graphic-row">
						<span class="biz-ico">
							<canvas id="chart-area1" width="180" height="180"/>
						</span>
						<span class="biz-ico"><canvas id="chart-area2" width="180" height="180"/></span>
						<span class="biz-ico"><canvas id="chart-area3" width="180" height="180"/></span>
					</div>
					<span class="section-cta alumni-cta">
						How our network stays connected
						<img src="img/arrow-blue.png"/>
					</span>
				</div>
			</div>
			<div class="footer">
				<div class="inner-container">
					<span class="copyright">
						©2015 The Partnership, Inc. All Rights Reserved
					</span>
					<span class="address">
						155 Seaport Blvd., 13th Floor,<br/>
						Boston, MA 02210<br/>
						Tel. 617.262.2828<br/>
						Fax 617.988.6157
					</span>					
				</div>
			</div>
		</div>

		<!-- Load Scripts -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/Chart.min.js"></script>
		<!--script src="js/vendors.js"></script-->
		<!--script src="js/scripts.js"></script-->

		<script>

		var pieData1 = [
				{
					value: 300,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Red"
				},
				{
					value: 50,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Green"
				},
				{
					value: 100,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Yellow"
				},
				{
					value: 40,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Grey"
				},
				{
					value: 120,
					color: "#4D5360",
					highlight: "#616774",
					label: "Dark Grey"
				}

			];

			var pieData2 = [
				{
					value: 50,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Red"
				},
				
				{
					value: 100,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Yellow"
				},
				
				{
					value: 120,
					color: "#4D5360",
					highlight: "#616774",
					label: "Dark Grey"
				}

			];

			var pieData3 = [
				{
					value: 90,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Red"
				},
				{
					value: 50,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Green"
				},
				{
					value: 100,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Yellow"
				},
				{
					value: 200,
					color: "#4D5360",
					highlight: "#616774",
					label: "Dark Grey"
				}

			];

			window.onload = function(){
				var ctx1 = document.getElementById("chart-area1").getContext("2d");
				window.myPie = new Chart(ctx1).Pie(pieData1);

				var ctx2 = document.getElementById("chart-area2").getContext("2d");
				window.myPie = new Chart(ctx2).Pie(pieData2);

				var ctx3 = document.getElementById("chart-area3").getContext("2d");
				window.myPie = new Chart(ctx3).Pie(pieData3);

				// animationEasing : "easeOut";
			};

	</script>

	</body>
</html>