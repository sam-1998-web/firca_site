<?php

include "../connection.php";


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Data & Display in page</title>


</head>

<body style="background-color:#eef5fe">

    <div class="img_container_select">
        <!-- <img src="" alt="home pic" /> -->
    </div>
    <div class="my-5 table_div" align="center">
        <h1>PRODUCT INFORMATION </h1>
        <a href="./computer_laptop.php" class="select_anchore_style">ADD DATA</a>

        <table border="5" cellspacing="5">
            <tr>
                <th>Sr. ID</th>
                <th>Device Name</th>
                <th>Device Brand Name</th>
                <th>Price</th>
                <th>Discount</th>

                <th>UPLOAD Mobile[ IMG / File ]</th>

                <th>LOGIN [Date & Time]</th>
                <th>EDIT & UPDATE [Date & Time]</th>

                <th>ACTION [Edit & Delete]</th>


            </tr>

            <?php

            $select = "SELECT * FROM `computer_laptop_table` ORDER BY `id` DESC";

            $query = mysqli_query($conn, $select);

            // $fetch = mysqli_fetch_assoc($query);   // ERROR yhape mat likhna 

            while ($fetch = mysqli_fetch_assoc($query)) {  // yaha hi likhna direct


            ?>
                <tr>
                    <td><?php echo $fetch['id'] ?></td>
                    <td><?php echo $fetch['Device_Name'] ?></td>
                    <td><?php echo $fetch['Device_Brand_Name'] ?></td>
                    <td><?php echo ' ₹ ' . $fetch['Price'] ?></td>
                    <td><?php echo ' ₹ ' .  $fetch['Discount'] ?></td>



                    <!-- ...........img & pdf................. -->
                    <td>
                        <!-- yaha space mat dena ( /image_uploaded/_< )  -->
                        <img src="./Computer_Laptop_img/<?php echo $fetch['File']; ?>" width="100px" height="100px" alt=" YOUR MOBILE PIC "><br>
                        <input name="File" id="fileInput" accept=" application/pdf" value="<?php echo $fetch['File']; ?>">
                    </td>




                    <!-- TIME  -->
                    <td><?php echo $fetch['login_time'] ?></td>
                    <td><?php echo $fetch['update_time'] ?></td>


                    <!-- EDIT INFORMATION  -->
                    <td> <a href="./computer_laptop_edit.php ? edit_id=<?php echo $fetch['id'] ?>">Edit</a> / <a href="./computer_laptop_delete.php ? delete_id=<?php echo $fetch['id'] ?>">Delete</a> </td>




                </tr>

            <?php
            }
            ?>

        </table>
    </div>







</body>

</html>