<?php include 'includes/config.php';
if(isset($_GET['a'])) {
$ref = $_GET['a'];
setcookie("referrer", $ref, time() + (86400*30));
}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>ANTLAX | Home</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<script src="slick/jquery-1.11.3.min.js"></script>
		<script src="slick/slick.js"></script>
	</head>
	<body>
		<header>
			<div class="banner">
				<div class="slider">
					<img src="images/background3.jpg">
					<div class="container_content">
						<div class="slider_text">
							<div class="slider-text-left">
								<h2 class="animatedd fadeInLeftt">Be Part of $100 Billion Ground Breaking Global Opportunity Platform Backed by Zero Deposit Investment Technology</h2>
								<!-- <hr class="animated-p fadeInLeft-p"> -->
							</div>
							<div class="slider-text-icon">
								<div class="slider-text-icon1">
									<a href="#"><img src="images/icon1.png"></a>
									<p>Registration without <br>verification</p>
								</div>
								<div class="slider-text-icon2">
									<a href="#"><img src="images/icon2.png"></a>
									<p>Real </br>account</p>
								</div>
								<div class="slider-text-icon3">
									<a href="#"><img src="images/icon3.png"></a>
									<p>No start deposit </br>is needed</p>
								</div>
								<div class="slider-text-icon4">
									<a href="#"><img src="images/icon4.png"></a>
									<p>Unparalleled Customer Support</p>
								</div>
							</div>
							<div class="slider-text-right"> 
								<button id="regB" class="animated-p fadeInLeft-p">Join Free Now</button>
							</div>					
						</div>
					</div>
				</div>
				<div class="slider">
					<img src="images/background3.jpg">
					<div class="container_content">
						<div class="slider_text">
							<div class="slider-text-left">
								<h2 class="animatedd fadeInLeftt">No-Capital Investment Mega Trend That Could Make You Effortless, Exponential and Consistent Monthly Income</h2>
								<!-- <hr class="animated-p fadeInLeft-p"> -->
							</div>
							<div class="slider-text-icon">
								<div class="slider-text-icon1">
									<a href="#"><img src="images/icon1.png"></a>
									<p>Registration without <br>verification</p>
								</div>
								<div class="slider-text-icon2">
									<a href="#"><img src="images/icon2.png"></a>
									<p>Real </br>account</p>
								</div>
								<div class="slider-text-icon3">
									<a href="#"><img src="images/icon3.png"></a>
									<p>No start deposit </br>is needed</p>
								</div>
								<div class="slider-text-icon4">
									<a href="#"><img src="images/icon4.png"></a>
									<p>Unparalleled Customer Support</p>
								</div>
							</div>
							<div class="slider-text-right"> 
								<button id="regBb" class="animated-p fadeInLeft-p">Join Free Now</button>
							</div>					
						</div>
					</div>					
				</div>
				<div class="slider">
					<img src="images/background3.jpg">
					<div class="container_content">
						<div class="slider_text">
							<div class="slider-text-left">
								<h2 class="animatedd fadeInLeftt">100% Legal Way to Make a Tax-Free Fortune Without <br>Deposit, Experience or Geographical Restrictions</h2>
								<!-- <hr class="animated-p fadeInLeft-p"> -->
							</div>
							<div class="slider-text-icon">
								<div class="slider-text-icon1">
									<a href="#"><img src="images/icon1.png"></a>
									<p>Registration without <br>verification</p>
								</div>
								<div class="slider-text-icon2">
									<a href="#"><img src="images/icon2.png"></a>
									<p>Real </br>account</p>
								</div>
								<div class="slider-text-icon3">
									<a href="#"><img src="images/icon3.png"></a>
									<p>No start deposit </br>is needed</p>
								</div>
								<div class="slider-text-icon4">
									<a href="#"><img src="images/icon4.png"></a>
									<p>Unparalleled Customer Support</p>
								</div>
							</div>
							<div class="slider-text-right"> 
								<button id="regBc" class="animated-p fadeInLeft-p">Join Free Now</button>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<div class="head_bar">
				<div class="container">
					<div class="logo">
						<a href="#"><h2><img src="images/logo.png"></h2></a>
					</div>
					<div class="menu">
						<div class="maindiv">
							<div class="hamburger">							
							</div>
						</div>	
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Gallary</a></li>
							<li><a href="#">Services</a></li>
							<li>
								<div id="feed">
									<span>feedback@antlax.com</span>
									<br>
									<button id="myBtn"><i class="fa fa-envelope-o"></i> Feedback</button>
								</div>
							</li>
							<li><a href="#"><img style="width: auto;height: 21px;" src="images/usa.png"></a></li>
						</ul>						
						<div id="myModal" class="modal"> 
						  <div class="modal-content">
						    <div class="modal-header">
						      <span class="close">&times;</span>
						      <div class="modal-header-left">
						      	<img src="images/logo.png">
						      </div>
						      <div class="modal-header-right">
						      	<p>Good day! We'd love to hear your feedback about your Account. </p> 
						      </div>
						    </div>
						    <div class="modal-body"> 
						      <p>How would you rate your experience on a scale of 1-10?</p>
						      <p>1 - Poor</p>
						      <p>10 - Excellent</p>
						      <div class="mod-b">
						      	<button>1</button>
						      	<button>2</button>
						      	<button>3</button>
						      	<button>4</button>
						      	<button>5</button>
						      	<button>6</button>
						      	<button>7</button>
						      	<button>8</button>
						      	<button>9</button>
						      	<button>10</button>
						      </div>
						      <p>Should you have any specific feedback, please select a category below.(optional)</p>
							    <div class="mod-s">
							    	<select>
	                                    <option value="Problem">Problem</option>
	                                    <option value="Suggestion">Suggestion</option>
	                                    <option value="Compliment">Compliment</option>
	                                    <option value="Other">Other</option>
	                                </select>
	                                <textarea rows="5"></textarea>
							    </div>
							    <div class="mod-send">
							      	<button>Cancel</button>
							      	<button>Send Feedback</button> 
							     </div>
						    </div>
						    <div class="modal-footer">
						      <h3>Antlax &copy;</h3>
						    </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="first-sec">
			<div class="standard">
				<div class="container_content">
					<div class="standard_my">
						<h2 class="animated fadeInLeft">About Antlax</h2>
						<p>Antlax is $100 Billion Ground Breaking Global Opportunity Platform Backed by Zero Deposit Investment Technology established to eliminate money blocks due to lack of start-up capital and adequate experience.</p>
						<p>Antlax gives every member equal opportunity to earn decent and legitimate living through No-Capital Investment Mega Trend That Could Make every member Effortless, Exponential and Consistent Monthly Income irrespective of their experience or geographical location leveraging Forex market with trillions of dollars exchanging hands daily.</p>
						<h4>It’s our simplest solution with greatest global effects ever. And it’s the first of its kind. It simply works!</h4> 
						<button id="regBa">Join Free Now</button> 
					</div>
					<div class="standard_my"> 
						<img src="images/aboutus.jpg"> 
					</div>
					<div id="myReg" class="regmodal"> 
					  <div class="regmodal-content">
					    <div class="regmodal-header">
					      <span class="regc">&times;</span>
					      <h2>Registration</h2>
					    </div>
					    <div class="regmodal-body">
					    	<div class="reg-sp"></div>
					      	<?php include 'partner/register_form.php'; ?>
					    </div>
					    <div class="regmodal-footer">
					      <h3>Antlax &copy;</h3>
					    </div>
					  </div>
					</div> 
					<div id="myRegb" class="regmodalb"> 
					  <div class="regmodalb-content">
					    <div class="regmodalb-header">
					      <span class="regcb">&times;</span>
					      <h2>Registration</h2>
					    </div>
					    <div class="regmodalb-body">
					    	<div class="regb-sp"></div>
					      	<?php include 'partner/register_form.php'; ?>
					    </div>
					    <div class="regmodalb-footer">
					      <h3>Antlax &copy;</h3>
					    </div>
					  </div>
					</div>
					<div id="myRegc" class="regmodalc"> 
					  <div class="regmodalc-content">
					    <div class="regmodalc-header">
					      <span class="regcc">&times;</span>
					      <h2>Registration</h2>
					    </div>
					    <div class="regmodalc-body">
					    	<div class="regc-sp"></div>
					      	<?php include 'partner/register_form.php'; ?>
					      	</div> 
					    </div>
					    <div class="regmodalc-footer">
					      <h3>Antlax &copy;</h3>
					    </div>
					  </div>
					</div>
					<div id="myRega" class="regmodala"> 
					  <div class="regmodala-content">
					    <div class="regmodala-header">
					      <span class="regca">&times;</span>
					      <h2>Registration</h2>
					    </div>
					    <div class="regmodala-body">
					    	<div class="rega-sp"></div>
					      	<?php include 'partner/register_form.php'; ?>
					    </div>
					    <div class="regmodala-footer">
					      <h3>Antlax &copy;</h3>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</section>		
		<section style="background-color: #f7f7f7;" class="last-sec">
			<div class="container_content">
				<div class="standard_content_title">
					<div class="real-time-left1">
						<div style="background-color: #f7f7f7;" class="real-left-back1">
							<img src="images/whyus.png">
						</div> 
					</div>
					<div class="real-time-right1">
						<div style="background-color: #f7f7f7;" class="real-right-back1">
							<h2>Why We Do This</h2>  
							<p>Forex is the deadliest market dreaded by everyone globally. We solved the problem and we like to prove to the world by building a huge community of beneficiaries.</p>
							<button id="regBd">Join Free Now</button> 
						</div> 
					</div>
				</div>
			</div>
		</section>
		<section class="last-sec">
			<div class="container_content">
				<div class="standard_content_title">
					<div class="real-time-left1">
						<div class="real-left-back1">
							<h2>How it Works</h2>
							<p>1. Register on our website, create your eWallet account and download our Android notification app
							from this website.</p>
							<br><br>
							<p>2. Verify your eWallet by confirming your phone number through SMS and your account will automatically be credited with all fund you need to commence your trading without capital investment of your own.</p>
							<br><br>
							<p>3. Download brokers trading app from their website. Link on this website.</p>
							<br><br>
							<p>4. Place orders according to instructions in notification received from us through our notification app. It	takes about 60 seconds week to make all the profit you desire monthly</p>
							<button>Join Free Now</button>
						</div> 
					</div>
					<div class="real-time-right1">
						<div class="real-right-back1">
							<img id="work" src="images/howitwork.jpg">
						</div> 
					</div>
				</div>
			</div>
		</section> 
		<section style="background-color: #f7f7f7;" class="first-sec">
			<div class="standard">
				<div class="container_content">
					<div style="background-color: #f7f7f7;" class="standard_my">
						<img id="deposit" src="images/deposit.png">  
					</div>
					<div style="background-color: #f7f7f7;" class="standard_my"> 
						<h2>Zero Deposit Investment</h2>
						<p>No capital deposit is required to benefit immensely from this <span>$100 Billion Ground Breaking Global Opportunity.</span> It’s a platform that is completely backed by <strong>Zero Deposit Investment</strong> Technology</p>
						<p>Irrespective of geographical location, every user account is automatically funded upon complete registration and phone verification.</p> 
						<button id="regBd">Join Free Now</button>
					</div> 
				</div>
			</div>
			<div id="myRegd" class="regmodald"> 
			  <div class="regmodald-content">
			    <div class="regmodald-header">
			      <span class="regcd">&times;</span>
			      <h2>Registration</h2>
			    </div>
			    <div class="regmodald-body">
			    	<div class="regd-sp"></div>
			      	<?php include 'partner/register_form.php'; ?>
			    </div>
			    <div class="regmodald-footer">
			      <h3>Antlax &copy;</h3>
			    </div>
			  </div>
			</div>
		</section> 	
		<section  class="last-sec">
			<div class="container_content">
				<div class="standard_content_title">
					<div class="real-time-left1">
						<div  class="real-left-back1">
							<h2>No Financial Experience Required </h2>
							<p>For you to earn Exponential and <span>Consistent Monthly Income</span> effortlessly, our hands-on-experienced financial experts scan over 52 financial assets round the clock and recommend the best asset with highest profit potential through your account notification inbox<br>
							<br>
							<strong>You’re not required to have trading experience to earn.</strong> </p>
							<button>Join Free Now</button>
						</div> 
					</div>
					<div class="real-time-right1">
						<div  class="real-right-back1">
							<img src="images/experience.png"> 
						</div> 
					</div>
				</div>
			</div>
		</section> 
		<section style="background-color: #f7f7f7;" class="first-sec">
			<div class="standard">
				<div class="container_content">
					<div style="background-color: #f7f7f7;" class="standard_my">
						<img id="bell" src="images/bell.png">  
					</div>
					<div style="background-color: #f7f7f7;" class="standard_my"> 
						<h2>Real-Time Profitable Trade Recommendations</h2>
					    <p>Once profitable assets are discovered, trade recommendations are sent to you through our notification app which a novice can <span>practically execute in less than 60 seconds</span> to <strong>consistently grow your equity exponentially each time.</strong></p>
					    <button>Join Free Now</button>
					</div> 
				</div>
			</div>
		</section> 	
		<section class="last-sec">
			<div class="container_content">
				<div class="standard_content_title">
					<div class="real-time-left1">
						<div class="real-left-back1">
							<h2>Consistent, Exponential Regular Income </h2>
							<p>With the initial account funded on us, every registered user is set up for <span>up to 500% monthly equity growth.</span></p>
							<br><br>
							<p>Your withdrawal volume and frequency determine your further account growth and size</p>
							<button>Join Free Now</button>
						</div> 
					</div>
					<div class="real-time-right1">
						<div class="real-right-back1">
							<img src="images/income.jpeg"> 
						</div> 
					</div>
				</div>
			</div>
		</section> 
		<section style="background-color: #f7f7f7;" class="first-sec">
			<div class="standard">
				<div class="container_content">
					<div style="background-color: #f7f7f7;" class="standard_my">
						<img id="friend" src="images/friend.png">  
					</div>
					<div style="background-color: #f7f7f7;" class="standard_my"> 
						<h2>Power to Earn More</h2> 
						<p>To double up your power to earn more, we pay you every time you successfully referred a new member when their account is funded upon complete registration and phone verification.</p>
						<p>Your referral earnings can be withdrawn at any time.</p>
						<button>Join Free Now</button>
					</div> 
				</div>
			</div>
		</section>
		<section class="last-sec">
			<div class="container_content">
				<div class="standard_content_title">
					<div class="real-time-left1">
						<div class="real-left-back1">
							<h2>Monthly Performance Bonus</h2>
							<p>We value your time just as you do. To achieve this, we give every loyal member ten percent (10%) of their monthly referral bonus automatically credited into their referral bonus wallet at the end of every month.</p>
							<button>Join Free Now</button>
						</div> 
					</div>
					<div class="real-time-right1">
						<div class="real-right-back1">
							<img src="images/tenp.png"> 
						</div> 
					</div>
				</div>
			</div>
		</section> 
		<section style="background-color: #f7f7f7;" class="first-sec">
			<div class="standard">
				<div class="container_content">
					<div style="background-color: #f7f7f7;" class="standard_my">
						<img id="loan" src="images/loan.png">  
					</div>
					<div style="background-color: #f7f7f7;" class="standard_my"> 
						<h2>Interest-Free Loan Without Collateral</h2>
						<p>Do you need loan for any purpose? We can give you <span>Interest Free Loan</span> with absolute peace of mind no matter the purpose you need it for. No collateral or guarantor is required to be qualified. 
						<p>To be qualified for this unsecured, interest free loan, you must earn minimum of $100 referral bonus monthly for three (3) consecutive calendar months without bonus withdrawal. The amount of loan you are entitled to equals 3x your total referral bonus in the past three (3) months.</p>
						<p>Bonus withdrawal is disabled for every account with active loan to allow three (3) months installment repayment. The loan is deducted from referral bonus account in 3 installments or you directly pay back at your convenience within three (3) months. Referral bonus withdrawal is enabled after successful payment. User will not qualify for new loan when one loan is active.</p>
						<button>Join Free Now</button>
					</div> 
				</div>
			</div>
		</section>
		<section class="last-sec">
			<div class="container_content">
				<div class="standard_content_title">
					<div class="real-time-left1">
						<div class="real-left-back1">
							<h2>Withdrawal to Local Bank or ATM Globally </h2>
					        <p>No matter your geographic location, withdrawal is as easy as selecting one of the payment systems in the Withdraw Funds menu of your account personal area. Indicate the amount to withdraw and the currency of your choice. Withdrawals via most electronic payment systems are typically completed within 24 hours on business days and Bank wire transfers may take 1-3 business days.<br><br> <strong>Note:</strong> The initial fund amount credited into your account will be liquidated during first withdrawal (only once) and you can withdraw your money to the last decimal without restrictions or let it yield.<br><br> <strong>You’re in total control.</strong></p>
					        <button>Join Free Now</button>
						</div> 
					</div>
					<div class="real-time-right1">
						<div class="real-right-back1">
							<img id="withdraw" src="images/withdraw.png"> 
						</div> 
					</div>
				</div>
			</div>
		</section> 
		<section style="background-color: #f7f7f7;" class="first-sec">
			<div class="standard">
				<div class="container_content">
					<div style="background-color: #f7f7f7;" class="standard_my">
						<img id="loan" src="images/salary.png">  
					</div>
					<div style="background-color: #f7f7f7;" class="standard_my"> 
						<h2>Account Managers: Income for Life</h2>
						<p>Apart from their regular trading account portfolios, Account Managers earn even more in monthly regular salary as they introduce others to join through their unique referral links. No limit to what they can earn. This is <span>Salary for Life</span> plan for selected users.</p>
						<p>Contact us now for more details if you are interested in becoming an account manager in your state or country.</p>
						<button>Join Free Now</button>
					</div> 
				</div>
			</div>
		</section>
		<section class="last-sec">
			<div class="container_content">
				<div class="standard_content_title">
					<div class="real-time-left1">
						<div class="real-left-back1">
							<h2>Monthly Referral Contest </h2>
							<p>Apart from individual referral earnings, top 1000 users will be compensated based on their position in the referral leader. $10,000 (Ten Thousand United States Dollars) will be shared among the top 1000 users who referred minimum of 1000 new and active users monthly.</p>
							<p>Account Managers are not allowed to participate in the monthly referral contest.</p>
							<button>Join Free Now</button>
						</div> 
					</div>
					<div class="real-time-right1">
						<div class="real-right-back1">
							<img id="win" src="images/win.jpg"> 
						</div> 
					</div>
				</div>
			</div>
		</section>
		<!-- <section class="third-sec">
			<div class="container_content">
				<div class="about">
					<h2>Monthly Performance Bonus</h2>
					<hr>
					<p>We value your time just as you do. To achieve this, we give every loyal member ten percent (10%) of their monthly referral bonus automatically credited into their referral bonus wallet at the end of every month.</p>
				</div>
				<div class="about_content">
					<i class="fa fa-lightbulb-o"></i>
					<h2>No Financial Experience Required </h2>
					<p>For you to earn Exponential and Consistent Monthly Income effortlessly, our hands-on-experienced financial experts scan over 52 financial assets round the clock and recommend the best asset with highest profit potential through your account notification inbox</p>
					<h4>You’re not required to have trading experience to earn.</h4>
				</div>
				<div class="about_content main-con-bdr">
					<i class="fa fa-keyboard-o"></i> 
					<h2>Real-Time Profitable Trade Recommendations</h2>
					<p>Once profitable assets are discovered, trade recommendations are sent to you through our notification app which a novice can practically execute in less than 60 seconds to consistently grow your equity exponentially each time.</p>
				</div>
				<div class="about_content">
					<i class="fa fa-bolt"></i>
					<h2>Consistent, Exponential Regular Income </h2>
					<p>With the initial account funded on us, every registered user is set up for up to 500% monthly equity growth.</p>
					<p>Your withdrawal volume and frequency determine your further account growth and size</p>
				</div>
			</div>
		</section> -->
		<!-- <section>
			<div class="standard_content_title">
				<div class="container_content">
					<div class="real-time-left">
						<div class="real-left-back">
							<h2>Why We Do This</h2>
							<hr>
							<p>Forex is the deadliest market dreaded by everyone globally. We solved the problem and we like to prove to the world by building a huge community of beneficiaries.</p>
						</div> 
					</div>
					<div class="real-time-right">
						<div class="real-right-back">
							<h2>How it Works</h2>
							<hr>
							<p>1. Register on our website, create your eWallet account and download our Android notification app
							from this website.<br>
							2. Verify your eWallet by confirming your phone number through SMS and your account will automatically be credited with all fund you need to commence your trading without capital investment of your own.<br>
							3. Download brokers trading app from their website. Link on this website.<br>
							4. Place orders according to instructions in notification received from us through our notification app. It	takes about 60 seconds week to make all the profit you desire monthly</p>
						</div>
						<h2>Main Title </h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						<h3><i class="fa fa-cloud-download"></i> Title</h3>
						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10 </p>
						<h3><i class="fa fa-cloud-download"></i> Title</h3>
						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10 </p> 
					</div>
				</div>
			</div>
		</section> -->
		<!-- <section>
			<div class="standard img-back">
				<div class="container_content">
					<div class="standard_new">
						<h2>Zero Deposit Investment</h2>
						<hr>
						<p>No capital deposit is required to benefit immensely from this $100 Billion Ground Breaking Global Opportunity. It’s a platform that is completely backed by <strong>Zero Deposit Investment</strong> Technology</p>
						<p>Irrespective of geographical location, every user account is automatically funded upon complete registration and phone verification.</p> 
					</div> 
				</div>
			</div>
		</section>
		<section>
			<div class="container_content">
				<div class="about">
					<h2>Interest-Free Loan Without Collateral</h2>
					<hr>
					<p>Do you need loan for any purpose? We can give you Interest Free Loan with absolute peace of mind no matter the purpose you need it for. No collateral or guarantor is required to be qualified. To be qualified for this unsecured, interest free loan, you must earn minimum of $100 referral bonus monthly for three (3) consecutive calendar months without bonus withdrawal. The amount of loan you are entitled to equals 3x your total referral bonus in the past three (3) months. Bonus withdrawal is disabled for every account with active loan to allow three (3) months installment repayment. The loan is deducted from referral bonus account in 3 installments or you directly pay back at your convenience within three (3) months. Referral bonus withdrawal is enabled after successful payment. User will not qualify for new loan when one loan is active.</p> 
				</div> 
				<div class="about_content">
					<i class="fa fa-lightbulb-o"></i>  
					<h2>Monthly Referral Contest </h2>
					<p>Apart from individual referral earnings, top 1000 users will be compensated based on their position in the referral leader. $10,000 (Ten Thousand United States Dollars) will be shared among the top 1000 users who referred minimum of 1000 new and active users monthly.</p>
					<p>Account Managers are not allowed to participate in the monthly referral contest.</p>
				</div>
				<div class="about_content main-con-bdr">
					<i class="fa fa-bolt"></i>  					   
					<h2>Withdrawal to Local Bank or Electronic Payment </h2>
					<p>No matter your geographic location, withdrawal is as easy as selecting one of the payment systems in the Withdraw Funds menu of your account personal area. Indicate the amount to withdraw and the currency of your choice. Withdrawals via most electronic payment systems are typically completed within 24 hours on business days and Bank wire transfers may take 1-3 business days.<br> <strong>Note:</strong> The initial fund amount credited into your account will be liquidated during first withdrawal (only once) and you can withdraw your money to the last decimal without restrictions or let it yield. <strong>You’re in total control.</strong></p>
				</div>
				<div class="about_content">
					<i class="fa fa-keyboard-o"></i>
					<h2>Account Managers: Income for Life</h2>
					<p>Apart from their regular trading account portfolios, Account Managers earn even more in monthly regular salary as they introduce others to join through their unique referral links. No limit to what they can earn. This is Salary for Life plan for selected users.</p>
					<p>Contact us now for more details if you are interested in becoming an account manager in your state or country.</p>
				</div>
			</div>
		</section>
		<section class="last-sec">
			<div class="standard_content_title">
				<div class="real-time-left1">
					<div class="real-left-back1">
						<h2>Power to Earn More: Referral Bonus</h2>
						<hr>
						<p>To double up your power to earn more, we pay you every time you successfully referred a new member when their account is funded upon complete registration and phone verification.</p>
						<p>Your referral earnings can be withdrawn at any time.</p>
					</div> 
				</div>
				<div class="real-time-right1">
					<div class="real-right-back1">
						<h2>Ways to Earn </h2>
						<hr>
						<p>1. Sixty (60) seconds effortless trading per week.<br>
						2. Refer others an earn more.<br>
						3. Become Account manager. Refer and train others and earn even more.<br><br>
						Income for live<br>
						Refer others as regular member or facilitator to earn passive income on regular basis. The more you refer the more you earn.</p>
					</div> 
				</div>
			</div>
		</section> -->
		<footer>
			<div class="container">
				<div class="company">
					<img src="images/logo.png">
					<p>Antlax is $100 Billion Ground Breaking Global Opportunity Platform Backed by Zero Deposit Investment Technology established to eliminate money blocks due to lack of start-up capital and adequate experience.</p>
				</div> 
			</div>
			<div class="bottom_bar">
				<div class="container_content">
					<nav>
						<p>© 2018. Antlax Ltd</p> | <a href="#"> Privacy Policy</a>
					</nav> 
				</div>
			</div>
		</footer>

		</div>
		<script>
			$(document).ready(function($) {
					$('.banner').slick({
							slidesToShow: 1,
							slidesToScroll: 1,
							dots: true,
							autoplay: true,
							autoplaySpeed: 4000,
							speed: 1500,
					});
					$('.testimonials-slider').slick({
						slidesToShow: 3,
						slidesToScroll: 1,
						dots: false,
						slidesToShow: 3,
						slidesToScroll: 1,
						 responsive: [
						  {
						    breakpoint: 768,
						    settings: {
						      slidesToShow: 2,
						      slidesToScroll: 1,
						     }
						    },
						    {
						     breakpoint: 640,
						    settings: {
						      slidesToShow: 1,
						      slidesToScroll: 1
						     }
						 }
						    ]
					});
			});
			$(document).ready(function(){
				$(".maindiv").click(function(){
					$(".menu ul").slideToggle();
				});
				$(".maindiv").on("click",function(){
					$(".maindiv").toggleClass("active");
				});
			});
		</script>
		<script type="text/javascript"> 
			var modal = document.getElementById('myModal');  
			var btn = document.getElementById("myBtn"); 
			var span = document.getElementsByClassName("close")[0];  
			btn.onclick = function() {
			    modal.style.display = "block";
			} 
			span.onclick = function() {
			    modal.style.display = "none";
			} 
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }
			}
		</script>
		<script> 
			var regmodal = document.getElementById('myReg');
			 
			var btnn = document.getElementById("regB"); 
			 
			var spann = document.getElementsByClassName("regc")[0];
			 
			btnn.onclick = function() {
			    regmodal.style.display = "block";
			}
			 
			spann.onclick = function() {
			    regmodal.style.display = "none";
			}
			 
			window.onclick = function(event) {
			    if (event.target == regmodal) {
			        regmodal.style.display = "none";
			    }
			}
		</script>
		<script> 
			var regmodala = document.getElementById('myRega');
			 
			var btnna = document.getElementById("regBa"); 
			 
			var spanna = document.getElementsByClassName("regca")[0];
			 
			btnna.onclick = function() {
			    regmodala.style.display = "block";
			}
			 
			spanna.onclick = function() {
			    regmodala.style.display = "none";
			}
			 
			window.onclick = function(event) {
			    if (event.target == regmodala) {
			        regmodala.style.display = "none";
			    }
			}
		</script>
		<script> 
			var regmodalb = document.getElementById('myRegb');
			 
			var btnnb = document.getElementById("regBb"); 
			 
			var spannb = document.getElementsByClassName("regcb")[0];
			 
			btnnb.onclick = function() {
			    regmodalb.style.display = "block";
			}
			 
			spannb.onclick = function() {
			    regmodalb.style.display = "none";
			}
			 
			window.onclick = function(event) {
			    if (event.target == regmodalb) {
			        regmodalb.style.display = "none";
			    }
			}
		</script>
		<script> 
			var regmodalc = document.getElementById('myRegc');
			 
			var btnnc = document.getElementById("regBc"); 
			 
			var spannc = document.getElementsByClassName("regcc")[0];
			 
			btnnc.onclick = function() {
			    regmodalc.style.display = "block";
			}
			 
			spannc.onclick = function() {
			    regmodalc.style.display = "none";
			}
			 
			window.onclick = function(event) {
			    if (event.target == regmodalc) {
			        regmodalc.style.display = "none";
			    }
			}
		</script>
		<script> 
			var regmodald = document.getElementById('myRegd');
			 
			var btnnd = document.getElementById("regBd"); 
			 
			var spannd = document.getElementsByClassName("regcd")[0];
			 
			btnnd.onclick = function() {
			    regmodald.style.display = "block";
			}
			 
			spannd.onclick = function() {
			    regmodald.style.display = "none";
			}
			 
			window.onclick = function(event) {
			    if (event.target == regmodald) {
			        regmodald.style.display = "none";
			    }
			}
		</script>
		 <script>
	$(document).ready(function (e) {
	$("#register_form").on('submit',(function(e) {
		e.preventDefault();
		$('.loading').show();
		$('.success').hide();
		$('.error').hide();
		$('#btnRegister').attr('disabled','disabled');
		$.ajax({
			url: "partner/user_register",
			type: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(data)
			{
				$('#btnRegister').removeAttr('disabled');
				$('.loading').hide();
				
				if(data.search("Error")!=-1){
					$('.error').show();
					$('.success').hide();
					$('.error').html(data);
				}
				else{
					$('.success').show();
					$('.error').hide();
					$('.success').html(data);
				}
			}
		});
	}));
});
function confirm_pw(value){
	var pw=$('#password').val();
	if(pw!=value){
		$('.pw_error_show').show();
		$('.pw_error_show').html('The same password should be entered in both fields. Please, re-enter the password correctly.');
		$('#btnSubmit').attr('disabled','disabled');
	}else{
		$('.pw_error_show').hide();
		$('#btnRegister').removeAttr('disabled');
	}
}
function getStates(value){
	$.post("partner/ajax_get_states",{country:value},function(data){
		if(data.length != 0){
			$('.state_now').hide();
			$('.state_show').show();
			$('.state_show').html(data);
		}
	});
}
</script>
	</body>
</html>