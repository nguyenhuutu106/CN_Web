<?php
    require_once 'connect.php';
    $tourId = $_GET['tourId'];
    $query = "update dattour set TrangThai_DatTour ='Thành công' where ID_DatTour = '$tourId'";
    $tourQuery = mysqli_query($conn, $query);
    header("Location: manage.php?message=success");
    ?>