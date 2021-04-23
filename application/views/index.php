<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>my bootstrap theme </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?php echo base_url(); ?>simpletheme/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>simpletheme/css/my.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>simpletheme/css/lightbox.css">
        <link href="<?php echo base_url(); ?>simpletheme/css/animate.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Stalemate' rel='stylesheet' type='text/css'>

        <!--awsem font-->
        <link href="<?php echo base_url(); ?>simpletheme/css/font-awesome.css" rel="stylesheet">
        <!-- end awesome font-->
        <script type='text/javascript' src="<?php echo base_url(); ?>simpletheme/js/jquery.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>simpletheme/<?php echo base_url(); ?>simpletheme/js/bootstrap.min.js"></script>
        <script type='text/javascript' src="js/jquery.scrollTo.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>simpletheme/js/lightbox.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>

        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->




        <style>
            /*left side*/
            @font-face {
                font-family: opensans-regular;
                src: url(fonts/opensans-regular.ttf);
            }
            @font-face{
                font-family: opensans-light;
                src:url(fonts/opensans-light.ttf);
            }

            .header{
                color: #fff ;
                background-color: #D63560 ;
                border-bottom: solid 1px #d6345f ;
                margin-top: 15px;
                margin-bottom: 20px;
                font-family: 'opensans-light' ;
                font-size:40px;
                font-weight: 200;
                text-align:center;
                text-decoration:none;
                line-height: 55px;

            }
            .margin-bottom{
                margin-bottom: 60px;
            }



            /*end search box*/
            /*end left side*/

            #home{
                -webkit-animation-duration: 3s;
                animation-duration: 3s;
                -moz-animation-duration: 3s;
            }
            #home img{
                max-height: 500px;
                width: 100%;
            }

            #intro .intro-head{
                margin-top:100px ;
                margin-bottom: 20px;
            }
            #intro .intro-text{
                margin-bottom: 50px;
                font-size: 20px;
                /*                line-height: 1.5;*/
            }
            spot{
                color :#C50559;
                font-weight: bold;
            }
            /*portofolio light box bootplay*/  
            .thumbnail {
                margin-bottom:6px;
                border: none;
            }


            /*contact us*/
            #map-canvas {
                width: 100%; 
                height: 300px;
                margin: 0;
                padding: 15px;
            }

            /*            .contactus {
                            margin:15px 0;
                        }*/

            /*bootstrap overwrite*/
            #pricing  .btn {
                border-radius: 0px;
                background-color:#D63560;
            }
            #pricing .btn:hover{
                background-color: #D63560;
            }

            #pricing .panel-heading{
                color: white;
                background-color: #D63560;
            }

            #pricing .panel-footer{
                background-color: white;
            }

            /*our team*/ 
            #ourteam img{
                margin-left: auto;
                margin-right: auto;
                border:  solid 1.5px #C50559 ;
                height: 200px;
                width: 200px;
                transition: .5s;
            }
            #ourteam img:hover{
                -webkit-transform: rotate(-5deg) scale(1.1, 1.1);
                -ms-transform: rotate(-5deg) scale(1.1, 1.1);
                transform: rotate(-5deg) scale(1.1, 1.1);
                transition: .5s;
            }
            #ourteam .team-name{
                color: #aa2145;
                margin-bottom: 5px;
            }
            #ourteam .team_position{
                color:#565656;
            }
            #ourteam .team-social-link{
                padding: 5px;
                text-decoration: none;
            }

            /*end our team*/


            .fa{
                color:#d6345f;
                -webkit-transition: color 0.5s;
                -o-transition: color 0.5s;
                -moz-transition: color 0.5s;
                transition: color 0.5s;
            }
            .fa:hover{
                color:#aa2145;
                -webkit-transition: color 0.5s;
                -o-transition: color 0.5s;
                -moz-transition: color 0.5s;
                transition: color 0.5s;;
            }

            /*scroll top*/
            .scrollToTop{
                padding: 5px;
                position:fixed;
                bottom:5px;
                right:0px;
                display: none;
                z-index: 999;
                -webkit-transition:  0.3s;
                -o-transition: 0.3s;
                -moz-transition: 0.3s;
                transition: 0.3s;
            }
            .scrollToTop:hover{
                text-decoration:none;
                bottom: 10px;
                -webkit-transition:  0.3s;
                -o-transition: 0.3s;
                -moz-transition: 0.3s;
                transition: 0.3s;
            }
            /*end scroll top */

            /* preload icon 
            .no-js #loader { display: none;  }
            .js #loader { display: block; position: absolute; left: 100px; top: 0; }
            .se-pre-con {
                    position: fixed;
                    left: 0px;
                    top: 0px;
                    width: 100%;
                    height: 100%;
                    z-index: 9999;
                    background: url(img/Preloader.gif) center no-repeat #fff;
            }
            */
        </style>

        <script>
            $(document).ready(function() {

                //Check to see if the window is top if not then display button
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('.scrollToTop').fadeIn();
                    } else {
                        $('.scrollToTop').fadeOut();
                    }
                });

                //Click event to scroll to top
                $('.scrollToTop').click(function() {
                    $('html, body').animate({scrollTop: 0}, 800);
                    return false;
                });

            });
        </script>

        <script>
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");
                ;
            });
        </script>

    </head>

    <!-- HTML code from Bootply.com editor -->

    <body>
        <!-- preload icon -->


        <div class="wrapper">

            <a href="#" class="scrollToTop"> <li class="fa fa-3x fa-angle-up"> </li> </a>

            <div class="row">
                <!--<div class="row">-->

                <!-- sidebar -->
                <div class="container">
                    <div class="row">
                        <div id="sidebar" class="column col-sm-3 col-xs-12 " >
                            <div id="logo" class="row  animated fadeInDown">
                                <a class="logo" href="#">Simple</a>
                            </div>
                            <nav id="nav" class=" navbar    animated fadeInLeft">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <!--<span class="sr-only">Toggle navigation</span>-->
                                        <span class="fa fa-4x fa-list"></span>

                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav links">

                                        <li class="active">
                                            <a href="#home">Home</a>
                                        </li>
                                        <li>
                                            <a href="#service">Service</a>
                                        </li>
                                        <li>
                                            <a href="#portfolio">portfolio</a>
                                        </li>
                                        <li>
                                            <a href="#blog">blog</a>
                                        </li>
                                        <li>
                                            <a href="#pricing">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="#ourteam">Our Team</a>
                                        </li>
                                        <li>
                                            <a href="#contactus">Contact us</a>
                                        </li>
                                        <li>          
											<a href="#login">Login</a>
                                        </li>
                                    </ul>
                                    <form class="form" role="search">
                                        <div class="input-group">
                                            <input type="text" class="form-control search-box" placeholder="Search" name="srch-term" id="srch-term">
                                            <div class="input-group-btn">
                                                <button  type="submit" class="btn search-box" ><i class="glyphicon glyphicon-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- /sidebar -->

                <!-- main -->

                <div id="main" class="column col-sm-9 col-xs-12" >

                    <div class="full col-sm-9">

                        <!--welcome-->
                        <div id='welcome' class="weclome">
                            <div class="col-sm-12">
                                <div class="wow fadeInDown">
                                    <div class='welcome-logo text-center wow  pulse' data-wow-delay="1s" data-wow-duration="2s" data-wow-iteration="infinite">
                                        <!--<li class="fa fa-2x fa-heart-o" ></li>-->
                                        <img class="logo-img " src="img/lionlogo1.jpg">
                                    </div>
                                </div>
                                <div  class='welcome-text text-center wow fadeIn'>
                                    <a href="#home"><h3>Simple Theme You Will Like It </h3></a>
                                </div>
                            </div> 
                        </div>
                        <!--End welcome-->
                        <div class="break"></div>
                        <!-- home -->
                        <div  id='home' class="  fadeInUp ">
                            <div  class="col-sm-12">   
                                <div class=" header text-center ">
                                    Home 
                                </div> 
                            </div>

                            <div class="row">    
                                <div class="col-sm-12">

                                    <div id="slider" class="carousel  carousel-fade" data-ride="carousel" data-interval="4000" data-pause="none">
                                        <ol class="carousel-indicators">
                                            <li data-target="#slider" data-slide-to="0" class="active"></li>
                                            <li data-target="#slider" data-slide-to="1"></li>
                                            <li data-target="#slider" data-slide-to="2"></li>
                                        </ol>
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item"><img  class="img-responsive" src="img/city-fading.jpg"/>
                                                <div class="carousel-caption">
                                                    <a href="#">
                                                        <h3>City Night</h3>
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item"><img  class="img-responsive" src="img/Bird.jpg"/>
                                                <div class="carousel-caption">
                                                    <a href="#">
                                                        <h3> Nice Bird</h3>
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item"><img  class="img-responsive" src="img/city2.jpg"/>
                                                <div class="carousel-caption">
                                                    <a href="#">
                                                        <h3> City Day</h3>
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Carousel nav -->
                                        <a class="carousel-control left" href="#slider" data-slide="prev"><span class="fa fa-2x fa-angle-double-left"></span></a>
                                        <a class="carousel-control right" href="#slider" data-slide="next"><span class="fa fa-2x fa-angle-double-right"></span></a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!--intro -->
                        <div id="intro" class="col-sm-12 wow fadeIn"  data-wow-duration="2s" >
                            <h1 class=" intro-head text-center"> SIMPLE THEME FOR MULTI PURPOSE  </h1>
                            <div  class="intro-text text-center margin-bottom">
                                You find that <spot>Simple Theme</spot> contains  the most uses element for your website designed via <spot> Tweeter  bootstrap framework</spot> like 
                                image slider , photos and videos gallery  , taps  , text slider, using amazing fonts and colors ,  That help you to  <spot>attracts visitors and clients  </spot> 

                            </div>
                        </div>
                        <!--end intro -->
                        <!--end home--> 
                        <div class="break"> </div>
                        <!--service -->
                        <div id="service" class="row">
                            <div class="col-sm-12 ">
                                <div class="header text-center margin-bottom ">
                                    Service 
                                </div> 
                            </div>
                            <div class="wow fadeIn animated" data-wow-duration="2s">
                                <h3 class="text-center">You Will Find What You  Need  </h3>
                                <p class="text-center margin-bottom">
                                    You can display your service via tow way there are tow column and three column
                                    <br>
                                    Just you will need to copy or remove our readable code
                                </p>
                            </div>
                            <div class="row padding">
                                <!--2 columns -->
                                <div class="col-md-6 text-center wow fadeInLeft" data-wow-duration="2s">
                                    <i class="fa  fa-leaf fa-5x "></i>
                                    <div class="panel-heading">
                                        <h3>Nice For you </h3>
                                    </div>
                                    <div class="panel-body text-justify">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6 text-center wow fadeInRight" data-wow-duration="2s">
                                    <i class="fa  fa-wechat fa-5x "></i>
                                    <div class="panel-heading">
                                        <h3>Open Vision</h3>
                                    </div>
                                    <div class="panel-body text-justify">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>

                                    </div>
                                </div>
                                <!--3 columns-->
                                <div class=" col-md-4 text-center wow fadeInLeft" data-wow-duration="2s">
                                    <i class="fa  fa-send-o fa-5x "></i>
                                    <div class="panel-heading">
                                        <h3>Free Thinking</h3>
                                    </div>
                                    <div class="panel-body text-justify">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-4 text-center wow fadeInDown" data-wow-duration="3s">
                                    <i class="fa  fa-heart-o fa-5x "></i>
                                    <div class="panel-heading">
                                        <h3>We love Our work</h3>
                                    </div>
                                    <div class="panel-body text-justify">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-4 text-center wow fadeInRight" data-wow-duration="2s">
                                    <i class="fa  fa-eye fa-5x "></i>
                                    <div class="panel-heading">
                                        <h3>Open Vision</h3>
                                    </div>
                                    <div class="panel-body text-justify">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>

                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--/service-->
                        <div class="break"></div>

                        <!--portfolio--> 


                        <div id="portfolio"  class="row">
                            <div class="col-sm-12">
                                <div class="header text-center">
                                    Portfolio
                                </div>
                            </div>
                            <div class="wow fadeIn" data-wow-duration="2s">
                                <h3 class="text-center">Multicolumn Gallery</h3>
                                <div class="text-center">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit

                                        <br>
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua

                                </div>
                            </div>
                            <div class="row">
                                <!--2 columns-->
                                <div class=" col-sm-6 col-xs-6  col-xs-12 wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/building1.jpg" class=" img-responsive" />
                                        <a  href="img/building1.jpg"  class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class=" col-sm-6 col-xs-6 col-xs-12 wow fadeIn" data-wow-duration="2s" >
                                    <div class="view view-first" >
                                        <img src="img/Bird.jpg" class=" img-responsive" />
                                        <a  href="img/Bird.jpg"  class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <!--3 columns-->
                                <div class=" col-lg-4 col-sm-6 col-xs-6 wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/city3.jpg" class="  img-responsive" />
                                        <a href="img/city3.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class=" col-lg-4 col-sm-6 col-xs-6 wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/summer-to-fall.jpg" class="  img-responsive" />
                                        <a  href="img/summer-to-fall.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-6 wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/city4.jpg" class="  img-responsive" />
                                        <a  href="img/city4.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <!--4 columns--> 

                                <div class="last-column-gallery col-lg-3 col-sm-6 col-xs-6  wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/city3.jpg" class="  img-responsive" />
                                        <a  href="img/city3.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="last-column-gallery col-lg-3 col-sm-6 col-xs-6  wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/city4.jpg" class="  img-responsive" />
                                        <a  href="img/city4.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="last-column-gallery col-lg-3 col-sm-6 col-xs-6  wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/fading_silhouette_____Paris_by_denkyo.jpg" class="  img-responsive" />
                                        <a  href="img/fading_silhouette_____Paris_by_denkyo.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="last-column-gallery col-lg-3 col-sm-6 col-xs-6  wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/golden.jpg" class="  img-responsive" />
                                        <a  href="img/golden.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--/portfolio-->
                        <div class="break"></div>

                        <!--Last Blog-->

                        <!--last blog tap-->
                        <div id="blog"  role="tabpanel">
                            <div class="col-sm-12">
                                <div class="header text-center">
                                    Last Blog
                                </div>
                            </div>
                            <div class="wow fadeIn" data-wow-duration="2s">
                                <h3 class="text-center">Display last blog many ways </h3>
                                <div class="text-center margin-bottom">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit

                                        <br>
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua

                                </div>
                            </div>

                            <!-- Nav tabs -->


                            <div class="col-md-12">

                                <ul class="lion-nav-tabs text-center col-md-offset-2" role="tablist">
                                    <li class="active " role="presentation" ><a class="" href="#Video" aria-controls="video" role="tab" data-toggle="tab">Video</a></li>
                                    <li  role="presentation"><a class="" href="#image" aria-controls="image" role="tab" data-toggle="tab">Image</a></li>
                                    <li  role="presentation"><a class="" href="#readmore" aria-controls="readmore" role="tab" data-toggle="tab">Read more</a></li>
                                </ul>
                            </div>

                            <div class="clear"></div>

                            <!-- Tab panes -->
                            <div  class="tab-content">
                                <!--video tab-->
                                <div id="Video" role="tabpanel" class="tab-pane fade in active" >
                                    <div class=" demo-video text-center">
                                        <!--[if !IE]>  width="620" height="349" -->
                                        <video class="video-js col-sm-8 col-xs-12" controls preload="auto"  poster="img/video/poster.jpg" data-setup="{}">
                                            <source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.mp4" type="video/mp4">
                                            <source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.webm" type="video/webm">
                                        </video>
                                        <!-- <![endif]-->

                                        <!--[if IE]>
                                          <video class="video-js" controls preload="auto" width="620" height="256" poster="http://video-js.zencoder.com/oceans-clip.jpg" data-setup="{}">
                                            <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4'/>
                                            <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm'/>
                                          </video>
                                        <![endif]-->
                                    </div> <!-- /video -->
                                    <h3 class="text-center"> Lorem ipsum dolor sit amet</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                    </p>
                                </div>
                                <!--/ video tab-->
                                <!--image tab--> 
                                <div id="image" role="tabpanel" class="tab-pane fade img-responsive " > 
                                    <img src="img/Bird.jpg"> 
                                    <h3> Lorem ipsum dolor sit amet</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                                <!--/ image tab-->
                                <!--read more tab--> 
                                <div id="readmore" role="tabpanel" class="tab-pane fade" >
                                    <img src="img/tree.jpg">
                                    <h3> Lorem ipsum dolor sit amet</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <a  href="" data-toggle="modal" data-target="#hidden-content" show="true">
                                        Read More 
                                    </a>
                                    <!-- (Hidden content) read more modal -->
                                    <div id="hidden-content" class="modal  animated fadeInDown"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content  ">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i aria-hidden="true" class="fa fa-2x fa-times-circle"></i></button>
                                                <div class="modal-body">
                                                    <img src="img/tree.jpg" class="img-responsive">
                                                    <h3> Lorem ipsum dolor sit amet</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ (Hidden content) read more modal --> 
                            </div>
                            <!--/read more tab-->
                        </div>
                        <!-- End last bolg-->

                        <div class="break"></div>
                        <div id="splitter" class="col-md-12">
                            <div class="underline"></div>
                        </div>
                        <!--article-->
                        <div id="article" >
                            <!--Right to left blog-->
                            <div id="rtl" class="row column padding">
                                <div  class="col-md-12 ">
                                    <img class="img-circle wow fadeInRight animated " src="img/golden.jpg" data-wow-duration="3s">
                                    <div class="wow fadeInLeft animated">
                                        <h2>Right To Left</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <!--End Right to left blog-->

                            <div id="splitter" class="col-md-12">
                                <div class="underline"></div>
                            </div>
                            <!--Left to right blog-->
                            <div id="ltr" class="row ">
                                <div class="col-md-12">
                                    <img class="img-circle rtl wow fadeInLeft animated " src="img/golden.jpg" data-wow-duration="3s">
                                    <div class="wow fadeInRight animated">
                                        <h2>Left To Right</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <!--End Left To right Blog--> 
                        </div>
                        <!--/article-->
                        <div id="splitter">
                            <div class="underline"></div>
                        </div>
                        <!--carousal-->
                        <div id="carousal" class="margin-bottom">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <div class= "row text-center">
                                                    <i class="fa fa-3x fa-quote-right"></i>
                                                </div>
                                                <h2 class="text-center">Featured Topics </h2>
                                                <p class="text-center">
                                                    have deferent vision to be creative, have deferent vision to be creativehave deferent vision to be creativehave deferent vision to be creative          
                                                </p>

                                            </div>
                                            <div class="item">
                                                <div class= "row text-center">
                                                    <i class="fa fa-3x fa-twitter"></i>
                                                </div>
                                                <h2 class="text-center">Last Tweets </h2>
                                                <p class="text-center">
                                                    You can find what you need faster than you expect ,  Now you see the suitable one 
                                                </p>

                                            </div>
                                            <div class="item">
                                                <div class= "row text-center">
                                                    <i class="fa fa-4x fa-smile-o"></i>
                                                </div>
                                                <h2 class="text-center">Smile and keep it simple </h2>
                                                <p class="text-center">
                                                    When you smile you find that every thing is simple , When you smile you find that every thing is simple ...
                                                </p>

                                            </div>

                                        </div>
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                    </div>

                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="fa fa-3x fa-angle-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="fa fa-3x fa-angle-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>


                        </div>

                        <!--End carousal-->

                        <div class="break"></div>

                        <!--pricing-->

                        <div id="pricing"  > 
                            <div class="col-sm-12">
                                <div class="header text-center">
                                    Pricing 
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="panel panel-danger wow fadeInLeft" >
                                        <div class="panel-heading"><h3 class="text-center">One Plan</h3></div>
                                        <div class="panel-body text-center">
                                            <p class="lead" style="font-size:40px"><h2>$10 / month</h2></p>
                                        </div>
                                        <ul class="list-group list-group-flush text-center">
                                            <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                                            <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                                            <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                                        </ul>
                                        <div class="panel-footer">
                                            <a class="btn btn-lg btn-block btn-danger" href="">BUY NOW!</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-danger wow tada animated" data-wow-iteration="2">
                                        <div class="panel-heading"><h3 class="text-center">Featured Plan</h3></div>
                                        <div class="panel-body text-center">
                                            <p class="lead" style="font-size:40px"><h2>$10 / month<//h2></p>
                                        </div>
                                        <ul class="list-group list-group-flush text-center">
                                            <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                                            <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                                            <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                                        </ul>
                                        <div class="panel-footer">
                                            <a class="btn btn-lg btn-block btn-danger" href="">BUY NOW!</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-danger wow fadeInRight animated" >
                                        <div class="panel-heading"><h3 class="text-center">Free Plan</h3></div>
                                        <div class="panel-body text-center">
                                            <p class="lead" style="font-size:40px"><h2>$10 / month</h2></p>
                                        </div>
                                        <ul class="list-group list-group-flush text-center">
                                            <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                                            <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                                            <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                                        </ul>
                                        <div class="panel-footer">
                                            <a class="btn btn-lg btn-block btn-danger" href="">BUY NOW!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/pricing-->
                        <div class="break"></div>

                        <!--our team--> 

                        <div id="ourteam" class="row margin-bottom">

                            <div class="col-sm-12">
                                <div class="header text-center margin-bottom">
                                    Our Team
                                </div>
                            </div>
                            <div class="wow fadeIn" data-wow-duration="2s">
                                <h3 class="text-center ">Meet Our Profesional  Team</h3>

                                <p class="text-center margin-bottom"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                    <br>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                                </p>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-6  wow fadeInDown ">
                                <img src="img/lion.jpg" class="img-circle img-responsive">
                                <div class="text-center team-name"> Osos Hammad  </div>
                                <div class="text-center team_position">Founder Of lionlab.net </div>
                                <div id="team-social" class="text-center">
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-facebook"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-dribbble"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-6 wow fadeInUp">
                                <img src="img/team4.jpg" class="img-circle  img-responsive">
                                <div class="text-center team-name"> Bedo Hammad</div>
                                <div class="text-center team_position">Project Manager  </div>
                                <div id="team-social" class="text-center">
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-facebook"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-dribbble"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-6 wow fadeInDown">
                                <img src="img/team2.jpg" class="img-circle img-responsive">
                                <div class="text-center team-name"> Omar Osos </div>
                                <div class="text-center team_position">UX / UI Designer </div>
                                <div id="team-social" class="text-center">
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-facebook"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-dribbble"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-6 wow fadeInUp">
                                <img src="img/team3.jpg" class="img-circle img-responsive">
                                <div class="text-center team-name"> Loca Bedo</div>
                                <div class="text-center team_position">Senior Developer  </div>
                                <div id="team-social" class="text-center">
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-facebook"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-dribbble"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>


                        </div>

                        <!--End our team--> 

                        <div class="break"></div>

                        <!--contact us-->

                        <div id="contactus" class="row contactus margin-bottom ">
                            <div class=" header text-center">Where In The World? </div>

                            <div id="map-canvas" ></div>
                            <hr>
                            <div class="col-sm-4"> <address>
                                    <strong>Acme, LLC.</strong><br>
                                    <span id="map-input">
                                        700 Main St, Suite 600 700 Main St, Suite 600 700 Main St, Suite 600<br>
                                        Springfield, MA 94107<br>
                                    </span>
                                    P: (123) 456-7890
                                </address>
                                <address>
                                    <strong>Email Us</strong><br>
                                    <a href="mailto:#">first.last@example.com</a>
                                </address> 
                            </div>
                            <form class=" clearfix">
                                <div class="col-sm-8">

                                    <div class="col-xs-12">
                                        <input class="form-control" id="name" name="name" placeholder="Name" required="" type="text">
                                    </div>
                                    <div class="col-xs-12">
                                        <input class="form-control" id="email" name="email" placeholder="Email" required="" type="email">
                                    </div>
                                    <div class="col-xs-12">
                                        <input class="form-control" name="subject" placeholder="Subject" required="" type="text">
                                    </div>
                                    <div class="col-xs-12">
                                        <textarea class="form-control"  cols="40" rows="4" placeholder="Your Massege" required="" ></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-info col-xs-12">Contact Us</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!--/row-->

                        <!--/ contact us-->

                        <div class="break"></div>

						<!--Login-->

                        <div id="contactus" class="row contactus margin-bottom ">
                            <div class=" header text-center">LogIn </div>
                            <hr>
							<?php
								echo $message;
								echo validation_errors();
								echo form_open('simpletheme/login');
							?>
                                <div class="col-sm-12">

                                    <div class="col-xs-12">
										<?php										
											$data = array(
												'name' => 'username',
												'id' => 'username',
												'placeholder' => 'Username',
												'class' => 'form-control',
												'max' => 50,
												'value' => set_value('username')
											);
											echo form_input($data);
										?>
                                    </div>
                                    <div class="col-xs-12">
                                        <?php																				
											$data = array(
												'name' => 'password',
												'id' => 'password',
												'placeholder' => 'Password',
												'class' => 'form-control',
												'max' => 50,
												'value' => set_value('password')
											);
											echo form_password($data);
										?>
                                    </div>                                    
                                    <div class="col-sm-12">
                                        <?php																				
											$data = array(
												'name' => 'login',
												'id' => 'login',
												'class' => 'btn btn-info',
												'value' => 'true',
												'type' => 'submit',
												'content' => 'LogIn'
											);
											echo form_button($data);
										?>
                                    </div>
                                </div>
                            <?php								
								echo form_close();
							?>

                        </div>
                        <!--/row-->

                        <!--/ login-->
						
                        <div class="break"></div>

                        <!-- Button trigger modal -->

                    </div><!-- /col-9 -->
                </div><!-- /padding -->
                <!--</div>-->

                <!-- /main -->

                <!--</div>-->
            </div>
        </div>

        <!--my scripts-->

        <!--wow animation--> 
        <script src="js/wow.js"></script>
        <script>
            var wow = new WOW(
                    {
                        boxClass: 'wow', // animated element css class (default is wow)
                        animateClass: 'animated', // animation css class (default is animated)
                        offset: 0, // distance to the element when triggering the animation (default is 0)
                        mobile: true        // trigger animations on mobile devices (true is default)
                    }
            );
            wow.init();
        </script>

        <!-- Retina for  high-resolution image -->
        <script type="text/javascript" src="/scripts/retina.js"></script> 


        <script type="text/javascript">


            /* google maps */

            google.maps.visualRefresh = true;
            var map;
            function initialize() {
                var geocoder = new google.maps.Geocoder();
                var address = $('#map-input').text(); /* change the map-input to your address */
                var mapOptions = {
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false

                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                if (geocoder) {
                    geocoder.geocode({'address': address}, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                                map.setCenter(results[0].geometry.location);
                                var infowindow = new google.maps.InfoWindow(
                                        {
                                            content: address,
                                            map: map,
                                            position: results[0].geometry.location,
                                        });
                                var marker = new google.maps.Marker({
                                    position: results[0].geometry.location,
                                    map: map,
                                    title: address
                                });
                            } else {
                                alert("No results found");
                            }
                        }
                    });
                }
            }
            google.maps.event.addDomListener(window, 'load', initialize);
            /* end google maps */
        </script>


        <!--end wow animation-->



        <!-- scroll to scripts -->
        <script type="text/javascript">
            jQuery(function($) {
                /**
                 * Demo binding and preparation, no need to read this part
                 */
                //borrowed from jQuery easing plugin
                //http://gsgd.co.uk/sandbox/jquery.easing.php
                $.easing.elasout = function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0)
                        return b;
                    if ((t /= d) == 1)
                        return b + c;
                    if (!p)
                        p = d * .3;
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    }
                    else
                        var s = p / (2 * Math.PI) * Math.asin(c / a);
                    return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
                };
                $('a.back').click(function() {
                    $(this).parents('div.pane').scrollTo(0, 800, {queue: true});
                    $(this).parents('div.section').find('span.message').text(this.title);
                    return false;
                });
                //just for the example, to stop the click on the links.
                $('ul.links').click(function(e) {
                    e.preventDefault();
                    var link = e.target;
                    link.blur();
                    if (link.title)
                        $(this).parent().find('span.message').text(link.title);
                });
                // This one is important, many browsers don't reset scroll on refreshes
                // Reset all scrollable panes to (0,0)
                $('div.pane').scrollTo(0);
                // Reset the screen to (0,0)
                $.scrollTo(0);
                // TOC, shows how to scroll the whole window
                $('#nav a , #welcome a').click(function() {//$.scrollTo works EXACTLY the same way, but scrolls the whole screen
                    $.scrollTo(this.hash, 1500);
                    $(this.hash).find('span.message').text(this.title);
                    return false;
                });
                //                $('#welcome a').click(function() {//$.scrollTo works EXACTLY the same way, but scrolls the whole screen
                //                    $.scrollTo(this.hash, 1500);
                //                    $(this.hash).find('span.message').text(this.title);
                //                    return false;
                //                });

            });</script>

        <!--end scroll to scripts-->

        <!--blog tap -->
        <script>
            $('#blog a').click(function(e) {
                e.preventDefault();
                $(this).tab('show');
            })
        </script>

        <!--/blog tab-->


        <!--end my scripts-->



    </body>
</html>