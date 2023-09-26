<?php 
	include "include/header.php";
	
	if (!isset($_SESSION['user'])) {
		?>
		<script>
			window.location.href="slider-login-page.php";
		</script>
		<?php
	}
	if (isset($_SESSION['successfull'])) {
		?>
		<script>
			alert($_SESSION['successfull']);
		</script>
		<?php
	}
	include "include/navigation-bar.php";
?>

			<div class="row">
				<div class="col-md-6">
					<img class="header-img" src="img/img0303.png" alt="">
				</div>
				<div class="col-md-6 about">
					<div class="box">
						<h6>HELLO</h6>
						<h2 class="fs-1">I'm Kashim Saikh .</h2>
						<p>Web Developer / <del>Mobail Application Developer</del></p>
						<ul class="p-0 m-0">
							<li>
								<a href="#" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
								<a href="#" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
								<a href="#" title="Linkedin"><i class="fa-brands fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
			<!-- <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L26.7,170.7C53.3,149,107,107,160,117.3C213.3,128,267,192,320,224C373.3,256,427,256,480,234.7C533.3,213,587,171,640,181.3C693.3,192,747,256,800,250.7C853.3,245,907,171,960,165.3C1013.3,160,1067,224,1120,240C1173.3,256,1227,224,1280,218.7C1333.3,213,1387,235,1413,245.3L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>	 -->
			<svg class="wave" id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 200" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,140L18.5,130C36.9,120,74,100,111,96.7C147.7,93,185,107,222,123.3C258.5,140,295,160,332,156.7C369.2,153,406,127,443,113.3C480,100,517,100,554,86.7C590.8,73,628,47,665,60C701.5,73,738,127,775,146.7C812.3,167,849,153,886,123.3C923.1,93,960,47,997,43.3C1033.8,40,1071,80,1108,83.3C1144.6,87,1182,53,1218,40C1255.4,27,1292,33,1329,33.3C1366.2,33,1403,27,1440,33.3C1476.9,40,1514,60,1551,80C1587.7,100,1625,120,1662,133.3C1698.5,147,1735,153,1772,143.3C1809.2,133,1846,107,1883,103.3C1920,100,1957,120,1994,126.7C2030.8,133,2068,127,2105,116.7C2141.5,107,2178,93,2215,90C2252.3,87,2289,93,2326,96.7C2363.1,100,2400,100,2437,100C2473.8,100,2511,100,2548,86.7C2584.6,73,2622,47,2640,33.3L2658.5,20L2658.5,200L2640,200C2621.5,200,2585,200,2548,200C2510.8,200,2474,200,2437,200C2400,200,2363,200,2326,200C2289.2,200,2252,200,2215,200C2178.5,200,2142,200,2105,200C2067.7,200,2031,200,1994,200C1956.9,200,1920,200,1883,200C1846.2,200,1809,200,1772,200C1735.4,200,1698,200,1662,200C1624.6,200,1588,200,1551,200C1513.8,200,1477,200,1440,200C1403.1,200,1366,200,1329,200C1292.3,200,1255,200,1218,200C1181.5,200,1145,200,1108,200C1070.8,200,1034,200,997,200C960,200,923,200,886,200C849.2,200,812,200,775,200C738.5,200,702,200,665,200C627.7,200,591,200,554,200C516.9,200,480,200,443,200C406.2,200,369,200,332,200C295.4,200,258,200,222,200C184.6,200,148,200,111,200C73.8,200,37,200,18,200L0,200Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,60L18.5,70C36.9,80,74,100,111,113.3C147.7,127,185,133,222,113.3C258.5,93,295,47,332,33.3C369.2,20,406,40,443,63.3C480,87,517,113,554,133.3C590.8,153,628,167,665,156.7C701.5,147,738,113,775,113.3C812.3,113,849,147,886,163.3C923.1,180,960,180,997,160C1033.8,140,1071,100,1108,93.3C1144.6,87,1182,113,1218,103.3C1255.4,93,1292,47,1329,23.3C1366.2,0,1403,0,1440,26.7C1476.9,53,1514,107,1551,116.7C1587.7,127,1625,93,1662,86.7C1698.5,80,1735,100,1772,90C1809.2,80,1846,40,1883,46.7C1920,53,1957,107,1994,130C2030.8,153,2068,147,2105,143.3C2141.5,140,2178,140,2215,130C2252.3,120,2289,100,2326,86.7C2363.1,73,2400,67,2437,73.3C2473.8,80,2511,100,2548,106.7C2584.6,113,2622,107,2640,103.3L2658.5,100L2658.5,200L2640,200C2621.5,200,2585,200,2548,200C2510.8,200,2474,200,2437,200C2400,200,2363,200,2326,200C2289.2,200,2252,200,2215,200C2178.5,200,2142,200,2105,200C2067.7,200,2031,200,1994,200C1956.9,200,1920,200,1883,200C1846.2,200,1809,200,1772,200C1735.4,200,1698,200,1662,200C1624.6,200,1588,200,1551,200C1513.8,200,1477,200,1440,200C1403.1,200,1366,200,1329,200C1292.3,200,1255,200,1218,200C1181.5,200,1145,200,1108,200C1070.8,200,1034,200,997,200C960,200,923,200,886,200C849.2,200,812,200,775,200C738.5,200,702,200,665,200C627.7,200,591,200,554,200C516.9,200,480,200,443,200C406.2,200,369,200,332,200C295.4,200,258,200,222,200C184.6,200,148,200,111,200C73.8,200,37,200,18,200L0,200Z"></path><defs><linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 100px); opacity:0.8" fill="url(#sw-gradient-2)" d="M0,20L18.5,26.7C36.9,33,74,47,111,60C147.7,73,185,87,222,103.3C258.5,120,295,140,332,123.3C369.2,107,406,53,443,36.7C480,20,517,40,554,46.7C590.8,53,628,47,665,46.7C701.5,47,738,53,775,73.3C812.3,93,849,127,886,126.7C923.1,127,960,93,997,73.3C1033.8,53,1071,47,1108,63.3C1144.6,80,1182,120,1218,143.3C1255.4,167,1292,173,1329,176.7C1366.2,180,1403,180,1440,166.7C1476.9,153,1514,127,1551,120C1587.7,113,1625,127,1662,126.7C1698.5,127,1735,113,1772,120C1809.2,127,1846,153,1883,143.3C1920,133,1957,87,1994,73.3C2030.8,60,2068,80,2105,73.3C2141.5,67,2178,33,2215,33.3C2252.3,33,2289,67,2326,86.7C2363.1,107,2400,113,2437,126.7C2473.8,140,2511,160,2548,153.3C2584.6,147,2622,113,2640,96.7L2658.5,80L2658.5,200L2640,200C2621.5,200,2585,200,2548,200C2510.8,200,2474,200,2437,200C2400,200,2363,200,2326,200C2289.2,200,2252,200,2215,200C2178.5,200,2142,200,2105,200C2067.7,200,2031,200,1994,200C1956.9,200,1920,200,1883,200C1846.2,200,1809,200,1772,200C1735.4,200,1698,200,1662,200C1624.6,200,1588,200,1551,200C1513.8,200,1477,200,1440,200C1403.1,200,1366,200,1329,200C1292.3,200,1255,200,1218,200C1181.5,200,1145,200,1108,200C1070.8,200,1034,200,997,200C960,200,923,200,886,200C849.2,200,812,200,775,200C738.5,200,702,200,665,200C627.7,200,591,200,554,200C516.9,200,480,200,443,200C406.2,200,369,200,332,200C295.4,200,258,200,222,200C184.6,200,148,200,111,200C73.8,200,37,200,18,200L0,200Z"></path></svg>
	</section>


	
	<section class="body pt-4 intro-section mb-5">
		<div class="container">
			<div class="row intoro">
				<div class="col-md-6">
					<h4 class="py-3">Hello ! I'm Kashim Saikh</h4>
					<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Asperiores repellendus veniam aperiam aliquam labore, tempore saepe magnam corporis tempora necessitatibus maxime, officia, nesciunt, a fuga aspernatur quos dolorem voluptatibus dignissimos.</p>
						<p>Age : <span> 22 .</span> </p>
						<p>Email : <span> kashimsaikh42@gmail.com .</span> </p>
						<p>Skype : <span> jonny0to100@skype.com .</span> </p>
						<p>Phone : <span> 8345822352 .</span> </p>
						<p>Address : <span> West Bengal , India .</span> </p>
						<p>Status : <span> Available .</span> </p>
				</div>
				<div class="col-md-6 d-flex justify-content-center">
					<img src="img/img04.jpg" alt="img04.jpg">
				</div>
			</div>

		</div>
	</section>

	<section class="service">
		<div class="container">
			<div class="row">
				<h4 class="text-center mb-5">My Service</h4>
				<div class="col-md-6 service-item">
					<div class="card web-frontent-dev p-5">
						<i class="fa-solid fa-terminal"></i>
						<h5 class="py-2">Frontent Devoloper</h5>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ipsum placeat atque eaque amet dolore ex cum autem, repellendus voluptatibus, nisi saepe, sit? Ex doloribus hic quibusdam eligendi aut a.
					</div>
				</div>
				<div class="col-md-6 service-item">
					<div class="card web-backend-dev p-5">
						<i class="fa-solid fa-code"></i>
						<h5 class="py-2">Backend Devoloper</h5>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid at, quo voluptates. Recusandae ratione nihil ex omnis tempora blanditiis. Modi aspernatur, facere unde quis porro optio eligendi, quibusdam. Ipsum, neque.
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="skil">
		<div class="my-skil  position-relative">

			<!-- <svg class="wave-top" id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 110" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,0L15,7.3C30,15,60,29,90,44C120,59,150,73,180,66C210,59,240,29,270,22C300,15,330,29,360,29.3C390,29,420,15,450,23.8C480,33,510,66,540,80.7C570,95,600,92,630,84.3C660,77,690,66,720,66C750,66,780,77,810,84.3C840,92,870,95,900,88C930,81,960,62,990,47.7C1020,33,1050,22,1080,22C1110,22,1140,33,1170,36.7C1200,40,1230,37,1260,31.2C1290,26,1320,18,1350,27.5C1380,37,1410,62,1440,75.2C1470,88,1500,88,1530,86.2C1560,84,1590,81,1620,66C1650,51,1680,26,1710,12.8C1740,0,1770,0,1800,5.5C1830,11,1860,22,1890,27.5C1920,33,1950,33,1980,27.5C2010,22,2040,11,2070,16.5C2100,22,2130,44,2145,55L2160,66L2160,110L2145,110C2130,110,2100,110,2070,110C2040,110,2010,110,1980,110C1950,110,1920,110,1890,110C1860,110,1830,110,1800,110C1770,110,1740,110,1710,110C1680,110,1650,110,1620,110C1590,110,1560,110,1530,110C1500,110,1470,110,1440,110C1410,110,1380,110,1350,110C1320,110,1290,110,1260,110C1230,110,1200,110,1170,110C1140,110,1110,110,1080,110C1050,110,1020,110,990,110C960,110,930,110,900,110C870,110,840,110,810,110C780,110,750,110,720,110C690,110,660,110,630,110C600,110,570,110,540,110C510,110,480,110,450,110C420,110,390,110,360,110C330,110,300,110,270,110C240,110,210,110,180,110C150,110,120,110,90,110C60,110,30,110,15,110L0,110Z"></path></svg> -->

			<div class="row">
				<h4 class="py-5 text-center"> My Skills </h4>
				<div class="col-md-6 position-relative">
					<h6 class="text-center skil-name">Technical Skills</h6>

					<div class="techinical-skill">

						<i class="fa-brands fa-html5"></i>
						<p class="my-1">html</p>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
						</div>
						<i class="fa-brands fa-css3-alt"></i>
						<p class="my-1">Css</p>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
						</div>
						<i class="fa-brands fa-bootstrap"></i>
						<p class="my-1">Bootstrap</p>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
						</div>
						<i class="fa-brands fa-php"></i>
						<p class="my-1">PhP</p>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
						</div>
						<i class="fa-solid fa-database"></i>
						<p class="my-1">MySQL</p>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
						</div>
						<i class="fa-brands fa-square-js"></i>
						<p class="my-1">jQuery</p>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
						</div>

					</div>

				</div>
				<div class="col-md-6 position-relative">
					<h6 class="text-center skil-name">Professional Skills</h6>
					<div class="professional-skill">
						<p class="my-1">Creativity</p>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
						</div>
						
						<p class="my-1">Communication</p>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
						</div>
						
						<p class="my-1">Problem Solving</p>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
						</div>

						<p class="my-1">Teamwork</p>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <svg class="wave" id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 110" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,77L14.1,69.7C28.2,62,56,48,85,40.3C112.9,33,141,33,169,38.5C197.6,44,226,55,254,60.5C282.4,66,311,66,339,71.5C367.1,77,395,88,424,93.5C451.8,99,480,99,508,84.3C536.5,70,565,40,593,38.5C621.2,37,649,62,678,75.2C705.9,88,734,88,762,80.7C790.6,73,819,59,847,56.8C875.3,55,904,66,932,64.2C960,62,988,48,1016,34.8C1044.7,22,1073,11,1101,11C1129.4,11,1158,22,1186,23.8C1214.1,26,1242,18,1271,23.8C1298.8,29,1327,48,1355,51.3C1383.5,55,1412,44,1440,45.8C1468.2,48,1496,62,1525,69.7C1552.9,77,1581,77,1609,64.2C1637.6,51,1666,26,1694,14.7C1722.4,4,1751,7,1779,16.5C1807.1,26,1835,40,1864,49.5C1891.8,59,1920,62,1948,69.7C1976.5,77,2005,88,2019,93.5L2032.9,99L2032.9,110L2018.8,110C2004.7,110,1976,110,1948,110C1920,110,1892,110,1864,110C1835.3,110,1807,110,1779,110C1750.6,110,1722,110,1694,110C1665.9,110,1638,110,1609,110C1581.2,110,1553,110,1525,110C1496.5,110,1468,110,1440,110C1411.8,110,1384,110,1355,110C1327.1,110,1299,110,1271,110C1242.4,110,1214,110,1186,110C1157.6,110,1129,110,1101,110C1072.9,110,1045,110,1016,110C988.2,110,960,110,932,110C903.5,110,875,110,847,110C818.8,110,791,110,762,110C734.1,110,706,110,678,110C649.4,110,621,110,593,110C564.7,110,536,110,508,110C480,110,452,110,424,110C395.3,110,367,110,339,110C310.6,110,282,110,254,110C225.9,110,198,110,169,110C141.2,110,113,110,85,110C56.5,110,28,110,14,110L0,110Z"></path></svg> -->
		</div>
	</section>

<div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>

	<?php include 'include/footer.php'; ?>

<script>
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})

</script>