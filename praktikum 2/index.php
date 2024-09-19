<?php
   include "Orang.php"
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>HELLO PRAKTIKUM 2</h1> 
   <div>
    <?php 
        // proses instansiasi
        $mahasiswa = new Orang('Meri Andriani');

        // menggunakan setter dan getter
        $mahasiswa->setnama('Meri Andriani');
        $mahasiswa->settglLahir('2004-02-12');
        $mahasiswa->setalamat('Jambi');

        echo "<br>";
        echo "Data Mahasiwa". $mahasiswa->getnama() . "<br>";
        echo "Nama : " . $mahasiswa->getnama() . "<br>";
        echo "alamat : " . $mahasiswa->getalamat(). "<br>";


        // memanggil method
        $mahasiswa->ucapkansalam();
        

        echo"<Br>";

        $mahasiswa2 = new Orang('Neni andriana');

        // menggunakan setter dan getter
        $mahasiswa->setnama('Neni Andriana');
        $mahasiswa->settglLahir('2005-09-22');
        $mahasiswa->setalamat('Muaro Jambi');

        echo "<br>";
        echo "Data Mahasiwa". $mahasiswa->getnama() . "<br>";
        echo "Nama : " . $mahasiswa->getnama() . "<br>";
        echo "alamat : " . $mahasiswa->getalamat(). "<br>";

        $mahasiswa2->ucapkansalam();
    ?>
   </div>

</body>
</html>