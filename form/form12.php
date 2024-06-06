<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
          background-color: blanchedalmond;
        }
    </style>
</head>
<body>

<center>
    <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $_POST["nama"]?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?php  echo $_POST["tptl"]?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?php  echo $_POST["tgll"]?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php  echo $_POST["alamat"]?></td>
            </td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:</td>
                <td><?php  echo $_POST["kota"]?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php  echo $_POST["jk"]?></td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td>:</td>
                <td><?php  echo $_POST["hobi"]?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="save" value="Simpan">
                    <input type="reset" name="cancel" value="Hapus">
                </td>
            </tr>
        </table>
    </center>
</body>
</html>