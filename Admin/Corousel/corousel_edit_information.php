<?php

include "../connection.php";



if (isset($_GET['edit_id_corousel'])) {


    if (isset($_POST['Submit'])) {


        // # File...
        /////////////////////////////////////////////////////////////////////
        $target_path = "Sidebar_Corosel_img/";
        $file = $_FILES['File_corousel_pic_grial']['name'];
        $target = $target_path . basename($_FILES['File_corousel_pic_grial']['name']);
        $fileupload = strtolower(pathinfo($target, PATHINFO_EXTENSION));    // jg & pdf format



        // # File...carousal_img_computer
        /////////////////////////////////////////////////////////////////////
        $target_path1 = "Sidebar_Corosel_computer/";
        $file1 = $_FILES['carousal_img_computer']['name'];
        $target1 = $target_path1 . basename($_FILES['carousal_img_computer']['name']);
        $fileupload1 = strtolower(pathinfo($target, PATHINFO_EXTENSION));    // jg & pdf format



        // # Date & Time...
        //////////////////////////////////////////////////////////////////////
        date_default_timezone_set('Asia/Kolkata');
        $Date_Time = date('Y-m-d H:i:sa');



        // # file edit condition...
        //////////////////////////////////////////////////////////////////////

        if (empty($file) && empty($file1)) {
            $update = "UPDATE `carousal` SET `update_time_carousal`='$Date_Time' WHERE id = '" . $_GET['edit_id_corousel'] . "'";
            $update_query = mysqli_query($conn, $update);
            if ($update_query) {
                echo "<script>alert('Your Data is update'); window.location.href='select_corousel.php';</script>";
            } else {
                echo "<script>alert('Your Data is NOT update');</script>";
            }
        } else {
            $update = "UPDATE `carousal` SET `File_corousel_pic_grial`='$file',`carousal_img_computer`='$file1',`update_time_carousal`='$Date_Time' WHERE id = '" . $_GET['edit_id_corousel'] . "'";

            $update_query = mysqli_query($conn, $update);

            if ($update_query) {

                if ($_FILES['File_corousel_pic_grial']['size'] > 10 * 1024 * 1024  && $_FILES['carousal_img_computer']['size'] > 10 * 1024 * 1024) {   // 3mb
                    echo "<script>
                alert('File size is too large.');
                window.location.href='corousel_edit_information.php';
                </script>";
                }
                // else if (file_exists($target)) {
                //     echo "<script>
                //     alert('File already exists.');
                //     window.location.href='Add_Product.php';
                //     </script>";
                // }

                else if ($fileupload != "jpg" && $fileupload != "png" && $fileupload != "pdf" && $fileupload1 != "jpg" && $fileupload1 != "png" && $fileupload1 != "pdf") {
                    echo "<script>
                    alert('File must be in JPG, PNG, or PDF format.');
                    window.location.href='corousel_edit_information.php';
                    </script>";
                } else {
                    if (move_uploaded_file($_FILES['File_corousel_pic_grial']['tmp_name'], $target) && move_uploaded_file($_FILES['carousal_img_computer']['tmp_name'], $target1)) {
                        echo "<script>
                    alert('Your Data Inserted Successfully'); window.location.href='select_corousel.php';
                    </script>";
                    } else {
                        echo "<script>
                    alert('Error in uploading file.');
                    </script>";
                    }
                }
            } else {
                echo "<script>alert('Your Data is NOT insert')</script>";
            }
        }
    }










    // # Previous Data is display query....
    //////////////////////////////////////////////////////////////////////

    $previousData = "SELECT * FROM `carousal` WHERE  id = '" . $_GET['edit_id_corousel'] . "'";

    $previewImage = mysqli_query($conn, $previousData);

    $fetch = mysqli_fetch_assoc($previewImage);


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
    <title> Sidebar Carousel Menu</title>
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

            <div class="row" style="margin-top:200px; margin-left: 200px;">




                <!-- # File Uploading 1 [pic & pdf] -->
                <div class="col-12">
                    <fieldset class=" container">
                        <h1>Carousel edit page</h1>
                        <legend class="col-form-label  pt-0">Girl Img</legend>
                        <div class="row">

                            <div class="col-sm-10 form-control">
                                <label class="custom-file-label" for="fileInput">Choose File : [ Under 3mb ] JPG & PNG Format Only</label>

                                <div class="custom-file">

                                    <?php
                                    $previewImage = isset($fetch['File_corousel_pic_grial']) ? './Sidebar_Corosel_img/' . $fetch['File_corousel_pic_grial'] : '';
                                    ?>

                                    <img id="previewImage" src="<?php echo $previewImage ?>" width="100px" height="100px" style="display: none;">
                                    <embed id="previewPDF" src="#" width="100%" height="300px" style="display: none;">

                                    <input type="file" name="File_corousel_pic_grial" class="custom-file-input" id="fileInput" accept="image/jpeg, image/png, application/pdf" onchange="previewFile(event)">
                                    <button type="submit" name="Upload_file_btn" class="btn btn-info mt-2" id="uploadButton" required>Upload</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>


                <div class="col-12">
                    <fieldset class=" container">
                        <legend class="col-form-label  pt-0">computer Img</legend>
                        <div class="row">

                            <div class="col-sm-10 form-control">
                                <label class="custom-file-label" for="fileInput">Choose File : [ Under 3mb ] JPG & PNG Format Only</label>
                                <div class="custom-file">

                                    <?php
                                    $previewImage = isset($fetch['carousal_img_computer']) ? './Sidebar_Corosel_img/' . $fetch['carousal_img_computer'] : '';
                                    ?>

                                    <img id="previewImage" src="<?php echo $previewImage ?>" width="100px" height="100px" style="display: none;">
                                    <embed id="previewPDF" src="#" width="100%" height="300px" style="display: none;">

                                    <input type="file" name="carousal_img_computer" class="custom-file-input" id="fileInput" accept="image/jpeg, image/png, application/pdf" onchange="previewFile(event)">
                                    <!-- <button type="submit" name="Upload_file_btn" class="btn btn-info mt-2" id="uploadButton">Upload</button> -->
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>






                <!-- # file upload all condition ex [file under 3mb & only jpg&pdf file upload....] -->
                <!--  # file ke liye ye dono link requried hi hai... -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="./edit_file_upload_condition.js"></script>
                <!--************************************************************* -->


                <!-- # file image & pdf show ( display ) javascript -->
                <script src='./edit_img_display_condition.js'></script>
                <!--**************************************************************-->


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