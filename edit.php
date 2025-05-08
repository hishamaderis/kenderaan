<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Kemas Kini Kenderaan</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
        <h1>Kemas kini kenderaan</h1>
        <div>
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    </header>
    
    <form action="process.php" method="post">
        <?php

        if (isset($_GET['id'])){
            include("connect.php");
            $id = $_GET['id'];
            $sql = "SELECT * FROM kenderaan WHERE id=$id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            ?>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="jeniskenderaan" placeholder="Jenis Kenderaan" value="<?php echo $row["jeniskenderaan"]; ?>">
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="pemandu" placeholder="Nama Pemandu" value="<?php echo $row["pemandu"]; ?>">
            </div>

            <div class="form-element my-4">
                <select name="noplatkenderaan" id="" class="form-control">
                    <option value="">Pilih Plat Kenderaan:</option>
                    <option value="WVS 6424" <?php if($row ["noplatkenderaan"]=="WVS 6424"){echo "selected";}?>>WVS 6424</option>
                    <option value="VWG 9961" <?php if($row ["noplatkenderaan"]=="VWG 9961"){echo "selected";}?>>VWG 9961</option>
                    <option value="VQT 2323" <?php if($row ["noplatkenderaan"]=="VQT2323"){echo "selected";}?>>VQT 2323</option>
                    <option value="VQR 5652" <?php if($row ["noplatkenderaan"]=="VQR 5652"){echo "selected";}?>>VQR 5652</option>

                </select>
            </div>

            <div class="form-elemnt my-4">
                <textarea name="catatan" id="" class="form-control" placeholder="Tujuan Menggunakan Kenderaan:"><?php echo $row["catatan"]; ?></textarea>
                    </div>

                    <input type="hidden" value="<?php echo $id; ?>"name="id">
                    <div class="form-elemnt my-4">
                        <input type="submit" name="edit" value="Update" class="btn btn-primary">
                    </div>
                    <?php
            }
            
            else{
                echo "<h3>Kenderaan tidak wujud<h3>";
            }
            ?>
        </form>  
</body>
</html>