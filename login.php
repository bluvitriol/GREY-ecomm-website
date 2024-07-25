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

    <!-- login -->
    <!-- <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Login</h2>
            <hr class="mx-auto">
        </div>
    </section> -->

    <section id="page-header" class="contact-header">

        <h2>#joinUs</h2>

        <p>Become a part of the GREY community! </p>

    </section>

    <!-- <form action="" id="login-form">
        <div id="form-details">
            <label>Email</label>
            <input type="text" class="form-control" id="login-email" name="email" placeholder="email" required>
        </div>
        <div id="form-details">
            <label>Password</label>
            <input type="password" class="form-control" id="login-password" name="password" placeholder="password"
                required>
        </div>
        <div id="form-details">
            
            <button type="submit" id="login-btn" class="btn">Submit</button>
            <br>
            
            <a href="http://" target="_blank" rel="noopener noreferrer" id="register-url" class="btn"></a>
        </div>
    </form> -->



    <section id="form-details">
        <form action="login_conn.php" method="post">
        <!-- <form> -->
            <h2>Login</h2>
            <!-- <label>Name</label> -->
            <input type="text" class="form-control" id="name login-name" name="name" placeholder="Name" required>
            <!-- <label>Email</label> -->
            <input type="email" class="form-control" id="login-email email" name="email" placeholder="Email" required>
            <!-- <label>Password</label> -->
            <input type="password" class="form-control" id="login-password password" name="password" placeholder="Password"
                required>
            <button name="button" class="normal " id="login">Login</button>
            <br>
            <span>Don't have an account?<a href="register.php" target="_blank" rel="noopener noreferrer">Register</a></span>
        </form>
        </div>

<!-- EXTRA!
         <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js">
        </script> -->
        <!-- <script>
            $(function(){
                $('#login').click(function(e){
                    // alert("working");
                    var valid = this.form.checkValidity();

                    if(valid){
                        var username=$('#name').val();
                        var email=$('#email').val();
                        var password=$('#password').val();
                        // alert("done");
                    }
                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'jslogin.php',
                        data: {username: username, email: email, password: password},
                        success: function(data){
                            // alert(data);
                            if($.trim(data)==="1"){
                                setTimeout('window.location.href="index.php"',2000);
                            }
                        },
                        error: function(data){
                            alert('there were errors');
                        }
                    });
                });
            })
        </script> -->


    </section>
    <footer class="section-p1">
        <div class="col social">
            <img style="width: 120px; height: 120px;" class="logo" src="img/logo.png" alt="">
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
            <h4>My Account</h4>
            <a href="register.html">Sign Up</a>
            <a href="login.html">Sign In</a>
            <!-- <a href="cart.html">View Cart</a> -->
            <a href="checkout.html">My Wishlist</a>
            <!-- <a href="#">Track My Order</a> -->
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

</html>