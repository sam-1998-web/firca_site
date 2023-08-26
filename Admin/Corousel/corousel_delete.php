<?php

include "../connection.php";




$Delete = "DELETE FROM `carousal` WHERE id='" . $_GET['delete_id_corousel'] . "'";

$query = mysqli_query($conn, $Delete);

if ($query) {
    echo "<script> alert('your data is deleted & id no is : $_GET[delete_id_corousel]'); window.location.href='select_corousel.php';</script>";
    // header("location:select.php");
} else {
    echo "<script> alert('your data is NOT deleted $_GET[delete_id_corousel]');</script>";
}
