<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../dist/css/style2.css">
</head>

<body>
    <div class="container">
        <div class="myform">
            <form method="post">
                <h2>ADMIN LOGIN</h2>
                <input id="username" type="text" placeholder="Admin Name" name="username">
                <input id="password" type="password" placeholder="Password" name="password">
                <button type="submit" name="login">LOGIN</button>
            </form>
        </div>
        <div class="image">
            <img src="../assets/img/mengodd1.jpeg" width="300" height="300">
        </div>
    </div>
</body>

<?php
if (isset($_POST['login'])) {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    // Simpan username dan password yang diinginkan
    $adminUsername = "mimin";
    $adminPassword = "meng12345";

    if ($enteredUsername === $adminUsername && $enteredPassword === $adminPassword) {
        echo "<script>alert('Login berhasil!'); document.location='pages-profile.php';</script>";
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>

</html>