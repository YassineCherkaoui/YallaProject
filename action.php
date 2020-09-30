<?php
include 'config.php';

if(isset($_POST['add'])){
    $First = $_POST['First'];
    $caty = $_POST['caty'];
    $Gname = $_POST['Gname'];
    $disc = $_POST['disc'];


    $query= "INSERT INTO yalla-groupe (First,caty,Gname,disc)VALUES(?,?,?,?)";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("ssss", $First, $caty, $Gname, $disc);
    $stmt->execute();
}
?>