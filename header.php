<?php include('common/db.php'); ?>
<html>
	<head> 
		<title> Nivika Textiles | India's No.1 Textile Manufactuing Company </title>
		<link rel="stylesheet" href="css/style.css">
		<script src="js/script.js"></script>
	</head>
	<body>
		<div class="header">
			<div class="centerdiv">
				
				<div class="cols">
					<div class="column2"><br>
						<h2 class="logo">Nivika Textiles</h2>
					</div>
					<div class="column2">
						<h4 align="right">
						
							# 6, Block 100 - L, Near Chawla Metals<br>
                                                                yamunanagar <br>
							+91 - 9567547557, info@nivika.com
						</h4>
					</div>
				</div>
			</div>
			<div class="centerdiv">
				<div class="mainmenu">
					<ul>
						<li> <a href="index.php"> Home </a> </li>
						<li> <a href="about.php"> About </a> </li>
						<li> 
							<a href="#"> Product Categories </a>
							<ul>
								<?php
									$pcsql="select * from product_categories where pcstatus='A'";
									$pcres=mysql_query($pcsql);
									while($pcat = mysql_fetch_array($pcres)){
									$thisPcid = $pcat['pcid'];
								?>
								<li> 
									<a href="viewcategory.php?pcid=<?php echo $thisPcid; ?>"> <?php echo $pcat['pcname']; ?></a> 
								</li>
								<?php } ?>
										
							</ul>

						</li>
						<li> <a href="photogallery.php"> Photo Gallery </a> </li>
						<li> <a href="contactus.php"> Contact Us </a> </li>
					</ul>
				</div>
			</div>
		</div>