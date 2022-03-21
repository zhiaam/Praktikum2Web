<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK203</title>
</head>
<body>
    <form action="" method="POST">
        Nilai <input type="text" name="nilai"><br>
        <button type="submit" name="submit">Konversi</button>
    </form>
    
    <?php
        error_reporting(0);

        $nilai=$_POST["nilai"];
        
        if($nilai >= 1000){
            echo "<h1>Hasil: Anda Menginput Melebihi Limit Bilangan</h1>";
        } else if($nilai > 99){
            echo "<h1>Hasil: Ratusan</h1>";
        } else if(($nilai > 20) || ($nilai == 10)){
            echo "<h1>Hasil: Puluhan</h1>";
        } else if($nilai > 10){
            echo "<h1>Hasil: Belasan</h1>";
        } else if($nilai > 0){
            echo "<h1>Hasil: Satuan</h1>";
        } else if($nilai == 0){
            echo "<h1>Hasil: Nol</h1>";
        } else{
            echo "<h1>Hasil: Anda Menginput Melebihi Limit Bilangan</h1>";
        }
    
    ?>
</body>
</html>