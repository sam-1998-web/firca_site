<?php

include "../connection.php";

$Delete = "DELETE FROM `computer_laptop_table` WHERE id='" . $_GET['delete_id'] . "'";

$query = mysqli_query($conn, $Delete);

if ($query) {
    echo "<script> alert('your data is deleted & id no is : $_GET[delete_id]'); window.location.href='computer_select.php';</script>";
    // header("location:select.php");
} else {
    echo "<script> alert('your data is NOT deleted $_GET[delete_id]');</script>";
}
