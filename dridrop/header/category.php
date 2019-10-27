
	<div class="sidebar-menu" style="position: fixed;">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu">
		      	<!-- <h4><?php echo $usermail;?></h4> -->
		        <li id="menu-home" ><a href="main.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li id="menu-comunicacao" ><a href="post.php"><i class="fa fa-book nav_icon"></i><span>News Feed</span></span></a>
		         </li>
		        <li><a href="create_post.php"><i class="fa fa-cogs"></i><span>Create Post</span></a>
		        </li>
		        
		   <!--         <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li> -->
		        <li id="menu-academico" ><a href="saved.php"><i class="fa fa-file-text"></i><span>Saved</span></a>
		        </li>
		        
		    <!--    <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>  -->
		        <li><a href="inbox.php"><i class="fa fa-envelope"></i><span>Mailbox</span></a>
		        </li>

		        <li><a href="controller/logout.php"><i  class="fa fa-sign-out"></i><span>Logout</span></a>
		         </li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>

<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
 