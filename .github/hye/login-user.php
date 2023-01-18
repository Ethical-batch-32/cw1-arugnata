
  </head>

<?php require_once "controllerUserData.php"; ?>


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>coffee </title>

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- custom css file link  -->
<link rel="stylesheet" href="lstyle.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="st-login.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">




<body >

<div class="container" >
</br>
</br>
</br>
</br>



    <div class="row">
</br>
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;
         <div class="col-md-4 offset-md-4 form login-form">
            <form action="login-user.php" method="POST" autocomplete="">
                
                <h2 class="text-center"><font size="6">Login Form </font></h2>
                <p class="text-center"><font size="3">Login with your email and password.</font></p>

                <?php
                if(count($errors) > 0){
                    ?>
                    <div class="alert alert-danger text-center">
                        <?php
                        foreach($errors as $showerror){
                            echo $showerror;
                        }
                        ?>
                    </div>
                    </div>
                    <?php
                }
                ?>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="link forget-pass text-left"><a href="forgot-password.php"><font size="3">Forgot password?</font></a></div>
                <div class="form-group">
                    <input class="form-control button" type="submit" name="login" value="Login">
                </div>
                <div class="link login-link text-center"><font size="3">Not yet a member?</font> <a href="signup-user.php"><font size="3">Signup now</font></a></div>
            </form>
        </div>
    </div>
            </div>
            

            <div section="img">

<img
                                src="https://www.clearforkbaptist.org/uploads/1/7/9/4/17945315/133389_1_orig.jpg"  height="680px" width="1400"
                                alt=""
                                
                            />

<!-- header section starts  -->

<header class="header" id="header">


<a href="#" class="logo"> <i class="fas fa-coffee"></i> Tea & Cofee Time. </a>
            </br>
<nav class="navbar">
            </br>
    <div id="nav-close" class="fas fa-times"></div>
            </br>
    <a href="#header">home</b></a>
    <a href="#about">About</b></a>
    <a href="#newsletter">subscribe</b></a>
        
    
    <a href="#footer">reviews</b></a>
    
</nav>

<div class="icons">
    <div id="menu-btn" class="fas fa-bars"></div>
    <!--<a href="#" class="fas fa-shopping-cart"></a>-->
    <div id="search-btn" class="fas fa-search"></div>
</div>

</header>

<!-- header section ends -->

<!-- search form  -->

<div class="search-form">

<div id="close-search" class="fas fa-times"></div>

<form action="">
    <input type="search" name="" placeholder="search here..." id="search-box">
    <label for="search-box" class="fas fa-search"></label>
</form>
</div>

<!-- home section starts  -->



<!--<div class="swiper home-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div class="box" style="background: url(images/home-bg-1.jpg) no-repeat;">
                <div class="content">
                    <span>never stop</span>
                    <h3>exploring</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                    <a href="#" class="btn">get started</a>
                </div>-->
            <!--</div>
        </div>

        <div class="swiper-slide">
            <div class="box second" style="background: url(images/home-bg-2.jpg) no-repeat;">
               <div class="content">
                    <span>make tour</span>
                    <h3>amazing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                    <a href="#" class="btn">get started</a>
                </div>-->
            <!--</div>
        </div>

        <div class="swiper-slide">
            <div class="box" style="background: url(images/home-bg-3.jpg) no-repeat;">
                <div class="content">
                    <span>explore the</span>
                    <h3>new world</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                    <a href="#" class="btn">get started</a>
                </div>
            </div>
        </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

</div>

</section>

home section ends -->

<!-- category section starts  -->
<!--
<section class="category">

<h1 class="heading">adventure idea!</h1>

<div class="box-container">

    <div class="box">
        <img src="images/category-1.jpg" alt="">
        <h3>bungee jump</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/category-2.jpg" alt="">
        <h3>zip lines</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/category-3.jpg" alt="">
        <h3>Canoeing</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/category-4.jpg" alt="">
        <h3>kayaking</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
        <a href="#" class="btn">read more</a>
    </div>

</div>

</section>


category section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<div class="image">
    <img src="images/about-img.jpg" alt="">
</div>


<div class="content">

       <!--<p> &nbsp; Get a taste of happiness and make your day........</br></p>-->
    <h3>Our Services</h3>
    <p>Our service offers a wide selection of premium coffee beans from around the world. We source our beans from small-scale farmers and work closely with them to ensure the highest quality and sustainability. Our beans are roasted in small batches to bring out the unique flavors and aromas of each origin. We offer a variety of brewing methods, including pour-over, French press, and cold brew. In addition to whole bean coffee, we also offer ground coffee and coffee subscriptions for your convenience. We pride ourselves on our commitment to customer satisfaction, and our team is always available to help with any questions or concerns. </p>
    <p> Order online for delivery or visit our café for a cup of freshly brewed coffee.</p>
    <a href="#" class="btn" color="white">read more</a>
</div>

</section>



<section class="packeges" id="packeges">



 
    
    <div class="row">
   
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
            
                <div class="card-body">
                    
                    <h5 class="card-title text-center"><Font size=6.5px><b>Send Feedback</b><font></h5>
                    <form action="email-script.php" method="post" class="form-signin">
                        <div class="form-label-group">
                            <label for="inputEmail"><Font size=5px>From <span style="color: #FF0000">*</span></label>
                            <input type="text" name="fromEmail" id="fromEmail" class="form-control"    required autofocus>
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="inputEmail"><Font size=5px>To <span style="color: #FF0000">*</span></label>
                            <input type="text" name="toEmail" id="toEmail" class="form-control" value="puriarugnata@gmail.com" required autofocus>
                        </div> <br/>
                        <label for="inputPassword">Subject <span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                        </div><br/>
                        <label for="inputPassword">Message <span style="color: #FF0000">*</span></label>
                        <div class="form-label-group" >
                        <Font size=5px>
                            <textarea  id="message" name="message" class="form-control" placeholder="Message" required ></textarea>
                        </div> <br/>
                        <button type="submit" name="sendMailBtn" class="btn btn-lg btn-primary btn-block text-uppercase" >Send Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




</section>

<!-- about section ends -->

<!-- shop section starts  -->
<!--

<section class="shop" id="shop">

<h1 class="heading">featured products</h1>

<div class="swiper product-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/product-1.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>survival kits</h3>
                <div class="price"> $5.00 - $25.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/product-2.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>survival kits</h3>
                <div class="price"> $5.00 - $25.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/product-3.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>survival kits</h3>
                <div class="price"> $5.00 - $25.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/product-4.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>survival kits</h3>
                <div class="price"> $5.00 - $25.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/product-5.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>survival kits</h3>
                <div class="price"> $5.00 - $25.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/product-6.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>survival kits</h3>
                <div class="price"> $5.00 - $25.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

</div>

</section>

<!-- shop section ends -->

<!-- packages section starts  -->
<!--
<section class="packages" id="packages">

<h1 class="heading">popular packages</h1>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="images/img-1.jpg" alt="">
        </div>
        <div class="content">
            <h3>featured tour package</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
            <div class="price">$250 - $450</div>
            <a href="#" class="btn">explore now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-2.jpg" alt="">
        </div>
        <div class="content">
            <h3>featured tour package</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
            <div class="price">$250 - $450</div>
            <a href="#" class="btn">explore now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-3.jpg" alt="">
        </div>
        <div class="content">
            <h3>featured tour package</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
            <div class="price">$250 - $450</div>
            <a href="#" class="btn">explore now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-4.jpg" alt="">
        </div>
        <div class="content">
            <h3>featured tour package</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
            <div class="price">$250 - $450</div>
            <a href="#" class="btn">explore now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-5.jpg" alt="">
        </div>
        <div class="content">
            <h3>featured tour package</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
            <div class="price">$250 - $450</div>
            <a href="#" class="btn">explore now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-6.jpg" alt="">
        </div>
        <div class="content">
            <h3>featured tour package</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
            <div class="price">$250 - $450</div>
            <a href="#" class="btn">explore now</a>
        </div>
    </div>

</div>

</section>

packages section ends -->

<!-- reviews section starts  -->
<!--

<section class="reviews" id="reviews">

<h1 class="heading">client's reviews</h1>

<div class="swiper review-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
            <div class="user">
                <img src="images/pic-1.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
            <div class="user">
                <img src="images/pic-2.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
            <div class="user">
                <img src="images/pic-3.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
            <div class="user">
                <img src="images/pic-4.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
            <div class="user">
                <img src="images/pic-5.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
            <div class="user">
                <img src="images/pic-6.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>

    </div>

</div>

</section>

<!-- reviews section ends -->

<!-- services section starts  -->

<!--<section class="services">

<h1 class="heading"> what we offer </h1>

<div class="box-container">

    <div class="box">
        <img src="images/serv-1.png" alt="">
        <h3>complete guide</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nihil?</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/serv-2.png" alt="">
        <h3>custom packages</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nihil?</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/serv-3.png" alt="">
        <h3>family trips</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nihil?</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/serv-4.png" alt="">
        <h3>train guides</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nihil?</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/serv-5.png" alt="">
        <h3>adventure trail</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nihil?</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/serv-6.png" alt="">
        <h3>various adventures</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nihil?</p>
        <a href="#" class="btn">read more</a>
    </div>
    
</div>

</section>

services section ends -->

<!-- blogs section starts  -->
<!--
<section class="blogs" id="blogs">

<h1 class="heading"> our daily posts </h1>

<div class="swiper blogs-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <img src="images/img-1.jpg" alt="">
            <div class="icons">
                <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
            <h3>blog title goes here.</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="swiper-slide slide">
            <img src="images/img-2.jpg" alt="">
            <div class="icons">
                <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
            <h3>blog title goes here.</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="swiper-slide slide">
            <img src="images/img-3.jpg" alt="">
            <div class="icons">
                <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
            <h3>blog title goes here.</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="swiper-slide slide">
            <img src="images/img-4.jpg" alt="">
            <div class="icons">
                <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
            <h3>blog title goes here.</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="swiper-slide slide">
            <img src="images/img-5.jpg" alt="">
            <div class="icons">
                <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
            <h3>blog title goes here.</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="swiper-slide slide">
            <img src="images/img-6.jpg" alt="">
            <div class="icons">
                <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
            <h3>blog title goes here.</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</div>

</section>

blogs section ends -->

<!-- newsletter section  -->

<section class="newsletter" id="newsletter">

<div class="content">
    <h1 class="heading">subscirbe now</h1>
    <p>Subscribe to our channel to stay updated on the latest coffee news, brewing tips, and exclusive content. Plus, you'll have access to special subscriber-only content and discounts. Don't miss out on the coffee experience, subscribe to our channel today.</p>
    <form action="">
        <input type="email" name="" placeholder="enter your email" id="" class="email">
        <input type="submit" value="subscirbe" class="btn">
    </form>
</div>

</section>

<section class="clients">

<div class="swiper clients-slider" >
    <div class="swiper-wrapper"  >
        <div class="swiper-slide silde"><img src="images/client-logo-1.png" alt=""></div>
        <div class="swiper-slide silde"><img src="images/client-logo-2.png" alt=""></div>
        <div class="swiper-slide silde"><img src="images/client-logo-3.png" alt=""></div>
        <div class="swiper-slide silde"><img src="images/client-logo-4.png" alt=""></div>
    </div>
</div>

</section>
            </body>
            </html>
            

<!-- footer section starts  -->



<section class="footer" id="footer">



<?php require_once "header.php"; ?>
<?php require_once "db_connect.php"; ?>



<h2>Comment Us</h2>		
<br>		
<form method="POST" id="commentForm">
  <div class="form-group">
    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
  </div>
  <div class="form-group">
    <textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required></textarea>
  </div>
  <span id="message"></span>
  <br>
  <div class="form-group">
    <input type="hidden" name="commentId" id="commentId" value="0" />
    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment"/>
           
          
  </div>
        
</form>	
<?php require_once "show_comments.php"; ?>

    

    
    

   
    
</div>	

<script src="comments.js"></script>

            </section>

          
        






<!-- footer section ends -->












<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="java.js"></script>

</body>
</html>