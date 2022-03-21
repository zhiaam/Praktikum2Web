<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202</title>
    <style>
        .kosong{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        $namak = $nimk = $jenkelk = "";
        $nama = $nim = $jenkel = "";

        error_reporting(0);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $namak = "nama tidak boleh kosong";
            } else {
                $nama = $_POST["nama"];
            }
            
            if (empty($_POST["nim"])) {
                $nimk = "nim tidak boleh kosong";
            } else {
                $nim = $_POST["nim"];
            }

            if (empty($_POST["jenkel"])) {
                $jenkelk = "jenis kelamin tidak boleh kosong";
            } else {
                $jenkel = $_POST["jenkel"];
            }
        }
    ?>

<form action="" method="POST">
        Nama: <input type="text" name="nama">
        <span class="kosong">* <?php echo $namak;?></span><br>
        Nim: <input type="text" name="nim">
        <span class="kosong">* <?php echo $nimk;?></span><br>
        Jenis Kelamin:
        <span class="kosong">* <?php echo $jenkelk;?></span><br>
        <input type="radio" name="jenkel" value="Laki-Laki">Laki-Laki<br>
        <input type="radio" name="jenkel" value="Perempuan">Perempuan<br>
        <input type="radio" name="jenkel" value="HELIKOPTER HELIKOPTER">Helikopter<br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
        echo "<h2> Output:</h2><br>";
        echo "$nama <br>";
        echo "$nim <br>";
        echo $jenkel;
    ?>
</body>
</html>