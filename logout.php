<?php
session_start();
session_destroy();

     echo "<script> 
          alert('user berhasil Logout');
          document.location.href = 'home.php';
          </script>";