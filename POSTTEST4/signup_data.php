<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Form</title>
</head>
<style>
    body {
        background-color : #CF9E2C;
    }
    table {
        background-color : white;
    }
</style>
<body>
    <table border=1px, cellspacing=2, cellpadding=10>
        <tr>
            <th>NAMA LENGKAP</th>
            <th>TEMPAT TANGGAL LAHIR</th>
            <th>ALAMAT</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
            <th>NO. HANDPHONE</th>
            <th>EMAIL</th>
        </tr>
        <tr>
            <td><?php echo $_POST['nama'];?></td>
            <td><?php echo $_POST['tempat']; echo $_POST['ttl']?></td>
            <td><?php echo $_POST['alamat'];?></td>
            <td><?php echo $_POST['jk'];?></td>
            <td><?php echo $_POST['alamat'];?></td>
            <td><?php echo $_POST['nope'];?></td>
            <td><?php echo $_POST['email'];?></td>
        </tr>
    </table>
</body>
</html>