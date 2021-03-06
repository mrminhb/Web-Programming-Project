<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name='viewport' content="width=device-width, initial-scale=1.0" />
    <title>EShop Website</title>
    <link rel="stylesheet" href="../../index.css" />
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <script src="./cart.js" async></script>
</head>
<body>
    <section id="header">
        <a href="#"><img width="100px" height="100px" src="../../img/logo.png" alt="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../shop/shop.php">Shop</a></li>
                <li><a href="../login/login.php">Login</a></li>
                <li><a href="../register/register.php">Register</a></li>
                <li><a class="active" href="../cart/cart.php"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </div>
    </section>

    <section class="section-p1" id="cart">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Products</td>
                    <td>Price</td>
                    <td>Quantity</td>
                </tr>
            </thead>
            <tbody class="items-container">
                <tr class="cart-item">
                    <td><button class="remove">Remove</button></td>
                    <td><img src="../../img/products/product2.jpg" alt=""></td>
                    <td class="product-name">Corsair Vengeance RGB PRO 16GB (2x8GB) DDR4</td>
                    <td class="item-price">$89.99</td>
                    <td><input class="item-quantity" type="number" min="1" value="1"></td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="total">
        <div>
            <h3>Total payment</h3>
            <table>
                <tr>
                    <td>Cart Total</td>
                    <td class="cart-total">$89.99</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong class="total-payment">$89.99</strong></td>
                </tr>
            </table>
            <button>Go to checkout</button>
        </div>
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
            <a href="#">Sign up</a>
            <a href="#">Login</a>
            <a href="#">My cart</a>
            <a href="#">Help</a>
        </div>

        <div class="col2">
            <h4>Online Payment Methods</h4>
            <img src="../../img/payment.jpg" alt="payment-methods">
        </div>
    </footer>
</body>

</html>