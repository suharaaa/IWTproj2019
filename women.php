<?php
    include_once 'php/config.php';

    $sql = "SELECT * FROM items WHERE category = 'women'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    mysqli_close($conn);
?>

<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Women's</title>            
            <link rel="stylesheet"  href="css/styles.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
            <script src="js/bootstrap.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            
        
    </head>

    <header>
                <!--NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top ">

            
<!--Brand Logo-->
<a href="index1.html" class="logo">
    <img src="images/logo.png" width="75" height= "75" alt="ABSTRACT">
</a> 

<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
    <div class="container" onclick="toggleFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div> 
</button>              
<div class="collapse navbar-collapse flex-row-reverse" id="myNavbar" >
    <ul class="nav navbar-nav ">
        <!--WOMEN-DROPDOWN-->
        <li class="dropdown">
            <a href="women.php" class="dropdown-toggle nav-link" data-toggle="dropdown" >WOMEN</a>
                <span class="caret"></span>
            
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="women.php">SKIRTS</a></li>
                <li><a class="dropdown-item" href="women.php">T-SHIRTS</a></li>
                <li><a class="dropdown-item" href="women.php">DRESSES</a></li>
                <li><a class="dropdown-item" href="women.php">SWIMWEAR</a></li>
                <li><a class="dropdown-item" href="women.php">JEANS</a></li>
                <li><a class="dropdown-item" href="women.php">PANTS</a></li>
                <li><a class="dropdown-item" href="women.php">SHORTS</a></li>
                <li><a class="dropdown-item" href="women.php">COATS</a></li>
                <li><a class="dropdown-item" href="women.php">JACKETS</a></li>
                <li><a class="dropdown-item" href="women.php">SWEATSHIRTS</a></li>
                <li><a class="dropdown-item" href="women.php">HOODIES</a></li>
            </ul>
        </li>
        <!--MEN-DROPDOWN-->
        <li class="dropdown">
            <a href="men.php" class="dropdown-toggle nav-link" data-toggle="dropdown" >MEN</a>
                <span class="caret"></span>
            
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="men.php">SHIRTS</a></li>
                <li><a class="dropdown-item" href="men.php">T-SHIRTS</a></li>
                <li><a class="dropdown-item" href="men.php">SUITS & BLAZERS</a></li>
                <li><a class="dropdown-item" href="men.php">SWIMWEAR</a></li>
                <li><a class="dropdown-item" href="men.php">JEANS</a></li>
                <li><a class="dropdown-item" href="men.php">PANTS</a></li>
                <li><a class="dropdown-item" href="men.php">SHORTS</a></li>
                <li><a class="dropdown-item" href="men.php">COATS</a></li>
                <li><a class="dropdown-item" href="men.php">JACKETS</a></li>
                <li><a class="dropdown-item" href="men.php">SWEATSHIRTS</a></li>
                <li><a class="dropdown-item" href="men.php">HOODIES</a></li>
                <li><a class="dropdown-item" href="men.php">POLOS</a></li>
            </ul>
        </li>
        <!--KIDS-DROPDOWN-->
        <li class="dropdown">
            <a href="kids.</a>"class="dropdown-toggle nav-link" data-toggle="dropdown" >KIDS
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="kids.php">GIRLS</a></li>
                <li><a class="dropdown-item" href="kids.php">BOYS</a></li>
                <li><a class="dropdown-item" href="kids.php">BABY</a></li>
            </ul>
        </li>
        <li><a href="abXme.html" class="nav-link">ABXME</a></li>
        <li><a href="cart.php" class="nav-link"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
        <li><a href="login.php" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i></a></li>
        <!-- <li><a href="" class="nav-link searchOverlay" ><i class="fa fa-search"  onclick="openSearch()" aria-hidden="true"></i>
            
            <div id="myOverlay" class="overlay">
                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
                <div class="overlay-content">
                  <form action="action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div></a></li> -->
              
            <li><a class="nav-link">
                    <div class="search-container">
                        <div class="input-group">
                        <form action="search.php" method="GET">
                            <input type="text" name="query" />
                            <input type="submit" value="Search" />
                        </form>
                        </div>
                    </div>
                </a>
            </li>
    </ul>
</div>   
</nav>
    </header>

    <body>

        <!-- carousel -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="item-image-container text-center">
                        <div id="carouselE" class="carousel slide" data-ride="carousel" style="margin-top: 80px;">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/IMG_6739.JPG" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="images/EA7-Hero-1.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="images/IMG_6731.JPG" class="d-block w-100">
                            </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselE" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselE" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- breadcrumb -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Women</li>
                        </ol>
                    </nav>
                </div>
            </div>    
                    
                    <!-- items -->
                    <div class="row">
                        <?php

                            while($item = mysqli_fetch_assoc($result)){
                                echo "<div class=\"col-md-4 col-sm-4\">
                                    <div class=\"item-card\">
                                        <div class=\"item-image-container text-center\">
                                            <img width=\"100%\" src=\"images/".$item["image"]."\">
                                        </div>
                                        <div style=\"height: 50px; margin-bottom: 20px;\">
                                            <h4 class=\"item-title\">".$item["title"]."</h4>
                                        </div>
                                            <p class=\"item-price\">Rs. ".$item["price"]."</p><span class=\"item-support\">Tax Free</span>
                                        <a href=\"itemdetail.php?id=".$item["id"]."\"><button class=\"item-button\" >Buy Now</button></a>
                                    </div>
                                </div>";
                            }
                        ?>
                       
                    </div>
                    
                </div>

            
    </body> 
    
    <!--FOOTER-->
    <footer >
            <div class="row"> 
                <div class="col">
                    <a href="" ><i class="fas fa-globe-asia"></i>&nbsp;CUSTOMER SERVICE</a><br/>
                </div>
                <div class="col">
                    <a href="" ><i class="fas fa-clipboard-check "></i>&nbsp;LEGAL AND PRIVACY</a><br/>
                </div>
                <div class="col">
                    <a href="" ><i class="fas fa-credit-card" ></i>&nbsp;GIFT CARD</a><br/>
                </div>
                <div class="col">
                    <a href="" ><i class="fas fa-truck" ></i>&nbsp;ORDER STATUS</a><br/>
                </div>
                <div class="col">
                    <a href="" ><i class="fas fa-pencil-ruler" ></i>&nbsp;SIZE GUIDE</a><br/>
                </div>
                <div class="col">
                    <a href="" ><i class="fas fa-question-circle" ></i>&nbsp;ORDER STATUS</a><br/>
                </div>
            </div>
    
            <br/>
            <br/>
            <br/>
    
            <div class="row center"> 
    
                <div class="col">
                    <div class="socialMedia" >
                        <h3>FOLLOW US</h3>
                        <a href="#" ><i class="fab fa-instagram" aria-hidden="true">&nbsp;</i></a>
                        <a href="#"><i class="fab fa-pinterest-square" ">&nbsp;</i></a>
                        <a href="#"><i class="fab fa-twitter-square" >&nbsp;</i></a>
                        <a href="#"><i class="fab fa-facebook" ></i></a>
            
                    </div>
                </div>
    
                <div class="col socialMedia">
                    <a href="#" ><i class="fa fa-user icons" ></i>&nbsp;&nbsp;ABOUT US</a><br/><br/>
                    <a href="contact.html" ><i class="fa fa-phone-square icons" ></i>&nbsp;&nbsp;CONTACT US</a>
                </div>
            </div>
    
            <br/>
            <br/>
            <br/>
            
            <div class="center">
                <h3>SUBSCRIBE</h3>    
                <p>Receive updates about discounts, offers and new collections</p>
                
                <form name="formEmail" class="form-inline" onsumbit="displayPara()" onsubmit="emailValidate()" >
                   
                    <div class="input-group " >
                                                
                        <input type="email" class="form-control" size="50" placeholder="Email Address" id="email" name="email" required>
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-danger">SUBSCRIBE</button>
                        </div>
                    </div>
                </form>
            </div>
              
            <br/>
            <br/>
            <br/>
            <br/> 
    
            <hr> 
    
            <p class="designedBy">Designed by <i>MLB_G2_01_02</i></p>
    
    </footer>
</html>