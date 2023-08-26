<?php

include "../connection.php";
include "./mobile_insert.php";

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hoverable Sidebar Menu</title>
    <link rel="stylesheet" href="../Sidebar_style.css" />
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- Bootstrap     -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body class="body1">

<nav class="sidebar locked">
        <div class="logo_items flex">
            <span class="nav_image">
                <img src="../sidebar_img_logo/samir.jpg" />
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
                        <a href="../Corousel/Sidebar_Corousel_Product.php" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Corousel</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../Mobile/mobile.php" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Mobile</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../Computer_Laptop/computer_laptop.php" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Computer & Laptop</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../Man_cloth/man_cloth.php" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Man`s Clothes</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../Womans_clothes/womans_cloth.php" class="link flex">
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
                    <img src="../sidebar_img_logo/samir.jpg" alt="logo_img" />
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
                        <img src="../sidebar_img_logo/pngfind.com-rose-border-png-21233.png" alt="logo_img" />
                    </span>
                </div>

            </div>
        </div>
    </nav>








    <!-- ADD PRODUCT CODE START -->

    <div class="container-fluid" style="margin-left:250px">
        <div class="row">
            <div class="col-12">
                <form class=" my-5 g-3 container font-weight-bold "  id="registrationForm" method="POST" enctype="multipart/form-data" style="margin: auto; width: 750px;">
                    
                <h1>Mobile</h1>

                    <div class="row my-2">
                        <div class="mb-3 mt-3">
                            <label for="text" class="form-label">Device Name:</label>
                            <input type="text" name="Device_Name" class="form-control" id="text" placeholder="Enter Your Device Name">
                        </div>
                    </div>


                    <div class="row my-2">
                        <div class="mb-3 mt-3">
                            <label for="text" class="form-label">Device Brand Name:</label>
                            <input type="text" name="Device_Brand_Name" class="form-control" id="text" placeholder="Enter Your Device Brand Name">
                        </div>
                    </div>



                    <div class="row my-2">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="number" name="Price" class="form-control" id="price" placeholder="Enter price">
                        </div>
                    </div>



                    <div class="row my-2">
                        <div class="mb-3">
                            <label for="discount" class="form-label">Discount:</label>
                            <input type="number" name="Discount" class="form-control" id="discount" placeholder="Enter discount">
                        </div>
                    </div>






                    <div class="row my-2">

                        <!-- # File Uploading [pic & pdf] -->
                        <div class="col-12">
                            <fieldset class=" container">
                                <legend class="col-form-label  pt-0">Upload File</legend>
                                <div class="row">

                                    <div class="col-sm-10 form-control">
                                        <label class="custom-file-label" for="fileInput">Choose File : [ Under 10-mb ] JPG, PNG, & PDF Format Only</label>
                                        <div class="custom-file">
                                            <img id="previewImage" src="#" width="100px" height="100px" style="display: none;">
                                            <embed id="previewPDF" src="#" width="100%" height="300px" style="display: none;">

                                            <input type="file" name="File" class="custom-file-input" id="fileInput" accept="image/jpeg, image/png, application/pdf" onchange="previewFile(event)" required>
                                            <button type="submit" name="Upload_file_btn" class="btn btn-info mt-2" id="uploadButton" required>Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <!-- # file upload all condition ex [file under 3mb & only jpg&pdf file upload....] -->
                        <!--  # file ke liye ye dono link requried hi hai... -->
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="./file_uploaded_javascript.js"></script>
                        <!--************************************************************* -->


                        <!-- # file image & pdf show ( display ) javascript -->
                        <script src='./pic_pdf_display_code.js'></script>
                        <!--**************************************************************-->


                        <div class="col-12 d-flex justify-content-center my-5">
                            <button type="submit" name="Submit" class="btn btn-primary mx-5">Submit</button>
                            <button type="reset" class="btn btn-danger mx-5">Reset</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <!-- ADD PRODUCT CODE END -->









    <!-- Bootstrap     -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="../Sidebar_script.js"></script>
</body>

</html>