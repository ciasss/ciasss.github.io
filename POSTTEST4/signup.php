<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <nav>
        <div class="container">
            <div class="logo"><a href="">CIASSY&Co.</a></div>
        </div>
    </nav>
    <div class="containerform">
        <div class="hform">
            <h1>Sign Up</h1>
        </div>
        <form class="form" action="signup_data.php" method="post">
                <p>Nama Lengkap : </p>
                <input type="text" name="nama">
                <p> Tempat Tanggal Lahir : </p>
                <input type="text" name="tempat"><input type="date" name="ttl">
                <p>Alamat : </p>
                <input type="text" name="alamat">
                <p>Jenis Kelamin : </p>
                <input type="radio" name="jk" value="perempuan">perempuan
                <input type="radio" name="jk" value="laki-laki">laki-laki
                <p>No. Handphone : </p>
                <input type="tel" name="nope">
                <p>Email :</p>
                <input type="email" name="email" placeholder="ex : xxx@gmail.com">

                <input class="submit" type="submit" name="submit" value="submit">
    </div>
</body>
</html>