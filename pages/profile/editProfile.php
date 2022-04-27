<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name='viewport' content="width=device-width, initial-scale=1.0" />
    <title>EShop Website</title>
    <link rel="stylesheet" href="../../index.css" />
    <link rel="stylesheet" href="./profile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <script src="./profile.js" async></script>
</head>

<body>
    <section id="header">
        <a href="#"><img width="100px" height="100px" src="../../img/logo.png" alt="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="../../index.html">Home</a></li>
                <li><a href="../shop/shop.php">Shop</a></li>
                <li><a href="../login/login.php">Login</a></li>
                <li><a href="../register/register.php">Register</a></li>
                <li><a class="active" href="../../pages/profile/">Profile</a></li>
                <li><a href="../cart/cart.php"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </div>
    </section>

    <section id="user-profile" class="section-p1">
        <div id="left-profile">
            <img id="avatar" src="../../img/default-pfp.png" alt="">
            <div>
            </div>
            <div id="bio">
                <form id="edit-bio-form">
                    <textarea name="edit-bio-input" id="edit-bio-input" cols="25" rows="10" maxlength="200" placeholder="Enter your bio here..."></textarea>
                    <button id="save-bio" type="submit">Save bio</button>
                </form>
            </div>
        </div>

        <div id="right-profile">
            <form action="" id="edit-profile-form">
                <div class="user-info">
                    <label for="full-name"><h4>Full name:</h4></label>
                    <input type="text" name="full-name" placeholder="Enter your name here...">
                </div>
                <div class="user-info">
                    <label for="dob"><h4>Date of birth:</h4></label>
                    <input name="dob" type="date">
                </div>
                <div class="user-info">
                    <label for="email"><h4>Email:</h4></label>
                    <input type="email" name="email" placeholder="Enter your email here...">
                </div>
                <div class="user-info">
                    <label for="link"><h4>Link:</h4></label>
                    <input type="url" name="link" placeholder="Enter your link here...">
                </div>
                <button id="save-profile">Save profile</button>
            </form>
        </div>
    </section>>
</body>

</html>