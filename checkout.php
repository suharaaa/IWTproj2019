<?php
    include_once 'php/config.php';
?>

<html>
    <head>
        <title>
            Checkout
        </title>
            <link rel="stylesheet"  href="css/styles.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
            <script src="js/bootstrap.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="js/checkout.js"></script>
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

    <body >
     <div class="container" style="margin-top: 80px;">
        <div class="row">
          <div class="col-md-8 col-sm-8 ">
            <h2 class="item-title" style="margin-top:20px"> C H E C K O U T </h2><br>              
        
              <form method="post" action="php/check.php">
                  <div  class= "checkout-form">
                      <h4>1. Shipping Adress</h4><br>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="firstname">First name</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Jacob" name="fn"  required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastname">Last name</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Salvator" name="ln"  required> 
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="507 S Fisk St" name="add" required> 
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">City</label>
                    <input type="text" class="form-control" id="validationTooltip03" placeholder="Green Bay" name="city" required>
                    <div class="invalid-tooltip">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Country</label>
                    <input type="text" class="form-control" id="validationTooltip03" placeholder="United States" name="country" required>
                    <div class="invalid-tooltip">
                      Please provide a valid country.
                    </div>
                  </div>
                </div> 
                    <div class="form-row">                  
                      <div class="col-md-6 mb-3">
                        <label for="validationTooltip04">State</label>
                        <input type="text" class="form-control" id="validationTooltip04" placeholder="Wisconsin" name="state" required>
                        <div class="invalid-tooltip">
                          Please provide a valid state.
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationTooltip05">Zip</label>
                        <input type="text" class="form-control" id="validationTooltip05" placeholder="54303-2175" name="zip" required>
                        <div class="invalid-tooltip">
                          Please provide a valid zip.
                        </div>
                      </div>
                    </div>
                    <div class="form-row">                  
                      <div class="col-md-6 mb-3">
                        <label for="validationTooltip06">Phone Number</label>
                        <input type="text" class="form-control" id="validationTooltip06" placeholder="(060) 458-9754" name="pnum" >
                        
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationTooltip07">E-mail</label>
                        <input type="text" class="form-control" id="validationTooltip07" placeholder="jacob@example.com" name="email" required>
                        <div class="invalid-tooltip">
                          Please provide a valid email address.
                        </div>
                      </div>
                    </div>
                  </div><br>
                  <div  class= "checkout-form">
                    <h4>2. Shipping Method</h4><br>
                      Orders placed before 1:00PM EST Monday-Friday typically process the same day.<br>
                      <div class=".container-input" >
                        <input type="radio" checked="checked" name="ship" value="Standard">
                        <label> Standard (7-10 business days) : Rs. 1500.00 </label> <br> 
                        <input type="radio" name="ship" value="Second Day">
                        <label>  Second Day (2 business days) : Rs. 2800.00  </label> <br>
                        <input type="radio" name="ship" value="Overnight">
                        <label>  Overnight (1 business day) : Rs. 4500.00 </label> <br>
                      </div>
                  </div><br>

                  <div  class= "checkout-form">
                      <h4>3. Pyment</h4><br>
                      <div class="form-row">
                          <div class="col-md-6 mb-3">
                              <label for="inputState">Card Type</label>
                              <select id="inputState" class="form-control" name="type">
                                <option selected>VISA</option>
                                <option>MasterCard</option>
                                <option>American Express</option>
                                <option>Discover</option>
                              </select>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">Card Number</label>
                            <input type="text" class="form-control" name="cnum" id="validationTooltip03" placeholder="1234 1234 1234 1234" required>
                            <div class="invalid-tooltip">
                              Please provide a valid number.
                            </div>
                          </div>
                        </div> 
                            <div class="form-row">                  
                              <div class="col-md-6 mb-3">
                                <label for="validationTooltip04">Security Code</label>
                                <input type="text" class="form-control" name="code" id="validationTooltip04" placeholder="123" required>
                                <div class="invalid-tooltip">
                                  Please provide a valid code.
                                </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                <label>Expiration date</label>
                                <select id="inputState" class="form-control" name="day">
                                  <option >01</option>
                                  <option>02</option>
                                  <option selected>03</option>
                                  <option>04</option>
                                  <option >05</option>
                                  <option>06</option>
                                  <option >07</option>
                                  <option>08</option>
                                  <option >09</option>
                                  <option>10</option>
                                  <option >11</option>
                                  <option>12</option>
                                </select>
                              </div>
                              <div class="col-md-3 mb-3">
                                <label>&nbsp;</label>
                                <select id="inputState" class="form-control" name="year">
                                  <option >2019</option>
                                  <option>2020</option>
                                  <option selected>2021</option>
                                  <option>2022</option>
                                  <option >2023</option>
                                  <option>2024</option>
                                  <option >2025</option>
                                  <option>2026</option>
                                  <option>2027</option>
                                  <option>2028</option>
                                  <option>2029</option>
                                </select>
                              </div>
                            </div>

                  </div>
                      <button name="checko" class="item-button">CHECKOUT</button>
                </form>
              <br><br>
            </div>
          </div>
        </div>

        <!-- cart -->
        <div class="col-md-4 col-sm-4 ">
          <div class="card" style="width: 18rem;">
            <img src="image/" class="card-img-top" >
            <div class="card-body">
              <h3 class="card-text"></h3>
              <p class="card-text"></p>
              <p class="card-text"></p>
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