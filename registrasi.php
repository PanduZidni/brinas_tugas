<?php

require_once __DIR__ . '/koneksi.php';

if(isset($_POST['registrasi'])) {
   if(registrasi($_POST) > 0 ){
        echo "<script> 
             alert('user berhasil ditambahkan silahkan login');
             document.location.href = 'login.php';
             </script>";
   }else{
        echo "Gagal Registrasi";
   }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>
    <h2>Silahkan Registrasi</h2>
    <form action="" method="post">
        <ul>
            <li>
                <label>
                    Username :
                    <input type="text" name="username" style="display: block;">
                </label>
            </li>
            <li>
                <label>
                    Password :
                    <input type="text" name="password1" style="display: block;">
                </label>
            </li>
            <li>
                <label>Konfirmasi Password :
                    <input type="text" name="password2" style="display: block;">
                </label>
            </li>
            <li>
                <button type="submit" name="registrasi">Register</button>
            </li>
        </ul>
    </form>
</body>
</html>