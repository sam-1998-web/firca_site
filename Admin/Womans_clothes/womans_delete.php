
<?php

include "../connection.php";


$Delete = "DELETE FROM `womans_clothes` WHERE id = '" . $_GET['delete_id_woman'] . "'";

$query = mysqli_query($conn, $Delete);

if ($query) {
    echo "<script> alert('your data is deleted & id no is : $_GET[delete_id_woman]'); window.location.href='womans_select.php';</script>";
} else {
    echo "<script> alert('your data is NOT deleted $_GET[delete_id_woman]');</script>";
}



?>