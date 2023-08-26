<?php

include "../connection.php";


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
    $Date_Time1 = date('Y-m-d H:i:sa');



    $insert = "INSERT INTO `carousal`(`File_corousel_pic_grial`,`carousal_img_computer`, `login_time_carousal`) VALUES ('$file','$file1', '$Date_Time1')";


    $query = mysqli_query($conn, $insert);




    if ($query) {

        if ($_FILES['File_corousel_pic_grial']['size'] > 10 * 1024 * 1024  && $_FILES['carousal_img_computer']['size'] > 10 * 1024 * 1024) {   // 3mb
            echo "<script>
            alert('File size is too large, file select under 10 mb.');
            window.location.href='select_corousel.php';
            </script>";
        }
        
        else if ($fileupload != "jpg" && $fileupload != "pdf" && $fileupload != "png" && $fileupload1 != "jpg" && $fileupload1 != "pdf" && $fileupload1 != "png") {
            echo "<script>
            alert('File must be in JPG, PNG, or PDF format.');
            window.location.href='Add_Product.php';
            </script>";
          }
           else {
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
