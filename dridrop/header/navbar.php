<?php
// session_start();
require 'controller/db_credentials.php';
if (isset($_SESSION['uemail'])) 
{
	$email = $_SESSION['uemail'];	
}
$notify = $conn->query("SELECT COUNT(Status) FROM `sharewith` WHERE Receiver = '$email' && Status = 0");
?>
<div class="header-main">
	<div class="header-left">
		<div class="logo-name">
			<a href="index.php"> 
				<h1>DriDrop</h1> 
				<!--<img id="logo" src="" alt="Logo"/>--> 
			</a> 								
		</div>
	   <div class="clearfix"> </div>
	</div>
	<div class="header-right">
		<div class="profile_details_left">
			<!--notifications of menu start -->
			<?php
			#notification count 
			$notify = $conn->query("SELECT COUNT(Status) FROM `sharewith` WHERE Receiver = '$email' && Status = 0");
			while ($row = $notify->fetch()) 
			{
				$num = $row['COUNT(Status)'];
			}
?>
			<ul class="nofitications-dropdown">
				<li class="dropdown head-dpdn">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-envelope"></i>
					<span class="badge"><?php echo $num; ?></span>
				</a>
				    <ul class="dropdown-menu">
		                 <li>
							<div class="notification_header">
								<h3>You have <?php echo $num; ?> new messages</h3>
							</div>

						</li>
										<?php
                         #msges sender
			$sqry = $conn->query("SELECT * FROM `sharewith` WHERE Receiver = '$email' ORDER by Date DESC LIMIT 3");
			while ($row = $sqry->fetch()) 
			{
				$sender = $row['Sender'];
				$stime = date("dS, M", strtotime($row['Date']));

				$sname = $conn->query("SELECT uname FROM `user` WHERE uemail = '$sender'");
				while ($row = $sname->fetch()) 
				{
					$sendername = $row['uname'];

					?>
						<li><a href="#">
							<div class="user_img">
								<i class="fa fa-user"></i>
							</div>
							<div class="notification_desc">
								<p><?php echo $sendername; ?></p>
								<p><span><?php echo $stime; ?></span></p>
							</div>
							<div class="clearfix"></div>	
						</a>
					</li>
							<?php
				}
			}

						?>
						<li>
							<div class="notification_bottom">
								<a href="inbox.php">See all messages</a>
							</div> 
						</li>
					</ul>
				</li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<!--notification menu end -->
		<div class="profile_details">		
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<!--  -->
						<div class="profile_img" style="margin-top: 0.5em;color: #555;">	<span class="prfil-img" style="margin-top: 0.5em;">
							<i class="fa fa-user"></i>
						</span> 
						<div class="user-name">
							<?php
							if (isset($_SESSION['uemail'])) 
							{
								$email = $_SESSION['uemail'];
								$userqry = $conn->query("SELECT uname FROM `user` WHERE uemail = '$email'");
								while ($row = $userqry->fetch()) 
								{
									$username = $row['uname'];
								}
							}
							?>
							<!-- Display user name -->
							<h4><b><?php echo $username;?></b></h4>
						</div>
					</div>
					<!--  -->
				</a>
			</li>
		</ul>
	</div>
	<div class="clearfix"> </div>				
</div>
<div class="clearfix"> </div>	
</div>

<!-- script-for sticky-nav -->
<script>
	$(document).ready(function() {
		var navoffeset=$(".header-main").offset().top;
		$(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".header-main").addClass("fixed");
			}else{
				$(".header-main").removeClass("fixed");
			}
		});
	});
</script>
	<!-- /script-for sticky-nav -->