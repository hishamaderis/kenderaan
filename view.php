<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Terperinci mengenai kenderaan</title>

    <style>
        .book-details {
            background-color: #f5f5f5;
            border-radius: 8px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
        }

        #button {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Keterangan</h1>
            <a href="index.php" class="btn btn-primary" id="button">Back</a>
        </header>
        <div class="book-details p-5 my-4">
            <?php
            include("connect.php");
            $id = $_GET['id'];
            if ($id) {
                $sql = "SELECT * FROM kenderaan WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                <h3>Jenis Kenderaan:</h3>
                <p><?php echo $row["jeniskenderaan"]; ?></p>

                <h3>Nama Pemandu:</h3>
                <p><?php echo $row["pemandu"]; ?></p>

                <h3>No Plat Kenderaan:</h3>
                <p><?php echo $row["noplatkenderaan"]; ?></p>

                <h3>Tujuan Menggunakan Kenderaan:</h3>
                <p><?php echo $row["catatan"]; ?></p>

                <?php
                }
            } else {
                echo "<h3>Tiada kenderaan dijumpai.</h3>";
            }
            ?>
        </div>
    </div>
</body>
</html>
