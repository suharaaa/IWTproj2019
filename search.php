<?php
    
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    
    mysql_select_db("suhara") or die(mysql_error());

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
                       
                    </ol>
                </nav>
            </div>
        </div> 
 
 <div class="container">
    <div class="row">


    <?php
    
 

    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
   
         
        $query = mysql_real_escape_string($query);
        //nobody SQL injection
         
        $raw_results = mysql_query("SELECT * FROM items
            WHERE (type LIKE '%".$query."%') ") or die(mysql_error());
             
        
        if(mysql_num_rows($raw_results) > 0){ 
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<div class=\"col-md-4 col-sm-4\">
                <div class=\"item-card\">
                    <div class=\"item-image-container text-center\">
                        <img width=\"100%\" src=\"images/".$results["image"]."\">
                    </div>
                    <div style=\"height: 50px; margin-bottom: 20px;\">
                        <h4 class=\"item-title\">".$results["title"]."</h4>
                    </div>
                        
                        <p class=\"item-price\">Rs. ".$results["price"]."</p><span class=\"item-support\">Tax Free</span>
                    <a href=\"itemdetail.php?id=".$results["id"]."\"><button class=\"item-button\" >Buy Now</button></a>
                </div>
            </div>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>




    </div>
 </div>
   
</body>
</html>