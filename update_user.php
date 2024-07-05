<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = addslashes ($_POST['email']);
    $nama_lengkap = addslashes($_POST['nama_lengkap']);
    $password = addslashes($_POST['password']);
    $no_HP = addslashes($_POST['no_HP']);
    $alamat = addslashes($_POST['alamat']);
    $hobby = addslashes($_POST['hobby']);
    $tanggal_lahir = addslashes($_POST['tanggal_lahir']);

    $query = "UPDATE tb_user SET 
                nama_lengkap='$nama_lengkap', 
                password='$password', 
                no_HP='$no_HP', 
                alamat='$alamat', 
                hobby='$hobby', 
                tanggal_lahir='$tanggal_lahir' 
              WHERE email='$email'";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Data Berhasil Diubah');
                window.location.href='profil.php';
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
