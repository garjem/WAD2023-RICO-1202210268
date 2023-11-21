<?php 

// (1) Hapus cookie dengan key id 
setcookie("id", "", time() - 3600, "/PRAKTIKUM%20WAD/WAD2023-RICO-1202210268/MODUL%204%20RICO/views");
// 

// (2) Mulai session
session_start();
//

// (3) Hapus semua session yang berlangsung
session_destroy();
//

// (4) Lakukan redirect ke halaman login awal
header('Location: ../views/login.php');
//

exit;

?>


