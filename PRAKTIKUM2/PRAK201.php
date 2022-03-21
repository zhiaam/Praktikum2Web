<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK201</title>
</head>
<body>
    <form action="" method="POST">
        Nama: 1 <input type="text" name="nama1"><br>
        Nama: 2 <input type="text" name="nama2"><br>
        Nama: 3 <input type="text" name="nama3"><br>
        <button type="submit" name="submit">Urutkan</button>
    </form> 

    <br>
    
    <?php 
        error_reporting(0);
        $nama1 = $_POST["nama1"];
        $nama2 = $_POST["nama2"];
        $nama3 = $_POST["nama3"];
        $namas = array($nama1, $nama2, $nama3);
        //sort($namas);
        if(($nama1 < $nama2) && ($nama1 < $nama3)){
            $namas[0]=$nama1;
            if($nama2 < $nama3){
                $namas[1]=$nama2;
                $namas[2]=$nama3;
            } else {
                $namas[1]=$nama3;
                $namas[2]=$nama2;
            }
        } else if(($nama2 < $nama1) && ($nama2 < $nama3)){
            $namas[0]=$nama2;
            if($nama1 < $nama3){
                $namas[1]=$nama1;
                $namas[2]=$nama3;
            } else {
                $namas[1]=$nama3;
                $namas[2]=$nama1;
            }
        } else if(($nama3 < $nama2) && ($nama3 < $nama1)){
            $namas[0]=$nama3;
            if($nama2 < $nama1){
                $namas[1]=$nama2;
                $namas[2]=$nama1;
            } else {
                $namas[1]=$nama1;
                $namas[2]=$nama2;
            }
        }

        foreach ($namas as $val) {
            echo "$val<br>";
        }
    ?>
</body>
</html>