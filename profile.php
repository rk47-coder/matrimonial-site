
<?php 
if(!isset($_COOKIE['user'])){
    header("location:index.php");
}else{
    include 'connection.php';
    $email=$_COOKIE['user'];
    echo $code;
    $res=mysql_query("SELECT DISTINCT code from profile");
    ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Profile :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
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
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
    <?php include 'header.php'; ?>
 <!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
      <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Profile</li>
      </ul>
   </div>
      <?php
    while($re=mysql_fetch_array($res)){
        $code=$re['code'];
        
        $sql=mysql_query("select * from matri where code='$code'");
        if($r=mysql_fetch_array($sql)){
            
            ?>
      
<div class="row">
 <div class="col-md-9 profile_left1">
  	
    <div class="profile_top"><a href="show_profile.php?id=<?php echo $r['code']; ?>">
      <h2>&nbsp;&nbsp;<?php echo $r['name']; ?></h2>
	    <div class="col-sm-4 profile_left-top">
	    	<img src="images/p13.jpg" class="img-responsive" alt=""/>
	    </div>
        <!--
	    <div class="col-sm-3">
	      <ul class="login_details1">
			 <li>Last Login : 5 days ago</li>
			 <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
		  </ul>
	    </div>  -->
      <div class="col-sm-8">
	    	<table class="table_working_hours">
	        	<tbody>
	        		<tr class="opened_1">
						<td class="day_label1">Age / Height :</td>
						<td class="day_value">28, 5ft 5in / 163cm</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Last Login :</td>
						<td class="day_value">4 hours ago</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Religion :</td>
						<td class="day_value"><?php echo $r['religion']; ?></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Marital Status :</td>
						<td class="day_value"><?php echo $r['status']; ?></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Location :</td>
						<td class="day_value">India</td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Gender :</td>
						<td class="day_value closed"><span><?php echo $r['gender']; ?></span></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Education :</td>
						<td class="day_value closed"><span><?php echo $r['education']; ?></span></td>
					</tr>
			    </tbody>
		   </table>
		   <div class="buttons">
			   <div class="vertical">Send Mail</div>
			   <div class="vertical">Shortlisted</div>
			   <div class="vertical">Send Interest</div>
		   </div>
	    </div>
	    <div class="clearfix"> </div>
    </a></div>
      </div> 
        </div>
      <?php      
        }else{
            echo "<h2>there is no viewed profile yet</h2>";
        }
        
    }
    include 'footer.php';
}

?>
      