<?php
include '../dbconnection.php';
include 'component/nav/userheader.php';
session_start();
    if (!(isset($_SESSION['logid']))) {
    header('location:index.php');
}
$id = $_SESSION['logid'];
?>

<div class="promiss">
		<div class="container">
			<div class="promiss-main wow bounceInDown" data-wow-delay="0.3s">
				<h3>Our Promises and  Values</h3>
				<p>We offer deluxe, premium and luxury services. We give you our own personal assurance that you get to avail the facility you pay for to the fullest.</p>
			</div>
		</div>
	</div>
<!---welcome-->
	<div class="welcome">
		<div class="container">
			<div class="welcome-main">
				<div class="welcome-top">
					<h3>Terms And Conditions</h3>
				</div>
				<div class="welcome-bottom">
					<div class="col-md-6 welcome-left wow bounceInUp" data-wow-delay="0.3s">
						<p> * Deposit of 25% of total cost required upon confirmation</p>
						<p> * The rates are inclusive of all meals. No transfers are included in the mentioned rates</p>
						<p> * Children aged 5 and above will be treated as an adult and charged accordingly</p>
						<p> * A/C will function only from 09:00 PM to 06:00 AM except in Luxury Houseboats</p>
						<p> * Management will not be responsible for late arrivals and loss of valuables</p>
					</div>
					
					   <div class="col-md-3 wel-img1 wow bounceInLeft" data-wow-delay="0.3s">
						   <ul class="welcome-grid gr-welcome ">
								<!-- <li>
								   <h4 class="zero">There are many variation!</h4>
								   <p class="zero">Lorem ipsum dolor sit amet.</p>
								</li> -->
								<li><img class="top" src="theme/images/vvv.jpg" alt=""/></li>
							</ul>
					   </div>
						<!-- <div class="col-md-3 wel-img2 wow bounceInRight" data-wow-delay="0.3s">
						  <ul class="welcome-grid ">
								<li>
								   <h4 class="zero">There are many variation!</h4>
								   <p class="zero">Lorem ipsum dolor sit amet.</p>
								</li>
								<li><img class="top" src="theme/images/r5.jpg" alt=""/></li> 
							</ul>
					   </div> -->
				  <div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>


<?php
 include 'component/footer.php';
?>
