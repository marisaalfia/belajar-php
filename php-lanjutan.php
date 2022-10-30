<?php

// $nama = "Rezta";

// echo $nama;
// echo "<br/>";
// echo $nama;
// echo "<br/>";
// echo $nama;
// echo "<br/>";

/*PERULANGAN*/ 
// $no = 50;
// $i = 0;

// for($i=0; $i<$no; $i++){
//     $n = $i + 1;
//     echo $n." ".$nama."<br/>";
// }

// while ($i < $no){
//     $n = $i + 1;
//     echo $n." ".$nama."<br/>";
//     $i++;
// }

// $no = 10;
// $i = 0;

// do {
//     $n = $i + 1;
//     echo $n." ".$nama."<br/>";
//     $i++;

// } while ($i < $no)

// $data = array('Avanza', 'Xenia', 'Lamborghini', 'Tesla', 'XPander', 'Rubicon');

//   

// echo $data[5];

// foreach($data as $value) {
//     echo $value."<br/>";
// }

/*PERCABANGAN*/

// if ($nama == "Marisa") {
//     echo $nama." adalah orang Banyuwangi";
// }else if($nama =="Rezta") {
//     echo $nama." berasal dari Solo";
// }else {
//     echo $nama." bukan berasal dari Solo";
// }

// switch($nama) {
//     case "Marisa";
//         $pesan = $nama." adalah orang Banyuwangi";
//     break;
//     case "Rezta";
//         $pesan = $nama." berasal dari Solo";
//     break;
//     default;
//         $pesan = $nama." bukan berasal dari Solo";
// }

// echo $pesan;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty ($_POST['submit'])) {

            switch($_POST['nama']) {
            case "Marisa":
                $pesan = $_POST['nama']." adalah orang Banyuwangi";
            break;
            case "Rezta":
                $pesan = $_POST['nama']." berasal dari Solo";
            break;
            default:
                $pesan = $_POST['nama']." bukan berasal dari Solo";
        }

        for($i=0; $i<$_POST['no'];$i++) {
            echo $pesan."<br/>";
        }

    } else {
        echo "Anda belum input nama dan jumlah";
    }
    ?>
</body>
</html>