<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive tour and travel agency website design tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="ar.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="ss.css">
    <link rel="stylesheet" href="vv.mp4">




</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars">
        
    </div>

    <a href="#" class="logo"><span>Ar</span>ugnata</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">Menu</a>
        
        <a href="#about">Time</a>
        <a href="#contact">contact</a>
        
        <a href="#book">Order</a>
        <a href="#footer0">more_info</a>
       
        <a href="logout-user.php" >Logout</a>
        
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn">
           
        </i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

   
</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Get a taste of happiness.....</h3>
        <p>We look forward to welcoming 
        you back </br> 
        &nbsp;for a memorable experience.
    </p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span data-src="images/vv.mp4"></span>
        <!--<span class="vid-btn" data-src="images/vid-2.mp4"></span>
       <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>-->
    </div>

    <div class="video-container">
        <video src="images/vv.mp4"  loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- book section starts  -->




<div class="slider-block">
    <div class="slide-track">
        <div class="slide-block">
            <img src="https://www.giftmyemotions.com/image/cache/floralnation/FN490-800x800.jpg" height="200" width="250" alt="" />
        </div>
        <div class="slide-block">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuHTOyL-mdCUjJmRGs1-RgMB6KuGpNl2EKTzeitRFYyVDy1OA01Py6g683UGRq-uzjq9E&usqp=CAU" height="200" width="250" alt="" />
        </div>
        <div class="slide-block">
            <img src="https://cdn.shopify.com/s/files/1/0562/7723/7936/products/HigginsGiftBag-3.jpg?v=1639906983" height="200" width="250" alt="" />
        </div>
        <div class="slide-block">
            <img src="https://img.freepik.com/free-vector/black-tea-bag-vector-realistic-product-placement-mock-up-3d-detailed-illustration-tea-leaves-infusions_1268-18070.jpg?w=2000" height="200" width="250" alt="" />
        </div>
        <div class="slide-block">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcRbnXnX4bAqVvHStv2gJswFayG43KC7AktA&usqp=CAU" height="180" width="250" alt="" />
        </div>
        <div class="slide-block">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQj1QVyoz6Ti9i90rR4aCYC_3Hx3BIRUUpxsL5uEhhP-BGfiNw_LomPKn-Xl-xCIy2ulWc&usqp=CAU" height="200" width="250" alt="" />
        </div>
        <div class="slide-block">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkDtneEtFysJWPEc-BVMOn3QH_Yuk9GdiOzA&usqp=CAU" height="180" width="250" alt="" />
        </div>
        <div class="slide-block">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8M40f-FuZrF2Jdm88DdAUeLNHBvNoYk2oFg&usqp=CAU" height="180" width="250" alt="" />
        </div>
        <div class="slide-block">
            <img src="https://png.pngtree.com/png-clipart/20200226/original/pngtree-for-sale-cartoon-element-png-image_5319086.jpg" height="180" width="290" alt="" />
        </div>
        <div class="slide-block">
            <img src="http://cdn.shopify.com/s/files/1/0567/9942/8813/products/varietypack-blackbackground.jpg?v=1669770326" height="180" width="250" alt="" />
        </div>
        <div class="slide-block">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRU-uQJ_NW1peaHhCSK5JM7gqnGkw1X1Q-CPQ&usqp=CAU" height="180" width="250" alt="" />
        </div>
        <div class="slide-block">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9YM-j1KMTnopq937Mhq9z7CDyRDi9yKGMLSjJN6uvNrUYXhVm9scJJHqwtBN2gjDm3v0&usqp=CAU" height="180" width="350" alt="" />
        
        </div>
       
        <div class="slide-block">
            <img src="https://previews.123rf.com/images/mangpor2004/mangpor20041607/mangpor2004160700145/61008272-today-s-special-on-vintage-chalk-board-over-empty-wood-table-background-product-and-food-display-mon.jpg" height="180" width="350" alt="" />
        
        </div>
    </div>
</div>
     
      

<!-- book section ends -->

<!-- packages section starts  -->


<div class="section2">
    <table id="services" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#231709">
<tr>
    <td>
        <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
            <!-- Heading Start-->
            <tr>
                <td height="50" align="center" valign="middle" colspan="3">
                        
                
                </td>
            </tr>

    <h1 align="center"><br>
                    <font face="Courier" color="white" size="8">
                            <b> OUR MENU </b>
                        </font>
                        </h1>
            <div class="container">
                <div class="items">
                    <div class="img img1">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4HVyz4y5DAqp2ssgKtLOevDKGEcwkYsSt2RWVDjOIgqB4RJf24d8SHHVBTTLCDQPSD58&usqp=CAU"
                            alt=""
                        />
                    </div>
                    <div class="name"><font size=3px>Herbal Tea</font></div>
                    <div class="price"><font size=3px>Rs 150</font></div>
                    <div class="info">
                        Lorem ipsum dolor sit amet consectetur.

                        
                    </div>
                </div>
               
                <div class="items">
                    <div class="img img2">
                        <img
                            src="data:image/jpeg;base64,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"
                            alt=""
                        />
                    </div>
                    <div class="name"><font size=3px>Red-black Tea</font></div>
                    <div class="price"><font size=3px>Rs 35</font></div>
                    <div class="info">Lorem ipsum dolor sit.</div>
                </div>
                <div class="items">
                    <div class="img img3">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH2UlDLiEK_AD-Luky-X6mct8lZwvkMIZcT2hPDRMOS3UKb3UvjQdKJSSxAGSLRi_NlAA&usqp=CAU"
                            alt=""
                        />
                    </div>
                    <div class="name"><font size=3px>Milk Tea</font></div>
                    <div class="price"><font size=3px>Rs 50</font></div>
                    <div class="info">Lorem ipsum dolor sit amet.</div>
                </div>
                <div class="items">
                    <div class="img img1">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMilFo6Mvw86GCVp2bk5XJigiFFmfHEh0fHw&usqp=CAU"
                            alt=""
                        />
                    </div>
                    <div class="name"><font size=3px>Green Tea</font></div>
                    <div class="price"><font size=3px>Rs 75</font></div>
                    <div class="info">Lorem ipsum dolor sit.</div>
                </div>
                <div class="items">
                    <div class="img img1">
                        <img
                            src="https://img.taste.com.au/UHFv39Ks/taste/2020/05/jun20_vietnamese-iced-coffee-161761-1.jpg"
                            alt=""
                        />
                    </div>
                    <div class="name"><font size=3px>Chocolate-iced Coffee</font></div>
                    <div class="price"><font size=3px>Rs 220</font></div>
                    <div class="info">Lorem ipsum dolor sit.</div>
                </div>
                <div class="items">
                    <div class="img img1">
                        <img
                            src="data:image/jpeg;base64,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
                            HJifdFFCyCVH/EpsblSD+w59S2sn4WmSQFqNc6BhfXrb3RRQ+glbrj/un/SIoopJv//Z"
                            alt=""
                        />
                    </div>
                    <div class="name"><font size=3px>Americano</font></div>
                    <div class="price"><font size=3px>Rs 200</font></div>
                    <div class="info">
                        Lorem ipsum dolor sit amet consectetur.
                    </div>
                </div>
                <div class="items">
                    <div class="img img1">
                        <img
                            src="https://www.thecookierookie.com/wp-content/uploads/2017/06/frozen-samoa-cookie-cold-brew-coffee-8-of-11.jpg"
                            alt=""
                        />
                    </div>
                    <div class="name"><font size=3px>Motchha </font></div>
                    <div class="price"><font size=3px>Rs 250 </font></div>
                    <div class="info">Lorem ipsum dolor sit.</div>
                </div>
                <div class="items">
                    <div class="img img1">
                        <img
                            src="https://media.istockphoto.com/id/593324728/photo/fragrance-coffee-cup-with-roasted-seeds.
                    jpg?s=612x612&w=0&k=20&c=LBBPsegpwCZB0W_MkXGxLBEBKf4SbtjEPReAhoydhRQ="width="500px">
                            
                        
                    </div>
                    <div class="name"><font size=3px>Milk Coffee </font></div>
                    <div class="price"><font size=3px>Rs 75 </font></div>
                    <div class="info">
                        Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.
                    </div>
                </div>
                <div class="items">
                    <div class="img img1">
                        <img
                            src="https://images.squarespace-cdn.com/content/v1/60254ad96f8eff02083840c4/a600f7a9-aa07-41e0-8bb4-a3f5132369ef/How+to+make+bubble+tea.+Easy+recipe+for+green+apple+matcha+boba+tea."
                            alt=""
                        />
                    </div>
                    <div class="name"><font size=3px>Chocolate-iced Coffee </font></div>
                    <div class="price"><font size=3px>Rs 220</font></div>
                    <div class="info">Lorem ipsum dolor sit.</div>
                </div>
               
                <div class="items">
                    <div class="img img1">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFE5FBT65qcMGHjWYhO4n-Qqo3TUaTbrIovg&usqp=CAU"
                            alt=""
                        />
                    </div>
                    <div class="name"><font size=3px>Latte</font></div>
                    <div class="price"><font size=3px>Rs 250</font></div>
                    <div class="info">
                        Lorem ipsum dolor sit amet consectetur
                        adipisicing.
                    </div>
                </div>
                <div class="items">
                    <div class="img img1">
                        <img
                            src="https://www.apfoodonline.com/wp-content/uploads/2018/09/75849678_xxl-copy.jpg"
                            alt=""
                        />
                    </div>
                    <div class="name"><font size=3px>Bubble Tea </font></div>
                    <div class="price"><font size=3px>Rs 250</font></div>
                    <div class="info">
                        Lorem ipsum dolor sit amet consectetur.
</div>
</div>

<div class="items">
                    <div class="img img1">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbCM8VPveLZCXeoLkKwplEZcsbk8Wde_0_Zg&usqp=CAU"
                            alt=""
                        />
                    </div>
                    <div class="name"><font size=3px>hot-lemon Tea</font></div>
                    <div class="price"><font size=3px>Rs 30 </font></div>
                    <div class="info">
                        Lorem ipsum dolor sit amet consectetur.
</div>
</div>



        
<table id="about" border="2" width="100%" cellpadding="0" cellspacing="0" bgcolor="#454545" >


<tr>
    <td height="250" >
        <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" h>
            
            <!--Heading Start-->
            
            <tr>
                <td height="250" align="center" valign="middle" colspan="2">

                        <font face="Monaco" color="white" size="7" >
                             <b> &nbsp;Our Timing </b>

                        </font> 
                    
                        

                            
                        
    <table border="3" width="90%" align="center" bgcolor="#231709" cellspacing="10" cellpadding="0" >
        <tr height="50px" >
            
     
   <th rowspan="2">   <font size="6px" color="white" > Day    </font></th>

    
    

    <th colspan="2"> <font size="6px" color="white"> Time </font> </th>


</tr>


<tr height="40px" >

   
    <td ><b>  <font size="5px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;Opening</b> </font></td>
    <td><b>  <font size="5px" color="white"> &nbsp; &nbsp; &nbsp; &nbsp;Closing</b> </font></td>

</tr>
<tr height="35px">
    <td>  <font family="Brush Script MT" size="4.8px" color="white"> &nbsp; &nbsp; &nbsp; &nbsp;Sunday </font></td>
    
    <td>  <font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;6.30 A.M </font></td>
    <td>  <font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;8.30 P.M </font></td>
    
</tr>
<tr height="35px">
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;Monday</font></td>
    
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;6.30 A.M</font></td>
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;8.30 P.M</font></td>
    
</tr>
<tr height="35px">
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;Tuesday</font></td>
    
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;6.30 A.M</font></td>
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;8.30 P.M</font></td>
    
</tr>
<tr height="35px">
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;Wednesday</font></td>
    
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;7.0 A.M</font></td>
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;7.0 P.M</font></td>
    
</tr>
<tr height="35px">
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;THursday</font></td>
    
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;8.30 A.M</font></td>
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;7.0 P.M</font></td>
    
</tr>

<tr height="35px">
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;Friday</font></td>
    
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;9.30 A.M</font></td>
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;11.30 P.M</font></td>
    
</tr>

<tr height="35px">
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;Saturday</font></td>
    
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;closed(x)</font></td>
    <td><font size="4.8px" color="white">&nbsp; &nbsp; &nbsp; &nbsp;closed(x)</font></td>
    
</tr>
</tr>
</table>


</table>
                        
                
                


</table>
</div>
        
    </div>
</div>            





<table id="contact" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#D3D3D3">
<tr>
    <td>
        <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
            <!--Heading Start-->
            <tr>
                <td height="180" align="center" valign="middle" colspan="1">
</br>
                        <font face="arial" color="#231709" size="6.5">
                             <b>Got a Question? </b>
                         </font>
                         <font family="Brush Script MT" size="4" color="#231709">
                             <p> leave us your feedback to make our business more prodective and effective</p>
                        </font>
                        
                
                </td>
            </tr>
            <!--Heading End-->
            <tr>
                <td align="center" valign="buttom">
                   <table border="0" width="45%" cellpadding="0" cellspacing="10" align="center" bgcolor="#231709">
                       <tr>
                           <td width="30%">

                               <font face="arial" size="5" color="#ffffff">
                               &nbsp; &nbsp;Name
                               </font>
                           </td>
                           <td width="70%">
                            <font face="arial" size="5" color="#ffffff">
                                <input type="text" size="40">
                            </font>
                            </td>
                       </tr>
                       <tr>
                        <td width="30%">
                            <font face="arial" size="5" color="#ffffff">
                            &nbsp; &nbsp;Email
                            </font>
                        </td>
                        <td width="70%">
                         <font face="arial" size="5" color="#ffffff">
                             <input type="text" size="40">
                         </font>
                         </td>
                    </tr>
                    <tr>
                        <td width="30%">
                            <font face="arial" size="5" color="#ffffff">
                            &nbsp; &nbsp;  Message
                            </font>
                        </td>
                        <td width="60%">
                         <font face="arial" size="5" color="#ffffff">
                             <textarea rows="5" cols="42"></textarea>
                         </font>
                         </td>
                    </tr>
                    <tr>
                        <td width="10%">
                           &nbsp;
                        </td>
                        <td width="85%" align="center">
                            <button type="Submit">
                                <font face="arial" size="5" color="#292929">
                                     Submit
                                </font>
                        </button>
                         </td>
                    </tr>
                   </table>
                </td>
                
            </tr>
            <tr>
                <td colspan="3">
                    &nbsp;
                </td>
            </tr>
        </table>
    </td>

</tr>


</table>
<!--End Contact-->

<section class="book" id="book">

    <h1 class="heading">
        <span>O</span>
        <span>r</span>
        <span>d</span>
        <span>e</span>
        <span>r</span>
        <span class="space"></span>
        <span>N</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="https://img1.wsimg.com/isteam/ip/2ea55062-61cd-459f-b214-39c34238b4d8/46ea070a-6a00-49e9-8a28-d10abadc656f.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=h:1000,cg:true" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="place name">
            </div>
            <div class="inputBox">
                <h3>Item name</h3>
                <input type="number" placeholder="name of your item">
            </div>
            <div class="inputBox">
                <h3>Delivering Time</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>PUrchasing time</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="Order Now">
        </form>

    </div>

</section>



</section cellpadding="20" cellspacing="10">
<footer>
    <div class="footer0" id="footer0"  ><br>
        <br>
        <h1 >Coffee and tea time </h1></div>
    <div class="footer1">
        Connect with us at
        <div class="social-media">
            <a href="#"> <ion-icon name="logo-facebook"></ion-icon> </a>
            <a href="#"> <ion-icon name="logo-linkedin"></ion-icon> </a>
            <a href="#"> <ion-icon name="logo-youtube"></ion-icon> </a>
            <a href="#">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#"> <ion-icon name="logo-twitter"></ion-icon> </a>
        </div>
    </div>
    <div class="footer2">
        <div class="product">
            <div class="heading">Products</div>
            <div class="div">Sell your Products</div>
            <div class="div">Advertise</div>
            <div class="div">Pricing</div>
            <div class="div">Product Buisness</div>
        </div>
        <div class="services">
            <div class="heading">Services</div>
            <div class="div">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Return</div>
            <div class="div">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cash Back</div>
            <div class="div">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Affiliate Marketing</div>
            <div class="div">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others</div>
        </div>
        <div class="Company">
            <div class="heading">Company</div>
            <div class="div">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complaint</div>
            <div class="div">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Careers</div>
            <div class="div">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Affiliate Marketing</div>
            <div class="div">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Support</div>
        </div>
        <div class="Get Help">
            <div class="heading">Get Help</div>
            <div class="div">Help Center</div>
            <div class="div">Privacy Policy</div>
            <div class="div">Terms</div>
            <div class="div">Login</div>
        </div>
    </div>
</br>
    <div class="footer3">
        Copyright ©
        <h4>Arugnata</h4>
        2023-2030
    </div>
</footer>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="./javas.js"></script>



</body>
</html>






<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>