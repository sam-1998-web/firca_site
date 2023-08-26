<?php

include "../connection.php";
// include "./man_insert.php";


if (isset($_GET['edit_id_man'])) {

    if (isset($_POST['Submit'])) {


        // File upload
        $target_path = "./Man_cloth_pics/"; // Corrected the target path (added "./" before the directory name)
        $file = $_FILES['man_img']['name'];
        $target = $target_path . basename($_FILES['man_img']['name']);
        $fileupload = strtolower(pathinfo($target, PATHINFO_EXTENSION));


        // Asia time zone in PHP
        $tz = 'Asia/Kolkata';
        date_default_timezone_set($tz);
        $Date_Time = date('Y-m-d H:i:sa');



        if (empty($file)) {

            $update = "UPDATE `man_cloths` SET `Update_Time`='$Date_Time' WHERE id = '" . $_GET['edit_id_man'] . "'";

            $query = mysqli_query($conn, $update);
            if ($query) {
                echo "<script>alert('Your Data is update'); window.location.href='man_select.php';</script>";
            } else {

                echo "<script>alert('Your Data is NOT update');</script>";
            }
        } else {
            $update = "UPDATE `man_cloths` SET `man_img`= '$file',`Update_Time`='$Date_Time' WHERE id = '" . $_GET['edit_id_man'] . "'";

            $query = mysqli_query($conn, $update);

            if ($query) {
                if ($_FILES['man_img']['size'] > 10 * 1024 * 1024) { // 10MB (MegaBytes) file size limit
                    echo "<script>
                    alert('File size is too large.');
                    window.location.href='man_edit.php';
                    </script>";
                } else if (!in_array($fileupload, ['jpg', 'png'])) { // Check if the file extension is not JPG or PNG
                    echo "<script>
                    alert('File must be in JPG or PNG format.');
                    window.location.href='man_edit.php';
                    </script>";
                } else {
                    if (move_uploaded_file($_FILES['man_img']['tmp_name'], $target)) {
                        echo "<script>
                        alert('File uploaded successfully.');
                        window.location.href='man_select.php';
                        </script>";
                    } else {
                        echo "<script>
                        alert('Error in uploading file.');
                        </script>";
                    }
                }
            } else {
                echo "<script> alert('Your Data is NOT entered.') </script>";
            }
        }
    }







    // # Previous Data is display query....
    

    $previousData = "SELECT * FROM `man_cloths` WHERE id = '" . $_GET['edit_id_man'] . "'";

    $query_previousData = mysqli_query($conn, $previousData);

    $fetch = mysqli_fetch_assoc($query_previousData);

    if ($fetch) {
        echo "<script>alert('Your previous Data is display');</script>";
    } else {
        echo "<script>alert('Your previous Data is NOT display');</script>";
    }
}




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Sidebar cloth Menu</title>
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





    <!-- ADD COROUSEL PRODUCT CODE START -->

    <div class="container-fluid">

        <form class="container" id="registrationForm" method="POST" enctype="multipart/form-data">

            <div class="row" style="margin-top:200px; margin-left: 200px">




                <!-- # File Uploading 1 [pic & pdf] -->
                <h1>My edit page</h1>
                <div class="col-12">
                    <fieldset class="container">
                        <legend class="col-form-label pt-0">mans_img</legend>
                        <div class="row">
                            <div class="col-sm-10 form-control">
                                <label class="custom-file-label" for="fileInput">Choose File : JPG & PNG Format Only</label>
                                <div class="custom-file">
                                    <?php
                                    $previewImage = isset($fetch['man_img']) ? './Man_cloth_pics/' . $fetch['man_img'] : '';
                                    ?>

                                    <!-- Display the image preview -->
                                    <img id="previewImage" src="<?php echo $previewImage; ?>" width="100px" height="100px" style="<?php echo empty($fetch['man_img']) ? 'display: none;' : ''; ?>">

                                    <embed id="previewPDF" src="#" width="100%" height="300px" style="display: none;">

                                    <!-- File input -->
                                    <input type="file" name="man_img" class="custom-file-input" id="fileInput" accept="image/jpeg, image/png, application/pdf" onchange="previewFile(event)">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>






                <!--  # file image & pdf show(display) javascript -->

                <script src='./man_edit_pic_display.js'></script>


                <div class="col-12 d-flex justify-content-center my-5">
                    <button type="submit" name="Submit" class="btn btn-primary mx-5">Submit</button>
                </div>




            </div>
        </form>
    </div>




    <!-- ADD PRODUCT CODE END -->




    <!-- Bootstrap     -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="../Sidebar_script.js"></script>
    <!-- <script src="./Sidebar_script.js"></script> -->
</body>

</html>