<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Company Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <style>

        .logo-small {
            color: #f4511e;
        }
        .logo {
            color: #f4511e;
        }

        .navbar {
            margin-bottom: 0;
            background-color: #bbbbbb;
            z-index: 9999;
            border: 0;
           
            font-size: 15px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 2px;
            border-radius: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .navbar li a, .navbar .navbar-brand {
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            background-color: #fff !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
        }
        .slideanim {visibility:hidden;}
        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }
        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }
        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }

        .dropbtn {
            color: black;
            background-color: transparent;
            padding: 16px;
            font-size: 15px;
            border: none;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #999999;}

        a{
            color: white;
        }
        #idea_panel, #idea_flip {
            padding: 5px;
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #idea_panel {
            padding: 50px;
            display: none;
        }
    </style>
    <script>
        $(document).ready(function(){

            $("#idea_flip").click(function(){
                $("#idea_panel").slideToggle("slow");
            });
        });
    </script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" >

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="font-size:40px;letter-spacing: 0px;" href="#myPage"><b style="font-weight: bolder; "><img src="../temp-img/logoUp.png"  height="30">iPRO3D</b></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li >
                    <div class="dropdown">
                        <a href="../index.php">
                            <button class="dropbtn">Home</button>
                            <div class="dropdown-content">
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                    <a href="#">

                            <button class="dropbtn">About Us</button>
                            <div class="dropdown-content">
                            <!--    <a href="../Aboutus/aboutus.php">About Us</a>-->
                                <a href="index.php/welcome/overview_fun">Overview</a>
                                <a href="index.php/welcome/history_fun">History</a>
                                <a href="../Aboutus/ourapproach.php">Our Approach</a>
                                <a href="../Aboutus/ourteam.php">Our Team</a>
                                <a href="company_ethics_view.php">Company Ethics</a>
                                <a href="authentic_view.php">Authentic</a>
                                <a href="accuracy_view.php">Accuracy</a>
                                <a href="careers_view.php">Careers</a>                                
                            </div>

                    </a>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                    <a href="#">
                        <button class="dropbtn">Services</button>
                        <div class="dropdown-content">
                            <!--<a href="../Services/services.php">Services</a>-->
                            <a href="index.php/welcome/printing_fun">3D Printing</a>
                            <a href="index.php/welcome/scanning_fun">3D Scanning</a>
                            <a href="../Services/rapidprototyping.php">Rapid Prototyping</a>
                            <a href="../Services/cadmodeling.php">3D & 2D CAD Modeling</a>
                            <a href="../Services/design.php">Design for 3D Printing</a>
                            <a href="../Services/reverse.php">Reverse Engineering</a>
                            <a href="../Services/services.php">More...</a>
                    </div>

                    </a>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a href="#"><button class="dropbtn">Portfolio</button></a>
                    </div>
                    </li>
                <li>
                    <div class="dropdown">
                        <a href="MarketPlace/marketplace.php"><button class="dropbtn">MarketPlace</button></a>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                    <a href="index.php/welcome/mutation_fun"><button class="dropbtn">Mutation</button></a>
                    </div>
                </li>
               <!-- <li>
                    <div class="dropdown">
                    <a href="als.php"><button class="dropbtn">Materials</button></a>
                    </div>
                </li>
                -->
                <li>
                    <div class="dropdown">
                    <a href="../contact_and_quote/contactus.php"><button class="dropbtn">Contact</button></a>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a href="../dummy_login/login.php"><button class="dropbtn">Login</button></a>
                    </div>
                </li>

                <!--  <li>
                      <a href="#"> <i class="fa fa-shopping-cart" style="font-size: x-large;"></i><span class="badge">5</span></a></li>
                  <li><a href="#">
                                  <span class="glyphicon glyphicon-search" style="font-size: x-large;"></span>
                               </a> </li>-->

            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

</body>
</html>
