<?php


require('koneksi.php');
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // Redirect to a different page or show an error message
    echo "<script> alert('Anda Tidak Dapat mengaksesn halaman ini.');
    window.Location.href ='index.php';</script>";
   
}

$fullname = addslashes ($_POST['fullname']);
$email = addslashes ($_POST['email']);
$password = addslashes($_POST['password']);
$HP = $_POST['no_HP'];
$alamat = addslashes($_POST['alamat']);
$hobby = addslashes($_POST['hobby']);
$tanggallahir = addslashes($_POST['tanggallahir']);

$sql = "INSERT INTO `tb_user`(`nama_lengkap`, `email`, `password`, `no_HP`, `alamat`, `hobby`, `tanggal_lahir`) 
    VALUES ('$fullname','$email','$password','$HP','$alamat','$hobby','$tanggallahir' )";
    
    if ($conn->query($sql) === TRUE) {
       header("Location: register-v2.php?success=true");
       exit();
    }
    else {
        echo"Error: " . $sql . "<br>" .  $conn->error;
    }
    $conn->close();
?>