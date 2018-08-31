<?php
session_start();
if(session_id()==''||!isset($_SESSION['login'])){
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>Basic HTML page</title>
    </head>
    <body>
        <div class="container">
            <header>
                 <div class="navbar">
                     <div class="left-menu">
                         <div class="logo">
                         <img src="e-learning.jpg">
                     </div>
                    <div class="dropdown">
                        <button class="dropbtn">COURSES</button>
                        <i class="fa fa-caret-down"></i>
                        <div class="dropdown-content">
                            <a href="strategy.html">STRATEGY</a>
                            <a href="#">GOVERNANCE</a>
                            <a href="#">HISTORY</a>
                            <a href="#">CATERPILLAR FOUNDATION</a>
                            <a href="#">BRANDS</a>
                            <a href="#">CODE OF CONDUCT</a>
                            <a href="#">SUSTAINABILITY</a>
                            <a href="#">INNOVATION</a>
                            <a href="#">VISITOR'S CENTER AND MUSEUM</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">PROGRAMS</button>
                        <i class="fa fa-caret-down"></i>
                        <div class="dropdown-content">
                             <a href="#">STOCK INFORMATION</a>
                             <a href="#">FINANCIAL INFORMATION</a>
                             <a href="#">QUARTERLY FINANCIAL RESULTS</a>
                             <a href="#">ANNUAL REPORTS</a>
                             <a href="#">SHAREHOLDERS SERVICES</a>
                             <a href="#">EVENTS AND PRESENTATIONS</a>
                             <a href="#">SEC FILINGS</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">NEWS</button>
                        <i class="fa fa-caret-down"></i>
                        <div class="dropdown-content">
                            <a href="#">KPMG NEWS</a>
                            <a href="#">CORPORATE PRESS RELEASES</a>
                            <a href="#">MEDIA INFORMATION</a>
                            <a href="#">SOCIAL MEDIA</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">SCHOOL/PARTNERS</button>
                        <i class="fa fa-caret-down"></i>
                        <div class="dropdown-content">
                            <a href="#">WHY KPMG?</a>
                            <a href="#">OUR WORK CULTURE</a>
                            <a href="#">CAREER AREAS</a>
                            <a href="#">TECHNOLOGY AND INNOVATION</a>
                            <a href="#">TALENT COMMUNITY</a>
                            <a href="#">SEARCH AND APPLY</a>
                        </div>
                    </div>
                          
                         
                     </div>
                     <div class="right-menu">
                         <div class="dropdown">
                             <button class="dropbtn">ENGLISH</button>
                             <i class="fa fa-caret-down"></i>
                             <div class="dropdown-content">
                                 <a href="#">DEUTSCH</a>
                                 <a href="#">ESPAÑOL</a>
                                 <a href="#">FRANÇAIS</a>
                                 <a href="#">ITALIANO</a>
                                 <a href="#">MAGYAR</a>
                                 <a href="#">NEDERLANDS</a>
                                 <a href="#">POLSKI</a>
                                 <a href="#">PORTUGUES</a>
                             </div>
                         </div>
                         <div class="dropdown">
                             <button class="dropbtn">LOGIN/SIGNUP</button>
                             <i class="fa fa-caret-down"></i>
                             <div class="dropdown-content">
                                 <a href="mini_login.php">LOGIN</a>
                                 <a href="mini_signup.php">SIGNUP</a>
                             </div>
                         </div>
                     </div>
                </div>
            </header>
            <div class="header-div">
                <div class="top"></div>
                <div class="middle"></div>
                <div class="bottom"></div>
                <div class="bottom-line"></div>
            </div>
            <br>
             <div class="images">
                <img src="e-learning_image.jpg" alt="crane">
            </div>
            <br>
            <br>
            <div class="images-table">
                <table align="center">
                    <tr>
                        <td>MIT</td>
                        <td>HARVARD</td>
                        <td>BERKLEY</td>
                        <td>UNIVERSITY OF TEXAS</td>
                    </tr>
                    <tr>
                        <td><a href="#dummy"><img src="mit-logo.png"></a></td>
                        <td><a href="#dummy"><img src="Harvard.jpg"></a></td>
                        <td><a href="#dummy"><img src="berkley.png"></a></td>
                        <td><a href="#dummy"><img src="texas.jpg"></a></td>
                    </tr>
                </table>
            </div>
            <div class="black-divider">
            </div>
            <br>
            <hr>
            <div class="icons">
                SHARE THIS
                <table>
                    <tr>
                        <td><a href="https://www.facebook.com"><img src="if_facebook_square_107117.png"></a></td>
                        <td><a href="https://plus.google.com"><img src="if_google_square_107101.png"></a></td>
                        <td><a href="https://www.linkedin.com"><img src="if_linkedin_square_color_107091.png"></a></td>
                        <td><a href="https://www.twitter.com"><img src="if_twitter_square_107066.png"></a></td>
                    </tr>
                </table>
            </div>
        </div> 
    </body>
</html>
<?php
}
?>