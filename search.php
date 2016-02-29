<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>PlotsAround | The Portal for finding plots around Mysore</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Realty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Exo+2:400,900italic,900,800italic,800,700italic,700,600italic,600,500italic,500,400italic,300italic,300,200italic,200' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1200);
            });
        });
    </script>
    <!---End-smoth-scrolling---->
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $(".swipebox").swipebox();
        });
    </script>
    <style>
	   #searchPane
	   {
		 margin-left:20px;
		 padding-top:50px;
		 padding-left:100px;
		 padding-right:100px;
		}
	   #searchResults
	   {
		 padding-left:50px;
		 border-radius: 0px;
		 border: 2px solid #000000; 
         height: 100%; width:100%; font-size:0;		 
	   }
	   #image, #developerdetails, #personalDetails {display: inline-block; *display: inline; zoom: 1; vertical-align: top; font-size: 12px;}
	   #image
	   {
		  border-radius: 0px;
		  border: 2px solid #000000; 
          width:200px;
          height:200px;		     
	   }
	   #developerdetails
	   {
		  border-radius: 0px;
		  border: 2px solid #000000;
		  font-size:20px;
	   }
	   #personalDetails
	   {
		  border-radius: 0px;
		  border: 2px solid #000000;   
	   }
	   * {margin: 0; padding: 0;}	   
	</style>

</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-top">
                <div class="top-menu">
                    <span class="menu">
                        <img src="images/nav.png" alt="" />
                    </span>
                    <ul>
                        <li><a href="index.html" class="active">home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="projects.html">projects</a></li>
                        <li><a href="blog.html">blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <!-- script for menu -->

                    <script>
                        $("span.menu").click(function () {
                            $(".top-menu ul").slideToggle("slow", function () {
                            });
                        });
                    </script>

                    <!-- //script for menu -->

                </div>
                <div class="buttons">
                    <a href="joinus.html" class="button">join us</a>
                    <a href="login.html" class="button1">login</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="header-bottom">
                <div class="logo">
                    <a href="index.html">
                        <img src="images/plotsaround-logo2.png"></a>
                </div>
                <div class="search">
                    <form name="searchForm" action="./php/searchKeyword.php" method="POST">
                        <input type="text" value="" name="searchDb" placeholder="search...">
                        <input type="submit" value="">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
	<div id="searchPane">
	   <?php
	   session_start();
	   include_once "php/connectPAdb.php";
	   $result = array();
	   $result = $_SESSION['result'];
	   $rowCount = $_SESSION['rowcount'];
	    while (list($key, $value) = each($result)) 
		 {
		  echo $value;
         }		  
		
		  // echo 'Key '.$key.'Value '.$value.'\n';
		
		for($i=0;$i<$rowCount;$i++)
		{
		   echo'<div id="searchResults">';
	       echo '<div id="image"><a href="AdditionalDetails.php"><img src="./images/p16.jpg"></a></div>';
		   echo '<div id="developerdetails">';
		   echo '<table border="1">';
			while (list($key, $value) = each($result)) 
			{
			echo '<tr>';
			   if($key == "dev_name")
               {
    			echo  '<td><label> Project Name</td><td><label>'.$value.'</label>';
			   }
			   if($key == "builder_name")
               {				   
				echo  '<td><label> Builder Name<label>'.$value.'</label>';
			   }
			   if($key == "progress")
               {				   
				echo  '<td><label> Progress</td><td><label>'.$value.'</label>';
			   }
			   if($value == 1)
			   {
				echo '<td><label>MUDA Approval </label></td><td><label>Approved </label>';
			   }
			echo '</tr>';
			}
		   echo '</table>';
		   echo '</div>';	
		   echo '<div id="personalDetails">';
		   echo '<h3> Person to be contacted <h3>';
		   echo '</div>';
	       echo'</div>';
		}
	   ?>
	</div>
	
	
	