<?php

function koneksi()
{
    return $connection = mysqli_connect('localhost','root','','login');
}

function registrasi($data)
{
   $connection = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($connection, $data['password1']);
    $password2 = mysqli_real_escape_string($connection, $data['password2']);

    // Jika Password tidak sama 
    if($password1 !== $password2){
        echo "<script>
             alert('password tidak sesuai');
             </script>";

             return false;
    }
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);

    $query = "INSERT INTO login
    VALUES 
    (null,'$username','$password_baru')
    ";
    
    mysqli_query($connection, $query) or die(mysqli_error($connection));
    return mysqli_affected_rows($connection);
}