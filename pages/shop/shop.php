<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name='viewport' content="width=device-width, initial-scale=1.0" />
    <title>EShop Website</title>
    <link rel="stylesheet" href="../../index.css" />
    <link rel="stylesheet" href="./shop.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <script src="./shop.js" async></script>
</head>

<body>
    <section id="header">
        <a href="#"><img width="100px" height="100px" src="../../img/logo.png" alt="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="../../index.php">Home</a></li>
                <li><a class="active" href="../shop/shop.php">Shop</a></li>
                <li><a href="../login/login.php">Login</a></li>
                <li><a href="../register/register.php">Register</a></li>
                <li><a onclick="getSession('../../pages/profile/profilecard.php')">Profile</a></li>
                <li><a onclick="getSession('../cart/cart.php')"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </div>
    </section>

    <section id="products" class="section-p1">
        <div class="product-container">
            <div class="product" onclick="getProductInfo(0)">
                <img class="product-img" src="../../img/products/product1.jpg" alt="">
                <div class="description">
                    <span>MSI</span>
                    <h5 class="product-name">MSI Geforce RTX™ 3080 GAMING Z TRIO 10GB GDDR6X (LHR)</h5>
                    <h4 class="product-price">$1799.99</h4>
                </div>
                <a href="#">
                    <i style="position: absolute; bottom: 4%; right: 5%; font-size: 25px;" class="fas fa-cart-plus">
                    </i>
                </a>
            </div>
            <div class="product" onclick="getProductInfo(1)">
                <img class="product-img" src="../../img/products/product2.jpg" alt="">
                <div class="description">
                    <span>Corsair</span>
                    <h5 class="product-name">Corsair Vengeance RGB PRO 16GB (2x8GB) DDR4</h5>
                    <h4 class="product-price">$89.99</h4>
                </div>
                <a href="#">
                    <i style="position: absolute; bottom: 4%; right: 5%; font-size: 25px;" class="fas fa-cart-plus">
                    </i>
                </a>
            </div>
            <div class="product" onclick="getProductInfo(2)">
                <img class="product-img" src="../../img/products/product3.jpg" alt="">
                <div class="description">
                    <span>GIGABYTE</span>
                    <h5 class="product-name">Mainboard GIGABYTE B450 AORUS PRO Socket AM4 ATX</h5>
                    <h4 class="product-price">$129.99</h4>
                </div>
                <a href="#">
                    <i style="position: absolute; bottom: 4%; right: 5%; font-size: 25px;" class="fas fa-cart-plus">
                    </i>
                </a>
            </div>
            <div class="product" onclick="getProductInfo(3)">
                <img class="product-img" src="../../img/products/product4.jpg" alt="">
                <div class="description">
                    <span>Intel</span>
                    <h5 class="product-name">CPU Intel Core i7-10700K</h5>
                    <h4 class="product-price">$399.99</h4>
                </div>
                <a href="#">
                    <i style="position: absolute; bottom: 4%; right: 5%; font-size: 25px;" class="fas fa-cart-plus">
                    </i>
                </a>
            </div>
        </div>

        <div class="product-container">
            <div class="product" onclick="getProductInfo(4)">
                <img class="product-img" src="../../img/products/product5.jpg" alt="">
                <div class="description">
                    <span>HyperX</span>
                    <h5 class="product-name">HyperX FURY Memory Black-8GB Kit*(2x4GB)-DDR4 3200MHz Intel XMP CL16 DIMM</h5>
                    <h4 class="product-price">$59.99</h4>
                </div>
                <a href="#">
                    <i style="position: absolute; bottom: 4%; right: 5%; font-size: 25px;" class="fas fa-cart-plus">
                    </i>
                </a>
            </div>
            <div class="product" onclick="getProductInfo(5)">
                <img class="product-img" src="../../img/products/product8.jpg" alt="">
                <div class="description">
                    <span>Intel</span>
                    <h5 class="product-name">Intel Core i9-12900K Processor</h5>
                    <h4 class="product-price">$1299.99</h4>
                </div>
                <a href="#">
                    <i style="position: absolute; bottom: 4%; right: 5%; font-size: 25px;" class="fas fa-cart-plus">
                    </i>
                </a>
            </div>
            <div class="product" onclick="getProductInfo(6)">
                <img class="product-img" src="../../img/products/product7.jpg" alt="">
                <div class="description">
                    <span>AMD</span>
                    <h5 class="product-name">AMD Radeon 6900 XT DirectX 12.00</h5>
                    <h4 class="product-price">$999.99</h4>
                </div>
                <a href="#">
                    <i style="position: absolute; bottom: 4%; right: 5%; font-size: 25px;" class="fas fa-cart-plus">
                    </i>
                </a>
            </div>
            <div class="product" onclick="getProductInfo(7)">
                <img class="product-img" src="../../img/products/product6.jpg" alt="">
                <div class="description">
                    <span>ASUS</span>
                    <h5 class="product-name">Mainboard PC ASUS ROG STRIX B560-G GAMING WIFI</h5>
                    <h4 class="product-price">$159.99</h4>
                </div>
                <a href="#">
                    <i style="position: absolute; bottom: 4%; right: 5%; font-size: 25px;" class="fas fa-cart-plus">
                    </i>
                </a>
            </div>
        </div>
    </section>

    <section id="banner" class="'section-m1">
        <h4>Repair services</h4>
        <h2>Up to <span>70% Off</span></h2>
        <button class="normal">Explore more</button>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class='logo' width="100" height="100" src="../../img/logo.png" alt="logo">
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
            <a href="../register/register.php">Sign up</a>
            <a href="../login/login.php">Login</a>
            <a href="../cart/cart.php">My cart</a>
            <a href="#">Help</a>
        </div>

        <div class="col2">
            <h4>Online Payment Methods</h4>
            <img src="../../img/payment.jpg" alt="payment-methods">
        </div>
    </footer>
</body>

</html>