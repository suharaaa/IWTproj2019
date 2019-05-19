<?php
    include_once 'php/connection.php';
    
    $id = $_GET["id"];
    $sql = "SELECT * FROM items WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck == 0){
        header("Location: 404.html");  
        die(); 
    }
    
    $product = mysqli_fetch_assoc($result);
?>

<html>
    <head>
        <title>
            Item Details
        </title>
            <link rel="stylesheet"  href="assets/css/womens.css">
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            
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
                            <img src="images/logo1.png" width="75" height= "75" alt="ABSTRACT">
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
                                        <a href="women.html" class="dropdown-toggle nav-link" data-toggle="dropdown" >WOMEN
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
            <div class="container">
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
                                    <br>
                                    <br>

                                    <h5> Color </h5>
                                    <div class=".container-input">
                                        <label style = "color: #e90ea7;">
                                            <input type="radio" name="radio">
                                            Pale Pink   &nbsp;&nbsp;&nbsp;
                                            <span class="checkmark"></span>
                                        </label>
                                        <label style = "color: #ff0000;">
                                            <input type="radio" name="radio">
                                                Apple Red &nbsp;&nbsp;&nbsp;   
                                            <span class="checkmark"></span>
                                        </label>
                                        <label style = "color: #dfad7e;">
                                            <input type="radio" checked="checked" name="radio">
                                                Melon Orange
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <br>

                                    <h5>Select SIZE (UK)</h5>
                                    <!-- <div class>
                                            <input type="radio" name="radio1">
                                            Small   &nbsp;&nbsp;&nbsp;
                                            <span class="checkmark"></span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio1">
                                                Medium &nbsp;&nbsp;&nbsp;   
                                            <span class="checkmark"></span>
                                        </label>
                                        <label>
                                            <input type="radio" checked="checked" name="radio1">
                                                Large &nbsp;&nbsp;&nbsp;
                                            <span class="checkmark"></span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                                Excel &nbsp;&nbsp;&nbsp;
                                            <span class="checkmark"></span>
                                        </label>
                                    </div> -->
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary">&nbsp;&nbsp;2&nbsp;&nbsp;</button>
                                        <button type="button" class="btn btn-secondary">&nbsp;&nbsp;4&nbsp;&nbsp;</button>
                                        <button type="button" class="btn btn-secondary">&nbsp;&nbsp;6&nbsp;&nbsp;</button>
                                        <button type="button" class="btn btn-secondary">&nbsp;&nbsp;8&nbsp;&nbsp;</button>
                                        <button type="button" class="btn btn-secondary">&nbsp;&nbsp;10&nbsp;&nbsp;</button>
                                        <button type="button" class="btn btn-secondary">&nbsp;&nbsp;12&nbsp;&nbsp;</button>
                                    </div>
                                    <br><br>

                                    <h5 class="my-1 mr-2" for="inlineFormCustomSelectPref">Quantity</h5>
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
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
                                </div>
                        </div>
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