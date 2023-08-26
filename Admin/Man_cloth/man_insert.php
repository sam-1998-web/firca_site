
<?php
include "../connection.php";

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


    $insert = "INSERT INTO `man_cloths` (`man_img`, `Login_time`) VALUES ('$file','$Date_Time')";

    $query = mysqli_query($conn, $insert);

    if ($query) {
        if ($_FILES['man_img']['size'] > 10 * 1024 * 1024) { // 10MB (MegaBytes) file size limit
            echo "<script>
                alert('File size is too large.');
                window.location.href='man_cloth.php';
                </script>";
        } else if (!in_array($fileupload, ['jpg', 'png'])) { // Check if the file extension is not JPG or PNG
            echo "<script>
                alert('File must be in JPG or PNG format.');
                window.location.href='man_cloth.php';
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
