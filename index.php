<?php include('common/header.php'); ?>
		<div class="centerdiv">
			<img class="banner" src="images/banners/1.jpg">
			<div class="heading"> Welcome to Nivika Textile </div>
			<p>
                             <justify>Nivika(P) Ltd., headquartered in tamil nadu
                             , was establised during 1924 having diversified operations in textiles and wind 
                               It has its annual turnover of $ 42 Million. Avaneetha Textiles (P) Ltd., ensures topnotch 
				quality in both its yarn and knitted fabric. The company strives to provide the best in everything
				 to its Customer with reduced delivery times. For its quest for excellence,attention to every 
				detail is taken care. It is a comprehensive, one stop provider of Quality Products.The Company was
 				incorporated on 11.02.04, To begin with, a 15600 spindles Spinning Mill Project was implemented, 
 				the project began commercial production in late 2006 and by May 2007,  entire 15600 spindles were 
				commissioned.Implementation of a Project for adding 20400 spindles and The total installed capacity 
				is now 36000 spindles from Sept 2015.We manufacture semi-combed / combed hosiery cotton yarn with
				average count of  25’s. The yarn is sold in Domestic and Export market. As the mill has world class
				 production facilities, the yarn manufactured is of international  quality and hence is well received 
				in the market.The mill is located at #6,block 100-l near chawla metals, yamunanagar. </justify>
			</p>
			
			<div class="cols">
				<div class="column-wide" style="overflow:auto;">
					<div style="">
						<div class="heading">Director's Message</div>
						<img src="images/director.jpg" class="director">
						<p>
						  

                                                  <b>Dear Customers,</b>

                             We at Nivika Textile Company, with an aim to take India’s, Textile,
                              Industry to a higher level, and therefore provide best quality machinery and services
                              to the investors. We cater to our clientele with cost effective automatic machinery with a point to reduce
                              production cost and save energy. We deal in machinery which is environment friendly and as per 
                              international standards thus, producing products that attract international buyers.
                               Keeping in mind the limitations of India’s industry, we aim to introduce machinery that reduces the
                             cost of production and is durable.Our technical support team takes care of the machines, making sure
                            that they perform at their best.<br>

                    We work for the advancement of India's,Textile Industry and hope for a bright future!

                      
	      
                               
						</p>
					</div>
					
				</div>
				<div class="column4">
					<div class="heading">News and Updates</div>
					<marquee direction="up" style="margin:5px 0px;">
						<p> 
							<b> News 1 </b>
<br>
							The mega two-day Next sale begins on Saturday with doors opening at 7am.
							<br><br><br><br><br><br>
						</p>
						
					</marquee>
				</div>
			</div>
			<div class="heading">Latest Products</div>
			<div class="cols">
				<?php
					$psql="SELECT p.*,pc.pcname FROM products p, 
						product_categories pc WHERE
						p.pcid=pc.pcid and p.status='A' order by rand() limit 4";
					$pres=mysql_query($psql);
					while($product = mysql_fetch_array($pres)){
				?>
				<div class="column4">
					<div class="product">

						<img src="products/<?php echo $product['pphoto']; ?>" class="product-img" align="center" height="50px">
                                            
						<p align="center">
							<div class="product_desc" align="center">
								Name: <?php echo $product['pname']; ?><br>
								Material:  <?php echo $product['pmaterial']; ?><br>
								Cost:    <?php echo $product['pcost']; ?><br>
							</div>
							<div class="tag" align="center">
								<a href="viewproduct.php?pid=<?php echo $product['pid']; ?>">More Details</a>
							</div>
						</p>
					</div>
				</div>
				<?php } ?>
				
			</div>
		</div>

             
<?php include('common/footer.php'); ?>











