<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <h1>Array PHP</h1>
    <?php 
      // // -----tipe data array-----
      //   $angka = [5,10,2,1,6];
      //   $kotak = array ('anjing', 'kura-kura', 'koala', 'banteng');
      //   $nama  = ['Hilman', 'Endy', 'Tiqa'];

      //   // print_r($kotak);
      //   // echo "<br>";
      //   // echo $nama[0];

      // // ------metode array-----
      // // array_unique, array_reverse, shuffle, count, sort
      //   // print_r(array_unique($kotak));
      //   // echo "<br>";
      //   // print_r(array_reverse($kotak));
      //   // shuffle($nama);
      //   // print_r($nama);

      //   // sort($angka);
      //   // print_r($angka);
      //   // echo "<br>";
      //   // echo count($nama) ;  

      //   // --------associative arry-------
      //   // key => isi
      //     $data = array("nama" => "alawi","Umur" => 21, 
      //               "kerja" => "mahasiswa");
      //     $data2 = array("istri" => "belum ada", 
      //                    "laptop" => "asus");
      //     // // print_r($data);
      //     // $data["nama"] = "Lalu alawi";
      //     // echo "nama adalah : " . $data['nama'];

      //   // metode assosiatif array
      //   // array_velues, array_keys, array_marge--
      //   // print_r(array_values($data));    
      //   // echo "<br>";
      //   // print_r(array_keys($data));
      //   // echo "<br>";
      //   print_r(array_merge($data, $data2));

      // multidimensi array--
      $data = array (
                array("programer", "21", "males"),
                array("designer", "24", "rajin"),
                array("manager", "34", "males banget")
        
      );

      // urtan mencetak per item
      // 00 01 02
      // 10 11 12
      // 20 21 22

      $data[0][2] = "rajin banget";
      echo $data[0][2];
      // print_r($data);
    ?>  
</body>

</html>
