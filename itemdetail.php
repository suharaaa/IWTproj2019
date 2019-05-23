<?php
    include_once 'php/config.php';
    
    $id = $_GET["id"];

    $sql = "SELECT * FROM items WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    $colorquery = "SELECT * FROM color WHERE itemid=$id";
    $colorresult = mysqli_query($conn, $colorquery);
    $colorresultcheck = mysqli_num_rows($colorresult);
    
    if($resultcheck == 0){
        header("Location: 404.html");  
        die(); 
    }
    
    $product = mysqli_fetch_assoc($result);

    mysqli_close($conn);
?>

<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Item Details
        </title>
            <link rel="stylesheet"  href="css/styles.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="js/itemdetail.js"></script>            
            <script src="js/bootstrap.min.js"></script>
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

     <!-- breadcrumb -->
        <div class="row" style="margin-top: 80px;">
            <div class="col-md-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo $product["category"]?>.php"><?php echo $product["category"]?></a></li>
                        <li class="breadcrumb-item"><?php echo $product["type"]?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $product["title"]?></li>
                    </ol>
                </nav>
            </div>
        </div> 
        
            <div class="container" >
                    <div class="row">
                        <div class="col-md-6 col-sm-6"> 
                                <div class="item-card">
                                        <div class="item-image-container text-center">
                                            <img width="100%" src="images/<?php echo $product["image"]?>">
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-6 col-sm-6"> 
                            <div class="item-card">
                                <!-- sending data to tempcart -->
                                <form method="post" action="php/ addcart.php">

                                
                                    <h2 class="item-title" name="iname"><?php echo $product["title"] ?></h2>
                                    <h4 class="item-price" name="iprice">Rs. <?php echo $product["price"] ?></h4>
                                    <br><br>
                                    <p class="item-des"><?php echo $product["description"] ?></p>
                                    
                                    <br>
                                
                                    <h6> Color : </h6>
                                    <div class="radio-group">
                                        <?php 
                                            while($color = mysqli_fetch_assoc($colorresult)) {
                                                echo '<input type="radio" id="option-'.$color["id"].'" name="sele" value="'.$color["name"].'">
                                                <label for="option-'.$color["id"].'" style="background:'.$color["code"].'"> '.$color["name"].' </label>';
                                            }
                                        ?>
                                    </div>

                                    <br>

                                    <h6>Select SIZE (UK) :</h6>
                                
                                    <div class="radio-group">
                                        <input type="radio" id="option1" name="selector" value="2">
                                            <label for="option1">2</label>
                                        <input type="radio" id="option2" name="selector" value="4">
                                            <label for="option2">4</label>
                                            <input type="radio" id="option3" name="selector" value="6">
                                            <label for="option3">6</label>
                                        <input type="radio" id="option4" name="selector" value="8">
                                            <label for="option4">8</label>
                                        <input type="radio" id="option5" name="selector" value="10">
                                            <label for="option5">10</label>
                                        <input type="radio" id="option6" name="selector" value="12">
                                            <label for="option6">12</label>
                                    </div>
                                    <br>

                                    <h6 class="my-1 mr-2" for="selectQty">Quantity :</h6>
                                    <select class="custom-select my-1 mr-sm-2" id="selectQty" name="qty">
                                        <option selected value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <br>

                                    <button class="item-button" onclick="addCart()">Add to cart</button>
                                    </form>
                                </div>
                        
                    
            

            <!-- collapse -->
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            SHIPPING AND RETURNS
                            </button>
                        </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" >
                            <div class="card-body">
                            <h6 style="font-weight: bold">SHIPPING</h5>
                            <p>Most items are shipped from our warehouse within 1-2 full business days except where otherwise noted. Shipping restrictions may apply. </p>
                            <h6 style="font-weight: bold">RETURNS</h6>
                            <p>We accept online returns within 30 days of shipping confirmation, and online returns from Canada within 40 days of shipping confirmation. In order to process your return, items must be unworn and tags must be attached. Items marked Final Sale are not eligible for a return, refund or credit.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            CARE
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" class="collapse show" >
                        <div class="card-body">
                            <p>o Machine washable.</p>
                        </div>
                    </div>
                </div>
            </div>
                        </div>
                    </div>
            </div>

            <br>
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