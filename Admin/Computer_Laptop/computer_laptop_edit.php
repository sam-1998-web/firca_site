<?php

include "../connection.php";


date_default_timezone_set('Asia/Kolkata');
$time = date('H:i:sa');    // a ---> am / pm 


if (isset($_GET['edit_id'])) {

    if (isset($_POST['Submit'])) {

        $Device_Name = $_POST['Device_Name'];
        $Device_Brand_Name = $_POST['Device_Brand_Name'];
        $Price = $_POST['Price'];
        $Discount = $_POST['Discount'];


        // # File...
        /////////////////////////////////////////////////////////////////////
        $target_path = "./Computer_Laptop_img/";
        $file = $_FILES['File']['name'];
        $target = $target_path . basename($_FILES['File']['name']);
        $fileupload = strtolower(pathinfo($target, PATHINFO_EXTENSION));    // jg & pdf format


        // # Time...
        //////////////////////////////////////////////////////////////////
        date_default_timezone_set('Asia/Kolkata');
        $Date_Time = date('Y-m-d H:i:sa');  // a --->(am / pm) ke liye hai 





        if (empty($file)) {

            $update = "UPDATE `computer_laptop_table` SET `Device_Name`='$Device_Name',`Device_Brand_Name`='$Device_Brand_Name',`Price`='$Price',`Discount`='$Discount',`update_time`='$Date_Time' WHERE id = '" . $_GET['edit_id'] . "'";

            $update_query = mysqli_query($conn, $update);
            if ($update_query) {
                echo "<script>alert('Your Data is update');
                 window.location.href='computer_select.php';</script>";
            } else {

                echo "<script>alert('Your Data is NOT update');</script>";
            }
        } else {
            $update = "UPDATE `computer_laptop_table` SET `Device_Name`='$Device_Name',`Device_Brand_Name`='$Device_Brand_Name',`Price`='$Price',`Discount`='$Discount',`File`='$file',`update_time`='$Date_Time' WHERE id = '" . $_GET['edit_id'] . "'";

            $update_query = mysqli_query($conn, $update);

            if ($update_query) {

                if ($_FILES['File']['size'] > 10 * 1024 * 1024) { // 3MB in bytes
                    echo "
                    <script>
                    alert('File size is too large. Please choose a file under 10MB.');
                    return false;
                    </script>";
                }

                // else if (file_exists($target)) {
                //     echo "<script>
                //     alert('File already exists.');
                //     window.location.href='index.php';
                //     </script>";
                // }
                else if (!in_array($fileupload, ['jpg', 'png'])) {
                    echo "<script>
                    alert('File must be in JPG or png format.');
                    window.location.href='computer_laptop.php';
                    </script>";
                } else {
                    if (move_uploaded_file($_FILES['File']['tmp_name'], $target)) {
                        echo "<script>
                        alert('Your Data is Updated Successfully'); 
                        window.location.href='computer_select.php';
                        </script>";
                    } else {
                        echo "<script>
                        alert('Error in uploading file.');
                        return false;
                        </script>";
                    }
                }
            } else {

                echo "<script>
                alert('Your Data is NOT update');
                window.location.href='computer_laptop_edit.php';
                return false;
                </script>";
            }
        }
    }


    // # Previous Data is display query....
    //////////////////////////////////////////////////////////////////////

    $previousData = "SELECT * FROM `computer_laptop_table` WHERE  id = '" . $_GET['edit_id'] . "'";

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
    <title> Sidebar Mobile Menu</title>
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











    <!-- ADD Computer Laptop PRODUCT CODE START -->

    <div class="container-fluid " style="margin-left:250px">


        <form class=" my-5 g-3 container font-weight-bold " id="registrationForm" method="POST" enctype="multipart/form-data" style="margin: auto; width: 750px;">

            <!-- <h1 class="my-3" style="margin: auto; width: 750px; text-align: center; color:aqua">ADD PRODUCT</h1> -->

            <div class="row my-2">
                <div class="mb-3 mt-3">
                    <label for="text" class="form-label">Device Name:</label>
                    <input type="text" name="Device_Name" value="<?php echo $fetch['Device_Name'] ?>" class="form-control" id="text" placeholder="Enter Your Device Name">
                </div>
            </div>


            <div class="row my-2">
                <div class="mb-3 mt-3">
                    <label for="text" class="form-label">Device Brand Name:</label>
                    <input type="text" name="Device_Brand_Name" value="<?php echo $fetch['Device_Brand_Name'] ?>" class="form-control" id="text" placeholder="Enter Your Device Brand Name">
                </div>
            </div>



            <div class="row my-2">
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" name="Price" value="<?php echo $fetch['Price'] ?>" class="form-control" id="price" placeholder="Enter price">
                </div>
            </div>



            <div class="row my-2">
                <div class="mb-3">
                    <label for="discount" class="form-label">Discount:</label>
                    <input type="number" name="Discount" value="<?php echo $fetch['Discount'] ?>" class="form-control" id="discount" placeholder="Enter discount">
                </div>
            </div>






            <div class="row my-2">

                <!--# Uploading File...............-->

                <div class="col-md-12">
                    <fieldset class="container">
                        <h1>Computer & Laptop edit </h1>
                        <legend class="col-form-label pt-0">Upload File</legend>
                        <div class="row">
                            <div class="col-sm-10 form-control">
                                <label class="custom-file-label" for="fileInput">Choose File : [ Under 10mb ] JPG, PNG, JPEG, SVG & PDF Format Only</label>
                                <div class="custom-file">

                                    <?php
                                    $previewImage = isset($fetch['File']) ? './Computer_Laptop_img/' . $fetch['File'] : '';
                                    ?>

                                    <img id="previewImage" src="<?php echo $previewImage ?>" width="100px" height="100px">

                                    <input type="file" name="File" id="fileInput" accept=".png, .jpg, .pdf" value="<?php echo $previewImage ?>">



                                    <embed id="previewPDF" src="#" width="100%" height="300px" style="display: none;">
                                    <button type="submit" name="Upload_file_btn" class="btn btn-info mt-2" id="uploadButton" required>Upload</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>





            <!-- # file upload all condition ex [file under 3mb & only jpg&pdf file upload....] -->
            <!--  # file ke liye ye dono link requried hi hai... -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="./compuret_edit_file_upload_condition.js"></script>
            <!--************************************************************* -->


            <!-- # file image & pdf show ( display ) javascript -->
            <script src='./computer_edit_pic_display_code.js'></script>
            <!--**************************************************************-->








            <div class="col-12 d-flex justify-content-center my-5">
                <button type="submit" name="Submit" class="btn btn-primary mx-5">Submit</button>
            </div>
    </div>

    </form>

    </div>




    <!-- ADD Computer Laptop PRODUCT CODE END -->











    <!-- Bootstrap     -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="../Sidebar_script.js"></script>
    <!-- <script src="./Sidebar_script.js"></script> -->
</body>

</html>