<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <div class="container">
            <ul id="top_menu">
                <li><select>
                        <option>USD</option>
                        <option>AZN
                    </select>
                    </select>
                </li>
                <li><select>
                        <option>English</option>
                    </select>
                </li>
                <li><i class="bi bi-person-fill"></i> <a href="#">My Account</a></li>
                <li><i class="bi bi-heart-fill"></i> <a href="#">Wishlist</a></li>
                <li><i class="bi bi-basket-fill"></i> <a href="#">My Cart</a></li>
                <li><i class="bi bi-check2"></i> <a href="#">Checkout</a></li>
                <li><i class="bi bi-lock-fill"></i> <a href="#">Login</a></li>

            </ul>
            <div id="menu">
                <div class="row">
                    <div class="col-12 col-sm-4 col-lg-3">
                        <img src="../images/logo.png" alt="Flipmart">
                    </div>
                    <div class="col-12 col-sm-4 col-lg-6">
                        <div class="input-group mb-3">
                            <button class="dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Categories</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                            <input type="text" class="form-control" placeholder="Search Here">
                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-3">
                            <div class="cart d-flex">
                                <i class="bi bi-basket-fill"></i>
                                <span class="headertext1 circle">2</span><p class="headertext1">Card -$600.000 </p>
                            </div>
                    </div>
                </div>
            </div>
            <div id="bottom_menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">CLOTHING</a></li>
                    <li><a href="#">ELECTRONICS</a></li>
                    <li><a href="#">HEALTH & BEAUTY</a></li>
                    <li><a href="#">WATCHES</a></li>
                    <li><a href="#">JEWELLERY</a></li>
                    <li><a href="#">SHOES</a></li>
                    <li><a href="#">KIDS AND GIRLS</a></li>
                    <li><a href="#">PAGES</a></li>
                </ul>
            </div>
        </div>
    </header>
<?php?>
