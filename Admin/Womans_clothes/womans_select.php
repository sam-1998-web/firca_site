<?php

include "../connection.php";
include "./womans_insert.php";

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>woman cloth page</title>


</head>

<body style="background-color:#eef5fe">

    <div class="img_container_select">
    </div>
    <div class="my-5 table_div" align="center">
        <h1>PRODUCT INFORMATION </h1>
        <a href="./womans_cloth.php" class="select_anchore_style">ADD DATA</a>

        <table border="5" cellspacing="5">
            <tr>
                <th>Sr. ID</th>

                <th>UPLOAD Mobile[ IMG / File ]</th>
                <th>UPLOAD [Time/Date]</th>
                <th>UPDATE [Time/Date]</th>
                <th>EDIT INFORMATION</th>



            </tr>

            <?php

            $select = "SELECT * FROM `womans_clothes` ORDER BY `id` DESC";

            $query = mysqli_query($conn, $select);

            // $fetch = mysqli_fetch_assoc($query);   // ERROR yhape mat likhna 

            while ($fetch = mysqli_fetch_assoc($query)) {  // yaha hi likhna direct


            ?>
                <tr>
                    <td><?php echo $fetch['id'] ?></td>



                    <!-- ...........img & pdf................. -->
                    <td>
                        <!-- yaha space mat dena ( /image_uploaded/_< )  -->
                        <img src="./womans_cloth_img/<?php echo $fetch['womans_img']; ?>" width="100px" height="100px" alt=" YOUR cloth PIC ">
                        <input name="womans_img" id="fileInput" accept=" application/pdf" value="<?php echo $fetch['womans_img'];
                                                                                                        ?>">

                    </td>






                    <!-- LOGIN TIME  -->
                    <td><?php echo $fetch['Login_time'] ?></td>

                    <!--UPDATE TIME  -->
                    <td><?php echo $fetch['Update_Time'] ?></td>


                    <!-- EDIT INFORMATION  -->
                    <td> <a href="./womans_edit_information.php?edit_id_woman=<?php echo $fetch['id'] ?>">Edit</a> /
                        <a href="./womans_delete.php?delete_id_woman=<?php echo $fetch['id'] 
                                                                            ?>">Delete</a>
                    </td>




                </tr>

            <?php
            }
            ?>

        </table>
    </div>







</body>

</html>