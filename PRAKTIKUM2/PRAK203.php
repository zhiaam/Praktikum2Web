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
        Dari: <br>
        <input type="radio" name="dari" value="celcius" checked>Celcius<br>
        <input type="radio" name="dari" value="fahrenheit">fahrenheit<br>
        <input type="radio" name="dari" value="reamur">Rheamur<br>
        <input type="radio" name="dari" value="kelvin">Kelvin<br>
        
        Ke:<br>
        <input type="radio" name="ke" value="celcius" checked>Celcius<br>
        <input type="radio" name="ke" value="fahrenheit">fahrenheit<br>
        <input type="radio" name="ke" value="reamur">Rheamur<br>
        <input type="radio" name="ke" value="kelvin">Kelvin<br>
        <button type="submit" name="submit">Konversi</button>
    </form>
    
    <?php
        error_reporting(0);

        $nilai=$_POST["nilai"];
        $dari=$_POST["dari"];
        $ke=$_POST["ke"];
        
        if($dari=="celcius"){

                if($ke=="celcius"){
                    $hasil=$nilai;
                    echo "<h1>Hasil konversi: $hasil &deg;C</h1>";
                }else if($ke=="fahrenheit"){
                    $hasil=$nilai*1.8+32;
                    echo "<h1>Hasil konversi: $hasil &deg;F</h1>";
                }else if($ke=="reamur"){
                    $hasil=$nilai*0.8;
                    echo "<h1>Hasil konversi: $hasil &deg;R</h1>";
                }else if($ke=="kelvin"){
                    $hasil=$nilai+273;
                    echo "<h1>Hasil konversi: $hasil &deg;K</h1>";
                }

        } else if($dari=="fahrenheit"){

            if($ke=="celcius"){
                $hasil=($nilai-32)*0.55;
                echo "<h1>Hasil konversi: $hasil &deg;C</h1>";
            }else if($ke=="fahrenheit"){
                $hasil=$nilai;
                echo "<h1>Hasil konversi: $hasil &deg;F</h1>";
            }else if($ke=="reamur"){
                $hasil=($nilai-32)*0.44;
                echo "<h1>Hasil konversi: $hasil &deg;R</h1>";
            }else if($ke=="kelvin"){
                $hasil=($nilai-32)*0.55+273;
                echo "<h1>Hasil konversi: $hasil &deg;K</h1>";
            }

        } else if($dari=="reamur"){

            if($ke=="celcius"){
                $hasil=$nilai*1.25;
                echo "<h1>Hasil konversi: $hasil &deg;C</h1>";
            }else if($ke=="fahrenheit"){
                $hasil=$nilai*2.25+32;
                echo "<h1>Hasil konversi: $hasil &deg;F</h1>";
            }else if($ke=="reamur"){
                $hasil=$nilai;
                echo "<h1>Hasil konversi: $hasil &deg;R</h1>";
            }else if($ke=="kelvin"){
                $hasil=1.25*$nilai+273;
                echo "<h1>Hasil konversi: $hasil &deg;K</h1>";
            }

        } else if($dari=="kelvin"){

            if($ke=="celcius"){
                $hasil=$nilai-273;
                echo "<h1>Hasil konversi: $hasil &deg;C</h1>";
            }else if($ke=="fahrenheit"){
                $hasil=($nilai-273)*1.8+32;
                echo "<h1>Hasil konversi: $hasil &deg;F</h1>";
            }else if($ke=="reamur"){
                $hasil=($nilai-273)*0.8;
                echo "<h1>Hasil konversi: $hasil &deg;R</h1>";
            }else if($ke=="kelvin"){
                $hasil=$nilai;
                echo "<h1>Hasil konversi: $hasil &deg;K</h1>";
            }

        }
    
    ?>
</body>
</html>