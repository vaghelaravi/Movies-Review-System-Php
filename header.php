<?php
 session_start();
include 'conn.php';
?>
<div id="demo-1" data-zs-src='["images/2.jpg", "images/12.jpg", "images/3.jpg","images/4.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php"><span>M</span>ovies<span> P</span>ro</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Genre <b class="caret"></b></a>

								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<?php
			                               
			                                $res=$conn->prepare("select * from tbl_category");
			                                
			                                $res->execute();
			                                while($row=$res->fetch())
			                                {
			                                    
			                                ?>
											<li><a href="genre.php?id=<?php echo $row['cate_id']?>"><?php echo $row['cate_name'];?></a></li>
											<?php
											}
											?>
										</ul>
									</div>
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							
							<li><a href="contact.php">Contact</a></li>

							
							<?php
							if (isset($_SESSION['login']))
							{
							?>
							<li><a href="logout.php"><i class="fa fa-user"></i>Logout</a>
							<?php
							}
							else
							{
							?>
							<li><a href="login.php"><i class="fa fa-user"></i>Login</a>
							</li>
							<?php
							}
							?>
							<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
						</ul>

					</div>
					<div class="clearfix"> </div>	
				</nav>
					<div class="w3ls_search">
									<div class="cd-main-header">
										<ul class="cd-header-buttons">
											
										</ul> <!-- cd-header-buttons -->
									</div>
									<div id="cd-search" class="cd-search">
										<form action="search.php" method="get">
											<input type="search" placeholder="Search..." name="name" >
										</form>
									</div>
								</div>
	
			</div> 
		  	
          
			   </div>
		<!--//header-w3l-->
			<!--/banner-info-->
			   <div class="baner-info">
			      <h3>Rate <span>On</span>Line <span>Mo</span>vies</h3>
				  <h4>It Helps To People Choose Best Movie To Watch....</h4>
				  
			   </div>
			<!--/banner-ingo-->		
		</div>
    </div>
  <!--/banner-section-->
 <!--//main-header-->
	         <!--/banner-bottom-->
			
			<!--//banner-bottom-->
		     <!-- Modal1 -->
					
				<!-- //Modal1 -->
				  <!-- Modal1 -->
					