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
            <script src="./assets/js/itemdetail.js"></script>            
            <script src="./assets/js/bootstrap.min.js"></script>
    </head>

    <header>
                <!--NAVBAR-->
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">

            
                        <!--Brand Logo-->
                        <a href="home.html" class="logo">
                            <img src="images/font.png" width="75" height= "75" alt="ABSTRACT">
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
                                        <a href="women.php" class="dropdown-toggle nav-link" data-toggle="dropdown" >WOMEN
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">SKIRTS</a></li>
                                            <li><a class="dropdown-item" href="#">T-SHIRTS</a></li>
                                            <li><a class="dropdown-item" href="#">DRESSES</a></li>
                                            <li><a class="dropdown-item" href="#">SWIMWEAR</a></li>
                                            <li><a class="dropdown-item" href="#">JEANS</a></li>
                                            <li><a class="dropdown-item" href="#">PANTS</a></li>
                                            <li><a class="dropdown-item" href="#">SHORTS</a></li>
                                            <li><a class="dropdown-item" href="#">COATS</a></li>
                                            <li><a class="dropdown-item" href="#">JACKETS</a></li>
                                            <li><a class="dropdown-item" href="#">SWEATSHIRTS</a></li>
                                            <li><a class="dropdown-item" href="#">HOODIES</a></li>
                                        </ul>
                                    </li>
                                    <!--MEN-DROPDOWN-->
                                    <li class="dropdown">
                                        <a href="men.html" class="dropdown-toggle nav-link" data-toggle="dropdown" >MEN
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">SHIRTS</a></li>
                                            <li><a class="dropdown-item" href="#">T-SHIRTS</a></li>
                                            <li><a class="dropdown-item" href="#">SUITS & BLAZERS</a></li>
                                            <li><a class="dropdown-item" href="#">SWIMWEAR</a></li>
                                            <li><a class="dropdown-item" href="#">JEANS</a></li>
                                            <li><a class="dropdown-item" href="#">PANTS</a></li>
                                            <li><a class="dropdown-item" href="#">SHORTS</a></li>
                                            <li><a class="dropdown-item" href="#">COATS</a></li>
                                            <li><a class="dropdown-item" href="#">JACKETS</a></li>
                                            <li><a class="dropdown-item" href="#">SWEATSHIRTS</a></li>
                                            <li><a class="dropdown-item" href="#">HOODIES</a></li>
                                            <li><a class="dropdown-item" href="#">POLOS</a></li>
                                        </ul>
                                    </li>
                                    <!--KIDS-DROPDOWN-->
                                    <li class="dropdown">
                                        <a href="kids.html"class="dropdown-toggle nav-link" data-toggle="dropdown" >KIDS
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">GIRLS</a></li>
                                            <li><a class="dropdown-item" href="#">BOYS</a></li>
                                            <li><a class="dropdown-item" href="#">BABY</a></li>
                                        </ul>
                                    </li>
                                    <li ><a href="sale.html" class="nav-link">SALE</a></li>
                                    <li><a href="abXme.html" class="nav-link">ABXME</a></li>
                                    <li><a href="#" class="nav-link"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="nav-link"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="nav-link"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                
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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo $product["category"]?>.php"><?php echo $product["category"]?></a></li>
                        <li class="breadcrumb-item"><a href="<?php echo $product["type"]?>.php"><?php echo $product["type"]?></a></li>
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
                                    <h2 class="item-title"><?php echo $product["title"] ?></h2>
                                    <h4 class="item-price">Rs. <?php echo $product["price"] ?></h4>
                                    <br><br>
                                    <p class="item-des"><?php echo $product["description"] ?></p>
                                    
                                    <br>
                                    <form metho9d="post">
                                
                                    <h6> Color : </h6>
                                    <div class="radio-group">
                                        <?php 
                                            while($color = mysqli_fetch_assoc($colorresult)) {
                                                echo '<input type="radio" id="option-'.$color["id"].'" name="sele" >
                                                <label for="option-'.$color["id"].'" style="background:'.$color["code"].'"> '.$color["name"].' </label>';
                                            }
                                        ?>
                                    </div>

                                    <br>

                                    <h6>Select SIZE (UK) :</h6>
                                
                                    <div class="radio-group">
                                        <input type="radio" id="option1" name="selector">
                                            <label for="option1">2</label>
                                        <input type="radio" id="option2" name="selector">
                                            <label for="option2">4</label>
                                            <input type="radio" id="option3" name="selector">
                                            <label for="option3">6</label>
                                        <input type="radio" id="option4" name="selector">
                                            <label for="option4">8</label>
                                        <input type="radio" id="option5" name="selector">
                                            <label for="option5">10</label>
                                        <input type="radio" id="option6" name="selector">
                                            <label for="option6">12</label>
                                    </div>
                                    <br>

                                    <h6 class="my-1 mr-2" for="selectQty">Quantity :</h6>
                                    <select class="custom-select my-1 mr-sm-2" id="selectQty">
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
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0" style="font-weight: bold">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            SHIPPING AND RETURNS
                            </button>
                        </h2>
                        </div>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <h6 style="font-weight: bold">SHIPPING</h5>
                            <p>Most items are shipped from our warehouse within 1-2 full business days except where otherwise noted. Shipping restrictions may apply. </p>
                            <h6 style="font-weight: bold">RETURNS</h6>
                            <p>We accept online returns within 30 days of shipping confirmation, and online returns from Canada within 40 days of shipping confirmation. In order to process your return, items must be unworn and tags must be attached. Items marked Final Sale are not eligible for a return, refund or credit.</p>
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