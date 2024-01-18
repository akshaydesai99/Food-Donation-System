<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" /> 
    <title>Food</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">  
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content=""> 
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
     <!-- Latest compiled and minified CSS -->
     
    <link rel='stylesheet' type='text/css' href="assets/bootstrap/css/bootstrap.min.css">
  
    <!--  Font Awesome CSS -->
    <link rel='stylesheet' type='text/css' href="assets/custom/css/font-awesome.min.css">
   
   	
    <!-- Important Owl stylesheet -->
    <link rel='stylesheet' type='text/css' href="assets/owl-carousel/owl.carousel.css">   
    <!--Owl Default Theme -->
    <link rel='stylesheet' type='text/css' href="assets/owl-carousel/owl.theme.css">
   	
            <!--Slider Css-->	
    <link rel="stylesheet" type="text/css" href="assets/Slit-Slider/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="assets/Slit-Slider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/Slit-Slider/css/custom.css" />
 
        <!--menu style-->	
    <link rel="stylesheet" href="assets/menu/styles.css">
 
 	
       <!-- Custom CSS -->
    <link rel='stylesheet' type='text/css' href="assets/custom/css/style.css">    
        
    <!-- Latest compiled and minified JavaScript -->
     <script src="assets/custom/js/jquery-1.11.1.min.js"></script>
     <script src="assets/bootstrap/js/bootstrap.min.js"></script>  
     
     
       <!--Owl Default Theme -->
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    
    <!-- Google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    
       <!--menu style-->	
    <script src="assets/menu/script.js"></script>
	
        <!--Slider js-->	
    <script type="text/javascript" src="assets/Slit-Slider/js/modernizr.custom.79639.js"></script>
 
  
       
 </head>
<body>   
 	
    <!--main container-->
		<div id="main_container" class="main_container">
            <!--header wrapper Start Here-->
                <header class="header_wrapper">
                    <?php
                        session_start();
                    ?>
                       <!--Navigation  Start Here-->
                      		  <div id="menu">
                                 <div class="container">
                                <div class="row">
                                    <div class="pull-left logo"><a href="index.php">Login</a></div>
                                      <div class="pull-right">
                                     </div> 
                                </div> 
                             </div>  
                      		  </div>
                        <!--Navigation  End Here-->
                   <!--slider_wrapper Start Here-->
                </header>
            <!--header wrapper End Here-->   
            
            <!-- Middle Wrapper Start Here-->
            <section class="who_we_are_wrapper">
                      <div class="overly_bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="gray_block"><h2>Organization Login</h2>
                                    	<div class="corner_section">
                                            <div class="dots"></div>
                                        </div>
                                        <form action="" method="post" class="contact_form" id="contact_form">
							<div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Mobile Number" name="user" required="required" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" placeholder="Password" name="pass" required="required" />
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="form-control btn-primary" type="submit" name="olog"><span>Login</span></button>
                                                        </div>
						</form><br/>
                                                <a href="oreg.php"><font size="4">New Organization Register</font></a>
                                    </div>
                                </div>
                                
                            </div><br/><br/>
                        </div>
                       </div> 
                 </section>   
<?php            
   include 'dbconnection.php';
   if(isset($_REQUEST['olog'])){
        
        $query="select * from tblorganization where binary mobile='{$_POST['user']}' and binary password='{$_POST['pass']}'";
        $result=mysqli_query($link,$query);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
            if($row['confirmed']=="Y"){
                $_SESSION['id']=$row['id'];
                $_SESSION['user']=$row['name'];
                echo "<script> window.location.href='organization/' </script>";
            }else{
                echo "<script> alert('You are not been confirmed yet/Blocked. Contact to support.'); 
                     window.location.href='login.php'; </script>";
            }
        }else{
            echo "<script> alert('Invalid mobile number/password');
                           window.location.href='login.php'; </script>";
        }
    }
    
      if(isset($_REQUEST['dlog'])){        
        $query="select * from tblhotel where binary mobile='{$_POST['user']}' and binary password='{$_POST['pass']}'";
        $result=mysqli_query($link,$query);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
            if($row['confirmed']=="Y"){
                $_SESSION['id']=$row['id'];
                $_SESSION['user']=$row['name'];
                echo "<script> window.location.href='donner/' </script>";
            }else{
                echo "<script> alert('You are not been confirmed yet/Blocked. Contact to support.');
                     window.location.href='login.php'; </script>";
            }
        }else{
            echo "<script> alert('Invalid mobile number/password');
                window.location.href='login.php'; </script>";
        }
    }
    
     if(isset($_REQUEST['hlog'])){        
        $query="select * from tblngo where binary mobile='{$_POST['user']}' and binary password='{$_POST['pass']}'";
        $result=mysqli_query($link,$query);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
            if($row['confirmed']=="Y"){
                $_SESSION['id']=$row['id'];
                $_SESSION['user']=$row['name'];
                echo "<script> window.location.href='ngo/' </script>";
            }else{
                echo "<script> alert('You are not been confirmed yet/Blocked. Contact to support.');
                     window.location.href='login.php'; </script>";
            }
        }else{
            echo "<script> alert('Invalid mobile number/password');
                window.location.href='login.php'; </script>";
        }
    }
    ?>
            <!-- Footer Wrapper Start Here-->  
                 <footer class="footer_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                            	<h2>About</h2>
                                <p>This site is designed for the people who really want to help the poor or needy people. Lets come together and do not waste the food.</p>
                            </div>
                             
                            <div class="col-md-4 col-sm-4">
                            
                            </div>                            
                            <div class="col-md-4 col-sm-4">
                            	<h2>Info</h2>
                                <p>You can contact or visit us during working time.</p>
                                <p><span>Tel:</span> 1234 - 5678 - 9012 <br>
                                  <span> Email: </span> support@food.com <br>
                                  <span> Working Hours: </span> 10:00 a.m - 10:00 p.m	
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
              
        </div>           
    <!--main container end-->
 
  
   <!--PRE LOADER HERE-->
  <div id="pre-loader">
  		<div class="spinner">
          <div class="double-bounce1"></div>
          <div class="double-bounce2"></div>
        </div>
  </div> 
  
    <!-- Custom js -->
     <script src="assets/custom/js/custom.js"></script>
     
      <!--Slider js-->	
	<script type="text/javascript" src="assets/Slit-Slider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/Slit-Slider/js/jquery.slitslider.js"></script>
    <script type="text/javascript">	
			$(function(){var n=function(){var n=$("#nav-arrows"),t=$("#nav-dots > span"),r=$("#slider").slitslider({onBeforeChange:function(n,r){t.removeClass("nav-dot-current"),t.eq(r).addClass("nav-dot-current")}}),i=function(){e()},e=function(){n.children(":last").on("click",function(){return r.next(),!1}),n.children(":first").on("click",function(){return r.previous(),!1}),t.each(function(n){$(this).on("click",function(){var i=$(this);return r.isActive()||(t.removeClass("nav-dot-current"),i.addClass("nav-dot-current")),r.jump(n+1),!1})})};return{init:i}}();n.init()});
		</script> 
</body>
</html>