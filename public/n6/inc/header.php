<link rel="stylesheet" href="assets/css/cartss.css">

</head>

<body>
    <div id="bg">
        <!--header-->
        <div id="header">
            <div class="grid wide header-item">
                <ul class="row header-list">
                    <li class=" header-list-item">
                        <a class="col" href="">
                            <i class=" mr-4 header-list-icon fa-solid fa-phone-volume"></i>
                            <span>Hotline: 0799 xxx xxx</span>
                        </a>
                    </li>
                </ul>
                <ul class=" row header-list">
                    <!-- <li class="mr-20 col header-list-item">
                        <a class="col-4" href="">
                            <i class="mr-4 header-list-icon fa-solid fa-magnifying-glass"></i>
                            <span>Tìm kiếm</span>
                        </a>
                        <div class="header-input">
                            <input class="input-search" type="text" placeholder="Tìm kiếm...">
                            <a href=""><i class="header-icon-search fa-solid fa-magnifying-glass"></i></a>
                        </div>
                    </li> -->
                    <!-- <li class="mr-20 col header-list-item">
                        <a class="col-4" href="">
                            <i class="mr-4 header-list-icon fa-solid fa-user"></i>
                            <span>Tài khoản</span>
                            <div class="header-user">
                                <a href="">Đăng ký</a>
                                <a href="">Đăng nhập</a>
                            </div>
                        </a>
                    </li> -->
                    <?php
                    $select = $conn->select("select * from cart");
                    if ($select != false)
                        $number_cart = mysqli_num_rows($select);
                    else $number_cart = 0;
                    ?>
                    <li class="col header-list-item ancart">
                        <a class="col-4 " href="cart.php">
                            <i class="mr-4   fa-sharp fa-solid fa-bag-shopping header-list-icon icon-cart">
                                <div class="number_cart"><?= $number_cart ?></div>
                            </i>
                            <span>Giỏ hàng</span>
                            <div class="header-cart test">
                                <?php
                                if ($select != false) {
                                ?>
                                    <div class="title">sản phẩm</div>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($select)) {
                                    ?>

                                        <a href="" class="header-cart-product">
                                            <div class="header-cart-produc-left">
                                                <img width="40px" height="40px" src="<?=$row['img_product']?>" alt="">
                                                <div class="name"><?=$row['name_product']?></div>
                                            </div>
                                            <div class="header-cart-produc-right">
                                                <div class="price"><sup>đ </sup><?=$row['price_product']?></div>
                                            </div>
                                        </a>
                                    <?php

                                    }
                                    ?>
                                    <div class="go_cart" href=""><a href="cart.php">Thanh toán</a></div>
                                    <?php
                                } else {
                                    ?>
                                    <img width="100%" style=" scale: .7;" src="https://uptoaltar.github.io/TeaHouse/assets/img/empty-cart.webp" alt="">
                                <?php
                                }
                                ?>
                            </div>
                        </a>

                    </li>

                </ul>
            </div>

            <div id="navmain">
                <div class="grid wide">
                    <div class="row navmain-bg">
                        <div class="navmain-item">
                            <ul class="row navmain-list">
                                <li class="mr-30 col navmain-list-item"><a href="index.php#bg">Trang chủ</a></li>
                                <li class="mr-30 col navmain-list-item"><a href="index.php#time-open">Giới thiệu</a></li>
                                <li class="mr-30 col navmain-list-item"><a href="index.php#menu">Sản phẩm</a>
                                </li>
                            </ul>
                        </div>
                        <div class="navmain-item">
                            <a href="./index.php"><img src="./assets/img/logo.webp" alt=""></a>
                        </div>
                        <div class="navmain-item">
                            <ul class="row navmain-list">
                                <li class="mr-30 col navmain-list-item"><a href="index.php#bg">Tin tức</a></li>
                                <li class="mr-30 col navmain-list-item"><a href="index.php#footer">Khuyến mãi</a></li>
                                <!-- <li class="mr-30 col navmain-list-item"><a href="">Thực đơn</a></li> -->
                                <li class="col navmain-list-item"><a href="index.php#footer">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>