<?php 
if (isset($_GET['id'])) {
include("connect.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM kenderaan WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Rekod kenderaan berjaya dibuang!";
    header("Location:index.php");
}else{
    die("Terdapat masalah!");
}
}else{
    echo "kenderaan tidak wujud";
}
?>


