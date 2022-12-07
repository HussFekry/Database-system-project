<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:account.php');
}
?>
<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <title>nuelectronics</title>
        <link rel="stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <div class= "container">
        <div class= "navbar">
        
       <div class="logo">
        <a href="index.php"><img src="images/nu.png" width="100px"></a>
        
        </div> 
        
        <nav>
            <ul id="MenuItems">
           <li><a href="index.php">Home</a></li>
            <li><a href="products.php">products</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="logout.php">LOG OUT</a></li>

            </ul>
        </nav>
            <a href="cart.php"><img src="images/cart.png"width="30px"; hight="30px";></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
            
        </div>
        
        <div class="small-container">
            <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <img src="images/msi.jpg" >
                  </div>
                  <div class="slide">
                    <img src="images/lg.jpg" >
                  </div>
                  <div class="slide">
                    <img src="images/V253215456_IN_WLME_SamsungGalaxy_S20_GA__S20-FE_1242x450._SX1242_CB403247530_.jpg"  >
                  </div>
                  <div class="slide">
                    <img src="images/banner2.jpg"  >
                  </div>
                  <div class="navigation-auto" >
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                  </div>

            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
              </div>
             
            </div>
            
             <div class="row row-2">
                <h2>Camera & Photo Products</h2>
                 <select id="categories" onchange="catHandler(this.value)">
                    <option value="cameracat">Camera & Photo Products</option>
                 <option value="products">All products</option>
                <option value="products">Car & Vehicle Electronics</option>
                <option value="pccat">Computers, Components & Accessories</option>
                <option value="products">eBook Readers & Accessories</option>
                <option value="products">Headphones, Earbuds & Accessories</option>
                <option value="products">Home Audio & Theater Products</option>
                <option value="products">Home Theater, TV & Video Products</option>
                <option value="products">Household Batteries & Chargers</option>
                <option value="mobilecat">Mobile Phones & Communication Products</option>
                <option value="products">Portable Sound & Vision Products</option>
                <option value="products">Electrical Power Accessories</option>
                <option value="products">GPS & Navigation Equipment</option>
                <option value="products">Computer Tablets</option>
                <option value="products">Telephones, VoIP & Accessories</option>
                <option value="products">Wearable Technology  </option>

                 </select>
            </div>
            <div class="row">
                <?php
            
            $res=mysqli_query($link,"select * from product inner join subcategory on product.subcategory = subcategory.subcat_id inner join category on subcategory.CategoryId = category.CategoryId where category.CategoryId =321");
            while($row=mysqli_fetch_array($res))
            {
            ?>

                    <div class="col-4">
                    
                    <a href="pcdetails.php"><img src="../htdocs/<?php echo $row["Productimage"]; ?>" ></a>
                    <h4><?php echo $row["ProductName"]; ?></h4>
                  
                    <p> <?php echo $row["ProductPrice"]; ?> EGP</p>
                    </div>

            <?php

            }
            
            ?> 
            </div>

      
        
             
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
            </div>
            
        </div>
        
        
       
        
        
        
        <!------footer----->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download our App</h3>
                        <p>Download App for Android and IOS Moobile phones</p>
                        <div class="app-logo">
                            <img src="images/play-store.png">
                            <img src="images/app-store.png">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="images/image-asset.png" >
                        <p>Our business concept is to offer fashion and quality at the best price in a sustainable way.</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                     <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <p class="copyright">© Copyright 2021 - EGYPT</p>
        </div>
        
        <!----js for toggle menu-------->
        <script>
            var MenuItems= document.getElementById("MenuItems");
            MenuItems.style.maxHeight= "0px";
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                    {
                        MenuItems.style.maxHeight= "200px";
                    }
                else{
                    MenuItems.style.maxHeight= "0px";
                }
            }
        </script>
        
        
        <script src="js/script.js"></script>
        <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
              document.getElementById('radio' + counter).checked = true;
              counter++;
              if(counter > 4){
                counter = 1;
              }
            }, 3700);
            </script>

<script>
    function catHandler(value) {
        window.location.assign(`${value}.php`);
    }
</script>

    
    </body>
</html>