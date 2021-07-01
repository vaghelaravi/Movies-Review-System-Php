
<!DOCTYPE html>
<html>
<head>

<title>Movies Pro an Entertainment Category Flat Bootstrap Responsive Website Template | Genre :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Movies Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!-- pop-up -->
		<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
		<!-- //pop-up -->
		<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
		<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
		<!--/web-fonts-->
		<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
		<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<style type="text/css">
		.fa{
				  font-size: 20px;
				  color:#FF9800;
				  float: left;
				  cursor: pointer;
		}
		.rating{
			border-radius: 50px;
			border-color: black;

		}
		</style>
</head>
<body>
<!--/main-header-->
  			<?php
  			
  			include 'header.php';

  			?>
			
			<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.php">Home</a><i>//</i></li>
				
				<li>Single</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
						<div class="agile_featured_movies">
				            <div class="inner-agile-w3l-part-head">
					            <h3 class="w3l-inner-h-title">Movie Info</h3>
								
							</div>
							<?php
                                $id=$_GET['id'];
                                $res=$conn->prepare("select * from tbl_movies where movie_id =:movie_id");
                                $res->bindparam(":movie_id",$id);
                                $res->execute();
                                while($row=$res->fetch())
                                {
                                    
                                ?>

							   <div class="latest-news-agile-info">
								   <div class="col-md-12 latest-news-agile-left-content ">
											<div class=" w3l-movie-gride-agile requested-movies">
											       		<center>
														 <img src="images/<?php echo $row['image']?>" alt="" class="img-responsive" />
														 </center>
													</div>
											   <div class="player-text">
												<center><h4 class="side-t-w3l-agile"> <span><?php echo $row['name']?></span></h4></center>
												<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>
													<?php echo $row['story_line']?></p></br>
												<p class="fexi_header_para"><span>Release On<label>:</label></span><?php echo $row['release_date']?></p>
												<?php 
												$cate_id = $row['cate_id'];
											    
											    }  
											    ?>	

												<?php
                                				
				                                $res1=$conn->prepare("select * from tbl_category where cate_id =:cate_id");
				                                $res1->bindparam(":cate_id",$cate_id);
				                                $res1->execute();
				                                while($row1=$res1->fetch())
				                                {
                                    				$movie_id = $row1[0];
                                				?>
                                				
												<p class="fexi_header_para">
													<span>Genres<label>:</label> </span>
													<a href="genre.php"><?php echo $row1[1]?></a>  
																		
												<?php
												
											    }
												?>	
												</p>
											
												<p class="fexi_header_para fexi_header_para1"><span>Average Rating<label>:</label></span>
												<?php 
												$movie_id = $_GET['id'];
												$res2=$conn->prepare("select AVG(rating) AS avg from tbl_rating where movie_id =:movie_id");
				                                $res2->bindparam(":movie_id",$movie_id);
				                                $res2->execute();
				                                $row2=$res2->fetch();
				                                
				                                echo(round($row2['avg']))."/10";
				                               ?>
												</p>
											</div>
										    </div>
											<div class="single-agile-shar-buttons">
											    
											    <?php

												if (isset($_SESSION['login']))
												{
													$email =$_SESSION['login'];
													$res3=$conn->prepare("select * from tbl_rating where movie_id =:movie_id and user_name =:email");
												
												 	
												 	$res3->bindparam(':movie_id',$movie_id);
												 	$res3->bindparam(':email',$email);

													$res3->execute();
													$num=$res3->rowCount();
													$row3=$res3->fetch();
													
										
												?>
												<center>
											    <a class="login"  data-toggle="modal" 
											    <?php
											    	if($num>0)													{
														
														echo "data-target=".'"#alreadyrated"';
													}
													else
													{
														
														echo "data-target=".'"#myModal4"';
													}
											    ?>
											     >Rate This Movie</a>
											    </center>
											    <?php 
												}
												else
												{
												?>

												<center>
												<a class="login"  data-toggle="modal" data-target="#loginpopup">Rate This Movie</a>
											    
											    </center>
											    <?php
												 }
												?>
												
											</div>
										
										<div class="response">
							<center><h4>Comments</h4></center>
							<?php 
												$movie_id = $_GET['id'];
												$res4=$conn->prepare("select * from tbl_movie_comments where movie_id =:movie_id order by date desc");
				                                $res4->bindparam(":movie_id",$movie_id);
				                                $res4->execute();
				                                while($row4=$res4->fetch())
				                                {
				                 ?>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="">
										<img class="media-object" src="images/admin.jpg" alt="">
									</a>
									<h5><?php echo $row4['user_name']; ?></h5>
								</div>
								<div class="media-body response-text-right">
									<p><?php echo $row4['comment']; ?></p>
									<ul>
										<li><?php echo $row4['date']; ?></li>
										
									</ul>
								
								</div>
								<div class="clearfix"> </div>
							</div>
							<?php 
								} 
							?>
							
						</div>
											<div class="all-comments-info">
												 <h5 >LEAVE A COMMENT</h5>
												<div class="agile-info-wthree-box">

													<form action="comments_process.php" method="post">
														<input type="hidden" name="movie_id" value="<?php echo $_GET['id'];?>">
													   <div class="col-md-12 form-info">
														<input type="text" name="name" placeholder="Your Name You Want To Show In Comments" required="">	
														<textarea placeholder="Comments" required="" name="comment"></textarea>
														
														<input type="submit" value="SEND">		           					   

													  </div>
													   
													 <div class="clearfix"> </div>
														
														
													</form>
												</div>
											</div>
								   </div>
								  
								   <div class="clearfix"></div>
							   </div>
					
						</div>
				</div>
			<!--//content-inner-section-->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >

							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<center><h3>Rate This Movie.....</h3></center>
										<div class="login-form">
											<form action="submit_review.php" method="post">
												<div class="ratings">
													         <span class="fa fa-star-o"></span>
													         <span class="fa fa-star-o"></span>
													         <span class="fa fa-star-o"></span>
													         <span class="fa fa-star-o"></span>
													         <span class="fa fa-star-o"></span>
													         <span class="fa fa-star-o"></span>
													         <span class="fa fa-star-o"></span>
													         <span class="fa fa-star-o"></span>
													         <span class="fa fa-star-o"></span>
													         <span class="fa fa-star-o"></span>

												</div>
												<input type="hidden" name="movie_id" value="<?php echo $_GET['id']?>">
												<input type="hidden" class="rating-value" name="your_rating">
												<div class="tp">
													<input type="submit" value="Submit Review">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
		<div class="modal fade" id="loginpopup" tabindex="-1" role="dialog" >

							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<center><h3>Login Required For Ratting..</h3></center>
										<div class="login-form">
											
												<div class="tp">
													<a href="login.php"><input type="submit" value="Login"></a>
												</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
		<div class="modal fade" id="alreadyrated" tabindex="-1" role="dialog" >

							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<center><h3>You Are Already Rated This Movie...</h3>
											<h3>You Can Rate Another Movie.!!!!</h3>
											<h3>Thank You...</h3>
										</center>
										
									</div>
								</div>
							</div>
						</div>				

	<!--/footer-bottom-->
		<?php
			include 'footer.php';
		?>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-1.11.1.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
			<script>

				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
		<!-- search-jQuery -->
				<script src="js/main.js"></script>
			

			<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->

			<div id="small-dialog1" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		 autoPlay: 3000, //Set AutoPlay to 3 seconds
		  autoPlay : true,
		   navigation :true,

		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 

<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
	<script src="js/bootstrap.js"></script>

 
<script src="js/script.js"></script>
</body>
</html>