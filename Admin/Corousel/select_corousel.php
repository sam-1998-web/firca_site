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
        <a href="./Sidebar_Corousel_Product.php" class="select_anchore_style">ADD DATA</a>

        <table border="5" cellspacing="5">
            <tr>
                <th>Sr. ID</th>

                <th>UPLOAD Mobile[ IMG / File ]</th>
                <th>UPLOAD Mobile[ IMG / File 2]</th>
                <th>UPLOAD [Time/Date]</th>
                <th>update [Time/Date]</th>
                <th>EDIT INFORMATION</th>



            </tr>

            <?php

            $select = "SELECT * FROM `carousal` ORDER BY `id` DESC";

            $query = mysqli_query($conn, $select);

            // $fetch = mysqli_fetch_assoc($query);   // ERROR yhape mat likhna 

            while ($fetch = mysqli_fetch_assoc($query)) {  // yaha hi likhna direct


            ?>
                <tr>
                    <td><?php echo $fetch['id'] ?></td>



                    <!-- ...........img & pdf................. -->
                    <td>
                        <!-- yaha space mat dena ( /image_uploaded/_< )  -->
                        <img src="Sidebar_Corosel_img/<?php echo $fetch['File_corousel_pic_grial']; ?>" width="100px" height="100px" alt=" YOUR COROUSEL PIC "><br>
                        <input name="File_corousel_pic_grial" id="fileInput" accept=" application/pdf" value="<?php echo $fetch['File_corousel_pic_grial']; ?>">
                    </td>

                    <td>
                        <!-- yaha space mat dena ( /image_uploaded/_< )  -->
                        <img src="Sidebar_Corosel_computer/<?php echo $fetch['carousal_img_computer']; ?>" width="100px" height="100px" alt=" YOUR COROUSEL PIC "><br>
                        <input name="carousal_img_computer" id="fileInput" accept=" application/pdf" value="<?php echo $fetch['carousal_img_computer']; ?>">
                    </td>




                    <!-- LOGIN TIME  -->
                    <td><?php echo $fetch['login_time_carousal'] ?></td>

                    <!--UPDATE TIME  -->
                    <td><?php echo $fetch['update_time_carousal'] ?></td>


                    <!-- EDIT INFORMATION  -->
                    <td> <a href="./corousel_edit_information.php?edit_id_corousel=<?php echo $fetch['id'] ?>">Edit</a> /
                        <a href="./corousel_delete.php?delete_id_corousel=<?php echo $fetch['id'] ?>">Delete</a>
                    </td>




                </tr>

            <?php
            }
            ?>

        </table>
    </div>







</body>

</html>