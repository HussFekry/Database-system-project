<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:account.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <title>Top Choice</title>
        <link rel="stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
.box{
    width: 70%;
    height: 500%;
    background: #fff;
    border-radius: 6px;
    padding: 20px 60px 30px 40px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    left: 220px;
  }

  .box .content{
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .box .content .left-side{
    width: 25%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
    position: relative;
  }
  .content .left-side::before{
    content: '';
    position: absolute;
    height: 70%;
    width: 2px;
    right: -15px;
    top: 50%;
    transform: translateY(-50%);
    background: #afafb6;
  }
  .content .left-side .details{
    margin: 14px;
    text-align: center;
  }
  .content .left-side .details i{
    font-size: 30px;
    color: #179db4;
    margin-bottom: 10px;
  }
  .content .left-side .details .topic{
    font-size: 18px;
    font-weight: 500;
  }
  .content .left-side .details .text-one,
  .content .left-side .details .text-two{
    font-size: 14px;
    color: #afafb6;
  }
  
  
  .box .content .right-side{
    width: 75%;
    margin-left: 75px;
  }
  .content .right-side .topic-text{
    font-size: 23px;
    font-weight: 600;
    color: #179db4;
  }
  .right-side .input-box{
    height: 50px;
    width: 100%;
    margin: 12px 0;
  }
  .right-side .input-box input,
  .right-side .input-box textarea{
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    font-size: 16px;
    background: #F0F1F8;
    border-radius: 6px;
    padding: 0 15px;
    resize: none;
  }
  .right-side .message-box{
    min-height: 110px;
  }
  .right-side .input-box textarea{
    padding-top: 6px;
  }
  .right-side .button{
    display: inline-block;
    margin-top: 12px;
  }
  .right-side .button input[type="button"]{
    color: #fff;
    font-size: 18px;
    outline: none;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    background: #179db4;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .button input[type="button"]:hover{
    background: #179db4;
  }
  
  @media (max-width: 950px) {
    .box{
      width: 90%;
      padding: 30px 40px 40px 35px ;
    }
    .box .content .right-side{
     width: 75%;
     margin-left: 55px;
  }
  }
  @media (max-width: 820px) {
    .box{
      margin: 40px 0;
      height: 100%;
    }
    .box .content{
      flex-direction: column-reverse;
    }
   .box .content .left-side{
     width: 100%;
     flex-direction: row;
     margin-top: 40px;
     justify-content: center;
     flex-wrap: wrap;
   }
   .box .content .left-side::before{
     display: none;
   }
   .box .content .right-side{
     width: 100%;
     margin-left: 0;
   }

   .btn{
    display: inline-block;
    margin-top: 1rem;
    padding: .5rem;
    padding-left: 1rem;
    border:var(--border);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    color:var(--blue);
    cursor: pointer;
    font-size: 1.7rem;
    background: #fff;
}

.btn span{
    padding:.7rem 1rem;
    border-radius: .5rem;
    background: var(--blue);
    color:#fff;
    margin-left: .5rem;
}

.btn:hover{
    background: var(--blue);
    color:#fff;
}

.btn:hover span{
    color: var(--blue);
    background:#fff;
    margin-left: 1rem;
}
  }
  
        </style>
    </head>
    <body>
        <div class="header">
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
            <li><a href="adminstration.php">admin</a></li>


            </ul>
        </nav>
        <a href="cart.php"><img src="images/cart.png"width="30px"; hight="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
   
      
    </div>
    </div>
    <section>
        <br><br><br><br>
      <div class="box">
          <div class="content">
            <div class="left-side">
              <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Address</div>
                <div class="text-one">26th of July Corridor, Sheikh Zayed City, Giza Governorate</div>
              </div>
              <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Phone</div>
                <div class="text-one">19945</div>
                <div class="text-two">+201065454395</div>
              </div>
              <div class="email details">
                <div class="topic">Email</div>
                <div class="text-one">nuelectronics@gmail.com</div>
              </div>
            </div>
            <div class="right-side">
              <div class="topic-text">Send us a message</div>
            <form action="mail.php" method="POST"> 
              <div class="input-box">
                <input type="text" placeholder="Enter your name" name="name" required>
              </div>
              <div class="input-box">
                <input type="text" placeholder="Enter your email" name="mail" required>
              </div>
    
              <div class="input-box message-box">
                <textarea placeholder="Enter your message" name="message" required></textarea>
              </div>
                <input type="submit" value="Send Now" class="btn" >
             
            </form>
          </div>
          </div>
        </div>
      
    </section>
<br><br><br>
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

</body>
</html>