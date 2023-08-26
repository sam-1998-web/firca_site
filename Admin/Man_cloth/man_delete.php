
<?php

include "../connection.php";


$Delete = "DELETE FROM `man_cloths` WHERE id = '" . $_GET['delete_id_man'] . "'";

$query = mysqli_query($conn, $Delete);

if ($query) {
    echo "<script> alert('your data is deleted & id no is : $_GET[delete_id_man]'); window.location.href='man_select.php';</script>";
} else {
    echo "<script> alert('your data is NOT deleted $_GET[delete_id_man]');</script>";
}



?>