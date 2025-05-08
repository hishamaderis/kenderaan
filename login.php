<?php
session_start();
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa dalam pangkalan data
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Gunakan password_verify untuk menyemak hash kata laluan
        if (password_verify($password, $user['password'])) {
            // Pengguna sah, set sesi
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            $error = "Nama pengguna atau kata laluan tidak sah";
        }
    } else {
        $error = "Nama pengguna atau kata laluan tidak sah";
    }
}
?>


<?php
if (isset($_GET['signup_success']) && $_GET['signup_success'] == 1) {
    echo '<div class="alert alert-success">Pendaftaran berjaya. Sila log masuk.</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Log Masuk</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h1 class="text-center">Log Masuk</h1>

                <?php if (isset($error)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form action="login.php" method="post">
                    <div class="form-group mb-3">
                        <label for="username">Nama Pengguna</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Kata Laluan</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">Log Masuk</button>
                    </div>
                </form>

                <!-- Tambahkan butang Sign Up -->
                <div class="d-grid">
                    <a href="signup.php" class="btn btn-secondary">Daftar Akaun Baru</a>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
