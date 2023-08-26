<?php

include "../connection.php";


if (isset($_POST['Submit'])) {

    $Device_Name = $_POST['Device_Name'];
    $Device_Brand_Name = $_POST['Device_Brand_Name'];
    $Price = $_POST['Price'];
    $Discount = $_POST['Discount'];


    // # File...
   
    $target_path = "admin_images/";
    $file = $_FILES['File']['name'];
    $target = $target_path . basename($_FILES['File']['name']);
    $fileupload = strtolower(pathinfo($target, PATHINFO_EXTENSION));    // jg & pdf format



    // # Date & Time...
    
    date_default_timezone_set('Asia/Kolkata');
    $Date_Time = date('Y-m-d H:i:sa');




    $insert = "INSERT INTO `wcommerce_website_table`( `Device_Name`, `Device_Brand_Name`, `Price`, `Discount`, `File`, `login_time`) VALUES ('$Device_Name','$Device_Brand_Name','$Price','$Discount', '$file', '$Date_Time')";


    $query = mysqli_query($conn, $insert);




    if ($query) {

        if ($_FILES['File']['size'] > 10 * 1024 * 1024) {   // 3mb
            echo "<script>
            alert('File size is too large.');
            window.location.href='mobile.php';
            </script>";
        }
        // else if (file_exists($target)) {
        //     echo "<script>
        //     alert('File already exists.');
        //     window.location.href='Add_Product.php';
        //     </script>";
        // }
        else if (!in_array($fileupload, ['jpg', 'png'])) { // Check if the file extension is not JPG or PNG
            echo "<script>
                alert('File must be in JPG or PNG format.');
                window.location.href='mobile.php';
                </script>";
        } else {
            if (move_uploaded_file($_FILES['File']['tmp_name'], $target)) {
                echo "<script>
                alert('Your Data Inserted Successfully');
                 window.location.href='mobile_select.php';
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
