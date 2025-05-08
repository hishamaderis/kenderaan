<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Kenderaan Empayar Kolej</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
            margin: 0;
        }

        .actions {
            display: flex;
            gap: 10px; /* Adds some spacing between the buttons */
        }

        .actions a {
            text-decoration: none;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
        }

        .actions a.btn {
            background-color: #007bff;
        }

        .actions a.btn-danger {
            background-color: #dc3545;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #343a40;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .btn {
            text-decoration: none;
            padding: 5px 10px;
            color: #fff;
            border-radius: 3px;
            font-weight: bold;
            display: inline-block;
        }

        .btn-info {
            background-color: #28a745;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #000;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        /* Responsive table */
        @media (max-width: 768px) {
            table, th, td {
                font-size: 12px;
            }
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>

<?php
    session_start();
?>

<div class="container">
    <div class="header">
        <h1>Jenis Kenderaan Empayar Kolej</h1>
        <div class="actions">
            <?php if (isset($_SESSION['username'])): ?>
                <a href="create.php" class="btn">Add</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            <?php else: ?>
                <a href="login.php" class="btn">Login</a>
            <?php endif; ?>
        </div>
    </div>

    <?php
        if (isset($_SESSION["create"])) {
            echo '<div class="alert alert-success">' . $_SESSION["create"] . '</div>';
            unset($_SESSION["create"]);
        }

        if (isset($_SESSION["update"])) {
            echo '<div class="alert alert-success">' . $_SESSION["update"] . '</div>';
            unset($_SESSION["update"]);
        }

        if (isset($_SESSION["delete"])) {
            echo '<div class="alert alert-success">' . $_SESSION["delete"] . '</div>';
            unset($_SESSION["delete"]);
        }
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Kenderaan</th>
                <th>Nama Pemandu</th>
                <th>No Plat Kenderaan</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('connect.php');
            $sql = "SELECT * FROM kenderaan";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->execute();
                $result = $stmt->get_result();

                while ($data = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$data['id']}</td>
                            <td>{$data['jeniskenderaan']}</td>
                            <td>{$data['pemandu']}</td>
                            <td>{$data['noplatkenderaan']}</td>
                            <td>
                                <a href='view.php?id={$data['id']}' class='btn btn-info'>More Information</a>
                                <a href='edit.php?id={$data['id']}' class='btn btn-warning'>Update</a>
                                <a href='delete.php?id={$data['id']}' class='btn btn-danger' onclick='return confirm(\"Adakah anda pasti mahu membuang kenderaan ini?\");'>Delete</a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Terdapat masalah mendapatkan senarai kenderaan.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
