
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
        
       
        </div> 
        </div>
        
         <!---------account-page--------->
        <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                      <img src="images/—Pngtree—purple floating electronic product promotion_5552467.png" >  
                    </div>
                    <div class="col-2">
                      <div class="form-container">
                          <div class="form-btn">
                            <span onclick="login()">Login</span>
                    <span onclick="register()">Register</span>
                              <hr id="Indicator">
                          </div>
                          <form id="LoginForm" method="post" action="validate.php">
                    <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="pass_word">
                <button type="submit" class="btn">Login</button>
                          </form>
                          
                          <form id="RegForm" method="post" action="reg.php">
                <input type="text" placeholder="Username" name="username" required>
                <input type="email" placeholder="Email" name="cus_email" required>
                <input type="password" placeholder="Password" name="pass_word" required>
                <input type="text" placeholder="phone number" name="CUS_PHONE" required>
                <input type="text" placeholder="National ID" name="CUS_CODE" required>
                <input type="date" placeholder="birthday" name="birthdate" required>




            <button type="submit" class="btn" >Register</button>
                          </form>
                        
                        </div> 
                    </div>
                </div>
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
        
        
         <!----js for toggle form-------->
        
        <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");
            
            function register(){
                RegForm.style.transform = "translateX(0px)";
               LoginForm.style.transform = "translateX(0px)";
               Indicator.style.transform = "translateX(100px)";

            }
            
            function login(){
                RegForm.style.transform = "translateX(300px)";
               LoginForm.style.transform = "translateX(300px)";
               Indicator.style.transform = "translateX(0px)";


            }

        </script>
      
        
        
      <script src="js/script.js"></script>

       
 
    </body>
</html>