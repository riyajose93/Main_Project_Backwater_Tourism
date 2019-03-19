<?php
 include 'component/nav/userheader.php';
 session_start();
    if (!(isset($_SESSION['logid']))) {
    header('location:index.php');
}
$id = $_SESSION['logid'];
?>
<div class="main-grid-one4" id="five">

	<div class="portfolio">
	    <div class="temp-heading">
		    <h3 class="main-head">Menu</h3>
		</div>
		<div class="menu-port">
			<div class="container">	
				<div class="menu-grid-main">
					<div class="col-md-4 menu-grid wow bounceInDown" data-wow-delay="0.3s">
						<a href="#"><img src="theme/images/r1.jpg" alt="" class="img-responsive"></a>
						<!-- <h4>Lorem -------------- $25</h4>					
						<p>On the other hand, we denounce with righteous indignation and dislike men who</p> -->
					</div>
					<div class="col-md-4 menu-grid wow bounceInLeft" data-wow-delay="0.3s">
						<a href="#"><img src="theme/images/p7.jpg" alt="" class="img-responsive"></a>
						<!-- <h4>Lorem -------------- $35</h4>					
						<p>On the other hand, we denounce with righteous indignation and dislike men who</p>
 -->					</div>
					<div class="col-md-4 menu-grid wow bounceInRight" data-wow-delay="0.3s">
						<a href="#"><img src="theme/images/p8.jpg" alt="" class="img-responsive"></a>
						<!-- <h4>Lorem -------- $20</h4>					
						<p>On the other hand, we denounce with righteous indignation and dislike men who</p> -->
					</div>
					
					<div class="col-md-4 menu-grid wow bounceInUp" data-wow-delay="0.3s">
						<a href="#"><img src="theme/images/p9.jpg" alt="" class="img-responsive"></a>
						<!-- <h4>Lorem -------- $40</h4>					
						<p>On the other hand, we denounce with righteous indignation and dislike men who</p> -->
					</div>
					<div class="col-md-4 menu-grid wow bounceInDown" data-wow-delay="0.3s">
						<a href="#"><img src="theme/images/p10.jpg" alt="" class="img-responsive"></a>
						<!-- <h4>Lorem -------- $50</h4>					
						<p>On the other hand, we denounce with righteous indignation and dislike men who</p> -->
					</div>
					<div class="col-md-4 menu-grid wow bounceInRight" data-wow-delay="0.3s">
						<a href="#"><img src="theme/images/p11.jpg" alt="" class="img-responsive"></a>
						<!-- <h4>Lorem -------- $50</h4>					
						<p>On the other hand, we denounce with righteous indignation and dislike men who</p> -->
					</div>
					
				 <div class="clearfix"> </div>
				</div>						
			</div>
		</div>
<!--enjoy-->
		<div class="enjoy-food">
			<div class="container">
				<h3>Enjoy Your Lunch</h3>
			</div>
		</div>
<!--portfolio-->
		<div class="portfolio-1">
		   <div class="container"> 
		   	 <div class="portfolio-1-main">
		   	 	<div class="col-md-4 port-right wow bounceInLeft" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>we denounce with right</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
						</li>
						<li><img class="top-grid" src="theme/images/p1.jpg" alt=""/></li>
					</ul>
				</div>
				<div class="col-md-4 port-right wow bounceInDown" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>we denounce with right</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
						</li>
						<li><img class="top-grid" src="theme/images/p2.jpg" alt=""/></li>
					</ul>
				</div>
				<div class="col-md-4 port-right wow bounceInRight" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>we denounce with right</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
						</li>
						<li><img class="top-grid" src="theme/images/p3.jpg" alt=""/></li>
					</ul>
				</div>
				
				<div class="col-md-4 port-right wow bounceInUp" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>we denounce with right</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
						</li>
						<li><img class="top-grid" src="theme/images/p4.jpg" alt=""/></li>
					</ul>
				</div>
				<div class="col-md-4 port-right wow bounceInUp" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>we denounce with right</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
						</li>
						<li><img class="top-grid" src="theme/images/p5.jpg" alt=""/></li>
					</ul>
				</div>
				<div class="col-md-4 port-right wow bounceInLeft" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>we denounce with right</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
						</li>
						<li><img class="top-grid" src="theme/images/p6.jpg" alt=""/></li>
					</ul>
				</div>
					<div class="clearfix"> </div>
		   	   </div>
		    </div>			    	     
		</div>
		  </div>
<?php
 include 'component/footer.php';
?>