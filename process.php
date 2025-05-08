<?php
include('connect.php');
if (isset($_POST["create"])) {
    $jeniskenderaan = mysqli_real_escape_string($conn, $_POST["jeniskenderaan"]);
    $pemandu = mysqli_real_escape_string($conn, $_POST["pemandu"]);
    $noplatkenderaan = mysqli_real_escape_string($conn, $_POST["noplatkenderaan"]);
    $catatan = mysqli_real_escape_string($conn, $_POST["catatan"]);
    $sqlInsert = "INSERT INTO kenderaan ( pemandu, jeniskenderaan,noplatkenderaan, catatan) VALUES ('$pemandu', '$jeniskenderaan','$noplatkenderaan', '$catatan')";
    if (mysqli_query($conn, $sqlInsert)) {
        session_start();
        $_SESSION["create"] = "Kenderaan berjaya ditambah!";
        header("Location:index.php");
    } else {
        die("Terdapat masalah.");
    }
}

if (isset($_POST["edit"])) {
    $jeniskenderaan = mysqli_real_escape_string($conn, $_POST["jeniskenderaan"]);
    $pemandu = mysqli_real_escape_string($conn, $_POST["pemandu"]);
    $noplatkenderaan = mysqli_real_escape_string($conn, $_POST["noplatkenderaan"]);
    $catatan = mysqli_real_escape_string($conn, $_POST["catatan"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE kenderaan SET jeniskenderaan = '$jeniskenderaan', pemandu = '$pemandu', noplatkenderaan = '$noplatkenderaan', catatan = '$catatan' WHERE id = '$id'";
    if (mysqli_query($conn, $sqlUpdate)) {
        session_start();
        $_SESSION["update"] = "Kenderaan berjaya dikemas kini!";
        header("Location:index.php");
    } else {
        die("Terdapat masalah.");
    }
}
?>