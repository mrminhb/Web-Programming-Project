<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name='viewport' content="width=device-width, initial-scale=1.0" />
    <title>EShop Website</title>
    <link rel="stylesheet" href="../../../index.css" />
    <link rel="stylesheet" href="./detail.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <script src="./detail.js" async></script>
</head>

<body>
    <section id="header">   
        <a href="#"><img width="100px" height="100px" src="../../../img/logo.png" alt="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="../../../index.php">Home</a></li>
                <li><a class="active" href='../shop.php'>Shop</a></li>
                <li><a href="../../login/login.php">Login</a></li>
                <li><a href="../../register/register.php">Register</a></li>
                <li><a onclick="getSession('../../profile/profilecard.php')">Profile</a></li>
                <li><a onclick="getSession('../../cart/cart.php')"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </div>
    </section>

    <section id="detail" class="section-p1">
        <div class="product-img">
            <img id="img" src="../../../img/products/product1.jpg" alt="" width="100%" id="main-img">
        </div>

        <div class="product-details">
            <h6>Graphic Processing Unit</h6>
            <h4 id="name"></h4>
            <h2 id="price"></h2>
            <input id="quantity" type="number" value="1" min="1">
            <button class="cart-button" onclick="getSessionForCart()">Add to Cart</button>
            <h4>Product description</h4>
            <span>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a sodales purus, sit amet imperdiet ligula. Etiam vel
                nibh sed tellus bibendum cursus ac id orci. Aliquam nisi diam, ullamcorper eu dignissim non, aliquet et ante. Nullam in
                mi justo. Suspendisse sit amet gravida ante, a tempor magna. Quisque finibus tellus quis elementum fermentum.
                Suspendisse quis sodales turpis. Donec nibh ipsum, euismod interdum ornare at, vestibulum eu lectus. Sed at egestas
                massa. Sed pellentesque odio aliquam sapien posuere, sed consequat ante lacinia. Nunc tristique dictum tellus, suscipit
                fringilla eros hendrerit convallis. Cras lectus justo, efficitur et varius ut, mattis in metus.
            </span>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class='logo' width="100" height="100" src="../../../img/logo.png" alt="logo">
            <h4>Contact</h4>
            <p><b>Phone:</b> (+84)12434325</p>
            <p><b>Email:</b> EShopTMVH@gmail.com</p>
            <div class="follow">
                <h4>Follow our social media</h4>
                <div class="icon">
                    <a href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a>
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a>
                        <i class="fab fa-twitch"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col2">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Delivery Information</a>
        </div>

        <div class="col2">
            <h4>Account</h4>
            <a href="#">Sign up</a>
            <a href="#">Login</a>
            <a href="#">My cart</a>
            <a href="#">Help</a>
        </div>

        <div class="col2">
            <h4>Online Payment Methods</h4>
            <img src="../../../img/payment.jpg" alt="payment-methods">
        </div>
    </footer>
</body>

</html>