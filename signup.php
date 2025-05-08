<?php
session_start();
include('connect.php'); // Include database connection

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $kelas = $_POST['kelas'];
    $no_ndp = $_POST['no_ndp'];

    // Validate fields
    if (empty($username) || empty($password) || empty($kelas) || empty($no_ndp)) {
        $error = "Semua medan wajib diisi.";
    } else {
        // Hash the password using password_hash()
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $sql = "INSERT INTO users (username, password, kelas, no_ndp) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $username, $hashed_password, $kelas, $no_ndp);

        if ($stmt->execute()) {
            // Redirect to login page with success message
            header("Location: login.php?signup_success=1");
            exit();
        } else {
            $error = "Pendaftaran gagal. Sila cuba lagi.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Sign Up</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h1 class="text-center">Daftar Akaun Baru</h1>

                <?php if (!empty($error)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form action="signup.php" method="post">
                    <div class="form-group mb-3">
                        <label for="username">Nama Pengguna</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Kata Laluan</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="kelas">Kelas</label>
                        <select name="kelas" class="form-select" id="kelas" required>
                            <option value="TKR">TKR</option>
                            <option value="CADD">CADD</option>
                            <option value="TPM">TPM</option>
                            <option value="TPP">TPP</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="no_ndp">No NDP</label>
                        <input type="text" name="no_ndp" class="form-control" id="no_ndp" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <a href="login.php" class="btn btn-secondary w-100">Kembali ke Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
                    