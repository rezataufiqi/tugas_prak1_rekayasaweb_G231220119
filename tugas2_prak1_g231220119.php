<?php  

// Membuat variabel JSON  
$jsonData = '{
    "Nama": "Muhammad Reza Taufiqi",  
    "Usia": "21",  
    "Status": "Mahasiswa",  
    "Nim": "G.231.22.0119",
    "Hobi": ["Main game", "Olahraga"]
}';    

// Decode JSON ke dalam bentuk array PHP  
$arrayData = json_decode($jsonData, true);  // Menambahkan true untuk decode sebagai array

// Menampilkan data dalam format array PHP  
echo "Data dalam format array PHP: <br>";

foreach ($arrayData as $key => $value) {
    if (is_array($value)) {
        echo $key . ": " . implode(", ", $value) . "<br>";  // implode array jadi string dan tambahkan <br>
    } else {
        echo $key . ": " . $value . "<br>";  // Tambahkan <br> setelah setiap data
    }
}

?>
