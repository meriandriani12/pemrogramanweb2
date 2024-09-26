<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1> Konsep Pewarisan</h1>
  <div class="" style="font-size: 45px;">
    <?php
        require_once "OrangBiasa.php";
        require_once "OrangInggris.php";
        require_once "Mahasiswa.php";

        $james = new OrangBiasa('James');
        $james->ucapSalam();
        echo"<br>";

        $parto = new OrangInggris("parto");
        $parto->ucapSalam(); //override
        echo"<br>";

        $emely = new Mahasiswa("emely");
        $emely->ucapSalam(); 
        echo"<br>";
        $emely->setNim("701230062");
        $emely->setProdi("Sistem Informasi");

        $nilaiemely = new Nilai();
        $nilaiemely->setTugas(90);
        $nilaiemely->setUts(76);
        $nilaiemely->setUas(78);

        $emely->setNilai($nilaiemely);
        $emely->tampilkanData();
    ?>
  </div>  
</body>
</html>