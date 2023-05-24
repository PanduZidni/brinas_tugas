<?php
session_start();

require_once __DIR__ . '/koneksi.php';

echo "Note : Jika Belum Memiliki akun silahkan Registrasi Terlebih Dahulu" . PHP_EOL;
if(isset($_POST['login'])) {
    // 
    $connection = koneksi();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($connection, "SELECT * FROM login WHERE username = '$username'");

    if( mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])) {
            //set session
            $_SESSION['login'] = true;
            header('Location: home.html');
            exit();
        }

        header('Location: home.html');
            exit();
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <p class="tulisan_login">Silahkan login</p>
    <?php if(isset($error)) : ?>
       <h3 style="color: red;">Username / Password Salah </h3>
        <?php endif ?>
        <div class="kotak_login">
	<p class="tulisan_login"></p>
		<form method="POST" action="">	
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username">
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password">
			<input type="submit" name="login" class="tombol_login" value="LOGIN">
		</form>
        <li>
            <a href="registrasi.php">Registrasi</a>
        </li>
    </ul>
    </form>
</body>
</html>