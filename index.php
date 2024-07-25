<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREY</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
    <section id="header">
        <a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="Blog.html">Blog</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="Cart.html"><i class="fas fa-shopping-bag"></i></a></li>
                <li id="user"><a href="login.php"><i class="fas fa-user"></i></a></li>
                <!-- <li id="user"><a href="register.php"><i class="fas fa-sign-in-alt icon"></i></a></li> -->
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & upto 50% off!</p>
        <button><a href="shop.html" target="_blank" rel="noopener noreferrer">Shop Now</a></button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img id="free-shipping" src="img/f1.png" alt="">

            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img id="free-shipping" src="img/f2.png" alt="">

            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img id="free-shipping" src="img/f3.png" alt="">

            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img id="free-shipping" src="img/f4.png" alt="">

            <button onClick="document.getElementById('follow').scrollIntoView()"><h6>Promotions</h6></button>
        </div>
        <div class="fe-box">
            <img id="free-shipping" src="img/f5.png" alt="">

            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img id="free-shipping" src="img/f6.png" alt="">

            <h6>24/7 Support</h6>
        </div>
    </section>
    <section id="product1" class="section-p1">
        
         <h2>Featured Products</h2>
        <p>Our Summer Collection</p>
        
        <div class="pro-container">

            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5>Authentic Floral Design Mendale</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1,409</h4>
                </div>
                <a href="sproduct.php">
                <button class="fas fa-shopping-cart cart"></button>
                </a>
            </div>

            <div class="pro">
                <img src="img/products/f2.jpg" alt="">
                <div class="des">
                    <span>KRISHNA</span>
                    <h5>Unisex Beach Vibes Cotton Floral T-Shirt Short Sleeve</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹699</h4>
                </div>
                <a href="sproduct.php">
                <button class="fas fa-shopping-cart cart"></button>
                </a>
            </div>

            <div class="pro">
                <img src="img/products/f3.jpg" alt="">
                <div class="des">
                    <span>KRISHNA</span>
                    <h5>Men's Holiday Print Cotton Flower T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹699</h4>
                </div>
                <a href="sproduct.php">
                <button class="fas fa-shopping-cart cart"></button>
                </a>
            </div>
            <div class="pro">
                <img src="img/products/f4.jpg" alt="">
                <div class="des">
                    <span>DEVHARU</span>
                    <h5>Men Regular Fit Printed Casual Shirt
                    </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹399</h4>
                </div>
                <a href="sproduct.php">
                <button class="fas fa-shopping-cart cart"></button>
                </a>
            </div>
            <div class="pro">
                <img src="img/products/f5.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5>Summer Tops Plus Size Tshirts Short Sleeve V-Neck Floral Print</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹599</h4>
                </div>
                <a href="sproduct.php">
                <button class="fas fa-shopping-cart cart"></button>
                </a>
            </div>
            <div class="pro">
                <img src="img/products/f6.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5>Mens Corduroy Patchwork Long Sleeve Casual</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2,900</h4>
                </div>
                <a href="sproduct.php">
                <button class="fas fa-shopping-cart cart"></button>
                </a>
            </div>
            <div class="pro">
                <img src="img/products/f7.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5>Designer Jeans Left Side Floral Piece</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1,299</h4>
                </div>
                <a href="sproduct.php">
                <button class="fas fa-shopping-cart cart"></button>
                </a>
            </div>
            <div class="pro">
                <img src="img/products/f8.jpg" alt="">
                <div class="des">
                    <span>Zudio</span>
                    <h5>Trendy Comfortable Georgette Flare Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹699</h4>
                </div>
                <a href="sproduct.php">
                <button class="fas fa-shopping-cart cart"></button>
                </a>
            </div>
        </div>

    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Upto <span>70% off</span> - All T-Shirts and Accessories</h2>
        <button class="normal"><a href="shop.html">Explore More</a></button>
    </section>

    <section id="product2" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Exciting cool designs to keep you rockin' it</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/n1.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5>Regular Fit Henley Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1,409</h4>
                </div>
                <a href="#">
                    <i class="fas fa-shopping-cart cart"></i>
                </a>
            </div>
            <div class="pro">
                <img src="img/products/n2.jpg" alt="">
                <div class="des">
                    <span>MAX</span>
                    <h5>Max Men Geometric Printed Slim Fit Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹699</h4>
                </div>
                <a href="#">
                    <i class="fas fa-shopping-cart cart"></i>
                </a>
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5>Regular Fit Linen-blend grandad shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1,199</h4>
                </div>
                <a href="#">
                    <i class="fas fa-shopping-cart cart"></i>
                </a>
            </div>
            <div class="pro">
                <img src="img/products/n4.jpg" alt="">
                <div class="des">
                    <span>G-Star RAW</span>
                    <h5>Bristum 1-Pocket Service Shirt Green</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1,199</h4>
                </div>
                <a href="#">
                    <i class="fas fa-shopping-cart cart"></i>
                </a>
            </div>
            <div class="pro">
                <img src="img/products/n5.jpg" alt="">
                <div class="des">
                    <span>Jordan</span>
                    <h5>Men's Fleece Pullover Hoodie Regular Fit</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2,000</h4>
                </div>
                <a href="#">
                    <i class="fas fa-shopping-cart cart"></i>
                </a>
            </div>
            <div class="pro">
                <img src="img/products/n6.jpg" alt="">
                <div class="des">
                    <span>Campus Sutra</span>
                    <h5>Striped Men Grey Casual Shorts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹799</h4>
                </div>
                <a href="#">
                    <i class="fas fa-shopping-cart cart"></i>
                </a>
            </div>
            <div class="pro">
                <img src="img/products/n7.jpg" alt="">
                <div class="des">
                    <span>MAX</span>
                    <h5>Men Regular Fit Solid Spread Collar Casual Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1,499</h4>
                </div>
                <a href="#">
                    <i class="fas fa-shopping-cart cart"></i>
                </a>
            </div>
            <div class="pro">
                <img src="img/products/n8.jpg" alt="">
                <div class="des">
                    <span>UNIQLO</span>
                    <h5>Linen Cotton Short-Sleeve Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹599</h4>
                </div>
                <a href="#">
                    <i class="fas fa-shopping-cart cart"></i>
                </a>
            </div>
        </div>

    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box box1">
            <h4>Gorgeous deals</h4>
            <h2>Buy 1 Get 1 Free</h2>
            <span>These are deals you cannot refuse — the best vintage dress is on SALE</span>
            <button class="white but1">Learn More</button>
        </div>
        <div class="banner-box box2">
            <h4>Spring/Summer</h4>
            <h2>Upcoming Season</h2>
            <span>It's a great time of the year to experiment with fashion and try out new looks in the spring</span>
            <button class="white but2">Collection</button>
        </div>
    </section>

     <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Spring Collection - 50% Off</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW JACKETS COLLECTION</h2>
            <h3>With sexy discounts</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>Trendy Spring 2023</h3>
        </div>
    </section> 

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get bi-weekly email updates about our discounts and <span>special offers.</span></p>
        </div>
        <!-- <div class="form"> -->
        <form action="submit_email.php" method="post">
            <input type="email" placeholder="Your email address" name="email" id="email">
            <button type="submit" class="normal">Sign Up</button>
            </form>
        <!-- </div> -->
    </section>

    <footer class="section-p1">
        <div class="col social">
           <a href="index.php" target="_blank" rel="noopener noreferrer"><img style="width: 120px; height: 120px;" class="logo" src="img/logo.png" alt=""></a>
            <h4>Contact</h4>
            <p><strong>Address:</strong> Adobe Towers, I-1A, City Centre, Sector : 25A, Noida-201301</p>
            <p><strong>Phone:</strong> 1800-208-9898</p>
            <p><strong>Hours:</strong> 9 AM - 6 PM, Mon - Sat</p>
            
            <div id="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
            <!-- <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div> -->
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="about.html">About Us</a>
            <!-- <a href="#">Delivery Information</a> -->
            <a href="t&c.html">Terms & Conditions</a>
            <a href="contact.html">Contact Us</a>
        </div>
        <div class="col">
            <a href="account.html" target="_blank" rel="noopener noreferrer"><h4>My Account</h4></a>
            <a href="register.html">Sign Up</a>
            <a href="login.html">Sign In</a>
            <!-- <a href="cart.html">View Cart</a> -->
            <a href="cart.html">My Wishlist</a>
            <!-- <a href="#">Help</a> -->
        </div>
        <!-- <div class="col install">
            <h4>Install App</h4>
            <p>From App Store Or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div> 
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>-->
    </footer>
    <script src="script.js"></script>
</body>
</div>
</html>