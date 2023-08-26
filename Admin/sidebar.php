<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar Menu </title>
    <link rel="stylesheet" href="./Sidebar_style.css" />
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- Bootstrap     -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body class="body1">

    <nav class="sidebar locked">
        <div class="logo_items flex">
            <span class="nav_image">
                <img src="../Admin/sidebar_img_logo/samir.jpg" />
            </span>
            <span class="logo_name">Samir</span>
            <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
            <i class="bx bx-x" id="sidebar-close"></i>
        </div>

        <div class="menu_container">
            <div class="menu_items">
                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Dashboard</span>
                        <span class="line"></span>
                    </div>
                   
                    <li class="item">
                        <a href="./Corousel/Sidebar_Corousel_Product.php" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Corousel</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Mobile</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Computer & Laptop</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Man`s Clothes</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Woman`s Clothes</span>
                        </a>
                    </li>
                </ul>


                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Setting</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-flag"></i>
                            <span>Notice Board</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-award"></i>
                            <span>Award</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-cog"></i>
                            <span>Setting</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar_profile flex">
                <span class="nav_image">
                    <img src="../Admin/sidebar_img_logo/samir.jpg" alt="logo_img" />
                </span>
                <div class="data_text">
                    <span class="name">Samir Burande</span>
                    <span class="email">ssburande98@gmail.com</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar -->
    <nav class="navbar flex" style="background-color: #eef5fe;">

        <div class="container">
            <div class="row">

                <div class="col-2">
                    <i class="bx bx-menu" id="sidebar-open"></i>
                </div>

                <div class="col-8">
                    <input type="text" placeholder="Search..." class="search_box" />
                </div>

                <div class="col-2">
                    <span class="nav_image">
                        <img src="../Admin/sidebar_img_logo/pngfind.com-rose-border-png-21233.png" alt="logo_img" />
                    </span>
                </div>

            </div>
        </div>
    </nav>


    <div class="container margin-auto">

    </div>



    <!-- Bootstrap     -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="./Sidebar_script.js"></script>
</body>

</html>