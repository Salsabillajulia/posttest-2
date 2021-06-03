<?php
require "fungsi.php";


if (isset($_POST['submit'])) {
    if (tambah($_POST)){
        header('Location: index.php');
        exit;
    }    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH DATA</title>
</head>

<body>
    <div align="center">
        <h1>Tambah Data Mahasiswa</h1><br>
        
        <a href="index.php"><button>kembali</button></a><br><br>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NPM</td>
                    <td><input type="number" min="1" name="NPM"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>