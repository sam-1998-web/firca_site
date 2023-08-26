<?php

include "../connection.php";


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



    // # Date & Time...
    //////////////////////////////////////////////////////////////////////
    date_default_timezone_set('Asia/Kolkata');
    $Date_Time = date('Y-m-d H:i:sa');




    
    $insert = "INSERT INTO `computer_laptop_table`(`Device_Name`, `Device_Brand_Name`, `Price`, `Discount`, `File`,`login_time`) VALUES ('$Device_Name','$Device_Brand_Name','$Price','$Discount','$file','$Date_Time')";


    
    $query = mysqli_query($conn, $insert);




    if ($query) {

        if ($_FILES['File']['size'] > 10 * 1024 * 1024) {   // 10mb
            echo "<script>
            alert('File size is too large.');
            window.location.href='computer_laptop.php';
            </script>";
        }
        // else if (file_exists($target)) {
        //     echo "<script>
        //     alert('File already exists.');
        //     window.location.href='Add_Product.php';
        //     </script>";
        // }


        // else if ($fileupload != "jpg" && $fileupload != "pdf") {
        else if (!in_array($fileupload, ['jpg', 'png'])) {
            echo "<script>
            alert('File must be in JPG or png format.');
            window.location.href='computer_laptop.php';
            </script>";
        } else {
            if (move_uploaded_file($_FILES['File']['tmp_name'], $target)) {
                echo "<script>
                alert('Your Data Inserted Successfully'); 
                window.location.href='computer_select.php';
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


?>