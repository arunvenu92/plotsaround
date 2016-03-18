
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
		 $(function(){

			$("#dropdown-menu1").on('click', 'li a', function(){
			  $("#price_button:first-child").text($(this).text());
			  $("#price_button:first-child").val($(this).text());
		   });
            
			$("#dropdown-menu2").on('click', 'li a', function(){
			  $("#locality_button:first-child").text($(this).text());
			  $("#locality_button:first-child").val($(this).text());
		   });
		});
    </script>
    <script>
	   function checkValue()
	   {
		   var searchForm = document.forms["searchForm"];
		   
		   var word = searchForm.elements["searchDb"].value;
		   var locality =searchForm.elements["search_locality"].value;
		   var price = searchForm.elements["search_price"].value;
		   
		   if(word=="" && locality == 0 && price == 0)
		   {
			 alert("Please give anyone of the search criteria"); 
             return false; 			 
		   }
		   else
		   {
			   return true;
		   }
		
		}
	</script>
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
                   <form name="searchForm" action="./php/searchKeyword.php" method="POST" onsubmit="return checkValue()">
                        <input type="text" name="searchDb" placeholder="search...">
						<input type="hidden" name="price" id="search_price" value="0">
						<input type="hidden" name="locality" id="search_locality" value="0">
						<div class="dropdown">
						  <button id="price_button" name="price"  class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select price
						  <span class="caret"></span></button>
						  <ul id="dropdown-menu1"  class="dropdown-menu">
						    <li><a onclick="$('#search_price').val('50-100');"> 500 - 1000</a></li>
							<li><a onclick="$('#search_price').val('1000 - 1500');"> 1000 - 1500</a></li>
							<li><a onclick="$('#search_price').val('1500 - 2000');"> 1500 - 2000</a></li>
						 </ul>
						</div>
						<div class="dropdown">
						  <button id="locality_button" name="locality" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Locality
						  <span class="caret"></span></button>
						  <ul id="dropdown-menu2" class="dropdown-menu">
							<li><a onclick="$('#search_locality').val('JP Nagar');">JP Nagar</a></li>
							<li><a onclick="$('#search_locality').val('Hebbal');">Hebbal</a></li>
							<li><a onclick="$('#search_locality').val('Bogadi Road');">Bogadi Road</a></li>
						  </ul>
						</div>
						<input type="submit" value="">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="banner-section">
        <div class="container">
            <div class="col-md-5 banner-gridimg">
                <img src="images/img2.jpg">
            </div>
            <div class="col-md-7 banner-grid">
                <h1>It's beautifully made & performs beautiful.</h1>
                <h5>Loving it is easy, that's why so many people do.</h5>
                <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis.nisl magna sodales eros, ut feugiat velit velit non turpis</p>
                <a href="#" class="button3">Purchase Now</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="content">
        <div class="join">
            <div class="container">
                <div class="col-md-2 join-grid">
                    <a href="#">join us now</a>
                </div>
                <div class="col-md-10 join-grid1">
                    <p>And get your own offer, Get a 30% discount for the first 5 purchases.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="services-section">
            <div class="container">
                <h3>our services</h3>
                <div class="services-grids">
                     <div class="col-md-3 services-grid">
                        <img src="images/service-5.png" class="img-responsive" alt="">
                        <h4>Why Invest in Plots? </h4>
                        <p>Indivual lands/plots provides you with sense of satisfaction, independence</p>
                        <a href="#" class="button4">more info</a>
                    </div>
                     <div class="col-md-3 services-grid">
                        <img src="images/service-3.png" class="img-responsive" alt="">
                        <h4>Save your time on research </h4>
                        <p>We offer you the list of best layouts/township in and around Mysore.</p>
                        <a href="#" class="button4">more info</a>
                    </div>
                    <div class="col-md-3 services-grid">
                        <img src="images/service-1.png" class="img-responsive" alt="">
                        <h4>Realtor's Hub</h4>
                        <p>Are you a real estate dealer/ have a property that you would like sell to the largest market? Your search ends here.</p>
                        <a href="#" class="button4">more info</a>
                    </div>
                    <div class="col-md-3 services-grid">
                        <img src="images/service-4.png" class="img-responsive" alt="">
                        <h4>Find Your Perfect Rental</h4>
                        <p>Search through thousands of listing in our reliable rentals sections. Your perfect rental just clicks away.</p>
                        <a href="#" class="button4">more info</a>
                    </div>                                    
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="Features-section">
            <div class="container">
                <h3>our best Features</h3>
                <div class="Features-grids">
                    <div class="col-md-3 Feature-grid">
                        <img src="images/img6.jpg" class="img-responsive zoom-img" alt="">
                        <h4>nulla nec ligula risus</h4>
                        <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis.</p>
                        <h5><span><img src="images/Indian_Rupee_symbol.png" height="20" width="14"></span>&nbsp 1.3 cr</h5>
                    </div>
                    <div class="col-md-3 Feature-grid">
                        <img src="images/img7.jpg" class="img-responsive zoom-img" alt="">
                        <h4>massa as laorretum</h4>
                        <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis.</p>
                        <h5><span><img src="images/Indian_Rupee_symbol.png" height="20" width="14"></span>&nbsp 1.8 cr</h5>
                    </div>
                    <div class="col-md-3 Feature-grid">
                        <img src="images/img8.jpg" class="img-responsive zoom-img" alt="">
                        <h4>lorem ipsum dolor est </h4>
                        <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis.</p>
                        <h5><span><img src="images/Indian_Rupee_symbol.png" height="20" width="14"></span>&nbsp 98 lacs</h5>
                    </div>
                    <div class="col-md-3 Feature-grid">
                        <img src="images/img9.jpg" class="img-responsive zoom-img" alt="">
                        <h4>lorem ipsum dolor est </h4>
                        <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis.</p>
                        <h5><span><img src="images/Indian_Rupee_symbol.png" height="20" width="14"></span>&nbsp 1.2 cr</h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="projects-section">
            <div class="container">
                <h3>Recent Projects</h3>
                <div class="Projects-grids">
                    <div class="projects1">
                        <div class="col-md-6 Projects-grid">
                            <img src="images/img10.jpg" class="img-responsive zoom-img " alt="">
                        </div>
                        <div class="col-md-6  Projects-grid">
                            <img src="images/img11.jpg" class="img-responsive zoom-img " alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="projects2">
                        <div class="col-md-6 Projects-grid">
                            <img src="images/img12.jpg" class="img-responsive zoom-img " alt="">
                        </div>
                        <div class="col-md-6  Projects-grid">
                            <img src="images/img13.jpg" class="img-responsive zoom-img " alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="RecentPosts-section">
            <div class="container">
                <h3>Recent Posts</h3>
                <div class="col-md-3 post-grid">
                    <img src="images/img14.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-md-9 post-grid1">
                    <h4>Nam erat nisl, mollis non vehicula in, feugiat a tortor.</h4>
                    <p class="date">Posted on April 5, 2013 by <a href="#">M-elgendy </a>- 13 comments</p>
                    <p class="text">Morbi pretium gravida justo nec ultrices. Ut et facilisis justo. Fusce ac turpis eros, vel molestie lectus. Fusce a ante risus, ac pellentesque nisi Vestibulum sagittis lorem ut tortor tincidunt fringilla.lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis.orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros.</p>
                    <a href="blog.html" class="button5">Continue Reading</a>
                </div>
            </div>
        </div>
        <div class="Resources-section">
            <div class="container">
                <div class="col-md-3 Resources">
                    <h3>about</h3>
                    <p>Morbi pretium gravida justo nec ultrices. Ut et facilisis justo. Fusce ac turpis eros, vel molestie lectus.feugiat velit velit non turpis</p>
                </div>
                <div class="col-md-3 Resources1">
                    <h3>resources</h3>
                    <ul>
                        <li>New Listing Sign-Up</li>
                        <li>Consectetur adipiscing</li>
                        <li>Integer molestie lorem</li>
                        <li>Facilisis in pretium nisl</li>
                    </ul>
                </div>
                <div class="col-md-3 Resources1">
                    <h3>Owners</h3>
                    <ul>
                        <li>Integer molestie lorem</li>
                        <li>Integer molestie lorem</li>
                        <li>Consectetur adipiscing</li>
                        <li>Lorem ipsum dolor sit</li>
                    </ul>
                </div>
                <div class="col-md-3 Resources1">
                    <h3>social</h3>
                    <ul>
                        <li>facebook</li>
                        <li>twitter</li>
                        <li>google</li>
                        <li>viemo</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="footer-section">
        <div class="container">
            <div class="footer-top">
                <p>Copyright &copy;2015  All rights  Reserved |Design by<a href="http://w3layouts.com" target="target_blank">W3Layouts</a></p>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
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
            <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>


        </div>
    </div>


</body>
</html>
