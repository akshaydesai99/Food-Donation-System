<!DOCTYPE html>
<html><head>
	<meta charset="utf-8" /> 
    <title>Food</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>  
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'/>
     <!-- Latest compiled and minified CSS -->
     
    <link rel='stylesheet' type='text/css' href="assets/bootstrap/css/bootstrap.min.css"/>
  
    <!--  Font Awesome CSS -->
    <link rel='stylesheet' type='text/css' href="assets/custom/css/font-awesome.min.css"/>
   
   	
    <!-- Important Owl stylesheet -->
    <link rel='stylesheet' type='text/css' href="assets/owl-carousel/owl.carousel.css"/>   
    <!--Owl Default Theme -->
    <link rel='stylesheet' type='text/css' href="assets/owl-carousel/owl.theme.css"/>
   	
            <!--Slider Css-->	
    <link rel="stylesheet" type="text/css" href="assets/Slit-Slider/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="assets/Slit-Slider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/Slit-Slider/css/custom.css" />
 
        <!--menu style-->	
    <link rel="stylesheet" href="assets/menu/styles.css"/>
 
 	
       <!-- Custom CSS -->
    <link rel='stylesheet' type='text/css' href="assets/custom/css/style.css"/>    
        
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
                                    <div class="pull-left logo"><a href="index.php">Food Supply</a></div>
                                      <div class="pull-right">
                                        <div id="cssmenu">
                                            <ul>
                                               <li class="active"><a href="index.php"><span> Home</span></a>                                               </li>
                                                    <?php
                                               if(isset($_SESSION['id']))
                                               echo "<li><a href='logout.php'><span>Logout</span></a></li>";
                                               else { ?>
                                               <li><a href="login.php"><span>Login</span></a></li>
                                               <?php
                                               }?>
                                             </ul>
                                      </div>
                                     </div> 
                                </div> 
                             </div>  
                      		  </div>
                        <!--Navigation  End Here-->

               <div class="demo-2">
                 <div id="slider" class="sl-slider-wrapper slider_wrapper">
                         
                    <div class="sl-slider">
                    
                        <div class="sl-slide " data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                            <div class="sl-slide-inner">
                            
                                <div class="bg-img bg-img-1"><div class="overly_bg"></div></div>
                                   
                                         <h2>   	 
                                        <div class="slider_text">
                                                 <h1>Helping Hand</h1>
                                               <blockquote> <p>Lift up your two hands; remember one is for helping others while the other is for helping you. Give a helping hand to whoever needs help.</p>
                                            </div>
                                        
                                       </h2>    
                              </div>
                        </div>
                        
                        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                            <div class="sl-slide-inner">
                                <div class="bg-img bg-img-2"><div class="overly_bg"></div></div>
                                
                                   <h2>   	 
                                     <div class="slider_text">
                                                 <h1>Needy People</h1>
                                               <blockquote> <p>Find out how much God has given you and from it take what you need; the remainder is needed by others.</p>
                                            </div>
                                    
                                   </h2>     
                                   
                                   
                            </div>
                        </div>
                        
                        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                            <div class="sl-slide-inner">
                                <div class="bg-img bg-img-3"><div class="overly_bg"></div></div>
                                  <h2>   	 
                                   <div class="slider_text">
                                                 <h1>Don’t waste food</h1>
                                               <blockquote> <p>Don’t waste food give away food instead of throwing it away in garbage bags.</p>
                                            </div>
                                   </h2>   
                            </div>
                        </div>
                        
                    </div>
                    
                    
                    <!-- /sl-slider -->
                    <nav class="nav-arrows" id="nav-arrows">
                        <span class="nav-arrow-prev">Previous</span>
                        <span class="nav-arrow-next">Next</span>
                    </nav>
                </div><!-- /slider-wrapper -->
            </div>
                     <!--slider_wrapper End Here-->	
                </header>
            <!--header wrapper End Here-->   
            
            
            <!-- Middle Wrapper Start Here-->
            <section class="who_we_are_wrapper">
                      <div class="overly_bg">
                        <div class="container">
                            <div class="row">

                            </div><br/><br/>
                        </div>
                       </div> 
                 </section>   
            
            
                  <section class="latest_project_wrapper">
                      <div class="overly_bg">
                        <div class="container">
                            <div class="row">
                                <h2>Overview of Organization</h2>
                              
                              <div class="three_item_carousel">
                              	<div class="project_img">
                                        <div class="image">
                                          	   <a href="#"> <img src="assets/img/img1.jpg"></a>
                                            </div>
                                         </div>  
                                         
                                         <div class="project_img">
                                        	<div class="image">
                                          	   <a href="#"> <img src="assets/img/img2.jpg"></a>
                                            </div>
                                         </div> 
                                         
                                          <div class="project_img">
                                        	<div class="image">
                                          	   <a href="#"> <img src="assets/img/img3.jpg"></a>
                                            </div>
                                         </div> 
                                  
                                         <div class="project_img">
                                        <div class="image">
                                          	   <a href="#"> <img src="assets/img/img1.jpg"></a>
                                            </div>
                                         </div>  
                                         
                                         <div class="project_img">
                                        	<div class="image">
                                          	   <a href="#"> <img src="assets/img/img2.jpg"></a>
                                            </div>
                                         </div> 
                                         
                                          <div class="project_img">
                                        	<div class="image">
                                          	   <a href="#"> <img src="assets/img/img3.jpg"></a>
                                            </div>
                                         </div> 
                                         
                               </div>
                                
                            </div>
                        </div>
                       </div> 
                 </section>
              <!--latest Project wrapper End Here-->    
             
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