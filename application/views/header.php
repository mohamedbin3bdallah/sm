<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title><?php echo $site[0]->title; ?></title>
		<link rel="icon" href="<?php echo base_url(); ?>simpletheme/img/<?php echo $site[0]->logo; ?>"/>

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
        <script type='text/javascript' src="<?php echo base_url(); ?>simpletheme/js/bootstrap.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>simpletheme/js/jquery.scrollTo.js"></script>
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